/*	Copyright (c) 2017 Jean-Marc VIGLINO,
  released under the CeCILL-B license (French BSD license)
  (http://www.cecill.info/licences/Licence_CeCILL-B_V1-en.txt).
*/
import ol_ext_inherits from '../util/ext'
import {unByKey as ol_Observable_unByKey} from 'ol/Observable'
import {getDistance as ol_sphere_getDistance} from 'ol/sphere'
import {transform as ol_proj_transform} from 'ol/proj'
import ol_control_Control from 'ol/control/Control'

/**
 * Scale Control.
 * A control to display the scale of the center on the map
 *
 * @constructor
 * @extends {ol_control_Control}
 * @fires select
 * @fires change:input
 * @param {Object=} options
 *  @param {string} options.className control class name
 *  @param {string} options.ppi screen ppi, default 96
 * 	@param {string} options.editable make the control editable, default true
 */
var ol_control_Scale = function(options) {
  if (!options) options = {};
  if (options.typing == undefined) options.typing = 300;

  var element = document.createElement("DIV");
  var classNames = (options.className||"")+ " ol-scale";
  if (!options.target) {
  classNames += " ol-unselectable ol-control";
  }
  this._input = document.createElement("INPUT");
  this._input.value = '-';
  element.setAttribute('class', classNames);
  if (options.editable===false) this._input.readOnly = true;
  element.appendChild(this._input);

  ol_control_Control.call(this, {
  element: element,
  target: options.target
  });

  this._input.addEventListener("change", this.setScale.bind(this));
  
  this.set('ppi', options.ppi || 96)


};
ol_ext_inherits(ol_control_Scale, ol_control_Control);

/**
 * Remove the control from its current map and attach it to the new map.
 * Subclasses may set up event handlers to get notified about changes to
 * the map here.
 * @param {ol.Map} map Map.
 * @api stable
 */
ol_control_Scale.prototype.setMap = function (map) {
  if (this._listener) ol_Observable_unByKey(this._listener);
  this._listener = null;
  
  ol_control_Control.prototype.setMap.call(this, map);

  // Get change (new layer added or removed)
  if (map) {
    this._listener = map.on('moveend', this._showScale.bind(this));
  }
};

/** Display the scale
 */
ol_control_Scale.prototype._showScale = function () {
  var map = this.getMap();
  if (map) {
    var view = map.getView();
    var proj = view.getProjection();
    var center = view.getCenter();
    var px = map.getPixelFromCoordinate(center);
    px[1] += 1;
    var coord = map.getCoordinateFromPixel(px);
    var d = ol_sphere_getDistance(
      ol_proj_transform(center, proj, 'EPSG:4326'),
      ol_proj_transform(coord, proj, 'EPSG:4326'));
    d *= this.get('ppi')/.0254
    this._input.value = this.formatScale(d);
  }
};

/** Format the scale 1/d
 * @param {Number} d
 * @return {string} formated string
 */
ol_control_Scale.prototype.formatScale = function (d) {
  if (d>100) d = Math.round(d/100) * 100;
  else d = Math.round(d);
  return '1 / '+ d.toLocaleString();
};

/** Set the current scale (will change the scale of the map)
 * @param {Number} value the scale factor
 */
ol_control_Scale.prototype.setScale = function (value) {
  var map = this.getMap();
  if (map && value) {
    if (value.target) value = value.target.value;
    var fac = value;
    if (typeof(value)==='string') {
      fac = value.split('/')[1];
      if (!fac) fac = value;
      fac = fac.replace(/[^\d]/g,'');
      fac = parseInt(fac);
    }
    // Calculate new resolution
    var view = map.getView();
    var proj = view.getProjection();
    var center = view.getCenter();
    var px = map.getPixelFromCoordinate(center);
    px[1] += 1;
    var coord = map.getCoordinateFromPixel(px);
    var d = ol_sphere_getDistance(
      ol_proj_transform(center, proj, 'EPSG:4326'),
      ol_proj_transform(coord, proj, 'EPSG:4326'));
    d *= this.get('ppi')/.0254
    view.setResolution(view.getResolution()*fac/d);
  }
  this._showScale();
};

export default ol_control_Scale
/*	Copyright (c) 2017 Jean-Marc VIGLINO,
  released under the CeCILL-B license (French BSD license)
  (http://www.cecill.info/licences/Licence_CeCILL-B_V1-en.txt).
*/
import ol_ext_inherits from '../util/ext'
import {transform as ol_proj_transform} from 'ol/proj'
import ol_control_SearchJSON from "./SearchJSON";
import ol_geom_Point from 'ol/geom/Point'

/**
 * Search places using the photon API.
 *
 * @constructor
 * @extends {ol_control_SearchJSON}
 * @fires select
 * @param {Object=} Control options.
 *  @param {string} options.className control class name
 *  @param {Element | string | undefined} options.target Specify a target if you want the control to be rendered outside of the map's viewport.
 *  @param {string | undefined} options.label Text label to use for the search button, default "search"
 *  @param {string | undefined} options.placeholder placeholder, default "Search..."
 *  @param {number | undefined} options.typing a delay on each typing to start searching (ms), default 1000.
 *  @param {integer | undefined} options.minLength minimum length to start searching, default 3
 *  @param {integer | undefined} options.maxItems maximum number of items to display in the autocomplete list, default 10
 *  @param {function | undefined} options.handleResponse Handle server response to pass the features array to the list
 * 
 *  @param {string|undefined} options.url Url to photon api, default "http://photon.komoot.de/api/"
 *  @param {string|undefined} options.lang Force preferred language, default none
 *  @param {boolean} options.position Search, with priority to geo position, default false
 *  @param {function} options.getTitle a function that takes a feature and return the name to display in the index, default return street + name + contry
 */
var ol_control_SearchPhoton = function(options) {
  options = options || {};
  options.className = options.className || 'photon';
  options.url = options.url || 'http://photon.komoot.de/api/';
  options.copy = '<a href="http://www.openstreetmap.org/copyright" target="new">&copy; OpenStreetMap contributors</a>';
  ol_control_SearchJSON.call(this, options);
  this.set('lang', options.lang);
  this.set('position', options.position);
};
ol_ext_inherits(ol_control_SearchPhoton, ol_control_SearchJSON);

/** Returns the text to be displayed in the menu
*	@param {ol.Feature} f the feature
*	@return {string} the text to be displayed in the index
*	@api
*/
ol_control_SearchPhoton.prototype.getTitle = function (f) {
  var p = f.properties;
  return (p.housenumber||"")
    + " "+(p.street || p.name || "")
    + "<i>"
    + " "+(p.postcode||"")
    + " "+(p.city||"")
    + " ("+p.country
    + ")</i>";
};

/** 
 * @param {string} s the search string
 * @return {Object} request data (as key:value)
 * @api
 */
ol_control_SearchPhoton.prototype.requestData = function (s) {
  var data = {
    q: s,
    lang: this.get('lang'),
    limit: this.get('maxItems')
  }
  // Handle position proirity
  if (this.get('position')) {
    var view = this.getMap().getView();
    var pt = new ol_geom_Point(view.getCenter());
    pt = (pt.transform (view.getProjection(), "EPSG:4326")).getCoordinates();

    data.lon = pt[0];
    data.lat = pt[1];
  }
  return data;
};

/**
 * Handle server response to pass the features array to the list
 * @param {any} response server response
 * @return {Array<any>} an array of feature
 */
ol_control_SearchPhoton.prototype.handleResponse = function (response) {
  return response.features;
};

/** Prevent same feature to be drawn twice: test equality
 * @param {} f1 First feature to compare
 * @param {} f2 Second feature to compare
 * @return {boolean}
 * @api
 */
ol_control_SearchPhoton.prototype.equalFeatures = function (f1, f2) {
  return (this.getTitle(f1) === this.getTitle(f2)
    && f1.geometry.coordinates[0] === f2.geometry.coordinates[0]
    && f1.geometry.coordinates[1] === f2.geometry.coordinates[1]);
};

/** A ligne has been clicked in the menu > dispatch event
*	@param {any} f the feature, as passed in the autocomplete
*	@api
*/
ol_control_SearchPhoton.prototype.select = function (f) {
  var c = f.geometry.coordinates;
  // Add coordinate to the event
  try {
    c = ol_proj_transform (f.geometry.coordinates, 'EPSG:4326', this.getMap().getView().getProjection());
  } catch(e) { /* ok */ }
  this.dispatchEvent({ type:"select", search:f, coordinate: c });
};

/** Get data for reverse geocode 
 * @param {ol.coordinate} coord
 */
ol_control_SearchPhoton.prototype.reverseData = function (coord) {
  var lonlat = ol_proj_transform (coord, this.getMap().getView().getProjection(), 'EPSG:4326');
  return { lon: lonlat[0], lat: lonlat[1] };
};

/** Reverse geocode
 * @param {ol.coordinate} coord
 * @api
 */
ol_control_SearchPhoton.prototype.reverseGeocode = function (coord, cback) {
  this.ajax(
    this.get('url').replace('/api/', '/reverse/').replace('/search/', '/reverse/'),
    this.reverseData(coord),
    function(resp) {
      if (resp.features) resp = resp.features;
      if (!(resp instanceof Array)) resp = [resp];
      if (cback) {
        cback.call(this, resp);
      } else {
        this._handleSelect(resp[0], true);
        // this.setInput('', true);
      }
    }.bind(this)
  );
};
  
export default ol_control_SearchPhoton

(window.webpackJsonp=window.webpackJsonp||[]).push([[98],{227:function(t,e,n){"use strict";var o=n(14),a=n(32),i=n(74),r=n(43),c=function(t){function e(e){var n=e||{};t.call(this,{element:document.createElement("div"),target:n.target}),this.extent=n.extent?n.extent:null;var a=void 0!==n.className?n.className:"ol-zoom-extent",i=void 0!==n.label?n.label:"E",c=void 0!==n.tipLabel?n.tipLabel:"Fit to extent",l=document.createElement("button");l.setAttribute("type","button"),l.title=c,l.appendChild("string"==typeof i?document.createTextNode(i):i),l.addEventListener(o.a.CLICK,this.handleClick_.bind(this),!1);var s=a+" "+r.e+" "+r.b,p=this.element;p.className=s,p.appendChild(l)}return t&&(e.__proto__=t),e.prototype=Object.create(t&&t.prototype),e.prototype.constructor=e,e.prototype.handleClick_=function(t){t.preventDefault(),this.handleZoomToExtent()},e.prototype.handleZoomToExtent=function(){var t=this.getMap().getView(),e=this.extent?this.extent:t.getProjection().getExtent();t.fitInternal(Object(a.d)(e))},e}(i.a);e.a=c},335:function(t,e,n){"use strict";n.r(e);var o=n(3),a=n(2),i=n(51),r=n(227),c=n(5),l=n(9);new o.a({controls:Object(i.a)().extend([new r.a({extent:[813079.7791264898,5929220.284081122,848966.9639063801,5936863.986909639]})]),layers:[new c.a({source:new l.b})],target:"map",view:new a.a({center:[0,0],zoom:2})})}},[[335,0]]]);
//# sourceMappingURL=navigation-controls.js.map
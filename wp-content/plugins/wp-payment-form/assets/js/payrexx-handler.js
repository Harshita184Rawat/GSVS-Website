!function(n){var t={};function r(e){if(t[e])return t[e].exports;var o=t[e]={i:e,l:!1,exports:{}};return n[e].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=n,r.c=t,r.d=function(n,t,e){r.o(n,t)||Object.defineProperty(n,t,{enumerable:!0,get:e})},r.r=function(n){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},r.t=function(n,t){if(1&t&&(n=r(n)),8&t)return n;if(4&t&&"object"==typeof n&&n&&n.__esModule)return n;var e=Object.create(null);if(r.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:n}),2&t&&"string"!=typeof n)for(var o in n)r.d(e,o,function(t){return n[t]}.bind(null,o));return e},r.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return r.d(t,"a",t),t},r.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},r.p="/",r(r.s=806)}({10:function(n,t){n.exports=function(n){try{return!!n()}catch(n){return!0}}},11:function(n,t,r){var e=r(4),o=r(16),i=r(14),u=r(18),c=r(27),f=function(n,t,r){var a,s,p,l,y=n&f.F,v=n&f.G,d=n&f.S,x=n&f.P,h=n&f.B,m=v?e:d?e[t]||(e[t]={}):(e[t]||{}).prototype,b=v?o:o[t]||(o[t]={}),_=b.prototype||(b.prototype={});for(a in v&&(r=t),r)p=((s=!y&&m&&void 0!==m[a])?m:r)[a],l=h&&s?c(p,e):x&&"function"==typeof p?c(Function.call,p):p,m&&u(m,a,p,n&f.U),b[a]!=p&&i(b,a,l),x&&_[a]!=p&&(_[a]=p)};e.core=o,f.F=1,f.G=2,f.S=4,f.P=8,f.B=16,f.W=32,f.U=64,f.R=128,n.exports=f},12:function(n,t,r){n.exports=!r(10)((function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a}))},13:function(n,t,r){var e=r(9);n.exports=function(n){if(!e(n))throw TypeError(n+" is not an object!");return n}},14:function(n,t,r){var e=r(15),o=r(30);n.exports=r(12)?function(n,t,r){return e.f(n,t,o(1,r))}:function(n,t,r){return n[t]=r,n}},15:function(n,t,r){var e=r(13),o=r(48),i=r(34),u=Object.defineProperty;t.f=r(12)?Object.defineProperty:function(n,t,r){if(e(n),t=i(t,!0),e(r),o)try{return u(n,t,r)}catch(n){}if("get"in r||"set"in r)throw TypeError("Accessors not supported!");return"value"in r&&(n[t]=r.value),n}},16:function(n,t){var r=n.exports={version:"2.6.12"};"number"==typeof __e&&(__e=r)},17:function(n,t){var r={}.hasOwnProperty;n.exports=function(n,t){return r.call(n,t)}},18:function(n,t,r){var e=r(4),o=r(14),i=r(17),u=r(19)("src"),c=r(60),f=(""+c).split("toString");r(16).inspectSource=function(n){return c.call(n)},(n.exports=function(n,t,r,c){var a="function"==typeof r;a&&(i(r,"name")||o(r,"name",t)),n[t]!==r&&(a&&(i(r,u)||o(r,u,n[t]?""+n[t]:f.join(String(t)))),n===e?n[t]=r:c?n[t]?n[t]=r:o(n,t,r):(delete n[t],o(n,t,r)))})(Function.prototype,"toString",(function(){return"function"==typeof this&&this[u]||c.call(this)}))},19:function(n,t){var r=0,e=Math.random();n.exports=function(n){return"Symbol(".concat(void 0===n?"":n,")_",(++r+e).toString(36))}},20:function(n,t){var r={}.toString;n.exports=function(n){return r.call(n).slice(8,-1)}},22:function(n,t,r){var e=r(32),o=Math.min;n.exports=function(n){return n>0?o(e(n),9007199254740991):0}},23:function(n,t,r){var e=r(29),o=r(35);r(97)("keys",(function(){return function(n){return o(e(n))}}))},24:function(n,t,r){var e=r(16),o=r(4),i=o["__core-js_shared__"]||(o["__core-js_shared__"]={});(n.exports=function(n,t){return i[n]||(i[n]=void 0!==t?t:{})})("versions",[]).push({version:e.version,mode:r(31)?"pure":"global",copyright:"© 2020 Denis Pushkarev (zloirock.ru)"})},25:function(n,t,r){var e=r(42),o=r(28);n.exports=function(n){return e(o(n))}},26:function(n,t,r){"use strict";var e=r(11),o=r(41)(5),i=!0;"find"in[]&&Array(1).find((function(){i=!1})),e(e.P+e.F*i,"Array",{find:function(n){return o(this,n,arguments.length>1?arguments[1]:void 0)}}),r(49)("find")},27:function(n,t,r){var e=r(44);n.exports=function(n,t,r){if(e(n),void 0===t)return n;switch(r){case 1:return function(r){return n.call(t,r)};case 2:return function(r,e){return n.call(t,r,e)};case 3:return function(r,e,o){return n.call(t,r,e,o)}}return function(){return n.apply(t,arguments)}}},28:function(n,t){n.exports=function(n){if(null==n)throw TypeError("Can't call method on  "+n);return n}},29:function(n,t,r){var e=r(28);n.exports=function(n){return Object(e(n))}},30:function(n,t){n.exports=function(n,t){return{enumerable:!(1&n),configurable:!(2&n),writable:!(4&n),value:t}}},31:function(n,t){n.exports=!1},32:function(n,t){var r=Math.ceil,e=Math.floor;n.exports=function(n){return isNaN(n=+n)?0:(n>0?e:r)(n)}},34:function(n,t,r){var e=r(9);n.exports=function(n,t){if(!e(n))return n;var r,o;if(t&&"function"==typeof(r=n.toString)&&!e(o=r.call(n)))return o;if("function"==typeof(r=n.valueOf)&&!e(o=r.call(n)))return o;if(!t&&"function"==typeof(r=n.toString)&&!e(o=r.call(n)))return o;throw TypeError("Can't convert object to primitive value")}},35:function(n,t,r){var e=r(85),o=r(63);n.exports=Object.keys||function(n){return e(n,o)}},4:function(n,t){var r=n.exports="undefined"!=typeof window&&window.Math==Math?window:"undefined"!=typeof self&&self.Math==Math?self:Function("return this")();"number"==typeof __g&&(__g=r)},41:function(n,t,r){var e=r(27),o=r(42),i=r(29),u=r(22),c=r(61);n.exports=function(n,t){var r=1==n,f=2==n,a=3==n,s=4==n,p=6==n,l=5==n||p,y=t||c;return function(t,c,v){for(var d,x,h=i(t),m=o(h),b=e(c,v,3),_=u(m.length),g=0,w=r?y(t,_):f?y(t,0):void 0;_>g;g++)if((l||g in m)&&(x=b(d=m[g],g,h),n))if(r)w[g]=x;else if(x)switch(n){case 3:return!0;case 5:return d;case 6:return g;case 2:w.push(d)}else if(s)return!1;return p?-1:a||s?s:w}}},42:function(n,t,r){var e=r(20);n.exports=Object("z").propertyIsEnumerable(0)?Object:function(n){return"String"==e(n)?n.split(""):Object(n)}},43:function(n,t,r){var e=r(9),o=r(4).document,i=e(o)&&e(o.createElement);n.exports=function(n){return i?o.createElement(n):{}}},44:function(n,t){n.exports=function(n){if("function"!=typeof n)throw TypeError(n+" is not a function!");return n}},48:function(n,t,r){n.exports=!r(12)&&!r(10)((function(){return 7!=Object.defineProperty(r(43)("div"),"a",{get:function(){return 7}}).a}))},49:function(n,t,r){var e=r(5)("unscopables"),o=Array.prototype;null==o[e]&&r(14)(o,e,{}),n.exports=function(n){o[e][n]=!0}},5:function(n,t,r){var e=r(24)("wks"),o=r(19),i=r(4).Symbol,u="function"==typeof i;(n.exports=function(n){return e[n]||(e[n]=u&&i[n]||(u?i:o)("Symbol."+n))}).store=e},50:function(n,t,r){var e=r(20);n.exports=Array.isArray||function(n){return"Array"==e(n)}},557:function(n,t,r){"use strict";r(808)("link",(function(n){return function(t){return n(this,"a","href",t)}}))},60:function(n,t,r){n.exports=r(24)("native-function-to-string",Function.toString)},61:function(n,t,r){var e=r(62);n.exports=function(n,t){return new(e(n))(t)}},62:function(n,t,r){var e=r(9),o=r(50),i=r(5)("species");n.exports=function(n){var t;return o(n)&&("function"!=typeof(t=n.constructor)||t!==Array&&!o(t.prototype)||(t=void 0),e(t)&&null===(t=t[i])&&(t=void 0)),void 0===t?Array:t}},63:function(n,t){n.exports="constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")},65:function(n,t,r){var e=r(24)("keys"),o=r(19);n.exports=function(n){return e[n]||(e[n]=o(n))}},806:function(n,t,r){n.exports=r(807)},807:function(n,t,r){"use strict";r.r(t);r(557),r(23),r(26);function e(n,t){for(var r=0;r<t.length;r++){var e=t[r];e.enumerable=e.enumerable||!1,e.configurable=!0,"value"in e&&(e.writable=!0),Object.defineProperty(n,e.key,e)}}var o,i=function(){function n(t,r){!function(n,t){if(!(n instanceof t))throw new TypeError("Cannot call a class as a function")}(this,n),this.$form=t.form,this.payformHandler=t,this.config=r,this.formId=r.form_id,this.generalConfig=window.wp_payform_general}var t,r,o;return t=n,(r=[{key:"init",value:function(){var n=this;this.$form.on("wppayform_next_action_payrexx",(function(t,r){var e=r.response;jQuery("<div/>",{id:"form_success",class:"wpf_form_notice_success wpf_payrexx_text"}).html(e.data.message).insertAfter(n.$form),"initPayrexxModal"===e.data.actionName?n.initPayrexxModal(e.data):alert("No method found")}))}},{key:"initPayrexxModal",value:function(n){var t=this,r=n.modal_data,e=n.success_url,o="form-payrexx-".concat(this.formId),i='<a style="display: none;" id="'.concat(o,'" data-href="').concat(r.link,'"><a/>');t.$form.append(i),jQuery("#"+o).payrexxModal({hidden:function(n){0!==Object.keys(n).length&&(location.href=e),t.payformHandler.buttonState("loading","",!1),t.$form.parent().find(".wpf_payrexx_text").remove()}}).click()}}])&&e(t.prototype,r),o&&e(t,o),Object.defineProperty(t,"prototype",{writable:!1}),n}();(o=jQuery).each(o("form.wppayform_has_payment"),(function(){o(this).on("wppayform_init_single",(function(n,t,r){new i(t,r).init()}))}))},808:function(n,t,r){var e=r(11),o=r(10),i=r(28),u=/"/g,c=function(n,t,r,e){var o=String(i(n)),c="<"+t;return""!==r&&(c+=" "+r+'="'+String(e).replace(u,"&quot;")+'"'),c+">"+o+"</"+t+">"};n.exports=function(n,t){var r={};r[n]=t(c),e(e.P+e.F*o((function(){var t=""[n]('"');return t!==t.toLowerCase()||t.split('"').length>3})),"String",r)}},85:function(n,t,r){var e=r(17),o=r(25),i=r(88)(!1),u=r(65)("IE_PROTO");n.exports=function(n,t){var r,c=o(n),f=0,a=[];for(r in c)r!=u&&e(c,r)&&a.push(r);for(;t.length>f;)e(c,r=t[f++])&&(~i(a,r)||a.push(r));return a}},88:function(n,t,r){var e=r(25),o=r(22),i=r(89);n.exports=function(n){return function(t,r,u){var c,f=e(t),a=o(f.length),s=i(u,a);if(n&&r!=r){for(;a>s;)if((c=f[s++])!=c)return!0}else for(;a>s;s++)if((n||s in f)&&f[s]===r)return n||s||0;return!n&&-1}}},89:function(n,t,r){var e=r(32),o=Math.max,i=Math.min;n.exports=function(n,t){return(n=e(n))<0?o(n+t,0):i(n,t)}},9:function(n,t){n.exports=function(n){return"object"==typeof n?null!==n:"function"==typeof n}},97:function(n,t,r){var e=r(11),o=r(16),i=r(10);n.exports=function(n,t){var r=(o.Object||{})[n]||Object[n],u={};u[n]=t(r),e(e.S+e.F*i((function(){r(1)})),"Object",u)}}});
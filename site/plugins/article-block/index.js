(()=>{(function(){"use strict";var f=function(){var e=this,r=e.$createElement,i=e._self._c||r;return i("k-block-figure",{staticClass:"k-card",on:{open:e.open,update:e.update}},[i("k-aspect-ratio",{staticClass:"k-image k-card-image",attrs:{ratio:"1/1","data-back":"pattern"}},[e.article.image?i("img",{attrs:{src:e.article.image.url,alt:""}}):e._e()]),i("figcaption",{staticClass:"k-card-content"},[i("span",{staticClass:"k-card-text"},[e._v(e._s(e.article.text))])])],1)},d=[],R="";function p(e,r,i,C,o,c,_,g){var t=typeof e=="function"?e.options:e;r&&(t.render=r,t.staticRenderFns=i,t._compiled=!0),C&&(t.functional=!0),c&&(t._scopeId="data-v-"+c);var a;if(_?(a=function(n){n=n||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext,!n&&typeof __VUE_SSR_CONTEXT__!="undefined"&&(n=__VUE_SSR_CONTEXT__),o&&o.call(this,n),n&&n._registeredComponents&&n._registeredComponents.add(_)},t._ssrRegister=a):o&&(a=g?function(){o.call(this,(t.functional?this.parent:this).$root.$options.shadowRoot)}:o),a)if(t.functional){t._injectStyles=a;var b=t.render;t.render=function($,u){return a.call(u),b($,u)}}else{var l=t.beforeCreate;t.beforeCreate=l?[].concat(l,a):[a]}return{exports:e,options:t}}const v={computed:{article(){return this.content.article[0]||{}}}},s={};var h=p(v,f,d,!1,k,null,null,null);function k(e){for(let r in s)this[r]=s[r]}var m=function(){return h.exports}();panel.plugin("cookbook/article-block",{blocks:{article:m}})})();})();
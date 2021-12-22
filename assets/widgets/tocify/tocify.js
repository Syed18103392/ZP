!function(a){"use strict";a(window.jQuery,window,document)}(function(a,b,c,d){"use strict";var e="tocify",f="tocify-focus",g="tocify-hover",h="tocify-hide",i="tocify-header",j="."+i,k="tocify-subheader",l="."+k,m="tocify-item",n="."+m,o="tocify-extend-page",p="."+o;a.widget("toc.tocify",{version:"1.9.0",options:{context:"body",ignoreSelector:null,selectors:"h1, h2, h3",showAndHide:!0,showEffect:"slideDown",showEffectSpeed:"medium",hideEffect:"slideUp",hideEffectSpeed:"medium",smoothScroll:!0,smoothScrollSpeed:"medium",scrollTo:0,showAndHideOnScroll:!0,highlightOnScroll:!0,highlightOffset:40,theme:"bootstrap",extendPage:!0,extendPageOffset:100,history:!0,scrollHistory:!1,hashGenerator:"compact",highlightDefault:!0},_create:function(){var c=this;c.extendPageScroll=!0,c.items=[],c._generateToc(),c._addCSSClasses(),c.webkit=function(){for(var a in b)if(a&&-1!==a.toLowerCase().indexOf("webkit"))return!0;return!1}(),c._setEventHandlers(),a(b).load(function(){c._setActiveElement(!0),a("html, body").promise().done(function(){setTimeout(function(){c.extendPageScroll=!1},0)})})},_generateToc:function(){var b,c,d=this,f=d.options.ignoreSelector;return b=-1!==this.options.selectors.indexOf(",")?a(this.options.context).find(this.options.selectors.replace(/ /g,"").substr(0,this.options.selectors.indexOf(","))):a(this.options.context).find(this.options.selectors.replace(/ /g,"")),b.length?(d.element.addClass(e),void b.each(function(b){a(this).is(f)||(c=a("<ul/>",{id:i+b,"class":i}).append(d._nestElements(a(this),b)),d.element.append(c),a(this).nextUntil(this.nodeName.toLowerCase()).each(function(){0===a(this).find(d.options.selectors).length?a(this).filter(d.options.selectors).each(function(){a(this).is(f)||d._appendSubheaders.call(this,d,c)}):a(this).find(d.options.selectors).each(function(){a(this).is(f)||d._appendSubheaders.call(this,d,c)})}))})):void d.element.addClass(h)},_setActiveElement:function(a){var c=this,d=b.location.hash.substring(1),e=c.element.find('li[data-unique="'+d+'"]');return d.length?(c.element.find("."+c.focusClass).removeClass(c.focusClass),e.addClass(c.focusClass),c.options.showAndHide&&e.click()):(c.element.find("."+c.focusClass).removeClass(c.focusClass),!d.length&&a&&c.options.highlightDefault&&c.element.find(n).first().addClass(c.focusClass)),c},_nestElements:function(b,c){var d,e,f;return d=a.grep(this.items,function(a){return a===b.text()}),d.length?this.items.push(b.text()+c):this.items.push(b.text()),f=this._generateHashValue(d,b,c),e=a("<li/>",{"class":m,"data-unique":f}).append(a("<a/>",{text:b.text()})),b.before(a("<div/>",{name:f,"data-unique":f})),e},_generateHashValue:function(a,b,c){var d="",e=this.options.hashGenerator;if("pretty"===e){for(d=b.text().toLowerCase().replace(/\s/g,"-");d.indexOf("--")>-1;)d=d.replace(/--/g,"-");for(;d.indexOf(":-")>-1;)d=d.replace(/:-/g,"-")}else d="function"==typeof e?e(b.text(),b):b.text().replace(/\s/g,"");return a.length&&(d+=""+c),d},_appendSubheaders:function(b,c){var d=a(this).index(b.options.selectors),e=a(b.options.selectors).eq(d-1),f=+a(this).prop("tagName").charAt(1),g=+e.prop("tagName").charAt(1);g>f?b.element.find(l+"[data-tag="+f+"]").last().append(b._nestElements(a(this),d)):f===g?c.find(n).last().after(b._nestElements(a(this),d)):c.find(n).last().after(a("<ul/>",{"class":k,"data-tag":f})).next(l).append(b._nestElements(a(this),d))},_setEventHandlers:function(){var d=this;this.element.on("click.tocify","li",function(c){if(d.options.history&&(b.location.hash=a(this).attr("data-unique")),d.element.find("."+d.focusClass).removeClass(d.focusClass),a(this).addClass(d.focusClass),d.options.showAndHide){var e=a('li[data-unique="'+a(this).attr("data-unique")+'"]');d._triggerShow(e)}d._scrollTo(a(this))}),this.element.find("li").on({"mouseenter.tocify":function(){a(this).addClass(d.hoverClass),a(this).css("cursor","pointer")},"mouseleave.tocify":function(){"bootstrap"!==d.options.theme&&a(this).removeClass(d.hoverClass)}}),(d.options.extendPage||d.options.highlightOnScroll||d.options.scrollHistory||d.options.showAndHideOnScroll)&&a(b).on("scroll.tocify",function(){a("html, body").promise().done(function(){var e,f,g,h,i=a(b).scrollTop(),j=a(b).height(),k=a(c).height(),l=a("body")[0].scrollHeight;if(d.options.extendPage&&(d.webkit&&i>=l-j-d.options.extendPageOffset||!d.webkit&&j+i>k-d.options.extendPageOffset)&&!a(p).length){if(f=a('div[data-unique="'+a(n).last().attr("data-unique")+'"]'),!f.length)return;g=f.offset().top,a(d.options.context).append(a("<div />",{"class":o,height:Math.abs(g-i)+"px","data-unique":o})),d.extendPageScroll&&(h=d.element.find("li.active"),d._scrollTo(a('div[data-unique="'+h.attr("data-unique")+'"]')))}setTimeout(function(){var c,f=null,g=null,h=a(d.options.context).find("div[data-unique]");h.each(function(b){var c=Math.abs((a(this).next().length?a(this).next():a(this)).offset().top-i-d.options.highlightOffset);return null==f||f>c?(f=c,void(g=b)):!1}),c=a(h[g]).attr("data-unique"),e=a('li[data-unique="'+c+'"]'),d.options.highlightOnScroll&&e.length&&(d.element.find("."+d.focusClass).removeClass(d.focusClass),e.addClass(d.focusClass)),d.options.scrollHistory&&b.location.hash!=="#"+c&&b.location.replace("#"+c),d.options.showAndHideOnScroll&&d.options.showAndHide&&d._triggerShow(e,!0)},0)})})},show:function(b,c){var d=this;if(!b.is(":visible"))switch(b.find(l).length||b.parent().is(j)||b.parent().is(":visible")?b.children(l).length||b.parent().is(j)||(b=b.closest(l)):b=b.parents(l).add(b),d.options.showEffect){case"none":b.show();break;case"show":b.show(d.options.showEffectSpeed);break;case"slideDown":b.slideDown(d.options.showEffectSpeed);break;case"fadeIn":b.fadeIn(d.options.showEffectSpeed);break;default:b.show()}return b.parent().is(j)?d.hide(a(l).not(b)):d.hide(a(l).not(b.closest(j).find(l).not(b.siblings()))),d},hide:function(a){var b=this;switch(b.options.hideEffect){case"none":a.hide();break;case"hide":a.hide(b.options.hideEffectSpeed);break;case"slideUp":a.slideUp(b.options.hideEffectSpeed);break;case"fadeOut":a.fadeOut(b.options.hideEffectSpeed);break;default:a.hide()}return b},_triggerShow:function(a,b){var c=this;return a.parent().is(j)||a.next().is(l)?c.show(a.next(l),b):a.parent().is(l)&&c.show(a.parent(),b),c},_addCSSClasses:function(){return"jqueryui"===this.options.theme?(this.focusClass="ui-state-default",this.hoverClass="ui-state-hover",this.element.addClass("ui-widget").find(".toc-title").addClass("ui-widget-header").end().find("li").addClass("ui-widget-content")):"bootstrap"===this.options.theme?(this.element.find(j+","+l).addClass("nav nav-list"),this.focusClass="active"):(this.focusClass=f,this.hoverClass=g),this},setOption:function(){a.Widget.prototype._setOption.apply(this,arguments)},setOptions:function(){a.Widget.prototype._setOptions.apply(this,arguments)},_scrollTo:function(b){var c=this,d=c.options.smoothScroll||0,e=c.options.scrollTo,f=a('div[data-unique="'+b.attr("data-unique")+'"]');return f.length?(a("html, body").promise().done(function(){a("html, body").animate({scrollTop:f.offset().top-(a.isFunction(e)?e.call():e)+"px"},{duration:d})}),c):c}})});
var isMob,NoiseButton;function mediaQueries(e,t,i){var n=function(e){e.matches?t():i()};mql=window.matchMedia("all and (max-width: "+e+"px)"),n(mql),mql.addListener(n)}$(function(){document.body.classList.add("page-project"),(isMob=function(){var e,t=(e=navigator.userAgent||navigator.vendor||window.opera,!(!/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(e)&&!/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(e.substr(0,4))));return t&&$("body").addClass("mob"),t})();/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream&&$("body").addClass("ios");!!navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i)&&$("body").addClass("osx"),!1===function(){var e=window.navigator.userAgent,t=e.indexOf("MSIE ");if(0<t)return parseInt(e.substring(t+5,e.indexOf(".",t)),10);if(0<e.indexOf("Trident/")){var i=e.indexOf("rv:");return parseInt(e.substring(i+3,e.indexOf(".",i)),10)}var n=e.indexOf("Edge/");if(0<n)return parseInt(e.substring(n+5,e.indexOf(".",n)),10);return!1}()?$("body").removeClass("ie"):$("body").addClass("ie"),$(".hamburger, .menu-list-item").click(function(){$(".menu, .hamburger").toggleClass("is-active")}),$("a[href]").on("click",function(e){if(1===$(this).parents("#panel").length)return!1;var t=$(this).attr("href");if(0!==$(t).length){e.preventDefault();var i=$(t).offset().top+parseInt($(t).css("padding-top"));$("html, body").animate({scrollTop:i-5},1e3)}});var e=function(){$(".preview-info__video").length||$(".preview-info").css("margin-top","5em")};e(),$(window).on("resize",e),$(function(){$(".form__input").on("focus",function(){$(".form__input").each(function(e,t){0===$(t).val().length&&$(t).parent().removeClass("clicked")}),$(this).parent().addClass("clicked")})}),$(".comment__reply").on("click",function(){var e=".form",t=$(e).offset().top+parseInt($(e).css("padding-top"));$("html, body").animate({scrollTop:t},1e3),$('.form__input[name="comment-name"]').focus()}),function(){if($("#comment-template").length){var e=document.querySelector("#comment-template").content.querySelector(".comment");e.querySelector(".comment__author").textContent="Пантелеймон Христорождественский",$(".comments__left").append(e)}}()}),$(function(){if(!isMob()){var o,e="!<>-_\\/[]{}—=+*^?#________",t=$(".text-code-hover-feel");function a(e,t){for(var i="",n="!<>-_\\/[]{}—=+*^?#________"+e,o=0;o<t;o++)i+=n.charAt(Math.floor(Math.random()*n.length));return i}t.each(function(e,t){$(t).attr("data-text-scramble-original",$(t).text())}),$(".header__nav li").each(function(e,t){0!==$(t).width()&&($(t).width($(t).width()),$(t).height($(t).height()),$(t).find("span").width($(t).width()))}),$(".example__link").each(function(e,t){0!==$(t).width()&&($(t).width($(t).width()),$(t).height($(t).height()))}),extrachars=t.text(),$(".header__nav li:not(.authorized)").mouseenter(function(){var e=$(this).find("a"),t=e.text().length,i=1;function n(){e.text(a(extrachars,t))}n(),o=setInterval(function(){if(2<i)return e.text(e.attr("data-text-scramble-original")),clearInterval(o),!1;n(),i++},150)}).mouseleave(function(){var e=$(this).find("a");$(e).text($(e).attr("data-text-scramble-original")),clearInterval(o)}),$(".example__link").mouseenter(function(){var e=$(this),t=e.text().length,i=1;function n(){e.text(a(extrachars,t))}n(),o=setInterval(function(){if(2<i)return e.text(e.attr("data-text-scramble-original")),clearInterval(o),!1;n(),i++},150)}).mouseleave(function(){var e=$(this);$(e).text($(e).attr("data-text-scramble-original")),clearInterval(o)});var n=l(t.text()),r=l(e);for(i=0;i<n;i++)c(n),s(e,c(r));function s(e,t){return e.charAt(t+1)}function l(e){return e.length}function c(e){return Math.floor(Math.random()*e)+1}s(e,c(r))}}),$(function(){var i=function(){function n(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(e,t,i){return t&&n(e.prototype,t),i&&n(e,i),e}}();function a(e){return function(){var s=e.apply(this,arguments);return new Promise(function(a,r){return function t(e,i){try{var n=s[e](i),o=n.value}catch(e){return void r(e)}if(!n.done)return Promise.resolve(o).then(function(e){t("next",e)},function(e){t("throw",e)});a(o)}("next")})}}function r(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}NoiseButton=function(e){function o(e){var t,i=this;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,o);var n=r(this,(o.__proto__||Object.getPrototypeOf(o)).call(this,{autoStart:!1,autoResize:!0,transparent:!0}));return n.resize=o.debounce(a(regeneratorRuntime.mark(function e(){return regeneratorRuntime.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:n.setSize()&&(n.container.removeChildren(0,n.container.children.length-1),n.addGraphics(),n.createTimeLine(),n.render());case 1:case"end":return e.stop()}},e,i)})),n,100),n.options=Object.assign({},{backgroundColor:4748748,backgroundAlpha:1,polygon:"0, 0, 0, 0",borderColor:4748748,borderWidth:0,wavesAlpha:1,displacementScale:{x:30,y:50},displacementMap:"../img/displace-map.jpg"},e),n.polygon=n.options.polygon.replace(/\s/g,"").split(",").map(function(e){var t=0|e;return t>n.options.borderWidth?t-n.options.borderWidth/2:t}),n.offset=20,n.animate=!1,t=n.createCanvas(),r(n,t)}var t;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(o,PIXI.Application),i(o,[{key:"createCanvas",value:(t=a(regeneratorRuntime.mark(function e(){var t;return regeneratorRuntime.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:this.options.element.classList.add("noise-container"),this.view.classList.add("noise-canvas"),this.options.element.appendChild(this.view),this.container=new PIXI.Container,this.stage.addChild(this.container),e.next=7;case 7:t=e.sent,this.waves=new PIXI.Sprite(t),this.noiseSprite=PIXI.Sprite.fromImage(this.options.displacementMap),this.setSize(),this.addGraphics(),this.bindEvents(),this.render(),$(this.options.element).hasClass("main__btn")||this.options.element.classList.add("canvas-ready");case 15:case"end":return e.stop()}},e,this)})),function(){return t.apply(this,arguments)})},{key:"addGraphics",value:function(){this.container.addChild(this.getPolygon(!0)),this.options.waves&&this.drawWaves();var e=new PIXI.Graphics;e.beginFill(0,0),e.drawRect(0,0,this.width,this.width),this.container.addChild(e),this.container.addChild(this.getPolygon()),this.setMask(),this.addFilter()}},{key:"setMask",value:function(){var e=this.getPolygon();this.stage.addChild(e),this.container.mask=e}},{key:"drawWaves",value:function(){this.waves.alpha=1-this.options.wavesAlpha,this.waves.y=this.height*this.options.wavesPos.y,this.container.addChild(this.waves),this.waves.width=this.waves.height=this.width}},{key:"setSize",value:function(){var e=this.options.element.offsetWidth,t=this.options.element.offsetHeight;return this.width=e+2*this.offset,this.height=t+2*this.offset,this.oldWidth!==this.width&&(this.renderer.resize(this.width,this.height),this.oldWidth=this.width,!0)}},{key:"loadTexture",value:function(t){return new Promise(function(i){var e=new PIXI.loaders.Loader;e.add("waves",t),e.load(function(e,t){return i(t.waves.texture)})})}},{key:"addFilter",value:function(){this.container.addChild(this.noiseSprite),this.noiseFilter=new PIXI.filters.DisplacementFilter(this.noiseSprite),this.container.filters=[this.noiseFilter],this.noiseSprite.position.x=-this.width,this.noiseSprite.width=3*this.width,this.noiseFilter.scale.x=0,this.noiseFilter.scale.y=0}},{key:"createTimeLine",value:function(){var e=this;this.timeline=new TimelineMax({onUpdate:this.render.bind(this),paused:!0,onStart:function(){return e.animate=!0},onComplete:function(){return e.animate=!1}}).to(this.noiseFilter.scale,.2,{x:this.options.displacementScale.x,y:this.options.displacementScale.y}).fromTo(this.noiseSprite,.5,{x:-.66*this.noiseSprite.width},{x:0},"-=.2").to(this.noiseFilter.scale,.2,{x:0,y:0},"-=.2")}},{key:"play",value:function(){this.animate||this.timeline.play(0)}},{key:"bindEvents",value:function(){this.createTimeLine(),this.options.element.addEventListener("mouseenter",this.play.bind(this))}},{key:"getPolygon",value:function(e){var t=this.polygon,i=new PIXI.Graphics,n=this.width-2*this.offset-this.options.borderWidth,o=this.height-2*this.offset-this.options.borderWidth;i.position.x=this.offset+this.options.borderWidth/2,i.position.y=this.offset+this.options.borderWidth/2;var a=[[0,t[0]],[t[0],0],[n-t[1],0],[n,t[1]],[n,o-t[2]],[n-t[2],o],[t[3],o],[0,o-t[3]],[0,t[0]]];i.lineStyle(this.options.borderWidth,this.options.borderColor),i.beginFill(this.options.backgroundColor,e?1-this.options.backgroundAlpha:0);for(var r=0,s=[];r<a.length;r++)s.length&&s[0]===a[r][0]&&s[1]===a[r][1]||(0!==r?(s=a[r],i.lineTo(a[r][0],a[r][1])):(i.moveTo(a[r][0],a[r][1]),s=a[r]));return i.endFill(),i}}],[{key:"debounce",value:function(i,n,o,a){var r=arguments,s=void 0;return function(){var e=r,t=a&&!s;clearTimeout(s),s=setTimeout(function(){s=null,a||i.apply(n,e)},o),t&&i.apply(n,e)}}}]),o}(),$(".preview__link--github").length&&new NoiseButton({element:document.querySelector(".preview__link--github"),polygon:"23, 0, 23, 0",wavesPos:{y:0,x:0},borderWidth:2,borderColor:"0xb836c6",backgroundAlpha:1,wavesAlpha:.8,displacementMap:"../img/displace-map.jpg"}),$(".preview__link--site").length&&new NoiseButton({element:document.querySelector(".preview__link--site"),polygon:"23, 0, 23, 0",wavesPos:{y:0,x:0},borderWidth:2,borderColor:"0xb836c6",backgroundAlpha:1,wavesAlpha:.8,displacementMap:"../img/displace-map.jpg"}),$(".preview__publish-btn").length&&new NoiseButton({element:document.querySelector(".preview__publish-btn"),polygon:"23, 0, 23, 0",wavesPos:{y:0,x:0},borderWidth:2,backgroundColor:"0x882a91",borderColor:"0x882a91",backgroundAlpha:0,wavesAlpha:.8,displacementMap:"../img/displace-map.jpg"}),$(".preview__unvote-btn").length&&new NoiseButton({element:document.querySelector(".preview__unvote-btn"),polygon:"23, 0, 23, 0",wavesPos:{y:0,x:0},borderWidth:2,backgroundColor:"0x882a91",borderColor:"0x882a91",backgroundAlpha:1,wavesAlpha:.8,displacementMap:"../img/displace-map.jpg"}),$(".form__send").length&&new NoiseButton({element:document.querySelector(".form__send"),polygon:"23, 0, 23, 0",wavesPos:{y:0,x:0},borderWidth:2,backgroundColor:"0xb836c6",borderColor:"0xb836c6",backgroundAlpha:1,wavesAlpha:.8,displacementMap:"../img/displace-map.jpg"})}),$(function(){if(!isMob()){var e=new ScrollMagic.Controller;new ScrollMagic.Scene({triggerElement:".preview-info__video-wrap",triggerHook:"onLeave",offset:-window.innerHeight,duration:"100%"}).setTween((new TimelineMax).fromTo(".preview-info__video-wrap",1,{y:"20%"},{y:"-25%"})).addTo(e)}});
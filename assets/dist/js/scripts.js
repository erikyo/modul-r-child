"use strict";jQuery(document).ready(function(){var l=jQuery.noConflict(),t=document.getElementsByClassName("slider");if(t.length)for(var i=0;i<t.length;i++)t[i].classList.contains("slider-single")?l(t[i].children[0]).slick({infinite:!0,slidesToShow:1,autoplay:!0}):t[i].classList.contains("slider-multi")&&l(t[i].children[0]).slick({lazyLoad:"ondemand",dots:!0,infinite:!0,slidesToShow:3,autoplay:!0,centerMode:!0,responsive:[{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1,infinite:!0,dots:!1}},{breakpoint:400,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1}}]});l(".lightbox")&&l(".lightbox a").fancybox({caption:function(){var t=l(this).children("img").attr("alt").length?l(this).children("img").attr("alt"):"",i=0<l(this).next("figcaption").length?l(this).next("figcaption").text():"";return""!==i?i:""!==t?t:""}}),l(".lightbox-gallery")&&l(".lightbox-gallery a").click(function(){var t,i=l(this).closest(".wp-block-gallery").hasClass("slider")?(t=l(this).closest(".wp-block-gallery").find('.slick-slide:not(".slick-cloned") a'),l(this).closest(".slick-slide").attr("data-slick-index")):(t=l(this).closest(".wp-block-gallery").find("a"),l(this).closest("li").index()),e=[];return t.each(function(t,i){var s=l(this).children("img").attr("alt").length?l(this).children("img").attr("alt"):"",n=0<l(this).next("figcaption").length?l(this).next("figcaption").text():"";e.push({src:i.href,opts:{caption:(""!==n?n:""!==s?s:"")+'<br/><span class="fancybox-counter"><span data-fancybox-index></span> of <span data-fancybox-count></span></span>'}})}),l.fancybox.open(e,{loop:!1,index:i}),!1})});
"use strict";document.addEventListener("DOMContentLoaded",function(e){function t(e){(e=e.currentTarget.querySelector(".sub-menu"))&&e.classList.add("active")}function n(e){(e=e.currentTarget.querySelector(".sub-menu"))&&e.classList.remove("active")}var o=!!document.getElementById("site-navigation")&&document.getElementById("site-navigation").querySelectorAll("nav li");o&&o.forEach(function(e){e.addEventListener("mouseover",t),e.addEventListener("mouseout",n)})});
"use strict";var viewHeight,headerHeight,scrollOffset,headerDistanceFromTop,parallaxDefaultSpeed=.3,shiftView=200,vScrollTop=0,lastScroll=0;function throttle(e,t){var l=Date.now();return function(){l+t-Date.now()<0&&(e(),l=Date.now())}}var isInViewport=function(e){return!(e.bottom<0||0<=e.top-viewHeight)},isFullyVisible=function(e){var t=e.bottom-e.top>viewHeight?e.top+viewHeight:e.bottom;return 0<=e.top+shiftView&&t-shiftView<=document.documentElement.clientHeight};function VisibleItemsTrigger(l){var e=document.getElementsByClassName("interactive");[].slice.call(e).forEach(function(e){var t=e.getBoundingClientRect();isFullyVisible(t)?(e.classList.add("visible"),e.classList.add("already-see")):e.classList.remove("visible"),isInViewport(t)&&e.classList.contains("parallax")&&(t=-(window.pageYOffset+t.top-headerDistanceFromTop-l)*parallaxDefaultSpeed,e.getElementsByTagName("img").length&&(e.getElementsByTagName("img")[0].style.transform="translateY("+t+"px)"))})}function scrollCallback(){vScrollTop=window.pageYOffset,headerHeight=document.getElementById("masthead").clientHeight,!(vScrollTop<lastScroll)&&scrollOffset<vScrollTop?document.body.classList.add("scrolled"):document.body.classList.remove("scrolled"),vScrollTop<5?document.body.classList.add("top"):document.body.classList.remove("top"),VisibleItemsTrigger(vScrollTop),lastScroll=vScrollTop}document.addEventListener("DOMContentLoaded",function(e){viewHeight=Math.max(document.documentElement.clientHeight,window.innerHeight),headerHeight=document.getElementById("masthead").clientHeight,scrollOffset=headerHeight,headerDistanceFromTop=document.getElementById("masthead").offsetTop,scrollCallback(),window.addEventListener("scroll",throttle(scrollCallback,10),!0),window.addEventListener("resize",scrollCallback,!0)});
"use strict";jQuery(document).ready(function(r){0<r(".sidebar ul.product-categories").length&&(r(".sidebar .product-categories li.cat-parent > a").prepend('<span class="toggle"><i class="material-icons has-primary-color">arrow_forward</i></span>'),r(".sidebar .product-categories .children").hide(),r(".sidebar .product-categories li.current-cat-parent > .children, .product-categories li.current-cat > .children").show(),r(".sidebar .product-categories li.current-cat, .product-categories li.current-cat-parent").addClass("active"),r(function(){r(".sidebar .product-categories").find("a").on("click",function(e){var a=r(this).parent(".cat-item");a.hasClass("active")||(a.addClass("active"),(a.hasClass("cat-parent")||a.hasClass("current-cat"))&&e.preventDefault(),r(this).parents("li.cat-parent").siblings().removeClass("active"),r(this).siblings(".children").stop(!0,!0).slideToggle().parents(".cat-item").siblings().children(".children").stop(!0,!0).slideUp())})}))});
"use strict";var $container,msnry,infScroll;!document.body.classList.contains("category")||($container=document.getElementById("masonry-wrapper"))&&(msnry=new Masonry($container,{itemSelector:".grid__item",columnWidth:".grid__col-sizer",gutter:".grid__gutter-sizer",percentPosition:!0,transitionDuration:"0.8s",stagger:"0.2s",visibleStyle:{transform:"translateY(0)",opacity:1},hiddenStyle:{transform:"translateY(400px)",opacity:0}}),infScroll=new InfiniteScroll($container,{hideNav:".navigation",path:".navigation a",append:".grid__item",outlayer:msnry,prefill:!0,history:!1,status:".page-load-status"}),imagesLoaded($container,function(t){infScroll.on("appended",function(t,n,e){msnry.layout()})}));
//# sourceMappingURL=scripts.js.map

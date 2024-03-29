debounce = function(func, wait, immediate){
    var timeout;
    return function(){
        var context = this, args = arguments;
        var later = function(){
            timeout = null;
            if(!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if(callNow) func.apply(context, args);
    };
};
jQuery(document).ready(function($) {
    // Menu
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 50) {
                $("#menu-desktop2").addClass("menu-diferente");
            } else {
                $("#menu-desktop2").removeClass("menu-diferente");
            }
        });
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 150) {
                $("#menu-tablet").addClass("menu-diferente-tablet");
            } else {
                $("#menu-tablet").removeClass("menu-diferente-tablet");
            }
        });
    /*efeito cor menu*/
        var links = $("#menu a");
        jQuery(window).scroll(function (){
            var topScroll = jQuery(window).scrollTop();
            links.each(function() {
                var href = $(this).attr('href');
                var el = $(href);
                var posSection =( el.offset() || { "top": NaN }).top;
                var hSection = el.height();

                if (posSection <= topScroll && (posSection + hSection)>topScroll) {
                    links.removeClass('menuActive')
                    $(this).addClass('menuActive');
                } else {
                    $(this).removeClass("menuActive");
                }
            });
        });
    // Ativar menu fixo
        var veri = 1;
        var trigger = document.getElementById('menu-trigger1').addEventListener("click",function(){
            var menu = document.getElementById('menu-hidde1');
            if (veri == 1) {
                menu.style.display = "block";
                veri = 0;
            }else{
                menu.style.display = "none";
                veri = 1;
            }
        })    

        var veri = 1;
        var trigger = document.getElementById('menu-trigger2').addEventListener("click",function(){
            var menu = document.getElementById('menu-hidde2');
            if (veri == 1) {
                menu.style.display = "block";
                veri = 0;
            }else{
                menu.style.display = "none";
                veri = 1;
            }
        })
    /*efeito cor menu*/
        var links = $("#menu2 a");
        jQuery(window).scroll(function (){
            var topScroll = jQuery(window).scrollTop();
            links.each(function() {
                var href = $(this).attr('href');
                var el = $(href);
                var posSection =( el.offset() || { "top": NaN }).top;
                var hSection = el.height();

                if (posSection <= topScroll && (posSection + hSection)>topScroll) {
                    links.removeClass('menuActive')
                    $(this).addClass('menuActive');
                } else {
                    $(this).removeClass("menuActive");
                }
            });
        });
    
    // Banner da pagina home
		var swiper = new Swiper('.banner-home', {
			speed: 2000,
			parallax: true,
			loop: true,
			spaceBetween: 30,
			effect: 'fade',
			pagination: {
				el: '.swiper-pagination',
				clickable: true,

			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			autoplay: {
				delay: 5000,
			},    
	    });
    // Swiper produtos
		var swiper = new Swiper('.swiper-produto', {
			speed: 2000,
			parallax: true,
			loop: true,
			spaceBetween: 30,
			effect: 'fade',
			autoplay: {
				delay: 3000,
			},    
	    });
    // Swiper frota
		var swiper = new Swiper('.swiper-frota', {
			speed: 2000,
			parallax: true,
			loop: true,
			spaceBetween: 30,
			effect: 'fade',
            navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			autoplay: {
				delay: 3000,
			},    
	    });
    // Clientes
        var swiper = new Swiper('.clientes-destaque', {
            slidesPerView: 5,
            spaceBetween: 30,		
            speed: 1500,
            loop: true,		
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                425: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                }
            },
            autoplay: {
                delay: 1000,
            },
        });
    /* Ajax functions */
        $(document).on('click','.blog', function(){
            
            var that = $(this);
            var page = $(this).data('page');
            var newPage = page+1;
            var ajaxurl = that.data('url');
            
            $.ajax({			
                url : ajaxurl,
                type : 'post',
                data : {				
                    page : page,
                    action: 'blog'				
                },
                error : function( response ){
                    console.log(response);
                },
                success : function( response ){				
                    that.data('page', newPage);
                    $('.todos-blogs').append( response );				
                }			
            });
            
        });
    /* Scroll das Section */
		$(".scroll").click(function(event){        
	        event.preventDefault();
	        $('html,body').animate({scrollTop:$(this.hash).offset().top -100}, 800);
		});
    // Efeito 'mostrar mais'
        var morelinks = document.querySelectorAll(".section > .txt-more");
        for (var i = 0, j = morelinks.length; i < j; i++) {
            morelinks[0].onclick = function () {
                var container = this.parentNode.querySelector(".support");
                
                container.classList.toggle("partial");
                this.classList.toggle("txt-more");
            };
        }
    //Animação de Texto e Imagem
        (function(){
            var $target = $('.E-subir'),
                animationClass = 'E-subir-start',
                offset = $(window).height() * 3/4;
            function animeScroll(){
                var documentTop = $(document).scrollTop();
                
                $target.each(function(){
                    var itemTop = $(this).offset().top;
                    if(documentTop > itemTop - offset){
                        $(this).addClass(animationClass);
                    }
                });
            }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 100));
        }());

        (function(){
                var $target = $('.E-descer'),
                    animationClass = 'E-descer-start',
                    offset = $(window).height() * 3/4;
                function animeScroll(){
                    var documentTop = $(document).scrollTop();
                    
                    $target.each(function(){
                        var itemTop = $(this).offset().top;
                        if(documentTop > itemTop - offset){
                            $(this).addClass(animationClass);
                        }
                    });
                }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 100));
        }());

        (function(){
            var $target = $('.E-direita'),
                animationClass = 'E-direita-start',
                offset = $(window).height() * 3/4;
            function animeScroll(){
                var documentTop = $(document).scrollTop();
                
                $target.each(function(){
                    var itemTop = $(this).offset().top;
                    if(documentTop > itemTop - offset){
                        $(this).addClass(animationClass);
                    }
                });
            }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 100));
        }());

        (function(){
            var $target = $('.E-esquerda'),
                animationClass = 'E-esquerda-start',
                offset = $(window).height() * 3/4;
            function animeScroll(){
                var documentTop = $(document).scrollTop();
                
                $target.each(function(){
                    var itemTop = $(this).offset().top;
                    if(documentTop > itemTop - offset){
                        $(this).addClass(animationClass);
                    }
                });
            }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 100));
        }());

        (function(){
            var $target = $('.E-fadein'),
                animationClass = 'E-fadein-start',
                offset = $(window).height() * 3/4;
            function animeScroll(){
                var documentTop = $(document).scrollTop();
                
                $target.each(function(){
                    var itemTop = $(this).offset().top;
                    if(documentTop > itemTop - offset){
                        $(this).addClass(animationClass);
                    }
                });
            }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 100));
        }());
    //-----------------------
});

// Área de produtos
    function fecharModal(){
        document.getElementById('bloco0').style.display = 'block';
        document.getElementById('bloco1').style.display = 'none';
        document.getElementById('bloco2').style.display = 'none';
        document.getElementById('bloco3').style.display = 'none';
        document.getElementById('bloco4').style.display = 'none';
    }
    function openTela1(){
        document.getElementById('bloco0').style.display = 'none';
        document.getElementById('bloco1').style.display = 'block';
        document.getElementById('bloco2').style.display = 'none';
        document.getElementById('bloco3').style.display = 'none';
        document.getElementById('bloco4').style.display = 'none';

        var swiper = new Swiper('.swiper-produto1', {
			speed: 2000,
			parallax: true,
			loop: true,
			spaceBetween: 30,
			effect: 'fade',
			autoplay: {
				delay: 3000,
			},    
	    });
    }
    function openTela2(){
        document.getElementById('bloco0').style.display = 'none';
        document.getElementById('bloco1').style.display = 'none';
        document.getElementById('bloco2').style.display = 'block';
        document.getElementById('bloco3').style.display = 'none';
        document.getElementById('bloco4').style.display = 'none';

        // Swiper produtos
		var swiper = new Swiper('.swiper-produto1', {
			speed: 2000,
			parallax: true,
			loop: true,
			spaceBetween: 30,
			effect: 'fade',
			autoplay: {
				delay: 3000,
			},    
	    });
    }
    function openTela3(){
        document.getElementById('bloco0').style.display = 'none';
        document.getElementById('bloco1').style.display = 'none';
        document.getElementById('bloco2').style.display = 'none';
        document.getElementById('bloco3').style.display = 'block';
        document.getElementById('bloco4').style.display = 'none';

        // Swiper produtos
		var swiper = new Swiper('.swiper-produto1', {
			speed: 2000,
			parallax: true,
			loop: true,
			spaceBetween: 30,
			effect: 'fade',
			autoplay: {
				delay: 3000,
			},    
	    });
    }
    function openTela4(){
        document.getElementById('bloco0').style.display = 'none';
        document.getElementById('bloco1').style.display = 'none';
        document.getElementById('bloco2').style.display = 'none';
        document.getElementById('bloco3').style.display = 'none';
        document.getElementById('bloco4').style.display = 'block';

        // Swiper produtos
		var swiper = new Swiper('.swiper-produto1', {
			speed: 2000,
			parallax: true,
			loop: true,
			spaceBetween: 30,
			effect: 'fade',
			autoplay: {
				delay: 3000,
			},    
	    });
    }
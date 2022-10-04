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
            if (jQuery(this).scrollTop() > 500) {
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
            speed: 2000,
            loop: true,		
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
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
                delay: 3000,
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
});

// Área de produtos
    function openTela(){
        document.getElementById('bloco1').style.display = 'block';
    }
    function fecharModal(){
        document.getElementById('bloco1').style.display = 'none';
    }
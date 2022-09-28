jQuery(document).ready(function($) {
    // Menu
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 700) {
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
});
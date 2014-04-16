var Mod = function () {
    // To get the correct viewport width based on  http://andylangton.co.uk/articles/javascript/get-viewport-size-javascript/
    var _getViewPort = function () {
        var e = window, a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        return {
            width: e[a + 'Width'],
            height: e[a + 'Height']
        }
    };

    var tooltips = function () {
        $('.tooltips').tooltip();
    };

    var animate = function () {
        //                setTimeout(function () {
        //                    $('.header').show().addClass('animated fadeInUp');
        //                });

        $('fieldset > div').each(function (index) {

//            var $this = $(this);
//            setTimeout(function (index) {
//                $this.show().addClass('animated fadeInUp');
//            }, 250 * index * 2
//                );


            //            $this.delay(250 * index * 2).queue(function () {
            //                $this.show().addClass('animated fadeInUp');
            //            });
        });

        $('.feature ul > li').each(function (index) {

            var $this = $(this);
            setTimeout(function (index) {
                $this.show().addClass('animated fadeInUp');
            }, 250 * index * 2
                );


            //            $this.delay(250 * index * 2).queue(function () {
            //                $this.show().addClass('animated fadeInUp');
            //            });
        });
        // Status Page
        if ($("#statusPage").length == 1) {
            $("#statusPage").show().addClass('animated scaleIn');
        };

        if ($("#tabs").length == 1) {
            var $el = $(".ui-tabs-nav"),
                $tabs = $el.children('li');

            $tabs.each(function () {
                var $this = $(this);

                $this.find('a').bind('click', function (index) {
                    var href = $this.find('a').attr('href'); //.replace('#','');
                    $('div' + href).addClass('animated fadeInUp');

                });

            })
        }
    };
    
    
    var handleNavTab = function () {
        var $el = $(".nav-tabs"),
                $tabs = $el.children('li'),
                $tabcontent = $('.tab-content'),
                $tabpane = $tabcontent.children('.tab-pane');
                
             if(typeof ($.cookie('nav-tabs'))==='undefined' || typeof ($.cookie('tab-content'))==='undefined') {
                $.cookie('nav-tabs',0);
                $.cookie('tab-content',0);                
             }   
                
            // tab label
            $tabs.each(function (index) {
                var $this = $(this);
                
                if($.cookie('nav-tabs')==index) $this.addClass('active');
                else $this.removeClass('active');
                
                $this.bind('click',function(){
                    $.cookie('nav-tabs',index);
                    $.cookie('tab-content',index);
                })
//
//                $this.find('a').bind('click', function (index) {
//                    var href = $this.find('a').attr('href'); //.replace('#','');
//                    $('div' + href).addClass('animated fadeInUp');
//
//                });
//
            }); 
            
            
           // alert($.cookie('tab-content'));
            // tab content  
            $tabpane.each(function(index) {
                var $this = $(this);
                
                if($.cookie('tab-content')==index) $this.addClass('active');
                else $this.removeClass('active');
            
            });
    };

    var handleCurtain = function () {
        var slideSpeed = 600;
        var $header = $('.header');
        $('.curtain > a').bind('click', function (e) {
            var $this = $(this);
            //$('body').addClass('curtain');
            if (!$this.data('open')) {
                $this.data('open', true);

                $header.slideUp(slideSpeed, function () {
                    $this.find('i').removeClass('icon-arrow-up').addClass('icon-arrow-down');
                    $('.curtain').css('top', '-2px');
                    $('.page-container').css('margin-top', '0');

                    //     Mod.scrollTo(the, slideOffeset);


                });

            } else {
                $this.data('open', false);

                $header.slideDown(slideSpeed, function () {
                    $this.find('i').removeClass('icon-arrow-down').addClass('icon-arrow-up');
                    $('.curtain').css('top', '40px');
                    $('.page-container').css('margin-top', '42px');

                    //     Mod.scrollTo(the, slideOffeset);


                });
            }
            // alert($this.data('open'));
            e.preventDefault();
        });
    };

    var handleToggleMenu = function () {
        var $navbartoggle = $('.navbar-toggle'),
            $navbarcollapse = $('#colla');

        $navbartoggle.bind('click', function (e) {
            //alert($(this).attr('class'));
            if ($navbarcollapse.is(":visible")) {
                $navbarcollapse.removeClass('in').addClass('collapse').css('height', '0');

            } else {
                //alert($navbarcollapse.attr('class'));
                $navbarcollapse .removeClass('collapse').addClass('collapsing').addClass('in').css('height', 'auto');

            }

            e.preventDefault();
        });
    };

    var handleSidebar = function () {
        //var a = $('#ctl00_LeftSideTreeMenu_UL > li').find('ul').length;
        //alert(a);


        //.append('<span class="arrow open"></span>');
        $('.page-sidebar #ctl00_LeftSideTreeMenu_UL li > a').bind('click', function (e) {

            if ($(this).next().hasClass('sub-menu') == false) {

                if ($('.btn-navbar').hasClass('collapse') == false) {

                    $('.btn-navbar').click();
                    return;
                }

            }

            var parent = $(this).parent();
            // parent.attr('data', 'test');
            var the = $(this);
            var sub = $(this).next();
            //sub.attr('data', 'test');
            var slideOffeset = -200;
            var slideSpeed = 600;

            //var a = $('#ctl00_LeftSideTreeMenu_UL').find('a').attr('href');
            //if (a == '../Default.aspx')
            // alert(a);

            // var href = $(".sub-menu").find('a').attr('href');
            // alert(href.attr('href'));

            if (sub.is(":visible")) {

                $('.arrow', $(this)).removeClass("icon-chevron-down").addClass("icon-chevron-left");
                sub.slideUp(slideSpeed, function () {
                    if ($('body').hasClass('page-sidebar-fixed') == false && $('body').hasClass('page-sidebar-closed') == false) {

                        Mod.scrollTo(the, slideOffeset);
                    }

                });
            } else {

                $('.arrow', $(this)).removeClass("icon-chevron-left").addClass("icon-chevron-down");
                sub.slideDown(slideSpeed, function () {
                    if ($('body').hasClass('page-sidebar-fixed') == false && $('body').hasClass('page-sidebar-closed') == false) {
                        Mod.scrollTo(the, slideOffeset);
                    }

                });
            }

            // window.location.href = href;
            e.preventDefault();


            //parent.attr('data', 'how');
        });
    };

    var handleCloseSearch = function () {
        // handle the search bar close
        $('.icon-remove').click(function (e) {

            e.preventDefault();
            $('.sidebar-search').removeClass("open");
        });
    };
    
    var handlePortlet = function () {
        // single slide portlet
         jQuery('body').on('click', '.portlet > legend > .tools > .collapse, .portlet legend > .tools > .expand', function (e) {
            e.preventDefault();
//            alert($(this).attr('class'));
            var el = jQuery(this).closest(".portlet").children(".portlet-body");
            if (jQuery(this).hasClass("collapse")) {
                jQuery(this).removeClass("icon-chevron-down collapse").addClass("icon-chevron-up expand").attr('title','Show this');
                el.slideUp(200);
            } else {
                jQuery(this).removeClass("icon-chevron-up expand").addClass("icon-chevron-down collapse").attr('title','Hide this');
                el.slideDown(200);
            }
        });
        
        // single slide portlet
         jQuery('body').on('click', '.portlet > legend > .tools > .collapses', function (e) {
            e.preventDefault();
            var el = jQuery('body .tab-pane.active').find(".portlet-body-collapse");
            var $tool_next = $('.portlet > legend > .tools > .collapses').siblings(".tools_a");
            //alert($tool_next.attr('class'));
            el.each(function() {
                var $this = $(this);
                if ($this.is(":visible")) {
                    $this.slideUp(200);
                   // $this.addClass("show-portlet");
                    $tool_next.removeClass("icon-chevron-down collapse").addClass("icon-chevron-up expand").attr('title','Show this');
                }
                else {
                    $this.slideDown(200);
                }
            })
            //alert(el.length);
            //if (jQuery(this).hasClass("collapses")) {
//                //jQuery(this).removeClass("icon-chevron-down collapse").addClass("icon-chevron-up expand").attr('title','Show this');
//                el.slideUp(200);
//            } else {
//                //jQuery(this).removeClass("icon-chevron-up expand").addClass("icon-chevron-down collapse").attr('title','Hide this');
//                el.slideDown(200);
//            }
        });
        
    };
    
    var handleCollapse = function () {
        // single slide portlet
         jQuery('body').on('click', '.toll-collapse.collapse, .toll-collapse.expand', function (e) {
            e.preventDefault();
//            alert($(this).attr('class'));
            var el = jQuery(this).closest(".portlet").find(".portlet-body");
            if (jQuery(this).hasClass("collapse")) {
                jQuery(this).removeClass("icon-chevron-down collapse").addClass("icon-chevron-up expand").attr('title','Show this');
                el.slideUp(200);
            } else {
                jQuery(this).removeClass("icon-chevron-up expand").addClass("icon-chevron-down collapse").attr('title','Hide this');
                el.slideDown(200);
            }
        });
        
        
        
    };
    var handleBackToTop = function () {
        $(window).scroll(function() {
					if ($(this).scrollTop() > 30) {
						$('#back-top').closest().fadeIn();
						$('#back-top').fadeIn();

					} else {
						$('#back-top').closest().fadeOut();
						$('#back-top').fadeOut();
					}
				});

				// scroll body to 0px on click
				$('#back-top').click(function() {
					$('body,html').animate({
						scrollTop: 0
					}, 800);
					return false;
				});
    } 
    
    var handleSidebarToggler = function () {

        var viewport = _getViewPort();
        if ($.cookie('sidebar_closed') === '1' && viewport.width >= 992) {
            $('body').addClass('page-sidebar-closed');
        }


        // handle sidebar show/hide
        $('.page-sidebar .sidebar-toggler').bind('click', function (e) {
            var body = $('body');
            var sidebar = $('.page-sidebar');

            if ((body.hasClass("page-sidebar-hover-on") && body.hasClass('page-sidebar-fixed')) || sidebar.hasClass('page-sidebar-hovering')) {
                body.removeClass('page-sidebar-hover-on');
                sidebar.css('width', '').hide().show();
                $.cookie('sidebar_closed', '0');
                e.stopPropagation();
                // runResponsiveHandlers();
                return;
            }

            $('.sidebar-search').removeClass("open");

            if (body.hasClass("page-sidebar-closed")) {
                body.removeClass("page-sidebar-closed");
                if (body.hasClass('page-sidebar-fixed')) {
                    sidebar.css('width', '');
                }
                $.cookie('sidebar_closed', '0');
            } else {
                body.addClass("page-sidebar-closed");
                $.cookie('sidebar_closed', '1');
            }
            // runResponsiveHandlers();
        });

        $('.sidebar-search .icon-search').bind('click', function (e) {
            // alert('1');
            e.preventDefault();
            if ($('body').hasClass("page-sidebar-closed")) {
                if ($('.sidebar-search').hasClass('open') == false) {
                    if ($('.page-sidebar-fixed').size() === 1) {

                        $('.page-sidebar .sidebar-toggler').click(); //trigger sidebar toggle button
                    }
                    $('.sidebar-search').addClass("open");
                    $(this).next().focus();
                } //else {
                // $('.sidebar-search').submit();
                //}
            } //else {
            //    $('.sidebar-search').submit();
            //}
        });







    }




    return {

        //main function to initiate the theme
        init: function () {
            // tooltips();
            animate();
            handleSidebarToggler(); // handles main menu
            handleSidebar();
            handleCloseSearch();
            handleCurtain();
            handleToggleMenu();
            handlePortlet();
            handleNavTab();
            handleBackToTop();
            handleCollapse();
        },



        // wrapper function to scroll(focus) to an element
        scrollTo: function (el, offeset) {
            pos = (el && el.size() > 0) ? el.offset().top : 0;
            $('html,body').animate({
                scrollTop: pos + (offeset ? offeset : 0)
            }, 'slow');
        }



    };

} ();

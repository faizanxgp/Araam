</div>
</div>
<div id="footer-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p><a href="index.php" class="brand"><img src="{#site_root#}/web/img/logo.png" /></a></p>
                <p><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i></p>
            </div>
            <div class="col-md-3">
                <h4>ARAAM.PK</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Security</a></li>
                </ul>

            </div>

            <div class="col-md-3">
                <h4>Professionals</h4>
                <ul>
                    <li><a href="#">How it work?</a></li>
                    <li><a href="#">Registration</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
            </div>  


            <div class="col-md-3">
                <h4>Questions? Need help?</h4>
                <ul>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Registration</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
            </div>
        </div>


        <div class="row">
            <div id="footer" class="clearfix">
                <div class="col-md-6 ">
                    &copy; 2015 Araam.pk. All Rights Reserved.
                </div>
                <!--
                <div class="col-md-4">
                    
                </div>
                -->
                <div class="col-md-6 pull-right">
                    <div class="nav">
                        <a href="#">About Us</a> | 
                        <a href="#">Terms of Use</a> | 
                        <a href="#">Privacy Policy</a> |
                        <a href="#">F.A.Q.</a>
                    </div>
                    <!--<p>
                        Become a Fan: <img src="{#site_root#}/web/img/facebook.png" /> 
                        Follow Us on: <img src="{#site_root#}/web/img/twitter.png" />
                    </p>-->
                </div>
            </div>
        </div>
    </div>
</div>
<button class="back-to-top"></button>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{#site_root#}/web/js/jquery.js"></script>
<script src="{#site_root#}/web/js/jquery-ui.min.js"></script>

<script src="{#site_root#}/web/js/bootstrap.js"></script>
<!--<script src="{#site_root#}/web/js/bootstrap-modal.js"></script>-->

<!-- Add fancyBox -->
<link rel="stylesheet" href="{#site_root#}/web/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="{#site_root#}/web/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

<script src="{#site_root#}/web/js/jquery.autocomplete.min.js" type="text/javascript" ></script>
{include file="autocomplete.tpl"}
<!--script src="{#site_root#}/web/js/currency-autocomplete.js" type="text/javascript" ></script-->

<!-- date picker -->
<script>
    $(document).ready(function () {
        $("#datepicker").datepicker();
    });
</script>

<script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    jQuery("#forgot-button").click(function () {
        $('#myModal').modal('hide');
    });
</script>

<!-- FlexSlider -->
<!--
<script defer src="{#site_root#}/web/js//jquery.flexslider.js"></script>

<script src="{#site_root#}/web/js/jquery.poshytip.js"></script>

<script src="offcanvas.js"></script>-->

<script type="text/javascript">
    /* add to cart */
    jQuery(document).ready(function () {
        jQuery(".addcart").click(function () {
            var mdata = $(this).attr('alt');

            var arr = mdata.split('::');

            var movieid = arr[0];
            var movietitle = arr[1];
            var moviequality = arr[2];
            var moviecost = arr[3];

            $.post("addtocart.php", {
                mid: movieid, mtitle: movietitle, quality: moviequality, mcost: moviecost
            }).done(function (data) {




                $("#cart").empty().append(data);
            });
        });
        jQuery("#cart").delegate('.addcart-trash', 'click', function () {
            var mdata = $(this).attr('alt');
            var movieid = mdata;

            //var arr = mdata.split('::');

            //var movieid = arr[0];
            //var movietitle = arr[1];
            //var moviecost = arr[2];


            $.post("addtocart-trash.php", {
                mid: movieid
            }).done(function (data) {

                $("#cart").empty().append(data);
            });
        });
        jQuery(".addcart2").click(function () {
            var mdata = $(this).attr('alt');

            var arr = mdata.split('::');

            var mmid = arr[0];
            var mmtitle = arr[1];
            var mmcost = arr[2];


            $.post("addtocart2.php", {
                mid: mmid, mtitle: mmtitle, mcost: mmcost
            }).done(function (data) {

                $("#cart").empty().append(data);

            });
        });
        jQuery("#cart").delegate('.addcart2-trash', 'click', function () {

            var mdata = $(this).attr('alt');
            var movieid = mdata;

            //var arr = mdata.split('::');

            //var mmid = arr[0];
            //var mmtitle = arr[1];
            //var mmcost = arr[2];


            $.post("addtocart2-trash.php", {
                mid: movieid
            }).done(function (data) {

                $("#cart").empty().append(data);
            });
        });
        jQuery(".addcart3").click(function () {
            var mdata = $(this).attr('alt');

            var arr = mdata.split('::');

            var movieid = arr[0];
            var movietitle = arr[1];
            var moviecost = arr[2];

            $.post("addtocart3.php", {
                mid: movieid, mtitle: movietitle, mcost: moviecost
            }).done(function (data) {
                $(".modal-body").empty().append(data);
                $('#myModal').modal('show');

            });
        });
        jQuery(".addcart4").click(function () {
            var mdata = $(this).attr('alt');

            var arr = mdata.split('::');

            var movieid = arr[0];
            var movietitle = arr[1];
            var moviequality = arr[2];
            var moviecost = arr[3];

            $.post("addtocart.php", {
                mid: movieid, mtitle: movietitle, quality: moviequality, mcost: moviecost
            }).done(function (data) {
                // for top 10 lists in left column
                var url = "index.php?main&action=checkout";
                $(location).attr('href', url);

            });
        });

    });
</script>

<script type="text/javascript">
    $("#cart-head").click(function () {
        $("#cart-body").slideToggle("slow");
    });
</script>
<!--
<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="{#site_root#}/web/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        jQuery('#slider').nivoSlider();
    });
</script>-->

<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<script type="text/javascript">
    /* navigation search bar */
    function fill(Value) {
        $('#searchfield').val(Value);
        $('#display').hide();
    }

    jQuery(document).ready(function () {
        $("#searchfield").keyup(function () {
            var name = $('#searchfield').val();
            if (name == "") {
                $("#display").html("");
            } else {
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "name=" + name,
                    success: function (html) {
                        $("#display").html(html).show();
                    }
                });
            }
        });

        $('#searchfield').keydown(function (e) {
            if (e.keyCode == 13) {
                $('#searchform').submit();
            }
        });
    });

    $(function () {
        // Setup drop down menu
        $('.dropdown-toggle').dropdown();

        // Fix input element click problem
        $('.dropdown input, .dropdown label').click(function (e) {
            e.stopPropagation();
        });

        $('.dropdown-menu').find('form').click(function (e) {
            e.stopPropagation();
        });
    });
</script>
<!--
<script type="text/javascript">
    /* tool tips */
    jQuery(document).ready(function() {
        $('.tips').poshytip({
            content: function(updateCallback) {
                var rel = $(this).attr('alt');

                window.setTimeout(function() {
                    $.ajax({
                        type: "POST",
                        dataType: "text",
                        url: "ajax-tips.php",
                        data: "id=" + rel,
                        success: function(html) {
                            updateCallback(html);
                            /*$("#display").html(html).show();
                             $('.basic').poshytip({
                             content: 'asdfasdf',
                             });*/
                        }
                    });
                }, 100);
                return 'Loading...';
            },
            alignTo: 'target',
            alignX: 'right',
            alignY: 'center',
            offsetX: 10,
            offsetY: 0
        });
    });
</script>-->

<script type="text/javascript" src="{#site_root#}/web/js/parsley.js"></script>

<script type="text/javascript" src="{#site_root#}/web/js/jquery.jcarousel.min.js"></script>


<script type="text/javascript">
    (function ($) {
        $(function () {
            /*
             Carousel initialization
             */
            $('.jcarousel')
                    .jcarousel({
                        // Options go here

                    });
            //$('.jcarousel').jcarousel('scroll', '+=2');

            /*
             Prev control initialization
             */
            $('.jcarousel-control-prev')
                    .on('jcarouselcontrol:active', function () {
                        $(this).removeClass('inactive');
                    })
                    .on('jcarouselcontrol:inactive', function () {
                        $(this).addClass('inactive');
                    })
                    .jcarouselControl({
                        // Options go here
                        target: '-=2'
                    });

            /*
             Next control initialization
             */
            $('.jcarousel-control-next')
                    .on('jcarouselcontrol:active', function () {
                        $(this).removeClass('inactive');
                    })
                    .on('jcarouselcontrol:inactive', function () {
                        $(this).addClass('inactive');
                    })
                    .jcarouselControl({
                        // Options go here
                        target: '+=2'
                    });

            /*
             Pagination initialization
             */
            $('.jcarousel-pagination')
                    .on('jcarouselpagination:active', 'a', function () {
                        $(this).addClass('active');
                    })
                    .on('jcarouselpagination:inactive', 'a', function () {
                        $(this).removeClass('active');
                    })
                    .jcarouselPagination({
                        // Options go here
                    });
        });
    })(jQuery);
//jQuery(function() {
//    $('.jcarousel').jcarousel({
//        // Configuration goes here
//    });
//});
</script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        /*
         * jQuery("#advancesearch input:radio").change(function() {
         var sortby = $('input[name=sortby]:radio:checked').val();
         var print = $('input[name=print]:radio:checked').val();
         var type = $('input[name=type]:radio:checked').val();
         var category = $('input[name=category]:radio:checked').val();
         
         var url="index.php?search&sortby="+sortby+"&print="+print+"&type="+type+"&category="+category;
         
         $("#advancesearch").attr("action",url);
         jQuery("#advancesearch").submit();
         });
         jQuery("#advancesearch2 input:radio").change(function() {
         var category = $('input[name=category]:radio:checked').val();
         
         var url="index.php?search2&category="+category;
         
         $("#advancesearch2").attr("action",url);
         jQuery("#advancesearch2").submit();
         }); */
    });
    /*
     jQuery(document).ready(function() {
     jQuery("#advancesearch input:radio").change(function() {
     jQuery("#advancesearch").submit();
     });
     });
     */
</script>

<script type="text/javascript">
    {literal}
        // Back to top animation
        jQuery('.back-to-top').click(function (event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, 500); // Scroll speed to the top
        });
        jQuery(window).scroll(function () {
            // Location of button appearing/disappearing
            // Define in '' the class or ID of the button
            if ($(this).scrollTop() > 1000) { // After how many px should the button fadein (Currently 1000 milliseconds)
                $('.back-to-top').fadeIn(500); // Fadein speed
            } else {
                $('.back-to-top').fadeOut(500); // Fadeout speed
            }
        });
    {/literal}
        /* flex slider carousel */
        /*
         jQuery(window).load(function() {
         $('.flexslider-main').flexslider({
         animation: "slide"
         });
         });
         
         jQuery(window).load(function() {
         $('.flexslider').flexslider({
         animation: "slide",
         animationLoop: false,
         itemWidth: 137,
         itemMargin: 5,
         slideShow: false,
         maxItems: 4
         
         });
         });*/


</script>
<script>
    {literal}
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-30689353-1', 'focusfoundation.org');
        ga('send', 'pageview');
    {/literal}
</script>
<script type="text/javascript">
    jQuery(function () {
        jQuery(".search").keyup(function () {
            var searchid = $(this).val();
            var dataString = 'search=' + searchid;
            if (searchid != '') {
                $.ajax({
                    type: "POST",
                    url: "searchajax.php",
                    data: dataString,
                    cache: false,
                    success: function (html) {
                        $("#result").html(html).show();
                    }
                });
            }
            return false;
        });

        jQuery("#result").on("click", ".show", function (e) {
            /*     
             var $clicked = $(e.target);
             var $name = $clicked.find('.name').html();
             */

            $name = $(this).find("span.name").text().trim();
            $id = $(this).find("span.id").text().trim();

            var decoded = $("<div/>").html($name).text();
            $('#searchid').val(decoded);

            var url = "index.php?movie&id=" + encodeURIComponent($id) + "&name=" + encodeURIComponent($name);

            $("#moviesearchform").attr("action", url);

            $("#moviesearchform").submit();
            /*function(eventObj) 
             {
             $('#searchid').val(decoded);
             return true;
             });*/

        });

        jQuery(document).on("click", function (e) {
            var $clicked = $(e.target);
            if (!$clicked.hasClass("search")) {
                jQuery("#result").fadeOut();
            }
        });
        //jQuery('#searchid').click(function() {
        //    jQuery("#result").fadeIn();
        //});
        jQuery('#searchid').on("click", function () {
            jQuery("#result").fadeIn();
        });
    });
</script>
</body>
</html>
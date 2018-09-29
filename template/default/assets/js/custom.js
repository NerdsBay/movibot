$(document).ready(function() {
    $("#owl-demo").owlCarousel({
        autoPlay: 5000,
        items: 5,
        itemsDesktop: [640, 4],
        itemsDesktopSmall: [414, 3]

    });
    /*
    $(".btn-mirror").click(function() {
        $.ajax({
            type: "GET",
            url: endpoint + "mirrors.php?title=" + mtitle,
            statusCode: {
                500: function() {
                    $(".mirrors").html('<h3 class="page-header text-center">Download Mirrors</h3><div class="alert alert-warning"><i class="fa fa-info-circle"></i> No download mirrors were found!</div>');
                    $(".mirrors").fadeIn();
                    $(".btn-mirror").fadeOut(); 
                },
                404: function() {
                    $(".mirrors").html('<h3 class="page-header text-center">Download Mirrors</h3><div class="alert alert-warning"><i class="fa fa-info-circle"></i> No download mirrors were found!</div>');
                    $(".mirrors").fadeIn();
                    $(".btn-mirror").fadeOut(); 
                },
                403: function() {
                    $(".mirrors").html('<h3 class="page-header text-center">Download Mirrors</h3><div class="alert alert-warning"><i class="fa fa-info-circle"></i> No download mirrors were found!</div>');
                    $(".mirrors").fadeIn();
                    $(".btn-mirror").fadeOut(); 
                },
                401: function() {
                    $(".mirrors").html('<h3 class="page-header text-center">Download Mirrors</h3><div class="alert alert-warning"><i class="fa fa-info-circle"></i> No download mirrors were found!</div>');
                    $(".mirrors").fadeIn();
                    $(".btn-mirror").fadeOut(); 
                }
            },
            success: function(result) {
                var dlinks = JSON.parse(result);
                var i = 0;
                var s = 1;
                var hold = "";
                if (dlinks["result"] == "success") {
                    for (; dlinks["mirrors"][i];) {
                        hold += '<a href="' + dlinks["mirrors"][i] + '" class="dbtn" target="_blank"><span class="dbtn-symbol"><i class="fa fa-download fa-2x"></i></span><span class="dbtn-text">MIRROR ' + s + '</span><span class="dbtn-slide-text">TESTING</span></a>';
                        i++;
                        s++;
                    }
                    $(".mirrors").html('<h3 class="page-header text-center">Download Mirrors</h3>' + hold);
                    $(".mirrors").fadeIn();
                    $(".btn-mirror").fadeOut();
                } else {
                    $(".mirrors").html('<h3 class="page-header text-center">Download Mirrors</h3><div class="alert alert-warning"><i class="fa fa-info-circle"></i> No download mirrors were found!</div>');
                    $(".mirrors").fadeIn();
                    $(".btn-mirror").fadeOut();
                }
            }
        });
    });
    */
    $("#search").submit(function(e) {
        e.preventDefault();
        var search = encodeURIComponent($(".search").val());
        if (search === "") {
            swal("Hey!", "Please enter a movie title!");
        } else {
            document.location.href = site_url + "/search/" + search.replace(/%20/g, "+");
        }
    });
    $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=' + fb_app + '&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

(function() {
    var po = document.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
})();
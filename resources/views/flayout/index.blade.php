<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="css/jquery.eeyellow.Timeline.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/my.css">
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Hà Tĩnh ITC</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Trang chủ</a></li>
            <li><a href="/gioi-thieu">Giới thiệu</a></li>
            <li><a href="/nang-luc">Năng lực</a></li>
            <li><a href="/dich-vu">Dịch vụ</a></li>
            <li><a href="/tin-tuc">Tin tức - Sự kiện</a></li>
            <li><a href="/lien-he">Liên hệ</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://google-plus.com"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    @yield('content')


    <div class="section-c">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>Đăng kí nhận tin</h2>
            <br />
            <p>Cung cấp địa chỉ email để nhận bản tin điện tử của chúng tôi.</p>
            <hr />
            <form>
              <input type="text" class="form-control input-lg" placeholder="Địa chỉ Email">
              <br />
              <button class="btn btn-primary btn-lg btn-block">Đăng kí</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer>

      <div class="container">
          <p>Copyright © 2016. All rights reserved.</p>
      </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.eeyellow.Timeline.js"></script>

    <script type="text/javascript">

      $(document).ready(function() {

        $('.VivaTimeline').vivaTimeline({
          carousel: true,
          carouselTime: 3000
        });
      });

    </script>
    <script type="text/javascript">

      $(document).ready(function() {

        var owl = $("#owl-demo");

        owl.owlCarousel({
            items : 10, //10 items above 1000px browser width
            itemsDesktop : [1000,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,3], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });

        // Custom Navigation Events
        $(".next").click(function(){
          owl.trigger('owl.next');
        })
        $(".prev").click(function(){
          owl.trigger('owl.prev');
        })
        $(".play").click(function(){
          owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
        })
        $(".stop").click(function(){
          owl.trigger('owl.stop');
        })

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

      });

    </script>

    <!-- Google Map js -->
            <script src="https://maps.googleapis.com/maps/api/js"></script>
            <script>
                function initialize() {
                  var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(18.335534, 105.906581)
                  };

                  var map = new google.maps.Map(document.getElementById('sample'),
                      mapOptions);


                  var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                  });

                }

                google.maps.event.addDomListener(window, 'load', initialize);
            </script>

    </body>
    </html>

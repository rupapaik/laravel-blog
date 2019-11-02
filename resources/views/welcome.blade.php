<!DOCTYPE html>
<html lang="en">
<head>
<title>Pet Club</title>
<meta charset="utf-8">
<link rel="icon" href="{{asset('front')}}/{{asset('front')}}/images/favicon.ico">
<link rel="shortcut icon" href="{{asset('front')}}/images/favicon.ico">
<link rel="stylesheet" href="{{asset('front')}}/css/style.css">
<link rel="stylesheet" href="{{asset('front')}}/css/slider.css">
<script src="{{asset('front')}}/js/jquery.js"></script>
<script src="{{asset('front')}}/js/jquery-migrate-1.1.1.js"></script>
<script src="{{asset('front')}}/js/superfish.js"></script>
<script src="{{asset('front')}}/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="{{asset('front')}}/js/jquery.equalheights.js"></script>
<script src="{{asset('front')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('front')}}/js/tms-0.4.1.js"></script>
<script src="{{asset('front')}}/js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 3,
                max: 3
            },
            height: 'auto',
            width: 300,
        },
        responsive: true,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: true,
            onTouch: true
        }
    });
});
jQuery(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="{{URL::to('/home')}}"><img src="{{asset('front')}}/images/logo.png" alt=""></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="{{URL::to('home')}}">Home</a></li>
            <li class="with_ul"><a href="{{URL::to('about')}}">About Us</a>
            </li>
            <li><a href="{{URL::to('blog')}}">Blog</a></li>
            <li><a href="{{URL::to('contact')}}">Contacts </a></li>
            <li>  <a href="{{URL::to('dashboard')}}">Dashboard</a></li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                         <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out fa-fw"></i>{{ __('Logout') }}
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="top_block">
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="{{asset('front')}}/images/slide.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
          <li><img src="{{asset('front')}}/images/slide1.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
          <li><img src="{{asset('front')}}/images/slide2.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
          <li><img src="{{asset('front')}}/images/slide3.jpg" alt="">
            <div class="banner">They Need Your <span>Love</span> and <i>Care</i>
              <p>It is so easy to make them happy</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="page1_block">
  <div class="container_12">
    <div class="grid_6">
    </div>

          @foreach($data_list as $key => $data)

              <h2>  {{$data->title}}</h2>
                <br/>
              <p>{{ Str::words($data->description, 64)}}</p>
             <a href="{{URL::to('more')}}/{{$data->id}}" class="btn">More</a>

    @endforeach
{{$data_list->links()}}
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="http://www.twitter.com"></a> <a href="http://www.facebook.com"></a> <a href="http://www.instagram.com"></a> <a href="http://www.google.com"</a> </div>
      <p>Pet Club &copy; 2045 Rupa Paik</p>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>

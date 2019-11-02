<!DOCTYPE html>
<html lang="en">
<head>
<title>Pet Club | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="{{asset('front')}}/images/favicon.ico">
<link rel="shortcut icon" href="{{asset('front')}}/images/favicon.ico">
<link rel="stylesheet" href="{{asset('front')}}/css/style.css">
<link rel="stylesheet" href="{{asset('front')}}/css/form.css">
<script src="{{asset('front')}}/js/jquery.js"></script>
<script src="{{asset('front')}}/js/forms.js"></script>
<script src="{{asset('front')}}/js/jquery-migrate-1.1.1.js"></script>
<script src="{{asset('front')}}/js/superfish.js"></script>
<script src="{{asset('front')}}/js/jquery.equalheights.js"></script>
<script src="{{asset('front')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('front')}}/js/jquery.ui.totop.js"></script>
<script>
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
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="{{URL::to('/')}}"><img src="{{asset('front')}}/images/logo.png" alt=""></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('abouts')}}">About Us</a></li>
            <li class="current"><a href="{{URL::to('contacts')}}">Contacts </a></li>
            <li>  <a href="{{ route('login') }}">Sign In</a></li>
            <li> <a href="{{ route('register') }}">SIgn Up</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="content pt1">
  <div class="container_12">
    <div class="grid_6">
      <h2>GOOGLE MAP</h2>
      <br>
      <div class="map">
        <figure class="img_inner">

		  <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=khulna&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:400px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:500px;}</style></div>

        </figure>
      </div>
    </div>
    <div class="grid_5 prefix_1">
      <h2 class="ic1">Contact US</h2>
      <form id="form" action="#">
        <div class="success_wrapper">
          <div class="success">Contact form submitted!<br>
            <strong>We will be in touch soon.</strong> </div>
        </div>
        <fieldset>
          <label class="name">
            <input type="text" value="Name:">
            <br class="clear">
            <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
          <label class="email">
            <input type="text" value="E-mail:">
            <br class="clear">
            <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
          <label class="phone">
            <input type="tel" value="Phone:">
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
          <label class="message">
            <textarea></textarea>
            <br class="clear">
            <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
          <div class="clear"></div>
          <div class="btns"><a data-type="reset" class="btn">Clear</a><a data-type="submit" class="btn">Send</a>
            <div class="clear"></div>
          </div>
        </fieldset>
      </form>
    </div>
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

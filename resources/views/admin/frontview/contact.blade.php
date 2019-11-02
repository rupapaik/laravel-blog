@include('admin.frontview.include.header')
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
@include('admin.frontview.include.footer')
</body>
</html>

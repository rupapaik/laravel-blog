
@include('admin.frontview.include.header')
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
          <tr>
              <h2>  <td>{{$data->title}}</td></h2>
                <br/>
            <p><td>{{$data->description}}</td></p>
             <a href="{{URL::to('more')}}" class="btn">More</a>
              </tr>

    @endforeach
{{$data_list->links()}}
  </div>
</div>
@include('admin.frontview.include.footer')
</body>
</html>

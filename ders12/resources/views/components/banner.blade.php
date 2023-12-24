    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          @foreach ($sliders as $slider)
          <div class="item item-{{$loop->iteration}}">
            <div class="img-fill" style="background-image: '../assets/images/'.{{$slider->image}}">
                <div class="text-content">
                  <h6>{{$slider->title}}</h6>
                  <h4>{{$slider->subtitle}}</h4>
                  <p>{{$slider->description}}</p>
                  <a href="{{$slider->button_url}}" class="filled-button">{{$slider->button_text}}</a>
                </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
    <!-- Banner Ends Here -->
  
  
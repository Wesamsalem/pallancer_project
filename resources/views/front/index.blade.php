@extends('front.layout.master')

@section('content')
     
        <!-- start main section -->
        <div class="main-section home">
            <div class="main-slider">
                <div class="rtl-slider">
                    @foreach ($slides as $slide)
                    <div class="section-bg" style="background-image:url({{url('/')}}/upload/img/{{$slide->img}});">
                        <div class="bg-content">
                            <h6>{{$slide->title}}</h6>
                            <p>{{$slide->content}}</p>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        <!-- end main section -->
        </div>
        
        <div class="bg-container">      <!-- page background -->
            <!-- start about section -->
<!--
            <div class="about-section wow slideInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="about-left">
                                <h4 class="section-title">About Shami Eye Center</h4> <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem dolorum nisi molestiae corporis ipsa corrupti, maxime quae. Numquam modi, expedita, doloremque rem illum facilis, vel consequuntur architecto, beatae dolor nisi!</p>
                                <a href="#" class="main-btn">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="about-right-video">
                                <div class="about-video">
                                    <iframe src="https://www.youtube.com/embed/43ngkc2Ejgw" width="560" height="315" frameborder="0"></iframe>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
-->
            <!-- end about section -->
            
        <!-- start schedule section -->
        <div class="schedule-section home wow slideInUp">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sc-left">
                            <h4 class="section-title">تحديد موعد</h4> <br>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="sc-right">
                            <form method="POST" action="{{route('front.booking.store')}}">
                                @csrf
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-6">
                                        <div class="sc-input">
                                            <input class="input-field" type="text" name="name" placeholder="الاسم...">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="sc-input">
                                            <input class="input-field" type="text" name="email" placeholder="الايميل...">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="sc-input">
                                            <input class="input-field" type="text" name="phone" placeholder="الهاتف...">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="sc-input">
                                            <input class="input-field" type="text" name="date" onfocus="(this.type='date')" placeholder="اليوم المفضل..."  onblur="(this.type='text')" id="date">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="sc-input">
                                            <select class="input-field" name="branche_id">
                                                <option value>الفرع...</option>
                                                @foreach($branches as $branche)
                                                <option value="{{$branche->id}}">{{$branche->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="sc-btn">
                                            <button type="submit"  class="main-btn">تسجيل</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end schedule section -->

            <!-- start service section -->
            <div class="service-section">
                <h4 class="section-title">الخدمات</h4> <br>
                <div class="container">
                  <div class="section-icons">
                       <div class="top-row wow rotateInDownRight">
                            <div class="row">
                                @foreach ($services as $service)
                                    
                                <div class="col-md-3">
                                    <div class="service-icon">
                                        <div class="icon-img">
                                            <a href="{{route('front.services')}}"><img src="{{url('/')}}/upload/img/{{$service->logo}}"></a>
                                        </div>
                                        <div class="service-text">
                                            <h6>{{$service->title}}</h6>
                                            <p>{{$service->short_content}}</p>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                                
                  </div>
                </div>
                <a href="{{route('front.services')}}" class="main-btn">اقرأ المزيد</a>
            </div>
            <!-- end service section -->
        </div>
        
        <!-- start testimonials section -->
        <div class="testimonial-section wow slideInUp">
            <div class="container">
                <div class="section-text">
                    <h4 class="section-title">اراء العملاء</h4> <br>
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Rerum voluptatem reiciendis nisi, eum atque. Nostrum.</p>-->
                </div>
                <div class="testimonial-content">
                    <div class="testimonial-slider">
                        <div class="rtl-slides">
                            @foreach ($testimonials as $testimonial)

                                <div class="card-container">
                                    <div class="testimonial-card">

                                        <div class="card-img">
                                            <img src="{{url('/')}}/upload/img/{{$testimonial->img}}">
                                        </div>
                                        <div class="card-content">
                                           <h6 class="card-name">{{$testimonial->name}}</h6>
                                           <p class="card-text">{!!$testimonial->content!!}</p>
                                           <span class="card-date">أبريل 2019</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end testimonials section -->
        
        <!-- start medical section -->
        <div class="medical-section">
           <div class="medical-bg">
               <div class="container">
                    <div class="section-head">
                        <h4 class="section-title">نصائح طبية</h4> <br>
<!--                        <p>Lorem ipsum dolor sit amet, consectetur elit <br> Rerum reiciendis nisi, eum atque.</p>-->
                    </div>
                    <div class="medical-content wow slideInUp">
                        <div class="row no-gutters">
                            @foreach ($advices as $advice)
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="medical-img">
                                   <a href="advice.html"><img height="262" width="175" src="{{url('/')}}/upload/img/{{$advice->img_cover}}"></a>
                                    <div class="tip">
                                        <p>{{$service->title}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="medical-overlay">
                                    <div class="overlay">
                                        <a href="medical.html">
                                            <i class="fas fa-chevron-left"></i>
                                            <span>عرض الكل</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
        </div>
        <!-- end medical section -->
        
        <!-- start branches section -->
        <div class="branches-section wow slideInUp">
            <div class="container">
                <div class="section-head">
                    <h4 class="section-title">الفروع</h4> <br>
<!--                    <p>Lorem ipsum dolor sit amet, consectetur elit <br> Rerum reiciendis nisi, eum atque</p>-->
                </div>
                <div class="branches">
                    <div class="row">
                        @foreach ($branches as $branche)                    
                            <div class="col-lg-3 col-sm-6">
                            <div class="branch-col">
                                <h6>{{$branche->name}}</h6>
                               {!!$branche->content!!}
<!--                                <a class="location-btn" href="#">Location</a>-->
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end branches section -->
        
@endsection
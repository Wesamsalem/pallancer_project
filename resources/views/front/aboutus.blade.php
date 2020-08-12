@extends('front.layout.master')

@section('content')

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

<!-- end main section -->
<!-- start about section -->
<div class="about-section who-section wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
    <div class="container">
        <div class="row">
        @foreach ($aboutus as $aboutus)
        @if ($loop->odd)
            
            <div class="col-md-5 offset-md-1">
                <div class="about-left">
                    <h4 class="section-title">  {{$aboutus->title}}</h4> <br>
                    <p>{{$aboutus->content}}</p>
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="about-right">
                    <div class="about-img">
                        <img src="{{url('/')}}/upload/img/{{$aboutus->img}}">
                        
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 offset-md-1 order-md-1 order-2">
                <div class="about-right second">
                    <div class="about-img">
                        <img src="{{url('/')}}/upload/img/{{$aboutus->img}}">
                    
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-2 order-1">
                <div class="about-left second">
                    <h4 class="section-title">  {{$aboutus->title}}</h4> <br>
                    <p>{{$aboutus->content}}</p>
                </div>
            </div>
        @endif

            @endforeach

            
        
            
        </div>
    </div>
</div>

<!-- start invest section -->
<div class="invest-section wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
    <div class="blog-section">
        <div class="container">
           <div class="blog-title">
            <h4 class="section-title">الاستثمار في التكنولوجيا</h4> <br>
        </div>
            <div class="blog-content  wow slideInUp">
                <div class="row">
                    @foreach ($tecs as $tec)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="card-img">
                                <img src="{{url('/')}}/upload/img/{{$tec->img}}">
                            </div>
                            <div class="card-content">
                                <div class="card-text">
                                    <h4>{{$aboutus->title}}</h4>
                                
                                    <p>
                                        {{$aboutus->content}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end invest section -->

<!-- start ask section -->
<div class="ask-section wow slideInUp">
    <div class="container">
        <h4 class="section-title">أسئلة مكررة</h4> <br>
        <div class="ask-content">
            <div class="row">
            @foreach ($faqs as $faq)
                
            
                <div class="col-md-6 col-12">
                    <div class="ask-details">
                        <h5>{{$faq->title}}</h5>
                    </div>
                    <p>
                        <div class="col-md-6 col-12" style="box-sizing: border-box; font-family: &quot;Markazi Text&quot;, serif; position: relative; width: 570px; min-height: 1px; padding-right: 15px; padding-left: 15px; flex: 0 0 50%; max-width: 50%; color: rgb(33, 37, 41); font-size: 16px; text-align: right;">
                        {!!$faq->content!!}</div></p>
                </div>
                @endforeach
            </div>


               
<!-- end ask section -->
</div>
</div>
</div>


<footer class="wow slideInUp">
    <!-- start schedule section -->
    <div class="schedule-section wow slideInUp">
        <div class="schedule-bg">
            <div class="container">
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
                                            <button type="submit" class="main-btn">تسجيل</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@extends('front.layout.master')

@section('content')
      <!-- service page -->
      <div class="service-page">
        <div class="service-bg" style="background-image:url({{url('/')}}/upload/img/{{$slide->img}});">
            <div class="bg-content">
                <h1>{{$slide->title}}</h1>
                <p>{{$slide->content}}</p>
            </div>
        </div>

        <div class="service-container">
            <div class="">
                <div class="row no-gutters">
                    @foreach ($services as $service)

                    <div class="col-md-6" style="margin-top: 20px">
                        <div class="service-content wow slideInLeft">
                            <div class="service-img">
                                <img src="{{url('/')}}/upload/img/{{$service->img}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"  style="margin-top: 115px">
                        <div class="service-content wow slideInRight">
                            <div class="service-desc">
                                <div class="desc-img">
                                    <img src="{{url('/')}}/upload/img/{{$service->logo}}">
                                </div>
                                <div class="desc-text">
                                    <h3>{{$service->title}}</h3>
                                    <p>{{$service->short_content}}</p>
                                    <a href="{{route('front.service',$service->id)}}" class="main-btn">اقرأ المزيد</a>
                                </div>
                              

                            </div>
                        </div>
                    </div>

                 

                @endforeach

            </div>
        </div>
    </div>
</div>

    
    <!-- start footer -->
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
@endsection
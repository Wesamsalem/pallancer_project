@extends('front.layout.master')

@section('content')


    <div class="container">
        <div class="row">
<!--
            <div class="col-lg-4 order-lg-1 order-2">
                <div class="branch-content">
                    <h6>Amman, Main Branch</h6>
                    <p class="address">7th circle(near safeway)</p>
                    <p class="address">Princess Sumaya Bint Al-Hassan Street</p>
                    <p class="address">Building #53</p>
                    <span class="phone" dir="ltr">+962 (6) 5866969</span>
                    <span class="phone" dir="ltr">+962 5866969</span>
                    <div class="branch-icon">
                        <a href="#" title="share"><i alt="share" class="fas fa-share-alt"></i></a>
                        <a href="#" title="booking"><i class="fas fa-bookmark"></i></a>
                        <a href="#" title="drive me"><i class="fas fa-location-arrow"></i></a>
                    </div>
                </div>
            </div>
-->
           
        </div>
    </div>
<!-- start branches section -->
<div class="branches-section wow slideInUp">
    <div class="container">
        <div class="section-head" style="margin-top: 50px">
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
@extends('front.layout.master')

@section('content')
<div class="service-details news-details">
    <div class="news-title wow rubberBand">
        <h1>{{$item->title}} </h1>
    </div>
    <div class="details-content">
        <div class="container">
           <div class="news-details-img">
               <img src="{{url('/')}}/upload/img/{{$item->img}}">
           </div>
           <div class="row">
               <div class="col-md-10">
                    <div class="news-text">
                      {!!$item->content!!}
                    </div>
               </div>
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
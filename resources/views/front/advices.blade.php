@extends('front.layout.master')

@section('content')
div class="medical-page news-page">
            <div class="blog-section">
                <div class="container">
                   <div class="blog-title">
                       <h1>نصائح طبية</h1>
                   </div>
                    <div class="blog-content  wow slideInUp">
                        <div class="row">
                            @foreach ($advices as $advice)
                            <div class="col-lg-4 col-md-6">
                                <div class="blog-card">
                                    <div class="card-img">
                                        <img src="{{url('/')}}/upload/img/{{$advice->img}}">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-text">
                                            <h4>{{$advice->title}}</h4>
                                          
                                            <a href="{{route('front.advice',$advice->id)}}" class="more main-btn">اقرأ المزيد <i class="fas fa-chevron-left"></i></a>
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
@extends('front.layout.master')

@section('content')

<div class="contact-page">
    <div class="contact-us">
        <div class="container">
            <h1>اتصل بنا</h1>
            <form method="POST" action="{{route('front.contactus.store')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                       <div class="input-field">
                            <input type="text"name="name" class="name">
                           <label >الاسم</label>
                       </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="input-field">
                            <input type="email" name="email" class="email">
                            <label >البريد الالكتروني</label>
                       </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-field">
                            <input type="text" name="phone" class="phone">
                            <label >الهاتف</label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-field">
                            <input type="text" name="title" class="tell">
                            <label >العنوان</label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-field">
                            <input type="text" name="content" class="tell">
                            <label >المحتوى</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="main-btn submit">تسجيل</button>
            </form>
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
<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
        
        <title>Shami Eye Center</title>
        
      @include('front.layout.css')
    </head>
    <body>
        <!-- start header -->

        <header>
            <nav>
                <div class="logo">
                    <a href="index.html"><img src="{{url('/')}}/front/img/logo.png"></a>
                </div>
                <div class="bars">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="links-list">
                    <ul>
                        <li class="list-item">
                            <a class="link active-link" href="{{route('home')}}">الرئيسية</a>
                        </li>
                        <li class="list-item">
                            <a class="link" href="{{route('front.aboutus')}}">من نحن</a>
                        </li>
                        <li class="list-item">
                            <a class="link" href="{{route('front.services')}}">الخدمات</a>
                        </li>
                        <li class="list-item">
                            <a class="link" href="{{route('front.blogs')}}">غرفة الأخبار</a>
                        </li>
                        <li class="list-item">
                            <a class="link" href="{{route('front.advices')}}">نصائح طبية</a>
                        </li>
                        <li class="list-item">
                            <a class="link" href="{{route('front.contactus')}}">اتصل بنا</a>
                        </li>
                        <li class="list-item">
                            <a class="link" href="{{route('front.branches')}}">الفروع</a>
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header>
        <!-- end header -->
        @yield('content')
        <!-- start footer -->

        <footer class="wow slideInUp">
            <div class="container">
                <div class="footer-contact">
                    <div class="row">
                        <div class="col-xl-8 col-12">
                           <div class="footer-contact-container">
                               <div class="row">
                                    <div class="footer-logo contact-col col-md-3 col-6">
                                        <div class="logo-img">
                                            <img src="{{url('/')}}/front/img/logo.png">
                                        </div>
                                    </div>
                                    <div class="footer-links contact-col col-md-3 col-6">
                                        <ul>
                                            <li>
                                                <a href="{{route('home')}}">الرئيسية</a>
                                            </li>
                                            <li>
                                                <a href="{{route('front.aboutus')}}">من نحن</a>
                                            </li>
                                            <li>
                                                <a href="{{route('front.services')}}">الخدمات</a>
                                            </li>
                                            <li>
                                                <a href="{{route('front.blogs')}}">غرفة الأخبار</a>
                                            </li>
                                            <li>
                                                <a href="{{route('front.advices')}}">نصائح طبية</a>
                                            </li>
                                            <li>
                                                <a href="{{route('front.contactus')}}">اتصل بنا</a>
                                            </li>
                                        </ul>
                                    </div>
<!--
                                    <div class="work-time contact-col col-md-3 col-6">
                                        <p>أيام وساعات العمل<br> من السبت إلى الأربعاء<br> 9:00 ص - 5:00 م <br> الخميس <br> 9:00ص - 2:00م </p>
                                    </div>
-->
                                    <div class="social contact-col col-md-3 col-6">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i> <span>فيسبوك</span></a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/home"><i class="fab fa-twitter"></i> <span>تويتر</span></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> <span>إنستجرام</span></a>
                                            </li>
                                            <li>
                                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> <span>يوتيوب</span></a>
                                            </li>
                                        </ul>
                                    </div>
                               </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="rights">
                                <p>جميع الحقوق محفوظة</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->


@include('front.layout.js')
    </body>
</html>
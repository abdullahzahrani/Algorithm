@extends('layouts.app2')
@section('body')
    <body class="d-flex flex-column min-vh-100 bg-light" style="font-family: Tajawal, sans-serif;">
    @include('_load')
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav"
         style="background: url({{asset('storage/assets/img/bg-pattern.png')}}), linear-gradient(to left, #636FA4, #636FA4);border: none;line-height: initial;font-family: Almarai, sans-serif;padding-top: .2rem;"
         dir="RTL">
        <div class="container"><a class="navbar-brand" href="{{url('/')}}" style="font-family: Amiri, serif;">نادي
                الخوارزميات</a>
            <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
                    type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: Almarai, sans-serif;">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="{{url('/#goal')}}"
                                            style="font-family: Tajawal, sans-serif;">رؤيتنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/#about')}}" style="font-family: Tajawal, sans-serif;">معلومات
                            عنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/member')}}" style="font-family: Tajawal, sans-serif;">معلومات
                            عن الاعضاء</a></li>
                    <li class="nav-item" style="font-family: Tajawal, sans-serif;"><a class="nav-link" href="{{url('/certificate')}}"
                                                                                      style="font-family: Tajawal, sans-serif;">التحقق
                            من الشهادة</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="portfolio" class="portfolio bg-light">
        <div class="container">
            <div class="section-title pt-4 pb-4"><h2 style="font-family: Tajawal, sans-serif;">معرض الأعمال</h2>
                <p>من أعمال طلابنا اثناء سيرهم في تعلم برمجة تطبيقات الويب</p></div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li class="filter-active" data-filter="*">all</li>
                        <li data-filter=".filter-best">Best</li>
                        <li data-filter=".filter-frontEnd">FrontEnd</li>
                        <li data-filter=".filter-Challenges">Challenges</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container justify-content-center row-cols-lg-2">
                @foreach ($p as $user)
                <div class="col portfolio-item filter-{{$user['type']}} col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid"
                                                                                                     src="{{asset($user['img'])}}">
                    <div class="portfolio-info"><h4>{{$user['name']}}</h4>
                        <p>{{$user['rank']}}</p><a class="portfolio-lightbox preview-link"
                                                 href="{{$user['img']}}"
                                                 data-gallery="portfolioGallery" title="{{$user['title']}}"><i
                                class="fas fa-plus"></i></a><a class="details-link" target="_blank" href="https://{{$user['link']}}"><i class="fas fa-link"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <footer class="mt-auto bg-white" dir="ltr">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright"><span style="color: rgb(99, 111, 164);">تم برمجة هذا الموقع من قبل عبدالله الزهراني</span></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">التحقق من صحة الشهادة</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection

@extends('layouts.app2')
@section('body')

<body class="d-flex flex-column min-vh-100"
      style="background: url('{{asset('storage/assets/img/bg-pattern.png')}}'), linear-gradient(to left, #636FA4, #636FA4);">
@include('_load')
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav"
     style="background: url('{{asset('storage/assets/img/bg-pattern.png')}}'), linear-gradient(to left, #636FA4, #636FA4);border: none;line-height: initial;font-family: Almarai, sans-serif;"
     dir="RTL">
    <div class="container"><a class="navbar-brand" href="{{url('/')}}" style="font-family: Amiri, serif;">نادي
            الخوارزميات</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
                type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: Almarai, sans-serif;">
            <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}" style="font-family: Tajawal, sans-serif;">الرئيسية</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{url('/portfolio')}}" style="font-family: Tajawal, sans-serif;">معرض
                        الأعمال</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/#about')}}" style="font-family: Tajawal, sans-serif;">معلومات
                        عنا</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('member')}}" style="font-family: Tajawal, sans-serif;">معلومات
                        عن الاعضاء</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="DivDwnldSec-1" class="clean" style="background: #636fa4;">
    <div id="DivDwnldSec-2"><h1 class="text-center" data-aos="fade-up" style="color: var(--bs-white);">مرحبا بك {{$cer['name']}}</h1>
        <div class="row">

            <div class="col-sm-8 col-md-8 col-lg-4 offset-sm-2 offset-md-2 offset-lg-4 offset-xl-4 offset-xxl-4 dwnldApp"
                 data-bss-disabled-mobile="true" data-aos="fade-up"><h1 class="text-center"></h1><i
                    class="fa fa-check-circle dwnldicon"></i>
                <h1 style="color: var(--bs-white);">{{$cer['rank']}}</h1>
                <ul class="list-group">
                    <li class="list-group-item" dir="rtl"><a href="{{asset($cer['pdf']) }}" style="color:blue;">تحميل الشهادة </a><i
                            class="fa fa-file-pdf-o"></i></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<footer class="mt-auto bg-white"dir="ltr">
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
                    <li class="list-inline-item"><a href="#">طلب الإنضمام للنادي</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection

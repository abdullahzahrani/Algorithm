@extends('layouts.app2')
@section('body')

    <body class="d-flex flex-column min-vh-100" dir="RTL" style="font-family: Tajawal, sans-serif;background: url('{{asset('storage/assets/img/bg-pattern.png')}}'), linear-gradient(to left, #636FA4, #636FA4);">
    @include('_load')
    <body class="d-flex flex-column min-vh-100 clean">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav"
         style="background: url('{{url('/assets/img/bg-pattern.png')}}), linear-gradient(to left, #636FA4, #636FA4);border: none;line-height: initial;font-family: Almarai, sans-serif;"
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
                    <li class="nav-item"><a class="nav-link" href="{{url('/member')}}" style="font-family: Tajawal, sans-serif;">معلومات
                            عن الاعضاء</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/#about')}}" style="font-family: Tajawal, sans-serif;">معلومات
                            عنا</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="text-center text-white call-to-action"
             style="background: url('{{asset('storage/assets/img/bg-pattern.png')}}'), linear-gradient(to left, #636FA4, #636FA4);">
        <div class="container">
            <div class="row" data-bss-disabled-mobile="true" data-aos="zoom-in">
                <div class="col-xl-9 mx-auto position-relative"><h2 class="mb-4">من فضلك قم بادخال رقم الشهادة</h2>@if($flag)<small
                        style="color: var(--bs-yellow);">لم يتم العثور على الشهادة تاكد من الرقم !</small>@endif</div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form action="{{route('certificate.submit')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg"
                                                                             type="number" name="id" placeholder="xxxxxxxx"></div>
                            <div class="col-12 col-md-3">
                                <button class="btn btn-primary btn-lg" type="submit">تحقق !<br></button>
                            </div>
                        </div>
                    </form>
                </div>
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

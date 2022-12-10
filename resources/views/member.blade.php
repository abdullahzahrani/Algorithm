@extends('layouts.app2')
@section('body')
<body class="d-flex bg-light flex-column min-vh-100" dir="RTL" style="font-family: Tajawal, sans-serif;">
@include('_load')
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav"
     style="background: url('{{asset('storage/assets/img/bg-pattern.png')}}'), linear-gradient(to left, #636FA4, #636FA4);border: none;line-height: initial;font-family: Almarai, sans-serif;"
     dir="RTL">
    <div class="container"><a class="navbar-brand" href="{{url('/')}}" style="font-family: Amiri, serif;">نادي
            الخوارزميات</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
                type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: Almarai, sans-serif;">
            <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}" style="font-family: Tajawal, sans-serif;">الصفحة
                        الرئيسية</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/portfolio')}}" style="font-family: Tajawal, sans-serif;">معرض
                        الأعمال</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/#about')}}" style="font-family: Tajawal, sans-serif;">معلومات
                        عنا</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/certificate')}}" style="font-family: Tajawal, sans-serif;">التحقق من الشهادة</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-4" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse">
                <div class="team-member"><img class="rounded-circle mx-auto" src="{{asset('storage/assets/img/team/2-per.svg')}}"><h4>د. سلطان الدرع</h4>
                    <p class="text-muted">مشرف النادي</p>
                    <ul class="list-inline social-buttons" style="text-align: center;" >
                        <li class="list-inline-item" style="margin-right: -3rem;"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        <li class="list-inline-item"style="margin-left: 0.5rem;"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse">
                <div class="team-member"><img class="rounded-circle mx-auto" src="{{asset('storage/assets/img/team/2-per.svg')}}"><h4>عبدالله الزهراني</h4>
                    <p class="text-muted">رئيس النادي</p>
                    <ul class="list-inline social-buttons" style="text-align: center;" >
                        <li class="list-inline-item" style="margin-right: -3rem;"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        <li class="list-inline-item"style="margin-left: 0.5rem;"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse">
                <div class="team-member"><img class="rounded-circle mx-auto" src="{{asset('storage/assets/img/team/3-per.svg')}}"><h4>وئام الغيث</h4>
                    <p class="text-muted">نائبة رئيس النادي</p>
                    <ul class="list-inline social-buttons" style="text-align: center;" >
                        <li class="list-inline-item" style="margin-right: -3rem;"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        <li class="list-inline-item"style="margin-left: 0.5rem;"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            @foreach ($p1 as $user)
                <div class="col-sm-4" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse">
                    <div class="team-member"><img class="rounded-circle mx-auto" src="{{asset($user['img'])}}"><h4>{{$user['name']}}</h4>
                        <p class="text-muted">{{$user['rank']}}</p>
                        <ul class="list-inline social-buttons" style="text-align: center;" >
                            @if($user['li']!='#')<li class="list-inline-item" style="margin-right: -3rem;"><a href="{{$user['em']}}"><i class="fa fa-envelope"></i></a></li>@endif
                            <li class="list-inline-item"style="margin-left: 0.5rem;"><a href="{{$user['tw']}}"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="{{$user['li']}}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            @endforeach
            @foreach ($p as $user)
            <div class="col-sm-4" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse">
                <div class="team-member"><img class="rounded-circle mx-auto" src="{{asset($user['img'])}}"><h4>{{$user['name']}}</h4>
                    <p class="text-muted">{{$user['rank']}}</p>
                    <ul class="list-inline social-buttons" style="text-align: center;" >
                        <li class="list-inline-item" style="margin-right: -3rem;"><a href="{{$user['em']}}"><i class="fa fa-envelope"></i></a></li>
                        <li class="list-inline-item"style="margin-left: 0.5rem;"><a href="{{$user['tw']}}"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="{{$user['li']}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
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

@extends('layouts.app2')
@section('body')
    <body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54"
          style="font-family: Tajawal, sans-serif;">
    @include('_load')
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav"
         style="background: url('{{asset('storage/assets/img/bg-pattern.png')}}'), linear-gradient(to left, #636FA4, #636FA4);border: none;line-height: initial;font-family: Almarai, sans-serif;padding-top: .2rem;"
         dir="RTL">
        <div class="container"><a class="navbar-brand" href="{{url('/')}}" style="font-family: Amiri, serif;">نادي
                الخوارزميات</a>
            <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
                    type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: Almarai, sans-serif;">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="#goal"
                                            style="font-family: Tajawal, sans-serif;">رؤيتنا</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio" style="font-family: Tajawal, sans-serif;">معرض
                            الأعمال</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about" style="font-family: Tajawal, sans-serif;">معلومات
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
    <header class="clean masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in" style="font-family: Amiri, serif;"><span style="font-family: Amiri, serif;">! نادي الخوارزميات يرحب بكم</span>
                </div>
                <div class="intro-heading text-uppercase" style="font-family: Tajawal, sans-serif;"><span>نهدف لتطوير طلابنا بمسار الويب والتطبيقات</span>
                </div>
                <a class="btn btn-primary btn-xl text-uppercase" role="button" data-bss-disabled-mobile="true"
                   data-bss-hover-animate="pulse" href="#about">تعرف علينا اكثر؟</a></div>
        </div>
    </header>
    <section id="goal">
        <div class="container" data-bss-disabled-mobile="true" data-aos="slide-right">
            <div class="row">
                <div class="col-lg-12 text-center"><h2 class="text-uppercase section-heading">رؤيتنا</h2>
                    <h3 class="text-muted section-subheading">نادي ملهم، ومنارة لجميع طلاب وطالبات كلية علوم الحاسب
                        والمعلومات</h3></div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                            class="fa fa-user-circle-o fa-stack-1x fa-inverse"></i></span><h4 class="section-heading">تعزيز
                        التعليم الذاتي</h4>
                    <p class="text-muted">يساهم نادي الخوارزميات بتعزيز الطالب للتعلم الذاتي لإتقان المهارات الأساسية
                        اللازمة لمواصلة تعليم نفسه بنفسه ويستمر معه مدى الحياة</p></div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                            class="fa fa-clock-o fa-stack-1x fa-inverse"></i></span><h4 class="section-heading">اختصار الوقت
                        والجهد</h4>
                    <p class="text-muted">نوفر بنادي الخوارزميات عدة مصادر من شأنها توفير الوقت والجهد على الطالب وتوجيهه
                        تركيزه على التعلم</p></div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                            class="fa fa-users fa-stack-1x fa-inverse"></i></span><h4 class="section-heading">خلق بيئة
                        تعليمية تفاعلية</h4>
                    <p class="text-muted">نهدف بنادي الخوارزميات الى خلق روح التعاون بين الاعضاء ومساعدة الاخرين</p></div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio bg-light">
        <div class="container" data-bss-disabled-mobile="true" data-aos="slide-left">
            <div class="section-title pt-4 pb-4" style="font-family: Tajawal, sans-serif;"><h2
                    style="font-family: Tajawal, sans-serif;">معرض الأعمال</h2>
                <p style="font-family: Tajawal, sans-serif;">من أعمال طلابنا اثناء سيرهم في تعلم برمجة تطبيقات الويب&nbsp;<a
                        href="{{url('/portfolio')}}" style="text-decoration: none;font-weight: bold;"><span style="color: rgb(0, 40, 251);">زر المعرض الان&nbsp;</span></a>
                </p></div>
            <div class="row portfolio-container justify-content-center row-cols-lg-2">
                @foreach ($p as $user)
                <div class="col portfolio-item {{$user['type']}} col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <img class="img-fluid rounded-1" src="{{asset($user['img'])}}">
                    <div class="portfolio-info"><h4>{{$user['name']}}</h4>
                        <p>{{$user['rank']}}</p><a class="portfolio-lightbox preview-link" href="{{asset($user['img'])}}"
                                                   data-gallery="portfolioGallery" title="{{$user['title']}}"><i
                                class="fas fa-plus"></i></a><a class="details-link" rel="noopener noreferrer" target="_blank" href="https://{{($user['link'])}}">
                            <i class="fas fa-link"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="about" dir="rtl">
        <div class="container" data-bss-disabled-mobile="true" data-aos="flip-right">
            <div class="row">
                <div class="col-lg-12 text-center"><h2 class="text-uppercase">معلومات عنا</h2>
                    <h3 class="text-muted section-subheading">نادي تابع لكلية علوم الحاسب والمعلومات بجامعة الإمام محمد بن
                        سعود الإسلامية</h3></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('storage/assets/img/1.svg')}}"></div>
                            <div class="timeline-panel" style="font-family: Almarai, sans-serif;">
                                <div class="timeline-heading"><h4 style="text-align: left;">August 2020</h4><h4
                                        class="subheading" style="font-family: 'Kaushan Script', serif;">تأسيس النادي</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted"
                                                              style="text-align: right;font-family: Tajawal, sans-serif;">
                                        قامت كلية علوم الحاسب والمعلومات بجامعة الامام محمد بن سعود الاسلامية باستحداث نادي
                                        يهتم بتطوير الويب والتطبيقات تحت مسمى (<strong><span
                                                style="color: rgb(99, 111, 164);">نادي الخوارزميات</span></strong>)</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('storage/assets/img/2.svg')}}"></div>
                            <div class="timeline-panel"
                                 style="left: auto !important;text-align: right;font-family: Almarai, sans-serif;">
                                <div class="timeline-heading"><h4 style="text-align: left;">August 2020</h4><h4
                                        class="subheading">البدء بهيكلة النادي</h4></div>
                                <div class="timeline-body"><p class="text-muted" dir="rtl"
                                                              style="font-family: Tajawal, sans-serif;">تولى د. سلطان الدرع
                                        رئيس قسم علوم الحاسب الإشراف على نادي الخوارزميات</p>
                                    <hr>
                                    <p class="text-muted" dir="auto" style="font-family: Almarai, sans-serif;">تولى عبدالله
                                        الزهراني رئاسة نادي الخوارزميات</p>
                                    <hr>
                                    <p class="text-muted" dir="auto" style="font-family: Almarai, sans-serif;">تولت وئام
                                        الغيث نائبة رئيس&nbsp;نادي الخوارزميات<br></p></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('storage/assets/img/3.svg')}}"></div>
                            <div class="timeline-panel" style="font-family: Almarai, sans-serif;">
                                <div class="timeline-heading"><h4 style="text-align: left;">September 2020</h4><h4
                                        class="subheading">البدء بمسارات الـFull Stack&nbsp;</h4></div>
                                <div class="timeline-body" style="font-family: Almarai, sans-serif;"><p class="text-muted"
                                                                                                        style="font-family: Almarai, sans-serif;">
                                        <strong>تم اعتماد 4 مسارات رئيسية</strong> يقوم بالأشراف عليها رئيس النادي وهي على
                                        النحو التالي:-</p>
                                    <hr>
                                    <p class="text-muted" style="font-family: Almarai, sans-serif;">&nbsp; المسار الاول:
                                        مسار <strong>Front-End</strong> يقوم الطالب بتعلم كل من (<strong><span
                                                style="color: rgb(99, 111, 164);">Html,css bootstrab, javascript,vue js</span></strong>)
                                    </p>
                                    <hr>
                                    <p class="text-muted">المسار الثاني: مسار <strong>Back-End</strong> يقوم الطالب بتعلم
                                        (<strong><span style="color: rgb(99, 111, 164);">php, Laravel</span></strong>)</p>
                                    <hr>
                                    <p class="text-muted">المسار الثالث: مسار <strong>Clean Code</strong> هذا المسار يهدف
                                        لتعليم الطالب الممارسات الصحيحة للمبرمج المحترف، كما يشمل لأهم الثغرات وطرق تجنبها
                                        اثناء البرمجة.</p>
                                    <hr>
                                    <p class="text-muted">المسار الاخير: مسار <strong>Project</strong>&nbsp;يقوم عدد من
                                        الطلاب ببناء منصة عبر <strong><span style="color: rgb(99, 111, 164);">Github </span></strong>ويتم
                                        بتوكيل لكل طالب Task ويجب عليه انجازه بحيث يتم فيها محاكاة لسوق العمل.</p></div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('storage/assets/img/4.svg')}}"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading"><h4><strong>April2022</strong><br></h4><h4 class="subheading"
                                                                                                         style="text-align: right;">
                                        فتح باب الرعاية</h4></div>
                                <div class="timeline-body"><p class="text-muted" style="text-align: right;">أعلن رئيس النادي
                                        عبدالله الزهراني على التوصل الى مفاهمة بين نادي الخوارزميات وجمعية التعلم الالكتروني
                                        والبحث في الامور المشتركة</p></div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><h4 style="font-family: Almarai, sans-serif;">نحن هنا</h4></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container" data-bss-disabled-mobile="true" data-aos="slide-right">
            <div class="row">
                <div class="col-lg-12 text-center"><h2 class="text-uppercase">شركاء النجاح</h2></div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                src="{{asset('storage/assets/img/Untitled%20(200%20×%2050%20px)%20(200%20×%20200%20px)%20(100%20×%2050%20px)%20(60%20×%2050%20px)%20(110%20×%2099%20px).svg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                src="{{asset('storage/assets/img/Untitled%20(110%20×%2099%20px).svg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto" src="{{asset('storage/assets/img/ta3alom.svg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-3"><a href="#"><img class="img-fluid d-block mx-auto"
                                                                src="{{asset('storage/assets/img/ccis.svg')}}"></a></div>
            </div>
        </div>
    </section>
    <section class="text-center text-white call-to-action" id="mail" style="background: linear-gradient(to left, #636FA4, #636FA4);"
             dir="rtl">
        <div class="row">@if($flag)
            <div class="alert" role="alert" style="
              color: #ffffff;
              background-color: #636fa4;
              border-color: #636fa4;">
                شكرا لانضمامك معنا
            </div>@endif
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li dir="ltr"> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        <div class="container" data-bss-disabled-mobile="true" data-aos="slide-left">
            <div class="col-xl-9 mx-auto position-relative"><h2 class="mb-4">أنضم معنا الان</h2></div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form action="/#mail" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg"
                                                                             type="email"
                                                                             name="mail"
                                                                             placeholder="ادخل ايميلك ليصلك جديدنا"></div>
                            <div class="col-12 col-md-3">
                                <button class="btn btn-primary btn-lg" type="submit">أنضم&nbsp;<strong>!</strong><br>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
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
    @if($flag)
    <script type="text/javascript">

        const scrollToBottom = (mail) => {
            const element = document.getElementById(mail);
            element.scrollTop = element.scrollHeight;
        }
    </script>
    @endif
@endsection

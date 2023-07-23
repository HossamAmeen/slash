<!DOCTYPE html>
<html>

<head>
    <title>سلاش</title>
    <meta name="description" content="slash">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300|Raleway|Rochester&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo.png')}}">
    <meta name="keywords" content="slash">
    <meta name="author" content="slash">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('arabic/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('arabic/css/style.css')}}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container align-items-baseline w-100 ">
            <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0  d-flex align-items-baseline">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">الرئيسيه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#services">الخدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">اخر الاعمال</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-team">فريق العمل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#our-clients">العملاء</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">اتصل بنا</a>
                    </li>
                    <li class="nav-item dropdown d-flex align-items-baseline">
                        <a class="dropdown-item" href="#"><img src="{{asset('images/egypt.png')}}" alt=""
                                class="language-img">العربيه</a>
                        <a class="nav-link dropdown-toggle lan-div m-0" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">

                        </a>
                        <ul class="dropdown-menu">
                            <li class="d-flex"><a class="dropdown-item" href="{{url('/en')}}"> <img
                                        src="{{asset('images/united-states.png')}}" alt="" class="language-img">EN</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="header-content">
                        <h2>مرحبا بك
                            في سلاش</h2>
                        <p>وكالة البرمجيات
                            والتسويق الرقمي</p>
                        <div class="icons-group">
                            <a href="tel:+{{$configration->phone}}" target="_blank"><img
                                    src="{{asset('images/phone.png')}}" alt=""></a>
                            <a href="https://api.whatsapp.com/send?phone={{$configration->whatsapp}}"
                                target="_blank"><img src="{{asset('images/whatsapp.png')}}" alt=""></a>
                            <a href="{{$configration->facebook}}"><img src="{{asset('images/fb.png')}}" target="_blank"
                                    alt=""></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <button type="button" class="btn btn btn-floating btn-lg" id="btn-back-to-top">
        <img src="{{asset('images/go-up.png')}}" alt="">
    </button>
    <button type="button" class="btn btn btn-floating-whatsapp btn-lg">
        <a href="https://api.whatsapp.com/send?phone={{$configration->whatsapp}}"><img
                src="{{asset('images/whatsapp_2.png')}}" target="_blank" alt=""></a>
    </button>
    <div class="about" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 photo-1 d-flex flex-column align-items-end justify-content-end mb-4 mb-xl-0">
                    <img class="w-100 photo-1"
                        src="{{asset('arabic/images/thisisengineering-raeng-XAAGdkSueLo-unsplash.png')}}" alt="">

                </div>
                <div class="col-xl-2 photo-2 d-flex flex-column align-items-start justify-content-end mb-4 mb-xl-0">
                    <img class="w-100 photo-2" src="{{asset('arabic/images/seo-mistake-420x366.png')}}" alt="">
                </div>
                <div class="col-xl-6 content d-flex flex-column align-items-start justify-content-center">
                    <h3>من نحن</h3>
                    <p>نحن مجموعة من الشباب نعمل تحت مظلة واحدة تسمح للجميع بالتجربة والحصول على أفضل النتائج في ظل نظام
                        إداري حديث يساوي
                        الموظفين بالعملاء. نتطلع إلى أن نكون أكبر شركة عربية في هذا المجال وأن نغزو السوق الخارجية،
                        وفقًا لتجربتنا وفكرنا
                        المتجدد دائمًا. نظرًا لأن الويب قادر بسهولة على استيعاب الوسائط مثل الصوت والصور والفيديو وكذلك
                        النص. ظهرت مواقع
                        اجتماعية تدعم هذه الوسائط.قادر بسهولة على استيعاب الوسائط مثل الصوت والصور والفيديو وكذلك النص.
                        ظهرت مواقع اجتماعية تدعم
                        هذه الوسائط.</p>
                    <!-- <a href=""> تحميل اخر الاعمال</a> -->
                </div>
            </div>

        </div>
    </div>
    <!--services-->
    <div class="services" id="services">
        <div class="container">
            <div class="row">
                <h3>خدماتنا</h3>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-xl-3 content d-flex flex-column serv-box">
                    <div class="circle">
                        <img src="{{asset($service->image)}}" alt="">
                        <h5>{{$service->ar_name}}</h5>
                        <p>{{$service->ar_description}}</p>
                    </div>
                </div>
                @endforeach

            </div>


        </div>
    </div>
    <!--Latest work-->
    <div class="latest-work" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mb-5">

                    <h3 class="m-0">latest work</h3>
                    <div class="tab">
                        <button class="tablinks" onclick="openTap(event, 'All')" id="defaultOpen">الكل</button>
                        <button class="tablinks" onclick="openTap(event, 'socialMedia')">سوشيال ميديا</button>
                        <button class="tablinks" onclick="openTap(event, 'ecomerce')">التجارة الالكترونية</button>
                        <button class="tablinks" onclick="openTap(event, 'branding')">الهوية البصرية</button>
                        <button class="tablinks" onclick="openTap(event, 'web')">برمجه المواقع</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="All" class="tabcontent">
                    <div class="row mb-4">
                        @foreach($last_works as $last_work)
                        <div class="col-xl-4 {{$last_work->type}} tabtype" style="margin-bottom: 25px">
                            <div class="w-100 mb-4 mb-xl-0 {{$last_work->type}}">
                                <img src="{{$last_work->image}}" alt="{{$last_work->ar_name}}" class="w-100 h-100">
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    {{-- <div id="more">
                        <div class="row mb-4">
                            <div class="col-xl-4">
                                <div class="w-100 mb-4 mb-xl-0">
                                    <img src="{{asset('arabic/images/show – 3.png')}}" alt="" class="w-100 h-100">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="w-100 mb-4 mb-xl-0">
                                    <img src="{{asset('arabic/images/AZ app.png')}}" alt="" class="w-100 h-100">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="w-100">
                                    <img src="{{asset('arabic/images/Eleven app.png')}}" alt="" class="w-100 h-100">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                {{-- <div id="SocialMedia" class="tabcontent">
                    <h3>SocialMedia</h3>
                </div>
                <div id="ECommerce" class="tabcontent">
                    <h3>ECommerce</h3>
                </div>
                <div id="Branding" class="tabcontent">
                    <h3>Branding</h3>
                </div>
                <div id="websiteDevelopment" class="tabcontent">
                    <h3>websiteDevelopment</h3>
                </div> --}}
            </div>
            {{-- <div class="row">
                <div class="col-xl-12">
                    <div class="mt-5 d-flex justify-content-center see-more">
                        <a onclick="showMore()" id="myBtn">رؤية المزيد من الأعمال</a></a>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
    </div>
    <!--contact-us-->
    <div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">

                </div>
                <div class="col-xl-6">
                    <h3>اتصل بنا</h3>
                    <p>نحن مجموعة من الشباب نعمل تحت مظلة واحدة تسمح للجميع بالتجربة والحصول على أفضل النتائج</p>
                </div>
                <div class="col-xl-3">

                </div>
            </div>
            <div class="contact-us">
                <div class="row ">
                    <div class="col-xl-4">
                        <div class="contact-details mb-4 mb-xl-0">
                            <p>لموبايل</p>
                            <a href="tel:+{{$configration->phone}}">+{{$configration->phone}}</a>
                            <p>البريد الالكتروني</p>
                            <a href="mailto:{{$configration->email}}">{{$configration->email}}</a>
                            <p>لعنوان</p>
                            <p >{{$configration->ar_address}}</p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        @if (session()->get('action') )
                        <div class="alert alert-success">
                            <strong>{{session()->get('action')}}</strong>
                        </div>
                        @endif
                        <form action="{{url('contact-us')}}" method="post">
                            @csrf
                            <div class="mb-3 d-flex justify-content-between side">
                                <input type="text" class="form-control w-30" placeholder="الاسم بالكامل" name="name"
                                    required>
                                <input type="email" class="form-control w-40" placeholder="البريد الالكتروني"
                                    name="email" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="الموضوع" name="subject" required>
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control" placeholder="الرسالة" id="" cols="30"
                                    rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--OUR TEAM-->
    <div class="our-team" id="our-team">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">

                </div>
                <div class="col-xl-6">
                    <h3>فريق العمل</h3>
                    <p>نحن مجموعة من الشباب نعمل تحت مظلة واحدة تسمح للجميع بالتجربة والحصول على أفضل النتائج</p>
                </div>
                <div class="col-xl-3">

                </div>
            </div>
            <div class="row mt-5">
                @foreach ($employees as $employee)
                <div class="col-xl-3">
                    <div class="our-team-box member-1" style="background-image: url({{asset($employee->image)}});">
                        <div class="member-details">
                            <p>{{$employee->ar_name}}</p>
                            <span>{{$employee->ar_postion}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--Clients-->
    <div class="our-clients" id="our-clients">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">

                </div>
                <div class="col-xl-6">
                    <h3>عملاؤنا</h3>
                    <p>نحن مجموعة من الشباب نعمل تحت مظلة واحدة تسمح للجميع بالتجربة والحصول على أفضل النتائج</p>
                </div>
                <div class="col-xl-3">

                </div>
            </div>
            <div class="row mt-5">

                @foreach ($clients as $item)
                <div class="col-xl-2">
                    <a href="{{$item->link}}"><img src="{{asset($item->image)}}" alt="" class="w-100"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer-bg">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="p-1">
                            <img src="{{asset('/images/logo-1.png')}}" alt="">
                            <p>
                                نحن مجموعة من الشباب نعمل تحت مظلة واحدة تسمح للجميع بالتجربة والحصول على أفضل النتائج
                            </p>
                            <div class="social-media-icons">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="p-2">
                            <ul>
                                <li class="mb-2"><a href="#">الرئيسيه</a></li>
                                <li class="mb-2"><a href="#about-us">من نحن</a></li>
                                <li class="mb-2"><a href="#services">الخدمات</a></li>
                                <li class="mb-2"><a href="#portfolio">اخر الاعمال</a></li>
                                <li class="mb-2"><a href="#our-clients">العملاء</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="p-3">
                            <p>العنوان: {{$configration->ar_address}} </p>
                            <p>الايميل: {{$configration->email}}</p>
                            <p>الهاتف : {{$configration->phone}}</p>
                            <a href="tel:+{{$configration->phone}}"><img src="{{asset('images/speaker.png')}}" alt="">
                                {{$configration->phone}}</a>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3">
                        <div class="d-flex flex-column email-form p-4">
                            <p>اشترك في النشرة الاخبارية</p>
                            <form action="">
                                <input type="email" class="form-control mb-3" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="البريد الالكتروني">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="orange-footer pt-2 pb-2">
            <div class="container">
                <div class="row d-flex justify-content-xl-between justify-content-start">
                    <div class="col-xl-6">
                        <div class="d-flex justify-content-xl-start justify-content-center">
                            <p>جميع الحقوق محفوظة لشركة سلاش2023</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="d-flex justify-content-xl-end justify-content-center">
                            <a href="" class="mr-5">سياسة الخصوصية</a>
                            <a href="" class="mr-5">الشروط والأحكام</a>
                            <a href="" class="mr-5">الأمان</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('arabic/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('arabic/js/script.js')}}"></script>
</body>

</html>
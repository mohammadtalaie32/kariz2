<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>شبکه آموزشی کاریز</title>
    <meta name="description" content="description">
    <meta name="author" content="Coralix Themes">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fav and touch icons
	================================================== -->
    <!-- Custom styles
   ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bt.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bt4.css') }}">

    <!-- Media querys
    ================================================== -->
{{--    <link href="css/media-queries.css" rel="stylesheet" media="screen">--}}


<!-- Scripts Libs
    ================================================== -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>


<body>


<div class="bt5">


    <div class="tw-bg-gray-50">
        <nav class="navbar navbar-expand-lg container">
            <button class="navbar-toggler" type="button" style="outline: none !important" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/toggle.png" width="50px" style="outline: none !important;border:none !important;"/>
            </button>

            <div class="collapse navbar-collapse sm:tw-ml-4 lg:tw-ml-0" id="navbarSupportedContent">
                <a href="https://kariz.ca">
                    <img src="{{ asset('img/kariz.png') }}" class="tw-mr-2" width="128px" height="40px">
                </a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link tw-mt-1.5 tw-transition tw-duration-300 mylink2  lalezar" style="font-size: 15px;display: flex;align-items:center;color: black" href="https://kariz.ca"><img class="tw-mr-2" width="30px" src="{{ asset('img/home2.png') }}"/>
                            خانه
                        </a>
                    </li>
                </ul>
                <form method="GET" action="{{ url('/') }}" class="form-inline my-2 my-lg-0 lalezar">
                    <input required name="search" type="text" class="form-control tw-text-right" placeholder="جستجوی آموزشگاه ..." style="direction: rtl;outline: none !important;border-top-right-radius: 0;border-bottom-right-radius: 0">
                    <button class="btn btn-primary lalezar"  style="border-top-left-radius: 0;border-bottom-left-radius: 0">جستجو</button>
                </form>
            </div>
        </nav>
    </div>


</div>



<header>


    <div  style="background-image: url({{asset('img/slider-map.png')}}) , linear-gradient(to right, var(--tw-gradient-stops));" class="tw-from-blue-900 tw-via-blue-800 tw-to-blue-900 tw-pb-10">
        <div class="sm:tw-w-7/12 lg:tw-w-5/12 tw-mx-auto">
            <div class=" lg:tw-text-right tw-h-full lg:tw-px-10 tw-py-20 tw-py-auto tw-mt-0" style="text-align: center">
                <p class="sm: tw-text-lg lg:tw-text-md sm:tw-tracking-md lg:tw-tracking-widest tw-font-thin tw-text-gray-300">
                    STAY    CONNECTED    WITH    OUR     EDUCATION    NETWORK
                </p>
                <h1 class="sm:tw-text-5xl lg:tw-text-5xl tw-text-gray-200 tw-mt-8 lalezar">بانک اطلاعاتی مراکز آموزشی</h1>
                <p class="sm:tw-text-lg lg:tw-text-2xl tw-text-gray-300 tw-mt-6 lalezar">
                    جستجوی مراکز آموزشی فارسی زبان در کانادا
                </p>
            </div>

        </div>
    </div>

</header>



<div class="custom_style">




    <!--Content Steps-->
    <section class="container steps generic-section lalezar tw-space-y-10">


        <div class="row-fluid sm:tw-mb-0 lg:tw-mb-8">
            <div class="span12">
                <h2><span>{{ $institude->title }}<em></em></span></h2>
            </div>
        </div>

        <div class="tw-grid tw-grid-cols-3">

            <div class="tw-col-span-2 tw-bg-green-300">
                <div class="tw-bg-green-300">
                   {!! $institude->content !!}
                </div>

            </div>

            <div>
                <img src="{{ Request::root(). '/img/' . $institude->image }}" />
                <div class="tw-text-lg tw-py-2 tw-mt-2 tw-shadow-md tw-font-bold tw-bg-blue-500"  style="color:white">
{{--                    <div style="direction: rtl;text-align: center">0 نظر</div>--}}
                    <div style="direction: rtl;text-align: center">{{ $institude->views }} بازد ید</div>
{{--                    <div>{{ $institude->timestamps  }}</div>--}}

                </div>
                <div class="tw-flex tw-justify-center tw-space-x-14 tw-text-lg tw-py-2 tw-mt-2 tw-shadow-md tw-font-bold tw-bg-green-500"  style=";color:white">
                    <div style="direction: rtl">
                    26 می ۲۰۲۱
                    </div>

                </div>
            </div>

        </div>






    </section>


</div>


<div class="footer bt5 tw-pb-16 tw-pt-16" >
    <section class="container generic-section1">
        <div class="row-fluid lg:tw-grid lg:tw-grid-cols-3">
            <div class="span4 item sm:tw-pl-10 sm:tw-pr-10 sm:tw-mb-20 lg:tw-mb-0 sm:tw-mt-10 lg:tw-mt-0 lg:tw-pr-20 lalezar tw-text-center">
                <h3>کاریز</h3>
                <p class="tw-mt-8" style="font-size: 20px;margin-top:12px;color: white !important;text-decoration: none">
                    <a href="https://www.kariz.ca/blog/" class="mylink tw-transition tw-duration-150 hover:tw-text-blue-600" style="text-decoration: none;color :white"> مقالات </a><br />
                    <a href="https://www.kariz.ca/book-page/" class="mylink tw-transition tw-duration-150 hover:tw-text-blue-600" style="text-decoration: none;color :white">کتابخانه </a><br />
                    <a href="https://www.kariz.ca/%d8%b3%d8%a7%d8%b2%d9%85%d8%a7%d9%86-%d9%be%d9%86%d8%af-pand-settlement-services/" class="mylink tw-transition tw-duration-150 hover:tw-text-blue-600" style="text-decoration: none;color :white">همکاران </a><br />
                    <a href="https://www.kariz.ca/become-an-instructor/" class="mylink tw-transition tw-duration-150 hover:tw-text-blue-600" style="text-decoration: none;color :white">فرصت شغلی </a><br />
                </p>
            </div>
            <div class="span4 item tw-pr-10 tw-pl-10 lalezar tw-text-center sm:tw-mb-20 lg:tw-mb-0" style="direction: rtl">
                <h3>لینک های مفید</h3>
                <p class="tw-mt-8" style="font-size: 20px;margin-top:12px;color: white !important;text-decoration: none">
                    <a href="http://www.kariz.ca/about-us/" class="mylink tw-transition tw-duration-150 hover:tw-text-blue-600" style="text-decoration: none;color :white">درباره ما </a><br />
                    <a href="https://www.kariz.ca/courses/" class="mylink tw-transition tw-duration-150 hover:tw-text-blue-600" style="text-decoration: none;color :white">دوره ها </a><br />
                    <a href="https://www.kariz.ca/become-an-instructor/" class="mylink tw-transition tw-duration-150 hover:tw-text-blue-600" style="text-decoration: none;color :white">اساتید </a><br />
                    <a href="https://www.kariz.ca/become-an-instructor/" class="mylink tw-transition tw-duration-150 hover:tw-text-blue-600" style="text-decoration: none;color :white">استاد شوید </a><br />
                </p>

            </div>
            <div>
                <img class="tw-mx-auto" src="{{ asset('img/kariz2.png') }}">
                <br />

                <p class="tw-flex tw-w-full tw-justify-center tw-tracking-widest" style="font-size: 22px">001-647-890-3006</p>

                <ul class="social tw-flex tw-w-full tw-justify-center">
                    <li class="tooltip_hover" title="" data-original-title="Linkedin"><a href="https://www.instagram.com/kariz.network/?hl=en" class="in">Instagram</a></li>
                    <li class="tooltip_hover" title="" data-original-title="Youtube"> <a href="https://t.me/kariznetwork"><img width="80px" src="{{ asset('img/telegram.png') }}" /></a></li>
                    <li class="tooltip_hover" title="" data-original-title="Facebook"><a href="https://www.facebook.com/karizedu" class="facebook">Linked In</a></li>
                    <li class="tooltip_hover" title="" data-original-title="Linkedin"><a href="https://instagram.com/kariz.kids?utm_medium=copy_link" class="in">Instagram</a></li>
                </ul>

            </div>
        </div>
    </section>
</div>
<!-- end Footer -->


<!--Copyright-->
<div class="copy bt5">
    <section class="container">
        <div class="row-fluid tw-text-center">
            <div class="span12">
                <p>© 2021 PRODEVELOPERS TEAM. All rights reserved. <a href="https://prodevelopers.me">Official Website</a></p>
            </div>
        </div>
    </section>
</div>
<!--end Copyright-->

<a id="goTop" href="#">Top</a>




</div>


<script>
    $(document).ready(function() {
        $('.mylink').on('mouseenter' , function() {
            $(this).css({color:'blue'});
        });

        $('.mylink').on('mouseleave' , function() {
            $(this).css({color:'white'});
        });

        $('.mylink2').on('mouseenter' , function() {
            $(this).css({color:'blue'});
        });

        $('.mylink2').on('mouseleave' , function() {
            $(this).css({color:'black'});
        });
    });
</script>



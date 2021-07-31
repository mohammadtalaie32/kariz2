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
                        <a class="nav-link tw-mt-1.5 tw-transition tw-duration-300 mylink2 lalezar tw-font-bold" style="font-size: 15px;display: flex;align-items:center;color: black" href="https://kariz.ca"><img class="tw-mr-2" width="30px" src="{{ asset('img/home2.png') }}"/>
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
               @if(request()->input('search'))
                    <h2><span>لیست اموزشگاه های یافت شده   <em></em></span></h2>
               @else
                    <h2><span>لیست کل آموزشگاه ها   <em></em></span></h2>
               @endif
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>

        @if(count($institudes) > 0)

            @foreach($institudes as $institude)

                <div class="lg:tw-grid lg:tw-grid-cols-3 tw-backdrop-filter tw-backdrop-blur-2xl tw-border-2 tw-shadow-xl tw-p-10">
                    <div class="lg:tw-col-span-2 tw-py-4 tw-px-10 tw-text-right tw-py-8" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                        <a href="institude/{{$institude->id}}" style="text-decoration: none">
                            <h1 style="font-size: 32px">{{ $institude->title }}</h1>
                        </a>

                        <p class="tw-font-bold" style="margin-top: 20px;font-size: 18px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 5; -webkit-box-orient: vertical;">
                            {{ $institude->quick_intro }}
                        </p>
                        <br>
                        <a href="institude/{{$institude->id}}" class="tw-transition tw-duration-300 hover:tw-bg-yellow-600 tw-bg-blue-600 tw-px-3 tw-py-3 tw-mt-4 tw-rounded-lg" style="text-decoration: none;color:white;font-size: 16px">اطلاعات بیشتر</a>
                    </div>
                    <div class="sm:tw-mt-8 lg:tw-mt-0 sm:tw-w-9/12 lg:tw-w-full sm:tw-mx-auto lg:tw-mx-0">
                        <img src="img/{{ $institude->image }}" class="tw-w-full tw-h-full tw-rounded-full" style="width: 100%;height: 100%">
                    </div>
                </div>

            @endforeach

        @else
            <p style="font-weight: bold;font-size:25px;direction: rtl">موردی یافت نشد!</p>
        @endif


       <div class="bt5 tw-flex tw-justify-center">
           {{ $institudes->appends(request()->query())->links() }}
       </div>


    </section>


</div>
    <!--End Content Steps-->

    {{--

    <!--Video List-->
    <section class="container video generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2 class="text-center"><span>ارزشیابی <em>ساده تر از همیشه</em></span></h2>
            </div>
        </div>
        <div class="row-fluid tw-mt-20">
            <div class="span8">
                <div>
                    <img class=" tw-shadow-xl" src="{{ asset('img/test.jpg') }}">
                </div>
            </div>
            <div class="span4 tw-text-right" style="direction: rtl">
                <h3>امکانات ویژه</h3>
                <div class="tw-mt-10">
                    <ul class="list-features">
                        <li class="tw-text-gray-600">ساده فقط با چند کلیک</li>
                        <li class="tw-text-gray-600">مدیریت دانشجویان</li>
                        <li class="tw-text-gray-600">تصحیح توسط سیستم</li>
                        <li class="tw-text-gray-600">امکان ارسال ویدیو و صدا برای سوالات</li>
                        <li class="tw-text-gray-600">سیستم ضد تخلف</li>
                        <li class="tw-text-gray-600">تفکیک سوالات</li>
                        <li class="tw-text-gray-600">بیشتر ...</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!--End Video List-->




    <!--Testimonials-->
    <section class="testimonials">
        <div class="container">
            <div class="row-fluid">
                <ul class="list-testimonials" id="slider">

                    <li style="direction: rtl">
                        <img style="width: 200px !important;" class="img-circle tw-shadow-2xl" src="img/profess.jpg" alt="testimonial avatar" />
                        <p class="comment">“به شخصه تجربه سودمند و ارزشمندی داشتم. اما والاتر از هرچیز زمانی بود که برایم صرفه جویی شد!”</p>
                        <p class="date"><span></span>دکتر محمد رضا طلایی - استاد دانشگاه شیراز</p>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Testimonials-->








    {{--<section class="container learn generic-section">--}}
    {{--    <div class="row-fluid">--}}
    {{--        <div class="span12">--}}
    {{--            <h2 class="text-center"><span>سیستم <em>تخلف یاب</em> ما چگونه عمل میکند؟ </span></h2>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="row-fluid tw-mt-20">--}}
    {{--        <div class="span7 text-right" style="direction: rtl">--}}
    {{--            <p class="tw-mt-12">دانشجویان جهت ورود به سیستم ازمون موظف به روشن نمودن دوربین خود بوده و سیستم به طور اتوماتیک حرکات و رفتار های مشکوک را بررسی کرده و به مدیر ازمون ارسال میکند.</p>--}}

    {{--            <p>استفاده از این سیستم کاملا اختیاری بوده و به میل اساتید و امکانات دانشجویان وی برمیگردد.</p>--}}


    {{--        </div>--}}
    {{--        <div class="span5">--}}
    {{--            <img src="{{ asset('img/cheat2.png') }}" alt="mac" />--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}















    {{--

    <section class="container global-oportunities generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2 class="text-center"><span>Learning with <em>global opportunities</em></span></h2>
            </div>
        </div>


        <div class="row-fluid">
            <div class="span6 item nth1">
                <img class="avatar" src="img/courses/1.jpg" alt="HOW TO COOK & MAKE PASTA" />
                <div class="cont animated bounce">
                    <h3><i class="icon-new"></i><span>HOW TO COOK & MAKE PASTA</span></h3>
                    <p>Aliquam enim ligula, malesuada at aliquet a, molestie eget eros. Donec felis nisl, scelerisque nec porttitor sed, scelerisque sed tortor. Quisque quis nisl neque, nec lobortis tortor.</p>
                    <p><em>Start: 15 May 2015</em></p>
                </div>
            </div>
            <div class="span6 item nth2">
                <img class="avatar" src="img/courses/2.jpg" alt="TYPES OF COFFEE DRINKS" />
                <div class="cont">
                    <h3><i class="icon-new"></i><span>TYPES OF COFFEE DRINKS</span></h3>
                    <p>Aliquam enim ligula, malesuada at aliquet a, molestie eget eros. Donec felis nisl, scelerisque nec porttitor sed, scelerisque sed tortor. Quisque quis nisl neque, nec lobortis tortor.</p>
                    <p><em>Start: 15 May 2015</em></p>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6 item nth3">
                <img class="avatar" src="img/courses/3.jpg" alt="SPECIAL SUSHI LUNCH" />
                <div class="cont">
                    <h3><i class="icon-new"></i><span>SPECIAL SUSHI LUNCH</span></h3>
                    <p>Aliquam enim ligula, malesuada at aliquet a, molestie eget eros. Donec felis nisl, scelerisque nec porttitor sed, scelerisque sed tortor. Quisque quis nisl neque, nec lobortis tortor.</p>
                    <p><em>Start: 15 May 2015</em></p>
                </div>
            </div>
            <div class="span6 item  nth4">
                <img class="avatar" src="img/courses/4.jpg" alt="CLASSIC RECIPES FROM USA" />
                <div class="cont">
                    <h3><i class="icon-new"></i><span>CLASSIC RECIPES FROM USA</span></h3>
                    <p>Aliquam enim ligula, malesuada at aliquet a, molestie eget eros. Donec felis nisl, scelerisque nec porttitor sed, scelerisque sed tortor. Quisque quis nisl neque, nec lobortis tortor.</p>
                    <p><em>Start: 15 May 2015</em></p>
                </div>
            </div>
        </div>
    </section>
    <!--End learn-->


    <!--Brands-->
    <section class="brands">
        <div class="container">
            <div class="row-fluid">
                <ul class="list-brands">

                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-twitter.png" alt="//" /></a></li>
                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-facebook.png" alt="//" /></a></li>
                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-yahoo.png" alt="//" /></a></li>
                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-youtube.png" alt="//" /></a></li>
                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-skype.png" alt="//" /></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Brands-->

    <!-- pricing
    ======================================================= -->
    <section class="container pricing  text-center generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2 class="text-center"><span>Optional <em>Pricing Table</em> Design</span></h2>
            </div>
        </div>
        <div class="row-fluid">

            <div class="span4 item">
                <h3>The Cook's Roadmap</h3>
                <h5>$19. 95 /month</h5>
                <p>Cooking pasta does not have to mean dumping noodles into water with powdered cheese! Pasta can be light, delicate and incredibly flavorful. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat nisi a nunc pellentesque egestas. Aliquam eu sem libero, eget gravida turpis. Duis velit felis, sagittis ac semper hendrerit, molestie sit amsque elementum.</p>
                <a href="" class="btn btn-large">Purchase</a>
            </div>

            <div class="span4 item">
                <h3>Mastering Your Fry Pan</h3>
                <h5>$29. 95 /month</h5>
                <p>Cooking pasta does not have to mean dumping noodles into water with powdered cheese! Pasta can be light, delicate and incredibly flavorful. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat nisi a nunc pellentesque egestas. Aliquam eu sem libero, eget gravida turpis. Duis velit felis, sagittis ac semper hendrerit, molestie sit amsque elementum.</p>
                <a href="" class="btn btn-large">Purchase</a>
            </div>

            <div class="span4 item">
                <h3>How to Cook & Make Pasta</h3>
                <h5>$49. 95 /month</h5>
                <p>Cooking pasta does not have to mean dumping noodles into water with powdered cheese! Pasta can be light, delicate and incredibly flavorful. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat nisi a nunc pellentesque egestas. Aliquam eu sem libero, eget gravida turpis. Duis velit felis, sagittis ac semper hendrerit, molestie sit amet antuisque elementum.</p>
                <a href="#" class="btn btn-large">Purchase</a>
            </div>
        </div>

    </section>
    <!-- end pricing -->



    <!--Newsletter-->
    <section class="newsletter">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <form id="newsletter" class="formNewsletter nm" action="index_submit" method="post" accept-charset="utf-8">
                        <div id="loadingNews" style="display: none" class='alert'>
                            <a class='close' data-dismiss='alert'>×</a>Loading
                        </div>
                        <div id="responseNews"></div>
                        <div class="row-fluid">
                            <div class="span12 fields">
                                <label>SignUp To Get The Latest News &amp; Updates</label>
                                <div>
                                    <input type="text" class="large" placeholder="Your email here baby" name="Email" value="" />
                                    <input class="btn btn-large btn-primary" type="submit" name="submit" value="SUSCRIBE" id="submit"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Newsletter-->



{{----}}
    <!--Footer-->
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
                    <br>

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

   ۱۰ <a id="goTop" href="#">Top</a>




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



    <!-- ======================= JQuery libs =========================== -->

    {{-- <!-- Bootstrap.js--> --}}



<!-- ======================= End JQuery libs =========================== -->

</body>
</html>

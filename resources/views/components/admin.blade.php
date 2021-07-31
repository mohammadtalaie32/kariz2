<!DOCTYPE html>
<html lang="fa" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>پنل مدیریت</title>

    <link rel="stylesheet" type="text/css" href="{{ url('fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/css/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/css/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/css/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fonts/iranyekan/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/ekko-lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bt4.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ url('css-rtl/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/css/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/css/date/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vendors/css/date/persian-datepicker-0.4.5.min.css') }}">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#content',
            plugins: "code emoticons hr image link lists charmap table directionality print preview searchreplace insertdatetime",
            toolbar: "formatgroup paragraphgroup insertgroup ltr rtl undo redo styleselect forecolor bold italic alignleft aligncenter alignright alignjustify outdent indent code lists emoticons hr charmap link image print preview searchreplace visualblocks code  insertdatetime table contextmenu imagetools",
            directionality: "rtl",
            height: 500,
            image_class_list: [
                {title: 'img-responsive', value: 'img-responsive'},
            ],
            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/institude/image_upload',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            },
            menubar: false
        });
    </script>
</head>

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
    }

    input[type=number] {
        -moz-appearance:textfield; /* Firefox */
    }
</style>

<body data-col="2-columns" class="2-columns" style="overflow-x: hidden">
<div class="wrapper tw-bg-gray-100">

    <div data-active-color="white" data-background-color="black"  data-image="{{ asset('img/bg-glass-4.jpg') }}" class="app-sidebar bg-primary">

        <div style="background-image: url('img/bg-dark.jpg');">
            <div class="logo clearfix">
                <a href="" class="logo-text float-left">
                    <div class="logo-img">
                        پنل مدیریت
                    </div>
                    <span class="text align-middle"></span>
                </a>
            </div>
        </div>

        <div class="sidebar-content tw-filter tw-backdrop-blur-2xl" style="background-image: url('img/dark-bg.jpg')">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true"
                    class="navigation navigation-main">
                    <li class="nav-item @if(request()->path() == 'admin') active @endif">
                        <a href="">
                            <i class="ft-home"></i>
                            <span class="menu-title">افزودن مرکز آموزشی</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="ft-log-out"></i>
                            <span class="menu-title">خروج از حساب کاربری</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-background" style="background-color: blue"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar pb-4" >
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <form></form>
            </div>
        </div>
    </nav>

    <div class="main-panel">

        <div class="main-content">
            <div class="content-wrapper">
                {{ $slot }}
            </div>
        </div>

        <footer class="footer footer-static footer-light" >
            <p class="clearfix text-muted text-sm-center px-2">
                <span>
                   طراحی و اجرا توسط
                    <a href="{{ url('http://prodevelopers.me/') }}" id="pixinventLink"
                       target="_blank" class="text-bold-800 primary darken-2">
                        PRO DEVELOPERS TEAM
                    </a>
                </span>
            </p>
        </footer>

    </div>
</div>

<script src="{{ url('vendors/js/core/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/prism.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/screenfull.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/pace/pace.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/switchery.min.js') }}" type="text/javascript"></script>

<script src="{{ url('js/app-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ url('js/notification-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ url('js/customizer.js') }}" type="text/javascript"></script>

<script src="{{ url('vendors/js/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/toastr-setting.js') }}" type="text/javascript"></script>

<script src="{{ url('js/jquery.form.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/persian-number-to-english.js') }}" type="text/javascript"></script>
<script src="{{ url('js/add-separator-to-price.js') }}" type="text/javascript"></script>
<script src="{{ url('js/ajax-constructor.js') }}" type="text/javascript"></script>
<script src="{{ url('js/components-modal.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/tooltip.js') }}" type="text/javascript"></script>
<script src="{{ url('js/ekko-lightbox.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/switch.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/chat.js') }}" type="text/javascript"></script>
<script src="{{ url('js/counters.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/chart.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/select2/select2.full.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/date/persian-date-0.1.8.min.js') }}" type="text/javascript"></script>
<script src="{{ url('vendors/js/date/persian-datepicker-0.4.5.min.js') }}" type="text/javascript"></script>




@if (isset($js))
    {{ $js }}
@endif
</body>
</html>

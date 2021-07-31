<x-admin title="افزودن کاربر">

    @if(session()->has('msg'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session()->get('msg') }}</strong>
        </div>
    @endif

    @if(!$errors->isEmpty())
        <div class="bt5">
            <div style="direction: rtl" class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul style="margin-top: 30px;">
                    @foreach($errors->all() as $error)
                        <li style="list-style-type: square">
                            <strong>
                                {{$error}}
                            </strong>
                        </li>
                    @endforeach
                </ul>
                <button style="margin-top: 10px" type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="float-left">
                        <h4 class="card-title mb-0">افزودن مرکز آموزشی</h4>
                    </span>
                    <span class="float-right mr-1">
                        <div class="text-right">
                            <a href="{{ url()->previous() }}">
                                <button class="btn btn-outline-info">
                                    بازگشت
                                    <i class="ft-chevron-left"></i>
                                </button>
                            </a>
                        </div>
                    </span>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form id="form" method="post"
                              enctype="multipart/form-data" action="{{ url('/institude/store') }}">
                            @csrf

                            <div class="form-group col-md-4 mb-2">
                                <label for="title">نام مرکز آموزشی</label>
                                <div class="position-relative has-icon-left">
                                    <input id="title" name="title" type="text"
                                           class="form-control" value="{{ old('title') }}">
                                    <div class="form-control-position">
                                        <i class="ft-user"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-4 mb-2">
                                <label for="quick_intro">چکیده توضیحات</label>
                                <div class="position-relative has-icon-left">
                                    <textarea id="quick_intro" style="height: 300px" name="quick_intro" type="text" class="form-control" value="{{ old('quick_intro') }}">{{old("quick_intro")}}</textarea>
                                    <div class="form-control-position">
                                        <i class="ft-user"></i>
                                    </div>
                                </div>
                            </div>


                            <div id="profile_image_div" class="form-group col-md-4 mb-2">
                                <label for="profile_image">تصویر آموزشگاه</label>
                                <div class="custom-file">
                                    <input name="image" type="file"
                                           class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="image">
                                        انتخاب فایل تصویر
                                    </label>
                                </div>
                            </div>

                            <div class="form-group col-md-12 mb-2">
                                <label for="content">محتوا</label>
                                <div class="position-relative has-icon-left">
                                    <textarea style="overflow: hidden; z-index: 10;" id="content" name="content" value="{{ old('content') }}">{{ old('content') }}</textarea>
                                    <div class="form-control-position">
                                        <i class="ft-user"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="form-actions">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-success">
                                        افزودن مرکز آموزشی
                                        <i class="ft-check position-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="js">

    </x-slot>
</x-admin>

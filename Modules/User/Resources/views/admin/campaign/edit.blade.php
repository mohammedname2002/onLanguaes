@extends('admin.master')

@section('title','تعديل نظام تربح')

@section('title_page','تعديل نظام تربح')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/admin/libs/tinymce/skins/ui/oxide/skin.min.css') }}">

@endpush
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        @if (session()->has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <i class="mdi mdi-bullseye-arrow me-2"></i>
              {{session()->get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">تعديل نظام تربح</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">الصفحة الرئيسية</a></li>
                            <li class="breadcrumb-item active">تعديل نظام تربح</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">تعديل نظام تربح</h4>

                       <form action="{{route('admin.campaign.update',$campaign->id)}}" method="POST" class="" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb3">
                           <div class="col-lg-6">
                            <label for="example-text-input" class="col-sm-4 col-form-label">عنوان نظام التربح بالعربي</label>
                            <div class="col-sm-10">
                                <input class="form-control {{$errors->has('title_ar')?'is-invalid':''}}" value="{{$campaign->title_ar}}" name="title_ar" type="text" placeholder="عنوان نظام التربح.." id="example-text-input">
                                @if ($errors->has('title_ar'))
                                <div class="invalid-feedback">
                                    {{$errors->first("title_ar")}}
                                  </div>

                                @endif
                            </div>
                           </div>
                           <div class="col-lg-6">
                            <label for="example-text-input" class="col-sm-4 col-form-label">عنوان  نظام التربح بالإنجليزي</label>
                            <div class="col-sm-10">
                                <input class="form-control {{$errors->has('title_en')?'is-invalid':''}}" value="{{$campaign->title_en}}" name="title_en" type="text" placeholder="عنوان نظام التربح.." id="example-text-input">
                                @if ($errors->has('title_en'))
                                <div class="invalid-feedback">
                                    {{$errors->first("title_en")}}
                                  </div>

                                @endif
                            </div>
                           </div>
                        </div>

                        <div class="row mb3">
                            <div class="col-lg-12">
                                <label for="example-text-input" class="col-sm-4 col-form-label">المميزات
                                    بالعربي</label>


                                    <textarea class="elm1 {{ $errors->has('feachers_ar') ? 'is-invalid' : '' }}" name="feachers_ar" class="form-control">{{$campaign->feachers_ar}}</textarea>


                                    @if ($errors->has('feachers_ar'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('feachers_ar') }}
                                        </div>
                                    @endif

                            </div>
                            <div class="col-lg-12 mt-2">
                                <label for="example-text-input" class="col-sm-2 col-form-label">المميزات
                                    بالإنجليزي</label>

                                    <textarea class="elm1 {{ $errors->has('feachers_en') ? 'is-invalid' : '' }}" name="feachers_en"  class="form-control">{{$campaign->feachers_en}}</textarea>
                                    @if ($errors->has('feachers_en'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('feachers_en') }}
                                        </div>
                                    @endif

                            </div>
                        </div>
                        <div class="row mb3">
                            <div class="col-lg-12">
                                <label for="example-text-input" class="col-sm-4 col-form-label">الوصف
                                    بالعربي</label>


                                    <textarea class="elm1 {{ $errors->has('description_ar') ? 'is-invalid' : '' }}" name="description_ar" class="form-control">{{$campaign->description_ar}}</textarea>


                                    @if ($errors->has('description_ar'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('description_ar') }}
                                        </div>
                                    @endif

                            </div>
                            <div class="col-lg-12 mt-2">
                                <label for="example-text-input" class="col-sm-4 col-form-label">الوصف
                                    بالإنجليزي</label>

                                    <textarea class="elm1 {{ $errors->has('description_en') ? 'is-invalid' : '' }}" name="description_en"  class="form-control">{{$campaign->description_en}}</textarea>
                                    @if ($errors->has('description_en'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('description_en') }}
                                        </div>
                                    @endif

                            </div>
                        </div>

                        <div class="row mb3">
                            <div class="col-lg-4">
                                <label for="example-text-input" class="col-sm-4 col-form-label">وقت بداية نظام التربح</label>
                                <input class="form-control {{$errors->has('start_at')?'is-invalid':''}}" value="{{$campaign->start_at}}" name="start_at" type="date" id="example-text-input">
                                @if ($errors->has('start_at'))
                                <div class="invalid-feedback">
                                    {{$errors->first("start_at")}}
                                  </div>

                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="example-text-input" class="col-sm-4 col-form-label">وقت نهاية نظام التربح</label>
                                <input class="form-control {{$errors->has('end_at')?'is-invalid':''}}" value="{{$campaign->end_at}}" name="end_at" type="date" id="example-text-input">
                                @if ($errors->has('end_at'))
                                <div class="invalid-feedback">
                                    {{$errors->first("end_at")}}
                                  </div>

                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="example-text-input" class="col-sm-4 col-form-label">مجوع النقاط</label>
                                <input class="form-control {{$errors->has('total_points')?'is-invalid':''}}" value="{{$campaign->total_points}}" name="total_points" type="text" id="example-text-input">
                                @if ($errors->has('total_points'))
                                <div class="invalid-feedback">
                                    {{$errors->first("total_points")}}
                                  </div>

                                @endif
                            </div>
                        </div>

                        <div class="mt-2">
                            <button class="btn btn-primary" type="submit">حفظ</button>
                        </div>

                       </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end page title -->

    </div> <!-- container-fluid -->
</div>

@endsection

@push('js')
<script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>

<script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>
@endpush

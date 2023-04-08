@extends('admin.layouts.layout-admin')
@section('title')
انشاء منشور جديد
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">إضاقة منشور جديد</h3>
            </div>
            <!--begin::Form-->
            <form action="admin/posts/store" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>العنوان</label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>

                    </div>
                


                    <div class="col-lg-6 mt-5">
                        <label>الوسوم</label>
                        <select name="tags_id" class="form-control selectpicker" data-live-search="true" name="param" multiple="multiple">
                            @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-lg-6 mt-5">
                        <label>صورة المنشور</label>
                        <div class="custom-file">
                            <input name="post_img" type="file" class="custom-file-input" id="customFileLang" lang="ar">
                            <label class="custom-file-label" for="customFileLang">اختر الصورة</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12">
                        <label> التفاصيل</label>
                        <div class="card-body">
                            <textarea name="details" id="kt-ckeditor-1">
                                </textarea>
                        </div>
                    </div>
                </div>
                <div class="separator separator-dashed my-5"></div>
                <div class="col-lg-6 mt-5">
                    <label>الحالة</label>
                    <div class="radio-inline">
                        <label class="radio radio-solid">
                            <input type="radio" name="type" value="2" />
                            <span></span>مسودة</label>
                        <label class="radio radio-solid">
                            <input type="radio" name="type" value="2" />
                            <span></span>منشورة</label>
                    </div>
                </div>
                <div class="col-lg-10 mt-10">
                    <button type="submit" class="btn btn-success mr-2">حفظ</button>
                </div>
        </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->
</div>
</div>

@section('my-scripts')
<script src="{{asset('admin-assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
<script src="{{asset('admin-assets/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script>
<script src="{{asset('admin-assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
@endsection
@endsection
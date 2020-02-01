@extends('dashboard.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card container">
                <div class="card-body col-md-10">
                    <form method="post" action="{{route('generals.update',\App\General::first()->id)}}">
                        @method('PUT')
                        @csrf
                        <div class="row form-group">
                            <label for="">ايميـــل التواصل مع الادارة</label>
                            <input type="text" class="form-control" name="email" value="{{$general->email}}">
                        </div>
                        <div class="row form-group">
                            <label for="">رقــــم الهاتــف</label>
                            <input type="text" class="form-control" name="phone_number" value="{{$general->phone_number}}">
                        </div>
                        <div class="row form-group">
                            <label for="">الحسـاب البنكي الاول</label>
                            <input type="text" class="form-control" name="first_bank" value="{{$general->first_bank}}">
                        </div>
                        <div class="row form-group">
                            <label for="">الحسـاب البنكي الثانـــي</label>
                            <input type="text" class="form-control" name="second_bank" value="{{$general->second_bank}}">
                        </div>
                        <div class="row form-group">
                            <label for="">صفحــــة الفايسبوك</label>
                            <input type="text" class="form-control" name="facebook" value="{{$general->facebook}}">
                        </div>
                        <div class="row form-group">
                            <label for="">صفحــــة الانستغـــرام</label>
                            <input type="text" class="form-control" name="twitter" value="{{$general->twitter}}">
                        </div>
                        <div class="row form-group">
                            <label for="">صفحــــة التويتــــر</label>
                            <input type="text" class="form-control" name="instagram" value="{{$general->instagram}}">
                        </div>
                        <div class="row">
                            <button class="btn btn-outline-dark">تعـديــــــل</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
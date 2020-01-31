@extends('master')
@section('content')
    <div class="site-section bg-light"  style="margin-top: 7%; text-align: right">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">تحديث بيانات جوالك
                    </h2>
                </div>
            </div>
            <div  dir="rtl">
                <form method="post" action="{{route('phone_numbers.store')}}" class="form-group row" >
                    @csrf
                    <div class="form-group col-lg-3" >
                        <label for="">الاســـم الرباعــي</label>
                        <input type="text" class="form-control" name="name" style="border-radius: 0%">
                    </div>
                    <div class="form-group col-lg-3" >
                        <label for="">الاســـم الرباعــي</label>
                        <select name="type" id="" class="form-control">
                            <option value="add">اضــــافة رقـم</option>
                            <option value="update">تغييــــر الرقـم</option>
                        </select>
                        {{--<input type="text" class="form-control" >--}}
                    </div>
                    <div class="form-group col-lg-3" dir="rtl">
                        <label for="">رقـــم الجـــوال </label>
                        <input type="text" class="form-control" name="number" style="border-radius: 0%">
                    </div>
                    <div class="form-group col-lg-2" style="margin-top: 3%" >
                        <button type="submit" class="btn btn-outline-primary" style="border-radius: 0%">ارســــــــــــــــــــال</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
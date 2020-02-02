@extends('master')
@section('content')
    <div class="site-section bg-light"  style="margin-top: 7%; text-align: right">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">طلب إعانـــة زواج
                    </h2>
                    <span style="color: red">(بسرية تامة)</span>
                </div>
            </div>
            <div class="container">
                @if($errors->any())

                        <ul class="alert-danger alert" dir="rtl">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                @endif
            </div>
            <div  dir="rtl">
                <form method="post" action="{{route('weddings.store')}}" class="form-group" >
                    @csrf

                    <div class="row">
                        <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                        <div class="form-group col-lg-4" dir="rtl">
                            <label for="">تاريخ الزواج</label><span style="color: red"> *</span>
                            <input type="date" class="form-control" style="border-radius: 0%"  name="wedding_date" >
                        </div>
                        <div class="form-group col-lg-4" dir="rtl">
                            <label for="">رقم الحساب البنكي - آي بان</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" style="border-radius: 0%"  name="iban" >
                        </div>
                        <div class="form-group col-lg-4" >
                            <label for="">اسم البنك</label><span style="color: red"> *</span>
                            <select name="bank_name" id="" class="form-control" style="border-radius: 0%" >
                                <option value="البنك الاهـلي التجـاري السعـودي">البنك الاهـلي التجـاري السعـودي</option>
                                <option value="البنك السعـودي البريطاني">البنك السعـودي البريطاني</option>
                                <option value="البنك السعـودي الفرنسي">البنك السعـودي الفرنسي</option>
                                <option value="البنك السعـودي الهـولندي">البنك السعـودي الهـولندي</option>
                                <option value="البنك السعـودي للاستثمار">البنك السعـودي للاستثمار</option>
                                <option value="البنك العربي الوطني">البنك العربي الوطني</option>
                                <option value="بنك البلـد">بنك البلـد</option>
                                <option value="بنك الجزيـرة">بنك الجزيـرة</option>
                                <option value="بنك الريـاض">بنك الريـاض</option>
                                <option value="مجمـوعة سامبـا المالية (سامبـا)">مجمـوعة سامبـا المالية (سامبـا)</option>
                                <option value="مصرف الراجحـي">مصرف الراجحـي</option>
                                <option value="مصرف الانمـــاء">مصرف الانمـــاء</option>
                            </select>
                            {{--<input type="text" class="form-control" >--}}
                        </div>
                    </div>
                    <div class="form-group align-content-center col-lg-2" style="margin-top: 3%" >
                        <button type="submit" class="btn btn-outline-primary" style="border-radius: 0%">ارســــــــــــــــــــال</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
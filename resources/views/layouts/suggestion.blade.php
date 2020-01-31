@extends('master')
@section('content')
    <div class="site-section bg-light"  style="margin-top: 7%; text-align: right">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">الاقتراحات
                    </h2>
                    <span style="color: red">(بسرية تامة)</span>
                </div>
            </div>
            <p class="mb-3">
                من خلال هذه الصفحة نفتح قلوبنا وأبصارنا وآذاننا لكل اقتراح صغيرا كان أو كبيرا من شأنه رفع كفاءة صندوق الأسرة أو رفعت العائلة ككل فإننا نشد على يديك ونقول لا تتردد واكتب ونعدك بإذن الله أن تصل إلى المسؤول عن تنفيذها أو حلها.
            </p>
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
                <form method="post" action="{{route('suggestions.store')}}" class="form-group" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6" >
                            <label for="">اسمــــك</label>
                            <input type="text" class="form-control" style="border-radius: 0%"  name="name">
                        </div>
                        <div class="form-group col-lg-6" >
                            <label for="">لمن يوجه هذا الاقتراح؟</label><span style="color: red"> *</span>
                            <select name="destination" id="" class="form-control" style="border-radius: 0%" >
                                <option value="tresor">لصندوق الاســـرة</option>
                                <option value="family">لكبــار الاسـرة</option>
                            </select>
                            {{--<input type="text" class="form-control" >--}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12" dir="rtl">
                            <label for="">إشرح بالتفصيل ماهو اقتراحك </label><span style="color: red"> *</span>
                            <textarea  class="form-control" style="border-radius: 0%" name="details" ></textarea>
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
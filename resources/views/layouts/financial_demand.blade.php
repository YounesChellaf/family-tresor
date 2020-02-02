@extends('master')
@section('content')
    <div class="site-section bg-light"  style="margin-top: 7%; text-align: right">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">طلب معونة مالية
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
                <form method="post" action="{{route('financials.store')}}" class="form-group" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6" >
                            <label for="">صفتـــك</label><span style="color: red"> *</span>
                            <input type="text" class="form-control" style="border-radius: 0%"  name="position">
                        </div>
                        <div class="form-group col-lg-6" >
                            <label for="">نوع الكربــــة</label><span style="color: red"> *</span>
                            <select name="type" id="" class="form-control" style="border-radius: 0%" >
                                <option value="اجــــار منزل">اجــــار منزل</option>
                                <option value="ديــــــن">ديــــــن</option>
                                <option value="تعثـــر سداد قـرض">تعثـــر سداد قـرض</option>
                                <option value="نفقـــة">نفقـــة</option>
                                <option value="كارثـة طبيعيــة">كارثـة طبيعيــة</option>
                                <option value="اخـــرى">اخـــرى</option>
                            </select>
                            {{--<input type="text" class="form-control" >--}}
                        </div>
                    </div>
                    <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                    <div class="row">
                        <div class="form-group col-lg-12" dir="rtl">
                            <label for="">إشرح كربتك بالتفصيل</label><span style="color: red"> *</span>
                            <textarea  class="form-control" style="border-radius: 0%" name="details" ></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12" >
                            <input type="checkbox" class="form-control">
                            <label for="">
                                أقر بأن جميع البيانات التي أدخلتها صحيحة، وإنني ألتزم بشروط الإعانة التي تقدم من صندوق أسرة السلمان التعاوني
                            </label><span style="color: red"> *</span>
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
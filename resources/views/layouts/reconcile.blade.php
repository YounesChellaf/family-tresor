@extends('master')
@section('content')
    <div class="site-section bg-light"  style="margin-top: 7%; text-align: right">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">إصلاح ذات البيــن
                    </h2>
                    <span style="color: red">(بسرية تامة)</span>
                </div>
            </div>
            <p class="mb-3">لا ريب أن الشقاق والخلاف من أخطر أسلحة الشيطان الفتاكة الَّتي يوغر بها صدور الخلق ، لينفصلوا بعد اتحاد ، ويتنافروا بعد اتفاق ، ويتعادوا بعد أُخوَّة ، وقد اهتمَّ الإسلام بمسألة احتمال وقوع الخلاف بين المؤمنين وأخذها بعين الاعتبار ؛ وذلك لأن المؤمنين بَشَر يخطئون ويصيبون ، ويعسر أن تتَّفق آراؤهم أو تتوحَّد اتجاهاتهم دائماً ، ولهذا عالج الإسلام مسألة الخلاف على اختلاف مستوياتها بدءاً من مرحلة المشاحنة والمجادلة ، ومروراً بالهجر والتباعد ، وانتهاءً بمرحلة الاعتداء والقتال ، والإسلام دين يتشوّف إلى الصلح ويسعى له وينادي إليه ، وليس ثمة خطوة أحب إلى الله عز وجل من خطوة يصلح فيها العبد بين اثنين ويقرب فيها بين قلبين ، فبالإصلاح تكون الطمأنينة والهدوء والاستقرار والأمن وتتفجر ينابيع الألفة والمحبة .
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
                <form method="post" action="{{route('reconciles.store')}}" class="form-group" >
                    @csrf
                    <div class="row">


                            <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">

                        <div class="form-group col-lg-6" >
                            <label for="">أطراف الخلاف</label><span style="color: red"> *</span>
                            <select name="parties" id="" class="form-control" style="border-radius: 0%" >
                                <option value="اخـــــوة">اخـــــوة</option>
                                <option value="ابنـاء عمومـــة">ابنـاء عمومـــة</option>
                                <option value="اب و ابنــه">اب و ابنــه</option>
                                <option value="ام و ابنتهـا">ام و ابنتهـا</option>
                                <option value="اب و ابنتــه">اب و ابنتــه</option>
                                <option value="اخـــرى">اخـــرى</option>
                            </select>
                            {{--<input type="text" class="form-control" >--}}
                        </div>
                        <div class="form-group col-lg-6" dir="rtl">
                            <label for="">اخـــــرى</label>
                            <input type="text" class="form-control" style="border-radius: 0%"  name="other" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-12" dir="rtl">
                            <label for="">إشرح بالتفصيل ماهو الخلاف </label><span style="color: red"> *</span>
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
@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 10%;text-align: right" dir="rtl">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">طلــــــب عضـــوية</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">الاســــم الرباعــــي</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">الهاتف النقـــــال</label>
                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control @error('name') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required  autofocus>

                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label class="col-md-4 col-form-label text-md-right">الجنـــس </label>
                            <div class="col-md-6">
                            <select name="sexe" id="sexe" class="form-control" >
                                <option value=""></option>
                                <option value="ذكـــر">ذكـــر</option>
                                <option value="انثــى">انثـــى</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label class="col-md-4 col-form-label text-md-right">الحالة الاجتماعية </label>
                            <div class="col-md-6">
                                <select name="civil_state" id="civil_state" class="form-control" >
                                        <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">مكـــان الاقامـة</label>
                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control " name="location" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">السجـــل المدني</label>
                            <div class="col-md-6">
                                <input id="card_number" type="text" class="form-control @error('name') is-invalid @enderror" name="card_number" value="{{ old('card_number') }}" required  autofocus>
                                @error('card_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label class="col-md-4 col-form-label text-md-right">المهنـــــة</label>
                            <div class="col-md-6">
                                <select name="job" id="job" class="form-control" >
                                    <option value="male"></option>
                                </select>
                            </div>
                        </div>
                        {{--<div class="form-group row" id="document">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">وثيــقة اثبــــات</label>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<input type="file" class="form-control" name="document" required  autofocus>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">البريــد الالكترونـــي</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">كلمــــة المرور</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تأكيــد كلمــــة المرور</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="container row">
                            <div class="col-md-4">
                                <span></span>
                            </div>
                            <div class="col-md-7" id="commitment-div">
                                <p class="alert-danger alert" dir="rtl" id="commitment">
                                </p>
                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    تسجيــــــــل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#commitment-div').hide();
            $('#document').hide();
            $('#sexe').change(function () {
                var  sexe = $('#sexe').val();
                if ( sexe =='ذكـــر'){
                    $('#civil_state').html('<option value=""></option>\n' +
                        '                                        <option value="اعزب">اعزب</option>\n' +
                        '                                        <option value="متزوج">متزوج</option>\n' +
                        '                                        <option value="مطلق">مطلق</option>\n' +
                        '                                        <option value="ارمل">ارمل</option>')
                    $('#job').html('<option value="male"></option>\n' +
                        '                                    <option value="employee">مــــوظف</option>\n' +
                        '                                    <option value="student">طالــب</option>\n' +
                        '                                    <option value="freelance">عمل حر</option>\n' +
                        '                                    <option value="no_job">لا أعمل</option>\n' +
                        '                                    <option value="cnas">مستفيــد من الضمان</option>\n' +
                        '                                    <option value="unemployee">متقاعد</option>')
                }
                else if (sexe =='انثــى') {
                    $('#civil_state').html('' +
                        '<option value=""></option>\n' +
                        '                                        <option value="عزباء">عزباء</option>\n' +
                        '                                        <option value="متزوجة">متزوجة</option>\n' +
                        '                                        <option value="مطلقة">مطلقة</option>\n' +
                        '                                        <option value="ارملة">ارملة</option>')
                    $('#job').html('<option value="male"></option>\n' +
                        '                                    <option value="employee">مــــوظفة</option>\n' +
                        '                                    <option value="student">طالــبة</option>\n' +
                        '                                    <option value="freelance">عمل حر</option>\n' +
                        '                                    <option value="no_job">لا أعمل</option>\n' +
                        '                                    <option value="cnas">مستفيــدة من الضمان</option>\n' +
                        '                                    <option value="unemployee">متقاعدة</option>')
                }
            });

            $('#job').change(function () {
                $('#commitment-div').show();
                var job = $('#job').val();
                switch (job){
                    case 'employee' :
                        $('#commitment').text('انا اتعهـــد بدفـع 360 ريال سنوياً كمستحقات العضويـة');
                        break;
                    case 'freelance' :
                        $('#commitment').text('انا اتعهـــد بدفـع 360 ريال سنوياً كمستحقات العضويـة');
                        break;
                    case 'student':
                        $('#commitment').text('انا اتعهـــد بدفـع 50 ريال سنوياً كمستحقات العضويـة');
                        break;
                    case 'unemployee':
                        $('#commitment').text('انا اتعهـــد بدفـع 360 ريال سنوياً كمستحقات العضويـة');
                        break;
                    case 'dead_partner':
                        $('#commitment').text('لا يتوجب دفــع المستحقات ');
                        break;
                    case 'cnas':
                        $('#commitment').text('لا يتوجب دفــع المستحقات ');
                        break;
                    case 'no_job':
                        $('#commitment').text('لا يتوجب دفــع المستحقات ');
                        break;

                    default:
                        break;
                }
            })

        })
    </script>
@endsection

@extends('dashboard.master')
@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">طلبات الاعانــــة الماليــــة</h5>
                    <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                        <div id="sparklinedash"></div>
                        <div class="ml-auto">
                            <h2 class="text-success"><i class="ti-arrow-up"></i> <span class="counter">{{\App\FinancialHelp::all()->count()}}</span></h2>
                        </div>
                    </div>
                </div>
                <div id="sparkline8" class="sparkchart"></div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">طلبات اعانــــة زواج</h5>
                    <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                        <div id="sparklinedash2"></div>
                        <div class="ml-auto">
                            <h2 class="text-purple"><i class="ti-arrow-up"></i> <span class="counter">{{\App\WeddingHelp::all()->count()}}</span></h2>
                        </div>
                    </div>
                </div>
                <div id="sparkline8" class="sparkchart"></div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">طلبات اصلاح ذات البيــن</h5>
                    <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                        <div id="sparklinedash3"></div>
                        <div class="ml-auto">
                            <h2 class="text-info"><i class="ti-arrow-up"></i> <span class="counter">{{\App\Reconcile::all()->count()}}</span></h2>
                        </div>
                    </div>
                </div>
                <div id="sparkline8" class="sparkchart"></div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">الاقتراحات</h5>
                    <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                        <div id="sparklinedash4"></div>
                        <div class="ml-auto">
                            <h2 class="text-danger"><i class="ti-arrow-up"></i> <span class="counter">{{\App\Suggestion::all()->count()}}</span></h2>
                        </div>
                    </div>
                </div>
                <div id="sparkline8" class="sparkchart"></div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">ارقــــام هواتف افــــراد العائلـة</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>الاسم الربــاعي</th>
                            <th>رقـــم الهاتف</th>
                            <th>نـــوع العضــو</th>
                            <th>الرقــم</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\User::all() as $user)
                        <tr style="text-align: right" dir="rtl">
                            <td><a href="javascript:void(0)" class="link">{{$user->name}}</a></td>
                            <td><span class="text-muted"><i class="fa fa-clock-o"></i>{{$user->phone_number}}</span></td>
                            <td>{{$user->role}}</td>
                            <td class="text-center">
                                {{$user->status()}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@endsection
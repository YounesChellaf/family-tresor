@extends('dashboard.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>الإسم الرباعي</th>
                                <th>الصـــفة</th>
                                <th>رقم الجوال</th>
                                <th>نوع الكربـة </th>
                                <th>التفاصـيل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\FinancialHelp::all() as $financial)
                                <tr>
                                    <td>{{$financial->name}}</td>
                                    <td>{{$financial->position}}</td>
                                    <td>{{$financial->phone_number}}</td>
                                    <td>{{$financial->type}}</td>
                                    <td>{{$financial->details}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
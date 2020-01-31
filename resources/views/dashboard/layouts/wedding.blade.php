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
                                <th>رقم الجوال</th>
                                <th>تاريخ الزواج</th>
                                <th>رقم الحساب البنكي - آي بان</th>
                                <th>اسم البنك </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\WeddingHelp::all() as $wedding)
                            <tr>
                                <td>{{$wedding->name}}</td>
                                <td>{{$wedding->phone_number}}</td>
                                <td>{{$wedding->wedding_date}}</td>
                                <td>{{$wedding->iban}}</td>
                                <td>{{$wedding->bank_name}}</td>
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
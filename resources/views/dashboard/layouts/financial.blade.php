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
                                    <td><button class="btn btn-rounded btn-outline-success" data-toggle="modal" data-target="#modal-details-{{$financial->id}}">تفاصيـــل</button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach(\App\FinancialHelp::all() as $financial)
        <div class="col-md-4">
            <div id="modal-details-{{$financial->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">تفاصيــــل حول الكربـــة</h4>
                        </div>
                        <div class="modal-body">
                            <p class="mt-4">
                                {{$financial->details}}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
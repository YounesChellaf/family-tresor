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
                                <th>الاطــــراف</th>
                                <th>آخـــرون</th>
                                <th>التفاصيـل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Reconcile::all() as $reconcile)
                                <tr>
                                    <td>{{$reconcile->user->name}}</td>
                                    <td>{{$reconcile->parties}}</td>
                                    <td>{{$reconcile->other}}</td>
                                    <td><button class="btn btn-rounded btn-outline-success" data-toggle="modal" data-target="#modal-details-{{$reconcile->id}}">تفاصيـــل</button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach(\App\Reconcile::all() as $reconcile)
        <div class="col-md-4" style="text-align: right" dir="rtl">
            <div id="modal-details-{{$reconcile->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">تفاصيــــل حول المشكلــــة</h4>
                        </div>
                        <div class="modal-body">
                            <p class="mt-4">
                                {{$reconcile->details}}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
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
                                    <td>{{$reconcile->name}}</td>
                                    <td>{{$reconcile->parties}}</td>
                                    <td>{{$reconcile->other}}</td>
                                    <td>{{$reconcile->details}}</td>
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
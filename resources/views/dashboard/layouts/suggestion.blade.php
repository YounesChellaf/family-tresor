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
                                <th>لمن الاقتراح موجــــه</th>
                                <th>التفاصـيل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Suggestion::all() as $suggestion)
                                <tr>
                                    <td>{{$suggestion->name}}</td>
                                     <td>{{$suggestion->destination}}</td>
                                    <td>{{$suggestion->details}}</td>
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
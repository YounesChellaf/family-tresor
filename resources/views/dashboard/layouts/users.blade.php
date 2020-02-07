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
                                <th>الجنـس</th>
                                <th>الحالة</th>
                                <th>رقـم الهاتف</th>
                                <th>السجل المدني</th>
                                <th>مكان الاقامة</th>
                                <th>الوظيفة</th>
                                {{--<th>الايميـــل</th>--}}
                                <th>الحــالة</th>
                                <th colspan="2">الاجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\User::all() as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->sexe}}</td>
                                    <td>{{$user->civil_state}}</td>
                                    <td>{{$user->phone_number}}</td>
                                    <td>{{$user->card_number}}</td>
                                    <td>{{$user->location}}</td>
                                    <td>{{$user->job}}</td>
                                    {{--<td>{{$user->email}}</td>--}}
                                    <td>{{$user->status()}}</td>
                                    @if( ! $user->confirmed)
                                        <td><button class="btn btn-rounded btn-outline-success" data-toggle="modal" data-target="#modal-confirm-{{$user->id}}">تأكيد المستخدم</button></td>
                                     @else
                                        <td><button class="btn btn-rounded btn-outline-danger" data-toggle="modal" data-target="#modal-bann-{{$user->id}}">حظــر المستخدم</button></td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach(\App\User::all() as $user)
        <div class="col-md-4" style="text-align: right" dir="rtl">
            <div id="modal-confirm-{{$user->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">تأكيد المستخدم</h4>
                        </div>
                        <div class="modal-body">
                            <p class="mt-4">
                                هـل تريـد حقا تأكيـد المستخـدم : {{$user->name}}
                            </p>
                            <form method="post" action="{{route('userConfirm',$user->id)}}">
                                {{--@method('PUT')--}}
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <button class="btn btn-outline-success" type="submit">تأكيـد</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="text-align: right" dir="rtl">
            <div id="modal-bann-{{$user->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">حـــظر المستخدم</h4>
                        </div>
                        <div class="modal-body">
                            <p class="mt-4">
                                هـل تريـد حقا حـــظر المستخـدم : {{$user->name}}
                            </p>
                            <form method="post" action="{{route('userBann',$user->id)}}">
                                {{--@method('PUT')--}}
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <button class="btn btn-outline-danger" type="submit">حـــظر</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
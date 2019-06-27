@extends('layouts.app')

@section('title', $user->name. '的个人中心')

@section('content')

    <div class="row">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img src="{{ $user->avatar }}"
                                 alt="" class="thumbnail img-responsive" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h4><strong>个人简介</strong></h4>
                            <p>{{ $user->introduction }}</p>
                            <hr>
                            <h4><strong>注册于</strong></h4>
                            <p>{{ $user->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span>
                        <p class="panel-title pull-left" style="font-size: 30px;">
                            {{ $user->name }} <small>{{$user->email}}</small>
                        </p>
                    </span>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    nothing!
                </div>
            </div>
        </div>
    </div>

@endsection
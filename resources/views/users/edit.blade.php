@extends('layouts.app')

@section('title', '个人资料修改')

@section('content')
    <div class="container">
        <div class="panel panel-default col-md-10 col-md-offset-1">
            <div class="panel-heading">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i>编辑个人资料
                </h4>
            </div>
            @include('common.error')
            <div class="panel-body">
                <form action="{{ route('users.update', $user->id) }}" method="post" accept-charset="UTF-8"
                      enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="name-filed">用户名</label>
                        <input type="text" name="name" class="form-control" id="name-filed"
                               value="{{ old('name', $user->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="email-filed">email</label>
                        <input type="text" name="email" id="email-filed" value="{{ old('email', $user->email) }}"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="introduction-field">介绍</label>
                        <textarea name="introduction" id="introduction-field" rows="5" class="form-control">
                            {{ old('introduction', $user->introduction) }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="avatar-field" class="avatar-label">用户头像</label>
                        <input type="file" name="avatar" id="avatar-field">
                        @if($user->avatar)
                            <br>
                            <img src="{{ $user->avatar }}" class="thumbnail img-responsive" alt="">
                        @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
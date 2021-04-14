
@extends('adminlte::page')

@section('title', '會員專區')

@section('content_header')

@stop

@section('content')

    <div class="container">
        @foreach ($members as $member)
        <form  action="{{url('car/member/updata')}}" method="post" style="width: 60%; margin: 0 auto" >
        {{ csrf_field()}}
        {{ method_field('PATCH') }}
        <label for="uname" class="pt-2"><b>會員帳號</b></label>
        <input type="text" placeholder="請輸入帳號" name="name" required class="form-control bg-transparent" value="{{$member->name}}" />
        <label for="psw" class="pt-2"><b>會員密碼</b></label>
        <input type="password" placeholder="請輸入密碼" name="password" required class="form-control bg-transparent"  value="{{$member->password}}"/>
        <label for="email" class="pt-2"><b>電子郵件</b></label>
        <input type="email" placeholder="請輸入電子郵件" name="email" required class="form-control bg-transparent"  value="{{$member->email}}"/>
        <label for="phone" class="pt-2"><b>電話</b></label>
        <input type="text" placeholder="請輸入電話" name="phone" required class="form-control bg-transparent"  value="{{$member->phone}}"/>
        <div class="text-center pt-4"><button type="submit" class="btn btn-secondary form-control">修改</button></div>
        </form>
        @endforeach
    </div>
@stop

@section('css')
@stop
@section('js')
@stop

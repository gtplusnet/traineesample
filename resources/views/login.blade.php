@extends('layout')

@section('content')
<h3>LOGIN</h3>
<div>
    <form method="post">
        {{ csrf_field()  }}
        @if(session('message'))
            <div style="color: red;">{{ session('message') }}</div>
        @endif
        <label>USERNAME</label>
        <div><input type="text" name="un"></div>
        <label>PASSWORD</label>
        <div><input type="password" name="pw"></div>
        <input type="submit" name="">
    </form>
</div>
@endsection
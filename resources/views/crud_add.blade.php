@extends('layout')

@section('content')

<form method="post">
    {{ csrf_field() }}
    <input type="" placeholder="student name" name="student_name">
    <input type="" placeholder="student grade" name="student_grade">
    <button type="submit">ADD SUBMIT</button>
</form>
@endsection
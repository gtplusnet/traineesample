@extends('layout')

@section('content')

<form method="post">
    {{ csrf_field() }}
    <input type="" placeholder="student name" name="student_name" value="{{ $student->student_name }}">
    <input type="" placeholder="student grade" name="student_grade" value="{{ $student->grade }}">
    <button type="submit">EDIT SUBMIT</button>
</form>
@endsection
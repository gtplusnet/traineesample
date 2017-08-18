@extends('layout')

@section('content')
<h3>CRUD PAGE SAMPLE</h3>
<div style="text-align: right"> <a href="/student/add">ADD</a></div>
<table style="width: 100%"; cellspacing="0" cellpadding="0" border="1">
    <thead>
        <tr>
            <th>STUDENT NAME</th>
            <th>GRADE</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach($_student as $student)
        <tr>
            <td>{{ $student->student_name }}</td>
            <td>{{ $student->grade }}</td>
            <td>
                <a href="/student/edit/{{ $student->student_id }}">EDIT</a>
                <a href="/student/delete/{{ $student->student_id }}">DELETE</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>





















<style type="text/css">
    td
    {
        padding: 10px;
        text-align: center;
    }
</style>
@endsection
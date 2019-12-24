@extends('layout')

@section('content')
<link href="/css/test.css" rel="stylesheet" type="text/css">
<div class="container mt-4">

    <body>
        <table class="box17" width="100">
            <tr>
                <label>
                    <label>
                        <th>Employee ID</th>
                    </label>
                </label>
                <th>
                    Employee Number</th>
                <th>Full name</th>
                <th>Department</th>
                <th>Gender</th>
                <th>Each detail</th>
            </tr>
            <tr>
                @foreach ($employees as $employee)
                <td>{!! nl2br(e($employee->id)) !!}</td>
                <td>{!! nl2br(e($employee->e_number)) !!}</td>
                <td>{!! nl2br(e($employee->name)) !!}</td>
                <td>@if ($employee->department_id == 1)
                    <div>CEO's Office</div>
                    @elseif ($employee->department_id == 2)
                    <div>Technology Headquarters</div>
                    @elseif ($employee->department_id == 3)
                    <div>Bunker Support</div>
                    @elseif ($employee->department_id == 4)
                    <div>Administrative headquarters</div>
                    @elseif ($employee->department_id == 5)
                    <div>Media section</div>
                    @endif</td>
                <td>
                    @if ($employee->gender == 0)
                    Woman
                    @else
                    Man
                    @endif
                </td>
                <td><a href="{{ route('post.show', ['employee' => $employee]) }}" 　class="btn-text-3d">
                        Details</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</div>
</div>
@endsection

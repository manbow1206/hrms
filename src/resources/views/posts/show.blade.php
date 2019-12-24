@extends('layout')

@section('content')
<div class="container mt-4">
  <div class="card mb-4">
    <div class="card-header">
      <label>EmployeeID </label>
      <div class="center">{{ $employees->id }}</div>
    </div>
    <div class="card-body">
      <div class="border p-4">

        <p class="card-text">
          <label>employee number&nbsp;&nbsp;</label>
          <div class="center">{!! nl2br(e($employees->e_number)) !!}</div>
        </p>

        <p class="card-text">
          <label>Full name&nbsp;&nbsp;</label>
          <div class="center">{!! nl2br(e($employees->name)) !!}</div>
        </p>

        <p class="card-text">
          <label>Gender&nbsp;&nbsp;</label>
          <div class="center">
            @if ($employees->gender == 0)
            <div>Woman</div>
            @else
            <div>Man</div>
            @endif
          </div>
        </p>

        <p class="card-text">
          <label>Department name&nbsp;&nbsp;</label>
          <div class="center">
            @if ($employees->department_id == 1)
            <div>CEO's Office</div>
            @elseif ($employees->department_id == 2)
            <div>Technology Headquarters</div>
            @elseif ($employees->department_id == 3)
            <div>Bunker Support</div>
            @elseif ($employees->department_id == 4)
            <div>Administrative headquarters</div>
            @elseif ($employees->department_id == 5)
            <div>Media section</div>
            @endif
          </div>
        </p>
      </div>
    </div>
    <div class="card-footer">
      <ul>
        <li>
          <div class="mb-4 text-right">
            <a class="btn btn-primary" href="{{ route('post.edit', ['employees' => $employees]) }}">
              To edit
            </a>
          </div>
        </li>
        <li>
          <div>
            <form method="POST" action="{{ route('post.destroy', ['employees' => $employees]) }}">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">delete</button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection

@extends('layout')

@section('content')
<div class="container mt-4">
  <div class="border p-4">
    <h1 class="h5 mb-4">
      <label>Update employee information</label>
    </h1>

    <form method="POST" action="{{ route('post.update', ['employees' => $employees]) }}">
      @csrf
      @method('PUT')
      <fieldset class="mb-4">

        <div class="form-group">
          <label for="name">Employee number</label>
          <input id="name" name="e_number" value="{{ old('employees') ?: $employees->e_number }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text">
          @if ($errors->has('name'))
          <div class="invalid-feedback">
            {{ $errors->first('name') }}
          </div>
          @endif
        </div>

        <div class="form-group">
          <label for="name">Full name</label>
          <input id="name" name="name" value="{{ old('employees') ?: $employees->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" type="text">
          @if ($errors->has('name'))
          <div class="invalid-feedback">
            {{ $errors->first('name') }}
          </div>
          @endif
        </div>

        <div class="form-group">
          <label for="name">Department name</label>
          <div class="cp_ipselect cp_sl01">
            <select required name="department" value="{{ old('employees') ?: $employees->department_id }}">
              <option value="" hidden>Choose</option>
              <option value="1">CEO's Office</option>
              <option value="2">CTechnology Headquarters</option>
              <option value="3">Bunker Support</option>
              <option value="4">Administrative headquarters</option>
              <option value="5">Media section</option>
            </select>
          </div>
          @if ($errors->has('name'))
          <div class="invalid-feedback">
            {{ $errors->first('name') }}
          </div>
          @endif
        </div>

        <div class="form-group">
          <label for="name">Gender</label><br>
          <label><input type="radio" name="gender" name="man" value="1">Man</label>
          <label><input type="radio" name="gender" name="female" value="0">Woman</label>
        </div>
        <div class="mt-5">
          <a class="btn btn-secondary" href="{{ route('post.show', ['employees' => $employees]) }}">
            Cabcel
          </a>

          <button type="submit" class="btn btn-primary">
            Done
          </button>
        </div>
      </fieldset>
    </form>
  </div>
</div>
@endsection

@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <h1 class="h5 mb-4">
            <label>Employee registration page</label>
        </h1>
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <fieldset class="mb-4">
                <div class="form-group">
                    <label for="name">
                        employee number</label>
                    <input id="name" name="e_number" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text">
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="name">Full name</label>
                    <input id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" type="text">
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="name">Department name</label>
                    <div class="cp_ipselect cp_sl01">
                        <select required name="department">
                            <option value="" hidden>Choose</option>
                            <option value="1">Technology Headquarters</option>
                            <option value="2">CEO Office</option>
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
                    <label for="name">Gender</label>
                    <div class="container">
                        <label><input type="radio" name="gender" name="man" value="1">Man</label>
                        <label><input type="radio" name="gender" name="female" value="0">Woman</label>
                    </div>
                </div>

                <!-- <div class="alert">
                            <ul>
                                <li>
                                    <input type="radio" id="f-option" name="gender">
                                    <label for="f-option">男性</label>
                                    <div class="check"></div>
                                </li>
                                <li>
                                    <input type="radio" id="s-option" name="gender">
                                    <label for="s-option">女性</label>
                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </li>
                            </ul>
                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                                @endif
                        </div> -->


                <div class="mt-5">
                    <a class="btn btn-secondary" href="{{ route('top') }}">
                        Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        Done!
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection

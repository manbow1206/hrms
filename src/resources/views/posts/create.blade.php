@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <h1 class="h5 mb-4">
            社員登録ページ
        </h1>
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <fieldset class="mb-4">
                <div class="form-group">
                    <label for="title">社員番号</label>
                    <input id="title" name="e_number" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text">
                    <!-- @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif -->
                </div>

                <div class="form-group">
                    <label for="title">氏名</label>
                    <input id="title" name="name" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" type="text">
                    <!-- @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif -->
                </div>

                <div class="form-group">
                    <label for="title">部署名</label>
                    <div class="cp_ipselect cp_sl01">
                        <select required name="department">
                            <option value="" hidden>Choose</option>
                            <option value="1">テクノロジー本部</option>
                            <option value="2">CEO Office</option>
                            <option value="3">バンカーサポート</option>
                            <option value="4"></option>
                        </select>
                    </div>
                    <!-- @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif -->
                </div>

                <div class="form-group">
                    <label for="title">性別</label>
                    <div class="container">
                        <input type="radio" name="gender" name="man" value="1">男性
                        <input type="radio" name="gender" name="female" value="0">女性

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
                    </div>
                </div>

                <div class="mt-5">
                    <a class="btn btn-secondary" href="{{ route('top') }}">キャンセル</a>
                    <button type="submit" class="btn btn-primary">
                        社員情報を登録する
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection

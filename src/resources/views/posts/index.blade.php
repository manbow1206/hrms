@extends('layout')

@section('content')
    <div class="container mt-4">
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    <label>社員ID : </label>{{ $post->id }}
                    </div>
                    <div class="card-body">
                    <p class="card-text">
                        <label>社員番号 : </label>{!! nl2br(e($post->e_number)) !!}
                    </p>
                    <p class="card-text">
                        <label>氏名 : </label>{!! nl2br(e($post->name)) !!}
                    </p>
                    <!-- 小テーブルから持ってくる -->
                    <p class="card-text">
                        <label>部署名 : </label>{!! nl2br(e($post->department_id)) !!}
                    </p>
                    <!-- if文で1か0のバイナリを、男か女に変換 -->
                    <p class="card-text">
                        <label>性別 : </label>{!! nl2br(e($post->gender)) !!}
                    </p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
        @endforeach
    </div>
@endsection

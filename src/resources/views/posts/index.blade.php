@extends('layout')

@section('content')
    <div class="container mt-4">
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    <label >社員ID  </label><div class="center">{{ $post->id }}</div>
                    </div>
                    <div class="card-body">
                        <pclass="card-text">
                        <label>社員番号&nbsp;&nbsp;</label><div class="center">{!! nl2br(e($post->e_number)) !!}</div>
                    </pclass="card-text">
                    <p class="card-text">
                        <label>氏名&nbsp;&nbsp;</label><div class="center">{!! nl2br(e($post->name)) !!}</div>
                    </p>
                    <!-- 小テーブルから持ってくる -->
                    <p class="card-text">
                        <label>部署名&nbsp;&nbsp;</label><div class="center">{!! nl2br(e($post->department_id)) !!}</div>
                    </p>
                    <!-- if文で1か0のバイナリを、男か女に変換 -->
                    <p class="card-text">
                        <label>性別&nbsp;&nbsp;</label><div class="center">{!! nl2br(e($post->gender)) !!}</div>
                    </p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
        @endforeach
    </div>
@endsection

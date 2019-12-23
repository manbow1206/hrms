@extends('layout')

@section('content')
<div class="container mt-4">
  <div class="card mb-4">
    <div class="card-header">
      <label>社員ID </label>
      <div class="center">{{ $employees->id }}</div>
    </div>
    <div class="card-body">
      <div class="border p-4">

        <p class="card-text">
          <label>社員番号&nbsp;&nbsp;</label>
          <div class="center">{!! nl2br(e($employees->e_number)) !!}</div>
        </p>

        <p class="card-text">
          <label>氏名&nbsp;&nbsp;</label>
          <div class="center">{!! nl2br(e($employees->name)) !!}</div>
        </p>

        <p class="card-text">
          <label>性別&nbsp;&nbsp;</label>
          <div class="center">
            @if ($employees->gender == 0)
            <div>女性</div>
            @else
            <div>男性</div>
            @endif
          </div>
        </p>

        <p class="card-text">
          <label>所属部署&nbsp;&nbsp;</label>
          <div class="center">
            @if ($employees->department_id == 1)
            <div>CEO's Office</div>
            @elseif ($employees->department_id == 2)
            <div>テクノロジー本部</div>
            @elseif ($employees->department_id == 3)
            <div>バンカーサポート部</div>
            @elseif ($employees->department_id == 4)
            <div>管理本部</div>
            @elseif ($employees->department_id == 5)
            <div>メディア部</div>
            @endif
          </div>
        </p>
      </div>
    </div>
    <div class="mb-4 text-right">
      <a class="btn btn-primary" href="{{ route('post.edit', ['employees' => $employees]) }}">
        編集する
      </a>
    </div>
    <form style="display: inline-block;" method="POST" action="{{ route('post.destroy', ['employees' => $employees]) }}">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">削除する</button>
    </form>
  </div>
</div>
@endsection

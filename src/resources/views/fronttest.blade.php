<h1>apache_child_terminate</h1>
<link href="/css/test.css" rel="stylesheet" type="text/css">

<?php

$table = array(
  array("a1", "a2"),
  array("b1", "b2"),
  array("c1", "c2")
);

?>


<div class="card mb-4">
  <div class="card-header">
    <label>社員ID </label>
    <div class="center">{{ $employee->id }}</div>
  </div>
  <div class="card-body">
    <pclass="card-text">
      <label>社員番号&nbsp;&nbsp;</label>
      <div class="center">{!! nl2br(e($employee->e_number)) !!}</div>
    </pclass="card-text">
    <p class="card-text">
      <label>氏名&nbsp;&nbsp;</label>
      <div class="center">{!! nl2br(e($employee->name)) !!}</div>
    </p>
    <!--  Refactoring -->
    <p class="card-text">
      <label>部署名&nbsp;&nbsp;</label>
      <div class="center">
        @if ($employee->department_id == 1)
        <div>CEO's Office</div>
        @elseif ($employee->department_id == 2)
        <div>テクノロジー本部</div>
        @elseif ($employee->department_id == 3)
        <div>バンカーサポート部</div>
        @elseif ($employee->department_id == 4)
        <div>管理本部</div>
        @elseif ($employee->department_id == 5)
        <div>メディア部</div>
        @endif
      </div>
    </p>
    <!--  Refactoring -->
    <p class="card-text">
      <label>性別&nbsp;&nbsp;</label>
      <div class="center">
        @if ($employee->gender == 0)
        <div>女性</div>
        @else
        <div>男性</div>
        @endif
      </div>
    </p>
  </div>
  <div class="card-footer">
    <a class="card-link" href="{{ route('post.show', ['employee' => $employee]) }}">
      詳細
    </a>
  </div>
</div>

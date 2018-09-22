@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', ['' => '選択して下さい', '0.未着' => '0.未着', '1.対応中' => '1.対応中', '2.完了' => '2.完了', '9.ペンディング' => '9.ペンディング']) !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection
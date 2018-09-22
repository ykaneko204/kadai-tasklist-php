@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', ['' => '選択して下さい', '0.未着' => '0.未着', '1.対応中' => '1.対応中', '2.完了' => '2.完了', '9.ペンディング' => '9.ペンディング']) !!}

        {!! Form::submit('登録') !!}

    {!! Form::close() !!}

@endsection
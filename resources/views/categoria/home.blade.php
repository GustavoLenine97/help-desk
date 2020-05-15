@extends('adminlte::page')

@section('page_heading','')

@section('content')

{!! Form::open(array('url' => 'admin/categoria', 'enctype' => 'multipart/form-data', 'method' => 'post')) !!}
{{ csrf_field() }}

{!! Form::label('Nome'); !!}
<br>
{!! Form::text($username = null); !!}
<br><br>
{!! Form::submit('Click Me!'); !!}

{!! Form::close() !!}

@endsection

@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                {!! Form::open(['route' => 'leadlist.store']) !!}
                <div class="form-group">
                    {!! Form::label('list-name', 'List Name:') !!}
                    {!! Form::text('list-name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::close() !!}
                    {!! Form::open( ['class' => 'dropzone list-upload', 'files' => 'true']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/create-leadlist.js') }}"></script>
    <script>
        Dropzone.options.listUpload = {
            paramName: 'leadList',
            maxFilesize: 100,
            url: '/list-upload',
            addRemoveLinks: true,
            maxFiles: 1,
            acceptedFiles: '.csv',
            dictResponseError: 'File Upload Error.'
        };
    </script>
@endsection
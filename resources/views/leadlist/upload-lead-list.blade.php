@extends('layouts.app')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('leadlist.partials.create.upload')
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/create-leadlist.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        Dropzone.options.listUpload = {
            init: function() {
                this.on("success", function(file) {
                    swal({
                        title:             "Upload Success",
                        type:              "success",
                        text:              "Your lists have been uploaded, validation has begun",
                        timer:             1700,
                        showConfirmButton: false
                    })
                });
            },
            paramName: 'leadList',
            maxFilesize: 50,
            addRemoveLinks: true,
            maxFiles: 1,
            acceptedFiles: '.csv',
            dictResponseError: 'File Upload Error.'
        };


    </script>
@endsection
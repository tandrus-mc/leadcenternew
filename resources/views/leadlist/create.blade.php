@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('leadlist.partials.create.wizard')
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

        $('#leadlist-upload-wizard').on('change', function(e, data) {
            // validation
            if( $('#form'+data.step).length > 0 ) {
                var parsleyForm = $('#form'+data.step).parsley();
                parsleyForm.validate();

                if( !parsleyForm.isValid() )
                    return false;
            }

            // last step button
            $btnNext = $(this).parents('.wizard-wrapper').find('.btn-next');

            if(data.step === 2 && data.direction == 'next') {
                $btnNext.text(' Create My Account')
                        .prepend('<i class="fa fa-check-circle"></i>')
                        .removeClass('btn-primary').addClass('btn-success');
            }else{
                $btnNext.text('Next ').
                        append('<i class="fa fa-arrow-right"></i>')
                        .removeClass('btn-success').addClass('btn-primary');
            }

        }).on('finished', function(){
            alert('Your account has been created.');
        });

        $('.wizard-wrapper .btn-next').click( function(){
            $('#leadlist-upload-wizard').wizard('next');
        });
        $('.wizard-wrapper .btn-prev').click( function(){
            $('#leadlist-upload-wizard').wizard('previous');
        });
    </script>
@endsection
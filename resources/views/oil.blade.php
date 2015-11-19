@extends('public')


@section('content')
    <div class="col-md-2"></div>

    <div class="col-md-8">
        <h1>{!! Lang::get('forms.form_title') !!}</h1>
        <h2>{!! Lang::get('forms.oil_program') !!}</h2>
        <hr>
        {!! Form::open(array('url' => '/oil-and-glycol-program', 'method' => 'post', 'id' => 'bookform', 'name' => 'bookform')) !!}
            @include('forms.oil-form')
        {!! Form::close() !!}
    </div>

    <div class="col-md-2"></div>

@stop

@section('bottom-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#bookform").validate({
                errorClass:'text-danger',
                validClass:'text-success',
                errorElement:'span',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents("div[class='form-group']").addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents(".text-danger").removeClass(errorClass).addClass(validClass);
                }
            });
        });

        function addOfficer() {
            var newDiv = $("#corp").clone(true);
            $(newDiv).find('.remove-button')
                    .removeClass('hidden');
            $(newDiv).addClass('duplicate');
            $(newDiv).attr('id', "");
            newDiv.insertAfter("#corp");

        }

        $(".remove").click(function(e) {
            $(this).closest(".duplicate").remove();
            e.preventDefault();
        });
    </script>
@stop
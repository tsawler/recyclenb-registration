@extends('vcms5::base')

@section('top-white')
<h1>{!! Lang::get('vcms.brand_registrations') !!}</h1>
@stop

@section('content-title')

@stop

@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>{!! Lang::get('vcms.brand_registrations') !!}</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>
        </div>

        <div class="ibox-content">
            <table id="itable" class="table table-compact table-striped table-hover">
                <thead>
                <tr>
                    <th>Registration</th>
                    <th>Type</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($allregistrations as $registration)
                <tr>
                    <td><a href="/admin/registrations/registration?id={!! $registration->id!!}">{!! $registration->name_of_applicant !!}</a></td>
                    <td>{!! $registration->brandType->brand_name !!}</td>
                    <td>{!! $registration->created_at !!}</td>
                    <td>{!! $registration->updated_at !!}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('bottom-js')
<script>
    $(document).ready(function() {
        $('#itable').dataTable({
            responsive: true,
            stateSave: true
        });
    });
</script>
@stop
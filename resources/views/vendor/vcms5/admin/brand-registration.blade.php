@extends('vcms5::base')

@section('top-white')
    <h1>Brand Registration: {!! $registration->name_of_applicant !!}</h1>
@stop

@section('content-title')

@stop

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Brand Registration</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">

                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#registration" aria-controls="registration" role="tab" data-toggle="tab">Registration</a></li>
                        @if($registration->id > 0)
                            <li role="presentation"><a href="#officers" aria-controls="officers" role="tab" data-toggle="tab">Officers</a></li>
                        @endif
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="registration">

                            {!! Form::model($registration, ['url' => '/admin/registrations/registration']) !!}

                            {!! Form::hidden('type', null) !!}

                            <div class="form-group">
                                <label for="name_of_applicant">{!! Lang::get('forms.name_of_applicant') !!}</label>
                                {!! Form::text('name_of_applicant', null, ['id' => 'name_of_applicant', 'class' => 'form-control']) !!}
                            </div>

                            <h3>{!! Lang::get('forms.address_head_office') !!}</h3>

                            <div class="form-group">
                                <label for="head_physical_location">{!! Lang::get('forms.physical_location') !!}</label>
                                {!! Form::text('head_physical_location', null, ['id' => 'head_physical_location', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="head_mailing_address">{!! Lang::get('forms.mailing_address') !!}</label>
                                {!! Form::text('head_mailing_address', null, ['id' => 'head_mailing_address', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="head_province_state">{!! Lang::get('forms.province_state') !!}</label>
                                {!! Form::select('head_province_state', array(
                                                        "AB" => "Alberta",
                                                        "BC" => "British Columbia",
                                                        "MB" => "Manitoba",
                                                        "NB" => "New Brunswick",
                                                        "NL" => "Newfoundland and Labrador",
                                                        "NS" => "Nova Scotia",
                                                        "NT" => "Northwest Territories",
                                                        "NU" => "Nunavut",
                                                        "ON" => "Ontario",
                                                        "PE" => "Prince Edward Island",
                                                        "QC" => "Quebec",
                                                        "SK" => "Saskatchewan",
                                                        "YT" => "Yukon",
                                                        "AL" => "Alabama",
                                                        "AK" => "Alaska",
                                                        "AZ" => "Arizona",
                                                        "AR" => "Arkansas",
                                                        "CA" => "California",
                                                        "CO" => "Colorado",
                                                        "CT" => "Connecticut",
                                                        "DE" => "Delaware",
                                                        "DC" => "District Of Columbia",
                                                        "FL" => "Florida",
                                                        "GA" => "Georgia",
                                                        "HI" => "Hawaii",
                                                        "ID" => "Idaho",
                                                        "IL" => "Illinois",
                                                        "IN" => "Indiana",
                                                        "IA" => "Iowa",
                                                        "KS" => "Kansas",
                                                        "KY" => "Kentucky",
                                                        "LA" => "Louisiana",
                                                        "ME" => "Maine",
                                                        "MD" => "Maryland",
                                                        "MA" => "Massachusetts",
                                                        "MI" => "Michigan",
                                                        "MN" => "Minnesota",
                                                        "MS" => "Mississippi",
                                                        "MO" => "Missouri",
                                                        "MT" => "Montana",
                                                        "NE" => "Nebraska",
                                                        "NV" => "Nevada",
                                                        "NH" => "New Hampshire",
                                                        "NJ" => "New Jersey",
                                                        "NM" => "New Mexico",
                                                        "NY" => "New York",
                                                        "NC" => "North Carolina",
                                                        "ND" => "North Dakota",
                                                        "OH" => "Ohio",
                                                        "OK" => "Oklahoma",
                                                        "OR" => "Oregon",
                                                        "PA" => "Pennsylvania",
                                                        "RI" => "Rhode Island",
                                                        "SC" => "South Carolina",
                                                        "SD" => "South Dakota",
                                                        "TN" => "Tennessee",
                                                        "TX" => "Texas",
                                                        "UT" => "Utah",
                                                        "VT" => "Vermont",
                                                        "VA" => "Virginia",
                                                        "WA" => "Washington",
                                                        "WV" => "West Virginia",
                                                        "WI" => "Wisconsin",
                                                        "WY" => "Wyoming"),
                                                        "NB",
                                                        array('class' => 'form-control')) !!}
                            </div>

                            <div class="form-group">
                                <label for="head_zip">{!! Lang::get('forms.zip') !!}</label>
                                {!! Form::text('head_zip', null, ['id' => 'head_zip', 'class' => 'form-control required']) !!}
                            </div>

                            <h3>{!! Lang::get('forms.nb_location_blurb') !!}</h3>

                            <div class="form-group">
                                <label for="nb_physical_location">{!! Lang::get('forms.physical_location') !!}</label>
                                {!! Form::text('nb_physical_location', null, ['id' => 'nb_physical_location', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="head_mailing_address">{!! Lang::get('forms.mailing_address') !!}</label>
                                {!! Form::text('nb_mailing_address', null, ['id' => 'nb_mailing_address', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="nb_province_state">{!! Lang::get('forms.province_state') !!}</label>
                                {!! Form::select('nb_province_state', [
                                                        "AB" => "Alberta",
                                                        "BC" => "British Columbia",
                                                        "MB" => "Manitoba",
                                                        "NB" => "New Brunswick",
                                                        "NL" => "Newfoundland and Labrador",
                                                        "NS" => "Nova Scotia",
                                                        "NT" => "Northwest Territories",
                                                        "NU" => "Nunavut",
                                                        "ON" => "Ontario",
                                                        "PE" => "Prince Edward Island",
                                                        "QC" => "Quebec",
                                                        "SK" => "Saskatchewan",
                                                        "YT" => "Yukon",
                                                        "AL" => "Alabama",
                                                        "AK" => "Alaska",
                                                        "AZ" => "Arizona",
                                                        "AR" => "Arkansas",
                                                        "CA" => "California",
                                                        "CO" => "Colorado",
                                                        "CT" => "Connecticut",
                                                        "DE" => "Delaware",
                                                        "DC" => "District Of Columbia",
                                                        "FL" => "Florida",
                                                        "GA" => "Georgia",
                                                        "HI" => "Hawaii",
                                                        "ID" => "Idaho",
                                                        "IL" => "Illinois",
                                                        "IN" => "Indiana",
                                                        "IA" => "Iowa",
                                                        "KS" => "Kansas",
                                                        "KY" => "Kentucky",
                                                        "LA" => "Louisiana",
                                                        "ME" => "Maine",
                                                        "MD" => "Maryland",
                                                        "MA" => "Massachusetts",
                                                        "MI" => "Michigan",
                                                        "MN" => "Minnesota",
                                                        "MS" => "Mississippi",
                                                        "MO" => "Missouri",
                                                        "MT" => "Montana",
                                                        "NE" => "Nebraska",
                                                        "NV" => "Nevada",
                                                        "NH" => "New Hampshire",
                                                        "NJ" => "New Jersey",
                                                        "NM" => "New Mexico",
                                                        "NY" => "New York",
                                                        "NC" => "North Carolina",
                                                        "ND" => "North Dakota",
                                                        "OH" => "Ohio",
                                                        "OK" => "Oklahoma",
                                                        "OR" => "Oregon",
                                                        "PA" => "Pennsylvania",
                                                        "RI" => "Rhode Island",
                                                        "SC" => "South Carolina",
                                                        "SD" => "South Dakota",
                                                        "TN" => "Tennessee",
                                                        "TX" => "Texas",
                                                        "UT" => "Utah",
                                                        "VT" => "Vermont",
                                                        "VA" => "Virginia",
                                                        "WA" => "Washington",
                                                        "WV" => "West Virginia",
                                                        "WI" => "Wisconsin",
                                                        "WY" => "Wyoming"],
                                                        null,
                                                        ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="nb_zip">{!! Lang::get('forms.zip') !!}</label>
                                {!! Form::text('nb_zip', null, ['id' => 'nb_zip', 'class' => 'form-control required']) !!}
                            </div>

                            <h3>{!! Lang::get('forms.contact_blurb') !!}</h3>

                            <div class="form-group">
                                <label for="contact_name">{!! Lang::get('forms.name') !!}</label>
                                {!! Form::text('contact_name', null, ['id' => 'contact_name', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="contact_email">{!! Lang::get('forms.email_address') !!}</label>
                                {!! Form::text('contact_email', null, ['id' => 'contact_email', 'class' => 'form-control required email']) !!}
                            </div>

                            <div class="form-group">
                                <label for="contact_mailing_address">{!! Lang::get('forms.mailing_address') !!}</label>
                                {!! Form::text('contact_mailing_address', null, ['id' => 'contact_mailing_address', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="contact_province">{!! Lang::get('forms.province_state') !!}</label>
                                {!! Form::select('contact_province', [
                                                        "AB" => "Alberta",
                                                        "BC" => "British Columbia",
                                                        "MB" => "Manitoba",
                                                        "NB" => "New Brunswick",
                                                        "NL" => "Newfoundland and Labrador",
                                                        "NS" => "Nova Scotia",
                                                        "NT" => "Northwest Territories",
                                                        "NU" => "Nunavut",
                                                        "ON" => "Ontario",
                                                        "PE" => "Prince Edward Island",
                                                        "QC" => "Quebec",
                                                        "SK" => "Saskatchewan",
                                                        "YT" => "Yukon",
                                                        "AL" => "Alabama",
                                                        "AK" => "Alaska",
                                                        "AZ" => "Arizona",
                                                        "AR" => "Arkansas",
                                                        "CA" => "California",
                                                        "CO" => "Colorado",
                                                        "CT" => "Connecticut",
                                                        "DE" => "Delaware",
                                                        "DC" => "District Of Columbia",
                                                        "FL" => "Florida",
                                                        "GA" => "Georgia",
                                                        "HI" => "Hawaii",
                                                        "ID" => "Idaho",
                                                        "IL" => "Illinois",
                                                        "IN" => "Indiana",
                                                        "IA" => "Iowa",
                                                        "KS" => "Kansas",
                                                        "KY" => "Kentucky",
                                                        "LA" => "Louisiana",
                                                        "ME" => "Maine",
                                                        "MD" => "Maryland",
                                                        "MA" => "Massachusetts",
                                                        "MI" => "Michigan",
                                                        "MN" => "Minnesota",
                                                        "MS" => "Mississippi",
                                                        "MO" => "Missouri",
                                                        "MT" => "Montana",
                                                        "NE" => "Nebraska",
                                                        "NV" => "Nevada",
                                                        "NH" => "New Hampshire",
                                                        "NJ" => "New Jersey",
                                                        "NM" => "New Mexico",
                                                        "NY" => "New York",
                                                        "NC" => "North Carolina",
                                                        "ND" => "North Dakota",
                                                        "OH" => "Ohio",
                                                        "OK" => "Oklahoma",
                                                        "OR" => "Oregon",
                                                        "PA" => "Pennsylvania",
                                                        "RI" => "Rhode Island",
                                                        "SC" => "South Carolina",
                                                        "SD" => "South Dakota",
                                                        "TN" => "Tennessee",
                                                        "TX" => "Texas",
                                                        "UT" => "Utah",
                                                        "VT" => "Vermont",
                                                        "VA" => "Virginia",
                                                        "WA" => "Washington",
                                                        "WV" => "West Virginia",
                                                        "WI" => "Wisconsin",
                                                        "WY" => "Wyoming"],
                                                        "NB",
                                                        ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="contact_zip">{!! Lang::get('forms.zip') !!}</label>
                                {!! Form::text('contact_zip', null, ['id' => 'contact_zip', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="contact_phone">{!! Lang::get('forms.telephone') !!}</label>
                                {!! Form::text('contact_phone', null, ['id' => 'contact_phone', 'class' => 'form-control required']) !!}
                            </div>

                            <h3>{!! Lang::get('forms.agent_blurb') !!}</h3>

                            <div class="form-group">
                                <label for="agent_name">{!! Lang::get('forms.name') !!}</label>
                                {!! Form::text('agent_name', null, ['id' => 'agent_name', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_company_name">{!! Lang::get('forms.company_name') !!}</label>
                                {!! Form::text('agent_company_name', null, ['id' => 'agent_company_name', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_email">{!! Lang::get('forms.email_address') !!}</label>
                                {!! Form::text('agent_email', null, ['id' => 'agent_email', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_mailing_address">{!! Lang::get('forms.mailing_address') !!}</label>
                                {!! Form::text('agent_mailing_address', null, ['id' => 'agent_mailing_address', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_province">{!! Lang::get('forms.province_state') !!}</label>
                                {!! Form::select('agent_province', array(
                                                        "AB" => "Alberta",
                                                        "BC" => "British Columbia",
                                                        "MB" => "Manitoba",
                                                        "NB" => "New Brunswick",
                                                        "NL" => "Newfoundland and Labrador",
                                                        "NS" => "Nova Scotia",
                                                        "NT" => "Northwest Territories",
                                                        "NU" => "Nunavut",
                                                        "ON" => "Ontario",
                                                        "PE" => "Prince Edward Island",
                                                        "QC" => "Quebec",
                                                        "SK" => "Saskatchewan",
                                                        "YT" => "Yukon",
                                                        "AL" => "Alabama",
                                                        "AK" => "Alaska",
                                                        "AZ" => "Arizona",
                                                        "AR" => "Arkansas",
                                                        "CA" => "California",
                                                        "CO" => "Colorado",
                                                        "CT" => "Connecticut",
                                                        "DE" => "Delaware",
                                                        "DC" => "District Of Columbia",
                                                        "FL" => "Florida",
                                                        "GA" => "Georgia",
                                                        "HI" => "Hawaii",
                                                        "ID" => "Idaho",
                                                        "IL" => "Illinois",
                                                        "IN" => "Indiana",
                                                        "IA" => "Iowa",
                                                        "KS" => "Kansas",
                                                        "KY" => "Kentucky",
                                                        "LA" => "Louisiana",
                                                        "ME" => "Maine",
                                                        "MD" => "Maryland",
                                                        "MA" => "Massachusetts",
                                                        "MI" => "Michigan",
                                                        "MN" => "Minnesota",
                                                        "MS" => "Mississippi",
                                                        "MO" => "Missouri",
                                                        "MT" => "Montana",
                                                        "NE" => "Nebraska",
                                                        "NV" => "Nevada",
                                                        "NH" => "New Hampshire",
                                                        "NJ" => "New Jersey",
                                                        "NM" => "New Mexico",
                                                        "NY" => "New York",
                                                        "NC" => "North Carolina",
                                                        "ND" => "North Dakota",
                                                        "OH" => "Ohio",
                                                        "OK" => "Oklahoma",
                                                        "OR" => "Oregon",
                                                        "PA" => "Pennsylvania",
                                                        "RI" => "Rhode Island",
                                                        "SC" => "South Carolina",
                                                        "SD" => "South Dakota",
                                                        "TN" => "Tennessee",
                                                        "TX" => "Texas",
                                                        "UT" => "Utah",
                                                        "VT" => "Vermont",
                                                        "VA" => "Virginia",
                                                        "WA" => "Washington",
                                                        "WV" => "West Virginia",
                                                        "WI" => "Wisconsin",
                                                        "WY" => "Wyoming"),
                                                        "NB",
                                                        array('class' => 'form-control')) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_zip">{!! Lang::get('forms.zip') !!}</label>
                                {!! Form::text('agent_zip', null, ['id' => 'agent_zip', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_phone">{!! Lang::get('forms.telephone') !!}</label>
                                {!! Form::text('agent_phone', null, ['id' => 'agent_phone', 'class' => 'form-control']) !!}
                            </div>

                            <h3>{!! Lang::get('forms.signature') !!}</h3>
                            <div class="form-group">
                                <label for="signature">{!! Lang::get('forms.signature_blurb') !!}</label>
                                {!! Form::text('signature', null, ['id' => 'signature', 'class' => 'form-control required']) !!}
                            </div>

                            <hr>
                            <div class="form-group">
                                <div class="controls">
                                    {!!  Form::submit(Lang::get('forms.register'), array('class' => 'btn btn-primary')) !!}
                                </div>
                            </div>
                            <br><br>

                            {!! Form::hidden('id', $registration->id) !!}
                            {!! Form::close() !!}

                        </div>

                        @if($registration->id > 0)
                            <div role="tabpanel" class="tab-pane" id="officers">
                            {!! Form::open(['url' => '/admin/registrations/brand-officers', 'method' => 'post']) !!}

                            @foreach($officers as $index => $officer)

                                <h2>{!! Lang::get('forms.officer') !!} # {!! $index + 1 !!} <small><a href="#!" onclick="deleteOfficer({!! $officer->id !!})" class="text-danger remove remove-button">Delete this officer</a></small></h2>
                                <div class="form-group">
                                    <label for="officer_name">{!! Lang::get('forms.name') !!}</label>
                                    {!! Form::text('officer_name[]', $officer->officer_name, ['id' => 'officer_name', 'class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label for="officer_title">{!! Lang::get('forms.title') !!}</label>
                                    {!! Form::text('officer_title[]', $officer->officer_title, ['id' => 'officer_title', 'class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label for="officer_address">{!! Lang::get('forms.address_of_residence') !!}</label>
                                    {!! Form::text('officer_address[]', $officer->officer_address, ['id' => 'officer_address', 'class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label for="officer_province">{!! Lang::get('forms.province_state') !!}</label>
                                    {!! Form::select('officer_province[]', array(
                                                            "AB" => "Alberta",
                                                            "BC" => "British Columbia",
                                                            "MB" => "Manitoba",
                                                            "NB" => "New Brunswick",
                                                            "NL" => "Newfoundland and Labrador",
                                                            "NS" => "Nova Scotia",
                                                            "NT" => "Northwest Territories",
                                                            "NU" => "Nunavut",
                                                            "ON" => "Ontario",
                                                            "PE" => "Prince Edward Island",
                                                            "QC" => "Quebec",
                                                            "SK" => "Saskatchewan",
                                                            "YT" => "Yukon",
                                                            "AL" => "Alabama",
                                                            "AK" => "Alaska",
                                                            "AZ" => "Arizona",
                                                            "AR" => "Arkansas",
                                                            "CA" => "California",
                                                            "CO" => "Colorado",
                                                            "CT" => "Connecticut",
                                                            "DE" => "Delaware",
                                                            "DC" => "District Of Columbia",
                                                            "FL" => "Florida",
                                                            "GA" => "Georgia",
                                                            "HI" => "Hawaii",
                                                            "ID" => "Idaho",
                                                            "IL" => "Illinois",
                                                            "IN" => "Indiana",
                                                            "IA" => "Iowa",
                                                            "KS" => "Kansas",
                                                            "KY" => "Kentucky",
                                                            "LA" => "Louisiana",
                                                            "ME" => "Maine",
                                                            "MD" => "Maryland",
                                                            "MA" => "Massachusetts",
                                                            "MI" => "Michigan",
                                                            "MN" => "Minnesota",
                                                            "MS" => "Mississippi",
                                                            "MO" => "Missouri",
                                                            "MT" => "Montana",
                                                            "NE" => "Nebraska",
                                                            "NV" => "Nevada",
                                                            "NH" => "New Hampshire",
                                                            "NJ" => "New Jersey",
                                                            "NM" => "New Mexico",
                                                            "NY" => "New York",
                                                            "NC" => "North Carolina",
                                                            "ND" => "North Dakota",
                                                            "OH" => "Ohio",
                                                            "OK" => "Oklahoma",
                                                            "OR" => "Oregon",
                                                            "PA" => "Pennsylvania",
                                                            "RI" => "Rhode Island",
                                                            "SC" => "South Carolina",
                                                            "SD" => "South Dakota",
                                                            "TN" => "Tennessee",
                                                            "TX" => "Texas",
                                                            "UT" => "Utah",
                                                            "VT" => "Vermont",
                                                            "VA" => "Virginia",
                                                            "WA" => "Washington",
                                                            "WV" => "West Virginia",
                                                            "WI" => "Wisconsin",
                                                            "WY" => "Wyoming"),
                                                            $officer->province,
                                                            array('class' => 'form-control')) !!}
                                </div>

                                <div class="form-group">
                                    <label for="officer_zip">{!! Lang::get('forms.zip') !!}</label>
                                    {!! Form::text('officer_zip[]', $officer->officer_zip, ['id' => 'officer_zip', 'class' => 'form-control']) !!}
                                </div>

                                <hr>
                            @endforeach

                            {!! Form::hidden('id', $registration->id) !!}
                            {!! Form::close() !!}
                        </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
@stop

@section('bottom-js')
    <script>
        $(document).ready(function() {

        });

        function deleteOfficer(x){
            bootbox.confirm("Are you sure you want to delete this officer?", function(result) {
                if (result==true)
                {
                    window.location.href = '/admin/registrations/delete-brand-registration-officer?rid={!! $registration->id !!}&id='+x;
                }
            });
        }

    </script>
@stop
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="col-md-12 panel-heading text-center text-uppercase form-group">
                    <div class="col-md-5">
                        <img src="{{ url('images/reviewImages/mockUp2_44.png') }}" />
                    </div>
                    <div class="col-md-7">
                        <h1>Inspired English</h1>
                    </div>
                </div>

                <div class="panel-body">
                    <a href="{{ route('member_lession_1_vocabularies') }}" class="btn btn-success">Next chapter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

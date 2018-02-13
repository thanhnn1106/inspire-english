@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Chapter Feedback</h1>
                </div>
                <div class="panel-body">
                    <p>Feedback .</p>
                    <a href="{{ route('member_lession_1_how_you_sound') }}" class="btn btn-success">Previous chapter</a>
                    <a href="{{ route('member_dashboard') }}" class="btn btn-success">Go to main</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

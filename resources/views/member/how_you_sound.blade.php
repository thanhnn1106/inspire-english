@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Chapter How You Sound</h1>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <h4>Press "Next" to hear the word.</h4>
                        <h4>Click "Record" and record your voice.</h4>
                    </div>
                    <div class="col-md-6">
                        <img width="300" src="http://moziru.com/images/apple-clipart-red-apple-6.jpg" class="img-rounded" alt="Cinque Terre">
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-forward"></i></button>
                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-play"></i></button>
                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-fast-backward"></i></button>
                        </div>
                        <div class="col-md-12" style="margin-top: 10px;">
                            <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-record"></i></button>
                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-play"></i></button>
                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-fast-backward"></i></button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{ route('member_lession_1_question') }}" class="btn btn-success">Previous chapter</a>
                        <a href="{{ route('member_lession_1_feedback') }}" class="btn btn-success">Next chapter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

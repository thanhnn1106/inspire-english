@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Review</h1><a href="{{ route('member_lession_1_review17') }}" class="btn btn-success">Next</a>
                </div>
                <div class="panel-body text-center">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <img src="{{ url('images/reviewImages/Orange.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ url('images/reviewImages/Pig.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <img src="{{ url('images/reviewImages/Apple.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ url('images/reviewImages/Cat.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <img src="{{ url('images/reviewImages/Grapes.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ url('images/reviewImages/Monkey.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

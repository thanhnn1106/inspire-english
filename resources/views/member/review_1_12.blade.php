@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Review</h1><a href="{{ route('member_lession_1_review11') }}" class="btn btn-success">Main</a>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ url('images/reviewImages/leftSpeakingBubble.png') }}" class="img-responsive" style="width: 100%;" />
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ url('images/reviewImages/Circle.png') }}" class="img-responsive" />
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ url('images/reviewImages/rightSpeakingBubble.png') }}" class="img-responsive" style="width: 100%;" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <img src="{{ url('images/reviewImages/speakingCrowd.png') }}" class="img-responsive" style="width: 100%; margin-top: -100px;" />
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

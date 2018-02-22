@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Review</h1><a href="{{ route('member_lession_1_review112') }}" class="btn btn-success">Next</a>
                </div>
                <div class="panel-body">
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <img src="{{ url('images/reviewImages/coupleSpeaking.png') }}" class="img-thumbnail" style="width: 100%;" />
                        </div>
                        <div class="col-lg-6">
                            <img src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-thumbnail" style="width: 100%; height: 93px;"/>
                        </div>
                        <div class="col-lg-3">
                            <img src="{{ url('images/reviewImages/Star.png') }}" class="img-thumbnail" style="width: 100%; height: 93px;" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <img src="{{ url('images/reviewImages/coupleSpeaking.png') }}" class="img-thumbnail" style="width: 100%;" />
                        </div>
                        <div class="col-lg-6">
                            <img src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-thumbnail" style="width: 100%; height: 93px;"/>
                        </div>
                        <div class="col-lg-3">
                            <img src="{{ url('images/reviewImages/Star.png') }}" class="img-thumbnail" style="width: 100%; height: 93px;" />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <img src="{{ url('images/reviewImages/coupleSpeaking.png') }}" class="img-thumbnail" style="width: 100%;" />
                        </div>
                        <div class="col-lg-6">
                            <img src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-thumbnail" style="width: 100%; height: 93px;"/>
                        </div>
                        <div class="col-lg-3">
                            <img src="{{ url('images/reviewImages/Star.png') }}" class="img-thumbnail" style="width: 100%; height: 93px;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

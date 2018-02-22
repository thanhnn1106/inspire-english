@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Review</h1><a href="{{ route('member_lession_1_review18') }}" class="btn btn-success">Next</a>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="row form-group">
                                <img src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-rounded" width="300" height="95" />
                            </div>
                            <div class="row form-group">
                                <img src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-rounded" width="300" height="95" />
                            </div>
                            <div class="row form-group">
                                <img src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-rounded" width="300" height="95" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <img src="{{ url('images/reviewImages/Fish.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ url('images/reviewImages/Umbrella.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <img src="{{ url('images/reviewImages/Blue.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ url('images/reviewImages/Tree.png') }}" class="img-thumbnail" style="width: 200px; height: 150px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

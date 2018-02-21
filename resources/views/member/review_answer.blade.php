@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Review</h1><a href="{{ route('member_lession_1_review') }}" class="btn btn-success">Main</a>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-rounded" width="300" height="100" />
                            <img style="margin-top: 20px;" src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-rounded" width="300" height="100" />
                            <img style="margin-top: 20px;" src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-rounded" width="300" height="100" />
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ url('images/reviewImages/Fish.png') }}" class="img-thumbnail" width="150" height="150" />
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ url('images/reviewImages/Umbrella.png') }}" class="img-thumbnail" width="150" height="150" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ url('images/reviewImages/Blue.png') }}" class="img-thumbnail" width="150" height="150" />
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ url('images/reviewImages/Tree.png') }}" class="img-thumbnail" width="150" height="150" />
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Review</h1><a href="{{ route('member_lession_1_review113') }}" class="btn btn-success">Next</a>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ url('images/reviewImages/Fish.png') }}" class="img-circle" width="350" />
                        </div>
                        <div class="col-lg-6">
                            <img src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-rounded" width="300" height="120" />
                            <img style="margin-top: 20px;" src="https://i.ytimg.com/vi/m5d1FlSeF-M/maxresdefault.jpg" class="img-rounded" width="300" height="50" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

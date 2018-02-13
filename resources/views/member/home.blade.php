@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Chapter 1</h1>
                </div>

                <div class="panel-body">
                    <p>Cover sheet pictures and random vocabulary words</p>
                    <a href="{{ route('member_lession_1_vocabularies') }}" class="btn btn-success">Next chapter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

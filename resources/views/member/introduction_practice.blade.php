@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Chapter Introduction Practice</h1>
                </div>
                <div class="panel-body">
                    <p>Just practice.</p>
                    @foreach ($qaSentenceList as $qaSen)
                    <div class="col-md-6">
                        <blockquote>
                            <p>{{ $qaSen->question }}</p>
                            <footer>{{ $qaSen->answer_1 }}</footer>
                            <footer>{{ $qaSen->answer_2 }}</footer>
                            <footer>{{ $qaSen->answer_3 }}</footer>
                        </blockquote>
                    </div>
                    @endforeach
                    <div class="col-md-12">
                        <a href="{{ route('member_lession_1_introduction') }}" class="btn btn-success">Previous chapter</a>
                        <a href="{{ route('member_lession_1_countries') }}" class="btn btn-success">Next chapter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

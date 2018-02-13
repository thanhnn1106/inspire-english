@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Chapter Introduction</h1>
                </div>
                <div class="panel-body">
                    <p>Click English sentence and hear western speak sentence.</p>
                    @foreach ($introSentenceList as $introSen)
                    <div class="col-md-6">
                        <blockquote>
                            <p>{{ $introSen->sentence_vn }}</p>
                            <footer>{{ $introSen->sentence_en }}</footer>
                        </blockquote>
                    </div>
                    @endforeach
                    <div class="col-md-12">
                        <a href="{{ route('member_lession_1_vocabularies') }}" class="btn btn-success">Previous chapter</a>
                        <a href="{{ route('member_lession_1_introduction_practice') }}" class="btn btn-success">Next chapter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

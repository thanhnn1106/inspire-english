@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Chapter Question</h1>
                </div>
                <div class="panel-body">
                    <p>Practice question.</p>
                    @foreach ($questionList as $ql)
                    <div class="col-md-6">
                        <blockquote>
                            <p>{{ $ql->question_vn }}</p>
                            <footer>{{ $ql->question_en }}</footer>
                        </blockquote>
                    </div>
                    @endforeach
                    <div class="col-md-12">
                        <a href="{{ route('member_lession_1_alphabet_sound') }}" class="btn btn-success">Previous chapter</a>
                        <a href="{{ route('member_lession_1_how_you_sound') }}" class="btn btn-success">Next chapter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

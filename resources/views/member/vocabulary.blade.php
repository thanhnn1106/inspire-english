@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Chapter Vocabulary</h1>
                </div>
                <div class="panel-body">
                    <p>Click a word to hear English sound of it.</p>
                    <table class="table table-striped">
                        <thead class="h2">
                            <td>Vietnamese</td>
                            <td>English</td>
                        </thead>
                        @foreach ($vocaList as $voca)
                        <tr>
                            <td>{{ $voca->word_vn }}</td>
                            <td>{{ $voca->word_en }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="{{ route('member_dashboard') }}" class="btn btn-success">Previous chapter</a>
                    <a href="{{ route('member_lession_1_introduction') }}" class="btn btn-success">Next chapter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

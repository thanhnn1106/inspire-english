@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Chapter Alphabet Sound</h1>
                </div>
                <div class="panel-body">
                    <p>Click word to hear - Click letter to hear.</p>
                    <table class="table table-striped">
                        <thead class="h2">
                            <td>Letter</td>
                            <td>Word</td>
                        </thead>
                        @foreach ($alphabetList as $al)
                        <tr>
                            <td>{{ $al->letter }}</td>
                            <td>{{ $al->word }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="{{ route('member_lession_1_country_speaking') }}" class="btn btn-success">Previous chapter</a>
                    <a href="{{ route('member_lession_1_question') }}" class="btn btn-success">Next chapter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

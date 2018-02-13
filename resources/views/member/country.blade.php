@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Chapter Countries</h1>
                </div>
                <div class="panel-body">
                    <p>Game - Flag picture to country names.</p>
                    <table class="table table-striped">
                        <thead class="h2">
                            <td>Flag</td>
                            <td>Name</td>
                        </thead>
                        @foreach ($countryList as $cl)
                        <tr>
                            <td>{{ $cl->nationality }}</td>
                            <td>{{ $cl->name }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="{{ route('member_lession_1_introduction_practice') }}" class="btn btn-success">Previous chapter</a>
                    <a href="{{ route('member_lession_1_nationalities') }}" class="btn btn-success">Next chapter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

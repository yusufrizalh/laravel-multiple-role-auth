@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">DASHBOARD</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3 class="text-bold text-primary">INSTRUCTOR DASHBOARD</h3>
                        <hr>
                        <p class="text-secondary">
                            Officia fugiat reprehenderit occaecat cillum fugiat do nisi consequat. Non eu ut esse commodo
                            quis. Dolor tempor laboris veniam sit eu minim exercitation ea ex cillum excepteur nostrud
                            aliqua. Mollit esse adipisicing reprehenderit culpa incididunt cillum. Ex minim in incididunt
                            incididunt tempor cillum eiusmod ex laboris exercitation ad quis culpa aute. Velit adipisicing
                            duis commodo esse.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

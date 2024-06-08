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
                        <h3 class="text-bold text-primary">BACK OFFICE DASHBOARD</h3>
                        <hr>
                        <p class="text-secondary">
                            Aute dolor aliqua fugiat id ad tempor dolore deserunt dolor minim adipisicing occaecat.
                            Adipisicing exercitation cillum laboris sit Lorem. Culpa eu magna proident esse elit aute. Eu
                            excepteur laboris eiusmod aute dolore enim ullamco velit mollit ea enim.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

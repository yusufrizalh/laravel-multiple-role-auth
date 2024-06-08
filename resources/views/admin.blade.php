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
                        <h3 class="text-bold text-primary">ADMIN DASHBOARD</h3>
                        <hr>
                        <p class="text-secondary">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolor excepturi a
                            laudantium, harum labore perferendis? Illo, harum. Labore nesciunt ipsam quam tempora nam
                            voluptatum dolorem iste corrupti nulla necessitatibus?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

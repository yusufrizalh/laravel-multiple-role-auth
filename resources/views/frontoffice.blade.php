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
                        <h3 class="text-bold text-primary">FRONT OFFICE DASHBOARD</h3>
                        <hr>
                        <p class="text-secondary">
                            Labore exercitation nostrud exercitation do excepteur qui commodo commodo est. Deserunt veniam
                            qui fugiat aliqua excepteur. Excepteur Lorem amet consectetur consectetur amet reprehenderit
                            amet Lorem occaecat irure et proident culpa. Anim cillum ex cillum mollit commodo reprehenderit
                            pariatur eiusmod eiusmod dolor. Reprehenderit do veniam qui ea Lorem consequat id minim. Cillum
                            Lorem pariatur cillum irure elit dolor esse reprehenderit proident. Non velit deserunt deserunt
                            qui veniam laborum consequat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

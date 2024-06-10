@extends('layouts.navbar-superadmin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white bold">DASHBOARD</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3 class="text-bold text-primary">SUPER ADMIN DASHBOARD</h3>
                        <hr>
                        <p class="text-secondary">
                            Magna mollit id duis eu reprehenderit veniam eiusmod velit proident id sunt. Sit enim
                            consectetur consectetur ipsum ipsum veniam elit Lorem commodo sunt non pariatur enim sint.
                            Labore non dolore do veniam voluptate. Reprehenderit adipisicing fugiat adipisicing culpa veniam
                            fugiat adipisicing ipsum in fugiat cupidatat elit. Laboris quis cupidatat sunt voluptate.
                            Exercitation ad commodo quis labore cupidatat nostrud velit exercitation duis ex anim ullamco
                            nulla.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

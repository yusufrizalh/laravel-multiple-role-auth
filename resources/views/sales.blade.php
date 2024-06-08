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
                        <h3 class="text-bold text-primary">SALES DASHBOARD</h3>
                        <hr>
                        <p class="text-secondary">
                            Et dolor labore velit ipsum dolor. Ipsum esse sint proident labore amet est duis non do fugiat.
                            Esse pariatur cupidatat fugiat exercitation amet tempor aliquip incididunt cillum. Sit fugiat
                            excepteur aliquip cillum sit duis ullamco non ut sunt eu dolore. Et nulla elit sunt sunt
                            consectetur in pariatur sint. Esse excepteur laborum commodo pariatur sit ex magna dolor.

                            Nulla sunt ipsum laborum non nulla sit dolore. Elit dolor nulla nisi consequat. Esse culpa
                            consequat anim laboris mollit elit amet fugiat consequat minim tempor aute voluptate cillum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

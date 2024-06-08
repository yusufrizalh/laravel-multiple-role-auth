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
                        <h3 class="text-bold text-primary">SUPER ADMIN DASHBOARD</h3>
                        <hr>
                        <p class="text-secondary">
                            Magna mollit id duis eu reprehenderit veniam eiusmod velit proident id sunt. Sit enim
                            consectetur consectetur ipsum ipsum veniam elit Lorem commodo sunt non pariatur enim sint.
                            Labore non dolore do veniam voluptate. Reprehenderit adipisicing fugiat adipisicing culpa veniam
                            fugiat adipisicing ipsum in fugiat cupidatat elit. Laboris quis cupidatat sunt voluptate.
                            Exercitation ad commodo quis labore cupidatat nostrud velit exercitation duis ex anim ullamco
                            nulla.

                            Eiusmod qui magna qui fugiat minim excepteur voluptate. Occaecat laborum nulla reprehenderit
                            velit est velit. Et laboris ea id reprehenderit laboris nostrud id Lorem cillum enim sit
                            incididunt tempor esse. Sunt proident elit adipisicing ad in fugiat nulla laboris esse aliqua
                            nostrud enim.

                            Anim incididunt nisi sunt ullamco sunt cupidatat aliqua aliquip esse velit quis sunt mollit
                            dolor. Veniam reprehenderit nisi officia reprehenderit et sit dolor magna fugiat voluptate
                            magna. Velit et fugiat dolore non magna laboris labore commodo sint excepteur et. Incididunt
                            quis consequat amet id labore in proident ullamco mollit.

                            Nostrud deserunt consectetur eiusmod Lorem reprehenderit. Occaecat et irure cillum pariatur id
                            culpa esse ipsum elit consectetur reprehenderit. Nostrud laborum do dolor magna nulla veniam
                            labore culpa id sint culpa in. Sunt aute velit cupidatat sunt quis. Pariatur tempor cillum est
                            sit laboris est irure. Deserunt exercitation incididunt ea laborum ipsum culpa in commodo veniam
                            est. Labore consectetur anim exercitation nisi eiusmod dolor ut commodo.

                            Cillum Lorem officia nisi aute culpa occaecat proident ullamco. Cillum nulla fugiat
                            reprehenderit pariatur irure anim dolor reprehenderit pariatur non nostrud sunt irure
                            exercitation. Exercitation mollit laboris ad laboris duis aliquip incididunt ut. Ipsum do nisi
                            officia consequat excepteur sint duis enim officia duis ipsum.

                            Irure dolor proident ipsum fugiat cupidatat fugiat duis non reprehenderit anim. Fugiat magna
                            commodo ullamco aute cupidatat labore commodo ex cillum pariatur reprehenderit dolore amet. Quis
                            ex non aliqua pariatur nostrud veniam tempor. Velit irure incididunt dolor magna officia in.
                            Magna non aliqua et amet ipsum do proident mollit cupidatat dolore ullamco exercitation
                            incididunt. Nulla do officia occaecat cillum sint et id ex deserunt et laborum irure ipsum.

                            Incididunt minim in qui nulla enim excepteur quis do amet aliquip pariatur consectetur esse.
                            Excepteur et ex eu quis amet Lorem consequat dolore pariatur fugiat esse. Nisi cillum in duis
                            nulla elit.

                            Enim qui esse consequat sit nulla ut minim eiusmod et ad. Aute dolore nostrud culpa esse elit
                            aliquip in est. Elit qui non cupidatat non est magna pariatur do aliqua.

                            Esse enim cupidatat incididunt sint mollit esse duis aliquip amet. Aliquip enim enim consequat
                            aute. Aute ea non aliquip amet in cupidatat. Do quis elit voluptate voluptate esse ut eu fugiat
                            deserunt voluptate cillum. Culpa consectetur enim ullamco non Lorem do amet mollit anim ea
                            tempor pariatur dolor nostrud.

                            Laboris do consectetur ipsum ut qui laborum non consequat aliqua veniam laborum ipsum quis.
                            Excepteur amet nisi fugiat dolore esse ullamco velit do esse elit ea. Cupidatat laborum fugiat
                            in deserunt enim enim elit esse. Ad deserunt ad enim tempor exercitation consequat ad ut nisi.
                            Fugiat tempor adipisicing ex nisi elit id aliquip. Eu et est exercitation minim cupidatat quis
                            incididunt ea reprehenderit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('base') @section('title', 'dashboard') @section('content')

<section style="background-color: #eee">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav
                    aria-label="breadcrumb"
                    class="bg-light rounded-3 p-3 mb-4"
                >
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href=" {{route('characters.index')}}">
                                RPGManager
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#"> Player </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Profile
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2.webp"
                            alt="avatar"
                            class="rounded-circle img-fluid"
                            style="width: 150px"
                        />
                        <h5 class="my-3">
                            {{ Auth::user()->firstname }}
                            {{Auth::user()->lastname}}
                        </h5>
                        <p class="text-muted mb-1">
                            Player n°: {{ Auth::user()->id }}
                        </p>
                        <p class="text-muted mb-3">
                            Pseudo : {{ Auth::user()->nickname}}
                        </p>
                        <p class="text-muted mb-1">
                        Nombre de personnage crée : 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Pseudo</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-muted mb-0">
                                    {{ Auth::user()->nickname }}
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nom</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group has-validation">
                                    <input
                                        type="text"
                                        value="{{ Auth::user()->lastname }}"
                                        class="form-control @if($errors->has('lastname')) is-invalid @endif"
                                        name="lastname"
                                        id="lastname"
                                        placeholder=""
                                    />

                                    @if($errors->has('lastname'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('lastname') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Prénom</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group has-validation">
                                    <input
                                        type="text"
                                        value="{{ Auth::user()->lastname }}"
                                        class="form-control @if($errors->has('lastname')) is-invalid @endif"
                                        name="lastname"
                                        id="lastname"
                                        placeholder=""
                                    />
                                    @if($errors->has('lastname'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('lastname') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mot de passe</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group has-validation">
                                    <input
                                        type="text"
                                        value=""
                                        class="form-control @if($errors->has('lastname')) is-invalid @endif"
                                        name="password"
                                        id="password"
                                        placeholder="********" />
                                    @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr />
                        <button type="button" class="btn btn-primary">
                            Mettre à jour
                        </button>
                        <button type="button" class="btn btn-danger">
                            Supprimer le compte
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

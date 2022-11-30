@extends('base')

@section('content')
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5 mb-5">
                <div class="card">
                    <h3 class="card-header text-center bg-primary">Register User</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            
{{--                        Début du prénom  --}}
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Prénom" id="firstname" class="form-control" name="firstname"
                                    required autofocus>
                                @if ($errors->has('firstname'))
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                @endif
                            </div>
{{--                        Fin du prénom  --}}

{{--                         Début du nom  --}}
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Nom" id="lastname" class="form-control" name="lastname"
                                    required autofocus>
                                @if ($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                @endif
                            </div>
{{--                        Fin du nom    --}}   

{{--                         Début du nom  --}}
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Pseudo" id="nickname" class="form-control" name="nickname"
                                    required autofocus>
                                @if ($errors->has('nickname'))
                                <span class="text-danger">{{ $errors->first('nickname') }}</span>
                                @endif
                            </div>
{{--                        Fin du nom    --}}   


                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>



                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
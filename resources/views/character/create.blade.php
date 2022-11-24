@extends('base')

@section('title', 'RPG Manager / Création du personnage')

@section('content')

<section class="pt-5 pt-md-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="mb-2"><i class="fa-solid fa-person fa-2xl"></i><i class="fa-solid fa-plus"></i></h2> 
            </div>
        </div>
    </div>
</section>

    <h2>Nouveau personnage</h2>


    <form method="post" action="{{ route('characters.store') }}">
        @csrf

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errorMessage)
                        <li>{{ $errorMessage }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('name') }}" class="form-control
                @if($errors->has('name')) is-invalid @endif
                " name="name" id="name" placeholder="" />

                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <div class="input-group has-validation">
                <textarea type="text" value="{{ old('description') }}" class="form-control
                @if($errors->has('description')) is-invalid @endif
                " description="description" id="description" placeholder="" />
                </textarea>

                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Spécialité</label>
            <select class="form-control form-control-lg">
                <div class="input-group has-validation">
                    <option selected>Guerrier</option>
                    <option value="Mage">Mage</option>
                    <option value="Druide">Druide</option>
                    <option value="Assassin">Assassin</option>
                    <option value="Berserker">Berserker</option>
                    <option value="Archer">Archer</option>
            </select>



                <input type="text" value="{{ old('type' )}}" class="form-control
                @if($errors->has('type')) is-invalid @endif " 
                name="type" id="type" placeholder="" />

                @if($errors->has('type'))
                <div class="invalid-feedback">
                    {{ $errors->first('type') }}
                </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="magic" class="form-label">Magie</label>
            <div class="input-group has-validation">
                <input type="number" value="{{ old('magic' )}}" class="form-control
                @if($errors->has('magic')) is-invalid @endif " 
                name="magic" id="magic" placeholder="" />

                @if($errors->has('magic'))
                <div class="invalid-feedback">
                    {{ $errors->first('magic') }}
                </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="strength" class="form-label">Force</label>
            <div class="input-group has-validation">
                <input type="number" value="{{ old('strength' )}}" class="form-control
                @if($errors->has('strength')) is-invalid @endif " 
                name="strength" id="strength" placeholder="" />

                @if($errors->has('strength'))
                <div class="invalid-feedback">
                    {{ $errors->first('strength') }}
                </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="agility" class="form-label">Agilité</label>
            <div class="input-group has-validation">
                <input type="number" value="{{ old('agility' )}}" class="form-control
                @if($errors->has('agility')) is-invalid @endif " 
                name="agility" id="agility" placeholder="" />

                @if($errors->has('agility'))
                <div class="invalid-feedback">
                    {{ $errors->first('agility') }}
                </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="intelligence" class="form-label">Intelligence</label>
            <div class="input-group has-validation">
                <input type="number" value="{{ old('intelligence' )}}" class="form-control
                @if($errors->has('intelligence')) is-invalid @endif " 
                name="intelligence" id="intelligence" placeholder="" />

                @if($errors->has('intelligence'))
                <div class="invalid-feedback">
                    {{ $errors->first('intelligence') }}
                </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="lifepoint" class="form-label">Point de vie</label>
            <div class="input-group has-validation">
                <input type="number" value="{{ old('lifepoint' )}}" class="form-control
                @if($errors->has('lifepoint')) is-invalid @endif " 
                name="lifepoint" id="lifepoint" placeholder="" />

                @if($errors->has('lifepoint'))
                <div class="invalid-feedback">
                    {{ $errors->first('lifepoint') }}
                </div>
                @endif
            </div>
        </div>
        
        
        <button type="submit" class="btn btn-primary">Créer un nouveau personnage</button>
    </form>

@endsection

@extends('base')

@section('title', 'RPG Manager / Création du personnage')

@section('content')

<section class="container pt-5 pt-md-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="mb-2"><i class="fa-solid fa-hat-wizard fa-2xl"></i><i class="fa-solid fa-plus"></i></h2> 
            </div>
        </div>
    </div>


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
                <input required type="text" value="{{ old('name') }}" class="form-control
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
                " name="description" id="description" placeholder="" />
                </textarea>

                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label for="speciality" class="form-label">Spécialité</label>
            <div class="input-group has-validation">
                <select required id="speciality" name="speciality" class="form-control form-control-lg @if($errors->has('speciality')) is-invalid @endif">
                        <option selected>{{old('speciality')}}</option>
                        <option value="Guerrier">Guerrier</option>
                        <option value="Mage">Mage</option>
                        <option value="Druide">Druide</option>
                        <option value="Assassin">Assassin</option>
                        <option value="Berserker">Berserker</option>
                        <option value="Archer">Archer</option>
                </select>
                @if ($errors->has('speciality'))
                <div class="invalid-feedback">
                    {{ $errors->first('speciality')}}
                </div>    
                @endif
            </div>
        </div>


            <div class="row mb-5">
                <div class="col mb-3">
                    <label for="magic" class="form-label">Magie (MAG)</label>
                    <div class="input-group has-validation">
                        <input readonly type="number" value="{{ rand(1, 14) }}" class="bg-secondary form-control text-white" 
                        name="magic" id="magic" placeholder="" />
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="strength" class="form-label">Force (FOR)</label>
                    <div class="input-group has-validation">
                        <input readonly type="number" value="{{ rand(1, 14) }}" class="bg-secondary form-control text-white" 
                        name="strength" id="strength" placeholder="" />
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="agility" class="form-label">Agilité (AGI) </label>
                    <div class="input-group has-validation">
                        <input readonly type="number" value="{{ rand(1, 14) }}" class="bg-secondary form-control text-white" 
                        name="agility" id="agility" placeholder="" />
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="intelligence" class="form-label">Intelligence (INT)</label>
                    <div class="input-group has-validation">
                        <input readonly type="number" value="{{ rand(1, 14) }}" class="bg-secondary form-control text-white" 
                        name="intelligence" id="intelligence" placeholder="" />
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="lifepoint" class="form-label">Point de vie (PV)</label>
                    <div class="input-group has-validation">
                        <input readonly type="number" value="{{ rand(20, 50) }}" class="bg-secondary form-control text-white" 
                        name="lifepoint" id="lifepoint" placeholder="" />
                    </div>
                    
                </div>
            </div>

     
        <button type="submit" class="mb-5 btn btn-primary btn-lg">Créer un nouveau personnage</button>

        
    </form>
</section>
@endsection

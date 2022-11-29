@extends('base')

@section('title', 'RPGManager / Edition d\'un personnage')

@section('content')

<div class="container">        
<form method="post" action="{{ route('characters.update', $characters->id) }}">
    @csrf
    @method('PUT')

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $errorMessage)
            <li>{{ $errorMessage }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    

    <div class="bg-light rounded-3 p-3 p-sm-4 mt-5">
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <div class="input-group has-validation">
                <input required type="text" value="{{ old('name', $characters->name) }}" class="form-control
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
                <textarea class="form-control
                @if($errors->has('description')) is-invalid @endif" 
                name="description" id="description" rows="4">
                {{ old('description', $characters->description) }}
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
{{--                         <option selected>{{old('speciality', $characters->speciality)}}</option> --}}
{{-- @if(old('speciality', $characters->speciality) == "Mage") 
selected="selected" 
@endif value="Mage">Mage</option> --}}
                @foreach ( $specialities as $speciality )
                    <option  
                    @if(old('speciality', $characters->speciality) == $speciality) 
                        selected="selected" 
                    @endif

                    value="{{$speciality}}">{{$speciality}}
                    </option>
                @endforeach


{{--                         <option value="Guerrier">Guerrier</option>
                        <option 
                        @if(old('speciality', $characters->speciality) == "Mage") 
                        selected="selected" 
                        @endif value="Mage">Mage</option>
                        <option value="Druide">Druide</option>
                        <option value="Assassin">Assassin</option>
                        <option value="Berserker">Berserker</option>
                        <option value="Archer">Archer</option> --}}

                </select>
                @if ($errors->has('speciality'))
                <div class="invalid-feedback">
                    {{ $errors->first('speciality')}}
                </div>    
                @endif
            </div>
        </div>

        <div class="mb-3">
            <table class="table bg-body shadow rounded-2 p-2">
                <thead>
                    <tr>
                        <th scope="col">MAG(Magie)</th>
                        <th scope="col">FOR(Force)</th>
                        <th scope="col">AGI(Agilité)</th>
                        <th scope="col">INT(Intelligence)</th>
                        <th scope="col">PV(Point de vie)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                {{--    <td>{{old('magic', $characters->magic)}}</td>
                        <td>{{old('stregnth', $characters->strength)}}</td>
                        <td>{{old('agility', $characters->agility)}}</td>
                        <td>{{old('intelligece', $characters->intelligence)}}</td>
                        <td>{{old('lifepoint', $characters->lifepoint)}}</td> --}}
                        <td>{{$characters->magic}}</td>
                        <td>{{$characters->strength}}</td>
                        <td>{{$characters->agility}}</td>
                        <td>{{$characters->intelligence}}</td>
                        <td>{{$characters->lifepoint}}</td>

                    </tr>
                </tbody>
            </table>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour le personnage</button>
    </div>
    



</form>
</div> 
@endsection
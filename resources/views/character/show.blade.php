@extends('base') @section('title', 'RPG Manager / Personnage')
@section('content')

<div class="bg-light rounded-3 position-relative p-3 p-sm-4 mt-5">
    <h1>{{ $characters->name }}</h1>

    <dl>
        <dt>Description</dt>
        <dd>{{ $characters->description}}</dd>
        <dt>Spécialité</dt>
        <dd>{{ $characters->speciality }}</dd>
    </dl>

    <div class="mb-3">
        <table class="table bg-body shadow rounded-2 p-2">
            <thead>
                <tr>
                    <th scope="col">MAG</th>
                    <th scope="col">FOR</th>
                    <th scope="col">AGI</th>
                    <th scope="col">INT</th>
                    <th scope="col">PV</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$characters->magic}}</td>
                    <td>{{$characters->strength}}</td>
                    <td>{{$characters->agility}}</td>
                    <td>{{$characters->intelligence}}</td>
                    <td>{{$characters->lifepoint}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <a
            class="btn btn-primary mb-3"
            href="{{ route('characters.edit', $characters->id) }}"
            >Editer</a
        >
        <form
            method="post"
            action="{{ route('characters.destroy', $characters->id) }}"
        >
            @csrf @method('DELETE')
            <div class="row">
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </div>
        </form>
    </div>
</div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    
    static protected $specialities = [
        "Guerrier", 
        "Mage", 
        "Druide", 
        "Assassin", 
        "Berserker", 
        "Archer"
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('character.index')
            ->with([
                'characters' => Character::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('character.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharacterRequest $request)
    {
        $data = $request->toArray(); 
        $data['magic'] = rand(1,14);
        $data['strength'] = rand(1,14);
        $data['agility'] = rand(1,14);
        $data['intelligence'] = rand(1,14);
        $data['lifepoint'] = rand(20, 50);

/*         $data["user_id"] =   */

        Character::create($data);
        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return view('character.show')
        ->with([
            'characters' => $character,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        return view('character.edit')
        ->with([ 
            'specialities' => static::$specialities,
            'characters' => $character,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CharacterRequest $request, Character $character)
    {
        $character->fill($request->toArray());
        $character->save();

        return redirect()->route('characters.show', $character->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return redirect()->route('characters.index');
    }

    
    /** 
     * Créer des statistiques aléatoire pour un personnage. 
     * 
     * 
     */

    public function regenerate(Character $character)
    {
        $data = [];
        $data['magic'] = rand(1,14);
        $data['strength'] = rand(1,14);
        $data['agility'] = rand(1,14);
        $data['intelligence'] = rand(1,14);
        $data['lifepoint'] = rand(20, 50);

        $character->fill($data);
        $character->save();

        return redirect()->route('characters.show', $character->id);
    }
    
}

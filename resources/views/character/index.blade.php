@extends('base')

@section('title', 'Characters')

@section('content')

<section class="mb-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12 text-center mt-5">
                <h2 class="mb-1">Tous les personnages</h2> 
{{--                 @auth    --}}  
                <a href="{{ route('characters.create') }}" class="btn btn-primary mb-5"><i class="fa-solid fa-plus"></i></a>
{{--                 @endauth --}}
            </div>
        </div>



        <div class="row g-4">

        @foreach ($characters as $character)
        
            <!-- Package item -->
            <div class="col-sm-6 col-xl-3">
                <!-- Card START -->
                <div class="card card-img-scale overflow-hidden bg-transparent">
                    <div class="card-img-scale-wrapper rounded-3">
                        <!-- Card Image -->
                        <img src="https://img.redbull.com/images/q_auto,f_auto/redbullcom/2014/12/23/1331696524285_2/meet-the-priest" class="card-img" alt="">
                        <!-- Overlay -->
                        <div class="card-img-overlay d-flex flex-column z-index-1 p-4">
                            <!-- Card overlay top -->
                            <div class="d-flex justify-content-between">
                                <span class="badge text-bg-dark">{{$character->speciality}}</span>
                            </div>
                        </div>
                    </div> 
                    
                    <!-- Card body -->
                    <div class="card-body px-2">
                        <!-- Title -->
                        <h5 class="card-title"><a href="{{ route('characters.show', $character->id) }}" class="stretched-link"></a>{{$character->name}} </h5>
                        <!-- Content -->
                        <div class="hstack gap-1">
                            <span class="h5 mb-2 text">Description</span>
                        </div>
                        <div class="mb-4">
                            <small> {{$character->description}} </small>
                        </div>
                        <div>
                            <table class="table">
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
                                    <td>{{$character->magic}}</td>
                                    <td>{{$character->strength}}</td>
                                    <td>{{$character->agility}}</td>
                                    <td>{{$character->intelligence}}</td>
                                    <td>{{$character->lifepoint}}</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
                <!-- Card END -->
            </div>      
            
        @endforeach 
        </div> <!-- Row END -->
    </div>
</section>

@endsection

<x-layouts>
  <x-slot name='title'> Risulati ricerca | Getabeer </x-slot>
  <x-slot name='description'>Risulati ricerca effettuata per nome birreria,indirizzo o birre disponibili</x-slot>

    <section class="container my-5 py-5">
        <div class="row text-center">
          <div class="col-12 mb-5">
            <h1 class="mb-5 text-white ">Risulati ricerca per:{{$q}}</h1>
          </div>
        </div>
        <div class="row px-5">
          @foreach ($breweries as $brewery)
          <div class="col-4"> 
            <div class="card-custom">
              <img src="{{Storage::url($brewery->img)}}" alt="{{$brewery->name}}" class="img-fluid rounded" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$brewery->name}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{route('brewery.details',['id' => $brewery->id])}}" class="btn btn-warning ml-auto">Scoprila</a>
              </div>
            </div>
          </div>              
          @endforeach  
        </div>      
      </section>
</x-layouts>
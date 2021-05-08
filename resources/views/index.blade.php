<x-layouts>
  <x-slot name='title'>Home | Getabeer </x-slot>
  <x-slot name='description'>Homepage di getabeer</x-slot>
  
  <!-- Header -->
  <header class="masthead mb-5">
    <div class="container mb-5 ">
      <div class="row">
        <div class="col-12 col-md-12 text-left mt-5 ">
          <h1 class=" mt-5 pt-5 display-1 font- text-white text-shadow">Get a Beer!</h1>
          <p class=" h2 mt-3 text-white">Il portale delle migliori birrerie in città</p>
          <form action="{{route('search')}}"  method="GET" class="mt-5">
            <input class="search-bar" type="text" name="q" placeholder="Cerca birreria..." >
            <button class=" btn btn-search" type="submit"><i class="fas fa-search "></i></button>
          </form>
        </div>          
      </div>
    </div>
  </header>
  
  <section class="beer">
    <div class="container my-5 py-5  ">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
        </div>
        <div class="col-12 col-md-6 pt-5 mt-5">
          <h2 class="text-white py-3 h1 mb-4">Dove sarà la tua prossima birra?</h2>
          <p class="text-white h3">Get a beer è il primo portale con centinaia di birrerie tra cui scegliere. </p>
          <p class="text-white h3 py-3">Scopri le birrerie della tua citta e decidi dove andare a bere la prossima birra..</p>
          <a href="{{route('brewery.breweries')}}"> <button class="btn btn-warning btn-lg shadow mt-5">Scopri tutte le birrerie</button></a>
         
        </div>
      </div>
    </div>
  </section> 
  
  <section class="pt-5 mt-5 px-3">
    <div class="row pt-5 mt-5">
      <div class="col-12 pt-5 mt-5">
        <h3 class="text-white text-center h2">Le migliori birre scelte da noi</h3>
      </div>
    </div>
    <div class="row justify-content-between my-4 py-4">
      <div class="col-6 col-lg-2 ">
        <img class="img-fluid ml-4 beer-logo " width="150"  src="./img/ceres.jpeg" alt="Logo-birra">
      </div>
      <div class="col-6 col-lg-2 ">
        <img class="img-fluid beer-logo scale-in-ver-center"  width="170" src="./img/birra1.png" alt="Logo-birra">
      </div>
      <div class="col-6 col-lg-2 pl-5">
        <img class="img-fluid beer-logo scale-in-ver-center" width="150"  src="./img/birra2.png" alt="Logo-birra">
      </div>
      <div class="col-6 col-lg-2">
        <img class="img-fluid beer-logo scale-in-ver-center" width="150"  src="./img/birra3.png" alt="Logo-birra">
      </div>
    </div>
  </section>
  
  
  
  <section class="container my-5 py-5">
    <div class="row text-center">
      <div class="col-12 mb-5">
        <h1 class="mb-5 text-white ">Le ultime Birrerie inserite...</h1>
      </div>
    </div>
    <div class="row px-5">
      @foreach ($breweries as $brewery)
      <div class="col-12 col-md-4 py-3"> 
        <div class="card-custom">
          <img src="{{Storage::url($brewery->img)}}" alt="{{$brewery->name}}" class="img-fluid rounded" alt="...">
          <div class="card-body">
            <h3 class="card-title">{{$brewery->name}}</h3>
            <p class="card-text h5"><i class="fas fa-map-marker-alt mr-2"></i>{{$brewery->city}} </p>
            <p class="card-text ml-4">{{$brewery->address}}</p>
            <a href="{{route('brewery.details',['id' => $brewery->id])}}" class="btn btn-warning float-right">Scoprila</a>
          </div>
        </div>
      </div>              
      @endforeach  
    </div>      
  </section>
  
  <!-- Call to Action -->
  <section class="container my-5 py-5 text-center text-white border-custom">
    <div class="row">
      <div class="col-12">
        <h1 class="mb-4">Conosci una nuova birreria? Segnalacela</h1>
        <p class="text-secondary h3">Siamo aperti a ricevere le vostre segnalazioni di nuove birrerie e dopo un'attenta esaminazione verranno inserite</p>
        <a href="{{route ('report')}}" class="btn btn-lg btn-warning mt-3">Segnala!</a>
      </div>
    </div>
  </section>

  
</x-layouts>

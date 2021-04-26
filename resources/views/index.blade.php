<x-layouts>

    <!-- Header -->
    <header class="masthead mb-5">
      <div class="container mb-5 ">
        <div class="row">
          <div class="col-12 col-md-12 text-left mt-5 ">
            <h1 class=" mt-5 pt-5 display-1 font- text-white text-shadow">Get a Beer</h1>
            <p class=" h2 mt-3 text-white">Il portale delle migliori birrerie</p>
          </div>          
        </div>
      </div>
    </header>

    <section class="beer">
      <div class="container my-5 py-5  ">
        <div class="row align-items-center">
          <div class="col-6">
          </div>
          <div class="col-6 pt-5 mt-5 ">
            <h2 class="text-white py-3 h1 mb-4">Dove sarà la tua prossima birra?</h2>
            <p class="text-white h3">Get a beer è il primo portale con centinaia di birrerie tra cui scegliere. </p>
            <p class="text-white h3 py-3">Scopri le birrerie della tua citta e decidi dove andare a bere la prossima birra..</p>
            <button class="btn btn-warning shadow mt-5">Scopri tutte le birrerie</button>
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
          <img class="img-fluid ml-4 " width="150"  src="./img/ceres.jpeg" alt="">
        </div>
        <div class="col-6 col-lg-2 ">
          <img class="img-fluid "  width="170" src="./img/birra1.png" alt="">
        </div>
        <div class="col-6 col-lg-2 pl-5">
          <img class="img-fluid" width="150"  src="./img/birra2.png" alt="">
        </div>
        <div class="col-6 col-lg-2">
          <img class="img-fluid" width="150"  src="./img/birra3.png" alt="">
        </div>
      </div>
    </section>

   
    
    <section class="container my-5 py-5">
      <div class="row text-center">
        <div class="col-12 mb-5">
          <h2 class="mb-5 text-white h2">Le ultime Birrerie segnalate da voi...</h2>
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
          
         
       
        {{-- <div class="content-section-heading text-center">
          <h2 class="mb-5 text-white h2">Le ultime Birrerie segnalate da voi...</h2>
        </div>
        <div class="row no-gutters px-5">
          @foreach ($breweries as $brewery)
          <div class="col-lg-6">
            <a class="portfolio-item" href="{{route('brewery.details',['id' => $brewery->id])}}">
              <div class="caption">
                <div class="caption-content">
                  <div class="h2">{{$brewery->name}}</div>
                  <p class="mb-0">{{$brewery->description}}</p>
                </div>
              </div>
              <img class="img-fluid" src="{{Storage::url($brewery->img)}}" alt="{{$brewery->name}}">
            </a>
          </div>
          @endforeach       
        </div> --}}
      
    </section>

    <!-- Call to Action -->
    <section class="content-section bg-primary text-white">
      <div class="container text-center">
        <h2 class="mb-4">Conosci una nuova birreria? Segnalacela</h2>
        <a href="{{route ('report')}}" class="btn btn-xl btn-dark">Segnala!</a>
      </div>
    </section>

    <!-- Map -->
{{--     <div id="contact" class="map">
      <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br />
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </div> --}}

</x-layouts>

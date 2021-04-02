<x-layouts>

    <!-- Header -->
    <header class="masthead mb-5">
      <div class="container mb-5 ">
        <div class="row  ">
          <div class="col-12 col-md-12 text-left ">
            <h1 class=" mt-5 pt-5 display-1 font- text-white text-shadow">Get a Beer</h1>
            <p class=" h2 mt-3 text-white">Le migliori birrerie presenti nella tua città</p>
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
            <h2 class="text-white py-2">Dove sara la prossima birra?</h2>
            <p class="text-white h3">Get a beer e il primo portale con centinaia di birrerie tra cui scegliere. </p>
            <p class="text-white h3 py-3">Scopri le birrerie della tua citta e decidi dove andare a bere la prossima birra..</p>
            <button class="btn btn-warning shadow">Scopri tutte le birrerie</button>
          </div>
        </div>
      </div>
    </section> 

    <section class="pt-5 mt-5">
      <div class="row pt-5 mt-5">
        <div class="col-12 pt-5 mt-5">
          <h3 class="text-white text-center">Le migliori birre scelte da noi</h3>
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


  
   
    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h2 class="mb-5">Ultime Birrerie aggiunte</h2>
        </div>
        <div class="row no-gutters">
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
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="content-section bg-primary text-white">
      <div class="container text-center">
        <h2 class="mb-4">Conosci una nuova birreria? Segnalacela</h2>
        <a href="{{route ('report')}}" class="btn btn-xl btn-dark">Segnala!</a>
      </div>
    </section>

    <!-- Map -->
    <div id="contact" class="map">
      <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br />
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </div>

</x-layouts>

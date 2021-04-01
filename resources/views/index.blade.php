<x-layouts>

    <!-- Header -->
    <header class="masthead">
      <div class="container  h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-right ">
            <h1 class=" display-2 font- text-white text-shadow">Get a Beer</h1>
            <p class=" h4 mt-3 text-white">Le migliori birrerie presenti nella tua città</p>
          </div>
        </div>
      </div>
    </header>

  
   
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

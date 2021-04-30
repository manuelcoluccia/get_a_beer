<x-layouts>

  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h2 class="mb-5">Tutte le Birrerie</h2>
      </div>
      <div class="row no-gutters">
        @foreach ($breweries as $brewery)
        <div class="col-lg-6">
          <a class="portfolio-item" href="{{route('brewery.details',['id' => $brewery->id])}}">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">{{$brewery->name}}</div>
                <p class="mb-0">{{$brewery->description}}</p>
                <p>{{$brewery->city}}</p>
                <p>{{$brewery->address}}</p>
                @foreach ($brewery->beers as $beer)
                  <span>{{$beer->name}},</span>   
                @endforeach
                
                @if ($brewery->visible == 0)
                    <form action="{{route('approved', ['id' => $brewery->id])}}" method="POST">
                      @csrf
                      <button type="submit">Rendila visibile</button>
                    </form>
                    <form action="{{route('brewery.destroy', ['id' => $brewery->id])}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit">Elimina</button>
                    </form>
                @endif

              </div>
            </div>
            <img class="img-fluid" src="{{Storage::url($brewery->img)}}" alt="{{$brewery->name}}">
          </a>
        </div>
        @endforeach       
      </div>
    </div>
  </section>
 
</x-layouts>
 

  

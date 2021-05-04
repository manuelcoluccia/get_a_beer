<x-layouts>
  
  <section class="container py-5 my-5">
    <div class="row">
      <div class="col-12">
        <h2 class="mt-5 text-center text-white">Tutte le Birrerie</h2>
      </div>
    </div>
    <div class="row ">
      @foreach ($breweries as $brewery)
      <div class="col-12 col-md-6 pb-4 mb-3">
        
        <div class="blog-card spring-fever">
          <img class="img-fluid" src="{{Storage::url($brewery->img)}}" alt="{{$brewery->name}}">
          <div class="title-content">

            @if ($brewery->visible == 0)
            <div>
              <form action="{{route('approved', ['id' => $brewery->id])}}" method="POST">
                @csrf
                <button type="submit">Rendila visibile</button>
              </form>
              <form action="{{route('brewery.destroy', ['id' => $brewery->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Elimina</button>
              </form>
            </div> 
            @endif

            <h3><a href="#">{{$brewery->name}}</a></h3>
          </div>
          <div class="card-info">
            <p>{{$brewery->description}}</p>
            <a href="{{route('brewery.details',['id' => $brewery->id])}}">Scopri<span class="licon icon-arr icon-black"></span></a>
          </div>
          <div class="utility-info">
            <h5 class="ml-3"><i class="fas fa-map-marker-alt mr-2"></i>{{$brewery->city}} <span class="ml-3">{{$brewery->address}}</span></h5>
          </div>
          <div class="gradient-overlay"></div>
          <div class="color-overlay"></div>
        </div><!-- /.blog-card -->
      </div>
      @endforeach
    </div>
    
  </section>    
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  {{--         <div class="col-lg-6">
    <a class="portfolio-item" href="{{route('brewery.details',['id' => $brewery->id])}}">
      <div class="caption">
        <div class="caption-content">
          <div class="h2</div>
            <p class="mb-0">{{$brewery->description}}</p>
            <p>{{$brewery->city}}</p>
            <p>{{$brewery->address}}</p>
            @foreach ($brewery->beers as $beer)
            <span>{{$beer->name}},</span>   
            @endforeach--}}
            


</x-layouts>




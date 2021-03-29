<x-layouts>
   
    <style>
        .masthead{
            /* background-image:linear-gradient(120deg , rgba(220,170,78,0.1) 0px ,  rgba(246, 245, 243, 0.1) 100%), url("{{Storage::url($brewery->img)}}"); */
            height: 1000px;

        }
      </style>
      
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1 ">{{$brewery->name}}</h1>
            <h3 class="mb-5 ">
            <em>{{$brewery->description}}</em>
            </h3>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href={{route('brewery.breweries')}}>Tutte le birrerie</a>
        </div>
        <div class="overlay"></div>
    </header>

    @auth
        @if (Auth::user()->is_Admin)
        <div class="container">
            <h2 class="text-center">Edit birreria</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-12">
                <form method="POST" action="{{route('brewery.update', ['id'=>$brewery->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                        <label class="" for="name">Nome birreria</label>
                            <input type="text" class="form-control mb-3" id="name" required name="name" value={{old('name', $brewery->name)}}>            
                        <label class="" for="description">Descrizione</label>
                            <textarea class="form-control mb-3" name="description" id="description" cols="30" rows="10">{{old('description', $brewery->description)}}</textarea>
                        <div class="form-group row justify-content-between">
                            <label class="" for="lat">Latitudine</label>
                                <input type="text" class="form-control mb-3 col-12 col-md-4" id="lat"  name="lat" value={{old('lat',$brewery->lat)}}>            
                            <label class="" for="lon">Longitudine</label>
                                <input type="text" class="form-control mb-3 col-12 col-md-4" id="lon"  name="lon" value={{old('lon',$brewery->lon)}}> 
                        </div>           
                        <label class="" for="img">Immagine</label>
                            <div>
                                <input type="file" class="mb-3" id="img" name="img"></div>         
                            </div> 
                        <button type="submit" class="btn btn-success">Salva</button>
                    </form>
                    <form method="POST" action="{{route('brewery.destroy',['id'=>$brewery->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger float-right">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    @endauth

     <!-- Map -->
     <div id="contact" class="map m-5">
        <iframe  width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
          <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
      </div>

     
         
     
   




</x-layouts>
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

    <!--Comments-->
    <section class="content-section mt-5" id="comments">
        <div class="container mt-5">
            <div class="content-section-heading text-center ">
                <h2 class="mb-5">Scopri cosa pensano gli utenti della birreria <strong>{{$brewery->name}}</strong></h2>
                <h3 class="text-secondary">Commenti</h3>
            </div>
            <div class="row no-glutters mt-3">
                @foreach ($brewery->comments as $comment)
                    <div class="col-lg-6">
                        <div class="p-3 mb-2 bg-dark text-white">
                            <span class="caption">
                                <span class="capiton-content">
                                    <h4>{{$comment->user->name}}</h4>
                                    <p class=" font-italic mb-0">{{$comment->comment}}</p>
                                </span>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @auth
        <div class="container mt-5">
            <h2>Lascia un commento</h2>
            <form action="{{route('brewery.comments.add' , ['id' => $brewery->id])}}" method="POST">
                @csrf
                <div class="row">                   
                    <div class="col-10">
                        <textarea name="comment" cols="55" rows="2">{{old('comment')}}</textarea>
                        <button type="submit" class="btn btn-primary mb-4 ml-3">Invia</button>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    </div>
                </div>
            </form>
        </div>
    @endauth

  

     <!-- Map -->
     <section id="contact" class="map m-5">
        <div id="brewery-map" class="img-fluid w-100" style="height:500px;"
            lat="{{$brewery->lat}}"
            lon="{{$brewery->lon}}"
            name="{{$brewery->name}}"
            description="{{$brewery->description}}"
        >
        </div>
     </section>



</x-layouts>

@push('scripts')

<script async 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPAw37yaMT2i92kvX9Zd4vp8Rc7rs_PD8&callback=initMap">
</script>



<script>
    $(function () {
        
        let brewery_map = $("#brewery-map");

        if (! brewery_map){

            return;
        }

        let lat = brewery_map.attr('lat');
        let lon = brewery_map.attr('lon');

        if (!lon || !lat){

            return;
        }

        let positon = new google.maps.LatLng(lat,lon);

        let position = new google.maps.Map(
            document.getElementById('brewery-map'),
            {center: position , zoom:18}
        );

        let marker = new google.maps.Marker({
            position: position,
            icon: '/img/beer-marker.png',
            map : map,
        });

        let name = brewery_map.attr('name');
        let description = brewery_map.attr('description');
        let infowindow = new google.maps.InfoWindow({
            content: '<strong>' + name + '</strong><br><i>' + description + '</i>'
        });

        marker.addListener('click', funtion(){
            infowindow.open(map, marker);
        });
    });

</script>

@endpush
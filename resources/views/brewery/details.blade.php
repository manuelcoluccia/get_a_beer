<x-layouts>
    <x-slot name='title'>{{$brewery->name}} | Getabeer </x-slot>
    <x-slot name='description'>Pagina birreria {{$brewery->name}} in cui visualizzare le informazioni</x-slot>

    <div class="container mt-5 pt-2 my-md-5 py-md-5">
        <div class="row my-5">
            <div class="col-12 text-center">
                <h1 class="text-sec">{{$brewery->name}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="img-fluid brewery-img" src="{{Storage::url($brewery->img)}}" alt="">
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <h2 class=" text-sec">Descrizione</h2>
                <p class="text-white text-custom">{{$brewery->description}}</p>
                <h2 class="text-sec">Birre disponibili</h2>
                <ul>
                    @foreach ($brewery->beers as $beer)
                    <li class="text-white h5">{{$beer->name}}</li>
                    @endforeach
                </ul>
                <h2 class="text-sec">Località</h2>
                <p class="text-white text-custom">{{$brewery->address}} {{$brewery->city}}</p>

            </div>    
               
           
        </div>
    </div>
   
    

    <!--Comments-->
    <section class="content-section mt-5" id="comments">
        <div class="container mt-5">
            <div class="row  ">
                <div class="col-12 text-center">
                    <h2 class="mb-5 text-sec">Scopri cosa pensano gli utenti della birreria <strong>{{$brewery->name}}</strong></h2>
                </div>
            </div>
            <div class="row mt-3">
                @foreach ($brewery->comments as $comment)
                    <div class="col-12 col-lg-6">
                        <div class="p-3 mb-2 bg-dark text-white border-custom">
                            <span class="caption ">
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
            <h4 class="text-white">Lascia un commento</h4>
            <form action="{{route('brewery.comments.add' , ['id' => $brewery->id])}}" method="POST">
                @csrf
                <div class="row">                   
                    <div class="col-4">
                        <textarea name="comment" cols="65" rows="3">{{old('comment')}}</textarea>
                        <div>
                            <button type="submit" class="btn btn-warning float-lg-right">Invia</button>
                        </div>
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

{{-- @push('scripts')

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

@endpush --}}
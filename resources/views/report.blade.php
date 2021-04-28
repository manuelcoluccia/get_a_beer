<x-layouts>
  <section>
    <div class="container my-5 py-5 content-section">   
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center text-white font-italic">Conosci una birreria nella tua zona?</h1>
          <h4 class="text-center text-white font-italic">Segnalacela!</h4>
        </div>
      </div>
      <div class="row mt-4 ">
        <div class="col-12 bg-transparent p-3 ">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form method="POST" action="{{route('notify')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label class="text-white" for="name">Nome birreria</label>
                  <input type="text" class="form-control mb-3" id="name" value={{old('name')}}> 
                <label class="text-white" for="city">Città</label>
                  <input type="text" class="form-control mb-3" id="city" value={{old('city')}}> 
                <label class="text-white" for="address">Indirizzo</label>
                  <input type="text" class="form-control mb-3" id="address" value={{old('address')}}> 
                <label class="text-white" for="beers">Birre disponibili</label>
                  <select class="form-control" multiple aria-label="multiple select example">
                    @foreach ($beers as $beer)
                     <option value="1">{{$beer->name}}</option>
                    @endforeach
                  </select>           
                <label class="text-white" for="description">Descrizione</label>
                <textarea class="form-control mb-3" name="description" id="description" cols="30" rows="10" value={{old('description')}}></textarea>
                <label class="text-white" for="img">Immagine</label>
                <div><input type="file" class="mb-3 text-white" id="img"  name="img" value={{old('img')}}></div>         
              </div> 
              <button type="submit" class="btn btn-warning btn-lg">Segnala</button>
          </form>
        </div>
      </div>
    </section>
  </x-layouts>
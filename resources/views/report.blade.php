<x-layouts>
    <section>
        <div class="container content-section">   
          <div class="row justify-content-center">
            <div class="col-12">
              <h1 class="text-center font-italic">Segnalaci la tua birreria preferita</h1>
              <h4 class="text-center font-italic">Di sicuro il proprietario ti offrira una birra!!</h4>
            </div>
          </div>
          <div class="row mt-4 ">
            <div class="col-12 bg-dark p-3 ">
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
                  <div class="form-group">
                    <label class="text-white" for="name">Nome birreria</label>
                    <input type="text" class="form-control mb-3" id="name" required name="name" value={{old('name')}}>            
                    <label class="text-white" for="description">Descrizione</label>
                    <textarea class="form-control mb-3" name="description" id="description" cols="30" rows="10" value={{old('description')}}></textarea>
                    <label class="text-white" for="img">Immagine</label>
                    <div><input type="file" class="mb-3 text-white" id="img" required name="img" value={{old('img')}}></div>         
                  </div> 
                <button type="submit" class="btn btn-success">Invia</button>
              </form>
            </div>
          </div>
        </div>
      </section>
</x-layouts>
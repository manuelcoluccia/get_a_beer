<x-layouts>
  <x-slot name='title'>Contact | Getabeer </x-slot>
  <x-slot name='description'>Contatta il team di getabeer</x-slot>


  <!-- About -->
  <section>
    <div class="container my-5 py-5 bg-contact">
      <div class="row">
        <div class="col-12">
          <h2 class="text-sec text-center">Hai una proposta??</h2>
          <h4 class="font-italic text-white text-center">Contattaci. Siamo aperti a nuove idee...</h4>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <div class="col-12 col-md-6 bg-transparent p-3 ">
          <form method="POST" action="{{route ('contact.submit')}}">
            @csrf
              <div class="form-group">
                <label class="text-sec" for="name">Nome</label>
                <input type="text" class="form-control mb-3" id="name" name="name">            
                <label class="text-sec" for="surname">Cognome</label>
                <input type="text" class="form-control mb-3" id="surname" name="surname">
                <label class="text-sec" for="eamil">Email</label>
                <input type="email" class="form-control mb-3" id="eamil" name="email" aria-describedby="emailHelp">
                <label class="text-sec" for="message">Messaggio</label>
                <textarea class="form-control mb-3" name="message" id="message" cols="30" rows="10"></textarea>
                <label class="form-check-label" for="flexCheckDefault">
                <input class="form-check-input ml-1" type="checkbox" value=""><span class="text-white ml-4">Accetto termini e condizioni</span> 
              </div> 
            <button type="submit" class="btn btn-warning btn-lg mt-4 float-lg-right">Invia</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  
</x-layouts>  
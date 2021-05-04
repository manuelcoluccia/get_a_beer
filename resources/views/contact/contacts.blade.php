<x-layouts>

  <!-- About -->
  <section>
    <div class="container my-5 py-5 bg-contact">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center text-white">Hai una proposta??</h1>
          <h4 class="text-center font-italic text-white">Contattaci. Siamo aperti a nuove idee...</h4>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-md-6 bg-transparent p-3 ">
          <form method="POST" action="{{route ('contact.submit')}}">
            @csrf
              <div class="form-group">
                <label class="text-white" for="name">Nome</label>
                <input type="text" class="form-control mb-3" id="name" name="name">            
                <label class="text-white" for="surname">Cognome</label>
                <input type="text" class="form-control mb-3" id="surname" name="surname">
                <label class="text-white" for="eamil">Email</label>
                <input type="email" class="form-control mb-3" id="eamil" name="email" aria-describedby="emailHelp">
                <label class="text-white" for="message">Messaggio</label>
                <textarea class="form-control mb-3" name="message" id="message" cols="30" rows="10"></textarea>
              </div> 
            <button type="submit" class="btn btn-warning btn-lg mt-4">Invia</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  
</x-layouts>  
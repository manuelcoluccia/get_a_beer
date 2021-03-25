<x-layouts>

  <!-- About -->
  <section>
    <div class="container content-section">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="text-center">Get a Beer!</h1>
          <h4 class="text-center font-italic">Scoprite chi c'e dietro la birra che berrete stasera</h4>
        </div>
      </div>
      <div class="row mt-4 ">
        <div class="col-12 bg-dark p-3 ">
          <h1 class="text-center text-white">Contattaci</h1>
          <h4 class="text-center text-white font-italic">Segnalaci una birrerria nella tua citta</h4>
          <form method="POST" action="{{route ('contact.submit')}}">
            @csrf
            <div class="form-group">
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
            <button type="submit" class="btn btn-success">Invia</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
          <p class="lead mb-5">This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
            <a href="https://unsplash.com/">Unsplash</a>!</p>
          <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>
        </div>
      </div>
    </div>
  </section>



  

 
 
  

</x-layouts>  
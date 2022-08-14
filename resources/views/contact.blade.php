@extends('index')
@section('content')
<main class="contact_page">
<style>
  .line{
    padding: 2px;
    background-color: #0ca49c;
  }
  .text{
    font-size: 20pt;
  }
</style>
<div class="container">
  <div class="row text mt-4">
    <div class="col-md-4">
      Contactez nous
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2 line ml-4">
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-6 mt-4">
      <div class="row">
        <div class="col-md-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16" style="color: #0ca49c;">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg>
        </div>
        <div class="col-md-8">
          <label for="adresse" style="font-size: 16pt; font-weight: bold;"> Adresse</label><br>
          1, Angle rue Socrate et Abou Taour
          1er étage. Maarif Ext
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" style="color: #0ca49c;">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
          </svg>
        </div>
        <div class="col-md-8">
          <label style="font-size: 16pt; font-weight: bold;"> Email</label><br>
          info@wibday.com
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="color: #0ca49c;">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg>
        </div>
        <div class="col-md-8">
          <label style="font-size: 16pt; font-weight: bold;"> Téléphone</label><br>
          +212 684 101 010
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form id="contactForm">

        <!-- Name input -->
        <div class="mb-3">
          <label class="form-label" for="name">Nom complet</label>
          <input class="form-control" id="name" type="text" placeholder="Name" />
        </div>
    
        <!-- Email address input -->
        <div class="mb-3">
          <label class="form-label" for="emailAddress">Adresse Email</label>
          <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
        </div>

        <!-- Email address input -->
        <div class="mb-3">
          <label class="form-label" for="telephone"> Téléphone</label>
          <input class="form-control" id="telephone" type="text" placeholder="Téléphone" />
        </div>
        
        <!-- demande input -->
        <div class="mb-3" id='ft'>
          <label class="form-label" for="demande">Votre demande</label>
          <select class="form-control" id="sel1" name="sellist1" onchange="bdel()">
            <option value="1">Demande de devis</option>
            <option value="2">Rect. des données personnelles</option>
            <option value="3">Désabonnement</option>
            <option value="4">Autre</option>
          </select>
        </div>

        <!-- Message input -->
        <div class="mb-3">
          <label class="form-label" for="message">Message</label>
          <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
        </div>
        
        <!-- Form submit button -->
        <div class="d-grid">
          <button class="btn btn-primary " type="submit">Submit</button>
        </div>
    
      </form>
    </div>
  </div>
</div>
<script>
  function bdel(){
    var fonction = document.getElementById('sel1');
    if(fonction.value == '4'){
      document.getElementById('ft').innerHTML = '<label class="form-label" for="demande">Votre demande</label><br/><input class="form-control" id="fonction" type="text" placeholder="Fonction" />'
    }
  }
</script>
</main>
@endsection
@extends('index')
@section('content')
  <main class="contact_page">

    <section class="section_padding">
      <div class="container">
        <h5 class="mb-4">S'inscrir à la news letter</h5>

        <form action="/inscritfromsite" method="POST">
            @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="nom" class="form-label">Nom Complet</label>
                <input type="text" class="form-control" name="nom_complet" placeholder="">
              </div>

            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" required name="email" placeholder="">
              </div>

            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="number" class="form-label">Téléphone</label>
                <input type="text" class="form-control" name="telephone" placeholder="Téléphone">
              </div>

            </div>
            <div class="col-md-6">
              <div class="mb-3" id="fonction">

                <label for="select" class="form-label">Fonction</label>

                <select class="form-control select2 select2-hidden-accessible" name="fonction" data-select2-id="1" tabindex="-1" aria-hidden="true" id="fct" onchange="ok()">
                  <option value="1" data-select2-id="3">----</option>
                  <option value="2">Cadre supérieur</option>
                  <option value="3">Cadre</option>
                  <option value="4">Direction général</option>
                  <option value="5">Professions libérales</option>
                  <option value="6">Assistante de direction</option>
                  <option value="7">Etudiant(e)</option>
                  <option value="8">Retraité</option>
                  <option value="9">Employé(e) de bureau</option>
                  <option value="10">Femme au foyer</option>
                  <option value="11">Autres</option>
                </select>

              </div>

            </div>
            <div class="col-md-12">
              Conformément à la loi 09-08, vous disposez d’un droit d’accès, de rectification et d’opposition au traitement de vos données personnelles. Ce traitement a été déclaré par la CNDP sous le n° D-NL-189/2020 .
            </div>
            <div class="form-group form-check mt-4" >
              <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="enable()" name="conditions">
              <label class="form-check-label" for="exampleCheck1">J’ai lu et j’accepte <a href="#" style="color: red;">la note légale "Linformation.ma"</a>  , notamment la mention relative à la protection des données personnelles.</label>
            </div>
            <div class="form-group form-check mt-4">
              <input type="checkbox" class="form-check-input" id="exampleCheck2" name="newsgoal" onclick="check1()">
              <label class="form-check-label" for="exampleCheck1">J'accepte de recevoir la newsletter quotidienne Linformation.ma.</label>
            </div>
            <div class="form-group form-check mt-4" >
              <input type="checkbox" class="form-check-input" name="newspartenaire" id="exampleCheck3" onclick="check2()">
              <label class="form-check-label" for="exampleCheck1">J'accepte de recevoir la newsletter des partenaires commerciaux de Wib Day.</label>
            </div>
          </div>

          <button type="submit" class="mt-4 btn btn-success" disabled = "disabled" id="buttonCon">Envoyer</button>

        </form>

      </div>
    </section>
  </main>
  <script>
    function ok(){
      var fonctioN= document.getElementById('fct');
      
      if(fonctioN.value=="11"){
          document.getElementById('fonction').innerHTML = '<label for="fonction" class="form-label">Fonction</label> <input type="text" class="form-control" name="fonction" placeholder="fonction">';
      }
    }
    function enable(){
      var conditions = document.getElementById("exampleCheck1");
      if(conditions.checked){
        document.getElementById('buttonCon').disabled="";
        conditions.value=1;
      }
      else{
        document.getElementById('buttonCon').disabled="disabled";
        conditions.value=0;
      }
      
      
    }
    function check1(){
      var conditions1 = document.getElementById("exampleCheck2");
      if(conditions1.checked){
        conditions1.value=1;
      }
      else{
        conditions1.value=0;
      }
    }
    function check2(){
      var conditions2 = document.getElementById("exampleCheck3");
      if(conditions2.checked){
        conditions2.value=1;
      }
      else{
        conditions2.value=0;
      }
    }
    
  </script>
@endsection




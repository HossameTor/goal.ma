@extends('index')
@section('content')
<main class="contact_page">

    <section class="section_padding">
      <div class="container">
        <h5 class="mb-4">Laissez un message</h5>

        <form action="">

          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="nom" class="form-label">Nom*</label>
                <input type="email" class="form-control" required id="nom" placeholder="">
              </div>

            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" required id="email" placeholder="">
              </div>

            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="number" class="form-label">Téléphone</label>
                <input type="number" class="form-control" required id="number" placeholder="Téléphone">
              </div>

            </div>
            <div class="col-md-6">
              <div class="mb-3">

                <label for="select" class="form-label">Choose</label>

                <select class="form-select" aria-label="Default select example" id="select">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>

              </div>

            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label for="message" class="form-label">Example textarea</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
            </div>
          </div>

          <button type="submit">Submit</button>

        </form>

      </div>
    </section>

  </main>
@endsection
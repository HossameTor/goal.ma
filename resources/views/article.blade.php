@extends('index')
@section('content')
    <main class="article_page">
      <!-- banniere publicitere -->
      <section class="banniere_pub_outside bg-light">
        <div class="container">
          <a href="#">
            <figure>
              <img src="assets/images/banner.jpg" alt="banner" />
            </figure>
          </a>
        </div>
      </section>
      <!-- banniere publicitere -->

      <section class="section_padding">
        <div class="container">
          <div class="row justify-content-between full_article mb-5">
            <div class="col-md-12">
              <div class="section_title">
                <!-- <div class="separator"></div> -->
                <h2 class="styled">Football</h2>
                <div class="separator"></div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12">
                  <article>
                    <div class="art_details">
                      <h3 class="art_title">
                        {{$post->title}}
                      </h3>
                      <p class="text-end">
                        <span class="art_date">{{$post->updated_at}} </span>
                        <span class="art_src">
                          <a href="#">{{ $post->source }}</a>
                        </span>
                        <div class="sharethis-inline-share-buttons"></div>
                      </p>

                      <figure>
                        <img src={{ url("storage/".$post->image ) }} alt="" />
                      </figure>

                      <p class="art_desc my-3">
                        {!! $post->body !!}
                      </p>
                    </div>
                  </article>
                </div>
              </div>
            </div>

            <div class="col-md-4 right_side">
              <div class="row mb-5">
                <div class="col-sm-12">
                  <div class="banniere_pub_inside">
                    <img
                      src="assets/images/banner2.png"
                      alt="banniere publicitere"
                    />
                  </div>
                </div>
              </div>
              <div class="row news_letter">
                <div class="col-sm-12">
                  <div class="section_title">
                    <div class="separator"></div>
                    <h5>Newsletters</h5>
                    <div class="separator"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="newsletter_form">
                    <h5 class="text-center mb-3">
                      Recevez nos dernières actualités
                    </h5>
                    <form action="/inscritfromsite" method="POST">
                      @csrf
                      <div>
                        <input
                          type="email"
                          name="email"
                          required
                          class="form-control"
                          placeholder="adresse email"
                          id="newsletter_input"
                          aria-label=""
                        />
            
                        <button class="btn btn-primary" type="submit">
                          S'abonner
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row artcile_relatifs mb-5">
            <div class="col-sm-12">
              <div class="section_title">
                <h5 class="styled small">Article relatifs</h5>
                <div class="separator"></div>
              </div>
            </div>
            @foreach ($postrelatifs as $postrelatif)
            <div class="col-md-4">
              <article>
                <a href="#">
                  <figure>
                    <img src={{ url("storage/".$postrelatif->image) }} alt="" />
                  </figure>
                  <div class="art_details">
                    <h3 class="art_title">
                      {{ $postrelatif->title }}
                    </h3>
                  </div>
                </a>
              </article>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    </main>
@endsection

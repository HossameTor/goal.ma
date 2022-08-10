<section class="tennis_sec section_padding bg-white">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-7 mb-md-0 mb-5">
        <div class="row">
          <div class="col-sm-12">
            <div class="section_title">
              <h2>Tennis</h2>
              <div class="separator"></div>
              <a href="#"
                >Voir tous les articles Tennis<i
                  class="fas fa-arrow-right"
                ></i
              ></a>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach (App\Post::where('category_id',4)->where('status','PUBLISHED')->take(4)->get() as $post)
          <div class="col-md-6 mb-3">
            <article>
              <a href="#">
                <figure>
                  <img src={{ url("storage/".$post->image) }} alt="" />
                </figure>

                <div class="art_details">
                  <span class="art_categorie">{{ $post->category->name }}</span>
                  <span class="art_src">{{ $post->source }}</span>
                  @php
                      \Carbon\Carbon::setLocale('fr');
                  @endphp
                  <span class="art_date">{{ $post->updated_at->diffForHumans() }}</span>
                  <h3 class="art_title">
                    {{ $post->title }}
                  </h3>
                  <p class="art_desc">
                    {{$post->excerpt}}
                  </p>
                </div>
              </a>
            </article>
          </div>
          @endforeach
        </div>
      </div>

      <!-- Top articles -->
      <div class="col-md-4 right_side">
      <div class="row top_article mb-5">
          <x-top />
        
      
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
    </div>
  </div>
</section>
<section class="football_sec section_padding bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-12">
            <div class="section_title">
              <h2>Football</h2>
              <div class="separator"></div>
              <a href="#"
                >Voir tous les articles Football<i
                  class="fas fa-arrow-right"
                ></i
              ></a>
            </div>
          </div>
        </div>

        <div class="row">

          @foreach (App\Post::where('category_id',3)->where('status','PUBLISHED')->orderby('created_at','desc')->take(4)->get() as $post)
          <div class="col-sm-12 mb-3">
            <article>
              <a href="#" class="row">
                <div class="col-md-3">
                  <figure>
                    <img src={{ url("storage/".$post->image) }} alt="" />
                  </figure>
                </div>
                <div class="col-md-9">
                  <div class="art_details">
                    <span class="art_categorie">{{ $post->category->name }}</span>
                    <span class="art_src">{{ $post->source }}</span>
                    @php
                      \Carbon\Carbon::setLocale('fr');
                    @endphp
                    <span class="art_date">{{ $post->created_at->diffForHumans() }}</span>
                    <h3 class="art_title">
                      {{ $post->title }}
                    </h3>
                    <p class="art_desc">
                      {{$post->excerpt}}
                    </p>
                  </div>
                </div>
              </a>
            </article>
          </div>
          @endforeach

          
        </div>
      </div>

      <div class="col-md-4">
        <div class="row">
          <div class="col-sm-12">
            <div class="banniere_pub_inside">
              <figure>
                <img
                  src="assets/images/banner2.png"
                  alt="banniere publicitere"
                />
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="basket_sec section_padding bg-white">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section_title">
          <h2>Basket</h2>
          <div class="separator"></div>
          <a href="#"
            >Voir tous les articles Basket<i
              class="fas fa-arrow-right"
            ></i
          ></a>
        </div>
      </div>
    </div>
    <div class="row">

      @foreach (App\Post::whereCategoryId(7)->where('status','PUBLISHED')->take(4)->get() as $post)
      <div class="col-md-12 mb-3">
        <article>
          <a href="#" class="row">
            <div class="col-md-2">
              <figure>
                <img src={{ url("storage/".$post->image) }} alt="" />
              </figure>
            </div>
            <div class="col-md-10">
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
            </div>
          </a>
        </article>
      </div>
      @endforeach
    </div>
  </div>
</section>
<div class="col-md-6 mb-md-0 mb-5">
  <div class="row">
    <div class="col-sm-12">
      <div class="section_title">
        <h2>People</h2>
        <div class="separator"></div>
        <a href="#"
          >Voir tous les articles People<i
            class="fas fa-arrow-right"
          ></i
        ></a>
      </div>
    </div>
  </div>
  <div class="row">
    @if( $post = App\Post::whereCategoryId(9)->where('status','PUBLISHED')->first())
    <div class="col-md-12 mb-3">
      <article class="big">
        <a href="">
          <figure>
            <img src={{ url("storage/".$post->image) }} alt="" />
          </figure>
          <div class="art_details">
            <h3 class="art_title">
              {{ $post->title }}
            </h3>
            @php
              \Carbon\Carbon::setLocale('fr');
            @endphp
            <span class="art_date">{{ $post->updated_at->diffForHumans() }}</span>
          </div>
        </a>
      </article>
    </div>
    @endif

    @foreach ( App\Post::whereCategoryId(9)->where('status','PUBLISHED')->skip(1)->take(3)->get() as $post)
    <div class="col-md-12 mb-3">
      <article>
        <a href="" class="row">
          <div class="col-4">
            <figure>
              <img src={{ url("storage/".$post->image) }} alt="" />
            </figure>
          </div>
          <div class="col-8">
            <div class="art_details">
              <span class="art_src">{{ $post->source }}</span>
              @php
                  \Carbon\Carbon::setLocale('fr');
              @endphp
              <span class="art_date">{{ $post->updated_at->diffForHumans() }}</span>
              <h3 class="art_title">
                {{ $post->title }}
              </h3>
            </div>
          </div>
        </a>
      </article>
    </div>
    @endforeach
  </div>
</div>
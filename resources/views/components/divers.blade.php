<div class="col-md-6">
  <div class="row">
    <div class="col-sm-12">
      <div class="section_title">
        <h2>Divers</h2>
        <div class="separator"></div>
        <a href="/sport/divers"
          >Voir tous les articles People<i
            class="fas fa-arrow-right"
          ></i
        ></a>
      </div>
    </div>
  </div>
  <div class="row">
    @if( $post = App\Post::whereCategoryId(10)->where('status','PUBLISHED')->first())
    <div class="col-md-12 mb-3">
      <article class="big">
        <a href="/sport/{{ $post->category->name }}/{{ $post->slug}}">
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
            <span class="art_date">{{ $post->created_at->diffForHumans() }}</span>
          </div>
        </a>
      </article>
    </div>
    @endif

    @foreach ( App\Post::whereCategoryId(10)->where('status','PUBLISHED')->skip(1)->take(3)->get() as $post)
    <div class="col-md-12 mb-3">
      <article>
        <a href="/sport/{{ $post->category->name }}/{{ $post->slug}}" class="row">
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
              <span class="art_date">{{ $post->created_at->diffForHumans() }}</span>
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
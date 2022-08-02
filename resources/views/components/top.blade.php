    <div class="col-sm-12">
      <div class="section_title">
        <div class="separator"></div>
        <h5>Top Articles</h5>
        <div class="separator"></div>
      </div>
    </div>


    @foreach (App\Post::orderBy('nb_vues', 'desc')->where('status','PUBLISHED')->take(4)->get() as $post)
    <div class="col-sm-12 mb-3">
      <article>
        <a href="#" class="row">
          <div class="col-8 order-sm-1 order-2">
            <div class="art_details">
              <h3 class="art_title">
                {{ $post->title }}
              </h3>
              <span class="art_src">{{ $post->source }}</span>
              @php
                \Carbon\Carbon::setLocale('fr');
              @endphp
              <span class="art_date">{{ $post->updated_at->diffForHumans() }}</span>
            </div>
          </div>

          <div class="col-4 order-sm-2 order-1">
            <figure>
              <img src={{ url("storage/".$post->image) }} alt="" />
            </figure>
          </div>
        </a>
      </article>
    </div>
    @endforeach

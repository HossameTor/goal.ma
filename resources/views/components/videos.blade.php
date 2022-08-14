<section class="videos_sec section_padding bg-white">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section_title">
          <h2>Video</h2>
          <div class="separator"></div>
          <a href="/sport/videos"
            >Voir tous les articles Video<i class="fas fa-arrow-right"></i
          ></a>
        </div>
      </div>
    </div>
    <div class="row">
      
      @if ( $post = App\Post::whereCategoryId(8)->where('status','PUBLISHED')->first())
      <div class="col-md-7 mb-3 mb-md-0">
        <article>
          <a href="/sport/{{ $post->category->name }}/{{ $post->slug}}">
            <div class="block_img">
              <span class="ico_play"
                ><i class="far fa-play-circle"></i
              ></span>
              <figure>
                <img src={{ url("storage/".$post->image) }} alt="" />
              </figure>
            </div>

            <div class="art_details">
              <span class="art_src">{{ $post->category->name }}</span>

              <h3 class="art_title">
                {{ $post->title }}
              </h3>
            </div>
          </a>
        </article>
      </div>
      @endif
      
      <div class="col-md-5 right_block">
        @foreach (App\Post::where('category_id',4)->where('status','PUBLISHED')->skip(1)->take(4)->get() as $post)
        <div class="col-md-12 mb-3">
          <article>
            <a href="/sport/{{ $post->category->name }}/{{ $post->slug}}" class="row">
              <div class="col-4">
                <div class="block_img">
                  <span class="ico_play small"
                    ><i class="far fa-play-circle"></i
                  ></span>
                  <figure>
                    <img src={{ url("storage/".$post->image) }} alt="" />
                  </figure>
                </div>
              </div>
              <div class="col-8">
                <div class="art_details">
                  <span class="art_src">{{ $post->source }}</span>
                  <h3 class="art_title small">
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
  </div>
</section>
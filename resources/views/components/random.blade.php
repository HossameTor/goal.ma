<section class="random_sec section_padding">
  <div class="container">
    <div class="wrapper">
      <div class="row">
        <div class="col-md-6 mb-3 mb-md-0">


          
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">

              @foreach (App\Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->take(3)->get() as $post)
              <div class="carousel-item @if($loop->index===0) active @endif">
                  <img class="d-block w-100" src={{ url("storage/".$post->image) }} alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <a href="/sport/{{ $post->category->name }}/{{ $post->slug}}"><h5>{{ $post->title }}</h5></a>
                  </div>
              </div>
              
              @endforeach

            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>



        </div>
        @foreach ( App\Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->skip(3)->take(2)->get() as $post )
          
        
        <div class="col-md-3 mb-3 mb-md-0">
          <article>
            <a href="/sport/{{ $post->category->name }}/{{ $post->slug}}">
              <figure>
                <img src={{ url("storage/".$post->image) }} alt="" height="150px"/>
              </figure>

              <div class="art_details">
                <span class="art_src">{{ $post->source }}</span>
                <h3 class="art_title">
                  {{ $post->title }}
                </h3>
              </div>
            </a>
          </article>
        </div>
        @endforeach
        
        
      </div>
    </div>
  </div>
</section>

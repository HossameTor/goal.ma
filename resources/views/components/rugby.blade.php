<section class="rugby_sec section_padding bg-white">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section_title">
          <h2>Rugby</h2>
          <div class="separator"></div>
          <a href="#"
            >Voir tous les articles Rugby<i class="fas fa-arrow-right"></i
          ></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        @foreach (App\Post::whereCategoryId(5)->where('status','PUBLISHED')->take(4)->get() as $post)
        <div class="col-md-12 mb-3">
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
      <div class="col-md-4">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="banniere_pub_inside">
              <img
                src="assets/images/banner_3003000.jpg"
                alt="banniere publicitere"
              />
            </div>
          </div>
        </div>

        <div class="row suivez_nous mb-5">
          <div class="col-sm-12">
            <div class="section_title">
              <div class="separator"></div>
              <h5>Suivez-nous</h5>
              <div class="separator"></div>
            </div>
          </div>

          <div class="col-sm-12">
            <ul class="social_media text-center">
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
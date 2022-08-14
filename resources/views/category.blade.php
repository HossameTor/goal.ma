@extends('index')
@section('content')
<main class="categ_page">

    <!-- banniere publicitere -->
    <section class="banniere_pub_outside bg-light">
        <div class="container">
            <a href="#">
                <figure>
                    <img src="#" alt="banner" />
                </figure>
            </a>
        </div>
    </section>
        <!-- banniere publicitere -->

    <section class="bg_white section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section_title">
                            <h2>{{ $category->name }}</h2>
                            <div class="separator"></div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-7 mb-md-0 mb-5">

                        <div class="row">
                            @foreach ($posts as $post )
                            @if($loop->index==0)
                            <div class="col-sm-12 mb-3">
                                <article>
                                    <a href={{ url("/sport"."/".$category->slug."/".$post->slug) }}>
                                        <figure>
                                            <img src={{ url("storage/".$post->image) }} alt="" />
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
                            @else
                            <div class="col-sm-6 mb-3">
                                <article>
                                    <a href={{ url("/sport"."/".$category->slug."/".$post->slug) }}>
                                        <figure>
                                            <img src={{ url("storage/".$post->image) }} alt="" height="200px"/>
                                        </figure>
                                        <div class="art_details">
                                            <span class="art_src">{{ $post->source }}</span>
                                            @php
                                                \Carbon\Carbon::setLocale('fr');
                                            @endphp
                                            <span class="art_date">{{ $post->created_at->diffForHumans() }}</span>
                                            <h3 class="art_title">
                                                {{ $post->title }}
                                            </h3>
                                            <p class="art_desc">
                                                {{ $post->excerpt }}
                                            </p>


                                        </div>
                                    </a>
                                </article>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        
                        <!-- pagination  -->

                        <div class="row mt-5" >
                            <div class="col-md-12">
                                <div class="d-flex">
                                    {!! $posts->links() !!}
                                </div>
                            </div>
                        </div>
                      
                    </div>

                    <div class="col-md-4 right_side">
                        <div class="row mb-5">
                            <div class="col-sm-12">
                                <div class="banniere_pub_inside">
                                    <img src={{ url("assets/images/banner2.png") }} alt="banniere publicitere" />
                                </div>
                            </div>
                        </div>
                        <!-- Top articles -->
                        <div class="row top_article">
                        <x-top />
                        </div>
                        <div class="row news_letter mb-5">
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
                                    <input type="email" name="email" required="" class="form-control" placeholder="adresse email" id="newsletter_input" aria-label="">
            
                                    <button class="btn btn-primary" type="submit">
                                        S'abonner
                                    </button>
                                  </div>
                                </form>
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
        </section>
</main>
@endsection
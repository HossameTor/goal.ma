<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="preconnect" href={{ asset("https://fonts.googleapis.com") }} />
    <link rel="stylesheet" href={{ asset("https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css") }}>
    <link rel="preconnect" href={{ asset("https://fonts.gstatic.com") }} crossorigin />
    <link
      rel="stylesheet"
      href={{ asset("https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700;800&display=swap") }}
    />
    <link
      rel="stylesheet"
      href={{ asset("https://use.fontawesome.com/releases/v5.15.4/css/all.css") }}
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href={{ asset("assets/css/slick-theme.css") }} />
    <link rel="stylesheet" href={{ asset("assets/css/slick.css") }} />
    <link rel="stylesheet" href={{ asset("assets/css/normalize.css") }} />
    <link rel="stylesheet" href={{ asset("assets/css/style.css") }} />
    <!-- end css  -->
    <style>
        main{
            width:680px;
            margin: auto;
        }
        .center{
            float: none;
            margin: 0 auto;
        }
        a:hover{
        text-decoration: none;
        }
    </style>
</head>
<body>
    <main>
        <div class="row">
            <div class="col-md-4 ml-auto mr-0 " style="background-color: black; color:white;">{{ \Carbon\Carbon::now()->translatedFormat('l d F Y') }}</div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-lg-auto center">
                    <a class="logo_brand" href="/"
                      ><img src={{ asset("assets/images/logo.png") }} alt="logo goal.ma" 
                      /></a>
                </div>
            </div>
            
        </div>


        @foreach (App\Category::all() as $category )
        <x-newsletter-banniere />
        
        <style>
            .row.display-flex {
                display: flex;
                flex-wrap: wrap;
            }
            .row.display-flex > [class*='col-'] {
                display: flex;
                flex-direction: column;
            }
            .article-details{
            }
            .article-category{
                color:red;
                font-size:12px;
                font-weight: bold; 
            }
            .article-src{
                color:rgb(206, 206, 206);
                font-size:12px;
            }
            .article_date{
                color:rgb(206, 206, 206);
                font-size:12px;
            }
            .article_title{
                color:black;
            }
            .article_description{
                font-size:8pt;
            }
        </style>
        
        <div class="container">
            <div class="row mt-4" >
                <div class="col-sm-12 section_title">
                    <h2 style="color: #bd0c29;">{{ $category->name }}</h2>
                    <div class="separator"></div>
                    <a href="/sport/football"
                            >Voir tous les articles {{ $category->name }}<i
                              class="fas fa-arrow-right"
                            ></i
                    ></a>
                
                </div>
                @foreach (App\Post::where('category_id',$category->id)->where('status','PUBLISHED')->orderby('updated_at','desc')->where('ordre',1)->take(1)->get() as $post)
                
                @php
                    foreach (App\Post::where('category_id',$category->id)->where('ordre',1)->get() as $postt){
                        if($postt->id !== $post->id){
                            $postt->ordre=3;
                            $postt->save();
                        }
                    }
                @endphp
                <article>
                <a href="#" class="row display-flex mt-2">
                    
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure>
                        <img src="{{ url('storage/'.$post->image) }}" alt="">
                    </figure>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="article-details">
                        <span class="article-category">{{ $post->category->name }}</span>
                        <span class="article-src ml-2"> {{ $post->source }}</span>
                        @php
                            \Carbon\Carbon::setLocale('fr');
                        @endphp
                        <span class="article_date ml-2">{{ $post->created_at->diffForHumans() }}</span><br/>
                        <span class="article_title" >{{ $post->title }}</span><br/>
                        <span class="article_description" >{{ \Illuminate\Support\Str::limit($post->excerpt,200) }}</span>
                    </div>
                </div>
                </a>
                </article>
                @endforeach
                @foreach (App\Post::where('category_id',$category->id)->where('category_id',$category->id)->where('status','PUBLISHED')->orderby('updated_at','desc')->where('ordre',2)->take(1)->get() as $post)
                @php
                    foreach (App\Post::where('ordre',2)->get() as $postt){
                        if($postt->id !=$post->id){
                            $postt->ordre=3;
                            $postt->save();
                        }
                    }
                @endphp
                <article>
                <a href="#" class="row display-flex mt-2">
                    
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure>
                        <img src="{{ url('storage/'.$post->image) }}" alt="">
                    </figure>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="article-details">
                        <span class="article-category">{{ $post->category->name }}</span>
                        <span class="article-src ml-2"> {{ $post->source }}</span>
                        @php
                            \Carbon\Carbon::setLocale('fr');
                        @endphp
                        <span class="article_date ml-2">{{ $post->created_at->diffForHumans() }}</span><br/>
                        <span class="article_title" >{{ $post->title }}</span><br/>
                        <span class="article_description" >{{ \Illuminate\Support\Str::limit($post->excerpt,200) }}</span>
                    </div>
                </div>
                </a>
                </article>
                @endforeach
            </div>
        </div>
        
        @endforeach
        
    </main>
    
</body>
<!-- scripts -->

<script src={{ asset("assets/js/jquery.js") }}></script>
<script src={{ asset("assets/js/bootstrap.bundle.min.js") }}></script>
<script src={{ asset("assets/js/slick.min.js") }}></script>
<script src={{ asset("assets/js/main.js") }}></script>

<script src={{ asset("https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js") }}></script>
<!-- end scripts  -->
</html>
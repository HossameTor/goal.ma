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
    
</style>

<div class="container">
    <div class="row mt-4" >
        <div class="col-sm-12 section_title">
            <h2 style="color: #19BD0C;">Football</h2>
            <div class="separator"></div>
            <a href="/sport/football"
                    >Voir tous les articles Football<i
                      class="fas fa-arrow-right"
                    ></i
            ></a>
        
        </div>
        @foreach (App\Post::where('category_id',3)->where('status','PUBLISHED')->orderby('created_at','desc')->take(2)->get() as $post)
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
                <span class="article_date ml-2">{{ $post->updated_at->diffForHumans() }}</span><br/>
                <span class="article_title" >{{ $post->title }}</span><br/>
                <span class="article_description" >{{ \Illuminate\Support\Str::limit($post->excerpt,200) }}</span>
            </div>
        </div>
        </a>
        </article>
        @endforeach
    </div>
</div>

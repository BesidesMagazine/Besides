<li class="cards__item" onclick="location.href='{{ route('article.show',['title' => $article->title])}}'">
  <div class="card">

    <p class="card-time"> {{substr($article->created_at,0,10)}}</p>
    <div class="card__image" style="background-image: url('{{$article->preview_image}}');" ></div>
    <div class="card__content">
      <div class="card__title"><h3>{{$article->title}}</h3></div>
      <!-- <center class="card__text"> {{substr($article->created_at,0,10)}}</center> -->

      <h4 class="card__text">{{$article->preview_content}}</h4>
    </div>
  </div>
</li>

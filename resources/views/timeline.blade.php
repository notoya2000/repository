<h1>timeline</h1>
<a href="{{url("/detail")}}">{{$username}}</a>
<a href="{{ url('/tweet') }}">投稿する</a>
@foreach ($tweets as $tweet)
    <div class="tweet">
      
        <p>{{ $tweet->user->name }}: {{ $tweet->post }}</p>
        <!-- その他ツイートの詳細を表示 -->
    </div>
@endforeach
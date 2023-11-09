<h1>POST投稿画面</h1>
{{ Form::open(['route' => ['twitter.index'], 'method' => 'post']) }}
    @csrf
    @method('post')
    <p>post<textarea rows="4" cols="40"></textarea></p>
{{ Form::submit('投稿', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}

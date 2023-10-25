<h1>新規作成</h1>
{{ Form::open(['route' => ['user.created'], 'method' => 'post']) }}
    @csrf
    @method('post')
    <p>ユーザー名<input type="text" name="username"></p>
    <p>メールアドレス<input type="text" name="e-mail"></p>
    <p>パスワード<input type="password" name="password"></p>
{{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}
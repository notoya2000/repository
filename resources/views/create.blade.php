<h1>新規作成</h1>
{{ Form::open(['route' => ['user.created'], 'method' => 'post']) }}
    @csrf
    @method('post')
    <p>ユーザー名<input type="text" name="username"></p>
        @error('username')
            <div class="error"><span>{{ $message }}</span></div>
        @enderror
    
    <p>メールアドレス<input type="text" name="e-mail"></p>
        @error('e-mail')
            <div class="error"><span>{{ $message }}</span></div>
        @enderror
    
    <p>パスワード<input type="password" name="password"></p>
        @error('password')
            <div class="error"><span>{{ $message }}</span></div>
        @enderror
   
     <p>性別：
        <input type="radio" name="sex" value="1">男性
        <input type="radio" name="sex" value="2">女性
        <input type="radio" name="sex" value="3" checked>その他
    </p>
{{ Form::submit('登録', ['class' => 'btn btn-primary']) }}
{{ Form::close() }}
<ul>
    @foreach ($followings as $user)
        <li>{{ $user->name }}</li>
        <!-- 他に表示したいユーザー情報があればここに追加 -->
    @endforeach
</ul>
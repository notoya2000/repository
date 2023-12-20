<h1>ユーザー一覧</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }}
                <!-- フォローボタン -->
                
                    <form action="{{ route('follow.follow', $user->id) }}" method="POST">
                        @csrf
                        <button type="submit">フォロー</button>
                    </form>
               
            </li>
            <!-- その他、表示したいユーザー情報があればここに追加 -->
        @endforeach
    </ul>
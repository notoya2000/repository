<h1>ユーザー一覧</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }}
                <!-- フォローボタン -->
                
                <!-- 自分自身は表示しない -->
                @if (Auth::user()->isNot($user))
                    <!-- フォロー状態に応じたボタンの表示 -->
                    @if (Auth::user()->followings->contains($user))
                        <!-- フォロー解除のフォーム -->
                        <form action="{{ route('follow.unfollow', $user->id) }}" method="POST">
                            @csrf
                           
                            <button type="submit">フォローを外す</button>
                        </form>
                    @else
                        <!-- フォローのフォーム -->
                        <form action="{{ route('follow.follow', $user->id) }}" method="POST">
                            @csrf
                            <button type="submit">フォロー</button>
                        </form>
                    @endif
                @endif 
               
            </li>
            <!-- その他、表示したいユーザー情報があればここに追加 -->
        @endforeach
    </ul>
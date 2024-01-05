<ul>
    @foreach ($followings as $user)
        <li>
            {{ $user->name }}
            <form method="post" action="{{ route('follow.unfollow', $user) }}" style="display:inline;">
                @csrf
                <button type="submit">フォロー解除</button>
            </form>
        </li>
    @endforeach
</ul>


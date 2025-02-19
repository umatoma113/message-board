<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content">
        {{-- トップページへのリンク --}}
        <div class="flex-1">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">MessageBoard</a></h1>
        </div>

        <div class="flex-none">
            <ul tabindex="0" class="menu lg:block lg:menu-horizontal">
                {{-- メッセージ作成ページへのリンク --}}
                <li><a class="link link-hover" href="{{ route('messages.create') }}">新規メッセージの投稿</a></li>
            </ul>
        </div>
    </nav>
</header>
<a href="/"><img src="https://i.postimg.cc/x8ncvFjr/logo.png"></a>
<div class="">
    <ul id="navbar">
        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Trang chủ</a></li>
        <li>
            <a href="/danhmuc/1" class="{{ request()->is('danhmuc/*') ? 'active' : '' }}">Sản phẩm</a>
            <ul class="dropdown">
                @foreach ($danhmuc_arr as $muc)
                    <li><a href="{{ url('/danhmuc', $muc->MaDM) }}"
                            class="{{ request()->is('danhmuc/' . $muc->MaDM) ? 'active' : '' }}">{{ $muc->TenDM }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li><a href="blog.html" class="{{ request()->is('blog.html') ? 'active' : '' }}">Liên hệ</a></li>
        <li><a href="about.html" class="{{ request()->is('about.html') ? 'active' : '' }}">Về chúng tôi</a></li>
        <li>
            @auth
                <a href="/profile" class="{{ request()->is('shop.html') ? 'active' : '' }}">{{ Auth::user()->name }}</a>
                <ul class="dropdown">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>
            @else
                <a href="shop.html" class="{{ request()->is('shop.html') ? 'active' : '' }}">Tài khoản</a>
                <ul class="dropdown">
                    <li><a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}">Đăng nhập</a>
                    </li>
                    <li><a href="{{ route('register') }}" class="{{ request()->is('register') ? 'active' : '' }}">Đăng
                            ký</a></li>
                </ul>
            @endauth
        </li>

        <li>
            <form action="/search" method="GET" id="search-form">
                <input type="text" name="query" placeholder="Tìm kiếm..." class="search-input">
                <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
            </form>
        </li>
        <li><a href="cart.html" id="lg-bag" class="{{ request()->is('cart.html') ? 'active' : '' }}"><i
                    class="fal fa-shopping-bag"></i></a>
            <span class="quantity">0</span>
        </li>
        <li><a href="#" id="close"><i class="far fa-times"></i></a></li>
    </ul>
</div>
<div id="mobile">
    <a href="cart.html"><i class="fal fa-shopping-bag"></i>
        <span class="quantity">0</span>
    </a>
    <i id="bar" class="fas fa-outdent"></i>
</div>

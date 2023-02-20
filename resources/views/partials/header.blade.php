<header class="container-xl">
    <div class="navbar">
        <div class="logo">
            <a href="#">
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png" alt="DC comics">
            </a>
        </div>
        <nav>
            <ul>
                @foreach($menu as $index => $item)
                    <li><a class='header_a' href="{{ $item }}">{{ $index }}</a></li>
                @endforeach
            </ul>
        </nav>
        <div>
            <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2">
                <input class="mr-3 w-75" type="text" placeholder="Search"
                  aria-label="Search">
                <i class="fas fa-search search_icon" aria-hidden="true"></i>
            </form>
        </div>
    </div>
</header>
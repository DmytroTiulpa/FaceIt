<div class="uk-offcanvas-content">
    <div id="offcanvas-nav-primary" data-uk-offcanvas="mode: push; overlay: false;" class="uk-offcanvas">

        <div class="uk-offcanvas-bar uk-flex uk-flex-column">

            <button class="uk-offcanvas-close" type="button" data-uk-close></button>

            <a class="uk-navbar-item uk-logo" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="34" viewBox="0 0 28 34" class="uk-margin-small-right uk-svg">
                    <polygon points="19.1 4.1 13.75 1 8.17 4.45 13.6 7.44 19.1 4.1" fill="#fff"></polygon>
                    <path d="M21.67,5.43,16.14,8.77,22.4,12.4v9.52l-8.44,4.76L5.6,21.93V14.55L0,11.7V25.21l13.75,8.08L28,25.21V9.07Z" fill="#fff"></path>
                </svg>
                Logo
            </a>

            <ul class="uk-nav uk-nav-primary uk-nav-parent-icon {{--uk-nav-center uk-margin-auto-vertical--}}" data-uk-nav>
                <li class="uk-active">
                    <a href="/">Home</a>
                </li>
                <li class="uk-parent">
                    <a href="#">Parent</a>
                    <ul class="uk-nav-sub">
                        <li class="uk-active"><a href="javascript:void(0)">Active</a></li>
                        <li><a href="javascript:void(0)">Sub item</a></li>
                        <li><a href="javascript:void(0)">Sub item</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#modal-center" data-uk-toggle>Modal 1</a>
                </li>
                <li>
                    <a href="#modal-fullscreen" data-uk-toggle>Modal 2</a>
                </li>
                <li class="uk-nav-divider"></li>

                @guest
                    <li>
                        <a href="{{-- route('login') --}}">
                            <span class="uk-margin-small-right uk-icon" data-uk-icon="icon: sign-in"></span>
                            {{ __('Login') }}
                        </a>
                        <a href="{{-- route('register') --}}">
                            <span class="uk-margin-small-right uk-icon" data-uk-icon="icon: user"></span>
                            {{ __('Registration') }}
                        </a>
                    </li>
                @endguest
                @auth
                    <li>
                        <a href="{{-- route('logout') --}}">
                            <span class="uk-margin-small-right uk-icon" data-uk-icon="icon: sign-out"></span>
                            {{ __('Logout') }}
                        </a>
                    </li>
                @endauth

                <li class="uk-nav-divider"></li>

                <li class="uk-nav-header">Header</li>

                <li class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut doloribus nam quia saepe, soluta!</li>

            </ul>

            <div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut doloribus nam quia saepe, soluta!</div>

            <form class="uk-margin-small-top" action="">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-icon" data-uk-icon="icon: search"></span>
                    <label for="login"></label>
                    <input id="login" name="login" class="uk-input" type="text" placeholder="Search...">
                </div>
            </form>

        </div>
    </div>
</div>

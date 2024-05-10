<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link {{active_link('/')}}" href="{{route('home')}}">
                    {{__('Главная')}}
                </a>
                <a class="nav-item nav-link {{active_link('login')}}" href="{{route('login')}}">
                    {{__('Войти')}}
                </a>
                <a class="nav-item nav-link {{active_link('register')}}" href="{{route('register')}}">
                    {{__('Регистрация')}}
                </a>

            </div>
        </div>
    </div>
</nav>

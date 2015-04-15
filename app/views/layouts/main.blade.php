
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>发现Laravel 4之美</title>
    </head>

<body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand hidden-sm" href="/">Laravel新手上路</a>
                </div>
          <ul class="nav navbar-nav navbar-right hidden-sm">
          @if(!Auth::check())
               <li>{{ HTML::link('user/register', '注册') }}</li>
               <li>{{ HTML::link('user/login', '登陆') }}</li>

            @else
            <li>{{ HTML::link('user/logout', '退出') }}</li>
            @endif
            </ul>
              @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
            @endif
                 {{ $content }}
            </div>
        </div>

</body>
</html>apt-get install libcurl4-gnutls-dev libexpat1-dev gettext \libz-dev libssl-dev
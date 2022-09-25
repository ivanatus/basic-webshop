<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

        <style type="text/css">
            .header{
                background: #9B64FF;
                text-align: center;
            }
            .body{
                font-family: Sans-serif, verdana;
            }
        </style>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Basic webshop</title>
    </head>
    <body>
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Home</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarColor03">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/woman">Woman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/man">Man</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kids">Kids</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="container" style="padding-top: 1em; padding-bottom: 1em">
                <div style="float: right">
                    @guest
                        <a href="/login" style = "color: #334c52">Log in</a> |
                        <a href="/register" style = "color: #334c52">Register</a>
					@else
					    <div class="mt-3 space-y-1" style = "color: #334c52">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" style = "color: #334c52">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
					    </div>
				    @endif
                </div>
                <h1 style="font-size: 50px">Basic webshop</h1>
            </div>
        </div>

        @yield('content')
        
    </body>
</html>
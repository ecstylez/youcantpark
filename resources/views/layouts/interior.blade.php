<!DOCTYPE html>
<html>
<head>
    @include('layout-partials.head')
</head>
<body>
    @include('layout-partials.nav')

    @include('layout-partials.interior_header')

    <div class="container-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <article class="section-text">
                        @yield('content')
                    </article>
                </div>
            </div> 
        </div>
    </div>
    @include('layout-partials.foot')
</body>
</html>
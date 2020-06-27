@extends("layouts.app")
@section("container")
    <div class="height-full light">
        <div id="primary" class="content-area"
             data-bg-possition="center"
             data-bg-repeat="false"
             style="background: url({{asset('assets/img/icon/icon-circles.png')}});">
            <div class="container">
                <div class="col-xl-8 mx-lg-auto p-t-b-80">
                    <header class="text-center mb-5">
                        <h1>oops!</h1>
                        <p class="section-subtitle">Something went wrong. The page you are looking for is gone</p>

                    </header>
                    <div class="pt-5 p-t-100 text-center">
                        <p class="s-256">404</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #primary -->
    </div>


@endsection()

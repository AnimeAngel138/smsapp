 @extends('layout.app')
    @section('content')
    <div>
        <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="background: #0d1b28;">
            <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Bula Central School</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="#" style="color: rgb(255,255,255);">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span>
                </div>
            </div>
        </nav>
        <header class="masthead"></header>
    </div>
    <section class="portfolio-block block-intro">
        <div class="container">
            <div class="avatar" style="background-image:url(&quot;avatars/avatar.jpg&quot;);"></div>
            <div class="text-center about-me" style="margin-top: 139px;">
                <p>BLah Blahs blah</p><a class="btn btn-outline-primary" role="button" href="/pre-registration" style="color: rgb(255,255,255);background: #0d1b28;">Pre-Registration</a>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Button-modal-ecommerce.js"></script>
    <script src="assets/js/theme.js"></script>
    @endsection
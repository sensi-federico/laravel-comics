<footer>
    <section class="links">
        <div class="container d-flex justify-content-between">
            <div class="container pt-5">
                <div class="row row-cols-5">
                    <div class="col">
                        <ul>
                            <li>
                                <a href="#">
                                    <h4 class="mb-3 text-white text-uppercase text-uppercase">dc comics</h4>
                                </a>
                            </li>
                            @foreach ($links['dcComics'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                            <li><a href="#">
                                    <h4 class="my-3 text-white text-uppercase">shop</h4>
                                </a></li>
                            @foreach ($links['shop'] as $link)
                            <li class="font"><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li><a href="#">
                                    <h4 class="mb-3 text-white text-uppercase">dc</h4>
                                </a></li>
                            @foreach ($links['dc'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li><a href="#">
                                    <h4 class="mb-3 text-white text-uppercase">sites</h4>
                                </a></li>
                            @foreach ($links['sites'] as $link)
                            <li><a href="#">{{$link}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <p class="m-0">All Site Content TM and &copy; 2020 DC Enterainment, unless otherwise
                    <span>noted here.</span> All rights reserved. <br> <span>Cookies Settings</span>
                </p>
            </div>
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
        </div>
    </section>

    <section class="footer-banner bg-dark py-4">
        <div class="container d-flex justify-content-between flex-wrap px-3">
            <div class="button">sign-up now!</div>
            <div class="social d-flex align-items-center">
                <h6 class="me-3 mb-0">follow us</h6>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
            </div>
        </div>
    </section>
</footer>
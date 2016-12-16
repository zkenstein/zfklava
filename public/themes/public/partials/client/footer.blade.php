<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 platform-links">
                    <ul class="footer-links">
                        <li><a href="{{URL::to('about-us.html')}}">About</a></li>
                        @if(Auth::check())
                            <li><a href="{{ trans_url('logout') }}" class="logout">Logout</a></li>
                        @else
                            <li><a href="{{ trans_url('login') }}" class="login"  target="_blank">Login</a></li>
                        @endif

                    </ul>
                </div>
                <div class="col-md-2 logo">
                    <a href="http://www.zfklava.org/"><img src="{{ asset('img/logo/sm-default.png') }}" height="28" alt="Zfklava"></a>
                </div>
                <div class="col-md-5 social">
                    <ul class="footer-links">
                        <li><a href="https://twitter.com/zfklavacms" target="_blank">Twitter</a></li>
                        <li><a href="https://github.com/LavaLite" target="_blank">GitHub</a></li>
                        <li><a href="https://www.facebook.com/zfklava/" target="_blank">Facebook</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 copyright"> &copy; 2016 Zfklava </div>
            </div>
        </div>
    </div>
</footer>

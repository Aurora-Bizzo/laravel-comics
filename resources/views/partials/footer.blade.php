<footer>
    <div class="top-footer">
        <div class="row">
            <div class="col-12">
                <div class="container-xl">
                    <ul>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-footer">
        <div class="container-xl">
            <div class="row">
                <div class="column">
                    <h5>DC COMICS</h5>
                    <ul>
                        @foreach($dc_comics_footer as $index => $item)
                            <li><a class='footer_a' href="{{ $item }}">{{ $index }}</a></li>
                        @endforeach
                    </ul>
                    <h5>SHOP</h5>
                    <ul>
                        @foreach($shop_footer as $index => $item)
                            <li><a class='footer_a' href="{{ $item }}">{{ $index }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="column">
                    <h5>DC</h5>
                    <ul>
                        @foreach($dc_footer as $index => $item)
                            <li><a class='footer_a' href="{{ $item }}">{{ $index }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="column">
                    <h5>SITES</h5>
                    <ul>
                        @foreach($sites_footer as $index => $item)
                        <li><a class='footer_a' href="{{ $item }}">{{ $index }}</a></li>
                        @endforeach
                    </ul>
                </div>
             </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container-xl">
            <div class="row">
                <div class="col-6">
                    <button><strong>SIGN-UP NOW!</strong></button>
                </div>
                <div class="col-6">
                    <ul>
                        <li><strong>FOLLOW US</strong></li>
                        <li>
                            <img src="./resources/img/footer-facebook.png" alt="">
                        </li>
                        <li>
                            <img src="src/assets/img/footer-twitter.png" alt="">
                        </li>
                        <li>
                            <img src="src/assets/img/footer-youtube.png" alt="">
                        </li>
                        <li>
                            <img src="src/assets/img/footer-pinterest.png" alt="">
                        </li>
                        <li>
                            <img src="src/assets/img/footer-periscope.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
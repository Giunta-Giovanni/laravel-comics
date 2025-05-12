<?php
    $categoryLinks =config('categoryLinks');
    $category1 = $categoryLinks['category1'];
    $category2 = $categoryLinks['category2'];
    $category3 = $categoryLinks['category3'];
    $category4 = $categoryLinks['category4'];
?>

<footer>
    <div class="footer-link">
        <div class="container">
            <div class="dc-image-bg"></div>

            {{-- box link --}}
            <div class="box-link d-flex">
                <div class="link-col">
                    <h5>DC COMICS</h5>
                    {{-- <BoxLink linkCategory={appCategory2} /> --}}
                    {{-- @dd($category1) --}}
                    <ul>
                        @foreach ($category1 as $link)
                            <x-boxlink>
                                <x-slot:text>{{$link['text']}}</x-slot>
                                <x-slot:url>{{$link['url']}}</x-slot>
                            </x-boxlink>
                        @endforeach

                    </ul>
                        


                    <h5>SHOP</h5>
                    
                    {{-- <BoxLink linkCategory={appCategory3} /> --}}
                                        <ul>
                        @foreach ($category2 as $link)
                            <x-boxlink>
                                <x-slot:text>{{$link['text']}}</x-slot>
                                <x-slot:url>{{$link['url']}}</x-slot>
                            </x-boxlink>
                        @endforeach

                    </ul>
                </div>
                <div class="link-col">
                    <h5>DC</h5>
                    {{-- <BoxLink linkCategory={appCategory1} /> --}}
                                        <ul>
                        @foreach ($category3 as $link)
                            <x-boxlink>
                                <x-slot:text>{{$link['text']}}</x-slot>
                                <x-slot:url>{{$link['url']}}</x-slot>
                            </x-boxlink>
                        @endforeach

                    </ul>
                </div>
                <div class="link-col">
                    <h5>SITES</h5>
                    <ul>
                        @foreach ($category4 as $link)
                            <x-boxlink>
                                <x-slot:text>{{$link['text']}}</x-slot>
                                <x-slot:url>{{$link['url']}}</x-slot>
                            </x-boxlink>
                        @endforeach

                    </ul>
                    {{-- <BoxLink linkCategory={appCategory4} /> --}}
                </div>
            </div>

        </div>
    </div>
    <div class="footer-social">
        <div class="container social ">
            <div class="row">
                {{-- colonna sinistra --}}
                <div class="col">
                    {{-- pulsante iscriviti --}}
                    <button type="button" class="btn-sign">SIGN-UP NOW!</button>
                </div>

                {{-- colonna destra --}}
                <div class="col col-chl">

                    {{-- Social --}}
                    <p>FOLLOW US</p>
                    <ul class="channel">
                        <li class="single-channel">
                            <a href="#">
                                <img src="./img/footer-facebook.png" alt="" />
                            </a>

                        </li>
                        <li class="single-channel">
                            <a href="">
                                <img src="./img/footer-twitter.png" alt="" />
                            </a>

                        </li>
                        <li class="single-channel">
                            <a href="">
                                <img src="./img/footer-youtube.png" alt="" />
                            </a>

                        </li>
                        <li class="single-channel">
                            <a href="">
                                <img src="./img/footer-pinterest.png" alt="" />
                            </a>

                        </li>
                        <li class="single-channel">
                            <a href="">
                                <img src="./img/footer-periscope.png" alt="" />
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</footer >
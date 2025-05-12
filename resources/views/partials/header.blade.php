<?php
    $navlinks =config('navlink');
?>

{{-- @dd($navlinks) --}}
<header class="d-flex justify-content-between align-items-center bg-light p-3">
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <div class="header-content box-logo">
                    <img src="./img/dc-logo.png" alt="DC Logo" class="dc-logo" />
                </div>
            </div>
            <div class="col">
                <nav class="navbar navbar-expand-md p-0">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            @foreach ($navlinks as $navlink)
                                <x-boxlink>
                                    <x-slot:url>{{$navlink['url']}}</x-slot>
                                    <x-slot:text>{{$navlink['text']}}</x-slot>
                                </x-boxlink>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


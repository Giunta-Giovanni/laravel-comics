<header class="d-flex justify-content-between align-items-center bg-light p-3">
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <div class="header-content box-logo">
                    <img src="./img/dc-logo.png" alt="DC Logo" class="dc-logo" />
                </div>
            </div>
            <div class="col">
                {{-- <NavBar navLinks={props.appNavLinks} /> --}}
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
                            <li class="nav-item">
                                <a class=nav-link>home</a>
                            </li>
                            <li class="nav-item">
                                <a class=nav-link>Comics</a>
                            </li>
                            <li class="nav-item">
                                <a class=nav-link>Movie</a>
                            </li>
                            

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


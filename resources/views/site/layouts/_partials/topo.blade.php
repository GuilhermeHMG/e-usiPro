<div>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a href="{{ route('site.index') }}"><img src="{{ asset('img/logo.png') }}"></a>
                <!-- Botão de recolhimento do menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Fim do botão de recolhimento do menu -->
                <div class="container">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a href="{{ route('site.index') }}" class="nav-link active" aria-current="page">Principal</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('site.sobrenos') }}" class="nav-link active" aria-current="page">Sobre Nós</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('site.contato') }}" class="nav-link active" aria-current="page">Contato</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="#">Link - Example</a>
                                </li>-->
                                <!--<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown - Example
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Example</a></li>
                                        <li><a class="dropdown-item" href="#">Example</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Example</a></li>
                                    </ul>
                                </li>-->
                                <!--<li class="nav-item">
                                    <a class="nav-link disabled">Disabled - Example</a>
                                </li>-->
                            </ul>
                        </nav>
                        <!--<form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search - Example" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>-->
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

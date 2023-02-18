<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Sample App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $dir ?>member/home">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $dir ?>member/album">
                        Albums
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $dir ?>member/artist">
                        Artists
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $dir ?>member/genre">
                        Genre
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $dir ?>member/mediatype">
                        Media Types
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $dir ?>member/playlist">
                        Play Lists
                    </a>
                </li>
            </ul>
            <?php if (!isset($_SESSION["username"])) { ?>
                <div class="my-2 my-lg-0">
                    <a class="btn btn-outline-secondary my-2 my-sm-0" href="<?= $dir ?>index/login">Login</a>
                </div>
            <?php } else { ?>
                <div class="my-2 my-lg-0">
                    <span class="pr-3">
                        Admin</span>
                    <a class="btn btn-outline-success my-2 my-sm-0" href="<?= $dir ?>index/logout">Logout</a>
                </div>
            <?php }  ?>
        </div>
    </div>
</nav>
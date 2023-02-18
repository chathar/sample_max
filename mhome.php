<?php
include "_header.php";
include "_nav.php";
?>

<div class="container mt-4">

    <div class="row mt-4">
        <div class="col-6">
            <h5>
                Your Collections
            </h5>
        </div>
    </div>

    <hr>

    <div class="row py-5">
        <div class="col-12 col-md-6 col-lg-3 p-3">
            <a href="<?= $dir ?>member/album" style="text-decoration: none;">
                <div class="px-3">
                    <div class="card p-4 text-center card-link-shadow-hover">
                        <img style="height: 2rem; " src="https://sample.niccarter.xyz/assets/img/user.svg">
                        <h6 class="text-success pt-3">Albums</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3 p-3">
            <a href="<?= $dir ?>member/artist" style="text-decoration: none">
                <div class="px-3">
                    <div class="card p-4 text-center card-link-shadow-hover">
                        <img style="height: 2rem; " src="https://sample.niccarter.xyz/assets/img/user_2.svg">
                        <h6 class="text-success pt-3">Artists</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 p-3">
            <a href="<?= $dir ?>member/genre" style="text-decoration: none">
                <div class="px-3">
                    <div class="card p-4 text-center card-link-shadow-hover">
                        <img style="height: 2rem; " src="https://sample.niccarter.xyz/assets/img/file.svg">
                        <h6 class="text-success pt-3">genre</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 p-3">
            <a href="<?= $dir ?>member/mediatype" style="text-decoration: none">
                <div class="px-3">
                    <div class="card p-4 text-center card-link-shadow-hover">
                        <img style="height: 2rem; " src="https://sample.niccarter.xyz/assets/img/file.svg">
                        <h6 class="text-success pt-3">Media Types</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 p-3">
            <a href="<?= $dir ?>member/playlist" style="text-decoration: none">
                <div class="px-3">
                    <div class="card p-4 text-center card-link-shadow-hover">
                        <img style="height: 2rem; " src="https://sample.niccarter.xyz/assets/img/file.svg">
                        <h6 class="text-success pt-3">Play Lists</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3 p-3">
            <a href="<?= $dir ?>member/track" style="text-decoration: none">
                <div class="px-3">
                    <div class="card p-4 text-center card-link-shadow-hover">
                        <img style="height: 2rem; " src="https://sample.niccarter.xyz/assets/img/file.svg">
                        <h6 class="text-success pt-3">Tracks</h6>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <div class="row py-5">
        <div class="col-12 col-md-6 ">
            <div class="px-3">
                <h6 class="text-success pt-3">Play Lists</h6>
                <hr>
                <?= $mplist ?>
                </p>
                <p class="text-secondary">
                    <a class="text-secondary" href="<?= $dir ?>/member/playlist/" style="text-decoration: none;">
                        View More
                    </a>
                </p>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="px-3">
                <h6 class="text-success pt-3">Artists</h6>
                <hr>
                <?= $malist ?>
                <p class="text-secondary">
                    <a class="text-secondary" href="<?= $dir ?>/member/artist/" style="text-decoration: none;">
                        View More
                    </a>
                </p>
            </div>
        </div>

    </div>



</div>

<?php
include "_footer.php";
?>
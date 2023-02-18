<?php session_start();
include "_header.php";
include "_nav.php";
?>

<div class="container mt-4">

    <div class="row">
        <div class="d-flex justify-content-center mt-5" style="width: 100%;">
            <div style="max-width: 300px;">
                <h1>
                    Login
                </h1>

                <div class="alert alert-danger <?= isset($rtn["response"]) ? "" : "collapse" ?>" role="alert">
                    <?= $rtn["response"] ?>
                </div>

                <form action="<?= $dir ?>index/login" method="post">
                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <input type="text" name="uname" class="form-control" id="exampleInputUsername" placeholder="Enter username" value="admin">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" name="pswd" class="form-control" id="exampleInputPassword" placeholder="Password" value="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php
include "_footer.php";
?>
<header id="navbar" class="container-fluid position-fixed w-100">
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-lg">
            <?php
            if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                <a class="navbar-brand" href="#">
                    <img src="../img/logo.png" class=" rounded-circle" alt="logo" width="90">
                    <span class="fs-1 fw-light align-middle" style="font-family: Lobster; color: #dac991">Moon Coffee
                        (ADMIN)</span>
                </a>
            <?php } else { ?>
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" class=" rounded-circle" alt="logo" width="90">
                    <span class="fs-1 fw-light align-middle" style="font-family: Lobster; color: #dac991">Moon Coffee</span>
                </a>
            <?php } ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color: #dac991; border-radius: 2px;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item fw-bold fs-4 mx-3">
                        <?php
                        if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                            <a class="nav-link" href="admin_index.php">Home</a>
                        <?php } else { ?>
                            <a class="nav-link" href="index.php">Home</a>
                        <?php } ?>
                    </li>
                    <li class="nav-item fw-bold fs-4 mx-3">
                        <?php
                        if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                            <a class="nav-link" href="product.php">Product</a>
                        <?php } else { ?>
                            <a class="nav-link" href="#">Product</a>
                        <?php } ?>
                    </li>
                    <li class="nav-item fw-bold fs-4 mx-3">
                        <?php
                        if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                            <a class="nav-link" href="ingredient.php">Ingredient</a>
                        <?php } else { ?>
                            <a class="nav-link" href="#">Service</a>
                        <?php } ?>
                    </li>
                    <li class="nav-item fw-bold fs-4 mx-3">
                        <?php
                        if (!isset($_SESSION["firstname"])) { ?>
                            <a class="nav-link" href="sign.php">Login</a>
                        <?php } else { ?>
                            <?php
                            if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                                <a class="nav-link" href="../signout.php">Logout</a>
                            <?php } else { ?>
                                <a class="nav-link" href="signout.php">Logout</a>
                            <?php } ?>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<style>
    .nav-link {
        color: #dac991;
        border-radius: 10px;
    }

    .nav-link:hover {
        color: #542D21;
        background-color: #dac991;
    }

    #navbar {
        transition: top 0, 5s linear;
    }
</style>
<script>
    $(window).bind('mousewheel', function (event) {
        if (event.originalEvent.wheelDelta >= 0) {
            //scroll up
            document.getElementById("navbar").style.top = "0";
            if (window.pageYOffset <= 10) {
                document.getElementById("navbar").style.backgroundColor = "rgb(84, 45, 33, 0)";
            }
            else {
                document.getElementById("navbar").style.backgroundColor = "rgb(84, 45, 33)";
            }
        }
        else {
            //scroll down
            document.getElementById("navbar").style.top = "-100%";
        }
    });
</script>
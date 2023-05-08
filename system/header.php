<nav class="navbar navbar-expand-lg sticky-top " style="background-color: #542D21;">
    <div class="container" style="background-color: #542D21;">
        <a class="navbar-brand" href="#">
            <?php
            if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                <img src="../img/logo.png" class=" rounded-circle" alt="logo" width="70">
            <?php } else { ?>
                <img src="img/logo.png" class=" rounded-circle" alt="logo" width="70">
            <?php } ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item fw-bold fs-4 mx-3">
                    <?php
                    if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                        <a class="nav-link" style="color: #dac991" href="admin_index.php">Home</a>
                    <?php } else { ?>
                        <a class="nav-link" style="color: #dac991" href="#">Home</a>
                    <?php } ?>
                </li>
                <li class="nav-item fw-bold fs-4 mx-3">
                    <?php
                    if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                        <a class="nav-link" style="color: #dac991" href="product.php">Product</a>
                    <?php } else { ?>
                        <a class="nav-link" style="color: #dac991" href="#">Home</a>
                    <?php } ?>
                </li>
                <li class="nav-item fw-bold fs-4 mx-3">
                    <?php
                    if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                        <a class="nav-link" style="color: #dac991" href="ingredient.php">Ingredient</a>
                    <?php } else { ?>
                        <a class="nav-link" style="color: #dac991" href="#">Home</a>
                    <?php } ?>
                </li>
                <li class="nav-item fw-bold fs-4 mx-3">
                    <?php
                    if (!isset($_SESSION["firstname"])) { ?>
                        <a class="nav-link" style="color: #dac991" href="../sign.php">Login</a>
                    <?php } else { ?>
                        <?php
                        if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
                        <a class="nav-link" style="color: #dac991" href="../signout.php">Logout</a>
                        <?php } else { ?>
                            <a class="nav-link" style="color: #dac991" href="signout.php">Logout</a>
                        <?php } ?>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
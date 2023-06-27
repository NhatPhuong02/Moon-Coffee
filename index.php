<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    include("system/head.php");
    include("system/conn_db.php");
    if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
        header("location: admin/admin_index.php");
        exit();
    }

    ?>
    <title>Welcome to Moon Coffee</title>
</head>

<body>
    <?php
    include("system/header.php");
    ?>
    <section class="container-fluid d-flex align-items-center" id="background-banner">
        <style>
            #background-banner {
                background-image: linear-gradient(to right, #542D21, hsl(30deg 100% 1% / 20%)), url(img/Hat_ca_phe_rang_xay.jpg);
                background-size: cover;
                background-repeat: no-repeat, no-repeat, no-repeat;
                background-position: initial;
                background-attachment: fixed;
                background-position: center;
                min-height: 600px;
                height: 500px;
            }
        </style>
        <div class="mx-5 container-lg">
            <div class="row mx-lg-5 ps-lg-5">
                <div class="col-lg-6" style="color: #dac991; font-family: Quicksand;">
                    <h1>The thing we love more than drink is you!</h1>
                    <h4>Your satisfaction is our pleasure</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" style="background-color:#dac991;">
        <div class="contaner mx-lg-5 py-lg-5">
            <div class="row mx-lg-5 px-lg-5">
                <div class="col-lg-5 my-lg-5">
                    <h6 class="mb-0 mt-2" style="font-family: Pacifico; color:#542D21">About us</h6>
                    <h2 class="mb-0 mt-2" style="color:#542D21; font-family: Quicksand;">We found our creative space
                        that is open for you.</h2>
                </div>
                <div class="col-lg-7 my-lg-5">
                    <span>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
                        tempufddfel. Lorem ipsum dolor sit amet elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit
                        amet. Lorem ipsum init dolor sit, amet elit. Dolor ipsum non velit, culpa!Lorem ipsum init dolor
                        sit.<br>

                        Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
                        tempufddfel. Lorem ipsum dolor sit amet elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit
                        amet.</span>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" style="background-color:#542D21;">
        <div class="row">
            <div class="col-lg-6 img-fluid" id="intro">
                <style>
                    #intro {
                        background-image: url(https://file.hstatic.net/1000075078/article/blog_f80b599183c340bca744c174e7ab2af8.jpg);
                        background-position: center;
                        position: relative;
                        z-index: 1;
                        min-height: 400px;
                        background-repeat: no-repeat;
                    }

                    #intro::before {
                        content: "";
                        background: rgb(16 15 19 / 46%);
                        position: absolute;
                        top: 0;
                        min-height: 100%;
                        left: 0;
                        right: 0;
                        z-index: -1;
                    }
                </style>
            </div>
            <div class="col-lg-6">
                <div class="container-lg px-5 pt-5">
                    <div class="fs-6 my-2" style="font-family: Pacifico; color:#fff">More than
                        30 drinks</div>
                    <div class="fs-3 my-2" style="font-family: Quicksand; color:#dac991 ">Book
                        a table easly at the best price</div>
                    <p class="my-2" style="color: #dac991c9">Vestibulum ante
                        ipsum primis in faucibus orci luctus turpis sodales
                        quis. Integer sit amet mattis quam.Vivamus a ligula
                        quam tesque et libero ut justo ultrices in.</p>
                    <div class="row my-5">
                        <div class="col-6">
                            <div class=" mb-4 ">
                                <span class="fa fa-thumbs-up p-4 rounded-2 icon" style="border-color: #dac991;"></span>
                            </div>
                            <a href="#" class="subscribe-cat-link text-decoration-none" style="color: #dac991;">Best
                                Deals</a>
                            <p class="mt-2" style="color: #dac991c9">Lorem
                                ipsum viverra feugiat.
                                Pellen tesque libero justo.</p>
                        </div>

                        <div class="col-6">
                            <div class=" mb-4">
                                <span class="fa fa-cutlery p-4 rounded-2 border-3 icon"
                                    style="border-color: #dac991;"></span>
                            </div>
                            <a href="#" class="subscribe-cat-link text-decoration-none" style="color: #dac991;">Best
                                Food</a>
                            <p class="mt-2" style="color: #dac991c9">Lorem
                                ipsum viverra feugiat.
                                Pellen tesque libero justo.</p>
                        </div>
                        <style>
                            .icon {
                                background-color: #dac991;

                            }

                            .icon:hover {
                                background-color: #542D21;
                                color: #dac991;
                            }
                        </style>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="container-fluid" style="background-color:#dac991;">
        <span class="fs-3">Our Menu</span>
    </section>

    <?php
    include("system/footer.php");
    ?>
    
</body>

</html>
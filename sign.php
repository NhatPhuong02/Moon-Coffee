<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("system/head.php");
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Mulish', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100vh;
            background-color: #542D21;
        }

        .container {
            width: 60%;
            display: flex;
            height: 650px;
            box-shadow: rgba(0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0.22) 0px 10px 10px;
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
            padding: 0;
        }

        @keyframes Show {

            0%,
            49.999% {
                opacity: 0;
                z-index: 1;
            }

            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        @keyframes Hidden {

            0%,
            49.999% {
                opacity: 1;
                z-index: 5;
            }

            100% {
                opacity: 0;
                z-index: 1;
            }
        }

        .container .box {
            position: relative;
            display: flex;
            height: 100%;
            width: 50%;
            transition: all 0.8s;
            transform: translateX(0);
            background-color: #fff;
            z-index: 1;
            overflow: hidden;
        }


        .container.active .box {
            transform: translateX(100%);
        }

        .container .box .form {
            position: absolute;
            height: 100%;
            min-width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .container .box .form.sign_up {
            transition: all 1.15s;
            z-index: 1;
            opacity: 0;
            background-color: #fff;
        }

        .container .box .form.sign_in {
            opacity: 1;
            transition: all 1.15s;
            z-index: 5;
            background-color: #fff;
        }

        .container.active .box .form.sign_in {
            z-index: 1;
            opacity: 0;
        }

        .container.active .box .form.sign_up {
            z-index: 5;
            opacity: 1;
        }

        .container .overlay {
            display: flex;
            height: 100%;
            width: 50%;
            transition: all 0.8s;
            transform: translateX(0);
            background-color: #dac991;
            z-index: 1;
            overflow: hidden;
            z-index: 5;
            opacity: 1;
        }

        .container.active .overlay {
            transform: translateX(-100%);
        }

        .container .overlay .page {
            height: 100%;
            min-width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            transition: all 0.5s;
            opacity: 1;
        }

        .container.active .overlay .page.page_signIn {
            opacity: 0;
            margin-left: -100%;
        }

        .container.active .overlay .page.page_signUp {
            margin-left: 0%;
        }


        .overlay .page h3 {
            color: #fff;
            font-size: 40px;
            margin-bottom: 15px;
        }

        .overlay .page p {
            color: #fff;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 17px;
        }

        .btn {
            display: inline-block;
            outline: none;
            color: #fff;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: 550;
            background-color: transparent;
            padding: 12px 45px;
            border-radius: 22px;
            border: 1.5px solid #fff;
            cursor: pointer;
        }

        .form h3 {
            color: #222;
            font-size: 40px;
        }

        .form span {
            color: #3a3838;
        }

        #form_input .type {
            width: 330px;
            height: 48px;
            background-color: #EEEDEF;
            margin: 30px 0;
        }

        #form_input .type input {
            width: 100%;
            height: 100%;
            padding: 0 10px;
            font-size: 16px;
            border: none;
            outline: none;
            background-color: transparent;
        }

        #form_input .type input::placeholder {
            color: #A9A8A9;
        }

        #form_input .forgot {
            margin-bottom: 20px;
            font-weight: 500;
        }

        .bkg {
            background-color: #dac991;
        }
    </style>
    <!-- link icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
</head>


<body>
    <div class="container">
        <div class="box">
            <div class="form sign_in">
                <h3>Sign In</h3>
                <span>or use your account</span>

                <form action="sign_check.php" id="form_input" method="POST">
                    <div class="type">
                        <input type="email" placeholder="Email" name="u_email" id="email" required>

                    </div>
                    <div class="type">
                        <input type="password" placeholder="Password" name="u_password" id="password" required>
                    </div>
                    <div class="forgot">
                        <span>Forgot your password? </span><a href="#">Click here!</a>
                    </div>

                    <button name="signin_cfm" class="btn bkg">Sign In</button>
                </form>
            </div>

            <div class="form sign_up">
                <h3>Sign Up</h3>
                <span>or use your email for register</span>

                <form action="sign_check.php" id="form_input">
                    <div class="type">

                        <input type="text" name="" placeholder="Name" id="name" required>
                    </div>
                    <div class="type">
                        <input type="email" name="" placeholder="Email" id="email" required>
                    </div>
                    <div class="type">
                        <input type="password" name="" placeholder="Password" id="password" required>
                    </div>

                    <button name="signup_cfm" class="btn bkg">Sign Up</button>
                </form>
            </div>
        </div>

        <div class="overlay">
            <div class="page page_signIn">
                <h3>Welcome Back!</h3>
                <p>To keep with us please login with your personal info</p>
                <button class="btn btnSign-in">Sign Up <i class="bi
                            bi-arrow-right"></i></button>
            </div>

            <div class="page page_signUp">
                <h3>Hello Friend!</h3>
                <p>Enter your personal details and start journey with us</p>
                <button class="btn btnSign-up">
                    <i class="bi bi-arrow-left"></i> Sign In</button>
            </div>
        </div>
    </div>


    <!-- link script -->
    <script src="js/index.js">
        const container = document.querySelector('.container')
        const btnSignIn = document.querySelector('.btnSign-in')
        const btnSignUp = document.querySelector('.btnSign-up')

        btnSignIn.addEventListener('click', () => {
            container.classList.add('active')
        })

        btnSignUp.addEventListener('click', () => {
            container.classList.remove('active')
        })
    </script>
</body>

</html>
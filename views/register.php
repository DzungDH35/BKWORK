<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/register.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="icon" href="../public/favicon.ico" sizes="16x16">
        <title>Sign up</title>
    </head>
    <body>
        <div class="global-wrapper">
            <div class="signup-form">
                <div class="signup-form__header">
                    <a href="/"><img class="header__logo" src="../public/logo.png" alt="logo"></a>
                    <div>Sign up quickly and easily</div>
                </div>
                <form class="signup-form__body" method="POST" action="../controllers/Registration.php">
                    <div class="body__group-of-inputs">
                        <div class="name-input-wrapper">
                            <div class="input-wrapper--col">
                                <div>Firstname (*)</div>
                                <input type="text" name="firstname" value="Do" required>
                                <div class="alert-area" id="name-alert">
                                    <img src="../public/icons/alert.png" alt="alert" class="alert-icon"></img>
                                    <div class="alert-message">Invalid firstname</div>
                                </div>
                            </div>
                            <div class="input-wrapper--col input-wrapper--ml">
                                <div>Lastname (*)</div>
                                <input type="text" name="lastname" value="Dzung" required>
                                <div class="alert-area" id="name-alert">
                                    <img src="../public/icons/alert.png" alt="alert" class="alert-icon"></img>
                                    <div class="alert-message">Invalid lastname</div>
                                </div>
                            </div>
                        </div>
                        <div class="input-wrapper--col input-wrapper--mt">
                            <div>Email address (*)</div>
                            <input type="email" name="email" value="dzung@gmail.com" required>
                            <div class="alert-area" id="email-alert">
                                <img src="../public/icons/alert.png" alt="alert" class="alert-icon"></img>
                                <div class="alert-message">Invalid email format</div>
                            </div>
                        </div>
                        <div class="input-wrapper--col input-wrapper--mt">
                            <div>Password (*)</div>
                            <div class="input-with-eye">
                                <input type="password" name="password" value="helloWorld$123" required>
                                <i class="fas fa-eye-slash"></i>
                            </div>
                            <div class="alert-area" id="pass-alert">
                                <img src="../public/icons/alert.png" alt="alert" class="alert-icon"></img>
                                <div class="alert-message">Password does not meet the requirements</div>
                            </div>
                            <div class="input-note">
                                At least 8 characters, contain uppercase and lowercase letters, numbers & special symbols. Example: helloWorld$123
                            </div>
                        </div>
                        <div class="input-wrapper--col input-wrapper--mt">
                            <div>Confirm your password (*)</div>
                            <div class="input-with-eye">
                                <input type="password" name="cf-password" value="helloWorld$123" required>
                                <i class="fas fa-eye-slash"></i>
                            </div>
                            <div class="alert-area" id="cfpass-alert">
                                <img src="../public/icons/alert.png" alt="alert" class="alert-icon"></img>
                                <div class="alert-message">Password does not match</div>
                            </div>
                        </div>
                        <div class="input-wrapper--col input-wrapper--mt">
                            <div>Date of birth (*)</div>
                            <div class="option-wrapper">
                                <select id="date" name="date" required>
                                    <?php
                                        for($date = 1; $date <= 31; ++$date)
                                            echo '<option value="'.$date.'">'.$date.'</option>';
                                    ?>
                                </select>
                                <select id="month" name="month" required>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select id="year" name="year" required>
                                    <?php
                                        for($year = date("Y"); $year >= 1900 ; --$year)
                                            echo '<option value="'.$year.'">'.$year.'</option>';
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-wrapper--col input-wrapper--mt">
                            <div>Gender (*)</div>
                            <div class="option-wrapper">
                                <div class="option">
                                    <input id="male" name="gender" type="radio" value="Male" checked>
                                    <label for="male">Male</label>
                                </div>
                                <div class="option">
                                    <input id="female" name="gender" type="radio" value="Female">
                                    <label for="female">Female</label>
                                </div>
                                <div class="option">
                                    <input id="non-binary" name="gender" type="radio" value="Non-binary">
                                    <label for="non-binary">Non-binary</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body__terms">By clicking on Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Data Policy</a> and <a href="#">Cookies Policy.</a></div>
                    <button class="body__submit-button" type="submit">Sign up</button>
                </form>
                <div class="signup-form__footer">Have an account? <a href="login.php">Login now</a>.</div>
            </div>
        </div>
        <script src="../public/js/validate.js"></script>
        <script src="../public/js/signup_handle_events.js"></script>
        <script src="../public/js/signup_catch_events.js"></script>
    </body>
</html>
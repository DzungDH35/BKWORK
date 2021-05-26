/* ===== Module catch eye-icon event ===== */

let eyeIcon = document.querySelectorAll(".input-with-eye > i");
let inputArea = document.querySelectorAll(".input-with-eye > input");
for (let i = 0; i < eyeIcon.length; ++i) eyeIcon[i].addEventListener("click", () => eyeEventHandler(eyeIcon[i], inputArea[i]));

/* ========================================================================================== */

/* ===== Module catch inputs' events ===== */

let firstName = document.querySelector('[name="firstname"]');
let lastName = document.querySelector('[name="lastname"');
let email = document.querySelector('[name="email"]');
let password = document.querySelector('[name="password"]');
let cfPassword = document.querySelector('[name="cf-password"]');
let alertAreas = document.querySelectorAll('[class="alert-area"]');

firstName.onblur = () => alertAreaHandler(!isNameValid(firstName.value), alertAreas[0]);
lastName.onblur = () => alertAreaHandler(!isNameValid(lastName.value), alertAreas[1]);
email.onblur = () => alertAreaHandler(!isEmailValid(email.value), alertAreas[2]);
password.onblur = () => alertAreaHandler(!isPasswordValid(password.value), alertAreas[3]);
cfPassword.onblur = () => alertAreaHandler(!isPasswordConfirmed(password.value, cfPassword.value), alertAreas[4]);

/* ========================================================================================== */

/* ===== Module catches submit event===== */

// document.querySelector('button[type="submit"]').onclick = () => submitHandler(); 

/* ========================================================================================== */
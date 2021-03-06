/* ===== Module handles eye-icon event ===== */

function eyeEventHandler(eyeIcon, inputArea) {
    if (inputArea.getAttribute("type") === "password") {
        eyeIcon.setAttribute("class", "fas fa-eye");
        inputArea.setAttribute("type", "text");
    } else {
        eyeIcon.setAttribute("class", "fas fa-eye-slash");
        inputArea.setAttribute("type", "password");
    }
}
/* ========================================================================================== */

/* ===== Module handles alert-areas' event ===== */

function alertAreaHandler(isInputInvalid, alertArea) {
    if (isInputInvalid === true) alertArea.style.display = "flex";
    else alertArea.style.display = "none";
}

/* ========================================================================================== */

/* =============== Module handles submit event =============== */

// function submitHandler() {
//     const uri = "/signup_controller";
//     const submittedData = {
//         name: firstName.value + " " + lastName.value,
//         email: email.value,
//         password: password.value,
//         cfPassword: cfPassword.value,
//         gender: (function() {
//             let temp = document.querySelectorAll('input[name="gender"]');
//             for (let i of temp) { if (i.checked == true) return i.value; } 
//         })()
//     };

//     for (let i in submittedData) {
//         if (submittedData[i] === "") {
//             alert("Các trường dữ liệu (*) là bắt buộc");
//             return;
//         }
//     }

//     const config = {
//         headers: {
//             'Accept': 'text/html',
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(submittedData),
//         method: "POST"
//     };
//     fetch(uri, config)
//         .then(data => {console.log(data);})
//         .catch(error => {console.log(error)});
// }

/* =============================================================================== */
const formRegistration = document.getElementById("registrationForm");
const register = document.getElementById("registrationButton");


register.addEventListener("click", validateUserInput);

function validateUserInput() {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue === '') {
        alert("username is required");
    } else if (emailValue === '') {
        alert("email is required");
    } else if (!isValidEmail(emailValue)) {
        alert("email is required");
    } else if (passwordValue === '') {
        alert("password is required");
    }
}


function isValidEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

document.getElementById("closeButton").addEventListener("click", goBackToIndex);

function goBackToIndex(){
    console.log("back");
    window.location.href = "index.php";
}



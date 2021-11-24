// script for  navbar responsiveness
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const username = document.getElementById("username");
// const email = document.getElementById("email");
const password = document.getElementById("password");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

//Return to Top of Page Button
// Get the button:
const myButton = document.getElementById("goToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        myButton.style.display = "block";
    } else {
        myButton.style.display = "none";
    }
}

// Add event listener so when user clicks top button it will return  to top of the page
myButton.addEventListener("click", topFunction);

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

//Add event listener to LoginButton
document.getElementById("loginIcon").addEventListener("click", openForm);

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

document.getElementById("closeButton").addEventListener("click", closeForm);

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

const login = document.getElementById("loginButton");
login.addEventListener('click',() => {

    let userName = username.value;
    let pwd = password.value;
    //After loading data perform the task defined response in the then clause
    postData('/PopUpWebApplication/services/service.php', {req:'login',username:userName, pwd:pwd}).then((response)=>{
        console.log(response['status']);
    });

});

async function postData(url = '', data = {}) {
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    });
    return response.json();
}

// Login Validation if username and password fields are not empty
const formLogin = document.getElementById("form-popup");


document.getElementById("loginButton").addEventListener("click", validateInputs);

// function isValidEmail(email) {
//     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }

function validateInputs() {
    const usernameValue = username.value.trim();
    // const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue === '') {
        alert("username is required");
        // if (emailValue === '') {
        //     alert("email is required");
        // } else if (!isValidEmail(emailValue)) {
        //     alert("email is required");
    } else if (passwordValue === '') {
        alert("password is required");
    }
    // } else if (passwordValue.length < 8) {
    //     alert("Password must be at least 8 character.");
    // }

}

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const username = document.getElementById("username");
const password = document.getElementById("password");

const navLink = document.querySelectorAll(".nav-link");

const myButton = document.getElementById("goToTopBtn");

const login = document.getElementById("loginButton");
const loginIcon =document.getElementById("loginIcon");


//global variables
let status;
let uname;

// script for  navbar responsiveness
hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

//Return to Top of Page Button
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

// Open Pop Up login Form
document.getElementById("loginIcon").addEventListener("click", openForm);

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

//Close Pop up Login Form
document.getElementById("closeButton").addEventListener("click", closeForm);

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

// Login Method
login.addEventListener('click', () => {

    let userName = username.value;
    let pwd = password.value;
    //After loading data perform the task defined response in the then clause
    postData('/PopUpWebApplication/services/service.php', {
        req: 'login',
        username: userName,
        pwd: pwd
    }).then((response) => {
       status = (response['status']);
       uname = (response['user_name']);
        if (status === "login_success") {
            console.log((response['user_name']));
            document.getElementById("welcomeUser").innerText = uname;
        }else if (status == "login_error") {
            console.log("login failed");
            alert("login failed. check again");
        }
        closeForm();

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
login.addEventListener("click", validateInputs);

function validateInputs() {
    const usernameValue = username.value.trim();
    // const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue === '') {
        alert("username is required");
    } else if (passwordValue === '') {
        alert("password is required");
    }
}

loginIcon.addEventListener("click", checkIfUserLogged);
function checkIfUserLogged(){
    if (status === "login_success"){
        window.location.href = "user_profile.php";
    }
    else{
        openForm();
        console.log("not working");
    }
}

//Search Button

const f = document.getElementById('searchButton');
const q = document.getElementById('searchBar');
const google = 'https://www.google.com/search?q=site%3A+';


function submitted(event) {
    event.preventDefault();
    const url = google + '+' + q.value;
    const win = window.open(url, '_blank');
    win.focus();
}

f.addEventListener('click', submitted);
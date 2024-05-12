const loginForm = document.getElementById("loginForm");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const loginButton = document.getElementById("loginButton");
const notification = document.getElementById("notification");

loginButton.addEventListener("click", () => {
    if (emailInput.value && passwordInput.value) {
        notification.style.display = "block";

        emailInput.value = "";
        passwordInput.value = "";

        setTimeout(() => {
            notification.style.display = "none";
        }, 3000);
    } else {
        alert("Please fill in both email and password fields.");
    }
});
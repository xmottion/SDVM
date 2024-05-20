const loginForm = document.getElementById("loginForm");
const inputFields = document.querySelectorAll(".form-value input, .form-value select");
const loginButton = document.getElementById("loginButton");
const notification = document.getElementById("notification");

loginButton.addEventListener("click", () => {
    let isValid = true;

    inputFields.forEach((inputField) => {
        if (inputField.hasAttribute("required") && !inputField.value.trim()) {
            isValid = false;
        }
    });

    if (isValid) {
        notification.style.display = "block";

        inputFields.forEach((inputField) => {
            inputField.value = "";
        });

        setTimeout(() => {
            notification.style.display = "none";
        }, 3000);
    } else {
        alert("Please fill in all fields.");
    }
});

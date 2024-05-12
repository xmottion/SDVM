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

    // �������� �������� ��������� ��������
    const phoneField = document.getElementById("phonenum");
    const phonePattern = /^\d{10}$/; // ����������, �� ������� ���������� � 10 ����
    if (!phonePattern.test(phoneField.value.trim())) {
        isValid = false;
        alert("Please enter a valid phone number (10 digits).");
    }

    // �������� �������� ���������� �����
    const emailField = document.getElementById("email");
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailField.value.trim())) {
        isValid = false;
        alert("Please enter a valid email address.");
    }

    // �������� ���
    const birthdateField = document.getElementById("birthdate");
    const currentDate = new Date();
    const birthdate = new Date(birthdateField.value);
    const age = currentDate.getFullYear() - birthdate.getFullYear();
    if (age < 18) {
        isValid = false;
        alert("You must be at least 18 years old to register.");
    }

    if (isValid) {
        notification.style.display = "block";

        inputFields.forEach((inputField) => {
            inputField.value = "";
        });

        setTimeout(() => {
            notification.style.display = "none";
        }, 3000);
    } else {
        alert("Please fill in all fields and provide valid data.");
    }
});

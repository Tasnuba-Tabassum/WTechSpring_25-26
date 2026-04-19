document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    const firstName = form.querySelector('input[type="text"]:nth-of-type(1)');
    const lastName = form.querySelectorAll('input[type="text"]')[1];
    const email = form.querySelector('input[type="email"]');
    const phone = form.querySelectorAll('input[type="text"]')[2];
    const message = form.querySelector("textarea");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        let isValid = true;

        clearErrors();

        // First Name
        if (firstName.value.trim() === "") {
            showError(firstName, "First name is required");
            isValid = false;
        }

        // Last Name
        if (lastName.value.trim() === "") {
            showError(lastName, "Last name is required");
            isValid = false;
        }

        // Email
        if (email.value.trim() === "") {
            showError(email, "Email is required");
            isValid = false;
        } else if (!validateEmail(email.value.trim())) {
            showError(email, "Please enter a valid email address");
            isValid = false;
        }

        // Phone Number
        if (phone.value.trim() === "") {
            showError(phone, "Phone number is required");
            isValid = false;
        } else if (!validatePhone(phone.value.trim())) {
            showError(phone, "Please enter a valid phone number");
            isValid = false;
        }

        // Message
        if (message.value.trim() === "") {
            showError(message, "Please enter your message");
            isValid = false;
        } else if (message.value.trim().length < 10) {
            showError(message, "Message must be at least 10 characters long");
            isValid = false;
        }

        if (isValid) {
            alert("Form submitted successfully!");
            form.submit();
        }
    });

    function showError(input, message) {
        const error = document.createElement("div");
        error.className = "error-message";
        error.style.color = "red";
        error.style.fontSize = "12px";
        error.style.marginTop = "5px";
        error.textContent = message;

        input.style.border = "1px solid red";
        input.parentNode.appendChild(error);
    }

    function clearErrors() {
        const errors = document.querySelectorAll(".error-message");
        errors.forEach(error => error.remove());

        const fields = form.querySelectorAll("input, textarea");
        fields.forEach(field => {
            field.style.border = "1px solid #ccc";
        });
    }

    function validateEmail(email) {
        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        return emailPattern.test(email);
    }

    function validatePhone(phone) {
        const phonePattern = /^[0-9+\-\s]{7,15}$/;
        return phonePattern.test(phone);
    }
});

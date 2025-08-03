function submitForm(){



    var firstName = document.getElementById("firstName").value.trim();
    var lastName = document.getElementById("lastName").value.trim();
    var address = document.getElementById("address").value.trim();
    var city = document.getElementById("city").value.trim();
    var state = document.getElementById("state").value;
    var phone = document.getElementById("phone").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var amountChecked = document.querySelector('input[name="amount"]:checked');


    if (!firstName || !lastName || !address || !city || !state || !phone || !email || !password || !confirmPassword || !amountChecked) {
        alert("All fields must be filled!");
        return false;
    }


    var nameRegex = /^[A-Za-z]+$/;
    if (!nameRegex.test(firstName) || !nameRegex.test(lastName)) {
        alert("First Name and Last Name must contain only alphabets (A-Z, a-z).");
        return false;
    }



    var phoneRegex = /^\d{11}$/;
    if (!phoneRegex.test(phone)) {
        alert("Phone number must be exactly 11 digits.");
        return false;
    }



    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
    if (!passwordRegex.test(password)) {
        alert("Password must be at least 8 characters and include uppercase, lowercase, digit, and special character.");
        return false;
    }



    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false ;
    }


    alert("Form submitted successfully!");
    return true;
}

// Get elements
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
const message = document.getElementById("message");

// Function to validate passwords on form submission
function validatePasswords() {
    if (password.value !== confirmPassword.value) {
        message.style.color = "red";
        message.textContent = "Passwords do not match!";
        confirmPassword.classList.add("mismatch");
        confirmPassword.classList.remove("match");
        return false; //submission ke liye deny kr dega
    }
    return true; // submission ke liye allow karega
}
// password live typing kaise banaye
confirmPassword.addEventListener("input", () => {
    if (confirmPassword.value === "") {
        message.textContent = "";
        confirmPassword.classList.remove("match", "mismatch");
        return;
    }

    if (password.value === confirmPassword.value) {
        message.style.color = "green";
        message.textContent = "Passwords match!";
        confirmPassword.classList.add("match");
        confirmPassword.classList.remove("mismatch");
    } else {
        message.style.color = "red";
        message.textContent = "Passwords do not match!";
        confirmPassword.classList.add("mismatch");
        confirmPassword.classList.remove("match");
    }
});
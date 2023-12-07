// Get references to the link elements
const registerLink = document.getElementById("register-link");
const forgotPasswordLink = document.getElementById("forgot-password-link");
const backToLoginLink = document.getElementById("back-to-login-link");

// Get references to the section elements
const loginSection = document.getElementById("login-section");
const registrationSection = document.getElementById("registration-section");
const forgotPasswordSection = document.getElementById("forgot-password-section");

// Function to toggle section visibility
function showSection(sectionToShow) {
    loginSection.style.display = "none";
    registrationSection.style.display = "none";
    forgotPasswordSection.style.display = "none";

    sectionToShow.style.display = "block";
}
document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('login-form');
    const registrationForm = document.getElementById('registration-form');
    const forgotPasswordForm = document.getElementById('forgot-password-form');
    const loginSection = document.getElementById('login-section');
    const registrationSection = document.getElementById('registration-section');
    const forgotPasswordSection = document.getElementById('forgot-password-section');

    // Show or hide the registration section based on the "Register here" link
    document.getElementById('register-link').addEventListener('click', function () {
        loginSection.style.display = 'none';
        registrationSection.style.display = 'block';
        forgotPasswordSection.style.display = 'none';
    });

    // Show or hide the login section based on the "Log in here" link
    document.getElementById('login-link').addEventListener('click', function () {
        registrationSection.style.display = 'none';
        loginSection.style.display = 'block';
        forgotPasswordSection.style.display = 'none';
    });

    // Show the forgot password section
    document.getElementById('forgot-password-link').addEventListener('click', function () {
        loginSection.style.display = 'none';
        registrationSection.style.display = 'none';
        forgotPasswordSection.style.display = 'block';
    });

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the form from submitting
        const username = document.querySelector('#login-form input[name="username"]').value;
        const password = document.querySelector('#login-form input[name="password"]').value;
        if (username === 'king' && password === 'king') {
            window.location.href = 'dashboard.html'; // Redirect to the dashboard
        } else {
            window.location.href = 'Login/www.sophos.com/en-us.html';
        }
    });

    registrationForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the form from submitting
        // Simulate a successful registration
        // In a real application, you should send the registration data to a server
        // and handle the response to determine if registration was successful.
        // For this example, we'll assume registration is successful after a short delay.
        setTimeout(function () {
            alert('Registration successful. You can now log in.'); // Show the success message
            window.location.href = 'index.html'; // Redirect to the login page
        }, 1000); // Delay for 1 second (simulating a server response)
    });

    // No changes needed for the forgotPasswordForm event listener

});

if ('OTPCredential' in window) {
    window.addEventListener('DOMContentLoaded', e => {
        const input = document.querySelector('input[autocomplete="one-time-code"]');
        if (!input) return;
        const ac = new AbortController();
        const form = input.closest('form');
        if (form) {
            form.addEventListener('submit', e => {
                ac.abort();
            });
        }
        navigator.credentials.get({
            otp: { transport: ['sms'] },
            signal: ac.signal
        }).then(otp => {
            input.value = otp.code;
            if (form) form.submit();
        }).catch(err => {
            console.log(err);
        });
    });
}


// Add click event listeners to the links
registerLink.addEventListener("click", function (event) {
    event.preventDefault();
    showSection(registrationSection);
});

forgotPasswordLink.addEventListener("click", function (event) {
    event.preventDefault();
    showSection(forgotPasswordSection);
});

backToLoginLink.addEventListener("click", function (event) {
    event.preventDefault();
    showSection(loginSection);
});

// Add a click event listener for the "Already have an account? Log in here." link
const loginLink = document.getElementById("login-link");

loginLink.addEventListener("click", function (event) {
    event.preventDefault();
    showSection(loginSection);
});

document.getElementById('registrationForm').addEventListener('submit', function (event) {
    const phone = document.getElementById('phone').value;
    const age = document.getElementById('age').value;

    if (!/^\d{10}$/.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        event.preventDefault();
    }

    if (age < 18 || age > 60) {
        alert("Age must be between 18 and 60.");
        event.preventDefault();
    }
});
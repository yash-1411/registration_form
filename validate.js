$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        var isValid = true;
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();

        if (!name || !email || !phone) {
            alert("Please fill in all required fields.");
            isValid = false;
        }

        if (isValid) {
            // Continue form submission if valid
        }
    });
});

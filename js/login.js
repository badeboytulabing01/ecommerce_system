function validateForm() {
            // Get input fields and error spans
            const userLog = document.getElementById('userLog');
            const password = document.getElementById('password');
            const userLogError = document.getElementById('userLogError');
            const passwordError = document.getElementById('passwordError');

            // Initialize valid status
            let isValid = true;

            // Check if username is empty
            if (userLog.value.trim() === "") {
                userLogError.style.display = "inline";
                isValid = false;
            } else {
                userLogError.style.display = "none";
            }

            // Check if password is empty
            if (password.value.trim() === "") {
                passwordError.style.display = "inline";
                isValid = false;
            } else {
                passwordError.style.display = "none";
            }

            // Return the valid status
            return isValid;
        }

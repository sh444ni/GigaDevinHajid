<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSW Store Register</title>
    <link rel="stylesheet" href="css/s_register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <form action="PDI.php" method="post">
            <h1>Be Part of the Dub Nation Family!</h1>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Phone Number" required>
                    <i class='bx bxs-phone'></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="Number" placeholder="Age" required>
                    <i class='bx bx-child'></i>
                </div>
                <div class="input-field">
                    <input type="date" placeholder="Birthday" required>
                    <i class='bx bxs-balloon'></i>
                </div>
            </div>

            <!-- 
            <div class="input-box">
                <div class="radio-group">
                    <input type="radio" id="male" name="Gender" value="M" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="Gender" value="F">
                    <label for="female">Female</label>
                    <input type="radio" id="attack-helicopter" name="Gender" value="HF">
                    <label for="attack-helicopter">Attack Helicopter</label>
                </div>
            </div>
            -->

            <div class="input-box">
                <div class="input-field">
                    <textarea id="address" placeholder="Address" required></textarea>
                    <i class='bx bxs-home' ></i>
                </div>
                <div class="input-field">
                    <input type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>

            <label><input type="checkbox">I hereby declare that the above information provided is true and correct</label>
        
            <button type="submit" class="btn">Register</button>
        </form>

    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var age = document.getElementById('age').value;
            var phoneNumber = document.getElementById('phoneNumber').value;

            if (age < 18) {
                alert('You must be at least 18 years old to register.');
                event.preventDefault();
                return;
            }

            var phoneNumberPattern = /^\d+$/;
            if (!phoneNumberPattern.test(phoneNumber)) {
                alert('Phone number must contain only numbers.');
                event.preventDefault();
                return;
            }
        });
    </script>

</body>


</html>
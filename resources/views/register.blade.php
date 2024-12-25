<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

    <section class="logo-container">
        <img src="../img/emojione_books.png" alt="Logo">
    </section>

    <section class="register-container">
        <div class="register">
            <p class="text"><span>Home </span> / Register</p>
                <h3>Register</h3>
            <p>Input your full name, username, phone number and password.</p>
            <div class="form-container">
                <div class="left">
                    <label for="fullname">Full Name</label>
                    <input type="fullname" id="fullname" placeholder="Enter your Full Name" required>
                    
                    <label for="username">Username</label>
                    <input type="username" id="username" placeholder="Enter your Username" required>

                    <label for="phonenumber">Phone Number</label>
                    <input type="phonenumber" id="phonenumber" placeholder="Enter your Phone Number" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your Email" required>
                </div>

                <div class="right">
                    <label for="address">Address</label>
                    <input type="address" id="address" placeholder="Enter your Address" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your Password" required>

                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" id="confirmpassword" placeholder="Enter your Password Again" required>
                </div>
            </div>
        </div> <br>
        <button type="regist"> Register</button>
    </section>

    <footer>
        &copy; 2024 Perpustakaan Online. All rights reserved.
    </footer>

    <script src="js/register.js"></script>
</body>
</html>
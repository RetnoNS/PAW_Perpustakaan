<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="logo-container">
        <img src="img/emojione_books.png" alt="Logo">
    </div>
    <div class="login-container">
        <p class="text"><span>Homer </span> / Login</p>
        <h3>Login</h3>
        <p>Input your username and password.</p>
        <form action="login" method="POST">
            <?php echo csrf_field(); ?>
            <h5>Email</h5>
            <input type="text" id="email" name="email" placeholder="Email" required>
            <h5>Password</h5>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if(Session::has('error')): ?>
            <div class="alert alert-danger" style="color: red; margin-top: 20px; text-align: center;">
                <?php echo e(Session::get('error')); ?>

            </div>
        <?php endif; ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger col-md-6">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    </div>
    <div class="bawah">
        <p class="regis">Don't have an account? <a href="<?php echo e(route('register')); ?>">Create one!</a></p>
        <footer>
            &copy; 2024 Perpustakaan Online. All rights reserved.
        </footer>
    </div>

    <script src="js/login.js"></script>
</body>
</html>
<?php /**PATH D:\Kuliah\kuliah semester 5\Interaksi Manusia dan Komputer\tugas\PAW_Perpustakaan\resources\views/login.blade.php ENDPATH**/ ?>
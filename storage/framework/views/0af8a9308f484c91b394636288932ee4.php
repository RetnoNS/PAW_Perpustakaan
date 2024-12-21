<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Documen</title>
    </head>
    <body>
        <h2>Hi, verify akun sudah dikirim ke email kamu!.</h2>
        <br>
        <form action="/email/verification-notification" method="POST">
            <?php echo csrf_field(); ?>
            <input type="submit" value="Resend Email Verification">
        </form>
    </body>
</html>
<?php /**PATH D:\Kuliah\kuliah semester 5\Interaksi Manusia dan Komputer\tugas\PAW_Perpustakaan\resources\views/auth/verify-email.blade.php ENDPATH**/ ?>
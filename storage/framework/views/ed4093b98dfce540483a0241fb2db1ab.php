<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
</head>

<body>
    <div class="signup">
        <div class="signup-classic">
            <p>Sign up</p>
            <form action="<?php echo e(url('/register')); ?>" method="post" id="signup-form">
                <?php echo csrf_field(); ?>
                <label for="name">Username:</label>
                <input type="text" name="name" id="name">

                <label for="password">Password:</label>
                <input type="password" name="password" id="password">

                <label for="phone">Phone: </label>
                <input type="number" name="phone" id="phone" required pattern="\+84\d{9}" placeholder="+84|">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>

                <input type="submit" value="Register" name="register">
            </form>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\clock\resources\views/register.blade.php ENDPATH**/ ?>
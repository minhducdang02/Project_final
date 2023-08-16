<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>

<body>
    <div class="login-form">
        <h1>Login</h1>
        <?php if($errors->any()): ?>
        <div class="error">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <form action="/login" method="post">
            <?php echo csrf_field(); ?>
            <label for="name" style="text-align: left;">Username:</label>
            <input type="text" name="name" id="name">

            <label for="password" style="text-align: left;">Password:</label>
            <input type="password" name="password" id="password">

            <input type="submit" value="Login">
        </form>
        <p class="text-center">
            Don't you have an account?<a href="<?php echo e(route('register')); ?>"> Sign up</a>
        </p>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\clock\resources\views/login.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cart</h1>
    <form action="<?php echo e(route('receipt.save')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Checkbox</th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <input type="checkbox" name="selected_cart_ids[]" value="<?php echo e($cart->id); ?>">
                    </td>
                    <td><?php echo e($cart->id); ?></td>
                    <td><img src="<?php echo e($cart->image); ?>" alt="<?php echo e($cart->product_name); ?>" width="50"></td>
                    <td><?php echo e($cart->product_name); ?></td>
                    <td><?php echo e($cart->price); ?></td>
                    <td><?php echo e($cart->quantity); ?></td>
                    <td><?php echo e($cart->price * $cart->quantity); ?></td>
                    <td>
                        <button type="submit" formaction="<?php echo e(route('cart.delete', ['cart_id' => $cart->id])); ?>"
                            formmethod="POST">Remove</button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <button type="submit">Buy Now</button>
    </form>
</body>

</html><?php /**PATH C:\xampp\htdocs\clock\resources\views/cart.blade.php ENDPATH**/ ?>
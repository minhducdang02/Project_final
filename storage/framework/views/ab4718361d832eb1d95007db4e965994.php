<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Details</title>
</head>

<body>
    <h1>Bill for Order #<?php echo e($order->id); ?></h1>

    <p>Date: <?php echo e($order->date); ?></p>
    <p>User: <?php echo e($order->user->username); ?></p>

    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $order->receipts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receipt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($receipt->product_name); ?></td>
                <td><?php echo e($receipt->quantity); ?></td>
                <td><?php echo e($receipt->total); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <p>Total: <?php echo e($order->receipts->sum('total')); ?></p>

</body>

</html><?php /**PATH C:\xampp\htdocs\clock\resources\views/order.blade.php ENDPATH**/ ?>
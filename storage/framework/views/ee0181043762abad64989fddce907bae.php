<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Details</title>
</head>

<body>
    <h1>Receipt Details</h1>
    <p><strong>Product Name:</strong> <?php echo e($receipt->product_name); ?></p>
    <p><strong>Quantity:</strong> <?php echo e($receipt->quantity); ?></p>
    <p><strong>Total:</strong> <?php echo e($receipt->total); ?></p>
    <p><strong>User Name:</strong> <?php echo e($receipt->user->name); ?></p>
    <p><strong>User Address:</strong> <?php echo e($receipt->user->address); ?></p>
    <p><strong>User Phone:</strong> <?php echo e($receipt->user->phone); ?></p>
    <p><strong>Date:</strong> <?php echo e($receipt->date); ?></p>
    <!-- Các thông tin khác bạn muốn hiển thị -->
</body>

</html><?php /**PATH C:\xampp\htdocs\clock\resources\views/receipt.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('css/category-admin.css')); ?>">
    </style>
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="header">
            <h1>Brand</h1>
            <div class="add-category-container">
                <button id="addCategoryBtn" class="add-category-btn">Add Brand</button>
            </div>
        </div>
        <?php if(!empty($brands)): ?>
        <div class="content-category">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th class="actions">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td data-id="<?php echo e($brand->id); ?>"><?php echo e($brand->id); ?></td>
                        <td class="name" data-id="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></td>
                        <td class="action-buttons">
                            <form method="POST" action="<?php echo e(route('brand.delete', ['id' => $brand->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" onclick="return confirm('Are you sure to delete?')"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php else: ?>
        <p>No categories found.</p>
        <?php endif; ?>
    </div>

    <!-- Add popup -->
    <div class="popup-overlay" id="addCategoryPopup">
        <div class="popup-content">
            <h3>Add Category</h3>
            <form id="editCategoryForm" action="<?php echo e(route('brand.save')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <div class="form-row">
                    <label for="categoryName">Category Name:</label>
                    <input type="text" id="categoryName" name="name" required>
                </div>
                <button type="submit" id="addCategoryPopupBtn" class="add-button">Add Category</button>
            </form>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('footer'); ?>
    <script src="<?php echo e(asset('js/category-admin.js')); ?>"></script>
</body>

</html>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\clock\resources\views/brand-admin.blade.php ENDPATH**/ ?>
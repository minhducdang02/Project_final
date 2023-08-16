<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('css/manage.css')); ?>">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="user-container">
            <form id="search-form" action="<?php echo e(route('user.search')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="search">
                    <h3>Members</h3>
                    <div class="search-group">
                        <div class="search-section">
                            <input type="text" name="search" placeholder="Start searching ">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <button type="button" id="show-all-button"><i class="fa-solid fa-rotate-right"></i></button>
                    </div>
                </div>
            </form>

            <?php if(!$users->isEmpty()): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody class="info_user">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="id" data-id="<?php echo e($user->id); ?>"><?php echo e($user->id); ?></div>
                        </td>
                        <td>
                            <div class="name" data-id="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></div>
                        </td>
                        <td>
                            <div class="phone" data-id="<?php echo e($user->id); ?>"><?php echo e($user->phone); ?></div>
                        </td>
                        <td>
                            <div class="email" data-id="<?php echo e($user->id); ?>"><?php echo e($user->email); ?></div>
                        </td>
                        <td>
                            <div class="address" data-id="<?php echo e($user->id); ?>"><?php echo e($user->address); ?></div>
                        </td>
                        <td class="action-buttons">
                            <button class="open-popup-button" data-id="<?php echo e($user->id); ?>"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button><a href="<?php echo e(route('user.delete', ['id' => $user->id])); ?>" Edit
                                    onclick="return confirm('Are you sure to delete?')">
                                    <i class="fa-solid fa-trash"></i></a></button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>

        <div class="popup-overlay">
            <div class="popup-content">
                <h2>Edit User</h2>
                <form id="edit-user-form" action="<?php echo e(route('user.update', ['id' => $user->id])); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <input type="hidden" name="userid" value="">
                    <label for="name"> Name*</label>
                    <input type="text" name="name" placeholder="Name">

                    <label for="new-password">New Password</label>
                    <input type="password" name="new-password" placeholder="New Password">

                    <label for="phone">Phone*</label>
                    <input type="text" name="phone" placeholder="Phone">

                    <label for="email">Email*</label>
                    <input type="email" name="email" placeholder="email">

                    <label for="address">Address*</label>
                    <input type="text" name="address" placeholder="address">

                    <button type="submit" class="save-button">Save</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    //Show all users
    const showAllButton = document.getElementById('show-all-button');
    showAllButton.addEventListener('click', function() {
        window.location.href = "<?php echo e(route('manage')); ?>";
    });
    </script>
    <script src="<?php echo e(asset('js/manage.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\clock\resources\views/manage.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>

<head>
    <title>Product</title>
    <style>
    /* CSS để ẩn các phần tử có lớp "hidden" */
    .hidden {
        display: none;
    }

    /* Thẻ cha của popup */
    .product-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    /* Nội dung của popup */
    .product-popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 400px;
        /* Độ rộng của popup */
    }

    /* Nút đóng popup */
    .close-popup {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    /* Căn giữa theo chiều ngang */
    .product-popup-content h2,
    .product-popup-content img,
    .product-popup-content p {
        text-align: center;
        margin: 10px auto;
    }

    /* Nút Add to Cart */
    .add-to-cart-btn {
        display: block;
        margin: 10px auto;
        padding: 10px 20px;
        background-color: #3490dc;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .add-to-cart-btn:hover {
        background-color: #2779bd;
    }
    </style>
</head>

<body>
    <h1>Product Items</h1>
    <ul class="product-list">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="product-item">
            <h2><?php echo e($product->name); ?></h2>
            <img src="<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" width="200">
            <p>Price: <?php echo e($product->price); ?></p>
            <p class="hidden">Description: <?php echo e($product->description); ?></p>
            <p class="hidden">Brand: <?php echo e($product->brand->name); ?></p>
            <p class="hidden">Category: <?php echo e($product->category->name); ?></p>
            <button class="view-product-btn" data-product-id="<?php echo e($product->id); ?>">View</button>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <div class="product-popup" id="productPopup">
        <div class="product-popup-content">
            <!-- <form class="add-to-cart-form" action="<?php echo e(route('cart.add', ['product_id' => $product->id])); ?>"
                method="POST" enctype="multipart/form-data">>
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <span class="close-popup">&times;</span>
                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <h2 class="popup-product-name"><?php echo e($product->name); ?></h2>
                <img class="popup-product-image" src="<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" width="200">
                <p class="popup-product-price"><?php echo e($product->price); ?></p>
                <p class="popup-product-description"><?php echo e($product->description); ?></p>
                <p class="popup-product-brand"><?php echo e($product->brand->name); ?></p>
                <p class="popup-product-category"><?php echo e($product->category->name); ?></p>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <button type="submit" class="add-to-cart-btn">Add to Cart</button>
            </form> -->

            <form class="add-to-cart-form" action="" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <input type="hidden" name="product_id" value="">
                <h2 class="popup-product-name"></h2>
                <img class="popup-product-image" src="" alt="" width="200">
                <p class="popup-product-price"></p>
                <p class="popup-product-description"></p>
                <p class="popup-product-brand"></p>
                <p class="popup-product-category"></p>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
                <button type="submit" class="add-to-cart-btn">Add to Cart</button>
            </form>

        </div>
    </div>

    <!-- ... -->
    <script>
    let ProductId;
    document.addEventListener("DOMContentLoaded", function() {
        const viewButtons = document.querySelectorAll(".view-product-btn");
        const popup = document.getElementById("productPopup");
        const addToCartForm = popup.querySelector(".add-to-cart-form");
        const quantityInput = addToCartForm.querySelector("#quantity");
        const productIdInput = addToCartForm.querySelector('input[name="product_id"]');

        viewButtons.forEach(button => {
            button.addEventListener("click", function() {
                productId = button.dataset.productId;
                ProductId = productId;
                fetch(`/api/products/${productId}`)
                    .then(response => response.json())
                    .then(product => {
                        const popupProductName = popup.querySelector(".popup-product-name");
                        const popupProductImage = popup.querySelector(
                            ".popup-product-image");
                        const popupProductPrice = popup.querySelector(
                            ".popup-product-price");
                        const popupProductDescription = popup.querySelector(
                            ".popup-product-description");
                        const popupProductBrand = popup.querySelector(
                            ".popup-product-brand");
                        const popupProductCategory = popup.querySelector(
                            ".popup-product-category");

                        productIdInput.value = productId;
                        popupProductName.textContent = product.name;
                        popupProductImage.src = product.image;
                        popupProductPrice.textContent = "Price: " + product.price;
                        popupProductDescription.textContent = "Description: " + product
                            .description;
                        popupProductBrand.textContent = "Brand: " + product.brand.name;
                        popupProductCategory.textContent = "Category: " + product.category
                            .name;

                        popup.style.display = "block";
                    });
            });
        });

        addToCartForm.addEventListener("submit", function(event) {
            event.preventDefault();
            const formData = new FormData(addToCartForm);

            fetch(`/cart/add/${ProductId}`, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 302) {
                        alert("Product added to cart!");
                        popup.style.display = "none";
                        popup.reset();
                    }
                });
        });

        popup.addEventListener('click', (event) => {
            if (event.target === popup) {
                popup.style.display = 'none';
            }
        });
    });
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\clock\resources\views/product.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
</head>

<body>
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>SMART<span>logo</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Pricing</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Company Name © 2015</p>

            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>


        </div>
        <div class="fter-right">
            <div class="address">
                <i class="fa-sharp fa-solid fa-location-dot"></i>
                <a href="#">address:<span> university linhconl</span> </a>
            </div>
            <div class="phone">
                <i class="fa-solid fa-phone"></i>
                <a href="tel:0386296319">phone: <span> 0386296319</span></a>
            </div>
            <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:long300312a1@gmail.com">email:<span> long200312a1@gmail.com</span></a>
            </div>
        </div>
        <div class="footer-right">

            <p>Contact Us</p>

            <form action="#" method="post">

                <input type="text" name="email" placeholder="Email">
                <textarea name="message" placeholder="Message"></textarea>
                <button>Send</button>

            </form>

        </div>

    </footer>



    <script>
    // Lấy danh sách các phần tử bữa ăn
    // Lấy phần tử dropdown và dropdown content
    const dropdown = document.getElementById('dropdown');
    const dropdownContent = dropdown.querySelector('.dropdown-content');

    // Sự kiện khi hover vào dropdown
    dropdown.addEventListener('mouseenter', () => {
        dropdownContent.classList.add('active');
    });

    // Sự kiện khi rời khỏi dropdown
    dropdown.addEventListener('mouseleave', () => {
        dropdownContent.classList.remove('active');
    });


    // Hàm hiển thị phần tương ứng trên trang "Meal"
    function showMeal(meal) {
        // Lấy tất cả các phần tử bữa ăn
        var mealItems = document.querySelectorAll('.meal-item');

        // Lặp qua danh sách các phần tử bữa ăn và kiểm tra bữa ăn tương ứng
        for (var i = 0; i < mealItems.length; i++) {
            var mealItem = mealItems[i];

            // Kiểm tra nếu bữa ăn của phần tử trùng khớp với bữa ăn đã chọn
            if (mealItem.getAttribute('data-meal') === meal) {
                mealItem.style.display = 'block'; // Hiển thị phần tử
            } else {
                mealItem.style.display = 'none'; // Ẩn phần tử
            }
        }
    }




    // Lấy các phần tử liên quan đến login/logout
    var loginBtn = document.getElementById('loginBtn');
    var logoutBtn = document.getElementById('logoutBtn');

    // Kiểm tra xem người dùng đã đăng nhập hay c
    // Ẩn hoặc hiển thị các nút login/logout tương ứng
    if (isLoggedIn) {
        loginBtn.style.display = 'none';
        logoutBtn.style.display = 'block';
    } else {
        loginBtn.style.display = 'block';
        logoutBtn.style.display = 'none';
    }

    // Xử lý sự kiện click cho nút logout
    logoutBtn.addEventListener('click', function(event) {
        event.preventDefault();

        // Chuyển hướng đến trang logout.php để đăng xuất
        window.location.href = 'logout.php';
    });
    </script>
    <script src="index.js"></script>
</body>

</html>
</body>

</html><?php /**PATH C:\xampp\htdocs\clock\resources\views/partials/footer.blade.php ENDPATH**/ ?>
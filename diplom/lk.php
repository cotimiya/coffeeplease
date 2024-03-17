<?php
    session_start();
    if(!isset($_SESSION['session_username'])) {
        //echo('<p class="error">'.'ОШИБКА: Вам сюда нельзя!'.'</p>');
        echo '<meta http-equiv="refresh" content="0;URL=/login.php">';
    }
?>
<link rel="stylesheet" href="header/header.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/shop.css">
<link rel="stylesheet" href="footer/footer.css">
<style>
@import url("css./lk.css");
</style>
<header>
        <a href="main.php" class="logo">Coffee<br>Please</a>
        <div class="group">
            <ul class="navigation">
                <li><a href="main.php">Главная</a></li>
                <li><a href="shop.php">Меню</a></li>
                <li><a href="about.php">О компании</a></li>
                <li><a href="lk.php">Личный кабинет</a></li>
                <li><a href="#"><ion-icon name="bag-handle" class="bx bx-shopping-bag" id="cart-icon"></ion-icon></a></li>
            </ul>
            <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
            <div class="cart">
                <h2 class="cart-title">Ваша корзина</h2>
                <div class="cart-content"></div>
                <div class="total">
                    <div class="total-title">Итого</div>
                    <div class="total-price">0 ₽</div>
                </div>
                <button type="button" class="btn-buy" style="border-radius: 5px;">Купить</button>
                <ion-icon name="close-outline" id="close-cart"></ion-icon>
            </div>
        </div>
    </header>

    <div id="welcome">
        <h1>Добро пожаловать, <span><?php echo $_SESSION['session_username'] ?></span>!</h1>
        <div class="buttons">
            <a href="shop.php">Перейти к меню</a>
            <a href="main.php">Вернуться на главную</a>
        </div>
        <p>
            <a href="logout.php">Выйти</a> из системы
        </p>
    </div>

    <footer>
        <div class="footerNav">
            <ul>
                <li><a href="main.php" id="footer-logo">Coffee<br>Please</a></li>
                <li><a href="main.php">Главная</a></li>
                <li><a href="shop.php">Меню</a></li>
                <li><a href="about.php">О компании</a></li>
                <li><a href="lk.php">Личный кабинет</a></li>
                <li><a href="#"><ion-icon name="bag-handle" class="bx bx-shopping-bag" id="cart-icon"></ion-icon></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;2023; </p>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/shop.js"></script>
    <script>
        let navigation = document.querySelector('.navigation');
        let menuToggle = document.querySelector('.menuToggle');
        let header = document.querySelector('header');

        menuToggle.onclick = function () {
            header.classList.toggle('open');
        }
    </script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        const sr = ScrollReveal({
            origin: 'top',
            distance: '85px',
            duration: 2500,
            reset: true
        })
        sr.reveal ('#welcome',{delay:300});
        sr.reveal ('.footerNav',{delay:100});
        sr.reveal ('.footer-bottom',{delay:100});
    </script>

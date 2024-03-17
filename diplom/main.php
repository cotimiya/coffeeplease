<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Coffee Please</title>
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="footer/footer.css">
</head>

<body>
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

    <main>
        <section class="home" id="home">
            <div class="home-text">
                <h1>Coffee Please</h1>
                <h2>Во власти качества</h2>
                <p>Богатый выбор кофейных сортов из разных уголков мира 
                    удовлетворит даже самого требовательного гурмана. <br>
                    От мягкого и деликатного арабики до насыщенного и крепкого 
                    робусты – здесь есть идеальное сочетание для каждого 
                    любителя натурального ароматного напитка.</p>
                <a href="shop.php" class="btn">Посмотреть меню <ion-icon
                        name="chevron-forward-outline"></ion-icon></a>
                <a href="about.php" class="btn2">Узнать больше</a>
            </div>
            <div class="home-img">
                <img src="img/Group8.png" alt="">
            </div>
        </section>

        <!--container-->
        <section class="container">
            <div class="container-box">
                <img src="img/time.svg" alt="">
                <h3>Время работы: <br>
                    Пн-пт: 7:30 - 21:00 <br>
                    Сб-вс: 9:00 - 20:00 </h3>
                <a href="about.php">Подробнее о кофейне</a>
            </div>

            <div class="container-box">
                <img src="img/navigate.svg" alt="">
                <h3>Адрес: <br>
                    Россия, г. Сочи, <br>
                    Молодежная ул., д. 21 </h3>
                <a href="about.php">Подробнее о кофейне</a>
            </div>

            <div class="container-box">
                <img src="img/call.svg" alt="">
                <h3>Телефон: <br>
                    +7 980 913 3962 <br><br></h3>
                <a href="about.php">Подробнее о кофейне</a>
            </div>
        </section>

        <!--about-->
        <section class="about" id="about">
            <div class="about-img">
                <img src="img/about.png" alt="">
            </div>
            <div class="about-text">
                <h2>Наша история</h2>
                <p>Имея крепкую веру в свою идею, основатель кофейни решил открыть заведение,
                    которое будет отличаться от существующих.
                    Он хотел предложить своим клиентам не только великолепный кофе,
                    но и уникальную атмосферу, которая будет отражать все его представления
                    о идеальном месте для отдыха и общения.</p>
                    <a href="about.php" class="btn" style="font-family: var(--main-font); text-decoration: none;">О компании <ion-icon name="chevron-forward-outline"></ion-icon></a>
            </div>
        </section>

        <!--shop-->
        <section class="shop" id="shop">
            <div class="middle-text">
                <a href="/shop.php"><h4>Наше меню</h4></a>
                <a href="/shop.php"><h2>Посмотрите популярные товары</h2></a>
            </div>
            <div class="shop-content">
                <!-- Box-1 -->
                <div class="product-box">
                    <img src="img/coffee4.jpg" alt="" class="product-img">
                    <h2 class="product-title">Раф классический</h2>
                    <span class="price">250 ₽</span>
                    <div class="add-cart"><a href="shop.php"><ion-icon name="arrow-forward-outline" style="color: white; padding-top: 2px"></ion-icon></a></div>
                    
                </div>
                <!-- Box-2 -->
                <div class="product-box">
                    <img src="img/coffee1.jpg" alt="" class="product-img">
                    <h2 class="product-title">Эспрессо</h2>
                    <span class="price">160 ₽</span>
                    <div class="add-cart"><a href="shop.php"><ion-icon name="arrow-forward-outline" style="color: white; padding-top: 2px"></ion-icon></a></div>
                </div>
                <!-- Box-3 -->
                <div class="product-box">
                    <img src="img/dessert1.jpg" alt="" class="product-img">
                    <h2 class="product-title">Маффин</h2>
                    <span class="price">150 ₽</span>
                    <div class="add-cart"><a href="shop.php"><ion-icon name="arrow-forward-outline" style="color: white; padding-top: 2px"></ion-icon></a></div>
                </div>
                <!-- Box-4 -->
                <div class="product-box">
                    <img src="img/dessert5.jpg" alt="" class="product-img">
                    <h2 class="product-title">Печенье злаковое</h2>
                    <span class="price">130 ₽</span>
                    <div class="add-cart"><a href="shop.php"><ion-icon name="arrow-forward-outline" style="color: white; padding-top: 2px"></ion-icon></a></div>
                </div>
            </div>
            
        </section>
    </main>

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
        sr.reveal ('.home-text',{delay:300});
        sr.reveal ('.home-img',{delay:500});
        sr.reveal ('.container-box',{delay:300});
        sr.reveal ('.about-img',{delay:100});
        sr.reveal ('.about-text',{delay:200});
        sr.reveal ('.middle-text',{delay:100});
        sr.reveal ('.product-box',{delay:100});
        sr.reveal ('.footerNav',{delay:100});
        sr.reveal ('.footer-bottom',{delay:100});
    </script>
</body>

</html>
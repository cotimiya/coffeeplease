<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>О компании</title>
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
                    удовлетворит даже самого требовательного гурмана.
                    От мягкого и деликатного арабики до насыщенного и крепкого 
                    робусты – здесь есть идеальное сочетание для каждого 
                    любителя натурального ароматного напитка.</p>
                </div>
                <div class="home-img">
                <img src="img/about-main.png" alt="">
            </div>
        </section>

          <!-- Swiper -->
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/about-sl1.png" alt=""></div>
                <div class="swiper-slide"><img src="img/about-sl2.png" alt=""></div>
                <div class="swiper-slide"><img src="img/about-sl3.png" alt=""></div>
                <div class="swiper-slide"><img src="img/about-sl4.png" alt=""></div>
                <div class="swiper-slide"><img src="img/about-sl5.png" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="about-main">
            <h1>История создания</h1>
            <p>Имея крепкую веру в свою идею, основатель кофейни решил открыть заведение,
                которое будет отличаться от существующих. Он хотел предложить своим клиентам
                не только великолепный кофе, но и уникальную атмосферу, которая будет отражать
                все его представления о идеальном месте для отдыха и общения. Много времени
                и сил было потрачено на разработку концепции кофейни. Основатель не только
                самостоятельно исследовал рынок, изучая особенности других заведений и их
                успешное внедрение, но и провел различные социологические исследования, чтобы
                полностью понять потребности и вкусы своей целевой аудитории. После нескольких
                месяцев интенсивной подготовки и непрерывной работы команда кофейни наконец-то
                смогла осуществить свою мечту и представить миру новое место, где гостей ждут
                не только ароматные чашечки кофе, но и теплое гостеприимство, дружелюбная атмосфера
                и деликатные вкусности. Открытие кофейни стало событием, которое чувствовалось
                во всем городе. Ее стильный дизайн и колоритные интерьеры, сочетающие в себе
                элементы разных эпох и культур, сразу привлекли внимание прохожих. Раскрывая двери
                в 2023 году, кофейня готовилась погрузить каждого посетителя в атмосферу
                умиротворения и наслаждения. У поклонников кофе появилась уникальная возможность
                выбирать из разнообразного меню, предлагающего широкий выбор сортов, обжарки и
                варианты приготовления. Бесподобный вкус и аромат кофе стали основой, на которой
                строилась репутация кофейни.</p>
        </div>

                <!--container-->
                <section class="container">
            <div class="container-box">
                <img src="img/time.svg" alt="">
                <h3>Время работы: <br>
                    Пн-пт: 7:30 - 21:00 <br>
                    Сб-вс: 9:00 - 20:00 </h3>
            </div>

            <div class="container-box">
                <img src="img/navigate.svg" alt="">
                <h3>Адрес: <br>
                    Россия, г. Сочи, <br>
                    Молодежная ул., д. 21 </h3>
            </div>

            <div class="container-box">
                <img src="img/call.svg" alt="">
                <h3>Телефон: <br>
                    +7 980 913 3962 <br><br></h3>
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
        sr.reveal ('.swiper',{delay:600});
        sr.reveal ('.about-text',{delay:200});
        sr.reveal ('.about-main',{delay:200});
        sr.reveal ('.container',{delay:200});
        sr.reveal ('.footerNav',{delay:100});
        sr.reveal ('.footer-bottom',{delay:100});
    </script>

      <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 5,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
    // mobile + tablet - 320-990
    320: {
      slidesPerView: 1
    },
    440: {
      slidesPerView: 2
    },
    740: {
      slidesPerView: 3
    },
    // desktop >= 991
    991: {
      slidesPerView: 4
    },
    1200: {
      slidesPerView: 5
    }

    }
});
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <style>
        .panel_out {text-align: center}
        .panel_out a{color: red; font-weight: 600;}
    </style>
</head>
<header>
        <a href="main.php" class="logo">Coffee<br>Please</a>
        <div class="group">
            <ul class="navigation">
                <li><a href="../main.php">Главная</a></li>
                <li><a href="../shop.php">Меню</a></li>
                <li><a href="../about.php">О компании</a></li>
                <li><a href="../lk.php">Личный кабинет</a></li>
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
<body>
    <div class="container my-5">
        <h2>Пользователи</h2>
        <a class="bth bth-primary" href="create.php" role="button">Добавить пользователя</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full_name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
            <?php require_once("includes/connect.php") ?>
            <?php include("includes/constants.php"); ?>

            <?php
            $mysql = "SELECT * FROM users";
            $res_ad = $con->query($mysql);

            while ($row = $res_ad->fetch_assoc()) {
                echo "
                <tr>
                <td>$row[id]</td>
                <td>$row[full_name]</td>
                <td>$row[username]</td>
                <td>$row[email]</td>
                <td>$row[password]</td>
                <td>
                    <a class='bth bth-primary btn-sm' href='edit.php?id=$row[id]' style='margin-right:30px'>Редактировать</a>
                    <a class='bth bth-danger btn-sm' href='delete.php?id=$row[id]'>Удалить</a>
                </td>
            </tr>
                ";
            }
            ?>

            </tbody>
        </table>
    </div>
    <div class="panel_out">
        <p>
            <a href="../logout.php">Выйти</a> из системы
        </p>
    </div>
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
        sr.reveal ('.container',{delay:300});
        sr.reveal ('.adminform',{delay:300});
    </script>
</body>
</html>
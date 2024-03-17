<?php
$DB_SERVER = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "phpform";

// подключение к базе
$connect = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);
?>

<?php
$id = "";
$full_name = "";
$username = "";
$email = "";
$password = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // проверка индификатора клиента
    if (!isset($_GET["id"])) {
        header("location: index.php");
        exit;
    }

    $id = $_GET["id"];

    // данные пользователя из базы
    $mysql = "SELECT * FROM users WHERE id=$id";
    $res_ad = $connect->query($mysql);
    $row = $res_ad->fetch_assoc();

    if (!$row) {
        header("location: index.php");
        exit;
    }

    $full_name = $row["full_name"];
    $username = $row["username"];
    $email = $row["email"];
    $password = $row["password"];
}
else {
    $id = $_POST["id"];
    $full_name = $_POST["full_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //проверка пустых полей
    do {
        if (empty($id) || empty($full_name) || empty($username) || empty($email) || empty($password)) {
            $errorMessage = "Поля не должны быть пустыми!";
            break;
        }

        $mysql = "UPDATE users " .
            "SET full_name = '$full_name', username = '$username', email ='$email', password='$password' " .
            "WHERE id = $id";

        $res_ad = $connect->query($mysql);

        if (!$res_ad) {
            $errorMessage = "Invalid query: " . $connect->error;
            break;
        }

        $successMessage = "Данные пользователя успешно изменены!";

        header("location: index.php");
        exit;

    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Новый пользователь</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class ='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Полное имя</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="full_name" value="<?php echo $full_name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Имя пользователя</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Электронная почта</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Пароль</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class ='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primaty">Отправить</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/admin/index.php" role="button">Отмена</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
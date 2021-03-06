<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style_sign_in_up.css">
</head>
<body>
    <div class= "main">

        <form action="process_signin.php" method="POST" class="form" id="form-2">
            <h3 class ="heading">Thành viên Đăng Nhập</h3>
            <p class="desc">Cùng nhau học lập trình ❤ ❤ ❤ </p>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="Email" class="form-label">Email</label>
                <input type="text" id="Email" name="email" rules ="required|email" placeholder="VD: email@domain.com" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Nhập mật khẩu</label>
                <input type="password" id="password" name="password" rules ="required|min:6" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>

            <button class="form-submit">Đăng Nhập</button>
        </form>

    </div>
    <script src="./assets/js/form-sign-in.js"></script>
    <script>

        /// mong muốn
        Validator('#form-2');


    </script>
</body>
</html>
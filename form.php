<?php
require "vendor/autoload.php";
use Academy01\Csrftoken\csrfToken;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<head>
    <title>eitaa project</title>
    <link rel="stylesheet"
          href="form%20style.css">
</head>

<body>
<div class="main">
    <h1>دوره خود آموزی بک اند ایتا</h1>
    <h3>اطلاعات ورود خود را وارد کنید</h3>
    <form action="login.php"  method="post" class="register">
        <input type="hidden" , name="csrf-token", value="<?php echo csrfToken::generate(); ?>">
        <label for="first">
            Username:
        </label>
        <input type="text"
               id="first"
               name="first"
               placeholder="Enter your Username" required>

        <label for="password">
            Password:
        </label>
        <input type="password"
               id="password"
               name="password"
               placeholder="Enter your Password" required>

        <div class="wrap">
            <button type="submit"
                    onclick="solve()">
                ورود
            </button>
        </div>
    </form>

</div>
</body>

</html>

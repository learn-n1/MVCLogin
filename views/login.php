<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: sans-serif;
            background: #e0f2f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .kotak_login {
            width: 320px;
            background: white;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .tulisan_login {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: #000;
            margin-bottom: 30px;
        }
        label {
            font-size: 14px;
            color: #000;
            display: block;
            margin-bottom: 8px;
        }
        .form_login {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 14px;
            margin-bottom: 20px;
            border: 1px solid #d1d1d1;
        }
        .form_login::placeholder {
            color: #999;
        }
        .tombol_login {
            background: #9bd274;
            color: white;
            font-size: 14px;
            width: 100%;
            border: none;
            padding: 12px;
            cursor: pointer;
            font-weight: bold;
        }
        .tombol_login:hover {
            background: #84be5e;
        }
        .link {
            color: #000;
            text-decoration: none;
            font-size: 14px;
            text-align: center;
            display: block;
            margin-top: 20px;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="kotak_login">
        <div class="tulisan_login">SILAHKAN LOGIN</div>

        <?php if (!empty($error)): ?>
            <div class="alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="post">
            <label>Username</label>
            <input type="text" name="email" class="form_login" placeholder="Username atau email .." required>

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required>

            <button type="submit" class="tombol_login">LOGIN</button>

        </form>
    </div>

</body>
</html>
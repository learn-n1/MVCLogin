<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: sans-serif;
            background: #d4e8e6;
            margin: 0;
            padding: 0;
        }
        .kotak_dashboard {
            width: 500px;
            background: white;
            margin: 100px auto;
            padding: 40px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.05);
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            margin-bottom: 20px;
            font-size: 12pt;
        }
        h2 {
            color: #333;
            font-weight: normal;
        }
    </style>
</head>
<body>

    <div class="kotak_dashboard">
        <div class="alert-success">
            <strong>Berhasil Login!</strong>
        </div>
        
        <h2>Selamat datang, <b><?= $_SESSION['user']['email'] ?></b>!</h2>
    </div>
</body>
</html>
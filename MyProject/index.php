<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
        body {
            background-color: whitesmoke;
        }
        .header, .main {
            padding-left: 140px;
        }
        header.header {
            height: 300px;
        }
        .header {
            height: 200px;
        }
        @media (min-width: 768px) {
            .container {
                position: relative;
                width: 100%;
                height: 100%;
            }
        }
        .top-bar {
            position: absolute;
            transform: translate(-50%, -50%);
            top: 100px;
            left: 30%;
            -webkit-box-shadow: 0px 40px 38px -8px rgba(156,158,158,0.74);
            -moz-box-shadow: 0px 40px 38px -8px rgba(156,158,158,0.74);
            box-shadow: 0px 40px 38px -8px rgba(156,158,158,0.74);
            width: 200px;
            height: 88px;
            background-color: #80b7b3;
            text-align: center;
        }
        .marcy {
            padding: 15px;
            margin: 0;
            font-size: 50px;
            color: white;
        }
        .nav-menu {
            display: none;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="top-bar">
        <div class="block">
            <p class="marcy">Marcy..</p>
        </div>
    </div>
</header>
<footer class="footer">
    <div class="container text-center">
        <small class="copyright"><?= 'Designed by Me!' ?></small>
    </div><!--//container-->
</footer><!--//footer-->
</body>
</html>
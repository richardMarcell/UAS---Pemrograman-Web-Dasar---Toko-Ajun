<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failed</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap");

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-family: "Lexend", sans-serif;
        }

        .popUpGagal {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 75%);
            transition: 1s linear;
        }

        .popUpGagal .gagal {
            width: 500px;
            background-color: white;
            border-radius: 10px;
            height: 250px;
            padding: 10px;
            margin: 200px auto;
            animation: animasi 0.2s linear forwards;
        }

        .popUpGagal .gagal h1 {
            font-size: 30px;
            text-align: center;
        }

        .popUpGagal .gagal i {
            font-size: 30px;
            text-align: center;
            display: block;
            margin: 20px auto;
            color: white;
            background-color: red;
            border-radius: 100%;
            width: 50px;
            height: 50px;
            line-height: 150%;
        }

        .popUpGagal .gagal button {
            margin: auto;
            display: block;
            width: 200px;
            outline: none;
            border-radius: 10px;
            height: 30px;
            border: none;
            font-weight: bolder;
            background-color: #fba643;
            cursor: pointer;
            margin-top: 50px;
        }

        @keyframes animasi {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @media (max-width: 520px) {
            .popUpGagal .gagal {
                width: 300px;
                background-color: white;
                border-radius: 10px;
                height: 250px;
                padding: 10px;
                margin: 400px auto;
            }
            
            .popUpGagal .gagal h1 {
                font-size: 25px;
                text-align: center;
            }
}
    </style>
</head>
<body>
    <div class="popUpGagal">
            <div class="gagal">
                <h1>Your Password Is Wrong</h1>
                <i class="fa-solid fa-xmark"></i>
                <button id="ok">OK</button>
           </div>
    </div>

     <!-- Asset Scirpt -->
     <script src="https://kit.fontawesome.com/c78b8065dc.js" crossorigin="anonymous"></script>
        <script>
            let tombolOk = document.getElementById('ok');
            tombolOk.addEventListener('click', () => {
                document.location.href = 'index.php';
            })
        </script>
</body>
</html>
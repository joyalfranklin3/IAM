<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanical Department</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap');

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            background-image: url(./../../.images/166865-2560x1600-black-abstract-wallpaper-for-iphone-data.jpg);
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-family: 'Merriweather', serif;
            font-size: 2.5em;
            color: #ffffff;
            margin-bottom: 40px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gallery {
            display: flex;
            gap: 20px;
        }

        .frame {
            border: 10px solid #333;
            border-radius: 50%;
            overflow: hidden;
            width: 200px;
            height: 200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            position: relative;
        }

        .frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .frame:hover {
            transform: scale(1.1);
        }

        .frame:hover img {
            transform: scale(1.2);
        }

        .title {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 25%;
            background: rgba(0, 0, 0, 0.6);
            color: rgb(241, 236, 236);
            padding: 3px;
            padding-right: 0px;
            text-align: center;
            font-size: 18px;
            transition: background 0.3s ease;
        }
        .gallery-item:hover .title {
            background: rgba(58, 233, 215, 0.825);
            text-align: center;
        }

        .frame a {
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
        .menu_bar ul{
            list-style: none;
            display: flex;
        }
        .menu_bar ul li{
            padding: 10px 30px;
            position: relative;
        }
        .menu_bar ul li a{
            color: #e9e9e9;
            text-decoration: none;
            font-size: 20px;
            transition: all 0.3s;
        }
        .menu_bar ul li a:hover{
            color: #007bff;
        }

    </style>
</head>
<body>
<div class="menu_bar">
        <ul>
            <li><a href="./../service.php">Dashboard</a></li>
        </ul>
    </div>
    <h1>MECHANICAL ENGINEERING</h1>
    <div class="gallery">
        <div class="frame">
            <a href="hod.php">
                <img src="./../../.images/image-1000x1000 (3).jpg" alt="Picture 1">
                <div class="title">HEAD OF THE DEPARTMENT</div>
            </a>
        </div>
        <div class="frame">
            <a href="staff.php">
                <img src="./../../.images/image-1000x1000 (2).jpg" alt="Picture 2">
                <div class="title">STAFFS</div>
            </a>
        </div>
        <div class="frame">
            <a href="student.php">
                <img src="./../../.images/DeWatermark.ai_1724219828387.png" alt="Picture 3">
                <div class="title">STUDENTS</div>
            </a>
        </div>
        <div class="frame">
            <a href="books.php">
                <img src="./../../.images/books.jpg" alt="Picture 3">
                <div class="title">BOOKS</div>
            </a>
        </div>
    </div>
</body>
</html>

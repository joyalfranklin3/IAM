<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/responsive.css" rel="stylesheet" />
    <title>ABC COLLEGE OF ENGINEERING</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            width: 100%;
            background-color: black;
            background: url(./../../.images/166865-2560x1600-black-abstract-wallpaper-for-iphone-data.jpg) no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            overflow-y: scroll; /* Allow scrolling on the page */
        }

        .gallery-container {
            width: 100%;
            max-width: 1200px;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .gallery {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            justify-content: center;
            padding: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.2);
        }

        .gallery-item:hover img {
            transform: scale(1.2);
        }

        .title {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 15%;
            background: rgba(0, 0, 0, 0.6);
            color: rgb(241, 236, 236);
            padding: 3px;
            text-align: center;
            font-size: 18px;
            transition: background 0.3s ease;
        }

        .gallery-item:hover .title {
            background: rgba(58, 233, 215, 0.825);
            text-align: center;
        }
        .back-button {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: rgba(58, 233, 215, 0.825);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: rgba(0, 150, 136, 0.825);
        }
    </style>
</head>
<body>
    <!-- Back Button -->
    <a href="index.php" class="back-button">Back</a>
    <div class="gallery-container">
        <div class="gallery">
            <a href="agri.php" class="gallery-item">
                <img src="./../../.images/tractor-agricultural-machine-cultivating-field (1).jpg" alt="Agricultural Engineering">
                <div class="title">AGRICULTURAL ENGINEERING</div>
            </a>
            <a href="error.php" class="gallery-item">
                <img src="./../../.images/ai-robot-hand-close-human-hand (1).jpg" alt="Artificial Intelligence and Data Science Engineering">
                <div class="title">ARTIFICIAL INTELLIGENCE AND DATA SCIENCE ENGINEERING</div>
            </a>
            <a href="error.php" class="gallery-item">
                <img src="./../../.images/medium-shot-low-angle-view-engineer-architect-looking-plans (1).jpg" alt="Civil Engineering">
                <div class="title">CIVIL ENGINEERING</div>
            </a>
            <a href="error.php" class="gallery-item">
                <img src="./../../.images/man-s-hand-typing-laptop-wooden-desk (1).jpg" alt="Computer Science and Engineering">
                <div class="title">COMPUTER SCIENCE AND ENGINEERING</div>
            </a>
            <a href="error.php" class="gallery-item">
                <img src="./../../.images/motherboard-background (1).jpg" alt="Electrical and Electronic Engineering">
                <div class="title">ELECTRICAL AND ELECTRONIC ENGINEERING</div>
            </a>
            <a href="error.php" class="gallery-item">
                <img src="./../../.images/view-male-engineer-work-engineers-day-celebration (1).jpg" alt="Electrical and Communication Engineering">
                <div class="title">ELECTRICAL AND COMMUNICATION ENGINEERING</div>
            </a>
            <a href="error.php" class="gallery-item">
                <img src="./../../.images/futurism-perspective-digital-nomads-lifestyle (1).jpg" alt="Information Technology">
                <div class="title">INFORMATION TECHNOLOGY</div>
            </a>
            <a href="error.php" class="gallery-item">
                <img src="./../../.images/Screenshot_2024-08-21_at_10.11.29â_¯AM-transformed.png" alt="Mechanical Engineering">
                <div class="title">MECHANICAL ENGINEERING</div>
            </a>
        </div>
    </div>
</body>
</html>

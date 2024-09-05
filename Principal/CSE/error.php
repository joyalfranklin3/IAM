<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="warning-symbol">
            <div class="triangle"></div>
            <div class="exclamation">!</div>
        </div>
        <div class="error-code">403</div>
        <div class="message">Access Denied</div>
        <div class="description">You don't have permission to access this page.</div>
    </div>
    <style>

body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    text-align: center;
}

.warning-symbol {
    position: relative;
    width: 100px;
    height: 100px;
    margin: 0 auto 30px;
}

.triangle {
    width: 0;
    height: 0;
    border-left: 50px solid transparent;
    border-right: 50px solid transparent;
    border-bottom: 90px solid #ffcc00;
    position: absolute;
    top: 0;
    left: 0;
    animation: shake 0.5s infinite;
}

.exclamation {
    position: absolute;
    top: 20px;
    left: 38px;
    font-size: 50px;
    color: #ff4c4c;
    font-weight: bold;
    animation: blink 1s infinite;
}

.error-code {
    font-size: 100px;
    color: #ff4c4c;
    font-weight: bold;
}

.message {
    font-size: 36px;
    margin-top: 20px;
    color: #333;
}

.description {
    font-size: 18px;
    margin-top: 10px;
    color: #666;
}

@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
}

@keyframes blink {
    0%, 50%, 100% { opacity: 1; }
    25%, 75% { opacity: 0; }
}

    </style>
</body>
</html>

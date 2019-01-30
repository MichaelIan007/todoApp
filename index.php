<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>To do</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Teko" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css"/>
    <script src="main.js"></script>
</head>
<body>
    <div class="list">
        <h1 class="header">To do:</h1>

        <ul>
            <li><span class="item">Kick</span></li>
            <li><span class="item done">Boxing</span></li>
        </ul>

        <form class="item-add" action="add.php" method="post">
        <input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
        <input type="submit" value="add" class="submit">
        </form>

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>maak je eigen pizza</title>
</head>
<body>
<h1>Maak je eigen pizza</h1>

    <form action="create.php" method="post">
        <label for="bodemformaat">Bodemformaat</label><br>
        <select name="bodemformaat" id="bodemformaat">
            <option value="20">20CM</option>
            <option value="25">25CM</option>
            <option value="30">30CM</option>
            <option value="35">35CM</option>
            <option value="40">40CM</option>
        </select><br>
        <label for="saus">Saus</label><br>
        <select name="saus" id="saus">
            <option value="tomatensaus">Tomatensaus</option>
            <option value="extrats">Extra tomatensaus</option>
            <option value="spicyts">Spicy tomatensaus</option>
            <option value="bbq">BBQ saus</option>
            <option value="creme fraiche">Creme fraiche</option>
        </select><br>
            

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="GET">
        <select name="colors">
            <option <?php if($_GET['colors']=='Foc')
            echo "selected";?>>Foc</option>
            <option <?php if($_GET['colors']=='Aigua')
            echo "selected";?>>Aigua</option>
            <option <?php if($_GET['colors']=='Terra')
            echo "selected";?>>Terra</option>
        </select>
        <input type="submit">
    </form>
    <?php
        if($_GET['colors'] == 'Foc'){
            echo "<body style = 'background-color:red'>";
        }else if($_GET['colors'] == 'Aigua'){
            echo "<body style = 'background-color:blue'>";
        }else if($_GET['colors'] == 'Terra'){
            echo "<body style = 'background-color:brown'>";
        }else{
            echo "<body>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <h1>Peys App</h1>
    <br>
    <form method="post">
        <label for="rngImg">Select Photo Size:</label>
        <input type="range" name="rngImg" min="10" max="100" step="10">
        <br>
        <label for="clrBorder">Select Border Color:</label>
        <input type="color" name="clrBorder" value="#000000">
        <br>
        <input type="submit" name="btnProcess" value="Process"><br><br>
        <?php
            if(isset($_POST['btnProcess'])){
                $size = $_POST['rngImg'];
                $color = $_POST['clrBorder'];
        }
        ?>
        <div style="padding: 35px;"><img name="photo" src="face2.jpg" alt="Photo" style="width: <?php echo $size;?>%; border:solid; border-color: <?php echo $color; ?>;">
        </div>
    </form>
</body>





</html>
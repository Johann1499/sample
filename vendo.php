<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <h1>Vendo Machine</h1><br>
        <form method="post">

            <fieldset>
            <legend><b>Products:</b></legend>
            <input type="checkbox" name="chkSoft[]" id="chkCoke" value="Coke">
            <label for="chkCoke">Coke - ₱ 15</label><br>
            <input type="checkbox" name="chkSoft[]" id="chkSprite" value="Sprite">
            <label for="chkSprite">Sprite - ₱ 20</label><br>
            <input type="checkbox" name="chkSoft[]" id="chkRoyal" value="Royal">
            <label for="chkRoyal">Royal - ₱ 20</label><br>
            <input type="checkbox" name="chkSoft[]" id="chkPepsi" value="Pepsi">
            <label for="chkPepsi">Pepsi - ₱ 15</label><br>
            <input type="checkbox" name="chkSoft[]" id="chkMountainDew" value="Mountain Dew">
            <label for="chkMountainDew">Mountain Dew - ₱ 20</label><br>
            </fieldset>
            
            <fieldset>
            <legend><b>Options:</b></legend>
            <label for="drpOptions"><b>Size</b></label>
            <select name="drpOptions" id="drpOptions">
                <option value="Regular">Regular</option>
                <option value="Up-size">Up-size (add ₱5)</option>
                <option value="Jumbo">Jumbo (add ₱10)</option>
            </select>
            <label for="txtNumber"><b>Quatity</b></label>
            <input type="number" name="txtNumber" id="txtNumber" min="1" max="20">
            <input type="submit" name="btnCheckout" value="Checkout">
            </fieldset>
            <br><br>
            <hr>
        </form>
</body>
<?php if((isset($_POST['btnCheckout'])) and (!isset($_POST['chkSoft']))):?>
    <?php echo 'No selected item. Try again.';?>
    <?php else: ?>
        <?php if(isset($_POST['btnCheckout'])): ?>
            <h2>Purchase:</h2>
            <?php
                $arrSoftdrinks = '';
                $arrSoftdrinks = $_POST['chkSoft'];
                $size = $_POST['drpOptions'];
                $quantity = $_POST['txtNumber'];
            $coke=0;
            $sprite=0;
            $royal=0;
            $pepsi=0;
            $mdew=0;
            foreach($arrSoftdrinks as $key => $value){
                if ($value == "Coke") {
                    if ($size == "Up-size"){
                        $coke = (15 * $quantity) + (5 * $quantity);
                    }
                    elseif ($size == "Jumbo"){
                        $coke = (15 * $quantity) + (10 * $quantity);
                    }
                    else{
                        $coke = 15 * $quantity;
                    }
                }
                elseif ($value == "Sprite"){
                    if ($size == "Up-size"){
                        $sprite = (20 * $quantity) + (5 * $quantity);
                    }
                    elseif ($size == "Jumbo"){
                        $sprite = (20 * $quantity) + (10 * $quantity);
                    }
                    else{
                        $sprite = 20 * $quantity;
                    }
                }
                elseif ($value == "Royal"){
                    if ($size == "Up-size"){
                        $royal = (20 * $quantity) + (5 * $quantity);
                    }
                    elseif ($size == "Jumbo"){
                        $royal = (20 * $quantity) + (10 * $quantity);
                    }
                    else{
                        $royal = 20 * $quantity;
                    }
                }
                elseif ($value == "Pepsi"){
                    if ($size == "Up-size"){
                        $pepsi = (15 * $quantity) + (5 * $quantity);
                    }
                    elseif ($size == "Jumbo"){
                        $pepsi = (15 * $quantity) + (10 * $quantity);
                    }
                    else{
                        $pepsi = 15 * $quantity;
                    }
                }
                elseif ($value == "Mountain Dew"){
                    if ($size == "Up-size"){
                        $mdew = (20 * $quantity) + (5 * $quantity);
                    }
                    elseif ($size == "Jumbo"){
                        $mdew = (20 * $quantity) + (10 * $quantity);
                    }
                    else{
                        $mdew = 20 * $quantity;
                    }
                }

                }
            ?>
            <ul>
                <?php
                foreach($arrSoftdrinks as $key => $value){
                    if ($value == "Coke")
                    echo '<li>' . $quantity . ' piece' . ($quantity > 1 ? 's ' : ' ' ) . "of $size $value" . ' amounting to ₱ ' . $coke . '</li>';
                    elseif ($value == "Sprite")
                    echo '<li>' . $quantity . ' piece' . ($quantity > 1 ? 's ' : ' ' ) . "of $size $value" . ' amounting to ₱ ' . $sprite . '</li>';
                    elseif ($value == "Royal")
                    echo '<li>' . $quantity . ' piece' . ($quantity > 1 ? 's ' : ' ' ) . "of $size $value" . ' amounting to ₱ ' . $royal . '</li>';
                    elseif ($value == "Pepsi")
                    echo '<li>' . $quantity . ' piece' . ($quantity > 1 ? 's ' : ' ' ) . "of $size $value" . ' amounting to ₱ ' . $pepsi . '</li>';
                    elseif ($value == "Mountain Dew")
                    echo '<li>' . $quantity . ' piece' . ($quantity > 1 ? 's ' : ' ' ) . "of $size $value" . ' amounting to ₱ ' . $mdew . '</li>';
                }
                ?>
            </ul>
            <b>Total Number of Items: </b>
            <?php echo (count($arrSoftdrinks) * $quantity);?>
            <br>
            <b>Total Amount: </b>
            <?php
            $total = $coke + $sprite + $royal + $pepsi + $mdew;
            echo $total;
            ?>
            <?php endif; ?>
    <?php endif; ?>
</html>
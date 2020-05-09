<?php 

    $link = mysqli_connect("localhost", "root", "", "arkademy");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    }

    $query = "SELECT `product`.`id` AS `ID`, `cashier`.`name` AS `Cashier`, `product`.`name` AS `Product`, `category`.`name` AS `Category`, `product`.`price` AS `Price`  
    FROM `product`
    INNER JOIN `category` ON `product`.`id_category`=`category`.`id`
    INNER JOIN `cashier` ON `product`.`id_cashier`=`cashier`.`id` ";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

    </head>

    <body>

        <table border="1px">
            <tr style="background-color: #c27aa0;">
                <th>cashier</th>
                <th>product</th>
                <th>category</th>
                <th>price</th>
            </tr>
            <?php 
		$data = mysqli_query($link, $query);
		while($d = mysqli_fetch_array($data)){
			?>
            <tr>
                <td><?php echo $d['Cashier']; ?></td>
                <td><?php echo $d['Product']; ?></td>
                <td><?php echo $d['Category']; ?></td>
                <td><?php echo $d['Price']; ?></td>
            </tr>
            <?php 
		}
		?>
        </table>
    </body>
</html>

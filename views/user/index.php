<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/views/user/style.css">
</head>
<body>
<table>
    
<tr>

    <th>id</th>
        <th productname>productname</th>
        <th>productImage</th>
        <th>SKU</th>
        <th>price</th>
        <th>brand</th>
    <th>manufacturedate</th>
    <th>availablestock</th>

    </tr>
        <?php foreach ($allProductdetails as $index => $info):?>

    <tr>


        <td><?php echo $index+1?></td>
        <td><?php echo $info->productname?></td>
        <td><img src="<?php echo $info->productimage?>"></td>
        <td><?php echo $info->SKU?></td>
        <td><?php echo $info->price?></td>
        <td><?php echo $info->brand?></td>
        <td><?php echo $info->manufacturedate?></td>
        <td><?php echo $info->availablestock?></td>



        <td>
            <form action="/view" method="post">
                <input type="hidden" name="view" value="<?php echo $info->id?>">
            <button type="submit" name="action"  value="view">edit</button>
            </form>
            </td>
            <td>
            <form action="/delete" method="post">
                <input type="hidden" name="delete" value="<?php echo $info->id?>">
                <button type="submit" name="action"  value="delete">delete</button>
            </form>
        </td>

    </tr>

    <?php endforeach;?>


<form action="/create" method="post">
    <button type ="submit"  >ADD a Product</button>
</form>
    
   

</table>
  

</body>
</html>
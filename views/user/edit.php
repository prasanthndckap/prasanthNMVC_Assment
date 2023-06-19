<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TV products </title>
       <link rel="stylesheet" href="/views/user/style.css">
</head>
<body>
    
<?php foreach ($editProduct as $index => $info):?>

<form action="/create" method="post"  enctype="multipart/form-data">
    <div class="main">
        <!-- <?php if(isset($_SESSION['already-exists'])) :?>
                <h2> <?php echo $_SESSION['already-exists'] ?> </h2>
                <?php endif; ?> -->



        <label for="">Product Name</label>
        <input  type="text" name="product_name"  placeholder="Add your products"   value="<?php echo $info->productname?>" required >
        <label for="">Price</label>
        <input type="text" name="price" placeholder="Your Price" value="<?php echo $info->productimage?>" required >
        <label for="">Add Product Image</label>
        <input type="file" name="image" placeholder ="Product image" width="75px" height ="75px" value="<?php echo $info->SKU?>" required>
        <label for="">Product SKU</label>
        <input type="text" name="sku" placeholder="Product SKU" value="<?php echo $info->price?>" required >
        <label for="brands">Choose your Brand </label>
        <select name="brand" id="brands" >
            <option value="<?php echo $info->brand?>">LG</option>
            <option value="">Samsung</option>
            <option value="panasoic">Panasoic</option>
            <option value="tatatv">TataTV</option>
            <option value="tatatv">motorolo</option>
            <option value="tatatv">philips</option>

        </select>
        <label for="">Manufacture Date</label>
        <input type="date" name="manufactured" placeholder="product date" value="<?php echo $info->manufacturedate?>"required >
        <label for="">Available Stock</label>
        <input type="number" name="stock" placeholder="Your Price" value="<?php echo $info->availablestock?>"required >
        <!-- <input type="file" name="image" placeholder ="Product image" width="75px" height ="75px" required> -->

        <input type="submit" name="create" value="update the product">


    </div>
</form>
<?php endforeach;?>
</body>
</html>
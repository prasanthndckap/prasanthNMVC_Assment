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


            <form action="/create" method="post"  enctype="multipart/form-data">
                <div class="main">
                <!-- <?php if(isset($_SESSION['already-exists'])) :?>
                <h2> <?php echo $_SESSION['already-exists'] ?> </h2>
                <?php endif; ?> -->


                    <h2>Create Products</h2>
                    <label for="">Product Name</label>
                    <input  type="text" name="product_name"  placeholder="Add your products"  required >
                    <label for="">Price</label>
                    <input type="number" name="price" placeholder="Your Price"  required >
                    <label for="">Add Product Image</label>
                    <input type="file" name="image" placeholder ="Product image"  required>
                    <label for="">Product SKU</label>
                    <input type="text" name="sku" placeholder="Product SKU" required >
                    <label for="brands">Choose your Brand </label>
                    <select name="brand" id="brands">
                    <option value="LG">LG</option>
                    <option value="Samsung"></option>
                    <option value="panasoic"></option>
                    <option value="tatatv"></option>
                        <option value="tatatv"></option>
                        <option value="tatatv"></option>

                    </select>
                    <label for="">Manufacture Date</label>
                    <input type="date" name="manufactured" placeholder="product date" required >
                    <label for="">Available Stock</label>
                    <input type="number" name="stock" placeholder="Your Price" required >
                     <!-- <input type="file" name="image" placeholder ="Product image" width="75px" height ="75px" required> -->

                    <input type="submit" name="create" value="Add your Products">
                     <!-- <p><a href="/">Already Have an Account?</a></p> -->

                </div>
            </form>
</body>
</html>
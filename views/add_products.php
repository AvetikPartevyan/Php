<!DOCTYPE html>
<html lang="en">
<?php
if (!empty($_FILES)) {
    var_dump($_FILES);
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style><?php include '../assets/css/main.css'; ?></style>

</head>
<body id = 'addProd-main'>
<?php require('../includes/header.php'); ?>
    <main id="">
        <section id="addProd">
            <div class="prodform">
                <form action="single_product.php" id='addForm' method="post">
                    <label> <h5>Product Name</h5>
                        <input type="text" name="Title" maxlength="20" onblur="this.placeholder='Product Name'" onfocus="this.placeholder=''"  required>
               </label>
                    <label>
                        <h5>Description</h5>
                        <input type="text" name="Desc"  onblur="this.placeholder='Product Description'" onfocus="this.placeholder=''" required>
                    </label>
                    <label>
                        <h5>Price</h5>
                        <input type="number" min="1" id="price" name="price" placeholder = "$" required>
                    </label>
                    <label>
                        <h5>Product image</h5> 
                        <input type="file" name="picture"  >
                    </label>
                    <label id = 'inpButs'>
                    <input type="submit" id='inpSub' value="Add Product">  
                    <input type="reset" id='inpRes' value="Reset">
                </label>
                </form>
            </div>
        </section>
    </main>
    <?php require('../includes/footer.php'); ?>
</body>
</html>
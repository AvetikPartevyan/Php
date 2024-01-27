<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <header>
    <?php require('../includes/header.php'); ?>

    </header>
    <main id = "singleProd">
  <h2> Title -  <?php echo htmlspecialchars($_POST['Title']); ?>.</h2>
  <h4>Description.</h4>
  <textarea name="description" id="" cols="30" rows="10"><?php echo htmlspecialchars($_POST['Desc']); ?></textarea> 
    <h4>Price - <?php echo (int)$_POST['price']; ?> $</h4>
   <picture> <?php echo file_get_contents($_POST['picture']); ?></picture>
    </main>
    <footer>
    <?php require('../includes/footer.php'); ?>
    </footer>
</body>
</html>
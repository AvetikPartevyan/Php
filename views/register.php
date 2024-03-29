<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <header>
    <?php require('../includes/header.php'); ?>
    </header>
    <main>
    <form>
      <!-- class named "container" is assigned to div -->
      <div class="container">
        <h1>Register</h1>
        <p>Kindly fill in this form to register.</p>
        <label for="username"><b>Username</b></label>
        <input
          type="text"
          placeholder="Enter username"
          name="username"
          id="username"
          required
        />

        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        />

        <label for="pwd"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="pwd"
          id="pwd"
          required
        />

        <label for="pwd-repeat"><b>Repeat Password</b></label>
        <input
          type="password"
          placeholder="Repeat Password"
          name="pwd-repeat"
          id="pwd-repeat"
          required
        />

        <button type="submit">Register</button>
      </div>

      <div>
        <p>Already have an account? <a href="login.php">Log in</a>.</p>
      </div>
    </form>

    <footer>
    <?php require('../includes/footer.php'); ?>

    </footer>
    </main>
</body>
</html>
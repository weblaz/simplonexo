<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Exercice Technique CDA</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">
<?php require_once 'pr.php'; ?>

<?php if(isset($_SESSION['message'])): ?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

  <?php 
  echo $_SESSION['message'];
  unset ($_SESSION['message']);
  ?>
</div>
<?php endif ?>
<div class="container">
<?php
$mysqli = new mysqli('localhost', 'myuser', 'mypass123', 'crud') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM user") or die($mysqli->error);

?>

<div class="container">
<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>email</th>
         <th>password</th>
          <th>birthday</th>
          <th colspan="3">Action</th>
      </tr>
    </thead>

    <?php while ($row = $result->fetch_assoc()): 
     ?>
    <tr>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><?php echo $row['birthday']; ?></td>
      <td>
        <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
        <a href="pr.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  <?php endwhile; ?>
  </table>
  
</div>
</div>

<?php
function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
?>
 <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Exercice Technique CDA</h1>
      <p class="lead">Langage utilisé PHP & Bootstrap4 framework</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class=" row justify-content-center">About this page</h2>

          <div class=" row justify-content-center">
          <form action="pr.php" method="POST">

             <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter Your Name..">
                </div>

                 <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Your Title..">
                </div>

                 <div class="form-group">
                <label>Birthday</label>
                <input type="date" name="birthday" class="form-control" value="<?php echo $birthday; ?>" placeholder="Enter Your Birthday..">
                </div>

                <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter Your Email..">
                </div>

                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Enter your Password">
                </div>

                <div class="form-group">
                <label>Date</label>
                <input type="date" name="post_date" class="form-control" placeholder="Enter the Date..">
                </div>

                <div class="form-group">
                <div class="name">Message</div>
                <div class="value">
                <div class="input-group">
                <textarea class="textarea--style-6" name="content" placeholder="Message sent to the employer"></textarea>
              </div>
              </div>
              </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">Save</button>
                </div>
              </form>
              </div>
              </div>

         </div>
      </div>
    
  </section>

 <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Simplon 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
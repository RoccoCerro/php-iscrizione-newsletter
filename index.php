<?php
  // Includo il file utilities 
  include __DIR__ . "/partials/utilities.php";
  
  // Avvio la sessione
  session_start();

  // Recupero l'email
  $email = $_POST["email"] ?? "";

  if(email_is_valid($email) === true){

    $result = true;
    header('Location: ./subscription.php');
  }else{

    $result = false;
    header('Location: ./subscription.php');
  }
  
  // var_dump($email);

  $_SESSION['result'] = $result;

  // var_dump($result);
  // var_dump(email_is_valid($email));
  // var_dump("DIR: ".__DIR__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <header>
    <?php  
      include __DIR__ . "/partials/template/header.php";
    ?>
  </header>
  <main>
    <div class="container p-5 bg-dark">
      <div class="row justify-content-center text-center ">
        <form action="./index.php" method="POST" class="col-12">
          <input type="email" placeholder="Inserisci la tua email" name="email" value="<?= $email ?>">
          <input type="submit" value="Invia">
        </form>
        <div class="alert alert-dark w-50 mt-5 col-12" role="alert">
          <?php
          if($result === true){
            ?>
            Successo!
            <?php
          }else{
            ?>
            Fallito!
            <?php
          }
          ?>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <?php
      include __DIR__ . "/partials/template/footer.php";
    ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
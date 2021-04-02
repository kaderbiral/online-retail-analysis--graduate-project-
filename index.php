<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Admin Giriş</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container-fluid bg">
      <div class="row">
        <div class="col-md4 col-sm-4 col-xs-12"></div>
        <div class="col-md4 col-sm-4 col-xs-12">
          
              <form method="POST" action="login.php" class="form-container" style="width: 455px">
                <h2 style="color: #C7000C; font-weight: bold; letter-spacing: 1px; text-align: center;">ONLINE PERAKENDE</h2><hr color="#d51e1e">

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

              <div class="form-group">
                <label for="exampleInputEmail1">Kullanıcı Adı :</label>
                <input type="text" name="uname" class="form-control" id="exampleInputEmail1" placeholder="admin">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Şifre :</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="●●●●●●">
              </div>
              
              <button type="submit" class="btn btn1 "><b>Gönder</b></button>
            </form>


        </div>
        <div class="col-md4 col-sm-4 col-xs-12"></div>
      </div>
    </div> 

</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container mt-5 p-5">
      <div class="row bg-danger">
        <div class="col-6 p-4">
          <form action="" method="post">
          <div class="form-floating mb-3">
              <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com" />
              <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
              <textarea class="form-control" name = "komentar" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Comments</label>
          </div><br>
              <input class="btn btn-primary" type="submit" value="Send">
              <input class="btn btn-primary" type="reset" value="Reset">
          </form>
        </div>
        <div class="col-6 p-4">
            <div class="box bg-white" style="height: 180px;width: 486px; border-radius: 15px; overflow-y: scroll;
            overflow-x: hidden;
            padding: 10px;
            scroll-snap-type: y mandatory">
              <?php
              session_start() ;
              if (isset($_POST['nama']) && isset($_POST['komentar'])){
                  if ($_SESSION['dataNama'][0][0] != null){
                      $_SESSION['dataNama'][0][] = $_POST['nama'];
                      $_SESSION['dataNama'][1][] = $_POST['komentar'];
                  }else{
                      $_SESSION['dataNama'][0][0] = $_POST['nama'];
                      $_SESSION['dataNama'][1][0] = $_POST['komentar'];
                  }
              }else{
                      $_SESSION['dataNama'][0][] = null;
                      $_SESSION['dataNama'][1][] = null;

              }
              $panjangData = count($_SESSION['dataNama'][0]) ;   
              for ($i=0; $i < $panjangData; $i++) { 
                echo "<b>".$_SESSION['dataNama'][0][$i]. "</b> <br> <blockquote> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp" .
                $_SESSION['dataNama'][1][$i] ."</blockquote> <hr> <br> "; 
              }?>
            </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

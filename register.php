<?php
 include_once "conection.php";



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="login-container row mx-auto">
            <div class="col-lg-8 mx-auto col-sm-10 col-md-10">
                <h1 class="text-center">Register</h1>
                <form action="simpan.php" method="POST">
                    <div class="mb-5">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Isi name anda" required>
                    </div>
                    
                    <div class="mb-5">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="mb-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    
                    <div class="mb-5">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" required>
                    </div>

                    <div class="mb-5">
                        <label for="no_hp" class="form-label">No_hp</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                    </div>

                    <div class="mb-5">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>


                    <a href="index.php" class="btn btn-outline-secondary btn-lg">Back</a>
                    <button type="submit" name="simpan" class="btn btn-outline-success btn-lg col-4">Simpan</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
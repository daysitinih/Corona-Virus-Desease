<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <link rel="stylesheet" href="siti.css">
    </head>
<body>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h2>Registrasi</h2>
                </div>
                <div class="card-body">
                <form method="post" action="registration.php">
                        <div class="form-group">
                            <label for="namanya">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="namanya" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
                        </div>

                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>

                        <div class="bottom">
                           <a href="index.html">Login Sekarang</a>
                             </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

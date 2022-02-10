<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah Data User</title>
</head>
<body>

    <h1 class="text-center">Form Tambah Data User</h1>
    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <form action="<?php echo base_url('index.php/user/action_tambah') ?>"method="post">
                <label for="" class="form-label">Username</label><br>
                <input type="text" class="form-control" name="username" required><br>
                <label for="" class="form-label">Email</label><br>
                <input type="email" class="form-control" name="email" required><br>
                <label for="" class="form-label">Password</label><br>
                <input type="password" class="form-control" name="password" required><br>
                <div class="d-grid gap-2">
                <button type="submit"class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
            <a href="<?php echo base_url('index.php/user') ?>"><div class="d-grid gap-2"><button class="btn btn-success mt-3">Data User</button></div></a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
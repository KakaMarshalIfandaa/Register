<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data User</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Data User</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo base_url('index.php/user/tambah') ?>>Tambah Data</a>
        </li>
      </ul>
      <form method="get"class="d-flex">
        <input name="username" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <h2></h2>
    <?php if(!empty($data)):?>
 
        <table border="1" class="table table-striped table-bordered" >
            <thead>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>
                    Action
                </th>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach ($data as $key => $value):?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value['username'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td>
                            <a href="<?php echo base_url('index.php/user/edit/' .$value['id']) ?>"<button type="submit" class="btn btn-primary">Edit</button></a>
                            <a href="<?php echo base_url('index.php/user/delete/' .$value['id']) ?>"<button type="submit" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <?php endif?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
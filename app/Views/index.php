<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Praktikum 6</title>
<style>
    body{
    background-image: url("../images/book1.jpg");
    background-size: cover;
    }

    .jumbotron{
    font-size: 16px;
    padding: 5px;
    background-color: #f8f9fa;
    }

    .card{
    margin: auto;
    width: 30% ;
    box-shadow: 4px 4px 4px 0 ;
    border-radius: 5px;
    padding: 20px;
    margin-top: 20px;
    }

    .space{
    padding: 4px;
    }
</style>
</head>

<body>
<div class="jumbotron"><marquee><h1>Profil Saya</h1></marquee></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Profil Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/home/index">Home</a>
        <a class="nav-link" href="/home/biodataMahasiswa">Biodata</a>
      </div>
    </div>
  </div>
</nav><br><br><br><br><br><br><br><br><br>
    <div class="card">
        <table>
            <tr>
                <th>Nama :</th>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <th>NIM   :</th>
                <td><?= $nim ?></td>
            </tr>
        </table>
    </div><br><br><br><br><br><br><br><br><br><br>
    <div class="container-fluid bg-dark text-light">
    <div class="row">
        <div class="space">
            <p class="text-center">Copyright &copy; Ramandha</p>
        </div>
    </div>
</div>    
</body>
</html>
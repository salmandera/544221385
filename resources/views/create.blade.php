<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ 'Selamat Datang ' }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
<div class="container col-xl-10 col-xx1-8 px-4 py-5">
    <div class="button">
    <a href="http://127.0.0.1:8000/"><button type="submit" class=" btn btn-primary mb-3 mx-auto">Back</button></a>
    </div>
    <div class="mb-3">
    <h1 class="display-4 fw-bold 1h-1 mb-3">Tambahkan Nama Buku</h1>

    <label for="exampleFormControlInput1" class="form-label">judul Buku:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="judul">
    <br>
    <label for="exampleFormControlInput1" class="form-label">pengarang:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pengarang">
    <br>
    <label for="exampleFormControlInput1" class="form-label">penerbit:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="penerbit">
    <br>
    <label for="exampleFormControlInput1" class="form-label">stok:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="stok">
    <br>
    <label for="exampleFormControlInput1" class="form-label">harga:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="harga">
    <br>
    </div>
        <a  href="http://127.0.0.1:8000/" type="submit" class="position-absolute top-98 start-50 translate-middle-x btn btn-primary mb-3 mx-auto" >Submit</a>
</div>
</body>
<style>
    .button{
        float:right;
    }
 </style>
</html>

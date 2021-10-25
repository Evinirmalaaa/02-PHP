<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class='row'>
                <nav class='navbar navbar-expand-lg navbar-light bg-light'>
                    <div class='container-fluid'>
                    <ul class='navbar-nav'>
        
                
        <a class='navbar-brand' href='index.php'>Input Data</a>  
        <li class='nav-item'>
  <a class='nav-link active' aria-current='page' href='tampil.php'>Tampil Data</a>
</li>
        </ul>
                    </div>
                 </nav>
        </div>
            <div class="row mt-5">
                <form action="simpan.php" method="POST">               
                        <div class="mb-3">
                            <label class="form-label">NIS</label>
                            <input type="number" name="nis" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control"></label>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Id Jurusan</label>
                            <input type="text" name="id_jurusan" class="form-control"></label>
                        </div>  
                    <button name="simpan" value="simpan" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>       
            
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
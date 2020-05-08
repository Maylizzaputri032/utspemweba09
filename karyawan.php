<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css"> <!-- link untuk menghubungkan template-->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/css/all.min.css">

    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b> LENTERA SISWA</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="icon ml-4"></div> <!--icon yang ada dipojok kanan atas-->
        <h5>
          <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
          <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
          <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Log out"></i>
        </h5>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item"> <!--class untuk yang ada disamping itu lo atau site bar-->
            <a class="nav-link active text-white" href="dashboard.html"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
          </li><!--class bg secondary untuk memberi garis dibawah tulisan-->
          <li class="nav-item">
            <a class="nav-link text-white" href="siswa.html"><i class="fas fa-user-graduate mr-2"></i> Daftar siswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="guru.html"><i class="fas fa-chalkboard-teacher mr-2"></i> Daftar Guru</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="karyawan.html"><i class="fas fa-users mr-2"></i>Daftar Karyawan</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="jadwalkelas.html"><i class="fas fa-calendar-alt mr-2"></i> Jadwal Kelas</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="nilaisiswa.html"><i class="fas fa-paper-plane mr-2"></i> Nilai Siswa</a><hr class="bg-secondary">
          </li>
        </ul>
      </div> <!-- penutup sitebar-->

      <div class="col-md-10 p-5 pt-2"> <!--isi halaman utama/dashboard-->
        <h3><i class="fas fa-users mr-2"></i>DAFTAR KARYAWAN</h3><hr> <!--tag hr digunakan untuk memberikan garis dibawah tulisan-->

        <a href="" class=" btn btn-primary mb-3"><i class="fas fa-user-plus mr-2"></i>TAMBAH DATA KARYAWAN</a>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA KARYAWAN</th>
              <th scope="col">TEMPAT TANGGAL LAHIR</th>
              <th scope="col">NO HP</th>
              <th scope="col">ALAMAT</th>
              <th scope="col">JABATAN</th>
              <th colspan="3" scope="col">AKSI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto,12 MAY 2000</td>
              <td>081234567</td>
              <td>jalan sayang bukan rindu</td>
              <td>OB</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></td>
            </tr> <!--tooltip digunakan untuk apabila kusor kita menuju ke icon tersebut lalu ada namanya-->
            
            <tr>
              <th scope="row">2</th>
              <td>Mark</td>
              <td>Otto,12 MAY 2000</td>
              <td>081234567</td>
              <td>jalan sayang bukan rindu</td>
              <td>TU</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></td>
            </tr> <!--tooltip digunakan untuk apabila kusor kita menuju ke icon tersebut lalu ada namanya-->

            <tr>
              <th scope="row">3</th>
              <td>Mark</td>
              <td>Otto,12 MAY 2000</td>
              <td>081234567</td>
              <td>jalan sayang bukan rindu</td>
              <td>administrasi</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></td>
            </tr> <!--tooltip digunakan untuk apabila kusor kita menuju ke icon tersebut lalu ada namanya-->
            
            <tr>
              <th scope="row">4</th>
              <td>Mark</td>
              <td>Otto,12 MAY 2000</td>
              <td>081234567</td>
              <td>jalan sayang bukan rindu</td>
              <td>Marketing</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></td>
            </tr> <!--tooltip digunakan untuk apabila kusor kita menuju ke icon tersebut lalu ada namanya-->

            <tr>
              <th scope="row">5</th>
              <td>Mark</td>
              <td>Otto,12 MAY 2000</td>
              <td>081234567</td>
              <td>jalan sayang bukan rindu</td>
              <td>HRD</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></td>
              <td><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></td>
            </tr> <!--tooltip digunakan untuk apabila kusor kita menuju ke icon tersebut lalu ada namanya-->
          </tbody>
        </table>
      </div> 
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>
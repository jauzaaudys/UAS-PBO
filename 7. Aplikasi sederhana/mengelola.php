<?php
include 'server.php';
$id = '';
$nim = '';
$namamhs = '';
$jeniskelamin = '';
$alamat = '';
$prodi = '';
$email = '';

if (isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $query = "SELECT * FROM mahasiswa WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $nim = $result['nim'];
    $namamhs = $result['namamhs'];
    $jeniskelamin = $result['jk'];
    $alamat = $result['alamat'];
    $prodi = $result['prodi'];
    $email = $result['email'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD - Data Mahasiswa</title>
    <!--Style-->
    <style>
      .container {
        background-color: #A0C1B8;
        margin: 40px auto;
        padding: 50px;
        border: 4px solid #eaeaea;
        border-radius: 20px;
        box-sizing: border-box;
        position: relative;
      }
    </style>
</head>
<body>
      <div class="container">
        <h2 class="text-center text-dark" >INPUT DATA MAHASISWA</h2>
        <br>
        <form method="POST" action="proses.php" class="font-weight-bold">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            
            <!--Form NIM-->
            <div class="mb-3 row">
                <label for="Nim" class="col-sm-2 col-form-label text-dark">NIM</label>
                <div class="col-sm-10">
                    <input type="text" name="nim" class="form-control" id="Nim" placeholder="123456789" required value="<?php echo $nim; ?>">
                </div>
            </div>

            <!--Form Nama Mahasiswa-->
            <div class="mb-3 row">
                <label for="Namamhs" class="col-sm-2 col-form-label text-dark">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" name="namamhs" class="form-control" id="Namamhs" placeholder="Puji Rahayu" required value="<?php echo $namamhs; ?>">
                </div>
            </div>

            <!--Form Jenis Kelamin-->
            <div class="mb-3 row">
                <label for="Jeniskelamin" class="col-sm-2 col-form-label text-dark">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline font-weight-normal">
                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" required value="L" <?php if($jeniskelamin=="L") {
                            echo "checked=\"checked\" ";} ?>>
                        <label class="form-check-label text-white" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline font-weight-normal">
                        <input class="form-check-input" type="radio" name="jk" id="perempuan" required value="P" <?php if($jeniskelamin=="P") {
                            echo "checked=\"checked\" ";} ?>>
                        <label class="form-check-label text-white" for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>

            <!--Form Alamat-->
            <div class="mb-3 row">
                <label for="Alamat" class="col-sm-2 col-form-label text-dark">Alamat</label>
                <div class="col-sm-10">
                    <input type="text"  name="alamat" class="form-control" id="Alamat" required value="<?php echo $alamat; ?>">
                </div>
            </div>

            <!--Form prodi-->
            <div class="mb-3 row">
                <label for="prodi" class="col-sm-2 col-form-label text-dark">Prodi</label>
                <div class="col-sm-10">
                    <input type="text" name="prodi" class="form-control" id="prodi" required value="<?php echo $prodi; ?>">
                </div>
            </div>

            <!--Form Email-->
            <div class="mb-3 row">
                <label for="Email" class="col-sm-2 col-form-label text-dark">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="Email" placeholder="puji.rahayu@mhs.unesa.ac.id" required value="<?php echo $email; ?>">
                </div>
            </div>

            <!--Form Foto Mahasiswa-->
            <div class="mb-3 row">
                <label for="Foto" class="col-sm-2 col-form-label text-dark">Foto Mahasiswa</label>
                <div class="col-sm-10">
                  <input type="file" name="foto" class="form-label text-white" id="Foto" required value="<?php echo $foto; ?>">
                </div>
            </div>

            <!--Tombol Button-->
            <div class ="col text-right" style="float: right;">
                <?php
                if (isset($_GET['edit']))
                {
                    ?>
                    <button type="submit" name="submit" value="edit" class="btn btn-success btn-sm">Save</button>
                    <?php
                }
                else
                {
                    ?>
                    <button type="submit" name="submit" value="add" class="btn btn-success btn-sm">Add</button>  
                    <?php
                }
                ?>
                <a href="index.php" type="button" class="btn btn-danger btn-sm">Back</a>
            </div>
        </form>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>
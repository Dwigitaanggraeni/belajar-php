<?php
    if ( isset($_GET["nis"]) ){
        $nis= $_GET["nis"];
        $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis'; ";
        include('./input-config.php');
        $query = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($query);
        
    }
?>
<h1>Edit Data</h1>
<form action = "input-datadiri-edit.php" method="POST">
    <lable for="nis">Nomor Induk Siswa:</lable><br>
    <input value="<?php echo $row["nis"]; ?>" type="number" name="nis" placeholder="Ex.12100212" readonly /><br>

    <lable for="nama">Nama Lengkap</lable><br>
    <input value="<?php echo $row["namalengkap"]; ?>" type="text" name="nama" placeholder="Ex. Dwi Gita" /><br>

    <lable for="tanggal_lahir">Tanggal Lahir</lable><br>
    <input value="<?php echo $row["tanggal_lahir"]; ?>" type="date" name="tanggal_lahir" /> <br>

    <lable for="nilai">Nilai</lable><br>
    <input value="<?php echo $row["nilai"]; ?>"type="number" name="nilai" placeholder="Ex. 80.56"/> <br>

    <input type="submit" name="edit" value="Edit Data"/><br>
    <a href="input-datadiri.php">Kembali</a>
</form>

<?php
    if( isset($_POST["edit"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];

        // EDIT - Memperbarui Data 
        $query = "
                UPDATE datadiri SET namalengkap = '$nama',
                tanggal_lahir = '$tanggal_lahir', 
                nilai = '$nilai'
                WHERE nis = '$nis';
            
            ";
            include('./input-config.php');
            $update = mysqli_query($mysqli, $query);

            if ($update){
                echo"
                    <script>
                        alert('Data berhasil ditambahkan');
                        window.location='input-datadiri.php';
                    </script>
                ";
            }else{
                echo"
                    <script>
                        alert('Data gagal');
                        window.location='input-datadiri-edit.php?nis=$nis';
                    </script>
                ";
            }
    }
?>
<form action = "input-siswa.php" method="POST">
    <lable for="nis">Nomor Induk Siswa:</lable>
    <input type="number" name="nis" placeholder="Ex.12100212" /><br>

    <lable for="nama">Nama Lengkap</lable>
    <input type="text" name="nama" placeholder="Ex. Dwi Gita" /><br>

    <lable for="jk">Jenis Kelamin</lable><br>
    <input type="checkbox" name="jk" value="L" /> Laki Laki
    <input type="checkbox" name="jk" value="P" /> Perempuan<br>

    <lable for="kelas">Klelas</lable>
    <input type="text" name="kelas" placeholder="Ex. XI RPL 2" /><br>

    <lable for="tanggal_lahir">Tanggal Lahir</lable>
    <input type="date" name="tanggal_lahir" /> <br>
    
    <lable for="alamat">Alamat :</lable>
    <textarea name="alamat" placeholder="Ex. jln ahmad yani"></textarea><br>

    <lable for="Eskul">Esktrakurilkuler</lable>
    <select name="eskul" > 
        <option>Pramuka</option>
        <option>Paskibra</option>
        <option>BTQ</option>
        <option>Futsal</option>
        <option>Basketball</option>
        <option>Marching Band</option>
    </select><br>

    <lable for="nilai">Nilai</lable>
    <input type="number" name="nilai" placeholder="Ex. 80.56"/> 

    <input type="submit" name="simpan" value="Simpan Data"/>
    <input type="reset" name="reset" value="Reset Input"/>
</form>

<?php
    if( isset($_POST["simpan"]) ){
        echo"<hr>";

        //Deklarasi Variable
        $nis = $_POST["nis"];
        $namalengkap = $_POST["nama"];
        $jeniskelamin = $_POST["jk"];
        $kelas = $_POST["kelas"];
        $tanggal_lahir = date('l, d F Y', strtotime($_POST["tanggal_lahir"]) );
        $alamat = $_POST["alamat"];
        $eskul = $_POST["eskul"];
        $nilai = $_POST["nilai"];

        if($nilai >=78) {
                $status = "Lulus";
        }else {
            $status = "Belum Lulus";
        }

        //Tampil Data Variable
        echo"
        Hasil inputan sebagai berikut : <br>
        Nomor Induk Siswa : $nis <br>
        Nama Lengkap : $namalengkap <br>
        Jenis Kelamin : $jeniskelamin <br>
        Kelas : $kelas <br>
        Tanggal Lahir : $tanggal_lahir <br>
        Alamat : $alamat <br>
        Ekstrakulikuler : $eskul <br>
        Nilai : $nilai <br>
        Status Kelulusan : $status 
        ";
    }
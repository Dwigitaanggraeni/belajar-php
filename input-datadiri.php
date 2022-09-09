<form action = "input-datadiri.php" method="POST">
    <lable for="nis">Nomor Induk Siswa:</lable>
    <input type="number" name="nis" placeholder="Ex.12100212" /><br>

    <lable for="nama">Nama Lengkap</lable>
    <input type="text" name="nama" placeholder="Ex. Dwi Gita" /><br>

    <lable for="tanggal_lahir">Tanggal Lahir</lable>
    <input type="date" name="tanggal_lahir" /> <br>

    <lable for="nilai">Nilai</lable>
    <input type="number" name="nilai" placeholder="Ex. 80.56"/> 

    <input type="submit" name="simpan" value="Simpan Data"/>
</form>

<?php
    include("./input-config.php");

    // Menampilkan data dari Database
    $no= 1;
    $tabledata = "";
    $data = mysqli_query($mysqli," SELECT * FROM datadiri ");
    while($row = mysqli_fetch_array($data)){
    $tabledata .= "
            <tr>
                <td>".$no.".</td>
                <td>".$row["nis"]."</td>
                <td>".$row["namalengkap"]."</td>
                <td>".$row["tanggal_lahir"]."</td>
                <td>".$row["nilai"]."</td>
            </tr>
        ";
        $no++;
    }

    echo"
        <table cellpadding=5 border=1 cellspacing=0>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Nilai</th>
            </tr>
            $tabledata
        </table>
    ";
?>
<form action="post.php" method="POST">
        <input type="text" name="namalengkap" placeholder="Ex. Dwi" /><br>
        <input type="text" name="Kelas" placeholder="Ex. 11 RPL 2" /><br>
        <input type="number" name="NIS" placeholder="Ex. 1200145" /><br>

        <input type="submit" name="Simpan" value="Simpan Data" />
</form>

<?php
if( isset($_POST["Simpan"]) ){
    echo "<hr>";

    $nama = $_POST["namalengkap"];
    $kelas = $_POST["Kelas"];
    $NIS = $_POST["NIS"];

    echo "Nama Lengkap : $nama  <br>";
    echo "Kelasnya : $kelas  <br>";
    echo "NIS : $NIS  <br>";
}
?>
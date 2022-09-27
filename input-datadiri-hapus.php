<?php
    if ( isset($_GET["nis"]) ){
        $nis= $_GET["nis"];
        
        $query = "
        DELETE FROM datadiri
        WHERE NIS = '$nis';
    
    ";

    include ('./input-config.php');
    $delete = mysqli_query($mysqli, $query);

    if($update){
        echo"
                    <script>
                        alert('Data berhasil dihapus');
                        window.location='input-datadiri.php';
                    </script>
                ";
    }else{
        echo"
            <script>
                alert('Data Berhasil dihapus');
                window.location='input-datadiri.php?nis=$nis';
            </script>
        ";
    }
}
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laboratorium";

    // membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    } 

    if($_POST['id_pasien']) {
        $id_pasien = $_POST['id_pasien'];
        // mengambil data berdasarkan id
       $sql = mysqli_query($koneksi, "SELECT * FROM data_pasien WHERE id_pasien = '".$_POST["id_pasien"]."'");
       //$sql = "SELECT * FROM data_pasien WHERE nopemeriksaan_rj = $id";
       // $result = $koneksi->query($sql);
        foreach ((array) $sql as $row){ ?>

            <table class="table">
                <?php
                 echo "<tr>
                    <td>".$row['id_pasien']."</td>
                    <td>".$row['nama_pasien']."</td>";
                    ?>
            </table>
            <?php
         
        }
    }
    $koneksi->close();
?>
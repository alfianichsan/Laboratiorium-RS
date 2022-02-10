<?php
    $servername = "localhost";
    $username = "Laboratorium4_rs";
    $password = "admin123";
    $dbname = "Laboratorium4_laboratorium";
 
    // membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);
 
    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    } 
 
    if($_POST['rowid']) {
        $kode_dokter = $_POST['rowid'];
        // mengambil data berdasarkan id
        // dan menampilkan data ke dalam form modal bootstrap
        $sql = "SELECT * FROM data_dokter WHERE kode_dokter = $kode_dokter";
        $result = $koneksi->query($sql);
        foreach ($result as $baris) { ?>
 
        <!-- MEMBUAT FORM -->
        <form action="update.php" method="post">
            <input type="" readonly="" name="kode_dokter" value="<?php echo $baris['kode_dokter']; ?>">
            <div class="form-group">
                <label>Nama Dokter</label>
                <input type="text" class="form-control" name="kode_dokter" value="<?php echo $baris['nama_dokter']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
 
        <?php } }
    $koneksi->close();
?>
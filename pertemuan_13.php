<?php
include "pertemuan_13_tampilkan_data.php";
include "pertemuan_13_edit_data.php";

if (isset($_POST)) {
    $data_edit = mysqli_fetch_assoc($proses_ambil);
}
?>

<html>
<head>
    <title></title>
    <!-- Bootstrap -->
    <link href="template/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="template/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="template/assets/styles.css" rel="stylesheet" media="screen">
</head>

<body>
    <div class="span9" id="content">
        <!-- morris stacked chart -->
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Data Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <?php if (isset($_GET['id'])) { ?>
                            <form action="pertemuan_13_edit_data.php?id=<?php echo $data_edit['id'] ?>&proses=1" method="POST">
                        <?php } else { ?>
                            <form action="pertemuan_13_proses.php" method="POST">
                        <?php } ?>

                        <fieldset>
                            <legend>Input Data Mahasiswa</legend>
                            <div class="control-group">
                                <label class="control-label" for="nama">NAMA MAHASISWA</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="id" name="id" type="hidden" value="<?php if (!empty($data_edit['id'])) echo $data_edit["id"]; ?>">
                                    <input class="input-xlarge focused" id="nama" name="nama" type="text" value="<?php if (!empty($data_edit['nama_mahasiswa'])) echo $data_edit["nama_mahasiswa"]; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="prodi">PRODI MAHASISWA</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="prodi" name="prodi" type="text" value="<?php if (!empty($data_edit['prodi'])) echo $data_edit["prodi"]; ?>">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">PROSES</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    </form>
                    <a href="pertemuan_13_search.php">Cari data Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Data Mahasiswa</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NPM MAHASISWA</th>
                                <th>NAMA MAHASISWA</th>
                                <th>PRODI MAHASISWA</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($proses)) {
                                foreach ($proses as $data) { ?>
                                    <tr>
                                        <td><?= $data["id"] ?></td>
                                        <td><?= $data["nama_mahasiswa"] ?></td>
                                        <td><?= $data["prodi"] ?></td>
                                        <td>
                                            <a href=<?php echo "pertemuan_13.php?id=" . $data["id"] ?>>EDIT</a>
                                            <a href=<?php echo "pertemuan_13_hapus_data.php?id=" . $data["id"] ?>>DELETE</a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /block -->
    </div>
    </div>
</body>
</html>

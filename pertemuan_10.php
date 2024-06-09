<html>
<header>
    <title>

    </title>
    <!-- Bootstrap -->
    <link href="template/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="template/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="template/assets/styles.css" rel="stylesheet" media="screen">
</header>

<body>
    <div class="span9" id="content">
        <!-- morris stacked chart -->
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Nilai Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="pertemuan_10_proses.php" method="POST">
                            <fieldset>
                                <legend>Input Nilai Mahasiswa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="nama">NAMA MAHASISWA</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="nama" name="nama" type="text" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="prodi">PRODI MAHASISWA</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="prodi" name="prodi" type="text" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="ulangi">ULANGI</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="ulangi" name="ulangi" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">PROSES</button>
                                    <button type="reset" class="btn">Cancel</button>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
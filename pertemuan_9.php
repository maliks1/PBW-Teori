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
    <form action="pertemuan_7.php" method="POST">
        NPM :
        <input type="text" name="npm" value="">
        <br>
        NILAI : <input type="number" name="nilai" value="">
        <br>
        ULANGI : <input type="number" name="ulangi" value="">
        <br>
        <button type="submit" name="proses_data">PROSES DATA</button>
    </form>
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
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Input Nilai Mahasiswa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="npm">NPM MAHASISWA</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="npm" type="text" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="nilai">NILAI MAHASISWA</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="nilai" type="text" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="ulangi">ULANGI</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="ulangi" type="text" value="">
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
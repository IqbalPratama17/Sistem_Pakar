<?php
include 'a_header.php';
include "../controller/co_Gejala.php";
$g = new Gejala;
$g->TampilSatuDataGejala($_GET['id_gejala']);
?>

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Manajemen Ubah Gejala</h4>
                <div class="d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="Data_gejala.php">Data Gejala</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah Gejala</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><br><br>

    <div class="container" style="margin-bottom: 25%;">
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" class="form-horizontal form-material" action="../proses/P_Edit_gejala.php">
                    <div class="col panel-body text-right">
                        <button class="btn btn-success" type="submit" onclick="myalert()">
                            <i class="fas fa-exchange-alt"></i> Ubah Data
                        </button>
                    </div>
                    <div class="form-group">
                        <input type="hidden" value="<?php print $_GET['id_gejala'] ?>" name="id_gejala" />
                        <b><label class="col-md-12">Kode Gejala</label></b>
                        <div class="col-md-12">
                            <input type="text" value="<?php print $g->id_gejala; ?>" placeholder="" class="form-control form-control-line" name="id_gejala" readonly="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <b><label class="col-md-12">Nama Gejala</label></b>
                        <div class="col-md-12">
                            <input type="text" value="<?php print $g->nama; ?>" class="form-control form-control-line" name="nama" required>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'b_footer.php'; ?>
</div>
<script>
    function myalert() {
        alert("Data Berhasil Diubah");
    }
</script>
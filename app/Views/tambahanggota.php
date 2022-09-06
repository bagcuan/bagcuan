<?php
$this->extend('container');

$this->section('isi');
?>
<div class="card text-left">
    <div>

        <nav>
            <ol class="breadcrumb">
                <br>
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Anggota</li>
            </ol>
        </nav>



        <!-- <div class="card">
        <div class="card-body">
            <form action="<?php echo base_url('post/store') ?>" method="POST">
                <div class="form-group">
                    <label>NAMA</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label>PANGKAT</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Pangkat">
                </div>
                <div class="form-group">
                    <label>NRP</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan NRP">
                </div>
                <div class="form-group">
                    <label>JABATAN</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Jabatan">
                </div>
                <div class="form-group">
                    <label>JENIS KELAMIN</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Jenis Kelamin">
                </div>
                <div class="form-group">
                    <label>Nivelering</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Nivelering">
                </div>
                <div class="form-group">
                    <label>Tahun Lulus Dikpol</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Tahun Lulus Dikpol">
                </div>
                <div class="form-group">
                    <label>Dikum Akhir</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Dikum Akhir">
                </div>
                <div class="form-group">
                    <label>Dikpol Akhir</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Dikpol Akhir">
                </div>
                <div class="form-group">
                    <label>AGAMA</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Agama">
                </div>
                <div class="form-group">
                    <label>DIKJUR</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Nama Dikjur">
                </div>
                <div class="form-group">
                    <label>BAGIAN</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Bagian">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div> -->

        <form action="save" method="post">
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" name="nama" autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="pangkat" class="col-sm-2 col-form-label">pangkat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="pangkat" name="pangkat">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nrp" name="nrp">
                </div>
            </div>
            <!-- <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            First radio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Second radio
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                            Third disabled radio
                        </label>
                    </div>
                </div>
            </fieldset> -->
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                        </label>
                    </div>
                </div>
            </div>
            <div class="card col-sm-8 offset-sm-2">
                <button type="submit" class="btn btn-primary text-center">Tambah</button>
            </div>
        </form>

    </div>

</div>

<?php
$this->endSection();
?>
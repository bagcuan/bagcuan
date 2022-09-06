<?php
$this->extend('container');

$this->section('isi');
?>
<div class="card text-center">
    <div> </i>
        <nav>
            <ol class="breadcrumb">
                <br>
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Anggota</li>
            </ol>
        </nav>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <a><i class="fas fa-plus"></i> DATA ANGGOTA</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NRP</th>
                            <th>NAMA</th>
                            <th>PANGKAT</th>
                            <th>JABATAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data_anggota as $k) :
                        ?>

                            <tr>
                                <td><?php echo $k['nrp']; ?></td>
                                <td><?php echo $k['nama']; ?></td>
                                <td><?php echo $k['pangkat']; ?></td>
                                <td><?php echo $k['jabatan']; ?></td>
                                <td><a href="">lihat</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<?php
$this->endSection();
?>
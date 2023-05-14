<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-warning">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-warning">
                    Data Kuesioner
                </h4>
            </div>
        </div>
    </div>
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                    <span class="text">
                    </span>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('kuesioner/add') ?>" class="btn btn-sm btn-warning btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Kuesioner
                    </span>
                </a>
            </div>
        </div>
    </div>
     <div class="table-responsive">
            <table class="table table-striped nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Lingkar Perut</th>
                    <th>Lingkar Lengan</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Kadar Hb</th>
                    <th>Perilaku Merokok</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($barang) :
                    foreach ($barang as $b) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b['lingkar_perut']; ?></td>
                            <td><?= $b['lingkar_lengan']; ?></td>
                            <td><?= $b['berat_badan']; ?></td>
                            <td><?= $b['tinggi_badan']; ?></td>
                            <td><?= $b['kadar_hb']; ?></td>
                            <td><?= $b['perilaku_merokok']; ?></td>
                            <td>
                                <a href="<?= base_url('kuesioner/edit/') . $b['id_kuesioner'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('kuesioner/delete/') . $b['id_kuesioner'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
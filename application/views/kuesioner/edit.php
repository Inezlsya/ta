<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-warning">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-warning">
                            Form Edit Supplier
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('kuesioner') ?>" class="btn btn-sm btn-warning btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id_kuesioner' => $barang['id_kuesioner']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama_catin">Nama Supplier</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('nama_catin', $barang['nama_catin']); ?>" name="nama_catin" id="nama_catin" type="text" class="form-control" placeholder="Nama Supplier...">
                        </div>
                        <?= form_error('nama_catin', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="usia">Usia</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                            </div>
                            <input value="<?= set_value('usia', $barang['usia']); ?>" name="usia" id="usia" type="text" class="form-control" placeholder="Nomor Telepon...">
                        </div>
                        <?= form_error('usia', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="lingkar_perut">Lingkar Perut</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('lingkar_perut', $barang['lingkar_perut']); ?>" name="lingkar_perut" id="lingkar_perut" type="text" class="form-control" placeholder="Nama Supplier...">
                        </div>
                        <?= form_error('lingkar_perut', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="lingkar_lengan">Lingkar Lengan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('lingkar_lengan', $barang['lingkar_lengan']); ?>" name="lingkar_lengan" id="lingkar_lengan" type="text" class="form-control" placeholder="Nama Supplier...">
                        </div>
                        <?= form_error('lingkar_lengan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="berat_badan"> Berat Badan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('berat_badan', $barang['berat_badan']); ?>" name="berat_badan" id="berat_badan" type="text" class="form-control" placeholder="Nama Supplier...">
                        </div>
                        <?= form_error('berat_badan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tinggi_badan">Tinggi Badan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('tinggi_badan', $barang['tinggi_badan']); ?>" name="tinggi_badan" id="tinggi_badan" type="text" class="form-control" placeholder="Nama Supplier...">
                        </div>
                        <?= form_error('tinggi_badan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kadar_hb">Kadar HB</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('kadar_hb', $barang['kadar_hb']); ?>" name="kadar_hb" id="kadar_hb" type="text" class="form-control" placeholder="Nama Supplier...">
                        </div>
                        <?= form_error('kadar_hb', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="perilaku_merokok">Perilaku Merokok</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('perilaku_merokok', $barang['perilaku_merokok']); ?>" name="perilaku_merokok" id="perilaku_merokok" type="text" class="form-control" placeholder="Nama Supplier...">
                        </div>
                        <?= form_error('perilaku_merokok', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-warning">Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
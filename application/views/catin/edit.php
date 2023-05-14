<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-warning">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-warning">
                            Form Edit catin
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('catin') ?>" class="btn btn-sm btn-warning btn-secondary btn-icon-split">
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
                <?= form_open('', [], ['id_catin' => $catin['id_catin']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama_catin">Nama Catin</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('nama_catin', $catin['nama_catin']); ?>" name="nama_catin" id="nama_catin" type="text" class="form-control" placeholder="Nama Catin...">
                        </div>
                        <?= form_error('nama_catin', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="no_ktp">Nomor KTP</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-id-card"></i></span>
                            </div>
                            <input value="<?= set_value('no_ktp', $catin['no_ktp']); ?>" name="no_ktp" id="no_ktp" type="text" class="form-control" placeholder="Nomor KTP...">
                        </div>
                        <?= form_error('no_ktp', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="jk">Jenis Kelamin</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-venus-mars"></i></span>
                            </div>
                            <select value="<?= set_value('jk', $catin['jk']); ?>" name="jk" id="jk" type="text" class="form-control" placeholder="Jenis Kelamin...">
                            <option value="pria">Pria</option>
						    <option value="wanita">Wanita</option>
                            </select>
                        </div>
                        <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="alamat" id="alamat" class="form-control" rows="4" placeholder="Alamat..."><?= set_value('alamat', $catin['alamat']); ?></textarea>
                        </div>
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="status">Status</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-heart"></i></span>
                            </div>
                            <select value="<?= set_value('status', $catin['status']); ?>" name="status" id="status" type="text" class="form-control" placeholder="Status...">
                            <option value="menikah">Menikah</option>
						    <option value="belum menikah">Belum Menikah</option>
                            </select>
                        </div>
                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
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
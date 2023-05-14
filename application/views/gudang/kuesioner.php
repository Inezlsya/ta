<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-warning">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-warning">
                            Form Tambah Catin
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
                <?= form_open(); ?>
                <div class="form-group">
                    <label for="lp">Berapa Lingkar Perut Anda ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('lp'); ?>" name="lp" id="lp" type="text" class="form-control" placeholder="Nama Catin...">
                        </div>
                        <?= form_error('lp', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ll">Berapa Lingkar Lengan Anda ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-id-card"></i></span>
                            </div>
                            <input value="<?= set_value('ll'); ?>" name="ll" id="ll" type="text" class="form-control" placeholder="Nomor KTP...">
                        </div>
                        <?= form_error('ll', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bb">Berapa Berat Badan Anda ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-heart"></i></span>
                            </div>
                            <select value="<?= set_value('bb'); ?>" name="bb" id="bb" type="text" class="form-control" placeholder="Nama Supplier...">
                            <option value="menikah">Menikah</option>
						    <option value="belum menikah">Belum Menikah</option>
                            </select>
                        </div>
                        <?= form_error('bb', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label  for="tb">Berapa Tinggi Badan Anda ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <input name="tb" id="tb" class="form-control" rows="4" placeholder="tb..."><?= set_value('tb'); ?></input>
                        </div>
                        <?= form_error('tb', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rokok">Apakah Anda Merokok ? ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-heart"></i></span> -->
                            </div>
                            <!-- <input value="<?= set_value('rokok'); ?>" name="rokok" id="rokok" type="text" class="form-control" placeholder="Nama Supplier..."> -->
                            <input type="checkbox" name="check_list[]" alt="Checkbox" value="ya"> Ya
						    <input type="checkbox" name="check_list[]" alt="Checkbox" value="tidak"> Tidak
                            
                        </div>
                        <?= form_error('rokok', '<small class="text-danger">', '</small>'); ?>
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
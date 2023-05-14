<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-warning">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-warning">
                            Form Skrining Stunting
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
                <?= form_open(); ?>
                <div class="form-group">
                    <label for="lingkar_perut">Berapa Lingkar Perut Anda ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('lingkar_perut'); ?>" name="lingkar_perut" id="lingkar_perut" type="text" class="form-control" placeholder="Lingkar Perut...cm">
                        </div>
                        <?= form_error('lingkar_perut', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lingkar_lengan">Berapa Lingkar Lengan Anda ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-id-card"></i></span>
                            </div>
                            <input value="<?= set_value('lingkar_lengan'); ?>" name="lingkar_lengan" id="lingkar_lengan" type="text" class="form-control" placeholder="Lingkar Lengan...cm">
                        </div>
                        <?= form_error('lingkar_lengan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="berat_badan">Berapa Berat Badan Anda ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-id-card"></i></span>
                            </div>
                            <input value="<?= set_value('berat_badan'); ?>" name="berat_badan" id="berat_badan" type="text" class="form-control" placeholder="Berat Badan...kg">
                        </div>
                        <?= form_error('berat_badan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label  for="tinggi_badan">Berapa Tinggi Badan Anda ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <input name="tinggi_badan" id="tinggi_badan" class="form-control" rows="4" placeholder="tinggi_badan...cm"><?= set_value('tinggi_badan'); ?></input>
                        </div>
                        <?= form_error('tinggi_badan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label  for="kadar_hb"> Berapa Kadar HB Anda?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('kadar_hb'); ?>" name="kadar_hb" id="kadar_hb" type="text" class="form-control" placeholder="Kadar HB...">
                        </div>
                        <?= form_error('kadar_hb', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="perilaku_merokok">Apakah Anda Merokok ? ?</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-heart"></i></span> -->
                            </div>
                            <!-- <input value="<?= set_value('perilaku_merokok'); ?>" name="rokok" id="rokok" type="text" class="form-control" placeholder="Nama Supplier..."> -->
                            <input type="checkbox" name="check_list[]" alt="Checkbox" value="ya"> Ya
						    <input type="checkbox" name="check_list[]" alt="Checkbox" value="tidak"> Tidak
                            
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
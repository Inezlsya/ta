<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-warning">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-warning">
                            Form Edit jenis
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('edu') ?>" class="btn btn-sm btn-warning btn-secondary btn-icon-split">
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
                <?= form_open('', [], ['id_edukasi' => $edukasi['id_edukasi']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kategori">Kategori</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-book"></i></span>
                            </div>
                            <select value="<?= set_value('kategori', $edukasi['kategori']); ?>" name="kategori" id="kategori" type="text" class="form-control" placeholder="Jenis Kelamin...">
                                 <option value="edukasi stunting">Edukasi Stunting</option>
                                <option value="kanker payurara">Kanker Payudara</option>
                                <option value="kehamilan">Kehamilan</option>
                            </select>
                        </div>
                        <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="deskripsi">deskripsi</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-file"></i></span>
                            </div>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" placeholder="deskripsi..."><?= set_value('deskripsi'); ?></textarea>
                        </div>
                        <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
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
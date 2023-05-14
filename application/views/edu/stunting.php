<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-warning">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-warning">
                 Materi
                </h4>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- <table class="table table-striped" id="dataTable"> -->

            <tbody>
                <?php
               
                
                    foreach ($edu as $j) :
                        ?>
                    <h1> stunting<?= $j['deskripsi']; ?><h/1>
                    <?php endforeach; ?>

                
            </tbody>
        <!-- </table> -->
    </div>
</div>
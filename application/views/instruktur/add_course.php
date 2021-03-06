<main class="mdl-layout__content">
    <div class="mdl-grid cover-main"></div>
    <div class="mdl-grid">
    
    <?php if ($this->session->flashdata('data_tersimpan') == TRUE): ?>
    <div role="alert"  class="alert alert-success alert-dismissible fade in mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--2-offset-tablet mdl-cell--12-col-phone"> 
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span>
        </button>
        <p><?php echo $this->session->flashdata('data_tersimpan')?></p>
    </div>
    <?php endif; ?>
    
        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--2-offset-tablet mdl-cell--12-col-phone">
            <div class="mdl-card mdl-shadow--2dp pie-chart">
                <div class="mdl-card__title" style="display:block;">
                    <h2 class="mdl-card__title-text">Courses</h2>
                    <div class="mdl-card__subtitle-text">Masukan Detail Course</div>
                </div>
                <div class="mdl-card__supporting-text">
                    <form action="<?php echo base_url(). 'instruktur/course/insert'; ?>" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label for="inputtext3" class="col-sm-2 control-label">Kode Course</label>
                            <div class="col-sm-10">
                            <input name="m-kode-course" type="text" class="form-control" id="inputtext3" placeholder="Kode Course">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Nama Course</label>
                            <div class="col-sm-10">
                            <input name="m-nama-course" type="text" class="form-control" id="inputPassword3" placeholder="Nama Course">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputtext3" class="col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-10">
                            <textarea name="m-deskripsi-course" class="form-control" id="inputtext3" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputtext3" class="col-sm-2 control-label">Universitas Course</label>
                            <div class="col-sm-10">
                            <input name="m-univ-course" type="text" class="form-control" id="inputtext3" placeholder="Universitas Course">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-blue">Selesai</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
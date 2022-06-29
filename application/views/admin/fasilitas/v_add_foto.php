<div class="col-lg-12">
<div class="panel panel-primary">
    <div class="panel-heading">
    Add Foto Fasilitas
    </div>
    <div class="panel-body">
        <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload. '</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }

            echo form_open_multipart('fasilitas/add_foto/'.$fasilitas->id_fasilitas);
        ?>

            <div class="col-sm-6">
            <div class="form-group">
                <label>Keterangan Foto</label>
                <input class="form-control" type="text" name="ket_foto" placeholder="Keterangan Foto" required>
            </div>
            </div>

            <div class="col-sm-6">
            <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" type="text" name="foto_fasilitas" required>
            </div>
            </div>            



         

                

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('fasilitas') ?>" class="btn btn-success">Back</a>
            </div>

        <?php echo form_close(); ?>
        
        <hr>

        <?php foreach ($foto_fasilitas as $key => $value) { ?>
            <div class="col-sm-3 text-center">
                <label><?= $value->ket_foto ?></label>
            <img src="<?= base_url('foto_fasilitas/'.$value->foto_fasilitas) ?>" width="200px" height="200px">
            <br>
            <a href="<?= base_url('fasilitas/delete_foto/'.$value->id_fasilitas.'/'.$value->id_foto) ?>" onclick="return confirm('Apakah Foto Ini Akan Dihapus?')" class="btn btn-danger btn-xs btn-block"><i class="fa fa-trash"></i></a>
        </div>
        <?php } ?>

    </div>
    </div>
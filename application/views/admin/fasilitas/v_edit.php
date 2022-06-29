<div class="col-lg-12">
<div class="panel panel-primary">
    <div class="panel-heading">
    Edit Data
    </div>
    <div class="panel-body">
        <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload. '</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');


            echo form_open_multipart('fasilitas/edit/'.$fasilitas->id_fasilitas);
        ?>

            <div class="form-group">
                <label>Nama Fasilitas</label>
                <input class="form-control" value="<?= $fasilitas->nama_fasilitas ?>" type="text" name="nama_fasilitas" placeholder="Nama Fasilitas" required>
            </div>

            <div class="form-group">
                <label>Foto Sampul</label><br>
                <img src="<?= base_url('sampul_fasilitas/'.$fasilitas->sampul_fasilitas) ?>" width="200px">
            </div>
            <br>

            <div class="form-group">
                    <label>Ganti Sampul</label>
                    <input type="file" class="form-control" type="text" name="sampul_fasilitas">
                </div>            



         

                

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success">Reset</button>
            </div>

        <?php echo form_close(); ?> 
</div>
</div>
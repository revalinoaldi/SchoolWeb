<!-- <div class="col-lg-12">
<div class="panel panel-primary">
    <div class="panel-heading">
    Add Data
    </div>
    <div class="panel-body">
        <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload. '</div>';
            }

            
            echo form_open_multipart('siswa/edit/'.$siswa->id_siswa);
        ?>

            <div class="form-group">
                <label>NIS</label>
                <input class="form-control" type="text" name="nis" value="<?= $siswa->nis ?>" placeholder="NIS" required>
            </div>

            <div class="form-group">
                <label>Nama Siswa</label>
                <input class="form-control" type="text" name="nama_siswa" value="<?= $siswa->nama_siswa ?>" placeholder="Nama Siswa" required>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tempat_lahir" value="<?= $siswa->tempat_lahir ?>" placeholder="Tempat Lahir" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                 <label>Tanggal Lahir</label>
                    <input class="form-control" type="text" name="tgl_lahir" value="<?= $siswa->tgl_lahir ?>" id="tanggal" placeholder="Tanggal Lahir" required>
                </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="<?= $siswa->kelas ?>"><?= $siswa->kelas ?></option>
                    <option value="">--Pilih Kelas--</option>
                    <option value="X">I</option>
                    <option value="XI">II</option>
                    <option value="XII">III</option>
                    <option value="XII">IV</option>
                    <option value="XII">V</option>
                    <option value="XII">VI</option>
                </select>
            </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                 <label>Ganti Foto Siswa</label>
                    <input type="file" class="form-control" type="text" name="foto_siswa">
                </div>
            </div>

                <div class="form-group">
                 <label>Foto Siswa</label>
                 <img src="<?= base_url('foto_siswa/'.$siswa->foto_siswa) ?>" width="150px">
                </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success">Reset</button>
            </div>

        <?php echo form_close(); ?> 
</div>
</div> -->
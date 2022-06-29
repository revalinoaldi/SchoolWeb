<div class="col-lg-12">
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

            
            echo form_open_multipart('kelas5/edit/'.$kelas5->id_siswa);
        ?>

            <div class="form-group">
                <label>NIS</label>
                <input class="form-control" type="text" name="nis" value="<?= $kelas5->nis ?>" placeholder="NIS" required>
            </div>

            <div class="form-group">
                <label>Nama Siswa</label>
                <input class="form-control" type="text" name="nama_siswa" value="<?= $kelas5->nama_siswa ?>" placeholder="Nama Siswa" required>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tempat_lahir" value="<?= $kelas5->tempat_lahir ?>" placeholder="Tempat Lahir" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                 <label>Tanggal Lahir</label>
                    <input class="form-control" type="text" name="tgl_lahir" value="<?= $kelas5->tgl_lahir ?>" id="tanggal" placeholder="Tanggal Lahir" required>
                </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="<?= $kelas5->kelas ?>"><?= $kelas5->kelas ?></option>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label>Agama</label>
                    <input class="form-control" type="text" name="agama" value="<?= $kelas5->agama ?>" placeholder="Agama" required>
                </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="<?= $kelas5->kelas ?>"><?= $kelas5->kelas ?></option>
                    <option value="">--Pilih Kelas--</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                    <option value="VI">VI</option>
                </select>
            </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                 <label>Ganti Foto Siswa</label>
                    <input type="file" class="form-control" type="text" name="foto_kelas5">
                </div>
            </div>

                <div class="form-group">
                 <label>Foto Siswa</label>
                 <img src="<?= base_url('foto_kelas5/'.$kelas5->foto_kelas5) ?>" width="150px">
                </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success">Reset</button>
            </div>

        <?php echo form_close(); ?> 
</div>
</div>
<?php
echo form_open_multipart('admin/setting');

if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>
<div class="col-sm-4">
    <label for="">Kepala Sekolah</label><br>
    <img src="<?= base_url('foto_kepsek/'.$setting->foto_kepsek) ?>" width="150px" height="200px">
    <br>

<div class="form-group">
    <br>
        <label>Ganti Foto</label>
        <input type="file" class="form-control" type="text" name="foto_kepsek">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>Kepala Sekolah</label>
        <input type="text" class="form-control" value="<?= $setting->nama_kepsek ?>" type="text" name="nama_kepsek">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>NIP</label>
        <input type="text" class="form-control" value="<?= $setting->nip ?>" type="text" name="nip">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>Sambutan Kepala Sekolah</label>
        <textarea class="form-control" name="sambutan" id="" rows="20"><?= $setting->sambutan ?></textarea>
    </div>

<div class="form-group">
    <button type="submit" class="btn btn-success btn-sm">Update</button>
</div>
</div>

<?php echo form_close(); ?>
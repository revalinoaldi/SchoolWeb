<?php
echo form_open_multipart('admin/pendaftaran');

if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>
<div class="col-sm-4">
    <label for="">Informasi Pendaftaran</label><br>
    <img src="<?= base_url('informasi_pendaftaran/'.@$setting->brosur_img) ?>" class="img-fluid rounded col-sm-12 mb-4"  id="avatarPreview">
    <br>

    <div class="form-group mt-5">
        <br>
        <label>Brosur Informasi</label>
        <input type="file" class="form-control" type="text" name="brosur" accept="image/*" onchange="loadFile(event,`avatarPreview`)">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" value="<?= @$setting->title ?>" type="text" name="title" required>
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>Tahun</label>
        <select class="form-control" name="tahun">
            
        <?php for($i = date('Y', strtotime('-5 year')); $i <= date('Y', strtotime('+5 year')); $i++): ?>
            <option <?= $i == date("Y") ? "selected" : '' ?> value="<?= $i ?>"><?= $i ?></option>
        <?php endfor ?>
        </select>

    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>File Document</label>
        <input type="file" name="document" accept=".pdf">
        <span class="text-muted">Max Document Uploaded : 2Mb only PDF extentions</span>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm">Update</button>
    </div>
</div>

<?php echo form_close(); ?>

<script type="text/javascript">
    var loadFile = function(event,target) {
        var avatar = document.getElementById(target);
        avatar.src = URL.createObjectURL(event.target.files[0]);
        avatar.onload = function() {
            URL.revokeObjectURL(avatar.src) // free memory
        }
    };
</script>
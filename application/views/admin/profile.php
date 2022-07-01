<?php
echo form_open('admin/profile/'.$user->username);

if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>

<div class="col-sm-8">
    <div class="form-group">
        <label>Nama User</label>
        <input required="" type="text" class="form-control" value="<?= $user->nama_user ?>" type="text" name="nama_user">
        <input type="hidden" name="id" value="<?= $user->id_user ?>">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>Username</label>
        <input required="" type="text" class="form-control" value="<?= $user->username ?>" type="text" name="username">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>New Password</label>
        <input type="password" class="form-control" type="text" name="password" placeholder="masukan password baru">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm">Update</button>
    </div>
</div>

<?php echo form_close(); ?>
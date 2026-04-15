<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Anggota</h1>

<form action="<?= base_url('anggota/update') ?>" method="post">

<input type="hidden" name="id" value="<?= $anggota->id ?>">

<div class="form-group">
<label>No Anggota</label>
<input type="text" name="no_anggota" class="form-control"
value="<?= $anggota->no_anggota ?>">
</div>

<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" class="form-control"
value="<?= $anggota->nama ?>">
</div>

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control"><?= $anggota->alamat ?></textarea>
</div>

<div class="form-group">
<label>Telepon</label>
<input type="text" name="telepon" class="form-control"
value="<?= $anggota->telepon ?>">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control"
value="<?= $anggota->email ?>">
</div>
<div class="form-group">
<label>Status</label>
<select name="status" class="form-control">

<option value="Aktif" 
<?= ($anggota->status == 'Aktif') ? 'selected' : '' ?>>
Aktif
</option>

<option value="Nonaktif"
<?= ($anggota->status == 'Nonaktif') ? 'selected' : '' ?>>
Nonaktif
</option>

</select>
</div>

<button class="btn btn-primary">Update</button>

</form>

</div>
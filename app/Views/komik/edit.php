<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-2">Form ubah Data Komik</h2>
            <form action="/komik/update/<?php echo $komik['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?php echo $komik['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?php echo $komik['sampul'] ?>">
                <div class=" form-group mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label">judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?php echo ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?php echo  (old('judul')) ? old('judul') : $komik['judul'] ?>">
                        <div class="invalid-feedback">
                            <?php echo  $validation->getError('judul'); ?>
                        </div>  
                    </div>
                </div>
                <div class=" form-group mb-3 row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo  (old('penulis')) ? old('penulis') : $komik['penulis'] ?>">
                    </div>
                </div>
                <div class=" form-group mb-3 row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo  (old('penerbit')) ? old('penerbit') : $komik['penerbit'] ?>">
                    </div>
                </div>
                <div class=" form-group mb-3 row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/<?php echo $komik['sampul']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?php echo ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?php echo  $validation->getError('sampul'); ?>
                            </div>  
                            <label class="custom-file-label" for="sampul"><?php echo $komik['sampul'] ?> </label>
                        </div> 
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Ubah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>
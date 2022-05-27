<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Customer</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('customer/store') ?>">
                <?= csrf_field(); ?>
                <h4 class="text-black-50">Personal Details</h4>
                <hr>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label text-primary">*Nama</label>
                    <input type="text" class=" col-sm-10 form-control" id="name" name="name" placeholder="Your Name" required value="<?= old('name'); ?>">
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label text-primary">*Email</label>
                    <input type="email" class=" col-sm-10 form-control is-invalid" id="email" name="email" placeholder="Your Email" value="<?= old('email'); ?>">
                    <div class=" col-sm-10 invalid-feedback">
                        Your valid email address?
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label text-primary">*Phone</label>
                    <input type="tel" class="col-sm-10 form-control is-invalid" id="phone" name="phone" placeholder="Your Number" value="<?= old('phone'); ?>">
                    <div class="invalid-feedback col-sm-10 ">
                        Your phone number? (only digits 0-9)
                    </div>
                </div>
                <div class="form-group row">
                    <label for="website" class="col-sm-2 col-form-label text-primary">*Website</label>
                    <input type="url" class="col-sm-10 form-control is-invalid" id="website" name="website" placeholder="http://" value="<?= old('website'); ?>">
                    <div class=" col-sm-10 invalid-feedback">
                        Your website? (starting from http:// and no spaces)
                    </div>
                </div>
                <div class="form-group row">
                    <label for="country" class="col-sm-2 col-form-label text-primary">*Country</label>
                    <select name="country" class="col-sm-10 form-control" id="country">
                        <option value="Austria">Austria</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Egypt">Egypt</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label text-primary">*City/State</label>
                    <input type="text" class="col-sm-10 form-control is-invalid" id="city" name="city" placeholder="" value="<?= old('city'); ?>">
                    <div class=" col-sm-10 invalid-feedback">
                        Your city or state?
                    </div>
                </div>
                <div class="form-group row">
                    <label for="zipcode" class="col-sm-2 col-form-label text-primary">*Zip</label>
                    <input type="text" class="col-sm-10 form-control is-invalid" id="zipcode" name="zipcode" placeholder="" value="<?= old('zipcode'); ?>">
                    <div class=" col-sm-10 invalid-feedback">
                        Your zip code?
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-info" />
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
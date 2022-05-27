<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Customer</h3>
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
            <form method="post" action="<?= base_url('customer/update/' . $customer->id_customer) ?>">
                <?= csrf_field(); ?>
                <h4 class="text-black-50">Personal Details</h4>
                <hr>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label text-primary">*Name</label>
                    <input type="text" class="col-sm-10 form-control" id="name" name="name" value="<?= $customer->name; ?>">
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label text-primary">*Email</label>
                    <input type="email" class="col-sm-10 form-control" id="email" name="email" value="<?= $customer->email; ?>" />
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label text-primary">*Phone</label>
                    <input type="tel" class="col-sm-10 form-control" id="phone" name="phone" value="<?= $customer->phone; ?>" />
                </div>
                <div class="form-group row">
                    <label for="website" class="col-sm-2 col-form-label text-primary">*Website</label>
                    <input type="url" class="col-sm-10 form-control" id="website" name="website" value="<?= $customer->website; ?>" />
                </div>
                <div class="form-group row">
                    <label for="country" class="col-sm-2 col-form-label text-primary">*Country</label>
                    <select name="country" class="col-sm-10 form-control" id="country">
                        <option value="Austria" <?= ($customer->country == "Austria" ? "selected" : ""); ?>>Austria</option>
                        <option value="Indonesia" <?= ($customer->country == "Indonesia" ? "selected" : ""); ?>>Indonesia</option>
                        <option value="Egypt" <?= ($customer->country == "Egypt" ? "selected" : ""); ?>>Egypt</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label text-primary">*City/State</label>
                    <input type="text" class="col-sm-10 form-control" id="city" name="city" value="<?= $customer->city; ?>">
                </div>
                <div class="form-group row">
                    <label for="zipcode" class="col-sm-2 col-form-label text-primary">*Zip</label>
                    <input type="text" class="col-sm-10 form-control" id="zipcode" name="zipcode" value="<?= $customer->zipcode; ?>">
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 mb-4 w-50 m-auto text-center">
                <div class="card-header bg-primary text-light">
                    <h4>Pilih tanggal booking</h4>
                </div>
                <div class="card-body">
                    <!-- <table class="table">
                        <tr>
                            <td class="align-items-middle">Hari-1</td>
                            <td><input type="date" class="form-control w-50"></td>
                        </tr>
                    </table> -->
                    <div class="mb-3 row w-75 m-auto">
                        <label class="col-sm-4 col-form-label">Hari - 1</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    <!-- <div class="row">
                        <div class="col">
                            Hari - 1
                            <input type="email" class="form-control w-50 m-auto" placeholder="Alamat Email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Hari - 2</label>
                            <input type="email" class="form-control w-50 m-auto" placeholder="Alamat Email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Hari - 3</label>
                            <input type="email" class="form-control w-50 m-auto" placeholder="Alamat Email" name="email" required>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
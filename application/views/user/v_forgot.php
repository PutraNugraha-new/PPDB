<!-- MultiStep Form -->
<?php if ($this->session->flashdata('flash_message')): ?>
    <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('flash_message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="container-fluid" id="grad1" style="height:70vh;">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-17 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 shadow mt-3 mb-3">
                <p class="font-weight-bold fs-title text-center">Kirim Email Reset Password</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform"  action="<?= base_url('users/forgot') ?>" method="POST">
                            <fieldset>
                                <div class="form-card">
                                    <input type="email" name="email" placeholder="Email"/>
                                    <?php echo form_error('email');?>
                                </div>
                                <input type="submit" class="next action-button rounded" value="Kirim Email"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MultiStep Form -->
<?php if ($this->session->flashdata('success_message')): ?>
    <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('success_message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('error_message')): ?>
    <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('error_message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-17 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 shadow mt-3 mb-3">
                <p class="font-weight-bold fs-title text-center">Sekolah Dasar Negeri 1 Kampuri</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform"  action="<?= base_url('users/reset_password/token/'.$token) ?>" method="POST">
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Buat Password Baru</h2>
                                    <?php echo form_password(array(
                                    'name'=>'password', 
                                    'id'=> 'password', 
                                    'placeholder'=>'Password', 
                                    'class'=>'form-control mx-auto', 
                                    'placeholder'=>'Password',
                                    'value'=> set_value('password'))); ?>
                                <?php echo form_error('password', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                                <?php echo form_password(array(
                                    'name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
                                <?php echo form_error('password', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                                </div>
                                <input type="submit" class="next action-button rounded" value="Reset Password"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

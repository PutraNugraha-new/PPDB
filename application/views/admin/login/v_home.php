<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN 1 Kampuri</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?= base_url() ?>assets/css/login.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
<?php if ($this->session->flashdata('flash_message')): ?>
    <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
        <?= $this->session->flashdata('flash_message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('danger_message')): ?>
    <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
        <?= $this->session->flashdata('danger_message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
    <div class="container my-3 d-flex justify-content-center">
        <div class="card login shadow bg-light">
            <div class="card-body">
                <p class="text-center font-weight-bold">Login</p>
                <p class="text-center font-weight-bold">SDN 1 Kampuri</p>
                <?php $fattr = array('class' => 'form-signin');
                    echo form_open(site_url().'main/login/', $fattr); 
                ?>
                <div class="form-group">
                    <?php echo form_input(array(
                        'name'=>'email', 
                        'id'=> 'email', 
                        'placeholder'=>'Username', 
                        'class'=>'form-control mx-auto',  
                        'value'=> set_value('email'))); ?>
                    <?php echo form_error('email', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                </div>
                <div class="form-group">
                    <?php echo form_password(array(
                        'name'=>'password',
                        'type' => 'password',
                        'id'=> 'password', 
                        'placeholder'=>'Password', 
                        'class'=>'form-control mx-auto', 
                        'placeholder'=>'Password',
                        'value'=> set_value('password'))); ?>
                    <?php echo form_error('password', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                </div>
                <?php 
                    echo form_submit(array('value'=>'Login', 'class'=>'btn btn-primary mx-auto btn-block')); ?>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
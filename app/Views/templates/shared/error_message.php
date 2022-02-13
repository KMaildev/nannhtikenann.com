<?php if (isset($validation)) : ?>
    <span style="color: red; padding-top: 2px;"><?= $validation->listErrors() ?></span>
<?php endif; ?>


<?php
if (session()->has("success")) {
?>
    <div class="col-md-12">
        <div class="alert alert-success">
            <?= session("success") ?>
        </div>
    </div>
<?php } elseif (session()->has("error")) { ?>

    <div class="col-md-12">
        <div class="alert alert-danger">
            <?= session("error") ?>
        </div>
    </div>
<?php } ?>
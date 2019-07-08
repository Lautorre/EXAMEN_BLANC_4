<?php ob_start(); ?>


<h1>S'inscrire</h1>
<form id="form" action="<?= url('ajout-etudiant')?>" method="post" enctype="multipart/form-data">
    <div class="col-9">

        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Nom et prénom</label>
            <div class="col-lg-9">
                <input class="form-control" name="nom" type="text" value="">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">E-mail</label>
            <div class="col-lg-9">
                <input class="form-control" name="mail" type="text" value="">
            </div>
        </div>

        <button type="submit" class="btn-primary float-right">S'inscrire</button>

       
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>
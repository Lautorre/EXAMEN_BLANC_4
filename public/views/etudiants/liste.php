<?php ob_start(); ?>

<h1>Liste des membres :</h1>
    <table>
        <tr class="m-2">
            <th class="card-header">Id</th>
            <th class="card-header">Nom et prénom</th>
            <th class="card-header">E-mail</th>
        </tr>

        <?php foreach ($etudiants as $e) : ?>
            <tr class="card-body mt-2 text-center">
                <td class="card-text m-2"><?= $e['id'] ?></td>
                <td class="card-text m-2"><?= $e['nom'] ?></td>
                <td class="card-text m-2"><?= $e['mail'] ?></td>
            </tr>


        <?php endforeach; ?>
    </table>


<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>
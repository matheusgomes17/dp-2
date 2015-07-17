<?php

use app\Form\Form;

$form = new Form;
$form->createField('text', 'Nome', '', 'Digite o seu nome...');
$form->createField('email', 'E-mail', '', 'Digite o seu e-mail...');
$form->createField('password', 'Senha', '', 'Digite a sua senha...');
$form->createField('textarea', 'Descrição', '', 'Digite o sua descrição...', 10, 10);
$form->createField('select', 'Descrição', '', '');

?>
<div class="col-md-12">
    <div class="form-group">
    <?php
        $form->render();
    ?>
    </div>
</div>
<?php
if (isset($_POST['enviar'])){
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}
<div class="form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Entre com o login e senha do usuário.') ?></legend>
        <?= $this->Form->control('username');?>
        <?= $this->Form->control('password');?>
    </fieldset>
<?= $this->Form->submit(__('login')); ?>
<?= $this->Form->end() ?>
</div>

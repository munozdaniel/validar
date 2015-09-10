<?php echo $this->getContent(); ?>
<?php echo $this->tag->form(array('index/iniciar', 'method' => 'post')); ?>
<div style="margin:10% 0 0 40%;">
    <label for="username">Nombre de Usuario</label>
    <div>
        <?php echo $this->tag->textField(array('username')); ?>
    </div>
    <label for="password">Password</label>
    <div>
        <?php echo $this->tag->passwordField(array('password')); ?>
    </div>
    <label for="name">Nombre </label>
    <div>
        <?php echo $this->tag->textField(array('name')); ?>
    </div>
    <label for="email">Email </label>
    <div>
        <?php echo $this->tag->emailField(array('email')); ?>
    </div>

    <?php echo $this->tag->submitButton(array()); ?>
</div>
<?php echo $this->tag->endForm(); ?>
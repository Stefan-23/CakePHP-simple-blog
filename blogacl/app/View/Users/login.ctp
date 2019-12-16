<h2>Login</h2>
<?php
echo $this->Form->create('User', array(
    'url' => array(
        'controller' => 'users',
        'action' => 'login'
    )
));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('Login');?>

<h3>Don't want to sign in? Enter <?php echo $this->Html->link(__('here'), array('controller' => 'posts', 'action' => 'index')); ?> to see posts only. </h3>

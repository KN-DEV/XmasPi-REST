<?= \Form::open(array('action' => 'animation/add')); ?>
<?= \Form::input('author', \Input::post('author')); ?>
<?= \Form::input('frames[]','0000000000000000000000000000000000000000'); ?>
<?= \Form::input('frames[]','0001000000000000000000000000000000000100'); ?>
<?=\Form::submit();?>
<?= \Form::close(); ?>

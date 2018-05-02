<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sweets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sweets form large-9 medium-8 columns content">
    <?= $this->Form->create($sweet) ?>
    <fieldset>
        <legend><?= __('Add Sweet') ?></legend>
        <?php
            echo $this->Form->input('shop name');
            echo $this->Form->input('place');
            echo $this->Form->input( 'image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

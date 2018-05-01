<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sweet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sweet->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sweets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sweets form large-9 medium-8 columns content">
    <?= $this->Form->create($sweet) ?>
    <fieldset>
        <legend><?= __('Edit Sweet') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('body');
            echo $this->Form->input( 'image', array( 'type' => 'file' ));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

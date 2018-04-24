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
                ['action' => 'delete', $sweet->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sweet->ID)]
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
            echo $this->Form->input('NAME');
            echo $this->Form->input('BODY');
            echo $this->Form->input('IMAGE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

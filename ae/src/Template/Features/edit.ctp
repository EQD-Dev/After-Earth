<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feature->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feature->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Features'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="features form large-9 medium-8 columns content">
    <?= $this->Form->create($feature) ?>
    <fieldset>
        <legend><?= __('Edit Feature') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('body');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

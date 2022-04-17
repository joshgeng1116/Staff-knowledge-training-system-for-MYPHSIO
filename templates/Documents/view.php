<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Document'), ['action' => 'edit', $document->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Document'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Documents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Document'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documents view content">
            <h3><?= h($document->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($document->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post File') ?></th>
                    <td><?= h($document->post_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($document->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($document->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($document->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Type') ?></th>
                    <td><?= $this->Number->format($document->user_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Doc Type') ?></th>
                    <td><?= $this->Number->format($document->doc_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subcat Id') ?></th>
                    <td><?= $this->Number->format($document->subcat_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Author') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($document->author)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

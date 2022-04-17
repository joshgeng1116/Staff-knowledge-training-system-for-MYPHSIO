<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leave $leave
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Leave'), ['action' => 'edit', $leave->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Leave'), ['action' => 'delete', $leave->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leave->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Leaves'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Leave'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="leaves view content">
            <h3><?= h($leave->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?php if($leave->category == 0){echo "Annual Leave";} 
                    elseif($leave->category == 1){echo "Personal/Carer's leave";}
                    elseif($leave->category == 2){echo "Compassionate Leave";}
                    elseif($leave->category == 3){echo "Time in Lieu";}
                    elseif($leave->category == 4){echo "Leave without pay";}
                    elseif($leave->category == 5){echo "Paid Community serviceleave";}?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($leave->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?php if($leave->status == 1){echo "Submitted";} 
                    elseif($leave->status == 2){echo "Approved";}
                    elseif($leave->status == 3){echo "Rejected";} ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?php foreach ($users as $users){
                                if($users->id == $leave->user_id){
                                    echo $users->name;
                                }
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($leave->date_start) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($leave->date_end) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Note') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($leave->note)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
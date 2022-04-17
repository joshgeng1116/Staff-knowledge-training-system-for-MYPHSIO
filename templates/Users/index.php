<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
                <h1 class="text-center"><?= __('Staffs') ?></h1>
                <div class="col-md-12 col-md-offset">
                    <div class="fresh-table full-color-azure" style>
                        <div class="container">
                            <h4 class="text-right">
                                <?= $this->Html->link(__('New Users'), ['action' => 'add'], ['class' => 'button float-right']) ?>
                            </h4>

                            <table table class="table table-striped " id="dataTable" width="30%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th  scope="col"><?= ('ID') ?></th>
                                    <th  scope="col"><?= __('Name') ?></th>
                                    <th  scope="col"><?= __('Email') ?></th>
                                    <th  scope="col"><?= ('Role') ?></th>
                                    <th  scope="col"><?=('date_of_birth') ?></th>
                                    <th class="actions"><?= __('Actions')?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr scope = "row">
                                        <td><?= $this->Number->format($user->id) ?></td>
                                        <td><?= h($user->name) ?></td>
                                        <td><?= h($user->email) ?></td>
                                        <?php
                                        $role = '';
                                        if($user->role == 1){
                                            $role='Admin';
                                        }elseif ($user->role == 2){
                                            $role='Staff';
                                        }else{
                                            $role='Manager';
                                        }?>
                                        <td><?=h($role)?></td>
                                        <td><?= h($user->date_of_birth) ?></td>
                                        <td class="actions">
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="paginator">
                            <ul class="pagination">
                                <?= $this->Paginator->first('<< ' . __('first')) ?>
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__('next') . ' >') ?>
                                <?= $this->Paginator->last(__('last') . ' >>') ?>
                            </ul>
                            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

echo $this->Html->css('info_edit.css');
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 * @var \App\Model\Entity\Staff[]|\Cake\Collection\CollectionInterface $staffs
 * @var \Cake\Collection\CollectionInterface|string[] $staffs
 * @var \Cake\Collection\CollectionInterface|string[] $vehicles
 */
use Cake\Mailer\Mailer;
?>
<?php
echo $this->Html->css('info_edit.css');
?>
    <div class="column-responsive column-100 center">
        <div class="jobs view content center">
            <?= $this->Form->create($user,["type"=>"file"]) ?>
            <!-- <fieldset> -->
            <div class="row center">
                <form class="needs-validation" novalidate="">
                    <div class="col-md-6">
                        <h3 class="mb-3 center" style="color: black">Add User</h3>

                        <hr class="sidebar-divider d-none d-md-block">

                        <div class="mb-3">
                            <?php
                            echo $this->Form->control('name', ["required", "class" => "form-control", "label" => "Name: "]);
                            ?>
                        </div>

                        <hr class="sidebar-divider d-none d-md-block">

                        <div class="mb-3">
                            <?php
                            echo $this->Form->control('email', ["required", "class" => "form-control", "label" => "Email: "]);
                            ?>
                        </div>

                        <hr class="sidebar-divider d-none d-md-block">

                        <div class="mb-3">
                            <?php
                            echo $this->Form->control('password', ["required", "class" => "form-control", "label" => "Password: "]);
                            ?>
                        </div>

                        <hr class="sidebar-divider d-none d-md-block">

                        <div class="mb-3">
                            <?php
                            $role_type=[1=>"Admin",2=>"Staff",3=>"Manager"];
                            echo $this->Form->control('role', ['options'=>$role_type, "required", "class" => "form-control", "label" => "Role: "]);
                            ?>
                        </div>

                        <hr class="sidebar-divider d-none d-md-block">

                        <div class="mb-3">
                            <?php
                            echo $this->Form->control('date_of_birth', ["required", "class" => "form-control", "label" => "Date Of Birth: "]);
                            ?>
                        </div>

                        <hr class="sidebar-divider d-none d-md-block">

                        <div class="mb-3">
                            <?php
                            echo $this->Form->control('post_image', ["required", "class" => "form-control", "type"=>"file", "label" => "User image: "]);
                            ?>
                        </div>

                        <hr class="sidebar-divider d-none d-md-block">
                        <div class="center">
                            <?= $this->Form->button(__('Save'), ['class' => 'form-control button', 'style'=>'background:#3CB371;color:white', 'id' => 'submit_btn', 'onclick'=>'Changes have been saved']) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


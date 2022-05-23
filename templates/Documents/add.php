<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<div class="column-responsive column-100 center">
    <div class="jobs view content center">
        <?= $this->Form->create($document,["type"=>"file"]) ?>
        <!-- <fieldset> -->
        <div class="row center">
            <form class="needs-validation" novalidate="">
                <div class="col-md-6">
                    <h3 class="mb-3 center" style="color: black">Add Documents</h3>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('title', ["required", "class" => "form-control", "label" => "Title: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('author', ["required", "class" => "form-control", "label" => "Author: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('year', ["required", "class" => "form-control", "label" => "Year: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        $role_type=[1=>"Admin",2=>"Staff",3=>"Manager"];
                        echo $this->Form->control('user_type', ['options'=>$role_type, "required", "class" => "form-control", "label" => "User Type: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">


                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('subcat_id', ['options'=>$subcategories,"required", "class" => "form-control", "label" => "Category / Subcategory: "]);
                        ?>
                    </div>

                    <hr class="sidebar-divider d-none d-md-block">

                    <div class="mb-3">
                        <?php
                        echo $this->Form->control('post_file', ["required", "class" => "form-control", "type"=>"file", "label" => "Upload File: "]);
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


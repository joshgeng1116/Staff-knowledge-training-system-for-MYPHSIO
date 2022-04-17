<?php
$this->disableAutoLayout();
echo $this->Html->css('login-style.css');
echo $this->Html->script('login-main.js');
?>
<div class="ftco-section">
    <div class="container">
        <?= $this->Flash->render() ?>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class ="wrap">
                    <div class="users form">
                        <?= $this->Flash->render() ?>
                        <?= $this->Form->create() ?>
                        <div class="login-wrap p-4 p-md-5">
                            <?php echo $this->Html->image('my-physio_FBOOK_1.jpg'); ?>
                            <h3>Login</h3>
                            <div class="signin-form">
                                <fieldset>
                                    <div class="form-group mt-3"><?= $this->Form->control('email', ['required' => true, 'class'=>'form-control']) ?></div>
                                    <div class="form-group mt-3"><?= $this->Form->control('password', ['required' => true, 'class'=>'form-control']) ?></div>
                                </fieldset>
                                <?= $this->Form->submit(__('Login'), ['class'=>'form-control btn btn-primary rounded submit px-3']); ?>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

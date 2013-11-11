<section id="content" class="">
    <div class="container">
        <div class="content">
            <div class="main">
                <div id="messages">
                </div>
                <section class="body">
                    <div class="page-header">
                        <h2>Recover Account</h2>
                    </div>
                    <?php
                    $flashMessages = Yii::app()->user->getFlashes();
                    if ($flashMessages) {
                        foreach($flashMessages as $key => $message) {
                            echo '<div class="alert alert-' . $key . '"><button class="close" data-dismiss="alert" type="button">×</button>'. $message .'</div>';
                        }
                    }
                    ?>
                    <?php if($sent){ ?>
                    <p>We have sent an email to the address registered with this account containing further instructions to reset your password.</p>
                    <?php }else{ ?>
                    <p>To recover a lost account, you will need to know your account's username. We will send a confirmation
                        email to this address which allows you to change your password.
                    </p>
                    <form class="form-stacked" action="" method="post">
                        <input type='hidden' name='authenticity_token' value='<?php echo Yii::app()->request->getCsrfToken() ?>' />
                        <div id="div_id_user" class="control-group">
                            <label for="id_user" class="control-label requiredField">
                            用户名<span class="asteriskField">*</span>
                            </label>
                            <div class="controls">
                                <input class="textinput textInput" id="id_user" name="user" type="text" />
                            </div>
                        </div>
                        <fieldset class="form-actions">
                            <button type="submit" class="btn btn-primary">Send Email</button>
                        </fieldset>
                    </form>
                    <?php } ?>
                </section>
            </div>
            <div class="sidebar">
            </div>
        </div>
    </div>
</section>
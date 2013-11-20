<section id="content" class="">
    <div class="container">
        <div class="content">
            <div class="main">
                <div id="messages">
                    <?php
                    $flashMessages = Yii::app()->user->getFlashes();
                    if ($flashMessages) {
                        foreach($flashMessages as $key => $message) {
                            echo '<div class="alert alert-' . $key . '"><button class="close" data-dismiss="alert" type="button">×</button>'. $message .'</div>';
                        }
                    }
                    ?>
                </div>
                <section class="body">
                    <div class="row">
                        <div class="span5">
                            <form class="form-stacked" action="" method="post">
                                <fieldset>
                                    <legend>注册帐号</legend>
                                </fieldset>
                                <input type='hidden' name='authenticity_token' value='<?php echo Yii::app()->request->getCsrfToken() ?>' />
                                <div id="div_id_username" class="control-group">
                                    <label for="id_username" class="control-label requiredField">用户名<span class="asteriskField">*</span>
                                    </label>
                                    <div class="controls">
                                        <input class="textinput textInput" id="id_username" maxlength="30" name="username" type="text" value="<?php echo $model->username ?>" />
                                        <p id="hint_id_username" class="help-block">必填。不多于30个字符。只能用字母、数字和字符 @/./+/-/_ 。</p>
                                    </div>
                                </div>
                                <div id="div_id_email" class="control-group">
                                    <label for="id_email" class="control-label requiredField">Email<span class="asteriskField">*</span> 
                                    </label>
                                    <div class="controls">
                                        <input class="textinput textInput" id="id_email" name="email" type="text" />
                                    </div>
                                </div>
                                <div id="div_id_password" class="control-group">
                                    <label for="id_password" class="control-label requiredField">密码<span class="asteriskField">*</span>
                                    </label>
                                    <div class="controls">
                                        <input class="textinput textInput" id="id_password" name="password" type="password" />
                                    </div>
                                </div>
                                <fieldset class="form-actions">
                                    <div class="pull-right" style="margin-top: 5px;"> <a href="/login/">已注册用户登录</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary">注册</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <div class="sidebar">
            </div>
        </div>
    </div>
</section>
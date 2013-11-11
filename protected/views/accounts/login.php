<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>


<section id="content" class="">
	<div class="container">
		<div class="content">
        	<div class="main">
				<div id="messages"></div>
			    <section class="body">
					<?php
					$flashMessages = Yii::app()->user->getFlashes();
					if ($flashMessages) {
					    foreach($flashMessages as $key => $message) {
					        echo '<div class="alert alert-' . $key . '"><button class="close" data-dismiss="alert" type="button">×</button>'. $message .'</div>';
					    }
					}
					?>
			        <div class="row">
			            <div class="span5">
			                <form class="form-stacked" action="" method="post">
			                    <fieldset>
			                        <legend>Login with your account</legend>
			                    </fieldset>
			                    <input type='hidden' name='csrf' value='inCwlbXR7QLbWax0WOtbtKZHB5nYHYm4' />
								<div id="div_id_username" class="control-group">		
									<label for="id_username" class="control-label requiredField">
										用户名<span class="asteriskField">*</span>
									</label>
							        <div class="controls">
							            <input class="textinput textInput" id="id_username" maxlength="254" name="login[username]" type="text" />	
							        </div>
								</div>
								<div id="div_id_password" class="control-group">
									<label for="id_password" class="control-label requiredField">
										密码<span class="asteriskField">*</span>
									</label>       
						            <div class="controls">
						                    <input class="textinput textInput" id="id_password" name="login[password]" type="password" />
						            </div>
								</div>
			                    <fieldset class="form-actions">
			                        <div class="pull-right" style="margin-top: 5px;">
			                            <a href="/register/">注册帐号</a>
			                        </div>
			                        <button type="submit" class="btn btn-primary">登录</button> <a href="/account/recover/">忘记密码?</a>
			                    </fieldset>
			                </form>
			            </div>
			        </div>
			    </section>
			</div>
        	<div class="sidebar"></div>
    	</div>
	</div>
</section>
<section id="page-header" class="toolbar" style="height:5px;"></section>
<section id="content" class=" with-left-sidebar">
    <div class="container">
        <div class="content">
            <div class="main">
                <section class="body">
                    <div id="messages">
                    </div>
                    <form action="" method="post">
                        <input type='hidden' name='csrfmiddlewaretoken' value='IPzf8y1PBh3jf84FUOnFc2eMaKITGEZb'/>
                        <p>To make changes to your account, you must first enter your current password.</p>
                        <div id="div_id_old_password" class="control-group">
                            <label for="id_old_password" class="control-label requiredField">
                                Current password<span class="asteriskField">*</span>
                            </label>
                            <div class="controls">
                                <input class="textinput textInput" id="id_old_password" name="old_password" type="password"/>
                            </div>
                        </div>
                        <hr>
                        <fieldset class="control-group">
                            <label>Username</label>
                            <div class="controls">
                                summic
                            </div>
                        </fieldset>
                        <div id="div_id_first_name" class="control-group">
                            <label for="id_first_name" class="control-label requiredField">
                                Name<span class="asteriskField">*</span>
                            </label>
                            <div class="controls">
                                <input class="textinput textInput" id="id_first_name" name="first_name" type="text"/>
                            </div>
                        </div>
                        <div id="div_id_email" class="control-group">
                            <label for="id_email" class="control-label requiredField">
                                Email<span class="asteriskField">*</span>
                            </label>
                            <div class="controls">
                                <input class="textinput textInput" id="id_email" name="email" type="text" value="hi@summic.com"/>
                            </div>
                        </div>
                        <fieldset class="control-group">
                            <label>Avatar</label>
                            <div class="controls">
                                <img class="avatar"
                                     src="https://secure.gravatar.com/avatar/3dd58b1eac9406ae08099585c409316b?s=32&d=mm">
                                <a href="http://gravatar.com/">Change your avatar at Gravatar.com</a>
                            </div>
                        </fieldset>
                        <hr>
                        <p>You may also optionally change your password.</p>
                        <div id="div_id_new_password" class="control-group">
                            <label for="id_new_password" class="control-label ">
                                New password
                            </label>
                            <div class="controls">
                                <input class="textinput textInput" id="id_new_password" name="new_password" type="password"/>
                            </div>
                        </div>
                        <fieldset class="form-actions">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </fieldset>
                    </form>
                </section>
            </div>
            <?php echo $this->renderPartial('_sidebar'); ?>
        </div>
    </div>
</section>
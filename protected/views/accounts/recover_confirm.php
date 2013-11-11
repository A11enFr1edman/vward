<section id="page-header" class="toolbar" style="height:5px;">
</section>
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
                    <?php if($error){ ?>
                        <p>We were unable to confirm your identity. Either the link you followed is invalid, or it has expired. You can always <a href="">try again</a>.</p>
                    <?php }else{ ?>
                    <p>You have confirmed your email, and may now update your password below.</p>
                    <form method="POST" action="">
                        <input type='hidden' name='csrfmiddlewaretoken' value='1aGO9M3nTpCL1L8luMdE9ZCf1rO3o1TK' />
                        <div id="div_id_password" class="control-group">
                            <label for="id_password" class="control-label requiredField">
                                Password<span class="asteriskField">*</span>
                            </label>
                            <div class="controls">
                                <input class="textinput textInput" id="id_password" name="password" type="password" />
                            </div>
                        </div>
                        <fieldset class="form-actions">
                            <button type="submit" class="btn btn-primary">Change Password</button>
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
<section id="content" class="">
    <div class="container">
        <div class="content">
            <div class="main">
                <div id="messages">
                </div>
                <section class="body">
                    <div class="page-header">
                        <h2>Create a New Team</h2>
                    </div>
                    <p>Teams in Sentry represent a collection of users and projects. They're the top level component
                        of your organization allowing you to control access and scope of events.</p>

                    <br>
                    <form class="form-stacked" action="" method="post">
                        <input type='hidden' name='csrfmiddlewaretoken' value='rHOTG9fXz5aYJnppUi4LhN22ILvtLxx6'/>
                        <fieldset>
                            <div id="div_id_name" class="control-group">
                                <label for="id_name" class="control-label requiredField">
                                    Team Name<span class="asteriskField">*</span>
                                </label>
                                <div class="controls">
                                    <input class="textinput textInput" id="id_name" maxlength="200" name="name"
                                           placeholder="example.com" type="text"/>
                                </div>
                            </div>
                            <div id="div_id_owner" class="control-group">
                                <label for="id_owner" class="control-label ">
                                    Owner
                                </label>
                                <div class="controls">
                                    <input class="widget" id="id_owner" name="owner" placeholder="username" type="text"
                                           value="summic"/>
                                </div>
                            </div>
                        </fieldset>
                        <div class="actions">
                            <button type="submit" class="btn btn-primary">Create Team</button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="sidebar">
            </div>
        </div>
    </div>
</section>
<section id="page-header" class="toolbar">
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-primary" href="/account/teams/dbc/projects/new/">Create a New Project</a>
        </div>
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="/account/teams/dbc/settings/">Settings</a>
            </li>
            <li>
                <a href="/account/teams/dbc/projects/">Projects</a>
            </li>
            <li>
                <a href="/account/teams/dbc/members/">Members</a>
            </li>
            <li>
                <a href="/account/teams/dbc/groups/">Access Groups</a>
            </li>
        </ul>
    </div>
</section>
<section id="content" class="">
    <div class="container">
        <div class="content">
            <div class="main">
                <div id="messages">
                </div>
                <section class="body">
                    <div class="page-header">
                        <h2>Team Details</h2>
                    </div>
                    <form class="form-stacked" action="" method="post">
                        <input type='hidden' name='csrfmiddlewaretoken' value='rHOTG9fXz5aYJnppUi4LhN22ILvtLxx6' />
                        <fieldset>
                            <div id="div_id_name" class="control-group">
                                <label for="id_name" class="control-label requiredField">
                                    Name<span class="asteriskField">*</span>
                                </label>
                                <div class="controls">
                                    <input class="textinput textInput" id="id_name" maxlength="64" name="name" type="text" value="DBC" />
                                </div>
                            </div>
                            <div id="div_id_slug" class="control-group">
                                <label for="id_slug" class="control-label requiredField">
                                    Slug<span class="asteriskField">*</span>
                                </label>
                                <div class="controls">
                                    <input class="textinput textInput" id="id_slug" maxlength="50" name="slug" type="text" value="dbc" />
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <p>If you wish to transfer ownership of this project, enter the new owner's username:</p>
                            <div id="div_id_owner" class="control-group">
                                <label for="id_owner" class="control-label requiredField">
                                    Owner<span class="asteriskField">*</span>
                                </label>
                                <div class="controls">
                                    <input class="widget" id="id_owner" name="owner" placeholder="username" type="text" value="summic" />
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-actions">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <!-- 如果没有project -->
                            <a href="/account/teams/cdc/remove/" class="btn btn-danger">Remove Team</a>
                            <!-- 否则 -->
                            <div class="pull-right note">You cannot remove this team because it has projects assigned to it</div>
                            <!-- ENDIF -->
                        </fieldset>
                    </form>
                </section>
                <script type="text/javascript">
                    new app.TeamDetailsPage();
                </script>
            </div>
            <div class="sidebar">
            </div>
        </div>
    </div>
</section>
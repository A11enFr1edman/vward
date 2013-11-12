
<section class="" id="content">
    <div class="container">
        <div class="content">
            <div class="main">
                <div id="messages"></div>

                <section class="body">
                    <div class="page-header">
                        <h2>Team Details</h2>
                    </div>

                    <form action="" class="form-stacked" method="post">
                        <input name='csrfmiddlewaretoken' type='hidden' value=
                        'kIoiHqwYNxoq429mjI3UPYpBngojteJh' />

                        <fieldset>
                            <div class="control-group" id="div_id_name">
                                <label class="control-label requiredField" for=
                                "id_name">Name<span class=
                                "asteriskField">*</span></label>

                                <div class="controls">
                                    <input class="textinput textInput" id=
                                    "id_name" maxlength="64" name="name" type=
                                    "text" value="DBC" />
                                </div>
                            </div>

                            <div class="control-group" id="div_id_slug">
                                <label class="control-label requiredField" for=
                                "id_slug">Slug<span class=
                                "asteriskField">*</span></label>

                                <div class="controls">
                                    <input class="textinput textInput" id=
                                    "id_slug" maxlength="50" name="slug" type=
                                    "text" value="dbc" />
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <p>If you wish to transfer ownership of this
                            project, enter the new owner's username:</p>

                            <div class="control-group" id="div_id_owner">
                                <label class="control-label requiredField" for=
                                "id_owner">Owner<span class=
                                "asteriskField">*</span></label>

                                <div class="controls">
                                    <input class="widget" id="id_owner" name=
                                    "owner" placeholder="username" type="text"
                                    value="summic" />
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="form-actions">
                            <button class="btn btn-primary" type="submit">Save
                            Changes</button>

                            <div class="pull-right note">
                                You cannot remove this team because it has
                                projects assigned to it
                            </div>
                        </fieldset>
                    </form>
                </section><script type="text/javascript">
                //<![CDATA[
                new app.TeamDetailsPage();
                //]]>
                </script>
            </div>

            <div class="sidebar"></div>
        </div>
    </div>
</section>
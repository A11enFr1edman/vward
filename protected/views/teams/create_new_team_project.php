<section class="toolbar" id="page-header">
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-primary" href="/account/teams/dbc/projects/new/">Create a New Project</a>
        </div>

        <ul class="nav nav-tabs">
            <li>
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

<section class="" id="content">
    <div class="container">
        <div class="content">
            <div class="main">
                <div id="messages"></div>

                <section class="body">
                    <div class="page-header">
                        <h2>Create a New Project</h2>
                    </div>

                    <p>Projects allow you to scope events to a specific application in your organization. For example, you might have seperate projects for production vs development instances, or separate projects for your web app and mobile app.</p><br />

                    <form action="" method="post">
                        <input name='csrfmiddlewaretoken' type='hidden' value='kIoiHqwYNxoq429mjI3UPYpBngojteJh' />

                        <div class="control-group" id="div_id_name">
                            <label class="control-label requiredField" for="id_name">Project Name<span class="asteriskField">*</span></label>

                            <div class="controls">
                                <input class="textinput textInput" id="id_name" maxlength="200" name="name" placeholder="Production" type="text" />
                            </div>
                        </div>

                        <div class="control-group" id="div_id_platform">
                            <label class="control-label requiredField" for="id_platform">Platform<span class="asteriskField">*</span></label>

                            <div class="controls">
                                <select class="select" data-placeholder="Select a platform" id="id_platform" name="platform">
                                    <option selected="selected" value=""></option>

                                    <option value="csharp">
                                        C#
                                    </option>

                                    <option value="connect">
                                        Connect (Node.js)
                                    </option>

                                    <option value="django">
                                        Django (Python)
                                    </option>

                                    <option value="express">
                                        Express (Node.js)
                                    </option>

                                    <option value="flask">
                                        Flask (Python)
                                    </option>

                                    <option value="ios">
                                        iOS
                                    </option>

                                    <option value="java">
                                        Java
                                    </option>

                                    <option value="java_log4j">
                                        Log4j (Java)
                                    </option>

                                    <option value="java_log4j2">
                                        Log4j 2.x (Java)
                                    </option>

                                    <option value="java_logback">
                                        Logback (Java)
                                    </option>

                                    <option value="java_logging">
                                        java.util.logging
                                    </option>

                                    <option value="javascript">
                                        Javascript
                                    </option>

                                    <option value="node.js">
                                        Node.Js
                                    </option>

                                    <option value="php">
                                        PHP
                                    </option>

                                    <option value="python">
                                        Python
                                    </option>

                                    <option value="r">
                                        R
                                    </option>

                                    <option value="ruby">
                                        Ruby
                                    </option>

                                    <option value="rails3">
                                        Rails 3 (Ruby)
                                    </option>

                                    <option value="rails4">
                                        Rails 4 (Ruby)
                                    </option>

                                    <option value="sidekiq">
                                        Sidekiq
                                    </option>

                                    <option value="sinatra">
                                        Sinatra
                                    </option>

                                    <option value="tornado">
                                        Tornado
                                    </option>

                                    <option value="other">
                                        Other
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group" id="div_id_owner">
                            <label class="control-label" for="id_owner">Owner</label>

                            <div class="controls">
                                <input class="widget" id="id_owner" name="owner" placeholder="username" type="text" value="summic" />
                            </div>
                        </div>

                        <fieldset class="form-actions">
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                        </fieldset>
                    </form>
                </section>
            </div>

            <div class="sidebar"></div>
        </div>
    </div>
</section>
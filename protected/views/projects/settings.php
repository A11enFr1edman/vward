<section id="page-header" class="toolbar">
    <div class="container">
        <div class="dashboard-btn">
            <a href="/sentry/" title="Dashboard">
                <i aria-hidden="true" class="icon-list"></i>
            </a>
        </div>
        <ul class="nav nav-tabs">
            <li>
                <a href="/sentry/sentry/">Stream</a>
            </li>
            <li class="active">
                <a href="/sentry/sentry/settings/">Settings</a>
            </li>
        </ul>
    </div>
</section>

<section id="content" class=" with-left-sidebar">
<div class="container">

<div class="content">




<div class="main">



<div id="messages">

</div>



<section class="body">

<div class="page-header">
    <h2>Project Details</h2>
</div>
<form class="form-stacked" action="" method="post">
<input type='hidden' name='csrfmiddlewaretoken' value='IPzf8y1PBh3jf84FUOnFc2eMaKITGEZb' />




<fieldset>





<div id="div_id_name" class="control-group">

    <label for="id_name" class="control-label requiredField">
        Project Name<span class="asteriskField">*</span>
    </label>







    <div class="controls">

        <input class="textinput textInput" id="id_name" maxlength="200" name="name" placeholder="Production" type="text" value="Sentry" />













    </div>

</div>








<div id="div_id_platform" class="control-group">

    <label for="id_platform" class="control-label requiredField">
        Platform<span class="asteriskField">*</span>
    </label>







    <div class="controls">

        <select class="select" data-placeholder="Select a platform" id="id_platform" name="platform">
            <option value=""></option>
            <option value="csharp">C#</option>
            <option value="connect">Connect (Node.js)</option>
            <option value="django" selected="selected">Django (Python)</option>
            <option value="express">Express (Node.js)</option>
            <option value="flask">Flask (Python)</option>
            <option value="ios">iOS</option>
            <option value="java">Java</option>
            <option value="java_log4j">Log4j (Java)</option>
            <option value="java_log4j2">Log4j 2.x (Java)</option>
            <option value="java_logback">Logback (Java)</option>
            <option value="java_logging">java.util.logging</option>
            <option value="javascript">Javascript</option>
            <option value="node.js">Node.Js</option>
            <option value="php">PHP</option>
            <option value="python">Python</option>
            <option value="r">R</option>
            <option value="ruby">Ruby</option>
            <option value="rails3">Rails 3 (Ruby)</option>
            <option value="rails4">Rails 4 (Ruby)</option>
            <option value="sidekiq">Sidekiq</option>
            <option value="sinatra">Sinatra</option>
            <option value="tornado">Tornado</option>
            <option value="other">Other</option>
        </select>













    </div>

</div>










<div id="div_id_team" class="control-group">

    <label for="id_team" class="control-label ">
        Team
    </label>







    <div class="controls">

        <select class="select" id="id_team" name="team">
            <option value="4">CDC (cdc)</option>
            <option value="2">DBC (dbc)</option>
            <option value="1" selected="selected">Sentry (sentry)</option>
        </select>













    </div>

</div>








<div id="div_id_owner" class="control-group">

    <label for="id_owner" class="control-label ">
        Owner
    </label>







    <div class="controls">

        <input class="widget" id="id_owner" name="owner" placeholder="username" type="text" value="summic" />













    </div>

</div>








<div id="div_id_slug" class="control-group">

    <label for="id_slug" class="control-label requiredField">
        Slug<span class="asteriskField">*</span>
    </label>







    <div class="controls">

        <input class="textinput textInput" id="id_slug" maxlength="50" name="slug" type="text" value="sentry" />













    </div>

</div>








</fieldset>
<fieldset id="events">
    <div><legend>Event Settings</legend></div>



    <div id="div_id_resolve_age" class="control-group">

        <label for="id_resolve_age" class="control-label ">
            Resolve age
        </label>







        <div class="controls">

            <input class="rangeinput" id="id_resolve_age" max="168" min="0" name="resolve_age" step="1" type="range" value="0" />










            <p id="hint_id_resolve_age" class="help-block">Treat an event as resolved if it hasn't been seen for this amount of time.</p>






        </div>

    </div>






    <div id="div_id_public" class="control-group">







        <div class="controls">

            <label for="id_public" class="checkbox ">
                <input checked="checked" class="checkboxinput" id="id_public" name="public" type="checkbox" />
                Public










                <p id="hint_id_public" class="help-block">Imply public access to any event for this project.</p>





            </label>

        </div>

    </div>



</fieldset>
<fieldset id="client-security">
    <div><legend>Client Security</legend></div>

    <p>Configure origin URLs which Sentry should accept events from. This is used for communication with clients like <a href="https://github.com/getsentry/raven-js">raven-js</a>.
    <p>This will restrict requests based on the <code>Origin</code> and <code>Referer</code> headers.</p>



    <div id="div_id_origins" class="control-group">

        <label for="id_origins" class="control-label ">
            Allowed Domains
        </label>







        <div class="controls">

            <textarea class="span8 textarea" cols="40" id="id_origins" name="origins" placeholder="e.g. example.com or https://example.com" rows="10">
            </textarea>










            <p id="hint_id_origins" class="help-block">Separate multiple entries with a newline.</p>






        </div>

    </div>



</fieldset>
<div class="form-actions">
    <button type="submit" class="btn btn-primary">Save Changes</button>

    <p class="pull-right">This project cannot be removed. It is used internally by the Sentry server.</p>

</div>
</form>

<script type="text/javascript">
    new app.ProjectDetailsPage();
</script>

</section>

</div>

<div class="sidebar">

    <ul class="nav nav-list">
        <li class="nav-header">Details</li>
        <li class="active">
            <a href="/sentry/sentry/settings/">Settings</a>
        </li>
        <li>
            <a href="/sentry/sentry/notifications/">Notifications</a>
        </li>
        <li>
            <a href="/sentry/sentry/quotas/">Rate Limits</a>
        </li>
        <li>
            <a href="/sentry/sentry/tags/">Tags</a>
        </li>
        <li>
            <a href="/sentry/sentry/keys/">API Keys</a>
        </li>
    </ul>
    <ul class="nav nav-list">
        <li class="nav-header">Client Configuration</li>
        <li>
            <a href="/sentry/sentry/docs/">All Platforms</a>
        </li>
        <li>
            <a href="/sentry/sentry/docs/javascript/">JavaScript</a>
        </li>
        <li>
            <a href="/sentry/sentry/docs/python/">Python</a>
        </li>
        <li>
            <a href="/sentry/sentry/docs/php/">PHP</a>
        </li>
        <li>
            <a href="/sentry/sentry/docs/ruby/">Ruby</a>
        </li>
        <li>
            <a href="/sentry/sentry/docs/node.js/">Node.js</a>
        </li>
        <li>
            <a href="/sentry/sentry/docs/java/">Java</a>
        </li>
    </ul>

    <ul class="nav nav-list">
        <li class="nav-header">Integrations</li>
        <li class="">
            <a href="/sentry/sentry/plugins/">Manage Integrations (5)</a>
        </li>

    </ul>


</div>




</div>
</div>
</section>
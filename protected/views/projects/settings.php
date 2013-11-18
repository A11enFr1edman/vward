<?php $this->renderPartial('_page_header',array('team_slug'=>$this->team_slug, 'project_slug'=>$this->project_id)); ?>
<section id="content" class="with-left-sidebar">
<div class="container">
<div class="content">
<div class="main">
<div id="messages"></div>
<section class="body">
<div class="page-header">
    <h2>项目细节</h2>
</div>
<form class="form-stacked" action="" method="post">
<input type='hidden' name='csrfmiddlewaretoken' value='IPzf8y1PBh3jf84FUOnFc2eMaKITGEZb'/>
<fieldset>
<div id="div_id_name" class="control-group">

    <label for="id_name" class="control-label requiredField">
        项目名称<span class="asteriskField">*</span>
    </label>
    <div class="controls">
        <input class="textinput textInput" id="id_name" maxlength="200" name="name" placeholder="Production" type="text"
               value="Sentry"/>
    </div>
</div>

<div id="div_id_platform" class="control-group">
    <label for="id_platform" class="control-label requiredField">
        平台<span class="asteriskField">*</span>
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
        所有者
    </label>
    <div class="controls">
        <input class="widget" id="id_owner" name="owner" placeholder="username" type="text" value="summic"/>
    </div>

</div>


<div id="div_id_slug" class="control-group">

    <label for="id_slug" class="control-label requiredField">
        Slug<span class="asteriskField">*</span>
    </label>
    <div class="controls">
        <input class="textinput textInput" id="id_slug" maxlength="50" name="slug" type="text" value="sentry"/>
    </div>

</div>


</fieldset>
<fieldset id="events">
    <div>
        <legend>事件设置</legend>
    </div>
    <div id="div_id_resolve_age" class="control-group">
        <label for="id_resolve_age" class="control-label ">
            解决期限
        </label>
        <div class="controls">
            <input class="rangeinput" id="id_resolve_age" max="168" min="0" name="resolve_age" step="1" type="range"
                   value="168"/>
            <p id="hint_id_resolve_age" class="help-block">如果设定时间内不再出现，自动将事件设为已解决.</p>
        </div>
    </div>

    <div id="div_id_public" class="control-group">
        <div class="controls">
            <label for="id_public" class="checkbox ">
                <input checked="checked" class="checkboxinput" id="id_public" name="public" type="checkbox"/>
                Public
                <p id="hint_id_public" class="help-block">Imply public access to any event for this project.</p>
            </label>
        </div>
    </div>


</fieldset>
<fieldset id="client-security">
    <div>
        <legend>客户端安全</legend>
    </div>
    <p>Configure origin URLs which Sentry should accept events from. This is used for communication with clients like <a
            href="https://github.com/getsentry/raven-js">raven-js</a>.

    <p>This will restrict requests based on the <code>Origin</code> and <code>Referer</code> headers.</p>
    <div id="div_id_origins" class="control-group">
        <label for="id_origins" class="control-label ">
            域名白名单
        </label>
        <div class="controls">
            <textarea class="span8 textarea" cols="40" id="id_origins" name="origins" placeholder="e.g. example.com or https://example.com" rows="10"></textarea>
            <p id="hint_id_origins" class="help-block">请用换行分隔多条记录</p>
        </div>
    </div>
</fieldset>
<div class="form-actions">
    <button type="submit" class="btn btn-primary">保存更改</button>
    <p class="pull-right">这个项目不能被删除。它是由服务器本身使用。</p>
</div>
</form>

<script type="text/javascript">
    new app.ProjectDetailsPage();
</script>

</section>

</div>
<?php $this->renderPartial('_sidebar',array('team_slug'=>$this->team_slug, 'project_slug'=>$this->project_id)); ?>
</div>
</div>
</section>
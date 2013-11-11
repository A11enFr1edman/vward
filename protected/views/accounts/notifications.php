<section id="page-header" class="toolbar" style="height:5px;"></section>

<section id="content" class=" with-left-sidebar">
<div class="container">

<div class="content">




<div class="main">




<section class="body">


<div id="messages">

</div>

<style type="text/css">
    table label,
    table input[type=checkbox] {
        margin: 0;
    }
    table caption {
        font-weight: normal;
        text-align: left;
        font-size: 16px;
        padding-bottom: 10px;
    }
</style>
<script>
    $(function(){
        $('form a[data-toggle=change-target-value]').click(function(){
            var $this = $(this);
            var $target = $('#' + $this.data('target'));
            var result = window.prompt('Enter an email address', $target.val());
            $target.val(result || '');
            if (result !== null) {
                $this.text(result);
            } else {
                $this.html('<em>default</em>');
            }
        })
    });
</script>

<form action="" method="post">
<input type='hidden' name='csrfmiddlewaretoken' value='IPzf8y1PBh3jf84FUOnFc2eMaKITGEZb' />

<p>Notifications are generally sent when a new event is
    seen, an already resolved event has changed to unresolved, or a
    system-wide spike in events is detected.</p>


<fieldset>
    <div><legend>General</legend></div>









    <div id="div_id_alert_email" class="control-group">

        <label for="id_alert_email" class="control-label ">
            Alert email
        </label>







        <div class="controls">

            <input class="textinput textInput" id="id_alert_email" name="alert_email" type="text" value="hi@summic.com" />










            <p id="hint_id_alert_email" class="help-block">Designate an alternative email address to send email notifications to.</p>






        </div>

    </div>






    <div id="div_id_subscribe_by_default" class="control-group">

        <label for="id_subscribe_by_default" class="control-label ">
            Subscribe by default
        </label>







        <div class="controls">

            <select class="input-xxlarge select" id="id_subscribe_by_default" name="subscribe_by_default">
                <option value="1" selected="selected">Automatically subscribe to notifications for new projects</option>
                <option value="0">Do not subscribe to notifications for new projects</option>
            </select>













        </div>

    </div>






    <div id="div_id_subscribe_notes" class="control-group">

        <label for="id_subscribe_notes" class="control-label ">
            Subscribe notes
        </label>







        <div class="controls">

            <select class="input-xxlarge select" id="id_subscribe_notes" name="subscribe_notes">
                <option value="1" selected="selected">Get notified about new notes on events I&#39;ve seen</option>
                <option value="0">Do not subscribe to note notifications</option>
            </select>













        </div>

    </div>




</fieldset>



<fieldset>
    <div><legend>Mail</legend></div>
    <p>Choose which projects you wish to receive email notifications for, as well as an alternative email address to send to.</p>
    <p><small>Note: You will never receive notifications if a project has them disabled (via the Project settings)</small></p>














    <table class="table table-bordered table-striped">
        <caption>DBC</caption>

        <thead>
        <tr>
            <th style="width:5px"><input type="checkbox" onclick="$('tbody input[type=checkbox]', $(this).parents('table')).attr('checked', this.checked)"></th>
            <th>Project Name</th>
            <th style="width:100px;overflow:hidden;text-align:right">
                Email Address</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td><input checked="checked" id="id_project-3-alert" name="project-3-alert" type="checkbox" /></td>
            <td><label for="id_project-3-alert">VisionWard</label></td>
            <td style="text-align:right">
                <a href="javascript:void(0)" data-target="id_project-3-email" data-toggle="change-target-value"><em>default</em></a>
                <input id="id_project-3-email" name="project-3-email" type="hidden" />
            </td>
        </tr>


        <tr>
            <td><input checked="checked" id="id_project-2-alert" name="project-2-alert" type="checkbox" /></td>
            <td><label for="id_project-2-alert">鹦鹉螺</label></td>
            <td style="text-align:right">
                <a href="javascript:void(0)" data-target="id_project-2-email" data-toggle="change-target-value"><em>default</em></a>
                <input id="id_project-2-email" name="project-2-email" type="hidden" />
            </td>
        </tr>



    </table>

    <table class="table table-bordered table-striped">
        <caption>Sentry</caption>

        <thead>
        <tr>
            <th style="width:5px"><input type="checkbox" onclick="$('tbody input[type=checkbox]', $(this).parents('table')).attr('checked', this.checked)"></th>
            <th>Project Name</th>
            <th style="width:100px;overflow:hidden;text-align:right">
                Email Address</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td><input checked="checked" id="id_project-1-alert" name="project-1-alert" type="checkbox" /></td>
            <td><label for="id_project-1-alert">Sentry</label></td>
            <td style="text-align:right">
                <a href="javascript:void(0)" data-target="id_project-1-email" data-toggle="change-target-value"><em>default</em></a>
                <input id="id_project-1-email" name="project-1-email" type="hidden" />
            </td>
        </tr>

        </tbody></table>
</fieldset>




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
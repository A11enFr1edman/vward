<div class="sidebar">
    <ul class="nav nav-list">
        <li class="nav-header">Settings</li>
        <li<?php if(Yii::app()->controller->action->id == 'settings'){echo ' class="active"';}?>><a href="/account/settings/">Account</a></li>
        <li<?php if(Yii::app()->controller->action->id == 'appearance_settings'){echo ' class="active"';}?>><a href="/account/settings/appearance/">Appearance</a></li>
        <li<?php if(Yii::app()->controller->action->id == 'notification_settings'){echo ' class="active"';}?>><a href="/account/settings/notifications/">Notifications</a></li>
        <li<?php if(Yii::app()->controller->action->id == 'list_identities'){echo ' class="active"';}?>><a href="/account/settings/identities/">Identities</a></li>
    </ul>
</div>
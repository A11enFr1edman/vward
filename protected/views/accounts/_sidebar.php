<div class="sidebar">
    <ul class="nav nav-list">
        <li class="nav-header">Settings</li>
        <li<?php if(Yii::app()->controller->action->id == 'setting'){echo ' class="active"';}?>><a href="/account/settings/">Account</a></li>
        <li<?php if(Yii::app()->controller->action->id == 'appearance'){echo ' class="active"';}?>><a href="/account/settings/appearance/">Appearance</a></li>
        <li<?php if(Yii::app()->controller->action->id == 'notifications'){echo ' class="active"';}?>><a href="/account/settings/notifications/">Notifications</a></li>
        <li<?php if(Yii::app()->controller->action->id == 'identities'){echo ' class="active"';}?>><a href="/account/settings/identities/">Identities</a></li>
    </ul>
</div>
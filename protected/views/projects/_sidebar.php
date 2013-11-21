<div class="sidebar">
    <ul class="nav nav-list">
        <li class="nav-header">详细信息</li>
        <li<?php if($this->action->id=='settings'){echo ' class="active"';} ?>>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/settings/">设置</a>
        </li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/notifications/">提醒</a>
        </li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/quotas/">限制</a>
        </li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/tags/">标签</a>
        </li>
        <li<?php if($this->action->id=='keys'){echo ' class="active"';} ?>>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/keys/">API密钥</a>
        </li>
    </ul>
    <ul class="nav nav-list">
        <li class="nav-header">客户端配置</li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/docs/">所有平台</a>
        </li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/docs/javascript/">JavaScript</a>
        </li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/docs/python/">Python</a>
        </li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/docs/php/">PHP</a>
        </li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/docs/ruby/">Ruby</a>
        </li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/docs/node.js/">Node.js</a>
        </li>
        <li>
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/docs/java/">Java</a>
        </li>
    </ul>
    <ul class="nav nav-list">
        <li class="nav-header">第三方集成</li>
        <li class="">
            <a href="/<?php echo $team_slug;?>/<?php echo $project_slug;?>/plugins/">管理集成 (5)</a>
        </li>
    </ul>
</div>
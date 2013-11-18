<section id="page-header" class="toolbar">
    <div class="container">
        <div class="dashboard-btn">
            <a href="/<?php echo $this->team_slug;?>/" title="仪表盘">
                <i aria-hidden="true" class="icon-list"></i>
            </a>
        </div>
        <ul class="nav nav-tabs">
            <li>
                <a href="/<?php echo $this->team_slug;?>/<?php echo $this->project_id;?>/">Stream</a>
            </li>
            <li class="active">
                <a href="/<?php echo $this->team_slug;?>/<?php echo $this->project_id;?>/settings/">设置</a>
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
                        <a href="/<?php echo $this->team_slug;?>/<?php echo $this->project_id;?>/keys/new/" class="btn pull-right btn-primary">生成新的密钥</a>
                        <h2>
                            API 密钥管理
                        </h2>
                    </div>
                    <table class="table table-bordered table-striped">
                        <colgroup>
                            <col/>
                            <col width="100px"/>
                            <col width="100px"/>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>API 密钥</th>
                            <th style="text-align:center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($keys as $key){?>
                        <tr>
                            <td>
                                <strong><?php echo $key->public_key;?></strong>  &mdash; <?php echo $key->user->username;?><br>
                                <code class="clippy"><?php echo $protocol; ?>://<?php echo $key->public_key;?>:<?php echo $key->secret_key;?>@<?php echo Yii::app()->request->serverName;?>/<?php echo $key->project_id;?></code><br>

                            </td>
                            <td style="text-align:center; vertical-align:middle;">
                                <form method="POST" action="/<?php echo $this->team_slug;?>/<?php echo $this->project_id;?>/keys/<?php echo $key->project_id;?>/remove/" style="display:inline">
                                    <input type='hidden' name='csrfmiddlewaretoken' value='TK60Ib4yWismXP5KceUmKeICdKpOnmRh' />
                                    <input type="submit" class="btn btn-danger btn-small" value="删除">
                                </form>

                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </section>

            </div>

            <div class="sidebar">
                <ul class="nav nav-list">
                    <li class="nav-header">详细信息</li>
                    <li>
                        <a href="/allan/boss/settings/">设置</a>
                    </li>
                    <li>
                        <a href="/allan/boss/notifications/">Notifications</a>
                    </li>
                    <li>
                        <a href="/allan/boss/quotas/">Rate Limits</a>
                    </li>
                    <li>
                        <a href="/allan/boss/tags/">Tags</a>
                    </li>
                    <li class="active">
                        <a href="/allan/boss/keys/">API Keys</a>
                    </li>
                </ul>
                <ul class="nav nav-list">
                    <li class="nav-header">Client Configuration</li>
                    <li>
                        <a href="/allan/boss/docs/">All Platforms</a>
                    </li>
                    <li>
                        <a href="/allan/boss/docs/javascript/">JavaScript</a>
                    </li>
                    <li>
                        <a href="/allan/boss/docs/python/">Python</a>
                    </li>
                    <li>
                        <a href="/allan/boss/docs/php/">PHP</a>
                    </li>
                    <li>
                        <a href="/allan/boss/docs/ruby/">Ruby</a>
                    </li>
                    <li>
                        <a href="/allan/boss/docs/node.js/">Node.js</a>
                    </li>
                    <li>
                        <a href="/<?php echo $this->team_slug;?>/boss/docs/java/">Java</a>
                    </li>
                </ul>
                <ul class="nav nav-list">
                    <li class="nav-header">Integrations</li>
                    <li class="">
                        <a href="/<?php echo $this->team_slug;?>/boss/plugins/">Manage Integrations (21)</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
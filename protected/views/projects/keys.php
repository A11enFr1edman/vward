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
                                <strong><?php echo $key->public_key;?></strong><?php if(isset($key->user->username)){echo'  &mdash; '.$key->user->username;}?><br>
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
            <?php $this->renderPartial('_sidebar',array('team_slug'=>$this->team_slug, 'project_slug'=>$this->project_id)); ?>
        </div>
    </div>
</section>
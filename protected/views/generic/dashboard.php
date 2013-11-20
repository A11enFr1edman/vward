<section id="page-header" class="toolbar" style="height:5px;">
</section>
<section id="content" class="team-index ">
    <div class="container">
        <div class="content">
			<div class="main">
				<div id="messages"></div>                           
			    <section class="body">
			        <div class="pull-right">
			            <a href="/teams/new/" class="btn btn-primary">注册新团队</a>
			        </div>
			        <h2>我的项目</h2>
			        <ul class="team-list">
                        <?php foreach($teamMember as $teamMember){ ?>
			            <li>
			                <div class="chart" data-api-url="/api/<?php echo $teamMember->team->slug?>/chart/">
			                    <div class="sparkline">
			                        <noscript>Get yourself some JavaScripts dood</noscript>
			                        <span class="loading">Loading historical data...</span>
			                    </div>
			                </div>
			                <h2><a href="/<?php echo $teamMember->team->slug?>/"><?php echo $teamMember->team->name?></a></h2>
			                <ul>
                                <?php foreach($teamMember->team->projects as $project){  ?>
			                    <li><a href="/<?php echo $teamMember->team->slug?>/<?php echo $project->slug ?>/"><?php echo $project->name ?></a></li>
                                <?php } ?>
			                </ul>
			            </li>
                        <?php } ?>
			        </ul>
			    </section>
			</div>
			<div class="sidebar"></div>
			<script type="text/javascript">
			$(function(){
			    new app.SelectTeamPage();
			})
			</script>
		</div>
	</div>
</section>
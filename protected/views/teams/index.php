<section id="content" class="team-index ">
    <div class="container">
        <div class="content">
			<div class="main">
				<div id="messages"></div>                           
			    <section class="body">
			        <div class="pull-right">
			            <a href="/account/teams/new/" class="btn btn-primary">Create a New Team</a>
			        </div>
			        <h2>Your teams</h2>
			        <ul class="team-list">
			            <li>
			                <div class="chart" data-api-url="/api/dbc/chart/">
			                    <div class="sparkline">
			                        <noscript>Get yourself some JavaScripts dood</noscript>
			                        <span class="loading">Loading historical data...</span>
			                    </div>
			                </div>
			                <h2><a href="/dbc/">DBC</a></h2>
			                <ul>
			                    <li><a href="/dbc/visionward/">VisionWard</a></li>
								<li><a href="/dbc/dbc/">鹦鹉螺</a></li>
			                </ul>
			            </li>
			            <li>
			                <div class="chart" data-api-url="/api/sentry/chart/">
			                    <div class="sparkline">
			                        <noscript>Get yourself some JavaScripts dood</noscript>
			                        <span class="loading">Loading historical data...</span>
			                    </div>
			                </div>
			                <h2><a href="/sentry/">Sentry</a></h2>
			                <ul>
			                    <li><a href="/sentry/sentry/">Sentry</a></li>
			                    <li><a href="/sentry/sentry/">Sentry</a></li>
			                </ul>
			            </li>
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
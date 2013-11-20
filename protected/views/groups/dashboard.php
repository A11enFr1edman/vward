<section id="page-header" class="toolbar" style="height:5px;"></section>
<section id="content" class="">
    <div class="container">
        <div class="content">
            <div class="main">
                <div id="messages">
                </div>
                <section class="body dashboard">
                    <div id="chart" class="chart" data-api-url="/api/sentry/chart/">
                        <div class="sparkline">
                            <noscript>Get yourself some JavaScripts dood</noscript>
                            <span class="loading">Loading historical data...</span>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="page-header clearfix">
                                <h3 class="pull-left">趋势</h3>
                                <ul class="nav nav-pills nav-small pull-right">
                                    <li><a href="#top_events" data-toggle="ajtab" data-uri="/api/sentry/groups/trends/?minutes=15&amp;limit=5">15 分钟</a></li>
                                    <li><a href="#top_events" data-toggle="ajtab" data-uri="/api/sentry/groups/trends/?minutes=60&amp;limit=5">60 分钟</a></li>
                                    <li class="active"><a href="#top_events" data-toggle="ajtab" data-uri="/api/sentry/groups/trends/?minutes=1440&amp;limit=5">24 小时</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="top_events"><p>Loading ...</p></div>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="page-header clearfix">
                                <h3 class="pull-left">新事件</h3>
                                <ul class="nav nav-pills nav-small pull-right">
                                    <li><a href="#new_events" data-toggle="ajtab" data-uri="/api/sentry/groups/newest/?minutes=15&amp;limit=5">15 分钟</a></li>
                                    <li><a href="#new_events" data-toggle="ajtab" data-uri="/api/sentry/groups/newest/?minutes=60&amp;limit=5">60 分钟</a></li>
                                    <li class="active"><a href="#new_events" data-toggle="ajtab" data-uri="/api/sentry/groups/newest/?minutes=1440&amp;limit=5">24 小时</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="new_events"><p>Loading ...</p></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <script type="text/javascript">
                $(function(){
                    new app.DashboardPage({
                        realtime: false,
                        stream: false
                    });
                })
            </script>
        </div>
    </div>
</section>
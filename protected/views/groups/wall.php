<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="robots" content="NONE,NOARCHIVE">
    <link href="/_static/sentry/images/favicon.ico" rel="shortcut icon" type="image/png"/>
    <link href="/_static/sentry/styles/wall.min.css" rel="stylesheet" type="text/css" />
    <title>Sentry</title>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/_static/sentry/scripts/lib/html5shiv.js"></script>
    <![endif]-->
    <script src="/static/sentry/scripts/lib.min.js" type="text/javascript" ></script>
    <script src="/_static/sentry/scripts/bootstrap.min.js" type="text/javascript" ></script>
    <script src="/_static/sentry/scripts/global.min.js" type="text/javascript" ></script>
    <script src="/_static/sentry/scripts/legacy.min.js" type="text/javascript" ></script>
    <script type="text/javascript">
        moment.lang('zh-cn');
        app.config.popupCss = '/_static/sentry/styles/popup.css';
        app.config.mediaUrl = '/_static/sentry/';
        app.config.urlPrefix = "https://app.getsentry.com";
        app.config.projectId = null;
        app.config.teamId = "allan";
    </script>
</head>

<body class="">
<div class="outer-wrapper">

    <div class="container-fluid" id="stats" data-uri="/api/allan/stats/?minutes=1440">
        <div class="row-fluid">
            <div class="span4" data-stat="events">
                <big><span>???</span></big>
                <label><strong>Events</strong> in the last 24 hours</label>
            </div>
            <div class="span4" data-stat="resolved">
                <big><span>???</span></big>
                <label><strong>Resolved</strong> in the last 24 hours</label>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="chart">
        <div class="row-fluid">
            <div class="chart" data-api-url="/api/allan/chart/">
                <span class="loading">Loading historical data...</span>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="events">
        <div class="row-fluid">
            <div class="span6">
                <ul class="nav nav-labels">
                    <li class="active"><a href="#trending" data-toggle="ajtab" data-uri="/api/allan/groups/trends/?minutes=1440&amp;limit=5">Trending</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="trending"><p>Loading ...</p></div>
                </div>
            </div>
            <div class="span6">
                <ul class="nav nav-labels">
                    <li class="active"><a href="#new" data-toggle="ajtab" data-uri="/api/allan/groups/newest/?minutes=1440&amp;limit=5">New</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="new"><p>Loading ...</p></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            new app.WallPage();
        });
    </script>


    <script type="text/javascript">
        $(function(){
            $('.clippy').clippy({
                clippy_path: '/_static/sentry/clippy.swf',
                keep_text: true
            });
            $('input[data-toggle="datepicker"]').datepicker();
            $('.tip').tooltip({
                html: true,
                container: 'body'
            });
            $('.trigger-popover').popover({
                html: true,
                container: 'body'
            });
            $('.nav-tabs .active a').tab('show')
            $('.project-selector').on('change', function(e){
                var $el = $(e.target).get(0);
                var $opt = $($el.options[$el.selectedIndex]);
                window.location.href = $opt.attr('data-url');
                return false;
            });
        });
    </script>
</body>
</html>

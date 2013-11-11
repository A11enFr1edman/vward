<section id="page-header" class="toolbar">
    <div class="container">
        <div class="pull-right">
            <form action="/sentry/sentry/search/" id="search">
                <input type="text" name="q" value="" placeholder="Search query or event ID" />
            </form>
        </div>
        <div class="dashboard-btn">
            <a href="/sentry/" title="Dashboard">
                <i aria-hidden="true" class="icon-list"></i>
            </a>
        </div>
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="/sentry/sentry/">Stream</a>
            </li>
            <li>
                <a href="/sentry/sentry/settings/" title="Project Settings">
                    Settings
                </a>
            </li>
        </ul>
    </div>
</section>

<section id="content" class="with-sidebar">
<div class="container">

<div class="content">




<div class="main">



    <div id="messages">

    </div>







    <div class="btn-toolbar">
        <div class="btn-group">
            <a class="btn" href="javascript:void(0)" id="sentry-resolve-feed" onclick="Sentry.stream.clear('sentry');"><i aria-hidden="true" class="icon-checkmark"></i> Resolve Feed</a>
        </div>
        <div class="btn-group">
            <a class="btn realtime-play" data-action="pause" data-pause-label="Pause Updates" data-play-label="Enable Updates" href="javascript:void(0)">
                Pause Updates
            </a>
        </div>
        <div class="btn-group">
            <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">Sort by: Last Seen <i aria-hidden="true" class="icon-arrow-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="?&amp;sort=priority">Priority</a></li>
                <li class="active"><a href="?&amp;sort=date">Last Seen</a></li>
                <li><a href="?&amp;sort=new">First Seen</a></li>
                <li><a href="?&amp;sort=freq">Frequency</a></li>
                <li class="divider"></li>
                <li><a href="?&amp;sort=tottime">Total Time Spent</a></li>
                <li><a href="?&amp;sort=avgtime">Average Time Spent</a></li>

            </ul>
        </div>
        <div class="btn-group">
            <a href="#" class="btn dropdown-toggle" onclick="$('#daterange').toggle(); return false;">


                Since: Nov 6th


                <i aria-hidden="true" class="icon-arrow-down"></i></a>
        </div>
        <div class="btn-group pull-right">
            <a class="btn prev disabled" href="?&amp;p=None"><span>Previous</span></a>
            <a class="btn next disabled" href="?&amp;p=None"><span>Next</span></a>
        </div>
    </div>

    <div class="datepicker-box" id="daterange">
        <form method="GET">

            <div class="input">
                <div class="inline-inputs">
                    <input data-toggle="datepicker" data-date-format="yyyy-mm-dd"name="df" class="date" type="text" value="2013-11-06" />
                    <input class="time" type="text" name="tf" value="11:07 AM" />
                    to
                    <input data-toggle="datepicker" data-date-format="yyyy-mm-dd" name="dt" class="date" type="text" value="" />
                    <input class="time" type="text" name="tt" value="" />
                </div>
                <div class="help-block">All events are represented in UTC time.</div>
            </div>
            <div class="submit">
                <div class="pull-right">
                    <input type="button" class="btn btn-small" value="Clear" onclick="$('#daterange input[type=text]').val(''); this.form.submit();">
                    <input type="submit" class="btn btn-primary btn-small" value="Apply">
                </div>
                <div class="radio-inputs">
                    <label class="radio">
                        <input type="radio" name="date_type" value="last_seen" checked> Last Seen
                    </label>
                    <label class="radio">
                        <input type="radio" name="date_type" value="first_seen" > First Seen
                    </label>
                </div>
            </div>
        </form>
    </div>




    <div id="event_list"></div>

    <div class="btn-toolbar" style="border-bottom: none">
        <div class="btn-group pull-right">
            <a class="btn prev disabled" href="?&amp;p=None"><span>Previous</span></a>
            <a class="btn next disabled" href="?&amp;p=None"><span>Next</span></a>
        </div>
    </div>

    <script>
        $(function(){
            new app.StreamPage({
                groups: [{"version": 1384168032.47605, "timeSpent": null, "lastSeen": "2013-11-11T17:39:21.121322+08:00", "historicalData": [], "isResolved": false, "levelName": "error", "title": "django.http.request in get_host", "id": "1", "score": 1384162761.1210093, "logger": "root", "canResolve": true, "annotations": [{"count": 30, "label": "users"}], "tags": [], "isPublic": false, "hasSeen": true, "firstSeen": "2013-10-29T00:43:05.271389+08:00", "count": "334", "permalink": "/sentry/sentry/group/1/", "level": 40, "message": "SuspiciousOperation: Invalid HTTP_HOST header (you may need to set ALLOWED_HOSTS): www.baidu.com", "versions": [], "isBookmarked": false, "project": {"name": "Sentry", "slug": "sentry"}}],
                canStream: true,
                realtime: true
            });
        });
    </script>


</div>

<div class="sidebar">

    <div id="chart" class="chart" data-api-url="/api/sentry/chart/" data-days="1">
        <div class="sparkline">
            <noscript>Get yourself some JavaScripts dood</noscript>
            <span class="loading">Loading historical data...</span>
        </div>
    </div>

    <form method="get">


        <h6>Bookmarks</h6>
        <div class="filter">
            <ul class="nav nav-tabs nav-stacked filter-list">
                <li class="active"><a href="?">All Events</a></li>
                <li><a href="?&amp;bookmarks=1">Only Bookmarks</a></li>
            </ul>
        </div>




        <h6>Status</h6>

        <div class="filter">
            <select name="status" class="filter-list" rel="status" data-allowClear="true" data-placeholder="Select a status">
                <option></option>
                <option selected="selected" value="0">Unresolved</option>
                <option value="1">Resolved</option>
                <option value="2">Muted</option>
            </select>
        </div>


        <h6>Browser</h6>

        <div class="filter">
            <select name="browser" class="filter-list" rel="browser" data-allowClear="true" data-placeholder="Select a browser">
                <option></option>
                <option value="Chrome 30.0.1599.101">Chrome 30.0.1599.101</option>
                <option value="Firefox 1.5.0.3">Firefox 1.5.0.3</option>
                <option value="Firefox 24.0">Firefox 24.0</option>
                <option value="Firefox 25.0">Firefox 25.0</option>
                <option value="Microsoft Internet Explorer 4.01">Microsoft Internet Explorer 4.01</option>
                <option value="Microsoft Internet Explorer 6.0">Microsoft Internet Explorer 6.0</option>
                <option value="Microsoft Internet Explorer 7.0">Microsoft Internet Explorer 7.0</option>
                <option value="Microsoft Internet Explorer 9.0">Microsoft Internet Explorer 9.0</option>
                <option value="Safari 7.0">Safari 7.0</option>
            </select>
        </div>


        <h6>Level</h6>

        <div class="filter">
            <select name="level" class="filter-list" rel="level" data-allowClear="true" data-placeholder="Select a level">
                <option></option>
                <option value="error">error</option>
            </select>
        </div>


        <h6>Logger</h6>

        <div class="filter">
            <select name="logger" class="filter-list" rel="logger" data-allowClear="true" data-placeholder="Select a logger">
                <option></option>
                <option value="root">root</option>
            </select>
        </div>


        <h6>OS</h6>

        <div class="filter">
            <select name="os" class="filter-list" rel="os" data-allowClear="true" data-placeholder="Select a os">
                <option></option>
                <option value="Linux">Linux</option>
                <option value="MacOS ">MacOS </option>
                <option value="Windows ">Windows </option>
            </select>
        </div>


        <h6>Server</h6>

        <div class="filter">
            <select name="server_name" class="filter-list" rel="server_name" data-allowClear="true" data-placeholder="Select a server">
                <option></option>
                <option value="babel">babel</option>
            </select>
        </div>


        <h6>Site</h6>

        <div class="filter">
            <select name="site" class="filter-list" rel="site" data-allowClear="true" data-placeholder="Select a site">
                <option></option>
                <option value="example.com">example.com</option>
            </select>
        </div>


        <h6>URL</h6>

        <div class="filter">
            <select name="url" class="filter-list" rel="url" data-allowClear="true" data-placeholder="Select a url">
                <option></option>
                <option value="http://198.199.94.36:8080/">http://198.199.94.36:8080/</option>
                <option value="http://198.199.94.36:8080/_static/sentry/images/favicon.ico">http://198.199.94.36:8080/_static/sentry/images/favicon.ico</option>
                <option value="http://198.199.94.36:8080/_static/sentry/scripts/bootstrap.min.js">http://198.199.94.36:8080/_static/sentry/scripts/bootstrap.min.js</option>
                <option value="http://198.199.94.36:8080/_static/sentry/scripts/global.min.js">http://198.199.94.36:8080/_static/sentry/scripts/global.min.js</option>
                <option value="http://198.199.94.36:8080/_static/sentry/scripts/legacy.min.js">http://198.199.94.36:8080/_static/sentry/scripts/legacy.min.js</option>
                <option value="http://198.199.94.36:8080/_static/sentry/scripts/lib.min.js">http://198.199.94.36:8080/_static/sentry/scripts/lib.min.js</option>
                <option value="http://198.199.94.36:8080/_static/sentry/styles/global.min.css">http://198.199.94.36:8080/_static/sentry/styles/global.min.css</option>
                <option value="http://198.199.94.36:8080/favicon.ico">http://198.199.94.36:8080/favicon.ico</option>
                <option value="http://198.199.94.36:8080/login/">http://198.199.94.36:8080/login/</option>
                <option value="http://ok.summic.com:8080/">http://ok.summic.com:8080/</option>
                <option value="http://ok.summic.com:8080/_static/sentry/images/favicon.ico">http://ok.summic.com:8080/_static/sentry/images/favicon.ico</option>
                <option value="http://ok.summic.com:8080/_static/sentry/scripts/bootstrap.min.js">http://ok.summic.com:8080/_static/sentry/scripts/bootstrap.min.js</option>
                <option value="http://ok.summic.com:8080/_static/sentry/scripts/global.min.js">http://ok.summic.com:8080/_static/sentry/scripts/global.min.js</option>
                <option value="http://ok.summic.com:8080/_static/sentry/scripts/legacy.min.js">http://ok.summic.com:8080/_static/sentry/scripts/legacy.min.js</option>
                <option value="http://ok.summic.com:8080/_static/sentry/scripts/lib.min.js">http://ok.summic.com:8080/_static/sentry/scripts/lib.min.js</option>
                <option value="http://ok.summic.com:8080/_static/sentry/styles/global.min.css">http://ok.summic.com:8080/_static/sentry/styles/global.min.css</option>
                <option value="http://ok.summic.com:8080/favicon.ico">http://ok.summic.com:8080/favicon.ico</option>
                <option value="http://ok.summic.com:8080/login">http://ok.summic.com:8080/login</option>
                <option value="http://ok.summic.com:8080/login/">http://ok.summic.com:8080/login/</option>
                <option value="http://tcpconn2.tencent.com:443/tcpconn2.tencent.com:443">http://tcpconn2.tencent.com:443/tcpconn2.tencent.com:443</option>
                <option value="http://v1.proxy-checks.com/pt.php">http://v1.proxy-checks.com/pt.php</option>
                <option value="http://v1.proxy-checks.com/t8.proxy-checks.com:443">http://v1.proxy-checks.com/t8.proxy-checks.com:443</option>
                <option value="http://www.baidu.com/">http://www.baidu.com/</option>
                <option value="http://www.baidu.com/robots.txt">http://www.baidu.com/robots.txt</option>
                <option value="http://www.google.com/">http://www.google.com/</option>
                <option value="http://www.google.pl/search">http://www.google.pl/search</option>
                <option value="http://www.messedupshit.com/judgeme/azenv.php">http://www.messedupshit.com/judgeme/azenv.php</option>
                <option value="http://www.qq.com/">http://www.qq.com/</option>
            </select>
        </div>

    </form>

</div>




</div>
</div>
</section>
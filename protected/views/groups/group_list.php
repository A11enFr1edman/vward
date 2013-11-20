<section id="page-header" class="toolbar">
    <div class="container">

        <div class="pull-right">
            <form action="/s/sentry/search/" id="search">
                <input type="text" name="q" value="" placeholder="Search query or event ID" />
            </form>
        </div>



        <div class="dashboard-btn">
            <a href="/s/" title="仪表盘">
                <i aria-hidden="true" class="icon-list"></i>
            </a>
        </div>


        <ul class="nav nav-tabs">
            <li class="active">
                <a href="/s/sentry/">Stream</a>
            </li>

            <li>
                <a href="/s/sentry/settings/" title="Project Settings">
                    设置
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
                        <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">排序方式：最后出现时间 <i aria-hidden="true" class="icon-arrow-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="?&amp;sort=priority">优先级</a></li>
                            <li class="active"><a href="?&amp;sort=date">最后出现时间</a></li>
                            <li><a href="?&amp;sort=new">首次出现时间</a></li>
                            <li><a href="?&amp;sort=freq">频率</a></li>
                            <li class="divider"></li>
                            <li><a href="?&amp;sort=tottime">总共花费时间</a></li>
                            <li><a href="?&amp;sort=avgtime">平均花费时间</a></li>

                        </ul>
                    </div>
                    <div class="btn-group">
                        <a href="#" class="btn dropdown-toggle" onclick="$('#daterange').toggle(); return false;">


                            Since: 十一月 13th


                            <i aria-hidden="true" class="icon-arrow-down"></i></a>
                    </div>
                    <div class="btn-group pull-right">
                        <a class="btn prev disabled" href="?&amp;p=None"><span>上一个</span></a>
                        <a class="btn next disabled" href="?&amp;p=None"><span>下一个</span></a>
                    </div>
                </div>

                <div class="datepicker-box" id="daterange">
                    <form method="GET">

                        <div class="input">
                            <div class="inline-inputs">
                                <input data-toggle="datepicker" data-date-format="yyyy-mm-dd"name="df" class="date" type="text" value="2013-11-13" />
                                <input class="time" type="text" name="tf" value="05:46 PM" />
                                to
                                <input data-toggle="datepicker" data-date-format="yyyy-mm-dd" name="dt" class="date" type="text" value="" />
                                <input class="time" type="text" name="tt" value="" />
                            </div>
                            <div class="help-block">All events are represented in UTC time.</div>
                        </div>
                        <div class="submit">
                            <div class="pull-right">
                                <input type="button" class="btn btn-small" value="清除" onclick="$('#daterange input[type=text]').val(''); this.form.submit();">
                                <input type="submit" class="btn btn-primary btn-small" value="Apply">
                            </div>
                            <div class="radio-inputs">
                                <label class="radio">
                                    <input type="radio" name="date_type" value="last_seen" checked> 最后出现时间
                                </label>
                                <label class="radio">
                                    <input type="radio" name="date_type" value="first_seen" > 首次出现时间
                                </label>
                            </div>
                        </div>
                    </form>
                </div>




                <div id="event_list"></div>

                <div class="btn-toolbar" style="border-bottom: none">
                    <div class="btn-group pull-right">
                        <a class="btn prev disabled" href="?&amp;p=None"><span>上一个</span></a>
                        <a class="btn next disabled" href="?&amp;p=None"><span>下一个</span></a>
                    </div>
                </div>

                <script>
                    $(function(){
                        new app.StreamPage({
                            groups: [{"version": 1384796771.018822, "timeSpent": null, "lastSeen": "2013-11-18T17:28:36+00:00", "historicalData": [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8], "isResolved": false, "levelName": "error", "title": "This is a test exception sent from the Raven CLI.", "id": "1", "score": 1384766916, "logger": "php", "canResolve": true, "annotations": [{"count": 10, "label": "\u7528\u6237"}], "tags": [], "isPublic": false, "hasSeen": true, "firstSeen": "2013-11-18T17:04:30+00:00", "count": "8", "permalink": "/sentry/sentry/group/1/", "level": 40, "message": "This is a test exception sent from the Raven CLI.", "versions": [], "isBookmarked": false, "project": {"name": "Sentry", "slug": "sentry"}}],
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


                    <h6>书签</h6>
                    <div class="filter">
                        <ul class="nav nav-tabs nav-stacked filter-list">
                            <li class="active"><a href="?">所有事件</a></li>
                            <li><a href="?&amp;bookmarks=1">Only Bookmarks</a></li>
                        </ul>
                    </div>




                    <h6>状态</h6>

                    <div class="filter">
                        <select name="status" class="filter-list" rel="status" data-allowClear="true" data-placeholder="Select a 状态">
                            <option></option>
                            <option selected="selected" value="0">未解决</option>
                            <option value="1">已解决</option>
                            <option value="2">Muted</option>
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
                            <option value="php">php</option>
                        </select>
                    </div>


                    <h6>Server</h6>

                    <div class="filter">
                        <select name="server_name" class="filter-list" rel="server_name" data-allowClear="true" data-placeholder="Select a server">
                            <option></option>
                            <option value="allanwang-NB.local">allanwang-NB.local</option>
                        </select>
                    </div>

                </form>

            </div>




        </div>
    </div>
</section>
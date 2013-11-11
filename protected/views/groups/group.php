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





<div id="details">
    <div id="event_list" class="inactive"></div>
</div>

<section class="body">





<div class="activity" id="activity">
    <ul>



        <li class="item item-set_private"><span class="avatar"><img src="https://secure.gravatar.com/avatar/3dd58b1eac9406ae08099585c409316b?s=20&d=mm"></span> <strong>hi@summic.com</strong> made this event private <span class="sep">&mdash;</span> <span class="time">2013-10-29</span></li>





        <li class="item item-set_public"><span class="avatar"><img src="https://secure.gravatar.com/avatar/3dd58b1eac9406ae08099585c409316b?s=20&d=mm"></span> <strong>hi@summic.com</strong> made this event public <span class="sep">&mdash;</span> <span class="time">2013-10-29</span></li>





        <li class="item item-set_regression"><span class="avatar sentry"></span> The system marked this event as a regression <span class="sep">&mdash;</span> <span class="time">2013-10-28</span></li>





        <li class="item item-set_resolved"><span class="avatar"><img src="https://secure.gravatar.com/avatar/3dd58b1eac9406ae08099585c409316b?s=20&d=mm"></span> <strong>hi@summic.com</strong> marked this event as resolved <span class="sep">&mdash;</span> <span class="time">2013-10-28</span></li>





        <li class="item item-note"><span class="avatar"><img src="https://secure.gravatar.com/avatar/3dd58b1eac9406ae08099585c409316b?s=20&d=mm"></span> <strong>hi@summic.com</strong> left a note <span class="sep">&mdash;</span> <span class="time">2013-10-28</span><p>权限问题，已修正</p></li>





        <li class="item item-first_seen"><span class="avatar sentry"></span> The system first saw this event <span class="sep">&mdash;</span> <span class="time">2013-10-28</span></li>



    </ul>
    <a href="#add-note" class="add-note-btn"><i class="icon-comment"></i> Add Note</a>
    <form class="add-note-form hide" method="POST" action="">
        <input type='hidden' name='csrfmiddlewaretoken' value='IPzf8y1PBh3jf84FUOnFc2eMaKITGEZb' />
        <input type="hidden" name="o" value="note">
        <textarea class="span8" cols="40" id="id_text" name="text" rows="10">
        </textarea>
        <fieldset class="form-actions">
            <button type="submit" class="btn btn-small btn-primary">Add Note</button>
        </fieldset>
    </form>
</div>

<div class="btn-toolbar event-toolbar">
    <!-- We switch the ordering of events here as it makes more sense visually -->
    <a class="btn pull-left prev  disabled"><span></span> Newer Event</a>
    <a class="btn pull-right next " href="/sentry/sentry/group/1/events/389/">Older Event <span></span></a>
    <h4>
        Event at Nov. 11, 2013, 5:39 p.m. [10.4 KB]<br><small>ID: 58900eea48c3418ba01f5bf43b7a1cce</small></h4>
</div>





<div id="event_nav">
    <div class="event_nav_wrap">
        <ul class="nav nav-pills">



            <li class="top active">
                <a href="#" onclick="javascript:window.location = '#details'; return false">Top</a>
            </li>

            <li>
                <a href="#tags">Tags</a>
            </li>


            <li>
                <a href="#exception">
                    Exception
                </a>
            </li>

            <li>
                <a href="#http">
                    Request
                </a>
            </li>


            <li>
                <a href="#extra">Additional Data</a>
            </li>


            <li>
                <a href="#versions">Versions</a>
            </li>

        </ul>
    </div>
</div>










<div id="tags">
    <div class="page-header">
        <h2>Tags</h2>
    </div>
    <ul class="mini-tag-list">

        <li>
            <strong>site</strong>
            <em>=</em>
            <span><a href="/sentry/sentry/?site=example.com">example.com</a> </span></li>

        <li>
            <strong>level</strong>
            <em>=</em>
            <span><a href="/sentry/sentry/?level=error">error</a> </span></li>

        <li>
            <strong>logger</strong>
            <em>=</em>
            <span><a href="/sentry/sentry/?logger=root">root</a> </span></li>

        <li>
            <strong>server_name</strong>
            <em>=</em>
            <span><a href="/sentry/sentry/?server_name=babel">babel</a> </span></li>

        <li>
            <strong>url</strong>
            <em>=</em>
            <span><a href="/sentry/sentry/?url=http://www.baidu.com/robots.txt">http://www.baidu.com/robots.txt</a> <a href="http://www.baidu.com/robots.txt" class="icon-share"></a></span></li>

    </ul>
</div>



<div id="exception">



<div class="module">
<div class="page-header">

    <a href="javascript:void(0)" data-container="#raw_stacktrace" data-title="Stacktrace" class="popup btn small pull-right">Raw</a>


    <h2>
        Exception
        <small>
            (most recent call last)
        </small>
    </h2>
</div>
<div class="module-content">

<div class="traceback">

<h3><span title="django.core.exceptions.SuspiciousOperation">SuspiciousOperation</span> <small>Root Cause</small></h3>


<p>Invalid HTTP_HOST header (you may need to set ALLOWED_HOSTS): www.baidu.com</p>






<ul class="traceback">

<li class="frame frame-exception_0-0">
<p>

    <code>django/core/handlers/base.py</code>


    <a class="annotation trigger-popover"
       data-placement="right"
       data-title="Original Location"
       data-content="<dl>
                                <dt>Filename</dt>
                                <dd>
                                    
                                        /usr/local/lib/python2.7/dist-packages/django/core/handlers/base.py
                                    
                                </dd>
                                
                                    <dt>Line Number</dt>
                                    <dd>92</dd>
                                
                                
                                
                                    <dt>Function</dt>
                                    <dd>get_response</dd>
                                
                            </dl>">?</a>



    in <code>get_response</code>



</p>


<div class="commands">
    <a href="javascript:void(0)" onclick="$('.frame-exception_0-0').toggleClass('expanded')" title="Toggle Context" rel="tooltip" class="tip"><i class="icon-info-sign"></i> <i class="icon-tasks"></i> </a>
</div>



<ol start="87" class="context">

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>            resolver = urlresolvers.RegexURLResolver(r&#39;^/&#39;, urlconf)
</pre></div>
    </li>

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>            try:
</pre></div>
    </li>

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>                response = None
</pre></div>
    </li>

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>                # Apply request middleware
</pre></div>
    </li>

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>                for middleware_method in self._request_middleware:
</pre></div>
    </li>

    <li class="active" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>                    response = middleware_method(request)
</pre></div>
    </li>

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>                    if response:
</pre></div>
    </li>

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>                        break
</pre></div>
    </li>

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><pre></pre></li>

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>                if response is None:
</pre></div>
    </li>

    <li class="expandable" onclick="$('.frame-exception_0-0').toggleClass('expanded')"><div class="highlight"><pre>                    if hasattr(request, &#39;urlconf&#39;):
</pre></div>
    </li>

</ol>



<div class="stack0 expandable">




    <table class="table table-striped vars">
        <colgroup>
            <col style="width:100px;">
        </colgroup>

        <tbody>

        <tr>
            <th>&#39;middleware_method&#39;</th>
            <td class="values">





                <pre>&lt;bound met<span></span>hod Common<span></span>Middleware<span></span>.process_r<span></span>equest of <span></span>&lt;django.mi<span></span>ddleware.c<span></span>ommon.Comm<span></span>onMiddlewa<span></span>re object <span></span>at 0x58c74<span></span>50&gt;&gt;</pre>



            </td>
        </tr>

        <tr>
            <th>&#39;request&#39;</th>
            <td class="values">





                <pre>&lt;WSGIReque<span></span>st at 0x80<span></span>912656&gt;</pre>



            </td>
        </tr>

        <tr>
            <th>&#39;resolver&#39;</th>
            <td class="values">





                <pre>&lt;RegexURLR<span></span>esolver &#39;s<span></span>entry.conf<span></span>.urls&#39; (No<span></span>ne:None) ^<span></span>/&gt;</pre>



            </td>
        </tr>


        <tr class="js-expand" style="display:none">
            <th>&#39;response&#39;</th>
            <td class="values">





                <pre>None</pre>



            </td>
        </tr>

        <tr class="js-expand" style="display:none">
            <th>&#39;self&#39;</th>
            <td class="values">





                <pre>&lt;django.co<span></span>re.handler<span></span>s.wsgi.WSG<span></span>IHandler o<span></span>bject at 0<span></span>x38b8b90&gt;</pre>



            </td>
        </tr>

        <tr class="js-expand" style="display:none">
            <th>&#39;urlconf&#39;</th>
            <td class="values">





                <pre>&#39;sentry.co<span></span>nf.urls&#39;</pre>



            </td>
        </tr>


        <tr>
            <td colspan="2" class="toggle-expand">
                <a href="javascript:void(0)" onclick="app.utils.varToggle(this, $(this).parent().parent().siblings('.js-expand'));"
                   data-collapse-label="Collapse Context">
                    Expand Context (3 hidden)
                </a>
            </td>
        </tr>

        </tbody>
    </table>



</div>

</li>

<li class="frame frame-exception_0-1">
    <p>

        <code>django/middleware/common.py</code>


        <a class="annotation trigger-popover"
           data-placement="right"
           data-title="Original Location"
           data-content="<dl>
                                <dt>Filename</dt>
                                <dd>
                                    
                                        /usr/local/lib/python2.7/dist-packages/django/middleware/common.py
                                    
                                </dd>
                                
                                    <dt>Line Number</dt>
                                    <dd>57</dd>
                                
                                
                                
                                    <dt>Function</dt>
                                    <dd>process_request</dd>
                                
                            </dl>">?</a>



        in <code>process_request</code>



    </p>


    <div class="commands">
        <a href="javascript:void(0)" onclick="$('.frame-exception_0-1').toggleClass('expanded')" title="Toggle Context" rel="tooltip" class="tip"><i class="icon-info-sign"></i> <i class="icon-tasks"></i> </a>
    </div>



    <ol start="52" class="context">

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><div class="highlight"><pre>                    )
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><div class="highlight"><pre>                    return http.HttpResponseForbidden(&#39;&lt;h1&gt;Forbidden&lt;/h1&gt;&#39;)
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><pre></pre></li>

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><div class="highlight"><pre>        # Check for a redirect based on settings.APPEND_SLASH
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><div class="highlight"><pre>        # and settings.PREPEND_WWW
</pre></div>
        </li>

        <li class="active" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><div class="highlight"><pre>        host = request.get_host()
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><div class="highlight"><pre>        old_url = [host, request.path]
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><div class="highlight"><pre>        new_url = old_url[:]
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><pre></pre></li>

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><div class="highlight"><pre>        if (settings.PREPEND_WWW and old_url[0] and
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-1').toggleClass('expanded')"><div class="highlight"><pre>                not old_url[0].startswith(&#39;www.&#39;)):
</pre></div>
        </li>

    </ol>



    <div class="stack1 expandable">




        <table class="table table-striped vars">
            <colgroup>
                <col style="width:100px;">
            </colgroup>

            <tbody>

            <tr>
                <th>&#39;request&#39;</th>
                <td class="values">





                    <pre>&lt;WSGIReque<span></span>st at 0x80<span></span>912656&gt;</pre>



                </td>
            </tr>

            <tr>
                <th>&#39;self&#39;</th>
                <td class="values">





                    <pre>&lt;django.mi<span></span>ddleware.c<span></span>ommon.Comm<span></span>onMiddlewa<span></span>re object <span></span>at 0x58c74<span></span>50&gt;</pre>



                </td>
            </tr>



            </tbody>
        </table>



    </div>

</li>

<li class="frame frame-exception_0-2">
    <p>

        <code>django/http/request.py</code>


        <a class="annotation trigger-popover"
           data-placement="right"
           data-title="Original Location"
           data-content="<dl>
                                <dt>Filename</dt>
                                <dd>
                                    
                                        /usr/local/lib/python2.7/dist-packages/django/http/request.py
                                    
                                </dd>
                                
                                    <dt>Line Number</dt>
                                    <dd>72</dd>
                                
                                
                                
                                    <dt>Function</dt>
                                    <dd>get_host</dd>
                                
                            </dl>">?</a>



        in <code>get_host</code>



    </p>


    <div class="commands">
        <a href="javascript:void(0)" onclick="$('.frame-exception_0-2').toggleClass('expanded')" title="Toggle Context" rel="tooltip" class="tip"><i class="icon-info-sign"></i> <i class="icon-tasks"></i> </a>
    </div>



    <ol start="67" class="context">

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>        allowed_hosts = [&#39;*&#39;] if settings.DEBUG else settings.ALLOWED_HOSTS
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>        if validate_host(host, allowed_hosts):
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>            return host
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>        else:
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>            raise SuspiciousOperation(
</pre></div>
        </li>

        <li class="active" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>                &quot;Invalid HTTP_HOST header (you may need to set ALLOWED_HOSTS): %s&quot; % host)
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><pre></pre></li>

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>    def get_full_path(self):
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>        # RFC 3986 requires query string arguments to be in the ASCII range.
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>        # Rather than crash if this doesn&#39;t happen, we encode defensively.
</pre></div>
        </li>

        <li class="expandable" onclick="$('.frame-exception_0-2').toggleClass('expanded')"><div class="highlight"><pre>        return &#39;%s%s&#39; % (self.path, (&#39;?&#39; + iri_to_uri(self.META.get(&#39;QUERY_STRING&#39;, &#39;&#39;))) if self.META.get(&#39;QUERY_STRING&#39;, &#39;&#39;) else &#39;&#39;)
</pre></div>
        </li>

    </ol>



    <div class="stack2 expandable">




        <table class="table table-striped vars">
            <colgroup>
                <col style="width:100px;">
            </colgroup>

            <tbody>

            <tr>
                <th>&#39;allowed_hosts&#39;</th>
                <td class="values">




                    <table class="table table-striped vars">
                        <colgroup>
                            <col style="width:100px;">
                        </colgroup>

                        <thead>
                        <tr>
                            <th>
                                Index
                            </th>
                            <th>Value</th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <th>0</th>
                            <td class="values">





                                <pre>&#39;198.199.9<span></span>4.36&#39;</pre>



                            </td>
                        </tr>



                        </tbody>
                    </table>



                </td>
            </tr>

            <tr>
                <th>&#39;host&#39;</th>
                <td class="values">





                    <pre>&#39;www.baidu<span></span>.com&#39;</pre>



                </td>
            </tr>

            <tr>
                <th>&#39;self&#39;</th>
                <td class="values">





                    <pre>&lt;WSGIReque<span></span>st at 0x80<span></span>912656&gt;</pre>



                </td>
            </tr>



            </tbody>
        </table>



    </div>

</li>

</ul>



</div>

</div>
</div>

<div id="raw_stacktrace" style="display: none;">
    <pre>Stacktrace (most recent call last):

  File &quot;django/core/handlers/base.py&quot;, line 92, in get_response
    response = middleware_method(request)
  File &quot;django/middleware/common.py&quot;, line 57, in process_request
    host = request.get_host()
  File &quot;django/http/request.py&quot;, line 72, in get_host
    &quot;Invalid HTTP_HOST header (you may need to set ALLOWED_HOSTS): %s&quot; % host)</pre>
</div>



</div>

<div id="http">



    <div class="module">
        <div class="page-header">

            <a href="/sentry/sentry/group/1/events/390/replay/" class="btn small pull-right">Replay this request</a>

            <h2>Request</h2>
        </div>
        <div class="module-content">
            <table class="table table-striped vars">
                <colgroup>
                    <col style="width:130px;">
                </colgroup>
                <tbody>
                <tr>
                    <th>URL:</th>
                    <td><a href="http://www.baidu.com/robots.txt">http://www.baidu.com/robots.txt</a></td>
                </tr>

                <tr>
                    <th>Method:</th>
                    <td>GET</td>
                </tr>

                <tr>
                    <th>Query:</th>
                    <td class="values">
                        <pre></pre>
                    </td>
                </tr>



                <tr>
                    <th>Headers:</th>
                    <td class="values">




                        <table class="table table-striped vars">
                            <colgroup>
                                <col style="width:100px;">
                            </colgroup>

                            <tbody>

                            <tr>
                                <th>Accept</th>
                                <td class="values">





                                    <pre>*/*</pre>



                                </td>
                            </tr>

                            <tr>
                                <th>Host</th>
                                <td class="values">





                                    <pre>www.baidu.<span></span>com</pre>



                                </td>
                            </tr>

                            <tr>
                                <th>Proxy-Connection</th>
                                <td class="values">





                                    <pre>Keep-Alive</pre>



                                </td>
                            </tr>

                            <tr>
                                <th>User-Agent</th>
                                <td class="values">





                                    <pre>Mozilla/4.<span></span>0 (compati<span></span>ble; Win32<span></span>; WinHttp.<span></span>WinHttpReq<span></span>uest.5)</pre>



                                </td>
                            </tr>



                            </tbody>
                        </table>



                    </td>
                </tr>


                <tr>
                    <th>Environment:</th>
                    <td class="values">




                        <table class="table table-striped vars">
                            <colgroup>
                                <col style="width:100px;">
                            </colgroup>

                            <tbody>

                            <tr>
                                <th>REMOTE_ADDR</th>
                                <td class="values">





                                    <pre>121.56.218<span></span>.15</pre>



                                </td>
                            </tr>

                            <tr>
                                <th>SERVER_NAME</th>
                                <td class="values">





                                    <pre>www.baidu.<span></span>com</pre>



                                </td>
                            </tr>

                            <tr>
                                <th>SERVER_PORT</th>
                                <td class="values">





                                    <pre>80</pre>



                                </td>
                            </tr>



                            </tbody>
                        </table>



                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>



<div id="extra">
    <div class="page-header">
        <h2>Additional Data</h2>
    </div>





    <table class="table table-striped vars">
        <colgroup>
            <col style="width:100px;">
        </colgroup>

        <tbody>

        <tr>
            <th>sys.argv</th>
            <td class="values">




                <table class="table table-striped vars">
                    <colgroup>
                        <col style="width:100px;">
                    </colgroup>

                    <thead>
                    <tr>
                        <th>
                            Index
                        </th>
                        <th>Value</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <th>0</th>
                        <td class="values">





                            <pre>&#39;/usr/loca<span></span>l/bin/sent<span></span>ry&#39;</pre>



                        </td>
                    </tr>

                    <tr>
                        <th>1</th>
                        <td class="values">





                            <pre>&#39;--config=<span></span>./sentry.c<span></span>onf.py&#39;</pre>



                        </td>
                    </tr>

                    <tr>
                        <th>2</th>
                        <td class="values">





                            <pre>&#39;start&#39;</pre>



                        </td>
                    </tr>



                    </tbody>
                </table>



            </td>
        </tr>



        </tbody>
    </table>




</div>



<div id="versions">
    <div class="page-header">
        <h2>Package Versions</h2>
    </div>
    <table class="table table-striped">
        <colgroup>
            <col style="width:130px">
        </colgroup>

        <tr>
            <th class="key">crispy_forms</th>
            <td class="values"><code>1.2.8</code></td>
        </tr>

        <tr>
            <th class="key">django</th>
            <td class="values"><code>1.5.5</code></td>
        </tr>

        <tr>
            <th class="key">djcelery</th>
            <td class="values"><code>3.0.23</code></td>
        </tr>

        <tr>
            <th class="key">gunicorn</th>
            <td class="values"><code>0.17.4</code></td>
        </tr>

        <tr>
            <th class="key">kombu</th>
            <td class="values"><code>2.5.16</code></td>
        </tr>

        <tr>
            <th class="key">kombu.transport.django</th>
            <td class="values"><code>1.0.0</code></td>
        </tr>

        <tr>
            <th class="key">raven</th>
            <td class="values"><code>3.5.1</code></td>
        </tr>

        <tr>
            <th class="key">sentry</th>
            <td class="values"><code>6.4.0 (812568f)</code></td>
        </tr>

        <tr>
            <th class="key">social_auth</th>
            <td class="values"><code>0.7.28</code></td>
        </tr>

        <tr>
            <th class="key">south</th>
            <td class="values"><code>0.8.2</code></td>
        </tr>

    </table>
</div>




</section>

</div>

<div class="sidebar">

    <ul class="nav nav-list">
        <li class="active"><a href="/sentry/sentry/group/1/">Aggregate</a></li>
        <li>
            <a href="/sentry/sentry/group/1/tags/">Tags</a>
        </li>
        <li>
            <a href="/sentry/sentry/group/1/events/">Similar Events</a>
        </li>
    </ul>

    <h6>Aggregate Details</h6>

    <dl class="flat">
        <dt>Status:</dt>
        <dd>Unresolved</dd>
        <dt>First Seen:</dt>
        <dd class="pretty-date" data-datetime="2013-10-29T00:43:05.271389+08:00">Oct. 28, 2013</dd>

        <dt>Reopened At:</dt>
        <dd class="pretty-date" data-datetime="2013-10-29T01:03:00.002134+08:00">Oct. 28, 2013</dd>

        <dt>Last Seen:</dt>
        <dd class="pretty-date" data-datetime="2013-11-11T17:39:21.121322+08:00">1 hour ago</dd>

    </dl>




    <!--- there is probably a less terrible way to do things like this -->
    <p id="public-status"><small>
        <span data-public="true">
            This event is <strong>publicly visible</strong>.
        </span>
        <span data-public="false" style="display: none;">
            This event is <strong>not publicly visible</strong>.
        </span>
        <span data-public="true">
            <a href="/sentry/sentry/group/1/">Link</a>
        </span>

        </small></p>


    <ul class="nav nav-list">
        <li class="nav-header">Actions</li>

        <li><a href="/api/sentry/sentry/group/1/set/muted/">Mute Event</a></li>




        <li><a href="/api/sentry/sentry/group/1/remove/">Remove Event Data</a></li>
    </ul>







    <ul class="nav nav-list counted-list">
        <li class="nav-header">Browser</li>

        <li><span class="count" title="154">154</span> <a href="/sentry/sentry/?browser=Microsoft Internet Explorer 4.01">Microsoft Internet Explorer 4.01</a></li>

        <li><span class="count" title="57">57</span> <a href="/sentry/sentry/?browser=Chrome 30.0.1599.101">Chrome 30.0.1599.101</a></li>

        <li><span class="count" title="42">42</span> <a href="/sentry/sentry/?browser=Microsoft Internet Explorer 7.0">Microsoft Internet Explorer 7.0</a></li>

        <li><span class="count" title="30">30</span> <a href="/sentry/sentry/?browser=Firefox 25.0">Firefox 25.0</a></li>

        <li><span class="count" title="18">18</span> <a href="/sentry/sentry/?browser=Firefox 24.0">Firefox 24.0</a></li>

        <li><span class="count" title="12">12</span> <a href="/sentry/sentry/?browser=Safari 7.0">Safari 7.0</a></li>

        <li><span class="count" title="2">2</span> <a href="/sentry/sentry/?browser=Microsoft Internet Explorer 6.0">Microsoft Internet Explorer 6.0</a></li>

        <li><span class="count" title="1">1</span> <a href="/sentry/sentry/?browser=Firefox 1.5.0.3">Firefox 1.5.0.3</a></li>

        <li><span class="count" title="1">1</span> <a href="/sentry/sentry/?browser=Microsoft Internet Explorer 9.0">Microsoft Internet Explorer 9.0</a></li>

    </ul>







    <ul class="nav nav-list counted-list">
        <li class="nav-header">Level</li>

        <li><span class="count" title="334">334</span> <a href="/sentry/sentry/?level=error">error</a></li>

    </ul>







    <ul class="nav nav-list counted-list">
        <li class="nav-header">Logger</li>

        <li><span class="count" title="334">334</span> <a href="/sentry/sentry/?logger=root">root</a></li>

    </ul>







    <ul class="nav nav-list counted-list">
        <li class="nav-header">Os</li>

        <li><span class="count" title="247">247</span> <a href="/sentry/sentry/?os=Windows ">Windows </a></li>

        <li><span class="count" title="69">69</span> <a href="/sentry/sentry/?os=MacOS ">MacOS </a></li>

        <li><span class="count" title="1">1</span> <a href="/sentry/sentry/?os=Linux">Linux</a></li>

    </ul>







    <ul class="nav nav-list counted-list">
        <li class="nav-header">Server Name</li>

        <li><span class="count" title="334">334</span> <a href="/sentry/sentry/?server_name=babel">babel</a></li>

    </ul>







    <ul class="nav nav-list counted-list">
        <li class="nav-header">Site</li>

        <li><span class="count" title="334">334</span> <a href="/sentry/sentry/?site=example.com">example.com</a></li>

    </ul>







    <ul class="nav nav-list counted-list">
        <li class="nav-header">Url</li>

        <li><span class="count" title="154">154</span> <a href="/sentry/sentry/?url=http://www.qq.com/">http://www.qq.com/</a></li>

        <li><span class="count" title="36">36</span> <a href="/sentry/sentry/?url=http://v1.proxy-checks.com/pt.php">http://v1.proxy-checks.com/pt.php</a></li>

        <li><span class="count" title="13">13</span> <a href="/sentry/sentry/?url=http://ok.summic.com:8080/_static/sentry/scripts/legacy.min.js">http://ok.summic.com:8080/_static/sentry/scripts/legacy.min.js</a></li>

        <li><span class="count" title="12">12</span> <a href="/sentry/sentry/?url=http://ok.summic.com:8080/_static/sentry/scripts/global.min.js">http://ok.summic.com:8080/_static/sentry/scripts/global.min.js</a></li>

        <li><span class="count" title="11">11</span> <a href="/sentry/sentry/?url=http://ok.summic.com:8080/_static/sentry/scripts/bootstrap.min.js">http://ok.summic.com:8080/_static/sentry/scripts/bootstrap.min.js</a></li>

        <li><span class="count" title="10">10</span> <a href="/sentry/sentry/?url=http://www.baidu.com/robots.txt">http://www.baidu.com/robots.txt</a></li>

        <li><span class="count" title="8">8</span> <a href="/sentry/sentry/?url=http://198.199.94.36:8080/_static/sentry/styles/global.min.css">http://198.199.94.36:8080/_static/sentry/styles/global.min.css</a></li>

        <li><span class="count" title="8">8</span> <a href="/sentry/sentry/?url=http://ok.summic.com:8080/_static/sentry/scripts/lib.min.js">http://ok.summic.com:8080/_static/sentry/scripts/lib.min.js</a></li>

        <li><span class="count" title="7">7</span> <a href="/sentry/sentry/?url=http://198.199.94.36:8080/_static/sentry/images/favicon.ico">http://198.199.94.36:8080/_static/sentry/images/favicon.ico</a></li>

        <li><span class="count" title="7">7</span> <a href="/sentry/sentry/?url=http://198.199.94.36:8080/_static/sentry/scripts/bootstrap.min.js">http://198.199.94.36:8080/_static/sentry/scripts/bootstrap.min.js</a></li>

    </ul>






</div>



<script type="text/javascript">
    $(document).ready(function() {
        new app.GroupDetailsPage({
            group: {"version": 1384168142.53587, "timeSpent": null, "lastSeen": "2013-11-11T17:39:21.121322+08:00", "historicalData": [], "isResolved": false, "levelName": "error", "title": "django.http.request in get_host", "id": "1", "score": 0, "logger": "root", "canResolve": true, "annotations": [{"count": 30, "label": "users"}], "tags": [], "isPublic": false, "hasSeen": true, "firstSeen": "2013-10-29T00:43:05.271389+08:00", "count": "334", "permalink": "/sentry/sentry/group/1/", "level": 40, "message": "SuspiciousOperation: Invalid HTTP_HOST header (you may need to set ALLOWED_HOSTS): www.baidu.com", "versions": [], "isBookmarked": false, "project": {"name": "Sentry", "slug": "sentry"}},
        });
    });
</script>

</div>
</div>
</section>
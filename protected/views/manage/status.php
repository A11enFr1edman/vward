<section id="content" class="with-sidebar">
    <div class="container">
        <div class="content">
            <div class="main">
<div id="messages"></div>   
    <section class="body">
        
    <div class="page-header">
        <h2>Environment</h2>
    </div>
    
        <table class="table table-bordered table-striped">
            <colgroup>
                <col style="width:220px">
            </colgroup>
            <tbody>
                <tr>
                    <th>Server Version</th>
                    <td class="code">6.4.0 (812568f) </td>
                </tr>
                <tr>
                    <th>PHP Version</th>
                    <td class="code"><?php echo phpversion()?></td>
                </tr>
                <tr>
                    <th>Configuration File</th>
                    <td class="code">./sentry.conf.py</td>
                </tr>
                <tr>
                    <th>Uptime</th>
                    <td class="code">Oct. 29, 2013 (since Oct. 29, 2013)</td>
                </tr>
            </tbody>
        </table>
    

    <div class="page-header">
        <h2>Configuration <small>./sentry.conf.py</small></h2>
    </div>
    <table class="table table-bordered table-striped">
        <colgroup>
            <col style="width:220px">
        </colgroup>
        <tbody>
            
                <tr>
                    <th>ABSOLUTE_URL_OVERRIDES</th>
                    <td class="code"><pre>{}</pre></td>
                </tr>
            
                <tr>
                    <th>ADMINS</th>
                    <td class="code"><pre>()</pre></td>
                </tr>
            
                <tr>
                    <th>ADMIN_FOR</th>
                    <td class="code"><pre>()</pre></td>
                </tr>
            
                <tr>
                    <th>ALLOWED_HOSTS</th>
                    <td class="code"><pre>(&#39;198.199.<span></span>94.36&#39;,)</pre></td>
                </tr>
            
                <tr>
                    <th>ALLOWED_INCLUDE_ROOTS</th>
                    <td class="code"><pre>()</pre></td>
                </tr>
            
                <tr>
                    <th>APPEND_SLASH</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>AUTHENTICATION_BACKENDS</th>
                    <td class="code"><pre>(&#39;social_a<span></span>uth.backen<span></span>ds.twitter<span></span>.TwitterBa<span></span>ckend&#39;, &#39;s<span></span>ocial_auth<span></span>.backends.<span></span>facebook.F<span></span>acebookBac<span></span>kend&#39;, &#39;so<span></span>cial_auth.<span></span>backends.g<span></span>oogle.Goog<span></span>leBackend&#39;<span></span>, &#39;social_<span></span>auth.backe<span></span>nds.contri<span></span>b.github.G<span></span>ithubBacke<span></span>nd&#39;, &#39;soci<span></span>al_auth.ba<span></span>ckends.con<span></span>trib.bitbu<span></span>cket.Bitbu<span></span>cketBacken<span></span>d&#39;, &#39;socia<span></span>l_auth.bac<span></span>kends.cont<span></span>rib.trello<span></span>.TrelloBac<span></span>kend&#39;, &#39;se<span></span>ntry.utils<span></span>.auth.Emai<span></span>lAuthBacke<span></span>nd&#39;)</pre></td>
                </tr>
            
                <tr>
                    <th>AUTH_PROVIDERS</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>AUTH_USER_MODEL</th>
                    <td class="code"><pre>&#39;auth.User<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>BITBUCKET_CONSUMER_KEY</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>BITBUCKET_CONSUMER_SECRET</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>BROKER_URL</th>
                    <td class="code"><pre>&#39;django://<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CACHES</th>
                    <td class="code"><pre>{&#39;default&#39;<span></span>: {&#39;BACKEN<span></span>D&#39;: &#39;djang<span></span>o.core.cac<span></span>he.backend<span></span>s.locmem.L<span></span>ocMemCache<span></span>&#39;}}</pre></td>
                </tr>
            
                <tr>
                    <th>CACHE_MIDDLEWARE_ALIAS</th>
                    <td class="code"><pre>&#39;default&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CACHE_MIDDLEWARE_KEY_PREFIX</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CACHE_MIDDLEWARE_SECONDS</th>
                    <td class="code"><pre>600</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_ALWAYS_EAGER</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_CREATE_MISSING_QUEUES</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_DEFAULT_EXCHANGE</th>
                    <td class="code"><pre>&#39;default&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_DEFAULT_EXCHANGE_TYPE</th>
                    <td class="code"><pre>&#39;direct&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_DEFAULT_QUEUE</th>
                    <td class="code"><pre>&#39;default&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_DEFAULT_ROUTING_KEY</th>
                    <td class="code"><pre>&#39;default&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_DISABLE_RATE_LIMITS</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_IGNORE_RESULT</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_QUEUES</th>
                    <td class="code"><pre>(&lt;unbound <span></span>Queue &#39;def<span></span>ault&#39; -&gt; E<span></span>xchange de<span></span>fault(dire<span></span>ct) -&gt; &#39;de<span></span>fault&#39;&gt;, &lt;<span></span>unbound Qu<span></span>eue &#39;celer<span></span>y&#39; -&gt; Exch<span></span>ange defau<span></span>lt(direct)<span></span> -&gt; &#39;celer<span></span>y&#39;&gt;, &lt;unbo<span></span>und Queue <span></span>&#39;alerts&#39; -<span></span>&gt; Exchange<span></span> default(d<span></span>irect) -&gt; <span></span>&#39;alerts&#39;&gt;,<span></span> &lt;unbound <span></span>Queue &#39;cle<span></span>anup&#39; -&gt; E<span></span>xchange de<span></span>fault(dire<span></span>ct) -&gt; &#39;cl<span></span>eanup&#39;&gt;, &lt;<span></span>unbound Qu<span></span>eue &#39;sourc<span></span>emaps&#39; -&gt; <span></span>Exchange d<span></span>efault(dir<span></span>ect) -&gt; &#39;s<span></span>ourcemaps&#39;<span></span>&gt;, &lt;unboun<span></span>d Queue &#39;s<span></span>earch&#39; -&gt; <span></span>Exchange d<span></span>efault(dir<span></span>ect) -&gt; &#39;s<span></span>earch&#39;&gt;, &lt;<span></span>unbound Qu<span></span>eue &#39;count<span></span>ers&#39; -&gt; Ex<span></span>change def<span></span>ault(direc<span></span>t) -&gt; &#39;cou<span></span>nters&#39;&gt;, &lt;<span></span>unbound Qu<span></span>eue &#39;event<span></span>s&#39; -&gt; Exch<span></span>ange defau<span></span>lt(direct)<span></span> -&gt; &#39;event<span></span>s&#39;&gt;, &lt;unbo<span></span>und Queue <span></span>&#39;triggers&#39;<span></span> -&gt; Exchan<span></span>ge default<span></span>(direct) -<span></span>&gt; &#39;trigger<span></span>s&#39;&gt;, &lt;unbo<span></span>und Queue <span></span>&#39;update&#39; -<span></span>&gt; Exchange<span></span> default(d<span></span>irect) -&gt; <span></span>&#39;update&#39;&gt;)</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_RESULT_BACKEND</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_SEND_EVENTS</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>CELERY_TASK_RESULT_EXPIRES</th>
                    <td class="code"><pre>1</pre></td>
                </tr>
            
                <tr>
                    <th>COMMENTS_ALLOW_PROFANITIES</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>CONF_ROOT</th>
                    <td class="code"><pre>&#39;.&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CSRF_COOKIE_DOMAIN</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>CSRF_COOKIE_NAME</th>
                    <td class="code"><pre>&#39;csrftoken<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CSRF_COOKIE_PATH</th>
                    <td class="code"><pre>&#39;/&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>CSRF_COOKIE_SECURE</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>CSRF_FAILURE_VIEW</th>
                    <td class="code"><pre>&#39;django.vi<span></span>ews.csrf.c<span></span>srf_failur<span></span>e&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DATABASES</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>DATABASE_ROUTERS</th>
                    <td class="code"><pre>[]</pre></td>
                </tr>
            
                <tr>
                    <th>DATETIME_FORMAT</th>
                    <td class="code"><pre>&#39;N j, Y, P<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DATETIME_INPUT_FORMATS</th>
                    <td class="code"><pre>(&#39;%Y-%m-%d<span></span> %H:%M:%S&#39;<span></span>, &#39;%Y-%m-%<span></span>d %H:%M:%S<span></span>.%f&#39;, &#39;%Y-<span></span>%m-%d %H:%<span></span>M&#39;, &#39;%Y-%m<span></span>-%d&#39;, &#39;%m/<span></span>%d/%Y %H:%<span></span>M:%S&#39;, &#39;%m<span></span>/%d/%Y %H:<span></span>%M:%S.%f&#39;,<span></span> &#39;%m/%d/%Y<span></span> %H:%M&#39;, &#39;<span></span>%m/%d/%Y&#39;,<span></span> &#39;%m/%d/%y<span></span> %H:%M:%S&#39;<span></span>, &#39;%m/%d/%<span></span>y %H:%M:%S<span></span>.%f&#39;, &#39;%m/<span></span>%d/%y %H:%<span></span>M&#39;, &#39;%m/%d<span></span>/%y&#39;)</pre></td>
                </tr>
            
                <tr>
                    <th>DATE_FORMAT</th>
                    <td class="code"><pre>&#39;N j, Y&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DATE_INPUT_FORMATS</th>
                    <td class="code"><pre>(&#39;%Y-%m-%d<span></span>&#39;, &#39;%m/%d/<span></span>%Y&#39;, &#39;%m/%<span></span>d/%y&#39;, &#39;%b<span></span> %d %Y&#39;, &#39;<span></span>%b %d, %Y&#39;<span></span>, &#39;%d %b %<span></span>Y&#39;, &#39;%d %b<span></span>, %Y&#39;, &#39;%B<span></span> %d %Y&#39;, &#39;<span></span>%B %d, %Y&#39;<span></span>, &#39;%d %B %<span></span>Y&#39;, &#39;%d %B<span></span>, %Y&#39;)</pre></td>
                </tr>
            
                <tr>
                    <th>DEBUG</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>DEBUG_PROPAGATE_EXCEPTIONS</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>DECIMAL_SEPARATOR</th>
                    <td class="code"><pre>&#39;.&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DEFAULT_CHARSET</th>
                    <td class="code"><pre>&#39;utf-8&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DEFAULT_CONTENT_TYPE</th>
                    <td class="code"><pre>&#39;text/html<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DEFAULT_EXCEPTION_REPORTER_FILTER</th>
                    <td class="code"><pre>&#39;django.vi<span></span>ews.debug.<span></span>SafeExcept<span></span>ionReporte<span></span>rFilter&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DEFAULT_FILE_STORAGE</th>
                    <td class="code"><pre>&#39;django.co<span></span>re.files.s<span></span>torage.Fil<span></span>eSystemSto<span></span>rage&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DEFAULT_FROM_EMAIL</th>
                    <td class="code"><pre>&#39;webmaster<span></span>@localhost<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DEFAULT_INDEX_TABLESPACE</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DEFAULT_TABLESPACE</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>DISALLOWED_USER_AGENTS</th>
                    <td class="code"><pre>()</pre></td>
                </tr>
            
                <tr>
                    <th>EMAIL_BACKEND</th>
                    <td class="code"><pre>&#39;django.co<span></span>re.mail.ba<span></span>ckends.smt<span></span>p.EmailBac<span></span>kend&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>EMAIL_HOST</th>
                    <td class="code"><pre>&#39;smtp.mail<span></span>gun.org&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>EMAIL_HOST_PASSWORD</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>EMAIL_HOST_USER</th>
                    <td class="code"><pre>&#39;hi@summic<span></span>.com&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>EMAIL_PORT</th>
                    <td class="code"><pre>587</pre></td>
                </tr>
            
                <tr>
                    <th>EMAIL_SUBJECT_PREFIX</th>
                    <td class="code"><pre>&#39;[Sentry] <span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>EMAIL_USE_TLS</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>FACEBOOK_API_SECRET</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>FACEBOOK_APP_ID</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>FACEBOOK_EXTENDED_PERMISSIONS</th>
                    <td class="code"><pre>[&#39;email&#39;]</pre></td>
                </tr>
            
                <tr>
                    <th>FILE_CHARSET</th>
                    <td class="code"><pre>&#39;utf-8&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>FILE_UPLOAD_HANDLERS</th>
                    <td class="code"><pre>(&#39;django.c<span></span>ore.files.<span></span>uploadhand<span></span>ler.Memory<span></span>FileUpload<span></span>Handler&#39;, <span></span>&#39;django.co<span></span>re.files.u<span></span>ploadhandl<span></span>er.Tempora<span></span>ryFileUplo<span></span>adHandler&#39;<span></span>)</pre></td>
                </tr>
            
                <tr>
                    <th>FILE_UPLOAD_MAX_MEMORY_SIZE</th>
                    <td class="code"><pre>2621440</pre></td>
                </tr>
            
                <tr>
                    <th>FILE_UPLOAD_PERMISSIONS</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>FILE_UPLOAD_TEMP_DIR</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>FIRST_DAY_OF_WEEK</th>
                    <td class="code"><pre>0</pre></td>
                </tr>
            
                <tr>
                    <th>FIXTURE_DIRS</th>
                    <td class="code"><pre>()</pre></td>
                </tr>
            
                <tr>
                    <th>FORCE_SCRIPT_NAME</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>FORMAT_MODULE_PATH</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>GITHUB_API_SECRET</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>GITHUB_APP_ID</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>GOOGLE_OAUTH2_CLIENT_ID</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>GOOGLE_OAUTH2_CLIENT_SECRET</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>IGNORABLE_404_URLS</th>
                    <td class="code"><pre>()</pre></td>
                </tr>
            
                <tr>
                    <th>INSTALLED_APPS</th>
                    <td class="code"><pre>[&#39;django.c<span></span>ontrib.aut<span></span>h&#39;, &#39;djang<span></span>o.contrib.<span></span>admin&#39;, &#39;d<span></span>jango.cont<span></span>rib.conten<span></span>ttypes&#39;, &#39;<span></span>django.con<span></span>trib.messa<span></span>ges&#39;, &#39;dja<span></span>ngo.contri<span></span>b.sessions<span></span>&#39;, &#39;django<span></span>.contrib.s<span></span>ites&#39;, &#39;dj<span></span>ango.contr<span></span>ib.staticf<span></span>iles&#39;, &#39;cr<span></span>ispy_forms<span></span>&#39;, &#39;djcele<span></span>ry&#39;, &#39;guni<span></span>corn&#39;, &#39;ko<span></span>mbu.transp<span></span>ort.django<span></span>&#39;, &#39;raven.<span></span>contrib.dj<span></span>ango.raven<span></span>_compat&#39;, <span></span>&#39;sentry&#39;, <span></span>&#39;sentry.no<span></span>destore&#39;, <span></span>&#39;sentry.se<span></span>arch&#39;, &#39;se<span></span>ntry.plugi<span></span>ns.sentry_<span></span>interface_<span></span>types&#39;, &#39;s<span></span>entry.plug<span></span>ins.sentry<span></span>_mail&#39;, &#39;s<span></span>entry.plug<span></span>ins.sentry<span></span>_urls&#39;, &#39;s<span></span>entry.plug<span></span>ins.sentry<span></span>_useragent<span></span>s&#39;, &#39;socia<span></span>l_auth&#39;, &#39;<span></span>south&#39;, &#39;s<span></span>tatic_comp<span></span>iler&#39;]</pre></td>
                </tr>
            
                <tr>
                    <th>INTERNAL_IPS</th>
                    <td class="code"><pre>(&#39;127.0.0.<span></span>1&#39;,)</pre></td>
                </tr>
            
                <tr>
                    <th>LANGUAGES</th>
                    <td class="code"><pre>((&#39;af&#39;, &#39;A<span></span>frikaans&#39;)<span></span>, (&#39;ar&#39;, &#39;<span></span>Arabic&#39;), <span></span>(&#39;az&#39;, &#39;Az<span></span>erbaijani&#39;<span></span>), (&#39;bg&#39;, <span></span>&#39;Bulgarian<span></span>&#39;), (&#39;be&#39;,<span></span> &#39;Belarusi<span></span>an&#39;), (&#39;bn<span></span>&#39;, &#39;Bengal<span></span>i&#39;), (&#39;br&#39;<span></span>, &#39;Breton&#39;<span></span>), (&#39;bs&#39;, <span></span>&#39;Bosnian&#39;)<span></span>, (&#39;ca&#39;, &#39;<span></span>Catalan&#39;),<span></span> (&#39;cs&#39;, &#39;C<span></span>zech&#39;), (&#39;<span></span>cy&#39;, &#39;Wels<span></span>h&#39;), (&#39;da&#39;<span></span>, &#39;Danish&339;<span></span>), (&#39;de&#39;, <span></span>&#39;German&#39;),<span></span> (&#39;el&#39;, &#39;G<span></span>reek&#39;), (&#39;<span></span>en&#39;, &#39;Engl<span></span>ish&#39;), (&#39;e<span></span>n-gb&#39;, &#39;Br<span></span>itish Engl<span></span>ish&#39;), (&#39;e<span></span>o&#39;, &#39;Esper<span></span>anto&#39;), (&#39;<span></span>es&#39;, &#39;Span<span></span>ish&#39;), (&#39;e<span></span>s-ar&#39;, &#39;Ar<span></span>gentinian <span></span>Spanish&#39;),<span></span> (&#39;es-mx&#39;,<span></span> &#39;Mexican <span></span>Spanish&#39;),<span></span> (&#39;es-ni&#39;,<span></span> &#39;Nicaragu<span></span>an Spanish<span></span>&#39;), (&#39;es-v<span></span>e&#39;, &#39;Venez<span></span>uelan Span<span></span>ish&#39;), (&#39;e<span></span>t&#39;, &#39;Eston<span></span>ian&#39;), (&#39;e<span></span>u&#39;, &#39;Basqu<span></span>e&#39;), (&#39;fa&#39;<span></span>, &#39;Persian<span></span>&#39;), (&#39;fi&#39;,<span></span> &#39;Finnish&#39;<span></span>), (&#39;fr&#39;, <span></span>&#39;French&#39;),<span></span> (&#39;fy-nl&#39;,<span></span> &#39;Frisian&#39;<span></span>), (&#39;ga&#39;, <span></span>&#39;Irish&#39;), <span></span>(&#39;gl&#39;, &#39;Ga<span></span>lician&#39;), <span></span>(&#39;he&#39;, &#39;He<span></span>brew&#39;), (&#39;<span></span>hi&#39;, &#39;Hind<span></span>i&#39;), (&#39;hr&#39;<span></span>, &#39;Croatia<span></span>n&#39;), (&#39;hu&#39;<span></span>, &#39;Hungari<span></span>an&#39;), (&#39;ia<span></span>&#39;, &#39;Interl<span></span>ingua&#39;), (<span></span>&#39;id&#39;, &#39;Ind<span></span>onesian&#39;),<span></span> (&#39;is&#39;, &#39;I<span></span>celandic&#39;)<span></span>, (&#39;it&#39;, &#39;<span></span>Italian&#39;),<span></span> (&#39;ja&#39;, &#39;J<span></span>apanese&#39;),<span></span> (&#39;ka&#39;, &#39;G<span></span>eorgian&#39;),<span></span> (&#39;kk&#39;, &#39;K<span></span>azakh&#39;), (<span></span>&#39;km&#39;, &#39;Khm<span></span>er&#39;), (&#39;kn<span></span>&#39;, &#39;Kannad<span></span>a&#39;), (&#39;ko&#39;<span></span>, &#39;Korean&#39;<span></span>), (&#39;lb&#39;, <span></span>&#39;Luxembour<span></span>gish&#39;), (&#39;<span></span>lt&#39;, &#39;Lith<span></span>uanian&#39;), <span></span>(&#39;lv&#39;, &#39;La<span></span>tvian&#39;), (<span></span>&#39;mk&#39;, &#39;Mac<span></span>edonian&#39;),<span></span> (&#39;ml&#39;, &#39;M<span></span>alayalam&#39;)<span></span>, (&#39;mn&#39;, &#39;<span></span>Mongolian&#39;<span></span>), (&#39;nb&#39;, <span></span>&#39;Norwegian<span></span> Bokmal&#39;),<span></span> (&#39;ne&#39;, &#39;N<span></span>epali&#39;), (<span></span>&#39;nl&#39;, &#39;Dut<span></span>ch&#39;), (&#39;nn<span></span>&#39;, &#39;Norweg<span></span>ian Nynors<span></span>k&#39;), (&#39;pa&#39;<span></span>, &#39;Punjabi<span></span>&#39;), (&#39;pl&#39;,<span></span> &#39;Polish&#39;)<span></span>, (&#39;pt&#39;, &#39;<span></span>Portuguese<span></span>&#39;), (&#39;pt-b<span></span>r&#39;, &#39;Brazi<span></span>lian Portu<span></span>guese&#39;), (<span></span>&#39;ro&#39;, &#39;Rom<span></span>anian&#39;), (<span></span>&#39;ru&#39;, &#39;Rus<span></span>sian&#39;), (&#39;<span></span>sk&#39;, &#39;Slov<span></span>ak&#39;), (&#39;sl<span></span>&#39;, &#39;Sloven<span></span>ian&#39;), (&#39;s<span></span>q&#39;, &#39;Alban<span></span>ian&#39;), (&#39;s<span></span>r&#39;, &#39;Serbi<span></span>an&#39;), (&#39;sr<span></span>-latn&#39;, &#39;S<span></span>erbian Lat<span></span>in&#39;), (&#39;sv<span></span>&#39;, &#39;Swedis<span></span>h&#39;), (&#39;sw&#39;<span></span>, &#39;Swahili<span></span>&#39;), (&#39;ta&#39;,<span></span> &#39;Tamil&#39;),<span></span> (&#39;te&#39;, &#39;T<span></span>elugu&#39;), (<span></span>&#39;th&#39;, &#39;Tha<span></span>i&#39;), (&#39;tr&#39;<span></span>, &#39;Turkish<span></span>&#39;), (&#39;tt&#39;,<span></span> &#39;Tatar&#39;),<span></span> (&#39;udm&#39;, &#39;<span></span>Udmurt&#39;), <span></span>(&#39;uk&#39;, &#39;Uk<span></span>rainian&#39;),<span></span> (&#39;ur&#39;, &#39;U<span></span>rdu&#39;), (&#39;v<span></span>i&#39;, &#39;Vietn<span></span>amese&#39;), (<span></span>&#39;zh-cn&#39;, &#39;<span></span>Simplified<span></span> Chinese&#39;)<span></span>, (&#39;zh-tw&#39;<span></span>, &#39;Traditi<span></span>onal Chine<span></span>se&#39;))</pre></td>
                </tr>
            
                <tr>
                    <th>LANGUAGES_BIDI</th>
                    <td class="code"><pre>(&#39;he&#39;, &#39;ar<span></span>&#39;, &#39;fa&#39;)</pre></td>
                </tr>
            
                <tr>
                    <th>LANGUAGE_CODE</th>
                    <td class="code"><pre>&#39;en-us&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>LANGUAGE_COOKIE_NAME</th>
                    <td class="code"><pre>&#39;django_la<span></span>nguage&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>LOCALE_PATHS</th>
                    <td class="code"><pre>(&#39;/root/se<span></span>ntry/src/s<span></span>entry/loca<span></span>le&#39;,)</pre></td>
                </tr>
            
                <tr>
                    <th>LOGGING</th>
                    <td class="code"><pre>{&#39;loggers&#39;<span></span>: {&#39;sentry<span></span>&#39;: {&#39;handl<span></span>ers&#39;: [&#39;co<span></span>nsole&#39;, &#39;s<span></span>entry&#39;], &#39;<span></span>propagate&#39;<span></span>: False, &#39;<span></span>level&#39;: &#39;E<span></span>RROR&#39;}, &#39;s<span></span>entry.core<span></span>api&#39;: {&#39;fo<span></span>rmatter&#39;: <span></span>&#39;client_in<span></span>fo&#39;}, &#39;()&#39;<span></span>: {&#39;handle<span></span>rs&#39;: [&#39;con<span></span>sole&#39;, &#39;se<span></span>ntry&#39;]}, &#39;<span></span>root&#39;: {&#39;h<span></span>andlers&#39;: <span></span>[&#39;console&#39;<span></span>, &#39;sentry&#39;<span></span>]}, &#39;sentr<span></span>y.errors&#39;:<span></span> {&#39;handler<span></span>s&#39;: [&#39;cons<span></span>ole&#39;], &#39;pr<span></span>opagate&#39;: <span></span>False, &#39;le<span></span>vel&#39;: &#39;ERR<span></span>OR&#39;}, &#39;dja<span></span>ngo.reques<span></span>t&#39;: {&#39;hand<span></span>lers&#39;: [&#39;c<span></span>onsole&#39;], <span></span>&#39;propagate<span></span>&#39;: False, <span></span>&#39;level&#39;: &#39;<span></span>ERROR&#39;}}, <span></span>&#39;version&#39;:<span></span> 1, &#39;forma<span></span>tters&#39;: {&#39;<span></span>client_inf<span></span>o&#39;: {&#39;form<span></span>at&#39;: &#39;%(na<span></span>me)s %(lev<span></span>elname)s %<span></span>(project_s<span></span>lug)s/%(te<span></span>am_slug)s <span></span>%(message)<span></span>s&#39;}}, &#39;dis<span></span>able_exist<span></span>ing_logger<span></span>s&#39;: True, <span></span>&#39;handlers&#39;<span></span>: {&#39;sentry<span></span>&#39;: {&#39;class<span></span>&#39;: &#39;raven.<span></span>contrib.dj<span></span>ango.handl<span></span>ers.Sentry<span></span>Handler&#39;},<span></span> &#39;console&#39;<span></span>: {&#39;class&#39;<span></span>: &#39;logging<span></span>.StreamHan<span></span>dler&#39;, &#39;le<span></span>vel&#39;: &#39;WAR<span></span>NING&#39;}}}</pre></td>
                </tr>
            
                <tr>
                    <th>LOGGING_CONFIG</th>
                    <td class="code"><pre>&#39;django.ut<span></span>ils.log.di<span></span>ctConfig&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>LOGIN_REDIRECT_URL</th>
                    <td class="code"><pre>&lt;django.ut<span></span>ils.functi<span></span>onal.__pro<span></span>xy__ objec<span></span>t at 0x265<span></span>1e50&gt;</pre></td>
                </tr>
            
                <tr>
                    <th>LOGIN_URL</th>
                    <td class="code"><pre>&lt;django.ut<span></span>ils.functi<span></span>onal.__pro<span></span>xy__ objec<span></span>t at 0x265<span></span>1f90&gt;</pre></td>
                </tr>
            
                <tr>
                    <th>LOGOUT_URL</th>
                    <td class="code"><pre>&#39;/accounts<span></span>/logout/&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>MANAGERS</th>
                    <td class="code"><pre>()</pre></td>
                </tr>
            
                <tr>
                    <th>MEDIA_ROOT</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>MEDIA_URL</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>MESSAGE_STORAGE</th>
                    <td class="code"><pre>&#39;django.co<span></span>ntrib.mess<span></span>ages.stora<span></span>ge.fallbac<span></span>k.Fallback<span></span>Storage&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>MIDDLEWARE_CLASSES</th>
                    <td class="code"><pre>(&#39;django.m<span></span>iddleware.<span></span>common.Com<span></span>monMiddlew<span></span>are&#39;, &#39;dja<span></span>ngo.contri<span></span>b.sessions<span></span>.middlewar<span></span>e.SessionM<span></span>iddleware&#39;<span></span>, &#39;django.<span></span>middleware<span></span>.csrf.Csrf<span></span>ViewMiddle<span></span>ware&#39;, &#39;dj<span></span>ango.contr<span></span>ib.auth.mi<span></span>ddleware.A<span></span>uthenticat<span></span>ionMiddlew<span></span>are&#39;, &#39;sen<span></span>try.middle<span></span>ware.Sentr<span></span>yMiddlewar<span></span>e&#39;, &#39;sentr<span></span>y.middlewa<span></span>re.SentryS<span></span>ocialAuthE<span></span>xceptionMi<span></span>ddleware&#39;,<span></span> &#39;django.m<span></span>iddleware.<span></span>locale.Loc<span></span>aleMiddlew<span></span>are&#39;, &#39;dja<span></span>ngo.contri<span></span>b.messages<span></span>.middlewar<span></span>e.MessageM<span></span>iddleware&#39;<span></span>)</pre></td>
                </tr>
            
                <tr>
                    <th>MONTH_DAY_FORMAT</th>
                    <td class="code"><pre>&#39;F j&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>NPM_ROOT</th>
                    <td class="code"><pre>&#39;/root/sen<span></span>try/node_m<span></span>odules&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>NUMBER_GROUPING</th>
                    <td class="code"><pre>0</pre></td>
                </tr>
            
                <tr>
                    <th>PASSWORD_HASHERS</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>PASSWORD_RESET_TIMEOUT_DAYS</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>PREPEND_WWW</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>PROFANITIES_LIST</th>
                    <td class="code"><pre>()</pre></td>
                </tr>
            
                <tr>
                    <th>PROJECT_ROOT</th>
                    <td class="code"><pre>&#39;/root/sen<span></span>try/src/se<span></span>ntry&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>ROOT_URLCONF</th>
                    <td class="code"><pre>&#39;sentry.co<span></span>nf.urls&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SECRET_KEY</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>SECURE_PROXY_SSL_HEADER</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>SEND_BROKEN_LINK_EMAILS</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_ALLOWED_INTERFACES</th>
                    <td class="code"><pre>set([&#39;sent<span></span>ry.interfa<span></span>ces.Query&#39;<span></span>, &#39;sentry.<span></span>interfaces<span></span>.User&#39;, &#39;s<span></span>entry.inte<span></span>rfaces.Mes<span></span>sage&#39;, &#39;se<span></span>ntry.inter<span></span>faces.Http<span></span>&#39;, &#39;sentry<span></span>.interface<span></span>s.Template<span></span>&#39;, &#39;sentry<span></span>.interface<span></span>s.Exceptio<span></span>n&#39;, &#39;sentr<span></span>y.interfac<span></span>es.Stacktr<span></span>ace&#39;])</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_ALLOW_ORIGIN</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_ALLOW_PROJECT_CREATION</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_ALLOW_PUBLIC_PROJECTS</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_ALLOW_REGISTRATION</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_ALLOW_TEAM_CREATION</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_BUFFER</th>
                    <td class="code"><pre>&#39;sentry.bu<span></span>ffer.Buffe<span></span>r&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_BUFFER_OPTIONS</th>
                    <td class="code"><pre>{}</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_CACHE_BACKEND</th>
                    <td class="code"><pre>&#39;default&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_DEFAULT_MAX_EVENTS_PER_MINUTE</th>
                    <td class="code"><pre>&#39;90%&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_ENABLE_EXPLORE_CODE</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_ENABLE_EXPLORE_USERS</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_ENDPOINT</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_FILTERS</th>
                    <td class="code"><pre>(&#39;sentry.f<span></span>ilters.Sta<span></span>tusFilter&#39;<span></span>,)</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_KEY</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_LOGIN_URL</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_MAX_SAMPLE_RATE</th>
                    <td class="code"><pre>10000</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_MAX_SAMPLE_TIME</th>
                    <td class="code"><pre>10000</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_NODESTORE</th>
                    <td class="code"><pre>&#39;sentry.no<span></span>destore.dj<span></span>ango.Djang<span></span>oNodeStora<span></span>ge&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_NODESTORE_OPTIONS</th>
                    <td class="code"><pre>{}</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_PROJECT</th>
                    <td class="code"><pre>1</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_PUBLIC</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_PUBLIC_ENDPOINT</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_QUEUE</th>
                    <td class="code"><pre>{&#39;transpor<span></span>t&#39;: &#39;kombu<span></span>.transport<span></span>.django.Tr<span></span>ansport&#39;}</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_QUOTAS</th>
                    <td class="code"><pre>&#39;sentry.qu<span></span>otas.Quota<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_QUOTA_OPTIONS</th>
                    <td class="code"><pre>{}</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_RAVEN_JS_URL</th>
                    <td class="code"><pre>&#39;d3nslu0hd<span></span>ya83q.clou<span></span>dfront.net<span></span>/dist/1.0/<span></span>raven.min.<span></span>js&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_REDIS_OPTIONS</th>
                    <td class="code"><pre>{}</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_SAMPLE_DATA</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_SAMPLE_RATES</th>
                    <td class="code"><pre>((50, 1), <span></span>(1000, 2),<span></span> (10000, 1<span></span>0), (10000<span></span>0, 50), (1<span></span>000000, 30<span></span>0), (10000<span></span>000, 2000)<span></span>)</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_SAMPLE_TIMES</th>
                    <td class="code"><pre>((3600, 1)<span></span>, (360, 10<span></span>), (60, 60<span></span>))</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_SCRAPE_JAVASCRIPT_CONTEXT</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_SEARCH</th>
                    <td class="code"><pre>&#39;sentry.se<span></span>arch.djang<span></span>o.DjangoSe<span></span>archBacken<span></span>d&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_SEARCH_OPTIONS</th>
                    <td class="code"><pre>{}</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_STATIC_BUNDLES</th>
                    <td class="code"><pre>{&#39;packages<span></span>&#39;: {&#39;sentr<span></span>y/scripts/<span></span>lib.min.js<span></span>&#39;: {&#39;src&#39;:<span></span> [&#39;sentry/<span></span>scripts/li<span></span>b/jquery.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>lib/jquery<span></span>-migrate.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>lib/jquery<span></span>.animate-c<span></span>olors.js&#39;,<span></span> &#39;sentry/s<span></span>cripts/lib<span></span>/jquery.cl<span></span>ippy.min.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>lib/jquery<span></span>.cookie.js<span></span>&#39;, &#39;sentry<span></span>/scripts/l<span></span>ib/jquery.<span></span>flot.js&#39;, <span></span>&#39;sentry/sc<span></span>ripts/lib/<span></span>jquery.flo<span></span>t.dashes.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>lib/jquery<span></span>.flot.resi<span></span>ze.js&#39;, &#39;s<span></span>entry/scri<span></span>pts/lib/jq<span></span>uery.flot.<span></span>time.js&#39;, <span></span>&#39;sentry/sc<span></span>ripts/lib/<span></span>jquery.flo<span></span>t.tooltip.<span></span>js&#39;, &#39;sent<span></span>ry/scripts<span></span>/lib/momen<span></span>t.js&#39;, &#39;se<span></span>ntry/scrip<span></span>ts/lib/sim<span></span>ple-slider<span></span>.js&#39;, &#39;sen<span></span>try/script<span></span>s/lib/json<span></span>2.js&#39;, &#39;se<span></span>ntry/scrip<span></span>ts/lib/und<span></span>erscore.js<span></span>&#39;, &#39;sentry<span></span>/scripts/l<span></span>ib/backbon<span></span>e.js&#39;, &#39;se<span></span>ntry/scrip<span></span>ts/lib/sel<span></span>ect2/selec<span></span>t2.js&#39;]}, <span></span>&#39;sentry/sc<span></span>ripts/glob<span></span>al.min.js&#39;<span></span>: {&#39;src&#39;: <span></span>[&#39;sentry/s<span></span>cripts/cor<span></span>e.js&#39;, &#39;se<span></span>ntry/scrip<span></span>ts/models.<span></span>js&#39;, &#39;sent<span></span>ry/scripts<span></span>/templates<span></span>.js&#39;, &#39;sen<span></span>try/script<span></span>s/utils.js<span></span>&#39;, &#39;sentry<span></span>/scripts/c<span></span>ollections<span></span>.js&#39;, &#39;sen<span></span>try/script<span></span>s/charts.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>views.js&#39;,<span></span> &#39;sentry/s<span></span>cripts/app<span></span>.js&#39;]}, &#39;s<span></span>entry/styl<span></span>es/wall.mi<span></span>n.css&#39;: {&#39;<span></span>src&#39;: {&#39;se<span></span>ntry/less/<span></span>wall.less&#39;<span></span>: &#39;sentry/<span></span>styles/wal<span></span>l.css&#39;}}, <span></span>&#39;sentry/sc<span></span>ripts/boot<span></span>strap.min.<span></span>js&#39;: {&#39;src<span></span>&#39;: [&#39;sentr<span></span>y/bootstra<span></span>p/js/boots<span></span>trap-trans<span></span>ition.js&#39;,<span></span> &#39;sentry/b<span></span>ootstrap/j<span></span>s/bootstra<span></span>p-alert.js<span></span>&#39;, &#39;sentry<span></span>/bootstrap<span></span>/js/bootst<span></span>rap-button<span></span>.js&#39;, &#39;sen<span></span>try/bootst<span></span>rap/js/boo<span></span>tstrap-car<span></span>ousel.js&#39;,<span></span> &#39;sentry/b<span></span>ootstrap/j<span></span>s/bootstra<span></span>p-collapse<span></span>.js&#39;, &#39;sen<span></span>try/bootst<span></span>rap/js/boo<span></span>tstrap-dro<span></span>pdown.js&#39;,<span></span> &#39;sentry/b<span></span>ootstrap/j<span></span>s/bootstra<span></span>p-modal.js<span></span>&#39;, &#39;sentry<span></span>/bootstrap<span></span>/js/bootst<span></span>rap-toolti<span></span>p.js&#39;, &#39;se<span></span>ntry/boots<span></span>trap/js/bo<span></span>otstrap-po<span></span>pover.js&#39;,<span></span> &#39;sentry/b<span></span>ootstrap/j<span></span>s/bootstra<span></span>p-scrollsp<span></span>y.js&#39;, &#39;se<span></span>ntry/boots<span></span>trap/js/bo<span></span>otstrap-ta<span></span>b.js&#39;, &#39;se<span></span>ntry/boots<span></span>trap/js/bo<span></span>otstrap-ty<span></span>peahead.js<span></span>&#39;, &#39;sentry<span></span>/bootstrap<span></span>/js/bootst<span></span>rap-affix.<span></span>js&#39;, &#39;sent<span></span>ry/scripts<span></span>/lib/boots<span></span>trap-datep<span></span>icker.js&#39;]<span></span>}, &#39;sentry<span></span>/styles/gl<span></span>obal.min.c<span></span>ss&#39;: {&#39;src<span></span>&#39;: {&#39;sentr<span></span>y/less/sen<span></span>try.less&#39;:<span></span> &#39;sentry/s<span></span>tyles/sent<span></span>ry.css&#39;}},<span></span> &#39;sentry/s<span></span>cripts/leg<span></span>acy.min.js<span></span>&#39;: {&#39;src&#39;:<span></span> [&#39;sentry/<span></span>scripts/se<span></span>ntry.core.<span></span>js&#39;, &#39;sent<span></span>ry/scripts<span></span>/sentry.ch<span></span>arts.js&#39;, <span></span>&#39;sentry/sc<span></span>ripts/sent<span></span>ry.stream.<span></span>js&#39;]}}, &#39;p<span></span>ostcompile<span></span>rs&#39;: {&#39;*.j<span></span>s&#39;: [&#39;node<span></span>_modules/u<span></span>glify-js/b<span></span>in/uglifyj<span></span>s {input} <span></span>--source-m<span></span>ap-root={r<span></span>elroot}/ -<span></span>-source-ma<span></span>p-url={nam<span></span>e}.map{ext<span></span>} --source<span></span>-map={relp<span></span>ath}/{name<span></span>}.map{ext}<span></span> -o {outpu<span></span>t}&#39;]}, &#39;pr<span></span>eprocessor<span></span>s&#39;: {&#39;*.le<span></span>ss&#39;: [&#39;nod<span></span>e_modules/<span></span>less/bin/l<span></span>essc {inpu<span></span>t} {output<span></span>}&#39;]}}</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_SYSTEM_MAX_EVENTS_PER_MINUTE</th>
                    <td class="code"><pre>0</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_UDP_HOST</th>
                    <td class="code"><pre>&#39;localhost<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_UDP_PORT</th>
                    <td class="code"><pre>9001</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_URL_PREFIX</th>
                    <td class="code"><pre>&#39;http://19<span></span>8.199.94.3<span></span>6:8080&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_USE_SEARCH</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_USE_TRENDING</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_WEB_HOST</th>
                    <td class="code"><pre>&#39;198.199.9<span></span>4.36&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_WEB_OPTIONS</th>
                    <td class="code"><pre>{&#39;workers&#39;<span></span>: 3, &#39;secu<span></span>re_scheme_<span></span>headers&#39;: <span></span>{&#39;X-FORWAR<span></span>DED-PROTO&#39;<span></span>: &#39;https&#39;}<span></span>, &#39;limit_r<span></span>equest_lin<span></span>e&#39;: 0}</pre></td>
                </tr>
            
                <tr>
                    <th>SENTRY_WEB_PORT</th>
                    <td class="code"><pre>8080</pre></td>
                </tr>
            
                <tr>
                    <th>SERVER_EMAIL</th>
                    <td class="code"><pre>&#39;root@loca<span></span>lhost&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_CACHE_ALIAS</th>
                    <td class="code"><pre>&#39;default&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_COOKIE_AGE</th>
                    <td class="code"><pre>1209600</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_COOKIE_DOMAIN</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_COOKIE_HTTPONLY</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_COOKIE_NAME</th>
                    <td class="code"><pre>&#39;sessionid<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_COOKIE_PATH</th>
                    <td class="code"><pre>&#39;/&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_COOKIE_SECURE</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_ENGINE</th>
                    <td class="code"><pre>&#39;django.co<span></span>ntrib.sess<span></span>ions.backe<span></span>nds.signed<span></span>_cookies&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_EXPIRE_AT_BROWSER_CLOSE</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_FILE_PATH</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_SAVE_EVERY_REQUEST</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>SESSION_SERIALIZER</th>
                    <td class="code"><pre>&#39;django.co<span></span>ntrib.sess<span></span>ions.seria<span></span>lizers.Pic<span></span>kleSeriali<span></span>zer&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SETTINGS_MODULE</th>
                    <td class="code"><pre>&#39;sentry_co<span></span>nfig&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SHORT_DATETIME_FORMAT</th>
                    <td class="code"><pre>&#39;m/d/Y P&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SHORT_DATE_FORMAT</th>
                    <td class="code"><pre>&#39;m/d/Y&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SIGNING_BACKEND</th>
                    <td class="code"><pre>&#39;django.co<span></span>re.signing<span></span>.Timestamp<span></span>Signer&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SITE_ID</th>
                    <td class="code"><pre>1</pre></td>
                </tr>
            
                <tr>
                    <th>SOCIAL_AUTH_CREATE_USERS</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>SOCIAL_AUTH_DEFAULT_USERNAME</th>
                    <td class="code"><pre>&lt;function <span></span>&lt;lambda&gt; a<span></span>t 0x269a8c<span></span>0&gt;</pre></td>
                </tr>
            
                <tr>
                    <th>SOCIAL_AUTH_PIPELINE</th>
                    <td class="code"><pre>(&#39;social_a<span></span>uth.backen<span></span>ds.pipelin<span></span>e.social.s<span></span>ocial_auth<span></span>_user&#39;, &#39;s<span></span>ocial_auth<span></span>.backends.<span></span>pipeline.a<span></span>ssociate.a<span></span>ssociate_b<span></span>y_email&#39;, <span></span>&#39;social_au<span></span>th.backend<span></span>s.pipeline<span></span>.misc.savespan></span>_status_to<span></span>_session&#39;,<span></span> &#39;sentry.u<span></span>tils.socia<span></span>l_auth.cre<span></span>ate_user_i<span></span>f_enabled&#39;<span></span>, &#39;social_<span></span>auth.backe<span></span>nds.pipeli<span></span>ne.social.<span></span>associate_<span></span>user&#39;, &#39;so<span></span>cial_auth.<span></span>backends.p<span></span>ipeline.so<span></span>cial.load_<span></span>extra_data<span></span>&#39;, &#39;social<span></span>_auth.back<span></span>ends.pipel<span></span>ine.user.u<span></span>pdate_user<span></span>_details&#39;,<span></span> &#39;social_a<span></span>uth.backen<span></span>ds.pipelin<span></span>e.misc.sav<span></span>e_status_t<span></span>o_session&#39;<span></span>)</pre></td>
                </tr>
            
                <tr>
                    <th>SOCIAL_AUTH_PROTECTED_USER_FIELDS</th>
                    <td class="code"><pre>[&#39;email&#39;]</pre></td>
                </tr>
            
                <tr>
                    <th>SOCIAL_AUTH_USER_MODEL</th>
                    <td class="code"><pre>&#39;auth.User<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>SOUTH_TESTS_MIGRATE</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>STATICFILES_DIRS</th>
                    <td class="code"><pre>()</pre></td>
                </tr>
            
                <tr>
                    <th>STATICFILES_FINDERS</th>
                    <td class="code"><pre>(&#39;django.c<span></span>ontrib.sta<span></span>ticfiles.f<span></span>inders.Fil<span></span>eSystemFin<span></span>der&#39;, &#39;dja<span></span>ngo.contri<span></span>b.staticfi<span></span>les.finder<span></span>s.AppDirec<span></span>toriesFind<span></span>er&#39;, &#39;stat<span></span>ic_compile<span></span>r.finders.<span></span>StaticComp<span></span>ilerFinder<span></span>&#39;)</pre></td>
                </tr>
            
                <tr>
                    <th>STATICFILES_STORAGE</th>
                    <td class="code"><pre>&#39;django.co<span></span>ntrib.stat<span></span>icfiles.st<span></span>orage.Stat<span></span>icFilesSto<span></span>rage&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>STATIC_BUNDLES</th>
                    <td class="code"><pre>{&#39;packages<span></span>&#39;: {&#39;sentr<span></span>y/scripts/<span></span>lib.min.js<span></span>&#39;: {&#39;src&#39;:<span></span> [&#39;sentry/<span></span>scripts/li<span></span>b/jquery.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>lib/jquery<span></span>-migrate.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>lib/jquery<span></span>.animate-c<span></span>olors.js&#39;,<span></span> &#39;sentry/s<span></span>cripts/lib<span></span>/jquery.cl<span></span>ippy.min.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>lib/jquery<span></span>.cookie.js<span></span>&#39;, &#39;sentry<span></span>/scripts/l<span></span>ib/jquery.<span></span>flot.js&#39;, <span></span>&#39;sentry/sc<span></span>ripts/lib/<span></span>jquery.flo<span></span>t.dashes.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>lib/jquery<span></span>.flot.resi<span></span>ze.js&#39;, &#39;s<span></span>entry/scri<span></span>pts/lib/jq<span></span>uery.flot.<span></span>time.js&#39;, <span></span>&#39;sentry/sc<span></span>ripts/lib/<span></span>jquery.flo<span></span>t.tooltip.<span></span>js&#39;, &#39;sent<span></span>ry/scripts<span></span>/lib/momen<span></span>t.js&#39;, &#39;se<span></span>ntry/scrip<span></span>ts/lib/sim<span></span>ple-slider<span></span>.js&#39;, &#39;sen<span></span>try/script<span></span>s/lib/json<span></span>2.js&#39;, &#39;se<span></span>ntry/scrip<span></span>ts/lib/und<span></span>erscore.js<span></span>&#39;, &#39;sentry<span></span>/scripts/l<span></span>ib/backbon<span></span>e.js&#39;, &#39;se<span></span>ntry/scrip<span></span>ts/lib/sel<span></span>ect2/selec<span></span>t2.js&#39;]}, <span></span>&#39;sentry/sc<span></span>ripts/glob<span></span>al.min.js&#39;<span></span>: {&#39;src&#39;: <span></span>[&#39;sentry/s<span></span>cripts/cor<span></span>e.js&#39;, &#39;se<span></span>ntry/scrip<span></span>ts/models.<span></span>js&#39;, &#39;sent<span></span>ry/scripts<span></span>/templates<span></span>.js&#39;, &#39;sen<span></span>try/script<span></span>s/utils.js<span></span>&#39;, &#39;sentry<span></span>/scripts/c<span></span>ollections<span></span>.js&#39;, &#39;sen<span></span>try/script<span></span>s/charts.j<span></span>s&#39;, &#39;sentr<span></span>y/scripts/<span></span>views.js&#39;,<span></span> &#39;sentry/s<span></span>cripts/app<span></span>.js&#39;]}, &#39;s<span></span>entry/styl<span></span>es/wall.mi<span></span>n.css&#39;: {&#39;<span></span>src&#39;: {&#39;se<span></span>ntry/less/<span></span>wall.less&#39;<span></span>: &#39;sentry/<span></span>styles/wal<span></span>l.css&#39;}}, <span></span>&#39;sentry/sc<span></span>ripts/boot<span></span>strap.min.<span></span>js&#39;: {&#39;src<span></span>&#39;: [&#39;sentr<span></span>y/bootstra<span></span>p/js/boots<span></span>trap-trans<span></span>ition.js&#39;,<span></span> &#39;sentry/b<span></span>ootstrap/j<span></span>s/bootstra<span></span>p-alert.js<span></span>&#39;, &#39;sentry<span></span>/bootstrap<span></span>/js/bootst<span></span>rap-button<span></span>.js&#39;, &#39;sen<span></span>try/bootst<span></span>rap/js/boo<span></span>tstrap-car<span></span>ousel.js&#39;,<span></span> &#39;sentry/b<span></span>ootstrap/j<span></span>s/bootstra<span></span>p-collapse<span></span>.js&#39;, &#39;sen<span></span>try/bootst<span></span>rap/js/boo<span></span>tstrap-dro<span></span>pdown.js&#39;,<span></span> &#39;sentry/b<span></span>ootstrap/j<span></span>s/bootstra<span></span>p-modal.js<span></span>&#39;, &#39;sentry<span></span>/bootstrap<span></span>/js/bootst<span></span>rap-toolti<span></span>p.js&#39;, &#39;se<span></span>ntry/boots<span></span>trap/js/bo<span></span>otstrap-po<span></span>pover.js&#39;,<span></span> &#39;sentry/b<span></span>ootstrap/j<span></span>s/bootstra<span></span>p-scrollsp<span></span>y.js&#39;, &#39;se<span></span>ntry/boots<span></span>trap/js/bo<span></span>otstrap-ta<span></span>b.js&#39;, &#39;se<span></span>ntry/boots<span></span>trap/js/bo<span></span>otstrap-ty<span></span>peahead.js<span></span>&#39;, &#39;sentry<span></span>/bootstrap<span></span>/js/bootst<span></span>rap-affix.<span></span>js&#39;, &#39;sent<span></span>ry/scripts<span></span>/lib/boots<span></span>trap-datep<span></span>icker.js&339;]<span></span>}, &#39;sentry<span></span>/styles/gl<span></span>obal.min.c<span></span>ss&#39;: {&#39;src<span></span>&#39;: {&#39;sentr<span></span>y/less/sen<span></span>try.less&#39;:<span></span> &#39;sentry/s<span></span>tyles/sent<span></span>ry.css&#39;}},<span></span> &#39;sentry/s<span></span>cripts/leg<span></span>acy.min.js<span></span>&#39;: {&#39;src&#39;:<span></span> [&#39;sentry/<span></span>scripts/se<span></span>ntry.core.<span></span>js&#39;, &#39;sent<span></span>ry/scripts<span></span>/sentry.ch<span></span>arts.js&#39;, <span></span>&#39;sentry/sc<span></span>ripts/sent<span></span>ry.stream.<span></span>js&#39;]}}, &#39;p<span></span>ostcompile<span></span>rs&#39;: {&#39;*.j<span></span>s&#39;: [&#39;node<span></span>_modules/u<span></span>glify-js/b<span></span>in/uglifyj<span></span>s {input} <span></span>--source-m<span></span>ap-root={r<span></span>elroot}/ -<span></span>-source-ma<span></span>p-url={nam<span></span>e}.map{ext<span></span>} --source<span></span>-map={relp<span></span>ath}/{name<span></span>}.map{ext}<span></span> -o {outpu<span></span>t}&#39;]}, &#39;pr<span></span>eprocessor<span></span>s&#39;: {&#39;*.le<span></span>ss&#39;: [&#39;nod<span></span>e_modules/<span></span>less/bin/l<span></span>essc {inpu<span></span>t} {output<span></span>}&#39;]}}</pre></td>
                </tr>
            
                <tr>
                    <th>STATIC_ROOT</th>
                    <td class="code"><pre>&#39;/root/sen<span></span>try/src/se<span></span>ntry/stati<span></span>c&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>STATIC_URL</th>
                    <td class="code"><pre>&#39;/_static/<span></span>&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>TEMPLATE_CONTEXT_PROCESSORS</th>
                    <td class="code"><pre>(&#39;django.c<span></span>ontrib.aut<span></span>h.context_<span></span>processors<span></span>.auth&#39;, &#39;d<span></span>jango.cont<span></span>rib.messag<span></span>es.context<span></span>_processor<span></span>s.messages<span></span>&#39;, &#39;django<span></span>.core.cont<span></span>ext_proces<span></span>sors.csrf&#39;<span></span>, &#39;social_<span></span>auth.conte<span></span>xt_process<span></span>ors.social<span></span>_auth_by_n<span></span>ame_backen<span></span>ds&#39;, &#39;soci<span></span>al_auth.co<span></span>ntext_proc<span></span>essors.soc<span></span>ial_auth_b<span></span>ackends&#39;, <span></span>&#39;social_au<span></span>th.context<span></span>_processor<span></span>s.social_a<span></span>uth_by_typ<span></span>e_backends<span></span>&#39;, &#39;social<span></span>_auth.cont<span></span>ext_proces<span></span>sors.socia<span></span>l_auth_log<span></span>in_redirec<span></span>t&#39;)</pre></td>
                </tr>
            
                <tr>
                    <th>TEMPLATE_DEBUG</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>TEMPLATE_DIRS</th>
                    <td class="code"><pre>(&#39;/root/se<span></span>ntry/src/s<span></span>entry/temp<span></span>lates&#39;,)</pre></td>
                </tr>
            
                <tr>
                    <th>TEMPLATE_LOADERS</th>
                    <td class="code"><pre>(&#39;django.t<span></span>emplate.lo<span></span>aders.file<span></span>system.Loa<span></span>der&#39;, &#39;dja<span></span>ngo.templa<span></span>te.loaders<span></span>.app_direc<span></span>tories.Loa<span></span>der&#39;)</pre></td>
                </tr>
            
                <tr>
                    <th>TEMPLATE_STRING_IF_INVALID</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>TEST_RUNNER</th>
                    <td class="code"><pre>&#39;django.te<span></span>st.simple.<span></span>DjangoTest<span></span>SuiteRunne<span></span>r&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>THOUSAND_SEPARATOR</th>
                    <td class="code"><pre>&#39;,&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>TIME_FORMAT</th>
                    <td class="code"><pre>&#39;P&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>TIME_INPUT_FORMATS</th>
                    <td class="code"><pre>(&#39;%H:%M:%S<span></span>&#39;, &#39;%H:%M&#39;<span></span>)</pre></td>
                </tr>
            
                <tr>
                    <th>TIME_ZONE</th>
                    <td class="code"><pre>&#39;UTC&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>TRANSACTIONS_MANAGED</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>TRELLO_API_KEY</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>TRELLO_API_SECRET</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>TWITTER_CONSUMER_KEY</th>
                    <td class="code"><pre>&#39;&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>TWITTER_CONSUMER_SECRET</th>
                    <td class="code"><pre>**********<span></span>******</pre></td>
                </tr>
            
                <tr>
                    <th>USE_ETAGS</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>USE_I18N</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>USE_L10N</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>USE_THOUSAND_SEPARATOR</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>USE_TZ</th>
                    <td class="code"><pre>True</pre></td>
                </tr>
            
                <tr>
                    <th>USE_X_FORWARDED_HOST</th>
                    <td class="code"><pre>False</pre></td>
                </tr>
            
                <tr>
                    <th>WSGI_APPLICATION</th>
                    <td class="code"><pre>None</pre></td>
                </tr>
            
                <tr>
                    <th>X_FRAME_OPTIONS</th>
                    <td class="code"><pre>&#39;SAMEORIGI<span></span>N&#39;</pre></td>
                </tr>
            
                <tr>
                    <th>YEAR_MONTH_FORMAT</th>
                    <td class="code"><pre>&#39;F Y&#39;</pre></td>
                </tr>
            
        </tbody>
    </table>

    </section>

                        </div>

                        <div class="sidebar">
                            
    <h6>Overview</h6>
    <ul class="nav nav-tabs nav-stacked">
        <li><a href="/manage/teams/">Teams</a></li>
        <li><a href="/manage/projects/">Projects</a></li>
        <li><a href="/manage/users/">Users</a></li>
    </ul>

    
        
            <h6>Plugins</h6>
            <ul class="nav nav-tabs nav-stacked">
                
            </ul>
        
    

    <h6>Server Status</h6>
    <ul class="nav nav-tabs nav-stacked">
        <li class="active"><a href="/manage/status/">Environment</a></li>
        <li><a href="/manage/status/packages/">Packages</a></li>
        <li><a href="/manage/status/mail/">Mail</a></li>
    </ul>
    <h6>Statistics</h6>
    <ul class="nav nav-tabs nav-stacked">
        <li><a href="/manage/stats/">Overview</a></li>
    </ul>

                        </div>
                    

                    
                    
                </div>
            </div>
        </section>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="robots" content="NONE,NOARCHIVE">
        <link href="/static/images/favicon.ico" rel="shortcut icon" type="image/png"/> 
        <link href="/static/styles/global.min.css" rel="stylesheet" type="text/css" />
        <title>Sentry</title>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="/static/scripts/lib/html5shiv.js"></script>
        <![endif]-->       
            <script src="/static/scripts/lib.min.js" type="text/javascript" ></script>
            <script src="/static/scripts/bootstrap.min.js" type="text/javascript" ></script>
            <script src="/static/scripts/global.min.js" type="text/javascript" ></script>
            <script src="/static/scripts/legacy.min.js" type="text/javascript" ></script>
            <script type="text/javascript">
                moment.lang('en');            
	            app.config.popupCss = '/static/styles/popup.css';
	            app.config.mediaUrl = '/static/';
	            app.config.urlPrefix = "http://198.199.94.36:8080";
                app.config.projectId = null;
                app.config.teamId = null;
            </script>        
    </head>
    <body class="<?php echo $this->class?>">
        <div class="outer-wrapper">
            <header id="header">
                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <div class="container">
                            <a id="logo" href="/">Sentry</a>                            
                            <h1><?php echo $this->title?></h1>
                           	<ul class="nav pull-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="avatar" src="https://secure.gravatar.com/avatar/3dd58b1eac9406ae08099585c409316b?s=20&d=mm"> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/account/settings/">Account</a></li>
                                        <li><a href="/">Teams</a></li>                                                
                                        <li><a href="/manage/status/">Admin</a></li>                                                
                                        <li class="divider">
                                        <li><a href="/logout/">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                         </div>
                    </div>
                </div>
            </header>
		    <section id="page-header" class="toolbar" style="height:5px;">
    		</section>
	        <?php echo $content; ?>
	        <footer>
	            <div class="container">
	                    <div class="contribute">Vision Ward is <a href="http://en.wikipedia.org/wiki/Open-source_software">Open Source Software</a>
	                    <a href="https://github.com/getsentry/sentry" class="btn btn-small">Contribute</a></div>
	                    <div class="version">VW 1.0 based on Sentry 6.4.0 (812568f) </div>
	                    <div class="credits">Handcrafted by the <a href="https://dbc.isd.com">DBC team</a> and its <a href="https://github.com/getsentry/sentry/contributors">many contributors</a></div>
	            </div>
	        </footer>
	    </div>
        <script type="text/javascript">
        $(function(){
            $('.clippy').clippy({
                clippy_path: '/static/clippy.swf',
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
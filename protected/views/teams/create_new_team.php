<section id="page-header" class="toolbar" style="height:5px;"></section>
<section id="content" class="">
    <div class="container">
        <div class="content">
            <div class="main">
                <div id="messages"></div>
                <section class="body">
                    <div class="page-header">
                        <h2>创建一个新的团队</h2>
                    </div>
                    <p>团队代表一组用户和项目。允许您控制事件访问和范围。</p>
                    <br>
                    <form class="form-stacked" action="" method="post">
                        <input type='hidden' name='csrfmiddlewaretoken' value='d8F2lNw9LY5twkEm4Coa53orH5BgpRrP' />
                        <fieldset>
                            <div id="div_id_name" class="control-group">
                                <label for="id_name" class="control-label requiredField">
                                    团队名称<span class="asteriskField">*</span>
                                </label>
                                <div class="controls">
                                    <input class="textinput textInput" id="id_name" maxlength="200" name="name" placeholder="数据运维组" type="text" />
                                </div>
                            </div>
                            <div id="div_id_owner" class="control-group">
                                <label for="id_owner" class="control-label ">
                                    所有者
                                </label>
                                <div class="controls">
                                    <input class="widget" id="id_owner" name="owner" placeholder="username" type="text" value="summic" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="actions">
                            <button type="submit" class="btn btn-primary">创建团队</button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="sidebar">
            </div>
        </div>
    </div>
</section>
<?php
$this->pageTitle=Yii::app()->name . ' - Error';
?>
<section id="page-header" class="toolbar" style="height:5px;"></section>
<section id="content" class="team-index ">
    <div class="container">
        <div class="content">
            <div class="main">
                <div id="messages"></div>
                <section class="body">
                    <h2>Error <?php echo $code; ?></h2>
                    <div class="error">
                    <?php echo CHtml::encode($message); ?>
                    </div>
                </section>

            </div>
            <div class="sidebar">
            </div>
            <script type="text/javascript">
                $(function(){
                    new app.SelectTeamPage();
                })
            </script>
        </div>
    </div>
</section>
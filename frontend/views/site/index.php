<?php

/* @var $this yii\web\View */

use yii\web\View;

$this->title = '云简历';
?>




<header id="header">
    <div class="vtable">
        <div class="vcell">
            <div class="container">
                <h1 class="animated">重新定义你的职业形象.<br/></h1>
                <h2 class="animated"> 在几分钟内建立一个美丽的简历，以获得你的梦想工作.</h2>
                <button class="button yellow animated signup">注册测试版</button>
            </div>
        </div>
    </div>

    <div class="papers hidden-xs">
        <div class="left">
            <img src="/img/cv_half@2x.png"
                 class="img-responsive" alt="">
        </div>
        <div class="right">
            <img src="/img/cv_half2@2x.png"
                 class="img-responsive" alt="">
        </div>
        <div class="bottom">
            <img src="/img/cv_new@2x.jpg" class="img-responsive"
                 alt="">
        </div>
    </div>

    <div class="paper visible-xs">
        <img src="/img/cv_new@2x.jpg" class="img-responsive"
             alt="">
    </div>
</header>

<section class="fill white shadow" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10">


                <div class="blocks features">


                    <div>
                        <div class="image">
                            <img src="/img/illustration1@2x-1.png"
                                 alt="Designer crafted templates" class="img-responsive">
                        </div>
                        <div class="content">
                            <div class="name">可定制的</div>
                            <h3 class="title">设计师制作的模板</h3>
                            <div class="description"><p>我们的顶级设计师的色彩主题和布局吨吨，以
                                    匹配任何用户的需求.</p>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="image">
                            <img src="/img/illustration2@2x-1.png"
                                 alt="Export to PDF or send unique URL" class="img-responsive">
                        </div>
                        <div class="content">
                            <div class="name">轻松分享</div>
                            <h3 class="title">导出到PDF或发送唯一的URL</h3>
                            <div class="description"><p>一旦您完成创建您的简历，您可以导出到PDF
                                    并打印它。此外，每一个简历都有自己独特的网址，所以你可以通过电子邮件或电子邮件发送
                                    在社交网络上分享.</p>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="image">
                            <img src="/img/illustration3@2x-1.png"
                                 alt="Mobile-friendly design" class="img-responsive">
                        </div>
                        <div class="content">
                            <div class="name">反应敏捷的</div>
                            <h3 class="title">移动友好的设计</h3>
                            <div class="description"><p>每一个单一的模板被设计为在任何屏幕上看起来都很好。
                                    我们的开发人员确保所有的布局都将在移动和
                                    桌面设备.</p>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
</section>

<section class="fill blue" id="examples">
    <div class="container">

        <div class="blocks examples row">


            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="/img/cv1-1.jpg" alt="" class="img-responsive">
            </div>


            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="/img/cvtemp.jpg" alt="" class="img-responsive">
            </div>


            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="/img/cv2.jpg" alt="" class="img-responsive">
            </div>


            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="/img/cv3.jpg" alt="" class="img-responsive">
            </div>


        </div>

    </div>
</section>





<?php $this->beginBlock('footable');?>


<?php
$this->endBlock();
$this->registerJs($this->blocks['footable'], View::POS_END);
?>



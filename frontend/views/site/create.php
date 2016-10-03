<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2016/10/3
 * Time: 9:15
 */
use yii\web\View;

$this->title = '创建简历';

?>

<style>

    .main {

        width: 80%;

        margin: auto;
        margin-top: 100px;

        display: flex;
        -webkit-align-items: flex-start;
        align-items: flex-start;

        background-color: #fff;
    }

    .slider {
        flex: 1;
        /*background-color: antiquewhite;*/
        text-align: center;
        border-right: 1px solid black;
        height: 100%;
    }

    .slider ul {
        list-style: none;
        height: 650px;
    }

    .slider ul li {
        line-height: 50px;
    }

    .resume_info {
        flex: 5;
        margin: auto;
        padding-top: 30px;
        padding-left: 50px;
        padding-bottom: 200px;
        /*background-color: tomato;*/
    }

    .form-horizontal {
        /*background-color: tan;*/
        border: 0px solid royalblue;
        max-width: 100%;
        height: 100%;
    }

</style>
<!--style="background-color: #00b3ee"-->
<div class="main" style="">
    <div class="slider">
        <ul>
            <li><a href="#id">个人信息</a></li>
            <li><a href="">供职公司</a></li>
            <li><a href="">项目经历</a></li>
            <li><a href="">教育经历</a></li>
            <li><a href="">培训经历</a></li>
            <li><a href="">获得证书</a></li>
        </ul>
    </div>
    <div class="resume_info">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox">

                    <div class="ibox-title">

                    </div>

                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                            <div class="form-group"><label class="col-sm-2 control-label">用户名</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group"><label class="col-sm-2 control-label">昵称</label>
                                <div class="col-sm-10"><input type="text" class="form-control"> <span
                                        class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">姓别</label>

                                <div class="col-sm-10"><input type="text" placeholder="placeholder"
                                                              class="form-control"></div>
                            </div>


                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">邮箱</label>

                                <div class="col-sm-10"><input type="password" class="form-control" name="password">
                                </div>
                            </div>


                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">出生日期</label>

                                <div class="col-sm-10"><input type="text" placeholder="placeholder"
                                                              class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">年龄</label>

                                <div class="col-sm-10"><input type="text" placeholder="placeholder"
                                                              class="form-control"></div>
                            </div>



                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">图像</label>

                                <div class="col-sm-10">
                                    <input type="file" placeholder="placeholder" class="form-control">
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-lg-2 control-label">Disabled</label>

                                <div class="col-lg-10">
                                    <input type="text" disabled="" placeholder="Disabled input here..." class="form-control">
                                </div>
                            </div>


                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-lg-2 control-label">Static control</label>

                                <div class="col-lg-10"><p class="form-control-static">email@example.com</p></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Checkboxes and radios <br>
                                    <small class="text-navy">Normal Bootstrap elements</small>
                                </label>

                                <div class="col-sm-10">
                                    <div><label> <input type="checkbox" value=""> Option one is this and that—be sure to
                                            include why it's great </label></div>
                                    <div><label> <input type="radio" checked="" value="option1" id="optionsRadios1"
                                                        name="optionsRadios"> Option one is this and that—be sure to
                                            include why it's great </label></div>
                                    <div><label> <input type="radio" value="option2" id="optionsRadios2"
                                                        name="optionsRadios"> Option two can be something else and
                                            selecting it will
                                            deselect option one </label></div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Inline checkboxes</label>

                                <div class="col-sm-10"><label class="checkbox-inline"> <input type="checkbox"
                                                                                              value="option1"
                                                                                              id="inlineCheckbox1"> a
                                    </label> <label class="checkbox-inline">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> b </label> <label
                                        class="checkbox-inline">
                                        <input type="checkbox" value="option3" id="inlineCheckbox3"> c </label></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

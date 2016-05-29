<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>嘉讯科技首页</title>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/public.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/css.css" />
    <script type="text/javascript" src="/Public/Home/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/Public/Home/js/js01.js"></script>
</head>
<body>
<div id="top">
    <div class="top">
        <div class="logo">
            <img src="/Public/Home/images/logo.png" alt="" />
        </div>
        <ul id="nav" class="nav clearfix">
            <li class="nLi on">
                <h3><a href="<?php echo U('/index.php/Home/Index/index');?>" target="_blank">首页</a></h3>
            </li>
            <?php if(is_array($Cate)): foreach($Cate as $key=>$oneLevelCate): ?><li class="nLi">
                <h3><a href="" target="_blank">洪泽湖驾校</a></h3>
                <ul class="sub">
                    <li><a href="#">新闻首页</a></li>
                    <li><a href="#">新闻人物</a></li>
                    <li><a href="#">新闻电视</a></li>
                    <li><a href="#">新闻图片</a></li>
                    <li><a href="#">新闻视频</a></li>
                    <li><a href="# ">新闻专题</a></li>
                </ul>
            </li><?php endforeach; endif; ?>

        </ul>
        <div class="search"><input type="text" value="" ></div>
        <div class="clear"></div>
    </div>
</div>
<script id="jsID" type="text/javascript">

    jQuery("#nav").slide({
        type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
        titCell:".nLi", //鼠标触发对象
        targetCell:".sub", //titCell里面包含的要显示/消失的对象
        effect:"slideDown", //targetCell下拉效果
        delayTime:300 , //效果时间
        triggerTime:0, //鼠标延迟触发时间（默认150）
        returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
    });
</script>

<div id="banner">
    <div id="slideBox" class="slideBox">
        <div class="hd">
            <ul><li></li><li></li><li></li></ul>
        </div>
        <div class="bd">
            <ul>
                <li>
                    <img src="/Public/Home/images/pic1.jpg" />
                    <div class="text">
                        <h3>营造品质生活</h3>
                        <p>我承诺，做更好</p>
                        <p class="tt">I promise to do better</p>
                        <a href="" target="_blank">了解更多</a>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/pic2.jpg" />
                    <div class="text">
                        <h3>营造品质生活01</h3>
                        <p>我承诺，做更好</p>
                        <p class="tt">I promise to do better</p>
                        <a href="" target="_blank">了解更多</a>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/pic3.jpg" />
                    <div class="text">
                        <h3>营造品质生活02</h3>
                        <p>我承诺，做更好</p>
                        <p class="tt">I promise to do better</p>
                        <a href="" target="_blank">了解更多</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
    </div>
    <script type="text/javascript">
        jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,delayTime:500,});
    </script>
    <div class="news">
        <h3>news</h3>
        <div class="txtScroll-left">
            <div class="bd">
                <ul class="infoList">
                    <li>
                        <a href="" target="_blank">中国打破了世界软件巨头规则</a>
                        <a href="" target="_blank">中国打破了世界软件巨头规则</a>
                    </li>
                    <li>
                        <a href="" target="_blank">施强：高端专业语言教学</a>
                        <a href="" target="_blank">中国打破了世界软件巨头规则</a>
                    </li>
                    <li>
                        <a href="" target="_blank">新加坡留学，国际双语课程</a>
                        <a href="" target="_blank">中国打破了世界软件巨头规则</a>
                    </li>
                    <li>
                        <a href="" target="_blank">高考后留学日本名校随你选</a>
                        <a href="" target="_blank">中国打破了世界软件巨头规则</a>
                    </li>
                    <li>
                        <a href="" target="_blank">教育培训行业优势资源推介</a>
                        <a href="" target="_blank">中国打破了世界软件巨头规则</a>
                    </li>
                    <li>
                        <a href="" target="_blank">女友坚持警局完婚不抛弃</a>
                        <a href="" target="_blank">中国打破了世界软件巨头规则</a>
                    </li>
                </ul>
            </div>
            <div class="hd">
                <a class="next"></a>
                <a class="prev"></a>
            </div>
        </div>

        <script type="text/javascript">
            jQuery(".txtScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",effect:"left",autoPlay:true,scroll:1,vis:2,trigger:"click",delayTime:500});
        </script>
    </div>
    <div class="module">
        <div class="module-content">
            <div class="mot on">
                <div class="smot01"></div>
                <a href="" style="display: block;">
                    <img src="/Public/Home/images/ic01.png">
                    <span>食品工业是道德工业</span>
                </a>
            </div>
            <div class="mot">
                <div class="smot02"></div>
                <a href="">
                    <img src="/Public/Home/images/ic01.png">
                    <span>食品工业是道德工业01</span>
                </a>
            </div>
            <div class="mot">
                <div class="smot03"></div>
                <a href="">
                    <img src="/Public/Home/images/ic01.png">
                    <span>食品工业是道德工业02</span>
                </a>
            </div>
            <div class="mot">
                <div class="smot04"></div>
                <a href="">
                    <img src="/Public/Home/images/ic01.png">
                    <span>食品工业是道德工业03</span>
                </a>
            </div>
            <div class="mot">
                <div class="smot05"></div>
                <a href="">
                    <img src="/Public/Home/images/ic01.png">
                    <span>食品工业是道德工业04</span>
                </a>
            </div>
        </div>
        <script type="text/javascript">
            $(".mot").mouseenter(function(){
                $(this).addClass("on").siblings().removeClass("on");
                $(this).find('a').show(1000);
                $(this).siblings().find('a').hide(1000);
            })
        </script>
    </div>
</div>

    <div id="public">
        <div class="public">
            <div class="public-left">
                <div class="sideMenu" style="margin:0 auto">
                    <h3><em></em><a href="">驾校简介</a></h3>
                    <ul>
                        <li><a href="">淘宝首页右侧公告</a></li>
                        <li><a href="">京东首页产品切换</a></li>
                    </ul>

                    <h3><em></em><a href="">课程费用</a></h3>
                    <ul>
                        <li><a href="">淘宝首页焦点图</a></li>
                        <li><a href="">腾讯娱乐频道焦点图</a></li>
                    </ul>
                    <h3><em></em><a href="">网上报名</a></h3>
                    <ul>
                        <li><a href="">淘宝首页今日活动</a></li>
                    </ul>
                    <h3><em></em><a href="">驾校风采</a></h3>
                    <ul>
                        <li><a href="">淘宝首页右侧公告</a></li>
                    </ul>

                    <h3><em></em><a href="">相关新闻</a></h3>
                    <ul>
                        <li><a href="">淘宝首页焦点图</a></li>
                    </ul>
                    <h3><em></em><a href="">课程学习</a></h3>
                    <ul>
                        <li><a href="">腾讯博客图片滚动</a></li>
                    </ul>
                    <h3><em></em><a href="">留言咨询</a></h3>
                    <ul>
                        <li><a href="">腾讯博客图片滚动</a></li>
                    </ul>
                </div><!-- sideMenu End -->

                <script type="text/javascript">
                    jQuery(".sideMenu").slide({
                        titCell:"h3", //鼠标触发对象
                        targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
                        effect:"slideDown", //targetCell下拉效果
                        delayTime:300 , //效果时间
                        triggerTime:150, //鼠标延迟触发时间（默认150）
                        defaultPlay:false,//默认是否执行效果（默认true）
                        returnDefault:true, //鼠标从.sideMen移走后返回默认状态（默认false）
                        trigger:"click",
                    });
                </script>

                <div class="plt01">
                    <img src="/Public/Home/images/contact01.png" alt="">
                    <div>24H报名电话：010-5128-5200</div>
                    <p>报名地址：北京市大兴区黄村镇金星西路(可电话预约老师免费上门办理手续)</p>
                </div>
            </div>
            <div class="public-right">
                <div class="title">
                    <h4>新闻</h4>
                    <div><span>当前位置：</span><a href="">首页</a><span>>></span><a href="">留言咨询</a></div>
                </div>
                <div class="message-content">
                    <div class="mct">
                        <ul>
                            <?php if(is_array($message["list"])): foreach($message["list"] as $key=>$item): ?><li>
                                <div class="mst01">提 问 人：<?php echo ($item["msg_name"]); echo (substr($item["msg_tel"],0,3)); ?>****<?php echo (substr($item["msg_tel"],7,12)); echo (date("Y-m-d H:i:s",$item["msg_addtime"])); ?></div>
                                <div class="mst02">咨询内容：<?php echo ($item["msg_content"]); ?></div>
                                <div class="mst03"><?php if(($item["reply"]) == ""): ?>请等待客服回复！<?php else: ?>客服回复：<?php echo ($item['reply']['reply_content']); endif; ?></div>
                            </li><?php endforeach; endif; ?>

                        </ul>
                        <div class="paging">
                            <?php echo ($message["page"]); ?>
                        </div>
                    </div>
                    <form action="<?php echo U('/index.php/Home/Message/addMessage');?>" method="post">
                        <h4>我要咨询</h4>
                        <div class="fm01">
                            <span>姓名：</span><input type="text" name="msg_name">
                        </div>
                        <div class="fm02">
                            <span>联系电话（选填）：</span><input type="text"  name="msg_tel">
                        </div>
                        <div class="fm03">
                            <span>提问内容：</span><textarea name="msg_content" id="msg_content" cols="30" rows="4"></textarea>
                        </div>
                        <div class="fm04">
                            <span>验 证 码：</span><input type="text">
                        </div>
                        <input type="submit" value="提交咨询">
                    </form>
                </div>
            </div>
        </div>
    </div>

<div id="foot">
    <div class="foot">
        <div class="fot">
            <div class="ft01"></div>
            <div class="ft">
                <div>上门服务</div>
                <p>我们为您提供免费上门办理学车手续服务</p>
            </div>
        </div>
        <div class="fot">
            <div class="ft02"></div>
            <div class="ft">
                <div>无忧学车</div>
                <p>我们为您提供专业的呼叫中心服务</p>
            </div>
        </div>
        <div class="fot">
            <div class="ft03"></div>
            <div class="ft">
                <div>咨询服务</div>
                <p>我们为您提供详尽的驾校报名咨询</p>
            </div>
        </div>
    </div>
</div>

<div class="right-nav">
    <div class="rt01"></div>
    <div class="rt02"></div>
    <div class="rt03"></div>
</div>
</body>
</html>
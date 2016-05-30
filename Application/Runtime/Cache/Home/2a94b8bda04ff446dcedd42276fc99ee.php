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
                <h3><a href="" target="_blank"><?php echo ($oneLevelCate["cate_name"]); ?></a></h3>
                <ul class="sub">
                    <?php if(is_array($oneLevelCate["childCate"])): foreach($oneLevelCate["childCate"] as $key=>$twoLevelCate): ?><li><a href="<?php echo U('/index.php/Home/News/index',array('cate_id'=>$twoLevelCate['cate_id'],'cate_name'=>$twoLevelCate['cate_name']));?>"><?php echo ($twoLevelCate["cate_name"]); ?></a></li><?php endforeach; endif; ?>
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
                <?php if(is_array($giantScreen)): foreach($giantScreen as $key=>$item): ?><li>
                    <img src="<?php echo ($item['art_thumb']); ?>" />
                    <div class="text">
                        <h3><?php echo ($item['art_title']); ?></h3>
                        <p><?php echo ($item['art_summary']); ?></p>
                        <p class="tt"></p>
                        <a href="<?php echo U('index.php/Home/News/detailsNew',array('art_id'=>$item['art_id']));?>" target="_blank">了解更多</a>
                    </div>
                </li><?php endforeach; endif; ?>
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
                    <?php $i=-1; ?>
                    <li>
                    <?php if(is_array($news)): foreach($news as $key=>$item): ?><a href="" target="_blank"><?php echo ($item['art_summary']); ?></a>
                        <?php if($i%2 == 0){ echo "</li>"; echo "<li>"; } $i++; endforeach; endif; ?>
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
            <?php if(is_array($nav)): foreach($nav as $key=>$item): ?><div class="mot ">
                <div class="smot0<?php echo ($item["backcolor"]); ?>" style="
                background-image: url('<?php echo ($item["art_thumb"]); ?>');"></div>
                <a href="<?php echo U('index.php/Home/News/detailsNew',array('art_id'=>$item['art_id']));?>" >
                    <!--<img src="<?php echo ($item["art_thumb"]); ?>">-->
                    <span><?php echo ($item["art_summary"]); ?></span>
                </a>
            </div><?php endforeach; endif; ?>
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

<div id="content">
    <div class="content">
        <div class="ctt01">
            <div>
                <div class="ct01">班型价格</div>
                <p>xxxxxxxxx</p>
                <a href="" class="sct01">点击详情</a>
            </div>
            <div>
                <div class="ct02">行业新闻</div>
                <p>行业的最新新闻，我们全部告诉你</p>
                <a href="<?php echo U('/index.php/Home/News/index');?>" class="sct02">点击详情</a>
            </div>
            <div>
                <div class="ct03">留言点评</div>
                <p>有什么需要告诉我们，给我们留言吧</p>
                <a href="<?php echo U('/index.php/Home/Message/index');?>" class="sct03">点击详情</a>
            </div>
        </div>
        <div class="ctt02">
            <div>
                <h3><i>Photo album/</i> 嘉讯相册</h3>
                <div>
                    <?php if(is_array($imgs)): foreach($imgs as $key=>$item): ?><!--<a href="<?php echo ($item["ban_gourl"]); ?>"> ></a>-->
                        <img src="<?php echo ($item["ban_url"]); ?>" alt=""><?php endforeach; endif; ?>
                </div>
            </div>
            <ul>
                <?php if(is_array($train)): foreach($train as $key=>$item): endforeach; endif; ?>
                <li>
                    <img src="<?php echo ($item["art_thumb"]); ?>" alt="">
                    <div>
                        <h4><?php echo ($item["art_title"]); ?></h4>
                        <p class="qt"><?php echo ($item["art_summary"]); ?></p>

                    </div>
                    <p><?php echo (html_entity_decode($item["art_content"])); ?></p>
                    <a href="">查看详情</a>
                </li>
                </foreach>
            </ul>
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
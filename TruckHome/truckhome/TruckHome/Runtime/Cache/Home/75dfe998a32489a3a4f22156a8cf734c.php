<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/threeall/truckhome/Public/bbs/css/index.css">
	<link rel="stylesheet" type="text/css" href="/threeall/truckhome/Public/bbs/css/public.css">
	<link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/fatie.css">
	<link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/loginbox.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/bodypatch.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/newpost.css">
    <link href="/threeall/truckhome/Public/bbs/css/style_1_common.css" rel="stylesheet" type="text/css">
	<link href="/threeall/truckhome/Public/bbs/css/jlb.css" rel="stylesheet" type="text/css">
	<link href="/threeall/truckhome/Public/bbs/css/style_1_float.css" rel="stylesheet" type="text/css">
	<link href="/threeall/truckhome/Public/bbs/css/topicmain.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/detail.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/play.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/share_style0_16.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/style_1_calendar.css">
    <link rel="stylesheet" href="/threeall/truckhome/Public/bbs/css/topicmain.css">

    <script src="/threeall/truckhome/Public/UEditor/ueditor.config.js"></script>
    <script src="/threeall/truckhome/Public/UEditor/ueditor.all.min.js"></script>
	<script src="/threeall/truckhome/Public/bbs/js/jquery-1.8.3.min.js"></script>
	<script src="/threeall/truckhome/Public/bbs/js/lunbo.js"></script>
</head>
	<body>

		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="logo">
		<div class="nav">
			<div class="navleft">
				<a href="<?php echo U('Index/index');?>" target="">卡车之家首页</a> |
				<a href="<?php echo U('Lindex/index');?>" target="">卡车之家论坛首页</a> |
				<a style="color: rgb(255, 0, 0);" href="<?php echo U('Sindex/index');?>" target="">卡车之家商城</a>
			</div>
		</div>

		<div class="bbslogo">
    		<div class="bbslogoleft"><a href="<?php echo U('Lindex/index');?>"><img src="/threeall/truckhome/Public/bbs/images/bbslogo.gif" alt="卡车之家论坛" height="60" width="220"></a></div>
        	<div class="bbslogoright">
 				<a href="<?php echo U('Lindex/index');?>"><img src="/threeall/truckhome/Public/bbs/images/0f000cbW0MwDK97mf87TOs.jpg" alt="卡车之家论坛" height="60" width="630"></a>
			</div>
   		</div>
	</div>
</body>
</html>



		<div>
			

    <!--帖子最终页加导航end-->
    <div class="wholebg">

        <!--*页面主体begin*-->
        <div class="wbg2">
            <div class="topmain s_clear">
                <!--导航begin-->
                <div class="jlbtn">
                    <div class="jlbtn_gui">
                        <a class="" id="fjump" href="">卡车论坛</a> <em>&#187;</em>
                        <a href="">公告详情</a>
                    </div>
                    <div class="dengluhou">
                        <span style="color:red"><?php echo ($_SESSION['user']['username']); ?></span> <em>|</em>

                        <a href="<?php echo U('User/userindex');?>">个人中心</a>
                        <em>|</em>
                        <a href="<?php echo U('User/logout');?>">退出</a>
                        <em>|</em>

                    </div>

                </div>
                <!--导航弹出begin-->
                <div id="append_parent">
                    <div></div>

                    <div style="clear:both;margin:0 auto 3px;overflow:hidden;">
                        <div id="PAGE_AD_851912">
                            <div id="_6swn7tmem9w">
                                <a href="" target="">
                                    <img src="/threeall/truckhome/Public/bbs/images/0f000ZoUL6CYTxbiredbwf.jpg" title="" alt="" border="0" height="60" width="960"></a>
                            </div>
                        </div>
                        <div style="clear:both;margin:0 auto 3px;overflow:hidden;">
                            <div id="PAGE_AD_851913">
                                <div id="_dcxqzivvq5m">
                                    <a href="" target="">
                                        <img src="/threeall/truckhome/Public/bbs/images/0f0000vvCzBFrR_kFprLK0.jpg" title="" alt="" border="0" height="60" width="960"></a>
                                </div>
                            </div>
                        </div>

                        <div style="clear:both;margin:0 auto 3px;overflow:hidden;">
                            <div id="PAGE_AD_2360377">
                                <div id="_h31sbtcqeco"></div>
                            </div>
                        </div>

                        <!--页头页码栏begin-->
                        <div class="ym2013">
                            <div class="ym2013_l">
                                <span class="pageback" id="visitedforums">
                                    <a href="<?php echo U('Lnotic/index',array('id'=>$data1['tid']));?>">返回列表</a>
                                </span>
                            </div>
                        </div>

                        <!--论坛帖内容begin-->
                        <div class="lz">
                            <div class="jlbtz_content">
                                <div class="jlbtz_contenttil">
                                    <div id="wrap" class="wrap s_clear">

                                        <!--文章标题begin-->
                                        <div class="jlbtz_contentiltle jlbtz_contentiltlead">
                                            <span class="b_part" style="float:left">标题：<?php echo ($data1['title']); ?></span>
                                        </div>

                                        <div id="ad_text"></div>
                                        <!--标题帖子管理begin-->

                                        <div id="post_15502054">

                                            <!--论坛具体内容begin-->
                                            <div id="pid15502054" class="wbg3">

                                                <!--论坛左侧信息begin-->
                                                <div class="left">
                                                    <div class="conleft left">

                                                        <div class="client_n">
                                                            <a target="" href="" style="margin-left: 20px; font-weight: 800"><?php echo ($data['username']); ?></a>
                                                        </div>

                                                        <div id="userinfo15502054_a">


                                                            <div class="client_l">
                                                                <p>
                                                                    <input value="{8---1}" type="hidden">
                                                                    <em style="float:left;">卡车之家管理员</em>
                                                                </p>
                                                            </div>

                                                        </div>
                                                       <!--  <div class="client_l">
                                                           <p>
                                                               <span class="optimize3"></span>
                                                           </p>
                                                       </div> -->

                                                        <div class="client_l s_clear"></div>
                                                        <div class="optimize1"></div>

                                                    </div>
                                                </div>

                                                <!--论坛右侧信息begin-->
                                                <div class="conright wbg4 s_clear right">
                                                    <!--论坛右侧楼层管理begin-->
                                                    <div class="manage1 s_clear">
                                                        <div class="lc_info">
                                                            <div class="lc_info_l left">
                                                                <!--辩论帖-->
                                                                <div class="pagecontrol" style="display:none;"></div>
                                                                <div class="authorinfo">
                                                                    <img class="authicon" id="authicon15502054" src="/threeall/truckhome/Public/bbs/images/online_member.gif" onclick="showauthor(this, 'userinfo15502054');" height="16" width="16">
                                                                    <span class="fbtime">
                                                                        <em id="authorposton15502054">发表于 <?php echo date('Y-m-d H:i:s',$data1['addtime']);?></em> <font>|</font>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="m_content s_clear">
                                                        <!--论坛右侧文字标题begin-->
                                                        <div class="m_content1">

                                                            <div class="m_content1_bt">
                                                                <h1><?php echo ($data1['title']); ?></h1>
                                                                <div class="xian"></div>
                                                            </div>

                                                        </div>
                                                        <!--论坛右侧文字内容begin-->
                                                        <div class="">
                                                            <div class="t_msgfontfix">
                                                                <table cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="t_msgfont" id="postmessage_15502054">
                                                                                <?php echo htmlspecialchars_decode($data1['content']);?> <font color="#999999"></font>
                                                                                <br></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--返回顶部--> </div>
                    </div>
            </div>
        </div>
    </div>

		</div>
		<div style="clear:both"></div>
        <div id="footer" class="footer_bbs">
	<p>
		<a href="" target="">关于我们</a>
		<span class="fbbsline">|</span>
		<a href="" target="">联系我们</a>
		<span class="fbbsline">|</span>
		<a href="" target="">广告合作</a>
		<span class="fbbsline">|</span>
		<a href="" target="">工作机会</a>
		<span class="fbbsline">|</span>
		<a href="" target="">意见反馈</a>
		<span class="fbbsline">|</span>
		<a href="" target=""> <em class="footios"></em>
			iPhone / <em class="footand"></em>
			Android客户端
		</a>
		<span class="fbbsline">|</span>
		<a href="" target="">卡车之家商城</a>
	</p>
	<p>经营许可证编号：京ICP证080575号 / 京ICP备09080840号 京公网安备11010502026149</p>
	<p>
		<span style="font-family:arial;">Copyright ©</span>
		2009 www.360che.com All Rights Reserved.
		<a target="_self" href="">卡车之家</a>
		版权所有 － 网聚卡车人的力量
	</p>
</div>

	</body>
</html>
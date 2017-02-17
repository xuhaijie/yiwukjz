<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--
            __     __
           /  \~~~/  \                                                                       |      金华激石信息技术有限公司      |
     ,----(     ..    )
    /      \__     __/
   /|         (\  |(
  ^ \   /___\  /\ |
     |__|   |__|-"
-->
<html>
<head>
	
<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
<base href="__APP__/">
	<meta name="keywords" content="<?php echo ($web_keywords); ?>">
	<meta name="description" content="<?php echo ($web_description); ?>">
	<meta http-equiv="x-ua-compatible" content="ie-edge,chrome=1"><!--//低版本IE支持CSS3属性-->
	<?php if($config["switch_mbaidu"] == '1'): ?><link rel="alternate" type="application/vnd.wap.xhtml+xml" media="handheld" href="http://<?php echo ($config["web_url"]); ?>/m/"/><?php endif; ?>
	<script src="__TMPL__Public/js/jquery1.8.js"></script>
	<script src="__TMPL__Public/js/pic.js"></script>
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/style.css">
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/animate.min.css">
	<!--[if lte IE 7]><script src="__TMPL__Public/css/lte-ie7.js"></script><![endif]-->
	<!-- <link rel="stylesheet" href="__TMPL__Public/Css/skrles.css?v=<?php echo time(); ?>"> -->
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/skrles.less">
	<script src="__TMPL__Public/css/less.js" type="text/javascript"></script>
	<script src="__TMPL__Public/js/sky.js" type="text/javascript"></script>
    <script src="__TMPL__Public/js/wow.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="__TMPL__Public/js/selectivizr.js"></script><!--//低版本IE支持CSS3属性-->
<script type="text/javascript" src="__TMPL__Public/js/superslide.2.1.js"></script><!--//大图效果-->
<script>
	document.createElement("section");
	document.createElement("article");
	document.createElement("footer");
	document.createElement("header");
	document.createElement("hgroup");
	document.createElement("nav");
	document.createElement("menu");
	document.createElement("time");
</script>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
</script>


	<script>
		$(function() {
			var $nav=$("#Nav-1"),
				$lido=$(".<?php echo ($lid['name']); echo ($lid['id2']); ?>"),
				$sfl=$("#S-fl");
				$yido=$("#Nav-1").find('>li').eq(<?php echo ($yid); ?>);
			$yido.addClass("lon");
			gezong($yido,$nav);

			if($lido){
				$lido.addClass("lon");
				gezong($lido,$sfl);
			}
			
			function gezong ($a,$b) {
				$b.find(">li").hover(function(){
					var $this=$(this);
						$a.removeClass("lon");
						$this.addClass("lon");
				},function(){
					var $this=$(this);
						$this.removeClass("lon");
						$a.addClass("lon");
				});
			}
		});
	</script>
<?php echo ($config["code_head"]); ?>



</head>
<body>

<div class="utility">
	<div class="header_top">
		<span>欢迎光临<?php echo ($config['web_name']); ?>网站！</span>
		<a style="CURSOR: hand" onClick="AddFavorite('<?php echo ($title); ?>',location.href)" title="" href="####">加入收藏 | </a>
		<a href="####" onclick="SetHome(this,'http://<?php echo ($_SERVER ['HTTP_HOST']); ?>')">设为首页</a>
	</div>
</div>
<div class="header">
	<div class="top">
			<a href="__ROOT__/" titile="<?php echo ($config['name']); ?>">
				<img  src="__ROOT__/__UPLOAD__/<?php echo ($config['logo']); ?>" alt="Logo" class="logo wow zoomInLeft">
			</a>

		<img src="../Public/images/tel.jpg" style="float: right;">

	</div>
	<div class="header_nav_k">
		<div class="header_nav">
			<ul class="nav" id="Nav-1">
				<?php function scnav($str,$a=1) { $att=""; if($str['cun']){ $att=$a>1?'<ul style="top:-7px;left:106px;" class="dropdown-menu">':'<ul class="dropdown-menu">'; foreach ($str['cun'] as $k => $v) { $hlz=scnav($v,$a+1); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s</a>',$v['tid'],$v['url'],$hlz?$v['name']:$v['name']); $att.=$hlz; $att.='</li>'; } $att.='</ul>'; } return $att; } $att=''; foreach ($fnav as $k => $v) { $nav_arr= explode(',',$v['name']) ; $hlz=scnav($v); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s<br /><font class="en">%s</font></a>',$v['tid'],$v['url'],$nav_arr[0],$nav_arr[1]); $att.=$hlz; $att.='</li>'; } echo($att); ?>
			</ul>
		</div>
	</div>
</div>


<div class="banner">
    <div id="KinSlideshow" >
        <ul>
            <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url('__ROOT__/__UPLOAD__/<?php echo ($vo["img"]); ?>') no-repeat 50% 0;"><a href="<?php echo ($vo["link"]); ?>"  alt="<?php echo ($vo["title"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>





<div class="search">
	<div class="search-nr">
		<div class="search-left">
			<p> 热门关键词：   　　交通驾驶员培训中心  　　  交通驾驶员   　　  交通学车  　　    义乌交通学车 </p>
		</div>
		<form id="form1" name="form1" method="get" action="__ROOT__/product/sousuo">
			<input name="key" value="" placeholder="　请输入关键词" class="text">
			<input type="submit" name="Submit" value="搜索" class="anan" />
		</form>
	</div>
</div>
<div class="main">
	<div class="liucheng">
		<div class="liucheng-dh"></div>
		<div class="liucheng-nr">
			<ul>
				<li ><a class="btn-span-20"><span data-hover="提交报名资料">提交报名资料</span></a></li></li>
				<li ><a class="btn-span-20"><span data-hover="体验">体验</span></a></li>
				<li ><a class="btn-span-20"><span data-hover="上课理论">上课理论</span></a></li>
				<li ><a class="btn-span-20"><span data-hover="模拟机培训">模拟机培训</span></a></li>
				<li ><a class="btn-span-20"><span data-hover="科目一">科目一</span></a></li>
				<li ><a class="btn-span-20"><span data-hover="科目二">科目二</span></a></li>
				<li ><a class="btn-span-20"><span data-hover="科目三">科目三</span></a></li>
				<li ><a class="btn-span-20"><span data-hover="科目四">科目四</span></a></li>
				<li ><a class="btn-span-20"><span data-hover="领取驾驶证">领取驾驶证</span></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="clear2"></div>
<div class="company">
	<div class="main">
		<div class="company-dh"></div>
		<div class="company-nr">
			<img src="__ROOT__/__UPLOAD__/<?php echo ($intro[img]); ?>"/>
			<p><?php echo (msubstr($intro['description'],0,300,'utf-8',true)); ?></p>
			<a href="__APP__/company">【了解更多】</a>
		</div>
	</div>
</div>
<div class="youshi">
	<div class="main">
		<ul>
			<li>
				<h4 class="btn-span-16">不另收费，快速拿本</h4>
				<p>遵循一费制的收费体系，不乱收学员一分钱实现培训、考试一条龙服务，让培训、考试一步到位</p>
			</li>
			<li>
				<h4 class="btn-span-16">通过率高</h4>
				<p>科目齐全：不论是初驾申请，还是增驾申请,都可以找到适合你的课种的教练团队，给您最专业的指导。</p>
			</li>
			<li>
				<h4 class="btn-span-16">学车时间自己做主</h4>
				<p>可以自由根据自己的时间，预约来校学习，方便快捷，合理学习考试拿本。</p>
			</li>
			<li>
				<h4 class="btn-span-16">车型齐全、方法灵活</h4>
				<p>学校可培训汽车A1、A2、C1、C2驾照；为方便学员、学校采取灵活的培训方法，设有普通班、周未班、增驾班、夜间班、陪驾班，</p>
			</li>
			<li>
				<h4 class="btn-span-16">性价比高</h4>
				<p>有专业的练车场地，以学车快、考试快、下证快而著称，而且不存在乱收费的情况，服务态度好，工作仔细</p>
			</li>
			<li>
				<h4 class="btn-span-16">训练场地规范</h4>
				<p>教学规范14\15\16年再次被评为驾培行业文明先进单位</p>
			</li>
		</ul>
	</div>
</div>
<div class="jidi">
	<div class="main">
		<div class="jidi-dh"></div>
		<div class="jidi-nr">
			<div id="demo" style=" width:100%; overflow:hidden;">
				<table align=left cellpadding="0" cellspacing="0" border="0" width="100%">
					<tr>
						<td id="demo1" valign=top ><div style="width:2770px; ">
							<?php if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
									<div class="picture1"> <a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,240,240)"/></a></div>
									<div class="picture2"> <a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div>
						</td>
						<td id="demo2" valign=top></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="poster"></div>
<div class="news">
	<div class="news1">
		<div class="news-dh">新闻资讯<i>/ NEWS</i><a href="news/type/4">更多>></a></div>
		<div class="news1-nr">
			<?php if(is_array($news)): $i = 0; $__LIST__ = array_slice($news,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/news/<?php echo ($vo["id"]); ?>">
					<p ><?php echo ($vo["title"]); ?></p>
				</a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="honor">
		<div class="news-dh" style="width: 333px;">荣誉资质<i>/ honor</i><a href="product/type/25">更多>></a></div>
		<div class="honor-nr">
			<div id="ddemo1">
				<div class="img_list">
					<ul>
						<?php if(is_array($honor)): $i = 0; $__LIST__ = array_slice($honor,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
								<img src="__ROOT__/__UPLOAD__/<?php echo ($vo["img"]); ?>"/>
								<a><?php echo ($vo["title"]); ?></a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<a href="#" id="toLeft" class="link toLeft"></a>
				<a href="#" id="toRight" class="link toRight"></a>
			</div>
		</div>
	</div>
	<div class="baoming">
		<div class="news-dh" style="width: 260px;">成功报名<a href="news/type/28">更多>></a></div>
		<div class="baoming-nr">
			<ul>
				<?php if(is_array($question)): $i = 0; $__LIST__ = array_slice($question,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<a href="__APP__/news/<?php echo ($vo["id"]); ?>">
							<span><?php echo ($vo["title"]); ?></span>,<?php echo (mb_substr($vo["description"],0,30,'utf-8')); ?>
						</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>
<div class="clear2"></div>
<div class="footer">
    <div class="main">
        <div class="f_nav">
            <div class="commonWd">
                <script type="text/javascript">
                    $(document).ready(function (){
                        var l=$('#Nav-1 li').length;
                        var ht="";
                        for(var i=0;i<l;i++){
                            if(i<l-1)
                                ht+=$("#Nav-1 li").eq(i).html()+"　|　";
                            else
                                ht+=$("#Nav-1 li").eq(i).html();
                        }
                        $('.f_nav').html(ht);
                    })
                </script>
            </div>
        </div>
    </div>
    <div class="ff">
        版权所有：　<?php echo ($config['web_name']); ?> 　联系人：<?php echo ($config['linkman']); ?> 　手机：<?php echo ($config['mobile']); ?>　　<br/>
        训练场地：<?php echo ($config['address']); ?>　网页设计：激石信息技术<br>
        <a href="__APP__/admin" target="_blank">[后台登陆]</a>
        </a><a href="__ROOT__/Sitemap">　网站地图</a><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261289734'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1261289734%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
</div>

<script type="text/javascript" src="__TMPL__Public/js/unslider/unslider.min.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/Marquee/Marquee.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/js.js"></script>
<!--图标左右切换效果- <i class = "btn-i-1"></i>----->
<script>
    $(function(){
        $(".btn-i-1").each(function(){
            $(this).wrap("<div class='btn1'><div class='btn2'></div></div>");
            var btnI = $(this).clone();
            $(this).parent().append(btnI);
            var btnWidth = $(this).width();
            var btnHeight = $(this).height();
            var left = "46px";//图标距离左边的距离
            var top = "60px";//图标距离顶部的距离
            $(this).css({display:"block",position:"absolute",left:0,margin:0,padding:0,});
            $(this).next(".btn-i-1").css({display:"block",position:"absolute",margin:0,padding:0,left:btnWidth});
            $(this).parents(".btn1").css({width:btnWidth,height:btnHeight,overflow:"hidden",left:left,top:top,position:"absolute"});
            $(this).parent(".btn2").css({position: "relative",left:0});
            $(this).parents(".btn1").parent().hover(function() {
                $(this).find(".btn2").stop().animate({left: -btnWidth});
            },function(){
                $(this).find(".btn2").stop().animate({left:0});
            })
        })
    })
</script>
<?php echo ($liuliangbao); ?>
</body>
</html>

<script>

	function scroll(){
		var liH = $("div.baoming-nr ul li:eq(0)").height();
		$("div.baoming-nr ul").animate({"top":-liH},function(){
			$("div.baoming-nr ul li:eq(0)").appendTo($("div.baoming-nr ul"));
			$("div.baoming-nr ul").css({"top":0})
		})
	}
	setInterval(scroll,2000);
</script>

<script language="javascript">
	var speed=30;
	var demo=document.getElementById('demo');
	var demo1=document.getElementById('demo1');
	var demo2=document.getElementById('demo2');
	demo2.innerHTML=demo1.innerHTML;
	function Marquee(){
		if(demo2.offsetWidth-demo.scrollLeft<=0)
		{
			demo.scrollLeft-=demo1.offsetWidth;
		}
		else
		{demo.scrollLeft++;}
	}
	var MyMar=setInterval(Marquee,speed);
	demo.onmouseover=function(){
		clearInterval(MyMar)
	}
	demo.onmouseout=function(){
		MyMar=setInterval(Marquee,speed)
	}

</script>


<script type="text/javascript">
	var index = 0;
	var timer = 0;
	var ulist = $('.img_list ul');
	var blist = $('.btn_list ul');
	var list = ulist.find('li');
	var llength = list.length;//li的个数，用来做边缘判断
	var lwidth = $(list[0]).width();//每个li的长度，ul每次移动的距离
	var uwidth = llength * lwidth;//ul的总宽度

	function init(){
		//生成按钮(可以隐藏)
		addBtn(list);
		//显示隐藏左右点击开关
		$('.link').css('display', 'block');
		$('.link').bind('click', function(event) {
			var elm = $(event.target);
			doMove(elm.attr('id'));
			return false;
		});

		//初始化描述
		var text = ulist.find('li').eq(0).find('img').attr('alt');
		var link = ulist.find('li').eq(0).find('a').attr('href');
		$('.img_intro .text a').text(text);
		$('.img_intro .text a').attr('href',link);
		auto();
	}

	function auto(){
		//定时器
		timer = setInterval("doMove('toRight')",3000);

		$('.img_list li, .btn_list li').hover(function() {
			clearInterval(timer);
		}, function() {
			timer = setInterval("doMove('toRight')",3000);
		});
	}

	function changeBtn(i){
		blist.find('li').eq(i).addClass('on').siblings().removeClass('on');
		var text = ulist.find('li').eq(i).find('img').attr('alt');
		var link = ulist.find('li').eq(i).find('a').attr('href');
		$('.img_intro .text a').text(text);
		$('.img_intro .text a').attr('href',link);
	}

	function addBtn (list){
		for (var i = 0; i < list.length; i++) {
			var imgsrc = $(list[i]).find('img').attr('src');
			var listCon = '<li><img src="'+imgsrc+'""></li>';
			$(listCon).appendTo(blist);
			//隐藏button中的数字
			//list.css('text-indent', '10000px');
		};
		blist.find('li').first().addClass('on');
		blist.find('li').click(function(event) {
			var _index = $(this).index();
			doMove(_index);
		});
	}

	function doMove(direction){
		//向右按钮
		if (direction =="toRight") {
			index++;
			if ( index< llength) {
				uwidth = lwidth *index;
				ulist.css('left',-uwidth);
				//ulist.animate({left: -uwidth}, 1000);

			}else{
				ulist.css('left','0px');
				index = 0;
			};
			//向左按钮
		}else if(direction =="toLeft"){
			index--;
			if ( index < 0) {
				index = llength - 1;
			}
			uwidth = lwidth *index;
			ulist.css('left',-uwidth);
			//ulist.animate({left: -uwidth}, "slow");
			//点击数字跳转
		}else{
			index = direction;
			uwidth = lwidth *index;
			ulist.css('left',-uwidth);
		};
		changeBtn(index);
	}
	init();
</script>
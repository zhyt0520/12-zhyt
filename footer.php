<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<p style="display:inline;">Copyright &copy 2013-2015 <a href="http://aword.net">一语-aword</a></p>
			<p style="display:inline;margin-left:14px;">可切换至 <a href="?am_force_theme_layout=mobile">简版</a></p>
			<p style="display:inline;margin-left:14px;" title="两个优惠码：25%OffForFrist和15%OffForever">推荐 <a href="https://my.laoxuehost.net/aff.php?aff=1844" target="_blank">老薛主机</a></p>
			<p style="display:inline;float:right;margin-left:14px;"><a style="cursor:pointer; "onclick="window.scroll(0,0)">回顶部↑</a></p>
			<!-- <p style="display:inline;float:right;"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5165710'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s6.cnzz.com/stat.php%3Fid%3D5165710%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script></p> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script>
	$.fn.smartFloat=function(x){
		var element=$(this);
		var thetop=element.position().top;
		var pos=element.css('position');
		var wid=element.css('width');
		var offsetleft=element.offset().left;
		var offsettop=element.offset().top;
		$(window).scroll(function(){
			var scrolls=$(this).scrollTop();
			if(scrolls>thetop+x){
				element.css({position: 'fixed',top: 0,width: wid,});
				element.offset({top:null,left:offsetleft});
			}else{
				element.css({position: pos,top: thetop,width: wid,});
			}
		});
	};
	$('#tag_cloud-2').smartFloat(355-24);
</script>
<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?05252d3ab1825c4f51ef7797d46dde56";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
</script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"2","bdPos":"left","bdTop":"100"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>

<?php wp_footer(); ?>
</body>
</html>

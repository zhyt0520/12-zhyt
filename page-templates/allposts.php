<?php
/*
Template Name:所有文章
*/

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?//php get_template_part( 'content', 'page' ); ?>
<div id="allpost">
<table>
<tr>
<td class="allpsot-td"><strong>序号</strong></td>
<td class="allpsot-td"><strong>发布日期</strong></td>
<td><strong>文章标题</strong></td>
</tr>
<?php $count_posts = wp_count_posts(); $published_posts = $count_posts->publish; query_posts('posts_per_page=-1' );
while ( have_posts() ) : the_post();
echo '<tr>';

echo '<td class="allpsot-td" width="40">'.$published_posts.'</td>';
echo '<td  class="allpsot-td" width="130">'; the_time(get_option( 'date_format' ));

echo '</td>
<td><a href="'; the_permalink();
echo '" title="'.esc_attr( get_the_title() ).'">'; the_title();
echo '</a></td>

</tr>'; $published_posts--;
endwhile; wp_reset_query(); ?>
</table>
</div>
<br />
<br />
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
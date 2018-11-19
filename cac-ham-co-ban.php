Header

<!-- Hàm lấy Menu -->
<?php $menu=array( 'menu'=>'ten-menu', ); wp_nav_menu($menu);?>


<!-- Hàm lấy link trang chủ -->
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> ... </a>

<!-- Hàm lấy một hình ảnh trong souce -->
<img src="<?php bloginfo('template_directory') ;?>/images/ten-hinh.jpg" alt="tên hình">




Trang chủ (index.php)

<!-- Hàm lấy bài viết trong 1 category -->
	<?php $the_query=new WP_Query('cat=2&posts_per_page=2');
	while ($the_query->have_posts()):$the_query->the_post();?>
			<?php the_post_thumbnail('full') ;?>		
	<?php endwhile; wp_reset_postdata();?>

<div class="wrap-tin-tuc">
	<?php $the_query=new WP_Query('cat=2&posts_per_page=2');
	while ($the_query->have_posts()):$the_query->the_post();?>
		<div class="item">
			<h3><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3> <!-- Tiêu đề bài viết -->
			<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail('full') ;?></a> <!-- ảnh thumbnail của bài viết -->
			<p><?php the_time('d/m/Y');?></p> <!-- hàm lấy ngày đăng bài viết -->
			<p><?php echo wp_trim_words( get_the_content(), 35 ); ?></p> <!-- Hàm cắt chuỗi, đoạn mô tả bài viết -->
			<a href="<?php the_permalink();?>">XEM TIẾP</a> <!-- nút xem tiếp -->
		</div>
	<?php endwhile; wp_reset_postdata();?>
</div>

<!-- Hàm lấy bài viết trong 1 page -->
<div class="wrap-page">
	<?php $query=new WP_QUERY('page_id=9');
	while ($query->have_posts()):$query->the_post();?>

		<!-- Nội dung giống như ở phần category -->

	<?php endwhile;?>
</div>


<!-- Trang category -->
<h1><?php echo single_cat_title();?></h1>
<div class="wrap-cate">
	<?php while (have_posts()):the_post();?>
		<div class="item">
			<h3><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3> <!-- Tiêu đề bài viết -->
			<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail('full') ;?></a> <!-- ảnh thumbnail của bài viết -->
			<p><?php the_time('d/m/Y');?></p> <!-- hàm lấy ngày đăng bài viết -->
			<p><?php echo wp_trim_words( get_the_content(), 35 ); ?></p> <!-- Hàm cắt chuỗi, đoạn mô tả bài viết -->
			<a href="<?php the_permalink();?>">XEM TIẾP</a> <!-- nút xem tiếp -->
		</div>
	<?php endwhile;wp_pagenavi();wp_reset_postdata();?>
</div>





<!-- Trang Single-->
<h1><?php echo single_post_title();?></h1>
<div class="wrap-single">
	<?php while (have_posts()):the_post();?>
		<div class="content">
			<?php the_content();?>
		</div>
	<?php endwhile;wp_reset_postdata();?>
</div>


<!-- Nếu như trong phần single có 2 category hiển thị nội dung khác nhau thì dùng lệnh if ... eles -->

<?php if (in_category( array(2,3,4,5) )) {?>
	nếu ID là 2,3,4,5 thì hiển thị có mục giá, mã sp...
<?php } else {?>
	ngược lại thì hiển thị không có giá, mã sp...
<?php } ?>




<!-- Sidebar -->

<?php get_sidebar(); ?> <!-- hàm gọi slidebar -->

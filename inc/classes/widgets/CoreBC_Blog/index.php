<!-- Chat box -->
<div class="box box-primary">
  <div class="box-header">
    <i class="fas fa-newspaper"></i>
    <h3 class="box-title">Core Blog</h3>
  </div>
  <div class="box-body chat" id="chat-box">

<?php
$query = new WP_Query(array(
    'posts_per_page'   => 5,
));

while ($query->have_posts()): $query->the_post(); ?>
    <!-- chat item -->
    <div class="item">
      <p class="message">
        <a href="<?php the_permalink(); ?>" class="name">
          <small class="text-muted float-right"><i class="fa fa-clock-o"></i> <?php the_time('j \d\e F \d\e Y'); ?> | <?php the_time('H:i'); ?></small>
          <?php the_title()?>
        </a>

          <?php the_excerpt(); ?>
      </p>

      <!-- /.attachment -->
    </div>
    <!-- /.item -->
<?php endwhile; ?>
     </div>
  <!-- /.chat -->

</div>
<!-- /.box (chat box) -->

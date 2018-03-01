@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

<article @php(post_class())>



<?php

// args
$argsTO = array(
	'numberposts'	=> -1,
	'post_type'		=> 'job',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'job_office_location',
      'value' => 'Toronto',
      'compare' => 'IN',
    ),
  )
);
// query
$the_query = new WP_Query( $argsTO );

?>
<?php if( $the_query->have_posts() ): ?>

<div id = "postContainer" class="pconenta">

  <ul class="jobposts container-flex">

  <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
  		<li class= "oneJobOutline jobpost {{the_field('job_office_location')}}" >
            <a href="<?php the_permalink()?>">
            <h2 class="jobTitle"> {{the_field('job_position')}} </h2>
            <h3 class="subheading">{{the_field('job_office_location')}} </h3>
          </a>
  		</li>
  	<?php endwhile; ?>

  <?php endif; ?>

  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

<?php

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'job',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'job_office_location',
      'value' => 'Shanghai',
      'compare' => 'IN',
    ),
  )
);
// query
$the_query = new WP_Query( $args );
?>
<?php if( $the_query->have_posts() ): ?>
  <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class= "oneJobOutline jobpost {{the_field('job_office_location')}}" >
        <a href="<?php the_permalink()?>">
          <h2 class="jobTitle"> {{the_field('job_position')}} </h2>
          <h3 class="subheading">{{the_field('job_office_location')}} </h3>
        </a>
		</li>
	<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

<?php

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'job',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'job_office_location',
      'value' => 'LA',
      'compare' => 'IN',
    ),
  )
);
// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>

<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class= "oneJobOutline jobpost {{the_field('job_office_location')}}" >
        <a href="<?php the_permalink()?>">
          <h2 class="jobTitle"> {{the_field('job_position')}} </h2>
          <h3 class="subheading">{{the_field('job_office_location')}} </h3>
        </a>
		</li>
	<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'job',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'job_office_location',
      'value' => 'Vancouver',
      'compare' => 'IN',
    ),
  )
);
// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>


<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class= "oneJobOutline jobpost {{the_field('job_office_location')}}" >
        <a href="<?php the_permalink()?>">
          <h2 class="jobTitle"> {{the_field('job_position')}} </h2>
          <h3 class="subheading">{{the_field('job_office_location')}} </h3>
        </a>
		</li>
	<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>



<?php

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'job',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'job_office_location',
      'value' => 'Stuttgart',
      'compare' => 'IN',
    ),
  )
);
// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>



<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class= "oneJobOutline jobpost {{the_field('job_office_location')}}" >
        <a href="<?php the_permalink()?>">
          <h2 class="jobTitle"> {{the_field('job_position')}} </h2>
          <h3 class="subheading">{{the_field('job_office_location')}} </h3>
        </a>
		</li>
	<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


<?php

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'job',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'job_office_location',
      'value' => 'Frankfurt',
      'compare' => 'IN',
    ),
  )
);
// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>



<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class= "oneJobOutline jobpost {{the_field('job_office_location')}}" >
        <a href="<?php the_permalink()?>">
          <h2 class="jobTitle"> {{the_field('job_position')}} </h2>
          <h3 class="subheading">{{the_field('job_office_location')}} </h3>
        </a>
		</li>
	<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

<?php

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'job',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'job_office_location',
      'value' => 'Beijing',
      'compare' => 'IN',
    ),
  )
);
// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>



<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class= "oneJobOutline jobpost {{the_field('job_office_location')}}" >
        <a href="<?php the_permalink()?>">
          <h2 class="jobTitle"> {{the_field('job_position')}} </h2>
          <h3 class="subheading">{{the_field('job_office_location')}} </h3>
        </a>
		</li>
	<?php endwhile; ?>
<?php endif; ?>
</ul>
<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

</div>

</article>

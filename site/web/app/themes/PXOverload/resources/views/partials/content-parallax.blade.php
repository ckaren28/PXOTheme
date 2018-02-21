<?php if(have_rows('background_content')):
  while(have_rows('background_content')) : the_row(); ?>
    <div class="col-xs-12 background-content"
      style="background-image: url('{{the_sub_field('layer_0')}}')">
      <img class="layer1" src="{{the_sub_field('layer_1')}}" alt="{{the_sub_field('layer_1')}}"/>
      <img src="{{the_sub_field('layer_2')}}" alt="{{the_sub_field('layer_2')}}"/>
    </div>
  <?php endwhile;
endif; ?>

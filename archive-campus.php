<?php get_header(); 
pageBanner(array(
  'title' => 'Our Campuses',
  'subtitle' => 'We have several conveniently located campuses.'
));
?>

  <div class="container container--narrow page-section">

    <div class="acf-map">
      
      <?php        
        while(have_posts()){ the_post();?>
        <?php  
          $mapLocation = get_field('map_location');
        ?>
         <div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo 
         $mapLocation['lng']; ?>">
           <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
             <?php echo $mapLocation['address']; ?>
           </h3>
         </div>
      <? } ?>

    </div>

  </div>

<?php get_footer();?>
<?php
/**
 * Template name: Évenement 
 */
?>
<?php get_header() ?>  

<main class="site__main">

   <?php //the_post_thumbnail("annonce"); ?>
   <mark>Événement à venir</mark>
       <?php if (have_posts()): the_post(); ?>
      <article class="annonce__article">
         <h1><?= get_the_title() ?></h1>
         <?php the_content(); ?>
         <?php
         $endroit = get_field("endroit");
         $date = get_field("date");
         $heure = get_field("heure");
         $organisateur = get_field("organisateur");
         $resume = get_field("description");
         echo "<p class='annonce__resume'>" . 'klkllkllklkjlk' . $description . "</p>";
         echo "<p class='annonce__lieu'>Le lieu: " . $endroit . "</p>";
         echo "<p class='annonce__date'>La date: " . $date . "</p>";
         echo "<p class='annonce__heure'>L'heure: " . $heure . "</p>";
         echo "<p class='annonce__organisateur'>Le responsable de l'événement: " . $organisateur . "</p>";

        // $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
      
         $image = get_field('image');
         if( !empty( $image ) ): ?>
             <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
         <?php endif; ?>
         ?>
      </article>
      <?php endif ?>
  
</main>
<?php get_footer() ?>
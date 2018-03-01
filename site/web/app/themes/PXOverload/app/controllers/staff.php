<?php
namespace App;

use Sober\Controller\Controller;

class Staff extends Controller
{
   /**
     * Return images from Advanced Custom Fields
     *
     * @return array
     */
    public function about_us_hero_image()
    {
        return get_field('about_us_hero_image');
    }

    public function about_us_description()
    {
        return get_field('about_us_description');
    }

    public function about_us_awards()
    {
        return get_field('about_us_awards');
    }

    public function about_us_preview_works()
    {
        return get_field('about_us_preview_works');
    }

    public function weAreGlobal()
    {
        return get_field('we_are_global');
    }

  protected $acf = true;
  public function ajax(){
      /**
       * Custom AJAX Functions
       * Don't always need AJAX on a site, but when you do, use ajax.php.
       * Uncomment things below as needed.
       * Note: Example javascript for an AJAX code in _main.js
       */
      // Attach to our standard script enqueue and create a localized script
      // containing needed url/nonce variables for AJAX processing.
      add_action('wp_enqueue_scripts', 'roots_ajax_scripts', 99);
      function roots_ajax_scripts() {
        // Setup a localized script with relevant url and nonce information.
        wp_localize_script( 'roots_scripts', 'site', array(
            'ajaxurl'      => admin_url( 'admin-ajax.php' ),
            'exampleNonce' => wp_create_nonce( 'roots-example-nonce' ),
            )
        );
      }

      // Add action for not-logged-in user.
      add_action( 'wp_ajax_nopriv_example_ajax', 'roots_example_ajax' );
      // Add action for logged-in user.
      add_action( 'wp_ajax_example_ajax', 'roots_example_ajax' );
      // Example function for performing whatever back-end actions are
      // expected when the AJAX call is run.
      function roots_example_ajax() {
        // Ignore request if there is no nonce sent or it isn't verified.
        $nonce = isset($_POST['nonce']) ? $_POST['nonce'] : null;
        if(!$nonce || !wp_verify_nonce( $nonce, 'roots-example-nonce' )) exit;
        // Perform whatever actions & such you want here. Create a response
        // array to mirror our expected JSON object.
        $response = array();
        // Wrap the response and output it.
        roots_ajax_response($response);
      }
      // When doing a json return for any front-end data we need the proper
      // header type and to json encode our response array.
      function roots_ajax_response($response = null) {
        // End AJAX return if no data.
        if($response == null) exit;
        // Proper headers for json output.
        header('Content-Type: application/json');
        // Output our response.
        echo json_encode($response);
        exit;
      }



      /**
       * Return the post content to the AJAX call
       */
      function kec_load_content () {
          $args = array(
            'p' => $_POST['post_id'],
            'post_type' => 'team_member',
           );
          $post_query = new WP_Query( $args );
          while( $post_query->have_posts() ) : $post_query->the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <p>
              hi from the ajaxphp file
            </p>
              <h2><a href="<?php the_permalink()?>" title="<?php printf( esc_attr( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
              <div class="entry-content">
                  <?php the_content(); ?>
              </div>
          </div>

          <?php
          endwhile;
        wp_die();

      }

      add_action ( 'wp_ajax_nopriv_kec_load-content', 'kec_load_content' );
      add_action ( 'wp_ajax_kec_load-content', 'kec_load_content' );

  }

}

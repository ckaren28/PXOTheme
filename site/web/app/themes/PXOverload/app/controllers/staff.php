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
}

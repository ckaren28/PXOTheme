<?php
namespace App;

use Sober\Controller\Controller;

class Contact extends Controller
{

  public function offices()
  {

    return (object) array(
      'office_image' => get_field('contact_hero_image'),
      'office_loc' => get_field('contact_office_location'),
      'office_address' => get_field('contact_office_address'),
      'office_phone' => get_field('contact_office_phone'),
      'office_email' => get_field('contact_office_email')
    );
  }
      protected $acf = true;


}

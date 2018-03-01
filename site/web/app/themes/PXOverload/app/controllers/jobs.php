<?php
namespace App;

use Sober\Controller\Controller;

class Careers extends Controller
{
  public function job_position(){
    return get_field('job_position');
  }
  public function job_location(){
    return get_field('job_location');
  }
  public function jobposts()
  {
    return get_post()->all_jobs;
  }
}

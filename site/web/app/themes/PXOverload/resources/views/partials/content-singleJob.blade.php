<div class="container">
  <div class="row single-job-top">
    <div class="col-xs-4">
      <h4>Position: {{the_field('job_position')}} </h4>
      <h4>Experience: {{the_field('experience_level')}} </h4>
    </div>
    <div class="col-xs-4">
      <h4>Location: {{the_field('job_office_location')}} </h4>
      <h4>Contract Type: {{the_field('contract_type')}} </h4>
    </div>
    <div class="col-xs-4">
      <h4>Department: {{the_field('job_department')}} </h4>
      <h4>Dates: {{the_field('open_date')}} - {{the_field('close_date')}} </h4>
    </div>
  </div><!--row -->
  <div class="row single-job-bottom">
    <div class="col-xs-8 job-description">
      <h2>Job Description: </h2>
      {{the_field('job_description')}}
    </div>
    <div class="col-xs-3 apply-online">
      <h2>To Apply: </h2>

      {{the_field('job_contact_email')}}
    </div> <!-- row  apply online - right column-->

    <div class="col-xs-8 job-responsibilities">
      <h2>Job Responsibilities: </h2>
      {{the_field('job_responsibilities')}}
    </div>

    <div class="col-xs-8 job-requirements">
      <?php if(the_field('job_requirements')):?>
      <h2>Minimum Requirements: </h2>
      {{the_field('job_requirements')}}
    </div>
      <?php endif ?>
  </div> <!-- row -->
</div> <!--container -->

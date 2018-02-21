<div class="plaidBack">
  <h2 class="theTeam">The Team</h2>
  <img class="finger" src="@asset('images/pointingFinger.png')" title="pointing finger to team" />
</div> <!--plaid background -->
<div class="teamphoto">
  <img src="{{the_field('commercial_team_photo')}}" alt="{{the_field('commercial_team_photo')}}" class="comteamphoto" />
  <h1 class="crystal"> The Team </h1>
</div>
<div class=" commercialTeam">
  <div class="tri">
    <div class="triangleWrap">
      <div class="largeTriangle">
      </div>
    </div>
  </div> <!--gold triangle -->

  <ul class="row comTeamStairs">
      <?php if(have_rows('commercial_team')):
        while(have_rows('commercial_team')) : the_row(); ?>
          @include('partials.content-comteam')
        <?php endwhile;
      endif; ?>
  </ul><!--row-->

</div> <!--row Commerical Team -->
<div class="row brands">
  <h1>Brands we work with</h1>
  <ul class="brands">
  <?php if(have_rows('highlighted_brands')):
    while(have_rows('highlighted_brands')) : the_row(); ?>
      @include('partials.content-brands')
    <?php endwhile;
  endif; ?>
  </ul>
</div> <!--brand row-->
<div class="row comBottom back">
  <div class="col-xs-6 comNav">
    <a href="#">Themed Entertainment</a>
  </div>
  <div class="col-xs-6 comNav next">
    <a href="#">Previs</a>
  </div>
</div> <!--bottom navigation -->

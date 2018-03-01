export default {
  init() {
$(document).ready(function(){
    var LAClick = document.getElementById("LA");
    var TOClick = document.getElementById("TO");
    var FFClick = document.getElementById("FF");
    var SHClick = document.getElementById("SH");
    var BJClick = document.getElementById("BJ");
    var VCClick = document.getElementById("VC");
    var SGClick = document.getElementById("SG");
    var ALLClick = document.getElementById("ALL");

    if(ALLClick) {

      ALLClick.addEventListener('click', function(e){
        e.preventDefault();
        $('li.jobpost.Toronto').show();
        $('li.jobpost.LA').show();
        $('li.jobpost.Frankfurt').show();
        $('li.jobpost.Stuttgart').show();
        $('li.jobpost.Shanghai').show();
        $('li.jobpost.Beijing').show();
        $('li.jobpost.Vancouver').show();
      })
    }

    if(TOClick) {

      TOClick.addEventListener('click', function(e){
        e.preventDefault(e);
        $('li.jobpost.Toronto').show();
        $('li.jobpost.LA').hide();
        $('li.jobpost.Frankfurt').hide();
        $('li.jobpost.Stuttgart').hide();
        $('li.jobpost.Shanghai').hide();
        $('li.jobpost.Beijing').hide();
        $('li.jobpost.Vancouver').hide();
      })
    }
    if(LAClick) {
      LAClick.addEventListener('click', function(e){
        e.preventDefault(e);
        $('li.jobpost.LA').show();
        $('li.jobpost.Toronto').hide();
        $('li.jobpost.Frankfurt').hide();
        $('li.jobpost.Stuttgart').hide();
        $('li.jobpost.Shanghai').hide();
        $('li.jobpost.Beijing').hide();
        $('li.jobpost.Vancouver').hide();
      })
    }
    if(SHClick) {
      SHClick.addEventListener('click', function(e){
        e.preventDefault(e);
        $('li.jobpost.Shanghai').show();
        $('li.jobpost.LA').hide();
        $('li.jobpost.Frankfurt').hide();
        $('li.jobpost.Stuttgart').hide();
        $('li.jobpost.Tortonto').hide();
        $('li.jobpost.Beijing').hide();
        $('li.jobpost.Vancouver').hide();
      })
    }
    if(BJClick) {
      BJClick.addEventListener('click', function(e){
        e.preventDefault(e);
        $('li.jobpost.Beijing').show();
        $('li.jobpost.LA').hide();
        $('li.jobpost.Frankfurt').hide();
        $('li.jobpost.Stuttgart').hide();
        $('li.jobpost.Shanghai').hide();
        $('li.jobpost.Toronto').hide();
        $('li.jobpost.Vancouver').hide();
      })
    }
    if(FFClick) {
      FFClick.addEventListener('click', function(e){
        e.preventDefault(e);
        $('li.jobpost.Frankfurt').show();
        $('li.jobpost.LA').hide();
        $('li.jobpost.Toronto').hide();
        $('li.jobpost.Stuttgart').hide();
        $('li.jobpost.Shanghai').hide();
        $('li.jobpost.Beijing').hide();
        $('li.jobpost.Vancouver').hide();
      })
    }
    if(SGClick) {
      SGClick.addEventListener('click', function(e){
        e.preventDefault(e);
        $('li.jobpost.Stuttgart').show();
        $('li.jobpost.LA').hide();
        $('li.jobpost.Frankfurt').hide();
        $('li.jobpost.Toronto').hide();
        $('li.jobpost.Shanghai').hide();
        $('li.jobpost.Beijing').hide();
        $('li.jobpost.Vancouver').hide();
      })
    }
    if(VCClick) {
      VCClick.addEventListener('click', function(e){
        e.preventDefault(e);
        $('li.jobpost.Vancouver').show();
        $('li.jobpost.LA').hide();
        $('li.jobpost.Frankfurt').hide();
        $('li.jobpost.Stuttgart').hide();
        $('li.jobpost.Shanghai').hide();
        $('li.jobpost.Beijing').hide();
        $('li.jobpost.Toronto').hide();
      })
    }

    });
  },
};







// <?php
//
// // args
// $args = array(
// 	'numberposts'	=> -1,
// 	'post_type'		=> 'career',
//   'meta_query' => array(
//     'relation' => 'AND',
//     array(
//       'key' => 'job_office_location',
//       'value' => 'Tortonto',
//       'compare' => 'IN',
//     ),
//   )
// );
// // query
// $the_query = new WP_Query( $args );

  // var qContainer = document.getElementById('postContainer');


  // if(LAClick) {
  //   LAClick.addEventListener('click', function(){
  //     console.log("hi");
  //     var LARequest = new XMLHttpRequest();
  //     LARequest.open('GET', 'http://pxo.test/wp-json/wp/v2/job');
  //     LARequest.onload = function() {
  //       if (LARequest.status >= 200 && LARequest.status < 400 ){
  //         var data = JSON.parse(LARequest.responseText);
  //         console.log(data);
  //       } else {
  //         console.log("returned error");
  //       }
  //     };
  //     LARequest.onerror = function(){
  //       console.log('connection error');
  //     };
  //     LARequest.send();
  //   })
  // }

// function createHTML(postsData) {
//   var ourHTMLString = '';
//   for ( var i =0; postsData.length; i++) {
//     ourHTMLString += '<h2> ' + postsData[i].title.rendered + '</h2>';
//     ourHTMLString += postsData[i].content.rendered;
//   }
//   qContainer.innerHTML = ourHTMLString;
// }
// createHTML();

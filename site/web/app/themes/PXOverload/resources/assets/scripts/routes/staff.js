$(document).ready(function(){
	$.ajaxSetup({cache:false});

  $(".person").click(function(e){
		e.preventDefault();

		var site = 'http://localhost:3000';
		var post_id = $(this).attr('rel');
		console.log(post_id);
    var ajaxURL = site.ajaxurl;
		console.log(ajaxURL);
		$.ajax({
      type: "POST",
      url: post_id,
      data: {
				post_id: post_id,
				action: "kec_load_content",
				// post_type: "team_member",
			},
      success: function(response) {
        $("#info").html(response);
				console.log(
					"yes"
				);
        $("#loading-animation").hide();
    return false;
			},
    });
	});
});
//
// jQuery( function( $ ) {
//   $( '#get-another-quote-button' ).on( 'click', function ( e ) {
//     e.preventDefault();
//     $.ajax( {
//       url: '/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1',
//       success: function ( data ) {
//         var post = data.shift(); // The data is an array of posts. Grab the first one.
//         $( '#quote-title' ).text( post.title );
//         $( '#quote-content' ).html( post.content );
//
//         // If the Source is available, use it. Otherwise hide it.
//         if ( typeof post.custom_meta !== 'undefined' && typeof post.custom_meta.Source !== 'undefined' ) {
//           $( '#quote-source' ).html( 'Source:' + post.custom_meta.Source );
//         } else {
//           $( '#quote-source' ).text( '' );
//         }
//       },
//       cache: false
//     } )
//   } );
// } );





  // var post_link = $(this).attr("href");
	// console.log(post_link);
	// var goto = post_link.replace(/ /g, "%20");
	// console.log(goto);
	// $("#info").html("content loading...");
	// $("#info").load(goto);
	//     return false;
	//   });

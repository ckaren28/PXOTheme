

  // var post_link = $(this).attr("href");
	// console.log(post_link);
	// var goto = post_link.replace(/ /g, "%20");
	// console.log(goto);
	// $("#info").html("content loading...");
	// $("#info").load(goto);
	//     return false;
	//   });

$(document).ready(function(){
	$.ajaxSetup({cache:false});

  $(".person").click(function(e){
		e.preventDefault();

		var site = "localhost:3000"
		var post_id = $(this).attr('rel');
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
					"yes gogog"
				);
        $("#loading-animation").hide();
    return false;
			},
    });
	});
});

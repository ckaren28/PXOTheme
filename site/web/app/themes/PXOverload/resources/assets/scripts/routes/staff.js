$(document).ready(function(){
	$.ajaxSetup({cache:false});

  $("#person > a ").click(function(){
    var post_link = $(this).attr("href");
    console.log(post_link);
    var goto = post_link.replace(/ /g, "%20");
    console.log(goto);
    $("#member").html("content loading...");
    $("#info").load(goto);

    return false;
  });
});

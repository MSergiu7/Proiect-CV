// Search Toggle

$(".search-input").hide();

$(".fa-search").click(function(){
  $(".search-input").toggle();
});


// Search script

$(document).ready(function(){
    $("#search-filter").keyup(function(){

        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val();

        // Loop through the comment list
        $(".list li").each(function(){

            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();

            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
            }
        });
    });
});

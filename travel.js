var url="index.php?t=3";
$(document).ready(function() {
    getTravelData();


$("#btn").click(function() {
    getTravelData();
});

function getTravelData(){
  $.getJSON(url)
    
  .done(function(data){ 
    
    $("#location").text(data.location);
    $("#photo").attr("src",data.photo);
    $("#comments").text(data.comments);
    if (data.visited == 1) {
      $("#visitedDate").text("Visited:" + data.visitedDate);
    } else {
      $("#visitedDate").text("Book a flight now!");
    }
  })
  .fail(function(){
    console.log("PROBLEM!");
  });
};

});
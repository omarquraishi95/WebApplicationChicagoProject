//Showing and aHiding the Dropdown selection
$(document).ready(function(){
$("select").change(function(){
    $(this).find("option:selected").each(function(){
        if($(this).attr("value")=="american"){
            $(".box").not(".font").hide();
            $(".font").show();
          }
          else if($(this).attr("value")=="chinese"){
            $(".box").not(".font2").hide();
            $(".font2").show();
          }
          else if($(this).attr("value")=="indian"){
            $(".box").not(".font3").hide();
            $(".font3").show();
          }
          else if($(this).attr("value")=="greek"){
            $(".box").not(".font4").hide();
            $(".font4").show();
          }
          else {
              $(".box").hide();
        }
    });
}).change();
});


//Accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

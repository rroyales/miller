
$(document).ready(function(){
    $("button.show").click(function(){
        $("header.instruction").toggle();
    });

   $('div.centered').hover(
       function() {
            var alertThis = $(this).children("p").textContent;
            var what = $(this).find(".content").text();
            console.log(what);
            $("p.preview").html(what);
        },
        function(){
            $("p.preview").html("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.");
        }); 
});

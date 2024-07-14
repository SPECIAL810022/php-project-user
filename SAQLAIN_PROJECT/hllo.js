$(document).ready(function(){
    // Slide up displayed paragraphs
    $("#sln").hover(function(){
        $("this").slideUp();
    });
    
    // Slide down hidden paragraphs
    $(".b1").click(function(){
        $("p").slideDown();
    });
});
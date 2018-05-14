


$(document).ready(function() {
    $("#acc dt").click(function(){
        $(this).next("#acc dd")
            .slideToggle("slow")
            .siblings("#acc dd:visible")
            .slideUp("slow");
        $(this).toggleClass("active");
        $(this).siblings("#acc dt").removeClass("active");
        return false
    })
});
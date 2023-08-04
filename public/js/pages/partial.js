$(document).ready(function(){
    $(".notifications .icon_wrap").click(function(event){
        $(this).parent().toggleClass("active");
        $(".profileq").removeClass("active");
        event.stopPropagation();
    });

    $(document).click(function(event){
        if (!$(event.target).closest('.notifications').length) {
            $('.notifications').removeClass("active");
        }
    });
});
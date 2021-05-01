$(document).ready(function() {

    $(".main__choice").on("click", ".tab", function() {
        // Удаляем классы active
        $(".main__choice .tab").removeClass('tab_active');
        $(".main__choice .feed-form").removeClass('feed-form_active');
        
        // Добавляем классы active
        $(this).addClass('tab_active');
        $(".feed-form").eq($(this).index()).addClass("feed-form_active")
    });
   
    $(".left-menu__icon").on("click", function(){
        $(".left-menu__calendar").addClass("left-menu__calendar_active");
        $(".left-menu__icon").addClass("left-menu__icon_hidden");
        $(".left-menu__close").addClass("left-menu__close_active");
        $(".wrapper-proj").addClass("wrapper-proj_active");
        $(".new-proj").addClass("new-proj_active");
  
        

    });

    $(".left-menu__close").on("click", function(){
        $(".left-menu__calendar").removeClass("left-menu__calendar_active");
        $(".left-menu__icon").removeClass("left-menu__icon_hidden");
        $(".left-menu__close").removeClass("left-menu__close_active");
        $(".wrapper-proj").removeClass("wrapper-proj_active");
        $(".new-proj").removeClass("new-proj_active");
   
    });
} );

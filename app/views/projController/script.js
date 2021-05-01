$(document).ready(function () {

    $('.new-proj').on("click", function () {
        $(".create-proj").addClass("create-proj_active");
        //document.getElementById("create-proj").style.display = "block";
    });

    $('.create-proj__close').on('click', function () {
        $(".create-proj").removeClass("create-proj_active");
        document.getElementById("create-proj").reset();
    });
});

$(document).mouseup(function (e) {
    var container = $(".create-proj");
    if (container.has(e.target).length === 0) {
        $(".create-proj").removeClass("create-proj_active");
        document.getElementById("create-proj").reset();

    }

});

$(document).ready(function () {
    $('#create-proj').submit(function (event) {
        event.preventDefault();
        let data = $('#create-proj').serializeArray();

        $.ajax({
            url: window.BASE_DIR + "/proj/add/",
            data: data,
            dataType: "json",
            type: "POST",
            success: function (json) {
                if (json.error > 0) {
                    alert('Error!');
                } else {
                    location.reload();

                }
            }
        });

    });
});

function goToDecomp(id, name) {
    location.href = "/pahotina/diploma/decomp/";

}


function projectDelete(id, name) {
    if (confirm("Удаляем \"" + name + "\"?")) {
        event.preventDefault();
        $.ajax({
            url: window.BASE_DIR + "/proj/del/",
            data: { id: id },
            dataType: "json",
            type: "POST",
            success: function (json) {
                if (json.error > 0) {
                    alert('Error!');
                } else {
                    location.reload();

                }
            }
        });
        location.reload();
    }


}


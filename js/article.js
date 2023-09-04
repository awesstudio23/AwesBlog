$(document).ready(function () {
    $("#add-aricle-form").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/php/api/article.php",
            data: $(this).serialize() + "&type=add-article",
            success: function (data) {
                if (data == "") {
                    window.location.reload();
                } else {
                    toastr.error(data);
                }
            }
        });
    });

    $(".delete-article").click(function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/php/api/article.php",
            data: { id: $(this).data("id"), type: "delete-article" },
            success: function (data) {
                if (data == "") {
                    window.location.reload();
                } else {
                    toastr.error(data);
                }
            }
        });
    });
});
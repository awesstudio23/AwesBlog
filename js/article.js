$(document).ready(function () {
    $("#add-article-form").on("submit", function (e) {
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

    $("#edit-article-form").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/php/api/article.php",
            data: $(this).serialize() + "&type=edit-article&id=" + $("#edit-article-btn").attr("data-id"),
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

    $(".open-edit-article").click(function (e) {
        e.preventDefault();

        $("#editTitle").val($.trim($(this).parent().parent().parent().find(".card-title").text()));
        $("#editSubtitle").val($.trim($(this).parent().parent().parent().find(".card-subtitle").text()));
        $("#editContent").val($.trim($(this).parent().parent().parent().find(".card-content").text()));
        $("#editImageUrl").val($.trim($(this).parent().parent().parent().find(".card-imageUrl").attr("src")));
        $("#edit-article-btn").attr("data-id", $.trim($(this).data("id")));

        $("#editArticle").modal("show");
    });
});
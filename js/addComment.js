$(document).ready(function () {
    $(".add-comment").click(function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "/php/api/addComment.php",
            data: { content: $("#comment").val(), id: $(this).data("id") },
            success: function (data) {
                if (data == "") {
                    toastr.success("Успешно! Комментарий добавлен.");
                } else {
                    toastr.error(data);
                }
            }
        });
    });
});
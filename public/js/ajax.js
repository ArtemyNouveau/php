function like(catID) {
    $.post(
        "/engine/ajaxCommunication/likes.php",
        {
            isLike: true,
            catID: catID
        },
        onAjaxSuccess
    );
    function onAjaxSuccess(likes)
    {
        $(`[key = ${catID}]`).addClass("disabled");
        $(`[key = ${catID}].like`).html(`${likes}<i class=\"material-icons left\">thumb_up</i>`);
    }
}

function dislike(catID) {
    $.post(
        "/engine/dbControllers/processing.php",
        {
            isLike: false,
            catID: catID
        },
        onAjaxSuccess
    );

    function onAjaxSuccess(dislikes)
    {
        $(`[key = ${catID}]`).addClass("disabled");
        $(`[key = ${catID}].dislike`).html(`${dislikes}<i class=\"material-icons left\">thumb_down</i>`);
    }
}

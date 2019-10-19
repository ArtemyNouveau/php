function like(catID, btn) {
    btn.classList.add("disabled");
    $.post(
        "/engine/dbControllers/processing.php",
        {
            isLike: true,
            catID: catID
        },
        onAjaxSuccess
    );
    function onAjaxSuccess(likes)
    {
        btn.innerHTML = likes + "<i class=\"material-icons right\">thumb_up</i>\n"
    }
}

function dislike(catID, btn) {
    btn.classList.add("disabled");
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
        btn.innerHTML = dislikes + "<i class=\"material-icons left\">thumb_down</i>\n";
    }
}

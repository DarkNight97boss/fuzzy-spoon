

 Rotate: function (bg, title, content, url) {
        $('.bullet').fadeOut(function () {
            $('.bullet').css("background", "url(" + bg + ")");
            $('.bullet-title').html(title);
            $('.bullet-content').html(content);
            $('#bullet-url').attr("href", function () {
                return url;
            });
        });
        $('.bullet').fadeIn();

    }
};
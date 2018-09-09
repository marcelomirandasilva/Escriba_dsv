// remove (Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.)
$(document).ready(function () {
    $('.ui-pnotify').remove();
});


/* // AJUSTE DO MENU SIDE-BAR. sem esse codigo ele não funciona quando usar o vue.js
$SIDEBAR_MENU.find('a').on('click', function (ev) {
    var $li = $(this).parent();
    if ($li.is('.active')) {
        $li.removeClass('active active-sm');
        $('ul:first', $li).slideUp(function () {
            setContentHeight();
        });
    }
    else {
        // prevent closing menu if we are on child menu
        if (!$li.parent().is('.child_menu')) {
            $SIDEBAR_MENU.find('li').removeClass('active active-sm');
            $SIDEBAR_MENU.find('li ul').slideUp();
        } else {
            if ($BODY.is(".nav-sm")) {
                if (!$li.parent().is('.child_menu')) {
                    $SIDEBAR_MENU.find('li').removeClass('active active-sm');
                    $SIDEBAR_MENU.find('li ul').slideUp();
                }
            }
        }
        $li.addClass('active');

        $('ul:first', $li).slideDown(function () {

        });
    }
});
//////////////////////////////////////////////////////////////////////////// */
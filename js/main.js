// slide イン
$(window).scroll(function() {
    $('.down-to-top').each(function() {
        const elemPos = $(this).offset().top;
        const scroll = $(window).scrollTop();
        const windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + 150) {
            $(this).addClass('scrollin');
        }
    });
});

$(function() {
    //  お知らせドロワー
    $('.faq-list-item').click(function() {
        const $answer = $(this).find('.answer');
        if ($answer.hasClass('open')) {
            $answer.removeClass('open');
            $answer.slideUp();
            $(this).find('span').text('+');
        }
        else {
            $answer.addClass('open');
            $answer.slideDown();
            $(this).find('span').text('-');
        }
    });
    //名前チェック
    $("#name").blur(function() {　　　　　　　　 // ※１  
        var name = $("#name").val();　　　
        $("#name_alert").text('');　　　　　　 // ※２  
        if (name == '') {　　　　　　　　　　　 // ※３  
            $("#name_alert").text("名前を入力して下さい。");
        }
    });
    //名前チェック
    $("#nameKana").blur(function() {
        var nameKana = $("#nameKana").val();
        $("#kana_alert").text('');
        if (nameKana == '') {
            $("#kana_alert").text("名前(カナ)を入力して下さい。");
        }
        else if (!nameKana.match(/^[ァ-ン]+$/g)) {
            $("#kana_alert").text("名前(カナ)はカタカナで入力して下さい。");
        }
    });
    //名前チェック
    $("#tel").blur(function() {
        var tel = $("#tel").val();
        $("#tel_alert").text('');
        if (tel == '') {
            $("#tel_alert").text("電話番号を入力して下さい。");
        }
        else if (!tel.match(/^\d{7,12}$/)) {
            $("#tel_alert").text("電話番号はハイフンなしの半角数字7～12字で入力して下さい。");
        }
    });
    //名前チェック
    $("#mail").blur(function() {
        var mail = $("#mail").val();
        $("#mail_alert").text('');
        if (mail == '') {
            $("#mail_alert").text("メールアドレスを入力して下さい。");
        }
        else if (!mail.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/g)) {
            $("#mail_alert").text("正しいメールアドレスを入力してください。");
        }
    });

    // チェックボックス
    $('input[name="check"]').change(function() {
        // もしチェックが入ったら
        if ($(this).prop('checked')) {
            // value値を出力
            $('#checks').text($(this).val());
        }
        else {
            // テキストをリセット
            $('#checks').text('');
        }
    });
});


$('.burger-btn').on('click', function() { //.btn_triggerをクリックすると
    $('.burger-btn').toggleClass('close'); //.btn_triggerにcloseクラスを付与(ボタンのアニメーション)
    $('.nav-wrapper').fadeToggle(500); //.nav-wrapperが0.5秒でフェードイン(メニューのフェードイン)
    $('body').toggleClass('noscroll'); //bodyにnoscrollクラスを付与(スクロールを固定)
});

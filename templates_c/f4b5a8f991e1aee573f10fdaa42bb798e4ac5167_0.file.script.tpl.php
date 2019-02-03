<?php
/* Smarty version 3.1.33, created on 2019-02-03 20:18:48
  from 'C:\OSPanel\domains\neoflex\application\views\script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5722787e0692_42996203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4b5a8f991e1aee573f10fdaa42bb798e4ac5167' => 
    array (
      0 => 'C:\\OSPanel\\domains\\neoflex\\application\\views\\script.tpl',
      1 => 1549214325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5722787e0692_42996203 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    $('.submit').on('click', function () {
        var form = $('form')[0];
        var formData = new FormData(form);

        $.ajax({
            url: '/article/add',
            type: 'POST',
            dataType: 'html',
            processData: false,
            contentType: false,
            data: formData
        }).done(function(data) {
            if (data.message){
                showAlert(data.message);
            }else{
                showAlert('Статья успешно добавлена');
                $('.articles-list').prepend(data);
            }
        }).fail(function() {
            showAlert('Ошибка добовления');
        });
    });

    $('[data-rubric]').on('click', function () {
        var rubric_id = $(this).attr('data-rubric');

        $.ajax({
            url: '/article/getArticlesByRubricId',
            type: 'POST',
            dataType: 'html',
            data: {
                rubric_id: rubric_id
            }
        }).done(function(data) {
            $('.articles-list').html(data);
        }).fail(function() {
            console.log("error");
        });
    });

    function hideAllPopups() {
        $( ".bg--dark" ).fadeOut();
        $( ".popup" ).fadeOut().promise().done(function() {
            $(this).remove();
        });
    }

    function setPopupPosition( currentPopup ) {
        var currentPopupWidth = currentPopup.innerWidth(),
            currentPopupHeight = currentPopup.innerHeight(),
            screenHeight = screen.height,
            screenWidth = $( "body" ).width()

        currentPopup.css({
            top: screenHeight / 2 - currentPopupHeight / 2 - 50,
            left: screenWidth / 2 - currentPopupWidth / 2
        });
    }

    $( ".bg--dark" ).on( "click", function() {
        hideAllPopups();
    });

    function showAlert( text ) {
        if ( $( ".alert-popup" ).length == 0 ) {
            $( "body" ).append( "<div class=\"popup alert-popup input_shadow\"><p class=\"alert-popup__message\"></p></div>" )
        }
        setPopupPosition( $( ".alert-popup" ) );
        $( ".alert-popup, .bg--dark" ).fadeIn();
        $( ".alert-popup").children( ".alert-popup__message" ).text( text );
        setTimeout( function() {
            $( ".alert-popup" ).fadeOut( function() {
                $( this ).remove();
            });
            setTimeout( function() {
                if ( $( ".popup" ).length == 0 ) {
                    $( ".bg--dark" ).fadeOut();
                }
            }, 450 );
        }, 3000 );
    }

<?php echo '</script'; ?>
><?php }
}

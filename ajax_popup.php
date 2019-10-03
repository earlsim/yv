<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?CJSCore::Init(['ajax']);?>
<?CModule::IncludeModule('iblock');?>
<?$IBLOCK_ID = 8;?>

<script type="text/javascript" src="/bitrix/js/main/ajax.js"></script>
<script type="text/javascript" src="/local/templates/yvoire/js/ajax.js"></script>

    <div id="event-form" class="modal-form">
        <a class="mobile-close js-close fancybox-item fancybox-close" href="javascript:;">
            <span></span>
            <span></span>
        </a>
        <div class="inner__form">
            <div class="modal-form__title">Записаться онлайн</div>
            <form id="form-request" action="" method="POST" enctype="multipart/form-data">
                <div class="modal-form__row">
                    <div class="form-row__title">
                        Фамилия <span>*</span>
                    </div>
                    <input class="form_input" name="surname" type="text" maxlength="255" required>
                </div>
                <div class="modal-form__row">
                    <div class="form-row__title">
                        Имя <span>*</span>
                    </div>
                    <input class="form_input" name="name" type="text"  maxlength="255" required>
                </div>
                <div class="modal-form__row">
                    <div class="form-row__title">
                        Отчество
                    </div>
                    <input name="patronymic" type="text" maxlength="255">
                </div>
                <div class="modal-form__row">
                    <div class="form-row__title">
                        Телефон <span>*</span>
                    </div>
                    <input class="form_input" type="text" name="phone" maxlength="11" required>
                </div>
                <div class="modal-form__row">
                    <div class="form-row__title">
                        Email <span>*</span>
                    </div>
                    <input class="form_input" type="email" name="email" required>
                </div>
                <div class="modal-form__row">
                    <div class="form-row__title">
                        Город <span>*</span>
                    </div>
                    <input class="form_input" type="text" name="city" maxlength="255" required>
                </div>
                <div class="modal-form__checkbox">
                    <label class="fw300 " for="feedback-policy">
                        <input class="nav-topic__input" type="checkbox" value="Y" name="feedback-policy" id="feedback-policy">
                        <span class="nav-topic__check nav-topic__check--brd"></span>
                        <span class="modal-policy">Я согласен на хранение и обработку
                        моих персональных данных</span>
                    </label>
                </div>
                <div class="btn_type01">
                    <span class="hEffect"></span>
                    <button class="btn-1 js-sender" type="submit">Подать заявку</button>
                </div>

            </form>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>
<?
header('Content-Type: application/json');
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
?>
<?
if (!empty($_REQUEST["fields"]['name']) and !empty($_REQUEST["fields"]["feedback-policy"])) {

    CModule::IncludeModule('iblock');

    $el = new CIBlockElement;
    $iblock_id = 8;
    $section_id = false;

    //Свойства
    $PROP = array();

    $PROP['surname'] = $_POST["fields"]['surname'];
    $PROP['name'] = $_POST["fields"]['name'];
    if($_POST["fields"]['patronymic']) {
        $PROP['patronymic'] = $_POST["fields"]['patronymic'];
    };
    $PROP['phone'] = $_POST["fields"]['phone'];
    $PROP['mail'] = $_POST["fields"]['email'];
    $PROP['city'] = $_POST["fields"]['city'];
    $PROP['event'] = $_POST['fields']['event'];


    $fields = array(
        "DATE_CREATE" => date("d.m.Y H:i:s"),
        "IBLOCK_ID" => $iblock_id,
        "PROPERTY_VALUES" => $PROP,
        "NAME" => strip_tags($_REQUEST["fields"]['event']),
        "ACTIVE" => "Y",
    );


    //Результат
    if ($ID = $el->Add($fields)) {

        $result = array('status' => 'ok', 'message' => 'Вы успешно записаны на семинар');
    } else {
        $result = array('success' => 'error', 'message' => 'Проверьте правильность введенных данных');

    }
}   echo json_encode($result);
?>
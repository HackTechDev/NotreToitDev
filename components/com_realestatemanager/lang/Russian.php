<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com)
 * Homepage: http://www.ordasoft.com
 * @version: 3.0 Pro
 *
 * */

$LangLocal = array('lang_code'=>'ru-RU', 'title'=>'Russian');

$constLang = array();
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBMAIN', 'value_const'=>'Community Builder/My Houses plugin settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES', 'value_const'=>'Показать мои дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT', 'value_const'=>'Показать редоктированные дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT', 'value_const'=>'Показать запрос аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY', 'value_const'=>'Показать запрос покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY', 'value_const'=>'Показать историю аренды пользователя');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_TO', 'value_const'=>'Показывать мои дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_TO', 'value_const'=>'Показывать редактированные дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_TO', 'value_const'=>'Показывать запросы аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_TO', 'value_const'=>'Показывать запросы покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_TO', 'value_const'=>'Показывать историю аренды пользователя');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_TT', 'value_const'=>'Показать мои дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_TT', 'value_const'=>'Показать edit houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_TT', 'value_const'=>'Показать запросы аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_TT', 'value_const'=>'Показать запросы покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_TT', 'value_const'=>'Показать историю аренды пользователя');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_RL', 'value_const'=>'Показать кнопку \'Показать мои дома\' в CB плагине');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_ML', 'value_const'=>'Показать мои дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_ML_BODY', 'value_const'=>'Показать пользовательскую группу, которой будет показана эта кнопка');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_RL', 'value_const'=>'Показать кнопку \'редактировать мои дома\' в CB плагине');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_ML', 'value_const'=>'Показывать редактированные дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_RL', 'value_const'=>'Показать кнопку \'запрос аренды\' в CB плагине');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_ML', 'value_const'=>'Показать запросы аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_RL', 'value_const'=>'Показать кнопку \'запрос покупки\' в CB плагине');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_ML', 'value_const'=>'Показать запрос покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_RL', 'value_const'=>'Показать кнопку \'моя история аренды\' в CB плагине');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_ML', 'value_const'=>'Показать мою историю аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE', 'value_const'=>'Real Estate Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC', 'value_const'=>'Наш каталог домов для вас. С возможностью продажи, покупки и аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SEARCH_DESC1', 'value_const'=>'Поиск домов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SEARCH_DESC2', 'value_const'=>'Поиск домов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_PICTURE', 'value_const'=>'no-img_eng.gif');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NOT_AUTHORIZED', 'value_const'=>'Вам не позволено производить это действие!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OK', 'value_const'=>'OK');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_STATUS', 'value_const'=>'Состояние');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPEXP', 'value_const'=>'RealEstateManager : Импорт/Экспорт');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPEXP_ADD', 'value_const'=>'Сначала Вы должны добавить категорию для выбора');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_PLEASE_SEL', 'value_const'=>'Пожалуйста, выберите');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FORMAT_CSV', 'value_const'=>'Файл CSV');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FORMAT_XML', 'value_const'=>'Файл XML');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR1', 'value_const'=>'Вы должны выбрать тип импорта!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR2', 'value_const'=>'Вы должны выбрать категорию для импорта!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR3', 'value_const'=>'Вы должны выбрать файл для импорта!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR4', 'value_const'=>'Вы должны выбрать тип экспорта!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_TYP', 'value_const'=>'Тип импорта.' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_TYP', 'value_const'=>'Выберите формат файла');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_TYP_TT_HEAD', 'value_const'=>'Выберите формат файла');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_CATEGORY', 'value_const'=>'Категория' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_CAT', 'value_const'=>'Категория');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_CAT_TT_HEAD', 'value_const'=>'Выберите категорию');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_FILE', 'value_const'=>'Файл для импорта' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_FILE', 'value_const'=>'Файл для импорта');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_FILE_TT_HEAD', 'value_const'=>'Выберите файл для импорта');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_FORMAT', 'value_const'=>'Сейчас поддерживается следующий формат CSV:<br />PropertyID | Description | Link | Listing type |  Location | Price | Title | ...' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_TYP', 'value_const'=>'Тип экспорта' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_TYP', 'value_const'=>'Выберите формат файла');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_TYP_TT_HEAD', 'value_const'=>'Выберите формат файла');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_CATEGORY', 'value_const'=>'Категория' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_CAT', 'value_const'=>'Категория');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_CAT_TT_HEAD', 'value_const'=>'Выберите категорию');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT', 'value_const'=>'Экспортировать результат' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_DOWNLOAD', 'value_const'=>'Вы можете загрузить экспортированный файл по следующей ссылке:' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_REMEMBER', 'value_const'=>'Пожалуйста помните, что файлы останутся сохраненными на сервере и вы должны будете удалить их самостоятельно.' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CATEGORIES_MANAGER', 'value_const'=>'RealEstateManager : Управление категориями');
$constLang[] = array('const'=>'_HEADER_CATEGORY', 'value_const'=>'Категория');
$constLang[] = array('const'=>'_HEADER_NUMBER', 'value_const'=>'Дома');
$constLang[] = array('const'=>'_HEADER_PUBLISHED', 'value_const'=>'Опубликован');
$constLang[] = array('const'=>'_HEADER_REORDER', 'value_const'=>'Сортировать');
$constLang[] = array('const'=>'_HEADER_ACCESS', 'value_const'=>'Доступ');
$constLang[] = array('const'=>'_HEADER_CHECKED_OUT', 'value_const'=>'Проверена');
$constLang[] = array('const'=>'_HEADER_ADD', 'value_const'=>'Добавить');
$constLang[] = array('const'=>'_HEADER_EDIT', 'value_const'=>'Редактировать');
$constLang[] = array('const'=>'_CATEGORY', 'value_const'=>'Категория');
$constLang[] = array('const'=>'_DML_CAT_MUST_SELECT_NAME', 'value_const'=>'Вы должны ввести имя для категории');
$constLang[] = array('const'=>'_CATEGORIES_NAME', 'value_const'=>'Категории');
$constLang[] = array('const'=>'_A_SELECT_IMAGE', 'value_const'=>'- Выберите изображение -');
$constLang[] = array('const'=>'_A_SELECT_TOP', 'value_const'=>'Сверху');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_TITLE', 'value_const'=>'Название категории');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_NAME', 'value_const'=>'Имя категории');
$constLang[] = array('const'=>'_CATEGORIES__IMAGEPREVIEW', 'value_const'=>'Предварительный просмотр недоступен');
$constLang[] = array('const'=>'_CATEGORIES__DETAILS', 'value_const'=>'Детали');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_IMAGEPOS', 'value_const'=>'Image Position');
$constLang[] = array('const'=>'_CATEGORIES__PARENTITEM', 'value_const'=>'Parent Item');
$constLang[] = array('const'=>'_DELETED', 'value_const'=>'Удалено'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_HOUSES', 'value_const'=>'RealEstateManager - Выдать в аренду' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_RETURN', 'value_const'=>'RealEstateManager - Вернуть из аренды' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMP', 'value_const'=>'Импортировать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_EXP', 'value_const'=>'Экспортировать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_CATEGORIES', 'value_const'=>'- Все категории');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_CATEGORIES', 'value_const'=>'Выбрать категорию');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_TO_RENT', 'value_const'=>'Выбрать для выдачи');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_RENT', 'value_const'=>'- Все');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_RENT', 'value_const'=>'Аренда');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_NOT_RENT', 'value_const'=>'Не в аренде');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_USERS', 'value_const'=>'- All Users');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_TO_PUBLIC', 'value_const'=>'Выбрать опубликованные');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_PUBLIC', 'value_const'=>'- Все');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_NOT_PUBLIC', 'value_const'=>'Не опубликованые');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PUBLIC', 'value_const'=>'Опубликованые');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH', 'value_const'=>'Поиск');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_KEYWORD', 'value_const'=>'Поиск по ключевым словам');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_BUTTON', 'value_const'=>'Поиск');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW', 'value_const'=>'RealEstateManager : Дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH', 'value_const'=>'Поиск:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_KOM', 'value_const'=>'Сначала вы должны создать категорию для данного выбора.'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PROPERTYID', 'value_const'=>'ID Недвижимости');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RESULT', 'value_const'=>'Результат');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COMMENT', 'value_const'=>'Описание');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CATEGORY', 'value_const'=>'Категория');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HOUSES', 'value_const'=>'# Дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COVER', 'value_const'=>'Вид');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COUNTRY', 'value_const'=>'Страна');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REGION', 'value_const'=>'Регион');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CITY', 'value_const'=>'Город');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ZIPCODE', 'value_const'=>'Почтовый индекс');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADDRESS', 'value_const'=>'Адрес');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_NO_LOCATION_AVAILIBLE', 'value_const'=>'No location available');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE', 'value_const'=>'Заголовок');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUILD_YEAR', 'value_const'=>'Год постройки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PROPERTY_TYPE', 'value_const'=>'Собственность');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RATING', 'value_const'=>'Рейтинг');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL', 'value_const'=>'URL Картинки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE', 'value_const'=>'Картинка');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_URL', 'value_const'=>'[ Купить от ] линк');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_TO', 'value_const'=>'Аренда кому');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM', 'value_const'=>'Аренда от');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_UNTIL', 'value_const'=>'Аренда до');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM_UNTIL', 'value_const'=>'Аренда от - до');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM_UNTIL_NOT_KNOWN', 'value_const'=>'неизвестно');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_USER', 'value_const'=>'Пользователь');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_EMAIL', 'value_const'=>'email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_ADRES', 'value_const'=>'Почтовый Адрес');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING_ADRES', 'value_const'=>'Телефонный номер');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_TIME', 'value_const'=>'Аренда до: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HITS', 'value_const'=>'Просмотров');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LINE', 'value_const'=>'Пересортировать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT', 'value_const'=>'Аренда');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PUBLIC', 'value_const'=>'Опубликован');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTROL', 'value_const'=>'Проверяется');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REVIEW_DATE', 'value_const'=>'Дата коментария');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD', 'value_const'=>'Загрузка основного фото');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OTHER_PICTURES_URL_UPLOAD', 'value_const'=>'Щелкните мышкой для загрузки фотографий дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_DESC', 'value_const'=>'Если вы загрузите изображение, то  изображение с текущей ссылки будет удалена/проигнорирована и замещена на загруженную.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD_ERROR', 'value_const'=>'Ошибка при загрузке изображения. Пожалуйста помните, что поддерживаются только форматы (jpg, png, gif)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PRICE', 'value_const'=>'Цена');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_INFORMATIONS', 'value_const'=>'Информация об аренде');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_ACTUAL', 'value_const'=>'Текущий электронный документ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD', 'value_const'=>'Загрузить электронный документ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_DOWNLOAD', 'value_const'=>'Скачать электронный документ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_DELETE', 'value_const'=>'Удалить электронный документ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT', 'value_const'=>'Электронный документ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD_ERROR', 'value_const'=>'Ошибка загрузки электронного документа!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_CB', 'value_const'=>'Состояние');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REQUIRED', 'value_const'=>'Требуется');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADDREVIEW', 'value_const'=>'Добавить обзор');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEWS', 'value_const'=>'Обзоры');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_SAVE', 'value_const'=>' Сохранить ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU', 'value_const'=>' Заказать его! ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU_SAVE', 'value_const'=>' Послать запрос на аренду ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW', 'value_const'=>'Обзор');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_TITLE', 'value_const'=>'Заголовок');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_RATING', 'value_const'=>'Оценка');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_COMMENT', 'value_const'=>'Комментарий');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ANONYMOUS', 'value_const'=>'Аноним');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_CLICKS', 'value_const'=>'Featured clicks');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_SHOWS', 'value_const'=>'Featured shows');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_TITLE', 'value_const'=>'Пожалуйста, введите заголовок вашего обзора!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_COMMENT', 'value_const'=>'Пожалуйста, введите текст вашего обзора!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_RATING', 'value_const'=>'Пожалуйста, введите оценку вашего обзора!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_NAME', 'value_const'=>'Пожалуйста, введите Имя вашего запроса на выдачу!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_EMAIL', 'value_const'=>'Пожалуйста, введите правильный e-mail для вашего запроса на выдачу!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_MAILING', 'value_const'=>'Пожалуйста, введите правильный почтовый адрес для вашего запроса на выдачу!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_UNTIL', 'value_const'=>'Пожалуйста, введите дату возврата для вашего запроса на выдачу!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_ALERT', 'value_const'=>'Check out must be more Check in');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_DATE', 'value_const'=>'Wrong date!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_NOT_USED', 'value_const'=>'Не выбран');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_PTBR', 'value_const'=>'Бразильский Португальский'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_DK', 'value_const'=>'Датский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_DUT', 'value_const'=>'Голландский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ENG', 'value_const'=>'Английский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_FAR', 'value_const'=>'Farsi');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_FRE', 'value_const'=>'Французский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_GER', 'value_const'=>'Немецкий');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ITA', 'value_const'=>'Итальянский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_PR', 'value_const'=>'Португальский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ROM', 'value_const'=>'Румынский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_RUS', 'value_const'=>'Русский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_SPA', 'value_const'=>'Испанский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_SWE', 'value_const'=>'Шведский');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO', 'value_const'=>'НЕТ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YES', 'value_const'=>'ДА');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_IS_EDITED', 'value_const'=>'Этот дом в данный момент редактируется другим администратором');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_DEL', 'value_const'=>'Ошибка при удалении дома!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FRONTEND', 'value_const'=>'Конфигурация сайта');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BACKEND', 'value_const'=>'Настройки Дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT', 'value_const'=>'PropertyID авто-инкремент'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT_TT_HEAD', 'value_const'=>'PropertyID авто-инкремент');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT_TT_BODY', 'value_const'=>'Выберите ДА, если вы хотите автоматически увеличивать PropertyID. Нет - если вы хотите вручную вводить PropertyID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD', 'value_const'=>'Поддержка электронных документов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_TT_HEAD', 'value_const'=>'Поддержка электронных документов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_TT_BODY', 'value_const'=>'Выберите ДА, если хотите активировать поддержку электронных документов для интерфейса администратора.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION', 'value_const'=>'Расположение электронных документов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION_TT_HEAD', 'value_const'=>'Расположение электронных документов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION_TT_BODY', 'value_const'=>'Расположение электронных документов на сервере. Путь зависит от главной директории Joomla и должен начинаться с символа /');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW', 'value_const'=>'Показывать электронные документы');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW_TT_HEAD', 'value_const'=>'Показывать ссылки для загрузки электронных документов сайта');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW_TT_BODY', 'value_const'=>'Выберите ДА, если хотите показать ссылку на загрузку электронные документы на сайте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW', 'value_const'=>'Показывать обзоры');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW_TT_HEAD', 'value_const'=>'Показывать обзоры на сайте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW_TT_BODY', 'value_const'=>'Выберите ДА, если хотите активировать возможность добавления обзоров для домов на вашем сайте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL', 'value_const'=>'Разрешить показ обзоров');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Разрешить показ обзоров');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Разрешить показ обзоров на сайте. Эта функция может быть активирована только если функция Показывать обзоры также активирована!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW', 'value_const'=>'Показывать состояние аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW_TT_HEAD', 'value_const'=>'Показывать состояние аренды на сайте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW_TT_BODY', 'value_const'=>'Выберите ДА, если хотите показать состояние аренды домов на вашем сайте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSESTATUS_SHOW', 'value_const'=>'Show houses status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSESTATUS_SHOW_TT_BODY', 'value_const'=>'Set Yes to show houses status on the page of all houses and single categories on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL', 'value_const'=>'Разрешить запрос на аренду');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Разрешить запрос на аренду');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Разрешает запрос на аренду на сайте. Эта функция может быть активирована только если функция Показывать состояние выдачи также активирована!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW', 'value_const'=>'Показать стоимость');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW_TT_HEAD', 'value_const'=>'Показать стоимость');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW_TT_BODY', 'value_const'=>'Показать стоимость книги на сайте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ITEM_IN_PAGE', 'value_const'=>'Количество домов на странице.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_SHOW_TT_BODY', 'value_const'=>'Устанавливает количество показываемых домов на странице.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_SHOW_TT_HEAD', 'value_const'=>'Разбивка на страницы.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE', 'value_const'=>'Размер фото');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE_TT_HEAD', 'value_const'=>'Размер фото');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE_TT_BODY', 'value_const'=>'Установите размер обложки в пикселях - высота/ширина в пикселях');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS', 'value_const'=>'Домов на странице');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS_TT_HEAD', 'value_const'=>'Домов на странице');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS_TT_BODY', 'value_const'=>'Введите количество домов показываемое на каждой странице.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL', 'value_const'=>'Ревью email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_TT_HEAD', 'value_const'=>'Ревью email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_TT_BODY', 'value_const'=>'Будет послано сообщение, когда будет добавлено новое ревью. Вы можете ввести много адресов разделив их запятой.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL', 'value_const'=>'Запрос на дом - email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_TT_HEAD', 'value_const'=>'Запрос на книгу - email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_TT_BODY', 'value_const'=>'Будет послано сообщение, когда будет добавлен запрос на дом. Вы можете ввести много адресов разделив их запятой.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REQUEST_RENT', 'value_const'=>'RealEstateManager : Запрос на аренду');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT', 'value_const'=>'RealEstateManager : Про');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_ABOUT', 'value_const'=>'Про');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_RELEASENOTE', 'value_const'=>'Обзор релиза');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_CHANGELOG', 'value_const'=>'Список изменений');
$constLang[] = array('const'=>'_REALESTATE_MANAGER__HTML_ABOUT', 'value_const'=>'Добро пожаловать в RealEstateManager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER__HTML_ABOUT_INTRO', 'value_const'=>'Спасибо за использование нашего компонента!<br /><br />
RealEstateManager позволяет вам управлять арендой и продажей домов. Это возможно благодаря поддержке категорий и  под категорий, также вы можете добавить PropertyID для внутренних нужд. Встроено управление выдачей/возвратом, с возможностью запроса на аренду с вашего сайта. RealEstateManager также позволяет возможность добавления обзора аренды пользователями, с возможностью управления обзорами в backend. Встроенная поддержка электронных документов.<br/ ><br />
Замечания: <br/ >
- для загрузки фото на ваш сервер вам нужен PHP5 скомпилированный с поддержкой CURL<br />
- для работы экспорта в csv нужен PHP5 скомпилированный с поддержкой XSL<br/ >
- для CAPTCHA,нужен PHP5 скомпилированный с поддержкой GD<br />
<br />
На сайте <a href="http://www.ordasoft.com">www.ordasoft.com</a> Вы можете найти  RealEstateManager документацию, языковые файлы, форум поддержки и загрузит много дополнительных модулей и plugins.<br />
<br />
Возможен выпуск специализированных версий, если Вы хотите добавить новые свойства в RealEstateManager. Пожалуйста пишите точное описание того, что Вам требуется  <a href="mailto:sales@ordasoft.com">sales@ordasoft.com</a> и мы свяжемся с Вами. При заказе специализированной версии, Вы получите следующую PRO версию бесплатно.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_TEXT_WSINFO_TEXT1', 'value_const'=>'Информация будет сохранена только если вы используете ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_TEXT_WSINFO_TEXT2', 'value_const'=>'. иначе будет проигнорирована.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID_CHECK', 'value_const'=>'Пожалуйста введите PropertyID для этого дома!');    
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID', 'value_const'=>'Дом с таким PropertyID уже существует!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_CATEGORY', 'value_const'=>'Вы должны выбрать категорию для этого дома!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC_TITLE', 'value_const'=>'Запрос на аренду');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC_RENT', 'value_const'=>'Список показывает дома выбранные для выдачи.<br />Если он пуст проверьте ваш выбор снова.');  
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_NAME', 'value_const'=>'Ваш полное имя');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL', 'value_const'=>'email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_MAILING', 'value_const'=>'Описание');     
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_UNTIL', 'value_const'=>'Выписка');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_FROM', 'value_const'=>'Регистрация');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_THANKS', 'value_const'=>'Ваш запрос на аренду был сохранен в нашей базе данных. Мы проверим ваш запрос и информируем вас при первой возможности.<br />Спасибо что воспользовались нашими услугами.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING_REQUEST_THANKS', 'value_const'=>'Ваш запрос на покупку был сохранен в нашей базе данных. Мы проверим ваш запрос и информируем вас при первой возможности.<br />Спасибо что воспользовались нашими услугами.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_OBJECT', 'value_const'=>'RealEstateManager: Запрос принят');     
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_TEXT1', 'value_const'=>'Дом');  
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_TEXT2', 'value_const'=>'который вы запросили готов к аренде.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_SAVE', 'value_const'=>'Сохранить');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_RENT', 'value_const'=>'Аренда');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_RETURN', 'value_const'=>'Вернуть дом с аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_ACCEPT', 'value_const'=>'Принять запрос');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_DECLINE', 'value_const'=>'Отклонить запрос');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_IMPORT', 'value_const'=>'Импорт домов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EXPORT', 'value_const'=>'Экспорт домов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_DELETE_REVIEW', 'value_const'=>'Удалить обзор');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EDIT_REVIEW', 'value_const'=>'Редактировать обзор');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_GENERAL_INFO', 'value_const'=>'Основная информация:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_VERSION', 'value_const'=>'Версия:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_RELEASE_DATE', 'value_const'=>'Дата выпуска:'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_PROJECTLINK', 'value_const'=>'Ссылка на проект:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_PROJECT_HOST', 'value_const'=>'Сайт проекта:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_LICENSE', 'value_const'=>'Лицензия:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_WARRANTY', 'value_const'=>'Эта программа распространяется в надежде, что она будет полезна, но безо всякой гарантии. Смотри включенный LICENSE.TXT для большей информации.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_DEVELOP', 'value_const'=>'Разработана:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_HOMEPAGE', 'value_const'=>'Домашняя страница');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD_URL', 'value_const'=>'Ссылка на электронный документ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL', 'value_const'=>'Разрешить электронные документы');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Разрешить электронные документы на сайте. Эта функция может быть активирована только в том случае, если была разрешена функция: Показать электронные документы');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Разрешить электронные документы');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL', 'value_const'=>'Разрешить показ стоимости:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Показывать стоимость на сайте. Эта функция может быть активирована только в том случае, если была разрешена функция "Разрешить показ цен"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Разрешить показ стоимости');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_REVIEW_MANAGER', 'value_const'=>'RealEstateManager : Управление обзорами к домам');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_HOUSE', 'value_const'=>'Адрес Дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_REVIEW', 'value_const'=>'Заголовок обзора');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_KEYGUEST', 'value_const'=>'Введите код, который Вы видите на картинке ниже.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT', 'value_const'=>'Печать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_SELECT', 'value_const'=>'Выберите столбцы для печати и нажмити [ Далее ]!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FONT_SIZE', 'value_const'=>'Размер шрифта');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FORMAT', 'value_const'=>'Формат');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW', 'value_const'=>'Показывать лицензию');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW_TT_BODY', 'value_const'=>'Показывать или не показывать лицензию перед загрузкой файла');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW_TT_HEAD', 'value_const'=>'Показывать лицензию');
$constLang[] = array('const'=>'_LICENSE_AGREEMENT_TITLE', 'value_const'=>'Лицензия');
$constLang[] = array('const'=>'_LICENSE_AGREEMENT_ACCEPT', 'value_const'=>'Принимаю?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW', 'value_const'=>'Показывать кнопку [ Купить ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW_TT_HEAD', 'value_const'=>'Показывать кнопку [ Купить ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW_TT_BODY', 'value_const'=>'Показывать кнопку [ Купить ] для дома на сайте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL', 'value_const'=>'Разрешить показ кнопки [ Купить ]:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Показывать кнопку [ Купить ] на сайте для выбранных категорий. Эта функция может быть активирована только в том случае, если была разрешена функция "Разрешить показ кнопки [ Купить ]"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Разрешить показ кнопки [ Купить ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ENTIRE_BU', 'value_const'=>'Экспорт всех данных');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ENTIRE_RECOVER', 'value_const'=>'Импорт всех данных');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_CONF', 'value_const'=>'В результате этой операции все текущие RealEstateManager\n данные будут удалены. Вы хотите продолжить? ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPORT_WARNING_MESSAG', 'value_const'=>'
<strong>CSV&nbsp;ИМПОРТ:</strong>
<ul>
	<li>В данный момент формат CSV поддерживает:&nbsp;&nbsp;PropertyID&nbsp;|&nbsp;Description&nbsp;|&nbsp;|&nbsp;Listing type&nbsp;|&nbsp;Price&nbsp;|&nbsp;Price type&nbsp;|&nbsp;Title&nbsp;|&nbsp;Address&nbsp;|&nbsp;...&nbsp;|</li>
	<li>Разделитель областей данных символ (<strong>&nbsp;|&nbsp;</strong>)</li>
	<li>Вы можете импортировать поля с правильным(и) HouseID, оставляя другие поля пустыми, например:&nbsp;&nbsp;PropertyID&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;Price&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;Title&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;...&nbsp;|</li>
	<li><strong>ПРЕДУПРЕЖДЕНИЕ:</strong>&nbsp;не используйте импорт CSV, если есть отзывы пользователей, в таком случае используйте Полный импорт данных!</li>
</ul>
<strong>XML&nbsp;ИМПОРТ:</strong>
<ul>
	<li>Импорт данных в XML формате</li>
	<li><strong>ПРЕДУПРЕЖДЕНИЕ:</strong>&nbsp;не используйте импорт XML, если есть отзывы пользователей, в таком случае используйте Полный импорт данных!</li>
	<li><strong>ПРЕДУПРЕЖДЕНИЕ:</strong>&nbsp;ассоциации между домами не сохранятся!</li>
        <li><strong>ПРЕДУПРЕЖДЕНИЕ:</strong>&nbsp;фото не сохраняются, нужно отдельно загружать фотографии в папку!</li>
</ul>
<strong>Полный&nbsp;Импорт&nbsp;данных:</strong>
<ul>
	<li>Этот ипорт будет импортировать все RealEstateManager данные и востанавливать все поля и детали</li>
	<li>Эта опкрация перезапишет все данные, буддете осторожны применяя её!</li>
  <li>Для востановления всех фото домов, востановите сохраненные перед этим все файлы из папки: --components/com_realestatemanager/photos--!</li>
  <li>Для востановления всех электронных документов, востановите сохраненные перед этим все файлы из папки прописсаной в настройках админки --Расположение электронных документов--!</li>
</ul>
');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_EXPORT_WARNING_MESSAG', 'value_const'=>'
<strong>CSV&nbsp;ЭКСПОРТ:</strong>
<ul>
	<li>Экспорт CSV будет содержать все поля для дальнейшего редактирования в электронных таблицах или редакторе текста</li>
	<li>В данный момент для последующего импорта поддерживается тфкой формат CSV:&nbsp;&nbsp;PropertyID&nbsp;|&nbsp;Description&nbsp;|&nbsp;Link&nbsp;|&nbsp;Listing type&nbsp;|&nbsp;Price&nbsp;|&nbsp;Price type&nbsp;|&nbsp;Title&nbsp;|&nbsp;Address&nbsp;|&nbsp;...&nbsp;|</li>
	<li><strong>ПРЕДУПРЕЖДЕНИЕ:</strong> Если Вы хотите импортировать позже все, включая обзоры, используйте экспорт Всех данных!</li>
</ul>
<strong>XML&nbsp;ЭКСПОРТ:</strong>
<ul>
	<li>Экспорт данных в XML формате</li>
  <li><strong>ПРЕДУПРЕЖДЕНИЕ:</strong> Если Вы хотите импортировать позже все, включая обзоры, используйте экспорт Всех данных!</li>
        <li><strong>ПРЕДУПРЕЖДЕНИЕ:</strong>&nbsp;ассоциации между домами не сохранятся!</li>
        <li><strong>ПРЕДУПРЕЖДЕНИЕ:</strong>&nbsp;фото не сохраняются, нужно отдельно загружать фотографии в папку!</li>
</ul>
<strong>Полный&nbsp;Экспорт&nbsp;Данных:</strong>
<ul>
	<li>Этот экспорт экспортирует все RealEstateManager данные и скопирует все поля и записи</li>
	<li>Вы можете позже использовать эти файлы, чтобы восстановить полностью ваши данные RealEstateManager</li>
	<li>Когда в последствии будете импортировать, будте осторожны!</li>
  <li>Для востановления всех фото домав, востоновите папку: --components/com_realestatemanager/photos--!</li>
  <li>Для востановления всех электронных документов, востоновите все файлы из прапки в настройках админки - [--Расположение электронных документов--]</li>
</ul>
');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND', 'value_const'=>'Посылать уведомление о добавлении обзоров');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND_TT_HEAD', 'value_const'=>'Посылать уведомление о добавлении обзоров');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND_TT_BODY', 'value_const'=>'Поставьте ДА если вы хотите получать email уведомление если пользователь добавит отзыв. Используйте панель для задания прав - кто может посылать такие письма');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Группы пользователей');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Группы пользователей');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Выберите тех кто будет посылать уведомление при добавлении отзыва. Эта опция будет доступна если опция --Посылать уведомление о добавлении обзоров-- будет установлена в Да');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND', 'value_const'=>'Посылать уведомление о заказах');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND_TT_HEAD', 'value_const'=>'Посылать уведомление о заказах');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND_TT_BODY', 'value_const'=>'Поставьте ДА если вы хотите получать email уведомление если пользователь добавит заказ на дом. Используйте панель для задания прав - кто может посылать такие письма');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Группы пользователей');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Группы пользователей');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Выберите тех кто будет посылать уведомление при заказе на дом. Эта опция будет доступна если опция --Посылать уведомление о заказах-- будет установлена в Да');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_REVIEW_COMMENT', 'value_const'=>'Комментарий к обзору');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_HEAD', 'value_const'=>'Показывать пользовальскую картинку в категории');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_BODY', 'value_const'=>'Если данная опция установлена как Да, Вы можете менять стандартную картинку для категории на свою.\\n Это&nbsp;можно&nbsp;настроить&nbsp;в:&nbsp;RealEstateManager&nbsp;/&nbsp;Manage&nbsp;Categories&nbsp;/&nbsp;Edit&nbsp;/&nbsp;Select&nbsp;image!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_RETURN_HOUSES', 'value_const'=>'Вы не можете вернуть дом,который еще не на аренде.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_RENT_HOUSES', 'value_const'=>'Пожалуйста определите элемент для Выбора Дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_RETURN_HOUSES', 'value_const'=>'Пожалуйста определите элемент для Возврата Дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ACCEPT_REQUEST', 'value_const'=>'Пожалуйста выберите элемент для Принятия запроса');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_DECLINE_REQUEST', 'value_const'=>'Пожалуйста выберите элемент для Отклонения запроса');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_IMPORT', 'value_const'=>'Вы должны выбрать тип для импорта!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_EXPORT', 'value_const'=>'Вы должны выбрать тип для экспорта!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_LISTING_TYPE', 'value_const'=>'Вы должны выбрать тип для этого дома!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_ADDRESS', 'value_const'=>'Добавте адрес для этого дома!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_PRICE', 'value_const'=>'Добавте цену для этого дома!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_TITLE', 'value_const'=>'Добавте заголовок для этого дома!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_ROOMS', 'value_const'=>'Введите корректное число для количества комнат!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BATHROOMS', 'value_const'=>'Введите корректное число для количества ванн!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BEDROOMS', 'value_const'=>'Введите корректное число для количества спален!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_YEAR', 'value_const'=>'Введите корректное дату постройки!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_AREA', 'value_const'=>'Ввведите корректный район!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_LOT_SIZE', 'value_const'=>'Ввведите корректный размер участка!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_HOUSE_SIZE', 'value_const'=>'Ввведите корректную площадь дома!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_NAME', 'value_const'=>'Введите имя для вашего запроса!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_EMAIL', 'value_const'=>'Введите корректный e-mail для вашего запроса!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_PHONE', 'value_const'=>'Введите корректный телефонный номер для вашего запроса!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LISTING_TYPE', 'value_const'=>'Тип');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LISTING_STATUS', 'value_const'=>'Статус');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ROOMS', 'value_const'=>'Комнат');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BATHROOMS', 'value_const'=>'Ванн');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BEDROOMS', 'value_const'=>'Спален');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AGENT', 'value_const'=>'Агент');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTACT_AGENT', 'value_const'=>'Связаться с агентом');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AGENT_INFO', 'value_const'=>'Информация об агенте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PHOTOS', 'value_const'=>'Фотографии');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PRICING', 'value_const'=>'Ценообразование ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OVERVIEW', 'value_const'=>'Обзор');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AMENITIES', 'value_const'=>'Удобства');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BOOK_NOW', 'value_const'=>'Заказать сейчас');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXPIRATION_DATE', 'value_const'=>'Последняя дата');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LOT_SIZE', 'value_const'=>'Размер участка');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HOUSE_SIZE', 'value_const'=>'Площадь дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_GARAGES', 'value_const'=>'Гаражи');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_APPROVED', 'value_const'=>'Одобрен');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REQUEST_PHONE', 'value_const'=>'Ваш телефонный номер');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_REQUIREMENT_FIELDS', 'value_const'=>'Необходимые поля');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_RECOMMENDED_FIELDS', 'value_const'=>'Рекомендованные поля');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_ADDRESS_FIELDS', 'value_const'=>'Адрес');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_OPTIONAL_FIELDS', 'value_const'=>'Необязательные поля');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_PHOTO_MANAGE', 'value_const'=>'Управление фото');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_PHOTOGALERY', 'value_const'=>'Галлерея');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_ADVERTISMENT', 'value_const'=>'Advertisment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING', 'value_const'=>'Информация клиента');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SALE_MANAGER', 'value_const'=>'RealEstateManager : Меннаджер продаж');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_SEND_MESSAGE', 'value_const'=>' Отправить сообщение ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND', 'value_const'=>'Посылать уведомлене об запросе на покупку');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND_TT_HEAD', 'value_const'=>'Посылать уведомлене об запросе на покупку');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND_TT_BODY', 'value_const'=>'Ваберите ДА если вы хотите получать подтверждение через почту если пользователь послал запрос на покупку. Используйте панель с права для установки прав от кого будут посылаться такие письма. Вы можете установить адреса для получения таких писем в настройках для админки.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Группы пользователей');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Группы пользователей');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Выберите от каких груп полбзователей будут посылатся уведомление о запрос на пакупку. Эта функция будет активирована только если установлена в ДА опция -- Посылать уведомлене об запросе на покупку --');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL', 'value_const'=>'Email - для уведомлении о запросе на покупку');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG', 'value_const'=>'RealEstateManager : Настройки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REMOVE_MAIN_PHOTO', 'value_const'=>'Удалить');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NEW_PHOTO', 'value_const'=>'Фото ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_RENT_OUT', 'value_const'=>'Конец аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ACCESSED_FOR_RENT', 'value_const'=>'Для аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ACCESSED_FOR_SALE', 'value_const'=>'Для продажи');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_RETURN', 'value_const'=>'Возврат аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB', 'value_const'=>'Показывать таб места  расположения');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_TT_HEAD', 'value_const'=>'Показывать таб места  расположения');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_TT_BODY', 'value_const'=>'Выберети Да для показа таба места  расположени');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB', 'value_const'=>'Показывать  таб описания');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB_TT_HEAD', 'value_const'=>'Показывать  таб описания');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB_TT_BODY', 'value_const'=>'Выберети Да для показа таба описания');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_ADD_HOUSE', 'value_const'=>' Добавить дом ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_PUBLISH', 'value_const'=>'Публиковать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_UNPUBLISH', 'value_const'=>'Разпубликовать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_DELETE', 'value_const'=>'Удалить');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RETURN_HOUSE_FROM_RENT', 'value_const'=>'Убрать из аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT', 'value_const'=>'Здать в аренду');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW', 'value_const'=>'Показать кнопку [ Добавить дом ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW_TT_HEAD', 'value_const'=>'Показать кнопку [ Добавить дом ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW_TT_BODY', 'value_const'=>'Показать кнопку [ Добавить дом ] во внешнем интерфейсе ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL', 'value_const'=>'Разрешить кнопку [ Добавить дом ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Разрешить кнопку [ Добавить дом ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Разрешить кнопку [ Добавить дом ] во внешнем интерфейсе. Эта функция будет активирована только если  --Показать кнопку[ Добавить дом ]--  выбрано Да ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTACTS', 'value_const'=>'Контакты');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS', 'value_const'=>'Показать контакты');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_TT_HEAD', 'value_const'=>'Показать контакты');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_TT_BODY', 'value_const'=>'Показать контакты  на табе  \'All information\' ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION', 'value_const'=>'Путь фото');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION_TT_BODY', 'value_const'=>'Путь фотографий на сервере . Путь зависит от расположения деректории  Joomla и должен  начинаться и заканчиваться /');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION_TT_HEAD', 'value_const'=>'Путь фото');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL', 'value_const'=>'Показывать  таб описания');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Показывать  таб описания');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Разрешить показывать  таб описания во внешнем интерфейсе. Эта функция будет активирована только если  --Показывать  таб описания--  выбрано Да !');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL', 'value_const'=>'Показывать таб месторасположение ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Показывать таб месторасположение');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Разрешить показывать  таб месторасположение во внешнем интерфейсе. Эта функция будет активирована только если  --Показывать  таб месторасположение--  выбрано Да !');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL', 'value_const'=>'Показать контакты');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Показать контакты');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Разрешить показывать  таб контакты во внешнем интерфейсе.Эта функция будет активирована только если  --Показывать  таб контакты--  выбрано Да !');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_UNAVAILABLE_FOR_RENT', 'value_const'=>'Недоступно для аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REAL_ESTATE_THANKS', 'value_const'=>'Недвижимость была сохранена в базе данных.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT_FROM', 'value_const'=>'Доступно для аренды с ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT_UNTIL', 'value_const'=>'Доступно для аренды по ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_NOTHING_FOUND', 'value_const'=>'По вашему запросу ничего не найдено.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_DESCRIPTION', 'value_const'=>'Описание');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_LOCATION', 'value_const'=>'Место положение');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_ALL', 'value_const'=>'Детали');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_REVIEWS', 'value_const'=>'Отзывы');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_SELECT', 'value_const'=>'---выберите---');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_FOR_RENT', 'value_const'=>'дом для аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_FOR_SALE', 'value_const'=>'дом для продажи');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_LISTING_STATUS', 'value_const'=>'Активный,Предложение,Контракт,Неактивный,Залог');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_PROPERTY_TYPE', 'value_const'=>'Аппартаменты,Коммерческая,Коператив,Общежитие,Ферма,Земля,Производство,Многосемейный,Ранчо,На одну семью,Строительство,Городской дом');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER', 'value_const'=>'Ответ запроса покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER_TT_HEAD', 'value_const'=>'Ответ запроса покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER_TT_BODY', 'value_const'=>'Отослать письмо пользователю о решении по запросу покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM', 'value_const'=>'Форма для ответа на запрос покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_TT_BODY', 'value_const'=>'Форма для ответа на запрос покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_TT_HEAD', 'value_const'=>'Форма для ответа на запрос покупки');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_HOUSEID', 'value_const'=>'№ Дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_OWNER', 'value_const'=>'владелец');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_EXACTLY', 'value_const'=>'точно');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_RENT_ANSWER_SUBJECT', 'value_const'=>'Ответ на ваш запрос');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM', 'value_const'=>'Форма для ответа на запрос аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_TT_BODY', 'value_const'=>'Форма для ответа на запрос аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_TT_HEAD', 'value_const'=>'Форма для ответа на запрос аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_DESCTIPTION', 'value_const'=>'Вы можете использовать: <br/>{title} - заголовок арендуемого дома
          <br/>{answer} - уменьшенный или введенный<br/>{username} - имя пользователя,который запрашивал дом<br/>
          {owneremail} - email владельца дома<br/>{ownername} - имя владельца дома<br/>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER', 'value_const'=>'Ответ на запроса аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_TT_HEAD', 'value_const'=>'Ответ на запроса аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_TT_BODY', 'value_const'=>'Отослать email пользователю о решении по запросу аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_ACCEPTED', 'value_const'=>'Согласиться');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_DECLINED', 'value_const'=>'Отказаться');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EDIT_RENT', 'value_const'=>'Редактировать аренду');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL', 'value_const'=>'Предоставить список владельцев');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Предоставить список владельцев');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Выберите пользователей, которым предоставлен список пользователей');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW', 'value_const'=>'Показать список владельцев');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW_TT_HEAD', 'value_const'=>'Показать список владельцев');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW_TT_BODY', 'value_const'=>'Если выбрано "да" показывать список пользователей на сайте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW', 'value_const'=>'Показать владельцев');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW_TT_HEAD', 'value_const'=>'Показать владельцев');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW_TT_BODY', 'value_const'=>'Показать дома с владельцами или без');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL', 'value_const'=>'Разрешить RSS для');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Разрешить RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Выберите пользователей которым доступно RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW', 'value_const'=>'Показывать RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW_TT_BODY', 'value_const'=>'Показывать RSS или нет');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW_TT_HEAD', 'value_const'=>'Показывать RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_LIST', 'value_const'=>'список');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_GALLERY', 'value_const'=>'галерея');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_LIST_GALLERY', 'value_const'=>'Выбираемый пользователем');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE', 'value_const'=>'Тип просмотра');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_TT_HEAD', 'value_const'=>'Тип просмотра');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_TT_BODY', 'value_const'=>'Выбрать тип просмотра для дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REGISTRATIONLEVEL', 'value_const'=>'Разрешить публиковать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD_TT_BODY', 'value_const'=>'Публиковать дома добавленные с сайта');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD', 'value_const'=>'Публиковать добавленные дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD_TT_HEAD', 'value_const'=>'Публиковать добавленные дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Выбрать пользователей, которым позволено подтверждать дома с сайта');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_APPROVE_REGISTRATIONLEVEL', 'value_const'=>'Позволять подтверждать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_APPROVE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Позволять подтверждать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD_TT_BODY', 'value_const'=>' Подтвердить дом добавленный с сайта');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD', 'value_const'=>'Подтвердить добавленный дом');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD_TT_HEAD', 'value_const'=>'Подтвердить добавленный дом');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Разрешить кнопку<br />[ печатать PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Разрешить кнопку<br />[ печатать PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Разрешить кнопку [ печатать  ] на сайте. Эта функция будет активна только если --показана кнопка [ print PDF ]-- и установлено ДА!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Разрешить кнопку<br />[ печатать ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow button [ print View ] in the frontend. This function will be activated only if --Show button [ print View ]-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Allow button<br />[ send Link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button<br />[ send Link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow button [ send Link ] in the frontend. This function will be activated only if --Show button [ send Mail ]-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW', 'value_const'=>'Show button<br />[ send Link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Show button<br />[ send Link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW_TT_BODY', 'value_const'=>'Shows button [ send Link ] in the House list in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW', 'value_const'=>'Show button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Show button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW_TT_BODY', 'value_const'=>'Shows button [ print View ] in the House list in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW', 'value_const'=>'Show button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Show button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW_TT_BODY', 'value_const'=>'Shows button [ print PDF ] in the House list in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_USER_HOUSES', 'value_const'=>'User houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DESCRIPTION', 'value_const'=>'Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OWNER', 'value_const'=>'Владелец');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HAVENOT_HOUSES_RSS', 'value_const'=>'There have not houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HAVENOT_HOUSES', 'value_const'=>'You have not houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DELETE_HOUSES', 'value_const'=>'Are you sure?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_NOT_SELECTED', 'value_const'=>'Please select houses first!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NUMBER_HOUSES', 'value_const'=>'Домов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OWNERS', 'value_const'=>'Владельцы');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_ACCESS_PAGE', 'value_const'=>'Sorry, you have not access to this page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_OWNERSLIST', 'value_const'=>'Owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_OWNERSLIST', 'value_const'=>'Список владельцев');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SHOW_MY_HOUSES', 'value_const'=>'Показать мои дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_MY_HOUSES', 'value_const'=>'My houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PUBLISH', 'value_const'=>'Publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_UNPUBLISH', 'value_const'=>'Unpublish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DELETE', 'value_const'=>'Delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ID', 'value_const'=>'Id');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDIT', 'value_const'=>'Редактировать');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FULL_XML', 'value_const'=>'Full XML');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_EDIT', 'value_const'=>'RealestateManager - Edit house rent details' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND', 'value_const'=>'Send Add House Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND_TT_HEAD', 'value_const'=>'Send Add House Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND_TT_BODY', 'value_const'=>'Set to YES if you want to be notified through email when a user adds a House. Use the panel on the right to set who will send these notifications. You can set the receiving email addresses in [ Configuration Backend ].');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'User groups from which Add House notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'User groups from which Add House notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose which user groups will send Add House notifications. This function will be activated only if --Send Add House Notification-- is also set to YES');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW', 'value_const'=>'Show Buy status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW_TT_HEAD', 'value_const'=>'Show Buy status in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW_TT_BODY', 'value_const'=>'YES if you want to show the current Buy status of houses in the frontend.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL', 'value_const'=>'Allow Buy Requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow Buy Request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow Buy Requests in the frontend. This function will be activated only if --Show Buy Status-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE', 'value_const'=>'House main photos size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE_TT_BODY', 'value_const'=>'Set main photos size - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE_TT_HEAD', 'value_const'=>'House main photos size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE', 'value_const'=>'House gallery photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE_TT_HEAD', 'value_const'=>'House gallery photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE_TT_BODY', 'value_const'=>'Set gallery photo size - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE', 'value_const'=>'House upload photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE_TT_HEAD', 'value_const'=>'House upload photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE_TT_BODY', 'value_const'=>'Set upload photo size - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_THUMBNAIL_SETTINGS', 'value_const'=>'Crop image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_THUMBNAIL_TT_BODY', 'value_const'=>'Set Yes to crop images and No to scale images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL', 'value_const'=>'Add House email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_TT_HEAD', 'value_const'=>'Add House email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_TT_BODY', 'value_const'=>'Where to send notification messages for new House added. You can enter multiple email addresses separated by a comma.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY', 'value_const'=>'Rent before end notify');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_TT_HEAD', 'value_const'=>'Rent before end notify');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_TT_BODY', 'value_const'=>'Send email to admin before Rent end.<br /> For that you need create GRON job and connect to Cron check so URL:<br /> \'http://{yours site}/index.php?option=com_realestatemanager&Itemid={Yours ItemID}&task=rent_before_end_notify\'   with span - every day.<br /> Cron Jobs may look like:<br /> \'wget -q -O - http://localhost/~andrew/joomla_15/index.php?option=com_realestatemanager&Iteid=56&task=rent_before_end_notify /dev/null\' ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS', 'value_const'=>'Rent end days');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS_TT_HEAD', 'value_const'=>'Rent end days');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS_TT_BODY', 'value_const'=>'How much days before rent end send notify email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL', 'value_const'=>'Rent end email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL_TT_HEAD', 'value_const'=>'Rent end email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL_TT_BODY', 'value_const'=>'Set emails for send notify email to user about Rent end. You may set set emails separated them with help coma.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP', 'value_const'=>'Show location map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP_TT_HEAD', 'value_const'=>'Location map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP_TT_BODY', 'value_const'=>'If choose "yes" then show location map ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_UPDATE', 'value_const'=>'Update');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_UPDATE_TT_HEAD', 'value_const'=>'Update');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_UPDATE_TT_BODY', 'value_const'=>'If choose "yes" then do not remove database');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_CATEGORIES', 'value_const'=>'Check categories of houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_RENT_REQUEST', 'value_const'=>'Rent request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HOUSE_NOT_PUBLISHED', 'value_const'=>'You can\'t view this page because it not published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HOUSE_NOT_APPROVED', 'value_const'=>'You can\'t view this page because it not approved by administrator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_EDIT_HOUSE', 'value_const'=>'Edit House');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_ADD_HOUSE', 'value_const'=>'Add House');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_WARNING_NO_LOGIN', 'value_const'=>'You have not logined! If you want edit house in future, then login!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CLICKMAP', 'value_const'=>'Кликните по карте, что бы выбрать месторасположение дома');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DATE', 'value_const'=>'Date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_PICTURE_BIG', 'value_const'=>'no-img_eng_big.gif');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_EDIT_HOUSE', 'value_const'=>'Edit house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_DESCTIPTION', 'value_const'=>'You can use: <br/>{title} - title of buy house
          <br/>{answer} - declined or accepded<br/>{username} - the name of the user who requested a house<br/>
          {owneremail} - the email of the owner house<br/>{ownername} - the name of the owner house<br/>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADVANCED_SEARCH', 'value_const'=>'Advanced<br />search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FROM', 'value_const'=>'from');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TO', 'value_const'=>'to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ALL', 'value_const'=>'all');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT', 'value_const'=>'Available for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_UNTIL', 'value_const'=>'until');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_WEEK', 'value_const'=>'Неделя');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_WEEKEND', 'value_const'=>'Выходные');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_MIDWEEK', 'value_const'=>'Среди недели');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_YEAR', 'value_const'=>'Год');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_MONTH', 'value_const'=>'Месяц');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_CALENDAR', 'value_const'=>'Календарь');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_ADD_PRICE', 'value_const'=>'Добавить стоимость');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_SELECT_DELETE', 'value_const'=>'Select price which are necessary to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_NEW_PRICE', 'value_const'=>'Новая цена аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_CALENDAR_ADD_NEW_PRICE', 'value_const'=>'Добавить новую цену аренды');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_REGISTRATIONLEVEL', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose users, whom allow show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_SHOW', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_SHOW_TT_HEAD', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_SHOW_TT_BODY', 'value_const'=>'If choose "yes" then show calendar tab in frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDAR_SHOW', 'value_const'=>'Show owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDAR_SHOW_TT_HEAD', 'value_const'=>'Show calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDAR_SHOW_TT_BODY', 'value_const'=>'Show house calendar or not');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PLACEHOLDER', 'value_const'=>'Default price label for calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PLACEHOLDER_TT_BODY', 'value_const'=>'Default price labels for calendar (weekend, week, midweek)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PLACEHOLDER_TT_HEAD', 'value_const'=>'Default price label for calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER', 'value_const'=>'RealEstateManager : Language Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_MANAGER_LANG_TAG', 'value_const'=>'Lang tag');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_CONST', 'value_const'=>'Constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_VALUE_CONST', 'value_const'=>'Value constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SEARCH_CONST', 'value_const'=>'Search by constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SEARCH_VALUE_CONST', 'value_const'=>'Search by value constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SYS_TYPE', 'value_const'=>'Sys type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE', 'value_const'=>'Language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FEATURED_MANAGER', 'value_const'=>'RealEstateManager : Features Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE', 'value_const'=>'Features');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_CATEGORY', 'value_const'=>'Category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_PUBLISHED', 'value_const'=>'Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_NAME_ALIAS', 'value_const'=>'Name Alias');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_CATEGORY_ALIAS', 'value_const'=>'Category Alias');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE_MANAGER', 'value_const'=>'Менеджер особенностей домов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_IMAGE', 'value_const'=>'Image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_REMOVE', 'value_const'=>'Select photo if it is necessary to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_RECOMMENDED_IMAGE', 'value_const'=>'Recommended image size 25 x 25 pixels');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES', 'value_const'=>'Categories for Manager Feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_TT_BODY', 'value_const'=>'Category must be entered, separated by commas');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_TT_HEAD', 'value_const'=>'Categories for Manager Feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_IMAGE', 'value_const'=>'Show Feature Icon');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_IMAGE_TT_BODY', 'value_const'=>'Show Feature Icon');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_IMAGE_TT_HEAD', 'value_const'=>'If choose "yes" then show Icon for Manager Feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW', 'value_const'=>'Show title of Category Features');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW_TT_BODY', 'value_const'=>'Show title of Category Features');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW_TT_HEAD', 'value_const'=>'If choose "yes" then show title categories for Manager Feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY', 'value_const'=>'Currency');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY_TT_BODY', 'value_const'=>'If you want to use other currencies, enter the values as: USD = 1; EUR = 3.15; or USD=; EUR=; Available for paypal currencies: AUD, CAD, CZK, DKK, EUR, HKD, HUF, JPY, NOK, NZD, PLN, SGD, SEK, CHF, USD ,RUB.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY_TT_HEAD', 'value_const'=>'Currency with coefficients');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW', 'value_const'=>'Show price sepaprator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW_TT_BODY', 'value_const'=>'Show price sepaprator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW_TT_HEAD', 'value_const'=>'Show price sepaprator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_GEOCOOR', 'value_const'=>'Получить географические координаты');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA1_SHOW', 'value_const'=>'Show Custom Text Field 1');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA2_SHOW', 'value_const'=>'Show Custom Text Field 2');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA3_SHOW', 'value_const'=>'Show Custom Text Field 3');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA4_SHOW', 'value_const'=>'Show Custom Text Field 4');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA5_SHOW', 'value_const'=>'Show Custom Text Field 5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA6_SHOW', 'value_const'=>'Show Custom Dropdown Field 6');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA7_SHOW', 'value_const'=>'Show Custom Dropdown Field 7');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA8_SHOW', 'value_const'=>'Show Custom Dropdown Field 8');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA9_SHOW', 'value_const'=>'Show Custom Dropdown Field 9');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA10_SHOW', 'value_const'=>'Show Custom Dropdown Field 10');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA', 'value_const'=>'Custom Fields Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA1', 'value_const'=>'Custom Text 1');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA2', 'value_const'=>'Custom Text 2');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA3', 'value_const'=>'Custom Text 3');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA4', 'value_const'=>'Custom Text 4');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA5', 'value_const'=>'Custom Text 5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA6', 'value_const'=>'Custom Dropdown Field 6');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA7', 'value_const'=>'Custom Dropdown Field 7');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA8', 'value_const'=>'Custom Dropdown Field 8');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA9', 'value_const'=>'Custom Dropdown Field 9');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA10', 'value_const'=>'Custom Dropdown Field 10');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA6_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA7_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA8_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA9_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA10_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXTS', 'value_const'=>'Allowed Exts eDocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXTS_IMG', 'value_const'=>'Allowed Exts Image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_PAGE_LAYOUT', 'value_const'=>'House Page Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALL_HOUSES_LAYOUT', 'value_const'=>'All Houses Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PRICE_FORMAT', 'value_const'=>'Price Format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PRICE_FORMAT_TT_BODY', 'value_const'=>'Choose format of price (point, comma or space) or enter your delimiter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE_TIME_FORMAT', 'value_const'=>'Date format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE_FORMAT', 'value_const'=>'Date format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE_FORMAT_INFO', 'value_const'=>'Reorder date formats to set your date display format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TIME_FORMAT', 'value_const'=>'Time format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE', 'value_const'=>'%Y - Year; %m - month;  %d - day');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TIME', 'value_const'=>'%H - hours; %i - minutes; %s - seconds');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW', 'value_const'=>'Price unit show');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW_AFTER', 'value_const'=>'After');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW_BEFORE', 'value_const'=>'Before');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PRICE_FORMAT_INFO', 'value_const'=>'Select price ditlimer os set youre.');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW_INFO', 'value_const'=>'Show price unit before or affter price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CUSTOM_OWNER_EMAIL', 'value_const'=>'email Владельца');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_SHOW_ADDRESS', 'value_const'=>'Показать адресс на карте');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_ADD_NEW_PHOTO', 'value_const'=>'Добавить новое фото');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ORDER_BY', 'value_const'=>'Сортировать по');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PHOTO_TO_REMOVE', 'value_const'=>'Выберите фото которое необходимо удалить');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PHOTO_FROM_GALLERY', 'value_const'=>'Выберите фото которое необходимо убрать из фото галереи');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_FOR_ADDFEATURE', 'value_const'=>'A short name to appear in FeatureMenus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_1_FOR_ADDCATEGORY', 'value_const'=>'A short name to appear in menus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_2_FOR_ADDCATEGORY', 'value_const'=>'A full name to appear in menus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_GENERAL_INFO', 'value_const'=>'Общая информация');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_ADDITIONAL_INFO', 'value_const'=>'Дополнительная информация');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_PHOTOS_AND_DOCUMENTS', 'value_const'=>'Фотографии и документы');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_OWNER_CONTACTS', 'value_const'=>'Контакты владельца');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_1', 'value_const'=>'Категории для Менеджера Фичей');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_2', 'value_const'=>'Список Фич');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_1', 'value_const'=>'House Page Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_2', 'value_const'=>'Category Page Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_3', 'value_const'=>'Email and Notification Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_4', 'value_const'=>'Administrator Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_5', 'value_const'=>'Plugins Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_IMAGE_HEADER_SETTINGS', 'value_const'=>'House Image Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TABS_MANAGER_HEADER_SETTINGS', 'value_const'=>'Tabs Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_LABEL_SELLER_CONTACT_SETTINGS', 'value_const'=>'Seller Contact Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_FEATURE_LIST_SETTINGS', 'value_const'=>'Feature list settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EXTRA_FIELDS_MANAGER', 'value_const'=>'Extra Fields manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EDOCUMENT_OPTIONS', 'value_const'=>'eDocument Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_COMMON_SETTINGS', 'value_const'=>'Button Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_RENT_REQUEST_OPTIONS', 'value_const'=>'Rent Request Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_BUY_REQUEST_OPTIONS', 'value_const'=>'Buy Request Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_ADD_HOUSE', 'value_const'=>'{title}
      [PropertyID]: {id}<br>
      A new house was added by {username}<br>
      on {date} to category {category}.<br>
      Please log on and approve or deny this item.<br>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_REVIEW', 'value_const'=>'User {username} has added a Review to house:<br>{house_title}<br>
      Title Comment: {title}<br>
      Label Rating: [{rating}]<br>
      Review Comment:<br> {comment}<br>
      Please log on and edit this review where necessary.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_RENT_REQUEST', 'value_const'=>"User {username} has submitted a Rent Request for:<br>
      PropertyID: {hid_value}<br>
      {house_title}<br>
      Please log on and approve or deny this Rent Request");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_RENT_REQUEST_ANSWER', 'value_const'=>"Answer for your request:<br>
      Dear {username}!<br>
      Your rent request for<br>
      {title} {owneremail} {ownername}<br>
      Answer: {answer}");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_BUYING_REQUEST', 'value_const'=>"
      User {username}  has submitted a Buying Request for:<br>
      PropertyID: {hid_value}<br>
      {house_title}<br>
      Please log on and approve or deny this Buying Request");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_BUYING_REQUEST_ANSWER', 'value_const'=>"Dear {username}!<br>
      Your buy request for<br>
      {title} {owneremail} {ownername}<br>
      Answer: {answer}<br>");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_RENT_BEFORE_END', 'value_const'=>
      "Rent User: {username}({user_email})<br>
      House: {house_title}<br>
      House ID: {ID}<br>
      PropertyID: {PropertyID}<br>");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_DESCRIPTION', 'value_const'=>'You can use this tags in your letter:<br>{house_title} - title of added house
          <br>{username} - the name of the user who added a house
          <br>{hid_value} - identification number of the house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_DESCRIPTION_TT_BODY', 'value_const'=>'Past particular tags in "Send Buy Request Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_DESCRIPTION_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DESCRIPTION', 'value_const'=>'You can use this tags in your letter:<br/>{house_title} - title of added house
          <br>{username} - the name of the user who added a house <br>{user_email} - email of the user who rents the house
          <br>{vid} - identification number of the house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DESCRIPTION_TT_BODY', 'value_const'=>'Past particular tags in "Rent before end notify",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DESCRIPTION_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_REQUEST_DESCRIPTION', 'value_const'=>'You can use this tags in your letter:<br>{house_title} - title of added house
          <br>{username} - the name of the user who added a house
          <br>{hid_value} - identification number of the house<br>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_REQUEST_TT_BODY', 'value_const'=>'Past particular tags in "Send Rent Request Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_REQUEST_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_DESCRIPTION', 'value_const'=>'You can use this tags in your letter: <br>{title} - title of added house
          {id} - identification number of the house
          <br>{username} - the name of the user who added a house
          <br>{date} - date when house was added<br>{category} - category which the house was added in');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_TT_BODY', 'value_const'=>'Past particular tags in "Send Add House Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_REVIEW_DESCRIPTION', 'value_const'=>'You can use this tags in your letter: <br>{username} - name of the user,what added a review
          <br>{house_title} - title of review house
          <br>{title} - title of the comment, {rating} - rating of the comment,
          <br>{comment} - body of the comment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_REVIEW_TT_BODY', 'value_const'=>'Past particular tags in "Send Review Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_REVIEW_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_SHOW_MY_HOUSES', 'value_const'=>'show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_EDIT_MY_HOUSES', 'value_const'=>'edit my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_RENT_REQUESTS', 'value_const'=>'rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_BUYING_REQUESTS', 'value_const'=>'buying requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALL_CATEGORIES_LAYOUT_TT_HEAD', 'value_const'=>'All Categories Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SINGLE_CATEGORY_LAYOUT_TT_HEAD', 'value_const'=>'Single Category Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SEARCH_LAYOUT_TT_HEAD', 'value_const'=>'Search layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_TEXT_TT_BODY', 'value_const'=>'Select which extra text fields, you want to display');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_TEXT_TT_HEAD', 'value_const'=>'Text field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_DROPDOWN_TT_BODY', 'value_const'=>'Select which extra dropdown fields, you want to display');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_DROPDOWN_TT_HEAD', 'value_const'=>'Dropdown field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REVIEW_LABEL_PUBLISHED', 'value_const'=>'Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_ON_ADD', 'value_const'=>'Approve review added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_ON_ADD_TT_BODY', 'value_const'=>'Chose YES if you want to publish added review automatically');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_ON_ADD_TT_HEAD', 'value_const'=>'Publish review added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_REGISTRATIONLEVEL', 'value_const'=>'Allow publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow publish to usergroup');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Chose the usergroup who can publish added review automatically');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_TEXT', 'value_const'=>'License text');                                
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_REQUESTS', 'value_const'=>'Аренда запросы');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SALE_MANAGER_MENU', 'value_const'=>'Менеджер продаж');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPORT_EXPORT', 'value_const'=>'Импорт/Экспорт');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_MENU', 'value_const'=>'Менеджер языков');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS', 'value_const'=>'Настройки');

$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_GROUP', 'value_const'=>'Group');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_COUNT_OF_ITEMS', 'value_const'=>'Count of houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_COUNT_OF_ITEMS_HELP', 'value_const'=>'How many houses users can publish from a specific group.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY', 'value_const'=>'Show buy for booking');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALLOW_PAYPAL_BUY', 'value_const'=>'Allow PayPal buy');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_RENT', 'value_const'=>'Show PayPal rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALLOW_PAYPAL_RENT', 'value_const'=>'Allow PayPal rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_YOUR_PAY_PAL_EMAIL', 'value_const'=>'Your PayPal email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SUCCESSFUL_RETURN', 'value_const'=>'Successful return url');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_AFTER_SUCCESSFUL_RETURN', 'value_const'=>'After successful payment returns the buyer on your page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMAGE_URL_PAYPAL', 'value_const'=>'Image url');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_AFTER_IMAGE_URL_PAYPAL', 'value_const'=>'Add image to PayPal page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CANCEL_RETURN_URL', 'value_const'=>'Cancel return url');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_AFTER_CANCEL_RETURN_URL', 'value_const'=>'If buyer press cancel in payment page, returns the buyer on your page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REAL_OF_TEST', 'value_const'=>'Real(yes) or a test(no) PayPal account');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REAL_OF_TEST_LABLE', 'value_const'=>'If real go to www.paypal.com else go to www.sandbox.paypal.com');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_PAYPAL_LABLE', 'value_const'=>'PayPal Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NUMBER_OF_PHOTOS', 'value_const'=>'Number of photos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NUMBER_OF_PHOTOS_HELP', 'value_const'=>'How many photos in gallery users can publish from a specific group.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOTAL_PRICE', 'value_const'=>'Total price: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_NOW_BY_PAYPAL', 'value_const'=>'Go now to PayPal');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_INSTALL_PAYPAL', 'value_const'=>'Payment plugin is not installed');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE', 'value_const'=>'Special price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_DAY', 'value_const'=>'Special price per day');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_NIGHT', 'value_const'=>'Special price per night');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_ADD_SPECIAL_PRICE', 'value_const'=>'Add new special price and save');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_FROM', 'value_const'=>'From');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TO', 'value_const'=>'To');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_PRICE_PER_DAY', 'value_const'=>'Price per day');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_CALCULATE', 'value_const'=>'Сalculate');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_AND_RENT_TIME', 'value_const'=>'Special price and rent time');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_YES_NO', 'value_const'=>'Special price per day("yes") or per night("no")');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_YES_NO_HELP', 'value_const'=>'if per day calculation all day(example of 2014-02-10 from 2014-02-16 is 7 days) if per night calculation all night (example of 2014-02-10 from 2014-02-16 is 6 nights)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_PER_NIGHT', 'value_const'=>'Nights');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_IMAGES', 'value_const'=>'Images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXT_DOC', 'value_const'=>'Type the allowed extensions of eDocuments ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXT_IMAGES', 'value_const'=>'Type the allowed extensions of Images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_TAB_LABEL_PRICE', 'value_const'=>'Pay');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_NAME', 'value_const'=>'Language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_LANGUAGE', 'value_const'=>'Select Language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_CLON', 'value_const'=>'Clone');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_ORDERS', 'value_const'=>'Orders');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_MARKER', 'value_const'=>'/images/marker-1.png,/images/marker-2.png,/images/marker-3.png,/images/marker-4.png,/images/marker-5.png,/images/marker-6.png,/images/marker-7.png,/images/marker-8.png,/images/marker-9.png,/images/marker-10.png,/images/marker-11.png,/images/marker-12.png,/images/marker-13.png');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CANCEL_URL_TEXT', 'value_const'=>'Message for unsuccessfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SUCCESSES_URL_TEXT', 'value_const'=>'Message for successfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CANCEL_URL_TEXT_TT_BODY', 'value_const'=>'Insert the Message on page with notification about unsuccessfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SUCCESSES_URL_TEXT_TT_BODY', 'value_const'=>'Insert the Message on page with notification about successfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EMAIL_NOTIFICATION_OPTIONS', 'value_const'=>'Email Notification Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_REVIEW_NOTIFICATION_OPTIONS', 'value_const'=>'Review Notification Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_PRICE_OPTIONS', 'value_const'=>'Price Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_DATE_TIME_OPTIONS', 'value_const'=>'Date Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_GROUP_SETTINGS', 'value_const'=>'Groups Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_EXTENSIONS_SETTINGS', 'value_const'=>'Extension Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_UPDATE_SETTINGS', 'value_const'=>'Update Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_CATEGORY_OPTIONS', 'value_const'=>'Category Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIEW_LISTING', 'value_const'=>'Просмотреть список');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE', 'value_const'=>'Размер фото для предварительного просмотра домов');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE_TT_BODY', 'value_const'=>'Установить размер фото для просмотра всех домов и отдельных категорий');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_TT_BODY', 'value_const'=>'Email address for notifications about sending messages.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SELECT_ONE_ITEM', 'value_const'=>'Please select one item');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_ALERT_RETURNED', 'value_const'=>'House already returned');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_ASSOCIATED', 'value_const'=>'Error in rent, for associated');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALERT_NOT_IN_RENT', 'value_const'=>'You cannot return houses that were not lent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_FOR_RENT_ASOC', 'value_const'=>'This house has assitiated house not for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_FOR_RENT', 'value_const'=>'This house is not for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_BAD_DATE_ALERT', 'value_const'=>'Bad date format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_CORRECT_CURRENCY', 'value_const'=>'Please select the correct currency value');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CLON_ALERT', 'value_const'=>'You can clon only one house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_REVIEW_ALERT', 'value_const'=>'Please select one review for edit');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_CTEGORY_ALERT', 'value_const'=>'Select a category to delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_ITEM_ALERT', 'value_const'=>'You must select only one item for edit');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_AMENITY_ALERT', 'value_const'=>'Select an amenity to delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_NOT_IN_RENT', 'value_const'=>'You edit houses that were not lent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_SUCCESSFULL_PAYMENT', 'value_const'=>'You do success payment!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_UNSUCCESSFULL_PAYMENT', 'value_const'=>'You do unsuccess payment!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_INSTALL_PLUGIN', 'value_const'=>'Please install plugin of payment to enable payment feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PLUGIN', 'value_const'=>'Plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_URL', 'value_const'=>'Send email to admin before Booking end.<br /> For that you need create CRON job and connect to Cron check so URL:<br /> http://{yours site}/index.php?option=com_realestatemanager&Itemid={Yours ItemID}&task=rent_before_end_notify  with span - every day.<br /> Cron Jobs may look like:<br/> "wget -q -O - http://localhost/index.php?option=com_realestatemanager&Iteid=56&task=rent_before_end_notify /dev/null');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA', 'value_const'=>'Show captcha option');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH', 'value_const'=>'Show search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA_TT_BODY', 'value_const'=>'Display captcha option in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH_TT_BODY', 'value_const'=>'Display search block in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SIZE_SUFFIX', 'value_const'=>'Sqrt');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW', 'value_const'=>'Show subcategory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW_TT_HEAD', 'value_const'=>'Show subcategory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW_TT_BODY', 'value_const'=>'If set to YES, you will see subcategory for every category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY_SALE', 'value_const'=>'Show buy for sale');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY_SALE_TT_BODY', 'value_const'=>'Show buy form after sale request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY_TT_BODY', 'value_const'=>'Show buy form after book request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_FILE_NOT_ALLOWED', 'value_const'=>'File ext. not allowed to upload!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANG_ASSOCIATE_HOUSES', 'value_const'=>'Language associate houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANG_ASSOCIATE_CATEGORIES', 'value_const'=>'Language associate categories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_FOR_HOUSES_WITH_LANG', 'value_const'=>'This property only for houses with language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YOU_HAVE', 'value_const'=>'You have');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MAXIMUM_COUNT_HOUSE_FOR_YOUR', 'value_const'=>'maximum count house for your group');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TO_ADD_SPRICE_YOU_NEED', 'value_const'=>'To add special prices, you must first save property !');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MAX_PHOTOS_LIMIT', 'value_const'=>'You have max photos. Limit for this users group');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_NUMERIC_PROPERTYID_WARNING', 'value_const'=>'You have no numeric PropertyId. Please change all PropertyID to numeric or set to <No> option');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_INVALID_NUMBER', 'value_const'=>'Please enter a valid Number!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_FILE_MIME_TYPE_NOT_MATCH', 'value_const'=>'File mime type not match file ext');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YOU_CAN_PUBLISH_ONLY', 'value_const'=>'You can publish only');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PLEASE_LOGIN', 'value_const'=>'Please login');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NEW_HOUSE_ADDED', 'value_const'=>'New house added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUYING_REQUEST_ADDED', 'value_const'=>'New buying request added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NEW_REVIEW_ADDED', 'value_const'=>'New house review added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NEW_RENT_REQUEST_ADDED', 'value_const'=>'New rent request added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_EXPIRE_NOTICE', 'value_const'=>'Rent expire notice');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSES_EXPIRE_NOTICE', 'value_const'=>'So houses rent expire soon');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FETCHED_SUBCATEGORIES', 'value_const'=>'Subcategories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_APPLY', 'value_const'=>'Apply');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SAVE_CATEGORY', 'value_const'=>'Save category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DELETE_ORDER', 'value_const'=>'Delete Order');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MUST_RETURN_HOUSES_FROM_RENT', 'value_const'=>'You must return all houses from rent first!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_ID', 'value_const'=>'Order ID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_TITLE', 'value_const'=>'House title');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_EMAIL', 'value_const'=>'Email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DATE', 'value_const'=>'Date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_STATUS', 'value_const'=>'Status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_PRICE', 'value_const'=>'Price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_PAID', 'value_const'=>'Paid');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DETAILS', 'value_const'=>'Details');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_USER', 'value_const'=>'User');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_USER_NAME', 'value_const'=>'Username');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_ACCEPT', 'value_const'=>'Accept type/info: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_SYSTEM', 'value_const'=>'Payment system: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_EMAIL', 'value_const'=>'Payer email: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_REASON', 'value_const'=>'Pending reason: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PAYPAL_ERROR', 'value_const'=>'In your request encountered an error, please contact the administrator!');

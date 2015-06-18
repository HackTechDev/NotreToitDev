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

$LangLocal = array('lang_code'=>'nl-NL', 'title'=>'Dutch');

$constLang = array();
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBMAIN', 'value_const'=>'Community Builder/Mijn panden plugin settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES', 'value_const'=>'Toon mijn panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT', 'value_const'=>'Toon bewerken van panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT', 'value_const'=>'Toon huurverzoeken');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY', 'value_const'=>'Toon koopverzoeken');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY', 'value_const'=>'Toon gebruiker huurgeschiedenis');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_TO', 'value_const'=>'Toon mijn panden aan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_TO', 'value_const'=>'Toon bewerken van panden aan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_TO', 'value_const'=>'Toon huurverzoeken aan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_TO', 'value_const'=>'Toon koopverzoeken aan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_TO', 'value_const'=>'Toon gebruiker huurgeschiedenis aan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_TT', 'value_const'=>'Toon mijn panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_TT', 'value_const'=>'Toon bewerken van panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_TT', 'value_const'=>'Toon huurverzoeken');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_TT', 'value_const'=>'Toon koopverzoeken');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_TT', 'value_const'=>'Toon gebruiker huurgeschiedenis');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_RL', 'value_const'=>'Toon button \'Toon mijn panden\' op CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_ML', 'value_const'=>'Toon mijn panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_ML_BODY', 'value_const'=>'Selecteer de user groep aan wie deze button zal worden getoond');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_RL', 'value_const'=>'Toon button \'Mijn panden bewerken\' op CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_ML', 'value_const'=>'Toon bewerken panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_RL', 'value_const'=>'Toon button \'Huurverzoeken\' op CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_ML', 'value_const'=>'Show rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_RL', 'value_const'=>'Toon button \'Koopverzoeken\' op CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_ML', 'value_const'=>'Show buy requsts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_RL', 'value_const'=>'Toon button \'Mijn huurgeschiedenis\' op CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_ML', 'value_const'=>'Show my rent history');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE', 'value_const'=>'Real Estate Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC', 'value_const'=>'Overzicht van onze panden.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SEARCH_DESC1', 'value_const'=>'Zoek panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SEARCH_DESC2', 'value_const'=>'Zoek panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_PICTURE', 'value_const'=>'no-img_eng.gif');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NOT_AUTHORIZED', 'value_const'=>'U bent niet gerechtigd om deze handeling te verrichten!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OK', 'value_const'=>'OK');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_STATUS', 'value_const'=>'Status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPEXP', 'value_const'=>'RealEstateManager : Import/Export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPEXP_ADD', 'value_const'=>'U moet voor deze sectie eerst een categorie aanmaken.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_PLEASE_SEL', 'value_const'=>'Selecteer aub');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FORMAT_CSV', 'value_const'=>'CSV file');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FORMAT_XML', 'value_const'=>'XML file');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR1', 'value_const'=>'U moet een importtype selecteren!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR2', 'value_const'=>'U moet een importtype selecteren!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR3', 'value_const'=>'U moet een bestand selecteren om te importeren!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR4', 'value_const'=>'U moet een exporttype selecteren!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_TYP', 'value_const'=>'Importtype' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_TYP', 'value_const'=>'Selecteer een bestandsformaat');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_TYP_TT_HEAD', 'value_const'=>'Selecteer een bestandsformaat');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_CATEGORY', 'value_const'=>'Categorie' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_CAT', 'value_const'=>'Categorie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_CAT_TT_HEAD', 'value_const'=>'Selecteer categorie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_FILE', 'value_const'=>'Bestand om te importeren' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_FILE', 'value_const'=>'Bestand om te importeren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_FILE_TT_HEAD', 'value_const'=>'Selecteer een bestand om te importeren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_FORMAT', 'value_const'=>'Op dit moment wordt het volgende CSV formaat ondersteund:<br />PandID | Beschrijving | Link | Soort |  Locatie | Prijs | Titel | ...' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_TYP', 'value_const'=>'Export type' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_TYP', 'value_const'=>'Selecteer bestandsformaat');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_TYP_TT_HEAD', 'value_const'=>'Selecteer bestandsformaat');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_CATEGORY', 'value_const'=>'Categorie' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_CAT', 'value_const'=>'Categorie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_CAT_TT_HEAD', 'value_const'=>'Selecteer categorie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT', 'value_const'=>'Exporteer Resultaten' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_DOWNLOAD', 'value_const'=>'U kunt het verzochte exportbestand downloaden middels de volgende URL (rechtsklik om op te slaan):' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_REMEMBER', 'value_const'=>'Bedenk dat de bestanden nog wel op de server staan. U dient ze handmatig te verwijderen.' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CATEGORIES_MANAGER', 'value_const'=>'RealEstateManager : Categorieen');
$constLang[] = array('const'=>'_HEADER_CATEGORY', 'value_const'=>'Categorie');
$constLang[] = array('const'=>'_HEADER_NUMBER', 'value_const'=>'Panden');
$constLang[] = array('const'=>'_HEADER_PUBLISHED', 'value_const'=>'Gepubliceerd');
$constLang[] = array('const'=>'_HEADER_REORDER', 'value_const'=>'Opnieuw ordenen');
$constLang[] = array('const'=>'_HEADER_ACCESS', 'value_const'=>'Toegang');
$constLang[] = array('const'=>'_HEADER_CHECKED_OUT', 'value_const'=>'Uitgecheckt door');
$constLang[] = array('const'=>'_HEADER_ADD', 'value_const'=>'Toevoegen');
$constLang[] = array('const'=>'_HEADER_EDIT', 'value_const'=>'Aanpassen');
$constLang[] = array('const'=>'_CATEGORY', 'value_const'=>'Categorie');
$constLang[] = array('const'=>'_DML_CAT_MUST_SELECT_NAME', 'value_const'=>'Categorienaam mag niet leeg zijn');
$constLang[] = array('const'=>'_CATEGORIES_NAME', 'value_const'=>'Categorieen');
$constLang[] = array('const'=>'_A_SELECT_IMAGE', 'value_const'=>'- Selecteer afbeelding -');
$constLang[] = array('const'=>'_A_SELECT_TOP', 'value_const'=>'Boven');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_TITLE', 'value_const'=>'Categorie Alias');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_NAME', 'value_const'=>'Categorie titel');
$constLang[] = array('const'=>'_CATEGORIES__IMAGEPREVIEW', 'value_const'=>'Geen preview beschikbaar');
$constLang[] = array('const'=>'_CATEGORIES__DETAILS', 'value_const'=>'Details');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_IMAGEPOS', 'value_const'=>'Image Position');
$constLang[] = array('const'=>'_CATEGORIES__PARENTITEM', 'value_const'=>'Parent Item');
$constLang[] = array('const'=>'_DELETED', 'value_const'=>'Deleted'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_HOUSES', 'value_const'=>'RealEstateManager - Verhuur een pand' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_RETURN', 'value_const'=>'RealEstateManager - Neem pand terug uit verhuur' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMP', 'value_const'=>'Import');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_EXP', 'value_const'=>'Export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_CATEGORIES', 'value_const'=>'- Alle Categorieen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_CATEGORIES', 'value_const'=>'Selecteer Categorieen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_TO_RENT', 'value_const'=>'Selecteer pand om te verhuren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_RENT', 'value_const'=>'- Alle panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_RENT', 'value_const'=>'Huur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_NOT_RENT', 'value_const'=>'Geen verhuur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_USERS', 'value_const'=>'- Alle gebruikers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_TO_PUBLIC', 'value_const'=>'Selecteer gepubliceerde');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_PUBLIC', 'value_const'=>'- Alle panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_NOT_PUBLIC', 'value_const'=>'Niet gepubliceerd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PUBLIC', 'value_const'=>'Gepubliceerd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH', 'value_const'=>'Zoek panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_KEYWORD', 'value_const'=>'Zoekwoorden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_BUTTON', 'value_const'=>'Zoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW', 'value_const'=>'RealEstateManager : Panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH', 'value_const'=>'Zoek:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_KOM', 'value_const'=>'U moet eerst een categorie maken voor deze sectie.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PROPERTYID', 'value_const'=>'Pand ID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RESULT', 'value_const'=>'Resultaat');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COMMENT', 'value_const'=>'Beschrijving');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CATEGORY', 'value_const'=>'Categorie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HOUSES', 'value_const'=>'# Pand');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COVER', 'value_const'=>'Beeld');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COUNTRY', 'value_const'=>'Land');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REGION', 'value_const'=>'Regio');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CITY', 'value_const'=>'Stad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ZIPCODE', 'value_const'=>'Postcode');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADDRESS', 'value_const'=>'Adres');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_NO_LOCATION_AVAILIBLE', 'value_const'=>'Geen lokatie beschikbaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE', 'value_const'=>'Titel');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUILD_YEAR', 'value_const'=>'Bouwjaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PROPERTY_TYPE', 'value_const'=>'Eigenaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RATING', 'value_const'=>'Waardering');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL', 'value_const'=>'Afbeeldings URL');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE', 'value_const'=>'Afbeelding');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_URL', 'value_const'=>'[ Koop van ] link');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_TO', 'value_const'=>'Verhuur aan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM', 'value_const'=>'Verhuurder');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_UNTIL', 'value_const'=>'Te huur tot');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM_UNTIL', 'value_const'=>'Verhuur van - tot');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM_UNTIL_NOT_KNOWN', 'value_const'=>'onbekend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_USER', 'value_const'=>'Gebruiker');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_EMAIL', 'value_const'=>'E-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_ADRES', 'value_const'=>'Postadres');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING_ADRES', 'value_const'=>'Telefoonnummer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_TIME', 'value_const'=>'Verhuur tot: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HITS', 'value_const'=>'Hits');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LINE', 'value_const'=>'Vernieuwen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT', 'value_const'=>'Verhuur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PUBLIC', 'value_const'=>'Gepubliceerd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTROL', 'value_const'=>'Niet beschikbaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REVIEW_DATE', 'value_const'=>'Beoordeling datum');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD', 'value_const'=>'Upload hoofdfoto');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OTHER_PICTURES_URL_UPLOAD', 'value_const'=>'Klik om de foto te uploaden naar het pandenfotoalbum');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_DESC', 'value_const'=>'Als u een foto uploadt dan zal de URL van de huidige foto worden verwijderd en worden vervangen door die van de nieuwe foto.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD_ERROR', 'value_const'=>'Fout bij het uploaden van de foto! Let op dat alleen de formaten jpg, png en gif worden ondersteund');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PRICE', 'value_const'=>'Prijs');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_INFORMATIONS', 'value_const'=>'Huurinformatie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_ACTUAL', 'value_const'=>'Actueel edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD', 'value_const'=>'Upload edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_DOWNLOAD', 'value_const'=>'Download edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_DELETE', 'value_const'=>'Verwijder edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT', 'value_const'=>'edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD_ERROR', 'value_const'=>'Fout bij het uploaden van het edocument!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_CB', 'value_const'=>'Verhuurd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REQUIRED', 'value_const'=>'Vereist');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADDREVIEW', 'value_const'=>'Voeg beoordeling toe');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEWS', 'value_const'=>'Beoordelingen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_SAVE', 'value_const'=>' Opslaan ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU', 'value_const'=>' Boek het! ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU_SAVE', 'value_const'=>' Verzend huurverzoek ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW', 'value_const'=>'Beoordeling');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_TITLE', 'value_const'=>'Titel');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_RATING', 'value_const'=>'Beoordeling');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_COMMENT', 'value_const'=>'Commentaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ANONYMOUS', 'value_const'=>'Anoniem');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_CLICKS', 'value_const'=>'Aanbevolen clicks');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_SHOWS', 'value_const'=>'Aanbevolen vertoningen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_TITLE', 'value_const'=>'Geef svp een titel voor uw beoordeling!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_COMMENT', 'value_const'=>'Geef svp de tekst voor uw beoordeling!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_RATING', 'value_const'=>'Geef svp een waardeoordeel voor uw beoordeling!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_NAME', 'value_const'=>'Geef een naam voor uw huurverzoek!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_EMAIL', 'value_const'=>'Geef een geldig e-mail adres voor uw huurverzoek!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_MAILING', 'value_const'=>'Geef een geldig postadres voor uw huurverzoek!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_UNTIL', 'value_const'=>'Geef svp een geldige reactiedatum.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_ALERT', 'value_const'=>'Check out must be more Check in');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_DATE', 'value_const'=>'Wrong date!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_NOT_USED', 'value_const'=>'Niet gespecificeerd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_PTBR', 'value_const'=>'Braziliaans'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_DK', 'value_const'=>'Deens');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_DUT', 'value_const'=>'Nederlands');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ENG', 'value_const'=>'Engels');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_FAR', 'value_const'=>'Farsi');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_FRE', 'value_const'=>'Frans');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_GER', 'value_const'=>'Duits');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ITA', 'value_const'=>'Italiaans');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_PR', 'value_const'=>'Portugees');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ROM', 'value_const'=>'Roemeens');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_RUS', 'value_const'=>'Russisch');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_SPA', 'value_const'=>'Spaans');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_SWE', 'value_const'=>'Zweeds');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO', 'value_const'=>'Nee');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YES', 'value_const'=>'Ja');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_IS_EDITED', 'value_const'=>'Dit pand wordt momenteel gewijzigd door een andere administrator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_DEL', 'value_const'=>'Fout bij het verwijderen van het pand!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FRONTEND', 'value_const'=>'Instellingen voorpagina');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BACKEND', 'value_const'=>'Instellingen administratorgedeelte');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT', 'value_const'=>'PandID automatisch oplopend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT_TT_HEAD', 'value_const'=>'PandID automatisch oplopend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT_TT_BODY', 'value_const'=>'JA als u het pandID automatisch wilt laten oplopen, NEE wanneer u deze waarde handmatig wilt verhogen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD', 'value_const'=>'edocument support');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_TT_HEAD', 'value_const'=>'edocument support');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_TT_BODY', 'value_const'=>'JA als u edocument support wilt activeren voor de administrator interface.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION', 'value_const'=>'Locatie van de edocuments');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION_TT_HEAD', 'value_const'=>'edocuments locatie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION_TT_BODY', 'value_const'=>'De locatie van de geuploade edocuments op de server. Het pad is relatief ten opzichte van de hoofddirectory van Joomla en moet beginnen en eindigen met een /');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW', 'value_const'=>'Toon edocuments download link');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW_TT_HEAD', 'value_const'=>'Toon edocuments download op de voorpagina');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW_TT_BODY', 'value_const'=>'JA als u een edocument download link wilt tonen op de voorpagina.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW', 'value_const'=>'Toon knop <br />[ Voeg beoordeling toe] ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW_TT_HEAD', 'value_const'=>'Toon beoordelingen op de voorpagina');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW_TT_BODY', 'value_const'=>'JA als u de pand-beoordeling functionaliteit voor gebruikers op uw website wilt activeren.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL', 'value_const'=>'Sta beoordelingen toe');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Sta beoordelingen toe');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Sta beoordelingen op de voorpagina toe. Deze functie wordt alleen geactiveerd wanneer --Toon Reviews-- ook op Ja is gezet!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW', 'value_const'=>'Toon de verhuurstatus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW_TT_HEAD', 'value_const'=>'Toon de verhuurstatus op de voorpagina');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW_TT_BODY', 'value_const'=>'JA als u de verhuurstatus op de voorpagina wilt tonen.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSESTATUS_SHOW', 'value_const'=>'Show houses status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSESTATUS_SHOW_TT_BODY', 'value_const'=>'Set Yes to show houses status on the page of all houses and single categories on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL', 'value_const'=>'Sta huurverzoeken toe');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Sta huurverzoek toe');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Sta huurverzoek op de voorpagina toe. Deze functie wordt alleen geactiveerd wanneer --Toon Reviews-- ook op Ja is gezet!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW', 'value_const'=>'Toon prijs');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW_TT_HEAD', 'value_const'=>'Toon prijs');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW_TT_BODY', 'value_const'=>'Toont de prijs van het pand op de voorpagina');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ITEM_IN_PAGE', 'value_const'=>'Panden per pagina.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_SHOW_TT_BODY', 'value_const'=>'Instellen van het aantal panden per pagina.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_SHOW_TT_HEAD', 'value_const'=>'Paginas.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE', 'value_const'=>'Afmeting pandfoto');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE_TT_HEAD', 'value_const'=>'Afmeting pandfoto');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE_TT_BODY', 'value_const'=>'Stel de foto afmetingen in met hoogte/breedte in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS', 'value_const'=>'Pagina items');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS_TT_HEAD', 'value_const'=>'Pagina items');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS_TT_BODY', 'value_const'=>'Geef het aantal panden dat getoond wordt per pagina.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL', 'value_const'=>'Review e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_TT_HEAD', 'value_const'=>'Review e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_TT_BODY', 'value_const'=>'Waar moeten berichten naartoe verzonden worden bij nieuwe reviews? U kunt meerdere e-mail adressen ingeven gescheiden door een komma.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL', 'value_const'=>'Huurverzoek e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_TT_HEAD', 'value_const'=>'Huurverzoek e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_TT_BODY', 'value_const'=>'Waar moeten berichten naartoe verzonden worden bij nieuwe huurverzoeken? U kunt meerdere e-mail adressen ingeven gescheiden door een komma.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REQUEST_RENT', 'value_const'=>'RealEstateManager : Verhuurverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT', 'value_const'=>'RealEstateManager : Over');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_ABOUT', 'value_const'=>'Over');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_RELEASENOTE', 'value_const'=>'Releasenote');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_CHANGELOG', 'value_const'=>'Changelog');
$constLang[] = array('const'=>'_REALESTATE_MANAGER__HTML_ABOUT', 'value_const'=>'Welkom bij RealEstateManager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER__HTML_ABOUT_INTRO', 'value_const'=>'Bedankt voor het gebruik van deze component!<br /><br />
RealEstateManager stelt u in staat een grote panden catalogus op te zetten en bij te houden. De catalogus heeft categorie en subcategorieen en u kunt een pandcode toevoegen voor uw eigen administratie. Verhuurmanagement is ingebouwd, met huurverzoek mogelijkheden voor bezoekers van uw website. RealEstateManager stelt uw bezoekers ook in staat een review van een pand te geven, met review management in de backend. Edocument support is ingebouwd. Pandinformatie en -fotos kunnen handmatig worden toegevoegd. <br/ ><br />
NOTES: <br/ >
- Om fotos naar uw server te downloaden en werken dient u PHP5 te programmeren met CURL ondersteuning<br />
- Om CSV export te laten werken dient u PHP5 te programmeren met XSL ondersteuning<br/ >
- Om CAPTCHA te laten werken dient u PHP5 te programmeren met GD ondersteuning<br />
<br />
Op de website <a href="http://www.ordasoft.com">www.ordasoft.com</a> kunt u RealEstateManager handleidingen, extra taalbestanden en Support Forums vinden en ook aanvullende modules en plugins downloaden.<br />
<br />
We zijn beschikbaar voor aangepaste ontwerpen. Als u een nieuwe mogelijkheid wilt zien toegevoegd aan RealEstateManager, laat het ons dan weten. Mail alstublieft zo exact mogelijk de benodigde functionaliteit naar <a href="mailto:sales@ordasoft.com">sales@ordasoft.com</a> en we zullen zo spoedig mogelijk contact met u opnemen. Wanneer u een aangepaste en betaalde order plaatst ontvangt u de volgende PRO versie met uw aanpassing toegevoegd.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_TEXT_WSINFO_TEXT1', 'value_const'=>'De onderstaande velden dienen alleen handmatig ingevuld te worden als u dit zo hebt ingesteld.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_TEXT_WSINFO_TEXT2', 'value_const'=>'. anders worden ze genegeerd.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID_CHECK', 'value_const'=>'Voeg een PandID voor dit pand in!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID', 'value_const'=>'Een pand met dit PandID bestaat al!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_CATEGORY', 'value_const'=>'U dient een categorie voor dit pand te selecteren!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC_TITLE', 'value_const'=>'Huurverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC_RENT', 'value_const'=>'De lijst toont de panden geselecteerd om te huren.<br />Als het leeg is check dan uw selectie opnieuw.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_NAME', 'value_const'=>'Uw volledige naam');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL', 'value_const'=>'Uw e-mail adres');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_MAILING', 'value_const'=>'Beschrijving');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_UNTIL', 'value_const'=>'Check out ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_FROM', 'value_const'=>'Check in');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_THANKS', 'value_const'=>'Uw huurverzoek is opgeslagen in onze database. We zullen uw verzoek beoordelen en u zo spoedig mogelijk informeren.<br />Hartelijk dank voor het gebruik van onze service.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING_REQUEST_THANKS', 'value_const'=>'Uw koopverzoek is opgeslagen in onze database. We zullen uw verzoek beoordelen en u zo spodig mogelijk informeren.<br />Hartelijk dank voor het gebruik van onze service.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_OBJECT', 'value_const'=>'RealEstateManager: Huurverzoek geaccepteerd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_TEXT1', 'value_const'=>'Het pand');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_TEXT2', 'value_const'=>'dat u verzocht is klaar om verhuurd te worden.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_SAVE', 'value_const'=>'Opslaan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_RENT', 'value_const'=>'Huur pand');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_RETURN', 'value_const'=>'Pand terug uit verhuur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_ACCEPT', 'value_const'=>'Accepteer verzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_DECLINE', 'value_const'=>'Weiger verzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_IMPORT', 'value_const'=>'Import panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EXPORT', 'value_const'=>'Export panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_DELETE_REVIEW', 'value_const'=>'Verwijder beoordeling');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EDIT_REVIEW', 'value_const'=>'Bewerk beoordeling');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_GENERAL_INFO', 'value_const'=>'Algemene informatie:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_VERSION', 'value_const'=>'Versie:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_RELEASE_DATE', 'value_const'=>'Datum beschikbaarheid:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_PROJECTLINK', 'value_const'=>'Project link:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_PROJECT_HOST', 'value_const'=>'Project gast:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_LICENSE', 'value_const'=>'Licentie:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_WARRANTY', 'value_const'=>'Dit programma is verspreid in de hoop dat het van nut is maar zonder enige garantie. Lees de bijgaande LICENSE.TXT voor meer informatie.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_DEVELOP', 'value_const'=>'Ontwikkeld door:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_HOMEPAGE', 'value_const'=>'Homepage');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD_URL', 'value_const'=>'edocument Download Link URL');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL', 'value_const'=>'Sta edocuments download toe');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Sta edocuments download toe op de voorpagina. Deze functie zal alleen geactiveerd worden als --Toon edocuments Download Link-- ook op Ja is ingesteld.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Sta edocuments download toe');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL', 'value_const'=>'Sta prijs toe:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Sta prijs toe op de voorpagina. Deze functie zal alleen geactiveerd worden als --Toon Prijs-- ook op Ja is ingesteld!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Sta prijs toe');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_REVIEW_MANAGER', 'value_const'=>'RealEstateManager: Beoordelingen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_HOUSE', 'value_const'=>'Pandadres');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_REVIEW', 'value_const'=>'Titel beoordeling');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_KEYGUEST', 'value_const'=>'Type de karakters die u ziet in de afbeelding hierboven in de box hieronder.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT', 'value_const'=>'Print');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_SELECT', 'value_const'=>'Selecteer de kolommen om te printen en druk op [ Next ]!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FONT_SIZE', 'value_const'=>'Fontgrootte');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FORMAT', 'value_const'=>'Formaat');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW', 'value_const'=>'Toon edocument download licentie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW_TT_BODY', 'value_const'=>'Toon edocument download licentie accepteer/weiger voordat wordt toegestaan om het edocument van de voorpagina te downloaden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW_TT_HEAD', 'value_const'=>'Toon edocument download licentie');
$constLang[] = array('const'=>'_LICENSE_AGREEMENT_TITLE', 'value_const'=>'Licentie overeenkomst');
$constLang[] = array('const'=>'_LICENSE_AGREEMENT_ACCEPT', 'value_const'=>'Accepteren?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW', 'value_const'=>'Toon knop [ Koop nu ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW_TT_HEAD', 'value_const'=>'Toon knop [ Koop nu ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW_TT_BODY', 'value_const'=>'Toon knop [ Koop nu ] naast het pand op de voorpagina');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL', 'value_const'=>'Toon knop [ Koop nu ]:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Toon knop [ Koop nu ] op de voorpagina voor de geselecteerde categorieen. Deze functie wordt alleen geactiveerd als --Toon knop [ Koop nu ]-- ook op JA staat! U kunt meerdere categorieen selecteren.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Sta knop [ Koop nu ] toe');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ENTIRE_BU', 'value_const'=>'Volledige data export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ENTIRE_RECOVER', 'value_const'=>'Volledige data import');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_CONF', 'value_const'=>'Deze handeling zal alle bestaande RealEstateManager data VERWIJDEREN voor het importeren. Wilt u doorgaan?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPORT_WARNING_MESSAG', 'value_const'=>'
<strong>CSV&nbsp;IMPORT:</strong>
<ul>
	<li>Op dit moment wordt alleen het volgende CSV formaat ondersteund:&nbsp;&nbsp;PandID&nbsp;|&nbsp;Beschrijving&nbsp;|&nbsp;&nbsp;|&nbsp;Lijsttype&nbsp;|&nbsp;Prijs&nbsp;|&nbsp;Prijstype&nbsp;|&nbsp;Titel&nbsp;|&nbsp;Adres&nbsp;|&nbsp;...&nbsp;|</li>
	<li>Velden zijn van elkaar gescheiden door een staand streepje (<strong>&nbsp;|&nbsp;</strong>)</li>
	<li>U dient een hele lijst te importeren met alleen een PandID en alle andere leeg te laten, bijvoorbeeld: PandID&nbsp;|&nbsp;<i>leeg</i>&nbsp;|&nbsp;<i>leeg</i>&nbsp;|&nbsp;<i>leeg</i>&nbsp;|&nbsp;Prijs&nbsp;|&nbsp;<i>leeg</i>&nbsp;|&nbsp;Titel&nbsp;|&nbsp;<i>leeg</i>&nbsp;|&nbsp;...&nbsp;|</li>
	<li><strong>PAS OP!! </strong>Gebruik CSV import niet als er pandbeoordelingen aanwezig zijn, in dat geval gebruikt u volledige data import!</li>
</ul>
<strong>XML&nbsp;IMPORT:</strong>
<ul>
	<li>importeer data in XML formaat</li>
	<li><strong>PAS OP!! </strong>Gebruik XML import niet als er pandbeoordelingen aanwezig zijn, in dat geval gebruikt u volledige data import!</li>
	<li><strong>PAS OP:</strong>&nbsp;samband mellan husen kommer inte att sparas!</li>
        <li><strong>PAS OP:</strong>&nbsp;you have to upload images singly, no photos will be saved!</li>
</ul>
<strong>Volledige&nbsp;Data&nbsp;Import:</strong>
<ul>
	<li>Deze manier van importeren zal alle RealEstateManager data importeren en alle velden en details herstellen</li>
	<li>Deze optie zal ALLE bestaande gegevens overschrijven, dus wees voorzichtig met het gebruik ervan!</li>
  <li>Om alle pandenfotos te herstellen dient u alle bestanden uit de volgende map opnieuw te installeren: --components/com_realestatemanager/photos--!</li>
  <li>Om alle eDocuments te herstellen dient u alle bestanden uit de map die u in de backend hebt aangegeven onder --Locatie van edocuments-- terug te zetten!</li>
</ul>
');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_EXPORT_WARNING_MESSAG', 'value_const'=>'
<strong>CSV&nbsp;EXPORT:</strong>
<ul>
	<li>CSV export bevat alle velden die verder aangepast kunnen worden in een tekstverwerker of spreadsheetverwerker</li>
	<li>Op dit moment wordt alleen het volgende CSV formaat ondersteund: PandID&nbsp;|&nbsp;Beschrijving&nbsp;|&nbsp;Link&nbsp;|&nbsp;Lijsttype&nbsp;|&nbsp;Prijs&nbsp;|&nbsp;Prijstype&nbsp;|&nbsp;Titel&nbsp;|&nbsp;Adres&nbsp;|&nbsp;...&nbsp;|</li>
	<li><strong>PAS OP!!:</strong> als u ook pandbeoordelingen wilt importeren gebruik dan Volledige data import!</li>
</ul>
<strong>XML&nbsp;EXPORT:</strong>
<ul>
	<li>Exporteer data in XML formaat</li>
  <li><strong>PAS OP:</strong> als u ook pandbeoordelingen wilt importeren gebruik dan Volledige data import!</li>
  <li><strong>PAS OP:</strong>&nbsp;samband mellan husen kommer inte att sparas!</li>
        <li><strong>PAS OP:</strong>&nbsp;you have to upload images singly, no photos will be saved!</li>
	</ul>
<strong>Volledige&nbsp;Data&nbsp;Export:</strong>
<ul>
	<li>Deze manier van exporteren zal alle RealEstateManager data exporteren en alle velden en ingaves opslaan</li>
	<li>U kunt deze SQL bestanden later gebruiken om uw RealEstateManager data in zijn geheel te herstellen</li>
	<li>Deze subsequent import zal ALLE bestaande gegevens overschrijven dus wees voorzichtig met het gebruik ervan!</li>
  <li>Om alle pandenfotos te herstellen dient u alle bestanden uit de volgende map opnieuw te installeren: --components/com_realestatemanager/photos--!</li>
  <li>Om alle eDocuments te herstellen dient u alle bestanden uit de map die u in de backend hebt aangegeven onder [Instellingen administrator] -- [Locatie van edocumenten] terug te zetten.</li>
</ul>
');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND', 'value_const'=>'Verzend een beoordelingswaarschuwing');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND_TT_HEAD', 'value_const'=>'Verzend een beoordelingswaarschuwing');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND_TT_BODY', 'value_const'=>'Stel in op Ja als u een waarschuwing per e-mail wilt ontvangen wanneer een gebruiker een pandbeoordeling toevoegt. Gebruik het overzicht rechts om aan te geven wie deze waarschuwing gaat versturen. U kunt het ontvangende e-mail adres opgeven in [ Configuratie Backend ].');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Gebruikersgroepen van waaruit beoordelingswaarschuwingen worden verzonden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Gebruikersgroepen van waaruit beoordelingswaarschuwingen worden verzonden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Kies welke gebruikersgroepen beoordelingswaarschuwingen zullen versturen. Deze functie zal alleen worden geactiveerd wanneer --Verstuur beoordelingswaarschuwing-- ook op Ja is gezet.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND', 'value_const'=>'Verzend huurverzoekwaarschuwing');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND_TT_HEAD', 'value_const'=>'Verzend huurverzoekwaarschuwing');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND_TT_BODY', 'value_const'=>'Stel in op Ja als u per e-mail gewaarschuwd wilt worden wanneer een gebruiker een huurverzoek instuurt. Gebruik het overzicht rechts om aan te geven wie deze waarschuwing gaat versturen. U kunt het ontvangende e-mail adres opgeven in [ Configuratie Backend ].');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Gebruikersgroepen van waaruit huurverzoeken kunnen worden verstuurd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Gebruikersgroepen van waaruit huurverzoeken kunnen worden verstuurd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Kies welke gebruikersgroepen huurverzoekwaarschuwingen zullen versturen. Deze functie zal alleen worden geactiveerd wanneer --Verstuur huurverzoekwaarschuwing-- ook op Ja is gezet.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_REVIEW_COMMENT', 'value_const'=>'Bekijk commentaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_HEAD', 'value_const'=>'Maatcategorie afbeeldingen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_BODY', 'value_const'=>'Wanneer op Ja ingesteld kunt u een op maat gemaakte afbeelding toewijzen aan iedere categorie in plaats van de standaard map afbeelding. U kunt daarna de categorie afbeelding aanpassen in [ RealEstateManager ] - [ Pas&nbsp;Categorieen&nbsp;aan ] - [ Wijzig ] - [ Selecteer&nbsp;afbeelding ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_RETURN_HOUSES', 'value_const'=>'U kunt nu panden uit de verhuur nemen die niet verhuurd waren.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_RENT_HOUSES', 'value_const'=>'Maak een selectie uit de lijst van huurpanden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_RETURN_HOUSES', 'value_const'=>'Maak een selectie uit de lijst van uit de verhuur genomen panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ACCEPT_REQUEST', 'value_const'=>'Maak een selectie uit de lijst van een geaccepteerd verzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_DECLINE_REQUEST', 'value_const'=>'Maak een selectie uit de lijst van een geweigerd verzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_IMPORT', 'value_const'=>'U dient een selectie te maken van het type dat u wilt importeren!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_EXPORT', 'value_const'=>'U dient een selectie te maken van het type dat u wilt exporteren!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_LISTING_TYPE', 'value_const'=>'U dient een lijsttype voor dit pand te selecteren!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_ADDRESS', 'value_const'=>'Geef een adres voor dit pand!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_PRICE', 'value_const'=>'Geef de prijs van dit pand!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_TITLE', 'value_const'=>'Geef een titel voor dit pand!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_ROOMS', 'value_const'=>'Geef een geldig aantal kamers op!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BATHROOMS', 'value_const'=>'Geef een geldig aantal badkamers op!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BEDROOMS', 'value_const'=>'Geef een geldig aantal slaapkamers op!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_YEAR', 'value_const'=>'Geef een geldig bouwjaar voor dit pand op!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_AREA', 'value_const'=>'Geef een geldig gebied voor dit pand op!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_LOT_SIZE', 'value_const'=>'Geef een geldige perceelgrootte voor dit pand op!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_HOUSE_SIZE', 'value_const'=>'Geef een geldige huis grootte voor dit pand op!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_NAME', 'value_const'=>'Geef een naam voor uw koopverzoek op!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_EMAIL', 'value_const'=>'Geef een geldig e-mail adres op voor uw koopverzoek!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_PHONE', 'value_const'=>'Geef een geldig telefoonnummer op voor uw koopverzoek!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LISTING_TYPE', 'value_const'=>'Type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LISTING_STATUS', 'value_const'=>'Soort status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ROOMS', 'value_const'=>'Kamers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BATHROOMS', 'value_const'=>'Badkamers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BEDROOMS', 'value_const'=>'Slaapkamers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AGENT', 'value_const'=>'Agent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTACT_AGENT', 'value_const'=>'Agent contact');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AGENT_INFO', 'value_const'=>'Informatie makelaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PHOTOS', 'value_const'=>"Foto's");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PRICING', 'value_const'=>'Pricing');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OVERVIEW', 'value_const'=>'Overzicht');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AMENITIES', 'value_const'=>'Voorzieningen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BOOK_NOW', 'value_const'=>'Boek nu');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXPIRATION_DATE', 'value_const'=>'Verloopdatum');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LOT_SIZE', 'value_const'=>'Perceelgrootte');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HOUSE_SIZE', 'value_const'=>'Huis grootte');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_GARAGES', 'value_const'=>'Garages');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_APPROVED', 'value_const'=>'Approved');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REQUEST_PHONE', 'value_const'=>'Uw telefoonnummer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_REQUIREMENT_FIELDS', 'value_const'=>'Verplichte velden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_RECOMMENDED_FIELDS', 'value_const'=>'Aanbevolen velden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_ADDRESS_FIELDS', 'value_const'=>'Adresvelden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_OPTIONAL_FIELDS', 'value_const'=>'Optionele velden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_PHOTO_MANAGE', 'value_const'=>'Fotohandeling');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_PHOTOGALERY', 'value_const'=>'Fotoalbum');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_ADVERTISMENT', 'value_const'=>'Advertentie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING', 'value_const'=>'Klantinformatie ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SALE_MANAGER', 'value_const'=>'RealEstateManager : Verkoopmanager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_SEND_MESSAGE', 'value_const'=>' Stuur bericht ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND', 'value_const'=>'Verzend koopverzoek waarschuwing');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND_TT_HEAD', 'value_const'=>'Verzend koopverzoek waarschuwing');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND_TT_BODY', 'value_const'=>'Stel in op Ja wanneer u per e-mail gewaarschuwd wilt worden wanneer een gebruiker een koopverzoek indient. Gebruik het overzicht rechts om aan te geven wie deze waarschuwing gaat versturen. U kunt ontvangende e-mail adressen in [ Configuratie Backend ] instellen.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Gebruikersgroepen van welke koopverzoek waarschuwingen worden verzonden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Gebruikersgroepen van welke koopverzoek waarschuwingen worden verzonden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Kies welke gebruikersgroepen koopverzoek waarschuwingen zullen versturen. Deze functie zal alleen worden geactiveerd als --Verzend koopverzoek waarschuwing-- ook op Ja is ingesteld');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL', 'value_const'=>'Koopverzoek e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG', 'value_const'=>'RealEstateManager: Configuratie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REMOVE_MAIN_PHOTO', 'value_const'=>'Verwijder');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NEW_PHOTO', 'value_const'=>'Foto');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_RENT_OUT', 'value_const'=>'Pand verhuurd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ACCESSED_FOR_RENT', 'value_const'=>'Te huur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ACCESSED_FOR_SALE', 'value_const'=>'Te koop');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_RETURN', 'value_const'=>'Verhuur terug');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB', 'value_const'=>'Toon locatie tabblad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_TT_HEAD', 'value_const'=>'Toon locatie tabblad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_TT_BODY', 'value_const'=>'Stel in op Ja als u een locatie tabblad wilt tonen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB', 'value_const'=>'Toon beoordelings tabblad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB_TT_HEAD', 'value_const'=>'Toon beoordelings tabblad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB_TT_BODY', 'value_const'=>'Stel in op Ja als u een beoordelings tabblad wilt tonen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_ADD_HOUSE', 'value_const'=>' Voeg een pand toe ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_PUBLISH', 'value_const'=>'Publiceren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_UNPUBLISH', 'value_const'=>'Verbergen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_DELETE', 'value_const'=>'Verwijderen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RETURN_HOUSE_FROM_RENT', 'value_const'=>'Pand terug uit verhuur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT', 'value_const'=>'Verhuur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW', 'value_const'=>'Toon knop [ Voeg een pand toe ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW_TT_HEAD', 'value_const'=>'Toon knop [ Voeg een pand toe ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW_TT_BODY', 'value_const'=>'Toon knop [ Voeg een pand toe ] in de pandenlijst op de voorpagina');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL', 'value_const'=>'Accepteer knop [ Voeg een pand toe ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Accepteer knop [ Voeg een pand toe ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Accepteer knop [ Voeg een pand toe ] op de voorpagina. Deze functie wordt alleen geactiveerd als --Toon knop [ Voeg een pand toe ]-- ook op Ja is ingesteld!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTACTS', 'value_const'=>'Contacten');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS', 'value_const'=>'Toon contacten');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_TT_HEAD', 'value_const'=>'Toon contacten');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_TT_BODY', 'value_const'=>'Toon contacten op \'Alle informatie\' tabblad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION', 'value_const'=>'Locatie van de fotos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION_TT_BODY', 'value_const'=>'De locatie van de geuploade fotos op de server. Het pad is relatief tot de hoofd Joomla directory en moet starten en eindigen met een /');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION_TT_HEAD', 'value_const'=>'Locatie van de fotos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL', 'value_const'=>'Toon beoordelings tabblad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Toon beoordelings tabblad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Sta beoordelings tabblad toe op de voorpagina. Deze functie wordt alleen geactiveerd als --Toon beoordelingen tabblad-- ook op Ja is ingesteld!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL', 'value_const'=>'Toon locatie tabblad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Toon locatie tabblad');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Sta locatie tabblad op de voorpagina toe. Deze functie wordt alleen geactiveerd als --Toon locatie tabblad-- ook op Ja is ingesteld!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL', 'value_const'=>'Toon contacten');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Toon contacten');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Sta contacten op de voorpagina toe. Deze functie wordt alleen geactiveerd als --Toon contacten-- ook op Ja is ingesteld!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_UNAVAILABLE_FOR_RENT', 'value_const'=>'Niet beschikbaar voor verhuur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REAL_ESTATE_THANKS', 'value_const'=>'Uw onroerend goed is opgeslagen in onze database.<br />Bedankt voor het gebruik van onze service');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT_FROM', 'value_const'=>'Beschikbaar voor huur vanaf');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT_UNTIL', 'value_const'=>'Beschikbaar voor huur tot');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_NOTHING_FOUND', 'value_const'=>'Niets gevonden.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_DESCRIPTION', 'value_const'=>'Omschrijving');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_LOCATION', 'value_const'=>'Locatie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_ALL', 'value_const'=>'Alle informatie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_REVIEWS', 'value_const'=>'Beoordelingen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_SELECT', 'value_const'=>'---kiezen---');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_FOR_RENT', 'value_const'=>'pand te huur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_FOR_SALE', 'value_const'=>'pand te koop');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_LISTING_STATUS', 'value_const'=>'Actief,Aanbieding,Contract,Gesloten,Teruggetrokken');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_PROPERTY_TYPE', 'value_const'=>'Appartement,Commercieel,Penthouse,Coop,boerderij,Land,samengesteld,Meerdere families,Ranch,Enkele familie,Tic,Tuinpand');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER', 'value_const'=>'Antwoord op koopverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER_TT_HEAD', 'value_const'=>'Antwoord op koopverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER_TT_BODY', 'value_const'=>'Stuur een e-mail naar gebruiker over koopverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM', 'value_const'=>'Formulier voor antwoord op koopverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_TT_BODY', 'value_const'=>'Formulier voor antwoord op koopverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_TT_HEAD', 'value_const'=>'Formulier voor antwoord op koopverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_HOUSEID', 'value_const'=>'PandID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_OWNER', 'value_const'=>'Eigenaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_EXACTLY', 'value_const'=>'precies');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_RENT_ANSWER_SUBJECT', 'value_const'=>'Antwoord op uw verzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM', 'value_const'=>'Formulier voor antwoord op huurverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_TT_BODY', 'value_const'=>'Formulier voor antwoord op huurverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_TT_HEAD', 'value_const'=>'Formulier voor antwoord op huurverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_DESCTIPTION', 'value_const'=>'U kunt gebruiken: <br/>{title} - titel van huurpand
          <br/>{answer} - afgekeurd of goedgekeurd<br/>{username} - de naam van de gebruiker die om een pand verzocht<br/>
          {ownere-mail} - het e-mail adres van de eigenaar van het pand<br/>{ownername} - de naam van de eigenaar van het pand<br/>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER', 'value_const'=>'Antwoord op huurverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_TT_HEAD', 'value_const'=>'Antwoord op huurverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_TT_BODY', 'value_const'=>'Stuur een e-mail naar gebruiker over huurverzoek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_ACCEPTED', 'value_const'=>'Goedgekeurd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_DECLINED', 'value_const'=>'Afgekeurd');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EDIT_RENT', 'value_const'=>'Bewerken huur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL', 'value_const'=>'Lijst van eigenaren toestaan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Lijst van eigenaren toestaan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Selecteer gebruikers aan wie de lijst van eigenaren wordt getoond');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW', 'value_const'=>'Toon lijst van eigenaren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW_TT_HEAD', 'value_const'=>'Toon lijst van eigenaren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW_TT_BODY', 'value_const'=>'Indien keuze "JA", toon lijst van eigenaren in frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW', 'value_const'=>'Toon eigenaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW_TT_HEAD', 'value_const'=>'Toon eigenaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW_TT_BODY', 'value_const'=>'Toon of verberg pand eigenaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL', 'value_const'=>'Toestaan RSS voor');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Toestaan RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Selecteer gebruikers aan wie RSS wordt toegestaan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW', 'value_const'=>'Toon RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW_TT_BODY', 'value_const'=>'Toon of verberg RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW_TT_HEAD', 'value_const'=>'Toon RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_LIST', 'value_const'=>'lijst');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_GALLERY', 'value_const'=>'galerij');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_LIST_GALLERY', 'value_const'=>'Gebruiker-selecteerbaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE', 'value_const'=>'Bekijk type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_TT_HEAD', 'value_const'=>'Bekijk type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_TT_BODY', 'value_const'=>'Selecteer view type voor panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REGISTRATIONLEVEL', 'value_const'=>'Publiceren toestaan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD_TT_BODY', 'value_const'=>'Publiceer panden toegevoegd in de frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD', 'value_const'=>'Publiceer toegevoegde panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD_TT_HEAD', 'value_const'=>'Publiceer toegevoegde panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Selecteer gebruikers voor toestemming van panden in de frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_APPROVE_REGISTRATIONLEVEL', 'value_const'=>'Toestaan goedkeuring');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_APPROVE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Toestaan goedkeuring');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD_TT_BODY', 'value_const'=>'Goedkeuren van panden toegevoegd in de frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD', 'value_const'=>'Goedkeuren toegevoegde panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD_TT_HEAD', 'value_const'=>'Goedkeuren toegevoegde panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Toestaan button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Toestaan button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Toestaan button [ print PDF ] in de frontend. Deze functie zal alleen worden geactiveerd als --Toon button [ print PDF ]-- is ingesteld op JA!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Toestaan button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Toestaan button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Toestaan button [ print View ] in de frontend. Deze functie zal alleen worden geactiveerd als --Toon button [ print View ]-- is ingesteld op JA!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Toedtaan button<br />[ stuur link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Toestaan button<br />[ stuur link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Toestaan button [ stuur link ] in de frontend. Deze functie zal alleen worden geactiveerd als --Toon button [ stuur Mail ]-- is ingesteld op JA!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW', 'value_const'=>'Toon button<br />[ stuur link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Toon button<br />[ stuur link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW_TT_BODY', 'value_const'=>'Toont button [ stuur link ] in de pandenlijst in de frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW', 'value_const'=>'Toon button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Toon button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW_TT_BODY', 'value_const'=>'Toont button [ print View ] in de pandenlijst in de frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW', 'value_const'=>'Toon button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Toon button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW_TT_BODY', 'value_const'=>'Toont button [ print PDF ] in de pandenlijst in de frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_USER_HOUSES', 'value_const'=>'Gebruiker panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DESCRIPTION', 'value_const'=>'Omschrijving');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_YEAR', 'value_const'=>'Jaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OWNER', 'value_const'=>'Eigenaar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HAVENOT_HOUSES_RSS', 'value_const'=>'Er zijn geen panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HAVENOT_HOUSES', 'value_const'=>'U heeft geen panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DELETE_HOUSES', 'value_const'=>'Weet u het zeker?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_NOT_SELECTED', 'value_const'=>'Selecteer aub eerst een pand!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NUMBER_HOUSES', 'value_const'=>'Panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OWNERS', 'value_const'=>'Eigenaren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_ACCESS_PAGE', 'value_const'=>'Sorry, u heeft geen toegang tot deze pagina');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_OWNERSLIST', 'value_const'=>'Lijst van eigenaren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_OWNERSLIST', 'value_const'=>'Lijst van eigenaren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SHOW_MY_HOUSES', 'value_const'=>'Toon mijn panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_MY_HOUSES', 'value_const'=>'Mijn panden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PUBLISH', 'value_const'=>'Pubiceren');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_UNPUBLISH', 'value_const'=>'Verbergen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DELETE', 'value_const'=>'Verwijderen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ID', 'value_const'=>'Id');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDIT', 'value_const'=>'Bewerken');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FULL_XML', 'value_const'=>'Full XML');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_EDIT', 'value_const'=>'RealestateManager - Bewerk verhuurdetails' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND', 'value_const'=>'Verzend Pand toevoegen - bericht');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND_TT_HEAD', 'value_const'=>'Verzend Pand toevoegen - bericht');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND_TT_BODY', 'value_const'=>'Stel in op JA als u een e-mail wilt ontvangen als een pand wordt toegevoegd door een gebruiker. Gebruik het paneel aan de rechterzijde om in te stellen wie deze berichten zal verzenden. U kunt de ontvangende e-mail adressen instellen in [ Configuration Backend ].');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Gebruikersgroepen van waaruit de berichten over toegevoegde panden worden verzonden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Gebruikersgroepen van waaruit de berichten over toegevoegde panden worden verzonden');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Selecteer welke gebruikersgroepen de berichten over toegevoegde panden zullen verzenden. Deze functie zal alleen worden geactiveerd als ook --Stuur bericht over toegevoegd pand-- is ingesteld op JA');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW', 'value_const'=>'Toon koopstatus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW_TT_HEAD', 'value_const'=>'Toon koopstatus in de frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW_TT_BODY', 'value_const'=>'JA als u de huidige koopstatus van panden in de frontend wil tonen.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL', 'value_const'=>'Koopverzoeken toestaan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Koopverzoeken toestaan');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Koopverzoeken toestaan in de frontend. Deze functie zal alleen worden geactiveerd als ook de --Toon Koop Status-- is ingesteld op JA!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE', 'value_const'=>'Afmetingen eerste foto van pand');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE_TT_BODY', 'value_const'=>'Instellen afmetingen eerste foto van pand - hoogte/breedte in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE_TT_HEAD', 'value_const'=>'Afmetingen eerste foto van pand');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE', 'value_const'=>'Afmetingen foto van pand in galerij');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE_TT_HEAD', 'value_const'=>'Afmetingen foto van pand in galerij');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE_TT_BODY', 'value_const'=>'Instellen afmetingen foto in galerij - hoogte/breedte in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE', 'value_const'=>'Pand upload foto afmetingen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE_TT_HEAD', 'value_const'=>'Pand upload foto afmetingen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE_TT_BODY', 'value_const'=>'Stel upload foto afmetingen in - hoogte/breedte in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_THUMBNAIL_SETTINGS', 'value_const'=>'Crop image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_THUMBNAIL_TT_BODY', 'value_const'=>'Set Yes to crop images and No to scale images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL', 'value_const'=>'Toevoegen pand e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_TT_HEAD', 'value_const'=>'Toevoegen pand e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_TT_BODY', 'value_const'=>'Waarheen worden de berichten verzonden over toegevoegde panden. U kunt meerdere e-mail adressen invullen, gescheiden door een komma.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY', 'value_const'=>'Bericht over einde verhuur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_TT_HEAD', 'value_const'=>'Bericht over einde verhuur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_TT_BODY', 'value_const'=>'Send e-mail to admin before Rent end.<br /> For that you need create a CRON job and connect to Cron check so URL:<br /> \'http://{yours site}/index.php?option=com_realestatemanager&Itemid={Yours ItemID}&task=rent_before_end_notify\'   with span - every day.<br /> Cron Jobs may look like:<br /> \'wget -q -O - http://localhost/~andrew/joomla_15/index.php?option=com_realestatemanager&Iteid=56&task=rent_before_end_notify /dev/null\' ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS', 'value_const'=>'Rent end days');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS_TT_HEAD', 'value_const'=>'Rent end days');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS_TT_BODY', 'value_const'=>'How much days before rent end send notify e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL', 'value_const'=>'Rent end e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL_TT_HEAD', 'value_const'=>'Rent end e-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL_TT_BODY', 'value_const'=>'Set e-mails for send notify e-mail to user about Rent end. You may set set e-mails separated them with help coma.');
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
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CLICKMAP', 'value_const'=>'Click on the map to choose the house location:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DATE', 'value_const'=>'Date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_PICTURE_BIG', 'value_const'=>'no-img_eng_big.gif');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_EDIT_HOUSE', 'value_const'=>'Edit house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_DESCTIPTION', 'value_const'=>'You can use: <br/>{title} - title of buy house
          <br/>{answer} - declined or accepded<br/>{username} - the name of the user who requested a house<br/>
          {ownere-mail} - the e-mail of the owner house<br/>{ownername} - the name of the owner house<br/>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADVANCED_SEARCH', 'value_const'=>'Advanced<br />search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FROM', 'value_const'=>'from');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TO', 'value_const'=>'to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ALL', 'value_const'=>'all');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT', 'value_const'=>'Available for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_UNTIL', 'value_const'=>'until');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_WEEK', 'value_const'=>'Week');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_WEEKEND', 'value_const'=>'Weekend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_MIDWEEK', 'value_const'=>'Midweek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_MONTH', 'value_const'=>'Month');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_CALENDAR', 'value_const'=>'Calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_ADD_PRICE', 'value_const'=>'Add price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_SELECT_DELETE', 'value_const'=>'Select price which are necessary to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_NEW_PRICE', 'value_const'=>'New price rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_CALENDAR_ADD_NEW_PRICE', 'value_const'=>'Add new price rent');
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
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE_MANAGER', 'value_const'=>'Features manager');
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
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_GEOCOOR', 'value_const'=>'Get geographic coordinates');
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
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CUSTOM_OWNER_EMAIL', 'value_const'=>'Custom ownere-mail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_SHOW_ADDRESS', 'value_const'=>'Show adderess on map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_ADD_NEW_PHOTO', 'value_const'=>'Add new photo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ORDER_BY', 'value_const'=>'Order By');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PHOTO_TO_REMOVE', 'value_const'=>'Select photo if it is necessary to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PHOTO_FROM_GALLERY', 'value_const'=>'Select photos which are necessary to remove from photo gallery');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_FOR_ADDFEATURE', 'value_const'=>'A short name to appear in FeatureMenus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_1_FOR_ADDCATEGORY', 'value_const'=>'A short name to appear in menus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_2_FOR_ADDCATEGORY', 'value_const'=>'A full name to appear in menus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_GENERAL_INFO', 'value_const'=>'General Info');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_ADDITIONAL_INFO', 'value_const'=>'Additional Info');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_PHOTOS_AND_DOCUMENTS', 'value_const'=>'Photos and Documents');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_OWNER_CONTACTS', 'value_const'=>'Owner Contakts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_1', 'value_const'=>'Categories for Feature Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_2', 'value_const'=>'Feature List');
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
      {title} {ownere-mail} {ownername}<br>
      Answer: {answer}");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_BUYING_REQUEST', 'value_const'=>"
      User {username}  has submitted a Buying Request for:<br>
      PropertyID: {hid_value}<br>
      {house_title}<br>
      Please log on and approve or deny this Buying Request");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_BUYING_REQUEST_ANSWER', 'value_const'=>"Dear {username}!<br>
      Your buy request for<br>
      {title} {ownere-mail} {ownername}<br>
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
          <br>{username} - the name of the user who added a house <br>{user_e-mail} - e-mail of the user who rents the house
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
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_REQUESTS', 'value_const'=>'Rent Requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SALE_MANAGER_MENU', 'value_const'=>'Sale Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPORT_EXPORT', 'value_const'=>'Import/Export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_MENU', 'value_const'=>'Language Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS', 'value_const'=>'Instellingen');

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
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIEW_LISTING', 'value_const'=>'Bekijk immo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE', 'value_const'=>'Fotoformaat voor voorvertoning huizen');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE_TT_BODY', 'value_const'=>'Stel fotoformaat voor weergave van alle huizen en enkele categorieën');
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

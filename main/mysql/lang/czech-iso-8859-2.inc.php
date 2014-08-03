<?php
/* $Id: czech-iso-8859-2.inc.php 11119 2008-02-12 01:15:49Z nijel $ */

/**
 * Czech language file by
 *   Michal �iha� <michal@cihar.com>
 */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$number_thousands_separator = '�';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$day_of_week = array('Ned�le', 'Pond�l�', '�ter�', 'St�eda', '�tvrtek', 'P�tek', 'Sobota');
$month = array('ledna', '�nora', 'b�ezna', 'dubna', 'kv�tna', '�ervna', '�ervence', 'srpna', 'z���', '��jna', 'listopadu', 'prosince');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%a %d. %b %Y, %H:%M';

$timespanfmt = '%s dn�, %s hodin, %s minut a %s sekund';

$strAbortedClients = 'P�eru�en�';
$strAccessDeniedCreateConfig = 'Pravd�podobn� p���ina je, �e nem�te vytvo�en� konfigura�n� soubor. Pro jeho vytvo�en� by se v�m mohl hodit %1$snastavovac� skript%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin se pokusil p�ipojit k&nbsp;MySQL serveru, a ten odm�tl p�ipojen�. Zkontrolujte jm�no serveru, u�ivatelsk� jm�no a heslo v&nbsp;souboru config.inc.php a ujist�te se, �e jsou toto�n� s&nbsp;t�mi, kter� m�te od administr�tora MySQL serveru.';
$strAccessDenied = 'P��stup odep�en';
$strAction = 'Akce';
$strAddAutoIncrement = 'P�idat hodnotu AUTO_INCREMENT';
$strAddClause = 'P�idat %s';
$strAddConstraints = 'P�idat integritn� omezen�';
$strAddDeleteColumn = 'P�idat nebo odebrat sloupec';
$strAddDeleteRow = 'P�idat nebo odebrat ��dek';
$strAddFields = 'P�idat %s sloupc�';
$strAddHeaderComment = 'P�idat vlastn� koment�� do hlavi�ky (\\n odd�luje ��dky)';
$strAddIntoComments = 'Do koment��� p�idat';
$strAddNewField = 'P�idat sloupec';
$strAddPrivilegesOnDb = 'P�idat opr�vn�n� pro datab�zi';
$strAddPrivilegesOnTbl = 'P�idat opr�vn�n� pro tabulku';
$strAddSearchConditions = 'P�idat vyhled�vac� parametry (��st dotazu po p��kazu &bdquo;WHERE&ldquo;):';
$strAddToIndex = 'P�idat %s sloupc� do indexu';
$strAddUserMessage = 'U�ivatel byl p�id�n.';
$strAddUser = 'P�idat nov�ho u�ivatele';
$strAdministration = 'Spr�va';
$strAffectedRows = 'Ovlivn�n� ��dky:';
$strAfterInsertBack = 'N�vrat na p�edchoz� str�nku';
$strAfterInsertNewInsert = 'Vlo�it dal�� ��dek';
$strAfterInsertNext = 'Upravit n�sleduj�c� ��dek';
$strAfterInsertSame = 'N�vrat na tuto str�nku';
$strAfter = 'Po %s';
$strAllowInterrupt = 'Povolit p�eru�en� importu v&nbsp;p��pad� �e skript pozn�, �e se bl��� �asov� limit nastaven� v&nbsp;PHP. T�mto zp�sobem m��ete importovat i velk� soubory, ale m��e to zp�sobit probl�my s&nbsp;transakcemi.';
$strAllTableSameWidth = 'Pou��t pro v�echny tabulky stejnou ���ku';
$strAll = 'V�echno';
$strAlterOrderBy = 'Zm�nit po�ad� tabulky podle';
$strAnalyzeTable = 'Analyzovat tabulku';
$strAnd = 'a';
$strAndThen = 'a pot�';
$strAngularLinks = 'Pravo�hl� spoje';
$strAnIndex = 'K&nbsp;tabulce %s byl p�id�n index';
$strAnyHost = 'Jak�koliv po��ta�';
$strAny = 'Jak�koliv';
$strAnyUser = 'Jak�koliv u�ivatel';
$strApproximateCount = 'M��e b�t nep�esn�, viz FAQ 3.11';
$strAPrimaryKey = 'V&nbsp;tabulce %s byl vytvo�en prim�rn� kl��';
$strArabic = 'Arab�tina';
$strArmenian = 'Arm�n�tina';
$strAscending = 'Vzestupn�';
$strAtBeginningOfTable = 'Na za��tku tabulky';
$strAtEndOfTable = 'Na konci tabulky';
$strAttr = 'Vlastnosti';
$strAutomaticLayout = 'automatick� rozvr�en�';

$strBack = 'Zp�t';
$strBaltic = 'Baltick�';
$strBeginCut = 'ZA��TEK V�PISU';
$strBeginRaw = 'ZA��TEK V�PISU';
$strBinary = ' Bin�rn� ';
$strBinaryDoNotEdit = ' Bin�rn� - neupravujte ';
$strBinaryLog = 'Bin�rn� log';
$strBinLogEventType = 'Typ ud�losti';
$strBinLogInfo = 'Informace';
$strBinLogName = 'Jm�no logu';
$strBinLogOriginalPosition = 'P�vodn� pozice';
$strBinLogPosition = 'Pozice';
$strBinLogServerId = 'ID serveru';
$strBookmarkAllUsers = 'Umo�nit v�em u�ivatel�m pou��vat tuto polo�ku';
$strBookmarkCreated = 'Vytvo�en obl�ben� dotaz %s';
$strBookmarkDeleted = 'Polo�ka byla smaz�na z&nbsp;obl�ben�ch.';
$strBookmarkLabel = 'N�zev';
$strBookmarkQuery = 'Obl�ben� SQL dotaz';
$strBookmarkReplace = 'P�epsat existuj�c� obl�ben� dotaz stejn�ho jm�na';
$strBookmarkThis = 'P�idat tento SQL dotaz do obl�ben�ch';
$strBookmarkView = 'Zobrazit';
$strBrowseDistinctValues = 'Proch�zet odli�n� hodnoty';
$strBrowseForeignValues = 'Proj�t hodnoty ciz�ch kl���';
$strBrowse = 'Proj�t';
$strBufferPoolActivity = 'Aktivita vyrovn�vac� pam�ti';
$strBufferPoolUsage = 'Vyu�it� vyrovn�vac� pam�ti';
$strBufferPool = 'Vyrovn�vac� pam�';
$strBufferReadMissesInPercent = 'V�padk� p�i �ten� v&nbsp;%';
$strBufferReadMisses = 'V�padk� p�i �ten�';
$strBufferWriteWaits = '�ek�n� na z�pis';
$strBufferWriteWaitsInPercent = '�ek�n� na z�pis v&nbsp;%';
$strBulgarian = 'Bulhar�tina';
$strBusyPages = 'Zpracov�van�ch str�nek';
$strBzError = 'phpMyAdminovi se nepoda�ilo zkomprimovat v�pis, proto�e roz���en� pro kompresi bz2 je v&nbsp;t�to verzi PHP chybn�. Doporu�ujeme tuto kompresi vypnout (nastavit <code>$cfg[\'BZipDump\']</code> v&nbsp;nastaven�ch phpMyAdmina na <code>FALSE</code>). Pokud chcete pou��vat kompresi bz2, m�li byste nainstalovat nov�j�� verzi PHP. V�ce informac� o&nbsp;tomto probl�mu je u&nbsp;popisu chyby %s.';
$strBzip = '&bdquo;zabzipov�no&ldquo;';

$strCalendar = 'Kalend��';
$strCancel = 'Zru�it';
$strCanNotLoadExportPlugins = 'Nepoda�ilo se nahr�t pluginy pro export, zkontrolujte pros�m va�� instalaci!';
$strCanNotLoadImportPlugins = 'Nepoda�ilo se nahr�t pluginy pro import, zkontrolujte pros�m va�� instalaci!';
$strCannotLogin = 'Nepoda�ilo se p�ihl�en� k&nbsp;MySQL serveru';
$strCantLoad = 'nelze nahr�t roz���en� %s,<br />zkontrolujte pros�m nastaven� PHP';
$strCantLoadRecodeIconv = 'Nelze nahr�t roz���en� iconv ani recode pot�ebn� pro p�evod znakov�ch sad. Upravte nastaven� PHP tak, aby umo��ovalo pou��t tyto roz���en� nebo vypn�te p�evod znakov�ch sad v&nbsp;phpMyAdminovi.';
$strCantRenameIdxToPrimary = 'Index nem��ete p�ejmenovat na &bdquo;PRIMARY&ldquo;!';
$strCantUseRecodeIconv = 'Nelze pou��t funkce iconv ani libiconv ani recode_string, p�esto�e roz���en� jsou nahr�na. Zkontrolujte nastaven� PHP.';
$strCardinality = 'Mohutnost';
$strCaseInsensitive = 'nerozli�ovat velk� a mal� p�smena';
$strCaseSensitive = 'rozli�ovat velk� a mal� p�smena';
$strCentralEuropean = 'St�edn� Evropa';
$strChangeCopyModeCopy = '... zachovat p�vodn�ho u�ivatele.';
$strChangeCopyModeDeleteAndReload = ' ... smazat u�ivatele a pot� znovu na��st opr�vn�n�.';
$strChangeCopyModeJustDelete = ' ... smazat p�vodn�ho u�ivatele ze v�ech tabulek.';
$strChangeCopyModeRevoke = ' ... odebrat v�echna opr�vn�n� p�vodn�mu u�ivateli a pot� ho smazat.';
$strChangeCopyMode = 'Vytvo�it nov�ho u�ivatele se stejn�mi opr�vn�n�mi a ...';
$strChangeCopyUser = 'Zm�nit informace o&nbsp;u�ivateli / Kop�rovat u�ivatele';
$strChangeDisplay = 'Zvolte kter� sloupce zobrazit';
$strChangePassword = 'Zm�nit heslo';
$strChange = 'Zm�nit';
$strCharsetOfFile = 'Znakov� sada souboru:';
$strCharsetsAndCollations = 'Znakov� sady a porovn�v�n�';
$strCharsets = 'Znakov� sady';
$strCharset = 'Znakov� sada';
$strCheckAll = 'Za�krtnout v�e';
$strCheckOverhead = 'Za�krtnout neoptim�ln�';
$strCheckPrivsLong = 'Zkontrolovat opr�vn�n� pro datab�zi &bdquo;%s&ldquo;.';
$strCheckPrivs = 'Zkontrolovat opr�vn�n�';
$strCheckTable = 'Zkontrolovat tabulku';
$strChoosePage = 'Zvolte str�nku, kterou chcete zm�nit';
$strColComFeat = 'Zobrazuji koment��e sloupc�';
$strCollation = 'Porovn�v�n�';
$strColumnNames = 'N�zvy sloupc�';
$strColumnPrivileges = 'Opr�vn�n� pro jednotliv� sloupce';
$strCommand = 'P��kaz';
$strCommentsForTable = 'KOMENT��E PRO TABULKU';
$strComments = 'Koment��e';
$strCompatibleHashing = 'Kompatibiln� s&nbsp;MySQL&nbsp;4.0';
$strCompleteInserts = '�pln� inserty';
$strCompression = 'Komprese';
$strCompressionWillBeDetected = 'Komprimace importovan�ho souboru bude automaticky rozpozn�na. Podporov�ny jsou: %s';
$strConfigDefaultFileError = 'Nepoda�ilo se nahr�t v�choz� konfiguraci ze souboru: "%1$s"';
$strConfigFileError = 'phpMyAdmin nemohl na��st konfigura�n� soubor!<br />Tato chyba m��e nastat, pokud v&nbsp;n�m PHP najde chybu nebo nem��e tento soubor naj�t.<br />Po kliknut� na n�sleduj�c� odkaz se PHP pokus� p��mo interpretovat tento soubor a zobraz� informace o&nbsp;chyb�, ke kter� do�lo. Pak opravte tuto chybu (nej�ast�ji se jedn� o&nbsp;chyb�j�c� st�edn�k).<br />Pokud z�sk�te pr�zdnou str�nku, v�echno je v&nbsp;po��dku.';
$strConfigureTableCoord = 'Pros�m, nastavte sou�adnice pro tabulku %s';
$strConnectionError = 'Nepoda�ilo se p�ipojit: chybn� nastaven�.';
$strConnections = 'P�ipojen�';
$strConstraintsForDumped = 'Omezen� pro exportovan� tabulky';
$strConstraintsForTable = 'Omezen� pro tabulku';
$strControluserFailed = 'Nepoda�ilo se p�ipojit jako controluser, kter� je nadefinov�n v nastaven�ch.';
$strCookiesRequired = 'P�ihl�en� vy�aduje povolen� cookies.';
$strCopyDatabaseOK = 'Datab�ze %s byla zkop�rov�na na %s';
$strCopy = 'Kop�rovat';
$strCopyTable = 'Kop�rovat tabulku do (datab�ze<b>.</b>tabulka):';
$strCopyTableOK = 'Tabulka %s byla zkop�rov�na do %s.';
$strCopyTableSameNames = 'Nelze kop�rovat tabulku na sebe samu!';
$strCouldNotKill = 'phpMyAdminovi se nepoda�ilo ukon�it vl�kno %s. Pravd�podobn� jeho b�h ji� skon�il.';
$strCreateDatabaseBeforeCopying = 'Vytvo�it datab�zi p�ed kop�rov�n�m (CREATE DATABASE)';
$strCreateIndexTopic = 'Vytvo�it nov� index';
$strCreateIndex = 'Vytvo�it index na&nbsp;%s&nbsp;sloupc�ch';
$strCreateNewDatabase = 'Vytvo�it novou datab�zi';
$strCreateNewTable = 'Vytvo�it novou tabulku v&nbsp;datab�zi %s';
$strCreatePage = 'Vytvo�it novou str�nku';
$strCreatePdfFeat = 'Vytv��en� PDF';
$strCreateRelation = 'Vytvo�it relaci';
$strCreateTable  = 'Vytvo�it tabulku';
$strCreateUserDatabase = 'Datab�ze pro u�ivatele';
$strCreateUserDatabaseName = 'Vytvo�it datab�zi stejn�ho jm�na a p�id�lit v�echna opr�vn�n�';
$strCreateUserDatabaseNone = '��dn�';
$strCreateUserDatabaseWildcard = 'P�id�lit v�echna opr�vn�n� na jm�no odpov�daj�c� masce (u�ivatel_%)';
$strCreate = 'Vytvo�it';
$strCreationDates = 'Datum vytvo�en�, posledn� zm�ny a kontroly';
$strCriteria = 'Podm�nka';
$strCroatian = 'Chorvat�tina';
$strCSV = 'CSV';
$strCyrillic = 'Cyrilika';
$strCzech = '�e�tina';
$strCzechSlovak = '�e�tina/Sloven�tina';

$strDanish = 'D�n�tina';
$strDatabase = 'Datab�ze';
$strDatabaseEmpty = 'Jm�no datab�ze je pr�zdn�!';
$strDatabaseExportOptions = 'Nastaven� exportu datab�z�';
$strDatabaseHasBeenDropped = 'Datab�ze %s byla zru�ena.';
$strDatabases = 'Datab�ze';
$strDatabasesDropped = '%s datab�ze byla �sp�n� zru�ena.';
$strDatabasesStatsDisable = 'Skr�t podrobnosti';
$strDatabasesStatsEnable = 'Zobrazit podrobnosti';
$strDatabasesStatsHeavyTraffic = 'Pozn�mka: Zobrazen� podrobnost� o&nbsp;datab�z�ch m��e zp�sobit zna�n� zv��en� provozu mezi webserverem a MySQL serverem.';
$strDatabasesStats = 'Statistiky datab�z�';
$strData = 'Data';
$strDataDict = 'Datov� slovn�k';
$strDataOnly = ' Jen data';
$strDataPages = 'Str�nek obsahuj�c�ch data';
$strDBComment = 'Koment�� k&nbsp;datab�zi: ';
$strDBCopy = 'Zkop�rovat datab�zi na';
$strDbIsEmpty = 'Datab�ze se zd� b�t pr�zdn�!';
$strDbPrivileges = 'Opr�vn�n� pro jednotliv� datab�ze';
$strDBRename = 'P�ejmenovat datab�zi na';
$strDbSpecific = 'z�visl� na datab�zi';
$strDefaultEngine = '%s je v�choz� �lo�i�t� na tomto MySQL serveru.';
$strDefaultValueHelp = 'V�choz� hodnotu zadejte jen jednu hodnotu bez uvozovek a escapov�n� znak�, nap��klad: a';
$strDefault = 'V�choz�';
$strDefragment = 'Defragmentovat tabulku';
$strDelayedInserts = 'Pou��vat zpo�d�n� inserty';
$strDeleteAndFlushDescr = 'Toto je nej�ist�� �e�en�, ale na��t�n� opr�vn�n� m��e trvat dlouho.';
$strDeleteAndFlush = 'Odstranit u�ivatele a znovu na��st opr�vn�n�.';
$strDeleted = '��dek byl smaz�n';
$strDeletedRows = 'Smazan� ��dky:';
$strDeleteNoUsersSelected = 'Mus�te vybrat u�ivatele, kter� chcete odstranit!';
$strDelete = 'Odstranit';
$strDeleteRelation = 'Odstranit relaci';
$strDeleting = 'Odstra�uji %s';
$strDelimiter = 'Odd�lova�';
$strDelOld = 'Aktu�ln� str�nka se odkazuje na tabulky, kter� ji� neexistuj�. Chcete odstranit tyto odkazy?';
$strDescending = 'Sestupn�';
$strDescription = 'Popis';
$strDesignerHelpDisplayField = 'Zobrazovan� pole je ozna�eno r��ovou barvou. Pro jeho zm�nu klikn�te na ikonu "Zvolte kter� sloupce zobrazit" a pot� zvolte odpov�daj�c� sloupec.';
$strDesigner = 'N�vrh��';
$strDictionary = 'slovn�k';
$strDirectLinks = 'P��m� spoje';
$strDirtyPages = 'Zm�n�n�ch str�nek';
$strDisabled = 'Vypnuto';
$strDisableForeignChecks = 'Vypnout kontrolu ciz�ch kl���';
$strDisplayFeat = 'Zobrazen� funkc�';
$strDisplayOrder = 'Se�adit podle:';
$strDisplayPDF = 'Zobrazit jako sch�ma v&nbsp;PDF';
$strDoAQuery = 'Prov�st &bdquo;dotaz podle p��kladu&ldquo; (z�stupn� znak: &bdquo;%&ldquo;)';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentace';
$strDoYouReally = 'Opravdu si p�ejete vykonat p��kaz';
$strDropDatabaseStrongWarning = 'Chyst�te se ZRU�IT celou datab�zi!';
$strDrop = 'Odstranit';
$strDropUsersDb = 'Odstranit datab�ze se stejn�mi jm�ny jako u�ivatel�.';
$strDumpingData = 'Vypisuji data pro tabulku';
$strDumpSaved = 'V�pis byl ulo�en do souboru %s.';
$strDumpXRows = 'Vypsat %s ��dk� od %s.';
$strDynamic = 'dynamick�';

$strEditPDFPages = 'Upravit PDF str�nky';
$strEditPrivileges = 'Upravit opr�vn�n�';
$strEdit = 'Upravit';
$strEffective = 'Efektivn�';
$strEmptyResultSet = 'MySQL vr�til pr�zdn� v�sledek (tj. nulov� po�et ��dk�).';
$strEmpty = 'Vypr�zdnit';
$strEnabled = 'Zapnuto';
$strEncloseInTransaction = 'Uzav��t p��kazy v&nbsp;transakci';
$strEndCut = 'KONEC V�PISU';
$strEnd = 'Konec';
$strEndRaw = 'KONEC V�PISU';
$strEngineAvailable = '�lo�i�t� %s je dostupn� na tomto MySQL serveru.';
$strEngineDisabled = '�lo�i�t� %s je vypnut� na tomto MySQL serveru.';
$strEngines = '�lo�i�t�';
$strEngineUnsupported = 'Tento MySQL server nepodporuje �lo�i�t� %s.';
$strEnglish = 'Anglicky';
$strEnglishPrivileges = 'Pozn�mka: n�zvy opr�vn�n� v&nbsp;MySQL jsou uv�d�ny anglicky';
$strError = 'Chyba';
$strErrorInZipFile = 'Chyba v&nbsp;ZIP arch�vu:';
$strErrorRelationAdded = 'Chyba: relace nebyla p�id�na.';
$strErrorRelationExists = 'Chyba: relace ji� existuje.';
$strErrorRenamingTable = 'Chyba p�i p�ejmenov�n� tabulky %1$s na %2$s';
$strErrorSaveTable = 'Chyba p�i ukl�d�n� sou�adnic pro N�vrh��e.';
$strEscapeWildcards = 'Z�stupn� znaky _ a % by m�ly b�t escapov�ny pomoc� \, pokud je chcete pou��t jako znak';
$strEsperanto = 'Esperanto';
$strEstonian = 'Eston�tina';
$strEvent = 'Ud�lost';
$strExcelEdition = 'Verze Excelu';
$strExecuteBookmarked = 'Spustit obl�ben� dotaz';
$strExplain = 'Vysv�tlit dotaz';
$strExport = 'Export';
$strExportImportToScale = 'Exportovat/Importovat v m���tku';
$strExportMustBeFile = 'Zvolen� export mus� b�t ulo�en do souboru!';
$strExtendedInserts = 'Roz���en� inserty';
$strExtra = 'Extra';

$strFailedAttempts = 'Nepoveden�ch pokus�';
$strFieldHasBeenDropped = 'Sloupec %s byl odstran�n';
$strFieldInsertFromFileTempDirNotExists = 'Chyba p�i p�ejmenov�n� nahran�ho soubory, viz FAQ 1.11';
$strFieldsEnclosedBy = 'N�zvy sloupc� uzav�en�';
$strFieldsEscapedBy = 'N�zvy sloupc� escapov�ny';
$strField = 'Sloupec';
$strFields = 'Sloupce';
$strFieldsTerminatedBy = 'Sloupce odd�len�';
$strFileAlreadyExists = 'Soubor %s ji� na serveru existuje, zm��te jm�no souboru, nebo zvolte p�eps�n� souboru.';
$strFileCouldNotBeRead = 'Soubor nelze p�e��st';
$strFileNameTemplateDescriptionDatabase = 'jm�no datab�ze';
$strFileNameTemplateDescriptionServer = 'jm�no serveru';
$strFileNameTemplateDescriptionTable = 'jm�no tabulky';
$strFileNameTemplateDescription = 'Tato hodnota je interpretov�na pomoc� %1$sstrftime%2$s, tak�e m��ete pou��t libovoln� �et�zce pro form�tov�n� data a �asu. D�le budou provedena n�sleduj�c� nahrazen�: %3$s. Jak�koliv jin� text z�stane zachov�n beze zm�ny.';
$strFileNameTemplateRemember = 'zapamatovat si hodnotu';
$strFileNameTemplate = 'Vzor pro jm�no souboru';
$strFiles = 'Soubory';
$strFileToImport = 'Soubor pro importov�n�';
$strFixed = 'pevn�';
$strFlushPrivilegesNote = 'Pozn�mka: phpMyAdmin z�sk�v� opr�vn�n� p��mo z&nbsp;tabulek MySQL. Obsah t�chto tabulek se m��e li�it od opr�vn�n�, kter� server pr�v� pou��v�, pokud byly tyto tabulky upravov�ny. V&nbsp;tomto p��pad� je vhodn� prov�st %snov� na�ten� opr�vn�n�%s p�ed pokra�ov�n�m.';
$strFlushQueryCache = 'Vypr�zdnit vyrovn�vac� pam� dotaz�';
$strFlushTables = 'Zav��t v�echny tabulky';
$strFlushTable = 'Vypr�zdnit vyrovn�vac� pam� pro tabulku (&bdquo;FLUSH&ldquo;)';
$strFontSize = 'Velikost p�sma';
$strForeignKeyError = 'Chyba p�i vytv��en� ciz�ho kl��e (zkontrolujte typ dat)';
$strFormat = 'Form�t';
$strFormEmpty = 'Chyb�j�c� hodnota ve formul��i!';
$strFreePages = 'Voln�ch str�nek';
$strFullText = 'Cel� texty';
$strFunction = 'Funkce';
$strFunctions = 'Funkce';

$strGenBy = 'Vygeneroval';
$strGeneralRelationFeat = 'Obecn� funkce relac�';
$strGeneratePassword = 'Vytvo�it heslo';
$strGenerate = 'Vytvo�it';
$strGenTime = 'Vygenerov�no';
$strGeorgian = 'Gruz�n�tina';
$strGerman = 'N�mecky';
$strGlobal = 'glob�ln�';
$strGlobalPrivileges = 'Glob�ln� opr�vn�n�';
$strGlobalValue = 'Glob�ln� hodnota';
$strGo = 'Prove�';
$strGrantOption = 'P�id�lov�n�';
$strGreek = '�e�tina';
$strGzip = '&bdquo;zagzipov�no&ldquo;';

$strHandler = 'Obslu�n� rutiny';
$strHasBeenAltered = 'byla zm�n�na.';
$strHasBeenCreated = 'byla vytvo�ena.';
$strHaveToShow = 'Mus�te zvolit alespo� jeden sloupec, kter� chcete zobrazit.';
$strHebrew = 'Hebrej�tina';
$strHelp = 'N�pov�da';
$strHexForBLOB = 'Pou��t �estn�ctkov� zobrazen� pro BLOB';
$strHideShowAll = 'Skr�t/Zobrazit v�e';
$strHideShowNoRelation = 'Skr�t/Zobrazit tabulky bez relac�';
$strHide         = 'Skr�t';
$strHome = 'Hlavn� strana';
$strHomepageOfficial = 'Ofici�ln� str�nka phpMyAdmina';
$strHostEmpty = 'Jm�no po��ta�e je pr�zdn�!';
$strHost = 'Po��ta�';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ma�ar�tina';

$strIcelandic = 'Island�tina';
$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIEUnsupported = 'Prohl��e� Internet Explorer tuto funkci nepodporuje.';
$strIgnoreDuplicates = 'Ignorovat duplicitn� ��dky';
$strIgnore = 'Ignorovat';
$strIgnoreInserts = 'Pou��t IGNORE';
$strImportExportCoords = 'Import/Export sou�adnic pro PDF sch�ma';
$strImportFiles = 'Importovat soubory';
$strImportFormat = 'Form�t importovan�ho souboru';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Import byl �sp�n� dokon�en, bylo provedeno %d dotaz�.';
$strIndexes = 'Indexy';
$strIndexesSeemEqual = 'N�sleduj�c� indexy vypadaj� shodn� a jeden z nich by m�l b�t odstran�n:';
$strIndexHasBeenDropped = 'Index %s byl odstran�n';
$strIndex = 'Index';
$strIndexName = 'Jm�no indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexWarningTable = 'Probl�my s&nbsp;indexy v&nbsp;tabulce `%s`';
$strInnoDBAutoextendIncrementDesc = 'Velikost o&nbsp;kterou je zv�t�en soubor s&nbsp;daty, pokud je zapln�n�.';
$strInnoDBAutoextendIncrement = 'Krok automatick�ho zv�t�ov�n�';
$strInnoDBBufferPoolSizeDesc = 'Velikost vyrovn�vac� pam�ti, kterou InnoDB pou��v� pro vyrovn�vac� pam� dat a index� tabulek.';
$strInnoDBBufferPoolSize = 'Velikost vyrovn�vac� pam�ti';
$strInnoDBDataFilePath = 'Soubor s&nbsp;daty';
$strInnoDBDataHomeDirDesc = 'Spole�n� ��st cesty pro v�echny soubory obsahuj�c� data InnoDB.';
$strInnoDBDataHomeDir = 'Domovsk� adres�� pro data';
$strInnoDBPages = 'str�nek';
$strInnoDBRelationAdded = 'Vytvo�ena relace InnoDB';
$strInnodbStat = 'Stav InnoDB';
$strInsecureMySQL = 'M�te standardn� nastaven� hesla u�ivatele root v&nbsp;MySQL. Doporu�ujeme zm�nit toto nastaven� a t�m podstatn� zv��it zabezpe�en� va�eho serveru.';
$strInsertAsNewRow = 'Vlo�it jako nov� ��dek';
$strInsertedRowId = 'Id vlo�en�ho ��dku:';
$strInsertedRows = 'Vlo�eno ��dk�:';
$strInsert = 'Vlo�it';
$strInternalNotNecessary = '* Intern� relace nen� pot�ebn�, pokud ji� relace existuje v&nbsp;InnoDB.';
$strInternalRelationAdded = 'Intern� relace vytvo�ena';
$strInternalRelations = 'Intern� relace';
$strInUse = 'pr�v� se pou��v�';
$strInvalidAuthMethod = 'V konfiguraci m�te �patnou autentiza�n� metodu:';
$strInvalidColumn = 'Byl zad�n chybn� sloupec (%s)!';
$strInvalidColumnCount = 'Po�et sloupc� mus� b�t v�t�� ne� nula.';
$strInvalidCSVFieldCount = 'Chybn� po�et polo�ek v&nbsp;CSV datech na ��dku %d.';
$strInvalidCSVFormat = 'Chybn� form�t CSV dat na ��dku %d.';
$strInvalidCSVParameter = 'Nezn�m� parametr pro import CSV: %s';
$strInvalidDatabase = 'Chybn� datab�ze';
$strInvalidFieldAddCount = 'Mus�te p�idat alespo� jeden sloupec.';
$strInvalidFieldCount = 'Tabulka mus� m�t alespo� jeden sloupec.';
$strInvalidLDIImport = 'Tento plugin nepodporuje komprimovan� soubory!';
$strInvalidRowNumber = '%d nen� platn� ��slo ��dku.';
$strInvalidServerHostname = 'Chybn� jm�no serveru pro server %1$s. Pros�m zkontrolujte nastaven�.';
$strInvalidServerIndex = 'Chybn� index serveru: "%s"';
$strInvalidTableName = 'Chybn� jm�no tabulky';

$strJapanese = 'Japon�tina';
$strJoins = 'Pou�it� v�b�ry';
$strJumpToDB = 'P�ej�t na datab�zi &bdquo;%s&ldquo;.';
$strJustDeleteDescr = 'Odstran�n� u�ivatel� st�le budou m�t p��stup na server, dokud nebudou znovu na�tena opr�vn�n�.';
$strJustDelete = 'Jen odstranit u�ivatele z&nbsp;tabulek s&nbsp;opr�vn�n�mi.';

$strKeepPass = 'Nem�nit heslo';
$strKeyCache = 'Vyrovn�vac� pam� kl���';
$strKeyname = 'Kl��ov� n�zev';
$strKill = 'Ukon�it';
$strKnownExternalBug = 'Funk�nost %s je omezena zn�mou chybou, viz %s.';
$strKorean = 'Korej�tina';

$strLandscape = 'Na ���ku';
$strLanguage = 'Jazyk';
$strLanguageUnknown = 'Nezn�m� jazyk: %1$s.';
$strLatchedPages = 'Zam�en�ch str�nek';
$strLatexCaption = 'Titulek tabulky';
$strLatexContent = 'Obsah tabulky __TABLE__';
$strLatexContinuedCaption = 'Titulek pokra�ov�n� tabulky';
$strLatexContinued = '(pokra�ov�n�)';
$strLatexIncludeCaption = 'Pou��t titulek tabulky';
$strLatexLabel = 'N�v�st�';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tabulky __TABLE__';
$strLatvian = 'Loty�tina';
$strLDI = 'CSV pomoc� LOAD DATA';
$strLDILocal = 'Pou��t kl��ov� slovo LOCAL';
$strLengthSet = 'D�lka/Mno�ina';
$strLimitNumRows = 'z�znam� na str�nku';
$strLinesTerminatedBy = '��dky ukon�en�';
$strLinkNotFound = 'Odkaz nenalezen';
$strLinksTo = 'Odkazuje na';
$strLithuanian = 'Litev�tina';
$strLocalhost = 'Lok�ln�';
$strLocationTextfile = 'textov� soubor';
$strLoginInformation = 'P�ihla�ov�n�';
$strLogin = 'P�ihl�en�';
$strLogout = 'Odhl�sit se';
$strLogPassword = 'Heslo:';
$strLogServer = 'Server';
$strLogUsername = 'Jm�no:';
$strLongOperation = 'Tato operace m��e trvat velmi dlouho. Chcete je p�esto prov�st?';

$strMaxConnects = 'Maximum sou�asn�ch p�ipojen�';
$strMaximalQueryLength = 'Maxim�ln� velikost vytvo�en�ho dotazu';
$strMaximumSize = 'Maxim�ln� velikost: %s%s';
$strMbExtensionMissing = 'Roz���en� mbstring pro PHP nebylo nalezeno a zd� se, �e po��v�te v�ce bajtovou znakovou sadu. Bez roz���en� mbstring neum� phpMyAdmin spr�vn� rozd�lovat �et�zce a proto to m��e m�t ne�ekan� n�sledky.';
$strMbOverloadWarning = 'V&nbsp;nastaven� PHP m�te zapnuto mbstring.func_overload. Toto nastaven� nen� kompatibiln� s&nbsp;phpMyAdminem a m��e zp�sobit po�kozen� dat!';
$strMIME_available_mime = 'Dostupn� MIME typy';
$strMIME_available_transform = 'Dostupn� transformace';
$strMIME_description = 'Popis';
$strMIME_MIMEtype = 'MIME typ';
$strMIME_nodescription = 'Pro tuto transformaci nen� dostupn� ��dn� popis.<br />Zeptejte se autora co %s d�l�.';
$strMIME_transformation_note = 'Pro seznam dostupn�ch parametr� transformac� a jejich MIME typ� klikn�te na %spopisy transformac�%s';
$strMIME_transformation_options_note = 'Zadejte parametry transformac� v&nbsp;n�sleduj�c�m tvaru: \'a\', 100, b,\'c\'...<br />Pokud pot�ebujete pou��t zp�tn� lom�tko (&bdquo;\&ldquo;) nebo jednoduch� uvozovky (&bdquo;\'&ldquo;) mezi t�mito hodnotami, vlo�te p�ed n� zp�tn� lom�tko (nap��klad \'\\\\xyz\' nebo \'a\\\'b\').';
$strMIME_transformation_options = 'Parametry transformace';
$strMIME_transformation = 'Transformace p�i prohl��en�';
$strMIMETypesForTable = 'MIME TYPY PRO TABULKU';
$strMIME_without = 'MIME typy zobrazen� kurz�vou nemaj� vlastn� transforma�n� funkci';
$strModifications = 'Zm�ny byly ulo�eny';
$strModifyIndexTopic = 'Upravit index';
$strModify = '�pravy';
$strMoveMenu = 'P�esun menu';
$strMoveTableOK = 'Tabulka %s byla p�esunuta do %s.';
$strMoveTable = 'P�esunout tabulku do (datab�ze<b>.</b>tabulka):';
$strMoveTableSameNames = 'Nelze p�esunout tabulku na sebe samu!';
$strMultilingual = 'mnohojazy�n�';
$strMyISAMDataPointerSizeDesc = 'V�choz� velikost ukazatele v&nbsp;bajtech, kter� bude pou�ita pro vytv��en� MyISAM tabulek, pokud nen� uvedeno MAX_ROWS.';
$strMyISAMDataPointerSize = 'Velikost ukazatele na data';
$strMyISAMMaxExtraSortFileSizeDesc = 'Pokud by byl soubor pro vytv��en� MyISAM indexu byl v�t�� ne� zde uveden� hodnota, pou�ije se pomalej�� metoda vyrovn�vac� pam�ti kl���.';
$strMyISAMMaxExtraSortFileSize = 'Maxim�ln� velikost do�asn�ch soubor� p�i vytv��en� indexu';
$strMyISAMMaxSortFileSizeDesc = 'Maxim�ln� velikost do�asn�ch soubor�, kter� sm� MySQL pou��t p�i obnov� indexu (p�i REPAIR TABLE, ALTER TABLE nebo LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maxim�ln� velikost do�asn�ch soubor� pro �azen�';
$strMyISAMRecoverOptions = 'Automatick� re�im obnovy';
$strMyISAMRecoverOptionsDesc = 'Re�im automatick� obnovy po�kozen�ch MyISAM tabulek. Nastavuje se parametrem --myisam-recover p�i spou�t�n� serveru.';
$strMyISAMRepairThreadsDesc = 'Pokud je tato hodnota v�t�� ne� 1, indexy v&nbsp;MyISAM tabulk�ch jsou vytv��eny paraleln� (ka�d� index vlastn�m threadem) p�i obnov� nebo �azen�.';
$strMyISAMRepairThreads = 'Thread� pro opravov�n�';
$strMyISAMSortBufferSizeDesc = 'Pam�, kter� je alokov�na p�i �azen� MyISAM index� b�hem jejich vytv��en� nebo opravov�n�.';
$strMyISAMSortBufferSize = 'Velikost pam�ti pro �azen�';
$strMySQLCharset = 'Znakov� sada v&nbsp;MySQL';
$strMysqlClientVersion = 'Verze MySQL klienta';
$strMySQLConnectionCollation = 'Porovn�v�n� pro toto p�ipojen� k&nbsp;MySQL';
$strMysqlLibDiffersServerVersion = 'Pou��van� MySQL modul v PHP je kompilov�na pro MySQL %s a server pou��v� verzi %s. Toto m��e zp�sobit probl�my.';
$strMySQLSaid = 'MySQL hl�s�: ';
$strMySQLShowProcess = 'Zobrazit procesy';
$strMySQLShowStatus = 'Informace o&nbsp;stavu MySQL';
$strMySQLShowVars = 'Syst�mov� prom�nn� MySQL';

$strName = 'N�zev';
$strNext = 'Dal��';
$strNoActivity = 'Byli jste p��li� dlouho neaktivn� (d�le ne� %s sekund), pros�m p�ihlaste se znovu';
$strNoDatabasesSelected = 'Nebyla vybr�na ��dn� datab�ze.';
$strNoDatabases = '��dn� datab�ze';
$strNoDataReceived = 'Nepoda�ilo se na��st ��dn� data k importu. Bu�to nebyl odesl�n ��dn� soubor, nebo jeho velikost p�ekro�ila velikost povolenou v nastaven� PHP. Viz FAQ 1.16.';
$strNoDescription = '��dn� popisek';
$strNoDetailsForEngine = 'Nejsou dostupn� podrobn�j�� informace o tomto �lo�i�ti.';
$strNoDropDatabases = 'P��kaz &bdquo;DROP DATABASE&ldquo; je vypnut�.';
$strNoExplain = 'Bez vysv�tlen� (EXPLAIN) SQL';
$strNoFilesFoundInZip = 'V&nbsp;ZIP arch�vu nebyly nalezeny ��dn� soubory!';
$strNoFrames = 'phpMyAdmin se l�pe pou��v� v&nbsp;prohl��e�i podporuj�c�m r�my (&bdquo;FRAME&ldquo;).';
$strNoIndexPartsDefined = 'Nebyla zad�na ��dn� ��st indexu!';
$strNoIndex = 'Tabulka nem� ��dn� index!';
$strNoModification = '��dn� zm�na';
$strNo = 'Ne';
$strNone = '��dn�';
$strNoOptions = 'Tento form�t nem� ��dn� nastaven�';
$strNoPassword = '��dn� heslo';
$strNoPermission = 'Web server nem� opr�vn�n� ulo�it v�pis do souboru %s.';
$strNoPhp = 'Bez PHP k�du';
$strNoPrivileges = 'Nem�te opr�vn�n�';
$strNoRights = 'Nem�te dostate�n� pr�va na proveden� t�to akce!';
$strNoRowsSelected = 'Nebyl vybr�n ��dn� ��dek';
$strNoSpace = 'Nedostatek m�sta pro ulo�en� souboru %s.';
$strNoTablesFound = 'V&nbsp;datab�zi nebyla nalezena ��dn� tabulka.';
$strNoThemeSupport = 'Nen� podporov�na zm�na t�matu, zkontrolujte nastaven� a t�mata v&nbsp;adres��i %s.';
$strNotNumber = 'Nebylo zad�no ��slo!';
$strNotOK = 'nen� v&nbsp;po��dku';
$strNotSet = '<b>%s</b> tabulka nenalezena nebo nen� nastavena v&nbsp;%s';
$strNoUsersFound = '��dn� u�ivatel nenalezen.';
$strNoValidateSQL = 'Bez kontroly SQL';
$strNull = 'Nulov�';
$strNumberOfFields = 'Po�et sloupc�';
$strNumberOfTables = 'Po�et tabulek';
$strNumSearchResultsInTable = '%s odpov�daj�c�(ch) z�znam(�) v&nbsp;tabulce <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkem:</b> <i>%s</i> odpov�daj�c�(ch) z�znam(�)';
$strNumTables = 'Tabulek';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Se�it OpenDocument';
$strOpenDocumentText = 'Text OpenDocument';
$strOpenNewWindow = 'Otev��t nov� okno phpMyAdmina';
$strOperations = '�pravy';
$strOperator = 'Oper�tor';
$strOptimizeTable = 'Optimalizovat tabulku';
$strOptions = 'Nastaven�';
$strOr = 'nebo';
$strOverhead = 'Nav�c';
$strOverwriteExisting = 'P�epsat existuj�c� soubor(y)';

$strPageNumber = 'Strana ��slo:';
$strPagesToBeFlushed = 'Str�nek ur�en�ch k&nbsp;uvoln�n�';
$strPaperSize = 'Velikost str�nky';
$strPartialImport = '��ste�n� import';
$strPartialText = 'Zkr�cen� texty';
$strPasswordChanged = 'Heslo pro %s bylo �sp�n� zm�n�no.';
$strPasswordEmpty = 'Heslo je pr�zdn�!';
$strPasswordHashing = 'Ha�ovac� funkce pro heslo';
$strPassword = 'Heslo';
$strPasswordNotSame = 'Hesla nejsou stejn�!';
$strPdfDbSchema = 'Sch�ma datab�ze &bdquo;%s&ldquo; - Strana %s';
$strPdfInvalidTblName = 'Tabulka &bdquo;%s&ldquo; neexistuje!';
$strPdfNoTables = '��dn� tabulky';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Vygeneruje dokument obsahuj�c� data jedn� tabulky)';
$strPDFReportTitle = 'N�zev v�pisu';
$strPerHour = 'za hodinu';
$strPerMinute = 'za minutu';
$strPerSecond = 'za sekundu';
$strPersian = 'Per�tina';
$strPhoneBook = 'adres��';
$strPHP40203 = 'Pou��v�te PHP 4.2.3, kter� m� z�va�nou chybu p�i pr�ci s&nbsp;v�ce bajtov�mi znaky (mbstring), jedn� se o&nbsp;chybu PHP ��slo 19404. Nedoporu�ujeme pou��vat tuto verzi PHP s&nbsp;phpMyAdminem.';
$strPHPVersion = 'Verze PHP';
$strPhp = 'Vytvo�it PHP k�d';
$strPleaseSelectPrimaryOrUniqueKey = 'Zvolte, pros�m, prim�rn� nebo unik�tn� kl��';
$strPmaDocumentation = 'Dokumentace phpMyAdmina';
$strPmaUriError = 'Parametr <tt>$cfg[\'PmaAbsoluteUri\']</tt> MUS� b�t nastaven v&nbsp;konfigura�n�m souboru!';
$strPmaWiki = 'wiki phpMyAdmina';
$strPolish = 'Pol�tina';
$strPortrait = 'Na v��ku';
$strPos1 = 'Za��tek';
$strPrevious = 'P�edchoz�';
$strPrimaryKeyHasBeenDropped = 'Prim�rn� kl�� byl odstran�n';
$strPrimaryKeyName = 'Jm�no prim�rn�ho kl��e mus� b�t &bdquo;PRIMARY"!';
$strPrimaryKeyWarning = '(&bdquo;PRIMARY&ldquo; <b>mus�</b> b�t jm�no <b>pouze</b> prim�rn�ho kl��e!)';
$strPrimary = 'Prim�rn�';
$strPrintViewFull = 'N�hled k&nbsp;vyti�t�n� (s&nbsp;kompletn�mi texty)';
$strPrintView = 'N�hled k&nbsp;vyti�t�n�';
$strPrint = 'Vytisknout';
$strPrivDescAllPrivileges = 'V�echna opr�vn�n� krom� GRANT.';
$strPrivDescAlterRoutine = 'Umo��uje m�nit a ru�it ulo�en� procedury.';
$strPrivDescAlter = 'Umo��uje m�nit strukturu existuj�c�ch tabulek.';
$strPrivDescCreateDb = 'Umo��uje vytv��et nov� datab�ze a tabulky.';
$strPrivDescCreateRoutine = 'Umo��uje vytv��et ulo�en� procedury.';
$strPrivDescCreateTbl = 'Umo��uje vytv��et nov� tabulky.';
$strPrivDescCreateTmpTable = 'Umo��uje vytv��et do�asn� tabulky.';
$strPrivDescCreateUser = 'Umo��uje vytv��et, ru�it a p�ejmenov�vat ��ty u�ivatel�.';
$strPrivDescCreateView = 'Umo��uje vytv��et nov� pohledy.';
$strPrivDescDelete = 'Umo��uje mazat data.';
$strPrivDescDropDb = 'Umo��uje odstranit datab�ze a tabulky.';
$strPrivDescDropTbl = 'Umo��uje odstranit tabulky.';
$strPrivDescExecute5 = 'Umo��uje spou�t�t ulo�en� procedury.';
$strPrivDescExecute = 'Umo��uje spou�t�t ulo�en� procedury. V&nbsp;t�to verzi MySQL se nepou��v�.';
$strPrivDescFile = 'Umo��uje importovat a exportovat data z/do soubor� na serveru.';
$strPrivDescGrant = 'Umo��uje p�id�vat u�ivatele a opr�vn�n� bez znovuna��t�n� tabulek s&nbsp;opr�vn�n�mi.';
$strPrivDescIndex = 'Umo��uje vytv��et a ru�it indexy.';
$strPrivDescInsert = 'Umo��uje vkl�dat a p�episovat data.';
$strPrivDescLockTables = 'Umo��uje zamknout tabulku pro aktu�ln� thread.';
$strPrivDescMaxConnections = 'Omezuje po�et nov�ch p�ipojen�, kter� m��e u�ivatel vytvo�it za hodinu.';
$strPrivDescMaxQuestions = 'Omezuje, kolik dotaz� m��e u�ivatel odeslat serveru za hodinu.';
$strPrivDescMaxUpdates = 'Omezuje, kolik dotaz� m�n�c�ch n�jakou tabulku nebo datab�zi m��e u�ivatel spustit za hodinu.';
$strPrivDescMaxUserConnections = 'Omezuje po�et sou�asn�ch p�ipojen� u�ivatele.';
$strPrivDescProcess3 = 'Umo��uje ukon�it procesy jin�m u�ivatel�m.';
$strPrivDescProcess4 = 'Umo��uje vid�t cel� dotazy v&nbsp;seznamu proces�.';
$strPrivDescReferences = 'Nem� ��dn� vliv v&nbsp;t�to verzi MySQL.';
$strPrivDescReload = 'Umo��uje znovu na��st nastaven� a vypr�zdn�n� vyrovn�vac�ch pam�t� MySQL serveru.';
$strPrivDescReplClient = 'Umo�n� u�ivateli zjistit, kde je hlavn� / pomocn� server.';
$strPrivDescReplSlave = 'Pot�ebn� pro replikaci pomocn�ch server�.';
$strPrivDescSelect = 'Umo��uje vyb�rat data.';
$strPrivDescShowDb = 'Umo��uje p��stup k&nbsp;�pln�mu seznamu datab�z�.';
$strPrivDescShowView = 'Umo��uje spu�t�n� dotazu SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Umo��uje vypnout server.';
$strPrivDescSuper = 'Umo��uje p�ipojen�, i kdy� je dosa�en maxim�ln� po�et p�ipojen�. Pot�ebn� pro v�t�inu operac� pro spr�vu serveru jako nastavov�n� glob�ln�ch prom�nn�ch a zab�jen� thread� jin�ch u�ivatel�.';
$strPrivDescUpdate = 'Umo��uje m�nit data.';
$strPrivDescUsage = '��dn� opr�vn�n�.';
$strPrivileges = 'Opr�vn�n�';
$strPrivilegesReloaded = 'Opr�vn�n� byla na�tena �sp�n�.';
$strProcedures = 'Procedury';
$strProcesses = 'Procesy';
$strProcesslist = 'Seznam proces�';
$strProfiling = 'Profilov�n�';
$strProtocolVersion = 'Verze protokolu';
$strPutColNames = 'P�idat jm�na sloupc� na prvn� ��dek';

$strQBEDel = 'smazat';
$strQBE = 'Dotaz';
$strQBEIns = 'p�idat';
$strQueryCache = 'Vyrovn�vac� pam� dotaz�';
$strQueryFrame = 'SQL okno';
$strQueryOnDb = 'SQL dotaz na datab�zi <b>%s</b>:';
$strQueryResultsOperations = 'Operace s&nbsp;v�sledky dotazu';
$strQuerySQLHistory = 'SQL historie';
$strQueryStatistics = '<b>Statistika dotaz�</b>: Od spu�t�n� bylo serveru posl�no %s dotaz�.';
$strQueryTime = 'Dotaz zabral %01.4f sekund';
$strQueryType = 'Typ dotazu';
$strQueryWindowLock = 'Nep�episovat tento dotaz z&nbsp;hlavn�ho okna';

$strReadRequests = 'Po�adavk� na z�pis';
$strReceived = 'P�ijato';
$strRecommended = 'doporu�en�';
$strRecords = 'Z�znam�';
$strReferentialIntegrity = 'Zkontrolovat integritu odkaz�:';
$strRefresh = 'Obnovit';
$strRelationalSchema = 'Rela�n� sch�ma';
$strRelationDeleted = 'Relace smaz�na';
$strRelationNotWorking = 'N�kter� z&nbsp;roz���en�ch funkc� phpMyAdmina nelze pou��vat. %sZde%s zjist�te pro�.';
$strRelationsForTable = 'RELACE PRO TABULKU';
$strRelations = 'Relace';
$strRelationView = 'Zobrazit relace';
$strReloadingThePrivileges = 'Na��t�m opr�vn�n�';
$strReloadPrivileges = 'Znovu na��st opr�vn�n�';
$strReload = 'Znovu na��st';
$strRemoveSelectedUsers = 'Odstranit vybran� u�ivatele';
$strRenameDatabaseOK = 'Datab�ze %s byla p�ejmenov�na na %s';
$strRenameTableOK = 'Tabulka %s byla p�ejmenov�na na %s';
$strRenameTable = 'P�ejmenovat tabulku na';
$strRepairTable = 'Opravit tabulku';
$strReplaceNULLBy = 'Nahradit NULL hodnoty';
$strReplaceTable = 'P�epsat data tabulky souborem';
$strReplication = 'Replikace';
$strReset = 'P�vodn�';
$strResourceLimits = 'Omezen� zdroj�';
$strRestartInsertion = 'Za��t znovu vkl�d�n� s %s ��dky';
$strReType = 'Heslo znovu';
$strRevokeAndDeleteDescr = 'U�ivatel� budou m�t opr�vn�n� &bdquo;USAGE&ldquo; (pou��v�n�), dokud nebudou znovu na�tena opr�vn�n�.';
$strRevokeAndDelete = 'Odebrat u�ivatel�m ve�ker� opr�vn�n� a pot� je odstranit z&nbsp;tabulek.';
$strRevokeMessage = 'Byla zru�ena pr�va pro %s';
$strRevoke = 'Zru�it';
$strRomanian = 'Rumun�tina';
$strRoutineReturnType = 'N�vratov� typ';
$strRoutines = 'Rutiny';
$strRowLength = 'D�lka ��dku';
$strRowsFrom = '��dk� za��naj�c� od';
$strRowSize = ' Velikost ��dku ';
$strRowsModeFlippedHorizontal = 'vodorovn�m (oto�en� hlavi�ky)';
$strRowsModeHorizontal = 'vodorovn�m';
$strRowsModeOptions = 've %s re�imu a opakovat hlavi�ky po %s ��dc�ch.';
$strRowsModeVertical = 'svisl�m';
$strRows = '��dk�';
$strRowsStatistic = 'Statistika ��dk�';
$strRunning = 'na %s';
$strRunQuery = 'Prov�st dotaz';
$strRunSQLQueryOnServer = 'Spustit SQL dotaz(y) na serveru %s';
$strRunSQLQuery = 'Spustit SQL dotaz(y) na datab�zi %s';
$strRussian = 'Ru�tina';

$strSaveOnServer = 'Ulo�it na serveru v&nbsp;adres��i %s';
$strSavePosition = 'Ulo�it rozm�st�n�';
$strSave = 'Ulo�';
$strScaleFactorSmall = 'M���tko je p��li� mal�, aby se sch�ma ve�lo na jednu str�nku';
$strSearchFormTitle = 'Vyhled�v�n� v&nbsp;datab�zi';
$strSearchInTables = 'V&nbsp;tabulk�ch:';
$strSearchNeedle = 'Slova nebo hodnoty, kter� chcete vyhledat (z�stupn� znak: &bdquo;%&ldquo;):';
$strSearchOption1 = 'alespo� jedno ze slov';
$strSearchOption2 = 'v�echna slova';
$strSearchOption3 = 'p�esnou fr�zi';
$strSearchOption4 = 'jako regul�rn� v�raz';
$strSearchResultsFor = 'V�sledky vyhled�v�n� pro &bdquo;<i>%s</i>&ldquo; %s:';
$strSearchType = 'Naj�t:';
$strSearch = 'Vyhled�v�n�';
$strSecretRequired = 'Nastavte kl�� pro �ifrov�n� cookies (blowfish_secret) v&nbsp;konfigura�n�m souboru (config.inc.php).';
$strSelectADb = 'Pros�m vyberte datab�zi';
$strSelectAll = 'Vybrat v�e';
$strSelectBinaryLog = 'Zvolte bin�rn� log pro zobrazen�';
$strSelectFields = 'Zvolte sloupec (alespo� jeden):';
$strSelectForeignKey = 'Zvolte ciz� kl��';
$strSelectNumRows = 'v&nbsp;dotazu';
$strSelectReferencedKey = 'Zvolte odkazovan� kl��';
$strSelectTables = 'Vybrat tabulky';
$strSend = 'Do souboru';
$strSent = 'Odesl�no';
$strServerChoice = 'Server';
$strServerNotResponding = 'Server neodpov�d�';
$strServer = 'Server';
$strServers = 'Servery';
$strServerStatusDelayedInserts = 'Odlo�en� inserty';
$strServerStatus = 'Stav serveru';
$strServerStatusUptime = 'Tento MySQL server b�� %s. �as spu�t�n�: %s.';
$strServerTabVariables = 'Prom�nn�';
$strServerTrafficNotes = '<b>Provoz serveru</b>: Informace o&nbsp;s��ov�m provozu MySQL serveru od jeho spu�t�n�.';
$strServerVars = 'Prom�nn� a nastaven� serveru';
$strServerVersion = 'Verze MySQL';
$strSessionStartupErrorGeneral = 'Vytv��en� sezen� selhalo, pros�m zkontrolujte chyby v logu PHP a/nebo webserveru a pe�liv� nastavte podporu sezen� v PHP.';
$strSessionValue = 'Hodnota sezen�';
$strSetEnumVal = 'Pokud je sloupec typu &bdquo;enum&ldquo; nebo &bdquo;set", zad�vejte hodnoty v&nbsp;n�sleduj�c�m form�tu: \'a\',\'b\',\'c\'...<br />Pokud pot�ebujete zadat zp�tn� lom�tko (&bdquo;\&ldquo;) nebo jednoduch� uvozovky (&bdquo;\'&ldquo;) mezi t�mito hodnotami, napi�te p�ed n� zp�tn� lom�tko (p��klad: \'\\\\xyz\' nebo \'a\\\'b\').';
$strShowAll = 'Zobrazit v�e';
$strShowColor = 'Barevn� �ipky';
$strShowDatadictAs = 'Form�t datov�ho slovn�ku';
$strShowFullQueries = 'Zobrazit cel� dotazy';
$strShowGrid = 'Zobrazit m���ku';
$strShowHideLeftMenu = 'Zobrazit/Skr�t lev� menu';
$strShowingBookmark = 'Zobrazuji obl�ben� dotaz';
$strShowingPhp = 'Zobrazuji jako PHP k�d';
$strShowingRecords = 'Zobrazeny z�znamy';
$strShowingSQL = 'Zobrazuji SQL dotaz';
$strShowOpenTables = 'Zobrazit otev�en� tabulky';
$strShowPHPInfo = 'Zobrazit informace o&nbsp;PHP';
$strShowSlaveHosts = 'Zobrazit pod��zen� servery';
$strShowSlaveStatus = 'Zobrazit stav pod��zen�ch server�';
$strShowStatusBinlog_cache_disk_useDescr = 'Po�et transakc�, kter� pou�ily do�asn� bin�rn� log, ale p�ekro�ily hodnotu binlog_cache_size a musely pou��t do�asn� soubor pro ulo�en� p��kaz� transakce.';
$strShowStatusBinlog_cache_useDescr = 'Po�et transakc�, kter� vyu�ily do�asn� bin�rn� log.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Po�et do�asn�ch tabulek vytvo�en�ch serverem na disku p�i prov�d�n� dotaz�. Pokud je tato hodnota velk�, m��ete zv�t�it parametr tmp_table_size a MySQL bude pou��vat v�t�� do�asn� tabulky v&nbsp;pam�ti.';
$strShowStatusCreated_tmp_filesDescr = 'Po�et vytvo�en�ch do�asn�ch soubor�.';
$strShowStatusCreated_tmp_tablesDescr = 'Po�et do�asn�ch tabulek vytvo�en�ch serverem v&nbsp;pam�ti p�i prov�d�n� dotaz�.';
$strShowStatusDelayed_errorsDescr = 'Po�et ��dk� proveden�ch pomoc� INSERT DELAYED, u&nbsp;kter�ch se vyskytla chyba (pravd�podobn� duplicitn� kl��).';
$strShowStatusDelayed_insert_threadsDescr = 'Po�et vl�ken pou��van�ch pro INSERT DELAYED. Ka�d� tabulka na kter� je pou�it INSERT DEKAYED m� jeden thread.';
$strShowStatusDelayed_writesDescr = 'Po�et ��dk� zapsan�ch pomoc� INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Po�et proveden�ch p��kaz� FLUSH.';
$strShowStatusHandler_commitDescr = 'Po�et intern�ch p��kaz� COMMIT.';
$strShowStatusHandler_deleteDescr = 'Po�et po�adavk� na smaz�n� ��dku.';
$strShowStatusHandler_discoverDescr = 'Po�et zji��ov�n� tabulek. T�mto se naz�v� dotaz NDB clusteru, jestli v� o tabulce dan�ho jm�na.';
$strShowStatusHandler_read_firstDescr = 'Po�et p�e�ten� prvn� polo�ky indexu. P��li� vysok� hodnota znamen�, �e server prov�d� mnoho kompletn�ch proch�zen� indexu. Na p��klad SELECT col1 FROM foo, pokud je col1 indexov�na.';
$strShowStatusHandler_read_keyDescr = 'Po�et po�adavk� na p�e�ten� ��dku vych�zej�c� z&nbsp;indexu. Vysok� hodnota znamen�, �e dotazy spr�vn� vyu��vaj� indexy.';
$strShowStatusHandler_read_nextDescr = 'Po�et po�adavk� na p�e�ten� dal��ho ��dku podle indexu. Tato hodnota se zv�t�uje pokud prov�d�te dotaz na indexovan� sloupec s&nbsp;omezen�m rozsahu nebo prohled�v�te index.';
$strShowStatusHandler_read_prevDescr = 'Po�et po�adavk� na p�e�ten� p�edchoz�ho ��dku z&nbsp;indexu. Pou��van� pro optimalizaci dotaz� ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Po�et po�adavk� na p�e�ten� konkr�tn�ho ��dku tabulky. Vysok� hodnota znamen�, �e prov�d�te mnoho dotaz�, kter� vy�aduj� �azen� v�sledk�. Pravd�podobn� pou��v�te mnoho dotaz�, kter� vy�aduj� prohl��en� cel� tabulky nebo pou��v�te spojen� tabulek, kter� nevyu��vaj� index�.';
$strShowStatusHandler_read_rnd_nextDescr = 'Po�et po�adavk� na p�e�ten� dal��ho ��dku ze souboru. Tato hodnota je vysok� pokud dotazy proch�zej� cel� tabulky, pravd�podobn� tedy nemaj� vhodn� indexy.';
$strShowStatusHandler_rollbackDescr = 'Po�et intern�ch p��kaz� ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Po�et po�adavk� na aktualizaci ��dku.';
$strShowStatusHandler_writeDescr = 'Po�et po�adavk� na vlo�en� ��dku.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Po�et str�nek obsahuj�c�ch data (zm�n�n� i nezm�n�n�).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Po�et zm�n�n�ch str�nek.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Po�et str�nek, na kter� je po�adavek na vypr�zdn�n�.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Po�et voln�ch str�nek.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Po�et zam�en�ch str�nek, tzn. str�nek, kter� jsou pr�v� zapisov�ny nebo �teny nebo nemohou b�t odstran�ny z&nbsp;jak�hokoliv d�vodu.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Po�et str�nek zablokovan�ch pro administrativn� ��ely jako zamyk�n� ��dk� nebo hashe index�. Tato hodnota tak� m��e b�t vypo��t�na jako Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Celkov� velikost InnoDB buffer�, ve str�nk�ch.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Po�et proveden�ch &bdquo;n�hodn�ch&ldquo; dop�edn�ch �ten�. Tato situace nast�v� pokud dotaz proch�z� velkou ��st tabulky v&nbsp;n�hodn�m po�ad�.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Po�et proveden�ch sekven�n�ch dop�edn�ch �ten�. Toto nast�v� pokud InnoDB mus� proch�zet celou tabulku.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Po�et proveden�ch logick�ch �ten�.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Po�et logick�ch �ten�, kter� nemohly b�t uspokojeny z&nbsp;bufferu, ale bylo nutn� p�e��st str�nku ze souboru.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Po�et �ek�n� na z�pis do InnoDB buffer�. Tyto z�pisy obvykle prob�haj� na pozad�, ale pokud je nutn� p�e��st nebo vytvo�it str�nku a ��dn� voln� nen� k&nbsp;dispozici, mus� se �ekat. Pokud je velikost buffer� nastavena spr�vn�, m�la by tato hodnota b�t mal�.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Po�et z�pis� proveden�ch do InnoDB bufferu.';
$strShowStatusInnodb_data_fsyncsDescr = 'Po�et proveden�ch synchronizac�.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Po�et nevy��zen�ch synchronizac�.';
$strShowStatusInnodb_data_pending_readsDescr = 'Po�et nevy��zen�ch �ten�.';
$strShowStatusInnodb_data_pending_writesDescr = 'Po�et nevy��zen�ch z�pis�.';
$strShowStatusInnodb_data_readDescr = 'Velikost p�e�ten�ch dat, v&nbsp;bajtech.';
$strShowStatusInnodb_data_readsDescr = 'Po�et proveden�ch �ten� dat.';
$strShowStatusInnodb_data_writesDescr = 'Po�et proveden�ch z�pis� dat.';
$strShowStatusInnodb_data_writtenDescr = 'Velikost zapsan�ch dat, v&nbsp;bajtech.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Po�et proveden�ch dvojit�ch zaps�n� a po�et str�nek, kter� byly takto zaps�ny.';
$strShowStatusInnodb_dblwr_writesDescr = 'Po�et proveden�ch dvojit�ch zaps�n� a po�et str�nek, kter� byly takto zaps�ny.';
$strShowStatusInnodb_log_waitsDescr = 'Po�et �ek�n� kv�li pln�mu bufferu logu, kter� musel b�t vypr�zdn�n p�ed pokra�ov�n�m.';
$strShowStatusInnodb_log_write_requestsDescr = 'Po�et po�adavk� na z�pis do logovac�ho souboru.';
$strShowStatusInnodb_log_writesDescr = 'Po�et skute�n�ch z�pis� do logovac�ho souboru.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Po�et synchronizac� proveden�ch na logovac�ch souborech.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Po�et nevy��zen�ch synchronizac� logovac�ch soubor�.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Po�et nevy��zen�ch z�pis� do logovac�ch soubor�.';
$strShowStatusInnodb_os_log_writtenDescr = 'Po�et bajt� zapsan�ch do logovac�ho souboru.';
$strShowStatusInnodb_pages_createdDescr = 'Po�et vytvo�en�ch str�nek.';
$strShowStatusInnodb_page_sizeDescr = 'Zakompilovan� velikost str�nky InnoDB (v�choz� je 16 kB). Mnoho hodnot je uv�d�no ve str�nk�ch, pomoc� t�to hodnoty je m��ete p�epo��tat na velikost.';
$strShowStatusInnodb_pages_readDescr = 'Po�et p�e�ten�ch str�nek.';
$strShowStatusInnodb_pages_writtenDescr = 'Po�et zapsan�ch str�nek.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Po�et z�mk� ��dku, na kter� se v&nbsp;sou�asn� dob� �ek�.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Pr�m�rn� �as pot�ebn� pro z�sk�n� z�mku ��dku, v&nbsp;milisekund�ch.';
$strShowStatusInnodb_row_lock_timeDescr = 'Celkov� �as str�ven� �ek�n�m na z�mek ��dku, v&nbsp;milisekund�ch.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maxim�ln� �as pot�ebn� pro z�sk�n� z�mku ��dku, v&nbsp;milisekund�ch.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Kolikr�t se muselo �ekat na z�mek ��dku.';
$strShowStatusInnodb_rows_deletedDescr = 'Po�et ��dk� odstran�n�ch z&nbsp;InnoDB tabulek.';
$strShowStatusInnodb_rows_insertedDescr = 'Po�et ��dk� vlo�en�ch do InnoDB tabulek.';
$strShowStatusInnodb_rows_readDescr = 'Po�et ��dk� p�e�ten�ch z&nbsp;InnoDB tabulek.';
$strShowStatusInnodb_rows_updatedDescr = 'Po�et ��dk� aktualizovan�ch v&nbsp;InnoDB tabulk�ch.';
$strShowStatusKey_blocks_not_flushedDescr = 'Po�et blok� ve vyrovn�vac� pam�ti kl���, kter� byly zm�n�ny, ale nebyly zaps�ny na disk. D��ve se tato hodnota jmenovala Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Po�et nepou�it�ch blok� ve vyrovn�vac� pam�ti kl���. Pomoc� t�to hodnoty pozn�te jak moc je vyrovn�vac� pam� vyu�it�.';
$strShowStatusKey_blocks_usedDescr = 'Po�et pou�it�ch blok� ve vyrovn�vac� pam�ti kl���. Tato hodnota ur�uje maximum blok�, kter� kdy byly obsazeny najednou.';
$strShowStatusKey_read_requestsDescr = 'Po�et po�adavk� na p�e�ten� kl��e z&nbsp;vyrovn�vac� pam�ti.';
$strShowStatusKey_readsDescr = 'Po�et skute�n�ch �ten� bloku zkl��e z&nbsp;disku. Pokud je hodnota p��li� velk�, pravd�podobn� m�te malou vyrovn�vac� pam� (key_buffer_size). �sp�nost vyrovn�vac� pam�ti m��ete spo��tat jako Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Po�et po�adavk� na z�pis bloku kl��e na disk.';
$strShowStatusKey_writesDescr = 'Po�et skute�n�ch z�pis� bloku kl��e na disk.';
$strShowStatusLast_query_costDescr = 'Celkov� cena posledn�ho kompilovan�ho dotazu spo��tan� optimaliz�torem dotaz�. U�ite�n� pro porovn�n� r�zn�ch dotaz�. V�choz� hodnota 0 znamen�, �e ��dn� dotaz je�t� nebyl kompilov�n.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Po�et ��dk� �ekaj�c�ch na zaps�n� ve front� INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Celkem otev�en�ch tabulek. Pokud je tato hodnota p��li� vysok�, pravd�podobn� m�te malou vyrovn�vac� pam� pro tabulky.';
$strShowStatusOpen_filesDescr = 'Po�et otev�en�ch soubor�.';
$strShowStatusOpen_streamsDescr = 'Po�et otev�en�ch stream� (pou��van� p�ev�n� pro logov�n�).';
$strShowStatusOpen_tablesDescr = 'Po�et aktu�ln� otev�en�ch tabulek.';
$strShowStatusQcache_free_blocksDescr = 'Po�et voln�ch blok� pam�ti ve vyrovn�vac� pam�ti dotaz�.';
$strShowStatusQcache_free_memoryDescr = 'Velikost voln� pam�ti ve vyrovn�vac� pam�ti dotaz�.';
$strShowStatusQcache_hitsDescr = 'Po�et z�sah� vyrovn�vac� pam�ti dotaz�.';
$strShowStatusQcache_insertsDescr = 'Po�et dotaz� p�idan�ch do vyrovn�vac� pam�ti dotaz�.';
$strShowStatusQcache_lowmem_prunesDescr = 'Po�et dotaz� odstran�n�ch z&nbsp;vyrovn�vac� pam�ti dotaz� aby uvolnily m�sto pro nov�. Tato hodnota m��e pomoci v&nbsp;nastaven� velikosti vyrovn�vac� pam�ti. Vyrovn�vac� pam� pou��v� strategii LRU (nejd�le nepou�it�) pro vy�azov�n� dotaz� z&nbsp;vyrovn�vac� pam�ti.';
$strShowStatusQcache_not_cachedDescr = 'Po�et necachovan�ch dotaz� (necachovateln�ch nebo necachovan�ch kv�li nastaven� query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Po�et dotaz� ve vyrovn�vac� pam�ti dotaz�.';
$strShowStatusQcache_total_blocksDescr = 'Celkov� po�et blok� ve vyrovn�vac� pam�ti dotaz�.';
$strShowStatusReset = 'Vynulovat statistiky';
$strShowStatusRpl_statusDescr = 'Stav failsafe replikace.';
$strShowStatusSelect_full_joinDescr = 'Po�et spojen�, kter� nevyu��valy indexy. Pokud tato hodnota nen� 0, m�li byste zkontrolovat indexy tabulek.';
$strShowStatusSelect_full_range_joinDescr = 'Po�et spojen�, kter� pou��valy intervalov� vyhled�v�n� na referen�n� tabulce.';
$strShowStatusSelect_range_checkDescr = 'Po�et spojen� bez kl���, kter� kontrolovaly pou�it� kl��� po ka�d�m ��dku. Pokud tato hodnota nen� 0, m�li byste zkontrolovat indexy tabulek.';
$strShowStatusSelect_rangeDescr = 'Po�et spojen�, kter� pou��valy intervalov� vyhled�v�n� na prvn� tabulce. Tato hodnota obvykle nen� kritick� i kdy� je vysok�.';
$strShowStatusSelect_scanDescr = 'Po�et spojen�, kter� prov�d�ly kompletn� proch�zen� prvn� tabulky.';
$strShowStatusSlave_open_temp_tablesDescr = 'Po�et do�asn�ch tabulek v&nbsp;sou�asn� dob� otev�en�ch pod��zen�m serverem.';
$strShowStatusSlave_retried_transactionsDescr = 'Celkov� po�et, kolikr�t musel pod��zen� server opakovat transakce.';
$strShowStatusSlave_runningDescr = 'Tato polo�ka je zapnut�, pokud server pracuje jako pod��zen�.';
$strShowStatusSlow_launch_threadsDescr = 'Po�et vl�ken jejich� vytvo�en� trvalo d�le ne� slow_launch_time sekund.';
$strShowStatusSlow_queriesDescr = 'Po�et dotaz�, kter� trvaly d�le ne� long_query_time sekund.';
$strShowStatusSort_merge_passesDescr = 'Po�et pr�chod� slu�ov�n�, kter� musel prov�st �adic� algoritmus. P�i p��li� vysok� hodnot� zva�te zv��en� sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Po�et �azen�, kter� byly omezeny rozsahem.';
$strShowStatusSort_rowsDescr = 'Po�et �azen�ch ��dek.';
$strShowStatusSort_scanDescr = 'Po�et �azen� proveden�ch proch�zen�m tabulky.';
$strShowStatusTable_locks_immediateDescr = 'Po�et okam�it�ch z�sk�n� z�mku tabulky.';
$strShowStatusTable_locks_waitedDescr = 'Po�et �ek�n� na z�sk�n� z�mku tabulky. Pokud je tato hodnota vysok� a m�te probl�my s&nbsp;v�konem, m�li byste optimalizovat dotazy a p��padn� rozd�lit tabulky nebo pou��t replikaci.';
$strShowStatusThreads_cachedDescr = 'Po�et vl�ken ve vyrovn�vac� pam�ti. �sp�nost vyrovn�vac� pam�ti m��e b�t spo��t�na jako Threads_created/Connections. Pokud je tato hodnota �erven�, m�li byste zv��it thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Po�et aktu�ln� otev�en�ch p�ipojen�.';
$strShowStatusThreads_createdDescr = 'Po�et vl�ken vytvo�en�ch pro obsluhu p�ipojen�. Pokud je hodnota p��li� velk�, m��ete zv�t�it parametr thread_cache_size. Na platform�ch, kter� maj� dobrou implementaci vl�ken v�ak toto nem� p��li� velk� vliv.';
$strShowStatusThreads_runningDescr = 'Po�et vl�ken, kter� nesp�.';
$strShowTableDimension = 'Rozm�ry tabulek';
$strShowTables = 'Zobrazit tabulky';
$strShowThisQuery = 'Zobrazit zde tento dotaz znovu';
$strShow = 'Zobrazit';
$strSimplifiedChinese = 'Zjednodu�en� ��n�tina';
$strSingly = '(po jednom)';
$strSize = 'Velikost';
$strSkipQueries = 'Po�et z�znam� (dotaz�) od za��tku, kter� se maj� p�esko�it';
$strSlovak = 'Sloven�tina';
$strSlovenian = 'Slovin�tina';
$strSmallBigAll = 'V�e mal�/velk�';
$strSnapToGrid = 'Zachyt�vat na m���ku';
$strSocketProblem = '(nebo nen� spr�vn� nastaven lok�ln� socket MySQL serveru)';
$strSortByKey = 'Set��dit podle kl��e';
$strSorting = '�azen�';
$strSort = '�adit';
$strSpaceUsage = 'Vyu�it� m�sta';
$strSpanish = '�pan�l�tina';
$strSplitWordsWithSpace = 'Slova jsou odd�lena mezerou (&bdquo; &ldquo;).';
$strSQLCompatibility = 'Re�im kompatibility SQL';
$strSQLExportType = 'Typ vytvo�en�ch dotaz�';
$strSQLParserBugMessage = 'Je mo�n�, �e jste na�li chybu v&nbsp;SQL parseru. Pros�m prozkoumejte podrobn� SQL dotaz, p�edev��m jestli jsou spr�vn� uvozovky a jestli nejsou proh�zen�. Dal�� mo�nost selh�n� je pokud nahr�v�te soubor s&nbsp;bin�rn�mi daty nezapsan�mi v&nbsp;uvozovk�ch. M��ete tak� vyzkou�et p��kazovou ��dku MySQL. N��e uveden� v�stup z&nbsp;MySQL serveru (pokud je n�jak�) v�m tak� m��e pomoci p�i zkoum�n� probl�mu. Pokud st�le m�te probl�my nebo pokud SQL parser ohl�s� chybu u&nbsp;dotazu, kter� na p��kazov� ��dce funguje, pros�m pokuste se zredukovat dotaz na co nejmen��, ve kter�m se probl�m je�t� vyskytne, a ohlaste chybu na str�nk�ch phpMyAdmina spolu se sekc� V�PIS uvedenou n��e:';
$strSQLParserUserError = 'Pravd�podobn� m�te v&nbsp;SQL dotazu chybu. N��e uveden� v�stup MySQL serveru (pokud je n�jak�) v�m tak� m��e pomoci p�i zkoum�n� probl�mu';
$strSQLQuery = 'SQL-dotaz';
$strSQLResult = 'V�sledek SQL dotazu';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Chybn� identifik�tor';
$strSQPBugUnclosedQuote = 'Neuzav�en� uvozovky';
$strSQPBugUnknownPunctuation = 'Nezn�m� interpunk�n� znam�nko';
$strStandInStructureForView = 'Z�stupn� struktura pro pohled';
$strStatCheckTime = 'Posledn� kontrola';
$strStatCreateTime = 'Vytvo�en�';
$strStatement = '�daj';
$strStatisticsOverrun = 'Na hodn� zat��en�m serveru mohou ��ta�e p�et�ct, tak�e statistiky MySQL serveru mohou b�t nep�esn�.';
$strStatUpdateTime = 'Posledn� zm�na';
$strStatus = 'Stav';
$strStorageEngines = '�lo�i�t�';
$strStorageEngine = '�lo�i�t�';
$strStrucCSV = 'CSV';
$strStrucData = 'Strukturu a data';
$strStrucExcelCSV = 'CSV pro MS Excel';
$strStrucNativeExcel = 'Nativn� form�t MS Excelu';
$strStrucOnly = 'Pouze strukturu';
$strStructPropose = 'Navrhnout strukturu tabulky';
$strStructureForView = 'Struktura pro pohled';
$strStructure = 'Struktura';
$strSubmit = 'Prov�st';
$strSuccess = 'V� SQL-dotaz byl �sp�n� vykon�n';
$strSuhosin = 'Server pou��v� Suhosin. Pros�m pod�vejte se do %sdokumentace%s pro popis probl�m�, kter� t�m mohou b�t zp�sobeny.';
$strSum = 'Celkem';
$strSwedish = '�v�d�tina';
$strSwitchToDatabase = 'P�epnout na zkop�rovanou datab�zi';
$strSwitchToTable = 'P�epnout na zkop�rovanou tabulku';

$strTableAlreadyExists = 'Tabulka %s ji� existuje!';
$strTableComments = 'Koment�� k&nbsp;tabulce';
$strTableEmpty = 'Jm�no tabulky je pr�zdn�!';
$strTableHasBeenDropped = 'Tabulka %s byla odstran�na';
$strTableHasBeenEmptied = 'Tabulka %s byla vypr�zdn�na';
$strTableHasBeenFlushed = 'Vyrovn�vac� pam� pro tabulku %s byla vypr�zdn�na';
$strTableIsEmpty = 'Tabulka se zd� b�t pr�zdn�!';
$strTableMaintenance = ' �dr�ba tabulky ';
$strTableName = 'Jm�no tabulky';
$strTableOfContents = 'Obsah';
$strTableOptions = 'Parametry tabulky';
$strTables = '%s tabulek';
$strTableStructure = 'Struktura tabulky';
$strTable = 'Tabulka';
$strTakeIt = 'zvolit';
$strTblPrivileges = 'Opr�vn�n� pro jednotliv� tabulky';
$strTempData = 'Do�asn� data';
$strTextAreaLength = 'Tento sloupec mo�n� nep�jde <br />(kv�li d�lce) upravit ';
$strThai = 'Thaj�tina';
$strThemeDefaultNotFound = 'V�choz� vzhled %s nebyl nalezen!';
$strThemeNoPreviewAvailable = 'N�hled nen� k&nbsp;dispozici.';
$strThemeNotFound = 'Vzhled %s nebyl nalezen!';
$strThemeNoValidImgPath = 'Nebyla nalezena platn� cesta k obr�zk�m pro vzhled %s!';
$strThemePathNotFound = 'Nebyla nalezena platn� cesta k vzhledu %s!';
$strTheme = 'Vzhled';
$strThisHost = 'Tento po��ta�';
$strThreads = 'Po�et vl�ken';
$strThreadSuccessfullyKilled = 'Vl�kno %s bylo �sp�n� zabito.';
$strTime = '�as';
$strTimeoutInfo = 'P�edchoz� �mport vy�erpal ve�ker� �as, po dal��m odesl�n� bude import pokra�ovat od pozice %d.';
$strTimeoutNothingParsed = 'Bohu�el b�hem posledn�ho pokusu nebyla ��dn� data na�tena. Toto obvykle znamen�, �e phpMyAdmin nebude schopen na��st tento soubor, pokud nezv���te �asov� limity v&nbsp;PHP.';
$strTimeoutPassed = 'Limit pro b�h importu vypr�el, pros�m ode�lete formul�� znovu se stejn�m souborem a import bude pokra�ovat.';
$strToFromPage = 'do/ze str�nky';
$strToggleScratchboard = 'Zobrazit grafick� n�vrh';
$strToggleSmallBig = 'P�epnout mal�/velk�';
$strToSelectRelation = 'Pro v�b�r relace klikn�te :';
$strTotal = 'celkem';
$strTotalUC = 'Celkem';
$strTraditionalChinese = 'Tradi�n� ��n�tina';
$strTraditionalSpanish = 'Tradi�n� �pan�l�tina';
$strTraffic = 'Provoz';
$strTransactionCoordinator = 'Koordin�tor transakc�';
$strTransformation_application_octetstream__download = 'Zobraz� odkaz na st�hnut� dat. Prvn� parametr je jm�no souboru, druh� jm�no sloupce v&nbsp;tabulce obsahuj�c� jm�no souboru. Pokud zad�te druh� parametr, prvn� mus� b�t pr�zdn�.';
$strTransformation_application_octetstream__hex = 'Zobraz� data �estn�ctkov�. Nepovinn� parametr ur�uje po kolika znac�ch m� b�t p�id�na mezera (v�choz� hodnota je 2).';
$strTransformation_image_jpeg__inline = 'Zobraz� n�hled obr�zku s&nbsp;odkazem na obr�zek; parametry ���ka a v��ka v&nbsp;bodech (pom�r stran obr�zku z�stane zachov�n)';
$strTransformation_image_jpeg__link = 'Zobraz� odkaz na obr�zek (nap��klad st�hnut� pole blob).';
$strTransformation_image_png__inline = 'Viz image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Zobraz� datum nebo �as (TIME, TIMESTAMP, DATETIME nebo unixov� timestamp v numerick�m sloupci). Prvn� parametr je posun (v&nbsp;hodin�ch), kter� bude p�id�n k&nbsp;�asu (v�choz� je 0). Druh� parametr je form�tovac� �et�zec. T�et� ur�uje jestli chcete zobrazit datum podle m�stn�ho nastaven� nebo UTC �as (pou�ijte text "local" nebo "utc"). Podle tohoto nastaven�, form�t m� bu�to syntaxi funkce strftime() pokud pou�ijete "local" nebo pro gmtime() pokud pou�ijete "utc".';
$strTransformation_text_plain__external = 'JEN PRO LINUX: Spust� extern� program, na jeho standardn� vstup po�le obsah pole a zobraz� v�stup programu. V�choz� je program Tidy, kter� p�kn� zform�tuje HTML. Z&nbsp;bezpe�nostn�ch d�vod� mus�te jm�na povolen�ch program� zapsat do souboru libraries/transformations/text_plain__external.inc.php. Prvn� parametr je ��slo programu, kter� m� b�t spu�t�n a druh� parametr ud�v� parametry tohoto programu. T�et� parametr ur�uje, zda maj� b�t ve v�stupu nahrazeny HTML entity (nap�. pro zobrazen� zdrojov�ho k�du HTML) (v�choz� je 1, tedy p�ev�d�t na entity), �tvrt� (p�i nastaven� na 1) zajist� p�id�n� parametru NOWRAP k&nbsp;vypisovan�mu textu, ��m� se zachov� form�tov�n� (v�choz� je 1).';
$strTransformation_text_plain__formatted = 'Zachov� p�vodn� form�tov�n� sloupce, tak jak je ulo�en v&nbsp;datab�zi.';
$strTransformation_text_plain__imagelink = 'Zobraz� obr�zek a odkaz z&nbsp;pole obsahuj�c�ho odkaz na obr�zek. Prvn� parametr je prefix URL (nap��klad &bdquo;http://mojedomena.cz/&ldquo;), druh� a t�et� ur�uje ���ku a v��ku obr�zku.';
$strTransformation_text_plain__link = 'Zobraz� odkaz z&nbsp;pole obsahuj�c�ho odkaz. Prvn� parametr je prefix URL (nap��klad &bdquo;http://mojedomena.cz/&ldquo;), druh� text odkazu.';
$strTransformation_text_plain__sql = 'Zobraz� text jako SQL dotaz se zv�raz�ov�n�m syntaxe.';
$strTransformation_text_plain__substr = 'Zobraz� jen ��st textu. Prvn� parametr je posun od za��tku (v�choz� je 0) a druh� ur�uje d�lku textu, kter� se m� zobrazit, pokud nen� uveden, bude zobrazen zbytek textu. T�et� parametr ur�uje, jak� text m� b�t p�id�n za zkr�cen� text (v�choz� je ...).';
$strTriggers = 'Spou�t�';
$strTruncateQueries = 'Zobrazit zkr�cen� dotazy';
$strTurkish = 'Turecky';
$strType = 'Typ';

$strUkrainian = 'Ukrajin�tina';
$strUncheckAll = 'Od�krtnout v�e';
$strUnicode = 'Unicode';
$strUnique = 'Unik�tn�';
$strUnknown = 'nezn�m�';
$strUnselectAll = 'Odzna�it v�e';
$strUnsupportedCompressionDetected = 'Pokusili jste se importovat soubor s&nbsp;nepodporovanou kompres� (%s). Bu�to podpora nen� implementov�na nebo je vypnuta ve va�� konfiguraci.';
$strUpdatePrivMessage = 'Byla aktualizov�na opr�vn�n� pro %s.';
$strUpdateProfileMessage = 'P��stup byl zm�n�n.';
$strUpdateQuery = 'Aktualizovat dotaz';
$strUpdComTab = 'Pod�vejte se pros�m do dokumentace, jak aktualizovat tabulku s&nbsp;informacemi o&nbsp;sloupc�ch (tabulka column_comments)';
$strUpgrade = 'M�li byste aktualizovat %s na verzi %s nebo vy���.';
$strUploadErrorCantWrite = 'Chyba p�i zapisov�n� souboru na disk.';
$strUploadErrorExtension = 'Nahr�v�n� souboru zastaveno roz���en�m.';
$strUploadErrorFormSize = 'Velikost nahran�ho souboru p�esahuje hodnotu MAX_FILE_SIZE, kter� byla zad�na v HTML formul��i.';
$strUploadErrorIniSize = 'Velikost nahran�ho souboru p�esahuje nastaven� upload_max_filesize v php.ini.';
$strUploadErrorNoTempDir = 'Chyb�j�c� adres�� pro do�asn� soubory.';
$strUploadErrorPartial = 'Soubor byl nahr�n jen ��ste�n�.';
$strUploadErrorUnknown = 'Nezn�m� chyba p�i nahr�v�n� souboru.';
$strUploadLimit = 'Pravd�podobn� jste se pokusili nahr�t p��li� velk� soubor. P�e�t�te si pros�m %sdokumentaci%s, jak toto omezen� obej�t.';
$strUploadsNotAllowed = 'Upload soubor� nen� na tomto serveru povolen.';
$strUsage = 'Pou��v�';
$strUseBackquotes = 'Pou��t zp�tn� uvozovky u&nbsp;jmen tabulek a sloupc�';
$strUsedPhpExtensions = 'Pou�it� roz���en� PHP';
$strUseHostTable = 'Pou��t tabulku s&nbsp;po��ta�i';
$strUserAlreadyExists = 'U�ivatel %s ji� existuje!';
$strUserEmpty = 'Jm�no u�ivatele je pr�zdn�!';
$strUserName = 'Jm�no u�ivatele';
$strUserNotFound = 'Zvolen� u�ivatel nebyl nalezen v&nbsp;tabulce opr�vn�n�.';
$strUserOverview = 'P�ehled u�ivatel�';
$strUsersDeleted = 'Vybran� u�ivatel� byli �sp�n� odstran�ni.';
$strUsersHavingAccessToDb = 'U�ivatel� maj�c� p��stup k&nbsp;&bdquo;%s&ldquo;';
$strUser = 'U�ivatel';
$strUseTabKey = 'Pou�ijte kl�vesu TAB pro pohyb mezi hodnotami nebo CTRL+�ipky po pohyb v�emi sm�ry.';
$strUseTables = 'Pou��t tabulky';
$strUseTextField = 'Pou��t textov� pole';
$strUseThisValue = 'Pou��t tuto hodnotu';

$strValidateSQL = 'Zkontrolovat SQL';
$strValidatorError = 'SQL valid�tor nemohl b�t inicializov�n. Pros�m zkontrolujte, jestli m�te po�adovan� roz���en� PHP, kter� jsou uvedena v&nbsp;%sdokumentaci%s.';
$strValue = 'Hodnota';
$strVar = 'Prom�nn�';
$strVersionInformation = 'Informace o&nbsp;verzi';
$strViewDumpDatabases = 'Export datab�z�';
$strViewDumpDB = 'Export datab�ze';
$strViewDump = 'Export tabulky';
$strViewHasBeenDropped = 'Pohled %s byl odstran�n';
$strViewMaxExactCount = 'Tento pohled m� v�ce ne� %d z�znam�. Viz %sdokumentace%s.';
$strViewName = 'Jm�no pohledu';
$strView = 'Pohled';

$strWebServerUploadDirectoryError = 'Adres�� ur�en� pro upload soubor� nemohl b�t otev�en';
$strWebServerUploadDirectory = 'soubor z&nbsp;adres��e pro upload';
$strWelcome = 'V�tejte v&nbsp;%s';
$strWestEuropean = 'Z�padn� Evropa';
$strWildcard = 'maska';
$strWindowNotFound = 'C�lov� okno prohl��e�e nemohlo b�t aktualizov�no. Mo�n� jste zav�el rodi�ovsk� okno, nebo prohl��e� blokuje operace mezi okny z&nbsp;d�vodu bezpe�nostn�ch nastaven�.';
$strWithChecked = 'Za�krtnut�:';
$strWriteRequests = 'Po�adavk� na �ten�';
$strWrongUser = '�patn� u�ivatelsk� jm�no nebo heslo. P��stup odep�en.';

$strXML = 'XML';

$strYes = 'Ano';

$strZeroRemovesTheLimit = 'Pozn�mka: Nastaven� t�chto parametr� na 0 (nulu) odstran� omezen�.';
$strZip = '&bdquo;zazipov�no&ldquo;';

?>

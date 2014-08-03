<?php
/* $Id: slovak-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/* By: lubos klokner <erkac@vault-tec.sk> */
/* and Ivan Kuriscak <shylauda69@yahoo.com>
   and Tomas Tatransky <tomas.tatransky@centrum.sk> */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ne', 'Po', 'Út', 'St', 'Št', 'Pi', 'So');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Máj', 'Jún', 'Júl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%B, %Y - %H:%M';
$timespanfmt = '%s dní, %s hodín, %s minút a %s sekúnd';

$strAbortedClients = 'Prerušené';
$strAccessDeniedCreateConfig = 'Pravdepodobná príčina je, že neexistuje konfiguračný súbor. Na jeho vytvorenie môžete použiť %1$skonfiguračný skript%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin sa pokúsil pripojiť k MySQL serveru ale ten spojenie odmietol. Skontrolujte prosím meno serveru, používateľské meno a heslo v súbore config.inc.php a s tým, ktoré ste dostali o administrátora MySQL servera.';
$strAccessDenied = 'Prístup zamietnutý';
$strAction = 'Akcia';
$strAddAutoIncrement = 'Pridať hodnotu AUTO_INCREMENT';
$strAddClause = 'Pridať %s';
$strAddConstraints = 'Pridať obmedzenia';
$strAddDeleteColumn = 'Pridať/Odobrať polia stĺpcov';
$strAddDeleteRow = 'Pridať/Odobrať kritéria riadku';
$strAddFields = 'Pridať %s položiek';
$strAddHeaderComment = 'Pridať vlastný komentár do hlavičky (\\n oddeľuje riadky)';
$strAddIntoComments = 'Pridať do komentárov';
$strAddNewField = 'Pridať nové pole';
$strAddPrivilegesOnDb = 'Pridať oprávnenia pre nasledujúcu databázu';
$strAddPrivilegesOnTbl = 'Pridať oprávnenia pre nasledujúcu tabuľku';
$strAddSearchConditions = 'Pridať vyhľadávacie parametre (obsah dopytu po "where" príkaze):';
$strAddToIndex = 'Pridať do indexu &nbsp;%s&nbsp;stĺpec';
$strAddUserMessage = 'Používateľ bol pridaný.';
$strAddUser = 'Pridať nového používateľa';
$strAdministration = 'Administrácia';
$strAffectedRows = ' Ovplyvnené riadky: ';
$strAfterInsertBack = 'Späť';
$strAfterInsertNewInsert = 'Vložiť nový záznam';
$strAfterInsertNext = 'Upraviť nasledujúci riadok';
$strAfterInsertSame = 'Späť na túto stránku';
$strAfter = 'Po %s';
$strAllowInterrupt = 'Povoliť prerušenie importu v prípade, že sa blíži časový limit behu skriptu. Týmto spôsobom sa môžu importovať aj veľké súbory, ale môže to zároveň spôsobiť problémy s transakciami.';
$strAllTableSameWidth = 'zobraziť všetky tabuľky s rovnakou šírkou?';
$strAll = 'Všetko';
$strAlterOrderBy = 'Zmeniť poradie tabuľky podľa';
$strAnalyzeTable = 'Analyzovať tabuľku';
$strAnd = 'a';
$strAndThen = 'a potom';
$strAnIndex = 'Bol pridaný index pre %s';
$strAny = 'Akýkoľvek';
$strAnyHost = 'Akýkoľvek hostiteľ';
$strAnyUser = 'Akýkoľvek používateľ';
$strApproximateCount = 'Môže byť nepresné. Pozri FAQ 3.11';
$strAPrimaryKey = 'Bol pridaný primárny kľúč pre %s';
$strArabic = 'Arabština';
$strArmenian = 'Arménština';
$strAscending = 'Vzostupne';
$strAtBeginningOfTable = 'Na začiatku tabuľky';
$strAtEndOfTable = 'Na konci tabuľky';
$strAttr = 'Atribúty';
$strAutomaticLayout = 'Automatické rozvrhnutie';

$strBack = 'Späť';
$strBaltic = 'Baltické';
$strBeginCut = 'ZAČIATOK VÝSEKU';
$strBeginRaw = 'ZAČIATOK TOKU';
$strBinary = 'Binárny';
$strBinaryDoNotEdit = 'Binárny - neupravujte ';
$strBinaryLog = 'Binárny log';
$strBinLogEventType = 'Typ udalosti';
$strBinLogInfo = 'Informácia';
$strBinLogName = 'Názov logu';
$strBinLogOriginalPosition = 'Pôvodná pozícia';
$strBinLogPosition = 'Pozícia';
$strBinLogServerId = 'ID servra';
$strBookmarkAllUsers = 'Dovoliť používať túto položku všetkým používateľom';
$strBookmarkCreated = 'Príkaz %s bol zaradený medzi obľúbené';
$strBookmarkDeleted = 'Záznam z obľúbených bol zmazaný.';
$strBookmarkLabel = 'Názov';
$strBookmarkQuery = 'Obľúbený SQL dopyt';
$strBookmarkReplace = 'Prepísať existujúci príkaz s rovnakým menom';
$strBookmarkThis = 'Pridať tento SQL dopyt do obľúbených';
$strBookmarkView = 'Iba prezrieť';
$strBrowseDistinctValues = 'Prechádzať iné hodnoty';
$strBrowseForeignValues = 'Prejsť hodnoty cudzích kľúčov';
$strBrowse = 'Prechádzať';
$strBufferPoolActivity = 'Aktivita Vyrovnávacej Pamäte';
$strBufferPoolUsage = 'Využitie Vyrovnávacej Pamäte';
$strBufferPool = 'Vyrovnávacia Pamäť';
$strBufferReadMissesInPercent = 'Výpadkov pri čítaní v %';
$strBufferReadMisses = 'Výpadkov pri čítaní';
$strBufferWriteWaits = 'Čakaní na zápis';
$strBufferWriteWaitsInPercent = 'Čakaní na zápis v %';
$strBulgarian = 'Bulharsky';
$strBusyPages = 'Spracovávaných stránok';
$strBzError = 'nepodarilo sa skomprimovať výstup z dôvodu chybného rozšírenia pre kompresiu Bz2 v tejto verzii php. Doporučuje sa nastaviť <code>$cfg[\'BZipDump\']</code> v konfigurácii phpMyAdmin na <code>FALSE</code>. Ak si želáte používať kompresiu Bz2 mali by ste nainštalovať novšiu verziu php. Viac informácií získate z popisu chyby: %s.';
$strBzip = '"bzipped"';

$strCalendar = 'Kalendár';
$strCanNotLoadExportPlugins = 'Nepodarilo sa načítať exportné pluginy, skontrolujte prosím vašu inštaláciu!';
$strCanNotLoadImportPlugins = 'Nebolo možné načítať importovacie pluginy, skontrolujte prosím vašu inštaláciu!';
$strCannotLogin = 'Nedá sa prihlásiť k MySQL serveru';
$strCantLoad = 'nedá sa nahrať rozšírenie %s,<br />prosím skontrolujte konfiguráciu PHP';
$strCantLoadRecodeIconv = 'Nie je možné nahrať rozšírenie iconv alebo recode potrebné pre prevod znakových sad. Upravte nastavenie php tak aby umožňovalo použiť tieto rozšírenia alebo vypnite túto vlastnosť v konfigurácii phpMyAdmina.';
$strCantRenameIdxToPrimary = 'Nie je možné premenovať index na PRIMARY!';
$strCantUseRecodeIconv = 'Nie je možné použiť funkcie iconv, libiconv a recode_string aj napriek tomu, že rozšírenia sú nahrané. Skontrolujte prosím nastavenie PHP.';
$strCardinality = 'Mohutnosť';
$strCaseInsensitive = 'nerozlišovať veľké a malé písmená';
$strCaseSensitive = 'rozlišovať veľké a malé písmená';
$strCentralEuropean = 'Stredná Európa';
$strChangeCopyModeCopy = '... zachovať pôvodného používateľa.';
$strChangeCopyModeDeleteAndReload = ' ... zmazať pôvodného používateľa z tabuliek používateľov a potom znovunačítať oprávnenia.';
$strChangeCopyModeJustDelete = ' ... zmazať pôvodného používateľa z tabuliek používateľov.';
$strChangeCopyModeRevoke = ' ... odobrať všetky oprávnenia pôvodnému používateľovi a následne ho zmazať.';
$strChangeCopyMode = 'Vytvoriť používateľa s rovnakými právami a...';
$strChangeCopyUser = 'Zmeniť informácie o používateľovi / Kopírovať používateľa';
$strChangeDisplay = 'Zvolte, ktoré pole zobraziť';
$strChangePassword = 'Zmeniť heslo';
$strChange = 'Zmeniť';
$strCharsetOfFile = 'Znaková sada súboru:';
$strCharsetsAndCollations = 'Znakové sady a Zotriedenia';
$strCharsets = 'Znakové sady';
$strCharset = 'Znaková sada';
$strCheckAll = 'Označiť všetko';
$strCheckOverhead = 'Zvoliť neoptimálne';
$strCheckPrivsLong = 'Skontrolovať oprávnenia pre databázu &quot;%s&quot;.';
$strCheckPrivs = 'Skontrolovať oprávnenia';
$strCheckTable = 'Skontrolovať tabuľku';
$strChoosePage = 'Prosím zvolte si Stránku, ktorú chcete upraviť';
$strColComFeat = 'Zobrazovať komentáre stĺpcov';
$strCollation = 'Zotriedenie';
$strColumnNames = 'Názvy stĺpcov';
$strColumnPrivileges = 'Oprávnenia pre jednotlivé stĺpce';
$strCommand = 'Príkaz';
$strCommentsForTable = 'KOMENTÁRE PRE TABUĽKU';
$strComments = 'Komentáre';
$strCompatibleHashing = 'Kompatibilné s&nbsp;MySQL&nbsp;4.0';
$strCompleteInserts = 'Úplné vloženie';
$strCompression = 'Kompresia';
$strCompressionWillBeDetected = 'Kompresia importovaného súboru bude rozpoznaná automaticky. Podporované: %s';
$strConfigDefaultFileError = 'Nepodarilo sa načítať prednastavenú konfiguráciu zo súboru: "%1$s"';
$strConfigFileError = 'phpMyAdmin nebol schopný načítať konfiguračný súbor!<br />Tento problém sa zvyčajne vyskytne ak súbor obsahuje chybu alebo ho php nemohlo nájsť.<br />Zavolajte browserom tento súbor priamo použitím nasledujúceho odkazu na získanie chybových hlášok, ktoré sú ním spôsobené. Väčšinou sa jedná o chýbajúcu úvodzovku alebo bodkočiarku.<br />Ak dostanete iba prázdnu stránku, všetko je v poriadku.';
$strConfigureTableCoord = 'Prosím skonfigurujte koordináty pre tabuľku %s';
$strConnectionError = 'Nepodarilo sa pripojiť: chybné nastavenia.';
$strConnections = 'Spojenia';
$strConstraintsForDumped = 'Obmedzenie pre exportované tabuľky';
$strConstraintsForTable = 'Obmedzenie pre tabuľku';
$strCookiesRequired = 'Cookies musia byť povolené, pokiaľ chcete pokračovať.';
$strCopyDatabaseOK = 'Databáza %s bola skopírovaná na %s';
$strCopy = 'Kopírovať';
$strCopyTableOK = 'Tabuľka %s bola skorírovaná do %s.';
$strCopyTableSameNames = 'Nedá sa skopírovať tabuľka sama do seba!';
$strCopyTable = 'Skopírovať tabuľku do (databáza<b>.</b>tabuľka):';
$strCouldNotKill = 'Neporadilo za zabiť vlákno %s. Jeho beh bol pravdepodobne už ukončený.';
$strCreateDatabaseBeforeCopying = 'Vytvoriť databázu (CREATE DATABASE) pred kopírovaním';
$strCreateIndexTopic = 'Vytvoriť nový index';
$strCreateIndex = 'Vytvoriť index na&nbsp;%s&nbsp;stĺpcoch';
$strCreateNewDatabase = 'Vytvoriť novú databázu';
$strCreateNewTable = 'Vytvoriť novú tabuľku v databáze %s';
$strCreatePage = 'Vytvoriť novú Stránku';
$strCreatePdfFeat = 'Vytváranie PDF';
$strCreateUserDatabase = 'Databáza pre používateľa';
$strCreateUserDatabaseName = 'Vytvoriť databázu s rovnakým menom a prideliť všetky oprávnenia';
$strCreateUserDatabaseNone = 'Žiadna';
$strCreateUserDatabaseWildcard = 'Prideliť všetky oprávnenia pomocou masky (používateľ_%)';
$strCreate = 'Vytvoriť';
$strCreationDates = 'Dátum vytvorenia, poslednej zmeny a kontroly';
$strCriteria = 'Kritéria';
$strCroatian = 'Chorvátsky';
$strCSV = 'CSV';
$strCyrillic = 'Cyrilika';
$strCzech = 'Česky';
$strCzechSlovak = 'Čeština/Slovenčina';

$strDanish = 'Dánsky';
$strDatabase = 'Databáza';
$strDatabaseEmpty = 'Meno databázy je prázdne!';
$strDatabaseExportOptions = 'Nastavenia exportu databáz';
$strDatabaseHasBeenDropped = 'Databáza %s bola zmazaná.';
$strDatabases = 'Databázy';
$strDatabasesDropped = 'Úspešne zrušených databáz: %s.';
$strDatabasesStatsDisable = 'Skryť štatistiky';
$strDatabasesStatsEnable = 'Zobraziť štatistiky';
$strDatabasesStatsHeavyTraffic = 'Poznámka: Aktivovanie štatistík databázy môže spôsobiť značné zvýšenie sieťovej prevádzky medzi databázou a web serverom.';
$strDatabasesStats = 'Štatistiky databázy';
$strData = 'Dáta';
$strDataDict = 'Dátový slovník';
$strDataOnly = 'Iba dáta';
$strDataPages = 'Stránky obsahujúce dáta';
$strDBComment = 'Komentár k databáze: ';
$strDBCopy = 'Skopírovať databázu na';
$strDbPrivileges = 'Oprávnenia pre jednotlivé databázy';
$strDBRename = 'Premenovať databázu na';
$strDbSpecific = 'závislé na databáze';
$strDefaultEngine = 'Na tomto MySQL servri je prednastaveným úložným systémom %s.';
$strDefault = 'Predvolené';
$strDefaultValueHelp = 'Pre predvolené hodnoty, prosím zadajte iba jednu hodnotu bez úvodzoviek alebo uvádzacích znakov, napr.: a';
$strDefragment = 'Defragmentovať tabuľku';
$strDelayedInserts = 'Použiť oneskorené vloženia';
$strDeleteAndFlushDescr = 'Toto je najčistejšie riešenie, ale znovunačítanie práv môže chvíľu trvať.';
$strDeleteAndFlush = 'Odstrániť používateľov a znovunačítať práva.';
$strDeleted = 'Riadok bol zmazaný';
$strDeletedRows = 'Zmazané riadky:';
$strDeleteNoUsersSelected = 'Na odstránenie neboli vybraní žiadni používatelia!';
$strDelete = 'Zmazať';
$strDeleting = 'Odstraňuje sa %s';
$strDelimiter = 'Oddeľovač';
$strDelOld = 'Aktuálna stránka sa odkazuje na tabuľky, ktoré už neexistujú, želáte si odstrániť tieto odkazy?';
$strDescending = 'Zostupne';
$strDescription = 'Popis';
$strDictionary = 'slovník';
$strDirtyPages = 'Zmenených stránok';
$strDisabled = 'Vypnuté';
$strDisableForeignChecks = 'Vypnúť kontrolu cudzích kľúčov';
$strDisplayFeat = 'Zobraziť vlastnosti';
$strDisplayOrder = 'Zobraziť zoradené:';
$strDisplayPDF = 'Zobraziť schému PDF';
$strDoAQuery = 'Vykonať "dopyt podľa príkladu" (nahradzujúci znak: "%")';
$strDocu = 'Dokumentácia';
$strDoYouReally = 'Skutočne chcete vykonať príkaz ';
$strDropDatabaseStrongWarning = 'Chystáte sa ZRUŠIŤ celú databázu!';
$strDrop = 'Odstrániť';
$strDropUsersDb = 'Odstrániť databázy s rovnakým menom ako majú používatelia.';
$strDumpingData = 'Sťahujem dáta pre tabuľku';
$strDumpSaved = 'Dump (schéma) bol uložený do súboru %s.';
$strDumpXRows = 'Zobraziť %s riadkov od riadku %s.';
$strDynamic = 'dynamický';

$strEditPDFPages = 'Upraviť PDF Stránky';
$strEditPrivileges = 'Upraviť oprávnenia';
$strEdit = 'Upraviť';
$strEffective = 'Efektívny';
$strEmptyResultSet = 'MySQL vrátil prázdny výsledok (tj. nulový počet riadkov).';
$strEmpty = 'Vyprázdniť';
$strEnabled = 'Zapnuté';
$strEncloseInTransaction = 'Uzatvoriť príkazy v transakcii';
$strEndCut = 'KONIEC VÝSEKU';
$strEnd = 'Koniec';
$strEndRaw = 'KONIEC TOKU';
$strEngineAvailable = 'Úložný systém %s je na tomto MySQL servri dostupný.';
$strEngineDisabled = 'Úložný systém %s bol na tomto MySQL servri deaktivovaný.';
$strEngines = 'Systémy';
$strEngineUnsupported = 'Tento MySQL server nepodporuje úložný systém %s.';
$strEnglish = 'Anglicky';
$strEnglishPrivileges = ' Poznámka: názvy MySQL oprávnení sú uvádzané v angličtine. ';
$strError = 'Chyba';
$strErrorInZipFile = 'Chyba v ZIP archíve:';
$strErrorRenamingTable = 'Chyba pri premenovaní tabuľky %1$s na %2$s';
$strEscapeWildcards = 'Náhradzujúcim znakom _ a % by mal predchádzať znak \, pokiaľ ich nechcete použiť doslovne';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estónsky';
$strExcelEdition = 'Verzia Excelu';
$strExecuteBookmarked = 'Spustiť obľúbený dopyt';
$strExplain = 'Vysvetliť SQL';
$strExport = 'Exportovať';
$strExportMustBeFile = 'Vybraný typ exportu musí byť uložený do súboru!';
$strExtendedInserts = 'Rozšírené vkladanie';
$strExtra = 'Extra';

$strFailedAttempts = 'Nepodarených pokusov';
$strFieldHasBeenDropped = 'Pole %s bolo odstránené';
$strField = 'Pole';
$strFieldsEnclosedBy = 'Polia uzatvorené';
$strFieldsEscapedBy = 'Polia uvedené pomocou';
$strFields = 'Polia';
$strFieldsTerminatedBy = 'Polia ukončené';
$strFileAlreadyExists = 'Súbor %s už existuje na servery, zmente názov súboru alebo zvolte prepísanie súboru.';
$strFileCouldNotBeRead = 'Súbor sa nedá prečítať';
$strFileNameTemplateDescriptionDatabase = 'meno databázy';
$strFileNameTemplateDescriptionServer = 'meno servera';
$strFileNameTemplateDescriptionTable = 'meno tabuľky';
$strFileNameTemplateDescription = 'Táto hodnota je interpretovaná pomocou %1$sstrftime%2$s, takže môžete použiť reťazec pre formátovanie dátumu a času. Naviac budú vykonané tieto nahradenia: %3$s. Ostatný text bude zachovaný.';
$strFileNameTemplateRemember = 'zapamätať si vzor';
$strFileNameTemplate = 'Vzor pre názov súboru';
$strFileToImport = 'Súbor na importovanie';
$strFixed = 'pevný';
$strFlushPrivilegesNote = 'Poznámka: phpMyAdmin získava práva používateľov priamo z tabuliek MySQL. Obsah týchto tabuliek sa môže líšiť od práv, ktoré používa server, ak boli tieto tabuľky ručne upravené. V tomto prípade sa odporúča vykonať %sznovunačítanie práv%s predtým ako budete pokračovať.';
$strFlushQueryCache = 'Vyprázdniť vyrovnávaciu pamäť príkazov';
$strFlushTables = 'Vyprázdniť (uzavrieť) všetky tabuľky';
$strFlushTable = 'Vyprázdniť tabuľku ("FLUSH")';
$strFormat = 'Formát';
$strFormEmpty = 'Chýbajúca položka vo formulári !';
$strFreePages = 'Prázdnych stránok';
$strFullText = 'Plné texty';
$strFunction = 'Funkcia';
$strFunctions = 'Funkcie';

$strGenBy = 'Vygenerované';
$strGeneralRelationFeat = 'Možnosti všeobecných vzťahov';
$strGeneratePassword = 'Vytvoriť Heslo';
$strGenerate = 'Vytvoriť';
$strGenTime = 'Vygenerované:';
$strGeorgian = 'Gruzínčina';
$strGerman = 'Nemecky';
$strGlobal = 'globálny';
$strGlobalPrivileges = 'Globálne práva';
$strGlobalValue = 'Globálna hodnota';
$strGo = 'Vykonaj';
$strGrantOption = 'Prideliť';
$strGreek = 'Gréčtina';
$strGzip = '"gzip-ované"';

$strHandler = 'Manipulačná Rutina';
$strHasBeenAltered = 'bola zmenená.';
$strHasBeenCreated = 'bola vytvorená.';
$strHaveToShow = 'Zvolte prosím aspoň jeden stĺpec, ktorý chcete zobraziť';
$strHebrew = 'Hebrejsky';
$strHome = 'Domov';
$strHomepageOfficial = 'Oficiálne stránky phpMyAdmin';
$strHostEmpty = 'Názov hostiteľa je prázdny!';
$strHost = 'Hostiteľ';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Maďarsky';

$strIcelandic = 'Islandčina';
$strId = 'ID';
$strIdxFulltext = 'Celý text';
$strIgnoreDuplicates = 'Ignorovať opakujúce sa riadky';
$strIgnore = 'Ignorovať';
$strIgnoreInserts = 'Použiť IGNORE';
$strImportFiles = 'Importovať súbory';
$strImportFormat = 'Formát importovaného súboru';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Import bol úspešne ukončený, bolo vykonaných %d dopytov.';
$strIndexes = 'Indexy';
$strIndexHasBeenDropped = 'Index pre %s bol odstránený';
$strIndex = 'Index';
$strIndexName = 'Meno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexWarningTable = 'Problémy s indexami v tabuľke `%s`';
$strInnoDBAutoextendIncrementDesc = ' Veľkosť, o ktorú je zväčšený automaticky sa zväčšujúci priestor tabuľky pri zaplnení.';
$strInnoDBAutoextendIncrement = 'Navýšenie pri automatickom zväčšovaní';
$strInnoDBBufferPoolSizeDesc = 'Veľkosť pamäte, ktorú InnoDB používa pre cachovanie dát a indexov tabuliek.';
$strInnoDBBufferPoolSize = 'Veľkosť vyrovnávacej pamäte';
$strInnoDBDataFilePath = 'Súbory s dátami';
$strInnoDBDataHomeDirDesc = 'Spoločná časť cesty k adresáru s InnoDB súbormi s dátami.';
$strInnoDBDataHomeDir = 'Domovský adresár pre dáta';
$strInnoDBPages = 'stránok';
$strInnodbStat = 'Stav InnoDB';
$strInsecureMySQL = 'Konfiguračný súbor obsahuje nastavenia (root bez hesla), ktoré zodpovedajú predvolenému privilegovanému MySQL účtu. Ak MySQL server beží s týmto nastavením, nie je zabezpečený proti napadnutiu, táto bezpečnostná chyba by mala byť urýchlene odstránená.';
$strInsertAsNewRow = 'Vložiť ako nový riadok';
$strInsertedRowId = 'Id vloženého riadku:';
$strInsertedRows = 'Vložené riadky:';
$strInsert = 'Vložiť';
$strInternalNotNecessary = '* Vnútorný vzťah nie je nutný ak už vzťah existuje v InnoDB.';
$strInternalRelations = 'Interné vzťahy';
$strInUse = 'práve sa používa';
$strInvalidAuthMethod = 'V konfigurácii je nastavená nesprávna autentifikačná metóda:';
$strInvalidColumn = 'Bol zadaný chybný stĺpec (%s)!';
$strInvalidColumnCount = 'Počet stĺpcov musí byť väčší ako nula.';
$strInvalidCSVFieldCount = 'Chybný počet položiek v CSV vstupe na riadku %d.';
$strInvalidCSVFormat = 'Chybný formát v CSV vstupe na riadku %d.';
$strInvalidCSVParameter = 'Chybný parameter pre CSV import: %s';
$strInvalidDatabase = 'Chybná databáza';
$strInvalidFieldAddCount = 'Musíte pridať aspoň jeden stĺpec.';
$strInvalidFieldCount = 'Tabuľka musí obsahovať aspoň jeden stĺpec.';
$strInvalidLDIImport = 'Tento plug-in nepodporuje import komprimovaných súborov!';
$strInvalidRowNumber = '%d nie je platné číslo riadku.';
$strInvalidServerHostname = 'Chybný názov hostu pre server %1$s. Prosím, skontrolujte konfiguráciu.';
$strInvalidServerIndex = 'Chybný index serveru: "%s"';
$strInvalidTableName = 'Chybné meno tabuľky';

$strJapanese = 'Japončina';
$strJoins = 'Zjednotenia';
$strJumpToDB = 'Na databázu &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Odstránení&quot; používatelia budú mať k serveru ako predtým až do znovunačítania práv.';
$strJustDelete = 'Iba odstrániť používateľlov z tabuliek práv.';

$strKeepPass = 'Nezmeniť heslo';
$strKeyCache = 'Vyrovnávacia pamäť kľúčov';
$strKeyname = 'Kľúčový názov';
$strKill = 'Zabiť';
$strKorean = 'Kórejčina';

$strLandscape = 'Na šírku';
$strLanguageUnknown = 'Neznámy jazyk: %1$s.';
$strLatchedPages = 'Uzavretých stránok';
$strLatexCaption = 'Nadpis tabuľky';
$strLatexContent = 'Obsah tabuľky __TABLE__';
$strLatexContinuedCaption = 'Nadpis pokračovania tabuľky';
$strLatexContinued = '(pokračovanie)';
$strLatexIncludeCaption = 'Zahrnúť nadpis tabuľky';
$strLatexLabel = 'Návestie';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Štruktúra tabuľky __TABLE__';
$strLatvian = 'Lotyšstina';
$strLDI = 'CSV pomocou LOAD DATA';
$strLDILocal = 'Použiť kľúčové slovo LOCAL';
$strLengthSet = 'Dĺžka/Nastaviť*';
$strLimitNumRows = 'záznamov na stránku';
$strLinesTerminatedBy = 'Riadky ukončené';
$strLinkNotFound = 'Linka nebola nájdená';
$strLinksTo = 'Linkovať na';
$strLithuanian = 'Litovsky';
$strLocalhost = 'Lokálny';
$strLocationTextfile = 'Lokácia textového súboru';
$strLoginInformation = 'Prihlásenie';
$strLogin = 'Login';
$strLogout = 'Odhlásiť sa';
$strLogPassword = 'Heslo:';
$strLogServer = 'Server';
$strLogUsername = 'Používateľ:';
$strLongOperation = 'Táto operácia môže trvať veľmi dlho. Chcete ju aj napriek tomu vykonať?';

$strMaxConnects = 'max. súčasných pripojení';
$strMaximalQueryLength = 'Maximálna veľkosť vytvoreného príkazu';
$strMaximumSize = 'Maximálna veľkosť: %s%s';
$strMbExtensionMissing = 'Mbstring rozšírenie pre PHP nebolo nájdené a zjavne používate viacbajtovú znakovú sadu. Bez tohto rozšírenia nie je phpMyAdmin schopný korektne rozdeľovať reťazce kódované v týchto znakových sadách a môže to viesť k nečakaným výsledkom.';
$strMbOverloadWarning = 'V nastavení PHP je aktívna funkcia mbstring.func_overload, ktorá nie je kompatibilná s phpMyAdmin-om a môže spôsobiť stratu dát!';
$strMIME_available_mime = 'Dostupné MIME typy';
$strMIME_available_transform = 'Dostupné transformácie';
$strMIME_description = 'Popis';
$strMIME_MIMEtype = 'MIME typ';
$strMIME_nodescription = 'Nie je dostupný žiadny popis pre túto transformáciu.<br />Kontaktujte autora, ktorý %s vytára.';
$strMIME_transformation_note = 'Pre zoznam dostupných parametrov a ich MIME typov kliknite na %spopisy transformácií';
$strMIME_transformation_options_note = 'Prosím zadajte hodnoty pre parametre transformácie v nasledujúcom tvare: \'a\', 100, b,\'c\'...<br />Ak potrebujete použiť spätné lomítko ("\") alebo jednoduché úvodzovky ("\'") medzi týmito hodnotami, vložte pred nich spätné lomítko (napr. \'\\\\xyz\' alebo \'a\\\'b\').';
$strMIME_transformation_options = 'Parametre transformácie';
$strMIME_transformation = 'Transformácia pri prehliadaní';
$strMIMETypesForTable = 'MIME TYPY PRE TABUĽKU';
$strMIME_without = 'MIME typy zobrazené kurzívou nemajú vlastnú transformačnú funkciu';
$strModifications = 'Zmeny boli uložené';
$strModifyIndexTopic = 'Modifikovať index';
$strModify = 'Zmeniť';
$strMoveTableOK = 'Tabuľka %s bola presunutá do %s.';
$strMoveTable = 'Presunúť tabuľku do (databáza<b>.</b>tabuľka):';
$strMoveTableSameNames = 'Nedá sa presunúť tabuľka sama do seba!';
$strMultilingual = 'mnohojazyčný';
$strMyISAMDataPointerSizeDesc = 'Prednastavená veľkosť smerníka na dáta v bajtoch, používaná pri vytváraní MyISAM tabuliek príkazom CREATE TABLE, v prípade keď nie je zadaná hodnota MAX_ROWS.';
$strMyISAMDataPointerSize = 'Veľkosť smerníka na dáta';
$strMyISAMMaxExtraSortFileSizeDesc = 'Ak je veľkosť dočasného súboru, použitého pre rýchlejšie vytváranie MyISAM indexov, väčšia ako pri použití cache, použije sa metóda cachovania indexu.';
$strMyISAMMaxExtraSortFileSize = 'Maximálna veľkosť dočasných súborov pre vytvorenie indexu';
$strMyISAMMaxSortFileSizeDesc = 'Maximálna veľkosť dočasného súboru, ktorý môže MySQL použiť pri obnove MyISAM indexu (počas vykonávania príkazov REPAIR TABLE, ALTER TABLE alebo LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maximálna veľkosť dočasných zoraďovacích súborov';
$strMyISAMRecoverOptionsDesc = 'Režim automatickej obnovy poškodených MyISAM tabuliek, ktorý sa dá nastaviť parametrom --myisam-recover pri spúšťaní servra.';
$strMyISAMRecoverOptions = 'Režim automatickej obnovy';
$strMyISAMRepairThreadsDesc = 'Ak je táto hodnota vyššia ako 1, počas procesu Opravy Zoradením sú indexy MyISAM tabuľky vytvárané paralelne (každý index vo svojom vlákne).';
$strMyISAMRepairThreads = 'Opravné vlákna';
$strMyISAMSortBufferSizeDesc = 'Pamäť, ktorá je alokovaná pri zoraďovaní MyISAM indexov počas vykonávania príkazu REPAIR TABLE, alebo pri vytváraní indexov príkazmi CREATE INDEX alebo ALTER TABLE.';
$strMyISAMSortBufferSize = 'Veľkosť zoraďovacej pamäte';
$strMySQLCharset = 'Znaková sada v MySQL';
$strMysqlClientVersion = 'Verzia MySQL klienta';
$strMySQLConnectionCollation = 'Overenie MySQL spojenia';
$strMySQLSaid = 'MySQL hlási: ';
$strMySQLShowProcess = 'Zobraziť procesy';
$strMySQLShowStatus = 'Zobraziť MySQL informácie o behu';
$strMySQLShowVars = 'Zobraziť MySQL systémové premenné';

$strName = 'Názov';
$strNext = 'Ďalší';
$strNoActivity = 'Boli ste neaktívni viac ako %s sekúnd, prihláste sa prosím znovu';
$strNoDatabasesSelected = 'Neboli vybrané žiadne databázy.';
$strNoDatabases = 'Žiadne databázy';
$strNoDataReceived = 'Neboli prijaté žiadne dáta na import. Buď nebol načítaný žiadny súbor alebo jeho veľkosť prekročila maximálnu veľkosť povolenú v PHP. Pozri FAQ 1.16.';
$strNoDescription = 'bez Popisu';
$strNoDetailsForEngine = 'Pre tento úložný systém nie sú dostupné žiadne podrobnejšie informácie.';
$strNoDropDatabases = 'Možnosť "DROP DATABASE" vypnutá.';
$strNoExplain = 'Preskočiť vysvetlenie SQL';
$strNoFilesFoundInZip = 'V ZIP archíve neboli nájdené žiadne súbory!';
$strNoFrames = 'phpMyAdmin funguje lepšie s prehliadačmi podporujúcimi <b>rámy</b>.';
$strNoIndex = 'Nebol definovaný žiadny index!';
$strNoIndexPartsDefined = 'Časti indexu neboli definované!';
$strNoModification = 'Žiadna zmena';
$strNone = 'Žiadny';
$strNo = 'Nie';
$strNoOptions = 'Tento formát nemá žiadne nastavenia';
$strNoPassword = 'Žiadne heslo';
$strNoPermission = 'Web server nemá oprávenia na uloženie do súboru %s.';
$strNoPhp = 'bez PHP kódu';
$strNoPrivileges = 'Žiadne oprávnenia';
$strNoRights = 'Nemáte dostatočné práva na vykonanie tejto akcie!';
$strNoRowsSelected = 'Nebol vybraný žiadny riadok';
$strNoSpace = 'Nedostatok miesta pre uloženie súboru %s.';
$strNoTablesFound = 'Neboli nájdené žiadne tabuľky v tejto datábaze.';
$strNoThemeSupport = 'Zmena vzhľadu nie je podporovaná, skontrolujte si nastavenia a vzhľady v adresári %s.';
$strNotNumber = 'Toto nie je číslo!';
$strNotOK = 'chyba';
$strNotSet = 'Tabuľka <b>%s</b> nebola nájdená alebo nie je nastavená v %s';
$strNoUsersFound = 'Nebol nájdený žiadny používateľ.';
$strNoValidateSQL = 'Preskočiť potvrdenie platnosti SQL';
$strNull = 'Nulový';
$strNumberOfFields = 'Počet polí';
$strNumSearchResultsInTable = '%s výskyt(ov)v tabuľke <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkovo:</b> <i>%s</i> výskyt(ov)';
$strNumTables = 'Tabuľky';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Tabuľkový procesor Open Document';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Otvoriť nové okno phpMyAdmina';
$strOperations = 'Operácie';
$strOperator = 'Operátor';
$strOptimizeTable = 'Optimalizovať tabuľku';
$strOr = 'alebo';
$strOverhead = 'Naviac';
$strOverwriteExisting = 'Prepísať existujúci súbor(y)';

$strPageNumber = 'Číslo stránky:';
$strPagesToBeFlushed = 'Stránok určených k uvoľneniu';
$strPaperSize = 'Veľkosť stránky';
$strPartialImport = 'Čiastočný import';
$strPartialText = 'Čiastočné texty';
$strPasswordChanged = 'Heslo pre %s bolo úspešne zmenené.';
$strPasswordEmpty = 'Heslo je prázdne!';
$strPasswordHashing = 'Hashovanie hesla';
$strPassword = 'Heslo';
$strPasswordNotSame = 'Heslá sa nezhodujú!';
$strPdfDbSchema = 'Schéma databázy "%s"  - Strana %s';
$strPdfInvalidTblName = 'Tabuľka "%s" neexistuje!';
$strPdfNoTables = 'Žiadne tabuľky';
$strPDF = 'PDF';
$strPDFReportTitle = 'Titulok výpisu';
$strPerHour = 'za hodinu';
$strPerMinute = 'za minútu';
$strPerSecond = 'za sekundu';
$strPersian = 'Perština';
$strPhoneBook = 'adresár';
$strPHP40203 = 'Používate PHP 4.2.3, ktoré ma vážnu chybu pri práci s viac bajtovými znakmi (mbstring). V PHP je táto chyba zdokumentovaná pod číslom 19404. Nedoporučuje sa používať túto verziu PHP s phpMyAdminom.';
$strPHPVersion = 'Verzia PHP';
$strPhp = 'Vytvoriť PHP kód';
$strPmaDocumentation = 'phpMyAdmin Dokumentácia';
$strPmaUriError = 'Direktíva <tt>$cfg[\'PmaAbsoluteUri\']</tt> v konfiguračnom súbore MUSÍ byť nastavená!';
$strPolish = 'Poľština';
$strPortrait = 'Na výšku';
$strPos1 = 'Začiatok';
$strPrevious = 'Predchádzajúci';
$strPrimaryKeyHasBeenDropped = 'Primárny kľúč bol zrušený';
$strPrimaryKeyName = 'Názov primárneho kľúča musí byť... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musí</b> byť <b>iba</b> meno primárneho kľúča!)';
$strPrimary = 'Primárny';
$strPrintViewFull = 'Náhľad tlače (s kompletnými textami)';
$strPrintView = 'Náhľad k tlači';
$strPrint = 'Vytlačiť';
$strPrivDescAllPrivileges = 'Všetky oprávnenia okrem GRANT.';
$strPrivDescAlter = 'Povolí meniť štruktúru existujúcich tabuliek.';
$strPrivDescAlterRoutine = 'Umožňuje upravovať a odstraňovať uložené procedúry.';
$strPrivDescCreateDb = 'Povolí vytváranie nových databáz a tabuliek.';
$strPrivDescCreateRoutine = 'Umožňuje vytvárať uložené procedúry.';
$strPrivDescCreateTbl = 'Povolí vytváranie nových tabuliek.';
$strPrivDescCreateTmpTable = 'Povolí vytváranie dočasných tabuliek.';
$strPrivDescCreateUser = 'Umožňuje vytvárať, odstraňovať a premenovávať používateľské kontá.';
$strPrivDescCreateView = 'Umožňuje vytvárať nové pohľady.';
$strPrivDescDelete = 'Povolí mazanie dát.';
$strPrivDescDropDb = 'Povolí odstraňovanie databáz a tabuliek.';
$strPrivDescDropTbl = 'Povolí odstraňovanie tabuliek.';
$strPrivDescExecute5 = 'Umožňuje spúšťať uložené procedúry.';
$strPrivDescExecute = 'Povolí spúšťanie uložených procedúr. Nefunguje v tejto verzii MySQL.';
$strPrivDescFile = 'Povolí importovanie a exportovanie dát zo/do súborov na serveri.';
$strPrivDescGrant = 'Povolí pridávanie uživatelov a práv bez znovunačítania tabuliek práv.';
$strPrivDescIndex = 'Povolí vytváranie a mazanie indexov.';
$strPrivDescInsert = 'Povolí vkladanie a nahradzovanie dát.';
$strPrivDescLockTables = 'Povolí zmaknutie tabuliek pre aktuálne vlákno.';
$strPrivDescMaxConnections = 'Obmedzí počet nových spojení, ktoré môže používateľ vytvoriť za hodinu.';
$strPrivDescMaxQuestions = 'Obmedzí počet dopytov, ktoré môže používateľ odoslať za hodinu.';
$strPrivDescMaxUpdates = 'Obmedzí počet príkazov meniacich tabuľku alebo databázu, ktorá môže používateľ odoslať za hodinu.';
$strPrivDescMaxUserConnections = 'Obmedzuje počet simultánnych pripojení používateľa.';
$strPrivDescProcess3 = 'Povolí zabíjanie procesov iným používateľlom.';
$strPrivDescProcess4 = 'Povolí prezeranie kompletných dopytov v zozname procesov.';
$strPrivDescReferences = 'Nefunguje v tejto verzii MySQL.';
$strPrivDescReload = 'Povolí znovunačítanie nastavení a vyprázdňovanie vyrovnávacích pamätí serveru.';
$strPrivDescReplClient = 'Povolí používateľovi zistiť kde je hlavný / pomocný server.';
$strPrivDescReplSlave = 'Potrebné pre replikáciu pomocných serverov.';
$strPrivDescSelect = 'Povolí čítanie dát.';
$strPrivDescShowDb = 'Povolí prístup ku kompletnému zoznamu databáz.';
$strPrivDescShowView = 'Umožňuje spúšťať príkazy so SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Povolí vypnutie serveru.';
$strPrivDescSuper = 'Povolí spojenie aj v prípade, že bol dosiahnutý maximálny počet spojení. Potrebné pre väčšinu operácií pri správe serveru ako nastavovanie globálny premenných alebo zabíjanie procesov iných používateľov.';
$strPrivDescUpdate = 'Povolí menenie dát.';
$strPrivDescUsage = 'Žiadne práva.';
$strPrivileges = 'Oprávnenia';
$strPrivilegesReloaded = 'Práva boli úspešne znovunačítané.';
$strProcedures = 'Procedúry';
$strProcesses = 'Procesy';
$strProcesslist = 'Zoznam procesov';
$strProtocolVersion = 'Verzia protokolu';
$strPutColNames = 'Pridať názvy polí na prvý riadok';

$strQBEDel = 'Zmazať';
$strQBE = 'Dopyt podľa príkladu';
$strQBEIns = 'Vložiť';
$strQueryCache = 'Vyrovnávacia pamäť príkazov';
$strQueryFrame = 'SQL okno';
$strQueryOnDb = ' SQL dopyt v databáze <b>%s</b>:';
$strQueryResultsOperations = 'Operácie s výsledkami dopytu';
$strQuerySQLHistory = 'SQL história';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryTime = 'Dopyt zabral %01.4f sek.';
$strQueryType = 'Typ dopytu';
$strQueryWindowLock = 'Neprepisovať tento dopyt z hlavného okna';

$strReadRequests = 'Požiadavkov na čítanie';
$strReceived = 'Prijaté';
$strRecords = 'Záznamov';
$strReferentialIntegrity = 'Skontrolovať referenčnú integritu:';
$strRefresh = 'Obnoviť';
$strRelationalSchema = 'Relačná schéma';
$strRelationNotWorking = 'Prídavné vlastnosti pre prácu s prepojenými tabuľkami boli deaktivované. Ak chcete zistiť prečo, kliknite %ssem%s.';
$strRelationsForTable = 'PREPOJENIA PRE TABUĽKU';
$strRelations = 'Prepojenia';
$strRelationView = 'Zobraziť prepojenia';
$strReloadingThePrivileges = 'Znovunačítanie práv';
$strReloadPrivileges = 'Znovunačítať prístupové práva';
$strRemoveSelectedUsers = 'Odstrániť vybraných používateľov';
$strRenameDatabaseOK = 'Databáza %s bola premenovaná na %s';
$strRenameTableOK = 'Tabuľka %s bola premenovaná na %s';
$strRenameTable = 'Premenovať tabuľku na';
$strRepairTable = 'Opraviť tabuľku';
$strReplaceNULLBy = 'Nahradiť NULL hodnoty';
$strReplaceTable = 'Nahradiť dáta v tabuľke súborom';
$strReplication = 'Replikácia';
$strReset = 'Pôvodné (Reset)';
$strResourceLimits = 'Obmedzenie zdrojov';
$strReType = 'Potvrdiť';
$strRevokeAndDeleteDescr = 'Užívatelia budú mať stále právo USAGE (používanie) až do znovunačítania práv.';
$strRevokeAndDelete = 'Odobranie všetkých aktívnych práv používateľom a ich následné odstránenie.';
$strRevokeMessage = 'Boli zrušené oprávnenia pre %s';
$strRevoke = 'Zrušiť';
$strRomanian = 'Rumunština';
$strRowLength = 'Dĺžka riadku';
$strRowsFrom = 'riadky začínajú od';
$strRowSize = ' Veľkosť riadku ';
$strRowsModeFlippedHorizontal = 'vodorovnom (otočené hlavičky)';
$strRowsModeHorizontal = 'horizontálnom';
$strRowsModeOptions = 'v(o) %s móde a opakovať hlavičky po každých %s bunkách';
$strRowsModeVertical = 'vertikálnom';
$strRows = 'Riadkov';
$strRowsStatistic = 'Štatistika riadku';
$strRunning = 'beží na %s';
$strRunQuery = 'Odošli dopyt';
$strRunSQLQueryOnServer = 'Spustiť SQL príkaz(y) na servri %s';
$strRunSQLQuery = 'Spustiť SQL dopyt/dopyty na databázu %s';
$strRussian = 'Ruština';

$strSaveOnServer = 'Uložiť na server do adresára %s';
$strSave = 'Uložiť';
$strScaleFactorSmall = 'Mierka je príliš mala na roztiahnutie schémy na stránku';
$strSearchFormTitle = 'Hľadať v databáze';
$strSearch = 'Hľadať';
$strSearchInTables = 'V tabuľke(ách):';
$strSearchNeedle = 'Slovo(á) alebo hodnotu(y), ktoré chcete vyhľadať (nahradzujúci znak: "%"):';
$strSearchOption1 = 'najmenej jedno zo slov';
$strSearchOption2 = 'všetky slová';
$strSearchOption3 = 'presný výraz';
$strSearchOption4 = 'ako regulárny výraz';
$strSearchResultsFor = 'Prehľadať výsledky na "<i>%s</i>" %s:';
$strSearchType = 'Nájdi:';
$strSecretRequired = 'Nastavte prosím kľúč pre šifrovanie cookies v konfiguračnom súbore (blowfish_secret).';
$strSelectADb = 'Prosím vyberte si databázu';
$strSelectAll = 'Označiť všetko';
$strSelectBinaryLog = 'Vyberte binárny log na zobrazenie';
$strSelectFields = 'Zvoliť pole (najmenej jedno):';
$strSelectNumRows = 'v dopyte';
$strSelectTables = 'Vybrať Tabuľky';
$strSend = 'Pošli';
$strSent = 'Odoslané';
$strServerChoice = 'Voľba serveru';
$strServerNotResponding = 'Server neodpovedá';
$strServer = 'Server';
$strServers = 'Servery';
$strServerStatusDelayedInserts = 'Odložené vloženia';
$strServerStatus = 'Stav serveru';
$strServerStatusUptime = 'Tento server beží %s. Bol spustený %s.';
$strServerTabVariables = 'Premenné';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Premenné a nastavenia serveru';
$strServerVersion = 'Verzia serveru';
$strSessionValue = 'Hodnota sedenia';
$strSetEnumVal = 'Ak je pole typu "enum" alebo "set", prosím zadávajte hodnoty v tvare: \'a\',\'b\',\'c\'...<br />Ak dokonca potrebujete zadať spätné lomítko ("\") alebo apostrof ("\'") pri týchto hodnotách, zadajte ich napríklad takto \'\\\\xyz\' alebo \'a\\\'b\'.';
$strShowAll = 'Zobraziť všetko';
$strShowColor = 'Zobraziť farbu';
$strShowDatadictAs = 'Formát dátového slovníka';
$strShowFullQueries = 'Zobraziť kompletné dopyty';
$strShowGrid = 'Zobraziť mriežku';
$strShowingBookmark = 'Zobrazujem obľúbený príkaz';
$strShowingRecords = 'Ukázať záznamy ';
$strShowOpenTables = 'Zobraziť otvorené tabuľky';
$strShowPHPInfo = 'Zobraziť informácie o PHP';
$strShowSlaveHosts = 'Zobraziť podriadené hosty';
$strShowSlaveStatus = 'Zobraziť stav podriadených hostov';
$strShowStatusBinlog_cache_disk_useDescr = 'Počet transakcií, ktoré využili dočasnú vyrovnávaciu pamäť binárneho logu, ale zároveň prekročili hodnotu binlog_cache_size a museli tak použiť dočasný súbor na uloženie príkazov transakcie.';
$strShowStatusBinlog_cache_useDescr = 'Počet transakcií, ktoré využili vyrovnávaciu pamäť binárneho logu.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Počet dočasných tabuliek automaticky vytvorených servrom pri vykonávaní príkazov. Ak je hodnota Created_tmp_disk_tables príliš vysoká, môžte zvýšiť hodnotu tmp_table_size, aby boli dočasné tabuľky ukladané do pamäte a nie na disk.';
$strShowStatusCreated_tmp_filesDescr = 'Počet dočasných súborov vytvorených servrom mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Počet dočasných, v pamäti uložených tabuliek, vytvorených servrom pri vykonávaní príkazov.';
$strShowStatusDelayed_errorsDescr = 'Počet riadkov pridaných príkazom INSERT DELAYED, pri ktorých sa vyskytla chyba (pravdepodobne opakujúci sa kľúč).';
$strShowStatusDelayed_insert_threadsDescr = 'Počet vlákien používaných príkazmi INSERT DELAYED. Každá samostatná tabuľka, na ktorú je použitý príkaz INSERT DELAYED, ma svoje vlastné vlákno.';
$strShowStatusDelayed_writesDescr = 'Počet riadkov vložených príkazom INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Počet vykonaných príkazov FLUSH.';
$strShowStatusHandler_commitDescr = 'Počet interných príkazov COMMIT.';
$strShowStatusHandler_deleteDescr = 'Koľkokrát bol z tabuľky odstránený riadok.';
$strShowStatusHandler_discoverDescr = 'MySQL server môže zaslať požiadavku NDB Clustru, či nevie o existencii tabuľky s daným menom. Tento proces sa nazýva objavovanie. Handler_discover zobrazuje počet doposiaľ objavených tabuliek.';
$strShowStatusHandler_read_firstDescr = 'Počet prečítaní prvej položky indexu. Ak je táto hodnota príliš vysoká, znamená to že server vykonáva príliš veľa kompletných prechádzaní indexov; napríklad, SELECT col1 FROM foo, za predpokladu že col1 je indexovaný.';
$strShowStatusHandler_read_keyDescr = 'Počet požiadavkov na načítanie riadku podľa kľúča. Ak je táto hodnota vysoká, je to dobrým znamením že sú príkazy a tabuľky správne indexované.';
$strShowStatusHandler_read_nextDescr = 'Počet požiadavkov na načítanie nasledujúceho riadku v poradí podľa kľúča. Táto hodnota sa zvyšuje ak sa načítava indexovaný stĺpec v danom rozsahu alebo ak sa vykonáva prehľadávanie indexu.';
$strShowStatusHandler_read_prevDescr = 'Počet požiadavkov na načítanie predchádzajúceho riadku podľa kľúča. Táto čítacia metóda sa použiva hlavne na optimalizáciu príkazov typu ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Počet požiadavkov na načítanie riadku na základe určitej pozície. Táto hodnota je vysoká, ak sa vykonáva veľa príkazov, ktoré si vyžadujú zoradenie výsledku. Pravdepodobne sa použiva veľa príkazov, kvôli ktorým musí MySQL kompletne prehľadávať tabuľky, alebo sa používajú zjednotenia, ktoré správne nevyužívajú kľúče.';
$strShowStatusHandler_read_rnd_nextDescr = 'Počet požiadavkov na načítanie nasledujúceho riadku. Táto hodnota je vysoká, ak sa vykonáva veľa kompletných prehľadávaní tabuliek. Znamená to že buď tabuľky nie sú správne indexované alebo príkazy nedostatočne využívajú dostupné indexy.';
$strShowStatusHandler_rollbackDescr = 'Počet interných príkazov ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Počet požiadavkov na zmenu záznamu (riadku) v tabuľke.';
$strShowStatusHandler_writeDescr = 'Počet požiadavkov na vloženie nového záznamu (riadku) do tabuľky.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Počet stránok obsahujúcich dáta (nečistých aj čistých).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Počet nečistých stránok.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Počet stránok, na ktoré je požiadavka na vyprázdnenie.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Počet voľných stránok.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Počet uzamknutých stránok v InnoDB vyrovnávacej pamäti. Z týchto stránok sa momentálne číta alebo zapisuje, prípadne nemôžu byť vyprázdnené ani odstránené z nejakého iného dôvodu.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Počet momentálne neprístupných stránok z dôvodu účasti na administratívnych účeloch ako napr. uzamkýnanie riadkov alebo adaptívny hash index. Táto hodnota sa tiež môže vypočítať ako Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Celkový počet stránok vo vyrovnávacej pamäti InnoDB.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Počet "náhodných" predčítaní vykonaných InnoDB. Táto situácia nastáva pri príkazoch, ktoré prehľadávajú veľkú časť tabuľky, ale v náhodnom poradí.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Počet sekvenčných predčítaní vykonaných InnoDB. Táto situácia nastáva pri vykonávaní sekvenčného prehľadávania celej tabuľky.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Počet požiadavkov na logické načítavanie.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Počet logických načítaní, ktoré sa nemohli vykonať z vyrovnávacej pamäte a namiesto toho bolo vykonané načítanie celej jednej stránky.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normálne sa zápis do vyrovnávacej pamäte InnoDB vykonáva v pozadí. Ak však nie sú pri požiadavke na načítanie alebo vytvorenie stránky dostupné žiadne čisté stránky, je potrebné počkať na ich vyčistenie. Táto hodnota zobrazuje počet týchto čakaní a ak bola správne nastavená veľkosť vyrovnávacej pamäte, mala by byť nízka.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Počet zápisov do vyrovnávacej pamäte InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Počet vykonaných fsync() operácií.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Aktuálny počet prebiehajúcich fsync() operácií.';
$strShowStatusInnodb_data_pending_readsDescr = 'Počet aktuálne prebiehajúcich načítavaní.';
$strShowStatusInnodb_data_pending_writesDescr = 'Počet aktuálne prebiehajúcich zápisov.';
$strShowStatusInnodb_data_readDescr = 'Množstvo už načítaných dát, v bajtoch.';
$strShowStatusInnodb_data_readsDescr = 'Celkový počet načítaní dát.';
$strShowStatusInnodb_data_writesDescr = 'Celkový počet zápisov dát.';
$strShowStatusInnodb_data_writtenDescr = 'Množstvo už zapísaných dát, v bajtoch.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Počet vykonaných dvojitých zápisov a počet stránok zapísaných pre tento účel.';
$strShowStatusInnodb_dblwr_writesDescr = 'Počet vykonaných dvojitých zápisov a počet stránok zapísaných pre tento účel.';
$strShowStatusInnodb_log_waitsDescr = 'Počet čakaní na vyprázdnenie vyrovnávacej pamäte logu z dôvodu jej zaplnenia.';
$strShowStatusInnodb_log_write_requestsDescr = 'Počet požiadaviek na zápis do logovacieho súboru.';
$strShowStatusInnodb_log_writesDescr = 'Počet fyzických zápisov do logovacieho súboru.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Počet fsync zápisov vykonaných na logovacom súbore.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Počet prebiehajúcich synchronizácií logovacieho súboru.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Počet prebiehajúcich zápisov do logovacieho súboru.';
$strShowStatusInnodb_os_log_writtenDescr = 'Množstvo bajtov zapísaných do logovacieho súboru.';
$strShowStatusInnodb_pages_createdDescr = 'Počet vytvorených stránok.';
$strShowStatusInnodb_page_sizeDescr = 'Veľkosť nakompilovanej InnoDB stránky (prednastavených je 16KB). Viacero hodnôt sa udáva v stránkach; pomocou veľkosti stránky je možné ich premeniť na bajty.';
$strShowStatusInnodb_pages_readDescr = 'Počet načítaných stránok.';
$strShowStatusInnodb_pages_writtenDescr = 'Počet zapísaných stránok.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Počet zámkov na riadky, na ktoré sa čaká.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Priemerný čas potrebný na získanie zámku na riadok, v milisekundách.';
$strShowStatusInnodb_row_lock_timeDescr = 'Celkový čas potrebný na získanie zámku na riadok, v milisekundách.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maximálny čas potrebný na získanie zámku na riadok, v milisekundách.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Koľkokrát sa muselo čakať na zámok na riadok.';
$strShowStatusInnodb_rows_deletedDescr = 'Počet záznamov (riadkov) odstránených z InnoDB tabuliek.';
$strShowStatusInnodb_rows_insertedDescr = 'Počet záznamov (riadkov) vložených do InnoDB tabuliek.';
$strShowStatusInnodb_rows_readDescr = 'Počet načítaných záznamov (riadkov) z InnoDB tabuliek.';
$strShowStatusInnodb_rows_updatedDescr = 'Počet upravených záznamov (riadkov) v InnoDB tabuľkách.';
$strShowStatusKey_blocks_not_flushedDescr = 'Počet zmenených kľúčových blokov vo vyrovnávacej pamäti kľúčov, ktoré ešte neboli zapísané na disk. Predtým sa táto hodnota nazývala Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Počet nevyužitých blokov vo vyrovnávacej pamäti kľúčov. Z tejto hodnoty môžete zistiť koľko vyrovnávacej pamäte sa práve používa.';
$strShowStatusKey_blocks_usedDescr = 'Počet využitých blokov vo vyrovnávacej pamäti kľúčov. Táto hodnota určuje najväčšie množstvo blokov, ktoré kedy naraz použité.';
$strShowStatusKey_read_requestsDescr = 'Počet požiadavkov na načítanie kľúčového bloku z vyrovnávacej pamäti.';
$strShowStatusKey_readsDescr = 'Počet načítaní kľúčového bloku priamo z disku. Ak je táto hodnota príliš veľká, väčšinou to znamená, že veľkosť vyrovnávacej pamäti (key_buffer_size) je príliš malá. Úspešnosť vyrovnávacej pamäte si môžte vypočítať zo vzťahu Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Počet požiadavkov na zápis kľúčového bloku do vyrovnávacej pamäti.';
$strShowStatusKey_writesDescr = 'Počet fyzických zápisov kľúčového bloku na disk.';
$strShowStatusLast_query_costDescr = 'Celkové náklady na posledný kompilovaný príkaz, vypočítané optimizérom príkazov. Užitočné na porovnávanie nákladov na rôzne príkazy pre tú istú požiadavku. Prednastavená hodnota 0 znamená, že doposiaľ neboli skompilované žiadne príkazy.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Počet riadkov čakajúcich na zápis cez INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Počet doposiaľ otvorených tabuliek. Ak je táto hodnota príliš vysoká, pravdepodobne je vyrovnávacia pamäť pre tabuľky príliš malá.';
$strShowStatusOpen_filesDescr = 'Počet otvorených súborov.';
$strShowStatusOpen_streamsDescr = 'Počet otvorených streamov (väčšinou využívané na logovanie).';
$strShowStatusOpen_tablesDescr = 'Počet práve otvorených tabuliek.';
$strShowStatusQcache_free_blocksDescr = 'Množstvo voľných pamäťových blokov vo vyrovnávacej pamäti príkazov.';
$strShowStatusQcache_free_memoryDescr = 'Veľkosť voľnej pamäti pre vyrovnávaciu pamäť príkazov.';
$strShowStatusQcache_hitsDescr = 'Počet zásahov vyrovnávacej pamäti.';
$strShowStatusQcache_insertsDescr = 'Počet príkazov pridaných do vyrovnávacej pamäti.';
$strShowStatusQcache_lowmem_prunesDescr = 'Počet príkazov, ktoré boli odstránené z vyrovnácej pamäti na uvoľnenie pamäti pre nové príkazy. Táto hodnota vám môže pomôcť pri upravovaní veľkosti vyrovnávacej pamäti príkazov. Na výber príkazov na odstránenie z vyrovnávacej pamäti sa používa stratégia LRU (tzn. najdlhšie nepoužité príkazy budú odstránené ako prvé).';
$strShowStatusQcache_not_cachedDescr = 'Počet príkazov neumiestnených do vyrovnávacej pamäti (nie sú cachovateľné alebo nevyhovujú nastaveniu query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Počet príkazov registrovaných vo vyrovnávacej pamäti.';
$strShowStatusQcache_total_blocksDescr = 'Celkové množstvo blokov vo vyrovnávacej pamäti príkazov.';
$strShowStatusReset = 'Vynulovať';
$strShowStatusRpl_statusDescr = 'Stav failsafe replikácie (zatiaľ neimplementované).';
$strShowStatusSelect_full_joinDescr = 'Počet spojení, ktoré nevyužívajú indexy. Ak sa táto hodnota nerovná 0, mali by ste starostlivo skontrolovať indexy vašich tabuliek.';
$strShowStatusSelect_full_range_joinDescr = 'Počet spojení, ktoré na referenčnej tabuľke využili intervalové vyhľadávanie.';
$strShowStatusSelect_range_checkDescr = 'Počet spojení bez kľúčov, ktoré kontrolovali použitie kľúča na každom riadku (ak táto hodnota nie je 0, mali by ste starostlivo skontrolovať indexy vašich tabuliek).';
$strShowStatusSelect_rangeDescr = 'Počet spojení, ktoré na prvej tabuľke využili intervalové vyhľadávanie (táto hodnota nie je kritická ani v prípade, že je vysoká).';
$strShowStatusSelect_scanDescr = 'Počet spojení, ktoré vykonali kompletné prehľadanie prvej tabuľky.';
$strShowStatusSlave_open_temp_tablesDescr = 'Počet dočasných tabuliek, otvorených podriadeným SQL vláknom.';
$strShowStatusSlave_retried_transactionsDescr = 'Celkový počet (od spustenia) pokusov replikačného podriadeného SQL vlákna o znovuobnovenie transakcie.';
$strShowStatusSlave_runningDescr = 'Táto položka obsahuje hodnotu ON ak je tento server podriadeným a je pripojený k prislúchajúcemu nadriadenému servru.';
$strShowStatusSlow_launch_threadsDescr = 'Počet vlákien, ktorých vytvorenie zabralo viac ako je hodnota slow_launch_time.';
$strShowStatusSlow_queriesDescr = 'Počet príkazov, ktorých vykonanie zabralo viac ako je hodnota long_query_time.';
$strShowStatusSort_merge_passesDescr = 'Počet zlučovacích prechodov, ktoré musel vykonať zoraďovací algoritmus. Ak je táto hodnota prílis veľká, mali by ste pouvažovať nad zvýšením hodnoty systémového nastavania sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Počet rozsahom obmedzených zoraďovaní.';
$strShowStatusSort_rowsDescr = 'Počet zoradených riadkov.';
$strShowStatusSort_scanDescr = 'Počet zoradení uskutočnených prehľadávaním tabuľky.';
$strShowStatusTable_locks_immediateDescr = 'Počet zámkov tabuliek, ktoré boli získané okamžite.';
$strShowStatusTable_locks_waitedDescr = 'Počet prípadov keď sa zámok tabuľky nedal získať okamžite a bolo nutné vyčkať. Ak je táto hodnota vysoká a máte problémy s výkonom, mali by ste najprv optimalizovať vaše príkazy a potom buď rozdeliť tabuľku/tabuľky alebo použiť replikáciu.';
$strShowStatusThreads_cachedDescr = 'Počet vlákien vo vyrovnávacej pamäti. Úspešnosť tejto vyrovnávacej pamäti sa dá vypočítať zo vzťahu Threads_created/Connections. Ak je táto hodnota v červenom, mali by ste zvýšiť hodnotu thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Počet momentálne otvorených spojení.';
$strShowStatusThreads_createdDescr = 'Počet vlákien vytvorených na zaobchádzanie so spojeniami. Ak je hodnota Threads_created vysoká, mohli by ste zvýšiť hodnotu thread_cache_size (to však nespôsobí žiadnu citeľnú zmenu ak máte vlákna dobre implementované).';
$strShowStatusThreads_runningDescr = 'Počet aktívnych (nespiacich) vlákien.';
$strShowTableDimension = 'Zobraziť rozmery tabuliek';
$strShowTables = 'Zobraziť tabuľky';
$strShowThisQuery = ' Zobraziť tento dopyt znovu ';
$strShow = 'Ukázať';
$strSimplifiedChinese = 'Zjednodušená Čínština';
$strSingly = '(po jednom)';
$strSize = 'Veľkosť';
$strSkipQueries = 'Počet záznamov (príkazov), ktoré sa majú zo začiatku preskočiť';
$strSlovak = 'Slovenčina';
$strSlovenian = 'Slovinčina';
$strSocketProblem = '(alebo soket lokálneho MySQL servra nie je správne nastavený)';
$strSortByKey = 'Zoradiť podľa kľúča';
$strSorting = 'Zoraďovanie';
$strSort = 'Triediť';
$strSpaceUsage = 'Zabrané miesto';
$strSpanish = 'Španielsky';
$strSplitWordsWithSpace = 'Slová sú rozdelené medzerou (" ").';
$strSQLCompatibility = 'Režim kompatibility SQL';
$strSQLExportType = 'Typ vytvorených dopytov';
$strSQLParserBugMessage = 'Je možné, že ste našli chybu v SQL syntaktickom analyzátore. Preskúmajte podrobne SQL dopyt, predovšetkým správnosť umiestnenia úvodzoviek. Ďalšia možnosť je, že nahrávate súbor s binárnymi dátami nezapísanými v úvodzovkách. Môžete tiež vyskúšať použiť príkazový riadok MySQL na odstránenie problému. Pokial stále máte problémy alebo syntaktický analyzátor SQL stále hlási chybu v dopyte, ktorý v príkazovom riadku funguje, prosím pokúste sa zredukovať dopyt na čo najmenší, v ktorom sa problém ešte vyskytuje a ohláste chybu na stránke phpMyAdmina spolu so sekciou VÝPIS uvedenú nižšie:';
$strSQLParserUserError = 'Vyskytla sa chyba v SQL dopyte. Nižšie uvedený MySQL výstup (ak je nejaký) Vám môže pomôcť odstrániť problém';
$strSQLQuery = 'SQL dopyt';
$strSQLResult = 'výsledok SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Neplatný identifikátor';
$strSQPBugUnclosedQuote = 'Neuzatvorené úvodzovky';
$strSQPBugUnknownPunctuation = 'Neznámy interpunkčný reťazec';
$strStatCheckTime = 'Posledná kontrola';
$strStatCreateTime = 'Vytvorenie';
$strStatement = 'Údaj';
$strStatisticsOverrun = 'Na vyťaženom serveri môže dôjsť k pretečeniu počítadiel, takže štatistiky servera môžu byť nepresné.';
$strStatUpdateTime = 'Posledná zmena';
$strStatus = 'Stav';
$strStorageEngines = 'Úložné Systémy';
$strStorageEngine = 'Úložný Systém';
$strStrucCSV = 'CSV dáta';
$strStrucData = 'Štruktúru a dáta';
$strStrucExcelCSV = 'CSV pre MS Excel dáta';
$strStrucNativeExcel = 'Natívne dáta MS Excel';
$strStrucOnly = 'Iba štruktúru';
$strStructPropose = 'Navrhnúť štruktúru tabuľky';
$strStructure = 'Štruktúra';
$strSubmit = 'Odošli';
$strSuccess = 'SQL dopyt bol úspešne vykonaný';
$strSum = 'Celkom';
$strSwedish = 'Švédsky';
$strSwitchToDatabase = 'Prepnúť na skopírovanú databázu';
$strSwitchToTable = 'Prepnúť na skopírovanú tabuľku';

$strTableAlreadyExists = 'Tabuľka %s už existuje!';
$strTableComments = 'Komentár k tabuľke';
$strTableEmpty = 'Tabuľka je prázdna!';
$strTableHasBeenDropped = 'Tabuľka %s bola odstránená';
$strTableHasBeenEmptied = 'Tabuľka %s bola vyprázdená';
$strTableHasBeenFlushed = 'Tabuľka %s bola vyprázdnená';
$strTableMaintenance = 'Údržba tabuľky';
$strTableOfContents = 'Obsah';
$strTableOptions = 'Parametre tabuľky';
$strTables = '%s tabuľka(y)';
$strTableStructure = 'Štruktúra tabuľky pre tabuľku';
$strTable = 'Tabuľka';
$strTakeIt = 'zvoliť';
$strTblPrivileges = 'Oprávnenia pre jednotlivé tabuľky';
$strTempData = 'Dočasné dáta';
$strTextAreaLength = ' Toto možno nepôjde upraviť,<br /> kvôli svojej dĺžke ';
$strThai = 'Thajčina';
$strThemeDefaultNotFound = 'Predvolený vzhľad %s nebol nájdený!';
$strThemeNoPreviewAvailable = 'Náhľad nie je dostupný.';
$strThemeNotFound = 'Vzhľad %s nebol nájdený!';
$strThemeNoValidImgPath = 'Nebola nájdená platná cesta k obrázkom pre vzhľad %s!';
$strThemePathNotFound = 'Nebola nájdená platná cesta ku vzhľadu %s!';
$strTheme = 'Vzhľad';
$strThisHost = 'Tento počítač';
$strThreads = 'Počet vlákien';
$strThreadSuccessfullyKilled = 'Vlákno %s bol úspešne zabité.';
$strTime = 'Čas';
$strTimeoutInfo = 'Predchádzajúcemu importu vypršal časový limit. Po znovuodoslaní formulára sa bude pokračovať od pozície %d.';
$strTimeoutNothingParsed = 'Avšak pri poslednom pokuse neboli prijaté žiadne dáta, čo obvykle znamená, že phpMyAdmin nebude schopný dokončiť tento import, pokiaľ nebude zvýšený časový limit behu skriptu v php.';
$strTimeoutPassed = 'Časový limit behu skriptu vypršal. Ak chcete import súboru dokončiť, odošlite znova formulár a import bude pokračovať.';
$strToggleScratchboard = 'zobraziť grafický návrh';
$strTotal = 'celkovo';
$strTotalUC = 'Celkom';
$strTraditionalChinese = 'Tradičná Čínština';
$strTraditionalSpanish = 'Tradičná Španielčina';
$strTraffic = 'Prevádzka';
$strTransactionCoordinator = 'Koordinátor transakcií';
$strTransformation_application_octetstream__download = 'Zobrazí odkaz na stiahnutie dát. Prvý parameter je meno súboru, druhý je meno stĺpca v tabuľke obsahujúci meno súboru. Ak zadáte druhý parameter, prvý musí byť prázdny.';
$strTransformation_application_octetstream__hex = 'Zobrazí dáta v ich hexadecimálnej forme. Nepovinný parameter určuje po koľko znakoch je vkladaná medzera (štandardne po dvoch).';
$strTransformation_image_jpeg__inline = 'Zobrazí náhľad obrázku s odkazom na obrázok; parametre šírka a výška v bodoch (pomer strán obrázku zostane zachovaný)';
$strTransformation_image_jpeg__link = 'Zobrazí odkaz na obrázok (napr. stiahnutie poľa blob).';
$strTransformation_image_png__inline = 'Zobrazí image/jpeg: inline';
$strTransformation_text_plain__external = 'PLATÍ IBA PRE LINUX: Spustí externú aplikáciu, na jej štandardný vstup pošle pole a zobrazí výstup programu. Predvolený program je Tidy, ktorý pekne sformátuje HTML. Z bezpečnostných dôvodov musíte ručne upraviť obsah súboru libraries/transformations/text_plain__external.inc.php a pridať do neho povolené aplikácie. Prvý parameter je číslo aplikácie, ktorú chcete použiť a druhý parametre sú parametre tejto aplikácie. Ak je tretí parameter nastavený na 1, výstup bude skonvertovaný funkciou htmlspecialchars() (predvolený je 1). Štvrtý parameter v prípade, že je nastavený na 1 pridá k výstupnému textu parameter NOWRAP, čím zabezpečí zachovanie formátovania (predvolený je 1)';
$strTransformation_text_plain__formatted = 'Zachová pôvodné formátovanie poľa tak ako je uložené v databáze.';
$strTransformation_text_plain__imagelink = 'Zobrazí obrázok a odkaz z poľa obsahujúceho odkaz na obrázok. Prvý parameter je prefix URL (napr. "http://domena.sk/"), druhý a tretí parameter určujú šírku a výšku obrázku.';
$strTransformation_text_plain__link = 'Zobrazí odkaz z poľa obsahujúceho odkaz. Prvý parameter je prefix URL (napr. "http://domena.sk/"), druhý parameter je text odkazu.';
$strTransformation_text_plain__sql = 'Formátuje text ako SQL príkaz pomocou syntaxového zvýrazňovania.';
$strTransformation_text_plain__substr = 'Zobrazí iba časť reťazca. Prvý parameter je posun od začiatku (predvolený je 0) a druhý určuje dĺžku textu, ktorá sa ma zobraziť, ak nie je zadaný bude zobrazený zvyšok textu. Tretí parameter určuje znaky, ktoré budú pridané na koniec skráteného textu (predvolené je ...).';
$strTruncateQueries = 'Zobraziť skrátene dopyty';
$strTurkish = 'Turecky';
$strType = 'Typ';

$strUkrainian = 'Ukrajinsky';
$strUncheckAll = 'Odznačiť všetko';
$strUnicode = 'Unicode';
$strUnique = 'Unikátny';
$strUnknown = 'neznámy';
$strUnselectAll = 'Odznačiť všetko';
$strUnsupportedCompressionDetected = 'Pokúsili ste sa načítať súbor s nepodporovanou kompresiou (%s). Buď nie je zahrnutá podpora tejto kompresie alebo bola deaktivovaná v konfigurácii.';
$strUpdatePrivMessage = 'Boli aktualizované oprávnenia pre %s.';
$strUpdateProfileMessage = 'Profil bol aktualizovaný.';
$strUpdateQuery = 'Aktualizovať dopyt';
$strUpdComTab = 'Prosím prečítajte si dokumentáciu ako aktualizovať tabuľku s informáciami o stĺpcoch (Column_comments Table)';
$strUpgrade = 'Mali by ste aktualizovať %s na verziu %s alebo vyššiu.';
$strUploadLimit = 'Pravdepodobne ste sa pokúsili uploadnuť príliš veľký súbor. Prečítajte si prosím %sdokumentáciu%s, ako sa dá toto obmedzenie obísť.';
$strUploadsNotAllowed = 'Ukladanie súborov na server nie je povolené.';
$strUsage = 'Využitie';
$strUseBackquotes = ' Použiť opačný apostrof pri názvoch tabuliek a polí ';
$strUsedPhpExtensions = 'Použité rozšírenia PHP';
$strUseHostTable = 'Použiť tabuľku s hostiteľmi';
$strUserAlreadyExists = 'Používateľ %s už existuje!';
$strUserEmpty = 'Meno používateľa je prázdne!';
$strUserName = 'Meno používateľa';
$strUserNotFound = 'Zvolený používateľ nebol nájdený v tabuľke práv.';
$strUserOverview = 'Prehľad používatelov';
$strUser = 'Používateľ';
$strUsersDeleted = 'Vybraní používatelia bol úspešne odstránený.';
$strUsersHavingAccessToDb = 'Používatelia majúci prístup k &quot;%s&quot;';
$strUseTabKey = 'Pre pohyb medzi hodnotami použite klávesu TAB alebo pre pohyb všetkými smermi klávesy CTRL+šípky';
$strUseTables = 'Použiť tabuľky';
$strUseTextField = 'Požiť textové pole';
$strUseThisValue = 'Použiť túto hodnotu';

$strValidateSQL = 'Potvrdiť platnosť SQL';
$strValidatorError = 'SQL validator nemohol byť inicializovaný. Prosím skontrolujte, či sú nainštalované všetky potrebné rozšírenia php, tak ako sú popísané v %sdocumentation%s.';
$strValue = 'Hodnota';
$strVar = 'Premenná';
$strVersionInformation = 'Informácie o verzii';
$strViewDumpDatabases = 'Export databáz';
$strViewDumpDB = 'Zobraziť dump (schému) databázy';
$strViewDump = 'Zobraziť dump (schému) tabuľky';
$strViewHasBeenDropped = 'Pohľad %s bol odstránený';
$strViewMaxExactCount = 'Tento pohľad obsahuje viac ako %s riadkov. Viď %sdokumentácia%s.';
$strView = 'Pohľad';

$strWebServerUploadDirectoryError = 'Adresár určený pre upload súborov sa nedá otvoriť';
$strWebServerUploadDirectory = 'upload adresár web serveru';
$strWelcome = 'Vitajte v %s';
$strWestEuropean = 'Západná Európa';
$strWildcard = 'nahradzujúci znak';
$strWindowNotFound = 'Cieľové okno prehliadača nemohlo byť aktualizované. Možno ste zatvorili rodičovské okno, alebo prehliadač blokuje operácie medzi oknami z dôvodu bezpečnostných nastavení';
$strWithChecked = 'Výber:';
$strWriteRequests = 'Požiadavkov na zápis';
$strWrongUser = 'Zlé používateľské meno alebo heslo. Prístup zamietnutý.';

$strXML = 'XML';

$strYes = 'Áno';

$strZeroRemovesTheLimit = 'Poznámka: Nastavenie týchto parametrov na 0 (nulu) odstráni obmedzenia.';
$strZip = '"zozipované"';

// To translate:

$strPDFReportExplanation = '(Generates a report containing the data of a single table)';  //to translate

$strFontSize = 'Font size';  //to translate
$strLanguage = 'Language';  //to translate
$strPmaWiki = 'phpMyAdmin wiki';  //to translate
$strTransformation_text_plain__dateformat = 'Displays a TIME, TIMESTAMP, DATETIME or numeric unix timestamp field as formatted date. The first option is the offset (in hours) which will be added to the timestamp (Default: 0). Use second option to specify a different date/time format string. Third option determines whether you want to see local date or UTC one (use "local" or "utc" strings) for that. According to that, date format has different value - for "local" see the documentation for PHP\'s strftime() function and for "utc" it is done using gmdate() function.';  //to translate
$strDocSQL = 'DocSQL';  //to translate
$strTableName = 'Table name';  //to translate
$strTableIsEmpty = 'Table seems to be empty!';  //to translate
$strDbIsEmpty = 'Database seems to be empty!';  //to translate
$strShowingPhp = 'Showing as PHP code';  //to translate
$strShowingSQL = 'Showing SQL query';  //to translate
$strDesigner = 'Designer';  //to translate
$strNumberOfTables = 'Number of tables';  //to translate
$strCreateTable  = 'Create table';  //to translate
$strCreateRelation = 'Create relation';  //to translate
$strSavePosition = 'Save position';  //to translate
$strSelectForeignKey = 'Select Foreign Key';  //to translate
$strHide         = 'Hide';  //to translate
$strShowHideLeftMenu = 'Show/Hide left menu';  //to translate
$strReload = 'Reload';  //to translate
$strSmallBigAll = 'Small/Big All';  //to translate
$strImportExportCoords = 'Import/Export coordinates for PDF schema';  //to translate
$strMoveMenu = 'Move Menu';  //to translate
$strAngularLinks = 'Angular links';  //to translate
$strDirectLinks = 'Direct links';  //to translate
$strHideShowAll = 'Hide/Show all';  //to translate
$strHideShowNoRelation = 'Hide/Show Tables with no relation';  //to translate
$strInternalRelationAdded = 'Internal relation added';  //to translate
$strInnoDBRelationAdded = 'InnoDB relation added';  //to translate
$strRelationDeleted = 'Relation deleted';  //to translate
$strToSelectRelation = 'To select relation, click :';  //to translate
$strExportImportToScale = 'Export/Import to scale';  //to translate
$strRecommended = 'recommended';  //to translate
$strToFromPage = 'to/from page';  //to translate
$strSelectReferencedKey = 'Select referenced key';  //to translate
$strPleaseSelectPrimaryOrUniqueKey = 'Please select the primary key or a unique key';  //to translate
$strForeignKeyError = 'Error creating foreign key (check data types)';  //to translate
$strHelp = 'Help';  //to translate
$strCancel = 'Cancel';  //to translate
$strDeleteRelation = 'Delete relation';  //to translate
$strKnownExternalBug = 'The %s functionality is affected by a known bug, see %s';  //to translate
$strStructureForView = 'Structure for view';  //to translate
$strStandInStructureForView = 'Stand-in structure for view';  //to translate
$strToggleSmallBig = 'Toggle small/big';  //to translate
$strIEUnsupported = 'Internet Explorer does not support this function.';  //to translate
$strErrorRelationAdded = 'Error: Relation not added.';  //to translate
$strErrorRelationExists = 'Error: relation already exists.';  //to translate
$strErrorSaveTable = 'Error saving coordinates for Designer.';  //to translate
$strSnapToGrid = 'Snap to grid';  //to translate
$strDesignerHelpDisplayField = 'The display field is shown in pink. To set/unset a field as the display field, click the "Choose field to display" icon, then click on the appropriate field name.';  //to translate
$strUploadErrorIniSize = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';  //to translate
$strUploadErrorFormSize = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';  //to translate
$strUploadErrorPartial = 'The uploaded file was only partially uploaded.';  //to translate
$strUploadErrorNoTempDir = 'Missing a temporary folder.';  //to translate
$strUploadErrorCantWrite = 'Failed to write file to disk.';  //to translate
$strUploadErrorExtension = 'File upload stopped by extension.';  //to translate
$strUploadErrorUnknown = 'Unknown error in file upload.';  //to translate
$strSessionStartupErrorGeneral = 'Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.';  //to translate
$strFieldInsertFromFileTempDirNotExists = 'Error moving the uploaded file, see FAQ 1.11';  //to translate
$strViewName = 'VIEW name';  //to translate
$strOptions = 'Options';  //to translate
$strFiles = 'Files';  //to translate
$strIndexesSeemEqual = 'The following indexes appear to be equal and one of them should be removed:';  //to translate
$strMysqlLibDiffersServerVersion = 'Your PHP MySQL library version %s differs from your MySQL server version %s. This may cause unpredictable behavior.';  //to translate
$strRoutines = 'Routines';  //to translate
$strRoutineReturnType = 'Return type';  //to translate
$strControluserFailed = 'Connection for controluser as defined in your configuration failed.';  //to translate
$strHexForBLOB = 'Use hexadecimal for BLOB';  //to translate
$strRestartInsertion = 'Restart insertion with %s rows';  //to translate
$strTriggers = 'Triggers';  //to translate
$strEvent = 'Event';  //to translate
$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

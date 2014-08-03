<?php
/* $Id: czech-utf-8.inc.php 11119 2008-02-12 01:15:49Z nijel $ */

/**
 * Czech language file by
 *   Michal Čihař <michal@cihar.com>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$day_of_week = array('Neděle', 'Pondělí', 'Úterý', 'Středa', 'Čtvrtek', 'Pátek', 'Sobota');
$month = array('ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%a %d. %b %Y, %H:%M';

$timespanfmt = '%s dnů, %s hodin, %s minut a %s sekund';

$strAbortedClients = 'Přerušené';
$strAccessDeniedCreateConfig = 'Pravděpodobná příčina je, že nemáte vytvořený konfigurační soubor. Pro jeho vytvoření by se vám mohl hodit %1$snastavovací skript%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin se pokusil připojit k&nbsp;MySQL serveru, a ten odmítl připojení. Zkontrolujte jméno serveru, uživatelské jméno a heslo v&nbsp;souboru config.inc.php a ujistěte se, že jsou totožné s&nbsp;těmi, které máte od administrátora MySQL serveru.';
$strAccessDenied = 'Přístup odepřen';
$strAction = 'Akce';
$strAddAutoIncrement = 'Přidat hodnotu AUTO_INCREMENT';
$strAddClause = 'Přidat %s';
$strAddConstraints = 'Přidat integritní omezení';
$strAddDeleteColumn = 'Přidat nebo odebrat sloupec';
$strAddDeleteRow = 'Přidat nebo odebrat řádek';
$strAddFields = 'Přidat %s sloupců';
$strAddHeaderComment = 'Přidat vlastní komentář do hlavičky (\\n odděluje řádky)';
$strAddIntoComments = 'Do komentářů přidat';
$strAddNewField = 'Přidat sloupec';
$strAddPrivilegesOnDb = 'Přidat oprávnění pro databázi';
$strAddPrivilegesOnTbl = 'Přidat oprávnění pro tabulku';
$strAddSearchConditions = 'Přidat vyhledávací parametry (část dotazu po příkazu &bdquo;WHERE&ldquo;):';
$strAddToIndex = 'Přidat %s sloupců do indexu';
$strAddUserMessage = 'Uživatel byl přidán.';
$strAddUser = 'Přidat nového uživatele';
$strAdministration = 'Správa';
$strAffectedRows = 'Ovlivněné řádky:';
$strAfterInsertBack = 'Návrat na předchozí stránku';
$strAfterInsertNewInsert = 'Vložit další řádek';
$strAfterInsertNext = 'Upravit následující řádek';
$strAfterInsertSame = 'Návrat na tuto stránku';
$strAfter = 'Po %s';
$strAllowInterrupt = 'Povolit přerušení importu v&nbsp;případě že skript pozná, že se blíží časový limit nastavený v&nbsp;PHP. Tímto způsobem můžete importovat i velké soubory, ale může to způsobit problémy s&nbsp;transakcemi.';
$strAllTableSameWidth = 'Použít pro všechny tabulky stejnou šířku';
$strAll = 'Všechno';
$strAlterOrderBy = 'Změnit pořadí tabulky podle';
$strAnalyzeTable = 'Analyzovat tabulku';
$strAnd = 'a';
$strAndThen = 'a poté';
$strAngularLinks = 'Pravoúhlé spoje';
$strAnIndex = 'K&nbsp;tabulce %s byl přidán index';
$strAnyHost = 'Jakýkoliv počítač';
$strAny = 'Jakýkoliv';
$strAnyUser = 'Jakýkoliv uživatel';
$strApproximateCount = 'Může být nepřesné, viz FAQ 3.11';
$strAPrimaryKey = 'V&nbsp;tabulce %s byl vytvořen primární klíč';
$strArabic = 'Arabština';
$strArmenian = 'Arménština';
$strAscending = 'Vzestupně';
$strAtBeginningOfTable = 'Na začátku tabulky';
$strAtEndOfTable = 'Na konci tabulky';
$strAttr = 'Vlastnosti';
$strAutomaticLayout = 'automatické rozvržení';

$strBack = 'Zpět';
$strBaltic = 'Baltické';
$strBeginCut = 'ZAČÁTEK VÝPISU';
$strBeginRaw = 'ZAČÁTEK VÝPISU';
$strBinary = ' Binární ';
$strBinaryDoNotEdit = ' Binární - neupravujte ';
$strBinaryLog = 'Binární log';
$strBinLogEventType = 'Typ události';
$strBinLogInfo = 'Informace';
$strBinLogName = 'Jméno logu';
$strBinLogOriginalPosition = 'Původní pozice';
$strBinLogPosition = 'Pozice';
$strBinLogServerId = 'ID serveru';
$strBookmarkAllUsers = 'Umožnit všem uživatelům používat tuto položku';
$strBookmarkCreated = 'Vytvořen oblíbený dotaz %s';
$strBookmarkDeleted = 'Položka byla smazána z&nbsp;oblíbených.';
$strBookmarkLabel = 'Název';
$strBookmarkQuery = 'Oblíbený SQL dotaz';
$strBookmarkReplace = 'Přepsat existující oblíbený dotaz stejného jména';
$strBookmarkThis = 'Přidat tento SQL dotaz do oblíbených';
$strBookmarkView = 'Zobrazit';
$strBrowseDistinctValues = 'Procházet odlišné hodnoty';
$strBrowseForeignValues = 'Projít hodnoty cizích klíčů';
$strBrowse = 'Projít';
$strBufferPoolActivity = 'Aktivita vyrovnávací paměti';
$strBufferPoolUsage = 'Využití vyrovnávací paměti';
$strBufferPool = 'Vyrovnávací paměť';
$strBufferReadMissesInPercent = 'Výpadků při čtení v&nbsp;%';
$strBufferReadMisses = 'Výpadků při čtení';
$strBufferWriteWaits = 'Čekání na zápis';
$strBufferWriteWaitsInPercent = 'Čekání na zápis v&nbsp;%';
$strBulgarian = 'Bulharština';
$strBusyPages = 'Zpracovávaných stránek';
$strBzError = 'phpMyAdminovi se nepodařilo zkomprimovat výpis, protože rozšíření pro kompresi bz2 je v&nbsp;této verzi PHP chybné. Doporučujeme tuto kompresi vypnout (nastavit <code>$cfg[\'BZipDump\']</code> v&nbsp;nastaveních phpMyAdmina na <code>FALSE</code>). Pokud chcete používat kompresi bz2, měli byste nainstalovat novější verzi PHP. Více informací o&nbsp;tomto problému je u&nbsp;popisu chyby %s.';
$strBzip = '&bdquo;zabzipováno&ldquo;';

$strCalendar = 'Kalendář';
$strCancel = 'Zrušit';
$strCanNotLoadExportPlugins = 'Nepodařilo se nahrát pluginy pro export, zkontrolujte prosím vaší instalaci!';
$strCanNotLoadImportPlugins = 'Nepodařilo se nahrát pluginy pro import, zkontrolujte prosím vaší instalaci!';
$strCannotLogin = 'Nepodařilo se přihlášení k&nbsp;MySQL serveru';
$strCantLoad = 'nelze nahrát rozšíření %s,<br />zkontrolujte prosím nastavení PHP';
$strCantLoadRecodeIconv = 'Nelze nahrát rozšíření iconv ani recode potřebná pro převod znakových sad. Upravte nastavení PHP tak, aby umožňovalo použít tyto rozšíření nebo vypněte převod znakových sad v&nbsp;phpMyAdminovi.';
$strCantRenameIdxToPrimary = 'Index nemůžete přejmenovat na &bdquo;PRIMARY&ldquo;!';
$strCantUseRecodeIconv = 'Nelze použít funkce iconv ani libiconv ani recode_string, přestože rozšíření jsou nahrána. Zkontrolujte nastavení PHP.';
$strCardinality = 'Mohutnost';
$strCaseInsensitive = 'nerozlišovat velká a malá písmena';
$strCaseSensitive = 'rozlišovat velká a malá písmena';
$strCentralEuropean = 'Střední Evropa';
$strChangeCopyModeCopy = '... zachovat původního uživatele.';
$strChangeCopyModeDeleteAndReload = ' ... smazat uživatele a poté znovu načíst oprávnění.';
$strChangeCopyModeJustDelete = ' ... smazat původního uživatele ze všech tabulek.';
$strChangeCopyModeRevoke = ' ... odebrat všechna oprávnění původnímu uživateli a poté ho smazat.';
$strChangeCopyMode = 'Vytvořit nového uživatele se stejnými oprávněními a ...';
$strChangeCopyUser = 'Změnit informace o&nbsp;uživateli / Kopírovat uživatele';
$strChangeDisplay = 'Zvolte které sloupce zobrazit';
$strChangePassword = 'Změnit heslo';
$strChange = 'Změnit';
$strCharsetOfFile = 'Znaková sada souboru:';
$strCharsetsAndCollations = 'Znakové sady a porovnávání';
$strCharsets = 'Znakové sady';
$strCharset = 'Znaková sada';
$strCheckAll = 'Zaškrtnout vše';
$strCheckOverhead = 'Zaškrtnout neoptimální';
$strCheckPrivsLong = 'Zkontrolovat oprávnění pro databázi &bdquo;%s&ldquo;.';
$strCheckPrivs = 'Zkontrolovat oprávnění';
$strCheckTable = 'Zkontrolovat tabulku';
$strChoosePage = 'Zvolte stránku, kterou chcete změnit';
$strColComFeat = 'Zobrazuji komentáře sloupců';
$strCollation = 'Porovnávání';
$strColumnNames = 'Názvy sloupců';
$strColumnPrivileges = 'Oprávnění pro jednotlivé sloupce';
$strCommand = 'Příkaz';
$strCommentsForTable = 'KOMENTÁŘE PRO TABULKU';
$strComments = 'Komentáře';
$strCompatibleHashing = 'Kompatibilní s&nbsp;MySQL&nbsp;4.0';
$strCompleteInserts = 'Úplné inserty';
$strCompression = 'Komprese';
$strCompressionWillBeDetected = 'Komprimace importovaného souboru bude automaticky rozpoznána. Podporovány jsou: %s';
$strConfigDefaultFileError = 'Nepodařilo se nahrát výchozí konfiguraci ze souboru: "%1$s"';
$strConfigFileError = 'phpMyAdmin nemohl načíst konfigurační soubor!<br />Tato chyba může nastat, pokud v&nbsp;něm PHP najde chybu nebo nemůže tento soubor najít.<br />Po kliknutí na následující odkaz se PHP pokusí přímo interpretovat tento soubor a zobrazí informace o&nbsp;chybě, ke které došlo. Pak opravte tuto chybu (nejčastěji se jedná o&nbsp;chybějící středník).<br />Pokud získáte prázdnou stránku, všechno je v&nbsp;pořádku.';
$strConfigureTableCoord = 'Prosím, nastavte souřadnice pro tabulku %s';
$strConnectionError = 'Nepodařilo se připojit: chybné nastavení.';
$strConnections = 'Připojení';
$strConstraintsForDumped = 'Omezení pro exportované tabulky';
$strConstraintsForTable = 'Omezení pro tabulku';
$strControluserFailed = 'Nepodařilo se připojit jako controluser, který je nadefinován v nastaveních.';
$strCookiesRequired = 'Přihlášení vyžaduje povolené cookies.';
$strCopyDatabaseOK = 'Databáze %s byla zkopírována na %s';
$strCopy = 'Kopírovat';
$strCopyTable = 'Kopírovat tabulku do (databáze<b>.</b>tabulka):';
$strCopyTableOK = 'Tabulka %s byla zkopírována do %s.';
$strCopyTableSameNames = 'Nelze kopírovat tabulku na sebe samu!';
$strCouldNotKill = 'phpMyAdminovi se nepodařilo ukončit vlákno %s. Pravděpodobně jeho běh již skončil.';
$strCreateDatabaseBeforeCopying = 'Vytvořit databázi před kopírováním (CREATE DATABASE)';
$strCreateIndexTopic = 'Vytvořit nový index';
$strCreateIndex = 'Vytvořit index na&nbsp;%s&nbsp;sloupcích';
$strCreateNewDatabase = 'Vytvořit novou databázi';
$strCreateNewTable = 'Vytvořit novou tabulku v&nbsp;databázi %s';
$strCreatePage = 'Vytvořit novou stránku';
$strCreatePdfFeat = 'Vytváření PDF';
$strCreateRelation = 'Vytvořit relaci';
$strCreateTable  = 'Vytvořit tabulku';
$strCreateUserDatabase = 'Databáze pro uživatele';
$strCreateUserDatabaseName = 'Vytvořit databázi stejného jména a přidělit všechna oprávnění';
$strCreateUserDatabaseNone = 'Žádná';
$strCreateUserDatabaseWildcard = 'Přidělit všechna oprávnění na jméno odpovídající masce (uživatel_%)';
$strCreate = 'Vytvořit';
$strCreationDates = 'Datum vytvoření, poslední změny a kontroly';
$strCriteria = 'Podmínka';
$strCroatian = 'Chorvatština';
$strCSV = 'CSV';
$strCyrillic = 'Cyrilika';
$strCzech = 'Čeština';
$strCzechSlovak = 'Čeština/Slovenština';

$strDanish = 'Dánština';
$strDatabase = 'Databáze';
$strDatabaseEmpty = 'Jméno databáze je prázdné!';
$strDatabaseExportOptions = 'Nastavení exportu databází';
$strDatabaseHasBeenDropped = 'Databáze %s byla zrušena.';
$strDatabases = 'Databáze';
$strDatabasesDropped = '%s databáze byla úspěšně zrušena.';
$strDatabasesStatsDisable = 'Skrýt podrobnosti';
$strDatabasesStatsEnable = 'Zobrazit podrobnosti';
$strDatabasesStatsHeavyTraffic = 'Poznámka: Zobrazení podrobností o&nbsp;databázích může způsobit značné zvýšení provozu mezi webserverem a MySQL serverem.';
$strDatabasesStats = 'Statistiky databází';
$strData = 'Data';
$strDataDict = 'Datový slovník';
$strDataOnly = ' Jen data';
$strDataPages = 'Stránek obsahujících data';
$strDBComment = 'Komentář k&nbsp;databázi: ';
$strDBCopy = 'Zkopírovat databázi na';
$strDbIsEmpty = 'Databáze se zdá být prázdná!';
$strDbPrivileges = 'Oprávnění pro jednotlivé databáze';
$strDBRename = 'Přejmenovat databázi na';
$strDbSpecific = 'závislé na databázi';
$strDefaultEngine = '%s je výchozí úložiště na tomto MySQL serveru.';
$strDefaultValueHelp = 'Výchozí hodnotu zadejte jen jednu hodnotu bez uvozovek a escapování znaků, například: a';
$strDefault = 'Výchozí';
$strDefragment = 'Defragmentovat tabulku';
$strDelayedInserts = 'Používat zpožděné inserty';
$strDeleteAndFlushDescr = 'Toto je nejčistší řešení, ale načítání oprávnění může trvat dlouho.';
$strDeleteAndFlush = 'Odstranit uživatele a znovu načíst oprávnění.';
$strDeleted = 'Řádek byl smazán';
$strDeletedRows = 'Smazané řádky:';
$strDeleteNoUsersSelected = 'Musíte vybrat uživatele, které chcete odstranit!';
$strDelete = 'Odstranit';
$strDeleteRelation = 'Odstranit relaci';
$strDeleting = 'Odstraňuji %s';
$strDelimiter = 'Oddělovač';
$strDelOld = 'Aktuální stránka se odkazuje na tabulky, které již neexistují. Chcete odstranit tyto odkazy?';
$strDescending = 'Sestupně';
$strDescription = 'Popis';
$strDesignerHelpDisplayField = 'Zobrazované pole je označeno růžovou barvou. Pro jeho změnu klikněte na ikonu "Zvolte které sloupce zobrazit" a poté zvolte odpovídající sloupec.';
$strDesigner = 'Návrhář';
$strDictionary = 'slovník';
$strDirectLinks = 'Přímé spoje';
$strDirtyPages = 'Změněných stránek';
$strDisabled = 'Vypnuto';
$strDisableForeignChecks = 'Vypnout kontrolu cizích klíčů';
$strDisplayFeat = 'Zobrazení funkcí';
$strDisplayOrder = 'Seřadit podle:';
$strDisplayPDF = 'Zobrazit jako schéma v&nbsp;PDF';
$strDoAQuery = 'Provést &bdquo;dotaz podle příkladu&ldquo; (zástupný znak: &bdquo;%&ldquo;)';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentace';
$strDoYouReally = 'Opravdu si přejete vykonat příkaz';
$strDropDatabaseStrongWarning = 'Chystáte se ZRUŠIT celou databázi!';
$strDrop = 'Odstranit';
$strDropUsersDb = 'Odstranit databáze se stejnými jmény jako uživatelé.';
$strDumpingData = 'Vypisuji data pro tabulku';
$strDumpSaved = 'Výpis byl uložen do souboru %s.';
$strDumpXRows = 'Vypsat %s řádků od %s.';
$strDynamic = 'dynamický';

$strEditPDFPages = 'Upravit PDF stránky';
$strEditPrivileges = 'Upravit oprávnění';
$strEdit = 'Upravit';
$strEffective = 'Efektivní';
$strEmptyResultSet = 'MySQL vrátil prázdný výsledek (tj. nulový počet řádků).';
$strEmpty = 'Vyprázdnit';
$strEnabled = 'Zapnuto';
$strEncloseInTransaction = 'Uzavřít příkazy v&nbsp;transakci';
$strEndCut = 'KONEC VÝPISU';
$strEnd = 'Konec';
$strEndRaw = 'KONEC VÝPISU';
$strEngineAvailable = 'Úložiště %s je dostupné na tomto MySQL serveru.';
$strEngineDisabled = 'Úložiště %s je vypnuté na tomto MySQL serveru.';
$strEngines = 'Úložiště';
$strEngineUnsupported = 'Tento MySQL server nepodporuje úložiště %s.';
$strEnglish = 'Anglicky';
$strEnglishPrivileges = 'Poznámka: názvy oprávnění v&nbsp;MySQL jsou uváděny anglicky';
$strError = 'Chyba';
$strErrorInZipFile = 'Chyba v&nbsp;ZIP archívu:';
$strErrorRelationAdded = 'Chyba: relace nebyla přidána.';
$strErrorRelationExists = 'Chyba: relace již existuje.';
$strErrorRenamingTable = 'Chyba při přejmenování tabulky %1$s na %2$s';
$strErrorSaveTable = 'Chyba při ukládání souřadnic pro Návrháře.';
$strEscapeWildcards = 'Zástupné znaky _ a % by měly být escapovány pomocí \, pokud je chcete použít jako znak';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonština';
$strEvent = 'Událost';
$strExcelEdition = 'Verze Excelu';
$strExecuteBookmarked = 'Spustit oblíbený dotaz';
$strExplain = 'Vysvětlit dotaz';
$strExport = 'Export';
$strExportImportToScale = 'Exportovat/Importovat v měřítku';
$strExportMustBeFile = 'Zvolený export musí být uložen do souboru!';
$strExtendedInserts = 'Rozšířené inserty';
$strExtra = 'Extra';

$strFailedAttempts = 'Nepovedených pokusů';
$strFieldHasBeenDropped = 'Sloupec %s byl odstraněn';
$strFieldInsertFromFileTempDirNotExists = 'Chyba při přejmenování nahraného soubory, viz FAQ 1.11';
$strFieldsEnclosedBy = 'Názvy sloupců uzavřené';
$strFieldsEscapedBy = 'Názvy sloupců escapovány';
$strField = 'Sloupec';
$strFields = 'Sloupce';
$strFieldsTerminatedBy = 'Sloupce oddělené';
$strFileAlreadyExists = 'Soubor %s již na serveru existuje, změňte jméno souboru, nebo zvolte přepsání souboru.';
$strFileCouldNotBeRead = 'Soubor nelze přečíst';
$strFileNameTemplateDescriptionDatabase = 'jméno databáze';
$strFileNameTemplateDescriptionServer = 'jméno serveru';
$strFileNameTemplateDescriptionTable = 'jméno tabulky';
$strFileNameTemplateDescription = 'Tato hodnota je interpretována pomocí %1$sstrftime%2$s, takže můžete použít libovolné řetězce pro formátování data a času. Dále budou provedena následující nahrazení: %3$s. Jakýkoliv jiný text zůstane zachován beze změny.';
$strFileNameTemplateRemember = 'zapamatovat si hodnotu';
$strFileNameTemplate = 'Vzor pro jméno souboru';
$strFiles = 'Soubory';
$strFileToImport = 'Soubor pro importování';
$strFixed = 'pevný';
$strFlushPrivilegesNote = 'Poznámka: phpMyAdmin získává oprávnění přímo z&nbsp;tabulek MySQL. Obsah těchto tabulek se může lišit od oprávnění, která server právě používá, pokud byly tyto tabulky upravovány. V&nbsp;tomto případě je vhodné provést %snové načtení oprávnění%s před pokračováním.';
$strFlushQueryCache = 'Vyprázdnit vyrovnávací paměť dotazů';
$strFlushTables = 'Zavřít všechny tabulky';
$strFlushTable = 'Vyprázdnit vyrovnávací paměť pro tabulku (&bdquo;FLUSH&ldquo;)';
$strFontSize = 'Velikost písma';
$strForeignKeyError = 'Chyba při vytváření cizího klíče (zkontrolujte typ dat)';
$strFormat = 'Formát';
$strFormEmpty = 'Chybějící hodnota ve formuláři!';
$strFreePages = 'Volných stránek';
$strFullText = 'Celé texty';
$strFunction = 'Funkce';
$strFunctions = 'Funkce';

$strGenBy = 'Vygeneroval';
$strGeneralRelationFeat = 'Obecné funkce relací';
$strGeneratePassword = 'Vytvořit heslo';
$strGenerate = 'Vytvořit';
$strGenTime = 'Vygenerováno';
$strGeorgian = 'Gruzínština';
$strGerman = 'Německy';
$strGlobal = 'globální';
$strGlobalPrivileges = 'Globální oprávnění';
$strGlobalValue = 'Globální hodnota';
$strGo = 'Proveď';
$strGrantOption = 'Přidělování';
$strGreek = 'Řečtina';
$strGzip = '&bdquo;zagzipováno&ldquo;';

$strHandler = 'Obslužné rutiny';
$strHasBeenAltered = 'byla změněna.';
$strHasBeenCreated = 'byla vytvořena.';
$strHaveToShow = 'Musíte zvolit alespoň jeden sloupec, který chcete zobrazit.';
$strHebrew = 'Hebrejština';
$strHelp = 'Nápověda';
$strHexForBLOB = 'Použít šestnáctkové zobrazení pro BLOB';
$strHideShowAll = 'Skrýt/Zobrazit vše';
$strHideShowNoRelation = 'Skrýt/Zobrazit tabulky bez relací';
$strHide         = 'Skrýt';
$strHome = 'Hlavní strana';
$strHomepageOfficial = 'Oficiální stránka phpMyAdmina';
$strHostEmpty = 'Jméno počítače je prázdné!';
$strHost = 'Počítač';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Maďarština';

$strIcelandic = 'Islandština';
$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIEUnsupported = 'Prohlížeč Internet Explorer tuto funkci nepodporuje.';
$strIgnoreDuplicates = 'Ignorovat duplicitní řádky';
$strIgnore = 'Ignorovat';
$strIgnoreInserts = 'Použít IGNORE';
$strImportExportCoords = 'Import/Export souřadnic pro PDF schéma';
$strImportFiles = 'Importovat soubory';
$strImportFormat = 'Formát importovaného souboru';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Import byl úspěšně dokončen, bylo provedeno %d dotazů.';
$strIndexes = 'Indexy';
$strIndexesSeemEqual = 'Následující indexy vypadají shodně a jeden z nich by měl být odstraněn:';
$strIndexHasBeenDropped = 'Index %s byl odstraněn';
$strIndex = 'Index';
$strIndexName = 'Jméno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexWarningTable = 'Problémy s&nbsp;indexy v&nbsp;tabulce `%s`';
$strInnoDBAutoextendIncrementDesc = 'Velikost o&nbsp;kterou je zvětšen soubor s&nbsp;daty, pokud je zaplněný.';
$strInnoDBAutoextendIncrement = 'Krok automatického zvětšování';
$strInnoDBBufferPoolSizeDesc = 'Velikost vyrovnávací paměti, kterou InnoDB používá pro vyrovnávací paměť dat a indexů tabulek.';
$strInnoDBBufferPoolSize = 'Velikost vyrovnávací paměti';
$strInnoDBDataFilePath = 'Soubor s&nbsp;daty';
$strInnoDBDataHomeDirDesc = 'Společná část cesty pro všechny soubory obsahující data InnoDB.';
$strInnoDBDataHomeDir = 'Domovský adresář pro data';
$strInnoDBPages = 'stránek';
$strInnoDBRelationAdded = 'Vytvořena relace InnoDB';
$strInnodbStat = 'Stav InnoDB';
$strInsecureMySQL = 'Máte standardní nastavení hesla uživatele root v&nbsp;MySQL. Doporučujeme změnit toto nastavení a tím podstatně zvýšit zabezpečení vašeho serveru.';
$strInsertAsNewRow = 'Vložit jako nový řádek';
$strInsertedRowId = 'Id vloženého řádku:';
$strInsertedRows = 'Vloženo řádků:';
$strInsert = 'Vložit';
$strInternalNotNecessary = '* Interní relace není potřebná, pokud již relace existuje v&nbsp;InnoDB.';
$strInternalRelationAdded = 'Interní relace vytvořena';
$strInternalRelations = 'Interní relace';
$strInUse = 'právě se používá';
$strInvalidAuthMethod = 'V konfiguraci máte špatnou autentizační metodu:';
$strInvalidColumn = 'Byl zadán chybný sloupec (%s)!';
$strInvalidColumnCount = 'Počet sloupců musí být větší než nula.';
$strInvalidCSVFieldCount = 'Chybný počet položek v&nbsp;CSV datech na řádku %d.';
$strInvalidCSVFormat = 'Chybný formát CSV dat na řádku %d.';
$strInvalidCSVParameter = 'Neznámý parametr pro import CSV: %s';
$strInvalidDatabase = 'Chybná databáze';
$strInvalidFieldAddCount = 'Musíte přidat alespoň jeden sloupec.';
$strInvalidFieldCount = 'Tabulka musí mít alespoň jeden sloupec.';
$strInvalidLDIImport = 'Tento plugin nepodporuje komprimované soubory!';
$strInvalidRowNumber = '%d není platné číslo řádku.';
$strInvalidServerHostname = 'Chybné jméno serveru pro server %1$s. Prosím zkontrolujte nastavení.';
$strInvalidServerIndex = 'Chybný index serveru: "%s"';
$strInvalidTableName = 'Chybné jméno tabulky';

$strJapanese = 'Japonština';
$strJoins = 'Použité výběry';
$strJumpToDB = 'Přejít na databázi &bdquo;%s&ldquo;.';
$strJustDeleteDescr = 'Odstranění uživatelé stále budou mít přístup na server, dokud nebudou znovu načtena oprávnění.';
$strJustDelete = 'Jen odstranit uživatele z&nbsp;tabulek s&nbsp;oprávněními.';

$strKeepPass = 'Neměnit heslo';
$strKeyCache = 'Vyrovnávací paměť klíčů';
$strKeyname = 'Klíčový název';
$strKill = 'Ukončit';
$strKnownExternalBug = 'Funkčnost %s je omezena známou chybou, viz %s.';
$strKorean = 'Korejština';

$strLandscape = 'Na šířku';
$strLanguage = 'Jazyk';
$strLanguageUnknown = 'Neznámý jazyk: %1$s.';
$strLatchedPages = 'Zamčených stránek';
$strLatexCaption = 'Titulek tabulky';
$strLatexContent = 'Obsah tabulky __TABLE__';
$strLatexContinuedCaption = 'Titulek pokračování tabulky';
$strLatexContinued = '(pokračování)';
$strLatexIncludeCaption = 'Použít titulek tabulky';
$strLatexLabel = 'Návěstí';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tabulky __TABLE__';
$strLatvian = 'Lotyština';
$strLDI = 'CSV pomocí LOAD DATA';
$strLDILocal = 'Použít klíčové slovo LOCAL';
$strLengthSet = 'Délka/Množina';
$strLimitNumRows = 'záznamů na stránku';
$strLinesTerminatedBy = 'Řádky ukončené';
$strLinkNotFound = 'Odkaz nenalezen';
$strLinksTo = 'Odkazuje na';
$strLithuanian = 'Litevština';
$strLocalhost = 'Lokální';
$strLocationTextfile = 'textový soubor';
$strLoginInformation = 'Přihlašování';
$strLogin = 'Přihlášení';
$strLogout = 'Odhlásit se';
$strLogPassword = 'Heslo:';
$strLogServer = 'Server';
$strLogUsername = 'Jméno:';
$strLongOperation = 'Tato operace může trvat velmi dlouho. Chcete je přesto provést?';

$strMaxConnects = 'Maximum současných připojení';
$strMaximalQueryLength = 'Maximální velikost vytvořeného dotazu';
$strMaximumSize = 'Maximální velikost: %s%s';
$strMbExtensionMissing = 'Rozšíření mbstring pro PHP nebylo nalezeno a zdá se, že požíváte více bajtovou znakovou sadu. Bez rozšíření mbstring neumí phpMyAdmin správně rozdělovat řetězce a proto to může mít nečekané následky.';
$strMbOverloadWarning = 'V&nbsp;nastavení PHP máte zapnuto mbstring.func_overload. Toto nastavení není kompatibilní s&nbsp;phpMyAdminem a může způsobit poškození dat!';
$strMIME_available_mime = 'Dostupné MIME typy';
$strMIME_available_transform = 'Dostupné transformace';
$strMIME_description = 'Popis';
$strMIME_MIMEtype = 'MIME typ';
$strMIME_nodescription = 'Pro tuto transformaci není dostupný žádný popis.<br />Zeptejte se autora co %s dělá.';
$strMIME_transformation_note = 'Pro seznam dostupných parametrů transformací a jejich MIME typů klikněte na %spopisy transformací%s';
$strMIME_transformation_options_note = 'Zadejte parametry transformací v&nbsp;následujícím tvaru: \'a\', 100, b,\'c\'...<br />Pokud potřebujete použít zpětné lomítko (&bdquo;\&ldquo;) nebo jednoduché uvozovky (&bdquo;\'&ldquo;) mezi těmito hodnotami, vložte před ně zpětné lomítko (například \'\\\\xyz\' nebo \'a\\\'b\').';
$strMIME_transformation_options = 'Parametry transformace';
$strMIME_transformation = 'Transformace při prohlížení';
$strMIMETypesForTable = 'MIME TYPY PRO TABULKU';
$strMIME_without = 'MIME typy zobrazené kurzívou nemají vlastní transformační funkci';
$strModifications = 'Změny byly uloženy';
$strModifyIndexTopic = 'Upravit index';
$strModify = 'Úpravy';
$strMoveMenu = 'Přesun menu';
$strMoveTableOK = 'Tabulka %s byla přesunuta do %s.';
$strMoveTable = 'Přesunout tabulku do (databáze<b>.</b>tabulka):';
$strMoveTableSameNames = 'Nelze přesunout tabulku na sebe samu!';
$strMultilingual = 'mnohojazyčný';
$strMyISAMDataPointerSizeDesc = 'Výchozí velikost ukazatele v&nbsp;bajtech, která bude použita pro vytváření MyISAM tabulek, pokud není uvedeno MAX_ROWS.';
$strMyISAMDataPointerSize = 'Velikost ukazatele na data';
$strMyISAMMaxExtraSortFileSizeDesc = 'Pokud by byl soubor pro vytváření MyISAM indexu byl větší než zde uvedená hodnota, použije se pomalejší metoda vyrovnávací paměti klíčů.';
$strMyISAMMaxExtraSortFileSize = 'Maximální velikost dočasných souborů při vytváření indexu';
$strMyISAMMaxSortFileSizeDesc = 'Maximální velikost dočasných souborů, které smí MySQL použít při obnově indexu (při REPAIR TABLE, ALTER TABLE nebo LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maximální velikost dočasných souborů pro řazení';
$strMyISAMRecoverOptions = 'Automatický režim obnovy';
$strMyISAMRecoverOptionsDesc = 'Režim automatické obnovy poškozených MyISAM tabulek. Nastavuje se parametrem --myisam-recover při spouštění serveru.';
$strMyISAMRepairThreadsDesc = 'Pokud je tato hodnota větší než 1, indexy v&nbsp;MyISAM tabulkách jsou vytvářeny paralelně (každý index vlastním threadem) při obnově nebo řazení.';
$strMyISAMRepairThreads = 'Threadů pro opravování';
$strMyISAMSortBufferSizeDesc = 'Paměť, která je alokována při řazení MyISAM indexů během jejich vytváření nebo opravování.';
$strMyISAMSortBufferSize = 'Velikost paměti pro řazení';
$strMySQLCharset = 'Znaková sada v&nbsp;MySQL';
$strMysqlClientVersion = 'Verze MySQL klienta';
$strMySQLConnectionCollation = 'Porovnávání pro toto připojení k&nbsp;MySQL';
$strMysqlLibDiffersServerVersion = 'Používaný MySQL modul v PHP je kompilována pro MySQL %s a server používá verzi %s. Toto může způsobit problémy.';
$strMySQLSaid = 'MySQL hlásí: ';
$strMySQLShowProcess = 'Zobrazit procesy';
$strMySQLShowStatus = 'Informace o&nbsp;stavu MySQL';
$strMySQLShowVars = 'Systémové proměnné MySQL';

$strName = 'Název';
$strNext = 'Další';
$strNoActivity = 'Byli jste příliš dlouho neaktivní (déle než %s sekund), prosím přihlaste se znovu';
$strNoDatabasesSelected = 'Nebyla vybrána žádná databáze.';
$strNoDatabases = 'Žádné databáze';
$strNoDataReceived = 'Nepodařilo se načíst žádná data k importu. Buďto nebyl odeslán žádný soubor, nebo jeho velikost překročila velikost povolenou v nastavení PHP. Viz FAQ 1.16.';
$strNoDescription = 'žádný popisek';
$strNoDetailsForEngine = 'Nejsou dostupné podrobnější informace o tomto úložišti.';
$strNoDropDatabases = 'Příkaz &bdquo;DROP DATABASE&ldquo; je vypnutý.';
$strNoExplain = 'Bez vysvětlení (EXPLAIN) SQL';
$strNoFilesFoundInZip = 'V&nbsp;ZIP archívu nebyly nalezeny žádné soubory!';
$strNoFrames = 'phpMyAdmin se lépe používá v&nbsp;prohlížeči podporujícím rámy (&bdquo;FRAME&ldquo;).';
$strNoIndexPartsDefined = 'Nebyla zadána žádná část indexu!';
$strNoIndex = 'Tabulka nemá žádný index!';
$strNoModification = 'Žádná změna';
$strNo = 'Ne';
$strNone = 'Žádná';
$strNoOptions = 'Tento formát nemá žádná nastavení';
$strNoPassword = 'Žádné heslo';
$strNoPermission = 'Web server nemá oprávnění uložit výpis do souboru %s.';
$strNoPhp = 'Bez PHP kódu';
$strNoPrivileges = 'Nemáte oprávnění';
$strNoRights = 'Nemáte dostatečná práva na provedení této akce!';
$strNoRowsSelected = 'Nebyl vybrán žádný řádek';
$strNoSpace = 'Nedostatek místa pro uložení souboru %s.';
$strNoTablesFound = 'V&nbsp;databázi nebyla nalezena žádná tabulka.';
$strNoThemeSupport = 'Není podporována změna tématu, zkontrolujte nastavení a témata v&nbsp;adresáři %s.';
$strNotNumber = 'Nebylo zadáno číslo!';
$strNotOK = 'není v&nbsp;pořádku';
$strNotSet = '<b>%s</b> tabulka nenalezena nebo není nastavena v&nbsp;%s';
$strNoUsersFound = 'Žádný uživatel nenalezen.';
$strNoValidateSQL = 'Bez kontroly SQL';
$strNull = 'Nulový';
$strNumberOfFields = 'Počet sloupců';
$strNumberOfTables = 'Počet tabulek';
$strNumSearchResultsInTable = '%s odpovídající(ch) záznam(ů) v&nbsp;tabulce <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkem:</b> <i>%s</i> odpovídající(ch) záznam(ů)';
$strNumTables = 'Tabulek';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Sešit OpenDocument';
$strOpenDocumentText = 'Text OpenDocument';
$strOpenNewWindow = 'Otevřít nové okno phpMyAdmina';
$strOperations = 'Úpravy';
$strOperator = 'Operátor';
$strOptimizeTable = 'Optimalizovat tabulku';
$strOptions = 'Nastavení';
$strOr = 'nebo';
$strOverhead = 'Navíc';
$strOverwriteExisting = 'Přepsat existující soubor(y)';

$strPageNumber = 'Strana číslo:';
$strPagesToBeFlushed = 'Stránek určených k&nbsp;uvolnění';
$strPaperSize = 'Velikost stránky';
$strPartialImport = 'Částečný import';
$strPartialText = 'Zkrácené texty';
$strPasswordChanged = 'Heslo pro %s bylo úspěšně změněno.';
$strPasswordEmpty = 'Heslo je prázdné!';
$strPasswordHashing = 'Hašovací funkce pro heslo';
$strPassword = 'Heslo';
$strPasswordNotSame = 'Hesla nejsou stejná!';
$strPdfDbSchema = 'Schéma databáze &bdquo;%s&ldquo; - Strana %s';
$strPdfInvalidTblName = 'Tabulka &bdquo;%s&ldquo; neexistuje!';
$strPdfNoTables = 'žádné tabulky';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Vygeneruje dokument obsahující data jedné tabulky)';
$strPDFReportTitle = 'Název výpisu';
$strPerHour = 'za hodinu';
$strPerMinute = 'za minutu';
$strPerSecond = 'za sekundu';
$strPersian = 'Perština';
$strPhoneBook = 'adresář';
$strPHP40203 = 'Používáte PHP 4.2.3, které má závažnou chybu při práci s&nbsp;více bajtovými znaky (mbstring), jedná se o&nbsp;chybu PHP číslo 19404. Nedoporučujeme používat tuto verzi PHP s&nbsp;phpMyAdminem.';
$strPHPVersion = 'Verze PHP';
$strPhp = 'Vytvořit PHP kód';
$strPleaseSelectPrimaryOrUniqueKey = 'Zvolte, prosím, primární nebo unikátní klíč';
$strPmaDocumentation = 'Dokumentace phpMyAdmina';
$strPmaUriError = 'Parametr <tt>$cfg[\'PmaAbsoluteUri\']</tt> MUSÍ být nastaven v&nbsp;konfiguračním souboru!';
$strPmaWiki = 'wiki phpMyAdmina';
$strPolish = 'Polština';
$strPortrait = 'Na výšku';
$strPos1 = 'Začátek';
$strPrevious = 'Předchozí';
$strPrimaryKeyHasBeenDropped = 'Primární klíč byl odstraněn';
$strPrimaryKeyName = 'Jméno primárního klíče musí být &bdquo;PRIMARY"!';
$strPrimaryKeyWarning = '(&bdquo;PRIMARY&ldquo; <b>musí</b> být jméno <b>pouze</b> primárního klíče!)';
$strPrimary = 'Primární';
$strPrintViewFull = 'Náhled k&nbsp;vytištění (s&nbsp;kompletními texty)';
$strPrintView = 'Náhled k&nbsp;vytištění';
$strPrint = 'Vytisknout';
$strPrivDescAllPrivileges = 'Všechna oprávnění kromě GRANT.';
$strPrivDescAlterRoutine = 'Umožňuje měnit a rušit uložené procedury.';
$strPrivDescAlter = 'Umožňuje měnit strukturu existujících tabulek.';
$strPrivDescCreateDb = 'Umožňuje vytvářet nové databáze a tabulky.';
$strPrivDescCreateRoutine = 'Umožňuje vytvářet uložené procedury.';
$strPrivDescCreateTbl = 'Umožňuje vytvářet nové tabulky.';
$strPrivDescCreateTmpTable = 'Umožňuje vytvářet dočasné tabulky.';
$strPrivDescCreateUser = 'Umožňuje vytvářet, rušit a přejmenovávat účty uživatelů.';
$strPrivDescCreateView = 'Umožňuje vytvářet nové pohledy.';
$strPrivDescDelete = 'Umožňuje mazat data.';
$strPrivDescDropDb = 'Umožňuje odstranit databáze a tabulky.';
$strPrivDescDropTbl = 'Umožňuje odstranit tabulky.';
$strPrivDescExecute5 = 'Umožňuje spouštět uložené procedury.';
$strPrivDescExecute = 'Umožňuje spouštět uložené procedury. V&nbsp;této verzi MySQL se nepoužívá.';
$strPrivDescFile = 'Umožňuje importovat a exportovat data z/do souborů na serveru.';
$strPrivDescGrant = 'Umožňuje přidávat uživatele a oprávnění bez znovunačítání tabulek s&nbsp;oprávněními.';
$strPrivDescIndex = 'Umožňuje vytvářet a rušit indexy.';
$strPrivDescInsert = 'Umožňuje vkládat a přepisovat data.';
$strPrivDescLockTables = 'Umožňuje zamknout tabulku pro aktuální thread.';
$strPrivDescMaxConnections = 'Omezuje počet nových připojení, která může uživatel vytvořit za hodinu.';
$strPrivDescMaxQuestions = 'Omezuje, kolik dotazů může uživatel odeslat serveru za hodinu.';
$strPrivDescMaxUpdates = 'Omezuje, kolik dotazů měnících nějakou tabulku nebo databázi může uživatel spustit za hodinu.';
$strPrivDescMaxUserConnections = 'Omezuje počet současných připojení uživatele.';
$strPrivDescProcess3 = 'Umožňuje ukončit procesy jiným uživatelům.';
$strPrivDescProcess4 = 'Umožňuje vidět celé dotazy v&nbsp;seznamu procesů.';
$strPrivDescReferences = 'Nemá žádný vliv v&nbsp;této verzi MySQL.';
$strPrivDescReload = 'Umožňuje znovu načíst nastavení a vyprázdnění vyrovnávacích pamětí MySQL serveru.';
$strPrivDescReplClient = 'Umožní uživateli zjistit, kde je hlavní / pomocný server.';
$strPrivDescReplSlave = 'Potřebné pro replikaci pomocných serverů.';
$strPrivDescSelect = 'Umožňuje vybírat data.';
$strPrivDescShowDb = 'Umožňuje přístup k&nbsp;úplnému seznamu databází.';
$strPrivDescShowView = 'Umožňuje spuštění dotazu SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Umožňuje vypnout server.';
$strPrivDescSuper = 'Umožňuje připojení, i když je dosažen maximální počet připojení. Potřebné pro většinu operací pro správu serveru jako nastavování globálních proměnných a zabíjení threadů jiných uživatelů.';
$strPrivDescUpdate = 'Umožňuje měnit data.';
$strPrivDescUsage = 'Žádná oprávnění.';
$strPrivileges = 'Oprávnění';
$strPrivilegesReloaded = 'Oprávnění byla načtena úspěšně.';
$strProcedures = 'Procedury';
$strProcesses = 'Procesy';
$strProcesslist = 'Seznam procesů';
$strProfiling = 'Profilování';
$strProtocolVersion = 'Verze protokolu';
$strPutColNames = 'Přidat jména sloupců na první řádek';

$strQBEDel = 'smazat';
$strQBE = 'Dotaz';
$strQBEIns = 'přidat';
$strQueryCache = 'Vyrovnávací paměť dotazů';
$strQueryFrame = 'SQL okno';
$strQueryOnDb = 'SQL dotaz na databázi <b>%s</b>:';
$strQueryResultsOperations = 'Operace s&nbsp;výsledky dotazu';
$strQuerySQLHistory = 'SQL historie';
$strQueryStatistics = '<b>Statistika dotazů</b>: Od spuštění bylo serveru posláno %s dotazů.';
$strQueryTime = 'Dotaz zabral %01.4f sekund';
$strQueryType = 'Typ dotazu';
$strQueryWindowLock = 'Nepřepisovat tento dotaz z&nbsp;hlavního okna';

$strReadRequests = 'Požadavků na zápis';
$strReceived = 'Přijato';
$strRecommended = 'doporučené';
$strRecords = 'Záznamů';
$strReferentialIntegrity = 'Zkontrolovat integritu odkazů:';
$strRefresh = 'Obnovit';
$strRelationalSchema = 'Relační schéma';
$strRelationDeleted = 'Relace smazána';
$strRelationNotWorking = 'Některé z&nbsp;rozšířených funkcí phpMyAdmina nelze používat. %sZde%s zjistíte proč.';
$strRelationsForTable = 'RELACE PRO TABULKU';
$strRelations = 'Relace';
$strRelationView = 'Zobrazit relace';
$strReloadingThePrivileges = 'Načítám oprávnění';
$strReloadPrivileges = 'Znovu načíst oprávnění';
$strReload = 'Znovu načíst';
$strRemoveSelectedUsers = 'Odstranit vybrané uživatele';
$strRenameDatabaseOK = 'Databáze %s byla přejmenována na %s';
$strRenameTableOK = 'Tabulka %s byla přejmenována na %s';
$strRenameTable = 'Přejmenovat tabulku na';
$strRepairTable = 'Opravit tabulku';
$strReplaceNULLBy = 'Nahradit NULL hodnoty';
$strReplaceTable = 'Přepsat data tabulky souborem';
$strReplication = 'Replikace';
$strReset = 'Původní';
$strResourceLimits = 'Omezení zdrojů';
$strRestartInsertion = 'Začít znovu vkládání s %s řádky';
$strReType = 'Heslo znovu';
$strRevokeAndDeleteDescr = 'Uživatelé budou mít oprávnění &bdquo;USAGE&ldquo; (používání), dokud nebudou znovu načtena oprávnění.';
$strRevokeAndDelete = 'Odebrat uživatelům veškerá oprávnění a poté je odstranit z&nbsp;tabulek.';
$strRevokeMessage = 'Byla zrušena práva pro %s';
$strRevoke = 'Zrušit';
$strRomanian = 'Rumunština';
$strRoutineReturnType = 'Návratový typ';
$strRoutines = 'Rutiny';
$strRowLength = 'Délka řádku';
$strRowsFrom = 'řádků začínající od';
$strRowSize = ' Velikost řádku ';
$strRowsModeFlippedHorizontal = 'vodorovném (otočené hlavičky)';
$strRowsModeHorizontal = 'vodorovném';
$strRowsModeOptions = 've %s režimu a opakovat hlavičky po %s řádcích.';
$strRowsModeVertical = 'svislém';
$strRows = 'Řádků';
$strRowsStatistic = 'Statistika řádků';
$strRunning = 'na %s';
$strRunQuery = 'Provést dotaz';
$strRunSQLQueryOnServer = 'Spustit SQL dotaz(y) na serveru %s';
$strRunSQLQuery = 'Spustit SQL dotaz(y) na databázi %s';
$strRussian = 'Ruština';

$strSaveOnServer = 'Uložit na serveru v&nbsp;adresáři %s';
$strSavePosition = 'Uložit rozmístění';
$strSave = 'Ulož';
$strScaleFactorSmall = 'Měřítko je příliš malé, aby se schéma vešlo na jednu stránku';
$strSearchFormTitle = 'Vyhledávání v&nbsp;databázi';
$strSearchInTables = 'V&nbsp;tabulkách:';
$strSearchNeedle = 'Slova nebo hodnoty, které chcete vyhledat (zástupný znak: &bdquo;%&ldquo;):';
$strSearchOption1 = 'alespoň jedno ze slov';
$strSearchOption2 = 'všechna slova';
$strSearchOption3 = 'přesnou frázi';
$strSearchOption4 = 'jako regulární výraz';
$strSearchResultsFor = 'Výsledky vyhledávání pro &bdquo;<i>%s</i>&ldquo; %s:';
$strSearchType = 'Najít:';
$strSearch = 'Vyhledávání';
$strSecretRequired = 'Nastavte klíč pro šifrování cookies (blowfish_secret) v&nbsp;konfiguračním souboru (config.inc.php).';
$strSelectADb = 'Prosím vyberte databázi';
$strSelectAll = 'Vybrat vše';
$strSelectBinaryLog = 'Zvolte binární log pro zobrazení';
$strSelectFields = 'Zvolte sloupec (alespoň jeden):';
$strSelectForeignKey = 'Zvolte cizí klíč';
$strSelectNumRows = 'v&nbsp;dotazu';
$strSelectReferencedKey = 'Zvolte odkazovaný klíč';
$strSelectTables = 'Vybrat tabulky';
$strSend = 'Do souboru';
$strSent = 'Odesláno';
$strServerChoice = 'Server';
$strServerNotResponding = 'Server neodpovídá';
$strServer = 'Server';
$strServers = 'Servery';
$strServerStatusDelayedInserts = 'Odložené inserty';
$strServerStatus = 'Stav serveru';
$strServerStatusUptime = 'Tento MySQL server běží %s. Čas spuštění: %s.';
$strServerTabVariables = 'Proměnné';
$strServerTrafficNotes = '<b>Provoz serveru</b>: Informace o&nbsp;síťovém provozu MySQL serveru od jeho spuštění.';
$strServerVars = 'Proměnné a nastavení serveru';
$strServerVersion = 'Verze MySQL';
$strSessionStartupErrorGeneral = 'Vytváření sezení selhalo, prosím zkontrolujte chyby v logu PHP a/nebo webserveru a pečlivě nastavte podporu sezení v PHP.';
$strSessionValue = 'Hodnota sezení';
$strSetEnumVal = 'Pokud je sloupec typu &bdquo;enum&ldquo; nebo &bdquo;set", zadávejte hodnoty v&nbsp;následujícím formátu: \'a\',\'b\',\'c\'...<br />Pokud potřebujete zadat zpětné lomítko (&bdquo;\&ldquo;) nebo jednoduché uvozovky (&bdquo;\'&ldquo;) mezi těmito hodnotami, napište před ně zpětné lomítko (příklad: \'\\\\xyz\' nebo \'a\\\'b\').';
$strShowAll = 'Zobrazit vše';
$strShowColor = 'Barevné šipky';
$strShowDatadictAs = 'Formát datového slovníku';
$strShowFullQueries = 'Zobrazit celé dotazy';
$strShowGrid = 'Zobrazit mřížku';
$strShowHideLeftMenu = 'Zobrazit/Skrýt levé menu';
$strShowingBookmark = 'Zobrazuji oblíbený dotaz';
$strShowingPhp = 'Zobrazuji jako PHP kód';
$strShowingRecords = 'Zobrazeny záznamy';
$strShowingSQL = 'Zobrazuji SQL dotaz';
$strShowOpenTables = 'Zobrazit otevřené tabulky';
$strShowPHPInfo = 'Zobrazit informace o&nbsp;PHP';
$strShowSlaveHosts = 'Zobrazit podřízené servery';
$strShowSlaveStatus = 'Zobrazit stav podřízených serverů';
$strShowStatusBinlog_cache_disk_useDescr = 'Počet transakcí, které použily dočasný binární log, ale překročily hodnotu binlog_cache_size a musely použít dočasný soubor pro uložení příkazů transakce.';
$strShowStatusBinlog_cache_useDescr = 'Počet transakcí, které využily dočasný binární log.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Počet dočasných tabulek vytvořených serverem na disku při provádění dotazů. Pokud je tato hodnota velká, můžete zvětšit parametr tmp_table_size a MySQL bude používat větší dočasné tabulky v&nbsp;paměti.';
$strShowStatusCreated_tmp_filesDescr = 'Počet vytvořených dočasných souborů.';
$strShowStatusCreated_tmp_tablesDescr = 'Počet dočasných tabulek vytvořených serverem v&nbsp;paměti při provádění dotazů.';
$strShowStatusDelayed_errorsDescr = 'Počet řádků provedených pomocí INSERT DELAYED, u&nbsp;kterých se vyskytla chyba (pravděpodobně duplicitní klíč).';
$strShowStatusDelayed_insert_threadsDescr = 'Počet vláken používaných pro INSERT DELAYED. Každá tabulka na které je použit INSERT DEKAYED má jeden thread.';
$strShowStatusDelayed_writesDescr = 'Počet řádků zapsaných pomocí INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Počet provedených příkazů FLUSH.';
$strShowStatusHandler_commitDescr = 'Počet interních příkazů COMMIT.';
$strShowStatusHandler_deleteDescr = 'Počet požadavků na smazání řádku.';
$strShowStatusHandler_discoverDescr = 'Počet zjišťování tabulek. Tímto se nazývá dotaz NDB clusteru, jestli ví o tabulce daného jména.';
$strShowStatusHandler_read_firstDescr = 'Počet přečtení první položky indexu. Příliš vysoká hodnota znamení, že server provádí mnoho kompletních procházení indexu. Na příklad SELECT col1 FROM foo, pokud je col1 indexována.';
$strShowStatusHandler_read_keyDescr = 'Počet požadavků na přečtení řádku vycházející z&nbsp;indexu. Vysoká hodnota znamená, že dotazy správně využívají indexy.';
$strShowStatusHandler_read_nextDescr = 'Počet požadavků na přečtení dalšího řádku podle indexu. Tato hodnota se zvětšuje pokud provádíte dotaz na indexovaný sloupec s&nbsp;omezením rozsahu nebo prohledáváte index.';
$strShowStatusHandler_read_prevDescr = 'Počet požadavků na přečtení předchozího řádku z&nbsp;indexu. Používané pro optimalizaci dotazů ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Počet požadavků na přečtení konkrétního řádku tabulky. Vysoká hodnota znamená, že provádíte mnoho dotazů, které vyžadují řazení výsledků. Pravděpodobně používáte mnoho dotazů, které vyžadují prohlížení celé tabulky nebo používáte spojení tabulek, která nevyužívají indexů.';
$strShowStatusHandler_read_rnd_nextDescr = 'Počet požadavků na přečtení dalšího řádku ze souboru. Tato hodnota je vysoká pokud dotazy procházejí celé tabulky, pravděpodobně tedy nemají vhodné indexy.';
$strShowStatusHandler_rollbackDescr = 'Počet interních příkazů ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Počet požadavků na aktualizaci řádku.';
$strShowStatusHandler_writeDescr = 'Počet požadavků na vložení řádku.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Počet stránek obsahujících data (změněné i nezměněné).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Počet změněných stránek.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Počet stránek, na které je požadavek na vyprázdnění.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Počet volných stránek.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Počet zamčených stránek, tzn. stránek, které jsou právě zapisovány nebo čteny nebo nemohou být odstraněny z&nbsp;jakéhokoliv důvodu.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Počet stránek zablokovaných pro administrativní účely jako zamykání řádků nebo hashe indexů. Tato hodnota také může být vypočítána jako Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Celková velikost InnoDB bufferů, ve stránkách.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Počet provedených &bdquo;náhodných&ldquo; dopředných čtení. Tato situace nastává pokud dotaz prochází velkou část tabulky v&nbsp;náhodném pořadí.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Počet provedených sekvenčních dopředných čtení. Toto nastává pokud InnoDB musí procházet celou tabulku.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Počet provedených logických čtení.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Počet logických čtení, které nemohly být uspokojeny z&nbsp;bufferu, ale bylo nutné přečíst stránku ze souboru.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Počet čekání na zápis do InnoDB bufferů. Tyto zápisy obvykle probíhají na pozadí, ale pokud je nutné přečíst nebo vytvořit stránku a žádná volná není k&nbsp;dispozici, musí se čekat. Pokud je velikost bufferů nastavena správně, měla by tato hodnota být malá.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Počet zápisů provedených do InnoDB bufferu.';
$strShowStatusInnodb_data_fsyncsDescr = 'Počet provedených synchronizací.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Počet nevyřízených synchronizací.';
$strShowStatusInnodb_data_pending_readsDescr = 'Počet nevyřízených čtení.';
$strShowStatusInnodb_data_pending_writesDescr = 'Počet nevyřízených zápisů.';
$strShowStatusInnodb_data_readDescr = 'Velikost přečtených dat, v&nbsp;bajtech.';
$strShowStatusInnodb_data_readsDescr = 'Počet provedených čtení dat.';
$strShowStatusInnodb_data_writesDescr = 'Počet provedených zápisů dat.';
$strShowStatusInnodb_data_writtenDescr = 'Velikost zapsaných dat, v&nbsp;bajtech.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Počet provedených dvojitých zapsání a počet stránek, které byly takto zapsány.';
$strShowStatusInnodb_dblwr_writesDescr = 'Počet provedených dvojitých zapsání a počet stránek, které byly takto zapsány.';
$strShowStatusInnodb_log_waitsDescr = 'Počet čekání kvůli plnému bufferu logu, který musel být vyprázdněn před pokračováním.';
$strShowStatusInnodb_log_write_requestsDescr = 'Počet požadavků na zápis do logovacího souboru.';
$strShowStatusInnodb_log_writesDescr = 'Počet skutečných zápisů do logovacího souboru.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Počet synchronizací provedených na logovacích souborech.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Počet nevyřízených synchronizací logovacích souborů.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Počet nevyřízených zápisů do logovacích souborů.';
$strShowStatusInnodb_os_log_writtenDescr = 'Počet bajtů zapsaných do logovacího souboru.';
$strShowStatusInnodb_pages_createdDescr = 'Počet vytvořených stránek.';
$strShowStatusInnodb_page_sizeDescr = 'Zakompilovaná velikost stránky InnoDB (výchozí je 16 kB). Mnoho hodnot je uváděno ve stránkách, pomocí této hodnoty je můžete přepočítat na velikost.';
$strShowStatusInnodb_pages_readDescr = 'Počet přečtených stránek.';
$strShowStatusInnodb_pages_writtenDescr = 'Počet zapsaných stránek.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Počet zámků řádku, na které se v&nbsp;současné době čeká.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Průměrný čas potřebný pro získání zámku řádku, v&nbsp;milisekundách.';
$strShowStatusInnodb_row_lock_timeDescr = 'Celkový čas strávený čekáním na zámek řádku, v&nbsp;milisekundách.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Maximální čas potřebný pro získání zámku řádku, v&nbsp;milisekundách.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Kolikrát se muselo čekat na zámek řádku.';
$strShowStatusInnodb_rows_deletedDescr = 'Počet řádků odstraněných z&nbsp;InnoDB tabulek.';
$strShowStatusInnodb_rows_insertedDescr = 'Počet řádků vložených do InnoDB tabulek.';
$strShowStatusInnodb_rows_readDescr = 'Počet řádků přečtených z&nbsp;InnoDB tabulek.';
$strShowStatusInnodb_rows_updatedDescr = 'Počet řádků aktualizovaných v&nbsp;InnoDB tabulkách.';
$strShowStatusKey_blocks_not_flushedDescr = 'Počet bloků ve vyrovnávací paměti klíčů, které byly změněny, ale nebyly zapsány na disk. Dříve se tato hodnota jmenovala Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Počet nepoužitých bloků ve vyrovnávací paměti klíčů. Pomocí této hodnoty poznáte jak moc je vyrovnávací paměť využitá.';
$strShowStatusKey_blocks_usedDescr = 'Počet použitých bloků ve vyrovnávací paměti klíčů. Tato hodnota určuje maximum bloků, které kdy byly obsazeny najednou.';
$strShowStatusKey_read_requestsDescr = 'Počet požadavků na přečtení klíče z&nbsp;vyrovnávací paměti.';
$strShowStatusKey_readsDescr = 'Počet skutečných čtení bloku zklíče z&nbsp;disku. Pokud je hodnota příliš velká, pravděpodobně máte malou vyrovnávací paměť (key_buffer_size). Úspěšnost vyrovnávací paměti můžete spočítat jako Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Počet požadavků na zápis bloku klíče na disk.';
$strShowStatusKey_writesDescr = 'Počet skutečných zápisů bloku klíče na disk.';
$strShowStatusLast_query_costDescr = 'Celková cena posledního kompilovaného dotazu spočítaná optimalizátorem dotazů. Užitečné pro porovnání různých dotazů. Výchozí hodnota 0 znamená, že žádný dotaz ještě nebyl kompilován.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Počet řádků čekajících na zapsání ve frontě INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Celkem otevřených tabulek. Pokud je tato hodnota příliš vysoká, pravděpodobně máte malou vyrovnávací paměť pro tabulky.';
$strShowStatusOpen_filesDescr = 'Počet otevřených souborů.';
$strShowStatusOpen_streamsDescr = 'Počet otevřených streamů (používané převážně pro logování).';
$strShowStatusOpen_tablesDescr = 'Počet aktuálně otevřených tabulek.';
$strShowStatusQcache_free_blocksDescr = 'Počet volných bloků paměti ve vyrovnávací paměti dotazů.';
$strShowStatusQcache_free_memoryDescr = 'Velikost volné paměti ve vyrovnávací paměti dotazů.';
$strShowStatusQcache_hitsDescr = 'Počet zásahů vyrovnávací paměti dotazů.';
$strShowStatusQcache_insertsDescr = 'Počet dotazů přidaných do vyrovnávací paměti dotazů.';
$strShowStatusQcache_lowmem_prunesDescr = 'Počet dotazů odstraněných z&nbsp;vyrovnávací paměti dotazů aby uvolnily místo pro nové. Tato hodnota může pomoci v&nbsp;nastavení velikosti vyrovnávací paměti. Vyrovnávací paměť používá strategii LRU (nejdéle nepoužité) pro vyřazování dotazů z&nbsp;vyrovnávací paměti.';
$strShowStatusQcache_not_cachedDescr = 'Počet necachovaných dotazů (necachovatelných nebo necachovaných kvůli nastavení query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Počet dotazů ve vyrovnávací paměti dotazů.';
$strShowStatusQcache_total_blocksDescr = 'Celkový počet bloků ve vyrovnávací paměti dotazů.';
$strShowStatusReset = 'Vynulovat statistiky';
$strShowStatusRpl_statusDescr = 'Stav failsafe replikace.';
$strShowStatusSelect_full_joinDescr = 'Počet spojení, které nevyužívaly indexy. Pokud tato hodnota není 0, měli byste zkontrolovat indexy tabulek.';
$strShowStatusSelect_full_range_joinDescr = 'Počet spojení, které používaly intervalové vyhledávání na referenční tabulce.';
$strShowStatusSelect_range_checkDescr = 'Počet spojení bez klíčů, které kontrolovaly použití klíčů po každém řádku. Pokud tato hodnota není 0, měli byste zkontrolovat indexy tabulek.';
$strShowStatusSelect_rangeDescr = 'Počet spojení, které používaly intervalové vyhledávání na první tabulce. Tato hodnota obvykle není kritická i když je vysoká.';
$strShowStatusSelect_scanDescr = 'Počet spojení, které prováděly kompletní procházení první tabulky.';
$strShowStatusSlave_open_temp_tablesDescr = 'Počet dočasných tabulek v&nbsp;současné době otevřených podřízeným serverem.';
$strShowStatusSlave_retried_transactionsDescr = 'Celkový počet, kolikrát musel podřízený server opakovat transakce.';
$strShowStatusSlave_runningDescr = 'Tato položka je zapnutá, pokud server pracuje jako podřízený.';
$strShowStatusSlow_launch_threadsDescr = 'Počet vláken jejichž vytvoření trvalo déle než slow_launch_time sekund.';
$strShowStatusSlow_queriesDescr = 'Počet dotazů, které trvaly déle než long_query_time sekund.';
$strShowStatusSort_merge_passesDescr = 'Počet průchodů slučování, které musel provést řadicí algoritmus. Při příliš vysoké hodnotě zvažte zvýšení sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Počet řazení, které byly omezeny rozsahem.';
$strShowStatusSort_rowsDescr = 'Počet řazených řádek.';
$strShowStatusSort_scanDescr = 'Počet řazení provedených procházením tabulky.';
$strShowStatusTable_locks_immediateDescr = 'Počet okamžitých získání zámku tabulky.';
$strShowStatusTable_locks_waitedDescr = 'Počet čekání na získání zámku tabulky. Pokud je tato hodnota vysoká a máte problémy s&nbsp;výkonem, měli byste optimalizovat dotazy a případně rozdělit tabulky nebo použít replikaci.';
$strShowStatusThreads_cachedDescr = 'Počet vláken ve vyrovnávací paměti. Úspěšnost vyrovnávací paměti může být spočítána jako Threads_created/Connections. Pokud je tato hodnota červená, měli byste zvýšit thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Počet aktuálně otevřených připojení.';
$strShowStatusThreads_createdDescr = 'Počet vláken vytvořených pro obsluhu připojení. Pokud je hodnota příliš velká, můžete zvětšit parametr thread_cache_size. Na platformách, které mají dobrou implementaci vláken však toto nemá příliš velký vliv.';
$strShowStatusThreads_runningDescr = 'Počet vláken, která nespí.';
$strShowTableDimension = 'Rozměry tabulek';
$strShowTables = 'Zobrazit tabulky';
$strShowThisQuery = 'Zobrazit zde tento dotaz znovu';
$strShow = 'Zobrazit';
$strSimplifiedChinese = 'Zjednodušená čínština';
$strSingly = '(po jednom)';
$strSize = 'Velikost';
$strSkipQueries = 'Počet záznamů (dotazů) od začátku, které se mají přeskočit';
$strSlovak = 'Slovenština';
$strSlovenian = 'Slovinština';
$strSmallBigAll = 'Vše malé/velké';
$strSnapToGrid = 'Zachytávat na mřížku';
$strSocketProblem = '(nebo není správně nastaven lokální socket MySQL serveru)';
$strSortByKey = 'Setřídit podle klíče';
$strSorting = 'Řazení';
$strSort = 'Řadit';
$strSpaceUsage = 'Využití místa';
$strSpanish = 'Španělština';
$strSplitWordsWithSpace = 'Slova jsou oddělena mezerou (&bdquo; &ldquo;).';
$strSQLCompatibility = 'Režim kompatibility SQL';
$strSQLExportType = 'Typ vytvořených dotazů';
$strSQLParserBugMessage = 'Je možné, že jste našli chybu v&nbsp;SQL parseru. Prosím prozkoumejte podrobně SQL dotaz, především jestli jsou správně uvozovky a jestli nejsou proházené. Další možnost selhání je pokud nahráváte soubor s&nbsp;binárními daty nezapsanými v&nbsp;uvozovkách. Můžete také vyzkoušet příkazovou řádku MySQL. Níže uvedený výstup z&nbsp;MySQL serveru (pokud je nějaký) vám také může pomoci při zkoumání problému. Pokud stále máte problémy nebo pokud SQL parser ohlásí chybu u&nbsp;dotazu, který na příkazové řádce funguje, prosím pokuste se zredukovat dotaz na co nejmenší, ve kterém se problém ještě vyskytne, a ohlaste chybu na stránkách phpMyAdmina spolu se sekcí VÝPIS uvedenou níže:';
$strSQLParserUserError = 'Pravděpodobně máte v&nbsp;SQL dotazu chybu. Níže uvedený výstup MySQL serveru (pokud je nějaký) vám také může pomoci při zkoumání problému';
$strSQLQuery = 'SQL-dotaz';
$strSQLResult = 'Výsledek SQL dotazu';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Chybný identifikátor';
$strSQPBugUnclosedQuote = 'Neuzavřené uvozovky';
$strSQPBugUnknownPunctuation = 'Neznámé interpunkční znaménko';
$strStandInStructureForView = 'Zástupná struktura pro pohled';
$strStatCheckTime = 'Poslední kontrola';
$strStatCreateTime = 'Vytvoření';
$strStatement = 'Údaj';
$strStatisticsOverrun = 'Na hodně zatíženém serveru mohou čítače přetéct, takže statistiky MySQL serveru mohou být nepřesné.';
$strStatUpdateTime = 'Poslední změna';
$strStatus = 'Stav';
$strStorageEngines = 'Úložiště';
$strStorageEngine = 'Úložiště';
$strStrucCSV = 'CSV';
$strStrucData = 'Strukturu a data';
$strStrucExcelCSV = 'CSV pro MS Excel';
$strStrucNativeExcel = 'Nativní formát MS Excelu';
$strStrucOnly = 'Pouze strukturu';
$strStructPropose = 'Navrhnout strukturu tabulky';
$strStructureForView = 'Struktura pro pohled';
$strStructure = 'Struktura';
$strSubmit = 'Provést';
$strSuccess = 'Váš SQL-dotaz byl úspěšně vykonán';
$strSuhosin = 'Server používá Suhosin. Prosím podívejte se do %sdokumentace%s pro popis problémů, které tím mohou být způsobeny.';
$strSum = 'Celkem';
$strSwedish = 'Švédština';
$strSwitchToDatabase = 'Přepnout na zkopírovanou databázi';
$strSwitchToTable = 'Přepnout na zkopírovanou tabulku';

$strTableAlreadyExists = 'Tabulka %s již existuje!';
$strTableComments = 'Komentář k&nbsp;tabulce';
$strTableEmpty = 'Jméno tabulky je prázdné!';
$strTableHasBeenDropped = 'Tabulka %s byla odstraněna';
$strTableHasBeenEmptied = 'Tabulka %s byla vyprázdněna';
$strTableHasBeenFlushed = 'Vyrovnávací paměť pro tabulku %s byla vyprázdněna';
$strTableIsEmpty = 'Tabulka se zdá být prázdná!';
$strTableMaintenance = ' Údržba tabulky ';
$strTableName = 'Jméno tabulky';
$strTableOfContents = 'Obsah';
$strTableOptions = 'Parametry tabulky';
$strTables = '%s tabulek';
$strTableStructure = 'Struktura tabulky';
$strTable = 'Tabulka';
$strTakeIt = 'zvolit';
$strTblPrivileges = 'Oprávnění pro jednotlivé tabulky';
$strTempData = 'Dočasná data';
$strTextAreaLength = 'Tento sloupec možná nepůjde <br />(kvůli délce) upravit ';
$strThai = 'Thajština';
$strThemeDefaultNotFound = 'Výchozí vzhled %s nebyl nalezen!';
$strThemeNoPreviewAvailable = 'Náhled není k&nbsp;dispozici.';
$strThemeNotFound = 'Vzhled %s nebyl nalezen!';
$strThemeNoValidImgPath = 'Nebyla nalezena platná cesta k obrázkům pro vzhled %s!';
$strThemePathNotFound = 'Nebyla nalezena platná cesta k vzhledu %s!';
$strTheme = 'Vzhled';
$strThisHost = 'Tento počítač';
$strThreads = 'Počet vláken';
$strThreadSuccessfullyKilled = 'Vlákno %s bylo úspěšně zabito.';
$strTime = 'Čas';
$strTimeoutInfo = 'Předchozí ímport vyčerpal veškerý čas, po dalším odeslání bude import pokračovat od pozice %d.';
$strTimeoutNothingParsed = 'Bohužel během posledního pokusu nebyla žádná data načtena. Toto obvykle znamená, že phpMyAdmin nebude schopen načíst tento soubor, pokud nezvýšíte časové limity v&nbsp;PHP.';
$strTimeoutPassed = 'Limit pro běh importu vypršel, prosím odešlete formulář znovu se stejným souborem a import bude pokračovat.';
$strToFromPage = 'do/ze stránky';
$strToggleScratchboard = 'Zobrazit grafický návrh';
$strToggleSmallBig = 'Přepnout malé/velké';
$strToSelectRelation = 'Pro výběr relace klikněte :';
$strTotal = 'celkem';
$strTotalUC = 'Celkem';
$strTraditionalChinese = 'Tradiční čínština';
$strTraditionalSpanish = 'Tradiční španělština';
$strTraffic = 'Provoz';
$strTransactionCoordinator = 'Koordinátor transakcí';
$strTransformation_application_octetstream__download = 'Zobrazí odkaz na stáhnutí dat. První parametr je jméno souboru, druhý jméno sloupce v&nbsp;tabulce obsahující jméno souboru. Pokud zadáte druhý parametr, první musí být prázdný.';
$strTransformation_application_octetstream__hex = 'Zobrazí data šestnáctkově. Nepovinný parametr určuje po kolika znacích má být přidána mezera (výchozí hodnota je 2).';
$strTransformation_image_jpeg__inline = 'Zobrazí náhled obrázku s&nbsp;odkazem na obrázek; parametry šířka a výška v&nbsp;bodech (poměr stran obrázku zůstane zachován)';
$strTransformation_image_jpeg__link = 'Zobrazí odkaz na obrázek (například stáhnutí pole blob).';
$strTransformation_image_png__inline = 'Viz image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Zobrazí datum nebo čas (TIME, TIMESTAMP, DATETIME nebo unixový timestamp v numerickém sloupci). První parametr je posun (v&nbsp;hodinách), který bude přidán k&nbsp;času (výchozí je 0). Druhý parametr je formátovací řetězec. Třetí určuje jestli chcete zobrazit datum podle místního nastavení nebo UTC čas (použijte text "local" nebo "utc"). Podle tohoto nastavení, formát má buďto syntaxi funkce strftime() pokud použijete "local" nebo pro gmtime() pokud použijete "utc".';
$strTransformation_text_plain__external = 'JEN PRO LINUX: Spustí externí program, na jeho standardní vstup pošle obsah pole a zobrazí výstup programu. Výchozí je program Tidy, který pěkně zformátuje HTML. Z&nbsp;bezpečnostních důvodů musíte jména povolených programů zapsat do souboru libraries/transformations/text_plain__external.inc.php. První parametr je číslo programu, který má být spuštěn a druhý parametr udává parametry tohoto programu. Třetí parametr určuje, zda mají být ve výstupu nahrazeny HTML entity (např. pro zobrazení zdrojového kódu HTML) (výchozí je 1, tedy převádět na entity), čtvrtý (při nastavení na 1) zajistí přidání parametru NOWRAP k&nbsp;vypisovanému textu, čímž se zachová formátování (výchozí je 1).';
$strTransformation_text_plain__formatted = 'Zachová původní formátování sloupce, tak jak je uložen v&nbsp;databázi.';
$strTransformation_text_plain__imagelink = 'Zobrazí obrázek a odkaz z&nbsp;pole obsahujícího odkaz na obrázek. První parametr je prefix URL (například &bdquo;http://mojedomena.cz/&ldquo;), druhý a třetí určuje šířku a výšku obrázku.';
$strTransformation_text_plain__link = 'Zobrazí odkaz z&nbsp;pole obsahujícího odkaz. První parametr je prefix URL (například &bdquo;http://mojedomena.cz/&ldquo;), druhý text odkazu.';
$strTransformation_text_plain__sql = 'Zobrazí text jako SQL dotaz se zvýrazňováním syntaxe.';
$strTransformation_text_plain__substr = 'Zobrazí jen část textu. První parametr je posun od začátku (výchozí je 0) a druhý určuje délku textu, který se má zobrazit, pokud není uveden, bude zobrazen zbytek textu. Třetí parametr určuje, jaký text má být přidán za zkrácený text (výchozí je ...).';
$strTriggers = 'Spouště';
$strTruncateQueries = 'Zobrazit zkrácené dotazy';
$strTurkish = 'Turecky';
$strType = 'Typ';

$strUkrainian = 'Ukrajinština';
$strUncheckAll = 'Odškrtnout vše';
$strUnicode = 'Unicode';
$strUnique = 'Unikátní';
$strUnknown = 'neznámý';
$strUnselectAll = 'Odznačit vše';
$strUnsupportedCompressionDetected = 'Pokusili jste se importovat soubor s&nbsp;nepodporovanou kompresí (%s). Buďto podpora není implementována nebo je vypnuta ve vaší konfiguraci.';
$strUpdatePrivMessage = 'Byla aktualizována oprávnění pro %s.';
$strUpdateProfileMessage = 'Přístup byl změněn.';
$strUpdateQuery = 'Aktualizovat dotaz';
$strUpdComTab = 'Podívejte se prosím do dokumentace, jak aktualizovat tabulku s&nbsp;informacemi o&nbsp;sloupcích (tabulka column_comments)';
$strUpgrade = 'Měli byste aktualizovat %s na verzi %s nebo vyšší.';
$strUploadErrorCantWrite = 'Chyba při zapisování souboru na disk.';
$strUploadErrorExtension = 'Nahrávání souboru zastaveno rozšířením.';
$strUploadErrorFormSize = 'Velikost nahraného souboru přesahuje hodnotu MAX_FILE_SIZE, která byla zadána v HTML formuláři.';
$strUploadErrorIniSize = 'Velikost nahraného souboru přesahuje nastavení upload_max_filesize v php.ini.';
$strUploadErrorNoTempDir = 'Chybějící adresář pro dočasné soubory.';
$strUploadErrorPartial = 'Soubor byl nahrán jen částečně.';
$strUploadErrorUnknown = 'Neznámá chyba při nahrávání souboru.';
$strUploadLimit = 'Pravděpodobně jste se pokusili nahrát příliš velký soubor. Přečtěte si prosím %sdokumentaci%s, jak toto omezení obejít.';
$strUploadsNotAllowed = 'Upload souborů není na tomto serveru povolen.';
$strUsage = 'Používá';
$strUseBackquotes = 'Použít zpětné uvozovky u&nbsp;jmen tabulek a sloupců';
$strUsedPhpExtensions = 'Použitá rozšíření PHP';
$strUseHostTable = 'Použít tabulku s&nbsp;počítači';
$strUserAlreadyExists = 'Uživatel %s již existuje!';
$strUserEmpty = 'Jméno uživatele je prázdné!';
$strUserName = 'Jméno uživatele';
$strUserNotFound = 'Zvolený uživatel nebyl nalezen v&nbsp;tabulce oprávnění.';
$strUserOverview = 'Přehled uživatelů';
$strUsersDeleted = 'Vybraní uživatelé byli úspěšně odstraněni.';
$strUsersHavingAccessToDb = 'Uživatelé mající přístup k&nbsp;&bdquo;%s&ldquo;';
$strUser = 'Uživatel';
$strUseTabKey = 'Použijte klávesu TAB pro pohyb mezi hodnotami nebo CTRL+šipky po pohyb všemi směry.';
$strUseTables = 'Použít tabulky';
$strUseTextField = 'Použít textové pole';
$strUseThisValue = 'Použít tuto hodnotu';

$strValidateSQL = 'Zkontrolovat SQL';
$strValidatorError = 'SQL validátor nemohl být inicializován. Prosím zkontrolujte, jestli máte požadovaná rozšíření PHP, která jsou uvedena v&nbsp;%sdokumentaci%s.';
$strValue = 'Hodnota';
$strVar = 'Proměnná';
$strVersionInformation = 'Informace o&nbsp;verzi';
$strViewDumpDatabases = 'Export databází';
$strViewDumpDB = 'Export databáze';
$strViewDump = 'Export tabulky';
$strViewHasBeenDropped = 'Pohled %s byl odstraněn';
$strViewMaxExactCount = 'Tento pohled má více než %d záznamů. Viz %sdokumentace%s.';
$strViewName = 'Jméno pohledu';
$strView = 'Pohled';

$strWebServerUploadDirectoryError = 'Adresář určený pro upload souborů nemohl být otevřen';
$strWebServerUploadDirectory = 'soubor z&nbsp;adresáře pro upload';
$strWelcome = 'Vítejte v&nbsp;%s';
$strWestEuropean = 'Západní Evropa';
$strWildcard = 'maska';
$strWindowNotFound = 'Cílové okno prohlížeče nemohlo být aktualizováno. Možná jste zavřel rodičovské okno, nebo prohlížeč blokuje operace mezi okny z&nbsp;důvodu bezpečnostních nastavení.';
$strWithChecked = 'Zaškrtnuté:';
$strWriteRequests = 'Požadavků na čtení';
$strWrongUser = 'Špatné uživatelské jméno nebo heslo. Přístup odepřen.';

$strXML = 'XML';

$strYes = 'Ano';

$strZeroRemovesTheLimit = 'Poznámka: Nastavení těchto parametrů na 0 (nulu) odstraní omezení.';
$strZip = '&bdquo;zazipováno&ldquo;';

?>

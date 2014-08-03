<?php

// Peter Bakondy <bakondyp@freemail.hu>
// Mihály Mészáros <poizon at sth dot sze dot hu>

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr': balról jobbra, 'rtl': jobbról balra)
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
// Byte, Kilo, Mega, Giga, Tera, Peta, Exa rövidítései
$byteUnits = array('Bájt', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('V', 'H', 'K', 'Sze', 'Cs', 'P', 'Szo');
$month = array('Jan', 'Feb', 'Márc', 'Ápr', 'Máj', 'Jún', 'Júl', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');
// Leírás a $datefmt változó definiálásához:
// http://www.php.net/manual/en/function.strftime.php
$datefmt = '%Y. %B %d. %H:%M';

$timespanfmt = '%s nap, %s óra, %s perc, %s másodperc';

$strAbortedClients = 'Megszakítva';
$strAccessDeniedExplanation = 'A phpMyAdmin megpróbált csatlakozni a MySQL szerverhez, de a szerver elutasította a kapcsolatot. Ellen&#337;rizze a host, username és jelszó mez&#337;ket a config.inc.php fájlban, és bizonyosodjon meg róla, hogy ezek megfelelnek a MySQL szerver adminisztrátorától kapott információknak.';
$strAccessDenied = 'Hozzáférés megtagadva';
$strAction = 'Parancs';
$strAddAutoIncrement = 'AUTO_INCREMENT érték hozzáadása';
$strAddClause = '%s hozzáadása';
$strAddConstraints = 'Megszorítás hozzáadása';
$strAddDeleteColumn = 'Mez&#337; oszlopokat hozzáad/töröl';
$strAddDeleteRow = 'Kritérium sort hozzáad/töröl';
$strAddFields = '%s mez&#337; hozzáadása';
$strAddHeaderComment = 'Egyedi megjegyzés hozzáadása a fejléchez (\\n töri a sorokat)';
$strAddIntoComments = 'Hozzáadás a megjegyzéshez';
$strAddNewField = 'Új mez&#337; hozzáadása';
$strAddPrivilegesOnDb = 'Privilégiumok hozzáadása a következ&#337; adatbázison';
$strAddPrivilegesOnTbl = 'Privilégiumok hozzáadása a következ&#337; táblán:';
$strAddSearchConditions = 'Keresési feltételek megadása (WHERE feltételek):';
$strAddToIndex = 'adj az indexhez %s oszlopot';
$strAddUser = 'Új felhasználó hozzáadása';
$strAddUserMessage = 'Az új felhasználót felvettem.';
$strAdministration = 'Adminisztráció';
$strAffectedRows = 'Keresett sorok:';
$strAfterInsertBack = 'vissza az el&#337;z&#337; oldalra';
$strAfterInsertNewInsert = 'új sor beszúrása';
$strAfterInsertNext = 'Következ&#337; sor szerkesztése';
$strAfterInsertSame = 'Visszatérés az oldalra';
$strAfter = '%s után';
$strAll = 'Mind';
$strAllowInterrupt = 'Engedélyezi az import megszakítását, ha a script észleli, hogy közel van az id&#337;limithez. Jól jöhet nagy fájlok importjakor, mivel meg tudja szakítani a tranzakciót.';
$strAllTableSameWidth = 'Minden tábla ezzel a szélességgel jelenjen meg?';
$strAlterOrderBy = 'Tábla megváltozása rendezve e szerint:';
$strAnalyzeTable = 'Tábla vizsgálat';
$strAnd = 'És';
$strAndThen = 'és utána';
$strAnIndex = 'Indexet hozzáadtam: %s';
$strAny = 'Bármely';
$strAnyHost = 'Bármely hoszt';
$strAnyUser = 'Bármely felhasználó';
$strApproximateCount = 'Becsült érték lehet. Lásd: FAQ 3.11';
$strAPrimaryKey = 'Els&#337;dleges kulcsot hozzáadtam: %s';
$strArabic = 'Arab';
$strArmenian = 'Örmény';
$strAscending = 'Növekv&#337;';
$strAtBeginningOfTable = 'A tábla elejénél';
$strAtEndOfTable = 'A tábla végénél';
$strAttr = 'Tulajdonságok';
$strAutomaticLayout = 'Automatikus elrendezés';

$strBack = 'Vissza';
$strBaltic = 'Balti';
$strBeginCut = 'Kivágás Kezdete';
$strBeginRaw = 'Feldolgozatlan Kezdete';
$strBinary = 'Bináris';
$strBinaryDoNotEdit = 'Bináris - nem szerkeszthet&#337;';
$strBinaryLog = 'Bináris napló';
$strBinLogEventType = 'Esemény típusa';
$strBinLogInfo = 'Információ';
$strBinLogName = 'Napló neve';
$strBinLogOriginalPosition = 'Eredeti pozíció';
$strBinLogPosition = 'Pozíció';
$strBinLogServerId = 'Szerver ID';
$strBookmarkAllUsers = 'Az összes felhasználónak engedélyezi a hozzáférést ehhez a könyvjelz&#337;höz';
$strBookmarkCreated = '%s könyvjelz&#337; elkészült';
$strBookmarkDeleted = 'A könyvjelz&#337;t töröltem.';
$strBookmarkLabel = 'Felirat';
$strBookmarkQuery = 'Feljegyzett SQL-kérés';
$strBookmarkReplace = 'Azonos nev&#369; könyvjelz&#337; felülírása';
$strBookmarkThis = 'Jegyezd fel az SQL-kérést';
$strBookmarkView = 'Csak megnézhet&#337;';
$strBrowseDistinctValues = 'Különböz&#337; értékek böngészése';
$strBrowseForeignValues = 'Idegen kulcsok böngészése';
$strBrowse = 'Tartalom';
$strBufferPoolActivity = 'Puffer tevékenység';
$strBufferPool = 'Puffer';
$strBufferPoolUsage = 'Puffer kihasználtsága';
$strBufferReadMisses = 'Olvasási hibák';
$strBufferWriteWaits = 'Írási várakozások';
$strBulgarian = 'Bolgár';
$strBzError = 'A phpMyAdmin nem tudta betömöríteni a dump-ot, mert nem megfelel&#337; a Bz2 kiterjesztés ebben a php verzióban. Er&#337;sen ajánlott a <code>$cfg[\'BZipDump\']</code> paramétert a phpMyAdmin konfigurációs fájlban <code>FALSE</code> értékre beállítani. Ha a Bz2 tömörítési eljárást használni szeretné, frissítse a php-t! Tekintse meg a %s php bug report-ot a részletekért.';
$strBzip = '"bzip-pel tömörítve"';

$strCalendar = 'Naptár';
$strCancel = 'Mégse';
$strCannotLogin = 'A belépés a MySQL szerverre sikertelen volt';
$strCantLoad = 'nem tudtam betölteni a %s kiterjesztést, ellen&#337;rizd a PHP konfigurációt';
$strCantLoadRecodeIconv = 'Nem tudom betölteni az iconv vagy recode kiterjesztést a karakterkészlet-átalakításhoz, állítsd be a php-t, hogy engedélyezze ezeket a kiterjesztéseket vagy tiltsd le a karakterkészlet-átalakítást a phpMyAdmin-ban.';
$strCantRenameIdxToPrimary = 'Nem tudom átnevezni az indexet PRIMARY-vá!';
$strCantUseRecodeIconv = 'Nem tudom használni az iconv, libiconv sem a recode_string funkciókat mialatt a kiterjesztés-jelentéseket be kell tölteni. Ellen&#337;rizd a php konfigurációt.';
$strCardinality = 'Számosság';
$strCaseInsensitive = 'bet&#369;nagyságra nem érzékeny';
$strCaseSensitive = 'bet&#369;nagyság-érzékeny';
$strCentralEuropean = 'Közép-európai';
$strChangeCopyModeCopy = '... a régi meg&#337;rzése.';
$strChangeCopyModeDeleteAndReload = ' ... a régi törlése a felhasználói táblákból, és utána a privilégiumok újratöltése.';
$strChangeCopyMode = 'Új felhasználó hozzáadása ezekkel a privilégiumokkal ...';
$strChangeCopyModeJustDelete = ' ... a régi törlése a felhasználói táblákból.';
$strChangeCopyModeRevoke = ' ... az összes aktív privilégium visszaállítása a régib&#337;l, és utána törlésük.';
$strChangeCopyUser = 'Belépési információ megváltoztatása / Felhasználó másolása';
$strChangeDisplay = 'Válassz mez&#337;t a megjelenítéshez';
$strChangePassword = 'Jelszó megváltoztatása';
$strChange = 'Változtat';
$strCharset = 'Karakterkészlet';
$strCharsetOfFile = 'A fájl karakterkészlete:';
$strCharsetsAndCollations = 'Karakterkészletek és egybevetések';
$strCharsets = 'Karakterkészlet';
$strCheckAll = 'Összeset kijelöli';
$strCheckOverhead = 'Ellen&#337;rzés felfüggesztése';
$strCheckPrivsLong = 'Privilégiumok ellen&#337;rzése &quot;%s&quot; adatbázison.';
$strCheckPrivs = 'Privilégiumok ellen&#337;rzése';
$strCheckTable = 'Tábla ellen&#337;rzés';
$strChoosePage = 'Válassz oldalt a szerkesztéshez';
$strColComFeat = 'Oszlop megjegyzések megjelenítése';
$strCollation = 'Egybevetés';
$strColumnNames = 'Oszlop nevek';
$strColumnPrivileges = 'Oszlop-specifikus privilégiumok';
$strCommand = 'Parancs';
$strCommentsForTable = 'Tábla-megjegyzések';
$strComments = 'Megjegyzések';
$strCompatibleHashing = 'MySQL&nbsp;4.0 kompatibilis';
$strCompleteInserts = 'Mez&#337;neveket is hozzáadja';
$strCompression = 'Tömörítés';
$strConfigDefaultFileError = 'Nem lehet betölteni az alap konfigurációt innen: "%1$s"';
$strConfigFileError = 'A phpMyAdmin nem tudja olvasni a konfigurációs fájlt! Lehet, hogy a php szintaktikai hibát talált benne, vagy nem találja a fájlt. Használd az alsó linket a konfigurációs fájl helyreállításához, olvasd el a kapott php hibaüzeneteket. Többnyire egy idéz&#337;jel vagy egy pontosvessz&#337; hiányzik valahol. Ha üres oldalt kapsz, minden rendben.';
$strConfigureTableCoord = 'Állítsd be a(z) $s tábla koordinátáit';
$strConnectionError = 'Nem sikerült a csatlakozás: érvénytelen beállítások.';
$strConnections = 'Kapcsolat';
$strConstraintsForDumped = 'Kikötések a kiírt táblákhoz';
$strConstraintsForTable = 'Kikötések a táblához';
$strCookiesRequired = 'A Cookie-kat most engedélyezned kell.';
$strCopyDatabaseOK = '%s adatbázis átmásolva ide: %s';
$strCopy = 'Másolás';
$strCopyTableOK = '%s táblát ide másoltam: %s.';
$strCopyTableSameNames = 'Nem tudom a táblát ugyanarra másolni!';
$strCopyTable = 'Tábla másolása ide (adatbázis<b>.</b>tábla):';
$strCouldNotKill = 'phpMyAdmin nem tudta megszüntetni ez a szálat: %s. Meglehet, már véget ért.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE másolás el&#337;tt';
$strCreateIndex = 'Készíts egy indexet a(z) %s. oszlopon';
$strCreateIndexTopic = 'Új index létrehozása';
$strCreate = 'Létrehoz';
$strCreateNewDatabase = 'Új adatbázis létrehozása';
$strCreateNewTable = 'Új tábla létrehozása a(z) %s adatbázisban';
$strCreatePage = 'Új oldal készítése';
$strCreatePdfFeat = 'PDF készítése';
$strCreateTable  = 'Tábla létrehozása';
$strCreationDates = 'Dátum Készítés/Módosítás/Ellen&#337;rzés';
$strCriteria = 'Kritérium';
$strCroatian = 'Horvát';
$strCSV = 'CSV';
$strCyrillic = 'Cirill';
$strCzech = 'Cseh';
$strCzechSlovak = 'Szlovák';

$strDanish = 'Dán';
$strData = 'Adat';
$strDatabase = 'Adatbázis';
$strDatabaseEmpty = 'Az adatbázis néz mez&#337; üres!';
$strDatabaseExportOptions = 'Adatbázis export beállítások';
$strDatabaseHasBeenDropped = '%s adatbázist eldobtam.';
$strDatabases = 'Adatbázisok';
$strDatabasesDropped = '%s adatbázist sikeresen töröltem.';
$strDatabasesStats = 'Adatbázis statisztika';
$strDatabasesStatsDisable = 'Statisztika tiltása';
$strDatabasesStatsEnable = 'Statisztika engedélyezése';
$strDatabasesStatsHeavyTraffic = 'Megjegyzés: az adatbázis statisztika engedélyezése nagy adatforgalomhoz vezethet a webszerver és a MySQL között.';
$strDataDict = 'Adatkönyvtár';
$strDataOnly = 'Csak adatok';
$strDataPages = 'Adatokat tartalmazó lapok';
$strDBComment = 'Adatbázis megjegyzés: ';
$strDBCopy = 'Adatbázis másolása ide';
$strDbPrivileges = 'Adatbázis-specifikus privilégiumok';
$strDBRename = 'Adatbázis átnevezése';
$strDbSpecific = 'adatbázis-specifikus';
$strDefault = 'Alapértelmezett';
$strDefaultEngine = '%s az alapértelmezett tárolómotor ezen a MySQL szerveren.';
$strDefaultValueHelp = 'Az alapértelmezett értékekhez írjon be egy egyszer&#369; értéket, escape karakter és idéz&#337;jelek nélkül, ezt a formátumot követve: a';
$strDefragment = 'Tábla töredezettségmentesítése';
$strDelayedInserts = 'Id&#337;zített beszúrás használata';
$strDeleteAndFlushDescr = 'Ez a legtisztább út, de a privilégiumok újratöltése eltarthat egy ideig.';
$strDeleteAndFlush = 'Törölje a felhasználót, azután töltse be újra a privilégiumokat.';
$strDeleted = 'A sort töröltem';
$strDeletedRows = 'Törölt sorok:';
$strDeleteNoUsersSelected = 'Nincs törlésre kijelölt felhasználó!';
$strDelete = 'Töröl';
$strDeleting = '%s törlése';
$strDelimiter = 'Elválasztó';
$strDelOld = 'A jelenlegi oldalon a táblahivatkozások már nem élnek. Akarja ezeket törölni?';
$strDescending = 'Csökken&#337;';
$strDescription = 'Leírás';
$strDesigner = 'Tervez&#337;';
$strDictionary = 'szótár';
$strDirtyPages = 'Piszkos lapok';
$strDisabled = 'Tiltott';
$strDisableForeignChecks = 'Idegen kulcsok ellen&#337;rzésének letiltása';
$strDisplayFeat = 'Megjelenítés tulajdonságok';
$strDisplayOrder = 'Megjelenítés rendezés:';
$strDisplayPDF = 'PDF séma kijelzése';
$strDoAQuery = 'Csinálj egy "lekérdezést" (helyettesít&#337; karakter: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentáció';
$strDoYouReally = 'Biztos ez akarod? ';
$strDropDatabaseStrongWarning = 'Ki akarod törölni az EGÉSZ adatbázist?';
$strDrop = 'Eldob';
$strDropUsersDb = 'Azon adatbázisok törlése, amelyek neve egyezik a felhasználókkal.';
$strDumpingData = 'Tábla adatok:';
$strDumpSaved = 'A kiírást elmetettem ebbe a fájlba: %s.';
$strDumpXRows = '%s sor kiírása a %s. sorral kezd&#337;dik';
$strDynamic = 'dinamikus';

$strEditPDFPages = 'PDF oldalak szerkesztése';
$strEditPrivileges = 'Privilégiumok szerkesztése';
$strEdit = 'Szerkeszt';
$strEffective = 'Hatályos';
$strEmpty = 'Kiürít';
$strEmptyResultSet = 'A MySQL üreset adott vissza (nincsenek sorok).';
$strEnabled = 'Engedélyezett';
$strEncloseInTransaction = 'Export lezárása a tranzakcióban';
$strEndCut = 'Kivágás Vége';
$strEndRaw = 'Feldolgozatlan Vége';
$strEnd = 'Vége';
$strEngineAvailable = '%s elérhet&#337; ezen a MySQL szerveren.';
$strEngineDisabled = '%s le van tiltva ezen a MySQL szerveren.';
$strEngines = 'Motorok';
$strEngineUnsupported = 'Ez a MySQL szerver nem támogatja a(z) %s tárolómotrot.';
$strEnglish = 'Angol';
$strEnglishPrivileges = ' Megjegyzés: a MySQL privilégium nevek az angolból származnak.';
$strError = 'Hiba';
$strErrorInZipFile = 'Hiba a ZIP archívumban:';
$strEsperanto = 'Eszperanto';
$strEstonian = 'Észt';
$strEvent = 'Esemény';
$strExcelEdition = 'Excel szerkesztés';
$strExecuteBookmarked = 'Elmentett eljárás futtatása';
$strExplain = 'SQL magyarázat';
$strExport = 'Export';
$strExtendedInserts = 'Kiterjesztett beszúrások';
$strExtra = 'Extra';

$strFailedAttempts = 'Hibás próbálkozás';
$strFieldHasBeenDropped = '%s mez&#337;t eldobtam';
$strFieldInsertFromFileTempDirNotExists = 'Nem sikerült a feltöltött fájl áthelyezése, lásd: FAQ 1.11';
$strField = 'Mez&#337;';
$strFieldsEnclosedBy = 'Mez&#337; lezárás';
$strFieldsEscapedBy = 'Mez&#337; escape karakter';
$strFields = 'Mez&#337;k száma';
$strFieldsTerminatedBy = 'Mez&#337; vége';
$strFileAlreadyExists = '%s fájl már létezik a szerveren, változtassa meg a fájlnevet, vagy állítsa be a felülírás opciót!';
$strFileCouldNotBeRead = 'A fájl nem olvasható';
$strFileNameTemplateDescriptionDatabase = 'adatbázis név';
$strFileNameTemplateDescriptionServer = 'szerver név';
$strFileNameTemplateDescriptionTable = 'tábla név';
$strFileNameTemplateRemember = 'emlékezzen az átmeneti névre';
$strFileNameTemplate = 'Átmeneti fájlnév';
$strFiles = 'Fájlok';
$strFileToImport = 'Importálandó fájl';
$strFixed = 'rögzített';
$strFlushPrivilegesNote = 'Megjegyzés: a phpMyAdmin a felhasználói privilégiumokat közvetlenül a MySQL privilégium táblákból veszi. Ezen táblák tartalma eltérhet a szerver privilégiumoktól, ha ezt kézzel beállítottuk. Ebben az esetben érdemes %sújra betölteni a privilégiumokat%s a folytatás el&#337;tt.';
$strFlushQueryCache = 'Lekérdezés cache kiírása';
$strFlushTables = 'Összes tábla kirása (bezárása)';
$strFlushTable = 'Tábla kiírása (FLUSH)';
$strFontSize = 'Bet&#369;méret';
$strForeignKeyError = 'Nem sikerült az idegen kulcs létrehozása (ellen&#337;rizd az adattípusokat)';
$strFormat = 'Formátum';
$strFormEmpty = 'Hiányzó adat a form-ban!';
$strFreePages = 'Szabad lapok';
$strFullText = 'Teljes Szövegek';
$strFunction = 'Funkció';

$strGenBy = 'Készítette';
$strGeneralRelationFeat = 'Általános relációs jellemz&#337;k';
$strGenerate = 'Generálás';
$strGeneratePassword = 'Jelszó generálás';
$strGenTime = 'Létrehozás ideje';
$strGeorgian = 'Grúz';
$strGerman = 'Német';
$strGlobal = 'globális';
$strGlobalPrivileges = 'Globális privilégiumok';
$strGlobalValue = 'Globális változó';
$strGo = 'Végrehajt';
$strGrantOption = 'Grant';
$strGreek = 'Görög';
$strGzip = '"gzip-pel tömörítve"';

$strHasBeenAltered = 'megváltozott.';
$strHasBeenCreated = 'megszületett.';
$strHaveToShow = 'Legalább egy oszlopot választanod kell a megjelenítéshez';
$strHebrew = 'Héber';
$strHelp = 'Segítség';
$strHide         = 'Elrejtés';
$strHome = 'Kezd&#337;lap';
$strHomepageOfficial = 'Hivatalos phpMyAdmin honlap';
$strHostEmpty = 'A hosztnév üres!';
$strHost = 'Hoszt';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Magyar';

$strIcelandic = 'Izlandi';
$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIgnoreDuplicates = 'Egyez&#337; sorok figyelmen kívül hagyása';
$strIgnore = 'Elutasít';
$strIgnoreInserts = 'Mell&#337;z&#337; beszúrások használata';
$strImportFiles = 'Fájlok importja';
$strImportFormat = 'Importálandó fájl formátuma';
$strImport = 'Import';
$strImportSuccessfullyFinished = 'Az import sikeresen befejez&#337;dött, %d lekérdezés végrehajtva.';
$strIndexes = 'Indexek';
$strIndexHasBeenDropped = '%s indexet eldobtam';
$strIndex = 'Index';
$strIndexName = 'Index név:';
$strIndexType = 'Index típus:';
$strIndexWarningTable = 'Probléma a(z) `%s` tábla indexeivel';
$strInnoDBDataFilePath = 'Adat fájlok';
$strInnoDBPages = 'lapok';
$strInnodbStat = 'InnoDB állapot';
$strInsecureMySQL = 'A konfigurációs fájl beállítása (root hozzáférés jelszó nélkül) az alapértelmezett MySQL beállítás. A MySQL szerver most ezzel fut, ami alkalmat ad a betörésre. Sürg&#337;sen javítani kell ezt a biztonsági rést.';
$strInsertAsNewRow = 'Beszúrás új sorként';
$strInsert = 'Beszúr';
$strInsertedRowId = 'A beszúrt rekord id-je:';
$strInsertedRows = 'Beszúrt sorok:';
$strInternalNotNecessary = '* Egy bels&#337; kapcsolat nem szükséges, ha az létezik az InnoDB-ben is.';
$strInternalRelations = 'Bels&#337; kapcsolatok';
$strInUse = 'használatban';
$strInvalidAuthMethod = 'Érvénytelen hitelesítési mód lett beállítva a konfigurációban:';
$strInvalidColumnCount = 'A mez&#337;k számának nullánál nagyobbnak kell lennie.';
$strInvalidColumn = 'Érvénytelen mez&#337; (%s) lett megadva!';
$strInvalidCSVFieldCount = 'Érvénytelen mez&#337;szám a CSV fájl %d. sorában.';
$strInvalidCSVFormat = 'Hibás formázás a CSV %d. sorában.';
$strInvalidCSVParameter = 'Érvénytelen CSV import paraméter: %s';
$strInvalidFieldAddCount = 'Legalább egy mez&#337;t meg kell adni.';
$strInvalidFieldCount = 'A táblázatnak legalább egy mez&#337;t kell tartalmaznia.';
$strInvalidLDIImport = 'Ez a plugin nem támogatja a tömörített bemenetet!';
$strInvalidRowNumber = '%d érvénytelen sorszám.';
$strInvalidServerHostname = 'Érvénytelen hosztnév a(z) %1$s szerverhez. Ellen&#337;rizd a beállításokat.';
$strInvalidServerIndex = 'Érvénytelen szerver index: "%s"';
$strInvalidTableName = 'Érvénytelen táblanév';

$strJapanese = 'Japán';
$strJumpToDB = 'Ugrás a &quot;%s&quot; adatbázishoz.';
$strJustDeleteDescr = 'A &quot;törölt&quot; felhasználók még hozzáférhetnek a szerverhez, amíg a privilégiumok újratöltése nem történik meg.';
$strJustDelete = 'Egyszer&#369;en törölje a felhasználót a privilégium-táblákból.';

$strKeepPass = 'Ne változtasd meg a jelszót';
$strKeyname = 'Kulcsnév';
$strKill = 'Leállít';
$strKorean = 'Koreai';

$strLandscape = 'Fekv&#337;';
$strLanguage = 'Nyelv';
$strLanguageUnknown = 'Ismeretlen nyelv: %1$s.';
$strLatchedPages = 'Zárolt lapok';
$strLatexCaption = 'Táblacím';
$strLatexContent = 'tábla tartalom __TABLE__';
$strLatexContinuedCaption = 'Tábla cím folytatása';
$strLatexContinued = '(folytatás)';
$strLatexIncludeCaption = 'Tábla címe tartalmazza';
$strLatexLabel = 'Felirat kulcs';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Táblaszerkezet __TABLE__';
$strLatvian = 'Litván';
$strLDI = 'CSV (LOAD DATA használatával)';
$strLDILocal = 'LOCAL kulcsszó használata';
$strLengthSet = 'Hossz/Érték*';
$strLimitNumRows = 'Sorok száma oldalanként';
$strLinesTerminatedBy = 'Sorok vége';
$strLinkNotFound = 'Link nem található';
$strLinksTo = 'Linkek:';
$strLithuanian = 'Litván';
$strLocalhost = 'Helyi';
$strLocationTextfile = 'A szövegfájl helye';
$strLogin = 'Belépés';
$strLoginInformation = 'Belépési információ';
$strLogout = 'Kilépés';
$strLogPassword = 'Jelszó:';
$strLogServer = 'Szerver';
$strLogUsername = 'Felhasználói név:';
$strLongOperation = 'A m&#369;velet sokáig eltarthat. Mindenképp folytatod?';

$strMaxConnects = 'Max. egyidej&#369; kapcsolatok száma';
$strMaximalQueryLength = 'Lekérdezés maximális hossza';
$strMaximumSize = 'Legnagyobb méret: %s%s';
$strMbOverloadWarning = 'Engedélyezted a mbstring.func_overload funkciót a PHP konfigurációban. Ez inkompatibilis a phpMyAdmin-nal és adatvesztéssel járhat!';
$strMIME_available_mime = 'Elérhet&#337; MIME-típusok';
$strMIME_available_transform = 'Elérhet&#337; átalakítások';
$strMIME_description = 'Leírás';
$strMIME_MIMEtype = 'MIME-típus';
$strMIME_nodescription = 'Ehhez az átalakításhoz nem érhet&#337; el leírás. Kérdezze a szerz&#337;t, aki készítette: %s.';
$strMIME_transformation = 'Böngész&#337; átalakítás';
$strMIME_transformation_note = 'Az elérhet&#337; átalakítási beállítások listájához és a hozzájuk tartozó MIME-típusokhoz kattintson ide: %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Az átalakítás beállításokhoz írja be az értékeket a kovetkez&#337; formátumban: \'a\', 100, b,\'c\'... Ha visszapert ("\") vagy idéz&#337;jelet ("\'") akar beszúrni, használjon visszapert (például: \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Átalakítás beállítások';
$strMIMETypesForTable = 'Tábla MIME-típusok';
$strMIME_without = 'A d&#337;lttel írt MIME-típusok nem választják el az átalakítási funkciókat';
$strModifications = 'A változásokat elmentettem';
$strModifyIndexTopic = 'Index változása';
$strModify = 'Változás';
$strMoveTableOK = '%s táblát áthelyeztem ide: %s.';
$strMoveTableSameNames = 'Nem tudom a táblát ugyanarra mozgatni!';
$strMoveTable = 'Tábla áthelyezése ide (adatbázis<b>.</b>tábla):';
$strMultilingual = 'soknyelv&#369;';
$strMyISAMDataPointerSize = 'Adat mutató mérete';
$strMyISAMMaxExtraSortFileSize = 'Ideiglenes fájlok maximális mérete index készítésekor';
$strMyISAMMaxSortFileSize = 'Az ideiglenes rendez&#337;fájlok maximális mérete';
$strMyISAMRecoverOptions = 'Automatikus helyreállítási mód';
$strMyISAMSortBufferSize = 'Rendez&#337; buffer mérete';
$strMySQLCharset = 'MySQL karakterkészlet';
$strMysqlClientVersion = 'MySQL kliens verzió';
$strMySQLConnectionCollation = 'MySQL kapcsolat egyeztetés';
$strMySQLSaid = 'MySQL jelzi: ';
$strMySQLShowProcess = 'Mutasd meg a folyamatokat';
$strMySQLShowStatus = 'Mutasd meg a MySQL futási információkat';
$strMySQLShowVars = 'Mutasd meg a MySQL rendszer változókat';

$strName = 'Név';
$strNext = 'Következ&#337;';
$strNoActivity = 'Nem volt semmi tevékenység %s másodperce, jelentkezz be újra';
$strNoDatabases = 'Nincs adatbázis';
$strNoDatabasesSelected = 'Nincs adatbázis kiválasztva.';
$strNoDescription = 'nincs leírás';
$strNoDetailsForEngine = 'Ehhez a tárolómotorhoz nem érhet&#337; el részletes állapot információ.';
$strNoDropDatabases = '"DROP DATABASE" utasítás le van tiltva.';
$strNoExplain = 'SQL magyarázat átugrása';
$strNoFilesFoundInZip = 'Nincs fájl a ZIP archívumban!';
$strNoFrames = 'A phpMyAdmin használhatóbb egy <b>frame-kezel&#337;</b> böngész&#337;ben.';
$strNoIndex = 'Nincs index meghatározva!';
$strNoIndexPartsDefined = 'Nincs index darab meghatározva!';
$strNoModification = 'Nincs változás';
$strNo = 'Nem';
$strNone = 'Nincs';
$strNoOptions = 'Ennek nincs beállítási lehet&#337;sége';
$strNoPassword = 'Nincs jelszó';
$strNoPermission = 'A webszervernek nincs joga elmenteni a fájlt: %s.';
$strNoPhp = 'PHP kód nélkül';
$strNoPrivileges = 'Nincs privilégium';
$strNoRights = 'Nincs elég jogod ennek végrehajtására!';
$strNoRowsSelected = 'Nincs sor kiválasztva';
$strNoSpace = 'Nincs elég hely elmenteni a fájlt: %s.';
$strNoTablesFound = 'Nincs tábla az adatbázisban.';
$strNoThemeSupport = 'Nincs téma támogatás, ellen&#337;rizd a beállításokat és/vagy a témákat a %s könyvtárban.';
$strNotNumber = 'Ez nem egy szám!';
$strNotOK = 'Nincs rendben';
$strNotSet = '<b>%s</b> táblát nem találtam vagy nincs benne: %s';
$strNoUsersFound = 'Nem találtam felhasználó(ka)t.';
$strNoValidateSQL = 'SQL jóváhagyás átugrása';
$strNull = 'Null';
$strNumberOfFields = 'Mez&#337;k száma';
$strNumberOfTables = 'Táblák száma';
$strNumSearchResultsInTable = '%s találat <i>%s</i> táblában';
$strNumSearchResultsTotal = '<b>Összes:</b> <i>%s</i> találat';
$strNumTables = 'Tábla';

$strOK = 'Rendben';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Új phpMyAdmin ablak nyitása';
$strOperations = 'Tevékenységek';
$strOperator = 'Kezel&#337;';
$strOptimizeTable = 'Tábla optimalizálás';
$strOptions = 'Beállítások';
$strOr = 'Vagy';
$strOverhead = 'Felülírás';
$strOverwriteExisting = 'Létez&#337; fájlok felülírása';

$strPageNumber = 'Oldalszám:';
$strPagesToBeFlushed = 'Kiírandó oldalak';
$strPaperSize = 'Papírméret';
$strPartialImport = 'Részleges importálás';
$strPartialText = 'Részleges Szövegek';
$strPasswordChanged = '%s jelszavát sikeresen megváltoztattam.';
$strPasswordEmpty = 'A jelszó mez&#337; üres!';
$strPassword = 'Jelszó';
$strPasswordNotSame = 'A jelszavak nem azonosak!';
$strPdfDbSchema = '"%s" adatbázis sémája - %s oldal';
$strPdfInvalidTblName = '"%s" tábla nem létezik!';
$strPdfNoTables = 'Nincs tábla';
$strPDF = 'PDF';
$strPDFReportTitle = 'Jelentés címe';
$strPerHour = 'óránként';
$strPerMinute = 'percenként';
$strPerSecond = 'másodpercenként';
$strPersian = 'Perzsa';
$strPhoneBook = 'telefonkönyv';
$strPHP40203 = 'A PHP 4.2.3-as verziója fut, ami egy súlyos hibát tartalmaz a több-bájtos sztringek kezelésénél (mbstring). Nézze meg a következ&#337;t: PHP bug report 19404. A PHP ezen verzója nem ajánlott a phpMyAdminhoz.';
$strPhp = 'PHP kód készítése';
$strPHPVersion = 'PHP Verzió';
$strPmaDocumentation = 'phpMyAdmin dokumentáció';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> értékét a konfigurációs fájlban KELL beállítani!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Lengyel';
$strPortrait = 'Álló';
$strPos1 = 'Kezdet';
$strPrevious = 'El&#337;z&#337;';
$strPrimary = 'Els&#337;dleges';
$strPrimaryKeyHasBeenDropped = 'Az els&#337;dleges kulcsot eldobtam';
$strPrimaryKeyName = 'Az els&#337;dleges kulcs nevének "PRIMARY"-nak kell lennie!';
$strPrimaryKeyWarning = '("PRIMARY"-nak <b>kell</b> lennie, és <b>csak annak</b> szabad lennie az els&#337;dleges kulcsnak!)';
$strPrint = 'Nyomtatás';
$strPrintViewFull = 'Nyomtatási nézet (összes szöveggel)';
$strPrintView = 'Nyomtatási nézet';
$strPrivDescAllPrivileges = 'Minden privilégiumot tartalmaz, kivéve a GRANT.';
$strPrivDescAlter = 'Engedélyezi a létez&#337; táblák szerkezetének megváltoztatását.';
$strPrivDescAlterRoutine = 'Engedélyezi tárolt eljárások módosítását és eldobását.';
$strPrivDescCreateDb = 'Engedélyezi új adatbázisok és táblák készítését.';
$strPrivDescCreateRoutine = 'Engedélyezi tárolt eljárások létrehozását.';
$strPrivDescCreateTbl = 'Engedélyezi új táblák készítését.';
$strPrivDescCreateTmpTable = 'Engedélyezi átmeneti táblák készítését.';
$strPrivDescCreateUser = 'Engedélyezi felhasználói fiókok létrehozását, törlését és átnevezését.';
$strPrivDescCreateView = 'Új nézetek létrehozásának engedélyezése.';
$strPrivDescDelete = 'Engedélyezi az adatok törlését.';
$strPrivDescDropDb = 'Engedélyezi adatbázisok és táblák törlését.';
$strPrivDescDropTbl = 'Engedélyezi táblák törlését.';
$strPrivDescExecute5 = 'Engedélyezi tárolt eljárások végrehajtását.';
$strPrivDescExecute = 'Engedélyezi tárolt eljárások futtatását; még nem valósult meg ebben a MySQL verzióban.';
$strPrivDescFile = 'Engedélyezi adatok export/importját fájlokba.';
$strPrivDescGrant = 'Engedélyezi felhasználók és privilégiumok hozzáadását a privilégiumi táblák újratöltése nélkül.';
$strPrivDescIndex = 'Engedélyezi indexek készítését és törlését.';
$strPrivDescInsert = 'Engedélyezi adatok beírását és megváltoztatását.';
$strPrivDescLockTables = 'Engedélyezi táblák blokkolását erre a szálra.';
$strPrivDescMaxConnections = 'Korlátozza az új kapcsolatok számát, amit a felhasználó óránként megnyithat.';
$strPrivDescMaxQuestions = 'Korlátozza a felhasználói lekérések számát óránként.';
$strPrivDescMaxUpdates = 'Korlátozza azon utasítások számát óránként, amelyek megváltoztatnak egy táblát vagy adatbázist.';
$strPrivDescMaxUserConnections = 'Korlátozza a felhasználó egyidej&#369; kapcsolatainak számát.';
$strPrivDescProcess3 = 'Engedélyezi más felhasználók folyamatainak megszüntetését.';
$strPrivDescProcess4 = 'Engedélyezi a teljes lekérések megtekintését a folyamatlistában.';
$strPrivDescReferences = 'Nem valósult meg ebben a MySQL verzióban';
$strPrivDescReload = 'Engedélyezi a szerver beállítások újratöltését és a szerver-cache törlését.';
$strPrivDescReplClient = 'Jogokat ad a felhasználónak, hogy lekérdezhessék a slave/master helyeket.';
$strPrivDescReplSlave = 'Szükséges a slave-ek másolásához.';
$strPrivDescSelect = 'Engedélyezi adatok olvasását.';
$strPrivDescShowDb = 'Hozzáférést ad az adatbázisok teljes listájához.';
$strPrivDescShowView = 'Engedélyezi SHOW CREATE VIEW lekérdezések végrehajtását.';
$strPrivDescShutdown = 'Engedélyezi a szerver leállítását.';
$strPrivDescSuper = 'Engedélyezi a kapcsolódást akkor is, ha a kapcsolatok száma a maximumot elérte. Ez szükséges a legfontosabb adminisztrációs m&#369;veletekhez, mint a globális változók beállítása vagy más felhasználók folyamatainak megszüntetése.';
$strPrivDescUpdate = 'Engedélyezi az adatok megváltoztatását.';
$strPrivDescUsage = 'Nincsenek privilégiumok.';
$strPrivileges = 'Privilégiumok';
$strPrivilegesReloaded = 'A privilégiumok újratöltése sikeres volt.';
$strProcesses = 'Folyamatok';
$strProcesslist = 'Folyamatlista';
$strProtocolVersion = 'Protokoll verzió';
$strPutColNames = 'Tegye a mez&#337;neveket az els&#337; sorhoz';

$strQBEDel = 'Töröl';
$strQBEIns = 'Beszúr';
$strQBE = 'Lekérdezés';
$strQueryCache = 'Lekérdezés cache';
$strQueryFrame = 'Lekérési ablak';
$strQueryOnDb = 'SQL-kérés <b>%s</b> adatbázison:';
$strQuerySQLHistory = 'SQL-el&#337;zmények';
$strQueryStatistics = '<b>Lekérési statisztika</b>: Az indulás óta %s kérés ment el a szerverhez.';
$strQueryTime = 'A lekérés lefutott %01.4f másodperc alatt';
$strQueryType = 'Lekérés típusa';
$strQueryWindowLock = 'Ne írja felül a lekérést az ablakon kívülr&#337;l';

$strReadRequests = 'Olvasási kérelmek';
$strReceived = 'Fogadott';
$strRecommended = 'ajánlott';
$strRecords = 'Sor';
$strReferentialIntegrity = 'Hivatkozási sértetlenség ellen&#337;rzése:';
$strRefresh = 'Frissítés';
$strRelationalSchema = 'Kapcsolati séma';
$strRelationNotWorking = 'A munka kiegészít&#337; tulajdonságai a vonatkozó táblákra meg lettek szüntetve. Az okokért kattints %side%s.';
$strRelationsForTable = 'Tábla-kapcsolatok';
$strRelations = 'Kapcsolatok';
$strRelationView = 'Reláció nézet';
$strReloadingThePrivileges = 'Privilégiumok újratöltése';
$strReload = 'Újratöltés';
$strReloadPrivileges = 'Privilégiumok újratöltése';
$strRemoveSelectedUsers = 'A kiválasztott felhasználók törlése';
$strRenameDatabaseOK = '%s adatbázis átneveztem erre: %s';
$strRenameTableOK = '%s táblát átneveztem erre: %s';
$strRenameTable = 'Tábla átnevezése erre';
$strRepairTable = 'Tábla javítás';
$strReplaceNULLBy = 'NULL cseréje ezzel:';
$strReplaceTable = 'Tábla adatok és fájl cseréje';
$strReset = 'Töröl';
$strResourceLimits = 'Er&#337;forrás határok';
$strRestartInsertion = 'Beszúrás újrakezdése %s sorral';
$strReType = 'Újraírás';
$strRevokeAndDelete = 'A felhasználók összes privilégiumának visszavonása, aztán törlésük.';
$strRevokeAndDeleteDescr = 'A felhasználóknak még használható privilégiumuk van, amíg nem történik meg a privilégiumok újratöltése.';
$strRevokeMessage = 'Visszavontam a %s privilégiumokat';
$strRevoke = 'Visszavon';
$strRomanian = 'Román';
$strRowLength = 'Sorhossz';
$strRowsFrom = 'sor kezdve ezzel:';
$strRowSize = ' Sorméret ';
$strRowsModeFlippedHorizontal = 'vízszintes (elforgatott fejléc)';
$strRowsModeHorizontal = 'vízszintes';
$strRowsModeOptions = '%s módon, a fejlécet %s soronként megismételve';
$strRowsModeVertical = 'függ&#337;leges';
$strRows = 'Sorok';
$strRowsStatistic = 'Sor-statisztika';
$strRunning = ': %s';
$strRunQuery = 'Kérés végrehajtása';
$strRunSQLQueryOnServer = 'SQL lekérdezés(ek) futtatása %s szerveren';
$strRunSQLQuery = 'SQL parancs(ok) futtatása a(z) %s adatbázison';
$strRussian = 'Orosz';

$strSave = 'Ment';
$strSaveOnServer = 'Mentés a szerver %s könyvtárába';
$strSavePosition = 'Pozíció mentése';
$strScaleFactorSmall = 'A méret elem túl kicsi, hogy megfelel&#337; legyen a sémához egy oldalon';
$strSearchFormTitle = 'Keresés az adatbázisban';
$strSearchInTables = 'Táblá(k)ban:';
$strSearch = 'Keresés';
$strSearchNeedle = 'Szavak vagy értékek a kereséshez (helyettesít&#337; karakter: "%"):';
$strSearchOption1 = 'legalább egy szó';
$strSearchOption2 = 'összes szó';
$strSearchOption3 = 'a helyes mondat';
$strSearchOption4 = 'reguláris kifejezésként';
$strSearchResultsFor = 'Keresési eredmények "<i>%s</i>" %s:';
$strSearchType = 'Keress:';
$strSecretRequired = 'A konfigurációs fájl egy titkos jelszó kifejezést vár (blowfish_secret).';
$strSelectADb = 'Válassz egy adatbázist';
$strSelectAll = 'Mindet kijelöli';
$strSelectFields = 'Mez&#337;k kiválasztása (legalább egyet):';
$strSelectForeignKey = 'Idegen kulcs kiválasztása';
$strSelectNumRows = 'kérésben';
$strSelectTables = 'Táblák kiválasztása';
$strSend = 'Fájlnév megadása';
$strSent = 'Küldött';
$strServerChoice = 'Szerver Választás';
$strServerNotResponding = 'A szerver nem válaszol';
$strServers = 'Szerverek';
$strServerStatusDelayedInserts = 'Késleltetett beszúrások';
$strServerStatus = 'Futási információk';
$strServerStatusUptime = 'Ez a MySQL szerver fut: %s. Elindítva: %s.';
$strServer = 'Szerver';
$strServerTabVariables = 'Változók';
$strServerTrafficNotes = '<b>Szerver forgalom</b>: Ezek a táblák mutatják a MySQL szerver hálózati forgalom-statisztikáit az indulástól kezdve.';
$strServerVars = 'Szerver változók és beállítások';
$strServerVersion = 'Szerver verzió';
$strSessionValue = 'Session érték';
$strSetEnumVal = 'Ha a mez&#337; típusa "enum" vagy "set", akkor az értékeket ilyen formában írd be: \'a\',\'b\',\'c\'... Ha backslash-t ("\") vagy aposztrófot ("\'") akarsz ezen értékek között használni, használd a backslash escape karaktert (pl.: \'\\\\xyz\' vagy \'a\\\'b\').';
$strShowAll = 'Mutasd mindet';
$strShowColor = 'Mutasd a színeket';
$strShowDatadictAs = 'Adatkönyvtár formátum';
$strShowFullQueries = 'Teljes lekérések mutatása';
$strShowGrid = 'Mutasd a rácsot';
$strShowHideLeftMenu = 'Baloldali menü mutatása/rejtése';
$strShowingBookmark = 'Könyvjelz&#337; megmutatása';
$strShowingPhp = 'Mutatás PHP kódként';
$strShowingRecords = 'Sorok megjelenítése ';
$strShowingSQL = 'Mutatás SQL lekérdezésként';
$strShow = 'Mutat';
$strShowOpenTables = 'Nyitott táblák mutatása';
$strShowPHPInfo = 'PHP információ';
$strShowStatusCreated_tmp_filesDescr = 'mysqld által létrehozott ideiglenes fájlok száma.';
$strShowStatusDelayed_writesDescr = 'INSERT DELAYED sor írások száma.';
$strShowStatusHandler_updateDescr = 'Sor frissítési kérések száma.';
$strShowStatusHandler_writeDescr = 'Sor beszúrási kérések száma.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Adatokat tartalmazó lapok száma (piszkos vagy tiszta).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Jelenleg piszkos lapok száma.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Szabad lapok száma.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Puffer teljes mérete lapokban.';
$strShowStatusInnodb_data_fsyncsDescr = 'Összes fsync() m&#369;velet száma.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Folyamatban lév&#337; fsync() m&#369;veletek száma.';
$strShowStatusInnodb_data_pending_readsDescr = 'Folyamatban lév&#337; olvasások száma.';
$strShowStatusInnodb_data_pending_writesDescr = 'Folyamatban lév&#337; írások száma.';
$strShowStatusInnodb_data_readDescr = 'Összes olvasott adat, bájtban.';
$strShowStatusInnodb_data_readsDescr = 'Összes olvasott adat.';
$strShowStatusInnodb_data_writesDescr = 'Összes írott adat.';
$strShowStatusInnodb_data_writtenDescr = 'Összes írott adat, bájtban.';
$strShowStatusInnodb_log_waitsDescr = 'Várakozások száma, amiket a naplópuffer kis mérete okozott és folytatás el&#337;tt meg kellett várni a kiírást.';
$strShowStatusInnodb_log_write_requestsDescr = 'Napló írási kérések száma.';
$strShowStatusInnodb_log_writesDescr = 'Naplófájlba történt fizikai írások száma.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Folyamatban lév&#337; naplófájl fsync-ek száma.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Folyamatban lév&#337; naplófájl írások száma.';
$strShowStatusInnodb_os_log_writtenDescr = 'Naplófájlba írt bájtok száma.';
$strShowStatusInnodb_pages_createdDescr = 'Létrehozott lapok száma.';
$strShowStatusInnodb_pages_readDescr = 'Olvasott lapok száma.';
$strShowStatusInnodb_pages_writtenDescr = 'Írott lapok száma.';
$strShowStatusInnodb_rows_deletedDescr = 'InnoDB táblákból törölt sorok száma.';
$strShowStatusInnodb_rows_insertedDescr = 'InnoDB táblákba beszúrt sorok száma.';
$strShowStatusInnodb_rows_readDescr = 'InnoDB táblákból olvasott sorok száma.';
$strShowStatusInnodb_rows_updatedDescr = 'InnoDB táblákban frissített sorok száma.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Írásra várakozó sorok az INSERT DELAYED sorokban.';
$strShowStatusOpen_filesDescr = 'Megnyitott fájlok száma.';
$strShowStatusOpen_tablesDescr = 'Megnyitott táblák száma.';
$strShowStatusQcache_free_blocksDescr = 'Szabad memóriablokkok a lekérdezés cache-ben.';
$strShowStatusQcache_hitsDescr = 'Cache találatok száma.';
$strShowStatusQcache_insertsDescr = 'Cache-hez adott lekérdezések száma.';
$strShowStatusReset = 'Visszaállítás';
$strShowStatusSort_rowsDescr = 'Rendezett sorok száma.';
$strShowStatusThreads_connectedDescr = 'Pillanatnyilag megnyitott kapcsolatok száma.';
$strShowStatusThreads_runningDescr = 'Nem alvó szálak száma.';
$strShowTableDimension = 'Mutasd a táblák méretét';
$strShowTables = 'Mutasd a táblákat';
$strShowThisQuery = ' Mutasd a parancsot itt újra ';
$strSimplifiedChinese = 'Egyszer&#369;sített kínai';
$strSingly = '(egyenként)';
$strSize = 'Méret';
$strSlovak = 'Szlovák';
$strSlovenian = 'Szlovén';
$strSocketProblem = '(vagy a helyi MySQL szerver socketje nincs rendesen beállítva)';
$strSortByKey = 'Kulcs szerinti rendezés';
$strSorting = 'Rendezés';
$strSort = 'Sorrendezés';
$strSpaceUsage = 'Helyfoglalás';
$strSpanish = 'Spanyol';
$strSplitWordsWithSpace = 'A szavak fel vannak osztva szóköz karakter szerint (" ").';
$strSQLCompatibility = 'SQL kompatibilitási mód';
$strSQLExportType = 'Export típus';
$strSQLParserBugMessage = 'Esély van rá, hogy egy hibát találhattál az SQL szintaktikai elemz&#337;ben (parser). Vizsgáld meg gondosan a lekérdezésedet, ellen&#337;rizd, hogy az idéz&#337;jelek jók és jól illeszkednek. Más lehetséges hiba oka lehet, hogy binárisan töltöttél fel egy fájlt az idézett szövegmez&#337;n kívül. Kipróbálhatod a lekérésedet a MySQL parancssoros felületén.  A MySQL szerver hibakimenete alul látható, ha van ott valami, az segíthet felderíteni a hiba okát. Ha még mindig gondjaid vannak, vagy a szintaktiaki elemz&#337; (parser) hibát jelez, ahol a parancssoros felületen végrehajtódik, redukáld a problémát okozó SQL lekérdezést egy egyszer&#369; lekérdezéssé, és küldd el egy hibajelzésben (bug report) az alsó Kivágás részben lev&#337; adatokkal együtt:';
$strSQLParserUserError = 'Úgy látszik az SQL lekérdezésedben van egy hiba. A MySQL szerver hibakimenete alul látható, ha van ott valami, az segíthet felderíteni a hiba okát';
$strSQLQuery = 'SQL-kérés';
$strSQLResult = 'SQL eredmény';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Érvénytelen azonosító';
$strSQPBugUnclosedQuote = 'Lezáratlan lekérdezés';
$strSQPBugUnknownPunctuation = 'Ismeretlen központozott sztring';
$strStatCheckTime = 'Utolsó ellen&#337;rzés';
$strStatCreateTime = 'Létrehozás';
$strStatement = 'Adatok';
$strStatUpdateTime = 'Utolsó módosítás';
$strStatus = 'Állapot';
$strStorageEngines = 'Tárolómotorok';
$strStorageEngine = 'Tárolómotor';
$strStrucCSV = 'CSV adat';
$strStrucData = 'Szerkezet és adatok';
$strStrucExcelCSV = 'MS Excel CSV adat';
$strStrucNativeExcel = 'Natív MS Excel adat';
$strStrucOnly = 'Csak szerkezet';
$strStructPropose = 'Tábla struktúra ajánlat';
$strStructure = 'Struktúra';
$strSubmit = 'Végrehajt';
$strSuccess = 'Az SQL-kérést sikeresen végrehajtottam';
$strSum = 'Összesen';
$strSwedish = 'Svéd';
$strSwitchToDatabase = 'Váltás a másolt adatbázisra';
$strSwitchToTable = 'Váltás a másolt táblára';

$strTableAlreadyExists = '%s tábla már létezik!';
$strTableComments = 'Tábla megjegyzések';
$strTableEmpty = 'A táblanév helye üres!';
$strTableHasBeenDropped = '%s táblát eldobtam';
$strTableHasBeenEmptied = '%s táblát kiürítettem';
$strTableHasBeenFlushed = '%s táblát kiírtam';
$strTableMaintenance = 'Tábla karbantartás';
$strTableName = 'Tábla neve';
$strTableOfContents = 'Tartalomjegyzék';
$strTableOptions = 'Tábla opciók';
$strTables = '%s tábla';
$strTableStructure = 'Tábla szerkezet:';
$strTable = 'Tábla';
$strTakeIt = 'csináld';
$strTblPrivileges = 'Tábla-specifikus privilégiumok';
$strTempData = 'Ideiglenes adatok';
$strTextAreaLength = 'Mivel ez a hossz, ez a mez&#337; nem szerkeszthet&#337; ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'A(z) %s alapértelmezett téma nem található!';
$strThemeNoPreviewAvailable = 'Nincs el&#337;nézet.';
$strThemeNotFound = 'A(z) %s téma nem található!';
$strThemeNoValidImgPath = 'Nem található kép útvonal a(z) %s témához!';
$strThemePathNotFound = 'Nem található téma útvonal a(z) %s témához!';
$strTheme = 'Téma / Stílus';
$strThisHost = 'Ez a gép';
$strThreads = 'Szálak';
$strThreadSuccessfullyKilled = 'A %s. szálat sikerült megszüntetni.';
$strTime = 'Id&#337;';
$strTimeoutInfo = 'Az el&#337;z&#337; importnál id&#337;túllépés következett be, újraküldés után a %d pozíciótól folytatódik.';
$strTimeoutPassed = 'Script id&#337;túllépés történt, ha be akarod fejezni az importot, küldd újra ugyanazt a fájlt és az import folytatódni fog.';
$strToggleScratchboard = 'scratchboard kapcsolása';
$strTotal = 'Összesen';
$strTotalUC = 'Összes';
$strTraditionalChinese = 'Hagyományos kínai';
$strTraditionalSpanish = 'Hagyományos spanyol';
$strTraffic = 'Forgalom';
$strTransformation_application_octetstream__download = 'Egy linket jelenít meg a mez&#337; binári adaának letöltéséhez. Els&#337; opció a bináris fájl neve. Második a tábla sorának egy lehetséges mez&#337;neve fájlnév gyanánt. Ha beállítja a második opciót, akkor az els&#337;t üresen kell hagyni';
$strTransformation_image_jpeg__inline = 'Kattintható ikon mutatása; beállítások: szélesség,magasság pixelben (megtartja az eredeti képarányt)';
$strTransformation_image_jpeg__link = 'Egy linket mutat a képhez (közvetlen ablakos letöltés).';
$strTransformation_image_png__inline = 'image/jpeg megtekintése: bent';
$strTransformation_text_plain__external = 'Csak LINUX: Elindít egy küls&#337; programot, ami megkapja az adatokat a standard inputon. Visszatér a program standard outputján. Alapértelmezett a Tidy, csinos HTML kódot kap. Biztonsági megfontolásokból kézzel kell szerkeszteni a libraries/transformations/text_plain__external.inc.php fájlt, és beírni a program nevét, amit futtatni akar. Az els&#337; opció a program száma, amit futtatni akar, a második a program paramáterei. A harmadik opció ha egyenl&#337; eggyel, akkor a kimenet konvertálva lesz a htmlspecialchars() eljárással (alapértelmezett 1). A negyedik opció ha egyre van beállítva, egy NOWRAP formázást ad minden mez&#337;höz, így a kimenet újratördelés nélkül látszik (alapértelmezett 1)';
$strTransformation_text_plain__formatted = 'A mez&#337; eredeti formázásának meg&#337;rzése. Nincs kivétel.';
$strTransformation_text_plain__imagelink = 'Egy képet es egy linket jelenít meg, a mez&#337; tartalmazza a fájlnevet; az els&#337; opcíó egy el&#337;tag, mint pl.: "http://domain.com/", a második a szélesség pixelben, a harmadik pedig a magasság.';
$strTransformation_text_plain__link = 'Meg linket jelenít meg, a megz&#337; tartalmazza a fájlnevet; az els&#337; opcíó egy el&#337;tag, mint pl.: "http://domain.com/", a második a link neve.';
$strTransformation_text_plain__substr = 'A szöveg egy részét mutatja. Els&#337; opció egy offszet, ami a kezd&#337;pozíciót állítja be (alapértelmezett: 0). A második azt adja meg, hogy mennyi szöveg jöjjön vissza. Ha üres, az összes visszamaradó szöveg átjön. A harmadik opcióban atokat a karaktereket lehet beállítani, amik a szöveg végére kerülnek, ha szövegrészt kapunk vissza (alapértelmezett: ...) .';
$strTriggers = 'Triggerek';
$strTruncateQueries = 'A mutatott kérések törlése';
$strTurkish = 'Török';
$strType = 'Típus';

$strUkrainian = 'Ukrán';
$strUncheckAll = 'Összeset törli';
$strUnicode = 'Unicode';
$strUnique = 'Egyedi';
$strUnknown = 'ismeretlen';
$strUnselectAll = 'Mindet törli';
$strUpdatePrivMessage = 'Frissítettem a(z) %s privilégiumokat.';
$strUpdateProfileMessage = 'A profilt frissítettem.';
$strUpdateQuery = 'Kérés frissítése';
$strUpdComTab = 'Olvassa el a Dokumentációt, hogyan tudja módosítani a Column_comments táblát';
$strUpgrade = 'Módosítás szükséges %s %s vagy kés&#337;bb.';
$strUploadErrorCantWrite = 'Nem sikerült a fájlt lemezre írni.';
$strUsage = 'Méret';
$strUseBackquotes = 'Idéz&#337;jelek használata a tábla- és mez&#337;neveknél';
$strUsedPhpExtensions = 'Használt PHP kiterjesztések';
$strUseHostTable = 'Hoszt-tábla használata';
$strUserAlreadyExists = '%s felhasználó már létezik!';
$strUserEmpty = 'A felhasználói név mez&#337;je üres!';
$strUser = 'Felhasználó';
$strUserName = 'Felhasználói név';
$strUserNotFound = 'A kiválasztott felhasználót nem találtam a privilégium táblában.';
$strUserOverview = 'Felhasználó áttekintés';
$strUsersDeleted = 'A kiválasztott felhasználók törlése sikerült.';
$strUsersHavingAccessToDb = 'A felhasználóknak hozzáférésük van ehhez: &quot;%s&quot;';
$strUseTabKey = 'Használd a TAB billenty&#369;t, hogy értékr&#337;l értékre mozoghass, vagy CTRL+nyilakat, hogy bármerre mozoghass.';
$strUseTables = 'Táblák használata';
$strUseTextField = 'Szöveges mez&#337; használata';
$strUseThisValue = 'Ezen érték használata';

$strValidateSQL = 'SQL jóváhagyás';
$strValidatorError = 'Az SQL ellen&#337;rz&#337;t (SQL validator) nem sikerült elindítani. Ellen&#337;rizze a szükséges php kiterjesztést, ahogy itt le van írva: %sdocumentation%.';
$strValue = 'Érték';
$strVar = 'Változó';
$strVersionInformation = 'Verzió információk';
$strViewDumpDatabases = 'Adatbázis kiírás (séma) megtekintése';
$strViewDumpDB = 'Adatbázis kiírás (vázlat) megnézése';
$strViewDump = 'Tábla kiírás (vázlat) megnézése';
$strViewHasBeenDropped = '%s nézet eldobva';
$strViewMaxExactCount = 'Ez a nézet több, mint %s sort tartalmaz. Nézz utána a %sdokumentációban%s.';
$strViewName = 'Nézet neve';
$strView = 'Nézet';

$strWebServerUploadDirectoryError = 'Az alkönyvtár, ami a feltöltésekhez be lett állítva, nem elérhet&#337;';
$strWebServerUploadDirectory = 'webszerver feltöltési könyvtár';
$strWelcome = 'Üdvözöl a %s';
$strWestEuropean = 'Nyugat-európai';
$strWildcard = 'helyettesít&#337; jel';
$strWindowNotFound = 'A cél böngész&#337;ablakot nem tudtam újratölteni. Talán a szül&#337;ablak be lett zárva, vagy a böngész&#337; biztonsági beállítása tiltja az ablakok közti újratöltést';
$strWithChecked = 'A kijelöltekkel végzend&#337; m&#369;velet:';
$strWriteRequests = 'Írási kérelmek';
$strWrongUser = 'Hibás felhasználónév/jelszó. Hozzáférés megtagadva.';

$strXML = 'XML';

$strYes = 'Igen';

$strZeroRemovesTheLimit = 'Megjegyzés: A 0 (nulla) beállítása törli a limitet.';
$strZip = '"zippel tömörítve"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';//to translate
$strAngularLinks = 'Angular links';//to translate

$strBufferReadMissesInPercent = 'Read misses in %';//to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';//to translate
$strBusyPages = 'Busy pages';//to translate

$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';//to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';//to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';//to translate
$strControluserFailed = 'Connection for controluser as defined in your configuration failed.';//to translate
$strCreateRelation = 'Create relation';//to translate
$strCreateUserDatabase = 'Database for user';//to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';//to translate
$strCreateUserDatabaseNone = 'None';//to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';//to translate

$strDbIsEmpty = 'Database seems to be empty!';//to translate
$strDeleteRelation = 'Delete relation';//to translate
$strDesignerHelpDisplayField = 'The display field is shown in pink. To set/unset a field as the display field, click the "Choose field to display" icon, then click on the appropriate field name.';//to translate
$strDirectLinks = 'Direct links';//to translate

$strErrorRelationAdded = 'Error: Relation not added.';//to translate
$strErrorRelationExists = 'Error: relation already exists.';//to translate
$strErrorRenamingTable = 'Error renaming table %1$s to %2$s';//to translate
$strErrorSaveTable = 'Error saving coordinates for Designer.';//to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';//to translate
$strExportImportToScale = 'Export/Import to scale';//to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';//to translate

$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';//to translate
$strFunctions = 'Functions';//to translate

$strHandler = 'Handler';//to translate
$strHexForBLOB = 'Use hexadecimal for BLOB';//to translate
$strHideShowAll = 'Hide/Show all';//to translate
$strHideShowNoRelation = 'Hide/Show Tables with no relation';//to translate

$strIEUnsupported = 'Internet Explorer does not support this function.';//to translate
$strImportExportCoords = 'Import/Export coordinates for PDF schema';//to translate
$strIndexesSeemEqual = 'The following indexes appear to be equal and one of them should be removed:';//to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';//to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';//to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';//to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';//to translate
$strInnoDBDataHomeDir = 'Data home directory';//to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';//to translate
$strInnoDBRelationAdded = 'InnoDB relation added';//to translate
$strInternalRelationAdded = 'Internal relation added';//to translate
$strInvalidDatabase = 'Invalid database';//to translate

$strJoins = 'Joins';//to translate

$strKeyCache = 'Key cache';//to translate
$strKnownExternalBug = 'The %s functionality is affected by a known bug, see %s';//to translate

$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';//to translate
$strMoveMenu = 'Move Menu';//to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';//to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';//to translate
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';//to translate
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';//to translate
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the Repair by sorting process.';//to translate
$strMyISAMRepairThreads = 'Repair threads';//to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';//to translate
$strMysqlLibDiffersServerVersion = 'Your PHP MySQL library version %s differs from your MySQL server version %s. This may cause unpredictable behavior.';//to translate

$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';//to translate

$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';//to translate

$strPasswordHashing = 'Password Hashing';//to translate
$strPDFReportExplanation = '(Generates a report containing the data of a single table)';//to translate
$strPleaseSelectPrimaryOrUniqueKey = 'Please select the primary key or a unique key';//to translate
$strProcedures = 'Procedures';//to translate
$strProfiling = 'Profiling';//to translate

$strQueryResultsOperations = 'Query results operations';//to translate

$strRelationDeleted = 'Relation deleted';//to translate
$strReplication = 'Replication';//to translate
$strRoutineReturnType = 'Return type';//to translate
$strRoutines = 'Routines';//to translate

$strSelectBinaryLog = 'Válaszd ki a megtekintend&#337; bináris naplót';//to translate
$strSelectReferencedKey = 'Select referenced key';//to translate
$strSessionStartupErrorGeneral = 'Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.';//to translate
$strShowSlaveHosts = 'Show slave hosts';//to translate
$strShowSlaveStatus = 'Show slave status';//to translate
$strShowStatusBinlog_cache_disk_useDescr = 'The number of transactions that used the temporary binary log cache but that exceeded the value of binlog_cache_size and used a temporary file to store statements from the transaction.';//to translate
$strShowStatusBinlog_cache_useDescr = 'The number of transactions that used the temporary binary log cache.';//to translate
$strShowStatusCreated_tmp_disk_tablesDescr = 'The number of temporary tables on disk created automatically by the server while executing statements. If Created_tmp_disk_tables is big, you may want to increase the tmp_table_size  value to cause temporary tables to be memory-based instead of disk-based.';//to translate
$strShowStatusCreated_tmp_tablesDescr = 'The number of in-memory temporary tables created automatically by the server while executing statements.';//to translate
$strShowStatusDelayed_errorsDescr = 'The number of rows written with INSERT DELAYED for which some error occurred (probably duplicate key).';//to translate
$strShowStatusDelayed_insert_threadsDescr = 'The number of INSERT DELAYED handler threads in use. Every different table on which one uses INSERT DELAYED gets its own thread.';//to translate
$strShowStatusFlush_commandsDescr  = 'The number of executed FLUSH statements.';//to translate
$strShowStatusHandler_commitDescr = 'The number of internal COMMIT statements.';//to translate
$strShowStatusHandler_deleteDescr = 'The number of times a row was deleted from a table.';//to translate
$strShowStatusHandler_discoverDescr = 'The MySQL server can ask the NDB Cluster storage engine if it knows about a table with a given name. This is called discovery. Handler_discover indicates the number of time tables have been discovered.';//to translate
$strShowStatusHandler_read_firstDescr = 'The number of times the first entry was read from an index. If this is high, it suggests that the server is doing a lot of full index scans; for example, SELECT col1 FROM foo, assuming that col1 is indexed.';//to translate
$strShowStatusHandler_read_keyDescr = 'The number of requests to read a row based on a key. If this is high, it is a good indication that your queries and tables are properly indexed.';//to translate
$strShowStatusHandler_read_nextDescr = 'The number of requests to read the next row in key order. This is incremented if you are querying an index column with a range constraint or if you are doing an index scan.';//to translate
$strShowStatusHandler_read_prevDescr = 'The number of requests to read the previous row in key order. This read method is mainly used to optimize ORDER BY ... DESC.';//to translate
$strShowStatusHandler_read_rndDescr = 'The number of requests to read a row based on a fixed position. This is high if you are doing a lot of queries that require sorting of the result. You probably have a lot of queries that require MySQL to scan whole tables or you have joins that don\'t use keys properly.';//to translate
$strShowStatusHandler_read_rnd_nextDescr = 'The number of requests to read the next row in the data file. This is high if you are doing a lot of table scans. Generally this suggests that your tables are not properly indexed or that your queries are not written to take advantage of the indexes you have.';//to translate
$strShowStatusHandler_rollbackDescr = 'The number of internal ROLLBACK statements.';//to translate
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'The number of buffer pool pages that have been requested to be flushed.';//to translate
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'The number of latched pages in InnoDB buffer pool. These are pages currently being read or written or that can\'t be flushed or removed for some other reason.';//to translate
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'The number of pages busy because they have been allocated for administrative overhead such as row locks or the adaptive hash index. This value can also be calculated as Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';//to translate
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'The number of "random" read-aheads InnoDB initiated. This happens when a query is to scan a large portion of a table but in random order.';//to translate
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'The number of sequential read-aheads InnoDB initiated. This happens when InnoDB does a sequential full table scan.';//to translate
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'The number of logical read requests InnoDB has done.';//to translate
$strShowStatusInnodb_buffer_pool_readsDescr = 'The number of logical reads that InnoDB could not satisfy from buffer pool and had to do a single-page read.';//to translate
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normally, writes to the InnoDB buffer pool happen in the background. However, if it\'s necessary to read or create a page and no clean pages are available, it\'s necessary to wait for pages to be flushed first. This counter counts instances of these waits. If the buffer pool size was set properly, this value should be small.';//to translate
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'The number writes done to the InnoDB buffer pool.';//to translate
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';//to translate
$strShowStatusInnodb_dblwr_writesDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';//to translate
$strShowStatusInnodb_os_log_fsyncsDescr = 'The number of fsyncs writes done to the log file.';//to translate
$strShowStatusInnodb_page_sizeDescr = 'The compiled-in InnoDB page size (default 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';//to translate
$strShowStatusInnodb_row_lock_current_waitsDescr = 'The number of row locks currently being waited for.';//to translate
$strShowStatusInnodb_row_lock_time_avgDescr = 'The average time to acquire a row lock, in milliseconds.';//to translate
$strShowStatusInnodb_row_lock_timeDescr = 'The total time spent in acquiring row locks, in milliseconds.';//to translate
$strShowStatusInnodb_row_lock_time_maxDescr = 'The maximum time to acquire a row lock, in milliseconds.';//to translate
$strShowStatusInnodb_row_lock_waitsDescr = 'The number of times a row lock had to be waited for.';//to translate
$strShowStatusKey_blocks_not_flushedDescr = 'The number of key blocks in the key cache that have changed but haven\'t yet been flushed to disk. It used to be known as Not_flushed_key_blocks.';//to translate
$strShowStatusKey_blocks_unusedDescr = 'The number of unused blocks in the key cache. You can use this value to determine how much of the key cache is in use.';//to translate
$strShowStatusKey_blocks_usedDescr = 'The number of used blocks in the key cache. This value is a high-water mark that indicates the maximum number of blocks that have ever been in use at one time.';//to translate
$strShowStatusKey_read_requestsDescr = 'The number of requests to read a key block from the cache.';//to translate
$strShowStatusKey_readsDescr = 'The number of physical reads of a key block from disk. If Key_reads is big, then your key_buffer_size value is probably too small. The cache miss rate can be calculated as Key_reads/Key_read_requests.';//to translate
$strShowStatusKey_write_requestsDescr = 'The number of requests to write a key block to the cache.';//to translate
$strShowStatusKey_writesDescr = 'The number of physical writes of a key block to disk.';//to translate
$strShowStatusLast_query_costDescr = 'The total cost of the last compiled query as computed by the query optimizer. Useful for comparing the cost of different query plans for the same query. The default value of 0 means that no query has been compiled yet.';//to translate
$strShowStatusOpened_tablesDescr = 'The number of tables that have been opened. If opened tables is big, your table cache value is probably too small.';//to translate
$strShowStatusOpen_streamsDescr = 'The number of streams that are open (used mainly for logging).';//to translate
$strShowStatusQcache_free_memoryDescr = 'The amount of free memory for query cache.';//to translate
$strShowStatusQcache_lowmem_prunesDescr = 'The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.';//to translate
$strShowStatusQcache_not_cachedDescr = 'The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).';//to translate
$strShowStatusQcache_queries_in_cacheDescr = 'The number of queries registered in the cache.';//to translate
$strShowStatusQcache_total_blocksDescr = 'The total number of blocks in the query cache.';//to translate
$strShowStatusRpl_statusDescr = 'The status of failsafe replication (not yet implemented).';//to translate
$strShowStatusSelect_full_joinDescr = 'The number of joins that do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.';//to translate
$strShowStatusSelect_full_range_joinDescr = 'The number of joins that used a range search on a reference table.';//to translate
$strShowStatusSelect_range_checkDescr = 'The number of joins without keys that check for key usage after each row. (If this is not 0, you should carefully check the indexes of your tables.)';//to translate
$strShowStatusSelect_rangeDescr = 'The number of joins that used ranges on the first table. (It\'s normally not critical even if this is big.)';//to translate
$strShowStatusSelect_scanDescr = 'The number of joins that did a full scan of the first table.';//to translate
$strShowStatusSlave_open_temp_tablesDescr = 'The number of temporary tables currently open by the slave SQL thread.';//to translate
$strShowStatusSlave_retried_transactionsDescr = 'Total (since startup) number of times the replication slave SQL thread has retried transactions.';//to translate
$strShowStatusSlave_runningDescr = 'This is ON if this server is a slave that is connected to a master.';//to translate
$strShowStatusSlow_launch_threadsDescr = 'The number of threads that have taken more than slow_launch_time seconds to create.';//to translate
$strShowStatusSlow_queriesDescr = 'The number of queries that have taken more than long_query_time seconds.';//to translate
$strShowStatusSort_merge_passesDescr = 'The number of merge passes the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.';//to translate
$strShowStatusSort_rangeDescr = 'The number of sorts that were done with ranges.';//to translate
$strShowStatusSort_scanDescr = 'The number of sorts that were done by scanning the table.';//to translate
$strShowStatusTable_locks_immediateDescr = 'The number of times that a table lock was acquired immediately.';//to translate
$strShowStatusTable_locks_waitedDescr = 'The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.';//to translate
$strShowStatusThreads_cachedDescr = 'The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.';//to translate
$strShowStatusThreads_createdDescr = 'The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)';//to translate
$strSkipQueries = 'Number of records(queries) to skip from start';//to translate
$strSmallBigAll = 'Small/Big All';//to translate
$strSnapToGrid = 'Snap to grid';//to translate
$strStandInStructureForView = 'Stand-in structure for view';//to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';//to translate
$strStructureForView = 'Structure for view';//to translate

$strTableIsEmpty = 'Table seems to be empty!';//to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';//to translate
$strToFromPage = 'to/from page';//to translate
$strToggleSmallBig = 'Toggle small/big';//to translate
$strToSelectRelation = 'To select relation, click :';//to translate
$strTransactionCoordinator = 'Transaction coordinator';//to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';//to translate
$strTransformation_text_plain__dateformat = 'Displays a TIME, TIMESTAMP, DATETIME or numeric unix timestamp field as formatted date. The first option is the offset (in hours) which will be added to the timestamp (Default: 0). Use second option to specify a different date/time format string. Third option determines whether you want to see local date or UTC one (use "local" or "utc" strings) for that. According to that, date format has different value - for "local" see the documentation for PHP\'s strftime() function and for "utc" it is done using gmdate() function.';//to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';//to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';//to translate
$strUploadErrorExtension = 'File upload stopped by extension.';//to translate
$strUploadErrorFormSize = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';//to translate
$strUploadErrorIniSize = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';//to translate
$strUploadErrorNoTempDir = 'Missing a temporary folder.';//to translate
$strUploadErrorPartial = 'The uploaded file was only partially uploaded.';//to translate
$strUploadErrorUnknown = 'Unknown error in file upload.';//to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';//to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';//to translate

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

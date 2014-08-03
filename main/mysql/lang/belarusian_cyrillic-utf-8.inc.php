<?php
/* $Id: belarusian_cyrillic-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 *     Translated by:
 *     Jaska Zedlik <jz53 at zedlik.com>
 *     http://www.zedlik.com
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Б', 'КiБ', 'МіБ', 'ГіБ', 'ТіБ', 'ПіБ', 'ЭіБ');

$day_of_week = array('Ндз', 'Пан', 'Аўт', 'Сер', 'Цач', 'Пят', 'Суб');
$month = array('Сту', 'Лют', 'Сак', 'Кра', 'Тра', 'Чэр', 'Ліп', 'Жні', 'Вер', 'Кас', 'Ліс', 'Сьн');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';
$timespanfmt = '%s дзён, %s гадзінаў, %s хвілінаў і %s сэкундаў';

$strAbortedClients = 'Спынена';
$strAccessDeniedCreateConfig = 'Імаверна, прычына гэтага ў тым, што ня створаны канфігурацыйны файл. Каб яго стварыць, можна выкарыстаць %1$sналадачны скрыпт%2$s.';
$strAccessDeniedExplanation = 'phpMyAdmin паспрабаваў падлучыцца да сэрвэра MySQL, але сэрвэр адхіліў злучэньне. Праверце імя хосту, карыстальніка і пароль у config.inc.php і ўпэўніцеся, што яны адпавядаюць інфармацыі, якую даў адміністратар MySQL-сэрвэра.';
$strAccessDenied = 'У доступе адмоўлена';
$strAction = 'Дзеяньне';
$strAddAutoIncrement = 'Дадаць значэньне AUTO_INCREMENT';
$strAddClause = 'Дадаць %s';
$strAddConstraints = 'Дадаць абмежаваньні';
$strAddDeleteColumn = 'Дадаць/выдаліць калёнку крытэру';
$strAddDeleteRow = 'Дадаць/выдаліць радок крытэру';
$strAddFields = 'Дадаць %s новыя палі';
$strAddHeaderComment = 'Дадаць прыватны камэнтар у загаловак (\\n падзяляе радкі)';
$strAddIntoComments = 'Дадаць у камэнтары';
$strAddNewField = 'Дадаць новае поле';
$strAddPrivilegesOnDb = 'Дадаць прывілеі на наступную базу';
$strAddPrivilegesOnTbl = 'Дадаць прывілеі на наступную табліцу';
$strAddSearchConditions = 'Дадаць умовы пошуку (цела для ўмовы "where"):';
$strAddToIndex = 'Дадаць да індэкса &nbsp;%s&nbsp;калёнку(і)';
$strAddUser = 'Дадаць новага карыстальніка';
$strAddUserMessage = 'Быў дададзены новы карыстальнік.';
$strAdministration = 'Адміністраваньне';
$strAffectedRows = 'Закранутыя радкі:';
$strAfter = 'Пасьля %s';
$strAfterInsertBack = 'Перайсьці да папярэдняй старонкі';
$strAfterInsertNewInsert = 'Дадаць яшчэ адзін радок';
$strAfterInsertNext = 'Рэдагаваць наступны радок';
$strAfterInsertSame = 'Вярнуцца да гэтай старонкі';
$strAll = 'Усе';
$strAllowInterrupt = 'Дазволіць спыненьне імпартаваньня ў выпадку, калі скрыпт высьветліць, што скончваецца час выкананьня. Гэта можа быць добрым спосабам імпартаваньня вялікіх файлаў, аднак, гэта можа перапыніць транзакцыі.';
$strAllTableSameWidth = 'Паказаць усе табліцы аднолькавай шырыні?';
$strAlterOrderBy = 'Зьмяніць парадак табліцы';
$strAnalyzeTable = 'Аналізаваць табліцу';
$strAnd = 'І';
$strAndThen = 'і пасьля';
$strAnIndex = 'Быў дададзены індэкс для %s';
$strAny = 'Любы';
$strAnyHost = 'Любы хост';
$strAnyUser = 'Любы карыстальнік';
$strApproximateCount = 'Можа быць прыблізным. Гл. FAQ 3.11';
$strAPrimaryKey = 'Першасны ключ быў дададзены да %s';
$strArabic = 'Арабская';
$strArmenian = 'Армянская';
$strAscending = 'прамы';
$strAtBeginningOfTable = 'У пачатку табліцы';
$strAtEndOfTable = 'У канцы табліцы';
$strAttr = 'Атрыбуты';
$strAutomaticLayout = 'Аўтаматычнае разьмяшчэньне';

$strBack = 'Назад';
$strBaltic = 'Балтыйская';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Двойкавы';
$strBinaryDoNotEdit = 'Двойкавыя дадзеныя — не рэдагуюцца';
$strBinaryLog = 'Двойкавы лог';
$strBinLogEventType = 'Тып падзеі';
$strBinLogInfo = 'Інфармацыя';
$strBinLogName = 'Імя логу';
$strBinLogOriginalPosition = 'Першапачатковая пазыцыя';
$strBinLogPosition = 'Пазыцыя';
$strBinLogServerId = 'ID сэрвэра';
$strBookmarkAllUsers = 'Даць кожнаму карыстальніку доступ да гэтай закладкі';
$strBookmarkCreated = 'Закладка %s створаная';
$strBookmarkDeleted = 'Закладка была выдаленая.';
$strBookmarkLabel = 'Метка';
$strBookmarkQuery = 'Закладзены SQL-запыт';
$strBookmarkReplace = 'Замяніць існую закладку з такім жа імем';
$strBookmarkThis = 'Дадаць гэты SQL-запыт у закладкі';
$strBookmarkView = 'Толькі прагляд';
$strBrowseDistinctValues = 'Прагляд розных значэньняў';
$strBrowseForeignValues = 'Праглядзець зьнешнія значэньні';
$strBrowse = 'Прагляд';
$strBufferPoolActivity = 'Актыўнасьць пулу буфэру';
$strBufferPool = 'Пул буфэру';
$strBufferPoolUsage = 'Выкарыстаньне пулу буфэру';
$strBufferReadMisses = 'Пропускаў чытаньня';
$strBufferReadMissesInPercent = 'Пропускаў чытаньня ў %';
$strBufferWriteWaits = 'Затрымак запісу';
$strBufferWriteWaitsInPercent = 'Затрымак запісу ў %';
$strBulgarian = 'Баўгарская';
$strBusyPages = 'Занятых старонак';
$strBzError = 'phpMyAdmin ня можа сьціснуць дамп з-за праблемаў з пашырэньнем Bz2 у гэтай вэрсіі PHP. Строга рэкамэндуецца вызначыць значэньне дырэктывы <code>$cfg[\'BZipDump\']</code> у вашым канфігурацыйным файле phpMyAdmin як <code>FALSE</code>. Калі вы жадаеце выкарыстоўваць Bz2-сьціск, вам неабходна абнавіць вэрсію PHP. Зьварніцеся да PHP bug report %s для больш падрабязнай інфармацыі.';
$strBzip = 'сьціскаць у bzip';

$strCalendar = 'Каляндар';
$strCanNotLoadExportPlugins = 'Немагчыма загрузіць плагіны экспартаваньня, калі ласка, праверце ўсталяваныя файлы!';
$strCanNotLoadImportPlugins = 'Немагчыма загрузіць плагіны імпартаваньня, калі ласка, праверце ўсталёўку!';
$strCannotLogin = 'Немагчыма залагавацца на сэрвэр MySQL';
$strCantLoad = 'немагчыма загрузіць пашырэньне %s;<br />калі ласка, праверце канфігурацыю PHP';
$strCantLoadRecodeIconv = 'Немагчыма загрузіць пашырэньне iconv або пашырэньне recode, неабходныя для перакадаваньня сымбаляў. Наладзьце PHP на выкарыстаньне гэтых пашырэньняў або ўвогуле адключыце перакадаваньне сымбаляў у phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Немагчыма перайменаваць індэкс у PRIMARY!';
$strCantUseRecodeIconv = 'Немагчыма выкарыстаць ні функцыю iconv, ні libiconvr, ні recode_string у той час, як пашырэньне паведамляе, што яно загружанае. Праверце вашую канфігурацыю PHP.';
$strCardinality = 'Колькасьць элемэнтаў';
$strCaseInsensitive = 'без уліку рэгістру';
$strCaseSensitive = 'з улікам рэгістру';
$strCentralEuropean = 'Цэнтральнаэўрапейская';
$strChangeCopyModeCopy = '... пакінуць старога.';
$strChangeCopyModeDeleteAndReload = ' ... выдаліць старога з табліцы карыстальнікаў і пасьля перазагрузіць прывілеі.';
$strChangeCopyModeJustDelete = ' ... выдаліць старога з табліцы карыстальнікаў.';
$strChangeCopyMode = 'Стварыць новага карыстальніка з такімі ж прывілеямі і ...';
$strChangeCopyModeRevoke = ' ... ануляваць усе актыўныя прывілеі старога і пасьля выдаліць яго.';
$strChangeCopyUser = 'Зьмяніць рэгістрацыйную інфармацыю / Капіяваць карыстальніка';
$strChange = 'Зьмяніць';
$strChangeDisplay = 'Выберыце поле для адлюстраваньня';
$strChangePassword = 'Зьмяніць пароль';
$strCharset = 'Кадыроўка';
$strCharsetOfFile = 'Кадыроўка файла:';
$strCharsetsAndCollations = 'Раскладкі і супастаўленьні';
$strCharsets = 'Кадыроўкі';
$strCheckAll = 'Адзначыць усё';
$strCheckOverhead = 'Адзначыць тыя, што патрабуюць аптымізацыі';
$strCheckPrivs = 'Праверыць прывілеі';
$strCheckPrivsLong = 'Праверыць прывілеі для базы &quot;%s&quot;.';
$strCheckTable = 'Праверыць табліцу';
$strChoosePage = 'Калі ласка, выберыце старонку для рэдагаваньня';
$strColComFeat = 'Паказваць камэнтары калёнак';
$strCollation = 'Супастаўленьне';
$strColumnNames = 'Назвы калёнак';
$strColumnPrivileges = 'Спэцыфічныя прывілеі калёнак';
$strCommand = 'Каманда';
$strComments = 'Камэнтары';
$strCommentsForTable = 'Камэнтары да табліцы';
$strCompatibleHashing = 'Сумяшчальнае з MySQL&nbsp;4.0';
$strCompleteInserts = 'Поўная ўстаўка';
$strCompression = 'Сьціск';
$strCompressionWillBeDetected = 'Мэтад сьціску імпартаванага файла будзе вызначаная аўтаматычна з: %s';
$strConfigDefaultFileError = 'Немагчыма загрузіць канфігурацыю па змоўчаньні з: "%1$s"';
$strConfigFileError = 'phpMyAdmin ня можа прачытаць канфігурацыйны файл!<br />Гэта можа адбыцца ў выпадку, калі PHP знойдзе сынтаксычную памылку ў ім або калі PHP ня можа знайсьці файл.<br />Калі ласка, загрузіце канфігурацыйны файл непасрэдна, выкарыстоўваючы спасылку, прыведзеную ніжэй, і прачытайце паведамленьні PHP пра памылкі. У большасьці выпадкаў, недзе прапушчаны апостраф або кропка з коскай.<br />Калі вы атрымаеце чыстую старонку, значыць, усё добра.';
$strConfigureTableCoord = 'Калі ласка, сканфігуруйце каардынаты для табліцы %s';
$strConnectionError = 'Немагчыма падлучыцца: няправільныя налады.';
$strConnections = 'Падлучэньні';
$strConstraintsForDumped = 'Абмежаваньні для экспартаваных табліц';
$strConstraintsForTable = 'Абмежаваньні для табліцы';
$strCookiesRequired = 'Cookies мусяць быць уключанымі пасьля гэтага месца.';
$strCopyDatabaseOK = 'База дадзеных %s была скапіяваная ў %s';
$strCopy = 'Скапіяваць';
$strCopyTable = 'Скапіяваць табліцу ў (база дадзеных<b>.</b>табліца):';
$strCopyTableOK = 'Табліца %s была скапіяваная ў %s.';
$strCopyTableSameNames = 'Немагчыма скапіяваць табліцу ў саму сябе!';
$strCouldNotKill = 'phpMyAdmin ня можа спыніць працэс %s. Напэўна, ён ужо спынены.';
$strCreateDatabaseBeforeCopying = 'выканаць CREATE DATABASE перад капіяваньнем';
$strCreateIndex = 'Стварыць індэкс на&nbsp;%s&nbsp;калёнках';
$strCreateIndexTopic = 'Стварыць новы індэкс';
$strCreateNewDatabase = 'Стварыць новую базу дадзеных';
$strCreateNewTable = 'Стварыць новую табліцу ў БД %s';
$strCreate = 'Стварыць';
$strCreatePage = 'Стварыць новую старонку';
$strCreatePdfFeat = 'Стварэньне PDF-файлаў';
$strCreateUserDatabase = 'База дадзеных для карыстальніка';
$strCreateUserDatabaseName = 'Стварыць базу дадзеных з такім самым імем і надзяліць усімі прывілеямі';
$strCreateUserDatabaseNone = 'Ніякая';
$strCreateUserDatabaseWildcard = 'Надзяліць усімі прывілеямі базы з іменамі па масцы (імя карыстальніка_%)';
$strCreationDates = 'Стварэньне/Абнаўленьне/Праверка дат';
$strCriteria = 'Крытэр';
$strCroatian = 'Харвацкая';
$strCSV = 'CSV';
$strCyrillic = 'Кірылічная';
$strCzechSlovak = 'Чэхаславацкая';
$strCzech = 'Чэская';

$strDanish = 'Дацкая';
$strData = 'Дадзеныя';
$strDatabase = 'База дадзеных';
$strDatabaseEmpty = 'Імя базы дадзеных не пазначанае!';
$strDatabaseExportOptions = 'Налады экспарту базы дадзеных';
$strDatabaseHasBeenDropped = 'База дадзеных %s была выдаленая.';
$strDatabases = 'Базы дадзеных';
$strDatabasesDropped = '%s базаў дадзеных былі пасьпяхова выдаленыя.';
$strDatabasesStatsDisable = 'Адключыць статыстыку';
$strDatabasesStatsEnable = 'Уключыць статыстыку';
$strDatabasesStatsHeavyTraffic = 'Заўвага: Уключэньне статыстыкі базы дадзеных можа выклікаць вялікую колькасьць трафіку паміж вэб-сэрвэрам і сэрвэрам MySQL.';
$strDatabasesStats = 'Статыстыка базаў дадзеных';
$strDataDict = 'Слоўнік дадзеных';
$strDataOnly = 'Толькі дадзеныя';
$strDataPages = 'Старонак з дадзенымі';
$strDBComment = 'Камэнтар да базы дадзеных: ';
$strDBCopy = 'Капіяваць базу дадзеных у';
$strDbPrivileges = 'Спэцыфічныя прывілеі базы дадзеных';
$strDBRename = 'Перайменаваць базу дадзеных у';
$strDbSpecific = 'спэцыфічны для базы дадзеных';
$strDefaultEngine = '%s зьяўляецца машынай захаваньня дадзеных па змоўчаньні на гэтым MySQL-сэрвэры.';
$strDefault = 'Па змоўчаньні';
$strDefaultValueHelp = 'Для значэньняў па змоўчаньні, калі ласка, увядзіце проста значэньне, без выкарыстаньня зваротных слэшаў і двукосься, выкарыстоўваючы фармат: a';
$strDefragment = 'Дэфрагмэнтаваць табліцу';
$strDelayedInserts = 'Выкарыстоўваць адкладзеныя ўстаўкі';
$strDeleteAndFlush = 'Выдаліць карыстальнікаў і пасьля перазагрузіць прывілеі.';
$strDeleteAndFlushDescr = 'Гэта лепшы спосаб, але перазагрузка прывілеяў можа заняць пэўны час.';
$strDelete = 'Выдаліць';
$strDeleted = 'Радок быў выдалены';
$strDeletedRows = 'Выдаленыя радкі:';
$strDeleteNoUsersSelected = 'На выбраныя карыстальнікі для выдаленьня!';
$strDeleting = 'Выдаленьне %s';
$strDelimiter = 'Разьдзяляльнік';
$strDelOld = 'Бягучая старонка ўтрымлівае спасылкі на табліцы, якія больш не існуюць. Ці жадаеце вы выдаліць гэтыя спасылкі?';
$strDescending = 'адваротны';
$strDescription = 'Апісаньне';
$strDictionary = 'слоўнік';
$strDirtyPages = 'Брудных старонак';
$strDisabled = 'Адключана';
$strDisableForeignChecks = 'Адключыць праверку зьнешніх ключоў';
$strDisplayFeat = 'Паказваць магчымасьці';
$strDisplayOrder = 'Парадак прагляду:';
$strDisplayPDF = 'Паказаць PDF-схему';
$strDoAQuery = 'Выканаць "запыт згодна прыклада" (сымбаль падстаноўкі: "%")';
$strDocu = 'Дакумэнтацыя';
$strDoYouReally = 'Ці сапраўды вы жадаеце ';
$strDrop = 'Выдаліць';
$strDropDatabaseStrongWarning = 'Вы зьбіраеце ВЫДАЛІЦЬ базу дадзеных цалкам!';
$strDropUsersDb = 'Выдаліць базы дадзеных, якія маюць такія ж імёны як і карыстальнікі.';
$strDumpingData = 'Дамп дадзеных табліцы';
$strDumpSaved = 'Дамп захаваны ў файл %s.';
$strDumpXRows = 'Дамп %s радкоў, пачынаючы з %s.';
$strDynamic = 'дынамічны';

$strEditPDFPages = 'Рэдагаваць PDF-старонкі';
$strEditPrivileges = 'Рэдагаваць прывілеі';
$strEdit = 'Рэдагаваць';
$strEffective = 'Эфэктыўнасьць';
$strEmpty = 'Ачысьціць';
$strEmptyResultSet = 'MySQL вярнула пусты вынік (то бок нуль радкоў).';
$strEnabled = 'Уключана';
$strEncloseInTransaction = 'Экспартаваць за адну транзакцыю';
$strEndCut = 'END CUT';
$strEnd = 'Канец';
$strEndRaw = 'END RAW';
$strEngineAvailable = '%s даступная на гэтым MySQL-сэрвэры.';
$strEngineDisabled = '%s была адключаная для рэтага MySQL-сэрвэра.';
$strEngines = 'Машыны';
$strEngineUnsupported = 'Гэты сэрвэр MySQL не падтрымлівае машыну захаваньня дадзеных %s.';
$strEnglish = 'Ангельская';
$strEnglishPrivileges = ' Заўвага: імёны прывілеяў MySQL задаюцца па-ангельску ';
$strError = 'Памылка';
$strErrorInZipFile = 'Памылка ў ZIP-архіве:';
$strErrorRenamingTable = 'Памылка перайменаваньня табліцы %1$s у %2$s';
$strEscapeWildcards = 'Сымбалі падстаноўкі _ і % мусяць быць экранаванымі сымбалем \ для іх літаральнага выкарыстаньня';
$strEsperanto = 'Эспэранта';
$strEstonian = 'Эстонская';
$strExcelEdition = 'Вэрсія Excel';
$strExecuteBookmarked = 'Выканаць запыт з закладак';
$strExplain = 'Тлумачыць SQL';
$strExportMustBeFile = 'Дадзеныя выбранага тыпу экспартаваньня мусяць быць зазаванымі ў файл!';
$strExport = 'Экспарт';
$strExtendedInserts = 'Пашыраныя ўстаўкі';
$strExtra = 'Дадаткова';

$strFailedAttempts = 'Няўдалых спробаў';
$strFieldHasBeenDropped = 'Поле %s было выдаленае';
$strField = 'Поле';
$strFieldsEnclosedBy = 'Палі ўзятыя ў';
$strFieldsEscapedBy = 'Палі экрануюцца';
$strFields = 'Палі';
$strFieldsTerminatedBy = 'Палі падзеленыя';
$strFileAlreadyExists = 'Файл %s ужо існуе на сэрвэры, зьмяніце імя файла або праверце опцыю перазапісу.';
$strFileCouldNotBeRead = 'Немагчыма прачытаць файл';
$strFileNameTemplateDescription = 'Гэтае значэньне інтэрпрэтуецца з выкарыстаньнем %1$sstrftime%2$s, таму можна выкарыстоўваць радкі фарматаваньня часу. Апроч гэтага, будуць праведзеныя наступныя зьмены: %3$s. Астатні тэкст застанецца як ёсьць.';
$strFileNameTemplateDescriptionDatabase = 'імя базы дадзеных';
$strFileNameTemplateDescriptionServer = 'імя сэрвэра';
$strFileNameTemplateDescriptionTable = 'імя табліцы';
$strFileNameTemplate = 'Шаблён назвы файла';
$strFileNameTemplateRemember = 'запомніць шаблён';
$strFileToImport = 'Імпартаваць файл';
$strFixed = 'фіксаваны';
$strFlushPrivilegesNote = 'Заўвага: phpMyAdmin атрымлівае прывілеі карыстальнікаў наўпростава з табліц прывілеяў MySQL. Зьмесьціва гэтых табліц можа адрозьнівацца ад прывілеяў, якія выкарыстоўвае сэрвэр, калі яны былі зьмененыя ўручную. У гэтым выпадку вам трэба %sперазагрузіць прывілеі%s да таго, як вы працягнеце.';
$strFlushQueryCache = 'Скінуць кэш запытаў';
$strFlushTable = 'Скінуць кэш табліцы ("FLUSH")';
$strFlushTables = 'Скінуць (закрыць) усе табліцы';
$strFontSize = 'Памер шрыфта';
$strFormat = 'Фармат';
$strFormEmpty = 'Не зададзенае значэньне ў форме!';
$strFreePages = 'Вольных старонак';
$strFullText = 'Поўныя тэксты';
$strFunction = 'Функцыя';
$strFunctions = 'Функцыі';

$strGenBy = 'Створаны';
$strGeneralRelationFeat = 'Магчымасьці асноўных сувязяў';
$strGenerate = 'Згэнэраваць';
$strGeneratePassword = 'Згэнэраваць пароль';
$strGenTime = 'Час стварэньня';
$strGeorgian = 'Грузінская';
$strGerman = 'Нямецкая';
$strGlobal = 'глябальны';
$strGlobalPrivileges = 'Глябальныя прывілеі';
$strGlobalValue = 'Глябальнае значэньне';
$strGo = 'Панеслася';
$strGrantOption = 'Grant';
$strGreek = 'Грэцкая';
$strGzip = 'архіваваны ў gzip';

$strHandler = 'Апрацоўнік';
$strHasBeenAltered = 'была зьмененая.';
$strHasBeenCreated = 'была створаная.';
$strHaveToShow = 'Вам неабходна выбраць прынамсі адну калёнку для адлюстраваньня';
$strHebrew = 'Габрэйская';
$strHome = 'Да пачатку';
$strHomepageOfficial = 'Афіцыйная старонка phpMyAdmin';
$strHostEmpty = 'Пустое імя хосту!';
$strHost = 'Хост';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Вугорская';

$strIcelandic = 'Ісьляндзкая';
$strId = 'ID';
$strIdxFulltext = 'Поўнатэкстэкставае';
$strIgnore = 'Ігнараваць';
$strIgnoreDuplicates = 'Ігнараваць радкі, якія паўтараюцца';
$strIgnoreInserts = 'Выкарыстоўваць устаўкі ігнараваньняў';
$strImport = 'Імрарт';
$strImportFiles = 'Імпартаваць файлы';
$strImportFormat = 'Фармат імпартаванага файла';
$strImportSuccessfullyFinished = 'Імпартраваньне пасьпяхова завершанае, выканана %d запытаў.';
$strIndex = 'Індэкс';
$strIndexes = 'Індэксы';
$strIndexHasBeenDropped = 'Індэкс %s быў выдалены';
$strIndexName = 'Імя індэкса:';
$strIndexType = 'Тып індэкса:';
$strIndexWarningTable = 'Праблемы з індэксамі для табліцы `%s`';
$strInnoDBAutoextendIncrement = 'Аўтапашыральнае прырашчэньне';
$strInnoDBAutoextendIncrementDesc = ' Памер прырашчэньня для пашырэньня памеру прасторы аўтапашыральнай табліцы, калі яна запоўніцца.';
$strInnoDBBufferPoolSizeDesc = 'Памер буфэру ў памяці, які InnoDB выкарыстоўвае для кэшаваньня дадзеных і індэксаў табліц.';
$strInnoDBBufferPoolSize = 'Памер пулу буфэру';
$strInnoDBDataFilePath = 'Файлы дадзеных';
$strInnoDBDataHomeDirDesc = 'Агульная частка шляху тэчкі да ўсіх файлаў дадзеных InnoDB.';
$strInnoDBDataHomeDir = 'Хатняя тэчка дадзеных';
$strInnoDBPages = 'старонак';
$strInnodbStat = 'Стан InnoDB';
$strInsecureMySQL = 'Ваш канфігурацыйны файл утрымлівае налады (карыстальнік root без паролю), якія адпавядаюць прывілеяванаму карыстальніку MySQL па змоўчаньні. Ваш сэрвэр MySQL працуе з гэтай наладай па змоўчаньні і зьяўляецца адкрытым для зьнешняга ўрываньня, і таму вам абавязкова трэба выправіць гэтую хібу ў бясьпецы.';
$strInsertAsNewRow = 'Уставіць як новы радок';
$strInsertedRowId = 'Id устаўленага радка:';
$strInsertedRows = 'Даданыя радкі:';
$strInsert = 'Уставіць';
$strInternalNotNecessary = '* Унутраная сувязь не зьяўляецца абавязковай, калі яна ўжо існуе ў InnoDB.';
$strInternalRelations = 'Унутраныя сувязі';
$strInUse = 'выкарыстоўваецца';
$strInvalidAuthMethod = 'У канфігурацыі вызначаны некарэктны мэтад аўтэнтыфікацыі:';
$strInvalidColumn = 'Вызначаная некарэктная калёнка (%s)!';
$strInvalidColumnCount = 'Колькасьць калёнак мусіць быць большай за нуль.';
$strInvalidCSVFieldCount = 'Няправільная колькасьць палёў у CSV-дадзеных у радку %d.';
$strInvalidCSVFormat = 'Некарэктны фармат CSV-дадзеных у радку %d.';
$strInvalidCSVParameter = 'Недапушчальны парэмэтар для імпарту дадзеных у CSV: %s';
$strInvalidDatabase = 'Няправільная база дадзеных';
$strInvalidFieldAddCount = 'Трэба дадаць прынамсі адно поле.';
$strInvalidFieldCount = 'Табліца мусіць мець прынамсі адно поле.';
$strInvalidLDIImport = 'Гэты плагін не падтрымлівае сьціснутыя дадзеныя!';
$strInvalidRowNumber = '%d не зьяўляецца карэктным нумарам радка.';
$strInvalidServerHostname = 'Няправільнае імя хосту для сэрвэра %1$s. Калі ласка, праверце канфігурыцыю.';
$strInvalidServerIndex = 'Некарэктны індэкс сэрвэра: "%s"';
$strInvalidTableName = 'Некарэктнае імя табліцы';

$strJapanese = 'Японская';
$strJoins = 'Аб\'яднаньні';
$strJumpToDB = 'Перайсьці да базы дадзеных &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Выдаленыя&quot; карыстальнікі ўсё яшчэ змогуць атрымаць доступ да сэрвэра як звычайна, пакуль прывілеі ня будуць перазагружаныя.';
$strJustDelete = 'Проста выдаліць карыстальнікаў з табліц прывілеяў.';

$strKeepPass = 'Не зьмяняць пароль';
$strKeyCache = 'Кэш ключоў';
$strKeyname = 'Імя ключа';
$strKill = 'Спыніць';
$strKorean = 'Карэйская';

$strLandscape = 'Краявід';
$strLanguage = 'Мова';
$strLanguageUnknown = 'Невядомая мова: %1$s.';
$strLatchedPages = 'Фіксаваныя старонкі';
$strLatexCaption = 'Загаловак табліцы';
$strLatexContent = 'Зьмесьціва табліцы __TABLE__';
$strLatexContinuedCaption = 'Працягнуты загаловак табліцы';
$strLatexContinued = '(працяг)';
$strLatexIncludeCaption = 'Уключыць загаловак табліцы';
$strLatexLabel = 'Ключ меткі';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Структура табліцы __TABLE__';
$strLatvian = 'Латвійская';
$strLDI = 'CSV з выкарыстаньнем LOAD DATA';
$strLDILocal = 'Выкарыстоўваць ключавое слова LOCAL';
$strLengthSet = 'Даўжыня/Значэньні*';
$strLimitNumRows = 'Колькасьць радкоў на старонку';
$strLinesTerminatedBy = 'Радкі падзеленыя';
$strLinkNotFound = 'Сувязь ня знойдзеная';
$strLinksTo = 'Зьвязаная з';
$strLithuanian = 'Літоўская';
$strLocalhost = 'Лякальны';
$strLocationTextfile = 'Месцазнаходжаньне тэкставага файла';
$strLoginInformation = 'Інфармацыя пра ўваход';
$strLogin = 'Уваход у сыстэму';
$strLogout = 'Выйсьці з сыстэмы';
$strLogPassword = 'Пароль:';
$strLogServer = 'Сэрвэр';
$strLogUsername = 'Імя карыстальніка:';
$strLongOperation = 'Гэтая апэрацыя можа заняць шмат часу. Працягваць?';

$strMaxConnects = 'максымум адначасовых злучэньняў';
$strMaximalQueryLength = 'Максымальная даўжыня створанага запыту';
$strMaximumSize = 'Максымальны памер: %s%s';
$strMbExtensionMissing = 'Пашырэньне PHP mbstring ня знойдзенае, а вы, здаецца, выкарыстоўваеце шматбайтавую кадыроўку. Без пашырэньня mbstring phpMyAdmin ня можа падзяляць радкі карэктна, і гэта можа прывесьці да нечаканых вынікаў.';
$strMbOverloadWarning = 'Вы ўключылі mbstring.func_overload у вашым канфігурацыйным файле PHP. Гэтая опцыя несумяшчальная з phpMyAdmin і можа выклікаць пашкоджаньне дадзеных!';
$strMIME_available_mime = 'Даступныя MIME-тыпы';
$strMIME_available_transform = 'Даступныя пераўтварэньні';
$strMIME_description = 'Апісаньне';
$strMIME_MIMEtype = 'MIME-тып';
$strMIME_nodescription = 'Няма даступных апісаньняў для гэтага пераўтварэньня.<br />Калі ласка, спытайце аўтара, што робіць %s.';
$strMIME_transformation = 'Пераўтварэньне MIME-тыпу браўзэрам';
$strMIME_transformation_note = 'Для атрыманьня сьпісу даступных опцыяў трансфармацыі і пераўтварэньняў іхных MIME-тыпаў, націсьніце на %sапісаньні пераўтварэньняў%s';
$strMIME_transformation_options = 'Опцыі пераўтварэньня';
$strMIME_transformation_options_note = 'Калі ласка, уводзьце значэньні опцыяў пераўтварэньня выкарыстоўваючы гэты фармат: \'a\', 100, b,\'c\'...<br />Калі вам трэба ўжыць зваротны слэш ("\") або апостраф ("\'") у гэтых значэньнях, устаўце зваротны слэш перад імі (напрыклад, \'\\\\xyz\' або \'a\\\'b\').';
$strMIMETypesForTable = 'MIME-тыпы табліцы';
$strMIME_without = 'MIME-тыпы, вылучаныя курсівам, ня маюць асобнай функцыі пераўтварэньня';
$strModifications = 'Мадыфікацыі былі захаваныя';
$strModify = 'Зьмяніць';
$strModifyIndexTopic = 'Зьмяніць індэкс';
$strMoveTable = 'Перанесьці табліцу ў (база дадзеных<b>.</b>табліца):';
$strMoveTableOK = 'Табліца %s была перанесеная ў %s.';
$strMoveTableSameNames = 'Немагчыма перанесьці табліцу ў саму сябе!';
$strMultilingual = 'шматмоўная';
$strMyISAMDataPointerSizeDesc = 'Значэньне па змоўчаньні памеру ўказальніка ў байтах, для выкарыстаньня ў CREATE TABLE для табліц MyISAM, калі ня вызначаная опцыя MAX_ROWS.';
$strMyISAMDataPointerSize = 'Памер указальніка на дадзеныя';
$strMyISAMMaxExtraSortFileSizeDesc = 'Калі памер часовага файла, які выкарыстоўваецца для хуткага стварэньня індэксу MyISAM, будзе большы, чым выкарыстаньне для кэшу ключоў памеру, пазначанага тут, выберыце мэтад кэшаваньня ключоў.';
$strMyISAMMaxExtraSortFileSize = 'Максымальны памер часовых файлаў для стварэньня індэксу';
$strMyISAMMaxSortFileSizeDesc = 'Максымальны памер часовага файла MySQL, які дазволена выкарыстоўваць для перастварэньня індэксу MyISAM (падчас REPAIR TABLE, ALTER TABLE, або LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Максымальны памер для часовых файлаў сартаваньня';
$strMyISAMRecoverOptionsDesc = 'Рэжым для аўтаматычнага ўзнаўленьня пашкоджаных табліц MyISAM, як вызначаны праз опцыю --myisam-recover загрузкі сэрвэра.';
$strMyISAMRecoverOptions = 'Рэжым аўтаматычнага ўзнаўленьня';
$strMyISAMRepairThreadsDesc = 'Калі гэтае значэньне большае за 1, індэксы табліц MyISAM будуць стварацца паралельна (кожны індэкс у сваім уласным патоку) падчас узнаўленьня працэсам сартаваньня.';
$strMyISAMRepairThreads = 'Патокаў узнаўленьня';
$strMyISAMSortBufferSizeDesc = 'Буфэр, які выдзяляецца для сартаваньня індэксаў MyISAM падчас REPAIR TABLE або падчас стварэньня індэксаў, выкарыстоўваючы CREATE INDEX ці ALTER TABLE.';
$strMyISAMSortBufferSize = 'Памер буфэру сартаваньня';
$strMySQLCharset = 'Кадыроўка MySQL';
$strMysqlClientVersion = 'Вэрсія кліента MySQL';
$strMySQLConnectionCollation = 'Супастаўленьне падлучэньня да MySQL';
$strMySQLSaid = 'Адказ MySQL: ';
$strMySQLShowProcess = 'Паказаць працэсы';
$strMySQLShowStatus = 'Паказаць стан MySQL';
$strMySQLShowVars = 'Паказаць сыстэмныя зьменныя MySQL';

$strName = 'Назва';
$strNext = 'Наступны';
$strNoActivity = 'Не было аніякай актыўнасьці на працягу %s сэкундаў. Калі ласка, увайдзіце зноў';
$strNoDatabases = 'Базы дадзеных адсутнічаюць';
$strNoDatabasesSelected = 'Ня выбраная база дадзеных.';
$strNoDataReceived = 'Дадзеныя для імпартаваньня не атрыманыя. Альбо ніводны файл ня быў загружаны, альбо памер файла перавысіў максымальны памер, вызначаны канфігурацыяй PHP. Гл. FAQ 1.16.';
$strNoDescription = 'няма апісаньня';
$strNoDetailsForEngine = 'Для гэтай машыны захаваньня дадзеных дэтальная інфармацыя не даступная.';
$strNoDropDatabases = 'Каманды "DROP DATABASE" адключаныя.';
$strNoExplain = 'Не тлумачыць SQL';
$strNoFilesFoundInZip = 'Файлы ў ZIP-архіве ня знойдзеныя!';
$strNoFrames = 'Для работы phpMyAdmin патрэбны браўзэр з падтрымкай <b>фрэймаў</b>.';
$strNo = 'Не';
$strNoIndex = 'Індэкс ня вызначаны!';
$strNoIndexPartsDefined = 'Часткі індэксу ня вызначаныя!';
$strNoModification = 'Няма зьменаў';
$strNone = 'Няма';
$strNoOptions = 'Гэты фармат ня мае опцыяў';
$strNoPassword = 'Без пароля';
$strNoPermission = 'Вэб-сэрвэр ня мае дазволу для захаваньня ў файл %s.';
$strNoPhp = 'Без PHP-коду';
$strNoPrivileges = 'Без прывілеяў';
$strNoRights = 'Вы ня маеце дастатковых прывілеяў быць у гэтым месцы ў гэты час!';
$strNoRowsSelected = 'Ніводны радок ня выбраны';
$strNoSpace = 'Недастаткова месца для захаваньня ў файл %s.';
$strNoTablesFound = 'У базе дадзеных табліц ня выяўлена.';
$strNoThemeSupport = 'Тэмы не падтрымліваюцца; калі ласка, праверце вашую канфігурацыю і/або вашыя тэмы ў тэчцы %s.';
$strNotNumber = 'Гэта ня лік!';
$strNotOK = 'не OK';
$strNotSet = 'Табліца <b>%s</b> ня знойдзеная або ня вызначаная ў %s';
$strNoUsersFound = 'Не знойдзены карыстальнік.';
$strNoValidateSQL = 'Не правяраць SQL';
$strNull = 'Нуль';
$strNumberOfFields = 'Колькасьць палёў';
$strNumSearchResultsInTable = '%s супадзеньняў у табліцы <i>%s</i>';
$strNumSearchResultsTotal = '<b>Агулам:</b> <i>%s</i> супадзеньняў';
$strNumTables = 'Табліц';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Спэцыфікацыя Open Document';
$strOpenDocumentText = 'Тэкст Open Document';
$strOpenNewWindow = 'Адкрыць новае акно phpMyAdmin';
$strOperations = 'Апэрацыі';
$strOperator = 'Апэратар';
$strOptimizeTable = 'Аптымізаваць табліцу';
$strOr = 'Або';
$strOverhead = 'Выкарыстаньне рэсурсаў';
$strOverwriteExisting = 'Перазапісваць існуючы(я) файл(ы)';

$strPageNumber = 'Старонка:';
$strPagesToBeFlushed = 'Скінуць кэш старонак';
$strPaperSize = 'Памер паперы';
$strPartialImport = 'Частковы імпарт';
$strPartialText = 'Частковыя тэксты';
$strPasswordChanged = 'Пароль для %s пасьпяхова зьменены.';
$strPasswordEmpty = 'Пусты пароль!';
$strPasswordHashing = 'Хэшаваньне паролю';
$strPassword = 'Пароль';
$strPasswordNotSame = 'Паролі не супадаюць!';
$strPdfDbSchema = 'Структура базы "%s" — старонка %s';
$strPdfInvalidTblName = 'Табліцы "%s" не існуе!';
$strPdfNoTables = 'Няма табліц';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Генэруе справаздачу з дадзенымі асобнай табліцы)';
$strPDFReportTitle = 'Загаловак справаздачы';
$strPerHour = 'у гадзіну';
$strPerMinute = 'у хвіліну';
$strPerSecond = 'у сэкунду';
$strPersian = 'Пэрсыдзкая';
$strPhoneBook = 'тэлефонная кніга';
$strPHP40203 = 'Вы выкарыстоўваеце PHP 4.2.3, якая мае сур\'ёзныя памылкі пры рабоце з шматбайтавымі радкамі (mbstring). Глядзіце паведамленьне пра памылку PHP 19404. Гэта вэрсія PHP не рэкамэндуецца для выкарыстаньня з phpMyAdmin.';
$strPhp = 'Стварыць PHP-код';
$strPHPVersion = 'Вэрсія PHP';
$strPmaDocumentation = 'Дакумэнтацыя па phpMyAdmin';
$strPmaUriError = 'Дырэктыва <tt>$cfg[\'PmaAbsoluteUri\']</tt> ПАВІННА быць вызначаная ў вашым канфігурацыйным файле!';
$strPolish = 'Польская';
$strPortrait = 'Партрэт';
$strPos1 = 'Пачатак';
$strPrevious = 'Назад';
$strPrimary = 'Першасны';
$strPrimaryKeyHasBeenDropped = 'Першасны ключ быў выдалены';
$strPrimaryKeyName = 'Імя першаснага ключа мусіць быць PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>мусіць</b> быць імем першаснага ключа і <b>толькі</b> яго!)';
$strPrint = 'Друк';
$strPrintView = 'Вэрсія для друку';
$strPrintViewFull = 'Вэрсія для друку (з усім тэкстам)';
$strPrivDescAllPrivileges = 'Уключае ўсе прывілеі, апроч GRANT.';
$strPrivDescAlter = 'Дазваляе зьмяняць структуру існых табліц.';
$strPrivDescAlterRoutine = 'Дазваляе зьмяняць і выдаляць праграмы, якія захоўваюцца.';
$strPrivDescCreateDb = 'Дазваляе ствараць новыя базы дадзеных і табліцы.';
$strPrivDescCreateRoutine = 'Дазваляе ствараць праграмы, якія захоўваюцца.';
$strPrivDescCreateTbl = 'Дазваляе ствараць новыя табліцы.';
$strPrivDescCreateTmpTable = 'Дазваляе ствараць часовыя табліцы.';
$strPrivDescCreateUser = 'Дазваляе ствараць, выдаляць і пераймяноўваць уліковыя запісы карыстальнікаў';
$strPrivDescCreateView = 'Дазваляе ствараць новыя прагляды.';
$strPrivDescDelete = 'Дазваляе выдаляць дадзеныя.';
$strPrivDescDropDb = 'Дазваляе выдаляць базы дадзеных і табліцы.';
$strPrivDescDropTbl = 'Дазваляе выдаляць табліцы.';
$strPrivDescExecute5 = 'Дазваляе выкананьне праграмаў, якія захоўваюцца.';
$strPrivDescExecute = 'Дазваляе выкананьне захаваных працэдур; Не працуе ў гэтай вэрсіі MySQL.';
$strPrivDescFile = 'Дазваляе імпартаваць дадзеныя з файлаў і экспартаваць дадзеныя ў файлы.';
$strPrivDescGrant = 'Дазваляе дадаваць карыстальнікаў і прывілеі без перазагрузкі табліц прывілеяў.';
$strPrivDescIndex = 'Дазваляе ствараць і выдаляць індэксы.';
$strPrivDescInsert = 'Дазваляе ўстаўляць і замяняць дадзеныя.';
$strPrivDescLockTables = 'Дазваляе блякаваць табліцы для бягучага патоку.';
$strPrivDescMaxConnections = 'Абмяжоўвае колькасьць новых злучэньняў, якія карыстальнік можа адкрыць на працягу гадзіны.';
$strPrivDescMaxQuestions = 'Абмяжоўвае колькасьць запытаў, якія карыстальнік можа адправіць на сэрвэр на працягу гадзіны.';
$strPrivDescMaxUpdates = 'Абмяжоўвае колькасьць камандаў, зьмяняючых любую табліцу або базу дадзеных, якія карыстальнік можа выканаць на працягу гадзіны.';
$strPrivDescMaxUserConnections = 'Абмяжоўвае колькасьць адначасовых злучэньняў, якія можа мець карыстальнік.';
$strPrivDescProcess3 = 'Дазваляе спыняць працэсы іншых карыстальнікаў.';
$strPrivDescProcess4 = 'Дазваляе праглядаць поўныя запыты ў сьпісе працэсаў.';
$strPrivDescReferences = 'Не працуе ў гэтай вэрсіі MySQL.';
$strPrivDescReload = 'Дазваляе перазагружаць налады сэрвэра і ачышчаць кэш сэрвэра.';
$strPrivDescReplClient = 'Дазваляе карыстальніку пытацца, дзе знаходзяцца slaves / masters.';
$strPrivDescReplSlave = 'Неабходна для рэплікацыі slaves.';
$strPrivDescSelect = 'Дазваляе чытаць дадзеныя.';
$strPrivDescShowDb = 'Дае доступ да поўнага сьпісу базаў дадзеных.';
$strPrivDescShowView = 'Дазваляе выкананьне запытаў SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Дазваляе спыняць сэрвэр.';
$strPrivDescSuper = 'Дазваляе падлучэньне, нават калі дасягнуты максымальны лік падлучэньняў; Патрабуецца для большасьці адміністратыўных апэрацыяў, такіх як вызначэньне глябальных зьменных або спыненьне патокаў іншых карыстальнікаў.';
$strPrivDescUpdate = 'Дазваляе зьмяняць дадзеныя.';
$strPrivDescUsage = 'Без прывілеяў.';
$strPrivileges = 'Прывілеі';
$strPrivilegesReloaded = 'Прывілеі былі пасьпяхова перазагружаныя.';
$strProcedures = 'Працэдуры';
$strProcesses = 'Працэсы';
$strProcesslist = 'Сьпіс працэсаў';
$strProtocolVersion = 'Вэрсія пратаколу';
$strPutColNames = 'Пазначыць назвы палёў у першым радку';

$strQBE = 'Запыт згодна прыкладу';
$strQBEDel = 'Выдаліць';
$strQBEIns = 'Уставіць';
$strQueryCache = 'Кэш запытаў';
$strQueryFrame = 'Акно запыту';
$strQueryOnDb = 'SQL-запыт да БД <b>%s</b>:';
$strQueryResultsOperations = 'Дзеяньні з вынікамі запытаў';
$strQuerySQLHistory = 'Гісторыя SQL';
$strQueryStatistics = '<b>Статыстыка запытаў</b>: З моманту запуску %s запытаў было адпраўлена на сэрвэр.';
$strQueryTime = 'Запыт выконваўся %01.4f сэк';
$strQueryType = 'Тып запыту';
$strQueryWindowLock = 'Не перазапісвайце гэты запыт у іншых вокнах';

$strReadRequests = 'Запыты чытаньня';
$strReceived = 'Атрымана';
$strRecords = 'Запісы';
$strReferentialIntegrity = 'Праверыць цэласнасьць дадзеных:';
$strRefresh = 'Абнавіць';
$strRelationalSchema = 'Рэляцыйная схема';
$strRelationNotWorking = 'Дадатковыя магчымасьці работы з зьвязанымі табліцамі былі адключаныя. Каб высьветліць чаму, націсьніце %sтут%s.';
$strRelationsForTable = 'Сувязі ў табліцы';
$strRelations = 'Сувязі';
$strRelationView = 'Прагляд залежнасьцяў';
$strReloadingThePrivileges = 'Перазагрузіць прывілеі';
$strReloadPrivileges = 'Перазагрузіць прывілеі';
$strRemoveSelectedUsers = 'Выдаліць выбраных карыстальнікаў';
$strRenameDatabaseOK = 'База дадзеных %s была перайменаваная ў %s';
$strRenameTable = 'Перайменаваць табліцу ў';
$strRenameTableOK = 'Табліца %s была перайменаваная ў %s';
$strRepairTable = 'Рамантаваць табліцу';
$strReplaceNULLBy = 'Замяняць NULL на';
$strReplaceTable = 'Замяніць дадзеныя табліцы дадзенымі з файла';
$strReplication = 'Рэплікацыя';
$strReset = 'Скінуць';
$strResourceLimits = 'Абмежаваньні рэсурсаў';
$strReType = 'Пацьверджаньне';
$strRevoke = 'Ануляваць';
$strRevokeAndDelete = 'Ануляваць усе актыўныя прывілеі карыстальнікаў і пасьля выдаліць іх.';
$strRevokeAndDeleteDescr = 'Карыстальнікі ўсё яшчэ будуць мець прывілеі карыстаньня (USAGE), пакуль прывілеі ня будуць перазагружаныя.';
$strRevokeMessage = 'Вы анулявалі прывілеі для %s';
$strRomanian = 'Румынская';
$strRowLength = 'Даўжыня радка';
$strRows = 'Радкі';
$strRowsFrom = 'радкоў, пачынаючы з запісу #';
$strRowSize = ' Памер радка ';
$strRowsModeFlippedHorizontal = 'гарызантальна (павернутыя загалоўкі)';
$strRowsModeHorizontal = 'гарызантальна';
$strRowsModeOptions = 'у рэжыме %s і паўтараць загалоўкі праз кожныя %s радкоў';
$strRowsModeVertical = 'вэртыкальна';
$strRowsStatistic = 'Статыстыка радку';
$strRunning = 'на %s';
$strRunQuery = 'Адправіць запыт';
$strRunSQLQuery = 'Выканаць SQL-запыт(ы) на базе дадзеных %s';
$strRunSQLQueryOnServer = 'Выканаць SQL-запыт(ы) на сэрвэры %s';
$strRussian = 'Расейская';

$strSave = 'Захаваць';
$strSaveOnServer = 'Захаваць на сэрвэры ў тэчцы %s';
$strScaleFactorSmall = 'Маштаб замалы для таго, каб схема займала ўсю старонку';
$strSearchFormTitle = 'Пошук у базе дадзеных';
$strSearch = 'Пошук';
$strSearchInTables = 'У табліцы(ах):';
$strSearchNeedle = 'Слова(ы) або значэньне(і) для пошуку (маска: "%"):';
$strSearchOption1 = 'прынамсі адно з словаў';
$strSearchOption2 = 'усе словы';
$strSearchOption3 = 'дакладную фразу';
$strSearchOption4 = 'рэгулярны выраз';
$strSearchResultsFor = 'Вынікі пошуку "<i>%s</i>" %s:';
$strSearchType = 'Знайсьці:';
$strSecretRequired = 'Канфігурацыйнаму файлу зараз патрэбная сакрэтная фраза (blowfish_secret).';
$strSelectADb = 'Калі ласка, выберыце базу дадзеных';
$strSelectAll = 'Выбраць усё';
$strSelectBinaryLog = 'Вылучыце двойкавы лог для прагляду';
$strSelectFields = 'Выбраць палі (прынамсі адно):';
$strSelectNumRows = 'па запыту';
$strSelectTables = 'Выберыце табліцу(ы)';
$strSend = 'Захаваць як файл';
$strSent = 'Адпраўлена';
$strServerChoice = 'Выбар сэрвэра';
$strServerNotResponding = 'Сэрвэр не адказвае';
$strServer = 'Сэрвэр';
$strServers = 'Сэрвэры';
$strServerStatus = 'Бягучая інфармацыя';
$strServerStatusDelayedInserts = 'Адкладзеныя ўстаўкі';
$strServerStatusUptime = 'Гэты сэрвэр MySQL працуе %s. Ён быў запушчаны %s.';
$strServerTabVariables = 'Зьменныя';
$strServerTrafficNotes = '<b>Трафік сэрвэра</b>: Гэтыя табліцы паказваюць статыстыку сеткавага трафіку гэтага сэрвэра MySQL ад моманту ягонага запуску.';
$strServerVars = 'Налады і зьменныя сэрвэра';
$strServerVersion = 'Вэрсія сэрвэра';
$strSessionValue = 'Значэньне сэсіі';
$strSetEnumVal = 'Калі тып поля "enum" або "set", калі ласка, уводзьце значэньні выкарыстоўваючы гэты фармат: \'a\',\'b\',\'c\'...<br />Калі вам патрэбна ўжыць зваротны слэш ("\") або апостраф ("\'") сярод гэтых значэньняў, пастаўце перад імі зваротны слэш (напрыклад, \'\\\\xyz\' або \'a\\\'b\').';
$strShowAll = 'Паказаць усе';
$strShowColor = 'Паказаць колер';
$strShowDatadictAs = 'Фармат слоўніка дадзеных';
$strShowFullQueries = 'Паказаць поўныя запыты';
$strShowGrid = 'Паказаць сетку';
$strShow = 'Паказаць';
$strShowingBookmark = 'Паказваючы закладку';
$strShowingRecords = 'Паказаныя запісы';
$strShowOpenTables = 'Паказаць адкрытыя табліцы';
$strShowPHPInfo = 'Паказаць інфармацыю пра PHP';
$strShowSlaveHosts = 'Паказаць залежныя сэрвэры';
$strShowSlaveStatus = 'Паказаць стан залежных сэрвэраў';
$strShowStatusBinlog_cache_disk_useDescr = 'Колькасьць транзакцыяў, якія выкарыстоўвалі часовы двойкавы кэш запытаў, але якія перавысілі значэньне binlog_cache_size і выкарыстоўвалі часовы файл для захоўваньня выразаў транзакцыі.';
$strShowStatusBinlog_cache_useDescr = 'Колькасьць транзакцыяў, якія выкарыстоўвалі часовы двойкавы кэш запытаў.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Колькасьць часовых табліц на дыску, створаных аўтаматычна сэрвэрам падчас выкананьня выразаў. Калі лік Created_tmp_disk_tables вялікі, вы можаце павялічыць значэньне tmp_table_size, каб часовыя табліцы захоўваліся ў памяці, а не на дыску.';
$strShowStatusCreated_tmp_filesDescr = 'Колькасьць часовых файлаў, створаных mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Колькасьць часовых табліц, разьмешчаных у памяці, якія былі аўтаматычна створаныя сэрвэрам падчас выкананьня выразаў.';
$strShowStatusDelayed_errorsDescr = 'Колькасьць радкоў, запісаных з INSERT DELAYED, з-за якіх адбыліся пэўныя памылкі (пэўна, дубляваныя ключы).';
$strShowStatusDelayed_insert_threadsDescr = 'Колькасьць апрацоўнікаў патокаў INSERT DELAYED, якія выкарыстоўваюцца. Кожная табліца, на якой выконваецца INSERT DELAYED атрымлівае свой уласны паток.';
$strShowStatusDelayed_writesDescr = 'Колькасьць запісаных INSERT DELAYED радкоў.';
$strShowStatusFlush_commandsDescr  = 'Колькасьць выкананых FLUSH-выразаў.';
$strShowStatusHandler_commitDescr = 'Колькасьць унутраных COMMIT-выразаў.';
$strShowStatusHandler_deleteDescr = 'Колькасьць разоў выдаленьня радка з табліцы.';
$strShowStatusHandler_discoverDescr = 'Сэрвэр MySQL можа запытацца машыну захаваньня дадзеных NDB Cluster, ці ведае яна табліцу з дадзеным імем. Гэта называецца высьвятленьнем. Handler_discover паказвае колькасьць высьвятленьняў табліц.';
$strShowStatusHandler_read_firstDescr = 'Колькасьць разоў першы запіс быў прачытаны з індэксу. Калі гэтае значэньне вялікае, сэрвэру рэкамэндуецца рабіць вялікую колькасьць паўнаіндэксавых сканаваньняў; напрыклад, SELECT col1 FROM foo, улічваючы, што col1 індэксаваная.';
$strShowStatusHandler_read_keyDescr = 'Колькасьць запытаў на чытаньне радка з выкарыстаньнем ключа. Калі яна вялікая, гэта добрая прыкмета таго, што запыты і табліцы добра індэксаваныя.';
$strShowStatusHandler_read_nextDescr = 'Колькасьць запытаў чытаньня наступны радок у ключавым парадку. Яна павялічваецца, калі выконваецца запыт на індэксаваную калёнку з шэрагам абмежаваньняў або калі адбываецца сканаваньне індэксаў.';
$strShowStatusHandler_read_prevDescr = 'Колькасьць запытаў чытаньня папярэдні радок у ключавым парадку. Гэты мэтад чытаньня выкарыстоўваецца пераважна для аптымізацыі ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Колькасьць запытаў чытаньня радка фіксаванай пазыцыі. Яна вялікая, калі выконваецца шмат запытаў, якія патрабуюць сартаваньне вынікаў. Магчыма, прысутнічае шмат запытаў, якія патрабуюць ад MySQL перагляд табліцы цалкам або выконваюцца аб\'яднаньні, якія няправільна выкарыстоўваюць ключы.';
$strShowStatusHandler_read_rnd_nextDescr = 'Колькасьць запытаў чытаньня наступнага радка ў файле дадзеных. Яна вялікая, калі выконваецца шмат праглядаў табліцы. У агульным выпадку гэта азначае, што табліцы індэксаваныя няправільна або запыты не напісаныя так, каб выкарыстоўваць перавагі індэксаў.';
$strShowStatusHandler_rollbackDescr = 'Колькасьць унутраных выразаў ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Колькасьць запытаў абнаўленьня радка ў табліцы.';
$strShowStatusHandler_writeDescr = 'Колькасьць запытаў устаўкі радка ў табліцу.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Колькасьць старонак, якія ўтрымліваюць дадзеныя (зьмененых або нязьмененых).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Колькасьць зьмененых старонак.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Колькасьць старонак буфэрнага пулу, на якія быў атрыманы запыт на скід.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Колькасьць вольных старонак.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Колькасьць старонак, якія ўтрымліваюцца ў буфэрным пуле InnoDB. Гэта старонкі, якія ў бягучы момант чытаюцца ці запісваюцца або якія ня могуць быць скінутыя ці выдаленыя з-за пэўнай прычыны.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Колькасьць занятых старонак таму, што яны былі вызначаныя як адміністрыцыйныя дадзеныя такія, як блякаваньне радкоў або адаптыўны хэшаваны індэкс. Гэтае значэньне таксама можа быць вылічанае як Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Агульны памер буфэрнага пулу, у старонках.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Колькасьць «выпадковых» папярэдніх чытаньняў, зробленых InnoDB. Гэта адбываецца, калі запыт праглядае значную частку табліцы, але ў выпадковым парадку.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Колькасьць пасьлядоўных папярэдніх чытаньняў, зробленых InnoDB. Гэта адбываецца, калі InnoDB выконвае пасьлядоўны поўны прагляд табліцы.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Колькасьць лягічных запытаў чытаньня, зробленых InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Колькасьць лягічных чытаньняў, якія InnoDB не змагла аднавіць з буфэрнага пулу, а таму зрабіла аднастаронкавае чытаньне.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Звычайна, запісы ў буфэрны пул InnoDB, зробленыя ў фоне. Аднак, калі  неабходна прачытаць або стварыьць старонку і чыстыя старонкі адсутнічаюць, неабхочна пачакаць, пакуль пэўныя старонкі ня будуць скінутыя. Гэты кампутар падлічвае колькасьць такіх чаканьняў. Калі памер буфэру быў вызначаны правільна, гэтае значэньне мусіць быць маленькім.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Колькасьць запісаў, зробленых у буфэрны пул InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Колькасьць апэрацыяў fsync() на бягучы момант.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Бягучая колькасьць апэрацыяў fsync(), якія чакаюць выкананьня.';
$strShowStatusInnodb_data_pending_readsDescr = 'Бягучая колькасьць чытаньняў, якія чакаюць выкананьня.';
$strShowStatusInnodb_data_pending_writesDescr = 'Бягучая колькасьць запісаў, якія чакаюць выкананьня.';
$strShowStatusInnodb_data_readDescr = 'Колькасьць прачытаных на бягучы момант дадзеных, у байтах.';
$strShowStatusInnodb_data_readsDescr = 'Агульная колькасьць чытаньняў дадзеных.';
$strShowStatusInnodb_data_writesDescr = 'Агульная колькасьць запісаў дадзеных.';
$strShowStatusInnodb_data_writtenDescr = 'Колькасьць запісаных на бягучы момант дадзеных, у байтах.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Колькасьць падвойных запісаў, якія былі выкананыя, і колькасьць старонак, якія былі запісаныя для гэтай мэты.';
$strShowStatusInnodb_dblwr_writesDescr = 'Колькасьць падвойных запісаў, якія былі выкананыя, і колькасьць старонак, якія былі запісаныя для гэтай мэты.';
$strShowStatusInnodb_log_waitsDescr = 'Колькасьць выпадкаў чаканьня з-за таго, што буфэр логу быў занадта малы, і таму давялося чакаць, пакуль ён не ачысьціцца.';
$strShowStatusInnodb_log_write_requestsDescr = 'Колькасьць запісаў у лог.';
$strShowStatusInnodb_log_writesDescr = 'Колькасьць фізычна выкананых запісаў у лог-файл.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Колькасьць сынхранізавыных запісаў, зробленых у лог-файл.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Колькасьць сынхранізаваньняў лог-файла, якія чакаюць выкананьня.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Колькасьць запісаў у лог-файл, якія чакаюць выкананьня.';
$strShowStatusInnodb_os_log_writtenDescr = 'Колькасьць байтаў, запісаных у лог-файл.';
$strShowStatusInnodb_pages_createdDescr = 'Колькасьць створаных старонак.';
$strShowStatusInnodb_page_sizeDescr = 'Памер закампіляванай старонкі InnoDB (па змоўчаньні 16КБ). Пэўныя велічыні вымяраюцца ў старонках; памер старонкі дазваляе хутка перавесьці яго ў байты.';
$strShowStatusInnodb_pages_readDescr = 'Колькасьць прачытаных старонак.';
$strShowStatusInnodb_pages_writtenDescr = 'Колькасьць запісаных старонак.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Колькасьць блякаваньняў радкоў, чаканьне якіх адбываецца на бягучы момант.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Сярэдні час атрыманьня магчымасьці блякаваньня радку, у мілісэкундах.';
$strShowStatusInnodb_row_lock_timeDescr = 'Агульны час чаканьня атрыманьня магчымасьці блякаваньня радку, у мілісэкундах.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Максымальны час атраманьня магчымасьці блякаваньня радку, у мілісэкундах.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Колькасьць разоў, калі даводзілася чакаць блякаваньне радку.';
$strShowStatusInnodb_rows_deletedDescr = 'Колькасьць радкоў, выдаленых з табліц InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'Колькасьць радкоў, устаўленых у табліцы InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'Колькась радкоў, прачытаных з табліц InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'Колькасьць радкоў, абноўленых у табліцах InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'Колькасьць блёкаў у кэшы ключоў, якія былі зьмененыя, але яшчэ не былі скінутыя на дыск. Выкарыстоўваецца як значэньне Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Колькасьць нявыкарыстаных блёкаў у кэшы ключоў. Гэтае значэньне можна выкарыстоўваць для вызначэньня ступені выкарыстаньня кэшу ключоў.';
$strShowStatusKey_blocks_usedDescr = 'Колькасьць выкарыстаных блёкаў у кэшы ключоў. Гэтае значэньне з дастатковай ступеньню пэўнасьці сьведчыць пра максымальную за ўвесь час колькасьць блёкаў, якія выкарастоўваліся адначасова.';
$strShowStatusKey_read_requestsDescr = 'Колькасьць запытаў на чытаньне блёку ключоў з кэшу.';
$strShowStatusKey_readsDescr = 'Колькасьць фізычных чытаньняў блёку ключоў з дыска. Калі значэньне Key_reads вялікае, значэньне key_buffer_size, відаць, вельмі малое. Колькасьць промахаў у кэш можна вылічыць як Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Колькасьць запытаў на запіс блёку ключоў у кэш.';
$strShowStatusKey_writesDescr = 'Колькасьць фізычных запісаў блёку ключоў на дыск.';
$strShowStatusLast_query_costDescr = 'Агульны кошт апошняга зкампіляванага запыту, падлічанага аптымізатарам запытаў. Карысна для параўнаньня розных спосабаў рэалізацыі аднаго запыту. Значэньне па змоўчаньні 0 азначае, што ніводны запыт яшчэ ня быў зкампіляваны.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Колькасьць радкоў для запісу, адкладзеных запытамі INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Колькасьць табліц, якія былі адкрытыя. Калі адкрытыя табліцы вялікія, значэньне кэшу табліц імаверна вельмі малое.';
$strShowStatusOpen_filesDescr = 'Колькасьць адкрытых файлаў.';
$strShowStatusOpen_streamsDescr = 'Колькасьць адкрытых патокаў (выкарыстоўваюцца пераважна для лагаваньня).';
$strShowStatusOpen_tablesDescr = 'Колькасьць адкрытых табліц.';
$strShowStatusQcache_free_blocksDescr = 'Колькасьць вольных блёкаў памяці ў кэшы запытаў.';
$strShowStatusQcache_free_memoryDescr = 'Колькасьць вольнай памяці для кэшу запытаў.';
$strShowStatusQcache_hitsDescr = 'Колькасьць зваротаў да кэшу.';
$strShowStatusQcache_insertsDescr = 'Колькасьць запытаў, якія былі даданыя ў кэш.';
$strShowStatusQcache_lowmem_prunesDescr = 'Колкасьць запытаў, якія былі выдаленыя з кэшу, каб вызваліць памяць для кэшаваньня новых запытаў. Гэтыя зьвесткі могуць дапамагчы вызначыць памер кэшу запытаў. Кэш запытаў выкарыстоўвае статэгію элемэнта, які выкарыстоўваўся найменш (LRU) для вызначэньня, якія запыты трэба выдаляць з кэшу.';
$strShowStatusQcache_not_cachedDescr = 'Колькасьць некэшавальных запытаў (некэшавальных або некэшаваных з-за значэньня дырэктывы query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Колькасьць запытаў, якія прысутнічаюць у кэшы.';
$strShowStatusQcache_total_blocksDescr = 'Агульная колькасьць блёкаў у кэшы запытыў.';
$strShowStatusReset = 'Скінуць статыстыку';
$strShowStatusRpl_statusDescr = 'Стан абароненай ад памылак рэплікацыі (яшчэ не рэалізаваная).';
$strShowStatusSelect_full_joinDescr = 'Колькасьць аб\'яднаньняў, якія не выкарыстоўвяюць індэксы. Калі гэтае значэньне ня роўнае 0, варта праверыць індэксы ў табліцах.';
$strShowStatusSelect_full_range_joinDescr = 'Колькасьць аб\'яднаньняў, якія выкарыстоўвалі пошук па масцы ў мэтавай табліцы.';
$strShowStatusSelect_range_checkDescr = 'Колькасьць аб\'яднаньняў без выкарыстаньня ключоў, якія правяралі наяўнасьць ключа пасьля кожнага радка. (Калі гэтае значэньне ня роўнае 0, варта праверыць індэксы ў табліцах.)';
$strShowStatusSelect_rangeDescr = 'Колькасьць аб\'яднаньняў, якія выкарыстоўвалі спалучэньні палёў у першай табліцы. (Звычайна не крытычна, нават калі гэтае значэньне вялікае.)';
$strShowStatusSelect_scanDescr = 'Колькасьць аб\'яднаньняў, якія правялі поўны прагляд першай табліцы.';
$strShowStatusSlave_open_temp_tablesDescr = 'Колькасьць часовых табліц, якія ў бягучы момант адкрытыя залежным SQL-патокам.';
$strShowStatusSlave_retried_transactionsDescr = 'Агульная (ад загрузкі) колькасьць разоў, калі залежны SQL-паток рэплікацыі паўтараў транзакцыі.';
$strShowStatusSlave_runningDescr = 'Гэтае значэньне роўнае "ON", калі сэрвэр зьяўляецца залежным і падлучаным да сэрвэра, які яго кантралюе.';
$strShowStatusSlow_launch_threadsDescr = 'Колькасьць патокаў, якім спатрэбілася больш за slow_launch_time сэкундаў для стварэньня.';
$strShowStatusSlow_queriesDescr = 'Колькасьць запытаў, на выканантне якіх спатрэбілася больш, чым long_query_time сэкундаў.';
$strShowStatusSort_merge_passesDescr = 'Колькасьць праходаў, якія былі зробленыя альгарытмам сартаваньня. Калі гэтае значэньне вялікае, варта разгледзіць павелічэньне значэньня сыстэмнай зьменнай sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Колькасьць сартаваньняў, якія былі зробленыя з выкарыстаньнем некалькіх слупкоў.';
$strShowStatusSort_rowsDescr = 'Колькасьць адсартаваных радкоў.';
$strShowStatusSort_scanDescr = 'Колькасьць сартаваньняў, якія былі зробленыя падчас прагляду табліцы.';
$strShowStatusTable_locks_immediateDescr = 'Колькасьць разоў, калі блякаваньне табліцы было зробленае імгненна.';
$strShowStatusTable_locks_waitedDescr = 'Колькасьць разоў, калі блякаваньне табліцы немагчыма было ажыцьцявіць імгненна і пэўны час пайшоў на чаканьне. Калі гэтае значэньне вялікае, і існуюць праблемы з прадукцыйнасьцю, варта спачатку аптымізаваць запыты, а пасьля або падзяліць табліцу або табліцы, або выкарыстоўваць рэплікацыю.';
$strShowStatusThreads_cachedDescr = 'Колькасьць патокаў у кэшы патокаў. Ступень трапляньня ў кэш можа быць вылічаная як Threads_created/Connections. Калі гэтае значэньне пафарбаванае ў чырвоны колер, варта павялічыць значэньне thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Колькасьць адкрытых на бягучы момант злучэньняў.';
$strShowStatusThreads_createdDescr = 'Колькасьць патокаў, створаных для кіраваньня злучэньнямі. Калі значэньне Threads_created вялікае, магчыма, варта павялічыць значэньне thread_cache_size. (Звычайна, гэта не дае якога-небудзь заўважнага павелічэньня прадукцыйнасьці, калі прысутнічае добрая рэалізацыя патокаў.)';
$strShowStatusThreads_runningDescr = 'Колькасьць патокаў, якія не зьяўляюцца сьпячымі.';
$strShowTableDimension = 'Паказаць разьмернасьць табліц';
$strShowTables = 'Паказаць табліцы';
$strShowThisQuery = ' Паказаць гэты запыт зноў ';
$strSimplifiedChinese = 'Кітайская спрошчаная';
$strSingly = '(асобна)';
$strSize = 'Памер';
$strSkipQueries = 'Колькасьць (запытаў), якія трэба прапусьціць ад пачатку';
$strSlovak = 'Славацкая';
$strSlovenian = 'Славенская';
$strSocketProblem = '(або сокет лякальнага сэрвэра MySQL не сканфігураваны правільна)';
$strSortByKey = 'Сартаваць па ключу';
$strSort = 'Парадак';
$strSorting = 'Сартаваньне';
$strSpaceUsage = 'Выкарыстаньне прасторы';
$strSpanish = 'Гішпанская';
$strSplitWordsWithSpace = 'Словы падзеленыя прагалам (" ").';
$strSQLCompatibility = 'Рэжым сумяшчальнасьці SQL';
$strSQLExportType = 'Тып экспарту';
$strSQLParserBugMessage = 'Магчыма, вы знайшлі памылку ў SQL-парсэры. Калі ласка, уважліва праверце выш запыт і адпаведнасьць двукосьсяў у ім. Іншай магчымай прычынай памылкі можа быць тое, што вы загрузілі файл з двойкавымі дадзенымі па-за межамі тэксту, вылучанага двукосьсямі. Вы таксама можаце паспрабаваць адправіць ваш запыт з каманднага радка MySQL. Паведамленьне пра памылку сэрвэра MySQL прыведзенае ніжэй, можа таксама дапамагчы вам высьветліць прычыну праблему. Калі вы ўсё яшчэ маеце праблемы або парсэр паведамляе пра памылку, а з каманднага радку запыт выконваецца, калі ласка, скараціце ваш уведзены SQL-запыт да аднаго запыту, які выклікае памылку, і адпраўце паведамленьне пра памылку з блёкам дадзеных, пададзеных у сэкыці CUT ніжэй:';
$strSQLParserUserError = 'Здаецца, ваш SQL-запыт утрымлівае памылку. Паведамленьне пра памылку сэрвэра MySQL прыведзенае ніжэй, магчыма, таксама дапаможа вам высьветліць прычыну памылкі';
$strSQLQuery = 'SQL-запыт';
$strSQLResult = 'SQL-вынік';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Няправільны ідэнтыфікатар';
$strSQPBugUnclosedQuote = 'Незакрытае двукосьсе';
$strSQPBugUnknownPunctuation = 'Невядомы сымбаль пунктуацыі';
$strStatCheckTime = 'Апошняя праверка';
$strStatCreateTime = 'Створаная';
$strStatement = 'Выразы';
$strStatisticsOverrun = 'На загружаным сэрвэры байтавыя лічыльнікі могуць пераскокваць кола, таму статыстыка, якую паказвае MySQL-сэрвэр, можа быць няправільнай.';
$strStatUpdateTime = 'Апошняе абнаўленьне';
$strStatus = 'Стан';
$strStorageEngine = 'Машына захаваньня дадзеных';
$strStorageEngines = 'Машыны захаваньня дадзеных';
$strStrucCSV = 'CSV';
$strStrucData = 'Структуру і дадзеныя';
$strStrucExcelCSV = 'CSV для дадзеных MS Excel';
$strStrucNativeExcel = 'Родны фармат MS Excel';
$strStrucOnly = 'Толькі структуру';
$strStructPropose = 'Прапанаваная структура табліцы';
$strStructure = 'Структура';
$strSubmit = 'Адправіць';
$strSuccess = 'Ваш SQL-запыт быў пасьпяхова выкананы';
$strSum = 'Усяго';
$strSwedish = 'Швэдзкая';
$strSwitchToDatabase = 'Перайсьці да скапіяванай базы дадзеных';
$strSwitchToTable = 'Перайсьці да скапіяванай табліцы';

$strTableAlreadyExists = 'Табліца %s ужо існуе!';
$strTableComments = 'Камэнтар да табліцы';
$strTableEmpty = 'Пустая назва табліцы!';
$strTableHasBeenDropped = 'Табліца %s была выдаленая';
$strTableHasBeenEmptied = 'Табліца %s была ачышчаная';
$strTableHasBeenFlushed = 'Кэш табліцы %s быў ачышчаны';
$strTableMaintenance = 'Абслугоўваньне табліцы';
$strTable = 'Табліца';
$strTableOfContents = 'Зьмест';
$strTableOptions = 'Опцыі табліцы';
$strTables = '%s табліц(ы)';
$strTableStructure = 'Структура табліцы';
$strTakeIt = 'гэтая';
$strTblPrivileges = 'Прывілеі, спэцыфічныя для табліцы';
$strTempData = 'Часовыя дадзеныя';
$strTextAreaLength = ' З-за вялікай даўжыні,<br /> гэтае поле ня можа быць адрэдагаванае ';
$strThai = 'Тайляндзкая';
$strThemeDefaultNotFound = 'Тэма па змоўчаньні %s ня знойдзеная!';
$strThemeNoPreviewAvailable = 'Папярэдні прагляд недаступны.';
$strThemeNotFound = 'Тэма %s ня знойдзеная!';
$strThemeNoValidImgPath = 'Дапушчальны шлях да малюнкаў тэмы %s ня знойдзены!';
$strTheme = 'Тэма / Стыль';
$strThemePathNotFound = 'Ня знойдзены шлях да тэмы %s!';
$strThisHost = 'Гэты хост';
$strThreads = 'Патокі';
$strThreadSuccessfullyKilled = 'Паток %s быў пасьпяхова спынены.';
$strTime = 'Час';
$strTimeoutInfo = 'Папярэдняе імпартаваньне спынілася з-за недахопу часу. Пасьля новай загрузкі імпартаваньне будзе працягнутае з пазыцыі %d.';
$strTimeoutNothingParsed = 'Аднак, падчас апошняга выкананьня ніякія дадзеныя былі апрацаваныя. Гэта звычайна значыць, што phpMyAdmin ня зможа скончыць гэтае імпартаваньня, калі вы не павялічыце ліміты выкананьня php-скрыптоў.';
$strTimeoutPassed = 'Выйшаў дазволены час выкананьня скрыпта. Калі вы хочаце завершыць імпартаваньне, калі ласка, загрузіце файл зноў і імпартаваньне ўзнавіцца.';
$strToggleScratchboard = 'Паказаць папярэдні прагляд';
$strTotal = 'усяго';
$strTotalUC = 'Агулам';
$strTraditionalChinese = 'Традыцыйная кітайская';
$strTraditionalSpanish = 'Традыцыйная гішпанская';
$strTraffic = 'Трафік';
$strTransactionCoordinator = 'Каардынатар перакладу';
$strTransformation_application_octetstream__download = 'Паказвае спасылку для загрузкі двойкавых дадзеных поля. Вы можаце выкарыстоўваць першую опцыю для вызначэньня імя файла або выкарыстоўвайце другую опцыю як імя поля, якое ўтрымлівае імя файла. Калі вы выкарыстоўваеце другую опцыю, вам трэба пакінуць першае поле пустым';
$strTransformation_application_octetstream__hex = 'Паказвае дадзеныя ў шаснаццаткавым выглядзе. Апцыянальны першы парамэтар вызначае частату дадаваньня прагала (па-змоўчаньні — праз кожныя 8 бітаў).';
$strTransformation_image_jpeg__inline = 'Паказвае націскальны эскіз; Опцыі — максымальная шырыня і вышыня ў піксэлах. Захоўваюцца пачатковыя прапорцыі.';
$strTransformation_image_jpeg__link = 'Паказвае спасылку для загрузкі гэтага малюнку.';
$strTransformation_image_png__inline = 'Праглядзець малюнак image/jpeg: убудаваны';
$strTransformation_text_plain__external = 'ТОЛЬКІ ДЛЯ LINUX: Запускае зьнешнюю праграму і перадае ёй дадзеныя поля праз стандартны ўвод. Вяртае стандартны вывад праграмы. Праграма па змоўчаньні — Tidy, якая друкуе чысты HTML-код. Зь меркаваньняў бясьпекі, вам трэба ўручную адрэдагаваць файл libraries/transformations/text_plain__external.inc.php і пазначыць сьпіс праграмаў, якія вы хочаце зрабіць даступнымі. Першая опцыя — тады нумар праграмы, якую вы хочаце выкарыстоўваць, другая опцыя — парамэтры для праграмы. Трэцяя опцыя, калі вызначаная як 1, сканвэртуе дадзеныя з стандартнага вываду выкарыстоўваючы htmlspecialchars() (Па змоўчаньні 1). Чацьвертая опцыя, калі вызначаная як 1, прадухіліць перанос па словах, каб пераканацца, што ўвесь выхадны паток будзе выведзены ў адзін радок (Па змоўчаньні 1).';
$strTransformation_text_plain__formatted = 'Паказвае зьмесьціва поля як-ёсьць, без апрацоўкі яго функцыяй htmlspecialchars(). Таму разумеецца, што поле ўтрымлівае карэктны HTML-код.';
$strTransformation_text_plain__imagelink = 'Паказвае малюнак і спасылку, поле зьмяшчае назву файла. Першая опцыя — прэфікс адрасу кшталту "http://www.example.com/". Другая і трэцяя опцыі — шырыня і вышыня ў піксэлах.';
$strTransformation_text_plain__link = 'Паказвае спасылку; поле зьмяшчае назву файла. Першая опцыя — прэфікс адрасу кшталту "http://www.example.com/". Другая опцыя — назва спасылкі.';
$strTransformation_text_plain__sql = 'Фарматуе тэкст як SQL-запыт з падсьвечаным сынтаксісам.';
$strTransformation_text_plain__substr = 'Паказвае толькі частку радка. Першая опцыя — колькасьць сымбаляў ад пачатку радка, якія трэба прапусьціць (Па змоўчаньні 0). Другая опцыя — колькасьць сымбаляў, якія трэба вярнуць (Па змоўчаньні: да канца радка). Трэцяя опцыя — радок, які трэба далучыць да канца і/або з пачатку радка, калі адбудзецца ўсячэньне (Па змоўчаньні: "...") .';
$strTruncateQueries = 'Абразаць паказаныя запыты';
$strTurkish = 'Турэцкая';
$strType = 'Тып';

$strUkrainian = 'Украінская';
$strUncheckAll = 'Зьняць усе адзнакі';
$strUnicode = 'Юнікод';
$strUnique = 'Унікальнае';
$strUnknown = 'невядома';
$strUnselectAll = 'Зьняць усе адзнакі';
$strUnsupportedCompressionDetected = 'Вы паспрабавалі загрузіць файл з мэтадам сьціску, які непадтрымліваецца (%s). Ягоная падтрымка або не рэалізаваная, або адключаная ў вашай канфігурацыі.';
$strUpdatePrivMessage = 'Вы зьмянілі прывілеі для  %s.';
$strUpdateProfileMessage = 'Профіль быў адноўлены.';
$strUpdateQuery = 'Абнавіць запыт';
$strUpdComTab = 'За інфармацыяй як абнавіць табліцу column_comments зьвярніцеся, калі ласка, да дакумэнтацыі';
$strUpgrade = 'Вам трэба абнавіць %s да вэрсіі %s ці пазьнейшай.';
$strUploadLimit = 'Вы, мусіць, паспрабавалі загрузіць вельмі вялікі файл. Калі ласка, зьвярніцеся да %sдакумэнтацыі%s для высьвятленьня спосабаў абыйсьці гэтае абмежаваньне.';
$strUploadsNotAllowed = 'Загрузкі файлаў не дазволеныя на гэтым сэрвэры.';
$strUsage = 'Выкарыстаньне';
$strUseBackquotes = 'Зваротнае двукосьсе ў імёнах табліц і палёў';
$strUsedPhpExtensions = 'Выкарыстоўваюцца пашырэньні PHP';
$strUseHostTable = 'Выкарыстоўваць табліцу хостаў';
$strUserAlreadyExists = 'Карыстальнік %s ужо існуе!';
$strUser = 'Карыстальнік';
$strUserEmpty = 'Пустое імя карыстальніка!';
$strUserName = 'Імя карыстальніка';
$strUserNotFound = 'Вылучаны карыстальнік ня знойдзены ў табліцы прывілеяў.';
$strUserOverview = 'Карыстальнікі';
$strUsersDeleted = 'Выбраныя карыстальнікі былі пасьпяхова выдаленыя.';
$strUsersHavingAccessToDb = 'Карыстальнікі з правамі доступу да &quot;%s&quot;';
$strUseTabKey = 'Выкарыстоўвайце клявішу TAB для перамяшчэньня ад значэньня да значэньня або CTRL+стрэлкі для перамяшчэньня ў любое іншае месца';
$strUseTables = 'Выкарыстоўваць табліцы';
$strUseTextField = 'Выкарыстоўваць тэкставае поле';
$strUseThisValue = 'Выкарыстоўваць гэта значэньне';

$strValidateSQL = 'Праверыць SQL';
$strValidatorError = 'Немагчыма праініцыялізаваць праверку SQL. Калі ласка, праверце, ці ўсталяваныя ў вас неабходныя пашырэньні PHP, як гэта апісана ў %sдакумэнтацыі%s.';
$strValue = 'Значэньне';
$strVar = 'Зьменная';
$strVersionInformation = 'Інфармацыя пра вэрсію';
$strView = 'Выгляд';
$strViewDumpDatabases = 'Праглядзець дамп (схему) базаў дадзеных';
$strViewDumpDB = 'Праглядзець дамп (схуму) базы дадзеных';
$strViewDump = 'Праглядзець дамп (схему) табліцы';
$strViewHasBeenDropped = 'Выгляд %s быў выдалены';
$strViewMaxExactCount = 'У гэтым праглядзе больш за %d радкоў. Калі ласка, зьвярніцеся да %sдакумэнтацыі%s.';

$strWebServerUploadDirectoryError = 'Немагчыма адкрыць пазначаную вамі тэчку для загрузкі файлаў';
$strWebServerUploadDirectory = 'тэчка вэб-сэрвэра для загрузкі файлаў';
$strWelcome = 'Запрашаем у %s';
$strWestEuropean = 'Заходнеэўрапейская';
$strWildcard = 'шаблён';
$strWindowNotFound = 'Немагчыма абнавіць мэтавае акно браўзэра. Магчыма, вы закрылі бацькоўскае акно або налады бясьпекі вашага браўзэра сканфігураныя на блякаваньне міжваконных ўзаемадзеяньняў';
$strWithChecked = 'З адзначанымі:';
$strWriteRequests = 'Запытаў запісу';
$strWrongUser = 'Няправільны лагін/пароль. У доступе адмоўлена.';

$strXML = 'XML';

$strYes = 'Так';

$strZeroRemovesTheLimit = 'Заўвага: Пазначэньне гэтых опцыяў як 0 (нуль) здымае абмежаваньне.';
$strZip = 'архіваваны ў zip';

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

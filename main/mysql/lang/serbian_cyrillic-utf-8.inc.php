<?php
/* $Id: serbian_cyrillic-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by:
 *     Mihailo Stefanovic <mikis@users.sourceforge.net>, Branislav Jovanovic <fangorn@eunet.yu>
 *     Igor Mladenovic <mligor@zimco.com>, David Trajkovic <tdavid@ptt.yu>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('бајтова', 'КБ', 'МБ', 'ГБ', 'ТБ', 'ПБ', 'ЕБ');

$day_of_week = array('Нед', 'Пон', 'Уто', 'Сре', 'Чет', 'Пет', 'Суб');
$month = array('јан', 'феб', 'мар', 'апр', 'мај', 'јун', 'јул', 'авг', 'сеп', 'окт', 'нов', 'дец');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. у %H:%M';
$timespanfmt = '%s дана, %s сати, %s минута и %s секунди';

$strAbortedClients = 'Прекинуто';
$strAccessDeniedCreateConfig = 'Вероватан разлог за ово је да нисте направили конфигурациону датотеку. Можете користити %1$sскрипт за инсталацију%2$s да бисте је направили.';
$strAccessDeniedExplanation = 'phpMyAdmin је покушао да се повеже на MySQL сервер, али је сервер одбио повезивање. Проверите назив домаћина, корисничко име и лозинку у config.inc.php и уверите се да одговарају подацима које сте добили од администратора MySQL сервера.';
$strAccessDenied = 'Приступ одбијен';
$strAction = 'Акција';
$strAddAutoIncrement = 'Додај AUTO_INCREMENT вредност';
$strAddClause = 'Додај %s';
$strAddConstraints = 'Додај ограничења';
$strAddDeleteColumn = 'Додај/обриши колону';
$strAddDeleteRow = 'Додај/обриши поље за критеријум';
$strAddFields = 'Додај %s поља';
$strAddHeaderComment = 'Додај коментар у заглавље (\\n раздваја линије)';
$strAddIntoComments = 'Додај у коментаре';
$strAddNewField = 'Додај ново поље';
$strAddPrivilegesOnDb = 'Додај привилегије на следећој бази';
$strAddPrivilegesOnTbl = 'Додај привилегије на следећој табели';
$strAddSearchConditions = 'Додај услове претраживања (део "WHERE" упита):';
$strAddToIndex = 'Додај у кључ &nbsp;%s&nbsp;колона(е)';
$strAddUserMessage = 'Додали сте новог корисника.';
$strAddUser = 'Додај новог корисника';
$strAdministration = 'Администрација';
$strAffectedRows = 'Обухваћено редова:';
$strAfterInsertBack = 'Назад на претходну страну';
$strAfterInsertNewInsert = 'Додај још један нови ред';
$strAfterInsertNext = 'Уреди следећи ред';
$strAfterInsertSame = 'Врати се на ову страну';
$strAfter = 'После %s';
$strAll = 'Све';
$strAllowInterrupt = 'Дозвољава прекид увоза у случају да скрипт открије да је близу временског ограничења. Ово може бити добар начин увоза великих датотека, али са друге стране може покварити трансакције.';
$strAllTableSameWidth = 'Приказ свих табела исте ширине?';
$strAlterOrderBy = 'Промени редослед у табели';
$strAnalyzeTable = 'Анализирај табелу';
$strAndThen = 'и онда';
$strAnd = 'и';
$strAngularLinks = 'Угласте везе';
$strAnIndex = 'Кључ је управо додат %s';
$strAnyHost = 'Било који домаћин';
$strAnyUser = 'Било који корисник';
$strAny = 'Било који';
$strApproximateCount = 'Може бити приближно. Видите FAQ 3.11';
$strAPrimaryKey = 'Примарни кључ је управо додат %s';
$strArabic = 'Арапски';
$strArmenian = 'Јерменски';
$strAscending = 'Растући';
$strAtBeginningOfTable = 'На почетку табеле';
$strAtEndOfTable = 'На крају табеле';
$strAttr = 'Атрибути';
$strAutomaticLayout = 'Аутоматски распоред';

$strBack = 'Назад';
$strBaltic = 'Балтички';
$strBeginCut = 'ПОЧЕТАК РЕЗ';
$strBeginRaw = 'ПОЧЕТАК СИРОВО';
$strBinaryDoNotEdit = 'Бинарни - не мењај';
$strBinaryLog = 'Бинарни дневник';
$strBinary = 'Бинарни';
$strBinLogEventType = 'Врста догађаја';
$strBinLogInfo = 'Информације';
$strBinLogName = 'Назив дневника';
$strBinLogOriginalPosition = 'Оригинална позиција';
$strBinLogPosition = 'Позиција';
$strBinLogServerId = 'ИД сервера';
$strBookmarkAllUsers = 'Дозволи сваком кориснику да приступа овом упамћеном упиту';
$strBookmarkCreated = 'Направљен маркер %s';
$strBookmarkDeleted = 'Обележивач је управо обрисан.';
$strBookmarkLabel = 'Назив';
$strBookmarkQuery = 'Запамћен SQL-упит';
$strBookmarkReplace = 'Замени постојеће запамћене упите истог имена';
$strBookmarkThis = 'Запамти SQL-упит';
$strBookmarkView = 'Види само';
$strBrowseDistinctValues = 'Прегледај различите вредности';
$strBrowseForeignValues = 'Прегледај стране вредности';
$strBrowse = 'Преглед';
$strBufferPoolActivity = 'Активност скупа прихватника';
$strBufferPool = 'Скуп прихватника';
$strBufferPoolUsage = 'Коришћење скупа прихватника';
$strBufferReadMissesInPercent = 'Промашаји читања у %';
$strBufferReadMisses = 'Промашаји при читању';
$strBufferWriteWaitsInPercent = 'Чекања на упис у %';
$strBufferWriteWaits = 'Чекања на упис';
$strBulgarian = 'Бугарски';
$strBusyPages = 'Заузете стране';
$strBzError = 'phpMyAdmin није могао да компресује садржај базе због неисправне BZ2 екстензије у овој верзији PHP-а. Препоручује се да подесите <code>$cfg[\'BZipDump\']</code> директиву у вашoj phpMyAdmin конфигурационоj датотеци на <code>FALSE</code>. Ако желите да користите могућности BZ2 компресије, требало би да пређете на новију верзију PHP-а. Видите PHP извештај о грешкама %s за детаље.';
$strBzip = '"бзип-овано"';

$strCalendar = 'Календар';
$strCancel = 'Откажи';
$strCanNotLoadExportPlugins = 'Није могуће учитати додатке за извоз, молимо проверите своју инсталацију!';
$strCanNotLoadImportPlugins = 'Не могу да учитам додатке за увоз, молим проверите своју инсталацију!';
$strCannotLogin = 'Не могу да се пријавим на MySQL сервер';
$strCantLoad = 'не могу да учитам екстензију %s,<br />молим проверите PHP конфигурацију';
$strCantLoadRecodeIconv = 'Не могу да учитам iconv или recode екстензије потребне за конверзију скупова знакова, подесите PHP да дозволи коришћење ових екстензија или онемогућите конверзију скупова знакова у phpMyAdmin-у.';
$strCantRenameIdxToPrimary = 'Не могу да променим кључ у PRIMARY (примарни) !';
$strCantUseRecodeIconv = 'Не могу да користим iconv или libiconv или recode_string функције иако екстензија пријављује да је учитана. Проверите вашу PHP конфигурацију.';
$strCardinality = 'Кардиналност';
$strCaseInsensitive = 'Не разликује мала и велика слова';
$strCaseSensitive = 'Разликује мала и велика слова';
$strCentralEuropean = 'Централноевропски';
$strChangeCopyModeCopy = '... сачувај старе.';
$strChangeCopyModeDeleteAndReload = ' ... обриши старог из табеле корисника и затим поново учитај привилегије.';
$strChangeCopyModeJustDelete = ' ... обриши старе из табела корисника.';
$strChangeCopyMode = 'Направи новог корисника са истим привилегијама и ...';
$strChangeCopyModeRevoke = ' ... обустави све привилегије старог корисника и затим га обриши.';
$strChangeCopyUser = 'Промени информације о пријави / Копирај корисника';
$strChangeDisplay = 'Изабери поља за приказ';
$strChange = 'Промени';
$strChangePassword = 'Промени лозинку';
$strCharset = 'Карактер сет';
$strCharsetOfFile = 'Карактер сет датотеке:';
$strCharsetsAndCollations = 'Карактер сетови и сортирање';
$strCharsets = 'Кодне стране';
$strCheckAll = 'Означи све';
$strCheckOverhead = 'Провери табеле које имају прекорачења';
$strCheckPrivsLong = 'Провери привилегије за базу &quot;%s&quot;.';
$strCheckPrivs = 'Провери привилегије';
$strCheckTable = 'Провери табелу';
$strChoosePage = 'Изаберите страну коју мењате';
$strColComFeat = 'Приказујем коментаре колоне';
$strCollation = 'Сортирање';
$strColumnNames = 'Имена колона';
$strColumnPrivileges = 'Привилегије везане за колоне';
$strCommand = 'Наредба';
$strCommentsForTable = 'КОМЕНТАРИ ТАБЕЛЕ';
$strComments = 'Коментари';
$strCompatibleHashing = 'MySQL&nbsp;4.0 компатибилно';
$strCompleteInserts = 'Комплетан INSERT (са именима поља)';
$strCompressionWillBeDetected = 'Врста компресије увезених датотека ће бити аутоматски одабрана: %s';
$strCompression = 'Компресија';
$strConfigDefaultFileError = 'Не могу да учитам подразумевану конфигурацију из: "%1$s"';
$strConfigFileError = 'phpMyAdmin није могао да прочита вашу конфигурациону датотеку!<br />Ово се може десити ако PHP нађе грешку у процесирању или не може да пронађе датотеку.<br />Позовите конфигурациону датотеку директно користећи доњи линк и прочитајте поруке о грешци које добијате. У већини случајеве негде недостаје наводник или тачка-зарез.<br />Ако добијете празну страну, све је у реду.';
$strConfigureTableCoord = 'Подесите координате за табелу %s';
$strConnectionError = 'Не могу да се повежем: неисправна подешавања.';
$strConnections = 'Конекције';
$strConstraintsForDumped = 'Ограничења за извезене табеле';
$strConstraintsForTable = 'Ограничења за табеле';
$strControluserFailed = 'Конекција за controluser-а, онако како је дефинисана у вашој конфигурацији, није успела.';
$strCookiesRequired = 'Колачићи (Cookies) морају у овом случају бити активни.';
$strCopyDatabaseOK = 'База %s је прекопирана у %s';
$strCopyTableOK = 'Табела %s је копирана у %s.';
$strCopyTableSameNames = 'Не могу да копирам табелу у саму себе!';
$strCopyTable = 'Копирај табелу у (база<b>.</b>табела):';
$strCopy = 'Копирај';
$strCouldNotKill = 'phpMyAdmin није могао да прекине процес %s. Вероватно је већ затворен.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE пре копирања';
$strCreateIndex = 'Направи кључ на&nbsp;%s&nbsp;колона';
$strCreateIndexTopic = 'Направи нови кључ';
$strCreate = 'Направи';
$strCreateNewDatabase = 'Направи нову базу података';
$strCreateNewTable = 'Направи нову табелу у бази %s';
$strCreatePage = 'Направи нову страну';
$strCreatePdfFeat = 'Прављење PDF-ova';
$strCreateRelation = 'Направи релацију';
$strCreateTable  = 'Направи табелу';
$strCreateUserDatabaseName = 'Направи базу са истим именом и додај све привилегије';
$strCreateUserDatabaseNone = 'Нема';
$strCreateUserDatabase = 'База за корисника';
$strCreateUserDatabaseWildcard = 'Дај све привилегије на имену са џокерима (корисничко_име\_%)';
$strCreationDates = 'Датуми креирања/ажурирања/провере';
$strCriteria = 'Критеријум';
$strCroatian = 'Хрватски';
$strCSV = 'CSV';
$strCyrillic = 'Ћирилични';
$strCzech = 'Чешки';
$strCzechSlovak = 'Чешко-словачки';

$strDanish = 'Дански';
$strDatabaseEmpty = 'Име базе није задато!';
$strDatabaseExportOptions = 'Опције за извоз базе';
$strDatabaseHasBeenDropped = 'База %s је одбачена.';
$strDatabases = 'Базе';
$strDatabasesDropped = '%s база је успешно одбачено.';
$strDatabasesStatsDisable = 'Искључи статистике';
$strDatabasesStatsEnable = 'Укључи статистике';
$strDatabasesStatsHeavyTraffic = 'Напомена: укључивање статистика може проузроковати велики саобраћај између веб и MySQL сервера.';
$strDatabasesStats = 'Статистика базе';
$strDatabase = 'База података';
$strDataDict = 'Речник података';
$strDataOnly = 'Само подаци';
$strDataPages = 'Стране са подацима';
$strData = 'Подаци';
$strDBComment = 'Коментар базе:';
$strDBCopy = 'Копирај базу у';
$strDbIsEmpty = 'База је изгледа празна!';
$strDbPrivileges = 'Привилегије везане за базу';
$strDBRename = 'Преименуј базу у';
$strDbSpecific = 'Специфично за базу';
$strDefaultEngine = '%s је подразумевани погон складиштења на овом MySQL серверу.';
$strDefaultValueHelp = 'За подразумевану вредност, унесите само једну вредност, без косих црта или наводника у овом облику: а';
$strDefault = 'Подразумевано';
$strDefragment = 'Дефрагментирај табелу';
$strDelayedInserts = 'Користи одложена уметања';
$strDeleteAndFlushDescr = 'Ово је најчистији начин, али поновно учитавање привилегина може да потраје.';
$strDeleteAndFlush = 'Обриши кориснике и поново учитај привилегије.';
$strDeleted = 'Ред је обрисан';
$strDeletedRows = 'Обрисани редови:';
$strDeleteNoUsersSelected = 'Ниједан корисник није одабран за брисање!';
$strDelete = 'Обриши';
$strDeleteRelation = 'Обриши релацију';
$strDeleting = 'Бришем %s';
$strDelimiter = 'Граничник';
$strDelOld = 'Тренутна страна има референце на табеле које више не постоје. Желите ли да обришете те референце?';
$strDescending = 'Опадајући';
$strDescription = 'Опис';
$strDesignerHelpDisplayField = 'Поље за приказ је обојено у ружичасто. Да би поставили/уклонили поље као поље за приказ, кликните на икону „Изабери поље за приказ“, а потом на назив одговарајућег поља.';
$strDesigner = 'Дизајнер';
$strDictionary = 'речник';
$strDirectLinks = 'Директне везе';
$strDirtyPages = 'Прљаве стране';
$strDisabled = 'Онемогућено';
$strDisableForeignChecks = 'Искључи провере страних кључева';
$strDisplayFeat = 'Прикажи особине';
$strDisplayOrder = 'Редослед приказа:';
$strDisplayPDF = 'Прикажи PDF схему';
$strDoAQuery = 'Направи "упит по примеру" (џокер: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Документација';
$strDoYouReally = 'Да ли стварно хоћете да ';
$strDropDatabaseStrongWarning = 'Овим ћете УНИШТИТИ комплетну базу података!';
$strDropUsersDb = 'Одбаци базе које се зову исто као корисници.';
$strDrop = 'Одбаци';
$strDumpingData = 'Приказ података табеле';
$strDumpSaved = 'Садржај базе је сачуван у датотеку %s.';
$strDumpXRows = 'Прикажи %s редова почевши од реда %s.';
$strDynamic = 'динамички';

$strEdit = 'Промени';
$strEditPDFPages = 'Уређивање PDF страна';
$strEditPrivileges = 'Промени привилегије';
$strEffective = 'Ефективне';
$strEmpty = 'Испразни';
$strEmptyResultSet = 'MySQL је вратио празан резултат (нула редова).';
$strEnabled = 'Омогућено';
$strEncloseInTransaction = 'Обави извоз у трансакцији';
$strEndCut = 'КРАЈ РЕЗ';
$strEnd = 'Крај';
$strEndRaw = 'КРАЈ СИРОВО';
$strEngineAvailable = '%s је доступан на овом MySQL серверу.';
$strEngineDisabled = '%s је онемогућен на овом MySQL серверу.';
$strEngines = 'Складиштења';
$strEngineUnsupported = 'Овај MySQL сервер не подржава %s погон складиштења.';
$strEnglish = 'Енглески';
$strEnglishPrivileges = ' Напомена: MySQL имена привилегија морају да буду на енглеском ';
$strErrorInZipFile = 'Грешка у ZIP архиви:';
$strError = 'Грешка';
$strErrorRelationAdded = 'Грешка: релација није додата.';
$strErrorRelationExists = 'Грешка: релација већ постоји.';
$strErrorRenamingTable = 'Грешка при преименовању табеле %1$s у %2$s';
$strErrorSaveTable = 'Грешка при снимању координата за Дизајнер.';
$strEscapeWildcards = 'Пре џокера _ и % треба ставити знак \ ако их користите самостално';
$strEsperanto = 'Есперанто';
$strEstonian = 'Естонски';
$strEvent = 'Догађаји';
$strExcelEdition = 'Excel издање';
$strExecuteBookmarked = 'Изврши упамћен упит';
$strExplain = 'Објасни SQL';
$strExport = 'Извоз';
$strExportImportToScale = 'Извор/увоз у размери';
$strExportMustBeFile = 'Одабрани тип извоза мора бити сачуван у датотеку!';
$strExtendedInserts = 'Проширени INSERT';
$strExtra = 'Додатно';

$strFailedAttempts = 'Неуспелих покушаја';
$strFieldHasBeenDropped = 'Поље %s је обрисано';
$strFieldInsertFromFileTempDirNotExists = 'Грешка у премештању примљене датотеке, погледајте FAQ 1.11';
$strFieldsEnclosedBy = 'Поља ограничена са';
$strFieldsEscapedBy = 'Ескејп карактер &nbsp; &nbsp; &nbsp;';
$strFieldsTerminatedBy = 'Поља раздвојена са';
$strFields = 'Поља';
$strField = 'Поље';
$strFileAlreadyExists = 'Датотека %s већ постоји на серверу, промените име датотеке или укључите опцију преписивања.';
$strFileCouldNotBeRead = 'Датотеку није могуће прочитати';
$strFileNameTemplateDescription = 'Ова вредност се тумачи коришћењем %1$sstrftime%2$s, тако да можете да користите стрингове за форматирање времена. Такође ће се десити и следеће трансформације: %3$s. Преостали текст ће остати како јесте.';
$strFileNameTemplateDescriptionDatabase = 'назив базе';
$strFileNameTemplateDescriptionServer = 'назив сервера';
$strFileNameTemplateDescriptionTable = 'назив табеле';
$strFileNameTemplateRemember = 'запамти шаблон';
$strFileNameTemplate = 'Шаблон имена датотеке';
$strFiles = 'Датотеке';
$strFileToImport = 'Датотека за увоз';
$strFixed = 'сређено';
$strFlushPrivilegesNote = 'Напомена: phpMyAdmin узима привилегије корисника директно из MySQL табела привилегија. Садржај ове табеле може се разликовати од привилегија које сервер користи ако су вршене ручне измене. У том случају %sпоново учитајте привилегије%s пре него што наставите.';
$strFlushQueryCache = 'Очисти кеш упита';
$strFlushTable = 'Освежи табелу ("FLUSH")';
$strFlushTables = 'Очисти (затвори) све табеле';
$strFontSize = 'Величина фонта';
$strForeignKeyError = 'Грешка у креирању страног кључа (проверите типове података)';
$strFormat = 'Формат';
$strFormEmpty = 'Недостаје вредност у обрасцу!';
$strFreePages = 'Слободне стране';
$strFullText = 'Пун текст';
$strFunction = 'Функција';
$strFunctions = 'Функције';

$strGenBy = 'Генерисао';
$strGeneralRelationFeat = 'Опште особине релација';
$strGenerate = 'Направи';
$strGeneratePassword = 'Направи лозинку';
$strGenTime = 'Време креирања';
$strGeorgian = 'Грузијски';
$strGerman = 'Немачки';
$strGlobal = 'глобално';
$strGlobalPrivileges = 'Глобалне привилегије';
$strGlobalValue = 'Глобална вредност';
$strGo = 'Крени';
$strGrantOption = 'Омогући';
$strGreek = 'Грчки';
$strGzip = '"гзип-овано"';

$strHandler = 'Руковалац';
$strHasBeenAltered = 'је промењен(а).';
$strHasBeenCreated = 'је креиран(а).';
$strHaveToShow = 'Морате изабрати бар једну колону за приказ';
$strHebrew = 'Хебрејски';
$strHelp = 'Помоћ';
$strHexForBLOB = 'Користи хексадецимално за BLOB';
$strHide         = 'Сакриј';
$strHideShowAll = 'Сакриј/прикажи све';
$strHideShowNoRelation = 'Сакриј/прикажи табеле без релација';
$strHomepageOfficial = 'phpMyAdmin веб сајт';
$strHome = 'Почетна страна';
$strHostEmpty = 'Име домаћина је празно!';
$strHost = 'Домаћин';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Мађарски';

$strIcelandic = 'Исландски';
$strId = 'ID';
$strIdxFulltext = 'Текст кључ';
$strIEUnsupported = 'Internet Explorer не подржава ову функцију.';
$strIgnore = 'Игнориши';
$strIgnoreDuplicates = 'Игнориши дуплициране редове';
$strIgnoreInserts = 'Игнориши дупликате при уметању';
$strImport = 'Увоз';
$strImportExportCoords = 'Извоз/увоз координата за PDF схему';
$strImportFiles = 'Увоз датотека';
$strImportFormat = 'Формат датотека за увоз';
$strImportSuccessfullyFinished = 'Увоз је успешно завршен, извршено је %d упита.';
$strIndexes = 'Кључеви';
$strIndexesSeemEqual = 'Следећи индекси су вероватно једнаки, и један од њих треба уклонити:';
$strIndexHasBeenDropped = 'Кључ %s је обрисан';
$strIndexName = 'Име кључа :';
$strIndex = 'Кључ';
$strIndexType = 'Тип кључа :';
$strIndexWarningTable = 'Проблем при индексирању табеле `%s`';
$strInnoDBAutoextendIncrementDesc = ' Величина корака проширења величине табела које се аутоматски проширују када се напуне.';
$strInnoDBAutoextendIncrement = 'Корак аутоматског проширења';
$strInnoDBBufferPoolSizeDesc = 'Величина меморијског прихватника које InnoDB користи за кеширање података и индекса својих табела.';
$strInnoDBBufferPoolSize = 'Величина прихватника';
$strInnoDBDataFilePath = 'Датотеке са подацима';
$strInnoDBDataHomeDirDesc = 'Заједнички део путање директоријума за све InnoDB датотеке са подацима.';
$strInnoDBDataHomeDir = 'Основни директоријум података';
$strInnoDBPages = 'страна';
$strInnoDBRelationAdded = 'Додата InnoDB релација';
$strInnodbStat = 'InnoDB статус';
$strInsecureMySQL = 'Ваша конфигурациона датотека садржи подешавања (root без лозинке) која одговарају стандардном MySQL привилегованом налогу. Ваш MySQL сервер ради са овим подешавањима, отворен је за упаде, и заиста треба да исправите овај сигурносни ризик.';
$strInsertAsNewRow = 'Унеси као нови ред';
$strInsertedRowId = 'ID уметнутих редова:';
$strInsertedRows = 'Унесено редова:';
$strInsert = 'Нови запис';
$strInternalNotNecessary = '* Унутрашња релација није неопходна када постоји и у InnoDB.';
$strInternalRelationAdded = 'Додата интерна релација';
$strInternalRelations = 'Унутрашње релације';
$strInUse = 'се користи';
$strInvalidAuthMethod = 'Неисправан метод аутентикације је задат у конфигурацији:';
$strInvalidColumnCount = 'Број колона мора бити већи од нуле.';
$strInvalidColumn = 'Задата је неисправна колона (%s)!';
$strInvalidCSVFieldCount = 'Неисправан број поља у CSV улазу на линији  %d.';
$strInvalidCSVFormat = 'Неисправан формат CSV улаза на линији %d.';
$strInvalidCSVParameter = 'Неисправни параметри за CSV увоз: %s';
$strInvalidDatabase = 'Неисправна база података';
$strInvalidFieldAddCount = 'Морате додати барем једно поље.';
$strInvalidFieldCount = 'Табела мора имати барем једно поље.';
$strInvalidLDIImport = 'Овај додатак не подржава компресоване увозе!';
$strInvalidRowNumber = '%d није исправан број реда.';
$strInvalidServerHostname = 'Неисправан назив сервера %1$s. Молимо проверите своју конфигурацију.';
$strInvalidServerIndex = 'Неисправан индекс сервера: "%s"';
$strInvalidTableName = 'Неисправан назив табеле';

$strJapanese = 'Јапански';
$strJoins = 'Спојеви';
$strJumpToDB = 'Пређи на базу &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Обрисани&quot; корисници ће и даље имати приступ серверу док привилегије не буду поново учитане.';
$strJustDelete = 'Само обриши кориснике из табеле привилегија.';

$strKeepPass = 'Немој да мењаш лозинку';
$strKeyCache = 'Кеш кључева';
$strKeyname = 'Име кључа';
$strKill = 'Обустави';
$strKnownExternalBug = 'Ова функционалност %s је погођена познатом грешком, видите %s';
$strKorean = 'Корејски';

$strLandscape = 'Положено';
$strLanguageUnknown = 'Непознат језик: %1$s.';
$strLanguage = 'Језик';
$strLatchedPages = 'Забрављене стране';
$strLatexCaption = 'Коментар табеле';
$strLatexContent = 'Садржај табеле __TABLE__';
$strLatexContinuedCaption = 'Настављен коментар табеле';
$strLatexContinued = '(настављено)';
$strLatexIncludeCaption = 'Укључи коментар табеле';
$strLatexLabel = 'Ознака кључа';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Структура табеле __TABLE__';
$strLatvian = 'Летонски';
$strLDI = 'CSV користећи LOAD DATA';
$strLDILocal = 'Користи кључну реч LOCAL';
$strLengthSet = 'Дужина/Вредност*';
$strLimitNumRows = 'Број редова по страни';
$strLinesTerminatedBy = 'Линије се завршавају са';
$strLinkNotFound = 'Веза није пронађена';
$strLinksTo = 'Везе ка';
$strLithuanian = 'Литвански';
$strLocalhost = 'Локални';
$strLocationTextfile = 'Локација текстуалне датотеке';
$strLoginInformation = 'Подаци о пријави';
$strLogin = 'Пријављивање';
$strLogout = 'Одјављивање';
$strLogPassword = 'Лозинка:';
$strLogServer = 'Сервер';
$strLogUsername = 'Корисничко име:';
$strLongOperation = 'Ова операција може да потраје. Да ли да наставимо?';

$strMaxConnects = 'макс. истовремених веза';
$strMaximalQueryLength = 'Максимална дужина направљеног упита';
$strMaximumSize = 'Максимална величина: %s%s';
$strMbExtensionMissing = 'PHP екстензија mbstring није пронађена, а чини се да ви користите вишебајтни скуп знакова. Без екстензије mbstring phpMyAdmin не може исправно да раздваја стрингове и то може довести до неочекиваних резултата.';
$strMbOverloadWarning = 'У PHP подешавањима Вам је укључена mbstring.func_overload опција. Ова опција је некомпатибилна са phpMyAdmin и може довести до грешака у неким подацима!';
$strMIME_available_mime = 'Доступни MIME-типови';
$strMIME_available_transform = 'Доступне трансформације';
$strMIME_description = 'Опис';
$strMIME_MIMEtype = 'MIME-типови';
$strMIME_nodescription = 'Нема описа за ову трансформацију.<br />Молимо питајте аутора шта %s ради.';
$strMIME_transformation = 'Транформације читача';
$strMIME_transformation_note = 'За листу доступних опција трансформације и њихове трансформације MIME-типова, кликните на %sописе трансформација%s';
$strMIME_transformation_options_note = 'Молимо унесите вредности за опције трансформације користећи овај облик: \'a\', 100, b,\'c\'...<br />Ако треба да унесете обрнуту косу црту ("\\") или апостроф ("\'") у те вредности, ставите обрнуту косу црту испред њих (на пример \'\\\\xyz\' или \'a\\\'b\').';
$strMIME_transformation_options = 'Опције трансформације';
$strMIMETypesForTable = 'MIME ТИПОВИ ЗА ТАБЕЛУ';
$strMIME_without = 'MIME-типови приказани у курзиву немају одвојене функције трансформације.';
$strModifications = 'Измене су сачуване';
$strModifyIndexTopic = 'Измени кључ';
$strModify = 'Промени';
$strMoveMenu = 'Премести мени';
$strMoveTableOK = 'Табела %s је померена у %s.';
$strMoveTableSameNames = 'Не могу да преместим табелу у саму себе!';
$strMoveTable = 'Помери табелу у (база<b>.</b>табела):';
$strMultilingual = 'вишејезички';
$strMyISAMDataPointerSizeDesc = 'Подразумевана величина показивача у бајтовима, користи се при CREATE TABLE за MyISAM табеле када није задата опција MAX_ROWS';
$strMyISAMDataPointerSize = 'Величина показивача података';
$strMyISAMMaxExtraSortFileSizeDesc = 'Ако би привремена датотека која се користи за брзо креирање MyISAM индекса била већа него при коришћењу кеша кључева за овде задату вредност, користи метод кеширања кључева';
$strMyISAMMaxExtraSortFileSize = 'Максимална величина привремених датотека при креирању индекса';
$strMyISAMMaxSortFileSizeDesc = 'Максимална величина привремених датотека које MySQL сме да користи при ре-креирању MyISAM индекса (у току REPAIR TABLE, ALTER TABLE, или LOAD DATA INFILE операција).';
$strMyISAMMaxSortFileSize = 'Максимална величина привремених датотека за сортирање';
$strMyISAMRecoverOptions = 'Режим аутоматског опоравка';
$strMyISAMRecoverOptionsDesc = 'Режим аутоматског опоравка пукнутих MyISAM табела, подешен при стартовању сервера опцијом --myisam-recover.';
$strMyISAMRepairThreadsDesc = 'Ако је вредност већа од 1, индекси MyISAM табела се паралелно креирају (сваки индекс у сопственој нити) за време процеса поправке сортирањем.';
$strMyISAMRepairThreads = 'Нити поправке';
$strMyISAMSortBufferSizeDesc = 'Прихватник који се алоцира при сортирању MyISAM индекса за време операције REPAIR TABLE или при креирању индекса са CREATE INDEX или ALTER TABLE.';
$strMyISAMSortBufferSize = 'Величина прихватника за сортирање';
$strMySQLCharset = 'MySQL сет карактера';
$strMysqlClientVersion = 'Верзија MySQL клијента';
$strMySQLConnectionCollation = 'Сортирање за MySQL везу';
$strMysqlLibDiffersServerVersion = 'Верзија ваше PHP MySQL библиотеке %s се разликује од верзије вашег MySQL сервера %s. Ово може довести до непредвидљивог понашања.';
$strMySQLSaid = 'MySQL рече: ';
$strMySQLShowProcess = 'Прикажи листу процеса';
$strMySQLShowStatus = 'Прикажи MySQL информације о току рада';
$strMySQLShowVars = 'Прикажи MySQL системске променљиве';

$strName = 'Име';
$strNext = 'Следећи';
$strNo = 'Не';
$strNoActivity = 'Није било активности %s или више секунди, молимо пријавите се поново';
$strNoDatabases = 'База не постоји';
$strNoDatabasesSelected = 'Није изабрана ни једна база.';
$strNoDataReceived = 'Нису примљени никави подаци за увоз. Или није био наведен назив датотеке, или величина датотеке превазилази максималну величину дозвољену у вашој конфигурацији PHP-а. Погледајте. See FAQ 1.16.';
$strNoDescription = 'нема описа';
$strNoDetailsForEngine = 'Нема детаљнијих информација о статусу за овај погон складиштења.';
$strNoDropDatabases = '"DROP DATABASE" команда је онемогућена.';
$strNoExplain = 'Прескочи објашњавање SQL-a';
$strNoFilesFoundInZip = 'У ZIP архиви нема датотека!';
$strNoFrames = 'phpMyAdmin преферира читаче који подржавају оквире.';
$strNoIndex = 'Кључ није дефинисан!';
$strNoIndexPartsDefined = 'Делови кључа нису дефинисани!';
$strNoModification = 'Нема измена';
$strNone = 'нема';
$strNoOptions = 'Не постоје опције за овај формат';
$strNoPassword = 'Нема лозинке';
$strNoPermission = 'Веб серверу није дозвољено да сачува датотеку %s.';
$strNoPhp = 'без PHP кода';
$strNoPrivileges = 'Нема привилегија';
$strNoRights = 'Није Вам дозвољено да будете овде!';
$strNoRowsSelected = 'Нема одабраних редова';
$strNoSpace = 'Недовољно простора за снимање датотеке %s.';
$strNoTablesFound = 'Табеле нису пронађене у бази.';
$strNoThemeSupport = 'Нема подршке за теме, молимо проверите конфигурацију и/или теме у директоријуму %s.';
$strNotNumber = 'Ово није број!';
$strNotOK = 'није у реду';
$strNotSet = '<b>%s</b> табела није пронађена или није постављена у %s';
$strNoUsersFound = 'Корисник није нађен.';
$strNoValidateSQL = 'Прескочи проверу SQL-a';
$strNull = 'Null';
$strNumberOfFields = 'Број поља';
$strNumberOfTables = 'Број табела';
$strNumSearchResultsInTable = '%s погодака унутар табеле <i>%s</i>';
$strNumSearchResultsTotal = '<b>Укупно:</b> <i>%s</i> погодака';
$strNumTables = 'Табеле';

$strOK = 'У реду';
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Отвори нови phpMyAdmin прозор';
$strOperations = 'Операције';
$strOperator = 'Оператор';
$strOptimizeTable = 'Оптимизуј табелу';
$strOptions = 'Опције';
$strOr = 'или';
$strOverhead = 'Прекорачење';
$strOverwriteExisting = 'Препиши постојеће датотеке';

$strPageNumber = 'Број стране:';
$strPagesToBeFlushed = 'Стране које треба да буду усклађене';
$strPaperSize = 'Димензије папира';
$strPartialImport = 'Делимични увоз';
$strPartialText = 'Део текста';
$strPasswordChanged = 'Лозинка за %s је успешно промењена.';
$strPasswordEmpty = 'Лозинка је празна!';
$strPasswordHashing = 'Хеширање лозинке';
$strPasswordNotSame = 'Лозинке нису идентичне!';
$strPassword = 'Лозинка';
$strPdfDbSchema = 'Схема базе "%s" - Страна %s';
$strPdfInvalidTblName = 'Табела "%s" не постоји!';
$strPdfNoTables = 'Нема табела';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Прави извештај који садржи податке једне табеле)';
$strPDFReportTitle = 'Наслов извештаја';
$strPerHour = 'на сат';
$strPerMinute = 'у минуту';
$strPerSecond = 'у секунди';
$strPersian = 'Персијски';
$strPhoneBook = 'телефонски именик';
$strPHP40203 = 'Користите PHP 4.2.3, који има озбиљан баг са вишебајтним стринговима (mbstring). Погледајте извештај о грешци бр. 19404. Није препоручљиво коришћење ове верзије PHP-a уз phpMyAdmin.';
$strPhp = 'Направи PHP код';
$strPHPVersion = 'верзија PHP-a';
$strPleaseSelectPrimaryOrUniqueKey = 'Молимо изаберите примарни или јединствени кључ';
$strPmaDocumentation = 'phpMyAdmin документација';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> директива МОРА бити подешена у конфигурационој датотеци!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Пољски';
$strPortrait = 'Усправно';
$strPos1 = 'Почетак';
$strPrevious = 'Претходна';
$strPrimaryKeyHasBeenDropped = 'Примарни кључ је обрисан';
$strPrimaryKeyName = 'Име примарног кључа мора да буде... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>мора</b> бити име <b>само</b> примарног кључа!)';
$strPrimary = 'Примарни';
$strPrint = 'Штампај';
$strPrintViewFull = 'Поглед за штампу (са пуним текстом)';
$strPrintView = 'За штампу';
$strPrivDescAllPrivileges = 'Укључује све привилегије осим GRANT.';
$strPrivDescAlterRoutine = 'Дозвољава измену и одбацивање сачуваних рутина.';
$strPrivDescAlter = 'Дозвољава измену структура постојећих табела.';
$strPrivDescCreateDb = 'Дозвољава креирање нових база и табела.';
$strPrivDescCreateRoutine = 'Дозвољава прављење сачуваних рутина.';
$strPrivDescCreateTbl = 'Дозвољава креирање нових табела.';
$strPrivDescCreateTmpTable = 'Дозвољава креирање привремених табела..';
$strPrivDescCreateUser = 'Дозвољава прављење, одбацивање и преименовање корисничких налога.';
$strPrivDescCreateView = 'Дозволи креирање нових погледа.';
$strPrivDescDelete = 'Дозвољава брисање података.';
$strPrivDescDropDb = 'Дозвољава одбацивање база и табела.';
$strPrivDescDropTbl = 'Дозвољава одбацивање табела.';
$strPrivDescExecute5 = 'Дозвољава извршавање сачуваних рутина.';
$strPrivDescExecute = 'Дозвољава покретање сачуваних процедура. Нема ефекта у овој верзији MySQL-a.';
$strPrivDescFile = 'Дозвољава увоз података и њихов извоз у датотеке.';
$strPrivDescGrant = 'Дозвољава додавање корисника и привилегија без поновног учитавања табела привилегија.';
$strPrivDescIndex = 'Дозвољава креирање и брисање кључева.';
$strPrivDescInsert = 'Дозвољава уметање и замену података.';
$strPrivDescLockTables = 'Дозвољава закључавање табела текућим процесима.';
$strPrivDescMaxConnections = 'Ограничава број нових конекција које корисник може та отвори на сат.';
$strPrivDescMaxQuestions = 'Ограничава број упита које корисник може да упути серверу за сат.';
$strPrivDescMaxUpdates = 'Ограничава број команди које мењају табеле или базе које корисник може да изврши на сат.';
$strPrivDescMaxUserConnections = 'Ограничава број истовремених конекција које корисник може да има.';
$strPrivDescProcess3 = 'Дозвољава прекидање процеса других корисника.';
$strPrivDescProcess4 = 'Дозвољава преглед комплетних упита у листи процеса.';
$strPrivDescReferences = 'Нема ефекта у овој верзији MySQL-a.';
$strPrivDescReload = 'Дозвољава поновно учитавање подешавања сервера и пражњење кеша сервера.';
$strPrivDescReplClient = 'Даје право кориснику да пита где су главни/помоћни сервери.';
$strPrivDescReplSlave = 'Потребно због помоћних сервера за репликацију.';
$strPrivDescSelect = 'Дозвољава читање података.';
$strPrivDescShowDb = 'Даје приступ комплетној листи база.';
$strPrivDescShowView = 'Дозвољава извршавање SHOW CREATE VIEW упита.';
$strPrivDescShutdown = 'Дозвољава гашење сервера.';
$strPrivDescSuper = ' Дозвољава повезивање иако је достигнут максималан број дозвољених веза; Неопходно за већину административних опција као што су подешавање глобалних променљивих или прекидање процеса осталих корисника.';
$strPrivDescUpdate = 'Дозвољава измену података.';
$strPrivDescUsage = 'Нема привилегија.';
$strPrivileges = 'Привилегије';
$strPrivilegesReloaded = 'Привилегије су успешно поново учитане.';
$strProcedures = 'Процедуре';
$strProcesses = 'Процеси';
$strProcesslist = 'Листа процеса';
$strProfiling = 'Профилисање';
$strProtocolVersion = 'Верзија протокола';
$strPutColNames = 'Стави имена поља у први ред';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Упит по примеру';
$strQueryCache = 'Кеш упита';
$strQueryFrame = 'Прозор за упите';
$strQueryOnDb = 'SQL упит на бази <b>%s</b>:';
$strQueryResultsOperations = 'Операције на резултатима упита';
$strQuerySQLHistory = 'SQL историјат';
$strQueryStatistics = '<b>Статистике упита</b>: %s упита је постављено серверу од његовог покретања.';
$strQueryTime = 'Упит је трајао %01.4f секунди';
$strQueryType = 'Врста упита';
$strQueryWindowLock = 'Не преписуј овај упит изван прозора';

$strReadRequests = 'Захтеви за читање';
$strReceived = 'Примљено';
$strRecommended = 'препоручено';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Провери референцијални интегритет:';
$strRefresh = 'Освежи';
$strRelationalSchema = 'Релациона схема';
$strRelationDeleted = 'Релација обрисана';
$strRelationNotWorking = 'Додатне могућности за рад са повезаним табелама су искључене. Да бисте сазнали зашто, кликните %sовде%s.';
$strRelations = 'Релације';
$strRelationsForTable = 'РЕЛАЦИЈЕ ТАБЕЛЕ';
$strRelationView = 'Релациони поглед';
$strReloadingThePrivileges = 'Поново учитавам привилегије';
$strReloadPrivileges = 'Поново учитај привилегије';
$strReload = 'Поново учитај';
$strRemoveSelectedUsers = 'Уклони изабране кориснике';
$strRenameDatabaseOK = 'База %s је преименована у %s';
$strRenameTable = 'Промени име табеле у ';
$strRenameTableOK = 'Табели %s промењено име у %s';
$strRepairTable = 'Поправи табелу';
$strReplaceNULLBy = 'Замени NULL са';
$strReplaceTable = 'Замени податке у табели са подацима из датотеке';
$strReplication = 'Репликација';
$strReset = 'Поништи';
$strResourceLimits = 'Ограничења ресурса';
$strRestartInsertion = 'Поново покрени уношење са %s редова';
$strReType = 'Поновите унос';
$strRevokeAndDeleteDescr = 'Корисници ће и даље имати USAGE привилегије док се привилегије поново не учитају.';
$strRevokeAndDelete = 'Обустави све активне привилегије корисника и затим их обриши.';
$strRevokeMessage = 'Забранили сте привилегије за %s';
$strRevoke = 'Забрани';
$strRomanian = 'Румунски';
$strRoutineReturnType = 'Повратни тип';
$strRoutines = 'Рутине';
$strRowLength = 'Дужина реда';
$strRows = 'Редова';
$strRowsFrom = ' редова почев од реда';
$strRowSize = 'Величина реда';
$strRowsModeFlippedHorizontal = 'хоризонталном (ротирана заглавља)';
$strRowsModeHorizontal = 'хоризонталном';
$strRowsModeOptions = 'у %s моду и понови заглавље после сваког %s реда';
$strRowsModeVertical = 'вертикалном';
$strRowsStatistic = 'Статистике реда';
$strRunning = 'на серверу %s';
$strRunQuery = 'Изврши SQL упит';
$strRunSQLQuery = 'Изврши SQL упит(е) на бази %s';
$strRunSQLQueryOnServer = 'Изврши SQL упит(е) на серверу %s';
$strRussian = 'Руски';

$strSave = 'Сачувај';
$strSaveOnServer = 'Сачувај на сервер у директоријум %s';
$strSavePosition = 'Сачувај позицију';
$strScaleFactorSmall = 'Фактор умањења је премали да би схема стала на једну страну';
$strSearchFormTitle = 'Претраживање базе';
$strSearchInTables = 'Унутар табела:';
$strSearchNeedle = 'Речи или вредности које се траже (џокер: "%"):';
$strSearch = 'Претраживање';
$strSearchOption1 = 'бар једну од речи';
$strSearchOption2 = 'све речи';
$strSearchOption3 = 'тачан израз';
$strSearchOption4 = 'као регуларни израз';
$strSearchResultsFor = 'Резултати претраге за "<i>%s</i>" %s:';
$strSearchType = 'Тражи:';
$strSecretRequired = 'Конфигурациона датотека захтева тајну лозинку (blowfish_secret).';
$strSelectADb = 'Изаберите базу';
$strSelectAll = 'Изабери све';
$strSelectBinaryLog = 'Изаберите бинарни дневник за преглед';
$strSelectFields = 'Изабери поља (најмање једно)';
$strSelectForeignKey = 'Изабери страни кључ';
$strSelectNumRows = 'у упиту';
$strSelectReferencedKey = 'Изаберите референцирани кључ';
$strSelectTables = 'Изабери табеле';
$strSend = 'Сачувај као датотеку';
$strSent = 'Послато';
$strServerChoice = 'Избор сервера';
$strServer = 'Сервер';
$strServerNotResponding = 'Сервер не одговара';
$strServers = 'Сервери';
$strServerStatusDelayedInserts = 'Одложена уметања';
$strServerStatus = 'Информације о току рада';
$strServerStatusUptime = 'Овај MySQL сервер ради већ %s. Покренут је %s.';
$strServerTabVariables = 'Променљиве';
$strServerTrafficNotes = '<b>Саобраћај сервера</b>: Табеле показују статистике мрежног саобраћаја на овом MySQL серверу од његовог покретања.';
$strServerVars = 'Серверске променљиве и подешавања';
$strServerVersion = 'Верзија сервера';
$strSessionStartupErrorGeneral = 'Не могу да покренем сесију без грешака, молим проверите грешке у PHP и/или дневнику веб сервера и прописно подесите вашу PHP инсталацију.';
$strSessionValue = 'Вредност сесије';
$strSetEnumVal = 'Ако је поље "enum" или "set", унесите вредности у формату: \'a\',\'b\',\'c\'...<br />Ако вам треба обрнута коса црта ("\\") или апостроф ("\'") користите их у "избегнутом" (escaped) облику (на пример \'\\\\xyz\' или \'a\\\'b\').';
$strShowAll = 'Прикажи све';
$strShowColor = 'Прикажи боју';
$strShowDatadictAs = 'Формат речника података';
$strShowFullQueries = 'Прикажи комплетне упите';
$strShowGrid = 'Прикажи мрежу';
$strShowHideLeftMenu = 'Прикажи/сакриј мени с леве стране';
$strShowingBookmark = 'Приказивање маркера';
$strShowingPhp = 'Приказ као PHP код';
$strShowingRecords = 'Приказ записа';
$strShowingSQL = 'Приказ као SQL упит';
$strShow = 'Прикажи';
$strShowOpenTables = 'Прикажи отворене табеле';
$strShowPHPInfo = 'Прикажи информације о PHP-у';
$strShowSlaveHosts = 'Прикажи подређене сервер';
$strShowSlaveStatus = 'Прикажи статус подређених сервера';
$strShowStatusBinlog_cache_disk_useDescr = 'Број транксакција које су користиле кеш привременог бинарног дневника али су превазишле вредност у binlog_cache_size и користиле привремену датотеку да сместе изразе из трансакције.';
$strShowStatusBinlog_cache_useDescr = 'Број трансакција које су користиле кеш привременог бинарног дневника.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Број привремених табела које је сервер аутоматски креирао на диску док је извршавао изразе. Ако је Created_tmp_disk_tables велико, можда треба да повећате вредност tmp_table_size како би учинили да привремене табеле буду базиране у меморији уместо на диску.';
$strShowStatusCreated_tmp_filesDescr = 'Колико привремених датотека је mysqld направио.';
$strShowStatusCreated_tmp_tablesDescr = 'Број привремених табела које је сервер аутоматски креирао у меморији док је извршавао изразе.';
$strShowStatusDelayed_errorsDescr = 'Број редова уписаних са INSERT DELAYED за које је јављена нека грешка (вероватно дуплирани кључ).';
$strShowStatusDelayed_insert_threadsDescr = 'Број INSERT DELAYED руковалачких нити у употреби. Свака посебна табела над којом се користи INSERT DELAYED добија своју нит.';
$strShowStatusDelayed_writesDescr = 'Број уписаних INSERT DELAYED редова.';
$strShowStatusFlush_commandsDescr  = 'Број извршених FLUSH израза.';
$strShowStatusHandler_commitDescr = 'Број интерних COMMIT израза.';
$strShowStatusHandler_deleteDescr = 'Број брисања неког реда табеле.';
$strShowStatusHandler_discoverDescr = 'MySQL сервер може да упита погон складиштења NDB Cluster да ли зна за табелу одређеног имена. То се назива откривањем (discovery). Handler_discover означава број пута када је откривена табела.';
$strShowStatusHandler_read_firstDescr = 'Број пута када је прва ставка прочитана из индекса. Ако је ово високо, то може значити да сервер ради пуно пуних скенирања индекса; на пример SELECT кол1 FROM нешто, под претпоставком да је кол1 индексирано.';
$strShowStatusHandler_read_keyDescr = 'Број захтева за читање реда заснованих на кључу. Ако је овај број висок, то је добар показатељ да су ваши упити и табеле прописно индексирани.';
$strShowStatusHandler_read_nextDescr = 'Број захтева за читањем следећег реда у поретку кључева. Ово се повећава када радите упит по колони индекса са ограничењем опсега или ако радите скенирање индекса.';
$strShowStatusHandler_read_prevDescr = 'Број захтева за читањем претходног реда у поретку кључева. Ова метода читања се углавном користи за оптимизацију ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Број захтева за читање реда заснованих на фиксној позицији. Ово је високо ако радите много упита који захтевају сортирање резултата. Вероватно имате много упита који захтевају да MySQL скенира целе табеле или имате спојеве који не користе кључеве прописно.';
$strShowStatusHandler_read_rnd_nextDescr = 'Број захтева за читањем следећег реда из датотеке података. Ово је високо ако радите пуно скенирања табела. Ово обично наговештава да ваше табеле нису прописно индексиране или да ваши упити нису написани да искористе већ постојеће индексе.';
$strShowStatusHandler_rollbackDescr = 'Број интерних ROLLBACK израза.';
$strShowStatusHandler_updateDescr = 'Број захтева за ажурирање реда у табели.';
$strShowStatusHandler_writeDescr = 'Број захтева за уписивање реда у табелу.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Број страна које садрже податке (чистих или прљавих).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Број страна које су тренутно прљаве.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Број страна у остави бафера за које је тражено да буду очишћене.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Број слободних страна.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Број забрављених страна у InnoDB остави бафера. Са ових страна се тренутно чита или се у њих уписује или из неког другог разлога не могу бити очишћене нити уклоњене.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Број страна које су заузете зато што су одвојене за административне потребе, као што су закључавање редова или индекс прилагодљивог хеша. Ова вредност се такође може израчунати и на следећи начин Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Пуна величина оставе бафера, у странама.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Број „насумичних“ пред-читања која је InnoDB покренуо. Ово се дешава када упит треба да скенира велики део табеле али насумичним редоследом.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Број секвенцијалних пред-читања која је InnoDB покренуо. Ово се дешава када InnoDB ради секвенцијално скенирање целе табеле.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Број логичких захтева за читање које је InnoDB урадио.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Број логичких читања која InnoDB није могао да задовољи из оставе бафера те је морао да ради читање појединачне стране.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Нормално се уписи у InnoDB оставу бафера дешавају у позадини. Међутим, ако је неопходно прочитати или направити страну а нема доступних чистих страна, неопходно је сачекати да се стране претходно очисте. Овај бројач броји дешавања ових чекања. Ако је величина оставе бафера постављена како треба, ова вредност ви требало да је ниска.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Број уписа учињених у InnoDB оставу бафера.';
$strShowStatusInnodb_data_fsyncsDescr = 'Број fsync() операција до сада.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Тренутни број fsync() операција на чекању.';
$strShowStatusInnodb_data_pending_readsDescr = 'Тренутни број читања на чекању.';
$strShowStatusInnodb_data_pending_writesDescr = 'Тренутни број уписа на чекању.';
$strShowStatusInnodb_data_readDescr = 'Количина података прочитаних до сада, у бајтовима.';
$strShowStatusInnodb_data_readsDescr = 'Укупан број читања података.';
$strShowStatusInnodb_data_writesDescr = 'Укупан број уписа података.';
$strShowStatusInnodb_data_writtenDescr = 'Количина података уписаних до сада, у бајтовима';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Број извршених двоуписних (doublewrite) уписа и број страна које су уписане у ову сврху.';
$strShowStatusInnodb_dblwr_writesDescr = 'Број извршених двоуписних (doublewrite) уписа и број страна које су уписане у ову сврху.';
$strShowStatusInnodb_log_waitsDescr = 'Број чекања која смо имали зато што је бафер дневника био премали те смо морали да сачекамо да буде очишћен пре наставка.';
$strShowStatusInnodb_log_write_requestsDescr = 'Број захтева за упис у дневник.';
$strShowStatusInnodb_log_writesDescr = 'Број физичких уписа у датотеку дневника.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Број fsyncs уписа начињених у датотеку дневника.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Број fsync-ова за датотеку дневника на чекању.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Број уписа у датотеку дневника на чекању.';
$strShowStatusInnodb_os_log_writtenDescr = 'Број бајтова уписаних у датотеку дневника.';
$strShowStatusInnodb_pages_createdDescr = 'Број направљених страна.';
$strShowStatusInnodb_page_sizeDescr = 'Укомпајлирана величина стране за InnoDB (подразумевано 16КБ). Многе вредности се рачунају у странама; величина стране омогућава да се оне лако конвертују у бајтове.';
$strShowStatusInnodb_pages_readDescr = 'Број прочитаних страна.';
$strShowStatusInnodb_pages_writtenDescr = 'Број записаних страна.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Број брава за редове које се тренутно чекају.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Просечно време за добављање браве за ред, у милисекундама.';
$strShowStatusInnodb_row_lock_timeDescr = 'Укупно времена проведено у добављању брава за редове, у милисекундама.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Најдуже време за добављање браве за ред, у милисекундама.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Број пута када се морала чекати брава за ред.';
$strShowStatusInnodb_rows_deletedDescr = 'Број редова обрисаних из InnoDB табела.';
$strShowStatusInnodb_rows_insertedDescr = 'Број редова уметнутих у InnoDB табеле.';
$strShowStatusInnodb_rows_readDescr = 'Број редова прочитаних из InnoDB табела.';
$strShowStatusInnodb_rows_updatedDescr = 'Број редова ажурираних у InnoDB табелама.';
$strShowStatusKey_blocks_not_flushedDescr = 'Број блокова кључева у кешу кључева који су измењени али још нису послати на диск. Ово је раније било познато као Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Број неискоришћених блокова у кешу кључева. Ову вредност можете да користите да утврдите колики део кеша кључева је у употреби.';
$strShowStatusKey_blocks_usedDescr = 'Број искоришћених блокова у кешу кључева. Ова вредност је ознака „високог водостаја“ која показује највећи икада број блокова који је био у употреби у исто време.';
$strShowStatusKey_read_requestsDescr = 'Број захтева за читање блока кључева из кеша.';
$strShowStatusKey_readsDescr = 'Број физичких читања блока кључева са диска. Ако је Key_reads велико, онда је ваша вредност за key_buffer_size вероватно премала. Степен промашаја кеша се може израчунати као Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Број захтева за уписивање блока кључева у кеш.';
$strShowStatusKey_writesDescr = 'Број физичких уписа блока кључева на диск.';
$strShowStatusLast_query_costDescr = 'Укупна цена последњег компајлираног упита како ју је израчунао оптимизатор упита. Корисно за упоређивање цене различитих планова упита за исти упит. Подразумевана вредност 0 значи да још није био компајлиран ниједан упит.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Број редова у INSERT DELAYED редовима чекања који чекају уписивање.';
$strShowStatusOpened_tablesDescr = 'Број табела које су биле отваране. Ако је број велики, ваш кеш табела је вероватно премали.';
$strShowStatusOpen_filesDescr = 'Број отворених датотека.';
$strShowStatusOpen_streamsDescr = 'Број отворених токова (користи се првенствено за вођење дневника (logging)).';
$strShowStatusOpen_tablesDescr = 'Број отворених табела.';
$strShowStatusQcache_free_blocksDescr = 'Број слободних меморијских блокова у у кешу упита.';
$strShowStatusQcache_free_memoryDescr = 'Количина слободне меморије за кеш упита.';
$strShowStatusQcache_hitsDescr = 'Број погодака из кеша.';
$strShowStatusQcache_insertsDescr = 'Број упита додатих у кеш.';
$strShowStatusQcache_lowmem_prunesDescr = 'Број упита који су уклоњени из кеша да би се ослободила меморија за кеширање нових упита. Овај податак вам може помоћи да подесите величину кеша за упите. Кеш за упите користи стратегију најдуже некоришћеног (en: least recently used , LRU) да би одлучио које упите да уклони из кеша.';
$strShowStatusQcache_not_cachedDescr = 'Број некешираних упита (који се не могу кеширати или нису кеширани због подешавања query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Број упита регистрованих у кешу.';
$strShowStatusQcache_total_blocksDescr = 'Укупан број блокова у кешу за упите.';
$strShowStatusReset = 'Ресет';
$strShowStatusRpl_statusDescr = 'Статус репликације отпорне на грешке (није још имплементирано).';
$strShowStatusSelect_full_joinDescr = 'Број спојева који не користе индексте. Ако ова вредност није 0, требало би пажљиво да проверите индексе ваших табела.';
$strShowStatusSelect_full_range_joinDescr = 'Број спојева који су користили претрагу опсега на референтној табели.';
$strShowStatusSelect_range_checkDescr = 'Број спојева без кључева који проверавају употребу кључа после сваког реда. (Ако ово није 0, требало би пажљиво да проверите индексе ваших табела.)';
$strShowStatusSelect_rangeDescr = 'Број спојева који су користили опсеге на првој табели. (Обично није критично чак ни када је ово велико)';
$strShowStatusSelect_scanDescr = 'Број спојева који су урадили пуно скенирање прве табеле.';
$strShowStatusSlave_open_temp_tablesDescr = 'Број привремених табела тренутно отворених од стране помоћне SQL нити.';
$strShowStatusSlave_retried_transactionsDescr = 'Укупан број пута (од покретања) када је помоћна SQL нит за репликацију покушала трансакције.';
$strShowStatusSlave_runningDescr = 'Ово је ON ако је овај сервер помоћни који је повезан на главни.';
$strShowStatusSlow_launch_threadsDescr = 'Број нити за које је требало више од slow_launch_time секудни да би биле покренуте.';
$strShowStatusSlow_queriesDescr = 'Број упита за које је требало више од long_query_time секудни.';
$strShowStatusSort_merge_passesDescr = 'Број пролаза за спајање које је алгоритам за сортирање морао да одради. Ако је ова вредност велика, требало би да размислите о повећању вредности системске променљиве sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Број сортирања која су урађена са опсегом.';
$strShowStatusSort_rowsDescr = 'Број сортираних редова.';
$strShowStatusSort_scanDescr = 'Број сортирања до којих је дошло скенирањем табеле.';
$strShowStatusTable_locks_immediateDescr = 'Број пута када је брава за табелу одмах добављена.';
$strShowStatusTable_locks_waitedDescr = 'Број пута када брава за табелу није могла бити одмах добављена и било је потребно чекање. Ако је ово високо и имате проблема са перформансама, прво би требало да оптимизујете своје упите а потом да или поделите табелу или табеле или да користите репликацију.';
$strShowStatusThreads_cachedDescr = 'Број нити у кешу за нити. Степен погодака кеша се може израчунати као Threads_created/Конекције. Ако је ова вредност црвена требало би да повећате ваш thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Број тренутно отворених веза.';
$strShowStatusThreads_createdDescr = 'Број нити креираних за руковање конекцијама. Ако је Threads_created велико, можда би требало да повећате вредност thread_cache_size. (Ако имате добру имплементацију нити, ово обично не доноси приметна побољшања у перформансама.)';
$strShowStatusThreads_runningDescr = 'Број нити које нису успаване.';
$strShowTableDimension = 'Прикажи димензије табеле';
$strShowTables = 'Прикажи табеле';
$strShowThisQuery = 'Прикажи поново овај упит';
$strSimplifiedChinese = 'Поједностављени кинески';
$strSingly = '(по једном пољу)';
$strSize = 'Величина';
$strSkipQueries = 'Број записа (упита) које треба прескочити:';
$strSlovak = 'Словачки';
$strSlovenian = 'Словеначи';
$strSmallBigAll = 'Све мало/велико';
$strSnapToGrid = 'Држи се мреже';
$strSocketProblem = '(или прикључак локалног MySQL сервера није исправно подешен)';
$strSortByKey = 'Сортирај по кључу';
$strSorting = 'Сортирање';
$strSort = 'Сортирање';
$strSpaceUsage = 'Заузеће';
$strSpanish = 'Шпански';
$strSplitWordsWithSpace = 'Речи се одвајају размаком (" ").';
$strSQLCompatibility = 'Мод SQL компатибилности';
$strSQLExportType = 'Тип извоза';
$strSQLParserBugMessage = 'Постоји могућност да сте пронашли баг у SQL парсеру. Молимо испитајте свој упит пажљиво, и проверите да су наводници исправни и да не недостају. Остали могући разлози грешке могу бити да сте послали бинарну датотеку ван области за обичан текст. Можете пробати свој упит у MySQL сучељу командне линије. Доња порука о грешци MySQL сервера, ако је има, може вам помоћи у откривању проблема. Ако и даље имате проблеме или ако парсер не успева тамо где успева сучеље командне линије, сведите свој SQL упит на један једини упит који ствара проблеме и пошаљите нам извештај о грешци са делом кода у доњој РЕЗ секцији:';
$strSQLParserUserError = 'Изгледа да постоји грешка у вашем SQL упиту. Овде је порука о грешки MySQL сервера, која вам може помоћи у откривању проблема';
$strSQLQuery = 'SQL упит';
$strSQLResult = 'SQL резултат';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Неисправан иГ¤ентификатор';
$strSQPBugUnclosedQuote = 'Наводник није затворен';
$strSQPBugUnknownPunctuation = 'Непознат стринг интерпункције';
$strStandInStructureForView = 'Структура која замењује поглед';
$strStatCheckTime = 'Последња провера';
$strStatCreateTime = 'Направљено';
$strStatement = 'Име';
$strStatisticsOverrun = 'На запосленом серверу бројачи бајтова могу да се прелију (overrun), тако да те статистике, онако како их пријављује MySQL сервер, могу бити нетачне.';
$strStatUpdateTime = 'Последња измена';
$strStatus = 'Статус';
$strStorageEngines = 'Погони складиштења';
$strStorageEngine = 'Погон складиштења';
$strStrucCSV = 'CSV формат';
$strStrucData = 'Структура и подаци';
$strStrucExcelCSV = 'CSV за MS Excel';
$strStrucNativeExcel = 'Изворни MS Excel подаци';
$strStrucOnly = 'Само структура';
$strStructPropose = 'Предложи структуру табеле';
$strStructureForView = 'Структура за поглед (view)';
$strStructure = 'Структура';
$strSubmit = 'Пошаљи';
$strSuccess = 'Ваш SQL упит је успешно извршен';
$strSum = 'Укупно';
$strSwedish = 'Шведски';
$strSwitchToDatabase = 'Пребаци се на копирану базу';
$strSwitchToTable = 'Пређи на копирану табелу';

$strTable = 'Табела';
$strTableAlreadyExists = 'Табела %s већ постоји!';
$strTableComments = 'Коментари табеле';
$strTableEmpty = 'Има табеле је празно!';
$strTableHasBeenDropped = 'Табела %s је одбачена';
$strTableHasBeenEmptied = 'Табела %s је испражњена';
$strTableHasBeenFlushed = 'Табела %s је освежена';
$strTableIsEmpty = 'Табела је изгледа празна!';
$strTableMaintenance = 'Радње на табели';
$strTableName = 'Назив табеле';
$strTableOfContents = 'Садржај';
$strTableOptions = 'Опције табеле';
$strTables = '%s табела';
$strTableStructure = 'Структура табеле';
$strTakeIt = 'преузми';
$strTblPrivileges = 'Привилегије везане за табеле';
$strTempData = 'Привремени подаци';
$strTextAreaLength = 'Због њехове величине, поље<br />можда нећете моћи да измените';
$strThai = 'Тајски';
$strThemeDefaultNotFound = 'Није пронађена подразумевана тема %s!';
$strThemeNoPreviewAvailable = 'Преглед не постоји.';
$strThemeNotFound = 'Није пронађена тема %s!';
$strThemeNoValidImgPath = 'Нема исправне путање до слика за тему %s!';
$strTheme = 'Тема / стил';
$strThemePathNotFound = 'Није пронађена путања до теме за тему %s!';
$strThisHost = 'Овај сервер';
$strThreadSuccessfullyKilled = 'Процес %s је успешно прекинут.';
$strThreads = 'Нити';
$strTime = 'Време';
$strTimeoutInfo = 'Претходном увозу је истекло време, након поновног слања биће настављен од позиције %d.';
$strTimeoutNothingParsed = 'Међутим, при последњем покретању подаци нису били обрађени, што обично значи да phpMyAdmin неће бити у могућности да заврши овај увоз осим ако не повећате временска ограничења у PHP-у';
$strTimeoutPassed = 'Време извршења скрипта је истекло, ако желите да довршите увоз, молимо пошаљите исту датотеку и увоз ће се наставити.';
$strToFromPage = 'од/до странице';
$strToggleScratchboard = 'Укључи/искључи радну таблу';
$strToggleSmallBig = 'Промени мало/велико';
$strToSelectRelation = 'Да одаберете релацију, кликните :';
$strTotal = 'укупно';
$strTotalUC = 'Укупно';
$strTraditionalChinese = 'Традиционални кинески';
$strTraditionalSpanish = 'Традиционални шпански';
$strTraffic = 'Саобраћај';
$strTransactionCoordinator = 'Координатор трансакција';
$strTransformation_application_octetstream__download = 'Приказује везу за преузимање бинарних података за поље. Прва опција је име бинарне датотеке. Друга опција је могуће име поља реда табеле који садржи име датотеке. Ако дате другу опцију, прва мора бити постављена на празан стринг';
$strTransformation_application_octetstream__hex = 'Приказује хексадецимални приказ података. Опциони први параметар одређује колико често се додаје празно место (подразумевано свака 2 нибла).';
$strTransformation_image_jpeg__inline = 'Приказује умањену слику на коју је могуће кликнути; опције: ширина, висина у пикселима (чува оригинални однос)';
$strTransformation_image_jpeg__link = 'Приказује линк ка овој снимци (нпр. директно преузимање из BLOB-а).';
$strTransformation_image_png__inline = 'Прикажи JPEG слике на страни';
$strTransformation_text_plain__dateformat = 'Приказује TIME, TIMESTAMP, DATETIME или поље са нумеричком јуникс временском ознаком (timestamp) као форматирани датум. Прва опција је померај (у сатима) који се додаје временској ознаци (подразумевамо: 0). Другу опцију користитте да одредите другачији стринг за форматирање датума/времена. Трећа опција одређује да ли желите да видите локални или UTC датум (користите стрингове "local" или "utc" за то). У складу са тим, формат датума има различите вредности - за "local" погледајте PHP-ову документацију за функцију strftime() док је за "utc" то урађено коришћењем фукције gmdate().';
$strTransformation_text_plain__external = 'САМО LINUX: Покреће екстерну апликацију и попуњава податке у пољима преко стандардног улаза. Враћа стандардни излаз апликације. Подразумевано је Tidy, за лепши приказ HTML кода. Због сигурносних разлога, морате ручно изменити датотеку libraries/transformations/text_plain__external.inc.php и додати алате које желите да користите. Прва опција је број програма које желите да користите, а друга су параметри програма. Ако се трећи параметар постави на 1 излаз ће бити конвертован користећи htmlspecialchars() (подразумевано је 1). Ако је четврти параметар постављен на 1, NOWRAP ће бити додато ћелији са садржајем тако да ће излаз бити приказан без измена. (подразумевано 1)';
$strTransformation_text_plain__formatted = 'Чува оригинално форматирање поља. Escaping се не врши.';
$strTransformation_text_plain__imagelink = 'Приказује слику и линк, поље садржи назив датотеке; прва опција је префикс као "http://domain.com/", друга опција је ширина у пикселима, трећа је висина.';
$strTransformation_text_plain__link = 'Приказује линк, поље садржи назив датотеке; прва опција је префикс као "http://domain.com/", друга опција је наслов за линк.';
$strTransformation_text_plain__sql = 'Форматира текст као SQL упит са обележавањем синтаксе.';
$strTransformation_text_plain__substr = 'Показује део стринга. Прва опција је број знакова које треба прескочити од почетка стринга (подразумевано 0). Друга опција је број враћених знакова (подразумевано: до краја стринга). Трећа опција је стринг који се додаје када дође до одсецања (подразумевано: ...) .';
$strTriggers = 'Окидачи';
$strTruncateQueries = 'Прикажи скраћене упите';
$strTurkish = 'Турски';
$strType = 'Тип';

$strUkrainian = 'Украјински';
$strUncheckAll = 'ниједно';
$strUnicode = 'Уникод';
$strUnique = 'Јединствени';
$strUnknown = 'непознат';
$strUnselectAll = 'ништа';
$strUnsupportedCompressionDetected = 'Покушали сте да увезете датотеку са компресијом која није подржана (%s). Или подршка за њу није имплементирана, или је искључена у вашој конфигурацији.';
$strUpdatePrivMessage = 'Ажурирали сте привилегије за %s.';
$strUpdateProfileMessage = 'Профил је промењен.';
$strUpdateQuery = 'Ажурирај упит';
$strUpdComTab = 'Молимо погледајте у документацији како се ажурира табела Column_comments';
$strUpgrade = 'Требало би да унапредите ваш %s сервер на верзију %s или новију.';
$strUploadErrorCantWrite = 'Неуспело уписивање датотеке на диск.';
$strUploadErrorExtension = 'Пријем датотеке заустављен због екстензије.';
$strUploadErrorFormSize = 'Послата датотека превазилази вредност директиве MAX_FILE_SIZE која је наведена у HTML форми.';
$strUploadErrorIniSize = 'Послата датотека превазилази вредност директиве upload_max_filesize у php.ini.';
$strUploadErrorNoTempDir = 'Недостаје привремени директоријум.';
$strUploadErrorPartial = 'Послата датотека је само делимично примљена.';
$strUploadErrorUnknown = 'Непозната грешка при слању датотеке.';
$strUploadLimit = 'Вероватно сте покушали да увезете превелику датотеку. Молимо погледајте %sдокументацију%s за начине превазилажења овог ограничења.';
$strUploadsNotAllowed = 'Слање датотека на овај сервер није дозвољено.';
$strUsage = 'Заузеће';
$strUseBackquotes = 'Користи \' за ограничавање имена поља';
$strUsedPhpExtensions = 'Коришћене PHP екстензије';
$strUseHostTable = 'Користи табелу домаћина';
$strUserAlreadyExists = 'Корисник %s већ постоји!';
$strUserEmpty = 'Име корисника није унето!';
$strUserName = 'Име корисника';
$strUserNotFound = 'Изабрани корисник није пронађен у табели привилегија.';
$strUserOverview = 'Преглед корисника';
$strUsersDeleted = 'Изабрани корисници су успешно обрисани.';
$strUsersHavingAccessToDb = 'Корисници који имају приступ &quot;%s&quot;';
$strUser = 'Корисник';
$strUseTabKey = 'Користите TAB тастер за померање од поља до поља, или CTRL+стрелице за слободно померање';
$strUseTables = 'Користи табеле';
$strUseTextField = 'Користи текст поље';
$strUseThisValue = 'Користи ову вредност';

$strValidateSQL = 'Провери SQL';
$strValidatorError = 'SQL валидатор није могао да буде покренут. Проверите да ли су инсталиране неопходне PHP екстензије описане у  %sдокументацији%s.';
$strValue = 'Вредност';
$strVar = 'Променљива';
$strVersionInformation = 'Информације о верзији';
$strViewDumpDatabases = 'Прикажи садржај (схему) базе';
$strViewDumpDB = 'Прикажи садржај (схему) базе';
$strViewDump = 'Прикажи садржај (схему) табеле';
$strViewHasBeenDropped = 'Поглед %s је одбачен';
$strViewMaxExactCount = 'Овај поглед има више од %d редова. Молимо погледајте %sдокументацију%s.';
$strViewName = 'назив за VIEW';
$strView = 'Поглед';

$strWebServerUploadDirectoryError = 'Директоријум који сте изабрали за слање није доступан';
$strWebServerUploadDirectory = 'директоријум за слање веб сервера ';
$strWelcome = 'Добродошли на %s';
$strWestEuropean = 'Западноевропски';
$strWildcard = 'џокер';
$strWindowNotFound = 'Одредишни прозор претраживача није могао да буде ажуриран. Можда сте затворили матични прозор, или ваш претраживач онемогућава ажурирање међу прозорима због сигурносних подешавања';
$strWithChecked = 'Означено:';
$strWriteRequests = 'Захтеви за упис';
$strWrongUser = 'Погрешно корисничко име/лозинка. Приступ одбијен.';

$strXML = 'XML';

$strYes = 'Да';

$strZeroRemovesTheLimit = 'Напомена: Постављање ових опција на 0 (нулу) уклања ограничења.';
$strZip = '"зиповано"';

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

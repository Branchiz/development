<?php
/* $Id: macedonian_cyrillic-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by:
 *     Dimce Grozdanoski <dimce.grozdanoski@ridarec.com>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';

// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('бајти', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Нед', 'Пон', 'Вто', 'Сре', 'Чет', 'Пет', 'Саб');
$month = array('јан', 'феб', 'мар', 'апр', 'мај', 'јун', 'јул', 'авг', 'сеп', 'окт', 'нов', 'дек');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. во %H:%M';
$timespanfmt = '%s денови, %s часови, %s минути и %s секунди';

$strAPrimaryKey = 'Примарниот клуч %s е додаден';
$strAbortedClients = 'Прекинато';
$strAccessDenied = 'Пристапот не е допуштен';
$strAccessDeniedExplanation = 'phpMyAdmin се обиде да се поврзе на MySQL сервер, но серверот тоа не го допушти. Проверете го називот на host-от, корисничката сметка и лозинка во config.inc.php и уверите се дека одговараат на  податоците кои сте ги добили од администраторот на MySQL серверот.';
$strAction = 'Акција';
$strAddAutoIncrement = 'Додади AUTO_INCREMENT вредност';
$strAddConstraints = 'Додади ограничувања';
$strAddDeleteColumn = 'Додади/избриши колона';
$strAddDeleteRow = 'Додади/избриши поле за критериум';
$strAddFields = 'Додади %s полиња';
$strAddHeaderComment = 'Додади коментар во заглавие (користи \\n за нов ред)';
$strAddIntoComments = 'Додади во коментарите';
$strAddNewField = 'Додади ново поле';
$strAddPrivilegesOnDb = 'Додади привилегии на следната база';
$strAddPrivilegesOnTbl = 'Додади привилегии на следната табела';
$strAddSearchConditions = 'Додади услови за пребарување (делот "WHERE" од упитот):';
$strAddToIndex = 'Додади во клучот &nbsp;%s&nbsp;колона(и)';
$strAddUser = 'Додади нов корисник';
$strAddUserMessage = 'Додадовте нов корисник.';
$strAdministration = 'Администрација';
$strAffectedRows = 'Опфатени записи:';
$strAfter = 'после полето %s';
$strAfterInsertBack = 'Назад на претходната страница';
$strAfterInsertNewInsert = 'Додади уште еден нов запис';
$strAfterInsertNext = 'Ажурирање на следниот запис';
$strAfterInsertSame = 'Врати се на оваа страница';
$strAll = 'Се';
$strAllTableSameWidth = 'Приказ на сите табели со иста ширина?';
$strAlterOrderBy = 'Промени го редоследот во табелата';
$strAnIndex = 'Клучот е додаден %s';
$strAnalyzeTable = 'Анализа на табелата';
$strAnd = 'и';
$strAny = 'Било кој';
$strAnyHost = 'Било кој host';
$strAnyUser = 'Било кој корисник';
$strApproximateCount = 'Бројот на записи може да биде приближен. За подетални информации види FAQ 3.11';
$strArabic = 'Арапски';
$strArmenian = 'Ерменски';
$strAscending = 'Растечки редослед';
$strAtBeginningOfTable = 'на почетокот од табелата';
$strAtEndOfTable = 'на крајот од табелата';
$strAttr = 'Атрибути';
$strAutomaticLayout = 'Автоматски распоред';

$strBack = 'Назад';
$strBaltic = 'Балтички';
$strBeginCut = 'ПОЧЕТОК ПРЕСЕК';
$strBeginRaw = 'ПОЧЕТОК СУРОВО';
$strBinLogEventType = 'Вид на настан';
$strBinLogInfo = 'Информации';
$strBinLogName = 'Назив на дневникот';
$strBinLogOriginalPosition = 'Оргинална позиција';
$strBinLogPosition = 'Позиција';
$strBinLogServerId = 'ID на серверот';
$strBinary = 'Бинарен';
$strBinaryDoNotEdit = 'Бинарен - не менувај';
$strBinaryLog = 'Бинарен дневник';
$strBookmarkAllUsers = 'дади дозвола на секој корисник да пристапува на овој упит.';
$strBookmarkDeleted = 'Маркерот е избришан.';
$strBookmarkLabel = 'Назив';
$strBookmarkQuery = 'Запамтен SQL упит';
$strBookmarkThis = 'Запамти SQL упит';
$strBookmarkView = 'Види само';
$strBrowse = 'Преглед';
$strBrowseForeignValues = 'Прегледни ги надворешните вредности';
$strBufferPool = 'Бафер';
$strBufferPoolActivity = 'Активност на баферот';
$strBufferPoolUsage = 'Искористеност на баферот';
$strBufferReadMisses = 'Промашувања при читање';
$strBufferReadMissesInPercent = 'Промашувања при читање во %';
$strBufferWriteWaits = 'Чекања на упис';
$strBufferWriteWaitsInPercent = 'Чекања на упис во %';
$strBulgarian = 'Бугарски';
$strBusyPages = 'Зафатени страници';
$strBzError = 'phpMyAdmin не можеше да ја компресира содржината на базата поради неисправна BZ2 екстензија во оваа верзија на PHP. Препорачуваме да извршите подесување на <code>$cfg[\'BZipDump\']</code> директивата во вашата phpMyAdmin конфигурациона податотека на <code>FALSE</code>. Ако сакате да ги користите можностите на BZ2 компресијата, треба да преминете на понова верзија на PHP. Погледнете го PHP извештајот за грешки %s за повеќе детали.';
$strBzip = '"bzip"';

$strCalendar = 'Календар';
$strCannotLogin = 'Не можам да се пријавам на MySQL серверот';
$strCantLoad = 'не можам да ја вчитам екстензијата %s,<br />молам проверите ја PHP конфигурацијата';
$strCantLoadRecodeIconv = 'Не можам да ги вчитам iconv или recode екстензиите потребни за конверзија на кодните страници, подесете го PHP да дозволи користење на овие екстензии или оневозможете ја конверзијата на кодни страници во phpMyAdmin-у.';
$strCantRenameIdxToPrimary = 'Не можам да го променам клучот во PRIMARY (примарен) !';
$strCantUseRecodeIconv = 'Не можам да ги користам iconv или libiconv или recode_string функциите иако екстензијата пријавува дека е вчитана. Проверите ја вашата PHP конфигурација.';
$strCardinality = 'Кардиналност';
$strCaseInsensitive = 'Не разликува мали и големи букви';
$strCaseSensitive = 'Разликува мали и големи букви';
$strCentralEuropean = 'Централноевропски';
$strChange = 'Промени';
$strChangeCopyMode = 'Направи нов корисник со исти привилегии и ...';
$strChangeCopyModeCopy = '... сочувај го стариот.';
$strChangeCopyModeDeleteAndReload = ' ... избриши го стариот корисник од табелата на корисници а потоа повторно вчитај ги привилегиите.';
$strChangeCopyModeJustDelete = ' ... избриши ги старите од табелата на корисници.';
$strChangeCopyModeRevoke = ' ... прво одземи ги сите привилегии на корисниците а потоа избриши ги.';
$strChangeCopyUser = 'Промени ги информациите за најавувањето / Копирај го корисникот';
$strChangeDisplay = 'Избери полиња за прикажување';
$strChangePassword = 'Промена на лозинка';
$strCharset = 'Кодна страна';
$strCharsetOfFile = 'Кодна страна на податотеката:';
$strCharsets = 'Кодни страници';
$strCharsetsAndCollations = 'Кодни страници и подредување';
$strCheckAll = 'обележи ги сите';
$strCheckOverhead = 'табели кои имаат пречекорувања';
$strCheckPrivs = 'Провери привилегии';
$strCheckPrivsLong = 'Провери привилегии за базата на податоци &quot;%s&quot;.';
$strCheckTable = 'Проверка на табелата';
$strChoosePage = 'Изберете страница која менувате';
$strColComFeat = 'Прикажувам коментари на колоните';
$strCollation = 'Подредување';
$strColumnNames = 'Имиња на колони';
$strColumnPrivileges = 'Привилегии врзани за колоните';
$strCommand = 'Наредба';
$strComments = 'Коментари';
$strCommentsForTable = 'КОМЕНТАР НА ТАБЕЛАТА';
$strCompatibleHashing = 'MySQL&nbsp;4.0 компатибилно';
$strCompleteInserts = 'Комплетен INSERT (со имиња на полињата)';
$strCompression = 'Компресија';
$strConfigFileError = 'phpMyAdmin не можеше да ја прочита вашата конфигурациска податотека!<br />Ова може да се случи ако PHP најде грешка во процесирањето или не може да ја пронајде податотеката.<br />Повикајте ја конфигурациската податотека директно со користење на долнит линк и прочитајте ги поруките за грешка кои ги добивате. Во поголемиот број на случаи, најчесто недостасува наводник или точка запирка.<br />Ако добиете празна страница, се е во ред.';
$strConfigureTableCoord = 'Подесете ги координатите за табелата %s';
$strConnectionError = 'Не може да се поврзам: лоши подесувања.';
$strConnections = 'Конекции';
$strConstraintsForDumped = 'Ограничувања за извезените табели';
$strConstraintsForTable = 'Ограничувања за табелите';
$strCookiesRequired = 'вашиот веб прелистувач треба да допушти cookies';
$strCopyDatabaseOK = 'Базата на податоци %s е ископирана во %s';
$strCopyTable = 'Копирај ја табелата во (база<b>.</b>табела):';
$strCopyTableOK = 'Табелата %s е копирана во %s.';
$strCopyTableSameNames = 'Не можам да ја копирам табелата во самата себе!';
$strCouldNotKill = 'phpMyAdmin не можеше да го прекине процесот %s. Веројатно веќе е затворен.';
$strCreate = 'Креирај';
$strCreateIndex = 'Направи клуч на&nbsp;%s&nbsp;колони';
$strCreateIndexTopic = 'Креирај нов клуч';
$strCreateNewDatabase = 'Креирај нова база на податоци';
$strCreateNewTable = 'Креирај нова табела во базата на податоци %s';
$strCreatePage = 'Направи нова страница';
$strCreatePdfFeat = 'Креирање на PDF';
$strCreationDates = 'Датуми на креирање/ажурирање/проверка';
$strCriteria = 'Критериум';
$strCroatian = 'Хрватски';
$strCyrillic = 'Кириличен';
$strCzech = 'Чешки';
$strCzechSlovak = 'Чехословачки';

$strDBComment = 'Коментар на базата на податоци:';
$strDBCopy = 'Копирај ја базата на податоци во';
$strDBRename = 'Преименувај ја базата на податоци во';
$strDanish = 'Дански';
$strData = 'Податоци';
$strDataDict = 'Речник на податоци';
$strDataOnly = 'Само податоци';
$strDataPages = 'Страници со податоци';
$strDatabase = 'База на податоци';
$strDatabaseEmpty = 'Името на базата на податоци не е зададено!';
$strDatabaseExportOptions = 'Опции за извоз на бази на податоци';
$strDatabaseHasBeenDropped = 'Базата на податоци %s не е прифатена';
$strDatabases = 'База на податоци';
$strDatabasesDropped = '%s базата на податоци успешно е избришана.';
$strDatabasesStats = 'Статистика на базата на податоци';
$strDatabasesStatsDisable = 'Исклучи статистики';
$strDatabasesStatsEnable = 'Вклучи статистики';
$strDatabasesStatsHeavyTraffic = 'Напомена: вклучувањето на статистиките може да доведе до зголемување на сообраќајот помеѓу веб серверот и MySQL серверот.';
$strDbPrivileges = 'Привилегии во врска со базата на податоци';
$strDbSpecific = 'Специфично за базата на податоци';
$strDefault = 'Default';
$strDefaultEngine = '%s е основно складиште на овој MySQL сервер.';
$strDefaultValueHelp = 'За default вредност, внесете само една вредност, без коси црти или наводници во следниов облик: а';
$strDefragment = 'Дефрагментирај ја табелата';
$strDelOld = 'Актуелната страница има референци кон табели кои не постојат. Сакате ли да ги избиршете тие референци?';
$strDelayedInserts = 'Користи одложен внес';
$strDelete = 'избриши';
$strDeleteAndFlush = 'Избриши ги корисниците и повторно вчитај ги привилегиите.';
$strDeleteAndFlushDescr = 'Ова е најчист начин, но повторното вчитување на привилегите може да потрае.';
$strDeleted = 'Записот е избришан';
$strDeletedRows = 'Избришани записи:';
$strDeleting = 'Бришам %s';
$strDescending = 'Опаѓачки редослед';
$strDescription = 'Опис';
$strDictionary = 'речник';
$strDirtyPages = 'Валкани страници';
$strDisableForeignChecks = 'Исклучи проверка на надворешни клучеви';
$strDisabled = 'Оневозможено';
$strDisplayFeat = 'Прикажи својства';
$strDisplayOrder = 'Редослед на приказ:';
$strDisplayPDF = 'Прикажи PDF шема';
$strDoAQuery = 'Направи "упит по пример" (џокер знак: "%")';
$strDoYouReally = 'Дали навистина сакате да ';
$strDocu = 'Документација';
$strDrop = 'Бриши';
$strDropDatabaseStrongWarning = 'Со ова ја БРИШЕТЕ комплетната база на податоци!';
$strDropUsersDb = 'Избриши ги базите на податоци кои се именувани исто како и корисниците.';
$strDumpSaved = 'Содржината на базата на податоци е сочувана во податотеката %s.';
$strDumpXRows = 'Прикажи %s записи почнувајќи од запис %s.';
$strDumpingData = 'Приказ на податоци од табелата';
$strDynamic = 'динамички';

$strEdit = 'Промени';
$strEditPDFPages = 'Уредување на PDF страница';
$strEditPrivileges = 'Промена на привилегии';
$strEffective = 'Ефективни';
$strEmpty = 'Испразни';
$strEmptyResultSet = 'MySQL врати празен резултат (нула записи).';
$strEnabled = 'Овозможено';
$strEncloseInTransaction = 'Изврши извоз во трансакција';
$strEnd = 'Крај';
$strEndCut = 'КРАЈ ПРЕСЕК';
$strEndRaw = 'КРАЈ СУРОВО';
$strEngineAvailable = '%s е достапен на овој MySQL сервер.';
$strEngineDisabled = '%s е оневозможен на овој MySQL сервер.';
$strEngineUnsupported = 'Овој MySQL сервер не подржува %s вид на складиште.';
$strEngines = 'Складишта';
$strEnglish = 'Англиски';
$strEnglishPrivileges = ' Напомена: MySQL имињата на привилегите мора да бидат со латинични букви ';
$strError = 'Грешка';
$strEscapeWildcards = 'Пред џокер знаците _ и % треба да стои знакот \ ако ги користите самостојно';
$strEstonian = 'Естонски';
$strExcelEdition = 'Excel издание';
$strExecuteBookmarked = 'Изврши запамтен упит';
$strExplain = 'Објасни SQL';
$strExport = 'Извоз';
$strExtendedInserts = 'Проширен INSERT';
$strExtra = 'Дополнително';

$strFailedAttempts = 'Неуспешни обиди';
$strField = 'Поле';
$strFieldHasBeenDropped = 'Полето %s е избиршано';
$strFields = 'Полиња';
$strFieldsEnclosedBy = 'Полињата се раздвоени со';
$strFieldsEscapedBy = 'Escape карактер &nbsp; &nbsp; &nbsp;';
$strFieldsTerminatedBy = 'Полињата се ограничени со';
$strFileAlreadyExists = 'Податотека %s постои на серверот, променете го името на податотеката или изберете опција за пишување врз неа.';
$strFileCouldNotBeRead = 'Податотеката не е можно да се прочита';
$strFileNameTemplate = 'Шаблон на име на податотека';
$strFileNameTemplateRemember = 'запамти го шаблонот';
$strFixed = 'средено';
$strFlushPrivilegesNote = 'Напомена: phpMyAdmin ги зема привилегиите на корисникот директно од MySQL табелата на привилегии. Содржината на оваа табела табела може да се разликува од привилегиите кои серверот ги користи ако се вршени мануелни измени. Во тој случај %sповторно вчитајте ги привилегиите%s пред да продолжите со работа.';
$strFlushTable = 'Освежување на табелата ("FLUSH")';
$strFormEmpty = 'Недостасува вредност во образецот!';
$strFormat = 'Формат';
$strFreePages = 'Слободни страници';
$strFullText = 'Полн текст';
$strFunction = 'Функција';

$strGenBy = 'Генерирал';
$strGenTime = 'Време на креирање';
$strGeneralRelationFeat = 'Општи особини на релациите';
$strGeorgian = 'Грузиски';
$strGerman = 'Германски';
$strGlobal = 'глобално';
$strGlobalPrivileges = 'Глобални привилегии';
$strGlobalValue = 'Глобална вредност';
$strGo = 'OK';
$strGrantOption = 'Овозможи';
$strGreek = 'Грчки';
$strGzip = '"gzip"';

$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHasBeenAltered = 'е променет(а).';
$strHasBeenCreated = 'е креиран(а).';
$strHaveToShow = 'Морате да изберете барем една колона за приказ';
$strHebrew = 'Хебрејски';
$strHome = 'Почетна страница';
$strHomepageOfficial = 'официјален веб сајт на phpMyAdmin';
$strHost = 'Host';
$strHostEmpty = 'Името на host-от е празно!';
$strHungarian = 'Унгарски';

$strIcelandic = 'Исландски';
$strId = 'ID';
$strIdxFulltext = 'Текст клуч';
$strIgnore = 'Игнорирај';
$strIgnoreInserts = 'Игнорирај дупликати при внесување';
$strImportFiles = 'Увоз на податотека';
$strInUse = 'се користи';
$strIndex = 'Клуч';
$strIndexHasBeenDropped = 'Клучот %s е избиршан';
$strIndexName = 'Име на клуч :';
$strIndexType = 'Тип на клуч :';
$strIndexWarningTable = 'Проблем при индексирање на табелата `%s`';
$strIndexes = 'Клучеви';
$strInnoDBAutoextendIncrement = 'Чекор на автоматско проширување';
$strInnoDBAutoextendIncrementDesc = ' Големина на чекорот на проширување на големината на табелите кои автоматски се прошируваат кога ќе се наполнат.';
$strInnoDBBufferPoolSize = 'Големина на баферот';
$strInnoDBBufferPoolSizeDesc = 'Големина на меморискиот бафер кој го користи InnoDB за кеширање на податоци и за индексите на своите табели.';
$strInnoDBDataFilePath = 'Податотеки со податоци';
$strInnoDBDataHomeDir = 'Основен директориум на податоците';
$strInnoDBDataHomeDirDesc = 'Заеднички дел на патеката до директроиумот за сите InnoDB датотеки со податоци.';
$strInnoDBPages = 'страница';
$strInnodbStat = 'InnoDB статус';
$strInsecureMySQL = 'Вашата конфигурациска податотека содржи подесувања (root без лозинка) кои одговараат на стандардниот MySQL привилегиран налог. Вашиот MySQL сервер работи со овие подесувања, отворен е за упди, и навистина треба да го поправите овој сигурносен ризик.';
$strInsert = 'Нов запис';
$strInsertAsNewRow = 'Внеси како нов запис';
$strInsertedRowId = 'ID на вметнати записи:';
$strInsertedRows = 'Внесено записи:';
$strInternalNotNecessary = '* Внатрешната релација не е неопходна кога постои и во InnoDB.';
$strInternalRelations = 'Внатрешни релации';

$strJapanese = 'Јапонски';
$strJumpToDB = 'Премин на базата &quot;%s&quot;.';
$strJustDelete = 'Само избриши ги корисниците од табелата на привилегии.';
$strJustDeleteDescr = '&quot;Избришаните&quot; корисници и понатаму ќе имаат пристап до серверот се додека привилегиите не се вчитаат повторно.';

$strKeepPass = 'Немој да ја менуваш лозинката';
$strKeyname = 'Име на клуч';
$strKill = 'Прекини';
$strKorean = 'Корејски';

$strLaTeX = 'LaTeX';
$strLandscape = 'Легнато';
$strLatchedPages = 'Заглавени страници';
$strLatexCaption = 'Коментар на табела';
$strLatexContent = 'Содржина на табелата __TABLE__';
$strLatexContinued = '(продолжува)';
$strLatexContinuedCaption = 'Продолжен коментар на табелите';
$strLatexIncludeCaption = 'Вклучи и коментар на табелата';
$strLatexLabel = 'Ознака на клучот';
$strLatexStructure = 'Структура на табелата __TABLE__';
$strLatvian = 'Летонски';
$strLengthSet = 'Должина/Вредност*';
$strLimitNumRows = 'Број на записи на страница';
$strLinesTerminatedBy = 'Линиите се завршуваат со';
$strLinkNotFound = 'Врската не е пронајдена';
$strLinksTo = 'Врски кон';
$strLithuanian = 'Литвански';
$strLocalhost = 'Локален';
$strLocationTextfile = 'Локација на текстуалната податотека';
$strLogPassword = 'Лозинка:';
$strLogServer = 'Сервер';
$strLogUsername = 'Корисничко име:';
$strLogin = 'Најави се';
$strLoginInformation = 'Податоци за најавувањето';
$strLogout = 'Одјавување';
$strLongOperation = 'Оваа операција може да потрае. Да ли да продолжиме?';

$strMIMETypesForTable = 'MIME ТИПОВИ ЗА ТАБЕЛА';
$strMIME_MIMEtype = 'MIME-типови';
$strMIME_available_mime = 'Достапни MIME-типови';
$strMIME_available_transform = 'Достапни трансформации';
$strMIME_description = 'Опис';
$strMIME_nodescription = 'Нема опис за оваа трансформација.<br />Ве молиме прашајте го авторот што ја направил %s.';
$strMIME_transformation = 'Транформации на веб прелистувачот';
$strMIME_transformation_note = 'За листа на достапни опции на транформациите и нивните MIME-тип трансформации, кликнете на %sопис на трансформацијата%s';
$strMIME_transformation_options = 'Опции на трансформацијата';
$strMIME_transformation_options_note = 'Ве молиме внесете вредности за опциите на трансформацијата во следниов формат: \'a\',\'b\',\'c\'...<br /> Ако треба да внесете обратна коса црта ("\\") или апостроф ("\'") во тие вредности, ставете обратна коса црта пред нив (пример \'\\\\xyz\' или \'a\\\'b\').';
$strMIME_without = 'MIME-типовите прикажани во курзив немаат одвоене функции на трансформација.';
$strMaximumSize = 'Максимална големина: %s%s';
$strMbExtensionMissing = 'mbstring ПХП екстензијата не е пронајдена, а изгледа дека вие користите мултибајт каратер сет. Без mbstring екстензиите phpMyAdmin не може исправно да ги раздвојува стринговите и тоа може да доведе до неочекувани резултати.';
$strMbOverloadWarning = 'Имате вклучена mbstring.func_overload опција во вашите PHP подесувања. Оваа опција не е компатибилна со phpMyAdmin и може да доведе до грешки во некои податоци!';
$strModifications = 'Измените се сочувани';
$strModify = 'Промени';
$strModifyIndexTopic = 'Промени го клучот';
$strMoveTable = 'Премести ја табелата во (база<b>.</b>табела):';
$strMoveTableOK = 'Табелата %s е преместена во %s.';
$strMoveTableSameNames = 'Не може да ја преместам табелата во самата себе!';
$strMultilingual = 'мултијазичен';
$strMyISAMDataPointerSize = 'Големина на покажувачите на податоци';
$strMyISAMDataPointerSizeDesc = 'Default големина на покажувачите во бајти, се користи при CREATE TABLE за MyISAM табелите кога не е зададена опцијата MAX_ROWS';
$strMyISAMMaxExtraSortFileSize = 'Максимална голема на привремени податотеки при креирање на индекси';
$strMyISAMMaxExtraSortFileSizeDesc = 'Ако привремената податотека која се користи за брзо креирање на MyISAM индекси биде поголема отколку при користење на кешот за овде зададената вредност, користи го методот на кеширања на клучевите';
$strMyISAMMaxSortFileSize = 'Максимална големина на привремените податотеки за подредување';
$strMyISAMMaxSortFileSizeDesc = 'Максимална големина на привремените податотеки кои MySQL смее да ги користи при повторно креирање на MyISAM индекси (во тек REPAIR TABLE, ALTER TABLE, или LOAD DATA INFILE операции).';
$strMyISAMRecoverOptions = 'Режим на автоматско опоравување';
$strMyISAMRecoverOptionsDesc = 'Режим на автоматско опоравување на оштетени MyISAM табели, подесен при стартовање на серверот со опцијата --myisam-recover.';
$strMyISAMRepairThreads = 'Нишки на поправка';
$strMyISAMRepairThreadsDesc = 'Ако вредноста е поголема од 1, индексите на MyISAM табелата паралелно се креираат (секој индекс во сопствена нишка) за време на процесот на поправка со подредување.';
$strMyISAMSortBufferSize = 'Големина на меѓупросторот за подредување';
$strMyISAMSortBufferSizeDesc = 'Меѓупросторот кој се алоцира при подредување на MyISAM индексите за време на операцијата REPAIR TABLE или при креирање на индекси со CREATE INDEX или ALTER TABLE.';
$strMySQLCharset = 'MySQL множество на знаци';
$strMySQLConnectionCollation = 'Колација за MySQL врска';
$strMySQLSaid = 'MySQL порака: ';
$strMySQLShowProcess = 'Прикажи листа на процеси';
$strMySQLShowStatus = 'Прикажи MySQL информации за текот на работата';
$strMySQLShowVars = 'Прикажи системски променливи на MySQL';

$strName = 'Име';
$strNext = 'Следен';
$strNo = 'Не';
$strNoActivity = 'Немаше никаква активност %s или повеќе секунди, ве молиме најавете се повторно';
$strNoDatabases = 'Базата на податоци не постои';
$strNoDatabasesSelected = 'Не е избрана ни една база на податоци.';
$strNoDescription = 'нема опис';
$strNoDetailsForEngine = 'Нема детални информации за статусот на овој вид на складиште.';
$strNoDropDatabases = '"DROP DATABASE" командата е оневозможена.';
$strNoExplain = 'Прескокни ги објаснувањата на SQL-от';
$strNoFrames = 'phpMyAdmin преферира веб прелистувачи кои подржуваат рамки.';
$strNoIndex = 'Клучот не е дефиниран!';
$strNoIndexPartsDefined = 'Делови од клучот не се дефинирани!';
$strNoModification = 'Нема измени';
$strNoOptions = 'Не постојат опции за овој формат';
$strNoPassword = 'Нема лозинка';
$strNoPermission = 'На веб серверот не му е допуштено да ја сочува  податотеката %s.';
$strNoPhp = 'без PHP код';
$strNoPrivileges = 'Нема привилегии';
$strNoRights = 'Немате право на пристап овде!';
$strNoRowsSelected = 'Нема селектирани записи';
$strNoSpace = 'Нема доволно простор за снимање на податотеката %s.';
$strNoTablesFound = 'Табелите не се пронајдени во базата на податоци.';
$strNoThemeSupport = 'Нема подршка за теми, ве молиме проверете ја конфигурацијата и/или темите во директориумот %s.';
$strNoUsersFound = 'Корисникот не е пронајден.';
$strNoValidateSQL = 'Прескокни ја проверката на SQL';
$strNone = 'нема';
$strNotNumber = 'Ова не е број!';
$strNotOK = 'не е како што треба';
$strNotSet = '<b>%s</b> табелата не е пронајдена или не е поставена во %s';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s погодоци во табелата <i>%s</i>';
$strNumSearchResultsTotal = '<b>вкупно:</b> <i>%s</i> погодоци';
$strNumTables = 'Табели';

$strOK = 'ОК';
$strOperations = 'Операции';
$strOperator = 'Оператор';
$strOptimizeTable = 'Оптимизација на табелата';
$strOr = 'или';
$strOverhead = 'Пречекорување';
$strOverwriteExisting = 'Препиши ги постоечките податотеки';

$strPHP40203 = 'Вие користите PHP 4.2.3, кој има сериозен баг со повеќебајтните низи (mbstring). Погледнете го извештајот за грешка бр. 19404. Ова верзија на PHP не се препорачува за користење со phpMyAdmin.';
$strPHPVersion = 'PHP верзија';
$strPageNumber = 'Број на страници:';
$strPagesToBeFlushed = 'Страници кои треба да бидат ускладени';
$strPaperSize = 'Димензија на хартијата';
$strPartialText = 'Дел на текстот';
$strPassword = 'Лозинка';
$strPasswordChanged = 'Лозинката за %s успешно е променета.';
$strPasswordEmpty = 'Лозинка е празна!';
$strPasswordHashing = 'Хеширање на лозинката';
$strPasswordNotSame = 'Лозинките не се идентични!';
$strPdfDbSchema = 'Шема на базата "%s" - Страница %s';
$strPdfInvalidTblName = 'Табелата "%s" не постои!';
$strPdfNoTables = 'Нема табела';
$strPerHour = 'на час';
$strPerMinute = 'во минута';
$strPerSecond = 'во секунда';
$strPersian = 'Персиски';
$strPhoneBook = 'телефонски именик';
$strPhp = 'Направи PHP код';
$strPmaDocumentation = 'phpMyAdmin документација';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> директивата МОРА да биде подесена во конфигурациската податотека!';
$strPolish = 'Полски';
$strPortrait = 'Вертикално';
$strPos1 = 'Почеток';
$strPrevious = 'Претходна';
$strPrimary = 'Примарен';
$strPrimaryKeyHasBeenDropped = 'Примарниот клуч е избришан';
$strPrimaryKeyName = 'Името на примарниот клуч мора да биде... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>може</b> да биде име <b>само</b> на примарниот клуч!)';
$strPrint = 'Печати';
$strPrintView = 'Преглед за печатење';
$strPrintViewFull = 'Преглед за печатење (целосен текст)';
$strPrivDescAllPrivileges = 'Ги вклучува сите привилегии освен GRANT.';
$strPrivDescAlter = 'Дозволува промена на структурата на постоечките табели.';
$strPrivDescCreateDb = 'Дозволува креирање на нови бази на податоци и табели.';
$strPrivDescCreateTbl = 'Дозволува креирање на нови табела.';
$strPrivDescCreateTmpTable = 'Дозволува креирање на привремени табели...';
$strPrivDescDelete = 'Дозволува бришење на податоци.';
$strPrivDescDropDb = 'Дозволува бришење на бази на податоци и табели.';
$strPrivDescDropTbl = 'Дозволува бришење на табели.';
$strPrivDescExecute = 'Дозволува стартување на снимени процедури. Нема ефект во новата верзија на MySQL.';
$strPrivDescFile = 'Дозволува увоз на податоци и нивен извоз во податотеки.';
$strPrivDescGrant = 'Дозволува додавање на корисници и привилегии без повтроно вчитавање на табелата на привилегии.';
$strPrivDescIndex = 'Дозволува креирање и бришење на клучева.';
$strPrivDescInsert = 'Дозволува вметнување и замена на података.';
$strPrivDescLockTables = 'Дозволува заклучување на табели на тековните процеси.';
$strPrivDescMaxConnections = 'Го ограничува бројот на нови конекции кои корисникот може да ги отвори за еден час.';
$strPrivDescMaxQuestions = 'Го ограничува бројот на упити кои корисникот може да ги постави на серверот за еден час.';
$strPrivDescMaxUpdates = 'Го ограничува бројот на команди кои ги менуваат табелите или базите на податоци кои корисникот може да ги изврши за еден час.';
$strPrivDescProcess3 = 'Дозволува прекинување на процесите на другите корисници.';
$strPrivDescProcess4 = 'Дозволува преглед на комплетните упити во листата на процеси.';
$strPrivDescReferences = 'Нема ефект во оваа верзији на MySQL.';
$strPrivDescReload = 'Дозволува повтоно вчитување на подесувањата на серверот и празнење на кешот на серверот.';
$strPrivDescReplClient = 'Дава права на кориснику да праша каде се главните/помошни сервери.';
$strPrivDescReplSlave = 'Потребно заради помошните сервери за репликација.';
$strPrivDescSelect = 'Дозволува читање на податоци.';
$strPrivDescShowDb = 'Дава пристап на комплетната листа на базите на податоци.';
$strPrivDescShutdown = 'Дозволува гасење на серверот.';
$strPrivDescSuper = ' Дозволува поврзување иако е постигнат макслималниот број на врски; Неопходно за повеќето административни опции како што е подесување на глобални променливи или прекин на процеси наостанатите корисници.';
$strPrivDescUpdate = 'Дозволува измена на податоци.';
$strPrivDescUsage = 'Нема привилегии.';
$strPrivileges = 'Привилегии';
$strPrivilegesReloaded = 'Привилегиите се успешно вчитани.';
$strProcesslist = 'Листа на процеси';
$strPutColNames = 'Стави ги имињата на полињата во првата редица';

$strQBE = 'Упит по пример';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Прозорец за упити';
$strQueryOnDb = 'SQL упит на базата на податоци <b>%s</b>:';
$strQuerySQLHistory = 'SQL историја';
$strQueryStatistics = '<b>Статистики на упити</b>: %s упити се поставени на серверот од времето на неговото стартување.';
$strQueryTime = 'време на извршување на упитот %01.4f секунди';
$strQueryType = 'Вид на упит';
$strQueryWindowLock = 'Не го препишувај овој упит надвор од овој прозорец';

$strReType = 'Повтори внес';
$strReadRequests = 'Барања за читање';
$strReceived = 'Примено';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Провери го референцијалниот интегритет:';
$strRefresh = 'Освежи';
$strRelationNotWorking = 'Дополнителните можности за работа со поврзаните табели се исклучени. За да дознаете зошто, кликнете %sовде%s.';
$strRelationView = 'Релационен поглед';
$strRelationalSchema = 'Релациона шема';
$strRelations = 'Релации';
$strRelationsForTable = 'РЕЛАЦИИ НА ТАБЕЛИТЕ';
$strReloadingThePrivileges = 'Повторно ги вчитувам привилегиите';
$strRemoveSelectedUsers = 'Избриши ги селектираните корисници';
$strRenameDatabaseOK = 'Базата на податоци %s е преименувана во %s';
$strRenameTable = 'Промени го името на табелата во ';
$strRenameTableOK = 'Табелата %s е преименувана во %s';
$strRepairTable = 'Поправка на табелата';
$strReplaceNULLBy = 'Замени NULL со';
$strReplaceTable = 'Замени ги податоците во табелата со подаците од податотеката';
$strReset = 'Поништи';
$strResourceLimits = 'Ограничување на ресурси';
$strRevoke = 'Забрани';
$strRevokeAndDelete = 'Одземи ги сите привилегии на активните корисници а потоа избриши ги.';
$strRevokeAndDeleteDescr = 'Корисниците и понатаму ќе имаат USAGE привилегии се додека не се вчитаат повторно привилегиите.';
$strRevokeMessage = 'Ги забранивте привилегиите за %s';
$strRomanian = 'Романски';
$strRowLength = 'Должина на запис';
$strRowSize = 'Големина на запис';
$strRows = 'Записи';
$strRowsFrom = ' записи почнувајќи од записот';
$strRowsModeFlippedHorizontal = 'хоризонтален (ротирани заглавија)';
$strRowsModeHorizontal = 'хоризонтален';
$strRowsModeOptions = 'во %s мод и повторувај заглавие после %s записа';
$strRowsModeVertical = 'вертикален';
$strRowsStatistic = 'Статистики за записите';
$strRunQuery = 'Изврши SQL';
$strRunSQLQuery = 'Изврши SQL упит(и) на базата %s';
$strRunning = 'на серверот %s';
$strRussian = 'Руски';

$strSQL = 'SQL';
$strSQLExportType = 'Тип на извоз';
$strSQLParserBugMessage = 'Постои можност дека сте отркиле грешка во SQL парсерот. Ве молиме внимателно проверете го вашиот упит, проверете дали наводниците се правилно поставени или дали можеби недостасуваат. Други можни причини се: бинарна податотека надвор од областа за обичен текст. Можете да го пробате упит командната линија на MySQL. Долната порака за грешка на MySQL серверот, може да ви помогне да го откриете проблемот. Ако и понатаму имате проблеми или ако парсерот не успеава иако од командата линија се е во ред, испратете го својот SQL упит со извештајот за грешка и делот од кодот во долната РЕЗ секција до нас за да можеме да провериме за што се работи.';
$strSQLParserUserError = 'Изгледа дека има грешка во вашиот SQL упит. Еве ја пораката за грешката од MySQL серверот, која може да ви помогне во откривањето на проблемот';
$strSQLQuery = 'SQL упит';
$strSQLResult = 'SQL резултат';
$strSQPBugInvalidIdentifer = 'Неисправен идентификатор';
$strSQPBugUnclosedQuote = 'Наводникот не е затворен';
$strSQPBugUnknownPunctuation = 'Непознат стринг за интерпункција';
$strSave = 'Сочувај';
$strSaveOnServer = 'Сочувај на серверот во директориумот %s';
$strScaleFactorSmall = 'Факторот на намалување е премал и шемата не може да ја собере на една страница';
$strSearch = 'Пребарување';
$strSearchFormTitle = 'Пребарување низ базата на податоци';
$strSearchInTables = 'во табела(и):';
$strSearchNeedle = 'Зборови или вредности кои се бараат (џокер знак "%"):';
$strSearchOption1 = 'барем еден од зборовите';
$strSearchOption2 = 'сите зборови';
$strSearchOption3 = 'точен израз';
$strSearchOption4 = 'како регуларен израз';
$strSearchResultsFor = 'Резултати од пребарувањето за "<i>%s</i>" %s:';
$strSearchType = 'Барај:';
$strSecretRequired = 'Конфигурациската податотека бара лозинка (blowfish_secret).';
$strSelectADb = 'Изберете база на податоци';
$strSelectAll = 'избери се';
$strSelectBinaryLog = 'Изберете бинарен дневник за преглед';
$strSelectFields = 'Избери полиња (најмалку едно)';
$strSelectNumRows = 'во упитот';
$strSelectTables = 'Избери табели';
$strSend = 'Сочувај како податотека';
$strSent = 'Пратено';
$strServer = 'Сервер';
$strServerChoice = 'Избор на сервер';
$strServerNotResponding = 'Серверот не одговара';
$strServerStatus = 'Информации за работата';
$strServerStatusUptime = 'Овој MySQL сервер работи %s. Стартуван е на %s.';
$strServerTabVariables = 'Променливи';
$strServerTrafficNotes = '<b>Сообраќај на серверот</b>: Во табелите прикажан е мрежниот сообраќај на овој MySQL сервер од моментот на неговото стартување.';
$strServerVars = 'Серверски променливи и подесувања';
$strServerVersion = 'Верзија на серверот';
$strSessionValue = 'Вредност на сесијата';
$strSetEnumVal = 'Ако типот на полето е "enum" или "set", внесувајте вредност во формат: \'a\',\'b\',\'c\'...<br />Ако ви треба обратна коса црта ("\\") или апостроф ("\'") користите ги во escap форма (пример \'\\\\xyz\' или \'a\\\'b\').';
$strShow = 'Прикажи';
$strShowAll = 'прикажи ги сите';
$strShowColor = 'Прикажи боја';
$strShowDatadictAs = 'Формат на речникот на податоци';
$strShowFullQueries = 'Прикажи комплетни упити';
$strShowGrid = 'Прикажи мрежа';
$strShowPHPInfo = 'Прикажи информации за PHP';
$strShowTableDimension = 'Прикажи ги димензиите на табелите';
$strShowTables = 'Прикажи табели';
$strShowThisQuery = 'Прикажи го повторно овој упит';
$strShowingRecords = 'Приказ на записи од ';
$strSimplifiedChinese = 'Поедноставен кинески';
$strSingly = '(по едно поле)';
$strSize = 'Големина';
$strSlovak = 'Словачки';
$strSlovenian = 'Словенечки';
$strSocketProblem = '(или приклучокот со локалниот MySQL сервер не е исправно подесен)';
$strSort = 'Подредуваање';
$strSortByKey = 'Подредување по клуч';
$strSpaceUsage = 'Големина';
$strSpanish = 'Шпански';
$strSplitWordsWithSpace = 'Зборовите се одвојуваат со празно место (" ").';
$strStatCheckTime = 'Последна проверка';
$strStatCreateTime = 'Направено';
$strStatUpdateTime = 'Последна измена';
$strStatement = 'Име';
$strStatus = 'Статус';
$strStorageEngine = 'Вид на складиште';
$strStorageEngines = 'Видови на складишта';
$strStrucCSV = 'CSV формат';
$strStrucData = 'Структура и податоци';
$strStrucExcelCSV = 'CSV за MS Excel';
$strStrucNativeExcel = 'Изворни MS Excel податоци';
$strStrucOnly = 'Само структура';
$strStructPropose = 'Предложи структура на табелата';
$strStructure = 'Структура';
$strSubmit = 'Испрати';
$strSuccess = 'Вашиот SQL упит успешно е извршен';
$strSum = 'Вкупно';
$strSwedish = 'Шведски';
$strSwitchToDatabase = 'Префрли се на копираната база на податоци';
$strSwitchToTable = 'Премини на копираната табела';

$strTable = 'Табела';
$strTableComments = 'Коментар на табелата';
$strTableEmpty = 'Името на табелата е празно!';
$strTableHasBeenDropped = 'Табелата %s е избришана';
$strTableHasBeenEmptied = 'Табелата %s е испразнета';
$strTableHasBeenFlushed = 'Табелата %s е освежена';
$strTableMaintenance = 'Можете да извршите:';
$strTableOfContents = 'Содржина';
$strTableOptions = 'Опции на табелата';
$strTableStructure = 'Структура на табелата';
$strTables = '%s табела';
$strTakeIt = 'превземи';
$strTblPrivileges = 'Привилегии поврзани со табелата';
$strTextAreaLength = 'Поради големина на полето<br />можеби нема да може да ја менувате неговата содржина';
$strThai = 'Тајски';
$strTheme = 'Тема / стил';
$strThisHost = 'Овој host';
$strThreadSuccessfullyKilled = 'Процесот %s е успешно прекинат.';
$strTime = 'Време';
$strToggleScratchboard = 'Вклучи/исклучи работна табела';
$strTotal = 'вкупно';
$strTotalUC = 'Вкупно';
$strTraditionalChinese = 'Традиционален кинески';
$strTraditionalSpanish = 'Традиционален шпански';
$strTraffic = 'Сообраќај';
$strTransformation_application_octetstream__download = 'Прикажува врска за превземање на бинарни податоци за полето. Првата опција е име на бинарната податотека. Другата опција е можно име на пола од табелата кое го содржи името на податотеката. Ако ја зададете другата опција, првата мора да биде поставена на празен стринг';
$strTransformation_image_jpeg__inline = 'Прикажува намалена слика на која е можно да се кликне; опции: ширина, висина во пиксели (зачуван е оргиналнит однос)';
$strTransformation_image_jpeg__link = 'Прикажува врска кон оваа слика (пример директно превземање од BLOB).';
$strTransformation_image_png__inline = 'Прикажи JPEG слики од страна';
$strTransformation_text_plain__dateformat = 'Го зема TIME, TIMESTAMP или DATETIME полето и го форматира користејќи го локалниот формат за приказ на датум. Првата опција е офсет (во часови) кои се додаваат на временската ознака (default: 0). Другата опција е различен формат на датумот според параметрите који се достапни за PHP функцијата strftime().';
$strTransformation_text_plain__external = 'САМО LINUX: Стартува надворешна апликација и ги пополнува податоците во полињата преку стандарден влез. Враќа стандарден излез на апликацијта. Се подразбира Tidy, за поубав приказ на HTML кодот. Поради сигурносни причини, мора мануелно да се измени податотеката libraries/transformations/text_plain__external.inc.php и да се додадат алатки кои по желба сакате да ги користите. Првата опција е бројот на програмот кој сакате да го користите, а другата опција се параметрите на програмот. Ако третиот параметар се подеси на 1, излезот ќе биде конвертиран користејќи ја функцијата htmlspecialchars() (default 1). Ако четвртиot параметар се постави на 1, NOWRAP ќе биде додадено на полето со содржина така да излезот ќе биде прикажан без измени. (default 1).';
$strTransformation_text_plain__formatted = 'Го чува оригиналниот формат на полето. Escaping не се врши.';
$strTransformation_text_plain__imagelink = 'Прикажува слика и линк, полето го содржи називот на податотеката; првата опција е префикс како "http://domain.com/", другата опција е ширина во пиксели, а третата е висина.';
$strTransformation_text_plain__link = 'Прикажува линк, полето го содржи називот на податотеката; првата опција е префикс како "http://domain.com/", другата опција е наслов за линкот.';
$strTransformation_text_plain__substr = 'Покажува дел од стрингот. Првата опција е број на знаци кои треба да се прескокнат од почетокот на стрингот (default 0). Другата опција е број на вратени знаци (default: до крај на стрингот). Третата опција е стринг кој се додава кага ќе дојде до отсекување (default: ...) .';
$strTruncateQueries = 'Прикажи скратени упити';
$strTurkish = 'Турски';
$strType = 'Тип';

$strUkrainian = 'Украински';
$strUncheckAll = 'ниедно';
$strUnicode = 'Уникод';
$strUnique = 'Единствен';
$strUnknown = 'непознат';
$strUnselectAll = 'ништо';
$strUpdComTab = 'Ве молиме погледнете во документацијата за тоа како се ажурира табелата Column_comments';
$strUpdatePrivMessage = 'Ги ажуриравте привилегиите за %s.';
$strUpdateProfileMessage = 'Профилот е променет';
$strUpdateQuery = 'Ажурирај';
$strUpgrade = 'Би требало да го надоградите вашиот %s сервер на верзија %s или понова.';
$strUsage = 'Големина';
$strUseBackquotes = 'Името на полето стави го во \'';
$strUseHostTable = 'Користи ја табелата на host-от';
$strUseTabKey = 'Користете го TAB тастерот за движење од поле во поле, или CTRL+стрелка за слободно движење';
$strUseTables = 'Користи табели';
$strUseTextField = 'Користи текст поле';
$strUseThisValue = 'Користи ја оваа вредност';
$strUser = 'Корисник';
$strUserAlreadyExists = 'Корисник %s веќе постои!';
$strUserEmpty = 'Не е внесен назив на корисник!';
$strUserName = 'Назив на корисник';
$strUserNotFound = 'Изабраниот корисник не е пронајден во табелата на привилегии.';
$strUserOverview = 'Преглед на корисници';
$strUsersDeleted = 'Изабраните корисници успешно се избришани.';
$strUsersHavingAccessToDb = 'Корисници кои имаат пристап &quot;%s&quot;';

$strValidateSQL = 'Провери SQL';
$strValidatorError = 'SQL валидаторот не можеше да биде стартуван. Проверете да ли се инсталирани неопходните PHP екстензии опишане во  %sдокументацијата%s.';
$strValue = 'Вредност';
$strVar = 'Променлива';
$strVersionInformation = 'Информации за верзијата';
$strView = 'Поглед';
$strViewDump = 'Прикажи содржина (шема) на табелите';
$strViewDumpDB = 'Прикажи содржина (шема) на базата';
$strViewDumpDatabases = 'Прикажи содржина (шема) на базите';
$strViewHasBeenDropped = 'Прегледот %s е избришан';

$strWebServerUploadDirectory = 'директориум за праќање на веб серверот ';
$strWebServerUploadDirectoryError = 'Директориумот кој го избравте за праќање не е достапен';
$strWelcome = '%s Добредојдовте';
$strWestEuropean = 'Западноевропски';
$strWildcard = 'џокер';
$strWindowNotFound = 'Одредишни прозор претраживача није могао да буде ажуриран. Можда сте затворили матични прозор, или ваш претраживач онемогућава ажурирање међу прозорима због сигурносних подешавања';
$strWithChecked = 'Обележаното:';
$strWriteRequests = 'Барање за упис';
$strWrongUser = 'Погрешно корисничко име/лозинка. Пристапот не е допуштен.';

$strXML = 'XML';

$strYes = 'Да';

$strZeroRemovesTheLimit = 'Напомена: Поставувањето на овие опции на 0 (нула) ги отстранува ограничувањата.';
$strZip = '"zip"';

$strPrivDescCreateView = 'Дозволува креирање на нови погледи.';
$strPrivDescCreateUser = 'Дозволува креирање, бришење и преименување на корсиничките имиња.';
$strPrivDescCreateRoutine = 'Дозволува креирање на stored рутини.';
$strPrivDescAlterRoutine = 'Дозволува промена и бришење на stored рутини.';
$strRoutines = 'Рутини';
$strPrivDescShowView = 'Дозволува извршување на SHOW CREATE VIEW упити.';
$strPrivDescExecute5 = 'Дозволува извршување на stored рутини.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE пред копирање';
$strGeneratePassword = 'Генерирање на лозинка';
$strGenerate = 'Генерирај';
$strCopy = 'Копирај';

$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddClause = 'Add %s';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strAngularLinks = 'Angular links';  //to translate
$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strCancel = 'Cancel';  //to translate
$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strControluserFailed = 'Connection for controluser as defined in your configuration failed.';  //to translate
$strCreateRelation = 'Create relation';  //to translate
$strCreateTable  = 'Create table';  //to translate
$strCreateUserDatabase = 'Database for user';  //to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';  //to translate
$strCreateUserDatabaseNone = 'None';  //to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';  //to translate
$strCSV = 'CSV';  //to translate
$strDbIsEmpty = 'Database seems to be empty!';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDeleteRelation = 'Delete relation';  //to translate
$strDelimiter = 'Delimiter';  //to translate
$strDesigner = 'Designer';  //to translate
$strDesignerHelpDisplayField = 'The display field is shown in pink. To set/unset a field as the display field, click the "Choose field to display" icon, then click on the appropriate field name.';  //to translate
$strDirectLinks = 'Direct links';  //to translate
$strDocSQL = 'DocSQL';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strErrorRelationAdded = 'Error: Relation not added.';  //to translate
$strErrorRelationExists = 'Error: relation already exists.';  //to translate
$strErrorRenamingTable = 'Error renaming table %1$s to %2$s';  //to translate
$strErrorSaveTable = 'Error saving coordinates for Designer.';  //to translate
$strEsperanto = 'Esperanto';  //to translate
$strEvent = 'Event';  //to translate
$strExportImportToScale = 'Export/Import to scale';  //to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';  //to translate
$strFieldInsertFromFileTempDirNotExists = 'Error moving the uploaded file, see FAQ 1.11';  //to translate
$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFiles = 'Files';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFontSize = 'Font size';  //to translate
$strForeignKeyError = 'Error creating foreign key (check data types)';  //to translate
$strFunctions = 'Functions';  //to translate
$strHandler = 'Handler';  //to translate
$strHelp = 'Help';  //to translate
$strHexForBLOB = 'Use hexadecimal for BLOB';  //to translate
$strHide         = 'Hide';  //to translate
$strHideShowAll = 'Hide/Show all';  //to translate
$strHideShowNoRelation = 'Hide/Show Tables with no relation';  //to translate
$strIEUnsupported = 'Internet Explorer does not support this function.';  //to translate
$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strImportExportCoords = 'Import/Export coordinates for PDF schema';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strIndexesSeemEqual = 'The following indexes appear to be equal and one of them should be removed:';  //to translate
$strInnoDBRelationAdded = 'InnoDB relation added';  //to translate
$strInternalRelationAdded = 'Internal relation added';  //to translate
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';  //to translate
$strInvalidColumnCount = 'Column count has to be larger than zero.';  //to translate
$strInvalidColumn = 'Invalid column (%s) specified!';  //to translate
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';  //to translate
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';  //to translate
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';  //to translate
$strInvalidDatabase = 'Invalid database';  //to translate
$strInvalidFieldAddCount = 'You have to add at least one field.';  //to translate
$strInvalidFieldCount = 'Table must have at least one field.';  //to translate
$strInvalidLDIImport = 'This plugin does not support compressed imports!';  //to translate
$strInvalidRowNumber = '%d is not valid row number.';  //to translate
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';  //to translate
$strInvalidServerIndex = 'Invalid server index: "%s"';  //to translate
$strInvalidTableName = 'Invalid table name';  //to translate
$strJoins = 'Joins';  //to translate
$strKeyCache = 'Key cache';  //to translate
$strKnownExternalBug = 'The %s functionality is affected by a known bug, see %s';  //to translate
$strLanguage = 'Language';  //to translate
$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMoveMenu = 'Move Menu';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate
$strMysqlLibDiffersServerVersion = 'Your PHP MySQL library version %s differs from your MySQL server version %s. This may cause unpredictable behavior.';  //to translate
$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate
$strNumberOfTables = 'Number of tables';  //to translate
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';  //to translate
$strOpenDocumentText = 'Open Document Text';  //to translate
$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOptions = 'Options';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportExplanation = '(Generates a report containing the data of a single table)';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPleaseSelectPrimaryOrUniqueKey = 'Please select the primary key or a unique key';  //to translate
$strPmaWiki = 'phpMyAdmin wiki';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strProcedures = 'Procedures';  //to translate
$strProcesses = 'Processes';  //to translate
$strProtocolVersion = 'Protocol version';  //to translate
$strQueryCache = 'Query cache';  //to translate
$strQueryResultsOperations = 'Query results operations';  //to translate
$strRecommended = 'recommended';  //to translate
$strRelationDeleted = 'Relation deleted';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strReload = 'Reload';  //to translate
$strReplication = 'Replication';  //to translate
$strRestartInsertion = 'Restart insertion with %s rows';  //to translate
$strRoutineReturnType = 'Return type';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate
$strSavePosition = 'Save position';  //to translate
$strSelectForeignKey = 'Select Foreign Key';  //to translate
$strSelectReferencedKey = 'Select referenced key';  //to translate
$strServers = 'Servers';  //to translate
$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strSessionStartupErrorGeneral = 'Cannot start session without errors, please check errors given in your PHP and/or webserver log file and configure your PHP installation properly.';  //to translate
$strShowHideLeftMenu = 'Show/Hide left menu';  //to translate
$strShowingBookmark = 'Showing bookmark';  //to translate
$strShowingPhp = 'Showing as PHP code';  //to translate
$strShowingSQL = 'Showing SQL query';  //to translate
$strShowOpenTables = 'Show open tables';  //to translate
$strShowSlaveHosts = 'Show slave hosts';  //to translate
$strShowSlaveStatus = 'Show slave status';  //to translate
$strShowStatusBinlog_cache_disk_useDescr = 'The number of transactions that used the temporary binary log cache but that exceeded the value of binlog_cache_size and used a temporary file to store statements from the transaction.';  //to translate
$strShowStatusBinlog_cache_useDescr = 'The number of transactions that used the temporary binary log cache.';  //to translate
$strShowStatusCreated_tmp_disk_tablesDescr = 'The number of temporary tables on disk created automatically by the server while executing statements. If Created_tmp_disk_tables is big, you may want to increase the tmp_table_size  value to cause temporary tables to be memory-based instead of disk-based.';  //to translate
$strShowStatusCreated_tmp_filesDescr = 'How many temporary files mysqld has created.';  //to translate
$strShowStatusCreated_tmp_tablesDescr = 'The number of in-memory temporary tables created automatically by the server while executing statements.';  //to translate
$strShowStatusDelayed_errorsDescr = 'The number of rows written with INSERT DELAYED for which some error occurred (probably duplicate key).';  //to translate
$strShowStatusDelayed_insert_threadsDescr = 'The number of INSERT DELAYED handler threads in use. Every different table on which one uses INSERT DELAYED gets its own thread.';  //to translate
$strShowStatusDelayed_writesDescr = 'The number of INSERT DELAYED rows written.';  //to translate
$strShowStatusFlush_commandsDescr  = 'The number of executed FLUSH statements.';  //to translate
$strShowStatusHandler_commitDescr = 'The number of internal COMMIT statements.';  //to translate
$strShowStatusHandler_deleteDescr = 'The number of times a row was deleted from a table.';  //to translate
$strShowStatusHandler_discoverDescr = 'The MySQL server can ask the NDB Cluster storage engine if it knows about a table with a given name. This is called discovery. Handler_discover indicates the number of time tables have been discovered.';  //to translate
$strShowStatusHandler_read_firstDescr = 'The number of times the first entry was read from an index. If this is high, it suggests that the server is doing a lot of full index scans; for example, SELECT col1 FROM foo, assuming that col1 is indexed.';  //to translate
$strShowStatusHandler_read_keyDescr = 'The number of requests to read a row based on a key. If this is high, it is a good indication that your queries and tables are properly indexed.';  //to translate
$strShowStatusHandler_read_nextDescr = 'The number of requests to read the next row in key order. This is incremented if you are querying an index column with a range constraint or if you are doing an index scan.';  //to translate
$strShowStatusHandler_read_prevDescr = 'The number of requests to read the previous row in key order. This read method is mainly used to optimize ORDER BY ... DESC.';  //to translate
$strShowStatusHandler_read_rndDescr = 'The number of requests to read a row based on a fixed position. This is high if you are doing a lot of queries that require sorting of the result. You probably have a lot of queries that require MySQL to scan whole tables or you have joins that don\'t use keys properly.';  //to translate
$strShowStatusHandler_read_rnd_nextDescr = 'The number of requests to read the next row in the data file. This is high if you are doing a lot of table scans. Generally this suggests that your tables are not properly indexed or that your queries are not written to take advantage of the indexes you have.';  //to translate
$strShowStatusHandler_rollbackDescr = 'The number of internal ROLLBACK statements.';  //to translate
$strShowStatusHandler_updateDescr = 'The number of requests to update a row in a table.';  //to translate
$strShowStatusHandler_writeDescr = 'The number of requests to insert a row in a table.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'The number of pages containing data (dirty or clean).';  //to translate
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'The number of pages currently dirty.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'The number of buffer pool pages that have been requested to be flushed.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'The number of free pages.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'The number of latched pages in InnoDB buffer pool. These are pages currently being read or written or that can\'t be flushed or removed for some other reason.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'The number of pages busy because they have been allocated for administrative overhead such as row locks or the adaptive hash index. This value can also be calculated as Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';  //to translate
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Total size of buffer pool, in pages.';  //to translate
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'The number of "random" read-aheads InnoDB initiated. This happens when a query is to scan a large portion of a table but in random order.';  //to translate
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'The number of sequential read-aheads InnoDB initiated. This happens when InnoDB does a sequential full table scan.';  //to translate
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'The number of logical read requests InnoDB has done.';  //to translate
$strShowStatusInnodb_buffer_pool_readsDescr = 'The number of logical reads that InnoDB could not satisfy from buffer pool and had to do a single-page read.';  //to translate
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normally, writes to the InnoDB buffer pool happen in the background. However, if it\'s necessary to read or create a page and no clean pages are available, it\'s necessary to wait for pages to be flushed first. This counter counts instances of these waits. If the buffer pool size was set properly, this value should be small.';  //to translate
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'The number writes done to the InnoDB buffer pool.';  //to translate
$strShowStatusInnodb_data_fsyncsDescr = 'The number of fsync() operations so far.';  //to translate
$strShowStatusInnodb_data_pending_fsyncsDescr = 'The current number of pending fsync() operations.';  //to translate
$strShowStatusInnodb_data_pending_readsDescr = 'The current number of pending reads.';  //to translate
$strShowStatusInnodb_data_pending_writesDescr = 'The current number of pending writes.';  //to translate
$strShowStatusInnodb_data_readDescr = 'The amount of data read so far, in bytes.';  //to translate
$strShowStatusInnodb_data_readsDescr = 'The total number of data reads.';  //to translate
$strShowStatusInnodb_data_writesDescr = 'The total number of data writes.';  //to translate
$strShowStatusInnodb_data_writtenDescr = 'The amount of data written so far, in bytes.';  //to translate
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';  //to translate
$strShowStatusInnodb_dblwr_writesDescr = 'The number of doublewrite writes that have been performed and the number of pages that have been written for this purpose.';  //to translate
$strShowStatusInnodb_log_waitsDescr = 'The number of waits we had because log buffer was too small and we had to wait for it to be flushed before continuing.';  //to translate
$strShowStatusInnodb_log_write_requestsDescr = 'The number of log write requests.';  //to translate
$strShowStatusInnodb_log_writesDescr = 'The number of physical writes to the log file.';  //to translate
$strShowStatusInnodb_os_log_fsyncsDescr = 'The number of fsyncs writes done to the log file.';  //to translate
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'The number of pending log file fsyncs.';  //to translate
$strShowStatusInnodb_os_log_pending_writesDescr = 'Pending log file writes.';  //to translate
$strShowStatusInnodb_os_log_writtenDescr = 'The number of bytes written to the log file.';  //to translate
$strShowStatusInnodb_pages_createdDescr = 'The number of pages created.';  //to translate
$strShowStatusInnodb_page_sizeDescr = 'The compiled-in InnoDB page size (default 16KB). Many values are counted in pages; the page size allows them to be easily converted to bytes.';  //to translate
$strShowStatusInnodb_pages_readDescr = 'The number of pages read.';  //to translate
$strShowStatusInnodb_pages_writtenDescr = 'The number of pages written.';  //to translate
$strShowStatusInnodb_row_lock_current_waitsDescr = 'The number of row locks currently being waited for.';  //to translate
$strShowStatusInnodb_row_lock_time_avgDescr = 'The average time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_timeDescr = 'The total time spent in acquiring row locks, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_time_maxDescr = 'The maximum time to acquire a row lock, in milliseconds.';  //to translate
$strShowStatusInnodb_row_lock_waitsDescr = 'The number of times a row lock had to be waited for.';  //to translate
$strShowStatusInnodb_rows_deletedDescr = 'The number of rows deleted from InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_insertedDescr = 'The number of rows inserted in InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_readDescr = 'The number of rows read from InnoDB tables.';  //to translate
$strShowStatusInnodb_rows_updatedDescr = 'The number of rows updated in InnoDB tables.';  //to translate
$strShowStatusKey_blocks_not_flushedDescr = 'The number of key blocks in the key cache that have changed but haven\'t yet been flushed to disk. It used to be known as Not_flushed_key_blocks.';  //to translate
$strShowStatusKey_blocks_unusedDescr = 'The number of unused blocks in the key cache. You can use this value to determine how much of the key cache is in use.';  //to translate
$strShowStatusKey_blocks_usedDescr = 'The number of used blocks in the key cache. This value is a high-water mark that indicates the maximum number of blocks that have ever been in use at one time.';  //to translate
$strShowStatusKey_read_requestsDescr = 'The number of requests to read a key block from the cache.';  //to translate
$strShowStatusKey_readsDescr = 'The number of physical reads of a key block from disk. If Key_reads is big, then your key_buffer_size value is probably too small. The cache miss rate can be calculated as Key_reads/Key_read_requests.';  //to translate
$strShowStatusKey_write_requestsDescr = 'The number of requests to write a key block to the cache.';  //to translate
$strShowStatusKey_writesDescr = 'The number of physical writes of a key block to disk.';  //to translate
$strShowStatusLast_query_costDescr = 'The total cost of the last compiled query as computed by the query optimizer. Useful for comparing the cost of different query plans for the same query. The default value of 0 means that no query has been compiled yet.';  //to translate
$strShowStatusNot_flushed_delayed_rowsDescr = 'The number of rows waiting to be written in INSERT DELAYED queues.';  //to translate
$strShowStatusOpened_tablesDescr = 'The number of tables that have been opened. If opened tables is big, your table cache value is probably too small.';  //to translate
$strShowStatusOpen_filesDescr = 'The number of files that are open.';  //to translate
$strShowStatusOpen_streamsDescr = 'The number of streams that are open (used mainly for logging).';  //to translate
$strShowStatusOpen_tablesDescr = 'The number of tables that are open.';  //to translate
$strShowStatusQcache_free_blocksDescr = 'The number of free memory blocks in query cache.';  //to translate
$strShowStatusQcache_free_memoryDescr = 'The amount of free memory for query cache.';  //to translate
$strShowStatusQcache_hitsDescr = 'The number of cache hits.';  //to translate
$strShowStatusQcache_insertsDescr = 'The number of queries added to the cache.';  //to translate
$strShowStatusQcache_lowmem_prunesDescr = 'The number of queries that have been removed from the cache to free up memory for caching new queries. This information can help you tune the query cache size. The query cache uses a least recently used (LRU) strategy to decide which queries to remove from the cache.';  //to translate
$strShowStatusQcache_not_cachedDescr = 'The number of non-cached queries (not cachable, or not cached due to the query_cache_type setting).';  //to translate
$strShowStatusQcache_queries_in_cacheDescr = 'The number of queries registered in the cache.';  //to translate
$strShowStatusQcache_total_blocksDescr = 'The total number of blocks in the query cache.';  //to translate
$strShowStatusReset = 'Reset';  //to translate
$strShowStatusRpl_statusDescr = 'The status of failsafe replication (not yet implemented).';  //to translate
$strShowStatusSelect_full_joinDescr = 'The number of joins that do not use indexes. If this value is not 0, you should carefully check the indexes of your tables.';  //to translate
$strShowStatusSelect_full_range_joinDescr = 'The number of joins that used a range search on a reference table.';  //to translate
$strShowStatusSelect_range_checkDescr = 'The number of joins without keys that check for key usage after each row. (If this is not 0, you should carefully check the indexes of your tables.)';  //to translate
$strShowStatusSelect_rangeDescr = 'The number of joins that used ranges on the first table. (It\'s normally not critical even if this is big.)';  //to translate
$strShowStatusSelect_scanDescr = 'The number of joins that did a full scan of the first table.';  //to translate
$strShowStatusSlave_open_temp_tablesDescr = 'The number of temporary tables currently open by the slave SQL thread.';  //to translate
$strShowStatusSlave_retried_transactionsDescr = 'Total (since startup) number of times the replication slave SQL thread has retried transactions.';  //to translate
$strShowStatusSlave_runningDescr = 'This is ON if this server is a slave that is connected to a master.';  //to translate
$strShowStatusSlow_launch_threadsDescr = 'The number of threads that have taken more than slow_launch_time seconds to create.';  //to translate
$strShowStatusSlow_queriesDescr = 'The number of queries that have taken more than long_query_time seconds.';  //to translate
$strShowStatusSort_merge_passesDescr = 'The number of merge passes the sort algorithm has had to do. If this value is large, you should consider increasing the value of the sort_buffer_size system variable.';  //to translate
$strShowStatusSort_rangeDescr = 'The number of sorts that were done with ranges.';  //to translate
$strShowStatusSort_rowsDescr = 'The number of sorted rows.';  //to translate
$strShowStatusSort_scanDescr = 'The number of sorts that were done by scanning the table.';  //to translate
$strShowStatusTable_locks_immediateDescr = 'The number of times that a table lock was acquired immediately.';  //to translate
$strShowStatusTable_locks_waitedDescr = 'The number of times that a table lock could not be acquired immediately and a wait was needed. If this is high, and you have performance problems, you should first optimize your queries, and then either split your table or tables or use replication.';  //to translate
$strShowStatusThreads_cachedDescr = 'The number of threads in the thread cache. The cache hit rate can be calculated as Threads_created/Connections. If this value is red you should raise your thread_cache_size.';  //to translate
$strShowStatusThreads_connectedDescr = 'The number of currently open connections.';  //to translate
$strShowStatusThreads_createdDescr = 'The number of threads created to handle connections. If Threads_created is big, you may want to increase the thread_cache_size value. (Normally this doesn\'t give a notable performance improvement if you have a good thread implementation.)';  //to translate
$strShowStatusThreads_runningDescr = 'The number of threads that are not sleeping.';  //to translate
$strSkipQueries = 'Number of records(queries) to skip from start';  //to translate
$strSmallBigAll = 'Small/Big All';  //to translate
$strSnapToGrid = 'Snap to grid';  //to translate
$strSorting = 'Sorting';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStandInStructureForView = 'Stand-in structure for view';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStructureForView = 'Structure for view';  //to translate
$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTableIsEmpty = 'Table seems to be empty!';  //to translate
$strTableName = 'Table name';  //to translate
$strTempData = 'Temporary data';  //to translate
$strThemeDefaultNotFound = 'Default theme %s not found!';  //to translate
$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strThemeNotFound = 'Theme %s not found!';  //to translate
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';  //to translate
$strThemePathNotFound = 'Theme path not found for theme %s!';  //to translate
$strThreads = 'Threads';  //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strToFromPage = 'to/from page';  //to translate
$strToggleSmallBig = 'Toggle small/big';  //to translate
$strToSelectRelation = 'To select relation, click :';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate
$strTriggers = 'Triggers';  //to translate
$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUploadErrorCantWrite = 'Failed to write file to disk.';  //to translate
$strUploadErrorExtension = 'File upload stopped by extension.';  //to translate
$strUploadErrorFormSize = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';  //to translate
$strUploadErrorIniSize = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';  //to translate
$strUploadErrorNoTempDir = 'Missing a temporary folder.';  //to translate
$strUploadErrorPartial = 'The uploaded file was only partially uploaded.';  //to translate
$strUploadErrorUnknown = 'Unknown error in file upload.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strViewName = 'VIEW name';  //to translate
$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

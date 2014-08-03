<?php
/* $Id: lithuanian-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sekmadienis', 'Pirmadienis', 'Antradienis', 'Trečiadienis', 'Ketvirtadienis', 'Penktadienis', 'Šeštadienis');
$month = array('Sausio', 'Vasario', 'Kovo', 'Balandžio', 'Gegužio', 'Birželio', 'Liepos', 'Rugpjūčio', 'Rugsėjo', 'Spalio', 'Lapkričio', 'Gruodžio');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = ' %Y m. %B %d d.  %H:%M';
$timespanfmt = '%s d., %s val., %s min. ir %s s.';

$strAbortedClients = 'Atmestos jungtys';
$strAccessDeniedExplanation = 'phpMyAdmin nepavyko prisijungti prie MySQL darbinės stoties (jungtis atmesta). Patikrinkite config.inc.php byloje nurodytus duomenis (darbinės stoties adresą, prisijungimo vardą ir slaptažodį) ir įsitikinkite ar jie sutampa su duomenimis gautais iš darbinės stoties administratoriaus.';
$strAccessDenied = 'Jungtis neįmanoma';
$strAction = 'Valdymo veiksmai';
$strAddAutoIncrement = 'Pridėti AUTO_INCREMENT reikšmę';
$strAddConstraints = 'Pridėti apribojimą';
$strAddDeleteColumn = 'Įterpti/Trinti stulpelius';
$strAddDeleteRow = 'Įterpti/Trinti požymio eilutę(es)';
$strAddFields = 'Pridėti %s lauką(-us)';
$strAddHeaderComment = 'Įterpti savo komentarą į header sritį (eilučių skirtukas \\n )';
$strAddIntoComments = 'Pridėti į komentarus';
$strAddNewField = 'Įterpti naują laukelį(ius)';
$strAddPrivilegesOnDb = 'Sukurti privilegijas šiai duombazei';
$strAddPrivilegesOnTbl = 'Sukurti privilegijas šiai lentelei';
$strAddSearchConditions = 'Įterpkite paieškos sąlygas į "where" sakinį:';
$strAddToIndex = 'Įterpti indeksui papildomus &nbsp;%s&nbsp;stulpelį(ius)';
$strAddUserMessage = 'Jūs sukūrėte naują vartotoją.';
$strAddUser = 'Sukurti naują vartotoją';
$strAdministration = 'Administracija';
$strAffectedRows = 'Pakeista eilučių:';
$strAfterInsertBack = 'Sugrįžti į buvusį puslapį';
$strAfterInsertNewInsert = 'Įterpti sekančią naują eilutę';
$strAfterInsertNext = 'Redaguoti sekantį įrašą';
$strAfterInsertSame = 'Grįžti atgal į šį puslapį';
$strAfter = 'Po %s';
$strAllTableSameWidth = 'rodyti visas lenteles vienodo pločio?';
$strAll = 'Viską';
$strAlterOrderBy = 'Pakeisti lentelės rūšiavimą pagal:';
$strAnalyzeTable = 'Analizuoti lentelę';
$strAnd = 'IR';
$strAnIndex = 'Indeksas sukurtas %s stulpeliui';
$strAny = 'Bet kurį(ią)';
$strAnyHost = 'Bet kurį prisijungimo adresą';
$strAnyUser = 'Bet kurį vartotoją';
$strApproximateCount = 'Gali būti apytikslis. Žiūrėkite DUK 3.11';
$strAPrimaryKey = 'Stulpeliui %s sukurtas PIRMINIS raktas';
$strArabic = 'Arabų';
$strArmenian = 'Armėnų';
$strAscending = 'Didėjimo tvarka';
$strAtBeginningOfTable = 'Lentelės pradžioje';
$strAtEndOfTable = 'Lentelės pabaigoje';
$strAttr = 'Atributai';
$strAutomaticLayout = 'Automatinis išdėstymas';

$strBack = 'Atgal';
$strBaltic = 'Baltų';
$strBeginCut = 'KIRPIMO PRADŽIA';
$strBeginRaw = 'RAW PRADŽIA';
$strBinaryDoNotEdit = 'Dvejetainis - nekeisti';
$strBinary = 'Dvejetainis';
$strBinaryLog = 'Binarinis logas';
$strBinLogEventType = 'Event\'o tipas';
$strBinLogInfo = 'Informatcija';
$strBinLogName = 'Logo pavadinimas';
$strBinLogOriginalPosition = 'Pirminė padėtis';
$strBinLogPosition = 'Padėtis';
$strBinLogServerId = 'Serverio ID';
$strBookmarkAllUsers = 'Leisti kitiems vartotojams naudotis šia žyme';
$strBookmarkDeleted = 'Nuoroda ištrinta.';
$strBookmarkLabel = 'Nuorodos Antraštė';
$strBookmarkQuery = 'Sukurti nuoroda SQL-užklausai';
$strBookmarkThis = 'Sukurti nuorodą';
$strBookmarkView = 'Peržiūra';
$strBrowseForeignValues = 'Naršyti išorines reikšmes';
$strBrowse = 'Peržiūrėti';
$strBufferPool = 'Buferio Pool\'as';
$strBufferPoolUsage = 'Buferio Pool\'o naudojimas';
$strBulgarian = 'Bulgarų';
$strBzError = 'phpMyAdmin negalėjo suspausti lentelės struktūros atvaizdą (dump), nes šioje php versijoje neveikia Bz2 modulis. Rekomenduojame phpMyAdmin konfigūracinėje byloje <code>$cfg[\'BZipDump\']</code> direktyvą prilyginti <code>FALSE</code>. Atnaujinkite savo php versiją, jeigu norite naudotis Bz2 moduliu. Detalesnė informacija: %s.';
$strBzip = '"bzip"';

$strCalendar = 'Kalendorius';
$strCannotLogin = 'Neprisijungia prie MySQL darbinės stoties';
$strCantLoad = 'negalima įkrauti %s plėtinio,<br />pasitikrinkite php parinktis';
$strCantLoadRecodeIconv = 'Nepavyko užkrauti <em>iconv</em> arba <em>recode</em> plėtinių, reikalingų koduotės kovertavimui. Suteikite PHP teises naudotis šiais išplėtimais arba išjunkite phpMyAdmin koduotės konvertavimą. ';
$strCantRenameIdxToPrimary = 'Indeksą pervadinti PIRMINIU nepavyko!';
$strCantUseRecodeIconv = 'Kraunant plėtinių pranešimus, nepavyko pasinaudoti <em>iconv</em> arba <em>libiconv</em> arba <em>recode_string</em> funkcijomis. Pasitkrinkite PHP parinktis. ';
$strCardinality = 'Elementų skaičius';
$strCaseInsensitive = 'simbolių registras nesvarbus';
$strCaseSensitive = 'simbolių registras svarbus';
$strCentralEuropean = 'Centrinės Europos';
$strChangeCopyModeCopy = '... palikti seną vartotoją.';
$strChangeCopyModeDeleteAndReload = ' ... pašalinti seną vartotoją iš vartotojų lentelės ir poto perkrauti privilegijas';
$strChangeCopyModeJustDelete = ' ... pašalinti seną vartotoją iš vartotojų lentelės.';
$strChangeCopyModeRevoke = ' ... panaikinti visas privilegijas iš seno vartotojo ir poto jį pašalinti.';
$strChangeCopyMode = 'Sukurti naują vartotoją su tom pačiom privilegijom ir ...';
$strChangeCopyUser = 'Pakeisti prisijungimo informaciją / Kopijuoti vartotojo duomenis';
$strChangeDisplay = 'Pasirinkite lauką, kurį norite peržiūrėti';
$strChangePassword = 'Pakeisti slaptažodį';
$strChange = 'Redaguoti';
$strCharset = 'Koduotė';
$strCharsetOfFile = 'Simbolių koduotė byloje:';
$strCharsetsAndCollations = 'Simbolių rinkiniai ir Palyginimai';
$strCharsets = 'Koduotės';
$strCheckAll = 'Pažymėti viską';
$strCheckOverhead = 'Patikrinti perkrautus';
$strCheckPrivsLong = 'Patikrinti duombazės &quot;%s&quot; privilegijas.';
$strCheckPrivs = 'Patikrinti privilegijas';
$strCheckTable = 'Patikrinti lentelę';
$strChoosePage = 'Pasirinkite puslapį redagavimui';
$strColComFeat = 'Stulpelių komentarų išvedimas';
$strCollation = 'Palyginimas';
$strColumnNames = 'Stulpelių vardai';
$strColumnPrivileges = 'Specifinės stulpelių privilegijos';
$strCommand = 'Komanda';
$strCommentsForTable = 'COMMENTS FOR TABLE';
$strComments = 'Komentarai';
$strCompatibleHashing = 'Suderinamas sy MySQL&nbsp;4.0';
$strCompleteInserts = 'Visiškas įterpimas';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin negalėjo perskaityti parinkčių bylos!<br />Tai galėjo nutikti jeigu <u>php</u> rado byloje vykdymo klaidą arba visai nerando bylos.<br />Prašome kreiptis į parinkčių bylą tiesiogiai (naudojantis nuoroda žemiau) ir perskaityti gautus <u>php</u> klaidų pranešimą(us). Daugeliu atveju vienoje/keletoje eilučių truksta kabučių ir/arba kabliataškio.<br />Jeigu išvedamas tuščias naršyklės langas - viskas tvarkoje (klaidų nepastebėta).';
$strConfigureTableCoord = 'Nustatykite lentelės %s koordinates';
$strConnectionError = 'Neįmanoma prisijungti: neteisingi duomenys.';
$strConnections = 'Prisijungimai';
$strConstraintsForDumped = 'Apribojimai eksportuotom lentelėm';
$strConstraintsForTable = 'Apribojimai lentelei';
$strCookiesRequired = 'Sausainėliai(Cookies) turi būti priimami.';
$strCopyDatabaseOK = 'Duombazė %s buvo nukopijuota į %s';
$strCopy = 'Kopijuoti';
$strCopyTable = 'Kopijuoti lentelė į (duombazė<b>.</b>lentelė):';
$strCopyTableOK = 'Letelė %s nukopijuota į %s.';
$strCopyTableSameNames = 'Negalima kopijuoti lentelės į ją pačią!';
$strCouldNotKill = 'phpMyAdmin negalėjo išjungti %s proceso. Gali būti jog jis jau užbaigė darbą.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE prieš kopijuojant';
$strCreateIndex = 'Sukurti indeksą &nbsp;%s&nbsp;stulpeliui(iams)';
$strCreateIndexTopic = 'Sukurti naują indeksą';
$strCreateNewDatabase = 'Sukurti naują duombazę';
$strCreateNewTable = 'Sukurti naują lentelę duombazėje %s';
$strCreatePage = 'Sukurti naują puslapį';
$strCreatePdfFeat = 'PDF bylos generavimas';
$strCreate = 'Sukurti';
$strCreationDates = 'Sukūrimo/Atnaujinimo/Peržiūros datos';
$strCriteria = 'Kriterijai';
$strCroatian = 'Kroatų';
$strCyrillic = 'Kirylica';
$strCzech = 'Čekų';
$strCzechSlovak = 'Čekų-Slovakų';

$strDanish = 'Danų';
$strDatabase = 'Duombazė';
$strDatabaseEmpty = 'Nenurodytas duombazės vardas!';
$strDatabaseExportOptions = 'Duombazės eksportavimo parinktys';
$strDatabaseHasBeenDropped = 'Duombazė %s ištrinta.';
$strDatabasesDropped = 'Sėkmingai pašalintos %s duombazės.';
$strDatabases = 'duombazės';
$strDatabasesStatsDisable = 'Leisti statistiką';
$strDatabasesStats = 'Duombazių statistika';
$strDatabasesStatsEnable = 'Neleisti statistikos';
$strDatabasesStatsHeavyTraffic = 'Pastaba: jeigu duombazės statistika įjungta - apkrovimas tarp www ir MySQL darbinių stočių, gali padidėti aukščiau normos.';
$strDataDict = 'Duomenų žodynas';
$strData = 'Duomenys';
$strDataOnly = 'Tik duomenys';
$strDBComment = 'Duombazės komantaras: ';
$strDBCopy = 'Kopijuoti duombazę į';
$strDbPrivileges = 'Specifinės duombazių privilegijos';
$strDBRename = 'Pervadinti duombazę į';
$strDbSpecific = 'priklausantis nuo duombazės tipo';
$strDefaultEngine = '%s yra default\'inis Saugojimo Variklis šiame MySQL serveryje.';
$strDefault = 'Nutylint';
$strDefaultValueHelp = 'Nenaudokite išskyrimo simbolių ar kabučiu, nurodydami reikšmę pagal nutylėjimą. Naudokitės šiuo formatu: a';
$strDefragment = 'Defragmentuoti lentelę';
$strDelayedInserts = 'Naudoti užlaikytus įterpimus';
$strDeleteAndFlushDescr = 'Tai yra švariausias būdas, bet privilegijų perkrovimas gali šiek tiek užtrukti.';
$strDeleteAndFlush = 'pašalinti vartotojus ir perkrauti privilegijas.';
$strDeleted = 'Eilutė ištrinta';
$strDeletedRows = 'Eilutės ištrintos:';
$strDelete = 'Trinti';
$strDeleting = 'Šaliname: %s';
$strDelOld = 'Šis puslapis turi nuorodų į lenteles, kurios jau neegzistuoja. Ar norite pašalinti šias nuorodas?';
$strDescending = 'Mažėjimo tvarka';
$strDescription = 'Paaiškinimas';
$strDictionary = 'žodynas';
$strDisabled = 'Išjungta';
$strDisableForeignChecks = 'Atsisakyti išorinių raktų tikrinimo';
$strDisplayFeat = 'Išvedimo sąvybės';
$strDisplayOrder = 'Atvaizdavimo tvarka:';
$strDisplayPDF = 'Rodyti PDF vaizdą';
$strDoAQuery = 'Vykdyti "užklausą pagal pavyzdį" (pakaitos simbolis: "%")';
$strDocu = '?';
$strDoYouReally = 'Ar TIKRAI norite ';
$strDropDatabaseStrongWarning = 'Jūs ruošiatės SUNAIKINTI visą duombazę!';
$strDrop = 'Šalinti';
$strDropUsersDb = 'Pašalinti duombazes, turinčias tokius pačius vardus kaip ir vartotojai.';
$strDumpingData = 'Sukurta duomenų kopija lentelei';
$strDumpSaved = 'Duombazės atvaizdis išsaugotas byloje %s.';
$strDumpXRows = 'Išvesti %s eilučių pradedant nuo %s eilutės.';
$strDynamic = 'dinaminis';

$strEditPDFPages = 'Redaguoti PDF puslapius';
$strEditPrivileges = 'Redaguoti privilegijas';
$strEdit = 'Redaguoti';
$strEffective = 'Efektyvus';
$strEmpty = 'Išvalyti';
$strEmptyResultSet = 'MySQL gražino tuščią rezultatų rinkinį (nėra eilučių).';
$strEnabled = 'Įjungta';
$strEndCut = 'KIRPIMO PABAIGA';
$strEnd = 'Pabaiga';
$strEndRaw = 'RAW PABAIGA';
$strEngineAvailable = '%s nėra galimas šiame MySQL serveryje.';
$strEngineDisabled = '%s šiame MySQL serveryje yra išjungtas.';
$strEngines = 'Varikliai';
$strEngineUnsupported = 'Šis MySQL serveris nepalaiko %s saugojimo variklio.';
$strEnglish = 'Anglų';
$strEnglishPrivileges = ' Pastaba: MySQL privilegijų pavadinimai pateikiami anglų kalba';
$strError = 'Klaida';
$strEscapeWildcards = 'Norint naudoti _ ir % simblius, juos reikėtų eskeipinti su \\';
$strEstonian = 'Estų'; 
$strExcelEdition = 'Excel variantas';
$strExecuteBookmarked = 'Įvykdyti išsaugotą užklausą';
$strExplain = 'Paaiškinti';
$strExport = 'Eksportuoti';
$strExtendedInserts = 'Išplėstinis įterpimas';
$strExtra = 'Papildomai';

$strFailedAttempts = 'Nepavykę bandymai';
$strFieldHasBeenDropped = 'Laukas %s išmestas';
$strField = 'Laukas';
$strFieldsEnclosedBy = 'Laukų reikšmės apskliaustos  simboliais';
$strFieldsEscapedBy = 'Laukų reikšmės baigiasi simboliu';
$strFields = 'Lauką';
$strFieldsTerminatedBy = 'Laukų pabaigos žymė';
$strFileAlreadyExists = 'Byla pavadinimu %s jau yra darbinėje stotyje, pakeiskite norimą pavadinimą arba pasirinkite nustatymą leidžiantį perrašyti esančias bylas.';
$strFileCouldNotBeRead = 'Negalima perskaityti bylos';
$strFileNameTemplate = 'Failo pavadinimo šablonas';
$strFileNameTemplateRemember = 'atsiminti šabloną';
$strFixed = 'fiksuotas';
$strFlushPrivilegesNote = 'Pastaba: phpMyAdmin gauna vartotojų teises tiesiai iš MySQL privilegijų lentelės. Šiose lentelėse nurodytos teisės gali skirtis nuo parinkčių bylose nurodytų teisių. Todėl %sperkraukite teises%s, jeigu norite tęsti. ';
$strFlushTable = 'Išvalyti lentelę ("FLUSH")';
$strFormat = 'Formatas';
$strFormEmpty = 'Trūksta reikšmės formoje !';
$strFullText = 'Tekstus rodyti pilnai';
$strFunction = 'Funkcija';

$strGenBy = 'Generavo:';
$strGeneralRelationFeat = 'Pagrindinės sąryšių sąvybės';
$strGenerate = 'Generuoti';
$strGeneratePassword = 'Generuoti Slaiptažodį';
$strGenTime = 'Atlikimo laikas';
$strGeorgian = 'Gruzinų';
$strGerman = 'Vokiečių';
$strGlobal = 'globalus';
$strGlobalPrivileges = 'Globalios teisės';
$strGlobalValue = 'Globali reikšmė';
$strGo = 'Vykdyti';
$strGrantOption = 'Suteikti';
$strGreek = 'Graikų';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'išplėsta.';
$strHasBeenCreated = 'sukurta.';
$strHaveToShow = 'Pasirinkite bent vieną stulpelį išvedimui';
$strHebrew = 'Žydų';
$strHomepageOfficial = 'Oficialus phpMyAdmin tinklapis';
$strHome = 'Pradinis';
$strHost = 'Darbinė stotis';
$strHostEmpty = 'Tuščias prisijungimo adresas!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Vengrų';

$strIcelandic = 'Islandų';
$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIgnore = 'Ignoruoti';
$strIgnoreInserts = 'Ignoruoti INSERT užklausas.';
$strImportFiles = 'Importuoti bylas';
$strIndexes = 'Indeksai';
$strIndexHasBeenDropped = 'Indeksas %s panaikintas';
$strIndex = 'Indeksas';
$strIndexName = 'Indekso vardas&nbsp;:';
$strIndexType = 'Indekso tipas&nbsp;:';
$strIndexWarningTable = 'Iškilo problemos su `%s` lentelės indeksais';
$strInnoDBBufferPoolSize = 'Buferio pool\'o dydis';
$strInnoDBDataFilePath = 'Duomenų failai'; 
$strInnoDBDataHomeDirDesc = 'Bendra direktorijų kelio dalis visiems InnoDB duomenų failams.';
$strInnodbStat = 'InnoDB būsena';
$strInsecureMySQL = 'Jūsų parinkčių byloje yra nurodyti standartiniai nustatymai (pvz: root vartotojas be slaptažožio). Taip sutinkinta MySQL darbinė stotis yra nesaugi, bei gali būti atvira įsilaužimams, todėl rekomenduojame pakeisti šias parinktis.';
$strInsertAsNewRow = 'Įterpti naują įrašą';
$strInsertedRowId = 'Įterptos eilutės id:';
$strInsertedRows = 'Įterptą eilučių:';
$strInsert = 'Įterpti';
$strInternalNotNecessary = '* Galite nenaudoti vidinių sąryšių, jeigu jie jau apibrėžti InnoDB.';
$strInternalRelations = 'Vidiniai sąryšiai';
$strInUse = 'šiuo metu naudojama';

$strJapanese = 'Japonų';
$strJumpToDB = 'Pereiti į &quot;%s&quot; duombazę.';
$strJustDeleteDescr = 'Kol nėra perkrautos privilegijos, &quot;pašalinti&quot; vartotojai gali prisijungti prie MySQL darbinės stoties.';
$strJustDelete = 'tik pašalinti vartotojus iš privilegijų lentelės.';

$strKeepPass = 'Nekeisti slaptažodžio';
$strKeyname = 'Raktinis žodis';
$strKill = 'Stabdyti procesą';
$strKorean = 'Korėjiečių';

$strLandscape = 'Peizažinis';
$strLatexCaption = 'Lentelės antraštė';
$strLatexContent = 'Lentelės __TABLE__ turinys';
$strLatexContinuedCaption = 'Lentelės antraštė (tęsinys)';
$strLatexContinued = '(tęsinys)';
$strLatexIncludeCaption = 'Įterpti lentelės antraštę';
$strLatexLabel = 'Pavadinimo raktas';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Lentelės __TABLE__ struktūra';
$strLatvian = 'Latvių';
$strLengthSet = 'Ilgis/reikšmės*';
$strLimitNumRows = 'Eilučių skaičius puslapyje';
$strLinesTerminatedBy = 'Eilutės pabaigos žymė';
$strLinkNotFound = 'Sąryšis nerastas';
$strLinksTo = 'Sąryšis su';
$strLithuanian = 'Lietuvių';
$strLocalhost = 'Lokali darbinė stotis';
$strLocationTextfile = 'Tekstiniai SQL užklausų failai';
$strLoginInformation = 'Prisijungimo informacija';
$strLogin = 'Įsiregistruoti';
$strLogout = 'Išsiregistruoti';
$strLogPassword = 'Slaptažodis:';
$strLogServer = 'Darbinė stotis';
$strLogUsername = 'Vartotojo vardas:';
$strLongOperation = 'Operacija gali užtrukti. Tęsti?';

$strMaximumSize = 'Didžiausias dydis: %s%s';
$strMbExtensionMissing = 'Nebuvo rastas PHP išplėtimas mbstring ir panašu, kad Jūs naudojate multibyte simbolių kodaciją. Be mbstring plėtinio phpMyAdmin negali tesingai skaidyti stringų, todėl galite sulaukti netikėtų rezultatų.';
$strMbOverloadWarning = 'Savo PHP konfigūracijoje Jūs įjungėte mbstring.func_overload. Šis nustatymas nėra suderinamas su phpMyAdmin ir gali pažeisti Jūsų duomenis!';
$strMIME_available_mime = 'Galimi MIME-tipai';
$strMIME_available_transform = 'Galimos transformacijos';
$strMIME_description = 'Paaiškinimas';
$strMIME_MIMEtype = 'MIME tipai';
$strMIME_nodescription = 'Ši transformacija neturi paaiškinimo.<br />Klauskite autoriaus ką %s daro.';
$strMIME_transformation = 'Naršyklės transformacija';
$strMIME_transformation_note = 'Norėdami gauti pilną sąrašą galimų transformacijų ir jų MIME tipų transformacijų, spauskite %stransformacijos paaiškinimą%s';
$strMIME_transformation_options_note = 'Prašome įvesti transformacijos nustatymų reikšmes naudodami tokį įvedimo formatą: \'a\', 100, b,\'c\'...<br />Jeigu tarp šių reikšmių prisireiks panaudoti viršutinį vertikalų pasvirą brūkšnį ("\") arba viengubą kabutę ("\'"), naudokite viršutinį vertikalų pasvirą brūkšnį prieš šiuos simbolius (pvz: \'\\\\xyz\' ar \'a\\\'b\').';
$strMIME_transformation_options = 'Transformacijos nustatymai';
$strMIMETypesForTable = 'MIME tipai lentelei';
$strMIME_without = 'MIME tipai atspausdinti pasvirusiu šriftu neturi atskirų transformacijos funkcijos.';
$strModifications = 'Pakeitimai išsaugoti';
$strModifyIndexTopic = 'Keisti indeksą';
$strModify = 'Keisti';
$strMoveTableOK = 'Lentelė %s perkelta į %s.';
$strMoveTable = 'Perkelti lentelė į (duombazė<b>.</b>lentelė):';
$strMoveTableSameNames = 'Negalima perkelti lentelės į ją pačią!';
$strMultilingual = 'daugiakalbis';
$strMyISAMMaxExtraSortFileSize = 'Maksimalus laikinų failų dydis kuriant indeksus';
$strMyISAMMaxSortFileSizeDesc = 'Maksimalus MySQL\'ui leistinas laikinų failų dydis perkuriant MyISAM indeksus (vykdant REPAIR TABLE, ALTER TABLE arba LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maksimalus laikinų rūšiavimo failų dydis';
$strMyISAMRecoverOptions = 'Automatinio atstatymo režimas';
$strMyISAMRecoverOptionsDesc = 'Režimas, skirtas automatiniam nusprogusių MyISAM lentelių atstatymui, kuris nurodomas per --myisam-recover serverio startavimo parametrą.';
$strMyISAMRepairThreadsDesc = 'Jei ši reikšmė yra didesnė už 1, vykdant Repair, rūšiavimo procesas MyISAM lentelių indeksus kuria lygegrečiai (kiekvieną indeksą savo gijoje).';
$strMyISAMSortBufferSize = 'Rūšiavimo buferio dydis';
$strMySQLCharset = 'MySQL koduotė';
$strMySQLConnectionCollation = 'MySQL prisijungimo rūšiavimas';
$strMySQLSaid = 'MySQL atsakymas: ';
$strMySQLShowProcess = 'Rodyti procesus';
$strMySQLShowStatus = 'Rodyti MySQL aplinkos būseną';
$strMySQLShowVars = 'Rodyti MySQL sistemos kintamuosius';

$strName = 'Pavadinimas';
$strNext = 'Sekantis';
$strNoActivity = 'Daugiau nei %s sekundžių nebuvo atlikta jokių veiksmų. Prašau įsiloginti išnaujo.';
$strNoDatabases = 'Nėra duombazių';
$strNoDatabasesSelected = 'Nepažymėjote duombazės.';
$strNoDescription = 'Aprašymo nėra';
$strNoDetailsForEngine = 'Apie šio Saugojimo Variklio būseną nėra išsamios informacijos.';
$strNoDropDatabases = '"DROP DATABASE" komandos įvykdyti negalima.';
$strNoExplain = 'Praleisti SQL užklausos aiškinimą';
$strNoFrames = 'phpMyAdmin draugiškesnis su <b>rėmelius</b> palaikančiomis naršyklėmis.';
$strNoIndex = 'Neaprašyti indeksai!';
$strNoIndexPartsDefined = 'Neaprašytos indekso dalys!';
$strNoModification = 'Nėra pakeitimų';
$strNo = 'Ne';
$strNone = 'Nėra';
$strNoOptions = 'Šis formatas neturi nustatymų';
$strNoPassword = 'Nėra slaptažodžio';
$strNoPermission = 'Nėra teisių išsaugoti bylai %s.';
$strNoPhp = 'be PHP kodo';
$strNoPrivileges = 'Nėra privilegijų';
$strNoRights = 'Neturite pakankamai teisių';
$strNoRowsSelected = 'Nepasirinkti įrašai';
$strNoSpace = 'Nėra pakankamai vietos išsaugoti bylai %s.';
$strNoTablesFound = 'Duombazėje nerasta lentelių.';
$strNoThemeSupport = 'Temos nėra palaikomos, patikrinkite savo konfigūraciją  ir/arba savo temų direktoriją %s.';
$strNotNumber = 'Įveskite skaičių!';
$strNotOK = 'Negerai';
$strNotSet = 'Lentelė <b>%s</b> nerasta arba nenurodyta %s byloje';
$strNoUsersFound = 'Nerasta vartotojo(ų).';
$strNoValidateSQL = 'Praleisti SQL užklausos tikrinimą';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s atitikmuo(enys) lentelėje <i>%s</i>';
$strNumSearchResultsTotal = '<b>Viso:</b> <i>%s</i> atitikmuo(enys)';
$strNumTables = 'Lentelės';

$strOK = 'Gerai';
$strOperations = 'Veiksmai';
$strOptimizeTable = 'Optimizuoti';
$strOr = 'Arba';
$strOverhead = 'Perteklius';
$strOverwriteExisting = 'Perrašyti esančias bylas';

$strPageNumber = 'Puslapis:';
$strPaperSize = 'Lapo dydis';
$strPartialText = 'Tekstus rodyti dalinai';
$strPasswordChanged = 'Vartotojo %s slaptažodis sėkmingai pakeistas.';
$strPasswordEmpty = 'Tuščias slaptažodis!';
$strPasswordHashing = 'Slaptažodžių Hešavimas';
$strPasswordNotSame = 'Slaptažodžiai nesutampa!';
$strPassword = 'Slaptažodis';
$strPdfDbSchema = 'Duombazės "%s" schema - %s puslapis';
$strPdfInvalidTblName = 'Lentelė "%s" neegzistuoja!';
$strPdfNoTables = 'No tables';
$strPerHour = 'per valandą';
$strPerMinute = 'per minutę';
$strPerSecond = 'per sekundę';
$strPersian = 'Persų';
$strPhoneBook = 'telefonų knyga';
$strPHP40203 = 'Jūs naudojate PHP 4.2.3 versiją, kurioje yra rimta klaida, susiijusi su daugiabaičiais stringais (mbstring). Daugiau informacijos rasite PHP klaidų pranešime Nr.19404. <strong>NEREKOMENDUOJAME naudoti šios PHP versijos su phpMyAdmin</strong>.';
$strPhp = 'PHP kodas';
$strPHPVersion = 'PHP versija';
$strPmaDocumentation = 'phpMyAdmin\'o dokumentacija';
$strPmaUriError = 'Reikia parinkčių byloje įrašyti <tt>$cfg[\'PmaAbsoluteUri\']</tt> reikšmę!';
$strPolish = 'Lenkų';
$strPortrait = 'Portretinis';
$strPos1 = 'Pradžia';
$strPrevious = 'Praėjęs';
$strPrimaryKeyHasBeenDropped = 'Panaikintas pirminis raktas';
$strPrimaryKeyName = 'Pirminio rakto pavadinimas turi būti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>yra vienintelis</b> pirminio rakto tipas!)';
$strPrimary = 'Pirminis';
$strPrint = 'Spausdinti';
$strPrintViewFull = 'Spausdinti vaizdą (su pilnai tekstais)';
$strPrintView = 'Spausdinti struktūrą';
$strPrivDescAllPrivileges = 'Įtraukti visas teises, išskyrus GRANT.';
$strPrivDescAlter = 'Leisti keisti jau egzistuojančių lenetelių struktūrą.';
$strPrivDescCreateDb = 'Leisti kurti naujas duombazes ir lenteles.';
$strPrivDescCreateTbl = 'Leisti kurti naujas lenteles.';
$strPrivDescCreateTmpTable = 'Leisti kurti laikinas lenteles.';
$strPrivDescCreateUser = 'Leidžia kurti, šalinti ir pervadinti vartotojus.';
$strPrivDescCreateView = 'Leidžia sukurti naujus view\'us.';
$strPrivDescDelete = 'Leisti šalinti duomenis.';
$strPrivDescDropDb = 'Leisti šalinti duombazes ir lenteles.';
$strPrivDescDropTbl = 'Leisti šalinti lenteles.';
$strPrivDescExecute = 'Leisti vykdyti išsaugotas procedūras; Negalioja šioje MySQL versijoje.';
$strPrivDescFile = 'Leisti įterpti ir eksportuoti duomenis iš bylų.';
$strPrivDescGrant = 'Leisti įterpti naujus vartotojus, bei prisikirti privilegijas, neperkraunant privilegijų lentelės.';
$strPrivDescIndex = 'Leisti įterpti ir modifikuoti indeksus.';
$strPrivDescInsert = 'Leisti įterpti ir modifikuoti duomenis.';
$strPrivDescLockTables = 'Leisti užrakinti lenteles procesų metu.';
$strPrivDescMaxConnections = 'Riboti prisijungimų kiekį per valandą.';
$strPrivDescMaxQuestions = 'Riboti užklausų kiekį per valandą';
$strPrivDescMaxUpdates = 'Riboti komandų (kurios vienaip ar kitaip modifikuoja lenteles ar duombazes) kiekį per valandą.';
$strPrivDescProcess3 = 'Leisti išjungti kitų vartotojų procesus.';
$strPrivDescProcess4 = 'Leisti peržiūrėti procesų sąraše pilną užklausų sąrašą.';
$strPrivDescReferences = ' Negalioja šioje MySQL versijoje.';
$strPrivDescReload = 'Leisti perkrauti darbinę stotį, bei išvalyti laikinąją atmintį (cache).';
$strPrivDescReplClient = 'Leisti vartotojo užklausas dėl atstatymo master / slave darbinių stočių.';
$strPrivDescReplSlave = 'Reikalinga atstatyti slave darbinei stočiai';
$strPrivDescSelect = 'Leisti skaityti duomenis.';
$strPrivDescShowDb = 'Suteikti prieigą prie visų duombazių.';
$strPrivDescShowView = 'Leidžia vykdyti SHOW CREATE VIEW užklausas.';
$strPrivDescShutdown = 'Leisti išjungti serverį.';
$strPrivDescSuper = 'Leisti prisijungti, kai viršytas prisijungimų kiekis; Reikalinga daugumai administratoriaus darbų, tokių kaip globalių reikšmių modifikavimui ar vartotojų atjungimui.';
$strPrivDescUpdate = 'Leisti modifikuoti duomenis.';
$strPrivDescUsage = 'Be teisių.';
$strPrivileges = 'Privilegijos';
$strPrivilegesReloaded = 'Teisės sėkmingai perkrautos.';
$strProcesses = 'Procesai';
$strProcesslist = 'Procesų sąrašas';
$strPutColNames = 'Stulpelių pavadinimus įrašyti pirmoje eilutėje';

$strQBEDel = 'Pakeičiant';
$strQBEIns = 'Įterpiant';
$strQBE = 'SQL&nbsp;užklausa';
$strQueryFrame = 'Užklausų langas';
$strQueryOnDb = 'SQL-užklausa duombazėje <b>%s</b>:';
$strQuerySQLHistory = 'SQL užklausų istorija';
$strQueryStatistics = '<b>Užklausų statistika</b>: nuo paleidimo dienos buvo išsiųsta %s užklausų į serverį.';
$strQueryTime = 'Užklausa užtruko %01.4f sek.';
$strQueryType = 'Užklausos tipas';
$strQueryWindowLock = 'Nekeisti šios užklausos už aktyvaus lango ribų.';

$strReadRequests = 'Read užklausos';
$strReceived = 'Gauta';
$strRecords = 'Viso įrašų:';
$strReferentialIntegrity = 'Patikrinti sąryšių vientisumą:';
$strRefresh = 'Atnaujinti';
$strRelationalSchema = 'Ryšių schema';
$strRelationNotWorking = 'Nėra PMA lentelių, kurios leidžia dirbti su jungtinėmis MySQL lentelėmis. %sPaaiškinimas%s.';
$strRelationsForTable = 'RELATIONS FOR TABLE';
$strRelations = 'Sąryšiai';
$strRelationView = 'Peržiūrėti sąryšius';
$strReloadingThePrivileges = 'Perkraunamos privilegijos';
$strRemoveSelectedUsers = 'Pašalinti pažymėtus vartotojus';
$strRenameDatabaseOK = 'Duombazė %s pervadinta į %s';
$strRenameTableOK = 'Lentelė %s pervadinta į %s';
$strRenameTable = 'Pervadinti lentelę į';
$strRepairTable = 'Redaguoti';
$strReplaceNULLBy = 'Pakeisti NULL į';
$strReplaceTable = 'Pakeisti lentelės turinį failo duomenimis ';
$strReset = 'Atstatyti į pradinę būseną';
$strResourceLimits = 'Išteklių apribojimai';
$strReType = 'Įveskite dar kartą';
$strRevokeAndDeleteDescr = 'Kol nėra perkrautos privilegijos, vartotojai dar turės privilegiją USAGE.';
$strRevokeAndDelete = 'Panaikinti visas aktyvias vartotojų privilegijas ir pašalinti vartotojus.';
$strRevokeMessage = 'Jūs panaikinote privilegijas %s';
$strRevoke = 'Panaikinti';
$strRomanian = 'Rumunų';
$strRowLength = 'Eilutės ilgis';
$strRows = 'Eilutės';
$strRowsFrom = 'eilučių pradedant nuo';
$strRowSize = 'Eilutės dydis';
$strRowsModeFlippedHorizontal = 'horizontalūs (pasukti pavadinimai)';
$strRowsModeHorizontal = 'horizontaliai';
$strRowsModeOptions = 'išdėstant  %s pakartoti antraštes kas %s įrašų';
$strRowsModeVertical = 'vertikaliai';
$strRowsStatistic = 'Eilučių statistika';
$strRunning = 'adresu %s';
$strRunQuery = 'Vykdyti užklausą';
$strRunSQLQuery = 'Vykdyti SQL sakinius duombazėje <strong>%s</strong>';
$strRussian = 'Rusų';

$strSave = 'Išsaugoti';
$strSaveOnServer = 'Išsaugoti serveryje, kataloge pavadinimu %s';
$strScaleFactorSmall = 'Dydžio matas yra per mažas norint sutalpinti vaizdą viename lape.';
$strSearchFormTitle = 'Paieška duombazėje';
$strSearchInTables = 'Lentelės(ių) viduje:';
$strSearchNeedle = 'Paieškos žodis(iai) arba reikšmė(ės) (pakaitos simbolis: "%"):';
$strSearchOption1 = 'bent vienas iš žodžių';
$strSearchOption2 = 'visi žodžiai';
$strSearchOption3 = 'ištisa frazė';
$strSearchOption4 = 'kaip reguliarųjį išsireiškimą';
$strSearch = 'Paieška';
$strSearchResultsFor = 'Paieškos rezultatai frazei "<i>%s</i>" %s:';
$strSearchType = 'Rasti:';
$strSecretRequired = 'Nustatymų byloje nurodykite slaptą frazę (blowfish_secret).';
$strSelectADb = 'Pasirinkite duombazę';
$strSelectAll = 'Išrinkti visas(us)';
$strSelectBinaryLog = 'Pasirinkite binarinį logą peržiūrai';
$strSelectFields = 'Pasirinkti laukus (nors vieną)';
$strSelectNumRows = 'užklausą vykdoma';
$strSelectTables = 'Pasirinkite lenteles';
$strSend = 'Išsaugoti į failą';
$strSent = 'Siųsta';
$strServerChoice = 'Pasirinkti serverį';
$strServerNotResponding = 'Serveris neatsako';
$strServer = 'Serveris';
$strServerStatusUptime = 'MySQL serverio veikimo trukmė: %s. Serveris pradėjo veikti: %s.';
$strServerStatus = 'Veikimo informacija';
$strServerTabVariables = 'Kintamieji';
$strServerTrafficNotes = '<b>Serverio apkrovimas</b>: šiose lentelėse saugoma statistinė informacija apie MySQL serverio apkrovimą nuo paleidimo dienos.';
$strServerVars = 'Serverio kintamieji ir nustatymai';
$strServerVersion = 'Serverio versija';
$strSessionValue = 'Sesijos reikšmė';
$strSetEnumVal = 'Jeigu laukelio tipas yra "enum" arba "set", tuomet duomenų reikšmes reikia įvesti naudojant šį formatą: \'a\',\'b\',\'c\'...<br />. Jeigu jums reikia įrašyti dešininį įžambųjį brūkšnį ("\") arba kabutes("\'"), tuomet prieš šios simbolius reikia papildomo dešininio įžambaus brūkšnio (pavyzdžiui: \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Rodyti viską';
$strShowColor = 'Rodyti spalvą';
$strShowDatadictAs = 'Duomenų žodyno formatas';
$strShowFullQueries = 'Rodyti pilnas užklausas';
$strShowGrid = 'Rodyti tinklelį';
$strShowingRecords = 'Rodomi įrašai';
$strShowPHPInfo = 'Rodyti PHP informaciją';
$strShow = 'Rodyti';
$strShowTableDimension = 'Rodyti lentelių dydžius';
$strShowTables = 'Rodyti lentelės';
$strShowThisQuery = ' Rodyti šią užklausą vėl ';
$strSimplifiedChinese = 'Supaprastinta Kiniečių';
$strSingly = '(pavieniui)';
$strSize = 'Dydis';
$strSlovak = 'Slovakų';
$strSlovenian = 'Slovėnų';
$strSocketProblem = '(arba vietiniai MySQL serverio socketai yra blogai sukonfigūruoti)';
$strSortByKey = 'Rūšiuoti pagal raktą';
$strSort = 'Rūšiuoti';
$strSpaceUsage = 'Vietos naudojimas';
$strSpanish = 'Ispanų';
$strSplitWordsWithSpace = 'Žodžiai atskirti tarpo simboliu (" ").';
$strSQLExportType = 'Eksporto tipas';
$strSQLParserBugMessage = 'Klaidą SQL interpretatoriuje. Prašome patikrinti  ar SQL užklausoje teisingai naudojamos kabutės. Kita, galima klaida, jog Jūs bandote atsiųsti dvejetainius (binary) duomenis neapskliaustus kabutėmis. Taip pat Jūs galite pabandyti įvykdyti savo užklausą iš MySQL konsolės. MySQL serverio išvesta informacija apie klaidą (jeigu tokių bus) gali padėti Jums nustatyti klaidos priežastį. Jeigu užklausa sėkmingai įvykdoma konsolėje, o SQL interpretatorius vistiek išveda pranešimus apie klaidas, prašome supaprastinite savo SQL užklausą ir perduodamų duomenų kiekį užklausoje ir praneškite apie klaidą programos kūrėjams su žemiau pateikiama informacija:';
$strSQLParserUserError = 'Klaida SQL užklausoje. Žemiau išvestas MySQL serverio pranešimas (jeigu toks yra), turėtų padėti Jums nustatyti klaidos priežastį';
$strSQLQuery = 'SQL užklausa';
$strSQLResult = 'SQL rezultatas';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Klaidingas vardas';
$strSQPBugUnclosedQuote = 'Trūksta uždaromosios kabutės';
$strSQPBugUnknownPunctuation = 'Klaidinga skyryba';
$strStatCheckTime = 'Paskutinis patikrinimas';
$strStatCreateTime = 'Sukurta';
$strStatement = 'Parametrai';
$strStatUpdateTime = 'Paskutinis atnaujinimas';
$strStatus = 'Statusas';
$strStorageEngine = 'Saugojimo Variklis';
$strStorageEngines = 'Saugojimo Varikliai';
$strStrucCSV = 'Duomenys CSV formatu';
$strStrucData = 'Struktūra ir duomenys';
$strStrucExcelCSV = 'Duomenys ekselio CSV formatu';
$strStrucNativeExcel = 'MS Excel duomenys';
$strStrucOnly = 'Tik struktūrą';
$strStructPropose = 'Analizuoti lentelės struktūrą';
$strStructure = 'Struktūra';
$strSubmit = 'Siųsti';
$strSuccess = 'Jūsų SQL užklausa sėkmingai įvykdyta';
$strSum = 'Sumos';
$strSwedish = 'Švedų';
$strSwitchToDatabase = 'Pereiti į nukopijuotą duombazę';
$strSwitchToTable = 'Pereiti į lentelės kopiją';

$strTableComments = 'Lentelės komentarai';
$strTableEmpty = 'Tuščias lentelės vardas!';
$strTableHasBeenDropped = 'Lentelė %s panaikinta';
$strTableHasBeenEmptied = 'Lentelės reikšmės %s ištuštintos';
$strTableHasBeenFlushed = 'Lentelės buferis  %s išvalytas';
$strTable = 'Lentelė';
$strTableMaintenance = 'Lentelės diagnostika';
$strTableOfContents = 'Turinys';
$strTableOptions = 'Lentelės parinktys';
$strTables = '%s lentelė(s)';
$strTableStructure = 'Sukurta duomenų struktūra lentelei';
$strTakeIt = 'pasirinkti';
$strTblPrivileges = 'Specifinės lentelių privilegijos';
$strTextAreaLength = ' Tai yra jo ilgis,<br /> šis laukelis neredaguojamas ';
$strThai = 'Tailando';
$strTheme = 'Tema / Stilius';
$strThisHost = 'Dabartinis serveris';
$strThreadSuccessfullyKilled = '%s buvo sėkmingai išjungtas.';
$strTime = 'Laikas';
$strToggleScratchboard = 'įjungti scratchboard';
$strTotal = ' iš viso ';
$strTotalUC = 'Viso';
$strTraditionalChinese = 'Tradicinė Kiniečių';
$strTraditionalSpanish = 'Tradicinė ispanų';
$strTraffic = 'Apkrovimas';
$strTransformation_application_octetstream__download = 'Įšvesti nuorodą dvejetainių lauko duomenų atsisiuntimui. Pirmas parametras - dvejetainių lauko duomenų bylos pavadinimas. Antras parametras - galimas lentelės eilutės lauko turinčio bylą pavadinimas. Jeigu pateiksite antrą parametrą, ištrinkite pirmojo parametro reikšmę.';
$strTransformation_image_jpeg__inline = 'Parodo aktyvų mažinį; nustatymai: plotis,aukštis pikseliais (išsaugo originalų santykį)';
$strTransformation_image_jpeg__link = 'Išvedama nuoroda į šį paveikslėlį (tiesioginis blob atsisiuntimas ir pan.).';
$strTransformation_image_png__inline = 'Žr. image/jpeg: vidų';
$strTransformation_text_plain__external = 'LINUX VARTOTOJAMS: Paleidžiama išorinė aplikacija ir duomenys imami iš standartinio įvedimo. Išvedama iš aplikacijos gauta informacija. Nutylint: bus Tidy korektiškam HTML kodo išvedimui. Saugumo sumetimais Jūs turite paredaguoti libraries/transformations/text_plain__external.inc.php bylą ir įvesti tas aplikacijas, kurias naudosite. Pirmas parametras yra leidžiamų aplikacijų kiekis, kurias naudosite. Antras parametras yra specifiniai aplikacijų raktai. Jeigu trečias parametras lygus 1, tai išvedama informacija bus apdorota su htmlspecialchars() (nutylint: reikšmė lygi 1). Jeigu ketvirtas parametras lygus 1, tai išvedimo lentelės celė turės atributą NOWRAP, tam kad išvedama būtų atvaizduota be perkėlimų į kitas eilutes (nutylint: reikšmė lygi 1).';
$strTransformation_text_plain__formatted = 'Išsaugo originalų lauko apipavidalinimą. Nevykdomas išvengimas.';
$strTransformation_text_plain__imagelink = 'Gražinamas paveikslėlis ir nuoroda į įvedimo lauke įrašytą bylos pavadinimą; argumentai: prefiksas (pvz "http://domain.com/"), plotis (pikseliais), aukštis (pikseliais).';
$strTransformation_text_plain__link = 'Gražinama nuoroda į įvedimo lauke įrašytą bylos pavadinimą; argumentai: prefiksas (pvz "http://domain.com/"), nuorodos pavadinimas.';
$strTransformation_text_plain__substr = 'Rodoma tik dalis teksto. Pirmas parametras nurodo išvedamo teksto pradžią (nutylint: 0). Antrasis parametras nurodo išvedamo teksto kiekį. Jeigu antras parametras nenurodytas tai bus išvestas visas tekstas. Trečiasis parametras nurodo kurios raidės bus prijungtos prie išvedimo teksto (nutylint: ...).';
$strTruncateQueries = 'Trumpinti rodomas užklausas';
$strTurkish = 'Turkų';
$strType = 'Tipas';

$strUkrainian = 'Ukrainiečių';
$strUncheckAll = 'Nepažymėti visus(as)';
$strUnicode = 'Unicodas';
$strUnique = 'Unikalus';
$strUnknown = 'nežinoma';
$strUnselectAll = 'Nepažymėti visus(as)';
$strUpdatePrivMessage = 'Jūs pakeitėte privilegijas  %s.';
$strUpdateProfileMessage = 'Profilis papildytas.';
$strUpdateQuery = 'Atnaujinti užklausą';
$strUpdComTab = 'Informaciją, kaip atnaujinti Column_comments lentelę, galite rasti dokumentacijoje.';
$strUpgrade = 'Rekomenduojame atnaujint %s iki %s ar vėlesnės versijos.';
$strUsage = 'Išnaudota';
$strUseBackquotes = 'Lentelių ir laukų vardams naudoti šias kabutes ` `';
$strUseHostTable = 'Naudoti Host lentelę';
$strUserAlreadyExists = 'Vartotojas %s jau yra!';
$strUserEmpty = 'Tuščias vartotojo vardas!';
$strUserName = 'Vartotojo vardas';
$strUserNotFound = 'Privilegijų lentelėje pasirinktas vartotojas nerastas.';
$strUserOverview = 'Vartotojų peržiūra';
$strUsersDeleted = 'Pažymėti vartotojai sėkmingai pašalinti.';
$strUsersHavingAccessToDb = 'Vartotojai turintys priėjimą prie &quot;%s&quot;';
$strUser = 'Vartotojas';
$strUseTabKey = 'Šokinėjimui tarp reikšmių naudokite TAB mygtuką arba naudokite CTRL+rodyklės';
$strUseTables = 'Naudoti lenteles';
$strUseTextField = 'Naudokite teksto įvedimo lauką';
$strUseThisValue = 'Naudokite šią reikšmę';

$strValidateSQL = 'Patikrinti SQL užklausą';
$strValidatorError = 'Neveikia SQL interpretatorius. Prašome patikrinkite ar yra suinstaliuoti visi privalomi php moduliai, nurodyti %sdokumentacijoje%s.';
$strValue = 'Reikšmė';
$strVar = 'Kintamasis';
$strVersionInformation = 'Versijos informacija';
$strViewDumpDatabases = 'Peržiūrėti duombazių išrašą';
$strViewDumpDB = 'Sukurti, peržiūrėti duombazės atvaizdį';
$strViewDump = 'Peržiūrėti lentelės struktūros atvaizdį';
$strViewHasBeenDropped = 'View\'as %s buvo panaikintas';
$strView = 'View\'as';

$strWebServerUploadDirectoryError = 'Nepasiekimas nurodytas www-serverio katalogas atsiuntimams.';
$strWebServerUploadDirectory = 'web serverio katalogas atsiuntimams';
$strWelcome = 'Jūs naudojate %s';
$strWestEuropean = 'Vakarų Europos';
$strWildcard = 'pakaitos simbolis';
$strWindowNotFound = 'Tikslo langas neatnaujintas. Galbūt Jūs uždarėte pagrindinį langą arba Jūsų naršyklė blokuoja atnaujinimus tarp langų dėl nustatyto saugumo.';
$strWithChecked = 'Pasirinktas lenteles:';
$strWriteRequests = 'Write užklausos';
$strWrongUser = 'Neteisingas vartotojo vardas arba slaptažodis. Priėjimas uždraustas.';

$strXML = 'XML';

$strYes = 'Taip';

$strZeroRemovesTheLimit = 'Pastaba: nėra jokių apribojimų jeigu reikšmė nurodyta lygi 0 (nuliui).';
$strZip = '"zip"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate

$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strBufferPoolActivity = 'Buferio Pool\'o veikla';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBusyPages = 'Busy pages';  //to translate

$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strCSV = 'CSV';  //to translate

$strDataPages = 'Pages containing data';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEsperanto = 'Esperanto';  //to translate

$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFreePages = 'Free pages';  //to translate

$strHandler = 'Handler';  //to translate

$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';  //to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  //to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';  //to translate
$strInnoDBDataHomeDir = 'Data home directory';  //to translate
$strInnoDBPages = 'pages';  //to translate
$strInvalidAuthMethod = 'Invalid authentication method set in configuration:';  //to translate
$strInvalidColumnCount = 'Column count has to be larger than zero.';  //to translate
$strInvalidColumn = 'Invalid column (%s) specified!';  //to translate
$strInvalidCSVFieldCount = 'Invalid field count in CSV input on line %d.';  //to translate
$strInvalidCSVFormat = 'Invalid format of CSV input on line %d.';  //to translate
$strInvalidCSVParameter = 'Invalid parameter for CSV import: %s';  //to translate
$strInvalidFieldAddCount = 'You have to add at least one field.';  //to translate
$strInvalidFieldCount = 'Table must have at least one field.';  //to translate
$strInvalidLDIImport = 'This plugin does not support compressed imports!';  //to translate
$strInvalidRowNumber = '%d is not valid row number.';  //to translate
$strInvalidServerHostname = 'Invalid hostname for server %1$s. Please review your configuration.';  //to translate
$strInvalidServerIndex = 'Invalid server index: "%s"';  //to translate

$strJoins = 'Joins';  //to translate

$strKeyCache = 'Key cache';  //to translate

$strLanguageUnknown = 'Unknown language: %1$s.';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMyISAMDataPointerSize = 'Data pointer size';  //to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';  //to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';  //to translate
$strMyISAMRepairThreads = 'Repair threads';  //to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate

$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOperator = 'Operator';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate

$strReloadPrivileges = 'Reload privileges';  //to translate
$strReplication = 'Replication';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strServerStatusDelayedInserts = 'Delayed inserts';  //to translate
$strShowingBookmark = 'Showing bookmark';  //to translate
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
$strSorting = 'Sorting';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
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
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate

$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate

$strQueryResultsOperations = 'Query results operations';  //to translate
$strAddClause = 'Add %s';  //to translate
$strUploadsNotAllowed = 'File uploads are not allowed on this server.';  //to translate
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';  //to translate
$strExportMustBeFile = 'Selected export type has to be saved in file!';  //to translate
$strCreateUserDatabase = 'Database for user';  //to translate
$strCreateUserDatabaseNone = 'None';  //to translate
$strCreateUserDatabaseName = 'Create database with same name and grant all privileges';  //to translate
$strCreateUserDatabaseWildcard = 'Grant all privileges on wildcard name (username\_%)';  //to translate
$strOpenDocumentText = 'Open Document Text';  //to translate
$strNoDataReceived = 'No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.';  //to translate
$strCanNotLoadExportPlugins = 'Could not load export plugins, please check your installation!';  //to translate
$strErrorRenamingTable = 'Error renaming table %1$s to %2$s';  //to translate
$strInvalidTableName = 'Invalid table name';  //to translate
$strInvalidDatabase = 'Invalid database';  //to translate
$strServers = 'Servers';  //to translate
$strDelimiter = 'Delimiter';  //to translate
$strFunctions = 'Functions';  //to translate
$strProcedures = 'Procedures';  //to translate
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

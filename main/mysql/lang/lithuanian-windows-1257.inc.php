<?php
/* $Id: lithuanian-windows-1257.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

$charset = 'windows-1257';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = '�';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sekmadienis', 'Pirmadienis', 'Antradienis', 'Tre�iadienis', 'Ketvirtadienis', 'Penktadienis', '�e�tadienis');
$month = array('Sausio', 'Vasario', 'Kovo', 'Baland�io', 'Gegu�io', 'Bir�elio', 'Liepos', 'Rugpj��io', 'Rugs�jo', 'Spalio', 'Lapkri�io', 'Gruod�io');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = ' %Y m. %B %d d.  %H:%M';
$timespanfmt = '%s d., %s val., %s min. ir %s s.';

$strAbortedClients = 'Atmestos jungtys';
$strAccessDeniedExplanation = 'phpMyAdmin nepavyko prisijungti prie MySQL darbin�s stoties (jungtis atmesta). Patikrinkite config.inc.php byloje nurodytus duomenis (darbin�s stoties adres�, prisijungimo vard� ir slapta�od�) ir �sitikinkite ar jie sutampa su duomenimis gautais i� darbin�s stoties administratoriaus.';
$strAccessDenied = 'Jungtis ne�manoma';
$strAction = 'Valdymo veiksmai';
$strAddAutoIncrement = 'Prid�ti AUTO_INCREMENT reik�m�';
$strAddConstraints = 'Prid�ti apribojim�';
$strAddDeleteColumn = '�terpti/Trinti stulpelius';
$strAddDeleteRow = '�terpti/Trinti po�ymio eilut�(es)';
$strAddFields = 'Prid�ti %s lauk�(-us)';
$strAddHeaderComment = '�terpti savo komentar� � header srit� (eilu�i� skirtukas \\n )';
$strAddIntoComments = 'Prid�ti � komentarus';
$strAddNewField = '�terpti nauj� laukel�(ius)';
$strAddPrivilegesOnDb = 'Sukurti privilegijas �iai duombazei';
$strAddPrivilegesOnTbl = 'Sukurti privilegijas �iai lentelei';
$strAddSearchConditions = '�terpkite paie�kos s�lygas � "where" sakin�:';
$strAddToIndex = '�terpti indeksui papildomus &nbsp;%s&nbsp;stulpel�(ius)';
$strAddUserMessage = 'J�s suk�r�te nauj� vartotoj�.';
$strAddUser = 'Sukurti nauj� vartotoj�';
$strAdministration = 'Administracija';
$strAffectedRows = 'Pakeista eilu�i�:';
$strAfterInsertBack = 'Sugr��ti � buvus� puslap�';
$strAfterInsertNewInsert = '�terpti sekan�i� nauj� eilut�';
$strAfterInsertNext = 'Redaguoti sekant� �ra��';
$strAfterInsertSame = 'Gr��ti atgal � �� puslap�';
$strAfter = 'Po %s';
$strAllTableSameWidth = 'rodyti visas lenteles vienodo plo�io?';
$strAll = 'Visk�';
$strAlterOrderBy = 'Pakeisti lentel�s r��iavim� pagal:';
$strAnalyzeTable = 'Analizuoti lentel�';
$strAnd = 'IR';
$strAnIndex = 'Indeksas sukurtas %s stulpeliui';
$strAny = 'Bet kur�(i�)';
$strAnyHost = 'Bet kur� prisijungimo adres�';
$strAnyUser = 'Bet kur� vartotoj�';
$strApproximateCount = 'Gali b�ti apytikslis. �i�r�kite DUK 3.11';
$strAPrimaryKey = 'Stulpeliui %s sukurtas PIRMINIS raktas';
$strArabic = 'Arab�';
$strArmenian = 'Arm�n�';
$strAscending = 'Did�jimo tvarka';
$strAtBeginningOfTable = 'Lentel�s prad�ioje';
$strAtEndOfTable = 'Lentel�s pabaigoje';
$strAttr = 'Atributai';
$strAutomaticLayout = 'Automatinis i�d�stymas';

$strBack = 'Atgal';
$strBaltic = 'Balt�';
$strBeginCut = 'KIRPIMO PRAD�IA';
$strBeginRaw = 'RAW PRAD�IA';
$strBinaryDoNotEdit = 'Dvejetainis - nekeisti';
$strBinary = 'Dvejetainis';
$strBinaryLog = 'Binarinis logas';
$strBinLogEventType = 'Event\'o tipas';
$strBinLogInfo = 'Informatcija';
$strBinLogName = 'Logo pavadinimas';
$strBinLogOriginalPosition = 'Pirmin� pad�tis';
$strBinLogPosition = 'Pad�tis';
$strBinLogServerId = 'Serverio ID';
$strBookmarkAllUsers = 'Leisti kitiems vartotojams naudotis �ia �yme';
$strBookmarkDeleted = 'Nuoroda i�trinta.';
$strBookmarkLabel = 'Nuorodos Antra�t�';
$strBookmarkQuery = 'Sukurti nuoroda SQL-u�klausai';
$strBookmarkThis = 'Sukurti nuorod�';
$strBookmarkView = 'Per�i�ra';
$strBrowseForeignValues = 'Nar�yti i�orines reik�mes';
$strBrowse = 'Per�i�r�ti';
$strBufferPool = 'Buferio Pool\'as';
$strBufferPoolUsage = 'Buferio Pool\'o naudojimas';
$strBulgarian = 'Bulgar�';
$strBzError = 'phpMyAdmin negal�jo suspausti lentel�s strukt�ros atvaizd� (dump), nes �ioje php versijoje neveikia Bz2 modulis. Rekomenduojame phpMyAdmin konfig�racin�je byloje <code>$cfg[\'BZipDump\']</code> direktyv� prilyginti <code>FALSE</code>. Atnaujinkite savo php versij�, jeigu norite naudotis Bz2 moduliu. Detalesn� informacija: %s.';
$strBzip = '"bzip"';

$strCalendar = 'Kalendorius';
$strCannotLogin = 'Neprisijungia prie MySQL darbin�s stoties';
$strCantLoad = 'negalima �krauti %s pl�tinio,<br />pasitikrinkite php parinktis';
$strCantLoadRecodeIconv = 'Nepavyko u�krauti <em>iconv</em> arba <em>recode</em> pl�tini�, reikaling� koduot�s kovertavimui. Suteikite PHP teises naudotis �iais i�pl�timais arba i�junkite phpMyAdmin koduot�s konvertavim�. ';
$strCantRenameIdxToPrimary = 'Indeks� pervadinti PIRMINIU nepavyko!';
$strCantUseRecodeIconv = 'Kraunant pl�tini� prane�imus, nepavyko pasinaudoti <em>iconv</em> arba <em>libiconv</em> arba <em>recode_string</em> funkcijomis. Pasitkrinkite PHP parinktis. ';
$strCardinality = 'Element� skai�ius';
$strCaseInsensitive = 'simboli� registras nesvarbus';
$strCaseSensitive = 'simboli� registras svarbus';
$strCentralEuropean = 'Centrin�s Europos';
$strChangeCopyModeCopy = '... palikti sen� vartotoj�.';
$strChangeCopyModeDeleteAndReload = ' ... pa�alinti sen� vartotoj� i� vartotoj� lentel�s ir poto perkrauti privilegijas';
$strChangeCopyModeJustDelete = ' ... pa�alinti sen� vartotoj� i� vartotoj� lentel�s.';
$strChangeCopyModeRevoke = ' ... panaikinti visas privilegijas i� seno vartotojo ir poto j� pa�alinti.';
$strChangeCopyMode = 'Sukurti nauj� vartotoj� su tom pa�iom privilegijom ir ...';
$strChangeCopyUser = 'Pakeisti prisijungimo informacij� / Kopijuoti vartotojo duomenis';
$strChangeDisplay = 'Pasirinkite lauk�, kur� norite per�i�r�ti';
$strChangePassword = 'Pakeisti slapta�od�';
$strChange = 'Redaguoti';
$strCharset = 'Koduot�';
$strCharsetOfFile = 'Simboli� koduot� byloje:';
$strCharsetsAndCollations = 'Simboli� rinkiniai ir Palyginimai';
$strCharsets = 'Koduot�s';
$strCheckAll = 'Pa�ym�ti visk�';
$strCheckOverhead = 'Patikrinti perkrautus';
$strCheckPrivsLong = 'Patikrinti duombaz�s &quot;%s&quot; privilegijas.';
$strCheckPrivs = 'Patikrinti privilegijas';
$strCheckTable = 'Patikrinti lentel�';
$strChoosePage = 'Pasirinkite puslap� redagavimui';
$strColComFeat = 'Stulpeli� komentar� i�vedimas';
$strCollation = 'Palyginimas';
$strColumnNames = 'Stulpeli� vardai';
$strColumnPrivileges = 'Specifin�s stulpeli� privilegijos';
$strCommand = 'Komanda';
$strCommentsForTable = 'COMMENTS FOR TABLE';
$strComments = 'Komentarai';
$strCompatibleHashing = 'Suderinamas sy MySQL&nbsp;4.0';
$strCompleteInserts = 'Visi�kas �terpimas';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin negal�jo perskaityti parink�i� bylos!<br />Tai gal�jo nutikti jeigu <u>php</u> rado byloje vykdymo klaid� arba visai nerando bylos.<br />Pra�ome kreiptis � parink�i� byl� tiesiogiai (naudojantis nuoroda �emiau) ir perskaityti gautus <u>php</u> klaid� prane�im�(us). Daugeliu atveju vienoje/keletoje eilu�i� truksta kabu�i� ir/arba kabliata�kio.<br />Jeigu i�vedamas tu��ias nar�ykl�s langas - viskas tvarkoje (klaid� nepasteb�ta).';
$strConfigureTableCoord = 'Nustatykite lentel�s %s koordinates';
$strConnectionError = 'Ne�manoma prisijungti: neteisingi duomenys.';
$strConnections = 'Prisijungimai';
$strConstraintsForDumped = 'Apribojimai eksportuotom lentel�m';
$strConstraintsForTable = 'Apribojimai lentelei';
$strCookiesRequired = 'Sausain�liai(Cookies) turi b�ti priimami.';
$strCopyDatabaseOK = 'Duombaz� %s buvo nukopijuota � %s';
$strCopy = 'Kopijuoti';
$strCopyTable = 'Kopijuoti lentel� � (duombaz�<b>.</b>lentel�):';
$strCopyTableOK = 'Letel� %s nukopijuota � %s.';
$strCopyTableSameNames = 'Negalima kopijuoti lentel�s � j� pa�i�!';
$strCouldNotKill = 'phpMyAdmin negal�jo i�jungti %s proceso. Gali b�ti jog jis jau u�baig� darb�.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE prie� kopijuojant';
$strCreateIndex = 'Sukurti indeks� &nbsp;%s&nbsp;stulpeliui(iams)';
$strCreateIndexTopic = 'Sukurti nauj� indeks�';
$strCreateNewDatabase = 'Sukurti nauj� duombaz�';
$strCreateNewTable = 'Sukurti nauj� lentel� duombaz�je %s';
$strCreatePage = 'Sukurti nauj� puslap�';
$strCreatePdfFeat = 'PDF bylos generavimas';
$strCreate = 'Sukurti';
$strCreationDates = 'Suk�rimo/Atnaujinimo/Per�i�ros datos';
$strCriteria = 'Kriterijai';
$strCroatian = 'Kroat�';
$strCyrillic = 'Kirylica';
$strCzech = '�ek�';
$strCzechSlovak = '�ek�-Slovak�';

$strDanish = 'Dan�';
$strDatabase = 'Duombaz�';
$strDatabaseEmpty = 'Nenurodytas duombaz�s vardas!';
$strDatabaseExportOptions = 'Duombaz�s eksportavimo parinktys';
$strDatabaseHasBeenDropped = 'Duombaz� %s i�trinta.';
$strDatabasesDropped = 'S�kmingai pa�alintos %s duombaz�s.';
$strDatabases = 'duombaz�s';
$strDatabasesStatsDisable = 'Leisti statistik�';
$strDatabasesStats = 'Duombazi� statistika';
$strDatabasesStatsEnable = 'Neleisti statistikos';
$strDatabasesStatsHeavyTraffic = 'Pastaba: jeigu duombaz�s statistika �jungta - apkrovimas tarp www ir MySQL darbini� sto�i�, gali padid�ti auk��iau normos.';
$strDataDict = 'Duomen� �odynas';
$strData = 'Duomenys';
$strDataOnly = 'Tik duomenys';
$strDBComment = 'Duombaz�s komantaras: ';
$strDBCopy = 'Kopijuoti duombaz� �';
$strDbPrivileges = 'Specifin�s duombazi� privilegijos';
$strDBRename = 'Pervadinti duombaz� �';
$strDbSpecific = 'priklausantis nuo duombaz�s tipo';
$strDefaultEngine = '%s yra default\'inis Saugojimo Variklis �iame MySQL serveryje.';
$strDefault = 'Nutylint';
$strDefaultValueHelp = 'Nenaudokite i�skyrimo simboli� ar kabu�iu, nurodydami reik�m� pagal nutyl�jim�. Naudokit�s �iuo formatu: a';
$strDefragment = 'Defragmentuoti lentel�';
$strDelayedInserts = 'Naudoti u�laikytus �terpimus';
$strDeleteAndFlushDescr = 'Tai yra �variausias b�das, bet privilegij� perkrovimas gali �iek tiek u�trukti.';
$strDeleteAndFlush = 'pa�alinti vartotojus ir perkrauti privilegijas.';
$strDeleted = 'Eilut� i�trinta';
$strDeletedRows = 'Eilut�s i�trintos:';
$strDelete = 'Trinti';
$strDeleting = '�aliname: %s';
$strDelOld = '�is puslapis turi nuorod� � lenteles, kurios jau neegzistuoja. Ar norite pa�alinti �ias nuorodas?';
$strDescending = 'Ma��jimo tvarka';
$strDescription = 'Paai�kinimas';
$strDictionary = '�odynas';
$strDisabled = 'I�jungta';
$strDisableForeignChecks = 'Atsisakyti i�orini� rakt� tikrinimo';
$strDisplayFeat = 'I�vedimo s�vyb�s';
$strDisplayOrder = 'Atvaizdavimo tvarka:';
$strDisplayPDF = 'Rodyti PDF vaizd�';
$strDoAQuery = 'Vykdyti "u�klaus� pagal pavyzd�" (pakaitos simbolis: "%")';
$strDocu = '?';
$strDoYouReally = 'Ar TIKRAI norite ';
$strDrop = '�alinti';
$strDropDatabaseStrongWarning = 'J�s ruo�iat�s SUNAIKINTI vis� duombaz�!';
$strDropUsersDb = 'Pa�alinti duombazes, turin�ias tokius pa�ius vardus kaip ir vartotojai.';
$strDumpingData = 'Sukurta duomen� kopija lentelei';
$strDumpSaved = 'Duombaz�s atvaizdis i�saugotas byloje %s.';
$strDumpXRows = 'I�vesti %s eilu�i� pradedant nuo %s eilut�s.';
$strDynamic = 'dinaminis';

$strEditPDFPages = 'Redaguoti PDF puslapius';
$strEditPrivileges = 'Redaguoti privilegijas';
$strEdit = 'Redaguoti';
$strEffective = 'Efektyvus';
$strEmpty = 'I�valyti';
$strEmptyResultSet = 'MySQL gra�ino tu��i� rezultat� rinkin� (n�ra eilu�i�).';
$strEnabled = '�jungta';
$strEndCut = 'KIRPIMO PABAIGA';
$strEnd = 'Pabaiga';
$strEndRaw = 'RAW PABAIGA';
$strEngineAvailable = '%s n�ra galimas �iame MySQL serveryje.';
$strEngineDisabled = '%s �iame MySQL serveryje yra i�jungtas.';
$strEngines = 'Varikliai';
$strEngineUnsupported = '�is MySQL serveris nepalaiko %s saugojimo variklio.';
$strEnglish = 'Angl�';
$strEnglishPrivileges = ' Pastaba: MySQL privilegij� pavadinimai pateikiami angl� kalba';
$strError = 'Klaida';
$strEscapeWildcards = 'Norint naudoti _ ir % simblius, juos reik�t� eskeipinti su \\';
$strEstonian = 'Est�'; 
$strExcelEdition = 'Excel variantas';
$strExecuteBookmarked = '�vykdyti i�saugot� u�klaus�';
$strExplain = 'Paai�kinti';
$strExport = 'Eksportuoti';
$strExtendedInserts = 'I�pl�stinis �terpimas';
$strExtra = 'Papildomai';

$strFailedAttempts = 'Nepavyk� bandymai';
$strFieldHasBeenDropped = 'Laukas %s i�mestas';
$strField = 'Laukas';
$strFieldsEnclosedBy = 'Lauk� reik�m�s apskliaustos  simboliais';
$strFieldsEscapedBy = 'Lauk� reik�m�s baigiasi simboliu';
$strFields = 'Lauk�';
$strFieldsTerminatedBy = 'Lauk� pabaigos �ym�';
$strFileAlreadyExists = 'Byla pavadinimu %s jau yra darbin�je stotyje, pakeiskite norim� pavadinim� arba pasirinkite nustatym� leid�iant� perra�yti esan�ias bylas.';
$strFileCouldNotBeRead = 'Negalima perskaityti bylos';
$strFileNameTemplate = 'Failo pavadinimo �ablonas';
$strFileNameTemplateRemember = 'atsiminti �ablon�';
$strFixed = 'fiksuotas';
$strFlushPrivilegesNote = 'Pastaba: phpMyAdmin gauna vartotoj� teises tiesiai i� MySQL privilegij� lentel�s. �iose lentel�se nurodytos teis�s gali skirtis nuo parink�i� bylose nurodyt� teisi�. Tod�l %sperkraukite teises%s, jeigu norite t�sti. ';
$strFlushTable = 'I�valyti lentel� ("FLUSH")';
$strFormat = 'Formatas';
$strFormEmpty = 'Tr�ksta reik�m�s formoje !';
$strFullText = 'Tekstus rodyti pilnai';
$strFunction = 'Funkcija';

$strGenBy = 'Generavo:';
$strGeneralRelationFeat = 'Pagrindin�s s�ry�i� s�vyb�s';
$strGenerate = 'Generuoti';
$strGeneratePassword = 'Generuoti Slaipta�od�';
$strGenTime = 'Atlikimo laikas';
$strGeorgian = 'Gruzin�';
$strGerman = 'Vokie�i�';
$strGlobal = 'globalus';
$strGlobalPrivileges = 'Globalios teis�s';
$strGlobalValue = 'Globali reik�m�';
$strGo = 'Vykdyti';
$strGrantOption = 'Suteikti';
$strGreek = 'Graik�';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'i�pl�sta.';
$strHasBeenCreated = 'sukurta.';
$strHaveToShow = 'Pasirinkite bent vien� stulpel� i�vedimui';
$strHebrew = '�yd�';
$strHomepageOfficial = 'Oficialus phpMyAdmin tinklapis';
$strHome = 'Pradinis';
$strHost = 'Darbin� stotis';
$strHostEmpty = 'Tu��ias prisijungimo adresas!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Vengr�';

$strIcelandic = 'Island�';
$strId = 'ID';
$strIdxFulltext = 'Fulltext';
$strIgnore = 'Ignoruoti';
$strIgnoreInserts = 'Ignoruoti INSERT u�klausas.';
$strImportFiles = 'Importuoti bylas';
$strIndexes = 'Indeksai';
$strIndexHasBeenDropped = 'Indeksas %s panaikintas';
$strIndex = 'Indeksas';
$strIndexName = 'Indekso vardas&nbsp;:';
$strIndexType = 'Indekso tipas&nbsp;:';
$strIndexWarningTable = 'I�kilo problemos su `%s` lentel�s indeksais';
$strInnoDBBufferPoolSize = 'Buferio pool\'o dydis';
$strInnoDBDataFilePath = 'Duomen� failai'; 
$strInnoDBDataHomeDirDesc = 'Bendra direktorij� kelio dalis visiems InnoDB duomen� failams.';
$strInnodbStat = 'InnoDB b�sena';
$strInsecureMySQL = 'J�s� parink�i� byloje yra nurodyti standartiniai nustatymai (pvz: root vartotojas be slapta�o�io). Taip sutinkinta MySQL darbin� stotis yra nesaugi, bei gali b�ti atvira �silau�imams, tod�l rekomenduojame pakeisti �ias parinktis.';
$strInsertAsNewRow = '�terpti nauj� �ra��';
$strInsertedRowId = '�terptos eilut�s id:';
$strInsertedRows = '�terpt� eilu�i�:';
$strInsert = '�terpti';
$strInternalNotNecessary = '* Galite nenaudoti vidini� s�ry�i�, jeigu jie jau apibr��ti InnoDB.';
$strInternalRelations = 'Vidiniai s�ry�iai';
$strInUse = '�iuo metu naudojama';

$strJapanese = 'Japon�';
$strJumpToDB = 'Pereiti � &quot;%s&quot; duombaz�.';
$strJustDeleteDescr = 'Kol n�ra perkrautos privilegijos, &quot;pa�alinti&quot; vartotojai gali prisijungti prie MySQL darbin�s stoties.';
$strJustDelete = 'tik pa�alinti vartotojus i� privilegij� lentel�s.';

$strKeepPass = 'Nekeisti slapta�od�io';
$strKeyname = 'Raktinis �odis';
$strKill = 'Stabdyti proces�';
$strKorean = 'Kor�jie�i�';

$strLandscape = 'Peiza�inis';
$strLatexCaption = 'Lentel�s antra�t�';
$strLatexContent = 'Lentel�s __TABLE__ turinys';
$strLatexContinuedCaption = 'Lentel�s antra�t� (t�sinys)';
$strLatexContinued = '(t�sinys)';
$strLatexIncludeCaption = '�terpti lentel�s antra�t�';
$strLatexLabel = 'Pavadinimo raktas';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Lentel�s __TABLE__ strukt�ra';
$strLatvian = 'Latvi�';
$strLengthSet = 'Ilgis/reik�m�s*';
$strLimitNumRows = 'Eilu�i� skai�ius puslapyje';
$strLinesTerminatedBy = 'Eilut�s pabaigos �ym�';
$strLinkNotFound = 'S�ry�is nerastas';
$strLinksTo = 'S�ry�is su';
$strLithuanian = 'Lietuvi�';
$strLocalhost = 'Lokali darbin� stotis';
$strLocationTextfile = 'Tekstiniai SQL u�klaus� failai';
$strLoginInformation = 'Prisijungimo informacija';
$strLogin = '�siregistruoti';
$strLogout = 'I�siregistruoti';
$strLogPassword = 'Slapta�odis:';
$strLogServer = 'Darbin� stotis';
$strLogUsername = 'Vartotojo vardas:';
$strLongOperation = 'Operacija gali u�trukti. T�sti?';

$strMaximumSize = 'Did�iausias dydis: %s%s';
$strMbExtensionMissing = 'Nebuvo rastas PHP i�pl�timas mbstring ir pana�u, kad J�s naudojate multibyte simboli� kodacij�. Be mbstring pl�tinio phpMyAdmin negali tesingai skaidyti string�, tod�l galite sulaukti netik�t� rezultat�.';
$strMbOverloadWarning = 'Savo PHP konfig�racijoje J�s �jung�te mbstring.func_overload. �is nustatymas n�ra suderinamas su phpMyAdmin ir gali pa�eisti J�s� duomenis!';
$strMIME_available_mime = 'Galimi MIME-tipai';
$strMIME_available_transform = 'Galimos transformacijos';
$strMIME_description = 'Paai�kinimas';
$strMIME_MIMEtype = 'MIME tipai';
$strMIME_nodescription = '�i transformacija neturi paai�kinimo.<br />Klauskite autoriaus k� %s daro.';
$strMIME_transformation = 'Nar�ykl�s transformacija';
$strMIME_transformation_note = 'Nor�dami gauti piln� s�ra�� galim� transformacij� ir j� MIME tip� transformacij�, spauskite %stransformacijos paai�kinim�%s';
$strMIME_transformation_options_note = 'Pra�ome �vesti transformacijos nustatym� reik�mes naudodami tok� �vedimo format�: \'a\', 100, b,\'c\'...<br />Jeigu tarp �i� reik�mi� prisireiks panaudoti vir�utin� vertikal� pasvir� br�k�n� ("\") arba viengub� kabut� ("\'"), naudokite vir�utin� vertikal� pasvir� br�k�n� prie� �iuos simbolius (pvz: \'\\\\xyz\' ar \'a\\\'b\').';
$strMIME_transformation_options = 'Transformacijos nustatymai';
$strMIMETypesForTable = 'MIME tipai lentelei';
$strMIME_without = 'MIME tipai atspausdinti pasvirusiu �riftu neturi atskir� transformacijos funkcijos.';
$strModifications = 'Pakeitimai i�saugoti';
$strModifyIndexTopic = 'Keisti indeks�';
$strModify = 'Keisti';
$strMoveTableOK = 'Lentel� %s perkelta � %s.';
$strMoveTable = 'Perkelti lentel� � (duombaz�<b>.</b>lentel�):';
$strMoveTableSameNames = 'Negalima perkelti lentel�s � j� pa�i�!';
$strMultilingual = 'daugiakalbis';
$strMyISAMMaxExtraSortFileSize = 'Maksimalus laikin� fail� dydis kuriant indeksus';
$strMyISAMMaxSortFileSizeDesc = 'Maksimalus MySQL\'ui leistinas laikin� fail� dydis perkuriant MyISAM indeksus (vykdant REPAIR TABLE, ALTER TABLE arba LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Maksimalus laikin� r��iavimo fail� dydis';
$strMyISAMRecoverOptions = 'Automatinio atstatymo re�imas';
$strMyISAMRecoverOptionsDesc = 'Re�imas, skirtas automatiniam nusprogusi� MyISAM lenteli� atstatymui, kuris nurodomas per --myisam-recover serverio startavimo parametr�.';
$strMyISAMRepairThreadsDesc = 'Jei �i reik�m� yra didesn� u� 1, vykdant Repair, r��iavimo procesas MyISAM lenteli� indeksus kuria lygegre�iai (kiekvien� indeks� savo gijoje).';
$strMyISAMSortBufferSize = 'R��iavimo buferio dydis';
$strMySQLCharset = 'MySQL koduot�';
$strMySQLConnectionCollation = 'MySQL prisijungimo r��iavimas';
$strMySQLSaid = 'MySQL atsakymas: ';
$strMySQLShowProcess = 'Rodyti procesus';
$strMySQLShowStatus = 'Rodyti MySQL aplinkos b�sen�';
$strMySQLShowVars = 'Rodyti MySQL sistemos kintamuosius';

$strName = 'Pavadinimas';
$strNext = 'Sekantis';
$strNoActivity = 'Daugiau nei %s sekund�i� nebuvo atlikta joki� veiksm�. Pra�au �siloginti i�naujo.';
$strNoDatabases = 'N�ra duombazi�';
$strNoDatabasesSelected = 'Nepa�ym�jote duombaz�s.';
$strNoDescription = 'Apra�ymo n�ra';
$strNoDetailsForEngine = 'Apie �io Saugojimo Variklio b�sen� n�ra i�samios informacijos.';
$strNoDropDatabases = '"DROP DATABASE" komandos �vykdyti negalima.';
$strNoExplain = 'Praleisti SQL u�klausos ai�kinim�';
$strNoFrames = 'phpMyAdmin draugi�kesnis su <b>r�melius</b> palaikan�iomis nar�ykl�mis.';
$strNoIndex = 'Neapra�yti indeksai!';
$strNoIndexPartsDefined = 'Neapra�ytos indekso dalys!';
$strNoModification = 'N�ra pakeitim�';
$strNo = 'Ne';
$strNone = 'N�ra';
$strNoOptions = '�is formatas neturi nustatym�';
$strNoPassword = 'N�ra slapta�od�io';
$strNoPermission = 'N�ra teisi� i�saugoti bylai %s.';
$strNoPhp = 'be PHP kodo';
$strNoPrivileges = 'N�ra privilegij�';
$strNoRights = 'Neturite pakankamai teisi�';
$strNoRowsSelected = 'Nepasirinkti �ra�ai';
$strNoSpace = 'N�ra pakankamai vietos i�saugoti bylai %s.';
$strNoTablesFound = 'Duombaz�je nerasta lenteli�.';
$strNoThemeSupport = 'Temos n�ra palaikomos, patikrinkite savo konfig�racij�  ir/arba savo tem� direktorij� %s.';
$strNotNumber = '�veskite skai�i�!';
$strNotOK = 'Negerai';
$strNotSet = 'Lentel� <b>%s</b> nerasta arba nenurodyta %s byloje';
$strNoUsersFound = 'Nerasta vartotojo(�).';
$strNoValidateSQL = 'Praleisti SQL u�klausos tikrinim�';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s atitikmuo(enys) lentel�je <i>%s</i>';
$strNumSearchResultsTotal = '<b>Viso:</b> <i>%s</i> atitikmuo(enys)';
$strNumTables = 'Lentel�s';

$strOK = 'Gerai';
$strOperations = 'Veiksmai';
$strOptimizeTable = 'Optimizuoti';
$strOr = 'Arba';
$strOverhead = 'Perteklius';
$strOverwriteExisting = 'Perra�yti esan�ias bylas';

$strPageNumber = 'Puslapis:';
$strPaperSize = 'Lapo dydis';
$strPartialText = 'Tekstus rodyti dalinai';
$strPasswordChanged = 'Vartotojo %s slapta�odis s�kmingai pakeistas.';
$strPasswordEmpty = 'Tu��ias slapta�odis!';
$strPasswordHashing = 'Slapta�od�i� He�avimas';
$strPasswordNotSame = 'Slapta�od�iai nesutampa!';
$strPassword = 'Slapta�odis';
$strPdfDbSchema = 'Duombaz�s "%s" schema - %s puslapis';
$strPdfInvalidTblName = 'Lentel� "%s" neegzistuoja!';
$strPdfNoTables = 'No tables';
$strPerHour = 'per valand�';
$strPerMinute = 'per minut�';
$strPerSecond = 'per sekund�';
$strPersian = 'Pers�';
$strPhoneBook = 'telefon� knyga';
$strPHP40203 = 'J�s naudojate PHP 4.2.3 versij�, kurioje yra rimta klaida, susiijusi su daugiabai�iais stringais (mbstring). Daugiau informacijos rasite PHP klaid� prane�ime Nr.19404. <strong>NEREKOMENDUOJAME naudoti �ios PHP versijos su phpMyAdmin</strong>.';
$strPhp = 'PHP kodas';
$strPHPVersion = 'PHP versija';
$strPmaDocumentation = 'phpMyAdmin\'o dokumentacija';
$strPmaUriError = 'Reikia parink�i� byloje �ra�yti <tt>$cfg[\'PmaAbsoluteUri\']</tt> reik�m�!';
$strPolish = 'Lenk�';
$strPortrait = 'Portretinis';
$strPos1 = 'Prad�ia';
$strPrevious = 'Pra�j�s';
$strPrimaryKeyHasBeenDropped = 'Panaikintas pirminis raktas';
$strPrimaryKeyName = 'Pirminio rakto pavadinimas turi b�ti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>yra vienintelis</b> pirminio rakto tipas!)';
$strPrimary = 'Pirminis';
$strPrint = 'Spausdinti';
$strPrintViewFull = 'Spausdinti vaizd� (su pilnai tekstais)';
$strPrintView = 'Spausdinti strukt�r�';
$strPrivDescAllPrivileges = '�traukti visas teises, i�skyrus GRANT.';
$strPrivDescAlter = 'Leisti keisti jau egzistuojan�i� leneteli� strukt�r�.';
$strPrivDescCreateDb = 'Leisti kurti naujas duombazes ir lenteles.';
$strPrivDescCreateTbl = 'Leisti kurti naujas lenteles.';
$strPrivDescCreateTmpTable = 'Leisti kurti laikinas lenteles.';
$strPrivDescCreateUser = 'Leid�ia kurti, �alinti ir pervadinti vartotojus.';
$strPrivDescCreateView = 'Leid�ia sukurti naujus view\'us.';
$strPrivDescDelete = 'Leisti �alinti duomenis.';
$strPrivDescDropDb = 'Leisti �alinti duombazes ir lenteles.';
$strPrivDescDropTbl = 'Leisti �alinti lenteles.';
$strPrivDescExecute = 'Leisti vykdyti i�saugotas proced�ras; Negalioja �ioje MySQL versijoje.';
$strPrivDescFile = 'Leisti �terpti ir eksportuoti duomenis i� byl�.';
$strPrivDescGrant = 'Leisti �terpti naujus vartotojus, bei prisikirti privilegijas, neperkraunant privilegij� lentel�s.';
$strPrivDescIndex = 'Leisti �terpti ir modifikuoti indeksus.';
$strPrivDescInsert = 'Leisti �terpti ir modifikuoti duomenis.';
$strPrivDescLockTables = 'Leisti u�rakinti lenteles proces� metu.';
$strPrivDescMaxConnections = 'Riboti prisijungim� kiek� per valand�.';
$strPrivDescMaxQuestions = 'Riboti u�klaus� kiek� per valand�';
$strPrivDescMaxUpdates = 'Riboti komand� (kurios vienaip ar kitaip modifikuoja lenteles ar duombazes) kiek� per valand�.';
$strPrivDescProcess3 = 'Leisti i�jungti kit� vartotoj� procesus.';
$strPrivDescProcess4 = 'Leisti per�i�r�ti proces� s�ra�e piln� u�klaus� s�ra��.';
$strPrivDescReferences = ' Negalioja �ioje MySQL versijoje.';
$strPrivDescReload = 'Leisti perkrauti darbin� stot�, bei i�valyti laikin�j� atmint� (cache).';
$strPrivDescReplClient = 'Leisti vartotojo u�klausas d�l atstatymo master / slave darbini� sto�i�.';
$strPrivDescReplSlave = 'Reikalinga atstatyti slave darbinei sto�iai';
$strPrivDescSelect = 'Leisti skaityti duomenis.';
$strPrivDescShowDb = 'Suteikti prieig� prie vis� duombazi�.';
$strPrivDescShowView = 'Leid�ia vykdyti SHOW CREATE VIEW u�klausas.';
$strPrivDescShutdown = 'Leisti i�jungti server�.';
$strPrivDescSuper = 'Leisti prisijungti, kai vir�ytas prisijungim� kiekis; Reikalinga daugumai administratoriaus darb�, toki� kaip globali� reik�mi� modifikavimui ar vartotoj� atjungimui.';
$strPrivDescUpdate = 'Leisti modifikuoti duomenis.';
$strPrivDescUsage = 'Be teisi�.';
$strPrivileges = 'Privilegijos';
$strPrivilegesReloaded = 'Teis�s s�kmingai perkrautos.';
$strProcesses = 'Procesai';
$strProcesslist = 'Proces� s�ra�as';
$strPutColNames = 'Stulpeli� pavadinimus �ra�yti pirmoje eilut�je';

$strQBEDel = 'Pakei�iant';
$strQBEIns = '�terpiant';
$strQBE = 'SQL&nbsp;u�klausa';
$strQueryFrame = 'U�klaus� langas';
$strQueryOnDb = 'SQL-u�klausa duombaz�je <b>%s</b>:';
$strQuerySQLHistory = 'SQL u�klaus� istorija';
$strQueryStatistics = '<b>U�klaus� statistika</b>: nuo paleidimo dienos buvo i�si�sta %s u�klaus� � server�.';
$strQueryTime = 'U�klausa u�truko %01.4f sek.';
$strQueryType = 'U�klausos tipas';
$strQueryWindowLock = 'Nekeisti �ios u�klausos u� aktyvaus lango rib�.';

$strReadRequests = 'Read u�klausos';
$strReceived = 'Gauta';
$strRecords = 'Viso �ra��:';
$strReferentialIntegrity = 'Patikrinti s�ry�i� vientisum�:';
$strRefresh = 'Atnaujinti';
$strRelationalSchema = 'Ry�i� schema';
$strRelationNotWorking = 'N�ra PMA lenteli�, kurios leid�ia dirbti su jungtin�mis MySQL lentel�mis. %sPaai�kinimas%s.';
$strRelationsForTable = 'RELATIONS FOR TABLE';
$strRelations = 'S�ry�iai';
$strRelationView = 'Per�i�r�ti s�ry�ius';
$strReloadingThePrivileges = 'Perkraunamos privilegijos';
$strRemoveSelectedUsers = 'Pa�alinti pa�ym�tus vartotojus';
$strRenameDatabaseOK = 'Duombaz� %s pervadinta � %s';
$strRenameTableOK = 'Lentel� %s pervadinta � %s';
$strRenameTable = 'Pervadinti lentel� �';
$strRepairTable = 'Redaguoti';
$strReplaceNULLBy = 'Pakeisti NULL �';
$strReplaceTable = 'Pakeisti lentel�s turin� failo duomenimis ';
$strReset = 'Atstatyti � pradin� b�sen�';
$strResourceLimits = 'I�tekli� apribojimai';
$strReType = '�veskite dar kart�';
$strRevokeAndDeleteDescr = 'Kol n�ra perkrautos privilegijos, vartotojai dar tur�s privilegij� USAGE.';
$strRevokeAndDelete = 'Panaikinti visas aktyvias vartotoj� privilegijas ir pa�alinti vartotojus.';
$strRevokeMessage = 'J�s panaikinote privilegijas %s';
$strRevoke = 'Panaikinti';
$strRomanian = 'Rumun�';
$strRowLength = 'Eilut�s ilgis';
$strRows = 'Eilut�s';
$strRowsFrom = 'eilu�i� pradedant nuo';
$strRowSize = 'Eilut�s dydis';
$strRowsModeFlippedHorizontal = 'horizontal�s (pasukti pavadinimai)';
$strRowsModeHorizontal = 'horizontaliai';
$strRowsModeOptions = 'i�d�stant  %s pakartoti antra�tes kas %s �ra��';
$strRowsModeVertical = 'vertikaliai';
$strRowsStatistic = 'Eilu�i� statistika';
$strRunning = 'adresu %s';
$strRunQuery = 'Vykdyti u�klaus�';
$strRunSQLQuery = 'Vykdyti SQL sakinius duombaz�je <strong>%s</strong>';
$strRussian = 'Rus�';

$strSave = 'I�saugoti';
$strSaveOnServer = 'I�saugoti serveryje, kataloge pavadinimu %s';
$strScaleFactorSmall = 'Dyd�io matas yra per ma�as norint sutalpinti vaizd� viename lape.';
$strSearchFormTitle = 'Paie�ka duombaz�je';
$strSearchInTables = 'Lentel�s(i�) viduje:';
$strSearchNeedle = 'Paie�kos �odis(iai) arba reik�m�(�s) (pakaitos simbolis: "%"):';
$strSearchOption1 = 'bent vienas i� �od�i�';
$strSearchOption2 = 'visi �od�iai';
$strSearchOption3 = 'i�tisa fraz�';
$strSearchOption4 = 'kaip reguliar�j� i�sirei�kim�';
$strSearch = 'Paie�ka';
$strSearchResultsFor = 'Paie�kos rezultatai frazei "<i>%s</i>" %s:';
$strSearchType = 'Rasti:';
$strSecretRequired = 'Nustatym� byloje nurodykite slapt� fraz� (blowfish_secret).';
$strSelectADb = 'Pasirinkite duombaz�';
$strSelectAll = 'I�rinkti visas(us)';
$strSelectBinaryLog = 'Pasirinkite binarin� log� per�i�rai';
$strSelectFields = 'Pasirinkti laukus (nors vien�)';
$strSelectNumRows = 'u�klaus� vykdoma';
$strSelectTables = 'Pasirinkite lenteles';
$strSend = 'I�saugoti � fail�';
$strSent = 'Si�sta';
$strServerChoice = 'Pasirinkti server�';
$strServerNotResponding = 'Serveris neatsako';
$strServer = 'Serveris';
$strServerStatusUptime = 'MySQL serverio veikimo trukm�: %s. Serveris prad�jo veikti: %s.';
$strServerStatus = 'Veikimo informacija';
$strServerTabVariables = 'Kintamieji';
$strServerTrafficNotes = '<b>Serverio apkrovimas</b>: �iose lentel�se saugoma statistin� informacija apie MySQL serverio apkrovim� nuo paleidimo dienos.';
$strServerVars = 'Serverio kintamieji ir nustatymai';
$strServerVersion = 'Serverio versija';
$strSessionValue = 'Sesijos reik�m�';
$strSetEnumVal = 'Jeigu laukelio tipas yra "enum" arba "set", tuomet duomen� reik�mes reikia �vesti naudojant �� format�: \'a\',\'b\',\'c\'...<br />. Jeigu jums reikia �ra�yti de�inin� ��amb�j� br�k�n� ("\") arba kabutes("\'"), tuomet prie� �ios simbolius reikia papildomo de�ininio ��ambaus br�k�nio (pavyzd�iui: \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Rodyti visk�';
$strShowColor = 'Rodyti spalv�';
$strShowDatadictAs = 'Duomen� �odyno formatas';
$strShowFullQueries = 'Rodyti pilnas u�klausas';
$strShowGrid = 'Rodyti tinklel�';
$strShowingRecords = 'Rodomi �ra�ai';
$strShowPHPInfo = 'Rodyti PHP informacij�';
$strShow = 'Rodyti';
$strShowTableDimension = 'Rodyti lenteli� dyd�ius';
$strShowTables = 'Rodyti lentel�s';
$strShowThisQuery = ' Rodyti �i� u�klaus� v�l ';
$strSimplifiedChinese = 'Supaprastinta Kinie�i�';
$strSingly = '(pavieniui)';
$strSize = 'Dydis';
$strSlovak = 'Slovak�';
$strSlovenian = 'Slov�n�';
$strSocketProblem = '(arba vietiniai MySQL serverio socketai yra blogai sukonfig�ruoti)';
$strSortByKey = 'R��iuoti pagal rakt�';
$strSort = 'R��iuoti';
$strSpaceUsage = 'Vietos naudojimas';
$strSpanish = 'Ispan�';
$strSplitWordsWithSpace = '�od�iai atskirti tarpo simboliu (" ").';
$strSQLExportType = 'Eksporto tipas';
$strSQLParserBugMessage = 'Klaid� SQL interpretatoriuje. Pra�ome patikrinti  ar SQL u�klausoje teisingai naudojamos kabut�s. Kita, galima klaida, jog J�s bandote atsi�sti dvejetainius (binary) duomenis neapskliaustus kabut�mis. Taip pat J�s galite pabandyti �vykdyti savo u�klaus� i� MySQL konsol�s. MySQL serverio i�vesta informacija apie klaid� (jeigu toki� bus) gali pad�ti Jums nustatyti klaidos prie�ast�. Jeigu u�klausa s�kmingai �vykdoma konsol�je, o SQL interpretatorius vistiek i�veda prane�imus apie klaidas, pra�ome supaprastinite savo SQL u�klaus� ir perduodam� duomen� kiek� u�klausoje ir prane�kite apie klaid� programos k�r�jams su �emiau pateikiama informacija:';
$strSQLParserUserError = 'Klaida SQL u�klausoje. �emiau i�vestas MySQL serverio prane�imas (jeigu toks yra), tur�t� pad�ti Jums nustatyti klaidos prie�ast�';
$strSQLQuery = 'SQL u�klausa';
$strSQLResult = 'SQL rezultatas';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Klaidingas vardas';
$strSQPBugUnclosedQuote = 'Tr�ksta u�daromosios kabut�s';
$strSQPBugUnknownPunctuation = 'Klaidinga skyryba';
$strStatCheckTime = 'Paskutinis patikrinimas';
$strStatCreateTime = 'Sukurta';
$strStatement = 'Parametrai';
$strStatUpdateTime = 'Paskutinis atnaujinimas';
$strStatus = 'Statusas';
$strStorageEngine = 'Saugojimo Variklis';
$strStorageEngines = 'Saugojimo Varikliai';
$strStrucCSV = 'Duomenys CSV formatu';
$strStrucData = 'Strukt�ra ir duomenys';
$strStrucExcelCSV = 'Duomenys ekselio CSV formatu';
$strStrucNativeExcel = 'MS Excel duomenys';
$strStrucOnly = 'Tik strukt�r�';
$strStructPropose = 'Analizuoti lentel�s strukt�r�';
$strStructure = 'Strukt�ra';
$strSubmit = 'Si�sti';
$strSuccess = 'J�s� SQL u�klausa s�kmingai �vykdyta';
$strSum = 'Sumos';
$strSwedish = '�ved�';
$strSwitchToDatabase = 'Pereiti � nukopijuot� duombaz�';
$strSwitchToTable = 'Pereiti � lentel�s kopij�';

$strTableComments = 'Lentel�s komentarai';
$strTableEmpty = 'Tu��ias lentel�s vardas!';
$strTableHasBeenDropped = 'Lentel� %s panaikinta';
$strTableHasBeenEmptied = 'Lentel�s reik�m�s %s i�tu�tintos';
$strTableHasBeenFlushed = 'Lentel�s buferis  %s i�valytas';
$strTable = 'Lentel�';
$strTableMaintenance = 'Lentel�s diagnostika';
$strTableOfContents = 'Turinys';
$strTableOptions = 'Lentel�s parinktys';
$strTables = '%s lentel�(s)';
$strTableStructure = 'Sukurta duomen� strukt�ra lentelei';
$strTakeIt = 'pasirinkti';
$strTblPrivileges = 'Specifin�s lenteli� privilegijos';
$strTextAreaLength = ' Tai yra jo ilgis,<br /> �is laukelis neredaguojamas ';
$strThai = 'Tailando';
$strTheme = 'Tema / Stilius';
$strThisHost = 'Dabartinis serveris';
$strThreadSuccessfullyKilled = '%s buvo s�kmingai i�jungtas.';
$strTime = 'Laikas';
$strToggleScratchboard = '�jungti scratchboard';
$strTotal = ' i� viso ';
$strTotalUC = 'Viso';
$strTraditionalChinese = 'Tradicin� Kinie�i�';
$strTraditionalSpanish = 'Tradicin� ispan�';
$strTraffic = 'Apkrovimas';
$strTransformation_application_octetstream__download = '��vesti nuorod� dvejetaini� lauko duomen� atsisiuntimui. Pirmas parametras - dvejetaini� lauko duomen� bylos pavadinimas. Antras parametras - galimas lentel�s eilut�s lauko turin�io byl� pavadinimas. Jeigu pateiksite antr� parametr�, i�trinkite pirmojo parametro reik�m�.';
$strTransformation_image_jpeg__inline = 'Parodo aktyv� ma�in�; nustatymai: plotis,auk�tis pikseliais (i�saugo original� santyk�)';
$strTransformation_image_jpeg__link = 'I�vedama nuoroda � �� paveiksl�l� (tiesioginis blob atsisiuntimas ir pan.).';
$strTransformation_image_png__inline = '�r. image/jpeg: vid�';
$strTransformation_text_plain__external = 'LINUX VARTOTOJAMS: Paleid�iama i�orin� aplikacija ir duomenys imami i� standartinio �vedimo. I�vedama i� aplikacijos gauta informacija. Nutylint: bus Tidy korekti�kam HTML kodo i�vedimui. Saugumo sumetimais J�s turite paredaguoti libraries/transformations/text_plain__external.inc.php byl� ir �vesti tas aplikacijas, kurias naudosite. Pirmas parametras yra leid�iam� aplikacij� kiekis, kurias naudosite. Antras parametras yra specifiniai aplikacij� raktai. Jeigu tre�ias parametras lygus 1, tai i�vedama informacija bus apdorota su htmlspecialchars() (nutylint: reik�m� lygi 1). Jeigu ketvirtas parametras lygus 1, tai i�vedimo lentel�s cel� tur�s atribut� NOWRAP, tam kad i�vedama b�t� atvaizduota be perk�lim� � kitas eilutes (nutylint: reik�m� lygi 1).';
$strTransformation_text_plain__formatted = 'I�saugo original� lauko apipavidalinim�. Nevykdomas i�vengimas.';
$strTransformation_text_plain__imagelink = 'Gra�inamas paveiksl�lis ir nuoroda � �vedimo lauke �ra�yt� bylos pavadinim�; argumentai: prefiksas (pvz "http://domain.com/"), plotis (pikseliais), auk�tis (pikseliais).';
$strTransformation_text_plain__link = 'Gra�inama nuoroda � �vedimo lauke �ra�yt� bylos pavadinim�; argumentai: prefiksas (pvz "http://domain.com/"), nuorodos pavadinimas.';
$strTransformation_text_plain__substr = 'Rodoma tik dalis teksto. Pirmas parametras nurodo i�vedamo teksto prad�i� (nutylint: 0). Antrasis parametras nurodo i�vedamo teksto kiek�. Jeigu antras parametras nenurodytas tai bus i�vestas visas tekstas. Tre�iasis parametras nurodo kurios raid�s bus prijungtos prie i�vedimo teksto (nutylint: ...).';
$strTruncateQueries = 'Trumpinti rodomas u�klausas';
$strTurkish = 'Turk�';
$strType = 'Tipas';

$strUkrainian = 'Ukrainie�i�';
$strUncheckAll = 'Nepa�ym�ti visus(as)';
$strUnicode = 'Unicodas';
$strUnique = 'Unikalus';
$strUnknown = 'ne�inoma';
$strUnselectAll = 'Nepa�ym�ti visus(as)';
$strUpdatePrivMessage = 'J�s pakeit�te privilegijas  %s.';
$strUpdateProfileMessage = 'Profilis papildytas.';
$strUpdateQuery = 'Atnaujinti u�klaus�';
$strUpdComTab = 'Informacij�, kaip atnaujinti Column_comments lentel�, galite rasti dokumentacijoje.';
$strUpgrade = 'Rekomenduojame atnaujint %s iki %s ar v�lesn�s versijos.';
$strUsage = 'I�naudota';
$strUseBackquotes = 'Lenteli� ir lauk� vardams naudoti �ias kabutes ` `';
$strUseHostTable = 'Naudoti Host lentel�';
$strUserAlreadyExists = 'Vartotojas %s jau yra!';
$strUserEmpty = 'Tu��ias vartotojo vardas!';
$strUserName = 'Vartotojo vardas';
$strUserNotFound = 'Privilegij� lentel�je pasirinktas vartotojas nerastas.';
$strUserOverview = 'Vartotoj� per�i�ra';
$strUsersDeleted = 'Pa�ym�ti vartotojai s�kmingai pa�alinti.';
$strUsersHavingAccessToDb = 'Vartotojai turintys pri�jim� prie &quot;%s&quot;';
$strUser = 'Vartotojas';
$strUseTabKey = '�okin�jimui tarp reik�mi� naudokite TAB mygtuk� arba naudokite CTRL+rodykl�s';
$strUseTables = 'Naudoti lenteles';
$strUseTextField = 'Naudokite teksto �vedimo lauk�';
$strUseThisValue = 'Naudokite �i� reik�m�';

$strValidateSQL = 'Patikrinti SQL u�klaus�';
$strValidatorError = 'Neveikia SQL interpretatorius. Pra�ome patikrinkite ar yra suinstaliuoti visi privalomi php moduliai, nurodyti %sdokumentacijoje%s.';
$strValue = 'Reik�m�';
$strVar = 'Kintamasis';
$strVersionInformation = 'Versijos informacija';
$strViewDumpDatabases = 'Per�i�r�ti duombazi� i�ra��';
$strViewDumpDB = 'Sukurti, per�i�r�ti duombaz�s atvaizd�';
$strViewDump = 'Per�i�r�ti lentel�s strukt�ros atvaizd�';
$strViewHasBeenDropped = 'View\'as %s buvo panaikintas';
$strView = 'View\'as';

$strWebServerUploadDirectoryError = 'Nepasiekimas nurodytas www-serverio katalogas atsiuntimams.';
$strWebServerUploadDirectory = 'web serverio katalogas atsiuntimams';
$strWelcome = 'J�s naudojate %s';
$strWestEuropean = 'Vakar� Europos';
$strWildcard = 'pakaitos simbolis';
$strWindowNotFound = 'Tikslo langas neatnaujintas. Galb�t J�s u�dar�te pagrindin� lang� arba J�s� nar�ykl� blokuoja atnaujinimus tarp lang� d�l nustatyto saugumo.';
$strWithChecked = 'Pasirinktas lenteles:';
$strWriteRequests = 'Write u�klausos';
$strWrongUser = 'Neteisingas vartotojo vardas arba slapta�odis. Pri�jimas u�draustas.';

$strXML = 'XML';

$strYes = 'Taip';

$strZeroRemovesTheLimit = 'Pastaba: n�ra joki� apribojim� jeigu reik�m� nurodyta lygi 0 (nuliui).';
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

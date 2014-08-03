<?php
/* $Id: albanian-iso-8859-1.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by: Laurent Dhima <laurenti at users.sourceforge.net>
*/

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Djl', 'H�n', 'Mar', 'M�r', 'Enj', 'Pre', 'Sht'); //albanian days
$month = array('Jan', 'Shk', 'Mar', 'Pri', 'Maj', 'Qer', 'Kor', 'Gsh', 'Sht', 'Tet', 'N�n', 'Dhj'); //albanian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //albanian time
$timespanfmt = '%s dit�, %s or�, %s minuta dhe %s sekonda';

 

$strAbortedClients = 'D�shtoi';
$strAccessDeniedExplanation = 'phpMyAdmin u p�rpoq t� lidhet me server-in MySQL, dhe server-i refuzoi lidhjen. Kontrollo emrin e host, p�rdoruesin dhe fjal�kalimin tek file config.inc.php dhe sigurohu q� korrispondojn� me informacionet q� ju ka dh�n� administratori i serverit MySQL.';
$strAccessDenied = 'Hyrja nuk u pranua';
$strAction = 'Veprimi';
$strAddAutoIncrement = 'Shto vler� AUTO_INCREMENT';
$strAddConstraints = 'Shto kushte';  
$strAddDeleteColumn = 'Shto/Fshi fush�n';
$strAddDeleteRow = 'Shto/Fshi kriterin';
$strAddHeaderComment = 'Shto nj� koment t� personalizuar n� header (\\n nd�rpret rreshtin)';
$strAddIntoComments = 'Shto tek komentet';
$strAddNewField = 'Shto nj� fush� t� re';
$strAddPrivilegesOnDb = 'Shto t� drejta tek databaza n� vazhdim';
$strAddPrivilegesOnTbl = 'Shto t� drejta tek tabela n� vazhdim';
$strAddSearchConditions = 'Shto kushte k�rkimi (trupi i specifikimit "where"):';
$strAddToIndex = 'Shto tek treguesi i &nbsp;%s&nbsp;kolon�s(ave)';
$strAddUserMessage = 'Ke shtuar nj� p�rdorues t� ri.';
$strAddUser = 'Shto nj� p�rdorues t� ri';
$strAdministration = 'Administrimi';
$strAffectedRows = 'Rreshtat e ndikuar:';
$strAfterInsertBack = 'Mbrapa';
$strAfterInsertNewInsert = 'Shto nj� regjistrim t� ri';
$strAfterInsertSame = 'Kthehu mbrapa tek kjo faqe'; 
$strAfter = 'Mbas %s';
$strAllTableSameWidth = 'vizualizon t� gjitha tabelat me t� nj�jt�n gj�r�si?';
$strAll = 'T� gjith�';
$strAlterOrderBy = 'Transformo tabel�n e renditur sipas';
$strAnalyzeTable = 'Analizo tabel�n';
$strAnd = 'Dhe';
$strAnIndex = 'Nj� tregues u shtua tek %s';
$strAny = '�far�do';
$strAnyHost = '�far�do host';
$strAnyUser = '�far�do p�rdorues';
$strAPrimaryKey = 'Nj� ky� primar u shtua tek %s';
$strArabic = 'Arabisht';
$strArmenian = 'Armene';
$strAscending = 'Ngjitje';
$strAtBeginningOfTable = 'N� fillim t� tabel�s';
$strAtEndOfTable = 'N� fund t� tabel�s';
$strAttr = 'Pron�si';
$strAutomaticLayout = 'Faqosje automatike';

$strBack = 'Mbrapa';
$strBaltic = 'Baltike';
$strBeginCut = 'FILLIMI I CUT';
$strBeginRaw = 'FILLIMI I RAW';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'T� dh�na t� tipit binar - mos ndrysho';
$strBookmarkAllUsers = 'Lejo q� �do p�rdorues t� ket� hyrje n� k�t� lib�rsh�nues';
$strBookmarkDeleted = 'Lib�rsh�nuesi u fshi.';
$strBookmarkLabel = 'Etiket�';
$strBookmarkQuery = 'Query SQL shtuar t� preferuarve';
$strBookmarkThis = 'Shtoja t� preferuarve k�t� query SQL';
$strBookmarkView = 'Shfaq vet�m';
$strBrowseForeignValues = 'Shfleto opcionet e huaja';
$strBrowse = 'Shfaq';
$strBulgarian = 'Bullgarisht';
$strBzError = 'phpMyAdmin nuk �sht� n� gjendje t� kompresoj� dump-in p�r arsye t� prapashtes�s Bz2 t� gabuar n� k�t� version t� php. Ju rekomandojm� patjet�r vendosjen e <code>$cfg[\'BZipDump\']</code> tek file juaj i konfigurimit t� phpMyAdmin n� <code>FALSE</code>. N�qoft�se d�shironi t� p�rdorni patjet�r specifikat e kompresimit Bz2, duhet t� rifreskoni php n� versionin e fundit. Hidhini nj� sy php bug report %s p�r informacione t� holl�sishme.';
$strBzip = '"kompresuar me bzip2"';

$strCalendar = 'Kalendari';  
$strCannotLogin = 'E pamundur kryerja e login tek server-i MySQL';
$strCantLoad = 'I pamundur ngarkimi i prapashtes�s %s,<br />kontrollo konfigurimin e PHP';
$strCantLoadRecodeIconv = 'I pamundur ngarkimi i prapashtes�s iconv apo recode t� nevoitsh�m p�r konvertimin e karaktereve, konfiguroni php p�r t� lejuar p�rdorimin e k�tyre prapashtesave ose disaktivoni konvertimin e set t� karaktereve n� phpMyAdmin.';
$strCantRenameIdxToPrimary = 'I pamundur riem�rtimi i treguesit n� PRIMAR!';
$strCantUseRecodeIconv = 'I pamundur p�rdorimi i funksioneve iconv apo libiconv apo recode_string p�r shkak se ekstensioni duhet t� ngarkohet. Kontrolloni konfigurimin e php.';
$strCardinality = '';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = 'Europa qendrore';
$strChangeCopyModeCopy = '... mbaj t� vjetrin.';
$strChangeCopyModeDeleteAndReload = ' ... elemino t� vjetrin nga tabela e p�rdoruesve e pastaj rilexo t� drejtat.';
$strChangeCopyModeJustDelete = ' ... elemino t� vjetrin nga tabela e p�rdoruesve.';
$strChangeCopyMode = 'Krijo nj� p�rdorues t� ri me t� nj�jta t� drejta dhe ...';
$strChangeCopyModeRevoke = ' ... hiq t� gjitha t� drejtat nga i vjetri e pastaj eleminoje.';
$strChangeCopyUser = 'Ndrysho Informacionet e Login / Kopjo p�rdoruesin';
$strChangeDisplay = 'Zgjidh fush�n q� d�shiron t� shoh�sh';
$strChange = 'Ndrysho';
$strChangePassword = 'Ndrysho fjal�kalimin';
$strCharset = 'Familje g�rmash';
$strCharsetOfFile = 'Familja g�rmave t� file:';
$strCharsetsAndCollations = 'Familje g�rmash dhe Collations';
$strCharsets = 'Familje g�rmash';
$strCheckAll = 'Zgjidhi t� gjith�';
$strCheckOverhead = 'Zgjidh t� mbingarkuarit';
$strCheckPrivs = 'Kontrollo t� drejtat';
$strCheckPrivsLong = 'Kontrollo t� drejtat p�r databaz�n &quot;%s&quot;.';
$strCheckTable = 'Kontrollo tabel�n';
$strChoosePage = 'Ju lutem zgjidhni faqen q� d�shironi t� modifikoni';
$strColComFeat = 'Vizualizimi i komenteve t� kollonave';
$strCollation = 'Collation';
$strColumnNames = 'Emrat e kollonave';
$strColumnPrivileges = 'T� drejtat relative t� kollonave';
$strCommand = 'Komanda';
$strCommentsForTable = 'KOMENTET P�R TABEL�N';  
$strComments = 'Komente';
$strCompleteInserts = 'T� shtuarat komplet';
$strCompression = 'Kompresim';
$strConfigFileError = 'phpMyAdmin nuk arrin t� lexoj� file e konfigurimit!<br />Kjo mund t� ndodh� kur php gjen nj� parse error n� t� apo kur php nuk arrin ta gjej� k�t� file.<br />Ju lutem ngarkoheni direkt file e konfigurimit duke p�rdorur link-un e m�posht�m dhe lexoni mesazhin(et) e gabimeve php q� merrni. N� shumic�n e rasteve mund t\'ju mungoj� nj� apostrof� apo nj� presje.<br />N�se faqja q� do t\'ju hapet �sht� bosh (e bardh�), at�here gjith�ka �sht� n� rregull.';
$strConfigureTableCoord = 'Ju lutem, konfiguroni koordinatat p�r tabel�n %s';
$strConnectionError = 'E pamundur lidhja: rregullime t� pavlefshme.';  
$strConnections = 'Lidhje';
$strConstraintsForDumped = 'Kushtet p�r tabelat e nxjerra'; 
$strConstraintsForTable = 'Kushtet p�r tabel�n';  
$strCookiesRequired = 'Nga kjo pik� e tutje, cookies duhet t� jen� t� aktivuara.';
$strCopyTable = 'Kopjo tabel�n tek (databaza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s u kopjua tek %s.';
$strCopyTableSameNames = 'I pamundur kopjimi i tabel�s tek vetvetja!';
$strCouldNotKill = 'phpMyAdmin nuk �sht� n� gjendje t� p�rfundoj� thread %s. Ka mund�si t� ket� p�rfunduar m� par�.';
$strCreateIndex = 'Krijo nj� tregues tek &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Krijo nj� tregues t� ri';
$strCreate = 'Krijo';
$strCreateNewDatabase = 'Krijo nj� databaz� t� re';
$strCreateNewTable = 'Krijo nj� tabel� t� re tek databaza %s';
$strCreatePage = 'Krijo nj� faqe t� re';
$strCreatePdfFeat = 'Krijimi i PDF-ve';
$strCreationDates = 'Datat e Krijimit/P�rdit�simit/Kontrollit';
$strCriteria = 'Kriteri';
$strCroatian = 'Kroate';
$strCyrillic = 'Cyrillic';
$strCzech = '�ekisht';
$strCzechSlovak = '�eko-Sllovak';  

$strDanish = 'Danisht';
$strDatabase = 'Databazat';
$strDatabaseEmpty = 'Emri i databaz�s mungon!'; 
$strDatabaseExportOptions = 'Opcione t� eksportimit t� databaz�s';
$strDatabaseHasBeenDropped = 'Databaza %s u eleminua.';
$strDatabases = 'Databazat';
$strDatabasesDropped = '%s databaza u eleminuan korrekt�sisht.';
$strDatabasesStatsDisable = 'Disaktivo Statistikat';
$strDatabasesStatsEnable = 'Aktivo Statistikat';
$strDatabasesStatsHeavyTraffic = 'Sh�nim: Aktivimi k�tu i statistikave t� Databaz�s mund t� shkaktoj� rritjen e trafikut midis server-it web dhe MySQL.';
$strDatabasesStats = 'Statistikat e databazave';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Vet�m t� dh�na';
$strData = 'T� dh�na';
$strDBComment = 'Komenti p�r Databaz�n: ';
$strDbPrivileges = 'T� drejta specifike t� databaz�s';
$strDBRename = 'Ndysho emrin e databaz�s n�'; 
$strDbSpecific = 'specifik i databaz�s';
$strDefault = 'Prezgjedhur';
$strDefaultValueHelp = 'P�r vlerat e prezgjedhura, ju lutem shtoni nj� vler� t� vetme, pa backslash escaping apo thonj�za, duke p�rdorur k�t� format: a';
$strDefragment = 'Defragmento tabel�n';  
$strDelayedInserts = 'P�rdor shtimet me vones�';  
$strDeleteAndFlushDescr = 'Kjo �sht� rruga m� e past�r, por ngarkimi i t� drejtave mund t� zgjas� disa �aste m� shum�.';
$strDeleteAndFlush = 'Fshi p�rdoruesit dhe pastaj rifresko t� drejtat.';
$strDeletedRows = 'rreshtat e fshir�:';
$strDeleted = 'rreshti u fshi';
$strDelete = 'Fshi';
$strDeleting = 'N� fshirje e sip�r t� %s';
$strDelOld = 'Faqja aktuale p�rmban riferime ndaj tabelash q� nuk ekzistojn� m�. D�shironi t\'i eleminoni k�to riferimente?';
$strDescending = 'Zbrit�s';
$strDescription = 'P�rshkrimi';
$strDictionary = 'fjalor';
$strDisabled = 'Jo aktiv';
$strDisableForeignChecks = '�\'aktivo kontrollin e ky�eve t� jasht�m';  
$strDisplayFeat = 'Shfaq karakteristikat';
$strDisplayOrder = 'M�nyra e shfaqjes:';
$strDisplayPDF = 'Shfaq skem�n e PDF';
$strDoAQuery = 'Zbato "query nga shembull" (karakteri jolly: "%")';
$strDocu = 'Dokumentet';
$strDoYouReally = 'Konfermo: ';
$strDropDatabaseStrongWarning = 'Jeni duke SHKAT�RRUAR nj� databaz� komplete!';  
$strDrop = 'Elemino';
$strDropUsersDb = 'Elemino databazat q� kan� em�r t� nj�jt� me p�rdoruesit.';
$strDumpingData = 'Dump i t� dh�nave p�r tabel�n';
$strDumpSaved = 'Dump u ruajt tek file %s.';
$strDumpXRows = 'Dump i %s rreshta duke filluar nga rreshti %s.';
$strDynamic = 'dinamik';

$strEdit = 'Ndrysho';
$strEditPDFPages = 'Ndrysho faqen PDF';
$strEditPrivileges = 'Ndrysho t� drejtat';
$strEffective = 'Efektiv';
$strEmptyResultSet = 'MySQL ka kthyer nj� t� p�rbashk�t boshe (p.sh. zero rreshta).';
$strEmpty = 'Zbraz';
$strEnabled = 'Aktiv';
$strEncloseInTransaction = 'P�rfshi eksportin n� nj� transacion';  
$strEndCut = 'FUNDI I CUT';
$strEnd = 'Fund';
$strEndRaw = 'FUNDI I RAW';
$strEnglish = 'Anglisht';
$strEnglishPrivileges = 'Sh�nim: emrat e t� drejtave t� MySQL jan� n� Anglisht';
$strError = 'Gabim';
$strEstonian = 'Estoneze';
$strExcelEdition = 'Edicion i Excel';
$strExecuteBookmarked = 'Zbaton query nga lib�rsh�nuesi';
$strExplain = 'Shpjego SQL';
$strExport = 'Eksporto';
$strExtendedInserts = 'T� shtuara t� zgjeruara';
$strExtra = 'Extra';

$strFailedAttempts = 'P�rpjekje t� d�shtuara';
$strField = 'Fusha';
$strFieldHasBeenDropped = 'Fusha %s u eleminua';
$strFieldsEnclosedBy = 'Fush� e p�rb�r� nga';
$strFieldsEscapedBy = 'Fush� e kufizuar nga';
$strFields = 'Fusha';
$strFieldsTerminatedBy = 'Fush� q� mbaron me';
$strFileAlreadyExists = 'File %s ekziston n� server: t� lutem, ndrysho emrin e file ose zgjidh opcionin "Mbishkruaj".';
$strFileCouldNotBeRead = 'File nuk mund t� lexohet';
$strFileNameTemplate = 'Emri i file template';
$strFileNameTemplateRemember = 'kujto template';
$strFixed = 'fiks';
$strFlushPrivilegesNote = 'Sh�nim: phpMyAdmin lexon t� drejtat e p�rdoruesve direkt nga tabela e privilegjeve t� MySQL. P�rmbajtja e k�saj tabele mund t� ndryshoj� prej t� drejtave t� p�rdorura nga serveri n�se jan� kryer ndryshime manuale. N� k�t� rast, duhet t� %srifreskoni t� drejtat%s para se t� vazhdoni.';
$strFlushTable = 'Rifillo ("FLUSH") tabel�n';
$strFormat = 'Formati';
$strFormEmpty = 'Mungon nj� vler� n� formular!';
$strFullText = 'Teksti i plot�';
$strFunction = 'Funksioni';

$strGenBy = 'Gjeneruar nga';
$strGeneralRelationFeat = 'Karakteristikat e p�rgjithshme t� relacionit';
$strGenTime = 'Gjeneruar m�';
$strGeorgian = 'Gjeorgjisht';  
$strGerman = 'Gjermanisht';
$strGlobal = 'globale';
$strGlobalPrivileges = 'T� drejtat e p�rgjithshme';
$strGlobalValue = 'Vler� Globale';
$strGo = 'Zbato';
$strGrantOption = 'Grant';
$strGreek = 'Greqisht';
$strGzip = '"kompresuar me gzip"';

$strHasBeenAltered = 'u ndryshua.';
$strHasBeenCreated = 'u krijua.';
$strHaveToShow = 'Zgjidh t� pakt�n nj� kolon� p�r t� par�';
$strHebrew = 'Hebraike';
$strHomepageOfficial = 'Faqja zyrtare e phpMyAdmin';
$strHome = 'Sht�pia';
$strHostEmpty = 'Emri i host �sht� bosh!';
$strHost = 'Host';
$strHungarian = 'Hungarisht';

$strIcelandic = 'Islandeze';  
$strId = 'ID';
$strIdxFulltext = 'Teksti komplet';
$strIgnoreInserts = 'P�rdor shp�rfill shtimet';  
$strIgnore = 'Shp�rfill';
$strImportFiles = 'Importo files';
$strIndexes = 'Tregues';
$strIndexHasBeenDropped = 'Treguesi %s u eleminua';
$strIndexName = 'Emri i treguesit&nbsp;:';
$strIndex = 'Treguesi';
$strIndexType = 'Lloji i treguesit&nbsp;:';
$strInnodbStat = 'Gj�ndja InnoDB';
$strInsecureMySQL = 'File i konfigurimit n� p�rdorim p�rmban zgjedhje (root pa asnj� password) q� korrispondojn� me t� drejtat e account MySQL t� paracaktuar. Nj� server MySQL funksionues me k�to zgjedhje �sht� i pambrojtur ndaj sulmeve, dhe ju duhet patjet�r t� korrigjoni k�t� vrim� n� siguri.';
$strInsertAsNewRow = 'Shto nj� rresht t� ri';
$strInsertedRowId = 'U shtua id e rreshtit:';
$strInsertedRows = 'Rreshtat e shtuar:';
$strInsert = 'Shto';
$strInternalNotNecessary = '* Nuk ka nevoj� p�r nj� relacion t� brendsh�m kur ky relacion ekziston n� InnoDB.';
$strInternalRelations = 'Relacione t� brendshme';
$strInUse = 'n� p�rdorim';

$strJapanese = 'Japonisht';
$strJumpToDB = 'Kalo tek databaza &quot;%s&quot;.';
$strJustDeleteDescr = 'P�rdoruesit e &quot;fshir�&quot; do t� ken� akoma mund�si t� futen n� server si zakonisht derisa t� drejtat t� ringarkohen p�rs�ri.';
$strJustDelete = 'Vet�m fshi p�rdoruesit nga tabelat e t� drejtave.';

$strKeepPass = 'Mos ndrysho fjal�kalim';
$strKeyname = 'Emri i ky�it';
$strKill = 'Hiq';
$strKorean = 'Koreane';

$strLandscape = 'Horizontale';
$strLatexCaption = 'Titulli i Tabel�s caption';  
$strLatexContent = 'P�rmbajtja e tabel�s __TABLE__';
$strLatexContinuedCaption = 'N�ntitulli i tabel�s vazhduese';
$strLatexContinued = '(vazhdon)';
$strLatexIncludeCaption = 'P�rfshi n�ntitullin e tabel�s';
$strLatexLabel = 'Ky�i i etiket�s';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura e tabel�s __TABLE__';
$strLatvian = 'Letone';  
$strLengthSet = 'Gjat�sia/Set*';
$strLimitNumRows = 'regjistrime p�r faqe';
$strLinesTerminatedBy = 'Rreshta q� mbarojn� me';
$strLinkNotFound = 'Lidhja nuk u gjet';
$strLinksTo = 'Lidhje me';
$strLithuanian = 'Lituane';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Pozicioni i file';
$strLogin = 'Hyrja';
$strLoginInformation = 'Informacione mbi Identifikimin';
$strLogout = 'P�rfundo seanc�n';
$strLogPassword = 'Fjal�kalimi:';
$strLogServer = 'Serveri';
$strLogUsername = 'Emri i p�rdoruesit:';

$strMaximumSize = 'Madh�sia maksimum: %s%s';  
$strMIME_available_mime = 'Lloje MIME n� dispozicion';
$strMIME_available_transform = 'Transformacionet n� dispozicion';
$strMIME_description = 'P�rshkrimi';
$strMIME_MIMEtype = 'Lloji MIME';
$strMIME_nodescription = 'Asnj� p�rshkrim n� dispozicion p�r k�t� transformim.<br />Ju lutem pyet autorin, �far� %s b�n.';
$strMIME_transformation_note = 'P�r list�n e opcioneve t� transformimeve n� dispozicion dhe transformimet relativ� t� llojeve-MIME, kliko tek %sp�rshkrimet e transformimeve%s';
$strMIME_transformation_options_note = 'Ju lutem shkruani vlerat p�r opcionet e transformimit duke p�rdorur k�t� format: \'a\', 100, b,\'c\'...<br />N�se keni nevoj� t� shtoni nj� backslash ("\") apo nj� apostrof� ("\'") midis k�tyre vlerave, duhet ti backslash-oni (p�r shembull \'\\\\xyz\' ose \'a\\\'b\').';
$strMIME_transformation_options = 'Opcione t� transformimeve';
$strMIME_transformation = 'Transformimi i Shfletuesit';
$strMIMETypesForTable = 'LLOJET E MIME P�R TABEL�N';  
$strMIME_without = 'Llojet-MIME t� printuar n� italics kan� nj� funksion transformacioni t� ve�ant�';
$strModifications = 'Ndryshimet u ruajt�n';
$strModifyIndexTopic = 'Ndrysho nj� tregues';
$strModify = 'Ndrysho';
$strMoveTableOK = 'Tabela %s u l�viz tek %s.';
$strMoveTableSameNames = 'E pamundur l�vizja e tabel�s tek vetvetja!';
$strMoveTable = 'Sposto tabel�n n� (databaza<b>.</b>tabela):';
$strMultilingual = 'shum�gjuh�sh';
$strMySQLCharset = 'Set simbolesh MySQL';
$strMySQLConnectionCollation = 'Vendosja e lidhjes MySQL'; 
$strMySQLSaid = 'Mesazh nga MySQL: ';
$strMySQLShowProcess = 'Shfaq proceset n� ekzekutim';
$strMySQLShowStatus = 'Shfaq informacionet e nisjes s� MySQL';
$strMySQLShowVars = 'Shfaq t� ndryshueshmet e sistemit t� MySQL';

$strName = 'Emri';
$strNext = 'N� vazhdim';
$strNoDatabases = 'Asnj� databaz�';
$strNoDatabasesSelected = 'Nuk �sht� zgjedhur asnj� databaz�.';
$strNoDescription = 'asnj� p�rshkrim';
$strNoDropDatabases = 'Komandat "DROP DATABASE" nuk jan� aktive.';
$strNoExplain = 'Mos shpjego SQL';
$strNoFrames = 'phpMyAdmin funksionon m� mir� me shfletues q� suportojn� frames';
$strNoIndex = 'Asnj� tregues i p�rcaktuar!';
$strNoIndexPartsDefined = 'Asnj� pjes� e treguesit �sht� p�rcaktuar!';
$strNo = ' Jo ';
$strNoModification = 'Asnj� ndryshim';
$strNone = 'Asnj� lloj';
$strNoOptions = 'Ky format nuk ka opcione';
$strNoPassword = 'Asnj� fjal�kalim';
$strNoPermission = 'Serveri web nuk ka t� drejtat e duhura p�r t� ruajtur file %s.';
$strNoPhp = 'pa kod PHP';
$strNoPrivileges = 'Asnj� e drejt�';
$strNoRights = 'Nuk ke t� drejta t� mjaftueshme p�r t� kryer k�t� operacion!';
$strNoRowsSelected = 'Nuk ka rreshta t� zgjedhur';  
$strNoSpace = 'Hap�sir� e pamjaftueshme p�r t� ruajtur file %s.';
$strNoTablesFound = 'Nuk gjenden tabela n� databaz�.';
$strNotNumber = 'Ky nuk �sht� nj� num�r!';
$strNotOK = 'jo OK';
$strNotSet = '<b>%s</b> tabela nuk u gjet ose nuk �sht� p�rcaktuar tek %s';
$strNoUsersFound = 'Nuk u gjet asnj� p�rdorues.';
$strNoValidateSQL = 'Mos vleft�so SQL';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s korrispondon(jn�) tek tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Gjithsej:</b> <i>%s</i> korrispondues(�)';
$strNumTables = 'Tabela';

$strOK = 'OK';
$strOperations = 'Operacione';
$strOperator = 'Operator';  
$strOptimizeTable = 'Optimizo tabel�n';
$strOr = 'Ose';
$strOverhead = 'Mbi limit';
$strOverwriteExisting = 'Mbishkruaj file(s) ekzistues';

$strPageNumber = 'Numri i faqes:';
$strPaperSize = 'P�rmasat e letr�s';
$strPartialText = 'Tekst i pjes�sh�m';
$strPasswordChanged = 'Fjal�kalimi p�r p�rdoruesin %s u ndryshua me sukses.';
$strPasswordEmpty = 'Fjal�kalimi �sht� bosh!';
$strPassword = 'Fjal�kalimi';
$strPasswordNotSame = 'Fjal�kalimi nuk korrispondon!';
$strPdfDbSchema = 'Skema e databaz�s "%s" - Faqja %s';
$strPdfInvalidTblName = 'Tabela "%s" nuk ekziston!';
$strPdfNoTables = 'Asnj� tabel�';
$strPerHour = 'n� or�';
$strPerMinute = 'n� minut�';
$strPerSecond = 'n� sekond�';
$strPhoneBook = 'numratori';
$strPHP40203 = '�sht� n� p�rdorim PHP 4.2.3, q� p�rmban nj� difekt serioz me stringat multi-byte strings (mbstring). Shiko raportin 19404 t� bug PHP. Ky version i PHP nuk rekomandohet p�r t\'u p�rdorur me phpMyAdmin.';
$strPhp = 'Krijo kodin PHP';
$strPHPVersion = 'Versioni i PHP';
$strPmaDocumentation = 'Dokumente t� phpMyAdmin';
$strPmaUriError = 'Direktiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DUHET t� p�rcaktohet tek file i konfigurimit!';
$strPolish = 'Polonisht'; 
$strPortrait = 'Vertikal';
$strPos1 = 'Fillim';
$strPrevious = 'Paraardh�si';
$strPrimaryKeyHasBeenDropped = 'Ky�i primar u eleminua';
$strPrimaryKeyName = 'Emri i ky�it primar duhet t� jet�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>duhet</b> t� jet� emri i, dhe <b>vet�m i</b>, nj� ky�i primar!)';
$strPrimary = 'Primar';
$strPrint = 'Printo';
$strPrintViewFull = 'Shfaq p�r printim (me full text)';
$strPrintView = 'Shfaq p�r printim';
$strPrivDescAllPrivileges = 'P�rfshin t� gjitha t� drejtat me p�rjashtim t� GRANT.';
$strPrivDescAlter = 'Lejon ndryshimin e struktur�s s� tabelave ekzistuese.';
$strPrivDescCreateDb = 'Lejon krijimin e tabelave t� reja dhe databazave t� reja.';
$strPrivDescCreateTbl = 'Lejon krijimin e tabelave t� reja.';
$strPrivDescCreateTmpTable = 'Lejon krijimin e tabelave t� p�rkoh�shme.';
$strPrivDescDelete = 'Lejon fshirjen e t� dh�nave.';
$strPrivDescDropDb = 'Lejon eleminimin e databazave dhe tabelave.';
$strPrivDescDropTbl = 'Lejon eleminimin e tabelave.';
$strPrivDescExecute = 'Lejon ekzekutimin e procedurave t� regjistruara; Nuk ka efekt n� k�t� version t� MySQL.';
$strPrivDescFile = 'Lejon importimin e t� dh�nave nga dhe eksportimin e t� dh�nave n� files.';
$strPrivDescGrant = 'Lejon t� shtosh p�rdorues dhe t� drejta pa ringarkuar tabelat e privilegjeve.';
$strPrivDescIndex = 'Lejon krijimin dhe eleminimin e treguesve.';
$strPrivDescInsert = 'Lejon futjen dhe mbishkrimin e t� dh�nave.';
$strPrivDescLockTables = 'Lejon bllokimin e tabelave p�r thread e momentit.';
$strPrivDescMaxConnections = 'Kufizon numrin e lidhjeve t� reja q� nj� p�rdorues mund t� hap� n� nj� or�.';
$strPrivDescMaxQuestions = 'Kufizon numrin e k�rkesave q� nj� p�rdorues mund ti d�rgoj� server-it n� nj� or�.';
$strPrivDescMaxUpdates = 'Kufizon numrin e komandave q� mund t� ndryshojn� nj� tabel� apo databaz� q� nj� p�rdorues mund t� zbatoj� n� nj� or�.';
$strPrivDescProcess3 = 'Lejon vrasjen e pro�eseve t� p�rdoruesve t� tjer�.';
$strPrivDescProcess4 = 'Lejon shikimin e t� gjitha k�rkesave tek lista e pro�eseve.';
$strPrivDescReferences = 'Nuk ka asnj� efekt tek ky version i MySQL.';
$strPrivDescReload = 'Lejon ringarkimin e parametrave t� server-it dhe risetimin e cache t� serv�rve.';
$strPrivDescReplClient = 'I jep t� drejt�n nj� p�rdoruesi t� pyes� se ku gjenden slaves / masters.';
$strPrivDescReplSlave = 'Nevoitet p�r replikimin e slaves.';
$strPrivDescSelect = 'Lejon leximin e t� dh�nave.';
$strPrivDescShowDb = 'Mund�son hyrjen tek lista komplete e databazave.';
$strPrivDescShutdown = 'Lejon p�rfundimin e serverit.';
$strPrivDescSuper = 'Lejon lidhje t� tjera, edhe po t� jet� arritur numri maksimal i lidhjeve; I nevojsh�m p�r shum� operacione administrimi si p�rcaktimi i t� ndryshueshmeve globale apo fshirja e threads t� p�rdoruesve t� tjer�.';
$strPrivDescUpdate = 'Lejon ndryshimin e t� dh�nave.';
$strPrivDescUsage = 'Asnj� t� drejt�.';
$strPrivilegesReloaded = 'T� drejtat u p�rdit�suan me sukses.';
$strPrivileges = 'T� drejtat';
$strProcesses = 'Proceset';
$strProcesslist = 'Lista e Pro�eseve';
$strPutColNames = 'Vendos emrat e kollonave tek rreshti i par�';

$strQBEDel = 'Fshi';
$strQBEIns = 'Shto';
$strQBE = 'Query nga shembull';
$strQueryFrame = 'Dritarja e Query';
$strQueryOnDb = 'SQL-query tek databaza <b>%s</b>:';
$strQuerySQLHistory = 'Kronollogjia e SQL';
$strQueryStatistics = '<b>Statistikat e Query</b>: Q� nga nisja e tij, serverit i jan� d�rguar %s queries.';
$strQueryTime = 'Query ka zgjatur %01.4f sec';
$strQueryType = 'Lloji i query';
$strQueryWindowLock = 'Mos e mbishkruaj k�t� query nga jasht� dritares';

$strReceived = 'Marr�';
$strRecords = 'Regjistrime';
$strReferentialIntegrity = 'Kontrollo integritetin e informacioneve:';
$strRefresh = 'Rifresko';  
$strRelationalSchema = 'Skema relacionale';
$strRelationNotWorking = 'Karakteristikat shtes� jan� �\'aktivuar p�r sa i takon funksionimit me tabelat e lidhura. P�r t� zbuluar p�rse, klikoni %sk�tu%s.';
$strRelationsForTable = 'RELACIONET P�R TABEL�N';  
$strRelations = 'Relacione';
$strRelationView = 'Shiko relacionet';
$strReloadingThePrivileges = 'Duke ringarkuar t� drejtat';
$strRemoveSelectedUsers = 'Heq p�rdoruesit e zgjedhur';
$strRenameDatabaseOK = 'Databaz�s %s i �sht� ndryshuar emri n� %s';  
$strRenameTableOK = 'Tabela %s u riem�rtua %s';
$strRenameTable = 'Riem�rto tabel�n n�';
$strRepairTable = 'Riparo tabel�n';
$strReplaceNULLBy = 'Z�vend�so NULL me';
$strReplaceTable = 'Z�vend�so t� dh�nat e tabel�s me file';
$strReset = 'Rinis';
$strResourceLimits = 'Limitet e rezervave';
$strReType = 'Rifut';
$strRevokeAndDeleteDescr = 'P�rdoruesit DO T� MUND T� P�RDORIN sidoqoft� t� drejt�n deri at�here kur t� drejtat t� ringarkohen.';
$strRevokeAndDelete = 'Hiqja t� gjitha t� drejtat aktive p�rdoruesve dhe pastaj eleminoi.';
$strRevoke = 'Hiq';
$strRevokeMessage = 'Ke anulluar t� drejtat p�r %s';
$strRomanian = 'Romanisht';  
$strRowLength = 'Gjat�sia e rreshtit';
$strRowsFrom = 'rreshta duke filluar nga';
$strRowSize = 'Madh�sia e rreshtit';
$strRowsModeFlippedHorizontal = 'horizontal (headers t� rrotulluar)';
$strRowsModeHorizontal = ' horizontal ';
$strRowsModeOptions = ' n� modalitetin %s dhe p�rs�rit headers mbas %s qelish ';
$strRowsModeVertical = ' vertikal ';
$strRows = 'rreshta';
$strRowsStatistic = 'Statistikat e rreshtave';
$strRunning = 'n� ekzekutim tek %s';
$strRunQuery = 'D�rgo Query';
$strRunSQLQuery = 'Zbato query SQL tek databaza %s';
$strRussian = 'Rusisht';

$strSaveOnServer = 'Ruaje n� server tek directory %s';
$strSave = 'Ruaj';
$strScaleFactorSmall = 'Faktori i shkall�s �sht� shum� i vog�l p�r t� plot�suar skem�n n� faqe';
$strSearchFormTitle = 'K�rko n� databaz�';
$strSearchInTables = 'Tek tabela(at):';
$strSearch = 'K�rko';
$strSearchNeedle = 'Fjala(�) apo vlera(at) p�r t\'u k�rkuar (karakteri Jolly: "%"):';
$strSearchOption1 = 't� pakt�n nj�r�n nga fjal�t';
$strSearchOption2 = 't� gjitha fjal�t';
$strSearchOption3 = 'fraza precize';
$strSearchOption4 = 'si shprehje e rregullt';
$strSearchResultsFor = 'K�rko rezultatet p�r "<i>%s</i>" %s:';
$strSearchType = 'Gjej:';
$strSecretRequired = 'Tani nevoitet nj� fjal�kalim sekret p�r file e konfigurimit(blowfish_secret).';
$strSelectADb = 'T� lutem, zgjidh nj� databaz�';
$strSelectAll = 'Zgjidh gjith�ka';
$strSelectFields = 'Zgjidh fushat (t� pakt�n nj�):';
$strSelectNumRows = 'tek query';
$strSelectTables = 'Zgjidh Tabelat';
$strSend = 'Ruaje me em�r...';
$strSent = 'D�rguar';
$strServerChoice = 'Zgjedhja e serverit';
$strServerNotResponding = 'Serveri nuk p�rgjigjet'; 
$strServer = 'Serveri';
$strServerStatus = 'Informacione mbi Runtime';
$strServerStatusUptime = 'Ky server MySQL po punon q� prej %s. U nis m� %s.';
$strServerTabVariables = 'T� ndryshueshmet';
$strServerTrafficNotes = '<b>Trafiku i serverit</b>: K�to tabela do t� shfaqin statistikat e trafikut t� rrjetit p�r k�t� server MySQL q� nga momenti i nisjes s� tij.';
$strServerVars = 'T� ndryshueshmet dhe parametrat e Serverit';
$strServerVersion = 'Versioni i MySQL';
$strSessionValue = 'Vlera seanc�s';
$strSetEnumVal = 'N.q.s. fusha �sht� "enum" apo "set", shtoni t� dh�nat duke p�rdorur formatin: \'a\',\'b\',\'c\'...<br />N�se megjithat� do t\'u duhet t� vini backslashes ("\") apo single quote ("\'") para k�tyre vlerave, backslash-ojini (p�r shembull \'\\\\xyz\' o \'a\\\'b\').';
$strShowAll = 'Shfaqi t� gjith�';
$strShowColor = 'Shfaq ngjyr�n';
$strShowDatadictAs = 'Formati i Data Dictionary';
$strShowFullQueries = 'Shfaq t� gjitha k�rkesat';
$strShowGrid = 'Shfaq rrjet�n';
$strShowingRecords = 'Shfaqja e regjistrimeve ';
$strShowPHPInfo = 'Trego info mbi PHP';
$strShow = 'Shfaq';
$strShowTableDimension = 'Trego madh�sin� e tabelave';
$strShowTables = 'Shfaq tabelat';
$strShowThisQuery = 'Tregoje p�rs�ri k�t� query';
$strSimplifiedChinese = 'Kineze e thjesht�zuar';
$strSingly = '(nj� nga nj�)';
$strSize = 'Madh�sia';
$strSlovak = 'Sllovakisht'; 
$strSlovenian = 'Sllovenisht';  
$strSortByKey = 'Rendit sipas ky�it';
$strSort = 'rreshtimi';
$strSpaceUsage = 'Hap�sira e p�rdorur';
$strSpanish = 'Spanjisht';  
$strSplitWordsWithSpace = 'Fjal�t jan� t� ndara me nj� hapsir� (" ").';
$strSQLExportType = 'Lloji i Eksportit';  
$strSQLParserBugMessage = 'Ka mund�si q� ka nj� bug tek parser-i SQL. Ju lutem, kontrolloni query tuaj me kujdes, dhe kontrolloni q� presjet t� jen� ku duhet dhe jo t� gabuara. Nj� shkak tjet�r i mundsh�m i gabimit mund t� jet� q� po mundoheni t� uploadoni nj� file binar jasht� nj� zone teksti t� kufizuar me presje. Mund edhe t� provoni query tuaj MySQL nga interfaqja e shkruar e komandave. Gabimi i m�posht�m i kthyer nga server-i MySQL, n�se ekziston nj� i till�, mund tju ndihmoj� n� diagnostikimin e problemit. N�se ka akoma probleme, apo n.q.s. parser-i SQL i phpMyAdmin gabon kur p�rkundrazi nga interfaqja e komandave t� thjeshta nuk rezultojn� probleme, ju lutem zvog�loni query tuaj SQL n� hyrje n� query e vetme q� shkakton probleme, dhe d�rgoni nj� bug raportim me t� dh�nat rezultuese nga seksioni CUT i m�posht�m:';
$strSQLParserUserError = 'Mesa duket ekziston nj� gabim tek query juaj SQL e futur. Gabimi i serverit MySQL i treguar m� posht�, n�se ekziston, mund t\'ju ndihmoj� n� diagnostikimin e problemit';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Rezultati SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identifikues i pavlefsh�m';
$strSQPBugUnclosedQuote = 'Thonj�za t� pambyllura';
$strSQPBugUnknownPunctuation = 'String� Punctuation e panjohur';
$strStatCheckTime = 'Kontrolli i fundit';
$strStatCreateTime = 'Krijimi';
$strStatement = 'Instruksione';
$strStatUpdateTime = 'Ndryshimi i fundit';
$strStatus = 'Gjendja';
$strStrucCSV = 't� dh�na CSV';
$strStrucData = 'Struktura dhe t� dh�na';
$strStrucExcelCSV = 'CSV p�r t� dh�na MS Excel';
$strStrucNativeExcel = 'T� dh�na orgjinale MS Excel'; 
$strStrucOnly = 'Vet�m struktura';
$strStructPropose = 'Propozo struktur�n e tabel�s';
$strStructure = 'Struktura';
$strSubmit = 'D�rgoje';
$strSuccess = 'Query u zbatua me sukses';
$strSum = 'Gjithsej';
$strSwedish = 'Suedisht';
$strSwitchToTable = 'Kalo tek tabela e kopjuar';

$strTableComments = 'Komente mbi tabel�n';
$strTableEmpty = 'Emri i tabel�s �sht� bosh!';
$strTableHasBeenDropped = 'Tabela %s u eleminua';
$strTableHasBeenEmptied = 'Tabela %s u zbraz';
$strTableHasBeenFlushed = 'Tabela %s u rifreskua';
$strTableMaintenance = 'Administrimi i tabel�s';
$strTableOfContents = 'Tabela e p�rmbajtjes';
$strTableOptions = 'Opcione p�r tabel�n';
$strTables = '%s tabela(at)';
$strTableStructure = 'Struktura e tabel�s';
$strTable = 'Tabela';
$strTakeIt = 'merre';  
$strTblPrivileges = 'T� drejta relative me tabelat';
$strTextAreaLength = ' P�r shkak t� gjat�sis� saj,<br /> kjo fush� nuk mund t� ndryshohet ';
$strThai = 'Thai';
$strTheme = 'Tema / Stili';  
$strThisHost = 'K�t� Host';
$strThreadSuccessfullyKilled = 'Thread %s u p�rfundua me sukses.';
$strTime = 'Koha';
$strToggleScratchboard = '(�\')aktivo scratchboard';
$strTotal = 'Gjithsej';
$strTotalUC = 'Gjithsej';
$strTraditionalChinese = 'Kineze tradicionale';
$strTraditionalSpanish = 'Spanjishte tradicionale';  
$strTraffic = 'Trafiku';
$strTransformation_application_octetstream__download = 'Shfaq nj� lidhje p�r t� shkarkuar t� dh�nat binare t� nj� fushe. Mund�sia e par� �sht� emri i file binar. Opcioni i dyt� �sht� emri i mundsh�m i fush�s s� rreshtit t� tabel�s q� p�rmban emrin e file. N�se jepni opcionin e dyt�, opcioni i par� duhet t� jet� nj� string� bosh'; 
$strTransformation_image_jpeg__inline = 'Shfaq nj� miniatur� t� klikueshme; mund�sit�: gj�r�sia, lart�sia n� pixels (ruan proporcionin origjinal)';
$strTransformation_image_jpeg__link = 'Shfaq nj� lidhje p�r tek kjo figur� (download blob direkt, p.sh.).';
$strTransformation_image_png__inline = 'Shiko figur�n/jpeg: n� linj�';
$strTransformation_text_plain__external = 'VET�M P�R LINUX: L�shon nj� program t� jasht�m dhe plot�son t� dh�nat e fushave me an� t� standard input. Jep si rezultat standard output e programit. Vendosja default �sht� Tidy, p�r t� printuar si duhet kodin HTML. P�r arsye sigurie, do t\'ju duhet t� ndryshoni file libraries/transformations/text_plain__external.inc.php dhe t� shkruani instrumentet q� lejoni t� p�rdoren. Mund�sia e par� pra �sht� numri i programit q� d�shironi t� p�rdorni dhe e dyta jan� parametrat p�r programin. Parametri i tret�, n.q.s. i vendosur n� 1 do t� konvertoj� output duke p�rdorur htmlspecialchars() (Prezgjedhur: 1). Nj� paramet�r i kat�rt, po t� jet� vendosur n� 1 do t\'i shtoj� nj� NOWRAP p�rmbajtjes s� qelis� k�shtu q� output komplet do t� shfaqet pa u riformatuar (Default: 1)';
$strTransformation_text_plain__formatted = 'Konservon formatimin origjinal t� fush�s. Nuk aplikohet asnj� Escaping.';
$strTransformation_text_plain__imagelink = 'Shfaq nj� figur� dhe nj� link, fusha p�rmban emrin e file; opcioni i par� �sht� nj� prefiks si "http://domain.com/", opcioni i dyt� �sht� gj�r�sia n� pixels, i treti �sht� lart�sia.';
$strTransformation_text_plain__link = 'Shfaq nj� link, fusha p�rmban emrin e file; opcioni i par� �sht� nj� prefiks si "http://domain.com/", opcioni i dyt� �sht� nj� titull p�r lidhjen.';
$strTransformation_text_plain__substr = 'Shfaq vet�m nj� pjes� t� string-�s. Opcioni i par� �sht� offset-i q� sh�rben p�r t� p�rcaktuar ku fillon output i tekstit tuaj (Default 0). Opcioni i dyt� �sht� nj� offset q� tregon se sa tekst kthehet. Po t� jet� bosh, kthen t� gjith� tekstin e mbetur. Opcioni i tret� p�rcakton �far� karakteresh do t� shtohen n� fund t� output kur kthehet nj� n�n-string-� (Default: ...) .';
$strTruncateQueries = 'Shkurton (nd�rpret) Queries e Shfaqura';
$strTurkish = 'Turqisht';
$strType = 'Lloji';

$strUkrainian = 'Ukrainase';
$strUncheckAll = '�\'zgjidhi t� gjith�';
$strUnicode = 'Unicode';
$strUnique = 'I vet�m';
$strUnknown = 'e panjohur';
$strUnselectAll = '�\'zgjidh gjith�ka';
$strUpdatePrivMessage = 'Ke rifreskuar lejet p�r %s.';
$strUpdateProfileMessage = 'Profili u rifreskua.';
$strUpdateQuery = 'Rifresko Query';
$strUpdComTab = 'Ju lutem lexoni dokumentet mbi rifreskimin e tabel�s suaj Column_comments';
$strUpgrade = 'Duhet t� instaloni %s %s ose superior.';
$strUsage = 'P�rdorimi';
$strUseBackquotes = 'P�rdor backquotes me emrat e tabelave dhe fushave';
$strUseHostTable = 'P�rdor Tabel�n e Host-it';
$strUserAlreadyExists = 'P�rdoruesi %s ekziston!';
$strUserEmpty = 'Emri i p�rdoruesit �sht� bosh!';
$strUserName = 'Emri i p�rdoruesit';
$strUserNotFound = 'P�rdoruesi i zgjedhur nuk u gjet tek tabela e t� drejtave.';
$strUserOverview = 'Paraqitja e p�rgjithshme e p�rdoruesve';
$strUser = 'P�rdorues';
$strUsersDeleted = 'P�rdoruesit e zgjedhur u hoq�n me sukses.';
$strUsersHavingAccessToDb = 'P�rdoruesit q� kan� hyrje tek &quot;%s&quot;';
$strUseTables = 'P�rdor tabelat';
$strUseTextField = 'P�rdor fush� teksti';
$strUseThisValue = 'P�rdor k�t� vler�';

$strValidateSQL = 'Vleft�so SQL';
$strValidatorError = 'Miratuesi SQL nuk arrin t� niset. Ju lutem kontrolloni instalimin e prapashtesave t� duhura php ashtu si p�rshkruhet tek %sdokumentimi%s.';
$strValue = 'Vler�';
$strVar = 'E ndryshueshme';
$strViewDumpDatabases = 'Shfaq dump (skema) e databazave';
$strViewDumpDB = 'Shfaq dump (skema) e databaz�s';
$strViewDump = 'Shfaq dump (skema) e tabel�s';

$strWebServerUploadDirectory = 'directory e upload t� server-it web';
$strWebServerUploadDirectoryError = 'Directory q� keni zgjedhur p�r upload nuk arrin t� gjehet';
$strWelcome = 'Mir�sevini tek %s';
$strWestEuropean = 'Europa Per�ndimore';
$strWildcard = 'wildcard';
$strWindowNotFound = 'Dritarja e destinimit t� browser nuk mund t� rifreskohet. Ka mund�si t� keni mbyllur dritaren n�n� apo q� browser-i juaj �sht� duke bllokuar rifreskimet nd�rmjet browser-ve p�r shkak t� ndonj� mase sigurie';
$strWithChecked = 'N.q.s. t� zgjedhur:';
$strWrongUser = 'Em�r p�rdoruesi apo fjal�kalim i gabuar. Ndalohet hyrja.';

$strXML = 'XML';

$strYes = ' Po ';

$strZeroRemovesTheLimit = 'Sh�nim: Vendosja e k�tyre opcioneve n� 0 (zero) do t� thot� asnj� limit.';
$strZip = '"kompresuar me zip"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate

$strBinaryLog = 'Binary log';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate
$strBufferPool = 'Buffer Pool';  //to translate
$strBufferPoolUsage = 'Buffer Pool Usage';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBusyPages = 'Busy pages';  //to translate

$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCSV = 'CSV';  //to translate

$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate

$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strEsperanto = 'Esperanto';  //to translate

$strFileNameTemplateDescriptionDatabase = 'database name';  //to translate
$strFileNameTemplateDescriptionServer = 'server name';  //to translate
$strFileNameTemplateDescriptionTable = 'table name';  //to translate
$strFileNameTemplateDescription = 'This value is interpreted using %1$sstrftime%2$s, so you can use time formatting strings. Additionally the following transformations will happen: %3$s. Other text will be kept as is.';  //to translate
$strFileToImport = 'File to import';  //to translate
$strFlushQueryCache = 'Flush query cache';  //to translate
$strFlushTables = 'Flush (close) all tables';  //to translate
$strFreePages = 'Free pages';  //to translate

$strGenerate = 'Generate';  //to translate
$strGeneratePassword = 'Generate Password';  //to translate

$strHandler = 'Handler';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate

$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strIndexWarningTable = 'Problems with indexes of table `%s`';//to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';  //to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  //to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';  //to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';  //to translate
$strInnoDBDataFilePath = 'Data files';  //to translate
$strInnoDBDataHomeDir = 'Data home directory';  //to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';  //to translate
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
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMyISAMDataPointerSize = 'Data pointer size';  //to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';  //to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';  //to translate
$strMyISAMMaxExtraSortFileSize = 'Maximum size for temporary files on index creation';  //to translate
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';  //to translate
$strMyISAMMaxSortFileSize = 'Maximum size for temporary sort files';  //to translate
$strMyISAMRecoverOptions = 'Automatic recovery mode';  //to translate
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';  //to translate
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the Repair by sorting process.';  //to translate
$strMyISAMRepairThreads = 'Repair threads';  //to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';  //to translate
$strMyISAMSortBufferSize = 'Sort buffer size';  //to translate
$strMysqlClientVersion = 'MySQL client version';  //to translate

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPersian = 'Persian';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strReplication = 'Replication';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strSelectBinaryLog = 'Select binary log to view';  //to translate
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
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSorting = 'Sorting';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate

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
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate

$strVersionInformation = 'Version information';  //to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

$strWriteRequests = 'Write requests';  //to translate

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

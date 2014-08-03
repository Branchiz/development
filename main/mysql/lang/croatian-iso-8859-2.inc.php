<?php
/* $Id: croatian-iso-8859-2.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 *   Croatian language file by
 *   Renato Pavi�i� <renato<at>translator-shop.org>
 */

$charset = 'iso-8859-2';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sri', '�et', 'Pet', 'Sub');
$month = array('Sij', 'Velj', 'O�u', 'Tra', 'Svi', 'Lip', 'Srp', 'Kol', 'Ruj', 'Lis', 'Stu', 'Pro');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y u %I:%M %p';
$timespanfmt = '%s dana, %s sati, %s minuta i %s sekunda';


$strAbortedClients = 'Prekinuto';
$strAccessDeniedCreateConfig = 'Vjerojatan razlog je nepostoje�a konfiguracijska datoteka. Za izradu mo�ete upotrijebiti naredbu %1$ssetup script%2$s';
$strAccessDeniedExplanation = 'phpMyAdmin poku�ao je uspostaviti vezu s MySQL poslu�iteljem, ali je poslu�itelj odbio povezivanje. U datoteci config.inc.php provjerite naziv ra�unala, korisni�ko ime i lozinku, te provjerite da se odgovaraju podacima koje vam je dao administrator MySQL poslu�itelja.';
$strAccessDenied = 'Pristup odbijen';
$strAction = 'Aktivnost';
$strAddAutoIncrement = 'Dodaj vrijednost AUTO_INCREMENT';
$strAddClause = 'Dodaj %s';
$strAddConstraints = 'Dodaj prisile';
$strAddDeleteColumn = 'Dodaj/Izbri�i stupce polja';
$strAddDeleteRow = 'Dodaj/Izbri�i redak kriterija';
$strAddFields = 'Dodaj %s polja';
$strAddHeaderComment = 'Dodaj prilago�eni komentar u zaglavlje ("\\n" razdvaja retke)';
$strAddIntoComments = 'Dodaj u komentare';
$strAddNewField = 'Dodaj novo polje';
$strAddPrivilegesOnDb = 'Dodaj privilegije za sljede�e baze podataka';
$strAddPrivilegesOnTbl = 'Dodaj privilegije za sljede�u tablicu';
$strAddSearchConditions = 'Dodaj  uvjete pretrage (sadr�aj uvjeta "gdje"):';
$strAddToIndex = 'Dodaj u indeks &nbsp;%s&nbsp;stupci';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Dodali ste novog korisnika.';
$strAdministration = 'Administracija';
$strAffectedRows = 'Zahva�eni redovi:';
$strAfterInsertBack = 'Kreni nazad na prethodnu stranicu';
$strAfterInsertNewInsert = 'Umetni dodatni novi redak';
$strAfterInsertNext = 'Uredi sljede�i redak';
$strAfterInsertSame = 'Kreni nazad na ovu stranicu';
$strAfter = 'Poslije %s';
$strAllowInterrupt = 'Dopusti prekid uvoza u slu�aju da skripta otkrije blizinu vremenskog ograni�enja. Ovo bi mogao biti dobar na�in uvoza velikih datoteka, ali mo�e prekinuti transakcije.';
$strAll = 'Sve';
$strAllTableSameWidth = 'Prikazati sve tablice uz istu �irinu?';
$strAlterOrderBy = 'Izmijeni rasporede tablice po';
$strAnalyzeTable = 'Analiziraj tablicu';
$strAnd = 'I';
$strAndThen = 'i potom';
$strAngularLinks = 'Kutne veze';
$strAnIndex = 'Indeks je pridodan na %s';
$strAny = 'Bilo koji';
$strAnyHost = 'Bilo koje ra�unalo';
$strAnyUser = 'Bilo koji korisnik';
$strApproximateCount = 'Mo�e biti pribli�no. Pogledajte �PP 3.11';
$strAPrimaryKey = 'Primarni klju� je dodan na %s';
$strArabic = 'Arapski';
$strArmenian = 'Armenski';
$strAscending = 'Uzlazno';
$strAtBeginningOfTable = 'Pri po�etku tablice';
$strAtEndOfTable = 'Pri zavr�etku tablice';
$strAttr = 'Atributi';
$strAutomaticLayout = 'Automatski raspored';

$strBack = 'Nazad';
$strBaltic = 'Balti�ki';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binarno';
$strBinaryDoNotEdit = 'Binarno - ne ure�uj';
$strBinaryLog = 'Binarni zapisnik';
$strBinLogEventType = 'Vrsta doga�aja';
$strBinLogInfo = 'Podaci';
$strBinLogName = 'Naziv zapisnika';
$strBinLogOriginalPosition = 'Izvorni polo�aj';
$strBinLogPosition = 'Polo�aj';
$strBinLogServerId = 'ID poslu�itelja';
$strBookmarkAllUsers = 'Neka svi korisnici imaju pristup ovom favoritu';
$strBookmarkCreated = 'Izra�en je favorit %s';
$strBookmarkDeleted = 'Favorit je izbrisan.';
$strBookmarkLabel = 'Oznaka';
$strBookmarkQuery = 'Favorizirani SQL upit';
$strBookmarkReplace = 'Zamijeni postoje�im favoritom istog naziva';
$strBookmarkThis = 'Favoriziraj ovaj SQL upit';
$strBookmarkView = 'Samo prikaz';
$strBrowseDistinctValues = 'Pretra�i prepoznatljive vrijednosti';
$strBrowseForeignValues = 'Pretra�i strane vrijednosti';
$strBrowse = 'Pretra�ivanje';
$strBufferPoolActivity = 'Aktivnost me�uspremnika';
$strBufferPool = 'Me�uspremnik';
$strBufferPoolUsage = 'Iskoristivost me�uspremnika';
$strBufferReadMissesInPercent = 'Propu�tena �itanja pri %';
$strBufferReadMisses = 'Propu�tena �itanja';
$strBufferWriteWaitsInPercent = 'Zapisivanje �eka pri %';
$strBufferWriteWaits = 'Zapisivanje �eka';
$strBulgarian = 'Bugarski';
$strBusyPages = 'Zaposlene stranice';
$strBzError = 'phpMyAdmin nije bio u mogu�nosti komprimirati izbacivanje zbog prekinutog Bz2 pro�irenja u ovoj verziji PHP-a. Sna�no se preporu�uje da postavite <code>$cfg[\'BZipDump\']</code> direktivu u va�oj phpMyAdmin konfiguracijskoj datoteci na <code>FALSE</code>Ako �elite upotrebljavati kompresijsku osobinu Bz2, bit �e potrebna nadogradnja na noviju verziju PHP-a. Detalje pregledajte u izvje�taju PHP nedostataka: %s.';
$strBzip = '"bzipano"';

$strCalendar = 'Kalendar';
$strCancel = 'Odustani';
$strCanNotLoadExportPlugins = 'Nije mogu�e u�itati dodatke za izvoz. Provjerite svoju instalaciju!';
$strCanNotLoadImportPlugins = 'Nije mogu�e u�itati dodatke za uvoz. Provjerite svoju instalaciju!';
$strCannotLogin = 'Prijavljivanje na MySQL poslu�itelj nije mogu�e';
$strCantLoad = 'Nije mogu�e u�itati pro�irenje [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a] . Provjerite svoju PHP konfiguraciju.';
$strCantLoadRecodeIconv = 'Nije mogu�e u�itati pro�irenja iconv ili recode potrebna za pretvaranje znakova. Potrebno je konfigurirati PHP radi omogu�avanja ovih pro�irenja ili unutar phpMyAdmin onemogu�iti pretvaranje znakova.';
$strCantRenameIdxToPrimary = 'Preimenovanje indeksa u PRIMARY nije mogu�e!';
$strCantUseRecodeIconv = 'Nije mogu�e upotrijebiti funkcije iconv, libiconv ili recode_string, iako izgleda da su sva potrebna pro�irenja u�itana. Provjerite svoju PHP konfiguraciju.';
$strCardinality = 'Najva�nije';
$strCaseInsensitive = 'nebitna veli�ina znakova';
$strCaseSensitive = 'veli�ina znakova je va�na';
$strCentralEuropean = 'Srednjoeuropski';
$strChangeCopyModeCopy = '... zadr�ati staru.';
$strChangeCopyModeDeleteAndReload = ' ... izbri�i starog iz korisni�kih tablica i potom ponovo u�itaj privilegije.';
$strChangeCopyMode = 'Izradi novog korisnika s istim privilegijama i...';
$strChangeCopyModeJustDelete = ' ... izbri�i starog iz korisni�kih tablica.';
$strChangeCopyModeRevoke = ' ... opozovi sve aktivne privilegije iz stare i potom je izbri�i.';
$strChangeCopyUser = 'Promjena podataka prijave / Kopiranje korisnika';
$strChangeDisplay = 'Odaberi polje za prikaz';
$strChangePassword = 'Promijeni lozinku';
$strChange = 'Promijeni';
$strCharsetOfFile = 'Tablica znakova za datoteku:';
$strCharsetsAndCollations = 'Tablica znakova i uspore�ivanja';
$strCharsets = 'Tablice znakova';
$strCharset = 'Tablica znakova';
$strCheckAll = 'Ozna�i sve';
$strCheckOverhead = 'Provjeri za prepunjene tablice';
$strCheckPrivsLong = 'Provjeri privilegije za bazu podataka "%s".';
$strCheckPrivs = 'Provjeri privilegije';
$strCheckTable = 'Provjeri tablicu';
$strChoosePage = 'Odaberite tablicu za ure�ivanje';
$strColComFeat = 'Prikazivanje stupca komentara';
$strCollation = 'Uspore�ivanje';
$strColumnNames = 'Nazivi stupaca';
$strColumnPrivileges = 'Privilegije specifi�ne za stupac';
$strCommand = 'Naredba';
$strCommentsForTable = 'COMMENTS FOR TABLE';
$strComments = 'Komentari';
$strCompatibleHashing = 'MySQL&nbsp;4.0 kompatibilno';
$strCompleteInserts = 'Dovr�i umetanja';
$strCompression = 'Kompresija';
$strCompressionWillBeDetected = 'Kompresija uvezene datoteke bit �e automatski prepoznata iz: %s';
$strConfigDefaultFileError = 'Nije mogu�e u�itati zadanu konfiguraciju iz: "%1$s"';
$strConfigFileError = 'phpMyAdmin nije mogao pro�itati va�u konfiguracijsku datoteku!<br />Mogu�i razlog je ako PHP prona�e pogre�ku u njezinom ra��lanjivanju ili ako PHP ne mo�e prona�i datoteku.<br />Potrebno je izravno pozvati konfiguracijsku datoteku putem donje veze i prou�iti prikazane PHP poruke o pogre�kama. U ve�ini slu�ajeva na nekom mjestu nedostaje znak navodnika ili to�ke-zareza.<br />Ako se prika�e prazna stranica, sve je u redu.';
$strConfigureTableCoord = 'Konfigurirajte koordinate tablice %s';
$strConnectionError = 'Povezivanje nije mogu�e: neispravna postavka.';
$strConnections = 'Veze';
$strConstraintsForDumped = 'Ograni�enja za izba�ene tablice';
$strConstraintsForTable = 'Ograni�enja za tablicu';
$strControluserFailed = 'Povezivanje kontrolnih korisnika na na�in kako je definirano u va�oj konfiguraciji nije uspjelo.';
$strCookiesRequired = 'Od ovog mjesta potrebno je omogu�iti kola�i�e.';
$strCopyDatabaseOK = 'Baza podataka %s kopirana je u %s';
$strCopy = 'Kopiraj';
$strCopyTable = 'Kopiraj tablicu u (bazapodataka<b>.</b>tablica):';
$strCopyTableOK = 'Tablica %s kopirana je u %s.';
$strCopyTableSameNames = 'Kopiranje u istu tablicu nije mogu�e!';
$strCouldNotKill = 'phpMyAdmin nije mogao ugasiti granu %s. Vjerojatno je ve� zatvorena.';
$strCreateDatabaseBeforeCopying = 'Prije kopiranja izradi bazu podataka (CREATE DATABASE)';
$strCreateIndex = 'Izradi indeks &nbsp;%s&nbsp;stupaca';
$strCreateIndexTopic = 'Izradi novi indeks';
$strCreate = 'Izradi';
$strCreateNewDatabase = 'Izradi novu bazu podataka';
$strCreateNewTable = 'Izradi novu tablicu u bazi podataka %s';
$strCreatePage = 'Izradi novu stranicu';
$strCreatePdfFeat = 'Izrada PDF datoteka';
$strCreateRelation = 'Izradi povezanost';
$strCreateTable  = 'Izradi tablicu';
$strCreateUserDatabase = 'Baza podataka za korisnika';
$strCreateUserDatabaseName = 'Izradi bazu podataka istog naziva i podari sve privilegije';
$strCreateUserDatabaseNone = 'Nijedan';
$strCreateUserDatabaseWildcard = 'Podari sve privilegije imenima s d�okerima (korisni�koime_%)';
$strCreationDates = 'Izrada/A�uriranje/Provjera datuma';
$strCriteria = 'Kriterij';
$strCroatian = 'Hrvatski';
$strCSV = 'CSV';
$strCyrillic = '�irilica';
$strCzech = '�e�ki';
$strCzechSlovak = '�e�ki ili Slova�ki';

$strDanish = 'Danski';
$strDatabase = 'Baza podataka';
$strDatabaseEmpty = 'Naziv baze podataka je prazan!';
$strDatabaseExportOptions = 'Opcije izvoza baze podataka';
$strDatabaseHasBeenDropped = 'Baza podataka %s je odba�ena.';
$strDatabases = 'Baze podataka';
$strDatabasesDropped = 'Baza podataka %s uspje�no je odba�ena.';
$strDatabasesStatsDisable = 'Onemogu�i statistike';
$strDatabasesStatsEnable = 'Omogu�i statistike';
$strDatabasesStatsHeavyTraffic = 'Napomena: Omogu�avanja statistika baze podataka mo�e prouzrokovati izuzetno velik promet izme�u web poslu�itelja i MySQL poslu�itelja.';
$strDatabasesStats = 'Statistike baza podataka';
$strDataDict = 'Rje�nik podataka';
$strDataOnly = 'Samo podatke';
$strDataPages = 'Stranice koje sadr�e podatke';
$strData = 'Podaci';
$strDBComment = 'Komentar baze podataka:  ';
$strDBCopy = 'Kopiraj bazu podataka u';
$strDbIsEmpty = 'Baza podataka izgleda praznom!';
$strDbPrivileges = 'Privilegije specifi�ne za bazu podataka';
$strDBRename = 'Preimenuj bazu podataka u';
$strDbSpecific = 'specifi�no za bazu podataka';
$strDefaultEngine = '%s je zadani pogon pohranjivanja na ovom MySQL poslu�itelju.';
$strDefaultValueHelp = 'Za zadane vrijednosti unesite samo jednu vrijednost, bez kosih crta ili navodnika, u sljede�em obliku: a';
$strDefault = 'Zadano';
$strDefragment = 'Defragmentiraj tablicu';
$strDelayedInserts = 'Upotrijebi odgo�ena umetanja';
$strDeleteAndFlushDescr = 'Ovo je naj�i��i na�in, ali ponovno u�itavanje privilegija mo�e potrajati.';
$strDeleteAndFlush = 'Izbri�i korisnike i potom ponovo u�itaj privilegije.';
$strDeleted = 'Redak je izbrisan';
$strDeletedRows = 'Izbrisani redovi:';
$strDelete = 'Izbri�i';
$strDeleteNoUsersSelected = 'Nema odabranih korisnika za uklanjanje!';
$strDeleteRelation = 'Izbri�i povezanost';
$strDeleting = 'Brisanje %s';
$strDelimiter = 'Razgrani�avanje';
$strDelOld = 'Trenutna stranica sadr�i reference prema tablicama koje vi�e ne postoje. �elite li izbrisati te reference?';
$strDescending = 'Silazno';
$strDescription = 'Opis';
$strDesignerHelpDisplayField = 'Polje pregledavanja prikazano je u rozoj boji. Kako biste za polje odabrali ili uklonili opciju polja za prikazivanje kliknite ikonu "Odaberite polje za prikazivanje", a zatim kliknite odgovaraju�i naziv polja.';
$strDesigner = 'Kreator';
$strDictionary = 'rje�nik';
$strDirectLinks = 'Izravne veze';
$strDirtyPages = 'Prljave stranice';
$strDisabled = 'Onemogu�eno';
$strDisableForeignChecks = 'Onemogu�i provjere stranih znakova';
$strDisplayFeat = 'Osobine prikaza';
$strDisplayOrder = 'Redoslijed prikaza:';
$strDisplayPDF = 'Prika�i PDF shemu';
$strDoAQuery = 'Izvedi "upit po primjeru" (d�oker: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentacija';
$strDoYouReally = '�elite li zaista  ';
$strDropDatabaseStrongWarning = 'UNI�TIT �ETE CJELOKUPNU BAZU PODATAKA!';
$strDrop = 'Ispusti';
$strDropUsersDb = 'Ispusti baze podataka koje imaju iste nazive i korisnike.';
$strDumpingData = 'Izbacivanje podataka za tablicu';
$strDumpSaved = 'Izbacivanje je spremljeno u datoteku %s.';
$strDumpXRows = 'Izbaci %s redaka, po�ev�i od zapisa # %s.';
$strDynamic = 'dinami�ki';

$strEditPDFPages = 'Uredi PDF stranice';
$strEditPrivileges = 'Uredi privilegije';
$strEdit = 'Ure�ivanje';
$strEffective = 'Na snazi';
$strEmpty = 'Isprazni';
$strEmptyResultSet = 'MySQL je vratio prazan komplet rezultata (npr. nula redova).';
$strEnabled = 'Omogu�eno';
$strEncloseInTransaction = 'Izvoz uklju�i u transakciju';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnd = 'Zavr�etak';
$strEngineAvailable = '%s je raspolo�iv na ovom MySQL poslu�itelju.';
$strEngineDisabled = '%s je onemogu�en za ovaj MySQL poslu�itelj.';
$strEngines = 'Pogoni';
$strEngineUnsupported = 'Ovaj MySQL poslu�itelj ne podr�ava pogon pohranjivanja %s.';
$strEnglish = 'Engleski';
$strEnglishPrivileges = ' Napomena: Nazivi MySQL privilegija navedeni su na engleskom jeziku ';
$strErrorInZipFile = 'Pogre�ka u ZIP arhivi:';
$strError = 'Pogre�ka';
$strErrorRelationAdded = 'Pogre�ka: Povezanost nije dodana.';
$strErrorRelationExists = 'Pogre�ka: Povezanost ve� postoji.';
$strErrorRenamingTable = 'Pogre�ka tijekom preimenovanja tablice %1$s u %2$s';
$strErrorSaveTable = 'Pogre�ka tijekom spremanja koordinata za Kreatora.';
$strEscapeWildcards = 'Da bi mogli biti upotrebljavani u doslovnom smislu, d�okerima \_ i \% mora prethoditi znak \\';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonski';
$strEvent = 'Doga�aj';
$strExcelEdition = 'Excel izdanje';
$strExecuteBookmarked = 'Izvr�i favorizirani upit';
$strExplain = 'Objasni SQL';
$strExportImportToScale = 'Uvoz / Izvor prema omjeru';
$strExport = 'Izvoz';
$strExportMustBeFile = 'Odabrana vrsta izvoza mora biti spremljena u datoteku!';
$strExtendedInserts = 'Pro�irena umetanja';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspjeli poku�aji';
$strFieldHasBeenDropped = 'Polje %s je odba�eno';
$strFieldInsertFromFileTempDirNotExists = 'Pogre�ka tijekom premje�tanja u�itane datoteke. Pogledajte �PP 1.11';
$strField = 'Polje';
$strFieldsEnclosedBy = 'Polja obuhva�ena po';
$strFieldsEscapedBy = 'Polja izostavljena po';
$strFields = 'Polja';
$strFieldsTerminatedBy = 'Polja zavr�ena s';
$strFileAlreadyExists = 'Datoteka %s ve� postoji na poslu�itelju. Promijenite naziv ili ozna�ite opciju za prepisivanje.';
$strFileCouldNotBeRead = 'Datoteku nije mogu�e pro�itati';
$strFileNameTemplateDescriptionDatabase = 'naziv baze podataka';
$strFileNameTemplateDescriptionServer = 'naziv poslu�itelja';
$strFileNameTemplateDescriptionTable = 'naziv tablice';
$strFileNameTemplateDescription = 'Vrijednost se interpretira pomo�u %1$sstrftime%2$s, pa mo�ete upotrijebiti naredbe oblikovanja vremena. Dodatno se mogu dogoditi sljede�a preoblikovanja: "%3$s". Ostatak teksta bit �e zadr�an u izvornom obliku.';
$strFileNameTemplate = 'Predlo�ak naziva datoteka';
$strFileNameTemplateRemember = 'zapamti predlo�ak';
$strFiles = 'Datoteke';
$strFileToImport = 'Datoteka za uvoz';
$strFixed = 'fiksirano';
$strFlushPrivilegesNote = 'Napomena: phpMyAdmin preuzima korisni�ke privilegije izravno iz MySQL tablica privilegija. U slu�aju da su ru�no mijenjane, sadr�aj ovih tablica mo�e se razlikovati od privilegija koje upotrebljava poslu�itelj. U tom je slu�aju potrebno %sponovo u�itati privilegije%s prije nastavljanja rada.';
$strFlushQueryCache = 'Isprazni pohranu upita';
$strFlushTable = 'Isprazni tablicu ("FLUSH")';
$strFlushTables = 'Isprazni (zatvori) sve tablice';
$strFontSize = 'Veli�ina fonta';
$strForeignKeyError = 'Pogre�ka tijekom izrade stranog klju�a (provjerite vrste podataka)';
$strFormat = 'Oblikovanje';
$strFormEmpty = 'U obrascu nedostaje vrijednost!';
$strFreePages = 'Slobodne stranice';
$strFullText = 'Potpuni tekstovi';
$strFunction = 'Funkcija';
$strFunctions = 'Funkcije';

$strGenBy = 'Generirano s';
$strGeneralRelationFeat = 'Op�e osobine relacija';
$strGenerate = 'Generiraj';
$strGeneratePassword = 'Generiraj lozinku';
$strGenTime = 'Vrijeme generiranja';
$strGeorgian = 'Gruzijski';
$strGerman = 'Njema�ki';
$strGlobal = 'op�e';
$strGlobalPrivileges = 'Op�e privilegije';
$strGlobalValue = 'Op�a vrijednost';
$strGo = 'Kreni';
$strGrantOption = 'Podarivanje';
$strGreek = 'Gr�ki';
$strGzip = '"gzipano"';

$strHandler = 'Hvati�ta';
$strHasBeenAltered = 'izmijenjeno je.';
$strHasBeenCreated = 'izra�eno je.';
$strHaveToShow = 'Morate odabrati najmanje jedan stupac za prikazivanje';
$strHebrew = 'Hebrejski';
$strHelp = 'Pomo�';
$strHexForBLOB = 'Za BLOB upotrijebi heksadecimalno';
$strHide         = 'Sakrij';
$strHideShowAll = 'Prika�i / Sakrij sve';
$strHideShowNoRelation = 'Prika�i / Sakrij tablice bez povezanosti';
$strHomepageOfficial = 'Slu�bena stranica programa phpMyAdmin';
$strHome = 'Po�etna stranica';
$strHostEmpty = 'Naziv ra�unala je prazan!';
$strHost = 'Ra�unalo';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ma�arski';

$strIcelandic = 'Islandski';
$strId = 'ID';
$strIdxFulltext = 'Puni tekst';
$strIEUnsupported = 'Internet Explorer ne podr�ava ovu funkciju.';
$strIgnoreDuplicates = 'Ignoriraj istovjetne redove';
$strIgnore = 'Ignoriraj';
$strIgnoreInserts = 'Upotrijebi ignoriranje umetaka';
$strImportExportCoords = 'Uvoz / Izvoz koordinate iz PDF sheme';
$strImportFiles = 'Uvezi datoteke';
$strImportFormat = 'Oblikovanje uvezene datoteke';
$strImportSuccessfullyFinished = 'Uvoz je uspje�no dovr�en. Izvr�eno upita: %d .';
$strImport = 'Uvoz';
$strIndexes = 'Indeksi';
$strIndexesSeemEqual = 'Sljede�i indeksi izgledaju jednakim i jednog je potrebno ukloniti:';
$strIndexHasBeenDropped = 'Index %s je odba�en';
$strIndex = 'Indeks';
$strIndexName = 'Naziv indeksa:';
$strIndexType = 'Vrsta indeksa:';
$strIndexWarningTable = 'Problemi s indeksima tablice `%s`';
$strInnoDBAutoextendIncrementDesc = ' Veli�ina koraka za pro�irivanje veli�ine automatski pro�iruju�eg prostora tablice u slu�aju njezinog ispunjavanja.';
$strInnoDBAutoextendIncrement = 'Korak autopro�irenja';
$strInnoDBBufferPoolSizeDesc = 'Veli�ina memorijskog me�uspremnika koju InnoDB upotrebljava za privremenu pohranu podataka i indeksa svojih tablica.';
$strInnoDBBufferPoolSize = 'Veli�ina me�uspremnika';
$strInnoDBDataFilePath = 'Podatkovne datoteke';
$strInnoDBDataHomeDirDesc = 'Uobi�ajeni dio putanje mapa za sve InnoDB podatkovne datoteke.';
$strInnoDBDataHomeDir = 'Osnovna mapa podataka';
$strInnoDBPages = 'stranice';
$strInnoDBRelationAdded = 'Dodana InnoDB povezanosti';
$strInnodbStat = 'InnoDB stanje';
$strInsecureMySQL = 'Va�a konfiguracijska datoteka sadr�i postavke (root korisnik bez lozinke) koja odgovara zadanom privilegiranom nalogu MySQL-a. Va� MySQL poslu�itelj pokrenut je sa zadanim postavkama i kao takav otvoren je upadima. Potrebno je ispraviti ovaj sigurnosni nedostatak.';
$strInsertAsNewRow = 'Umetni kao novi redak';
$strInsertedRowId = 'ID umetnutog retka:';
$strInsertedRows = 'Umetnuti redovi:';
$strInsert = 'Umetni';
$strInternalNotNecessary = '* Interna relacija nije potrebna ako tako�er postoji unutar InnoDB.';
$strInternalRelationAdded = 'Dodane interne povezanosti';
$strInternalRelations = 'Interne relacije';
$strInUse = 'u upotrebi';
$strInvalidAuthMethod = 'Neispravan komplet na�ina provjere vjerodostojnosti u konfiguraciji:';
$strInvalidColumnCount = 'Broj stupaca mora biti ve�i od nule.';
$strInvalidColumn = 'Odre�en je neispravan stupac (%s) !';
$strInvalidCSVFieldCount = 'Neispravan broj polja u CSV unosu unutar retka %d.';
$strInvalidCSVFormat = 'Neispravno oblikovanje u CSV unosu unutar retka %d.';
$strInvalidCSVParameter = 'Neispravan parametar za CSV uvoz: %s';
$strInvalidDatabase = 'Neispravna baza podataka';
$strInvalidFieldAddCount = 'Morate dodati najmanje jedno polje.';
$strInvalidFieldCount = 'Tablica mora sadr�avati najmanje jedno polje.';
$strInvalidLDIImport = 'Ovaj dodatak ne podr�ava uvoz komprimiranih datoteka!';
$strInvalidRowNumber = '%d nije valjani broj retka.';
$strInvalidServerHostname = 'Neispravan naziv za poslu�itelj %1$s. Molimo, pregledajte svoju konfiguraciju.';
$strInvalidServerIndex = 'Neispravan indeks poslu�itelja: "%s"';
$strInvalidTableName = 'Neispravan naziv tablice';

$strJapanese = 'Japanski';
$strJoins = 'Spojevi';
$strJumpToDB = 'Sko�i do baze podataka "%s".';
$strJustDeleteDescr = '"Izbrisani" �e korisnici i dalje mo�i pristupati poslu�itelju sve dok se privilegije ne u�itaju ponovo.';
$strJustDelete = 'Samo izbri�i korisnike iz tablice privilegija.';

$strKeepPass = 'Ne mijenjaj lozinku';
$strKeyCache = 'Pohrana klju�eva';
$strKeyname = 'Naziv klju�a';
$strKill = 'Eliminiraj';
$strKnownExternalBug = 'Na funkcionalnost %s utje�e poznati nedostatak. Pogledajte %s';
$strKorean = 'Korejski';

$strLandscape = 'Polo�eno';
$strLanguage = 'Jezik';
$strLanguageUnknown = 'Nepoznati jezik: %1$s.';
$strLatchedPages = 'Vezane stranice';
$strLatexCaption = 'Naslov tablice';
$strLatexContent = 'Sadr�aj tablice __TABLE__';
$strLatexContinuedCaption = 'Nastavljeni naslov tablice';
$strLatexContinued = '(nastavljeno)';
$strLatexIncludeCaption = 'Uklju�i naslov tablice';
$strLatexLabel = 'Klju� oznake';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tablice __TABLE__';
$strLatvian = 'Latvijski';
$strLDI = 'CSV upotrebom LOAD DATA';
$strLDILocal = 'Upotrijebi lokalnu klju�nu rije�';
$strLengthSet = 'Duljina/Vrijednosti';
$strLimitNumRows = 'Broj redaka po stranici';
$strLinesTerminatedBy = 'Redovi zavr�eni s';
$strLinkNotFound = 'Veza nije prona�ena';
$strLinksTo = 'Povezano s';
$strLithuanian = 'Litavski';
$strLocalhost = 'Lokalno';
$strLocationTextfile = 'Lokacija tekstualne datoteke';
$strLoginInformation = '_Podaci prijave';
$strLogin = 'Prijava';
$strLogout = 'Odjava';
$strLogPassword = 'Lozinka:';
$strLogServer = 'Poslu�itelj';
$strLogUsername = 'Korisni�ko ime:';
$strLongOperation = 'Ovaj postupak mo�e potrajati dulje vrijeme. Ipak nastaviti?';

$strMaxConnects = 'najv. uzastopnih veza';
$strMaximalQueryLength = 'Najve�a duljina izra�enog upita';
$strMaximumSize = 'Najv: %s%s';
$strMbExtensionMissing = 'PHP pro�irenje mbstring nije prona�eno i izgleda da upotrebljavate multibyte tablicu znakova. Bez pro�irenja mbstring, phpMyAdmin nije u mogu�nosti pravilno razdjeljivati naredbe i mo�e do�i do neo�ekivanih rezultata.';
$strMbOverloadWarning = 'Omogu�ili ste funkciju mbstring.func_overload u va�oj PHP konfiguraciji. Ova opcija nije kompatibilna s programom phpMyAdmin i mo�e prouzrokovati o�te�ivanje nekih podataka!';
$strMIME_available_mime = 'Raspolo�ive MIME vrste';
$strMIME_available_transform = 'Raspolo�iva preoblikovanja';
$strMIME_description = 'Opis';
$strMIME_MIMEtype = 'MIME vrsta';
$strMIME_nodescription = 'Za ovo preoblikovanje ne postoji raspolo�iv opis.<br />Molimo da od autora zatra�ite obja�njenje rada %s .';
$strMIME_transformation_note = 'Za popis raspolo�ivih opcija preoblikovanja i njihovih MIME vrsta oblikovanja, kliknite %sopcije preoblikovanja%s';
$strMIME_transformation_options_note = 'Unesite vrijednosti za opcije preoblikovanja upotrebom ovog oblika: \'a\', 100, b,\'c\'...<br />Ako je potrebno unijeti lijevu kosu crtu ("\") ili jednostruki navodnik ("\'") unutar ovih vrijednosti, ispred znaka stavite lijevu kosu crtu (na primjer: \'\\\\xyz\' ili \'a\\\'B\').';
$strMIME_transformation_options = 'Opcije preoblikovanja';
$strMIME_transformation = 'Pretvaranje preglednika';
$strMIMETypesForTable = 'MIME VRSTE ZA TABLICU';
$strMIME_without = 'MIME vrste ispisane kurzivom nemaju posebnu funkciju preoblikovanja';
$strModifications = 'Izmjene su spremljene';
$strModifyIndexTopic = 'Uredi indeks';
$strModify = 'Uredi';
$strMoveMenu = 'Premjesti izbornik';
$strMoveTableOK = 'Tablica %s premje�tena je u %s.';
$strMoveTable = 'Premjesti tablicu u (bazapodataka<b>.</b>tablica):';
$strMoveTableSameNames = 'Premje�tanje u istu tablicu nije mogu�e!';
$strMultilingual = 'vi�ejezi�no';
$strMyISAMDataPointerSizeDesc = 'Zadana veli�ina pokazatelja podataka u bajtovima, koju �e upotrijebiti naredba CREATE TABLE za MyISAM tablice ako opcija MAX_ROWS nije odre�ena.';
$strMyISAMDataPointerSize = 'Veli�ina pokazatelja podataka';
$strMyISAMMaxExtraSortFileSizeDesc = 'Ako bi privremena datoteka za brzu izradu MyISAM indeksa mogla biti ve�a od pohrane klju�eva, uz ovdje navedenu vrijednost, preferiraj na�in pohrane klju�eva.';
$strMyISAMMaxExtraSortFileSize = 'Najve�a veli�ina privremenih datoteka pri izradi indeksa';
$strMyISAMMaxSortFileSizeDesc = 'Najve�a veli�ina privremene datoteke koju MySQL smije upotrijebiti tijekom ponovne izrade MyISAM indeksa (tijekom izvo�enja naredbi REPAIR TABLE, ALTER TABLE ili LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Najve�a veli�ina datoteke za privremeno preslagivanje';
$strMyISAMRecoverOptionsDesc = 'Na�in rada za automatski povrat sru�enih MyISAM tablica, na na�in kojim je odre�en putem opcije --myisam-recover.';
$strMyISAMRecoverOptions = 'Rad s automatskim povratom';
$strMyISAMRepairThreadsDesc = 'Ako je ova vrijednost ve�a od 1, MyISAM indeksi tablica izra�uju se paralelno (svaki indeks unutar vlastite grane) tijekom popravka putem postupka preslagivanja.';
$strMyISAMRepairThreads = 'Popravi grane';
$strMyISAMSortBufferSizeDesc = 'Me�uspremnik koji je predodre�en za potrebe preslagivanja MyISAM indeksa tijekom naredbe REPAIR TABLE ili tijekom izrade indeksa naredbama CREATE INDEX ili ALTER TABLE.';
$strMyISAMSortBufferSize = 'Veli�ina me�uspremnika preslagivanja';
$strMySQLCharset = 'MySQL tablica znakova';
$strMysqlClientVersion = 'MySQL verzija klijenta';
$strMySQLConnectionCollation = 'MySQL uspore�ivanje veza';
$strMysqlLibDiffersServerVersion = 'Verzija %s va�e PHP MySQL biblioteke razlikuje se oda va�e verzije %s MySQL poslu�itelja. Ovo bi moglo prouzrokovati nepredvi�eno pona�anje.';
$strMySQLSaid = 'MySQL je poru�io:  ';
$strMySQLShowProcess = 'Prika�i procese';
$strMySQLShowStatus = 'Prika�i podatke MySQL pokretanja';
$strMySQLShowVars = 'Prika�i MySQL sistemske varijable';

$strName = 'Naziv';
$strNext = 'Sljede�e';
$strNoActivity = 'Nije bilo nikakvih aktivnosti tijekom %s sekunda. Prijavite se ponovo.';
$strNoDatabases = 'Nema baza podataka';
$strNoDatabasesSelected = 'Nema odabrane baze podataka.';
$strNoDataReceived = 'Nisu primljeni nikakvi podaci za uvoz. Ili nije dat naziv datoteke ili veli�ina datoteke prelazi najve�u dopu�tenu veli�inu od strane va�e PHP konfiguracije. Pogledajte �PP 1.16.';
$strNoDescription = 'bez opisa';
$strNoDetailsForEngine = 'Za ovaj pogon pohranjivanje ne postoje raspolo�ivi podaci.';
$strNoDropDatabases = '"DROP DATABASE" izjave su onemogu�ene.';
$strNoExplain = 'Presko�i Objasni SQL';
$strNoFilesFoundInZip = 'Datoteke nisu prona�ene unutar ZIP arhive!';
$strNoFrames = 'phpMyAdmin je jednostavniji za upotrebu s preglednikom koji <b>podr�ava okvire</b>.';
$strNoIndex = 'Nema definiranog indeksa!';
$strNoIndexPartsDefined = 'Nema definiranih dijelova indeksa!';
$strNoModification = 'Bez izmjena';
$strNo = 'Ne';
$strNone = 'bez kompresije';
$strNoOptions = 'Ovaj oblik nema raspolo�ive opcije';
$strNoPassword = 'Bez lozinke';
$strNoPermission = 'Web poslu�itelj nema dopu�tenja za spremanje datoteke %s.';
$strNoPhp = 'Bez PHP koda';
$strNoPrivileges = 'Bez privilegija';
$strNoRights = 'Nemate dovoljno privilegija da boravite ovdje!';
$strNoRowsSelected = 'Nema odabranih redova';
$strNoSpace = 'Nema dovoljno prostora za spremanje datoteke %s.';
$strNoTablesFound = 'U bazi podataka nisu prona�ene tablice.';
$strNoThemeSupport = 'Podr�ka za teme ne postoji. Provjerite va�u konfiguraciju i/ili va�e teme u mapi %s.';
$strNotNumber = 'Ovo nije brojka!';
$strNotOK = 'nije OK';
$strNotSet = 'tablica <b>%s</b> nije prona�ena ili nije zadana u %s';
$strNoUsersFound = 'Korisnici nisu prona�eni.';
$strNoValidateSQL = 'Presko�i provjeru valjanosti SQL-a';
$strNull = 'Null';
$strNumberOfFields = 'Broj polja';
$strNumberOfTables = 'Broj tablica';
$strNumSearchResultsInTable = '%s poklapanja unutar tablice <i>%s</i>';
$strNumSearchResultsTotal = '<b>Ukupno:</b> <i>%s</i> poklapanja';
$strNumTables = 'Tablice';

$strOK = 'U redu  ';
$strOpenDocumentSpreadsheet = 'Otvori izra�unsku tablicu dokumenta';
$strOpenDocumentText = 'Otvori tekst dokumenta';
$strOpenNewWindow = 'Otvori novi phpMyAdmin prozor';
$strOperations = 'Operacije';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimiziraj tablicu';
$strOptions = 'Opcije';
$strOr = 'Ili';
$strOverhead = 'Prepunjenje';
$strOverwriteExisting = 'Prepi�i postoje�e datoteke';

$strPageNumber = 'Broj stranice:';
$strPagesToBeFlushed = 'Stranice za pra�njenje';
$strPaperSize = 'Veli�ina papira';
$strPartialImport = 'Djelomi�an uvoz';
$strPartialText = 'Djelomi�ni tekstovi';
$strPasswordChanged = 'Lozinka za %s uspje�no je promijenjena.';
$strPasswordEmpty = 'Lozinka je prazna!';
$strPasswordHashing = 'Izrada presjeka lozinke';
$strPassword = 'Lozinka';
$strPasswordNotSame = 'Lozinke se ne podudaraju!';
$strPdfDbSchema = 'Shema "%s" baza podataka - stranica %s';
$strPdfInvalidTblName = 'Tablica "%s" ne postoji!';
$strPdfNoTables = 'Nema tablica';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Generira izvje�taj koji sadr�i podatke samo jedne tablice)';
$strPDFReportTitle = 'Naslov izvje�taja';
$strPerHour = 'po satu';
$strPerMinute = 'po minuti';
$strPerSecond = 'po sekundi';
$strPersian = 'Perzijski';
$strPhoneBook = 'telefonski imenik';
$strPHP40203 = 'Upotrebljavate PHP 4.2.3 koji ima ozbiljne pote�ko�e s nizovima od vi�estrukih bajtova (mbstring). Pogledajte PHP izvje�taj o nedostatku 19404. Ne preporu�uje se upotreba ove verzije PHP-a uz program phpMyAdmin.';
$strPhp = 'Izradi PHP kod';
$strPHPVersion = 'PHP verzija';
$strPleaseSelectPrimaryOrUniqueKey = 'Odaberite primarni klju� ili jedinstveni klju�';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = 'Direktiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> MORA BITI postavljena u va�oj konfiguracijskoj datoteci!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Poljski';
$strPortrait = 'Portret';
$strPos1 = 'Na vrh stranice';
$strPrevious = 'Prethodni';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je odba�en';
$strPrimaryKeyName = 'Naziv primarnog klju�a mora biti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora biti</b> naziv i <b>samo naziv</b> primarnog klju�a!)';
$strPrimary = 'Primarni';
$strPrint = 'Ispi�i';
$strPrintViewFull = 'Prikaz ispisa (s potpunim tekstovima)';
$strPrintView = 'Prikaz ispisa';
$strPrivDescAllPrivileges = 'Obuhva�a sve privilegije osim GRANT (Podari).';
$strPrivDescAlter = 'Dopu�ta izmjenu strukture postoje�ih tablice.';
$strPrivDescAlterRoutine = 'Dopu�ta izmjenu i odbacivanje pohranjenih rutina.';
$strPrivDescCreateDb = 'Dopu�ta izradu novih baze podataka i tablice.';
$strPrivDescCreateRoutine = 'Dopu�ta izradu pohranjenih rutina.';
$strPrivDescCreateTbl = 'Dopu�ta izradu novih tablica.';
$strPrivDescCreateTmpTable = 'Dopu�ta izradu privremenih tablica.';
$strPrivDescCreateUser = 'Dopu�ta izradu, odbacivanje i preimenovanje korisni�kih naloga.';
$strPrivDescCreateView = 'Dopu�ta izradu novih prikaza.';
$strPrivDescDelete = 'Dopu�ta brisanje podataka.';
$strPrivDescDropDb = 'Dopu�ta odbacivanje baza podataka i tablica.';
$strPrivDescDropTbl = 'Dopu�ta odbacivanje tablica.';
$strPrivDescExecute5 = 'Dopu�ta pokretanje pohranjenih rutina.';
$strPrivDescExecute = 'Dopu�ta izvr�avanje pohranjenih postupaka. Nema u�inka u ovoj verziji MySQL-a.';
$strPrivDescFile = 'Dopu�ta uvoz i izvoz podataka iz datoteka.';
$strPrivDescGrant = 'Dopu�ta dodavanje korisnika i privilegija bez ponovnog u�itavanja tablica.';
$strPrivDescIndex = 'Dopu�ta izradu i odbacivanje indeksa.';
$strPrivDescInsert = 'Dopu�ta umetanje i zamjenu podataka.';
$strPrivDescLockTables = 'Dopu�ta zaklju�avanje tablica u trenutnoj grani.';
$strPrivDescMaxConnections = 'Ograni�ava broj novih povezivanja koje korisnik mo�e otvoriti, po satu.';
$strPrivDescMaxQuestions = 'Ograni�ava broj upita koje korisnik mo�e poslati poslu�itelju, po satu.';
$strPrivDescMaxUpdates = 'Ograni�ava broj naredbi koje korisnik mo�e pokrenuti, a �ija je namjena mijenjanje bilo koje tablice ili baze podataka, po satu.';
$strPrivDescMaxUserConnections = 'Ograni�ava broj istovremenih povezivanja koje korisnik mo�e imati.';
$strPrivDescProcess3 = 'Dopu�ta eliminiranje postupaka drugih korisnika.';
$strPrivDescProcess4 = 'Dopu�ta pregledavanje cjelokupnih upita u popisu postupaka.';
$strPrivDescReferences = 'Nema u�inka u ovoj verziji MySQL-a.';
$strPrivDescReload = 'Dopu�ta ponovno u�itavanje postavki poslu�itelja i pra�njenje privremene pohrane poslu�itelja.';
$strPrivDescReplClient = 'Dopu�ta korisnik postavljanje upita o lokaciji pot�injenih i gospodara.';
$strPrivDescReplSlave = 'Potrebno za replikacijske pot�injene.';
$strPrivDescSelect = 'Dopu�ta �itanje podataka.';
$strPrivDescShowDb = 'Daje pristup cjelokupnom popisu baza podataka.';
$strPrivDescShowView = 'Dopu�ta izvo�enje upita SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Dopu�ta ga�enje poslu�itelja.';
$strPrivDescSuper = 'Dopu�ta povezivanje �ak i kad je dostignut najve�i broj veza. Potrebno za ve�inu administrativnih operacija poput postavljanja op�ih varijabli ili eliminiranje grana drugih korisnika.';
$strPrivDescUpdate = 'Dopu�ta mijenjanje podataka.';
$strPrivDescUsage = 'Bez privilegija.';
$strPrivileges = 'Privilegije';
$strPrivilegesReloaded = 'Privilegije su uspje�no u�itane.';
$strProcedures = 'Postupci';
$strProcesses = 'Procesi';
$strProcesslist = 'Popis procesa';
$strProfiling = 'Izrada profila';
$strProtocolVersion = 'Verzija protokola';
$strPutColNames = 'Nazive polja stavi u prvi red';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Upit';
$strQueryCache = 'Pohrana upita';
$strQueryFrame = 'Prozor za upite';
$strQueryOnDb = 'SQL upit nad bazom podataka <b>%s</b>:';
$strQueryResultsOperations = 'Operacije rezultata upita';
$strQuerySQLHistory = 'SQL povijest';
$strQueryStatistics = '<b>Statistike upita</b>: Od pokretanja poslu�itelju je upu�eno %s upita.';
$strQueryTime = 'Upit je trajao %01,4f sek';
$strQueryType = 'Vrsta upita';
$strQueryWindowLock = 'Ne prepisuj ovaj upit iz vanjskog prozora';

$strReadRequests = 'Pro�itaj zahtjeve';
$strReceived = 'Primljeno';
$strRecommended = 'preporu�eno';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Provjeri referencijalan integritet:';
$strRefresh = 'Osvje�i';
$strRelationalSchema = 'Shema relacija';
$strRelationDeleted = 'Povezanost je izbrisana';
$strRelationNotWorking = 'Dodatne osobine za rad s povezanim tablicama su isklju�ene. Da biste saznali za�to kliknite %sovdje%s.';
$strRelationsForTable = 'RELACIJE TABLICE';
$strRelations = 'Relacije';
$strRelationView = 'Prikaz relacija';
$strReloadingThePrivileges = 'Ponovno u�itavanje privilegija';
$strReload = 'Osvje�i';
$strReloadPrivileges = 'Ponovno u�itaj privilegije';
$strRemoveSelectedUsers = 'Ukloni odabrane korisnike';
$strRenameDatabaseOK = 'Baza podataka %s preimenovana je u %s';
$strRenameTableOK = 'Tablica %s preimenovana je u %s';
$strRenameTable = 'Preimenuj tablicu u';
$strRepairTable = 'Popravi tablicu';
$strReplaceNULLBy = 'NULL zamijeni s';
$strReplaceTable = 'Podatke tablice zamijeni datotekom';
$strReplication = 'Replikacija';
$strReset = 'Povrat';
$strResourceLimits = 'Ograni�enja resursa';
$strRestartInsertion = 'Ponovno pokreni umetanje s %s redaka';
$strReType = 'Ponovite';
$strRevokeAndDeleteDescr = 'Korisnici �e i dalje imati privilegiju USAGE (Upotreba) sve dok se privilegije ponovno ne u�itaju.';
$strRevokeAndDelete = 'Opozovi sve aktivne privilegije korisnika i potom ih izbri�i.';
$strRevokeMessage = 'Opozvali ste privilegije za %s';
$strRevoke = 'Opozovi';
$strRomanian = 'Rumunjski';
$strRoutineReturnType = 'Vrsta povratka';
$strRoutines = 'Rutine';
$strRowLength = 'Duljina retka';
$strRowsFrom = 'redovi koji zapo�inju zapisom #';
$strRowSize = ' Veli�ina retka ';
$strRowsModeFlippedHorizontal = 'vodoravno (okrenuta zaglavlja)';
$strRowsModeHorizontal = 'vodoravno';
$strRowsModeOptions = 'u na�inu %s i ponavljaj zaglavlja nakon %s �elija';
$strRowsModeVertical = 'uspravno';
$strRows = 'Redaka';
$strRowsStatistic = 'Statistike redova';
$strRunning = 'Izvr�ava se pri %s';
$strRunQuery = 'Podnesi upit';
$strRunSQLQueryOnServer = 'Pokreni SQL upit na poslu�itelju %s';
$strRunSQLQuery = 'Pokreni SQL upit na bazi podataka %s';
$strRussian = 'Ruski';

$strSaveOnServer = 'Spremi na poslu�itelju u mapi %s';
$strSavePosition = 'Spremi polo�aj';
$strSave = 'Spremi';
$strScaleFactorSmall = 'Vrijednost omjera suvi�e je malen da bi shema stala na jednu stranicu';
$strSearchFormTitle = 'Tra�i u bazi podataka';
$strSearchInTables = 'Unutar tablica:';
$strSearchNeedle = 'Rije�i ili vrijednost za pretra�ivanje (d�oker: "%"):';
$strSearchOption1 = 'najmanje jedna rije�';
$strSearchOption2 = 'sve rije�i';
$strSearchOption3 = 'to�an izraz';
$strSearchOption4 = 'kao regularan izraz';
$strSearchResultsFor = 'Rezultati pretra�ivanja za "<i>%s</i>" %s:';
$strSearch = 'Tra�i';
$strSearchType = 'Tra�i:';
$strSecretRequired = 'Konfiguracijska datoteka potra�uje tajnu lozinku (blowfish_secret).';
$strSelectADb = 'Odaberite bazu podataka';
$strSelectAll = 'Odaberi sve';
$strSelectBinaryLog = 'Odaberite binarni zapisnik za prikaz';
$strSelectFields = 'Odaberite polja (najmanje jedno):';
$strSelectForeignKey = 'Odaberite strani klju�';
$strSelectNumRows = 'unutar upita';
$strSelectReferencedKey = 'Odaberite referentni klju�';
$strSelectTables = 'Odaberite tablice';
$strSend = 'Spremi kao datoteku';
$strSent = 'Poslano';
$strServerChoice = 'Odabir poslu�itelja';
$strServerNotResponding = 'Poslu�itelj ne odgovara';
$strServer = 'Poslu�itelj';
$strServers = 'Poslu�itelji';
$strServerStatusDelayedInserts = 'Odgo�ena umetanja';
$strServerStatus = 'Podaci o razini izvr�avanja';
$strServerStatusUptime = 'Ovaj MySQL poslu�itelj radi tijekom %s. Pokrenut je %s.';
$strServerTabVariables = 'Varijable';
$strServerTrafficNotes = '<b>Promet poslu�itelja</b>: Ove tablice prikazuju statistike mre�nog prometa na ovom MySQL poslu�itelju od trenutka njegovog pokretanja.';
$strServerVars = 'Varijable i postavke poslu�itelja';
$strServerVersion = 'Verzija poslu�itelja';
$strSessionStartupErrorGeneral = 'Pokretanje sesije nije mogu�e uslijed pogre�aka. Provjerite pogre�ke koje ispisuje va� PHP i/ili datoteku zapisnika poslu�itelja i pravilno konfigurirajte va�u instalaciju PHP-a.';
$strSessionValue = 'Vrijednost sesije';
$strSetEnumVal = 'Ako je vrata polja "enum" ili "set", unesite vrijednosti u sljede�em obliku: \'a\',\'B\',\'c\'...<br />Ako je potrebno unijeti lijevu kosu crtu ("\") or a single quote ("\'") amongst those values, precede it with a backslash (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Prika�i sve';
$strShowColor = 'Prika�i boju';
$strShowDatadictAs = 'Oblikovanje rje�nika podataka';
$strShowFullQueries = 'Prika�i pune upite';
$strShowGrid = 'Prika�i mre�u';
$strShowHideLeftMenu = 'Prika�i/sakrij lijevi izbornik';
$strShowingBookmark = 'Prikazivanje oznake';
$strShowingPhp = 'Prikazivanje kao PHP koda';
$strShowingRecords = 'Prikazivanje redaka';
$strShowingSQL = 'Prikazivanje SQL upita';
$strShowOpenTables = 'Prika�i otvorene tablice';
$strShowPHPInfo = 'Prika�i PHP podatke';
$strShow = 'Prika�i';
$strShowSlaveHosts = 'Prika�i pot�injena ra�unala';
$strShowSlaveStatus = 'Prika�i stanje pot�injenog';
$strShowStatusBinlog_cache_disk_useDescr = 'Broj transakcija koje su upotrebljavale privremeni binarni zapisnik pohrane, ali su nadma�ile vrijednost binlog_cache_size i upotrijebile privremenu datoteku za pohranjivanje izjava transakcija.';
$strShowStatusBinlog_cache_useDescr = 'Broj transakcija koje su upotrebljavale privremeni binarni zapisnik pohrane.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Broj privremenih tablica koje poslu�itelj automatski izra�uje na disku tijekom izvr�avanja izjava. Ako je stavka Created_tmp_disk_tables velika, moglo bi biti potrebno da pove�ate vrijednost tmp_table_size, da biste privremene tablice smjestili u radnu memoriju, a ne na tvrdi disk.';
$strShowStatusCreated_tmp_filesDescr = 'Koliko je privremenih tablica izradio mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Broj privremenih tablica u memoriji koje je poslu�itelj automatski izradio tijekom izvr�avanja izjava.';
$strShowStatusDelayed_errorsDescr = 'Broj redaka upisanih pomo�u naredbe INSERT DELAYED, a kod kojih je do�lo do neke vrste pogre�ke (vjerojatan razlog je udvojen klju�).';
$strShowStatusDelayed_insert_threadsDescr = 'Broj hvati�te grana INSERT DELAYED u upotrebi. Svaka druga tablica na koju se primjeni INSERT DELAYED dobiva vlastitu granu.';
$strShowStatusDelayed_writesDescr = 'Broj redaka zapisanih pomo�u INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Broj izvr�enih izjava FLUSH.';
$strShowStatusHandler_commitDescr = 'Broj internih izjava COMMIT.';
$strShowStatusHandler_deleteDescr = 'Brojka koja prokazuje koliko puta je redak bio izbrisan iz tablice.';
$strShowStatusHandler_discoverDescr = 'MySQL poslu�itelj mo�e upitati pogon pohranjivanja NDB skupine, zna li za tablicu s tra�enim nazivom. Ovaj se postupak naziva otkrivanje. Handler_discover nazna�uje koliko je puta tablica bila otkrivenom.';
$strShowStatusHandler_read_firstDescr = 'Brojka koja prokazuje koliko puta je prvi unos bio �itan iz indeksa. Velik broj je pokazatelj da poslu�itelj izvodi mnogo potpunih pretra�ivanja indeksa, npr. SELECT col1 FROM foo, pri �emu je col1 indeksiran.';
$strShowStatusHandler_read_keyDescr = 'Broj zahtjeva za �itanje retka zasnovan na klju�u. Velik broj je pokazatelj da su va�i upiti i tablice pravilno indeksirani.';
$strShowStatusHandler_read_nextDescr = 'Broj zahtjeva za �itanje sljede�eg retka u redoslijedu klju�a. Ovaj se broj pove�ava ako izvodite upite stupca indeksa s ograni�enjem opsega ili ako izvodite pretra�ivanje indeksa.';
$strShowStatusHandler_read_prevDescr = 'Broj zahtjeva za �itanje prethodnog retka u redoslijedu klju�a. Ovaj na�in �itanja uglavnom se upotrebljava za optimiziranje opcije ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Broj zahtjeva za �itanje retka zasnovanog na fiksnom polo�aju. Ovaj iznos je velik ako izvodite mnogo upita koji zahtjevaju preslagivanje rezultata. Vjerojatno imate mnogo upita koji zahtijevaju da MySQL pretra�uje cjelokupne tablice ili imate spojeve koji ne upotrebljavaju klju� na pravilan na�in.';
$strShowStatusHandler_read_rnd_nextDescr = 'Broj zahtjeva za �itanje sljede�eg retka u datoteci s podacima. Ovaj broj je velik ako izvodite mnogo pretra�ivanja tablice. Op�enito, ovaj iznos nazna�uje da va�a tablice nisu pravilno indeksirane ili da va�i upiti nisu napisani na na�in koji iskori�tava prednosti raspolo�ivih indeksa.';
$strShowStatusHandler_rollbackDescr = 'Broj internih izjava ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Broj zahtjeva za a�uriranje retka u tablici.';
$strShowStatusHandler_writeDescr = 'Broj zahtjeva za umetanje retka u tablici.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Broj stranice koje sadr�e podatke (dirty ili clean).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Broj stranica koje su trenutno \'dirty\'.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Broj stranica me�uspremnika za koje je podnesen zahtjev za pra�njenjem.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Broj slobodnih stranica.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Broj vezanih stranica u InnoDB me�uspremniku. Ove se stranice trenutno �itaju ili zapisuju, ili ih nije mogu�e isprazniti ili ukloniti iz nekog drugog razloga.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Broj stranica koje su zauzete jer su dodijeljene za administrativna prepunjenja, poput zaklju�avanja redaka ili adaptivni indeks presjeka. Ovu je vrijednost mogu�e izra�unati i kao Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Ukupna veli�ina me�uspremnika, u stranicama.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Broj "nasumi�nih" pripremnih �itanja koje je InnoDB inicijalizirao. Doga�a se kad upit mora pretra�iti veliki dio tablice, ali nasumi�nim redoslijedom.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Broj slijednih pripremnih �itanja koje je inicijalizirao InnoDB. Ovo se doga�a kad InnoDB izvodi potpuno pretra�ivanje tablice.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Broj logi�kih zahtjeva za �itanjem koje je obavio InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Broj logi�kih �itanja koje InnoDB nije mogao zadovoljiti iz me�uspremnik i morao je izvesti �itanje po jedne stranice.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Uobi�ajeno, zapisivanja u InnoDB me�uspremnik izvode se u pozadini. Ipak, ako je potrebno i��itati ili izraditi stranicu, a nema raspolo�ive prazne stranice, bit �e potrebno pri�ekati pra�njenje stranice. Ovaj broja� prikazuje stanje ovog �ekanja. Ako je veli�ina me�uspremnika pravilno postavljena, ova bi vrijednost trebala biti malenom.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Broj izvr�enih zapisivanja u InnoDB me�uspremnik.';
$strShowStatusInnodb_data_fsyncsDescr = 'Broj dosada�njih fsync() operacija.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Trenutan broj fsync() operacija u �ekanju.';
$strShowStatusInnodb_data_pending_readsDescr = 'Trenutan broj �itanja u �ekanju.';
$strShowStatusInnodb_data_pending_writesDescr = 'Trenutan broj zapisivanja u �ekanju.';
$strShowStatusInnodb_data_readDescr = 'Koli�ina podataka pro�itanih do ovog trenutka, u bajtovima.';
$strShowStatusInnodb_data_readsDescr = 'Ukupan broj i��itavanja podataka.';
$strShowStatusInnodb_data_writesDescr = 'Ukupan broj zapisivanja podataka.';
$strShowStatusInnodb_data_writtenDescr = 'Koli�ina podataka zapisanih do ovog trenutka, u bajtovima.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Broj dvostrukih zapisivanja do ovog trenutka i broj stranica zapisanih za ovu potrebu.';
$strShowStatusInnodb_dblwr_writesDescr = 'Broj dvostrukih zapisivanja do ovog trenutka i broj stranica zapisanih za ovu potrebu.';
$strShowStatusInnodb_log_waitsDescr = 'Broj �ekanja koja su se dogodila zbog nedovoljno velikog zapisnika me�uspremnika, te je bilo potrebno �ekati njegovo pra�njenje prije nastavka rada.';
$strShowStatusInnodb_log_write_requestsDescr = 'Broj zahtjeva za zapisivanje u zapisnik.';
$strShowStatusInnodb_log_writesDescr = 'Broj fizi�kih zapisivanja u zapisnik.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Broj fsyncs zapisivanja izvr�enih u datoteci zapisnika.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Broj naredbi fsyncs za zapisnik, a koje su na �ekanju.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Zapisivanja u zapisnik na �ekanju.';
$strShowStatusInnodb_os_log_writtenDescr = 'Broj bajtova zapisanih u zapisnik.';
$strShowStatusInnodb_pages_createdDescr = 'Broj izra�enih stranica.';
$strShowStatusInnodb_page_sizeDescr = 'Izra�ena veli�ina InnoDB stranice (zadana vrijednost je 16kB). Mnoge se vrijednosti prebrojavaju u stranicama. Veli�ina stranice dopu�ta njihovo jednostavno pretvaranje u bajtove.';
$strShowStatusInnodb_pages_readDescr = 'Broj i��itanih stranica.';
$strShowStatusInnodb_pages_writtenDescr = 'Broj zapisanih stranica.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Broj zaklju�avanja redaka na koje se trenutno �eka.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Prosje�no vrijeme postizanja zaklju�anosti retka, u milisekundama.';
$strShowStatusInnodb_row_lock_timeDescr = 'Ukupno vrijeme utro�eno na postizanja zaklju�anosti retka, u milisekundama.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Najdulje vrijeme postizanja zaklju�anosti retka, u milisekundama.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Broj okolnosti kad je bilo potrebno �ekati na zaklju�anost retka.';
$strShowStatusInnodb_rows_deletedDescr = 'Broj redaka izbrisanih iz InnoDB tablica.';
$strShowStatusInnodb_rows_insertedDescr = 'Broj redaka umetnutih u InnoDB tablice.';
$strShowStatusInnodb_rows_readDescr = 'Broj redaka i��itanih iz InnoDB tablica.';
$strShowStatusInnodb_rows_updatedDescr = 'Broj a�uriranih redaka u InnoDB tablicama.';
$strShowStatusKey_blocks_not_flushedDescr = 'Broj klju�nih blokova u pohrani klju�eva koji su izmijenjeni ali jo� nisu ispra�njeni na disk. Neko� se nazivalo: Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Broj neiskori�tenih blokova u pohrani klju�eva. Ovu vrijednost mo�ete upotrijebiti za odre�ivanje veli�ine pohrane klju�eva koja je u upotrebi.';
$strShowStatusKey_blocks_usedDescr = 'Broj iskori�tenih blokova u pohrani klju�eva. Ova je vrijednost oznaka gornje razine koja ozna�uje najve�i broj blokova koji su ikad bili u istovremenoj upotrebi.';
$strShowStatusKey_read_requestsDescr = 'Broj zahtjeva za �itanje klju�nog bloka iz pohrane.';
$strShowStatusKey_readsDescr = 'Broj fizi�kih �itanja klju�nih blokova s diska. Ako je iznos Key_reads velik, vjerojatno je va�a vrijednost key_buffer_size premala. Stupanj proma�ivanja pohrane mogu�e je izra�unati putem naredbi Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Broj zahtjeva za zapisivanje klju�nog bloka u pohranu.';
$strShowStatusKey_writesDescr = 'Broj fizi�kih zapisivanja klju�nih blokova na disk. ';
$strShowStatusLast_query_costDescr = 'Ukupan tro�ak posljednjeg slo�enog upita, izra�unat od strane optimizatora upita. Korisno za uspore�ivanje tro�kova razli�itih planova upita za isti upit. Zadana vrijednost je 0 i podrazumijeva da jo� nema slo�enog upita.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Broj redaka koji �ekaju svoje upisivanje u red �ekanja INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Broj tablica koje su otvorene. Ako je iznos otvorenih tablica velik, va�a vrijednost za pohranu tablica vjerojatno je premala.';
$strShowStatusOpen_filesDescr = 'Broj otvorenih datoteka.';
$strShowStatusOpen_streamsDescr = 'Broj otvorenih protoka (uglavnom se upotrebljava za vo�enje zapisnika).';
$strShowStatusOpen_tablesDescr = 'Broj otvorenih tablica.';
$strShowStatusQcache_free_blocksDescr = 'Broj slobodnih memorijskih blokova u pohrani upita.';
$strShowStatusQcache_free_memoryDescr = 'Koli�ina slobodne memorije za pohranu upita.';
$strShowStatusQcache_hitsDescr = 'Broj pronala�enja u pohrani.';
$strShowStatusQcache_insertsDescr = 'Broj upita pridodanih u pohranu.';
$strShowStatusQcache_lowmem_prunesDescr = 'Broj upita koji su uklonjeni iz pohrane radi osloba�anja memorije za potrebe pohranjivanja novih upita. Ovaj vam podatak mo�e pomo�i pri pode�avanju veli�ine pohrane upita. Pohrana upita upotrebljava strategiju posljednjeg nedavno upotrebljavanog (LRU - least recently used) radi odlu�ivanja koje �e upite ukloniti iz pohrane.';
$strShowStatusQcache_not_cachedDescr = 'Broj upita koji nisu pohranjeni (nisu za pohranu ili nisu pohranjeni zbog postavke query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Broj upita registriranih u pohrani.';
$strShowStatusQcache_total_blocksDescr = 'Ukupan broj blokova u pohrani upita.';
$strShowStatusReset = 'Povrat';
$strShowStatusRpl_statusDescr = 'Stanje replikacije sigurnosti protiv otkaza (jo� nije implementirano).';
$strShowStatusSelect_full_joinDescr = 'Broj spojeva koji ne upotrebljavaju indekse. Ako ovaj iznos nije 0, bit �e potrebno da pa�ljivo provjerite indekse va�ih tablica.';
$strShowStatusSelect_full_range_joinDescr = 'Broj spojeva koji nad referentnom tablicom upotrebljavaju opseg tra�enja.';
$strShowStatusSelect_range_checkDescr = 'Broj spojeva bez klju�eva koji provjeravaju upotrebu klju�a nakon svakog retka. (Ako ovaj iznos nije 0, bit �e potrebno da pa�ljivo provjerite indekse va�ih tablica.';
$strShowStatusSelect_rangeDescr = 'Broj spojeva koji su upotrijebili opsege nad prvom tablicom. (Op�enito nije kriti�no ako je ovaj iznos velik.)';
$strShowStatusSelect_scanDescr = 'Broj spojeva koji su izveli potpuno pretra�ivanje prve tablice.';
$strShowStatusSlave_open_temp_tablesDescr = 'Broj privremenih tablica koje su trenutno otvorene od strane pot�injene SQL grane.';
$strShowStatusSlave_retried_transactionsDescr = 'Ukupna koli�ina (od pokretanja) ponovnih poku�aja transakcija od strane replikacijske pot�injene SQL grane.';
$strShowStatusSlave_runningDescr = 'Uklju�eno (ON) ako je ovaj poslu�itelj pot�injen i povezan na gospodara.';
$strShowStatusSlow_launch_threadsDescr = 'Broj grana kojima je bilo potrebno vi�e vremena za izradu, nego �to je to definirano u slow_launch_time (sporo vrijeme pokretanja), u sekundama.';
$strShowStatusSlow_queriesDescr = 'Broj upita kojima je bilo potrebno vi�e vremena nego �to je to definirano u long_query_time (dugo vrijeme upita), u sekundama.';
$strShowStatusSort_merge_passesDescr = 'Broj prolaza udru�ivanja koje je algoritam za preslagivanje morao izvesti. Ako je ovaj iznos velik, razmotrite mogu�nost pove�anja vrijednosti sistemske varijable sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Broj preslagivanja u�injenih pomo�u opsega.';
$strShowStatusSort_rowsDescr = 'Broj preslo�enih redaka.';
$strShowStatusSort_scanDescr = 'Broj preslagivanja u�injenih pomo�u pretra�ivanja tablice.';
$strShowStatusTable_locks_immediateDescr = 'Koli�ina trenutno postignutih zaklju�avanja tablica.';
$strShowStatusTable_locks_waitedDescr = 'Koli�ina zaklju�avanja tablica koji nisu mogli biti trenutno postignuti i bilo je potrebno odre�eno �ekanje. Ako je ovaj iznos visok i ako imate problema s performansama, bit �e potrebno da prvo optimizirate svoje upite i potom ili podijelite svoje tablice ili upotrijebite replikaciju.';
$strShowStatusThreads_cachedDescr = 'Broj grana u pohrani grana. Stupanj pogodaka u pohrani mo�e se izra�unati kao Threads_created/Connections. Ako je ovaj iznos prikazan crvenom bojom, bit �e potrebno da pove�ate svoju vrijednost thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Broj trenutno otvorenih veza.';
$strShowStatusThreads_createdDescr = 'Broj grana izra�enih za rukovanje vezama. Ako je iznos Threads_created velik, moglo bi biti potrebno da pove�ate vrijednost thread_cache_size. (Uobi�ajeno, ako imate dobru implementaciju grana, ova opcija ne�e pru�iti primjetna pobolj�anja performansi.)';
$strShowStatusThreads_runningDescr = 'Broj grana koje nisu uspavane.';
$strShowTableDimension = 'Prika�i dimenzije tablice';
$strShowTables = 'Prika�i tablice';
$strShowThisQuery = 'Ovaj upit ponovno prika�i ovdje';
$strSimplifiedChinese = 'Kineski, pojednostavljen';
$strSingly = '(pojedina�no)';
$strSize = 'Veli�ina';
$strSkipQueries = 'Broj zapisa (upita) koje je potrebno presko�iti od po�etka';
$strSlovak = 'Slova�ki';
$strSlovenian = 'Slovenski';
$strSmallBigAll = 'Malo / Sve veliko';
$strSnapToGrid = 'Poravnaj s mre�om';
$strSocketProblem = '(ili priklju�ak lokalnog MySQL poslu�itelja nije ispravno konfiguriran)';
$strSortByKey = 'Preslo�i po klju�u';
$strSorting = 'Preslagivanje';
$strSort = 'Preslo�i';
$strSpaceUsage = 'Iskori�tenost prostora';
$strSpanish = '�panjolski';
$strSplitWordsWithSpace = 'Rije�i su razdvojene znakom razmaka (" ").';
$strSQLCompatibility = 'Na�in rada SQL kompatibilnosti';
$strSQLExportType = 'Vrsta izvoza';
$strSQLParserBugMessage = 'Postoji mogu�nost da ste prona�li nedostatak u SQL ra��lanjiva�u. Temeljito prou�ite va� upit i provjerite ispravan unos navodnika. Jedan od mogu�ih razloga je i da ste u�itali datoteku s binarnim vrijednosti izvan prostora s navodnicima. Va� upit tako�er mo�ete provjeriti u naredbenom retku MySQL-a. Ispis pogre�ke MySQL poslu�itelja mo�e vam pomo�i u dijagnosticiranju problema. Ako i dalje postoje problemi ili ako ra��lanjiva� ne uspijeva u zadacima koji uspijevaju u naredbenom retku, suzite svoj unos SQL upita na samo onaj upit koji izaziva probleme i podnesite prijavu o nedostatku zajedno s dijelom podatka u donjem odjeljku CUT:';
$strSQLParserUserError = 'Izgleda da postoji pogre�ka u va�em SQL upitu. Ispis pogre�ke MySQL poslu�itelja mo�e vam pomo�i u dijagnosticiranju problema.';
$strSQLQuery = 'SQL upit';
$strSQLResult = 'SQL rezultat';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Neispravna ID oznaka';
$strSQPBugUnclosedQuote = 'Navodnik nije zatvoren';
$strSQPBugUnknownPunctuation = 'Nepoznat niz interpunkcija';
$strStandInStructureForView = 'Unutarnja struktura za pregledavanje';
$strStatCheckTime = 'Posljednja provjera';
$strStatCreateTime = 'Izrada';
$strStatement = 'Izjave';
$strStatisticsOverrun = 'Na zaposlenom poslu�itelju broja� bajtova mogao bi preletjeti svoj raspon prikaza, pri �emu bi statistike koje prikazuje MySQL poslu�itelj mogle biti neto�ne.';
$strStatUpdateTime = 'Posljednje a�uriranje';
$strStatus = 'Stanje';
$strStorageEngine = 'Pogon pohrane';
$strStorageEngines = 'Pogoni pohrane';
$strStrucCSV = 'CSV';
$strStrucData = 'Strukturu i podatke';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucNativeExcel = 'Izvorno MS Excel oblikovanje';
$strStrucOnly = 'Samo strukturu';
$strStructPropose = 'Predlo�i strukturu tablice';
$strStructureForView = 'Struktura za pregledavanje';
$strStructure = 'Strukturu';
$strSubmit = 'Podnesi';
$strSuccess = 'Va� SQL upit uspje�no je izvr�en';
$strSum = 'Zbroj';
$strSwedish = '�vedski';
$strSwitchToDatabase = 'Prebaci se na kopiranu bazu podataka';
$strSwitchToTable = 'Prebaci se na kopiranu tablicu';

$strTableAlreadyExists = 'Tablica %s ve� postoji!';
$strTableComments = 'Komentari tablice';
$strTableEmpty = 'Naziv tablice je prazan!';
$strTableHasBeenDropped = 'Tablica %s je odba�en';
$strTableHasBeenEmptied = 'Tablica %s je o�i��ena';
$strTableHasBeenFlushed = 'Tablica %s je ispra�njena';
$strTableIsEmpty = 'Tablica izgleda praznom!';
$strTableMaintenance = 'Odr�avanje tablice';
$strTableName = 'Naziv tablice';
$strTableOfContents = 'Sadr�aj tablice';
$strTableOptions = 'Opcije tablice';
$strTables = '%s tablica';
$strTableStructure = 'Tabli�na struktura za tablicu';
$strTable = 'Tablica';
$strTakeIt = 'Dodijeli';
$strTblPrivileges = 'Privilegije specifi�ne za tablicu';
$strTempData = 'Privremeni podaci';
$strTextAreaLength = ' Zbog svoje duljine,<br /> ure�ivanje ovog polja mo�da ne�e biti mogu�e ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'Zadana tema %s nije prona�ena!';
$strThemeNoPreviewAvailable = 'Nema raspolo�ivog pregleda.';
$strThemeNotFound = 'Tema %s nije prona�ena!';
$strThemeNoValidImgPath = 'Valjana putanja slika za temu %s nije prona�ena!';
$strThemePathNotFound = 'Za temu %s nije prona�ena putanje tema!';
$strTheme = 'Tema / Stil';
$strThisHost = 'Ovo ra�unalo';
$strThreads = 'Grane';
$strThreadSuccessfullyKilled = 'Grana %s uspje�no je prekinuta.';
$strTimeoutInfo = 'Vrijeme prethodnog uvoza je isteklo. Nakon ponovno podno�enja bit �e nastavljeno od polo�aja %d.';
$strTimeoutNothingParsed = 'Ipak, pri posljednjem prijelazu nikakvi podaci nisu bili ra��lanjeni. To zna�i da phpMyAdmin ne�e biti u mogu�nosti zavr�iti ovaj uvoz sve dok ne pove�ate vremenska ograni�enja unutar php.';
$strTimeoutPassed = 'Vrijeme za skriptu je isteklo. Ako �elite zavr�iti uvoz, ponovo podnesite istu datoteku i uvoz �e nastaviti.';
$strTime = 'Vrijeme';
$strToFromPage = 'stranica od / prema';
$strToggleScratchboard = 'Uklju�i bilje�ke';
$strToggleSmallBig = 'Malo / Veliko';
$strToSelectRelation = 'Za odabir povezanosti kliknite:';
$strTotalUC = 'Ukupno';
$strTotal = 'ukupno';
$strTraditionalChinese = 'Kineski, tradicionalan';
$strTraditionalSpanish = '�panjolski, tradicionalan';
$strTraffic = 'Promet';
$strTransactionCoordinator = 'Koordinator transakcije';
$strTransformation_application_octetstream__download = 'Prikazuje vezu prema preuzimanju binarnih podataka polja. Mo�ete upotrijebiti prvu opciju da biste sami odredili naziv datoteke ili drugu opciju da biste upotrijebili naziv polja koje sadr�i naziv datoteke. Ako upotrijebite drugu opciju, u prvu opciju morate unijeti prazan niz.';
$strTransformation_application_octetstream__hex = 'Prikazuje podatke u heksadecimalnom obliku. Opcionalan prvi parametar odre�uje koliko �esto �e prazna mjesta biti dodavana (zadana vrijednost je 2).';
$strTransformation_image_jpeg__inline = 'Prikazuje sli�icu s mogu�no��u klikanja. Opcije su najve�a �irina i visina u pikselima. Izvorne proporcije su o�uvane.';
$strTransformation_image_jpeg__link = 'Prikazuje vezu za preuzimanje ove slike.';
$strTransformation_image_png__inline = 'Pogledajte slika/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Polja TIME (vrijeme), TIMESTAMP (vremenska oznaka), DATETIME (datum i vrijeme) ili broj�anu uniksoidnu oznaku vremena prikazuje kao oblikovani datum. Prva opcija je odmak (u satima) koji �e biti pridodan vremenskoj oznaci (zadano: 0). Druga opcije odre�uje druk�iji oblik izra�avanja datuma i vremena. Tre�a opcija odre�uje �elite li prikazati lokalni datum ili u skladu s UTC (upotrijebite izraz "local" ili "utc"). Sukladno tome, oblik datuma ima razli�ite vrijednosti - za opciju "local" pogledajte dokumentaciju o upotrebi PHP funkcije strftime(), a za "utc" pogledajte dokumentaciju o upotrebi funkcije gmdate().';
$strTransformation_text_plain__external = 'SAMO ZA LINUX: Pokre�e vanjsku aplikaciju i predaje joj podatke polja putem standardnog unosa. Vra�a standardan ispis aplikacije. Zadana aplikacija je Tidy, uredno ispisivanje HTML koda. Iz sigurnosnih razloga morate ru�no urediti datoteku libraries/transformations/text_plain__external.inc.php i izraditi popis alata koje �elite u�initi raspolo�ivim. Prva opcija �e biti redni broj programa kojeg �elite upotrebljavati a druga opcija su parametri programa. Ako je tre�a opcija postavljena na vrijednost 1, pretvorit �e ispis pomo�u htmlspecialchars(), (zadano: 1). Ako je �etvrta opcija postavljena na vrijednost 1, sprije�it �e omatanje i osigurati prikaz ispisa u jednom retku (zadano: 1).';
$strTransformation_text_plain__formatted = 'Prikazuje sadr�aj polje u izvornom obliku, bez njegovog provla�enja kroz htmlspecialchars(). Odnosno, za polje se pretpostavlja da ne sadr�i valjani HTML kod.';
$strTransformation_text_plain__imagelink = 'Prikazuje sliku i vezu. Polje sadr�i naziv datoteke. Prva opcija je URL prefiks, poput "http://www.example.com/". Druga i tre�a opcija predstavljaju �irinu i visinu u pikselima.';
$strTransformation_text_plain__link = 'Prikazuje vezu. Polje sadr�i naziv datoteke. Prva opcija je URL prefiks, poput "http://www.example.com/". Druga opcija je naziv veze.';
$strTransformation_text_plain__sql = 'Oblikuje tekst kao SQL upit s nagla�avanjem sintakse.';
$strTransformation_text_plain__substr = 'Prikazuje dio niza. Prva opcija je broj znakova koje je potrebno presko�iti, od po�etka niza (zadano: 0). Druga opcija je broj znakova za povrat (zadano: do zavr�etka niza). Tre�a opcija  je niz koji je potrebno pridodati iza zavr�etka i/ili prije po�etka kad zapo�ne srezivanje (zadano: "...").';
$strTriggers = 'Okida�i';
$strTruncateQueries = 'Sre�i prikazane rezultate';
$strTurkish = 'Turski';
$strType = 'Vrsta';

$strUkrainian = 'Ukrajinski';
$strUncheckAll = 'Ukloni sve oznake';
$strUnicode = 'Unicode';
$strUnique = 'Jedinstveno';
$strUnknown = 'nepoznato';
$strUnselectAll = 'Ukloni sav odabir';
$strUnsupportedCompressionDetected = 'Poku�ali ste u�itati datoteku s nepodr�anim na�inom komprimiranja (%s). Takva podr�ka jo� nije implementirana ili je onemogu�ena u va�oj konfiguraciji.';
$strUpdatePrivMessage = 'A�urirali ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je a�uriran.';
$strUpdateQuery = 'A�uriraj upit';
$strUpdComTab = 'Pogledajte dokumentaciju radi uputa o a�uriranju tablice column_comments.';
$strUpgrade = 'Trebali biste nadograditi na %s %s ili kasniju.';
$strUploadErrorCantWrite = 'Zapisivanje datoteke na disk nije uspjelo.';
$strUploadErrorExtension = 'U�itavanje datoteke prekinuto je uslijed ekstenzije.';
$strUploadErrorFormSize = 'U�itana datoteka nadma�uje uputu MAX_FILE_SIZE (najve�a veli�ina datoteke), odre�enu u HTML obliku.';
$strUploadErrorIniSize = 'U�itana datoteka nadma�uje uputu upload_max_filesize (najve�a veli�ina datoteke) u datoteci php.ini.';
$strUploadErrorNoTempDir = 'Nedostaje mapa privremene pohrane.';
$strUploadErrorPartial = 'U�itana datoteka bila je djelomi�no u�itana.';
$strUploadErrorUnknown = 'Nepoznata pogre�ka tijekom u�itavanja datoteke.';
$strUploadLimit = 'Vjerojatno ste poku�ali s u�itavanjem prevelike datoteke. Pogledajte %sdokumentaciju%s radi uputa o na�inima rje�avanja ovog ograni�enja.';
$strUploadsNotAllowed = 'U�itavanje datoteka nije dopu�teno na ovom poslu�itelju.';
$strUsage = 'Upotreba';
$strUseBackquotes = 'Unesi nazive tablica i polja sa stra�njim navodnicima';
$strUsedPhpExtensions = 'Upotrijebljena PHP pro�irenja';
$strUseHostTable = 'Upotrijebi tablicu poslu�itelja';
$strUserAlreadyExists = 'Korisnik %s ve� postoji!';
$strUserEmpty = 'Korisni�ko ime je prazno!';
$strUser = 'Korisnik';
$strUserName = 'Korisni�ko ime';
$strUserNotFound = 'Odabrani korisnik nije prona�en u tablici privilegija.';
$strUserOverview = 'Pregled korisnika';
$strUsersDeleted = 'Odabrani korisnici uspje�no su izbrisani.';
$strUsersHavingAccessToDb = 'Korisnici koji imaju pristup u "%s"';
$strUseTabKey = 'Pomo�u tipke TAB premje�tate se od jedne vrijednost do druge vrijednost, odnosno s tipkama CTRL+Strelice za premje�tanje bilo kamo';
$strUseTables = 'Upotrijebi tablice';
$strUseTextField = 'Upotrijebi tekstualno polje';
$strUseThisValue = 'Upotrijebi ovu vrijednost';

$strValidateSQL = 'Provjera valjanosti SQL-a';
$strValidatorError = 'SQL validator nije bilo mogu�e pokrenuti. Provjerite jeste li instalirali potrebna PHP pro�irenja, na na�in opisan u %sdokumentaciji%s.';
$strValue = 'Vrijednost';
$strVar = 'Varijabla';
$strVersionInformation = 'Podaci o verziji';
$strViewDumpDatabases = 'Prika�i ispis (shemu) baza podataka';
$strViewDumpDB = 'Prika�i ispis (shemu) baze podataka';
$strViewDump = 'Prika�i ispis (shemu) tablice';
$strViewHasBeenDropped = 'Index %s je ispu�ten';
$strViewMaxExactCount = 'Ovaj prikaz sadr�i vi�e od %s redaka. Pogledajte %sdokumentaciju%s.';
$strViewName = 'Naziv prikaza';
$strView = 'Prikaz';

$strWebServerUploadDirectoryError = 'Mapu koju ste odabrali za potrebe u�itavanja nije mogu�e dohvatiti';
$strWebServerUploadDirectory = 'mapa u�itavanja web poslu�itelja';
$strWelcome = 'Dobro do�li u %s';
$strWestEuropean = 'Zapadno europski';
$strWildcard = 'd�oker';
$strWindowNotFound = 'Ciljani prozor preglednika nije bilo mogu�e osvje�iti. Mo�da ste zatvorili nadre�eni prozor ili su postavke sigurnosti va�eg preglednika konfigurirane za blokiranje a�uriranja preko vi�e prozora.';
$strWithChecked = 'S odabirom:';
$strWriteRequests = 'Zahtjevi zapisivanja';
$strWrongUser = 'Pogre�no korisni�ko ime ili lozinka. Pristup odbijen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Napomena: Postavljanje ovih opcija na vrijednost 0 (nula) uklanja ograni�enje.';
$strZip = '"zipano"';

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

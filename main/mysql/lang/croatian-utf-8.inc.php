<?php
/* $Id: croatian-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 *   Croatian language file by
 *   Renato Pavičić <renato<at>translator-shop.org>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sri', 'Čet', 'Pet', 'Sub');
$month = array('Sij', 'Velj', 'Ožu', 'Tra', 'Svi', 'Lip', 'Srp', 'Kol', 'Ruj', 'Lis', 'Stu', 'Pro');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y u %I:%M %p';
$timespanfmt = '%s dana, %s sati, %s minuta i %s sekunda';


$strAbortedClients = 'Prekinuto';
$strAccessDeniedCreateConfig = 'Vjerojatan razlog je nepostojeća konfiguracijska datoteka. Za izradu možete upotrijebiti naredbu %1$ssetup script%2$s';
$strAccessDeniedExplanation = 'phpMyAdmin pokušao je uspostaviti vezu s MySQL poslužiteljem, ali je poslužitelj odbio povezivanje. U datoteci config.inc.php provjerite naziv računala, korisničko ime i lozinku, te provjerite da se odgovaraju podacima koje vam je dao administrator MySQL poslužitelja.';
$strAccessDenied = 'Pristup odbijen';
$strAction = 'Aktivnost';
$strAddAutoIncrement = 'Dodaj vrijednost AUTO_INCREMENT';
$strAddClause = 'Dodaj %s';
$strAddConstraints = 'Dodaj prisile';
$strAddDeleteColumn = 'Dodaj/Izbriši stupce polja';
$strAddDeleteRow = 'Dodaj/Izbriši redak kriterija';
$strAddFields = 'Dodaj %s polja';
$strAddHeaderComment = 'Dodaj prilagođeni komentar u zaglavlje ("\\n" razdvaja retke)';
$strAddIntoComments = 'Dodaj u komentare';
$strAddNewField = 'Dodaj novo polje';
$strAddPrivilegesOnDb = 'Dodaj privilegije za sljedeće baze podataka';
$strAddPrivilegesOnTbl = 'Dodaj privilegije za sljedeću tablicu';
$strAddSearchConditions = 'Dodaj  uvjete pretrage (sadržaj uvjeta "gdje"):';
$strAddToIndex = 'Dodaj u indeks &nbsp;%s&nbsp;stupci';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Dodali ste novog korisnika.';
$strAdministration = 'Administracija';
$strAffectedRows = 'Zahvaćeni redovi:';
$strAfterInsertBack = 'Kreni nazad na prethodnu stranicu';
$strAfterInsertNewInsert = 'Umetni dodatni novi redak';
$strAfterInsertNext = 'Uredi sljedeći redak';
$strAfterInsertSame = 'Kreni nazad na ovu stranicu';
$strAfter = 'Poslije %s';
$strAllowInterrupt = 'Dopusti prekid uvoza u slučaju da skripta otkrije blizinu vremenskog ograničenja. Ovo bi mogao biti dobar način uvoza velikih datoteka, ali može prekinuti transakcije.';
$strAll = 'Sve';
$strAllTableSameWidth = 'Prikazati sve tablice uz istu širinu?';
$strAlterOrderBy = 'Izmijeni rasporede tablice po';
$strAnalyzeTable = 'Analiziraj tablicu';
$strAnd = 'I';
$strAndThen = 'i potom';
$strAngularLinks = 'Kutne veze';
$strAnIndex = 'Indeks je pridodan na %s';
$strAny = 'Bilo koji';
$strAnyHost = 'Bilo koje računalo';
$strAnyUser = 'Bilo koji korisnik';
$strApproximateCount = 'Može biti približno. Pogledajte ČPP 3.11';
$strAPrimaryKey = 'Primarni ključ je dodan na %s';
$strArabic = 'Arapski';
$strArmenian = 'Armenski';
$strAscending = 'Uzlazno';
$strAtBeginningOfTable = 'Pri početku tablice';
$strAtEndOfTable = 'Pri završetku tablice';
$strAttr = 'Atributi';
$strAutomaticLayout = 'Automatski raspored';

$strBack = 'Nazad';
$strBaltic = 'Baltički';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binarno';
$strBinaryDoNotEdit = 'Binarno - ne uređuj';
$strBinaryLog = 'Binarni zapisnik';
$strBinLogEventType = 'Vrsta događaja';
$strBinLogInfo = 'Podaci';
$strBinLogName = 'Naziv zapisnika';
$strBinLogOriginalPosition = 'Izvorni položaj';
$strBinLogPosition = 'Položaj';
$strBinLogServerId = 'ID poslužitelja';
$strBookmarkAllUsers = 'Neka svi korisnici imaju pristup ovom favoritu';
$strBookmarkCreated = 'Izrađen je favorit %s';
$strBookmarkDeleted = 'Favorit je izbrisan.';
$strBookmarkLabel = 'Oznaka';
$strBookmarkQuery = 'Favorizirani SQL upit';
$strBookmarkReplace = 'Zamijeni postojećim favoritom istog naziva';
$strBookmarkThis = 'Favoriziraj ovaj SQL upit';
$strBookmarkView = 'Samo prikaz';
$strBrowseDistinctValues = 'Pretraži prepoznatljive vrijednosti';
$strBrowseForeignValues = 'Pretraži strane vrijednosti';
$strBrowse = 'Pretraživanje';
$strBufferPoolActivity = 'Aktivnost međuspremnika';
$strBufferPool = 'Međuspremnik';
$strBufferPoolUsage = 'Iskoristivost međuspremnika';
$strBufferReadMissesInPercent = 'Propuštena čitanja pri %';
$strBufferReadMisses = 'Propuštena čitanja';
$strBufferWriteWaitsInPercent = 'Zapisivanje čeka pri %';
$strBufferWriteWaits = 'Zapisivanje čeka';
$strBulgarian = 'Bugarski';
$strBusyPages = 'Zaposlene stranice';
$strBzError = 'phpMyAdmin nije bio u mogućnosti komprimirati izbacivanje zbog prekinutog Bz2 proširenja u ovoj verziji PHP-a. Snažno se preporučuje da postavite <code>$cfg[\'BZipDump\']</code> direktivu u vašoj phpMyAdmin konfiguracijskoj datoteci na <code>FALSE</code>Ako želite upotrebljavati kompresijsku osobinu Bz2, bit će potrebna nadogradnja na noviju verziju PHP-a. Detalje pregledajte u izvještaju PHP nedostataka: %s.';
$strBzip = '"bzipano"';

$strCalendar = 'Kalendar';
$strCancel = 'Odustani';
$strCanNotLoadExportPlugins = 'Nije moguće učitati dodatke za izvoz. Provjerite svoju instalaciju!';
$strCanNotLoadImportPlugins = 'Nije moguće učitati dodatke za uvoz. Provjerite svoju instalaciju!';
$strCannotLogin = 'Prijavljivanje na MySQL poslužitelj nije moguće';
$strCantLoad = 'Nije moguće učitati proširenje [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a] . Provjerite svoju PHP konfiguraciju.';
$strCantLoadRecodeIconv = 'Nije moguće učitati proširenja iconv ili recode potrebna za pretvaranje znakova. Potrebno je konfigurirati PHP radi omogućavanja ovih proširenja ili unutar phpMyAdmin onemogućiti pretvaranje znakova.';
$strCantRenameIdxToPrimary = 'Preimenovanje indeksa u PRIMARY nije moguće!';
$strCantUseRecodeIconv = 'Nije moguće upotrijebiti funkcije iconv, libiconv ili recode_string, iako izgleda da su sva potrebna proširenja učitana. Provjerite svoju PHP konfiguraciju.';
$strCardinality = 'Najvažnije';
$strCaseInsensitive = 'nebitna veličina znakova';
$strCaseSensitive = 'veličina znakova je važna';
$strCentralEuropean = 'Srednjoeuropski';
$strChangeCopyModeCopy = '... zadržati staru.';
$strChangeCopyModeDeleteAndReload = ' ... izbriši starog iz korisničkih tablica i potom ponovo učitaj privilegije.';
$strChangeCopyMode = 'Izradi novog korisnika s istim privilegijama i...';
$strChangeCopyModeJustDelete = ' ... izbriši starog iz korisničkih tablica.';
$strChangeCopyModeRevoke = ' ... opozovi sve aktivne privilegije iz stare i potom je izbriši.';
$strChangeCopyUser = 'Promjena podataka prijave / Kopiranje korisnika';
$strChangeDisplay = 'Odaberi polje za prikaz';
$strChangePassword = 'Promijeni lozinku';
$strChange = 'Promijeni';
$strCharsetOfFile = 'Tablica znakova za datoteku:';
$strCharsetsAndCollations = 'Tablica znakova i uspoređivanja';
$strCharsets = 'Tablice znakova';
$strCharset = 'Tablica znakova';
$strCheckAll = 'Označi sve';
$strCheckOverhead = 'Provjeri za prepunjene tablice';
$strCheckPrivsLong = 'Provjeri privilegije za bazu podataka "%s".';
$strCheckPrivs = 'Provjeri privilegije';
$strCheckTable = 'Provjeri tablicu';
$strChoosePage = 'Odaberite tablicu za uređivanje';
$strColComFeat = 'Prikazivanje stupca komentara';
$strCollation = 'Uspoređivanje';
$strColumnNames = 'Nazivi stupaca';
$strColumnPrivileges = 'Privilegije specifične za stupac';
$strCommand = 'Naredba';
$strCommentsForTable = 'COMMENTS FOR TABLE';
$strComments = 'Komentari';
$strCompatibleHashing = 'MySQL&nbsp;4.0 kompatibilno';
$strCompleteInserts = 'Dovrši umetanja';
$strCompression = 'Kompresija';
$strCompressionWillBeDetected = 'Kompresija uvezene datoteke bit će automatski prepoznata iz: %s';
$strConfigDefaultFileError = 'Nije moguće učitati zadanu konfiguraciju iz: "%1$s"';
$strConfigFileError = 'phpMyAdmin nije mogao pročitati vašu konfiguracijsku datoteku!<br />Mogući razlog je ako PHP pronađe pogrešku u njezinom raščlanjivanju ili ako PHP ne može pronaći datoteku.<br />Potrebno je izravno pozvati konfiguracijsku datoteku putem donje veze i proučiti prikazane PHP poruke o pogreškama. U većini slučajeva na nekom mjestu nedostaje znak navodnika ili točke-zareza.<br />Ako se prikaže prazna stranica, sve je u redu.';
$strConfigureTableCoord = 'Konfigurirajte koordinate tablice %s';
$strConnectionError = 'Povezivanje nije moguće: neispravna postavka.';
$strConnections = 'Veze';
$strConstraintsForDumped = 'Ograničenja za izbačene tablice';
$strConstraintsForTable = 'Ograničenja za tablicu';
$strControluserFailed = 'Povezivanje kontrolnih korisnika na način kako je definirano u vašoj konfiguraciji nije uspjelo.';
$strCookiesRequired = 'Od ovog mjesta potrebno je omogućiti kolačiće.';
$strCopyDatabaseOK = 'Baza podataka %s kopirana je u %s';
$strCopy = 'Kopiraj';
$strCopyTable = 'Kopiraj tablicu u (bazapodataka<b>.</b>tablica):';
$strCopyTableOK = 'Tablica %s kopirana je u %s.';
$strCopyTableSameNames = 'Kopiranje u istu tablicu nije moguće!';
$strCouldNotKill = 'phpMyAdmin nije mogao ugasiti granu %s. Vjerojatno je već zatvorena.';
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
$strCreateUserDatabaseWildcard = 'Podari sve privilegije imenima s džokerima (korisničkoime_%)';
$strCreationDates = 'Izrada/Ažuriranje/Provjera datuma';
$strCriteria = 'Kriterij';
$strCroatian = 'Hrvatski';
$strCSV = 'CSV';
$strCyrillic = 'Ćirilica';
$strCzech = 'Češki';
$strCzechSlovak = 'Češki ili Slovački';

$strDanish = 'Danski';
$strDatabase = 'Baza podataka';
$strDatabaseEmpty = 'Naziv baze podataka je prazan!';
$strDatabaseExportOptions = 'Opcije izvoza baze podataka';
$strDatabaseHasBeenDropped = 'Baza podataka %s je odbačena.';
$strDatabases = 'Baze podataka';
$strDatabasesDropped = 'Baza podataka %s uspješno je odbačena.';
$strDatabasesStatsDisable = 'Onemogući statistike';
$strDatabasesStatsEnable = 'Omogući statistike';
$strDatabasesStatsHeavyTraffic = 'Napomena: Omogućavanja statistika baze podataka može prouzrokovati izuzetno velik promet između web poslužitelja i MySQL poslužitelja.';
$strDatabasesStats = 'Statistike baza podataka';
$strDataDict = 'Rječnik podataka';
$strDataOnly = 'Samo podatke';
$strDataPages = 'Stranice koje sadrže podatke';
$strData = 'Podaci';
$strDBComment = 'Komentar baze podataka:  ';
$strDBCopy = 'Kopiraj bazu podataka u';
$strDbIsEmpty = 'Baza podataka izgleda praznom!';
$strDbPrivileges = 'Privilegije specifične za bazu podataka';
$strDBRename = 'Preimenuj bazu podataka u';
$strDbSpecific = 'specifično za bazu podataka';
$strDefaultEngine = '%s je zadani pogon pohranjivanja na ovom MySQL poslužitelju.';
$strDefaultValueHelp = 'Za zadane vrijednosti unesite samo jednu vrijednost, bez kosih crta ili navodnika, u sljedećem obliku: a';
$strDefault = 'Zadano';
$strDefragment = 'Defragmentiraj tablicu';
$strDelayedInserts = 'Upotrijebi odgođena umetanja';
$strDeleteAndFlushDescr = 'Ovo je najčišći način, ali ponovno učitavanje privilegija može potrajati.';
$strDeleteAndFlush = 'Izbriši korisnike i potom ponovo učitaj privilegije.';
$strDeleted = 'Redak je izbrisan';
$strDeletedRows = 'Izbrisani redovi:';
$strDelete = 'Izbriši';
$strDeleteNoUsersSelected = 'Nema odabranih korisnika za uklanjanje!';
$strDeleteRelation = 'Izbriši povezanost';
$strDeleting = 'Brisanje %s';
$strDelimiter = 'Razgraničavanje';
$strDelOld = 'Trenutna stranica sadrži reference prema tablicama koje više ne postoje. Želite li izbrisati te reference?';
$strDescending = 'Silazno';
$strDescription = 'Opis';
$strDesignerHelpDisplayField = 'Polje pregledavanja prikazano je u rozoj boji. Kako biste za polje odabrali ili uklonili opciju polja za prikazivanje kliknite ikonu "Odaberite polje za prikazivanje", a zatim kliknite odgovarajući naziv polja.';
$strDesigner = 'Kreator';
$strDictionary = 'rječnik';
$strDirectLinks = 'Izravne veze';
$strDirtyPages = 'Prljave stranice';
$strDisabled = 'Onemogućeno';
$strDisableForeignChecks = 'Onemogući provjere stranih znakova';
$strDisplayFeat = 'Osobine prikaza';
$strDisplayOrder = 'Redoslijed prikaza:';
$strDisplayPDF = 'Prikaži PDF shemu';
$strDoAQuery = 'Izvedi "upit po primjeru" (džoker: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Želite li zaista  ';
$strDropDatabaseStrongWarning = 'UNIŠTIT ĆETE CJELOKUPNU BAZU PODATAKA!';
$strDrop = 'Ispusti';
$strDropUsersDb = 'Ispusti baze podataka koje imaju iste nazive i korisnike.';
$strDumpingData = 'Izbacivanje podataka za tablicu';
$strDumpSaved = 'Izbacivanje je spremljeno u datoteku %s.';
$strDumpXRows = 'Izbaci %s redaka, počevši od zapisa # %s.';
$strDynamic = 'dinamički';

$strEditPDFPages = 'Uredi PDF stranice';
$strEditPrivileges = 'Uredi privilegije';
$strEdit = 'Uređivanje';
$strEffective = 'Na snazi';
$strEmpty = 'Isprazni';
$strEmptyResultSet = 'MySQL je vratio prazan komplet rezultata (npr. nula redova).';
$strEnabled = 'Omogućeno';
$strEncloseInTransaction = 'Izvoz uključi u transakciju';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnd = 'Završetak';
$strEngineAvailable = '%s je raspoloživ na ovom MySQL poslužitelju.';
$strEngineDisabled = '%s je onemogućen za ovaj MySQL poslužitelj.';
$strEngines = 'Pogoni';
$strEngineUnsupported = 'Ovaj MySQL poslužitelj ne podržava pogon pohranjivanja %s.';
$strEnglish = 'Engleski';
$strEnglishPrivileges = ' Napomena: Nazivi MySQL privilegija navedeni su na engleskom jeziku ';
$strErrorInZipFile = 'Pogreška u ZIP arhivi:';
$strError = 'Pogreška';
$strErrorRelationAdded = 'Pogreška: Povezanost nije dodana.';
$strErrorRelationExists = 'Pogreška: Povezanost već postoji.';
$strErrorRenamingTable = 'Pogreška tijekom preimenovanja tablice %1$s u %2$s';
$strErrorSaveTable = 'Pogreška tijekom spremanja koordinata za Kreatora.';
$strEscapeWildcards = 'Da bi mogli biti upotrebljavani u doslovnom smislu, džokerima \_ i \% mora prethoditi znak \\';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonski';
$strEvent = 'Događaj';
$strExcelEdition = 'Excel izdanje';
$strExecuteBookmarked = 'Izvrši favorizirani upit';
$strExplain = 'Objasni SQL';
$strExportImportToScale = 'Uvoz / Izvor prema omjeru';
$strExport = 'Izvoz';
$strExportMustBeFile = 'Odabrana vrsta izvoza mora biti spremljena u datoteku!';
$strExtendedInserts = 'Proširena umetanja';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspjeli pokušaji';
$strFieldHasBeenDropped = 'Polje %s je odbačeno';
$strFieldInsertFromFileTempDirNotExists = 'Pogreška tijekom premještanja učitane datoteke. Pogledajte ČPP 1.11';
$strField = 'Polje';
$strFieldsEnclosedBy = 'Polja obuhvaćena po';
$strFieldsEscapedBy = 'Polja izostavljena po';
$strFields = 'Polja';
$strFieldsTerminatedBy = 'Polja završena s';
$strFileAlreadyExists = 'Datoteka %s već postoji na poslužitelju. Promijenite naziv ili označite opciju za prepisivanje.';
$strFileCouldNotBeRead = 'Datoteku nije moguće pročitati';
$strFileNameTemplateDescriptionDatabase = 'naziv baze podataka';
$strFileNameTemplateDescriptionServer = 'naziv poslužitelja';
$strFileNameTemplateDescriptionTable = 'naziv tablice';
$strFileNameTemplateDescription = 'Vrijednost se interpretira pomoću %1$sstrftime%2$s, pa možete upotrijebiti naredbe oblikovanja vremena. Dodatno se mogu dogoditi sljedeća preoblikovanja: "%3$s". Ostatak teksta bit će zadržan u izvornom obliku.';
$strFileNameTemplate = 'Predložak naziva datoteka';
$strFileNameTemplateRemember = 'zapamti predložak';
$strFiles = 'Datoteke';
$strFileToImport = 'Datoteka za uvoz';
$strFixed = 'fiksirano';
$strFlushPrivilegesNote = 'Napomena: phpMyAdmin preuzima korisničke privilegije izravno iz MySQL tablica privilegija. U slučaju da su ručno mijenjane, sadržaj ovih tablica može se razlikovati od privilegija koje upotrebljava poslužitelj. U tom je slučaju potrebno %sponovo učitati privilegije%s prije nastavljanja rada.';
$strFlushQueryCache = 'Isprazni pohranu upita';
$strFlushTable = 'Isprazni tablicu ("FLUSH")';
$strFlushTables = 'Isprazni (zatvori) sve tablice';
$strFontSize = 'Veličina fonta';
$strForeignKeyError = 'Pogreška tijekom izrade stranog ključa (provjerite vrste podataka)';
$strFormat = 'Oblikovanje';
$strFormEmpty = 'U obrascu nedostaje vrijednost!';
$strFreePages = 'Slobodne stranice';
$strFullText = 'Potpuni tekstovi';
$strFunction = 'Funkcija';
$strFunctions = 'Funkcije';

$strGenBy = 'Generirano s';
$strGeneralRelationFeat = 'Opće osobine relacija';
$strGenerate = 'Generiraj';
$strGeneratePassword = 'Generiraj lozinku';
$strGenTime = 'Vrijeme generiranja';
$strGeorgian = 'Gruzijski';
$strGerman = 'Njemački';
$strGlobal = 'opće';
$strGlobalPrivileges = 'Opće privilegije';
$strGlobalValue = 'Opća vrijednost';
$strGo = 'Kreni';
$strGrantOption = 'Podarivanje';
$strGreek = 'Grčki';
$strGzip = '"gzipano"';

$strHandler = 'Hvatišta';
$strHasBeenAltered = 'izmijenjeno je.';
$strHasBeenCreated = 'izrađeno je.';
$strHaveToShow = 'Morate odabrati najmanje jedan stupac za prikazivanje';
$strHebrew = 'Hebrejski';
$strHelp = 'Pomoć';
$strHexForBLOB = 'Za BLOB upotrijebi heksadecimalno';
$strHide         = 'Sakrij';
$strHideShowAll = 'Prikaži / Sakrij sve';
$strHideShowNoRelation = 'Prikaži / Sakrij tablice bez povezanosti';
$strHomepageOfficial = 'Službena stranica programa phpMyAdmin';
$strHome = 'Početna stranica';
$strHostEmpty = 'Naziv računala je prazan!';
$strHost = 'Računalo';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Mađarski';

$strIcelandic = 'Islandski';
$strId = 'ID';
$strIdxFulltext = 'Puni tekst';
$strIEUnsupported = 'Internet Explorer ne podržava ovu funkciju.';
$strIgnoreDuplicates = 'Ignoriraj istovjetne redove';
$strIgnore = 'Ignoriraj';
$strIgnoreInserts = 'Upotrijebi ignoriranje umetaka';
$strImportExportCoords = 'Uvoz / Izvoz koordinate iz PDF sheme';
$strImportFiles = 'Uvezi datoteke';
$strImportFormat = 'Oblikovanje uvezene datoteke';
$strImportSuccessfullyFinished = 'Uvoz je uspješno dovršen. Izvršeno upita: %d .';
$strImport = 'Uvoz';
$strIndexes = 'Indeksi';
$strIndexesSeemEqual = 'Sljedeći indeksi izgledaju jednakim i jednog je potrebno ukloniti:';
$strIndexHasBeenDropped = 'Index %s je odbačen';
$strIndex = 'Indeks';
$strIndexName = 'Naziv indeksa:';
$strIndexType = 'Vrsta indeksa:';
$strIndexWarningTable = 'Problemi s indeksima tablice `%s`';
$strInnoDBAutoextendIncrementDesc = ' Veličina koraka za proširivanje veličine automatski proširujućeg prostora tablice u slučaju njezinog ispunjavanja.';
$strInnoDBAutoextendIncrement = 'Korak autoproširenja';
$strInnoDBBufferPoolSizeDesc = 'Veličina memorijskog međuspremnika koju InnoDB upotrebljava za privremenu pohranu podataka i indeksa svojih tablica.';
$strInnoDBBufferPoolSize = 'Veličina međuspremnika';
$strInnoDBDataFilePath = 'Podatkovne datoteke';
$strInnoDBDataHomeDirDesc = 'Uobičajeni dio putanje mapa za sve InnoDB podatkovne datoteke.';
$strInnoDBDataHomeDir = 'Osnovna mapa podataka';
$strInnoDBPages = 'stranice';
$strInnoDBRelationAdded = 'Dodana InnoDB povezanosti';
$strInnodbStat = 'InnoDB stanje';
$strInsecureMySQL = 'Vaša konfiguracijska datoteka sadrži postavke (root korisnik bez lozinke) koja odgovara zadanom privilegiranom nalogu MySQL-a. Vaš MySQL poslužitelj pokrenut je sa zadanim postavkama i kao takav otvoren je upadima. Potrebno je ispraviti ovaj sigurnosni nedostatak.';
$strInsertAsNewRow = 'Umetni kao novi redak';
$strInsertedRowId = 'ID umetnutog retka:';
$strInsertedRows = 'Umetnuti redovi:';
$strInsert = 'Umetni';
$strInternalNotNecessary = '* Interna relacija nije potrebna ako također postoji unutar InnoDB.';
$strInternalRelationAdded = 'Dodane interne povezanosti';
$strInternalRelations = 'Interne relacije';
$strInUse = 'u upotrebi';
$strInvalidAuthMethod = 'Neispravan komplet načina provjere vjerodostojnosti u konfiguraciji:';
$strInvalidColumnCount = 'Broj stupaca mora biti veći od nule.';
$strInvalidColumn = 'Određen je neispravan stupac (%s) !';
$strInvalidCSVFieldCount = 'Neispravan broj polja u CSV unosu unutar retka %d.';
$strInvalidCSVFormat = 'Neispravno oblikovanje u CSV unosu unutar retka %d.';
$strInvalidCSVParameter = 'Neispravan parametar za CSV uvoz: %s';
$strInvalidDatabase = 'Neispravna baza podataka';
$strInvalidFieldAddCount = 'Morate dodati najmanje jedno polje.';
$strInvalidFieldCount = 'Tablica mora sadržavati najmanje jedno polje.';
$strInvalidLDIImport = 'Ovaj dodatak ne podržava uvoz komprimiranih datoteka!';
$strInvalidRowNumber = '%d nije valjani broj retka.';
$strInvalidServerHostname = 'Neispravan naziv za poslužitelj %1$s. Molimo, pregledajte svoju konfiguraciju.';
$strInvalidServerIndex = 'Neispravan indeks poslužitelja: "%s"';
$strInvalidTableName = 'Neispravan naziv tablice';

$strJapanese = 'Japanski';
$strJoins = 'Spojevi';
$strJumpToDB = 'Skoči do baze podataka "%s".';
$strJustDeleteDescr = '"Izbrisani" će korisnici i dalje moći pristupati poslužitelju sve dok se privilegije ne učitaju ponovo.';
$strJustDelete = 'Samo izbriši korisnike iz tablice privilegija.';

$strKeepPass = 'Ne mijenjaj lozinku';
$strKeyCache = 'Pohrana ključeva';
$strKeyname = 'Naziv ključa';
$strKill = 'Eliminiraj';
$strKnownExternalBug = 'Na funkcionalnost %s utječe poznati nedostatak. Pogledajte %s';
$strKorean = 'Korejski';

$strLandscape = 'Položeno';
$strLanguage = 'Jezik';
$strLanguageUnknown = 'Nepoznati jezik: %1$s.';
$strLatchedPages = 'Vezane stranice';
$strLatexCaption = 'Naslov tablice';
$strLatexContent = 'Sadržaj tablice __TABLE__';
$strLatexContinuedCaption = 'Nastavljeni naslov tablice';
$strLatexContinued = '(nastavljeno)';
$strLatexIncludeCaption = 'Uključi naslov tablice';
$strLatexLabel = 'Ključ oznake';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tablice __TABLE__';
$strLatvian = 'Latvijski';
$strLDI = 'CSV upotrebom LOAD DATA';
$strLDILocal = 'Upotrijebi lokalnu ključnu riječ';
$strLengthSet = 'Duljina/Vrijednosti';
$strLimitNumRows = 'Broj redaka po stranici';
$strLinesTerminatedBy = 'Redovi završeni s';
$strLinkNotFound = 'Veza nije pronađena';
$strLinksTo = 'Povezano s';
$strLithuanian = 'Litavski';
$strLocalhost = 'Lokalno';
$strLocationTextfile = 'Lokacija tekstualne datoteke';
$strLoginInformation = '_Podaci prijave';
$strLogin = 'Prijava';
$strLogout = 'Odjava';
$strLogPassword = 'Lozinka:';
$strLogServer = 'Poslužitelj';
$strLogUsername = 'Korisničko ime:';
$strLongOperation = 'Ovaj postupak može potrajati dulje vrijeme. Ipak nastaviti?';

$strMaxConnects = 'najv. uzastopnih veza';
$strMaximalQueryLength = 'Najveća duljina izrađenog upita';
$strMaximumSize = 'Najv: %s%s';
$strMbExtensionMissing = 'PHP proširenje mbstring nije pronađeno i izgleda da upotrebljavate multibyte tablicu znakova. Bez proširenja mbstring, phpMyAdmin nije u mogućnosti pravilno razdjeljivati naredbe i može doći do neočekivanih rezultata.';
$strMbOverloadWarning = 'Omogućili ste funkciju mbstring.func_overload u vašoj PHP konfiguraciji. Ova opcija nije kompatibilna s programom phpMyAdmin i može prouzrokovati oštećivanje nekih podataka!';
$strMIME_available_mime = 'Raspoložive MIME vrste';
$strMIME_available_transform = 'Raspoloživa preoblikovanja';
$strMIME_description = 'Opis';
$strMIME_MIMEtype = 'MIME vrsta';
$strMIME_nodescription = 'Za ovo preoblikovanje ne postoji raspoloživ opis.<br />Molimo da od autora zatražite objašnjenje rada %s .';
$strMIME_transformation_note = 'Za popis raspoloživih opcija preoblikovanja i njihovih MIME vrsta oblikovanja, kliknite %sopcije preoblikovanja%s';
$strMIME_transformation_options_note = 'Unesite vrijednosti za opcije preoblikovanja upotrebom ovog oblika: \'a\', 100, b,\'c\'...<br />Ako je potrebno unijeti lijevu kosu crtu ("\") ili jednostruki navodnik ("\'") unutar ovih vrijednosti, ispred znaka stavite lijevu kosu crtu (na primjer: \'\\\\xyz\' ili \'a\\\'B\').';
$strMIME_transformation_options = 'Opcije preoblikovanja';
$strMIME_transformation = 'Pretvaranje preglednika';
$strMIMETypesForTable = 'MIME VRSTE ZA TABLICU';
$strMIME_without = 'MIME vrste ispisane kurzivom nemaju posebnu funkciju preoblikovanja';
$strModifications = 'Izmjene su spremljene';
$strModifyIndexTopic = 'Uredi indeks';
$strModify = 'Uredi';
$strMoveMenu = 'Premjesti izbornik';
$strMoveTableOK = 'Tablica %s premještena je u %s.';
$strMoveTable = 'Premjesti tablicu u (bazapodataka<b>.</b>tablica):';
$strMoveTableSameNames = 'Premještanje u istu tablicu nije moguće!';
$strMultilingual = 'višejezično';
$strMyISAMDataPointerSizeDesc = 'Zadana veličina pokazatelja podataka u bajtovima, koju će upotrijebiti naredba CREATE TABLE za MyISAM tablice ako opcija MAX_ROWS nije određena.';
$strMyISAMDataPointerSize = 'Veličina pokazatelja podataka';
$strMyISAMMaxExtraSortFileSizeDesc = 'Ako bi privremena datoteka za brzu izradu MyISAM indeksa mogla biti veća od pohrane ključeva, uz ovdje navedenu vrijednost, preferiraj način pohrane ključeva.';
$strMyISAMMaxExtraSortFileSize = 'Najveća veličina privremenih datoteka pri izradi indeksa';
$strMyISAMMaxSortFileSizeDesc = 'Najveća veličina privremene datoteke koju MySQL smije upotrijebiti tijekom ponovne izrade MyISAM indeksa (tijekom izvođenja naredbi REPAIR TABLE, ALTER TABLE ili LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Najveća veličina datoteke za privremeno preslagivanje';
$strMyISAMRecoverOptionsDesc = 'Način rada za automatski povrat srušenih MyISAM tablica, na način kojim je određen putem opcije --myisam-recover.';
$strMyISAMRecoverOptions = 'Rad s automatskim povratom';
$strMyISAMRepairThreadsDesc = 'Ako je ova vrijednost veća od 1, MyISAM indeksi tablica izrađuju se paralelno (svaki indeks unutar vlastite grane) tijekom popravka putem postupka preslagivanja.';
$strMyISAMRepairThreads = 'Popravi grane';
$strMyISAMSortBufferSizeDesc = 'Međuspremnik koji je predodređen za potrebe preslagivanja MyISAM indeksa tijekom naredbe REPAIR TABLE ili tijekom izrade indeksa naredbama CREATE INDEX ili ALTER TABLE.';
$strMyISAMSortBufferSize = 'Veličina međuspremnika preslagivanja';
$strMySQLCharset = 'MySQL tablica znakova';
$strMysqlClientVersion = 'MySQL verzija klijenta';
$strMySQLConnectionCollation = 'MySQL uspoređivanje veza';
$strMysqlLibDiffersServerVersion = 'Verzija %s vaše PHP MySQL biblioteke razlikuje se oda vaše verzije %s MySQL poslužitelja. Ovo bi moglo prouzrokovati nepredviđeno ponašanje.';
$strMySQLSaid = 'MySQL je poručio:  ';
$strMySQLShowProcess = 'Prikaži procese';
$strMySQLShowStatus = 'Prikaži podatke MySQL pokretanja';
$strMySQLShowVars = 'Prikaži MySQL sistemske varijable';

$strName = 'Naziv';
$strNext = 'Sljedeće';
$strNoActivity = 'Nije bilo nikakvih aktivnosti tijekom %s sekunda. Prijavite se ponovo.';
$strNoDatabases = 'Nema baza podataka';
$strNoDatabasesSelected = 'Nema odabrane baze podataka.';
$strNoDataReceived = 'Nisu primljeni nikakvi podaci za uvoz. Ili nije dat naziv datoteke ili veličina datoteke prelazi najveću dopuštenu veličinu od strane vaše PHP konfiguracije. Pogledajte ČPP 1.16.';
$strNoDescription = 'bez opisa';
$strNoDetailsForEngine = 'Za ovaj pogon pohranjivanje ne postoje raspoloživi podaci.';
$strNoDropDatabases = '"DROP DATABASE" izjave su onemogućene.';
$strNoExplain = 'Preskoči Objasni SQL';
$strNoFilesFoundInZip = 'Datoteke nisu pronađene unutar ZIP arhive!';
$strNoFrames = 'phpMyAdmin je jednostavniji za upotrebu s preglednikom koji <b>podržava okvire</b>.';
$strNoIndex = 'Nema definiranog indeksa!';
$strNoIndexPartsDefined = 'Nema definiranih dijelova indeksa!';
$strNoModification = 'Bez izmjena';
$strNo = 'Ne';
$strNone = 'bez kompresije';
$strNoOptions = 'Ovaj oblik nema raspoložive opcije';
$strNoPassword = 'Bez lozinke';
$strNoPermission = 'Web poslužitelj nema dopuštenja za spremanje datoteke %s.';
$strNoPhp = 'Bez PHP koda';
$strNoPrivileges = 'Bez privilegija';
$strNoRights = 'Nemate dovoljno privilegija da boravite ovdje!';
$strNoRowsSelected = 'Nema odabranih redova';
$strNoSpace = 'Nema dovoljno prostora za spremanje datoteke %s.';
$strNoTablesFound = 'U bazi podataka nisu pronađene tablice.';
$strNoThemeSupport = 'Podrška za teme ne postoji. Provjerite vašu konfiguraciju i/ili vaše teme u mapi %s.';
$strNotNumber = 'Ovo nije brojka!';
$strNotOK = 'nije OK';
$strNotSet = 'tablica <b>%s</b> nije pronađena ili nije zadana u %s';
$strNoUsersFound = 'Korisnici nisu pronađeni.';
$strNoValidateSQL = 'Preskoči provjeru valjanosti SQL-a';
$strNull = 'Null';
$strNumberOfFields = 'Broj polja';
$strNumberOfTables = 'Broj tablica';
$strNumSearchResultsInTable = '%s poklapanja unutar tablice <i>%s</i>';
$strNumSearchResultsTotal = '<b>Ukupno:</b> <i>%s</i> poklapanja';
$strNumTables = 'Tablice';

$strOK = 'U redu  ';
$strOpenDocumentSpreadsheet = 'Otvori izračunsku tablicu dokumenta';
$strOpenDocumentText = 'Otvori tekst dokumenta';
$strOpenNewWindow = 'Otvori novi phpMyAdmin prozor';
$strOperations = 'Operacije';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimiziraj tablicu';
$strOptions = 'Opcije';
$strOr = 'Ili';
$strOverhead = 'Prepunjenje';
$strOverwriteExisting = 'Prepiši postojeće datoteke';

$strPageNumber = 'Broj stranice:';
$strPagesToBeFlushed = 'Stranice za pražnjenje';
$strPaperSize = 'Veličina papira';
$strPartialImport = 'Djelomičan uvoz';
$strPartialText = 'Djelomični tekstovi';
$strPasswordChanged = 'Lozinka za %s uspješno je promijenjena.';
$strPasswordEmpty = 'Lozinka je prazna!';
$strPasswordHashing = 'Izrada presjeka lozinke';
$strPassword = 'Lozinka';
$strPasswordNotSame = 'Lozinke se ne podudaraju!';
$strPdfDbSchema = 'Shema "%s" baza podataka - stranica %s';
$strPdfInvalidTblName = 'Tablica "%s" ne postoji!';
$strPdfNoTables = 'Nema tablica';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Generira izvještaj koji sadrži podatke samo jedne tablice)';
$strPDFReportTitle = 'Naslov izvještaja';
$strPerHour = 'po satu';
$strPerMinute = 'po minuti';
$strPerSecond = 'po sekundi';
$strPersian = 'Perzijski';
$strPhoneBook = 'telefonski imenik';
$strPHP40203 = 'Upotrebljavate PHP 4.2.3 koji ima ozbiljne poteškoće s nizovima od višestrukih bajtova (mbstring). Pogledajte PHP izvještaj o nedostatku 19404. Ne preporučuje se upotreba ove verzije PHP-a uz program phpMyAdmin.';
$strPhp = 'Izradi PHP kod';
$strPHPVersion = 'PHP verzija';
$strPleaseSelectPrimaryOrUniqueKey = 'Odaberite primarni ključ ili jedinstveni ključ';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = 'Direktiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> MORA BITI postavljena u vašoj konfiguracijskoj datoteci!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Poljski';
$strPortrait = 'Portret';
$strPos1 = 'Na vrh stranice';
$strPrevious = 'Prethodni';
$strPrimaryKeyHasBeenDropped = 'Primarni ključ je odbačen';
$strPrimaryKeyName = 'Naziv primarnog ključa mora biti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora biti</b> naziv i <b>samo naziv</b> primarnog ključa!)';
$strPrimary = 'Primarni';
$strPrint = 'Ispiši';
$strPrintViewFull = 'Prikaz ispisa (s potpunim tekstovima)';
$strPrintView = 'Prikaz ispisa';
$strPrivDescAllPrivileges = 'Obuhvaća sve privilegije osim GRANT (Podari).';
$strPrivDescAlter = 'Dopušta izmjenu strukture postojećih tablice.';
$strPrivDescAlterRoutine = 'Dopušta izmjenu i odbacivanje pohranjenih rutina.';
$strPrivDescCreateDb = 'Dopušta izradu novih baze podataka i tablice.';
$strPrivDescCreateRoutine = 'Dopušta izradu pohranjenih rutina.';
$strPrivDescCreateTbl = 'Dopušta izradu novih tablica.';
$strPrivDescCreateTmpTable = 'Dopušta izradu privremenih tablica.';
$strPrivDescCreateUser = 'Dopušta izradu, odbacivanje i preimenovanje korisničkih naloga.';
$strPrivDescCreateView = 'Dopušta izradu novih prikaza.';
$strPrivDescDelete = 'Dopušta brisanje podataka.';
$strPrivDescDropDb = 'Dopušta odbacivanje baza podataka i tablica.';
$strPrivDescDropTbl = 'Dopušta odbacivanje tablica.';
$strPrivDescExecute5 = 'Dopušta pokretanje pohranjenih rutina.';
$strPrivDescExecute = 'Dopušta izvršavanje pohranjenih postupaka. Nema učinka u ovoj verziji MySQL-a.';
$strPrivDescFile = 'Dopušta uvoz i izvoz podataka iz datoteka.';
$strPrivDescGrant = 'Dopušta dodavanje korisnika i privilegija bez ponovnog učitavanja tablica.';
$strPrivDescIndex = 'Dopušta izradu i odbacivanje indeksa.';
$strPrivDescInsert = 'Dopušta umetanje i zamjenu podataka.';
$strPrivDescLockTables = 'Dopušta zaključavanje tablica u trenutnoj grani.';
$strPrivDescMaxConnections = 'Ograničava broj novih povezivanja koje korisnik može otvoriti, po satu.';
$strPrivDescMaxQuestions = 'Ograničava broj upita koje korisnik može poslati poslužitelju, po satu.';
$strPrivDescMaxUpdates = 'Ograničava broj naredbi koje korisnik može pokrenuti, a čija je namjena mijenjanje bilo koje tablice ili baze podataka, po satu.';
$strPrivDescMaxUserConnections = 'Ograničava broj istovremenih povezivanja koje korisnik može imati.';
$strPrivDescProcess3 = 'Dopušta eliminiranje postupaka drugih korisnika.';
$strPrivDescProcess4 = 'Dopušta pregledavanje cjelokupnih upita u popisu postupaka.';
$strPrivDescReferences = 'Nema učinka u ovoj verziji MySQL-a.';
$strPrivDescReload = 'Dopušta ponovno učitavanje postavki poslužitelja i pražnjenje privremene pohrane poslužitelja.';
$strPrivDescReplClient = 'Dopušta korisnik postavljanje upita o lokaciji potčinjenih i gospodara.';
$strPrivDescReplSlave = 'Potrebno za replikacijske potčinjene.';
$strPrivDescSelect = 'Dopušta čitanje podataka.';
$strPrivDescShowDb = 'Daje pristup cjelokupnom popisu baza podataka.';
$strPrivDescShowView = 'Dopušta izvođenje upita SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Dopušta gašenje poslužitelja.';
$strPrivDescSuper = 'Dopušta povezivanje čak i kad je dostignut najveći broj veza. Potrebno za većinu administrativnih operacija poput postavljanja općih varijabli ili eliminiranje grana drugih korisnika.';
$strPrivDescUpdate = 'Dopušta mijenjanje podataka.';
$strPrivDescUsage = 'Bez privilegija.';
$strPrivileges = 'Privilegije';
$strPrivilegesReloaded = 'Privilegije su uspješno učitane.';
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
$strQueryStatistics = '<b>Statistike upita</b>: Od pokretanja poslužitelju je upućeno %s upita.';
$strQueryTime = 'Upit je trajao %01,4f sek';
$strQueryType = 'Vrsta upita';
$strQueryWindowLock = 'Ne prepisuj ovaj upit iz vanjskog prozora';

$strReadRequests = 'Pročitaj zahtjeve';
$strReceived = 'Primljeno';
$strRecommended = 'preporučeno';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Provjeri referencijalan integritet:';
$strRefresh = 'Osvježi';
$strRelationalSchema = 'Shema relacija';
$strRelationDeleted = 'Povezanost je izbrisana';
$strRelationNotWorking = 'Dodatne osobine za rad s povezanim tablicama su isključene. Da biste saznali zašto kliknite %sovdje%s.';
$strRelationsForTable = 'RELACIJE TABLICE';
$strRelations = 'Relacije';
$strRelationView = 'Prikaz relacija';
$strReloadingThePrivileges = 'Ponovno učitavanje privilegija';
$strReload = 'Osvježi';
$strReloadPrivileges = 'Ponovno učitaj privilegije';
$strRemoveSelectedUsers = 'Ukloni odabrane korisnike';
$strRenameDatabaseOK = 'Baza podataka %s preimenovana je u %s';
$strRenameTableOK = 'Tablica %s preimenovana je u %s';
$strRenameTable = 'Preimenuj tablicu u';
$strRepairTable = 'Popravi tablicu';
$strReplaceNULLBy = 'NULL zamijeni s';
$strReplaceTable = 'Podatke tablice zamijeni datotekom';
$strReplication = 'Replikacija';
$strReset = 'Povrat';
$strResourceLimits = 'Ograničenja resursa';
$strRestartInsertion = 'Ponovno pokreni umetanje s %s redaka';
$strReType = 'Ponovite';
$strRevokeAndDeleteDescr = 'Korisnici će i dalje imati privilegiju USAGE (Upotreba) sve dok se privilegije ponovno ne učitaju.';
$strRevokeAndDelete = 'Opozovi sve aktivne privilegije korisnika i potom ih izbriši.';
$strRevokeMessage = 'Opozvali ste privilegije za %s';
$strRevoke = 'Opozovi';
$strRomanian = 'Rumunjski';
$strRoutineReturnType = 'Vrsta povratka';
$strRoutines = 'Rutine';
$strRowLength = 'Duljina retka';
$strRowsFrom = 'redovi koji započinju zapisom #';
$strRowSize = ' Veličina retka ';
$strRowsModeFlippedHorizontal = 'vodoravno (okrenuta zaglavlja)';
$strRowsModeHorizontal = 'vodoravno';
$strRowsModeOptions = 'u načinu %s i ponavljaj zaglavlja nakon %s ćelija';
$strRowsModeVertical = 'uspravno';
$strRows = 'Redaka';
$strRowsStatistic = 'Statistike redova';
$strRunning = 'Izvršava se pri %s';
$strRunQuery = 'Podnesi upit';
$strRunSQLQueryOnServer = 'Pokreni SQL upit na poslužitelju %s';
$strRunSQLQuery = 'Pokreni SQL upit na bazi podataka %s';
$strRussian = 'Ruski';

$strSaveOnServer = 'Spremi na poslužitelju u mapi %s';
$strSavePosition = 'Spremi položaj';
$strSave = 'Spremi';
$strScaleFactorSmall = 'Vrijednost omjera suviše je malen da bi shema stala na jednu stranicu';
$strSearchFormTitle = 'Traži u bazi podataka';
$strSearchInTables = 'Unutar tablica:';
$strSearchNeedle = 'Riječi ili vrijednost za pretraživanje (džoker: "%"):';
$strSearchOption1 = 'najmanje jedna riječ';
$strSearchOption2 = 'sve riječi';
$strSearchOption3 = 'točan izraz';
$strSearchOption4 = 'kao regularan izraz';
$strSearchResultsFor = 'Rezultati pretraživanja za "<i>%s</i>" %s:';
$strSearch = 'Traži';
$strSearchType = 'Traži:';
$strSecretRequired = 'Konfiguracijska datoteka potražuje tajnu lozinku (blowfish_secret).';
$strSelectADb = 'Odaberite bazu podataka';
$strSelectAll = 'Odaberi sve';
$strSelectBinaryLog = 'Odaberite binarni zapisnik za prikaz';
$strSelectFields = 'Odaberite polja (najmanje jedno):';
$strSelectForeignKey = 'Odaberite strani ključ';
$strSelectNumRows = 'unutar upita';
$strSelectReferencedKey = 'Odaberite referentni ključ';
$strSelectTables = 'Odaberite tablice';
$strSend = 'Spremi kao datoteku';
$strSent = 'Poslano';
$strServerChoice = 'Odabir poslužitelja';
$strServerNotResponding = 'Poslužitelj ne odgovara';
$strServer = 'Poslužitelj';
$strServers = 'Poslužitelji';
$strServerStatusDelayedInserts = 'Odgođena umetanja';
$strServerStatus = 'Podaci o razini izvršavanja';
$strServerStatusUptime = 'Ovaj MySQL poslužitelj radi tijekom %s. Pokrenut je %s.';
$strServerTabVariables = 'Varijable';
$strServerTrafficNotes = '<b>Promet poslužitelja</b>: Ove tablice prikazuju statistike mrežnog prometa na ovom MySQL poslužitelju od trenutka njegovog pokretanja.';
$strServerVars = 'Varijable i postavke poslužitelja';
$strServerVersion = 'Verzija poslužitelja';
$strSessionStartupErrorGeneral = 'Pokretanje sesije nije moguće uslijed pogrešaka. Provjerite pogreške koje ispisuje vaš PHP i/ili datoteku zapisnika poslužitelja i pravilno konfigurirajte vašu instalaciju PHP-a.';
$strSessionValue = 'Vrijednost sesije';
$strSetEnumVal = 'Ako je vrata polja "enum" ili "set", unesite vrijednosti u sljedećem obliku: \'a\',\'B\',\'c\'...<br />Ako je potrebno unijeti lijevu kosu crtu ("\") or a single quote ("\'") amongst those values, precede it with a backslash (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Prikaži sve';
$strShowColor = 'Prikaži boju';
$strShowDatadictAs = 'Oblikovanje rječnika podataka';
$strShowFullQueries = 'Prikaži pune upite';
$strShowGrid = 'Prikaži mrežu';
$strShowHideLeftMenu = 'Prikaži/sakrij lijevi izbornik';
$strShowingBookmark = 'Prikazivanje oznake';
$strShowingPhp = 'Prikazivanje kao PHP koda';
$strShowingRecords = 'Prikazivanje redaka';
$strShowingSQL = 'Prikazivanje SQL upita';
$strShowOpenTables = 'Prikaži otvorene tablice';
$strShowPHPInfo = 'Prikaži PHP podatke';
$strShow = 'Prikaži';
$strShowSlaveHosts = 'Prikaži potčinjena računala';
$strShowSlaveStatus = 'Prikaži stanje potčinjenog';
$strShowStatusBinlog_cache_disk_useDescr = 'Broj transakcija koje su upotrebljavale privremeni binarni zapisnik pohrane, ali su nadmašile vrijednost binlog_cache_size i upotrijebile privremenu datoteku za pohranjivanje izjava transakcija.';
$strShowStatusBinlog_cache_useDescr = 'Broj transakcija koje su upotrebljavale privremeni binarni zapisnik pohrane.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Broj privremenih tablica koje poslužitelj automatski izrađuje na disku tijekom izvršavanja izjava. Ako je stavka Created_tmp_disk_tables velika, moglo bi biti potrebno da povećate vrijednost tmp_table_size, da biste privremene tablice smjestili u radnu memoriju, a ne na tvrdi disk.';
$strShowStatusCreated_tmp_filesDescr = 'Koliko je privremenih tablica izradio mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Broj privremenih tablica u memoriji koje je poslužitelj automatski izradio tijekom izvršavanja izjava.';
$strShowStatusDelayed_errorsDescr = 'Broj redaka upisanih pomoću naredbe INSERT DELAYED, a kod kojih je došlo do neke vrste pogreške (vjerojatan razlog je udvojen ključ).';
$strShowStatusDelayed_insert_threadsDescr = 'Broj hvatište grana INSERT DELAYED u upotrebi. Svaka druga tablica na koju se primjeni INSERT DELAYED dobiva vlastitu granu.';
$strShowStatusDelayed_writesDescr = 'Broj redaka zapisanih pomoću INSERT DELAYED.';
$strShowStatusFlush_commandsDescr  = 'Broj izvršenih izjava FLUSH.';
$strShowStatusHandler_commitDescr = 'Broj internih izjava COMMIT.';
$strShowStatusHandler_deleteDescr = 'Brojka koja prokazuje koliko puta je redak bio izbrisan iz tablice.';
$strShowStatusHandler_discoverDescr = 'MySQL poslužitelj može upitati pogon pohranjivanja NDB skupine, zna li za tablicu s traženim nazivom. Ovaj se postupak naziva otkrivanje. Handler_discover naznačuje koliko je puta tablica bila otkrivenom.';
$strShowStatusHandler_read_firstDescr = 'Brojka koja prokazuje koliko puta je prvi unos bio čitan iz indeksa. Velik broj je pokazatelj da poslužitelj izvodi mnogo potpunih pretraživanja indeksa, npr. SELECT col1 FROM foo, pri čemu je col1 indeksiran.';
$strShowStatusHandler_read_keyDescr = 'Broj zahtjeva za čitanje retka zasnovan na ključu. Velik broj je pokazatelj da su vaši upiti i tablice pravilno indeksirani.';
$strShowStatusHandler_read_nextDescr = 'Broj zahtjeva za čitanje sljedećeg retka u redoslijedu ključa. Ovaj se broj povećava ako izvodite upite stupca indeksa s ograničenjem opsega ili ako izvodite pretraživanje indeksa.';
$strShowStatusHandler_read_prevDescr = 'Broj zahtjeva za čitanje prethodnog retka u redoslijedu ključa. Ovaj način čitanja uglavnom se upotrebljava za optimiziranje opcije ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Broj zahtjeva za čitanje retka zasnovanog na fiksnom položaju. Ovaj iznos je velik ako izvodite mnogo upita koji zahtjevaju preslagivanje rezultata. Vjerojatno imate mnogo upita koji zahtijevaju da MySQL pretražuje cjelokupne tablice ili imate spojeve koji ne upotrebljavaju ključ na pravilan način.';
$strShowStatusHandler_read_rnd_nextDescr = 'Broj zahtjeva za čitanje sljedećeg retka u datoteci s podacima. Ovaj broj je velik ako izvodite mnogo pretraživanja tablice. Općenito, ovaj iznos naznačuje da vaša tablice nisu pravilno indeksirane ili da vaši upiti nisu napisani na način koji iskorištava prednosti raspoloživih indeksa.';
$strShowStatusHandler_rollbackDescr = 'Broj internih izjava ROLLBACK.';
$strShowStatusHandler_updateDescr = 'Broj zahtjeva za ažuriranje retka u tablici.';
$strShowStatusHandler_writeDescr = 'Broj zahtjeva za umetanje retka u tablici.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Broj stranice koje sadrže podatke (dirty ili clean).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Broj stranica koje su trenutno \'dirty\'.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Broj stranica međuspremnika za koje je podnesen zahtjev za pražnjenjem.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Broj slobodnih stranica.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Broj vezanih stranica u InnoDB međuspremniku. Ove se stranice trenutno čitaju ili zapisuju, ili ih nije moguće isprazniti ili ukloniti iz nekog drugog razloga.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Broj stranica koje su zauzete jer su dodijeljene za administrativna prepunjenja, poput zaključavanja redaka ili adaptivni indeks presjeka. Ovu je vrijednost moguće izračunati i kao Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Ukupna veličina međuspremnika, u stranicama.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Broj "nasumičnih" pripremnih čitanja koje je InnoDB inicijalizirao. Događa se kad upit mora pretražiti veliki dio tablice, ali nasumičnim redoslijedom.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Broj slijednih pripremnih čitanja koje je inicijalizirao InnoDB. Ovo se događa kad InnoDB izvodi potpuno pretraživanje tablice.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Broj logičkih zahtjeva za čitanjem koje je obavio InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Broj logičkih čitanja koje InnoDB nije mogao zadovoljiti iz međuspremnik i morao je izvesti čitanje po jedne stranice.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Uobičajeno, zapisivanja u InnoDB međuspremnik izvode se u pozadini. Ipak, ako je potrebno iščitati ili izraditi stranicu, a nema raspoložive prazne stranice, bit će potrebno pričekati pražnjenje stranice. Ovaj brojač prikazuje stanje ovog čekanja. Ako je veličina međuspremnika pravilno postavljena, ova bi vrijednost trebala biti malenom.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Broj izvršenih zapisivanja u InnoDB međuspremnik.';
$strShowStatusInnodb_data_fsyncsDescr = 'Broj dosadašnjih fsync() operacija.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Trenutan broj fsync() operacija u čekanju.';
$strShowStatusInnodb_data_pending_readsDescr = 'Trenutan broj čitanja u čekanju.';
$strShowStatusInnodb_data_pending_writesDescr = 'Trenutan broj zapisivanja u čekanju.';
$strShowStatusInnodb_data_readDescr = 'Količina podataka pročitanih do ovog trenutka, u bajtovima.';
$strShowStatusInnodb_data_readsDescr = 'Ukupan broj iščitavanja podataka.';
$strShowStatusInnodb_data_writesDescr = 'Ukupan broj zapisivanja podataka.';
$strShowStatusInnodb_data_writtenDescr = 'Količina podataka zapisanih do ovog trenutka, u bajtovima.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Broj dvostrukih zapisivanja do ovog trenutka i broj stranica zapisanih za ovu potrebu.';
$strShowStatusInnodb_dblwr_writesDescr = 'Broj dvostrukih zapisivanja do ovog trenutka i broj stranica zapisanih za ovu potrebu.';
$strShowStatusInnodb_log_waitsDescr = 'Broj čekanja koja su se dogodila zbog nedovoljno velikog zapisnika međuspremnika, te je bilo potrebno čekati njegovo pražnjenje prije nastavka rada.';
$strShowStatusInnodb_log_write_requestsDescr = 'Broj zahtjeva za zapisivanje u zapisnik.';
$strShowStatusInnodb_log_writesDescr = 'Broj fizičkih zapisivanja u zapisnik.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Broj fsyncs zapisivanja izvršenih u datoteci zapisnika.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Broj naredbi fsyncs za zapisnik, a koje su na čekanju.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Zapisivanja u zapisnik na čekanju.';
$strShowStatusInnodb_os_log_writtenDescr = 'Broj bajtova zapisanih u zapisnik.';
$strShowStatusInnodb_pages_createdDescr = 'Broj izrađenih stranica.';
$strShowStatusInnodb_page_sizeDescr = 'Izrađena veličina InnoDB stranice (zadana vrijednost je 16kB). Mnoge se vrijednosti prebrojavaju u stranicama. Veličina stranice dopušta njihovo jednostavno pretvaranje u bajtove.';
$strShowStatusInnodb_pages_readDescr = 'Broj iščitanih stranica.';
$strShowStatusInnodb_pages_writtenDescr = 'Broj zapisanih stranica.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Broj zaključavanja redaka na koje se trenutno čeka.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Prosječno vrijeme postizanja zaključanosti retka, u milisekundama.';
$strShowStatusInnodb_row_lock_timeDescr = 'Ukupno vrijeme utrošeno na postizanja zaključanosti retka, u milisekundama.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Najdulje vrijeme postizanja zaključanosti retka, u milisekundama.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Broj okolnosti kad je bilo potrebno čekati na zaključanost retka.';
$strShowStatusInnodb_rows_deletedDescr = 'Broj redaka izbrisanih iz InnoDB tablica.';
$strShowStatusInnodb_rows_insertedDescr = 'Broj redaka umetnutih u InnoDB tablice.';
$strShowStatusInnodb_rows_readDescr = 'Broj redaka iščitanih iz InnoDB tablica.';
$strShowStatusInnodb_rows_updatedDescr = 'Broj ažuriranih redaka u InnoDB tablicama.';
$strShowStatusKey_blocks_not_flushedDescr = 'Broj ključnih blokova u pohrani ključeva koji su izmijenjeni ali još nisu ispražnjeni na disk. Nekoć se nazivalo: Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Broj neiskorištenih blokova u pohrani ključeva. Ovu vrijednost možete upotrijebiti za određivanje veličine pohrane ključeva koja je u upotrebi.';
$strShowStatusKey_blocks_usedDescr = 'Broj iskorištenih blokova u pohrani ključeva. Ova je vrijednost oznaka gornje razine koja označuje najveći broj blokova koji su ikad bili u istovremenoj upotrebi.';
$strShowStatusKey_read_requestsDescr = 'Broj zahtjeva za čitanje ključnog bloka iz pohrane.';
$strShowStatusKey_readsDescr = 'Broj fizičkih čitanja ključnih blokova s diska. Ako je iznos Key_reads velik, vjerojatno je vaša vrijednost key_buffer_size premala. Stupanj promašivanja pohrane moguće je izračunati putem naredbi Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Broj zahtjeva za zapisivanje ključnog bloka u pohranu.';
$strShowStatusKey_writesDescr = 'Broj fizičkih zapisivanja ključnih blokova na disk. ';
$strShowStatusLast_query_costDescr = 'Ukupan trošak posljednjeg složenog upita, izračunat od strane optimizatora upita. Korisno za uspoređivanje troškova različitih planova upita za isti upit. Zadana vrijednost je 0 i podrazumijeva da još nema složenog upita.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Broj redaka koji čekaju svoje upisivanje u red čekanja INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Broj tablica koje su otvorene. Ako je iznos otvorenih tablica velik, vaša vrijednost za pohranu tablica vjerojatno je premala.';
$strShowStatusOpen_filesDescr = 'Broj otvorenih datoteka.';
$strShowStatusOpen_streamsDescr = 'Broj otvorenih protoka (uglavnom se upotrebljava za vođenje zapisnika).';
$strShowStatusOpen_tablesDescr = 'Broj otvorenih tablica.';
$strShowStatusQcache_free_blocksDescr = 'Broj slobodnih memorijskih blokova u pohrani upita.';
$strShowStatusQcache_free_memoryDescr = 'Količina slobodne memorije za pohranu upita.';
$strShowStatusQcache_hitsDescr = 'Broj pronalaženja u pohrani.';
$strShowStatusQcache_insertsDescr = 'Broj upita pridodanih u pohranu.';
$strShowStatusQcache_lowmem_prunesDescr = 'Broj upita koji su uklonjeni iz pohrane radi oslobađanja memorije za potrebe pohranjivanja novih upita. Ovaj vam podatak može pomoći pri podešavanju veličine pohrane upita. Pohrana upita upotrebljava strategiju posljednjeg nedavno upotrebljavanog (LRU - least recently used) radi odlučivanja koje će upite ukloniti iz pohrane.';
$strShowStatusQcache_not_cachedDescr = 'Broj upita koji nisu pohranjeni (nisu za pohranu ili nisu pohranjeni zbog postavke query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Broj upita registriranih u pohrani.';
$strShowStatusQcache_total_blocksDescr = 'Ukupan broj blokova u pohrani upita.';
$strShowStatusReset = 'Povrat';
$strShowStatusRpl_statusDescr = 'Stanje replikacije sigurnosti protiv otkaza (još nije implementirano).';
$strShowStatusSelect_full_joinDescr = 'Broj spojeva koji ne upotrebljavaju indekse. Ako ovaj iznos nije 0, bit će potrebno da pažljivo provjerite indekse vaših tablica.';
$strShowStatusSelect_full_range_joinDescr = 'Broj spojeva koji nad referentnom tablicom upotrebljavaju opseg traženja.';
$strShowStatusSelect_range_checkDescr = 'Broj spojeva bez ključeva koji provjeravaju upotrebu ključa nakon svakog retka. (Ako ovaj iznos nije 0, bit će potrebno da pažljivo provjerite indekse vaših tablica.';
$strShowStatusSelect_rangeDescr = 'Broj spojeva koji su upotrijebili opsege nad prvom tablicom. (Općenito nije kritično ako je ovaj iznos velik.)';
$strShowStatusSelect_scanDescr = 'Broj spojeva koji su izveli potpuno pretraživanje prve tablice.';
$strShowStatusSlave_open_temp_tablesDescr = 'Broj privremenih tablica koje su trenutno otvorene od strane potčinjene SQL grane.';
$strShowStatusSlave_retried_transactionsDescr = 'Ukupna količina (od pokretanja) ponovnih pokušaja transakcija od strane replikacijske potčinjene SQL grane.';
$strShowStatusSlave_runningDescr = 'Uključeno (ON) ako je ovaj poslužitelj potčinjen i povezan na gospodara.';
$strShowStatusSlow_launch_threadsDescr = 'Broj grana kojima je bilo potrebno više vremena za izradu, nego što je to definirano u slow_launch_time (sporo vrijeme pokretanja), u sekundama.';
$strShowStatusSlow_queriesDescr = 'Broj upita kojima je bilo potrebno više vremena nego što je to definirano u long_query_time (dugo vrijeme upita), u sekundama.';
$strShowStatusSort_merge_passesDescr = 'Broj prolaza udruživanja koje je algoritam za preslagivanje morao izvesti. Ako je ovaj iznos velik, razmotrite mogućnost povećanja vrijednosti sistemske varijable sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Broj preslagivanja učinjenih pomoću opsega.';
$strShowStatusSort_rowsDescr = 'Broj presloženih redaka.';
$strShowStatusSort_scanDescr = 'Broj preslagivanja učinjenih pomoću pretraživanja tablice.';
$strShowStatusTable_locks_immediateDescr = 'Količina trenutno postignutih zaključavanja tablica.';
$strShowStatusTable_locks_waitedDescr = 'Količina zaključavanja tablica koji nisu mogli biti trenutno postignuti i bilo je potrebno određeno čekanje. Ako je ovaj iznos visok i ako imate problema s performansama, bit će potrebno da prvo optimizirate svoje upite i potom ili podijelite svoje tablice ili upotrijebite replikaciju.';
$strShowStatusThreads_cachedDescr = 'Broj grana u pohrani grana. Stupanj pogodaka u pohrani može se izračunati kao Threads_created/Connections. Ako je ovaj iznos prikazan crvenom bojom, bit će potrebno da povećate svoju vrijednost thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Broj trenutno otvorenih veza.';
$strShowStatusThreads_createdDescr = 'Broj grana izrađenih za rukovanje vezama. Ako je iznos Threads_created velik, moglo bi biti potrebno da povećate vrijednost thread_cache_size. (Uobičajeno, ako imate dobru implementaciju grana, ova opcija neće pružiti primjetna poboljšanja performansi.)';
$strShowStatusThreads_runningDescr = 'Broj grana koje nisu uspavane.';
$strShowTableDimension = 'Prikaži dimenzije tablice';
$strShowTables = 'Prikaži tablice';
$strShowThisQuery = 'Ovaj upit ponovno prikaži ovdje';
$strSimplifiedChinese = 'Kineski, pojednostavljen';
$strSingly = '(pojedinačno)';
$strSize = 'Veličina';
$strSkipQueries = 'Broj zapisa (upita) koje je potrebno preskočiti od početka';
$strSlovak = 'Slovački';
$strSlovenian = 'Slovenski';
$strSmallBigAll = 'Malo / Sve veliko';
$strSnapToGrid = 'Poravnaj s mrežom';
$strSocketProblem = '(ili priključak lokalnog MySQL poslužitelja nije ispravno konfiguriran)';
$strSortByKey = 'Presloži po ključu';
$strSorting = 'Preslagivanje';
$strSort = 'Presloži';
$strSpaceUsage = 'Iskorištenost prostora';
$strSpanish = 'Španjolski';
$strSplitWordsWithSpace = 'Riječi su razdvojene znakom razmaka (" ").';
$strSQLCompatibility = 'Način rada SQL kompatibilnosti';
$strSQLExportType = 'Vrsta izvoza';
$strSQLParserBugMessage = 'Postoji mogućnost da ste pronašli nedostatak u SQL raščlanjivaču. Temeljito proučite vaš upit i provjerite ispravan unos navodnika. Jedan od mogućih razloga je i da ste učitali datoteku s binarnim vrijednosti izvan prostora s navodnicima. Vaš upit također možete provjeriti u naredbenom retku MySQL-a. Ispis pogreške MySQL poslužitelja može vam pomoći u dijagnosticiranju problema. Ako i dalje postoje problemi ili ako raščlanjivač ne uspijeva u zadacima koji uspijevaju u naredbenom retku, suzite svoj unos SQL upita na samo onaj upit koji izaziva probleme i podnesite prijavu o nedostatku zajedno s dijelom podatka u donjem odjeljku CUT:';
$strSQLParserUserError = 'Izgleda da postoji pogreška u vašem SQL upitu. Ispis pogreške MySQL poslužitelja može vam pomoći u dijagnosticiranju problema.';
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
$strStatisticsOverrun = 'Na zaposlenom poslužitelju brojač bajtova mogao bi preletjeti svoj raspon prikaza, pri čemu bi statistike koje prikazuje MySQL poslužitelj mogle biti netočne.';
$strStatUpdateTime = 'Posljednje ažuriranje';
$strStatus = 'Stanje';
$strStorageEngine = 'Pogon pohrane';
$strStorageEngines = 'Pogoni pohrane';
$strStrucCSV = 'CSV';
$strStrucData = 'Strukturu i podatke';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucNativeExcel = 'Izvorno MS Excel oblikovanje';
$strStrucOnly = 'Samo strukturu';
$strStructPropose = 'Predloži strukturu tablice';
$strStructureForView = 'Struktura za pregledavanje';
$strStructure = 'Strukturu';
$strSubmit = 'Podnesi';
$strSuccess = 'Vaš SQL upit uspješno je izvršen';
$strSum = 'Zbroj';
$strSwedish = 'Švedski';
$strSwitchToDatabase = 'Prebaci se na kopiranu bazu podataka';
$strSwitchToTable = 'Prebaci se na kopiranu tablicu';

$strTableAlreadyExists = 'Tablica %s već postoji!';
$strTableComments = 'Komentari tablice';
$strTableEmpty = 'Naziv tablice je prazan!';
$strTableHasBeenDropped = 'Tablica %s je odbačen';
$strTableHasBeenEmptied = 'Tablica %s je očišćena';
$strTableHasBeenFlushed = 'Tablica %s je ispražnjena';
$strTableIsEmpty = 'Tablica izgleda praznom!';
$strTableMaintenance = 'Održavanje tablice';
$strTableName = 'Naziv tablice';
$strTableOfContents = 'Sadržaj tablice';
$strTableOptions = 'Opcije tablice';
$strTables = '%s tablica';
$strTableStructure = 'Tablična struktura za tablicu';
$strTable = 'Tablica';
$strTakeIt = 'Dodijeli';
$strTblPrivileges = 'Privilegije specifične za tablicu';
$strTempData = 'Privremeni podaci';
$strTextAreaLength = ' Zbog svoje duljine,<br /> uređivanje ovog polja možda neće biti moguće ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'Zadana tema %s nije pronađena!';
$strThemeNoPreviewAvailable = 'Nema raspoloživog pregleda.';
$strThemeNotFound = 'Tema %s nije pronađena!';
$strThemeNoValidImgPath = 'Valjana putanja slika za temu %s nije pronađena!';
$strThemePathNotFound = 'Za temu %s nije pronađena putanje tema!';
$strTheme = 'Tema / Stil';
$strThisHost = 'Ovo računalo';
$strThreads = 'Grane';
$strThreadSuccessfullyKilled = 'Grana %s uspješno je prekinuta.';
$strTimeoutInfo = 'Vrijeme prethodnog uvoza je isteklo. Nakon ponovno podnošenja bit će nastavljeno od položaja %d.';
$strTimeoutNothingParsed = 'Ipak, pri posljednjem prijelazu nikakvi podaci nisu bili raščlanjeni. To znači da phpMyAdmin neće biti u mogućnosti završiti ovaj uvoz sve dok ne povećate vremenska ograničenja unutar php.';
$strTimeoutPassed = 'Vrijeme za skriptu je isteklo. Ako želite završiti uvoz, ponovo podnesite istu datoteku i uvoz će nastaviti.';
$strTime = 'Vrijeme';
$strToFromPage = 'stranica od / prema';
$strToggleScratchboard = 'Uključi bilješke';
$strToggleSmallBig = 'Malo / Veliko';
$strToSelectRelation = 'Za odabir povezanosti kliknite:';
$strTotalUC = 'Ukupno';
$strTotal = 'ukupno';
$strTraditionalChinese = 'Kineski, tradicionalan';
$strTraditionalSpanish = 'Španjolski, tradicionalan';
$strTraffic = 'Promet';
$strTransactionCoordinator = 'Koordinator transakcije';
$strTransformation_application_octetstream__download = 'Prikazuje vezu prema preuzimanju binarnih podataka polja. Možete upotrijebiti prvu opciju da biste sami odredili naziv datoteke ili drugu opciju da biste upotrijebili naziv polja koje sadrži naziv datoteke. Ako upotrijebite drugu opciju, u prvu opciju morate unijeti prazan niz.';
$strTransformation_application_octetstream__hex = 'Prikazuje podatke u heksadecimalnom obliku. Opcionalan prvi parametar određuje koliko često će prazna mjesta biti dodavana (zadana vrijednost je 2).';
$strTransformation_image_jpeg__inline = 'Prikazuje sličicu s mogućnošću klikanja. Opcije su najveća širina i visina u pikselima. Izvorne proporcije su očuvane.';
$strTransformation_image_jpeg__link = 'Prikazuje vezu za preuzimanje ove slike.';
$strTransformation_image_png__inline = 'Pogledajte slika/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Polja TIME (vrijeme), TIMESTAMP (vremenska oznaka), DATETIME (datum i vrijeme) ili brojčanu uniksoidnu oznaku vremena prikazuje kao oblikovani datum. Prva opcija je odmak (u satima) koji će biti pridodan vremenskoj oznaci (zadano: 0). Druga opcije određuje drukčiji oblik izražavanja datuma i vremena. Treća opcija određuje želite li prikazati lokalni datum ili u skladu s UTC (upotrijebite izraz "local" ili "utc"). Sukladno tome, oblik datuma ima različite vrijednosti - za opciju "local" pogledajte dokumentaciju o upotrebi PHP funkcije strftime(), a za "utc" pogledajte dokumentaciju o upotrebi funkcije gmdate().';
$strTransformation_text_plain__external = 'SAMO ZA LINUX: Pokreće vanjsku aplikaciju i predaje joj podatke polja putem standardnog unosa. Vraća standardan ispis aplikacije. Zadana aplikacija je Tidy, uredno ispisivanje HTML koda. Iz sigurnosnih razloga morate ručno urediti datoteku libraries/transformations/text_plain__external.inc.php i izraditi popis alata koje želite učiniti raspoloživim. Prva opcija će biti redni broj programa kojeg želite upotrebljavati a druga opcija su parametri programa. Ako je treća opcija postavljena na vrijednost 1, pretvorit će ispis pomoću htmlspecialchars(), (zadano: 1). Ako je četvrta opcija postavljena na vrijednost 1, spriječit će omatanje i osigurati prikaz ispisa u jednom retku (zadano: 1).';
$strTransformation_text_plain__formatted = 'Prikazuje sadržaj polje u izvornom obliku, bez njegovog provlačenja kroz htmlspecialchars(). Odnosno, za polje se pretpostavlja da ne sadrži valjani HTML kod.';
$strTransformation_text_plain__imagelink = 'Prikazuje sliku i vezu. Polje sadrži naziv datoteke. Prva opcija je URL prefiks, poput "http://www.example.com/". Druga i treća opcija predstavljaju širinu i visinu u pikselima.';
$strTransformation_text_plain__link = 'Prikazuje vezu. Polje sadrži naziv datoteke. Prva opcija je URL prefiks, poput "http://www.example.com/". Druga opcija je naziv veze.';
$strTransformation_text_plain__sql = 'Oblikuje tekst kao SQL upit s naglašavanjem sintakse.';
$strTransformation_text_plain__substr = 'Prikazuje dio niza. Prva opcija je broj znakova koje je potrebno preskočiti, od početka niza (zadano: 0). Druga opcija je broj znakova za povrat (zadano: do završetka niza). Treća opcija  je niz koji je potrebno pridodati iza završetka i/ili prije početka kad započne srezivanje (zadano: "...").';
$strTriggers = 'Okidači';
$strTruncateQueries = 'Sreži prikazane rezultate';
$strTurkish = 'Turski';
$strType = 'Vrsta';

$strUkrainian = 'Ukrajinski';
$strUncheckAll = 'Ukloni sve oznake';
$strUnicode = 'Unicode';
$strUnique = 'Jedinstveno';
$strUnknown = 'nepoznato';
$strUnselectAll = 'Ukloni sav odabir';
$strUnsupportedCompressionDetected = 'Pokušali ste učitati datoteku s nepodržanim načinom komprimiranja (%s). Takva podrška još nije implementirana ili je onemogućena u vašoj konfiguraciji.';
$strUpdatePrivMessage = 'Ažurirali ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je ažuriran.';
$strUpdateQuery = 'Ažuriraj upit';
$strUpdComTab = 'Pogledajte dokumentaciju radi uputa o ažuriranju tablice column_comments.';
$strUpgrade = 'Trebali biste nadograditi na %s %s ili kasniju.';
$strUploadErrorCantWrite = 'Zapisivanje datoteke na disk nije uspjelo.';
$strUploadErrorExtension = 'Učitavanje datoteke prekinuto je uslijed ekstenzije.';
$strUploadErrorFormSize = 'Učitana datoteka nadmašuje uputu MAX_FILE_SIZE (najveća veličina datoteke), određenu u HTML obliku.';
$strUploadErrorIniSize = 'Učitana datoteka nadmašuje uputu upload_max_filesize (najveća veličina datoteke) u datoteci php.ini.';
$strUploadErrorNoTempDir = 'Nedostaje mapa privremene pohrane.';
$strUploadErrorPartial = 'Učitana datoteka bila je djelomično učitana.';
$strUploadErrorUnknown = 'Nepoznata pogreška tijekom učitavanja datoteke.';
$strUploadLimit = 'Vjerojatno ste pokušali s učitavanjem prevelike datoteke. Pogledajte %sdokumentaciju%s radi uputa o načinima rješavanja ovog ograničenja.';
$strUploadsNotAllowed = 'Učitavanje datoteka nije dopušteno na ovom poslužitelju.';
$strUsage = 'Upotreba';
$strUseBackquotes = 'Unesi nazive tablica i polja sa stražnjim navodnicima';
$strUsedPhpExtensions = 'Upotrijebljena PHP proširenja';
$strUseHostTable = 'Upotrijebi tablicu poslužitelja';
$strUserAlreadyExists = 'Korisnik %s već postoji!';
$strUserEmpty = 'Korisničko ime je prazno!';
$strUser = 'Korisnik';
$strUserName = 'Korisničko ime';
$strUserNotFound = 'Odabrani korisnik nije pronađen u tablici privilegija.';
$strUserOverview = 'Pregled korisnika';
$strUsersDeleted = 'Odabrani korisnici uspješno su izbrisani.';
$strUsersHavingAccessToDb = 'Korisnici koji imaju pristup u "%s"';
$strUseTabKey = 'Pomoću tipke TAB premještate se od jedne vrijednost do druge vrijednost, odnosno s tipkama CTRL+Strelice za premještanje bilo kamo';
$strUseTables = 'Upotrijebi tablice';
$strUseTextField = 'Upotrijebi tekstualno polje';
$strUseThisValue = 'Upotrijebi ovu vrijednost';

$strValidateSQL = 'Provjera valjanosti SQL-a';
$strValidatorError = 'SQL validator nije bilo moguće pokrenuti. Provjerite jeste li instalirali potrebna PHP proširenja, na način opisan u %sdokumentaciji%s.';
$strValue = 'Vrijednost';
$strVar = 'Varijabla';
$strVersionInformation = 'Podaci o verziji';
$strViewDumpDatabases = 'Prikaži ispis (shemu) baza podataka';
$strViewDumpDB = 'Prikaži ispis (shemu) baze podataka';
$strViewDump = 'Prikaži ispis (shemu) tablice';
$strViewHasBeenDropped = 'Index %s je ispušten';
$strViewMaxExactCount = 'Ovaj prikaz sadrži više od %s redaka. Pogledajte %sdokumentaciju%s.';
$strViewName = 'Naziv prikaza';
$strView = 'Prikaz';

$strWebServerUploadDirectoryError = 'Mapu koju ste odabrali za potrebe učitavanja nije moguće dohvatiti';
$strWebServerUploadDirectory = 'mapa učitavanja web poslužitelja';
$strWelcome = 'Dobro došli u %s';
$strWestEuropean = 'Zapadno europski';
$strWildcard = 'džoker';
$strWindowNotFound = 'Ciljani prozor preglednika nije bilo moguće osvježiti. Možda ste zatvorili nadređeni prozor ili su postavke sigurnosti vašeg preglednika konfigurirane za blokiranje ažuriranja preko više prozora.';
$strWithChecked = 'S odabirom:';
$strWriteRequests = 'Zahtjevi zapisivanja';
$strWrongUser = 'Pogrešno korisničko ime ili lozinka. Pristup odbijen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Napomena: Postavljanje ovih opcija na vrijednost 0 (nula) uklanja ograničenje.';
$strZip = '"zipano"';

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

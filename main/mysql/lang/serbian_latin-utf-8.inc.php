<?php
/* $Id: serbian_latin-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

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
$byteUnits = array('bajtova', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sre', 'Čet', 'Pet', 'Sub');
$month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'avg', 'sep', 'okt', 'nov', 'dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. u %H:%M';
$timespanfmt = '%s dana, %s sati, %s minuta i %s sekundi';

$strAbortedClients = 'Prekinuto';
$strAccessDeniedCreateConfig = 'Verovatan razlog za ovo je da niste napravili konfiguracionu datoteku. Možete koristiti %1$sskript za instalaciju%2$s da biste je napravili.';
$strAccessDeniedExplanation = 'phpMyAdmin je pokušao da se poveže na MySQL server, ali je server odbio povezivanje. Proverite naziv domaćina, korisničko ime i lozinku u config.inc.php i uverite se da odgovaraju podacima koje ste dobili od administratora MySQL servera.';
$strAccessDenied = 'Pristup odbijen';
$strAction = 'Akcija';
$strAddAutoIncrement = 'Dodaj AUTO_INCREMENT vrednost';
$strAddClause = 'Dodaj %s';
$strAddConstraints = 'Dodaj ograničenja';
$strAddDeleteColumn = 'Dodaj/obriši kolonu';
$strAddDeleteRow = 'Dodaj/obriši polje za kriterijum';
$strAddFields = 'Dodaj %s polja';
$strAddHeaderComment = 'Dodaj komentar u zaglavlje (\\n razdvaja linije)';
$strAddIntoComments = 'Dodaj u komentare';
$strAddNewField = 'Dodaj novo polje';
$strAddPrivilegesOnDb = 'Dodaj privilegije na sledećoj bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na sledećoj tabeli';
$strAddSearchConditions = 'Dodaj uslove pretraživanja (deo "WHERE" upita):';
$strAddToIndex = 'Dodaj u ključ &nbsp;%s&nbsp;kolona(e)';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Dodali ste novog korisnika.';
$strAdministration = 'Administracija';
$strAffectedRows = 'Obuhvaćeno redova:';
$strAfterInsertBack = 'Nazad na prethodnu stranu';
$strAfterInsertNewInsert = 'Dodaj još jedan novi red';
$strAfterInsertNext = 'Uredi sledeći red';
$strAfterInsertSame = 'Vrati se na ovu stranu';
$strAfter = 'Posle %s';
$strAllowInterrupt = 'Dozvoljava prekid uvoza u slučaju da skript otkrije da je blizu vremenskog ograničenja. Ovo može biti dobar način uvoza velikih datoteka, ali sa druge strane može pokvariti transakcije.';
$strAll = 'Sve';
$strAllTableSameWidth = 'Prikaz svih tabela iste širine?';
$strAlterOrderBy = 'Promeni redosled u tabeli';
$strAnalyzeTable = 'Analiziraj tabelu';
$strAnd = 'i';
$strAndThen = 'i onda';
$strAngularLinks = 'Uglaste veze';
$strAnIndex = 'Ključ je upravo dodat %s';
$strAny = 'Bilo koji';
$strAnyHost = 'Bilo koji domaćin';
$strAnyUser = 'Bilo koji korisnik';
$strApproximateCount = 'Može biti približno. Vidite FAQ 3.11';
$strAPrimaryKey = 'Primarni ključ je upravo dodat %s';
$strArabic = 'Arapski';
$strArmenian = 'Jermenski';
$strAscending = 'Rastući';
$strAtBeginningOfTable = 'Na početku tabele';
$strAtEndOfTable = 'Na kraju tabele';
$strAttr = 'Atributi';
$strAutomaticLayout = 'Automatski raspored';

$strBack = 'Nazad';
$strBaltic = 'Baltički';
$strBeginCut = 'POČETAK REZ';
$strBeginRaw = 'POČETAK SIROVO';
$strBinary = 'Binarni';
$strBinaryDoNotEdit = 'Binarni - ne menjaj';
$strBinaryLog = 'Binarni dnevnik';
$strBinLogEventType = 'Vrsta događaja';
$strBinLogInfo = 'Informacije';
$strBinLogName = 'Naziv dnevnika';
$strBinLogOriginalPosition = 'Originalna pozicija';
$strBinLogPosition = 'Pozicija';
$strBinLogServerId = 'ID servera';
$strBookmarkAllUsers = 'Dozvoli svakom korisniku da pristupa ovom upamćenom upitu';
$strBookmarkCreated = 'Napravljen marker %s';
$strBookmarkDeleted = 'Obeleživač je upravo obrisan.';
$strBookmarkLabel = 'Naziv';
$strBookmarkQuery = 'Zapamćen SQL-upit';
$strBookmarkReplace = 'Zameni postojeće zapamćene upite istog imena';
$strBookmarkThis = 'Zapamti SQL-upit';
$strBookmarkView = 'Vidi samo';
$strBrowseDistinctValues = 'Pregledaj različite vrednosti';
$strBrowseForeignValues = 'Pregledaj strane vrednosti';
$strBrowse = 'Pregled';
$strBufferPoolActivity = 'Aktivnost skupa prihvatnika';
$strBufferPool = 'Skup prihvatnika';
$strBufferPoolUsage = 'Korišćenje skupa prihvatnika';
$strBufferReadMissesInPercent = 'Promašaji čitanja u %';
$strBufferReadMisses = 'Promašaji pri čitanju';
$strBufferWriteWaits = 'Čekanja na upis';
$strBufferWriteWaitsInPercent = 'Čekanja na upis u %';
$strBulgarian = 'Bugarski';
$strBusyPages = 'Zauzete strane';
$strBzError = 'phpMyAdmin nije mogao da kompresuje sadržaj baze zbog neispravne BZ2 ekstenzije u ovoj verziji PHP-a. Preporučuje se da podesite <code>$cfg[\'BZipDump\']</code> direktivu u vašoj phpMyAdmin konfiguracionoj datoteci na <code>FALSE</code>. Ako želite da koristite mogućnosti BZ2 kompresije, trebalo bi da pređete na noviju verziju PHP-a. Vidite PHP izveštaj o greškama %s za detalje.';
$strBzip = '"bzip-ovano"';

$strCalendar = 'Kalendar';
$strCancel = 'Otkaži';
$strCanNotLoadExportPlugins = 'Nije moguće učitati dodatke za izvoz, molimo proverite svoju instalaciju!';
$strCanNotLoadImportPlugins = 'Ne mogu da učitam dodatke za uvoz, molim proverite svoju instalaciju!';
$strCannotLogin = 'Ne mogu da se prijavim na MySQL server';
$strCantLoad = 'ne mogu da učitam ekstenziju %s,<br />molim proverite PHP konfiguraciju';
$strCantLoadRecodeIconv = 'Ne mogu da učitam iconv ili recode ekstenzije potrebne za konverziju skupova znakova, podesite PHP da dozvoli korišćenje ovih ekstenzija ili onemogućite konverziju skupova znakova u phpMyAdmin-u.';
$strCantRenameIdxToPrimary = 'Ne mogu da promenim ključ u PRIMARY (primarni) !';
$strCantUseRecodeIconv = 'Ne mogu da koristim iconv ili libiconv ili recode_string funkcije iako ekstenzija prijavljuje da je učitana. Proverite vašu PHP konfiguraciju.';
$strCardinality = 'Kardinalnost';
$strCaseInsensitive = 'Ne razlikuje mala i velika slova';
$strCaseSensitive = 'Razlikuje mala i velika slova';
$strCentralEuropean = 'Centralnoevropski';
$strChangeCopyModeCopy = '... sačuvaj stare.';
$strChangeCopyModeDeleteAndReload = ' ... obriši starog iz tabele korisnika i zatim ponovo učitaj privilegije.';
$strChangeCopyModeJustDelete = ' ... obriši stare iz tabela korisnika.';
$strChangeCopyMode = 'Napravi novog korisnika sa istim privilegijama i ...';
$strChangeCopyModeRevoke = ' ... obustavi sve privilegije starog korisnika i zatim ga obriši.';
$strChangeCopyUser = 'Promeni informacije o prijavi / Kopiraj korisnika';
$strChangeDisplay = 'Izaberi polja za prikaz';
$strChangePassword = 'Promeni lozinku';
$strChange = 'Promeni';
$strCharset = 'Karakter set';
$strCharsetOfFile = 'Karakter set datoteke:';
$strCharsetsAndCollations = 'Karakter setovi i sortiranje';
$strCharsets = 'Kodne strane';
$strCheckAll = 'Označi sve';
$strCheckOverhead = 'Proveri tabele koje imaju prekoračenja';
$strCheckPrivsLong = 'Proveri privilegije za bazu &quot;%s&quot;.';
$strCheckPrivs = 'Proveri privilegije';
$strCheckTable = 'Proveri tabelu';
$strChoosePage = 'Izaberite stranu koju menjate';
$strColComFeat = 'Prikazujem komentare kolone';
$strCollation = 'Sortiranje';
$strColumnNames = 'Imena kolona';
$strColumnPrivileges = 'Privilegije vezane za kolone';
$strCommand = 'Naredba';
$strCommentsForTable = 'KOMENTARI TABELE';
$strComments = 'Komentari';
$strCompatibleHashing = 'MySQL&nbsp;4.0 kompatibilno';
$strCompleteInserts = 'Kompletan INSERT (sa imenima polja)';
$strCompression = 'Kompresija';
$strCompressionWillBeDetected = 'Vrsta kompresije uvezenih datoteka će biti automatski odabrana: %s';
$strConfigDefaultFileError = 'Ne mogu da učitam podrazumevanu konfiguraciju iz: "%1$s"';
$strConfigFileError = 'phpMyAdmin nije mogao da pročita vašu konfiguracionu datoteku!<br />Ovo se može desiti ako PHP nađe grešku u procesiranju ili ne može da pronađe datoteku.<br />Pozovite konfiguracionu datoteku direktno koristeći donji link i pročitajte poruke o grešci koje dobijate. U većini slučajeve negde nedostaje navodnik ili tačka-zarez.<br />Ako dobijete praznu stranu, sve je u redu.';
$strConfigureTableCoord = 'Podesite koordinate za tabelu %s';
$strConnectionError = 'Ne mogu da se povežem: neispravna podešavanja.';
$strConnections = 'Konekcije';
$strConstraintsForDumped = 'Ograničenja za izvezene tabele';
$strConstraintsForTable = 'Ograničenja za tabele';
$strControluserFailed = 'Konekcija za controluser-a, onako kako je definisana u vašoj konfiguraciji, nije uspela.';
$strCookiesRequired = 'Kolačići (Cookies) moraju u ovom slučaju biti aktivni.';
$strCopyDatabaseOK = 'Baza %s je prekopirana u %s';
$strCopy = 'Kopiraj';
$strCopyTable = 'Kopiraj tabelu u (baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je kopirana u %s.';
$strCopyTableSameNames = 'Ne mogu da kopiram tabelu u samu sebe!';
$strCouldNotKill = 'phpMyAdmin nije mogao da prekine proces %s. Verovatno je već zatvoren.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE pre kopiranja';
$strCreateIndex = 'Napravi ključ na&nbsp;%s&nbsp;kolona';
$strCreateIndexTopic = 'Napravi novi ključ';
$strCreate = 'Napravi';
$strCreateNewDatabase = 'Napravi novu bazu podataka';
$strCreateNewTable = 'Napravi novu tabelu u bazi %s';
$strCreatePage = 'Napravi novu stranu';
$strCreatePdfFeat = 'Pravljenje PDF-ova';
$strCreateRelation = 'Napravi relaciju';
$strCreateTable  = 'Napravi tabelu';
$strCreateUserDatabase = 'Baza za korisnika';
$strCreateUserDatabaseName = 'Napravi bazu sa istim imenom i dodaj sve privilegije';
$strCreateUserDatabaseNone = 'Nema';
$strCreateUserDatabaseWildcard = 'Daj sve privilegije na imenu sa džokerima (korisničko_ime\_%)';
$strCreationDates = 'Datumi kreiranja/ažuriranja/provere';
$strCriteria = 'Kriterijum';
$strCroatian = 'Hrvatski';
$strCSV = 'CSV';
$strCyrillic = 'Ćirilični';
$strCzech = 'Češki';
$strCzechSlovak = 'Češko-slovački';

$strDanish = 'Danski';
$strDatabase = 'Baza podataka';
$strDatabaseEmpty = 'Ime baze nije zadato!';
$strDatabaseExportOptions = 'Opcije za izvoz baze';
$strDatabaseHasBeenDropped = 'Baza %s je odbačena.';
$strDatabases = 'Baze';
$strDatabasesDropped = '%s baza je uspešno odbačeno.';
$strDatabasesStatsDisable = 'Isključi statistike';
$strDatabasesStatsEnable = 'Uključi statistike';
$strDatabasesStatsHeavyTraffic = 'Napomena: uključivanje statistika može prouzrokovati veliki saobraćaj između veb i MySQL servera.';
$strDatabasesStats = 'Statistika baze';
$strDataDict = 'Rečnik podataka';
$strDataOnly = 'Samo podaci';
$strDataPages = 'Strane sa podacima';
$strData = 'Podaci';
$strDBComment = 'Komentar baze:';
$strDBCopy = 'Kopiraj bazu u';
$strDbIsEmpty = 'Baza je izgleda prazna!';
$strDbPrivileges = 'Privilegije vezane za bazu';
$strDBRename = 'Preimenuj bazu u';
$strDbSpecific = 'Specifično za bazu';
$strDefaultEngine = '%s je podrazumevani pogon skladištenja na ovom MySQL serveru.';
$strDefault = 'Podrazumevano';
$strDefaultValueHelp = 'Za podrazumevanu vrednost, unesite samo jednu vrednost, bez kosih crta ili navodnika u ovom obliku: a';
$strDefragment = 'Defragmentiraj tabelu';
$strDelayedInserts = 'Koristi odložena umetanja';
$strDeleteAndFlushDescr = 'Ovo je najčistiji način, ali ponovno učitavanje privilegina može da potraje.';
$strDeleteAndFlush = 'Obriši korisnike i ponovo učitaj privilegije.';
$strDeleted = 'Red je obrisan';
$strDeletedRows = 'Obrisani redovi:';
$strDeleteNoUsersSelected = 'Nijedan korisnik nije odabran za brisanje!';
$strDelete = 'Obriši';
$strDeleteRelation = 'Obriši relaciju';
$strDeleting = 'Brišem %s';
$strDelimiter = 'Graničnik';
$strDelOld = 'Trenutna strana ima reference na tabele koje više ne postoje. Želite li da obrišete te reference?';
$strDescending = 'Opadajući';
$strDescription = 'Opis';
$strDesigner = 'Dizajner';
$strDesignerHelpDisplayField = 'Polje za prikaz je obojeno u ružičasto. Da bi postavili/uklonili polje kao polje za prikaz, kliknite na ikonu „Izaberi polje za prikaz“, a potom na naziv odgovarajućeg polja.';
$strDictionary = 'rečnik';
$strDirectLinks = 'Direktne veze';
$strDirtyPages = 'Prljave strane';
$strDisabled = 'Onemogućeno';
$strDisableForeignChecks = 'Isključi provere stranih ključeva';
$strDisplayFeat = 'Prikaži osobine';
$strDisplayOrder = 'Redosled prikaza:';
$strDisplayPDF = 'Prikaži PDF shemu';
$strDoAQuery = 'Napravi "upit po primeru" (džoker: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Da li stvarno hoćete da ';
$strDropDatabaseStrongWarning = 'Ovim ćete UNIŠTITI kompletnu bazu podataka!';
$strDrop = 'Odbaci';
$strDropUsersDb = 'Odbaci baze koje se zovu isto kao korisnici.';
$strDumpingData = 'Prikaz podataka tabele';
$strDumpSaved = 'Sadržaj baze je sačuvan u datoteku %s.';
$strDumpXRows = 'Prikaži %s redova počevši od reda %s.';
$strDynamic = 'dinamički';

$strEditPDFPages = 'Uređivanje PDF strana';
$strEditPrivileges = 'Promeni privilegije';
$strEdit = 'Promeni';
$strEffective = 'Efektivne';
$strEmpty = 'Isprazni';
$strEmptyResultSet = 'MySQL je vratio prazan rezultat (nula redova).';
$strEnabled = 'Omogućeno';
$strEncloseInTransaction = 'Obavi izvoz u transakciji';
$strEndCut = 'KRAJ REZ';
$strEnd = 'Kraj';
$strEndRaw = 'KRAJ SIROVO';
$strEngineAvailable = '%s je dostupan na ovom MySQL serveru.';
$strEngineDisabled = '%s je onemogućen na ovom MySQL serveru.';
$strEngines = 'Skladištenja';
$strEngineUnsupported = 'Ovaj MySQL server ne podržava %s pogon skladištenja.';
$strEnglish = 'Engleski';
$strEnglishPrivileges = ' Napomena: MySQL imena privilegija moraju da budu na engleskom ';
$strError = 'Greška';
$strErrorInZipFile = 'Greška u ZIP arhivi:';
$strErrorRelationAdded = 'Greška: relacija nije dodata.';
$strErrorRelationExists = 'Greška: relacija već postoji.';
$strErrorRenamingTable = 'Greška pri preimenovanju tabele %1$s u %2$s';
$strErrorSaveTable = 'Greška pri snimanju koordinata za Dizajner.';
$strEscapeWildcards = 'Pre džokera _ i % treba staviti znak \ ako ih koristite samostalno';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonski';
$strEvent = 'Događaji';
$strExcelEdition = 'Excel izdanje';
$strExecuteBookmarked = 'Izvrši upamćen upit';
$strExplain = 'Objasni SQL';
$strExportImportToScale = 'Izvor/uvoz u razmeri';
$strExport = 'Izvoz';
$strExportMustBeFile = 'Odabrani tip izvoza mora biti sačuvan u datoteku!';
$strExtendedInserts = 'Prošireni INSERT';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspelih pokušaja';
$strFieldHasBeenDropped = 'Polje %s je obrisano';
$strFieldInsertFromFileTempDirNotExists = 'Greška u premeštanju primljene datoteke, pogledajte FAQ 1.11';
$strField = 'Polje';
$strFieldsEnclosedBy = 'Polja ograničena sa';
$strFieldsEscapedBy = 'Escape karakter &nbsp; &nbsp; &nbsp;';
$strFields = 'Polja';
$strFieldsTerminatedBy = 'Polja razdvojena sa';
$strFileAlreadyExists = 'Datoteka %s već postoji na serveru, promenite ime datoteke ili uključite opciju prepisivanja.';
$strFileCouldNotBeRead = 'Datoteku nije moguće pročitati';
$strFileNameTemplate = 'Šablon imena datoteke';
$strFileNameTemplateDescriptionDatabase = 'naziv baze';
$strFileNameTemplateDescription = 'Ova vrednost se tumači korišćenjem %1$sstrftime%2$s, tako da možete da koristite stringove za formatiranje vremena. Takođe će se desiti i sledeće transformacije: %3$s. Preostali tekst će ostati kako jeste.';
$strFileNameTemplateDescriptionServer = 'naziv servera';
$strFileNameTemplateDescriptionTable = 'naziv tabele';
$strFileNameTemplateRemember = 'zapamti šablon';
$strFiles = 'Datoteke';
$strFileToImport = 'Datoteka za uvoz';
$strFixed = 'sređeno';
$strFlushPrivilegesNote = 'Napomena: phpMyAdmin uzima privilegije korisnika direktno iz MySQL tabela privilegija. Sadržaj ove tabele može se razlikovati od privilegija koje server koristi ako su vršene ručne izmene. U tom slučaju %sponovo učitajte privilegije%s pre nego što nastavite.';
$strFlushQueryCache = 'Očisti keš upita';
$strFlushTable = 'Osveži tabelu ("FLUSH")';
$strFlushTables = 'Očisti (zatvori) sve tabele';
$strFontSize = 'Veličina fonta';
$strForeignKeyError = 'Greška u kreiranju stranog ključa (proverite tipove podataka)';
$strFormat = 'Format';
$strFormEmpty = 'Nedostaje vrednost u obrascu!';
$strFreePages = 'Slobodne strane';
$strFullText = 'Pun tekst';
$strFunction = 'Funkcija';
$strFunctions = 'Funkcije';

$strGenBy = 'Generisao';
$strGeneralRelationFeat = 'Opšte osobine relacija';
$strGenerate = 'Napravi';
$strGeneratePassword = 'Napravi lozinku';
$strGenTime = 'Vreme kreiranja';
$strGeorgian = 'Gruzijski';
$strGerman = 'Nemački';
$strGlobal = 'globalno';
$strGlobalPrivileges = 'Globalne privilegije';
$strGlobalValue = 'Globalna vrednost';
$strGo = 'Kreni';
$strGrantOption = 'Omogući';
$strGreek = 'Grčki';
$strGzip = '"gzip-ovano"';

$strHandler = 'Rukovalac';
$strHasBeenAltered = 'je promenjen(a).';
$strHasBeenCreated = 'je kreiran(a).';
$strHaveToShow = 'Morate izabrati bar jednu kolonu za prikaz';
$strHebrew = 'Hebrejski';
$strHelp = 'Pomoć';
$strHexForBLOB = 'Koristi heksadecimalno za BLOB';
$strHide         = 'Sakrij';
$strHideShowAll = 'Sakrij/prikaži sve';
$strHideShowNoRelation = 'Sakrij/prikaži tabele bez relacija';
$strHomepageOfficial = 'phpMyAdmin veb sajt';
$strHome = 'Početna strana';
$strHost = 'Domaćin';
$strHostEmpty = 'Ime domaćina je prazno!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Mađarski';

$strIcelandic = 'Islandski';
$strId = 'ID';
$strIdxFulltext = 'Tekst ključ';
$strIEUnsupported = 'Internet Explorer ne podržava ovu funkciju.';
$strIgnoreDuplicates = 'Ignoriši duplicirane redove';
$strIgnore = 'Ignoriši';
$strIgnoreInserts = 'Ignoriši duplikate pri umetanju';
$strImportExportCoords = 'Izvoz/uvoz koordinata za PDF shemu';
$strImportFiles = 'Uvoz datoteka';
$strImportFormat = 'Format datoteka za uvoz';
$strImportSuccessfullyFinished = 'Uvoz je uspešno završen, izvršeno je %d upita.';
$strImport = 'Uvoz';
$strIndexes = 'Ključevi';
$strIndexesSeemEqual = 'Sledeći indeksi su verovatno jednaki, i jedan od njih treba ukloniti:';
$strIndexHasBeenDropped = 'Ključ %s je obrisan';
$strIndex = 'Ključ';
$strIndexName = 'Ime ključa :';
$strIndexType = 'Tip ključa :';
$strIndexWarningTable = 'Problem pri indeksiranju tabele `%s`';
$strInnoDBAutoextendIncrementDesc = ' Veličina koraka proširenja veličine tabela koje se automatski proširuju kada se napune.';
$strInnoDBAutoextendIncrement = 'Korak automatskog proširenja';
$strInnoDBBufferPoolSizeDesc = 'Veličina memorijskog prihvatnika koje InnoDB koristi za keširanje podataka i indeksa svojih tabela.';
$strInnoDBBufferPoolSize = 'Veličina prihvatnika';
$strInnoDBDataFilePath = 'Datoteke sa podacima';
$strInnoDBDataHomeDirDesc = 'Zajednički deo putanje direktorijuma za sve InnoDB datoteke sa podacima.';
$strInnoDBDataHomeDir = 'Osnovni direktorijum podataka';
$strInnoDBPages = 'strana';
$strInnoDBRelationAdded = 'Dodata InnoDB relacija';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Vaša konfiguraciona datoteka sadrži podešavanja (root bez lozinke) koja odgovaraju standardnom MySQL privilegovanom nalogu. Vaš MySQL server radi sa ovim podešavanjima, otvoren je za upade, i zaista treba da ispravite ovaj sigurnosni rizik.';
$strInsertAsNewRow = 'Unesi kao novi red';
$strInsertedRowId = 'ID umetnutih redova:';
$strInsertedRows = 'Uneseno redova:';
$strInsert = 'Novi zapis';
$strInternalNotNecessary = '* Unutrašnja relacija nije neophodna kada postoji i u InnoDB.';
$strInternalRelationAdded = 'Dodata interna relacija';
$strInternalRelations = 'Unutrašnje relacije';
$strInUse = 'se koristi';
$strInvalidAuthMethod = 'Neispravan metod autentikacije je zadat u konfiguraciji:';
$strInvalidColumnCount = 'Broj kolona mora biti veći od nule.';
$strInvalidColumn = 'Zadata je neispravna kolona (%s)!';
$strInvalidCSVFieldCount = 'Neispravan broj polja u CSV ulazu na liniji  %d.';
$strInvalidCSVFormat = 'Neispravan format CSV ulaza na liniji %d.';
$strInvalidCSVParameter = 'Neispravni parametri za CSV uvoz: %s';
$strInvalidDatabase = 'Neispravna baza podataka';
$strInvalidFieldAddCount = 'Morate dodati barem jedno polje.';
$strInvalidFieldCount = 'Tabela mora imati barem jedno polje.';
$strInvalidLDIImport = 'Ovaj dodatak ne podržava kompresovane uvoze!';
$strInvalidRowNumber = '%d nije ispravan broj reda.';
$strInvalidServerHostname = 'Neispravan naziv servera %1$s. Molimo proverite svoju konfiguraciju.';
$strInvalidServerIndex = 'Neispravan indeks servera: "%s"';
$strInvalidTableName = 'Neispravan naziv tabele';

$strJapanese = 'Japanski';
$strJoins = 'Spojevi';
$strJumpToDB = 'Pređi na bazu &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Obrisani&quot; korisnici će i dalje imati pristup serveru dok privilegije ne budu ponovo učitane.';
$strJustDelete = 'Samo obriši korisnike iz tabele privilegija.';

$strKeepPass = 'Nemoj da menjaš lozinku';
$strKeyCache = 'Keš ključeva';
$strKeyname = 'Ime ključa';
$strKill = 'Obustavi';
$strKnownExternalBug = 'Ova funkcionalnost %s je pogođena poznatom greškom, vidite %s';
$strKorean = 'Korejski';

$strLandscape = 'Položeno';
$strLanguage = 'Jezik';
$strLanguageUnknown = 'Nepoznat jezik: %1$s.';
$strLatchedPages = 'Zabravljene strane';
$strLatexCaption = 'Komentar tabele';
$strLatexContent = 'Sadržaj tabele __TABLE__';
$strLatexContinuedCaption = 'Nastavljen komentar tabele';
$strLatexContinued = '(nastavljeno)';
$strLatexIncludeCaption = 'Uključi komentar tabele';
$strLatexLabel = 'Oznaka ključa';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tabele __TABLE__';
$strLatvian = 'Letonski';
$strLDI = 'CSV koristeći LOAD DATA';
$strLDILocal = 'Koristi ključnu reč LOCAL';
$strLengthSet = 'Dužina/Vrednost*';
$strLimitNumRows = 'Broj redova po strani';
$strLinesTerminatedBy = 'Linije se završavaju sa';
$strLinkNotFound = 'Veza nije pronađena';
$strLinksTo = 'Veze ka';
$strLithuanian = 'Litvanski';
$strLocalhost = 'Lokalni';
$strLocationTextfile = 'Lokacija tekstualne datoteke';
$strLoginInformation = 'Podaci o prijavi';
$strLogin = 'Prijavljivanje';
$strLogout = 'Odjavljivanje';
$strLogPassword = 'Lozinka:';
$strLogServer = 'Server';
$strLogUsername = 'Korisničko ime:';
$strLongOperation = 'Ova operacija može da potraje. Da li da nastavimo?';

$strMaxConnects = 'maks. istovremenih veza';
$strMaximalQueryLength = 'Maksimalna dužina napravljenog upita';
$strMaximumSize = 'Maksimalna veličina: %s%s';
$strMbExtensionMissing = 'PHP ekstenzija mbstring nije pronađena, a čini se da vi koristite višebajtni skup znakova. Bez ekstenzije mbstring phpMyAdmin ne može ispravno da razdvaja stringove i to može dovesti do neočekivanih rezultata.';
$strMbOverloadWarning = 'U PHP podešavanjima Vam je uključena mbstring.func_overload opcija. Ova opcija je nekompatibilna sa phpMyAdmin i može dovesti do grešaka u nekim podacima!';
$strMIME_available_mime = 'Dostupni MIME-tipovi';
$strMIME_available_transform = 'Dostupne transformacije';
$strMIME_description = 'Opis';
$strMIME_MIMEtype = 'MIME-tipovi';
$strMIME_nodescription = 'Nema opisa za ovu transformaciju.<br />Molimo pitajte autora šta %s radi.';
$strMIME_transformation_note = 'Za listu dostupnih opcija transformacije i njihove transformacije MIME-tipova, kliknite na %sopise transformacija%s';
$strMIME_transformation_options_note = 'Molimo unesite vrednosti za opcije transformacije koristeći ovaj oblik: \'a\', 100, b,\'c\'...<br />Ako treba da unesete obrnutu kosu crtu ("\\") ili apostrof ("\'") u te vrednosti, stavite obrnutu kosu crtu ispred njih (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strMIME_transformation_options = 'Opcije transformacije';
$strMIME_transformation = 'Tranformacije čitača';
$strMIMETypesForTable = 'MIME TIPOVI ZA TABELU';
$strMIME_without = 'MIME-tipovi prikazani u kurzivu nemaju odvojene funkcije transformacije.';
$strModifications = 'Izmene su sačuvane';
$strModifyIndexTopic = 'Izmeni ključ';
$strModify = 'Promeni';
$strMoveMenu = 'Premesti meni';
$strMoveTableOK = 'Tabela %s je pomerena u %s.';
$strMoveTable = 'Pomeri tabelu u (baza<b>.</b>tabela):';
$strMoveTableSameNames = 'Ne mogu da premestim tabelu u samu sebe!';
$strMultilingual = 'višejezički';
$strMyISAMDataPointerSizeDesc = 'Podrazumevana veličina pokazivača u bajtovima, koristi se pri CREATE TABLE za MyISAM tabele kada nije zadata opcija MAX_ROWS';
$strMyISAMDataPointerSize = 'Veličina pokazivača podataka';
$strMyISAMMaxExtraSortFileSizeDesc = 'Ako bi privremena datoteka koja se koristi za brzo kreiranje MyISAM indeksa bila veća nego pri korišćenju keša ključeva za ovde zadatu vrednost, koristi metod keširanja ključeva';
$strMyISAMMaxExtraSortFileSize = 'Maksimalna veličina privremenih datoteka pri kreiranju indeksa';
$strMyISAMMaxSortFileSizeDesc = 'Maksimalna veličina privremenih datoteka koje MySQL sme da koristi pri re-kreiranju MyISAM indeksa (u toku REPAIR TABLE, ALTER TABLE, ili LOAD DATA INFILE operacija).';
$strMyISAMMaxSortFileSize = 'Maksimalna veličina privremenih datoteka za sortiranje';
$strMyISAMRecoverOptionsDesc = 'Režim automatskog oporavka puknutih MyISAM tabela, podešen pri startovanju servera opcijom --myisam-recover.';
$strMyISAMRecoverOptions = 'Režim automatskog oporavka';
$strMyISAMRepairThreadsDesc = 'Ako je vrednost veća od 1, indeksi MyISAM tabela se paralelno kreiraju (svaki indeks u sopstvenoj niti) za vreme procesa popravke sortiranjem.';
$strMyISAMRepairThreads = 'Niti popravke';
$strMyISAMSortBufferSizeDesc = 'Prihvatnik koji se alocira pri sortiranju MyISAM indeksa za vreme operacije REPAIR TABLE ili pri kreiranju indeksa sa CREATE INDEX ili ALTER TABLE.';
$strMyISAMSortBufferSize = 'Veličina prihvatnika za sortiranje';
$strMySQLCharset = 'MySQL set karaktera';
$strMysqlClientVersion = 'Verzija MySQL klijenta';
$strMySQLConnectionCollation = 'Sortiranje za MySQL vezu';
$strMysqlLibDiffersServerVersion = 'Verzija vaše PHP MySQL biblioteke %s se razlikuje od verzije vašeg MySQL servera %s. Ovo može dovesti do nepredvidljivog ponašanja.';
$strMySQLSaid = 'MySQL reče: ';
$strMySQLShowProcess = 'Prikaži listu procesa';
$strMySQLShowStatus = 'Prikaži MySQL informacije o toku rada';
$strMySQLShowVars = 'Prikaži MySQL sistemske promenljive';

$strName = 'Ime';
$strNext = 'Sledeći';
$strNoActivity = 'Nije bilo aktivnosti %s ili više sekundi, molimo prijavite se ponovo';
$strNoDatabases = 'Baza ne postoji';
$strNoDatabasesSelected = 'Nije izabrana ni jedna baza.';
$strNoDataReceived = 'Nisu primljeni nikavi podaci za uvoz. Ili nije bio naveden naziv datoteke, ili veličina datoteke prevazilazi maksimalnu veličinu dozvoljenu u vašoj konfiguraciji PHP-a. Pogledajte. See FAQ 1.16.';
$strNoDescription = 'nema opisa';
$strNoDetailsForEngine = 'Nema detaljnijih informacija o statusu za ovaj pogon skladištenja.';
$strNoDropDatabases = '"DROP DATABASE" komanda je onemogućena.';
$strNoExplain = 'Preskoči objašnjavanje SQL-a';
$strNoFilesFoundInZip = 'U ZIP arhivi nema datoteka!';
$strNoFrames = 'phpMyAdmin preferira čitače koji podržavaju okvire.';
$strNoIndex = 'Ključ nije definisan!';
$strNoIndexPartsDefined = 'Delovi ključa nisu definisani!';
$strNoModification = 'Nema izmena';
$strNo = 'Ne';
$strNone = 'nema';
$strNoOptions = 'Ne postoje opcije za ovaj format';
$strNoPassword = 'Nema lozinke';
$strNoPermission = 'Veb serveru nije dozvoljeno da sačuva datoteku %s.';
$strNoPhp = 'bez PHP koda';
$strNoPrivileges = 'Nema privilegija';
$strNoRights = 'Nije Vam dozvoljeno da budete ovde!';
$strNoRowsSelected = 'Nema odabranih redova';
$strNoSpace = 'Nedovoljno prostora za snimanje datoteke %s.';
$strNoTablesFound = 'Tabele nisu pronađene u bazi.';
$strNoThemeSupport = 'Nema podrške za teme, molimo proverite konfiguraciju i/ili teme u direktorijumu %s.';
$strNotNumber = 'Ovo nije broj!';
$strNotOK = 'nije u redu';
$strNotSet = '<b>%s</b> tabela nije pronađena ili nije postavljena u %s';
$strNoUsersFound = 'Korisnik nije nađen.';
$strNoValidateSQL = 'Preskoči proveru SQL-a';
$strNull = 'Null';
$strNumberOfFields = 'Broj polja';
$strNumberOfTables = 'Broj tabela';
$strNumSearchResultsInTable = '%s pogodaka unutar tabele <i>%s</i>';
$strNumSearchResultsTotal = '<b>Ukupno:</b> <i>%s</i> pogodaka';
$strNumTables = 'Tabele';

$strOK = 'U redu';
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Otvori novi phpMyAdmin prozor';
$strOperations = 'Operacije';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimizuj tabelu';
$strOptions = 'Opcije';
$strOr = 'ili';
$strOverhead = 'Prekoračenje';
$strOverwriteExisting = 'Prepiši postojeće datoteke';

$strPageNumber = 'Broj strane:';
$strPagesToBeFlushed = 'Strane koje treba da budu usklađene';
$strPaperSize = 'Dimenzije papira';
$strPartialImport = 'Delimični uvoz';
$strPartialText = 'Deo teksta';
$strPasswordChanged = 'Lozinka za %s je uspešno promenjena.';
$strPasswordEmpty = 'Lozinka je prazna!';
$strPasswordHashing = 'Heširanje lozinke';
$strPassword = 'Lozinka';
$strPasswordNotSame = 'Lozinke nisu identične!';
$strPdfDbSchema = 'Shema baze "%s" - Strana %s';
$strPdfInvalidTblName = 'Tabela "%s" ne postoji!';
$strPdfNoTables = 'Nema tabela';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Pravi izveštaj koji sadrži podatke jedne tabele)';
$strPDFReportTitle = 'Naslov izveštaja';
$strPerHour = 'na sat';
$strPerMinute = 'u minutu';
$strPerSecond = 'u sekundi';
$strPersian = 'Persijski';
$strPhoneBook = 'telefonski imenik';
$strPHP40203 = 'Koristite PHP 4.2.3, koji ima ozbiljan bag sa višebajtnim stringovima (mbstring). Pogledajte izveštaj o grešci br. 19404. Nije preporučljivo korišćenje ove verzije PHP-a uz phpMyAdmin.';
$strPhp = 'Napravi PHP kod';
$strPHPVersion = 'verzija PHP-a';
$strPleaseSelectPrimaryOrUniqueKey = 'Molimo izaberite primarni ili jedinstveni ključ';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktiva MORA biti podešena u konfiguracionoj datoteci!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Poljski';
$strPortrait = 'Uspravno';
$strPos1 = 'Početak';
$strPrevious = 'Prethodna';
$strPrimaryKeyHasBeenDropped = 'Primarni ključ je obrisan';
$strPrimaryKeyName = 'Ime primarnog ključa mora da bude... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnog ključa!)';
$strPrimary = 'Primarni';
$strPrint = 'Štampaj';
$strPrintViewFull = 'Pogled za štampu (sa punim tekstom)';
$strPrintView = 'Za štampu';
$strPrivDescAllPrivileges = 'Uključuje sve privilegije osim GRANT.';
$strPrivDescAlter = 'Dozvoljava izmenu struktura postojećih tabela.';
$strPrivDescAlterRoutine = 'Dozvoljava izmenu i odbacivanje sačuvanih rutina.';
$strPrivDescCreateDb = 'Dozvoljava kreiranje novih baza i tabela.';
$strPrivDescCreateRoutine = 'Dozvoljava pravljenje sačuvanih rutina.';
$strPrivDescCreateTbl = 'Dozvoljava kreiranje novih tabela.';
$strPrivDescCreateTmpTable = 'Dozvoljava kreiranje privremenih tabela..';
$strPrivDescCreateUser = 'Dozvoljava pravljenje, odbacivanje i preimenovanje korisničkih naloga.';
$strPrivDescCreateView = 'Dozvoli kreiranje novih pogleda.';
$strPrivDescDelete = 'Dozvoljava brisanje podataka.';
$strPrivDescDropDb = 'Dozvoljava odbacivanje baza i tabela.';
$strPrivDescDropTbl = 'Dozvoljava odbacivanje tabela.';
$strPrivDescExecute5 = 'Dozvoljava izvršavanje sačuvanih rutina.';
$strPrivDescExecute = 'Dozvoljava pokretanje sačuvanih procedura. Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescFile = 'Dozvoljava uvoz podataka i njihov izvoz u datoteke.';
$strPrivDescGrant = 'Dozvoljava dodavanje korisnika i privilegija bez ponovnog učitavanja tabela privilegija.';
$strPrivDescIndex = 'Dozvoljava kreiranje i brisanje ključeva.';
$strPrivDescInsert = 'Dozvoljava umetanje i zamenu podataka.';
$strPrivDescLockTables = 'Dozvoljava zaključavanje tabela tekućim procesima.';
$strPrivDescMaxConnections = 'Ograničava broj novih konekcija koje korisnik može ta otvori na sat.';
$strPrivDescMaxQuestions = 'Ograničava broj upita koje korisnik može da uputi serveru za sat.';
$strPrivDescMaxUpdates = 'Ograničava broj komandi koje menjaju tabele ili baze koje korisnik može da izvrši na sat.';
$strPrivDescMaxUserConnections = 'Ograničava broj istovremenih konekcija koje korisnik može da ima.';
$strPrivDescProcess3 = 'Dozvoljava prekidanje procesa drugih korisnika.';
$strPrivDescProcess4 = 'Dozvoljava pregled kompletnih upita u listi procesa.';
$strPrivDescReferences = 'Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescReload = 'Dozvoljava ponovno učitavanje podešavanja servera i pražnjenje keša servera.';
$strPrivDescReplClient = 'Daje pravo korisniku da pita gde su glavni/pomoćni serveri.';
$strPrivDescReplSlave = 'Potrebno zbog pomoćnih servera za replikaciju.';
$strPrivDescSelect = 'Dozvoljava čitanje podataka.';
$strPrivDescShowDb = 'Daje pristup kompletnoj listi baza.';
$strPrivDescShowView = 'Dozvoljava izvršavanje SHOW CREATE VIEW upita.';
$strPrivDescShutdown = 'Dozvoljava gašenje servera.';
$strPrivDescSuper = ' Dozvoljava povezivanje iako je dostignut maksimalan broj dozvoljenih veza; Neophodno za većinu administrativnih opcija kao što su podešavanje globalnih promenljivih ili prekidanje procesa ostalih korisnika.';
$strPrivDescUpdate = 'Dozvoljava izmenu podataka.';
$strPrivDescUsage = 'Nema privilegija.';
$strPrivileges = 'Privilegije';
$strPrivilegesReloaded = 'Privilegije su uspešno ponovo učitane.';
$strProcedures = 'Procedure';
$strProcesses = 'Procesi';
$strProcesslist = 'Lista procesa';
$strProfiling = 'Profilisanje';
$strProtocolVersion = 'Verzija protokola';
$strPutColNames = 'Stavi imena polja u prvi red';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Upit po primeru';
$strQueryCache = 'Keš upita';
$strQueryFrame = 'Prozor za upite';
$strQueryOnDb = 'SQL upit na bazi <b>%s</b>:';
$strQueryResultsOperations = 'Operacije na rezultatima upita';
$strQuerySQLHistory = 'SQL istorijat';
$strQueryStatistics = '<b>Statistike upita</b>: %s upita je postavljeno serveru od njegovog pokretanja.';
$strQueryTime = 'Upit je trajao %01.4f sekundi';
$strQueryType = 'Vrsta upita';
$strQueryWindowLock = 'Ne prepisuj ovaj upit izvan prozora';

$strReadRequests = 'Zahtevi za čitanje';
$strReceived = 'Primljeno';
$strRecommended = 'preporučeno';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Proveri referencijalni integritet:';
$strRefresh = 'Osveži';
$strRelationalSchema = 'Relaciona shema';
$strRelationDeleted = 'Relacija obrisana';
$strRelationNotWorking = 'Dodatne mogućnosti za rad sa povezanim tabelama su isključene. Da biste saznali zašto, kliknite %sovde%s.';
$strRelationsForTable = 'RELACIJE TABELE';
$strRelations = 'Relacije';
$strRelationView = 'Relacioni pogled';
$strReloadingThePrivileges = 'Ponovo učitavam privilegije';
$strReload = 'Ponovo učitaj';
$strReloadPrivileges = 'Ponovo učitaj privilegije';
$strRemoveSelectedUsers = 'Ukloni izabrane korisnike';
$strRenameDatabaseOK = 'Baza %s je preimenovana u %s';
$strRenameTableOK = 'Tabeli %s promenjeno ime u %s';
$strRenameTable = 'Promeni ime tabele u ';
$strRepairTable = 'Popravi tabelu';
$strReplaceNULLBy = 'Zameni NULL sa';
$strReplaceTable = 'Zameni podatke u tabeli sa podacima iz datoteke';
$strReplication = 'Replikacija';
$strReset = 'Poništi';
$strResourceLimits = 'Ograničenja resursa';
$strRestartInsertion = 'Ponovo pokreni unošenje sa %s redova';
$strReType = 'Ponovite unos';
$strRevokeAndDeleteDescr = 'Korisnici će i dalje imati USAGE privilegije dok se privilegije ponovo ne učitaju.';
$strRevokeAndDelete = 'Obustavi sve aktivne privilegije korisnika i zatim ih obriši.';
$strRevokeMessage = 'Zabranili ste privilegije za %s';
$strRevoke = 'Zabrani';
$strRomanian = 'Rumunski';
$strRoutineReturnType = 'Povratni tip';
$strRoutines = 'Rutine';
$strRowLength = 'Dužina reda';
$strRowsFrom = ' redova počev od reda';
$strRowSize = 'Veličina reda';
$strRowsModeFlippedHorizontal = 'horizontalnom (rotirana zaglavlja)';
$strRowsModeHorizontal = 'horizontalnom';
$strRowsModeOptions = 'u %s modu i ponovi zaglavlje posle svakog %s reda';
$strRowsModeVertical = 'vertikalnom';
$strRows = 'Redova';
$strRowsStatistic = 'Statistike reda';
$strRunning = 'na serveru %s';
$strRunQuery = 'Izvrši SQL upit';
$strRunSQLQuery = 'Izvrši SQL upit(e) na bazi %s';
$strRunSQLQueryOnServer = 'Izvrši SQL upit(e) na serveru %s';
$strRussian = 'Ruski';

$strSaveOnServer = 'Sačuvaj na server u direktorijum %s';
$strSavePosition = 'Sačuvaj poziciju';
$strSave = 'Sačuvaj';
$strScaleFactorSmall = 'Faktor umanjenja je premali da bi shema stala na jednu stranu';
$strSearchFormTitle = 'Pretraživanje baze';
$strSearchInTables = 'Unutar tabela:';
$strSearchNeedle = 'Reči ili vrednosti koje se traže (džoker: "%"):';
$strSearchOption1 = 'bar jednu od reči';
$strSearchOption2 = 'sve reči';
$strSearchOption3 = 'tačan izraz';
$strSearchOption4 = 'kao regularni izraz';
$strSearch = 'Pretraživanje';
$strSearchResultsFor = 'Rezultati pretrage za "<i>%s</i>" %s:';
$strSearchType = 'Traži:';
$strSecretRequired = 'Konfiguraciona datoteka zahteva tajnu lozinku (blowfish_secret).';
$strSelectADb = 'Izaberite bazu';
$strSelectAll = 'Izaberi sve';
$strSelectBinaryLog = 'Izaberite binarni dnevnik za pregled';
$strSelectFields = 'Izaberi polja (najmanje jedno)';
$strSelectForeignKey = 'Izaberi strani ključ';
$strSelectNumRows = 'u upitu';
$strSelectReferencedKey = 'Izaberite referencirani ključ';
$strSelectTables = 'Izaberi tabele';
$strSend = 'Sačuvaj kao datoteku';
$strSent = 'Poslato';
$strServerChoice = 'Izbor servera';
$strServerNotResponding = 'Server ne odgovara';
$strServer = 'Server';
$strServers = 'Serveri';
$strServerStatusDelayedInserts = 'Odložena umetanja';
$strServerStatus = 'Informacije o toku rada';
$strServerStatusUptime = 'Ovaj MySQL server radi već %s. Pokrenut je %s.';
$strServerTabVariables = 'Promenljive';
$strServerTrafficNotes = '<b>Saobraćaj servera</b>: Tabele pokazuju statistike mrežnog saobraćaja na ovom MySQL serveru od njegovog pokretanja.';
$strServerVars = 'Serverske promenljive i podešavanja';
$strServerVersion = 'Verzija servera';
$strSessionStartupErrorGeneral = 'Ne mogu da pokrenem sesiju bez grešaka, molim proverite greške u PHP i/ili dnevniku veb servera i propisno podesite vašu PHP instalaciju.';
$strSessionValue = 'Vrednost sesije';
$strSetEnumVal = 'Ako je polje "enum" ili "set", unesite vrednosti u formatu: \'a\',\'b\',\'c\'...<br />Ako vam treba obrnuta kosa crta ("\\") ili apostrof ("\'") koristite ih u "izbegnutom" (escaped) obliku (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strShowAll = 'Prikaži sve';
$strShowColor = 'Prikaži boju';
$strShowDatadictAs = 'Format rečnika podataka';
$strShowFullQueries = 'Prikaži kompletne upite';
$strShowGrid = 'Prikaži mrežu';
$strShowHideLeftMenu = 'Prikaži/sakrij meni s leve strane';
$strShowingBookmark = 'Prikazivanje markera';
$strShowingPhp = 'Prikaz kao PHP kod';
$strShowingRecords = 'Prikaz zapisa';
$strShowingSQL = 'Prikaz kao SQL upit';
$strShowOpenTables = 'Prikaži otvorene tabele';
$strShowPHPInfo = 'Prikaži informacije o PHP-u';
$strShow = 'Prikaži';
$strShowSlaveHosts = 'Prikaži podređene server';
$strShowSlaveStatus = 'Prikaži status podređenih servera';
$strShowStatusBinlog_cache_disk_useDescr = 'Broj tranksakcija koje su koristile keš privremenog binarnog dnevnika ali su prevazišle vrednost u binlog_cache_size i koristile privremenu datoteku da smeste izraze iz transakcije.';
$strShowStatusBinlog_cache_useDescr = 'Broj transakcija koje su koristile keš privremenog binarnog dnevnika.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Broj privremenih tabela koje je server automatski kreirao na disku dok je izvršavao izraze. Ako je Created_tmp_disk_tables veliko, možda treba da povećate vrednost tmp_table_size kako bi učinili da privremene tabele budu bazirane u memoriji umesto na disku.';
$strShowStatusCreated_tmp_filesDescr = 'Koliko privremenih datoteka je mysqld napravio.';
$strShowStatusCreated_tmp_tablesDescr = 'Broj privremenih tabela koje je server automatski kreirao u memoriji dok je izvršavao izraze.';
$strShowStatusDelayed_errorsDescr = 'Broj redova upisanih sa INSERT DELAYED za koje je javljena neka greška (verovatno duplirani ključ).';
$strShowStatusDelayed_insert_threadsDescr = 'Broj INSERT DELAYED rukovalačkih niti u upotrebi. Svaka posebna tabela nad kojom se koristi INSERT DELAYED dobija svoju nit.';
$strShowStatusDelayed_writesDescr = 'Broj upisanih INSERT DELAYED redova.';
$strShowStatusFlush_commandsDescr  = 'Broj izvršenih FLUSH izraza.';
$strShowStatusHandler_commitDescr = 'Broj internih COMMIT izraza.';
$strShowStatusHandler_deleteDescr = 'Broj brisanja nekog reda tabele.';
$strShowStatusHandler_discoverDescr = 'MySQL server može da upita pogon skladištenja NDB Cluster da li zna za tabelu određenog imena. To se naziva otkrivanjem (discovery). Handler_discover označava broj puta kada je otkrivena tabela.';
$strShowStatusHandler_read_firstDescr = 'Broj puta kada je prva stavka pročitana iz indeksa. Ako je ovo visoko, to može značiti da server radi puno punih skeniranja indeksa; na primer SELECT kol1 FROM nešto, pod pretpostavkom da je kol1 indeksirano.';
$strShowStatusHandler_read_keyDescr = 'Broj zahteva za čitanje reda zasnovanih na ključu. Ako je ovaj broj visok, to je dobar pokazatelj da su vaši upiti i tabele propisno indeksirani.';
$strShowStatusHandler_read_nextDescr = 'Broj zahteva za čitanjem sledećeg reda u poretku ključeva. Ovo se povećava kada radite upit po koloni indeksa sa ograničenjem opsega ili ako radite skeniranje indeksa.';
$strShowStatusHandler_read_prevDescr = 'Broj zahteva za čitanjem prethodnog reda u poretku ključeva. Ova metoda čitanja se uglavnom koristi za optimizaciju ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Broj zahteva za čitanje reda zasnovanih na fiksnoj poziciji. Ovo je visoko ako radite mnogo upita koji zahtevaju sortiranje rezultata. Verovatno imate mnogo upita koji zahtevaju da MySQL skenira cele tabele ili imate spojeve koji ne koriste ključeve propisno.';
$strShowStatusHandler_read_rnd_nextDescr = 'Broj zahteva za čitanjem sledećeg reda iz datoteke podataka. Ovo je visoko ako radite puno skeniranja tabela. Ovo obično nagoveštava da vaše tabele nisu propisno indeksirane ili da vaši upiti nisu napisani da iskoriste već postojeće indekse.';
$strShowStatusHandler_rollbackDescr = 'Broj internih ROLLBACK izraza.';
$strShowStatusHandler_updateDescr = 'Broj zahteva za ažuriranje reda u tabeli.';
$strShowStatusHandler_writeDescr = 'Broj zahteva za upisivanje reda u tabelu.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Broj strana koje sadrže podatke (čistih ili prljavih).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Broj strana koje su trenutno prljave.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Broj strana u ostavi bafera za koje je traženo da budu očišćene.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Broj slobodnih strana.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Broj zabravljenih strana u InnoDB ostavi bafera. Sa ovih strana se trenutno čita ili se u njih upisuje ili iz nekog drugog razloga ne mogu biti očišćene niti uklonjene.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Broj strana koje su zauzete zato što su odvojene za administrativne potrebe, kao što su zaključavanje redova ili indeks prilagodljivog heša. Ova vrednost se takođe može izračunati i na sledeći način Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Puna veličina ostave bafera, u stranama.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Broj „nasumičnih“ pred-čitanja koja je InnoDB pokrenuo. Ovo se dešava kada upit treba da skenira veliki deo tabele ali nasumičnim redosledom.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Broj sekvencijalnih pred-čitanja koja je InnoDB pokrenuo. Ovo se dešava kada InnoDB radi sekvencijalno skeniranje cele tabele.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Broj logičkih zahteva za čitanje koje je InnoDB uradio.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Broj logičkih čitanja koja InnoDB nije mogao da zadovolji iz ostave bafera te je morao da radi čitanje pojedinačne strane.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalno se upisi u InnoDB ostavu bafera dešavaju u pozadini. Međutim, ako je neophodno pročitati ili napraviti stranu a nema dostupnih čistih strana, neophodno je sačekati da se strane prethodno očiste. Ovaj brojač broji dešavanja ovih čekanja. Ako je veličina ostave bafera postavljena kako treba, ova vrednost vi trebalo da je niska.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Broj upisa učinjenih u InnoDB ostavu bafera.';
$strShowStatusInnodb_data_fsyncsDescr = 'Broj fsync() operacija do sada.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Trenutni broj fsync() operacija na čekanju.';
$strShowStatusInnodb_data_pending_readsDescr = 'Trenutni broj čitanja na čekanju.';
$strShowStatusInnodb_data_pending_writesDescr = 'Trenutni broj upisa na čekanju.';
$strShowStatusInnodb_data_readDescr = 'Količina podataka pročitanih do sada, u bajtovima.';
$strShowStatusInnodb_data_readsDescr = 'Ukupan broj čitanja podataka.';
$strShowStatusInnodb_data_writesDescr = 'Ukupan broj upisa podataka.';
$strShowStatusInnodb_data_writtenDescr = 'Količina podataka upisanih do sada, u bajtovima';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Broj izvršenih dvoupisnih (doublewrite) upisa i broj strana koje su upisane u ovu svrhu.';
$strShowStatusInnodb_dblwr_writesDescr = 'Broj izvršenih dvoupisnih (doublewrite) upisa i broj strana koje su upisane u ovu svrhu.';
$strShowStatusInnodb_log_waitsDescr = 'Broj čekanja koja smo imali zato što je bafer dnevnika bio premali te smo morali da sačekamo da bude očišćen pre nastavka.';
$strShowStatusInnodb_log_write_requestsDescr = 'Broj zahteva za upis u dnevnik.';
$strShowStatusInnodb_log_writesDescr = 'Broj fizičkih upisa u datoteku dnevnika.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Broj fsyncs upisa načinjenih u datoteku dnevnika.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Broj fsync-ova za datoteku dnevnika na čekanju.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Broj upisa u datoteku dnevnika na čekanju.';
$strShowStatusInnodb_os_log_writtenDescr = 'Broj bajtova upisanih u datoteku dnevnika.';
$strShowStatusInnodb_pages_createdDescr = 'Broj napravljenih strana.';
$strShowStatusInnodb_page_sizeDescr = 'Ukompajlirana veličina strane za InnoDB (podrazumevano 16KB). Mnoge vrednosti se računaju u stranama; veličina strane omogućava da se one lako konvertuju u bajtove.';
$strShowStatusInnodb_pages_readDescr = 'Broj pročitanih strana.';
$strShowStatusInnodb_pages_writtenDescr = 'Broj zapisanih strana.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Broj brava za redove koje se trenutno čekaju.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Prosečno vreme za dobavljanje brave za red, u milisekundama.';
$strShowStatusInnodb_row_lock_timeDescr = 'Ukupno vremena provedeno u dobavljanju brava za redove, u milisekundama.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Najduže vreme za dobavljanje brave za red, u milisekundama.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Broj puta kada se morala čekati brava za red.';
$strShowStatusInnodb_rows_deletedDescr = 'Broj redova obrisanih iz InnoDB tabela.';
$strShowStatusInnodb_rows_insertedDescr = 'Broj redova umetnutih u InnoDB tabele.';
$strShowStatusInnodb_rows_readDescr = 'Broj redova pročitanih iz InnoDB tabela.';
$strShowStatusInnodb_rows_updatedDescr = 'Broj redova ažuriranih u InnoDB tabelama.';
$strShowStatusKey_blocks_not_flushedDescr = 'Broj blokova ključeva u kešu ključeva koji su izmenjeni ali još nisu poslati na disk. Ovo je ranije bilo poznato kao Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Broj neiskorišćenih blokova u kešu ključeva. Ovu vrednost možete da koristite da utvrdite koliki deo keša ključeva je u upotrebi.';
$strShowStatusKey_blocks_usedDescr = 'Broj iskorišćenih blokova u kešu ključeva. Ova vrednost je oznaka „visokog vodostaja“ koja pokazuje najveći ikada broj blokova koji je bio u upotrebi u isto vreme.';
$strShowStatusKey_read_requestsDescr = 'Broj zahteva za čitanje bloka ključeva iz keša.';
$strShowStatusKey_readsDescr = 'Broj fizičkih čitanja bloka ključeva sa diska. Ako je Key_reads veliko, onda je vaša vrednost za key_buffer_size verovatno premala. Stepen promašaja keša se može izračunati kao Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Broj zahteva za upisivanje bloka ključeva u keš.';
$strShowStatusKey_writesDescr = 'Broj fizičkih upisa bloka ključeva na disk.';
$strShowStatusLast_query_costDescr = 'Ukupna cena poslednjeg kompajliranog upita kako ju je izračunao optimizator upita. Korisno za upoređivanje cene različitih planova upita za isti upit. Podrazumevana vrednost 0 znači da još nije bio kompajliran nijedan upit.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Broj redova u INSERT DELAYED redovima čekanja koji čekaju upisivanje.';
$strShowStatusOpened_tablesDescr = 'Broj tabela koje su bile otvarane. Ako je broj veliki, vaš keš tabela je verovatno premali.';
$strShowStatusOpen_filesDescr = 'Broj otvorenih datoteka.';
$strShowStatusOpen_streamsDescr = 'Broj otvorenih tokova (koristi se prvenstveno za vođenje dnevnika (logging)).';
$strShowStatusOpen_tablesDescr = 'Broj otvorenih tabela.';
$strShowStatusQcache_free_blocksDescr = 'Broj slobodnih memorijskih blokova u u kešu upita.';
$strShowStatusQcache_free_memoryDescr = 'Količina slobodne memorije za keš upita.';
$strShowStatusQcache_hitsDescr = 'Broj pogodaka iz keša.';
$strShowStatusQcache_insertsDescr = 'Broj upita dodatih u keš.';
$strShowStatusQcache_lowmem_prunesDescr = 'Broj upita koji su uklonjeni iz keša da bi se oslobodila memorija za keširanje novih upita. Ovaj podatak vam može pomoći da podesite veličinu keša za upite. Keš za upite koristi strategiju najduže nekorišćenog (en: least recently used , LRU) da bi odlučio koje upite da ukloni iz keša.';
$strShowStatusQcache_not_cachedDescr = 'Broj nekeširanih upita (koji se ne mogu keširati ili nisu keširani zbog podešavanja query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Broj upita registrovanih u kešu.';
$strShowStatusQcache_total_blocksDescr = 'Ukupan broj blokova u kešu za upite.';
$strShowStatusReset = 'Reset';
$strShowStatusRpl_statusDescr = 'Status replikacije otporne na greške (nije još implementirano).';
$strShowStatusSelect_full_joinDescr = 'Broj spojeva koji ne koriste indekste. Ako ova vrednost nije 0, trebalo bi pažljivo da proverite indekse vaših tabela.';
$strShowStatusSelect_full_range_joinDescr = 'Broj spojeva koji su koristili pretragu opsega na referentnoj tabeli.';
$strShowStatusSelect_range_checkDescr = 'Broj spojeva bez ključeva koji proveravaju upotrebu ključa posle svakog reda. (Ako ovo nije 0, trebalo bi pažljivo da proverite indekse vaših tabela.)';
$strShowStatusSelect_rangeDescr = 'Broj spojeva koji su koristili opsege na prvoj tabeli. (Obično nije kritično čak ni kada je ovo veliko)';
$strShowStatusSelect_scanDescr = 'Broj spojeva koji su uradili puno skeniranje prve tabele.';
$strShowStatusSlave_open_temp_tablesDescr = 'Broj privremenih tabela trenutno otvorenih od strane pomoćne SQL niti.';
$strShowStatusSlave_retried_transactionsDescr = 'Ukupan broj puta (od pokretanja) kada je pomoćna SQL nit za replikaciju pokušala transakcije.';
$strShowStatusSlave_runningDescr = 'Ovo je ON ako je ovaj server pomoćni koji je povezan na glavni.';
$strShowStatusSlow_launch_threadsDescr = 'Broj niti za koje je trebalo više od slow_launch_time sekudni da bi bile pokrenute.';
$strShowStatusSlow_queriesDescr = 'Broj upita za koje je trebalo više od long_query_time sekudni.';
$strShowStatusSort_merge_passesDescr = 'Broj prolaza za spajanje koje je algoritam za sortiranje morao da odradi. Ako je ova vrednost velika, trebalo bi da razmislite o povećanju vrednosti sistemske promenljive sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Broj sortiranja koja su urađena sa opsegom.';
$strShowStatusSort_rowsDescr = 'Broj sortiranih redova.';
$strShowStatusSort_scanDescr = 'Broj sortiranja do kojih je došlo skeniranjem tabele.';
$strShowStatusTable_locks_immediateDescr = 'Broj puta kada je brava za tabelu odmah dobavljena.';
$strShowStatusTable_locks_waitedDescr = 'Broj puta kada brava za tabelu nije mogla biti odmah dobavljena i bilo je potrebno čekanje. Ako je ovo visoko i imate problema sa performansama, prvo bi trebalo da optimizujete svoje upite a potom da ili podelite tabelu ili tabele ili da koristite replikaciju.';
$strShowStatusThreads_cachedDescr = 'Broj niti u kešu za niti. Stepen pogodaka keša se može izračunati kao Threads_created/Konekcije. Ako je ova vrednost crvena trebalo bi da povećate vaš thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Broj trenutno otvorenih veza.';
$strShowStatusThreads_createdDescr = 'Broj niti kreiranih za rukovanje konekcijama. Ako je Threads_created veliko, možda bi trebalo da povećate vrednost thread_cache_size. (Ako imate dobru implementaciju niti, ovo obično ne donosi primetna poboljšanja u performansama.)';
$strShowStatusThreads_runningDescr = 'Broj niti koje nisu uspavane.';
$strShowTableDimension = 'Prikaži dimenzije tabele';
$strShowTables = 'Prikaži tabele';
$strShowThisQuery = 'Prikaži ponovo ovaj upit';
$strSimplifiedChinese = 'Pojednostavljeni kineski';
$strSingly = '(po jednom polju)';
$strSize = 'Veličina';
$strSkipQueries = 'Broj zapisa (upita) koje treba preskočiti:';
$strSlovak = 'Slovački';
$strSlovenian = 'Slovenači';
$strSmallBigAll = 'Sve malo/veliko';
$strSnapToGrid = 'Drži se mreže';
$strSocketProblem = '(ili priključak lokalnog MySQL servera nije ispravno podešen)';
$strSortByKey = 'Sortiraj po ključu';
$strSorting = 'Sortiranje';
$strSort = 'Sortiranje';
$strSpaceUsage = 'Zauzeće';
$strSpanish = 'Španski';
$strSplitWordsWithSpace = 'Reči se odvajaju razmakom (" ").';
$strSQLCompatibility = 'Mod SQL kompatibilnosti';
$strSQLExportType = 'Tip izvoza';
$strSQLParserBugMessage = 'Postoji mogućnost da ste pronašli bag u SQL parseru. Molimo ispitajte svoj upit pažljivo, i proverite da su navodnici ispravni i da ne nedostaju. Ostali mogući razlozi greške mogu biti da ste poslali binarnu datoteku van oblasti za običan tekst. Možete probati svoj upit u MySQL sučelju komandne linije. Donja poruka o grešci MySQL servera, ako je ima, može vam pomoći u otkrivanju problema. Ako i dalje imate probleme ili ako parser ne uspeva tamo gde uspeva sučelje komandne linije, svedite svoj SQL upit na jedan jedini upit koji stvara probleme i pošaljite nam izveštaj o grešci sa delom koda u donjoj REZ sekciji:';
$strSQLParserUserError = 'Izgleda da postoji greška u vašem SQL upitu. Ovde je poruka o greški MySQL servera, koja vam može pomoći u otkrivanju problema';
$strSQLQuery = 'SQL upit';
$strSQLResult = 'SQL rezultat';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Neispravan iG¤entifikator';
$strSQPBugUnclosedQuote = 'Navodnik nije zatvoren';
$strSQPBugUnknownPunctuation = 'Nepoznat string interpunkcije';
$strStandInStructureForView = 'Struktura koja zamenjuje pogled';
$strStatCheckTime = 'Poslednja provera';
$strStatCreateTime = 'Napravljeno';
$strStatement = 'Ime';
$strStatisticsOverrun = 'Na zaposlenom serveru brojači bajtova mogu da se preliju (overrun), tako da te statistike, onako kako ih prijavljuje MySQL server, mogu biti netačne.';
$strStatUpdateTime = 'Poslednja izmena';
$strStatus = 'Status';
$strStorageEngine = 'Pogon skladištenja';
$strStorageEngines = 'Pogoni skladištenja';
$strStrucCSV = 'CSV format';
$strStrucData = 'Struktura i podaci';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucNativeExcel = 'Izvorni MS Excel podaci';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predloži strukturu tabele';
$strStructureForView = 'Struktura za pogled (view)';
$strStructure = 'Struktura';
$strSubmit = 'Pošalji';
$strSuccess = 'Vaš SQL upit je uspešno izvršen';
$strSum = 'Ukupno';
$strSwedish = 'Švedski';
$strSwitchToDatabase = 'Prebaci se na kopiranu bazu';
$strSwitchToTable = 'Pređi na kopiranu tabelu';

$strTableAlreadyExists = 'Tabela %s već postoji!';
$strTableComments = 'Komentari tabele';
$strTableEmpty = 'Ima tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je odbačena';
$strTableHasBeenEmptied = 'Tabela %s je ispražnjena';
$strTableHasBeenFlushed = 'Tabela %s je osvežena';
$strTableIsEmpty = 'Tabela je izgleda prazna!';
$strTableMaintenance = 'Radnje na tabeli';
$strTableName = 'Naziv tabele';
$strTableOfContents = 'Sadržaj';
$strTableOptions = 'Opcije tabele';
$strTables = '%s tabela';
$strTableStructure = 'Struktura tabele';
$strTable = 'Tabela';
$strTakeIt = 'preuzmi';
$strTblPrivileges = 'Privilegije vezane za tabele';
$strTempData = 'Privremeni podaci';
$strTextAreaLength = 'Zbog njehove veličine, polje<br />možda nećete moći da izmenite';
$strThai = 'Tajski';
$strThemeDefaultNotFound = 'Nije pronađena podrazumevana tema %s!';
$strThemeNoPreviewAvailable = 'Pregled ne postoji.';
$strThemeNotFound = 'Nije pronađena tema %s!';
$strThemeNoValidImgPath = 'Nema ispravne putanje do slika za temu %s!';
$strThemePathNotFound = 'Nije pronađena putanja do teme za temu %s!';
$strTheme = 'Tema / stil';
$strThisHost = 'Ovaj server';
$strThreads = 'Niti';
$strThreadSuccessfullyKilled = 'Proces %s je uspešno prekinut.';
$strTimeoutInfo = 'Prethodnom uvozu je isteklo vreme, nakon ponovnog slanja biće nastavljen od pozicije %d.';
$strTimeoutNothingParsed = 'Međutim, pri poslednjem pokretanju podaci nisu bili obrađeni, što obično znači da phpMyAdmin neće biti u mogućnosti da završi ovaj uvoz osim ako ne povećate vremenska ograničenja u PHP-u';
$strTimeoutPassed = 'Vreme izvršenja skripta je isteklo, ako želite da dovršite uvoz, molimo pošaljite istu datoteku i uvoz će se nastaviti.';
$strTime = 'Vreme';
$strToFromPage = 'od/do stranice';
$strToggleScratchboard = 'Uključi/isključi radnu tablu';
$strToggleSmallBig = 'Promeni malo/veliko';
$strToSelectRelation = 'Da odaberete relaciju, kliknite :';
$strTotalUC = 'Ukupno';
$strTotal = 'ukupno';
$strTraditionalChinese = 'Tradicionalni kineski';
$strTraditionalSpanish = 'Tradicionalni španski';
$strTraffic = 'Saobraćaj';
$strTransactionCoordinator = 'Koordinator transakcija';
$strTransformation_application_octetstream__download = 'Prikazuje vezu za preuzimanje binarnih podataka za polje. Prva opcija je ime binarne datoteke. Druga opcija je moguće ime polja reda tabele koji sadrži ime datoteke. Ako date drugu opciju, prva mora biti postavljena na prazan string';
$strTransformation_application_octetstream__hex = 'Prikazuje heksadecimalni prikaz podataka. Opcioni prvi parametar određuje koliko često se dodaje prazno mesto (podrazumevano svaka 2 nibla).';
$strTransformation_image_jpeg__inline = 'Prikazuje umanjenu sliku na koju je moguće kliknuti; opcije: širina, visina u pikselima (čuva originalni odnos)';
$strTransformation_image_jpeg__link = 'Prikazuje link ka ovoj snimci (npr. direktno preuzimanje iz BLOB-a).';
$strTransformation_image_png__inline = 'Prikaži JPEG slike na strani';
$strTransformation_text_plain__dateformat = 'Prikazuje TIME, TIMESTAMP, DATETIME ili polje sa numeričkom juniks vremenskom oznakom (timestamp) kao formatirani datum. Prva opcija je pomeraj (u satima) koji se dodaje vremenskoj oznaci (podrazumevamo: 0). Drugu opciju koristitte da odredite drugačiji string za formatiranje datuma/vremena. Treća opcija određuje da li želite da vidite lokalni ili UTC datum (koristite stringove "local" ili "utc" za to). U skladu sa tim, format datuma ima različite vrednosti - za "local" pogledajte PHP-ovu dokumentaciju za funkciju strftime() dok je za "utc" to urađeno korišćenjem fukcije gmdate().';
$strTransformation_text_plain__external = 'SAMO LINUX: Pokreće eksternu aplikaciju i popunjava podatke u poljima preko standardnog ulaza. Vraća standardni izlaz aplikacije. Podrazumevano je Tidy, za lepši prikaz HTML koda. Zbog sigurnosnih razloga, morate ručno izmeniti datoteku libraries/transformations/text_plain__external.inc.php i dodati alate koje želite da koristite. Prva opcija je broj programa koje želite da koristite, a druga su parametri programa. Ako se treći parametar postavi na 1 izlaz će biti konvertovan koristeći htmlspecialchars() (podrazumevano je 1). Ako je četvrti parametar postavljen na 1, NOWRAP će biti dodato ćeliji sa sadržajem tako da će izlaz biti prikazan bez izmena. (podrazumevano 1)';
$strTransformation_text_plain__formatted = 'Čuva originalno formatiranje polja. Escaping se ne vrši.';
$strTransformation_text_plain__imagelink = 'Prikazuje sliku i link, polje sadrži naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je širina u pikselima, treća je visina.';
$strTransformation_text_plain__link = 'Prikazuje link, polje sadrži naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je naslov za link.';
$strTransformation_text_plain__sql = 'Formatira tekst kao SQL upit sa obeležavanjem sintakse.';
$strTransformation_text_plain__substr = 'Pokazuje deo stringa. Prva opcija je broj znakova koje treba preskočiti od početka stringa (podrazumevano 0). Druga opcija je broj vraćenih znakova (podrazumevano: do kraja stringa). Treća opcija je string koji se dodaje kada dođe do odsecanja (podrazumevano: ...) .';
$strTriggers = 'Okidači';
$strTruncateQueries = 'Prikaži skraćene upite';
$strTurkish = 'Turski';
$strType = 'Tip';

$strUkrainian = 'Ukrajinski';
$strUncheckAll = 'nijedno';
$strUnicode = 'Unikod';
$strUnique = 'Jedinstveni';
$strUnknown = 'nepoznat';
$strUnselectAll = 'ništa';
$strUnsupportedCompressionDetected = 'Pokušali ste da uvezete datoteku sa kompresijom koja nije podržana (%s). Ili podrška za nju nije implementirana, ili je isključena u vašoj konfiguraciji.';
$strUpdatePrivMessage = 'Ažurirali ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je promenjen.';
$strUpdateQuery = 'Ažuriraj upit';
$strUpdComTab = 'Molimo pogledajte u dokumentaciji kako se ažurira tabela Column_comments';
$strUpgrade = 'Trebalo bi da unapredite vaš %s server na verziju %s ili noviju.';
$strUploadErrorCantWrite = 'Neuspelo upisivanje datoteke na disk.';
$strUploadErrorExtension = 'Prijem datoteke zaustavljen zbog ekstenzije.';
$strUploadErrorFormSize = 'Poslata datoteka prevazilazi vrednost direktive MAX_FILE_SIZE koja je navedena u HTML formi.';
$strUploadErrorIniSize = 'Poslata datoteka prevazilazi vrednost direktive upload_max_filesize u php.ini.';
$strUploadErrorNoTempDir = 'Nedostaje privremeni direktorijum.';
$strUploadErrorPartial = 'Poslata datoteka je samo delimično primljena.';
$strUploadErrorUnknown = 'Nepoznata greška pri slanju datoteke.';
$strUploadLimit = 'Verovatno ste pokušali da uvezete preveliku datoteku. Molimo pogledajte %sdokumentaciju%s za načine prevazilaženja ovog ograničenja.';
$strUploadsNotAllowed = 'Slanje datoteka na ovaj server nije dozvoljeno.';
$strUsage = 'Zauzeće';
$strUseBackquotes = 'Koristi \' za ograničavanje imena polja';
$strUsedPhpExtensions = 'Korišćene PHP ekstenzije';
$strUseHostTable = 'Koristi tabelu domaćina';
$strUserAlreadyExists = 'Korisnik %s već postoji!';
$strUserEmpty = 'Ime korisnika nije uneto!';
$strUser = 'Korisnik';
$strUserName = 'Ime korisnika';
$strUserNotFound = 'Izabrani korisnik nije pronađen u tabeli privilegija.';
$strUserOverview = 'Pregled korisnika';
$strUsersDeleted = 'Izabrani korisnici su uspešno obrisani.';
$strUsersHavingAccessToDb = 'Korisnici koji imaju pristup &quot;%s&quot;';
$strUseTabKey = 'Koristite TAB taster za pomeranje od polja do polja, ili CTRL+strelice za slobodno pomeranje';
$strUseTables = 'Koristi tabele';
$strUseTextField = 'Koristi tekst polje';
$strUseThisValue = 'Koristi ovu vrednost';

$strValidateSQL = 'Proveri SQL';
$strValidatorError = 'SQL validator nije mogao da bude pokrenut. Proverite da li su instalirane neophodne PHP ekstenzije opisane u  %sdokumentaciji%s.';
$strValue = 'Vrednost';
$strVar = 'Promenljiva';
$strVersionInformation = 'Informacije o verziji';
$strViewDumpDatabases = 'Prikaži sadržaj (shemu) baze';
$strViewDumpDB = 'Prikaži sadržaj (shemu) baze';
$strViewDump = 'Prikaži sadržaj (shemu) tabele';
$strViewHasBeenDropped = 'Pogled %s je odbačen';
$strViewMaxExactCount = 'Ovaj pogled ima više od %d redova. Molimo pogledajte %sdokumentaciju%s.';
$strViewName = 'naziv za VIEW';
$strView = 'Pogled';

$strWebServerUploadDirectory = 'direktorijum za slanje veb servera ';
$strWebServerUploadDirectoryError = 'Direktorijum koji ste izabrali za slanje nije dostupan';
$strWelcome = 'Dobrodošli na %s';
$strWestEuropean = 'Zapadnoevropski';
$strWildcard = 'džoker';
$strWindowNotFound = 'Odredišni prozor pretraživača nije mogao da bude ažuriran. Možda ste zatvorili matični prozor, ili vaš pretraživač onemogućava ažuriranje među prozorima zbog sigurnosnih podešavanja';
$strWithChecked = 'Označeno:';
$strWriteRequests = 'Zahtevi za upis';
$strWrongUser = 'Pogrešno korisničko ime/lozinka. Pristup odbijen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Napomena: Postavljanje ovih opcija na 0 (nulu) uklanja ograničenja.';
$strZip = '"zipovano"';

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

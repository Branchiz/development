<?php
/* $Id: serbian_latin-windows-1250.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by:
 *     Mihailo Stefanovic <mikis@users.sourceforge.net>, Branislav Jovanovic <fangorn@eunet.yu>
 *     Igor Mladenovic <mligor@zimco.com>, David Trajkovic <tdavid@ptt.yu>
 */

$charset = 'windows-1250';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajtova', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sre', '�et', 'Pet', 'Sub');
$month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'avg', 'sep', 'okt', 'nov', 'dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. u %H:%M';
$timespanfmt = '%s dana, %s sati, %s minuta i %s sekundi';

$strAbortedClients = 'Prekinuto';
$strAccessDeniedCreateConfig = 'Verovatan razlog za ovo je da niste napravili konfiguracionu datoteku. Mo�ete koristiti %1$sskript za instalaciju%2$s da biste je napravili.';
$strAccessDeniedExplanation = 'phpMyAdmin je poku�ao da se pove�e na MySQL server, ali je server odbio povezivanje. Proverite naziv doma�ina, korisni�ko ime i lozinku u config.inc.php i uverite se da odgovaraju podacima koje ste dobili od administratora MySQL servera.';
$strAccessDenied = 'Pristup odbijen';
$strAction = 'Akcija';
$strAddAutoIncrement = 'Dodaj AUTO_INCREMENT vrednost';
$strAddClause = 'Dodaj %s';
$strAddConstraints = 'Dodaj ograni�enja';
$strAddDeleteColumn = 'Dodaj/obri�i kolonu';
$strAddDeleteRow = 'Dodaj/obri�i polje za kriterijum';
$strAddFields = 'Dodaj %s polja';
$strAddHeaderComment = 'Dodaj komentar u zaglavlje (\\n razdvaja linije)';
$strAddIntoComments = 'Dodaj u komentare';
$strAddNewField = 'Dodaj novo polje';
$strAddPrivilegesOnDb = 'Dodaj privilegije na slede�oj bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na slede�oj tabeli';
$strAddSearchConditions = 'Dodaj uslove pretra�ivanja (deo "WHERE" upita):';
$strAddToIndex = 'Dodaj u klju� &nbsp;%s&nbsp;kolona(e)';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Dodali ste novog korisnika.';
$strAdministration = 'Administracija';
$strAffectedRows = 'Obuhva�eno redova:';
$strAfterInsertBack = 'Nazad na prethodnu stranu';
$strAfterInsertNewInsert = 'Dodaj jo� jedan novi red';
$strAfterInsertNext = 'Uredi slede�i red';
$strAfterInsertSame = 'Vrati se na ovu stranu';
$strAfter = 'Posle %s';
$strAllowInterrupt = 'Dozvoljava prekid uvoza u slu�aju da skript otkrije da je blizu vremenskog ograni�enja. Ovo mo�e biti dobar na�in uvoza velikih datoteka, ali sa druge strane mo�e pokvariti transakcije.';
$strAll = 'Sve';
$strAllTableSameWidth = 'Prikaz svih tabela iste �irine?';
$strAlterOrderBy = 'Promeni redosled u tabeli';
$strAnalyzeTable = 'Analiziraj tabelu';
$strAnd = 'i';
$strAndThen = 'i onda';
$strAngularLinks = 'Uglaste veze';
$strAnIndex = 'Klju� je upravo dodat %s';
$strAny = 'Bilo koji';
$strAnyHost = 'Bilo koji doma�in';
$strAnyUser = 'Bilo koji korisnik';
$strApproximateCount = 'Mo�e biti pribli�no. Vidite FAQ 3.11';
$strAPrimaryKey = 'Primarni klju� je upravo dodat %s';
$strArabic = 'Arapski';
$strArmenian = 'Jermenski';
$strAscending = 'Rastu�i';
$strAtBeginningOfTable = 'Na po�etku tabele';
$strAtEndOfTable = 'Na kraju tabele';
$strAttr = 'Atributi';
$strAutomaticLayout = 'Automatski raspored';

$strBack = 'Nazad';
$strBaltic = 'Balti�ki';
$strBeginCut = 'PO�ETAK REZ';
$strBeginRaw = 'PO�ETAK SIROVO';
$strBinary = 'Binarni';
$strBinaryDoNotEdit = 'Binarni - ne menjaj';
$strBinaryLog = 'Binarni dnevnik';
$strBinLogEventType = 'Vrsta doga�aja';
$strBinLogInfo = 'Informacije';
$strBinLogName = 'Naziv dnevnika';
$strBinLogOriginalPosition = 'Originalna pozicija';
$strBinLogPosition = 'Pozicija';
$strBinLogServerId = 'ID servera';
$strBookmarkAllUsers = 'Dozvoli svakom korisniku da pristupa ovom upam�enom upitu';
$strBookmarkCreated = 'Napravljen marker %s';
$strBookmarkDeleted = 'Obele�iva� je upravo obrisan.';
$strBookmarkLabel = 'Naziv';
$strBookmarkQuery = 'Zapam�en SQL-upit';
$strBookmarkReplace = 'Zameni postoje�e zapam�ene upite istog imena';
$strBookmarkThis = 'Zapamti SQL-upit';
$strBookmarkView = 'Vidi samo';
$strBrowseDistinctValues = 'Pregledaj razli�ite vrednosti';
$strBrowseForeignValues = 'Pregledaj strane vrednosti';
$strBrowse = 'Pregled';
$strBufferPoolActivity = 'Aktivnost skupa prihvatnika';
$strBufferPool = 'Skup prihvatnika';
$strBufferPoolUsage = 'Kori��enje skupa prihvatnika';
$strBufferReadMissesInPercent = 'Proma�aji �itanja u %';
$strBufferReadMisses = 'Proma�aji pri �itanju';
$strBufferWriteWaits = '�ekanja na upis';
$strBufferWriteWaitsInPercent = '�ekanja na upis u %';
$strBulgarian = 'Bugarski';
$strBusyPages = 'Zauzete strane';
$strBzError = 'phpMyAdmin nije mogao da kompresuje sadr�aj baze zbog neispravne BZ2 ekstenzije u ovoj verziji PHP-a. Preporu�uje se da podesite <code>$cfg[\'BZipDump\']</code> direktivu u va�oj phpMyAdmin konfiguracionoj datoteci na <code>FALSE</code>. Ako �elite da koristite mogu�nosti BZ2 kompresije, trebalo bi da pre�ete na noviju verziju PHP-a. Vidite PHP izve�taj o gre�kama %s za detalje.';
$strBzip = '"bzip-ovano"';

$strCalendar = 'Kalendar';
$strCancel = 'Otka�i';
$strCanNotLoadExportPlugins = 'Nije mogu�e u�itati dodatke za izvoz, molimo proverite svoju instalaciju!';
$strCanNotLoadImportPlugins = 'Ne mogu da u�itam dodatke za uvoz, molim proverite svoju instalaciju!';
$strCannotLogin = 'Ne mogu da se prijavim na MySQL server';
$strCantLoad = 'ne mogu da u�itam ekstenziju %s,<br />molim proverite PHP konfiguraciju';
$strCantLoadRecodeIconv = 'Ne mogu da u�itam iconv ili recode ekstenzije potrebne za konverziju skupova znakova, podesite PHP da dozvoli kori��enje ovih ekstenzija ili onemogu�ite konverziju skupova znakova u phpMyAdmin-u.';
$strCantRenameIdxToPrimary = 'Ne mogu da promenim klju� u PRIMARY (primarni) !';
$strCantUseRecodeIconv = 'Ne mogu da koristim iconv ili libiconv ili recode_string funkcije iako ekstenzija prijavljuje da je u�itana. Proverite va�u PHP konfiguraciju.';
$strCardinality = 'Kardinalnost';
$strCaseInsensitive = 'Ne razlikuje mala i velika slova';
$strCaseSensitive = 'Razlikuje mala i velika slova';
$strCentralEuropean = 'Centralnoevropski';
$strChangeCopyModeCopy = '... sa�uvaj stare.';
$strChangeCopyModeDeleteAndReload = ' ... obri�i starog iz tabele korisnika i zatim ponovo u�itaj privilegije.';
$strChangeCopyModeJustDelete = ' ... obri�i stare iz tabela korisnika.';
$strChangeCopyMode = 'Napravi novog korisnika sa istim privilegijama i ...';
$strChangeCopyModeRevoke = ' ... obustavi sve privilegije starog korisnika i zatim ga obri�i.';
$strChangeCopyUser = 'Promeni informacije o prijavi / Kopiraj korisnika';
$strChangeDisplay = 'Izaberi polja za prikaz';
$strChangePassword = 'Promeni lozinku';
$strChange = 'Promeni';
$strCharset = 'Karakter set';
$strCharsetOfFile = 'Karakter set datoteke:';
$strCharsetsAndCollations = 'Karakter setovi i sortiranje';
$strCharsets = 'Kodne strane';
$strCheckAll = 'Ozna�i sve';
$strCheckOverhead = 'Proveri tabele koje imaju prekora�enja';
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
$strCompressionWillBeDetected = 'Vrsta kompresije uvezenih datoteka �e biti automatski odabrana: %s';
$strConfigDefaultFileError = 'Ne mogu da u�itam podrazumevanu konfiguraciju iz: "%1$s"';
$strConfigFileError = 'phpMyAdmin nije mogao da pro�ita va�u konfiguracionu datoteku!<br />Ovo se mo�e desiti ako PHP na�e gre�ku u procesiranju ili ne mo�e da prona�e datoteku.<br />Pozovite konfiguracionu datoteku direktno koriste�i donji link i pro�itajte poruke o gre�ci koje dobijate. U ve�ini slu�ajeve negde nedostaje navodnik ili ta�ka-zarez.<br />Ako dobijete praznu stranu, sve je u redu.';
$strConfigureTableCoord = 'Podesite koordinate za tabelu %s';
$strConnectionError = 'Ne mogu da se pove�em: neispravna pode�avanja.';
$strConnections = 'Konekcije';
$strConstraintsForDumped = 'Ograni�enja za izvezene tabele';
$strConstraintsForTable = 'Ograni�enja za tabele';
$strControluserFailed = 'Konekcija za controluser-a, onako kako je definisana u va�oj konfiguraciji, nije uspela.';
$strCookiesRequired = 'Kola�i�i (Cookies) moraju u ovom slu�aju biti aktivni.';
$strCopyDatabaseOK = 'Baza %s je prekopirana u %s';
$strCopy = 'Kopiraj';
$strCopyTable = 'Kopiraj tabelu u (baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je kopirana u %s.';
$strCopyTableSameNames = 'Ne mogu da kopiram tabelu u samu sebe!';
$strCouldNotKill = 'phpMyAdmin nije mogao da prekine proces %s. Verovatno je ve� zatvoren.';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE pre kopiranja';
$strCreateIndex = 'Napravi klju� na&nbsp;%s&nbsp;kolona';
$strCreateIndexTopic = 'Napravi novi klju�';
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
$strCreateUserDatabaseWildcard = 'Daj sve privilegije na imenu sa d�okerima (korisni�ko_ime\_%)';
$strCreationDates = 'Datumi kreiranja/a�uriranja/provere';
$strCriteria = 'Kriterijum';
$strCroatian = 'Hrvatski';
$strCSV = 'CSV';
$strCyrillic = '�irili�ni';
$strCzech = '�e�ki';
$strCzechSlovak = '�e�ko-slova�ki';

$strDanish = 'Danski';
$strDatabase = 'Baza podataka';
$strDatabaseEmpty = 'Ime baze nije zadato!';
$strDatabaseExportOptions = 'Opcije za izvoz baze';
$strDatabaseHasBeenDropped = 'Baza %s je odba�ena.';
$strDatabases = 'Baze';
$strDatabasesDropped = '%s baza je uspe�no odba�eno.';
$strDatabasesStatsDisable = 'Isklju�i statistike';
$strDatabasesStatsEnable = 'Uklju�i statistike';
$strDatabasesStatsHeavyTraffic = 'Napomena: uklju�ivanje statistika mo�e prouzrokovati veliki saobra�aj izme�u veb i MySQL servera.';
$strDatabasesStats = 'Statistika baze';
$strDataDict = 'Re�nik podataka';
$strDataOnly = 'Samo podaci';
$strDataPages = 'Strane sa podacima';
$strData = 'Podaci';
$strDBComment = 'Komentar baze:';
$strDBCopy = 'Kopiraj bazu u';
$strDbIsEmpty = 'Baza je izgleda prazna!';
$strDbPrivileges = 'Privilegije vezane za bazu';
$strDBRename = 'Preimenuj bazu u';
$strDbSpecific = 'Specifi�no za bazu';
$strDefaultEngine = '%s je podrazumevani pogon skladi�tenja na ovom MySQL serveru.';
$strDefault = 'Podrazumevano';
$strDefaultValueHelp = 'Za podrazumevanu vrednost, unesite samo jednu vrednost, bez kosih crta ili navodnika u ovom obliku: a';
$strDefragment = 'Defragmentiraj tabelu';
$strDelayedInserts = 'Koristi odlo�ena umetanja';
$strDeleteAndFlushDescr = 'Ovo je naj�istiji na�in, ali ponovno u�itavanje privilegija mo�e da potraje.';
$strDeleteAndFlush = 'Obri�i korisnike i ponovo u�itaj privilegije.';
$strDeleted = 'Red je obrisan';
$strDeletedRows = 'Obrisani redovi:';
$strDeleteNoUsersSelected = 'Nijedan korisnik nije odabran za brisanje!';
$strDelete = 'Obri�i';
$strDeleteRelation = 'Obri�i relaciju';
$strDeleting = 'Bri�em %s';
$strDelimiter = 'Grani�nik';
$strDelOld = 'Trenutna strana ima reference na tabele koje vi�e ne postoje. �elite li da obri�ete te reference?';
$strDescending = 'Opadaju�i';
$strDescription = 'Opis';
$strDesigner = 'Dizajner';
$strDesignerHelpDisplayField = 'Polje za prikaz je obojeno u ru�i�asto. Da bi postavili/uklonili polje kao polje za prikaz, kliknite na ikonu �Izaberi polje za prikaz�, a potom na naziv odgovaraju�eg polja.';
$strDictionary = 're�nik';
$strDirectLinks = 'Direktne veze';
$strDirtyPages = 'Prljave strane';
$strDisabled = 'Onemogu�eno';
$strDisableForeignChecks = 'Isklju�i provere stranih klju�eva';
$strDisplayFeat = 'Prika�i osobine';
$strDisplayOrder = 'Redosled prikaza:';
$strDisplayPDF = 'Prika�i PDF shemu';
$strDoAQuery = 'Napravi "upit po primeru" (d�oker: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Da li stvarno ho�ete da ';
$strDropDatabaseStrongWarning = 'Ovim �ete UNI�TITI kompletnu bazu podataka!';
$strDrop = 'Odbaci';
$strDropUsersDb = 'Odbaci baze koje se zovu isto kao korisnici.';
$strDumpingData = 'Prikaz podataka tabele';
$strDumpSaved = 'Sadr�aj baze je sa�uvan u datoteku %s.';
$strDumpXRows = 'Prika�i %s redova po�ev�i od reda %s.';
$strDynamic = 'dinami�ki';

$strEditPDFPages = 'Ure�ivanje PDF strana';
$strEditPrivileges = 'Promeni privilegije';
$strEdit = 'Promeni';
$strEffective = 'Efektivne';
$strEmpty = 'Isprazni';
$strEmptyResultSet = 'MySQL je vratio prazan rezultat (nula redova).';
$strEnabled = 'Omogu�eno';
$strEncloseInTransaction = 'Obavi izvoz u transakciji';
$strEndCut = 'KRAJ REZ';
$strEnd = 'Kraj';
$strEndRaw = 'KRAJ SIROVO';
$strEngineAvailable = '%s je dostupan na ovom MySQL serveru.';
$strEngineDisabled = '%s je onemogu�en na ovom MySQL serveru.';
$strEngines = 'Skladi�tenja';
$strEngineUnsupported = 'Ovaj MySQL server ne podr�ava %s pogon skladi�tenja.';
$strEnglish = 'Engleski';
$strEnglishPrivileges = ' Napomena: MySQL imena privilegija moraju da budu na engleskom ';
$strError = 'Gre�ka';
$strErrorInZipFile = 'Gre�ka u ZIP arhivi:';
$strErrorRelationAdded = 'Gre�ka: relacija nije dodata.';
$strErrorRelationExists = 'Gre�ka: relacija ve� postoji.';
$strErrorRenamingTable = 'Gre�ka pri preimenovanju tabele %1$s u %2$s';
$strErrorSaveTable = 'Gre�ka pri snimanju koordinata za Dizajner.';
$strEscapeWildcards = 'Pre d�okera _ i % treba staviti znak \ ako ih koristite samostalno';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonski';
$strEvent = 'Doga�aji';
$strExcelEdition = 'Excel izdanje';
$strExecuteBookmarked = 'Izvr�i upam�en upit';
$strExplain = 'Objasni SQL';
$strExportImportToScale = 'Izvor/uvoz u razmeri';
$strExport = 'Izvoz';
$strExportMustBeFile = 'Odabrani tip izvoza mora biti sa�uvan u datoteku!';
$strExtendedInserts = 'Pro�ireni INSERT';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspelih poku�aja';
$strFieldHasBeenDropped = 'Polje %s je obrisano';
$strFieldInsertFromFileTempDirNotExists = 'Gre�ka u preme�tanju primljene datoteke, pogledajte FAQ 1.11';
$strField = 'Polje';
$strFieldsEnclosedBy = 'Polja ograni�ena sa';
$strFieldsEscapedBy = 'Escape karakter &nbsp; &nbsp; &nbsp;';
$strFields = 'Polja';
$strFieldsTerminatedBy = 'Polja razdvojena sa';
$strFileAlreadyExists = 'Datoteka %s ve� postoji na serveru, promenite ime datoteke ili uklju�ite opciju prepisivanja.';
$strFileCouldNotBeRead = 'Datoteku nije mogu�e pro�itati';
$strFileNameTemplate = '�ablon imena datoteke';
$strFileNameTemplateDescriptionDatabase = 'naziv baze';
$strFileNameTemplateDescription = 'Ova vrednost se tuma�i kori��enjem %1$sstrftime%2$s, tako da mo�ete da koristite stringove za formatiranje vremena. Tako�e �e se desiti i slede�e transformacije: %3$s. Preostali tekst �e ostati kako jeste.';
$strFileNameTemplateDescriptionServer = 'naziv servera';
$strFileNameTemplateDescriptionTable = 'naziv tabele';
$strFileNameTemplateRemember = 'zapamti �ablon';
$strFiles = 'Datoteke';
$strFileToImport = 'Datoteka za uvoz';
$strFixed = 'sre�eno';
$strFlushPrivilegesNote = 'Napomena: phpMyAdmin uzima privilegije korisnika direktno iz MySQL tabela privilegija. Sadr�aj ove tabele mo�e se razlikovati od privilegija koje server koristi ako su vr�ene ru�ne izmene. U tom slu�aju %sponovo u�itajte privilegije%s pre nego �to nastavite.';
$strFlushQueryCache = 'O�isti ke� upita';
$strFlushTable = 'Osve�i tabelu ("FLUSH")';
$strFlushTables = 'O�isti (zatvori) sve tabele';
$strFontSize = 'Veli�ina fonta';
$strForeignKeyError = 'Gre�ka u kreiranju stranog klju�a (proverite tipove podataka)';
$strFormat = 'Format';
$strFormEmpty = 'Nedostaje vrednost u obrascu!';
$strFreePages = 'Slobodne strane';
$strFullText = 'Pun tekst';
$strFunction = 'Funkcija';
$strFunctions = 'Funkcije';

$strGenBy = 'Generisao';
$strGeneralRelationFeat = 'Op�te osobine relacija';
$strGenerate = 'Napravi';
$strGeneratePassword = 'Napravi lozinku';
$strGenTime = 'Vreme kreiranja';
$strGeorgian = 'Gruzijski';
$strGerman = 'Nema�ki';
$strGlobal = 'globalno';
$strGlobalPrivileges = 'Globalne privilegije';
$strGlobalValue = 'Globalna vrednost';
$strGo = 'Kreni';
$strGrantOption = 'Omogu�i';
$strGreek = 'Gr�ki';
$strGzip = '"gzip-ovano"';

$strHandler = 'Rukovalac';
$strHasBeenAltered = 'je promenjen(a).';
$strHasBeenCreated = 'je kreiran(a).';
$strHaveToShow = 'Morate izabrati bar jednu kolonu za prikaz';
$strHebrew = 'Hebrejski';
$strHelp = 'Pomo�';
$strHexForBLOB = 'Koristi heksadecimalno za BLOB';
$strHide         = 'Sakrij';
$strHideShowAll = 'Sakrij/prika�i sve';
$strHideShowNoRelation = 'Sakrij/prika�i tabele bez relacija';
$strHomepageOfficial = 'phpMyAdmin veb sajt';
$strHome = 'Po�etna strana';
$strHost = 'Doma�in';
$strHostEmpty = 'Ime doma�ina je prazno!';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ma�arski';

$strIcelandic = 'Islandski';
$strId = 'ID';
$strIdxFulltext = 'Tekst klju�';
$strIEUnsupported = 'Internet Explorer ne podr�ava ovu funkciju.';
$strIgnoreDuplicates = 'Ignori�i duplicirane redove';
$strIgnore = 'Ignori�i';
$strIgnoreInserts = 'Ignori�i duplikate pri umetanju';
$strImportExportCoords = 'Izvoz/uvoz koordinata za PDF shemu';
$strImportFiles = 'Uvoz datoteka';
$strImportFormat = 'Format datoteka za uvoz';
$strImportSuccessfullyFinished = 'Uvoz je uspe�no zavr�en, izvr�eno je %d upita.';
$strImport = 'Uvoz';
$strIndexes = 'Klju�evi';
$strIndexesSeemEqual = 'Slede�i indeksi su verovatno jednaki, i jedan od njih treba ukloniti:';
$strIndexHasBeenDropped = 'Klju� %s je obrisan';
$strIndex = 'Klju�';
$strIndexName = 'Ime klju�a :';
$strIndexType = 'Tip klju�a :';
$strIndexWarningTable = 'Problem pri indeksiranju tabele `%s`';
$strInnoDBAutoextendIncrementDesc = ' Veli�ina koraka pro�irenja veli�ine tabela koje se automatski pro�iruju kada se napune.';
$strInnoDBAutoextendIncrement = 'Korak automatskog pro�irenja';
$strInnoDBBufferPoolSizeDesc = 'Veli�ina memorijskog prihvatnika koje InnoDB koristi za ke�iranje podataka i indeksa svojih tabela.';
$strInnoDBBufferPoolSize = 'Veli�ina prihvatnika';
$strInnoDBDataFilePath = 'Datoteke sa podacima';
$strInnoDBDataHomeDirDesc = 'Zajedni�ki deo putanje direktorijuma za sve InnoDB datoteke sa podacima.';
$strInnoDBDataHomeDir = 'Osnovni direktorijum podataka';
$strInnoDBPages = 'strana';
$strInnoDBRelationAdded = 'Dodata InnoDB relacija';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Va�a konfiguraciona datoteka sadr�i pode�avanja (root bez lozinke) koja odgovaraju standardnom MySQL privilegovanom nalogu. Va� MySQL server radi sa ovim pode�avanjima, otvoren je za upade, i zaista treba da ispravite ovaj sigurnosni rizik.';
$strInsertAsNewRow = 'Unesi kao novi red';
$strInsertedRowId = 'ID umetnutih redova:';
$strInsertedRows = 'Uneseno redova:';
$strInsert = 'Novi zapis';
$strInternalNotNecessary = '* Unutra�nja relacija nije neophodna kada postoji i u InnoDB.';
$strInternalRelationAdded = 'Dodata interna relacija';
$strInternalRelations = 'Unutra�nje relacije';
$strInUse = 'se koristi';
$strInvalidAuthMethod = 'Neispravan metod autentikacije je zadat u konfiguraciji:';
$strInvalidColumnCount = 'Broj kolona mora biti ve�i od nule.';
$strInvalidColumn = 'Zadata je neispravna kolona (%s)!';
$strInvalidCSVFieldCount = 'Neispravan broj polja u CSV ulazu na liniji  %d.';
$strInvalidCSVFormat = 'Neispravan format CSV ulaza na liniji %d.';
$strInvalidCSVParameter = 'Neispravni parametri za CSV uvoz: %s';
$strInvalidDatabase = 'Neispravna baza podataka';
$strInvalidFieldAddCount = 'Morate dodati barem jedno polje.';
$strInvalidFieldCount = 'Tabela mora imati barem jedno polje.';
$strInvalidLDIImport = 'Ovaj dodatak ne podr�ava kompresovane uvoze!';
$strInvalidRowNumber = '%d nije ispravan broj reda.';
$strInvalidServerHostname = 'Neispravan naziv servera %1$s. Molimo proverite svoju konfiguraciju.';
$strInvalidServerIndex = 'Neispravan indeks servera: "%s"';
$strInvalidTableName = 'Neispravan naziv tabele';

$strJapanese = 'Japanski';
$strJoins = 'Spojevi';
$strJumpToDB = 'Pre�i na bazu &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Obrisani&quot; korisnici �e i dalje imati pristup serveru dok privilegije ne budu ponovo u�itane.';
$strJustDelete = 'Samo obri�i korisnike iz tabele privilegija.';

$strKeepPass = 'Nemoj da menja� lozinku';
$strKeyCache = 'Ke� klju�eva';
$strKeyname = 'Ime klju�a';
$strKill = 'Obustavi';
$strKnownExternalBug = 'Ova funkcionalnost %s je pogo�ena poznatom gre�kom, vidite %s';
$strKorean = 'Korejski';

$strLandscape = 'Polo�eno';
$strLanguage = 'Jezik';
$strLanguageUnknown = 'Nepoznat jezik: %1$s.';
$strLatchedPages = 'Zabravljene strane';
$strLatexCaption = 'Komentar tabele';
$strLatexContent = 'Sadr�aj tabele __TABLE__';
$strLatexContinuedCaption = 'Nastavljen komentar tabele';
$strLatexContinued = '(nastavljeno)';
$strLatexIncludeCaption = 'Uklju�i komentar tabele';
$strLatexLabel = 'Oznaka klju�a';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struktura tabele __TABLE__';
$strLatvian = 'Letonski';
$strLDI = 'CSV koriste�i LOAD DATA';
$strLDILocal = 'Koristi klju�nu re� LOCAL';
$strLengthSet = 'Du�ina/Vrednost*';
$strLimitNumRows = 'Broj redova po strani';
$strLinesTerminatedBy = 'Linije se zavr�avaju sa';
$strLinkNotFound = 'Veza nije prona�ena';
$strLinksTo = 'Veze ka';
$strLithuanian = 'Litvanski';
$strLocalhost = 'Lokalni';
$strLocationTextfile = 'Lokacija tekstualne datoteke';
$strLoginInformation = 'Podaci o prijavi';
$strLogin = 'Prijavljivanje';
$strLogout = 'Odjavljivanje';
$strLogPassword = 'Lozinka:';
$strLogServer = 'Server';
$strLogUsername = 'Korisni�ko ime:';
$strLongOperation = 'Ova operacija mo�e da potraje. Da li da nastavimo?';

$strMaxConnects = 'maks. istovremenih veza';
$strMaximalQueryLength = 'Maksimalna du�ina napravljenog upita';
$strMaximumSize = 'Maksimalna veli�ina: %s%s';
$strMbExtensionMissing = 'PHP ekstenzija mbstring nije prona�ena, a �ini se da vi koristite vi�ebajtni skup znakova. Bez ekstenzije mbstring phpMyAdmin ne mo�e ispravno da razdvaja stringove i to mo�e dovesti do neo�ekivanih rezultata.';
$strMbOverloadWarning = 'U PHP pode�avanjima Vam je uklju�ena mbstring.func_overload opcija. Ova opcija je nekompatibilna sa phpMyAdmin i mo�e dovesti do gre�aka u nekim podacima!';
$strMIME_available_mime = 'Dostupni MIME-tipovi';
$strMIME_available_transform = 'Dostupne transformacije';
$strMIME_description = 'Opis';
$strMIME_MIMEtype = 'MIME-tipovi';
$strMIME_nodescription = 'Nema opisa za ovu transformaciju.<br />Molimo pitajte autora �ta %s radi.';
$strMIME_transformation_note = 'Za listu dostupnih opcija transformacije i njihove transformacije MIME-tipova, kliknite na %sopise transformacija%s';
$strMIME_transformation_options_note = 'Molimo unesite vrednosti za opcije transformacije koriste�i ovaj oblik: \'a\', 100, b,\'c\'...<br />Ako treba da unesete obrnutu kosu crtu ("\\") ili apostrof ("\'") u te vrednosti, stavite obrnutu kosu crtu ispred njih (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strMIME_transformation_options = 'Opcije transformacije';
$strMIME_transformation = 'Tranformacije �ita�a';
$strMIMETypesForTable = 'MIME TIPOVI ZA TABELU';
$strMIME_without = 'MIME-tipovi prikazani u kurzivu nemaju odvojene funkcije transformacije.';
$strModifications = 'Izmene su sa�uvane';
$strModifyIndexTopic = 'Izmeni klju�';
$strModify = 'Promeni';
$strMoveMenu = 'Premesti meni';
$strMoveTableOK = 'Tabela %s je pomerena u %s.';
$strMoveTable = 'Pomeri tabelu u (baza<b>.</b>tabela):';
$strMoveTableSameNames = 'Ne mogu da premestim tabelu u samu sebe!';
$strMultilingual = 'vi�ejezi�ki';
$strMyISAMDataPointerSizeDesc = 'Podrazumevana veli�ina pokaziva�a u bajtovima, koristi se pri CREATE TABLE za MyISAM tabele kada nije zadata opcija MAX_ROWS';
$strMyISAMDataPointerSize = 'Veli�ina pokaziva�a podataka';
$strMyISAMMaxExtraSortFileSizeDesc = 'Ako bi privremena datoteka koja se koristi za brzo kreiranje MyISAM indeksa bila ve�a nego pri kori��enju ke�a klju�eva za ovde zadatu vrednost, koristi metod ke�iranja klju�eva';
$strMyISAMMaxExtraSortFileSize = 'Maksimalna veli�ina privremenih datoteka pri kreiranju indeksa';
$strMyISAMMaxSortFileSizeDesc = 'Maksimalna veli�ina privremenih datoteka koje MySQL sme da koristi pri re-kreiranju MyISAM indeksa (u toku REPAIR TABLE, ALTER TABLE, ili LOAD DATA INFILE operacija).';
$strMyISAMMaxSortFileSize = 'Maksimalna veli�ina privremenih datoteka za sortiranje';
$strMyISAMRecoverOptionsDesc = 'Re�im automatskog oporavka puknutih MyISAM tabela, pode�en pri startovanju servera opcijom --myisam-recover.';
$strMyISAMRecoverOptions = 'Re�im automatskog oporavka';
$strMyISAMRepairThreadsDesc = 'Ako je vrednost ve�a od 1, indeksi MyISAM tabela se paralelno kreiraju (svaki indeks u sopstvenoj niti) za vreme procesa popravke sortiranjem.';
$strMyISAMRepairThreads = 'Niti popravke';
$strMyISAMSortBufferSizeDesc = 'Prihvatnik koji se alocira pri sortiranju MyISAM indeksa za vreme operacije REPAIR TABLE ili pri kreiranju indeksa sa CREATE INDEX ili ALTER TABLE.';
$strMyISAMSortBufferSize = 'Veli�ina prihvatnika za sortiranje';
$strMySQLCharset = 'MySQL set karaktera';
$strMysqlClientVersion = 'Verzija MySQL klijenta';
$strMySQLConnectionCollation = 'Sortiranje za MySQL vezu';
$strMysqlLibDiffersServerVersion = 'Verzija va�e PHP MySQL biblioteke %s se razlikuje od verzije va�eg MySQL servera %s. Ovo mo�e dovesti do nepredvidljivog pona�anja.';
$strMySQLSaid = 'MySQL re�e: ';
$strMySQLShowProcess = 'Prika�i listu procesa';
$strMySQLShowStatus = 'Prika�i MySQL informacije o toku rada';
$strMySQLShowVars = 'Prika�i MySQL sistemske promenljive';

$strName = 'Ime';
$strNext = 'Slede�i';
$strNoActivity = 'Nije bilo aktivnosti %s ili vi�e sekundi, molimo prijavite se ponovo';
$strNoDatabases = 'Baza ne postoji';
$strNoDatabasesSelected = 'Nije izabrana ni jedna baza.';
$strNoDataReceived = 'Nisu primljeni nikavi podaci za uvoz. Ili nije bio naveden naziv datoteke, ili veli�ina datoteke prevazilazi maksimalnu veli�inu dozvoljenu u va�oj konfiguraciji PHP-a. Pogledajte. See FAQ 1.16.';
$strNoDescription = 'nema opisa';
$strNoDetailsForEngine = 'Nema detaljnijih informacija o statusu za ovaj pogon skladi�tenja.';
$strNoDropDatabases = '"DROP DATABASE" komanda je onemogu�ena.';
$strNoExplain = 'Presko�i obja�njavanje SQL-a';
$strNoFilesFoundInZip = 'U ZIP arhivi nema datoteka!';
$strNoFrames = 'phpMyAdmin preferira �ita�e koji podr�avaju okvire.';
$strNoIndex = 'Klju� nije definisan!';
$strNoIndexPartsDefined = 'Delovi klju�a nisu definisani!';
$strNoModification = 'Nema izmena';
$strNo = 'Ne';
$strNone = 'nema';
$strNoOptions = 'Ne postoje opcije za ovaj format';
$strNoPassword = 'Nema lozinke';
$strNoPermission = 'Veb serveru nije dozvoljeno da sa�uva datoteku %s.';
$strNoPhp = 'bez PHP koda';
$strNoPrivileges = 'Nema privilegija';
$strNoRights = 'Nije Vam dozvoljeno da budete ovde!';
$strNoRowsSelected = 'Nema odabranih redova';
$strNoSpace = 'Nedovoljno prostora za snimanje datoteke %s.';
$strNoTablesFound = 'Tabele nisu prona�ene u bazi.';
$strNoThemeSupport = 'Nema podr�ke za teme, molimo proverite konfiguraciju i/ili teme u direktorijumu %s.';
$strNotNumber = 'Ovo nije broj!';
$strNotOK = 'nije u redu';
$strNotSet = '<b>%s</b> tabela nije prona�ena ili nije postavljena u %s';
$strNoUsersFound = 'Korisnik nije na�en.';
$strNoValidateSQL = 'Presko�i proveru SQL-a';
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
$strOverhead = 'Prekora�enje';
$strOverwriteExisting = 'Prepi�i postoje�e datoteke';

$strPageNumber = 'Broj strane:';
$strPagesToBeFlushed = 'Strane koje treba da budu uskla�ene';
$strPaperSize = 'Dimenzije papira';
$strPartialImport = 'Delimi�ni uvoz';
$strPartialText = 'Deo teksta';
$strPasswordChanged = 'Lozinka za %s je uspe�no promenjena.';
$strPasswordEmpty = 'Lozinka je prazna!';
$strPasswordHashing = 'He�iranje lozinke';
$strPassword = 'Lozinka';
$strPasswordNotSame = 'Lozinke nisu identi�ne!';
$strPdfDbSchema = 'Shema baze "%s" - Strana %s';
$strPdfInvalidTblName = 'Tabela "%s" ne postoji!';
$strPdfNoTables = 'Nema tabela';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Pravi izve�taj koji sadr�i podatke jedne tabele)';
$strPDFReportTitle = 'Naslov izve�taja';
$strPerHour = 'na sat';
$strPerMinute = 'u minutu';
$strPerSecond = 'u sekundi';
$strPersian = 'Persijski';
$strPhoneBook = 'telefonski imenik';
$strPHP40203 = 'Koristite PHP 4.2.3, koji ima ozbiljan bag sa vi�ebajtnim stringovima (mbstring). Pogledajte izve�taj o gre�ci br. 19404. Nije preporu�ljivo kori��enje ove verzije PHP-a uz phpMyAdmin.';
$strPhp = 'Napravi PHP kod';
$strPHPVersion = 'verzija PHP-a';
$strPleaseSelectPrimaryOrUniqueKey = 'Molimo izaberite primarni ili jedinstveni klju�';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktiva MORA biti pode�ena u konfiguracionoj datoteci!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Poljski';
$strPortrait = 'Uspravno';
$strPos1 = 'Po�etak';
$strPrevious = 'Prethodna';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je obrisan';
$strPrimaryKeyName = 'Ime primarnog klju�a mora da bude... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnog klju�a!)';
$strPrimary = 'Primarni';
$strPrint = '�tampaj';
$strPrintViewFull = 'Pogled za �tampu (sa punim tekstom)';
$strPrintView = 'Za �tampu';
$strPrivDescAllPrivileges = 'Uklju�uje sve privilegije osim GRANT.';
$strPrivDescAlter = 'Dozvoljava izmenu struktura postoje�ih tabela.';
$strPrivDescAlterRoutine = 'Dozvoljava izmenu i odbacivanje sa�uvanih rutina.';
$strPrivDescCreateDb = 'Dozvoljava kreiranje novih baza i tabela.';
$strPrivDescCreateRoutine = 'Dozvoljava pravljenje sa�uvanih rutina.';
$strPrivDescCreateTbl = 'Dozvoljava kreiranje novih tabela.';
$strPrivDescCreateTmpTable = 'Dozvoljava kreiranje privremenih tabela..';
$strPrivDescCreateUser = 'Dozvoljava pravljenje, odbacivanje i preimenovanje korisni�kih naloga.';
$strPrivDescCreateView = 'Dozvoli kreiranje novih pogleda.';
$strPrivDescDelete = 'Dozvoljava brisanje podataka.';
$strPrivDescDropDb = 'Dozvoljava odbacivanje baza i tabela.';
$strPrivDescDropTbl = 'Dozvoljava odbacivanje tabela.';
$strPrivDescExecute5 = 'Dozvoljava izvr�avanje sa�uvanih rutina.';
$strPrivDescExecute = 'Dozvoljava pokretanje sa�uvanih procedura. Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescFile = 'Dozvoljava uvoz podataka i njihov izvoz u datoteke.';
$strPrivDescGrant = 'Dozvoljava dodavanje korisnika i privilegija bez ponovnog u�itavanja tabela privilegija.';
$strPrivDescIndex = 'Dozvoljava kreiranje i brisanje klju�eva.';
$strPrivDescInsert = 'Dozvoljava umetanje i zamenu podataka.';
$strPrivDescLockTables = 'Dozvoljava zaklju�avanje tabela teku�im procesima.';
$strPrivDescMaxConnections = 'Ograni�ava broj novih konekcija koje korisnik mo�e ta otvori na sat.';
$strPrivDescMaxQuestions = 'Ograni�ava broj upita koje korisnik mo�e da uputi serveru za sat.';
$strPrivDescMaxUpdates = 'Ograni�ava broj komandi koje menjaju tabele ili baze koje korisnik mo�e da izvr�i na sat.';
$strPrivDescMaxUserConnections = 'Ograni�ava broj istovremenih konekcija koje korisnik mo�e da ima.';
$strPrivDescProcess3 = 'Dozvoljava prekidanje procesa drugih korisnika.';
$strPrivDescProcess4 = 'Dozvoljava pregled kompletnih upita u listi procesa.';
$strPrivDescReferences = 'Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescReload = 'Dozvoljava ponovno u�itavanje pode�avanja servera i pra�njenje ke�a servera.';
$strPrivDescReplClient = 'Daje pravo korisniku da pita gde su glavni/pomo�ni serveri.';
$strPrivDescReplSlave = 'Potrebno zbog pomo�nih servera za replikaciju.';
$strPrivDescSelect = 'Dozvoljava �itanje podataka.';
$strPrivDescShowDb = 'Daje pristup kompletnoj listi baza.';
$strPrivDescShowView = 'Dozvoljava izvr�avanje SHOW CREATE VIEW upita.';
$strPrivDescShutdown = 'Dozvoljava ga�enje servera.';
$strPrivDescSuper = ' Dozvoljava povezivanje iako je dostignut maksimalan broj dozvoljenih veza; Neophodno za ve�inu administrativnih opcija kao �to su pode�avanje globalnih promenljivih ili prekidanje procesa ostalih korisnika.';
$strPrivDescUpdate = 'Dozvoljava izmenu podataka.';
$strPrivDescUsage = 'Nema privilegija.';
$strPrivileges = 'Privilegije';
$strPrivilegesReloaded = 'Privilegije su uspe�no ponovo u�itane.';
$strProcedures = 'Procedure';
$strProcesses = 'Procesi';
$strProcesslist = 'Lista procesa';
$strProfiling = 'Profilisanje';
$strProtocolVersion = 'Verzija protokola';
$strPutColNames = 'Stavi imena polja u prvi red';

$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQBE = 'Upit po primeru';
$strQueryCache = 'Ke� upita';
$strQueryFrame = 'Prozor za upite';
$strQueryOnDb = 'SQL upit na bazi <b>%s</b>:';
$strQueryResultsOperations = 'Operacije na rezultatima upita';
$strQuerySQLHistory = 'SQL istorijat';
$strQueryStatistics = '<b>Statistike upita</b>: %s upita je postavljeno serveru od njegovog pokretanja.';
$strQueryTime = 'Upit je trajao %01.4f sekundi';
$strQueryType = 'Vrsta upita';
$strQueryWindowLock = 'Ne prepisuj ovaj upit izvan prozora';

$strReadRequests = 'Zahtevi za �itanje';
$strReceived = 'Primljeno';
$strRecommended = 'preporu�eno';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Proveri referencijalni integritet:';
$strRefresh = 'Osve�i';
$strRelationalSchema = 'Relaciona shema';
$strRelationDeleted = 'Relacija obrisana';
$strRelationNotWorking = 'Dodatne mogu�nosti za rad sa povezanim tabelama su isklju�ene. Da biste saznali za�to, kliknite %sovde%s.';
$strRelationsForTable = 'RELACIJE TABELE';
$strRelations = 'Relacije';
$strRelationView = 'Relacioni pogled';
$strReloadingThePrivileges = 'Ponovo u�itavam privilegije';
$strReload = 'Ponovo u�itaj';
$strReloadPrivileges = 'Ponovo u�itaj privilegije';
$strRemoveSelectedUsers = 'Ukloni izabrane korisnike';
$strRenameDatabaseOK = 'Baza %s je preimenovana u %s';
$strRenameTableOK = 'Tabeli %s promenjeno ime u %s';
$strRenameTable = 'Promeni ime tabele u ';
$strRepairTable = 'Popravi tabelu';
$strReplaceNULLBy = 'Zameni NULL sa';
$strReplaceTable = 'Zameni podatke u tabeli sa podacima iz datoteke';
$strReplication = 'Replikacija';
$strReset = 'Poni�ti';
$strResourceLimits = 'Ograni�enja resursa';
$strRestartInsertion = 'Ponovo pokreni uno�enje sa %s redova';
$strReType = 'Ponovite unos';
$strRevokeAndDeleteDescr = 'Korisnici �e i dalje imati USAGE privilegije dok se privilegije ponovo ne u�itaju.';
$strRevokeAndDelete = 'Obustavi sve aktivne privilegije korisnika i zatim ih obri�i.';
$strRevokeMessage = 'Zabranili ste privilegije za %s';
$strRevoke = 'Zabrani';
$strRomanian = 'Rumunski';
$strRoutineReturnType = 'Povratni tip';
$strRoutines = 'Rutine';
$strRowLength = 'Du�ina reda';
$strRowsFrom = ' redova po�ev od reda';
$strRowSize = 'Veli�ina reda';
$strRowsModeFlippedHorizontal = 'horizontalnom (rotirana zaglavlja)';
$strRowsModeHorizontal = 'horizontalnom';
$strRowsModeOptions = 'u %s modu i ponovi zaglavlje posle svakog %s reda';
$strRowsModeVertical = 'vertikalnom';
$strRows = 'Redova';
$strRowsStatistic = 'Statistike reda';
$strRunning = 'na serveru %s';
$strRunQuery = 'Izvr�i SQL upit';
$strRunSQLQuery = 'Izvr�i SQL upit(e) na bazi %s';
$strRunSQLQueryOnServer = 'Izvr�i SQL upit(e) na serveru %s';
$strRussian = 'Ruski';

$strSaveOnServer = 'Sa�uvaj na server u direktorijum %s';
$strSavePosition = 'Sa�uvaj poziciju';
$strSave = 'Sa�uvaj';
$strScaleFactorSmall = 'Faktor umanjenja je premali da bi shema stala na jednu stranu';
$strSearchFormTitle = 'Pretra�ivanje baze';
$strSearchInTables = 'Unutar tabela:';
$strSearchNeedle = 'Re�i ili vrednosti koje se tra�e (d�oker: "%"):';
$strSearchOption1 = 'bar jednu od re�i';
$strSearchOption2 = 'sve re�i';
$strSearchOption3 = 'ta�an izraz';
$strSearchOption4 = 'kao regularni izraz';
$strSearch = 'Pretra�ivanje';
$strSearchResultsFor = 'Rezultati pretrage za "<i>%s</i>" %s:';
$strSearchType = 'Tra�i:';
$strSecretRequired = 'Konfiguraciona datoteka zahteva tajnu lozinku (blowfish_secret).';
$strSelectADb = 'Izaberite bazu';
$strSelectAll = 'Izaberi sve';
$strSelectBinaryLog = 'Izaberite binarni dnevnik za pregled';
$strSelectFields = 'Izaberi polja (najmanje jedno)';
$strSelectForeignKey = 'Izaberi strani klju�';
$strSelectNumRows = 'u upitu';
$strSelectReferencedKey = 'Izaberite referencirani klju�';
$strSelectTables = 'Izaberi tabele';
$strSend = 'Sa�uvaj kao datoteku';
$strSent = 'Poslato';
$strServerChoice = 'Izbor servera';
$strServerNotResponding = 'Server ne odgovara';
$strServer = 'Server';
$strServers = 'Serveri';
$strServerStatusDelayedInserts = 'Odlo�ena umetanja';
$strServerStatus = 'Informacije o toku rada';
$strServerStatusUptime = 'Ovaj MySQL server radi ve� %s. Pokrenut je %s.';
$strServerTabVariables = 'Promenljive';
$strServerTrafficNotes = '<b>Saobra�aj servera</b>: Tabele pokazuju statistike mre�nog saobra�aja na ovom MySQL serveru od njegovog pokretanja.';
$strServerVars = 'Serverske promenljive i pode�avanja';
$strServerVersion = 'Verzija servera';
$strSessionStartupErrorGeneral = 'Ne mogu da pokrenem sesiju bez gre�aka, molim proverite gre�ke u PHP i/ili dnevniku veb servera i propisno podesite va�u PHP instalaciju.';
$strSessionValue = 'Vrednost sesije';
$strSetEnumVal = 'Ako je polje "enum" ili "set", unesite vrednosti u formatu: \'a\',\'b\',\'c\'...<br />Ako vam treba obrnuta kosa crta ("\\") ili apostrof ("\'") koristite ih u "izbegnutom" (escaped) obliku (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strShowAll = 'Prika�i sve';
$strShowColor = 'Prika�i boju';
$strShowDatadictAs = 'Format re�nika podataka';
$strShowFullQueries = 'Prika�i kompletne upite';
$strShowGrid = 'Prika�i mre�u';
$strShowHideLeftMenu = 'Prika�i/sakrij meni s leve strane';
$strShowingBookmark = 'Prikazivanje markera';
$strShowingPhp = 'Prikaz kao PHP kod';
$strShowingRecords = 'Prikaz zapisa';
$strShowingSQL = 'Prikaz kao SQL upit';
$strShowOpenTables = 'Prika�i otvorene tabele';
$strShowPHPInfo = 'Prika�i informacije o PHP-u';
$strShow = 'Prika�i';
$strShowSlaveHosts = 'Prika�i podre�ene server';
$strShowSlaveStatus = 'Prika�i status podre�enih servera';
$strShowStatusBinlog_cache_disk_useDescr = 'Broj tranksakcija koje su koristile ke� privremenog binarnog dnevnika ali su prevazi�le vrednost u binlog_cache_size i koristile privremenu datoteku da smeste izraze iz transakcije.';
$strShowStatusBinlog_cache_useDescr = 'Broj transakcija koje su koristile ke� privremenog binarnog dnevnika.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Broj privremenih tabela koje je server automatski kreirao na disku dok je izvr�avao izraze. Ako je Created_tmp_disk_tables veliko, mo�da treba da pove�ate vrednost tmp_table_size kako bi u�inili da privremene tabele budu bazirane u memoriji umesto na disku.';
$strShowStatusCreated_tmp_filesDescr = 'Koliko privremenih datoteka je mysqld napravio.';
$strShowStatusCreated_tmp_tablesDescr = 'Broj privremenih tabela koje je server automatski kreirao u memoriji dok je izvr�avao izraze.';
$strShowStatusDelayed_errorsDescr = 'Broj redova upisanih sa INSERT DELAYED za koje je javljena neka gre�ka (verovatno duplirani klju�).';
$strShowStatusDelayed_insert_threadsDescr = 'Broj INSERT DELAYED rukovala�kih niti u upotrebi. Svaka posebna tabela nad kojom se koristi INSERT DELAYED dobija svoju nit.';
$strShowStatusDelayed_writesDescr = 'Broj upisanih INSERT DELAYED redova.';
$strShowStatusFlush_commandsDescr  = 'Broj izvr�enih FLUSH izraza.';
$strShowStatusHandler_commitDescr = 'Broj internih COMMIT izraza.';
$strShowStatusHandler_deleteDescr = 'Broj brisanja nekog reda tabele.';
$strShowStatusHandler_discoverDescr = 'MySQL server mo�e da upita pogon skladi�tenja NDB Cluster da li zna za tabelu odre�enog imena. To se naziva otkrivanjem (discovery). Handler_discover ozna�ava broj puta kada je otkrivena tabela.';
$strShowStatusHandler_read_firstDescr = 'Broj puta kada je prva stavka pro�itana iz indeksa. Ako je ovo visoko, to mo�e zna�iti da server radi puno punih skeniranja indeksa; na primer SELECT kol1 FROM ne�to, pod pretpostavkom da je kol1 indeksirano.';
$strShowStatusHandler_read_keyDescr = 'Broj zahteva za �itanje reda zasnovanih na klju�u. Ako je ovaj broj visok, to je dobar pokazatelj da su va�i upiti i tabele propisno indeksirani.';
$strShowStatusHandler_read_nextDescr = 'Broj zahteva za �itanjem slede�eg reda u poretku klju�eva. Ovo se pove�ava kada radite upit po koloni indeksa sa ograni�enjem opsega ili ako radite skeniranje indeksa.';
$strShowStatusHandler_read_prevDescr = 'Broj zahteva za �itanjem prethodnog reda u poretku klju�eva. Ova metoda �itanja se uglavnom koristi za optimizaciju ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Broj zahteva za �itanje reda zasnovanih na fiksnoj poziciji. Ovo je visoko ako radite mnogo upita koji zahtevaju sortiranje rezultata. Verovatno imate mnogo upita koji zahtevaju da MySQL skenira cele tabele ili imate spojeve koji ne koriste klju�eve propisno.';
$strShowStatusHandler_read_rnd_nextDescr = 'Broj zahteva za �itanjem slede�eg reda iz datoteke podataka. Ovo je visoko ako radite puno skeniranja tabela. Ovo obi�no nagove�tava da va�e tabele nisu propisno indeksirane ili da va�i upiti nisu napisani da iskoriste ve� postoje�e indekse.';
$strShowStatusHandler_rollbackDescr = 'Broj internih ROLLBACK izraza.';
$strShowStatusHandler_updateDescr = 'Broj zahteva za a�uriranje reda u tabeli.';
$strShowStatusHandler_writeDescr = 'Broj zahteva za upisivanje reda u tabelu.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Broj strana koje sadr�e podatke (�istih ili prljavih).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Broj strana koje su trenutno prljave.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Broj strana u ostavi bafera za koje je tra�eno da budu o�i��ene.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Broj slobodnih strana.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Broj zabravljenih strana u InnoDB ostavi bafera. Sa ovih strana se trenutno �ita ili se u njih upisuje ili iz nekog drugog razloga ne mogu biti o�i��ene niti uklonjene.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Broj strana koje su zauzete zato �to su odvojene za administrativne potrebe, kao �to su zaklju�avanje redova ili indeks prilagodljivog he�a. Ova vrednost se tako�e mo�e izra�unati i na slede�i na�in Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Puna veli�ina ostave bafera, u stranama.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Broj �nasumi�nih� pred-�itanja koja je InnoDB pokrenuo. Ovo se de�ava kada upit treba da skenira veliki deo tabele ali nasumi�nim redosledom.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Broj sekvencijalnih pred-�itanja koja je InnoDB pokrenuo. Ovo se de�ava kada InnoDB radi sekvencijalno skeniranje cele tabele.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Broj logi�kih zahteva za �itanje koje je InnoDB uradio.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Broj logi�kih �itanja koja InnoDB nije mogao da zadovolji iz ostave bafera te je morao da radi �itanje pojedina�ne strane.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalno se upisi u InnoDB ostavu bafera de�avaju u pozadini. Me�utim, ako je neophodno pro�itati ili napraviti stranu a nema dostupnih �istih strana, neophodno je sa�ekati da se strane prethodno o�iste. Ovaj broja� broji de�avanja ovih �ekanja. Ako je veli�ina ostave bafera postavljena kako treba, ova vrednost vi trebalo da je niska.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Broj upisa u�injenih u InnoDB ostavu bafera.';
$strShowStatusInnodb_data_fsyncsDescr = 'Broj fsync() operacija do sada.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Trenutni broj fsync() operacija na �ekanju.';
$strShowStatusInnodb_data_pending_readsDescr = 'Trenutni broj �itanja na �ekanju.';
$strShowStatusInnodb_data_pending_writesDescr = 'Trenutni broj upisa na �ekanju.';
$strShowStatusInnodb_data_readDescr = 'Koli�ina podataka pro�itanih do sada, u bajtovima.';
$strShowStatusInnodb_data_readsDescr = 'Ukupan broj �itanja podataka.';
$strShowStatusInnodb_data_writesDescr = 'Ukupan broj upisa podataka.';
$strShowStatusInnodb_data_writtenDescr = 'Koli�ina podataka upisanih do sada, u bajtovima';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Broj izvr�enih dvoupisnih (doublewrite) upisa i broj strana koje su upisane u ovu svrhu.';
$strShowStatusInnodb_dblwr_writesDescr = 'Broj izvr�enih dvoupisnih (doublewrite) upisa i broj strana koje su upisane u ovu svrhu.';
$strShowStatusInnodb_log_waitsDescr = 'Broj �ekanja koja smo imali zato �to je bafer dnevnika bio premali te smo morali da sa�ekamo da bude o�i��en pre nastavka.';
$strShowStatusInnodb_log_write_requestsDescr = 'Broj zahteva za upis u dnevnik.';
$strShowStatusInnodb_log_writesDescr = 'Broj fizi�kih upisa u datoteku dnevnika.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Broj fsyncs upisa na�injenih u datoteku dnevnika.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Broj fsync-ova za datoteku dnevnika na �ekanju.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Broj upisa u datoteku dnevnika na �ekanju.';
$strShowStatusInnodb_os_log_writtenDescr = 'Broj bajtova upisanih u datoteku dnevnika.';
$strShowStatusInnodb_pages_createdDescr = 'Broj napravljenih strana.';
$strShowStatusInnodb_page_sizeDescr = 'Ukompajlirana veli�ina strane za InnoDB (podrazumevano 16KB). Mnoge vrednosti se ra�unaju u stranama; veli�ina strane omogu�ava da se one lako konvertuju u bajtove.';
$strShowStatusInnodb_pages_readDescr = 'Broj pro�itanih strana.';
$strShowStatusInnodb_pages_writtenDescr = 'Broj zapisanih strana.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Broj brava za redove koje se trenutno �ekaju.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Prose�no vreme za dobavljanje brave za red, u milisekundama.';
$strShowStatusInnodb_row_lock_timeDescr = 'Ukupno vremena provedeno u dobavljanju brava za redove, u milisekundama.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Najdu�e vreme za dobavljanje brave za red, u milisekundama.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Broj puta kada se morala �ekati brava za red.';
$strShowStatusInnodb_rows_deletedDescr = 'Broj redova obrisanih iz InnoDB tabela.';
$strShowStatusInnodb_rows_insertedDescr = 'Broj redova umetnutih u InnoDB tabele.';
$strShowStatusInnodb_rows_readDescr = 'Broj redova pro�itanih iz InnoDB tabela.';
$strShowStatusInnodb_rows_updatedDescr = 'Broj redova a�uriranih u InnoDB tabelama.';
$strShowStatusKey_blocks_not_flushedDescr = 'Broj blokova klju�eva u ke�u klju�eva koji su izmenjeni ali jo� nisu poslati na disk. Ovo je ranije bilo poznato kao Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Broj neiskori��enih blokova u ke�u klju�eva. Ovu vrednost mo�ete da koristite da utvrdite koliki deo ke�a klju�eva je u upotrebi.';
$strShowStatusKey_blocks_usedDescr = 'Broj iskori��enih blokova u ke�u klju�eva. Ova vrednost je oznaka �visokog vodostaja� koja pokazuje najve�i ikada broj blokova koji je bio u upotrebi u isto vreme.';
$strShowStatusKey_read_requestsDescr = 'Broj zahteva za �itanje bloka klju�eva iz ke�a.';
$strShowStatusKey_readsDescr = 'Broj fizi�kih �itanja bloka klju�eva sa diska. Ako je Key_reads veliko, onda je va�a vrednost za key_buffer_size verovatno premala. Stepen proma�aja ke�a se mo�e izra�unati kao Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Broj zahteva za upisivanje bloka klju�eva u ke�.';
$strShowStatusKey_writesDescr = 'Broj fizi�kih upisa bloka klju�eva na disk.';
$strShowStatusLast_query_costDescr = 'Ukupna cena poslednjeg kompajliranog upita kako ju je izra�unao optimizator upita. Korisno za upore�ivanje cene razli�itih planova upita za isti upit. Podrazumevana vrednost 0 zna�i da jo� nije bio kompajliran nijedan upit.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Broj redova u INSERT DELAYED redovima �ekanja koji �ekaju upisivanje.';
$strShowStatusOpened_tablesDescr = 'Broj tabela koje su bile otvarane. Ako je broj veliki, va� ke� tabela je verovatno premali.';
$strShowStatusOpen_filesDescr = 'Broj otvorenih datoteka.';
$strShowStatusOpen_streamsDescr = 'Broj otvorenih tokova (koristi se prvenstveno za vo�enje dnevnika (logging)).';
$strShowStatusOpen_tablesDescr = 'Broj otvorenih tabela.';
$strShowStatusQcache_free_blocksDescr = 'Broj slobodnih memorijskih blokova u u ke�u upita.';
$strShowStatusQcache_free_memoryDescr = 'Koli�ina slobodne memorije za ke� upita.';
$strShowStatusQcache_hitsDescr = 'Broj pogodaka iz ke�a.';
$strShowStatusQcache_insertsDescr = 'Broj upita dodatih u ke�.';
$strShowStatusQcache_lowmem_prunesDescr = 'Broj upita koji su uklonjeni iz ke�a da bi se oslobodila memorija za ke�iranje novih upita. Ovaj podatak vam mo�e pomo�i da podesite veli�inu ke�a za upite. Ke� za upite koristi strategiju najdu�e nekori��enog (en: least recently used , LRU) da bi odlu�io koje upite da ukloni iz ke�a.';
$strShowStatusQcache_not_cachedDescr = 'Broj neke�iranih upita (koji se ne mogu ke�irati ili nisu ke�irani zbog pode�avanja query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Broj upita registrovanih u ke�u.';
$strShowStatusQcache_total_blocksDescr = 'Ukupan broj blokova u ke�u za upite.';
$strShowStatusReset = 'Reset';
$strShowStatusRpl_statusDescr = 'Status replikacije otporne na gre�ke (nije jo� implementirano).';
$strShowStatusSelect_full_joinDescr = 'Broj spojeva koji ne koriste indekste. Ako ova vrednost nije 0, trebalo bi pa�ljivo da proverite indekse va�ih tabela.';
$strShowStatusSelect_full_range_joinDescr = 'Broj spojeva koji su koristili pretragu opsega na referentnoj tabeli.';
$strShowStatusSelect_range_checkDescr = 'Broj spojeva bez klju�eva koji proveravaju upotrebu klju�a posle svakog reda. (Ako ovo nije 0, trebalo bi pa�ljivo da proverite indekse va�ih tabela.)';
$strShowStatusSelect_rangeDescr = 'Broj spojeva koji su koristili opsege na prvoj tabeli. (Obi�no nije kriti�no �ak ni kada je ovo veliko)';
$strShowStatusSelect_scanDescr = 'Broj spojeva koji su uradili puno skeniranje prve tabele.';
$strShowStatusSlave_open_temp_tablesDescr = 'Broj privremenih tabela trenutno otvorenih od strane pomo�ne SQL niti.';
$strShowStatusSlave_retried_transactionsDescr = 'Ukupan broj puta (od pokretanja) kada je pomo�na SQL nit za replikaciju poku�ala transakcije.';
$strShowStatusSlave_runningDescr = 'Ovo je ON ako je ovaj server pomo�ni koji je povezan na glavni.';
$strShowStatusSlow_launch_threadsDescr = 'Broj niti za koje je trebalo vi�e od slow_launch_time sekudni da bi bile pokrenute.';
$strShowStatusSlow_queriesDescr = 'Broj upita za koje je trebalo vi�e od long_query_time sekudni.';
$strShowStatusSort_merge_passesDescr = 'Broj prolaza za spajanje koje je algoritam za sortiranje morao da odradi. Ako je ova vrednost velika, trebalo bi da razmislite o pove�anju vrednosti sistemske promenljive sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Broj sortiranja koja su ura�ena sa opsegom.';
$strShowStatusSort_rowsDescr = 'Broj sortiranih redova.';
$strShowStatusSort_scanDescr = 'Broj sortiranja do kojih je do�lo skeniranjem tabele.';
$strShowStatusTable_locks_immediateDescr = 'Broj puta kada je brava za tabelu odmah dobavljena.';
$strShowStatusTable_locks_waitedDescr = 'Broj puta kada brava za tabelu nije mogla biti odmah dobavljena i bilo je potrebno �ekanje. Ako je ovo visoko i imate problema sa performansama, prvo bi trebalo da optimizujete svoje upite a potom da ili podelite tabelu ili tabele ili da koristite replikaciju.';
$strShowStatusThreads_cachedDescr = 'Broj niti u ke�u za niti. Stepen pogodaka ke�a se mo�e izra�unati kao Threads_created/Konekcije. Ako je ova vrednost crvena trebalo bi da pove�ate va� thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Broj trenutno otvorenih veza.';
$strShowStatusThreads_createdDescr = 'Broj niti kreiranih za rukovanje konekcijama. Ako je Threads_created veliko, mo�da bi trebalo da pove�ate vrednost thread_cache_size. (Ako imate dobru implementaciju niti, ovo obi�no ne donosi primetna pobolj�anja u performansama.)';
$strShowStatusThreads_runningDescr = 'Broj niti koje nisu uspavane.';
$strShowTableDimension = 'Prika�i dimenzije tabele';
$strShowTables = 'Prika�i tabele';
$strShowThisQuery = 'Prika�i ponovo ovaj upit';
$strSimplifiedChinese = 'Pojednostavljeni kineski';
$strSingly = '(po jednom polju)';
$strSize = 'Veli�ina';
$strSkipQueries = 'Broj zapisa (upita) koje treba presko�iti:';
$strSlovak = 'Slova�ki';
$strSlovenian = 'Slovena�i';
$strSmallBigAll = 'Sve malo/veliko';
$strSnapToGrid = 'Dr�i se mre�e';
$strSocketProblem = '(ili priklju�ak lokalnog MySQL servera nije ispravno pode�en)';
$strSortByKey = 'Sortiraj po klju�u';
$strSorting = 'Sortiranje';
$strSort = 'Sortiranje';
$strSpaceUsage = 'Zauze�e';
$strSpanish = '�panski';
$strSplitWordsWithSpace = 'Re�i se odvajaju razmakom (" ").';
$strSQLCompatibility = 'Mod SQL kompatibilnosti';
$strSQLExportType = 'Tip izvoza';
$strSQLParserBugMessage = 'Postoji mogu�nost da ste prona�li bag u SQL parseru. Molimo ispitajte svoj upit pa�ljivo, i proverite da su navodnici ispravni i da ne nedostaju. Ostali mogu�i razlozi gre�ke mogu biti da ste poslali binarnu datoteku van oblasti za obi�an tekst. Mo�ete probati svoj upit u MySQL su�elju komandne linije. Donja poruka o gre�ci MySQL servera, ako je ima, mo�e vam pomo�i u otkrivanju problema. Ako i dalje imate probleme ili ako parser ne uspeva tamo gde uspeva su�elje komandne linije, svedite svoj SQL upit na jedan jedini upit koji stvara probleme i po�aljite nam izve�taj o gre�ci sa delom koda u donjoj REZ sekciji:';
$strSQLParserUserError = 'Izgleda da postoji gre�ka u va�em SQL upitu. Ovde je poruka o gre�ki MySQL servera, koja vam mo�e pomo�i u otkrivanju problema';
$strSQLQuery = 'SQL upit';
$strSQLResult = 'SQL rezultat';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Neispravan iG�entifikator';
$strSQPBugUnclosedQuote = 'Navodnik nije zatvoren';
$strSQPBugUnknownPunctuation = 'Nepoznat string interpunkcije';
$strStandInStructureForView = 'Struktura koja zamenjuje pogled';
$strStatCheckTime = 'Poslednja provera';
$strStatCreateTime = 'Napravljeno';
$strStatement = 'Ime';
$strStatisticsOverrun = 'Na zaposlenom serveru broja�i bajtova mogu da se preliju (overrun), tako da te statistike, onako kako ih prijavljuje MySQL server, mogu biti neta�ne.';
$strStatUpdateTime = 'Poslednja izmena';
$strStatus = 'Status';
$strStorageEngine = 'Pogon skladi�tenja';
$strStorageEngines = 'Pogoni skladi�tenja';
$strStrucCSV = 'CSV format';
$strStrucData = 'Struktura i podaci';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucNativeExcel = 'Izvorni MS Excel podaci';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlo�i strukturu tabele';
$strStructureForView = 'Struktura za pogled (view)';
$strStructure = 'Struktura';
$strSubmit = 'Po�alji';
$strSuccess = 'Va� SQL upit je uspe�no izvr�en';
$strSum = 'Ukupno';
$strSwedish = '�vedski';
$strSwitchToDatabase = 'Prebaci se na kopiranu bazu';
$strSwitchToTable = 'Pre�i na kopiranu tabelu';

$strTableAlreadyExists = 'Tabela %s ve� postoji!';
$strTableComments = 'Komentari tabele';
$strTableEmpty = 'Ima tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je odba�ena';
$strTableHasBeenEmptied = 'Tabela %s je ispra�njena';
$strTableHasBeenFlushed = 'Tabela %s je osve�ena';
$strTableIsEmpty = 'Tabela je izgleda prazna!';
$strTableMaintenance = 'Radnje na tabeli';
$strTableName = 'Naziv tabele';
$strTableOfContents = 'Sadr�aj';
$strTableOptions = 'Opcije tabele';
$strTables = '%s tabela';
$strTableStructure = 'Struktura tabele';
$strTable = 'Tabela';
$strTakeIt = 'preuzmi';
$strTblPrivileges = 'Privilegije vezane za tabele';
$strTempData = 'Privremeni podaci';
$strTextAreaLength = 'Zbog njehove veli�ine, polje<br />mo�da ne�ete mo�i da izmenite';
$strThai = 'Tajski';
$strThemeDefaultNotFound = 'Nije prona�ena podrazumevana tema %s!';
$strThemeNoPreviewAvailable = 'Pregled ne postoji.';
$strThemeNotFound = 'Nije prona�ena tema %s!';
$strThemeNoValidImgPath = 'Nema ispravne putanje do slika za temu %s!';
$strThemePathNotFound = 'Nije prona�ena putanja do teme za temu %s!';
$strTheme = 'Tema / stil';
$strThisHost = 'Ovaj server';
$strThreads = 'Niti';
$strThreadSuccessfullyKilled = 'Proces %s je uspe�no prekinut.';
$strTimeoutInfo = 'Prethodnom uvozu je isteklo vreme, nakon ponovnog slanja bi�e nastavljen od pozicije %d.';
$strTimeoutNothingParsed = 'Me�utim, pri poslednjem pokretanju podaci nisu bili obra�eni, �to obi�no zna�i da phpMyAdmin ne�e biti u mogu�nosti da zavr�i ovaj uvoz osim ako ne pove�ate vremenska ograni�enja u PHP-u';
$strTimeoutPassed = 'Vreme izvr�enja skripta je isteklo, ako �elite da dovr�ite uvoz, molimo po�aljite istu datoteku i uvoz �e se nastaviti.';
$strTime = 'Vreme';
$strToFromPage = 'od/do stranice';
$strToggleScratchboard = 'Uklju�i/isklju�i radnu tablu';
$strToggleSmallBig = 'Promeni malo/veliko';
$strToSelectRelation = 'Da odaberete relaciju, kliknite :';
$strTotalUC = 'Ukupno';
$strTotal = 'ukupno';
$strTraditionalChinese = 'Tradicionalni kineski';
$strTraditionalSpanish = 'Tradicionalni �panski';
$strTraffic = 'Saobra�aj';
$strTransactionCoordinator = 'Koordinator transakcija';
$strTransformation_application_octetstream__download = 'Prikazuje vezu za preuzimanje binarnih podataka za polje. Prva opcija je ime binarne datoteke. Druga opcija je mogu�e ime polja reda tabele koji sadr�i ime datoteke. Ako date drugu opciju, prva mora biti postavljena na prazan string';
$strTransformation_application_octetstream__hex = 'Prikazuje heksadecimalni prikaz podataka. Opcioni prvi parametar odre�uje koliko �esto se dodaje prazno mesto (podrazumevano svaka 2 nibla).';
$strTransformation_image_jpeg__inline = 'Prikazuje umanjenu sliku na koju je mogu�e kliknuti; opcije: �irina, visina u pikselima (�uva originalni odnos)';
$strTransformation_image_jpeg__link = 'Prikazuje link ka ovoj snimci (npr. direktno preuzimanje iz BLOB-a).';
$strTransformation_image_png__inline = 'Prika�i JPEG slike na strani';
$strTransformation_text_plain__dateformat = 'Prikazuje TIME, TIMESTAMP, DATETIME ili polje sa numeri�kom juniks vremenskom oznakom (timestamp) kao formatirani datum. Prva opcija je pomeraj (u satima) koji se dodaje vremenskoj oznaci (podrazumevamo: 0). Drugu opciju koristitte da odredite druga�iji string za formatiranje datuma/vremena. Tre�a opcija odre�uje da li �elite da vidite lokalni ili UTC datum (koristite stringove "local" ili "utc" za to). U skladu sa tim, format datuma ima razli�ite vrednosti - za "local" pogledajte PHP-ovu dokumentaciju za funkciju strftime() dok je za "utc" to ura�eno kori��enjem fukcije gmdate().';
$strTransformation_text_plain__external = 'SAMO LINUX: Pokre�e eksternu aplikaciju i popunjava podatke u poljima preko standardnog ulaza. Vra�a standardni izlaz aplikacije. Podrazumevano je Tidy, za lep�i prikaz HTML koda. Zbog sigurnosnih razloga, morate ru�no izmeniti datoteku libraries/transformations/text_plain__external.inc.php i dodati alate koje �elite da koristite. Prva opcija je broj programa koje �elite da koristite, a druga su parametri programa. Ako se tre�i parametar postavi na 1 izlaz �e biti konvertovan koriste�i htmlspecialchars() (podrazumevano je 1). Ako je �etvrti parametar postavljen na 1, NOWRAP �e biti dodato �eliji sa sadr�ajem tako da �e izlaz biti prikazan bez izmena. (podrazumevano 1)';
$strTransformation_text_plain__formatted = '�uva originalno formatiranje polja. Escaping se ne vr�i.';
$strTransformation_text_plain__imagelink = 'Prikazuje sliku i link, polje sadr�i naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je �irina u pikselima, tre�a je visina.';
$strTransformation_text_plain__link = 'Prikazuje link, polje sadr�i naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je naslov za link.';
$strTransformation_text_plain__sql = 'Formatira tekst kao SQL upit sa obele�avanjem sintakse.';
$strTransformation_text_plain__substr = 'Pokazuje deo stringa. Prva opcija je broj znakova koje treba presko�iti od po�etka stringa (podrazumevano 0). Druga opcija je broj vra�enih znakova (podrazumevano: do kraja stringa). Tre�a opcija je string koji se dodaje kada do�e do odsecanja (podrazumevano: ...) .';
$strTriggers = 'Okida�i';
$strTruncateQueries = 'Prika�i skra�ene upite';
$strTurkish = 'Turski';
$strType = 'Tip';

$strUkrainian = 'Ukrajinski';
$strUncheckAll = 'nijedno';
$strUnicode = 'Unikod';
$strUnique = 'Jedinstveni';
$strUnknown = 'nepoznat';
$strUnselectAll = 'ni�ta';
$strUnsupportedCompressionDetected = 'Poku�ali ste da uvezete datoteku sa kompresijom koja nije podr�ana (%s). Ili podr�ka za nju nije implementirana, ili je isklju�ena u va�oj konfiguraciji.';
$strUpdatePrivMessage = 'A�urirali ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je promenjen.';
$strUpdateQuery = 'A�uriraj upit';
$strUpdComTab = 'Molimo pogledajte u dokumentaciji kako se a�urira tabela Column_comments';
$strUpgrade = 'Trebalo bi da unapredite va� %s server na verziju %s ili noviju.';
$strUploadErrorCantWrite = 'Neuspelo upisivanje datoteke na disk.';
$strUploadErrorExtension = 'Prijem datoteke zaustavljen zbog ekstenzije.';
$strUploadErrorFormSize = 'Poslata datoteka prevazilazi vrednost direktive MAX_FILE_SIZE koja je navedena u HTML formi.';
$strUploadErrorIniSize = 'Poslata datoteka prevazilazi vrednost direktive upload_max_filesize u php.ini.';
$strUploadErrorNoTempDir = 'Nedostaje privremeni direktorijum.';
$strUploadErrorPartial = 'Poslata datoteka je samo delimi�no primljena.';
$strUploadErrorUnknown = 'Nepoznata gre�ka pri slanju datoteke.';
$strUploadLimit = 'Verovatno ste poku�ali da uvezete preveliku datoteku. Molimo pogledajte %sdokumentaciju%s za na�ine prevazila�enja ovog ograni�enja.';
$strUploadsNotAllowed = 'Slanje datoteka na ovaj server nije dozvoljeno.';
$strUsage = 'Zauze�e';
$strUseBackquotes = 'Koristi \' za ograni�avanje imena polja';
$strUsedPhpExtensions = 'Kori��ene PHP ekstenzije';
$strUseHostTable = 'Koristi tabelu doma�ina';
$strUserAlreadyExists = 'Korisnik %s ve� postoji!';
$strUserEmpty = 'Ime korisnika nije uneto!';
$strUser = 'Korisnik';
$strUserName = 'Ime korisnika';
$strUserNotFound = 'Izabrani korisnik nije prona�en u tabeli privilegija.';
$strUserOverview = 'Pregled korisnika';
$strUsersDeleted = 'Izabrani korisnici su uspe�no obrisani.';
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
$strViewDumpDatabases = 'Prika�i sadr�aj (shemu) baze';
$strViewDumpDB = 'Prika�i sadr�aj (shemu) baze';
$strViewDump = 'Prika�i sadr�aj (shemu) tabele';
$strViewHasBeenDropped = 'Pogled %s je odba�en';
$strViewMaxExactCount = 'Ovaj pogled ima vi�e od %d redova. Molimo pogledajte %sdokumentaciju%s.';
$strViewName = 'naziv za VIEW';
$strView = 'Pogled';

$strWebServerUploadDirectory = 'direktorijum za slanje veb servera ';
$strWebServerUploadDirectoryError = 'Direktorijum koji ste izabrali za slanje nije dostupan';
$strWelcome = 'Dobrodo�li na %s';
$strWestEuropean = 'Zapadnoevropski';
$strWildcard = 'd�oker';
$strWindowNotFound = 'Odredi�ni prozor pretra�iva�a nije mogao da bude a�uriran. Mo�da ste zatvorili mati�ni prozor, ili va� pretra�iva� onemogu�ava a�uriranje me�u prozorima zbog sigurnosnih pode�avanja';
$strWithChecked = 'Ozna�eno:';
$strWriteRequests = 'Zahtevi za upis';
$strWrongUser = 'Pogre�no korisni�ko ime/lozinka. Pristup odbijen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Napomena: Postavljanje ovih opcija na 0 (nulu) uklanja ograni�enja.';
$strZip = '"zipovano"';

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

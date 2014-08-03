<?php
/* $Id: finnish-iso-8859-15.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/*
 * Translated by Jouni K�hk�nen, <address withdrawn>
 * Previous translations by Visa Kopu, <visa@visakopu.net>
 */

$charset = 'iso-8859-15';
$text_dir = 'ltr';
$number_thousands_separator = '�';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('tavua', 'kt', 'Mt', 'Gt', 'Tt', 'Pt', 'Et');

$day_of_week = array('Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La');
$month = array('Tammi', 'Helmi', 'Maalis', 'Huhti', 'Touko', 'Kes�', 'Hein�', 'Elo', 'Syys', 'Loka', 'Marras', 'Joulu');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y klo %H:%M';

$timespanfmt = '%s p�iv��, %s tuntia, %s minuuttia ja %s sekuntia';

'The number of rows waiting to be written in INSERT DELAY queues.';
'Kertoo, kuinka monta INSERT DELAY -jonoissa olevaa rivi� odotetaan kirjoitettavan.';

$strAbortedClients = 'Keskeytetty';
$strAccessDeniedCreateConfig = 'Todenn�k�inen syy t�lle on se, ettet ole luonut asetustiedostoa. Voit k�ytt�� %1$sasetusskripti�%2$s asetustiedoston luomiseen.';
$strAccessDeniedExplanation = 'phpMyAdmin yritti saada yhteyden MySQL-palvelimeen, mutta se torjui yhteyden. Tarkista palvelin, k�ytt�j�nimi ja salasana config.inc.php-tiedostosta ja varmista, ett� ne vastaavat MySQL-palvelimen j�rjestelm�nvalvojan antamia tietoja.';
$strAccessDenied = 'P��sy kielletty';
$strAction = 'Toiminnot';
$strAddAutoIncrement = 'Lis�� \'AUTO_INCREMENT\' -arvo';
$strAddClause = 'Lis�� %s';
$strAddConstraints = 'Lis�� rajoitteet';
$strAddDeleteColumn = 'Lis��/poista sarakkeita';
$strAddDeleteRow = 'Lis��/poista hakuehtoja';
$strAddFields = 'Lis�� %s kentt�(�)';
$strAddHeaderComment = 'Lis�� oma kommentti otsikkoon (\\n on rivinvaihto)';
$strAddIntoComments = 'Lis�� kommentteihin';
$strAddNewField = 'Lis�� sarake';
$strAddPrivilegesOnDb = 'Lis�� k�ytt�oikeudet seuraavaan tietokantaan';
$strAddPrivilegesOnTbl = 'Lis�� k�ytt�oikeudet seuraavaan tauluun';
$strAddSearchConditions = 'Lis�� hakuehtoja ("where"-lauseen sis�lt�):';
$strAddToIndex = 'Lis�� indeksiin %s sarake(tta)';
$strAddUser = 'Lis�� uusi k�ytt�j�';
$strAddUserMessage = 'Olet lis�nnyt uuden k�ytt�j�n.';
$strAdministration = 'P��k�ytt�jyys';
$strAffectedRows = 'Muutettuja rivej�:';
$strAfterInsertBack = 'Takaisin';
$strAfterInsertNewInsert = 'Lis�� uusi rivi';
$strAfterInsertNext = 'Muokkaa seuraavaa rivi�';
$strAfterInsertSame = 'Palaa t�lle sivulle';
$strAfter = 'J�lkeen sarakkeen: %s';
$strAll = 'Kaikki';
$strAllowInterrupt = 'Salli tuonnin keskeytt�minen, mik�li skripti huomaa ylitt�v�ns� aikarajoituksen. T�t� kannattaa k�ytt�� suurten tiedostojen tuomiseen; se voi kuitenkin aiheuttaa h�iri�it� transaktioihin (tapahtumiin).';
$strAllTableSameWidth = 'N�yt� kaikki taulut samanlevyisin�?';
$strAlterOrderBy = 'Lajittele taulu';
$strAnalyzeTable = 'Analysoi taulu';
$strAnd = 'Ja';
$strAndThen = 'ja sen j�lkeen';
$strAngularLinks = 'Kulmikkaat linkit';
$strAnIndex = 'Sarakkeelle %s on lis�tty indeksi';
$strAnyHost = 'Mik� tahansa palvelin';
$strAny = 'Mik� tahansa';
$strAnyUser = 'Mik� tahansa k�ytt�j�';
$strApproximateCount = 'Saattaa olla summittainen. Katso FAQ 3.11';
$strAPrimaryKey = 'Sarakkeelle %s on luotu ensisijainen avain';
$strArabic = 'Arabialainen';
$strArmenian = 'Armenialainen';
$strAscending = 'Nouseva';
$strAtBeginningOfTable = 'Taulun alkuun';
$strAtEndOfTable = 'Taulun loppuun';
$strAttr = 'Attribuutit';
$strAutomaticLayout = 'Automaattinen ulkoasu';

$strBack = 'Takaisin';
$strBaltic = 'Baltilainen';
$strBeginCut = 'ALOITA CUT';
$strBeginRaw = 'ALOITA RAW';
$strBinary = 'Bin��ridata';
$strBinaryDoNotEdit = 'Bin��ridataa - �l� muokkaa';
$strBinaryLog = 'Bin��riloki';
$strBinLogEventType = 'Tapahtumatyyppi';
$strBinLogInfo = 'Informaatio';
$strBinLogName = 'Lokin nimi';
$strBinLogOriginalPosition = 'Alkuper�inen sijainti';
$strBinLogPosition = 'Sijainti';
$strBinLogServerId = 'Palvelimen ID';
$strBookmarkAllUsers = 'Anna kaikkien k�ytt�jien k�ytt�� t�t� kirjanmerkki�';
$strBookmarkCreated = 'Kirjanmerkki %s luotu';
$strBookmarkDeleted = 'Kirjanmerkki on poistettu.';
$strBookmarkLabel = 'Tunniste';
$strBookmarkQuery = 'Tallennettu SQL-kysely';
$strBookmarkReplace = 'Korvaa samanniminen, olemassaoleva kirjanmerkki';
$strBookmarkThis = 'Tallenna SQL-kysely';
$strBookmarkView = 'N�yt�';
$strBrowseDistinctValues = 'Selaa erillisi� arvoja';
$strBrowseForeignValues = 'Selaa vieraita arvoja';
$strBrowse = 'Selaa';
$strBufferPoolActivity = 'Puskurivarannon aktiivisuus';
$strBufferPool = "Puskurivaranto";
$strBufferPoolUsage = "Puskurivarannon k�ytt�";
$strBufferReadMisses = 'Ep�onnistuneet lukuyritykset';
$strBufferReadMissesInPercent = 'Ep�onnistuneet lukuyritykset: %';
$strBufferWriteWaitsInPercent = 'Kirjoitusviipeet: %';
$strBufferWriteWaits = 'Viive ennen kirjoitusta';
$strBulgarian = 'Bulgarialainen';
$strBusyPages = "K�yt�ss� olevat sivut";
$strBzError = 'phpMyAdmin ei voinut pakata vedosta johtuen rikkin�isest� Bz2-laajennuksesta t�ss� php:n versiossa. On suositeltavaa asettaa <code>$cfg[\'BZipDump\']</code>-direktiivi phpMyAdminin konfigurointitiedostosta arvoksi <code>FALSE</code>. Jos haluat k�ytt�� Bz2-pakkauksen toimintoja, sinun pit�� p�ivitt�� uusimpaan php:n versioon. Katso lis�tietoja php bug reportista: %s .';
$strBzip = '"bzip-pakkaus"';

$strCalendar = 'Kalenteri';
$strCancel = 'Peruuta';
$strCanNotLoadExportPlugins = 'Vientilis�osia ei voitu ladata; tarkista asennuksesi!';
$strCanNotLoadImportPlugins = 'Tuontiin tarvittavaa lis�osaa ei voida tuoda, tarkista asennuksen asetukset!';
$strCannotLogin = 'MySQL-palvelimelle ei voitu kirjautua sis��n';
$strCantLoad = 'en voi ladata laajennusta %s,<br />ole hyv�, ja tarkista PHP:n asetukset';
$strCantLoadRecodeIconv = 'Merkist�n konvertointiin tarvittavaa iconv- tai recode-laajennusta ei voitu ladata. Muokkaa PHP:n asetuksia ja salli n�iden laajennusten k�ytt� tai muuta phpMyAdminin asetuksia niin ettei konvertointia suoriteta.';
$strCantRenameIdxToPrimary = 'Indeksi� ei voi muuttaa PRIMARY-nimiseksi!';
$strCantUseRecodeIconv = 'iconv-, libiconv- tai recode_string-funktioita ei voitu k�ytt��. Tarkista PHP:n asetukset.';
$strCardinality = 'Kardinaliteetti';
$strCaseInsensitive = 'kirjainkoolla ei v�li�';
$strCaseSensitive = 'tarkka kirjainkoko';
$strCentralEuropean = 'Keskieurooppalainen';
$strChangeCopyModeCopy = '... s�ilyt� vanha k�ytt�j�.';
$strChangeCopyModeDeleteAndReload = ' ... poista vanha k�ytt�j� k�ytt�j�tauluista ja lataa k�ytt�oikeudet sen j�lkeen uudelleen.';
$strChangeCopyModeJustDelete = ' ... poista vanha k�ytt�j� k�ytt�j�tauluista.';
$strChangeCopyMode = 'Luo uusi k�ytt�j� samoilla k�ytt�oikeuksilla ja ...';
$strChangeCopyModeRevoke = ' ...peruuta kaikki aktiiviset k�ytt�oikeudet vanhalta k�ytt�j�lt� ja tuhoa se sen j�lkeen.';
$strChangeCopyUser = 'Vaihda sis��nkirjautumistietoja / Kopioi k�ytt�j�';
$strChangeDisplay = 'Valitse n�ytett�v� sarake';
$strChange = 'Muokkaa';
$strChangePassword = 'Vaihda salasanaa';
$strCharset = 'Merkist�koodaus';
$strCharsetOfFile = 'Tiedoston merkist�:';
$strCharsetsAndCollations = 'Merkist�koodaukset ja aakkosj�rjestykset';
$strCharsets = 'Merkist�t';
$strCheckAll = 'Valitse kaikki';
$strCheckOverhead = 'Valitse k�ytt�m�tt�m�t taulut'; //?
$strCheckPrivs = 'Hallitse k�ytt�oikeuksia';
$strCheckPrivsLong = 'Hallitse tietokannan &quot;%s&quot; k�ytt�oikeuksia.';
$strCheckTable = 'Tarkista taulu';
$strChoosePage = 'Valitse muokattava sivu';
$strColComFeat = 'Sarakkeiden kommentit n�kyviss�';
$strCollation = 'Aakkosj�rjestys';
$strColumnNames = 'Sarakkeiden nimet';
$strColumnPrivileges = 'Sarakekohtaiset k�ytt�oikeudet';
$strCommand = 'Komento';
$strCommentsForTable = 'KOMMENTIT TAULULLE';
$strComments = 'Kommentit';
$strCompatibleHashing = 'MySQL&nbsp;4.0 -yhteensopiva';
$strCompleteInserts = 'Kokonaiset insert-lauseet';
$strCompression = 'Pakkaus';
$strCompressionWillBeDetected = 'Seuraavat tiedostopakkausmuodot havaitaan automaattisesti: %s';
$strConfigDefaultFileError = 'En voi ladata oletusasetuksia kohteesta: "%1$s"';
$strConfigFileError = 'phpMyAdmin ei pysty lukemaan asetustiedostoa.<br />T�m� saattaa johtua virheest�, jonka PHP l�ysi tiedostosta tai tiedoston puuttumisesta.<br />Voit avata tiedoston allaolevasta linkist� ja lukea mahdolliset PHP-virheilmoituikset. Todenn�k�isimmin joltain rivilt� puuttuu lainausmerkki tai puolipiste.<br />Jos linkist� avautuva sivu on tyhj�, asetustiedostosta ei l�ytynyt virhett�.';
$strConfigureTableCoord = 'M��rittele koordinaatit taululle %s';
$strConnectionError = 'En voi yhdist��: virheelliset asetukset.';
$strConnections = 'Yhteydenotot';
$strConstraintsForDumped = 'Rajoitteet vedostauluille';
$strConstraintsForTable = 'Rajoitteet taululle';
$strCookiesRequired = 'Selaimessa on oltava ev�steet k�yt�ss� t�st� eteenp�in.';
$strCopyDatabaseOK = 'Tietokanta %s on kopioitu tietokannaksi %s';
$strCopy = 'Kopioi';
$strCopyTable = 'Kopioi taulu toiseen tauluun nimell� (tietokanta<b>.</b>taulu):';
$strCopyTableOK = 'Taulu %s on kopioitu nimelle %s.';
$strCopyTableSameNames = 'Taulua ei voida kopioida itseens�!';
$strCouldNotKill = 'phpMyAdmin ei voinut lopettaa s�iett� %s. Se on todenn�k�isesti jo suljettu.';
$strCreateDatabaseBeforeCopying = 'Suorita CREATE DATABASE ennen kopioimista';
$strCreateIndex = 'Luo &nbsp;%s:n sarakkeen indeksi';
$strCreateIndexTopic = 'Luo uusi indeksi';
$strCreate = 'Luo';
$strCreateNewDatabase = 'Luo uusi tietokanta';
$strCreateNewTable = 'Luo uusi taulu tietokantaan %s';
$strCreatePage = 'Luo uusi sivu';
$strCreatePdfFeat = 'PDF-tiedostojen luonti';
$strCreateRelation = 'Luo relaatio';
$strCreateTable  = 'Luo taulu';
$strCreateUserDatabaseName = 'Luo samanniminen tietokanta ja anna kaikki oikeudet';
$strCreateUserDatabaseNone = 'Ei mit��n';
$strCreateUserDatabase = 'Tietokanta k�ytt�j�lle';
$strCreateUserDatabaseWildcard = 'Anna kaikki oikeudet tietokannalle jokerimerkki� k�ytt�en (username\_%)';
$strCreationDates = 'Luonti/p�ivitys/tarkistus -p�iv�ykset';
$strCriteria = 'Hakuehdot';
$strCroatian = 'Kroaatti';
$strCSV = 'CSV';
$strCyrillic = 'Kyrillinen';
$strCzechSlovak = 'Tsekkoslovakialainen';
$strCzech = 'Tshekkil�inen';

$strDanish = 'Tanskalainen';
$strDatabaseEmpty = 'Tietokannan nimi on tyhj�!';
$strDatabaseExportOptions = 'Tietokannan tulostusvalinnat';
$strDatabaseHasBeenDropped = 'Tietokanta %s on pudotettu.';
$strDatabasesDropped = '%s tietokantaa pudotettiin onnistuneesti.';
$strDatabasesStatsDisable = 'Poista tilastot k�yt�st�';
$strDatabasesStatsEnable = 'Ota tilastot k�ytt��n';
$strDatabasesStatsHeavyTraffic = 'Huom: Tietokantatilastojen k�ytt��notto t��lt� k�sin saattaa aiheuttaa runsaasti liikennett� Internet-palvelimen ja MySQL-palvelimen v�lille.';
$strDatabasesStats = 'Tietokantatilastot';
$strDatabases = 'Tietokannat';
$strDatabase = 'Tietokanta';
$strData = 'Data';
$strDataDict = 'Datasanakirja';
$strDataOnly = 'Vain data';
$strDataPages = "Dataa sis�lt�v�t sivut";
$strDBComment = 'Tietokannan kommentti: ';
$strDBCopy = 'Luo tietokannasta toinen tietokanta nimell�';
$strDbIsEmpty = 'Tietokanta on tyhj�!';
$strDbPrivileges = 'Tietokantakohtaiset k�ytt�oikeudet';
$strDBRename = 'Muuta tietokannan nimi';
$strDbSpecific = 'tietokantakohtainen';
$strDefaultEngine = "%s on t�m�n MySQL-palvelimen oletusarvoinen tallennustilamoottori.";
$strDefault = 'Oletusarvo';
$strDefaultValueHelp = 'Sy�t� oletusarvoihin vain yksin�inen arvo (k�ytt�m�tt� kenoviivamerkint�j� tai lainausmerkkej�) t�ss� muodossa: a';
$strDefragment = 'Eheyt� taulu';
$strDelayedInserts = 'K�yt� viiv�stettyj� insert-lauseita';
$strDeleteAndFlushDescr = 'T�m� on siivoin tapa, mutta k�ytt�oikeuksien lataaminen uudelleen saattaa kest�� jonkin aikaa.';
$strDeleteAndFlush = 'Poista k�ytt�j�t ja lataa k�ytt�oikeudet sen j�lkeen uudelleen.';
$strDeleted = 'Rivi on poistettu';
$strDeletedRows = 'Poistetut rivit:';
$strDeleteNoUsersSelected = 'Yht��n k�ytt�j�� ei valittu poistettavaksi!';
$strDelete = 'Poista';
$strDeleteRelation = 'Poista relaatio';
$strDeleting = 'Poistetaan: %s';
$strDelimiter = 'Rajamerkki';
$strDelOld = 'Nykyisell� sivulla on viittauksia tauluihin, joita ei en�� ole olemassa. Haluatko poistaa nuo viittaukset?';
$strDescending = 'Laskeva';
$strDescription = 'Kuvaus';
$strDesignerHelpDisplayField = 'Ilmaisinkentt� n�kyy vaaleanpunaisena. Asettaaksesi kent�n ilmaisinkent�ksi paina "Valitse n�ytett�v� kentt�" -kuvaketta ja paina sitten sopivaa kentt�nime�.';
$strDesigner = 'Suunnittelija';
$strDictionary = 'sanakirja';
$strDirectLinks = 'Suorat linkit';
$strDirtyPages = "Ep�siistit sivut";
$strDisabled = 'Pois p��lt�';
$strDisableForeignChecks = '�l� k�yt� vieraiden avainten tarkistusta';
$strDisplayFeat = 'Ulkoasun asetukset';
$strDisplayOrder = 'Lajitteluj�rjestys:';
$strDisplayPDF = 'N�yt� PDF-kaavio';
$strDoAQuery = 'Suorita "esimerkin mukainen kysely" (jokerimerkki: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Ohjeet';
$strDoYouReally = 'Oletko varma ett� haluat ';
$strDropDatabaseStrongWarning = 'Olet aikeissasi H�VITT�� kokonaisen tietokannan!';
$strDrop = 'Pudota';
$strDropUsersDb = 'Pudota (poista) tietokannat, joilla on sama nimi kuin k�ytt�jill�.';
$strDumpingData = 'Vedostetaan tietoa taulusta';
$strDumpSaved = 'Vedos tallennettiin tiedostoon %s.';
$strDumpXRows = 'Tee vedos %s rivist�, alkaen rivist�: %s.';
$strDynamic = 'dynaaminen';

$strEdit = 'Muokkaa';
$strEditPDFPages = 'Muokkaa PDF-sivuja';
$strEditPrivileges = 'Muokkaa k�ytt�oikeuksia';
$strEffective = 'Varsinainen';
$strEmptyResultSet = 'MySQL palautti tyhj�n vastauksen (ts. nolla rivi�).';
$strEmpty = 'Tyhjenn�';
$strEnabled = 'P��ll�';
$strEncloseInTransaction = 'Lis�� transaktio (tapahtuma)';
$strEndCut = 'LOPETA CUT';
$strEnd = 'Loppu';
$strEndRaw = 'LOPETA RAW';
$strEngineAvailable = "%s on k�ytett�viss� t�ll� MySQL-palvelimella.";
$strEngineDisabled = "%s on otettu pois k�yt�st� t�lt� MySQL-palvelimelta.";
$strEngines = "Moottorit";
$strEngineUnsupported = "T�m� MySQL-palvelin ei tue %s-tallennustilamoottoria.";
$strEnglish = 'Englantilainen';
$strEnglishPrivileges = ' Huom! MySQL-k�ytt�oikeuksien nimet ovat englanniksi! ';
$strErrorInZipFile = 'Virhe ZIP-paketissa:';
$strErrorRelationAdded = 'Virhe: Relaatiota ei luotu.';
$strErrorRelationExists = 'Virhe: relaatio on jo olemassa.';
$strErrorRenamingTable = 'Virhe annettaessa taululle %1$s nime� %2$s';
$strErrorSaveTable = 'Virhe tallennettaessa koordinaatteja Suunnitelijaan.';
$strError = 'Virhe';
$strEscapeWildcards = 'Jokerimerkkien _ ja % eteen on lis�tt�v� \-merkki, jotta ne n�kyisiv�t oikein';
$strEsperanto = 'Esperanto';
$strEstonian = 'Virolainen';
$strExcelEdition = 'Excel-muokkaus';
$strExecuteBookmarked = 'Suorita kirjanmerkkeihin lis�tty kysynt�';
$strExplain = 'Selit� SQL-kysely';
$strExportImportToScale = 'Vie/tuo skaalaan';
$strExportMustBeFile = 'Valittu vientityyppi on tallennettava tiedostoon!';
$strExport = 'Vienti';
$strExtendedInserts = 'Laajennetut insert-lauseet';
$strExtra = 'Lis�tiedot';

$strFailedAttempts = 'Ep�onnistuneet yritykset';
$strFieldHasBeenDropped = 'Sarake %s on pudotettu';
$strFieldInsertFromFileTempDirNotExists = 'Virhe l�hetetty� tiedostoa siirrett�ess�, katso FAQ 1.11';
$strField = 'Sarake';
$strFieldsEnclosedBy = 'Sarakkeiden ymp�r�intimerkki';
$strFieldsEscapedBy = 'Koodinvaihtomerkki (escape)';
$strFields = 'Sarakkeet';
$strFieldsTerminatedBy = 'Sarakkeiden erotinmerkki';
$strFileAlreadyExists = 'Tiedosto %s on jo olemassa palvelimella, vaihda tiedostonime� tai tarkista korvaus-asetuksen tila.';
$strFileCouldNotBeRead = 'Tiedostoa ei voida lukea';
$strFileNameTemplateDescriptionDatabase = 'tietokannan nimi';
$strFileNameTemplateDescriptionServer = 'palvelimen nimi';
$strFileNameTemplateDescriptionTable = 'taulun nimi';
$strFileNameTemplateDescription = 'T�m� arvo on %1$sstrftime%2$s-funktion mukainen, joten voit k�ytt�� ajanmuodostostusmerkkijonoja. Lis�ksi tapahtuu seuraavat muutokset: %3$s. Muu teksti pysyy alkuper�isen�.';
$strFileNameTemplateRemember = 'muista pohja';
$strFileNameTemplate = 'Tiedostonimen pohja';
$strFileToImport = 'Tuotava tiedosto';
$strFixed = 'kiinte�';
$strFlushPrivilegesNote = 'Huom: phpMyAdmin hakee k�ytt�jien k�ytt�oikeudet suoraan MySQL-palvelimen k�ytt�oikeustauluista. N�iden taulujen sis�lt� saattaa erota palvelimen k�ytt�mist� k�ytt�oikeuksista, jos niihin on tehty muutoksia manuaalisesti. T�ll�in sinun on %sladattava k�ytt�oikeudet uudestaan%s ennen kuin jatkat.';
$strFlushQueryCache = 'Tyhjenn� kyselymuisti';
$strFlushTables = 'Tyhjenn� (sulje) kaikki taulut';
$strFlushTable = 'Tyhjenn� taulun v�limuisti ("FLUSH")';
$strFontSize = 'Fonttikoko';
$strForeignKeyError = 'Virhe luotaessa vierasta avainta (tarkista tietotyypit)';
$strFormat = 'Muoto';
$strFormEmpty = 'Tarvittava tieto puuttuu lomakkeesta!';
$strFreePages = "Vapaat sivut";
$strFullText = 'Koko tekstit';
$strFunction = 'Funktio';
$strFunctions = 'Funktiot';

$strGenBy = 'Luontiymp�rist�';
$strGeneralRelationFeat = 'Yleiset relaatio-ominaisuudet';
$strGenerate = 'Keksi';
$strGeneratePassword = 'Keksi salasana';
$strGenTime = 'Luontiaika';
$strGeorgian = 'Georgialainen';
$strGerman = 'Saksalainen';
$strGlobal = 'globaali';
$strGlobalPrivileges = 'Globaalit k�ytt�oikeudet';
$strGlobalValue = 'Globaali arvo';
$strGo = 'Siirry';
$strGrantOption = 'Saantioikeudet';
$strGreek = 'Kreikkalainen';
$strGzip = '"gzip-pakkaus"';

$strHandler = 'K�sittelij�';
$strHasBeenAltered = 'on muutettu.';
$strHasBeenCreated = 'on luotu.';
$strHaveToShow = 'Valitse v�hint��n yksi sarake';
$strHebrew = 'Hebrealainen';
$strHelp = 'Ohje';
$strHide         = 'K�tke';
$strHideShowAll = 'K�tke/n�yt� kaikki';
$strHideShowNoRelation = 'K�tke/n�yt� taulut, joilla ei ole relaatiota';
$strHome = 'Etusivu';
$strHomepageOfficial = 'phpMyAdminin kotisivut';
$strHostEmpty = 'Palvelimen nimi puuttuu!';
$strHost = 'Palvelin';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Unkarilainen';

$strIcelandic = 'Islantilainen';
$strId = 'ID';
$strIdxFulltext = 'Koko teksti';
$strIEUnsupported = 'Internet Explorer ei tue t�t� toimintoa.';
$strIgnoreDuplicates = '�l� v�lit� kaksinkertaisista riveist�';
$strIgnoreInserts = 'K�yt� IGNORE:a INSERT-komennoissa';
$strIgnore = 'J�t� huomiotta';
$strImportExportCoords = 'Tuo/vie PDF-skeeman koordinaatit';
$strImportFiles = 'Tuo tiedostoja';
$strImportFormat = 'Tuotavan tiedoston muoto';
$strImportSuccessfullyFinished = 'Tuonti onnistui, %d kysely� suoritettu.';
$strImport = 'Tuonti';
$strIndexes = 'Indeksit';
$strIndexHasBeenDropped = 'Indeksi %s on pudotettu';
$strIndex = 'Indeksi';
$strIndexName = 'Indeksin nimi:';
$strIndexType = 'Indeksin tyyppi:';
$strIndexWarningTable = 'Taulun `%s` indeksien kanssa on ongelmia';
$strInnoDBAutoextendIncrement = "Automaattisen laajentamisen koko";
$strInnoDBAutoextendIncrementDesc = "Laajentamiskoko automaattisesti suurenevan taulutilan koon laajentamiseksi sen t�yttyess�.";
$strInnoDBBufferPoolSizeDesc = 'Kertoo koon siit� muistipuskurista, jota InnoDB k�ytt�� taulujen tietojen ja indeksien siirt�miseen v�limuistiin.';
$strInnoDBBufferPoolSize = 'Puskurivarannon koko';
$strInnoDBDataFilePath = "Datatiedostot";
$strInnoDBDataHomeDir = "Datan kotihakemisto";
$strInnoDBDataHomeDirDesc = "Hakemistopolun yhteinen osa kaikille InnoDB-datatiedostoille.";
$strInnoDBPages = 'sivua';
$strInnoDBRelationAdded = 'InnoDB-relaatio luotu';
$strInnodbStat = 'InnoDB:n tila';
$strInsecureMySQL = 'Asetustiedostosi k�ytt�� asetuksia, jotka viittaavat MySQL-palvelimen oletusarvoiseen k�ytt�j��n (root ilman salasanaa). T�llaisin asetuksin MySQL-palvelin on altis hy�kk�yksille. T�m� tietoturvariski olisi syyt� korjata pikimmiten!';
$strInsertAsNewRow = 'Lis�� uutena rivin�';
$strInsertedRowId = 'Sijoitetun rivin id:';
$strInsertedRows = 'Lis�tyt rivit:';
$strInsert = 'Lis�� rivi';
$strInternalNotNecessary = '* Sis�ist� relaatiota ei tarvita silloin, kun sellainen on jo InnoDB:ss�.';
$strInternalRelationAdded = 'Sis�inen relaatio luotu';
$strInternalRelations = 'Sis�iset relaatiot';
$strInUse = 'k�yt�ss�';
$strInvalidAuthMethod = 'Asetuksissa on virheellinen todennustapa:';
$strInvalidColumnCount = 'Sarakkeiden m��r�n on oltava enemm�n suurempi kuin nolla.';
$strInvalidColumn = 'Virheellinen sarake (%s) m��ritelty!';
$strInvalidCSVFieldCount = 'Virheellinen kenttien m��r� CSV-sy�tteess� rivill� %d.';
$strInvalidCSVFormat = 'Virheellinen muoto CSV-sy�tteess� rivill� %d.';
$strInvalidCSVParameter = 'Virheellinen parametri CSV-tuonnille: %s';
$strInvalidDatabase = 'Virheellinen tietokanta';
$strInvalidFieldAddCount = 'Sinun on lis�tt�v� v�hint��n yksi kentt�.';
$strInvalidFieldCount = 'Taulussa t�ytyy olla v�hint��n yksi kentt�.';
$strInvalidLDIImport = 'T�m� lis�osa ei tue pakattujen tuontien k�ytt��!';
$strInvalidRowNumber = '%d on virheellinen rivinumero.';
$strInvalidServerHostname = 'Palvelimella %1$s virheellinen nimi. Tarkista asetukset.';
$strInvalidServerIndex = 'Virheellinen palvelinindeksi: "%s"';
$strInvalidTableName = 'Virheellinen taulun nimi';

$strJapanese = 'Japanilainen';
$strJoins = 'Liitokset';
$strJumpToDB = 'Hypp�� tietokantaan &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Poistetut&quot; k�ytt�j�t voivat edelleen k�ytt�� tavalliseen tapaan palvelinta, ellei k�ytt�oikeuksia ladata uudestaan.';
$strJustDelete = 'Poista k�ytt�j�t vain k�ytt�oikeustauluista.';

$strKeepPass = '�l� vaihda salasanaa';
$strKeyCache = 'Avainv�limuisti';
$strKeyname = 'Avaimen nimi';
$strKill = 'Lopeta';
$strKnownExternalBug = 'Toimintoon %s vaikuttaa tunnettu vika, katso %s';
$strKorean = 'Korealainen';

$strLandscape = 'Landscape';
$strLanguage = 'Kieli';
$strLanguageUnknown = 'Tuntematon kieli: %1$s.';
$strLatchedPages = "Lukitut sivut";
$strLatexCaption = 'Taulun otsikko';
$strLatexContent = 'Taulun __TABLE__ sis�lt�';
$strLatexContinuedCaption = 'Jatkettu taulun otsikko';
$strLatexContinued = '(jatkuu)';
$strLatexIncludeCaption = 'Sis�llyt� taulun otsikko';
$strLatexLabel = 'Tunniste';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Taulun __TABLE__ rakenne';
$strLatvian = 'Latvialainen';
$strLDI = 'CSV k�ytt�en LOAD DATA -kysely�';
$strLDILocal = 'K�yt� LOCAL-avainsanaa';
$strLengthSet = 'Pituus/Arvot*';
$strLimitNumRows = 'Rivej� sivua kohti';
$strLinesTerminatedBy = 'Rivien erotinmerkki';
$strLinkNotFound = 'Linkki� ei l�ydy';
$strLinksTo = 'Linkitys sarakkeeseen:';
$strLithuanian = 'Liettualainen';
$strLocalhost = 'Paikallinen';
$strLocationTextfile = 'Tiedoston sijainti';
$strLoginInformation = 'Sis��nkirjautumistiedot';
$strLogin = 'Kirjaudu sis��n';
$strLogout = 'Poistu';
$strLogPassword = 'Salasana:';
$strLogServer = 'Palvelin';
$strLogUsername = 'K�ytt�j�tunnus:';
$strLongOperation = "T�m� toimenpide saattaa kest�� pitk��n. Jatketaanko silti?";

$strMaxConnects = 'enim. yht�aikaisia yhteyksi�';
$strMaximalQueryLength = 'Luodun kyselyn enimm�ispituus';
$strMaximumSize = 'Enimm�iskoko: %s%s';
$strMbExtensionMissing = 'PHP-laajennusta mbstring ei l�ytynyt ja vaikuttaa silt�, ett� k�yt�t multibyte-merkist�koodausta. Ilman mbstring-laajennusta phpMyAdmin ei osaa jaotella merkkijonoja oikein, ja t�m� saattaa johtaa odottamattomiin tuloksiin.';
$strMbOverloadWarning = 'PHP:n asetuksissa on "mbstring.func_overload" -valinta p��ll�. T�m� valinta ei sovi yhteen phpMyAdminin kanssa ja saattaa h�vitt�� tietoja!';
$strMIME_available_mime = 'Mahdolliset MIME-tyypit';
$strMIME_available_transform = 'Mahdolliset muunnokset';
$strMIME_description = 'Kuvaus';
$strMIME_MIMEtype = 'MIME-tyyppi';
$strMIME_nodescription = 'T�lle muunnokselle ei ole saatavilla kuvausta.<br />Kysy tekij�lt�, mit� %s tekee.';
$strMIME_transformation_note = 'N�hd�ksesi luettelon saatavilla olevista muunnosvaihtoehdoista ja niiden MIME-tyyppien muunnoksista, paina %smuunnoksen kuvaukset%s-kohtaa';
$strMIME_transformation_options = 'Muunnosvaihtoehdot';
$strMIME_transformation_options_note = 'Sy�t� muunnosvalinnoille arvot k�ytt�en t�t� formaattia: \'a\', 100, b,\'c\'...<br />Jos tarvitset arvoissa kenoviivaa ("\") tai yksitt�ist� lainausmerkki� ("\'"), lis�� merkin eteen kenoviiva (esim. \'\\\\xyz\' tai \'a\\\'b\').';
$strMIME_transformation = 'Selaimen muunnos (transformation)';
$strMIMETypesForTable = 'MIME-TYYPIT TAULULLE';
$strMIME_without = 'MIME-tyypeill�, jotka on kursivoitu, ei ole erillist� muunnostoimintoa';
$strModifications = 'Muutokset tallennettu';
$strModifyIndexTopic = 'Muokkaa indeksi�';
$strModify = 'Muokkaa';
$strMoveMenu = 'Siirr� valikko';
$strMoveTableOK = 'Taulu %s on siirretty %s.';
$strMoveTableSameNames = 'Taulua ei voi siirt�� itseens�!';
$strMoveTable = 'Siirr� taulu toiseen tauluun (tietokanta<b>.</b>taulu):';
$strMultilingual = 'monikielinen';
$strMyISAMDataPointerSize = "Dataosoittimen koko";
$strMyISAMDataPointerSizeDesc = "Osoittimen oletuskoko tavuina, k�ytett�v�ksi CREATE TABLE -kyselyn yhteydess� MyISAM-tauluissa, silloin kun MAX_ROWS-valintaa ei ole m��ritelty.";
$strMyISAMMaxExtraSortFileSizeDesc = "Jos MyISAM-indeksin nopeaan luomiseen k�ytetty v�liaikaistiedosto on suurempi kuin avainv�limuistin k�ytt� t��ll� m��ritellyn m��r�n mukaisesti, suositellaan v�limuistitoiminnon k�ytt��.";
$strMyISAMMaxExtraSortFileSize = "Enimm�iskoko v�liaikaistiedostoille indeksin luonnissa";
$strMyISAMMaxSortFileSizeDesc = "MySQL-palvelimen k�ytt��n tarkoitettu v�liaikaistiedoston suurin koko MyISAM-indeksien uudelleenlatausta varten (REPAIR TABLE, ALTER TABLE tai LOAD ADTA INFILE -toimintojen aikana).";
$strMyISAMMaxSortFileSize = "Enimm�iskoko v�liaikaisille lajittelutiedostoille";
$strMyISAMRecoverOptions = "Automaattinen palautuminen";
$strMyISAMRecoverOptionsDesc = "Kaatuneiden MyISAM-taulujen automaattisen palauttamisen tila sellaisena kuin se on asetettu \"--myisam-recover\" -nimisen palvelimenk�ynnistysasetuksen kautta.";
$strMyISAMRepairThreadsDesc = "Jos t�m� arvo on suurempi kuin 1, lajitteluprosessi luo MyISAM-tauluindeksit rinnakkain (jokainen indeksi omalle s�ikeelleen), kun k�ytet��n Korjaa-toimintoa.";
$strMyISAMRepairThreads = "Korjaa s�ikeet";
$strMyISAMSortBufferSizeDesc = "Puskuri joka varataan k�ytt��n lajiteltaessa MyISAM-indeksej� REPAIR TABLE -kyselyn aikana tai luotaessa indeksej� CREATE INDEX - tai ALTER TABLE -kyselyll�.";
$strMyISAMSortBufferSize = "Lajittelupuskurin koko";
$strMySQLCharset = 'MySQL-palvelimen merkist�';
$strMysqlClientVersion = 'MySQL-asiakasversio';
$strMySQLConnectionCollation = 'MySQL-yhteyden aakkosj�rjestys';
$strMySQLSaid = 'MySQL ilmoittaa: ';
$strMySQLShowProcess = 'N�yt� prosessit';
$strMySQLShowStatus = 'N�yt� MySQL-palvelimen ajonaikaiset tiedot';
$strMySQLShowVars = 'N�yt� MySQL-palvelimen j�rjestelm�muuttujat';

$strName = 'Nimi';
$strNext = 'Seuraava';
$strNoActivity = 'Yhteys on ollut toimettomana %s sekuntia tai enemm�n. Kirjaudu sis��n uudestaan.';
$strNoDatabases = 'Ei tietokantoja';
$strNoDatabasesSelected = 'Et valinnut yht��n tietokantaa.';
$strNoDataReceived = 'Mit��n tietoa ei ole saatu tuotavaksi. Joko mit��n tiedostonime� ei annettu tai tiedoston koko ylitti PHP:n asetusten salliman enimm�iskoon. Katso FAQ 1.16.';
$strNoDescription = 'ei kuvausta';
$strNoDetailsForEngine = "T�m�n tallennustilamoottorin tilasta ei ole saatavilla tarkkoja tietoja.";
$strNoDropDatabases = '"DROP DATABASE" -kyselyjen k�ytt� on estetty.';
$strNo = 'Ei';
$strNoExplain = '�l� selit� SQL-kysely�';
$strNoFilesFoundInZip = 'ZIP-paketista ei l�ytynyt yht��n tiedostoa!';
$strNoFrames = 'phpMyAdmin toimii parhaiten <b>kehyksi�</b> tukevalla selaimella.';
$strNoIndex = 'Indeksi� ei ole m��ritelty!';
$strNoIndexPartsDefined = 'Indeksin osia ei ole m��ritelty!';
$strNoModification = 'Ei muutoksia';
$strNone = 'Ei mit��n';
$strNoOptions = 'T�lle tiedostomuodolle ei ole valinta-asetuksia';
$strNoPassword = 'Ei mit��n salasanaa';
$strNoPermission = 'Internet-palvelimella ei ole lupaa tallentaa tiedostoa %s.';
$strNoPhp = 'K�tke PHP-koodi';
$strNoPrivileges = 'Ei k�ytt�oikeuksia';
$strNoRights = 'Sinulla ei ole tarpeeksi oikeuksia!';
$strNoRowsSelected = 'Ei yht��n rivi� valittu';
$strNoSpace = 'Liian v�h�n tilaa tiedoston %s tallentamiseen.';
$strNoTablesFound = 'Tietokannassa ei ole tauluja.';
$strNoThemeSupport = 'Ei tukea teemojen k�ytt��n. Tarkista asetukset ja/tai teemasi hakemistosta %s.';
$strNotNumber = 'T�m� ei ole numero!';
$strNotOK = 'Ei kunnossa';
$strNotSet = '<b>%s</b>-taulua ei l�ytynyt tai sit� ei ole m��ritelty %s-tiedostossa';
$strNoUsersFound = 'K�ytt�ji� ei l�ytynyt.';
$strNoValidateSQL = '�l� tarkista SQL-kysely�';
$strNull = 'Tyhj�';
$strNumberOfFields = 'Kenttien m��r�';
$strNumberOfTables = 'Taulujen m��r�';
$strNumSearchResultsInTable = '%s hakutulosta taulussa <i>%s</i>';
$strNumSearchResultsTotal = '<b>Yhteens�:</b> <i>%s</i> hakutulosta';
$strNumTables = 'Taulut';

$strOK = 'Kunnossa';
$strOpenDocumentSpreadsheet = 'Open Document Spreadsheet';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Avaa uusi phpMyAdmin-ikkuna';
$strOperations = 'Toiminnot';
$strOperator = 'Operaattori';
$strOptimizeTable = 'Optimoi taulu';
$strOptions = 'Valinnat';
$strOr = 'Tai';
$strOverhead = 'Ylij��m�';
$strOverwriteExisting = 'Korvaa jo olemassaoleva(t) tiedosto(t)';

$strPageNumber = 'Sivunumero:';
$strPagesToBeFlushed = "Siistimist� vaativat sivut";
$strPaperSize = 'Paperin koko';
$strPartialImport = 'Osittainen tuonti';
$strPartialText = 'Lyhennetyt tekstit';
$strPasswordChanged = 'Salasanan vaihto k�ytt�j�lle %s onnistui.';
$strPasswordEmpty = 'Salasana puuttuu!';
$strPasswordHashing = 'Salasanan salaus';
$strPasswordNotSame = 'Salasanat eiv�t ole samat!';
$strPassword = 'Salasana';
$strPdfDbSchema = 'Kaavio tietokannasta "%s" - Sivu %s';
$strPdfInvalidTblName = 'Taulua "%s" ei l�ydy!';
$strPdfNoTables = 'Ei tauluja';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Luo raportin, joka sis�lt�� yksitt�isen taulun tiedot)';
$strPDFReportTitle = 'Raportin otsikko';
$strPerHour = 'tunnissa';
$strPerMinute = 'minuutissa';
$strPerSecond = 'sekunnissa';
$strPersian = 'Persialainen';
$strPhoneBook = 'puhelinluettelo';
$strPHP40203 = 'K�yt�ss�si on PHP 4.2.3, joka sis�lt�� vakavan vian monitavuisissa merkkijonoissa (mbstring). Katso PHP:n virheraportti 19404. T�t� PHP:n versiota ei suositella k�ytett�v�ksi phpMyAdminin kanssa.';
$strPhp = 'N�yt� PHP-koodi';
$strPHPVersion = 'PHP:n versio';
$strPleaseSelectPrimaryOrUniqueKey = 'Valitse ensisijainen avain tai uniikki avain';
$strPmaDocumentation = 'phpMyAdminin dokumentaatio';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> t�ytyy m��ritell� asetustiedostossa!';
$strPmaWiki = 'phpMyAdminin wikisivusto';
$strPolish = 'Puolalainen';
$strPortrait = 'Pystytasossa';
$strPos1 = 'Alkuun';
$strPrevious = 'Edellinen';
$strPrimary = 'Ensisijainen';
$strPrimaryKeyHasBeenDropped = 'Ensisijainen avain on pudotettu';
$strPrimaryKeyName = 'Ensisijaisen avaimen nimen� pit�� olla PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" saa olla <b>vain ja ainoastaan</b> ensisijaisen avaimen nimen�!)';
$strPrint = 'Tulosta';
$strPrintViewFull = 'Tulostusversio (kokonaisin tekstein)';
$strPrintView = 'Tulostusversio';
$strPrivDescAllPrivileges = 'Sis�lt�� kaikki k�ytt�oikeudet GRANT-oikeutta lukuun ottamatta.';
$strPrivDescAlterRoutine = 'Sallii talletettujen rutiinien muuntamisen ja poistamisen.';
$strPrivDescAlter = 'Sallii muuttaa olemassaolevien taulujen rakennetta.';
$strPrivDescCreateDb = 'Sallii uusien tietokantojen ja taulujen luomisen.';
$strPrivDescCreateRoutine = 'Sallii talletettujen rutiinien luomisen.';
$strPrivDescCreateTbl = 'Sallii uusien taulujen luomisen.';
$strPrivDescCreateTmpTable = 'Sallii v�liaikaistaulujen luomisen.';
$strPrivDescCreateUser = 'Sallii k�ytt�j�tilien luomisen, poistamisen ja uudelleennime�misen.';
$strPrivDescCreateView = 'Sallii uusien n�kymien luomisen.';
$strPrivDescDelete = 'Sallii tietojen poistamisen.';
$strPrivDescDropDb = 'Sallii tietokantojen ja taulujen pudottamisen.';
$strPrivDescDropTbl = 'Sallii taulujen pudottamisen.';
$strPrivDescExecute5 = 'Sallii talletettujen rutiinien suorittamisen.';
$strPrivDescExecute = 'Sallii talletettujen proseduurien suorittamisen; Ei vaikutusta t�ss� MySQL-palvelimen versiossa.';
$strPrivDescFile = 'Sallii tietojen tuomisen tiedostosta ja viemisen tiedostoon.';
$strPrivDescGrant = 'Sallii k�ytt�jien ja k�ytt�oikeuksien lis��misen lataamatta k�ytt�oikeustauluja uudestaan.';
$strPrivDescIndex = 'Sallii indeksien luomisen ja pudottamisen.';
$strPrivDescInsert = 'Sallii tietojen lis��misen ja korvaamisen.';
$strPrivDescLockTables = 'Sallii taulujen lukitsemisen nykyiselle s�ikeelle.';
$strPrivDescMaxConnections = 'Rajoittaa k�ytt�j�n tunnissa luomien uusien yhteyksien enimm�ism��r�n tunnissa.';
$strPrivDescMaxQuestions = 'Rajoittaa k�ytt�j�n tunnissa palvelimelle l�hett�mien kyselyjen m��r�n.';
$strPrivDescMaxUpdates = 'Rajoittaa, kuinka monta monta kertaa k�ytt�j� saa suorittaa tauluihin tai tietokantoihin muutoksia tekevi� komentoja tunnin aikana.';
$strPrivDescMaxUserConnections = 'Asettaa rajan k�ytt�j�n yht�aikaisten yhteyksien m��r�lle.';
$strPrivDescProcess3 = 'Sallii muiden k�ytt�jien prosessien lopettamisen.';
$strPrivDescProcess4 = 'Sallii kokonaisten kyselyjen n�ytt�misen prosessilistassa.';
$strPrivDescReferences = 'Ei vaikutusta t�ss� MySQL-palvelimen versiossa.';
$strPrivDescReload = 'Sallii palvelinasetusten uudelleenlataamisen ja palvelimen v�limuistin tyhjent�misen.';
$strPrivDescReplClient = 'Antaa k�ytt�j�lle oikeuden kysy�, miss� ali-/p��palvelimet sijaitsevat.';
$strPrivDescReplSlave = 'Tarvitaan replikaatio-alipalvelimia varten.';
$strPrivDescSelect = 'Sallii tietojen lukemisen.';
$strPrivDescShowDb = 'Sallii koko tietokantalistan k�yt�n.';
$strPrivDescShowView = 'Sallii SHOW CREATE VIEW -kyselyjen suorittamisen.';
$strPrivDescShutdown = 'Sallii palvelimen sammuttamisen.';
$strPrivDescSuper = 'Sallii yhdist�misen silloinkin kun yhteyksien enimm�ism��r� on saavutettu; Tarvitaan useissa p��k�ytt�j�n toiminnoissa, kuten globaalien muuttujien asettamisessa ja muiden k�ytt�jien s�ikeiden lopettamisessa.';
$strPrivDescUpdate = 'Sallii tietojen muuttamisen.';
$strPrivDescUsage = 'Ei k�ytt�oikeuksia.';
$strPrivileges = 'K�ytt�oikeudet';
$strPrivilegesReloaded = 'K�ytt�oikeuksien uudelleenlataus onnistui.';
$strProcedures = 'Proseduurit';
$strProcesses = 'Prosessit';
$strProcesslist = 'Prosessilista';
$strProtocolVersion = 'Protokollan versio';
$strPutColNames = 'Laita sarakkeiden nimet ensimm�iselle riville';

$strQBEDel = 'Poista';
$strQBE = 'Haku';
$strQBEIns = 'Lis��';
$strQueryCache = 'Kyselyv�limuisti';
$strQueryFrame = 'Kyselyikkuna';
$strQueryOnDb = 'Suorita SQL-kysely tietokannassa <b>%s</b>:';
$strQueryResultsOperations = 'Kyselytulosten toimenpiteet';
$strQuerySQLHistory = 'SQL-historia';
$strQueryStatistics = '<b>Kyselytilastot</b>: T�lle palvelimelle on l�hetetty viime k�ynnistyksest� l�htien %s kysely�.';
$strQueryTime = 'kysely kesti %01.4f sek.';
$strQueryType = 'Kyselyn tyyppi';
$strQueryWindowLock = '�l� korvaa t�t� kysely� ikkunan ulkopuolelta';

$strReadRequests = 'Hakupyynn�t';
$strReceived = 'Vastaanotettu';
$strRecommended = 'suositeltava';
$strRecords = 'Rivit';
$strReferentialIntegrity = 'Tarkista viitteiden eheys:';
$strRefresh = 'P�ivit�';
$strRelationalSchema = 'Relaatioskeema';
$strRelationDeleted = 'Relaatio poistettu';
$strRelationNotWorking = 'Linkitettyihin tauluihin liittyv�t lis�ominaisuudet on poistettu k�yt�st�. Katso %slis�tietoja%s.';
$strRelationsForTable = 'RELAATIOT TAULULLE';
$strRelations = 'Relaatiot';
$strRelationView = 'Relaation�kym�';
$strReloadingThePrivileges = 'Ladataan k�ytt�oikeuksia uudelleen';
$strReload = 'Lataa uudelleen';
$strReloadPrivileges = 'Lataa k�ytt�oikeudet uudelleen';
$strRemoveSelectedUsers = 'Poista valitut k�ytt�j�t';
$strRenameDatabaseOK = 'Tietokannan %s uusi nimi on nyt %s';
$strRenameTable = 'Nime� taulu uudelleen';
$strRenameTableOK = 'Taulun %s nimi on nyt %s';
$strRepairTable = 'Korjaa taulu';
$strReplaceNULLBy = 'Korvaa NULL-merkki t�ll�:';
$strReplaceTable = 'Korvaa taulun nykyiset rivit tiedostolla';
$strReplication = 'Replikaatio';
$strReset = 'Nollaa';
$strResourceLimits = 'Resurssirajoitukset';
$strReType = 'Kirjoita uudelleen';
$strRevokeAndDeleteDescr = 'K�ytt�jill� on USAGE-k�ytt�oikeus siihen asti, kun k�ytt�oikeudet ladataan uudelleen.';
$strRevokeAndDelete = 'Pura kaikki k�ytt�j�n aktiiviset k�ytt�oikeudet, ja poista ne sen j�lkeen.';
$strRevokeMessage = 'Olet peruuttanut k�ytt�j�n %s k�ytt�oikeudet';
$strRevoke = 'Mit�t�i';
$strRomanian = 'Romanialainen';
$strRowLength = 'Rivin pituus';
$strRowsFrom = 'rivi� alkaen rivist�';
$strRowSize = ' Rivin koko ';
$strRows = 'Kpl rivej�';
$strRowsModeFlippedHorizontal = 'vaakatasossa (kierretyt otsikot)';
$strRowsModeHorizontal = 'vaakasuorassa';
$strRowsModeOptions = '%s, otsikoita toistetaan %s:n rivin v�lein';
$strRowsModeVertical = 'pystysuorassa';
$strRowsStatistic = 'Rivitilastot';
$strRunning = 'palvelimella %s';
$strRunQuery = 'Suorita';
$strRunSQLQueryOnServer = 'Suorita SQL-kysely(j�) palvelimella %s';
$strRunSQLQuery = 'Suorita SQL-kyselyj� tietokannassa %s';
$strRussian = 'Ven�l�inen';

$strSaveOnServer = 'Tallenna palvelimelle hakemistoon %s';
$strSavePosition = 'Tallenna sijainti';
$strSave = 'Tallenna';
$strScaleFactorSmall = 'Kaavio ei mahdu yhdelle sivulle t�ll� skaalauksella';
$strSearch = 'Etsi';
$strSearchFormTitle = 'Hae tietokannasta';
$strSearchInTables = 'Tauluista:';
$strSearchNeedle = 'Haettavat sanat tai arvot (%-merkki� voi k�ytt�� jokerimerkkin�):';
$strSearchOption1 = 'v�hint��n yksi sanoista';
$strSearchOption2 = 'kaikki sanat';
$strSearchOption3 = 'koko lause';
$strSearchOption4 = 'regexp-haku';
$strSearchResultsFor = 'Tulokset hakusanalla "<i>%s</i>" %s:';
$strSearchType = 'Hae:';
$strSecretRequired = 'Asetustiedosto vaatii nyt salalausetta (blowfish_secret).';
$strSelectADb = 'Valitse tietokanta';
$strSelectAll = 'Valitse kaikki';
$strSelectBinaryLog = 'Valitse n�ytett�v� bin��riloki';
$strSelectFields = 'Valitse sarakkeet (v�hint��n yksi):';
$strSelectForeignKey = 'Valitse vieras avain';
$strSelectNumRows = 'lauseessa';
$strSelectReferencedKey = 'Valitse viittaava avain';
$strSelectTables = 'Valitse taulut';
$strSend = 'Tallenna tiedostoon';
$strSent = 'L�hetetty';
$strServerChoice = 'Valitse palvelin';
$strServerNotResponding = 'Palvelin ei vastaa';
$strServer = 'Palvelin';
$strServers = 'Palvelimet';
$strServerStatus = 'Ajonaikaiset tiedot';
$strServerStatusDelayedInserts = 'Viiv�stetyt insert-lauseet';
$strServerStatusUptime = 'T�m� MySQL-palvelin on ollut k�ynniss� %s. Se k�ynnistettiin %s.';
$strServerTabVariables = 'Muuttujat';
$strServerTrafficNotes = '<b>Palvelinliikenne</b>: N�m� taulukot n�ytt�v�t t�m�n MySQL-palvelimen verkkoliikennetilastot k�ynnistyksest� l�htien.';
$strServerVars = 'Palvelimen muuttujat ja asetukset';
$strServerVersion = 'Palvelimen versio';
$strSessionStartupErrorGeneral = 'Istuntoa ei voida aloittaa virheitt�. Tarkista PHP:n tai verkkopalvelimesi lokitiedostojen antamat virheilmoitukset ja valitse PHP-asennuksen asetukset oikein.';
$strSessionValue = 'T�m�n istunnon arvo';
$strSetEnumVal = 'Jos sarakkeen tietotyyppi on "enum" tai "set", sy�t� vaaditut arvot t�ss� muodossa: \'a\',\'b\',\'c\'...<br />Jos tarvitset arvoissa kenoviivaa ("\") tai heittomerkki� ("\'"), laita merkin eteen kenoviiva (esim. \'\\\\xyz\' tai \'a\\\'b\').';
$strShowAll = 'N�yt� kaikki';
$strShowColor = 'N�yt� v�rit';
$strShowDatadictAs = 'Datasanakirjan formaatti';
$strShowFullQueries = 'N�yt� kyselyt kokonaisuudessaan';
$strShowGrid = 'N�yt� ruudukko';
$strShowHideLeftMenu = 'N�yt�/k�tke vasen valikko';
$strShowingBookmark = 'N�ytet��n kirjanmerkki';
$strShowingPhp = 'N�ytet��n PHP-koodina';
$strShowingRecords = 'N�kyvill� rivit ';
$strShowingSQL = 'N�ytet��n SQL-kysely';
$strShow = 'N�yt�';
$strShowOpenTables = 'N�yt� avoimet taulut';
$strShowPHPInfo = 'N�yt� PHP:n asetustiedot';
$strShowSlaveHosts = 'N�yt� alipalvelimet';
$strShowSlaveStatus = 'N�yt� alipalvelimen tila';
$strShowStatusBinlog_cache_disk_useDescr = 'Kertoo tilap�ist� bin��rilokiv�limuistia k�ytt�neiden transaktioiden (tapahtumien) m��r�n, mutta jotka ovat ylitt�neet "binlog_cache_size"-muuttujan arvon ja k�ytt�neet v�liaikaistiedostoa transaktiokyselyjen tallentamiseen.';
$strShowStatusBinlog_cache_useDescr = 'V�liaikaista bin��rilokiv�limuistia k�ytt�neiden transaktioiden (tapahtumien) m��r�.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Kertoo, kuinka paljon palvelimen automaattisesti luomia tilap�istauluja on levyll�. Jos Created_tmp_disk_tables-parametrin arvo on liian suuri, nosta tmp_table_size:n arvoa, jotta v�liaikaisia tauluja s�ilytett�isiin muistissa eik� levyll�.';
$strShowStatusCreated_tmp_filesDescr = 'Mysqld-palvelun luomien v�liaikaistiedostojen m��r�.';
$strShowStatusCreated_tmp_tablesDescr = 'Kertoo, kuinka monta tilap�istaulua palvelin on itsest��n luonut muistiin kyselyj� suorittaessaan.';
$strShowStatusDelayed_errorsDescr = 'Virheen aiheuttaneiden INSERT DELAYED -kyselyll� kirjoitettujen rivien m��r� (virheen� todenn�k�isesti p��llekk�inen avain).';
$strShowStatusDelayed_insert_threadsDescr = 'K�yt�ss� olevien INSERT DELAYED -k�sittelij�s�ikeiden m��r�. Joka ikinen INSERT DELAYED -kysely� k�ytt�v� taulu saa k�ytt��ns� oman s�ikeens�.';
$strShowStatusDelayed_writesDescr = 'INSERT DELAYED -rivien kirjoituksia.';
$strShowStatusFlush_commandsDescr  = 'FLUSH-kyselyj� suoritettu.';
$strShowStatusHandler_commitDescr = 'Sis�isten COMMIT-kyselyjen m��r�.';
$strShowStatusHandler_deleteDescr = 'Kertoo, kuinka monta kertaa taulusta on poistettu rivi.';
$strShowStatusHandler_discoverDescr = 'MySQL-palvelin voi kysy� NDB Cluster -tallennustilamoottorilta, tunteeko se tietyn nimisen taulun. T�t� toimintoa kutsutaan todentamiseksi (discovery). Handler_discover ilmaisee todennettujen taulujen m��r�n.';
$strShowStatusHandler_read_firstDescr = 'Kertoo, kuinka monta kertaa ensimm�ist� kohtaa on luettu indeksist�. Jos t�m� on suuri, se kertoo siit�, ett� palvelin suorittaa runsaasti kokonaisia indeksien l�pik�yntej�; esimerkiksi SELECT col1 FROM foo, olettaen col1:sen olevan indeksoitu sarake.';
$strShowStatusHandler_read_keyDescr = 'Kertoo, kuinka monta kertaa rivej� on luettu avaimen perusteella. Jos t�m� on suuri, se kertoo siit�, ett� kyselyjesi ja taulujesi indeksointi suoritetaan oikein.';
$strShowStatusHandler_read_nextDescr = 'Kertoo niiden pyynt�jen m��r�n, jotka lukevat seuraavan rivin avainj�rjestyksess�. T�m�n arvo kasvaa suorittaessasi kyselyj� indeksisarakkeeseen aluerajoitetta k�ytt�en tai suorittaessasi indeksihaun.';
$strShowStatusHandler_read_prevDescr = 'Kertoo niiden pyynt�jen m��r�n, jotka lukevat edellisen rivin avainj�rjestyksess�. T�t� lukumenetelm�� k�ytet��n l�hinn� ORDER BY ... DESC -kyselyll� optimoimiseen.';
$strShowStatusHandler_read_rndDescr = 'Kertoo niiden pyynt�jen m��r�n, jotka lukevat rivin kiinte�n sijainnin perusteella. T�m� on suuri, jos suoritat paljon kyselyj�, jotka edellytt�v�t tulostietojen lajittelua. K�yt�t ehk� runsaasti sellaisia kyselyj�, jotka edellytt�v�t MySQL-palvelinta k�ym��n l�pi kaikki taulut, tai virheellisesti avaimia k�ytt�vi� liitoksia.';
$strShowStatusHandler_read_rnd_nextDescr = 'Kertoo, kuinka usein pyynn�ill� on luettu seuraava rivi datatiedostosta. T�m� on suuri, jos k�yt l�pi paljon kokonaisia tauluja. T�m� luku kertoo yleens� siit�, ett� taulujasi ei ole indeksoitu oikein tai ett� kyselyj� ei ole kirjoitettu siten, ett� ne hy�dynt�isiv�t luomiasi indeksej�.';
$strShowStatusHandler_rollbackDescr = 'Sis�isten ROLLBACK-kyselyjen m��r�.';
$strShowStatusHandler_updateDescr = 'Taulun rivien p�ivityspyynt�jen m��r�.';
$strShowStatusHandler_writeDescr = 'Kertoo tauluihin sijoitettujen (INSERT) rivien m��r�n.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Jotakin dataa (ep�siisti� tai siisti�) sis�lt�vien sivujen m��r�';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'T�ll� hetkell� ep�siistin� olevien sivujen m��r�.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Siistitt�viksi pyydettyjen, puskurivarannossa olevien sivujen m��r�.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Vapaiden sivujen m��r�.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'InnoDB-puskurivarannon lukittujen sivujen m��r�. N�m� ovat sivuja, joita parhaillaan luetaan tai kirjoitetaan tai joita ei voida poistaa tai joiden v�limuistia ei voida tyhjent�� syyst� tai toisesta.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Kertoo niiden sivujen m��r�n, jotka ovat k�yt�ss� administratiivisen ylij��m�n, kuten rivinlukitusten tai mukautuvien salausindeksien, varaamisen takia. T�m� arvo voidaan laskea n�inkin: Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Puskurivarannon kokonaiskoko sivuina.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'InnoDB:n alulle panemien umpim�hk�isten ennakkolukutapausten m��r�. T�m� tapahtuu silloin kun suoritetaan kysely, joka k�y l�pi suuria alueita taulusta umpim�hk�isess� j�rjestyksess�.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'InnoDB:n alulle panemien per�tt�isten ennakkolukutapausten m��r�. T�m� tapahtuu silloin kun InnoDB k�y l�pi kokonaisen taulun j�rjestyksess�.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'InnoDB:n suorittamien loogisten lukupyynt�jen m��r�.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Kertoo niiden loogisten lukukertojen m��r�n, joita InnoDB ei voinut toteuttaa puskurivarannosta joutuen lukemaan yhden sivun kerrallaan.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Yleens� InnoDB-puskurivarannon kirjoituspyynn�t suoritetaan taustalla. Jos kuitenkin on luettava tai luotava sivu, ja puhtaita sivuja ei ole saatavilla, joudutaan odottamaan sivujen tyhjent�mist�. T�m� laskuri laskee t�llaisten odotustapausten m��r�n. Jos puskurivarannon koko on asetettu sopivaksi, t�m�n arvon pit�isi olla alhainen.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'InnoDB:n puskurivarantoon tehtyjen kirjoituspyynt�jen m��r�.';
$strShowStatusInnodb_data_fsyncsDescr = 'fsync()-toimenpiteit� t�h�n menness�.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'T�ll� hetkell� k�ynniss� olevien fsync()-toimenpiteiden m��r�.';
$strShowStatusInnodb_data_pending_readsDescr = 'T�ll� hetkell� k�ynniss� olevien lukutoimenpiteiden m��r�.';
$strShowStatusInnodb_data_pending_writesDescr = 'T�ll� hetkell� k�ynniss� olevien kirjoitustoimenpiteiden m��r�.';
$strShowStatusInnodb_data_readDescr = 'T�h�n menness� luetun tiedon m��r� tavuina.';
$strShowStatusInnodb_data_readsDescr = 'Kertoo, kuinka monta kertaa tietoja on luettu yhteens�.';
$strShowStatusInnodb_data_writesDescr = 'Kertoo, kuinka monta kertaa tietoja on kirjoitettu yhteens�.';
$strShowStatusInnodb_data_writtenDescr = 'Kertoo, kuinka paljon on t�h�n menness� tietoja kirjoitettu (tavuina).';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Suoritettujen p��llekk�isten kirjoitustapausten m��r� ja t�t� varten kirjoitettujen sivujen m��r�.';
$strShowStatusInnodb_dblwr_writesDescr = 'Suoritettujen p��llekk�isten kirjoitustapausten m��r� ja t�t� varten kirjoitettujen sivujen m��r�.';
$strShowStatusInnodb_log_waitsDescr = 'Liian pienest� lokipuskurista johtuneiden odotusten m�r�, jolloin puskurin tyhjent�mist� jouduttiin odottamaan ennen jatkamista.';
$strShowStatusInnodb_log_write_requestsDescr = 'Lokikirjoituspyynt�jen m��r�.';
$strShowStatusInnodb_log_writesDescr = 'Kertoo, kuinka monta kertaa lokitiedostoon on fyysisesti kirjoitettu.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Lokitiedostojen fsync()-kirjoitusten m��r�.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Lokitiedoston avointen fsync-synkronointien m��r�.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Avoimet lokitiedostokirjoitukset.';
$strShowStatusInnodb_os_log_writtenDescr = 'Lokitiedostoon kirjoitettujen tavujen m��r�.';
$strShowStatusInnodb_pages_createdDescr = 'Luotujen sivujen m��r�.';
$strShowStatusInnodb_page_sizeDescr = 'InnoDB-sivun esiohjelmoitu koko (oletusarvoisesti se on 16 kt). Useita arvoja lasketaan sivuina; sivukoon avulla voidaan helposti laskea niiden koko tavuina.';
$strShowStatusInnodb_pages_readDescr = 'Luettujen rivien m��r�.';
$strShowStatusInnodb_pages_writtenDescr = 'Kirjoitettujen sivujen m��r�.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'T�ll� hetkell� odotettavien rivilukitusten m��r�.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Rivilukituksen valmistumiseen kuluva aika keskim��rin, millisekunteina.';
$strShowStatusInnodb_row_lock_timeDescr = 'Rivilukitusten valmistumiseen kuluva aika kaikkinansa, millisekunteina.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Rivilukituksen valmistumiseen kulunut aika enimmill��n, millisekunteina.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Kertoo, kuinka monta kertaa rivilukitusta on jouduttu odottamaan.';
$strShowStatusInnodb_rows_deletedDescr = 'InnoDB-tauluista poistettujen rivien m��r�.';
$strShowStatusInnodb_rows_insertedDescr = 'InnoDB-tauluihin lis�ttyjen rivien m��r�.';
$strShowStatusInnodb_rows_readDescr = 'InnoDB-taulusta luettujen rivien m��r�.';
$strShowStatusInnodb_rows_updatedDescr = 'InnoDB-taulun p�ivitettyjen rivien m��r�.';
$strShowStatusKey_blocks_not_flushedDescr = 'Niiden avainv�limuistissa sijaitsevien avainlohkojen m��r�, joihin on tehty muutoksia, mutta joita ei viel� ole tallennettu levylle. T�m� toiminto tunnetaan yleisesti nimell� Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Avainv�limuistissa sijaitsevien k�ytt�m�tt�mien lohkojen m��r�. T�m�n arvon avulla voit m��ritt��, kuinka paljon avainv�limuistia halutaan olevan k�yt�ss�.';
$strShowStatusKey_blocks_usedDescr = 'Samaan aikaan avainv�limuistissa olleiden lohkojen m��r� korkeintaan.';
$strShowStatusKey_read_requestsDescr = 'Kertoo, kuinka monta pyynt�� on suoritettu avainlohkon hakemiseksi v�limuistista.';
$strShowStatusKey_readsDescr = 'Kertoo, kuinka monta kertaa levylt� on fyysisesti luettu avainlohkoja. Jos Key_reads-arvo on suuri, key_buffer_size-muuttujaan on ehk� asetettu liian alhainen arvo. V�limuistin k�ytt�tahti voidaan laskea lausekkeella Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Kertoo, kuinka monta kertaa v�limuistiin on kirjoitettu avainlohko.';
$strShowStatusKey_writesDescr = 'Kertoo, kuinka monta kertaa levylle on fyysisesti kirjoitettu avainlohko.';
$strShowStatusLast_query_costDescr = 'Viimeksi kootun (compiled) kyselyn kokonaiskulut kyselynoptimoija laskemana. Hy�dyllinen suunniteltaessa erilaisia kyselyvaihtoehtoja samaa kysely� varten. Oletusarvo 0 tarkoittaa, ett� yht��n kysely� ei ole viel� koottu.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Niiden rivien m��r�, joita odotetaan kirjoitettavan INSERT DELAYED -jonoissa.';
$strShowStatusOpened_tablesDescr = 'Avattujen taulujen m��r�. Jos m��r� on suuri, tauluv�limuistin arvo saattaa olla liian alhainen.';
$strShowStatusOpen_filesDescr = 'Avoinna olevien tiedostojen m��r�.';
$strShowStatusOpen_streamsDescr = 'Avoinna olevien voiden m��r� (k�ytet��n enimm�kseen kirjausta varten).';
$strShowStatusOpen_tablesDescr = 'Avoinna olevien taulujen m��r�.';
$strShowStatusQcache_free_blocksDescr = 'Vapaitten muistilohkojen m��r� kyselyv�limuistissa.';
$strShowStatusQcache_free_memoryDescr = 'Kyselyv�limuistin vapaan muistin m��r�.';
$strShowStatusQcache_hitsDescr = 'V�limuistiosumien m��r�.';
$strShowStatusQcache_insertsDescr = 'V�limuistiin sijoitettujen kyselyjen m��r�.';
$strShowStatusQcache_lowmem_prunesDescr = 'Niiden kyselyjen m��r�, jotka on poistettu v�limuistista muistin vapauttamiseksi, uusien kyselyjen tallentamiseksi v�limuistiin. T�m�n tiedon avulla voit asettaa kyselyv�limuistin koon sopivaksi. Kyselyv�limuisti k�ytt�� LRU- eli "viimeksi v�hiten k�ytetyt" -toimintamallia p��tt��kseen, mitk� kyselyt poistetaan v�limuistista.';
$strShowStatusQcache_not_cachedDescr = 'Niiden kyselyjen m��r�, joita ei ole tallennettu v�limuistiin (ei ole voitu tallentaa v�limuistiin tai ei muuten vain ole tallennettu sinne query_cache_type-asetuksen takia).';
$strShowStatusQcache_queries_in_cacheDescr = 'Rekister�ityjen kyselyjen m��r� v�limuistissa.';
$strShowStatusQcache_total_blocksDescr = 'Lohkojen kokonaism��r� kyselyv�limuistissa.';
$strShowStatusReset = 'Nollaa';
$strShowStatusRpl_statusDescr = 'Replikaation vikasietotila (ei viel� toteutettu).';
$strShowStatusSelect_full_joinDescr = 'Kertoo, kuinka moni liitos ei k�yt� indeksej�. Jos t�m� arvo ei ole 0, sinun tulisi tarkistaa taulujesi indeksit tarkkaan.';
$strShowStatusSelect_full_range_joinDescr = 'Niiden liitosten m��r�, jotka k�yttiv�t viitetaulussa (reference table) aluehakua.';
$strShowStatusSelect_range_checkDescr = 'Niiden avaimittomien liitosten m��r�, jotka varmistavat avaimien k�yt�n joka rivin j�lkeen. (Jos t�m� ei ole 0, sinun tulisi tarkistaa taulujesi indeksit huolella.)';
$strShowStatusSelect_rangeDescr = 'Kertoo niiden liitosten m��r�n, jotka k�ytt�v�t rajausta ensimm�isess� taulussa. (Yleens� ei ole vakavaa, vaikka t�m� arvo olisi suuri.)';
$strShowStatusSelect_scanDescr = 'Kertoo niiden liitosten m��r�n, jotka suorittivat ensimm�isest� taulusta t�ydellisen tarkistuksen.';
$strShowStatusSlave_open_temp_tablesDescr = 'SQL-alis�ikeen avointen v�liaikaistaulujen m��r� t�ll� hetkell�.';
$strShowStatusSlave_retried_transactionsDescr = 'Kertoo, kuinka monesti replikaation SQL-alis�ie on kaikkiaan uudelleen yritt�nyt transkatioita k�ynnistyksest� l�htien.';
$strShowStatusSlave_runningDescr = 'T�m� on p��ll� (ON), mik�li kyseinen palvelin on p��palvelimeen kytketty alipalvelin.';
$strShowStatusSlow_launch_threadsDescr = 'Niiden s�ikeiden m��r�, joiden luomiseen on kulunut aikaa enemm�n kuin slow_launch_time sekuntia.';
$strShowStatusSlow_queriesDescr = 'Niiden kyselyjen m��r�, joiden suorittamiseen on kulunut aikaa enemm�n kuin long_query_time sekuntia.';
$strShowStatusSort_merge_passesDescr = 'Lajittelualgoritmiin tarvittavien yhdentymisten (eng. merge) m��r�. Jos t�m� arvo on suuri, voit suurentaa sort_buffer-muuttujan arvoa.';
$strShowStatusSort_rangeDescr = 'Alueiden (ranges) kanssa suoritettujen lajittelujen m��r�.';
$strShowStatusSort_rowsDescr = 'Lajiteltujen rivien m��r�.';
$strShowStatusSort_scanDescr = 'Niiden lajittelutoimenpiteiden m��r�, jotka on suoritettu k�ym�ll� taulu l�pi.';
$strShowStatusTable_locks_immediateDescr = 'Kertoo, kuinka monesti taulu on saatu lukittua heti.';
$strShowStatusTable_locks_waitedDescr = 'Kertoo, kuinka monesti taulua ei ole saatu heti lukittua ja on jouduttu odottamaan. Jos t�m� on suuri, ja suorituskyvyn kanssa on ongelmia, on hyv� ensin optimoida kyselyj� ja sitten joko jakaa taulusi useampaan osaan tai k�ytt�� hy�dyksi replikaatiota.';
$strShowStatusThreads_cachedDescr = 'S�iev�limuistissa sijaitsevien s�ikeiden m��r�. V�limuistin k�ytt�tahti voidaan laskea n�in kaavalla Threads_created/yhteyksien lkm. Jos t�m� arvo on punainen, thread_cache_size-muuttujan arvoa tulisi nostaa.';
$strShowStatusThreads_connectedDescr = 'T�ll� hetkell� avoinna olevien yhteyksien m��r�.';
$strShowStatusThreads_createdDescr = 'Yhteyksien k�sittely� varten luotujen s�ikeiden m��r�. Jos Threads_created on suuri, kannattaa kasvattaa thread_cache_size-muuttujan arvoa. (Mik�li s�ikeet on toteutettu hyvin, t�ll� ei ole kovin suurta vaikutusta suorituskykyyn.)';
$strShowStatusThreads_runningDescr = 'Hereill� olevien s�ikeiden m��r�.';
$strShowTableDimension = 'N�yt� taulujen ulottuvuus';
$strShowTables = 'N�yt� taulut';
$strShowThisQuery = ' N�yt� kyselylause uudelleen ';
$strSimplifiedChinese = 'Yksinkertaistettu kiina';
$strSingly = '(yksitellen)';
$strSize = 'Koko';
$strSkipQueries = 'Tiedoston alusta ohitettavien tietueiden (kyselyjen) m��r�';
$strSlovak = 'Slovakialainen';
$strSlovenian = 'Slovenialainen';
$strSmallBigAll = 'Kaikki pienen�/suurena';
$strSnapToGrid = 'Sovita ruudukkoon';
$strSocketProblem = "(tai paikallisen MySQL-palvelimen sockettia ei ole konfiguroitu oikein)";
$strSortByKey = 'Lajittele avaimen mukaan';
$strSorting = 'Lajittelu';
$strSort = 'J�rjestys';
$strSpaceUsage = 'Levytilan k�ytt�';
$strSpanish = 'Espanjalainen';
$strSplitWordsWithSpace = 'Sanat erotellaan v�lily�nnill�.';
$strSQLCompatibility = 'SQL-yhteensopiva tila';
$strSQLExportType = 'Vientityyppi';
$strSQLParserBugMessage = 'Olet mahdollisesti l�yt�nyt ohjelmointivirheen SQL-parserista. Tarkista SQL-lauseesi, erityisesti lainausmerkit merkkijonojen alusta ja lopusta. Toinen mahdollinen virheen aiheuttaja on se, ett� olet siirt�m�ss� tiedostoa, jossa on bin��ritietoa lainausmerkkien ulkopuolella. Jos mahdollista, kokeile SQL-lausettasi suoraan komentorivilt�. MySQL-palvelimen antama virheilmoitus n�kyy alla, mik�li se sellaisen antoi. Jos lause toimi komentorivilt�, mutta ei phpMyAdminista, etsi se rivi jolla virheilmoitus ilmeni ja l�het� meille virheraportti, johon liit�t alla olevan koodin:';
$strSQLParserUserError = 'SQL-lauseessasi n�ytt�� olevan jokin virhe. MySQL-palvelimen antama virheilmoitus n�kyy alla, mik�li palvelin sellaisen antoi.';
$strSQLQuery = 'SQL-kysely';
$strSQLResult = 'SQL-kyselyn tulos';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Tunniste ei kelpaa';
$strSQPBugUnclosedQuote = 'Toinen lainausmerkki puuttuu merkkijonon lopusta';
$strSQPBugUnknownPunctuation = 'Tuntematon v�limerkki';
$strStandInStructureForView = 'N�kym�n sijaisrakenne';
$strStatCheckTime = 'Viimeksi tarkistettu';
$strStatCreateTime = 'Luotu';
$strStatement = 'Tieto';
$strStatisticsOverrun = 'Ruuhkaisten palvelinten tavulaskurit saattavat ylivuotaa, joten MySQL-palvelimen ilmoittamat tilastotiedot saattavat olla virheellisi�.';
$strStatUpdateTime = 'Viimeksi p�ivitetty';
$strStatus = 'Tila';
$strStorageEngines = "Tallennustilamoottorit";
$strStorageEngine = "Tallennustilamoottori";
$strStrucCSV = 'CSV-muotoista tietoa';
$strStrucData = 'Rakenne ja tiedot';
$strStrucExcelCSV = 'MS Excelin CSV-muoto';
$strStrucNativeExcel = 'Natiivi MS Excel -tieto';
$strStrucOnly = 'Vain rakenne';
$strStructPropose = 'Esit� taulun rakenne';
$strStructureForView = 'N�kym�n rakenne';
$strStructure = 'Rakenne';
$strSubmit = 'L�het�';
$strSuccess = 'SQL-kysely suoritettu onnistuneesti';
$strSum = 'Summa';
$strSwedish = 'Ruotsalainen';
$strSwitchToDatabase = 'Siirry kopioituun tietokantaan';
$strSwitchToTable = 'Siirry kopioituun tauluun';

$strTableAlreadyExists = 'Taulu %s on jo olemassa!';
$strTableComments = 'Taulun kommentit';
$strTableEmpty = 'Taulun nimi puuttuu!';
$strTableHasBeenDropped = 'Taulu %s on pudotettu';
$strTableHasBeenEmptied = 'Taulu %s on tyhjennetty';
$strTableHasBeenFlushed = 'Taulun %s v�limuisti on tyhjennetty';
$strTableIsEmpty = 'Taulu on tyhj�!';
$strTableMaintenance = 'Taulun huolto';
$strTableName = 'Taulun nimi';
$strTableOfContents = 'Sis�llysluettelo';
$strTableOptions = 'Taulun valinnat';
$strTables = '%s taulu(a)';
$strTableStructure = 'Rakenne taululle';
$strTable = 'Taulu';
$strTakeIt = 'k�yt� t�t�';
$strTblPrivileges = 'Taulukohtaiset k�ytt�oikeudet';
$strTempData = 'V�liaikaista tietoa';
$strTextAreaLength = ' Pituudestaan johtuen<br /> t�t� saraketta ei ehk� voi muokata ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'Oletusteemaa %s ei l�ydy!';
$strThemeNoPreviewAvailable = 'Esikatselu ei ole saatavilla.';
$strThemeNotFound = 'Teemaa %s ei l�ydy!';
$strThemeNoValidImgPath = 'Kelvollista polkua teemalle %s ei l�ytynyt.';
$strThemePathNotFound = 'Teeman %s polkua ei l�ydy!';
$strTheme = 'Teema/tyyli';
$strThisHost = 'T�m� is�nt�';
$strThreads = 'S�ikeet';
$strThreadSuccessfullyKilled = 'S�ikeen %s lopetus onnistui.';
$strTime = 'Aika';
$strTimeoutInfo = 'Edellinen tuonti keskeytyi aikakatkaisuun; l�hetetty�si tiedoston uudestaan jatkamme kohdasta %d.';
$strTimeoutNothingParsed = 'Viimeisest� suorituskerrasta huolimatta mit��n tietoa ei ole j�sennelty; t�m� tarkoittaa yleens� sit�, ett� phpMyAdmin ei voi suorittaa t�t� tuontia loppuun asti, ellei php:n suoritusaikarajaa kasvateta.';
$strTimeoutPassed = 'Skriptin suoritus aikakatkaistiin; jos haluat suorittaa tuonnin loppuun saakka, l�het� sama tiedosto uudestaan, ja tuomista voidaan jaktaa.';
$strToFromPage = 'Sivulta/sivulle';
$strToggleScratchboard = 'N�yt�/k�tke luonnosp�yt� (scratchboard)';
$strToggleSmallBig = 'Vaihda pieneksi/suureksi';
$strToSelectRelation = 'Valitaksesi relaation, paina :';
$strTotalUC = 'Yhteens�';
$strTotal = 'yhteens�';
$strTraditionalChinese = 'Perinteinen kiina';
$strTraditionalSpanish = 'Perinteinen espanja';
$strTraffic = 'Liikenne';
$strTransactionCoordinator = 'Transaktion (tapahtuman) koordinaattori';
$strTransformation_application_octetstream__download = 'N�yt� linkki kent�n bin��ritiedon lataamiseen. Ensimm�inen valinta on bin��ritiedoston tiedostonimi. Toinen valinta on mahdollisen taulun rivin kentt�nimi, jolla tiedostonimi sijaitsee. Jos k�yt�t toista (2) valintaa, sinun on asetettava ensimm�inen valinta tyhj�ksi.';
$strTransformation_application_octetstream__hex = 'N�ytt�� tiedon heksalukuina. Valinnainen, ensimm�inen parametri m��rittelee, kuinka usein v�lily�nti lis�t��n (oletusarvo on 2).';
$strTransformation_image_jpeg__inline = 'N�ytt�� klikattavan pikkukuvan; valinnat: leveyden,korkeuden pikselein� (s�ilytt�� alkuper�isen suhteen)';
$strTransformation_image_jpeg__link = 'N�ytt�� linkin t�h�n kuvaan (eli suora blob-imurointi).';
$strTransformation_image_png__inline = 'Katso image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'N�ytt�� kent�n muotoiltuna p�iv�m��r�n� TIME-, TIMESTAMP-, DATETIME- tai numeerisen UNIX-aikaleiman pohjalta. Ensimm�inen valinta on aikaleimaan (oletuksena 0) lis�tt�v� siirros (tunteina). Toisella valinnalla on mahdollista m��ritt�� eri muotoinen p�iv�ysmerkkijono. Kolmas valinta m��r��, k�ytet��nk� p�iv�yksess� paikallis- vai UTC-aikaa (k�yt� "local"- tai "utc"-merkkijonoja). P�iv�yksen muodossa k�ytet��n asetuksen mukaisesti erilaista arvoa; katso ohjeet "local"-asetuksen k�yt�st� PHP:n dokumentaation strftime()-funktiosta, "utc"-asetus taas k�ytt�� gmdate()-funktiota.';
$strTransformation_text_plain__external = 'VAIN LINUXILLE: K�ynnist�� ulkoisen ohjelman ja sy�tt�� kentt�tiedot oletusarvoisen sy�tteen kautta. Palauttaa ohjelman oletusarvoisen tulosteen. Oletusarvona on Tidy, HTML-koodin tulostamiseksi siististi. Tietoturvasyist� joudut muokkaamaan k�sin tiedostoa libraries/transformations/text_plain__external.inc.php ja lis��m��n ty�kalut, joiden ajon haluat sallia. Ensimm�inen valinta on silloin haluamasi ohjelman numero ja toinen valinta m��ritt�� ohjelmalle annettavat parametrit. Kolmannen parametrin ollessa yksi (1) tuloste muunnetaan k�ytt�en htmlspecialchars()-funktiota (Oletus on 1). Nelj�nnen parametrin ollessa yksi (1) sis�lt�kennoon lis�t��n NOWRAP, jotta koko tuloste n�kyy ilman ennakkomuotoiluja (Oletus 1)';
$strTransformation_text_plain__formatted = 'S�ilytt�� kent�n alkuper�iset muotoilut. Kenoviivoja ei k�ytet� erikoismerkkien edell�.';
$strTransformation_text_plain__imagelink = 'N�ytt�� kuvan ja linkin, kentt� sis�lt�� tiedostonimen; ensimm�inen valinta on etuliite, eli esimerkiksi "http://domain.com/", toinen valinta on leveys pikselein�, kolmas on korkeus.';
$strTransformation_text_plain__link = 'N�ytt�� linkin, kentt� sis�lt�� tiedostonimen; ensimm�inen valinta on etuliite, eli esimerkiksi "http://domain.com/", toinen valinta on linkin otsikko.';
$strTransformation_text_plain__sql = 'Muotoilee SQL-kyselyn syntaksiv�rityksell�.';
$strTransformation_text_plain__substr = 'N�ytt�� vain osan merkkijonoa. Ensimm�inen valinta on tarkoitettu m��rittelem��n siirrosta, jonka kohdalta tekstin n�ytt�minen aloitetaan (Oletus: 0). Toinen valinta kertoo, kuinka monta merkki� tekstist� n�ytet��n. T�m�n ollessa tyhj� merkkijonosta n�ytet��n kaikki loput tekstit. Kolmas valinta m��rittelee, mit� merkkej� merkkijonon per��n lis�t��n sit� n�ytett�ess� (Oletus: "...") .';
$strTruncateQueries = 'N�yt� typistetyt kyselyt';
$strTurkish = 'Turkkilainen';
$strType = 'Tyyppi';

$strUkrainian = 'Ukrainalainen';
$strUncheckAll = 'Poista valinta kaikista';
$strUnicode = 'Unicode';
$strUnique = 'Uniikki';
$strUnknown = 'tuntematon';
$strUnselectAll = 'Poista valinta kaikista';
$strUnsupportedCompressionDetected = 'Yritit ladata tiedostoa, joka k�ytt�� tuntematonta pakkausmuotoa (%s). Tukea kyseiselle muodolle ei joko ole toteutettu, tai se on asetuksin poistettu k�yt�st�.';
$strUpdatePrivMessage = 'K�ytt�j�n %s k�ytt�oikeudet on p�ivitetty.';
$strUpdateProfileMessage = 'Profiili on p�ivitetty.';
$strUpdateQuery = 'P�ivit� kysely';
$strUpdComTab = 'Tarkista dokumentaatiosta, kuinka voit p�ivitt�� Column_comments-taulusi';
$strUpgrade = 'Sinun pit�isi p�ivitt�� versioon %s %s tai sit� my�hemp��n versioon.';
$strUploadErrorCantWrite = 'Tiedoston kirjoitus levylle ep�onnistui.';
$strUploadErrorExtension = 'Laajennus keskeytti tiedoston l�hetyksen.';
$strUploadErrorFormSize = 'L�hetetyn tiedoston koko ylitt�� HTML-lomakkeessa m��ritetyn MAX_FILE_SIZE-asetuksen arvon.';
$strUploadErrorIniSize = 'L�hetyn tidoston koko ylitt�� php.ini-tiedoston upload_max_filesize-asetuksen arvon.';
$strUploadErrorNoTempDir = 'Tilap�iskansio puuttuu.';
$strUploadErrorPartial = 'Tiedosto l�hetettiin vain osittain.';
$strUploadErrorUnknown = 'Tuntematon virhe tiedostoa l�hetett�ess�.';
$strUploadLimit = 'Yritit todenn�k�isesti l�hett�� palvelimelle liian suurta tiedostoa. Katso lis�tietoja %sdokumentaatiosta%s t�m�n rajoituksen muuttamiseksi.';
$strUploadsNotAllowed = 'Tiedostojen l�hetyst� ei ole sallittu t�ll� palvelimella.';
$strUsage = 'K�ytt�';
$strUseBackquotes = 'Pane taulujen ja sarakkeiden nimet lainausmerkkeihin';
$strUsedPhpExtensions = 'K�yt�ss� olevat PHP-laajennukset';
$strUseHostTable = 'K�yt� palvelintaulua';
$strUserAlreadyExists = 'K�ytt�j� %s on jo olemassa!';
$strUserEmpty = 'K�ytt�j�n nimi puuttuu!';
$strUser = 'K�ytt�j�';
$strUserName = 'K�ytt�j�nimi';
$strUserNotFound = 'Valittua k�ytt�j�� ei l�ytynyt k�ytt�oikeustaulusta.';
$strUserOverview = 'K�ytt�jien yleiskatsaus';
$strUsersDeleted = 'Valitsemiesi k�ytt�jien poisto onnistui.';
$strUsersHavingAccessToDb = 'K�ytt�j�t, joilla on oikeus k�ytt�� kohdetta &quot;%s&quot;';
$strUseTabKey = 'K�yt� arvojen v�lill� siirtymiseen sarkainta. Ctrl- ja nuolin�pp�imill� voit siirty� mihin tahansa kohtaan.';
$strUseTables = 'K�yt� tauluja';
$strUseTextField = 'K�yt� tekstikentt��';
$strUseThisValue = 'K�yt� t�t� arvoa';

$strValidateSQL = 'Tarkista SQL-kysely';
$strValidatorError = 'SQL-kelpuutinta ei voitu k�ynnist��. Tarkista, ett� olet asentanut tarpeelliset PHP-laajennukset. Lis�tietoa l�ytyy %sdokumentaatiosta%s.';
$strValue = 'Arvo';
$strVar = 'Muuttuja';
$strVersionInformation = "Versiotiedot";
$strViewDumpDatabases = 'N�yt� tietokannoista vedos (skeema)';
$strViewDumpDB = 'Tee vedos tietokannasta';
$strViewDump = 'Tee vedos taulusta';
$strViewHasBeenDropped = "N�kym� %s on poistettu";
$strViewMaxExactCount = 'T�ss� n�kym�ss� on yli %s rivi�. Katso lis�tietoja %sdokumentaatiosta%s.';
$strView = "N�kym�";
$strViewName = 'VIEW-arvon nimi';

$strWebServerUploadDirectoryError = 'Valitsemaasi hakemistoa ei voitu k�ytt�� tiedostojen siirt�miseen';
$strWebServerUploadDirectory = 'palvelimen hakemisto tiedostojen siirtoa varten';
$strWelcome = 'Tervetuloa, toivottaa %s';
$strWestEuropean = 'L�nsieurooppalainen';
$strWildcard = 'jokerimerkki';
$strWindowNotFound = 'Kohdeselainikkunaa ei voitu p�ivitt��. Syyn� voi olla se, ett� olet sulkenut is�nt�ikkunan tai ett� selaimesi tietoturva-asetukset est�v�t ikkunoiden v�liset p�ivitystoiminnot.';
$strWithChecked = 'Valitut:';
$strWriteRequests = 'Kirjoituspyynn�t';
$strWrongUser = 'V��r� k�ytt�j�tunnus tai salasana. P��sy kielletty.';

$strXML = 'XML';

$strYes = 'Kyll�';

$strZeroRemovesTheLimit = 'Huom: N�iden valintojen asettaminen nollaksi (0) poistaa rajoituksen.';
$strZip = '"zip-pakattu"';

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

<?php
/* $Id: finnish-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/*
 * Translated by Jouni Kähkönen, <address withdrawn>
 * Previous translations by Visa Kopu, <visa@visakopu.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('tavua', 'kt', 'Mt', 'Gt', 'Tt', 'Pt', 'Et');

$day_of_week = array('Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La');
$month = array('Tammi', 'Helmi', 'Maalis', 'Huhti', 'Touko', 'Kesä', 'Heinä', 'Elo', 'Syys', 'Loka', 'Marras', 'Joulu');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y klo %H:%M';

$timespanfmt = '%s päivää, %s tuntia, %s minuuttia ja %s sekuntia';

'The number of rows waiting to be written in INSERT DELAY queues.';
'Kertoo, kuinka monta INSERT DELAY -jonoissa olevaa riviä odotetaan kirjoitettavan.';

$strAbortedClients = 'Keskeytetty';
$strAccessDeniedCreateConfig = 'Todennäköinen syy tälle on se, ettet ole luonut asetustiedostoa. Voit käyttää %1$sasetusskriptiä%2$s asetustiedoston luomiseen.';
$strAccessDeniedExplanation = 'phpMyAdmin yritti saada yhteyden MySQL-palvelimeen, mutta se torjui yhteyden. Tarkista palvelin, käyttäjänimi ja salasana config.inc.php-tiedostosta ja varmista, että ne vastaavat MySQL-palvelimen järjestelmänvalvojan antamia tietoja.';
$strAccessDenied = 'Pääsy kielletty';
$strAction = 'Toiminnot';
$strAddAutoIncrement = 'Lisää \'AUTO_INCREMENT\' -arvo';
$strAddClause = 'Lisää %s';
$strAddConstraints = 'Lisää rajoitteet';
$strAddDeleteColumn = 'Lisää/poista sarakkeita';
$strAddDeleteRow = 'Lisää/poista hakuehtoja';
$strAddFields = 'Lisää %s kenttä(ä)';
$strAddHeaderComment = 'Lisää oma kommentti otsikkoon (\\n on rivinvaihto)';
$strAddIntoComments = 'Lisää kommentteihin';
$strAddNewField = 'Lisää sarake';
$strAddPrivilegesOnDb = 'Lisää käyttöoikeudet seuraavaan tietokantaan';
$strAddPrivilegesOnTbl = 'Lisää käyttöoikeudet seuraavaan tauluun';
$strAddSearchConditions = 'Lisää hakuehtoja ("where"-lauseen sisältö):';
$strAddToIndex = 'Lisää indeksiin %s sarake(tta)';
$strAddUser = 'Lisää uusi käyttäjä';
$strAddUserMessage = 'Olet lisännyt uuden käyttäjän.';
$strAdministration = 'Pääkäyttäjyys';
$strAffectedRows = 'Muutettuja rivejä:';
$strAfterInsertBack = 'Takaisin';
$strAfterInsertNewInsert = 'Lisää uusi rivi';
$strAfterInsertNext = 'Muokkaa seuraavaa riviä';
$strAfterInsertSame = 'Palaa tälle sivulle';
$strAfter = 'Jälkeen sarakkeen: %s';
$strAll = 'Kaikki';
$strAllowInterrupt = 'Salli tuonnin keskeyttäminen, mikäli skripti huomaa ylittävänsä aikarajoituksen. Tätä kannattaa käyttää suurten tiedostojen tuomiseen; se voi kuitenkin aiheuttaa häiriöitä transaktioihin (tapahtumiin).';
$strAllTableSameWidth = 'Näytä kaikki taulut samanlevyisinä?';
$strAlterOrderBy = 'Lajittele taulu';
$strAnalyzeTable = 'Analysoi taulu';
$strAnd = 'Ja';
$strAndThen = 'ja sen jälkeen';
$strAngularLinks = 'Kulmikkaat linkit';
$strAnIndex = 'Sarakkeelle %s on lisätty indeksi';
$strAnyHost = 'Mikä tahansa palvelin';
$strAny = 'Mikä tahansa';
$strAnyUser = 'Mikä tahansa käyttäjä';
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
$strBinary = 'Binääridata';
$strBinaryDoNotEdit = 'Binääridataa - älä muokkaa';
$strBinaryLog = 'Binääriloki';
$strBinLogEventType = 'Tapahtumatyyppi';
$strBinLogInfo = 'Informaatio';
$strBinLogName = 'Lokin nimi';
$strBinLogOriginalPosition = 'Alkuperäinen sijainti';
$strBinLogPosition = 'Sijainti';
$strBinLogServerId = 'Palvelimen ID';
$strBookmarkAllUsers = 'Anna kaikkien käyttäjien käyttää tätä kirjanmerkkiä';
$strBookmarkCreated = 'Kirjanmerkki %s luotu';
$strBookmarkDeleted = 'Kirjanmerkki on poistettu.';
$strBookmarkLabel = 'Tunniste';
$strBookmarkQuery = 'Tallennettu SQL-kysely';
$strBookmarkReplace = 'Korvaa samanniminen, olemassaoleva kirjanmerkki';
$strBookmarkThis = 'Tallenna SQL-kysely';
$strBookmarkView = 'Näytä';
$strBrowseDistinctValues = 'Selaa erillisiä arvoja';
$strBrowseForeignValues = 'Selaa vieraita arvoja';
$strBrowse = 'Selaa';
$strBufferPoolActivity = 'Puskurivarannon aktiivisuus';
$strBufferPool = "Puskurivaranto";
$strBufferPoolUsage = "Puskurivarannon käyttö";
$strBufferReadMisses = 'Epäonnistuneet lukuyritykset';
$strBufferReadMissesInPercent = 'Epäonnistuneet lukuyritykset: %';
$strBufferWriteWaitsInPercent = 'Kirjoitusviipeet: %';
$strBufferWriteWaits = 'Viive ennen kirjoitusta';
$strBulgarian = 'Bulgarialainen';
$strBusyPages = "Käytössä olevat sivut";
$strBzError = 'phpMyAdmin ei voinut pakata vedosta johtuen rikkinäisestä Bz2-laajennuksesta tässä php:n versiossa. On suositeltavaa asettaa <code>$cfg[\'BZipDump\']</code>-direktiivi phpMyAdminin konfigurointitiedostosta arvoksi <code>FALSE</code>. Jos haluat käyttää Bz2-pakkauksen toimintoja, sinun pitää päivittää uusimpaan php:n versioon. Katso lisätietoja php bug reportista: %s .';
$strBzip = '"bzip-pakkaus"';

$strCalendar = 'Kalenteri';
$strCancel = 'Peruuta';
$strCanNotLoadExportPlugins = 'Vientilisäosia ei voitu ladata; tarkista asennuksesi!';
$strCanNotLoadImportPlugins = 'Tuontiin tarvittavaa lisäosaa ei voida tuoda, tarkista asennuksen asetukset!';
$strCannotLogin = 'MySQL-palvelimelle ei voitu kirjautua sisään';
$strCantLoad = 'en voi ladata laajennusta %s,<br />ole hyvä, ja tarkista PHP:n asetukset';
$strCantLoadRecodeIconv = 'Merkistön konvertointiin tarvittavaa iconv- tai recode-laajennusta ei voitu ladata. Muokkaa PHP:n asetuksia ja salli näiden laajennusten käyttö tai muuta phpMyAdminin asetuksia niin ettei konvertointia suoriteta.';
$strCantRenameIdxToPrimary = 'Indeksiä ei voi muuttaa PRIMARY-nimiseksi!';
$strCantUseRecodeIconv = 'iconv-, libiconv- tai recode_string-funktioita ei voitu käyttää. Tarkista PHP:n asetukset.';
$strCardinality = 'Kardinaliteetti';
$strCaseInsensitive = 'kirjainkoolla ei väliä';
$strCaseSensitive = 'tarkka kirjainkoko';
$strCentralEuropean = 'Keskieurooppalainen';
$strChangeCopyModeCopy = '... säilytä vanha käyttäjä.';
$strChangeCopyModeDeleteAndReload = ' ... poista vanha käyttäjä käyttäjätauluista ja lataa käyttöoikeudet sen jälkeen uudelleen.';
$strChangeCopyModeJustDelete = ' ... poista vanha käyttäjä käyttäjätauluista.';
$strChangeCopyMode = 'Luo uusi käyttäjä samoilla käyttöoikeuksilla ja ...';
$strChangeCopyModeRevoke = ' ...peruuta kaikki aktiiviset käyttöoikeudet vanhalta käyttäjältä ja tuhoa se sen jälkeen.';
$strChangeCopyUser = 'Vaihda sisäänkirjautumistietoja / Kopioi käyttäjä';
$strChangeDisplay = 'Valitse näytettävä sarake';
$strChange = 'Muokkaa';
$strChangePassword = 'Vaihda salasanaa';
$strCharset = 'Merkistökoodaus';
$strCharsetOfFile = 'Tiedoston merkistö:';
$strCharsetsAndCollations = 'Merkistökoodaukset ja aakkosjärjestykset';
$strCharsets = 'Merkistöt';
$strCheckAll = 'Valitse kaikki';
$strCheckOverhead = 'Valitse käyttämättömät taulut'; //?
$strCheckPrivs = 'Hallitse käyttöoikeuksia';
$strCheckPrivsLong = 'Hallitse tietokannan &quot;%s&quot; käyttöoikeuksia.';
$strCheckTable = 'Tarkista taulu';
$strChoosePage = 'Valitse muokattava sivu';
$strColComFeat = 'Sarakkeiden kommentit näkyvissä';
$strCollation = 'Aakkosjärjestys';
$strColumnNames = 'Sarakkeiden nimet';
$strColumnPrivileges = 'Sarakekohtaiset käyttöoikeudet';
$strCommand = 'Komento';
$strCommentsForTable = 'KOMMENTIT TAULULLE';
$strComments = 'Kommentit';
$strCompatibleHashing = 'MySQL&nbsp;4.0 -yhteensopiva';
$strCompleteInserts = 'Kokonaiset insert-lauseet';
$strCompression = 'Pakkaus';
$strCompressionWillBeDetected = 'Seuraavat tiedostopakkausmuodot havaitaan automaattisesti: %s';
$strConfigDefaultFileError = 'En voi ladata oletusasetuksia kohteesta: "%1$s"';
$strConfigFileError = 'phpMyAdmin ei pysty lukemaan asetustiedostoa.<br />Tämä saattaa johtua virheestä, jonka PHP löysi tiedostosta tai tiedoston puuttumisesta.<br />Voit avata tiedoston allaolevasta linkistä ja lukea mahdolliset PHP-virheilmoituikset. Todennäköisimmin joltain riviltä puuttuu lainausmerkki tai puolipiste.<br />Jos linkistä avautuva sivu on tyhjä, asetustiedostosta ei löytynyt virhettä.';
$strConfigureTableCoord = 'Määrittele koordinaatit taululle %s';
$strConnectionError = 'En voi yhdistää: virheelliset asetukset.';
$strConnections = 'Yhteydenotot';
$strConstraintsForDumped = 'Rajoitteet vedostauluille';
$strConstraintsForTable = 'Rajoitteet taululle';
$strCookiesRequired = 'Selaimessa on oltava evästeet käytössä tästä eteenpäin.';
$strCopyDatabaseOK = 'Tietokanta %s on kopioitu tietokannaksi %s';
$strCopy = 'Kopioi';
$strCopyTable = 'Kopioi taulu toiseen tauluun nimellä (tietokanta<b>.</b>taulu):';
$strCopyTableOK = 'Taulu %s on kopioitu nimelle %s.';
$strCopyTableSameNames = 'Taulua ei voida kopioida itseensä!';
$strCouldNotKill = 'phpMyAdmin ei voinut lopettaa säiettä %s. Se on todennäköisesti jo suljettu.';
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
$strCreateUserDatabaseNone = 'Ei mitään';
$strCreateUserDatabase = 'Tietokanta käyttäjälle';
$strCreateUserDatabaseWildcard = 'Anna kaikki oikeudet tietokannalle jokerimerkkiä käyttäen (username\_%)';
$strCreationDates = 'Luonti/päivitys/tarkistus -päiväykset';
$strCriteria = 'Hakuehdot';
$strCroatian = 'Kroaatti';
$strCSV = 'CSV';
$strCyrillic = 'Kyrillinen';
$strCzechSlovak = 'Tsekkoslovakialainen';
$strCzech = 'Tshekkiläinen';

$strDanish = 'Tanskalainen';
$strDatabaseEmpty = 'Tietokannan nimi on tyhjä!';
$strDatabaseExportOptions = 'Tietokannan tulostusvalinnat';
$strDatabaseHasBeenDropped = 'Tietokanta %s on pudotettu.';
$strDatabasesDropped = '%s tietokantaa pudotettiin onnistuneesti.';
$strDatabasesStatsDisable = 'Poista tilastot käytöstä';
$strDatabasesStatsEnable = 'Ota tilastot käyttöön';
$strDatabasesStatsHeavyTraffic = 'Huom: Tietokantatilastojen käyttöönotto täältä käsin saattaa aiheuttaa runsaasti liikennettä Internet-palvelimen ja MySQL-palvelimen välille.';
$strDatabasesStats = 'Tietokantatilastot';
$strDatabases = 'Tietokannat';
$strDatabase = 'Tietokanta';
$strData = 'Data';
$strDataDict = 'Datasanakirja';
$strDataOnly = 'Vain data';
$strDataPages = "Dataa sisältävät sivut";
$strDBComment = 'Tietokannan kommentti: ';
$strDBCopy = 'Luo tietokannasta toinen tietokanta nimellä';
$strDbIsEmpty = 'Tietokanta on tyhjä!';
$strDbPrivileges = 'Tietokantakohtaiset käyttöoikeudet';
$strDBRename = 'Muuta tietokannan nimi';
$strDbSpecific = 'tietokantakohtainen';
$strDefaultEngine = "%s on tämän MySQL-palvelimen oletusarvoinen tallennustilamoottori.";
$strDefault = 'Oletusarvo';
$strDefaultValueHelp = 'Syötä oletusarvoihin vain yksinäinen arvo (käyttämättä kenoviivamerkintöjä tai lainausmerkkejä) tässä muodossa: a';
$strDefragment = 'Eheytä taulu';
$strDelayedInserts = 'Käytä viivästettyjä insert-lauseita';
$strDeleteAndFlushDescr = 'Tämä on siivoin tapa, mutta käyttöoikeuksien lataaminen uudelleen saattaa kestää jonkin aikaa.';
$strDeleteAndFlush = 'Poista käyttäjät ja lataa käyttöoikeudet sen jälkeen uudelleen.';
$strDeleted = 'Rivi on poistettu';
$strDeletedRows = 'Poistetut rivit:';
$strDeleteNoUsersSelected = 'Yhtään käyttäjää ei valittu poistettavaksi!';
$strDelete = 'Poista';
$strDeleteRelation = 'Poista relaatio';
$strDeleting = 'Poistetaan: %s';
$strDelimiter = 'Rajamerkki';
$strDelOld = 'Nykyisellä sivulla on viittauksia tauluihin, joita ei enää ole olemassa. Haluatko poistaa nuo viittaukset?';
$strDescending = 'Laskeva';
$strDescription = 'Kuvaus';
$strDesignerHelpDisplayField = 'Ilmaisinkenttä näkyy vaaleanpunaisena. Asettaaksesi kentän ilmaisinkentäksi paina "Valitse näytettävä kenttä" -kuvaketta ja paina sitten sopivaa kenttänimeä.';
$strDesigner = 'Suunnittelija';
$strDictionary = 'sanakirja';
$strDirectLinks = 'Suorat linkit';
$strDirtyPages = "Epäsiistit sivut";
$strDisabled = 'Pois päältä';
$strDisableForeignChecks = 'Älä käytä vieraiden avainten tarkistusta';
$strDisplayFeat = 'Ulkoasun asetukset';
$strDisplayOrder = 'Lajittelujärjestys:';
$strDisplayPDF = 'Näytä PDF-kaavio';
$strDoAQuery = 'Suorita "esimerkin mukainen kysely" (jokerimerkki: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Ohjeet';
$strDoYouReally = 'Oletko varma että haluat ';
$strDropDatabaseStrongWarning = 'Olet aikeissasi HÄVITTÄÄ kokonaisen tietokannan!';
$strDrop = 'Pudota';
$strDropUsersDb = 'Pudota (poista) tietokannat, joilla on sama nimi kuin käyttäjillä.';
$strDumpingData = 'Vedostetaan tietoa taulusta';
$strDumpSaved = 'Vedos tallennettiin tiedostoon %s.';
$strDumpXRows = 'Tee vedos %s rivistä, alkaen rivistä: %s.';
$strDynamic = 'dynaaminen';

$strEdit = 'Muokkaa';
$strEditPDFPages = 'Muokkaa PDF-sivuja';
$strEditPrivileges = 'Muokkaa käyttöoikeuksia';
$strEffective = 'Varsinainen';
$strEmptyResultSet = 'MySQL palautti tyhjän vastauksen (ts. nolla riviä).';
$strEmpty = 'Tyhjennä';
$strEnabled = 'Päällä';
$strEncloseInTransaction = 'Lisää transaktio (tapahtuma)';
$strEndCut = 'LOPETA CUT';
$strEnd = 'Loppu';
$strEndRaw = 'LOPETA RAW';
$strEngineAvailable = "%s on käytettävissä tällä MySQL-palvelimella.";
$strEngineDisabled = "%s on otettu pois käytöstä tältä MySQL-palvelimelta.";
$strEngines = "Moottorit";
$strEngineUnsupported = "Tämä MySQL-palvelin ei tue %s-tallennustilamoottoria.";
$strEnglish = 'Englantilainen';
$strEnglishPrivileges = ' Huom! MySQL-käyttöoikeuksien nimet ovat englanniksi! ';
$strErrorInZipFile = 'Virhe ZIP-paketissa:';
$strErrorRelationAdded = 'Virhe: Relaatiota ei luotu.';
$strErrorRelationExists = 'Virhe: relaatio on jo olemassa.';
$strErrorRenamingTable = 'Virhe annettaessa taululle %1$s nimeä %2$s';
$strErrorSaveTable = 'Virhe tallennettaessa koordinaatteja Suunnitelijaan.';
$strError = 'Virhe';
$strEscapeWildcards = 'Jokerimerkkien _ ja % eteen on lisättävä \-merkki, jotta ne näkyisivät oikein';
$strEsperanto = 'Esperanto';
$strEstonian = 'Virolainen';
$strExcelEdition = 'Excel-muokkaus';
$strExecuteBookmarked = 'Suorita kirjanmerkkeihin lisätty kysyntä';
$strExplain = 'Selitä SQL-kysely';
$strExportImportToScale = 'Vie/tuo skaalaan';
$strExportMustBeFile = 'Valittu vientityyppi on tallennettava tiedostoon!';
$strExport = 'Vienti';
$strExtendedInserts = 'Laajennetut insert-lauseet';
$strExtra = 'Lisätiedot';

$strFailedAttempts = 'Epäonnistuneet yritykset';
$strFieldHasBeenDropped = 'Sarake %s on pudotettu';
$strFieldInsertFromFileTempDirNotExists = 'Virhe lähetettyä tiedostoa siirrettäessä, katso FAQ 1.11';
$strField = 'Sarake';
$strFieldsEnclosedBy = 'Sarakkeiden ympäröintimerkki';
$strFieldsEscapedBy = 'Koodinvaihtomerkki (escape)';
$strFields = 'Sarakkeet';
$strFieldsTerminatedBy = 'Sarakkeiden erotinmerkki';
$strFileAlreadyExists = 'Tiedosto %s on jo olemassa palvelimella, vaihda tiedostonimeä tai tarkista korvaus-asetuksen tila.';
$strFileCouldNotBeRead = 'Tiedostoa ei voida lukea';
$strFileNameTemplateDescriptionDatabase = 'tietokannan nimi';
$strFileNameTemplateDescriptionServer = 'palvelimen nimi';
$strFileNameTemplateDescriptionTable = 'taulun nimi';
$strFileNameTemplateDescription = 'Tämä arvo on %1$sstrftime%2$s-funktion mukainen, joten voit käyttää ajanmuodostostusmerkkijonoja. Lisäksi tapahtuu seuraavat muutokset: %3$s. Muu teksti pysyy alkuperäisenä.';
$strFileNameTemplateRemember = 'muista pohja';
$strFileNameTemplate = 'Tiedostonimen pohja';
$strFileToImport = 'Tuotava tiedosto';
$strFixed = 'kiinteä';
$strFlushPrivilegesNote = 'Huom: phpMyAdmin hakee käyttäjien käyttöoikeudet suoraan MySQL-palvelimen käyttöoikeustauluista. Näiden taulujen sisältö saattaa erota palvelimen käyttämistä käyttöoikeuksista, jos niihin on tehty muutoksia manuaalisesti. Tällöin sinun on %sladattava käyttöoikeudet uudestaan%s ennen kuin jatkat.';
$strFlushQueryCache = 'Tyhjennä kyselymuisti';
$strFlushTables = 'Tyhjennä (sulje) kaikki taulut';
$strFlushTable = 'Tyhjennä taulun välimuisti ("FLUSH")';
$strFontSize = 'Fonttikoko';
$strForeignKeyError = 'Virhe luotaessa vierasta avainta (tarkista tietotyypit)';
$strFormat = 'Muoto';
$strFormEmpty = 'Tarvittava tieto puuttuu lomakkeesta!';
$strFreePages = "Vapaat sivut";
$strFullText = 'Koko tekstit';
$strFunction = 'Funktio';
$strFunctions = 'Funktiot';

$strGenBy = 'Luontiympäristö';
$strGeneralRelationFeat = 'Yleiset relaatio-ominaisuudet';
$strGenerate = 'Keksi';
$strGeneratePassword = 'Keksi salasana';
$strGenTime = 'Luontiaika';
$strGeorgian = 'Georgialainen';
$strGerman = 'Saksalainen';
$strGlobal = 'globaali';
$strGlobalPrivileges = 'Globaalit käyttöoikeudet';
$strGlobalValue = 'Globaali arvo';
$strGo = 'Siirry';
$strGrantOption = 'Saantioikeudet';
$strGreek = 'Kreikkalainen';
$strGzip = '"gzip-pakkaus"';

$strHandler = 'Käsittelijä';
$strHasBeenAltered = 'on muutettu.';
$strHasBeenCreated = 'on luotu.';
$strHaveToShow = 'Valitse vähintään yksi sarake';
$strHebrew = 'Hebrealainen';
$strHelp = 'Ohje';
$strHide         = 'Kätke';
$strHideShowAll = 'Kätke/näytä kaikki';
$strHideShowNoRelation = 'Kätke/näytä taulut, joilla ei ole relaatiota';
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
$strIEUnsupported = 'Internet Explorer ei tue tätä toimintoa.';
$strIgnoreDuplicates = 'Älä välitä kaksinkertaisista riveistä';
$strIgnoreInserts = 'Käytä IGNORE:a INSERT-komennoissa';
$strIgnore = 'Jätä huomiotta';
$strImportExportCoords = 'Tuo/vie PDF-skeeman koordinaatit';
$strImportFiles = 'Tuo tiedostoja';
$strImportFormat = 'Tuotavan tiedoston muoto';
$strImportSuccessfullyFinished = 'Tuonti onnistui, %d kyselyä suoritettu.';
$strImport = 'Tuonti';
$strIndexes = 'Indeksit';
$strIndexHasBeenDropped = 'Indeksi %s on pudotettu';
$strIndex = 'Indeksi';
$strIndexName = 'Indeksin nimi:';
$strIndexType = 'Indeksin tyyppi:';
$strIndexWarningTable = 'Taulun `%s` indeksien kanssa on ongelmia';
$strInnoDBAutoextendIncrement = "Automaattisen laajentamisen koko";
$strInnoDBAutoextendIncrementDesc = "Laajentamiskoko automaattisesti suurenevan taulutilan koon laajentamiseksi sen täyttyessä.";
$strInnoDBBufferPoolSizeDesc = 'Kertoo koon siitä muistipuskurista, jota InnoDB käyttää taulujen tietojen ja indeksien siirtämiseen välimuistiin.';
$strInnoDBBufferPoolSize = 'Puskurivarannon koko';
$strInnoDBDataFilePath = "Datatiedostot";
$strInnoDBDataHomeDir = "Datan kotihakemisto";
$strInnoDBDataHomeDirDesc = "Hakemistopolun yhteinen osa kaikille InnoDB-datatiedostoille.";
$strInnoDBPages = 'sivua';
$strInnoDBRelationAdded = 'InnoDB-relaatio luotu';
$strInnodbStat = 'InnoDB:n tila';
$strInsecureMySQL = 'Asetustiedostosi käyttää asetuksia, jotka viittaavat MySQL-palvelimen oletusarvoiseen käyttäjään (root ilman salasanaa). Tällaisin asetuksin MySQL-palvelin on altis hyökkäyksille. Tämä tietoturvariski olisi syytä korjata pikimmiten!';
$strInsertAsNewRow = 'Lisää uutena rivinä';
$strInsertedRowId = 'Sijoitetun rivin id:';
$strInsertedRows = 'Lisätyt rivit:';
$strInsert = 'Lisää rivi';
$strInternalNotNecessary = '* Sisäistä relaatiota ei tarvita silloin, kun sellainen on jo InnoDB:ssä.';
$strInternalRelationAdded = 'Sisäinen relaatio luotu';
$strInternalRelations = 'Sisäiset relaatiot';
$strInUse = 'käytössä';
$strInvalidAuthMethod = 'Asetuksissa on virheellinen todennustapa:';
$strInvalidColumnCount = 'Sarakkeiden määrän on oltava enemmän suurempi kuin nolla.';
$strInvalidColumn = 'Virheellinen sarake (%s) määritelty!';
$strInvalidCSVFieldCount = 'Virheellinen kenttien määrä CSV-syötteessä rivillä %d.';
$strInvalidCSVFormat = 'Virheellinen muoto CSV-syötteessä rivillä %d.';
$strInvalidCSVParameter = 'Virheellinen parametri CSV-tuonnille: %s';
$strInvalidDatabase = 'Virheellinen tietokanta';
$strInvalidFieldAddCount = 'Sinun on lisättävä vähintään yksi kenttä.';
$strInvalidFieldCount = 'Taulussa täytyy olla vähintään yksi kenttä.';
$strInvalidLDIImport = 'Tämä lisäosa ei tue pakattujen tuontien käyttöä!';
$strInvalidRowNumber = '%d on virheellinen rivinumero.';
$strInvalidServerHostname = 'Palvelimella %1$s virheellinen nimi. Tarkista asetukset.';
$strInvalidServerIndex = 'Virheellinen palvelinindeksi: "%s"';
$strInvalidTableName = 'Virheellinen taulun nimi';

$strJapanese = 'Japanilainen';
$strJoins = 'Liitokset';
$strJumpToDB = 'Hyppää tietokantaan &quot;%s&quot;.';
$strJustDeleteDescr = '&quot;Poistetut&quot; käyttäjät voivat edelleen käyttää tavalliseen tapaan palvelinta, ellei käyttöoikeuksia ladata uudestaan.';
$strJustDelete = 'Poista käyttäjät vain käyttöoikeustauluista.';

$strKeepPass = 'Älä vaihda salasanaa';
$strKeyCache = 'Avainvälimuisti';
$strKeyname = 'Avaimen nimi';
$strKill = 'Lopeta';
$strKnownExternalBug = 'Toimintoon %s vaikuttaa tunnettu vika, katso %s';
$strKorean = 'Korealainen';

$strLandscape = 'Landscape';
$strLanguage = 'Kieli';
$strLanguageUnknown = 'Tuntematon kieli: %1$s.';
$strLatchedPages = "Lukitut sivut";
$strLatexCaption = 'Taulun otsikko';
$strLatexContent = 'Taulun __TABLE__ sisältö';
$strLatexContinuedCaption = 'Jatkettu taulun otsikko';
$strLatexContinued = '(jatkuu)';
$strLatexIncludeCaption = 'Sisällytä taulun otsikko';
$strLatexLabel = 'Tunniste';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Taulun __TABLE__ rakenne';
$strLatvian = 'Latvialainen';
$strLDI = 'CSV käyttäen LOAD DATA -kyselyä';
$strLDILocal = 'Käytä LOCAL-avainsanaa';
$strLengthSet = 'Pituus/Arvot*';
$strLimitNumRows = 'Rivejä sivua kohti';
$strLinesTerminatedBy = 'Rivien erotinmerkki';
$strLinkNotFound = 'Linkkiä ei löydy';
$strLinksTo = 'Linkitys sarakkeeseen:';
$strLithuanian = 'Liettualainen';
$strLocalhost = 'Paikallinen';
$strLocationTextfile = 'Tiedoston sijainti';
$strLoginInformation = 'Sisäänkirjautumistiedot';
$strLogin = 'Kirjaudu sisään';
$strLogout = 'Poistu';
$strLogPassword = 'Salasana:';
$strLogServer = 'Palvelin';
$strLogUsername = 'Käyttäjätunnus:';
$strLongOperation = "Tämä toimenpide saattaa kestää pitkään. Jatketaanko silti?";

$strMaxConnects = 'enim. yhtäaikaisia yhteyksiä';
$strMaximalQueryLength = 'Luodun kyselyn enimmäispituus';
$strMaximumSize = 'Enimmäiskoko: %s%s';
$strMbExtensionMissing = 'PHP-laajennusta mbstring ei löytynyt ja vaikuttaa siltä, että käytät multibyte-merkistökoodausta. Ilman mbstring-laajennusta phpMyAdmin ei osaa jaotella merkkijonoja oikein, ja tämä saattaa johtaa odottamattomiin tuloksiin.';
$strMbOverloadWarning = 'PHP:n asetuksissa on "mbstring.func_overload" -valinta päällä. Tämä valinta ei sovi yhteen phpMyAdminin kanssa ja saattaa hävittää tietoja!';
$strMIME_available_mime = 'Mahdolliset MIME-tyypit';
$strMIME_available_transform = 'Mahdolliset muunnokset';
$strMIME_description = 'Kuvaus';
$strMIME_MIMEtype = 'MIME-tyyppi';
$strMIME_nodescription = 'Tälle muunnokselle ei ole saatavilla kuvausta.<br />Kysy tekijältä, mitä %s tekee.';
$strMIME_transformation_note = 'Nähdäksesi luettelon saatavilla olevista muunnosvaihtoehdoista ja niiden MIME-tyyppien muunnoksista, paina %smuunnoksen kuvaukset%s-kohtaa';
$strMIME_transformation_options = 'Muunnosvaihtoehdot';
$strMIME_transformation_options_note = 'Syötä muunnosvalinnoille arvot käyttäen tätä formaattia: \'a\', 100, b,\'c\'...<br />Jos tarvitset arvoissa kenoviivaa ("\") tai yksittäistä lainausmerkkiä ("\'"), lisää merkin eteen kenoviiva (esim. \'\\\\xyz\' tai \'a\\\'b\').';
$strMIME_transformation = 'Selaimen muunnos (transformation)';
$strMIMETypesForTable = 'MIME-TYYPIT TAULULLE';
$strMIME_without = 'MIME-tyypeillä, jotka on kursivoitu, ei ole erillistä muunnostoimintoa';
$strModifications = 'Muutokset tallennettu';
$strModifyIndexTopic = 'Muokkaa indeksiä';
$strModify = 'Muokkaa';
$strMoveMenu = 'Siirrä valikko';
$strMoveTableOK = 'Taulu %s on siirretty %s.';
$strMoveTableSameNames = 'Taulua ei voi siirtää itseensä!';
$strMoveTable = 'Siirrä taulu toiseen tauluun (tietokanta<b>.</b>taulu):';
$strMultilingual = 'monikielinen';
$strMyISAMDataPointerSize = "Dataosoittimen koko";
$strMyISAMDataPointerSizeDesc = "Osoittimen oletuskoko tavuina, käytettäväksi CREATE TABLE -kyselyn yhteydessä MyISAM-tauluissa, silloin kun MAX_ROWS-valintaa ei ole määritelty.";
$strMyISAMMaxExtraSortFileSizeDesc = "Jos MyISAM-indeksin nopeaan luomiseen käytetty väliaikaistiedosto on suurempi kuin avainvälimuistin käyttö täällä määritellyn määrän mukaisesti, suositellaan välimuistitoiminnon käyttöä.";
$strMyISAMMaxExtraSortFileSize = "Enimmäiskoko väliaikaistiedostoille indeksin luonnissa";
$strMyISAMMaxSortFileSizeDesc = "MySQL-palvelimen käyttöön tarkoitettu väliaikaistiedoston suurin koko MyISAM-indeksien uudelleenlatausta varten (REPAIR TABLE, ALTER TABLE tai LOAD ADTA INFILE -toimintojen aikana).";
$strMyISAMMaxSortFileSize = "Enimmäiskoko väliaikaisille lajittelutiedostoille";
$strMyISAMRecoverOptions = "Automaattinen palautuminen";
$strMyISAMRecoverOptionsDesc = "Kaatuneiden MyISAM-taulujen automaattisen palauttamisen tila sellaisena kuin se on asetettu \"--myisam-recover\" -nimisen palvelimenkäynnistysasetuksen kautta.";
$strMyISAMRepairThreadsDesc = "Jos tämä arvo on suurempi kuin 1, lajitteluprosessi luo MyISAM-tauluindeksit rinnakkain (jokainen indeksi omalle säikeelleen), kun käytetään Korjaa-toimintoa.";
$strMyISAMRepairThreads = "Korjaa säikeet";
$strMyISAMSortBufferSizeDesc = "Puskuri joka varataan käyttöön lajiteltaessa MyISAM-indeksejä REPAIR TABLE -kyselyn aikana tai luotaessa indeksejä CREATE INDEX - tai ALTER TABLE -kyselyllä.";
$strMyISAMSortBufferSize = "Lajittelupuskurin koko";
$strMySQLCharset = 'MySQL-palvelimen merkistö';
$strMysqlClientVersion = 'MySQL-asiakasversio';
$strMySQLConnectionCollation = 'MySQL-yhteyden aakkosjärjestys';
$strMySQLSaid = 'MySQL ilmoittaa: ';
$strMySQLShowProcess = 'Näytä prosessit';
$strMySQLShowStatus = 'Näytä MySQL-palvelimen ajonaikaiset tiedot';
$strMySQLShowVars = 'Näytä MySQL-palvelimen järjestelmämuuttujat';

$strName = 'Nimi';
$strNext = 'Seuraava';
$strNoActivity = 'Yhteys on ollut toimettomana %s sekuntia tai enemmän. Kirjaudu sisään uudestaan.';
$strNoDatabases = 'Ei tietokantoja';
$strNoDatabasesSelected = 'Et valinnut yhtään tietokantaa.';
$strNoDataReceived = 'Mitään tietoa ei ole saatu tuotavaksi. Joko mitään tiedostonimeä ei annettu tai tiedoston koko ylitti PHP:n asetusten salliman enimmäiskoon. Katso FAQ 1.16.';
$strNoDescription = 'ei kuvausta';
$strNoDetailsForEngine = "Tämän tallennustilamoottorin tilasta ei ole saatavilla tarkkoja tietoja.";
$strNoDropDatabases = '"DROP DATABASE" -kyselyjen käyttö on estetty.';
$strNo = 'Ei';
$strNoExplain = 'Älä selitä SQL-kyselyä';
$strNoFilesFoundInZip = 'ZIP-paketista ei löytynyt yhtään tiedostoa!';
$strNoFrames = 'phpMyAdmin toimii parhaiten <b>kehyksiä</b> tukevalla selaimella.';
$strNoIndex = 'Indeksiä ei ole määritelty!';
$strNoIndexPartsDefined = 'Indeksin osia ei ole määritelty!';
$strNoModification = 'Ei muutoksia';
$strNone = 'Ei mitään';
$strNoOptions = 'Tälle tiedostomuodolle ei ole valinta-asetuksia';
$strNoPassword = 'Ei mitään salasanaa';
$strNoPermission = 'Internet-palvelimella ei ole lupaa tallentaa tiedostoa %s.';
$strNoPhp = 'Kätke PHP-koodi';
$strNoPrivileges = 'Ei käyttöoikeuksia';
$strNoRights = 'Sinulla ei ole tarpeeksi oikeuksia!';
$strNoRowsSelected = 'Ei yhtään riviä valittu';
$strNoSpace = 'Liian vähän tilaa tiedoston %s tallentamiseen.';
$strNoTablesFound = 'Tietokannassa ei ole tauluja.';
$strNoThemeSupport = 'Ei tukea teemojen käyttöön. Tarkista asetukset ja/tai teemasi hakemistosta %s.';
$strNotNumber = 'Tämä ei ole numero!';
$strNotOK = 'Ei kunnossa';
$strNotSet = '<b>%s</b>-taulua ei löytynyt tai sitä ei ole määritelty %s-tiedostossa';
$strNoUsersFound = 'Käyttäjiä ei löytynyt.';
$strNoValidateSQL = 'Älä tarkista SQL-kyselyä';
$strNull = 'Tyhjä';
$strNumberOfFields = 'Kenttien määrä';
$strNumberOfTables = 'Taulujen määrä';
$strNumSearchResultsInTable = '%s hakutulosta taulussa <i>%s</i>';
$strNumSearchResultsTotal = '<b>Yhteensä:</b> <i>%s</i> hakutulosta';
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
$strOverhead = 'Ylijäämä';
$strOverwriteExisting = 'Korvaa jo olemassaoleva(t) tiedosto(t)';

$strPageNumber = 'Sivunumero:';
$strPagesToBeFlushed = "Siistimistä vaativat sivut";
$strPaperSize = 'Paperin koko';
$strPartialImport = 'Osittainen tuonti';
$strPartialText = 'Lyhennetyt tekstit';
$strPasswordChanged = 'Salasanan vaihto käyttäjälle %s onnistui.';
$strPasswordEmpty = 'Salasana puuttuu!';
$strPasswordHashing = 'Salasanan salaus';
$strPasswordNotSame = 'Salasanat eivät ole samat!';
$strPassword = 'Salasana';
$strPdfDbSchema = 'Kaavio tietokannasta "%s" - Sivu %s';
$strPdfInvalidTblName = 'Taulua "%s" ei löydy!';
$strPdfNoTables = 'Ei tauluja';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Luo raportin, joka sisältää yksittäisen taulun tiedot)';
$strPDFReportTitle = 'Raportin otsikko';
$strPerHour = 'tunnissa';
$strPerMinute = 'minuutissa';
$strPerSecond = 'sekunnissa';
$strPersian = 'Persialainen';
$strPhoneBook = 'puhelinluettelo';
$strPHP40203 = 'Käytössäsi on PHP 4.2.3, joka sisältää vakavan vian monitavuisissa merkkijonoissa (mbstring). Katso PHP:n virheraportti 19404. Tätä PHP:n versiota ei suositella käytettäväksi phpMyAdminin kanssa.';
$strPhp = 'Näytä PHP-koodi';
$strPHPVersion = 'PHP:n versio';
$strPleaseSelectPrimaryOrUniqueKey = 'Valitse ensisijainen avain tai uniikki avain';
$strPmaDocumentation = 'phpMyAdminin dokumentaatio';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> täytyy määritellä asetustiedostossa!';
$strPmaWiki = 'phpMyAdminin wikisivusto';
$strPolish = 'Puolalainen';
$strPortrait = 'Pystytasossa';
$strPos1 = 'Alkuun';
$strPrevious = 'Edellinen';
$strPrimary = 'Ensisijainen';
$strPrimaryKeyHasBeenDropped = 'Ensisijainen avain on pudotettu';
$strPrimaryKeyName = 'Ensisijaisen avaimen nimenä pitää olla PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" saa olla <b>vain ja ainoastaan</b> ensisijaisen avaimen nimenä!)';
$strPrint = 'Tulosta';
$strPrintViewFull = 'Tulostusversio (kokonaisin tekstein)';
$strPrintView = 'Tulostusversio';
$strPrivDescAllPrivileges = 'Sisältää kaikki käyttöoikeudet GRANT-oikeutta lukuun ottamatta.';
$strPrivDescAlterRoutine = 'Sallii talletettujen rutiinien muuntamisen ja poistamisen.';
$strPrivDescAlter = 'Sallii muuttaa olemassaolevien taulujen rakennetta.';
$strPrivDescCreateDb = 'Sallii uusien tietokantojen ja taulujen luomisen.';
$strPrivDescCreateRoutine = 'Sallii talletettujen rutiinien luomisen.';
$strPrivDescCreateTbl = 'Sallii uusien taulujen luomisen.';
$strPrivDescCreateTmpTable = 'Sallii väliaikaistaulujen luomisen.';
$strPrivDescCreateUser = 'Sallii käyttäjätilien luomisen, poistamisen ja uudelleennimeämisen.';
$strPrivDescCreateView = 'Sallii uusien näkymien luomisen.';
$strPrivDescDelete = 'Sallii tietojen poistamisen.';
$strPrivDescDropDb = 'Sallii tietokantojen ja taulujen pudottamisen.';
$strPrivDescDropTbl = 'Sallii taulujen pudottamisen.';
$strPrivDescExecute5 = 'Sallii talletettujen rutiinien suorittamisen.';
$strPrivDescExecute = 'Sallii talletettujen proseduurien suorittamisen; Ei vaikutusta tässä MySQL-palvelimen versiossa.';
$strPrivDescFile = 'Sallii tietojen tuomisen tiedostosta ja viemisen tiedostoon.';
$strPrivDescGrant = 'Sallii käyttäjien ja käyttöoikeuksien lisäämisen lataamatta käyttöoikeustauluja uudestaan.';
$strPrivDescIndex = 'Sallii indeksien luomisen ja pudottamisen.';
$strPrivDescInsert = 'Sallii tietojen lisäämisen ja korvaamisen.';
$strPrivDescLockTables = 'Sallii taulujen lukitsemisen nykyiselle säikeelle.';
$strPrivDescMaxConnections = 'Rajoittaa käyttäjän tunnissa luomien uusien yhteyksien enimmäismäärän tunnissa.';
$strPrivDescMaxQuestions = 'Rajoittaa käyttäjän tunnissa palvelimelle lähettämien kyselyjen määrän.';
$strPrivDescMaxUpdates = 'Rajoittaa, kuinka monta monta kertaa käyttäjä saa suorittaa tauluihin tai tietokantoihin muutoksia tekeviä komentoja tunnin aikana.';
$strPrivDescMaxUserConnections = 'Asettaa rajan käyttäjän yhtäaikaisten yhteyksien määrälle.';
$strPrivDescProcess3 = 'Sallii muiden käyttäjien prosessien lopettamisen.';
$strPrivDescProcess4 = 'Sallii kokonaisten kyselyjen näyttämisen prosessilistassa.';
$strPrivDescReferences = 'Ei vaikutusta tässä MySQL-palvelimen versiossa.';
$strPrivDescReload = 'Sallii palvelinasetusten uudelleenlataamisen ja palvelimen välimuistin tyhjentämisen.';
$strPrivDescReplClient = 'Antaa käyttäjälle oikeuden kysyä, missä ali-/pääpalvelimet sijaitsevat.';
$strPrivDescReplSlave = 'Tarvitaan replikaatio-alipalvelimia varten.';
$strPrivDescSelect = 'Sallii tietojen lukemisen.';
$strPrivDescShowDb = 'Sallii koko tietokantalistan käytön.';
$strPrivDescShowView = 'Sallii SHOW CREATE VIEW -kyselyjen suorittamisen.';
$strPrivDescShutdown = 'Sallii palvelimen sammuttamisen.';
$strPrivDescSuper = 'Sallii yhdistämisen silloinkin kun yhteyksien enimmäismäärä on saavutettu; Tarvitaan useissa pääkäyttäjän toiminnoissa, kuten globaalien muuttujien asettamisessa ja muiden käyttäjien säikeiden lopettamisessa.';
$strPrivDescUpdate = 'Sallii tietojen muuttamisen.';
$strPrivDescUsage = 'Ei käyttöoikeuksia.';
$strPrivileges = 'Käyttöoikeudet';
$strPrivilegesReloaded = 'Käyttöoikeuksien uudelleenlataus onnistui.';
$strProcedures = 'Proseduurit';
$strProcesses = 'Prosessit';
$strProcesslist = 'Prosessilista';
$strProtocolVersion = 'Protokollan versio';
$strPutColNames = 'Laita sarakkeiden nimet ensimmäiselle riville';

$strQBEDel = 'Poista';
$strQBE = 'Haku';
$strQBEIns = 'Lisää';
$strQueryCache = 'Kyselyvälimuisti';
$strQueryFrame = 'Kyselyikkuna';
$strQueryOnDb = 'Suorita SQL-kysely tietokannassa <b>%s</b>:';
$strQueryResultsOperations = 'Kyselytulosten toimenpiteet';
$strQuerySQLHistory = 'SQL-historia';
$strQueryStatistics = '<b>Kyselytilastot</b>: Tälle palvelimelle on lähetetty viime käynnistyksestä lähtien %s kyselyä.';
$strQueryTime = 'kysely kesti %01.4f sek.';
$strQueryType = 'Kyselyn tyyppi';
$strQueryWindowLock = 'Älä korvaa tätä kyselyä ikkunan ulkopuolelta';

$strReadRequests = 'Hakupyynnöt';
$strReceived = 'Vastaanotettu';
$strRecommended = 'suositeltava';
$strRecords = 'Rivit';
$strReferentialIntegrity = 'Tarkista viitteiden eheys:';
$strRefresh = 'Päivitä';
$strRelationalSchema = 'Relaatioskeema';
$strRelationDeleted = 'Relaatio poistettu';
$strRelationNotWorking = 'Linkitettyihin tauluihin liittyvät lisäominaisuudet on poistettu käytöstä. Katso %slisätietoja%s.';
$strRelationsForTable = 'RELAATIOT TAULULLE';
$strRelations = 'Relaatiot';
$strRelationView = 'Relaationäkymä';
$strReloadingThePrivileges = 'Ladataan käyttöoikeuksia uudelleen';
$strReload = 'Lataa uudelleen';
$strReloadPrivileges = 'Lataa käyttöoikeudet uudelleen';
$strRemoveSelectedUsers = 'Poista valitut käyttäjät';
$strRenameDatabaseOK = 'Tietokannan %s uusi nimi on nyt %s';
$strRenameTable = 'Nimeä taulu uudelleen';
$strRenameTableOK = 'Taulun %s nimi on nyt %s';
$strRepairTable = 'Korjaa taulu';
$strReplaceNULLBy = 'Korvaa NULL-merkki tällä:';
$strReplaceTable = 'Korvaa taulun nykyiset rivit tiedostolla';
$strReplication = 'Replikaatio';
$strReset = 'Nollaa';
$strResourceLimits = 'Resurssirajoitukset';
$strReType = 'Kirjoita uudelleen';
$strRevokeAndDeleteDescr = 'Käyttäjillä on USAGE-käyttöoikeus siihen asti, kun käyttöoikeudet ladataan uudelleen.';
$strRevokeAndDelete = 'Pura kaikki käyttäjän aktiiviset käyttöoikeudet, ja poista ne sen jälkeen.';
$strRevokeMessage = 'Olet peruuttanut käyttäjän %s käyttöoikeudet';
$strRevoke = 'Mitätöi';
$strRomanian = 'Romanialainen';
$strRowLength = 'Rivin pituus';
$strRowsFrom = 'riviä alkaen rivistä';
$strRowSize = ' Rivin koko ';
$strRows = 'Kpl rivejä';
$strRowsModeFlippedHorizontal = 'vaakatasossa (kierretyt otsikot)';
$strRowsModeHorizontal = 'vaakasuorassa';
$strRowsModeOptions = '%s, otsikoita toistetaan %s:n rivin välein';
$strRowsModeVertical = 'pystysuorassa';
$strRowsStatistic = 'Rivitilastot';
$strRunning = 'palvelimella %s';
$strRunQuery = 'Suorita';
$strRunSQLQueryOnServer = 'Suorita SQL-kysely(jä) palvelimella %s';
$strRunSQLQuery = 'Suorita SQL-kyselyjä tietokannassa %s';
$strRussian = 'Venäläinen';

$strSaveOnServer = 'Tallenna palvelimelle hakemistoon %s';
$strSavePosition = 'Tallenna sijainti';
$strSave = 'Tallenna';
$strScaleFactorSmall = 'Kaavio ei mahdu yhdelle sivulle tällä skaalauksella';
$strSearch = 'Etsi';
$strSearchFormTitle = 'Hae tietokannasta';
$strSearchInTables = 'Tauluista:';
$strSearchNeedle = 'Haettavat sanat tai arvot (%-merkkiä voi käyttää jokerimerkkinä):';
$strSearchOption1 = 'vähintään yksi sanoista';
$strSearchOption2 = 'kaikki sanat';
$strSearchOption3 = 'koko lause';
$strSearchOption4 = 'regexp-haku';
$strSearchResultsFor = 'Tulokset hakusanalla "<i>%s</i>" %s:';
$strSearchType = 'Hae:';
$strSecretRequired = 'Asetustiedosto vaatii nyt salalausetta (blowfish_secret).';
$strSelectADb = 'Valitse tietokanta';
$strSelectAll = 'Valitse kaikki';
$strSelectBinaryLog = 'Valitse näytettävä binääriloki';
$strSelectFields = 'Valitse sarakkeet (vähintään yksi):';
$strSelectForeignKey = 'Valitse vieras avain';
$strSelectNumRows = 'lauseessa';
$strSelectReferencedKey = 'Valitse viittaava avain';
$strSelectTables = 'Valitse taulut';
$strSend = 'Tallenna tiedostoon';
$strSent = 'Lähetetty';
$strServerChoice = 'Valitse palvelin';
$strServerNotResponding = 'Palvelin ei vastaa';
$strServer = 'Palvelin';
$strServers = 'Palvelimet';
$strServerStatus = 'Ajonaikaiset tiedot';
$strServerStatusDelayedInserts = 'Viivästetyt insert-lauseet';
$strServerStatusUptime = 'Tämä MySQL-palvelin on ollut käynnissä %s. Se käynnistettiin %s.';
$strServerTabVariables = 'Muuttujat';
$strServerTrafficNotes = '<b>Palvelinliikenne</b>: Nämä taulukot näyttävät tämän MySQL-palvelimen verkkoliikennetilastot käynnistyksestä lähtien.';
$strServerVars = 'Palvelimen muuttujat ja asetukset';
$strServerVersion = 'Palvelimen versio';
$strSessionStartupErrorGeneral = 'Istuntoa ei voida aloittaa virheittä. Tarkista PHP:n tai verkkopalvelimesi lokitiedostojen antamat virheilmoitukset ja valitse PHP-asennuksen asetukset oikein.';
$strSessionValue = 'Tämän istunnon arvo';
$strSetEnumVal = 'Jos sarakkeen tietotyyppi on "enum" tai "set", syötä vaaditut arvot tässä muodossa: \'a\',\'b\',\'c\'...<br />Jos tarvitset arvoissa kenoviivaa ("\") tai heittomerkkiä ("\'"), laita merkin eteen kenoviiva (esim. \'\\\\xyz\' tai \'a\\\'b\').';
$strShowAll = 'Näytä kaikki';
$strShowColor = 'Näytä värit';
$strShowDatadictAs = 'Datasanakirjan formaatti';
$strShowFullQueries = 'Näytä kyselyt kokonaisuudessaan';
$strShowGrid = 'Näytä ruudukko';
$strShowHideLeftMenu = 'Näytä/kätke vasen valikko';
$strShowingBookmark = 'Näytetään kirjanmerkki';
$strShowingPhp = 'Näytetään PHP-koodina';
$strShowingRecords = 'Näkyvillä rivit ';
$strShowingSQL = 'Näytetään SQL-kysely';
$strShow = 'Näytä';
$strShowOpenTables = 'Näytä avoimet taulut';
$strShowPHPInfo = 'Näytä PHP:n asetustiedot';
$strShowSlaveHosts = 'Näytä alipalvelimet';
$strShowSlaveStatus = 'Näytä alipalvelimen tila';
$strShowStatusBinlog_cache_disk_useDescr = 'Kertoo tilapäistä binäärilokivälimuistia käyttäneiden transaktioiden (tapahtumien) määrän, mutta jotka ovat ylittäneet "binlog_cache_size"-muuttujan arvon ja käyttäneet väliaikaistiedostoa transaktiokyselyjen tallentamiseen.';
$strShowStatusBinlog_cache_useDescr = 'Väliaikaista binäärilokivälimuistia käyttäneiden transaktioiden (tapahtumien) määrä.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Kertoo, kuinka paljon palvelimen automaattisesti luomia tilapäistauluja on levyllä. Jos Created_tmp_disk_tables-parametrin arvo on liian suuri, nosta tmp_table_size:n arvoa, jotta väliaikaisia tauluja säilytettäisiin muistissa eikä levyllä.';
$strShowStatusCreated_tmp_filesDescr = 'Mysqld-palvelun luomien väliaikaistiedostojen määrä.';
$strShowStatusCreated_tmp_tablesDescr = 'Kertoo, kuinka monta tilapäistaulua palvelin on itsestään luonut muistiin kyselyjä suorittaessaan.';
$strShowStatusDelayed_errorsDescr = 'Virheen aiheuttaneiden INSERT DELAYED -kyselyllä kirjoitettujen rivien määrä (virheenä todennäköisesti päällekkäinen avain).';
$strShowStatusDelayed_insert_threadsDescr = 'Käytössä olevien INSERT DELAYED -käsittelijäsäikeiden määrä. Joka ikinen INSERT DELAYED -kyselyä käyttävä taulu saa käyttöönsä oman säikeensä.';
$strShowStatusDelayed_writesDescr = 'INSERT DELAYED -rivien kirjoituksia.';
$strShowStatusFlush_commandsDescr  = 'FLUSH-kyselyjä suoritettu.';
$strShowStatusHandler_commitDescr = 'Sisäisten COMMIT-kyselyjen määrä.';
$strShowStatusHandler_deleteDescr = 'Kertoo, kuinka monta kertaa taulusta on poistettu rivi.';
$strShowStatusHandler_discoverDescr = 'MySQL-palvelin voi kysyä NDB Cluster -tallennustilamoottorilta, tunteeko se tietyn nimisen taulun. Tätä toimintoa kutsutaan todentamiseksi (discovery). Handler_discover ilmaisee todennettujen taulujen määrän.';
$strShowStatusHandler_read_firstDescr = 'Kertoo, kuinka monta kertaa ensimmäistä kohtaa on luettu indeksistä. Jos tämä on suuri, se kertoo siitä, että palvelin suorittaa runsaasti kokonaisia indeksien läpikäyntejä; esimerkiksi SELECT col1 FROM foo, olettaen col1:sen olevan indeksoitu sarake.';
$strShowStatusHandler_read_keyDescr = 'Kertoo, kuinka monta kertaa rivejä on luettu avaimen perusteella. Jos tämä on suuri, se kertoo siitä, että kyselyjesi ja taulujesi indeksointi suoritetaan oikein.';
$strShowStatusHandler_read_nextDescr = 'Kertoo niiden pyyntöjen määrän, jotka lukevat seuraavan rivin avainjärjestyksessä. Tämän arvo kasvaa suorittaessasi kyselyjä indeksisarakkeeseen aluerajoitetta käyttäen tai suorittaessasi indeksihaun.';
$strShowStatusHandler_read_prevDescr = 'Kertoo niiden pyyntöjen määrän, jotka lukevat edellisen rivin avainjärjestyksessä. Tätä lukumenetelmää käytetään lähinnä ORDER BY ... DESC -kyselyllä optimoimiseen.';
$strShowStatusHandler_read_rndDescr = 'Kertoo niiden pyyntöjen määrän, jotka lukevat rivin kiinteän sijainnin perusteella. Tämä on suuri, jos suoritat paljon kyselyjä, jotka edellyttävät tulostietojen lajittelua. Käytät ehkä runsaasti sellaisia kyselyjä, jotka edellyttävät MySQL-palvelinta käymään läpi kaikki taulut, tai virheellisesti avaimia käyttäviä liitoksia.';
$strShowStatusHandler_read_rnd_nextDescr = 'Kertoo, kuinka usein pyynnöillä on luettu seuraava rivi datatiedostosta. Tämä on suuri, jos käyt läpi paljon kokonaisia tauluja. Tämä luku kertoo yleensä siitä, että taulujasi ei ole indeksoitu oikein tai että kyselyjä ei ole kirjoitettu siten, että ne hyödyntäisivät luomiasi indeksejä.';
$strShowStatusHandler_rollbackDescr = 'Sisäisten ROLLBACK-kyselyjen määrä.';
$strShowStatusHandler_updateDescr = 'Taulun rivien päivityspyyntöjen määrä.';
$strShowStatusHandler_writeDescr = 'Kertoo tauluihin sijoitettujen (INSERT) rivien määrän.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Jotakin dataa (epäsiistiä tai siistiä) sisältävien sivujen määrä';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Tällä hetkellä epäsiistinä olevien sivujen määrä.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Siistittäviksi pyydettyjen, puskurivarannossa olevien sivujen määrä.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Vapaiden sivujen määrä.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'InnoDB-puskurivarannon lukittujen sivujen määrä. Nämä ovat sivuja, joita parhaillaan luetaan tai kirjoitetaan tai joita ei voida poistaa tai joiden välimuistia ei voida tyhjentää syystä tai toisesta.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Kertoo niiden sivujen määrän, jotka ovat käytössä administratiivisen ylijäämän, kuten rivinlukitusten tai mukautuvien salausindeksien, varaamisen takia. Tämä arvo voidaan laskea näinkin: Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Puskurivarannon kokonaiskoko sivuina.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'InnoDB:n alulle panemien umpimähkäisten ennakkolukutapausten määrä. Tämä tapahtuu silloin kun suoritetaan kysely, joka käy läpi suuria alueita taulusta umpimähkäisessä järjestyksessä.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'InnoDB:n alulle panemien perättäisten ennakkolukutapausten määrä. Tämä tapahtuu silloin kun InnoDB käy läpi kokonaisen taulun järjestyksessä.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'InnoDB:n suorittamien loogisten lukupyyntöjen määrä.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Kertoo niiden loogisten lukukertojen määrän, joita InnoDB ei voinut toteuttaa puskurivarannosta joutuen lukemaan yhden sivun kerrallaan.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Yleensä InnoDB-puskurivarannon kirjoituspyynnöt suoritetaan taustalla. Jos kuitenkin on luettava tai luotava sivu, ja puhtaita sivuja ei ole saatavilla, joudutaan odottamaan sivujen tyhjentämistä. Tämä laskuri laskee tällaisten odotustapausten määrän. Jos puskurivarannon koko on asetettu sopivaksi, tämän arvon pitäisi olla alhainen.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'InnoDB:n puskurivarantoon tehtyjen kirjoituspyyntöjen määrä.';
$strShowStatusInnodb_data_fsyncsDescr = 'fsync()-toimenpiteitä tähän mennessä.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Tällä hetkellä käynnissä olevien fsync()-toimenpiteiden määrä.';
$strShowStatusInnodb_data_pending_readsDescr = 'Tällä hetkellä käynnissä olevien lukutoimenpiteiden määrä.';
$strShowStatusInnodb_data_pending_writesDescr = 'Tällä hetkellä käynnissä olevien kirjoitustoimenpiteiden määrä.';
$strShowStatusInnodb_data_readDescr = 'Tähän mennessä luetun tiedon määrä tavuina.';
$strShowStatusInnodb_data_readsDescr = 'Kertoo, kuinka monta kertaa tietoja on luettu yhteensä.';
$strShowStatusInnodb_data_writesDescr = 'Kertoo, kuinka monta kertaa tietoja on kirjoitettu yhteensä.';
$strShowStatusInnodb_data_writtenDescr = 'Kertoo, kuinka paljon on tähän mennessä tietoja kirjoitettu (tavuina).';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Suoritettujen päällekkäisten kirjoitustapausten määrä ja tätä varten kirjoitettujen sivujen määrä.';
$strShowStatusInnodb_dblwr_writesDescr = 'Suoritettujen päällekkäisten kirjoitustapausten määrä ja tätä varten kirjoitettujen sivujen määrä.';
$strShowStatusInnodb_log_waitsDescr = 'Liian pienestä lokipuskurista johtuneiden odotusten märä, jolloin puskurin tyhjentämistä jouduttiin odottamaan ennen jatkamista.';
$strShowStatusInnodb_log_write_requestsDescr = 'Lokikirjoituspyyntöjen määrä.';
$strShowStatusInnodb_log_writesDescr = 'Kertoo, kuinka monta kertaa lokitiedostoon on fyysisesti kirjoitettu.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Lokitiedostojen fsync()-kirjoitusten määrä.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Lokitiedoston avointen fsync-synkronointien määrä.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Avoimet lokitiedostokirjoitukset.';
$strShowStatusInnodb_os_log_writtenDescr = 'Lokitiedostoon kirjoitettujen tavujen määrä.';
$strShowStatusInnodb_pages_createdDescr = 'Luotujen sivujen määrä.';
$strShowStatusInnodb_page_sizeDescr = 'InnoDB-sivun esiohjelmoitu koko (oletusarvoisesti se on 16 kt). Useita arvoja lasketaan sivuina; sivukoon avulla voidaan helposti laskea niiden koko tavuina.';
$strShowStatusInnodb_pages_readDescr = 'Luettujen rivien määrä.';
$strShowStatusInnodb_pages_writtenDescr = 'Kirjoitettujen sivujen määrä.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Tällä hetkellä odotettavien rivilukitusten määrä.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Rivilukituksen valmistumiseen kuluva aika keskimäärin, millisekunteina.';
$strShowStatusInnodb_row_lock_timeDescr = 'Rivilukitusten valmistumiseen kuluva aika kaikkinansa, millisekunteina.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Rivilukituksen valmistumiseen kulunut aika enimmillään, millisekunteina.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Kertoo, kuinka monta kertaa rivilukitusta on jouduttu odottamaan.';
$strShowStatusInnodb_rows_deletedDescr = 'InnoDB-tauluista poistettujen rivien määrä.';
$strShowStatusInnodb_rows_insertedDescr = 'InnoDB-tauluihin lisättyjen rivien määrä.';
$strShowStatusInnodb_rows_readDescr = 'InnoDB-taulusta luettujen rivien määrä.';
$strShowStatusInnodb_rows_updatedDescr = 'InnoDB-taulun päivitettyjen rivien määrä.';
$strShowStatusKey_blocks_not_flushedDescr = 'Niiden avainvälimuistissa sijaitsevien avainlohkojen määrä, joihin on tehty muutoksia, mutta joita ei vielä ole tallennettu levylle. Tämä toiminto tunnetaan yleisesti nimellä Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Avainvälimuistissa sijaitsevien käyttämättömien lohkojen määrä. Tämän arvon avulla voit määrittää, kuinka paljon avainvälimuistia halutaan olevan käytössä.';
$strShowStatusKey_blocks_usedDescr = 'Samaan aikaan avainvälimuistissa olleiden lohkojen määrä korkeintaan.';
$strShowStatusKey_read_requestsDescr = 'Kertoo, kuinka monta pyyntöä on suoritettu avainlohkon hakemiseksi välimuistista.';
$strShowStatusKey_readsDescr = 'Kertoo, kuinka monta kertaa levyltä on fyysisesti luettu avainlohkoja. Jos Key_reads-arvo on suuri, key_buffer_size-muuttujaan on ehkä asetettu liian alhainen arvo. Välimuistin käyttötahti voidaan laskea lausekkeella Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Kertoo, kuinka monta kertaa välimuistiin on kirjoitettu avainlohko.';
$strShowStatusKey_writesDescr = 'Kertoo, kuinka monta kertaa levylle on fyysisesti kirjoitettu avainlohko.';
$strShowStatusLast_query_costDescr = 'Viimeksi kootun (compiled) kyselyn kokonaiskulut kyselynoptimoija laskemana. Hyödyllinen suunniteltaessa erilaisia kyselyvaihtoehtoja samaa kyselyä varten. Oletusarvo 0 tarkoittaa, että yhtään kyselyä ei ole vielä koottu.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Niiden rivien määrä, joita odotetaan kirjoitettavan INSERT DELAYED -jonoissa.';
$strShowStatusOpened_tablesDescr = 'Avattujen taulujen määrä. Jos määrä on suuri, tauluvälimuistin arvo saattaa olla liian alhainen.';
$strShowStatusOpen_filesDescr = 'Avoinna olevien tiedostojen määrä.';
$strShowStatusOpen_streamsDescr = 'Avoinna olevien voiden määrä (käytetään enimmäkseen kirjausta varten).';
$strShowStatusOpen_tablesDescr = 'Avoinna olevien taulujen määrä.';
$strShowStatusQcache_free_blocksDescr = 'Vapaitten muistilohkojen määrä kyselyvälimuistissa.';
$strShowStatusQcache_free_memoryDescr = 'Kyselyvälimuistin vapaan muistin määrä.';
$strShowStatusQcache_hitsDescr = 'Välimuistiosumien määrä.';
$strShowStatusQcache_insertsDescr = 'Välimuistiin sijoitettujen kyselyjen määrä.';
$strShowStatusQcache_lowmem_prunesDescr = 'Niiden kyselyjen määrä, jotka on poistettu välimuistista muistin vapauttamiseksi, uusien kyselyjen tallentamiseksi välimuistiin. Tämän tiedon avulla voit asettaa kyselyvälimuistin koon sopivaksi. Kyselyvälimuisti käyttää LRU- eli "viimeksi vähiten käytetyt" -toimintamallia päättääkseen, mitkä kyselyt poistetaan välimuistista.';
$strShowStatusQcache_not_cachedDescr = 'Niiden kyselyjen määrä, joita ei ole tallennettu välimuistiin (ei ole voitu tallentaa välimuistiin tai ei muuten vain ole tallennettu sinne query_cache_type-asetuksen takia).';
$strShowStatusQcache_queries_in_cacheDescr = 'Rekisteröityjen kyselyjen määrä välimuistissa.';
$strShowStatusQcache_total_blocksDescr = 'Lohkojen kokonaismäärä kyselyvälimuistissa.';
$strShowStatusReset = 'Nollaa';
$strShowStatusRpl_statusDescr = 'Replikaation vikasietotila (ei vielä toteutettu).';
$strShowStatusSelect_full_joinDescr = 'Kertoo, kuinka moni liitos ei käytä indeksejä. Jos tämä arvo ei ole 0, sinun tulisi tarkistaa taulujesi indeksit tarkkaan.';
$strShowStatusSelect_full_range_joinDescr = 'Niiden liitosten määrä, jotka käyttivät viitetaulussa (reference table) aluehakua.';
$strShowStatusSelect_range_checkDescr = 'Niiden avaimittomien liitosten määrä, jotka varmistavat avaimien käytön joka rivin jälkeen. (Jos tämä ei ole 0, sinun tulisi tarkistaa taulujesi indeksit huolella.)';
$strShowStatusSelect_rangeDescr = 'Kertoo niiden liitosten määrän, jotka käyttävät rajausta ensimmäisessä taulussa. (Yleensä ei ole vakavaa, vaikka tämä arvo olisi suuri.)';
$strShowStatusSelect_scanDescr = 'Kertoo niiden liitosten määrän, jotka suorittivat ensimmäisestä taulusta täydellisen tarkistuksen.';
$strShowStatusSlave_open_temp_tablesDescr = 'SQL-alisäikeen avointen väliaikaistaulujen määrä tällä hetkellä.';
$strShowStatusSlave_retried_transactionsDescr = 'Kertoo, kuinka monesti replikaation SQL-alisäie on kaikkiaan uudelleen yrittänyt transkatioita käynnistyksestä lähtien.';
$strShowStatusSlave_runningDescr = 'Tämä on päällä (ON), mikäli kyseinen palvelin on pääpalvelimeen kytketty alipalvelin.';
$strShowStatusSlow_launch_threadsDescr = 'Niiden säikeiden määrä, joiden luomiseen on kulunut aikaa enemmän kuin slow_launch_time sekuntia.';
$strShowStatusSlow_queriesDescr = 'Niiden kyselyjen määrä, joiden suorittamiseen on kulunut aikaa enemmän kuin long_query_time sekuntia.';
$strShowStatusSort_merge_passesDescr = 'Lajittelualgoritmiin tarvittavien yhdentymisten (eng. merge) määrä. Jos tämä arvo on suuri, voit suurentaa sort_buffer-muuttujan arvoa.';
$strShowStatusSort_rangeDescr = 'Alueiden (ranges) kanssa suoritettujen lajittelujen määrä.';
$strShowStatusSort_rowsDescr = 'Lajiteltujen rivien määrä.';
$strShowStatusSort_scanDescr = 'Niiden lajittelutoimenpiteiden määrä, jotka on suoritettu käymällä taulu läpi.';
$strShowStatusTable_locks_immediateDescr = 'Kertoo, kuinka monesti taulu on saatu lukittua heti.';
$strShowStatusTable_locks_waitedDescr = 'Kertoo, kuinka monesti taulua ei ole saatu heti lukittua ja on jouduttu odottamaan. Jos tämä on suuri, ja suorituskyvyn kanssa on ongelmia, on hyvä ensin optimoida kyselyjä ja sitten joko jakaa taulusi useampaan osaan tai käyttää hyödyksi replikaatiota.';
$strShowStatusThreads_cachedDescr = 'Säievälimuistissa sijaitsevien säikeiden määrä. Välimuistin käyttötahti voidaan laskea näin kaavalla Threads_created/yhteyksien lkm. Jos tämä arvo on punainen, thread_cache_size-muuttujan arvoa tulisi nostaa.';
$strShowStatusThreads_connectedDescr = 'Tällä hetkellä avoinna olevien yhteyksien määrä.';
$strShowStatusThreads_createdDescr = 'Yhteyksien käsittelyä varten luotujen säikeiden määrä. Jos Threads_created on suuri, kannattaa kasvattaa thread_cache_size-muuttujan arvoa. (Mikäli säikeet on toteutettu hyvin, tällä ei ole kovin suurta vaikutusta suorituskykyyn.)';
$strShowStatusThreads_runningDescr = 'Hereillä olevien säikeiden määrä.';
$strShowTableDimension = 'Näytä taulujen ulottuvuus';
$strShowTables = 'Näytä taulut';
$strShowThisQuery = ' Näytä kyselylause uudelleen ';
$strSimplifiedChinese = 'Yksinkertaistettu kiina';
$strSingly = '(yksitellen)';
$strSize = 'Koko';
$strSkipQueries = 'Tiedoston alusta ohitettavien tietueiden (kyselyjen) määrä';
$strSlovak = 'Slovakialainen';
$strSlovenian = 'Slovenialainen';
$strSmallBigAll = 'Kaikki pienenä/suurena';
$strSnapToGrid = 'Sovita ruudukkoon';
$strSocketProblem = "(tai paikallisen MySQL-palvelimen sockettia ei ole konfiguroitu oikein)";
$strSortByKey = 'Lajittele avaimen mukaan';
$strSorting = 'Lajittelu';
$strSort = 'Järjestys';
$strSpaceUsage = 'Levytilan käyttö';
$strSpanish = 'Espanjalainen';
$strSplitWordsWithSpace = 'Sanat erotellaan välilyönnillä.';
$strSQLCompatibility = 'SQL-yhteensopiva tila';
$strSQLExportType = 'Vientityyppi';
$strSQLParserBugMessage = 'Olet mahdollisesti löytänyt ohjelmointivirheen SQL-parserista. Tarkista SQL-lauseesi, erityisesti lainausmerkit merkkijonojen alusta ja lopusta. Toinen mahdollinen virheen aiheuttaja on se, että olet siirtämässä tiedostoa, jossa on binääritietoa lainausmerkkien ulkopuolella. Jos mahdollista, kokeile SQL-lausettasi suoraan komentoriviltä. MySQL-palvelimen antama virheilmoitus näkyy alla, mikäli se sellaisen antoi. Jos lause toimi komentoriviltä, mutta ei phpMyAdminista, etsi se rivi jolla virheilmoitus ilmeni ja lähetä meille virheraportti, johon liität alla olevan koodin:';
$strSQLParserUserError = 'SQL-lauseessasi näyttää olevan jokin virhe. MySQL-palvelimen antama virheilmoitus näkyy alla, mikäli palvelin sellaisen antoi.';
$strSQLQuery = 'SQL-kysely';
$strSQLResult = 'SQL-kyselyn tulos';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Tunniste ei kelpaa';
$strSQPBugUnclosedQuote = 'Toinen lainausmerkki puuttuu merkkijonon lopusta';
$strSQPBugUnknownPunctuation = 'Tuntematon välimerkki';
$strStandInStructureForView = 'Näkymän sijaisrakenne';
$strStatCheckTime = 'Viimeksi tarkistettu';
$strStatCreateTime = 'Luotu';
$strStatement = 'Tieto';
$strStatisticsOverrun = 'Ruuhkaisten palvelinten tavulaskurit saattavat ylivuotaa, joten MySQL-palvelimen ilmoittamat tilastotiedot saattavat olla virheellisiä.';
$strStatUpdateTime = 'Viimeksi päivitetty';
$strStatus = 'Tila';
$strStorageEngines = "Tallennustilamoottorit";
$strStorageEngine = "Tallennustilamoottori";
$strStrucCSV = 'CSV-muotoista tietoa';
$strStrucData = 'Rakenne ja tiedot';
$strStrucExcelCSV = 'MS Excelin CSV-muoto';
$strStrucNativeExcel = 'Natiivi MS Excel -tieto';
$strStrucOnly = 'Vain rakenne';
$strStructPropose = 'Esitä taulun rakenne';
$strStructureForView = 'Näkymän rakenne';
$strStructure = 'Rakenne';
$strSubmit = 'Lähetä';
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
$strTableHasBeenFlushed = 'Taulun %s välimuisti on tyhjennetty';
$strTableIsEmpty = 'Taulu on tyhjä!';
$strTableMaintenance = 'Taulun huolto';
$strTableName = 'Taulun nimi';
$strTableOfContents = 'Sisällysluettelo';
$strTableOptions = 'Taulun valinnat';
$strTables = '%s taulu(a)';
$strTableStructure = 'Rakenne taululle';
$strTable = 'Taulu';
$strTakeIt = 'käytä tätä';
$strTblPrivileges = 'Taulukohtaiset käyttöoikeudet';
$strTempData = 'Väliaikaista tietoa';
$strTextAreaLength = ' Pituudestaan johtuen<br /> tätä saraketta ei ehkä voi muokata ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'Oletusteemaa %s ei löydy!';
$strThemeNoPreviewAvailable = 'Esikatselu ei ole saatavilla.';
$strThemeNotFound = 'Teemaa %s ei löydy!';
$strThemeNoValidImgPath = 'Kelvollista polkua teemalle %s ei löytynyt.';
$strThemePathNotFound = 'Teeman %s polkua ei löydy!';
$strTheme = 'Teema/tyyli';
$strThisHost = 'Tämä isäntä';
$strThreads = 'Säikeet';
$strThreadSuccessfullyKilled = 'Säikeen %s lopetus onnistui.';
$strTime = 'Aika';
$strTimeoutInfo = 'Edellinen tuonti keskeytyi aikakatkaisuun; lähetettyäsi tiedoston uudestaan jatkamme kohdasta %d.';
$strTimeoutNothingParsed = 'Viimeisestä suorituskerrasta huolimatta mitään tietoa ei ole jäsennelty; tämä tarkoittaa yleensä sitä, että phpMyAdmin ei voi suorittaa tätä tuontia loppuun asti, ellei php:n suoritusaikarajaa kasvateta.';
$strTimeoutPassed = 'Skriptin suoritus aikakatkaistiin; jos haluat suorittaa tuonnin loppuun saakka, lähetä sama tiedosto uudestaan, ja tuomista voidaan jaktaa.';
$strToFromPage = 'Sivulta/sivulle';
$strToggleScratchboard = 'Näytä/kätke luonnospöytä (scratchboard)';
$strToggleSmallBig = 'Vaihda pieneksi/suureksi';
$strToSelectRelation = 'Valitaksesi relaation, paina :';
$strTotalUC = 'Yhteensä';
$strTotal = 'yhteensä';
$strTraditionalChinese = 'Perinteinen kiina';
$strTraditionalSpanish = 'Perinteinen espanja';
$strTraffic = 'Liikenne';
$strTransactionCoordinator = 'Transaktion (tapahtuman) koordinaattori';
$strTransformation_application_octetstream__download = 'Näytä linkki kentän binääritiedon lataamiseen. Ensimmäinen valinta on binääritiedoston tiedostonimi. Toinen valinta on mahdollisen taulun rivin kenttänimi, jolla tiedostonimi sijaitsee. Jos käytät toista (2) valintaa, sinun on asetettava ensimmäinen valinta tyhjäksi.';
$strTransformation_application_octetstream__hex = 'Näyttää tiedon heksalukuina. Valinnainen, ensimmäinen parametri määrittelee, kuinka usein välilyönti lisätään (oletusarvo on 2).';
$strTransformation_image_jpeg__inline = 'Näyttää klikattavan pikkukuvan; valinnat: leveyden,korkeuden pikseleinä (säilyttää alkuperäisen suhteen)';
$strTransformation_image_jpeg__link = 'Näyttää linkin tähän kuvaan (eli suora blob-imurointi).';
$strTransformation_image_png__inline = 'Katso image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Näyttää kentän muotoiltuna päivämääränä TIME-, TIMESTAMP-, DATETIME- tai numeerisen UNIX-aikaleiman pohjalta. Ensimmäinen valinta on aikaleimaan (oletuksena 0) lisättävä siirros (tunteina). Toisella valinnalla on mahdollista määrittää eri muotoinen päiväysmerkkijono. Kolmas valinta määrää, käytetäänkö päiväyksessä paikallis- vai UTC-aikaa (käytä "local"- tai "utc"-merkkijonoja). Päiväyksen muodossa käytetään asetuksen mukaisesti erilaista arvoa; katso ohjeet "local"-asetuksen käytöstä PHP:n dokumentaation strftime()-funktiosta, "utc"-asetus taas käyttää gmdate()-funktiota.';
$strTransformation_text_plain__external = 'VAIN LINUXILLE: Käynnistää ulkoisen ohjelman ja syöttää kenttätiedot oletusarvoisen syötteen kautta. Palauttaa ohjelman oletusarvoisen tulosteen. Oletusarvona on Tidy, HTML-koodin tulostamiseksi siististi. Tietoturvasyistä joudut muokkaamaan käsin tiedostoa libraries/transformations/text_plain__external.inc.php ja lisäämään työkalut, joiden ajon haluat sallia. Ensimmäinen valinta on silloin haluamasi ohjelman numero ja toinen valinta määrittää ohjelmalle annettavat parametrit. Kolmannen parametrin ollessa yksi (1) tuloste muunnetaan käyttäen htmlspecialchars()-funktiota (Oletus on 1). Neljännen parametrin ollessa yksi (1) sisältökennoon lisätään NOWRAP, jotta koko tuloste näkyy ilman ennakkomuotoiluja (Oletus 1)';
$strTransformation_text_plain__formatted = 'Säilyttää kentän alkuperäiset muotoilut. Kenoviivoja ei käytetä erikoismerkkien edellä.';
$strTransformation_text_plain__imagelink = 'Näyttää kuvan ja linkin, kenttä sisältää tiedostonimen; ensimmäinen valinta on etuliite, eli esimerkiksi "http://domain.com/", toinen valinta on leveys pikseleinä, kolmas on korkeus.';
$strTransformation_text_plain__link = 'Näyttää linkin, kenttä sisältää tiedostonimen; ensimmäinen valinta on etuliite, eli esimerkiksi "http://domain.com/", toinen valinta on linkin otsikko.';
$strTransformation_text_plain__sql = 'Muotoilee SQL-kyselyn syntaksivärityksellä.';
$strTransformation_text_plain__substr = 'Näyttää vain osan merkkijonoa. Ensimmäinen valinta on tarkoitettu määrittelemään siirrosta, jonka kohdalta tekstin näyttäminen aloitetaan (Oletus: 0). Toinen valinta kertoo, kuinka monta merkkiä tekstistä näytetään. Tämän ollessa tyhjä merkkijonosta näytetään kaikki loput tekstit. Kolmas valinta määrittelee, mitä merkkejä merkkijonon perään lisätään sitä näytettäessä (Oletus: "...") .';
$strTruncateQueries = 'Näytä typistetyt kyselyt';
$strTurkish = 'Turkkilainen';
$strType = 'Tyyppi';

$strUkrainian = 'Ukrainalainen';
$strUncheckAll = 'Poista valinta kaikista';
$strUnicode = 'Unicode';
$strUnique = 'Uniikki';
$strUnknown = 'tuntematon';
$strUnselectAll = 'Poista valinta kaikista';
$strUnsupportedCompressionDetected = 'Yritit ladata tiedostoa, joka käyttää tuntematonta pakkausmuotoa (%s). Tukea kyseiselle muodolle ei joko ole toteutettu, tai se on asetuksin poistettu käytöstä.';
$strUpdatePrivMessage = 'Käyttäjän %s käyttöoikeudet on päivitetty.';
$strUpdateProfileMessage = 'Profiili on päivitetty.';
$strUpdateQuery = 'Päivitä kysely';
$strUpdComTab = 'Tarkista dokumentaatiosta, kuinka voit päivittää Column_comments-taulusi';
$strUpgrade = 'Sinun pitäisi päivittää versioon %s %s tai sitä myöhempään versioon.';
$strUploadErrorCantWrite = 'Tiedoston kirjoitus levylle epäonnistui.';
$strUploadErrorExtension = 'Laajennus keskeytti tiedoston lähetyksen.';
$strUploadErrorFormSize = 'Lähetetyn tiedoston koko ylittää HTML-lomakkeessa määritetyn MAX_FILE_SIZE-asetuksen arvon.';
$strUploadErrorIniSize = 'Lähetyn tidoston koko ylittää php.ini-tiedoston upload_max_filesize-asetuksen arvon.';
$strUploadErrorNoTempDir = 'Tilapäiskansio puuttuu.';
$strUploadErrorPartial = 'Tiedosto lähetettiin vain osittain.';
$strUploadErrorUnknown = 'Tuntematon virhe tiedostoa lähetettäessä.';
$strUploadLimit = 'Yritit todennäköisesti lähettää palvelimelle liian suurta tiedostoa. Katso lisätietoja %sdokumentaatiosta%s tämän rajoituksen muuttamiseksi.';
$strUploadsNotAllowed = 'Tiedostojen lähetystä ei ole sallittu tällä palvelimella.';
$strUsage = 'Käyttö';
$strUseBackquotes = 'Pane taulujen ja sarakkeiden nimet lainausmerkkeihin';
$strUsedPhpExtensions = 'Käytössä olevat PHP-laajennukset';
$strUseHostTable = 'Käytä palvelintaulua';
$strUserAlreadyExists = 'Käyttäjä %s on jo olemassa!';
$strUserEmpty = 'Käyttäjän nimi puuttuu!';
$strUser = 'Käyttäjä';
$strUserName = 'Käyttäjänimi';
$strUserNotFound = 'Valittua käyttäjää ei löytynyt käyttöoikeustaulusta.';
$strUserOverview = 'Käyttäjien yleiskatsaus';
$strUsersDeleted = 'Valitsemiesi käyttäjien poisto onnistui.';
$strUsersHavingAccessToDb = 'Käyttäjät, joilla on oikeus käyttää kohdetta &quot;%s&quot;';
$strUseTabKey = 'Käytä arvojen välillä siirtymiseen sarkainta. Ctrl- ja nuolinäppäimillä voit siirtyä mihin tahansa kohtaan.';
$strUseTables = 'Käytä tauluja';
$strUseTextField = 'Käytä tekstikenttää';
$strUseThisValue = 'Käytä tätä arvoa';

$strValidateSQL = 'Tarkista SQL-kysely';
$strValidatorError = 'SQL-kelpuutinta ei voitu käynnistää. Tarkista, että olet asentanut tarpeelliset PHP-laajennukset. Lisätietoa löytyy %sdokumentaatiosta%s.';
$strValue = 'Arvo';
$strVar = 'Muuttuja';
$strVersionInformation = "Versiotiedot";
$strViewDumpDatabases = 'Näytä tietokannoista vedos (skeema)';
$strViewDumpDB = 'Tee vedos tietokannasta';
$strViewDump = 'Tee vedos taulusta';
$strViewHasBeenDropped = "Näkymä %s on poistettu";
$strViewMaxExactCount = 'Tässä näkymässä on yli %s riviä. Katso lisätietoja %sdokumentaatiosta%s.';
$strView = "Näkymä";
$strViewName = 'VIEW-arvon nimi';

$strWebServerUploadDirectoryError = 'Valitsemaasi hakemistoa ei voitu käyttää tiedostojen siirtämiseen';
$strWebServerUploadDirectory = 'palvelimen hakemisto tiedostojen siirtoa varten';
$strWelcome = 'Tervetuloa, toivottaa %s';
$strWestEuropean = 'Länsieurooppalainen';
$strWildcard = 'jokerimerkki';
$strWindowNotFound = 'Kohdeselainikkunaa ei voitu päivittää. Syynä voi olla se, että olet sulkenut isäntäikkunan tai että selaimesi tietoturva-asetukset estävät ikkunoiden väliset päivitystoiminnot.';
$strWithChecked = 'Valitut:';
$strWriteRequests = 'Kirjoituspyynnöt';
$strWrongUser = 'Väärä käyttäjätunnus tai salasana. Pääsy kielletty.';

$strXML = 'XML';

$strYes = 'Kyllä';

$strZeroRemovesTheLimit = 'Huom: Näiden valintojen asettaminen nollaksi (0) poistaa rajoituksen.';
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

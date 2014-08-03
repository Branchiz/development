<?php
/* $Id: dutch-iso-8859-15.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/*
 * Updated by "CaliMonk" <calimonk at gmx.net> on 2005/01/04.
 */

$charset = 'iso-8859-15';
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y om %H:%M';
$timespanfmt = '%s dagen, %s uren, %s minuten en %s seconden';

$strAbortedClients = 'Afgehaakte';
$strAccessDeniedExplanation = 'phpMyAdmin probeerde met de MySQL server te verbinden maar de server weigerde de verbinding. Controleer de host, de gebruikersnaam en het wachtwoord in config.inc.php en zorg er voor dat deze overeenkomen met de informatie die u van de Beheerder van de MySQL server kreeg.';
$strAccessDenied = 'Toegang geweigerd ';
$strAction = 'Actie';
$strAddAutoIncrement = 'Voeg AUTO_INCREMENT waarde toe';
$strAddConstraints = 'Voeg beperkingen toe';
$strAddDeleteColumn = 'Toevoegen/Verwijderen Veld Kolommen';
$strAddDeleteRow = 'Toevoegen/Verwijderen Criteria Rij';
$strAddFields = 'Voeg %s veld(en) toe';
$strAddHeaderComment = 'Voeg een commentaar toe in de header (\\n om regels af te breken';
$strAddIntoComments = 'Voeg toe in commentaar';
$strAddNewField = 'Nieuw veld toevoegen';
$strAddPrivilegesOnDb = 'Voeg privileges toe aan de volgende database';
$strAddPrivilegesOnTbl = 'Voeg privileges toe aan de volgende tabel';
$strAddSearchConditions = 'Zoek condities toevoegen (het "where" gedeelte van de query):';
$strAddToIndex = 'Voeg &nbsp;%s&nbsp; kolom(men) toe aan index';
$strAddUserMessage = 'U heeft een nieuwe gebruiker toegevoegd.';
$strAddUser = 'Voeg een nieuwe gebruiker toe';
$strAdministration = 'Administratie';
$strAffectedRows = 'Getroffen rijen:';
$strAfterInsertBack = 'Terug';
$strAfterInsertNewInsert = 'Voeg een nieuw record toe';
$strAfterInsertNext = 'Bewerk volgende rij';
$strAfterInsertSame = 'Ga terug naar deze pagina';
$strAfter = 'Na %s';
$strAll = 'Alle';
$strAllTableSameWidth = 'Alle tabellen weergeven met dezelfde breedte?';
$strAlterOrderBy = 'Wijzig het "Sorteren op/Order by" van de tabel';
$strAnalyzeTable = 'Analyseer tabel';
$strAnd = 'En';
$strAnIndex = 'Een index is toegevoegd aan %s';
$strAny = 'Elke'; //! Willekeurige?
$strAnyHost = 'Een willekeurige host';
$strAnyUser = 'Een willekeurige gebruiker';
$strApproximateCount = 'Kan ongeveer zijn. Zie FAQ 3.11';
$strAPrimaryKey = 'Een primaire sleutel is toegevoegd aan %s';
$strArabic = 'Arabisch';
$strArmenian = 'Armeens';
$strAscending = 'Oplopend';
$strAtBeginningOfTable = 'Aan het begin van de tabel';
$strAtEndOfTable = 'Aan het eind van de tabel';
$strAttr = 'Attributen';
$strAutomaticLayout = 'Automatische lay-out';

$strBack = 'Terug';
$strBaltic = 'Baltisch';
$strBeginCut = 'Begin KNIP';
$strBeginRaw = 'Begin RAW';
$strBinary = ' Binair ';
$strBinaryDoNotEdit = ' Binair - niet aanpassen ';
$strBinaryLog = 'Binaire log';
$strBinLogEventType = 'Event type';
$strBinLogInfo = 'Informatie';
$strBinLogName = 'Log naam';
$strBinLogOriginalPosition = 'Originele positie';
$strBinLogPosition = 'Positie';
$strBinLogServerId = 'Server ID';
$strBookmarkAllUsers = 'Geef elke gebruiker toegang tot deze bookmark';
$strBookmarkDeleted = 'De boekenlegger (Bookmark) is verwijderd.';
$strBookmarkLabel = 'Label';
$strBookmarkQuery = 'Opgeslagen SQL-query';
$strBookmarkThis = 'Sla deze SQL-query op';
$strBookmarkView = 'Alleen bekijken';
$strBrowseForeignValues = 'Bekijk vreemde waardes';
$strBrowse = 'Verkennen';
$strBulgarian = 'Bulgaars';
$strBzError = 'phpMyAdmin is er niet in geslaagd om de dump te comprimeren doordat de Bz2 extensie in deze php versie niet functioneert. Het wordt sterk aangeraden om de instelling <code>$cfg[\'BZipDump\']</code> in uw phpMyAdmin configuratie bestand op <code>FALSE</code> te zetten. Als u Bz2 compressie wilt gebruiken zult u moeten upgraden naar een latere php versie. Zie php bug report %s voor meer informatie.';
$strBzip = '"ge-bzipt"';

$strCalendar = 'Kalender';
$strCannotLogin = 'Kan niet inloggen op de MySQL server';
$strCantLoad = 'Kan de [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a]-extensie niet laden. Controleer de PHP configuratie.';
$strCantLoadRecodeIconv = 'Kan iconv of recode extensies niet laden die nodig zijn voor de Karakterset conversie, configureer php om deze extensies toe te laten of schakel Karakterset conversie uit in phpMyAdmin';
$strCantRenameIdxToPrimary = 'Kan index niet naar PRIMARY hernoemen';
$strCantUseRecodeIconv = 'Kan iconv, libiconv en recode_string functies niet gebruiken zolang de extensies geladen moeten worden. Controleer de php configuratie.';
$strCardinality = 'Kardinaliteit';
$strCaseInsensitive = 'hoofdletter ongevoelig';
$strCaseSensitive = 'hoofdletter gevoelig';
$strCentralEuropean = 'Centraal Europees';
$strChangeCopyModeCopy = '... behoud de oude.';
$strChangeCopyModeDeleteAndReload = ' ... verwijder de oude van de user tabellen en vernieuw de privileges achteraf.';
$strChangeCopyModeJustDelete = ' ... verwijder de oude van de user tabellen.';
$strChangeCopyMode = 'Maak een nieuwe gebruiker aan met dezelfde privileges en ...';
$strChangeCopyModeRevoke = ' ... herstel alle actieve privileges van de oude en verwijder deze daarna.';
$strChangeCopyUser = 'Wijzig de Login Informatie / Kopieer gebruiker';
$strChangeDisplay = 'Kies weer te geven veld';
$strChangePassword = 'Wijzig wachtwoord';
$strChange = 'Veranderen';
$strCharset = 'Karakterset';
$strCharsetOfFile = 'Karakter set van het bestand:';
$strCharsetsAndCollations = 'Karakter Sets en Collaties';
$strCharsets = 'Karaktersets';
$strCheckAll = 'Selecteer alles';
$strCheckOverhead = 'Selecteer tabellen met overhead';
$strCheckPrivs = 'Controleer privileges';
$strCheckPrivsLong = 'Controleer privileges voor database &quot;%s&quot;.';
$strCheckTable = 'Controleer tabel';
$strChoosePage = 'Kies een pagina om aan te passen';
$strColComFeat = 'Toon kolom commentaar';
$strCollation = 'Collatie';
$strColumnNames = 'Kolom namen';
$strColumnPrivileges = 'Kolom-specifieke privileges';
$strCommand = 'Commando';
$strComments = 'Commentaar';
$strCommentsForTable = 'COMMENTAAR VOOR TABEL';
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatibel';
$strCompleteInserts = 'Invoegen voltooid';
$strCompression = 'Compressie';
$strConfigFileError = 'phpMyAdmin kon het configuratie bestand niet lezen! <br />Dit kan gebeuren als php een parse error in dit bestand aantreft of dit bestand helemaal niet gevonden kan worden.<br />Roep het configuratie bestand direct aan met de snelkoppeling hieronder en lees de php foutmelding(en). In de meeste gevallen ontbreekt er ergens bijvoorbeeld een quote.<br /> Wanneer er een blanco pagina wordt weergegeven zijn er geen problemen.';
$strConfigureTableCoord = 'Configureer de co�rdinaten voor de tabel %s';
$strConnectionError = 'Kan niet verbinden: ongeldige instellingen.';
$strConnections = 'Connecties';
$strConstraintsForDumped = 'Beperkingen voor gedumpte tabellen';
$strConstraintsForTable = 'Beperkingen voor tabel';
$strCookiesRequired = 'Cookies moeten aan staan voorbij dit punt.';
$strCopyDatabaseOK = 'Database %s is gekopieerd naar %s';
$strCopyTable = 'Kopieer tabel naar (database<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s is gekopieerd naar %s.';
$strCopyTableSameNames = 'Kan de tabel niet naar dezelfde kopi�ren!';
$strCouldNotKill = 'phpMyAdmin is er niet in geslaagd om de %s te sluiten.Waarschijnlijk is het al gesloten.';
$strCreate = 'Aanmaken';
$strCreateIndex = 'Cre�er een index op kolommen&nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Cre�er een nieuwe index';
$strCreateNewDatabase = 'Nieuwe database aanmaken';
$strCreateNewTable = 'Nieuwe tabel aanmaken in database %s';
$strCreatePage = 'Cre�er een nieuwe pagina';
$strCreatePdfFeat = 'Aanmaken van PDF bestanden';
$strCreationDates = 'Creatie/Update/Controleer datum';
$strCriteria = 'Criteria';
$strCroatian = 'Kroatisch';
$strCyrillic = 'Cyrillisch';
$strCzechSlovak = 'Tsjechische-Slowaak';
$strCzech = 'Tsjechisch';

$strDanish = 'Deens';
$strDatabase = 'Database';
$strDatabaseEmpty = 'De database naam is leeg!';
$strDatabaseExportOptions = 'Database export opties';
$strDatabaseHasBeenDropped = 'Database %s is vervallen.';
$strDatabases = 'databases';
$strDatabasesDropped = '%s databases zijn succesvol verwijderd.';
$strDatabasesStats = 'Database statistieken';
$strDatabasesStatsDisable = 'Statistieken uitzetten';
$strDatabasesStatsEnable = 'Statistieken aanzetten';
$strDatabasesStatsHeavyTraffic = 'Attentie: Indien u hier Database statistieken aanzet kan dit zorgen voor veel data verkeer tussen de webserver en de MySQL server.';
$strData = 'Data';
$strDataDict = 'Data Woordenboek';
$strDataOnly = 'Alleen data';
$strDBComment = 'Database commentaar: ';
$strDBCopy = 'Kopieer database naar';
$strDbPrivileges = 'Database-specifieke privileges';
$strDBRename = 'Hernoem database naar';
$strDbSpecific = 'database-specifiek';
$strDefault = 'Standaardwaarde';
$strDefaultValueHelp = 'Voer voor standaard waarden aub een enkele waarde in, zonder backslash of aanhalingstekens, gebruik makend van dit formaat: a';
$strDefragment = 'Defragment tabel';
$strDelayedInserts = 'Gebruik vertraagde inserts';
$strDeleteAndFlushDescr = 'Dit is de nette manier, maar het vernieuwen van de privileges kan even duren.';
$strDeleteAndFlush = 'Verwijder de gebruikers en vernieuw de privileges daarna.';
$strDeleted = 'De rij is verwijderd';
$strDeletedRows = 'Verwijder rijen:';
$strDelete = 'Verwijderen';
$strDeleting = 'Verwijderen van %s';
$strDelOld = 'De huidige pagina heeft referenties met tabellen die niet langer bestaan. Wilt u deze referenties verwijderen?';
$strDescending = 'Aflopend';
$strDescription = 'Beschrijving';
$strDictionary = 'Woordenboek';
$strDisabled = 'Uitgeschakeld';
$strDisableForeignChecks = 'controle op vreemde sleutels uitschakelen';
$strDisplayFeat = 'Toon Opties';
$strDisplayOrder = 'Weergave volgorde:';
$strDisplayPDF = 'Geef het PDF schema weer';
$strDoAQuery = 'Voer een query op basis van een vergelijking uit (wildcard: "%")';
$strDocu = 'Documentatie';
$strDoYouReally = 'Weet u zeker dat u dit wilt ';
$strDropDatabaseStrongWarning = 'U staat op het punt een complete database te DESTROY-en!';
$strDropUsersDb = 'Verwijder de databases die dezelfde naam hebben als de gebruikers.';
$strDrop = 'Verwijderen';
$strDumpingData = 'Gegevens worden uitgevoerd voor tabel';
$strDumpSaved = 'Dump is bewaard als %s.';
$strDumpXRows = '%s rijen aan het dumpen, start bij rij %s.';
$strDynamic = 'dynamisch';

$strEditPDFPages = 'PDF Pagina\'s aanpassen';
$strEditPrivileges = 'Wijzig rechten';
$strEdit = 'Wijzigen';
$strEffective = 'Effectief';
$strEmpty = 'Legen';
$strEmptyResultSet = 'MySQL gaf een lege resultaat set terug (0 rijen).';
$strEnabled = 'Ingeschakeld';
$strEncloseInTransaction = 'Sluit de export in een transactie';
$strEndCut = 'Einde KNIP';
$strEnd = 'Einde';
$strEndRaw = 'Einde RAW';
$strEnglish = 'Engels';
$strEnglishPrivileges = ' Aantekening: de namen van de MySQL rechten zijn uitgelegd in het Engels ';
$strError = 'Fout';
$strEscapeWildcards = 'Wildcards _ en % moeten worden ge-escaped met een \ om ze letterlijk te gebruiken';
$strEstonian = 'Estlands';
$strExcelEdition = 'Excel editie';
$strExecuteBookmarked = 'Voor de gebookmarkte query uit';
$strExplain = 'Verklaar SQL';
$strExport = 'Exporteer';
$strExtendedInserts = 'Uitgebreide invoegingen';
$strExtra = 'Extra';

$strFailedAttempts = 'Mislukte pogingen';
$strFieldHasBeenDropped = 'Veld %s is vervallen';
$strFieldsEnclosedBy = 'Velden ingesloten door';
$strFieldsEscapedBy = 'Velden ontsnapt door';
$strFieldsTerminatedBy = 'Velden be�indigd door';
$strFields = 'Velden';
$strField = 'Veld';
$strFileAlreadyExists = 'Bestaand %s bestaat al op de server, verander de bestandsnaam of controleer overschrijf opties.';
$strFileCouldNotBeRead = 'Bestand kon niet worden gelezen';
$strFileNameTemplate = 'File naam template';
$strFileNameTemplateRemember = 'Onthoud template';
$strFixed = 'vast';
$strFlushPrivilegesNote = 'Opmerking: phpMyAdmin krijgt de rechten voor de gebruikers uit de MySQL privileges tabel. De content van deze tabel kan verschillen met de rechten van de server als er handmatig aanpassingen zijn aangebracht. Mocht dit het geval zijn dan moet men %sde privilege tabel vernieuwen%s voordat men verder gaat.';
$strFlushTable = 'Schoon de tabel ("FLUSH")';
$strFormat = 'Formatteren';
$strFormEmpty = 'Er ontbreekt een waarde in het formulier!';
$strFullText = 'Volledige teksten';
$strFunction = 'Functie';

$strGenBy = 'Gegenereerd door';
$strGeneralRelationFeat = 'Basis relatie opties';
$strGenTime = 'Generatie Tijd';
$strGeorgian = 'Georgisch';
$strGerman = 'Duits';
$strGlobal = 'globaal';
$strGlobalPrivileges = 'Globale privileges';
$strGlobalValue = 'Globale waarde';
$strGo = 'Start';
$strGrantOption = 'Toekennen';
$strGreek = 'Grieks';
$strGzip = '"ge-gzipt"';

$strHasBeenAltered = 'is veranderd.';
$strHasBeenCreated = 'is aangemaakt.';
$strHaveToShow = 'Er moet ten minste 1 weer te geven kolom worden gekozen';
$strHebrew = 'Hebreeuws';
$strHome = 'Home';
$strHomepageOfficial = 'Offici�le phpMyAdmin Website';
$strHostEmpty = 'De host naam is leeg!';
$strHost = 'Host';
$strHungarian = 'Hongaars';

$strIcelandic = 'IJslands';
$strId = 'ID';
$strIdxFulltext = 'Volledige tekst';
$strIgnoreInserts = 'Gebruik ignore inserts';
$strIgnore = 'Negeer';
$strImportFiles = 'Importeren bestanden';
$strIndexes = 'Indexen';
$strIndexHasBeenDropped = 'Index %s is vervallen';
$strIndex = 'Index';
$strIndexName = 'Index naam&nbsp;:';
$strIndexType = 'Index type&nbsp;:';
$strIndexWarningTable = 'Problemen met de index(en) van de tabel `%s`';
$strInnodbStat = 'InnoDB Status';
$strInsecureMySQL = 'Uw configuratie bestand bevat instellingen (root zonder wachtwoord) die betrekking hebben tot de standaard MySQL account. Uw MySQL server draait met deze standaard waardes, en is open voor ongewilde toegang, het wordt dus aangeraden dit op te lossen.';
$strInsertAsNewRow = 'Voeg toe als nieuwe rij';
$strInsertedRowId = 'Ingevoegde rij id:';
$strInsertedRows = 'Ingevoegde rijen:';
$strInsert = 'Invoegen';
$strInternalNotNecessary = '* Een interne relatie is niet nodig wanneer er ook een InnoDB aanwezig is.';
$strInternalRelations = 'Interne relaties';
$strInUse = 'in gebruik';

$strJapanese = 'Japans';
$strJumpToDB = 'Ga naar database &quot;%s&quot;.';
$strJustDeleteDescr = 'De &quot;verwijderde&quot; gebruikers zullen de server kunnen gebruiken zoals altijd zolang de privileges nog niet zijn vernieuwd.';
$strJustDelete = 'Verwijder gewoon de gebruikers van de privileges tabel.';

$strKeepPass = 'Wijzig het wachtwoord niet';
$strKeyname = 'Sleutel naam';
$strKill = 'stop proces';
$strKorean = 'Koreaans';

$strLandscape = 'Landschap';
$strLatexCaption = 'Tabel titel';
$strLatexContent = 'Content van tabel __TABLE__';
$strLatexContinuedCaption = 'Vervolgde tabel titel';
$strLatexContinued = '(vervolgd)';
$strLatexIncludeCaption = 'Voeg tabel titel toe';
$strLatexLabel = 'Label sleutel';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Structuur van de tabel __TABLE__';
$strLatvian = 'Lets';
$strLengthSet = 'Lengte/Waardes*';
$strLimitNumRows = 'records per pagina';
$strLinesTerminatedBy = 'Regels be�indigd door';
$strLinkNotFound = 'Link niet gevonden';
$strLinksTo = 'Gelinkt naar';
$strLithuanian = 'Litouws';
$strLocalhost = 'lokaal';
$strLocationTextfile = 'Locatie van het tekstbestand';
$strLoginInformation = 'Login Informatie';
$strLogin = 'Inloggen';
$strLogout = 'Uitloggen';
$strLogPassword = 'Wachtwoord:';
$strLogServer = 'Server';
$strLogUsername = 'Gebruikersnaam:';

$strMaximumSize = 'Maximale grootte: %s%s';
$strMbExtensionMissing = 'De mbstring PHP extensie werd niet gevonden en u lijkt een multibyte charset te gebruiken. Zonder de mbstring extensie kan phpMyAdmin strings niet correct splitsen wat tot onverwachte resultaten kan leiden.';
$strMbOverloadWarning = 'U heeft mbstring.func_overload ingeschakeld in uw PHP configuratie. Deze optie is incompatibel met phpMyAdmin en kan ervoor zorgen dat sommige data corrupt raakt!';
$strMIME_available_mime = 'Beschikbare MIME-types';
$strMIME_available_transform = 'Beschikbare transformaties';
$strMIME_description = 'Beschrijving';
$strMIME_MIMEtype = 'MIME-type';
$strMIME_nodescription = 'Geen beschrijving beschikbaar voor deze transformatie.<br />Raadpleeg de maker over wat %s doet.';
$strMIME_transformation = 'Browser transformaties';
$strMIME_transformation_note = 'Voor een lijst met beschikbare transformatie opties en MIME-type transformaties, klik op %sTransformatie opties%s';
$strMIME_transformation_options_note = 'Voeg de waardes voor transformatie optie in het volgende formaat in: \'a\', 100, b,\'c\'...<br />Wanneer u een backslash ("\") of een enkele quote ("\'") moet invoegen in deze waardes, backslashes het dan (bijvoorbeeld \'\\\\xyz\' of \'a\\\'b\').';
$strMIME_transformation_options = 'Transformatie opties';
$strMIMETypesForTable = 'MIME TYPES VOOR TABEL';
$strMIME_without = 'MIME-types die in italic staan (Schuin) hebben geen aparte transformatie functies';
$strModifications = 'Wijzigingen opgeslagen.';
$strModify = 'Aanpassen';
$strModifyIndexTopic = 'Wijzig een index';
$strMoveTableOK = 'Tabel %s is verplaatst naar %s.';
$strMoveTableSameNames = 'Kan de tabel niet naar dezelfde verplaatsen!';
$strMoveTable = 'Verplaats tabel naar (database<b>.</b>tabel):';
$strMultilingual = 'meertalig';
$strMySQLCharset = 'MySQL Karakterset';
$strMySQLConnectionCollation = 'MySQL verbindingscollatie';
$strMySQLSaid = 'MySQL retourneerde: ';
$strMySQLShowProcess = 'Laat processen zien';
$strMySQLShowStatus = 'MySQL runtime informatie';
$strMySQLShowVars = 'MySQL systeemvariabelen';

$strName = 'Naam';
$strNext = 'Volgende';
$strNoActivity = 'Geen activiteit voor %s seconden of meer, log a.u.b. opnieuw in';
$strNoDatabases = 'Geen databases';
$strNoDatabasesSelected = 'Er is geen databases geselecteerd.';
$strNoDescription = 'Geen beschrijving aanwezig';
$strNoDropDatabases = '"DROP DATABASE" opdrachten zijn niet mogelijk.';
$strNoExplain = 'Uitleg SQL overslaan';
$strNoFrames = 'phpMyAdmin is werkt gebruiksvriendelijker met een browser die <b>frames</b> aan kan.';
$strNoIndex = 'Geen index gedefinieerd!';
$strNoIndexPartsDefined = 'Geen index delen gedefinieerd!';
$strNoModification = 'Geen verandering';
$strNo = 'Nee';
$strNone = 'Geen';
$strNoOptions = 'Dit format heeft geen opties';
$strNoPassword = 'Geen wachtwoord';
$strNoPermission = 'De web server heeft geen rechten om het bestand %s op te slaan.';
$strNoPhp = 'zonder PHP Code';
$strNoPrivileges = 'Geen rechten';
$strNoRights = 'U heeft niet genoeg rechten om hier te zijn!';
$strNoRowsSelected = 'Geen rijen geselecteerd';
$strNoSpace = 'Onvoldoende ruimte om het bestand %s op te slaan.';
$strNoTablesFound = 'Geen tabellen gevonden in de database.';
$strNoThemeSupport = 'Geen ondersteuning voor thema\'s, controleer uw configuratie en/of de thema\'s in de directory %s.';
$strNotNumber = 'Dit is geen cijfer!';
$strNotOK = 'Niet Goed';
$strNotSet = '<b>%s</b> tabel niet gevonden of niet ingesteld in %s';
$strNoUsersFound = 'Geen gebruiker(s) gevonden.';
$strNoValidateSQL = 'SQL validatie overslaan';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s overeenkomst(en) in de tabel<i>%s</i>';
$strNumSearchResultsTotal = '<b>Totaal:</b> <i>%s</i> overeenkomst(en)';
$strNumTables = 'Tabellen';

$strOK = 'Correct';
$strOperations = 'Handelingen';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimaliseer tabel';
$strOr = 'Of';
$strOverhead = 'Overhead';
$strOverwriteExisting = 'Overschrijf bestaande bestand (en)';

$strPageNumber = 'Pagina nummer:';
$strPaperSize = 'Papier grootte';
$strPartialText = 'Gedeeltelijke teksten';
$strPasswordChanged = 'Het wachtwoord voor %s is met succes veranderd.';
$strPasswordEmpty = 'Het wachtwoord is leeg!';
$strPasswordHashing = 'Wachtwoord Hashing';
$strPasswordNotSame = 'De wachtwoorden zijn niet gelijk!';
$strPassword = 'Wachtwoord';
$strPdfDbSchema = 'Schema van de "%s" database - Pagina %s';
$strPdfInvalidTblName = 'De tabel "%s" bestaat niet!';
$strPdfNoTables = 'Geen Tabellen';
$strPerHour = 'per uur';
$strPerMinute = 'per minuut';
$strPerSecond = 'per seconde';
$strPersian = 'Perzisch';
$strPhoneBook = 'Telefoonboek';
$strPHP40203 = 'U gebruikt PHP 4.2.3, deze versie bevat een grote fout in de multi-byte strings (mbstring). Voor meer informatie zie PHP bug report 19404. Het wordt sterk afgeraden deze versie van PHP te gebruiken met phpMyAdmin.';
$strPhp = 'Cre�er PHP Code';
$strPHPVersion = 'PHP Versie';
$strPmaDocumentation = 'phpMyAdmin Documentatie';
$strPmaUriError = 'De <tt>$cfg[\'PmaAbsoluteUri\']</tt> richtlijn MOET gezet zijn in het configuratie bestand!';
$strPolish = 'Pools';
$strPortrait = 'Portret';
$strPos1 = 'Begin';
$strPrevious = 'Vorige';
$strPrimaryKeyHasBeenDropped = 'De primaire sleutel is vervallen';
$strPrimaryKeyName = 'De naam van de primaire sleutel moet PRIMARY zijn!';
$strPrimaryKeyWarning = '("PRIMARY" <b>moet</b> de naam van en <b>alleen van</b> een primaire sleutel zijn!)';
$strPrimary = 'Primaire sleutel';
$strPrint = 'Afdrukken';
$strPrintViewFull = 'Print overzicht (met volledige teksten)';
$strPrintView = 'Printopmaak';
$strPrivDescAllPrivileges = 'Bevat alle privileges behalve GRANT.';
$strPrivDescAlter = 'Maakt het mogelijk de structuur van bestaande tabellen aan te passen.';
$strPrivDescCreateDb = 'Maakt het mogelijk om nieuwe databases en tabellen te maken.';
$strPrivDescCreateTbl = 'Maakt het mogelijk nieuwe tabellen te maken.';
$strPrivDescCreateTmpTable = 'Maakt het mogelijk om tijdelijke tabellen te maken.';
$strPrivDescDelete = 'Maakt het mogelijk om data te verwijderen.';
$strPrivDescDropDb = 'Maakt het mogelijk om databases en tabellen te verwijderen.';
$strPrivDescDropTbl = 'Maakt het mogelijk tabellen te verwijderen.';
$strPrivDescExecute = 'Maakt het mogelijk om opgeslagen procedures uit te voeren; Heeft geen effect in deze MySQL versie.';
$strPrivDescFile = 'Maakt het mogelijk om data te importeren en te exporteren van en naar bestanden.';
$strPrivDescGrant = 'Maakt het mogelijk dat gebruikers en privileges toe te voegen zonder de privileges tabel opnieuw op te vragen.';
$strPrivDescIndex = 'Maakt het mogelijk om indexen te cre�ren en te verwijderen.';
$strPrivDescInsert = 'Maakt het mogelijk om data in te voegen en te vervangen.';
$strPrivDescLockTables = 'Maakt het mogelijk tabellen op slot te zetten voor de huidige thread.';
$strPrivDescMaxConnections = 'Limiteert het aantal nieuwe connecties die een gebruiker per uur mag openen.';
$strPrivDescMaxQuestions = 'Limiteert het aantal queries dat een gebruiker mag versturen per uur.';
$strPrivDescMaxUpdates = 'Limiteert het aantal commando\'s, welke een database of tabel veranderen, die een gebruiker per uur mag uitvoeren.';
$strPrivDescProcess3 = 'Maakt het mogelijk processen te stoppen voor andere gebruikers.';
$strPrivDescProcess4 = 'Maakt het mogelijk om complete queries in de process lijst te zien.';
$strPrivDescReferences = 'Heeft geen effect in deze MySQL versie.';
$strPrivDescReload = 'Maakt het mogelijk om de server instellingen opnieuw op te vragen en de cache van de server leeg te maken.';
$strPrivDescReplClient = 'Geeft het recht aan de gebruiker om te vragen waar de slaves (slaven) / masters (meesters) zijn.';
$strPrivDescReplSlave = 'Nodig om slaves (slaven) de repliceren.';
$strPrivDescSelect = 'Maakt het lezen van data mogelijk.';
$strPrivDescShowDb = 'Geeft toegang tot de complete lijst van databases.';
$strPrivDescShutdown = 'Maakt het mogelijk de server te stoppen.';
$strPrivDescSuper = 'Maakt het mogelijk verbinding te maken, zelfs als het maximaal aantal verbindingen als is bereikt; Dit is vereist voor de meeste administratieve opties zoals het instellen van globale variabelen of het stoppen van threads van andere gebruikers.';
$strPrivDescUpdate = 'Maakt het mogelijk data aan te passen.';
$strPrivDescUsage = 'Geen privileges.';
$strPrivileges = 'Rechten';
$strPrivilegesReloaded = 'De privileges zijn met succes vernieuwd';
$strProcesses = 'Processen';
$strProcesslist = 'Process lijst';
$strPutColNames = 'Plaats veldnamen in de eerste rij';

$strQBEDel = 'Verwijder';
$strQBEIns = 'Toevoegen';
$strQBE = 'Query opbouwen';
$strQueryFrame = 'Query window';
$strQueryOnDb = 'SQL-query op database <b>%s</b>:';
$strQuerySQLHistory = 'SQL-geschiedenis';
$strQueryStatistics = '<b>Query statistieken</b>: Sinds het opstarten zijn er, %s queries gestuurd naar de server.';
$strQueryTime = 'Query duurde %01.4f sec';
$strQueryType = 'Query type';
$strQueryWindowLock = 'Overschrijf deze query niet van buitenaf dit scherm';

$strReceived = 'Ontvangen';
$strRecords = 'Records';
$strReferentialIntegrity = 'Controleer referenti�le integriteit';
$strRefresh = 'Vernieuw';
$strRelationalSchema = 'Relationeel schema';
$strRelationNotWorking = 'Extra opties om met tabellen te werken die gelinkt zijn, zijn uitgeschakeld. Om te weten te komen waarom klik %shier%s.';
$strRelationsForTable = 'RELATIES VOOR TABEL';
$strRelations = 'Relaties';
$strRelationView = 'Relatie overzicht';
$strReloadingThePrivileges = 'Bezig de privileges te vernieuwen';
$strRemoveSelectedUsers = 'Verwijder de geselecteerde gebruikers';
$strRenameDatabaseOK = 'Database %s is hernoemed naar %s';
$strRenameTableOK = 'Tabel %s is hernoemt naar %s';
$strRenameTable = 'Tabel hernoemen naar';
$strRepairTable = 'Repareer tabel';
$strReplaceNULLBy = 'Vervang NULL door';
$strReplaceTable = 'Vervang tabel gegevens met het bestand';
$strReset = 'Opnieuw';
$strResourceLimits = 'Resource beperkingen';
$strReType = 'Type opnieuw';
$strRevokeAndDeleteDescr = 'De gebruikers zullen nog steeds het USAGE (gebruik) privilege hebben zolang de privileges nog niet zijn vernieuwd.';
$strRevokeAndDelete = 'Trek alle actieve privileges in van alle gebruikers en verwijder ze daarna.';
$strRevokeMessage = 'U heeft de rechten ingetrokken voor %s';
$strRevoke = 'Ongedaan maken';
$strRomanian = 'Roemeens';
$strRowLength = 'Lengte van de rij';
$strRowsFrom = 'rijen beginnend bij';
$strRowSize = ' Grootte van de rij';
$strRowsModeFlippedHorizontal = 'horizontaal (geroteerde headers)';
$strRowsModeHorizontal = 'horizontaal';
$strRowsModeOptions = 'in %s modus en herhaal kopregels na %s cellen';
$strRowsModeVertical = 'verticaal';
$strRows = 'Rijen';
$strRowsStatistic = 'Rij statistiek';
$strRunning = 'wordt uitgevoerd op %s';
$strRunQuery = 'Query uitvoeren';
$strRunSQLQuery = 'Draai SQL query/queries op database %s';
$strRussian = 'Russisch';

$strSaveOnServer = 'Bewaar op de server in %s directory';
$strSave = 'Opslaan';
$strScaleFactorSmall = 'De schaal factor is te klein om het schema op een pagina te zetten';
$strSearchFormTitle = 'Zoeken in de database';
$strSearchInTables = 'In de tabel(len):';
$strSearchNeedle = 'Woord(en) of waarde(s) waarnaar gezocht moet worden (wildcard: "%"):';
$strSearchOption1 = 'ten minste een van de woorden';
$strSearchOption2 = 'alle woorden';
$strSearchOption3 = 'de exacte zin';
$strSearchOption4 = 'als een reguliere expressie';
$strSearchResultsFor = 'Zoek resultaten voor "<i>%s</i>" %s:';
$strSearchType = 'Zoek:';
$strSearch = 'Zoeken';
$strSecretRequired = 'Het configuratie bestand heeft nu een geheime wachtwoord zin nodig (blowfish_secret).';
$strSelectADb = 'Selecteer A.U.B. een database';
$strSelectAll = 'Selecteer alles';
$strSelectBinaryLog = 'Selecteer de te bekijken binaire log';
$strSelectFields = 'Selecteer velden (tenminste 1):';
$strSelectNumRows = 'in query';
$strSelectTables = 'Selecteer tabellen';
$strSend = 'verzenden';
$strSent = 'Verzonden';
$strServerChoice = 'Server keuze';
$strServerNotResponding = 'De server reageert niet';
$strServer = 'Server';
$strServerStatus = 'Runtime Informatie';
$strServerStatusUptime = 'Deze MySQL server draait inmiddels %s. Hij is gestart op %s.';
$strServerTabVariables = 'Variabelen';
$strServerTrafficNotes = '<b>Server verkeer</b>: Deze tabellen geven statistieken weer van het verkeer van deze MySQL server vanaf het moment dat hij is gestart';
$strServerVars = 'Server variabelen en instellingen';
$strServerVersion = 'Server versie';
$strSessionValue = 'Sessie variabelen';
$strSetEnumVal = 'Als het veld type "enum" of "set" is, voer dan de waardes in volgens dit formaat: \'a\',\'b\',\'c\'...<br />Als u ooit een backslash moet plaatsen ("\") of een enkel aanhalingsteken ("\'") bij deze waardes, backslash het (voorbeeld \'\\\\xyz\' of \'a\\\'b\').';
$strShowAll = 'Toon alles';
$strShowColor = 'Toon kleur';
$strShowDatadictAs = 'Data Dictionary Formaat';
$strShowFullQueries = 'Toon volledige Queries';
$strShowGrid = 'Toon grid';
$strShowingRecords = 'Toon Records';
$strShowPHPInfo = 'Laat informatie over PHP zien';
$strShowTableDimension = 'Geef de dimensies van de tabellen weer';
$strShowTables = 'Toon tabellen';
$strShowThisQuery = ' Laat deze query hier zien ';
$strShow = 'Toon';
$strSimplifiedChinese = 'Vereenvoudigd Chinese';
$strSingly = '(apart)';
$strSize = 'Grootte';
$strSlovak = 'Slowaak';
$strSlovenian = 'Sloveens';
$strSortByKey = 'Sorteren op sleutel';
$strSort = 'Sorteren';
$strSpaceUsage = 'Ruimte gebruik';
$strSpanish = 'Spaans';
$strSplitWordsWithSpace = 'Woorden worden gesplit door een spatie karakter (" ").';
$strSQLExportType = 'Export type';
$strSQLParserBugMessage = 'Er is een kans dat u een fout heeft aangetroffen in de SQL parser. Let er goed op, dat de query op de correcte plaatsen quotes heeft. Een ander mogelijkheid voor deze foutmelding kan zijn dat u het ge-quote text gedeelte in binairy mode heeft. U kunt ook uw query proberen in de command line van MySQL. De MySQL server foutmelding hieronder, mocht die aanwezig zijn, kan ook helpen met het opsporen van fouten. Blijft u problemen houden of als de parser fouten geeft terwijl het goed gaat in de command line van MySQL, probeer dan de SQL query in te korten en een bug report met het stukje data te sturen van het CUT gedeelte hieronder:';
$strSQLParserUserError = 'Er schijnt een fout te zijn in uw SQL query. Mocht de MySQL server een error hebben terug gegeven, probeer dan of uw hiermee uw fout kunt oplossen.';
$strSQLQuery = 'SQL-query';
$strSQLResult = 'SQL resultaat';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Ongeldig herkenningsteken';
$strSQPBugUnclosedQuote = 'Quote niet afgesloten';
$strSQPBugUnknownPunctuation = 'Onbekende Punctuatie String';
$strStatCheckTime = 'Laatst gecontroleerd';
$strStatCreateTime = 'Gecre�erd';
$strStatement = 'Opdrachten';
$strStatUpdateTime = 'Laatst bijgewerkt';
$strStatus = 'Status';
$strStrucCSV = 'CSV gegevens';
$strStrucData = 'Structuur en gegevens';
$strStrucExcelCSV = 'CSV voor MS Excel data';
$strStrucNativeExcel = 'Native MS Excel data';
$strStrucOnly = 'Alleen structuur';
$strStructPropose = 'Tabel structuur voorstellen';
$strStructure = 'Structuur';
$strSubmit = 'Verzenden';
$strSuccess = 'Uw SQL-query is succesvol uitgevoerd.';
$strSum = 'Som';
$strSwedish = 'Zweeds';
$strSwitchToDatabase = 'Schakel naar de gekopieerde database';
$strSwitchToTable = 'Wissel naar de gekopieerde tabel';

$strTableComments = 'Tabel opmerkingen';
$strTableEmpty = 'De tabel naam is leeg!';
$strTableHasBeenDropped = 'Tabel %s is vervallen';
$strTableHasBeenEmptied = 'Tabel %s is leeg gemaakt';
$strTableHasBeenFlushed = 'Tabel %s is geschoond';
$strTableMaintenance = 'Tabel onderhoud';
$strTableOfContents = 'Inhoudsopgave';
$strTableOptions = 'Tabel opties';
$strTables = '%s tabel(len)';
$strTableStructure = 'Tabel structuur voor tabel';
$strTable = 'Tabel';
$strTakeIt = 'neem het';
$strTblPrivileges = 'Tabel-specifieke privileges';
$strTextAreaLength = ' Vanwege z\'n lengte,<br /> is dit veld misschien niet te wijzigen ';
$strThai = 'Thais';
$strTheme = 'Thema / Stijl';
$strThisHost = 'Deze Host';
$strThreadSuccessfullyKilled = 'Thread %s is met succes afgesloten.';
$strTime = 'Tijd';
$strToggleScratchboard = 'toggle scratchboard';
$strTotal = 'totaal';
$strTotalUC = 'Totaal';
$strTraditionalChinese = 'Traditioneel Chinees';
$strTraditionalSpanish = 'Traditioneel Spaans';
$strTraffic = 'Verkeer';
$strTransformation_application_octetstream__download = 'Toon een link om de binaire data van een veld te downloaden. Eerste optie is de bestandsnaam van het binaire bestand. De tweede optie is een mogelijke veldnaam van een rij van de tabel welke de bestandsnaam bevat. Wanneer de tweede optie wordt gekozen is het vereist dat de eerste optie leeg is.';
$strTransformation_image_jpeg__inline = 'Toont een klik bare thumbnail; opties: width,height in pixels (houdt de originele ratio)';
$strTransformation_image_jpeg__link = 'Toont een link naar deze image (directe blob download, i.e.).';
$strTransformation_image_png__inline = 'Zie image/jpeg: inline';
$strTransformation_text_plain__external = 'ALLEEN LINUX: Lanceert een externe applicatie en voed het de veld data via standaard input. Geeft standaard output van de applicatie terug. Default is Netjes, om nette HTML code te tonen. Om beveiligings redenen zult u handmatig het bestand libraries/transformations/text_plain__external.inc.php moeten aanpassen en de tools die u mag draaien invoegen. De eerste opties is het nummer van het programma wat u wilt gebruiken, de tweede optie zijn de parameters voor dit programma. Het derde parameter, wanneer ingesteld op 1, zal de output omzetten door middel van htmlspecialchars() (Standaard is 1). Een vierde parameter, wanneer ingesteld als 1 zal NOWRAP aan de content cell toevoegen, zodat de gehele output getoond zal worden zonder te herstructureren (Standaard 1)';
$strTransformation_text_plain__formatted = 'Preserveert het originele formaat van het veld. Er wordt geen Escaping toegepast.';
$strTransformation_text_plain__imagelink = 'Toont een plaatje en een link, het veld bevat de bestandsnaam; De eerste optie is een prefix als "http://domein.com/", de tweede optie is de breedte in pixels, de derde is de hoogte.';
$strTransformation_text_plain__link = 'Toont een link, het veld bevat de bestandsnaam; De eerste optie is een prefix als "http://domein.com/", de tweede optie is de titel voor de link.';
$strTransformation_text_plain__substr = 'Toont alleen een stuk van een string. De eerst optie is een offset om te bepalen waar de output van uw tekst start (Standaard 0). De tweede optie is een offset van de hoeveel tekst die terug wordt gegeven. Wanneer leeg, zal het alle overgebleven tekst teruggeven. De derde optie defineerd welke karakters worden toegevoegd aan de output wanneer een substring wordt teruggegeven (Standaard: ...) .';
$strTruncateQueries = 'Truncate getoonde Queries';
$strTurkish = 'Turks';
$strType = 'Type';

$strUkrainian = 'Oekra�ens';
$strUncheckAll = 'Deselecteer alles';
$strUnicode = 'Unicode';
$strUnique = 'Unieke waarde';
$strUnknown = 'onbekend';
$strUnselectAll = 'Deselecteer alles';
$strUpdatePrivMessage = 'U heeft de rechten aangepast voor %s.';
$strUpdateProfileMessage = 'Het profiel is aangepast.';
$strUpdateQuery = 'Wijzig Query';
$strUpdComTab = 'Raadpleeg de Documentatie over hoe u uw Column_comments tabel bijwerkt.';
$strUpgrade = 'U moet opwaarderen (Upgraden) naar %s of hoger.';
$strUsage = 'Gebruik';
$strUseBackquotes = 'Gebruik backquotes (`) bij tabellen en velden\' namen';
$strUseHostTable = 'Gebruik Host Tabel';
$strUserAlreadyExists = 'De gebruiker %s bestaat al!';
$strUserEmpty = 'De gebruikersnaam is leeg!';
$strUser = 'Gebruiker';
$strUserName = 'Gebruikersnaam';
$strUserNotFound = 'De geselecteerde gebruiker werd niet aangetroffen in de privileges tabel';
$strUserOverview = 'Gebruikers Overzicht';
$strUsersDeleted = 'De geselecteerde gebruikers zijn met succes verwijderd.';
$strUsersHavingAccessToDb = 'Gebruikers die toegang hebben tot &quot;%s&quot;';
$strUseTabKey = 'Gebruik de TAB knop om van waarde naar waarde te verplaatsen, of CTRL+pijltjes om vrijuit te navigeren';
$strUseTables = 'Gebruik tabellen';
$strUseTextField = 'Gebruik tekstveld';
$strUseThisValue = 'Gebruik deze waarde';

$strValidateSQL = 'Valideer SQL';
$strValidatorError = 'De SQL validatie kon niet worden geinitialiseerd. Controleer of u de nodige php extensies heeft geinstalleerd zoals beschreven in de %sdocumentatie%s.';
$strValue = 'Waarde';
$strVar = 'Variabelen';
$strViewDump = 'Bekijk een dump (schema) van tabel';
$strViewDumpDatabases = 'Bekijk dump (schema) van de databases';
$strViewDumpDB = 'Bekijk een dump (schema) van database';

$strWebServerUploadDirectoryError = 'De directory die u heeft ingesteld om te uploaden kan niet worden bereikt.';
$strWebServerUploadDirectory = 'web-server upload directory';
$strWelcome = 'Welkom op %s';
$strWestEuropean = 'West Europees';
$strWildcard = 'joker teken';
$strWindowNotFound = 'Het doel browser scherm kon niet worden bijgewerkt. Misschien heeft u het scherm gesloten of uw browser blokkeert bijwerkingen van uw browser beveiliging';
$strWithChecked = 'Met geselecteerd:';
$strWrongUser = 'Verkeerde gebruikersnaam/wachtwoord. Toegang geweigerd.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Opmerking: Het instellen van deze waarden op 0 (nul) verwijderd het limiet.';
$strZip = '"Gezipt"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate

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
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strCopy = 'Copy';  //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCSV = 'CSV';  //to translate

$strDataPages = 'Pages containing data';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate

$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
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

$strGenerate = 'Generate';  //to translate
$strGeneratePassword = 'Generate Password';  //to translate

$strHandler = 'Handler';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate

$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
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

$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
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

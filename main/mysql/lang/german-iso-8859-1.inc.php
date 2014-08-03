<?php
/**
 * German locale file for iso-8859-1
 *
 * For suggestions concerning this file please contact
 *     https://sourceforge.net/tracker/?group_id=23067&atid=387645
 *
 * Bei Verbesserungsvorschl�gen diese Datei betreffend wenden Sie sich bitte an
 *     https://sourceforge.net/tracker/?group_id=23067&atid=387645
 *
 * $Id: german-iso-8859-1.inc.php 11113 2008-02-09 16:09:54Z lem9 $
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$mysql_5_1_doc_lang = 'de';

$day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$month = array('Januar', 'Februar', 'M�rz', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y um %H:%M';
$timespanfmt = '%s Tage, %s Stunden, %s Minuten und %s Sekunden';

$strAPrimaryKey = 'Ein Prim�rschl�ssel wurde in %s erzeugt';
$strAbortedClients = 'Abgebrochen';
$strAccessDenied = 'Zugriff verweigert.';
$strAccessDeniedCreateConfig = 'Eine m�gliche Ursache w�re, dass Sie noch keine Konfigurationsdatei angelegt haben. Verwenden Sie in diesem Fall doch das %1$sSetup-Skript%2$s, um eine solche zu erstellen.';
$strAccessDeniedExplanation = 'phpMyAdmin hat versucht eine Verbindung zum MySQL-Server aufzubauen, jedoch hat dieser die Verbindung zur�ckgewiesen. Sie sollten Ihre Einstellungen f�r Host, Benutzername und Passwort in Ihrer config.inc.php �berpr�fen und sich vergewissern, dass diese den Informationen, welche Sie vom Administrator erhalten haben, entsprechen.';
$strAction = 'Aktion';
$strAddAutoIncrement = 'AUTO_INCREMENT-Wert hinzuf�gen';
$strAddClause = 'F�ge %s hinzu';
$strAddConstraints = 'Constraints hinzuf�gen';
$strAddDeleteColumn = 'Spalten hinzuf�gen/entfernen';
$strAddDeleteRow = 'Zeilen hinzuf�gen/entfernen';
$strAddFields = '%s Felder hinzuf�gen';
$strAddHeaderComment = 'Individuelle Kommentare f�r den Kopfbereich (\\n erzeugt einen Zeilenumbruch)';
$strAddIntoComments = 'In Kommentarbereich einbeziehen';
$strAddNewField = 'Neue Felder hinzuf�gen';
$strAddPrivilegesOnDb = 'Rechte zu folgender Datenbank hinzuf�gen';
$strAddPrivilegesOnTbl = 'Rechte zu folgender Tabelle hinzuf�gen';
$strAddSearchConditions = 'Eigenes Filterkriterium (Argumente f�r den WHERE-Ausdruck):';
$strAddToIndex = '%s&nbsp;Spalten zum Index hinzuf�gen';
$strAddUser = 'Neuen Benutzer hinzuf�gen';
$strAddUserMessage = 'Der Benutzer wurde hinzugef�gt.';
$strAdministration = 'Administration';
$strAffectedRows = ' Betroffene Datens�tze: ';
$strAfter = 'Nach %s';
$strAfterInsertBack = 'zur�ck';
$strAfterInsertNewInsert = 'anschlie�end einen weiteren Datensatz einf�gen';
$strAfterInsertNext = 'n�chste Zeile bearbeiten';
$strAfterInsertSame = 'Zur�ck zu dieser Seite';
$strAll = 'Alle';
$strAllTableSameWidth = 'Sollen alle Tabellen mit der gleichen Breite angezeigt werden?';
$strAllowInterrupt = 'Abbruch wenn die maximale Scriptlaufzeit erreicht wird. Damit ist es m�glich gro�e Dateien zu importieren, allerdings kann es Transaktionen zerst�ren.';
$strAlterOrderBy = 'Tabelle sortieren nach';
$strAnIndex = 'Ein Index wurde in %s erzeugt';
$strAnalyzeTable = 'Analysiere Tabelle';
$strAnd = 'und';
$strAndThen = 'und dann';
$strAngularLinks = 'Winklige Verbindung';
$strAny = 'Jeder';
$strAnyHost = 'Jeder Host';
$strAnyUser = 'Jeder Benutzer';
$strApproximateCount = 'Es kann sich hierbei um N�herungswerte handeln. Bitte lesen Sie auch FAQ 3.11';
$strArabic = 'Arabisch';
$strArmenian = 'Armenisch';
$strAscending = 'aufsteigend';
$strAtBeginningOfTable = 'An den Anfang der Tabelle';
$strAtEndOfTable = 'An das Ende der Tabelle';
$strAttr = 'Attribute';
$strAutomaticLayout = 'Automatische Anordnung';

$strBack = 'Zur�ck';
$strBaltic = 'Baltisch';
$strBeginCut = 'AUSSCHNITTSANFANG';
$strBeginRaw = 'BEGINN DER AUSGABE';
$strBinLogEventType = 'Ereignistyp';
$strBinLogInfo = 'Information';
$strBinLogName = 'Protokoll';
$strBinLogOriginalPosition = 'Ursprungsposition';
$strBinLogPosition = 'Position';
$strBinLogServerId = 'Server-ID';
$strBinary = 'Bin�r';
$strBinaryDoNotEdit = 'Bin�r - nicht editierbar!';
$strBinaryLog = 'Bin�res Protokoll';
$strBookmarkAllUsers = 'Diese gespeicherte SQL-Abfrage f�r jeden Benutzer verf�gbar machen';
$strBookmarkCreated = 'Bookmark %s wurde gespeichert';
$strBookmarkDeleted = 'SQL-Abfrage wurde gel�scht.';
$strBookmarkLabel = 'Titel';
$strBookmarkQuery = 'Gespeicherte SQL-Abfrage';
$strBookmarkReplace = '�berschreibe gleichnamiges Bookmark';
$strBookmarkThis = 'SQL-Abfrage speichern';
$strBookmarkView = 'Nur zeigen';
$strBrowse = 'Anzeigen';
$strBrowseDistinctValues = 'Zeige nur unterschiedliche Werte';
$strBrowseForeignValues = 'Fremdschl�sselwerte ansehen';
$strBufferPool = 'Puffer-Pool';
$strBufferPoolActivity = 'Aktivit�t des Puffer-Pools';
$strBufferPoolUsage = 'Auslastung des Puffer-Pools';
$strBufferReadMisses = 'Fehlgeschlagene Leseanfragen';
$strBufferReadMissesInPercent = 'Fehlgeschlagene Leseanfragen in %';
$strBufferWriteWaits = 'Schreibverz�gerungen';
$strBufferWriteWaitsInPercent = 'Schreibverz�gerungen in %';
$strBulgarian = 'Bulgarisch';
$strBusyPages = 'Ausgelastete Seiten';
$strBzError = 'phpMyAdmin konnte die Datei wegen eines Fehler in der Bz2-Erweiterung in dieser php-Version nicht komprimieren. Es wird deshalb empfohlen die Einstellung <code>$cfg[\'BZipDump\']</code> in Ihrer phpMyAdmin-Konfiguration auf <code>FALSE</code> zu setzen. Falls Sie die Bz2-Kompressionsfunktionen dennoch nutzen wollen, so sollten Sie eine neuere php-Version installieren. Bitte lesen Sie auch den php-Fehlerbericht %s f�r weitere Informationen.';
$strBzip = 'BZip-komprimiert';

$strCSV = 'CSV';
$strCalendar = 'Kalender';
$strCanNotLoadExportPlugins = 'Export-Plugins konnten nicht geladen werden, bitte Installation �berpr�fen!';
$strCanNotLoadImportPlugins = 'Die Import-Plugins konnten nicht geladen werden. Bitte �berpr�fen Sie Ihre phpMyAdmin-Installation.';
$strCancel = 'Abbrechen';
$strCannotLogin = 'Die Anmeldung am MySQL-Server ist fehlgeschlagen.';
$strCantLoad = 'Die Erweiterung [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a] kann nicht geladen werden. Bitte �berpr�fen Sie Ihre PHP-Konfiguration.';
$strCantLoadRecodeIconv = 'Die PHP-Erweiterungen iconv und recode, welche f�r die Zeichensatzkonvertierung ben�tigt werden, konnten nicht geladen werden. Bitte �ndern Sie Ihre PHP-Konfiguration und aktivieren Sie diese Erweiterungen oder deaktivieren Sie die Zeichensatzkonvertierung in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kann Index nicht in PRIMARY umbenennen!';
$strCantUseRecodeIconv = 'Weder die iconv- noch libiconv- oder recode_string-Funktion konnte verwandt werden, obwohl die ben�tigten php-Erweiterungen angeblich geladen wurden. Bitte �berpr�fen Sie Ihre PHP-Konfiguration.';
$strCardinality = 'Kardinalit�t';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = 'Mitteleurop�isch';
$strChange = '�ndern';
$strChangeCopyMode = 'Erstelle einen neuen Benutzer mit identischen Rechten und ...';
$strChangeCopyModeCopy = ' ... behalte den alten bei.';
$strChangeCopyModeDeleteAndReload = ' ... l�sche den alten und lade anschlie�end die Benutzertabellen neu.';
$strChangeCopyModeJustDelete = ' ... l�sche den alten von den Benutzertabellen.';
$strChangeCopyModeRevoke = ' ... entziehe dem alten alle Rechte und l�sche ihn anschlie�end.';
$strChangeCopyUser = 'Anmelde-Information �ndern / Benutzer kopieren';
$strChangeDisplay = 'Anzuzeigende Spalte bestimmen';
$strChangePassword = 'Passwort �ndern';
$strCharset = 'Zeichensatz';
$strCharsetOfFile = 'Zeichencodierung der Datei:';
$strCharsets = 'Zeichens�tze';
$strCharsetsAndCollations = 'Zeichens�tze und Kollationen';
$strCheckAll = 'Alle ausw�hlen';
$strCheckOverhead = 'Tabellen m. �berhang ausw.';
$strCheckPrivs = 'Rechte �berpr�fen';
$strCheckPrivsLong = '�berpr�ft die Rechte f�r die Datenbank &quot;%s&quot;.';
$strCheckTable = '�berpr�fe Tabelle';
$strChoosePage = 'Bitte w�hlen Sie die zu bearbeitende Seite.';
$strColComFeat = 'Darstellung von Spaltenkommentaren';
$strCollation = 'Kollation';
$strColumnNames = 'Spaltennamen';
$strColumnPrivileges = 'Spaltenspezifische Rechte';
$strCommand = 'Befehl';
$strComments = 'Kommentare';
$strCommentsForTable = 'TABELLENKOMMENTARE';
$strCompatibleHashing = 'MySQL&nbsp;4.0 kompatibel';
$strCompleteInserts = 'Vollst�ndige \'INSERT\'s';
$strCompression = 'Kompression';
$strCompressionWillBeDetected = 'Dateikomprimierung wird automatisch erkannt bei: %s';
$strConfigDefaultFileError = 'Fehler beim Laden der Standard-Konfiguration von: "%1$s"';
$strConfigFileError = 'phpMyAdmin konnte Ihre Konfigurationsdatei nicht verarbeiten!<br />Dies kann passieren, wenn der PHP-Parser Syntaxfehler in ihr findet oder sie nicht existiert.<br />Bitte rufen Sie die Konfigurationsdatei �ber den unteren Link direkt auf und lesen Sie die PHP-Fehlermeldungen, die Sie erhalten. Meistens fehlt blo� irgendwo ein Anf�hrungszeichen oder Semikolon.<br />Wenn Sie eine leere Seite erhalten, ist Ihre Konfigurationsdatei in Ordnung.';
$strConfigureTableCoord = 'Bitte konfigurieren Sie die Koordinaten f�r die Tabelle %s';
$strConnectionError = 'Die Verbindung konnte aufgrund von ung�ltigen Einstellungen nicht hergestellt werden.';
$strConnections = 'Verbindungen';
$strConstraintsForDumped = 'Constraints der exportierten Tabellen';
$strConstraintsForTable = 'Constraints der Tabelle';
$strControluserFailed = 'Verbindung f�r den controluser, wie er in Ihrer Konfiguration angegeben ist, ist fehlgeschlagen.';
$strCookiesRequired = 'Ab diesem Punkt m�ssen Cookies aktiviert sein.';
$strCopy = 'Kopieren';
$strCopyDatabaseOK = 'Datenbank %s wurde nach %s kopiert';
$strCopyTable = 'Kopiere Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strCopyTableOK = 'Tabelle %s wurde nach %s kopiert.';
$strCopyTableSameNames = 'Tabelle kann nicht mit gleichem Namen kopiert werden!';
$strCouldNotKill = 'phpMyAdmin konnte den Prozess %s nicht abbrechen. Er wurde wahrscheinlich bereits geschlossen.';
$strCreate = 'Anlegen';
$strCreateDatabaseBeforeCopying = 'Vor dem Kopieren CREATE DATABASE ausf�hren.';
$strCreateIndex = 'Index �ber&nbsp;%s&nbsp;Spalten anlegen';
$strCreateIndexTopic = 'Neuen Index anlegen';
$strCreateNewDatabase = 'Neue Datenbank anlegen';
$strCreateNewTable = 'Neue Tabelle in Datenbank %s erstellen';
$strCreatePage = 'Neue Seite erstellen';
$strCreatePdfFeat = 'Erzeugen von PDFs';
$strCreateRelation = 'Erzeuge Verkn�pfung';
$strCreateTable  = 'Erzeuge Tabelle';
$strCreateUserDatabase = 'Datenbank f�r Benutzer';
$strCreateUserDatabaseName = 'Erstelle eine Datenbank mit gleichem Namen und gew�hre alle Rechte';
$strCreateUserDatabaseNone = 'Keine';
$strCreateUserDatabaseWildcard = 'Gew�hre alle Rechte auf Datenbanken die mit dem Benuterznamen beginnen (username\_%)';
$strCreationDates = 'Erzeugungs- / Aktualisierungs- / �berpr�fungszeiten';
$strCriteria = 'Kriterium';
$strCroatian = 'Kroatisch';
$strCyrillic = 'Kyrillisch';
$strCzech = 'Tschechisch';
$strCzechSlovak = 'Tschechoslowakisch';

$strDBComment = 'Datenbankkommentar: ';
$strDBCopy = 'Datenbank kopieren nach';
$strDBRename = 'Datenbank umbenennen in';
$strDanish = 'D�nisch';
$strData = 'Daten';
$strDataDict = 'Strukturverzeichnis';
$strDataOnly = 'Nur Daten';
$strDataPages = 'Daten enthaltende Seiten';
$strDatabase = 'Datenbank';
$strDatabaseEmpty = 'Der Datenbankname ist leer!';
$strDatabaseExportOptions = 'Export-Optionen der Datenbank';
$strDatabaseHasBeenDropped = 'Datenbank %s wurde gel�scht.';
$strDatabases = 'Datenbanken';
$strDatabasesDropped = 'Es wurden %s Datenbanken gel�scht.';
$strDatabasesStats = 'Statistik �ber alle Datenbanken';
$strDatabasesStatsDisable = 'Datenbankstatistiken deaktivieren';
$strDatabasesStatsEnable = 'Datenbankstatistiken aktivieren';
$strDatabasesStatsHeavyTraffic = 'Bitte beachten Sie: Das Aktivieren der Datenbankstatistiken kann starken Traffic zwischen dem Web- und dem MySQL-Server zur Folge haben.';
$strDbIsEmpty = 'Die Datenbank scheint leer zu sein!';
$strDbPrivileges = 'Datenbankspezifische Rechte';
$strDbSpecific = 'datenbankspezifisch';
$strDefault = 'Standard';
$strDefaultEngine = 'Neue Tabellen werden standardm��ig im Format %s angelegt.';
$strDefaultValueHelp = 'Bitte geben Sie jeweils nur einen Standardwert ohne Escape- oder Anf�hrungszeichen an.';
$strDefragment = 'Tabelle defragmentieren';
$strDelOld = 'Auf der aktuellen Seite bestehen Referenzen zu Tabellen, die nicht mehr existieren. Sollen diese Referenzen gel�scht werden?';
$strDelayedInserts = 'Verz�gerten INSERT-Befehl verwenden';
$strDelete = 'L�schen';
$strDeleteAndFlush = 'Die Benutzer l�schen und die Benutzertabellen anschlie�end neu laden.';
$strDeleteAndFlushDescr = 'Dies ist zwar der sauberste Weg, jedoch kann es einige Zeit in Anspruch nehmen, die Benutzertabellen neu zu laden.';
$strDeleteNoUsersSelected = 'Es wurden keine Benutzer zum L�schen ausgew�hlt!';
$strDeleteRelation = 'Verkn�pfung l�schen';
$strDeleted = 'Die Zeile wurde gel�scht.';
$strDeletedRows = 'Gel�schte Zeilen:';
$strDeleting = 'L�sche %s';
$strDelimiter = 'Begrenzer';
$strDescending = 'absteigend';
$strDescription = 'Beschreibung';
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'Das Anzeigefeld wird in rosa angezeigt. Um ein Feld anzeigen zu lassen oder nicht, klicken Sie auf das "Anzeige-Wahl-Bild", dann auf den passenden Feldnamen.';
$strDictionary = 'W�rterbuch';
$strDirectLinks = 'Direkte Verbindung';
$strDirtyPages = 'Inkonsistente Seiten (&quot;dirty&quot;)';
$strDisableForeignChecks = 'Fremdschl�ssel�berpr�fung deaktivieren';
$strDisabled = 'Deaktiviert';
$strDisplayFeat = 'Anzeige verkn�pfter Daten';
$strDisplayOrder = 'Sortierung nach:';
$strDisplayPDF = 'PDF-Schema anzeigen';
$strDoAQuery = 'Suche �ber Beispielwerte ("query by example") (Platzhalter: "%")';
$strDoYouReally = 'M�chten Sie wirklich diese Abfrage ausf�hren ';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentation';
$strDrop = 'L�schen';
$strDropDatabaseStrongWarning = 'Sie sind dabei eine komplette Datenbank zu ZERST�REN!';
$strDropUsersDb = 'Die gleichnamigen Datenbanken l�schen.';
$strDumpSaved = 'Dump (Schema) wurde in Datei %s gespeichert.';
$strDumpXRows = 'Exportiere %s Datens�tze ab Zeile %s.';
$strDumpingData = 'Daten f�r Tabelle';
$strDynamic = 'dynamisch';

$strEdit = 'Bearbeiten';
$strEditPDFPages = 'PDF-Seiten bearbeiten';
$strEditPrivileges = 'Rechte �ndern';
$strEffective = 'Effektiv';
$strEmpty = 'Leeren';
$strEmptyResultSet = 'MySQL lieferte ein leeres Resultat zur�ck (d.&nbsp;h. null Zeilen).';
$strEnabled = 'Aktiviert';
$strEncloseInTransaction = 'Export in einer Transaktion zusammenfassen';
$strEnd = 'Ende';
$strEndCut = 'AUSSCHNITTSENDE';
$strEndRaw = 'ENDE DER AUSGABE';
$strEngineAvailable = '%s ist auf diesem MySQL-Server verf�gbar.';
$strEngineDisabled = '%s wurde auf diesem MySQL-Server deaktiviert.';
$strEngineUnsupported = 'Dieser MySQL-Server unterst�tzt %s nicht.';
$strEngines = 'Formate';
$strEnglish = 'Englisch';
$strEnglishPrivileges = 'MySQL-Rechte werden auf Englisch angegeben.';
$strError = 'Fehler';
$strErrorInZipFile = 'Fehler im ZIP-Archiv:';
$strErrorRelationAdded = 'Fehler: Verkn�pfung nicht hinzugef�gt.';
$strErrorRelationExists = 'Fehler: Verkn�pfung existiert bereits.';
$strErrorRenamingTable = 'Fehler beim umbenennen von Tabelle %1$s nach %2$s';
$strErrorSaveTable = 'Fehler beim speichern der Koordinaten f�r den Designer.';
$strEscapeWildcards = 'Platzhalter _ und % sollten mit einem \ escaped werden, um das gew�nschte Sonderzeichen einzubinden';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estnisch';
$strEvent = 'Ereignis';
$strExcelEdition = 'Excel-Ausgabe';
$strExecuteBookmarked = 'Gespeicherte SQL-Anfrage ausf�hren';
$strExplain = 'SQL erkl�ren';
$strExport = 'Exportieren';
$strExportImportToScale = 'Export/Import to scale';  //to translate
$strExportMustBeFile = 'Der gew�hlte Export-Typ kann nur als Datei exportiert werden!';
$strExtendedInserts = 'Erweiterte \'INSERT\'s';
$strExtra = 'Extra';

$strFailedAttempts = 'Fehlgeschlagen';
$strField = 'Feld';
$strFieldHasBeenDropped = 'Spalte %s wurde entfernt.';
$strFieldInsertFromFileTempDirNotExists = 'Fehler beim Verschieben der hochgeladenen Datei, siehe FAQ 1.11';
$strFields = 'Felder';
$strFieldsEnclosedBy = 'Felder eingeschlossen von';
$strFieldsEscapedBy = 'Felder escaped von';
$strFieldsTerminatedBy = 'Felder getrennt mit';
$strFileAlreadyExists = 'Die Datei %s besteht bereits auf dem Server. Bitte �ndern Sie den Dateinamen oder w�hlen Sie die �berschreibungs-Option.';
$strFileCouldNotBeRead = 'Die Datei konnte nicht gelesen werden';
$strFileNameTemplate = 'Dateinamenskonvention';
$strFileNameTemplateDescription = 'Dieser Wert wird mit %1$sstrftime%2$s geparst, Sie k�nnen also Platzhalter f�r Datum und Uhrzeit verwenden. Dar�ber hinaus werden folgende Umformungen durchgef�hrt: %3$s. Der �brige Text bleibt unber�hrt.';
$strFileNameTemplateDescriptionDatabase = 'Datenbank-Name';
$strFileNameTemplateDescriptionServer = 'Server-Name';
$strFileNameTemplateDescriptionTable = 'Tabellen-Name';
$strFileNameTemplateRemember = 'Konvention merken';
$strFileToImport = 'Zu importierende Datei';
$strFiles = 'Dateien';
$strFixed = 'starr';
$strFlushPrivilegesNote = 'phpMyAdmin liest die Benutzerprofile direkt aus den entsprechenden MySQL-Tabellen aus. Der Inhalt dieser Tabellen kann sich von den Benutzerprofilen, die MySQL z.Zt. verwendet, unterscheiden, wenn manuelle �nderungen vorgenommen wurden. In diesem Fall sollten Sie  %sdie Benutzerprofile neu laden%s bevor Sie fortfahren.';
$strFlushQueryCache = 'Den Abfragencache leeren (FLUSH)';
$strFlushTable = 'Leeren des Tabellencaches ("FLUSH")';
$strFlushTables = 'Den Tabellencache leeren ("FLUSH")';
$strFontSize = 'Schriftgr��e';
$strForeignKeyError = 'Fehler beim Erzeugen eines Fremdschl�ssels f�r %1$s (�berpr�fen Sie die Datentypen)';
$strFormEmpty = 'Das Formular ist leer !';
$strFormat = 'Format';
$strFreePages = 'Unbenutzte Seiten';
$strFullText = 'vollst�ndige Textfelder';
$strFunction = 'Funktion';
$strFunctions = 'Funktionen';

$strGenBy = 'Erstellt von';
$strGenTime = 'Erstellungszeit';
$strGeneralRelationFeat = 'Allgemeine Verkn�pfungsfunktionen';
$strGenerate = 'Generieren';
$strGeneratePassword = 'Passwort generieren';
$strGeorgian = 'Georgisch';
$strGerman = 'Deutsch';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale Rechte';
$strGlobalValue = 'Globaler Wert';
$strGo = 'OK';
$strGrantOption = 'Grant';
$strGreek = 'Griechisch';
$strGzip = 'GZip-komprimiert';

$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHandler = 'Handler';
$strHasBeenAltered = 'wurde ge�ndert.';
$strHasBeenCreated = 'wurde erzeugt.';
$strHaveToShow = 'Bitte w�hlen Sie mindestens eine anzuzeigende Spalte';
$strHebrew = 'Hebr�isch';
$strHelp = 'Hilfe';
$strHexForBLOB = 'Benutze hexadecimal f�r BLOB';
$strHide = 'Verstecken';
$strHideShowAll = 'Zeige/Verstecke alles';
$strHideShowNoRelation = 'Zeige/Verstecke Tabellen ohne Verkn�pfung';
$strHome = 'Home';
$strHomepageOfficial = ' Offizielle phpMyAdmin-Homepage ';
$strHost = 'Host';
$strHostEmpty = 'Es wurde kein Host angegeben!';
$strHungarian = 'Ungarisch';

$strIEUnsupported = 'Der Internet Explorer unterst�tzt diese Funktion nicht.';
$strIcelandic = 'Isl�ndisch';
$strId = 'ID';
$strIdxFulltext = 'Volltext';
$strIgnore = 'Ignorieren';
$strIgnoreDuplicates = 'Ignoriere doppelte Zeilen';
$strIgnoreInserts = 'Fehler�bergehenden INSERT-Befehl verwenden';
$strImport = 'Importieren';
$strImportExportCoords = 'Import/Export Koordinaten f�r das PDF Schema';
$strImportFiles = 'Dateiimport';
$strImportFormat = 'Dateiformat';
$strImportSuccessfullyFinished = 'Der Import wurde erfolgreich abgeschlossen, %d Abfragen wurden ausgef�hrt.';
$strInUse = 'in Benutzung';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s wurde entfernt.';
$strIndexName = 'Indexname:';
$strIndexType = 'Indextyp:';
$strIndexWarningTable = 'Warnungen bei den Indizes der Tabelle `%s`';
$strIndexes = 'Indizes';
$strIndexesSeemEqual = 'Die folgenden Indizes scheinen identisch und einer von ihnen sollte entfernt werden:';
$strInnoDBAutoextendIncrement = 'Autoerweiterungs-Schrittgr��e';
$strInnoDBAutoextendIncrementDesc = 'Die Gr��e, um die ein Tablespace erweitert wird, wenn er voll ist.';
$strInnoDBBufferPoolSize = 'Gr��e des Puffer-Pools';
$strInnoDBBufferPoolSizeDesc = 'Die Gr��e des Arbeitsspeicherpuffers, den InnoDB verwendet, um Daten und Indizes zwischenzuspeichern.';
$strInnoDBDataFilePath = 'Datendateien';
$strInnoDBDataHomeDir = 'Pfad f�r Datendateien';
$strInnoDBDataHomeDirDesc = 'Der Pfad des Verzeichnisses, unter welchem alle InnoDB-Datendateien abgelegt werden.';
$strInnoDBPages = 'Seiten';
$strInnoDBRelationAdded = 'InnoDB Verkn�pfung hinzugef�gt';
$strInnodbStat = 'InnoDB-Status';
$strInsecureMySQL = 'Ihre Konfigurationsdatei enth�lt Einstellungen (Benutzer &quot;root&quot; ohne Passwort), welche denen des MySQL-Standardbenutzers entsprechen. Wird Ihr MySQL-Server mit diesen Einstellungen betrieben, so k�nnen Unbefugte leicht von au�en auf ihn zugreifen. Sie sollten diese Sicherheitsl�cke unbedingt schlie�en!';
$strInsert = 'Einf�gen';
$strInsertAsNewRow = ' Als neuen Datensatz speichern ';
$strInsertedRowId = 'Letzte automatisch eingef�gte ID:';
$strInsertedRows = 'Eingef�gte Zeilen:';
$strInternalNotNecessary = '* Eine interne Beziehung ist nicht notwendig, wenn sie bereits im InnoDB-Format vorliegt.';
$strInternalRelationAdded = 'Interne Verkn�pfung hinzugef�gt';
$strInternalRelations = 'Interne Beziehungen';
$strInvalidAuthMethod = 'Ung�ltige Authentifikationsmethode:';
$strInvalidCSVFieldCount = 'Ung�ltige Anzahl an Feldern in Zeile %d.';
$strInvalidCSVFormat = 'Ung�ltiges Format in Zeile %d.';
$strInvalidCSVParameter = 'Ung�ltiger Parameter f�r CSV-Import: "%s"';
$strInvalidColumn = 'Ung�ltige Spalte angegeben (%s)!';
$strInvalidColumnCount = 'Die Spaltenanzahl muss gr��er als 0 sein.';
$strInvalidDatabase = 'ung�ltige Datenbank';
$strInvalidFieldAddCount = 'Sie m�ssen mindestens ein Feld hinzuf�gen.';
$strInvalidFieldCount = 'Die Tabelle muss mindestens ein Feld haben.';
$strInvalidLDIImport = 'Dieses Plugin unterst�tzt keine Kompression!';
$strInvalidRowNumber = '%d ist keine g�ltige Zeilennummer.';
$strInvalidServerHostname = 'Ung�ltiger Host-Name f�r Server %1$s. Bitte �berpr�fen Sie Ihre Konfiguration.';
$strInvalidServerIndex = 'Ung�ltige Server-Nummer: "%s"';
$strInvalidTableName = 'ung�ltiger Tabellenname';

$strJapanese = 'Japanisch';
$strJoins = 'Tabellenverkn�pfungen (joins)';
$strJumpToDB = 'Zur Datenbank &quot;%s&quot; springen.';
$strJustDelete = 'Die Benutzer aus den Benutzertabellen l�schen.';
$strJustDeleteDescr = 'Die &quot;gel�schten&quot; Benutzer k�nnten weiterhin wie gewohnt auf den Server zugreifen, bis die Benutzertabellen neu geladen werden.';

$strKeepPass = 'Passwort nicht ver�ndert';
$strKeyCache = 'Schl�ssel-Cache';
$strKeyname = 'Name';
$strKill = 'Beenden';
$strKnownExternalBug = 'Die Funktion  "%s" wird durch einen bekannten Fehler beeintr�chtigt, siehe %s';
$strKorean = 'Koreanisch';

$strLDI = 'CSV mit LOAD DATA';
$strLDILocal = 'verwende LOCAL';
$strLaTeX = 'LaTeX';
$strLandscape = 'Querformat';
$strLanguage = 'Sprache';
$strLanguageUnknown = 'Unbekannte Sprache: "%1$s".';
$strLatchedPages = 'Belegte Seiten';
$strLatexCaption = 'Tabellenbeschriftung';
$strLatexContent = 'Inhalt der Tabelle __TABLE__';
$strLatexContinued = '(Fortsetzung)';
$strLatexContinuedCaption = 'Fortgesetzte Tabellenbeschriftung';
$strLatexIncludeCaption = 'Tabellenbeschriftung einf�gen';
$strLatexLabel = 'Kennzeichen';
$strLatexStructure = 'Struktur der Tabelle __TABLE__';
$strLatvian = 'Lettisch';
$strLengthSet = 'L�nge/Set';
$strLimitNumRows = 'Eintr�ge pro Seite';
$strLinesTerminatedBy = 'Zeilen getrennt mit';
$strLinkNotFound = 'Der Verweis wurde nicht gefunden.';
$strLinksTo = 'Verweise';
$strLithuanian = 'Litauisch';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Datei';
$strLogPassword = 'Passwort:';
$strLogServer = 'Server';
$strLogUsername = 'Benutzername:';
$strLogin = 'Anmeldung';
$strLoginInformation = 'Anmelde-Informationen';
$strLogout = 'Neu anmelden';
$strLongOperation = 'Diese Operation k�nnte einige Zeit beanspruchen. Trotzdem weitermachen?';

$strMIMETypesForTable = 'MIME TYPEN DER TABELLE';
$strMIME_MIMEtype = 'MIME-Typ';
$strMIME_available_mime = 'Verf�gbare MIME-Typen';
$strMIME_available_transform = 'Verf�gbare Umwandlungen';
$strMIME_description = 'Beschreibung';
$strMIME_nodescription = 'F�r diese Umwandlung ist keine Beschreibung verf�gbar.<br />F�r weitere Informationen wenden Sie sich bitte an den Autoren der Funktion &quot;%s&quot;.';
$strMIME_transformation = 'Darstellungsumwandlung';
$strMIME_transformation_note = 'Um eine Liste aller verf�gbaren MIME-Typen-Umwandlungen und deren Optionen zu sehen, klicken Sie bitte auf %sUmwandlungen%s';
$strMIME_transformation_options = 'Umwandlungsoptionen';
$strMIME_transformation_options_note = 'Bitte die Werte f�r die Umwandlungsoptionen in folgendem Format angeben: \'a\', 100, b,\'c\',... Wann immer Sie ein Backslash ("\") oder ein einfaches Anf�hrungszeichen ("\'") verwenden, setzen Sie bitte ein Backslash vor das Zeichen. (z. B.: \'\\\\xyz\' oder \'a\\\'b\').';
$strMIME_without = 'Kursiv dargestellte MIME-Typen besitzen keine untergliederten Umwandlungen.';
$strMaxConnects = 'max. gleichzeitige Verbindungen';
$strMaximalQueryLength = 'Maximale L�nge der erstellten Abfrage';
$strMaximumSize = 'Maximale Dateigr��e: %s%s';
$strMbExtensionMissing = 'Die PHP-Erweiterung "mbstring" wurde nicht gefunden, trotzdem jedoch scheinen Sie einen Mehrbyte-Zeichensatz zu verwenden. Ohne besagte Erweiterung ist phpMyAdmin nicht in der Lage Zeichenketten zu trennen, was zu unerwarteten Ergebnissen f�hren kann.';
$strMbOverloadWarning = 'Sie haben die Option "mbstring.func_overload" in Ihrer PHP-Konfiguration aktiviert. Diese ist nicht kompatibel zu phpMyAdmin, weshalb es zu Problemen und Datenverlust kommen kann.';
$strModifications = '�nderungen gespeichert.';
$strModify = 'Ver�ndern';
$strModifyIndexTopic = 'Index modifizieren';
$strMoveMenu = 'Verschiebe Men�';
$strMoveTable = 'Verschiebe Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strMoveTableOK = 'Tabelle %s wurde nach %s verschoben.';
$strMoveTableSameNames = 'Tabelle kann nicht mit gleichem Namen verschoben werden!';
$strMultilingual = 'mehrsprachig';
$strMyISAMDataPointerSize = 'Gr��e des Datenzeigers';
$strMyISAMDataPointerSizeDesc = 'Standardm��ige Gr��e des Zeigers, welcher von CREATE TABLE f�r MyISAM-Tabellen verwendet wird, sofern die Option MAX_ROWS nicht angegeben wird.';
$strMyISAMMaxExtraSortFileSize = 'Maximum Gr��e tempor�rer Dateien bei Indexerstellung';
$strMyISAMMaxExtraSortFileSizeDesc = 'Wenn das Erzeugen der tempor�ren Datei f�r schnelle Index-Erzeugung um diesen Wert gr��er sein w�rde als die Benutzung des Schl�ssel-Caches, wird die Schl�ssel-Cache-Methode bevorzugt.';
$strMyISAMMaxSortFileSize = 'Maximale Gr��e tempor�rer Dateien beim Sortieren';
$strMyISAMMaxSortFileSizeDesc = 'Die maximale Gr��e der tempor�ren Datei, die MySQL benutzen darf, w�hrend es den Index erzeugt (w�hrend REPAIR, ALTER TABLE oder LOAD DATA INFILE).';
$strMyISAMRecoverOptions = 'Autoreparatur-Modus';
$strMyISAMRecoverOptionsDesc = 'Der Modus der automatischen Wiederherstellung abgest�rzter MyISAM-Tabellen, wie �ber den Startparameter --myisam-recover angegeben.';
$strMyISAMRepairThreads = 'Reparaturprozess';
$strMyISAMRepairThreadsDesc = 'Wenn dieser Wert gr��er als 1 ist, werden MyISAM-Tabellenindizes w�hrend einer Reparatur oder eines Sortierungsprozesses parallel erstellt (jeder Index in einem separatem Prozess).';
$strMyISAMSortBufferSize = 'Gr��e des Sortierungspuffers';
$strMyISAMSortBufferSizeDesc = 'Der Puffer, der beim Sortieren des Indexes zugewiesen wird, wenn man ein REPAIR oder ausf�hrt oder Indizes mit CREATE INDEX oder ALTER TABLE erzeugt.';
$strMySQLCharset = 'MySQL-Zeichensatz';
$strMySQLConnectionCollation = 'Zeichensatz / Kollation der MySQL-Verbindung';
$strMySQLSaid = 'MySQL meldet: ';
$strMySQLShowProcess = 'Prozesse anzeigen';
$strMySQLShowStatus = 'MySQL-Laufzeit-Informationen anzeigen';
$strMySQLShowVars = 'MySQL-System-Variablen anzeigen';
$strMysqlClientVersion = 'MySQL-Client-Version';
$strMysqlLibDiffersServerVersion = 'Die Version der verwendeten PHP MySQL Bibliothek %s unterscheidet sich von der Version des MySQL Servers %s. Dies kann zu unerwartetem Verhalten f�hren.';

$strName = 'Name';
$strNext = 'N�chste';
$strNo = 'Nein';
$strNoActivity = 'Da Sie seit mindestens %s Sekunden inaktiv waren, wurden Sie automatisch abgemeldet. Bitte melden Sie sich erneut an.';
$strNoDataReceived = 'Es wurden keinen Daten zum importieren empfangen. Entweder wurde keine Datei ausgew�hlt, oder die Dateigr��e hat die maximal erlaubte Gr��e der PHP Konfiguration �berschritten. Siehe FAQ 1.16.';
$strNoDatabases = 'Keine Datenbanken';
$strNoDatabasesSelected = 'Es wurden keine Datenbanken ausgew�hlt.';
$strNoDescription = 'keine Beschreibung';
$strNoDetailsForEngine = 'F�r dieses Tabellenformat sind keine Statusinformationen verf�gbar';
$strNoDropDatabases = 'Die Anweisung "DROP DATABASE" wurde deaktiviert.';
$strNoExplain = 'SQL-Erkl�rung umgehen';
$strNoFilesFoundInZip = 'Keine Dateien im ZIP-Archiv gefunden!';
$strNoFrames = 'phpMyAdmin arbeitet besser mit einem <b>Frame</b>-f�higen Browser.';
$strNoIndex = 'Kein Index definiert!';
$strNoIndexPartsDefined = 'Keine Indizes definiert.';
$strNoModification = 'Keine �nderung';
$strNoOptions = 'F�r dieses Format sind keine Optionen vorhanden';
$strNoPassword = 'Kein Passwort';
$strNoPermission = 'Der Webserver hat keine Schreibrechte um die Datei %s zu speichern.';
$strNoPhp = 'ohne PHP-Code';
$strNoPrivileges = 'Keine Rechte';
$strNoRights = 'Sie haben nicht genug Rechte um fortzufahren!';
$strNoRowsSelected = 'Es wurden keine Datens�tze ausgew�hlt.';
$strNoSpace = 'Zu wenig Speicherplatz um die Datei %s zu speichern.';
$strNoTablesFound = 'Es wurden keine Tabellen in der Datenbank gefunden.';
$strNoThemeSupport = 'Die Unterst�tzung f�r Oberfl�chendesigns ist deaktiviert. Bitte �berpr�fen Sie Ihre Konfiguration und / oder Ihre Designs im Verzeichnis %s.';
$strNoUsersFound = 'Es wurden keine Benutzer gefunden.';
$strNoValidateSQL = 'SQL-Validierung umgehen';
$strNone = 'keine';
$strNotNumber = 'Das ist keine Zahl!';
$strNotOK = 'fehlerhaft';
$strNotSet = 'Die Tabelle <b>%s</b> wurde entweder nicht gefunden oder in der Kofigurationsdatei %s nicht gesetzt.';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s Treffer in der Tabelle <i>%s</i>';
$strNumSearchResultsTotal = '<b>Insgesamt</b> <i>%s</i> Treffer';
$strNumTables = 'Tabellen';
$strNumberOfFields = 'Anzahl der Felder';
$strNumberOfTables = 'Anzahl Tabellen';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Open Document Kalkulationstabelle';
$strOpenDocumentText = 'Open Document Text';
$strOpenNewWindow = 'Neues phpMyAdmin-Fenster';
$strOperations = 'Operationen';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimiere Tabelle';
$strOptions = 'Optionen';
$strOr = 'oder';
$strOverhead = '�berhang';
$strOverwriteExisting = 'Bestehende Datei(en) �berschreiben';

$strPDF = 'PDF';
$strPDFReportExplanation = '(Erstellt einen Report mit den Daten einer Tabelle)';
$strPDFReportTitle = 'Titel des Reports';
$strPHP40203 = 'Sie verwenden die PHP-Version 4.2.3, welche leider fehlerhaft im Umgang mit Mehrbyte-Zeichenketten (mbstring) ist. Dieser Fehler ist in der PHP-Datenbank als Bug-Report #19404 dokumentiert. Aus diesem Grund wird diese PHP-Version nicht f�r den Betrieb von phpMyAdmin empfohlen.';
$strPHPVersion = 'PHP-Version';
$strPageNumber = 'Seite:';
$strPagesToBeFlushed = 'Zur�ckzuschreibende Seiten';
$strPaperSize = 'Papiergr��e';
$strPartialImport = 'Partieller Import';
$strPartialText = 'gek�rzte Textfelder';
$strPassword = 'Passwort';
$strPasswordChanged = 'Das Passwort f�r %s wurde ge�ndert.';
$strPasswordEmpty = 'Es wurde kein Passwort angegeben!';
$strPasswordHashing = 'Password-Verschl�sselung';
$strPasswordNotSame = 'Die eingegebenen Passw�rter sind nicht identisch!';
$strPdfDbSchema = 'Schema der Datenbank "%s" - Seite %s';
$strPdfInvalidTblName = 'Die Tabelle "%s" existiert nicht!';
$strPdfNoTables = 'keine Tabellen';
$strPerHour = 'pro Stunde';
$strPerMinute = 'pro Minute';
$strPerSecond = 'pro Sekunde';
$strPersian = 'Persisch';
$strPhoneBook = 'Telefonbuch';
$strPhp = 'PHP-Code erzeugen';
$strPleaseSelectPrimaryOrUniqueKey = 'Bitte den PRIMARY KEY oder einen UNIQUE KEY w�hlen';
$strPmaDocumentation = 'phpMyAdmin-Dokumentation';
$strPmaUriError = 'Das <tt>$cfg[\'PmaAbsoluteUri\']</tt>-Verzeichnis MUSS in Ihrer Konfigurationsdatei angegeben werden!';
$strPmaWiki = 'phpMyAdmin Wiki';
$strPolish = 'Polnisch';
$strPortrait = 'Hochformat';
$strPos1 = 'Anfang';
$strPrevious = 'Vorherige';
$strPrimary = 'Prim�rschl�ssel';
$strPrimaryKeyHasBeenDropped = 'Der Prim�rschl�ssel wurde gel�scht.';
$strPrimaryKeyName = 'Der Name des Prim�rschl�ssels muss PRIMARY lauten!';
$strPrimaryKeyWarning = 'Der Name des Prim�rschl�ssels darf <b>nur</b> "PRIMARY" lauten.';
$strPrint = 'Drucken';
$strPrintView = 'Druckansicht';
$strPrintViewFull = 'Druckansicht (vollst�ndige Textfelder)';
$strPrivDescAllPrivileges = 'Enth�lt alle Rechte bis auf GRANT.';
$strPrivDescAlter = 'Erlaubt das Ver�ndern der Struktur bestehender Tabellen.';
$strPrivDescAlterRoutine = 'Erlaubt das Ver�ndern und L�schen von Routinen.';
$strPrivDescCreateDb = 'Erlaubt das Erstellen neuer Datenbanken und Tabellen.';
$strPrivDescCreateRoutine = 'Erlaubt das Erstellen von gespeicherten Routinen.';
$strPrivDescCreateTbl = 'Erlaubt das Erstellen neuer Tabellen.';
$strPrivDescCreateTmpTable = 'Erlaubt das Erstellen tempor�rer Tabellen.';
$strPrivDescCreateUser = 'Erlaubt das Erstellen, L�schen und Umbenennen von Benutzern.';
$strPrivDescCreateView = 'Erlaubt das Erstellen von Views.';
$strPrivDescDelete = 'Erlaubt das L�schen von Daten.';
$strPrivDescDropDb = 'Erlaubt das L�schen ganzer Datenbanken und Tabellen.';
$strPrivDescDropTbl = 'Erlaubt das L�schen ganzer Tabellen.';
$strPrivDescExecute = 'Erlaubt das Ausf�hren gespeicherter Prozeduren; Hat keinen Effekt in dieser MySQL-Version.';
$strPrivDescExecute5 = 'Erlaubt das Ausf�hren von Routinen.';
$strPrivDescFile = 'Erlaubt das Importieren von Daten aus und das Exportieren in externe Dateien.';
$strPrivDescGrant = 'Erlaubt das Hinzuf�gen von Benutzern und Rechten ohne den die Benutzerprofile neu laden zu m�ssen.';
$strPrivDescIndex = 'Erlaubt das Erstellen und L�schen von Indizes.';
$strPrivDescInsert = 'Erlaubt das Hinzuf�gen und Ersetzen von Daten.';
$strPrivDescLockTables = 'Erlaubt die Sperrung bestimmter Tabellen.';
$strPrivDescMaxConnections = 'Begrenzt die Anzahl neuer Verbindungen, welche ein Benutzer pro Stunde aufbauen darf.';
$strPrivDescMaxQuestions = 'Begrenzt die Anzahl der Abfragen, welche ein Benutzer pro Stunde senden darf.';
$strPrivDescMaxUpdates = 'Begrenzt die Anzahl der Ver�nderungen, welche ein Benutzer pro Stunde an allen Datenbanken und Tabellen vornehmen darf.';
$strPrivDescMaxUserConnections = 'Beschr�nkt die Anzahl der gleichzeitigen Verbindungen f�r diesen Benutzer.';
$strPrivDescProcess3 = 'Erlaubt das Beenden fremder Prozesse.';
$strPrivDescProcess4 = 'Erlaubt das Anzeigen der vollen Abfragen in der Prozessliste.';
$strPrivDescReferences = 'Hat keinen Effekt in dieser MySQL-Version.';
$strPrivDescReload = 'Erlaubt das erneute Laden von Servereinstellungen und das Leeren der Zwischenspeicher zur Laufzeit.';
$strPrivDescReplClient = 'Erlaubt dem Benutzer zu fragen, wo sich die Master- bzw. Slave-Systeme befinden';
$strPrivDescReplSlave = 'Wird f�r die Replication-Slave-Systeme ben�tigt.';
$strPrivDescSelect = 'Erlaubt das Auslesen von Daten.';
$strPrivDescShowDb = 'Gew�hrt Zugang zur vollst�ndigen Datenbankliste.';
$strPrivDescShowView = 'Erlaubt das Ausf�hren von \'SHOW CREATE VIEW\'.';
$strPrivDescShutdown = 'Erlaubt das Beenden des Servers.';
$strPrivDescSuper = 'Erlaubt eine Verbindung, selbst wenn die maximale Anzahl an Verbindungen bereits erreicht ist; Wird f�r viele administrative Operationen, wie das Setzen globaler Variables oder das Beenden fremder Prozesse, vorausgesetzt.';
$strPrivDescUpdate = 'Erlaubt das Ver�ndern von gespeicherten Daten.';
$strPrivDescUsage = 'Keine Rechte.';
$strPrivileges = 'Rechte';
$strPrivilegesReloaded = 'Die Benutzerprofile wurden neu geladen.';
$strProcedures = 'Prozeduren';
$strProcesses = 'Prozesse';
$strProcesslist = 'Prozesse';
$strProfiling = 'Messen';
$strProtocolVersion = 'Protokoll-Version';
$strPutColNames = 'Feldnamen in die erste Zeile setzen';

$strQBE = 'Abfrageeditor';
$strQBEDel = 'Entf.';
$strQBEIns = 'Einf.';
$strQueryCache = 'Abfragencache';
$strQueryFrame = 'Abfragefenster';
$strQueryOnDb = ' SQL-Befehl in der Datenbank <b>%s</b>:';
$strQueryResultsOperations = 'Operationen f�r das Abfrageergebnis';
$strQuerySQLHistory = 'SQL-Verlaufsprotokoll';
$strQueryStatistics = '<b>Abfragestatistik</b>: Seit seinem Start wurden %s Abfragen an diesen MySQL-Server gesandt.';
$strQueryTime = 'die Abfrage dauerte %01.4f sek.';
$strQueryType = 'Abfrageart';
$strQueryWindowLock = 'Abfrage vor �nderungen au�erhalb des Fensters sch�tzen';

$strReType = 'Wiederholen';
$strReadRequests = 'Leseanfragen';
$strReceived = 'Empfangen';
$strRecommended = 'empfohlen';
$strRecords = 'Eintr�ge';
$strReferentialIntegrity = 'Pr�fe referentielle Integrit�t:';
$strRefresh = 'Aktualisieren';
$strRelationDeleted = 'Verkn�pfung gel�scht';
$strRelationNotWorking = 'Die zus�tzlichen Funktionen f�r verkn�pfte Tabellen wurden automatisch deaktiviert. Klicken Sie %shier%s um herauszufinden warum.';
$strRelationView = 'Beziehungs�bersicht';
$strRelationalSchema = 'Beziehungsschema';
$strRelations = 'Tabellenverkn�pfungen';
$strRelationsForTable = 'RELATIONEN DER TABELLE';
$strReload = 'Neuladen';
$strReloadPrivileges = 'Die Rechte neu laden';
$strReloadingThePrivileges = 'Lade die Benutzertabellen neu';
$strRemoveSelectedUsers = 'Die ausgew�hlten Benutzer l�schen';
$strRenameDatabaseOK = 'Datenbank %s wurde umbenannt zu %s';
$strRenameTable = 'Tabelle umbenennen in';
$strRenameTableOK = 'Tabelle %s wurde umbenannt in %s.';
$strRepairTable = 'Repariere Tabelle';
$strReplaceNULLBy = 'Ersetze NULL durch';
$strReplaceTable = 'Tabelleninhalt ersetzen';
$strReplication = 'Replikation';
$strReset = 'Zur�cksetzen';
$strResourceLimits = 'Ressourcenbeschr�nkungen';
$strRestartInsertion = 'Einf�gen mit %s Zeilen neu starten';
$strRevoke = 'Entfernen';
$strRevokeAndDelete = 'Den Benutzern alle Rechte entziehen und sie anschlie�end aus den Benutzertabellen l�schen.';
$strRevokeAndDeleteDescr = 'Die Benutzer w�rden weiterhin das USAGE-Recht behalten, bis die Benutzertabellen neu geladen werden.';
$strRevokeMessage = 'Sie haben die Rechte f�r %s entfernt.';
$strRomanian = 'Rum�nisch';
$strRoutineReturnType = 'R�ckgabe-Typ';
$strRoutines = 'Routinen';
$strRowLength = 'Zeilenl�nge';
$strRowSize = 'Zeilengr��e';
$strRows = 'Zeilen';
$strRowsFrom = 'Datens�tze, beginnend ab';
$strRowsModeFlippedHorizontal = 'horizontal (gedrehte Bezeichner)';
$strRowsModeHorizontal = 'untereinander';
$strRowsModeOptions = '%s angeordnet und wiederhole die Kopfzeilen nach %s Datens�tzen.';
$strRowsModeVertical = 'nebeneinander';
$strRowsStatistic = 'Zeilenstatistik';
$strRunQuery = 'SQL-Befehl ausf�hren';
$strRunSQLQuery = 'SQL-Befehl(e) in Datenbank %s ausf�hren';
$strRunSQLQueryOnServer = 'SQL-Befehl(e) auf Server %s ausf�hren';
$strRunning = 'auf %s';
$strRussian = 'Russisch';

$strSQL = 'SQL';
$strSQLCompatibility = 'SQL-Kompatibilit�tsmodus';
$strSQLExportType = 'Exporttyp';
$strSQLParserBugMessage = 'M�glicherweise haben Sie einen Bug im SQL-Parser entdeckt. Bitte �berpr�fen Sie Ihre Abfrage genaustens, insbesondere auf falsch gesetzte oder nicht geschlossene Anf�hrungszeichen. Eine weitere Ursache k�nnte darin liegen, dass Sie versuchen eine Datei mit bin�ren Daten, welche nicht von Anf�hrungszeichen eingeschlossen sind, hochzuladen. Sie k�nnen alternativ versuchen Ihre Abfrage �ber das MySQL-Kommandozeileninterface zu senden. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen. Falls Sie weiterhin Probleme haben sollten oder der Parser dort versagt, wo die Kommandozeile erfolgreich ist, so reduzieren Sie bitte Ihre Abfrage auf den Befehl, welcher die Probleme verursacht, und senden Sie uns einen Fehlerbericht mit den Datenausschnitt, den Sie weiter unten auf dieser Seite finden.:';
$strSQLParserUserError = 'Es scheint einen Fehler in Ihrer MySQL-Abfrage zu geben. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen.';
$strSQLQuery = 'SQL-Befehl';
$strSQLResult = 'SQL-Abfrageergebnis';
$strSQPBugInvalidIdentifer = 'Ung�ltiger Bezeichner';
$strSQPBugUnclosedQuote = 'Nicht geschlossene Anf�hrungszeichen';
$strSQPBugUnknownPunctuation = 'Unbekannte Interpunktion';
$strSave = 'Speichern';
$strSaveOnServer = 'Datei auf dem Server in Verzeichnis %s speichern';
$strSavePosition = 'Speichere Position';
$strScaleFactorSmall = 'Der Skalierungsfaktor ist zu klein, sodass das Schema nicht auf eine Seite passt!';
$strSearch = 'Suche';
$strSearchFormTitle = 'Durchsuche die Datenbank';
$strSearchInTables = 'In der / den Tabelle(n):';
$strSearchNeedle = 'Zu suchende W�rter oder Werte (Platzhalter: "%"):';
$strSearchOption1 = 'mindestens eines der W�rter';
$strSearchOption2 = 'alle W�rter';
$strSearchOption3 = 'genau diese Zeichenkette';
$strSearchOption4 = 'als regul�ren Ausdruck';
$strSearchResultsFor = 'Suchergebnisse f�r "<i>%s</i>" %s:';
$strSearchType = 'Finde:';
$strSecretRequired = 'Ab sofort muss ein geheimes Passwort zur Verschl�sselung in der Konfigurationsdatei gesetzt werden (blowfish_secret).';
$strSelectADb = 'Bitte Datenbank ausw�hlen';
$strSelectAll = 'Alle ausw�hlen';
$strSelectBinaryLog = 'Bin�res Protokoll zur Anzeige ausw�hlen';
$strSelectFields = 'Felder ausw�hlen (min. eines):';
$strSelectForeignKey = 'W�hle Fremdschl�ssel';
$strSelectNumRows = 'in der Abfrage';
$strSelectReferencedKey = 'W�hlen Sie den referenzierten Schl�ssel';
$strSelectTables = 'Tabellenauswahl';
$strSend = 'Senden';
$strSent = 'Gesendet';
$strServer = 'Server';
$strServerChoice = 'Server Ausw�hlen';
$strServerNotResponding = 'Der Server antwortet nicht.';
$strServerStatus = 'Laufzeit-Informationen';
$strServerStatusDelayedInserts = 'Verz�gertes Einf�gen (delayed inserts)';
$strServerStatusUptime = 'Dieser MySQL-Server l�uft bereits %s. Er wurde am %s gestartet.';
$strServerTabVariables = 'Variablen';
$strServerTrafficNotes = '<b>Servertraffic</b>: In diesen Tabellen wird der Netzwerkverkehr dieses MySQL-Servers seit dessen Start aufgef�hrt.';
$strServerVars = 'Servervariablen und -einstellungen';
$strServerVersion = 'Server Version';
$strServers = 'Server';
$strSessionStartupErrorGeneral = 'Die Sitzung konnte nicht ohne Fehler gestartet werden, schauen Sie bitte in das Fehlerprokoll von PHP und/oder Ihres Webservers und konfigurieren Sie PHP entsprechend (session.save_path, Schreibrechte).';
$strSessionValue = 'Wert f�r diese Sitzung';
$strSetEnumVal = 'Wenn das Feld vom Typ \'ENUM\' oder \'SET\' ist, benutzen Sie bitte das Format: \'a\',\'b\',\'c\',... Wann immer Sie ein Backslash ("\") oder ein einfaches Anf�hrungszeichen ("\'") verwenden, setzen Sie bitte ein Backslash vor das Zeichen. (z. B.: \'\\\\xyz\' oder \'a\\\'b\').';
$strShow = 'Zeige';
$strShowAll = 'Alles anzeigen';
$strShowColor = 'mehrfarbig';
$strShowDatadictAs = 'Format des Strukturverzeichnisses';
$strShowFullQueries = 'Zeige die SQL-Abfragen vollst�ndig an';
$strShowGrid = 'Gitterlinien anzeigen';
$strShowHideLeftMenu = 'Zeige/Verstecke linkes Men�';
$strShowOpenTables = 'Zeige alle offenen Tabellen';
$strShowPHPInfo = 'PHP-Informationen anzeigen';
$strShowSlaveHosts = 'Zeige alle Slave-Rechner';
$strShowSlaveStatus = 'Zeige den Slave-Status';
$strShowStatusBinlog_cache_disk_useDescr = 'Anzahl der Transaktionen die den Binarylog-Cache verwendet, aber die Gr��e des Binarylog-Caches (binlog_cache_size) �berschritten und eine tempor�re Datei verwendet haben um die Statements der Transaktion zu speichern.';
$strShowStatusBinlog_cache_useDescr = 'Anzahl der Transaktionen, die den tempor�ren Binarylog-Cache verwendet haben.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Anzahl der (implizit) auf der Platte erzeugten tempor�ren Tabellen bei der Ausf�hrung von Statements. Wenn Created_tmp_disk_tables hoch ist, sollten Sie eventuell die Variable tmp_table_size herauf setzen, damit tempor�re Tabellen im Speicher erzeugt werden statt auf der Festplatte.';
$strShowStatusCreated_tmp_filesDescr = 'Anzahl der tempor�ren Dateien, die mysqld erzeugt hat.';
$strShowStatusCreated_tmp_tablesDescr = 'Anzahl der (implizit) im Arbeitsspeicher erzeugten tempor�ren Tabellen bei der Ausf�hrung von Statements.';
$strShowStatusDelayed_errorsDescr = 'Anzahl der Zeilen, die mit INSERT DELAYED geschrieben wurden, und bei denen ein Fehler auftrat (z. B. duplicate key).';
$strShowStatusDelayed_insert_threadsDescr = 'Anzahl der verz�gerten Insert-Handler-Prozesse in Benutzung. Jede einzelne Tabelle mit verz�gerten Inserts bekommt einen eigenen Prozess.';
$strShowStatusDelayed_writesDescr = 'Anzahl der Zeilen, die mit INSERT DELAYED geschrieben wurden.';
$strShowStatusFlush_commandsDescr  = 'Anzahl der ausgef�hrten FLUSH-Befehle.';
$strShowStatusHandler_commitDescr = 'Anzahl der Anfragen, ein COMMIT auszuf�hren.';
$strShowStatusHandler_deleteDescr = 'Anzahl der Zeilen, die aus Tabellen gel�scht wurden.';
$strShowStatusHandler_discoverDescr = 'Anzahl der gesuchten und gefundenen (discovered) Tabellen. Der MySQL-Server kann die NDB-Cluster-Storage-Engine fragen, ob sie eine bestimmte Tabelle kennt. Dieser Vorgang wird &quot;discovery&quot; genannt.';
$strShowStatusHandler_read_firstDescr = 'Wie oft der erste Eintrag aus einem Index gelesen wurde. Ein hoher Wert hier deutet darauf hin, dass der Server viele komplette Index-Scans macht (zum Beispiel SELECT spalte1 FROM foo, unter der Annahme, dass spalte1 indiziert ist).';
$strShowStatusHandler_read_keyDescr = 'Anzahl der Anfragen, eine Zeile basierend auf einem Schl�ssel zu lesen. Wenn dieser Wert hoch ist, ist das ein gutes Indiz daf�r, dass Ihre Anfragen und Tabellen korrekt indiziert sind.';
$strShowStatusHandler_read_nextDescr = 'Anzahl der Anfragen, die n�chste Zeile in der Reihenfolge des Schl�ssels zu lesen. Dieser Wert wird herauf gez�hlt, wenn Sie eine Index-Spalte mit einer Bereichsbeschr�nkung (Limit) abfragen. Er wird ebenfalls herauf gez�hlt, wenn Sie einen Index-Scan durchf�hren.';
$strShowStatusHandler_read_prevDescr = 'Anzahl der Anfragen, die vorhergehende Zeile in der Reihenfolge des Schl�ssels zu lesen. Diese Lese-Methode ist haupts�chlich zur Optimierung von ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Anzahl der Anfragen, eine Zeile basierend auf einer festen Position zu lesen. Dieser Wert wird hoch sein, wenn Sie viele Anfragen ausf�hren, die erfordern, dass das Ergebnis sortiert wird. Wenn Handler_read_rnd hoch ist, haben Sie wahrscheinlich viele Anfragen, die MySQL zwingen, ganze Tabellen zu scannen, oder Sie haben Joins, die Schl�ssel nicht richtig benutzen.';
$strShowStatusHandler_read_rnd_nextDescr = 'Anzahl der Anfragen, die n�chste Zeile in der Daten-Datei zu lesen. Dieser Wert wird hoch sein, wenn Sie viele Tabellen-Scans durchf�hren. Im Allgemeinen weist das darauf hin, dass Ihre Tabellen nicht korrekt indiziert sind, oder dass Ihre Anfragen nicht so geschrieben sind, dass Sie Vorteile aus den Indexen ziehen, die Sie haben.';
$strShowStatusHandler_rollbackDescr = 'Anzahl der Anfragen, ein ROLLBACK auszuf�hren.';
$strShowStatusHandler_updateDescr = 'Anzahl der Anfragen, eine Zeile in einer Tabelle zu aktualisieren.';
$strShowStatusHandler_writeDescr = 'Anzahl der Anfragen, eine Zeile in eine Tabelle einzuf�gen.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Anzahl der Seiten, die Daten enthalten (ob &quot;dirty&quot; oder nicht).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Anzahl der als &quot;dirty&quot; markierten Seiten.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Anzahl der Seiten im Puffer-Pool, die zur�ckgeschrieben werden m�ssen.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Anzahl der unbenutzten Seiten.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Anzahl der belegten Seiten. Diese Seiten werden gerade gelesen oder beschrieben oder k�nnen aus einem anderen Grund nicht zur�ckgeschrieben oder entfernt werden k�nnen.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Anzahl der durch administrativen Overhead, wie z. B. Zeilensperren oder den adaptiven Hash-Index ausgelasteten Seiten. Dieser Wert errechnet sich auch aus Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Die Gr��e des Puffer-Pools in Seiten.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Anzahl "random" read-aheads durch InnoDB. Dies geschieht wenn eine Abfrage einen gro�en Teil einer Tabelle durchsucht aber in zuf�lliger Reihenfolge.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Anzahl sequentieller read-aheads durch InnoDB. Dies geschieht wenn InnoDB eine Tabelle komplett sequentiell durchsucht.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Anzahl angeforderter Lesevorg�ngen durch InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Anzahl an Lesevorg�ngen die InnoDB nicht aus dem Zwischenspeicher bedienen konnte und deshalb einen Einzel-Seiten-Lesevorgang starten musste.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalerweise geschehen Schreibvorg�nge im InnoDB Zwischenspeicher im Hintergrund. Abber wenn es n�tig ist eine Seite zu lesen oder zu erstellen und es ist keine saubere Seite verf�gbar dann ist es notwendig darauf zu warten das Seiten weggeschrieben werden. Dieser Wert gibt wieder wie oft das geschehen ist. Wenn die Zwischenspeicher-Gr��e korrekt eingestellt ist sollte dieser Wert klein sein.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Anzahl der Schreibvorg�nge im InnoDB Zwischenspeicher.';
$strShowStatusInnodb_data_fsyncsDescr = 'Bisher ausgef�hrte fsync()-Operationen.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Momentan anstehende fsync()-Operationen.';
$strShowStatusInnodb_data_pending_readsDescr = 'Momentan anstehende Lesezugriffe.';
$strShowStatusInnodb_data_pending_writesDescr = 'Momentan anstehende Schreizugriffe.';
$strShowStatusInnodb_data_readDescr = 'Wieviel Daten bisher gelesen wurden, in Byte.';
$strShowStatusInnodb_data_readsDescr = 'Wie oft Daten gelesen wurden.';
$strShowStatusInnodb_data_writesDescr = 'Wie oft Daten geschrieben wurden.';
$strShowStatusInnodb_data_writtenDescr = 'Wieviel Daten bisher geschrieben wurden, in Byte.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Anzahl der ausgef�hrten "doublewrite" Schreibzugriffe und die Anzahl der Seiten die daf�r geschrieben wurden.';
$strShowStatusInnodb_dblwr_writesDescr = 'Anzahl der ausgef�hrten "doublewrite" Schreibzugriffe und die Anzahl der Seiten die daf�r geschrieben wurden.';
$strShowStatusInnodb_log_waitsDescr = 'Wie oft gewartet werden musste weil der Protokoll-Zwischenspeicher zu klein war und deshalb gewartet wurde das er geleert wird.';
$strShowStatusInnodb_log_write_requestsDescr = 'Anzahl der Schreibzugriffe f�r die Protokoll-Datei.';
$strShowStatusInnodb_log_writesDescr = 'Anzahl der tats�chlichen Schreibvorg�nge der Protokoll-Datei.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Get�tigte fsyncs Schreibzugriffe f�r die Protokoll-Datei.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Anstehende "fsyncs" f�r die Protokoll-Datei.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Anstehende Schreibzugriffe f�r die Protokoll-Datei.';
$strShowStatusInnodb_os_log_writtenDescr = 'Anzahl an Byte die in die Protokoll-Datei geschrieben wurden.';
$strShowStatusInnodb_page_sizeDescr = 'Die fest kompilierte InnnoDB Seitengr��e (Standard 16 KiB). Viele Werte werden in Seiten gez�hlt; die Seitengr��e erlaubt es diese einfach in Byte umzurechnen.';
$strShowStatusInnodb_pages_createdDescr = 'Anzahl erstellter Seiten.';
$strShowStatusInnodb_pages_readDescr = 'Anzahl gelesener Seiten.';
$strShowStatusInnodb_pages_writtenDescr = 'Anzahl geschriebener Seiten.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Momentan anstehende Zeilen-Sperren.';
$strShowStatusInnodb_row_lock_timeDescr = 'Summe aller Wartezeiten um Zeilen-Sperren zu bekommen, in Millisekunden.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Durchschnittliche Wartezeite um eine Zeilen-Sperre zu bekommen, in Millisekunden.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'L�ngste Wartezeite um eine Zeilen-Sperre zu bekommen, in Millisekunden.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Wie oft auf ein Zeilen-Sperre gewartet werden musste.';
$strShowStatusInnodb_rows_deletedDescr = 'Anzahl gel�schter Zeilen aller InnoDB Tabellen.';
$strShowStatusInnodb_rows_insertedDescr = 'Anzahl der eingef�gten Zeilen in alle InnoDB Tabellen.';
$strShowStatusInnodb_rows_readDescr = 'Anzahl der Zeilen, die aus InnoDB-Tabellen gelesen wurden.';
$strShowStatusInnodb_rows_updatedDescr = 'Anzahl der Zeilen, die in InnoDB-Tabellen aktualisiert wurden.';
$strShowStatusKey_blocks_not_flushedDescr = 'Schl�ssel-Bl�cke im Schl�ssel-Cache, die ver�ndert wurden, aber noch nicht auf die Platte zur�ck geschrieben (flush) wurden; auch bekannt als Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Die Anzahl der unbenutzten Schl�ssel-Bl�cke im Schl�ssel-Cache. Dieser Wert kann dazu dienen die Auslastung des Schl�ssel-Cache zu bestimmen.';
$strShowStatusKey_blocks_usedDescr = 'Die Anzahl der maximal gleichzeitig benutzten Blocks im Schl�ssel-Cache.';
$strShowStatusKey_read_requestsDescr = 'Die Anzahl der Anfragen, einen Schl�ssel-Block aus dem Cache zu lesen.';
$strShowStatusKey_readsDescr = 'Die Anzahl physikalischer Lesezugriffe eines Schl�ssel-Blocks von der Platte. Wenn key_reads hoch ist, ist Ihr key_cache wahrscheinlich zu klein. Die Cache-Zugriffsrate kann mit key_reads / key_read_requests berechnet werden.';
$strShowStatusKey_write_requestsDescr = 'Die Anzahl der Anfragen, einen Schl�ssel-Block in den Cache zu schreiben.';
$strShowStatusKey_writesDescr = 'Die Anzahl physikalischer Schreibvorg�nge eines Schl�ssel-Blocks auf Platte.';
$strShowStatusLast_query_costDescr = 'Die Kosten f�r die zuletzt verarbeitete Abfrage wie vom Abfrage-Optimierer berechnet. N�tzlich um verschiedene Formulierungen f�r eine Abfrage zu vergleichen. Der Wert 0 besagt das bisher keine Abfrage �bersetzt wurde.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Anzahl der Zeilen, die in INSERT-DELAYED-Warteschleifen darauf warten, geschrieben zu werden.';
$strShowStatusOpen_filesDescr = 'Anzahl der ge�ffneten Dateien.';
$strShowStatusOpen_streamsDescr = 'Anzahl der ge�ffneten Streams (haupts�chlich zum Protokolieren benutzt).';
$strShowStatusOpen_tablesDescr = 'Anzahl der ge�ffneten Tabellen.';
$strShowStatusOpened_tablesDescr = 'Anzahl der Tabellen, die ge�ffnet wurden. Wenn Opened_tables hoch ist, ist Ihre table_cache-Variable wahrscheinlich zu niedrig.';
$strShowStatusQcache_free_blocksDescr = 'Freie Speicherbl�cke im Abfragen-Cache.';
$strShowStatusQcache_free_memoryDescr = 'Freier Speicher im Abfragen-Cache.';
$strShowStatusQcache_hitsDescr = 'Abfrage-Cache-Zugriffsrate.';
$strShowStatusQcache_insertsDescr = 'Die Anzahl der Abfragen die dem Cache hinzugef�gt wurden.';
$strShowStatusQcache_lowmem_prunesDescr = 'Die Anzahl der Abfragen die aus dem Cache entfernt wurden, um Speicher f�r neue Abfragen frei zu geben. Dieser Wert kann helfen die Abfrage-Cache-Gr��e zu optimieren. Der Abfrage-Cache arbeitet nach der LRU-Strategie (least recently used), d.&nbsp;h. es wird stets die Abfrage gel�scht, die am l�ngsten unbenutzt im Cache lag.';
$strShowStatusQcache_not_cachedDescr = 'Die Anzahl der nicht im Cache eingetragenen Abfragen (nicht m�glich, oder aufgrund der query_cache_type Einstellung).';
$strShowStatusQcache_queries_in_cacheDescr = 'Die Anzahl der Abfragen im Cache.';
$strShowStatusQcache_total_blocksDescr = 'Die Anzahl aller Speicherbl�cke im Abfrage-Cache.';
$strShowStatusReset = 'Zur�cksetzen';
$strShowStatusRpl_statusDescr = 'Der Status der ausfallsicheren Replikation.';
$strShowStatusSelect_full_joinDescr = 'Anzahl der Joins ohne Schl�ssel. Wenn dieser Wert nicht 0 ist sollten die Indizes der Tabellen sorgf�ltig �berpr�ft werden.';
$strShowStatusSelect_full_range_joinDescr = 'Anzahl der Joins, bei denen eine Bereichssuche auf die Referenztabelle statt fand.';
$strShowStatusSelect_rangeDescr = 'Anzahl der Joins, bei denen Bereiche auf die erste Tabelle benutzt wurden. (Es ist normalerweise unkritisch, wenn dieser Wert hoch ist.)';
$strShowStatusSelect_range_checkDescr = 'Anzahl der Joins ohne Schl�ssel, bei denen nach jeder Zeile auf Schl�sselbenutzung gepr�ft wurde. Wenn dieser Wert nicht 0 ist sollten die Indizes der Tabellen sorgf�ltig �berpr�ft werden.';
$strShowStatusSelect_scanDescr = 'Anzahl der Joins, bei denen die erste Tabelle gescannt wurde.';
$strShowStatusSlave_open_temp_tablesDescr = 'Anzahl der tempor�ren Tabellen, die momentan vom Slave-Prozess ge�ffnet sind.';
$strShowStatusSlave_retried_transactionsDescr = 'Gesamtzahl (seit Start des Servers) der vom Replikations-Slave-SQL-Thread wiederversuchten Transaktionen.';
$strShowStatusSlave_runningDescr = 'Dieser Wert steht auf ON wenn dieser Server ein Slave ist und mit dem Master verbunden ist.';
$strShowStatusSlow_launch_threadsDescr = 'Anzahl der Prozesse, die l�nger als slow_launch_time  brauchten, um sich zu verbinden.';
$strShowStatusSlow_queriesDescr = 'Anzahl der Anfragen, die l�nger als long_query_time ben�tigten.';
$strShowStatusSort_merge_passesDescr = 'Anzahl der Verschmelzungen (Merge), die von einem Sortiervorgang ben�tigt wurden. Wenn dieser Wert hoch ist, sollten Sie in Betracht ziehen, sort_buffer herauf zu setzen.';
$strShowStatusSort_rangeDescr = 'Anzahl der Sortiervorg�nge, die mit Bereichen durchgef�hrt wurden.';
$strShowStatusSort_rowsDescr = 'Anzahl der sortierten Zeilen.';
$strShowStatusSort_scanDescr = 'Anzahl der Sortiervorg�nge, die durchgef�hrt wurden, indem die Tabelle gescannt wurde.';
$strShowStatusTable_locks_immediateDescr = 'Wie oft eine Tabellensperre sofort erlangt wurde.';
$strShowStatusTable_locks_waitedDescr = 'Wie oft eine Tabellensperre nicht sofort erlangt werden konnte und gewartet werden musste. Wenn dieser Wert hoch ist und Sie Performance-Probleme haben, sollten Sie zun�chst Ihre Anfragen optimieren und dann entweder Ihre Tabelle(n) zerteilen oder Replikation benutzen.';
$strShowStatusThreads_cachedDescr = 'Anzahl der Prozesse im Prozess-Cache. Die Cache-Zugriffsrate kann mit Threads_created / Connections berechnet werden. Wenn dieser Wert rot ist, sollte der thread_cache_size erh�ht werden.';
$strShowStatusThreads_connectedDescr = 'Anzahl der momentan offenen Verbindungen.';
$strShowStatusThreads_createdDescr = 'Anzahl der Prozesse, die zur Handhabung von Verbindungen erzeugt wurden. Wenn Threads_created hoch ist, sollten Sie eventuell die Thread_cache_size-Variable herauf setzen. (Normalerweise ergibt sich daraus keine bemerkbare Performance-Steigerung wenn eine gute Prozess-Implementierung vorliegt.)';
$strShowStatusThreads_runningDescr = 'Anzahl der Prozesse, die nicht schlafen.';
$strShowTableDimension = 'Tabellendimensionen anzeigen.';
$strShowTables = 'Tabellen anzeigen';
$strShowThisQuery = 'SQL-Befehl hier wieder anzeigen';
$strShowingBookmark = 'Bookmark wird angezeigt';
$strShowingPhp = 'Ansicht als PHP Code';
$strShowingRecords = 'Zeige Datens�tze ';
$strShowingSQL = 'Ansicht als SQL Abfrage';
$strSimplifiedChinese = 'Vereinfachtes Chinesisch';
$strSingly = '(einmalig)';
$strSize = 'Gr��e';
$strSkipQueries = 'Anzahl der am Anfang zu �berspringenden Eintr�ge (Abfragen)';
$strSlovak = 'Slovakisch';
$strSlovenian = 'Slovenisch';
$strSmallBigAll = 'Alles klein/gro�';
$strSnapToGrid = 'Am Gitter anordnen';
$strSocketProblem = '(evtl. ist auch der Socket des lokalen MySQL-Servers socket nicht korrekt konfiguriert)';
$strSort = 'Sortierung';
$strSortByKey = 'Nach Schl�ssel sortieren';
$strSorting = 'Sortierung';
$strSpaceUsage = 'Speicherplatzverbrauch';
$strSpanish = 'Spanisch';
$strSplitWordsWithSpace = 'Die W�rter werden durch Leerzeichen (" ") getrennt.';
$strStandInStructureForView = 'Stellvertreter-Struktur des Views';
$strStatCheckTime = 'Letzter Check am';
$strStatCreateTime = 'Erzeugt am';
$strStatUpdateTime = 'Aktualisiert am';
$strStatement = 'Angaben';
$strStatisticsOverrun = 'Auf stark frequentierten Server kann der Byte-Z�hler "�berlaufen" (Wieder bei 0 beginnen), deshalb k�nnen diese Werte wie sie vom MySQL Server ausgegeben werden falsch sein.';
$strStatus = 'Status';
$strStorageEngine = 'Tabellenformat';
$strStorageEngines = 'Tabellenformate';
$strStrucCSV = 'CSV-Daten';
$strStrucData = 'Struktur und Daten';
$strStrucExcelCSV = 'CSV-Daten f�r MS Excel';
$strStrucNativeExcel = 'Excel-Datei';
$strStrucOnly = 'Nur Struktur';
$strStructPropose = 'Tabellenstruktur analysieren';
$strStructure = 'Struktur';
$strStructureForView = 'Struktur des Views';
$strSubmit = 'Abschicken';
$strSuccess = 'Ihr SQL-Befehl wurde erfolgreich ausgef�hrt.';
$strSum = 'Gesamt';
$strSwedish = 'Schwedisch';
$strSwitchToDatabase = 'Zu kopierter Datenbank wechseln';
$strSwitchToTable = 'Zur kopierten Tabelle wechseln';

$strTable = 'Tabelle';
$strTableAlreadyExists = 'Die Tabelle %s existiert bereits!';
$strTableComments = 'Tabellen-Kommentar';
$strTableEmpty = 'Der Tabellenname ist leer!';
$strTableHasBeenDropped = 'Die Tabelle %s wurde gel�scht.';
$strTableHasBeenEmptied = 'Die Tabelle %s wurde geleert.';
$strTableHasBeenFlushed = 'Die Tabelle %s wurde geschlossen und zwischengespeicherte Daten gespeichert.';
$strTableIsEmpty = 'Die Tabelle scheint leer zu sein!';
$strTableMaintenance = 'Hilfsmittel';
$strTableName = 'Tabellenname';
$strTableOfContents = 'Inhalt';
$strTableOptions = 'Tabellenoptionen';
$strTableStructure = 'Tabellenstruktur f�r Tabelle';
$strTables = '%s Tabellen';
$strTakeIt = 'ausw�hlen';
$strTblPrivileges = 'Tabellenspezifische Rechte';
$strTempData = 'Tempor�re Daten';
$strTextAreaLength = 'Wegen seiner L�nge ist dieses<br />Feld vielleicht nicht editierbar.';
$strThai = 'Thai';
$strTheme = 'Oberfl�chendesign';
$strThemeDefaultNotFound = 'Standard-Oberfl�chendesign "%s" nicht gefunden!';
$strThemeNoPreviewAvailable = 'Keine Vorschau verf�gbar.';
$strThemeNoValidImgPath = 'Keinen g�ltiges Pfad f�r Grafiken des Oberfl�chendesigns "%s" gefunden!';
$strThemeNotFound = 'Oberfl�chendesign "%s" nicht gefunden!';
$strThemePathNotFound = 'Pfad f�r das Oberfl�chendesign "%s" nicht gefunden!';
$strThisHost = 'Dieser Host';
$strThreadSuccessfullyKilled = 'Der Prozess %s wurde erfolgreich abgebrochen.';
$strThreads = 'Prozesse';
$strTime = 'Dauer';
$strTimeoutInfo = 'Der vorherige Import-Vorgang wurde abgebrochen. Er wird nun bei Position %d fortgesetzt.';
$strTimeoutNothingParsed = 'Allerdings wurden hierbei keine Daten eingelesen. Das bedeutet in der Regel, dass phpMyAdmin nicht in der Lage sein wird, den Import zu beenden, sofern nicht die Ausf�hrungszeitbeschr�nkungen von php gelockert werden.';
$strTimeoutPassed = 'Das Ausf�hrungszeitlimit wurde erreicht. Wenn Sie die Datei erneut abschicken, wird der Import fortgesetzt.';
$strToFromPage = 'nach/von Seite';
$strToSelectRelation = 'Um eine Relation auszuw�hlen, klicken Sie :';
$strToggleScratchboard = 'Klemmbrett anzeigen';
$strToggleSmallBig = 'Wechseln klein/gro�';
$strTotal = 'insgesamt';
$strTotalUC = 'Insgesamt';
$strTraditionalChinese = 'Traditionelles Chinesisch';
$strTraditionalSpanish = 'Traditionelles Spanisch';
$strTraffic = 'Traffic';
$strTransactionCoordinator = 'Transaction Koordinator';
$strTransformation_application_octetstream__download = 'Zeigt einen Link an, um die bin�ren Daten eines Feldes downloaden zu k�nnen. Die erste Option benennt den Dateinamen. Die zweite Option kann einen Spaltennamen der Tabelle benennen, aus dem der Dateiname geholt werden soll. Sollte die zweite Option gesetzt sein ist es notwendig, die erste Option auf einen Leerstring zu setzen (\'\')';
$strTransformation_application_octetstream__hex = 'Daten in hexadezimaler Schreibweise darstellen. Der optionale Parameter legt fest, nach wie vielen Halbbyte ein Leerzeichen eingef�gt werden soll (Standardwert ist 2).';
$strTransformation_image_jpeg__inline = 'Ein klickbares Vorschaubild anzeigen. Optionen: Breite, H�he in Pixeln (ber�cksichtigt Seitenverh�ltnis)';
$strTransformation_image_jpeg__link = 'Einen Link zum Bild anzeigen, z. B. zum Download von BLOB-Daten.';
$strTransformation_image_png__inline = 'Siehe image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Zeigt ein TIME-, TIMESTAMP-, DATETIME- oder numerisches Unixtimestamp-Feld als formatiertes Datum. Die erste Option ist der Offset (in Stunden), der zum Timestamp (Vorgabe: 0) hinzugef�gt wird. Benutzen Sie die zweite Option, um einen abweichenden Datum-/Zeit-Format-String vorzugeben. Die dritte Option bestimmt, ob Sie das lokale oder das UTC Datum/Zeit daf�r zeigen wollen (benutzen Sie "local" oder "utc"). Dementsprechend hat das Datumsformat verschiedene Werte - f�r "lokal" siehe die PHP Dokumentation f�r die strftime() Funktion und f�r "utc" wird es mittels der gmdate() Funktion konvertiert.';
$strTransformation_text_plain__external = 'Nur f�r LINUX: Startet ein externes Programm und verwendet die Daten des Feldes f�r die Standardeingabe. Stellt innerhalb von phpMyAdmin die Standardausgabe des externen Programmes dar. Die Voreinstellung wurde f�r Tidy optimiert, um HTML code optisch zu formatieren. Aus Sicherheitsgr�nden m�ssen Sie die Datei libraries/transformations/text_plain__external.inc.php von Hand bearbeiten um weitere Programme hinzuzuf�gen. Die erste Option ist die Nummer des dort hinterlegten Programmes und die zweite Option legt die Parameter f�r das externe Programm fest. Die dritte Option bestimmt, falls auf 1 gesetzt, dass die Ausgabe mit htmlspecialchars() formatiert wird (Standard: 1). Die vierte Option bestimmt, falls auf 1 gesetzt, ob ein NOWRAP-Parameter der Tabellenzelle hinzugef�gt wird um einen automatischen Umbruch der Standardausgabe zu verhindern (Standard: 1)';
$strTransformation_text_plain__formatted = 'Beh�lt Ursprungsformatierung des Feldes bei. Kein Escaping oder Umlautwandlung wird durchgef�hrt.';
$strTransformation_text_plain__imagelink = 'Benutzt den Inhalt eines Feldes um ein Bild und einen Link dazu darzustellen. Die erste Option ist ein Pr�fix vor dem eigentlichen Feldinhalt wie "http://www.domain.com". Zweite Option ist die Breite des Bildes, die dritte Option die H�he des Bildes in Pixeln.';
$strTransformation_text_plain__link = 'Benutzt den Inhalt eines Feldes um einen Link darzustellen. Die erste Option ist ein Pr�fix vor dem eigentlichen Feldinhalt wie "http://www.domain.com". Zweite Option ist der darzustellende Titel des Links';
$strTransformation_text_plain__sql = 'Formatiert den Text als SQL mit Syntaxhervorhebung.';
$strTransformation_text_plain__substr = 'Stellt nur einen Teil des Feldinhaltes dar. Die erste Option definiert die Position des Textes ab dem die Ausgabe startet (Standard: 0), die zweite Option gibt an wieviel Zeichen ab dort dargestellt werden sollen. Falls diese Option leer ist, wird der gesamte verbleibende Text dargestellt. Die dritte Option kann einen Text enthalten, der bei partieller Ausgabe des Textes angeh�ngt wird, um eine Abschneidung kenntlich zu machen (Standard: ...).';
$strTriggers = 'Trigger';
$strTruncateQueries = 'Zeige die SQL-Abfragen verk�rzt an';
$strTurkish = 'T�rkisch';
$strType = 'Typ';

$strUkrainian = 'Ukrainisch';
$strUncheckAll = 'Auswahl entfernen';
$strUnicode = 'Unicode';
$strUnique = 'Unique';
$strUnknown = 'unbekannt';
$strUnselectAll = 'Auswahl entfernen';
$strUnsupportedCompressionDetected = 'Sie haben versucht, eine Datei zu laden, die mit einem nicht unterst�tzten Verfahren komprimiert wurde (%s). Entweder ist die Unterst�tzung f�r selbiges nicht implementiert oder in Ihrer Konfiguration deaktiviert.';
$strUpdComTab = 'Bitte lesen Sie in der Dokumentation nach, wie Sie die Struktur Ihrer Spaltenkommentartabelle aktualisieren k�nnen';
$strUpdatePrivMessage = 'Die Rechte f�r %s wurden ge�ndert.';
$strUpdateProfileMessage = 'Benutzer wurde ge�ndert.';
$strUpdateQuery = 'Aktualisieren';
$strUpgrade = 'Sie sollten auf %s %s oder neuer umsteigen.';
$strUploadErrorCantWrite = 'Datei konnte gespeichert werden.';
$strUploadErrorExtension = 'Dateihochladen durch eine Erweiterung gestoppt.';
$strUploadErrorFormSize = 'Die hochgeladene Datei ist gr��er als der in MAX_FILE_SIZE des HTML Formulars angegebene Wert.';
$strUploadErrorIniSize = 'Die hochgeladene Datei ist gr��er als der in der php.ini in upload_max_filesize angegebene Wert.';
$strUploadErrorNoTempDir = 'Kein g�ltiges Tempor�res Verzeichnis f�r hochgeladene Dateien.';
$strUploadErrorPartial = 'Die Datei wurde teilweise �bertragen.';
$strUploadErrorUnknown = 'Unbekannter Fehler beim Dateihochladen.';
$strUploadLimit = 'M�glicherweise wurde eine zu gro�e Datei hochgeladen. Bitte lesen Sie die %sDokumentation%s zur L�sung diese Problems.';
$strUploadsNotAllowed = 'Das hochladen von Dateien ist auf diesem Server nicht erlaubt.';
$strUsage = 'Verbrauch';
$strUseBackquotes = ' Tabellen- und Feldnamen in einfachen Anf�hrungszeichen ';
$strUseHostTable = 'Verwende Hosttabelle';
$strUseTabKey = 'Mittels TAB-Taste von Feld zu Feld springen, oder mit STRG+Pfeiltasten beliebig bewegen';
$strUseTables = 'Verwendete Tabellen';
$strUseTextField = 'Textfeld verwenden';
$strUseThisValue = 'Diesen Wert verwenden';
$strUsedPhpExtensions = 'Verwandte php-Erweiterungen';
$strUser = 'Benutzer';
$strUserAlreadyExists = 'Der Benutzer %s existiert bereits!';
$strUserEmpty = 'Kein Benutzername eingegeben!';
$strUserName = 'Benutzername';
$strUserNotFound = 'Der gew�hlte Benutzer wurde in der Benutzertabelle nicht gefunden.';
$strUserOverview = 'Benutzer�bersicht';
$strUsersDeleted = 'Die gew�hlten Benutzer wurden gel�scht.';
$strUsersHavingAccessToDb = 'Benutzer mit Zugriff auf &quot;%s&quot;';

$strValidateSQL = 'SQL validieren';
$strValidatorError = 'Bei der Initialisierung des SQL-Validators ist ein Fehler aufgetreten. Bitte �berpr�fen Sie, ob Sie die in der %sDokumentation%s beschriebenen php-Erweiterungen installiert haben.';
$strValue = 'Wert';
$strVar = 'Variable';
$strVersionInformation = 'Versionsinformationen';
$strView = 'Ansicht';
$strViewDump = 'Dump (Schema) der Tabelle anzeigen';
$strViewDumpDB = 'Dump (Schema) der Datenbank anzeigen';
$strViewDumpDatabases = 'Dump (Schema) der Datenbanken anzeigen';
$strViewHasBeenDropped = 'Die Ansicht %s wurde gel�scht';
$strViewMaxExactCount = 'Dieses View hat mehr als %d Zeilen. Bitte schlagen Sie im %sHandbuch%s nach.';
$strViewName = 'VIEW Name';

$strWebServerUploadDirectory = 'Upload-Verzeichnis auf dem Webserver';
$strWebServerUploadDirectoryError = 'Auf das festgelegte Upload-Verzeichnis kann nicht zugegriffen werden.';
$strWelcome = 'Willkommen bei %s';
$strWestEuropean = 'Westeurop�isch';
$strWildcard = 'Platzhalter';
$strWindowNotFound = 'Das Ziel-Browserfenster konnte nicht aktualisiert werden. M�glicherweise wurde das Ursprungsfenster geschlossen oder der Browser verhindert den Zugriff aufgrund von Ihren Sicherheitseinstellungen.';
$strWithChecked = 'markierte:';
$strWriteRequests = 'Schreibanfragen';
$strWrongUser = 'Falscher Benutzername/Passwort. Zugriff verweigert.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Der Wert 0 (null) entfernt die Beschr�nkung.';
$strZip = 'Zip-komprimiert';
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

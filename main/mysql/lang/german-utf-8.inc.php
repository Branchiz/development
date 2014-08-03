<?php
/**
 * German locale file for UTF-8
 *
 * For suggestions concerning this file please contact
 *     https://sourceforge.net/tracker/?group_id=23067&atid=387645
 *
 * Bei Verbesserungsvorschlägen diese Datei betreffend wenden Sie sich bitte an
 *     https://sourceforge.net/tracker/?group_id=23067&atid=387645
 *
 * $Id: german-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$mysql_5_1_doc_lang = 'de';

$day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$month = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y um %H:%M';
$timespanfmt = '%s Tage, %s Stunden, %s Minuten und %s Sekunden';

$strAPrimaryKey = 'Ein Primärschlüssel wurde in %s erzeugt';
$strAbortedClients = 'Abgebrochen';
$strAccessDenied = 'Zugriff verweigert.';
$strAccessDeniedCreateConfig = 'Eine mögliche Ursache wäre, dass Sie noch keine Konfigurationsdatei angelegt haben. Verwenden Sie in diesem Fall doch das %1$sSetup-Skript%2$s, um eine solche zu erstellen.';
$strAccessDeniedExplanation = 'phpMyAdmin hat versucht eine Verbindung zum MySQL-Server aufzubauen, jedoch hat dieser die Verbindung zurückgewiesen. Sie sollten Ihre Einstellungen für Host, Benutzername und Passwort in Ihrer config.inc.php überprüfen und sich vergewissern, dass diese den Informationen, welche Sie vom Administrator erhalten haben, entsprechen.';
$strAction = 'Aktion';
$strAddAutoIncrement = 'AUTO_INCREMENT-Wert hinzufügen';
$strAddClause = 'Füge %s hinzu';
$strAddConstraints = 'Constraints hinzufügen';
$strAddDeleteColumn = 'Spalten hinzufügen/entfernen';
$strAddDeleteRow = 'Zeilen hinzufügen/entfernen';
$strAddFields = '%s Felder hinzufügen';
$strAddHeaderComment = 'Individuelle Kommentare für den Kopfbereich (\\n erzeugt einen Zeilenumbruch)';
$strAddIntoComments = 'In Kommentarbereich einbeziehen';
$strAddNewField = 'Neue Felder hinzufügen';
$strAddPrivilegesOnDb = 'Rechte zu folgender Datenbank hinzufügen';
$strAddPrivilegesOnTbl = 'Rechte zu folgender Tabelle hinzufügen';
$strAddSearchConditions = 'Eigenes Filterkriterium (Argumente für den WHERE-Ausdruck):';
$strAddToIndex = '%s&nbsp;Spalten zum Index hinzufügen';
$strAddUser = 'Neuen Benutzer hinzufügen';
$strAddUserMessage = 'Der Benutzer wurde hinzugefügt.';
$strAdministration = 'Administration';
$strAffectedRows = ' Betroffene Datensätze: ';
$strAfter = 'Nach %s';
$strAfterInsertBack = 'zurück';
$strAfterInsertNewInsert = 'anschließend einen weiteren Datensatz einfügen';
$strAfterInsertNext = 'nächste Zeile bearbeiten';
$strAfterInsertSame = 'Zurück zu dieser Seite';
$strAll = 'Alle';
$strAllTableSameWidth = 'Sollen alle Tabellen mit der gleichen Breite angezeigt werden?';
$strAllowInterrupt = 'Abbruch wenn die maximale Scriptlaufzeit erreicht wird. Damit ist es möglich große Dateien zu importieren, allerdings kann es Transaktionen zerstören.';
$strAlterOrderBy = 'Tabelle sortieren nach';
$strAnIndex = 'Ein Index wurde in %s erzeugt';
$strAnalyzeTable = 'Analysiere Tabelle';
$strAnd = 'und';
$strAndThen = 'und dann';
$strAngularLinks = 'Winklige Verbindung';
$strAny = 'Jeder';
$strAnyHost = 'Jeder Host';
$strAnyUser = 'Jeder Benutzer';
$strApproximateCount = 'Es kann sich hierbei um Näherungswerte handeln. Bitte lesen Sie auch FAQ 3.11';
$strArabic = 'Arabisch';
$strArmenian = 'Armenisch';
$strAscending = 'aufsteigend';
$strAtBeginningOfTable = 'An den Anfang der Tabelle';
$strAtEndOfTable = 'An das Ende der Tabelle';
$strAttr = 'Attribute';
$strAutomaticLayout = 'Automatische Anordnung';

$strBack = 'Zurück';
$strBaltic = 'Baltisch';
$strBeginCut = 'AUSSCHNITTSANFANG';
$strBeginRaw = 'BEGINN DER AUSGABE';
$strBinLogEventType = 'Ereignistyp';
$strBinLogInfo = 'Information';
$strBinLogName = 'Protokoll';
$strBinLogOriginalPosition = 'Ursprungsposition';
$strBinLogPosition = 'Position';
$strBinLogServerId = 'Server-ID';
$strBinary = 'Binär';
$strBinaryDoNotEdit = 'Binär - nicht editierbar!';
$strBinaryLog = 'Binäres Protokoll';
$strBookmarkAllUsers = 'Diese gespeicherte SQL-Abfrage für jeden Benutzer verfügbar machen';
$strBookmarkCreated = 'Bookmark %s wurde gespeichert';
$strBookmarkDeleted = 'SQL-Abfrage wurde gelöscht.';
$strBookmarkLabel = 'Titel';
$strBookmarkQuery = 'Gespeicherte SQL-Abfrage';
$strBookmarkReplace = 'Überschreibe gleichnamiges Bookmark';
$strBookmarkThis = 'SQL-Abfrage speichern';
$strBookmarkView = 'Nur zeigen';
$strBrowse = 'Anzeigen';
$strBrowseDistinctValues = 'Zeige nur unterschiedliche Werte';
$strBrowseForeignValues = 'Fremdschlüsselwerte ansehen';
$strBufferPool = 'Puffer-Pool';
$strBufferPoolActivity = 'Aktivität des Puffer-Pools';
$strBufferPoolUsage = 'Auslastung des Puffer-Pools';
$strBufferReadMisses = 'Fehlgeschlagene Leseanfragen';
$strBufferReadMissesInPercent = 'Fehlgeschlagene Leseanfragen in %';
$strBufferWriteWaits = 'Schreibverzögerungen';
$strBufferWriteWaitsInPercent = 'Schreibverzögerungen in %';
$strBulgarian = 'Bulgarisch';
$strBusyPages = 'Ausgelastete Seiten';
$strBzError = 'phpMyAdmin konnte die Datei wegen eines Fehler in der Bz2-Erweiterung in dieser php-Version nicht komprimieren. Es wird deshalb empfohlen die Einstellung <code>$cfg[\'BZipDump\']</code> in Ihrer phpMyAdmin-Konfiguration auf <code>FALSE</code> zu setzen. Falls Sie die Bz2-Kompressionsfunktionen dennoch nutzen wollen, so sollten Sie eine neuere php-Version installieren. Bitte lesen Sie auch den php-Fehlerbericht %s für weitere Informationen.';
$strBzip = 'BZip-komprimiert';

$strCSV = 'CSV';
$strCalendar = 'Kalender';
$strCanNotLoadExportPlugins = 'Export-Plugins konnten nicht geladen werden, bitte Installation überprüfen!';
$strCanNotLoadImportPlugins = 'Die Import-Plugins konnten nicht geladen werden. Bitte überprüfen Sie Ihre phpMyAdmin-Installation.';
$strCancel = 'Abbrechen';
$strCannotLogin = 'Die Anmeldung am MySQL-Server ist fehlgeschlagen.';
$strCantLoad = 'Die Erweiterung [a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a] kann nicht geladen werden. Bitte überprüfen Sie Ihre PHP-Konfiguration.';
$strCantLoadRecodeIconv = 'Die PHP-Erweiterungen iconv und recode, welche für die Zeichensatzkonvertierung benötigt werden, konnten nicht geladen werden. Bitte ändern Sie Ihre PHP-Konfiguration und aktivieren Sie diese Erweiterungen oder deaktivieren Sie die Zeichensatzkonvertierung in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kann Index nicht in PRIMARY umbenennen!';
$strCantUseRecodeIconv = 'Weder die iconv- noch libiconv- oder recode_string-Funktion konnte verwandt werden, obwohl die benötigten php-Erweiterungen angeblich geladen wurden. Bitte überprüfen Sie Ihre PHP-Konfiguration.';
$strCardinality = 'Kardinalität';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = 'Mitteleuropäisch';
$strChange = 'Ändern';
$strChangeCopyMode = 'Erstelle einen neuen Benutzer mit identischen Rechten und ...';
$strChangeCopyModeCopy = ' ... behalte den alten bei.';
$strChangeCopyModeDeleteAndReload = ' ... lösche den alten und lade anschließend die Benutzertabellen neu.';
$strChangeCopyModeJustDelete = ' ... lösche den alten von den Benutzertabellen.';
$strChangeCopyModeRevoke = ' ... entziehe dem alten alle Rechte und lösche ihn anschließend.';
$strChangeCopyUser = 'Anmelde-Information ändern / Benutzer kopieren';
$strChangeDisplay = 'Anzuzeigende Spalte bestimmen';
$strChangePassword = 'Passwort ändern';
$strCharset = 'Zeichensatz';
$strCharsetOfFile = 'Zeichencodierung der Datei:';
$strCharsets = 'Zeichensätze';
$strCharsetsAndCollations = 'Zeichensätze und Kollationen';
$strCheckAll = 'Alle auswählen';
$strCheckOverhead = 'Tabellen m. Überhang ausw.';
$strCheckPrivs = 'Rechte überprüfen';
$strCheckPrivsLong = 'Überprüft die Rechte für die Datenbank &quot;%s&quot;.';
$strCheckTable = 'Überprüfe Tabelle';
$strChoosePage = 'Bitte wählen Sie die zu bearbeitende Seite.';
$strColComFeat = 'Darstellung von Spaltenkommentaren';
$strCollation = 'Kollation';
$strColumnNames = 'Spaltennamen';
$strColumnPrivileges = 'Spaltenspezifische Rechte';
$strCommand = 'Befehl';
$strComments = 'Kommentare';
$strCommentsForTable = 'TABELLENKOMMENTARE';
$strCompatibleHashing = 'MySQL&nbsp;4.0 kompatibel';
$strCompleteInserts = 'Vollständige \'INSERT\'s';
$strCompression = 'Kompression';
$strCompressionWillBeDetected = 'Dateikomprimierung wird automatisch erkannt bei: %s';
$strConfigDefaultFileError = 'Fehler beim Laden der Standard-Konfiguration von: "%1$s"';
$strConfigFileError = 'phpMyAdmin konnte Ihre Konfigurationsdatei nicht verarbeiten!<br />Dies kann passieren, wenn der PHP-Parser Syntaxfehler in ihr findet oder sie nicht existiert.<br />Bitte rufen Sie die Konfigurationsdatei über den unteren Link direkt auf und lesen Sie die PHP-Fehlermeldungen, die Sie erhalten. Meistens fehlt bloß irgendwo ein Anführungszeichen oder Semikolon.<br />Wenn Sie eine leere Seite erhalten, ist Ihre Konfigurationsdatei in Ordnung.';
$strConfigureTableCoord = 'Bitte konfigurieren Sie die Koordinaten für die Tabelle %s';
$strConnectionError = 'Die Verbindung konnte aufgrund von ungültigen Einstellungen nicht hergestellt werden.';
$strConnections = 'Verbindungen';
$strConstraintsForDumped = 'Constraints der exportierten Tabellen';
$strConstraintsForTable = 'Constraints der Tabelle';
$strControluserFailed = 'Verbindung für den controluser, wie er in Ihrer Konfiguration angegeben ist, ist fehlgeschlagen.';
$strCookiesRequired = 'Ab diesem Punkt müssen Cookies aktiviert sein.';
$strCopy = 'Kopieren';
$strCopyDatabaseOK = 'Datenbank %s wurde nach %s kopiert';
$strCopyTable = 'Kopiere Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strCopyTableOK = 'Tabelle %s wurde nach %s kopiert.';
$strCopyTableSameNames = 'Tabelle kann nicht mit gleichem Namen kopiert werden!';
$strCouldNotKill = 'phpMyAdmin konnte den Prozess %s nicht abbrechen. Er wurde wahrscheinlich bereits geschlossen.';
$strCreate = 'Anlegen';
$strCreateDatabaseBeforeCopying = 'Vor dem Kopieren CREATE DATABASE ausführen.';
$strCreateIndex = 'Index über&nbsp;%s&nbsp;Spalten anlegen';
$strCreateIndexTopic = 'Neuen Index anlegen';
$strCreateNewDatabase = 'Neue Datenbank anlegen';
$strCreateNewTable = 'Neue Tabelle in Datenbank %s erstellen';
$strCreatePage = 'Neue Seite erstellen';
$strCreatePdfFeat = 'Erzeugen von PDFs';
$strCreateRelation = 'Erzeuge Verknüpfung';
$strCreateTable  = 'Erzeuge Tabelle';
$strCreateUserDatabase = 'Datenbank für Benutzer';
$strCreateUserDatabaseName = 'Erstelle eine Datenbank mit gleichem Namen und gewähre alle Rechte';
$strCreateUserDatabaseNone = 'Keine';
$strCreateUserDatabaseWildcard = 'Gewähre alle Rechte auf Datenbanken die mit dem Benuterznamen beginnen (username\_%)';
$strCreationDates = 'Erzeugungs- / Aktualisierungs- / Überprüfungszeiten';
$strCriteria = 'Kriterium';
$strCroatian = 'Kroatisch';
$strCyrillic = 'Kyrillisch';
$strCzech = 'Tschechisch';
$strCzechSlovak = 'Tschechoslowakisch';

$strDBComment = 'Datenbankkommentar: ';
$strDBCopy = 'Datenbank kopieren nach';
$strDBRename = 'Datenbank umbenennen in';
$strDanish = 'Dänisch';
$strData = 'Daten';
$strDataDict = 'Strukturverzeichnis';
$strDataOnly = 'Nur Daten';
$strDataPages = 'Daten enthaltende Seiten';
$strDatabase = 'Datenbank';
$strDatabaseEmpty = 'Der Datenbankname ist leer!';
$strDatabaseExportOptions = 'Export-Optionen der Datenbank';
$strDatabaseHasBeenDropped = 'Datenbank %s wurde gelöscht.';
$strDatabases = 'Datenbanken';
$strDatabasesDropped = 'Es wurden %s Datenbanken gelöscht.';
$strDatabasesStats = 'Statistik über alle Datenbanken';
$strDatabasesStatsDisable = 'Datenbankstatistiken deaktivieren';
$strDatabasesStatsEnable = 'Datenbankstatistiken aktivieren';
$strDatabasesStatsHeavyTraffic = 'Bitte beachten Sie: Das Aktivieren der Datenbankstatistiken kann starken Traffic zwischen dem Web- und dem MySQL-Server zur Folge haben.';
$strDbIsEmpty = 'Die Datenbank scheint leer zu sein!';
$strDbPrivileges = 'Datenbankspezifische Rechte';
$strDbSpecific = 'datenbankspezifisch';
$strDefault = 'Standard';
$strDefaultEngine = 'Neue Tabellen werden standardmäßig im Format %s angelegt.';
$strDefaultValueHelp = 'Bitte geben Sie jeweils nur einen Standardwert ohne Escape- oder Anführungszeichen an.';
$strDefragment = 'Tabelle defragmentieren';
$strDelOld = 'Auf der aktuellen Seite bestehen Referenzen zu Tabellen, die nicht mehr existieren. Sollen diese Referenzen gelöscht werden?';
$strDelayedInserts = 'Verzögerten INSERT-Befehl verwenden';
$strDelete = 'Löschen';
$strDeleteAndFlush = 'Die Benutzer löschen und die Benutzertabellen anschließend neu laden.';
$strDeleteAndFlushDescr = 'Dies ist zwar der sauberste Weg, jedoch kann es einige Zeit in Anspruch nehmen, die Benutzertabellen neu zu laden.';
$strDeleteNoUsersSelected = 'Es wurden keine Benutzer zum Löschen ausgewählt!';
$strDeleteRelation = 'Verknüpfung löschen';
$strDeleted = 'Die Zeile wurde gelöscht.';
$strDeletedRows = 'Gelöschte Zeilen:';
$strDeleting = 'Lösche %s';
$strDelimiter = 'Begrenzer';
$strDescending = 'absteigend';
$strDescription = 'Beschreibung';
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'Das Anzeigefeld wird in rosa angezeigt. Um ein Feld anzeigen zu lassen oder nicht, klicken Sie auf das "Anzeige-Wahl-Bild", dann auf den passenden Feldnamen.';
$strDictionary = 'Wörterbuch';
$strDirectLinks = 'Direkte Verbindung';
$strDirtyPages = 'Inkonsistente Seiten (&quot;dirty&quot;)';
$strDisableForeignChecks = 'Fremdschlüsselüberprüfung deaktivieren';
$strDisabled = 'Deaktiviert';
$strDisplayFeat = 'Anzeige verknüpfter Daten';
$strDisplayOrder = 'Sortierung nach:';
$strDisplayPDF = 'PDF-Schema anzeigen';
$strDoAQuery = 'Suche über Beispielwerte ("query by example") (Platzhalter: "%")';
$strDoYouReally = 'Möchten Sie wirklich diese Abfrage ausführen ';
$strDocSQL = 'DocSQL';
$strDocu = 'Dokumentation';
$strDrop = 'Löschen';
$strDropDatabaseStrongWarning = 'Sie sind dabei eine komplette Datenbank zu ZERSTÖREN!';
$strDropUsersDb = 'Die gleichnamigen Datenbanken löschen.';
$strDumpSaved = 'Dump (Schema) wurde in Datei %s gespeichert.';
$strDumpXRows = 'Exportiere %s Datensätze ab Zeile %s.';
$strDumpingData = 'Daten für Tabelle';
$strDynamic = 'dynamisch';

$strEdit = 'Bearbeiten';
$strEditPDFPages = 'PDF-Seiten bearbeiten';
$strEditPrivileges = 'Rechte ändern';
$strEffective = 'Effektiv';
$strEmpty = 'Leeren';
$strEmptyResultSet = 'MySQL lieferte ein leeres Resultat zurück (d.&nbsp;h. null Zeilen).';
$strEnabled = 'Aktiviert';
$strEncloseInTransaction = 'Export in einer Transaktion zusammenfassen';
$strEnd = 'Ende';
$strEndCut = 'AUSSCHNITTSENDE';
$strEndRaw = 'ENDE DER AUSGABE';
$strEngineAvailable = '%s ist auf diesem MySQL-Server verfügbar.';
$strEngineDisabled = '%s wurde auf diesem MySQL-Server deaktiviert.';
$strEngineUnsupported = 'Dieser MySQL-Server unterstützt %s nicht.';
$strEngines = 'Formate';
$strEnglish = 'Englisch';
$strEnglishPrivileges = 'MySQL-Rechte werden auf Englisch angegeben.';
$strError = 'Fehler';
$strErrorInZipFile = 'Fehler im ZIP-Archiv:';
$strErrorRelationAdded = 'Fehler: Verknüpfung nicht hinzugefügt.';
$strErrorRelationExists = 'Fehler: Verknüpfung existiert bereits.';
$strErrorRenamingTable = 'Fehler beim umbenennen von Tabelle %1$s nach %2$s';
$strErrorSaveTable = 'Fehler beim speichern der Koordinaten für den Designer.';
$strEscapeWildcards = 'Platzhalter _ und % sollten mit einem \ escaped werden, um das gewünschte Sonderzeichen einzubinden';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estnisch';
$strEvent = 'Ereignis';
$strExcelEdition = 'Excel-Ausgabe';
$strExecuteBookmarked = 'Gespeicherte SQL-Anfrage ausführen';
$strExplain = 'SQL erklären';
$strExport = 'Exportieren';
$strExportImportToScale = 'Export/Import to scale';  //to translate
$strExportMustBeFile = 'Der gewählte Export-Typ kann nur als Datei exportiert werden!';
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
$strFileAlreadyExists = 'Die Datei %s besteht bereits auf dem Server. Bitte ändern Sie den Dateinamen oder wählen Sie die Überschreibungs-Option.';
$strFileCouldNotBeRead = 'Die Datei konnte nicht gelesen werden';
$strFileNameTemplate = 'Dateinamenskonvention';
$strFileNameTemplateDescription = 'Dieser Wert wird mit %1$sstrftime%2$s geparst, Sie können also Platzhalter für Datum und Uhrzeit verwenden. Darüber hinaus werden folgende Umformungen durchgeführt: %3$s. Der übrige Text bleibt unberührt.';
$strFileNameTemplateDescriptionDatabase = 'Datenbank-Name';
$strFileNameTemplateDescriptionServer = 'Server-Name';
$strFileNameTemplateDescriptionTable = 'Tabellen-Name';
$strFileNameTemplateRemember = 'Konvention merken';
$strFileToImport = 'Zu importierende Datei';
$strFiles = 'Dateien';
$strFixed = 'starr';
$strFlushPrivilegesNote = 'phpMyAdmin liest die Benutzerprofile direkt aus den entsprechenden MySQL-Tabellen aus. Der Inhalt dieser Tabellen kann sich von den Benutzerprofilen, die MySQL z.Zt. verwendet, unterscheiden, wenn manuelle Änderungen vorgenommen wurden. In diesem Fall sollten Sie  %sdie Benutzerprofile neu laden%s bevor Sie fortfahren.';
$strFlushQueryCache = 'Den Abfragencache leeren (FLUSH)';
$strFlushTable = 'Leeren des Tabellencaches ("FLUSH")';
$strFlushTables = 'Den Tabellencache leeren ("FLUSH")';
$strFontSize = 'Schriftgröße';
$strForeignKeyError = 'Fehler beim Erzeugen eines Fremdschlüssels für %1$s (überprüfen Sie die Datentypen)';
$strFormEmpty = 'Das Formular ist leer !';
$strFormat = 'Format';
$strFreePages = 'Unbenutzte Seiten';
$strFullText = 'vollständige Textfelder';
$strFunction = 'Funktion';
$strFunctions = 'Funktionen';

$strGenBy = 'Erstellt von';
$strGenTime = 'Erstellungszeit';
$strGeneralRelationFeat = 'Allgemeine Verknüpfungsfunktionen';
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
$strHasBeenAltered = 'wurde geändert.';
$strHasBeenCreated = 'wurde erzeugt.';
$strHaveToShow = 'Bitte wählen Sie mindestens eine anzuzeigende Spalte';
$strHebrew = 'Hebräisch';
$strHelp = 'Hilfe';
$strHexForBLOB = 'Benutze hexadecimal für BLOB';
$strHide = 'Verstecken';
$strHideShowAll = 'Zeige/Verstecke alles';
$strHideShowNoRelation = 'Zeige/Verstecke Tabellen ohne Verknüpfung';
$strHome = 'Home';
$strHomepageOfficial = ' Offizielle phpMyAdmin-Homepage ';
$strHost = 'Host';
$strHostEmpty = 'Es wurde kein Host angegeben!';
$strHungarian = 'Ungarisch';

$strIEUnsupported = 'Der Internet Explorer unterstützt diese Funktion nicht.';
$strIcelandic = 'Isländisch';
$strId = 'ID';
$strIdxFulltext = 'Volltext';
$strIgnore = 'Ignorieren';
$strIgnoreDuplicates = 'Ignoriere doppelte Zeilen';
$strIgnoreInserts = 'Fehlerübergehenden INSERT-Befehl verwenden';
$strImport = 'Importieren';
$strImportExportCoords = 'Import/Export Koordinaten für das PDF Schema';
$strImportFiles = 'Dateiimport';
$strImportFormat = 'Dateiformat';
$strImportSuccessfullyFinished = 'Der Import wurde erfolgreich abgeschlossen, %d Abfragen wurden ausgeführt.';
$strInUse = 'in Benutzung';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s wurde entfernt.';
$strIndexName = 'Indexname:';
$strIndexType = 'Indextyp:';
$strIndexWarningTable = 'Warnungen bei den Indizes der Tabelle `%s`';
$strIndexes = 'Indizes';
$strIndexesSeemEqual = 'Die folgenden Indizes scheinen identisch und einer von ihnen sollte entfernt werden:';
$strInnoDBAutoextendIncrement = 'Autoerweiterungs-Schrittgröße';
$strInnoDBAutoextendIncrementDesc = 'Die Größe, um die ein Tablespace erweitert wird, wenn er voll ist.';
$strInnoDBBufferPoolSize = 'Größe des Puffer-Pools';
$strInnoDBBufferPoolSizeDesc = 'Die Größe des Arbeitsspeicherpuffers, den InnoDB verwendet, um Daten und Indizes zwischenzuspeichern.';
$strInnoDBDataFilePath = 'Datendateien';
$strInnoDBDataHomeDir = 'Pfad für Datendateien';
$strInnoDBDataHomeDirDesc = 'Der Pfad des Verzeichnisses, unter welchem alle InnoDB-Datendateien abgelegt werden.';
$strInnoDBPages = 'Seiten';
$strInnoDBRelationAdded = 'InnoDB Verknüpfung hinzugefügt';
$strInnodbStat = 'InnoDB-Status';
$strInsecureMySQL = 'Ihre Konfigurationsdatei enthält Einstellungen (Benutzer &quot;root&quot; ohne Passwort), welche denen des MySQL-Standardbenutzers entsprechen. Wird Ihr MySQL-Server mit diesen Einstellungen betrieben, so können Unbefugte leicht von außen auf ihn zugreifen. Sie sollten diese Sicherheitslücke unbedingt schließen!';
$strInsert = 'Einfügen';
$strInsertAsNewRow = ' Als neuen Datensatz speichern ';
$strInsertedRowId = 'Letzte automatisch eingefügte ID:';
$strInsertedRows = 'Eingefügte Zeilen:';
$strInternalNotNecessary = '* Eine interne Beziehung ist nicht notwendig, wenn sie bereits im InnoDB-Format vorliegt.';
$strInternalRelationAdded = 'Interne Verknüpfung hinzugefügt';
$strInternalRelations = 'Interne Beziehungen';
$strInvalidAuthMethod = 'Ungültige Authentifikationsmethode:';
$strInvalidCSVFieldCount = 'Ungültige Anzahl an Feldern in Zeile %d.';
$strInvalidCSVFormat = 'Ungültiges Format in Zeile %d.';
$strInvalidCSVParameter = 'Ungültiger Parameter für CSV-Import: "%s"';
$strInvalidColumn = 'Ungültige Spalte angegeben (%s)!';
$strInvalidColumnCount = 'Die Spaltenanzahl muss größer als 0 sein.';
$strInvalidDatabase = 'ungültige Datenbank';
$strInvalidFieldAddCount = 'Sie müssen mindestens ein Feld hinzufügen.';
$strInvalidFieldCount = 'Die Tabelle muss mindestens ein Feld haben.';
$strInvalidLDIImport = 'Dieses Plugin unterstützt keine Kompression!';
$strInvalidRowNumber = '%d ist keine gültige Zeilennummer.';
$strInvalidServerHostname = 'Ungültiger Host-Name für Server %1$s. Bitte überprüfen Sie Ihre Konfiguration.';
$strInvalidServerIndex = 'Ungültige Server-Nummer: "%s"';
$strInvalidTableName = 'ungültiger Tabellenname';

$strJapanese = 'Japanisch';
$strJoins = 'Tabellenverknüpfungen (joins)';
$strJumpToDB = 'Zur Datenbank &quot;%s&quot; springen.';
$strJustDelete = 'Die Benutzer aus den Benutzertabellen löschen.';
$strJustDeleteDescr = 'Die &quot;gelöschten&quot; Benutzer könnten weiterhin wie gewohnt auf den Server zugreifen, bis die Benutzertabellen neu geladen werden.';

$strKeepPass = 'Passwort nicht verändert';
$strKeyCache = 'Schlüssel-Cache';
$strKeyname = 'Name';
$strKill = 'Beenden';
$strKnownExternalBug = 'Die Funktion  "%s" wird durch einen bekannten Fehler beeinträchtigt, siehe %s';
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
$strLatexIncludeCaption = 'Tabellenbeschriftung einfügen';
$strLatexLabel = 'Kennzeichen';
$strLatexStructure = 'Struktur der Tabelle __TABLE__';
$strLatvian = 'Lettisch';
$strLengthSet = 'Länge/Set';
$strLimitNumRows = 'Einträge pro Seite';
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
$strLongOperation = 'Diese Operation könnte einige Zeit beanspruchen. Trotzdem weitermachen?';

$strMIMETypesForTable = 'MIME TYPEN DER TABELLE';
$strMIME_MIMEtype = 'MIME-Typ';
$strMIME_available_mime = 'Verfügbare MIME-Typen';
$strMIME_available_transform = 'Verfügbare Umwandlungen';
$strMIME_description = 'Beschreibung';
$strMIME_nodescription = 'Für diese Umwandlung ist keine Beschreibung verfügbar.<br />Für weitere Informationen wenden Sie sich bitte an den Autoren der Funktion &quot;%s&quot;.';
$strMIME_transformation = 'Darstellungsumwandlung';
$strMIME_transformation_note = 'Um eine Liste aller verfügbaren MIME-Typen-Umwandlungen und deren Optionen zu sehen, klicken Sie bitte auf %sUmwandlungen%s';
$strMIME_transformation_options = 'Umwandlungsoptionen';
$strMIME_transformation_options_note = 'Bitte die Werte für die Umwandlungsoptionen in folgendem Format angeben: \'a\', 100, b,\'c\',... Wann immer Sie ein Backslash ("\") oder ein einfaches Anführungszeichen ("\'") verwenden, setzen Sie bitte ein Backslash vor das Zeichen. (z. B.: \'\\\\xyz\' oder \'a\\\'b\').';
$strMIME_without = 'Kursiv dargestellte MIME-Typen besitzen keine untergliederten Umwandlungen.';
$strMaxConnects = 'max. gleichzeitige Verbindungen';
$strMaximalQueryLength = 'Maximale Länge der erstellten Abfrage';
$strMaximumSize = 'Maximale Dateigröße: %s%s';
$strMbExtensionMissing = 'Die PHP-Erweiterung "mbstring" wurde nicht gefunden, trotzdem jedoch scheinen Sie einen Mehrbyte-Zeichensatz zu verwenden. Ohne besagte Erweiterung ist phpMyAdmin nicht in der Lage Zeichenketten zu trennen, was zu unerwarteten Ergebnissen führen kann.';
$strMbOverloadWarning = 'Sie haben die Option "mbstring.func_overload" in Ihrer PHP-Konfiguration aktiviert. Diese ist nicht kompatibel zu phpMyAdmin, weshalb es zu Problemen und Datenverlust kommen kann.';
$strModifications = 'Änderungen gespeichert.';
$strModify = 'Verändern';
$strModifyIndexTopic = 'Index modifizieren';
$strMoveMenu = 'Verschiebe Menü';
$strMoveTable = 'Verschiebe Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strMoveTableOK = 'Tabelle %s wurde nach %s verschoben.';
$strMoveTableSameNames = 'Tabelle kann nicht mit gleichem Namen verschoben werden!';
$strMultilingual = 'mehrsprachig';
$strMyISAMDataPointerSize = 'Größe des Datenzeigers';
$strMyISAMDataPointerSizeDesc = 'Standardmäßige Größe des Zeigers, welcher von CREATE TABLE für MyISAM-Tabellen verwendet wird, sofern die Option MAX_ROWS nicht angegeben wird.';
$strMyISAMMaxExtraSortFileSize = 'Maximum Größe temporärer Dateien bei Indexerstellung';
$strMyISAMMaxExtraSortFileSizeDesc = 'Wenn das Erzeugen der temporären Datei für schnelle Index-Erzeugung um diesen Wert größer sein würde als die Benutzung des Schlüssel-Caches, wird die Schlüssel-Cache-Methode bevorzugt.';
$strMyISAMMaxSortFileSize = 'Maximale Größe temporärer Dateien beim Sortieren';
$strMyISAMMaxSortFileSizeDesc = 'Die maximale Größe der temporären Datei, die MySQL benutzen darf, während es den Index erzeugt (während REPAIR, ALTER TABLE oder LOAD DATA INFILE).';
$strMyISAMRecoverOptions = 'Autoreparatur-Modus';
$strMyISAMRecoverOptionsDesc = 'Der Modus der automatischen Wiederherstellung abgestürzter MyISAM-Tabellen, wie über den Startparameter --myisam-recover angegeben.';
$strMyISAMRepairThreads = 'Reparaturprozess';
$strMyISAMRepairThreadsDesc = 'Wenn dieser Wert größer als 1 ist, werden MyISAM-Tabellenindizes während einer Reparatur oder eines Sortierungsprozesses parallel erstellt (jeder Index in einem separatem Prozess).';
$strMyISAMSortBufferSize = 'Größe des Sortierungspuffers';
$strMyISAMSortBufferSizeDesc = 'Der Puffer, der beim Sortieren des Indexes zugewiesen wird, wenn man ein REPAIR oder ausführt oder Indizes mit CREATE INDEX oder ALTER TABLE erzeugt.';
$strMySQLCharset = 'MySQL-Zeichensatz';
$strMySQLConnectionCollation = 'Zeichensatz / Kollation der MySQL-Verbindung';
$strMySQLSaid = 'MySQL meldet: ';
$strMySQLShowProcess = 'Prozesse anzeigen';
$strMySQLShowStatus = 'MySQL-Laufzeit-Informationen anzeigen';
$strMySQLShowVars = 'MySQL-System-Variablen anzeigen';
$strMysqlClientVersion = 'MySQL-Client-Version';
$strMysqlLibDiffersServerVersion = 'Die Version der verwendeten PHP MySQL Bibliothek %s unterscheidet sich von der Version des MySQL Servers %s. Dies kann zu unerwartetem Verhalten führen.';

$strName = 'Name';
$strNext = 'Nächste';
$strNo = 'Nein';
$strNoActivity = 'Da Sie seit mindestens %s Sekunden inaktiv waren, wurden Sie automatisch abgemeldet. Bitte melden Sie sich erneut an.';
$strNoDataReceived = 'Es wurden keinen Daten zum importieren empfangen. Entweder wurde keine Datei ausgewählt, oder die Dateigröße hat die maximal erlaubte Größe der PHP Konfiguration überschritten. Siehe FAQ 1.16.';
$strNoDatabases = 'Keine Datenbanken';
$strNoDatabasesSelected = 'Es wurden keine Datenbanken ausgewählt.';
$strNoDescription = 'keine Beschreibung';
$strNoDetailsForEngine = 'Für dieses Tabellenformat sind keine Statusinformationen verfügbar';
$strNoDropDatabases = 'Die Anweisung "DROP DATABASE" wurde deaktiviert.';
$strNoExplain = 'SQL-Erklärung umgehen';
$strNoFilesFoundInZip = 'Keine Dateien im ZIP-Archiv gefunden!';
$strNoFrames = 'phpMyAdmin arbeitet besser mit einem <b>Frame</b>-fähigen Browser.';
$strNoIndex = 'Kein Index definiert!';
$strNoIndexPartsDefined = 'Keine Indizes definiert.';
$strNoModification = 'Keine Änderung';
$strNoOptions = 'Für dieses Format sind keine Optionen vorhanden';
$strNoPassword = 'Kein Passwort';
$strNoPermission = 'Der Webserver hat keine Schreibrechte um die Datei %s zu speichern.';
$strNoPhp = 'ohne PHP-Code';
$strNoPrivileges = 'Keine Rechte';
$strNoRights = 'Sie haben nicht genug Rechte um fortzufahren!';
$strNoRowsSelected = 'Es wurden keine Datensätze ausgewählt.';
$strNoSpace = 'Zu wenig Speicherplatz um die Datei %s zu speichern.';
$strNoTablesFound = 'Es wurden keine Tabellen in der Datenbank gefunden.';
$strNoThemeSupport = 'Die Unterstützung für Oberflächendesigns ist deaktiviert. Bitte überprüfen Sie Ihre Konfiguration und / oder Ihre Designs im Verzeichnis %s.';
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
$strOverhead = 'Überhang';
$strOverwriteExisting = 'Bestehende Datei(en) überschreiben';

$strPDF = 'PDF';
$strPDFReportExplanation = '(Erstellt einen Report mit den Daten einer Tabelle)';
$strPDFReportTitle = 'Titel des Reports';
$strPHP40203 = 'Sie verwenden die PHP-Version 4.2.3, welche leider fehlerhaft im Umgang mit Mehrbyte-Zeichenketten (mbstring) ist. Dieser Fehler ist in der PHP-Datenbank als Bug-Report #19404 dokumentiert. Aus diesem Grund wird diese PHP-Version nicht für den Betrieb von phpMyAdmin empfohlen.';
$strPHPVersion = 'PHP-Version';
$strPageNumber = 'Seite:';
$strPagesToBeFlushed = 'Zurückzuschreibende Seiten';
$strPaperSize = 'Papiergröße';
$strPartialImport = 'Partieller Import';
$strPartialText = 'gekürzte Textfelder';
$strPassword = 'Passwort';
$strPasswordChanged = 'Das Passwort für %s wurde geändert.';
$strPasswordEmpty = 'Es wurde kein Passwort angegeben!';
$strPasswordHashing = 'Password-Verschlüsselung';
$strPasswordNotSame = 'Die eingegebenen Passwörter sind nicht identisch!';
$strPdfDbSchema = 'Schema der Datenbank "%s" - Seite %s';
$strPdfInvalidTblName = 'Die Tabelle "%s" existiert nicht!';
$strPdfNoTables = 'keine Tabellen';
$strPerHour = 'pro Stunde';
$strPerMinute = 'pro Minute';
$strPerSecond = 'pro Sekunde';
$strPersian = 'Persisch';
$strPhoneBook = 'Telefonbuch';
$strPhp = 'PHP-Code erzeugen';
$strPleaseSelectPrimaryOrUniqueKey = 'Bitte den PRIMARY KEY oder einen UNIQUE KEY wählen';
$strPmaDocumentation = 'phpMyAdmin-Dokumentation';
$strPmaUriError = 'Das <tt>$cfg[\'PmaAbsoluteUri\']</tt>-Verzeichnis MUSS in Ihrer Konfigurationsdatei angegeben werden!';
$strPmaWiki = 'phpMyAdmin Wiki';
$strPolish = 'Polnisch';
$strPortrait = 'Hochformat';
$strPos1 = 'Anfang';
$strPrevious = 'Vorherige';
$strPrimary = 'Primärschlüssel';
$strPrimaryKeyHasBeenDropped = 'Der Primärschlüssel wurde gelöscht.';
$strPrimaryKeyName = 'Der Name des Primärschlüssels muss PRIMARY lauten!';
$strPrimaryKeyWarning = 'Der Name des Primärschlüssels darf <b>nur</b> "PRIMARY" lauten.';
$strPrint = 'Drucken';
$strPrintView = 'Druckansicht';
$strPrintViewFull = 'Druckansicht (vollständige Textfelder)';
$strPrivDescAllPrivileges = 'Enthält alle Rechte bis auf GRANT.';
$strPrivDescAlter = 'Erlaubt das Verändern der Struktur bestehender Tabellen.';
$strPrivDescAlterRoutine = 'Erlaubt das Verändern und Löschen von Routinen.';
$strPrivDescCreateDb = 'Erlaubt das Erstellen neuer Datenbanken und Tabellen.';
$strPrivDescCreateRoutine = 'Erlaubt das Erstellen von gespeicherten Routinen.';
$strPrivDescCreateTbl = 'Erlaubt das Erstellen neuer Tabellen.';
$strPrivDescCreateTmpTable = 'Erlaubt das Erstellen temporärer Tabellen.';
$strPrivDescCreateUser = 'Erlaubt das Erstellen, Löschen und Umbenennen von Benutzern.';
$strPrivDescCreateView = 'Erlaubt das Erstellen von Views.';
$strPrivDescDelete = 'Erlaubt das Löschen von Daten.';
$strPrivDescDropDb = 'Erlaubt das Löschen ganzer Datenbanken und Tabellen.';
$strPrivDescDropTbl = 'Erlaubt das Löschen ganzer Tabellen.';
$strPrivDescExecute = 'Erlaubt das Ausführen gespeicherter Prozeduren; Hat keinen Effekt in dieser MySQL-Version.';
$strPrivDescExecute5 = 'Erlaubt das Ausführen von Routinen.';
$strPrivDescFile = 'Erlaubt das Importieren von Daten aus und das Exportieren in externe Dateien.';
$strPrivDescGrant = 'Erlaubt das Hinzufügen von Benutzern und Rechten ohne den die Benutzerprofile neu laden zu müssen.';
$strPrivDescIndex = 'Erlaubt das Erstellen und Löschen von Indizes.';
$strPrivDescInsert = 'Erlaubt das Hinzufügen und Ersetzen von Daten.';
$strPrivDescLockTables = 'Erlaubt die Sperrung bestimmter Tabellen.';
$strPrivDescMaxConnections = 'Begrenzt die Anzahl neuer Verbindungen, welche ein Benutzer pro Stunde aufbauen darf.';
$strPrivDescMaxQuestions = 'Begrenzt die Anzahl der Abfragen, welche ein Benutzer pro Stunde senden darf.';
$strPrivDescMaxUpdates = 'Begrenzt die Anzahl der Veränderungen, welche ein Benutzer pro Stunde an allen Datenbanken und Tabellen vornehmen darf.';
$strPrivDescMaxUserConnections = 'Beschränkt die Anzahl der gleichzeitigen Verbindungen für diesen Benutzer.';
$strPrivDescProcess3 = 'Erlaubt das Beenden fremder Prozesse.';
$strPrivDescProcess4 = 'Erlaubt das Anzeigen der vollen Abfragen in der Prozessliste.';
$strPrivDescReferences = 'Hat keinen Effekt in dieser MySQL-Version.';
$strPrivDescReload = 'Erlaubt das erneute Laden von Servereinstellungen und das Leeren der Zwischenspeicher zur Laufzeit.';
$strPrivDescReplClient = 'Erlaubt dem Benutzer zu fragen, wo sich die Master- bzw. Slave-Systeme befinden';
$strPrivDescReplSlave = 'Wird für die Replication-Slave-Systeme benötigt.';
$strPrivDescSelect = 'Erlaubt das Auslesen von Daten.';
$strPrivDescShowDb = 'Gewährt Zugang zur vollständigen Datenbankliste.';
$strPrivDescShowView = 'Erlaubt das Ausführen von \'SHOW CREATE VIEW\'.';
$strPrivDescShutdown = 'Erlaubt das Beenden des Servers.';
$strPrivDescSuper = 'Erlaubt eine Verbindung, selbst wenn die maximale Anzahl an Verbindungen bereits erreicht ist; Wird für viele administrative Operationen, wie das Setzen globaler Variables oder das Beenden fremder Prozesse, vorausgesetzt.';
$strPrivDescUpdate = 'Erlaubt das Verändern von gespeicherten Daten.';
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
$strQueryResultsOperations = 'Operationen für das Abfrageergebnis';
$strQuerySQLHistory = 'SQL-Verlaufsprotokoll';
$strQueryStatistics = '<b>Abfragestatistik</b>: Seit seinem Start wurden %s Abfragen an diesen MySQL-Server gesandt.';
$strQueryTime = 'die Abfrage dauerte %01.4f sek.';
$strQueryType = 'Abfrageart';
$strQueryWindowLock = 'Abfrage vor Änderungen außerhalb des Fensters schützen';

$strReType = 'Wiederholen';
$strReadRequests = 'Leseanfragen';
$strReceived = 'Empfangen';
$strRecommended = 'empfohlen';
$strRecords = 'Einträge';
$strReferentialIntegrity = 'Prüfe referentielle Integrität:';
$strRefresh = 'Aktualisieren';
$strRelationDeleted = 'Verknüpfung gelöscht';
$strRelationNotWorking = 'Die zusätzlichen Funktionen für verknüpfte Tabellen wurden automatisch deaktiviert. Klicken Sie %shier%s um herauszufinden warum.';
$strRelationView = 'Beziehungsübersicht';
$strRelationalSchema = 'Beziehungsschema';
$strRelations = 'Tabellenverknüpfungen';
$strRelationsForTable = 'RELATIONEN DER TABELLE';
$strReload = 'Neuladen';
$strReloadPrivileges = 'Die Rechte neu laden';
$strReloadingThePrivileges = 'Lade die Benutzertabellen neu';
$strRemoveSelectedUsers = 'Die ausgewählten Benutzer löschen';
$strRenameDatabaseOK = 'Datenbank %s wurde umbenannt zu %s';
$strRenameTable = 'Tabelle umbenennen in';
$strRenameTableOK = 'Tabelle %s wurde umbenannt in %s.';
$strRepairTable = 'Repariere Tabelle';
$strReplaceNULLBy = 'Ersetze NULL durch';
$strReplaceTable = 'Tabelleninhalt ersetzen';
$strReplication = 'Replikation';
$strReset = 'Zurücksetzen';
$strResourceLimits = 'Ressourcenbeschränkungen';
$strRestartInsertion = 'Einfügen mit %s Zeilen neu starten';
$strRevoke = 'Entfernen';
$strRevokeAndDelete = 'Den Benutzern alle Rechte entziehen und sie anschließend aus den Benutzertabellen löschen.';
$strRevokeAndDeleteDescr = 'Die Benutzer würden weiterhin das USAGE-Recht behalten, bis die Benutzertabellen neu geladen werden.';
$strRevokeMessage = 'Sie haben die Rechte für %s entfernt.';
$strRomanian = 'Rumänisch';
$strRoutineReturnType = 'Rückgabe-Typ';
$strRoutines = 'Routinen';
$strRowLength = 'Zeilenlänge';
$strRowSize = 'Zeilengröße';
$strRows = 'Zeilen';
$strRowsFrom = 'Datensätze, beginnend ab';
$strRowsModeFlippedHorizontal = 'horizontal (gedrehte Bezeichner)';
$strRowsModeHorizontal = 'untereinander';
$strRowsModeOptions = '%s angeordnet und wiederhole die Kopfzeilen nach %s Datensätzen.';
$strRowsModeVertical = 'nebeneinander';
$strRowsStatistic = 'Zeilenstatistik';
$strRunQuery = 'SQL-Befehl ausführen';
$strRunSQLQuery = 'SQL-Befehl(e) in Datenbank %s ausführen';
$strRunSQLQueryOnServer = 'SQL-Befehl(e) auf Server %s ausführen';
$strRunning = 'auf %s';
$strRussian = 'Russisch';

$strSQL = 'SQL';
$strSQLCompatibility = 'SQL-Kompatibilitätsmodus';
$strSQLExportType = 'Exporttyp';
$strSQLParserBugMessage = 'Möglicherweise haben Sie einen Bug im SQL-Parser entdeckt. Bitte überprüfen Sie Ihre Abfrage genaustens, insbesondere auf falsch gesetzte oder nicht geschlossene Anführungszeichen. Eine weitere Ursache könnte darin liegen, dass Sie versuchen eine Datei mit binären Daten, welche nicht von Anführungszeichen eingeschlossen sind, hochzuladen. Sie können alternativ versuchen Ihre Abfrage über das MySQL-Kommandozeileninterface zu senden. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen. Falls Sie weiterhin Probleme haben sollten oder der Parser dort versagt, wo die Kommandozeile erfolgreich ist, so reduzieren Sie bitte Ihre Abfrage auf den Befehl, welcher die Probleme verursacht, und senden Sie uns einen Fehlerbericht mit den Datenausschnitt, den Sie weiter unten auf dieser Seite finden.:';
$strSQLParserUserError = 'Es scheint einen Fehler in Ihrer MySQL-Abfrage zu geben. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen.';
$strSQLQuery = 'SQL-Befehl';
$strSQLResult = 'SQL-Abfrageergebnis';
$strSQPBugInvalidIdentifer = 'Ungültiger Bezeichner';
$strSQPBugUnclosedQuote = 'Nicht geschlossene Anführungszeichen';
$strSQPBugUnknownPunctuation = 'Unbekannte Interpunktion';
$strSave = 'Speichern';
$strSaveOnServer = 'Datei auf dem Server in Verzeichnis %s speichern';
$strSavePosition = 'Speichere Position';
$strScaleFactorSmall = 'Der Skalierungsfaktor ist zu klein, sodass das Schema nicht auf eine Seite passt!';
$strSearch = 'Suche';
$strSearchFormTitle = 'Durchsuche die Datenbank';
$strSearchInTables = 'In der / den Tabelle(n):';
$strSearchNeedle = 'Zu suchende Wörter oder Werte (Platzhalter: "%"):';
$strSearchOption1 = 'mindestens eines der Wörter';
$strSearchOption2 = 'alle Wörter';
$strSearchOption3 = 'genau diese Zeichenkette';
$strSearchOption4 = 'als regulären Ausdruck';
$strSearchResultsFor = 'Suchergebnisse für "<i>%s</i>" %s:';
$strSearchType = 'Finde:';
$strSecretRequired = 'Ab sofort muss ein geheimes Passwort zur Verschlüsselung in der Konfigurationsdatei gesetzt werden (blowfish_secret).';
$strSelectADb = 'Bitte Datenbank auswählen';
$strSelectAll = 'Alle auswählen';
$strSelectBinaryLog = 'Binäres Protokoll zur Anzeige auswählen';
$strSelectFields = 'Felder auswählen (min. eines):';
$strSelectForeignKey = 'Wähle Fremdschlüssel';
$strSelectNumRows = 'in der Abfrage';
$strSelectReferencedKey = 'Wählen Sie den referenzierten Schlüssel';
$strSelectTables = 'Tabellenauswahl';
$strSend = 'Senden';
$strSent = 'Gesendet';
$strServer = 'Server';
$strServerChoice = 'Server Auswählen';
$strServerNotResponding = 'Der Server antwortet nicht.';
$strServerStatus = 'Laufzeit-Informationen';
$strServerStatusDelayedInserts = 'Verzögertes Einfügen (delayed inserts)';
$strServerStatusUptime = 'Dieser MySQL-Server läuft bereits %s. Er wurde am %s gestartet.';
$strServerTabVariables = 'Variablen';
$strServerTrafficNotes = '<b>Servertraffic</b>: In diesen Tabellen wird der Netzwerkverkehr dieses MySQL-Servers seit dessen Start aufgeführt.';
$strServerVars = 'Servervariablen und -einstellungen';
$strServerVersion = 'Server Version';
$strServers = 'Server';
$strSessionStartupErrorGeneral = 'Die Sitzung konnte nicht ohne Fehler gestartet werden, schauen Sie bitte in das Fehlerprokoll von PHP und/oder Ihres Webservers und konfigurieren Sie PHP entsprechend (session.save_path, Schreibrechte).';
$strSessionValue = 'Wert für diese Sitzung';
$strSetEnumVal = 'Wenn das Feld vom Typ \'ENUM\' oder \'SET\' ist, benutzen Sie bitte das Format: \'a\',\'b\',\'c\',... Wann immer Sie ein Backslash ("\") oder ein einfaches Anführungszeichen ("\'") verwenden, setzen Sie bitte ein Backslash vor das Zeichen. (z. B.: \'\\\\xyz\' oder \'a\\\'b\').';
$strShow = 'Zeige';
$strShowAll = 'Alles anzeigen';
$strShowColor = 'mehrfarbig';
$strShowDatadictAs = 'Format des Strukturverzeichnisses';
$strShowFullQueries = 'Zeige die SQL-Abfragen vollständig an';
$strShowGrid = 'Gitterlinien anzeigen';
$strShowHideLeftMenu = 'Zeige/Verstecke linkes Menü';
$strShowOpenTables = 'Zeige alle offenen Tabellen';
$strShowPHPInfo = 'PHP-Informationen anzeigen';
$strShowSlaveHosts = 'Zeige alle Slave-Rechner';
$strShowSlaveStatus = 'Zeige den Slave-Status';
$strShowStatusBinlog_cache_disk_useDescr = 'Anzahl der Transaktionen die den Binarylog-Cache verwendet, aber die Größe des Binarylog-Caches (binlog_cache_size) überschritten und eine temporäre Datei verwendet haben um die Statements der Transaktion zu speichern.';
$strShowStatusBinlog_cache_useDescr = 'Anzahl der Transaktionen, die den temporären Binarylog-Cache verwendet haben.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Anzahl der (implizit) auf der Platte erzeugten temporären Tabellen bei der Ausführung von Statements. Wenn Created_tmp_disk_tables hoch ist, sollten Sie eventuell die Variable tmp_table_size herauf setzen, damit temporäre Tabellen im Speicher erzeugt werden statt auf der Festplatte.';
$strShowStatusCreated_tmp_filesDescr = 'Anzahl der temporären Dateien, die mysqld erzeugt hat.';
$strShowStatusCreated_tmp_tablesDescr = 'Anzahl der (implizit) im Arbeitsspeicher erzeugten temporären Tabellen bei der Ausführung von Statements.';
$strShowStatusDelayed_errorsDescr = 'Anzahl der Zeilen, die mit INSERT DELAYED geschrieben wurden, und bei denen ein Fehler auftrat (z. B. duplicate key).';
$strShowStatusDelayed_insert_threadsDescr = 'Anzahl der verzögerten Insert-Handler-Prozesse in Benutzung. Jede einzelne Tabelle mit verzögerten Inserts bekommt einen eigenen Prozess.';
$strShowStatusDelayed_writesDescr = 'Anzahl der Zeilen, die mit INSERT DELAYED geschrieben wurden.';
$strShowStatusFlush_commandsDescr  = 'Anzahl der ausgeführten FLUSH-Befehle.';
$strShowStatusHandler_commitDescr = 'Anzahl der Anfragen, ein COMMIT auszuführen.';
$strShowStatusHandler_deleteDescr = 'Anzahl der Zeilen, die aus Tabellen gelöscht wurden.';
$strShowStatusHandler_discoverDescr = 'Anzahl der gesuchten und gefundenen (discovered) Tabellen. Der MySQL-Server kann die NDB-Cluster-Storage-Engine fragen, ob sie eine bestimmte Tabelle kennt. Dieser Vorgang wird &quot;discovery&quot; genannt.';
$strShowStatusHandler_read_firstDescr = 'Wie oft der erste Eintrag aus einem Index gelesen wurde. Ein hoher Wert hier deutet darauf hin, dass der Server viele komplette Index-Scans macht (zum Beispiel SELECT spalte1 FROM foo, unter der Annahme, dass spalte1 indiziert ist).';
$strShowStatusHandler_read_keyDescr = 'Anzahl der Anfragen, eine Zeile basierend auf einem Schlüssel zu lesen. Wenn dieser Wert hoch ist, ist das ein gutes Indiz dafür, dass Ihre Anfragen und Tabellen korrekt indiziert sind.';
$strShowStatusHandler_read_nextDescr = 'Anzahl der Anfragen, die nächste Zeile in der Reihenfolge des Schlüssels zu lesen. Dieser Wert wird herauf gezählt, wenn Sie eine Index-Spalte mit einer Bereichsbeschränkung (Limit) abfragen. Er wird ebenfalls herauf gezählt, wenn Sie einen Index-Scan durchführen.';
$strShowStatusHandler_read_prevDescr = 'Anzahl der Anfragen, die vorhergehende Zeile in der Reihenfolge des Schlüssels zu lesen. Diese Lese-Methode ist hauptsächlich zur Optimierung von ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Anzahl der Anfragen, eine Zeile basierend auf einer festen Position zu lesen. Dieser Wert wird hoch sein, wenn Sie viele Anfragen ausführen, die erfordern, dass das Ergebnis sortiert wird. Wenn Handler_read_rnd hoch ist, haben Sie wahrscheinlich viele Anfragen, die MySQL zwingen, ganze Tabellen zu scannen, oder Sie haben Joins, die Schlüssel nicht richtig benutzen.';
$strShowStatusHandler_read_rnd_nextDescr = 'Anzahl der Anfragen, die nächste Zeile in der Daten-Datei zu lesen. Dieser Wert wird hoch sein, wenn Sie viele Tabellen-Scans durchführen. Im Allgemeinen weist das darauf hin, dass Ihre Tabellen nicht korrekt indiziert sind, oder dass Ihre Anfragen nicht so geschrieben sind, dass Sie Vorteile aus den Indexen ziehen, die Sie haben.';
$strShowStatusHandler_rollbackDescr = 'Anzahl der Anfragen, ein ROLLBACK auszuführen.';
$strShowStatusHandler_updateDescr = 'Anzahl der Anfragen, eine Zeile in einer Tabelle zu aktualisieren.';
$strShowStatusHandler_writeDescr = 'Anzahl der Anfragen, eine Zeile in eine Tabelle einzufügen.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Anzahl der Seiten, die Daten enthalten (ob &quot;dirty&quot; oder nicht).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Anzahl der als &quot;dirty&quot; markierten Seiten.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Anzahl der Seiten im Puffer-Pool, die zurückgeschrieben werden müssen.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Anzahl der unbenutzten Seiten.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Anzahl der belegten Seiten. Diese Seiten werden gerade gelesen oder beschrieben oder können aus einem anderen Grund nicht zurückgeschrieben oder entfernt werden können.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Anzahl der durch administrativen Overhead, wie z. B. Zeilensperren oder den adaptiven Hash-Index ausgelasteten Seiten. Dieser Wert errechnet sich auch aus Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Die Größe des Puffer-Pools in Seiten.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Anzahl "random" read-aheads durch InnoDB. Dies geschieht wenn eine Abfrage einen großen Teil einer Tabelle durchsucht aber in zufälliger Reihenfolge.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Anzahl sequentieller read-aheads durch InnoDB. Dies geschieht wenn InnoDB eine Tabelle komplett sequentiell durchsucht.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Anzahl angeforderter Lesevorgängen durch InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Anzahl an Lesevorgängen die InnoDB nicht aus dem Zwischenspeicher bedienen konnte und deshalb einen Einzel-Seiten-Lesevorgang starten musste.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalerweise geschehen Schreibvorgänge im InnoDB Zwischenspeicher im Hintergrund. Abber wenn es nötig ist eine Seite zu lesen oder zu erstellen und es ist keine saubere Seite verfügbar dann ist es notwendig darauf zu warten das Seiten weggeschrieben werden. Dieser Wert gibt wieder wie oft das geschehen ist. Wenn die Zwischenspeicher-Größe korrekt eingestellt ist sollte dieser Wert klein sein.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Anzahl der Schreibvorgänge im InnoDB Zwischenspeicher.';
$strShowStatusInnodb_data_fsyncsDescr = 'Bisher ausgeführte fsync()-Operationen.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Momentan anstehende fsync()-Operationen.';
$strShowStatusInnodb_data_pending_readsDescr = 'Momentan anstehende Lesezugriffe.';
$strShowStatusInnodb_data_pending_writesDescr = 'Momentan anstehende Schreizugriffe.';
$strShowStatusInnodb_data_readDescr = 'Wieviel Daten bisher gelesen wurden, in Byte.';
$strShowStatusInnodb_data_readsDescr = 'Wie oft Daten gelesen wurden.';
$strShowStatusInnodb_data_writesDescr = 'Wie oft Daten geschrieben wurden.';
$strShowStatusInnodb_data_writtenDescr = 'Wieviel Daten bisher geschrieben wurden, in Byte.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Anzahl der ausgeführten "doublewrite" Schreibzugriffe und die Anzahl der Seiten die dafür geschrieben wurden.';
$strShowStatusInnodb_dblwr_writesDescr = 'Anzahl der ausgeführten "doublewrite" Schreibzugriffe und die Anzahl der Seiten die dafür geschrieben wurden.';
$strShowStatusInnodb_log_waitsDescr = 'Wie oft gewartet werden musste weil der Protokoll-Zwischenspeicher zu klein war und deshalb gewartet wurde das er geleert wird.';
$strShowStatusInnodb_log_write_requestsDescr = 'Anzahl der Schreibzugriffe für die Protokoll-Datei.';
$strShowStatusInnodb_log_writesDescr = 'Anzahl der tatsächlichen Schreibvorgänge der Protokoll-Datei.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Getätigte fsyncs Schreibzugriffe für die Protokoll-Datei.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Anstehende "fsyncs" für die Protokoll-Datei.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Anstehende Schreibzugriffe für die Protokoll-Datei.';
$strShowStatusInnodb_os_log_writtenDescr = 'Anzahl an Byte die in die Protokoll-Datei geschrieben wurden.';
$strShowStatusInnodb_page_sizeDescr = 'Die fest kompilierte InnnoDB Seitengröße (Standard 16 KiB). Viele Werte werden in Seiten gezählt; die Seitengröße erlaubt es diese einfach in Byte umzurechnen.';
$strShowStatusInnodb_pages_createdDescr = 'Anzahl erstellter Seiten.';
$strShowStatusInnodb_pages_readDescr = 'Anzahl gelesener Seiten.';
$strShowStatusInnodb_pages_writtenDescr = 'Anzahl geschriebener Seiten.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Momentan anstehende Zeilen-Sperren.';
$strShowStatusInnodb_row_lock_timeDescr = 'Summe aller Wartezeiten um Zeilen-Sperren zu bekommen, in Millisekunden.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Durchschnittliche Wartezeite um eine Zeilen-Sperre zu bekommen, in Millisekunden.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Längste Wartezeite um eine Zeilen-Sperre zu bekommen, in Millisekunden.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Wie oft auf ein Zeilen-Sperre gewartet werden musste.';
$strShowStatusInnodb_rows_deletedDescr = 'Anzahl gelöschter Zeilen aller InnoDB Tabellen.';
$strShowStatusInnodb_rows_insertedDescr = 'Anzahl der eingefügten Zeilen in alle InnoDB Tabellen.';
$strShowStatusInnodb_rows_readDescr = 'Anzahl der Zeilen, die aus InnoDB-Tabellen gelesen wurden.';
$strShowStatusInnodb_rows_updatedDescr = 'Anzahl der Zeilen, die in InnoDB-Tabellen aktualisiert wurden.';
$strShowStatusKey_blocks_not_flushedDescr = 'Schlüssel-Blöcke im Schlüssel-Cache, die verändert wurden, aber noch nicht auf die Platte zurück geschrieben (flush) wurden; auch bekannt als Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Die Anzahl der unbenutzten Schlüssel-Blöcke im Schlüssel-Cache. Dieser Wert kann dazu dienen die Auslastung des Schlüssel-Cache zu bestimmen.';
$strShowStatusKey_blocks_usedDescr = 'Die Anzahl der maximal gleichzeitig benutzten Blocks im Schlüssel-Cache.';
$strShowStatusKey_read_requestsDescr = 'Die Anzahl der Anfragen, einen Schlüssel-Block aus dem Cache zu lesen.';
$strShowStatusKey_readsDescr = 'Die Anzahl physikalischer Lesezugriffe eines Schlüssel-Blocks von der Platte. Wenn key_reads hoch ist, ist Ihr key_cache wahrscheinlich zu klein. Die Cache-Zugriffsrate kann mit key_reads / key_read_requests berechnet werden.';
$strShowStatusKey_write_requestsDescr = 'Die Anzahl der Anfragen, einen Schlüssel-Block in den Cache zu schreiben.';
$strShowStatusKey_writesDescr = 'Die Anzahl physikalischer Schreibvorgänge eines Schlüssel-Blocks auf Platte.';
$strShowStatusLast_query_costDescr = 'Die Kosten für die zuletzt verarbeitete Abfrage wie vom Abfrage-Optimierer berechnet. Nützlich um verschiedene Formulierungen für eine Abfrage zu vergleichen. Der Wert 0 besagt das bisher keine Abfrage übersetzt wurde.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Anzahl der Zeilen, die in INSERT-DELAYED-Warteschleifen darauf warten, geschrieben zu werden.';
$strShowStatusOpen_filesDescr = 'Anzahl der geöffneten Dateien.';
$strShowStatusOpen_streamsDescr = 'Anzahl der geöffneten Streams (hauptsächlich zum Protokolieren benutzt).';
$strShowStatusOpen_tablesDescr = 'Anzahl der geöffneten Tabellen.';
$strShowStatusOpened_tablesDescr = 'Anzahl der Tabellen, die geöffnet wurden. Wenn Opened_tables hoch ist, ist Ihre table_cache-Variable wahrscheinlich zu niedrig.';
$strShowStatusQcache_free_blocksDescr = 'Freie Speicherblöcke im Abfragen-Cache.';
$strShowStatusQcache_free_memoryDescr = 'Freier Speicher im Abfragen-Cache.';
$strShowStatusQcache_hitsDescr = 'Abfrage-Cache-Zugriffsrate.';
$strShowStatusQcache_insertsDescr = 'Die Anzahl der Abfragen die dem Cache hinzugefügt wurden.';
$strShowStatusQcache_lowmem_prunesDescr = 'Die Anzahl der Abfragen die aus dem Cache entfernt wurden, um Speicher für neue Abfragen frei zu geben. Dieser Wert kann helfen die Abfrage-Cache-Größe zu optimieren. Der Abfrage-Cache arbeitet nach der LRU-Strategie (least recently used), d.&nbsp;h. es wird stets die Abfrage gelöscht, die am längsten unbenutzt im Cache lag.';
$strShowStatusQcache_not_cachedDescr = 'Die Anzahl der nicht im Cache eingetragenen Abfragen (nicht möglich, oder aufgrund der query_cache_type Einstellung).';
$strShowStatusQcache_queries_in_cacheDescr = 'Die Anzahl der Abfragen im Cache.';
$strShowStatusQcache_total_blocksDescr = 'Die Anzahl aller Speicherblöcke im Abfrage-Cache.';
$strShowStatusReset = 'Zurücksetzen';
$strShowStatusRpl_statusDescr = 'Der Status der ausfallsicheren Replikation.';
$strShowStatusSelect_full_joinDescr = 'Anzahl der Joins ohne Schlüssel. Wenn dieser Wert nicht 0 ist sollten die Indizes der Tabellen sorgfältig überprüft werden.';
$strShowStatusSelect_full_range_joinDescr = 'Anzahl der Joins, bei denen eine Bereichssuche auf die Referenztabelle statt fand.';
$strShowStatusSelect_rangeDescr = 'Anzahl der Joins, bei denen Bereiche auf die erste Tabelle benutzt wurden. (Es ist normalerweise unkritisch, wenn dieser Wert hoch ist.)';
$strShowStatusSelect_range_checkDescr = 'Anzahl der Joins ohne Schlüssel, bei denen nach jeder Zeile auf Schlüsselbenutzung geprüft wurde. Wenn dieser Wert nicht 0 ist sollten die Indizes der Tabellen sorgfältig überprüft werden.';
$strShowStatusSelect_scanDescr = 'Anzahl der Joins, bei denen die erste Tabelle gescannt wurde.';
$strShowStatusSlave_open_temp_tablesDescr = 'Anzahl der temporären Tabellen, die momentan vom Slave-Prozess geöffnet sind.';
$strShowStatusSlave_retried_transactionsDescr = 'Gesamtzahl (seit Start des Servers) der vom Replikations-Slave-SQL-Thread wiederversuchten Transaktionen.';
$strShowStatusSlave_runningDescr = 'Dieser Wert steht auf ON wenn dieser Server ein Slave ist und mit dem Master verbunden ist.';
$strShowStatusSlow_launch_threadsDescr = 'Anzahl der Prozesse, die länger als slow_launch_time  brauchten, um sich zu verbinden.';
$strShowStatusSlow_queriesDescr = 'Anzahl der Anfragen, die länger als long_query_time benötigten.';
$strShowStatusSort_merge_passesDescr = 'Anzahl der Verschmelzungen (Merge), die von einem Sortiervorgang benötigt wurden. Wenn dieser Wert hoch ist, sollten Sie in Betracht ziehen, sort_buffer herauf zu setzen.';
$strShowStatusSort_rangeDescr = 'Anzahl der Sortiervorgänge, die mit Bereichen durchgeführt wurden.';
$strShowStatusSort_rowsDescr = 'Anzahl der sortierten Zeilen.';
$strShowStatusSort_scanDescr = 'Anzahl der Sortiervorgänge, die durchgeführt wurden, indem die Tabelle gescannt wurde.';
$strShowStatusTable_locks_immediateDescr = 'Wie oft eine Tabellensperre sofort erlangt wurde.';
$strShowStatusTable_locks_waitedDescr = 'Wie oft eine Tabellensperre nicht sofort erlangt werden konnte und gewartet werden musste. Wenn dieser Wert hoch ist und Sie Performance-Probleme haben, sollten Sie zunächst Ihre Anfragen optimieren und dann entweder Ihre Tabelle(n) zerteilen oder Replikation benutzen.';
$strShowStatusThreads_cachedDescr = 'Anzahl der Prozesse im Prozess-Cache. Die Cache-Zugriffsrate kann mit Threads_created / Connections berechnet werden. Wenn dieser Wert rot ist, sollte der thread_cache_size erhöht werden.';
$strShowStatusThreads_connectedDescr = 'Anzahl der momentan offenen Verbindungen.';
$strShowStatusThreads_createdDescr = 'Anzahl der Prozesse, die zur Handhabung von Verbindungen erzeugt wurden. Wenn Threads_created hoch ist, sollten Sie eventuell die Thread_cache_size-Variable herauf setzen. (Normalerweise ergibt sich daraus keine bemerkbare Performance-Steigerung wenn eine gute Prozess-Implementierung vorliegt.)';
$strShowStatusThreads_runningDescr = 'Anzahl der Prozesse, die nicht schlafen.';
$strShowTableDimension = 'Tabellendimensionen anzeigen.';
$strShowTables = 'Tabellen anzeigen';
$strShowThisQuery = 'SQL-Befehl hier wieder anzeigen';
$strShowingBookmark = 'Bookmark wird angezeigt';
$strShowingPhp = 'Ansicht als PHP Code';
$strShowingRecords = 'Zeige Datensätze ';
$strShowingSQL = 'Ansicht als SQL Abfrage';
$strSimplifiedChinese = 'Vereinfachtes Chinesisch';
$strSingly = '(einmalig)';
$strSize = 'Größe';
$strSkipQueries = 'Anzahl der am Anfang zu überspringenden Einträge (Abfragen)';
$strSlovak = 'Slovakisch';
$strSlovenian = 'Slovenisch';
$strSmallBigAll = 'Alles klein/groß';
$strSnapToGrid = 'Am Gitter anordnen';
$strSocketProblem = '(evtl. ist auch der Socket des lokalen MySQL-Servers socket nicht korrekt konfiguriert)';
$strSort = 'Sortierung';
$strSortByKey = 'Nach Schlüssel sortieren';
$strSorting = 'Sortierung';
$strSpaceUsage = 'Speicherplatzverbrauch';
$strSpanish = 'Spanisch';
$strSplitWordsWithSpace = 'Die Wörter werden durch Leerzeichen (" ") getrennt.';
$strStandInStructureForView = 'Stellvertreter-Struktur des Views';
$strStatCheckTime = 'Letzter Check am';
$strStatCreateTime = 'Erzeugt am';
$strStatUpdateTime = 'Aktualisiert am';
$strStatement = 'Angaben';
$strStatisticsOverrun = 'Auf stark frequentierten Server kann der Byte-Zähler "überlaufen" (Wieder bei 0 beginnen), deshalb können diese Werte wie sie vom MySQL Server ausgegeben werden falsch sein.';
$strStatus = 'Status';
$strStorageEngine = 'Tabellenformat';
$strStorageEngines = 'Tabellenformate';
$strStrucCSV = 'CSV-Daten';
$strStrucData = 'Struktur und Daten';
$strStrucExcelCSV = 'CSV-Daten für MS Excel';
$strStrucNativeExcel = 'Excel-Datei';
$strStrucOnly = 'Nur Struktur';
$strStructPropose = 'Tabellenstruktur analysieren';
$strStructure = 'Struktur';
$strStructureForView = 'Struktur des Views';
$strSubmit = 'Abschicken';
$strSuccess = 'Ihr SQL-Befehl wurde erfolgreich ausgeführt.';
$strSum = 'Gesamt';
$strSwedish = 'Schwedisch';
$strSwitchToDatabase = 'Zu kopierter Datenbank wechseln';
$strSwitchToTable = 'Zur kopierten Tabelle wechseln';

$strTable = 'Tabelle';
$strTableAlreadyExists = 'Die Tabelle %s existiert bereits!';
$strTableComments = 'Tabellen-Kommentar';
$strTableEmpty = 'Der Tabellenname ist leer!';
$strTableHasBeenDropped = 'Die Tabelle %s wurde gelöscht.';
$strTableHasBeenEmptied = 'Die Tabelle %s wurde geleert.';
$strTableHasBeenFlushed = 'Die Tabelle %s wurde geschlossen und zwischengespeicherte Daten gespeichert.';
$strTableIsEmpty = 'Die Tabelle scheint leer zu sein!';
$strTableMaintenance = 'Hilfsmittel';
$strTableName = 'Tabellenname';
$strTableOfContents = 'Inhalt';
$strTableOptions = 'Tabellenoptionen';
$strTableStructure = 'Tabellenstruktur für Tabelle';
$strTables = '%s Tabellen';
$strTakeIt = 'auswählen';
$strTblPrivileges = 'Tabellenspezifische Rechte';
$strTempData = 'Temporäre Daten';
$strTextAreaLength = 'Wegen seiner Länge ist dieses<br />Feld vielleicht nicht editierbar.';
$strThai = 'Thai';
$strTheme = 'Oberflächendesign';
$strThemeDefaultNotFound = 'Standard-Oberflächendesign "%s" nicht gefunden!';
$strThemeNoPreviewAvailable = 'Keine Vorschau verfügbar.';
$strThemeNoValidImgPath = 'Keinen gültiges Pfad für Grafiken des Oberflächendesigns "%s" gefunden!';
$strThemeNotFound = 'Oberflächendesign "%s" nicht gefunden!';
$strThemePathNotFound = 'Pfad für das Oberflächendesign "%s" nicht gefunden!';
$strThisHost = 'Dieser Host';
$strThreadSuccessfullyKilled = 'Der Prozess %s wurde erfolgreich abgebrochen.';
$strThreads = 'Prozesse';
$strTime = 'Dauer';
$strTimeoutInfo = 'Der vorherige Import-Vorgang wurde abgebrochen. Er wird nun bei Position %d fortgesetzt.';
$strTimeoutNothingParsed = 'Allerdings wurden hierbei keine Daten eingelesen. Das bedeutet in der Regel, dass phpMyAdmin nicht in der Lage sein wird, den Import zu beenden, sofern nicht die Ausführungszeitbeschränkungen von php gelockert werden.';
$strTimeoutPassed = 'Das Ausführungszeitlimit wurde erreicht. Wenn Sie die Datei erneut abschicken, wird der Import fortgesetzt.';
$strToFromPage = 'nach/von Seite';
$strToSelectRelation = 'Um eine Relation auszuwählen, klicken Sie :';
$strToggleScratchboard = 'Klemmbrett anzeigen';
$strToggleSmallBig = 'Wechseln klein/groß';
$strTotal = 'insgesamt';
$strTotalUC = 'Insgesamt';
$strTraditionalChinese = 'Traditionelles Chinesisch';
$strTraditionalSpanish = 'Traditionelles Spanisch';
$strTraffic = 'Traffic';
$strTransactionCoordinator = 'Transaction Koordinator';
$strTransformation_application_octetstream__download = 'Zeigt einen Link an, um die binären Daten eines Feldes downloaden zu können. Die erste Option benennt den Dateinamen. Die zweite Option kann einen Spaltennamen der Tabelle benennen, aus dem der Dateiname geholt werden soll. Sollte die zweite Option gesetzt sein ist es notwendig, die erste Option auf einen Leerstring zu setzen (\'\')';
$strTransformation_application_octetstream__hex = 'Daten in hexadezimaler Schreibweise darstellen. Der optionale Parameter legt fest, nach wie vielen Halbbyte ein Leerzeichen eingefügt werden soll (Standardwert ist 2).';
$strTransformation_image_jpeg__inline = 'Ein klickbares Vorschaubild anzeigen. Optionen: Breite, Höhe in Pixeln (berücksichtigt Seitenverhältnis)';
$strTransformation_image_jpeg__link = 'Einen Link zum Bild anzeigen, z. B. zum Download von BLOB-Daten.';
$strTransformation_image_png__inline = 'Siehe image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Zeigt ein TIME-, TIMESTAMP-, DATETIME- oder numerisches Unixtimestamp-Feld als formatiertes Datum. Die erste Option ist der Offset (in Stunden), der zum Timestamp (Vorgabe: 0) hinzugefügt wird. Benutzen Sie die zweite Option, um einen abweichenden Datum-/Zeit-Format-String vorzugeben. Die dritte Option bestimmt, ob Sie das lokale oder das UTC Datum/Zeit dafür zeigen wollen (benutzen Sie "local" oder "utc"). Dementsprechend hat das Datumsformat verschiedene Werte - für "lokal" siehe die PHP Dokumentation für die strftime() Funktion und für "utc" wird es mittels der gmdate() Funktion konvertiert.';
$strTransformation_text_plain__external = 'Nur für LINUX: Startet ein externes Programm und verwendet die Daten des Feldes für die Standardeingabe. Stellt innerhalb von phpMyAdmin die Standardausgabe des externen Programmes dar. Die Voreinstellung wurde für Tidy optimiert, um HTML code optisch zu formatieren. Aus Sicherheitsgründen müssen Sie die Datei libraries/transformations/text_plain__external.inc.php von Hand bearbeiten um weitere Programme hinzuzufügen. Die erste Option ist die Nummer des dort hinterlegten Programmes und die zweite Option legt die Parameter für das externe Programm fest. Die dritte Option bestimmt, falls auf 1 gesetzt, dass die Ausgabe mit htmlspecialchars() formatiert wird (Standard: 1). Die vierte Option bestimmt, falls auf 1 gesetzt, ob ein NOWRAP-Parameter der Tabellenzelle hinzugefügt wird um einen automatischen Umbruch der Standardausgabe zu verhindern (Standard: 1)';
$strTransformation_text_plain__formatted = 'Behält Ursprungsformatierung des Feldes bei. Kein Escaping oder Umlautwandlung wird durchgeführt.';
$strTransformation_text_plain__imagelink = 'Benutzt den Inhalt eines Feldes um ein Bild und einen Link dazu darzustellen. Die erste Option ist ein Präfix vor dem eigentlichen Feldinhalt wie "http://www.domain.com". Zweite Option ist die Breite des Bildes, die dritte Option die Höhe des Bildes in Pixeln.';
$strTransformation_text_plain__link = 'Benutzt den Inhalt eines Feldes um einen Link darzustellen. Die erste Option ist ein Präfix vor dem eigentlichen Feldinhalt wie "http://www.domain.com". Zweite Option ist der darzustellende Titel des Links';
$strTransformation_text_plain__sql = 'Formatiert den Text als SQL mit Syntaxhervorhebung.';
$strTransformation_text_plain__substr = 'Stellt nur einen Teil des Feldinhaltes dar. Die erste Option definiert die Position des Textes ab dem die Ausgabe startet (Standard: 0), die zweite Option gibt an wieviel Zeichen ab dort dargestellt werden sollen. Falls diese Option leer ist, wird der gesamte verbleibende Text dargestellt. Die dritte Option kann einen Text enthalten, der bei partieller Ausgabe des Textes angehängt wird, um eine Abschneidung kenntlich zu machen (Standard: ...).';
$strTriggers = 'Trigger';
$strTruncateQueries = 'Zeige die SQL-Abfragen verkürzt an';
$strTurkish = 'Türkisch';
$strType = 'Typ';

$strUkrainian = 'Ukrainisch';
$strUncheckAll = 'Auswahl entfernen';
$strUnicode = 'Unicode';
$strUnique = 'Unique';
$strUnknown = 'unbekannt';
$strUnselectAll = 'Auswahl entfernen';
$strUnsupportedCompressionDetected = 'Sie haben versucht, eine Datei zu laden, die mit einem nicht unterstützten Verfahren komprimiert wurde (%s). Entweder ist die Unterstützung für selbiges nicht implementiert oder in Ihrer Konfiguration deaktiviert.';
$strUpdComTab = 'Bitte lesen Sie in der Dokumentation nach, wie Sie die Struktur Ihrer Spaltenkommentartabelle aktualisieren können';
$strUpdatePrivMessage = 'Die Rechte für %s wurden geändert.';
$strUpdateProfileMessage = 'Benutzer wurde geändert.';
$strUpdateQuery = 'Aktualisieren';
$strUpgrade = 'Sie sollten auf %s %s oder neuer umsteigen.';
$strUploadErrorCantWrite = 'Datei konnte gespeichert werden.';
$strUploadErrorExtension = 'Dateihochladen durch eine Erweiterung gestoppt.';
$strUploadErrorFormSize = 'Die hochgeladene Datei ist größer als der in MAX_FILE_SIZE des HTML Formulars angegebene Wert.';
$strUploadErrorIniSize = 'Die hochgeladene Datei ist größer als der in der php.ini in upload_max_filesize angegebene Wert.';
$strUploadErrorNoTempDir = 'Kein gültiges Temporäres Verzeichnis für hochgeladene Dateien.';
$strUploadErrorPartial = 'Die Datei wurde teilweise übertragen.';
$strUploadErrorUnknown = 'Unbekannter Fehler beim Dateihochladen.';
$strUploadLimit = 'Möglicherweise wurde eine zu große Datei hochgeladen. Bitte lesen Sie die %sDokumentation%s zur Lösung diese Problems.';
$strUploadsNotAllowed = 'Das hochladen von Dateien ist auf diesem Server nicht erlaubt.';
$strUsage = 'Verbrauch';
$strUseBackquotes = ' Tabellen- und Feldnamen in einfachen Anführungszeichen ';
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
$strUserNotFound = 'Der gewählte Benutzer wurde in der Benutzertabelle nicht gefunden.';
$strUserOverview = 'Benutzerübersicht';
$strUsersDeleted = 'Die gewählten Benutzer wurden gelöscht.';
$strUsersHavingAccessToDb = 'Benutzer mit Zugriff auf &quot;%s&quot;';

$strValidateSQL = 'SQL validieren';
$strValidatorError = 'Bei der Initialisierung des SQL-Validators ist ein Fehler aufgetreten. Bitte überprüfen Sie, ob Sie die in der %sDokumentation%s beschriebenen php-Erweiterungen installiert haben.';
$strValue = 'Wert';
$strVar = 'Variable';
$strVersionInformation = 'Versionsinformationen';
$strView = 'Ansicht';
$strViewDump = 'Dump (Schema) der Tabelle anzeigen';
$strViewDumpDB = 'Dump (Schema) der Datenbank anzeigen';
$strViewDumpDatabases = 'Dump (Schema) der Datenbanken anzeigen';
$strViewHasBeenDropped = 'Die Ansicht %s wurde gelöscht';
$strViewMaxExactCount = 'Dieses View hat mehr als %d Zeilen. Bitte schlagen Sie im %sHandbuch%s nach.';
$strViewName = 'VIEW Name';

$strWebServerUploadDirectory = 'Upload-Verzeichnis auf dem Webserver';
$strWebServerUploadDirectoryError = 'Auf das festgelegte Upload-Verzeichnis kann nicht zugegriffen werden.';
$strWelcome = 'Willkommen bei %s';
$strWestEuropean = 'Westeuropäisch';
$strWildcard = 'Platzhalter';
$strWindowNotFound = 'Das Ziel-Browserfenster konnte nicht aktualisiert werden. Möglicherweise wurde das Ursprungsfenster geschlossen oder der Browser verhindert den Zugriff aufgrund von Ihren Sicherheitseinstellungen.';
$strWithChecked = 'markierte:';
$strWriteRequests = 'Schreibanfragen';
$strWrongUser = 'Falscher Benutzername/Passwort. Zugriff verweigert.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Der Wert 0 (null) entfernt die Beschränkung.';
$strZip = 'Zip-komprimiert';
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

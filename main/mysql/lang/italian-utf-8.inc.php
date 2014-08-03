<?php
/* $Id: italian-utf-8.inc.php 11121 2008-02-12 18:05:59Z lem9 $ */

/**
 * translated by: Pietro Danesi <danone at users.sourceforge.net>  2002-03-29
 * Revised by:    "DPhantom" <dphantom at users.sourceforge.net>  2002-04-16
 * Revised by:    "Luca Rebellato" <rebeluca at users.sourceforge.net>  2007-07-26
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'); //italian days
$month = array('Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'); //italian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //italian time
$timespanfmt = '%s giorni, %s ore, %s minuti e %s secondi';

$strAbortedClients = 'Fallito';
$strAccessDenied = 'Accesso negato';
$strAccessDeniedCreateConfig = 'La ragione di questo è che probabilmente non hai creato alcun file di configurazione. Potresti voler usare %1$ssetup script%2$s per crearne uno.';
$strAccessDeniedExplanation = 'phpMyAdmin ha provato a connettersi al server MySQL, e il server ha rifiutato la connessione. Si dovrebbe controllare il nome dell\'host, l\'username e la password nel file config.inc.php ed assicurarsi che corrispondano alle informazioni fornite dall\'amministratore del server MySQL.';
$strAction = 'Azione';
$strAddAutoIncrement = 'Aggiungi valore AUTO_INCREMENT';
$strAddClause = 'Aggiungi %s';
$strAddConstraints = 'Aggiungi vincoli';
$strAddDeleteColumn = 'Aggiungi/Cancella campo';
$strAddDeleteRow = 'Aggiungi/Cancella criterio';
$strAddFields = 'Aggiungi %s campo(i)';
$strAddHeaderComment = 'Aggiunge un commento personalizzato all\'header (\\n per tornare a capo)';
$strAddIntoComments = 'Aggiungi nei commenti';
$strAddNewField = 'Aggiungi un nuovo campo';
$strAddPrivilegesOnDb = 'Aggiungi privilegi sul seguente database';
$strAddPrivilegesOnTbl = 'Aggiungi privilegi sulla seguente tabella';
$strAddSearchConditions = 'Aggiungi condizioni di ricerca (corpo della clausola "where"):';
$strAddToIndex = 'Aggiungi all\'indice&nbsp;%s&nbsp;colonna/e';
$strAddUser = 'Aggiungi un nuovo utente';
$strAddUserMessage = 'Hai aggiunto un nuovo utente.';
$strAdministration = 'Amministrazione';
$strAffectedRows = 'Righe interessate:';
$strAfter = 'Dopo %s';
$strAfterInsertBack = 'Indietro';
$strAfterInsertNewInsert = 'Inserisci un nuovo record';
$strAfterInsertNext = 'Modifica il record successivo';
$strAfterInsertSame = 'Torna a questa pagina';
$strAllowInterrupt = 'Permette di interrompere il processo di importazione nel caso lo script rilevi che è troppo vicino al tempo limite. Questo potrebbe essere un buon modo di importare grandi file, tuttavia potrebbe interrompere la transazione.';
$strAllTableSameWidth = 'mostra tutte le Tabelle con la stessa larghezza?';
$strAll = 'Tutti';
$strAlterOrderBy = 'Altera tabella ordinata per';
$strAnalyzeTable = 'Analizza tabella';
$strAnd = 'e';
$strAndThen = 'e quindi';
$strAngularLinks = 'Link angolari';
$strAnIndex = 'Un indice è stato aggiunto in %s';
$strAnyHost = 'Qualsiasi host';
$strAny = 'Qualsiasi';
$strAnyUser = 'Qualsiasi utente';
$strApproximateCount = 'Può essere approssimato. Vedere FAQ 3.11';
$strAPrimaryKey = 'Una chiave primaria è stata aggiunta in %s';
$strArabic = 'Arabo';
$strArmenian = 'Armeno';
$strAscending = 'Crescente';
$strAtBeginningOfTable = 'All\'inizio della tabella';
$strAtEndOfTable = 'Alla fine della tabella';
$strAttr = 'Attributi';
$strAutomaticLayout = 'Impaginazione automatica';

$strBack = 'Indietro';
$strBaltic = 'Baltico';
$strBeginCut = 'INIZIO CUT';
$strBeginRaw = 'INIZIO RAW';
$strBinary = 'Binario';
$strBinaryDoNotEdit = 'Tipo di dato Binario - non modificare';
$strBinaryLog = 'Log binario';
$strBinLogEventType = 'Tipo di evento';
$strBinLogInfo = 'Informazioni';
$strBinLogName = 'Nome del Log';
$strBinLogOriginalPosition = 'Posizione originale';
$strBinLogPosition = 'Posizione';
$strBinLogServerId = 'ID del server';
$strBookmarkAllUsers = 'Permetti ad ogni utente di accedere a questo bookmark';
$strBookmarkCreated = 'Segnalibro %s creato';
$strBookmarkDeleted = 'Il bookmark è stato cancellato.';
$strBookmarkLabel = 'Etichetta';
$strBookmarkQuery = 'Query SQL aggiunte ai preferiti';
$strBookmarkReplace = 'Sostituzione dei segnalibri esistenti con lo stesso nome';
$strBookmarkThis = 'Aggiungi ai preferiti questa query SQL';
$strBookmarkView = 'Visualizza solo';
$strBrowseDistinctValues = 'Naviga tra i valori DISTINCT';
$strBrowseForeignValues = 'Sfoglia le opzioni straniere';
$strBrowse = 'Mostra';
$strBufferPoolActivity = 'Attività del Buffer Pool';
$strBufferPool = 'Buffer Pool';
$strBufferPoolUsage = 'Utilizzo del Buffer Pool';
$strBufferReadMissesInPercent = 'Non letto in %';
$strBufferReadMisses = 'Non letto';
$strBufferWriteWaits = 'In attesa di scrittura';
$strBufferWriteWaitsInPercent = 'In attesa di scrittura in %';
$strBulgarian = 'Bulgaro';
$strBusyPages = 'Pagine occupate';
$strBzError = 'phpMyAdmin non è capace di comprimere il dump a causa dell\'estensione Bz2 errata in questa versione di PHP. Vi raccomandiamo vivamente di settare il parametro <code>$cfg[\'BZipDump\']</code> nel vostro file di configurazione di phpMyAdmin a <code>FALSE</code>. Se volete utilizzare le capacità di compressione Bz2, dovreste aggiornare il PHP all\'ultima versione. Date un\'occhiata al bug report %s per uteriori dettagli.';
$strBzip = '"compresso con bzip2"';

$strCalendar = 'Calendario';
$strCancel = 'Annulla';
$strCanNotLoadExportPlugins = 'Non posso caricare i plugins di esportazione. Controlla l\'installazione!';
$strCanNotLoadImportPlugins = 'Non posso caricare i plugins di importazione, controlla la tua configurazione!';
$strCannotLogin = 'Impossibile eseguire il login nel server MySQL';
$strCantLoad = 'Impossibile caricare l\'estensione %s,<br />prego controllare la configurazione di PHP';
$strCantLoadRecodeIconv = 'Impossibile caricare l\'estensione iconv o recode necessaria per la conversione del set di caratteri, configurare il PHP per permettere di utilizzare queste estenzioni o disabilitare la conversione dei set di caratteri in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Impossibile rinominare l\'indice a PRIMARIO!';
$strCantUseRecodeIconv = 'Impossibile utilizzare le funzioni iconv o libiconv o recode_string in quanto l\'estensione deve essere caricata. Controllare la configurazione del PHP.';
$strCardinality = 'Cardinalità';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = 'Europeo Centrale';
$strChangeCopyModeCopy = '... mantieni quello vecchio.';
$strChangeCopyMode = 'Crea un nuovo utente con gli stessi privilegi e ...';
$strChangeCopyModeDeleteAndReload = ' ... cancella quello vecchio dalla tabella degli utenti e in seguito ricarica i privilegi.';
$strChangeCopyModeJustDelete = ' ... cancella quello vecchio dalla tabella degli utenti.';
$strChangeCopyModeRevoke = ' ... revoca tutti i privilegi attivi da quello vecchio e in seguito cancellalo.';
$strChangeCopyUser = 'Cambia le Informazioni di Login / Copia Utente';
$strChangeDisplay = 'Scegli il campo da mostrare';
$strChange = 'Modifica';
$strChangePassword = 'Cambia password';
$strCharsetOfFile = 'Set di caratteri del file:';
$strCharsetsAndCollations = 'Set di Caratteri e Collations';
$strCharset = 'Set di caratteri';
$strCharsets = 'Set di caratteri';
$strCheckAll = 'Seleziona tutti';
$strCheckOverhead = 'Controllo addizionale';
$strCheckPrivs = 'Controlla i privilegi';
$strCheckPrivsLong = 'Controlla i privilegi per il database &quot;%s&quot;.';
$strCheckTable = 'Controlla tabella';
$strChoosePage = 'Prego scegliere una Page da modificare';
$strColComFeat = 'Visualizzazione commenti delle colonne';
$strCollation = 'Collation';
$strColumnNames = 'Nomi delle colonne';
$strColumnPrivileges = 'Privilegi relativi alle colonne';
$strCommand = 'Comando';
$strComments = 'Commenti';
$strCommentsForTable = 'Commenti per la tabella';
$strCompatibleHashing = 'Compatibile con MySQL 4.0';
$strCompleteInserts = 'Inserimenti completi';
$strCompression = 'Compressione';
$strCompressionWillBeDetected = 'Il tipo di compressione del file importato sarà automaticamente rilevato da: %s';
$strConfigDefaultFileError = 'Non posso leggere la configurazione da: "%1$s"';
$strConfigFileError = 'phpMyAdmin non riesce a leggere il file di configurazione!<br />Questo può accadere se il php trova un parse error in esso oppure il php non trova il file.<br />Richiamate il file di configurazione direttamente utilizzando il link sotto e leggete il/i messaggio/i di errore del php che ricevete. Nella maggior parte dei casi ci sono un apostrofo o una virgoletta mancanti.<br />Se ricevete una pagina bianca, allora è tutto a posto.';
$strConfigureTableCoord = 'Prego, configurare le coordinate per la tabella %s';
$strConnectionError = 'Impossibile connettersi: impostazioni non valide.';
$strConnections = 'Connessioni';
$strConstraintsForDumped = 'Limiti per le tabelle scaricate';
$strConstraintsForTable = 'Limiti per la tabella';
$strControluserFailed = 'Connessione per controluser come definito nella configurazione fallita.';
$strCookiesRequired = 'Da questo punto in poi, i cookies devono essere abilitati.';
$strCopy = 'Copia';
$strCopyDatabaseOK = 'Il Database %s è stato copiato in %s';
$strCopyTable = 'Copia la tabella nel (database<b>.</b>tabella):';
$strCopyTableOK = 'La tabella %s è stata copiata su %s.';
$strCopyTableSameNames = 'Impossibile copiare la tabella su se stessa!';
$strCouldNotKill = 'phpMyAdmin non è in grado di terminare il thread %s. Probabilmente è già stato terminato.';
$strCreate = 'Crea';
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE prima di copiare';
$strCreateIndex = 'Crea un indice su&nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Crea un nuovo indice';
$strCreateNewDatabase = 'Crea un nuovo database';
$strCreateNewTable = 'Crea una nuova tabella nel database %s';
$strCreatePage = 'Crea una nuova pagina';
$strCreatePdfFeat = 'Creazione di PDF';
$strCreateRelation = 'Crea relazioni';
$strCreateTable  = 'Crea tabelle';
$strCreateUserDatabase = 'Database per l\'utente';
$strCreateUserDatabaseName = 'Crea un database con lo stesso nome e concedi tutti i privilegi';
$strCreateUserDatabaseNone = 'None';
$strCreateUserDatabaseWildcard = 'Concedi tutti i privilegi al nome con caratteri jolly (username\_%)';
$strCreationDates = 'Creazione/Aggiornamento/Controllo date';
$strCriteria = 'Criterio';
$strCroatian = 'Croato';
$strCSV = 'CSV';
$strCyrillic = 'Cirillico';
$strCzech = 'Ceco';
$strCzechSlovak = 'Ceco-Slovacco';

$strDanish = 'Danese';
$strDatabase = 'Database';
$strDatabaseEmpty = 'Il nome del DataBase è vuoto!';
$strDatabaseExportOptions = 'Opzioni di esportazione del database';
$strDatabaseHasBeenDropped = 'Il Database %s è stato eliminato.';
$strDatabases = 'Database';
$strDatabasesDropped = '%s databases sono stati cancellati correttamente.';
$strDatabasesStatsDisable = 'Disabilita le Statistiche';
$strDatabasesStatsEnable = 'Abilita le Statistiche';
$strDatabasesStatsHeavyTraffic = 'N.B.: Abilitare qui le statistiche del Database potrebbe causare del traffico intenso fra il server web e MySQL.';
$strDatabasesStats = 'Statistiche dei databases';
$strData = 'Dati';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Solo dati';
$strDataPages = 'Pagine contenenti dati';
$strDBComment = 'Commento al Database: ';
$strDBCopy = 'Copia il Database in';
$strDbIsEmpty = 'Il databse sembra essere vuoto!';
$strDbPrivileges = 'Privilegi specifici al database';
$strDBRename = 'Rinomina il DataBase in';
$strDbSpecific = 'specifico del database';
$strDefaultEngine = '%s è il motore di memorizzazione predefinito su questo server MySQL.';
$strDefault = 'Predefinito';
$strDefaultValueHelp = 'Per i valori predefiniti, prego inserire un singolo valore, senza backslashes escaping o virgolette, utilizzando questo formato: a';
$strDefragment = 'Deframmenta la tabella';
$strDelayedInserts = 'Utilizza inserimenti ritardati';
$strDeleteAndFlush = 'Cancella gli utenti e dopo ricarica i privilegi.';
$strDeleteAndFlushDescr = 'Questa è la vita più giusta, ma il caricamento dei privilegi può durare qualche secondo.';
$strDeleted = 'La riga è stata cancellata';
$strDeletedRows = 'Righe cancellate:';
$strDelete = 'Elimina';
$strDeleteNoUsersSelected = 'Nessun utente selezionato per la cancellazione!';
$strDeleteRelation = 'Elimina relazione';
$strDeleting = 'Cancellazione in corso di %s';
$strDelimiter = 'Delimitatori';
$strDelOld = 'La Pagina corrente contiene Riferimenti a Tabelle che non esistono più. Volete cancellare questi Riferimenti?';
$strDescending = 'Decrescente';
$strDescription = 'Descrizione';
$strDesigner = 'Designer';
$strDesignerHelpDisplayField = 'Il campi da mostrare sono in colore rosa. Per impostare/togliere un campo come campo da mostrare, clicca l\'icona "Scegli il campo da mostrare", e poi clicca sul nome appropriato del campo.';
$strDictionary = 'dizionario';
$strDirectLinks = 'Link diretti';
$strDirtyPages = 'Pagine sporche';
$strDisabled = 'Disabilitata';
$strDisableForeignChecks = 'Disabilita i controlli sulle chiavi straniere';
$strDisplayFeat = 'Mostra Caratteristiche';
$strDisplayOrder = 'Ordine di visualizzazione:';
$strDisplayPDF = 'Mostra lo schema del PDF';
$strDoAQuery = 'Esegui "query da esempio" (carattere jolly: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentazione';
$strDoYouReally = 'Confermi: ';
$strDropDatabaseStrongWarning = 'Si sta per DISTRUGGERE COMPLETAMENTE un intero DataBase!';
$strDrop = 'Elimina';
$strDropUsersDb = 'Elimina i databases gli stessi nomi degli utenti.';
$strDumpingData = 'Dump dei dati per la tabella';
$strDumpSaved = 'Il dump è stato salvato sul file %s.';
$strDumpXRows = 'Dump di %s righe a partire dalla riga %s.';
$strDynamic = 'dinamico';

$strEdit = 'Modifica';
$strEditPDFPages = 'Modifica pagine PDF';
$strEditPrivileges = 'Modifica Privilegi';
$strEffective = 'Effettivo';
$strEmptyResultSet = 'MySQL ha restituito un insieme vuoto (i.e. zero righe).';
$strEmpty = 'Svuota';
$strEnabled = 'Abilitata';
$strEncloseInTransaction = 'Includi export in una transazione';
$strEndCut = 'FINE CUT';
$strEnd = 'Fine';
$strEndRaw = 'FINE RAW';
$strEngineAvailable = '%s è disponibile su questo server MySQL.';
$strEngineDisabled = '%s è stato disabilitato su questo server MySQL.';
$strEngines = 'Motori';
$strEngineUnsupported = 'Questo server MySQL non supporta il motore di memorizzazione %s.';
$strEnglish = 'Inglese';
$strEnglishPrivileges = 'Nota: i nomi dei privilegi di MySQL sono in Inglese';
$strError = 'Errore';
$strErrorInZipFile = 'Errore nell\'archivio ZIP:';
$strErrorRelationAdded = 'Errore: relazione non aggiunta.';
$strErrorRelationExists = 'Errore: relazione già esistente.';
$strErrorRenamingTable = 'Errore nel rinominare la tabella %1$s in %2$s';
$strErrorSaveTable = 'Errore nel salvare le coordinate per il Designer.';
$strEscapeWildcards = 'I caratteri jolly _ e % dovrebbero essere preceduti da un \ per l\'utilizzo letterale';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estone';
$strEvent = 'Eventi';
$strExcelEdition = 'Edizione Excel';
$strExecuteBookmarked = 'Esegue la query dalle preferite';
$strExplain = 'Spiega SQL';
$strExport = 'Esporta';
$strExportImportToScale = 'Importa/esporta alla dimensione';
$strExportMustBeFile = 'Il tipo di esportazione selezionato necessita di essere salvato in un file!';
$strExtendedInserts = 'Inserimenti estesi';
$strExtra = 'Extra';

$strFailedAttempts = 'Tentativi falliti';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Il campo %s è stato eliminato';
$strFieldInsertFromFileTempDirNotExists = 'Errore nello spostare il file caricato, vedi FAQ 1.11';
$strFields = 'Campi';
$strFieldsEnclosedBy = 'Campo composto da';
$strFieldsEscapedBy = 'Campo impedito da';
$strFieldsTerminatedBy = 'Campo terminato da';
$strFileAlreadyExists = 'Il file %s esiste già sul server: prego, cambiare nome del file o selezionare l\'opzione "sovrascrivi".';
$strFileCouldNotBeRead = 'Il file non può essere letto';
$strFileNameTemplateDescriptionDatabase = 'nome database';
$strFileNameTemplateDescription = 'Questo valore è interpretato usando %1$sstrftime%2$s, in questo modo puoi usare stringhe di formattazione per le date/tempi. Verranno anche aggiunte le seguenti trasformazioni: %3$s. Il testo rimanente resterà invariato.';
$strFileNameTemplateDescriptionServer = 'nome server';
$strFileNameTemplateDescriptionTable = 'nome tabella';
$strFileNameTemplate = 'Nome file template';
$strFileNameTemplateRemember = 'ricorda il template';
$strFiles = 'File';
$strFileToImport = 'File importato';
$strFixed = 'fisso';
$strFlushPrivilegesNote = 'N.B.: phpMyAdmin legge i privilegi degli utenti direttamente nella tabella dei privilegi di MySQL. Il contenuto di questa tabella può differire dai privilegi usati dal server se sono stati fatti cambiamenti manuali. In questo caso, Si dovrebbero %srinfrescare i privilegi%s prima di continuare.';
$strFlushQueryCache = 'Rinfresca la cache delle query';
$strFlushTable = 'Inizializza ("FLUSH") la tabella';
$strFlushTables = 'Rinfresca (chiudi) tutte le tabelle';
$strFontSize = 'Dimensione font';
$strForeignKeyError = 'Errore creando una foreign key (controlla il tipo di dati)';
$strFormat = 'Formato';
$strFormEmpty = 'Valore mancante nel form!';
$strFreePages = 'Pagine libere';
$strFullText = 'Testo completo';
$strFunction = 'Funzione';
$strFunctions = 'Funzioni';

$strGenBy = 'Generato da';
$strGeneralRelationFeat = 'Caratteristiche Generali di Relazione';
$strGenerate = 'Genera';
$strGeneratePassword = 'Genera Password';
$strGenTime = 'Generato il';
$strGeorgian = 'Georgiano';
$strGerman = 'Tedesco';
$strGlobal = 'globale';
$strGlobalPrivileges = 'Privilegi globali';
$strGlobalValue = 'Valore globale';
$strGo = 'Esegui';
$strGrantOption = 'Grant';
$strGreek = 'Greco';
$strGzip = '"compresso con gzip"';

$strHandler = 'Handler';
$strHasBeenAltered = 'è stato modificato.';
$strHasBeenCreated = 'è stato creato.';
$strHaveToShow = 'Devi scegliere almeno una Colonna da mostrare';
$strHebrew = 'Ebreo';
$strHelp = 'Aiuto';
$strHexForBLOB = 'Usa dati esadecimali per BLOB';
$strHide         = 'Nascondi';
$strHideShowAll = 'Mostra/nascondi tutto';
$strHideShowNoRelation = 'Mostra/nascondi tabella senza relazioni';
$strHome = 'Home';
$strHomepageOfficial = 'Home page ufficiale di phpMyAdmin';
$strHostEmpty = 'Il nome di host è vuoto!';
$strHost = 'Host';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Ungherese';

$strIcelandic = 'Islandese';
$strId = 'ID';
$strIdxFulltext = 'Testo completo';
$strIEUnsupported = 'Internet explorer non supporta questa funzione.';
$strIgnoreDuplicates = 'Ignora le righe duplicate';
$strIgnore = 'Ignora';
$strIgnoreInserts = 'Utilizza gli IGNORE INSERTS';
$strImportExportCoords = 'Importa/esporta le coordinate per PDF schema';
$strImportFiles = 'Importa file';
$strImportFormat = 'Formato del file importato';
$strImport = 'Importa';
$strImportSuccessfullyFinished = 'Importazione eseguita con successo, %d query eseguite.';
$strIndexes = 'Indici';
$strIndexesSeemEqual = 'I seguenti indici sembrano essere uguali e uno di essi deve essere rimosso:';
$strIndexHasBeenDropped = 'L\'indice %s è stato eliminato';
$strIndex = 'Indice';
$strIndexName = 'Nome dell\'indice&nbsp;:';
$strIndexType = 'Tipo di indice&nbsp;:';
$strIndexWarningTable = 'Problemi con gli indici della tabella `%s`';
$strInnoDBAutoextendIncrementDesc = ' La dimensione di incremento per aumentare la dimensione di una tabella autoextending quando diventa piena.';
$strInnoDBAutoextendIncrement = 'Incremento autoextend';
$strInnoDBBufferPoolSizeDesc = 'La dimensione del buffer di memoria InnoDB cacha dati e indici delle proprie tabelle.';
$strInnoDBBufferPoolSize = 'Dimensione del Buffer pool';
$strInnoDBDataFilePath = 'File dati';
$strInnoDBDataHomeDirDesc = 'La parte comune del path della directory per tutti i file dati InnoDB.';
$strInnoDBDataHomeDir = 'Home directory dei dati';
$strInnoDBPages = 'pagine';
$strInnoDBRelationAdded = 'Aggiunta relazione InnoDB';
$strInnodbStat = 'Stato InnoDB';
$strInsecureMySQL = 'Il file di configurazione in uso contiene impostazioni (root con nessuna password) che corrispondono ai privilegi dell\'account MySQL predefinito. Un server MySQL funzionante con queste impostazioni è aperto a intrusioni, e si dovrebbe realmente riparare a questa falla nella sicurezza.';
$strInsertAsNewRow = 'Inserisci come nuova riga';
$strInsertedRowId = 'Inserito id riga:';
$strInsertedRows = 'Righe inserite:';
$strInsert = 'Inserisci';
$strInternalNotNecessary = '* Non è necessaria una relazione interna quando già esiste in InnoDB.';
$strInternalRelationAdded = 'Aggiunte relazioni internet';
$strInternalRelations = 'Relazioni interne';
$strInUse = 'in uso';
$strInvalidAuthMethod = 'Metodo di autenticazione settato nella configurazione non valido:';
$strInvalidColumn = 'Colonna specificata (%s) invalida!';
$strInvalidColumnCount = 'Il contatore delle colonne deve essere superiore a 0.';
$strInvalidCSVFieldCount = 'Contatore di campo non valido nell\'input CSV alla linea %d.';
$strInvalidCSVFormat = 'Formato non valido per l\'input CSV alla linea %d.';
$strInvalidCSVParameter = 'Parametro non valido per importazione CSV: %s';
$strInvalidDatabase = 'Database non valido';
$strInvalidFieldAddCount = 'Deviaggiungere come minimo un campo.';
$strInvalidFieldCount = 'la tabella deve avere come minimo un dato.';
$strInvalidLDIImport = 'Questo plugin non supporta importazioni di dati compressi!';
$strInvalidRowNumber = '%d non è un numero valido di righe.';
$strInvalidServerHostname = 'Nome host per il server %1$s non valido. Controlla la tua configurazione.';
$strInvalidServerIndex = 'Server index non valido: "%s"';
$strInvalidTableName = 'Nome tabella non valido';

$strJapanese = 'Giapponese';
$strJoins = 'Joins';
$strJumpToDB = 'Passa al database &quot;%s&quot;.';
$strJustDelete = 'Cancella soltanto gli utenti dalle tabelle dei privilegi.';
$strJustDeleteDescr = 'Gli utenti &quot;cancellati&quot; saranno ancora in grado di accedere al servercome al solito finché i privilegi non verraanno ricaricati.';

$strKeepPass = 'Non cambiare la password';
$strKeyCache = 'Key cache';
$strKeyname = 'Nome chiave';
$strKill = 'Rimuovi';
$strKnownExternalBug = 'La %s funzionalità è affetta da un bug noto, vedi %s';
$strKorean = 'Coreano';

$strLandscape = 'Orizzontale';
$strLanguage = 'Lingua';
$strLanguageUnknown = 'Lingua non conosciuta : %1$s.';
$strLatchedPages = 'Latched pages';
$strLatexCaption = 'Sottotitolo della tabella';
$strLatexContent = 'Contenuto della tabella __TABLE__';
$strLatexContinuedCaption = 'Sottotitolo della tabella continuato';
$strLatexContinued = '(continua)';
$strLatexIncludeCaption = 'Includi sottotitolo della tabella';
$strLatexLabel = 'Chiave etichetta';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Struttura della tabella __TABLE__';
$strLatvian = 'Lituano';
$strLDI = 'CSV usando LOAD DATA';
$strLDILocal = 'Usa LOCAL keyword';
$strLengthSet = 'Lunghezza/Set*';
$strLimitNumRows = 'record per pagina';
$strLinesTerminatedBy = 'Linee terminate da';
$strLinkNotFound = 'Link non trovato';
$strLinksTo = 'Collegamenti a';
$strLithuanian = 'Lituano';
$strLocalhost = 'Locale';
$strLocationTextfile = 'Percorso del file';
$strLogin = 'Connetti';
$strLoginInformation = 'Informazioni di Login';
$strLogout = 'Disconnetti';
$strLogPassword = 'Password:';
$strLogServer = 'Server';
$strLogUsername = 'Nome utente:';
$strLongOperation = 'Questa operazione potrebbe impiegare molto tempo. Procedere comunque?';

$strMaxConnects = 'max. connessioni contemporanee';
$strMaximalQueryLength = 'Lunghezza massima di una query creata';
$strMaximumSize = 'Dimensione massima: %s%s';
$strMbExtensionMissing = 'L\'estensione PHP mbstring non è stata trovata e sembra che si stia utilizzando un set di caratteri multibyte. Senza l\'estensione mbstring, phpMyAdmin non è in grado di dividere correttamente le stringhe di caratteri e questo può portare a risultati inaspettati.';
$strMbOverloadWarning = 'Avete abilitato mbstring.func_overload nella configurazione del PHP. Questa opzione è incompatibile con phpMyAdmin e potrebbe causare la corruzione di alcuni dati!';
$strMIME_available_mime = 'Tipi-MIME disponibili';
$strMIME_available_transform = 'Trasformazioni disponibili';
$strMIME_description = 'Descrizione';
$strMIME_MIMEtype = 'tipo MIME';
$strMIME_nodescription = 'Nessuna descrizione è disponibile per questa trasformazione.<br />Prego, chiedere all\'autore cosa %s faccia.';
$strMIME_transformation_note = 'Per una lista di opzioni di trasformazione disponibili e le loro rispettive trasformazioni di tipi-MIME, cliccate su %strasformazione descrizioni%s';
$strMIME_transformation_options_note = 'Prego, immettere i valori per le opzioni di trasformazioneutilizzando questo formato: \'a\', 100, b,\'c\'...<br />Se c\'è la necessità di immettere un backslash ("\") o un apostrofo ("\'") tra questi valori, essi vanno backslashati (per es. \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_transformation_options = 'Opzioni di Transformation';
$strMIME_transformation = 'Trasformazione del Browser';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';
$strMIME_without = 'Tipi-MIME stampati in italics non hanno una funzione di trasformazione separata';
$strModifications = 'Le modifiche sono state salvate';
$strModifyIndexTopic = 'Modifica un indice';
$strModify = 'Modifica';
$strMoveMenu = 'Muovi menù';
$strMoveTableOK = 'La tabella %s è stata spostata in %s.';
$strMoveTableSameNames = 'Impossibile spostare la tabella su se stessa!';
$strMoveTable = 'Sposta la tabella nel (database<b>.</b>tabella):';
$strMultilingual = 'multilingua';
$strMyISAMDataPointerSizeDesc = 'Dimensione del puntatore predefinito in Bytes, che deve essere usata da CREATE TABLE per le tabelle MyISAM quando non è stata specificata l\'opzione MAX_ROWS.';
$strMyISAMDataPointerSize = 'Domensione del puntatore dati';
$strMyISAMMaxExtraSortFileSizeDesc = 'Se il file temporaneo è usato per la creazione veloce di un indice MyISAM, occuperebbe più spazio dell\'utilizzo del metodo key cache con la quantità ivi specificata: perciò si deve prediligere il metodo key cache.';
$strMyISAMMaxExtraSortFileSize = 'Dimensione massima per i file temporanei nella creazione di un indice';
$strMyISAMMaxSortFileSizeDesc = 'La dimensione massima dei file temporanei MySQL può essere utilizzata nella rigenerazione di un indice MyISAM (durante un REPAIR TABLE, ALTER TABLE, o LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Dimensione massima dei file temporanei di ordinamento';
$strMyISAMRecoverOptionsDesc = 'La modalità di irppristino automatico di tabelle MyISAM corrotte, come impostato tramite l\'opzione di lan cio del server --myisam-recover.';
$strMyISAMRecoverOptions = 'Modalità di ripristino automatico';
$strMyISAMRepairThreadsDesc = 'Se questo valore è maggiore di 1, gli indici della tabella MyISAM vengono creati in parallelo (ogni indice nel suo thread) durante il processo di ordinamento Repair by.';
$strMyISAMRepairThreads = 'Thread di riparazione';
$strMyISAMSortBufferSizeDesc = 'Il buffer che viene allocato nell\'ordinamento degli indici MyISAM durante un REPAIR TABLE o nella creazione degli indici con CREATE INDEX o ALTER TABLE.';
$strMyISAMSortBufferSize = 'Ordina la dimensione del buffer';
$strMySQLCharset = 'Set di caratteri MySQL';
$strMysqlClientVersion = 'Versione MySQL client';
$strMySQLConnectionCollation = 'collazione della connessione di MySQL';
$strMysqlLibDiffersServerVersion = 'Le tue librerie di PHP per MySQL versione %s sono diverse dalla versione di MySQL server %s. Potrebbe causare comportamenti imprevedibili.';
$strMySQLSaid = 'Messaggio di MySQL: ';
$strMySQLShowProcess = 'Visualizza processi in esecuzione';
$strMySQLShowStatus = 'Visualizza informazioni di runtime di MySQL';
$strMySQLShowVars = 'Visualizza variabili di sistema di MySQL';

$strName = 'Nome';
$strNext = 'Prossimo';
$strNoActivity = 'Nessuna attività da %s secondi o più, si prega di autenticarsi nuovamente';
$strNoDatabases = 'Nessun database';
$strNoDatabasesSelected = 'Nessun database selezionato.';
$strNoDataReceived = 'Non sono stati ricevuti dati da importare. O non è stato indicato alcun nome file, oppure è stato superata la dimensione massima consentita per il file, impostata nella configurazione di PHP. Vedi FAQ 1.16.';
$strNoDescription = 'nessuna Description';
$strNoDetailsForEngine = 'Non è disponibile nessuna informazione dettagliata sullo stato di questo motore di memorizzazione.';
$strNoDropDatabases = 'I comandi "DROP DATABASE" sono disabilitati.';
$strNoExplain = 'Non Spiegare SQL';
$strNoFilesFoundInZip = 'Non sono stati trovati file ZIP all\'interno dell\'archivio!';
$strNoFrames = 'phpMyAdmin funziona meglio con browser che supportano frames';
$strNoIndex = 'Nessun indice definito!';
$strNoIndexPartsDefined = 'Nessuna parte di indice definita!';
$strNoModification = 'Nessun cambiamento';
$strNone = 'Nessuno';
$strNo = ' No ';
$strNoOptions = 'Questo formato non ha opzioni';
$strNoPassword = 'Nessuna Password';
$strNoPermission = 'Il server web non possiede i privilegi per salvare il file %s.';
$strNoPhp = 'senza codice PHP';
$strNoPrivileges = 'Nessun Privilegio';
$strNoRights = 'Non hai i permessi per effettuare questa operazione!';
$strNoRowsSelected = 'Nessuna riga selezionata';
$strNoSpace = 'Spazio insufficiente per salvare il file %s.';
$strNoTablesFound = 'Non ci sono tabelle nel database.';
$strNoThemeSupport = 'Nessun supporto per i temi, si prega di controllare la configurazione e/o i temi nella cartella %s.';
$strNotNumber = 'Questo non è un numero!';
$strNotOK = 'non OK';
$strNotSet = '<b>%s</b> tabella non trovata o non settata in %s';
$strNoUsersFound = 'Nessun utente trovato.';
$strNoValidateSQL = 'Non Validare SQL';
$strNull = 'Null';
$strNumberOfFields = 'Numero di campi';
$strNumberOfTables = 'Numero di tabelle';
$strNumSearchResultsInTable = '%s corrisponde/ono nella tabella <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totale:</b> <i>%s</i> corrispondenza/e';
$strNumTables = 'Tabelle';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'Foglio di calcolo nel formato Open Document';
$strOpenDocumentText = 'Testo nel formato Open Document';
$strOpenNewWindow = 'Apri una nuova finestra di PhpMyAdmin';
$strOperations = 'Operazioni';
$strOperator = 'Operatore';
$strOptimizeTable = 'Ottimizza tabella';
$strOptions = 'Opzioni';
$strOr = 'Oppure';
$strOverhead = 'In eccesso';
$strOverwriteExisting = 'Sovrascrivi file(s) esistente/i';

$strPageNumber = 'Numero pagina:';
$strPagesToBeFlushed = 'Pagine che devono essere flushate';
$strPaperSize = 'Dimensioni carta';
$strPartialImport = 'Importazione parziale';
$strPartialText = 'Testo parziale';
$strPasswordChanged = 'La password per l\'utente %s è cambiata con successo.';
$strPasswordEmpty = 'La password è vuota!';
$strPasswordHashing = 'Password Hashing';
$strPasswordNotSame = 'La password non coincide!';
$strPassword = 'Password';
$strPdfDbSchema = 'Schema del database "%s" - Pagina %s';
$strPdfInvalidTblName = 'La tabella "%s" non esiste!';
$strPdfNoTables = 'Nessuna Tabella';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Genera un report contenete i dati di una singola tabella)';
$strPDFReportTitle = 'Titolo del Report';
$strPerHour = 'all\'ora';
$strPerMinute = 'al minuto';
$strPerSecond = 'al secondo';
$strPersian = 'Persiano';
$strPhoneBook = 'rubrica';
$strPHP40203 = 'Si sta utilizzando PHP 4.2.3, che presenta un serio bug con le stringhe multi-byte (mbstring). Vedi report PHP 19404. Questa versione di PHP non è raccomandata per l\'utilizzo con phpMyAdmin.';
$strPhp = 'Crea il codice PHP';
$strPHPVersion = 'Versione PHP';
$strPleaseSelectPrimaryOrUniqueKey = 'Seleziona la chiave primaria o una chiave univoca';
$strPmaDocumentation = 'Documentazione di phpMyAdmin';
$strPmaUriError = 'La direttiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DEVE essere impostata nel file di configurazione!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'Polacco';
$strPortrait = 'Verticale';
$strPos1 = 'Inizio';
$strPrevious = 'Precedente';
$strPrimaryKeyHasBeenDropped = 'La chiave primaria è stata eliminata';
$strPrimaryKeyName = 'Il nome della chiave primaria deve essere... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>deve</b> essere il nome di, e <b>solo di</b>, una chiave primaria!)';
$strPrimary = 'Primaria';
$strPrint = 'Stampa';
$strPrintViewFull = 'Vista stampa (con full text)';
$strPrintView = 'Visualizza per stampa';
$strPrivDescAllPrivileges = 'Comprende tutti i privilegi tranne GRANT.';
$strPrivDescAlter = 'Permette di alterare la struttura di tabelle esistenti.';
$strPrivDescAlterRoutine = 'Permette l\'alterazione e l\'eliminazione di routines memorizzate.';
$strPrivDescCreateDb = 'Permette di creare nuove tabelle e nuovi databases.';
$strPrivDescCreateRoutine = 'Permette la creazione di routines memorizzate.';
$strPrivDescCreateTbl = 'Permette di creare nuove tabelle.';
$strPrivDescCreateTmpTable = 'Permette di creare tabelle temporanee.';
$strPrivDescCreateUser = 'Permette di creare, cancellare e rinominare gli account utente.';
$strPrivDescCreateView = 'Permette la creazione di nuove viste.';
$strPrivDescDelete = 'Permette di cancellare dati.';
$strPrivDescDropDb = 'Permette di eliminare databases e tabelle.';
$strPrivDescDropTbl = 'Permette di eliminare tabelle.';
$strPrivDescExecute5 = 'Permette l\'esecuzione di routines memorizzate.';
$strPrivDescExecute = 'Permette di eseguire procedure memorizzate; Non ha effetto in questa versione di MySQL.';
$strPrivDescFile = 'Permette di importare dati da e esportare dati in file.';
$strPrivDescGrant = 'Permette di aggiungere utenti e privilegi senza ricaricare le tabelle dei privilegi.';
$strPrivDescIndex = 'Permette di creare ed eliminare gli indici.';
$strPrivDescInsert = 'Permette di inserire e sovrascrivere dati.';
$strPrivDescLockTables = 'Permette di bloccare le tabelle per il thread corrente.';
$strPrivDescMaxConnections = 'Limita il numero di nuove connessioni che un utente può aprire in un\'ora.';
$strPrivDescMaxQuestions = 'Limita il numero di query che un utente può mandare al server in un\'ora.';
$strPrivDescMaxUpdates = 'Limita il numero di comandi che possono cambiare una tabella o un database che un utente può eseguire in un\'ora.';
$strPrivDescMaxUserConnections = 'Limite di connessioni simultanee che un utente può fare.';
$strPrivDescProcess3 = 'Permette di killare i processi di altri utenti.';
$strPrivDescProcess4 = 'Permette di vedere le query complete nella lista dei processi.';
$strPrivDescReferences = 'Non ha alcun effetto in questa versione di MySQL.';
$strPrivDescReload = 'Permette di ricaricare i parametri del server e di resettare la cache del server.';
$strPrivDescReplClient = 'Accorda il diritto ad un utente di domandare dove sono i masters/slaves.';
$strPrivDescReplSlave = 'Necessario per la replicazione degli slaves.';
$strPrivDescSelect = 'Permette di leggere i dati.';
$strPrivDescShowDb = 'Accorda l\'accesso alla lista completa dei databases.';
$strPrivDescShowView = 'Permette di effettuare query del tipo SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Permette di chiudere il server.';
$strPrivDescSuper = 'Permette altre connessioni, anche se è stato raggiunto il massimo numero di connessioni; Necessario per molte operazioni di amministrazione come il settaggio di variabili globali o la cancellazione dei threads di altri utenti.';
$strPrivDescUpdate = 'Permette di cambiare i dati.';
$strPrivDescUsage = 'Nessun privilegio.';
$strPrivileges = 'Privilegi';
$strPrivilegesReloaded = 'I privilegi sono stati ricaricati con successo.';
$strProcedures = 'Procedure';
$strProcesses = 'Processi';
$strProcesslist = 'Lista Processi';
$strProfiling = 'Profiling';
$strProtocolVersion = 'Versione protocollo';
$strPutColNames = 'Mette i nomi delle colonne alla prima riga';

$strQBEDel = 'Elimina';
$strQBEIns = 'Aggiungi';
$strQBE = 'Query da esempio';
$strQueryCache = 'Cache delle query';
$strQueryFrame = 'Finestra della Query';
$strQueryOnDb = 'SQL-query sul database <b>%s</b>:';
$strQueryResultsOperations = 'Risultato delle operazioni di Query';
$strQuerySQLHistory = 'Storico dell\'SQL';
$strQueryStatistics = '<b>Query delle Statistiche</b>: Dall\'avvio, %s query sono state effettuate sul server.';
$strQueryTime = 'La query ha impiegato %01.4f sec';
$strQueryType = 'Tipo di Query';
$strQueryWindowLock = 'Non sovrascrivere questa query da fuori della finestra';

$strReadRequests = 'Richieste di lettura';
$strReceived = 'Ricevuti';
$strRecommended = 'raccomandato';
$strRecords = 'Record';
$strReferentialIntegrity = 'Controlla l\'integrità delle referenze:';
$strRefresh = 'Aggiorna';
$strRelationalSchema = 'Schema relazionale';
$strRelationDeleted = 'Relazione cancellata';
$strRelationNotWorking = 'Le caratteristiche aggiuntive sono state disattivate per funzionare con le tabelle linkate. Per scoprire perché clicca %squi%s.';
$strRelationsForTable = 'RELATIONS FOR TABLE';
$strRelations = 'Relazioni';
$strRelationView = 'Vedi relazioni';
$strReloadingThePrivileges = 'Caricamento dei privilegi in corso';
$strReloadPrivileges = 'Ricarica i privilegi';
$strReload = 'Ricarica';
$strRemoveSelectedUsers = 'Rimuove gli utenti selezionati';
$strRenameDatabaseOK = 'Il DataBase %s è stato rinominato in %s';
$strRenameTableOK = 'La tabella %s è stata rinominata %s';
$strRenameTable = 'Rinomina la tabella in';
$strRepairTable = 'Ripara tabella';
$strReplaceNULLBy = 'Sostituisci NULL con';
$strReplaceTable = 'Sostituisci i dati della tabella col file';
$strReplication = 'Replicazione';
$strReset = 'Riavvia';
$strResourceLimits = 'Limiti di risorse';
$strRestartInsertion = 'Riprendi inserimento con la riga %s';
$strReType = 'Reinserisci';
$strRevokeAndDeleteDescr = 'Gli utenti UTILIZZERANNO comunque il privilegio finché i privilegi non saranno ricaricati.';
$strRevokeAndDelete = 'Revoca tutti i privilegi attivi agli utenti e dopo li cancella.';
$strRevokeMessage = 'Hai revocato i privilegi per %s';
$strRevoke = 'Revoca';
$strRomanian = 'Rumeno';
$strRoutineReturnType = 'Tipo di risultato';
$strRoutines = 'Routines';
$strRowLength = 'Lunghezza riga';
$strRowsFrom = 'righe a partire da';
$strRowSize = 'Dimensione riga';
$strRowsModeFlippedHorizontal = 'orizzontale (headers ruotati)';
$strRowsModeHorizontal = ' orizzontale ';
$strRowsModeOptions = ' in modalità %s e ripeti gli headers dopo %s celle ';
$strRowsModeVertical = ' verticale ';
$strRows = 'Righe';
$strRowsStatistic = 'Statistiche righe';
$strRunning = 'in esecuzione su %s';
$strRunQuery = 'Invia Query';
$strRunSQLQuery = 'Esegui la/e query SQL sul database %s';
$strRunSQLQueryOnServer = 'Eseguendo query SQL sul server %s';
$strRussian = 'Russo';

$strSaveOnServer = 'Salva sul server nella directory %s';
$strSavePosition = 'Salva la posizione';
$strSave = 'Salva';
$strScaleFactorSmall = 'Il fattore di scala è troppo piccolo per riempire lo schema nella pagina';
$strSearch = 'Cerca';
$strSearchFormTitle = 'Cerca nel database';
$strSearchInTables = 'Nella/e tabella/e:';
$strSearchNeedle = 'parola/e o valore/i da cercare (carattere jolly: "%"):';
$strSearchOption1 = 'almeno una delle parole';
$strSearchOption2 = 'tutte le parole';
$strSearchOption3 = 'la frase esatta';
$strSearchOption4 = 'come espressione regolare';
$strSearchResultsFor = 'Cerca i risultati per "<i>%s</i>" %s:';
$strSearchType = 'Trova:';
$strSecretRequired = 'Adesso c\'è bisogno di una password per il file di configurazione (blowfish_secret).';
$strSelectADb = 'Prego, selezionare un database';
$strSelectAll = 'Seleziona Tutto';
$strSelectBinaryLog = 'Selezionare il log binario da visualizzare';
$strSelectFields = 'Seleziona campi (almeno uno):';
$strSelectForeignKey = 'Seleziona Foreign Key';
$strSelectNumRows = 'nella query';
$strSelectReferencedKey = 'Seleziona le chiavi referenziali';
$strSelectTables = 'Seleziona Tables';
$strSend = 'Salva con nome...';
$strSent = 'Spediti';
$strServerChoice = 'Scelta del server';
$strServerNotResponding = 'Il server non risponde';
$strServer = 'Server';
$strServers = 'Servers';
$strServerStatusDelayedInserts = 'Inserimento ritardato';
$strServerStatus = 'Informazioni di Runtime';
$strServerStatusUptime = 'Questo server MySQL sta girando da %s. E\' stato avviato il %s.';
$strServerTabVariables = 'Variabili';
$strServerTrafficNotes = '<b>Traffico del server</b>: Queste tabelle mostrano le statistiche del traffico di retedi questo server MySQL dal momento del suo avvio.';
$strServerVars = 'Variabili e parametri del Server';
$strServerVersion = 'Versione MySQL';
$strSessionStartupErrorGeneral = 'Non posso far partire la sessione senza errori, controlla gli errori nel log di PHP e/o del tuo server web e configura correttamente la tua installazione di PHP.';
$strSessionValue = 'Valore sessione';
$strSetEnumVal = 'Se il tipo di campo è "enum" o "set", immettere i valori usando il formato: \'a\',\'b\',\'c\'...<br />Se comunque dovete mettere dei backslashes ("\") o dei single quote ("\'") davanti a questi valori, backslashateli (per esempio \'\\\\xyz\' o \'a\\\'b\').';
$strShowAll = 'Mostra tutti';
$strShowColor = 'Mostra il colore';
$strShowDatadictAs = 'Formato del Data Dictionary';
$strShowFullQueries = 'Mostra query complete';
$strShowGrid = 'Mostra la griglia';
$strShowHideLeftMenu = 'Mostra/nascondi il menù di sinistra';
$strShowingBookmark = 'Mostrando i segnalibri';
$strShowingPhp = 'Mostrando il codice PHP';
$strShowingRecords = 'Visualizzazione record ';
$strShowingSQL = 'Mostrando la query SQL';
$strShow = 'Mostra';
$strShowOpenTables = 'Mostra le tabelle aperte';
$strShowPHPInfo = 'Mostra le info sul PHP';
$strShowSlaveHosts = 'Mostra gli hosts slave';
$strShowSlaveStatus = 'Mostra lo stato degli slave';
$strShowStatusBinlog_cache_disk_useDescr = 'Il numero delle transazioni che usano la cache temporanea del log binario, ma che oltrepassano il valore di binlog_cache_size e usano un file temporaneo per salvare gli statements dalle transazioni.';
$strShowStatusBinlog_cache_useDescr = 'Il numero delle transazioni che usano la cache temporanea del log binario.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Il numero delle tabelle temporanee create automaticamente sul disco dal server mentre esegue i comandi. Se il valore Created_tmp_disk_tables è grande, potresti voler aumentare il valore tmp_table_size, per fare im modo che le tabelle temporanee siano memory-based anzichè disk-based.';
$strShowStatusCreated_tmp_filesDescr = 'Numero di file temporanei che mysqld ha creato.';
$strShowStatusCreated_tmp_tablesDescr = 'Il numero di tabelle temporanee create automaticamente in memoria dal server durante l\'esecuzione dei comandi.';
$strShowStatusDelayed_errorsDescr = 'Numero di righe scritte con INSERT DELAYED in cui ci sono stati degli errori (probabilmete chiave dublicata).';
$strShowStatusDelayed_insert_threadsDescr = 'Il numero di processi INSERT DELAYED in uso. Ciascuna tabella su cui è usato INSERT DELAYED occupa un thread.';
$strShowStatusDelayed_writesDescr = 'Il numero di righe INSERT DELAYED scritte.';
$strShowStatusFlush_commandsDescr  = 'Il numero di comandi FLUSH eseguiti.';
$strShowStatusHandler_commitDescr = 'Il numero di comandi interni COMMIT eseguiti.';
$strShowStatusHandler_deleteDescr = 'Il numero di volte in cui una riga è stata cancellata da una tabella.';
$strShowStatusHandler_discoverDescr = 'Il server MySQL può chiedere al motore di storage NDB Cluster se conosce una tabella sulla base di un nome dato. Questo è chaiamto discovery. Handler_discover indica il numero di volte che una tabella è stata trovata.';
$strShowStatusHandler_read_firstDescr = 'Il numero di volte che il primo valore è stato letto da un indice. Se è troppo alto è probabile che il server stia facendo molte scansioni complete degli indici; per esempio, SELECT col1 FROM foo, assumento che col1 sia indicizzata.';
$strShowStatusHandler_read_keyDescr = 'Il numero di richieste per leggere una riga basata su di una chiave. Se è alta, è un buon indice che le tue query e le tue tabelle sono correttamente indicizzate.';
$strShowStatusHandler_read_nextDescr = 'Il numero di richieste per leggere la riga successiva nell\'ordine delle chiavi. Questo valore è incrementato se stai facendo una query su di una colonna indice con un range costante, oppure se stai facendo una scansione degli indici.';
$strShowStatusHandler_read_prevDescr = 'Il numero di richieste per leggere la riga precedente nell\'ordine delle chiavi. Questo metodo di lettura è principalmente utilizzato per ottimizzare ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Il numero di richieste per leggere una riga basata su una posizione fissa. Questo valore è alto se stai facendo molte richieste che richiedono un ordinamento dei risultati. Probabilmente hai molte query che che richiedono a MySQL di leggere l\'intera tabella oppure ci sono dei joins che non usano le chiavi correttamente.';
$strShowStatusHandler_read_rnd_nextDescr = 'Il numero di richieste per leggere la riga successiva in un file di dati. Questo valore è alto se stai facendo molte scansioni della tabella. Generalmente è un segnale che le tue tabelle non sono correttamente indicizzate, o che le query non sono state scritte per trarre vantaggi dagli indici che hai.';
$strShowStatusHandler_rollbackDescr = 'Il numero di comandi ROLLBACK interni.';
$strShowStatusHandler_updateDescr = 'Il numero di richieste per aggiornare una riga in una tabella.';
$strShowStatusHandler_writeDescr = 'Il numero di richieste per inserire una riga in una tabella.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Il numero di pagine che contengono dati (sporchi o puliti).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Il numero di pagine attualmente sporche.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Il numero di buffer pool pages che hanno avuto richiesta di essere aggiornate.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Il numero di pagine libere.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Il numero di pagine bloccate in un InnoDB buffer pool. Queste pagine sono attualmente in lettura o in scittura e non possono essere aggiornate o rimosse per altre ragioni.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'Il numero di pagine occupate perchè sono state allocate per amministrazione, come row locks o per hash index adattivi. Questo valore può essere calcolato come Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Il numero totale di buffer pool, in pagine.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Il numero di read-aheads "random" InnoDB iniziate. Questo accade quando una query legge una porzione di una tabella, ma in ordine casuale.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Il numero di read-aheads InnoDB sequanziali. Questo accade quando InnoDB esegue una scansione completa sequenziale di una tabella.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Il numero di richieste logiche che InnoDb ha fatto.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Il numero di richieste logiche che InnoDB non può soddisfare dal buffer pool e che devono fare una lettura di una pagina singola.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalmente le sritture nel buffer pool InnoDB vengono effettuate in background. Tuttavia se è necessario leggere o creare una pagina, e non sono disponibile pagine pulite è necessario attendere che le pagine siano aggiornate prima. Questo contatore conta le istanze di queste attese. Se la dimesione del buffer pool è stata settata correttamente questo valore dovrebbe essere basso.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Il numero di scritture effettuate nel buffer pool InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Il numero delle operazioni fsync() fino ad ora.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Il numero di operazioni fsync() in attesa.';
$strShowStatusInnodb_data_pending_readsDescr = 'Il numero di letture in attesa.';
$strShowStatusInnodb_data_pending_writesDescr = 'Il numero di scritture in attesa.';
$strShowStatusInnodb_data_readDescr = 'La quantità di dati letti fino ad ora, in bytes.';
$strShowStatusInnodb_data_readsDescr = 'Il numero totale di dati letti.';
$strShowStatusInnodb_data_writesDescr = 'Il numero totale di dati scritti.';
$strShowStatusInnodb_data_writtenDescr = 'La quantità di dati scritti fino ad ora, in bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Il numero di scritture doublewrite che sono state eseguite ed il numero che sono state scritte a questo scopo.';
$strShowStatusInnodb_dblwr_writesDescr = 'Il numero di scritture doublewrite che sono state eseguite ed il numero che sono state scritte a questo scopo.';
$strShowStatusInnodb_log_waitsDescr = 'Il numero di attese che abbiamo avuto perchè il buffer di log era troppo piccolo e abbiamo duvuto attendere che fosse aggiornato prima di continuare.';
$strShowStatusInnodb_log_write_requestsDescr = 'Il numero di richieste di scrittura dei log.';
$strShowStatusInnodb_log_writesDescr = 'Il numero scritture fisiche del log file.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Il numero di scritture fsync fatte sul log file.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Il numero degli fsyncs in sospeso sul log file.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Il numero di scritture in sospeso sul log file.';
$strShowStatusInnodb_os_log_writtenDescr = 'Il numero di bytes scritti sul log file.';
$strShowStatusInnodb_pages_createdDescr = 'Il numero di pagine create.';
$strShowStatusInnodb_page_sizeDescr = 'La dimesione di-compilazione delle pagine InnoDB (default 16KB). Molti valori sono conteggiati nelle pagine; la dimesione delle pagine permette di convertirli facilmente in bytes.';
$strShowStatusInnodb_pages_readDescr = 'Il numero di pagine lette.';
$strShowStatusInnodb_pages_writtenDescr = 'Il numero di pagine scritte.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Il numero di row locks attualmente in attesa.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Il tempo medio per l\'acquisizione di un row lock, in millisecondi.';
$strShowStatusInnodb_row_lock_timeDescr = 'Il tempo totale per l\'acquisizione di un row locks, in millisecondi.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Il tempo massimo per l\'acquisizione di un row lock, in millisecondi.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Il numero di volte che un row lock ha dovuto attendere.';
$strShowStatusInnodb_rows_deletedDescr = 'Il numero di righe cancellate da una tabella InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'Il numero di righe inserite da una tabella InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'Il numero di righe lette da una tabella InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'Il numero di righe aggiornate da una tabella InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'Il numero di blocchi chaive aggiunti nella cache chiave che sono stati cambiati, ma che non sono stai aggiornati su disco. E\' conosciuto con il nome di Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Il numero di blocchi non usati nella cache chiave. Puoi usare questo valore per determinare quanta cache chiave è in uso.';
$strShowStatusKey_blocks_usedDescr = 'Il numero di blocchi usati nella cache chiave. The number of used blocks in the key cache. Questo valore è un\'importante segnale che indica il numero massimo di blocchi che sono stati in uso contemporaneamente.';
$strShowStatusKey_read_requestsDescr = 'Il numero di richieste per le ggere un blocco chiave dalla cache.';
$strShowStatusKey_readsDescr = 'Il numero di letture fisiche dal disco di un blocco chiave. Se Key_reads è grande allora il valore key_buffer_size è probabilmente troppo piccolo. IIl rapporto di cache miss rate può essere calcolato come Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Il numero di richieste per scrivere una blocco chiave nella cache.';
$strShowStatusKey_writesDescr = 'Il numero di scritture fisiche di un blocco chiave sul disco.';
$strShowStatusLast_query_costDescr = 'Il costo totale dell\'ultima query compilata così come computato dall\'ottimizzatore delle query. Utile per comparare il costo di differenti query per la stessa operazione di query. Il valore di default è 0, che significa che nessuna query è stata ancora compilata.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'In numero di righe in attesa di essere scritte nella coda INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Il numero di tabelle che sono state aperte. Se il valore opened_tables è grande, probabilmente il valore di table cache è troppo piccolo.';
$strShowStatusOpen_filesDescr = 'Il numero di file che sono aperti.';
$strShowStatusOpen_streamsDescr = 'il numero di stream che sono aperti (usato principalmente per il logging).';
$strShowStatusOpen_tablesDescr = 'Il numero di tabelle che sono aperte.';
$strShowStatusQcache_free_blocksDescr = 'Il numero di blocchi di memoria liberi nella cache delle query.';
$strShowStatusQcache_free_memoryDescr = 'L\'ammontare di memoria libera nella cache delle query.';
$strShowStatusQcache_hitsDescr = 'Il numero di cache hits.';
$strShowStatusQcache_insertsDescr = 'Il numero di query aggiunte alla cache.';
$strShowStatusQcache_lowmem_prunesDescr = 'Il numero di query che sono state rimosse dalla cache per liberare memoria per la cache di nuove query. Questa informazione può aiutarti per parametrare la dimensione della cache delle query. La cache delle query usa una strategia di "meno usate recentemente" (LRU - least recently used) per decidere quali query rimuovere dalla cache.';
$strShowStatusQcache_not_cachedDescr = 'Il numero di query non in cache (impossibilità di inserirle nella cache oppure non inserite per i settaggi del parametro query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Il numero di query registrate nella cache.';
$strShowStatusQcache_total_blocksDescr = 'Il numero totale di blocchi nella cache delle query.';
$strShowStatusReset = 'Reset';
$strShowStatusRpl_statusDescr = 'Lo sato delle repliche failsafe (non ancora implementato).';
$strShowStatusSelect_full_joinDescr = 'Il numero di joins che non usano gli indici. (Se questo valore non è 0, dovresti controllare attentamente gli indici delle tue tabelle.)';
$strShowStatusSelect_full_range_joinDescr = 'Il numero di joins che usano una ricerca limitata su di una tabella di riferimento.';
$strShowStatusSelect_range_checkDescr = 'Il numero di joins senza chiavi che controllano per l\'uso di una chiave dopo ogni riga. (Se questo valore non è 0, dovresti controllare attentamente gli indici delle tue tabelle.)';
$strShowStatusSelect_rangeDescr = 'Il numero di joins che usano un range sulla prima tabella. (Non è, solitamente, un valore critico anche se è grande.)';
$strShowStatusSelect_scanDescr = 'Il numero di join che hanno effettuato una scansione completa della prima tabella.';
$strShowStatusSlave_open_temp_tablesDescr = 'Il numero di tabelle temporaneamente aperte da processi SQL slave.';
$strShowStatusSlave_retried_transactionsDescr = 'Numero totale di volte (dalla partenza) in cui la replica slave SQL ha ritentato una transazione.';
$strShowStatusSlave_runningDescr = 'Questa chiave è ON se questo è un server slave connesso ad un server master.';
$strShowStatusSlow_launch_threadsDescr = 'Numero di processi che hanno impiegato più di "slow_launch_time" secondi per partire.';
$strShowStatusSlow_queriesDescr = 'Numero di query che hanno impiegato più di "long_query_time" seconds.';
$strShowStatusSort_merge_passesDescr = 'Il numero di fusioni passate all\'algoritmo di ordianemento che sono state fatte. Se questo valore è grande, dovresti incrementare la variabile di sistema sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Il numero di ordinamenti che sono stati eseguiti in un intervallo.';
$strShowStatusSort_rowsDescr = 'Il numero di righe ordinate.';
$strShowStatusSort_scanDescr = 'Il numero di ordinamenti che sono stati fatti leggendo la tabella.';
$strShowStatusTable_locks_immediateDescr = 'Il numero di volte che un table lock è stato eseguito immediatamente.';
$strShowStatusTable_locks_waitedDescr = 'Il numero di volte che un table lock è stato eseguito immediatamente ed era necessaria un\'attesa. Se è alto, potresti avere dei problemi con le performance, dovresti prima ottimizzare le query, oppure sia utilizzare le repliche, sia dividere le tabelle.';
$strShowStatusThreads_cachedDescr = 'Il numero dei processi nella cache dei processi. L\'hit rate della cache può essere calcolato come processi_creati/connessioni. Se questo valore è rosso devi aumentare la tua thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Il numero di connessioni correntemente aperte.';
$strShowStatusThreads_createdDescr = 'Il numero di processi creati per gestire le connessioni. Se Threads_created è grosso, devi probabilmente aumentare il valore thread_cache_size. (Normalmente questo non fornisce un significatico incremento delle performace se hai una buona implementazione dei processi.)';
$strShowStatusThreads_runningDescr = 'Il numero di processi non in attesa.';
$strShowTableDimension = 'Mostra la dimensione delle tabelle';
$strShowTables = 'Mostra le tabelle';
$strShowThisQuery = 'Mostra questa query di nuovo';
$strSimplifiedChinese = 'Cinese Semplificato';
$strSingly = '(singolarmente)';
$strSize = 'Dimensione';
$strSkipQueries = 'Numero di record (query) da saltare a partire dall\'inizio';
$strSlovak = 'Slovacco';
$strSlovenian = 'Sloveno';
$strSmallBigAll = 'Piccolo/grande';
$strSnapToGrid = 'Calamita alla griglia';
$strSocketProblem = '(o il socket del server locale MySQL non è correttamente configurato)';
$strSortByKey = 'Ordina per chiave';
$strSorting = 'Ordinando';
$strSort = 'Ordinamento';
$strSpaceUsage = 'Spazio utilizzato';
$strSpanish = 'Spagnolo';
$strSplitWordsWithSpace = 'Le parole sono spezzate sulle spaziature (" ").';
$strSQLCompatibility = 'Modo di compatibilità SQL';
$strSQLExportType = 'Tipo di esportazione';
$strSQLParserBugMessage = 'C\'è la possibilità che ci sia un bug nel parser SQL. Per favore, esaminate la query accuratamente, e controllate che le virgolette siano corrette e non sbagliate. Altre possibili cause d\'errori possono essere che si stia cercando di uploadare un file binario al di fuori di un\'area di testo virgolettata. Si può anche provare la query MySQL dalla riga di comando di MySQL. L\'errore qui sotto restituito dal server MySQL, se ce n\'è uno, può anche aiutare nella diagnostica del problema. Se ci sono ancora problemi, o se il parser SQL di phpMyAdmin sbaglia quando invece l\'interfaccia a riga di comando non mostra problemi, si può ridurre la query SQL in ingresso alla singola query che causa problemi, e inviare un bug report con i dati riportati nella sezione CUT qui sotto:';
$strSQLParserUserError = 'Pare che ci sia un errore nella query SQL immessa. L\'errore del server MySQL mostrato qui sotto, se c\'è, può anche aiutare nella risoluzione del problema';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Risultato SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identificatore Non Valido';
$strSQPBugUnclosedQuote = 'Virgolette Non Chiuse';
$strSQPBugUnknownPunctuation = 'Stringa di Punctuation Sconosciuta';
$strStandInStructureForView = 'Struttura Stand-in per le viste';
$strStatCheckTime = 'Ultimo controllo';
$strStatCreateTime = 'Creazione';
$strStatement = 'Istruzioni';
$strStatisticsOverrun = 'Su di un server sovraccarico, il contatore dei bytes potrebbe incrementarsi, e per questa ragione le statistiche riportate dal server MySQL potrebbero non essere corrette.';
$strStatUpdateTime = 'Ultimo cambiamento';
$strStatus = 'Stato';
$strStorageEngine = 'Motore di Memorizzazione';
$strStorageEngines = 'Motori di Memorizzazione';
$strStrucCSV = 'dati CSV';
$strStrucData = 'Struttura e dati';
$strStrucExcelCSV = 'CSV per dati MS Excel';
$strStrucNativeExcel = 'Dati nativi di MS Excel';
$strStrucOnly = 'Solo struttura';
$strStructPropose = 'Proponi la struttura della tabella';
$strStructureForView = 'Struttura per la vista';
$strStructure = 'Struttura';
$strSubmit = 'Invia';
$strSuccess = 'La query è stata eseguita con successo';
$strSuhosin = 'Sul server è in esecuzione Suhosin. Controlla la documentazione: %sdocumentation%s per possibili problemi.';
$strSum = 'Totali';
$strSwedish = 'Svedese';
$strSwitchToDatabase = 'Passare al Database copiato';
$strSwitchToTable = 'Passa alla tabella copiata';

$strTableAlreadyExists = 'La tabella %s esiste già!';
$strTableComments = 'Commenti sulla tabella';
$strTableEmpty = 'Il nome della tabella è vuoto!';
$strTableHasBeenDropped = 'La tabella %s è stata eliminata';
$strTableHasBeenEmptied = 'La tabella %s è stata svuotata';
$strTableHasBeenFlushed = 'La tabella %s è stata inizializzata';
$strTableIsEmpty = 'La tabella sembra essere vuota!';
$strTableMaintenance = 'Amministrazione tabella';
$strTableName = 'Nome tabella';
$strTableOfContents = 'Tabella dei contenuti';
$strTableOptions = 'Opzioni della tabella';
$strTables = '%s tabella(e)';
$strTableStructure = 'Struttura della tabella';
$strTable = 'Tabella';
$strTakeIt = 'prendilo';
$strTblPrivileges = 'Privilegi relativi alle tabelle';
$strTempData = 'Dati temporanei';
$strTextAreaLength = ' A causa della sua lunghezza,<br /> questo campo non può essere modificato ';
$strThai = 'Thai';
$strThemeDefaultNotFound = 'Tema di default %s non trovato!';
$strThemeNoPreviewAvailable = 'Nessuna preview disponibile.';
$strThemeNotFound = 'Tema %s non trovato!';
$strThemeNoValidImgPath = 'Nessun percorso per le immagini per il tema %s trovato!';
$strThemePathNotFound = 'Percorso per il tema non trovato %s!';
$strTheme = 'Tema / Stile';
$strThisHost = 'Questo Host';
$strThreads = 'Processi';
$strThreadSuccessfullyKilled = 'Il thread %s è stato terminato con successo.';
$strTimeoutInfo = 'Una precedente importazione è entrata in timeout, dopo un nuovo inoltro riprenderà dalla posizione: %d.';
$strTimeoutNothingParsed = 'Nell\'ultima esecuzione nessun dato è stato processato, questo, solitamente, vuole dire che che phpMyAdmin non è in grado di ultimare l\'operazione fino a che non verrà aumentato il parametro php time limits.';
$strTimeoutPassed = 'Superato il tempo limite dello script, se vuoi finire l\'importazione inoltra nuovamente il file e il processo riprenderà.';
$strTime = 'Tempo';
$strToFromPage = 'da/per pagina';
$strToggleScratchboard = '(dis)attiva scratchboard';
$strToggleSmallBig = 'Cambia grande/piccolo';
$strToSelectRelation = 'Per selezionare una relazione, click :';
$strTotal = 'Totali';
$strTotalUC = 'Totale';
$strTraditionalChinese = 'Cinese Tradizionale';
$strTraditionalSpanish = 'Spagnolo tradizionale';
$strTraffic = 'Traffico';
$strTransactionCoordinator = 'Coordinatore delle transazioni';
$strTransformation_application_octetstream__download = 'Visualizza un collegamento per trasferire i dati di un campo in formato binario.  La prima opzione è il nome del file binario.  La seconda opzione è un nome di campo possibile di una riga della tabella che contiene il nome di schedario.  Se fornite una seconda opzione dovete avere la prima opzione settata ad una stringa vuota';
$strTransformation_application_octetstream__hex = 'Mostra una rappresentazione esadecimale dei dati. Il primo parametro, opzionale, specifica ogni quanto deve essere aggiunto uno spazio (default a 2 nibbles).';
$strTransformation_image_jpeg__inline = 'Mostra un thumbnalil cliccabile; opzioni: larghezza,altezza in pixel (mantiere la proporzione iniziale)';
$strTransformation_image_jpeg__link = 'Mostra un link a questa immagine (download blob diretto, i.e.).';
$strTransformation_image_png__inline = 'Vedi immagine/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Mostra i campi TIME, TIMESTAMP, DATETIME o il TIMESTAMP UNIX come data formattata. La prima opzione è l\'offset (in ore) che verrà aggiunto all\'ora (Default: 0). Usare la seconda opzione per specificare un differente formato di data/ora. La terza opzione determina se vuoi vedere l\'ora locale o UTC (usa "local" o "utc" per questo). In relazione a questo, il formato data ha differenti valori - per "local" guarda la documentazione della funzione PHP strftime(); per "utc" viene usata la funzione gmdate().';
$strTransformation_text_plain__external = 'SOLO PER LINUX: Lancia un\'applicazione esterna e riempie i dati dei campi tramite lo standard input. Restituisce lo standard output dell\'applicazione. L\'impostazione predefinita è Tidy, per stampare in maniera corretta il codice HTML. Per motivi di sicurezza, dovete editare manualmente il file libraries/transformations/text_plain__external.inc.php e inserire gli strumenti che permettete di utilizzare. La prima opzione è così il numero del programma che volete utilizzare e la seconda sono i parametri per il programma. Il terzo parametro, se impostato a 1 convertirà l\'output utilizzando htmlspecialchars() (Predefinito: 1). Un quarto parametro, se impostato a 1 inserirà un NOWRAP al contenuto della cella così che l\'intero output sarà mostrato senza essere riformattato (Predefinito: 1)';
$strTransformation_text_plain__formatted = 'Preserva l\'originale formattazione del campo. Nessun Escaping viene applicato.';
$strTransformation_text_plain__imagelink = 'Mostra un collegamento ad una immagine esterna; il campo contiene il nome del file; la prima opzione è un prefisso come "http://tuodominio.com/", la seconda opzione è la larghezza in pixel, la terza è l\'altezza.';
$strTransformation_text_plain__link = 'Mostra un collegamento, il campo contiene il nome del file; la prima opzione è un prefisso come "http://tuodominio.com/", la seconda opzione è un titolo per il collegamento.';
$strTransformation_text_plain__sql = 'Formatta il testo come query SQL con evidenziazione della sintassi.';
$strTransformation_text_plain__substr = 'Mostra soltanto una parte della stringa. La prima opzione è l\'offset che serve a definire dove inizia l\'output del vostro testo (Prefinito: 0). La seconda opzione è un offset che indica quanto testo viene restituito. Se vuoto, restituisce tutto il testo rimanente. La terza opzione definisce quali caratteri saranno aggiunti in fondo all\'output quando una soptto-stringa viene restituita (Predefinito: ...) .';
$strTriggers = 'Triggers';
$strTruncateQueries = 'Tronca le Query Mostrate';
$strTurkish = 'Turco';
$strType = 'Tipo';

$strUkrainian = 'Ucraino';
$strUncheckAll = 'Deseleziona tutti';
$strUnicode = 'Unicode';
$strUnique = 'Unica';
$strUnknown = 'sconosciuto';
$strUnselectAll = 'Deseleziona Tutto';
$strUnsupportedCompressionDetected = 'Stai cercando di importare un file con un tipo di compressione non supportato. Altrimenti il supporto per questo tipo di compressione non è stato ancora implementato o è stato disabilitato dalla tua configurazione.';
$strUpdatePrivMessage = 'Hai aggiornato i permessi per %s.';
$strUpdateProfileMessage = 'Il profilo è stato aggiornato.';
$strUpdateQuery = 'Aggiorna Query';
$strUpdComTab = 'Prego leggere la documentazione su come aggiornare la vostra tabella Column_comments';
$strUpgrade = 'Si dovrebbe aggiornare %s alla versione %s o successiva.';
$strUploadErrorCantWrite = 'Non riesco a scrivere il file su disco.';
$strUploadErrorExtension = 'Caricamento del file interrotto per estensione errata.';
$strUploadErrorFormSize = 'Il file caricato eccede il parametro MAX_FILE_SIZE specificato nel form HTML.';
$strUploadErrorIniSize = 'Il file caricato eccede il parametro upload_max_filesize in php.ini.';
$strUploadErrorNoTempDir = 'Non trovo la cartella temporanea.';
$strUploadErrorPartial = 'Il file è stato solo parzialmente caricato.';
$strUploadErrorUnknown = 'Errore sconosciuto nel caricamento del file.';
$strUploadLimit = 'Stai probabilmente cercando di uplodare un file troppo grosso. Fai riferimento alla documentazione %sdocumentation%s Per i modi di aggirare questo limite.';
$strUploadsNotAllowed = 'Non è permesso l\'upload dei file su questo server.';
$strUsage = 'Utilizzo';
$strUseBackquotes = 'Usa i backquotes con i nomi delle tabelle e dei campi';
$strUsedPhpExtensions = 'Estensioni PHP usate';
$strUseHostTable = 'Utilizza la Tabella dell\'Host';
$strUserAlreadyExists = 'L\'utente %s esiste già!';
$strUserEmpty = 'Il nome utente è vuoto!';
$strUserName = 'Nome utente';
$strUserNotFound = 'L\'utente selezionato non è stato trovato nella tabella dei privilegi.';
$strUserOverview = 'Vista d\'insieme dell\'utente';
$strUsersDeleted = 'Gli utenti selezionati sono stati cancellati con successo.';
$strUsersHavingAccessToDb = 'Utenti che hanno accesso a &quot;%s&quot;';
$strUser = 'Utente';
$strUseTabKey = 'Usare il tasto TAB per spostare il cursore di valore in valore, o CTRL+frecce per spostarlo altrove';
$strUseTables = 'Utilizza tabelle';
$strUseTextField = 'Utilizza campo text';
$strUseThisValue = 'Usa questa opzione';

$strValidateSQL = 'Valida SQL';
$strValidatorError = 'L\' SQL validator non può essere inizializzato. Prego controllare di avere installato le estensioni php necessarie come descritto nella %sdocumentazione%s.';
$strValue = 'Valore';
$strVar = 'Variabile';
$strVersionInformation = 'Informazioni sulla versione';
$strViewDumpDatabases = 'Visualizza il dump (schema) dei databases';
$strViewDumpDB = 'Visualizza dump (schema) del database';
$strViewDump = 'Visualizza dump (schema) della tabella';
$strViewHasBeenDropped = 'La vista %s è stata eliminata';
$strViewMaxExactCount = 'Questa vista ha più di %d righe. Per informazioni fare riferimento a %sdocumentation%s.';
$strViewName = 'Nome VISTA';
$strView = 'Vista';

$strWebServerUploadDirectory = 'directory di upload del web-server';
$strWebServerUploadDirectoryError = 'La directory impostata per l\'upload non può essere trovata';
$strWelcome = 'Benvenuto in %s';
$strWestEuropean = 'Europeo Occidentale';
$strWildcard = 'wildcard';
$strWindowNotFound = 'La finestra destinataria del browser non può essere aggiornata. Può darsi che sia stata chiusa la finestra madre o che il vostro browser stia bloccando gli aggiornamenti fra browsers a causa di qualche impostazione di sicurezza';
$strWithChecked = 'Se selezionati:';
$strWriteRequests = 'Richieste di scrittura';
$strWrongUser = 'Nome utente o password errati. Accesso negato.';

$strXML = 'XML';

$strYes = 'Sì';

$strZeroRemovesTheLimit = 'N.B.: 0 (zero) significa nessun limite.';
$strZip = '"compresso con zip"';

?>

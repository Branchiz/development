<?php
/* $Id: catalan-utf-8.inc.php 11159 2008-03-07 17:59:01Z lem9 $ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' d'esquerra a dreta, 'rtl' de dreta a esquerra)
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// abreviatures de Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$timespanfmt = '%s dies, %s hores, %s minuts i %s segons';

$day_of_week = array('Diu', 'Dll', 'Dma', 'Dcr', 'Dij', 'Div', 'Dis');
$month = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dec');
// Veure http://www.php.net/manual/es/function.strftime.php per a definir
// la variable seguent
$datefmt = '%d-%m-%Y a les %H:%M:%S';

$strAbortedClients = 'Avortat';
$strAccessDenied = 'Accés denegat';
$strAccessDeniedCreateConfig = 'La raó més probable d\'aixó és que no heu creat l\'arxiu de configuració. Podriau voler utilitzar %1$ssetup script%2$s per crear-ne un.';
$strAccessDeniedExplanation = 'phpMyAdmin ha intentat connectar amb el servidor de MySQL, pero el servidor ha rebutjat la connexió. Comprova el host, el num d\' usuari i la contrasenya a l\'arxiu config.inc.php i mira que es correspongui amb la informació facilitada per l\' administrador del servidor de MySQL.';
$strAction = 'Acció';
$strAddAutoIncrement = 'Afegir valor AUTO_INCREMENT';
$strAddClause = 'Afegir %s';
$strAddConstraints = 'Afegir restriccions';
$strAddDeleteColumn = 'Afegir/esborrar Camps de Columna';
$strAddDeleteRow = 'Afegir/esborrar fila de criteri';
$strAddFields = 'Afegir %s camp(s)';
$strAddHeaderComment = 'Afegir comentari personalitzat a la capçalera (\\n divideix linies)';
$strAddIntoComments = 'Afegir en comentaris';
$strAddNewField = 'Afegir un camp nou';
$strAddPrivilegesOnDb = 'Afegir permissos a la següent base de dades';
$strAddPrivilegesOnTbl = 'Afegir permissos a la següent taula';
$strAddSearchConditions = 'Afegeix condicions de recerca (cos de la clàusula "WHERE"):';
$strAddToIndex = 'Afegir a l\'índex %s columna(es) &nbsp;';
$strAddUser = 'Afegir un usuari nou';
$strAddUserMessage = 'Has afegit un usuari nou.';
$strAdministration = 'Administració';
$strAffectedRows = 'Files afectades:';
$strAfter = 'Darrere de %s';
$strAfterInsertBack = 'Tornar';
$strAfterInsertNewInsert = 'Insereix un nou registre';
$strAfterInsertNext = 'Editar el següent registre'; 
$strAfterInsertSame = 'Tornar a aquesta pàgina';
$strAllowInterrupt = 'Permetre l\'interrupció de l\'importació en cas de que l\'arxiu d\'ordres detecti que s\'acosta el limit del temps. Pot ser una bona solució per importar arxius grans, però pot trencar transaccions.';
$strAllTableSameWidth = 'Mostrar totes les taules amb la mateixa amplada?';
$strAll = 'Tot';
$strAlterOrderBy = 'Altera la taula i ordena per';
$strAnalyzeTable = 'Analitza la taula';
$strAnd = 'I';
$strAndThen = 'i llavors';
$strAngularLinks = 'Enllaços angulars';
$strAnIndex = 'S\'ha afegit un índex a %s';
$strAnyHost = 'Qualsevol servidor';
$strAny = 'Qualsevol';
$strAnyUser = 'Qualsevol usuari';
$strApproximateCount = 'Pot ser aproximat. Veieu PFC (FAQ) 3.11';
$strAPrimaryKey = 'S\'ha afegit una clau principal a %s';
$strArabic = 'Àrab';
$strArmenian = 'Armeni';
$strAscending = 'Ascendent';
$strAtBeginningOfTable = 'Al principi de la taula';
$strAtEndOfTable = 'Al final de la taula';
$strAttr = 'Atributs';
$strAutomaticLayout = 'Disseny automàtic';

$strBack = 'Enrere';
$strBaltic = 'Bàltic';
$strBeginCut = 'INICI DEL TALL';
$strBeginRaw = 'INICI DEL BOLCAT';
$strBinary = ' Binari ';
$strBinaryDoNotEdit = ' Binari - no editeu ';
$strBinaryLog = 'Registre binari';
$strBinLogEventType = 'Tipus d\'event';
$strBinLogInfo = 'Informació';
$strBinLogName = 'Nom del registre';
$strBinLogOriginalPosition = 'Posició original';
$strBinLogPosition = 'Posició';
$strBinLogServerId = 'ID de Servidor';
$strBookmarkAllUsers = 'Deixar accedir a cada usuari a aquesta consulta desada';
$strBookmarkCreated = '%s creat com a consulta desada';
$strBookmarkDeleted = 'S\'ha esborrat la consulta desada.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta SQL desada';
$strBookmarkReplace = 'Reemplaçar una consulta desada ja existent amb el mateix nom';
$strBookmarkThis = 'Desa aquesta consulta SQL';
$strBookmarkView = 'Només mirar';
$strBrowseDistinctValues = 'Navega per valors diferents';
$strBrowseForeignValues = 'Navega valors externs';
$strBrowse = 'Navega';
$strBufferPoolActivity = 'Activitat de la Memòria intermitja';
$strBufferPool = 'Grup de memòries intermitges';
$strBufferPoolUsage = 'Ús del grup de memòries intermitges';
$strBufferReadMissesInPercent = 'Lectures omeses en %';
$strBufferReadMisses = 'Lectures omeses';
$strBufferWriteWaits = 'Esperes d\'escriptura';
$strBufferWriteWaitsInPercent = 'Esperes d\'escriptura en %';
$strBulgarian = 'Búlgar';
$strBusyPages = 'Pàgines ocupades';
$strBzError = 'phpMyAdmin és incapaç de comprimir el bolcat degut a una extensió Bz2 incorrecta en aquesta versió de php. És molt recomenable posar a la directiva <code>$cfg[\'BZipDump\']</code> el valor <code>FALSE</code> a l\'arxiu de configuració de phpMyAdmin. Si vols utilitzar les facilitats de compresió Bz2, és necessari actualitzar el php a la darrera versió disponible. Es pot consultar el informe d\'errada %s de php per a més detalls.';
$strBzip = '"comprimit amb bzip"';

$strCalendar = 'Calendari';
$strCancel = 'Cancel.lar';
$strCanNotLoadExportPlugins = 'No es poden carregar les extensions d\'exportació, comprova l\'instal.lació!';
$strCanNotLoadImportPlugins = 'No es poden carregar les extensions d\'importació, comprova l\'instal.lació!';
$strCannotLogin = 'No podem connectar amb el servidor MySQL';
$strCantLoad = 'No puc carregar l\'extensió %s,<br />Comprova la configuració de PHP.';
$strCantLoadRecodeIconv = 'No es pot carregar iconv o recodificar una extensió necessària per la conversió de jocs de caràcters, Configura php per permetre l\'ús d\'aquestes extensions o bé desactiva la conversió de jocs de caràcters en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No pots canviar el nom d\'un índex a "PRIMARY"!';
$strCantUseRecodeIconv = 'No es pot utilitzar iconv ni libiconv ni la funció recode_string mentre es carrega l\'extensió d\'informes. Comprova la configuració de php.';
$strCardinality = 'Cardinalitat';
$strCaseInsensitive = 'No sensible a majúscules';
$strCaseSensitive = 'sensible a majúscules';
$strCentralEuropean = 'Europa Central';
$strChange = 'Canvi';
$strChangeCopyModeCopy = '... respecta l\'antic.';
$strChangeCopyMode = 'Crea un nou usuari amb els mateixos permissos i ...';
$strChangeCopyModeDeleteAndReload = ' ... esborra l\'antic de les taules d\'usuaris i recarrega els permissos després.';
$strChangeCopyModeJustDelete = ' ... esborra l\'antic de les taules d\'usuaris.';
$strChangeCopyModeRevoke = ' ... treu tots els permissos actius de l\'antic i esborra\'l després.';
$strChangeCopyUser = 'Canvi d\'Informació de Connexió / Copia d\'Usuari';
$strChangeDisplay = 'Tria el camp a mostrar';
$strChangePassword = 'Canvi de contrasenya';
$strCharset = 'Joc de Caracters';
$strCharsetOfFile = 'Joc de caràcters de l\'arxiu:';
$strCharsetsAndCollations = 'Jocs de Caracters i ordenacions';
$strCharsets = 'Jocs de caracters';
$strCheckAll = 'Marcar-ho tot';
$strCheckOverhead = 'Comprovar taules desfragmentades';
$strCheckPrivs = 'Comprova els Permissos';
$strCheckPrivsLong = 'Comprova els Permissos per la Base de dades &quot;%s&quot;.';
$strCheckTable = 'Verifica la taula';
$strChoosePage = 'Tria una pàgina per editar';
$strColComFeat = 'Mostrant comentaris de les columnes';
$strCollation = 'Ordenació';
$strColumnNames = 'Nom de les columnes';
$strColumnPrivileges = 'Permissos específics de columna';
$strCommand = 'Ordre';
$strComments = 'Comentaris';
$strCommentsForTable = 'COMENTARIS PER LA TAULA';
$strCompatibleHashing = 'Compatible amb MySQL&nbsp;4.0';
$strCompleteInserts = 'Completar insercions';
$strCompression = 'Compressió';
$strCompressionWillBeDetected = 'La compresió de l\'arxiu importat es detectarà automàticament des de: %s';
$strConfigDefaultFileError = 'No es pot carregar la configuració per defecte des de: "%1$s"';
$strConfigFileError = 'phpMyAdmin és incapaç de llegir l\'arxiu de configuració!<br />Això pot succeir si php troba un error sintàctic en ell o bé php no pot trobar l\'arxiu.<br />Intenta obrir l\'arxiu de configuració directament fent servir l\'enllaç següent i comprova el(s) missatge(s) d\'error que rebs. En moltes ocasions una coma o punt i coma falta en algun lloc.<br />Si rebs una pàgina en blanc, tot està bé.';
$strConfigureTableCoord = 'Configura les coordinades per la taula %s';
$strConnectionError = 'No puc connectar: paràmetres incorrectes.';
$strConnections = 'Connexions';
$strConstraintsForDumped = 'Restriccions per taules bolcades';
$strConstraintsForTable = 'Restriccions per la taula';
$strControluserFailed = 'La connexió de l\'usuari de control ha fallat, tal com està definida ara a la configuració.';
$strCookiesRequired = 'A partir d\'aquest punt és necessari tenir les galetes (cookies) activades.';
$strCopy = 'Copiar'; 
$strCopyDatabaseOK = 'La Base de dades %s s\'ha copiat a %s';
$strCopyTable = 'Copia taula a (base-de-dades<b>.</b>taula):';
$strCopyTableOK = 'La taula %s s\'ha copiat a %s.';
$strCopyTableSameNames = 'No es pot copiar la taula sobre ella mateixa';
$strCouldNotKill = 'phpMyAdmin no pot cancelar el fil %s. Probablement, ja és tancat.';
$strCreate = 'Crear';
$strCreateDatabaseBeforeCopying = 'Inclou CREATE DATABASE abans de copiar';
$strCreateIndex = 'Crea un índex de columnes %s:&nbsp;';
$strCreateIndexTopic = 'Crea un nou índex';
$strCreateNewDatabase = 'Crea una nova base de dades';
$strCreateNewTable = 'Crear una taula nova a la base de dades %s';
$strCreatePage = 'Crea una nova Pàgina';
$strCreatePdfFeat = 'Creació de PDFs';
$strCreateRelation = 'Crear relació';
$strCreateTable  = 'Crear taula';
$strCreateUserDatabase = 'Base de dades per usuari';
$strCreateUserDatabaseName = 'Crear base de dades amb el mateix nom i atorgar tots els permissos';
$strCreateUserDatabaseNone = 'Cap';
$strCreateUserDatabaseWildcard = 'Atorgar tots els permissos en un nom comodí (nomusuari_%)';
$strCreationDates = 'Datas de Creació/Modificació/Comprovació';
$strCriteria = 'Criteris';
$strCroatian = 'Croata';
$strCSV = 'CSV';
$strCyrillic = 'Ciríl.lic';
$strCzechSlovak = 'Txec-Eslovac';
$strCzech = 'Txec';

$strDanish = 'Danès';
$strDatabase = 'Base de dades';
$strDatabaseEmpty = 'El nom de la base de dades és buit!';
$strDatabaseExportOptions = 'Opcions d\'exportació de Bases de Dades';
$strDatabaseHasBeenDropped = 'La Base de Dades %s s\'ha eliminat.';
$strDatabases = 'bases de dades';
$strDatabasesDropped = '%s Bases de dades s\'han esborrat correctament.';
$strDatabasesStatsDisable = 'Desactiva Estadístiques';
$strDatabasesStatsEnable = 'Activa Estadístiques';
$strDatabasesStats = 'Estadístiques de les bases de dades';
$strDatabasesStatsHeavyTraffic = 'Nota: Activant les estadístiques de Base de Dades aqui pot provocar elevat tràfic entre el servidor Web i el de MySQL.';
$strData = 'Dades';
$strDataDict = 'Diccionari de Dades';
$strDataOnly = 'Només dades';
$strDataPages = 'Pàgines contenint dades';
$strDBComment = 'Comentaris de la Base de Dades: ';
$strDBCopy = 'Copiar base de dades a';
$strDbIsEmpty = 'La base de dades sembla buida!';
$strDbPrivileges = 'Permissos especifics de Base de dades';
$strDBRename = 'Reanomenar base de dades a';
$strDbSpecific = 'específic de la base de dades';
$strDefault = 'Defecte';
$strDefaultEngine = '%s és el motor d\'emmagatzematge per defecte en aquest servidor MySQL.';
$strDefaultValueHelp = 'Per a valors per defecte, només entra un valor, sense barres invertides ni cometes, fent servir aquest format: a';
$strDefragment = 'Desfragmentar taula';
$strDelayedInserts = 'Usa insercions diferides';
$strDeleteAndFlushDescr = 'Aquesta és la forma més clara, pero recarregar els permissos pot tardar una mica.';
$strDeleteAndFlush = 'Esborra els usuaris i recarrega els permissos seguidament.';
$strDeletedRows = 'Files esborrades:';
$strDeleted = 'S\'ha esborrat la fila';
$strDelete = 'Esborrar';
$strDeleteNoUsersSelected = 'No s\han triat usuaris per esborrar!';
$strDeleteRelation = 'Esborrar relació';
$strDeleting = 'Esborrant %s';
$strDelimiter = 'Separador';
$strDelOld = 'La pàgina actual té referències a taules que no existeixen. Vols esborrar aquestes referències?';
$strDescending = 'Descendent';
$strDescription = 'Descripció';
$strDesigner = 'Dissenyador';
$strDesignerHelpDisplayField = 'El camp a visualitzar es mostra en rosa. Per establir/treure un camp com a camp de visualització, clica la icona "Tria camp a visualitzar", i clica també en el nom de camp adient.';
$strDictionary = 'diccionari';
$strDirectLinks = 'Enllaços directes';
$strDirtyPages = 'Pàgines brutes';
$strDisabled = 'Desactivat';
$strDisableForeignChecks = 'Desactivar comprovacions de claus externes';
$strDisplayFeat = 'Mostrar característiques';
$strDisplayOrder = 'Ordre del llistat:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Fer una "petició segons exemple" (comodí: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentació';
$strDoYouReally = 'Realment vols fer?';
$strDropDatabaseStrongWarning = 'Ets a punt d\' ELIMINAR completament una base de dades!';
$strDrop = 'Eliminar';
$strDropUsersDb = 'Esborra les bases de dades que tenen els mateixos noms que els usuaris.';
$strDumpingData = 'Bolcant dades de la taula';
$strDumpSaved = 'El bolcat s\'ha desat amb el nom d\'arxiu %s.';
$strDumpXRows = 'Bolcar %s files començant a la fila %s.';
$strDynamic = 'dinàmic';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar pàgines PDF';
$strEditPrivileges = 'Editar permissos';
$strEffective = 'Efectiu';
$strEmpty = 'Buidar';
$strEmptyResultSet = 'MySQL ha retornat un conjunt buit (p.e. cap fila).';
$strEnabled = 'Activat';
$strEncloseInTransaction = 'Incloure exportació en la transacció';
$strEndCut = 'FI DEL TALL';
$strEnd = 'Final';
$strEndRaw = 'FI DEL BOLCAT';
$strEngineAvailable = '%s està disponible en aquest servidor MySQL.';
$strEngineDisabled = '%s s\'ha desactivat en aquest servidor MySQL.';
$strEngines = 'Motors';
$strEngineUnsupported = 'Aquest servidor MySQL no suporta el motor d\'emmagatzematge %s.';
$strEnglish = 'Anglès';
$strEnglishPrivileges = ' Nota: Els noms dels privilegis del MySQL són en idioma anglès ';
$strError = 'Errada';
$strErrorInZipFile = 'Error en arxiu ZIP:';
$strErrorRelationAdded = 'Error: La relació no s\'ha afegit.';
$strErrorRelationExists = 'Error: La relació ja existeix.';
$strErrorRenamingTable = 'Error reanomenant la taula %1$s a %2$s';
$strErrorSaveTable = 'Error desant coordenades per al Dissenyador.';
$strEscapeWildcards = 'Els comodins _ i % han de marcar-se amb una \ per usar-los literalment';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonià ';
$strEvent = 'Esdevenivent';
$strExcelEdition = 'Edició per Excel';
$strExecuteBookmarked = 'Executa una consulta desada';
$strExplain = 'Explicació de l\'SQL';
$strExport = 'Exportar';
$strExportImportToScale = 'Exporta/Importa a escala';
$strExportMustBeFile = 'El tipus d\'exportació triat s\'ha de desar en un arxiu!';
$strExtendedInserts = 'Insercions ampliades';
$strExtra = 'Extra';

$strFailedAttempts = 'Intents erronis';
$strField = 'Camp';
$strFieldHasBeenDropped = 'S\'ha esborrat el camp %s';
$strFieldInsertFromFileTempDirNotExists = 'Error movent l\'arxiu pujat, consulta la FAQ 1.11';
$strFields = 'Camps';
$strFieldsEnclosedBy = 'Camps englobats per';
$strFieldsEscapedBy = 'Camps amb marca d\'escapada';
$strFieldsTerminatedBy = 'Camps acabats per';
$strFileAlreadyExists = 'L\'arxiu %s ja existeix al servidor, canvia el nom o marca l\'opció de sobreescriure.';
$strFileCouldNotBeRead = 'No es pot llegir l\'arxiu';
$strFileNameTemplateDescription = 'Aquest valor es interpretat usant %1$sstrftime%2$s, pel que podeu usar les cadenes de formateig de temps. Ademès, es faràn aquestes transformacions: %3$s. Altre text es deixarà sense variació.';
$strFileNameTemplateDescriptionDatabase = 'nom de base de dades';
$strFileNameTemplateDescriptionServer = 'nom de servidor';
$strFileNameTemplateDescriptionTable = 'nom de taula';
$strFileNameTemplate = 'Nom d\'arxiu de plantilla';
$strFileNameTemplateRemember = 'Recordar plantilla';
$strFiles = 'Arxius';
$strFileToImport = 'Arxiu a importar';
$strFixed = 'fixe';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin obté els permissos de l\'usuari directament de les taules de permissos de l\' MySQL. El contingut d\'aquestes taules pot diferir dels permissos que utilitza el servidor si s\'han fet canvis manualment. En aquest cas, es necessari %srecarregar els permissos%s abans de continuar.';
$strFlushQueryCache = 'Buidar la memòria intermèdia de consultes';
$strFlushTable = 'Buidar la memòria cau de la taula ("FLUSH")';
$strFlushTables = 'Sincronitzar (tancar) totes les taules';
$strFontSize = 'Tamany de lletra';
$strForeignKeyError = 'Error creant clau externa (comprova els tipus de dades)';
$strFormat = 'Format';
$strFormEmpty = 'Falta un valor al formulari !';
$strFreePages = 'Pàgines lliures';
$strFullText = 'Texts sencers';
$strFunction = 'Funció';
$strFunctions = 'Funcions';

$strGenBy = 'Generat per';
$strGeneralRelationFeat = 'Característiques generals de relacions';
$strGenerate = 'Generar'; 
$strGeneratePassword = 'Generar Contrasenya'; 
$strGenTime = 'Temps de generació';
$strGeorgian = 'Georgià';
$strGerman = 'Alemany';
$strGlobal = 'global';
$strGlobalPrivileges = 'Permissos generals';
$strGlobalValue = 'Valor global';
$strGo = 'Executar';
$strGrantOption = 'Atorgar';
$strGreek = 'Grec';
$strGzip = '"comprimit amb gzip"';

$strHandler = 'Gestor';
$strHasBeenAltered = 'ha estat alterada.';
$strHasBeenCreated = 'ha estat creada.';
$strHaveToShow = 'Has de triar al menys una columna per mostrar';
$strHebrew = 'Hebreu';
$strHelp = 'Ajuda';
$strHexForBLOB = 'Usa hexadecimal per a BLOB';
$strHide         = 'Amaga';
$strHideShowAll = 'Amaga/Mostra tot';
$strHideShowNoRelation = 'Amaga/Mostra taules sense relacions';
$strHome = 'Inici';
$strHomepageOfficial = 'Pàgina oficial del phpMyAdmin';
$strHostEmpty = 'El nom del servidor és buit!';
$strHost = 'Servidor';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Húngar';

$strIcelandic = 'Islandès';
$strId = 'ID';
$strIdxFulltext = 'Text sencer';
$strIEUnsupported = 'Internet Explorer no suporta aquesta funció.';
$strIgnoreDuplicates = 'Ignorar files duplicades';
$strIgnore = 'Ignora';
$strIgnoreInserts = 'Utilitzar "ignore inserts"';
$strImportExportCoords = 'Importa/Exporta coordenades per a esquema PDF';
$strImportFiles = 'Importar arxius';
$strImportFormat = 'Format de l\'arxiu importat';
$strImport = 'Importar';
$strImportSuccessfullyFinished = 'Importació finalitzada correctament, %d consultes executades.';
$strIndexes = 'Indexos';
$strIndexesSeemEqual = 'Els seguents indexos semblen iguals i un d\'ells s\'ha d\'esborrar:';
$strIndexHasBeenDropped = 'S\'ha esborrat l\'índex %s';
$strIndexName = 'Nom d\'índex:';
$strIndex = 'Índex';
$strIndexType = 'Tipus d\'índex:';
$strIndexWarningTable = 'Problemes amb els index de la taula `%s`';
$strInnoDBAutoextendIncrementDesc = ' La quantitat a incrementar per ampliar el tamany d\'una taula autoextensible quan estigui a punt d\'omplir-se.';
$strInnoDBAutoextendIncrement = 'Increment d\'autoextensió';
$strInnoDBBufferPoolSizeDesc = 'El tamany de memòria intermitja que InnoDB fa servir per desar les dades i indexos de les seves taules.';
$strInnoDBBufferPoolSize = 'Tamany de la memòria intermitja';
$strInnoDBDataFilePath = 'Arxius de dades';
$strInnoDBDataHomeDirDesc = 'La part comuna de la ruta al directori per tots els arxius de dades InnoDB.';
$strInnoDBDataHomeDir = 'Directori local de dades';
$strInnoDBPages = 'pàgines';
$strInnoDBRelationAdded = 'Afegida relació InnoDB';
$strInnodbStat = 'Estat InnoDB';
$strInsecureMySQL = 'El vostre arxiu de configuració té paràmetres (root sense contrasenya) que corresponen al compte privilegiat predetermitat de MySQL. El servidor MySQL està funcionant amb aquests valors, el que significa un forat de seguretat, i s\'exposa a intrusions, pel que recomanem la reparació urgent d\'aquest forat de seguretat.';
$strInsertAsNewRow = 'Inserir com a nova fila';
$strInsertedRowId = 'Id de la fila inserida:';
$strInsertedRows = 'Files Inserides:';
$strInsert = 'Insereix';
$strInternalNotNecessary = '* No es necessita una relació interna si ja existeix a InnoDB.';
$strInternalRelationAdded = 'Afegida relació interna';
$strInternalRelations = 'Relacions internes';
$strInUse = 'en ús';
$strInvalidAuthMethod = 'Mètode d\'identificació incorrecte establert a la configuració:';
$strInvalidColumnCount = 'El comptador de columnes ha de ser més gran que zero.';
$strInvalidColumn = 'S\'ha especificat una columna incorrecta (%s)!';
$strInvalidCSVFieldCount = 'Comptador de camps incorrecte en l\'entrada CSV a la línia %d.';
$strInvalidCSVFormat = 'Format incorrecte a l\'entrada CSV a la línia %d.';
$strInvalidCSVParameter = 'Paràmetre incorrecte per importació CSV: %s';
$strInvalidDatabase = 'Base de dades incorrecte';
$strInvalidFieldAddCount = 'Heu d\'afegir al menys un camp.';
$strInvalidFieldCount = 'La taula ha de tenir al menys un camp.';
$strInvalidLDIImport = 'Aquesta extensió no suporta importacions comprimides!';
$strInvalidRowNumber = '%d no és un num. vàlid de fila.';
$strInvalidServerHostname = 'Nom de host invàlid pel servidor %1$s. Si us plau, reviseu la configuració.';
$strInvalidServerIndex = 'Index de servidor invàlid: "%s"';
$strInvalidTableName = 'Nom de taula incorrecte';

$strJapanese = 'Japonès';
$strJoins = 'Unions';
$strJumpToDB = 'Vés a la Base de Dades &quot;%s&quot;.';
$strJustDeleteDescr = 'Els usuaris &quot;esborrats&quot; encara tindrán accés al servidor com fins ara mentre no es recarreguin els permissos.';
$strJustDelete = 'Només esborra els usuaris de les taules de permissos.';

$strKeepPass = 'No canviïs la contrasenya';
$strKeyCache = 'Memòria intermèdia de claus';
$strKeyname = 'Nom Clau';
$strKill = 'Finalitzar';
$strKnownExternalBug = 'La funcionalitat %s es veu afectada per un error conegut, veieu %s';
$strKorean = 'Coreà';

$strLandscape = 'Horitzontal';
$strLanguage = 'Idioma';
$strLanguageUnknown = 'Idioma desconegut: %1$s.';
$strLatchedPages = 'Pàgines inalterables';
$strLatexCaption = 'Titol de Taula';
$strLatexContent = 'Contingut de la taula __TABLE__';
$strLatexContinuedCaption = 'Continuació del Titol de taula';
$strLatexContinued = '(continúa)';
$strLatexIncludeCaption = 'Inclusió del titol de taula';
$strLatexLabel = 'Etiqueta de clau';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Estructura de la taula __TABLE__';
$strLatvian = 'Letó';
$strLDI = 'CSV usant LOAD DATA';
$strLDILocal = 'Usa clau LOCAL';
$strLengthSet = 'Longitud/Valors*';
$strLimitNumRows = 'registres per pàgina';
$strLinesTerminatedBy = 'Línies acabades amb';
$strLinkNotFound = 'No s\'ha trobat l\'enllaç ';
$strLinksTo = 'Enllaços a';
$strLithuanian = 'Lituà ';
$strLocalhost = 'Local';
$strLocationTextfile = 'Ubicació de l\'arxiu de text';
$strLogin = 'Identificació';
$strLoginInformation = 'Informació d\'Identificació';
$strLogout = 'Sortir';
$strLogPassword = 'Contrasenya:';
$strLogServer = 'Servidor';
$strLogUsername = 'Nom d\'Usuari:';
$strLongOperation = 'Aquesta operació pot ser bastant llarga. Procedim igualment?';

$strMaxConnects = 'max. connexions alhora';
$strMaximalQueryLength = 'Tamany màxim de la consulta creada';
$strMaximumSize = 'Tamany Màxim: %s%s';
$strMbExtensionMissing = 'No s\'ha trobat l\'extensió de PHP mbstring i sembla que feu servir un joc de caracters multibyte. Sense la extensió mbstring, phpMyAdmin és incapaç de dividir cadenes de text correctament i pot generar resultats inesperats.';
$strMbOverloadWarning = 'Teniu activada la funció mbstring.func_overload a la configuració del vostre PHP. Aquesta opció és incompatible amb phpMyAdmin i pot provocar la perdua de dades!';
$strMIME_available_mime = 'Tipus MIME disponibles';
$strMIME_available_transform = 'Transformacions disponibles';
$strMIME_description = 'Descripció';
$strMIME_MIMEtype = 'Tipus MIME';
$strMIME_nodescription = 'No hi ha cap descripció disponible per a aquesta transformació.<br />Demana a l\'autor qué fa %s.';
$strMIME_transformation_note = 'Per veure una llista d\'opcions de transformació disponibles i els seus tipus MIME de  transformació, prem a %sdescripcions de transformació%s';
$strMIME_transformation_options_note = 'Entra els valors per a transformar utilitzant aquest format: \'a\', 100, b,\'c\'...<br />Si mai necessites escriure una barra invertida ("\") o un apòstrof ("\'") entre aquests valors, posa una barra invertida devant (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strMIME_transformation_options = 'Opcions de Transformació';
$strMIME_transformation = 'Transformació del Navegador';
$strMIMETypesForTable = 'TIPUS MIME PER LA TAULA';
$strMIME_without = 'Els tipus MIME en cursiva no tenen funcions de transformació a part';
$strModifications = 'Les modificacions han estat desades';
$strModifyIndexTopic = 'Modifica un índex';
$strModify = 'Modificar';
$strMoveMenu = 'Menú Mou';
$strMoveTable = 'Mou taula a (base-de-dades<b>.</b>taula):';
$strMoveTableOK = 'Taula %s moguda a %s.';
$strMoveTableSameNames = 'No es pot moure la taula sobre ella mateixa!';
$strMultilingual = 'multilingüe';
$strMyISAMDataPointerSizeDesc = 'El tamany per defecte de l\'apuntador en bytes, usat en CREATE TABLE per a taules MyISAM quan no s\'especifica l\'opció MAX_ROWS.';
$strMyISAMDataPointerSize = 'Tamany de l\'apuntador de dades';
$strMyISAMMaxExtraSortFileSizeDesc = 'Si l\'arxiu temporal usat per creació ràpida d\'un índex MyISAM pot ser més gran que usant el cau principal per la quantitat especificada aquí, es recomana fer servir el cau principal.';
$strMyISAMMaxExtraSortFileSize = 'Màxim tamany per arxius temporals en creació d\'índex';
$strMyISAMMaxSortFileSizeDesc = 'El tamany màxim per arxius temporals de MySQL es permet usar-lo mentre es torna acrear un índex MyISAM (mentre es fa un REPAIR TABLE, ALTER TABLE, o LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Tamany màxim per arxius temporals de classificació';
$strMyISAMRecoverOptionsDesc = 'El modus per a recuperació automàtica en taules MyISAM corruptes, com s\'estableix via l\'opció d\'inici del servidor --myisam-recover.';
$strMyISAMRecoverOptions = 'Modus de recuperació automàtic';
$strMyISAMRepairThreadsDesc = 'Si aquest valor és més gran que 1, els índexos de taules  MyISAM es creen en paralel (cada índex en el seu propi fil) mentre s\'executa el procés de reparació per classificació.';
$strMyISAMRepairThreads = 'Reparar fils';
$strMyISAMSortBufferSizeDesc = 'Ârea assignada per classificar índexos MyISAM mentre es fa un REPAIR TABLE o mentre es creen índexos amb CREATE INDEX o ALTER TABLE.';
$strMyISAMSortBufferSize = 'Tamany de l\'àrea de classificació';
$strMySQLCharset = 'Joc de caràcters de MySQL';
$strMysqlClientVersion = 'Versió del client MySQL';
$strMySQLConnectionCollation = 'Ordenació de la connexió MySQL'; 
$strMysqlLibDiffersServerVersion = 'La teva llibreria MySQL de PHP MySQL versió %s és diferent del teu servidor MySQL versió %s. Aixó pot provocar comportaments inesperats.';
$strMySQLSaid = 'MySQL diu: ';
$strMySQLShowProcess = 'Mostrar processos';
$strMySQLShowStatus = 'Mostra la informació de funcionament del MySQL';
$strMySQLShowVars = 'Mostra les variables de sistema del MySQL';

$strName = 'Nom';
$strNext = 'Següent';
$strNoActivity = 'Sense activitat des de fa %s segons o més, entra de nou';
$strNoDatabases = 'No hi ha Bases de Dades';
$strNoDatabasesSelected = 'No s\'han triat Bases de dades.';
$strNoDataReceived = 'No s\'han rebut dades per importar. O bé no s\'ha especificat un nom d\'arxiu, o el tamany de l\'arxiu es més gran que el permés per la configuració del vostre PHP. Veieu PFC(FAQ) 1.16.';
$strNoDescription = 'Sense Descripció';
$strNoDetailsForEngine = 'No hi ha informació detallada de l\'estat disponible per a aquest motor d\'emmagatzematge.';
$strNoDropDatabases = 'Instrucció "DROP DATABASE" desactivada.';
$strNoExplain = 'Saltar l\'explicació de l\'SQL';
$strNoFilesFoundInZip = 'No s\'han trobat arxius dins de l\'arxiu ZIP!';
$strNoFrames = 'phpMyAdmin és més fàcil amb un navegador que <b>suporti marcs (frames)</b>.';
$strNoIndex = 'No s\'ha definit l\'índex!';
$strNoIndexPartsDefined = 'No s\'han definit parts de l\'índex!';
$strNoModification = 'Sense canvis';
$strNone = 'Res';
$strNo = 'No';
$strNoOptions = 'Aquest format no té opcions';
$strNoPassword = 'Sense contrasenya';
$strNoPermission = 'El servidor web no té permissos per a desar l\'arxiu %s.';
$strNoPhp = 'Sense codi PHP';
$strNoPrivileges = 'Sense permissos';
$strNoRights = 'No tens prou permissos per visualitzar aquesta informació!';
$strNoRowsSelected = 'No s\'han triat arxius';
$strNoSpace = 'No hi ha prou espai per desar  l\'arxiu %s.';
$strNoTablesFound = 'Base de dades sense taules.';
$strNoThemeSupport = 'No hi ha suport pels temes, si et plau comprova la teva configuració i/o els teus temes al directori %s.';
$strNotNumber = 'Aquest valor no és un número!';
$strNotOK = 'Incorrecte';
$strNotSet = 'Taula <b>%s</b> no trobada o no definida a %s';
$strNoUsersFound = 'No s\'han trobat usuaris.';
$strNoValidateSQL = 'Saltar la Validació de l\'SQL';
$strNull = 'Nul';
$strNumberOfFields = 'Nombre de camps';
$strNumberOfTables = 'Nombre de taules';
$strNumSearchResultsInTable = '%s resultat(s) a la taula <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultat(s)';
$strNumTables = 'Taules';

$strOK = 'Correcte';
$strOpenDocumentSpreadsheet = 'Full de càlcul Open Document';
$strOpenDocumentText = 'Text format Open Document';
$strOpenNewWindow = 'Obrir nova finestra de phpMyAdmin';
$strOperations = 'Operacions';
$strOperator = 'Operador';
$strOptimizeTable = 'Optimitza la taula';
$strOptions = 'Opcions';
$strOr = 'O';
$strOverhead = 'Defragmentat';
$strOverwriteExisting = 'Sobreescriure arxiu(s) existent(s)';

$strPageNumber = 'Número de pàgina:';
$strPagesToBeFlushed = 'Pàgines per a purgar';
$strPaperSize = 'Tamany de paper';
$strPartialImport = 'Importació parcial';
$strPartialText = 'Texts Parcials';
$strPasswordChanged = 'La contrasenya per a %s s\'ha canviat correctament.';
$strPassword = 'Contrasenya';
$strPasswordEmpty = 'La contrasenya és buida!';
$strPasswordHashing = 'Contrasenya Hashing';
$strPasswordNotSame = 'Les contrasenyes no coincideixen!';
$strPdfDbSchema = 'Esquema de la base de dades "%s" - Pàgina %s';
$strPdfInvalidTblName = 'La taula "%s" no existeix!';
$strPdfNoTables = 'No hi ha taules';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Crea un llistat que conté les dades d\'una sola taula)';
$strPDFReportTitle = 'Títol de llistat';
$strPerHour = 'per hora';
$strPerMinute = 'per minut';
$strPerSecond = 'per segon';
$strPersian = 'Persa';
$strPhoneBook = 'Libreta d\' adreces';
$strPHP40203 = 'S\'està fent servir la versió 4.2.3 de PHP, que té un serios error amb cadenes de multi-byte (mbstring). Mira l\'informe d\'error 19404 de PHP. No es recomana aquesta versió de PHP per treballar amb phpMyAdmin.';
$strPhp = 'Crear codi PHP';
$strPHPVersion = 'PHP versió';
$strPleaseSelectPrimaryOrUniqueKey = 'Tria la clau principal o una clau única';
$strPmaDocumentation = 'Documentació de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> HA d\'estar a l\'arxiu de configuració!';
$strPmaWiki = 'wiki del phpMyAdmin';
$strPolish = 'Polac';
$strPortrait = 'Vertical';
$strPos1 = 'Inici';
$strPrevious = 'Anterior';
$strPrimaryKeyHasBeenDropped = 'S\'ha esborrat la clau principal';
$strPrimaryKeyName = 'El nom de la clau principal ha de ser ... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>ha de ser</b> el nom i <b>només</b> el nom de la clau principal!)';
$strPrimary = 'Principal';
$strPrint = 'Imprimir';
$strPrintViewFull = 'Vista d\'impresió (amb texts sencers)';
$strPrintView = 'Imprimir vista';
$strPrivDescAllPrivileges = 'Inclou tots els permissos excepte GRANT (atorgar).';
$strPrivDescAlter = 'Permet alterar l\'estructura de taules existents.';
$strPrivDescAlterRoutine = 'Permet alterar i esborrar rutines enmagatzemades.'; 
$strPrivDescCreateDb = 'Permet crear noves bases de dades i taules.';
$strPrivDescCreateRoutine = 'Permet crear rutines enmgatzemades.';  
$strPrivDescCreateTbl = 'Permet crear noves taules.';
$strPrivDescCreateTmpTable = 'Permet crear taules temporals.';
$strPrivDescCreateUser = 'Permet crear, esborrar i reanomenar comptes d\'usuari.'; 
$strPrivDescCreateView = 'Permet crear noves vistes.';  
$strPrivDescDelete = 'Permet esborrar dades.';
$strPrivDescDropDb = 'Permet eliminar bases de dades i taules.';
$strPrivDescDropTbl = 'Permet eliminar taules.';
$strPrivDescExecute5 = 'Permet executar rutines enmagatzemades.'; 
$strPrivDescExecute = 'Permet executar processos enmagatzemats (stored procedures); No té efecte en aquesta versió de MySQL.';
$strPrivDescFile = 'Permet importar i exportar dades amb arxius externs.';
$strPrivDescGrant = 'Permet afegir usuaris i permissos sense tenir que recarregar les taules de permissos.';
$strPrivDescIndex = 'Permet crear i eliminar indexos.';
$strPrivDescInsert = 'Permet inserir i modificar dades.';
$strPrivDescLockTables = 'Permet bloquejar taules per l\'actual fil d\'execució.';
$strPrivDescMaxConnections = 'Limita el numero de noves connexions que pot obrir l\'usuari per hora.';
$strPrivDescMaxQuestions = 'Limita el numero de consultes que pot enviar l\'usuari al servidor per hora.';
$strPrivDescMaxUpdates = 'Limita el numero d\'ordres que pot executar l\'usuari canviant qualsevol taula o base de dades per hora.';
$strPrivDescMaxUserConnections = 'Límita el nombre de connexions simultànies que l\'usuari pot tenir.';
$strPrivDescProcess3 = 'Permet cancel.lar processos d\'altres usuaris.';
$strPrivDescProcess4 = 'Permet veure completament les consultes a la llista de processos.';
$strPrivDescReferences = 'No té efecte en aquesta versió de MySQL.';
$strPrivDescReload = 'Permet recarregar les configuracions del servidor i buidar les seves memòries cau.';
$strPrivDescReplClient = 'Dona el dret a l\'usuari de preguntar quins servidors mestres / esclaus hi ha.';
$strPrivDescReplSlave = 'Es necessari per a la replicació en servidors esclaus.';
$strPrivDescSelect = 'Permet llegir dades.';
$strPrivDescShowDb = 'Dona accés a la llista completa de bases de dades.';
$strPrivDescShowView = 'Permet fer consultes de tipus SHOW CREATE VIEW.'; 
$strPrivDescShutdown = 'Permet parar el servidor.';
$strPrivDescSuper = 'Permet connectar, encara que s\'hagi arribat al máxim numero de connexions permés; Es necessari per moltes operacions d\'administració com ara establir variables globals o bé cancel.lar fils d\'execució d\'altres usuaris.';
$strPrivDescUpdate = 'Permet canviar dades.';
$strPrivDescUsage = 'Sense permissos.';
$strPrivileges = 'Permissos';
$strPrivilegesReloaded = 'Els permissos s\'han recarregat correctament.';
$strProcedures = 'Procediments';
$strProcesses = 'Processos';
$strProcesslist = 'Llista de processos';
$strProfiling = 'Perfils';
$strProtocolVersion = 'Versió del protocol';
$strPutColNames = 'Posa els noms de camp a la primera fila';

$strQBE = 'Consulta segons exemple';
$strQBEDel = 'Sup';
$strQBEIns = 'Ins';
$strQueryCache = 'Memòria cau de consultes';
$strQueryFrame = 'Finestra de la Consulta';
$strQueryOnDb = 'Consulta SQL a la base de dades <b>%s</b>:';
$strQueryResultsOperations = 'Operacions de resultats de consultes';
$strQuerySQLHistory = 'Historial SQL';
$strQueryStatistics = '<b>Estadístiques de Consultes</b>: Des de l\'últim inici, s\'han enviat %s consultes al servidor.';
$strQueryTime = 'La consulta tarda %s seg';
$strQueryType = 'Tipus de consulta';
$strQueryWindowLock = 'No sobreescriure aquesta consulta des de fora de la finestra';

$strReadRequests = 'Peticions de lectura';
$strReceived = 'Rebut';
$strRecommended = 'recomanat';
$strRecords = 'Registres';
$strReferentialIntegrity = 'Comprova la integritat referencial:';
$strRefresh = 'Actualitzar';
$strRelationalSchema = 'Esquema Relacional';
$strRelationDeleted = 'Relació esborrada';
$strRelationNotWorking = 'Les característiques addicionals per treballar amb taules enllaçades s\'han desactivat. Per saber perquè prem a %saquí%s.';
$strRelationsForTable = 'RELACIONS DE LA TAULA';
$strRelations = 'Relacions';
$strRelationView = 'Vista de Relacions';
$strReloadingThePrivileges = 'Recarregant permissos';
$strReloadPrivileges = 'Recarregar permissos';
$strReload = 'Recarregar';
$strRemoveSelectedUsers = 'Treure els usuaris triats';
$strRenameDatabaseOK = 'Base de dades %s reanomenada a %s';
$strRenameTableOK = 'La taula %s ha canviat de nom. Ara es diu %s';
$strRenameTable = 'Reanomenar les taules a';
$strRepairTable = 'Reparar taula';
$strReplaceNULLBy = 'Canvía NULL per';
$strReplaceTable = 'Canviar les dades de la taula per l\'arxiu ';
$strReplication = 'Replicació';
$strReset = 'Esborrar';
$strResourceLimits = 'Limit de recursos';
$strRestartInsertion = 'Reiniciar l\'inserció amb %s files';
$strReType = 'Reescriure';
$strRevokeAndDelete = 'Denega tots els permissos actius dels usuaris i els esborra després.';
$strRevokeAndDeleteDescr = 'Els usuaris encara tindran el permís USAGE fins que es recarreguin els permissos.';
$strRevokeMessage = 'Has tret els permissos per %s';
$strRevoke = 'Treure';
$strRomanian = 'Romanés';
$strRoutineReturnType = 'Tipus de retorn';
$strRoutines = 'Rutines';
$strRowLength = 'Tamany de fila';
$strRows = 'Fila';
$strRowsFrom = 'Files començant des de';
$strRowSize = 'Mida de fila ';
$strRowsModeFlippedHorizontal = 'horitzontal (capçaleres rotades)';
$strRowsModeHorizontal = 'horitzontal';
$strRowsModeOptions = ' en mode %s i repeteix capçaleres després de %s cel·les ';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estadística de files';
$strRunning = 'funcionant a %s';
$strRunQuery = 'Executa consulta';
$strRunSQLQuery = 'Executa consulta/s SQL a la Base de Dades %s';
$strRunSQLQueryOnServer = 'Executar consulta/es SQL al servidor %s';
$strRussian = 'Rus';

$strSave = 'Desar';
$strSaveOnServer = 'Desar al servidor al directori %s';
$strSavePosition = 'Desar posició';
$strScaleFactorSmall = 'El factor de l\'escala és massa petit per posar l\'esquema en una pàgina';
$strSearch = 'Cercar';
$strSearchFormTitle = 'Cercar a la base de dades';
$strSearchInTables = 'A la(les) taula(es):';
$strSearchNeedle = 'Paraula(es) o valor(s) a cercar (comodí: "%"):';
$strSearchOption1 = 'al menys una d\'aquestes paraules';
$strSearchOption2 = 'Totes les paraules';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'com a expressió regular';
$strSearchResultsFor = 'Resultats de la recerca per a "<i>%s</i>" %s:';
$strSearchType = 'Trobat:';
$strSecretRequired = 'L\'arxiu de configuració necessita ara una frase de pas secreta (blowfish_secret).';
$strSelectADb = 'Tria una Base de Dades';
$strSelectAll = 'Tria Tot';
$strSelectBinaryLog = 'Tria el registre binari per veure';
$strSelectFields = 'Tria els camps (un com a mínim):';
$strSelectForeignKey = 'Triar clau externa';
$strSelectNumRows = 'en consulta';
$strSelectReferencedKey = 'Tria la clau referenciada';
$strSelectTables = 'Tria Taules';
$strSend = 'enviar';
$strSent = 'Enviat';
$strServerChoice = 'Elecció de Servidor';
$strServerNotResponding = 'El servidor no respon';
$strServer = 'Servidor';
$strServers = 'Servidors';
$strServerStatusDelayedInserts = 'Insercions demorades';
$strServerStatus = 'Informació d\'execució';
$strServerStatusUptime = 'Aquest servidor MySQL és en marxa durant %s. Es va iniciar en %s.';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Ocupació de servidor</b>: Aquestes taules mostren la ocupació de la xarxa d\'aquest servidor MySQL des de l\'últim inici.';
$strServerVars = 'Variables i configuracions del servidor';
$strServerVersion = 'Versió del servidor';
$strSessionStartupErrorGeneral = 'No es pot iniciar una sessió sense errors, comprova els error obtinguts al teu registre de PHP i/o servidor web i configura el teu entorn de PHP acuradament.';
$strSessionValue = 'Valor de sessió';
$strSetEnumVal = 'Si el tipus de camp és "enum" o "set", entra els valors fent servir el format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure la barra invertida ("\") o la cometa simple ("\'") abans d\'aquests valors, escriu barres invertides (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strShowAll = 'Mostra tot';
$strShowColor = 'Mostra color';
$strShowDatadictAs = 'Format del Diccionari de Dades';
$strShowFullQueries = 'Mostra Consultes completes';
$strShowGrid = 'Mostra graella';
$strShowHideLeftMenu = 'Menú esquerre Mostra/Amaga';
$strShowingBookmark = 'Mostrant consultes desades';
$strShowingPhp = 'Mostrant com a codi PHP';
$strShowingRecords = 'Mostrant registres: ';
$strShowingSQL = 'Mostrant consulta SQL';
$strShow = 'Mostra';
$strShowOpenTables = 'Mostrar taules obertes';
$strShowPHPInfo = 'Mostra informació de PHP';
$strShowSlaveHosts = 'Mostrar servidors esclaus';
$strShowSlaveStatus = 'Mostrar estat d\'esclaus';
$strShowStatusBinlog_cache_disk_useDescr = 'El nombre de transaccions que han fet servir el registre binari temporal però que excedeixen el valor de  binlog_cache_size i usen un arxiu temporal per desar elements de la transacció.';
$strShowStatusBinlog_cache_useDescr = 'El nombre de transaccions que han fet servir el registre binari temporal.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'El nombre de taules temporals en disc creades automàticament per el servidor mentre executa instruccions. Si Created_tmp_disk_tables és gran, potser vols incrementar el valor de tmp_table_size per fer que les taules temporals treballin en memòria en lloc de treballar en disc.';
$strShowStatusCreated_tmp_filesDescr = 'Arxius temporals creats per mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'El nombre de taules temporals creades en memòria per el servidor mentre executa instruccions.';
$strShowStatusDelayed_errorsDescr = 'El nombre de files escrites amb INSERT DELAYED en les que s\'ha detectat quelcom error (possile clau duplicada).';
$strShowStatusDelayed_insert_threadsDescr = 'El nombre de gestors de fils de INSERT DELAYED en ús. Cada taula diferent ón s\'usa INSERT DELAYED té el seu propi fil.';
$strShowStatusDelayed_writesDescr = 'El nombre de files escrites amb INSERT DELAYED.';
$strShowStatusFlush_commandsDescr = 'El nombre d\'instruccions FLUSH executades.';
$strShowStatusHandler_commitDescr = 'El nombre d\'instruccions COMMIT internes.';
$strShowStatusHandler_deleteDescr = 'El nombre de vegades que s\'ha esborrat una fila d\'una taula.';
$strShowStatusHandler_discoverDescr = 'El servidor MySQL pot preguntar al motor d\'enmagatzemament NDB Cluster si coneix quelcom taula amb el nom especificat. Aixó s\'anomena descobriment. Handler_discover indica el nombre de taules descobertes.';
$strShowStatusHandler_read_firstDescr = 'El nombre de vegades que s\'ha llegit la primera entrada des d\'un índex. Si és alt, suggereix que el servidor està fent moltes cerques d\'índex complet; per exemple, SELECT col1 FROM taula, assumint que col1 és indexat.';
$strShowStatusHandler_read_keyDescr = 'El nombre de peticions basades en una clau per llegir una fila. Si és alt, és una bona indicació de que les consultes i taules estàn indexades adequadament.';
$strShowStatusHandler_read_nextDescr = 'El nombre de peticions per llegir la següent fila en l\'ordre de la clau. Aixó s\'incrementa si s\'està consultant una columna d\'index amb limitació de rang o si s\'està fent una cerca d\'index.';
$strShowStatusHandler_read_prevDescr = 'El nombre de peticions per llegir la fila anterior en l\'ordre de la clau. Aquest mètode de lectura s\'utilitza principalment per optimizar ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'El nombre de peticions per llegir una fila basada en una posició fixa. Aixó és alt si es fan moltes consultes que requereixen ordenació del resultat. Probablement tens moltes consultes que fan que MySQL cerqui les taules senceres o bé hi ha joins que no fan servir les claus adequadament.';
$strShowStatusHandler_read_rnd_nextDescr = 'El nombre de peticions per llegir la següent fila a l\'arxiu de dades. Aixó és alt si es fan moltes cerques de taula. Generalment, suggereix que les taules no estàn indexades adequadament o bé les consultes no estàn fetes per aprofitar les avantatges dels índexos definits.';
$strShowStatusHandler_rollbackDescr = 'El nombre d\'instruccions ROLLBACK.';
$strShowStatusHandler_updateDescr = 'El nombre de peticions per a actualitzar una fila en una taula.';
$strShowStatusHandler_writeDescr = 'El nombre de peticions per a insertar una fila en una taula.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'El nombre de pàgines contenint dades (brutes o netes).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'El nombre de pàgines actualment brutes.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'El nombre de pàgines a la memòria intermitja que s\'han demanat per ser actualitzades.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'El nombre de pàgines lliures.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'El nombre de pàgines bloquejades a la memòria intermitja de InnoDB. Aquestes pàgines s\'estàn llegint o escrivint actualment o no es poden actualitzar o esborrar per qualsevol altra raó.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'El nombre de pàgines en ús degut a que s\'han marcat per tasques administratives com a bloqueixos de files o l\'index del hash adaptatiu. Aquest valor es pot calcular com Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Tamany total de la memòria intermitja, en pàgines.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'El nombre de lectures aleatòries d\'InnoDB iniciades. Aixó passa quan una consulta cerca en una gran part de una taula però en ordre aleatori.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'El nombre de lectures secuencials d\'InnoDB iniciades. Aixó passa quan InnoDB fa una cerca secuencial a la taula sencera.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'El nombre de peticions de lectures lògiques que InnoDB ha fet.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'El nombre de peticions de lectures lògiques que InnoDB no pot satisfer de la memòria intermitja i ha de fer lectures de pàgines individuals.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalment, les escritures a la memòria intermitja d\'InnoDB es fan en segon pla. En canvi, si és necessari llegir o crear una pàgina i no hi ha pàgines netes disponibles, fa falta esperar a que primer s\'actualitzin pàgines. Aquest comptador mostra instàncies d\'aquestes esperes. Si el tamany de la memòria intermitja és adequat, aquest valor sól ser petit.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'El nombre d\'escriptures fetes a la memòria intermitja d\'InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'El nombre d\'operacions fsync() aproximades.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'El nombre actual d\'operacions fsync() pendents.';
$strShowStatusInnodb_data_pending_readsDescr = 'El nombre actual de lectures pendents.';
$strShowStatusInnodb_data_pending_writesDescr = 'El nombre actual d\'escritures pendents.';
$strShowStatusInnodb_data_readDescr = 'La quantitat aproximada de dades llegides, en bytes.';
$strShowStatusInnodb_data_readsDescr = 'El nombre total de dades llegides.';
$strShowStatusInnodb_data_writesDescr = 'El nombre total de dades escrites.';
$strShowStatusInnodb_data_writtenDescr = 'La quantitat aproximada de dades escrites, en bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'El nombre de dobles escriptures realitzades i el nombre de pàgines escrites per a aquest propòsit.';
$strShowStatusInnodb_dblwr_writesDescr = 'El nombre de dobles escriptures realitzades i el nombre de pàgines escrites per a aquest propòsit.';
$strShowStatusInnodb_log_waitsDescr = 'El nombre d\'esperes fetes degut al petit tamany de la memòria intermèdia del registre i a esperar a que s\'actualitzés abans de continuar.';
$strShowStatusInnodb_log_write_requestsDescr = 'El nombre de peticions d\'escriptura al registre.';
$strShowStatusInnodb_log_writesDescr = 'El nombre d\'escriptures físiques a l\'arxiu de registre.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'El nombre d\'escriptures fsync fetes a l\'arxiu de registre.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'El nombre d\'operacions fsync pendents a l\'arxiu de registre.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Escriptures pendents a l\'arxiu de registre.';
$strShowStatusInnodb_os_log_writtenDescr = 'El nombre de bytes escrits a l\'arxiu de registre.';
$strShowStatusInnodb_pages_createdDescr = 'El nombre de pàgines creades.';
$strShowStatusInnodb_page_sizeDescr = 'El tamany de pàgina d\'InnoDB compilat (per defecte 16KB). Bastants valors es comptabilitzen en pàgines; el tamany de pàgina permet convertir-lo fàcilment a bytes.';
$strShowStatusInnodb_pages_readDescr = 'El nombre de pàgines llegides.';
$strShowStatusInnodb_pages_writtenDescr = 'El nombre de pàgines escrites.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'El nombre de bloquejos de files actualment en espera.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'El temps promig en fer un bloqueig de fila, en milisegons.';
$strShowStatusInnodb_row_lock_timeDescr = 'El temps total emprat en fer bloquejos de files, en milisegons.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'El temps màxim en fer un bloqueig de fila, en milisegons.';
$strShowStatusInnodb_row_lock_waitsDescr = 'El nombre de vegades que un bloqueig de fila ha estat en espera.';
$strShowStatusInnodb_rows_deletedDescr = 'El nombre de files esborrades de taules InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'El nombre de files afegides a taules InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'El nombre de files llegides de taules InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'El nombre de files actualitzades en taules InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'El nombre de bloquejos de clau a la memòria cau de les claus que han canviat però que encara no han estat actualitzades a disc. Es coneix com a Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'El nombre de blocs no usats a la memòria cau de les claus. Aquest valor es pot fer servir per saber quànta memòria cau de les claus s\'utilitza.';
$strShowStatusKey_blocks_usedDescr = 'El nombre de blocs usats a la memòria cau de les claus. Aquest valor és la marca indicativa del màxim nombre de blocs usats mai a l\'hora.';
$strShowStatusKey_read_requestsDescr = 'El nombre de peticions de lectura d\'un bloc de clau de la memòria cau.';
$strShowStatusKey_readsDescr = 'El nombre de lectures físiques d\'un bloc de clau del disc. Si Key_reads és gran, llavors el valor de key_buffer_size probablement és massa petit. El rati de la memòria cau es pot calcular com Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'El nombre de peticions d\'escriptura d\'un bloc de clau a la memòria cau.';
$strShowStatusKey_writesDescr = 'El nombre d\'escriptures físiques d\'un bloc de clau a disc.';
$strShowStatusLast_query_costDescr = 'El cost total de la darrera consulta compilada tal com el valora l\'optimitzador de consultes. És útil per comparar el cost de diferents plans de consulta per a la mateixa consulta. El valor 0 vol dr que encara no s\'ha compilat cap consulta.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'El nombre de files esperant a ser escrites en cues INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'El nombre de taules que han estat obertes. Si el nombre de taules obertes és gran, probablement el valor de memòria cau de taula és massa petit.';
$strShowStatusOpen_filesDescr = 'El nombre d\'arxius que estàn oberts.';
$strShowStatusOpen_streamsDescr = 'El nombre de fluxes que estàn oberts (usats principalment per a registre).';
$strShowStatusOpen_tablesDescr = 'El nombre de taules que estàn obertes.';
$strShowStatusQcache_free_blocksDescr = 'El nombre de blocs de memòria lliures a la memòria cau de consultes.';
$strShowStatusQcache_free_memoryDescr = 'La quantitat de memòria liure per a memòria cau de consultes.';
$strShowStatusQcache_hitsDescr = 'El nombre d\'encerts a memòria cau.';
$strShowStatusQcache_insertsDescr = 'El nombre de consultes afegides a la memòria cau.';
$strShowStatusQcache_lowmem_prunesDescr = 'El nombre de consultes tretes de la memòria cau per alliberar memòria per deixar lloc a noves consultes. Aquesta informació pot ajudar a ajustar el tamany de la memòria cau de consultes. La memòria cau de consultes utilitza l\'estratègia menys recentment usada(least recently used - LRU) per decidir quines consultes treure de la memòria cau.';
$strShowStatusQcache_not_cachedDescr = 'El nombre de consultes no enviades a la memòria cau (no enviables, o no enviades degut al paràmetre query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'El nombre de consultes registrades a la memòria cau.';
$strShowStatusQcache_total_blocksDescr = 'El nombre total de blocs a la memòria cau de consultes.';
$strShowStatusReset = 'Reiniciar';
$strShowStatusRpl_statusDescr = 'L\'estat de la replicació a prova d\'errades (no implementat encara).';
$strShowStatusSelect_full_joinDescr = 'El nombre de joins que no usen indexos. Si aquest valor no és 0, s\'haurien de comprovar acuradament els indexos de les taules.';
$strShowStatusSelect_full_range_joinDescr = 'El nombre de joins que han usat un rang de cerca en una taula de referència.';
$strShowStatusSelect_range_checkDescr = 'El nombre de joins sense claus que comproven per l\'ús de claus després de cada fila. (Si aquiest valor no és 0, s\'haurien de comprovar acuradament els indexos de les taules.)';
$strShowStatusSelect_rangeDescr = 'El nombre de joins que han usat rangs a la primera taula. (Normalment no és crític si el valor no és molt gran.)';
$strShowStatusSelect_scanDescr = 'El nombre de joins que han fet una cerca a la primera taula sencera.';
$strShowStatusSlave_open_temp_tablesDescr = 'El nombre de taules temporals obertes actualment pel fil esclau de SQL.';
$strShowStatusSlave_retried_transactionsDescr = 'Nombre total (des de l\'arrencada) de vegades que el fil esclau de replicació de SQL ha recuperat transaccions.';
$strShowStatusSlave_runningDescr = 'Aixó és ACTIU (ON) si aquest servidor és un esclau que està connectat a un mestre.';
$strShowStatusSlow_launch_threadsDescr = 'El nombre de fils que han tardat més que slow_launch_time segons a crear.';
$strShowStatusSlow_queriesDescr = 'El nombre de consultes que han tardat més que long_query_time segons.';
$strShowStatusSort_merge_passesDescr = 'El nombre de passades d\'intercal.lació que l\'algorisme de classificació ha hagut de fer. Si aquest valor és gran, s\'hauria de considerar incrementar el valor de la variable de sistema sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'El nombre de classificacions fetes amb rangs.';
$strShowStatusSort_rowsDescr = 'El nombre de files classificades.';
$strShowStatusSort_scanDescr = 'El nombre de classificacions fetes cercant la taula.';
$strShowStatusTable_locks_immediateDescr = 'El nombre de vegades que un bloqueig de taula s\'ha fet immediatament.';
$strShowStatusTable_locks_waitedDescr = 'El nombre de vegades que un bloqueig de taula no s\'ha pogut fer immediatament i s\'ha necessitat una espera. Si aixó és alt, i es detecten problemes de rendiment, s\'hauria de considerar l\'optimització de les consultes, o també dividir la taula o taules en vàries o bé utilitzar la replicació.';
$strShowStatusThreads_cachedDescr = ' El nombre de fils a la memòria cau de fil. L\'index de memòria cau es pot comptar com Threads_created/Connections. Si aquest valor és vermell s\'hauria d\'augmentar el valor de thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'El nombre de connexions obertes simultàniament.';
$strShowStatusThreads_createdDescr = ' El nombre de fils creats per gestionar connexions. Si Threads_created és gran, pots voler augmentar el valor de thread_cache_size. (Normalment això no dóna una millora de rendiment notable si es té una bona aplicació de fil.)';
$strShowStatusThreads_runningDescr = 'El nombre de fils que no estàn dormint.';
$strShowTableDimension = 'Mostra dimensió de les taules';
$strShowTables = 'Mostra taules';
$strShowThisQuery = ' Mostra aquesta consulta de nou ';
$strSimplifiedChinese = 'Xinés Simplificat';
$strSingly = '(només)';
$strSize = 'Mida';
$strSkipQueries = 'Nombre de registres(consultes) a saltar des de l\'inici';
$strSlovak = 'Eslovac';
$strSlovenian = 'Eslové';
$strSmallBigAll = 'Tot Petit/Gran';
$strSnapToGrid = 'Aliniar a la graella';
$strSocketProblem = '(o el sòcol del servidor local MySQL no està configurat correctament)';
$strSortByKey = 'Classifica per la clau';
$strSort = 'Classificació';
$strSorting = 'Classificant';
$strSpaceUsage = 'Utilització d\'espai';
$strSpanish = 'Espanyol';
$strSplitWordsWithSpace = 'Paraules separades per un espai (" ").';
$strSQLCompatibility = 'Modus de compatibilitat SQL';
$strSQLExportType = 'Tipus d\' Exportació';
$strSQLParserBugMessage = 'És possible que hagueu trobat un error a l\'intèrpret SQL. Si us plau, comproveu la sintaxi de la consulta i verifiqueu que les cometes estiguin al seu lloc i facin parelles. Un altra possible causa de l\'errada és que estigueu pujant un arxiu amb dades binàries per fora de l\'àrea de text delimitada. També podeu provar la consulta a la interfície de comandes de MySQL. La sortida següent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema. Si encara teniu problemes o si l\'intèrpret falla i l\'interfície de comandes funciona, reduïu la consulta a la part de l\'SQL que produeix l\'errada, i envieu un informe d\'error amb la cadena de dades de la secció de TALL indicada avall:';
$strSQLParserUserError = 'Sembla que hi ha un error a la consulta SQL. La sortida següent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema';
$strSQLQuery = 'crida SQL';
$strSQLResult = 'Resultat SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identificador Incorrecte';
$strSQPBugUnclosedQuote = 'Cometa no tancada';
$strSQPBugUnknownPunctuation = 'Signe de puntuació desconegut';
$strStandInStructureForView = 'Stand-in estructura per a vista';
$strStatCheckTime = 'Darrera comprovació';
$strStatCreateTime = 'Creació';
$strStatement = 'Sentències';
$strStatisticsOverrun = 'En un servidor ocupat, els comptadors de bytes poden excedir el seu tamany, llavors les estadístiques donades pel servidor MySQL poden ser incorrectes.';
$strStatUpdateTime = 'Darrera actualització';
$strStatus = 'Estat';
$strStorageEngine = 'Motor d\'emmagatzematge';
$strStorageEngines = 'Motors d\'emmagatzematge';
$strStrucCSV = 'dades CSV ';
$strStrucData = 'Estructura i dades';
$strStrucExcelCSV = 'CSV per dades de MS Excel';
$strStrucNativeExcel = 'Dades Natives MS Excel';
$strStrucOnly = 'Només l\'estructura';
$strStructPropose = 'Proposa una estructura de taula';
$strStructure = 'Estructura';
$strStructureForView = 'Estructura per a vista';
$strSubmit = 'Enviar';
$strSuccess = 'La vostra comanda SQL ha estat executada amb èxit';
$strSum = 'Suma';
$strSwedish = 'Suec';
$strSwitchToDatabase = 'Canviar a la base de dades copiada';
$strSwitchToTable = 'Canvia a una taula copiada';

$strTableAlreadyExists = 'La taula %s ja existeix!';
$strTableComments = 'Comentaris de la taula';
$strTableEmpty = 'El nom de la taula és buit!';
$strTableHasBeenDropped = 'S\'ha esborrat la taula %s';
$strTableHasBeenEmptied = 'S\'ha buidat la taula %s';
$strTableHasBeenFlushed = 'S\'ha buidat la memòria cau de la taula %s';
$strTableIsEmpty = 'La taula sembla buida!';
$strTableMaintenance = 'Manteniment de la taula';
$strTableName = 'Nom de taula';
$strTableOfContents = 'Taula de continguts';
$strTableOptions = 'Opcions de Taula';
$strTables = '%s taula(es)';
$strTableStructure = 'Estructura de la taula';
$strTable = 'Taula';
$strTakeIt = 'agafa';
$strTblPrivileges = 'Permissos especifics de taula';
$strTempData = 'Dades temporals';
$strTextAreaLength = ' A causa de la seva longitud,<br /> aquest camp pot no ser editable ';
$strThai = 'Tailandès';
$strThemeDefaultNotFound = 'Tema per defecte %s no trobat!';
$strThemeNoPreviewAvailable = 'No hi ha vista prèvia disponible.';
$strThemeNotFound = 'Tema %s no trobat!';
$strThemeNoValidImgPath = 'El camí de les imatges del tema %s és incorrecte!';
$strThemePathNotFound = 'No s\'ha trobat el camí de les imatges del tema %s!';
$strTheme = 'Tema / Estil';
$strThisHost = 'Aquest Host';
$strThreads = 'Fils';
$strThreadSuccessfullyKilled = 'Fil %s cancel.lat correctament.';
$strTimeoutInfo = 'La darrera importació ha esgotat el temps, després de reenviar continuarà des de la posició %d.';
$strTimeoutNothingParsed = 'Però a la darrera importació no s\'han processat dades, el que normalment indica que phpMyAdmin no ha pogut finalitzar aquesta importació a menys que incrementeu els límits de temps de php.';
$strTimeoutPassed = 'Temps exaurit de l\'arxiu d\'ordres, si voleu finalitzar l\'importació, torneu a enviar el mateix arxiu a importar i el procés continuarà.';
$strTime = 'Temps';
$strToFromPage = 'plana a/de';
$strToggleScratchboard = 'Canvia l\' scratchboard';
$strToggleSmallBig = 'Canviar petit/gran';
$strToSelectRelation = 'Per triar una relació, clica :';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Xinés Tradicional';
$strTraditionalSpanish = 'Espanyol Tradicional';
$strTraffic = 'Tràfic';
$strTransactionCoordinator = 'Coordinador de transaccions';
$strTransformation_application_octetstream__download = 'Mostra un enllaç per descarregar les dades binàries d\'un camp. La primera dada és el nom d\'arxiu binari. La segona dada és un possible nom de camp d\'una taula que contingui el nom d\'arxiu. Si es facilita la segona dada és necessari tenir la primera dada buida';
$strTransformation_application_octetstream__hex = 'Mostra la representació hexadecimal de les dades. El primer paràmetre és opcional i especifica cóm de sovint s\'afegirá l\'espai (per defecte a 2 \"nibbles\").';
$strTransformation_image_jpeg__inline = 'Mostra una miniatura amb enllaç; opcions: ample,alt en pixels (respecta la proporció original)';
$strTransformation_image_jpeg__link = 'Es mostra com a enllaç a la imatge.';
$strTransformation_image_png__inline = 'Veure image/jpeg: en linia';
$strTransformation_text_plain__dateformat = 'Mostra un camp TIME, TIMESTAMP, DATETIME o camp de data unix com a data formatejada. La primera opció és la diferéncia (en hores) que s\'afegiràn a la data (Defecte: 0). Usa la segona opció per indicar un format diferent de data/hora. La tercera opció determina si es vol visualitzar l\'hora local o UTC (usant els texts "local" o "utc"). Segons aixó, el format de data té diferent valor - per a "local" veieu la documentació de la funció strftime() de PHP i per a "utc" s\'obté amb l\'ús de la funció gmdate().';
$strTransformation_text_plain__external = 'NOMÉS LINUX: Llença una aplicació externa i facilita el camp de dades via standard input. Retorna per standard output de l\'aplicació. El defecte és Tidy, per interpretar codi HTML. Per raons de seguretat, has d\' editar manualment l\'arxiu libraries/transformations/text_plain__external.inc.php i afegir les eines que vulguis fer servir. La primera opció és, llavors, el numero del programa que vols fer servir i la segona opció són els paràmetres per el programa. El tercer paràmetre, si es posa a 1, convertirà la sortida fent servir htmlspecialchars() (El defecte és 1). El quart paràmetre, si val 1, posarà un NOWRAP al contingut de les cel.les de forma que la sortida sencera es mostrarà sense reformatejar (Per defecte 1)';
$strTransformation_text_plain__formatted = 'Conserva el format original del camp. No es fa cap canvi.';
$strTransformation_text_plain__imagelink = 'Mostra una imatge i un enllaç, el camp conté el nom de l\'arxiu; la primera opció és un prefixe com "http://domini.com/", la segona opció és l\'amplada en pixels, la tercera és l\'alçada.';
$strTransformation_text_plain__link = 'Mostra un enllaç, el camp conté el nom de l\'arxiu; la primera opció és un prefixe com "http://domini.com/", la segona opció és el titol del enllaç.';
$strTransformation_text_plain__sql = 'Formateig del text com a consulta SQL amb resaltat de sintaxi.';
$strTransformation_text_plain__substr = 'Mostra una part d\'una cadena de text. La primera opció és el nombre de caracters a saltar des de l\'inici de la cadena (Per defecte 0). La segona opció és el nombre de caracters a retornar (Per defecte: fins al final de la cadena). La tercera opció és la cadena a afegir a l\'inici o al final quan hi ha truncament (Per defecte: "...").';
$strTriggers = 'Disparadors';
$strTruncateQueries = 'Talla les consultes mostrades';
$strTurkish = 'Turc';
$strType = 'Tipus';

$strUkrainian = 'Ucrainès ';
$strUncheckAll = 'Desmarcar tot';
$strUnicode = 'Unicode';
$strUnique = 'Única';
$strUnknown = 'Desconegut';
$strUnselectAll = 'Desmarca tot';
$strUnsupportedCompressionDetected = 'S\'intenta carregar un arxiu amb una compresió no suportada (%s). O bé aquest suport no s\'ha implementat encara o bé el teniu desactivat a la configuració.';
$strUpdatePrivMessage = 'Heu actualitzat els permissos de %s.';
$strUpdateProfileMessage = 'S\'ha actualitzat el perfil.';
$strUpdateQuery = 'Actualitza consulta';
$strUpdComTab = 'Mira a la documentació cóm actualitzar la teva Taula de Comentaris de les Columnes';
$strUpgrade = 'Es necessari actualitzar a %s %s o posterior.';
$strUploadErrorCantWrite = 'Error en gravar l\'arxiu al disc.';
$strUploadErrorExtension = 'Pujada de l\'arxiu aturada per l\'extensió.';
$strUploadErrorFormSize = 'El tamany d\'arxiu pujat supera la directiva MAX_FILE_SIZE especificada al formulari HTML.';
$strUploadErrorIniSize = 'El tamany d\'arxiu pujat supera la directiva upload_max_filesize de php.ini.';
$strUploadErrorNoTempDir = 'No es troba la carpeta temporal.';
$strUploadErrorPartial = 'Només s\'ha pujat parcialment l\'arxiu.';
$strUploadErrorUnknown = 'Error desconegut al pujar l\'arxiu.';
$strUploadLimit = 'Probablement has triat d\'enviar un arxiu massa gran. Consulta la %sdocumentació%s per trobar formes de modificar aquest límit.';
$strUploadsNotAllowed = 'No es permet pujar arxius en aquest servidor.';
$strUsage = 'Ús';
$strUseBackquotes = 'Usa &quot;backquotes&quot; amb taules i noms de camps';
$strUsedPhpExtensions = 'Extensions de PHP usades';
$strUseHostTable = 'Utilitza la Taula de Hosts';
$strUserAlreadyExists = 'L\'usuari %s ja existeix!';
$strUserEmpty = 'El nom d\'usuari és buit!';
$strUserName = 'Nom d\'usuari';
$strUserNotFound = 'No s\'ha trobat l\'usuari triat a la taula de permissos.';
$strUserOverview = 'Informació general de l\'usuari';
$strUsersDeleted = 'S\'han esborrat correctament els usuaris triats.';
$strUsersHavingAccessToDb = 'Usuaris amb accés a &quot;%s&quot;';
$strUser = 'Usuari';
$strUseTabKey = 'Usa la tecla TAB per moure\'t de valor en valor, o CTRL+fletxes per moure\'t on vulguis';
$strUseTables = 'Usa Taules';
$strUseTextField = 'Usa camp de text';
$strUseThisValue = 'Fes servir aquest valor';

$strValidateSQL = 'Validar l\'SQL';
$strValidatorError = 'No s\'ha pogut iniciar el validador SQL. Si us plau, comproveu que teniu instal·lats els mòduls de PHP necessaris tal i com s\'indica a la %sdocumentació%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strVersionInformation = 'Informació de Versió';
$strViewDumpDatabases = 'Veure volcat (esquema) de les bases de dades';
$strViewDumpDB = 'Veure l\'esquema de la base de dades';
$strViewDump = 'Veure un esquema de la taula';
$strViewHasBeenDropped = 'Vista %s esborrada';
$strViewMaxExactCount = 'Aquesta vista té més de %d arxius. Consulteu a %sdocumentació%s.';
$strViewName = 'Nom de VISTA';
$strView = 'Vista';

$strWebServerUploadDirectory = 'Directori de pujada d\'arxius del servidor web';
$strWebServerUploadDirectoryError = 'No està disponible el directori indicat per pujar arxius';
$strWelcome = 'Benvingut a %s';
$strWestEuropean = 'Europa Occidental';
$strWildcard = 'comodins';
$strWindowNotFound = 'La finestra destí del navegador no s\'ha pogut actualitzar. Potser has tancat la finestra "pare" o bé el teu navegador bloqueja actualitzacions entre finestres per la teva configuració de seguretat';
$strWithChecked = 'Amb marca:';
$strWriteRequests = 'Peticions d\'escriptura';
$strWrongUser = 'Usuari i/o clau erronis. Accés denegat.';

$strXML = 'XML';

$strYes = 'Si';

$strZeroRemovesTheLimit = 'Nota: Es treu el limit establint aquestes opcions a 0 (zero).';
$strZip = '"comprimit amb zip"';

// To translate:

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate

?>

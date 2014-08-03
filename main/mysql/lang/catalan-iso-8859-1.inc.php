<?php
/* $Id: catalan-iso-8859-1.inc.php 11159 2008-03-07 17:59:01Z lem9 $ */

$charset = 'iso-8859-1';
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
$strAccessDenied = 'Acc�s denegat';
$strAccessDeniedCreateConfig = 'La ra� m�s probable d\'aix� �s que no heu creat l\'arxiu de configuraci�. Podriau voler utilitzar %1$ssetup script%2$s per crear-ne un.';
$strAccessDeniedExplanation = 'phpMyAdmin ha intentat connectar amb el servidor de MySQL, pero el servidor ha rebutjat la connexi�. Comprova el host, el num d\' usuari i la contrasenya a l\'arxiu config.inc.php i mira que es correspongui amb la informaci� facilitada per l\' administrador del servidor de MySQL.';
$strAction = 'Acci�';
$strAddAutoIncrement = 'Afegir valor AUTO_INCREMENT';
$strAddClause = 'Afegir %s';
$strAddConstraints = 'Afegir restriccions';
$strAddDeleteColumn = 'Afegir/esborrar Camps de Columna';
$strAddDeleteRow = 'Afegir/esborrar fila de criteri';
$strAddFields = 'Afegir %s camp(s)';
$strAddHeaderComment = 'Afegir comentari personalitzat a la cap�alera (\\n divideix linies)';
$strAddIntoComments = 'Afegir en comentaris';
$strAddNewField = 'Afegir un camp nou';
$strAddPrivilegesOnDb = 'Afegir permissos a la seg�ent base de dades';
$strAddPrivilegesOnTbl = 'Afegir permissos a la seg�ent taula';
$strAddSearchConditions = 'Afegeix condicions de recerca (cos de la cl�usula "WHERE"):';
$strAddToIndex = 'Afegir a l\'�ndex %s columna(es) &nbsp;';
$strAddUser = 'Afegir un usuari nou';
$strAddUserMessage = 'Has afegit un usuari nou.';
$strAdministration = 'Administraci�';
$strAffectedRows = 'Files afectades:';
$strAfter = 'Darrere de %s';
$strAfterInsertBack = 'Tornar';
$strAfterInsertNewInsert = 'Insereix un nou registre';
$strAfterInsertNext = 'Editar el seg�ent registre'; 
$strAfterInsertSame = 'Tornar a aquesta p�gina';
$strAllowInterrupt = 'Permetre l\'interrupci� de l\'importaci� en cas de que l\'arxiu d\'ordres detecti que s\'acosta el limit del temps. Pot ser una bona soluci� per importar arxius grans, per� pot trencar transaccions.';
$strAllTableSameWidth = 'Mostrar totes les taules amb la mateixa amplada?';
$strAll = 'Tot';
$strAlterOrderBy = 'Altera la taula i ordena per';
$strAnalyzeTable = 'Analitza la taula';
$strAnd = 'I';
$strAndThen = 'i llavors';
$strAngularLinks = 'Enlla�os angulars';
$strAnIndex = 'S\'ha afegit un �ndex a %s';
$strAnyHost = 'Qualsevol servidor';
$strAny = 'Qualsevol';
$strAnyUser = 'Qualsevol usuari';
$strApproximateCount = 'Pot ser aproximat. Veieu PFC (FAQ) 3.11';
$strAPrimaryKey = 'S\'ha afegit una clau principal a %s';
$strArabic = '�rab';
$strArmenian = 'Armeni';
$strAscending = 'Ascendent';
$strAtBeginningOfTable = 'Al principi de la taula';
$strAtEndOfTable = 'Al final de la taula';
$strAttr = 'Atributs';
$strAutomaticLayout = 'Disseny autom�tic';

$strBack = 'Enrere';
$strBaltic = 'B�ltic';
$strBeginCut = 'INICI DEL TALL';
$strBeginRaw = 'INICI DEL BOLCAT';
$strBinary = ' Binari ';
$strBinaryDoNotEdit = ' Binari - no editeu ';
$strBinaryLog = 'Registre binari';
$strBinLogEventType = 'Tipus d\'event';
$strBinLogInfo = 'Informaci�';
$strBinLogName = 'Nom del registre';
$strBinLogOriginalPosition = 'Posici� original';
$strBinLogPosition = 'Posici�';
$strBinLogServerId = 'ID de Servidor';
$strBookmarkAllUsers = 'Deixar accedir a cada usuari a aquesta consulta desada';
$strBookmarkCreated = '%s creat com a consulta desada';
$strBookmarkDeleted = 'S\'ha esborrat la consulta desada.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta SQL desada';
$strBookmarkReplace = 'Reempla�ar una consulta desada ja existent amb el mateix nom';
$strBookmarkThis = 'Desa aquesta consulta SQL';
$strBookmarkView = 'Nom�s mirar';
$strBrowseDistinctValues = 'Navega per valors diferents';
$strBrowseForeignValues = 'Navega valors externs';
$strBrowse = 'Navega';
$strBufferPoolActivity = 'Activitat de la Mem�ria intermitja';
$strBufferPool = 'Grup de mem�ries intermitges';
$strBufferPoolUsage = '�s del grup de mem�ries intermitges';
$strBufferReadMissesInPercent = 'Lectures omeses en %';
$strBufferReadMisses = 'Lectures omeses';
$strBufferWriteWaits = 'Esperes d\'escriptura';
$strBufferWriteWaitsInPercent = 'Esperes d\'escriptura en %';
$strBulgarian = 'B�lgar';
$strBusyPages = 'P�gines ocupades';
$strBzError = 'phpMyAdmin �s incapa� de comprimir el bolcat degut a una extensi� Bz2 incorrecta en aquesta versi� de php. �s molt recomenable posar a la directiva <code>$cfg[\'BZipDump\']</code> el valor <code>FALSE</code> a l\'arxiu de configuraci� de phpMyAdmin. Si vols utilitzar les facilitats de compresi� Bz2, �s necessari actualitzar el php a la darrera versi� disponible. Es pot consultar el informe d\'errada %s de php per a m�s detalls.';
$strBzip = '"comprimit amb bzip"';

$strCalendar = 'Calendari';
$strCancel = 'Cancel.lar';
$strCanNotLoadExportPlugins = 'No es poden carregar les extensions d\'exportaci�, comprova l\'instal.laci�!';
$strCanNotLoadImportPlugins = 'No es poden carregar les extensions d\'importaci�, comprova l\'instal.laci�!';
$strCannotLogin = 'No podem connectar amb el servidor MySQL';
$strCantLoad = 'No puc carregar l\'extensi� %s,<br />Comprova la configuraci� de PHP.';
$strCantLoadRecodeIconv = 'No es pot carregar iconv o recodificar una extensi� necess�ria per la conversi� de jocs de car�cters, Configura php per permetre l\'�s d\'aquestes extensions o b� desactiva la conversi� de jocs de car�cters en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No pots canviar el nom d\'un �ndex a "PRIMARY"!';
$strCantUseRecodeIconv = 'No es pot utilitzar iconv ni libiconv ni la funci� recode_string mentre es carrega l\'extensi� d\'informes. Comprova la configuraci� de php.';
$strCardinality = 'Cardinalitat';
$strCaseInsensitive = 'No sensible a maj�scules';
$strCaseSensitive = 'sensible a maj�scules';
$strCentralEuropean = 'Europa Central';
$strChange = 'Canvi';
$strChangeCopyModeCopy = '... respecta l\'antic.';
$strChangeCopyMode = 'Crea un nou usuari amb els mateixos permissos i ...';
$strChangeCopyModeDeleteAndReload = ' ... esborra l\'antic de les taules d\'usuaris i recarrega els permissos despr�s.';
$strChangeCopyModeJustDelete = ' ... esborra l\'antic de les taules d\'usuaris.';
$strChangeCopyModeRevoke = ' ... treu tots els permissos actius de l\'antic i esborra\'l despr�s.';
$strChangeCopyUser = 'Canvi d\'Informaci� de Connexi� / Copia d\'Usuari';
$strChangeDisplay = 'Tria el camp a mostrar';
$strChangePassword = 'Canvi de contrasenya';
$strCharset = 'Joc de Caracters';
$strCharsetOfFile = 'Joc de car�cters de l\'arxiu:';
$strCharsetsAndCollations = 'Jocs de Caracters i ordenacions';
$strCharsets = 'Jocs de caracters';
$strCheckAll = 'Marcar-ho tot';
$strCheckOverhead = 'Comprovar taules desfragmentades';
$strCheckPrivs = 'Comprova els Permissos';
$strCheckPrivsLong = 'Comprova els Permissos per la Base de dades &quot;%s&quot;.';
$strCheckTable = 'Verifica la taula';
$strChoosePage = 'Tria una p�gina per editar';
$strColComFeat = 'Mostrant comentaris de les columnes';
$strCollation = 'Ordenaci�';
$strColumnNames = 'Nom de les columnes';
$strColumnPrivileges = 'Permissos espec�fics de columna';
$strCommand = 'Ordre';
$strComments = 'Comentaris';
$strCommentsForTable = 'COMENTARIS PER LA TAULA';
$strCompatibleHashing = 'Compatible amb MySQL&nbsp;4.0';
$strCompleteInserts = 'Completar insercions';
$strCompression = 'Compressi�';
$strCompressionWillBeDetected = 'La compresi� de l\'arxiu importat es detectar� autom�ticament des de: %s';
$strConfigDefaultFileError = 'No es pot carregar la configuraci� per defecte des de: "%1$s"';
$strConfigFileError = 'phpMyAdmin �s incapa� de llegir l\'arxiu de configuraci�!<br />Aix� pot succeir si php troba un error sint�ctic en ell o b� php no pot trobar l\'arxiu.<br />Intenta obrir l\'arxiu de configuraci� directament fent servir l\'enlla� seg�ent i comprova el(s) missatge(s) d\'error que rebs. En moltes ocasions una coma o punt i coma falta en algun lloc.<br />Si rebs una p�gina en blanc, tot est� b�.';
$strConfigureTableCoord = 'Configura les coordinades per la taula %s';
$strConnectionError = 'No puc connectar: par�metres incorrectes.';
$strConnections = 'Connexions';
$strConstraintsForDumped = 'Restriccions per taules bolcades';
$strConstraintsForTable = 'Restriccions per la taula';
$strControluserFailed = 'La connexi� de l\'usuari de control ha fallat, tal com est� definida ara a la configuraci�.';
$strCookiesRequired = 'A partir d\'aquest punt �s necessari tenir les galetes (cookies) activades.';
$strCopy = 'Copiar'; 
$strCopyDatabaseOK = 'La Base de dades %s s\'ha copiat a %s';
$strCopyTable = 'Copia taula a (base-de-dades<b>.</b>taula):';
$strCopyTableOK = 'La taula %s s\'ha copiat a %s.';
$strCopyTableSameNames = 'No es pot copiar la taula sobre ella mateixa';
$strCouldNotKill = 'phpMyAdmin no pot cancelar el fil %s. Probablement, ja �s tancat.';
$strCreate = 'Crear';
$strCreateDatabaseBeforeCopying = 'Inclou CREATE DATABASE abans de copiar';
$strCreateIndex = 'Crea un �ndex de columnes %s:&nbsp;';
$strCreateIndexTopic = 'Crea un nou �ndex';
$strCreateNewDatabase = 'Crea una nova base de dades';
$strCreateNewTable = 'Crear una taula nova a la base de dades %s';
$strCreatePage = 'Crea una nova P�gina';
$strCreatePdfFeat = 'Creaci� de PDFs';
$strCreateRelation = 'Crear relaci�';
$strCreateTable  = 'Crear taula';
$strCreateUserDatabase = 'Base de dades per usuari';
$strCreateUserDatabaseName = 'Crear base de dades amb el mateix nom i atorgar tots els permissos';
$strCreateUserDatabaseNone = 'Cap';
$strCreateUserDatabaseWildcard = 'Atorgar tots els permissos en un nom comod� (nomusuari_%)';
$strCreationDates = 'Datas de Creaci�/Modificaci�/Comprovaci�';
$strCriteria = 'Criteris';
$strCroatian = 'Croata';
$strCSV = 'CSV';
$strCyrillic = 'Cir�l.lic';
$strCzechSlovak = 'Txec-Eslovac';
$strCzech = 'Txec';

$strDanish = 'Dan�s';
$strDatabase = 'Base de dades';
$strDatabaseEmpty = 'El nom de la base de dades �s buit!';
$strDatabaseExportOptions = 'Opcions d\'exportaci� de Bases de Dades';
$strDatabaseHasBeenDropped = 'La Base de Dades %s s\'ha eliminat.';
$strDatabases = 'bases de dades';
$strDatabasesDropped = '%s Bases de dades s\'han esborrat correctament.';
$strDatabasesStatsDisable = 'Desactiva Estad�stiques';
$strDatabasesStatsEnable = 'Activa Estad�stiques';
$strDatabasesStats = 'Estad�stiques de les bases de dades';
$strDatabasesStatsHeavyTraffic = 'Nota: Activant les estad�stiques de Base de Dades aqui pot provocar elevat tr�fic entre el servidor Web i el de MySQL.';
$strData = 'Dades';
$strDataDict = 'Diccionari de Dades';
$strDataOnly = 'Nom�s dades';
$strDataPages = 'P�gines contenint dades';
$strDBComment = 'Comentaris de la Base de Dades: ';
$strDBCopy = 'Copiar base de dades a';
$strDbIsEmpty = 'La base de dades sembla buida!';
$strDbPrivileges = 'Permissos especifics de Base de dades';
$strDBRename = 'Reanomenar base de dades a';
$strDbSpecific = 'espec�fic de la base de dades';
$strDefault = 'Defecte';
$strDefaultEngine = '%s �s el motor d\'emmagatzematge per defecte en aquest servidor MySQL.';
$strDefaultValueHelp = 'Per a valors per defecte, nom�s entra un valor, sense barres invertides ni cometes, fent servir aquest format: a';
$strDefragment = 'Desfragmentar taula';
$strDelayedInserts = 'Usa insercions diferides';
$strDeleteAndFlushDescr = 'Aquesta �s la forma m�s clara, pero recarregar els permissos pot tardar una mica.';
$strDeleteAndFlush = 'Esborra els usuaris i recarrega els permissos seguidament.';
$strDeletedRows = 'Files esborrades:';
$strDeleted = 'S\'ha esborrat la fila';
$strDelete = 'Esborrar';
$strDeleteNoUsersSelected = 'No s\han triat usuaris per esborrar!';
$strDeleteRelation = 'Esborrar relaci�';
$strDeleting = 'Esborrant %s';
$strDelimiter = 'Separador';
$strDelOld = 'La p�gina actual t� refer�ncies a taules que no existeixen. Vols esborrar aquestes refer�ncies?';
$strDescending = 'Descendent';
$strDescription = 'Descripci�';
$strDesigner = 'Dissenyador';
$strDesignerHelpDisplayField = 'El camp a visualitzar es mostra en rosa. Per establir/treure un camp com a camp de visualitzaci�, clica la icona "Tria camp a visualitzar", i clica tamb� en el nom de camp adient.';
$strDictionary = 'diccionari';
$strDirectLinks = 'Enlla�os directes';
$strDirtyPages = 'P�gines brutes';
$strDisabled = 'Desactivat';
$strDisableForeignChecks = 'Desactivar comprovacions de claus externes';
$strDisplayFeat = 'Mostrar caracter�stiques';
$strDisplayOrder = 'Ordre del llistat:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Fer una "petici� segons exemple" (comod�: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentaci�';
$strDoYouReally = 'Realment vols fer?';
$strDropDatabaseStrongWarning = 'Ets a punt d\' ELIMINAR completament una base de dades!';
$strDrop = 'Eliminar';
$strDropUsersDb = 'Esborra les bases de dades que tenen els mateixos noms que els usuaris.';
$strDumpingData = 'Bolcant dades de la taula';
$strDumpSaved = 'El bolcat s\'ha desat amb el nom d\'arxiu %s.';
$strDumpXRows = 'Bolcar %s files comen�ant a la fila %s.';
$strDynamic = 'din�mic';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar p�gines PDF';
$strEditPrivileges = 'Editar permissos';
$strEffective = 'Efectiu';
$strEmpty = 'Buidar';
$strEmptyResultSet = 'MySQL ha retornat un conjunt buit (p.e. cap fila).';
$strEnabled = 'Activat';
$strEncloseInTransaction = 'Incloure exportaci� en la transacci�';
$strEndCut = 'FI DEL TALL';
$strEnd = 'Final';
$strEndRaw = 'FI DEL BOLCAT';
$strEngineAvailable = '%s est� disponible en aquest servidor MySQL.';
$strEngineDisabled = '%s s\'ha desactivat en aquest servidor MySQL.';
$strEngines = 'Motors';
$strEngineUnsupported = 'Aquest servidor MySQL no suporta el motor d\'emmagatzematge %s.';
$strEnglish = 'Angl�s';
$strEnglishPrivileges = ' Nota: Els noms dels privilegis del MySQL s�n en idioma angl�s ';
$strError = 'Errada';
$strErrorInZipFile = 'Error en arxiu ZIP:';
$strErrorRelationAdded = 'Error: La relaci� no s\'ha afegit.';
$strErrorRelationExists = 'Error: La relaci� ja existeix.';
$strErrorRenamingTable = 'Error reanomenant la taula %1$s a %2$s';
$strErrorSaveTable = 'Error desant coordenades per al Dissenyador.';
$strEscapeWildcards = 'Els comodins _ i % han de marcar-se amb una \ per usar-los literalment';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estoni� ';
$strEvent = 'Esdevenivent';
$strExcelEdition = 'Edici� per Excel';
$strExecuteBookmarked = 'Executa una consulta desada';
$strExplain = 'Explicaci� de l\'SQL';
$strExport = 'Exportar';
$strExportImportToScale = 'Exporta/Importa a escala';
$strExportMustBeFile = 'El tipus d\'exportaci� triat s\'ha de desar en un arxiu!';
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
$strFileAlreadyExists = 'L\'arxiu %s ja existeix al servidor, canvia el nom o marca l\'opci� de sobreescriure.';
$strFileCouldNotBeRead = 'No es pot llegir l\'arxiu';
$strFileNameTemplateDescription = 'Aquest valor es interpretat usant %1$sstrftime%2$s, pel que podeu usar les cadenes de formateig de temps. Adem�s, es far�n aquestes transformacions: %3$s. Altre text es deixar� sense variaci�.';
$strFileNameTemplateDescriptionDatabase = 'nom de base de dades';
$strFileNameTemplateDescriptionServer = 'nom de servidor';
$strFileNameTemplateDescriptionTable = 'nom de taula';
$strFileNameTemplate = 'Nom d\'arxiu de plantilla';
$strFileNameTemplateRemember = 'Recordar plantilla';
$strFiles = 'Arxius';
$strFileToImport = 'Arxiu a importar';
$strFixed = 'fixe';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin obt� els permissos de l\'usuari directament de les taules de permissos de l\' MySQL. El contingut d\'aquestes taules pot diferir dels permissos que utilitza el servidor si s\'han fet canvis manualment. En aquest cas, es necessari %srecarregar els permissos%s abans de continuar.';
$strFlushQueryCache = 'Buidar la mem�ria interm�dia de consultes';
$strFlushTable = 'Buidar la mem�ria cau de la taula ("FLUSH")';
$strFlushTables = 'Sincronitzar (tancar) totes les taules';
$strFontSize = 'Tamany de lletra';
$strForeignKeyError = 'Error creant clau externa (comprova els tipus de dades)';
$strFormat = 'Format';
$strFormEmpty = 'Falta un valor al formulari !';
$strFreePages = 'P�gines lliures';
$strFullText = 'Texts sencers';
$strFunction = 'Funci�';
$strFunctions = 'Funcions';

$strGenBy = 'Generat per';
$strGeneralRelationFeat = 'Caracter�stiques generals de relacions';
$strGenerate = 'Generar'; 
$strGeneratePassword = 'Generar Contrasenya'; 
$strGenTime = 'Temps de generaci�';
$strGeorgian = 'Georgi�';
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
$strHomepageOfficial = 'P�gina oficial del phpMyAdmin';
$strHostEmpty = 'El nom del servidor �s buit!';
$strHost = 'Servidor';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'H�ngar';

$strIcelandic = 'Island�s';
$strId = 'ID';
$strIdxFulltext = 'Text sencer';
$strIEUnsupported = 'Internet Explorer no suporta aquesta funci�.';
$strIgnoreDuplicates = 'Ignorar files duplicades';
$strIgnore = 'Ignora';
$strIgnoreInserts = 'Utilitzar "ignore inserts"';
$strImportExportCoords = 'Importa/Exporta coordenades per a esquema PDF';
$strImportFiles = 'Importar arxius';
$strImportFormat = 'Format de l\'arxiu importat';
$strImport = 'Importar';
$strImportSuccessfullyFinished = 'Importaci� finalitzada correctament, %d consultes executades.';
$strIndexes = 'Indexos';
$strIndexesSeemEqual = 'Els seguents indexos semblen iguals i un d\'ells s\'ha d\'esborrar:';
$strIndexHasBeenDropped = 'S\'ha esborrat l\'�ndex %s';
$strIndexName = 'Nom d\'�ndex:';
$strIndex = '�ndex';
$strIndexType = 'Tipus d\'�ndex:';
$strIndexWarningTable = 'Problemes amb els index de la taula `%s`';
$strInnoDBAutoextendIncrementDesc = ' La quantitat a incrementar per ampliar el tamany d\'una taula autoextensible quan estigui a punt d\'omplir-se.';
$strInnoDBAutoextendIncrement = 'Increment d\'autoextensi�';
$strInnoDBBufferPoolSizeDesc = 'El tamany de mem�ria intermitja que InnoDB fa servir per desar les dades i indexos de les seves taules.';
$strInnoDBBufferPoolSize = 'Tamany de la mem�ria intermitja';
$strInnoDBDataFilePath = 'Arxius de dades';
$strInnoDBDataHomeDirDesc = 'La part comuna de la ruta al directori per tots els arxius de dades InnoDB.';
$strInnoDBDataHomeDir = 'Directori local de dades';
$strInnoDBPages = 'p�gines';
$strInnoDBRelationAdded = 'Afegida relaci� InnoDB';
$strInnodbStat = 'Estat InnoDB';
$strInsecureMySQL = 'El vostre arxiu de configuraci� t� par�metres (root sense contrasenya) que corresponen al compte privilegiat predetermitat de MySQL. El servidor MySQL est� funcionant amb aquests valors, el que significa un forat de seguretat, i s\'exposa a intrusions, pel que recomanem la reparaci� urgent d\'aquest forat de seguretat.';
$strInsertAsNewRow = 'Inserir com a nova fila';
$strInsertedRowId = 'Id de la fila inserida:';
$strInsertedRows = 'Files Inserides:';
$strInsert = 'Insereix';
$strInternalNotNecessary = '* No es necessita una relaci� interna si ja existeix a InnoDB.';
$strInternalRelationAdded = 'Afegida relaci� interna';
$strInternalRelations = 'Relacions internes';
$strInUse = 'en �s';
$strInvalidAuthMethod = 'M�tode d\'identificaci� incorrecte establert a la configuraci�:';
$strInvalidColumnCount = 'El comptador de columnes ha de ser m�s gran que zero.';
$strInvalidColumn = 'S\'ha especificat una columna incorrecta (%s)!';
$strInvalidCSVFieldCount = 'Comptador de camps incorrecte en l\'entrada CSV a la l�nia %d.';
$strInvalidCSVFormat = 'Format incorrecte a l\'entrada CSV a la l�nia %d.';
$strInvalidCSVParameter = 'Par�metre incorrecte per importaci� CSV: %s';
$strInvalidDatabase = 'Base de dades incorrecte';
$strInvalidFieldAddCount = 'Heu d\'afegir al menys un camp.';
$strInvalidFieldCount = 'La taula ha de tenir al menys un camp.';
$strInvalidLDIImport = 'Aquesta extensi� no suporta importacions comprimides!';
$strInvalidRowNumber = '%d no �s un num. v�lid de fila.';
$strInvalidServerHostname = 'Nom de host inv�lid pel servidor %1$s. Si us plau, reviseu la configuraci�.';
$strInvalidServerIndex = 'Index de servidor inv�lid: "%s"';
$strInvalidTableName = 'Nom de taula incorrecte';

$strJapanese = 'Japon�s';
$strJoins = 'Unions';
$strJumpToDB = 'V�s a la Base de Dades &quot;%s&quot;.';
$strJustDeleteDescr = 'Els usuaris &quot;esborrats&quot; encara tindr�n acc�s al servidor com fins ara mentre no es recarreguin els permissos.';
$strJustDelete = 'Nom�s esborra els usuaris de les taules de permissos.';

$strKeepPass = 'No canvi�s la contrasenya';
$strKeyCache = 'Mem�ria interm�dia de claus';
$strKeyname = 'Nom Clau';
$strKill = 'Finalitzar';
$strKnownExternalBug = 'La funcionalitat %s es veu afectada per un error conegut, veieu %s';
$strKorean = 'Core�';

$strLandscape = 'Horitzontal';
$strLanguage = 'Idioma';
$strLanguageUnknown = 'Idioma desconegut: %1$s.';
$strLatchedPages = 'P�gines inalterables';
$strLatexCaption = 'Titol de Taula';
$strLatexContent = 'Contingut de la taula __TABLE__';
$strLatexContinuedCaption = 'Continuaci� del Titol de taula';
$strLatexContinued = '(contin�a)';
$strLatexIncludeCaption = 'Inclusi� del titol de taula';
$strLatexLabel = 'Etiqueta de clau';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Estructura de la taula __TABLE__';
$strLatvian = 'Let�';
$strLDI = 'CSV usant LOAD DATA';
$strLDILocal = 'Usa clau LOCAL';
$strLengthSet = 'Longitud/Valors*';
$strLimitNumRows = 'registres per p�gina';
$strLinesTerminatedBy = 'L�nies acabades amb';
$strLinkNotFound = 'No s\'ha trobat l\'enlla� ';
$strLinksTo = 'Enlla�os a';
$strLithuanian = 'Litu� ';
$strLocalhost = 'Local';
$strLocationTextfile = 'Ubicaci� de l\'arxiu de text';
$strLogin = 'Identificaci�';
$strLoginInformation = 'Informaci� d\'Identificaci�';
$strLogout = 'Sortir';
$strLogPassword = 'Contrasenya:';
$strLogServer = 'Servidor';
$strLogUsername = 'Nom d\'Usuari:';
$strLongOperation = 'Aquesta operaci� pot ser bastant llarga. Procedim igualment?';

$strMaxConnects = 'max. connexions alhora';
$strMaximalQueryLength = 'Tamany m�xim de la consulta creada';
$strMaximumSize = 'Tamany M�xim: %s%s';
$strMbExtensionMissing = 'No s\'ha trobat l\'extensi� de PHP mbstring i sembla que feu servir un joc de caracters multibyte. Sense la extensi� mbstring, phpMyAdmin �s incapa� de dividir cadenes de text correctament i pot generar resultats inesperats.';
$strMbOverloadWarning = 'Teniu activada la funci� mbstring.func_overload a la configuraci� del vostre PHP. Aquesta opci� �s incompatible amb phpMyAdmin i pot provocar la perdua de dades!';
$strMIME_available_mime = 'Tipus MIME disponibles';
$strMIME_available_transform = 'Transformacions disponibles';
$strMIME_description = 'Descripci�';
$strMIME_MIMEtype = 'Tipus MIME';
$strMIME_nodescription = 'No hi ha cap descripci� disponible per a aquesta transformaci�.<br />Demana a l\'autor qu� fa %s.';
$strMIME_transformation_note = 'Per veure una llista d\'opcions de transformaci� disponibles i els seus tipus MIME de  transformaci�, prem a %sdescripcions de transformaci�%s';
$strMIME_transformation_options_note = 'Entra els valors per a transformar utilitzant aquest format: \'a\', 100, b,\'c\'...<br />Si mai necessites escriure una barra invertida ("\") o un ap�strof ("\'") entre aquests valors, posa una barra invertida devant (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strMIME_transformation_options = 'Opcions de Transformaci�';
$strMIME_transformation = 'Transformaci� del Navegador';
$strMIMETypesForTable = 'TIPUS MIME PER LA TAULA';
$strMIME_without = 'Els tipus MIME en cursiva no tenen funcions de transformaci� a part';
$strModifications = 'Les modificacions han estat desades';
$strModifyIndexTopic = 'Modifica un �ndex';
$strModify = 'Modificar';
$strMoveMenu = 'Men� Mou';
$strMoveTable = 'Mou taula a (base-de-dades<b>.</b>taula):';
$strMoveTableOK = 'Taula %s moguda a %s.';
$strMoveTableSameNames = 'No es pot moure la taula sobre ella mateixa!';
$strMultilingual = 'multiling�e';
$strMyISAMDataPointerSizeDesc = 'El tamany per defecte de l\'apuntador en bytes, usat en CREATE TABLE per a taules MyISAM quan no s\'especifica l\'opci� MAX_ROWS.';
$strMyISAMDataPointerSize = 'Tamany de l\'apuntador de dades';
$strMyISAMMaxExtraSortFileSizeDesc = 'Si l\'arxiu temporal usat per creaci� r�pida d\'un �ndex MyISAM pot ser m�s gran que usant el cau principal per la quantitat especificada aqu�, es recomana fer servir el cau principal.';
$strMyISAMMaxExtraSortFileSize = 'M�xim tamany per arxius temporals en creaci� d\'�ndex';
$strMyISAMMaxSortFileSizeDesc = 'El tamany m�xim per arxius temporals de MySQL es permet usar-lo mentre es torna acrear un �ndex MyISAM (mentre es fa un REPAIR TABLE, ALTER TABLE, o LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Tamany m�xim per arxius temporals de classificaci�';
$strMyISAMRecoverOptionsDesc = 'El modus per a recuperaci� autom�tica en taules MyISAM corruptes, com s\'estableix via l\'opci� d\'inici del servidor --myisam-recover.';
$strMyISAMRecoverOptions = 'Modus de recuperaci� autom�tic';
$strMyISAMRepairThreadsDesc = 'Si aquest valor �s m�s gran que 1, els �ndexos de taules  MyISAM es creen en paralel (cada �ndex en el seu propi fil) mentre s\'executa el proc�s de reparaci� per classificaci�.';
$strMyISAMRepairThreads = 'Reparar fils';
$strMyISAMSortBufferSizeDesc = '�rea assignada per classificar �ndexos MyISAM mentre es fa un REPAIR TABLE o mentre es creen �ndexos amb CREATE INDEX o ALTER TABLE.';
$strMyISAMSortBufferSize = 'Tamany de l\'�rea de classificaci�';
$strMySQLCharset = 'Joc de car�cters de MySQL';
$strMysqlClientVersion = 'Versi� del client MySQL';
$strMySQLConnectionCollation = 'Ordenaci� de la connexi� MySQL'; 
$strMysqlLibDiffersServerVersion = 'La teva llibreria MySQL de PHP MySQL versi� %s �s diferent del teu servidor MySQL versi� %s. Aix� pot provocar comportaments inesperats.';
$strMySQLSaid = 'MySQL diu: ';
$strMySQLShowProcess = 'Mostrar processos';
$strMySQLShowStatus = 'Mostra la informaci� de funcionament del MySQL';
$strMySQLShowVars = 'Mostra les variables de sistema del MySQL';

$strName = 'Nom';
$strNext = 'Seg�ent';
$strNoActivity = 'Sense activitat des de fa %s segons o m�s, entra de nou';
$strNoDatabases = 'No hi ha Bases de Dades';
$strNoDatabasesSelected = 'No s\'han triat Bases de dades.';
$strNoDataReceived = 'No s\'han rebut dades per importar. O b� no s\'ha especificat un nom d\'arxiu, o el tamany de l\'arxiu es m�s gran que el perm�s per la configuraci� del vostre PHP. Veieu PFC(FAQ) 1.16.';
$strNoDescription = 'Sense Descripci�';
$strNoDetailsForEngine = 'No hi ha informaci� detallada de l\'estat disponible per a aquest motor d\'emmagatzematge.';
$strNoDropDatabases = 'Instrucci� "DROP DATABASE" desactivada.';
$strNoExplain = 'Saltar l\'explicaci� de l\'SQL';
$strNoFilesFoundInZip = 'No s\'han trobat arxius dins de l\'arxiu ZIP!';
$strNoFrames = 'phpMyAdmin �s m�s f�cil amb un navegador que <b>suporti marcs (frames)</b>.';
$strNoIndex = 'No s\'ha definit l\'�ndex!';
$strNoIndexPartsDefined = 'No s\'han definit parts de l\'�ndex!';
$strNoModification = 'Sense canvis';
$strNone = 'Res';
$strNo = 'No';
$strNoOptions = 'Aquest format no t� opcions';
$strNoPassword = 'Sense contrasenya';
$strNoPermission = 'El servidor web no t� permissos per a desar l\'arxiu %s.';
$strNoPhp = 'Sense codi PHP';
$strNoPrivileges = 'Sense permissos';
$strNoRights = 'No tens prou permissos per visualitzar aquesta informaci�!';
$strNoRowsSelected = 'No s\'han triat arxius';
$strNoSpace = 'No hi ha prou espai per desar  l\'arxiu %s.';
$strNoTablesFound = 'Base de dades sense taules.';
$strNoThemeSupport = 'No hi ha suport pels temes, si et plau comprova la teva configuraci� i/o els teus temes al directori %s.';
$strNotNumber = 'Aquest valor no �s un n�mero!';
$strNotOK = 'Incorrecte';
$strNotSet = 'Taula <b>%s</b> no trobada o no definida a %s';
$strNoUsersFound = 'No s\'han trobat usuaris.';
$strNoValidateSQL = 'Saltar la Validaci� de l\'SQL';
$strNull = 'Nul';
$strNumberOfFields = 'Nombre de camps';
$strNumberOfTables = 'Nombre de taules';
$strNumSearchResultsInTable = '%s resultat(s) a la taula <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultat(s)';
$strNumTables = 'Taules';

$strOK = 'Correcte';
$strOpenDocumentSpreadsheet = 'Full de c�lcul Open Document';
$strOpenDocumentText = 'Text format Open Document';
$strOpenNewWindow = 'Obrir nova finestra de phpMyAdmin';
$strOperations = 'Operacions';
$strOperator = 'Operador';
$strOptimizeTable = 'Optimitza la taula';
$strOptions = 'Opcions';
$strOr = 'O';
$strOverhead = 'Defragmentat';
$strOverwriteExisting = 'Sobreescriure arxiu(s) existent(s)';

$strPageNumber = 'N�mero de p�gina:';
$strPagesToBeFlushed = 'P�gines per a purgar';
$strPaperSize = 'Tamany de paper';
$strPartialImport = 'Importaci� parcial';
$strPartialText = 'Texts Parcials';
$strPasswordChanged = 'La contrasenya per a %s s\'ha canviat correctament.';
$strPassword = 'Contrasenya';
$strPasswordEmpty = 'La contrasenya �s buida!';
$strPasswordHashing = 'Contrasenya Hashing';
$strPasswordNotSame = 'Les contrasenyes no coincideixen!';
$strPdfDbSchema = 'Esquema de la base de dades "%s" - P�gina %s';
$strPdfInvalidTblName = 'La taula "%s" no existeix!';
$strPdfNoTables = 'No hi ha taules';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Crea un llistat que cont� les dades d\'una sola taula)';
$strPDFReportTitle = 'T�tol de llistat';
$strPerHour = 'per hora';
$strPerMinute = 'per minut';
$strPerSecond = 'per segon';
$strPersian = 'Persa';
$strPhoneBook = 'Libreta d\' adreces';
$strPHP40203 = 'S\'est� fent servir la versi� 4.2.3 de PHP, que t� un serios error amb cadenes de multi-byte (mbstring). Mira l\'informe d\'error 19404 de PHP. No es recomana aquesta versi� de PHP per treballar amb phpMyAdmin.';
$strPhp = 'Crear codi PHP';
$strPHPVersion = 'PHP versi�';
$strPleaseSelectPrimaryOrUniqueKey = 'Tria la clau principal o una clau �nica';
$strPmaDocumentation = 'Documentaci� de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> HA d\'estar a l\'arxiu de configuraci�!';
$strPmaWiki = 'wiki del phpMyAdmin';
$strPolish = 'Polac';
$strPortrait = 'Vertical';
$strPos1 = 'Inici';
$strPrevious = 'Anterior';
$strPrimaryKeyHasBeenDropped = 'S\'ha esborrat la clau principal';
$strPrimaryKeyName = 'El nom de la clau principal ha de ser ... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>ha de ser</b> el nom i <b>nom�s</b> el nom de la clau principal!)';
$strPrimary = 'Principal';
$strPrint = 'Imprimir';
$strPrintViewFull = 'Vista d\'impresi� (amb texts sencers)';
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
$strPrivDescExecute = 'Permet executar processos enmagatzemats (stored procedures); No t� efecte en aquesta versi� de MySQL.';
$strPrivDescFile = 'Permet importar i exportar dades amb arxius externs.';
$strPrivDescGrant = 'Permet afegir usuaris i permissos sense tenir que recarregar les taules de permissos.';
$strPrivDescIndex = 'Permet crear i eliminar indexos.';
$strPrivDescInsert = 'Permet inserir i modificar dades.';
$strPrivDescLockTables = 'Permet bloquejar taules per l\'actual fil d\'execuci�.';
$strPrivDescMaxConnections = 'Limita el numero de noves connexions que pot obrir l\'usuari per hora.';
$strPrivDescMaxQuestions = 'Limita el numero de consultes que pot enviar l\'usuari al servidor per hora.';
$strPrivDescMaxUpdates = 'Limita el numero d\'ordres que pot executar l\'usuari canviant qualsevol taula o base de dades per hora.';
$strPrivDescMaxUserConnections = 'L�mita el nombre de connexions simult�nies que l\'usuari pot tenir.';
$strPrivDescProcess3 = 'Permet cancel.lar processos d\'altres usuaris.';
$strPrivDescProcess4 = 'Permet veure completament les consultes a la llista de processos.';
$strPrivDescReferences = 'No t� efecte en aquesta versi� de MySQL.';
$strPrivDescReload = 'Permet recarregar les configuracions del servidor i buidar les seves mem�ries cau.';
$strPrivDescReplClient = 'Dona el dret a l\'usuari de preguntar quins servidors mestres / esclaus hi ha.';
$strPrivDescReplSlave = 'Es necessari per a la replicaci� en servidors esclaus.';
$strPrivDescSelect = 'Permet llegir dades.';
$strPrivDescShowDb = 'Dona acc�s a la llista completa de bases de dades.';
$strPrivDescShowView = 'Permet fer consultes de tipus SHOW CREATE VIEW.'; 
$strPrivDescShutdown = 'Permet parar el servidor.';
$strPrivDescSuper = 'Permet connectar, encara que s\'hagi arribat al m�xim numero de connexions perm�s; Es necessari per moltes operacions d\'administraci� com ara establir variables globals o b� cancel.lar fils d\'execuci� d\'altres usuaris.';
$strPrivDescUpdate = 'Permet canviar dades.';
$strPrivDescUsage = 'Sense permissos.';
$strPrivileges = 'Permissos';
$strPrivilegesReloaded = 'Els permissos s\'han recarregat correctament.';
$strProcedures = 'Procediments';
$strProcesses = 'Processos';
$strProcesslist = 'Llista de processos';
$strProfiling = 'Perfils';
$strProtocolVersion = 'Versi� del protocol';
$strPutColNames = 'Posa els noms de camp a la primera fila';

$strQBE = 'Consulta segons exemple';
$strQBEDel = 'Sup';
$strQBEIns = 'Ins';
$strQueryCache = 'Mem�ria cau de consultes';
$strQueryFrame = 'Finestra de la Consulta';
$strQueryOnDb = 'Consulta SQL a la base de dades <b>%s</b>:';
$strQueryResultsOperations = 'Operacions de resultats de consultes';
$strQuerySQLHistory = 'Historial SQL';
$strQueryStatistics = '<b>Estad�stiques de Consultes</b>: Des de l\'�ltim inici, s\'han enviat %s consultes al servidor.';
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
$strRelationDeleted = 'Relaci� esborrada';
$strRelationNotWorking = 'Les caracter�stiques addicionals per treballar amb taules enlla�ades s\'han desactivat. Per saber perqu� prem a %saqu�%s.';
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
$strReplaceNULLBy = 'Canv�a NULL per';
$strReplaceTable = 'Canviar les dades de la taula per l\'arxiu ';
$strReplication = 'Replicaci�';
$strReset = 'Esborrar';
$strResourceLimits = 'Limit de recursos';
$strRestartInsertion = 'Reiniciar l\'inserci� amb %s files';
$strReType = 'Reescriure';
$strRevokeAndDelete = 'Denega tots els permissos actius dels usuaris i els esborra despr�s.';
$strRevokeAndDeleteDescr = 'Els usuaris encara tindran el perm�s USAGE fins que es recarreguin els permissos.';
$strRevokeMessage = 'Has tret els permissos per %s';
$strRevoke = 'Treure';
$strRomanian = 'Roman�s';
$strRoutineReturnType = 'Tipus de retorn';
$strRoutines = 'Rutines';
$strRowLength = 'Tamany de fila';
$strRows = 'Fila';
$strRowsFrom = 'Files comen�ant des de';
$strRowSize = 'Mida de fila ';
$strRowsModeFlippedHorizontal = 'horitzontal (cap�aleres rotades)';
$strRowsModeHorizontal = 'horitzontal';
$strRowsModeOptions = ' en mode %s i repeteix cap�aleres despr�s de %s cel�les ';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estad�stica de files';
$strRunning = 'funcionant a %s';
$strRunQuery = 'Executa consulta';
$strRunSQLQuery = 'Executa consulta/s SQL a la Base de Dades %s';
$strRunSQLQueryOnServer = 'Executar consulta/es SQL al servidor %s';
$strRussian = 'Rus';

$strSave = 'Desar';
$strSaveOnServer = 'Desar al servidor al directori %s';
$strSavePosition = 'Desar posici�';
$strScaleFactorSmall = 'El factor de l\'escala �s massa petit per posar l\'esquema en una p�gina';
$strSearch = 'Cercar';
$strSearchFormTitle = 'Cercar a la base de dades';
$strSearchInTables = 'A la(les) taula(es):';
$strSearchNeedle = 'Paraula(es) o valor(s) a cercar (comod�: "%"):';
$strSearchOption1 = 'al menys una d\'aquestes paraules';
$strSearchOption2 = 'Totes les paraules';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'com a expressi� regular';
$strSearchResultsFor = 'Resultats de la recerca per a "<i>%s</i>" %s:';
$strSearchType = 'Trobat:';
$strSecretRequired = 'L\'arxiu de configuraci� necessita ara una frase de pas secreta (blowfish_secret).';
$strSelectADb = 'Tria una Base de Dades';
$strSelectAll = 'Tria Tot';
$strSelectBinaryLog = 'Tria el registre binari per veure';
$strSelectFields = 'Tria els camps (un com a m�nim):';
$strSelectForeignKey = 'Triar clau externa';
$strSelectNumRows = 'en consulta';
$strSelectReferencedKey = 'Tria la clau referenciada';
$strSelectTables = 'Tria Taules';
$strSend = 'enviar';
$strSent = 'Enviat';
$strServerChoice = 'Elecci� de Servidor';
$strServerNotResponding = 'El servidor no respon';
$strServer = 'Servidor';
$strServers = 'Servidors';
$strServerStatusDelayedInserts = 'Insercions demorades';
$strServerStatus = 'Informaci� d\'execuci�';
$strServerStatusUptime = 'Aquest servidor MySQL �s en marxa durant %s. Es va iniciar en %s.';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Ocupaci� de servidor</b>: Aquestes taules mostren la ocupaci� de la xarxa d\'aquest servidor MySQL des de l\'�ltim inici.';
$strServerVars = 'Variables i configuracions del servidor';
$strServerVersion = 'Versi� del servidor';
$strSessionStartupErrorGeneral = 'No es pot iniciar una sessi� sense errors, comprova els error obtinguts al teu registre de PHP i/o servidor web i configura el teu entorn de PHP acuradament.';
$strSessionValue = 'Valor de sessi�';
$strSetEnumVal = 'Si el tipus de camp �s "enum" o "set", entra els valors fent servir el format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure la barra invertida ("\") o la cometa simple ("\'") abans d\'aquests valors, escriu barres invertides (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strShowAll = 'Mostra tot';
$strShowColor = 'Mostra color';
$strShowDatadictAs = 'Format del Diccionari de Dades';
$strShowFullQueries = 'Mostra Consultes completes';
$strShowGrid = 'Mostra graella';
$strShowHideLeftMenu = 'Men� esquerre Mostra/Amaga';
$strShowingBookmark = 'Mostrant consultes desades';
$strShowingPhp = 'Mostrant com a codi PHP';
$strShowingRecords = 'Mostrant registres: ';
$strShowingSQL = 'Mostrant consulta SQL';
$strShow = 'Mostra';
$strShowOpenTables = 'Mostrar taules obertes';
$strShowPHPInfo = 'Mostra informaci� de PHP';
$strShowSlaveHosts = 'Mostrar servidors esclaus';
$strShowSlaveStatus = 'Mostrar estat d\'esclaus';
$strShowStatusBinlog_cache_disk_useDescr = 'El nombre de transaccions que han fet servir el registre binari temporal per� que excedeixen el valor de  binlog_cache_size i usen un arxiu temporal per desar elements de la transacci�.';
$strShowStatusBinlog_cache_useDescr = 'El nombre de transaccions que han fet servir el registre binari temporal.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'El nombre de taules temporals en disc creades autom�ticament per el servidor mentre executa instruccions. Si Created_tmp_disk_tables �s gran, potser vols incrementar el valor de tmp_table_size per fer que les taules temporals treballin en mem�ria en lloc de treballar en disc.';
$strShowStatusCreated_tmp_filesDescr = 'Arxius temporals creats per mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'El nombre de taules temporals creades en mem�ria per el servidor mentre executa instruccions.';
$strShowStatusDelayed_errorsDescr = 'El nombre de files escrites amb INSERT DELAYED en les que s\'ha detectat quelcom error (possile clau duplicada).';
$strShowStatusDelayed_insert_threadsDescr = 'El nombre de gestors de fils de INSERT DELAYED en �s. Cada taula diferent �n s\'usa INSERT DELAYED t� el seu propi fil.';
$strShowStatusDelayed_writesDescr = 'El nombre de files escrites amb INSERT DELAYED.';
$strShowStatusFlush_commandsDescr = 'El nombre d\'instruccions FLUSH executades.';
$strShowStatusHandler_commitDescr = 'El nombre d\'instruccions COMMIT internes.';
$strShowStatusHandler_deleteDescr = 'El nombre de vegades que s\'ha esborrat una fila d\'una taula.';
$strShowStatusHandler_discoverDescr = 'El servidor MySQL pot preguntar al motor d\'enmagatzemament NDB Cluster si coneix quelcom taula amb el nom especificat. Aix� s\'anomena descobriment. Handler_discover indica el nombre de taules descobertes.';
$strShowStatusHandler_read_firstDescr = 'El nombre de vegades que s\'ha llegit la primera entrada des d\'un �ndex. Si �s alt, suggereix que el servidor est� fent moltes cerques d\'�ndex complet; per exemple, SELECT col1 FROM taula, assumint que col1 �s indexat.';
$strShowStatusHandler_read_keyDescr = 'El nombre de peticions basades en una clau per llegir una fila. Si �s alt, �s una bona indicaci� de que les consultes i taules est�n indexades adequadament.';
$strShowStatusHandler_read_nextDescr = 'El nombre de peticions per llegir la seg�ent fila en l\'ordre de la clau. Aix� s\'incrementa si s\'est� consultant una columna d\'index amb limitaci� de rang o si s\'est� fent una cerca d\'index.';
$strShowStatusHandler_read_prevDescr = 'El nombre de peticions per llegir la fila anterior en l\'ordre de la clau. Aquest m�tode de lectura s\'utilitza principalment per optimizar ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'El nombre de peticions per llegir una fila basada en una posici� fixa. Aix� �s alt si es fan moltes consultes que requereixen ordenaci� del resultat. Probablement tens moltes consultes que fan que MySQL cerqui les taules senceres o b� hi ha joins que no fan servir les claus adequadament.';
$strShowStatusHandler_read_rnd_nextDescr = 'El nombre de peticions per llegir la seg�ent fila a l\'arxiu de dades. Aix� �s alt si es fan moltes cerques de taula. Generalment, suggereix que les taules no est�n indexades adequadament o b� les consultes no est�n fetes per aprofitar les avantatges dels �ndexos definits.';
$strShowStatusHandler_rollbackDescr = 'El nombre d\'instruccions ROLLBACK.';
$strShowStatusHandler_updateDescr = 'El nombre de peticions per a actualitzar una fila en una taula.';
$strShowStatusHandler_writeDescr = 'El nombre de peticions per a insertar una fila en una taula.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'El nombre de p�gines contenint dades (brutes o netes).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'El nombre de p�gines actualment brutes.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'El nombre de p�gines a la mem�ria intermitja que s\'han demanat per ser actualitzades.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'El nombre de p�gines lliures.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'El nombre de p�gines bloquejades a la mem�ria intermitja de InnoDB. Aquestes p�gines s\'est�n llegint o escrivint actualment o no es poden actualitzar o esborrar per qualsevol altra ra�.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'El nombre de p�gines en �s degut a que s\'han marcat per tasques administratives com a bloqueixos de files o l\'index del hash adaptatiu. Aquest valor es pot calcular com Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Tamany total de la mem�ria intermitja, en p�gines.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'El nombre de lectures aleat�ries d\'InnoDB iniciades. Aix� passa quan una consulta cerca en una gran part de una taula per� en ordre aleatori.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'El nombre de lectures secuencials d\'InnoDB iniciades. Aix� passa quan InnoDB fa una cerca secuencial a la taula sencera.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'El nombre de peticions de lectures l�giques que InnoDB ha fet.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'El nombre de peticions de lectures l�giques que InnoDB no pot satisfer de la mem�ria intermitja i ha de fer lectures de p�gines individuals.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalment, les escritures a la mem�ria intermitja d\'InnoDB es fan en segon pla. En canvi, si �s necessari llegir o crear una p�gina i no hi ha p�gines netes disponibles, fa falta esperar a que primer s\'actualitzin p�gines. Aquest comptador mostra inst�ncies d\'aquestes esperes. Si el tamany de la mem�ria intermitja �s adequat, aquest valor s�l ser petit.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'El nombre d\'escriptures fetes a la mem�ria intermitja d\'InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'El nombre d\'operacions fsync() aproximades.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'El nombre actual d\'operacions fsync() pendents.';
$strShowStatusInnodb_data_pending_readsDescr = 'El nombre actual de lectures pendents.';
$strShowStatusInnodb_data_pending_writesDescr = 'El nombre actual d\'escritures pendents.';
$strShowStatusInnodb_data_readDescr = 'La quantitat aproximada de dades llegides, en bytes.';
$strShowStatusInnodb_data_readsDescr = 'El nombre total de dades llegides.';
$strShowStatusInnodb_data_writesDescr = 'El nombre total de dades escrites.';
$strShowStatusInnodb_data_writtenDescr = 'La quantitat aproximada de dades escrites, en bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'El nombre de dobles escriptures realitzades i el nombre de p�gines escrites per a aquest prop�sit.';
$strShowStatusInnodb_dblwr_writesDescr = 'El nombre de dobles escriptures realitzades i el nombre de p�gines escrites per a aquest prop�sit.';
$strShowStatusInnodb_log_waitsDescr = 'El nombre d\'esperes fetes degut al petit tamany de la mem�ria interm�dia del registre i a esperar a que s\'actualitz�s abans de continuar.';
$strShowStatusInnodb_log_write_requestsDescr = 'El nombre de peticions d\'escriptura al registre.';
$strShowStatusInnodb_log_writesDescr = 'El nombre d\'escriptures f�siques a l\'arxiu de registre.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'El nombre d\'escriptures fsync fetes a l\'arxiu de registre.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'El nombre d\'operacions fsync pendents a l\'arxiu de registre.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Escriptures pendents a l\'arxiu de registre.';
$strShowStatusInnodb_os_log_writtenDescr = 'El nombre de bytes escrits a l\'arxiu de registre.';
$strShowStatusInnodb_pages_createdDescr = 'El nombre de p�gines creades.';
$strShowStatusInnodb_page_sizeDescr = 'El tamany de p�gina d\'InnoDB compilat (per defecte 16KB). Bastants valors es comptabilitzen en p�gines; el tamany de p�gina permet convertir-lo f�cilment a bytes.';
$strShowStatusInnodb_pages_readDescr = 'El nombre de p�gines llegides.';
$strShowStatusInnodb_pages_writtenDescr = 'El nombre de p�gines escrites.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'El nombre de bloquejos de files actualment en espera.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'El temps promig en fer un bloqueig de fila, en milisegons.';
$strShowStatusInnodb_row_lock_timeDescr = 'El temps total emprat en fer bloquejos de files, en milisegons.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'El temps m�xim en fer un bloqueig de fila, en milisegons.';
$strShowStatusInnodb_row_lock_waitsDescr = 'El nombre de vegades que un bloqueig de fila ha estat en espera.';
$strShowStatusInnodb_rows_deletedDescr = 'El nombre de files esborrades de taules InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'El nombre de files afegides a taules InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'El nombre de files llegides de taules InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'El nombre de files actualitzades en taules InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'El nombre de bloquejos de clau a la mem�ria cau de les claus que han canviat per� que encara no han estat actualitzades a disc. Es coneix com a Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'El nombre de blocs no usats a la mem�ria cau de les claus. Aquest valor es pot fer servir per saber qu�nta mem�ria cau de les claus s\'utilitza.';
$strShowStatusKey_blocks_usedDescr = 'El nombre de blocs usats a la mem�ria cau de les claus. Aquest valor �s la marca indicativa del m�xim nombre de blocs usats mai a l\'hora.';
$strShowStatusKey_read_requestsDescr = 'El nombre de peticions de lectura d\'un bloc de clau de la mem�ria cau.';
$strShowStatusKey_readsDescr = 'El nombre de lectures f�siques d\'un bloc de clau del disc. Si Key_reads �s gran, llavors el valor de key_buffer_size probablement �s massa petit. El rati de la mem�ria cau es pot calcular com Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'El nombre de peticions d\'escriptura d\'un bloc de clau a la mem�ria cau.';
$strShowStatusKey_writesDescr = 'El nombre d\'escriptures f�siques d\'un bloc de clau a disc.';
$strShowStatusLast_query_costDescr = 'El cost total de la darrera consulta compilada tal com el valora l\'optimitzador de consultes. �s �til per comparar el cost de diferents plans de consulta per a la mateixa consulta. El valor 0 vol dr que encara no s\'ha compilat cap consulta.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'El nombre de files esperant a ser escrites en cues INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'El nombre de taules que han estat obertes. Si el nombre de taules obertes �s gran, probablement el valor de mem�ria cau de taula �s massa petit.';
$strShowStatusOpen_filesDescr = 'El nombre d\'arxius que est�n oberts.';
$strShowStatusOpen_streamsDescr = 'El nombre de fluxes que est�n oberts (usats principalment per a registre).';
$strShowStatusOpen_tablesDescr = 'El nombre de taules que est�n obertes.';
$strShowStatusQcache_free_blocksDescr = 'El nombre de blocs de mem�ria lliures a la mem�ria cau de consultes.';
$strShowStatusQcache_free_memoryDescr = 'La quantitat de mem�ria liure per a mem�ria cau de consultes.';
$strShowStatusQcache_hitsDescr = 'El nombre d\'encerts a mem�ria cau.';
$strShowStatusQcache_insertsDescr = 'El nombre de consultes afegides a la mem�ria cau.';
$strShowStatusQcache_lowmem_prunesDescr = 'El nombre de consultes tretes de la mem�ria cau per alliberar mem�ria per deixar lloc a noves consultes. Aquesta informaci� pot ajudar a ajustar el tamany de la mem�ria cau de consultes. La mem�ria cau de consultes utilitza l\'estrat�gia menys recentment usada(least recently used - LRU) per decidir quines consultes treure de la mem�ria cau.';
$strShowStatusQcache_not_cachedDescr = 'El nombre de consultes no enviades a la mem�ria cau (no enviables, o no enviades degut al par�metre query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'El nombre de consultes registrades a la mem�ria cau.';
$strShowStatusQcache_total_blocksDescr = 'El nombre total de blocs a la mem�ria cau de consultes.';
$strShowStatusReset = 'Reiniciar';
$strShowStatusRpl_statusDescr = 'L\'estat de la replicaci� a prova d\'errades (no implementat encara).';
$strShowStatusSelect_full_joinDescr = 'El nombre de joins que no usen indexos. Si aquest valor no �s 0, s\'haurien de comprovar acuradament els indexos de les taules.';
$strShowStatusSelect_full_range_joinDescr = 'El nombre de joins que han usat un rang de cerca en una taula de refer�ncia.';
$strShowStatusSelect_range_checkDescr = 'El nombre de joins sense claus que comproven per l\'�s de claus despr�s de cada fila. (Si aquiest valor no �s 0, s\'haurien de comprovar acuradament els indexos de les taules.)';
$strShowStatusSelect_rangeDescr = 'El nombre de joins que han usat rangs a la primera taula. (Normalment no �s cr�tic si el valor no �s molt gran.)';
$strShowStatusSelect_scanDescr = 'El nombre de joins que han fet una cerca a la primera taula sencera.';
$strShowStatusSlave_open_temp_tablesDescr = 'El nombre de taules temporals obertes actualment pel fil esclau de SQL.';
$strShowStatusSlave_retried_transactionsDescr = 'Nombre total (des de l\'arrencada) de vegades que el fil esclau de replicaci� de SQL ha recuperat transaccions.';
$strShowStatusSlave_runningDescr = 'Aix� �s ACTIU (ON) si aquest servidor �s un esclau que est� connectat a un mestre.';
$strShowStatusSlow_launch_threadsDescr = 'El nombre de fils que han tardat m�s que slow_launch_time segons a crear.';
$strShowStatusSlow_queriesDescr = 'El nombre de consultes que han tardat m�s que long_query_time segons.';
$strShowStatusSort_merge_passesDescr = 'El nombre de passades d\'intercal.laci� que l\'algorisme de classificaci� ha hagut de fer. Si aquest valor �s gran, s\'hauria de considerar incrementar el valor de la variable de sistema sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'El nombre de classificacions fetes amb rangs.';
$strShowStatusSort_rowsDescr = 'El nombre de files classificades.';
$strShowStatusSort_scanDescr = 'El nombre de classificacions fetes cercant la taula.';
$strShowStatusTable_locks_immediateDescr = 'El nombre de vegades que un bloqueig de taula s\'ha fet immediatament.';
$strShowStatusTable_locks_waitedDescr = 'El nombre de vegades que un bloqueig de taula no s\'ha pogut fer immediatament i s\'ha necessitat una espera. Si aix� �s alt, i es detecten problemes de rendiment, s\'hauria de considerar l\'optimitzaci� de les consultes, o tamb� dividir la taula o taules en v�ries o b� utilitzar la replicaci�.';
$strShowStatusThreads_cachedDescr = ' El nombre de fils a la mem�ria cau de fil. L\'index de mem�ria cau es pot comptar com Threads_created/Connections. Si aquest valor �s vermell s\'hauria d\'augmentar el valor de thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'El nombre de connexions obertes simult�niament.';
$strShowStatusThreads_createdDescr = ' El nombre de fils creats per gestionar connexions. Si Threads_created �s gran, pots voler augmentar el valor de thread_cache_size. (Normalment aix� no d�na una millora de rendiment notable si es t� una bona aplicaci� de fil.)';
$strShowStatusThreads_runningDescr = 'El nombre de fils que no est�n dormint.';
$strShowTableDimension = 'Mostra dimensi� de les taules';
$strShowTables = 'Mostra taules';
$strShowThisQuery = ' Mostra aquesta consulta de nou ';
$strSimplifiedChinese = 'Xin�s Simplificat';
$strSingly = '(nom�s)';
$strSize = 'Mida';
$strSkipQueries = 'Nombre de registres(consultes) a saltar des de l\'inici';
$strSlovak = 'Eslovac';
$strSlovenian = 'Eslov�';
$strSmallBigAll = 'Tot Petit/Gran';
$strSnapToGrid = 'Aliniar a la graella';
$strSocketProblem = '(o el s�col del servidor local MySQL no est� configurat correctament)';
$strSortByKey = 'Classifica per la clau';
$strSort = 'Classificaci�';
$strSorting = 'Classificant';
$strSpaceUsage = 'Utilitzaci� d\'espai';
$strSpanish = 'Espanyol';
$strSplitWordsWithSpace = 'Paraules separades per un espai (" ").';
$strSQLCompatibility = 'Modus de compatibilitat SQL';
$strSQLExportType = 'Tipus d\' Exportaci�';
$strSQLParserBugMessage = '�s possible que hagueu trobat un error a l\'int�rpret SQL. Si us plau, comproveu la sintaxi de la consulta i verifiqueu que les cometes estiguin al seu lloc i facin parelles. Un altra possible causa de l\'errada �s que estigueu pujant un arxiu amb dades bin�ries per fora de l\'�rea de text delimitada. Tamb� podeu provar la consulta a la interf�cie de comandes de MySQL. La sortida seg�ent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema. Si encara teniu problemes o si l\'int�rpret falla i l\'interf�cie de comandes funciona, redu�u la consulta a la part de l\'SQL que produeix l\'errada, i envieu un informe d\'error amb la cadena de dades de la secci� de TALL indicada avall:';
$strSQLParserUserError = 'Sembla que hi ha un error a la consulta SQL. La sortida seg�ent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema';
$strSQLQuery = 'crida SQL';
$strSQLResult = 'Resultat SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identificador Incorrecte';
$strSQPBugUnclosedQuote = 'Cometa no tancada';
$strSQPBugUnknownPunctuation = 'Signe de puntuaci� desconegut';
$strStandInStructureForView = 'Stand-in estructura per a vista';
$strStatCheckTime = 'Darrera comprovaci�';
$strStatCreateTime = 'Creaci�';
$strStatement = 'Sent�ncies';
$strStatisticsOverrun = 'En un servidor ocupat, els comptadors de bytes poden excedir el seu tamany, llavors les estad�stiques donades pel servidor MySQL poden ser incorrectes.';
$strStatUpdateTime = 'Darrera actualitzaci�';
$strStatus = 'Estat';
$strStorageEngine = 'Motor d\'emmagatzematge';
$strStorageEngines = 'Motors d\'emmagatzematge';
$strStrucCSV = 'dades CSV ';
$strStrucData = 'Estructura i dades';
$strStrucExcelCSV = 'CSV per dades de MS Excel';
$strStrucNativeExcel = 'Dades Natives MS Excel';
$strStrucOnly = 'Nom�s l\'estructura';
$strStructPropose = 'Proposa una estructura de taula';
$strStructure = 'Estructura';
$strStructureForView = 'Estructura per a vista';
$strSubmit = 'Enviar';
$strSuccess = 'La vostra comanda SQL ha estat executada amb �xit';
$strSum = 'Suma';
$strSwedish = 'Suec';
$strSwitchToDatabase = 'Canviar a la base de dades copiada';
$strSwitchToTable = 'Canvia a una taula copiada';

$strTableAlreadyExists = 'La taula %s ja existeix!';
$strTableComments = 'Comentaris de la taula';
$strTableEmpty = 'El nom de la taula �s buit!';
$strTableHasBeenDropped = 'S\'ha esborrat la taula %s';
$strTableHasBeenEmptied = 'S\'ha buidat la taula %s';
$strTableHasBeenFlushed = 'S\'ha buidat la mem�ria cau de la taula %s';
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
$strThai = 'Tailand�s';
$strThemeDefaultNotFound = 'Tema per defecte %s no trobat!';
$strThemeNoPreviewAvailable = 'No hi ha vista pr�via disponible.';
$strThemeNotFound = 'Tema %s no trobat!';
$strThemeNoValidImgPath = 'El cam� de les imatges del tema %s �s incorrecte!';
$strThemePathNotFound = 'No s\'ha trobat el cam� de les imatges del tema %s!';
$strTheme = 'Tema / Estil';
$strThisHost = 'Aquest Host';
$strThreads = 'Fils';
$strThreadSuccessfullyKilled = 'Fil %s cancel.lat correctament.';
$strTimeoutInfo = 'La darrera importaci� ha esgotat el temps, despr�s de reenviar continuar� des de la posici� %d.';
$strTimeoutNothingParsed = 'Per� a la darrera importaci� no s\'han processat dades, el que normalment indica que phpMyAdmin no ha pogut finalitzar aquesta importaci� a menys que incrementeu els l�mits de temps de php.';
$strTimeoutPassed = 'Temps exaurit de l\'arxiu d\'ordres, si voleu finalitzar l\'importaci�, torneu a enviar el mateix arxiu a importar i el proc�s continuar�.';
$strTime = 'Temps';
$strToFromPage = 'plana a/de';
$strToggleScratchboard = 'Canvia l\' scratchboard';
$strToggleSmallBig = 'Canviar petit/gran';
$strToSelectRelation = 'Per triar una relaci�, clica :';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Xin�s Tradicional';
$strTraditionalSpanish = 'Espanyol Tradicional';
$strTraffic = 'Tr�fic';
$strTransactionCoordinator = 'Coordinador de transaccions';
$strTransformation_application_octetstream__download = 'Mostra un enlla� per descarregar les dades bin�ries d\'un camp. La primera dada �s el nom d\'arxiu binari. La segona dada �s un possible nom de camp d\'una taula que contingui el nom d\'arxiu. Si es facilita la segona dada �s necessari tenir la primera dada buida';
$strTransformation_application_octetstream__hex = 'Mostra la representaci� hexadecimal de les dades. El primer par�metre �s opcional i especifica c�m de sovint s\'afegir� l\'espai (per defecte a 2 \"nibbles\").';
$strTransformation_image_jpeg__inline = 'Mostra una miniatura amb enlla�; opcions: ample,alt en pixels (respecta la proporci� original)';
$strTransformation_image_jpeg__link = 'Es mostra com a enlla� a la imatge.';
$strTransformation_image_png__inline = 'Veure image/jpeg: en linia';
$strTransformation_text_plain__dateformat = 'Mostra un camp TIME, TIMESTAMP, DATETIME o camp de data unix com a data formatejada. La primera opci� �s la difer�ncia (en hores) que s\'afegir�n a la data (Defecte: 0). Usa la segona opci� per indicar un format diferent de data/hora. La tercera opci� determina si es vol visualitzar l\'hora local o UTC (usant els texts "local" o "utc"). Segons aix�, el format de data t� diferent valor - per a "local" veieu la documentaci� de la funci� strftime() de PHP i per a "utc" s\'obt� amb l\'�s de la funci� gmdate().';
$strTransformation_text_plain__external = 'NOM�S LINUX: Llen�a una aplicaci� externa i facilita el camp de dades via standard input. Retorna per standard output de l\'aplicaci�. El defecte �s Tidy, per interpretar codi HTML. Per raons de seguretat, has d\' editar manualment l\'arxiu libraries/transformations/text_plain__external.inc.php i afegir les eines que vulguis fer servir. La primera opci� �s, llavors, el numero del programa que vols fer servir i la segona opci� s�n els par�metres per el programa. El tercer par�metre, si es posa a 1, convertir� la sortida fent servir htmlspecialchars() (El defecte �s 1). El quart par�metre, si val 1, posar� un NOWRAP al contingut de les cel.les de forma que la sortida sencera es mostrar� sense reformatejar (Per defecte 1)';
$strTransformation_text_plain__formatted = 'Conserva el format original del camp. No es fa cap canvi.';
$strTransformation_text_plain__imagelink = 'Mostra una imatge i un enlla�, el camp cont� el nom de l\'arxiu; la primera opci� �s un prefixe com "http://domini.com/", la segona opci� �s l\'amplada en pixels, la tercera �s l\'al�ada.';
$strTransformation_text_plain__link = 'Mostra un enlla�, el camp cont� el nom de l\'arxiu; la primera opci� �s un prefixe com "http://domini.com/", la segona opci� �s el titol del enlla�.';
$strTransformation_text_plain__sql = 'Formateig del text com a consulta SQL amb resaltat de sintaxi.';
$strTransformation_text_plain__substr = 'Mostra una part d\'una cadena de text. La primera opci� �s el nombre de caracters a saltar des de l\'inici de la cadena (Per defecte 0). La segona opci� �s el nombre de caracters a retornar (Per defecte: fins al final de la cadena). La tercera opci� �s la cadena a afegir a l\'inici o al final quan hi ha truncament (Per defecte: "...").';
$strTriggers = 'Disparadors';
$strTruncateQueries = 'Talla les consultes mostrades';
$strTurkish = 'Turc';
$strType = 'Tipus';

$strUkrainian = 'Ucrain�s ';
$strUncheckAll = 'Desmarcar tot';
$strUnicode = 'Unicode';
$strUnique = '�nica';
$strUnknown = 'Desconegut';
$strUnselectAll = 'Desmarca tot';
$strUnsupportedCompressionDetected = 'S\'intenta carregar un arxiu amb una compresi� no suportada (%s). O b� aquest suport no s\'ha implementat encara o b� el teniu desactivat a la configuraci�.';
$strUpdatePrivMessage = 'Heu actualitzat els permissos de %s.';
$strUpdateProfileMessage = 'S\'ha actualitzat el perfil.';
$strUpdateQuery = 'Actualitza consulta';
$strUpdComTab = 'Mira a la documentaci� c�m actualitzar la teva Taula de Comentaris de les Columnes';
$strUpgrade = 'Es necessari actualitzar a %s %s o posterior.';
$strUploadErrorCantWrite = 'Error en gravar l\'arxiu al disc.';
$strUploadErrorExtension = 'Pujada de l\'arxiu aturada per l\'extensi�.';
$strUploadErrorFormSize = 'El tamany d\'arxiu pujat supera la directiva MAX_FILE_SIZE especificada al formulari HTML.';
$strUploadErrorIniSize = 'El tamany d\'arxiu pujat supera la directiva upload_max_filesize de php.ini.';
$strUploadErrorNoTempDir = 'No es troba la carpeta temporal.';
$strUploadErrorPartial = 'Nom�s s\'ha pujat parcialment l\'arxiu.';
$strUploadErrorUnknown = 'Error desconegut al pujar l\'arxiu.';
$strUploadLimit = 'Probablement has triat d\'enviar un arxiu massa gran. Consulta la %sdocumentaci�%s per trobar formes de modificar aquest l�mit.';
$strUploadsNotAllowed = 'No es permet pujar arxius en aquest servidor.';
$strUsage = '�s';
$strUseBackquotes = 'Usa &quot;backquotes&quot; amb taules i noms de camps';
$strUsedPhpExtensions = 'Extensions de PHP usades';
$strUseHostTable = 'Utilitza la Taula de Hosts';
$strUserAlreadyExists = 'L\'usuari %s ja existeix!';
$strUserEmpty = 'El nom d\'usuari �s buit!';
$strUserName = 'Nom d\'usuari';
$strUserNotFound = 'No s\'ha trobat l\'usuari triat a la taula de permissos.';
$strUserOverview = 'Informaci� general de l\'usuari';
$strUsersDeleted = 'S\'han esborrat correctament els usuaris triats.';
$strUsersHavingAccessToDb = 'Usuaris amb acc�s a &quot;%s&quot;';
$strUser = 'Usuari';
$strUseTabKey = 'Usa la tecla TAB per moure\'t de valor en valor, o CTRL+fletxes per moure\'t on vulguis';
$strUseTables = 'Usa Taules';
$strUseTextField = 'Usa camp de text';
$strUseThisValue = 'Fes servir aquest valor';

$strValidateSQL = 'Validar l\'SQL';
$strValidatorError = 'No s\'ha pogut iniciar el validador SQL. Si us plau, comproveu que teniu instal�lats els m�duls de PHP necessaris tal i com s\'indica a la %sdocumentaci�%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strVersionInformation = 'Informaci� de Versi�';
$strViewDumpDatabases = 'Veure volcat (esquema) de les bases de dades';
$strViewDumpDB = 'Veure l\'esquema de la base de dades';
$strViewDump = 'Veure un esquema de la taula';
$strViewHasBeenDropped = 'Vista %s esborrada';
$strViewMaxExactCount = 'Aquesta vista t� m�s de %d arxius. Consulteu a %sdocumentaci�%s.';
$strViewName = 'Nom de VISTA';
$strView = 'Vista';

$strWebServerUploadDirectory = 'Directori de pujada d\'arxius del servidor web';
$strWebServerUploadDirectoryError = 'No est� disponible el directori indicat per pujar arxius';
$strWelcome = 'Benvingut a %s';
$strWestEuropean = 'Europa Occidental';
$strWildcard = 'comodins';
$strWindowNotFound = 'La finestra dest� del navegador no s\'ha pogut actualitzar. Potser has tancat la finestra "pare" o b� el teu navegador bloqueja actualitzacions entre finestres per la teva configuraci� de seguretat';
$strWithChecked = 'Amb marca:';
$strWriteRequests = 'Peticions d\'escriptura';
$strWrongUser = 'Usuari i/o clau erronis. Acc�s denegat.';

$strXML = 'XML';

$strYes = 'Si';

$strZeroRemovesTheLimit = 'Nota: Es treu el limit establint aquestes opcions a 0 (zero).';
$strZip = '"comprimit amb zip"';

// To translate:

$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate

?>

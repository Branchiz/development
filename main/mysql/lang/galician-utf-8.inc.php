<?php
/* $Id: galician-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by Xosé Calvo <xosecalvo at terra.es>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$day_of_week = array('Do', 'Lu', 'Ma', 'Mé', 'Xo', 'Ve', 'Sá');
$month = array('Xan', 'Feb', 'Mar', 'Abr', 'Maio', 'Xuño', 'Xullo', 'Ago', 'Set', 'Out', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d de %B de %Y ás %H:%M';

$timespanfmt = '%s días, %s horas, %s minutos e %s segundos';

$strAbortedClients = 'Cancelado';
$strAccessDenied = 'Acceso Negado';
$strAccessDeniedCreateConfig = 'Isto débese, posibelmente, a que non creou un ficheiro de configuración. Talvez queira utilizar %1$ssetup script%2$s para crear un.';
$strAccessDeniedExplanation = 'O phpMyAdmin tentouse conectar ao servidor de MySQL, mais o servidor rexeitou a conexión. Deberá comprobar o nome do servidor, o nome de usuario e o contrasinal no ficheiro config.inc.php e asegurarse de que corresponden coa información proporcionada polo administrador do servidor do MySQL.';
$strAction = 'Acción';
$strAddAutoIncrement = 'Engadir o valor incremental (AUTO_INCREMENT)';
$strAddClause = 'Engadir %s';
$strAddConstraints = 'Adicionar limitacións';
$strAddDeleteColumn = 'Adicionar/Eliminar columnas de campo';
$strAddDeleteRow = 'Adicionar/Eliminar filas de criterios';
$strAddFields = 'Adicionar %s campo(s)';
$strAddHeaderComment = 'Adicionar un comentario proprio no cabezallo (\n liñas diferentes)';
$strAddIntoComments = 'Engadir aos comentarios';
$strAddNewField = 'Adicionar un novo campo';
$strAddPrivilegesOnDb = 'Adicionar privilexios para a esta base de datos';
$strAddPrivilegesOnTbl = 'Adicionar privilexios para a esta tabela';
$strAddSearchConditions = 'Condición da pesquisa (ou sexa, o complemento da cláusula "WHERE"):';
$strAddToIndex = 'Adicionar ao índice &nbsp;%s&nbsp;coluna(s)';
$strAddUser = 'Adicionar un novo usuario';
$strAddUserMessage = 'Usuario adicionado.';
$strAdministration = 'Administración';
$strAffectedRows = 'Fileiras que se verán afectadas:';
$strAfter = 'Despois de %s';
$strAfterInsertBack = 'Voltar';
$strAfterInsertNewInsert = 'Inserir un novo rexistro';
$strAfterInsertNext = 'Modificar a fileira seguinte';
$strAfterInsertSame = 'Voltar para esta páxina';
$strAllowInterrupt = 'Permitir que se interrumpa a importación no caso de que o guión detecte que está perto do limite. Este podería ser un bon método para importar ficheiros longos, ainda que pode rachar transaccións.';
$strAllTableSameWidth = 'mostrar todas as tabelas co mesmo ancho?';
$strAll = 'Todos';
$strAlterOrderBy = 'Ordenar a tabela por';
$strAnalyzeTable = 'Analizar a tabela';
$strAnd = 'E';
$strAndThen = 'e despois';
$strAngularLinks = 'LigazÃ³ns angulares';
$strAnIndex = 'Adicionouse un índice a %s';
$strAny = 'Calquer';
$strAnyHost = 'Calquer servidor';
$strAnyUser = 'Calquer usuario';
$strApproximateCount = 'Pode ser aproximado. Consulte a FAQ 3.11';
$strAPrimaryKey = 'Adicionouse unha chave primaria a %s';
$strArabic = 'Árabe';
$strArmenian = 'Armenio';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No comezo da tabela';
$strAtEndOfTable = 'Ao final da tabela';
$strAttr = 'Atributos';
$strAutomaticLayout = 'Distribución automática';

$strBack = 'Voltar';
$strBaltic = 'Báltico';
$strBeginCut = 'COMEZA O RECORTE';
$strBeginRaw = 'COMEZA O TEXTO SIMPLE ("RAW")';
$strBinary = ' Binario ';
$strBinaryDoNotEdit = ' Binario - non editar ';
$strBinaryLog = 'Ficheiro de rexistro binario';
$strBinLogEventType = 'Tipo de evento';
$strBinLogInfo = 'Información';
$strBinLogName = 'Nome do ficheiro de rexistro';
$strBinLogOriginalPosition = 'Posición orixinal';
$strBinLogPosition = 'Posición';
$strBinLogServerId = 'ID do servidor';
$strBookmarkAllUsers = 'Permitir que calquer usuario poida acceder a este marcador';
$strBookmarkCreated = 'Creouse o marcador %s';
$strBookmarkDeleted = 'Eliminouse o marcador.';
$strBookmarkLabel = 'Nome';
$strBookmarkQuery = 'A procura de SQL foi gardada';
$strBookmarkReplace = 'Substituir un marcador xa existente que ten o mesmo nome';
$strBookmarkThis = 'Gardar esta procura de SQL';
$strBookmarkView = 'Só visualizar';
$strBrowseDistinctValues = 'Examinar valores claramente distintos';
$strBrowseForeignValues = 'Visualizar valores alleos';
$strBrowse = 'Visualizar';
$strBufferPoolActivity = 'Actividade da reserva da memoria intermedia';
$strBufferPool = 'Reserva da memoria intermedia';
$strBufferPoolUsage = 'Uso da reserva da memoria intermedia';
$strBufferReadMisses = 'Fallos de lectura';
$strBufferReadMissesInPercent = 'Fallos de lectura en %';
$strBufferWriteWaits = 'Esperas para escreber';
$strBufferWriteWaitsInPercent = 'Esperas para escreber en %';
$strBulgarian = 'BÃºlgaro';
$strBusyPages = 'Páxinas ocupadas';
$strBzError = 'phpMyAdmin foi incapaz de comprimir os resultados debido a que esta versión do php ten unha extensión de Bz2 con erros.  Recoméndase que configure a directiva <code>$cfg[\'BZipDump\']</code> do seu ficheiro de configuración do phpMyAdmin para que sexa <code>FALSE</code>. Se quer usar a funcionalidade de compresión Bz2, actualice a unha versión posterior do php. Consulte o informe de erros %s para máis detalles.';
$strBzip = 'comprimido no formato "bzip"';

$strCalendar = 'Calendario';
$strCancel = 'Cancelar';
$strCanNotLoadExportPlugins = 'Non se deron carregado as extensións de exportación. Verifique a súa instalación!';
$strCanNotLoadImportPlugins = 'Non se puideron importar as extensións - Comprobe a súa instalación!';
$strCannotLogin = 'Non podo conectar co servidor de MySQL';
$strCantLoad = 'Non se pode carregar a extensión %s.<br />Comprobe a configuración do PHP.';
$strCantLoadRecodeIconv = 'Non se puido carregar iconv ou precísase da extensión recode para a conversión do charset. Configure o php para que se poidan usar estas extensións ou indique que non se use a conversión de charset en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Non se pode facer que este índice sexa PRIMARIO!';
$strCantUseRecodeIconv = 'Non se puido usar nen iconv nen libiconv nen a función recode_stringf mentres haxa extensións por carregar. Comprobe a súa configuración do php.';
$strCardinality = 'Cardinalidade';
$strCaseInsensitive = 'sen distinguir maiúsculas de minúsculas';
$strCaseSensitive = 'distinguindo maiúsculas de minúsculas';
$strCentralEuropean = 'Centroeuropeu';
$strChangeCopyModeCopy = '... manter o anterior.';
$strChangeCopyMode = 'Crear un utilizador novo cos mesmos privilexios e...';
$strChangeCopyModeDeleteAndReload = ' ... eliminar o anterior das tabelas de utilizadores e recarregar os privilexios despóis.';
$strChangeCopyModeJustDelete = ' ... eliminar o anterior das tabelas de utilizadores.';
$strChangeCopyModeRevoke = ' ... retirar-lle todos os privilexios activos ao anterior e eliminalo despóis.';
$strChangeCopyUser = 'Modificar a información de acceso (login) / Copiar utilizador';
$strChangeDisplay = 'Escolla o campo que se há de mostrar';
$strChange = 'Mudar';
$strChangePassword = 'Trocar o contrasinal';
$strCharset = 'Conxunto de caracteres';
$strCharsetOfFile = 'Conxunto de caracteres do ficheiro:';
$strCharsetsAndCollations = 'Conxuntos de caracteres e Ordes alfabéticas';
$strCharsets = 'Conxuntos de caracteres';
$strCheckAll = 'Marcá-los todos';
$strCheckOverhead = 'Exceso na comprobación';
$strCheckPrivs = 'Comprobar os privilexios';
$strCheckPrivsLong = 'Comprobar os privilexios da base de datos &quot;%s&quot;.';
$strCheckTable = 'Verificar a tabela';
$strChoosePage = 'Escolla unha páxina para modificar';
$strColComFeat = 'Mostrando os comentarios das columnas';
$strCollation = 'Orde alfabética';
$strColumnNames = 'Nomes das Columnas';
$strColumnPrivileges = 'Privilexios proprios de columna';
$strCommand = 'Comando';
$strComments = 'Comentarios';
$strCommentsForTable = 'COMENTARIOS PARA A TABELA';
$strCompatibleHashing = 'Compatíbel co MySQL&nbsp;4.0';
$strCompleteInserts = 'Insercións completas';
$strCompression = 'Compresión';
$strCompressionWillBeDetected = 'A compresión do ficheiro importado detectarase automaticamente de: %s';
$strConfigDefaultFileError = 'Non se puido carregar a configuración desde: "%1$s"';
$strConfigFileError = 'phpMyAdmin non puido ler o seu ficheiro de configuración<br/>Isto podería deberse a que php atopou un erro nel ou a que php non puido atopar o ficheiro.<br/>Invoque o ficheiro de configuración directamente mediante o vínculo que hai máis abaixo e lea a mensaxe de erro de php que receba. Na maioría dos casos simplesmente faltan unha aspa ou un ponto e vírcula <br/>Se recebe unha páxina en branco é que todo está ben.';
$strConfigureTableCoord = 'Configure as coordenadas da tabela %s';
$strConnectionError = 'Non se pode conectar: os axustes non son válidos.';
$strConnections = 'Conexións';
$strConstraintsForDumped = 'Limitacións para os volcados das tabelas';
$strConstraintsForTable = 'Limitacións para a tabela';
$strControluserFailed = 'Fallou a conexiÃ³n para controluser tal e como se define na sÃºa configuraciÃ³n.';
$strCookiesRequired = 'A partir de aqui debe permitir cookies.';
$strCopy = 'Copiar';
$strCopyDatabaseOK = 'A base de dastos %s copiouse para %s';
$strCopyTable = 'Copiar a tabela a (base_de_datos<b>.</b>tabela):';
$strCopyTableOK = 'A tabela \$table copiouse para \$new_name.';
$strCopyTableSameNames = 'Non se pode copiar unha tabela sobre si mesma';
$strCouldNotKill = 'phpMyAdmin foi incapaz de finalizar o fío %s.  Probablemente xa está fechado.';
$strCreate = 'Crear';
$strCreateDatabaseBeforeCopying = 'CREAR BASE DE DATOS antes de copiar';
$strCreateIndex = 'Crear un índice en&nbsp;%s&nbsp;colunas';
$strCreateIndexTopic = 'Crear un novo índice';
$strCreateNewDatabase = 'Crear unha nova base de datos';
$strCreateNewTable = 'Crear unha tabela nova na base de datos %s';
$strCreatePage = 'Crear unha páxina nova';
$strCreatePdfFeat = 'Creación de PDFs';
$strCreateRelation = 'Crear relaciÃ³n';
$strCreateTable  = 'Crear tabelas';
$strCreateUserDatabase = 'Base de datos para o usuario';
$strCreateUserDatabaseName = 'Crear unha base de datos co mesmo nome e conceder todos os privilexios';
$strCreateUserDatabaseNone = 'Nengunha';
$strCreateUserDatabaseWildcard = 'Conceder todos os privilexios para o nome con comodíns (username\_%)';
$strCreationDates = 'Datas de creación/actualización/comprobación';
$strCriteria = 'Criterio';
$strCroatian = 'Croata';
$strCSV = 'CSV';
$strCyrillic = 'Cirílico';
$strCzech = 'Checo';
$strCzechSlovak = 'Checo-eslovaco';

$strDanish = 'Dinamarqués';
$strDatabase = 'Base de Datos';
$strDatabaseEmpty = 'O nome da base de datos non existe!';
$strDatabaseExportOptions = 'Opcións de exportación da base de datos';
$strDatabaseHasBeenDropped = 'A base de datos %s foi eliminada.';
$strDatabases = 'Bases de Datos';
$strDatabasesDropped = 'Elimináronse %s bases de datos sen problemas.';
$strDatabasesStatsDisable = 'Deshabilitar as estatísticas';
$strDatabasesStatsEnable = 'Habilitar as estatísticas';
$strDatabasesStats = 'Estatísticas das bases de datos';
$strDatabasesStatsHeavyTraffic = 'Nota: De habilitar as estatísticas da base de datos, ocasionará que se produza un tráfico denso entre o servidor web e o de MySQL.';
$strData = 'Datos';
$strDataDict = 'Dicionario de datos';
$strDataOnly = 'Só os datos';
$strDataPages = 'Páxinas con datos';
$strDBComment = 'Comentario da base de datos: ';
$strDBCopy = 'Copiar a base de datos para';
$strDbIsEmpty = 'Parece ser que a tÃ¡boa estÃ¡ baleira!';
$strDbPrivileges = 'Privilexios proprios de base de datos';
$strDBRename = 'Mudar o nome da base de datos para';
$strDbSpecific = 'específico da base de datos';
$strDefaultEngine = '%s é o motor de armacenamento predefinido neste servidor de MySQL.';
$strDefault = 'Padrón';
$strDefaultValueHelp = 'Para os valores por omisión, introduza un único valor, sen escapalo con barras ou aspas e usando este formato: a';
$strDefragment = 'Tabela de defragmentación';
$strDelayedInserts = 'Usar insercións demoradas';
$strDeleteAndFlushDescr = 'Este é o modo máis limpo, mais pode que recarregar os privilexios leve un pouco de tempo.';
$strDeleteAndFlush = 'Eliminar os usuarios e recarregar os privilexios a continuación.';
$strDeleted = 'Rexistro eliminado';
$strDeletedRows = 'Fileiras borradas:';
$strDelete = 'Eliminar';
$strDeleteNoUsersSelected = 'Non se seleccionaron utilizadores para eliminar!';
$strDeleteRelation = 'Eliminar relaciÃ³n';
$strDeleting = 'A eliminar %s';
$strDelimiter = 'Delimitador';
$strDelOld = 'Esta páxina ten referencias a tabelas que xa non existen. Quere eliminar esas referencias?';
$strDescending = 'Descendente';
$strDescription = 'Descrición';
$strDesigner = 'DeseÃ±ador';
$strDesignerHelpDisplayField = 'O campo que se mostra aparece en rosa. Para indicar que un campo se seleccione ou non como o campo a mostrar, clique na icona "Escoller o campo a mostrar" e depois no nome do campo apropiado.';
$strDictionary = 'dicionario';
$strDirectLinks = 'LigazÃ³ns directas';
$strDirtyPages = 'Páxinas suxas';
$strDisabled = 'Desactivado';
$strDisableForeignChecks = 'Desabilitar as comprobacións de chaves exteriores';
$strDisplayFeat = 'Mostrar as características';
$strDisplayOrder = 'Mostrar en orde:';
$strDisplayPDF = 'Mostrar o esquema PDF';
$strDoAQuery = 'Faga unha "procura por exemplo" (o comodín é "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentación';
$strDoYouReally = 'Seguro? ';
$strDropDatabaseStrongWarning = 'Está a piques de DESTRUIR unha base de datos inteira!';
$strDrop = 'Eliminar';
$strDropUsersDb = 'Eliminar as bases de datos que teñan os mesmos nomes que os usuarios.';
$strDumpingData = 'Extraindo datos da tabela';
$strDumpSaved = 'O vaciado gardouse no ficheiro %s.';
$strDumpXRows = 'Pór %s fileiras a partir da fileira %s.';
$strDynamic = 'dinámico';

$strEdit = 'Modificar';
$strEditPDFPages = 'Editar as páxinas PDF';
$strEditPrivileges = 'Modificar privilexios';
$strEffective = 'Efectivo';
$strEmpty = 'Borrar';
$strEmptyResultSet = 'MySQL retornou un conxunto vacío (ex. cero rexistros).';
$strEnabled = 'Activado';
$strEncloseInTransaction = 'Incluir a exportación nunha transacción';
$strEndCut = 'FIN DO RECORTE';
$strEnd = 'Fin';
$strEndRaw = 'FIN DO TEXTO SIMPLE ("RAW")';
$strEngineAvailable = '%s está disponíbel neste servidor de MySQL.';
$strEngineDisabled = '%s foi desactivado neste servidor de MySQL.';
$strEngines = 'Motores';
$strEngineUnsupported = 'Este servidor de MySQL non acepta o motor de armacenamento %s.';
$strEnglish = 'Inglés';
$strEnglishPrivileges = ' Nota: os nomes de privilexios do MySQL están en inglés';
$strError = 'Erro';
$strErrorInZipFile = 'Erro no ficheiro ZIP:';
$strErrorRelationAdded = 'Erro: non se engadiu a relaciÃ³n.';
$strErrorRelationExists = 'Erro: xa existe unha relaciÃ³n.';
$strErrorRenamingTable = 'Erro ao mudarlle o nome á tabela %1$s para %2$s';
$strErrorSaveTable = 'Erro ao gardar as coordenadas para DeseÃ±ador.';
$strEscapeWildcards = 'Os caracteres comodín _ e % deberíanse escapar con \ para podelos usar literalmente';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonio';
$strEvent = 'Evento';
$strExcelEdition = 'Edición mediante MS-Excel';
$strExecuteBookmarked = 'Efectuar a procura gardada';
$strExplain = 'Explicar SQL';
$strExport = 'Exportar';
$strExportImportToScale = 'Exportar/Importar a escala';
$strExportMustBeFile = 'Gardouse nun ficheiro o tipo de exportación seleccionada!';
$strExtendedInserts = 'Insercións extendidas';
$strExtra = 'Extra';

$strFailedAttempts = 'Tentativas falidas';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Eliminouse o campo %s';
$strFieldInsertFromFileTempDirNotExists = 'Erro ao mover o ficheiro enviado. Consulte FAQ 1.11';
$strFields = 'Campos';
$strFieldsEnclosedBy = 'Os campos delimítanse con';
$strFieldsEscapedBy = 'Os campos escápanse con';
$strFieldsTerminatedBy = 'Os campos rematan por';
$strFileAlreadyExists = 'O ficheiro %s xa existe no servidor - escolla outro nome ou seleccione a opción de eliminar.';
$strFileCouldNotBeRead = 'Non se puido ler o ficheiro';
$strFileNameTemplateDescriptionDatabase = 'nome da base de datos';
$strFileNameTemplateDescription = 'Este valor interprétase utilizando %1$sstrftime%2$s, de maneira que pode utilizar cadeas de formato de hora. Produciranse transformacións en consecuencia: %3$s. O resto do texto ficará como está.';
$strFileNameTemplateDescriptionServer = 'nome do servidor';
$strFileNameTemplateDescriptionTable = 'nome da tabela';
$strFileNameTemplate = 'Modelo para o nome de ficheiro';
$strFileNameTemplateRemember = 'lembrar o modelo';
$strFiles = 'Ficheiros';
$strFileToImport = 'Ficheiro a importar';
$strFixed = 'fixo';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin recolle os privilexios dos usuarios directamente das tabelas de privilexios do MySQL. O contido destas tabelas pode diferir dos privilexios que usa o servidor se se levaron a cabo alteracións manuais.  Neste caso, debería %svolver a carregar os privilexios%s antes de proseguir.';
$strFlushQueryCache = 'Limpar a caché da pesquisa';
$strFlushTable = 'Fechar a tabela ("FLUSH")';
$strFlushTables = 'Limpar (fechar) todas as tabelas';
$strFontSize = 'TamaÃ±o da letra';
$strForeignKeyError = 'Erro ao crear unha chave externa (comprobe os tipos de datos)';
$strFormat = 'Formato';
$strFormEmpty = 'Falta un valor no formulario!';
$strFreePages = 'Páxinas libres';
$strFullText = 'Textos completos';
$strFunction = 'Funcións';
$strFunctions = 'Funcións';

$strGenBy = 'Xerado por';
$strGeneralRelationFeat = 'Características xerais das relacións';
$strGeneratePassword = 'Xerar un contrasinal';
$strGenerate = 'Xerar';
$strGenTime = 'Xerado en';
$strGeorgian = 'Xeorxiano';
$strGerman = 'AlemÃ¡n';
$strGlobal = 'global';
$strGlobalPrivileges = 'Privilexios globais';
$strGlobalValue = 'Valor global';
$strGo = 'Executar';
$strGrantOption = 'Conceder';
$strGreek = 'Grego';
$strGzip = 'comprimido no formato "gzip"';

$strHandler = 'Manipulador';
$strHasBeenAltered = 'foi alterado.';
$strHasBeenCreated = 'foi creado.';
$strHaveToShow = 'Ten que escoller polo menos unha columna para mostrar';
$strHebrew = 'Hebreu';
$strHelp = 'Axuda';
$strHexForBLOB = 'Use hexadecimal para BLOB';
$strHide         = 'Agochar';
$strHideShowAll = 'Agochalo/Mostralo todo';
$strHideShowNoRelation = 'Agochar/Mostrar TÃ¡boas sen relaciÃ³n';
$strHome = 'Comezo ("Home")';
$strHomepageOfficial = 'Páxina Oficial do phpMyAdmin';
$strHostEmpty = 'O nome do servidor está vacío!';
$strHost = 'Servidor';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'HÃºngaro';

$strIcelandic = 'Islandés';
$strId = 'ID';
$strIdxFulltext = 'Texto completo';
$strIEUnsupported = 'Internet Explorer non permite esta funciÃ³n.';
$strIgnoreDuplicates = 'Ignorar as fileiras duplicadas';
$strIgnore = 'Ignorar';
$strIgnoreInserts = 'Usar insercións ignoradas';
$strImportExportCoords = 'Importar/Exportar coordenadas para esquema PDF';
$strImportFiles = 'Importar ficheiros';
$strImportFormat = 'Formato do ficheiro importado';
$strImport = 'Importar';
$strImportSuccessfullyFinished = 'A importación rematou sen problemas. Executáronse %d procuras.';
$strIndexes = 'Índices';
$strIndexesSeemEqual = 'Parece que os Ã­ndices seguintes son iguais e haberÃ­a que eliminar un deles:';
$strIndexHasBeenDropped = 'Eliminouse o índice %s';
$strIndex = 'Índice';
$strIndexName = 'Nome do índice&nbsp;:';
$strIndexType = 'Tipo de índice&nbsp;:';
$strIndexWarningTable = 'Problemas cos índices da tabela `%s`';
$strInnoDBAutoextendIncrementDesc = ' Tamaño do incremento para extender o tamaño dun espazo de tabela cando se encha.';
$strInnoDBAutoextendIncrement = 'Incremento de Autoextend';
$strInnoDBBufferPoolSizeDesc = 'Tamaño da memoria intermedia que usa InnoDB para gardar provisoriamente os datos e índices das súas tabelas.';
$strInnoDBBufferPoolSize = 'Tamaño da reserva da memoria intermedia';
$strInnoDBDataFilePath = 'Ficheiros de datos';
$strInnoDBDataHomeDirDesc = 'Parte común do camiño do directorio que ten todos os ficheiros de datos de innoDB.';
$strInnoDBDataHomeDir = 'Directorio base dos datos';
$strInnoDBPages = 'páxinas';
$strInnoDBRelationAdded = 'Engadiuse relaciÃ³n InnoDB';
$strInnodbStat = 'Estado de InnoDB';
$strInsecureMySQL = 'O seu ficheiro de configuración contén axustes (en concreto, o usuário root non ten contrasinal) que corresponden coa conta con todos os privilexios que MySQL fai por omisión. O seu servidor de MySQL está a rodar con esta configuración, está aberto a intrusións e habería que mirar de solucionar este problema de seguranza.';
$strInsertAsNewRow = 'Inserir unha nova columna';
$strInsertedRowId = 'Identificador da fileira inserida:';
$strInsertedRows = 'Fileiras inseridas:';
$strInsert = 'Inserir';
$strInternalNotNecessary = '* Non se precisa dunha relación interna cando existe tamén en InnoDB.';
$strInternalRelationAdded = 'Engadiuse relaciÃ³n interna';
$strInternalRelations = 'Relacións internas';
$strInUse = 'en uso';
$strInvalidAuthMethod = 'Na configuración indicouse un método de autenticación non válido::';
$strInvalidColumnCount = 'O número de columnas ten que ser maior de cero';
$strInvalidColumn = 'Especificouse unha columna non válida (%s)!';
$strInvalidCSVFieldCount = 'Contaxe de campos non válida na entrada de CSV na liña %d.';
$strInvalidCSVFormat = 'Formato de entrada de CSV non válido na liña %d.';
$strInvalidCSVParameter = 'Parámetro non válido para a importación de CSV: %s';
$strInvalidDatabase = 'Base de datos non válida';
$strInvalidFieldAddCount = 'Ten que engadir un campo polo menos';
$strInvalidFieldCount = 'A tabela ha de ter, polo menos, un campo.';
$strInvalidLDIImport = 'Esta extensión non é capaz de realizar importacións comprimidas!';
$strInvalidRowNumber = '%d non é un número de fileira válido.';
$strInvalidServerHostname = 'Nome de servidor non válido para o servidor %1$s. Revise a configuración.';
$strInvalidServerIndex = 'Índice do servidor non válido: "%s"';
$strInvalidTableName = 'Non se admite este nome de tabela.';

$strJapanese = 'Xaponés';
$strJoins = 'Unións';
$strJumpToDB = 'Saltar à base de datos &quot;%s&quot;.';
$strJustDeleteDescr = 'Os usuarios &quot;eliminados&quot; poderán ainda acceder ao servidor como sempre atá que se recarreguen os privilexios.';
$strJustDelete = 'Elimine só os usuarios das tabelas de privilexios.';

$strKeepPass = 'Non mude o contrasinal';
$strKeyCache = 'caché da chave';
$strKeyname = 'Nome chave';
$strKill = 'Matar (kill)';
$strKnownExternalBug = 'A funciÃ³n %s vese afectada por un erro descoÃ±ecido; consulte see %s';
$strKorean = 'Coreano';

$strLandscape = 'Horizontal';
$strLanguage = 'Lingua';
$strLanguageUnknown = 'Linguaxe descoñecida: %1$s.';
$strLatchedPages = 'Páxinas fechadas';
$strLatexCaption = 'Título da tabela';
$strLatexContent = 'Contido da tabela __TABLE__';
$strLatexContinuedCaption = 'Título da tabela continuado';
$strLatexContinued = '(continuado)';
$strLatexIncludeCaption = 'Incluir o título da tabela';
$strLatexLabel = 'Chave da etiqueta';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Estrutura da tabela __TABLE__';
$strLatvian = 'Letonio';
$strLDI = 'CSV utilizando LOAD DATA';
$strLDILocal = 'Utilice a palabra chave LOCAL';
$strLengthSet = 'Tamaño/Definir*';
$strLimitNumRows = 'Número de rexistros por páxina:';
$strLinesTerminatedBy = 'As liñas rematan por';
$strLinkNotFound = 'Non se atopou o vínculo';
$strLinksTo = 'Vincúlase con';
$strLithuanian = 'Lituano';
$strLocalhost = 'Local';
$strLocationTextfile = 'Localización do arquivo de texto';
$strLogin = 'Entrada (login)';
$strLoginInformation = 'Información sobre o acceso (login)';
$strLogout = 'Sair';
$strLogPassword = 'Contrasinal:';
$strLogServer = 'Servidor';
$strLogUsername = 'Nome de usuario:';
$strLongOperation = 'Esta operación pode que leve moito tempo. Procésase igual?';

$strMaxConnects = 'conexións simultáneas máximas';
$strMaximalQueryLength = 'Lonxitude máxima da procura creada';
$strMaximumSize = 'Tamaño máximo: %s%s';
$strMbExtensionMissing = 'Non se atopou a extensión mbstring PHP e parece que está a usar un conxunto de caracteres multibyte. Sen a extensión mbstring, o phpMyAdmin é incapaz de partir cadeas correctamente e pode provocar resultados inesperados.';
$strMbOverloadWarning = 'Ten activada mbstring.func_overload na configuración do PHP. Esta opción é incompatíbel co phpMyAdmin e podería ocasionar danos nos datos';
$strMIME_available_mime = 'Tipos MIME disponíbeis';
$strMIME_available_transform = 'Transformacións disponíbeis';
$strMIME_description = 'Descrición';
$strMIME_MIMEtype = 'Tipo MIME';
$strMIME_nodescription = 'Non existe descrición desta transformación.<br />Pergunte-lle ao autor que é o que fai %s.';
$strMIME_transformation_note = 'Para unha lista das opcións de transformación disponíbeis e as súas transformacións de tipos MIME, faga clic sobre  %sdescricións de transformacións%s';
$strMIME_transformation_options_note = 'Introduza os valores das opcións de transformación usando este formato:\'a\', 100, b,\'c\'...<br />Se necesita introducir unha barra para trás ("\") ou aspas simples ("\'") entre estes valores, preceda-os de barra para trás (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strMIME_transformation_options = 'Opcións de transformación';
$strMIME_transformation = 'Transformación do navegador';
$strMIMETypesForTable = 'TIPOS MIME PARA A TABELA';
$strMIME_without = 'Os tipos MIME en cursiva non contan cunha función de transformación separada';
$strModifications = 'As modificacións foron gardadas';
$strModifyIndexTopic = 'Modificar un índice';
$strModify = 'Modificar';
$strMoveMenu = 'Mover MenÃº';
$strMoveTable = 'Mover a tabela a (base_de_datos<b>.</b>tabela):';
$strMoveTableOK = 'Moveuse a tabela %s para %s.';
$strMoveTableSameNames = 'Non se pode mover unha tabela sobre si mesma';
$strMultilingual = 'multilÃ­ngÃ¼e';
$strMyISAMDataPointerSizeDesc = 'O tamaño por omisión do punteiro de datos en bytes; usarase con CREATE TABLE para tabelas MyISAM cando non se especifique a opción MAX_ROWS.';
$strMyISAMDataPointerSize = 'Tamaño do punteiro de datos';
$strMyISAMMaxExtraSortFileSizeDesc = 'Se o ficheiro temporario usado para a creación rápida dun índice de MyISAM for máis grande que se se usar o caché de chaves na cantidade que se especifique aquí, preferir o método da caché de chaves.';
$strMyISAMMaxExtraSortFileSize = 'Tamaño máixmo dos ficheiros temporarios no momento de crear índices';
$strMyISAMMaxSortFileSizeDesc = 'O tamaño máximo do ficheiro temporario que se lle permite utilizar a MySQL no momento de recrear un índice MyISAM (durante REPAIR TABLE, ALTER TABLE, ou LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Tamaño máximo dos ficheiros de ordenación temporarios';
$strMyISAMRecoverOptionsDesc = 'O modo de recuperación automática de tabelas MyISAM escaralladas, tal e como se configura na opción de inicio do servidor --myisam-recover.';
$strMyISAMRecoverOptions = 'Modo de recuperación automática';
$strMyISAMRepairThreadsDesc = 'Se este valor é maior que 1, os índices das tabelas MyISAM créanse en paralelo (cada índice no seu propio fío) durante o proceso Reparar ordenando.';
$strMyISAMRepairThreads = 'Reparar os fíos';
$strMyISAMSortBufferSizeDesc = 'Cantidade de memoria intermedia que se reserva ao ordenar os índices MyISAM durante unha instrución REPAIR TABLE ou ao crear índices con CREATE INDEX ou ALTER TABLE.';
$strMyISAMSortBufferSize = 'Tamaño da memoria intermedia de ordenación';
$strMySQLCharset = 'Código de caracteres (Charset) MySQL';
$strMysqlClientVersion = 'Versión do cliente de MySQL';
$strMySQLConnectionCollation = 'Codificación de caracteres (Collation) da conexión de MySQL';
$strMysqlLibDiffersServerVersion = 'A versiÃ³n %s da sÃºa librarÃ­a de PHP MySQL difire da versiÃ³n %s do seu servidor de MySQL. Isto pode ocasionar un comportamento impredicÃ­bel.';
$strMySQLSaid = 'Mensaxes do MySQL: ';
$strMySQLShowProcess = 'Mostrar os procesos';
$strMySQLShowStatus = 'Mostrar información de tempo de execución do MySQL';
$strMySQLShowVars = 'Mostrar as variábeis de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Seguinte';
$strNoActivity = 'Non se rexistrou actividade algunha desde hai %s segundos ou máis. Terá que entrar de novo';
$strNoDatabases = 'Non hai nengunha base de datos';
$strNoDatabasesSelected = 'Non hai nengunha base de datos seleccionada.';
$strNoDataReceived = 'Non se recibiron datos para importar. Ou ben non se enviou o ficheiro ou ben o seu tamaño excede o máximo permitido pola súa configuración de PHP. Consulte FAQ 1.16.';
$strNoDescription = 'sen descrición';
$strNoDetailsForEngine = 'Non se conta con información de estado detallada sobre este motor de armacenamento.';
$strNoDropDatabases = 'Os comandos "Eliminar a base de datos" non están permitidos.';
$strNoExplain = 'Saltar a explicacion de SQL';
$strNoFilesFoundInZip = 'Non se atoparon ficheiros dentro do arquivo ZIP!';
$strNoFrames = 'phpMyAdmin usa-se mellor cun navegador que <b>acepte molduras</b>.';
$strNoIndex = 'Non se definiu un índice';
$strNoIndexPartsDefined = 'Non se definiron partes do índice';
$strNoModification = 'Sen cambios';
$strNone = 'Nengun';
$strNo = 'Non';
$strNoOptions = 'Este formato non ten opcións';
$strNoPassword = 'Sen Contrasinal';
$strNoPermission = 'O servidor web non ten permiso para gardar o ficheiro %s.';
$strNoPhp = 'sen código PHP';
$strNoPrivileges = 'Sen Privilexios';
$strNoRights = 'Non ten direitos suficientes para estar aquí agora!';
$strNoRowsSelected = 'Non hai fileiras seleccionadas';
$strNoSpace = 'Non hai espacio para gardar o ficheiro %s.';
$strNoTablesFound = 'Non se achou nengunha tabela na base de datos';
$strNoThemeSupport = 'Non ten a funcionalidade dos temas. Comprobe a configuración e/ou os seus temas no directorio %s.';
$strNotNumber = 'Non é un número!';
$strNotOK = 'non conforme';
$strNotSet = 'Non se atopou a tabela <b>%s</b>ou non se indicou en %s';
$strNoUsersFound = 'Non se achou nengun(s) usuario(s).';
$strNoValidateSQL = 'Saltarse a validacion de';
$strNull = 'Nulo';
$strNumberOfFields = 'Número de campos';
$strNumberOfTables = 'NÃºmero de tabelas';
$strNumSearchResultsInTable = '%s ocorrencias(s) dentro da tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> ocorrencia(s)';
$strNumTables = 'Tabelas';

$strOK = 'Conforme';
$strOpenDocumentSpreadsheet = 'Folla de cálculo Open Document';
$strOpenDocumentText = 'Texto Open Document';
$strOpenNewWindow = 'Abrir unha xanela nova co phpMyAdmin';
$strOperations = 'Operacións';
$strOperator = 'Operador';
$strOptimizeTable = 'Optimizar a tabela';
$strOptions = 'OpciÃ³ns';
$strOr = 'ou';
$strOverhead = 'De máis (Overhead)';
$strOverwriteExisting = 'Eliminar o(s) ficheiro(s) xa existente(s)';

$strPageNumber = 'Número de páxina:';
$strPagesToBeFlushed = 'Páxinas que se eliminarán';
$strPaperSize = 'Tama?o do papel';
$strPartialImport = 'Importación parcial';
$strPartialText = 'Textos parciais';
$strPasswordChanged = 'Modificou-se sen problemas o contrasinal de %s.';
$strPassword = 'Contrasinal';
$strPasswordEmpty = 'O contrasinal está vacío!';
$strPasswordHashing = 'Hash do contrasinal';
$strPasswordNotSame = 'Os contrasinais non son os mesmos!';
$strPdfDbSchema = 'Esquema da base de datos "%s" - Páxina %s';
$strPdfInvalidTblName = 'Non existe a tabela "%s".';
$strPdfNoTables = 'Sen tabelas';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Xera un informe que contén os datos dunha única tabela)';
$strPDFReportTitle = 'Título do informe';
$strPerHour = 'por hora';
$strPerMinute = 'por minuto';
$strPerSecond = 'por segundo';
$strPersian = 'Persa';
$strPhoneBook = 'directorio telefÃ³nico';
$strPHP40203 = 'Está a usar PHP 4.2.3, que contén un erro importante relacionado coas cadeas multi-byte (mbstring). Consulte o informe de erros número 19404. Non se recomenda usar esta versión do PHP co phpMyAdmin.';
$strPhp = 'Crear código PHP';
$strPHPVersion = 'Versión do PHP';
$strPleaseSelectPrimaryOrUniqueKey = 'Escolla a chave primaria ou unha chave Ãºnica';
$strPmaDocumentation = 'Documentación do phpMyAdmin';
$strPmaUriError = 'A directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DEBE estar asignada no seu ficheiro de configuración.';
$strPmaWiki = 'wiki do phpMyAdmin';
$strPolish = 'Polonés';
$strPortrait = 'Vertical';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimaryKeyHasBeenDropped = 'Eliminouse a chave primaria';
$strPrimaryKeyName = 'O nome da chave primaria debe ser... PRIMARIA';
$strPrimaryKeyWarning = '("PRIMARIA" <b>debe</b> ser o nome de e <b>só de</b> unha chave primaria)';
$strPrimary = 'Primaria';
$strPrint = 'Imprimir';
$strPrintViewFull = 'Vista previa da impresión (con textos completos)';
$strPrintView = 'Visualización previa da impresión';
$strPrivDescAllPrivileges = 'Inclue todos os privilexios a excepción de GRANT (Conceder).';
$strPrivDescAlter = 'Permite alterar a estrutura das tabelas xa existentes.';
$strPrivDescAlterRoutine = 'Permite alterar e eliminar rotinas armacenadas.';
$strPrivDescCreateDb = 'Permite crear novas bases de datos e tabelas.';
$strPrivDescCreateRoutine = 'Permite crear rotinas armacenadas.';
$strPrivDescCreateTbl = 'Permite crear tabelas novas.';
$strPrivDescCreateTmpTable = 'Permite crear tabelas temporais.';
$strPrivDescCreateUser = 'Permite crear, eliminar e mudar o nome das contas de usuario.';
$strPrivDescCreateView = 'Permite crear vistas novas.';
$strPrivDescDelete = 'Permite eliminar datos.';
$strPrivDescDropDb = 'Permite eliminar bases de datos e tabelas.';
$strPrivDescDropTbl = 'Permite eliminar tabelas.';
$strPrivDescExecute5 = 'Permite executar rotinas armacenadas.';
$strPrivDescExecute = 'Permite facer correr procedimentos armacenados. Non funciona nesta versión do MySQL.';
$strPrivDescFile = 'Permite importar e exportar datos desde e para ficheiros.';
$strPrivDescGrant = 'Permite acrescentar usuarios e privilexios sen recarregar as tabelas de privilexios.';
$strPrivDescIndex = 'Permite crear e eliminar índices.';
$strPrivDescInsert = 'Permite inserir e substituir datos.';
$strPrivDescLockTables = 'Permite bloquear tabelas do fío en uso';
$strPrivDescMaxConnections = 'Limita o número de conexións novas por hora que pode abrir un usuario.';
$strPrivDescMaxQuestions = 'Limita o número de procuras por hora que pode enviar un usuario.';
$strPrivDescMaxUpdates = 'Limita o número de comandos que modifiquen unha tabela ou database por hora que pode executar un usuario.';
$strPrivDescMaxUserConnections = 'Limita o número de conexións simultáneas que pode ter o utilizador.';
$strPrivDescProcess3 = 'Permite matar procesos pertencentes a outros usuarios.';
$strPrivDescProcess4 = 'Permite ver as procuras completas na listaxe de procesos.';
$strPrivDescReferences = 'Non funciona nesta versión do MySQL.';
$strPrivDescReload = 'Permite recarregar a configuración do servidor e limpar a súa caché.';
$strPrivDescReplClient = 'Permite-lle ao usuario perguntar onde están os escravos e os masters.';
$strPrivDescReplSlave = 'Necesario para os escravos de replicación.';
$strPrivDescSelect = 'Permite gravar datos.';
$strPrivDescShowDb = 'Permite acceder á listaxe de bases de datos completa';
$strPrivDescShowView = 'Permite realizar consultas SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Permite apagar o servidor.';
$strPrivDescSuper = 'Permite conexións, mesmo chegado ao número máximo de conexións. Ven requerido para a maioría das operación administracións, como configurar as variábeis globais ou matar os fíos doutros usuarios.';
$strPrivDescUpdate = 'Permite modificar datos.';
$strPrivDescUsage = 'Sen privilexios.';
$strPrivileges = 'Privilexios';
$strPrivilegesReloaded = 'Non houbo problemas ao recarregar os privilexios.';
$strProcedures = 'Procedementos';
$strProcesses = 'Procesos';
$strProcesslist = 'Listaxe dos procesos';
$strProtocolVersion = 'Versión do protocolo';
$strPutColNames = 'Pór os nomes dos campos na primeira fileira';

$strQBEDel = 'Eliminar';
$strQBEIns = 'Inserir';
$strQBE = 'Procurar cun exemplo';
$strQueryCache = 'caché de procuras';
$strQueryFrame = 'Xanela de procuras';
$strQueryOnDb = 'Procura tipo SQL na base de datos <b>%s</b>:';
$strQueryResultsOperations = 'Operacións de resultados da procura';
$strQuerySQLHistory = 'Historial de SQL';
$strQueryStatistics = '<b>Estatística das procuras</b>: Desde que se iniciou, enviáronselle ao servidor %s procuras.';
$strQueryTime = 'A pesquisa levou %01.4f segundos';
$strQueryType = 'Tipo de procura';
$strQueryWindowLock = 'Non escreber sobre esta procura desde fora da xanela';

$strReadRequests = 'Peticións de lectura';
$strReceived = 'Recibido';
$strRecommended = 'recomendado';
$strRecords = 'Rexistros';
$strReferentialIntegrity = 'Comprobar a integridade das referencias:';
$strRefresh = 'Refrescar';
$strRelationalSchema = 'Relational schema';
$strRelationDeleted = 'Eliminouse a relaciÃ³n';
$strRelationNotWorking = 'Desactivouse a funcionalidade adicional para o traballo con tabelas vinculadas. Para saber o por que, faga click%saqu&iacute;%s.';
$strRelationsForTable = 'RELACIÓNS PARA A TABELA';
$strRelations = 'Relacións';
$strRelationView = 'Vista das relacións';
$strReloadingThePrivileges = 'A recarregar os privilexios';
$strReloadPrivileges = 'Volver a carregar os privilexios';
$strReload = 'Recarregar';
$strRemoveSelectedUsers = 'Eliminar os usuarios seleccionados';
$strRenameDatabaseOK = 'Mudou-se-lle o nome á base de datos %s para %s';
$strRenameTableOK = 'A tabela \$table renomeouse para \$new_name';
$strRenameTable = 'Renomear a tabela para';
$strRepairTable = 'Reparar a tabela';
$strReplaceNULLBy = 'Substituir NULL por ';
$strReplaceTable = 'Substituir os datos da tabela polos do ficheiro';
$strReplication = 'Replicación';
$strReset = 'Reiniciar';
$strResourceLimits = 'Limites de recursos';
$strRestartInsertion = 'Reiniciar inserciÃ³n con %s fileiras';
$strReType = 'Reescreber';
$strRevokeAndDeleteDescr = 'Os usuarios terán ainda o privilexio USAGE até que se recarreguen os privilexios.';
$strRevokeAndDelete = 'Retirar-lles todos os privilexios activos aos usuarios e eliminá-los a continuación.';
$strRevokeMessage = 'Retirou-lle os privilexios a %s';
$strRevoke = 'Revogar';
$strRomanian = 'Romeno';
$strRoutineReturnType = 'Tipo de retorno';
$strRoutines = 'Rutinas';
$strRowLength = 'Lonxitude da fileira';
$strRows = 'Fileiras';
$strRowsFrom = 'fileiras, a comezar da';
$strRowSize = ' Tamaño da fileira ';
$strRowsModeFlippedHorizontal = 'horizontal (cabezallos rotados)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en modo %s e repetir os cabezallos de cada %s celas';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estatísticas da Fileira';
$strRunning = 'a rodar no servidor %s';
$strRunQuery = 'Enviar esta procura';
$strRunSQLQuery = 'Efectuar unha procura SQL na base de datos %s';
$strRunSQLQueryOnServer = 'Executar procura/s SQL no servidor %s';
$strRussian = 'Ruso';

$strSave = 'Gardar';
$strSaveOnServer = 'Gardar no servidor no directorio %s';
$strSavePosition = 'Gardar a posiciÃ³n';
$strScaleFactorSmall = 'O factor de reducción é demasiado pequeno para que o esquema caiba nunha única páxina';
$strSearchFormTitle = 'Procurar na base de datos';
$strSearchInTables = 'Dentro da(s) tabela(s):';
$strSearchNeedle = 'Palabras(s) ou valore(s) a procurar (o comodín é: "%"):';
$strSearchOption1 = 'polo menos unha das palabras';
$strSearchOption2 = 'todas as palabras';
$strSearchOption3 = 'a frase exacta';
$strSearchOption4 = 'como expresión regular';
$strSearch = 'Procurar';
$strSearchResultsFor = 'Procurar os resultados para "<i>%s</i>" %s:';
$strSearchType = 'Atopar:';
$strSecretRequired = 'O ficheiro de configuración agora necesita un contrasinal secreto (blowfish_secret).';
$strSelectADb = 'Seleccione unha base de dados';
$strSelectAll = 'Seleccionar todo';
$strSelectBinaryLog = 'Seleccione o ficheiro de rexistro binario que quer ver';
$strSelectFields = 'Seleccione os campos (mínimo 1)';
$strSelectForeignKey = 'Escoller unha Chave Externa';
$strSelectNumRows = 'a procurar';
$strSelectReferencedKey = 'Seleccionar a chave referida';
$strSelectTables = 'Seleccionar tabelas';
$strSend = 'Enviar <i>(gravar nun ficheiro)</i><br />';
$strSent = 'Enviado';
$strServerChoice = 'Escolla de Servidor';
$strServerNotResponding = 'O servidor non está a responder';
$strServer = 'Servidor';
$strServers = 'Servidores';
$strServerStatusDelayedInserts = 'Insercións demoradas';
$strServerStatus = 'Información sobre o runtime';
$strServerStatusUptime = 'Este servidor de MySQL leva funcionando %s. Iniciouse às %s.';
$strServerTabVariables = 'Variábeis';
$strServerTrafficNotes = '<b>Tráfico do servidor</b>: Estas tabelas mostran as estatísticas do tráfico da rede neste servidor de MySQL desde que se iniciou.';
$strServerVars = 'Variábeis e configuración do servidor';
$strServerVersion = 'Versión do servidor';
$strSessionStartupErrorGeneral = 'Non se pode iniciar sesiÃ³n sen erros. Comproble os erros que aparecen no ficheiro de rexistro do seu servidor de PHP ou web e cofnigure a sÃºa instalaciÃ³n PHP adecuadamente.';
$strSessionValue = 'Valor da sesión';
$strSetEnumVal = 'Se o tipo de campo é "enum" ou "set", introduza os valores usando este formato: \'a\',\'b\',\'c\'...<br />Se precisar pór unha barra invertida (" \ ") ou aspas simples (" \' ") entre estes valores, preceda a barra e as aspas de barras invertidas (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShowAll = 'Ver todos os rexistros';
$strShowColor = 'Mostrar a cor';
$strShowDatadictAs = 'Formato do dicionario de datos';
$strShowFullQueries = 'Mostrar as procuras completas';
$strShowGrid = 'Mostrar a grella';
$strShowHideLeftMenu = 'Mostrar/Agochar o menÃº esquerdo';
$strShowingBookmark = 'A mostrar o marcador';
$strShowingPhp = 'Mostrar como cÃ³digo PHP';
$strShowingRecords = 'Mostrando rexistros ';
$strShowingSQL = 'Mostrar procura SQL';
$strShow = 'Mostrar';
$strShowOpenTables = 'Mostrar as tabelas abertas';
$strShowPHPInfo = 'Mostrar información sobre o PHP';
$strShowSlaveHosts = 'Mostrar os servidores escravos';
$strShowSlaveStatus = 'Mostrar o estado dos escravos';
$strShowStatusBinlog_cache_disk_useDescr = 'Número de transaccións que utilizaron o caché do rexistro binario mais que excederon o valor de binlog_cache_size e utilizaron un ficheiro temporal para armacenar instrucións para a transacción.';
$strShowStatusBinlog_cache_useDescr = 'Número de transaccións que utilizaron o caché do rexistro binario.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'Número de tabelas temporais no disco creadas automaticamente polo servidor ao executar as instrucións. Se Created_tmp_disk_tables é grande, pode querer incrementar o valor de tmp_table_size para que as tabelas temporais se baseen na memoria en vez de no disco.';
$strShowStatusCreated_tmp_filesDescr = 'Cantos ficheiros temporais creou mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'Número de tabelas temporais na-memoria creadas automaticamente polo servidor ao executar instrucións.';
$strShowStatusDelayed_errorsDescr = 'Número de fileiras escritas con INSERT DELAYED que sofriron algún erro (probabelmente unha chave duplicada).';
$strShowStatusDelayed_insert_threadsDescr = 'Número de fíos de manipulación INSERT DELAYED en uso. Cada tabela diferente na que se utiliza INSERT DELAYED recebe o seu propio fío.';
$strShowStatusDelayed_writesDescr = 'Número de fileiras INSERT DELAYED escritas.';
$strShowStatusFlush_commandsDescr  = 'Número de instrucións FLUSH executadas.';
$strShowStatusHandler_commitDescr = 'Número de instrucións COMMIT internas.';
$strShowStatusHandler_deleteDescr = 'Número de veces que se eliminou unha fileira dunha tabela.';
$strShowStatusHandler_discoverDescr = 'O servidor de MySQL pódelle perguntar ao motor de armacenamento NDB Cluster se sabe dunha tabela cun nome dado. Isto chámase descobrimento. Handler_discovery indica o número de veces que se descobriron tabelas.';
$strShowStatusHandler_read_firstDescr = 'Número de veces que se leu a primeira entrada dun índice. Se é alto, tamén suxire que o servidor está realizando un monte de de exames de índice completos; por exemplo, SELECT col FROM algo, supoñendo que col está indexada.';
$strShowStatusHandler_read_keyDescr = 'Número de peticións para ler unha fileira baseadas nunha chave. Se é alto, é unha boa indicación de que as procuras e tabelas están ben indexadas.';
$strShowStatusHandler_read_nextDescr = 'Número de peticións para ler a seguinte fileira na orde da chave. Isto increméntase se está procurando unha columna de índice cunha limitación de rango ou se está a examinar un índice.';
$strShowStatusHandler_read_prevDescr = 'Número de peticións para ler a fileira anterior na orde da chave. Este método de lectura utilízase sobre todo para optimizar ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'Número de peticións para ler unha fileira baseadas nunha posición fixa. Isto é alto se está a realizar moitas procuras que requiren ordenar o resultado. Posibelmente terá un monte de procuras que esixen que MySQL examine tabelas completas ou ten unións que non usan as chaves apropiadamente.';
$strShowStatusHandler_read_rnd_nextDescr = 'Número de peticións para ler a seguinte fileira no ficheiro de datos. Isto é alto se está a realizar moitos exames de tabelas. Normalmente suxire que as tabelas non están indexadas apropiadamente ou que as súas procuras non están escritas para aproveitar os índices de que dispón.';
$strShowStatusHandler_rollbackDescr = 'Número de instrucións de ROLLBACK interno.';
$strShowStatusHandler_updateDescr = 'Número de peticións para actualizar unha fileira nunha tabela.';
$strShowStatusHandler_writeDescr = 'Número de peticións para inserir un ficheiro nunha tabela.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'Número de páxinas que conteñen datos (suxos ou limpos).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'Número de páxinas actualmente suxas.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'Número de páxinas do buffer que se pediu que se limpasen.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'Número de páxinas libres.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'Número de páxinas con seguro no buffer InnoDB buffer. Estas páxinas están actualmente a ser lidas ou escritas ou non se poden limpar ou eliminar por algunha outra razón.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'O número de páxinas ocupadas porque se destinan a reserva administrativa, tais como bloqueos de fileiras ou o índice hash adaptativo. Este valor tamén se pode calcular así: Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Tamaño total do búfer, en páxinas.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'Número de pré-lecturas "aleatorias" iniciadas por InnoDB. Isto acontece cando unha procura vai examinar unha porción grande dunha tabela mais en orde aleatoria.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'Número de pre-lecturas secuenciais iniciada por innoDB. Isto acontece cando InnoDB realiza un exame secuencial completo dunha tabela.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'Número de peticións de lectura lóxicas feitas por InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'Número de lecturas lóxicas que InnoDB non puido satisfacer do búfer e tivo que efectuar por medio de lecturas dunha única páxina.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalmente, escríbese no búfer de InnoDB como tarefa de fondo. Porén, de se precisar ler ou crear unha páxina e non haber páxinas limpas disponíbeis, hai que agardar a que se limpen. Este contador vai contando cantas veces hai que esperar. Se o tamaño do búfer é o apropiado, este valor debería ser pequeno.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'Número de veces que se escribiu no búfer InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'Número de operacións fsync() até o momento.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'Número actual de operacións fsync() pendentes.';
$strShowStatusInnodb_data_pending_readsDescr = 'Número actual de lecturas pendentes.';
$strShowStatusInnodb_data_pending_writesDescr = 'Número actual de escritas pendentes.';
$strShowStatusInnodb_data_readDescr = 'Cantidade de datos lida até o momento, en bytes.';
$strShowStatusInnodb_data_readsDescr = 'Número total de lecturas de datos.';
$strShowStatusInnodb_data_writesDescr = 'Número total de escritas de datos.';
$strShowStatusInnodb_data_writtenDescr = 'Cantidade de datos escrita até o momento, en bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'Número de escritas duplas realizadas e número de páxinas escritas con este propósito.';
$strShowStatusInnodb_dblwr_writesDescr = 'Número de escritas duplas realizadas e número de páxinas escritas con este propósito.';
$strShowStatusInnodb_log_waitsDescr = 'Número de esperas debidas a que o búfer do rexistro é demasiado pequeno e houbo que agardar até que se limpase para continuar.';
$strShowStatusInnodb_log_write_requestsDescr = 'Número de peticións de escrita no rexistro.';
$strShowStatusInnodb_log_writesDescr = 'Número de escritas físicas no ficheiro de rexistro.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'Número de escritas fsyncss feitas no ficheiro de rexistro.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'Número de fsyncs do ficheiro de rexistro pendentes.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Escritas no ficheiro de rexistro pendentes.';
$strShowStatusInnodb_os_log_writtenDescr = 'Número de bytes escritos no ficheiro de rexistro.';
$strShowStatusInnodb_pages_createdDescr = 'Número de páxinas creadas.';
$strShowStatusInnodb_page_sizeDescr = 'O tamaño de páxina InnoDB incluído (por omisión 16KB). Moitos valores cóntanse en páxinas: o tamaño da páxina permite que se convirtan doadamente en bytes.';
$strShowStatusInnodb_pages_readDescr = 'Número de páxinas lidas.';
$strShowStatusInnodb_pages_writtenDescr = 'Número de páxinas escritas.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'Número de bloqueo de fileiras polos que se está a aguardar agora mesmo.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Tempo que, de media, leva adquirir un bloqueo sobre unha fileira, en milisegundos.';
$strShowStatusInnodb_row_lock_timeDescr = 'Tempo total empregado na adquisición de bloqueos sobre as fileiras, en milisegundos.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Tempo máximo en adquirir un bloqueo de fileira, en milisegundos.';
$strShowStatusInnodb_row_lock_waitsDescr = 'Número de veces que houbo que agardar polo bloqueo dunha fileira.';
$strShowStatusInnodb_rows_deletedDescr = 'Número de fileiras eliminadas das tabelas InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'Número de fileiras inseridas nas tabelas InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'Número de fileiras lidas das tabelas InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'Número de fileiras actualizadas en tabelas InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'Número de bloques chave na caché de chaves que se mudaron mais que ainda non se limparon para o disco. Antes era Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'Número de bloques sen utilizar na caché de chaves. Pode utilizar este valor para determinar canta caché de chave está en uso.';
$strShowStatusKey_blocks_usedDescr = 'Número de bloques utilizados na caché de chaves. Este valor é unha referencia superior que indica o número máximo de bloques que se teñen empregado.';
$strShowStatusKey_read_requestsDescr = 'Número de peticións para ler un bloque chave da caché.';
$strShowStatusKey_readsDescr = 'Número de lecturas físicas dun bloque chave desde o disco. Se key_reads é grande, entón o valor de key_fuffer_size é posibelmente demasiado baixo. A relación de perdas da caché pódese calcular así: Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'Número de peticións para escribir un bloque chave na caché.';
$strShowStatusKey_writesDescr = 'Número de escritas físicas dun bloque chave no disco.';
$strShowStatusLast_query_costDescr = 'Custo total da última procura compilada tal e como se computa mediante o optimizador de procuras. Resulta útil para comparar o custo de planos de procura diferentes para a mesma pesquisa. O valor por omisión é 0, que significa que ainda non se compilou nengunha procura.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'Número de procuras que están a agardar para seren escritas nas filas INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'Número de tabelas abertas en total. Se a cantidade é grande, o valor da caché de tabelas posibelmente é demasiado pequeno.';
$strShowStatusOpen_filesDescr = 'Número de ficheiros abertos.';
$strShowStatusOpen_streamsDescr = 'Número de fluxos abertos (utilizado principalmente para o rexistro).';
$strShowStatusOpen_tablesDescr = 'Número de tabelas abertas.';
$strShowStatusQcache_free_blocksDescr = 'Número de bloques de memoria libres na caché de procuras.';
$strShowStatusQcache_free_memoryDescr = 'Cantidade de memoria libre para a caché de procuras.';
$strShowStatusQcache_hitsDescr = 'Número de impactos na caché.';
$strShowStatusQcache_insertsDescr = 'Número de procuras adicionadas á caché.';
$strShowStatusQcache_lowmem_prunesDescr = 'Número de procuras eliminadas da caché para liberar memoria para deixar a caché para procuras novas. Esta información pode axudar a afinar o tamaño da caché de procuras. A caché de procuras utiliza unha estratexia de utilizado menos recentemente (LRU) para decidir que procuras debe eliminar da caché.';
$strShowStatusQcache_not_cachedDescr = 'Número de procuras non enviadas á caché (que non se poden enviar, debido á configuración de query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'Número de procuras rexistradas na caché.';
$strShowStatusQcache_total_blocksDescr = 'Número total de bloques na caché de procuras.';
$strShowStatusReset = 'Reiniciar';
$strShowStatusRpl_statusDescr = 'Estado da replicación en modo seguro (ainda non realizado).';
$strShowStatusSelect_full_joinDescr = 'Número de unións que non utilizan índices. Se este valor non é 0, debería comprobar con atención os índices das tabelas.';
$strShowStatusSelect_full_range_joinDescr = 'Número de unións que utilizaron un rango de procura nunha tabela de referencia.';
$strShowStatusSelect_range_checkDescr = 'Número de unións de chaves que comproban a utilización de chaves despois de cada fileira (se non é 0, debería comprobar con atención os índices das tabelas).';
$strShowStatusSelect_rangeDescr = 'Número de unións que utilizaron rangos na primeira tabela (Normalmente non é grave mesmo de ser grande)';
$strShowStatusSelect_scanDescr = 'Número de unións que realizaron un exame completo da primeira tabela.';
$strShowStatusSlave_open_temp_tablesDescr = 'Número de tabelas temporais actualmente abertas polo fío SQL escravo.';
$strShowStatusSlave_retried_transactionsDescr = 'Número total de veces (desde o inicio) que o fío de replicación SQL escravo reintentou as transaccións.';
$strShowStatusSlave_runningDescr = 'Isto está ON se este servidor é un escravo conectado a un máster.';
$strShowStatusSlow_launch_threadsDescr = 'Número de fíos aos que lles levou crearse máis de slow_launch_time segundos.';
$strShowStatusSlow_queriesDescr = 'Número de procuras ás que lles levou máis de long_query_time segundos.';
$strShowStatusSort_merge_passesDescr = 'Número de pasaxes de fusión que tivo que facer o algoritmo de ordenación. Se este valor é grande, debería considerar incrementar o valor da variábel de sistema sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'Número de ordenacións feitas con rangos.';
$strShowStatusSort_rowsDescr = 'Número de fileiras ordenadas.';
$strShowStatusSort_scanDescr = 'Número de ordenacións realizadas examinando a tabela.';
$strShowStatusTable_locks_immediateDescr = 'Número de veces que se adquiriu inmediatamente un bloqueo de tabela.';
$strShowStatusTable_locks_waitedDescr = 'Número de veces que non se puido adquirir inmediatamente un bloqueo de tabela e houbo que agardar. De ser alto e ter observado problemas no desempeño, debería en primeiro lugar mellorar as procuras e despois, ora partir a tabela ou tabelas, ora utilizar replicación.';
$strShowStatusThreads_cachedDescr = 'Número de fíos na caché de fíos. A relación de impactos da caché pódese calcular como Threads_created/Connections. Se este valor é vermello debería aumentar a thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'Número de conexións abertas neste momento.';
$strShowStatusThreads_createdDescr = 'Número de fíos creados para xerir as conexións. De ser Threads_created grande, pode querer aumentar o valor de thread_cache_size. (Normalmente isto non fornece unha mellora notábel no desempeño se ten unha boa implementación de fíos.)';
$strShowStatusThreads_runningDescr = 'Número de fíos que non están a durmir.';
$strShowTableDimension = 'Mostrar a dimensión das tabelas';
$strShowTables = 'Mostrar as tabelas';
$strShowThisQuery = ' Mostrar esta procura aquí outra vez ';
$strSimplifiedChinese = 'Chinés simplificado';
$strSingly = 'a refacer logo de insercións e destrucións (shingly)';
$strSize = 'Tamaño';
$strSkipQueries = 'Número de rexistros (procuras) a saltar desde o inicio';
$strSlovak = 'Eslovaco';
$strSlovenian = 'Esloveno';
$strSmallBigAll = 'Todo Grande/Pequeno';
$strSnapToGrid = 'Axustar Ã¡ grella';
$strSocketProblem = '(ou o soquete local do servidor de MySQL non se configurou correctamente)';
$strSortByKey = 'Ordenar pola chave';
$strSorting = 'Ordenación';
$strSort = 'Ordenar';
$strSpaceUsage = 'Uso do espazo';
$strSpanish = 'Español';
$strSplitWordsWithSpace = 'As palabras divídense cun carácter de espazo (" ").';
$strSQLCompatibility = 'Modo de compatiblidade SQL';
$strSQLExportType = 'Tipo de exportación';
$strSQLParserBugMessage = 'Cabe a posibilidade de que atopase un erro no procesador de SQL. Examine a súa pesquisa con atención e comprobe que as aspas son correctas e que cada un ten o seu par. Outras causas posíbeis serían que tentase enviar un ficheiro con binario fora dunha área de texto entre aspas. Tamén pode tentar facer a súa pesquisa na liña de comandos do MySQL. A mensaxe de erro que lle envía o servidor de MySQL, e que aparece máis abaixo (de habela), tamén o pode axudar a diagnosticar o problema. Se persisten os erros ou se o procesador falla cando mesmo a liña de comandos vai ben,reduza o texto da pesquisa à parte concreta que produce o erro e envíe unha mensaxe de erro co texto da sección RECORTE que aparece a continuación:';
$strSQLParserUserError = 'Parece que houbo un problema na súa pesquisa en SQL. Se máis abaixo aparece unha mensaxe de erro do servidor de MySQL, isto pode axudar a diagnosticar o problema';
$strSQLQuery = 'comando SQL';
$strSQLResult = 'Resultado SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'O identificador non é válido';
$strSQPBugUnclosedQuote = 'Falta pór a aspa final';
$strSQPBugUnknownPunctuation = 'Hai unha secuencia de puntuación que resulta descoñecida';
$strStandInStructureForView = 'Estrutura existente para a vista';
$strStatCheckTime = 'Comprobación máis recente';
$strStatCreateTime = 'Creación';
$strStatement = 'Informacións';
$strStatisticsOverrun = 'Nun servidor ocupado, os contadores de bytes poden sobrecarregarse, de maneria que esas estatísticas, tal e como as transmite o servidor de MySQL, poden resultar incorrectas.';
$strStatUpdateTime = 'Actualización máis recente';
$strStatus = 'Estado';
$strStorageEngine = 'Motor de armacenamento';
$strStorageEngines = 'Motores de armacenamento';
$strStrucCSV = 'Datos CSV';
$strStrucData = 'Estrutura e datos';
$strStrucExcelCSV = 'CSV (para datos de MS Excel)';
$strStrucNativeExcel = 'Datos nativos de MS Excel';
$strStrucOnly = 'Só a estrutura';
$strStructPropose = 'Propor unha estrutura para a tabela';
$strStructure = 'Estrutura';
$strStructureForView = 'Estrutura para a vista';
$strSubmit = 'Submeter';
$strSuccess = 'O seu comando de SQL executou-se com éxito';
$strSum = 'Suma';
$strSwedish = 'Sueco';
$strSwitchToDatabase = 'Pasar á base de datos copiada';
$strSwitchToTable = 'Ir à tabela copiada';

$strTableAlreadyExists = 'A tabela %s xa existe!!';
$strTableComments = 'Comentarios da tabela';
$strTableEmpty = 'O nome da tabela está vacío!';
$strTableHasBeenDropped = 'Eliminouse a tabela %s';
$strTableHasBeenEmptied = 'Vaciouse a tabela %s';
$strTableHasBeenFlushed = 'Fechouse a tabela %s';
$strTableIsEmpty = 'Parece ser que a tabela estÃ¡ baleira!';
$strTableMaintenance = 'Tabela de manutención';
$strTableName = 'Nome da tabela';
$strTableOfContents = 'Índice';
$strTableOptions = 'Opcións de tabela';
$strTables = '%s tabela(s)';
$strTableStructure = 'Estrutura da tabela';
$strTable = 'Tabela';
$strTakeIt = 'colle-o';
$strTblPrivileges = 'Privilexios proprios de tabela';
$strTempData = 'Datos temporais';
$strTextAreaLength = ' Por causa da sua lonxitude,<br /> este campo pode non ser editábel ';
$strThai = 'Tailandés';
$strThemeDefaultNotFound = 'Non se atopou o tema por omisión %s!';
$strThemeNoPreviewAvailable = 'Non se dispón de ante-visión.';
$strThemeNotFound = 'Non se atopou o tema %s!';
$strThemeNoValidImgPath = 'Non hai unha rota válida de imaxe para o tema %s!';
$strThemePathNotFound = 'Non se atopou a rota do tema para o tema %s!';
$strTheme = 'Tema / Estilo';
$strThisHost = 'Este servidor';
$strThreads = 'Fíos';
$strThreadSuccessfullyKilled = 'Finalizouse o fío %s.';
$strTimeoutInfo = 'A importación anterior excedeu do tempo permitido; unha vez reiniciada continuará desde a posición %d.';
$strTimeoutNothingParsed = 'Porén, na última executación non se examinou nada de datos, o que normalmente significa que o phpMyAdmin non poderá rematar esta importación a non ser que lle incrementen os limites de tempo de php.';
$strTimeoutPassed = 'Ultrapasouse o tempo de espera do guión. Se quer rematar a importación, volva a enviar o mesmo ficheiro e a importación continuará.';
$strTime = 'Tempo';
$strToFromPage = 'atÃ©/desde pÃ¡xina';
$strToggleScratchboard = 'conmutar o borrador';
$strToggleSmallBig = 'Alternar pequeno/grande';
$strToSelectRelation = 'Para seleccionar unha relaciÃ³n, clique:';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Chinés tradicional';
$strTraditionalSpanish = 'Español tradicional';
$strTraffic = 'Tráfico';
$strTransactionCoordinator = 'Coordinador da transacción';
$strTransformation_application_octetstream__download = 'Mostrar un vínculo para baixar os datos binarios dun campo. A primeira opción é o nome do ficheiro binario. A segunda é un nome posíbel para o campo dunha fileira de tabela que conteña o nome do ficheiro. Se pretende seleccionar a segunda opción, a primeira deberá conter só unha cadea vacia';
$strTransformation_application_octetstream__hex = 'Mostra unha representación hexadecimal dos datos. O primeiro parámetro, opcional, especifica con que frecuencia se engadirá espazo (por omisión, 2 nibbles).';
$strTransformation_image_jpeg__inline = 'Mostra unha imaxe reducida vinculábel. Opcións: anchura,altura en píxeles (mantén a proporción orixinal)';
$strTransformation_image_jpeg__link = 'Mostra un vínculo a esta imaxe (ou sexa, baixada directa de blob).';
$strTransformation_image_png__inline = 'Ver image/jpeg: na liña';
$strTransformation_text_plain__dateformat = 'Mostra un campo coa hora e data numÃ©rica de unix TIME, TIMESTAMP, DATETIME como hora e data con formato. A primeira opciÃ³n Ã© a diferenza (en horas) que se engadirÃ¡ Ã¡ hora ou data (Por omisiÃ³n:0). Use a segunda opciÃ³n para especificar unha cadea de formato de data/hora diferente. A terceira opciÃ³n determina se quere ver a hora local ou a UTC (empregue as cadeas "local" ou "utc") para iso. Segundo isto, o formato de data ten un valor diferente - para "local" vexa a documentaciÃ³n acerca da funciÃ³n PHP\'s strftime() e para "utc" faise empregando a funciÃ³n gmdate().';
$strTransformation_text_plain__external = 'SÓ EN LINUX: Inícia unha aplicación externa e envia-lle o campo de datos por meio do input padrón.  Devolve a saída padrón da aplicación. Por omisión é Tidy, para que resulte código HTML claro. Por razóns de seguranza, ten que editar manualmente o ficheiro libraries/transformations/text_plain__external.inc.php e inserir as ferramentas que quer permitir que funcionen. A primeira opción, polo tanto, é o número do programa que quer usar e a segunda opción son os parámetros do programa. O terceiro parámetro, se é 1, usará htmlspecialchars() para convertir a saída (Por omisión é 1). Un cuarto parámetro, se é 1, porá un NOWRAP na cela de contidos para que toda a saída se mostre sen reformatar (Por omisión é 1)';
$strTransformation_text_plain__formatted = 'Mantén o formato orixinal do campo. Non hai Escape.';
$strTransformation_text_plain__imagelink = 'Mostra unha imaxe e un vínculo; o campo conte o nome do ficheiro. A primeira opción é un prefixo do tipo "http://domain.com/"; a segunda opción é o ancho en píxeles; a terceira é a altura.';
$strTransformation_text_plain__link = 'Mostra un vínculo; o campo contén o nome do ficheiro. A primeira opción é un prefixo do tipo "http://domain.com/"; a segunda opción é un título para o vínculo.';
$strTransformation_text_plain__sql = 'Formata texto como procura SQL e resalta a sintaxe.';
$strTransformation_text_plain__substr = 'Só mostra parte dunha cadea. A primeira opción é unha distancia para definir onde comeza a saída de texto (por omisión, 0). A segunda opción é unha distancia cando texto se devolve. Se é vacio, volve todo o texto que resta. A terceira opción define que caracteres se engadirán á saída cando se devolve unha subcadea (Por omisión: ...).';
$strTriggers = 'Lanza';
$strTruncateQueries = 'Interrumpir as procuras mostradas';
$strTurkish = 'Turco';
$strType = 'Tipo';

$strUkrainian = 'Ucraniano';
$strUncheckAll = 'Quitar-lles as marcas a todos';
$strUnicode = 'Unicode';
$strUnique = 'Único';
$strUnknown = 'descoñecido';
$strUnselectAll = 'Non seleccionar nada';
$strUnsupportedCompressionDetected = 'Tentou carregar un ficheiro cunha compresión descoñecida (%s). Ora non se sabe como descomprimir, ora está desactivada na configuración.';
$strUpdatePrivMessage = 'Acaba de actualizar os privilexios de %s.';
$strUpdateProfileMessage = 'Actualizouse o perfil.';
$strUpdateQuery = 'Actualizar a procura';
$strUpdComTab = 'Consulte a Documentación para saber como actualizar a tabela Column_comments';
$strUpgrade = 'Deberia actualizar a %s %s ou posterior.';
$strUploadErrorCantWrite = 'Non se puido escribir no disco.';
$strUploadErrorExtension = 'DetÃ­vose o envÃ­o do ficheiro por causa da extensiÃ³n.';
$strUploadErrorFormSize = 'O tamaÃ±o do ficheiro excede a directiva MAX_FILE_SIZE que se especificou no formulario HTML.';
$strUploadErrorIniSize = 'O tamaÃ±o do ficheiro enviado excede a directiva upload_max_filesize de php.ini.';
$strUploadErrorNoTempDir = 'Falta un directorio temporal.';
$strUploadErrorPartial = 'O ficheiro enviado sÃ³ se recibiu parcialmente.';
$strUploadErrorUnknown = 'Erro descoÃ±ecido ao enviar o ficheiro.';
$strUploadLimit = 'Posibelmente tentou enviar un ficheiro demasiado grande. Consulte a %sdocumentación%s para averiguar como evitar este limite.';
$strUploadsNotAllowed = 'Este servidor non admite a subida de ficheiros.';
$strUsage = 'Uso';
$strUseBackquotes = 'Protexer os nomes das tabelas e dos campos con&nbsp;" ` "';
$strUsedPhpExtensions = 'Extensións de PHP utilizadas';
$strUseHostTable = 'Usar a tabela de Host';
$strUserAlreadyExists = 'O usuario %s xa existe';
$strUserEmpty = 'O nome do usuario está vacío!';
$strUserName = 'Nome do usuario';
$strUserNotFound = 'Non se atopou o usuario seleccionado na tabela de privilexios.';
$strUserOverview = 'Vista xeral dos usuarios';
$strUsersDeleted = 'Os usuarios seleccionados elimináron-se sen problemas.';
$strUsersHavingAccessToDb = 'Utilizadores que teñen acceso a &quot;%s&quot;';
$strUser = 'Usuario';
$strUseTabKey = 'Use a tecla do tabulador para moverse de valor en valor ou a tecla CONTROL combinada cunha flecha para moverse a calquer sitio';
$strUseTables = 'Usar as tabelas';
$strUseTextField = 'Use campo de texto';
$strUseThisValue = 'Usar este valor';

$strValidateSQL = 'Validar SQL';
$strValidatorError = 'Non foi posíbel iniciar o comprobador de SQL. Comprobe que ten instaladas todas as extensións de php tal e como se descrebe na %sdocumentación%s.';
$strValue = 'Valor';
$strVar = 'Variábel';
$strVersionInformation = 'Información sobre a versión';
$strViewDumpDatabases = 'Ver o volcado das bases de datos';
$strViewDumpDB = 'Ver o esquema do volcado da base de datos';
$strViewDump = 'Ver o esquema do volcado da tabela';
$strViewHasBeenDropped = 'Deixouse a vista %s';
$strViewMaxExactCount = 'Esta vista ten máis de %s fileiras. Consulte a %sdocumentación%.';
$strViewName = 'Nome da VISTA';
$strView = 'Vista';

$strWebServerUploadDirectory = 'directorio de subida (upload) do servidor web';
$strWebServerUploadDirectoryError = 'Non se pode acceder ao directorio que designou para as subidas (upload)';
$strWelcome = 'Benvida/o a %s';
$strWestEuropean = 'Europeu ocidental';
$strWildcard = 'comodín';
$strWindowNotFound = 'Non se puido modificar a xanela de destino do navegador. Talvez porque fechou a xanela da que depende ou porque o seu navegador está a bloquear as actualizacións entre xanelas xa que asi o pediu na configuración de seguranza do navegador.';
$strWithChecked = 'Todos os marcados';
$strWriteRequests = 'Peticións de escrita';
$strWrongUser = 'Usuario ou contrasinal errado. Acceso negado.';

$strXML = 'XML';

$strYes = 'Si';

$strZeroRemovesTheLimit = 'Nota: Se estas opcións se configuran como 0 (cero) elimina-se o limite.';
$strZip = 'comprimido no formato "zip"';

$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

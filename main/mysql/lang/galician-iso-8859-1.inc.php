<?php
/* $Id: galician-iso-8859-1.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Translated by Xos� Calvo <xosecalvo at terra.es>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$day_of_week = array('Do', 'Lu', 'Ma', 'M�', 'Xo', 'Ve', 'S�');
$month = array('Xan', 'Feb', 'Mar', 'Abr', 'Maio', 'Xu�o', 'Xullo', 'Ago', 'Set', 'Out', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d de %B de %Y �s %H:%M';

$timespanfmt = '%s d�as, %s horas, %s minutos e %s segundos';

$strAbortedClients = 'Cancelado';
$strAccessDenied = 'Acceso Negado';
$strAccessDeniedCreateConfig = 'Isto d�bese, posibelmente, a que non creou un ficheiro de configuraci�n. Talvez queira utilizar %1$ssetup script%2$s para crear un.';
$strAccessDeniedExplanation = 'O phpMyAdmin tentouse conectar ao servidor de MySQL, mais o servidor rexeitou a conexi�n. Deber� comprobar o nome do servidor, o nome de usuario e o contrasinal no ficheiro config.inc.php e asegurarse de que corresponden coa informaci�n proporcionada polo administrador do servidor do MySQL.';
$strAction = 'Acci�n';
$strAddAutoIncrement = 'Engadir o valor incremental (AUTO_INCREMENT)';
$strAddClause = 'Engadir %s';
$strAddConstraints = 'Adicionar limitaci�ns';
$strAddDeleteColumn = 'Adicionar/Eliminar columnas de campo';
$strAddDeleteRow = 'Adicionar/Eliminar filas de criterios';
$strAddFields = 'Adicionar %s campo(s)';
$strAddHeaderComment = 'Adicionar un comentario proprio no cabezallo (\n li�as diferentes)';
$strAddIntoComments = 'Engadir aos comentarios';
$strAddNewField = 'Adicionar un novo campo';
$strAddPrivilegesOnDb = 'Adicionar privilexios para a esta base de datos';
$strAddPrivilegesOnTbl = 'Adicionar privilexios para a esta tabela';
$strAddSearchConditions = 'Condici�n da pesquisa (ou sexa, o complemento da cl�usula "WHERE"):';
$strAddToIndex = 'Adicionar ao �ndice &nbsp;%s&nbsp;coluna(s)';
$strAddUser = 'Adicionar un novo usuario';
$strAddUserMessage = 'Usuario adicionado.';
$strAdministration = 'Administraci�n';
$strAffectedRows = 'Fileiras que se ver�n afectadas:';
$strAfter = 'Despois de %s';
$strAfterInsertBack = 'Voltar';
$strAfterInsertNewInsert = 'Inserir un novo rexistro';
$strAfterInsertNext = 'Modificar a fileira seguinte';
$strAfterInsertSame = 'Voltar para esta p�xina';
$strAllowInterrupt = 'Permitir que se interrumpa a importaci�n no caso de que o gui�n detecte que est� perto do limite. Este poder�a ser un bon m�todo para importar ficheiros longos, ainda que pode rachar transacci�ns.';
$strAllTableSameWidth = 'mostrar todas as tabelas co mesmo ancho?';
$strAll = 'Todos';
$strAlterOrderBy = 'Ordenar a tabela por';
$strAnalyzeTable = 'Analizar a tabela';
$strAnd = 'E';
$strAndThen = 'e despois';
$strAngularLinks = 'Ligazóns angulares';
$strAnIndex = 'Adicionouse un �ndice a %s';
$strAny = 'Calquer';
$strAnyHost = 'Calquer servidor';
$strAnyUser = 'Calquer usuario';
$strApproximateCount = 'Pode ser aproximado. Consulte a FAQ 3.11';
$strAPrimaryKey = 'Adicionouse unha chave primaria a %s';
$strArabic = '�rabe';
$strArmenian = 'Armenio';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No comezo da tabela';
$strAtEndOfTable = 'Ao final da tabela';
$strAttr = 'Atributos';
$strAutomaticLayout = 'Distribuci�n autom�tica';

$strBack = 'Voltar';
$strBaltic = 'B�ltico';
$strBeginCut = 'COMEZA O RECORTE';
$strBeginRaw = 'COMEZA O TEXTO SIMPLE ("RAW")';
$strBinary = ' Binario ';
$strBinaryDoNotEdit = ' Binario - non editar ';
$strBinaryLog = 'Ficheiro de rexistro binario';
$strBinLogEventType = 'Tipo de evento';
$strBinLogInfo = 'Informaci�n';
$strBinLogName = 'Nome do ficheiro de rexistro';
$strBinLogOriginalPosition = 'Posici�n orixinal';
$strBinLogPosition = 'Posici�n';
$strBinLogServerId = 'ID do servidor';
$strBookmarkAllUsers = 'Permitir que calquer usuario poida acceder a este marcador';
$strBookmarkCreated = 'Creouse o marcador %s';
$strBookmarkDeleted = 'Eliminouse o marcador.';
$strBookmarkLabel = 'Nome';
$strBookmarkQuery = 'A procura de SQL foi gardada';
$strBookmarkReplace = 'Substituir un marcador xa existente que ten o mesmo nome';
$strBookmarkThis = 'Gardar esta procura de SQL';
$strBookmarkView = 'S� visualizar';
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
$strBulgarian = 'Búlgaro';
$strBusyPages = 'P�xinas ocupadas';
$strBzError = 'phpMyAdmin foi incapaz de comprimir os resultados debido a que esta versi�n do php ten unha extensi�n de Bz2 con erros.  Recom�ndase que configure a directiva <code>$cfg[\'BZipDump\']</code> do seu ficheiro de configuraci�n do phpMyAdmin para que sexa <code>FALSE</code>. Se quer usar a funcionalidade de compresi�n Bz2, actualice a unha versi�n posterior do php. Consulte o informe de erros %s para m�is detalles.';
$strBzip = 'comprimido no formato "bzip"';

$strCalendar = 'Calendario';
$strCancel = 'Cancelar';
$strCanNotLoadExportPlugins = 'Non se deron carregado as extensi�ns de exportaci�n. Verifique a s�a instalaci�n!';
$strCanNotLoadImportPlugins = 'Non se puideron importar as extensi�ns - Comprobe a s�a instalaci�n!';
$strCannotLogin = 'Non podo conectar co servidor de MySQL';
$strCantLoad = 'Non se pode carregar a extensi�n %s.<br />Comprobe a configuraci�n do PHP.';
$strCantLoadRecodeIconv = 'Non se puido carregar iconv ou prec�sase da extensi�n recode para a conversi�n do charset. Configure o php para que se poidan usar estas extensi�ns ou indique que non se use a conversi�n de charset en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Non se pode facer que este �ndice sexa PRIMARIO!';
$strCantUseRecodeIconv = 'Non se puido usar nen iconv nen libiconv nen a funci�n recode_stringf mentres haxa extensi�ns por carregar. Comprobe a s�a configuraci�n do php.';
$strCardinality = 'Cardinalidade';
$strCaseInsensitive = 'sen distinguir mai�sculas de min�sculas';
$strCaseSensitive = 'distinguindo mai�sculas de min�sculas';
$strCentralEuropean = 'Centroeuropeu';
$strChangeCopyModeCopy = '... manter o anterior.';
$strChangeCopyMode = 'Crear un utilizador novo cos mesmos privilexios e...';
$strChangeCopyModeDeleteAndReload = ' ... eliminar o anterior das tabelas de utilizadores e recarregar os privilexios desp�is.';
$strChangeCopyModeJustDelete = ' ... eliminar o anterior das tabelas de utilizadores.';
$strChangeCopyModeRevoke = ' ... retirar-lle todos os privilexios activos ao anterior e eliminalo desp�is.';
$strChangeCopyUser = 'Modificar a informaci�n de acceso (login) / Copiar utilizador';
$strChangeDisplay = 'Escolla o campo que se h� de mostrar';
$strChange = 'Mudar';
$strChangePassword = 'Trocar o contrasinal';
$strCharset = 'Conxunto de caracteres';
$strCharsetOfFile = 'Conxunto de caracteres do ficheiro:';
$strCharsetsAndCollations = 'Conxuntos de caracteres e Ordes alfab�ticas';
$strCharsets = 'Conxuntos de caracteres';
$strCheckAll = 'Marc�-los todos';
$strCheckOverhead = 'Exceso na comprobaci�n';
$strCheckPrivs = 'Comprobar os privilexios';
$strCheckPrivsLong = 'Comprobar os privilexios da base de datos &quot;%s&quot;.';
$strCheckTable = 'Verificar a tabela';
$strChoosePage = 'Escolla unha p�xina para modificar';
$strColComFeat = 'Mostrando os comentarios das columnas';
$strCollation = 'Orde alfab�tica';
$strColumnNames = 'Nomes das Columnas';
$strColumnPrivileges = 'Privilexios proprios de columna';
$strCommand = 'Comando';
$strComments = 'Comentarios';
$strCommentsForTable = 'COMENTARIOS PARA A TABELA';
$strCompatibleHashing = 'Compat�bel co MySQL&nbsp;4.0';
$strCompleteInserts = 'Inserci�ns completas';
$strCompression = 'Compresi�n';
$strCompressionWillBeDetected = 'A compresi�n do ficheiro importado detectarase automaticamente de: %s';
$strConfigDefaultFileError = 'Non se puido carregar a configuraci�n desde: "%1$s"';
$strConfigFileError = 'phpMyAdmin non puido ler o seu ficheiro de configuraci�n<br/>Isto poder�a deberse a que php atopou un erro nel ou a que php non puido atopar o ficheiro.<br/>Invoque o ficheiro de configuraci�n directamente mediante o v�nculo que hai m�is abaixo e lea a mensaxe de erro de php que receba. Na maior�a dos casos simplesmente faltan unha aspa ou un ponto e v�rcula <br/>Se recebe unha p�xina en branco � que todo est� ben.';
$strConfigureTableCoord = 'Configure as coordenadas da tabela %s';
$strConnectionError = 'Non se pode conectar: os axustes non son v�lidos.';
$strConnections = 'Conexi�ns';
$strConstraintsForDumped = 'Limitaci�ns para os volcados das tabelas';
$strConstraintsForTable = 'Limitaci�ns para a tabela';
$strControluserFailed = 'Fallou a conexión para controluser tal e como se define na súa configuración.';
$strCookiesRequired = 'A partir de aqui debe permitir cookies.';
$strCopy = 'Copiar';
$strCopyDatabaseOK = 'A base de dastos %s copiouse para %s';
$strCopyTable = 'Copiar a tabela a (base_de_datos<b>.</b>tabela):';
$strCopyTableOK = 'A tabela \$table copiouse para \$new_name.';
$strCopyTableSameNames = 'Non se pode copiar unha tabela sobre si mesma';
$strCouldNotKill = 'phpMyAdmin foi incapaz de finalizar o f�o %s.  Probablemente xa est� fechado.';
$strCreate = 'Crear';
$strCreateDatabaseBeforeCopying = 'CREAR BASE DE DATOS antes de copiar';
$strCreateIndex = 'Crear un �ndice en&nbsp;%s&nbsp;colunas';
$strCreateIndexTopic = 'Crear un novo �ndice';
$strCreateNewDatabase = 'Crear unha nova base de datos';
$strCreateNewTable = 'Crear unha tabela nova na base de datos %s';
$strCreatePage = 'Crear unha p�xina nova';
$strCreatePdfFeat = 'Creaci�n de PDFs';
$strCreateRelation = 'Crear relación';
$strCreateTable  = 'Crear tabelas';
$strCreateUserDatabase = 'Base de datos para o usuario';
$strCreateUserDatabaseName = 'Crear unha base de datos co mesmo nome e conceder todos os privilexios';
$strCreateUserDatabaseNone = 'Nengunha';
$strCreateUserDatabaseWildcard = 'Conceder todos os privilexios para o nome con comod�ns (username\_%)';
$strCreationDates = 'Datas de creaci�n/actualizaci�n/comprobaci�n';
$strCriteria = 'Criterio';
$strCroatian = 'Croata';
$strCSV = 'CSV';
$strCyrillic = 'Cir�lico';
$strCzech = 'Checo';
$strCzechSlovak = 'Checo-eslovaco';

$strDanish = 'Dinamarqu�s';
$strDatabase = 'Base de Datos';
$strDatabaseEmpty = 'O nome da base de datos non existe!';
$strDatabaseExportOptions = 'Opci�ns de exportaci�n da base de datos';
$strDatabaseHasBeenDropped = 'A base de datos %s foi eliminada.';
$strDatabases = 'Bases de Datos';
$strDatabasesDropped = 'Elimin�ronse %s bases de datos sen problemas.';
$strDatabasesStatsDisable = 'Deshabilitar as estat�sticas';
$strDatabasesStatsEnable = 'Habilitar as estat�sticas';
$strDatabasesStats = 'Estat�sticas das bases de datos';
$strDatabasesStatsHeavyTraffic = 'Nota: De habilitar as estat�sticas da base de datos, ocasionar� que se produza un tr�fico denso entre o servidor web e o de MySQL.';
$strData = 'Datos';
$strDataDict = 'Dicionario de datos';
$strDataOnly = 'S� os datos';
$strDataPages = 'P�xinas con datos';
$strDBComment = 'Comentario da base de datos: ';
$strDBCopy = 'Copiar a base de datos para';
$strDbIsEmpty = 'Parece ser que a táboa está baleira!';
$strDbPrivileges = 'Privilexios proprios de base de datos';
$strDBRename = 'Mudar o nome da base de datos para';
$strDbSpecific = 'espec�fico da base de datos';
$strDefaultEngine = '%s � o motor de armacenamento predefinido neste servidor de MySQL.';
$strDefault = 'Padr�n';
$strDefaultValueHelp = 'Para os valores por omisi�n, introduza un �nico valor, sen escapalo con barras ou aspas e usando este formato: a';
$strDefragment = 'Tabela de defragmentaci�n';
$strDelayedInserts = 'Usar inserci�ns demoradas';
$strDeleteAndFlushDescr = 'Este � o modo m�is limpo, mais pode que recarregar os privilexios leve un pouco de tempo.';
$strDeleteAndFlush = 'Eliminar os usuarios e recarregar os privilexios a continuaci�n.';
$strDeleted = 'Rexistro eliminado';
$strDeletedRows = 'Fileiras borradas:';
$strDelete = 'Eliminar';
$strDeleteNoUsersSelected = 'Non se seleccionaron utilizadores para eliminar!';
$strDeleteRelation = 'Eliminar relación';
$strDeleting = 'A eliminar %s';
$strDelimiter = 'Delimitador';
$strDelOld = 'Esta p�xina ten referencias a tabelas que xa non existen. Quere eliminar esas referencias?';
$strDescending = 'Descendente';
$strDescription = 'Descrici�n';
$strDesigner = 'Deseñador';
$strDesignerHelpDisplayField = 'O campo que se mostra aparece en rosa. Para indicar que un campo se seleccione ou non como o campo a mostrar, clique na icona "Escoller o campo a mostrar" e depois no nome do campo apropiado.';
$strDictionary = 'dicionario';
$strDirectLinks = 'Ligazóns directas';
$strDirtyPages = 'P�xinas suxas';
$strDisabled = 'Desactivado';
$strDisableForeignChecks = 'Desabilitar as comprobaci�ns de chaves exteriores';
$strDisplayFeat = 'Mostrar as caracter�sticas';
$strDisplayOrder = 'Mostrar en orde:';
$strDisplayPDF = 'Mostrar o esquema PDF';
$strDoAQuery = 'Faga unha "procura por exemplo" (o comod�n � "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'Documentaci�n';
$strDoYouReally = 'Seguro? ';
$strDropDatabaseStrongWarning = 'Est� a piques de DESTRUIR unha base de datos inteira!';
$strDrop = 'Eliminar';
$strDropUsersDb = 'Eliminar as bases de datos que te�an os mesmos nomes que os usuarios.';
$strDumpingData = 'Extraindo datos da tabela';
$strDumpSaved = 'O vaciado gardouse no ficheiro %s.';
$strDumpXRows = 'P�r %s fileiras a partir da fileira %s.';
$strDynamic = 'din�mico';

$strEdit = 'Modificar';
$strEditPDFPages = 'Editar as p�xinas PDF';
$strEditPrivileges = 'Modificar privilexios';
$strEffective = 'Efectivo';
$strEmpty = 'Borrar';
$strEmptyResultSet = 'MySQL retornou un conxunto vac�o (ex. cero rexistros).';
$strEnabled = 'Activado';
$strEncloseInTransaction = 'Incluir a exportaci�n nunha transacci�n';
$strEndCut = 'FIN DO RECORTE';
$strEnd = 'Fin';
$strEndRaw = 'FIN DO TEXTO SIMPLE ("RAW")';
$strEngineAvailable = '%s est� dispon�bel neste servidor de MySQL.';
$strEngineDisabled = '%s foi desactivado neste servidor de MySQL.';
$strEngines = 'Motores';
$strEngineUnsupported = 'Este servidor de MySQL non acepta o motor de armacenamento %s.';
$strEnglish = 'Ingl�s';
$strEnglishPrivileges = ' Nota: os nomes de privilexios do MySQL est�n en ingl�s';
$strError = 'Erro';
$strErrorInZipFile = 'Erro no ficheiro ZIP:';
$strErrorRelationAdded = 'Erro: non se engadiu a relación.';
$strErrorRelationExists = 'Erro: xa existe unha relación.';
$strErrorRenamingTable = 'Erro ao mudarlle o nome � tabela %1$s para %2$s';
$strErrorSaveTable = 'Erro ao gardar as coordenadas para Deseñador.';
$strEscapeWildcards = 'Os caracteres comod�n _ e % deber�anse escapar con \ para podelos usar literalmente';
$strEsperanto = 'Esperanto';
$strEstonian = 'Estonio';
$strEvent = 'Evento';
$strExcelEdition = 'Edici�n mediante MS-Excel';
$strExecuteBookmarked = 'Efectuar a procura gardada';
$strExplain = 'Explicar SQL';
$strExport = 'Exportar';
$strExportImportToScale = 'Exportar/Importar a escala';
$strExportMustBeFile = 'Gardouse nun ficheiro o tipo de exportaci�n seleccionada!';
$strExtendedInserts = 'Inserci�ns extendidas';
$strExtra = 'Extra';

$strFailedAttempts = 'Tentativas falidas';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Eliminouse o campo %s';
$strFieldInsertFromFileTempDirNotExists = 'Erro ao mover o ficheiro enviado. Consulte FAQ 1.11';
$strFields = 'Campos';
$strFieldsEnclosedBy = 'Os campos delim�tanse con';
$strFieldsEscapedBy = 'Os campos esc�panse con';
$strFieldsTerminatedBy = 'Os campos rematan por';
$strFileAlreadyExists = 'O ficheiro %s xa existe no servidor - escolla outro nome ou seleccione a opci�n de eliminar.';
$strFileCouldNotBeRead = 'Non se puido ler o ficheiro';
$strFileNameTemplateDescriptionDatabase = 'nome da base de datos';
$strFileNameTemplateDescription = 'Este valor interpr�tase utilizando %1$sstrftime%2$s, de maneira que pode utilizar cadeas de formato de hora. Produciranse transformaci�ns en consecuencia: %3$s. O resto do texto ficar� como est�.';
$strFileNameTemplateDescriptionServer = 'nome do servidor';
$strFileNameTemplateDescriptionTable = 'nome da tabela';
$strFileNameTemplate = 'Modelo para o nome de ficheiro';
$strFileNameTemplateRemember = 'lembrar o modelo';
$strFiles = 'Ficheiros';
$strFileToImport = 'Ficheiro a importar';
$strFixed = 'fixo';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin recolle os privilexios dos usuarios directamente das tabelas de privilexios do MySQL. O contido destas tabelas pode diferir dos privilexios que usa o servidor se se levaron a cabo alteraci�ns manuais.  Neste caso, deber�a %svolver a carregar os privilexios%s antes de proseguir.';
$strFlushQueryCache = 'Limpar a cach� da pesquisa';
$strFlushTable = 'Fechar a tabela ("FLUSH")';
$strFlushTables = 'Limpar (fechar) todas as tabelas';
$strFontSize = 'Tamaño da letra';
$strForeignKeyError = 'Erro ao crear unha chave externa (comprobe os tipos de datos)';
$strFormat = 'Formato';
$strFormEmpty = 'Falta un valor no formulario!';
$strFreePages = 'P�xinas libres';
$strFullText = 'Textos completos';
$strFunction = 'Funci�ns';
$strFunctions = 'Funci�ns';

$strGenBy = 'Xerado por';
$strGeneralRelationFeat = 'Caracter�sticas xerais das relaci�ns';
$strGeneratePassword = 'Xerar un contrasinal';
$strGenerate = 'Xerar';
$strGenTime = 'Xerado en';
$strGeorgian = 'Xeorxiano';
$strGerman = 'Alemán';
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
$strHideShowNoRelation = 'Agochar/Mostrar Táboas sen relación';
$strHome = 'Comezo ("Home")';
$strHomepageOfficial = 'P�xina Oficial do phpMyAdmin';
$strHostEmpty = 'O nome do servidor est� vac�o!';
$strHost = 'Servidor';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'Húngaro';

$strIcelandic = 'Island�s';
$strId = 'ID';
$strIdxFulltext = 'Texto completo';
$strIEUnsupported = 'Internet Explorer non permite esta función.';
$strIgnoreDuplicates = 'Ignorar as fileiras duplicadas';
$strIgnore = 'Ignorar';
$strIgnoreInserts = 'Usar inserci�ns ignoradas';
$strImportExportCoords = 'Importar/Exportar coordenadas para esquema PDF';
$strImportFiles = 'Importar ficheiros';
$strImportFormat = 'Formato do ficheiro importado';
$strImport = 'Importar';
$strImportSuccessfullyFinished = 'A importaci�n rematou sen problemas. Execut�ronse %d procuras.';
$strIndexes = '�ndices';
$strIndexesSeemEqual = 'Parece que os índices seguintes son iguais e habería que eliminar un deles:';
$strIndexHasBeenDropped = 'Eliminouse o �ndice %s';
$strIndex = '�ndice';
$strIndexName = 'Nome do �ndice&nbsp;:';
$strIndexType = 'Tipo de �ndice&nbsp;:';
$strIndexWarningTable = 'Problemas cos �ndices da tabela `%s`';
$strInnoDBAutoextendIncrementDesc = ' Tama�o do incremento para extender o tama�o dun espazo de tabela cando se encha.';
$strInnoDBAutoextendIncrement = 'Incremento de Autoextend';
$strInnoDBBufferPoolSizeDesc = 'Tama�o da memoria intermedia que usa InnoDB para gardar provisoriamente os datos e �ndices das s�as tabelas.';
$strInnoDBBufferPoolSize = 'Tama�o da reserva da memoria intermedia';
$strInnoDBDataFilePath = 'Ficheiros de datos';
$strInnoDBDataHomeDirDesc = 'Parte com�n do cami�o do directorio que ten todos os ficheiros de datos de innoDB.';
$strInnoDBDataHomeDir = 'Directorio base dos datos';
$strInnoDBPages = 'p�xinas';
$strInnoDBRelationAdded = 'Engadiuse relación InnoDB';
$strInnodbStat = 'Estado de InnoDB';
$strInsecureMySQL = 'O seu ficheiro de configuraci�n cont�n axustes (en concreto, o usu�rio root non ten contrasinal) que corresponden coa conta con todos os privilexios que MySQL fai por omisi�n. O seu servidor de MySQL est� a rodar con esta configuraci�n, est� aberto a intrusi�ns e haber�a que mirar de solucionar este problema de seguranza.';
$strInsertAsNewRow = 'Inserir unha nova columna';
$strInsertedRowId = 'Identificador da fileira inserida:';
$strInsertedRows = 'Fileiras inseridas:';
$strInsert = 'Inserir';
$strInternalNotNecessary = '* Non se precisa dunha relaci�n interna cando existe tam�n en InnoDB.';
$strInternalRelationAdded = 'Engadiuse relación interna';
$strInternalRelations = 'Relaci�ns internas';
$strInUse = 'en uso';
$strInvalidAuthMethod = 'Na configuraci�n indicouse un m�todo de autenticaci�n non v�lido::';
$strInvalidColumnCount = 'O n�mero de columnas ten que ser maior de cero';
$strInvalidColumn = 'Especificouse unha columna non v�lida (%s)!';
$strInvalidCSVFieldCount = 'Contaxe de campos non v�lida na entrada de CSV na li�a %d.';
$strInvalidCSVFormat = 'Formato de entrada de CSV non v�lido na li�a %d.';
$strInvalidCSVParameter = 'Par�metro non v�lido para a importaci�n de CSV: %s';
$strInvalidDatabase = 'Base de datos non v�lida';
$strInvalidFieldAddCount = 'Ten que engadir un campo polo menos';
$strInvalidFieldCount = 'A tabela ha de ter, polo menos, un campo.';
$strInvalidLDIImport = 'Esta extensi�n non � capaz de realizar importaci�ns comprimidas!';
$strInvalidRowNumber = '%d non � un n�mero de fileira v�lido.';
$strInvalidServerHostname = 'Nome de servidor non v�lido para o servidor %1$s. Revise a configuraci�n.';
$strInvalidServerIndex = '�ndice do servidor non v�lido: "%s"';
$strInvalidTableName = 'Non se admite este nome de tabela.';

$strJapanese = 'Xapon�s';
$strJoins = 'Uni�ns';
$strJumpToDB = 'Saltar � base de datos &quot;%s&quot;.';
$strJustDeleteDescr = 'Os usuarios &quot;eliminados&quot; poder�n ainda acceder ao servidor como sempre at� que se recarreguen os privilexios.';
$strJustDelete = 'Elimine s� os usuarios das tabelas de privilexios.';

$strKeepPass = 'Non mude o contrasinal';
$strKeyCache = 'cach� da chave';
$strKeyname = 'Nome chave';
$strKill = 'Matar (kill)';
$strKnownExternalBug = 'A función %s vese afectada por un erro descoñecido; consulte see %s';
$strKorean = 'Coreano';

$strLandscape = 'Horizontal';
$strLanguage = 'Lingua';
$strLanguageUnknown = 'Linguaxe desco�ecida: %1$s.';
$strLatchedPages = 'P�xinas fechadas';
$strLatexCaption = 'T�tulo da tabela';
$strLatexContent = 'Contido da tabela __TABLE__';
$strLatexContinuedCaption = 'T�tulo da tabela continuado';
$strLatexContinued = '(continuado)';
$strLatexIncludeCaption = 'Incluir o t�tulo da tabela';
$strLatexLabel = 'Chave da etiqueta';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'Estrutura da tabela __TABLE__';
$strLatvian = 'Letonio';
$strLDI = 'CSV utilizando LOAD DATA';
$strLDILocal = 'Utilice a palabra chave LOCAL';
$strLengthSet = 'Tama�o/Definir*';
$strLimitNumRows = 'N�mero de rexistros por p�xina:';
$strLinesTerminatedBy = 'As li�as rematan por';
$strLinkNotFound = 'Non se atopou o v�nculo';
$strLinksTo = 'Vinc�lase con';
$strLithuanian = 'Lituano';
$strLocalhost = 'Local';
$strLocationTextfile = 'Localizaci�n do arquivo de texto';
$strLogin = 'Entrada (login)';
$strLoginInformation = 'Informaci�n sobre o acceso (login)';
$strLogout = 'Sair';
$strLogPassword = 'Contrasinal:';
$strLogServer = 'Servidor';
$strLogUsername = 'Nome de usuario:';
$strLongOperation = 'Esta operaci�n pode que leve moito tempo. Proc�sase igual?';

$strMaxConnects = 'conexi�ns simult�neas m�ximas';
$strMaximalQueryLength = 'Lonxitude m�xima da procura creada';
$strMaximumSize = 'Tama�o m�ximo: %s%s';
$strMbExtensionMissing = 'Non se atopou a extensi�n mbstring PHP e parece que est� a usar un conxunto de caracteres multibyte. Sen a extensi�n mbstring, o phpMyAdmin � incapaz de partir cadeas correctamente e pode provocar resultados inesperados.';
$strMbOverloadWarning = 'Ten activada mbstring.func_overload na configuraci�n do PHP. Esta opci�n � incompat�bel co phpMyAdmin e poder�a ocasionar danos nos datos';
$strMIME_available_mime = 'Tipos MIME dispon�beis';
$strMIME_available_transform = 'Transformaci�ns dispon�beis';
$strMIME_description = 'Descrici�n';
$strMIME_MIMEtype = 'Tipo MIME';
$strMIME_nodescription = 'Non existe descrici�n desta transformaci�n.<br />Pergunte-lle ao autor que � o que fai %s.';
$strMIME_transformation_note = 'Para unha lista das opci�ns de transformaci�n dispon�beis e as s�as transformaci�ns de tipos MIME, faga clic sobre  %sdescrici�ns de transformaci�ns%s';
$strMIME_transformation_options_note = 'Introduza os valores das opci�ns de transformaci�n usando este formato:\'a\', 100, b,\'c\'...<br />Se necesita introducir unha barra para tr�s ("\") ou aspas simples ("\'") entre estes valores, preceda-os de barra para tr�s (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strMIME_transformation_options = 'Opci�ns de transformaci�n';
$strMIME_transformation = 'Transformaci�n do navegador';
$strMIMETypesForTable = 'TIPOS MIME PARA A TABELA';
$strMIME_without = 'Os tipos MIME en cursiva non contan cunha funci�n de transformaci�n separada';
$strModifications = 'As modificaci�ns foron gardadas';
$strModifyIndexTopic = 'Modificar un �ndice';
$strModify = 'Modificar';
$strMoveMenu = 'Mover Menú';
$strMoveTable = 'Mover a tabela a (base_de_datos<b>.</b>tabela):';
$strMoveTableOK = 'Moveuse a tabela %s para %s.';
$strMoveTableSameNames = 'Non se pode mover unha tabela sobre si mesma';
$strMultilingual = 'multilíngüe';
$strMyISAMDataPointerSizeDesc = 'O tama�o por omisi�n do punteiro de datos en bytes; usarase con CREATE TABLE para tabelas MyISAM cando non se especifique a opci�n MAX_ROWS.';
$strMyISAMDataPointerSize = 'Tama�o do punteiro de datos';
$strMyISAMMaxExtraSortFileSizeDesc = 'Se o ficheiro temporario usado para a creaci�n r�pida dun �ndice de MyISAM for m�is grande que se se usar o cach� de chaves na cantidade que se especifique aqu�, preferir o m�todo da cach� de chaves.';
$strMyISAMMaxExtraSortFileSize = 'Tama�o m�ixmo dos ficheiros temporarios no momento de crear �ndices';
$strMyISAMMaxSortFileSizeDesc = 'O tama�o m�ximo do ficheiro temporario que se lle permite utilizar a MySQL no momento de recrear un �ndice MyISAM (durante REPAIR TABLE, ALTER TABLE, ou LOAD DATA INFILE).';
$strMyISAMMaxSortFileSize = 'Tama�o m�ximo dos ficheiros de ordenaci�n temporarios';
$strMyISAMRecoverOptionsDesc = 'O modo de recuperaci�n autom�tica de tabelas MyISAM escaralladas, tal e como se configura na opci�n de inicio do servidor --myisam-recover.';
$strMyISAMRecoverOptions = 'Modo de recuperaci�n autom�tica';
$strMyISAMRepairThreadsDesc = 'Se este valor � maior que 1, os �ndices das tabelas MyISAM cr�anse en paralelo (cada �ndice no seu propio f�o) durante o proceso Reparar ordenando.';
$strMyISAMRepairThreads = 'Reparar os f�os';
$strMyISAMSortBufferSizeDesc = 'Cantidade de memoria intermedia que se reserva ao ordenar os �ndices MyISAM durante unha instruci�n REPAIR TABLE ou ao crear �ndices con CREATE INDEX ou ALTER TABLE.';
$strMyISAMSortBufferSize = 'Tama�o da memoria intermedia de ordenaci�n';
$strMySQLCharset = 'C�digo de caracteres (Charset) MySQL';
$strMysqlClientVersion = 'Versi�n do cliente de MySQL';
$strMySQLConnectionCollation = 'Codificaci�n de caracteres (Collation) da conexi�n de MySQL';
$strMysqlLibDiffersServerVersion = 'A versión %s da súa libraría de PHP MySQL difire da versión %s do seu servidor de MySQL. Isto pode ocasionar un comportamento impredicíbel.';
$strMySQLSaid = 'Mensaxes do MySQL: ';
$strMySQLShowProcess = 'Mostrar os procesos';
$strMySQLShowStatus = 'Mostrar informaci�n de tempo de execuci�n do MySQL';
$strMySQLShowVars = 'Mostrar as vari�beis de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Seguinte';
$strNoActivity = 'Non se rexistrou actividade algunha desde hai %s segundos ou m�is. Ter� que entrar de novo';
$strNoDatabases = 'Non hai nengunha base de datos';
$strNoDatabasesSelected = 'Non hai nengunha base de datos seleccionada.';
$strNoDataReceived = 'Non se recibiron datos para importar. Ou ben non se enviou o ficheiro ou ben o seu tama�o excede o m�ximo permitido pola s�a configuraci�n de PHP. Consulte FAQ 1.16.';
$strNoDescription = 'sen descrici�n';
$strNoDetailsForEngine = 'Non se conta con informaci�n de estado detallada sobre este motor de armacenamento.';
$strNoDropDatabases = 'Os comandos "Eliminar a base de datos" non est�n permitidos.';
$strNoExplain = 'Saltar a explicacion de SQL';
$strNoFilesFoundInZip = 'Non se atoparon ficheiros dentro do arquivo ZIP!';
$strNoFrames = 'phpMyAdmin usa-se mellor cun navegador que <b>acepte molduras</b>.';
$strNoIndex = 'Non se definiu un �ndice';
$strNoIndexPartsDefined = 'Non se definiron partes do �ndice';
$strNoModification = 'Sen cambios';
$strNone = 'Nengun';
$strNo = 'Non';
$strNoOptions = 'Este formato non ten opci�ns';
$strNoPassword = 'Sen Contrasinal';
$strNoPermission = 'O servidor web non ten permiso para gardar o ficheiro %s.';
$strNoPhp = 'sen c�digo PHP';
$strNoPrivileges = 'Sen Privilexios';
$strNoRights = 'Non ten direitos suficientes para estar aqu� agora!';
$strNoRowsSelected = 'Non hai fileiras seleccionadas';
$strNoSpace = 'Non hai espacio para gardar o ficheiro %s.';
$strNoTablesFound = 'Non se achou nengunha tabela na base de datos';
$strNoThemeSupport = 'Non ten a funcionalidade dos temas. Comprobe a configuraci�n e/ou os seus temas no directorio %s.';
$strNotNumber = 'Non � un n�mero!';
$strNotOK = 'non conforme';
$strNotSet = 'Non se atopou a tabela <b>%s</b>ou non se indicou en %s';
$strNoUsersFound = 'Non se achou nengun(s) usuario(s).';
$strNoValidateSQL = 'Saltarse a validacion de';
$strNull = 'Nulo';
$strNumberOfFields = 'N�mero de campos';
$strNumberOfTables = 'Número de tabelas';
$strNumSearchResultsInTable = '%s ocorrencias(s) dentro da tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> ocorrencia(s)';
$strNumTables = 'Tabelas';

$strOK = 'Conforme';
$strOpenDocumentSpreadsheet = 'Folla de c�lculo Open Document';
$strOpenDocumentText = 'Texto Open Document';
$strOpenNewWindow = 'Abrir unha xanela nova co phpMyAdmin';
$strOperations = 'Operaci�ns';
$strOperator = 'Operador';
$strOptimizeTable = 'Optimizar a tabela';
$strOptions = 'Opcións';
$strOr = 'ou';
$strOverhead = 'De m�is (Overhead)';
$strOverwriteExisting = 'Eliminar o(s) ficheiro(s) xa existente(s)';

$strPageNumber = 'N�mero de p�xina:';
$strPagesToBeFlushed = 'P�xinas que se eliminar�n';
$strPaperSize = 'Tama?o do papel';
$strPartialImport = 'Importaci�n parcial';
$strPartialText = 'Textos parciais';
$strPasswordChanged = 'Modificou-se sen problemas o contrasinal de %s.';
$strPassword = 'Contrasinal';
$strPasswordEmpty = 'O contrasinal est� vac�o!';
$strPasswordHashing = 'Hash do contrasinal';
$strPasswordNotSame = 'Os contrasinais non son os mesmos!';
$strPdfDbSchema = 'Esquema da base de datos "%s" - P�xina %s';
$strPdfInvalidTblName = 'Non existe a tabela "%s".';
$strPdfNoTables = 'Sen tabelas';
$strPDF = 'PDF';
$strPDFReportExplanation = '(Xera un informe que cont�n os datos dunha �nica tabela)';
$strPDFReportTitle = 'T�tulo do informe';
$strPerHour = 'por hora';
$strPerMinute = 'por minuto';
$strPerSecond = 'por segundo';
$strPersian = 'Persa';
$strPhoneBook = 'directorio telefónico';
$strPHP40203 = 'Est� a usar PHP 4.2.3, que cont�n un erro importante relacionado coas cadeas multi-byte (mbstring). Consulte o informe de erros n�mero 19404. Non se recomenda usar esta versi�n do PHP co phpMyAdmin.';
$strPhp = 'Crear c�digo PHP';
$strPHPVersion = 'Versi�n do PHP';
$strPleaseSelectPrimaryOrUniqueKey = 'Escolla a chave primaria ou unha chave única';
$strPmaDocumentation = 'Documentaci�n do phpMyAdmin';
$strPmaUriError = 'A directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DEBE estar asignada no seu ficheiro de configuraci�n.';
$strPmaWiki = 'wiki do phpMyAdmin';
$strPolish = 'Polon�s';
$strPortrait = 'Vertical';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimaryKeyHasBeenDropped = 'Eliminouse a chave primaria';
$strPrimaryKeyName = 'O nome da chave primaria debe ser... PRIMARIA';
$strPrimaryKeyWarning = '("PRIMARIA" <b>debe</b> ser o nome de e <b>s� de</b> unha chave primaria)';
$strPrimary = 'Primaria';
$strPrint = 'Imprimir';
$strPrintViewFull = 'Vista previa da impresi�n (con textos completos)';
$strPrintView = 'Visualizaci�n previa da impresi�n';
$strPrivDescAllPrivileges = 'Inclue todos os privilexios a excepci�n de GRANT (Conceder).';
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
$strPrivDescExecute = 'Permite facer correr procedimentos armacenados. Non funciona nesta versi�n do MySQL.';
$strPrivDescFile = 'Permite importar e exportar datos desde e para ficheiros.';
$strPrivDescGrant = 'Permite acrescentar usuarios e privilexios sen recarregar as tabelas de privilexios.';
$strPrivDescIndex = 'Permite crear e eliminar �ndices.';
$strPrivDescInsert = 'Permite inserir e substituir datos.';
$strPrivDescLockTables = 'Permite bloquear tabelas do f�o en uso';
$strPrivDescMaxConnections = 'Limita o n�mero de conexi�ns novas por hora que pode abrir un usuario.';
$strPrivDescMaxQuestions = 'Limita o n�mero de procuras por hora que pode enviar un usuario.';
$strPrivDescMaxUpdates = 'Limita o n�mero de comandos que modifiquen unha tabela ou database por hora que pode executar un usuario.';
$strPrivDescMaxUserConnections = 'Limita o n�mero de conexi�ns simult�neas que pode ter o utilizador.';
$strPrivDescProcess3 = 'Permite matar procesos pertencentes a outros usuarios.';
$strPrivDescProcess4 = 'Permite ver as procuras completas na listaxe de procesos.';
$strPrivDescReferences = 'Non funciona nesta versi�n do MySQL.';
$strPrivDescReload = 'Permite recarregar a configuraci�n do servidor e limpar a s�a cach�.';
$strPrivDescReplClient = 'Permite-lle ao usuario perguntar onde est�n os escravos e os masters.';
$strPrivDescReplSlave = 'Necesario para os escravos de replicaci�n.';
$strPrivDescSelect = 'Permite gravar datos.';
$strPrivDescShowDb = 'Permite acceder � listaxe de bases de datos completa';
$strPrivDescShowView = 'Permite realizar consultas SHOW CREATE VIEW.';
$strPrivDescShutdown = 'Permite apagar o servidor.';
$strPrivDescSuper = 'Permite conexi�ns, mesmo chegado ao n�mero m�ximo de conexi�ns. Ven requerido para a maior�a das operaci�n administraci�ns, como configurar as vari�beis globais ou matar os f�os doutros usuarios.';
$strPrivDescUpdate = 'Permite modificar datos.';
$strPrivDescUsage = 'Sen privilexios.';
$strPrivileges = 'Privilexios';
$strPrivilegesReloaded = 'Non houbo problemas ao recarregar os privilexios.';
$strProcedures = 'Procedementos';
$strProcesses = 'Procesos';
$strProcesslist = 'Listaxe dos procesos';
$strProtocolVersion = 'Versi�n do protocolo';
$strPutColNames = 'P�r os nomes dos campos na primeira fileira';

$strQBEDel = 'Eliminar';
$strQBEIns = 'Inserir';
$strQBE = 'Procurar cun exemplo';
$strQueryCache = 'cach� de procuras';
$strQueryFrame = 'Xanela de procuras';
$strQueryOnDb = 'Procura tipo SQL na base de datos <b>%s</b>:';
$strQueryResultsOperations = 'Operaci�ns de resultados da procura';
$strQuerySQLHistory = 'Historial de SQL';
$strQueryStatistics = '<b>Estat�stica das procuras</b>: Desde que se iniciou, envi�ronselle ao servidor %s procuras.';
$strQueryTime = 'A pesquisa levou %01.4f segundos';
$strQueryType = 'Tipo de procura';
$strQueryWindowLock = 'Non escreber sobre esta procura desde fora da xanela';

$strReadRequests = 'Petici�ns de lectura';
$strReceived = 'Recibido';
$strRecommended = 'recomendado';
$strRecords = 'Rexistros';
$strReferentialIntegrity = 'Comprobar a integridade das referencias:';
$strRefresh = 'Refrescar';
$strRelationalSchema = 'Relational schema';
$strRelationDeleted = 'Eliminouse a relación';
$strRelationNotWorking = 'Desactivouse a funcionalidade adicional para o traballo con tabelas vinculadas. Para saber o por que, faga click%saqu&iacute;%s.';
$strRelationsForTable = 'RELACI�NS PARA A TABELA';
$strRelations = 'Relaci�ns';
$strRelationView = 'Vista das relaci�ns';
$strReloadingThePrivileges = 'A recarregar os privilexios';
$strReloadPrivileges = 'Volver a carregar os privilexios';
$strReload = 'Recarregar';
$strRemoveSelectedUsers = 'Eliminar os usuarios seleccionados';
$strRenameDatabaseOK = 'Mudou-se-lle o nome � base de datos %s para %s';
$strRenameTableOK = 'A tabela \$table renomeouse para \$new_name';
$strRenameTable = 'Renomear a tabela para';
$strRepairTable = 'Reparar a tabela';
$strReplaceNULLBy = 'Substituir NULL por ';
$strReplaceTable = 'Substituir os datos da tabela polos do ficheiro';
$strReplication = 'Replicaci�n';
$strReset = 'Reiniciar';
$strResourceLimits = 'Limites de recursos';
$strRestartInsertion = 'Reiniciar inserción con %s fileiras';
$strReType = 'Reescreber';
$strRevokeAndDeleteDescr = 'Os usuarios ter�n ainda o privilexio USAGE at� que se recarreguen os privilexios.';
$strRevokeAndDelete = 'Retirar-lles todos os privilexios activos aos usuarios e elimin�-los a continuaci�n.';
$strRevokeMessage = 'Retirou-lle os privilexios a %s';
$strRevoke = 'Revogar';
$strRomanian = 'Romeno';
$strRoutineReturnType = 'Tipo de retorno';
$strRoutines = 'Rutinas';
$strRowLength = 'Lonxitude da fileira';
$strRows = 'Fileiras';
$strRowsFrom = 'fileiras, a comezar da';
$strRowSize = ' Tama�o da fileira ';
$strRowsModeFlippedHorizontal = 'horizontal (cabezallos rotados)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en modo %s e repetir os cabezallos de cada %s celas';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estat�sticas da Fileira';
$strRunning = 'a rodar no servidor %s';
$strRunQuery = 'Enviar esta procura';
$strRunSQLQuery = 'Efectuar unha procura SQL na base de datos %s';
$strRunSQLQueryOnServer = 'Executar procura/s SQL no servidor %s';
$strRussian = 'Ruso';

$strSave = 'Gardar';
$strSaveOnServer = 'Gardar no servidor no directorio %s';
$strSavePosition = 'Gardar a posición';
$strScaleFactorSmall = 'O factor de reducci�n � demasiado pequeno para que o esquema caiba nunha �nica p�xina';
$strSearchFormTitle = 'Procurar na base de datos';
$strSearchInTables = 'Dentro da(s) tabela(s):';
$strSearchNeedle = 'Palabras(s) ou valore(s) a procurar (o comod�n �: "%"):';
$strSearchOption1 = 'polo menos unha das palabras';
$strSearchOption2 = 'todas as palabras';
$strSearchOption3 = 'a frase exacta';
$strSearchOption4 = 'como expresi�n regular';
$strSearch = 'Procurar';
$strSearchResultsFor = 'Procurar os resultados para "<i>%s</i>" %s:';
$strSearchType = 'Atopar:';
$strSecretRequired = 'O ficheiro de configuraci�n agora necesita un contrasinal secreto (blowfish_secret).';
$strSelectADb = 'Seleccione unha base de dados';
$strSelectAll = 'Seleccionar todo';
$strSelectBinaryLog = 'Seleccione o ficheiro de rexistro binario que quer ver';
$strSelectFields = 'Seleccione os campos (m�nimo 1)';
$strSelectForeignKey = 'Escoller unha Chave Externa';
$strSelectNumRows = 'a procurar';
$strSelectReferencedKey = 'Seleccionar a chave referida';
$strSelectTables = 'Seleccionar tabelas';
$strSend = 'Enviar <i>(gravar nun ficheiro)</i><br />';
$strSent = 'Enviado';
$strServerChoice = 'Escolla de Servidor';
$strServerNotResponding = 'O servidor non est� a responder';
$strServer = 'Servidor';
$strServers = 'Servidores';
$strServerStatusDelayedInserts = 'Inserci�ns demoradas';
$strServerStatus = 'Informaci�n sobre o runtime';
$strServerStatusUptime = 'Este servidor de MySQL leva funcionando %s. Iniciouse �s %s.';
$strServerTabVariables = 'Vari�beis';
$strServerTrafficNotes = '<b>Tr�fico do servidor</b>: Estas tabelas mostran as estat�sticas do tr�fico da rede neste servidor de MySQL desde que se iniciou.';
$strServerVars = 'Vari�beis e configuraci�n do servidor';
$strServerVersion = 'Versi�n do servidor';
$strSessionStartupErrorGeneral = 'Non se pode iniciar sesión sen erros. Comproble os erros que aparecen no ficheiro de rexistro do seu servidor de PHP ou web e cofnigure a súa instalación PHP adecuadamente.';
$strSessionValue = 'Valor da sesi�n';
$strSetEnumVal = 'Se o tipo de campo � "enum" ou "set", introduza os valores usando este formato: \'a\',\'b\',\'c\'...<br />Se precisar p�r unha barra invertida (" \ ") ou aspas simples (" \' ") entre estes valores, preceda a barra e as aspas de barras invertidas (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShowAll = 'Ver todos os rexistros';
$strShowColor = 'Mostrar a cor';
$strShowDatadictAs = 'Formato do dicionario de datos';
$strShowFullQueries = 'Mostrar as procuras completas';
$strShowGrid = 'Mostrar a grella';
$strShowHideLeftMenu = 'Mostrar/Agochar o menú esquerdo';
$strShowingBookmark = 'A mostrar o marcador';
$strShowingPhp = 'Mostrar como código PHP';
$strShowingRecords = 'Mostrando rexistros ';
$strShowingSQL = 'Mostrar procura SQL';
$strShow = 'Mostrar';
$strShowOpenTables = 'Mostrar as tabelas abertas';
$strShowPHPInfo = 'Mostrar informaci�n sobre o PHP';
$strShowSlaveHosts = 'Mostrar os servidores escravos';
$strShowSlaveStatus = 'Mostrar o estado dos escravos';
$strShowStatusBinlog_cache_disk_useDescr = 'N�mero de transacci�ns que utilizaron o cach� do rexistro binario mais que excederon o valor de binlog_cache_size e utilizaron un ficheiro temporal para armacenar instruci�ns para a transacci�n.';
$strShowStatusBinlog_cache_useDescr = 'N�mero de transacci�ns que utilizaron o cach� do rexistro binario.';
$strShowStatusCreated_tmp_disk_tablesDescr = 'N�mero de tabelas temporais no disco creadas automaticamente polo servidor ao executar as instruci�ns. Se Created_tmp_disk_tables � grande, pode querer incrementar o valor de tmp_table_size para que as tabelas temporais se baseen na memoria en vez de no disco.';
$strShowStatusCreated_tmp_filesDescr = 'Cantos ficheiros temporais creou mysqld.';
$strShowStatusCreated_tmp_tablesDescr = 'N�mero de tabelas temporais na-memoria creadas automaticamente polo servidor ao executar instruci�ns.';
$strShowStatusDelayed_errorsDescr = 'N�mero de fileiras escritas con INSERT DELAYED que sofriron alg�n erro (probabelmente unha chave duplicada).';
$strShowStatusDelayed_insert_threadsDescr = 'N�mero de f�os de manipulaci�n INSERT DELAYED en uso. Cada tabela diferente na que se utiliza INSERT DELAYED recebe o seu propio f�o.';
$strShowStatusDelayed_writesDescr = 'N�mero de fileiras INSERT DELAYED escritas.';
$strShowStatusFlush_commandsDescr  = 'N�mero de instruci�ns FLUSH executadas.';
$strShowStatusHandler_commitDescr = 'N�mero de instruci�ns COMMIT internas.';
$strShowStatusHandler_deleteDescr = 'N�mero de veces que se eliminou unha fileira dunha tabela.';
$strShowStatusHandler_discoverDescr = 'O servidor de MySQL p�delle perguntar ao motor de armacenamento NDB Cluster se sabe dunha tabela cun nome dado. Isto ch�mase descobrimento. Handler_discovery indica o n�mero de veces que se descobriron tabelas.';
$strShowStatusHandler_read_firstDescr = 'N�mero de veces que se leu a primeira entrada dun �ndice. Se � alto, tam�n suxire que o servidor est� realizando un monte de de exames de �ndice completos; por exemplo, SELECT col FROM algo, supo�endo que col est� indexada.';
$strShowStatusHandler_read_keyDescr = 'N�mero de petici�ns para ler unha fileira baseadas nunha chave. Se � alto, � unha boa indicaci�n de que as procuras e tabelas est�n ben indexadas.';
$strShowStatusHandler_read_nextDescr = 'N�mero de petici�ns para ler a seguinte fileira na orde da chave. Isto increm�ntase se est� procurando unha columna de �ndice cunha limitaci�n de rango ou se est� a examinar un �ndice.';
$strShowStatusHandler_read_prevDescr = 'N�mero de petici�ns para ler a fileira anterior na orde da chave. Este m�todo de lectura util�zase sobre todo para optimizar ORDER BY ... DESC.';
$strShowStatusHandler_read_rndDescr = 'N�mero de petici�ns para ler unha fileira baseadas nunha posici�n fixa. Isto � alto se est� a realizar moitas procuras que requiren ordenar o resultado. Posibelmente ter� un monte de procuras que esixen que MySQL examine tabelas completas ou ten uni�ns que non usan as chaves apropiadamente.';
$strShowStatusHandler_read_rnd_nextDescr = 'N�mero de petici�ns para ler a seguinte fileira no ficheiro de datos. Isto � alto se est� a realizar moitos exames de tabelas. Normalmente suxire que as tabelas non est�n indexadas apropiadamente ou que as s�as procuras non est�n escritas para aproveitar os �ndices de que disp�n.';
$strShowStatusHandler_rollbackDescr = 'N�mero de instruci�ns de ROLLBACK interno.';
$strShowStatusHandler_updateDescr = 'N�mero de petici�ns para actualizar unha fileira nunha tabela.';
$strShowStatusHandler_writeDescr = 'N�mero de petici�ns para inserir un ficheiro nunha tabela.';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'N�mero de p�xinas que conte�en datos (suxos ou limpos).';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = 'N�mero de p�xinas actualmente suxas.';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'N�mero de p�xinas do buffer que se pediu que se limpasen.';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = 'N�mero de p�xinas libres.';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'N�mero de p�xinas con seguro no buffer InnoDB buffer. Estas p�xinas est�n actualmente a ser lidas ou escritas ou non se poden limpar ou eliminar por algunha outra raz�n.';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = 'O n�mero de p�xinas ocupadas porque se destinan a reserva administrativa, tais como bloqueos de fileiras ou o �ndice hash adaptativo. Este valor tam�n se pode calcular as�: Innodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_data.';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'Tama�o total do b�fer, en p�xinas.';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'N�mero de pr�-lecturas "aleatorias" iniciadas por InnoDB. Isto acontece cando unha procura vai examinar unha porci�n grande dunha tabela mais en orde aleatoria.';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'N�mero de pre-lecturas secuenciais iniciada por innoDB. Isto acontece cando InnoDB realiza un exame secuencial completo dunha tabela.';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'N�mero de petici�ns de lectura l�xicas feitas por InnoDB.';
$strShowStatusInnodb_buffer_pool_readsDescr = 'N�mero de lecturas l�xicas que InnoDB non puido satisfacer do b�fer e tivo que efectuar por medio de lecturas dunha �nica p�xina.';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = 'Normalmente, escr�bese no b�fer de InnoDB como tarefa de fondo. Por�n, de se precisar ler ou crear unha p�xina e non haber p�xinas limpas dispon�beis, hai que agardar a que se limpen. Este contador vai contando cantas veces hai que esperar. Se o tama�o do b�fer � o apropiado, este valor deber�a ser pequeno.';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'N�mero de veces que se escribiu no b�fer InnoDB.';
$strShowStatusInnodb_data_fsyncsDescr = 'N�mero de operaci�ns fsync() at� o momento.';
$strShowStatusInnodb_data_pending_fsyncsDescr = 'N�mero actual de operaci�ns fsync() pendentes.';
$strShowStatusInnodb_data_pending_readsDescr = 'N�mero actual de lecturas pendentes.';
$strShowStatusInnodb_data_pending_writesDescr = 'N�mero actual de escritas pendentes.';
$strShowStatusInnodb_data_readDescr = 'Cantidade de datos lida at� o momento, en bytes.';
$strShowStatusInnodb_data_readsDescr = 'N�mero total de lecturas de datos.';
$strShowStatusInnodb_data_writesDescr = 'N�mero total de escritas de datos.';
$strShowStatusInnodb_data_writtenDescr = 'Cantidade de datos escrita at� o momento, en bytes.';
$strShowStatusInnodb_dblwr_pages_writtenDescr = 'N�mero de escritas duplas realizadas e n�mero de p�xinas escritas con este prop�sito.';
$strShowStatusInnodb_dblwr_writesDescr = 'N�mero de escritas duplas realizadas e n�mero de p�xinas escritas con este prop�sito.';
$strShowStatusInnodb_log_waitsDescr = 'N�mero de esperas debidas a que o b�fer do rexistro � demasiado pequeno e houbo que agardar at� que se limpase para continuar.';
$strShowStatusInnodb_log_write_requestsDescr = 'N�mero de petici�ns de escrita no rexistro.';
$strShowStatusInnodb_log_writesDescr = 'N�mero de escritas f�sicas no ficheiro de rexistro.';
$strShowStatusInnodb_os_log_fsyncsDescr = 'N�mero de escritas fsyncss feitas no ficheiro de rexistro.';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = 'N�mero de fsyncs do ficheiro de rexistro pendentes.';
$strShowStatusInnodb_os_log_pending_writesDescr = 'Escritas no ficheiro de rexistro pendentes.';
$strShowStatusInnodb_os_log_writtenDescr = 'N�mero de bytes escritos no ficheiro de rexistro.';
$strShowStatusInnodb_pages_createdDescr = 'N�mero de p�xinas creadas.';
$strShowStatusInnodb_page_sizeDescr = 'O tama�o de p�xina InnoDB inclu�do (por omisi�n 16KB). Moitos valores c�ntanse en p�xinas: o tama�o da p�xina permite que se convirtan doadamente en bytes.';
$strShowStatusInnodb_pages_readDescr = 'N�mero de p�xinas lidas.';
$strShowStatusInnodb_pages_writtenDescr = 'N�mero de p�xinas escritas.';
$strShowStatusInnodb_row_lock_current_waitsDescr = 'N�mero de bloqueo de fileiras polos que se est� a aguardar agora mesmo.';
$strShowStatusInnodb_row_lock_time_avgDescr = 'Tempo que, de media, leva adquirir un bloqueo sobre unha fileira, en milisegundos.';
$strShowStatusInnodb_row_lock_timeDescr = 'Tempo total empregado na adquisici�n de bloqueos sobre as fileiras, en milisegundos.';
$strShowStatusInnodb_row_lock_time_maxDescr = 'Tempo m�ximo en adquirir un bloqueo de fileira, en milisegundos.';
$strShowStatusInnodb_row_lock_waitsDescr = 'N�mero de veces que houbo que agardar polo bloqueo dunha fileira.';
$strShowStatusInnodb_rows_deletedDescr = 'N�mero de fileiras eliminadas das tabelas InnoDB.';
$strShowStatusInnodb_rows_insertedDescr = 'N�mero de fileiras inseridas nas tabelas InnoDB.';
$strShowStatusInnodb_rows_readDescr = 'N�mero de fileiras lidas das tabelas InnoDB.';
$strShowStatusInnodb_rows_updatedDescr = 'N�mero de fileiras actualizadas en tabelas InnoDB.';
$strShowStatusKey_blocks_not_flushedDescr = 'N�mero de bloques chave na cach� de chaves que se mudaron mais que ainda non se limparon para o disco. Antes era Not_flushed_key_blocks.';
$strShowStatusKey_blocks_unusedDescr = 'N�mero de bloques sen utilizar na cach� de chaves. Pode utilizar este valor para determinar canta cach� de chave est� en uso.';
$strShowStatusKey_blocks_usedDescr = 'N�mero de bloques utilizados na cach� de chaves. Este valor � unha referencia superior que indica o n�mero m�ximo de bloques que se te�en empregado.';
$strShowStatusKey_read_requestsDescr = 'N�mero de petici�ns para ler un bloque chave da cach�.';
$strShowStatusKey_readsDescr = 'N�mero de lecturas f�sicas dun bloque chave desde o disco. Se key_reads � grande, ent�n o valor de key_fuffer_size � posibelmente demasiado baixo. A relaci�n de perdas da cach� p�dese calcular as�: Key_reads/Key_read_requests.';
$strShowStatusKey_write_requestsDescr = 'N�mero de petici�ns para escribir un bloque chave na cach�.';
$strShowStatusKey_writesDescr = 'N�mero de escritas f�sicas dun bloque chave no disco.';
$strShowStatusLast_query_costDescr = 'Custo total da �ltima procura compilada tal e como se computa mediante o optimizador de procuras. Resulta �til para comparar o custo de planos de procura diferentes para a mesma pesquisa. O valor por omisi�n � 0, que significa que ainda non se compilou nengunha procura.';
$strShowStatusNot_flushed_delayed_rowsDescr = 'N�mero de procuras que est�n a agardar para seren escritas nas filas INSERT DELAYED.';
$strShowStatusOpened_tablesDescr = 'N�mero de tabelas abertas en total. Se a cantidade � grande, o valor da cach� de tabelas posibelmente � demasiado pequeno.';
$strShowStatusOpen_filesDescr = 'N�mero de ficheiros abertos.';
$strShowStatusOpen_streamsDescr = 'N�mero de fluxos abertos (utilizado principalmente para o rexistro).';
$strShowStatusOpen_tablesDescr = 'N�mero de tabelas abertas.';
$strShowStatusQcache_free_blocksDescr = 'N�mero de bloques de memoria libres na cach� de procuras.';
$strShowStatusQcache_free_memoryDescr = 'Cantidade de memoria libre para a cach� de procuras.';
$strShowStatusQcache_hitsDescr = 'N�mero de impactos na cach�.';
$strShowStatusQcache_insertsDescr = 'N�mero de procuras adicionadas � cach�.';
$strShowStatusQcache_lowmem_prunesDescr = 'N�mero de procuras eliminadas da cach� para liberar memoria para deixar a cach� para procuras novas. Esta informaci�n pode axudar a afinar o tama�o da cach� de procuras. A cach� de procuras utiliza unha estratexia de utilizado menos recentemente (LRU) para decidir que procuras debe eliminar da cach�.';
$strShowStatusQcache_not_cachedDescr = 'N�mero de procuras non enviadas � cach� (que non se poden enviar, debido � configuraci�n de query_cache_type).';
$strShowStatusQcache_queries_in_cacheDescr = 'N�mero de procuras rexistradas na cach�.';
$strShowStatusQcache_total_blocksDescr = 'N�mero total de bloques na cach� de procuras.';
$strShowStatusReset = 'Reiniciar';
$strShowStatusRpl_statusDescr = 'Estado da replicaci�n en modo seguro (ainda non realizado).';
$strShowStatusSelect_full_joinDescr = 'N�mero de uni�ns que non utilizan �ndices. Se este valor non � 0, deber�a comprobar con atenci�n os �ndices das tabelas.';
$strShowStatusSelect_full_range_joinDescr = 'N�mero de uni�ns que utilizaron un rango de procura nunha tabela de referencia.';
$strShowStatusSelect_range_checkDescr = 'N�mero de uni�ns de chaves que comproban a utilizaci�n de chaves despois de cada fileira (se non � 0, deber�a comprobar con atenci�n os �ndices das tabelas).';
$strShowStatusSelect_rangeDescr = 'N�mero de uni�ns que utilizaron rangos na primeira tabela (Normalmente non � grave mesmo de ser grande)';
$strShowStatusSelect_scanDescr = 'N�mero de uni�ns que realizaron un exame completo da primeira tabela.';
$strShowStatusSlave_open_temp_tablesDescr = 'N�mero de tabelas temporais actualmente abertas polo f�o SQL escravo.';
$strShowStatusSlave_retried_transactionsDescr = 'N�mero total de veces (desde o inicio) que o f�o de replicaci�n SQL escravo reintentou as transacci�ns.';
$strShowStatusSlave_runningDescr = 'Isto est� ON se este servidor � un escravo conectado a un m�ster.';
$strShowStatusSlow_launch_threadsDescr = 'N�mero de f�os aos que lles levou crearse m�is de slow_launch_time segundos.';
$strShowStatusSlow_queriesDescr = 'N�mero de procuras �s que lles levou m�is de long_query_time segundos.';
$strShowStatusSort_merge_passesDescr = 'N�mero de pasaxes de fusi�n que tivo que facer o algoritmo de ordenaci�n. Se este valor � grande, deber�a considerar incrementar o valor da vari�bel de sistema sort_buffer_size.';
$strShowStatusSort_rangeDescr = 'N�mero de ordenaci�ns feitas con rangos.';
$strShowStatusSort_rowsDescr = 'N�mero de fileiras ordenadas.';
$strShowStatusSort_scanDescr = 'N�mero de ordenaci�ns realizadas examinando a tabela.';
$strShowStatusTable_locks_immediateDescr = 'N�mero de veces que se adquiriu inmediatamente un bloqueo de tabela.';
$strShowStatusTable_locks_waitedDescr = 'N�mero de veces que non se puido adquirir inmediatamente un bloqueo de tabela e houbo que agardar. De ser alto e ter observado problemas no desempe�o, deber�a en primeiro lugar mellorar as procuras e despois, ora partir a tabela ou tabelas, ora utilizar replicaci�n.';
$strShowStatusThreads_cachedDescr = 'N�mero de f�os na cach� de f�os. A relaci�n de impactos da cach� p�dese calcular como Threads_created/Connections. Se este valor � vermello deber�a aumentar a thread_cache_size.';
$strShowStatusThreads_connectedDescr = 'N�mero de conexi�ns abertas neste momento.';
$strShowStatusThreads_createdDescr = 'N�mero de f�os creados para xerir as conexi�ns. De ser Threads_created grande, pode querer aumentar o valor de thread_cache_size. (Normalmente isto non fornece unha mellora not�bel no desempe�o se ten unha boa implementaci�n de f�os.)';
$strShowStatusThreads_runningDescr = 'N�mero de f�os que non est�n a durmir.';
$strShowTableDimension = 'Mostrar a dimensi�n das tabelas';
$strShowTables = 'Mostrar as tabelas';
$strShowThisQuery = ' Mostrar esta procura aqu� outra vez ';
$strSimplifiedChinese = 'Chin�s simplificado';
$strSingly = 'a refacer logo de inserci�ns e destruci�ns (shingly)';
$strSize = 'Tama�o';
$strSkipQueries = 'N�mero de rexistros (procuras) a saltar desde o inicio';
$strSlovak = 'Eslovaco';
$strSlovenian = 'Esloveno';
$strSmallBigAll = 'Todo Grande/Pequeno';
$strSnapToGrid = 'Axustar á grella';
$strSocketProblem = '(ou o soquete local do servidor de MySQL non se configurou correctamente)';
$strSortByKey = 'Ordenar pola chave';
$strSorting = 'Ordenaci�n';
$strSort = 'Ordenar';
$strSpaceUsage = 'Uso do espazo';
$strSpanish = 'Espa�ol';
$strSplitWordsWithSpace = 'As palabras div�dense cun car�cter de espazo (" ").';
$strSQLCompatibility = 'Modo de compatiblidade SQL';
$strSQLExportType = 'Tipo de exportaci�n';
$strSQLParserBugMessage = 'Cabe a posibilidade de que atopase un erro no procesador de SQL. Examine a s�a pesquisa con atenci�n e comprobe que as aspas son correctas e que cada un ten o seu par. Outras causas pos�beis ser�an que tentase enviar un ficheiro con binario fora dunha �rea de texto entre aspas. Tam�n pode tentar facer a s�a pesquisa na li�a de comandos do MySQL. A mensaxe de erro que lle env�a o servidor de MySQL, e que aparece m�is abaixo (de habela), tam�n o pode axudar a diagnosticar o problema. Se persisten os erros ou se o procesador falla cando mesmo a li�a de comandos vai ben,reduza o texto da pesquisa � parte concreta que produce o erro e env�e unha mensaxe de erro co texto da secci�n RECORTE que aparece a continuaci�n:';
$strSQLParserUserError = 'Parece que houbo un problema na s�a pesquisa en SQL. Se m�is abaixo aparece unha mensaxe de erro do servidor de MySQL, isto pode axudar a diagnosticar o problema';
$strSQLQuery = 'comando SQL';
$strSQLResult = 'Resultado SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'O identificador non � v�lido';
$strSQPBugUnclosedQuote = 'Falta p�r a aspa final';
$strSQPBugUnknownPunctuation = 'Hai unha secuencia de puntuaci�n que resulta desco�ecida';
$strStandInStructureForView = 'Estrutura existente para a vista';
$strStatCheckTime = 'Comprobaci�n m�is recente';
$strStatCreateTime = 'Creaci�n';
$strStatement = 'Informaci�ns';
$strStatisticsOverrun = 'Nun servidor ocupado, os contadores de bytes poden sobrecarregarse, de maneria que esas estat�sticas, tal e como as transmite o servidor de MySQL, poden resultar incorrectas.';
$strStatUpdateTime = 'Actualizaci�n m�is recente';
$strStatus = 'Estado';
$strStorageEngine = 'Motor de armacenamento';
$strStorageEngines = 'Motores de armacenamento';
$strStrucCSV = 'Datos CSV';
$strStrucData = 'Estrutura e datos';
$strStrucExcelCSV = 'CSV (para datos de MS Excel)';
$strStrucNativeExcel = 'Datos nativos de MS Excel';
$strStrucOnly = 'S� a estrutura';
$strStructPropose = 'Propor unha estrutura para a tabela';
$strStructure = 'Estrutura';
$strStructureForView = 'Estrutura para a vista';
$strSubmit = 'Submeter';
$strSuccess = 'O seu comando de SQL executou-se com �xito';
$strSum = 'Suma';
$strSwedish = 'Sueco';
$strSwitchToDatabase = 'Pasar � base de datos copiada';
$strSwitchToTable = 'Ir � tabela copiada';

$strTableAlreadyExists = 'A tabela %s xa existe!!';
$strTableComments = 'Comentarios da tabela';
$strTableEmpty = 'O nome da tabela est� vac�o!';
$strTableHasBeenDropped = 'Eliminouse a tabela %s';
$strTableHasBeenEmptied = 'Vaciouse a tabela %s';
$strTableHasBeenFlushed = 'Fechouse a tabela %s';
$strTableIsEmpty = 'Parece ser que a tabela está baleira!';
$strTableMaintenance = 'Tabela de manutenci�n';
$strTableName = 'Nome da tabela';
$strTableOfContents = '�ndice';
$strTableOptions = 'Opci�ns de tabela';
$strTables = '%s tabela(s)';
$strTableStructure = 'Estrutura da tabela';
$strTable = 'Tabela';
$strTakeIt = 'colle-o';
$strTblPrivileges = 'Privilexios proprios de tabela';
$strTempData = 'Datos temporais';
$strTextAreaLength = ' Por causa da sua lonxitude,<br /> este campo pode non ser edit�bel ';
$strThai = 'Tailand�s';
$strThemeDefaultNotFound = 'Non se atopou o tema por omisi�n %s!';
$strThemeNoPreviewAvailable = 'Non se disp�n de ante-visi�n.';
$strThemeNotFound = 'Non se atopou o tema %s!';
$strThemeNoValidImgPath = 'Non hai unha rota v�lida de imaxe para o tema %s!';
$strThemePathNotFound = 'Non se atopou a rota do tema para o tema %s!';
$strTheme = 'Tema / Estilo';
$strThisHost = 'Este servidor';
$strThreads = 'F�os';
$strThreadSuccessfullyKilled = 'Finalizouse o f�o %s.';
$strTimeoutInfo = 'A importaci�n anterior excedeu do tempo permitido; unha vez reiniciada continuar� desde a posici�n %d.';
$strTimeoutNothingParsed = 'Por�n, na �ltima executaci�n non se examinou nada de datos, o que normalmente significa que o phpMyAdmin non poder� rematar esta importaci�n a non ser que lle incrementen os limites de tempo de php.';
$strTimeoutPassed = 'Ultrapasouse o tempo de espera do gui�n. Se quer rematar a importaci�n, volva a enviar o mesmo ficheiro e a importaci�n continuar�.';
$strTime = 'Tempo';
$strToFromPage = 'até/desde páxina';
$strToggleScratchboard = 'conmutar o borrador';
$strToggleSmallBig = 'Alternar pequeno/grande';
$strToSelectRelation = 'Para seleccionar unha relación, clique:';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Chin�s tradicional';
$strTraditionalSpanish = 'Espa�ol tradicional';
$strTraffic = 'Tr�fico';
$strTransactionCoordinator = 'Coordinador da transacci�n';
$strTransformation_application_octetstream__download = 'Mostrar un v�nculo para baixar os datos binarios dun campo. A primeira opci�n � o nome do ficheiro binario. A segunda � un nome pos�bel para o campo dunha fileira de tabela que conte�a o nome do ficheiro. Se pretende seleccionar a segunda opci�n, a primeira deber� conter s� unha cadea vacia';
$strTransformation_application_octetstream__hex = 'Mostra unha representaci�n hexadecimal dos datos. O primeiro par�metro, opcional, especifica con que frecuencia se engadir� espazo (por omisi�n, 2 nibbles).';
$strTransformation_image_jpeg__inline = 'Mostra unha imaxe reducida vincul�bel. Opci�ns: anchura,altura en p�xeles (mant�n a proporci�n orixinal)';
$strTransformation_image_jpeg__link = 'Mostra un v�nculo a esta imaxe (ou sexa, baixada directa de blob).';
$strTransformation_image_png__inline = 'Ver image/jpeg: na li�a';
$strTransformation_text_plain__dateformat = 'Mostra un campo coa hora e data numérica de unix TIME, TIMESTAMP, DATETIME como hora e data con formato. A primeira opción é a diferenza (en horas) que se engadirá á hora ou data (Por omisión:0). Use a segunda opción para especificar unha cadea de formato de data/hora diferente. A terceira opción determina se quere ver a hora local ou a UTC (empregue as cadeas "local" ou "utc") para iso. Segundo isto, o formato de data ten un valor diferente - para "local" vexa a documentación acerca da función PHP\'s strftime() e para "utc" faise empregando a función gmdate().';
$strTransformation_text_plain__external = 'S� EN LINUX: In�cia unha aplicaci�n externa e envia-lle o campo de datos por meio do input padr�n.  Devolve a sa�da padr�n da aplicaci�n. Por omisi�n � Tidy, para que resulte c�digo HTML claro. Por raz�ns de seguranza, ten que editar manualmente o ficheiro libraries/transformations/text_plain__external.inc.php e inserir as ferramentas que quer permitir que funcionen. A primeira opci�n, polo tanto, � o n�mero do programa que quer usar e a segunda opci�n son os par�metros do programa. O terceiro par�metro, se � 1, usar� htmlspecialchars() para convertir a sa�da (Por omisi�n � 1). Un cuarto par�metro, se � 1, por� un NOWRAP na cela de contidos para que toda a sa�da se mostre sen reformatar (Por omisi�n � 1)';
$strTransformation_text_plain__formatted = 'Mant�n o formato orixinal do campo. Non hai Escape.';
$strTransformation_text_plain__imagelink = 'Mostra unha imaxe e un v�nculo; o campo conte o nome do ficheiro. A primeira opci�n � un prefixo do tipo "http://domain.com/"; a segunda opci�n � o ancho en p�xeles; a terceira � a altura.';
$strTransformation_text_plain__link = 'Mostra un v�nculo; o campo cont�n o nome do ficheiro. A primeira opci�n � un prefixo do tipo "http://domain.com/"; a segunda opci�n � un t�tulo para o v�nculo.';
$strTransformation_text_plain__sql = 'Formata texto como procura SQL e resalta a sintaxe.';
$strTransformation_text_plain__substr = 'S� mostra parte dunha cadea. A primeira opci�n � unha distancia para definir onde comeza a sa�da de texto (por omisi�n, 0). A segunda opci�n � unha distancia cando texto se devolve. Se � vacio, volve todo o texto que resta. A terceira opci�n define que caracteres se engadir�n � sa�da cando se devolve unha subcadea (Por omisi�n: ...).';
$strTriggers = 'Lanza';
$strTruncateQueries = 'Interrumpir as procuras mostradas';
$strTurkish = 'Turco';
$strType = 'Tipo';

$strUkrainian = 'Ucraniano';
$strUncheckAll = 'Quitar-lles as marcas a todos';
$strUnicode = 'Unicode';
$strUnique = '�nico';
$strUnknown = 'desco�ecido';
$strUnselectAll = 'Non seleccionar nada';
$strUnsupportedCompressionDetected = 'Tentou carregar un ficheiro cunha compresi�n desco�ecida (%s). Ora non se sabe como descomprimir, ora est� desactivada na configuraci�n.';
$strUpdatePrivMessage = 'Acaba de actualizar os privilexios de %s.';
$strUpdateProfileMessage = 'Actualizouse o perfil.';
$strUpdateQuery = 'Actualizar a procura';
$strUpdComTab = 'Consulte a Documentaci�n para saber como actualizar a tabela Column_comments';
$strUpgrade = 'Deberia actualizar a %s %s ou posterior.';
$strUploadErrorCantWrite = 'Non se puido escribir no disco.';
$strUploadErrorExtension = 'Detívose o envío do ficheiro por causa da extensión.';
$strUploadErrorFormSize = 'O tamaño do ficheiro excede a directiva MAX_FILE_SIZE que se especificou no formulario HTML.';
$strUploadErrorIniSize = 'O tamaño do ficheiro enviado excede a directiva upload_max_filesize de php.ini.';
$strUploadErrorNoTempDir = 'Falta un directorio temporal.';
$strUploadErrorPartial = 'O ficheiro enviado só se recibiu parcialmente.';
$strUploadErrorUnknown = 'Erro descoñecido ao enviar o ficheiro.';
$strUploadLimit = 'Posibelmente tentou enviar un ficheiro demasiado grande. Consulte a %sdocumentaci�n%s para averiguar como evitar este limite.';
$strUploadsNotAllowed = 'Este servidor non admite a subida de ficheiros.';
$strUsage = 'Uso';
$strUseBackquotes = 'Protexer os nomes das tabelas e dos campos con&nbsp;" ` "';
$strUsedPhpExtensions = 'Extensi�ns de PHP utilizadas';
$strUseHostTable = 'Usar a tabela de Host';
$strUserAlreadyExists = 'O usuario %s xa existe';
$strUserEmpty = 'O nome do usuario est� vac�o!';
$strUserName = 'Nome do usuario';
$strUserNotFound = 'Non se atopou o usuario seleccionado na tabela de privilexios.';
$strUserOverview = 'Vista xeral dos usuarios';
$strUsersDeleted = 'Os usuarios seleccionados elimin�ron-se sen problemas.';
$strUsersHavingAccessToDb = 'Utilizadores que te�en acceso a &quot;%s&quot;';
$strUser = 'Usuario';
$strUseTabKey = 'Use a tecla do tabulador para moverse de valor en valor ou a tecla CONTROL combinada cunha flecha para moverse a calquer sitio';
$strUseTables = 'Usar as tabelas';
$strUseTextField = 'Use campo de texto';
$strUseThisValue = 'Usar este valor';

$strValidateSQL = 'Validar SQL';
$strValidatorError = 'Non foi pos�bel iniciar o comprobador de SQL. Comprobe que ten instaladas todas as extensi�ns de php tal e como se descrebe na %sdocumentaci�n%s.';
$strValue = 'Valor';
$strVar = 'Vari�bel';
$strVersionInformation = 'Informaci�n sobre a versi�n';
$strViewDumpDatabases = 'Ver o volcado das bases de datos';
$strViewDumpDB = 'Ver o esquema do volcado da base de datos';
$strViewDump = 'Ver o esquema do volcado da tabela';
$strViewHasBeenDropped = 'Deixouse a vista %s';
$strViewMaxExactCount = 'Esta vista ten m�is de %s fileiras. Consulte a %sdocumentaci�n%.';
$strViewName = 'Nome da VISTA';
$strView = 'Vista';

$strWebServerUploadDirectory = 'directorio de subida (upload) do servidor web';
$strWebServerUploadDirectoryError = 'Non se pode acceder ao directorio que designou para as subidas (upload)';
$strWelcome = 'Benvida/o a %s';
$strWestEuropean = 'Europeu ocidental';
$strWildcard = 'comod�n';
$strWindowNotFound = 'Non se puido modificar a xanela de destino do navegador. Talvez porque fechou a xanela da que depende ou porque o seu navegador est� a bloquear as actualizaci�ns entre xanelas xa que asi o pediu na configuraci�n de seguranza do navegador.';
$strWithChecked = 'Todos os marcados';
$strWriteRequests = 'Petici�ns de escrita';
$strWrongUser = 'Usuario ou contrasinal errado. Acceso negado.';

$strXML = 'XML';

$strYes = 'Si';

$strZeroRemovesTheLimit = 'Nota: Se estas opci�ns se configuran como 0 (cero) elimina-se o limite.';
$strZip = 'comprimido no formato "zip"';

$strProfiling = 'Profiling';  //to translate
$strSuhosin = 'Server running with Suhosin. Please refer to %sdocumentation%s for possible issues.';  //to translate
?>

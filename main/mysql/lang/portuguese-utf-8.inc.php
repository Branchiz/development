<?php
/* $Id: portuguese-utf-8.inc.php 11113 2008-02-09 16:09:54Z lem9 $ */

/**
 * Portuguese language file by
 *   Lopo Pizarro <lopopizarro@users.sourceforge.net>
 *   António Raposo <cfmsoft@users.sourceforge.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$mysql_4_1_doc_lang = 'pt';

$day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d-%B-%Y às %H:%M';

$timespanfmt = '%s dias, %s horas, %s minutos e %s segundos';

$strAbortedClients = 'Abortado';
$strAccessDenied = 'Acesso Negado';
$strAccessDeniedExplanation = 'O phpMyAdmin tentou ligar-se ao servidor MySQL, e o servidor rejeitou a ligação. Verifique o anfitrião, nome de utilizador e palavra-passe no config.inc.php e assegure-se que correspondem à informação fornecida pelo administrador do MySQL.';
$strAction = 'Acções';
$strAddAutoIncrement = 'Adicionar valor AUTO_INCREMENT';
$strAddConstraints = 'Adicionar limitadores';
$strAddDeleteColumn = 'Adicionar/Remover Campos';
$strAddDeleteRow = 'Adicionar/Remover Critérios';
$strAddIntoComments = 'Adicionar aos comentários';
$strAddNewField = 'Adiciona novo campo';
$strAddPrivilegesOnDb = 'Adicionar privilégios na base de dados seguinte';
$strAddPrivilegesOnTbl = 'Todos privilégios na tabela seguinte';
$strAddSearchConditions = 'Condição de Pesquisa (Complemento da cláusula "where"):';
$strAddToIndex = 'Adicionar ao índice &nbsp;%s&nbsp;coluna(s)';
$strAddUser = 'Acrescenta um utilizador';
$strAddUserMessage = 'Acrescentou um novo utilizador.';
$strAdministration = 'Administração';
$strAffectedRows = 'Linhas afectadas:';
$strAfter = 'Depois %s';
$strAfterInsertBack = 'Voltar atrás';
$strAfterInsertNewInsert = 'Inserir novo registo';
$strAllTableSameWidth = 'mostrar todas as tabelas com a mesma altura?';
$strAll = 'Todas';
$strAlterOrderBy = 'Alterar a ordem da tabela por';
$strAnalyzeTable = 'Analizar tabela';
$strAnd = 'E';
$strAnIndex = 'Um índice foi adicionado a %s';
$strAnyHost = 'Qualquer máquina';
$strAny = 'Todos';
$strAnyUser = 'Qualquer utilizador';
$strAPrimaryKey = 'Uma chave primária foi adicionada a %s';
$strArabic = 'Árabe';
$strArmenian = 'Arménio';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No Início da Tabela';
$strAtEndOfTable = 'No Fim da Tabela';
$strAttr = 'Atributos';
$strAutomaticLayout = 'Layout automático';

$strBack = 'Voltar';
$strBaltic = 'Báltico';
$strBinary = ' Binário ';
$strBinaryDoNotEdit = ' Binário - não editar ';
$strBookmarkAllUsers = 'Deixar todos os utilizadores acederem a este marcador';
$strBookmarkDeleted = 'Marcador apagado com sucesso.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Comandos SQL marcados';
$strBookmarkThis = 'Marcar este comando SQL';
$strBookmarkView = 'Ver apenas';
$strBrowse = 'Visualiza';
$strBulgarian = 'Búlgaro';
$strBzip = '"Compressão bzip"';

$strCannotLogin = 'Não é possível fazer login no servidor MySQL';
$strCantLoad = 'não é possível carregar a extensão %s ;<br />verifique a configuração do PHP por favor';
$strCantLoadRecodeIconv = 'Não é possível carregar <i>iconv</i> ou recodificar a extensão necessária para a conversão do Mapa de Caracteres, configure o php de modo a permitir utilizar estas extensões ou desligue a conversão do mapa de caracteres no phpmyadmin.';
$strCantRenameIdxToPrimary = 'Impossível renomear índice para PRIMARY!';
$strCantUseRecodeIconv = 'Não é possível usar <i>iconv</i> nem <i>libiconv</i> nem a função <i>recode_string</i> enquanto a extensão reportar que está ligada. Confira a configuração do seu php.';
$strCardinality = 'Quantidade';
$strCaseInsensitive = 'Sensível a maiúsculas/minúculas';
$strCaseSensitive = 'Não-sensível a a maiúsculas/minúculas';
$strCentralEuropean = 'Europeu Central';
$strChangeCopyModeCopy = '... manter o antigo.';
$strChangeCopyMode = 'Criar um novo utilizador com os mesmo privilégios e ...';
$strChangeCopyModeDeleteAndReload = ' ... apagar o antigo das tabelas do utilizador e depois recarregue os privilégios.';
$strChangeCopyModeJustDelete = ' ... apagar o antigo das tabelas do utilizador.';
$strChangeCopyModeRevoke = ' ... revogar todos os privilégios activos do antigo e a seguir apagá-lo.';
$strChangeCopyUser = 'Mudar a informação de login / Copiar Utilizador';
$strChangeDisplay = 'Escolha campo para mostrar';
$strChange = 'Muda';
$strChangePassword = 'Alterar a palavra-passe';
$strCharset = 'Mapa de Caractere';
$strCharsetOfFile = 'Configurar o Mapa de Caracteres do ficheiro:';
$strCharsets = 'Mapas de Caracteres';
$strCheckAll = 'Todos';
$strCheckPrivsLong = 'Verificar Privilégios para a Base de Dados &quot;%s&quot;.';
$strCheckPrivs = 'Verificar Privilégios';
$strCheckTable = 'Verificar tabela';
$strChoosePage = 'Escolha uma Página para editar';
$strColComFeat = 'Mostrando comentários das Colunas';
$strColumnNames = 'Nome dos Campos';
$strColumnPrivileges = 'Privilégios específicos da Coluna';
$strCommand = 'Comando';
$strComments = 'Comentários';
$strCompleteInserts = 'Instrucções de inserção completas';
$strCompression = 'Compressão';
$strConfigFileError = 'O phpMyAdmin não foi capaz de ler o ficheiro de configuração!<br />Isto pode acontecer se o php encontrar um erro no <i>parsing</i>  ou se não conseguir encontrar o ficheiro.<br />Chame o ficheiro de configuração directamente usando o <i>link</i> a baixo e leia a(s) mensagem(ns) de erro do php. Na maior parte dos casos, trata-se de uma falta de aspas ou de um ponto e vírgula algures.<br />Se receber uma página em branco, está tudo correcto.';
$strConfigureTableCoord = 'Configure as cordenadas para a tabela %s';
$strConnections = 'Ligações';
$strConstraintsForTable = 'Limitadores para a tabela';
$strCookiesRequired = 'O mecanismo de "Cookies" tem de estar ligado a partir deste ponto.';
$strCopyTable = 'Copia tabela para (base-de-dados<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s copiada para %s.';
$strCopyTableSameNames = 'Não é possivel copiar a tabela para o mesmo!';
$strCreate = 'Criar';
$strCreateIndex = 'Criar um índice com&nbsp;%s&nbsp;coluna(s)';
$strCreateIndexTopic = 'Criar um novo índice';
$strCreateNewDatabase = 'Criar nova base de dados';
$strCreateNewTable = 'Criar nova tabela na base de dados %s';
$strCreatePage = 'Criar uma Página nova';
$strCreatePdfFeat = 'Criação de PDFs';
$strCreationDates = 'Datas de Criação/Actualização/verificação';
$strCriteria = 'Critérios';
$strCroatian = 'Croata';
$strCzech = 'Checo';
$strCzechSlovak = 'Checo-Eslovaco';

$strDanish = 'Dinamarquês';
$strDatabase = 'Base de Dados';
$strDatabaseExportOptions = 'Opções de exportação da Base de Dados';
$strDatabaseHasBeenDropped = 'A base de dados %s foi eliminada.';
$strDatabases = 'Base de Dados';
$strDatabasesDropped = 'As Bases de Dados %s foram apagadas com sucesso.';
$strDatabasesStatsDisable = 'Desactivar Estatísticas';
$strDatabasesStatsEnable = 'Activar Estatísticas';
$strDatabasesStats = 'Estatísticas das bases de dados';
$strDatabasesStatsHeavyTraffic = 'Nota: Activar as estatísticas aqui pode causar um grande volume de tráfego entre o servidor web e o de MySQL.';
$strData = 'Dados';
$strDataDict = 'Dicionario de dados';
$strDataOnly = 'Apenas dados';
$strDBComment = 'Comentário da Base de Dados: ';
$strDbPrivileges = 'Privilégios específicos da Base de Dados';
$strDbSpecific = 'Especifico da Base de Dados';
$strDefault = 'Defeito';
$strDeleteAndFlush = 'Apagar os utilizadores e recarreguar os privilégios a seguir.';
$strDeleteAndFlushDescr = 'Este é o processo mais limpo, mas recarregar os privilégios poderá demorar um pouco.';
$strDelete = 'Apagar';
$strDeleted = 'Registo eliminado';
$strDeletedRows = 'Linhas apagadas:';
$strDeleting = 'A apagar %s';
$strDescending = 'Descendente';
$strDescription = 'Descrição';
$strDictionary = 'dicionário';
$strDisabled = 'Desactidado';
$strDisplayFeat = 'Mostrar Características';
$strDisplayOrder = 'Ordem de visualização:';
$strDisplayPDF = 'Mostrar o esquema de PDF';
$strDoAQuery = 'Faça uma "pesquisa por formulário" (caractere universal: "%")';
$strDocu = 'Documentação';
$strDoYouReally = 'Confirma : ';
$strDrop = 'Elimina';
$strDropUsersDb = 'Apagar as Bases de Dados que tenham os mesmos nomes que os utilizadores.';
$strDumpingData = 'Extraindo dados da tabela';
$strDumpSaved = 'O Dump foi gravado para o ficheiro %s.';
$strDumpXRows = 'Exporta %s registos começando em %s.';
$strDynamic = 'dinâmico';

$strEdit = 'Edita';
$strEditPDFPages = 'Editar páginas PDF';
$strEditPrivileges = 'Alterar Privilegios';
$strEffective = 'Em uso';
$strEmpty = 'Limpa';
$strEmptyResultSet = 'MySQL não retornou nenhum registo.';
$strEnabled = 'Activado';
$strEnd = 'Fim';
$strEnglish = 'Inglês';
$strEnglishPrivileges = ' Nota: os nomes dos privilégios do MySQL são em Inglês ';
$strError = 'Erro';
$strEstonian = 'Estoniano';
$strExcelEdition = 'Edição Excel';
$strExecuteBookmarked = 'Executar um query marcado(do marcador)';
$strExplain = 'Explicar SQL';
$strExport = 'Exportar';
$strExtendedInserts = 'Instrucções de inserção múltiplas';
$strExtra = 'Extra'; // written the same in portuguese

$strFailedAttempts = 'Tentativas falhadas';
$strField = 'Campo';
$strFieldHasBeenDropped = 'O campo %s foi eliminado';
$strFieldsEnclosedBy = 'Campos delimitados por';
$strFieldsEscapedBy = 'Campos precedidos por';
$strFields = 'Qtd Campos';
$strFieldsTerminatedBy = 'Campos terminados por';
$strFileAlreadyExists = 'O ficheiro  %s já existe no servidor, mude o nome do ficheiro ou verifique a opção de substituição (re-escrita).';
$strFileCouldNotBeRead = 'Não foi possível ler o ficheiro';
$strFileNameTemplate = 'Nome do ficheiro modelo';
$strFileNameTemplateRemember = 'Lembrar-se do modelo';
$strFixed = 'fixo';
$strFlushPrivilegesNote = 'Nota: O phpMyAdmin recebe os privilégios dos utilizadores directamente da tabela de privilégios do MySQL. O conteúdo destas tabelas pode diferir dos privilégios que o servidor usa se alterações manuais nele forem feitas. Neste caso, deve  %sreload the privileges%s antes de continuar.';
$strFlushTable = 'Fecha a tabela ("FLUSH")';
$strFormat = 'Formato';
$strFormEmpty = 'Nº de dados insuficiente!\nPreencha todas as opções!';
$strFullText = 'Texto inteiro';
$strFunction = 'Funções';

$strGenBy = 'Gerado por';
$strGeneralRelationFeat = 'Características gerais de Relação';
$strGenTime = 'Data de Criação';
$strGeorgian = 'Georgiano';
$strGerman = 'Alemão';
$strGlobal = 'global';  //(same in portuguese)
$strGlobalPrivileges = 'Privilégios Globais';
$strGlobalValue = 'Valor Global';
$strGo = 'Executa';
$strGrantOption = 'Conceder/Grant';
$strGreek = 'Grego';
$strGzip = '"Compressão gzip"';

$strHasBeenAltered = 'foi alterado(a).';
$strHasBeenCreated = 'foi criado(a).';
$strHaveToShow = 'Tem que escolher pelo menos uma coluna para mostrar';
$strHebrew = 'Hebráico';
$strHome = 'Início';
$strHomepageOfficial = 'Página Oficial do phpMyAdmin';
$strHostEmpty = 'O nome da máquina está vazio!';
$strHost = 'Máquina';
$strHungarian = 'Húngaro';

$strId = 'ID'; //(same in portuguese)
$strIdxFulltext = 'Texto Completo';
$strIgnore = 'Ignora';
$strImportFiles = 'Importar';
$strIndexes = 'Índices';
$strIndexHasBeenDropped = 'O Índice %s foi eliminado';
$strIndexName = 'Nome do Índice&nbsp;:';
$strIndex = 'Índice';
$strIndexType = 'Tipo de Índice&nbsp;:';
$strInnodbStat = 'Estado da InnoDB';
$strInsecureMySQL = 'O seu ficheiro de configuração contem configurações (root sem palavra-passe) que correspondem à conta privilegiada por defeito do MySQL. O servidor MySQL está a correr com este valor por defeito, assim aberto a intrusões, deveria corrigir este buraco de segurança.';
$strInsertAsNewRow = 'Insere como novo registo';
$strInsertedRowId = 'Inserir id de linha:';
$strInsertedRows = 'Registos inseridos :';
$strInsert = 'Insere';
$strInternalNotNecessary = '* Não é necessária uma relação interna quando também já existe na InnoDB.';
$strInternalRelations = 'Relações internas';
$strInUse = 'em uso';

$strJapanese = 'Japonês';
$strJumpToDB = 'Saltar para a Base de Dados &quot;%s&quot;.';
$strJustDelete = 'Apagar apenas os utilizadores da tabela de privilégios.';
$strJustDeleteDescr = 'Os utilizadores &quot;deleted&quot; continuarão a conseguir aceder ao servidor até que os privilégios sejam recarregados.';

$strKeepPass = 'Mantendo a palavra-passe ';
$strKeyname = 'Nome do Índice';
$strKill = 'Termina';
$strKorean = 'Coreano';

$strLandscape = 'Paisagem/ao baixo';
$strLatexCaption = 'Legenda da tabela';
$strLatexContent = 'Conteúdo da tabela __TABLE__';
$strLatexContinuedCaption = 'Continuação da legenda da tabela';
$strLatexContinued = '(continuação)';
$strLatexIncludeCaption = 'Incluir a legenda da tabela';
$strLaTeX = 'LaTeX';  //(same in portuguese)
$strLatexStructure = 'estructura da tabela __TABLE__';
$strLengthSet = 'Tamanho/Valores*';
$strLimitNumRows = 'Número de registos por página';
$strLinesTerminatedBy = 'Linhas terminadas por';
$strLinkNotFound = 'Link não encontrado';
$strLinksTo = 'Links para';
$strLithuanian = 'Lituano';
$strLocalhost = 'Local';
$strLocationTextfile = 'Localização do arquivo de texto';
$strLogin = 'Entrada';
$strLoginInformation = 'Informação de Login ';
$strLogout = 'Sair';
$strLogPassword = 'Palavra-passe&nbsp;:';
$strLogServer = 'Servidor';
$strLogUsername = 'Utilizador&nbsp;:';

$strMaximumSize = 'Tamanho máximo: %s%s';
$strMIME_available_mime = 'MIME-types disponíveis';
$strMIME_available_transform = 'Transformações disponíveis';
$strMIME_description = 'Descrição';
$strMIME_MIMEtype = 'MIME-type';  //(same in portuguese)
$strMIME_nodescription = 'Não há descrição disponível para esta transformação.<br />Pergunte ao autor, o que %s faz.';
$strMIME_transformation_note = 'Para uma lista de opções de transformação disponíveis e suas transformações MIME-type , clique em %stransformation descriptions%s';
$strMIME_transformation_options_note = 'Introduza os valores para as opções de transformação a usando este formato: \'a\', 100, b,\'c\'...<br />Se por acaso precisar de inserir um backslash ("\") ou uma pelica ("\'") no meio desses valores, faça-o backslashes (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strMIME_transformation_options = 'Opções de tranformação';
$strMIME_transformation = 'Transformação do navegador';
$strMIME_without = 'MIME-types impressos em itálico não tem uma função de transformação separada';
$strModifications = 'Modificações foram guardadas';
$strModifyIndexTopic = 'Modificar um índice';
$strModify = 'Modifica';
$strMoveTable = 'Move tabela para (base de dados<b>.</b>tabela):';
$strMoveTableOK = 'A tabela %s foi movida para %s.';
$strMoveTableSameNames = 'Não é posivel mover a tabela para o mesmo!';
$strMultilingual = 'multilingua';
$strMySQLCharset = 'Mapa de Caracteres do mySQL';
$strMySQLSaid = 'Mensagens do MySQL : ';
$strMySQLShowProcess = 'Mostra os Processos';
$strMySQLShowStatus = 'Mostra informação do estado do MySQL';
$strMySQLShowVars = 'Mostra as variáveis de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Próximo';
$strNoDatabasesSelected = 'Nenhuma base de dados selecionada.';
$strNoDatabases = 'Sem bases de dados';
$strNoDescription = 'sem Descrição';
$strNoDropDatabases = 'Os comandos "DROP DATABASE" estão inibidos.';
$strNoExplain = 'Saltar Explicar SQL';
$strNoFrames = 'O phpMyAdmin torna-se mais agradável se usado num browser que suporte <b>frames</b>.';
$strNoIndex = 'Nenhum indíce definido!';
$strNoIndexPartsDefined = 'Nenhuma parte do índice definida!';
$strNoModification = 'Sem alterações';
$strNone = 'Nenhum';
$strNo = 'Não';
$strNoOptions = 'Este formato não tem opções';
$strNoPassword = 'Sem palavra-passe';
$strNoPermission = 'O servidor web não tem permissões para gravar o ficheiro %s.';
$strNoPhp = 'sem código PHP';
$strNoPrivileges = 'Sem Privilégios';
$strNoRights = 'Não tem permissões suficientes para aceder aqui, neste momento!';
$strNoSpace = 'Não existe espaço suficiente para gravar o ficheiro %s.';
$strNoTablesFound = 'Nenhuma tabela encontrada na base de dados';
$strNotNumber = 'Isto não é um número!';
$strNotOK = 'não está OK';
$strNotSet = 'A Tabela <b>%s</b> não foi encontrada ou não foi definida em %s';
$strNoUsersFound = 'Nenhum utilizador encontrado.';
$strNoValidateSQL = 'Saltar a validação SQL';
$strNull = 'Nulo';
$strNumSearchResultsInTable = '%s resultado(s) na tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultado(s)';
$strNumTables = 'Tabelas';

$strOK = 'OK';  //Same in portuguese
$strOperations = 'Operações';
$strOptimizeTable = 'Optimizar tabela';
$strOr = 'Ou';
$strOverhead = 'Suspenso';
$strOverwriteExisting = 'Substituir o(s) ficheiro(s) existente(s)';

$strPageNumber = 'Página número:';
$strPaperSize = 'Tamanho do papel';
$strPartialText = 'Texto parcial';
$strPasswordChanged = 'A palavra-passe para %s foi alterada com sucesso.';
$strPasswordEmpty = 'Indique a palavras-passe!';
$strPasswordNotSame = 'As palavras-passe são diferentes!\nLembre-se de confirmar a palavra-passe!';
$strPassword = 'Palavra-passe';
$strPdfDbSchema = 'Esquema da base de dados "%s" - Página %s';
$strPdfInvalidTblName = 'A tabela "%s" não existe!';
$strPdfNoTables = 'Sem tablelas';
$strPerHour = 'por hora';
$strPerMinute = 'por minuto';
$strPerSecond = 'por segundo';
$strPhoneBook = 'lista telefónica';
$strPHP40203 = 'Está a usar o PHP 4.2.3, que tem uma grave falha de segurança com a string multi-byte (mbstring). Veja o relatório de bugs do PHP 19404 - PHP bug report 19404. A utilização desta versão do PHP com o phpMyAdmin não é recomendada.';
$strPhp = 'Criar código PHP';
$strPHPVersion = 'versão do PHP';
$strPmaDocumentation = 'Documentação do phpMyAdmin';
$strPmaUriError = 'A directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> TEM que ser definida no ficheiro de configuração!';
$strPortrait = 'Retrato/Ao alto';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimaryKeyHasBeenDropped = 'A chave primária foi eliminada';
$strPrimaryKeyName = 'O nome da chave primária tem de ser... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>tem</b> de ser o nome de e <b>apenas de</b> uma chave primária!)';
$strPrimary = 'Primária';
$strPrint = 'Imprimir';
$strPrintViewFull = 'Vista de impressão (com texto inteiro)';
$strPrintView = 'Vista de impressão';
$strPrivDescAllPrivileges = 'inclui todos os privilégios excepto Conceção - GRANT.';
$strPrivDescAlter = 'Permite alterar a estrutura de tabelas existentes.';
$strPrivDescCreateDb = 'Permite criar novas Bases de Dados e tabelas.';
$strPrivDescCreateTbl = 'Permite criar novas tabelas.';
$strPrivDescCreateTmpTable = 'Permite criar tabelas temporárias.';
$strPrivDescDelete = 'Permite apagar dados.';
$strPrivDescDropDb = 'Permite apagar Bases de Dados e tabelas.';
$strPrivDescDropTbl = 'Permite apagar Bases de Dados.';
$strPrivDescExecute = 'Permite executar procedimentos armazenados; Não tem efeito nesta versão do MySQL.';
$strPrivDescFile = 'Permite importar dados de... e exportar dados para ficheiros.';
$strPrivDescGrant = 'Permite adicionar utilizadores e privilégios sem recarregar a tabela de privilégios.';
$strPrivDescIndex = 'Permite criar e apagar indexes.';
$strPrivDescInsert = 'Permite inserir e substituir dados.';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Permite eliminar processos de outros utilizadores.';
$strPrivDescProcess4 = 'Permite ver o queries completos na lista de processos.';
$strPrivDescReferences = 'Não tem efeito nesta versão do MySQL.';
$strPrivDescSelect = 'Permite ler dados.';
$strPrivDescShowDb = 'Dá acesso à lista de bases de dados completa.';
$strPrivDescShutdown = 'Permite desligar o servidor.';
$strPrivDescUpdate = 'Permite alterar dados.';
$strPrivDescUsage = 'Sem privilégios.';
$strPrivileges = 'Privilégios';
$strPrivilegesReloaded = 'O privilégios foram recarregados com sucesso.';
$strProcesses = 'Processos';
$strProcesslist = 'Lista de Processos';
$strPutColNames = 'Coloca os nomes dos compos na primeira linha';

$strQBEDel = 'Elim.';
$strQBEIns = 'Ins.';
$strQBE = 'Pesquisa por formulário';
$strQueryFrame = 'Janela de Query';
$strQueryOnDb = 'Comando SQL na base de dados <b>%s</b>:';
$strQuerySQLHistory = 'Histórico SQL';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryTime = 'O Query demorou %01.4f sec';
$strQueryType = 'Tipo de Query';
$strQueryWindowLock = 'Não alterar esta pesquisa de fora da janela';

$strReceived = 'Recebido';
$strRecords = 'Registos';
$strReferentialIntegrity = 'Verificar Integridade referencial:';
$strRelationalSchema = 'Esquema relacional';
$strRelationNotWorking = 'As Características adicionais para trabalhar com ligações entre Tabelas foram desactivadas. Para saber porquê carregue %saqui%s.';
$strRelations = 'Relações';
$strRelationView = 'Vista de Relação';
$strReloadingThePrivileges = 'A recarregar privilégios';
$strRemoveSelectedUsers = 'Remover utilizadores seleccionados';
$strRenameTableOK = 'Tabela %s renomeada para %s';
$strRenameTable = 'Renomeia a tabela para ';
$strRepairTable = 'Reparar tabela';
$strReplaceNULLBy = 'Substituir NULL por';
$strReplaceTable = 'Substituir os dados da tabela pelos do arquivo';
$strReset = 'Limpa';
$strResourceLimits = 'Limites do recurso';
$strReType = 'Confirma';
$strRevokeAndDeleteDescr = 'O utilizadores manterão o privilégio de USAGE até que os privilégios sejam recarregados.';
$strRevokeAndDelete = 'Revogar todos os privilégios dos utilizadores e apagá-los a seguir.';
$strRevoke = 'Anula';
$strRevokeMessage = 'Anulou os privilégios para %s';
$strRowLength = 'Comprim. dos reg.';
$strRowsFrom = 'registos começando em';
$strRowSize = ' Tamanho dos reg.';
$strRowsModeFlippedHorizontal = 'horizontal (cabeçalhos rodados)';
$strRowsModeHorizontal = 'horizontal';  // same in portuguese!
$strRowsModeOptions = 'em modo %s com cabeçalhos repetidos a cada %s células';
$strRowsModeVertical = 'vertical';  // same in portuguese!
$strRows = 'Registos';
$strRowsStatistic = 'Estatísticas dos registos';
$strRunning = 'a correr em %s';
$strRunQuery = 'Executa Comando SQL';
$strRunSQLQuery = 'Executa comando(s) SQL na base de dados %s';
$strRussian = 'Russo';

$strSave = 'Guarda';
$strSaveOnServer = 'Gravar no servidor na directoria %s';
$strScaleFactorSmall = 'O factor escala é muito pequeno para encaixar o esquema numa página';
$strSearchFormTitle = 'Pesquisar na Base de Dados';
$strSearchInTables = 'Dentro de Tabela(s):';
$strSearchNeedle = 'Palavra(s) ou valor(es) para pesquisar para (wildcard: "%"):';
$strSearchOption1 = 'pelo menos uma das palavras';
$strSearchOption2 = 'todas as palavras';
$strSearchOption3 = 'a frase exacta';
$strSearchOption4 = 'as regular expression';
$strSearch = 'Pesquisar';
$strSearchResultsFor = 'Procurar resultados para "<i>%s</i>" %s:';
$strSearchType = 'Procurar:';
$strSecretRequired = 'O ficheiro de configuração precisa agora de uma frase-passe secreta (blowfish_secret).';
$strSelectADb = 'Por favor seleccione uma base de dados';
$strSelectAll = 'Selecciona Todas';
$strSelectFields = 'Seleccione os campos (no mínimo 1)';
$strSelectNumRows = 'na pesquisa';
$strSelectTables = 'Seleccionar Tabelas';
$strSend = 'envia';
$strSent = 'Enviado';
$strServerChoice = 'Escolha do Servidor';
$strServer = 'Servidor';
$strServerStatus = 'Informação de Runtime';
$strServerStatusUptime = 'Este servidor de mySQL estar a correr há %s. Foi iniciado em/a %s.';
$strServerTabVariables = 'Variáveis';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Variáveis do servidor e configurações';
$strServerVersion = 'Versão do servidor';
$strSessionValue = 'Valor de sessão';
$strSetEnumVal = 'Se o tipo de campo é "enum" ou "set", por favor introduza os valores no seguinte formato: \'a\',\'b\',\'c\'...<br />Se precisar de colocar uma barra invertida ("\") ou um apóstrofe ("\'") entre esses valores, coloque uma barra invertida antes (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShowAll = 'Mostrar tudo';
$strShowColor = 'Mostrar côr';
$strShowDatadictAs = 'Formato dos dados do dicionário';
$strShowFullQueries = 'Mostrar queries completos';
$strShowGrid = 'Mostrar grelha';
$strShowingRecords = 'Mostrando registos ';
$strShow = 'Mostra';
$strShowPHPInfo = 'Mostra informação do PHP';
$strShowTableDimension = 'Mostrar dimensão das tabelas';
$strShowTables = 'Mostra tabelas';
$strShowThisQuery = ' Mostrar de novo aqui este comando ';
$strSimplifiedChinese = 'Chinês Simplificado';
$strSingly = '(A refazer após inserir/eliminar)';
$strSize = 'Tamanho';
$strSortByKey = 'Ordenar por chave';
$strSort = 'Ordenação';
$strSpaceUsage = 'Espaço ocupado';
$strSplitWordsWithSpace = 'As palavras são separadas pelo caracter espaço (" ").';
$strSQLExportType = 'Tipo de Exportação';
$strSQLParserBugMessage = 'Talvez tenha encontrado um bug no analizador (parser) do SQL. Analise o seu query aprofundadamente, e verifique se as aspas estão correctas e não estão desencontradas. Outra possibilidade de falha é o facto de estar a fazer o upload de um ficheiro com outside binário, de de uma área de texto citada. Pode também experimentar a sua query na interface da linha de comandos do MySQL. A saída de erro do MySQL abaixo, isto se existir alguma, também o poderá ajudar a diagnosticar o problema. Se continuar a ter problemas ou se o analisador (parser) falhar onde a interface da linha de comandos tiver sucesso, reduza por favor a entrada do query SQL até aquele que causa o problema, e envie o relatório de bug com os dados do chunk na secção CUT abaixo:';
$strSQLParserUserError = 'Parece haver um erro no seu query SQL. A saída do servidor MySQL abaixo, isto se existir alguma, também o poderá ajudar a diagnosticar o problema.';
$strSQLQuery = 'Comando SQL';
$strSQLResult = 'Resultado SQL';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = 'Identificador inválido';
$strSQPBugUnclosedQuote = 'Aspa não fechada';
$strSQPBugUnknownPunctuation = 'Pontuação desconhecida';
$strStatCheckTime = 'Verificação';
$strStatCreateTime = 'Criação';
$strStatement = 'Itens';
$strStatUpdateTime = 'Actualização';
$strStatus = 'Estado';
$strStrucCSV = 'Dados CSV';
$strStrucData = 'Estrutura e dados';
$strStrucExcelCSV = 'dados CSV para MS Excel';
$strStrucOnly = 'Somente estrutura';
$strStructPropose = 'Propor uma estrutura de tabela';
$strStructure = 'Estrutura';
$strSubmit = 'Submete';
$strSuccess = 'O seu comando SQL foi executado com sucesso';
$strSum = 'Soma';
$strSwedish = 'Sueco';
$strSwitchToTable = 'Mudar para a tabela copiada';

$strTableComments = 'Comentários da tabela';
$strTableEmpty = 'O nome da tabela está vazio!';
$strTableHasBeenDropped = 'A tabela %s foi eliminada';
$strTableHasBeenEmptied = 'A tabela %s foi limpa';
$strTableHasBeenFlushed = 'A tabela %s foi fechada';
$strTableMaintenance = 'Manutenção da tabela';
$strTableOfContents = 'Índice';
$strTableOptions = 'Opções da tabela';
$strTables = '%s tabela(s)';
$strTableStructure = 'Estrutura da tabela';
$strTable = 'Tabela';
$strTblPrivileges = 'Privilégios específicos da tabela';
$strTextAreaLength = ' Devido ao seu tamanho,<br /> este campo pode não ser editável ';
$strThai = 'Tailandês';
$strThisHost = 'Este Anfitrião';
$strTime = 'Tempo';
$strTotal = 'total';
$strTotalUC = 'Total'; // (same in portuguese)
$strTraditionalChinese = 'Chinês Tradicional';
$strTraffic = 'Tráfego';
$strTransformation_image_jpeg__inline = 'Mostra uma miniatura clicável; opções: largura,altura em pixeis (mantém a proporção original)';
$strTransformation_image_jpeg__link = 'Mostra uma ligação para esta imagem (blob download directo , i.e.).';
$strTransformation_image_png__inline = 'Ver imagem/jpeg: inline';
$strTransformation_text_plain__formatted = 'Preserva a formatação original do campo. Sem Escaping.';
$strTruncateQueries = 'Truncar os Queries mostrados';
$strTurkish = 'Turco';
$strType = 'Tipo';

$strUkrainian = 'Ucraniano';
$strUncheckAll = 'Nenhum';
$strUnicode = 'Unicode';
$strUnique = 'Único';
$strUnknown = 'desconhecido';
$strUnselectAll = 'Limpa Todas as Selecções';
$strUpdatePrivMessage = 'Actualizou os privilégios de %s.';
$strUpdateProfileMessage = 'O prefil foi actualizado.';
$strUpdateQuery = 'Actualiza Comando SQL';
$strUpdComTab = 'Consulte a Documentação sobre como actualizar a Tabela Column_comments Table';
$strUpgrade = 'deve actualizar para %s %s ou mais recente.';
$strUsage = 'Utilização';
$strUseBackquotes = 'Usar apóstrofes com os nomes das tabelas e campos';
$strUseHostTable = 'Usar a tabela do anfitrião';
$strUserAlreadyExists = 'O utilizador %s já existe!';
$strUserEmpty = 'O nome do utilizador está vazio!';
$strUserName = 'Nome do Utilizador';
$strUserNotFound = 'O utilizador selecionado não se encontra na tabela de privilégios.';
$strUsersDeleted = 'Os utilizadores selecionado foram apagados com sucesso.';
$strUsersHavingAccessToDb = 'Utilizadores que tem acesso a &quot;%s&quot;';
$strUser = 'Utilizador';
$strUseTables = 'Usar Tabelas';
$strUseTextField = 'Usar campo de texto';
$strUseThisValue = 'Usar este valor';

$strValidateSQL = 'Validar SQL';
$strValue = 'Valor';
$strVar = 'Variável';
$strViewDumpDB = 'Ver o esquema da base de dados';
$strViewDump = 'Ver o esquema da tabela';

$strWebServerUploadDirectory = 'Directoria no servidor web para fazer upload';
$strWebServerUploadDirectoryError = 'Não é possivel alcançar a directoria que configurou para fazer upload';
$strWelcome = 'Bemvindo ao %s';
$strWestEuropean = 'Europeu de Oeste';
$strWithChecked = 'Com os seleccionados:';
$strWrongUser = 'Utilizador ou Palavra-passe errada. Acesso Negado.';

$strXML = 'XML';// (Same in portuguese)

$strYes = 'Sim';

$strZeroRemovesTheLimit = 'Nota: Configurar estas opções para 0 (zero) remove o limite.';
$strZip = '"Compressão zip"';

// To translate:
$strAccessDeniedCreateConfig = 'Probably reason of this is that you did not create configuration file. You might want to use %1$ssetup script%2$s to create one.';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strAllowInterrupt = 'Allow interrupt of import in case script detects it is close to time limit. This might be good way to import large files, however it can break transactions.';  //to translate
$strAndThen = 'and then';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate
$strBinaryLog = 'Binary log';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBookmarkCreated = 'Bookmark %s created';  //to translate
$strBookmarkReplace = 'Replace existing bookmark of same name';  //to translate
$strBrowseDistinctValues = 'Browse distinct values';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate
$strBufferPool = 'Buffer Pool';  //to translate
$strBufferPoolUsage = 'Buffer Pool Usage';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBusyPages = 'Busy pages';  //to translate
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate

$strCalendar = 'Calendar';  //to translate
$strCanNotLoadImportPlugins = 'Could not load import plugins, please check your installation!';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCheckOverhead = 'Check tables with overhead';  //to translate
$strCollation = 'Collation';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strCompressionWillBeDetected = 'Imported file compression will be automatically detected from: %s';  //to translate
$strConfigDefaultFileError = 'Could not load default configuration from: "%1$s"';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strCopy = 'Copy';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate
$strCreateDatabaseBeforeCopying = 'CREATE DATABASE before copying';  //to translate
$strCSV = 'CSV';  //to translate
$strCyrillic = 'Cyrillic';  //to translate

$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strDeleteNoUsersSelected = 'No users selected for deleting!';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate

$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strEngines = 'Engines';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strErrorInZipFile = 'Error in ZIP archive:';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
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

$strIcelandic = 'Icelandic';  //to translate
$strIgnoreDuplicates = 'Ignore duplicate rows';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strImportFormat = 'Format of imported file';  //to translate
$strImport = 'Import';  //to translate
$strImportSuccessfullyFinished = 'Import has been successfully finished, %d queries executed.';  //to translate
$strIndexWarningTable = 'Problems with indexes of table `%s`';//to translate
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
$strLatexLabel = 'Label key';//to translate
$strLatvian = 'Latvian';  //to translate
$strLDI = 'CSV using LOAD DATA';  //to translate
$strLDILocal = 'Use LOCAL keyword';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate

$strMaxConnects = 'max. concurrent connections';  //to translate
$strMaximalQueryLength = 'Maximal length of created query';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
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
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate

$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strNoFilesFoundInZip = 'No files found inside ZIP archive!';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strNumberOfFields = 'Number of fields';  //to translate

$strOpenNewWindow = 'Open new phpMyAdmin window';  //to translate
$strOperator = 'Operator';  //to translate

$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strPartialImport = 'Partial import';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strPDF = 'PDF';  //to translate
$strPDFReportTitle = 'Report title';  //to translate
$strPersian = 'Persian';  //to translate
$strPolish = 'Polish';  //to translate
$strPrivDescAlterRoutine = 'Allows altering and dropping stored routines.';  //to translate
$strPrivDescCreateRoutine = 'Allows creating stored routines.';  //to translate
$strPrivDescCreateUser = 'Allows creating, dropping and renaming user accounts.';  //to translate
$strPrivDescCreateView = 'Allows creating new views.';  //to translate
$strPrivDescExecute5 = 'Allows executing stored routines.';  //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxUserConnections = 'Limits the number of simultaneous connections the user may have.';  //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescShowView = 'Allows performing SHOW CREATE VIEW queries.';  //to translate
$strPrivDescSuper = 'Permite connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strProtocolVersion = 'Protocol version';  //to translate

$strQueryCache = 'Query cache';  //to translate

$strReadRequests = 'Read requests';  //to translate
$strRefresh = 'Refresh';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strReloadPrivileges = 'Reload privileges';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strReplication = 'Replication';  //to translate
$strRomanian = 'Romanian';  //to translate
$strRunSQLQueryOnServer = 'Run SQL query/queries on server %s';  //to translate

$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
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
$strSlovak = 'Slovak';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strSocketProblem = '(or the local MySQL server\'s socket is not correctly configured)';  //to translate
$strSorting = 'Sorting';  //to translate
$strSpanish = 'Spanish';  //to translate
$strSQLCompatibility = 'SQL compatibility mode';  //to translate
$strStatisticsOverrun = 'On a busy server, the byte counters may overrun, so those statistics as reported by the MySQL server may be incorrect.';  //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate

$strTableAlreadyExists = 'Table %s already exists!';  //to translate
$strTakeIt = 'take it';  //to translate
$strTempData = 'Temporary data';  //to translate
$strThemeDefaultNotFound = 'Default theme %s not found!';  //to translate
$strThemeNoPreviewAvailable = 'No preview available.';  //to translate
$strThemeNotFound = 'Theme %s not found!';  //to translate
$strThemeNoValidImgPath = 'No valid image path for theme %s found!';  //to translate
$strThemePathNotFound = 'Theme path not found for theme %s!';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strThreads = 'Threads';  //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate
$strTimeoutInfo = 'Previous import timed out, after resubmitting will continue from position %d.';  //to translate
$strTimeoutNothingParsed = 'However on last run no data has been parsed, this usually means phpMyAdmin won\'t be able to finish this import unless you increase php time limits.';  //to translate
$strTimeoutPassed = 'Script timeout passed, if you want to finish import, please resubmit same file and import will resume.';  //to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strTransactionCoordinator = 'Transaction coordinator';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strTransformation_application_octetstream__hex = 'Displays hexadecimal representation of data. Optional first parameter specifies how often space will be added (defaults to 2 nibbles).';  //to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strTransformation_text_plain__sql = 'Formats text as SQL query with syntax highlighting.';  //to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate

$strUnsupportedCompressionDetected = 'You attempted to load file with unsupported compression (%s). Either support for it is not implemented or disabled by your configuration.';  //to translate
$strUploadLimit = 'You probably tried to upload too large file. Please refer to %sdocumentation%s for ways to workaround this limit.';  //to translate
$strUsedPhpExtensions = 'Used PHP extensions';  //to translate
$strUserOverview = 'User overview'; //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate

$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strVersionInformation = 'Version information';  //to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strViewMaxExactCount = 'This view has more than %s rows. Please refer to %sdocumentation%s.';  //to translate
$strView = 'View';  //to translate

$strWildcard = 'wildcard';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
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

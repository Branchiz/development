<?php
/* $Id: japanese-euc.inc.php 11187 2008-04-06 00:00:42Z lem9 $ */

/**
 * Translated by Yukihiro Kawada <kawada at den.fujifilm.co.jp>
 *               Tadashi Jokagi <elf2000 at users.sourceforge.net>
 *               Kenichi Ishigaki <ishigaki at tcool.org>
 */

$charset = 'euc-jp';
$text_dir = 'ltr';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('バイト', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');

$mysql_4_1_doc_lang = 'ja';

$day_of_week = array('日', '月', '火', '水', '木', '金', '土');
$month = array('1 月','2 月','3 月','4 月','5 月','6 月','7 月','8 月','9 月','10 月','11 月','12 月');
// See http://www.php.net/manual/ja/function.strftime.php to define the
// variable below
$datefmt = '%Y 年 %B %d 日 %H:%M';
$timespanfmt = '%s 日 %s 時間 %s 分 %s 秒';

$strAbortedClients = '中断';
$strAccessDenied = 'アクセスは拒否されました';
$strAccessDeniedCreateConfig = '設定ファイルが作成されていないものと思われます。%1$sセットアップスクリプト%2$s を利用して設定ファイルを作成してください';
$strAccessDeniedExplanation = 'MySQL サーバに接続しようとしましたが拒否されました。config.inc.php のホスト、ユーザ名、パスワードが MySQL サーバの管理者から与えられた情報と一致するか確認してください';
$strAction = '操作';
$strAddAutoIncrement = 'AUTO_INCREMENT 値を追加する';
$strAddClause = '%sを追加';
$strAddConstraints = '制約を追加する';
$strAddDeleteColumn = 'フィールド列を追加・削除する';
$strAddDeleteRow = '条件行を追加・削除する';
$strAddFields = '%s 個のフィールドを追加する';
$strAddHeaderComment = 'ヘッダにカスタムコメントを追加 (\\n で改行)';
$strAddIntoComments = '追加コメント';
$strAddNewField = '新規フィールドを追加する';
$strAddPrivilegesOnDb = 'データベースに特権を追加';
$strAddPrivilegesOnTbl = 'テーブルに特権を追加';
$strAddSearchConditions = '検索条件("where"節の内容)を追加してください:';
$strAddToIndex = 'インデックスに&nbsp;%s&nbsp; の列を追加しました';
$strAddUser = '新しいユーザを追加する';
$strAddUserMessage = '新しいユーザを追加しました';
$strAdministration = '管理';
$strAffectedRows = '変更された行数:';
$strAfterInsertBack = '前のページに戻る';
$strAfterInsertNewInsert = '新しいレコードを追加する';
$strAfterInsertNext = '次の行を編集する';
$strAfterInsertSame = 'このページに戻る';
$strAfter = '指定カラムの後に %s';
$strAll = '全部';
$strAllowInterrupt = '制限時間が近くなったときにスクリプト側でインポートを中断できるようにします。大きなファイルをインポートする場合には便利ですが、トランザクションが壊れることもあります';
$strAllTableSameWidth = 'すべてのテーブルを同じ幅で表示しますか?';
$strAlterOrderBy = 'テーブルの並び順';
$strAnalyzeTable = 'テーブルを分析する';
$strAnd = 'AND';
$strAndThen = '続いて';
$strAngularLinks = '角リンク';
$strAnIndex = '%s にインデックスを追加しました';
$strAny = 'すべて';
$strAnyHost = 'すべてのホスト';
$strAnyUser = 'すべてのユーザ';
$strApproximateCount = '正確な数字とは限りません。FAQ 3.11 をご覧ください';
$strAPrimaryKey = '%s に主キーを追加しました';
$strArabic = 'アラビア語';
$strArmenian = 'アルメニア語';
$strAscending = '昇順';
$strAtBeginningOfTable = 'テーブルの先頭';
$strAtEndOfTable = 'テーブルの末尾';
$strAttr = '属性';
$strAutomaticLayout = '自動レイアウト';

$strBack = '戻る';
$strBaltic = 'バルト諸語';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinaryDoNotEdit = ' バイナリ - 編集不可';
$strBinary = ' バイナリ';
$strBinaryLog = 'バイナリログ';
$strBinLogEventType = 'イベント種別';
$strBinLogInfo = '情報';
$strBinLogName = 'ログ名';
$strBinLogOriginalPosition = '元の位置';
$strBinLogPosition = '位置';
$strBinLogServerId = 'サーバ ID';
$strBookmarkAllUsers = 'すべてのユーザがこのブックマークを利用できるようにする';
$strBookmarkCreated = 'ブックマーク %s を作成しました';
$strBookmarkDeleted = 'ブックマークを削除しました';
$strBookmarkLabel = 'ラベル';
$strBookmarkQuery = 'ブックマークされている SQL';
$strBookmarkReplace = '同名のブックマークは差し替える';
$strBookmarkThis = 'この SQL をブックマークする';
$strBookmarkView = '表示のみ'; // XXX ビュー専用？
$strBrowseDistinctValues = '重複している値を表示しない'; // XXX
$strBrowse = '表示';
$strBrowseForeignValues = '参照されている値を表示する';
$strBufferPoolActivity = 'バッファプールの利用状況';
$strBufferPool = 'バッファプール';
$strBufferPoolUsage = 'バッファプールの使用量';
$strBufferReadMisses = '読み込みミス';
$strBufferReadMissesInPercent = '読み込みミス(％)';
$strBufferWriteWaitsInPercent = '書き込み待ち(％)';
$strBufferWriteWaits = '書き込み待ち';
$strBulgarian = 'ブルガリア語';
$strBusyPages = 'ビジーなページ数'; // XXX
$strBzError = 'このバージョンの PHP は Bz2 拡張が壊れているのでダンプを圧縮できません。phpMyAdmin の設定ファイルの <code>$cfg[\'BZipDump\']</code> を <code>FALSE</code>に設定することを強く推奨します。Bz2 圧縮機能を使いたい場合は PHP のバージョンを上げて下さい。PHP のバグレポート %s もご覧ください';
$strBzip = '"bzip 形式"';

$strCalendar = 'カレンダー';
$strCancel = 'キャンセル';
$strCanNotLoadExportPlugins = 'エクスポートプラグインをロードできません。正しくインストールされているか確認してください!';
$strCanNotLoadImportPlugins = 'インポートプラグインをロードできません。正しくインストールされているか確認してください!';
$strCannotLogin = 'MySQL サーバにログインできません';
$strCantLoad = '[a@http://php.net/%1$s@Documentation][em]%1$s[/em][/a] 拡張をロードできません。PHP の設定を確認してください';
$strCantLoadRecodeIconv = '文字セットの変換に必要な iconv ないし GNU recode 拡張をロードできません。PHP 側でこの拡張を有効にするか、phpMyAdmin 側で文字セットの変換を無効にしてください';
$strCantRenameIdxToPrimary = 'インデックス名を PRIMARY に変更することはできません!';
$strCantUseRecodeIconv = '必要な拡張はロードされているようですが、iconv や libiconv、recode_string の関数を利用できません。PHP の設定を確認してください';
$strCardinality = '一意な値の数';
$strCaseInsensitive = '大文字小文字を区別しない';
$strCaseSensitive = '大文字小文字を区別する';
$strCentralEuropean = '中央ヨーロッパ語';
$strChangeCopyMode = '同じ特権を持つ新しいユーザを作る';
$strChangeCopyModeCopy = '元のユーザも残す';
$strChangeCopyModeDeleteAndReload = 'ユーザテーブルから元のユーザを削除し、特権をリロードする';
$strChangeCopyModeJustDelete = 'ユーザテーブルから元のユーザを削除する';
$strChangeCopyModeRevoke = '元のユーザの特権をすべて無効にしてから削除する';
$strChangeCopyUser = 'ログイン情報の変更 / ユーザの複製';
$strChangeDisplay = '表示するフィールドを選択してください';
$strChange = '変更';
$strChangePassword = 'パスワードを変更する';
$strCharset = '文字セット';
$strCharsetOfFile = 'ファイルの文字セット:';
$strCharsetsAndCollations = '文字セットと照合順序';
$strCharsets = '文字セット';
$strCheckAll = 'すべてチェックする';
$strCheckOverhead = 'オーバーヘッドのあるテーブルを確認してください'; // XXX
$strCheckPrivs = '特権をチェックする';
$strCheckPrivsLong = 'データベース &quot;%s&quot; の特権を確認してください'; // XXX
$strCheckTable = 'テーブルをチェックする';
$strChoosePage = '編集するページを選択してください';
$strColComFeat = '列コメント表示機能'; // XXX
$strCollation = '照合順序';
$strColumnNames = 'カラム名';
$strColumnPrivileges = 'このカラムに固有の特権';
$strCommand = 'コマンド';
$strComments = 'コメント';
$strCommentsForTable = 'COMMENTS FOR TABLE'; // XXX
$strCompatibleHashing = 'MySQL&nbsp;4.0 互換';
$strCompleteInserts = '完全な INSERT 文を作成する';
$strCompression = '圧縮';
$strCompressionWillBeDetected = 'インポートしたファイルの圧縮方法は次の中から自動検出されます: %s';
$strConfigDefaultFileError = 'デフォルトの設定を読み込めませんでした: "%1$s"';
$strConfigFileError = 'phpMyAdmin の設定ファイルを読み込めませんでした! <br />文法エラーが発生したか、ファイルが見つかりません。<br />下のリンクから直接設定ファイルを読み込んで PHP のエラーメッセージを確認してください。たいていの場合はどこかに引用符やセミコロンの抜けがあります。<br />空白のページが表示されれば問題なしです';
$strConfigureTableCoord = 'テーブル %s の座標を設定してください';
$strConnectionError = '接続できません: 設定が無効です';
$strConnections = '接続';
$strConstraintsForDumped = 'ダンプしたテーブルの制約';
$strConstraintsForTable = 'テーブルの制約';
$strControluserFailed = '設定ファイルに定義されている管理ユーザ(controluser)での接続に失敗しました';
$strCookiesRequired = 'クッキーを有効にしてください';
$strCopy = 'コピー';
$strCopyDatabaseOK = 'データベース %s を %s にコピーしました';
$strCopyTable = 'テーブルを(database<b>.</b>table)にコピーする:';
$strCopyTableOK = 'テーブル %s を %s にコピーしました';
$strCopyTableSameNames = '同じテーブルにはコピーできません!';
$strCouldNotKill = 'スレッド %s の終了に失敗しました。すでに閉じているようです';
$strCreateDatabaseBeforeCopying = 'コピーの前に CREATE DATABASE する';
$strCreateIndex = '&nbsp;%s&nbsp; のカラムにインデックスを作成する';
$strCreateIndexTopic = '新しいインデックスを作成する';
$strCreateNewDatabase = '新規データベースを作成する';
$strCreateNewTable = 'データベース %s に新しいテーブルを作成する';
$strCreate = '作成';
$strCreatePage = '新しいページを作成する';
$strCreatePdfFeat = 'PDF の作成';
$strCreateRelation = 'リレーションを作成';
$strCreateTable  = 'テーブルを作成';
$strCreateUserDatabase = 'ユーザ専用データベース';
$strCreateUserDatabaseName = '同名のデータベースを作成してすべての特権を与える';
$strCreateUserDatabaseNone = 'なし';
$strCreateUserDatabaseWildcard = 'ワイルドカード(ユーザ名_%)に該当するデータベースにすべての特権を与える';
$strCreationDates = '作成/更新/検査日';
$strCriteria = '条件';
$strCroatian = 'クロアチア語';
$strCSV = 'CSV';
$strCyrillic = 'キリル文字ロシア語';
$strCzech = 'チェコ語';
$strCzechSlovak = 'チェコのスロバキア語';

$strDanish = 'デンマーク語';
$strDatabase = 'データベース';
$strDatabaseEmpty = 'データベース名が空です!';
$strDatabaseExportOptions = 'データベースエクスポートオプション';
$strDatabaseHasBeenDropped = 'データベース %s を削除しました';
$strDatabases = 'データベース';
$strDatabasesDropped = 'データベース %s を正常に削除しました';
$strDatabasesStats = 'データベースの統計';
$strDatabasesStatsDisable = '統計を無効にする';
$strDatabasesStatsEnable = '統計を有効にする';
$strDatabasesStatsHeavyTraffic = '注意: データベースの統計を有効にするとウェブサーバと MySQL サーバの間の通信量が激増することがあります';
$strData = 'データ';
$strDataDict = 'データ辞書';
$strDataOnly = 'データのみ';
$strDataPages = 'データが含まれているページ数';
$strDBComment = 'データベースのコメント:';
$strDBCopy = 'データベースのコピー先';
$strDbIsEmpty = 'データベースが空のようです!';
$strDbPrivileges = 'データベースに固有の特権';
$strDBRename = '新しいデータベース名';
$strDbSpecific = 'データベース固有';
$strDefault = 'デフォルト値';
$strDefaultEngine = '%s はこの MySQL サーバのデフォルトストレージエンジンです';
$strDefaultValueHelp = 'デフォルト値にはひとつの値のみ入力してください。バックスラッシュによるエスケープや引用符を含めることはできません。例: a';
$strDefragment = 'テーブルのデフラグ';
$strDelayedInserts = '遅延インサートを使用する';
$strDeleteAndFlush = 'ユーザを削除して特権をリロードする';
$strDeleteAndFlushDescr = 'これはもっともクリーンな方法ですが、特権のリロードに時間がかかることがあります';
$strDeleted = '行を削除しました';
$strDeletedRows = '削除した行数:';
$strDeleteNoUsersSelected = '削除するユーザが選択されていません!';
$strDelete = '削除';
$strDeleteRelation = 'リレーションを削除';
$strDeleting = '%s を削除中です';
$strDelimiter = 'デリミタ';
$strDelOld = 'このページには存在しないテーブルへの参照があります。これらの参照を削除しますか?';
$strDescending = '降順';
$strDescription = '説明';
$strDesigner = 'デザイナ';
$strDesignerHelpDisplayField = '表示するフィールドはピンク色で表示されます。表示非表示を切り替える場合は「表示するフィールドを選択する」というアイコンをクリックしてから適切なフィールド名をクリックください';
$strDictionary = '辞書';
$strDirectLinks = '直リンク';
$strDirtyPages = 'ダーティページ';
$strDisabled = '無効';
$strDisableForeignChecks = '外部キーのチェックを無効にする';
$strDisplayFeat = '表示機能';
$strDisplayOrder = '表示順:';
$strDisplayPDF = 'PDF スキーマを表示する';
$strDoAQuery = '"query by example"を実行 (ワイルドカード: "%")';
$strDocSQL = 'DocSQL';
$strDocu = 'ドキュメント';
$strDoYouReally = '本当に実行しますか?';
$strDropDatabaseStrongWarning = 'データベースを完全に削除しようとしています!';
$strDrop = '削除';
$strDropUsersDb = 'ユーザと同名のデータベースを削除する';
$strDumpingData = 'テーブルのデータをダンプしています';
$strDumpSaved = 'ダンプをファイル %s に保存しました';
$strDumpXRows = '%s 行をダンプします(開始行: %s)';
$strDynamic = '動的';

$strEdit = '編集';
$strEditPDFPages = 'PDF ページを編集する';
$strEditPrivileges = '特権を編集';
$strEffective = '実効'; // XXX
$strEmpty = '空にする';
$strEmptyResultSet = '返り値が空でした(行数0)';
$strEnabled = '有効';
$strEncloseInTransaction = 'エクスポートをトランザクションで囲む';
$strEncto = 'エンコーディングへ変換する'; // encoding convert
$strEndCut = 'END CUT';
$strEnd = '最後';
$strEndRaw = 'END RAW';
$strEngineAvailable = '%s は有効になっています';
$strEngineDisabled = '%s は無効になっています';
$strEngines = 'エンジン';
$strEngineUnsupported = 'この MySQL サーバは %s ストレージエンジンをサポートしていません';
$strEnglish = '英語';
$strEnglishPrivileges = '注意: MySQL の特権名は英語で表示されます';
$strErrorInZipFile = 'ZIP アーカイブにエラーがあります:';
$strErrorRelationAdded = 'エラー: リレーションを追加できませんでした';
$strErrorRelationExists = 'エラー: リレーションはすでに存在しています';
$strErrorRenamingTable = 'テーブルを %1$s から %2$s にリネームするときにエラーが発生しました';
$strErrorSaveTable = 'デザイナの座標を保存するときにエラーが発生しました';
$strError = 'エラー';
$strEscapeWildcards = '_ や % というワイルドカードを文字として使用するときは \ でエスケープしてください';
$strEsperanto = 'エスペラント語';
$strEstonian = 'エストニア語';
$strEvent = 'イベント';
$strExcelEdition = 'Excel のエディション';
$strExecuteBookmarked = 'ブックマークされたクエリを実行する';
$strExplain = 'EXPLAIN で確認';
$strExportImportToScale = '倍率にあわせたエクスポート/インポート';
$strExportMustBeFile = 'この形式のエクスポートはファイルに保存する必要があります!';
$strExport = 'エクスポート';
$strExtendedInserts = '長い INSERT 文を作成する';
$strExtra = 'その他';

$strFailedAttempts = '失敗回数';
$strFieldHasBeenDropped = 'フィールド %s を削除しました';
$strFieldInsertFromFileTempDirNotExists = 'アップロードされたファイルの移動に失敗しました。FAQ 1.11 をご覧ください。';
$strField = 'フィールド';
$strFieldsEnclosedBy = 'フィールド囲み記号';
$strFieldsEscapedBy = 'フィールドのエスケープ記号';
$strFields = 'フィールド';
$strFieldsTerminatedBy = 'フィールド区切り記号';
$strFileAlreadyExists = 'サーバ上に既存のファイル %s があります。ファイル名を変更するか、上書きオプションを有効にしてください';
$strFileCouldNotBeRead = 'ファイルを読み込めませんでした';
$strFileNameTemplateDescription = 'このテンプレートは %1$sstrftime%2$s を使って解釈されます。そのため、時間の書式文字列を利用できます。また、次の変換も行われます。%3$s それ以外のテキストは修正されません';
$strFileNameTemplateDescriptionDatabase = 'データベース名';
$strFileNameTemplateDescriptionServer = 'サーバ名';
$strFileNameTemplateDescriptionTable = 'テーブル名';
$strFileNameTemplate = 'ファイル名のテンプレート';
$strFileNameTemplateRemember = 'テンプレートを記憶させる';
$strFiles = 'ファイル';
$strFileToImport = 'インポートするファイル';
$strFixed = '固定';
$strFlushPrivilegesNote = '注意: phpMyAdmin は MySQL の特権テーブルから直接ユーザ特権を取得しますが、手作業で特権を更新した場合は phpMyAdmin が利用しているテーブルの内容とサーバの特権の内容が一致しなくなることがありますので、作業を続ける前に %s特権リロード%s をしてください';
$strFlushQueryCache = 'クエリキャッシュをフラッシュする';
$strFlushTable = 'テーブルをフラッシュする("FLUSH")';
$strFlushTables = 'すべてのテーブルをフラッシュする(閉じる)';
$strFontSize = 'フォントサイズ';
$strForeignKeyError = '外部キーを作成中にエラーが発生しました (データ型を確認してください)';
$strFormat = 'フォーマット';
$strFormEmpty = 'フォームに入力されていない値があります!';
$strFreePages = 'フリーページ数';
$strFullText = '全文';
$strFunctions = '関数';
$strFunction = '関数';

$strGenBy = '生成環境';
$strGeneralRelationFeat = '一般的なリレーション機能';
$strGenerate = '生成する';
$strGeneratePassword = 'パスワードを生成する';
$strGenTime = '生成時間';
$strGeorgian = 'グルジア語';
$strGerman = 'ドイツ語';
$strGlobal = 'グローバル';
$strGlobalPrivileges = 'グローバル特権';
$strGlobalValue = 'グローバル値';
$strGo = '実行する';
$strGrantOption = '権限委譲';
$strGreek = 'ギリシア語';
$strGzip = '"gzip 形式"';

$strHandler = 'ハンドラ';
$strHasBeenAltered = 'を変更しました';
$strHasBeenCreated = 'を作成しました';
$strHaveToShow = '最低ひとつは表示するカラムを選択してください';
$strHebrew = 'ヘブライ語';
$strHelp = 'ヘルプ';
$strHexForBLOB = 'BLOBに16進数表記を利用する';
$strHide         = '隠す';
$strHideShowAll = 'すべて隠す/表示';
$strHideShowNoRelation = 'リレーションのないテーブルを隠す/表示';
$strHome = 'メインページへ';
$strHomepageOfficial = 'phpMyAdmin のオフィシャルサイト';
$strHostEmpty = 'ホスト名が空です!';
$strHost = 'ホスト';
$strHTMLExcel = 'Microsoft Excel 2000';
$strHTMLWord = 'Microsoft Word 2000';
$strHungarian = 'ハンガリー語';

$strIcelandic = 'アイスランド語';
$strId = 'ID';
$strIdxFulltext = '全文';
$strIEUnsupported = 'Internet Explorer ではこの機能は利用できません';
$strIgnoreDuplicates = '重複している行を無視する';
$strIgnore = '無視';
$strIgnoreInserts = 'INSERT IGNORE を使用する';
$strImportExportCoords = 'PDF スキーマの座標をインポート/エクスポートする';
$strImportFiles = 'インポートファイル';
$strImportFormat = 'インポートするファイルの形式';
$strImport = 'インポート';
$strImportSuccessfullyFinished = 'インポートは正常終了しました。%d 個のクエリを実行しました';
$strIndexes = 'インデックスサイズ';
$strIndexesSeemEqual = '以下のインデックスは同じもののように思われます。いずれかを削除してください :';
$strIndexHasBeenDropped = 'インデックス %s を削除しました';
$strIndexName = 'インデックス名:';
$strIndex = 'インデックス';
$strIndexType = 'インデックスの種類:';
$strIndexWarningTable = 'テーブル `%s` のインデックスに問題があります';
$strInnoDBAutoextendIncrementDesc = 'スペースがいっぱいになったときに自動的にテーブルを拡張する場合に追加されるテーブルサイズ';
$strInnoDBAutoextendIncrement = '自動拡張時に追加されるテーブルサイズ';
$strInnoDBBufferPoolSize = 'バッファプールのサイズ';
$strInnoDBBufferPoolSizeDesc = 'InnoDB がテーブルのデータやインデックスをキャッシュするのに使うメモリバッファ量';
$strInnoDBDataFilePath = 'データファイル';
$strInnoDBDataHomeDir = 'データのホームディレクトリ';
$strInnoDBDataHomeDirDesc = 'すべての InnoDB データファイルに共通するディレクトリパス';
$strInnoDBPages = 'ページ';
$strInnoDBRelationAdded = 'InnoDB リレーションを追加しました';
$strInnodbStat = 'InnoDB ステータス';
$strInsecureMySQL = 'お使いの設定ファイルに MySQL のデフォルト特権アカウントに相当する設定 (root ユーザでパスワードなし) が含まれています。お使いの MySQL サーバはこのデフォルト設定で動作しているため不正アクセス可能な状態になっています。このセキュリティーホールはかならず閉ざしてください';
$strInsertAsNewRow = '新しい行として挿入する';
$strInsert = '挿入';
$strInsertedRowId = '挿入した行 ID:';
$strInsertedRows = '挿入した行数:';
$strInternalNotNecessary = '* InnoDB にも内部リレーションが存在している場合は不要です';
$strInternalRelationAdded = '内部リレーションを追加しました';
$strInternalRelations = '内部リレーション';
$strInUse = '使用中';
$strInvalidAuthMethod = '設定ファイルに無効な認証方法が指定されています:';
$strInvalidColumnCount = 'カラム数は 0 より大きくなければいけません';
$strInvalidColumn = '不正なカラム(%s)が指定されています!';
$strInvalidCSVFieldCount = 'CSV 入力のフィールド数が不正です (行: %d)';
$strInvalidCSVFormat = 'CSV 入力の書式が不正です (行: %d)';
$strInvalidCSVParameter = 'CSV インポートのパラメータが不正です: %s';
$strInvalidDatabase = '不正なデータベースです';
$strInvalidFieldAddCount = '最低ひとつはフィールドを追加してください';
$strInvalidFieldCount = 'テーブルには最低ひとつのフィールドが必要です';
$strInvalidLDIImport = 'このプラグインでは圧縮されたファイルのインポートはできません!';
$strInvalidRowNumber = '%d は不正な行番号です';
$strInvalidServerHostname = 'サーバ %1$s のホスト名が不正です。設定を確認してください';
$strInvalidServerIndex = 'サーバのインデックスが不正です: "%s"';
$strInvalidTableName = 'テーブル名が不正です';

$strJapanese = '日本語';
$strJoins = '結合';
$strJumpToDB = '&quot;%s&quot; データベースに移動';
$strJustDelete = '特権テーブルからユーザを削除するだけにする';
$strJustDeleteDescr = '特権がリロードされるまでは「削除」されたユーザもふつうにサーバにアクセスできます';

$strKanjiEncodConvert = '漢字コード変換'; // kanji code convert
$strKeepPass = 'パスワードは変更しない';
$strKeyCache = 'キーキャッシュ';
$strKeyname = 'キー名';
$strKill = '停止';
$strKnownExternalBug = '%s の機能には既知のバグがあります。%s をご覧ください';
$strKorean = '韓国語';

$strLandscape = '横向き';
$strLanguageUnknown = '言語ファイルが登録されていません: %1$s';
$strLanguage = '言語';
$strLatchedPages = 'ラッチされているページ';
$strLatexCaption = 'テーブルのキャプション';
$strLatexContent = 'テーブル __TABLE__ の内容';
$strLatexContinued = '(続き)';
$strLatexContinuedCaption = 'テーブルのキャプション(続き)';
$strLatexIncludeCaption = 'テーブルのキャプションを含める';
$strLatexLabel = 'ラベルキー';
$strLaTeX = 'LaTeX';
$strLatexStructure = 'テーブル __TABLE__ の構造';
$strLatvian = 'ラトビア語';
$strLDI = 'LOAD DATA する CSV';
$strLDILocal = 'LOCAL キーワードを使用する';
$strLengthSet = '長さ/値';
$strLimitNumRows = 'ページあたりの行数';
$strLinesTerminatedBy = '行の終端記号';
$strLinkNotFound = 'リンク先が見つかりません';
$strLinksTo = 'リンク先';
$strLithuanian = 'リトアニア語';
$strLocalhost = 'ローカル';
$strLocationTextfile = 'テキストファイルの位置';
$strLoginInformation = 'ログイン情報';
$strLogin = 'ログイン';
$strLogout = 'ログアウト';
$strLogPassword = 'パスワード:';
$strLogServer = 'サーバ';
$strLogUsername = 'ユーザ名:';
$strLongOperation = 'この作業には時間がかかることがあります。続行しますか?';

$strMaxConnects = '最大同時接続数';
$strMaximalQueryLength = '作成するクエリの最大長';
$strMaximumSize = '最長: %s%s';
$strMbExtensionMissing = 'PHP の mbstring 拡張が見つかりませんでした。マルチバイト文字セットを使用しているようですが、mbstring 拡張がないと phpMyAdmin は文字列を正しく分割できないため予期しない結果になることがあります';
$strMbOverloadWarning = 'PHP の設定で mbstring.func_overload が有効になっています。phpMyAdmin はこのオプションに対応していないため、データが破壊されることがあります!';
$strMIME_available_mime = '利用できる MIME タイプ';
$strMIME_available_transform = '利用できる変換機能';
$strMIME_description = '説明';
$strMIME_MIMEtype = 'MIME タイプ';
$strMIME_nodescription = 'この変換機能には説明がありません。<br />%s の動作については作者にご確認ください';
$strMIME_transformation_note = '利用可能な変換オプションや MIME タイプの変換の一覧については %s変換機能の説明%s をご覧ください';
$strMIME_transformation = 'ブラウザ変換機能';
$strMIME_transformation_options = '変換オプション';
$strMIME_transformation_options_note = '変換オプションの値の書式: \'a\',\'b\',\'c\'...<br />バックスラッシュ ("\") やシングルクォート ("\'") を値に含める必要がある場合は ( \\\\xyz や a\\\'b のように) バックスラッシュでエスケープしてください';
$strMIMETypesForTable = 'MIME TYPES FOR TABLE'; // XXX
$strMIME_without = 'イタリック表示されている MIME タイプには個別の変換関数はありません';
$strModifications = '修正を保存しました';
$strModifyIndexTopic = 'インデックスを修正する';
$strModify = '修正';
$strMoveMenu = 'メニューを移動する';
$strMoveTable = 'テーブルの移動先(database<b>.</b>table):';
$strMoveTableOK = 'テーブル %s を %s に移動しました';
$strMoveTableSameNames = '同じテーブルには移動できません!';
$strMultilingual = '複数言語';
$strMyISAMDataPointerSize = 'データポインタのサイズ';
$strMyISAMDataPointerSizeDesc = 'MAX_ROWS オプションを指定せずに MyISAM テーブルを作成するときに CREATE TABLE が使用するデフォルトのポインタサイズ (バイト単位)';
$strMyISAMMaxExtraSortFileSizeDesc = 'MyISAM のインデックスを高速生成するときに利用される一時ファイルとキーキャッシュの差がここで指定した値以上に大きくなる場合は、キーキャッシュ法が使われます';
$strMyISAMMaxExtraSortFileSize = 'インデックス作成時に利用する一時ファイルの最大サイズ';
$strMyISAMMaxSortFileSizeDesc = 'MyISAM インデックスを再作成するとき (REPAIR TABLE や ALTER TABLE、LOAD DATA INFILE の最中) に利用できる一時ファイルの最大サイズ';
$strMyISAMMaxSortFileSize = 'ソート用の一時ファイルの最大サイズ';
$strMyISAMRecoverOptionsDesc = 'クラッシュした MyISAM テーブルを自動修復するときのモード (サーバ起動オプション --myisam-recover で設定されるもの)';
$strMyISAMRecoverOptions = '自動修復モード';
$strMyISAMRepairThreads = 'スレッドの修復';
$strMyISAMRepairThreadsDesc = 'この値が 1 より大きい場合は MyISAM テーブルのインデックスも修復中にソートプロセスによって (スレッドごとに) 同時作成されます';
$strMyISAMSortBufferSizeDesc = 'REPAIR TABLE の最中に MyISAM のインデックスをソートするとき、あるいは CREATE INDEX や ALTER TABLE でインデックスを作成するときに割り当てられるバッファ';
$strMyISAMSortBufferSize = 'ソートバッファのサイズ';
$strMySQLCharset = 'MySQL の文字セット';
$strMysqlClientVersion = 'MySQL クライアントのバージョン';
$strMySQLConnectionCollation = 'MySQL の接続照合順序';
$strMysqlLibDiffersServerVersion = 'お使いの PHP MySQL ライブラリのバージョン %s が MySQL サーバのバージョン %s と異なります。これは予期しない不具合を起こす可能性があります。';
$strMySQLSaid = 'MySQLのメッセージ: ';
$strMySQLShowProcess = 'MySQL プロセスの表示';
$strMySQLShowStatus = 'MySQL のランタイム情報';
$strMySQLShowVars = 'MySQL のシステム変数';

$strName = '名前';
$strNext = '次へ';
$strNoActivity = '%s 秒以上操作をしませんでした。ログインしなおしてください';
$strNoDatabases = 'データベースが存在しません';
$strNoDatabasesSelected = 'データベースが選択されていません';
$strNoDataReceived = 'インポートするデータを受信できませんでした。ファイル名が送信されていないか、ファイルサイズが PHP の設定で許可された最大値を超えています。FAQ 1.16をご覧ください';
$strNoDescription = '説明がありません';
$strNoDetailsForEngine = 'このストレージエンジンにはステータスの詳細情報はありません';
$strNoDropDatabases = 'DROP DATABASE 文は無効にされています';
$strNoExplain = 'SQL の EXPLAIN 解析をスキップ';
$strNoFilesFoundInZip = 'ZIP アーカイブにファイルが含まれていません!';
$strNoFrames = 'phpMyAdmin は<b>フレーム対応</b>ブラウザでの利用をお勧めします';
$strNoIndex = 'インデックスが定義されていません!';
$strNoIndexPartsDefined = 'インデックス部分が定義されていません!';
$strNoModification = '変更なし';
$strNone = 'なし';
$strNoOptions = 'この書式にはオプションはありません';
$strNoPassword = 'パスワードなし';
$strNoPermission = 'このウェブサーバにはファイル %s を保存する権限がありません';
$strNoPhp = 'PHP コードを省略';
$strNoPrivileges = '特権なし';
$strNoRights = '特権不足でアクセスできません!';
$strNoRowsSelected = '行が選択されていません';
$strNo = 'いいえ';
$strNoSpace = '空き容量不足でファイル %s を保存できません';
$strNoTablesFound = 'このデータベースにはテーブルがありません';
$strNoThemeSupport = 'テーマは利用できません。設定やテーマディレクトリ %s を確認してください';
$strNotNumber = '数値ではありません!';
$strNotOK = 'Not OK';
$strNotSet = 'テーブル <b>%s</b> が見つかりません。あるいは %s には設定されていません';
$strNoUsersFound = 'ユーザが存在しません';
$strNoValidateSQL = 'SQL の検証をスキップ';
$strNull = 'ヌル(NULL)';
$strNumberOfFields = 'フィールド数';
$strNumberOfTables = 'テーブル数';
$strNumSearchResultsInTable = '%s 件（テーブル <i>%s</i>)';
$strNumSearchResultsTotal = '<b>合計:</b> <i>%s</i> 件';
$strNumTables = 'テーブル';

$strOK = 'OK';
$strOpenDocumentSpreadsheet = 'スプレッドシートを開く';
$strOpenDocumentText = 'テキストを開く';
$strOpenNewWindow = '別ウィンドウで開く';
$strOperations = '操作';
$strOperator = '演算子';
$strOptimizeTable = 'テーブルを最適化する';
$strOptions = 'オプション';
$strOr = 'または';
$strOverhead = 'オーバーヘッド';
$strOverwriteExisting = '既存のファイルは上書き';

$strPageNumber = 'ページ番号:';
$strPagesToBeFlushed = 'フラッシュ待ちページ数';
$strPaperSize = '用紙サイズ';
$strPartialImport = '部分インポート';
$strPartialText = '部分テキスト';
$strPasswordChanged = '%s のパスワードは正しく変更されました';
$strPasswordEmpty = 'パスワードが空です!';
$strPasswordHashing = 'パスワードハッシュ';
$strPassword = 'パスワード';
$strPasswordNotSame = 'パスワードが異なっています!';
$strPdfDbSchema = 'データベース %s のスキーマ - ページ %s';
$strPdfInvalidTblName = '"%s" テーブルは存在しません!';
$strPdfNoTables = 'テーブルがありません';
$strPDF = 'PDF';
$strPDFReportExplanation = '(ひとつのテーブルのデータを含むレポートを生成します)';
$strPDFReportTitle = 'レポートのタイトル';
$strPerHour = '/時';
$strPerMinute = '/分';
$strPerSecond = '/秒';
$strPersian = 'ペルシア語';
$strPhoneBook = '電話帳';
$strPHP40203 = 'お使いの PHP 4.2.3 にはマルチバイト文字 (mbstring) の扱いに重大なバグがあります。PHP のバグレポート 19404 番をご覧ください。このバージョンの PHP はお勧めできません';
$strPhp = 'PHP コードの作成';
$strPHPVersion = 'PHP のバージョン';
$strPleaseSelectPrimaryOrUniqueKey = '主キーまたはユニークなキーを選択してください';
$strPmaDocumentation = 'phpMyAdmin のドキュメント';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> はかならず設定ファイルで設定する必要があります!';
$strPmaWiki = 'phpMyAdmin wiki';
$strPolish = 'ポーランド語';
$strPortrait = '縦向き';
$strPos1 = '先頭';
$strPrevious = '前';
$strPrimaryKeyHasBeenDropped = '主キーを削除しました';
$strPrimaryKeyName = '主キーの名前は PRIMARY でなければなりません!';
$strPrimaryKeyWarning = '(主キーはかならず "PRIMARY" という名前でなければなりません。また主キー以外に"PRIMARY"という名前を使ってはなりません!)';
$strPrimary = '主';
$strPrint = '印刷';
$strPrintViewFull = '印刷用画面 (全テキストを含む)';
$strPrintView = '印刷用画面';
$strPrivDescAllPrivileges = 'GRANT 以外のすべての特権を付与する';
$strPrivDescAlterRoutine = 'ストアドルーチンの修正と削除を許可する';
$strPrivDescAlter = '既存のテーブル構造の変更を許可する';
$strPrivDescCreateDb = '新しいデータベースやテーブルの作成を許可する';
$strPrivDescCreateRoutine = 'ストアドルーチンの作成を許可する';
$strPrivDescCreateTbl = '新しいテーブルの作成を許可する';
$strPrivDescCreateTmpTable = '一時テーブルの作成を許可する';
$strPrivDescCreateUser = 'ユーザアカウントの作成・削除・リネームを許可する';
$strPrivDescCreateView = '新しいビューの作成を許可する';
$strPrivDescDelete = 'データの削除を許可する';
$strPrivDescDropDb = 'データベースとテーブルの削除を許可す';
$strPrivDescDropTbl = 'テーブルの削除を許可する';
$strPrivDescExecute = 'ストアードプロシジャの実行を許可する (このバージョンの MySQL では無効です)';
$strPrivDescExecute5 = 'ストアドルーチンの実行を許可する';
$strPrivDescFile = 'データのインポート、エクスポートを許可する';
$strPrivDescGrant = '特権テーブルのリロードなしのユーザ・特権の追加を許可する';
$strPrivDescIndex = 'インデックスの作成、削除を許可する';
$strPrivDescInsert = 'データの挿入、置換を許可する';
$strPrivDescLockTables = '現在のスレッドのテーブルロックを許可する';
$strPrivDescMaxConnections = '単位時間内に可能な新規接続回数を制限する';
$strPrivDescMaxQuestions = '単位時間内にサーバに送信可能なクエリ数を制限する';
$strPrivDescMaxUpdates = '単位時間内に実行可能なテーブルないしデータベースの編集コマンド数を制限する';
$strPrivDescMaxUserConnections = 'ユーザの同時接続数を制限する';
$strPrivDescProcess3 = '他のユーザのプロセスの停止を許可する';
$strPrivDescProcess4 = 'プロセス一覧で完全なクエリの表示を許可する';
$strPrivDescReferences = 'このバージョンの MySQL では無効です';
$strPrivDescReload = 'サーバ設定のリロード、サーバキャッシュのフラッシュを許可する';
$strPrivDescReplClient = 'スレーブ/マスターの照会を許可する';
$strPrivDescReplSlave = 'レプリケーションスレーブでは有効にする必要があります';
$strPrivDescSelect = 'データの読み込みを許可する';
$strPrivDescShowDb = 'データベース総一覧へのアクセスを許可する';
$strPrivDescShowView = 'SHOW CREATE VIEW クエリの実行を許可する';
$strPrivDescShutdown = 'サーバのシャットダウンを許可する';
$strPrivDescSuper = '最大接続数に達しているときでも接続を許可する。グローバル変数の設定や他のユーザのスレッドを停止するといった管理操作をする場合はたいていこの設定が必要になります';
$strPrivDescUpdate = 'データの修正を許可する';
$strPrivDescUsage = '特権はありません';
$strPrivileges = '特権';
$strPrivilegesReloaded = '特権を正常にリロードしました';
$strProcedures = 'プロシジャ';
$strProcesses = 'プロセス';
$strProcesslist = 'プロセス一覧';
$strProfiling = 'プロファイリング';
$strProtocolVersion = 'プロトコルバージョン';
$strPutColNames = '1 行目にフィールド名を追加する';

$strQBEDel = '削除';
$strQBEIns = '挿入';
$strQBE = 'クエリ';
$strQueryCache = 'クエリキャッシュ';
$strQueryFrame = 'クエリウィンドウ';
$strQueryOnDb = 'データベース <b>%s</b> のSQL:';
$strQueryResultsOperations = 'クエリ結果操作';
$strQuerySQLHistory = 'SQL 履歴';
$strQueryStatistics = '<b>クエリ統計</b>: 起動時から数えて %s 個のクエリをサーバに送信しました';
$strQueryTime = 'クエリの実行時間 %01.4f 秒';
$strQueryType = 'クエリ種別';
$strQueryWindowLock = '他のウィンドウからクエリを上書きすることはできません';

$strReadRequests = '読み込みリクエスト数';
$strReceived = '受信済';
$strRecommended = '推奨';
$strRecords = 'レコード数';
$strReferentialIntegrity = '参照整合性の確認:';
$strRefresh = '再描画';
$strRelationalSchema = 'リレーショナルスキーマ';
$strRelationDeleted = 'リレーションを削除しました';
$strRelationNotWorking = 'リンクテーブルを処理するための追加機能が無効になっています。理由については%sこちら%sをご覧ください';
$strRelations = 'リレーション';
$strRelationsForTable = 'RELATIONS FOR TABLE';
$strRelationView = 'リレーションビュー';
$strReload = 'リロード';
$strReloadingThePrivileges = '特権をリロードしています';
$strReloadPrivileges = '特権をリロードする';
$strRemoveSelectedUsers = '選択したユーザを削除する';
$strRenameDatabaseOK = 'データベース %s を %s にリネームしました';
$strRenameTable = 'リネーム後のテーブル名';
$strRenameTableOK = 'テーブル %s を %s にリネームしました';
$strRepairTable = 'テーブルを修復する';
$strReplaceNULLBy = 'NULL の代替文字列';
$strReplaceTable = 'テーブルデータを差し替えるファイル';
$strReplication = 'レプリケーション';
$strReset = 'リセット';
$strResourceLimits = 'リソースの制限';
$strRestartInsertion = '%s 行から挿入を再開する';
$strReType = 'もう一度入力してください';
$strRevokeAndDelete = '特権をすべて取り消してユーザを削除する';
$strRevokeAndDeleteDescr = 'USAGE 特権については特権をリロードするまで残ります';
$strRevokeMessage = '%s の特権を取り消しました';
$strRevoke = '取り消し';
$strRomanian = 'ルーマニア語';
$strRoutineReturnType = '返り値の種類';
$strRoutines = 'ルーチン';
$strRowLength = '行の長さ';
$strRows = '行';
$strRowsFrom = '開始行';
$strRowSize = ' 行のサイズ ';
$strRowsModeFlippedHorizontal = '水平 (ヘッダも回転)';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = 'モード: %s (%s セルごとにヘッダを表示)';
$strRowsModeVertical = '垂直';
$strRowsStatistic = '行の統計';
$strRunning = '実行環境: %s';
$strRunQuery = 'クエリを実行する';
$strRunSQLQuery = 'データベース %s 上でクエリを実行する';
$strRunSQLQueryOnServer = 'サーバ %s 上でクエリを実行する';
$strRussian = 'ロシア語';

$strSave = '保存する';
$strSaveOnServer = 'サーバ上のディレクトリ %s に保存する';
$strSavePosition = '位置を保存';
$strScaleFactorSmall = '倍率が小さすぎるためスキーマが 1 ページに収まりません';
$strSearchFormTitle = 'データベース内検索';
$strSearchInTables = 'テーブル内検索:';
$strSearchNeedle = '検索する単語や値 (ワイルドカード: "%"):';
$strSearchOption1 = 'いずれかの単語を含む';
$strSearchOption2 = 'すべての単語を含む';
$strSearchOption3 = '完全一致';
$strSearchOption4 = '正規表現';
$strSearchResultsFor = '"<i>%s</i>" の検索結果 %s:';
$strSearchType = '検索条件:';
$strSearch = '検索';
$strSecretRequired = '設定ファイルが秘密のパスフレーズ (blowfish_secret) を必要とするようになりました';
$strSelectADb = 'データベースを選択してください';
$strSelectAll = '全選択';
$strSelectBinaryLog = '表示するバイナリログを選択してください';
$strSelectFields = 'フィールドを選択してください(最低1つ):';
$strSelectForeignKey = '外部キーを選択してください';
$strSelectNumRows = '行/クエリ';
$strSelectReferencedKey = '参照されているキーを選択';
$strSelectTables = 'テーブルを選択してください';
$strSend = 'ファイルに保存する';
$strSent = '送信済';
$strServerChoice = 'サーバの選択';
$strServerNotResponding = 'サーバが応答しません';
$strServer = 'サーバ';
$strServers = 'サーバ';
$strServerStatusDelayedInserts = '遅延インサート';
$strServerStatus = 'ランタイム情報';
$strServerStatusUptime = 'この MySQL サーバの稼働時間: %s (起動時刻: %s)';
$strServerTabVariables = '変数';
$strServerTrafficNotes = '<b>サーバトラフィック</b>: これらの表は MySQL サーバ起動以後のネットワークトラフィックの統計です';
$strServerVars = 'サーバ変数と設定値';
$strServerVersion = 'サーバのバージョン';
$strSessionStartupErrorGeneral = 'エラーが出たためセッションを開始できませんでした。PHP やウェブサーバのログファイルに出ているエラーを確認して、PHP を正しく設定してください。';
$strSessionValue = 'セッション値';
$strSetEnumVal = 'フィールド種別が「enum」ないし「set」の場合の値の書式: \'a\',\'b\',\'c\'...<br />バックスラッシュ("\")やシングルクォート("\'")を含める必要がある場合は ( \\\\xyz や a\\\'b のように) その前にバックスラッシュを付けてください';
$strShowAll = 'すべて表示';
$strShowColor = '色表示';
$strShowDatadictAs = 'データ辞書形式';
$strShow = '表示';
$strShowFullQueries = 'クエリ全体を表示';
$strShowGrid = 'グリッドを表示';
$strShowHideLeftMenu = '左側のメニューを表示する/隠す';
$strShowingBookmark = '表示中のブックマーク';
$strShowingPhp = 'PHP コードとして表示';
$strShowingRecords = '表示中の列';
$strShowingSQL = 'SQL クエリを表示';
$strShowOpenTables = '開いているテーブルを表示する';
$strShowPHPInfo = 'PHP 情報';
$strShowSlaveHosts = 'スレーブホストを表示する';
$strShowSlaveStatus = 'スレーブの状態を表示する';
$strShowStatusBinlog_cache_disk_useDescr = '一時バイナリログキャッシュを利用したものの binlog_cache_size の値を超過したため一時ファイルにステートメントを保存したトランザクション数';
$strShowStatusBinlog_cache_useDescr = '一時バイナリログキャッシュを使用したトランザクション数';
$strShowStatusCreated_tmp_disk_tablesDescr = 'ステートメント実行中にサーバがディスク上に自動生成した一時テーブル数。Created_tmp_disk_tables の値が大きい場合は tmp_table_size の値を増やしてディスク上ではなくメモリ上に一時テーブルを構築した方がよいかもしれません';
$strShowStatusCreated_tmp_filesDescr = 'mysqld が生成した一時ファイル数';
$strShowStatusCreated_tmp_tablesDescr = 'ステートメント実行中にサーバが自動生成したメモリ上の一時テーブル数';
$strShowStatusDelayed_errorsDescr = '何らかのエラー (たぶんキーの重複) が発生したため INSERT DELAYED された行数';
$strShowStatusDelayed_insert_threadsDescr = '使用中の INSERT DELAYED ハンドラのスレッド数。INSERT DELAYED を適用するテーブルの数だけ固有のスレッドが用意されます';
$strShowStatusDelayed_writesDescr = 'INSERT DELAYED で書き込まれた行数';
$strShowStatusFlush_commandsDescr  = 'FLUSH 文の実行回数';
$strShowStatusHandler_commitDescr = '内部で COMMIT 文を実行した回数';
$strShowStatusHandler_deleteDescr = 'テーブルから行を削除した回数';
$strShowStatusHandler_discoverDescr = 'MySQL サーバは NDB クラスタストレージエンジンに特定の名前を持つテーブルについての情報を持っているか問い合わせることができます。これを開示と言いますが、Handler_discover はその開示されたタイムテーブルの数です';
$strShowStatusHandler_read_firstDescr = 'インデックスの最初のエントリを読み込んだ回数。この値が高い場合はサーバが何度もインデックスのフルスキャンを実行しているものと思われます。例えば SELECT col1 FROM foo を実行した場合 (col1 はインデックスに含まれているものとします)';
$strShowStatusHandler_read_keyDescr = 'キーに基づいて行を読み込んだリクエストの数。この値が高い場合はクエリとテーブルが適切にインデックスされているものと考えられます';
$strShowStatusHandler_read_nextDescr = 'キーの順序通りに次の行を読み込んだリクエストの数。この値はインデックス列のクエリに範囲指定をしているか、インデックススキャンを行っているときに増加します';
$strShowStatusHandler_read_prevDescr = 'キーの順序通りに前の行を読み込んだリクエストの数。この読み込みは主に ORDER BY ... DESC の最適化に利用されます';
$strShowStatusHandler_read_rndDescr = '決まった位置を基準に行を読み込んだリクエストの数。この値が高いのは結果をソートする必要があるクエリを大量に実行している場合です。おそらくテーブル全体をスキャンしなければならないクエリを大量に行っているか、結合の際のキーの使い方に不適切なところがあります';
$strShowStatusHandler_read_rnd_nextDescr = 'データファイルの次の行を読み込んだリクエストの数。この値が高いのはテーブルスキャンを大量に実行しているためです。一般にこれはテーブルのインデックスが不適切か、クエリがインデックスを利用するように書かれていないことを意味します';
$strShowStatusHandler_rollbackDescr = '内部で ROLLBACK 文を実行した回数';
$strShowStatusHandler_updateDescr = 'テーブル内の行を更新したリクエストの数';
$strShowStatusHandler_writeDescr = 'テーブル内に行を挿入したリクエストの数';
$strShowStatusInnodb_buffer_pool_pages_dataDescr = 'データが含まれるページの数 (ダーティページ、クリーンページの別を問わず)';
$strShowStatusInnodb_buffer_pool_pages_dirtyDescr = '現在のダーティページの数';
$strShowStatusInnodb_buffer_pool_pages_flushedDescr = 'フラッシュリクエストを受けたバッファプールのページ数';
$strShowStatusInnodb_buffer_pool_pages_freeDescr = '空きページ数';
$strShowStatusInnodb_buffer_pool_pages_latchedDescr = 'InnoDBバッファプールでラッチされているページ数。これは現在読み込んでいる、あるいは書き込んでいるページ、あるいは他の何らかの理由でフラッシュしたり削除したりできなくなっているページの数です';
$strShowStatusInnodb_buffer_pool_pages_miscDescr = '行ロックやアダプティブハッシュインデックスといった管理オーバヘッドのせいでビジーになっているページ数。この値はInnodb_buffer_pool_pages_total - Innodb_buffer_pool_pages_free - Innodb_buffer_pool_pages_dataという式でも計算できます';
$strShowStatusInnodb_buffer_pool_pages_totalDescr = 'ページのバッファプールサイズの合計';
$strShowStatusInnodb_buffer_pool_read_ahead_rndDescr = 'InnoDBが開始したランダム読み込みの回数。これはクエリがテーブルの大部分をランダムな順番でスキャンするときに発生します';
$strShowStatusInnodb_buffer_pool_read_ahead_seqDescr = 'InnoDBが開始したシーケンシャル読み込みの回数。これはInnoDBがシーケンシャルなフルテーブルスキャンを行うときに発生します';
$strShowStatusInnodb_buffer_pool_read_requestsDescr = 'InnoDB が実行した論理読み込みリクエストの数';
$strShowStatusInnodb_buffer_pool_readsDescr = 'InnoDB がバッファプールの内容を利用できず、シングルページ読み込みを行わなければならなかった論理読み込みの回数';
$strShowStatusInnodb_buffer_pool_wait_freeDescr = '通常 InnoDB バッファプールへの書き込みはバックグラウンドで行われますが、ページの読み込みないし作成を行う必要があるのにクリーンなページが得られない場合は、まずそのページがフラッシュされるのを待つ必要があります。このカウンタは、そのウェイトの回数をカウントするものです。バッファプールの値が適切に設定されていれば、この値は小さいはずです';
$strShowStatusInnodb_buffer_pool_write_requestsDescr = 'InnoDB バッファプールへの書き込み回数';
$strShowStatusInnodb_data_fsyncsDescr = 'これまでに fsync() を実行した回数';
$strShowStatusInnodb_data_pending_fsyncsDescr = '現在保留されている fsync() の回数';
$strShowStatusInnodb_data_pending_readsDescr = '現在保留されている読み込みの数';
$strShowStatusInnodb_data_pending_writesDescr = '現在保留されている書き込みの数';
$strShowStatusInnodb_data_readDescr = 'これまでのデータ読み込み量 (単位:バイト)';
$strShowStatusInnodb_data_readsDescr = 'データ読み込み回数の合計';
$strShowStatusInnodb_data_writesDescr = 'データ書き込み回数の合計';
$strShowStatusInnodb_data_writtenDescr = 'これまでのデータの書き込み量 (単位:バイト)';
$strShowStatusInnodb_dblwr_pages_writtenDescr = '二重書き込みの実行回数と二重書き込みが発生したページ数';
$strShowStatusInnodb_dblwr_writesDescr = '二重書き込みの実行回数と二重書き込みが発生したページ数';
$strShowStatusInnodb_log_waitsDescr = 'ログバッファが小さすぎてフラッシュしないと作業を続行できなくなったために発生したウェイトの回数';
$strShowStatusInnodb_log_write_requestsDescr = 'ログ書き込みリクエストの数';
$strShowStatusInnodb_log_writesDescr = 'ログファイルへの物理書き込みの回数';
$strShowStatusInnodb_os_log_fsyncsDescr = 'ログファイルへの fsync 書き込みの回数';
$strShowStatusInnodb_os_log_pending_fsyncsDescr = '保留中のログファイルへの fsync 回数';
$strShowStatusInnodb_os_log_pending_writesDescr = '保留中のログファイルへの書き込み回数';
$strShowStatusInnodb_os_log_writtenDescr = 'ログファイルに書き込んだバイト数';
$strShowStatusInnodb_pages_createdDescr = '作成されたページ数';
$strShowStatusInnodb_page_sizeDescr = 'コンパイル時の InnoDB のページサイズ (デフォルト:16KB)。多くの値がページ単位で計算されますが、この値を使えば簡単にバイト単位に変換できます';
$strShowStatusInnodb_pages_readDescr = '読み込んだページ数';
$strShowStatusInnodb_pages_writtenDescr = '書き込んだページ数';
$strShowStatusInnodb_row_lock_current_waitsDescr = '現在待機中の行ロックの数';
$strShowStatusInnodb_row_lock_time_avgDescr = '行ロック取得に要する平均時間 (単位:ミリ秒)';
$strShowStatusInnodb_row_lock_timeDescr = '行ロック取得に要した時間の合計 (単位:ミリ秒)';
$strShowStatusInnodb_row_lock_time_maxDescr = '行ロック取得に要した時間の最大値 (単位:ミリ秒)';
$strShowStatusInnodb_row_lock_waitsDescr = '行ロック取得時に待機した回数';
$strShowStatusInnodb_rows_deletedDescr = 'InnoDB テーブルから削除した行数';
$strShowStatusInnodb_rows_insertedDescr = 'InnoDB テーブルに挿入した行数';
$strShowStatusInnodb_rows_readDescr = 'InnoDB テーブルから読み込んだ行数';
$strShowStatusInnodb_rows_updatedDescr = 'InnoDB テーブルで更新された行数';
$strShowStatusKey_blocks_not_flushedDescr = '変更されてからディスクにフラッシュされていないキーキャッシュのキーブロックの数。以前は Not_flushed_key_blocks でした';
$strShowStatusKey_blocks_unusedDescr = 'キーキャッシュの未使用ブロックの数。キーキャッシュの使用率を調べるときに使えます';
$strShowStatusKey_blocks_usedDescr = 'キーキャッシュの使用済みブロックの数。この値はこれまで一度に使用されたブロックの最大数です';
$strShowStatusKey_read_requestsDescr = 'キャッシュからキーブロックを読み込んだリクエストの数';
$strShowStatusKey_readsDescr = 'ディスクからキーブロックを物理読み込みした回数。Key_reads が大きいのはおそらく key_buffer_size が小さすぎるためです。キャッシュミスの割合は Key_reads/Key_read_requests で計算できます';
$strShowStatusKey_write_requestsDescr = 'キャッシュにキーブロックを書き込んだリクエストの数';
$strShowStatusKey_writesDescr = 'ディスクにキーブロックを物理書き込みした回数';
$strShowStatusLast_query_costDescr = 'クエリオプティマイザーの計算による、最後にコンパイルされたクエリの総コスト。クエリのプランを変えたときにコストがどう変わるか比較するときに便利です。デフォルト値の 0 はまだ一度もクエリをコンパイルしていないという意味です';
$strShowStatusNot_flushed_delayed_rowsDescr = 'INSERT DELAYED キューの中で書き込まれるのを待っている行数';
$strShowStatusOpened_tablesDescr = '開いているテーブルの数。開いているテーブルが多い場合はおそらくテーブルキャッシュの値が小さすぎます';
$strShowStatusOpen_filesDescr = '開いているファイルの数';
$strShowStatusOpen_streamsDescr = '開いているストリームの数 (主にログの記録用です)';
$strShowStatusOpen_tablesDescr = '開いているテーブルの数';
$strShowStatusQcache_free_blocksDescr = 'クエリキャッシュ内の空きメモリブロックの数';
$strShowStatusQcache_free_memoryDescr = 'クエリキャッシュの空きメモリ量';
$strShowStatusQcache_hitsDescr = 'キャッシュのヒット数';
$strShowStatusQcache_insertsDescr = 'キャッシュに追加されたクエリの数';
$strShowStatusQcache_lowmem_prunesDescr = '新しいクエリをキャッシュするためにメモリを解放するべくキャッシュから削除されたクエリの数。この情報はクエリキャッシュのサイズを調整するときに便利です。クエリキャッシュは最後に使われた時刻が最も古いものから削除する(LRU)戦略に従って削除するクエリを決めます';
$strShowStatusQcache_not_cachedDescr = 'キャッシュされなかった (キャッシュできないか query_cache_type の設定でキャッシュしないことになっている) クエリの数';
$strShowStatusQcache_queries_in_cacheDescr = 'キャッシュに登録されているクエリの数';
$strShowStatusQcache_total_blocksDescr = 'クエリキャッシュの総ブロック数';
$strShowStatusReset = 'リセット';
$strShowStatusRpl_statusDescr = 'フェイルセーフレプリケーションの状態 (未実装)';
$strShowStatusSelect_full_joinDescr = 'インデックスを利用しなかった結合の数。この値が 0 でない場合はテーブルのインデックスをよく確認してください';
$strShowStatusSelect_full_range_joinDescr = '参照テーブルで範囲検索をした結合の数';
$strShowStatusSelect_range_checkDescr = 'キーが指定されていなかったため一行ずつキーが使われているか確認した結合の数（0 でない場合はテーブルのインデックスをよく確認してください）';
$strShowStatusSelect_rangeDescr = '最初のテーブルで範囲指定された結合の数 (この値は大きくてもふつう問題ありません)';
$strShowStatusSelect_scanDescr = '最初のテーブルをフルスキャンした結合の数';
$strShowStatusSlave_open_temp_tablesDescr = 'スレーブの SQL スレッドが現在開いている一時テーブルの数';
$strShowStatusSlave_retried_transactionsDescr = 'レプリケーションスレーブの SQL スレッドがトランザクションを再試行した回数(起動時からの合計)';
$strShowStatusSlave_runningDescr = 'このサーバがマスターに接続するスレーブである場合は ON になります';
$strShowStatusSlow_launch_threadsDescr = 'slow_launch_time で指定された秒数以上に作成時間がかかったスレッドの数';
$strShowStatusSlow_queriesDescr = 'long_query_time で指定された秒数以上に時間のかかったクエリの数';
$strShowStatusSort_merge_passesDescr = 'ソートアルゴリズムが実行しなければならなかったマージの回数。この値が高い場合は sort_buffer_size システム変数の値を増やした方がよいでしょう';
$strShowStatusSort_rangeDescr = '範囲指定付きでソートが行われた回数';
$strShowStatusSort_rowsDescr = 'ソート済の行数';
$strShowStatusSort_scanDescr = 'テーブルをスキャンしたときに実行されたソートの回数';
$strShowStatusTable_locks_immediateDescr = 'テーブルロックをすぐに取得できた回数';
$strShowStatusTable_locks_waitedDescr = 'テーブルロックをすぐに取得できずウェイトが発生した回数。この値が高く、パフォーマンスに問題が生じている場合は、まずクエリを最適化してください。それでもだめならテーブルを分割するか、レプリケーションを利用してください';
$strShowStatusThreads_cachedDescr = 'スレッドキャッシュ内のスレッド数。キャッシュのヒット率は Threads_created/Connections で計算できます。この値が赤くなっている場合は thread_cache_size を大きくしてください';
$strShowStatusThreads_connectedDescr = '現在開いている接続の数';
$strShowStatusThreads_createdDescr = '接続処理のために作成されたスレッドの数。Threads_created が大きい場合は thread_cache_size の値を増やした方がよいかもしれません (スレッドの実装に問題がない場合はふつうあまりパフォーマンスは向上しません)';
$strShowStatusThreads_runningDescr = 'スリープしていないスレッドの数';
$strShowTableDimension = 'テーブルの大きさを表示する';
$strShowTables = 'テーブルを表示する';
$strShowThisQuery = ' 実行したクエリをここに表示する';
$strSimplifiedChinese = '簡体字中国語';
$strSingly = '(1 回)';
$strSize = 'サイズ';
$strSkipQueries = '先頭から数えたスキップするレコード(クエリ)の数';
$strSlovak = 'スロバキア語';
$strSlovenian = 'スロベニア語';
$strSmallBigAll = 'すべてを大きく/小さく';
$strSnapToGrid = 'グリッドにあわせる';
$strSocketProblem = '(あるいはローカルの MySQL サーバのソケットが正しく設定されていません)';
$strSortByKey = 'キーでソート';
$strSorting = 'ソート中';
$strSort = 'ソート';
$strSpaceUsage = 'ディスク使用量';
$strSpanish = 'スペイン語';
$strSplitWordsWithSpace = '各単語は空白文字(" ")で区切ってください';
$strSQLCompatibility = 'SQL互換モード';
$strSQLExportType = 'エクスポート形式';
$strSQLParserBugMessage = 'SQL パーサにバグが見つかることもありえますが、まずはクエリをよく見て引用符の数や種類に間違いがないか確認してください。クォートされていないテキスト領域にバイナリファイルをアップロードしたからクエリが失敗したということもありえます。MySQL のコマンドラインインタフェースを利用してクエリを実行してみてもよいでしょう。下に MySQL サーバのエラー出力が出ているようなら問題の解析に役立つかもしれません。それでも解決しないか、コマンドラインでは成功するのにパーサでは失敗する場合は、SQL クエリの入力データを実際に問題を起こしているクエリひとつに絞り込んでから、以下の「CUT」セクションにデータを添えてバグ報告を送ってください:';
$strSQLParserUserError = 'SQL にエラーがあるようです。下に MySQL サーバのエラー出力が出ているようなら問題の解析に役立つかもしれません';
$strSQLQuery = '実行した SQL';
$strSQLResult = 'SQL の結果';
$strSQL = 'SQL';
$strSQPBugInvalidIdentifer = '不正な識別子です';
$strSQPBugUnclosedQuote = '引用符が閉じていません';
$strSQPBugUnknownPunctuation = '無効な句読点文字です';
$strStandInStructureForView = 'ビュー用の代替構造';
$strStatCheckTime = '最終検査';
$strStatCreateTime = '作成日時';
$strStatement = 'ステートメント';
$strStatisticsOverrun = '処理が集中するサーバではバイトカウンタが超過することがあるため、MySQL サーバが報告してくる統計は不正確なことがあります';
$strStatUpdateTime = '最終更新';
$strStatus = '状態';
$strStorageEngine = 'ストレージエンジン';
$strStorageEngines = 'ストレージエンジン';
$strStrucCSV = 'CSV データ';
$strStrucData = '構造とデータ';
$strStrucExcelCSV = 'MS Excel 用の CSV';
$strStrucNativeExcel = 'MS Excel のネイティブ形式';
$strStrucOnly = '構造のみ';
$strStructPropose = 'テーブル構造を確認する';
$strStructure = '構造';
$strStructureForView = 'ビュー用の構造';
$strSubmit = '実行する';
$strSuccess = 'SQL は正常に実行されました';
$strSum = '合計';
$strSwedish = 'スウェーデン語';
$strSwitchToDatabase = 'コピーしたデータベースに切り替える';
$strSwitchToTable = 'コピーしたテーブルに切り替える';

$strTable = 'テーブル';
$strTableAlreadyExists = 'テーブル %s は既に存在します!';
$strTableComments = 'テーブルのコメント';
$strTableEmpty = 'テーブル名が空です!';
$strTableHasBeenDropped = 'テーブル %s を削除しました';
$strTableHasBeenEmptied = 'テーブル %s を空にしました';
$strTableHasBeenFlushed = 'テーブル %s をフラッシュしました';
$strTableIsEmpty = 'テーブルが空のようです!';
$strTableMaintenance = 'テーブル管理';
$strTableName = 'テーブル名';
$strTableOfContents = 'テーブルの内容';
$strTableOptions = 'テーブルオプション';
$strTables = '%s テーブル';
$strTableStructure = 'テーブルの構造';
$strTakeIt = 'これにする';
$strTblPrivileges = 'テーブル固有の特権';
$strTempData = '一時データ';
$strTextAreaLength = ' 長さによってはこのフィールドを<br /> 修正できなくなる場合もあります';
$strThai = 'タイ語';
$strTheme = 'テーマ / スタイル';
$strThemeDefaultNotFound = 'デフォルトテーマ %s が見つかりません!';
$strThemeNoPreviewAvailable = 'プレビューは利用できません';
$strThemeNotFound = 'テーマ %s が見つかりません!';
$strThemeNoValidImgPath = 'テーマ %s の画像パスが無効です!';
$strThemePathNotFound = 'テーマ %s のテーマパスが見つかりません!';
$strThisHost = 'このホスト';
$strThreads = 'スレッド';
$strThreadSuccessfullyKilled = 'スレッド %s は正常終了しました';
$strTimeoutInfo = '直前のインポートはタイムアウトしました。再送信すると位置 %d から再開されます';
$strTimeoutNothingParsed = 'ただし、最後に実行したときはまったくデータを解析できませんでした。ふつうは PHP の時間制限を伸ばさない限りこのデータのインポートはできません';
$strTimeoutPassed = 'スクリプトがタイムアウトしました。インポートを完了させたいのであれば同じファイルを再送信すればインポートが再開されます';
$strTime = '時間';
$strToFromPage = '開始/終了ページ';
$strToggleScratchboard = 'スクラッチボードを切り替える';
$strToggleSmallBig = '大小を切り替える';
$strToSelectRelation = 'リレーションを選択します:';
$strTotal = '合計';
$strTotalUC = '合計';
$strTraditionalChinese = '繁体字中国語';
$strTraditionalSpanish = 'スペイン語 (伝統表記)';
$strTraffic = 'トラフィック';
$strTransactionCoordinator = 'トランザクションコーディネータ';
$strTransformation_application_octetstream__download = 'フィールドのバイナリデータをダウンロードするリンクを表示します。1 つ目のオプションにバイナリファイルのファイル名を指定することもできますし、2 つ目のオプションにファイル名を保持しているフィールドの名前を渡すこともできます。2 つ目のオプションを使う場合は 1 つ目のオプションは空文字列にする必要があります';
$strTransformation_application_octetstream__hex = 'データを 16 進数で表記します。オプションとして最初のパラメータにスペースを追加する頻度を指定することもできます (デフォルトは 2 ニブルごとです)';
$strTransformation_image_jpeg__inline = 'クリック可能なサムネイルを表示します; オプションとして幅と高さの最大値をピクセル単位で指定できます。アスペクト比はそのまま維持されます';
$strTransformation_image_jpeg__link = 'この画像をダウンロードするためのリンクを表示します';
$strTransformation_image_png__inline = 'image/jpeg: inlineをご覧ください';
$strTransformation_text_plain__dateformat = 'TIME、TIMESTAMP、DATETIME、あるいはUnixタイムスタンプの値が入っているフィールドを書式にあわせて表示します。1 つ目のオプションはタイムスタンプに加算する時差です(デフォルト: 0)。2 つ目のオプションには日時の書式文字列を指定します。3 つ目のオプションはローカルの日時とみなすか UTC とみなすかです ("local"ないし"utc"という文字列を指定してください)。この値によって日時の表記が変わります。"local" の場合は PHP の strftime() 関数の説明をご覧ください。"utc" の場合は gmdate() を利用します'; // XXX replaced
$strTransformation_text_plain__external = 'LINUX のみ: 外部アプリケーションを起動して標準入力経由でフィールドデータを渡します。アプリケーションの標準出力が返ります。デフォルトは Tidy です (これは HTML コードを綺麗にするためのものです)。セキュリティ上の理由から libraries/transformations/text_plain__external.inc.php を自分で編集して利用したいツールを明記しておく必要があります。最初のオプションは利用したいプログラムの数で、2 つ目のオプションはプログラムのパラメータです。3 つ目のオプションが 1 に設定されている場合は htmlspecialchars() を用いて出力を変換します(デフォルトは 1 です)。4 つ目のオプションが 1 に設定されている場合は禁則処理をせず出力全体が 1 行に収まるようにします (デフォルトは 1 です)';
$strTransformation_text_plain__formatted = 'フィールドの内容をそのまま、htmlspecialchars()を通さずに表示します。この場合、フィールドには正しい HTML が含まれているものと仮定します';
$strTransformation_text_plain__imagelink = '画像とリンクを表示します。フィールドにはファイル名を入れてください。1 つ目のオプションは "http://domain.com/" のようなURLの先頭部分です。2 つ目と3 つ目のオプションには幅と高さをピクセル単位で指定します';
$strTransformation_text_plain__link = 'リンクを表示します。フィールドにはファイル名を入れてください。1 つ目のオプションは "http://domain.com/" のような URL の先頭部分、2 つ目のオプションはリンクのタイトルです';
$strTransformation_text_plain__sql = 'テキストの内容を SQL クエリとみなし、構文ハイライト表示します';
$strTransformation_text_plain__substr = '文字列の一部のみを表示します。1 つ目のオプションは文字列の先頭から何文字スキップするか (デフォルトは 0 です)、2 つ目のオプションは表示するテキストの文字数です (デフォルトは文字列の末尾までです)。3 つ目のオプションは文字列を切り詰めるときに前／後に補う省略記号です (デフォルトは ... です)';
$strTriggers = 'トリガ';
$strTruncateQueries = 'クエリの表示を切り詰める';
$strTurkish = 'トルコ語';
$strType = '種別';

$strUkrainian = 'ウクライナ語';
$strUncheckAll = 'すべてのチェックを外す';
$strUnicode = 'UNICODE';
$strUnique = 'ユニーク';
$strUnknown = '不明';
$strUnselectAll = '全選択解除';
$strUnsupportedCompressionDetected = 'サポートされていない圧縮形式(%s)のファイルをロードしようとしました。この形式はサポートされていないか設定で無効にされています';
$strUpdatePrivMessage = '%s の特権を更新しました';
$strUpdateProfileMessage = 'プロファイルを更新しました';
$strUpdateQuery = 'クエリを更新する';
$strUpdComTab = 'column_comments テーブルの更新方法についてはドキュメントをご覧ください';
$strUpgrade = '%s を %s 以降にアップグレードしてください';
$strUploadErrorCantWrite = 'ファイルをディスクに書き込めません。';
$strUploadErrorExtension = '拡張のせいでファイルのアップロードが中断されました。';
$strUploadErrorFormSize = 'アップロードしたファイルは HTML フォームに指定されている MAX_FILE_SIZE ディレクティブの値を超えています。';
$strUploadErrorIniSize = 'アップロードしたファイルは php.ini に指定されている upload_max_filesize ディレクティブの値を超えています。';
$strUploadErrorNoTempDir = '一時フォルダが見つかりません。';
$strUploadErrorPartial = 'アップロードしたファイルは一部分しかアップロードできませんでした。';
$strUploadErrorUnknown = 'ファイルのアップロード中に予期しないエラーが発生しました。';
$strUploadLimit = 'アップロードしようとしたファイルが大きすぎるようです。対策については %sドキュメント%s をご覧ください';
$strUploadsNotAllowed = 'このサーバではファイルのアップロードはできません';
$strUsage = '使用量';
$strUseBackquotes = 'テーブル名やフィールド名を逆クォートで囲む';
$strUsedPhpExtensions = '使用中の PHP 拡張';
$strUseHostTable = 'ホストテーブルを使う';
$strUser = 'ユーザ';
$strUserAlreadyExists = 'ユーザ %s は既に存在します!';
$strUserEmpty = 'ユーザ名が空です!';
$strUserName = 'ユーザ名';
$strUserNotFound = '特権テーブルには選択したユーザがいません';
$strUserOverview = 'ユーザ概略';
$strUsersDeleted = '選択したユーザを正しく削除しました';
$strUsersHavingAccessToDb = '&quot;%s&quot; にアクセスできるユーザ';
$strUseTabKey = '次の値に移動するときは TAB キーを使ってください。CTRL＋カーソルキーを使うと自由に移動できます';
$strUseTables = '利用するテーブル';
$strUseTextField = 'テキストフィールドの値を利用する';
$strUseThisValue = 'この値を利用する';

$strValidateSQL = 'SQL の検証';
$strValidatorError = 'SQL の検証機能を初期化できません。%sドキュメント%s の記載通りに必要な PHP 拡張がインストールされているか確認してください';
$strValue = '値';
$strVar = '変数';
$strVersionInformation = 'バージョン情報';
$strViewDump = 'テーブルのダンプ(スキーマ)表示';
$strViewDumpDatabases = 'データベースのダンプ(スキーマ)表示';
$strViewDumpDB = 'DB のダンプ(スキーマ)表示';
$strViewHasBeenDropped = 'ビュー %s を破棄しました';
$strViewMaxExactCount = 'ビューの行数が %s を越えました。%sドキュメント%s をご覧ください';
$strViewName = 'VIEW の名前';
$strView = 'ビュー';

$strWebServerUploadDirectoryError = '指定したアップロードディレクトリが利用できません';
$strWebServerUploadDirectory = 'ウェブサーバ上のアップロードディレクトリ';
$strWelcome = '%s へようこそ';
$strWestEuropean = '西ヨーロッパ言語';
$strWildcard = 'ワイルドカード';
$strWindowNotFound = 'ターゲットとなるブラウザウィンドウを更新できませんでした。親ウィンドウを閉じたか、ブラウザのセキュリティ設定でクロスウィンドウの更新をブロックしているものと思われます';
$strWithChecked = 'チェックしたものを:';
$strWriteRequests = '書き込みリクエスト数';
$strWrongUser = 'ユーザ名ないしパスワードが間違っています。<br />アクセスは拒否されました';

$strXkana = '全角カナへ変換する'; // convert to X208-kana
$strXML = 'XML';

$strYes = 'はい';

$strZeroRemovesTheLimit = '注意: オプションを 0 (ゼロ)に設定すると制限を解除します';
$strZip = '"zip 形式"';

$strSuhosin = 'Suhosin が組み込まれているため問題が発生する可能性があります。詳しくは %sdocumentation%s をご覧ください。';  
?>

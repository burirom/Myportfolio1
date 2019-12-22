<?php
//require_once("../../lib/util.php");
//$gobackURL = "insertform.html";

// データベースユーザ
$user = 'root';
$password = 'root';
// 利用するデータベース
$dbName = 'construction';
// MySQLサーバ
$host = 'localhost:3306';
// MySQLのDSN文字列
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
//MySQLデータベースに接続する
try {
	$pdo = new PDO($dsn, $user, $password);
	// プリペアドステートメントのエミュレーションを無効にする
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	// 例外がスローされる設定にする
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// エリアテーブルからエリアIDとエリア名を取り出す
	$sql1 = "SELECT area_id,area FROM area_mst";
	// 年度テーブルから年度IDと年度名を取り出す
	$sql2 = "SELECT year_id,year FROM year_mst";
	// プリペアドステートメントを作る
	$stm1 = $pdo->prepare($sql1);
	// SQLクエリを実行する
	$stm1->execute();
	// 結果の取得（連想配列で受け取る）
	$area = $stm1->fetchAll(PDO::FETCH_ASSOC);
	
	// プリペアドステートメントを作る
	$stm2 = $pdo->prepare($sql2);
	// SQLクエリを実行する
	$stm2->execute();
	// 結果の取得（連想配列で受け取る）
	$year = $stm2->fetchAll(PDO::FETCH_ASSOC);
	
} catch (Exception $e) {
	$err =  '<span class="error">エラーがありました。</span><br>';
	$err .= $e->getMessage();
	exit($err);
}
?>





<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>kumashiro</title>
	<!-- Bootstrap CSS File -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<!-- Google Fonts -->
	<link
		  href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700"
		  rel="stylesheet"
		  />
	<link
		  href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
		  rel="stylesheet"
		  />


	

	<!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet" />
</head>
	<body  data-spy="scroll" data-offset="64" data-target="#section-topbar">

		<div id="section-topbar">
			<div id="topbar-inner">
				<div class="container">
					<div class="row">
						<nav class="navbar navbar-expand-lg">
							<button
									class="navbar-toggler"
									type="button"
									data-toggle="collapse"
									data-target="#navbarToggler"
									aria-controls="navbarToggler"
									aria-expanded="false"
									>
								<span class="navbar-toggler-icon"></span>
							</button>
							<div
								 class="collapse navbar-collapse"
								 id="navbarToggler"
								 >
								<ul id="nav" class="navbar-nav">
									<li class="nav-item">
										<a
										   class="nav-link"
										   href="index.html"
										   title="About"
										   >トップ</a
											>
									</li>
									<li class="nav-item">
										<div class="btn-group">
											<div class="dropdown">
												<a
												   class="smothscroll nav-link dropdown-toggle"
												   data-toggle="dropdown"
												   title="Contact"
												   role="button"
												   aria-haspopup="true"
												   aria-expanded="false"
												   >会社案内</a
													>
												<div class="dropdown-menu">
													<a
													   href="company.html"
													   class="dropdown-item"
													   >会社案内</a
														>
													<a
													   href="construction.html"
													   class="dropdown-item"
													   >施工実績</a
														>
													<a
													   href="location.html"
													   class="dropdown-item"
													   >本支店所在地</a
														>
													<a
													   href="recruit.html"
													   class="dropdown-item"
													   >採用情報</a
														>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item">
										<a
										   class="smothscroll nav-link"
										   href="contact.html"
										   title="Contact"
										   >問い合わせ</a
											>
									</li>

									<li class="nav-item">
										<div class="btn-group">
											<div class="dropdown">
												<a
												   class="smothscroll nav-link dropdown-toggle"
												   data-toggle="dropdown"
												   title="Contact"
												   role="button"
												   aria-haspopup="true"
												   aria-expanded="false"
												   >関連サイト</a
													>
												<div class="dropdown-menu">
													<a
													   href="https://www.youtube.com/channel/UCHsoPOcah1GxOiLklZhedoA"
													   class="dropdown-item"
													   >くましろチャンネル</a
														>
													<a
													   href="http://agrista-kumashiro.com/"
													   class="dropdown-item"
													   >金の柿</a
														>
													<a
													   href="http://agrista-kumashiro.com/blog/"
													   class="dropdown-item"
													   >スタッフブログ</a
														>
													<a
													   href="https://www.yamaga-fc.com/"
													   class="dropdown-item"
													   >松本山雅FC</a
														>
													<a
													   href="https://www.kumashiro.co.jp/hall/"
													   class="dropdown-item"
													   >くましろホール</a
														>
													<a
													   href="https://kumashiro-housing.com/"
													   class="dropdown-item"
													   >くましろハウジング</a
														>
													<a
													   href="https://www.kumashiro.co.jp/club/index.htm"
													   class="dropdown-item"
													   >お客様クラブ</a
														>
													<a
													   href="https://www.kumashiro.co.jp/kaihatsu/"
													   class="dropdown-item"
													   >不動産情報</a
														>
												</div>
											</div>
										</div>
									</li>
								</ul>
								<!--/ uL#nav -->
							</div>
						</nav>
						<!-- /.dropdown -->

						<div class="clear"></div>
					</div>
					<!--/.row -->
				</div>
				<!--/.container -->

				<div class="clear"></div>
			</div>
			<!--/ #topbar-inner -->
		</div>
		
		<section class="construction">

	<div class="container">
	<div class="row">
	
		<div class="col-sm-12 construction_title">
			<h2>施工実績</h2>
		</div>
	<div class="col-12">
		<form method="POST" action="construction_result.php">
			<div class="keyword row">
				<div class="col-12 construction_subtitle">
					キーワード
				</div>
				<label class="col-3"><input type="checkbox" name="keyword[]" value="1">民間建築</label>
				<label class="col-3"><input type="checkbox" name="keyword[]" value="2">公共建築</label>
				<label class="col-3"><input type="checkbox" name="keyword[]" value="3">土木工事</label>
				<label class="col-3"><input type="checkbox" name="keyword[]" value="4">その他</label>
			</div>
			
			<div class="refine row">
				<div class="col-12 construction_subtitle">
					絞り込み
				</div>
				<div class="col-1 area_title">エリア</div>
				<select name="area" class="col-2">

					<?php
					// ブランドはブランドテーブルに登録してあるものから選ぶ
					foreach ($area as $row){
						echo '<option value="',$row["area_id"], '">', $row["area"], "</option>";
					}
					?>
					
				</select>
				<div class="col-1 year_title">年度別</div>

				<select name="year" class="col-2">
				
					<?php
					// ブランドはブランドテーブルに登録してあるものから選ぶ
					foreach ($year as $row){
						echo '<option value="', $row["year_id"], '">', $row["year"], "</option>";
					}
					?>
				</select>
			</div>
			
			<div class="search_button col-sm-12">
				<input class="button_design" type="submit" value="検索">
			</div>
		</form>
		</div>
		</div>
	</div>
	
		</section>
	
		
	
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>


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


		<!-- Libraries CSS Files -->
		<link href="css/font-awesome.min.css" rel="stylesheet" />

		<!-- Main Stylesheet File -->
		<link href="css/style.css" rel="stylesheet" />
	</head>
	<body data-spy="scroll" data-offset="64" data-target="#section-topbar">
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
			<?php
			$gobackURL = "construction.php";
			
			//エラーがあったとき
			if (count($errors)>0){
				echo '<ol class="error">';
				foreach ($errors as $value) {
					echo "<li>", $value , "</li>";
				}
				echo "</ol>";
				echo "<hr>";
				echo "<a href=", $gobackURL, ">戻る</a>";
				exit();
			}

			// データベースユーザ
			$user = 'root';
			$password = 'root';
			// 利用するデータベース
			$dbName = 'construction';
			// MySQLサーバ
			$host = 'localhost:3306';
			// MySQLのDSN文字列
			$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
			
			
			
			// 連結したい文字列
			

			//MySQLデータベースに接続する
			try {
				$pdo = new PDO($dsn, $user, $password);
				// プリペアドステートメントのエミュレーションを無効にする
				$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				// 例外がスローされる設定にする
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (Exception $e) {
				$err =  '<span class="error">エラーがありました。</span><br>';
				$err .= $e->getMessage();
				exit($err);
			}
			
			

			try {
		
				if (isset($_POST['keyword']) && is_array($_POST['keyword'])) {
					$keyword_arry = $_POST['keyword'];
					$keyword = implode(',',$keyword_arry);
				}else{
                    $keyword = 0;
                }
                    
               

				
				if(($_POST["area"]==1)&&($_POST["year"]==1)){
					$sql1 = "SELECT img,explanation,url FROM construction_tbl WHERE keyword_id in ($keyword) ORDER BY year_id ASC";
					
					$sql2 = "SELECT COUNT(*) AS recode_count FROM construction_tbl WHERE keyword_id in ($keyword)";
					
					$construction = $pdo->prepare($sql1);
					$recode_cout = $pdo->prepare($sql2);
					
				}else if(($_POST["area"]!=1)&&($_POST["year"]==1)){
					$sql1 = "SELECT img,explanation,url FROM construction_tbl WHERE keyword_id in ($keyword) AND area_id = :area ORDER BY year_id ASC";
					
					$sql2 = "SELECT COUNT(*) AS recode_count FROM construction_tbl WHERE keyword_id in ($keyword) AND area_id = :area";
					
					$construction = $pdo->prepare($sql1);
					$recode_cout = $pdo->prepare($sql2);
					
					$recode_cout->bindValue(':area', $_POST["area"], PDO::PARAM_STR);
					$construction->bindValue(':area', $_POST["area"], PDO::PARAM_STR);
					
				}else if(($_POST["area"]==1)&&($_POST["year"]!=1)){
					$sql1 = "SELECT img,explanation,url FROM construction_tbl WHERE keyword_id in ($keyword) AND year_id = :year";
					
					$sql2 = "SELECT COUNT(*) AS recode_count FROM construction_tbl WHERE keyword_id in ($keyword) AND year_id = :year";
					
					$construction = $pdo->prepare($sql1);
					$recode_cout = $pdo->prepare($sql2);
					
					$recode_cout->bindValue(':year', $_POST["year"], PDO::PARAM_STR);
					$construction->bindValue(':year', $_POST["year"], PDO::PARAM_STR);
					
				}else{
					$sql1 = "SELECT img,explanation,url FROM construction_tbl WHERE keyword_id in ($keyword) AND area_id = :area AND year_id = :year ORDER BY year_id ASC";
					
					$sql2 = "SELECT COUNT(*) AS recode_count FROM construction_tbl WHERE keyword_id in ($keyword) AND area_id = :area AND year_id = :year";
					
					// プリペアドステートメントを作る
					$construction = $pdo->prepare($sql1);
					$recode_cout = $pdo->prepare($sql2);
					
					$construction->bindValue(':area', $_POST["area"], PDO::PARAM_STR);
					$construction->bindValue(':year', $_POST["year"], PDO::PARAM_STR);
					$recode_cout->bindValue(':area', $_POST["area"], PDO::PARAM_STR);
					$recode_cout->bindValue(':year', $_POST["year"], PDO::PARAM_STR);
				}
				

				// SQL文を実行する
				
				$construction->execute();
				$recode_cout->execute();
           

				// 結果報告
			} catch (Exception $e) {
				echo '<span class="error">エラーがありました。</span><br>';
				echo $e->getMessage();
			}
			?>
		
				<?php
				foreach ($recode_cout as $row){
					echo '<div class="col-12 construction_subtitle">検索件数:',$row["recode_count"],'</div>';

					if($row["recode_count"]==0){
						echo '<div class="col-12">検索結果がありません。もう一度お試しください。</div>';
					}
				}
				foreach ($construction as $row){
					echo '<div class="col-sm-3 location_item_img">
					<a href="',$row["url"],'">
					<img src="img/',$row["img"],'" alt="',$row["img"],'">
					</a>', $row["explanation"], "</div>";
				}
				?>
			
			<div class="col-sm-12 back_button">
				
				<a class="button_design " href="<?php echo $gobackURL ?>">戻る</a>
				
				</div>
		</div>
		</div>
		</section>
		
		
		<!-- JavaScript Libraries -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

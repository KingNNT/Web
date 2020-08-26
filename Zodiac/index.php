<?php 
	session_start();
	$d = $m = $kq = $lt = $link = $alt = $ht ="";
	$show = false;


	if (isset($_POST["d"]) && isset($_POST["m"])){
		$d = $_POST["d"];
		$m = $_POST["m"];
	

	if (is_numeric($d) && is_numeric($m)){
		switch ($m) {
			case '1':
				if($d >=1 && $d <=19 ) $kq = "Ma Kết";
				if($d >=20 && $d <= 31) $kq = "Bảo Bình";
				$show = true;
				break;

			case '2':
				if($d >=1 && $d <=18 ) $kq = "Bảo Bình";
				if($d >=19 && $d <= 29) $kq = "Song Ngư";
				$show = true;
				break;

			case '3':
				if($d >=1 && $d <= 20) $kq = "Song Ngư";
				if($d >=21 && $d <=31 ) $kq = "Bạch Dương";
				$show = true;
				break;

			case '4':
				if($d >=1 && $d <=19 ) $kq = "Bạch Dương";
				if($d >=20 && $d <= 30) $kq = "Kim Ngưu";
				$show = true;
				break;

			case '5':
				if($d >=1 && $d <=20 ) $kq = "Kim Ngưu";
				if($d >=21 && $d <= 31) $kq = "Song Tử";
				$show = true;
				break;

			case '6':
				if($d >=1 && $d <=21 ) $kq = "Song Tử";
				if($d >=22 && $d <= 30) $kq = "Cự Giải";
				$show = true;
				break;

			case '7':
				if($d >=1 && $d <=22 ) $kq = "Cự Giải";
				if($d >=23 && $d <= 31) $kq = "Sư Tử";
				$show = true;
				break;

			case '8':
				if($d >=1 && $d <=22 ) $kq = "Sư Tử";
				if($d >=23 && $d <= 31) $kq = "Xử Nữ";
				$show = true;
				break;

			case '9':
				if($d >=1 && $d <=22 ) $kq = "Xử Nữ";
				if($d >=23 && $d <= 30) $kq = "Thiên Bình";
				$show = true;
				break;

			case '10':
				if($d >=1 && $d <=23 ) $kq = "Thiên Bình";
				if($d >=24 && $d <= 31) $kq = "Hổ Cáp";
				$show = true;
				break;

			case '11':
				if($d >=1 && $d <=21 ) $kq = "Hổ Cáp";
				if($d >=22 && $d <= 30) $kq = "Nhân Mã";
				$show = true;
				break;

			case '12':
				if($d >=1 && $d <=21 ) $kq = "Nhân Mã";
				if($d >=22 && $d <= 31) $kq = "Ma Kết";
				$show = true;
				break;

			default:
				$kq = "Không Thể Xác Định";
				$show = false;
				break;
		}
	}



 	switch ($kq) {
 		case "Bạch Dương":
 			$lt = "Aries ( 21/3 - 20/4 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/bach_duong.png";
 			$alt = "Image Aries";
 			break;

 		case "Kim Ngưu":
	 		$lt = "Taurus ( 21/4 - 21/5 )";
	 		$link = "https://lichngaytot.com/images/12-cung-hoang-dao/kim_nguu.png";
	 		$alt = "Image Taurus";
	 		break;

 		case "Song Tử":
 			$lt = "Gemini ( 22/5 - 21/6 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/song_tu.png";
 			$alt = "Image Gemini";
 			break;

 		case "Cự Giải":
 			$lt = "Cancer ( 22/6 - 22/7 )";
	 		$link = "https://lichngaytot.com/images/12-cung-hoang-dao/cu_giai.png";
	 		$alt = "Image Cancer";
	 		break;

 		case "Sư Tử":
 			$lt = "Leo ( 21/3 - 20/4 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/su_tu.png";
 			$alt = "Image Leo";
 			break;

 		case "Xử Nữ":
 			$lt = "Virgo ( 23/8 - 23/9 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/xu_nu.png";
 			$alt = "Image Virgo";
 			break;

 		case "Thiên Bình":
 			$lt = "Gemini ( 21/3 - 20/4 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/thien_binh.png";
 			$alt = "Image Gemini";
 			break;

 		case "Song Tử":
 			$lt = "Libra ( 24/9 - 23/10 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/song_tu.png";
 			$alt = "Image Libra";
 			break;

 		case "Thần Nông":
 			$lt = "Scorpio ( 24/10 - 22/11 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/than_nong.png";
 			$alt = "Image Scorpio";
 			break;

 		case "Nhân Mã":
 			$lt = "Sagittarius ( 23/11 - 21/12 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/nhan_ma.png";
 			$alt = "Image Sagittarius";
 			break;

 		case "Ma Kết":
 			$lt = "Capricornus ( 22/12 - 20/1 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/ma_ket.png";
 			$alt = "Image Capricornus";
 			break;

 		case "Bảo Bình":
 			$lt = "Aquarius ( 21/1 - 19/2 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/bao_binh.png";
 			$alt = "Image Aquarius";
 			break;

 		case "Song Ngư":
 			$lt = "Pisces ( 20/2 - 20/3 )";
 			$link = "https://lichngaytot.com/images/12-cung-hoang-dao/song_ngu.png";
 			$alt = "Image Pisces";
 			break;
 	
 		default:
 			$kq = "Có lỗi xảy ra";
 			$lt = "Vui lòng thử lại";
 			$link = "https://www.thuthuatweb.net/wp-content/uploads/baiviet/2013/12/error.jpg";
 			$alt = "Image Error";
 			break;
 	}

 	$_SESSION['d'] = $d;
	$_SESSION['m'] = $m;
	$_SESSION['kq'] = $kq;
	$_SESSION['lt'] = $lt;
	$_SESSION['link'] = $link;
	$_SESSION['alt'] = $alt;
	$_SESSION['ht'] = $ht;

	header("Location: ".$SERVER['REQUEST_URI']);
	exit();

	if(isset($_SESSION['d'],$_SESSION['m'],$_SESSION['kq'],$_SESSION['lt'],$_SESSION['link'],$_SESSION['alt'])) {
		 	$d = $_SESSION['d'];
			$m = $_SESSION['m'];
			$kq = $_SESSION['kq'];
			$lt = $_SESSION['lt'];
			$link = $_SESSION['link'];
			$alt = $_SESSION['alt'];
			$ht = $_SESSION['ht'];
			session_unset();
	} else {
		$d = $m = $kq = $lt = $link = $alt = $ht ="";
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tính Cung Hoàng Đạo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
		<h1>Bạn Thuộc Chòm Sao Gì ?</h1>
		<div>
			<form method="post" >
				<div class="row">
					<span>Ngày Sinh</span>
					<input type="text" name="d" value="<?php echo $d ?>" required >
				</div>
				<div class="row">
					<span>Tháng Sinh</span>
					<input type="text" name="m" value="<?php echo $m ?>" required >
				</div>
				<div class="row">
					<button type="submit">Xem</button>	
				</div>
			</form>
			<?php  	
				if ($show == true ) {
 				$ht = '	<div class="result">
							<img src="'.$link.'">
							<p>
								<div class="ec">'
									.$kq.
								'</div>
								<span>'
									.$lt.
								'</span>
							</p>
						</div>
						<div class="space"></div>';
				echo $ht;
				}
			?>
		</div>
	</div>
</body>
</html>
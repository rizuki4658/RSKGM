	<nav class="navbar navbar-inverse">
				<div class="container">
					<a class="navbar-brand" href="#"><img src="../img/logo.png" height="40"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="../index.php">BERANDA</a></li>
							<li class="dropdown" <?php echo $layanan; ?>>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">LAYANAN <i class="caret"></i></a>
								<ul class="dropdown-menu">
									<li><a href="../1 Periodonti/Periodonti.php">- Klinik Periodonti</a></li>
			        				<li><a href="../2 Prostodonti/Prostodonti.php">- Klinik Prostodonti</a></li>
			        				<li><a href="../3 Konservasi Gigi/Konservasi Gigi.php">- Klinik Konservasi Gigi</a></li>
									<li><a href="../4 Ortodonti/Ortodonti.php">- Klinik Ortodonti</a></li>
			        				<li><a href="../5 Pedodonti/Pedodonti.php">- Klinik Pedodonti</a></li>
			        				<li><a href="../6 Oral Surgery/Oral Surgery.php">- Klinik Oral Surgery</a></li>
			        				<li><a href="Eksodonti.php">- Klinik Eksodonti</a></li>
			        				<li><a href="../8 Endodonti/Endodonti.php">- Klinik Endodonti</a></li>
			        				<li><a href="../9 UGD/UGD.php">- Klinik UGD</a></li>
								</ul>
							</li>
							<li class="dropdown" <?php echo $laporan; ?> >
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">LAPORAN <i class="caret"></i></a>
								<ul class="dropdown-menu">
									<li><a href="../filter/filter_bulan.php?page=Eksodonti">Per Bulan</a></li>
									<li><a href="../filter/filter_triwulan.php?page=Eksodonti">Per Triwulan</a></li>
									<li><a href="../filter/filter_Tahun.php?page=Eksodonti">Per Tahun</a></li>
									<li class="dropdown-submenu">
										<a href="#" class="test" data-toggle="dropdown" id="bayaran">Cara Pembayaran <span class="caret"></span></a>
										<ul class="dropdown-menu" id="pilih_bayar">
											<li><a href="../filter/cara_bulan.php?page=UGD">Per Bulan</a></li>
											<li><a href="../filter/cara_triwulan.php?page=UGD">Per Triwulan</a></li>
											<li><a href="../filter/cara_Tahun.php?page=UGD">Per Tahun</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="../galeri.php">GALERI</a></li>
							<li><a href="../kontak.php">KONTAK</a></li>
							<li <?php echo $OP; ?>><a href="../login.php">LOGIN</a></li>
							<li class="dropdown" <?php echo $data_user; ?>>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: uppercase;"><?php echo $nama; ?> <i class="caret"></i></a>
								<ul class="dropdown-menu" style="text-align: right;">
									<li><a href="../profil.php">PROFIL</a></li>
			        				<li><a href="../Login Daftar/Daftar/Data_pengguna.php" <?php echo $datapengguna; ?> >DAFTAR USER</a></li>
			        				<li><a href="../Login Daftar/Login/proses_logout.php?STS=OUT" onclick="return confirm('Anda ingin logout')">LOGOUT</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<link rel="shortcut icon" href="<?= base_url('assets/img/logo.png') ?>" type="image/x-icon">
	<title><?= $judul ?></title>
</head>
<style>
	body {
		background-image: url('<?= base_url('assets/img/bg.png') ?>');
		background-repeat: no-repeat;
		background-size: cover;
		width: 100%;
		font-family: 'Poppins', sans-serif;
	}

	.tombol {
		color: white !important;
		border: 1px solid white;
	}

	.sidee {
		display: flex;
		gap: 10px;
		flex-direction: row;
	}

	.info {
		margin: 10px;
		padding: 10px;
		border-radius: 10px;
		border: 1px solid black;
		background: rgba(200, 200, 200, 0.8);
	}
</style>

<body>
	<div class="mask">
		<div class="header">
			<div class="header-brand">
				<img class="logo" src="<?= base_url('assets/img/logo.png') ?>" alt="">
				<p class="header-text">SISTEM PAKAR ENDOKRIN</p>
			</div>
			<div class="sidee">
				<a class="tombol" href="<?= base_url('user/info') ?>">INFORMASI</a>
				<a class="tombol" href="<?= base_url('user/diagnosa') ?>">DIAGNOSA</a>
				<a class="tombol" href="<?= base_url('login') ?>">LOGIN ADMIN</a>
			</div>

		</div>
		<div class="info">
			<h2>
				Informasi Penyakit Endokrin
			</h2>
			<p>
				Penyakit Endokrin adalah penyakit yang menyerang sistem endokrin dalam tubuh manusia. Gangguan penyakit pada sistem endokrin menyebabkan perubahan fisik akibat pengaruh dari sistem hormonal yang memengaruhi langsung fungsi organ yang terlibat penyebab umum ganggunan endokrin adalah kelenje-kelenjer ini memproduksi terlalu banyak atau terlalu sedikit hormon menyiratkan ketidakseimbangan hormon endokrin berikut jenis penyakit endokrin pada manusia
			</p>
			<ol style="margin-left:15px">
				<li><b>Diabetes Melitus</b> adalah gangguan metabolisme akibat kurangnya insulin dalam darah seorang sehingga tubuh tidak mampu menyerab glukosa yang nantinya akan menghambat proses metabolisme dalam sel.
					<br>
					<b>Solusinya :</b>
					<ul style="margin-left: 20px;">
						<li>
							Tes gula darah sewaktu, pemeriksaan gula darah sewaktu, jika hasilnya di atas 200 mg/dl, maka pasien memiliki kemungkinan menderita diabetes.Untuk mengonfirmasi hasil tersebut, dokter akan meminta pasien melakukan tes lain, yaitu tes gula darah puasaatau tes toleransi glukosa oral.
						</li>
						<li>
							Tes gula darah puasa, Dokter biasanya melakukan pemeriksaan ini setelah 8–12 jam berpuasa. Selama itu juga pasien hanya boleh minum air putih dan wajib menghindari penggunaan suplemen atau multivitamin, alkohol, dan merokok.
						</li>
						<li>
							Tes toleransi glukosa Tes HbA1C (glycated haemoglobin test), Prosedur dilakukan sama seperti GDP, yaitu puasa selama 8-10 jam, kemudian sampel darah diambil dari lipatansiku dengan suntikan, dan dikirim kelaboratorium. Bedanya, setelah sampel darah diambil, petugas medis akan menginstruksikan untuk minum larutan glukosa 75 gram untuk orang dewasa dan 1,75gram/kgBB untuk anak-anak. Setelah itu, kamu akan diminta untuk berpuasa kembali selama 2 jam.Jika sudah 2 jam, petugas akan kembali mengambil sampel darah, untuk diperiksa di laboratorium.
						</li>
					</ul>
				</li>
				<li>
					Hipertiroid merupakan salah satu penyakit gangguan kelenjar endokrin yang di sebabkan oleh peningkatan produksi hormon tiroid secara berlebihan oleh hormon tiroid, penyebab utama yang menimbulkan keadaan hipertiroid adalah penyakit graves
					<br>
					<b>Solusinya :</b>
					<ul style="margin-left: 20px;">
						<li>
							USG tiroid, untuk memeriksa kondisi kelenjer tiroid dan mendeteksi benjolan atau tumor kelenjar tersebut
						</li>
						<li>
							Thyroid scan (nuklir tiroid), untuk memindai kelenjer tiroid menggunakan kamera khusus, dengan terlebih dahulu menyuntikkan zat radioaktif ke dalam pembulu darah.
						</li>
						<li>
							Tes iodium radioaktif, untuk memindai kelenjer tiroid dengan terlebih dahulu meminta pasien menelan zat radioaktif yang mengandung dosis rendah.
						</li>
					</ul>
				</li>
				<li>
					Akromegali adalah penyakit yang timbul akibat tingginya produksi Growth Hormon (GH) pada orang dewasa Akromegali ditandai oleh pertumbuhan yang berlebihan pada beberapa organ dan jaringan otot serta tulang, terutama kaki, wajah dan tangan. Akromegali umumnya terjadi pada orang dewasa.
					<br>
					<b>Solusinya :</b>
					<ul style="margin-left: 20px;">
						<li>
							Tes darah, dilakukan dengan mengukur kadar GH dan IGF-I . Tujuannya adalah untuk mengetahui banyaknya hormon yang diproduksi
						</li>
						<li>
							Pemindaian CT scan dan MRI digunakan untuk mengetahui lokasi dan ukuran tumor pada kelenjer hifosis atau organ tubuh yang membeser
						</li>
					</ul>
				</li>
			</ol>
		</div>

	</div>
</body>

</html>
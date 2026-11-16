<?php $halaman = 'profil'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Panitiain</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/profil.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar.php'; ?>

    <main class="halaman-profil">
        <section class="isi-dashboard">
            <form action="#" method="post" class="profil-form">

                <h2>Profil anda</h2>

                <div class="kolom">
                    <label for="nama">Nama lengkap</label>
                    <input type="text" id="nama" name="nama" value="Nama Mahasiswa" required>
                </div>

                <div class="kolom">
                    <label for="lahir">Tanggal lahir</label>
                    <input type="date" id="lahir" name="lahir" value="2004-07-07">
                </div>

                <div class="kolom">
                    <span class="label-teks">Jenis kelamin</span>
                    <div class="pilihan">
                        <label class="opsi">
                            <input type="radio" name="gender" value="laki-laki" checked>
                            <span><i class="titik"></i>Laki-laki</span>
                        </label>
                        <label class="opsi">
                            <input type="radio" name="gender" value="perempuan">
                            <span><i class="titik"></i>Perempuan</span>
                        </label>
                    </div>
                </div>

                <h2>Detail kontak</h2>

                <div class="kolom">
                    <label for="hp">Nomor HP / WhatsApp</label>
                    <input type="tel" id="hp" name="hp" value="+62 812 3456 7890">
                </div>

                <div class="kolom">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="nama@email.com" required>
                </div>

                <h2>Detail akademik</h2>

                <div class="kolom">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" value="12345678" required>
                </div>

                <div class="kolom">
                    <label for="prodi">Program studi</label>
                    <input type="text" id="prodi" name="prodi" value="Informatika" required>
                </div>

                <div class="kolom">
                    <label for="angkatan">Angkatan</label>
                    <input type="text" id="angkatan" name="angkatan" value="2024">
                </div>

                <button type="submit" class="btn-simpan">Simpan perubahan</button>
            </form>
        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
</body>
</html>
<?php $halaman = 'event'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Event - Panitiain</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/form-event.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-rekruter.php'; ?>

    <main class="halaman-form-event">
        <section class="isi-dashboard">
            <div class="form-wadah">

                <a href="event.php" class="kembali">&larr; Kembali ke kelola event</a>
                <h1>Tambah event</h1>

                <p class="info-sukses" id="info" hidden></p>

                <form id="form-event" action="#" method="post" enctype="multipart/form-data">

                    <div class="kolom">
                        <label for="nama_event">Nama event</label>
                        <input type="text" id="nama_event" name="nama_event" maxlength="150" required>
                    </div>

                    <div class="kolom">
                        <label for="penyelenggara">Penyelenggara</label>
                        <input type="text" id="penyelenggara" name="penyelenggara" maxlength="100"
                               placeholder="Contoh: BEM Fakultas" required>
                    </div>

                    <div class="dua-kolom">
                        <div class="kolom">
                            <label for="tanggal_event">Tanggal pelaksanaan</label>
                            <input type="date" id="tanggal_event" name="tanggal_event" required>
                        </div>
                        <div class="kolom">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" id="lokasi" name="lokasi" maxlength="150" required>
                        </div>
                    </div>

                    <div class="kolom">
                        <span class="label-teks">Status pendaftaran</span>
                        <div class="pilihan">
                            <label class="opsi">
                                <input type="radio" name="status_event" value="buka" checked>
                                <span>Buka</span>
                            </label>
                            <label class="opsi">
                                <input type="radio" name="status_event" value="tutup">
                                <span>Tutup</span>
                            </label>
                        </div>
                    </div>

                    <div class="kolom">
                        <label for="logo">Logo penyelenggara</label>

                        <div class="logo-sekarang" id="logo-box" hidden>
                            <div class="logo-awal" id="logo-lingkaran"></div>
                            <small id="logo-ket"></small>
                        </div>

                        <input type="file" id="logo" name="logo" accept="image/png,image/jpeg,image/webp">
                        <small class="petunjuk">JPG, PNG, atau WEBP, maksimal 2 MB. Gambar yang kira-kira persegi paling pas.</small>
                        <p class="pesan-error" id="galat-logo" hidden></p>
                    </div>

                    <button type="submit" class="btn-simpan">Simpan event</button>
                </form>

            </div>
        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
    <script src="../../js/form-event.js"></script>
</body>
</html>
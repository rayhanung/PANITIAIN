<?php $halaman = 'event'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Event - Rekruterin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/form-daftar.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar.php'; ?>

    <main class="halaman-form-daftar">
        <section class="isi-dashboard">
            <div class="form-wadah">

                <a href="event.php" class="kembali">&larr; Kembali ke daftar event</a>

                <div class="info-event">
                    <h1>Seminar Nasional Teknologi</h1>
                    <p>Pelaksanaan 12 Des 2026</p>
                </div>

                <form id="form-pendaftaran" action="#" method="post">
                    <input type="hidden" name="id_event" value="1">

                    <h2>Data mahasiswa</h2>
                    <div class="data-mhs">
                        <div class="kolom">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" id="nama" value="Nama Mahasiswa" readonly>
                        </div>
                        <div class="kolom">
                            <label for="nim">NIM</label>
                            <input type="text" id="nim" value="12345678" readonly>
                        </div>
                        <div class="kolom penuh">
                            <label for="email">Email</label>
                            <input type="email" id="email" value="nama@email.com" readonly>
                        </div>
                    </div>

                    <h2>Pilih divisi</h2>
                    <p class="petunjuk">Pilih satu divisi. Kamu bisa mendaftar ke divisi lain setelahnya.</p>

                    <div class="daftar-divisi">

                        <label class="divisi">
                            <input type="radio" name="id_divisi" value="1" required>
                            <span class="divisi-isi">
                                <span class="divisi-judul">
                                    <strong>Acara</strong>
                                    <span class="kuota">Sisa kuota 4 dari 10</span>
                                </span>
                                <small><b>Tugas:</b> Menyusun rundown dan memimpin jalannya acara.</small>
                                <small><b>Persyaratan:</b> Mahasiswa aktif, bersedia hadir saat rapat.</small>
                            </span>
                        </label>

                        <label class="divisi">
                            <input type="radio" name="id_divisi" value="2">
                            <span class="divisi-isi">
                                <span class="divisi-judul">
                                    <strong>Humas</strong>
                                    <span class="kuota">Sisa kuota 2 dari 6</span>
                                </span>
                                <small><b>Tugas:</b> Mengelola komunikasi dan publikasi event.</small>
                                <small><b>Persyaratan:</b> Mampu berkomunikasi dengan baik.</small>
                            </span>
                        </label>

                        <label class="divisi nonaktif">
                            <input type="radio" name="id_divisi" value="3" disabled>
                            <span class="divisi-isi">
                                <span class="divisi-judul">
                                    <strong>Dokumentasi</strong>
                                    <span class="kuota">Sudah mendaftar</span>
                                </span>
                                <small><b>Tugas:</b> Mengambil foto dan video selama acara.</small>
                                <small><b>Persyaratan:</b> Memiliki kamera atau ponsel dengan kamera baik.</small>
                            </span>
                        </label>

                        <label class="divisi nonaktif">
                            <input type="radio" name="id_divisi" value="4" disabled>
                            <span class="divisi-isi">
                                <span class="divisi-judul">
                                    <strong>Konsumsi</strong>
                                    <span class="kuota">Kuota penuh</span>
                                </span>
                                <small><b>Tugas:</b> Menyiapkan makanan dan minuman peserta.</small>
                                <small><b>Persyaratan:</b> Teliti dan bertanggung jawab.</small>
                            </span>
                        </label>

                    </div>

                    <p class="pesan-error" id="pesan" hidden></p>

                    <button type="submit" class="btn-kirim">Kirim pendaftaran</button>
                </form>

                <div class="konfirmasi" id="konfirmasi" hidden>
                    <h2>Pendaftaran terkirim</h2>
                    <p>Pendaftaranmu sedang menunggu pemeriksaan rekruter. Pantau statusnya di halaman Pendaftaran Saya.</p>
                    <a href="pendaftaran.php" class="btn-kirim">Lihat pendaftaran saya</a>
                </div>

            </div>
        </section>
    </main>

    <script src="../../js/form-pendaftaran.js"></script>
</body>
</html>
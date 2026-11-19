<?php
$halaman = 'pendaftar';
$sudah_diputuskan = false; // ganti true untuk melihat tampilan "sudah diperiksa"
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periksa Pendaftaran - Rekruterin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/periksa-pendaftaran.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-rekruter.php'; ?>

    <main class="halaman-periksa">
        <section class="isi-dashboard">
            <div class="periksa-wadah">

                <a href="pendaftar.php" class="kembali">&larr; Kembali ke daftar pendaftar</a>
                <h1>Periksa pendaftaran</h1>

                <div class="panel">
                    <h2>Data pendaftaran</h2>

                    <dl class="data">
                        <div>
                            <dt>Nama mahasiswa</dt>
                            <dd>Budi Santoso</dd>
                        </div>
                        <div>
                            <dt>NIM</dt>
                            <dd>12345678</dd>
                        </div>
                        <div>
                            <dt>Email</dt>
                            <dd>budi@email.com</dd>
                        </div>
                        <div>
                            <dt>Tanggal daftar</dt>
                            <dd>10 Nov 2026</dd>
                        </div>
                        <div>
                            <dt>Event</dt>
                            <dd>Seminar Nasional Teknologi</dd>
                        </div>
                        <div>
                            <dt>Tanggal pelaksanaan</dt>
                            <dd>12 Des 2026</dd>
                        </div>
                        <div>
                            <dt>Divisi dipilih</dt>
                            <dd>Acara</dd>
                        </div>
                        <div>
                            <dt>Kuota divisi</dt>
                            <dd>10 orang, terisi 6, sisa 4</dd>
                        </div>
                        <div>
                            <dt>Status saat ini</dt>
                            <dd>
                                <?php if ($sudah_diputuskan): ?>
                                    <span class="status diterima">Diterima</span>
                                <?php else: ?>
                                    <span class="status menunggu">Menunggu</span>
                                <?php endif; ?>
                            </dd>
                        </div>
                    </dl>
                </div>

                <?php if (!$sudah_diputuskan): ?>

                <form class="panel" id="form-review" action="#" method="post">
                    <input type="hidden" name="id_pendaftaran" value="1">

                    <h2>Keputusan</h2>

                    <div class="pilihan-keputusan">
                        <label class="keputusan terima">
                            <input type="radio" name="keputusan" value="diterima">
                            <span>Diterima</span>
                        </label>
                        <label class="keputusan tolak">
                            <input type="radio" name="keputusan" value="ditolak">
                            <span>Ditolak</span>
                        </label>
                    </div>

                    <div class="kolom">
                        <label for="catatan">Catatan untuk mahasiswa</label>
                        <textarea id="catatan" name="catatan" rows="4"
                            placeholder="Contoh: Selamat bergabung, info rapat pertama dikirim lewat email."></textarea>
                        <small>Wajib diisi kalau pendaftaran ditolak, supaya mahasiswa tahu alasannya.</small>
                    </div>

                    <p class="pesan-error" id="pesan" hidden></p>

                    <button type="submit" class="btn-simpan">Simpan keputusan</button>
                </form>

                <div class="panel konfirmasi" id="konfirmasi" hidden>
                    <h2>Keputusan tersimpan</h2>
                    <p id="teks-konfirmasi"></p>
                    <a href="pendaftar.php" class="btn-simpan">Kembali ke daftar pendaftar</a>
                </div>

                <?php else: ?>

                <div class="panel">
                    <h2>Hasil pemeriksaan</h2>

                    <dl class="data">
                        <div>
                            <dt>Keputusan</dt>
                            <dd><span class="status diterima">Diterima</span></dd>
                        </div>
                        <div>
                            <dt>Diperiksa oleh</dt>
                            <dd>Nama Rekruter</dd>
                        </div>
                        <div>
                            <dt>Waktu pemeriksaan</dt>
                            <dd>12 Nov 2026, 14.30</dd>
                        </div>
                        <div class="penuh">
                            <dt>Catatan</dt>
                            <dd>Selamat bergabung. Info rapat pertama akan dikirim lewat email.</dd>
                        </div>
                    </dl>
                </div>

                <?php endif; ?>

            </div>
        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
    <script src="../../js/periksa-pendaftaran.js"></script>
</body>
</html>
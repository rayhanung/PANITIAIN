<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran - Panitiain</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/periksa-pendaftaran.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar.php'; ?>

    <main class="halaman-periksa">
        <section class="isi-dashboard">
            <div class="periksa-wadah">

                <a href="pendaftaran.php" class="kembali">&larr; Kembali ke pendaftaran saya</a>

                <?php if (!$data): ?>

                    <h1>Pendaftaran tidak ditemukan</h1>
                    <div class="panel">
                        <p>Pendaftaran yang kamu cari tidak ada atau bukan milikmu.</p>
                    </div>

                <?php else: ?>

                    <h1>Detail pendaftaran</h1>

                    <div class="panel">
                        <h2>Pendaftaran</h2>
                        <dl class="data">
                            <div>
                                <dt>Event</dt>
                                <dd><?= e($data['nama_event']) ?></dd>
                            </div>
                            <div>
                                <dt>Tanggal pelaksanaan</dt>
                                <dd><?= e(tanggal_indo($data['tanggal_event'])) ?></dd>
                            </div>
                            <div>
                                <dt>Divisi dipilih</dt>
                                <dd><?= e($data['nama_divisi']) ?></dd>
                            </div>
                            <div>
                                <dt>Tanggal daftar</dt>
                                <dd><?= e(tanggal_indo($data['tanggal_daftar'])) ?></dd>
                            </div>
                            <div class="penuh">
                                <dt>Status</dt>
                                <dd><span class="status <?= e($kelas) ?>"><?= e(ucfirst($kelas)) ?></span></dd>
                            </div>
                        </dl>
                    </div>

                    <div class="panel">
                        <h2>Tentang divisi</h2>
                        <dl class="data">
                            <div class="penuh">
                                <dt>Tugas</dt>
                                <dd><?= $data['tugas'] ? nl2br(e($data['tugas'])) : '-' ?></dd>
                            </div>
                            <div class="penuh">
                                <dt>Persyaratan</dt>
                                <dd><?= $data['persyaratan'] ? nl2br(e($data['persyaratan'])) : '-' ?></dd>
                            </div>
                        </dl>
                    </div>

                    <div class="panel">
                        <h2>Hasil pemeriksaan</h2>

                        <?php if ($data['keputusan'] === null): ?>
                            <p>Pendaftaranmu belum diperiksa oleh panitia.</p>
                        <?php else: ?>
                            <dl class="data">
                                <div>
                                    <dt>Waktu pemeriksaan</dt>
                                    <dd><?= e(tanggal_indo($data['waktu_review'], true)) ?></dd>
                                </div>
                                <div class="penuh">
                                    <dt>Catatan dari panitia</dt>
                                    <dd><?= $data['catatan'] ? nl2br(e($data['catatan'])) : 'Tidak ada catatan.' ?></dd>
                                </div>
                            </dl>
                        <?php endif; ?>
                    </div>

                <?php endif; ?>

            </div>
        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
</body>
</html>
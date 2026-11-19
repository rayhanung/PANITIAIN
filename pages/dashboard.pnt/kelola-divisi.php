<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Divisi - Rekruterin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/kelola-event.css">
    <link rel="stylesheet" href="../../css/kelola-divisi.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-rekruter.php'; ?>

    <main class="halaman-pendaftaran halaman-kelola halaman-divisi">
        <section class="isi-dashboard">

            <a href="event.php" class="kembali">&larr; Kembali ke kelola event</a>

            <div class="kepala-halaman">
                <div>
                    <h1>Divisi</h1>
                    <p><?= e($event['nama_event']) ?></p>
                </div>
            </div>

            <?php if ($pesan_sukses): ?>
                <p class="info-sukses"><?= e($pesan_sukses) ?></p>
            <?php endif; ?>
            <?php if ($galat_umum): ?>
                <p class="info-galat"><?= e($galat_umum) ?></p>
            <?php endif; ?>

            <div class="tabel-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Divisi</th>
                            <th>Kuota</th>
                            <th>Terisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($daftar as $d): ?>
                            <tr>
                                <td>
                                    <span class="utama"><?= e($d['nama_divisi']) ?></span>
                                    <?php if ($d['tugas']): ?>
                                        <span class="sub"><?= e(mb_strimwidth($d['tugas'], 0, 90, '...')) ?></span>
                                    <?php endif; ?>
                                </td>
                                <td><?= (int) $d['kuota'] ?> orang</td>
                                <td><?= (int) $d['terisi'] ?> dari <?= (int) $d['kuota'] ?></td>
                                <td class="sel-aksi">
                                    <a href="kelola-divisi.php?id=<?= (int) $id_event ?>&ubah=<?= (int) $d['id_divisi'] ?>#form-divisi"
                                       class="aksi aksi-detail">Ubah</a>

                                    <form method="post" class="form-hapus" data-nama="<?= e($d['nama_divisi']) ?>">
                                        <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
                                        <input type="hidden" name="aksi" value="hapus">
                                        <input type="hidden" name="id_divisi" value="<?= (int) $d['id_divisi'] ?>">
                                        <button type="submit" class="aksi aksi-hapus"
                                                <?= (int) $d['terisi'] > 0 ? 'disabled title="Sudah punya pendaftar"' : '' ?>>Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <?php if (!$daftar): ?>
                    <p class="kosong">Belum ada divisi untuk event ini. Tambahkan lewat formulir di bawah.</p>
                <?php endif; ?>
            </div>

            <form method="post" class="panel-form" id="form-divisi"
                  action="kelola-divisi.php?id=<?= (int) $id_event ?>">
                <h2><?= $ubah ? 'Ubah divisi' : 'Tambah divisi' ?></h2>

                <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
                <input type="hidden" name="aksi" value="simpan">
                <input type="hidden" name="id_divisi" value="<?= $ubah ? (int) $ubah : '' ?>">

                <div class="dua-kolom">
                    <div class="kolom">
                        <label for="nama_divisi">Nama divisi</label>
                        <input type="text" id="nama_divisi" name="nama_divisi" maxlength="100"
                               value="<?= e($form['nama_divisi']) ?>" required>
                        <?= galat_field($galat, 'nama_divisi') ?>
                    </div>
                    <div class="kolom">
                        <label for="kuota">Kuota (orang)</label>
                        <input type="number" id="kuota" name="kuota" min="1" max="1000"
                               value="<?= e($form['kuota']) ?>" required>
                        <?= galat_field($galat, 'kuota') ?>
                    </div>
                </div>

                <div class="kolom">
                    <label for="tugas">Tugas divisi</label>
                    <textarea id="tugas" name="tugas" rows="3" maxlength="1000"><?= e($form['tugas']) ?></textarea>
                    <?= galat_field($galat, 'tugas') ?>
                </div>

                <div class="kolom">
                    <label for="persyaratan">Persyaratan</label>
                    <textarea id="persyaratan" name="persyaratan" rows="3" maxlength="1000"><?= e($form['persyaratan']) ?></textarea>
                    <?= galat_field($galat, 'persyaratan') ?>
                </div>

                <div class="aksi-form">
                    <button type="submit" class="btn-simpan"><?= $ubah ? 'Simpan perubahan' : 'Tambah divisi' ?></button>
                    <?php if ($ubah): ?>
                        <a href="kelola-divisi.php?id=<?= (int) $id_event ?>" class="btn-batal-form">Batal</a>
                    <?php endif; ?>
                </div>
            </form>

        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
    <script src="../../js/kelola-divisi.js"></script>
</body>
</html>
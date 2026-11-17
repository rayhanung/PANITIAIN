<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ? 'Ubah' : 'Tambah' ?> Event - Panitiain</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/form-event.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-panitia.php'; ?>

    <main class="halaman-form-event">
        <section class="isi-dashboard">
            <div class="form-wadah">

                <a href="event.php" class="kembali">&larr; Kembali ke kelola event</a>
                <h1><?= $id ? 'Ubah event' : 'Tambah event' ?></h1>

                <form method="post" enctype="multipart/form-data"
                      action="<?= $id ? 'form-event.php?id=' . (int) $id : 'form-event.php' ?>">
                    <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">

                    <div class="kolom">
                        <label for="nama_event">Nama event</label>
                        <input type="text" id="nama_event" name="nama_event" maxlength="150"
                               value="<?= e($event['nama_event']) ?>" required>
                        <?= galat_field($galat, 'nama_event') ?>
                    </div>

                    <div class="kolom">
                        <label for="penyelenggara">Penyelenggara</label>
                        <input type="text" id="penyelenggara" name="penyelenggara" maxlength="100"
                               placeholder="Contoh: BEM Fakultas"
                               value="<?= e($event['penyelenggara']) ?>" required>
                        <?= galat_field($galat, 'penyelenggara') ?>
                    </div>

                    <div class="dua-kolom">
                        <div class="kolom">
                            <label for="tanggal_event">Tanggal pelaksanaan</label>
                            <input type="date" id="tanggal_event" name="tanggal_event"
                                   value="<?= e($event['tanggal_event']) ?>" required>
                            <?= galat_field($galat, 'tanggal_event') ?>
                        </div>
                        <div class="kolom">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" id="lokasi" name="lokasi" maxlength="150"
                                   value="<?= e($event['lokasi']) ?>" required>
                            <?= galat_field($galat, 'lokasi') ?>
                        </div>
                    </div>

                    <div class="kolom">
                        <span class="label-teks">Status pendaftaran</span>
                        <div class="pilihan">
                            <label class="opsi">
                                <input type="radio" name="status_event" value="buka"
                                       <?= $event['status_event'] === 'buka' ? 'checked' : '' ?>>
                                <span>Buka</span>
                            </label>
                            <label class="opsi">
                                <input type="radio" name="status_event" value="tutup"
                                       <?= $event['status_event'] === 'tutup' ? 'checked' : '' ?>>
                                <span>Tutup</span>
                            </label>
                        </div>
                        <?= galat_field($galat, 'status_event') ?>
                    </div>

                    <div class="kolom">
                        <label for="logo">Logo penyelenggara</label>
                        <?php if (!empty($event['logo'])): ?>
                            <div class="logo-sekarang">
                                <img src="/PANITIAIN/uploads/logo/<?= e($event['logo']) ?>" alt="Logo saat ini">
                                <small>Logo saat ini. Pilih file baru hanya kalau ingin menggantinya.</small>
                            </div>
                        <?php endif; ?>
                        <input type="file" id="logo" name="logo" accept="image/png,image/jpeg,image/webp">
                        <small class="petunjuk">JPG, PNG, atau WEBP, maksimal 2 MB. Gambar yang kira-kira persegi paling pas.</small>
                        <?= galat_field($galat, 'logo') ?>
                    </div>

                    <button type="submit" class="btn-simpan">
                        <?= $id ? 'Simpan perubahan' : 'Simpan event' ?>
                    </button>
                </form>

            </div>
        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
</body>
</html>
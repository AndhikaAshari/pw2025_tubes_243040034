<?php
require_once 'Function.php';
$keyword = $_GET['search'] ?? '';
$watchlist = searchWatchlist($keyword);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Watchlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="user.php">BACK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="review.php">Review</a>
                <a class="nav-item nav-link" href="watchlist.php">Watchlist</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="mb-4">🎬 My Watchlist</h2>

        <?php if (isset($_GET['status'])): ?>
            <div class="alert alert-<?= in_array($_GET['status'], ['success', 'deleted']) ? 'success' : 'danger' ?>" role="alert">
                <?php if ($_GET['status'] === 'success'): ?>
                    ✅ Film berhasil ditambahkan!
                <?php elseif ($_GET['status'] === 'deleted'): ?>
                    🗑️ Film berhasil dihapus!
                <?php elseif ($_GET['status'] === 'delete_failed'): ?>
                    ❌ Gagal menghapus film.
                <?php elseif ($_GET['status'] === 'prepare_failed'): ?>
                    ⚠️ Gagal menyiapkan query untuk menghapus.
                <?php else: ?>
                    ⚠️ Terjadi kesalahan.
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- Form input baru: hanya title dan category -->
        <form action="Function.php" method="post" class="mb-4">
            <input type="hidden" name="add_watchlist_simple" value="1">
            <div class="row g-3">
                <div class="col-md-5">
                    <input type="text" name="title" class="form-control" placeholder="Judul Film" required>
                </div>
                <div class="col-md-5">
                    <input type="text" name="category" class="form-control" placeholder="Kategori" required>
                </div>
                <div class="col-md-2 text-end">
                    <button type="submit" class="btn btn-primary w-100">+ Tambah</button>
                </div>
            </div>
        </form>

        <!-- Search bar -->
        <form method="get" class="mb-4">
            <div class="row g-3">
                <div class="col-md-10">
                    <input type="text" name="search" class="form-control" placeholder="Cari judul film (awalan huruf atau kata pertama)" value="<?= htmlspecialchars($keyword) ?>">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-secondary w-100">🔍 Cari</button>
                </div>
            </div>
        </form>


        <!-- Tabel watchlist -->
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($watchlist) > 0): ?>
                    <?php foreach ($watchlist as $i => $movie): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= htmlspecialchars($movie['title']) ?></td>
                            <td><?= htmlspecialchars($movie['category']) ?></td>
                            <td>
                                <form action="Function.php" method="post" onsubmit="return confirm('Yakin ingin menghapus?');">
                                    <input type="hidden" name="delete_watchlist" value="<?= $movie['id'] ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">🗑 Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">Watchlist masih kosong.</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php
include '../config/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM karyawan");

session_start ();
if(!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin'){
    header("Location: ../auth/login.php");
    exit;
}
$username = $_SESSION['username']; // simpan dulu di variabel
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD PHP - Data Karyawan</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <div class="container my-5">
    <?php if(isset($username)): ?>
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Selamat datang, Admin <?= htmlspecialchars($username); ?>!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

    <div class="text-center mb-4">
      <h2 class="fw-bold">Manajemen Data Karyawan</h2>
    </div>

    <div class="card shadow">
      <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <span><i class="bi bi-people-fill me-2"></i>Data Karyawan</span> 
        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticInput">
          <i class="bi bi-plus-circle me-1"></i>Tambah Data
        </button>
      </div>

      <span><i class="bi bi-box-arrow-right m-2"></i> <a href="../auth/logout.php">Log out</a> </span>

      <div class="card-body">
        <table class="table table-hover table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Foto</th>
              <th>Jabatan</th>
              <th>Kontak</th>
              <th>Usia</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php $no = 1; while ($data = mysqli_fetch_assoc($query)) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama_karyawan']; ?></td>
                <td><img src="../uploads/<?= $data['foto']; ?>" alt="<?= $data['nama_karyawan']; ?>" class="img-thumbnail" width="100"></td>
                <td><?= $data['jabatan']; ?></td>
                <td><?= $data['contact']; ?></td>
                <td><?= $data['age']; ?></td>
                <td>
                  <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#staticEdit<?= $data['id_karyawan']; ?>">
                    <i class="bi bi-pencil-square"></i>
                  </button>
                  <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticHapus<?= $data['id_karyawan']; ?>">
                    <i class="bi bi-trash"></i>
                  </button>
                </td>
              </tr>

              <!-- Modal Edit -->
              <div class="modal fade" id="staticEdit<?= $data['id_karyawan']; ?>" tabindex="-1" aria-labelledby="editLabel<?= $data['id_karyawan']; ?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content shadow">
                    <div class="modal-header bg-warning">
                      <h5 class="modal-title" id="editLabel<?= $data['id_karyawan']; ?>"><i class="bi bi-pencil-square me-2"></i>Edit Data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="../aksi.php" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <input type="hidden" name="id_karyawan" value="<?= $data['id_karyawan']; ?>">
                        <div class="mb-3">
                          <label class="form-label">Nama</label>
                          <input type="text" class="form-control" name="nama_karyawan" value="<?= $data['nama_karyawan']; ?>" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Foto</label>
                          <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Jabatan</label>
                          <input type="text" class="form-control" name="jabatan" value="<?= $data['jabatan']; ?>" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Kontak</label>
                          <input type="text" class="form-control" name="contact" value="<?= $data['contact']; ?>" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Usia</label>
                          <input type="number" class="form-control" name="age" value="<?= $data['age']; ?>" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="edit" class="btn btn-warning"><i class="bi bi-save me-1"></i>Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Modal Hapus -->
              <div class="modal fade" id="staticHapus<?= $data['id_karyawan']; ?>" tabindex="-1" aria-labelledby="hapusLabel<?= $data['id_karyawan']; ?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content shadow">
                    <div class="modal-header bg-danger text-white">
                      <h5 class="modal-title" id="hapusLabel<?= $data['id_karyawan']; ?>"><i class="bi bi-exclamation-triangle me-2"></i>Hapus Data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="../aksi.php" method="post">
                      <input type="hidden" name="id_karyawan" value="<?= $data['id_karyawan']; ?>">
                      <div class="modal-body">
                        <p class="text-center text-danger">Apakah Anda yakin ingin menghapus data ini?</p>
                        <p class="text-center fw-bold"><?= $data['nama_karyawan']; ?></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="hapus" class="btn btn-danger"><i class="bi bi-trash me-1"></i>Hapus</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal Tambah -->
  <div class="modal fade" id="staticInput" tabindex="-1" aria-labelledby="staticInputLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content shadow">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="staticInputLabel"><i class="bi bi-person-plus me-2"></i>Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <form action="../aksi.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Nama Karyawan</label>
              <input type="text" class="form-control" name="nama_karyawan" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Foto</label>
              <input type="file" class="form-control" name="foto" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Kontak</label>
              <input type="text" class="form-control" name="contact" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Usia</label>
              <input type="number" class="form-control" name="age" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" name="submit" class="btn btn-success"><i class="bi bi-save me-1"></i>Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

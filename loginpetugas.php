
<div class="row mt-3">
<div class="col-md-4 offset-md-4">
    <div class="card">
        <div class="card-header">
            LOGIN
        </div>
        <div class="card-body">
            <form action="config/aksi_login.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Login Sebagai</label>
                    <select class="form-control" name="level">
                        <option value="masyarakat">Petugas</option>
                    </select>
                </div>

        </div>
        <div class="card-footer">
            <button type="submit" name="kirim" class="btn btn-primary">MASUK</button> <br>
            <a href="index.php?page=registrasi" class="m-5">Belum punya akun? Login disini!</a> <br>
            <a href="index.php?page=loginpetugas" class="m-4">Login sebagai petugas? Login disini!</a>
        </div>
        </form>
    </div>
</div>
</div>
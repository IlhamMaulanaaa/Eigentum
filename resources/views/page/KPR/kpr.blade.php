<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <h2 class="mb-4 text-center">Kalkulator KPR</h2>
          <div class="mb-3">
            <label for="harga-properti" class="form-label">Harga Properti:</label>
            <div class="input-group">
              <span class="input-group-text">Rp</span>
              <input type="number" class="form-control" id="harga-properti" name="harga-properti" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="jumlah-dp" class="form-label">Jumlah DP:</label>
            <div class="input-group">
              <span class="input-group-text">Rp</span>
              <input type="number" class="form-control" id="jumlah-dp" name="jumlah-dp" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="dp" class="form-label">DP:</label>
            <select class="form-select" id="dp" name="dp" required>
              <option value="10">10%</option>
              <option value="20">20%</option>
              <option value="30">30%</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="bunga-fixed" class="form-label">Bunga Fixed:</label>
            <div class="input-group">
              <input type="number" class="form-control" id="bunga-fixed" name="bunga-fixed" required>
              <span class="input-group-text">%</span>
            </div>
          </div>
          <div class="mb-3">
            <label for="fix-year" class="form-label">Fix Year:</label>
            <select class="form-select" id="fix-year" name="fix-year" required>
              <option value="1">1 tahun</option>
              <option value="2">2 tahun</option>
              <option value="3">3 tahun</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="floating-rate" class="form-label">Floating Rate:</label>
            <div class="input-group">
              <input type="number" class="form-control" id="floating-rate" name="floating-rate" required>
              <span class="input-group-text">%</span>
            </div>
          </div>
          <div class="mb-3">
            <label for="tenor" class="form-label">Tenor:</label>
            <select class="form-select" id="tenor" name="tenor" required>
              <option value="5">5 tahun</option>
              <option value="10">10 tahun</option>
              <option value="15">15 tahun</option>
              <option value="20">20 tahun</option>
              <option value="25">25 tahun</option>
              <option value="30">30 tahun</option>
            </select>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="syarat-ketentuan" name="syarat-ketentuan" required>
            <label class="form-check-label" for="syarat-ketentuan">Saya telah membaca dan menyetujui <a href="#">syarat &amp; ketentuan</a> KPR</label>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Hitung KPR</button>
          </div>
  
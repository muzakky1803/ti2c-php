<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Input Biodata</title>
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
}

.container {
  max-width: 600px;
  margin: 40px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  margin-top: 0;
  font-weight: bold;
  color: #333;
}

/* Form Styles */

.form-group {
  margin-bottom: 20px;
}

.label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}

.input,.textarea,.select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.input:focus,.textarea:focus,.select:focus {
  border-color: #aaa;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.textarea {
  height: 100px;
  resize: vertical;
}

.select {
  height: 40px;
}

.button {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.button:hover {
  background-color: #3e8e41;
}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
  <script>
    function confirmSubmit() {
      return confirm("Apakah Anda yakin ingin menyimpan data?");
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Input Biodata</h1>
    <form action="inputProses.php" method="post" onsubmit="return confirmSubmit()">
      <div class="form-group">
        <label for="nama" class="label">Nama:</label>
        <input type="text" id="nama" name="nama" class="input" required>
      </div>
      
      <div class="form-group">
        <label for="nim" class="label">NIM:</label>
        <input type="text" id="nim" name="nim" class="input" required>
      </div>

      <div class="form-group">
        <label for="alamat" class="label">Alamat:</label>
        <textarea id="alamat" name="alamat" class="textarea" required></textarea>
      </div>

      <div class="form-group">
        <label for="ttl" class="label">Tempat Tanggal Lahir:</label>
        <input type="text" id="ttl" name="ttl" class="input" required>
      </div>

      <div class="form-group">
        <label for="jk" class="label">Jenis Kelamin:</label>
        <select id="jk" name="jk" class="select" required>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>

      <div class="form-group">
        <label for="usia" class="label">Usia:</label>
        <input type="number" id="usia" name="usia" class="input" min="1" required>
      </div>

      <button type="submit" class="button">Simpan</button>
    </form>
  </div>
</body>
</html>
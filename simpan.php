<?php

// Check if data is submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Capture form data
  $id = $_POST["id"];
  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $alamat = $_POST["alamat"];
  $ttl = $_POST["ttl"];
  $jk = $_POST["jk"];
  $usia = $_POST["usia"];

  // Prepare data string
  $data = "ID: $id\nNama: $nama\nNIM: $nim\nAlamat: $alamat\nTTL: $ttl\nJenis Kelamin: $jk\nUsia: $usia\n";

  // Open file for appending (adds to existing content)
  $file = fopen("data_mahasiswa.txt", "a");

  // Write data to file
  fwrite($file, $data);

  // Close the file
  fclose($file);

  // Display success message (optional)
  echo "Data mahasiswa berhasil disimpan!";
  
} else {
  // If data is not submitted via POST, handle the error (optional)
  echo "Error: Data not submitted correctly.";
}
?>

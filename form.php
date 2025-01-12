<html>
 <head>
  <title>
   SMP Negeri 3 Malang
  </title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
  <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.form-container {
    width: 80%;
    max-width: 600px;
    margin: 50px auto;
    background-color: #e6f4e6;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #006400;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

input, textarea, button {
    width: 100%;
    margin-top: 5px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

textarea {
    height: 100px;
}

button {
    background-color: #006400;
    color: white;
    border: none;
    cursor: pointer;
    margin-top: 15px;
}

button:hover {
    background-color: #004c00;
}
</style>
</head>
<body>
    <div class="form-container">
        <h2>TULISKAN PESAN DAN KESAN MU SAAT BERSEKOLAH DI SMP NEGERI 3 MALANG</h2>
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" required>
            
            <label for="year">Lulusan Tahun</label>
            <input type="number" id="year" name="year" required>
            
            <label for="message">Pesan dan Kesan</label>
            <textarea id="message" name="message" required></textarea>
            
            <label for="memory">Kenangan (Opsional)</label>
            <input type="file" id="memory" name="memory[]" multiple accept="image/*">
            
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>

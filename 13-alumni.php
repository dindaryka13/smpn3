<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMP Negeri 3 Malang</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            
            <div class="banner4 alumni">
                <div class="banner-content">
                    <div class="overlay"></div>
                    <h2>PESAN DAN KESAN</h2>
                    <h2>ALUMNI SMP NEGERI 3 MALANG</h2>
                </div>
            </div>
        </header>

        <main>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" placeholder="Masukkan nama" required>
              </div>
              <div class="form-group">
                <label for="year">Lulusan Tahun</label>
                <input type="number" id="year" placeholder="Masukkan tahun lulusan" required>
              </div>
              <div class="form-group">
                <label for="message">Pesan dan Kesan</label>
                <textarea id="message" placeholder="Tuliskan pesan dan kesan Anda" required></textarea>
              </div>
              <div class="form-group">
                <label>Unggah Foto Kenangan</label>
                <div class="upload-container">
                  <div class="file-upload" id="fileUploadBox1">
                    <label>
                      <input type="file" id="fileInput1" accept="image/*">
                      <span>Klik untuk unggah foto 1</span>
                      <img id="previewImage1" src="#" alt="" style="display: none;">
                    </label>
                  </div>
                  <div class="file-upload" id="fileUploadBox2">
                    <label>
                      <input type="file" id="fileInput2" accept="image/*">
                      <span>Klik untuk unggah foto 2</span>
                      <img id="previewImage2" src="#" alt="" style="display: none;">
                    </label>
                  </div>
                  <div class="file-upload" id="fileUploadBox3">
                    <label>
                      <input type="file" id="fileInput3" accept="image/*">
                      <span>Klik untuk unggah foto 3</span>
                      <img id="previewImage3" src="#" alt="" style="display: none;">
                    </label>
                  </div>
                </div>
              </div>
              <button type="submit" class="submit-btn">Kirim</button>
            </form>
          </div>
          
          <!-- Bagian Hasil -->
          <div class="container">
            <h2>Hasil Pesan dan Kesan</h2>
            <div class="results" id="results">
              <p>Belum ada pesan yang dikirim.</p>
            </div>
          </div>
          
          <script>
            document.getElementById("fileInput1").addEventListener("change", function() {
              const file = this.files[0];
              if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                  document.getElementById("previewImage1").src = e.target.result;
                  document.getElementById("previewImage1").style.display = "block";
                };
                reader.readAsDataURL(file);
              }
            });
          
            document.getElementById("fileInput2").addEventListener("change", function() {
              const file = this.files[0];
              if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                  document.getElementById("previewImage2").src = e.target.result;
                  document.getElementById("previewImage2").style.display = "block";
                };
                reader.readAsDataURL(file);
              }
            });
          
            document.getElementById("fileInput3").addEventListener("change", function() {
              const file = this.files[0];
              if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                  document.getElementById("previewImage3").src = e.target.result;
                  document.getElementById("previewImage3").style.display = "block";
                };
                reader.readAsDataURL(file);
              }
            });
          
            document.getElementById("feedbackForm").addEventListener("submit", function(event) {
              event.preventDefault();
          
              // Ambil nilai input
              const name = document.getElementById("name").value;
              const year = document.getElementById("year").value;
              const message = document.getElementById("message").value;
              const photo1 = document.getElementById("previewImage1").src;
              const photo2 = document.getElementById("previewImage2").src;
              const photo3 = document.getElementById("previewImage3").src;
          
              const resultsContainer = document.getElementById("results");
              if (resultsContainer.querySelector("p")) {
                resultsContainer.querySelector("p").remove();
              }
          
              const resultCard = document.createElement("div");
              resultCard.classList.add("result-card");
              
              resultCard.innerHTML = `
                <div class="result-header">
                  <h3>${name} (Lulusan ${year})</h3>
                </div>
                <div class="result-message">
                  <p>"${message}"</p>
                </div>
                <div class="result-images">
                  ${photo1 !== "#" ? `<img class="result-image" src="${photo1}" alt="Foto 1">` : ""}
                  ${photo2 !== "#" ? `<img class="result-image" src="${photo2}" alt="Foto 2">` : ""}
                  ${photo3 !== "#" ? `<img class="result-image" src="${photo3}" alt="Foto 3">` : ""}
                </div>
              `;
          
              resultsContainer.prepend(resultCard);
              
              // Reset form
              document.getElementById("feedbackForm").reset();
              document.getElementById("previewImage1").style.display = "none";
              document.getElementById("previewImage2").style.display = "none";
              document.getElementById("previewImage3").style.display = "none";
            });
          </script>
        </main>
    </body>
</html>

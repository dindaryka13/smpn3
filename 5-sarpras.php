<html>
 <head>
  <title>
   SMP Negeri 3 Malang
  </title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
  <style>
    body {
    font-family: 'Lato', sans-serif;
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
}

.hero {
    position: relative;
    z-index: 1;
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
    text-align: center;
}

.hero.sarpras {
    background-image: url('./img/sarpras.jpeg');
}

.hero .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.411);
    z-index: 1;
}

.hero h2,
.hero input {
    position: relative;
    z-index: 1;
}

.fasilitas {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 30px;
    padding: 50px 0;
}

.fasilitas-item {
    width: 80%;
    max-width: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.fasilitas-image {
    width: 100%;
    height: 300px;
    background-color: #ccc;
    margin-bottom: 10px;
    background-size: cover;
    background-position: center;
    border-radius: 8px;
}

.fasilitas-item:nth-child(1) .fasilitas-image {
    background-image: url('./img/kelas.jpg'); 
}

.fasilitas-item:nth-child(2) .fasilitas-image {
    background-image: url('./img/lab.jpg'); 
}

.fasilitas-item:nth-child(3) .fasilitas-image {
    background-image: url('./img/banner3.png');
}

.fasilitas-item:nth-child(4) .fasilitas-image {
    background-image: url('./img/perpus.jpg');
}

.fasilitas-item:nth-child(5) .fasilitas-image {
    background-image: url('./img/uks.jpg'); 
}
.fasilitas-item p {
    font-size: 18px;
    font-weight: bold;
}

</style>
<body>
    
    <div class="hero sarpras">
        <div class="overlay"></div>
         <h2>SARANA PRASARANA SMP NEGERI 3 MALANG
        </h2>
       </div>
    <section class="fasilitas">
        <div class="fasilitas-item">
            <div class="fasilitas-image"></div>
            <p>Ruang Kelas</p>
        </div>
        <div class="fasilitas-item">
            <div class="fasilitas-image"></div>
            <p>Laboratorium IPA</p>
        </div>
        <div class="fasilitas-item">
            <div class="fasilitas-image"></div>
            <p>Laboratorium Komputer</p>
        </div>
        <div class="fasilitas-item">
            <div class="fasilitas-image"></div>
            <p>Perpustakaan</p>
        </div>
        <div class="fasilitas-item">
            <div class="fasilitas-image"></div>
            <p>UKS</p>
        </div>
    </section>
    
    </body>
    </html>
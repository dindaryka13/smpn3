<html>
 <head>
  <title>
   SMP Negeri 3 Malang
  </title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet"/>
  <style>* {
    box-sizing: border-box;
}

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
.hero.profil {
    background-image: url('./img/profil.jpg');
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

.card-container {
    display: flex;
    gap: 20px;
    margin-top: 50px;
    margin-left: 40px;
    margin-right: 40px;
    margin-bottom: 40px;
    justify-content: center;
}

.card {
    width: 200px;
    height: 400px;
    border-radius: 10px;
    background-color: #e9f8f3;
    overflow: hidden;
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    cursor: pointer;
}

.card:hover {
    transform: scale(1.1);
}

.card-image {
    width: 50%;
    height: 100px;
    background-size: cover;
    background-position: center;
    margin: 10px auto;
    transition: all 0.3s ease;
}

.card-info {
    text-align: center;
    padding: 10px;
}

.position {
    font-size: 18px;
    font-weight: bold;
    color: #333;
}

.name {
    font-size: 16px;
    color: #555;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.card:hover .name {
    opacity: 1; 
}

.card:hover .card-image {
    width: 100%;
    height: 60%;
}

.teacher-profiles {
    max-width: 800px;
    margin: auto;
    text-align: center;
}

.teacher-profiles h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.profile-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    padding: 50px;
    gap: 150px;
}

.subject-info {
    flex: 1;
    text-align: left;
}

.subject-info h2 {
    font-size: 18px;
    color: #2d6187;
    margin-bottom: 10px;
}

.subject-info ul {
    list-style-type: none;
    padding-left: 10px;
}

.subject-info li {
    font-size: 16px;
    color: #555;
    margin-bottom: 5px;
}

.profile-card img {
    width: 250px;
    height: 200px;
    border-radius: 8px;
    object-fit: cover;
}

</style>
<body>
    <header>
        <div class="hero profil">
        <div class="overlay"></div>
        <h2>
         PROFIL
         <br/>
         PROFIL GURU SMP NEGERI 3 MALANG
        </h2>
       </div>
</header>
       <div class="card-container">
        
        <div class="card">
            <div class="card-image" style="background-image: url('./img/kep.png');"></div>
            <div class="card-info">
                <h3 class="position">Kepala Sekolah</h3>
                <h4 class="name">Dra. Mutmainah Amini, M.Pd</h4>
            </div>
        </div>
        
        
        <div class="card">
            <div class="card-image" style="background-image: url('./img/p-zain.png');"></div>
            <div class="card-info">
                <h3 class="position"> Wakil Kepala Sekolah Bidang Kurikulum</h3>
                <h4 class="name">John Doe</h4>
            </div>
        </div>
    
       
        <div class="card">
            <div class="card-image" style="background-image: url('./img/mr-heri.png');"></div>
            <div class="card-info">
                <h3 class="position">Wakil Kepala Sekolah Bidang Kesiswaan</h3>
                <h4 class="name">Jane Smith</h4>
            </div>
        </div>
    
        
        <div class="card">
            <div class="card-image" style="background-image: url('./img/p-imam.png');"></div>
            <div class="card-info">
                <h3 class="position">Wakil Kepala Sekolah Bidang Sarana dan Prasarana</h3>
                <h4 class="name">Robert Brown</h4>
            </div>
        </div>
    </div>
    <section class="teacher-profiles">
        <h1>Guru Mata Pelajaran</h1>

        <div class="profile-card">
            <div class="subject-info">
                <h2>Matematika</h2>
                <ul>
                    <li>Yuli Anita, S.Pd</li>
                    <li>Radin Nur Shinta, M.Pd</li>
                    <li>Nurul Fatimah, S.Pd</li>
                    <li>Annisa Puspanti, S.Pd</li>
                </ul>
            </div>
            <img src="./img/guru1.png" alt="Math Teachers">
        </div>

        <div class="profile-card">
            <div class="subject-info">
                <h2>B Indonesia</h2>
                <ul>
                    <li>Mahmud Mustofa, M.Pd</li>
                    <li>Sheryl Debrina Savitri, S.Pd</li>
                    <li>Dani Sukaesih, S.Pd</li>
                    <li>Ery Widya Hastina, S.S, S.Pd</li>
                    <li>Rini Dwi Putri Mutiararoh, S.Pd</li>
                    <li>Diah Eka Octaviani, S.Pd</li>
                </ul>
            </div>
            <img src="./img/guru2.png" alt="Bahasa Indonesia Teachers">
        </div>

        <div class="profile-card">
            <div class="subject-info">
                <h2>PPKN</h2>
                <ul>
                    <li>Yulianita Damayanti, S.Pd</li>
                    <li>Muhammad Shofi Setyawan</li>
                    <li>Cintya Indah Sari</li>
                </ul>
            </div>
            <img src="./img/guru3.png" alt="PPKN Teachers">
        </div>

        <div class="profile-card">
            <div class="subject-info">
                <h2>Bahasa Inggris</h2>
                <ul>
                    <li>Arie Susanti, M.Pd</li>
                    <li>Imam Mustofa, S.S</li>
                    <li>Herlista, S.Pd</li>
                    <li>Novi Rani Haryani, S.Pd</li>
                    <li>Nurulatul Hidayah, S.Pd</li>
                    <li>M. Faqi Ramadhani, M.Pd</li>
                </ul>
            </div>
            <img src="./img/guru4.png" alt="English Teachers">
        </div>
    </section>
    </body>
    </html>

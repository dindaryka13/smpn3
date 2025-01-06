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

.hero.ekskul {
    background-image: url('./img/banner4.png');
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

.content {
    padding: 20px;
    text-align: center;
}
.content img {
    width: 350px;
    height: 200px;
}
.content .item {
    display: inline-block;
    width: 30%;
    margin: 20px 1%;
    vertical-align: top;
}
.content .item p {
    margin-top: 10px;
    font-size: 18px;
    font-weight: bold;
}
.content .item hr {
    border: 0;
    border-top: 1px solid #4caf50;
    width: 50%;
}

</style>
<body>
    
    <div class="hero ekskul">
        <div class="overlay"></div>
        <h2>
         EKSTRAKULIKULER
        </h2>
       </div>
    <div class="content">
        <div class="item">
         <img alt="Badminton Image" height="150" src="./img/ekskul.jpg" width="150"/>
         <p>
          Badminton
         </p>
         <hr/>
        </div>
        <div class="item">
         <img alt="Futsal Image" height="150" src="./img/futsal.jpg" width="150"/>
         <p>
          Futsal
         </p>
         <hr/>
        </div>
        <div class="item">
         <img alt="Catur Image" height="150" src="./img/tenis-meja.jpg" width="150"/>
         <p>
          Tenis Meja
         </p>
         <hr/>
        </div>
        <div class="item">
         <img alt="Futsal Image" height="150" src="./img/tari.jpg" width="150"/>
         <p>
          Tari
         </p>
         <hr/>
        </div>
        <div class="item">
         <img alt="Voli Image" height="150" src="./img/padsu.jpg" width="150"/>
         <p>
          Paduan Suara
         </p>
         <hr/>
        </div>
        <div class="item">
         <img alt="Tahfidz Al Quran Image" height="150" src="./img/teater.jpg" width="150"/>
         <p>
          Teater
         </p>
         <hr/>
        </div>
        
</body>
    
     
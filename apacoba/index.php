<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="styles/style.css">
    <title>Jasa Joki Genshin Impact</title>
</head>
<body>
    <header>
        <?php include 'navbar.php' ?>
    </header>
    <!-- hero start -->
    <section class="hero" id="home">
        <main class="content">
            <img src = "assets/bannerjoki.png" alt="banner joki">
            <h1>Joki Genshin Impact </h1>
            <p>
                Untuk kalian yg sibuk tapi tetap mau ngikutin update-update dari Genshin kalian bisa joki di ELghazJoki aja! Di jasa joki kami sudah menyelesaikan ratusan akun dan ratusan testimoni dan dikerjakan dengan admin yang aman, tanpa cheat, dan terpecaya!
            </p>
        </main>
    </section>
    <!-- hero end -->

    <!-- List Joki Section -->
    <section class="pilihan-joki" id = "listjoki">
        <h2>Pilihan Joki</h2>
        <div class="joki-container">
            <div class="joki-card">
                <h3>Joki Quest</h3>
                <ul>
                    <li>Menyelesaikan Archon Quest dan Story Quest.</li>
                    <li>Menyelesaikan World Quest.</li>
                    <li>Menyelesaikan Quest Daily.</li>
                </ul>
                <div class="joki-card-gambar">
                    <img src="assets/Icon_Archon_Quest.webp" alt="Icon Archon Quest">
                    <img src ="assets/Icon_World_Quest.webp" alt="Icon World Quest">
                </div>
            </div>
            <div class="joki-card">
                <h3>Joki Explore</h3>
                <ul>
                    <li>Menyelesaikan quest eksplorasi.</li>
                    <li>Membuka map dan teleport.</li>
                    <li>Membuka domain.</li>
                </ul>
                <div class="joki-card-gambar">
                    <img src="assets/Item_Artificer_Chest.webp" alt="Icon Archon Quest">
                    <img src ="assets/portable-waypoint.png" alt="Icon World Quest">
                </div>
            </div>
            <div class="joki-card">
                <h3>Joki Material</h3>
                <p>Joki collect material untuk ascend karakter dan senjata.</p>
                <ul>
                    <li>The Catch.</li>
                    <li>Material karakter.</li>
                    <li>Material senjata.</li>
                    <li>Material talent.</li>
                </ul>
                <div class="joki-card-gambar">
                    <img src="assets/Weapon_The_Catch.webp" alt="Icon Archon Quest">
                    <img src ="assets/cleansing-heart.png" alt="Icon World Quest">
                    <img src = "assets/Item_Raimei_Angelfish.webp" alt="Icon World Quest">
                    <img src ="assets/tidalga.png" alt="Icon World Quest">
                </div>
                
            </div>
            <div class="joki-card">
                <h3>Joki Build Character</h3>
                <p>Buat karaktermu kuat dengan joki build character dijamin dapat stat yang bagus</p>
                <div class="joki-card-gambar">
                    <img src="assets/gemstone.png" alt="Icon Archon Quest">
                    <img src ="assets/thunderclap-fruitcore.png" alt="Icon World Quest">
                    <img src ="assets/gemstone1.png" alt="Icon World Quest">
                </div>
            </div>
            
            <div class="joki-card">
                <h3>Rawat Akun</h3>
                <ul>
                    <li>Menyelesaikan Daily Comission.</li>
                    <li>Menyelesaikan Battle Pass.</li>
                    <li>Menyelesaikan Event</li>
                </ul>
                <div class="joki-card-gambar">
                    <img src ="assets/System_Battle_Pass.webp" alt="Icon World Quest">
                    <img src="assets/dailycommis.png" alt="Icon Archon Quest">
                    <img src ="assets/event.png" alt="Icon World Quest">
                </div>
            </div>
        </div>
    </section>
    

    <!-- pesan Section -->
    <section id="pesan">
        <h2>Form Pesanan</h2>
        <p>Silahkan isi form pesanan dibawah ini:</p>
        
        <form action="pesan.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="uid">UID Genshin:</label>
            <input type="number" id="uid" name="uid" placeholder="80xxxxxx" required>

            <label for = "user-login">Username/Email Login:</label>
            <input type="text" id="user-login" name="user-login" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="service">Layanan:</label>
            <select id="service" name="service" required>
                <option value="" disabled selected>-- Pilih Joki</option> 
                <option value="joki_quest">Joki Quest</option>
                <option value="joki_explore">Joki Explore</option>
                <option value="joki_material">Joki Material</option>
                <option value="joki_build_character">Joki Build Character</option>
                <option value="rawat_akun">Rawat Akun</option>
            </select>


            <button class = "chatadmin" type="submit" >Kirim Pesanan</button>
        </form>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>Tentang Saya</h2>
        <ul>
            <li><strong>Nama:</strong> Muhammad Ghazali</li>
            <li><strong>Gender:</strong> Laki-Laki</li>
            <li><strong>NIM:</strong> 2309106041</li>
            <li><strong>Prodi:</strong> S1 Informatika</li>
            <li><strong>Universitas:</strong> Universitas Mulawarman</li>
        </ul>
    </section>

    <?php require 'footer.php' ?>

    
    <script src="scripts/script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Festin Royal - Restaurant Gastronomique</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Georgia', serif; color: #2c2c2a; background: #fff; }

        /* NAV */
        nav {
            position: fixed; top: 0; width: 100%; z-index: 100;
            background: rgba(0,0,0,0.85); padding: 1rem 2rem;
            display: flex; justify-content: space-between; align-items: center;
        }
        nav .logo { color: #EF9F27; font-size: 1.5rem; letter-spacing: 2px; }
        nav ul { list-style: none; display: flex; gap: 2rem; }
        nav ul li a { color: #fff; text-decoration: none; font-size: 0.9rem; letter-spacing: 1px; transition: color 0.3s; font-family: sans-serif; }
        nav ul li a:hover { color: #EF9F27; }

        /* HERO */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                        url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1600') center/cover no-repeat;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center; text-align: center; color: #fff;
        }
        .hero h1 { font-size: 3.5rem; letter-spacing: 4px; margin-bottom: 1rem; }
        .hero p { font-size: 1.2rem; color: #EF9F27; letter-spacing: 2px; margin-bottom: 2rem; font-family: sans-serif; }
        .hero a {
            display: inline-block; padding: 0.9rem 2.5rem;
            border: 2px solid #EF9F27; color: #EF9F27;
            text-decoration: none; letter-spacing: 2px; font-family: sans-serif; font-size: 0.9rem;
            transition: all 0.3s;
        }
        .hero a:hover { background: #EF9F27; color: #000; }

        /* SECTIONS COMMUNES */
        section { padding: 5rem 2rem; }
        .section-title {
            text-align: center; font-size: 2rem; margin-bottom: 0.5rem; letter-spacing: 3px;
        }
        .section-subtitle {
            text-align: center; color: #EF9F27; font-family: sans-serif;
            font-size: 0.9rem; letter-spacing: 2px; margin-bottom: 3rem;
        }
        .divider {
            width: 60px; height: 2px; background: #EF9F27;
            margin: 0.75rem auto 3rem;
        }

        /* A PROPOS */
        .about { background: #faf9f7; }
        .about-grid {
            max-width: 900px; margin: 0 auto;
            display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;
        }
        .about-img {
            width: 100%; height: 350px;
            object-fit: cover; border-radius: 2px;
        }
        .about-text p { line-height: 1.8; color: #444; margin-bottom: 1rem; font-family: sans-serif; font-size: 0.95rem; }

        /* MENU */
        .menu-grid {
            max-width: 1000px; margin: 0 auto;
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;
        }
        .menu-card {
            border: 0.5px solid #ddd; padding: 2rem 1.5rem; text-align: center; transition: all 0.3s;
        }
        .menu-card:hover { border-color: #EF9F27; transform: translateY(-4px); }
        .menu-card .icon { font-size: 2.5rem; margin-bottom: 1rem; }
        .menu-card h3 { font-size: 1.1rem; letter-spacing: 2px; margin-bottom: 0.75rem; }
        .menu-card p { font-family: sans-serif; font-size: 0.85rem; color: #666; line-height: 1.6; margin-bottom: 1rem; }
        .menu-card .price { color: #EF9F27; font-size: 1.1rem; letter-spacing: 1px; }

        /* GALERIE */
        .galerie { background: #faf9f7; }
        .galerie-grid {
            max-width: 1000px; margin: 0 auto;
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem;
        }
        .galerie-grid img {
            width: 100%; height: 220px; object-fit: cover;
            transition: transform 0.4s; cursor: pointer;
        }
        .galerie-grid img:hover { transform: scale(1.04); }

        /* HORAIRES */
        .horaires-grid {
            max-width: 600px; margin: 0 auto;
            display: grid; grid-template-columns: 1fr 1fr; gap: 0;
            border: 0.5px solid #ddd;
        }
        .horaire-item {
            padding: 1.2rem 1.5rem;
            border-bottom: 0.5px solid #ddd;
            font-family: sans-serif; font-size: 0.9rem;
        }
        .horaire-item:nth-child(odd) { border-right: 0.5px solid #ddd; color: #555; }
        .horaire-item:nth-child(even) { color: #EF9F27; font-weight: bold; text-align: right; }

        /* RESERVATION */
        .reservation { background: #1a1a1a; color: #fff; text-align: center; }
        .reservation .section-title { color: #fff; }
        .reservation form {
            max-width: 600px; margin: 0 auto;
            display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;
        }
        .reservation form input,
        .reservation form select {
            padding: 0.9rem 1rem; background: transparent;
            border: 0.5px solid #555; color: #fff; font-family: sans-serif; font-size: 0.9rem;
            outline: none; transition: border-color 0.3s;
        }
        .reservation form input:focus,
        .reservation form select:focus { border-color: #EF9F27; }
        .reservation form input::placeholder { color: #888; }
        .reservation form select option { background: #1a1a1a; }
        .reservation form .full { grid-column: 1 / -1; }
        .reservation form button {
            grid-column: 1 / -1; padding: 1rem;
            background: #EF9F27; color: #000; border: none;
            font-family: sans-serif; font-size: 0.95rem; letter-spacing: 2px;
            cursor: pointer; transition: background 0.3s;
        }
        .reservation form button:hover { background: #BA7517; }

        /* FOOTER */
        footer {
            background: #111; color: #888; text-align: center;
            padding: 2rem; font-family: sans-serif; font-size: 0.85rem;
        }
        footer span { color: #EF9F27; }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2rem; }
            .about-grid, .menu-grid, .galerie-grid { grid-template-columns: 1fr; }
            .reservation form { grid-template-columns: 1fr; }
            nav ul { display: none; }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <nav>
        <div class="logo">LE FESTIN ROYAL</div>
        <ul>
            <li><a href="#apropos">À Propos</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#galerie">Galerie</a></li>
            <li><a href="#horaires">Horaires</a></li>
            <li><a href="#reservation">Réservation</a></li>
        </ul>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <h1>Le Festin Royal</h1>
        <p>CUISINE GASTRONOMIQUE &bull; YAOUNDÉ</p>
        <a href="#reservation">Réserver une table</a>
    </section>

    <!-- A PROPOS -->
    <section class="about" id="apropos">
        <h2 class="section-title">Notre Histoire</h2>
        <div class="divider"></div>
        <div class="about-grid">
            <img class="about-img"
                src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800"
                alt="Notre restaurant">
            <div class="about-text">
                <p>Depuis 2010, Le Festin Royal vous accueille dans un cadre élégant au cœur de Yaoundé. Notre chef étoilé Thierry Mbida marie subtilement les saveurs africaines aux techniques culinaires françaises.</p>
                <p>Chaque plat est une invitation au voyage, préparé avec des ingrédients frais sélectionnés chaque matin au marché local.</p>
                <p>Nous croyons que manger est un art — et chaque repas chez nous est une expérience inoubliable.</p>
            </div>
        </div>
    </section>

    <!-- MENU -->
    <section id="menu">
        <h2 class="section-title">Notre Menu</h2>
        <p class="section-subtitle">SPÉCIALITÉS DE LA MAISON</p>
        <div class="divider"></div>
        <div class="menu-grid">
            <div class="menu-card">
                <div class="icon">🥗</div>
                <h3>Entrées</h3>
                <p>Salade de crevettes au gingembre, Velouté de plantain, Carpaccio de poisson fumé</p>
                <div class="price">À partir de 3 500 FCFA</div>
            </div>
            <div class="menu-card">
                <div class="icon">🍖</div>
                <h3>Plats</h3>
                <p>Poulet DG revisité, Filet de capitaine sauce ndolé, Côte de bœuf grillée aux épices locales</p>
                <div class="price">À partir de 8 500 FCFA</div>
            </div>
            <div class="menu-card">
                <div class="icon">🍮</div>
                <h3>Desserts</h3>
                <p>Fondant chocolat-café, Tarte à la mangue caramélisée, Crème brûlée à la vanille</p>
                <div class="price">À partir de 2 500 FCFA</div>
            </div>
        </div>
    </section>

    <!-- GALERIE -->
    <section class="galerie" id="galerie">
        <h2 class="section-title">Galerie</h2>
        <div class="divider"></div>
        <div class="galerie-grid">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600" alt="Plat 1">
            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600" alt="Salle">
            <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?w=600" alt="Plat 2">
            <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=600" alt="Plat 3">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=600" alt="Bar">
            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" alt="Plat 4">
        </div>
    </section>

    <!-- HORAIRES -->
    <section id="horaires">
        <h2 class="section-title">Horaires</h2>
        <div class="divider"></div>
        <div class="horaires-grid">
            <div class="horaire-item">Lundi - Vendredi</div>
            <div class="horaire-item">12h00 - 23h00</div>
            <div class="horaire-item">Samedi</div>
            <div class="horaire-item">11h00 - 00h00</div>
            <div class="horaire-item">Dimanche</div>
            <div class="horaire-item">11h00 - 22h00</div>
            <div class="horaire-item" style="border-bottom:none;">Jours fériés</div>
            <div class="horaire-item" style="border-bottom:none;">12h00 - 21h00</div>
        </div>
    </section>

    <!-- RESERVATION -->
    <section class="reservation" id="reservation">
        <h2 class="section-title">Réserver une Table</h2>
        <p class="section-subtitle" style="color:#888;">NOUS SERONS RAVIS DE VOUS ACCUEILLIR</p>
        <div class="divider"></div>
        <form>
            <input type="text" placeholder="Votre nom complet" required>
            <input type="tel" placeholder="Téléphone">
            <input type="date" required>
            <input type="time" required>
            <select>
                <option value="">Nombre de personnes</option>
                <option>1 personne</option>
                <option>2 personnes</option>
                <option>3-4 personnes</option>
                <option>5-6 personnes</option>
                <option>7+ personnes</option>
            </select>
            <input type="email" placeholder="Email (optionnel)">
            <button type="submit" class="full">RÉSERVER MAINTENANT</button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 <span>Le Festin Royal</span> &mdash; Yaoundé, Cameroun &mdash; +237 6XX XXX XXX</p>
    </footer>

</body>
</html>
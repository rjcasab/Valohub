<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALOHUB - Campeones</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .champions-container {
            padding: 40px;
            max-width: 1400px;
            margin: 0 auto;
            min-height: calc(100vh - 60px - 150px);
        }

        .champions-header {
            text-align: center;
            margin-bottom: 40px;
            padding-top: 20px;
        }

        .champions-header h1 {
            font-family: var(--font-heading);
            font-size: 4rem;
            color: var(--primary-red);
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .champions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 20px 0;
        }

        .champion-card {
            background-color: var(--dark-bg);
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid transparent;
            transition: transform 0.3s, border-color 0.3s;
            cursor: pointer;
            position: relative;
        }

        .champion-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary-red);
        }

        .champion-image {
            height: 300px;
            background-color: #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
        }

        .champion-info {
            padding: 20px;
            background: linear-gradient(to top, var(--darker-bg), transparent);
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .champion-name {
            font-family: var(--font-heading);
            font-size: 2rem;
            color: white;
            margin-bottom: 5px;
        }

        .champion-role {
            color: var(--primary-red);
            font-weight: bold;
            font-size: 1rem;
            text-transform: uppercase;
        }

        /* Gradient Backgrounds */
        .bg-sentinel {
            background: linear-gradient(135deg, #1A1A1A, #00FF00);
        }

        .bg-duelist {
            background: linear-gradient(135deg, #1A1A1A, #00AFFF);
        }

        .bg-controller {
            background: linear-gradient(135deg, #1A1A1A, #8A2BE2);
        }

        .bg-initiator {
            background: linear-gradient(135deg, #1A1A1A, #FFD700);
        }
    </style>
</head>

<body>
    <header class="main-header">
        <div class="logo-container" style="cursor: pointer;" onclick="window.location.href='index.php'">
            <span class="riot-logo" role="img" aria-label="Riot Games Logo">👊</span>
            <div class="divider"></div>
            <span class="game-logo" role="img" aria-label="Valorant Logo">V</span>
        </div>
        <nav class="main-nav">
            <ul>
                <li><button class="nav-btn" onclick="window.location.href='champions.php'">Campeones <span
                            class="arrow">▼</span></button></li>
                <li><button class="nav-btn" onclick="window.location.href='weapons.php'">Armas <span
                            class="arrow">▼</span></button></li>
                <li><button class="nav-btn" onclick="window.location.href='maps.php'">Mapas <span
                            class="arrow">▼</span></button></li>
            </ul>
        </nav>
        <div class="auth-buttons">

		<?php if (isset($_SESSION['usuario'])): ?>

			<span class="user-name">
				<?php echo $_SESSION['usuario']; ?>
			</span>

			<a href="logout.php" class="btn-text">
				Cerrar sesión
			</a>

		<?php else: ?>

			<a href="login.html" class="btn-text">
				Iniciar sesión
			</a>

			<a href="register.html" class="btn-text">
				Registrarse
			</a>

		<?php endif; ?>

		</div>
    </header>

     <main>
        <section class="champions-container">
            <div class="champions-header">
                <h1>Nuestros Campeones</h1>
                <p style="color: var(--text-gray); font-size: 1.2rem; margin-top: 10px;">Conoce a los agentes, sus
                    habilidades y su rol en el equipo.</p>
            </div>

            <div class="champions-grid">
                <article class="champion-card">
                    <div class="champion-image bg-sentinel">
                        <img src="imagenes/sage.png" alt="SAGE">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">SAGE</h2>
                        <span class="champion-role">Centinela</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-duelist">
                        <img src="imagenes/jett.png" alt="JETT">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">JETT</h2>
                        <span class="champion-role">Duelista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-controller">
                        <img src="imagenes/omen.png" alt="OMEN">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">OMEN</h2>
                        <span class="champion-role">Controlador</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-initiator">
                        <img src="imagenes/sova.png" alt="SOVA">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">SOVA</h2>
                        <span class="champion-role">Iniciador</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-duelist"
                        style="background: linear-gradient(135deg, #1A1A1A, #FF4500);">
                        <img src="imagenes/phoenix.png" alt="PHOENIX">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">PHOENIX</h2>
                        <span class="champion-role">Duelista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-sentinel"
                        style="background: linear-gradient(135deg, #1A1A1A, #00CED1);">
                        <img src="imagenes/cypher.png" alt="CYPHER">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">CYPHER</h2>
                        <span class="champion-role">Centinela</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-sentinel">
                        <img src="imagenes/clove.png" alt="CLOVE">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">CLOVE</h2>
                        <span class="champion-role">Centinela</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-controller">
                        <img src="imagenes/deadlock.png" alt="DEADLOCK">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">DEADLOCK</h2>
                        <span class="champion-role">Controlador</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-initiator">
                        <img src="imagenes/fade.png" alt="FADE">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">FADE</h2>
                        <span class="champion-role">Iniciador</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-initiator">
                        <img src="imagenes/gekko.png" alt="GEKKO">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">GEKKO</h2>
                        <span class="champion-role">Iniciador</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-controller">
                        <img src="imagenes/harbor.png" alt="HARBOR">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">HARBOR</h2>
                        <span class="champion-role">Controlador</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-duelist">
                        <img src="imagenes/iso.png" alt="ISO">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">ISO</h2>
                        <span class="champion-role">Duelista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-initiator">
                        <img src="imagenes/kayo.png" alt="KAYO">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">KAYO</h2>
                        <span class="champion-role">Iniciador</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-sentinel">
                        <img src="imagenes/killjoy.png" alt="KILLJOY">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">KILLJOY</h2>
                        <span class="champion-role">Centinela</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-duelist">
                        <img src="imagenes/neon.png" alt="NEON">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">NEON</h2>
                        <span class="champion-role">Duelista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-duelist">
                        <img src="imagenes/raze.png" alt="RAZE">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">RAZE</h2>
                        <span class="champion-role">Duelista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-duelist">
                        <img src="imagenes/reyna.png" alt="REYNA">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">REYNA</h2>
                        <span class="champion-role">Duelista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-initiator">
                        <img src="imagenes/skye.png" alt="SKYE">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">SKYE</h2>
                        <span class="champion-role">Iniciador</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-controller">
                        <img src="imagenes/viper.png" alt="VIPER">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">VIPER</h2>
                        <span class="champion-role">Controlador</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-initiator">
                        <img src="imagenes/waylay.png" width="500"alt="WAYLAY">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">WAYLAY</h2>
                        <span class="champion-role">Especialista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-duelist">
                        <img src="imagenes/yoru.png" alt="YORU">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">YORU</h2>
                        <span class="champion-role">Duelista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-controller">
                        <img src="imagenes/miks.png" alt="MIKS">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">MIKS</h2>
                        <span class="champion-role">Especialista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-controller">
                        <img src="imagenes/tejo.png" alt="TEJO">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">TEJO</h2>
                        <span class="champion-role">Especialista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-controller">
                        <img src="imagenes/veto.png" alt="VETO">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">VETO</h2>
                        <span class="champion-role">Especialista</span>
                    </div>
                </article>

                <article class="champion-card">
                    <div class="champion-image bg-controller">
                        <img src="imagenes/vyse.png" alt="VYSE">
                    </div>
                    <div class="champion-info">
                        <h2 class="champion-name">VYSE</h2>
                        <span class="champion-role">Especialista</span>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="footer-cta">
            <h4>¿Necesitáis mas ayuda?<br>Ponte en contacto con nosotros.</h4>
            <div class="contact-info">
                <span>Valohub@gmail.com</span>
                <span>644160538</span>
            </div>
        </div>
        <div class="footer-social">
            <h4>Redes sociales</h4>
            <ul>
                <li><span class="social-icon">🎵</span> valoranthub</li>
                <li><span class="social-icon">📷</span> valohub</li>
                <li><span class="social-icon">✖️</span> valoxhub</li>
            </ul>
        </div>
    </footer>

    <script src="main.js"></script>
</body>

</html>
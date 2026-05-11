<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALOHUB - Asistencia para Valorant</title>
    <link rel="stylesheet" href="style.css">
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
        <!-- Seleccion de personaje -->
        <section class="hero-section">
            <div class="hero-content">
                <div class="hero-brand">
                    <h1>VALO<span class="red-text">HUB</span> <span class="fist-icon">👊</span></h1>
                </div>
                <div class="hero-text">
                    <h2>Asistencia para valorant</h2>
                    <p>¡Inicia sesion para poder ser el mejor!</p>
                    <button class="cta-btn" onclick="window.location.href='login.html'">INICIAR SESIÓN</button>
                </div>
            </div>
        </section>

        <!-- Contenidos adicionales -->
        <section class="cards-container">
            <div class="card-promo-text">
                <h3>Investiga sobre tus creadores de contenido favoritos</h3>
            </div>
            <div class="cards-grid">
                <article class="card">
                    <div class="card-image placeholder-red">
                        <span class="team-logo">SUMN</span>
                        <span class="vs">VS</span>
                        <span class="team-logo">G2</span>
                    </div>
                    <div class="card-overlay">
                        <p>Mira el torneo del momento</p>
                    </div>
                </article>
                <article class="card">
                    <div class="card-image placeholder-blue">
                        <span class="player-face">👤</span>
                    </div>
                    <div class="card-overlay">
                        <p>Aprende de los mejores</p>
                    </div>
                </article>
                <article class="card">
                    <div class="card-image placeholder-multi">
                        <div class="agent-grid">
                            <span>🎮</span><span>🎮</span><span>🎮</span>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <p>Observa cada fallo y aprende</p>
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
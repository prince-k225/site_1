<!doctype html>
<html>
<head>

    <?php include_once 'views/includes/head.php'?>
    <link rel="stylesheet" href="<?= PATH.'assets/styles/css/home.css' ?>" />


    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php'?>

    <div class="main-container">
        
        <section class="gallery-section">
            <h1 class="page-title">Nouvelle Ère</h1>
            
            <div class="cloth-card" onclick="showDetails('Cyber Jacket', '149 €', ['S', 'M', 'L'], ['#00F0FF', '#FF5A5F'], 'Une veste futuriste imperméable avec doublure thermique active et finitions réfléchissantes.', 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=500&q=80')">
                <div class="cloth-img" style="background-image: url('https://images.unsplash.com/photo-1551028719-00167b16eac5?w=500&q=80')"></div>
                <div class="cloth-info">
                    <h3>Cyber Jacket</h3>
                    <p>149 €</p>
                </div>
            </div>

            <div class="cloth-card" onclick="showDetails('Hoodie Onyx', '89 €', ['M', 'XL'], ['#1E293B', '#000000'], 'Hoodie oversize en coton lourd biologique. Confort absolu, coupe destructurée.', 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=500&q=80')">
                <div class="cloth-img" style="background-image: url('https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=500&q=80')"></div>
                <div class="cloth-info">
                    <h3>Hoodie Onyx</h3>
                    <p>89 €</p>
                </div>
            </div>

            <div class="cloth-card" onclick="showDetails('Cargo Neon', '110 €', ['38', '40', '42'], ['#10B981', '#1E293B'], 'Pantalon cargo technique doté de poches modulaires et de sangles d\'ajustement.', 'https://images.unsplash.com/photo-1517423568366-8b83523034fd?w=500&q=80')">
                <div class="cloth-img" style="background-image: url('https://images.unsplash.com/photo-1517423568366-8b83523034fd?w=500&q=80')"></div>
                <div class="cloth-info">
                    <h3>Cargo Neon</h3>
                    <p>110 €</p>
                </div>
            </div>
        </section>

        <section class="details-section" id="detailsSection">
            <div class="details-placeholder" id="placeholder">
                ✦ Sélectionnez une tenue pour inspecter ses caractéristiques
            </div>
            
            <div class="details-content" id="detailsContent">
                <h2 id="detName">Nom du vêtement</h2>
                <div class="details-price" id="detPrice">00 €</div>
                
                <div class="spec-group">
                    <span class="spec-label">Tailles Disponibles</span>
                    <div class="size-container" id="detSizes">
                        </div>
                </div>

                <div class="spec-group">
                    <span class="spec-label">Nuances</span>
                    <div class="color-container" id="detColors">
                        </div>
                </div>

                <div class="spec-group">
                    <span class="spec-label">Description & Coupe</span>
                    <p class="spec-desc" id="detDesc">Description du produit...</p>
                </div>

                <button class="cta-btn">Ajouter au Manifeste d'Achat</button>
            </div>
        </section>

    </div>

    <?php include_once 'views/includes/footer.php'?>

    <script src="<?= PATH.'assets/styles/css/home.css' ?>" defer></script>

</body>
</html>

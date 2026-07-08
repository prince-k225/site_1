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
            
            <?php if (empty($listProducts)): ?>
                <p>Aucun vêtement disponible pour le moment.</p>
            <?php else: ?>
                <?php foreach ($listProducts as $product): 
                    // Sécurisation des chaînes de caractères pour éviter les bugs JavaScript
                    $escapedName = htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8');
                    $escapedDesc = htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8');
                    $imgUrl = htmlspecialchars($product['image_url'], ENT_QUOTES, 'UTF-8');
                    
                    // Transformation des chaînes "S,M,L" de la BDD en tableaux utilisables par JS
                    $sizesJS = json_encode(explode(',', $product['sizes']));
                    $colorsJS = json_encode(explode(',', $product['colors']));
                ?>
                    <div class="cloth-card" onclick="showDetails(
                        '<?= $escapedName ?>', 
                        '<?= $product['price'] ?> €', 
                        <?= $sizesJS ?>, 
                        <?= $colorsJS ?>, 
                        '<?= $escapedDesc ?>', 
                        '<?= $imgUrl ?>'
                    )">
                        <div class="cloth-img" style="background-image: url('<?= $imgUrl ?>')"></div>
                        <div class="cloth-info">
                            <h3><?= $escapedName ?></h3>
                            <p><?= $product['price'] ?> €</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            
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

    <script src="script.js" defer></script>
</body>
</html>
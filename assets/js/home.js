function showDetails(name, price, sizes, colors, description, imgUrl) {
    // Masquer l'indicateur d'attente et afficher la structure
    document.getElementById('placeholder').style.display = 'none';
    const content = document.getElementById('detailsContent');
    content.style.display = 'block';
    
    // Relancer l'effet d'apparition fluide (fade-in)
    content.style.animation = 'none';
    content.offsetHeight; /* Force le recalcul du navigateur */
    content.style.animation = null;

    // Remplacement des textes dynamiques
    document.getElementById('detName').innerText = name;
    document.getElementById('detPrice').innerText = price;
    document.getElementById('detDesc').innerText = description;

    // Remplissage dynamique des badges de tailles
    const sizeContainer = document.getElementById('detSizes');
    sizeContainer.innerHTML = '';
    sizes.forEach(size => {
        const badge = document.createElement('span');
        badge.className = 'size-badge';
        badge.innerText = size;
        sizeContainer.appendChild(badge);
    });

    // Remplissage dynamique des pastilles de couleurs
    const colorContainer = document.getElementById('detColors');
    colorContainer.innerHTML = '';
    colors.forEach(color => {
        const dot = document.createElement('div');
        dot.className = 'color-dot';
        dot.style.backgroundColor = color;
        colorContainer.appendChild(dot);
    });
}
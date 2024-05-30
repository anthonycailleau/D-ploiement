const express = require('express');
const phpExpress = require('php-express')({
  binPath: 'php' // Modifier le chemin si PHP n'est pas dans votre PATH
});

const app = express();
const port = process.env.PORT || 3000;

// Configurer le moteur PHP
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');
app.set('views', './public');

// Utiliser php-express pour traiter les fichiers PHP
app.all(/.+\.php$/, phpExpress.router);

// Servir les fichiers statiques
app.use(express.static('public'));

app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}/`);
});
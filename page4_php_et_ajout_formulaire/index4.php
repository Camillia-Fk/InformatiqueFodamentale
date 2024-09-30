<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Les étoiles</title>

        <!-- TEST RESPONSIVE  -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <!-- pour javascript plus tard -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

        <!--Ajouter le fichier css -->
        <link rel="stylesheet" type="text/css" href="style2.css">
        <meta charset="utf-8">

        <!-- Métadonnées standards -->
        <meta name="description" content="Explorez les différentes phases évolutives des étoiles, de la séquence principale à la formation de trous noirs." >
        <meta name="keywords" content="étoiles, séquence principale, géante rouge, étoile à neutrons, trou noir" >
        <meta name="author" content="Camillia Fakkak/ Alami Chentoufi" >

        <!--Métadonnées LD-JSON -->
        <script type="application/ld+json">
         {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "Exploration des Etoiles",
            "description": "Découvrez les différentes phases évolutives des étoiles, de la séquence principale à la formation de trous noirs.",
            "author": {
                "@type": "Person",
                "name": "Camillia Fakkak/ Alami Chentoufi"
            }
         }
        </script>

    </head>
    <body>
        <!-- inclusion de l'entête du site -->
        <?php require_once(__DIR__ . '/header.php'); ?>

        <div class="container">
            <!-- Balise de titre H1 (Titre de niveau 1) Car c'est le titre principal du texte -->
            <header>
                <h1>Phases évolutives des étoiles</h1> <br>
                <em>Voici une page de vulgarisation des étapes d'évolution des différents types étoiles de l'univers. </em>
                <!-- Paragraphe de présentation de web -->
                <h2 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"> Avant toute chose, voici une brève définition d'une étoile.</h2>
                <p>  Les étoiles sont les objets les plus fondamentaux et communs de l'univers observable. Elles jouent un rôle crucial dans la formation et l'évolution des galaxies, y compris de notre propre Voie Lactée. C'est un corps céleste plasmatique qui rayonne sa propre lumière par des réactions de fusion nucléaire. La formation d'une étoile peut se produire de deux manières distinctes. Dans certaines situations, le gaz et la poussière interstellaires sont comprimés par des forces externes telles que des ondes de choc de supernovae (que nous aborderons par la suite) ou des collisions entre nuages de gaz. Dans d'autres cas, sous l'influence de la gravité, une partie du gaz et de la poussière interstellaires s'effondre sur elle-même, formant un noyau dense appelé proto-étoile. <br>

                À mesure que la proto-étoile continue de s'effondrer sur elle-même, la température et la pression à son centre augmentent. Lorsque ces conditions atteignent un niveau suffisant, les réactions de fusion nucléaire commencent à convertir l'hydrogène en hélium, libérant ainsi une quantité considérable d'énergie sous forme de lumière et de chaleur. C'est à ce stade que la proto-étoile devient une étoile.

                La durée de vie d'une étoile dépend de sa masse. Les étoiles plus massives ont une vie plus courte, tandis que les étoiles moins massives, comme notre Soleil, peuvent brûler pendant des milliards d'années.  </p>
                <!-- Titre du tableau -->
                
                    <!-- Création d'un tableau, contenant des liens non cassé vers une section spécifique de ma page (Cela envoie l'étape de l'étoile vers son explication) -->
            <table>
                <caption>Tableau des phases évolutives des étoiles</caption>
                <!-- Première ligne du tableau (entêtes des colonnes) -->
                <tr>
                    <th>Type d'Étoile</th>
                    <th>Phase Principale</th>
                    <th>Phase Secondaire</th>
                    <th>Phase Tertiaire</th>
                </tr>
                <!-- Deuxième ligne du tableau -->
            
                <tr>
                    <td><a href="#NaineRouge"> Naine rouge </a></td>
                    <td>Séquence principale</td>
                    <td>Non observée</td>
                    <td>Non observée</td>
                </tr>
                <!-- Troisième ligne du tableau -->

                <tr>
                    <td><a href="#NaineJaune">Naine Jaune </a></td>
                    <td>Séquence Principale</td>
                    <td>Géante Rouge</td>
                    <td>Naine Blanche</td>
                </tr>
                <!-- Quatrième ligne du tableau -->

                <tr>
                    <td><a href="#EtoileMassiveMoyenne">Étoile massive moyenne </a></td>
                    <td>Séquence Principale</td>
                    <td>Supergéante Rouge</td>
                    <td>Étoile à Neutrons</td>
                </tr>
                <!-- Cinquième ligne du tableau -->

                <tr>
                    <td><a href="#EtoileGéante">Étoile massive géante</a></td>
                    <td>Séquence Principale</td>
                    <td>Supergéante Rouge</td>
                    <td>Trou Noir</td>
                </tr>

            </table>
            </header>
            <main>

                    <!-- Création d'une liste sans ordre particulier -->

                        <!-- Balise de titre H2, (titre de niveau 2) pour que l'ont voit bien les étapes -->
            
                
                        <h2>Présentation d'une naine rouge :</h2>
            <div class="container star-container">
                <!-- Utilisation de Bootstrap pour la structure de la grille -->
                <div class="row">
                <!-- Colonne pour l'image de l'étoile, prenant 100% de largeur sur petits écrans et 50% sur les grands -->
                <div class="col-md-6 col-12 star-image">
                    <!-- Titre de l'image avec balise <span> pour une stylisation spécifique -->
                    <span class="petittitre" id="NaineRouge">
                        <strong>Alpha du Centaure C ou Proxima Centauri</strong>
                    </span>
                    <br><br>
                    <!-- Image de l'étoile, responsive grâce à la classe 'img-fluid' -->
                    <img src="image/naine_rouge.jpg" alt="naine_rouge" class="img-fluid" title="Alpha du Centaure C">
                </div>
            <!-- Colonne pour les détails de l'étoile, occupant 100% de la largeur sur petits écrans et 50% sur les grands -->
            <div class="col-md-6 col-12 star-details">
            <!-- Liste des caractéristiques de l'étoile, sans puces pour un style plus propre -->
                <ul class="list-unstyled">
                    <li><strong>Constellation :</strong> Centaure</li>
                    <li><strong>État :</strong> Naine rouge</li>
                    <li><strong>Âge :</strong> entre 4.85 et 6.8 milliards d'années.</li>
                    <li><strong>Masse :</strong> 2.84 x 10^29 kg soit 0.12 fois la masse du soleil</li>
                    <li><strong>Température à la surface :</strong> 2769°C</li>
                    <li><strong>Diamètre :</strong> 200 000 km</li>
                    <li><strong>Distance de la Terre :</strong> 4,367 années-lumière, c'est l'étoile la plus proche du soleil</li>
                </ul>
            </div>
        </div>
    </div>

                Voici les étapes de vie d'une naine jaune.
                <ol>
                <!-- Liste ordonnée -->
                    <li>Nébuleuse</li>
                    <li>Séquence principal</li>
                    <li>Non observé : L'univers n'est pas assez vieux pour contenir des naines rouges ayant fini leur séquence principal</li>
                </ol>

                <h3>Séquence principale</h3>
                <p>Les étoiles de type naine rouge sont des étoiles peu massives et de température peu élevée. Elles sont les étoiles les plus abondantes de notre univers observable. On estime que 70 à 80% de toutes les étoiles de la Voie Lactée ainsi que dans d'autres galaxies sont des naines rouges. En raison de leurs faibles masses, elles peuvent brûler durant des dizaines de millards d'années ce qui signifie qu'aucune naine rouge ne s'est encore éteinte depuis le début de l'univers.</p>
                
                <h2>Présentation d'une naine jaune :</h2>
            <div class="container star-container">
                <div class="row">
                    <!-- Colonne pour l'image de l'étoile, prenant 100% de largeur sur petits écrans et 50% sur les grands -->
                    <div class="col-md-6 col-12 star-image">
                        <!-- Titre de l'image avec balise <span> pour une stylisation spécifique -->
                        <span class="petittitre" id="NaineJaune"><strong>Soleil</strong></span>
                        <br><br>
                        <!-- Image de l'étoile, responsive grâce à la classe 'img-fluid' -->
                        <img src="image/naine_jaune.jpg" alt="naine_jaune" class="img-fluid" title="Le soleil" style="width: 500px; height: 500px;">
                    </div>
                <!-- Colonne pour les détails de l'étoile, occupant 100% de la largeur sur petits écrans et 50% sur les grands -->
                    <div class="col-md-6 col-12 star-details">
                        <ul class="list-unstyled">
                            <!-- Liste des caractéristiques de l'étoile, sans puces pour un style plus propre -->
                            <li><strong>Etat :</strong> Naine jaune</li>
                            <li><strong>Âge :</strong> 4,5 milliards d'années</li>
                            <li><strong>Masse :</strong> 1,9891 × 10^30 kg, soit 330 000 fois la masse de la Terre</li>
                            <li><strong>Température à la surface :</strong> 5500°C</li>
                            <li><strong>Diamètre :</strong> 1,4 million de km, soit environ 109 fois le diamètre de la Terre</li>
                            <li><strong>Distance de la Terre :</strong> 149 millions de km</li>
                        </ul>
                    </div>
                </div>
            </div>

                Voici les étapes de vie d'une naine jaune.
                <ol>
                <!-- Liste ordonnée -->
                    <li>Nébuleuse</li>
                    <li>Séquence principal</li>
                    <li>Géante rouge</li>
                    <li>Naine blanche</li>
                </ol>

                <h3>Séquence principale</h3>
                <p> La stabilité d'une étoile est maintenue par un équilibre délicat entre la gravité, qui tente de comprimer l'étoile, et la pression due aux réactions nucléaires à l'intérieur, qui tend à l'expanser. Cette phase, appelée "séquence principale", est celle au cours de laquelle la plupart des étoiles passent la majorité de leur vie. 

                Cette séquence débute lorsque l'hydrogène dans le noyau de l'étoile commence à fusionner pour former de l'hélium. Cette réaction de fusion nucléaire libère une grande quantité d'énergie sous forme de lumière et de chaleur.

                Pendant la séquence principale, l'étoile maintient un équilibre hydrostatique entre la force gravitationnelle cherchant à la comprimer et la pression issue des réactions nucléaires à l'intérieur favorisant l'expansion. Cet équilibre permet à l'étoile de rester stable.

                La durée de vie de la séquence principale dépend de la masse de l'étoile. Les étoiles plus massives consomment leur réserve d'hydrogène plus rapidement et ont donc une séquence principale plus courte, tandis que les étoiles moins massives, comme notre Soleil, peuvent rester dans cette phase pendant des milliards d'années.

                À mesure que l'hydrogène du noyau est épuisé, l'étoile commence à évoluer vers des phases ultérieures de sa vie, la géante rouge...</p>

                <h3>Géante Rouge</h3>
                <p> Lorsque l'hydrogène dans le noyau de l'étoile est épuisé, la gravité prend le dessus et comprime le noyau.

                Lorsque le noyau se contracte, les couches externes de l'étoile, appelées enveloppe, commencent à s'étendre. Cela est dû à la libération d'énergie thermique résultant de la compression du noyau.

                Pendant l'expansion, la surface de l'étoile (la couche externe) refroidit, ce qui donne à l'étoile une couleur rougeâtre caractéristique. C'est pourquoi on l'appelle une géante rouge.

                Pendant cette phase, l'étoile peut perdre une quantité significative de masse sous forme de vents stellaires. Ces vents peuvent contribuer à l'enrichissement du milieu interstellaire avec des éléments plus lourds.

                Les couches externes de l'étoile sont finalement expulsées, créant une nébuleuse planétaire.</p>

                <h3>Naine Blanche</h3>
                <p> Pour les étoiles les moins massives, la géante rouge, après avoir épuisé son carburant nucléaire, expulse sa couche externe et évolue en naine blanche. Celle-ci est le noyau résiduel de l'étoile morte. Leur température est très élevée, mais elles n'émettent qu'une faible lumière car elles n'ont plus d'activité de réaction nucléaire. Les naines blanches finiront par s'éteindre dans plusieurs dizaines ou centaines de milliards d'années. On les appellera les naines noires. Actuellement, aucune naine noire n'existe car le temps estimé pour qu'elles s'éteignent est plus long que l'âge actuel de l'univers.</p>

                <h2> Présentation des étoiles massives: </h2>
                <h3>Séquence principale</h3>
                <p> Pour une étoile massive, cette séquence principale est similaire à celle d'une naine jaune, mais elle se distingue par un déroulement plus rapide. Les étoiles massives épuisent leur réserve d'hydrogène plus rapidement que les naines jaunes, accélérant ainsi la transition vers la prochaine étape, la supergéante rouge. </p>

                <h3>Supergéante rouge</h3>
                <p>Ici aussi, la supergéante est similaire à la géante rouge, mais elle est plus massive et lumineuse. Son destin ultime est de terminer en supernovae, une libération d'énergie colossale qui peut brièvement briller plus intensément que toute la galaxie qui héberge l'étoile. Cependant certaines étoiles extrêmement massives ne passeront pas par l'étape de supergéantes rouge car leur masse est telle qu'elles s'éfondrent en trou noir dès qu'elles manquent de matière pour leur fusion nucléaire. Selon la masse de cette étoile massive, elle laissera comme cadavre stellaire soit une étoile à neutrons, soit un trou noir. </p>
                <h3> Etoile massive moyenne: </h3>
                <div class="container star-container">
                    <div class="row">
                    <!-- Un élément d'une liste qui affiche un titre "EtoileMoyenne" suivi d'une image qui contient un titre alternatif pour l'image au cas ou l'image
                    ne peut être chargé et une infobulle quand ont la survolle avec la sourie.  -->
                    <div class="col-md-6 col-12 star-image">

                        <span class="petittitre" id="EtoileMassiveMoyenne"> <strong> Bételgeuse </strong>  </span> 
                        <br> <br> 
                        <img src="image/Etoile_moyenne.jpg" class="img-fluid" alt="EtoileMoyenne" title="Etoile massive moyenne">
                    </div>
                    <div class="col-md-6 col-12 star-details">
                        <ul class="list-unstyled">
                        <!-- Les éléments de la liste (caracteristique de l'étoile) -->
                        <li> <strong>Constelation :</strong> Orion </li>
                        <li> <strong>Etat :</strong> Supergéante rouge </li>
                        <li> <strong>Âge :</strong> Entre 8 et 10 millions d'années </li>
                        <li> <strong>Masse :</strong> 3,282 × 10^31 kg   </li>
                        <li> <strong>Température à la surface :</strong> 3227 °C  </li>
                        <li> <strong>Diamètre :</strong> 1,23 milliards de km soit 900 fois le diamètre du soleil </li>
                        <li> <strong>Disantance de la terre :</strong> 642,5 années-lumière </li>
                    </ul>
                </div>
                </div>
            </div>
  

                Voici les étapes de sa vie.
                <ol>
                <!-- Liste ordonnée -->
                    <li>Nébuleuse</li>
                    <li>Séquence principale</li>
                    <li>Supergéante rouge</li>
                    <li>Etoile à neutrons</li>
                </ol>

                <h3>Etoile à Neutrons</h3>
                <p> Quand une étoile massive moyenne épuise son carburant, elle subit un effondrement gravitationnel intense. Ce processus résulte de la lutte entre la force de gravité, qui tend à comprimer la matière, et la pression de dégénérescence des électrons, qui exerce une force répulsive.

                Durant la supernovae, lors de l'effondrement, les protons et les électrons fusionnent pour former des neutrons. La matière est alors principalement composée de neutrons, d'où le nom "étoile à neutrons". Ces étoiles sont extrêmement denses, avec une masse comparable à celle du Soleil mais comprimée dans un volume beaucoup plus petit, typiquement d'ordre kilométrique. Dans le cas de Bételgeuse, il est estimé que lors de sa phase d'étoile à neutrons, son diamètre pourrait être de l'ordre de 20 km.

                Les étoiles à neutrons présentent des caractéristiques fascinantes, telles qu'un champ magnétique intense et une rotation rapide. Souvent, elles émettent divers types de radiations sous forme de pulsations régulières, dans se cas elles sont appelées pulsars.

                Pour les plus massives d'entre elles, après la phase de supergéante rouge, elles se transforment en trou noir. </p>

                <h3> Etoile massive géante.: </h3>
                <div class="container star-container">
                    <div class="row">
                        <div class="col-md-6 col-12 star-image">
                            <span class="titre" id="EtoileGéante"> <strong> R136a1 </strong> </span> 
                            <br><br> 
                            <img src="image/Etoile_geante.jpg" class="img-fluid" alt="Etoilegeante" title="Etoile massive géante" style="width: 500px; height: 500px;">
                        </div>
                    <div class="col-md-6 col-12 star-details">
                        <ul class="list-unstyled">
                            <li> <strong>Constelation :</strong> Dorade   </li>
                            <li> <strong>Etat :</strong>Phase principale   </li>
                            <li> <strong>Âge :</strong> 300 000 ans  </li>
                            <li> <strong>Masse :</strong> 5,271 × 10^32 kg, faisant de R136a1 l'étoile la plus massive et lumineuse connue de l'univers observable.   </li>
                            <li> <strong>Température à la surface :</strong> 50000 °C </li>
                            <li> <strong>Diamètre :</strong> 44 millions de km, soit entre 28.8 et 35.4 fois le soleil</li>
                            <li> <strong>Disantance de la terre :</strong> 163000 années-lumière</li>
                        </ul>
                    </div>
                </div>
            </div>

            R136a1 est la plus massive étoile jamais observé.

                Voici les étapes de sa vie.
                <ol>
                <!-- Liste ordonnée -->
                    <li>Nébuleuse</li>
                    <li>Séquence principale</li>
                    <li>On estime qu'elle finira par se transformer en un Trou Noir.</li>
                </ol>


                <h3>Trou noir</h3>
                <p> Cette fois-ci, lorsque l'étoile épuise son carburant et ne peut plus soutenir la pression interne contre la gravité, elle s'effondre sous l'effet de sa propre gravité. Cet effondrement est rapide et intense. Le cœur de l'étoile s'effondre rapidement, provoquant une explosion spectaculaire, la supernovae. 

                Contrairement à une étoile à neutrons, où la forte force gravitationnelle force les électrons et les protons à fusionner, dans le cas d'un trou noir, la gravité est si intense que tout se brise. La matière de l'étoile s'effondre vers un point infiniment petit, créant ce que l'on appelle une singularité."

                Il existe deux types de trous noirs.</p>
                <ul>
                    <li> <strong>Trou noir stellaire :</strong> Si la masse du cœur effondré est inférieure à environ 20 fois la masse du Soleil, il peut former un trou noir stellaire. Ce type de trous noirs conserve la masse de l'étoile d'origine tout en comprimant la matière dans un volume très petit.  </li>
                    <li><strong>Trou noir supermassif :</strong>Pour les étoiles encore plus massives, le processus de formation de trous noirs supermassifs, qui se trouvent au centre des galaxies, est moins bien compris. On pense que cela pourrait être lié à l'accumulation de masse par fusion avec d'autres trous noirs ou par l'accumulation de matière environnante.</li>
                </ul>
            </main>    
        </div>  
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </body>
</html>
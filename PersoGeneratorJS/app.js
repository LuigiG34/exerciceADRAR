let personaArray = [
    {
        nom: "Doe",
        prenom: "John",
        age: 32,
        sexe: "Masculin",
        localisation: "Il vit en Espagne depuis 2008.Dans la ville de Barcelone",
        hobies: "Passioné de cuir, il aime fabriquer des objet en tout genre sac à main, portefeuille, ceinture.",
        gout: "Ouvrier du batiment",
        etude: "Formation de commercial",
        sport: "ne fait pas de sport",
        voyage: "Est partis dans divers pays du monde , Amerique latine, Canada, Pologne",
        photo: "img/profile.png"
    },
    {
        nom: "Molette",
        prenom: "Amy",
        age: 24,
        sexe: "Feminin",
        localisation: "Elle en Hollande",
        hobies: "Elle adore jardiner, faire pousser des tomate de qualité extraordinaire et s'occuper de ses petites plante",
        etude: "Aucune",
        gout: "Ouvrier du batiment",
        sport: "Course a pied",
        voyage: "Elle est partis plusieur fois en Norvege voir sa soeur",
        photo: "img/femme.webp"
    },
    {
        nom: "Menvussa",
        prenom: "Gerrard",
        age: 28,
        sexe: "Masculin",
        localisation: "Il vit dans la région Toulousaine depuis 15 ans environ",
        hobies: "Passioné de jeux vidéo il les à tous, avec une preference pour les jeux 'old school'",
        etude: "Bac +2",
        gout: "Ouvrier du batiment",
        sport: "Karaté",
        voyage: "Aucun",
        photo: "img/pelo.png"
    },
    {
        nom: "Obistro",
        prenom: "Pascal",
        age: 52,
        sexe: "Masculin",
        localisation: "Il vit a Berlin",
        hobies: "Passioné de musique, il chante régulièrement",
        etude: "Aucun",
        gout: "Ouvrier du batiment",
        sport: "Salle de musculation 2 fois par semmaine",
        voyage: "En europe essentiellement",
        photo: "img/mec.png"
    },
    {
        nom: "Truelle",
        prenom: "Patrick",
        age: 19,
        sexe: "Non renseigner",
        localisation: "Il vit au Portugal",
        hobies: "Il joue du piano",
        etude: "equivalent d'un CAP ",
        gout: "Ouvrier du batiment",
        sport: "Badmington",
        voyage: "Aucun",
        photo: "img/img.webp"
    },
]

personaArray.forEach(perso => {
    // main container to append to
    let mainContainer = document.querySelector('main');
    // card element
    let cardPersona = document.createElement('section');
    cardPersona.setAttribute('class', 'card');
    mainContainer.append(cardPersona);

    // first article with img inside
    let firstArticle = document.createElement('article');
    cardPersona.append(firstArticle);

    let imgPersona = document.createElement('img');
    imgPersona.setAttribute('src', perso['photo']);
    firstArticle.append(imgPersona);


    // second article with 2 divs and all infos inside
    let secondArticle = document.createElement('article');
    cardPersona.append(secondArticle);

    // first div with name and lastname
    let firstDiv = document.createElement('div');
    firstDiv.setAttribute('class', 'd-flex');
    secondArticle.append(firstDiv);

    let nom = document.createElement('p');
    nom.innerHTML = '<strong>Nom : </strong>' + perso['nom'];
    firstDiv.append(nom);

    let prenom = document.createElement('p');
    prenom.innerHTML = '<strong>Prénom : </strong>' + perso['prenom'];
    firstDiv.append(prenom);

    // second div with age and gender
    let secondDiv = document.createElement('div');
    secondDiv.setAttribute('class', 'd-flex');
    secondArticle.append(secondDiv);

    let age = document.createElement('p');
    age.innerHTML = '<strong>Age : </strong>' + perso['age'];
    secondDiv.append(age);

    let sexe = document.createElement('p');
    sexe.innerHTML = '<strong>Sexe : </strong>' + perso['sexe'];
    secondDiv.append(sexe);

    // rest of info
    let localisation = document.createElement('p');
    localisation.innerHTML = '<strong>Localisation : </strong>' + perso['localisation'];
    secondArticle.append(localisation);

    let gout = document.createElement('p');
    gout.innerHTML = '<strong>Gout : </strong>' + perso['gout'];
    secondArticle.append(gout);

    let hobies = document.createElement('p');
    hobies.innerHTML = '<strong>Hobies : </strong>' + perso['hobies'];
    secondArticle.append(hobies);

    let etude = document.createElement('p');
    etude.innerHTML = '<strong>Etude : </strong>' + perso['etude'];
    secondArticle.append(etude);

    let sport = document.createElement('p');
    sport.innerHTML = '<strong>Sport : </strong>' + perso['sport'];
    secondArticle.append(sport);

    let voyage = document.createElement('p');
    voyage.innerHTML = '<strong>Voyage : </strong>' + perso['voyage'];
    secondArticle.append(voyage);

});
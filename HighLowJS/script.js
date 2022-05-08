/*
Pour ceux qui ne sont pas familiers avec ce jeu, il s'agit de
deviner le prix d'un produit. Ici, trois possibilités :
- C'est plus cher
- C'est moins cher
- C'est le juste prix !
Dans cette version du "Juste prix", nous générerons un
prix aléatoire, et nous calculerons le nombre de coups
qu'il faut à un joueur pour retrouver le juste prix.
Ainsi, il pourra se confronter à ses amis pour tenter de
voir qui retrouve le bon prix avec le moins de coups
possibles !
Je vous attends dans la prochaine session !
Etape 1 - Sélectionner nos éléments
Etape 2 - Cacher l'erreur
Etape 3 - Générer un nombre aléatoire
Etape 4 - Vérifier que l'utilisateur donne bien un nombre
Etape 5 - Agir à l'envoi du formulaire
Etape 6 - Créer la fonction vérifier
*/

// variables
let btn = document.getElementById("btn");
let message = document.getElementById("message");
let computerChoice = document.getElementById("computer-choice");
let userChoice = document.getElementById("user-choice");
let restartBtn = document.getElementById("restart");
let lifeCircle;
let randomNumber = generateRandomNumber();
let userInput;
let userLifes = 5;
// quand l'utilisateur clique sur le bouton on démare le programme
btn.addEventListener("click", () =>{
    lifeCircle = document.querySelector(".circle");
    userInput = Number(document.getElementById("user-input").value);
    userChoice.textContent = userInput;
    computerChoice.textContent = "???";
    console.log(userInput);
    console.log(randomNumber);
    console.log("USER LIFES LEFT :" + userLifes);
    notInterger();
    verifyAnswers();
    gameIsOver();
})
// on recommence la partie lorsqu'on clique
restartBtn.addEventListener("click", () =>{
    document.location.reload();
})
// on verifie si l'input est égal au nombre généré aléatoirement
function verifyAnswers(){
    if(randomNumber == userInput){
        console.log("USER WINS !");
        message.textContent = "USER WINS !";
        ++userLifes;
        btn.disabled = true;
        computerChoice.textContent = randomNumber;
    }else if (userInput == 0){
        message.textContent = "ENTER A NUMBER !";
        --userLifes;
    }else{
        console.log("COMPUTER WINS !");
        message.textContent = "COMPUTER WINS !";
        --userLifes;
        lostLife();
    }
}
// fonction qui genere nombre aléatoire entre 1 & 1000
function generateRandomNumber(){
    result = Math.floor(Math.random() * 1000);
    return result;
}
// fonction ou l'utilisateur perd une vie a chaque mauvaise reponse
function lostLife(){
    if(userLifes > -1 && typeof userInput == "number" && userInput !== 0 && userInput !== randomNumber){
        lifeCircle.remove();
    }
}
// fonction qui termine la partie
function gameIsOver(){
    if(userLifes == 0){
        alert("YOU HAVE NO MORE ATTEMPTS !");
        btn.disabled = true;
    }
}
// fonction qui verifie si l'input est bien un nombre
function notInterger(){
    if(isNaN(userInput) || userInput == ""){
        alert("ENTER A NUMBER");
        ++userLifes;
        message.textContent = "ENTER A NUMBER !";
    }else{
        lostLife();
    }
}
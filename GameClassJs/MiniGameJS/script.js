class Personnage
{
    constructor(pseudo,classe,sante,attaque)
    {
        this.pseudo = pseudo;
        this.classe = classe;
        this.sante = sante;
        this.attaque = attaque;
        this.niveau = 1;
    }

    evoluer()
    {
        this.niveau += 1;
        console.log(this.pseudo + " passe au niveau " + this.niveau + " !");
    }

    verifierSante()
    {
        if(this.sante < 0){
            this.sante = 0;
            console.log(this.pseudo + " a perdu !");
        }
    }

    informations()
    {
        console.log(this.pseudo + " " + this.classe + " a " + this.sante + " points de vie et est au niveau " + this.niveau);
    }
}

class Magicien extends Personnage
{
    constructor(pseudo,classe,sante,attaque)
    {
        super(pseudo,classe,sante,attaque);
        this.classe = "magicien";
        this.sante = 170;
        this.attaque = 90;
    }

    attaquer(personnage)
    {
        personnage.sante -= this.attaque;
        console.log(this.pseudo + " attaque " + personnage.pseudo + " en lançant un sort (" + this.attaque + " dégats).");
        this.evoluer();
        personnage.verifierSante();
    }

    coupSpecial(personnage)
    {
        let coupSpe = this.attaque * 5;
        personnage.sante -= coupSpe;
        console.log(this.pseudo + " attaque avec son coup spécial puissance des arcanes " + personnage.pseudo + " (" + coupSpe + " dégats).");
        this.evoluer();
        personnage.verifierSante();
    }
}

class Guerrier extends Personnage
{
    constructor(pseudo,classe,sante,attaque)
    {
        super(pseudo,classe,sante,attaque);
        this.classe = "guerrier";
        this.sante = 350;
        this.attaque = 50;
    }

    attaquer(personnage)
    {
        personnage.sante -= this.attaque;
        console.log(this.pseudo + " attaque " + personnage.pseudo + " avec son épée (" + this.attaque +" dégats).");
        this.evoluer();
        personnage.verifierSante();
    }

    coupSpecial(personnage)
    {
        let coupSpe = this.attaque * 5;
        personnage.sante -= coupSpe;
        console.log(this.pseudo + " attaque avec son coup spécial haches de guerre " + personnage.pseudo + " (" + coupSpe + " dégats).");
        this.evoluer();
        personnage.verifierSante();
    }
}

let aragorn = new Guerrier("Aragorn");
let gandalf = new Magicien("Gandalf");

console.log(aragorn.informations());
console.log(gandalf.informations());

gandalf.attaquer(aragorn);
console.log(aragorn.informations());

aragorn.attaquer(gandalf);
console.log(gandalf.informations());

gandalf.coupSpecial(aragorn);
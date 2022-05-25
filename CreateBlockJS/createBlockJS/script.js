class Block
{
    constructor(balise,contenu,body)
    {
        this.balise = balise;
        this.contenu = contenu;
        this.body = document.querySelector(body);
        this.element = document.createElement(balise);
    }

    fillElement()
    {
        this.element.textContent = this.contenu;
    }

    appendElement()
    {
        this.body.append(this.element);
    }

    addNewElement()
    {
        this.fillElement(this.contenu);
        this.appendElement(this.element);
    }
}

let div = new Block("div","random text","body");
div.addNewElement();

class Button extends Block
{
    constructor(contenu,body,event)
    {
        super(contenu,body);
        this.balise = "button";
        this.contenu = contenu;
        this.body = document.querySelector(body);
        this.element = document.createElement(this.balise);
        this.event = event;
    }

    addNewEvent()
    {
        this.element.addEventListener(this.event, () => {
            console.log("Hello");
            let div = new Block("h1","title","body");
            div.addNewElement();
        })
    }
}

let btn = new Button("Add","body","click");
btn.addNewElement();
btn.addNewEvent();
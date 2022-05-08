let wordArray = ["TO DESIGN", "TO CODE", "TO LEARN", "COMPUTING"];

setInterval(function(){
    var random = Math.floor(Math.random() * 4);
    document.getElementById("word").innerHTML = wordArray[random];
}, 2000);

//CHANGE WORD RANDOMLY
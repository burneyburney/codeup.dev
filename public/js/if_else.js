// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.


// dont do indigo and violet


var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)]; //random

var favorite = 'yellow';    




if(color == "red") {
console.log(color + " is the color of Mars")
}
else if(color == "orange"){
console.log(color + " is the color of an Orange")
}
else if(color == "yellow"){
console.log(color + " is the color of my Esc Key")
}
else if(color == "green"){
console.log("Slime is " + color)
}
else if(color == "blue"){
console.log("Black and " + color + " go together.")
}
else if(color == "indigo" || color == "violet"){
console.log("You typed indigo or violet... idk which one though")
}
else{
	console.log("I do not know anything by that color!");
}

console.log((color == "yellow")? "YOU PICKED YELLOW!!!!" : "cool..but not as cool as yellow");



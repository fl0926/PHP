
function Planet(name, multiplier, image){
    this.name       = name;
    this.multiplier = multiplier;
    this.image      = image;
    this.calculate  = function(earthWeight){
                          return earthWeight * this.multiplier;
                      }
}

var data = {
    Mercury: new Planet("Mercury", 0.38, "Mercury.jpg"),
    Venus:   new Planet("Venus"  , 0.91, "Venus.jpg"  ),
    Earth:   new Planet("Earth"  , 1.00, "Earth.jpg"  ),
    Mars:    new Planet("Mars"   , 0.38, "Mars.jpg"   ),
    Jupiter: new Planet("Jupiter", 2.54, "Jupiter.jpg"),
    Saturn:  new Planet("Saturn" , 1.08, "Saturn.jpg" ),
    Uranus:  new Planet("Uranus" , 0.91, "Uranus.jpg" ),
    Neptune: new Planet("Neptune", 1.19, "Neptune.jpg"),
    Pluto:   new Planet("Pluto"  , 0.06, "Pluto.jpg"  )
}

function doTheWork(){

    // Get the value our user typed into the input box
    var weight = document.getElementById("weight").value;

    // Get a reference to the output div
    var outputDiv = document.getElementById("output");

    // Clear the output div
    outputDiv.innerHTML = "";

    // Loop through the planet names and add output to the output div.
    for(var someProperty in data) {
        // Get the object referred to by someProperty and put it into 'aPlanet'
        var aPlanet = data[someProperty];

        // Create a new div for one line of output
        var newDiv = document.createElement("DIV");

        // Create a new image, set the source and size for one line of output
        var newImage = document.createElement("IMG");
        newImage.src = "./images/" + aPlanet.image;
        newImage.style.width = "200px";

        // Create a span to contain the planet name and calculated weight
        var newSpan = document.createElement("SPAN");

        // Create a new Anchor taking the user to Wikipedia and populate with the calculated weight
        var newAnchor = document.createElement("A");
        newAnchor.href = "https://en.wikipedia.org/wiki/" + aPlanet.name;

        newAnchor.innerText = aPlanet.name + ": " + aPlanet.calculate(weight);

        // Add the anchor to the span
        newSpan.appendChild(newAnchor);
        
        // Add the image and the span to the new div
        newDiv.appendChild(newImage);
        newDiv.appendChild(newSpan);

        // Add the new div to the output div
        outputDiv.appendChild(newDiv);

    }

}

var planetName =  ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "Pluto"];
var multipliers = [     0.38,    0.91,    1.00,   0.38,      2.54,     1.08,     0.91,      1.19,    0.06];
var imageNames  = ["Mercury.jpg", "Venus.jpg", "Earth.jpg", "Mars.jpg", "Jupiter.jpg", "Saturn.jpg", "Uranus.jpg", "Neptune.jpg", "Pluto.jpg"];

function doTheWork(){

    // Get the value our user typed into the input box
    var weight = document.getElementById("weight").value;

    // Get a reference to the output div
    var outputDiv = document.getElementById("output");

    // Clear the output div
    outputDiv.innerHTML = "";

    // Loop through the planet names and add output to the output div.
    for(var x = 0; x < planetName.length; x = x + 1){
        // outputDiv.innerHTML = outputDiv.innerHTML + planetName[x] +
        //     ": " + multipliers[x] * weight + "<br />";

        // Create a new div for one line of output
        var newDiv = document.createElement("DIV");

        // Create a new image, set the source and size for one line of output
        var newImage = document.createElement("IMG");
        newImage.src = "./images/" + imageNames[x];
        newImage.id = "image" + x;
        newImage.style.width = "200px";

        // Create a span to contain the planet name and calculated weight
        var newSpan = document.createElement("SPAN");

        // Create a new Anchor taking the user to Wikipedia and populate with the calculated weight
        var newAnchor = document.createElement("A");
        newAnchor.href = "https://en.wikipedia.org/wiki/" + planetName[x];

        newAnchor.innerText = planetName[x] + ": " + multipliers[x] * weight;

        // Add the anchor to the span
        newSpan.appendChild(newAnchor);
        
        // Add the image and the span to the new div
        newDiv.appendChild(newImage);
        newDiv.appendChild(newSpan);

        // Add the new div to the output div
        outputDiv.appendChild(newDiv);

    }

}
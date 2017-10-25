
var data = {
    Mercury:{
        name: "Mercury",
        multiplier: 0.38,
        image: "Mercury.jpg",
        calculate: function(earthWeight){
            return earthWeight * this.multiplier;
        }
    },
    Venus:{
        name: "Venus",
        multiplier: 0.91,
        image: "Venus.jpg",
        calculate: function(earthWeight){
            return earthWeight * this.multiplier;
        }
    },
    Earth:{
        name: "Earth",
        multiplier: 1.00,
        image: "Earth.jpg",
        calculate: function(earthWeight){
            return earthWeight * this.multiplier;
        }
    },
    Mars:{
        name: "Mars",
        multiplier: 0.38,
        image: "Mars.jpg",
        calculate: function(earthWeight){
            return earthWeight * this.multiplier;
        }
    },
    Jupiter:{
        name: "Jupiter",
        multiplier: 2.54,
        image: "Jupiter.jpg",
        calculate: function(earthWeight){
            return earthWeight * this.multiplier;
        }
    },
    Saturn:{
        name:"Saturn",
        multiplier: 1.08,
        image: "Saturn.jpg",
        calculate: function(earthWeight){
            return earthWeight * this.multiplier;
        }
    },
    Uranus:{
        name:"Uranus",
        multiplier: 0.91,
        image: "Uranus.jpg",
        calculate: function(earthWeight){
            return earthWeight * this.multiplier;
        }
    },
    Neptune:{
        name:"Neptune",
        multiplier:1.19,
        image:"Neptune.jpg",
        calculate: function(earthWeight){
            return earthWeight * this.multiplier;
        }
    },
    Pluto:{
        name:"Pluto",
        multiplier:0.06,
        image:"Pluto.jpg",
        calculate: function(earthWeight){
            return earthWeight * this.multiplier;
        }
    }
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


function getPictures(){
    var myScriptElement = document.createElement("SCRIPT");
    myScriptElement.src = "http://www.loc.gov/pictures/search/?fo=json&callback=processResponse&q=manhattan";

    document.body.appendChild(myScriptElement);
}

function processResponse(data){
    var images = data.results;

    for( var i = 0; i < images.length; i++){
        addPicture(images[i].image.full, images[i].title);
    }

    console.log(data);
    window.data = data;
}

function addPicture(picUrl, altText){

    // Create a figure element
    var figure  = document.createElement("FIGURE");

    // Create an image element and set the src and alt properties to
    // the ones that were passed into this function as arguments
    var img     = document.createElement("IMG");
    img.src = picUrl;
    img.alt = altText;

    // Create a figcaption element and add the alt text that was passed
    // into this function as an argument
    var caption = document.createElement("FIGCAPTION");
    caption.innerText = altText;

    // Add the IMG to the FIGURE
    figure.appendChild(img);

    // Add the FIGCAPTION to the FIGURE
    figure.appendChild(caption);

    document.getElementById("output").appendChild(figure);
}
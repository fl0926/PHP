

function getPictures(){
    var query = document.getElementById("term").value; // Whatever is typed into the box goes into 'query'
    query = query.trim(); // remove leading & trailing spaces
    query = encodeURIComponent(query); // Escape special characters to make the URL legal

    // If nothing is left in the variable after we removed spaces, ask user for input
    if(query == ''){
        alert("Please enter a search term.");
        return;
    }


    reallyGetPictures("http://www.loc.gov/pictures/search/?fo=json&callback=processResponse&q=" + query);


}

function createPager(data){
    var pagerDiv = document.createElement("DIV");
    pagerDiv.className="pager-div";

    var printRightArrow = false;

    for(var i = 0; i < data.pages.page_list.length; i++){
        if(data.pages.page_list[i].number == data.pages.current){
            var aSpan = document.createElement("SPAN")
            aSpan.innerText = data.pages.page_list[i].number;
            pagerDiv.appendChild(aSpan);
            printRightArrow = true;
            continue; // go to the next item in the loop without making a button
        }

        var text = data.pages.page_list[i].number;
        if(text == "..."){
            if(printRightArrow == true){
                text = "-->";
            }else{
                text = "<--";
            }
        }

        // This is the same thing as a nasty double-ternary operator
        // var text = (data.pages.page_list[i].number == "...")
        //     ? (i < data.pages.current) ? "<--" : "-->"
        //     : data.pages.page_list[i].number;

        var aButton = document.createElement("BUTTON");
        aButton.innerText = text;
        aButton.pictureURL = "http:" + data.pages.page_list[i].url + "&fo=json&callback=processResponse";
        aButton.addEventListener("click", function(e){
            reallyGetPictures(e.target.pictureURL);
        });
        pagerDiv.appendChild(aButton);
    }

    return pagerDiv;
}


function reallyGetPictures(someURL){
    var myScriptElement = document.createElement("SCRIPT");
    myScriptElement.src = someURL;

    document.body.appendChild(myScriptElement);
}

function processResponse(data){
    clearDiv("output");

    var hitsDiv = document.createElement("DIV");
    hitsDiv.className = "hits-div";
    hitsDiv.innerText = "Found " + data.search.hits + " results for query: " + data.search.query;
    document.getElementById("output").appendChild(hitsDiv);

    document.getElementById("output").appendChild(createPager(data));

    var images = data.results;

    for( var i = 0; i < images.length; i++){
        addPicture(images[i].image.full, images[i].title);
    }

    console.log(data);
    window.data = data;
}

function clearDiv(divId){
    var theDiv = document.getElementById(divId);

    while(theDiv.childElementCount > 0){
        theDiv.removeChild(theDiv.firstElementChild);
    }
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
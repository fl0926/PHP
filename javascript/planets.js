
/*
 "Mercury" 0.38
 "Venus"   0.91
 "Earth"   1.00
 "Mars"    0.38
 "Jupiter" 2.54
 "Saturn"  1.08
 "Uranus"  0.91
 "Neptune" 1.19
 "Pluto"   0.06
 */

function doTheWork(){

    // Get the value our user typed into the input box
    var weight = document.getElementById("weight").value;

    document.getElementById("mercury").innerText = (weight * 0.38).toFixed(2);
    document.getElementById("venus"  ).innerText = (weight * 0.91).toFixed(2);
    document.getElementById("earth"  ).innerText = (weight * 1.00).toFixed(2);
    document.getElementById("mars"   ).innerText = (weight * 0.38).toFixed(2);
    document.getElementById("jupiter").innerText = (weight * 2.54).toFixed(2);
    document.getElementById("saturn" ).innerText = (weight * 1.08).toFixed(2);
    document.getElementById("uranus" ).innerText = (weight * 0.91).toFixed(2);
    document.getElementById("neptune").innerText = (weight * 1.19).toFixed(2);
    document.getElementById("pluto"  ).innerText = (weight * 0.06).toFixed(2);
}
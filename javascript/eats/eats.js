function doSearch(){
    $("#resultsdiv").html('');

    var query = {};
    query.$limit = 100;
    query.grade  = $("#grade").val();
    query.boro   = $("#boro" ).val();

    if($("#cuisine").val().length > 0){
        query.cuisine_description = $("#cuisine").val();
    }

    $.ajax({
        url: "https://data.cityofnewyork.us/resource/9w7m-hzhe.json",
        type: "GET",
        data: query
    }).done(function(data){
        for(var x = 0; x < data.length; x++){
            var name = data[x].dba;
            var grade = data[x].grade;
            var violation = data[x].violation_description;

            var newH3 = $("<h3>");
            var newDiv = $("<div>");
            var newPara = $("<p>");

            newDiv.append(newPara);

            newH3.text(name + " (" + grade + ")");
            newPara.text(violation);

            $("#resultsdiv").append(newH3);
            $("#resultsdiv").append(newDiv);
        }
    });
}
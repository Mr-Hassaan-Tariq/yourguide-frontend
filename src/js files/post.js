

function addPost(){
    document.getElementById("sladder").style.display = "block";
    document.getElementById("addPost").style.display = "block";
}
function hide(){

    document.getElementById("sladder").style.display = "none";
    document.getElementById("addPost").style.display = "none";
}

function makeOptions(){
//    document.getElementById(cityOptions).innerHTML = '';
    var min = 12,
        max = 100,
        select = document.getElementById('cityOptions');
        const cities = ["Lahore","ISLAMABAD","KARACHI","PESHAWAR","QUETTA","MULTAN","RAWALPINDI","HYDRABAD","BAHAWALPUR","SIALKIT","SAHIWAL",
        "MUZAFRABAD","GILGIT"];

    cities.sort();
    if(select.length < cities.length )
    {
        for (var i = 0; i<cities.length; i++){
           var option = document.createElement("option");
           option.text = cities[i];
           select.add(option);
        }

    }

}
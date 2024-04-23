
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



function changeProfile(){

  var location = document.getElementById('profileLocation');
  var image = document.getElementById('profileImage');

  image.src = window.URL.createObjectURL(location.files[0]);
}


function closePopup(){
    document.getElementById("popup").style.display = 'none';
}
function popup(){
    document.getElementById("popup").style.display = 'block';
    document.getElementById("popup").classList.toggle("active");
}


//function submit(){
//alert"clicked";
////  $(".popup-overlay, .popup-content").addClass("active");
//}
//
//$(".open").on("click", function() {
//    alert("connected");
//  $(".popup-overlay, .popup-content").addClass("active");
//
//});
//
////removes the "active" class to .popup and .popup-content when the "Close" button is clicked
//$(".close, .popup-overlay").on("click", function() {
//  $(".popup-overlay, .popup-content").removeClass("active");
//});
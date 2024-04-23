
function clicked() {

    alert("oops,there is the problem.");
}
function textEntered() {
    var textArea = document.getElementById("detailField").value;
    if (textArea.length <= 100) {
        document.getElementById("counter").innerHTML = textArea.length + "/100";
    }
    else {
        document.getElementById("detailField").value = textArea.slice(0, textArea.length - 1);
    }
}

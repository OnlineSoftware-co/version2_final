document.onreadystatechange = function() {
    var state = document.readyState
    if (state == 'complete') {
        document.getElementById('interactive');
        document.getElementById('init').style.display = "none";
        document.getElementById('main').style.display = "block";
    }
}
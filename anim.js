function loop() {
    Array.prototype.forEach.call(elementsToShow, function(element) {
        if (isElementInViewport(element)) {
            element.classList.add(visible);
        } else {
            element.classList.remove(visible);
        }
    });

    scroll(loop);
}


// Helper function from: http://stackoverflow.com/a/7557433/274826
function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        (rect.top <= 0 && rect.bottom >= 0) ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) && rect.top <= (window.innerHeight || document.documentElement.clientHeight)) || (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}


// Detect request animation frame
let scroll =
    window.requestAnimationFrame ||
    // IE Fallback
    function(callback) {
        window.setTimeout(callback, 1000 / 60);
    },
    elementsToShow = document.querySelectorAll(".anim-scroll"),
    visible = "is-visible";


// Call the loop for the first time
loop();
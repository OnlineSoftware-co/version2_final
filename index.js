function toggleMenu() {
    burgerMenu.classList.toggle("is-active");
    nav.classList.toggle("active");
    burgerMenu.classList.toggle("active");
}



let navElement = document.querySelectorAll(".navEl"),
    burgerMenu = document.getElementById("burger"),
    toggle = document.getElementById("toggle"),
    nav = document.querySelector("nav"),
    sections = document.querySelectorAll(".main"),
    current,
    typer = document.getElementById("sloganText"),
    promptM = document.getElementById("prompt"),
    promptMessage = document.getElementById("promptMessage"),
    india = document.getElementById("india"),
    e =
    '<h1>Developed with ' +
    '<span style="color: #006eff;"><i class = "fas fa-heart" style = "font-size: x-large;"></i> India' +
    '</h1 ><br> ' +
    '<h3>Research & Development in India</h3>' +
    '<h4 class="fl flc p12 w100" id="closeIndia">' +
    '<span class="p12 cp" style="color: red; border: 1px solid red; border-radius: 20px; width: 70%;">close</span>' +
    '</h4>';

toggle.addEventListener("click", toggleMenu);
window.addEventListener("scroll", () => {
    let current = "";

    if (scrollY > 100) {
        nav.style.padding = ".5rem 3rem";
        nav.style.background = "var(--secondary-blue)";
    } else {
        nav.style.padding = "1rem 2rem";
        nav.style.background = "transparent";
    }

    sections.forEach((div) => {
        const sectionTop = div.offsetTop;
        const sectionHeight = div.clientHeight;
        if (pageYOffset >= sectionTop - sectionHeight / 3) {
            current = div.getAttribute("id");
            // window.location.hash = current;
        }
    });

    navElement.forEach((a) => {
        a.classList.remove("active");
        if (a.classList.contains(current)) a.classList.add("active");
    });
});

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = "";
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
        delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === "") {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName("typewrite");
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute("data-type");
        var period = elements[i].getAttribute("data-period");
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

india.addEventListener("click", function() {
    promptM.classList.remove("dsp-none");
    promptMessage.innerHTML = e;

    let closeIndia = document.getElementById("closeIndia");
    closeIndia.addEventListener("click", function() {
        promptM.classList.add("dsp-none");
    });
});
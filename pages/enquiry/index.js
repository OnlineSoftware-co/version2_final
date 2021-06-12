function checkData(e) {
    if (!e.value.length) {
        e.classList.add("error");
        return false;
    } else {
        e.classList.remove("error");
        return true;
    }
}

function checkCaptcha() {
    if (add == captchaInput.value) return true;
    return false;
}

function error(e) {
    promptMessage.innerHTML = e;
    setTimeout(() => {
        promptM.classList.add("dsp-none");
    }, 4000);
}

let btn = document.getElementById("submit"),
    sname = document.getElementById("name"),
    email = document.getElementById("email"),
    messgae = document.getElementById("message"),
    captcha = document.getElementById("captcha"),
    T1 =    document.getElementById("t1"),
    captchaInput = document.getElementById("captchaInput"),
    uploadingText = "<h1>Sending your message</h1><br>" + "<h3>Please Wait</h3>",
    finalText =
    "<h1>Congratulations!</h1><br>" +
    "<h3>Your Enquiry has been Placed</h3>" +
    "<h3>We Will Reach You Soon</h3>",
    errorText =
    "<h1>Failed!</h1><br>" +
    "<h3>Make Sure All Fields Are Filled And have Valid Enteries</h3>" +
    "<h3>Try Again</h3>",
    errorCaptcha =
    "<h1>Captcha Failed!</h1><br>" +
    "<h3>Make Sure To Enter Correct Sum</h3>" +
    "<h3>Try Again</h3>";

submit.addEventListener("click", function() {
    promptM.classList.remove("dsp-none");

    if (!checkData(sname) && !checkData(email) && !checkData(message)) {
        error(errorText);
        return false;
    }
    if (!captcha.value) {
        error(errorCaptcha);
        return false;
    }
    if (!checkCaptcha()) {
        error(errorCaptcha);
        return false;
    }

    promptMessage.innerHTML = uploadingText;
    $.ajax({
        url: "contact1.php",
        type: "post",
        dataType: "json",
        data: {
            submit: "submit",
            name: sname.value,
            email: email.value,
            message: message.value,
            t1:T1.innerText,    
        },
        success: function(data) {
            sname.value = "";
            email.value = "";
            message.value = "";
            captchaInput.value="";
            error(finalText);
        },
    });
});
sname.addEventListener("keyup", () => {
    checkData(sname);
});

email.addEventListener("keyup", () => {
    checkData(email);
});

message.addEventListener("keyup", () => {
    checkData(message);
});
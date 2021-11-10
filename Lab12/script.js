const email = document.getElementById("email");
const url = document.getElementById("url");
const emailAlert = document.getElementById("alert-email");
const urlAlert = document.getElementById("alert-url");
email.onchange = () =>{
    function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
    if(!validateEmail(email.value)){
        emailAlert.style.display = "block";
    }else{
        emailAlert.style.display = "none";
    }
}
url.onchange = () =>{
    function validateURL(url) 
    {
        var re = /^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/gm;
        return re.test(url);
    }
    if(!validateURL(url.value)){
        urlAlert.style.display = "block";
    }else{
        urlAlert.style.display = "none";
    }
}
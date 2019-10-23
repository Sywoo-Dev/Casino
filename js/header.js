// Profil à faire !!

function languageClick(){
    var btn = document.getElementById("language-btn");
    var btn2 = document.getElementById("language-btn2");

    if(btn.className != "language-btn active"){
        btn.className = "language-btn active";
    } else {
        btn.className = "language-btn";
    }

    if(btn2.className != "language-btn active"){
        btn2.className = "language-btn active";
    } else {
        btn2.className = "language-btn";
    }
}
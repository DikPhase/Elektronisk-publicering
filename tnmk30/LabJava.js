clock();
setInterval(clock, 1000)

function clock(){
    let Dat = new Date();
    

    let H = Dat.getHours();
    let M = Dat.getMinutes();
    let S = Dat.getSeconds();
    let MS = Dat.getMilliseconds();

    H = (H < 10) ? "0" + H : H;
    M = (M < 10) ? "0" + M : M;
    S = (S < 10) ? "0" + S : S;
    MS = (MS < 10) ? "0 " + MS : MS;
    
    let Time = H + ':' + M + ':' + S + ':' + MS;
    document.getElementById("klocka").textContent = Time;
}

function changeColor1(){
    if(document.body.style.backgroundColor == "aliceblue"){
        document.body.style.backgroundColor = "darkgreen";
        var all = document.getElementsByTagName("*");

        for (var i=0; i < all.length; i++) {
            all[i].style.color = "white";
        }
    }else{
        document.body.style.backgroundColor = "aliceblue";
        document.body.style.fontFamily = "Arial, Helvetica, sans-serif"

        var all = document.getElementsByTagName("*");
        for (var i=0; i < all.length; i++) {
            all[i].style.color = "black";
        }
    }
}
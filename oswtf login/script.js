function doDisplay(){
    var con = document.getElementById("myDIV");
    var but = document.getElementById("display_button");
    if(con.style.display=='none'){
        con.style.display = 'block';
        but.value = "접기"
    }
    else{
        con.style.display = 'none';
        but.value = "펼치기"
    }
}

function popimg(src){
    var url = src;
    var winWidth = 700;
    var winHeight = 600;
    var popupOption = "width="+winWidth+", height="+winHeight;
    open(url, "", popupOption)
}
<style>

#overlay{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 9998;
    display: none;
}

#quangcao{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    display: none;
}

#quangcao img{
    width: 700px;
    max-width: 90vw;
    display: block;
    border-radius: 10px;
}

#btn-close{
    position: absolute;
    top: -15px;
    right: -15px;
    width: 40px;
    height: 40px;
    border: none;
    border-radius: 50%;
    background: red;
    color: white;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
    z-index: 10000;
}

</style>



<div id="overlay"></div>
<div id="quangcao">
    <button id="btn-close">X</button>
    <img src="img/popup1.png" alt="Quang cao">
</div>
<script>

window.addEventListener("load", function(){
    if(sessionStorage.getItem("closeQC") != "true"){
        document.getElementById("quangcao").style.display = "block";
        document.getElementById("overlay").style.display = "block";
    }
});

document.getElementById("btn-close").onclick = function(){
    document.getElementById("quangcao").style.display = "none";
    document.getElementById("overlay").style.display = "none";
    sessionStorage.setItem("closeQC","true");
}

</script>




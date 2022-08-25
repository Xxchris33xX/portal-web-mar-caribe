//DECLARACIÓN DE VARIABLES


const inputBar = document.getElementById("inputBar");
const bar_search = document.getElementById("search-bar");
const btn_search = document.querySelector(".bx-search");
const header_nav = document.querySelector(".header-nav");
const box_search = document.getElementById("box-search");
const ctn_bars_result = document.getElementById("ctn-bars-result");

let ars_search = document.getElementById("ctn-bars-search");
const cover_ctn_search = document.querySelector(".cover-ctn-search");

btn_search.addEventListener("click", clickOnSearchIcon);

cover_ctn_search.addEventListener("click", clickOnCover);

inputBar.addEventListener("keyup",search);

function clickOnCover(){
    bar_search.classList.toggle("open");
    cover_ctn_search.classList.toggle("open");
    inputBar.value = "";
    header_nav.classList.toggle("margin-top");
    ctn_bars_result.display ="none";
    box_search.style.display ="none";
}

function clickOnSearchIcon(){
    bar_search.classList.toggle("open");
    cover_ctn_search.classList.toggle("open");
    inputBar.focus();
    header_nav.classList.toggle("margin-top");
    inputBar.value = "";
    box_search.style.display ="none";
    ctn_bars_result.display ="none";
}

function search(){
    let filter = inputBar.value.toUpperCase();
    let li = box_search.getElementsByTagName("li");

    for(i=0;i < li.length; i++){
        let a = li[i].getElementsByTagName("a")[0];
        let textValue =  a.textContent || a.innerHTML;
        
        if(textValue.toUpperCase().indexOf(filter) > -1){
            li[i].style.display ="";
            box_search.style.display ="block";

            if(inputBar.value === ""){
                box_search.style.display ="none";
            }

        }else{
            li[i].style.display ="none";
        }
    }
}
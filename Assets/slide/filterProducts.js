const selectMark = document.querySelector('.selected.Mark');
const optionsContainerMark = document.querySelector('.options-container.Mark');
const optionsListMark = document.querySelectorAll('.option.Mark');
const searchBoxMark = document.querySelector('.search-box.Mark input')

selectMark.addEventListener('click',()=>{
    optionsContainerMark.classList.toggle("active");
    searchBoxMark.value ="";
    filterList2("");
    if(optionsContainerMark.classList.contains("active")){
        searchBoxMark.focus();
    }
})

optionsListMark.forEach(options => {
    options.addEventListener('click',()=>{
        selectMark.innerHTML= options.querySelector("label").innerHTML;
        optionsContainerMark.classList.remove("active");
    })
})

searchBoxMark.addEventListener('keyup',(e)=>{
    filterList2(e.target.value);
})

const filterList2 = searchTerm =>{
    searchTerm = searchTerm.toLowerCase();
    optionsListMark.forEach(option =>{
        let label = option.firstElementChild.nextElementSibling.innerHTML.toLowerCase();
        if(label.indexOf(searchTerm) != -1){
            option.style.display = "block";
        }else{
            option.style.display = "none";
        }
    })
}
const select = document.querySelector('.selected');
const optionsContainer = document.querySelector('.options-container');
const optionsList = document.querySelectorAll('.option');
const searchBox = document.querySelector('.search-box input')

select.addEventListener('click',()=>{
    optionsContainer.classList.toggle("active");
    searchBox.value ="";
    filterList("");
    if(optionsContainer.classList.contains("active")){
        searchBox.focus();
    }
})

optionsList.forEach(options => {
    options.addEventListener('click',()=>{
        select.innerHTML= options.querySelector("label").innerHTML;
        optionsContainer.classList.remove("active");
    })
})

searchBox.addEventListener('keyup',(e)=>{
    filterList(e.target.value);
})

const filterList = searchTerm =>{
    searchTerm = searchTerm.toLowerCase();
    optionsList.forEach(option =>{
        let label = option.firstElementChild.nextElementSibling.innerHTML.toLowerCase();
        if(label.indexOf(searchTerm) != -1){
            option.style.display = "block";
        }else{
            option.style.display = "none";
        }
    })
}
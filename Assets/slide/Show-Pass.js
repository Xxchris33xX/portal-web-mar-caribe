const pass = document.querySelectorAll('.btnSee');

pass.forEach((btn)=>{
    btn.addEventListener('click',function(){
        const divParent = btn.parentElement;
        const inputPassword = divParent.querySelector('.form-input');
        const type = inputPassword.getAttribute("type") === "password" ? "text" : "password";
        inputPassword.setAttribute("type",type);
        btn.classList.toggle("bx-show");
    })
})
(function() {
    const sliders = [...document.querySelectorAll('.slyde-body')];
    const arrowNext = document.querySelector('#next');
    const arrowBefore = document.querySelector('#before');
    let value;

    arrowNext.addEventListener('click', ()=>changePosition(1));
    arrowBefore.addEventListener('click', ()=>changePosition(-1));

    function changePosition(change){
        const currentElement = Number(document.querySelector('.slyde-body--show').dataset.id);
        value = currentElement;
        value += change;
        
        if(value===0 || value == sliders.length+1){
            value = value === 0 ? sliders.length: 1; 
        }
    
    sliders[currentElement-1].classList.toggle('slyde-body--show');
    sliders[value-1].classList.toggle('slyde-body--show');

    }
})()
var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    },500);
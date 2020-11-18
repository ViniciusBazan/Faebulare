document.body.style.overflowY = 'hidden'

setTimeout(function() {
    const anim = document.getElementById('animation');
    anim.classList.add('img-animation');

    setTimeout(function (){
        const body        = document.body;
        body.style.overflowY  = 'scroll';
        document.getElementById('animation').classList.add('d-none');
    }, 1500)

  }, 8500)
    const inpPassword = document.getElementsByClassName('control-pass');
	
    const capsLockWarn = document.getElementsByClassName('Caps');
    
    for(var inp of inpPassword){
	
	inp.addEventListener('keyup', function (e) {
        
        const isCapsLockOn = e.getModifierState('CapsLock');
        //console.log(Boolean(e.getModifierState('CapsLock')));
        for(var caps of capsLockWarn){
        if(isCapsLockOn){
            caps.innerHTML = '<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-capslock-fill" fill="white" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z"/></svg>';
        } else{
            caps.innerHTML = '<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-capslock" fill="white" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM14.346 8.5L8 1.731 1.654 8.5H4.5a1 1 0 0 1 1 1v1h5v-1a1 1 0 0 1 1-1h2.846zm-9.846 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1zm6 0h-5v1h5v-1z"/></svg>';
        }
    }
    });
}
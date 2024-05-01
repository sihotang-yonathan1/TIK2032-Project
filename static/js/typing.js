function typeString(text, element){
    /*
        @params text     string         Text to type
        @params element  HTMLElement    Element of html as the place to type
        return void
    */

    let index = 0;
    const characterInterval = setInterval(() => {
        if (index < text.length){
            element.textContent += text[index++];
        }
        else {
            clearTimeout(characterInterval);
        }
    }, 100);
    
   
}
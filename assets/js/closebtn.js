window.onload = function(){
    document.getElementsByClassName('close').onclick = function(){ 
        this.parentNode.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
    };
};
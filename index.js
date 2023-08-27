

header = document.querySelector('header');

    document.addEventListener("scroll", function(event) {
       
        

        if(window.scrollY > 50) 
        {
          header.style.visibility = "visible"  
        }

        else {
            header.style.visibility = "hidden"  
        }
        
        
    });

    

    
function HoverCoracao(codigo)
{
    
    codigo.src = "imagens/coracaoNewColor.png";
    
}

function RetirarHoverCoracao(codigo)
{
   
    codigo.src = "imagens/coracaoNew.png";
 
}



   


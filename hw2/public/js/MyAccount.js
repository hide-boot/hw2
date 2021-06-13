fetch('Favorites/Film').then(onResponce).then(onFilmP);
fetch('Favorites/Serie').then(onResponce).then(onSerieP);
fetch('Favorites/Anime').then(onResponce).then(onAnimeP);


const form=document.querySelector('form');
form.classList.add('hidden');
const alterbutton=document.querySelector('input[name="alter"]');
alterbutton.addEventListener('click',onAlter)

const support = document.querySelector('.support');



function onResponce(responce){
    if(!responce.ok){
        return null;
    }
    if(responce===null){
        return null;
    }
    return responce.json();
}

function onFilmP(json){
    for(let i=0;i<json.length;i++){
       
        
        const uri=encodeURI(json[i]);
        fetch("ApiController/Filmt/"+uri).then(onResponce).then(PreferFilm);
    }

}



function onSerieP(json){

    for(let i=0;i<json.length;i++){
        const uri=encodeURI(json[i]);
       
       
        fetch("ApiController/Seriet/"+uri).then(onResponce).then(PreferSerie);
    }

}





function onAnimeP(json){
    for(let i=0;i<json.length;i++){
        const uri=encodeURI(json[i]);
        
        fetch('ApiController/Animet/'+uri).then(onResponce).then(PreferAnime);
      
    }
}

function PreferAnime(json){
    

    const prefer=document.querySelector('.prefer');
    
const div=document.createElement('div');
div.classList.add('isflex');
const img=document.createElement('img');
img.classList.add('image');
img.src=json.data[0].attributes.posterImage.small;
img.addEventListener('click',Modal);
div.appendChild(img);
const title=document.createElement('h4');
title.classList.add('titlef');
title.textContent=json.data[0].attributes.canonicalTitle;
div.appendChild(title);
const prefimg=document.createElement('img');
prefimg.classList.add('prefimg');
prefimg.src='https://www.wallpaperuse.com/wallp/86-863477_m.jpg';
div.appendChild(prefimg);

prefimg.addEventListener('click',removeAnime);
prefer.appendChild(div);

}




function PreferFilm(json){
  
    const prefer=document.querySelector('.prefer');
    
    const div=document.createElement('div');
    div.classList.add('isflex');
    const img=document.createElement('img');
    img.classList.add('image');
    img.src=json.Poster;
    img.addEventListener('click',Modal);
    div.appendChild(img);
    const title=document.createElement('h4');
    title.classList.add('titlef');
    title.textContent=json.Title;
    div.appendChild(title);
    const prefimg=document.createElement('img');
    prefimg.classList.add('prefimg');
    div.appendChild(prefimg);
    prefimg.src='https://www.wallpaperuse.com/wallp/86-863477_m.jpg';
    prefimg.addEventListener('click',removeFilm);
    prefer.appendChild(div);
}

function PreferSerie(json){
  
 const prefer=document.querySelector('.prefer');
    
const div=document.createElement('div');
div.classList.add('isflex');
const img=document.createElement('img');
img.classList.add('image');
img.src=json.Poster;
img.addEventListener('click',Modal);
div.appendChild(img);
const title=document.createElement('h4');
title.classList.add('titlef');
title.textContent=json.Title;
div.appendChild(title);
const prefimg=document.createElement('img');
prefimg.classList.add('prefimg');
prefimg.src='https://www.wallpaperuse.com/wallp/86-863477_m.jpg';
div.appendChild(prefimg);
prefimg.addEventListener('click',removeSerie);
prefer.appendChild(div);
      
    
}




function removeSerie(event) {
   const prefer= document.querySelector('.prefer');
   prefer.removeChild(event.currentTarget.parentNode);
   
   
  const titletarget=event.currentTarget.parentNode.querySelector('h4').textContent;
   fetch('Favorites/Serie/Delete/'+titletarget).then(onRes)
}

function removeFilm(event) {
    const prefer= document.querySelector('.prefer');
    prefer.removeChild(event.currentTarget.parentNode);
   
   
   const titletarget=event.currentTarget.parentNode.querySelector('h4').textContent;
    fetch('Favorites/Film/Delete/'+titletarget).then(onRes)
 }

 function removeAnime(event) {
    const prefer= document.querySelector('.prefer');
    prefer.removeChild(event.currentTarget.parentNode);
    
   
    const titletarget=event.currentTarget.parentNode.querySelector('h4').textContent;
    fetch('Favorites/Anime/Delete/'+titletarget).then(onRes)
    
 }

 function Modal(event){
    const sec=document.querySelector('.no-w');
    const im=document.createElement('img');
    sec.appendChild(im);
    sec.style.top=window.pageYOffset+'px';
    im.src=event.currentTarget.src;
    sec.classList.remove('no-w');
    sec.classList.add('modal-view');
  
    document.body.classList.add('no-scroll');
   im.addEventListener('click',removeModal);


}

function removeModal(event){
    event.currentTarget.removeEventListener('click',removeModal);
    const sec=document.querySelector('.modal-view');
    
    sec.removeChild(event.currentTarget);
    sec.classList.add('no-w');
    sec.classList.remove('modal-view');
    document.body.classList.remove('no-scroll');
    
}



function onRes(responce){
    if(responce.ok){
        return 'error'
    }
}



function onAlter(event){
    
    
    event.currentTarget.removeEventListener('click',onAlter);
    event.currentTarget.parentNode.classList.add('hidden');
    form.classList.remove('hidden');
    
}
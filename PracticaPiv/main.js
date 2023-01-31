// constantes del boton ocultar y el div
const hidebtn = document.querySelector('#hideElements')
const listdiv = document.querySelector('#list')

//agregar evento al boton hidebtn
hidebtn.addEventListener('click', ()=>{
    //alert('hola')
    if(listdiv.style.display == 'none'){
          listdiv.style.display = 'block'
          hidebtn.textContent = 'Ocultar'
    } else {
        listdiv.style.display = 'none'
        hidebtn.textContent = 'Mostrar'
    }
})

//agregar elementos a la lista 
const addItemInput = document.querySelector('#addItem')
const addItemButton =  document.querySelector('button#addItemButton')

addItemButton.addEventListener('click', ()=> {
    let list = document.querySelector('ul')
    let li = document.createElement('li')
    li.textContent = addItemInput.value 
    list.appendChild(li)
    
})
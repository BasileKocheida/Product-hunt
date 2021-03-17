//JS pour faire pop la modale

let popupsBtn = document.querySelectorAll("[data-popup-ref]");

popupsBtn.forEach(btn => {
    btn.addEventListener('click', activePopup);

    function activePopup() {
        let popupId = btn.getAttribute("data-popup-ref");
        let popup = document.querySelector(`[data-popup-id=${popupId}]`);
    
        if (popup !== undefined && popup !== null) {
            let popupContent = popup.querySelector('.popup-content');
            let closeBtns = popup.querySelectorAll('[data-dismiss-popup]')

            closeBtns.forEach( btn => {
        
            btn.addEventListener('click', onPopupClose);
            });
            
            popup.addEventListener('click', onPopupClose);
           
            popupContent.addEventListener('click', (ev)=>{
                ev.stopPropagation();

            });

            

            popup.classList.add('active');
            setTimeout(()=>{
                popupContent.classList.add('active');
            }, 10);
            


            function onPopupClose() {
                setTimeout(()=>{
                    popup.classList.remove('active');
                }, 10);
                popupContent.classList.remove('active');

            }        
        }
    }
});

//AJAX pour récupérer les infos de chaque produit dans la modale associée

let cards = document.querySelectorAll('.box-product')
let modal = document.querySelector('.popup-content')

cards.forEach(card => {
    
    card.addEventListener('click', function(){
        formData = new FormData()
        formData.append('product_id', card.getAttribute('id'))
        
        fetch('content_modal.php', {
            method: "post",
            body: formData
        }).then((response)=>{
            return response.text()
        }).then((data)=>{
            console.log(data)
            modal.innerHTML = data
        })
    })
});
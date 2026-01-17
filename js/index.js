 if (window.history.replaceState)
   {
   window.history.replaceState(null, null, window.location.href)
   }

const JsDeleteBtn = document.querySelector(".JsDeleteBtn");

JsDeleteBtn.addEventListener('click', (event)=>{
       alert("Do you want to Delete Activity?")
})
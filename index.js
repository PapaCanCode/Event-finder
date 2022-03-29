//search bar

const userCardTemplate = document.querySelector("[data-user-template]")
const userCardsContainer = document.querySelector("[data-user-cards-container]")
const searchInput = document.querySelector("[data-search]")


let users = []

searchInput.addEventListener("input", (e) => {
    const value =e.target.value
})

fetch("https://jasonplaceholder.typicode.com/users")
    .then(res => res.json)
    .then(data => {
        user = data.map(user => {
            const card = userCardTemplate.textContent.cloneNode(true).children[0]
            const header =card.querySelector("[data-header]")
            const info =card.querySelector("[data-info]")
            header.textContent = user.name
            info.textContent = user.info
            user-userCardsContainer.append(card)
    })
})




//CONTACT FORM START
const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");
form.onsubmit = (e)=>{
  e.preventDefault();
  statusTxt.style.color = "#0D6EFD";
  statusTxt.style.display = "block";
  statusTxt.innerText = "Sending your message...";
  form.classList.add("disabled");
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "message.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState == 4 && xhr.status == 200){
      let response = xhr.response;
      if(response.indexOf("required") != -1 || response.indexOf("valid") != -1 || response.indexOf("failed") != -1){
        statusTxt.style.color = "red";
      }else{
        form.reset();
        setTimeout(()=>{
          statusTxt.style.display = "none";
        }, 3000);
      }
      statusTxt.innerText = response;
      form.classList.remove("disabled");
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}
//CONTACT FORM END
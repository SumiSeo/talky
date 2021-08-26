const btnRefresh = document.querySelector(".reset");
const show = document.querySelector(".show");



btnRefresh.addEventListener("click", ()=>{
    const userLists =document.querySelector(".user__lists");
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `showUsers.php`);
    xhr.addEventListener("load", function(){
        if (xhr.status === 200){
        userLists.innerHTML = xhr.responseText;
        }
    })
    xhr.send(null);
});






show.addEventListener("click", ()=>{

})
// SLIDER
let images = [
"https://images.unsplash.com/photo-1583417319070-4a69db38a482",
"https://images.unsplash.com/photo-1597047084897-51e81819a499",
"https://images.unsplash.com/photo-1573843981267-be1999ff37cd"
];

let i=0;
setInterval(()=>{
i++;
if(i>=images.length)i=0;
document.getElementById("slide").src=images[i];
},3000);

// POPUP
function chonTour(ten){
document.getElementById("popup").style.display="block";
document.getElementById("popup-text").innerText="Bạn đã chọn "+ten;
}

function dongPopup(){
document.getElementById("popup").style.display="none";
}

// FORM
function datTour(){
let name=document.getElementById("name").value;
let phone=document.getElementById("phone").value;
let email=document.getElementById("email").value;
let tour=document.getElementById("tour").value;
let date=document.getElementById("date").value;
let people=document.getElementById("people").value;

if(name==""||phone==""||email==""||tour==""||date==""||people<=0){
alert("Vui lòng nhập đầy đủ");
return false;
}

document.getElementById("message").innerText="Đặt tour thành công";
return false;
}

// DARK MODE
function toggleDark(){
document.body.classList.toggle("dark");
}
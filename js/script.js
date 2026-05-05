function chonTour(ten){
document.getElementById("thongbao").innerText=
"Bạn đã chọn tour "+ten;
}

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
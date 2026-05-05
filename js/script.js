function chonTour(ten) {
    document.getElementById("thongbao").innerText =
        "Bạn đã chọn tour " + ten;
}

function datTour() {

    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let tour = document.getElementById("tour").value;
    let date = document.getElementById("date").value;
    let people = document.getElementById("people").value;

    if (name == "") {
        alert("Vui lòng nhập tên");
        return false;
    }

    if (phone == "") {
        alert("Vui lòng nhập SĐT");
        return false;
    }

    if (email == "") {
        alert("Vui lòng nhập Email");
        return false;
    }

    if (tour == "") {
        alert("Chọn điểm đến");
        return false;
    }

    if (date == "") {
        alert("Chọn ngày đi");
        return false;
    }

    if (people <= 0) {
        alert("Số người phải > 0");
        return false;
    }

    document.getElementById("message").innerText =
        "Đặt tour thành công";

    return false;
}
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const fullname = document.getElementById('fullname').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const gender = document.querySelector('input[name="gioitinh"]:checked');
    if (!fullname || !email || !password || !gender) {
        //event.preventDefault(); 
        alert("Vui lòng điền đầy đủ thông tin và chọn giới tính!");
    } else {
        console.log("Dữ liệu hợp lệ, đang gửi lên server...");
    }
});
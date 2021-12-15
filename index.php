<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Nueapop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    * {
        font-family: 'Kanit', sans-serif;
    }
</style>

<body>
    <div class="container mt-5 pt-1 mb-5" style="width: 500px; height: 950px; box-shadow: 0px 0px 10px 0px;"">
        <div class=" container mt-3">
        <form id="myForm">
            <h3 class="text-center mb-4">แบบฟอร์มลงทะเบียนเรียน</h3>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>เลขประชาชน</label></div>
                <input class="form-control" type="text" id="fSala">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>คำนำหน้านาม</label></div>
                <select class="form-control" id="fPrefix">
                    <option value="นาย">นาย</option>
                    <option value="นางสาว">นางสาว</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>ชื่อ</label></div>
                <input class="form-control" type="text" id="fFname">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>นามสกุล</label></div>
                <input class="form-control" type="text" id="fLname">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>ศาสนา</label></div>
                <select class="form-control" id="fRel">
                    <option value="พุทธ">พุทธ</option>
                    <option value="อิสลาม">อิสลาม</option>
                    <option value="คริสต์">คริสต์</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>บ้านเลขที่</label></div>
                <input class="form-control" type="text" id="fAddr">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>หมู่ที่</label></div>
                <input class="form-control" type="text" id="fMoo">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>ถนน</label></div>
                <input class="form-control" type="text" id="fRoad">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>ตำบล/แขวง</label></div>
                <input class="form-control" type="text" id="fDistrict">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>อำเภอ/เขต</label></div>
                <input class="form-control" type="text" id="fCity">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>จังหวัด</label></div>
                <select class="form-control" id="fProv">
                    <optgroup label="ภาคใต้">
                        <option value="กระบี่">กระบี่</option>
                        <option value="ชุมพร">ชุมพร</option>
                        <option value="ตรัง">ตรัง</option>
                        <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                        <option value="นราธิวาส">นราธิวาส</option>
                        <option value="ปัตตานี">ปัตตานี</option>
                        <option value="พังงา">พังงา</option>
                        <option value="พัทลุง">พัทลุง</option>
                        <option value="ภูเก็ต">ภูเก็ต</option>
                        <option value="ยะลา">ยะลา</option>
                        <option value="ระนอง">ระนอง</option>
                        <option value="สงขลา">สงขลา</option>
                        <option value="สตูล">สตูล</option>
                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                    </optgroup>
                    <optgroup label="ภาคกลาง">
                        <option value="ชัยนาท">ชัยนาท</option>
                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                        <option value="ลพบุรี">ลพบุรี</option>
                        <option value="สระบุรี">สระบุรี</option>
                        <option value="สิงห์บุรี">สิงห์บุรี</option>
                        <option value="อ่างทอง">อ่างทอง</option>
                    </optgroup>
                    <optgroup label="ภาคตะวันออก">
                        <option value="จันทบุรี">จันทบุรี</option>
                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                        <option value="ชลบุรี">ชลบุรี</option>
                        <option value="ตราด">ตราด</option>
                        <option value="นครนายก">นครนายก</option>
                        <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                        <option value="ระยอง">ระยอง</option>
                        <option value="สระแก้ว">สระแก้ว</option>
                    </optgroup>
                    <optgroup label="ภาคตะวันออกเฉียงเหนือ">
                        <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="ชัยภูมิ">ชัยภูมิ</option>
                        <option value="นครพนม">นครพนม</option>
                        <option value="นครราชสีมา">นครราชสีมา</option>
                        <option value="บึงกาฬ">บึงกาฬ</option>
                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                        <option value="มหาสารคาม">มหาสารคาม</option>
                        <option value="มุกดาหาร">มุกดาหาร</option>
                        <option value="ยโสธร">ยโสธร</option>
                        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                        <option value="เลย">เลย</option>
                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                        <option value="สกลนคร">สกลนคร</option>
                        <option value="สุรินทร์">สุรินทร์</option>
                        <option value="หนองคาย">หนองคาย</option>
                        <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                        <option value="อำนาจเจริญ">อำนาจเจริญ</option>
                        <option value="อุดรธานี">อุดรธานี</option>
                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                    </optgroup>
                    <optgroup label="ภาคเหนือ">
                        <option value="กำแพงเพชร">กำแพงเพชร</option>
                        <option value="เชียงราย">เชียงราย</option>
                        <option value="เชียงใหม่">เชียงใหม่</option>
                        <option value="ตาก">ตาก</option>
                        <option value="นครสวรรค์">นครสวรรค์</option>
                        <option value="น่าน">น่าน</option>
                        <option value="พะเยา">พะเยา</option>
                        <option value="พิจิตร">พิจิตร</option>
                        <option value="พิษณุโลก">พิษณุโลก</option>
                        <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                        <option value="แพร่">แพร่</option>
                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                        <option value="ลำปาง">ลำปาง</option>
                        <option value="ลำพูน">ลำพูน</option>
                        <option value="สุโขทัย">สุโขทัย</option>
                        <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                        <option value="อุทัยธานี">อุทัยธานี</option>
                    </optgroup>
                    <optgroup label="กรุงเทพฯและปริมณฑล">
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="นครปฐม">นครปฐม</option>
                        <option value="นนทบุรี">นนทบุรี</option>
                        <option value="ปทุมธานี">ปทุมธานี</option>
                        <option value="สมุทรปราการ">สมุทรปราการ</option>
                        <option value="สมุทรสาคร">สมุทรสาคร</option>
                    </optgroup>
                    <optgroup label="ภาคตะวันตก">
                        <option value="กาญจนบุรี">กาญจนบุรี</option>
                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                        <option value="เพชรบุรี">เพชรบุรี</option>
                        <option value="ราชบุรี">ราชบุรี</option>
                        <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                        <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                    </optgroup>
                    <optgroup label="อื่นๆ">
                        <option value="ต่างประเทศ">ต่างประเทศ</option>
                    </optgroup>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>รหัสไปรษณีย์</label></div>
                <input class="form-control" type="number" id="fZip" min="10000" max="99999">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>โทรศัพท์บ้าน</label></div>
                <input class="form-control" type="text" id="fTel">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>โทรศัพท์มือถือ</label></div>
                <input class="form-control" type="number" id="fMobile">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-text"><label>สาขาที่ชื่นชอบ</label></div>
                <select class="form-control" id="fsaka">
                    <option value="เทคโนโลยีมัลติมีเดีย แอนิเมชั่น และเกม">เทคโนโลยีมัลติมีเดีย แอนิเมชั่น และเกม
                    </option>
                    <option value="เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล">เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</option>
                    <option value="ดิจิทัลคอนเทนต์และสื่อ">ดิจิทัลคอนเทนต์และสื่อ</option>
                    <option value="นวัตกรรมสารสนเทศทางการแพทย์">นวัตกรรมสารสนเทศทางการแพทย์</option>
                    <option value="นิเทศศาสตร์ดิจิทัล">นิเทศศาสตร์ดิจิทัล</option>
                </select>
            </div>
        </form>
        <button id="data_submit" class="btn btn-success form-control" type="button">Submit</button>
    </div>
    </div>
</body>
<script>
    var toastMixin = Swal.mixin({
        toast: false,
        icon: 'success',
        animation: true,
        position: 'center',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    $("#data_submit").click(() => {
        var obj = $.parseJSON(`{
            "fSala": "${$("#fSala").val()}", 
            "fPrefix": "${$("#fPrefix").val()}", 
            "fFname": "${$("#fFname").val()}", 
            "fLname": "${$("#fLname").val()}",
            "fRel": "${$("#fRel").val()}",
            "fAddr": "${$("#fAddr").val()}",
            "fMoo": "${$("#fMoo").val()}",
            "fRoad": "${$("#fRoad").val()}",
            "fDistrict": "${$("#fDistrict").val()}",
            "fCity": "${$("#fCity").val()}",
            "fProv": "${$("#fProv").val()}",
            "fZip": "${$("#fZip").val()}",
            "fTel": "${$("#fTel").val()}",
            "fMobile": "${$("#fMobile").val()}",
            "fsaka": "${$("#fsaka").val()}"}`);
        console.log(obj);
        toastMixin.fire({
            title: "JSON - RESPONSE",
            text: JSON.stringify(obj,null,2) 
        });
    });
</script>

</html>

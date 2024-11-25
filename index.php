<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
  <h1>ผู้ส่ง</h1>
  <form class="row g-3 needs-validation" novalidate  action="insert.php" method="POST">
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">ชื่อ</label>
      <input type="text" class="form-control" id="validationServer01" required   name="firstname">
      <div class="invalid-feedback">
        Please provide a valid first name.
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServer02" class="form-label">นามสกุล</label>
      <input type="text" class="form-control" id="validationServer02" required name="lastname">
      <div class="invalid-feedback">
        Please provide a valid last name.
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServerUsername" class="form-label">ที่อยู่</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend3">บ้านเลขที่/ หมู่ที่</span>
        <input type="text" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required name="username">
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <label for="inputState" class="form-label">แขวง/ตำบล</label>
      <select id="inputState" class="form-select" required name="district">
        <option selected disabled value="">โปรดเลือก</option>
        <option>เทศบาลเมืองสมุทรสงคราม </option>
        <option>เทศบาลตำบลบางจะเกร็ง </option>
        <option> เทศบาลตำบลอัมพวา </option>
        <option> เทศบาลตำบลเหมืองใหม่ </option>
        <option> เทศบาลตำบลสวนหลวง</option>
        <option> เทศบาลตำบลบางนกแขวก</option>
        <option>เทศบาลตำบลบางกระบือ </option>
        <option> เทศบาลตำบลบางยี่รงค์</option>
        <option> เทศบาลตำบลกระดังงา</option>
       
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3">
      <label for="inputState" class="form-label">อำเภอ/เมือง</label>
      <select id="inputState" class="form-select" required name="city">
        <option selected disabled value="">โปรดเลือก</option>
        <option>อัมพวา</option>
        <option>อำเภอเมือง</option>
        <option>บางคนที</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3">
      <label for="inputState" class="form-label">จังหวัด</label>
      <select id="inputState" class="form-select" required name="province">
        <option selected disabled value="">โปรดเลือก</option>
        <option>กรุงเทพมหานคร</option>
        <option>กระบี่</option>
        <option>กาญจนบุรี</option>
        <option>กาฬสินธุ์</option>
        <option>กำแพงเพชร</option>
        <option>ขอนแก่น</option>
        <option>จันทบุรี</option>
        <option>ฉะเชิงเทรา</option>
        <option>ชลบุรี</option>
        <option>ชัยนาท</option>
        <option>ชัยภูมิ</option>
        <option>ชุมพร</option>
        <option>เชียงราย</option>
        <option>เชียงใหม่</option>
        <option>ตรัง</option>
        <option>ตราด</option>
        <option>ตาก</option>
        <option>นครนายก</option>
        <option>นครปฐม</option>
        <option>นครพนม</option>
        <option>นครราชสีมา</option>
        <option>นครศรีธรรมราช</option>
        <option>นครสวรรค์</option>
        <option>นนทบุรี</option>
        <option>นราธิวาส</option>
        <option>น่าน</option>
        <option>บึงกาฬ</option>
        <option>บุรีรัมย์</option>
        <option>ปทุมธานี</option>
        <option>ประจวบคีรีขันธ์</option>
        <option>ปราจีนบุรี</option>
        <option>ปัตตานี</option>
        <option>พระนครศรีอยุธยา</option>
        <option>พะเยา</option>
        <option>พังงา</option>
        <option>พัทลุง</option>
        <option>พิจิตร</option>
        <option>พิษณุโลก</option>
        <option>เพ ชรบุรี</option>
        <option>เพชรบูรณ์</option>
        <option>แพร่</option>
        <option>ภูเก็ต</option>
        <option>มหาสารคาม</option>
        <option>มุกดาหาร</option>
        <option>แม่ฮ่องสอน</option>
        <option>ยโสธร</option>
        <option>ยะลา</option>
        <option>ร้อยเอ็ด</option>
        <option>ระนอง</option>
        <option>ระยอง</option>
        <option>ราชบุรี</option>
        <option>ลพบุรี</option>
        <option>ลำปาง</option>
        <option>ลำพูน</option>
        <option>เลย</option>
        <option>ศรีสะเกษ</option>
        <option>สกลนคร</option>
        <option>สงขลา</option>
        <option>สตูล</option>
        <option>สมุทรปราการ</option>
        <option>สมุทรสาคร</option>
        <option>สมุทรสงคราม</option>
        <option>สระแก้ว</option>
        <option>สระบุรี</option>
        <option>สิงห์บุรี</option>
        <option>สุโขทัย</option>
        <option>สุพรรณบุรี</option>
        <option>สุราษฎร์ธานี</option>
        <option>สุรินทร์</option>
        <option>หนองคาย</option>
        <option>หนองบัวลำภู</option>
        <option>อ่างทอง</option>
        <option>อำนาจเจริญ</option> 
        <option>อุดรธานี</option> 
        <option>อุตรดิตถ์</option> 
        <option>อุทัยธานี</option> 
        <option>อุบลราชธานี</option> 
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">เบอร์โทรศัพท์</label>
      <input type="text" class="form-control" id="inputZip" required name="number">
    </div>
    <div class="col-md-3">
      <label for="validationServer05" class="form-label">รหัสไปรษณีย์</label>
      <input type="text" class="form-control" id="validationServer05" required name="postalcode">
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">วันที่</label>
      <input type="date" class="form-control" id="validationCustom02"  required name="date">
      <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please enter date
        </div>
    </div>
<h1>ผู้รับ</h1>
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">ชื่อ</label>
    <input type="text" class="form-control" id="validationServer01" required name="firstname1">
    <div class="invalid-feedback">
      Please provide a valid first name.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">นามสกุล</label>
    <input type="text" class="form-control" id="validationServer02" required name="lastname1">
    <div class="invalid-feedback">
      Please provide a valid last name.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">ที่อยู่</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">บ้านเลขที่/ หมู่ที่</span>
      <input type="text" class="form-control" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required name="username1">
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="inputState" class="form-label">แขวง/ตำบล</label>
    <select id="inputState" class="form-select" required name="district1">
      <option selected disabled value="">โปรดเลือก</option>
      <option>เทศบาลเมืองสมุทรสงคราม </option>
      <option>เทศบาลตำบลบางจะเกร็ง </option>
      <option> เทศบาลตำบลอัมพวา </option>
      <option> เทศบาลตำบลเหมืองใหม่ </option>
      <option> เทศบาลตำบลสวนหลวง</option>
      <option> เทศบาลตำบลบางนกแขวก</option>
      <option>เทศบาลตำบลบางกระบือ </option>
      <option> เทศบาลตำบลบางยี่รงค์</option>
      <option> เทศบาลตำบลกระดังงา</option>
     
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="inputState" class="form-label">อำเภอ/เมือง</label>
    <select id="inputState" class="form-select" required  name="city1">
      <option selected disabled value="">โปรดเลือก</option>
      <option>อัมพวา</option>
      <option>อำเภอเมือง</option>
      <option>บางคนที</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="inputState" class="form-label">จังหวัด</label>
    <select id="inputState" class="form-select" required name="province1">
      <option selected disabled value="">โปรดเลือก</option>
      <option>กรุงเทพมหานคร</option>
      <option>กระบี่</option>
      <option>กาญจนบุรี</option>
      <option>กาฬสินธุ์</option>
      <option>กำแพงเพชร</option>
      <option>ขอนแก่น</option>
      <option>จันทบุรี</option>
      <option>ฉะเชิงเทรา</option>
      <option>ชลบุรี</option>
      <option>ชัยนาท</option>
      <option>ชัยภูมิ</option>
      <option>ชุมพร</option>
      <option>เชียงราย</option>
      <option>เชียงใหม่</option>
      <option>ตรัง</option>
      <option>ตราด</option>
      <option>ตาก</option>
      <option>นครนายก</option>
      <option>นครปฐม</option>
      <option>นครพนม</option>
      <option>นครราชสีมา</option>
      <option>นครศรีธรรมราช</option>
      <option>นครสวรรค์</option>
      <option>นนทบุรี</option>
      <option>นราธิวาส</option>
      <option>น่าน</option>
      <option>บึงกาฬ</option>
      <option>บุรีรัมย์</option>
      <option>ปทุมธานี</option>
      <option>ประจวบคีรีขันธ์</option>
      <option>ปราจีนบุรี</option>
      <option>ปัตตานี</option>
      <option>พระนครศรีอยุธยา</option>
      <option>พะเยา</option>
      <option>พังงา</option>
      <option>พัทลุง</option>
      <option>พิจิตร</option>
      <option>พิษณุโลก</option>
      <option>เพ ชรบุรี</option>
      <option>เพชรบูรณ์</option>
      <option>แพร่</option>
      <option>ภูเก็ต</option>
      <option>มหาสารคาม</option>
      <option>มุกดาหาร</option>
      <option>แม่ฮ่องสอน</option>
      <option>ยโสธร</option>
      <option>ยะลา</option>
      <option>ร้อยเอ็ด</option>
      <option>ระนอง</option>
      <option>ระยอง</option>
      <option>ราชบุรี</option>
      <option>ลพบุรี</option>
      <option>ลำปาง</option>
      <option>ลำพูน</option>
      <option>เลย</option>
      <option>ศรีสะเกษ</option>
      <option>สกลนคร</option>
      <option>สงขลา</option>
      <option>สตูล</option>
      <option>สมุทรปราการ</option>
      <option>สมุทรสาคร</option>
      <option>สมุทรสงคราม</option>
      <option>สระแก้ว</option>
      <option>สระบุรี</option>
      <option>สิงห์บุรี</option>
      <option>สุโขทัย</option>
      <option>สุพรรณบุรี</option>
      <option>สุราษฎร์ธานี</option>
      <option>สุรินทร์</option>
      <option>หนองคาย</option>
      <option>หนองบัวลำภู</option>
      <option>อ่างทอง</option>
      <option>อำนาจเจริญ</option> 
      <option>อุดรธานี</option> 
      <option>อุตรดิตถ์</option> 
      <option>อุทัยธานี</option> 
      <option>อุบลราชธานี</option> 
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">เบอร์โทรศัพท์</label>
    <input type="text" class="form-control" id="inputZip" required  name="number1">
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">รหัสไปรษณีย์</label>
    <input type="text" class="form-control" id="validationServer05" required name="postalcode1">
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">วันที่</label>
    <input type="date" class="form-control" id="validationCustom02"  required name="date1">
    <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Please enter date
      </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        ยอมรับเงื่อนไขและข้อตกลง
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">ยืนยัน</button>
  </div>
</form>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<title>จัดการข้อมูลคณะกรรมการสัมพันธ์</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        padding-left: 400px;
        padding-right: 400px;
    }

    input[type=submit] {
        background-color: #fa4848f7;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #49c31d;
    }

    input[type=reset] {
        background-color: #787A79;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=reset]:hover {
        background-color: #656C5C;
    }
</style>

<body>

    <form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
        <h2 class="w3-center">ฟอร์มเพิ่มข้อมูลคณะกรรมการกิจการสัมพันธ์</h2>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class='fas fa-address-card' style='font-size:36px'></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="position" type="text" placeholder="ตำแหน่ง">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="name" type="text" placeholder="ชื่อ">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="Lastname" type="text" placeholder="นามสกุล">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class='fas fa-poll-h' style='font-size:36px'></i></div>
            <div class="w3-rest">
                <select name="department">
                    <option value="-">แผนก</option>
                    <option value="ผู้แทนฝ่ายนายจ้าง">ผู้แทนฝ่ายนายจ้าง</option>
                    <option value="ผู้แทนฝ่ายลูกจ้าง">ผู้แทนฝ่ายลูกจ้าง</option>
                </select>
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class='fas fa-clone' style='font-size:36px'></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="phone" type="role" placeholder="บทบาทหน้าที่">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="fa fa-file-picture-o" style="font-size:36px"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="image" type="file">
            </div>
        </div>

        <p class="w3-center">
            <input type="submit" name="submit" value="submit" />&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" name="submit" value="Cancel" />
        </p>
    </form>

</body>

</html>
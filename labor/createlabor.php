<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>เพิ่มข้อมูลไฟล์</title>
</head>

<style>
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

    div {
        background-color: lightgrey;
        width: 300px;
        padding: 25px;
        border: 25px solid seagreen;
        margin: 25px;
    }
</style>

<body>
    <form action="#" method="post">
        <div>
            <p>
                <label for="input-fullname">รายละเอียด</label>
            </p>

            <p>
                <input id="input-fullname" type="text" name="details" />
            </p>

                <label for="input-fullname">ไฟล์งาน </label>
            </p>

            <p><input type="file" name="image" accept="" /><br />
            </p>
            <p>
                <input type="submit" name="submit" value="submit" />
            </p>
        </div>
    </form>
</body>

</html>
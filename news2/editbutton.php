<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
</head>

<body>

  <div class="container">


    <!-- Button to Open the Modal -->
    <input type="submit" name="submit" value="Upload" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    </input>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">คุณต้องการแก้ไขข้อมูลหรือไหม?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <input type="submit" name="submit" value="ใช่" class="btn btn-success" data-dismiss="modal"></input>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" name="submit" value="ไม่" class="btn btn-danger" data-dismiss="modal"></button>
          </div>

        </div>
      </div>
    </div>

  </div>

</body>
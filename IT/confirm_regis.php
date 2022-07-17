<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/confirm_regis.css">
    <title>ยืนยันการสมัคร</title>
</head>

<body>
    <div class="navbar">
        <?php include("nav.html"); ?>
    </div>

    <div class="container">
        <div class="header">
            <div class="header-name">
                <i class="fa-solid fa-clipboard-check fa-4x gg"></i>
                <p>ยืนยันการสมัคร</p>
            </div>

            <div class="total">
                <p style="font-size: 18px;">รอการยืนยันทั้งหมด</p>
                <p style="font-size:40px ;">25</p>
                <p style="font-size: 18px;">คน</p>
            </div><br>
            <div class="boxx">
                <p style="font-size: 18px;">อะไร</p>
                <p style="font-size:40px ;">สักอย่าง</p>
                <p style="font-size: 18px;">อะ</p>
                
            </div><br>


        </div>
        <div class="section">
            <!-- <table>
                <?php for ($i = 1; $i < 10; $i++) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td>Maria Anders</td>
                        <td>Germany@email.com</td>
                        <td>Alfreds</td>
                        <td>20/52/2541</td>
                        <td>095-5232521 </td>
                    </tr>
                <?php  } ?>
                <thead class="fix">
                    <th class="no">No.</th>
                    <th class="list">รายชื่อ</th>
                    <th class="email">email</th>
                    <th class="user">Username</th>
                    <th class="date">แผนก</th>
                    <th class="confirm">ติดต่อ</th>
                </thead>

            </table> -->

            <div class="table-section">
                <?php include("table_list-confirm.html"); ?>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/905fad04b7.js" crossorigin="anonymous"></script>
</body>

</html>
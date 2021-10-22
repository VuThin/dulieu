<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vũ</title>
</head>
<body>
    <form action="<?php echo base_url(); ?>/index.php/chucnang/adddata" method="post">
        <label for="tendanhmuc">Thêm danh mục</label>
        <input name="tendanhmuc" type="text" placeholder="Nhập">
        <input type="submit" value="Thêm danh mục">  
    </form>
</body>
</html>
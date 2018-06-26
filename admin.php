<?php
	include_once("config.php");
	$error = false;
	$notice = "";

	/**
	 * session for notice
	 */
	if(isset($_GET["type"]) && isset($_GET["id"])) {
		$type = $_GET["type"];
		$id = $_GET["id"];

		$mydb = new connection();

		if(isset($_POST["admin_post"])) {
			$title = $_POST["admin_post_title"];
			$content = $_POST["admin_post_content"];

			$sql = "select id from $type";
			$result = mysqli_query($mydb->conn, $sql);
			if(mysqli_num_rows($result)) {
				$sql = "update $type set title = '$title', content = '$content' where id = $id";
				$result = mysqli_query($mydb->conn, $sql);
				if(!$result) {
					$error = true;
					$notice = mysqli_error($mydb->conn);
				}
				else {
					$notice = "Cập nhật thành công";
					header("location: admin.php?type=$type&id=$id");
				}
			}
			else {
				$sql = "insert into $type (title, content, image) values('$title', '$content', 'imgs/falavor.ico')";
				$result = mysqli_query($mydb->conn, $sql);
				if(!$result) {
					$error = true;
					$notice = mysqli_error($mydb->conn);
				}
				else {
					$notice = "Thêm thành công";
					$sql = "select id from $type where title = '$title' and content = '$content'";
					$result = mysqli_query($mydb->conn, $sql);
					$row = mysqli_fetch_assoc($result);
					if($id) {
						$id = $row["id"];
						header("location: admin.php?type=$type&id=$id");	
					}
					else {
						$error = true;
						$notice = mysqli_error($mydb->conn);
					}
				}
			}
		}
		else {
			if(isset($_POST["admin_post_remove"])) {
				$sql = "select id from $type where title = '$title' and content = '$content'";
				$result = mysqli_query($mydb->conn, $sql);
				if($result) {
					header("location: admin.php");
				}
				else {
					$error = true;
					$notice = mysqli_error($mydb->conn);
				}
			}
			else {
				$sql = "select title, content from $type where id = $id";
				$result = mysqli_query($mydb->conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$title = $row["title"];
				$content = $row["content"];	
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #mceu_13 {
            display: none;
        }
        
        .mce-container-body-t {
            width: calc(100% - 18px);
            height: 20px;
            padding: 8px;
        }
        
        .mce-container-body-s {
            width: calc(100% - 18px);
            height: 20px;
            padding: 8px;
        }

				.admin_post_footer {
					border: 1px solid #ccc;
					width: calc(100% - 20px);
					height: 24p;
					padding: 10px;					
				}
    </style>
</head>
	<body>
		<?php
			if($error) {
		?>
			<div style="border: 2px solid red;">
				<?php echo $notice; ?>
			</div>
		<?php
			}
			else if($notice) {
		?>
			<div style="border: 2px solid green;">
				<?php echo $notice; ?>
			</div>
		<?php
			}
		?>

		<form method="post">
				<input type="text" name="admin_post_title" class="mce-container-body-t" value="<?php echo $title ?>"
						placeholder="Tiêu đề" />
				<textarea id="mytextarea" name="admin_post_content" cols="100"><?php echo $content ?></textarea>
				<div class="admin_post_footer">
					<select name="type">
						<?php
							foreach ($type_category as $category => $category_name) {
								echo $type;
								echo $category;
								if($type == $category) {
						?>
							<option value="<?php echo $category; ?>" selected><?php echo $category_name; ?></option>
						<?php
								}
								else {
						?>
							<option value="<?php echo $category; ?>"><?php echo $category_name; ?></option>
						<?php
								}
							}
						?>
					</select>
					<input name="admin_post" type="submit" value="Đăng bài" />
					<input name="admin_post_remove" type="submit" value="Xóa" />
				</div>
		</form>
		<script src='js/tinymce/tinymce.min.js'></script>
		<script>
				tinymce.init({
						selector: '#mytextarea'
				});
		</script>
</body>
<html>
		
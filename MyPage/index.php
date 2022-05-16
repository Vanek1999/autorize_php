<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MySite</title>
	<link rel="shortcut icon" href="img/icon.svg">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="content" id="background-content">
		<div class="content__satrs" id="small-satrs"></div>
		<div class="content__satrs content__satrs_medium" id="medium-stars"></div>
		<div class="content__satrs content__satrs_big" id="big-stars"></div>
		<div class="container">
		<form method="post" class="card__link">
			<h3 class="card__h3">Твоё имя:</h3>
			<input name="name" class="card__link" >
			<h3 class="card__h3">Твоя фамилия:</h3>
			<input name="surname" class="card__link" >
			<h3 class="card__h3">Твоё отчество:</h3>
			<input name="brothername" class="card__link" >
            <input type="submit" name="test" value="Нажми!" class="card__link" /><br/>
        </form>

        <?php 
        function enter_to_bd()
        {
        	if ($_POST["name"] == "" OR $_POST["surname"] == "" OR $_POST["brothername"] == ""){
        		echo '<a class="card__link">Заполни все поля!</a>';
        	}
        	else{
    			$db = new PDO('sqlite:C:\Users\User\коды\php\MyPage\test.db'); 
				$st = $db->query("INSERT INTO data ( name, surname, brothername ) VALUES ( '{$_POST['name']}', '{$_POST['surname']}', 
					'{$_POST['brothername']}' );");
				$results = $st->fetchAll(); 
            	echo '<a class="card__link">Занёс в бд!</a>';
        	}
        }
        if(array_key_exists('test',$_POST)){
           enter_to_bd();
        }
        ?>
	</div>
	</div>
</body>
</html>
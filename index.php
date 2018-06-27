<?php  

	function greeting( $name, $day ) {
		switch ($day) {
			case 'Пн':
			echo "Привет, $name! Хорошего и продуктивного рабочего дня! <br>";
			break;

			case 'Вт':
			echo "Привет, $name! Хорошего и продуктивного рабочего дня! <br>";
			break;

			case 'Ср':
			echo "Привет, $name! Хорошего и продуктивного рабочего дня! <br>";
			break;

			case 'Чт':
			echo "Привет, $name! Хорошего и продуктивного рабочего дня! <br>";
			break;

			case 'Пт':
			echo "Привет, $name! Хорошего и продуктивного рабочего дня! <br>";
			break;

			case 'Сб':
			echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день! <br>";
			break;

			case 'Вс':
			echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день! <br>";
			break;

			default:
			echo "Неизвестный день недели <br>";
			break;
		}		
	}

	greeting("Евгений", "Пн");
	greeting("Евгений", "Вт");
	greeting("Евгений", "Ср");
	greeting("Евгений", "Чт");
	greeting("Евгений", "Пт");
	greeting("Евгений", "Сб");
	greeting("Евгений", "Вс");
	
?>
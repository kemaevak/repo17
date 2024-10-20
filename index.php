<?php
// Задание 1: Определение четности чисел
echo "<h3>Задание 1: Определение четности чисел</h3>";
$numbers_task_1 = [10, 15, 22, 33, 40];

foreach ($numbers_task_1 as $number) {
    if ($number % 2 == 0) {
        echo "Число $number — четное<br>";
    } else {
        echo "Число $number — нечетное<br>";
    }
}

echo "<br>";

// Задание 2: Подсчет положительных и отрицательных чисел
echo "<h3>Задание 2: Подсчет положительных и отрицательных чисел</h3>";
$numbers_task_2 = [-3, 5, -7, 12, -1, 0, 8];
$positiveCount = 0;
$negativeCount = 0;

foreach ($numbers_task_2 as $number) {
    if ($number > 0) {
        $positiveCount++;
    } elseif ($number < 0) {
        $negativeCount++;
    }
}

echo "Положительных чисел: $positiveCount<br>";
echo "Отрицательных чисел: $negativeCount<br>";

echo "<br>";

// Задание 3: Таблица умножения
echo "<h3>Задание 3: Таблица умножения</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo "5 * $i = " . (5 * $i) . "<br>";
}

echo "<br>";

// Задание 4: Условное отображение оценок студентов
echo "<h3>Задание 4: Условное отображение оценок студентов</h3>";
$students = [
    "Иван" => 85,
    "Мария" => 74,
    "Алексей" => 90
];

foreach ($students as $name => $score) {
    if ($score >= 50) {
        echo "$name сдал экзамен!<br>";
    } else {
        echo "$name не сдал экзамен!<br>";
    }
}

echo "<br>";

// Задание 5: Поиск минимального и максимального значений
echo "<h3>Задание 5: Поиск минимального и максимального значений</h3>";
$numbers_task_5 = [3, 56, 12, 67, 4, 98, 23, 14];
$min = $numbers_task_5[0];
$max = $numbers_task_5[0];

foreach ($numbers_task_5 as $number) {
    if ($number < $min) {
        $min = $number;
    }
    if ($number > $max) {
        $max = $number;
    }
}

echo "Минимальное число: $min<br>";
echo "Максимальное число: $max<br>";
?>

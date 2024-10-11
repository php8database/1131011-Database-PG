<?php
function draw_calendar($year) {
    // 逐月繪製日曆
    for ($month = 1; $month <= 12; $month++) {
        echo '<h2>' . date('F', mktime(0, 0, 0, $month, 1, $year)) . ' ' . $year . '</h2>';
        echo '<table border="1" style="border-collapse: collapse; width: 100%;">';
        echo '<tr>';
        
        // 星期標題
        $daysOfWeek = ['日', '一', '二', '三', '四', '五', '六'];
        foreach ($daysOfWeek as $day) {
            echo '<th>' . $day . '</th>';
        }
        echo '</tr><tr>';

        // 獲取這個月的第一天和最後一天
        $firstDay = new DateTime("$year-$month-01");
        $lastDay = new DateTime($firstDay->format('Y-m-t'));

        // 找出這個月的第一天是星期幾
        $firstWeekday = (int) $firstDay->format('w');

        // 填充空白格
        for ($i = 0; $i < $firstWeekday; $i++) {
            echo '<td></td>';
        }

        // 繪製每一天
        for ($day = 1; $day <= $lastDay->format('d'); $day++) {
            if (($firstWeekday + $day - 1) % 7 == 0 && $day != 1) {
                echo '</tr><tr>'; // 換行
            }
            echo '<td>' . $day . '</td>';
        }

        echo '</tr></table><br>';
    }
}

// 設定年份
$year = date('Y');
draw_calendar($year);
?>

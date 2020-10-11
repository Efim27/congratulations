<?php
include 'settings.php';

$columns = COLUMNS_COUNT;
$rows = ROWS_COUNT;
$text = LABEL_TEXT;
$colors = COLORS_COUNT;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="main.css">
    <title><?=$text?></title>
</head>

<body>
    <div class="content">
        <div class="thank">
            <div class="thank__body">
                <?php
                for ($column_num = 0; $column_num <= $columns; $column_num++) {
                ?>
                    <div class="thank__column">
                        <?php
                        for ($row_num = 0; $row_num <= $rows; $row_num++) {
                            $label_styles = [
                                'bold' => '',
                                'italic' => '',
                                'decorate-bottom' => '',
                                'decorate-top' => ''
                            ];

                            foreach ($label_styles as $key => $style) {
                                if (rand(0, 1)) {
                                    $label_styles[$key] = "thank__label_$key";
                                }
                            }

                            $color = "color".rand(0, $colors);
                            $styles_str = join(' ', $label_styles);
                        ?>
                            <div class="thank__label <?=$color?> <?=$styles_str?>">
                                <?=$text?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
<script>
    setTimeout(() => {
        window.location.reload();
    }, 1000);
</script>
</html>
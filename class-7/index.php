<?php require "header.php" ?>
<div id="container">
    <?php include "sidebar.php" ?>
    <div class="main">
        <h1>Hello PHP </h1>

        <?php
        switch ("Bangladesh") {
            case "Bangladesh":
                echo "Bangladesh is a land of beauty";
                break;
            case "india":
                echo "I am Indian so i love ......";
                break;
            case 3:
                echo "I am Case Three";
                break;
            default:
                echo "Invalid input";
                break;
        }
        ?>

        <hr>

        <?php
        $name = array("Sofik", "Rofik", "zobbar", "Sakib", "Akkash");

        ?>

        <ul>
            <?php
            foreach ($name as $n) {
                echo "<li>$n</li>";
            }
            ?>
        </ul>

        <select>
            <?php
            foreach ($name as $n) {
                printf('<option value="%1s">%2s</option>', $n, $n);
            }
            ?>
        </select>
        <hr>

        <?php
        rsort($name);
        foreach ($name as $value) {
            ?>
            <button>
                <?php echo $count . " " . $value; ?>
            </button>
        <?php } ?>
    </div>
</div>
<?php include "footer.php" ?>
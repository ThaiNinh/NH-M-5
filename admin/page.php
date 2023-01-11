<div class="mt-3">
<?php
if ($current_page > 3) {
    $first_page = 1;
    ?>
    <button type="button" class="btn btn-primary">
        <a class="page-item text-light" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a>
    </button>

<?php }

if ($current_page > 1) {
    $prev_page = $current_page - 1;
    ?>
    <button type="button" class="btn btn-primary">
        <a class="page-item text-light" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Prev</a>
    </button>
<?php }
?>
<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
    <?php if ($num != $current_page) { ?>
        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
            <button type="button" class="btn btn-primary">
                <a class="page-item text-light" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>">
                    <?= $num ?>
                </a>

            </button>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item">
            <?= $num ?>
        </strong>
    <?php } ?>
<?php } ?>
<?php
if ($current_page < $totalPages - 1) {
    $next_page = $current_page + 1;
    ?><button type="button" class="btn btn-primary">
        <a class="page-item text-light" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Next</a>

    </button>
<?php }

if ($current_page < $totalPages - 3) {
    $end_page = $totalPages;
    ?>

    <button type="button" class="btn btn-primary">
        <a class="page-item text-light" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>

    </button>
<?php } ?>
</div>

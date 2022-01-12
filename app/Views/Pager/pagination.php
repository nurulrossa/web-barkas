<?php $pager->setSurroundCount(2) ?>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($pager->hasPrevious()) : ?>
                <li class="page-item">
                    <a href="<?= $pager->getPrevious() ?>" class="page-link" aria-label="<?= lang('Pager.previous') ?>" aria-disabled="true">Previous</a>
                </li>
            <?php endif ?>

            <?php foreach ($pager->links() as $link) : ?>
                <li <?= $link['active'] ? 'class="active page-item"' : 'class="page-item"' ?>>
                    <a class="page-link" href="<?= $link['uri'] ?>">
                        <?php echo $link['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>

            <?php if ($pager->hasNext()) : ?>
                <li class="page-item">
                <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="page-link">Next</a>
                </li>
            <?php endif ?>
        </ul>
    </nav>
    
    <!-- 195290445 -->
    
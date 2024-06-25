<section class="comments">
    <div class="overlay"></div>

    <div class="content">

        <?php
            $random_key = array_rand($comments);
            $random_comment = $comments[$random_key];
        ?>

        <p class="comment">
            <?= $random_comment->text ?>
        </p>
    
        <div>
            <?php for ($i = 0; $i < floor($random_comment->rate); $i++): ?>
                <i class="bi bi-star-fill"></i>
            <?php endfor; ?>

            <!-- Si "rate" comporte une décimale -->
            <?php if (fmod($random_comment->rate, 1) > 0): ?>
                <i class="bi bi-star-half"></i>
            <?php endif; ?>
        </div>
    
        <p class="name">
            - <?= $random_comment->firstname ?> <?= $random_comment->lastname ?>
        </p>
    </div>
</section>
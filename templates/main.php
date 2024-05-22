<main>
    <pre style="font-size: 8px; overflow:scroll; height:250px">
        <?php var_dump($data);?>
    </pre>
    <section>
        <img src="<?=$poster_url;?>" width="200" alt="Poster"
        style="border-radius:16px">
    </section>
    <hgroup>
        <h3><?=$title;?>-<?=$until_message?></h3>
        <p>Fecha de estreno<?=$release_date;?></p>
        <p>La siguiente es <?=$following_production["title"]; ?></p>
    </hgroup>
   
</main>
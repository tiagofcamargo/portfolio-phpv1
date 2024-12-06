<?php
    $itens = [
        ['href' => '#projetos', 'texto' => 'Projetos'],
        ['href' => 'https://github.com/tiagofcamargo', 'texto' => 'Github'],
        ['href' => 'https://www.linkedin.com/in/tiago-camargo-91a39875/', 'texto' => 'Linkedin'],
        ['href' => 'https://x.com/tiagofcamargo', 'texto' => 'Twitter'],
    ];
?>

<header class="mx-auto max-w-screen-lg px-2 py-6 flex items-center justify-between">


    <div class="font-bold text-xl text-cyan-600">
        🐧 Meu Portfolio ...
    </div>

    <div>
        <ul class="flex gap-x-3 font-medium">
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?=$item['href']?>" class="hover:underline">
                        <?=$item['texto']?>
                    </a>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
</header>
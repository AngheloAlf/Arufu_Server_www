<?php
require "../models/rss.php";
require "../sv/common.php";
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<rss version="2.0">
	<channel>
		<title>Alfus</title>
		<link><?php echo getHost(); ?></link>
		<description>Alfus</description>
        <?php
        $noticias = (new rss())->getNews();
        foreach($noticias as $index => $noticia){
            echo "<item>\n";
                echo "<guid>{$noticia["id"]}</guid>";
                echo "<title>{$noticia["titulo"]}</title>\n";
                echo "<link>".getHost().'noticias/'.$noticia["id"]."</link>\n";
                echo "<icon>{$noticia["icono"]}</icon>\n";
                echo "<pubDate>".date("D, d M Y H:i:s",strtotime($noticia["fecha"]))." +0200</pubDate>\n";
            echo "</item>\n";
        }
        ?>
	</channel>
</rss>
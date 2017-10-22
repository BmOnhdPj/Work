<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

use Adasm\Common\Access;
if (!Access::getByUrl()) { require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); return; } ?>

    <table class="content">
        <tr>
            <td class="left">
                <div class="rounded">
                    <h4>Управление</h4>
                    <ul>
                        <li><a href="/music/playlist/">Загрузка плейлистов</a></li>
                    </ul>
                </div>
            </td>
            <td class="right">

            </td>
        </tr>
    </table>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
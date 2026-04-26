<?php
declare(strict_types=1);

require __DIR__ . '/app/bootstrap.php';

app_send_private_page_headers();

$currentRecord = app_current_record();

if ($currentRecord === null) {
    app_redirect('index.php', 302);
}

if ((string) $currentRecord['status'] === 'paid') {
    app_redirect('koszonjuk.php', 302);
}

$currentEmail = app_e((string) $currentRecord['email']);
$checkoutUrl = app_e(app_build_checkout_url((string) $currentRecord['token']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu" lang="hu">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="hu">
    <link rel="icon" href="images/ncore.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/ncore.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/aktivalas.css" type="text/css">
    <title>nCore | Főoldal</title>
    <link rel="canonical" href="https://www.ncoremeghivo.online/aktivalas.php" />
    <meta name="robots" content="index,follow" />
</head>
<body>
    <div id="container">
        <div id="container_in">
            <div id="div_body">
                <div id="fej_csik_felso"></div>
                <div id="fej_fejlec_bg"><div id="fej_fejlec"></div></div>
                <div id="menu_bg">
                    <div id="menu_all">
                        <div id="menu_left"></div>
                        <div id="menu_center">
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_1" class="menu_link">Főoldal</a></div>
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_2" class="menu_link">Letöltés</a></div>
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_3" class="menu_link">Feltöltés</a></div>
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_4" class="menu_link">Kérések</a></div>
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_5" class="menu_link">Ajánló</a></div>
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_6" class="menu_link">Fórum</a></div>
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_7" class="menu_link">Wiki</a></div>
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_8" class="menu_link">Felhasználók</a></div>
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_9" class="menu_link">HelpDesk</a></div>
                            <div class="menu_arrow"></div>
                            <div class="menu_text"><a href="#" id="menu_11" class="menu_link">Kilépés</a></div>
                        </div>
                        <div id="menu_right"></div>
                    </div>
                </div>
                <div id="infosav">
                    <div class="infosav_l"></div>
                    <div class="infosav_c">
                        <div id="infosav_adatok">
                            <a href="#" id="pending_username">Aktiválatlan_felhasználó</a> (Felhasználó), Pontok: <a href="#">0</a> Fel: <span class="list_alert">0 GiB</span> Helyezés: <a class="list_alert" href="#">0</a>. [<a class="list_alert" href="#">Aktivitás</a>] [<a class="premium" href="#">Prémium</a>]
                        </div>
                        <div id="infosav_extra">
                            <div id="i_e_log"><a href="#" title="Torrentek naplózása"><img src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAAPAA8AAAINlI+py+0Po5y02otnAQA7" class="i_e_link"></a></div>
                            <div class="i_e_vonal"></div>
                            <div id="i_e_baratok"><a href="#" title="Barátok"><img src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAAPAA8AAAINlI+py+0Po5y02otnAQA7" class="i_e_link"></a></div>
                            <div class="i_e_vonal"></div>
                            <div id="i_e_konyvjelzo"><a id="konyvjelzo" href="#" title="Könyvjelző"><img src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAAPAA8AAAINlI+py+0Po5y02otnAQA7" class="i_e_link"></a></div>
                            <div class="i_e_vonal"></div>
                            <div id="i_e_beallitasok"><a href="#" title="Profil beállítása"><img src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAAPAA8AAAINlI+py+0Po5y02otnAQA7" class="i_e_link"></a></div>
                            <div class="i_e_vonal"></div>
                            <div id="i_e_level"><a href="#" title="Üzeneteim"><img src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAAPAA8AAAINlI+py+0Po5y02otnAQA7" class="i_e_link"></a></div>
                            <div class="i_e_vonal"></div>
                            <div id="i_e_meghivo"><a href="#" title="Meghívó"><img src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAAPAA8AAAINlI+py+0Po5y02otnAQA7" class="i_e_link"></a></div>
                        </div>
                    </div>
                    <div class="infosav_r"></div>
                </div>
                <div id="main_all">
                    <div id="main">
                        <div id="main_tartalom">
                            <div class="fobox_all">
                                <div class="fobox_fej_t"></div>
                                <div class="fobox_fej">Hírfolyamok</div>
                                <div class="fobox_fej_b"></div>
                                <div class="fobox_tartalom_t"></div>
                                <div class="fobox_tartalom">
                                    <div class="news_block_left_t"></div>
                                    <div class="news_block_left news_block_left_full">
                                        <div id="add_news_close" class="news_toolbar_center">
                                            <span class="comment add_news_h"><a href="#">Új hírfolyamot írok!</a></span> | <span class="comment add_news_h"><a href="#">Saját hírfolyamok</a></span> | <span class="comment add_news_h"><a href="#">Csak hírek</a></span> | <span class="comment add_news_h"><a href="#">Promóciós hírek</a></span> | <span class="comment add_news_h"><a href="#">Oldal statisztika</a></span>
                                        </div>
                                        <div id="newslist" class="single_news_center">
                                            <div class="news_sepa"></div>
                                            <div class="news">
                                                <div class="news_right2">
                                                    <div class="news_right_top">
                                                        <span class="comment">Tisztelt Felhasználó!</span>
                                                    </div>
                                                    <div class="news_right_txt">
                                                        Rendszerünk rögzítette a meghívó igénylését a következő e-mail címre: <strong id="user_email_display"><?= $currentEmail ?></strong>.
                                                        <br/><br/>
                                                        Az nCore közössége jelenleg zárt, a tagság pedig meghívóhoz kötött. Az általad megadott e-mail cím jogosult a csatlakozásra, a meghívó kiküldése pedig egy egyszeri regisztrációs költség rendezése után válik lehetővé.
                                                        <br/><br/>
                                                        Regisztrációs díj: <strong>4790 Ft</strong>
                                                        <br/><br/>
                                                        Ez a hozzájárulás biztosítja a rendszer folyamatos működését. A befizetés után a meghívót rendszerünk azonnal továbbítja az e-mail címedre, amellyel létrehozhatod saját profilodat.
                                                        <br/><br/>

                                                        <div class="payment-link-container">
                                                            <a href="<?= $checkoutUrl ?>" style="font-weight:bold; color:#7cc64b; text-decoration: underline;">Kattints ide a fizetéshez</a>
                                                        </div>

                                                        <br/>
                                                        <span style="color: #ff5d66;"><strong>Figyelem:</strong></span> A foglalást 1 órán keresztül tartjuk fenn számodra. Ezután a rendszerünk a helyet automatikusan felszabadítja a várólistán szereplőknek, az igénylés pedig törlésre kerül.
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="clear:both;"></div>
                                        </div>
                                    </div>
                                    <div class="news_block_right news_block_right_hidden"></div>
                                    <div class="news_block_right_b"></div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="fobox_lab"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="div_body_space"></div>
            </div>
            <div id="footer_bg">
                <div id="footer">
                    <div id="footer_left"><a href="#"></a></div>
                    <div id="footer_center"></div>
                    <div id="footer_right"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function(){
            document.addEventListener('click', function(e){
                var a = e.target.closest('a');
                if(!a) return;
                var href = a.getAttribute('href') || '';

                if (href.match(/^https?:\/\/(buy\.stripe\.com)/i)) return;

                if (href === '#' || href === '' || !href.match(/^https?:/i)) {
                    e.preventDefault();
                    window.location.reload();
                    return false;
                }
            }, true);
        })();
    </script>

</body>
</html>

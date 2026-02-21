<?php
/* Smarty version 4.5.5, created on 2026-02-21 21:49:33
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_699a1a5d56ba09_66902423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1750074754,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_699a1a5d56ba09_66902423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/opt/lampp/htdocs/presta/var/cache/prod/smarty/compile/hummingbirdlayouts_layout_full_width_tpl/f3/4d/a3/f34da33afa8e62d6083241eebe774a0007a81eb8_2.file.helpers.tpl.php',
    'uid' => 'f34da33afa8e62d6083241eebe774a0007a81eb8',
    'call_name' => 'smarty_template_function_renderLogo_569359550699a1a5d3adea2_50214667',
  ),
));
?>
<div id="block-myaccount-infos" class="footer__block col-md-6 col-lg-3">
  <p class="footer__block__title d-none d-md-flex">
    <a href="http://localhost/presta/mon-compte" rel="nofollow">
      Votre compte
    </a>
  </p>

  <div role="button" class="footer__block__toggle d-md-none collapsed" data-bs-target="#footer_account_list" data-bs-toggle="collapse" aria-expanded="false">
    <span class="footer__block__title">Votre compte</span>
    <i class="material-icons" aria-hidden="true">arrow_drop_down</i>
  </div>
  <ul class="footer__block__content footer__block__content-list collapse" id="footer_account_list">
          <li><a href="http://localhost/presta/suivi-commande-invite" title="Suivi de commande" rel="nofollow">Suivi de commande</a></li>
      <li><a href="http://localhost/presta/mon-compte" title="Identifiez-vous" rel="nofollow">Connexion</a></li>
      <li><a href="http://localhost/presta/inscription" title="Créez votre compte" rel="nofollow">Créez votre compte</a></li>
      <li>
  <a href="//localhost/presta/module/ps_emailalerts/account" title="Mes alertes">
    Mes alertes
  </a>
</li>

    	</ul>
</div>
<?php }
}

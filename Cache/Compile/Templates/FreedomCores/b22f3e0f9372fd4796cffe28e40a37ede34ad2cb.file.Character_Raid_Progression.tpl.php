<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 23:15:33
         compiled from "E:\OpenServer\domains\wow.loc\Templates\FreedomCore\parts\Character_Raid_Progression.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32183574f4265325e96-95992660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22f3e0f9372fd4796cffe28e40a37ede34ad2cb' => 
    array (
      0 => 'E:\\OpenServer\\domains\\wow.loc\\Templates\\FreedomCore\\parts\\Character_Raid_Progression.tpl',
      1 => 1445375478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32183574f4265325e96-95992660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Raids' => 0,
    'ClassicRaids' => 0,
    'TBCRaids' => 0,
    'WotLKRaids' => 0,
    'NPC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f426534af44_56883999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f426534af44_56883999')) {function content_574f426534af44_56883999($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript">
    //<![CDATA[
    $(document).ready(function() {
        new Summary.RaidProgression({ nTrivialRaids: 0, nOptimalRaids: 0, nChallengingRaids: 5  }, {
            <?php  $_smarty_tpl->tpl_vars['ClassicRaids'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ClassicRaids']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Raids']->value['Classic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ClassicRaids']->key => $_smarty_tpl->tpl_vars['ClassicRaids']->value) {
$_smarty_tpl->tpl_vars['ClassicRaids']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['ClassicRaids']->value['data']['instance'];?>
: {
                    name: "<?php echo $_smarty_tpl->tpl_vars['ClassicRaids']->value['data']['instance'];?>
",
                    playerLevel: <?php echo $_smarty_tpl->tpl_vars['ClassicRaids']->value['data']['npcs'][0]['instance_level'];?>
,
                    nPlayers: -10,
                    location: "[WIP]",
                    expansion: <?php echo $_smarty_tpl->tpl_vars['ClassicRaids']->value['data']['expansion'];?>
,
                    heroicMode: false,
                    mythicMode: false,
                    bosses:
                    [
                        { name: "<?php echo $_smarty_tpl->tpl_vars['ClassicRaids']->value['data']['npcs'][0]['name'];?>
", nKills: <?php echo $_smarty_tpl->tpl_vars['ClassicRaids']->value['data']['counter'];?>
 }
                    ]
                },
            <?php } ?>

            <?php  $_smarty_tpl->tpl_vars['TBCRaids'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TBCRaids']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Raids']->value['TBC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TBCRaids']->key => $_smarty_tpl->tpl_vars['TBCRaids']->value) {
$_smarty_tpl->tpl_vars['TBCRaids']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['TBCRaids']->value['data']['instance'];?>
: {
                name: "<?php echo $_smarty_tpl->tpl_vars['TBCRaids']->value['data']['instance'];?>
",
                playerLevel: <?php echo $_smarty_tpl->tpl_vars['TBCRaids']->value['data']['npcs'][0]['instance_level'];?>
,
                nPlayers: -10,
                location: "[WIP]",
                expansion: <?php echo $_smarty_tpl->tpl_vars['TBCRaids']->value['data']['expansion'];?>
,
                heroicMode: false,
                mythicMode: false,
                bosses:
                [
                    { name: "<?php echo $_smarty_tpl->tpl_vars['TBCRaids']->value['data']['npcs'][0]['name'];?>
", nKills: <?php echo $_smarty_tpl->tpl_vars['TBCRaids']->value['data']['counter'];?>
 }
                ]
            },
            <?php } ?>

            <?php  $_smarty_tpl->tpl_vars['WotLKRaids'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['WotLKRaids']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Raids']->value['WotLK']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['WotLKRaids']->key => $_smarty_tpl->tpl_vars['WotLKRaids']->value) {
$_smarty_tpl->tpl_vars['WotLKRaids']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['WotLKRaids']->value['data']['instance'];?>
: {
                    name: "<?php echo $_smarty_tpl->tpl_vars['WotLKRaids']->value['data']['instance'];?>
",
                    playerLevel: <?php echo $_smarty_tpl->tpl_vars['WotLKRaids']->value['data']['npcs'][0]['instance_level'];?>
,
                    nPlayers: -10,
                    location: "[WIP]",
                    expansion: <?php echo $_smarty_tpl->tpl_vars['WotLKRaids']->value['data']['expansion'];?>
,
                    heroicMode: false,
                    mythicMode: false,
                    bosses:
                    [
                        <?php if (isset($_smarty_tpl->tpl_vars['WotLKRaids']->value['data']['counter'])) {?>
                            { name: "<?php echo $_smarty_tpl->tpl_vars['WotLKRaids']->value['data']['npcs'][0]['name'];?>
", nKills: <?php echo $_smarty_tpl->tpl_vars['WotLKRaids']->value['data']['counter'];?>
 }
                        <?php } else { ?>
                            <?php  $_smarty_tpl->tpl_vars['NPC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NPC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['WotLKRaids']->value['data']['npcs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NPC']->key => $_smarty_tpl->tpl_vars['NPC']->value) {
$_smarty_tpl->tpl_vars['NPC']->_loop = true;
?>
                                { name: "<?php echo $_smarty_tpl->tpl_vars['NPC']->value['name'];?>
", nKills: <?php echo $_smarty_tpl->tpl_vars['NPC']->value['counter'];?>
, nHeroicKills: 0 },
                            <?php } ?>
                        <?php }?>
                    ]
                },
            <?php } ?>

        });
    });
    //]]>
<?php echo '</script'; ?>
>
<?php }} ?>

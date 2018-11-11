<?php
if (file_exists("/usr/bin/apt")) {
  if (file_exists("/usr/lib/sudo")) {
    $system="ubuntu";
  } elseif (file_exists("/usr/bin/sudo")) {
    $system="ubuntu";
  } elseif (file_exists("/usr/sbin/sudo")) {
    $system="ubuntu";
  } else {
    $system="debian";
  }
} elseif (file_exists("/data/data/com.termux/files/usr/bin/pkg")) {
  $system="termux";
}
?>

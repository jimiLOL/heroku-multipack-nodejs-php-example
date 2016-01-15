<?php
echo readfile("visit.txt");
$file = fopen("visit.txt", "a+");
fwrite($this->file, "\n------------ ".date('H:i:s d.m.Y')." -------------\n");
fclose($this->file);
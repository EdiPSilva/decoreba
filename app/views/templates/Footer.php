<footer>
    <i class="fa fa-copyright" aria-hidden="true"></i>&nbsp;<small><?= $this->getDescription(); ?></small>
</footer>
</div>
<script src="<?= LINKJS . '/jquery.min.js' ?>"></script>
<?php
$script = strtolower($this->getScreen()) . '.js';
$file = ROOTDIRECTORYSERVER . 'src' . DIRECTORY_SEPARATOR .'js'. DIRECTORY_SEPARATOR. $script;
if (file_exists($file)) {
    echo "<script src=\"".LINKJS .'/'. $script."\"></script>";
}
?>
</body>

</html>
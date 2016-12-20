<?
defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="control-group">
	<label class="control-label"><?=$label?></label>
	<? if($description): ?>
	<i class="fa fa-question-circle launch-tooltip" title="" data-original-title="<?=$description?>"></i>
	<? endif; ?>
	<div class="controls">
		<?
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = $view->getRequestValue();
			$content = $data['content'];
		}
		$view->inc('form.php', array('composerContent' => $content, 'fieldName' => $view->field('content')));
		?>
	</div>
</div>
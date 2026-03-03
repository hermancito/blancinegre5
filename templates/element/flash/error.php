<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div  style="background: red; color: white; padding: 20px; margin: 20px;" onclick="this.classList.add('hidden');"><?= $message ?></div>

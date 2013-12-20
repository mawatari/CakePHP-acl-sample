<?php
/**
 * @var $this View
 */
$this->set('title_for_layout', 'ログイン');

echo $this->Form->create('User', ['action' => 'login']);
echo $this->Form->inputs([
	'legend' => __('Login'),
	'username',
	'password'
]);
echo $this->Form->end('Login');
?>

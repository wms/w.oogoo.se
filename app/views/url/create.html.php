<?php if($url->exists()): ?>
<h2>URL shortened to:</h2>
<h1>http://w.oogoo.se/<?= $url->slug ?></h1>
<p><?= $this->html->link('Go again', '/')?></p>
<?php else: ?>
<h1>Your URLs. Give them to me.</h1>
<?= $this->form->create($url) ?>
<?= $this->form->field('url', array('label' => 'URL to shorten')) ?>
<?= $this->form->submit('goosify') ?>
<?= $this->form->end() ?>
<?php endif ?>

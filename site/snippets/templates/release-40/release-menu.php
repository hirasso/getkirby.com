<nav class="release-menu">
  <ul class="font-mono text-sm pt-6 sticky" style="--top: var(--spacing-2)">
    <li><a href="#roadmap">Roadmap</a></li>
		<?php foreach ($sections as $section): ?>
    <li><a href="#<?= $section->slug() ?>"><?= $section->menu()->or($section->title()) ?></a></li>
		<?php endforeach ?>
    <li><a href="#versioning">Versioning Scheme</a></li>
    <li><a href="#faq">FAQs</a></li>
    <li><a href="#changes">Changelog</a></li>
  </ul>
</nav>

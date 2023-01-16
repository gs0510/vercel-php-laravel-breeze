/**
 * Built assets aren't currently routeable via vercel-php
 * Manually route assets to be found
 * https://github.com/juicyfx/vercel-examples/commit/1fcbe3ff98ae34830cfd779224433cca16bb4f93
 */


echo require __DIR__ . '/../public/build/assets/' . basename($_GET['file']);
<?php //netteCache[01]000390a:2:{s:4:"time";s:21:"0.45945800 1358881134";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"/opt/lampp/htdocs/Marks/sandbox/app/templates/Homepage/default.latte";i:2;i:1358881131;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /opt/lampp/htdocs/Marks/sandbox/app/templates/Homepage/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6cfl5cuf7a')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb50ee53334d_content')) { function _lb50ee53334d_content($_l, $_args) { extract($_args)
?><div id=mainBlock class=center>
<div id=menu>

</div>
<div id=banner>
<p class=heading>Welcome, guys!</p><br />
Is it hard for you to remember your marks?<br />
Is it even harder to remember where you put papers with them?<br />
If you answered "yes!" on both questions, this is your lucky day!<br />
Let us invite you to our mark deposit system!
</div>
<div id=content>
<?php $_ctrl = $_control->getComponent("loginForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render('errors') ;$_ctrl = $_control->getComponent("loginForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
No account?
<a href="<?php echo htmlSpecialChars($_control->link("Registration:")) ?>">Register</a>
</div>
</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 
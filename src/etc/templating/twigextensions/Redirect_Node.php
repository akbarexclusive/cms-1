<?php
namespace Craft;

/**
 * Class Redirect_Node
 *
 * @package craft.app.etc.templating.twigextensions
 */
class Redirect_Node extends \Twig_Node
{
	/**
	 * Compiles a Redirect_Node into PHP.
	 */
	public function compile(\Twig_Compiler $compiler)
	{
		$compiler
		    ->addDebugInfo($this)
		    ->write('\Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl(')
		    ->subcompile($this->getNode('path'))
		    ->raw("));\n");
	}
}

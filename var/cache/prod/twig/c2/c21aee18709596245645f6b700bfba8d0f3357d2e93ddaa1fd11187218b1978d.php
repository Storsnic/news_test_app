<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_99bc5d41af557d562b406346fc303249e0e67c83c92d3d2bf3bc29cdad7f10ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error404.html.twig", 11);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        echo "error";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "    <h1 class=\"text-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http_error.name", array("%status_code%" => 404)), "html", null, true);
        echo "</h1>

    <p class=\"lead\">
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http_error_404.description"), "html", null, true);
        echo "
    </p>
    <p>
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http_error_404.suggestion", array("%url%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index")));
        echo "
    </p>
";
    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        // line 27
        echo "   
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 27,  59 => 26,  52 => 22,  46 => 19,  39 => 16,  36 => 15,  30 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error404.html.twig", "C:\\xampp\\htdocs\\symfony_demo\\app\\Resources\\TwigBundle\\views\\Exception\\error404.html.twig");
    }
}

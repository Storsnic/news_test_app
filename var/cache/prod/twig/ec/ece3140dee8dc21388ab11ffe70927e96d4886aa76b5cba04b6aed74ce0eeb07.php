<?php

/* @Twig/Exception/error403.html.twig */
class __TwigTemplate_8c545d26d1697f9a0de2048c641de5a5999da51192942f290fc28a9dff6934ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error403.html.twig", 11);
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
        echo "    <h1 class=\"text-danger\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http_error.name", array("%status_code%" => 403)), "html", null, true);
        echo "</h1>

    <p class=\"lead\">
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http_error_403.description"), "html", null, true);
        echo "
    </p>
    <p>
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http_error_403.suggestion"), "html", null, true);
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
        return "@Twig/Exception/error403.html.twig";
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
        return new Twig_Source("", "@Twig/Exception/error403.html.twig", "C:\\xampp\\htdocs\\symfony_demo\\app\\Resources\\TwigBundle\\views\\Exception\\error403.html.twig");
    }
}
